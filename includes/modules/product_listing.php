<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  $listing_split = new splitPageResults($listing_sql, MAX_DISPLAY_SEARCH_RESULTS, 'p.products_id');
?>
<style>
  a{
    text-decoration: none !important;
  }
  a:hover{
    text-decoration: none !important;
    color: black;
  }
  .btn-container {
    position: relative;
    bottom: 20px;
    right: 20px;
}
</style>
<div class="container">
  <div class="contentText">
<?php
  if ( ($listing_split->number_of_rows > 0) && ( (PREV_NEXT_BAR_LOCATION == '1') || (PREV_NEXT_BAR_LOCATION == '3') ) ) {
?>

    <div>
      <span style="float: right;"><?php echo TEXT_RESULT_PAGE . ' ' . $listing_split->display_links(MAX_DISPLAY_PAGE_LINKS, tep_get_all_get_params(array('page', 'info', 'x', 'y'))); ?></span>

      <span><?php echo $listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_PRODUCTS); ?></span>
    </div>

    <br />

<?php
  }

  $prod_list_contents = '<div class="ui-widget infoBoxContainer">' .
                        '  <div class="ui-widget-header ui-corner-top infoBoxHeading">' .
                        '    <table border="0" width="100%" cellspacing="0" cellpadding="2" class="productListingHeader">' .
                        '      <tr>';
  $prod_list_contents .= '        <td style="padding:9px 20px;">Categories/ <a href="advanced_search.php">Advanced Search</a> &raquo; <a href="advanced_search_result.php?keywords='.$_REQUEST['keywords'].'">Search Results</a></td>';
  $prod_list_contents .= '      </tr>' .
                         '    </table>' .
                         '  </div>';

  if ($listing_split->number_of_rows > 0) {
    $rows = 0;
    $listing_query = tep_db_query($listing_split->sql_query);


$cattt_id=$HTTP_GET_VARS['categories_id'];
if ($cattt_id==127)
{


    $prod_list_contents .= '  <div class="ui-widget-content ui-corner-bottom productListTable">' ;
    $i=0;
    while ($listing = tep_db_fetch_array($listing_query)) {
      $rows++;
	  
	  
	  
	  
$query_spacial_pricess=mysql_query("SELECT * FROM  products_description WHERE products_id=".$listing['products_id']."") or die(mysql_error());
$spacial_pricess=mysql_fetch_array($query_spacial_pricess);

$description=$spacial_pricess['products_description'];

	  
	  
	  // print_r($listing);
      if($i==0){
        $prod_list_contents .= '<tr style="border-bottom:1px dotted #ccc">';
      }
     // if($i==0)
        $prod_list_contents .= '<td style="border-right:1px dotted #ccc;border-bottom:1px dotted #ccc;"><table><tr>';
      //else
        //$prod_list_contents .= '<td style="border-bottom:1px dotted #ccc;padding:10px;"><table>'; 
       // $prod_list_contents.='<tr>';
		
		
        if (isset($HTTP_GET_VARS['manufacturers_id'])  && tep_not_null($HTTP_GET_VARS['manufacturers_id'])) {
          $prod_list_contents .= '<td align="center"><a href="' . tep_href_link(FILENAME_PRODUCT_INFO1, 'manufacturers_id=' . $HTTP_GET_VARS['manufacturers_id'] . '&products_id=' . $listing['products_id']) . '"><div style="float:left;padding:5px 0 5px 0;">' . tep_image(DIR_WS_IMAGES . $listing['products_image'], $listing['products_name'], SMALL_IMAGE_WIDTH, SMALL_IMAGE_HEIGHT) . '</div></a></td>';
        } else {
          $prod_list_contents .= '<td align="center"><a href="' . tep_href_link(FILENAME_PRODUCT_INFO1, ($cPath ? 'cPath=' . $cPath . '&' : '') . 'products_id=' . $listing['products_id']) . '"><div style="float:left;padding:10px 3px 10px 3px;background:#171717;">' . tep_image(DIR_WS_IMAGES . $listing['products_image'], $listing['products_name'], SMALL_IMAGE_WIDTH, SMALL_IMAGE_HEIGHT) . '</div></a></td>';
        }   
        $prod_list_contents.='<td valign="top"><table>';
        $prod_list_contents.='<tr>';
            $prod_list_contents.='<td valign="top">';
                if (isset($HTTP_GET_VARS['manufacturers_id']) && tep_not_null($HTTP_GET_VARS['manufacturers_id'])) {
                  $prod_list_contents .= '<td valign="top"><a href="' . tep_href_link(FILENAME_PRODUCT_INFO1, 'manufacturers_id=' . $HTTP_GET_VARS['manufacturers_id'] . '&products_id=' . $listing['products_id']) . '"><h1 style="padding:0">' . $listing['products_name'] . '</h1></a></td>';
                } else {
                  $prod_list_contents .= '<td valign="top"><a href="' . tep_href_link(FILENAME_PRODUCT_INFO1, ($cPath ? 'cPath=' . $cPath . '&' : '') . 'products_id=' . $listing['products_id']) . '"><h1 style="padding:0">' . $listing['products_name'] . '</h1></a></td>';
                }
            $prod_list_contents.='</td>';
        $prod_list_contents.='<tr>';
        $prod_list_contents.='<tr>';
            $prod_list_contents.='<td valign="top">';
                if (isset($HTTP_GET_VARS['manufacturers_id']) && tep_not_null($HTTP_GET_VARS['manufacturers_id'])) {
                  $prod_list_contents .= '<td valign="top"><a href="' . tep_href_link(FILENAME_PRODUCT_INFO1, 'manufacturers_id=' . $HTTP_GET_VARS['manufacturers_id'] . '&products_id=' . $listing['products_id']) . '">' . $description . '</a></td>';
                } else {
                  $prod_list_contents .= '<td valign="top"><a href="' . tep_href_link(FILENAME_PRODUCT_INFO1, ($cPath ? 'cPath=' . $cPath . '&' : '') . 'products_id=' . $listing['products_id']) . '">' . $description . '</a></td>';
                }
            $prod_list_contents.='</td>';
        $prod_list_contents.='<tr>';
        $prod_list_contents.='</table></td>';             
        $prod_list_contents.='</tr>';
        $prod_list_contents.='<tr>';
        if (tep_not_null($listing['specials_new_products_price'])) {
          $prod_list_contents .= '<td align="right"><del>' .  $currencies->display_price($listing['products_price'], tep_get_tax_rate($listing['products_tax_class_id'])) . '</del>&nbsp;&nbsp;<span class="productSpecialPrice">' . $currencies->display_price($listing['specials_new_products_price'], tep_get_tax_rate($listing['products_tax_class_id'])) . '</span></td>';
        } else {
          $prod_list_contents .= '<td align="center" id="priceee" style="color: #DAA823; font-size: 14px; font-weight: bold;border-right:1px dotted #ccc;">' . $currencies->display_price($listing['products_price'], tep_get_tax_rate($listing['products_tax_class_id'])) . '</td>';
        }
        $prod_list_contents .= '<td align="left" style="padding:5px;"><a href="'.tep_href_link(basename($PHP_SELF), tep_get_all_get_params(array('action')) . 'action=buy_now&products_id=' . $listing['products_id']).'">'.tep_image_submit('m19.gif', IMAGE_BUTTON_IN_CART, "button").'</a>&nbsp;<a href="'.tep_href_link(FILENAME_PRODUCT_INFO1, ($cPath ? 'cPath=' . $cPath . '&' : '') . 'products_id=' . $listing['products_id']) .'">'.tep_image_submit('m20.gif', "Product detail", "button").'</a>&nbsp<a href="'.tep_href_link(basename($PHP_SELF), tep_get_all_get_params(array('action')) . 'action=add_wishlist&products_id=' . $listing['products_id']).'"><img src=images/wishlist_icon.png height=20 border=0 title="Save for later"></a></td>';
        $prod_list_contents.='</tr>';
      $prod_list_contents .= '</table></td>';
	  
	  
	  
      if($i==0){
        $prod_list_contents .= '</tr>';
      }
      $i++;
      if($i==2){
        $i=0;
      }
    }

    $prod_list_contents .= '    </div>' .
                           '  </div>' .
                           '</div>';
						   
						   	
	
}
else
{
  $i=0;
  $prod_list_contents .= '<div class="row">';
  while ($listing = tep_db_fetch_array($listing_query)) {
  $rows++;
  $prod_list_contents .= '<div class="col-sm-4 col-md-3  p-2"><div class="card h-100">';
  if (isset($HTTP_GET_VARS['manufacturers_id'])  && tep_not_null($HTTP_GET_VARS['manufacturers_id'])) {
    $prod_list_contents .= '<a href="' . tep_href_link(FILENAME_PRODUCT_INFO1, 'manufacturers_id=' . $HTTP_GET_VARS['manufacturers_id'] . '&products_id=' . $listing['products_id']) . '"><div style="float:left;padding:5px 0 5px 0;">' . tep_image(DIR_WS_IMAGES . $listing['products_image'], $listing['products_name'], SMALL_IMAGE_WIDTH, SMALL_IMAGE_HEIGHT) . '</div></a>';
  } else {
    $prod_list_contents .= '<a href="' . tep_href_link(FILENAME_PRODUCT_INFO1, ($cPath ? 'cPath=' . $cPath . '&' : '') . 'products_id=' . $listing['products_id']) . '"><div class="card-header parts-img-main"  ">' . tep_image(DIR_WS_IMAGES . $listing['products_image'], $listing['products_name'],'100%','auto') . '</div></a>';
  }  
  if (isset($HTTP_GET_VARS['manufacturers_id']) && tep_not_null($HTTP_GET_VARS['manufacturers_id'])) {
  $prod_list_contents .= '<a href="' . tep_href_link(FILENAME_PRODUCT_INFO1, 'manufacturers_id=' . $HTTP_GET_VARS['manufacturers_id'] . '&products_id=' . $listing['products_id']) . '"><p class="text-xl-left pl-4 pr-2 font-weight-bold">' . $listing['products_name'] . '</p></a>';
  } else {
  $prod_list_contents .= '<a href="' . tep_href_link(FILENAME_PRODUCT_INFO1, ($cPath ? 'cPath=' . $cPath . '&' : '') . 'products_id=' . $listing['products_id']) . '"><p class="text-xl-left pl-4 pr-2 font-weight-bold">' . $listing['products_name'] . '</p></a>';
  }
  if (isset($HTTP_GET_VARS['manufacturers_id']) && tep_not_null($HTTP_GET_VARS['manufacturers_id'])) {
  $prod_list_contents .= '<a class="pl-4 pr-2" href="' . tep_href_link(FILENAME_PRODUCT_INFO1, 'manufacturers_id=' . $HTTP_GET_VARS['manufacturers_id'] . '&products_id=' . $listing['products_id']) . '">' . $listing['products_name'] . '</a>';
  } else {
  $prod_list_contents .= '<a class="pl-4 pr-2" href="' . tep_href_link(FILENAME_PRODUCT_INFO1, ($cPath ? 'cPath=' . $cPath . '&' : '') . 'products_id=' . $listing['products_id']) . '">' . $listing['products_name'] . '</a>';
  }
  if (tep_not_null($listing['specials_new_products_price'])) {
    $prod_list_contents .= '<del class="font-weight-bold pl-4 pr-2">Price : ' .  $currencies->display_price($listing['products_price'], tep_get_tax_rate($listing['products_tax_class_id'])) . '</del>&nbsp;&nbsp;<span class="productSpecialPrice">' . $currencies->display_price($listing['specials_new_products_price'], tep_get_tax_rate($listing['products_tax_class_id'])) . '</span>';
  } else {
    $prod_list_contents .= '<p class="font-weight-bold pl-4 pr-2">Price : ' . $currencies->display_price($listing['products_price'], tep_get_tax_rate($listing['products_tax_class_id'])) . '</p>';
  }
  $prod_list_contents .= '
  <div class="row pr-2 pl-4 pb-4 w-100 h-100 d-flex align-items-end text-center mb-0 button-container" >
    <div class="col-4 col-md-4 col-sm-4">
        <a class="btn btn-sm btn-secondary" href="'.tep_href_link(basename($PHP_SELF), tep_get_all_get_params(array('action')) . 'action=buy_now&products_id=' . $listing['products_id']).'" title="Add to cart"><i class="fa fa-shopping-cart p-1"></i></a>
    </div>
    <div class="col-4 col-md-4 col-sm-4">
        <a class="btn btn-sm btn-secondary" href="'.tep_href_link(FILENAME_PRODUCT_INFO1, ($cPath ? 'cPath=' . $cPath . '&' : '') . 'products_id=' . $listing['products_id']) .'" title="Details"><i class="fa fa-info-circle p-1"></i></a>
    </div>
    <div class="col-4 col-md-4 col-sm-4">
      <a class="btn btn-sm btn-secondary" href="'.tep_href_link(basename($PHP_SELF), tep_get_all_get_params(array('action')) . 'action=add_wishlist&products_id=' . $listing['products_id']).'" title="Add to Wishlist"><i class="fa fa-heart p-1"></i></a>
    </div>
  </div>';

  $prod_list_contents.='</div></div>';
  $i++;
  if($i==2){
    $i=0;
  }
}
$prod_list_contents.='</div>
</div></div>';
}
						   
    ?>
    <?php				   
						   
						   

    echo $prod_list_contents;
  } else {
?>

    <p><?php echo TEXT_NO_PRODUCTS; ?></p>

<?php
  }

  if ( ($listing_split->number_of_rows > 0) && ((PREV_NEXT_BAR_LOCATION == '2') || (PREV_NEXT_BAR_LOCATION == '3')) ) {
?>

    <br />

    <div class="numb1">
      <span style="float: right;"><?php echo TEXT_RESULT_PAGE . ' ' . $listing_split->display_links(MAX_DISPLAY_PAGE_LINKS, tep_get_all_get_params(array('page', 'info', 'x', 'y'))); ?></span>

      <span style="float: right;margin: 0 10px 10px 0;"><?php echo $listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_PRODUCTS); ?></span>
    </div>

<?php
  }
?>

  </div>
  </div>
