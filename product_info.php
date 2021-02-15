

<?php
ini_set('session.cookie_httponly',1);
ini_set('session.cookie_secure',1);
  
error_reporting(0);
ob_start();
require('includes/application_top.php');
require(DIR_WS_FUNCTIONS . 'url_validation.php');
$obj=new Urlvalidation();
if(isset($_GET['id'])){
	$category_id=$_GET['id'];
	if($obj->tep_check_mid($category_id))
	{

	}
	else{
		tep_redirect(tep_href_link('validation_faild', '', 'SSL'));
		exit;
	}
}
if(isset($_GET['type'])){
	$bay=$_GET['type'];
	if($obj->tep_bay_check($bay))
	{

	}
	else{
		tep_redirect(tep_href_link('validation_faild', '', 'SSL'));
		exit;
	}
}
if(isset($_GET['Model'])){
	$category_id=$_GET['Model'];
	if($obj->tep_check_model_name($category_id))
	{

	}
	else{
		tep_redirect(tep_href_link('validation_faild', '', 'SSL'));
		exit;
	}
}
  	
  	$category_name="";
  	$category_image='';
  	if(isset($_REQUEST['id']))
	{
	$sql="select c.categories_image, cd.categories_name from ".TABLE_CATEGORIES." as c, ".TABLE_CATEGORIES_DESCRIPTION." as cd where c.categories_id=".(int)$_REQUEST['id']." and c.categories_id=cd.categories_id";
    $sql_result=tep_db_query($sql);
    $sql_result=tep_db_fetch_array($sql_result);
    $category_name=$sql_result['categories_name'];
    $category_image=$sql_result['categories_image'];
  	require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_PRODUCT_INFO);
  	$product_check_query = tep_db_query("select count(*) as total from " . TABLE_PRODUCTS . " p, " . TABLE_PRODUCTS_DESCRIPTION . " pd, ".TABLE_PRODUCTS_TO_CATEGORIES." pc, ".TABLE_CATEGORIES." c where p.products_status = '1' and c.categories_id = '" . (int)$HTTP_GET_VARS['id'] . "' and pd.products_id = p.products_id and pc.products_id=p.products_id and pc.categories_id=c.categories_id and pd.language_id = '" . (int)$languages_id . "'");
	  $product_check = tep_db_fetch_array($product_check_query);
	  
	}
	else{
		echo'<script>alert("You have not selected any model");</script>';
	} 

	  if(isset($_REQUEST['id']))
	  {
		  $modeliddd=$_REQUEST['id'];
		  $bay=''.$_REQUEST['type'].'';
		  
	  }
	  else{
		  
		  if(isset($_REQUEST['pid']))
		  {
		  $modeliddd=$_REQUEST['pid'];	
		  }
		  else{
		  $modeliddd=0;	
		  }
		  $bay='1BAY';
		  
	  }

	  $search_catagory_details = mysql_query("SELECT * FROM categories_description WHERE `categories_id` ='$modeliddd'");
	  $category_details=mysql_fetch_array($search_catagory_details);
	  $catego_name=$category_details['categories_name'];


	  $page_title=''.$catego_name.' '.$bay.' | ADM Sneezeguards | Sneeze guard | Restaurant Sneeze Guards'; 
	  $page_description='ADM Sneezeguards manufactures sneeze guard and food guard. Our sneeze guards and Portable Barrier are based on the latest innovative designs.';
	  $page_keyword='Sneeze Guard, sneeze guard glass, Breath Guard, Portable Sneeze Guards, Sneezeguards, Restaurant Sneeze Guards';
	




	require(DIR_WS_INCLUDES . 'header_new_design.php');
	$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	$connt = mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());
	$cate_id=$_REQUEST['id'];
	$customer_city=$customer_state=$customer_country='';
	$bay=$_REQUEST['type'];
	if($bay=='')
	{
		$bay='1BAY';
	}
	$cate_id=$_REQUEST['id'];
							
	$ip=$_SERVER['REMOTE_ADDR'];
	// $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
	// $customer_city=$details->city;
	// $customer_state=$details->region;
	// $customer_country=$details->country;
