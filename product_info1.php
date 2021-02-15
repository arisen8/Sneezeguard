<?php
ini_set('session.cookie_httponly',1);
ini_set('session.cookie_secure',1);
  
ob_start();
require('includes/application_top.php');
require(DIR_WS_FUNCTIONS . 'url_validation.php');
$obj=new Urlvalidation();
if(isset($_REQUEST['products_id'])){
	if($obj->tep_check_by_product_id($_REQUEST['products_id'])){

	}else{
		tep_redirect(tep_href_link('validation_faild', '', 'SSL'));
		exit;
	}
}
$page_title='Sneeze Guard | Portable Sneezeguard'; 
$page_description='ADM Sneezeguards manufactures sneeze guard and food guard. Our sneeze guards and Portable Barrier are based on the latest innovative designs.';
$page_keyword='Sneeze Guard, sneeze guard glass, Breath Guard, Portable Sneeze Guards, Sneezeguards, Restaurant Sneeze Guards';

require(DIR_WS_INCLUDES . 'header_new_design.php');
error_reporting(0);
$product_check_query = tep_db_query("select count(*) as total from " . TABLE_PRODUCTS . " p, " . TABLE_PRODUCTS_DESCRIPTION . " pd where p.products_status = '1' and p.products_id = '" . (int)$HTTP_GET_VARS['products_id'] . "' and pd.products_id = p.products_id and pd.language_id = '" . (int)$languages_id . "'");
  $product_check = tep_db_fetch_array($product_check_query);
  $product_info_query = tep_db_query("select p.products_id, pd.products_name, pd.products_description, p.products_model, p.products_quantity, p.products_image, pd.products_url, p.products_price, p.products_tax_class_id, p.products_date_added, p.products_date_available, p.manufacturers_id from " . TABLE_PRODUCTS . " p, " . TABLE_PRODUCTS_DESCRIPTION . " pd where p.products_status = '1' and p.products_id = '" . (int)$HTTP_GET_VARS['products_id'] . "' and pd.products_id = p.products_id and pd.language_id = '" . (int)$languages_id . "'");
  $product_info = tep_db_fetch_array($product_info_query);

  tep_db_query("update " . TABLE_PRODUCTS_DESCRIPTION . " set products_viewed = products_viewed+1 where products_id = '" . (int)$HTTP_GET_VARS['products_id'] . "' and language_id = '" . (int)$languages_id . "'");

  $productid=$HTTP_GET_VARS['products_id'];
  //echo$query="SELECT * FROM products_to_categories WHERE products_id='".$productid."'";
    $category_query = tep_db_query("SELECT * FROM products_to_categories WHERE products_id='".$productid."'");
     $category_data = tep_db_fetch_array($category_query);
     $categories_id=$category_data['categories_id'];



     $image = tep_db_query("select c.categories_image, cd.categories_name from " . TABLE_CATEGORIES . " c, " . TABLE_CATEGORIES_DESCRIPTION . " cd, ".TABLE_PRODUCTS_TO_CATEGORIES. " pc where c.categories_id = cd.categories_id and cd.language_id = '" . (int)$languages_id . "' and c.categories_id=pc.categories_id and products_id='".$product_info['products_id']."'");
     $image = tep_db_fetch_array($image);
     	  
  $post_height='';
	  $facelengthA='';
	  $facelengthB='';
	  $facelengthC='';
	  $facelengthD='';
	  $glass_type='Square';
	  $finish_type='SS';
	  $bay='1BAY';
	  $flange='0';
	  $lightbar='0';
	  $endpanel=4;
	  $right_end='';
	  $left_end='';
	  $countertop='';
	  $SLV='';
	  $shelve='';
	  $product_name=$product_info['products_name'];
	  $infinecontrol=='';

	 
		//For Post Height
	  if (strpos($product_name, '-H') !== false) 
	  {
		 
		$pharray=explode("-H",$product_name); 
		//echo'<b style="color:red;font-size:11px;">'; print_r($pharray);
		$new_ph=explode("-",$pharray[1]); 
	    $post_height=$new_ph[0];
		
	  }
	 
	 
	 
	  //for FacelengthA
	  
	  
	  if($categories_id==117 || $categories_id==79 || $categories_id==70)
	  {
		$faarray=explode("-",$product_name); 
		$facelengthA=$faarray[1];
		// echo'<b style="color:red;font-size:14px;">'; print_r($product_name);echo'</b><br />';  
		// echo'<b style="color:red;font-size:14px;">'; print_r($facelengthA);echo'</b>';  
		
	  }
	  else if($categories_id==129 || $categories_id==130)
	  {
		$faarray=explode("-",$product_name); 
		
		
		$facelengthA=$faarray[1];
		 
		 //echo'<b style="color:red;font-size:14px;">'; print_r($facelengthA);echo'</b>';  
		
	  }
	  else{
	  if (strpos($product_name, '-A') !== false) 
	  {
		 
		$faarray=explode("-A",$product_name); 
		//echo'<b style="color:red;font-size:11px;">'; print_r($pharray);
		$new_fa=explode("-",$faarray[1]); 
	    $facelengthA=$new_fa[0];
		
	  }  
	  }
	  
	  
	  
	  
	  
	  //for FacelengthB
	   if (strpos($product_name, '-B') !== false) 
	  {
		 
		$fbarray=explode("-B",$product_name); 
		//echo'<b style="color:red;font-size:11px;">'; print_r($pharray);
		$new_fb=explode("-",$fbarray[1]); 
	    $facelengthB=$new_fb[0];
		
	  }
	   //for FacelengthC  
	  if($categories_id==113 || $categories_id==114 || $categories_id==111 || $categories_id==125)
	  {
	  if (strpos($product_name, '-C12') !== false) 
	  {
		 
	    $facelengthC=12;
		
	  } 
	else if (strpos($product_name, '-C14') !== false) 
	  {
		 
	    $facelengthC=14;
		
	  } 
	else if (strpos($product_name, '-C18') !== false) 
	  {
		 
	    $facelengthC=18;
		
	  } 
	else if (strpos($product_name, '-C20') !== false) 
	  {
		 
	    $facelengthC=20;
		
	  } 
	else if (strpos($product_name, '-C22') !== false) 
	  {
		 
	    $facelengthC=22;
		
	  } 	  
	else if (strpos($product_name, '-C24') !== false) 
	  {
		 
	    $facelengthC=24;
		
	  }  	
	else if (strpos($product_name, '-C30') !== false) 
	  {
		 
	    $facelengthC=30;
		
	  }  	
	else if (strpos($product_name, '-C36') !== false) 
	  {
		 
	    $facelengthC=36;
		
	  }  	
	else if (strpos($product_name, '-C42') !== false) 
	  {
		 
	    $facelengthC=42;
		
	  }  	
	else if (strpos($product_name, '-C48') !== false) 
	  {
		 
	    $facelengthC=48;
		
	  }  	
	else if (strpos($product_name, '-C54') !== false) 
	  {
		 
	    $facelengthC=54;
		
	  }  	 	  
	  }
	  else{
	 if (strpos($product_name, '-C') !== false) 
	  {
		 
		$fcarray=explode("-C",$product_name); 
		//echo'<b style="color:red;font-size:11px;">'; print_r($pharray);
		$new_fc=explode("-",$fcarray[1]); 
	     $facelengthC=$new_fc[0];
		
	  }  
	  }
	
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  //for FacelengthD
	  if (strpos($product_name, '-D') !== false) 
	  {
		 
		$fdarray=explode("-D",$product_name); 
		//echo'<b style="color:red;font-size:11px;">'; print_r($pharray);
		$new_fd=explode("-",$fdarray[1]); 
	    $facelengthD=$new_fd[0];
		
	  }
	
	  //Glass Type
	  if (strpos($product_name, 'RND') !== false) 
	  {
		
		$glass_type='Rounded';
	  }
	  

	  //1BAY
	  if (strpos($product_name, 'BAY') !== false) 
	  {
		 
		$bayarray=explode("BAY",$product_name); 
		$ness=str_split($bayarray[0],1);
		$lastno=count($ness)-1;
		//echo'<b style="color:red;font-size:11px;">'; print_r($ness[$lastno]);
		
		$bay=''.$ness[$lastno].'BAY';;
	  }
	  
	 //Flange
	  if (strpos($product_name, 'FLANGE') !== false || strpos($product_name, 'Flange') !== false) 
	  {
		
		  $flange='1';
	  }
	  
	  
	  //LYT
	  if (strpos($product_name, 'LYT') !== false) 
	  {
		
		  $lightbar='1';
	  }
	  //Finish
	  if (strpos($product_name, 'CB') !== false || strpos($product_name, 'BLK') !== false) 
	  {
		
		  $finish_type='CB';
	  }
	  
	  if (strpos($product_name, 'SS') !== false) 
	  {
		
		  $finish_type='SS';
	  }
	 
	 
	  if($categories_id==79 || $categories_id==70)
	  {
		$faarray=explode("-",$product_name); 
		//$facelengthA=$faarray[1];
		$noarray=count($faarray);
		// echo'<b style="color:red;font-size:14px;">'; print_r($product_name);echo'</b><br />';  
		 //echo'<b style="color:red;font-size:14px;">'; print_r($noarray);echo'</b>'; 
		if($noarray<3)
		{
		$finish_type='CB';	
		}
		else{
		$finish_type='SS';	
		}
		
	  }
	 
	 
	 
	 
	 
	  if($categories_id==72||$categories_id==71||$categories_id==122||$categories_id==80||$categories_id==81)
	  {
		//for Right Panel
	   if (strpos($product_name, '-RP') !== false) 
	  {
		 
		$rparray=explode("-RP",$product_name); 
		//echo'<b style="color:red;font-size:11px;">'; print_r($pharray);
		$new_rp=explode("-",$rparray[1]); 
	    $right_end=$new_rp[0];
		
	  }
	  
	  //for Left Panel
	   if (strpos($product_name, '-LP') !== false) 
	  {
		 
		$lparray=explode("-LP",$product_name); 
		//echo'<b style="color:red;font-size:11px;">'; print_r($pharray);
		$new_lp=explode("-",$lparray[1]); 
	    $left_end=$new_lp[0];
		
	  }  
	  }
	  else{
		//for Right Panel
	   if (strpos($product_name, '-RP') !== false) 
	  {
		 
	    $right_end=1;
		
	  }
	  
	  //for Left Panel
	   if (strpos($product_name, '-LP') !== false) 
	  {
		 
		 
	    $left_end=1;
		
	  }  
	  }
	  
	  
	  
	  if($right_end>0 && $left_end>0)
	  {
		  $endpanel=1;
	  }
	  else if($right_end>0 && ($left_end==''||$left_end<=0))
	  {
		  $endpanel=2;
	  }
	  else if($left_end>0 && ($right_end==''||$right_end<=0))
	  {
		  $endpanel=3;
	  }
	  else{
		  $endpanel=4;
	  }
	  
	  if($categories_id==120)
	  {
	 if (strpos($product_name, '-IC') !== false) 
	  {
		 
		 
	    $infinecontrol='IC';
		
	  }  
	  }
	  //for countertop
	   if (strpos($product_name, '-CW') !== false) 
	  {
		 
		$counterarray=explode("-CW",$product_name); 
		//echo'<b style="color:red;font-size:11px;">'; print_r($pharray);
		$new_fcounter=explode("-",$counterarray[1]); 
	    $countertop=$new_fcounter[0];
		
	  }
	  
	    //for Shelving
	   if (strpos($product_name, '-SV') !== false) 
	  {
		 
		$shelvarray=explode("-SV",$product_name); 
		//echo'<b style="color:red;font-size:11px;">'; print_r($pharray);
		$new_shelv=explode("-",$shelvarray[1]); 
	    $shelve=$new_shelv[0];
		
	  }
	  
	  //adjustable_product_info.php
	  //121
	  //118
	 // 120
	  
	  
	  //portable_product.php
	  //117
	  //79
	  //70

	  if($categories_id==113 || $categories_id==80 || $categories_id==81 || $categories_id==121 || $categories_id==118 || $categories_id==120)
	  {
		 $pagename='product_info.php'; 
	  }
	  elseif($categories_id==117 || $categories_id==79 || $categories_id==70 || $categories_id==129 || $categories_id==130 )
	  {
		 $pagename='product_info.php'; 
	  }
	  else{
		 $pagename='product_info.php';  
	  }
	  
	  if($categories_id==118)
	  {
		  //for countertop
	   if (strpos($product_name, '-DP') !== false) 
	  {
		 
		$counterarray=explode("-DP",$product_name); 
		//echo'<b style="color:red;font-size:11px;">'; print_r($pharray);
		$new_fcounter=explode("-",$counterarray[1]); 
	    $countertop=$new_fcounter[0];
		
	  }
	  }
	  
	  
	  //echo'<b style="color:red;font-size:11px;">shelve='.$shelve.' //countertop='.$countertop.' </b>';
 //echo'<b style="color:red;font-size:11px;">post_height=='.$post_height.',facelengthA=='.$facelengthA.',<br />facelengthB=='.$facelengthB.',facelengthC=='.$facelengthC.',facelengthD=='.$facelengthD.',<br />glass_type=='.$glass_type.',bay=='.$bay.',flange=='.$flange.',lightbar=='.$lightbar.',<br />endpanel=='.$endpanel.',right_end=='.$right_end.',left_end=='.$left_end.',finish_type=='.$finish_type.'</b>';
  //$url='product_info.php?id='.$categories_id.'&type='.$bay.'&post_height='.$post_height.'&facelengthA='.$facelengthA.'&facelengthB='.$facelengthB.'&facelengthC='.$facelengthC.'&facelengthD='.$facelengthD.'&glass_type='.$glass_type.'&flange='.$flange.'&lightbar='.$lightbar.'&endpanel='.$endpanel.'&right_end='.$right_end.'&left_end='.$left_end.'&finish_type='.$finish_type.'&add_more_bay=0&osCsid=69d9f9ae8ae8201b0f33e2b8df692fd2';

