
<?php 

$post_height='';
$facelengthA='';
$facelengthB='';
$facelengthC='';
$facelengthD='';
$glass_type='Square';
$finish_type='SS';
$flange='0';
$lightbar='0';
$endpanel=4;
$right_end='';
$left_end='';
$countertop='';
$shelve='';

$post_height=$HTTP_GET_VARS['post_height'];
$facelengthA=$HTTP_GET_VARS['facelengthA'];
$facelengthB=$HTTP_GET_VARS['facelengthB'];

$facelengthccc=$HTTP_GET_VARS['facelengthC'];
if(strpos($facelengthccc, 'W') !== false) 
{
   
  $ccarray=explode("W",$facelengthccc); 
  $facelengthC=$ccarray[1];
  
}
else{
    $facelengthC=$facelengthccc;
}

$facelengthD=$HTTP_GET_VARS['facelengthD'];
$glass_type=$HTTP_GET_VARS['glass_type'];
$finish_type=$HTTP_GET_VARS['finish_type'];
$flange=$HTTP_GET_VARS['flange'];
$lightbar=$HTTP_GET_VARS['lightbar'];
$endpanel=$HTTP_GET_VARS['endpanel'];

$right_end=$HTTP_GET_VARS['right_end'];
$left_end=$HTTP_GET_VARS['left_end'];

$countertop=$HTTP_GET_VARS['countertop'];
$shelve=$HTTP_GET_VARS['shelve'];

$msg="";
$id=$_GET['id'];
$tp=$_GET['type'];
$rs=tep_db_query("select * from custom_popup where id='".$id."'");
$rw=tep_db_fetch_array($rs);
$ms=$rw['message'];
$ms_option=$rw['option_popup'];
$ms_option1=$rw['opiton1_popup'];
$ms_post=$rw['post_popup'];
$ms_left=$rw['left_popup'];
$ms_right=$rw['right_popup'];
$ms_face=$rw['face_popup'];
$ms_adjustable=$rw['adjustable_popup'];
$ms_cart=$rw['cart_popup'];
$im_id=rand();
if(isset($_SESSION["scr"])){
    $_SESSION['scr']=$_SESSION['scr']."-".$im_id;
}else{
    $_SESSION['scr']=$im_id;
}

?>

<script type="text/javascript">

var tot1 = osc = im_id = img_ajx = "";
<?php

  if(isset($HTTP_GET_VARS['id'])){

      $product="select count(*) as total from ".TABLE_PRODUCTS." as p, ".TABLE_PRODUCTS_DESCRIPTION." as pd, ".TABLE_PRODUCTS_TO_CATEGORIES." as pc where p.products_id=pd.products_id and pd.products_id=pc.products_id and pc.categories_id=".$HTTP_GET_VARS['id']." and pd.language_id=".(int)$languages_id;

      $product=tep_db_query($product);

      $products=tep_db_fetch_array($product);  

  }

?>

arr_len = <?=$products['total']?>;

<?php if($category_name!='EP5'){ ?>

arr_len = parseInt(arr_len) + 7;

<?php } ?>

var product_name_price = new Array(arr_len);

<?php

  if(isset($HTTP_GET_VARS['id'])){

      $product="select p.products_id as id, pd.products_name as name, p.products_price as price from ".TABLE_PRODUCTS." as p, ".TABLE_PRODUCTS_DESCRIPTION." as pd, ".TABLE_PRODUCTS_TO_CATEGORIES." as pc where p.products_id=pd.products_id and pd.products_id=pc.products_id and pc.categories_id=".$HTTP_GET_VARS['id']." and pd.language_id=".(int)$languages_id;

      $product=tep_db_query($product);

      if($category_name!='EP5'){?>

product_name_price['EP5-FLANGE COVER 1 BAY BOTH ENDS'] = new Array("834", "28.0000");

product_name_price['EP5-FLANGE COVER 1 BAY RIGHT END'] = new Array("835", "21.0000");

product_name_price['EP5-FLANGE COVER 1 BAY LEFT END'] = new Array("836", "21.0000");

product_name_price['EP5-FLANGE COVER 1 BAY NO ENDS'] = new Array("837", "14.0000");

product_name_price['EP5-FLANGE COVER 2 BAY BOTH ENDS'] = new Array("840", "35.0000");

product_name_price['EP5-FLANGE COVER 2 BAY RIGHT END'] = new Array("841", "28.0000");

product_name_price['EP5-FLANGE COVER 3 BAY BOTH ENDS'] = new Array("842", "42.0000");

<?php  } if($category_name=='EP12'||$category_name=='EP22'){ ?>

product_name_price['EP11 Center Post Brushed Aluminum'] = new Array("242", "86.0000");

product_name_price['EP11 Center Post Powder Coated Black'] = new Array("261", "101.0000");

product_name_price['EP11 Center Post Brushed Stainless Steel'] = new Array("263", "101.0000");

<?php } 

      while($products=tep_db_fetch_array($product)){?>

product_name_price['<?=$products['name']?>'] = new Array("<?=$products['id']?>", "<?=$products['price']?>");

<?php }

  }
  
    $category_name;
