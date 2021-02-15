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

	  $im_id=rand();
	  if(isset($_SESSION["scr"])){
		  $_SESSION['scr']=$_SESSION['scr']."-".$im_id;
	  }else{
		  $_SESSION['scr']=$im_id;
	  }
	
?>

<script type="text/javascript">
var tot1 = osc = im_id = img_ajx = "";
var one = false;
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

<?php } if($category_name=='EP12'||$category_name=='EP22'){ ?>

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

<style>

</style>

<div class="item" style="position:absolute;visibility:hidden;">

    <div class="delete" style="visibility:hidden"></div>

</div>

<link rel="stylesheet" href="includes/model_files/Light Bar/Light Bar.css">

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
                    <tr style="display:none">
                        <td>
                            <?php
							$stl='style="position: relative;z-index: 102 !important;"';
							if(preg_match('/(?i)msie [5-7]/',$_SERVER['HTTP_USER_AGENT']))
        	                {
            	                $stl='style="z-index: 102 !important;"';
                	        }
                    	?>
                            <div style="position: relative;z-index: 102!important;">
                                <h1>Depth</h1>
                                <span id="post_height_span">
                                    <select name="post_height" onchange="getPriceOfProduct(this.form)">
                                        <option value="0">select</option>
                                        <option value="12">12"</option>
                                        <option value="16">16"</option>
                                        <option value="custom">Custom</option>
                                    </select>
                                </span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a class="thickbox" href='images/Light Bar/lightbar_length.jpg'>
                                <h1>Centerline</h1>
                            </a>
                        </td>
                        <td>
                            <?php if($category_name=='EP950'){?>
                            <span id="face_length_a_span">
                                <select name="face_length_a" onchange="getPriceOfProduct(this.form)">
                                    <option value="select">Select</option>
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

                                    <option value="24">Select</option>

                                    <?php
									if($facelengthA=='24')
									{
									echo'<option value="24" selected>24"</option>';	
									}
									else{
									echo'<option value="24">24"</option>';	
									}
									?>

                                    <option value="30">25"</option>
                                    <option value="30">26"</option>
                                    <option value="30">27"</option>
                                    <option value="30">28"</option>
                                    <option value="30">29"</option>

                                    <?php
									if($facelengthA=='30')
									{
									echo'<option value="30" selected>30"</option>';	
									}
									else{
									echo'<option value="30">30"</option>';	
									}
									?>

                                    <option value="36">31"</option>
                                    <option value="36">32"</option>
                                    <option value="36">33"</option>
                                    <option value="36">34"</option>
                                    <option value="36">35"</option>

                                    <?php
									if($facelengthA=='36')
									{
									echo'<option value="36" selected>36"</option>';	
									}
									else{
									echo'<option value="36">36"</option>';	
									}
									?>

                                    <option value="42">37"</option>
                                    <option value="42">38"</option>
                                    <option value="42">39"</option>
                                    <option value="42">40"</option>
                                    <option value="42">41"</option>

                                    <?php
									if($facelengthA=='42')
									{
									echo'<option value="42" selected>42"</option>';	
									}
									else{
									echo'<option value="42">42"</option>';	
									}
									?>

                                    <option value="48">43"</option>
                                    <option value="48">44"</option>
                                    <option value="48">45"</option>
                                    <option value="48">46"</option>
                                    <option value="48">47"</option>

                                    <?php
									if($facelengthA=='48')
									{
									echo'<option value="48" selected>48"</option>';	
									}
									else{
									echo'<option value="48">48"</option>';	
									}
									?>

                                    <option value="54">49"</option>
                                    <option value="54">50"</option>
                                    <option value="54">51"</option>
                                    <option value="54">52"</option>
                                    <option value="54">53"</option>

                                    <?php
									if($facelengthA=='54')
									{
									echo'<option value="54" selected>54"</option>';	
									}
									else{
									echo'<option value="54">54"</option>';	
									}
									?>

                                    <option value="60">55"</option>
                                    <option value="60">56"</option>
                                    <option value="60">57"</option>
                                    <option value="60">58"</option>
                                    <option value="60">59"</option>

                                    <?php
									if($facelengthA=='60')
									{
									echo'<option value="60" selected>60"</option>';	
									}
									else{
									echo'<option value="60">60"</option>';	
									}
									?>

                                    <option value="66">61"</option>
                                    <option value="66">62"</option>
                                    <option value="66">63"</option>
                                    <option value="66">64"</option>
                                    <option value="66">65"</option>

                                    <?php
									if($facelengthA=='66')
									{
									echo'<option value="66" selected>66"</option>';	
									}
									else{
									echo'<option value="66">66"</option>';	
									}
									?>

                                    <option value="72">67"</option>
                                    <option value="72">68"</option>
                                    <option value="72">69"</option>
                                    <option value="72">70"</option>
                                    <option value="72">71"</option>

                                    <?php
									if($facelengthA=='72')
									{
									echo'<option value="72" selected>72"</option>';	
									}
									else{
									echo'<option value="72">72"</option>';	
									}
									?>

                                    <option value="78">73"</option>
                                    <option value="78">74"</option>
                                    <option value="78">75"</option>
                                    <option value="78">76"</option>
                                    <option value="78">77"</option>

                                    <?php
									if($facelengthA=='78')
									{
									echo'<option value="78" selected>78"</option>';	
									}
									else{
									echo'<option value="78">78"</option>';	
									}
									?>

                                    <option value="84">79"</option>
                                    <option value="84">80"</option>
                                    <option value="84">81"</option>
                                    <option value="84">82"</option>
                                    <option value="84">83"</option>

                                    <?php
									if($facelengthA=='84')
									{
									echo'<option value="84" selected>84"</option>';	
									}
									else{
									echo'<option value="84">84"</option>';	
									}
									?>

                                </select>
                            </span>
                            <?  } ?>
                        </td>
                        <td>
                            <span id="errormsgfirstname">
                                <?php
						if($facelengthA>0)
						{
						?>
                                <img id="glass_c_err" src="img/iconCheckOn.gif">

                                <?php
						}
						else{
						?>

                                <img id="glass_c_err" src="img/iconCheckOff.gif">
                                <?php
						}
						?>

                            </span>
                        </td>
                    </tr>
                    <tr style="display:none">
                        <td>
                            <div style="position: relative;z-index: 102!important;">
                                <h1>Shelves</h1>
                                <select name="shelvs_a" onchange="getPriceOfProduct(this.form)">
                                    <?php for($i=1;$i<=7;$i+=1){
				                            echo '<option value="'.$i.'">'.$i.'</option>';
				                        }?>
                                </select>
                            </div>
                        </td>
                    </tr>
                </table>

            </div>
            <div class="tables-options">

                <div style="position: relative; display:none">
                    <table class="test-round" width="100%">
                        <tr>
                            <td>
                                <h1>Infinite Control</h1>
                                <input type="button" class="rounded-corner-image" value="?"
                                    style="width:20px;margin: 0 4px;"
                                    onclick="changeGlassImage(this.form,'RADIUS.jpg');" />
                                <input type="checkbox" id="checkbox2" name="rounded_corners" value="0"
                                    style="margin:4px;" onclick="tishu2,tishu3(true);getPriceOfProduct(this.form);"
                                    disabled="disabled" />
                                <div id="rott"></div>
                            </td>
                        </tr>
                        <tr style="display:none">
                            <td>
                                <h1>Battery Pack</h1>
                                <input type="button" class="rounded-corner-image" value="?"
                                    style="width:20px;margin: 0 4px;"
                                    onclick="changeGlassImage(this.form,'RADIUS.jpg');" />
                                <input type="checkbox" id="checkbox3" name="rounded_corners2" value="0"
                                    style="margin:4px;" onclick="getPriceOfProduct(this.form);" disabled="disabled" />
                                <div id="rott"></div>
                            </td>
                        </tr>
                    </table>
                </div>
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
                        <td colspan=2><a class="thickbox" href='images/Finishes.jpg'>
                                <h1>Post Finish</h1>
                            </a>
                        </td>
                        <td>
                            <select name="choose_finish" id="choose_finish2"  onchange="tishu3(false),getPriceOfProduct(this.form)">

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
            </div>

        </td>
    </tr>
</table>

<div><h2>&nbsp;</h2></div>
</div>


<div class="info-sub-container3" valign="top" align="center">

    <div class="test-Price div3">

        <table id="cart-form" class="price">
            <tr>
                <td colspan=2 style=" font-size:150%;">
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

            <tr style="display:none">

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
       

        <!--td><h1>Add to Cart</h1></td-->

        <input type="hidden" id="c_glass_face" name="c_glass_face" value="" />
        <input type="hidden" id="c_glass_face_val" name="c_glass_face_val" value="" />

        <input type="hidden" id="c_glass_right" name="c_glass_right" value="" />
        <input type="hidden" id="c_glass_right_val" name="c_glass_right_val" value="" />

        <input type="hidden" id="c_glass_left" name="c_glass_left" value="" />
        <input type="hidden" id="c_glass_left_val" name="c_glass_left_val" value="" />

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
<script type="text/javascript">
facelengthA = '<?php echo $facelengthA; ?>';
category_name = "<?=$category_name?>";
osc = "<?=$_REQUEST['osCsid']; ?>";
im_id = "<?=$im_id; ?>";
</script>

<script src="includes/model_files/Light Bar/Light Bar.js"></script>