?>
<!---for popup mail here-->
<?php   
        if(isset($_POST['save_quote'])){
            $img=rand();
            $imageName = $img.".jpg";
            $imageContent = file_get_contents("img/screenshot/scrn.jpg");
            file_put_contents("img/screenshot/".$imageName, $imageContent);
            echo  "<script type='text/javascript'>";
            echo "window.open('mail_send.php?type=quote&hell='+".$img." , '_blank');";
            echo "</script>";    
		}

		if(isset($_POST['save_layout'])){
            $img=rand();
            $imageName = $img.".jpg";
            $imageContent = file_get_contents("includes/scrn1.jpg");
            file_put_contents("img/screenshot/".$imageName, $imageContent);
            echo  "<script type='text/javascript'>";
            echo "window.open('mail_send.php?type=layout&hell='+".$img." , '_blank');";
            echo "</script>";    
        }
		
		function getUserIpAddr(){
			if(!empty($_SERVER['HTTP_CLIENT_IP'])){
				//ip from share internet
				$ip = $_SERVER['HTTP_CLIENT_IP'];
			}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
				//ip pass from proxy
				$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			}else{
				$ip = $_SERVER['REMOTE_ADDR'];
			}
			return $ip;
		}
    ?>
<!---start here-->
<link rel="stylesheet" href="new-design/product_info.css">
<script type="text/javascript" src="thickbox.js"></script>
<script type="text/javascript" src="jquery-latest.js"></script>
<script src="jquery.confirm/jquery.confirm.js"></script>
<script type="text/javascript" src="dist/html2canvas.js"></script>
<script type="text/javascript" src="dist/canvas2image.js"></script>
<link rel="stylesheet" href="new-design/pricingstyle2.css">

<script>
			var id_for_logo = '<?php echo ($_GET["id"])?>';
			var bay_for_logo = '<?php echo ($_GET["type"])?>';
			<?php
			if (tep_session_is_registered('customer_id')) {
			?>
			var customer_idd='<?php echo$customer_id ?>';
			<?php
			}
			else{
			?>
			var customer_idd='0';
			<?php
			}
			?>
		<?php
			$customer_city=$customer_state=$customer_country=0;
			$bay=$_REQUEST['type'];
			if($bay=='')
			{
			$bay='1BAY';
			}
			$cate_id=$_REQUEST['id'];						
			$ip=$_SERVER['REMOTE_ADDR'];
			// $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
			// $customer_city=$details->city;
			// $customer_state=$details->region;
			// $customer_country=$details->country;
			?>
			var ip='<?php echo$ip ?>';
			var bay='<?php echo$bay ?>';
			var cate_id='<?php echo$cate_id ?>';
			var customer_id='<?php echo$customer_id ?>';
			var customer_city='<?php echo$customer_city ?>';
			var customer_state='<?php echo$customer_state ?>';
			var customer_country='<?php echo$customer_country ?>';
</script>
<?php