?>
</script>
<script src="jquery.confirm/jquery.confirm.js"></script>

<?php if($_REQUEST['type']=='1BAY'){?>
<style>

</style>
<?php
}

?>

<div class="item" style="position:absolute;visibility:hidden;">

<div class="delete" style="visibility:hidden"></div>

</div>

<link rel="stylesheet" href="includes/model_files/Heat Lamp/Heat Lamp.css">

<table id="cart-form">

<tr>
  <td>

      <div class="tables-options">
          <table cellpadding="0" cellspacing="0" width="100%" style="border: 1px solid white;border-radius: 5px;">
              <tr>
                  <td colspan=3>
                      <center>
                          <h2 class="heading_all"><span style="float:left">&nbsp;&nbsp;1)</span>Measurements</h2>
                      </center>
                  </td>
              </tr>
              <tr>
                  <td>
                      <a class="thickbox" href='images/Heat Lamp/heatLamp_length.jpg'>
                          <h1>Centerline</h1>
                      </a>
                  </td>
                  <td>
                      <?php if($category_name=='EP950'){?>
                      <span id="face_length_a_span">

                          <select name="face_length_a"
                              onchange="tishu3(true);getPriceOfProduct(this.form);toggle();">
                              <option value="0">Select</option>
                              <option value="24">24"</option>
                              <option value="30">30"</option>
                              <option value="36">36"</option>
                              <option value="42">42"</option>
                              <option value="48">48"</option>
                              <option value="54">54"</option>
                              <option value="60">60"</option>
                              <option value="66">66"</option>
                              <option value="72">72"</option>
                              <option value="78">78"</option>
                              <option value="84">84"</option>
                              <option value="custom">Custom</option>
                          </select>
                      </span>
                      <? } else { ?>

                      <span id="face_length_a_span">
                          <select name="face_length_a" id="face_length_a"
                              onchange="tishu3(true);getPriceOfProduct(this.form);toggle();">
                              <!-- <p>Taking this one!!</p> -->
                              <option value="select">Select</option>

                              <?php
                              if($facelengthA=='26')
                              {
                              echo'<option value="31" selected>26"</option>';	
                              }
                              else{
                              echo'<option value="31">26"</option>';	
                              }
                              ?>

                              <option value="31">27"</option>
                              <option value="31">28"</option>
                              <option value="31">29"</option>
                              <option value="31">30"</option>
                              <option value="31">31"</option>

                              <?php
                              if($facelengthA=='32')
                              {
                              echo'<option value="37" selected>32"</option>';	
                              }
                              else{
                              echo'<option value="37">32"</option>';	
                              }
                              ?>

                              <option value="37">33"</option>
                              <option value="37">34"</option>
                              <option value="37">35"</option>
                              <option value="37">36"</option>
                              <option value="37">37"</option>

                              <?php
                              if($facelengthA=='38')
                              {
                              echo'<option value="43" selected>38"</option>';	
                              }
                              else{
                              echo'<option value="43">38"</option>';	
                              }
                              ?>

                              <option value="43">39"</option>
                              <option value="43">40"</option>
                              <option value="43">41"</option>
                              <option value="43">42"</option>
                              <option value="43">43"</option>

                              <?php
                              if($facelengthA=='44')
                              {
                              echo'<option value="49" selected>44"</option>';	
                              }
                              else{
                              echo'<option value="49">44"</option>';	
                              }
                              ?>

                              <option value="49">45"</option>
                              <option value="49">46"</option>
                              <option value="49">47"</option>
                              <option value="49">48"</option>
                              <option value="49">49"</option>

                              <?php
                              if($facelengthA=='50')
                              {
                              echo'<option value="55" selected>50"</option>';	
                              }
                              else{
                              echo'<option value="55">50"</option>';	
                              }
                              ?>

                              <option value="55">51"</option>
                              <option value="55">52"</option>
                              <option value="55">53"</option>
                              <option value="55">54"</option>
                              <option value="55">55"</option>

                              <?php
                              if($facelengthA=='56')
                              {
                              echo'<option value="61" selected>56"</option>';	
                              }
                              else{
                              echo'<option value="61">56"</option>';	
                              }
                              ?>

                              <option value="61">57"</option>
                              <option value="61">58"</option>
                              <option value="61">59"</option>
                              <option value="61">60"</option>
                              <option value="61">61"</option>

                              <?php
                              if($facelengthA=='62')
                              {
                              echo'<option value="67" selected>62"</option>';	
                              }
                              else{
                              echo'<option value="67">62"</option>';	
                              }
                              ?>

                              <option value="67">63"</option>
                              <option value="67">64"</option>
                              <option value="67">65"</option>
                              <option value="67">66"</option>
                              <option value="67">67"</option>

                              <?php
                              if($facelengthA=='68')
                              {
                              echo'<option value="73" selected>68"</option>';	
                              }
                              else{
                              echo'<option value="73">68"</option>';	
                              }
                              ?>

                              <option value="73">69"</option>
                              <option value="73">70"</option>
                              <option value="73">71"</option>
                              <option value="73">72"</option>
                              <option value="73">73"</option>

                              <?php
                              if($facelengthA=='74')
                              {
                              echo'<option value="79" selected>74"</option>';	
                              }
                              else{
                              echo'<option value="79">74"</option>';	
                              }
                              ?>

                              <option value="79">75"</option>
                              <option value="79">76"</option>
                              <option value="79">77"</option>
                              <option value="79">78"</option>
                              <option value="79">79"</option>

                              <?php
                              if($facelengthA=='80')
                              {
                              echo'<option value="85" selected>80"</option>';	
                              }
                              else{
                              echo'<option value="85">80"</option>';	
                              }
                              ?>

                              <option value="85">81"</option>
                              <option value="85">82"</option>
                              <option value="85">83"</option>
                              <option value="85">84"</option>

                              <?php
                              if($facelengthA=='85')
                              {
                              echo'<option value="85" selected>85"</option>';	
                              }
                              else{
                              echo'<option value="85">85"</option>';	
                              }
                              ?>

                          </select>
                      </span>
                      <?  } ?>
                  </td>
                  <td width="11%">

                      <span id="errormsgfirstname">

                          <?php
                  if($facelengthA>0)
                  {
                  ?>
                          <img id="line_err" src="img/iconCheckOn.gif">

                          <?php
                  }
                  else{
                  ?>

                          <img id="line_err" src="img/iconCheckOff.gif">
                          <?php
                  }
                  ?>
                      </span>

                  </td>
              </tr>
          </table>

      </div>
      <div class="tables-options">
          <table class="test-round" cellpadding="0" cellspacing="0" width="100%"
              style="border: 1px solid white;border-radius: 5px;">
              <tr>
                  <td colspan=3>
                      <center>
                          <h2 class="heading_all"><span style="float:left">&nbsp;&nbsp;2)</span>Options</h2>
                      </center>
                  </td>
              </tr>
              <tr>
                  <td>
                      <h1><a class="thickbox" href='images/Heat Lamp/RADIUS.jpg'>
                              <h1>Infinite Control</h1>
                          </a></h1>
                  </td>
                  <td>
                      <!-- <input type="button" class="rounded-corner-image" value="?" style="width:20px;margin: 0 4px;" onclick="changeGlassImage(this.form,'RADIUS.jpg');" />  -->
                      <select id="checkbox2" name="rounded_corners" style="width:70px"
                          onchange="popup(this.form);getPriceOfProduct(this.form);" disabled="disabled" />
                      <option value="select">Select</option>
                      <?php
                      if($infinecontrol=='IC')
                      {
                      echo'<option value="yes" selected>Yes</option>';	
                      }
                      else{
                      echo'<option value="yes">Yes</option>';		
                      }
                      
                      ?>

                      <option value="no">No</option>

                      </select>
                      <!-- <input type="checkbox" id="checkbox2" name="rounded_corners" value="0" style="margin:4px;" onclick="tishu2,tishu3(true);getPriceOfProduct(this.form);" disabled="disabled"/>                    -->
                  </td>
                  <td width="11%">
                      <span id="errormsgfirstname">
                          <img id="control_err" src="img/iconCheckOff.gif">
                      </span>
                  </td>
              </tr>
              <tr>
                  <td>
                      <h1><a class="thickbox" href='images/Finishes.jpg'>
                              <h1>Post Finish</h1>
                          </a></h1>
                      <!-- <input type="button" class="rounded-corner-image" value="?" style="width:20px;margin: 0 4px;" onclick="finishImage(this.form,'Finishes.jpg');"/> -->
                    </td><td >
                      <select name="choose_finish" id="choose_finish2"
                           onchange="getPriceOfProduct(this.form)">
                          <?php
              if($finish_type=='SS')
              {
              echo'<option value="SL" selected>Brushed Stainless</option>';	
              }
              else{
              echo'<option value="SL">Brushed Stainless</option>';	
              }
              if($finish_type=='CB')
              {
              echo'<option value="PC" selected>Coated Black</option>';	
              }
              else{
              echo'<option value="PC">Coated Black</option>';	
              }
              ?>

                          <!--<option value="AL">Brushed Aluminum</option>-->
                      </select>
                  </td>
                  <td>
                      <span id="errormsgfirstname">
                          <img id="finish_err" src="img/iconCheckOn.gif">
                      </span>
                  </td>
              </tr>
          </table>
  </td>