if(isset($HTTP_GET_VARS['osCsid']))
{
 $url=''.$pagename.'?id='.$categories_id.'&type='.$bay.'&post_height='.$post_height.'&facelengthA='.$facelengthA.'&facelengthB='.$facelengthB.'&facelengthC='.$facelengthC.'&facelengthD='.$facelengthD.'&glass_type='.$glass_type.'&flange='.$flange.'&lightbar='.$lightbar.'&endpanel='.$endpanel.'&right_end='.$right_end.'&left_end='.$left_end.'&finish_type='.$finish_type.'&countertop='.$countertop.'&shelve='.$shelve.'&infinecontrol='.$infinecontrol.'&add_more_bay=0&osCsid='.$HTTP_GET_VARS['osCsid'].'';
}
else{
	$url=''.$pagename.'?id='.$categories_id.'&type='.$bay.'&post_height='.$post_height.'&facelengthA='.$facelengthA.'&facelengthB='.$facelengthB.'&facelengthC='.$facelengthC.'&facelengthD='.$facelengthD.'&glass_type='.$glass_type.'&flange='.$flange.'&lightbar='.$lightbar.'&endpanel='.$endpanel.'&right_end='.$right_end.'&left_end='.$left_end.'&finish_type='.$finish_type.'&countertop='.$countertop.'&shelve='.$shelve.'&infinecontrol='.$infinecontrol.'&add_more_bay=0';
}
 
 
 