function decimal_to_fraction($x)
{
    $x=$x-(int)$x;
    $heightfraction=$x;
    
        if($heightfraction==0.25)
        {
            print '-1/4';
        }
        elseif($heightfraction==0.50)
        {
            print '-1/2';
        }
        elseif($heightfraction==0.75) 
        {
            print '-3/4';
        }
        elseif($heightfraction==0.125)
        {
            print '-1/8';
        }
        elseif($heightfraction==0.375)
        {
            print '-3/8';
        }
        elseif($heightfraction==0.625)
        {
            print '-5/8';
        }
        elseif($heightfraction==0.875)
        {
            print '-7/8';
        }
    
    
    }


    function dropdown_option_facelength(){

    for($size=8;$size<=54;$size=$size+0.25)
	{
    
        if($size<=12)
        {
            $value='12';
        }
        elseif($size>12 && $size<=18)
        {
            $value='18';
        }
        elseif($size>18 && $size<=24)
        {
            $value='24';
        }
        elseif($size>24 && $size<=30)
        {
            $value='30';
        }
        elseif($size>30 && $size<=36)
        {
            $value='36';
        }
        elseif($size>36 && $size<=42)
        {
            $value='42';
        }
        elseif($size>42 && $size<=48)
        {
            $value='48';
        }
        elseif($size>48)
        {
            $value='54';
        }
		if($size>42)
		{
			print '<option value="'.$value.'"  class="customsame" style="color:red;display:none;">';print (int)$size; print ''; print decimal_to_fraction($size);  print '"</option>'; 	
		}
		else{
			print '<option value="'.$value.'"  class="customsame" style="display:none;">';print (int)$size; print ''; print decimal_to_fraction($size);  print '"</option>'; 
		}
       

    }

  

}




    function dropdown_option_facelength_custom_mod($face_value){



if($_REQUEST['type']=='2BAYEXT')
{
$strta=24;	
}
else{
$strta=8;	
}

    for($size=$strta;$size<=54;$size=$size+0.25)
	{
    
        if($size<=12)
        {
            $value='12';
        }
        elseif($size>12 && $size<=18)
        {
            $value='18';
        }
        elseif($size>18 && $size<=24)
        {
            $value='24';
        }
        elseif($size>24 && $size<=30)
        {
            $value='30';
        }
        elseif($size>30 && $size<=36)
        {
            $value='36';
        }
        elseif($size>36 && $size<=42)
        {
            $value='42';
        }
        elseif($size>42 && $size<=48)
        {
            $value='48';
        }
        elseif($size>48)
        {
            $value='54';
        }
		if($size>42)
		{
			print '<option value="'.$value.'">';print (int)$size; print ''; print decimal_to_fraction($size);  print '"</option>'; 	
		}
		else{
			print '<option value="'.$value.'">';print (int)$size; print ''; print decimal_to_fraction($size);  print '"</option>'; 
		}
       

    }

  

}


  function dropdown_option_facelength_custom_orbit360(){



$strta=24.25;
    for($size=$strta;$size<=66;$size=$size+0.25)
	{
    
        if($size<=12)
        {
            $value='12';
        }
        elseif($size>12 && $size<=18)
        {
            $value='18';
        }
        elseif($size>18 && $size<=24)
        {
            $value='24';
        }
        elseif($size>24 && $size<=30)
        {
            $value='30';
        }
        elseif($size>30 && $size<=36)
        {
            $value='36';
        }
        elseif($size>36 && $size<=42)
        {
            $value='42';
        }
        elseif($size>42 && $size<=48)
        {
            $value='48';
        }
        elseif($size>48 && $size<=54)
        {
            $value='54';
        }
		elseif($size>54 && $size<=60)
        {
            $value='60';
        }
		elseif($size>60)
        {
            $value='66';
        }
			print '<option value="'.$value.'"  class="customsame" style="display:none;">';print (int)$size; print ''; print decimal_to_fraction($size);  print '"</option>'; 
	
       

    }

  

}
?>


















<div class="info-main-container" onmouseover="openCity(event, 'Hide');hide_cart_data()">
	<?php echo tep_draw_form('cart_quantity', tep_href_link(FILENAME_PRODUCT_INFO1, tep_get_all_get_params(array('action')) . 'action=add_product')); ?>	
<div >
		<h2 align="center" class="pricing-product-title"><?php echo$category_name ?></h2>
		</div>
<div class="info-sub-container2">
	<!--for Images div -->

