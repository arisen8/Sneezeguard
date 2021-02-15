<?php
ini_set('session.cookie_httponly',1);
ini_set('session.cookie_secure',1);
  
ob_start();
require('includes/application_top.php');
require(DIR_WS_FUNCTIONS . 'url_validation.php');
$obj=new Urlvalidation();

if($_GET['categories_id']=='' || $_GET['keywords']=='')
{
	tep_redirect(tep_href_link('validation_faild', '', 'SSL'));
		exit;
}

if(isset($_GET['categories_id'])){
	$category_id=$_GET['categories_id'];
	if($obj->tep_check_special_charectar($category_id)){
		tep_redirect(tep_href_link('validation_faild', '', 'SSL'));
		exit;
	}}
if(isset($_GET['keywords'])){
	if($_GET['keywords']=='Ring-EP5')
	{
		
	}
	else{
  if($obj->tep_check_special_charectar($_GET['keywords'])){
    tep_redirect(tep_href_link('validation_faild', '', 'SSL'));
    exit;
  }
}
}
if(isset($_GET['sort'])){
  if($obj->tep_check_special_charectar($_GET['sort'])){
    tep_redirect(tep_href_link('validation_faild', '', 'SSL'));
    exit;
  }
}



    require(DIR_WS_INCLUDES . 'header_new_design.php');
?>

<div style="height:90px;"></div>
<style>
	.productListingDat a{
        text-decoration: none;
    }
	.numb1 span{font-size:21px;}
	.contentText, .contentText table {font-size: 17px !important;}
    .productListingDat h1{font-size: 17px !important;}
    .productListingDat a{font-size: 15px !important;}
	#priceee{font-size: 17px !important;}
	
	.parts-img-main img{height:20rem;}
	
	@media screen and (max-width: 1367px) {
	.parts-img-main img{height:13rem;}	
	}
	
	@media screen and (max-width: 1200px) {
	.parts-img-main img{height:12rem;}	
	}
	@media screen and (max-width: 992px) {
	.parts-img-main img{height:9rem;}	
	}
	
	@media screen and (max-width: 768px) {
	.parts-img-main img{height:8rem;}	
	}
	
	@media screen and (max-width: 600px) {
	.parts-img-main img{height:16rem;}	
	}
	
	@media screen and (max-width: 480px) {
	.parts-img-main img{height:15rem;}	
	}
	</style>
<div class="contentContainer">