?>

<div class="mb-3">
<h1>&nbsp;</h1>
</div>

<div class="mb-4">
<h1>&nbsp;</h1>
</div>
<div class="container">

<div class="row">
 <div class="col-sm-5">
 <div class="polaroidinfo" id="product_image">
        <?php 
		
		
		echo '<div>' . tep_image(DIR_WS_IMAGES . $product_info['products_image'], addslashes($product_info['products_name']), '100', '80', 'hspace="5" vspace="5" id="myImg" onclick="show_img_popup(this)"') . '</div>'; ?>
        </div>
        <div class="probutton">
        <?php echo tep_draw_form('cart_quantity', tep_href_link(FILENAME_PRODUCT_INFO1, tep_get_all_get_params(array('action')) . 'action=add_product')); ?>
		
		
          
        </div>
 </div>
 
 <div class="col-sm-7">
<div class="prodesctop">
            
            <h4><?php echo $product_info['products_name'] ?></h4>
            <span class="pri">Price:-</span><span class="pricen"><?php echo $currencies->display_price($product_info['products_price'], tep_get_tax_rate($product_info['products_tax_class_id'])) ?></span>
        </div>
        <div class="prodescbottom">
            <h4>Product description</h4>
            <p><?=trim($product_info['products_description'])?></p>
           
        </div>
		
		
		<table  border="0"  cellspacing="0" cellpadding="0" class="option-attribute">
      <tr>
        <td width="100%" class="widthoftrinproductinfopage" height="13" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td class="sideborders1">
                <table border="0" cellpadding="4" cellspacing="2" class="linkareaofproductinfo">
                  <?php
                //BOF - Zappo - Option Types v2 - ONE LINE - Initialize $number_of_uploads
                    $number_of_uploads = 0;
                    $products_attributes_query = tep_db_query("select count(*)
 as total from " . TABLE_PRODUCTS_OPTIONS . " popt, " . TABLE_PRODUCTS_ATTRIBUTES . " patrib where patrib.products_id='" . (int)$HTTP_GET_VARS['products_id'] . "' and patrib.options_id = popt.products_options_id and popt.language_id = '" . (int)$languages_id . "'");
                    $products_attributes = tep_db_fetch_array($products_attributes_query);
                    if ($products_attributes['total'] > 0) {
                ?>
                  <tr>
                    <td colspan="2" align="left" class="headingofproductinfopage"><?php echo Options; ?></td>
                  </tr>
                  <?php		
//BOF - Zappo - Option Types v2 - Add extra Option Values to Query && Placed Options in new file: option_types.php
      $products_options_name_query = tep_db_query("select distinct popt.products_options_id, popt.products_options_name, popt.products_options_type, popt.products_options_length, popt.products_options_comment from " . TABLE_PRODUCTS_OPTIONS . " popt, " . TABLE_PRODUCTS_ATTRIBUTES . " patrib where patrib.products_id='" . (int)$product_info['products_id'] . "' and patrib.options_id = popt.products_options_id and popt.language_id = '" . (int)$languages_id . "' order by popt.products_options_order, popt.products_options_name");
	  		$numberofopt = tep_db_num_rows($products_options_name_query);	  
		$opt_count = 0;	  
				$products_attributes = array();

      while ($products_options_name = tep_db_fetch_array($products_options_name_query)) {
		$opt_count++;		
		array_push($products_attributes,$products_options_name['products_options_id']);

		$comma = "";
			  $all_option_js = "[";
			  for($t = 1;$t<=$numberofopt; $t++)
			  {
			  	$all_option_js .= $comma.'document.getElementById(\'cmbooption_'.$t.'\').value';
			  	$comma = ",";				
			  }
			  $all_option_js .= "]";			  
        // - Zappo - Option Types v2 - Include option_types.php - Contains all Option Types, other than the original Drowpdown...
        include(DIR_WS_MODULES . 'option_types.php');

        if ($Default == true) {  // - Zappo - Option Types v2 - Default action is (standard) dropdown list. If something is not correctly set, we should always fall back to the standard.
        $products_options_array = array();
        $products_options_query = tep_db_query("select pov.products_options_values_id, pov.products_options_values_name, pa.options_values_price, pa.price_prefix from " . TABLE_PRODUCTS_ATTRIBUTES . " pa, " . TABLE_PRODUCTS_OPTIONS_VALUES . " pov where pa.products_id = '" . (int)$HTTP_GET_VARS['products_id'] . "' and pa.options_id = '" . (int)$ProdOpt_ID . "' and pa.options_values_id = pov.products_options_values_id and pov.language_id = '" . (int)$languages_id . "' GROUP BY pov.products_options_values_id order by pov.products_options_values_id");
		
	   

        while ($products_options = tep_db_fetch_array($products_options_query)) {
          $products_options_array[] = array('id' => $products_options['products_options_values_id'], 'text' => $products_options['products_options_values_name']);
          if ($products_options['options_values_price'] != '0') {
            $products_options_array[sizeof($products_options_array)-1]['text'] .= ' (' . $products_options['price_prefix'] . $currencies->display_price($products_options['options_values_price'], tep_get_tax_rate($product_info['products_tax_class_id'])) .') ';
          }
        }

        if (isset($cart->contents[$HTTP_GET_VARS['products_id']]['attributes'][$products_options_name['products_options_id']])) {
          $selected_attribute = $cart->contents[$HTTP_GET_VARS['products_id']]['attributes'][$products_options_name['products_options_id']];
        } else {
          $selected_attribute = false;
        }


?>
                  <tr>
                    <td  colspan="2" align="left" class="heading">
                    <table><tr><td width="50"  style="color:#000;">
					<h2><?php echo $ProdOpt_Name . ':'; ?></h2></td><td width="100"><div  class="linkareaofproductinfo1"><?php echo tep_draw_pull_down_menu('id[' . $ProdOpt_ID . ']', $products_options_array, $selected_attribute) . ' ' . $ProdOpt_Comment;  ?></div></td></tr></table></td>
                  </tr>
                  <?php
	  } // End if Default=true
  }
//EOF - Zappo - Option Types v2 - Add extra Option Values to Query && Placed Options in new file: option_types.php
?>
                  <?php
    }
?>
                  <tr>
                    <td align="left" id="display_price"></td>
                    <td  align="left" class="heading">
                      <input type="hidden" name="optionsid" id="optionsid" value="<?php echo implode(",",$products_attributes); ?>" />
                      <input type="hidden" name="products_id" value="<?=$HTTP_GET_VARS['products_id']?>"
                    </td>
                  </tr>
                </table></td>
              <!--  Low cost ERP -->
            </tr>
          </table>
          <br /></td>
        <td width="77%" align="left" valign="top" class="welcome_area"><?php
    if (tep_not_null($product_info['products_image'])) {
      $pi_query = tep_db_query("select image, htmlcontent from " . TABLE_PRODUCTS_IMAGES . " where products_id = '" . (int)$product_info['products_id'] . "' order by sort_order");

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
          <?php
        }}
    ?>
          <script type="text/javascript">