<div id="products_ids"></div>
<input type="hidden" name="ip" value="<?=getUserIpAddr();?>" id="ipaddress">	
	
	
	
	<?php
	
	if ($category_name == "ES53") {
			echo '<div style="height:auto;display:none;" id="round_layout">
				
					<h2 class="heading_all"><u>Choose Layouts</u></h2>
					<table>
					';


			if ($_REQUEST['type'] == '4BAY') {
				echo '<tr>
					<td>
					<label>
				   <input type="radio" name="corner_post" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE1ST" checked>
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/4BAY/JSHAPE1ST.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE2ND">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/4BAY/JSHAPE2ND.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE3RD">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/4BAY/JSHAPE3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE4TH">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/4BAY/JSHAPE4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					
					</tr>
					
					<tr>
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE1ST2ND">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/4BAY/JSHAPE1ST2ND.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE1ST3RD">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/4BAY/JSHAPE1ST3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE1ST4TH">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/4BAY/JSHAPE1ST4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE2ND3RD">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/4BAY/JSHAPE2ND3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					
					</tr>
					
					<tr>
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE2ND4TH">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/4BAY/JSHAPE2ND4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE3RD4TH">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/4BAY/JSHAPE3RD4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
				
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE1ST2ND3RD">
				   <img src="images/ES53/4BAY/JSHAPE1ST2ND3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE1ST2ND4TH">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/4BAY/JSHAPE1ST2ND4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					
					
					</tr>
					
					<tr>
					
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE1ST3RD4TH">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/4BAY/JSHAPE1ST3RD4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE2ND3RD4TH">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/4BAY/JSHAPE2ND3RD4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE1ST2ND3RD4TH">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/4BAY/JSHAPE1ST2ND3RD4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" onclick="hide_layout(this.form);" onchange="getPriceOfProduct(this.form)" value="LSHAPE1ST">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/4BAY/LSHAPE1ST.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					</tr>
					
					
					
					
					<tr>
					
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE2ND">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/4BAY/LSHAPE2ND.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE3RD">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/4BAY/LSHAPE3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE4TH">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/4BAY/LSHAPE4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE1ST2ND">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/4BAY/LSHAPE1ST2ND.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					</tr>
					
					<tr>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE1ST3RD">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/4BAY/LSHAPE1ST3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE1ST4TH">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/4BAY/LSHAPE1ST4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE2ND3RD">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/4BAY/LSHAPE2ND3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE2ND4TH">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/4BAY/LSHAPE2ND4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					</tr>
					
					<tr>
					
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE3RD4TH">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/4BAY/LSHAPE3RD4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
				
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE1ST2ND3RD">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/4BAY/LSHAPE1ST2ND3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE1ST2ND4TH">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/4BAY/LSHAPE1ST2ND4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE1ST3RD4TH">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/4BAY/LSHAPE1ST3RD4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					</tr>
					
					<tr>
					
					
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE2ND3RD4TH">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/4BAY/LSHAPE2ND3RD4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE1ST2ND3RD4TH">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/4BAY/LSHAPE1ST2ND3RD4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					</tr>';
			}

			if ($_REQUEST['type'] == '3BAY') {
				echo '
					
					<tr>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" onclick="hide_layout(this.form);" onchange="getPriceOfProduct(this.form)" value="JSHAPE1ST" checked>
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/3BAY/JSHAPE1ST.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE2ND">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/3BAY/JSHAPE2ND.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE3RD">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/3BAY/JSHAPE3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE1ST2ND">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/3BAY/JSHAPE1ST2ND.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					</tr>
					
					<tr>
					
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE1ST3RD">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/3BAY/JSHAPE1ST3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE2ND3RD">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/3BAY/JSHAPE2ND3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE1ST2ND3RD">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/3BAY/JSHAPE1ST2ND3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
				
				
					<td>
					<label>
				   <input type="radio" name="corner_post" onclick="hide_layout(this.form);" onchange="getPriceOfProduct(this.form)" value="LSHAPE1ST">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/3BAY/LSHAPE1ST.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					</tr>
					
					
					
					<tr>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" onchange="getPriceOfProduct(this.form);" value="LSHAPE2ND">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/3BAY/LSHAPE2ND.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE3RD">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/3BAY/LSHAPE3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE1ST2ND">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/3BAY/LSHAPE1ST2ND.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE1ST3RD">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/3BAY/LSHAPE1ST3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					</tr>
					
					<tr>
					
					
					
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE2ND3RD">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/3BAY/LSHAPE2ND3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE1ST2ND3RD">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/3BAY/LSHAPE1ST2ND3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
				
				
					</tr>
					
					';
			}



			if ($_REQUEST['type'] == '2BAY') {
				echo '
					
					<tr>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" onclick="hide_layout(this.form);" onchange="getPriceOfProduct(this.form)" value="JSHAPE1ST" checked>
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/2BAY/JSHAPE1ST.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE2ND">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/2BAY/JSHAPE2ND.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE1ST2ND">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/2BAY/JSHAPE1ST2ND.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" onclick="hide_layout(this.form);" onchange="getPriceOfProduct(this.form)" value="LSHAPE1ST">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/2BAY/LSHAPE1ST.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					</tr>
					
					<tr>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE2ND">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/2BAY/LSHAPE2ND.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE1ST2ND">
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/2BAY/LSHAPE1ST2ND.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					</tr>';
			}


			if ($_REQUEST['type'] == '1BAY') {
				echo '
					
					<tr>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" onclick="hide_layout(this.form);" onchange="getPriceOfProduct(this.form)" value="JSHAPE1ST" checked>
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/1BAY/JSHAPE1ST.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					
					<td>
					<label>
				   <input type="radio" name="corner_post" onclick="hide_layout(this.form);" onchange="getPriceOfProduct(this.form)" value="LSHAPE1ST" >
				   <img alt="sneeze guard" title="sneeze guard for office" src="images/ES53/1BAY/LSHAPE1ST.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					</tr>
					';
			}



			echo '</table>
					
					
					
					</div>';
		}
	?>
	
	
	
	
	
	
	
	
	
	
			<div id="selected-item" style="position: relative;display: inline-block;width:100%;">

                <ul class="head-table" style="width:100%;">
                        <li id="additional_image"  style="width:97%;"><img  style="max-width: 100%;max-height: 100%;display: block;">
						
						</li>
                        <br style="clear:both;">
                    </ul>
					
                </div>
	
	
	
	


	