</tr>
</table>

</td>
</tr>
</table>

<div><h2>&nbsp;</h2></div>
</div>


<div class="info-sub-container3" valign="top" align="center">

<div class="test-Price div3">

  <table id="cart-form" class="price">
      <tr>
          <td colspan=3>
              <center>
                  <h2 class="heading_all"><span style="float:left">&nbsp;&nbsp;3)</span>Quote</h2>
              </center>
          </td>
      </tr>
      <tr style="display:none;">

          <td align="left">Left Post:</td>
          <td id="left-post" align="right">0.00</td>

      </tr>

      <tr style="display:none;">

          <td align="left">Right Post:</td>
          <td id="right-post" align="right">0.00</td>

      </tr>

      <tr style="display:none">

          <td align="left">Battery Price:</td>
          <td id="trasition-post" align="right">0.00</td>

      </tr>

      <tr>

          <td align="left">Infinite Control:</td>
          <td id="flange-cover" align="right">0.00</td>

      </tr>

      <tr>

          <td align="left">Unit Price:</td>
          <td id="face-glass" align="right">0.00</td>

      </tr>

      <tr style="display:none;">

          <td align="left">Left Shelf Post:</td>
          <td id="left-post-sel" align="right">0.00</td>

      </tr>

      <tr style="display:none;">

          <td align="left">Trasition Shelf Post:</td>
          <td id="trasition-post-sel" align="right">0.00</td>

      </tr>

      <tr style="display:none;">

          <td align="left">Right Shelf Post:</td>
          <td id="right-post-sel" align="right">0.00</td>

      </tr>

      <tr style="color:black;border-top:1.5px solid #000;border-bottom:1.5px solid #000;">
          <td align="left" colspan="2" height="2"></td>
      </tr>
      <tr style="background-color: rgb(121 239 40 / 30%);color:black;">
          <td align="left">Total:</td>
          <td id="total" align="right">0.00</td>
      </tr>
  </table>