$("#piGal a[rel^='fancybox']").fancybox({
  cyclic: true
});
</script>

         
        </td>
      </tr>
	</table>
	
	
	
	 <div class="prodescbutton">
                
				
			<?php
				//  echo'<b style="color:red;font-size:11px;">'; print_r($categories_id);
			if($categories_id==107 ||$categories_id==104)
			{
			}
			else{
			?>			
            <div class="elayoutinfo"><?php echo'<a href="'.$url.'" class="btn btn-outline-dark ">';?>Edit Layout</a></div>
			<?php
			}
			?>
			
			<div class="aadcartproinfo"><input type="image" class="updatebutton" style="" src="img/pricing-page/add-to-cart.png" alt="Add to Cart" title=" Add to Cart " button="" onclick="javascript:document.forms['checkout_payment'].submit();"></div>
            <div class="favlistinfo"><a href="javascript:void();" onclick="addwishlist()"><img src="img/pricing-page/wishlist22.png" alt="Add to Wishlist" title=" Add to Wishlist"></a>
			<script type="text/javascript">
			function addwishlist()
			{
				var action = $("form[name='cart_quantity']").attr("action");
                action = action.replace("add_product", "add_wishlist");
                $("form[name='cart_quantity']").attr("action", action);                    
                $("form[name='cart_quantity']").removeAttr("onsubmit");
                $("form[name='cart_quantity']").submit();
			}
			
			
            </script>
        </div>
           
            </div>
	
	
	
	
	</div>
	<div class="mb-5">
<h1>&nbsp;</h1>
</div>
</div>

<div id="myModalss" class="modalss">
<div class="text-right">
		<span class="model-close index-model-close" >&times;</span>
</div>
  <div class="p-2">
  	<img class="modalss-content" id="img01">
  </div>
</div>
	<style>
	</style>
	</script>
</div>
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
<script type="text/javascript">
$("#piGal a[rel^='fancybox']").fancybox({
  cyclic: true
});
</script>
</form>
	<style>
		
		
		
	</style>
<?php
require(DIR_WS_INCLUDES . 'footer_new_design.php');
?>