</div>


<div class="info-sub-container1">
	<!--for options div-->


<?php include('includes/model_files/'.$category_name.'/'.$category_name.'.php');?>





<div class="footer-icons-quotes" >

<table width="100%" class="icons-quotes2">
<tr>
<td colspan="5"><h2>&nbsp;</h2></td>
</tr>
<tr>
<td align="center">
<a onclick="open_signup_form_quote();"><img src="img/pricing-page/save_quote.png"><p>Save Quote</p>
</a>
</td>
<td align="center">
<a onclick="open_signup_form_layout();"><img src="img/pricing-page/save_layout.png"><p>Save Layout</p></a></td>
<td align="center">
<?php
if($category_name=='B950 SWIVEL')
{
?>
<a class="thickbox" href="images/B-950-SWIVEL/POSTDIM.jpg">


<?php
}
else{
?>

<a class="thickbox" href="images/<?php echo $category_name;?>/POSTDIM.jpg">


	<?php
}

if($category_name=='B950 SWIVEL')
{
$pdf_file_name='B-950-SWIVEL';	
}
elseif($category_name=='B950')
{
$pdf_file_name='B-950';	
}
elseif($category_name=='B950P')
{
$pdf_file_name='B-950P-GLASS';	
}
elseif($category_name=='EP950')
{
$pdf_file_name='EP-950-ACRYLIC';	
}
else{
$pdf_file_name=$category_name;		
}



?>




<img src="img/pricing-page/dimension.png"><p>Dimensions</p></a></td>
<td align="center"><a href="PDF/<?=$pdf_file_name; ?>.pdf" target="_blank"><img src="img/pricing-page/pdf-specs.png"><p>PDF Specs</p></a></td>
<td align="center"><a onclick="open_signup_form_rivet()"><img src="img/pricing-page/threeD.png"><p>3D file</p></a></td>
</tr>
</table>
</div>



</form>




</div>