<?php
// create column list
  $define_list = array('PRODUCT_LIST_SORT_ORDER' => PRODUCT_LIST_SORT_ORDER,
						'PRODUCT_LIST_MODEL' => PRODUCT_LIST_MODEL,
                       'PRODUCT_LIST_NAME' => PRODUCT_LIST_NAME,
                       'PRODUCT_LIST_MANUFACTURER' => PRODUCT_LIST_MANUFACTURER,
                       'PRODUCT_LIST_PRICE' => PRODUCT_LIST_PRICE,
                       'PRODUCT_LIST_QUANTITY' => PRODUCT_LIST_QUANTITY,
                       'PRODUCT_LIST_WEIGHT' => PRODUCT_LIST_WEIGHT,
                       'PRODUCT_LIST_IMAGE' => PRODUCT_LIST_IMAGE,
                       'PRODUCT_LIST_BUY_NOW' => PRODUCT_LIST_BUY_NOW);

  asort($define_list);

  $column_list = array();
  reset($define_list);
  while (list($key, $value) = each($define_list)) {
    if ($value > 0) $column_list[] = $key;
  }

  $select_column_list = '';

  for ($i=0, $n=sizeof($column_list); $i<$n; $i++) {
    switch ($column_list[$i]) {
	//sort order
        case 'PRODUCT_LIST_SORT_ORDER':
          $select_column_list .= 'p.products_sort_order, ';
          break;
//end sort order
      case 'PRODUCT_LIST_MODEL':
        $select_column_list .= 'p.products_model, ';
        break;
      case 'PRODUCT_LIST_MANUFACTURER':
        $select_column_list .= 'm.manufacturers_name, ';
        break;
      case 'PRODUCT_LIST_QUANTITY':
        $select_column_list .= 'p.products_quantity, ';
        break;
      case 'PRODUCT_LIST_IMAGE':
        $select_column_list .= 'p.products_image, ';
        break;
      case 'PRODUCT_LIST_WEIGHT':
        $select_column_list .= 'p.products_weight, ';
        break;
    }
  }

  $select_str = "select distinct " . $select_column_list . " m.manufacturers_id, p.products_id, pd.products_name, p.products_price, p.products_tax_class_id, IF(s.status, s.specials_new_products_price, NULL) as specials_new_products_price, IF(s.status, s.specials_new_products_price, p.products_price) as final_price ";

  if ( (DISPLAY_PRICE_WITH_TAX == 'true') && (tep_not_null($pfrom) || tep_not_null($pto)) ) {
    $select_str .= ", SUM(tr.tax_rate) as tax_rate ";
  }

  $from_str = "from " . TABLE_PRODUCTS . " p left join " . TABLE_MANUFACTURERS . " m using(manufacturers_id) left join " . TABLE_SPECIALS . " s on p.products_id = s.products_id";

  if ( (DISPLAY_PRICE_WITH_TAX == 'true') && (tep_not_null($pfrom) || tep_not_null($pto)) ) {
    if (!tep_session_is_registered('customer_country_id')) {
      $customer_country_id = STORE_COUNTRY;
      $customer_zone_id = STORE_ZONE;
    }
    $from_str .= " left join " . TABLE_TAX_RATES . " tr on p.products_tax_class_id = tr.tax_class_id left join " . TABLE_ZONES_TO_GEO_ZONES . " gz on tr.tax_zone_id = gz.geo_zone_id and (gz.zone_country_id is null or gz.zone_country_id = '0' or gz.zone_country_id = '" . (int)$customer_country_id . "') and (gz.zone_id is null or gz.zone_id = '0' or gz.zone_id = '" . (int)$customer_zone_id . "')";
  }

  $from_str .= ", " . TABLE_PRODUCTS_DESCRIPTION . " pd, " . TABLE_CATEGORIES . " c, " . TABLE_PRODUCTS_TO_CATEGORIES . " p2c";

  $where_str = " where p.products_status = '1' and p.products_id = pd.products_id and pd.language_id = '" . (int)$languages_id . "' and p.products_id = p2c.products_id and p2c.categories_id = c.categories_id and p.products_quantity > 0";

  if (isset($HTTP_GET_VARS['categories_id']) && tep_not_null($HTTP_GET_VARS['categories_id'])) {
    if (isset($HTTP_GET_VARS['inc_subcat']) && ($HTTP_GET_VARS['inc_subcat'] == '1')) {
      $subcategories_array = array();
      tep_get_subcategories($subcategories_array, $HTTP_GET_VARS['categories_id']);

      $where_str .= " and p2c.products_id = p.products_id and p2c.products_id = pd.products_id and (p2c.categories_id = '" . (int)$HTTP_GET_VARS['categories_id'] . "'";

      for ($i=0, $n=sizeof($subcategories_array); $i<$n; $i++ ) {
        $where_str .= " or p2c.categories_id = '" . (int)$subcategories_array[$i] . "'";
      }

      $where_str .= ")";
    } else {
      $where_str .= " and p2c.products_id = p.products_id and p2c.products_id = pd.products_id and pd.language_id = '" . (int)$languages_id . "' and p2c.categories_id = '" . (int)$HTTP_GET_VARS['categories_id'] . "'";
    }
  }

  if (isset($HTTP_GET_VARS['manufacturers_id']) && tep_not_null($HTTP_GET_VARS['manufacturers_id'])) {
    $where_str .= " and m.manufacturers_id = '" . (int)$HTTP_GET_VARS['manufacturers_id'] . "'";
  }

  if (isset($search_keywords) && (sizeof($search_keywords) > 0)) {
    $where_str .= " and (";
    for ($i=0, $n=sizeof($search_keywords); $i<$n; $i++ ) {
      switch ($search_keywords[$i]) {
        case '(':
        case ')':
        case 'and':
        case 'or':
          $where_str .= " " . $search_keywords[$i] . " ";
          break;
        default:
          $keyword = tep_db_prepare_input($search_keywords[$i]);
          $where_str .= "(pd.products_name like '%" . tep_db_input($keyword) . "%' or p.products_model like '%" . tep_db_input($keyword) . "%' or m.manufacturers_name like '%" . tep_db_input($keyword) . "%'";
          if (isset($HTTP_GET_VARS['search_in_description']) && ($HTTP_GET_VARS['search_in_description'] == '1')) $where_str .= " or pd.products_description like '%" . tep_db_input($keyword) . "%'";
          $where_str .= ')';
          break;
      }
    }
    $where_str .= " )";
  }

  if (tep_not_null($dfrom)) {
    $where_str .= " and p.products_date_added >= '" . tep_date_raw($dfrom) . "'";
  }

  if (tep_not_null($dto)) {
    $where_str .= " and p.products_date_added <= '" . tep_date_raw($dto) . "'";
  }

  if (tep_not_null($pfrom)) {
    if ($currencies->is_set($currency)) {
      $rate = $currencies->get_value($currency);

      $pfrom = $pfrom / $rate;
    }
  }

  if (tep_not_null($pto)) {
    if (isset($rate)) {
      $pto = $pto / $rate;
    }
  }

  if (DISPLAY_PRICE_WITH_TAX == 'true') {
    if ($pfrom > 0) $where_str .= " and (IF(s.status, s.specials_new_products_price, p.products_price) * if(gz.geo_zone_id is null, 1, 1 + (tr.tax_rate / 100) ) >= " . (double)$pfrom . ")";
    if ($pto > 0) $where_str .= " and (IF(s.status, s.specials_new_products_price, p.products_price) * if(gz.geo_zone_id is null, 1, 1 + (tr.tax_rate / 100) ) <= " . (double)$pto . ")";
  } else {
    if ($pfrom > 0) $where_str .= " and (IF(s.status, s.specials_new_products_price, p.products_price) >= " . (double)$pfrom . ")";
    if ($pto > 0) $where_str .= " and (IF(s.status, s.specials_new_products_price, p.products_price) <= " . (double)$pto . ")";
  }

  if ( (DISPLAY_PRICE_WITH_TAX == 'true') && (tep_not_null($pfrom) || tep_not_null($pto)) ) {
    $where_str .= " group by p.products_id, tr.tax_priority";
  }

  if ( (!isset($HTTP_GET_VARS['sort'])) || (!preg_match('/^[1-8][ad]$/', $HTTP_GET_VARS['sort'])) || (substr($HTTP_GET_VARS['sort'], 0, 1) > sizeof($column_list)) ) {
    for ($i=0, $n=sizeof($column_list); $i<$n; $i++) {
     /* if ($column_list[$i] == 'PRODUCT_LIST_NAME') {
        $HTTP_GET_VARS['sort'] = $i+1 . 'a';
        $order_str = " order by pd.products_name";*/
		if ($column_list[$i] == 'PRODUCT_LIST_SORT_ORDER') {
          $HTTP_GET_VARS['sort'] = $i+1 . 'a';
          $listing_sql .= " order by p.products_sort_order, pd.products_name";

          break;
        }
        elseif ($column_list[$i] == 'PRODUCT_LIST_NAME' && PRODUCT_LIST_SORT_ORDER==0) {
          $HTTP_GET_VARS['sort'] = $i+1 . 'a';
          $listing_sql .= " order by pd.products_name";
        break;
      }
    }
  } else {
    $sort_col = substr($HTTP_GET_VARS['sort'], 0 , 1);
    $sort_order = substr($HTTP_GET_VARS['sort'], 1);
    switch ($column_list[$sort_col-1]) {
		//sort order
        case 'PRODUCT_LIST_SORT_ORDER':
          $order_str .= " order by p.products_sort_order, pd.products_name " . ($sort_order == 'a' ? 'asc' : '');		  
          break;
//end sort order
      case 'PRODUCT_LIST_MODEL':
        $order_str = " order by p.products_model " . ($sort_order == 'd' ? 'desc' : '') . ", pd.products_name";
        break;
      case 'PRODUCT_LIST_NAME':
        $order_str = " order by pd.products_name " . ($sort_order == 'd' ? 'desc' : '');
        break;
      case 'PRODUCT_LIST_MANUFACTURER':
        $order_str = " order by m.manufacturers_name " . ($sort_order == 'd' ? 'desc' : '') . ", pd.products_name";
        break;
      case 'PRODUCT_LIST_QUANTITY':
        $order_str = " order by p.products_quantity " . ($sort_order == 'd' ? 'desc' : '') . ", pd.products_name";
        break;
      case 'PRODUCT_LIST_IMAGE':
        $order_str = " order by pd.products_name";
        break;
      case 'PRODUCT_LIST_WEIGHT':
        $order_str = " order by p.products_weight " . ($sort_order == 'd' ? 'desc' : '') . ", pd.products_name";
        break;
      case 'PRODUCT_LIST_PRICE':
        $order_str = " order by final_price " . ($sort_order == 'd' ? 'desc' : '') . ", pd.products_name";
        break;
    }
  }

  $listing_sql = $select_str . $from_str . $where_str . $order_str;
  require(DIR_WS_MODULES . FILENAME_PRODUCT_LISTING);
?>

  <br />
  
  <?php  
  $categories_idss=$_REQUEST['categories_id'];
  //if($categories_idss==)
  
   $servernamess = DB_SERVER;
		$usernamess = DB_SERVER_USERNAME;
		$passwordss = DB_SERVER_PASSWORD;
		$dbnamess = DB_DATABASE;
    $connttt = mysqli_connect($servernamess,$usernamess,$passwordss,$dbnamess) or die(mysqli_connect_error());
	$query_get_cat=mysqli_query($connttt,"SELECT * FROM categories WHERE categories_id=".$categories_idss."");
	$get_cat=mysqli_fetch_array($query_get_cat);
	$parent_cat_id=$get_cat['parent_id'];
	$cpathinfo='cPath='.$parent_cat_id.'_'.$categories_idss.'';
	
  ?>

  <div class="container text-center">
    <a class="btn btn-dark btn-lg" href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,$cpathinfo).''; ?>">BACK</a>
  </div>
</div>

<?php
require(DIR_WS_INCLUDES . 'footer_new_design.php');
?>