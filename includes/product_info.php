<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  require('includes/application_top.php');
  $category_name="";
  $category_image='';
  $sql="select c.categories_image, cd.categories_name from ".TABLE_CATEGORIES." as c, ".TABLE_CATEGORIES_DESCRIPTION." as cd where c.categories_id=".$_REQUEST['id']." and c.categories_id=cd.categories_id";
    $sql_result=tep_db_query($sql);
    $sql_result=tep_db_fetch_array($sql_result);
    $category_name=$sql_result['categories_name'];
    $category_image=$sql_result['categories_image'];
  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_PRODUCT_INFO);

  $product_check_query = tep_db_query("select count(*) as total from " . TABLE_PRODUCTS . " p, " . TABLE_PRODUCTS_DESCRIPTION . " pd, ".TABLE_PRODUCTS_TO_CATEGORIES." pc, ".TABLE_CATEGORIES." c where p.products_status = '1' and c.categories_id = '" . (int)$HTTP_GET_VARS['id'] . "' and pd.products_id = p.products_id and pc.products_id=p.products_id and pc.categories_id=c.categories_id and pd.language_id = '" . (int)$languages_id . "'");
  $product_check = tep_db_fetch_array($product_check_query);

  require(DIR_WS_INCLUDES . 'template_top.php');

  if ($product_check['total'] < 1) {
?>

<div class="contentContainer">
  <div class="contentText">
    <?php echo TEXT_PRODUCT_NOT_FOUND; ?>
  </div>

  <div style="float: right;">
    <?php echo tep_draw_button(IMAGE_BUTTON_CONTINUE, 'triangle-1-e', tep_href_link(FILENAME_DEFAULT)); ?>
  </div>
</div>

<?php
  } else {
    $product_info_query = tep_db_query("select p.products_id, pd.products_name, pd.products_description, p.products_model, p.products_quantity, p.products_image, pd.products_url, p.products_price, p.products_tax_class_id, p.products_date_added, p.products_date_available, p.manufacturers_id from " . TABLE_PRODUCTS . " p, " . TABLE_PRODUCTS_DESCRIPTION . " pd, ".TABLE_PRODUCTS_TO_CATEGORIES." pc, ".TABLE_CATEGORIES." c where p.products_status = '1' and c.categories_id = '" . (int)$HTTP_GET_VARS['id'] . "' and pd.products_id = p.products_id and pc.products_id=p.products_id and pc.categories_id=c.categories_id and pd.language_id = '" . (int)$languages_id . "'");
    $product_info_array=array();
    $i=0;
    $products_ids="(";
    while($p_info=tep_db_fetch_array($product_info_query)){
        $products_ids.=$p_info['products_id'].", ";
        $product_info_array[$i]['id']=$p_info['products_id'];
        $product_info_array[$i]['name']=$p_info['products_name'];
        $product_info_array[$i]['discription']=$p_info['products_description'];
        $product_info_array[$i]['model']=$p_info['products_model'];
        $product_info_array[$i]['image']=$p_info['products_image'];
        $product_info_array[$i]['price']=$p_info['products_price'];
        $product_info_array[$i]['tex_class']=$p_info['products_tax_class_id'];
        $product_info_array[$i]['date_added']=$p_info['products_date_added'];
        $product_info_array[$i]['date_available']=$p_info['products_date_available'];
        $product_info_array[$i]['manufacturers_id']=$p_info['manufacturers_id'];
        $i++;
		
    }
    $products_ids=substr($products_ids, 0, strlen($products_ids)-2);
    $products_ids.=")";
    //$_SESSION['products_ids']=$products_ids;
    $product_info = tep_db_fetch_array($product_info_query);

    tep_db_query("update " . TABLE_PRODUCTS_DESCRIPTION . " set products_viewed = products_viewed+1 where products_id = '" . (int)$HTTP_GET_VARS['products_id'] . "' and language_id = '" . (int)$languages_id . "'");

    if ($new_price = tep_get_products_special_price($product_info['products_id'])) {
      $products_price = '<del>' . $currencies->display_price($product_info['products_price'], tep_get_tax_rate($product_info['products_tax_class_id'])) . '</del> <span class="productSpecialPrice">' . $currencies->display_price($new_price, tep_get_tax_rate($product_info['products_tax_class_id'])) . '</span>';
    } else {
      $products_price = $currencies->display_price($product_info['products_price'], tep_get_tax_rate($product_info['products_tax_class_id']));
    }

    if (tep_not_null($product_info['products_model'])) {
      $products_name = $product_info['products_name'] . '<br /><span class="smallText">[' . $product_info['products_model'] . ']</span>';
    } else {
      $products_name = $product_info['products_name'];
    }
      $image = tep_db_query("select c.categories_image, cd.categories_name from " . TABLE_CATEGORIES . " c, " . TABLE_CATEGORIES_DESCRIPTION . " cd, ".TABLE_PRODUCTS_TO_CATEGORIES. " pc where c.categories_id = cd.categories_id and cd.language_id = '" . (int)$languages_id . "' and c.categories_id=pc.categories_id and products_id='".$product_info['products_id']."'");
      $image = tep_db_fetch_array($image);

	  
	  
?>
<!--<div class="navboxleft"></div>

<div class="navboxright"></div>

<div style="clear:both"></div>-->

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="23%" height="13" valign="top">
    

  
    <table width="87%" border="0" cellspacing="0" cellpadding="0">
     
      <tr> <!--  Low cost ERP -->
            <td class="sideborders1">
                <?php echo tep_draw_form('cart_quantity', tep_href_link(FILENAME_PRODUCT_INFO, tep_get_all_get_params(array('action')) . 'action=add_product')); ?>
                    <?php 
                        if($category_name == 'ES53'){
                            include("includes/modules/forms/ES53.php");
                        }else if($category_name == 'ES82'){
                            include("includes/modules/forms/ES82.php");
			}else if($category_name == 'ES90'){
                            include("includes/modules/forms/ES90.php");
			}else if($category_name == 'ES92'){
                            include("includes/modules/forms/ES92.php");
			}else if($category_name == 'ES47'){
                            include("includes/modules/forms/ES47.php");
			}else if($category_name == 'Ring-EP5'){
                            include("includes/modules/forms/RingEP5.php");
			}else if($category_name == 'EP5'){
                            include("includes/modules/forms/EP5.php");
			}else if($category_name == 'EP15'){
                            include("includes/modules/forms/EP15.php");
			}else if($category_name == 'EP11'){
                            include("includes/modules/forms/EP11.php");
			}else if($category_name == 'ES28'){
                            include("includes/modules/forms/ES28.php");
			}else if($category_name == 'EP21'){
                            include("includes/modules/forms/EP21.php");
			}else if($category_name == 'ES29'){
                            include("includes/modules/forms/ES29.php");
			} else if($category_name == 'ES40'){
                            include("includes/modules/forms/ES40.php");
			}else if($category_name == 'EP12' ){
                            include("includes/modules/forms/EP12.php");
			}else if($category_name == 'EP22'){
                            include("includes/modules/forms/EP22.php");
			}
			else if($category_name == 'EP36'){
                            include("includes/modules/forms/EP36.php");
			}
			else{
                    ?>
                    <?php include("includes/modules/forms/cart.php")?>
                    <?php } ?>
                </form>

		</td> <!--  Low cost ERP -->
        
          </tr>
    </table>
        <br /></td>
    <td width="77%" align="left" valign="top" class="welcome_area">

<?php
    if (tep_not_null($product_info['products_image'])) {
      $pi_query = tep_db_query("select image, htmlcontent from " . TABLE_PRODUCTS_IMAGES . " where products_id in " .$products_ids. " order by sort_order");

      if (tep_db_num_rows($pi_query) > 0) {
?>
 
    <div id="piGal" style="float: right;">
      <ul>

<?php
        $pi_counter = 0;
        while ($pi = tep_db_fetch_array($pi_query)) {
          $pi_counter++;

          $pi_entry = '        <li><a href="';

          if (tep_not_null($pi['htmlcontent'])) {
            $pi_entry .= '#piGalimg_' . $pi_counter;
          } else {
            $pi_entry .= tep_href_link(DIR_WS_IMAGES . $pi['image']);
          }

          $pi_entry .= '" target="_blank" rel="fancybox">' . tep_image(DIR_WS_IMAGES . $pi['image']) . '</a>';

          if (tep_not_null($pi['htmlcontent'])) {
            $pi_entry .= '<div style="display: none;"><div id="piGalimg_' . $pi_counter . '">' . $pi['htmlcontent'] . '</div></div>';
          }

          $pi_entry .= '</li>';

          echo $pi_entry;
        }
?>

      </ul>
    </div>

<script type="text/javascript">
$('#piGal ul').bxGallery({
  maxwidth: 300,
  maxheight: 200,
  thumbwidth: <?php echo (($pi_counter > 1) ? '75' : '0'); ?>,
  thumbcontainer: 300,
  load_image: 'ext/jquery/bxGallery/spinner.gif'
});
</script>

<?php
      } else {
?>

    <div id="piGal" style="float: right;">
      <?php echo '<a href="' . tep_href_link(DIR_WS_IMAGES . $product_info['products_image']) . '" target="_blank" rel="fancybox">' . tep_image(DIR_WS_IMAGES . $product_info['products_image'], addslashes($product_info['products_name']), '600', '440', 'hspace="5" vspace="5"') . '</a>'; ?>
    </div>

<?php
      }
?>

<script type="text/javascript">
$("#piGal a[rel^='fancybox']").fancybox({
  cyclic: true
});
</script>

<?php
    }
?>



</form>

		</td>
      </tr>
    </table>

<?php
  }

  require(DIR_WS_INCLUDES . 'template_bottom.php');
  require(DIR_WS_INCLUDES . 'application_bottom.php');
?>