<!--end here-->
<div class="container">
</div>















<!-- <script>
validateForm();
</script> -->
	<div id="myModalsss" class="modalss" >
	<div id="contactFormsssss">
	<span class="closessss">&times;</span>
	<p class="maintextsssss" >BEST PRICE GUARANTEE</p>
	<hr />
	<div id="guaranteepricemaindiv">
	<div id="guaranteepricesubdiv1"><img alt="sneeze guard" title="sneeze guard for office" src="img/social/new_img_bestprice.jpg" id="mail_imgsssss" title="Sneeze Guard" alt="Sneeze Guard"></div>
	<div id="guaranteepricesubdiv2"><p class="othtextsssss" >
	<i id="guaranteepricesubdiv2i">

	<span id="bestprice">When ordering at ADM Sneezeguards, you will get the Best Price Guarantee. If you can find a better price, not only we will match it, but we will even give you an additional 5% discount off of the matched price !</span></i>

	</p></div>
	</div>
	<div>
	</div>	
	</div>
	</div>
	<div id="myModal" class="modal" >
	<div id="contactForm">
	<span class="close">&times;</span>
	<p class="maintext" >YOUR EMAIL IS NEEDED</p>
	<hr />
	<div class="row">
		<div class="col-2 p-0">
		<img alt="sneeze guard" title="sneeze guard for office" src="img/mail/mail_img.png" id="mail_img" title="Sneeze Guard" alt="Sneeze Guard">
		</div>
		<div class="col-10 p-0">
		<p class="othtext" ><i>To save or print we need your email address and you will also be added to our mailing list for future sales, discounts and new products.....</i>
		</div>
	</div>
	<!-- <div id="youremailmaindiv">
	<div id="youremailsubdiv1"><img alt="sneeze guard" title="sneeze guard for office" src="img/mail/mail_img.png" id="mail_img" title="Sneeze Guard" alt="Sneeze Guard"></div>
	<div id="youremailsubdiv2"><p class="othtext" ><i>To save or print we need you email address and you will also be added to our mailing list for future sales, discounts and new products.....</i></p>
	</div>
	</div> -->
	<div id="input_reuired" id="youremailsubdiv3">
		<p id="youremailsubdiv3p">*Please enter your name and email .</p>
	</div>
  	<div class="form-group"> 
		<input class="form-control" placeholder="Name" type="text" name="name_quote" id="name_quote"   />
	</div>
	<div class="form-group"> 
	<input class="form-control" placeholder="Email" type="email" name="email_quote" id="email_quote"   /> 
	</div>
	<input type="submit" value="Subscribe" class="formBtn" onclick="save_ip_quote();"  id="sub_quote" />
	<div class="form-group"> 
	<input class="form-control" placeholder="Name" type="text" name="name_revit" id="name_revit"   />
	</div>
	<div class="form-group"> 
	<input class="form-control" placeholder="Email" type="email" name="email_revit" id="email_revit"   />
	</div> 
	<input type="submit" value="Subscribe" class="formBtn1" id="revit" onclick="save_ip_revit();" id="sub_revit" />
	<div class="form-group"> 
	<input class="form-control" placeholder="Name" type="text" name="name_layout" id="name_layout"  />
	</div>
	<div class="form-group"> 
	<input class="form-control" placeholder="Email" type="email" name="email_layout" id="email_layout"   />
	</div>
    <input type="submit" value="Subscribe" class="formBtn22" onclick="save_ip_layout(this.form);"  id="sub_layout" />
   	<span class="smalltext">*By completing this form you are signing up to receive our emails and can unsubscribe at anytime.....</span>
	</div> 
	</div>
	</div>
	<input type="hidden" id="check_quote_ip" name="check_quote_ip" value="">
	<input type="hidden" id="check_layout_ip" name="check_layout_ip" value="">
	<script type="text/javascript" src="new-design/js/product_info.js"></script> 
	<?php require(DIR_WS_INCLUDES . 'footer_new_design.php');?>