</div>

<div class="price-icon-wishlist-addtocart">
<center><h2 class="heading_all" id="addcartandfavorite"><span style="float:left;">&nbsp;&nbsp;&nbsp;4)</span><div class="addcartandfavdiv">Action</div></h2></center>
  


  <input type="hidden" id="c_glass_b_light" name="c_glass_b_light" value="" />
  <input type="hidden" id="c_glass_b_val_light" name="c_glass_b_val_light" value="" />

  <input type="hidden" id="c_glass_c_light" name="c_glass_c_light" value="" />
  <input type="hidden" id="c_glass_c_val_light" name="c_glass_c_val_light" value="" />
  <input type="hidden" id="c_glass_d_light" name="c_glass_d_light" value="" />
  <input type="hidden" id="c_glass_d_val_light" name="c_glass_d_val_light" value="" />

  <input type="hidden" id="post_type_val" name="post_type_val" value="" />
  <input type="hidden" id="post_degree_val" name="post_degree_val" value="" />

  <input type="hidden" id="c_glass_face" name="c_glass_face" value="" />
  <input type="hidden" id="c_glass_face_val" name="c_glass_face_val" value="" />
  <input type="hidden" id="c_glass_mult" name="c_glass_mult" value="1" />

  <input type="hidden" id="c_glass_right" name="c_glass_right" value="" />
  <input type="hidden" id="c_glass_right_val" name="c_glass_right_val" value="" />
  <input type="hidden" id="c_glass_right_mult" name="c_glass_right_mult" value="1" />
  <input type="hidden" id="c_glass_left" name="c_glass_left" value="" />
  <input type="hidden" id="c_glass_left_val" name="c_glass_left_val" value="" />
  <input type="hidden" id="c_glass_left_mult" name="c_glass_left_mult" value="1" />

  <input type="hidden" id="c_glass_adjustable_a" name="c_glass_adjustable_a" value="" />
  <input type="hidden" id="c_glass_adjustable_b" name="c_glass_adjustable_b" value="" />
  <input type="hidden" id="c_glass_adjustable_c" name="c_glass_adjustable_c" value="" />
  <input type="hidden" id="c_glass_adjustable_d" name="c_glass_adjustable_d" value="" />
  <input type="hidden" id="c_glass_adjustable_a_val" name="c_glass_adjustable_a_val" value="" />
  <input type="hidden" id="c_glass_adjustable_b_val" name="c_glass_adjustable_b_val" value="" />
  <input type="hidden" id="c_glass_adjustable_c_val" name="c_glass_adjustable_c_val" value="" />
  <input type="hidden" id="c_glass_adjustable_d_val" name="c_glass_adjustable_d_val" value="" />

  <input type="hidden" id="c_glass_a_mult" name="c_glass_a_mult" value="1" />
  <input type="hidden" id="c_glass_b_mult" name="c_glass_b_mult" value="1" />
  <input type="hidden" id="c_glass_c_mult" name="c_glass_c_mult" value="1" />
  <input type="hidden" id="c_glass_d_mult" name="c_glass_d_mult" value="1" />

  <input type="hidden" id="ckall" name="ckall" value="" />

  <input type="hidden" id="msg" name="msg" value="" />

  <input type="hidden" id="c_glass_a" name="c_glass_a" value="" />

  <input type="hidden" id="c_glass_a_val" name="c_glass_a_val" value="" />
  <input type="hidden" id="c_glass_a_light" name="c_glass_a_light" value="" />
  <input type="hidden" id="c_glass_a_val_light" name="c_glass_a_val_light" value="" />

  <input type="hidden" id="c_glass_post_left" name="c_glass_post_left" value="" />
  <input type="hidden" id="c_glass_post_right" name="c_glass_post_right" value="" />

  <input type="hidden" id="c_glass_post_val" name="c_glass_post_val" value="" />

  <input type="hidden" id="c_glass_b" name="c_glass_b" value="" />

  <input type="hidden" id="c_glass_b_val" name="c_glass_b_val" value="" />

  <input type="hidden" id="c_glass_c" name="c_glass_c" value="" />

  <input type="hidden" id="c_glass_c_val" name="c_glass_c_val" value="" />

  <input type="hidden" id="c_glass_d" name="c_glass_d" value="" />

  <input type="hidden" id="c_glass_d_val" name="c_glass_d_val" value="" />

  <input type="hidden" id="is_custom" name="is_custom" value="" />

  <input type="hidden" name="link" id="link">
  <input type="hidden" name="id" id="id" value="<?=$HTTP_GET_VARS['id']?>">
  <input type="hidden" id="product_type" name="product_type" value="<?php echo $category_name; ?>" />
  <input type="hidden" id="msg" name="msg" value="" />
  <!--td><h1>Add to Cart</h1></td-->
  <td colspan="2" align="center"><input type="hidden" name="type" value="<?=$_REQUEST['type']?>" />
      <input type="hidden" name="glass_face" value="0" id="glass-face" disabled="disabled">
      <!-- <div id="products_ids"></div> -->
      <input type="hidden" name="optionsid" id="optionsid" value="" disabled="disabled">

      <div class="item" style="position:absolute;visibility:hidden;">

          <div class="delete" style="visibility:hidden"></div>
      </div>
      <div class="item" style="position:absolute;visibility:hidden;">

          <div class="delete1" style="visibility:hidden"> </div>
          <div class="delete2" style="visibility:hidden"> </div>
          <div class="delete3" style="visibility:hidden"> </div>
      </div>

       <div class="row m-1">
			<div class="col-6 col-md-6 col-sm-6 text-center" title="Save to Favorite" id="wishlistt-div">
			
			
			<a href="javascript:void(0)" onclick="wishlist()">
			<img src="img/pricing-page/wishlist22.png" style="width:50%;margin-top: -5%;">
			<p>Save to Favorite</p>
			</a>
			</div>
			<div class="col-6 col-md-6 col-sm-6 text-center" id="cart-div">
			<button  onclick="return myFunction2(this.form)" id="add" title=" Add to Cart " alt="Add to Cart"  style="background: none;border: none;outline:none;" >
			<img src="img/pricing-page/add-to-cart23.png" >
			<p>Add to Cart</p>
			</button>
		
			</div>
		</div>


</div>

</div>
<script>
ms_option1='<?php echo $ms_option1; ?>';
ms='<?php echo $ms ?>';
category_name =$('#product_type').val();
osc = "<?=$_REQUEST['osCsid']; ?>";
im_id = "<?=$im_id; ?>";
</script>
<script src="includes/model_files/Heat Lamp/Heat Lamp.js"></script>