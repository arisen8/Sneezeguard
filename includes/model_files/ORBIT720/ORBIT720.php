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
	  $depthsss='';
	  $shelve='';
	  $infinecontrol='';
	  
//
	  $post_height=$HTTP_GET_VARS['post_height'];
	  $facelengthA=$HTTP_GET_VARS['facelengthA'];
	  $facelengthB=$HTTP_GET_VARS['facelengthB'];
	  
	  
	  
	  $facelengthccc=$HTTP_GET_VARS['facelengthC'];
	  if(strpos($facelengthccc, 'W') !== false) 
	  {
		 
		$ccarray=explode("W",$facelengthccc); 
	    $facelengthC=$ccarray[1];
		
		//echo'<b style="color:red;font-size:11px;">'; print_r($facelengthC);
		
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
	  
	  $depthsss=$HTTP_GET_VARS['countertop'];
	  $shelve=$HTTP_GET_VARS['shelve'];
	  $infinecontrol=$HTTP_GET_VARS['infinecontrol'];
	  $msg="";
	  $id=$_GET['id'];
	  $tp=$_GET['type'];
	  $rs=tep_db_query("select * from custom_popup where id='79'and bay='".$tp."'");
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
    var tot1=osc=im_id=img_ajx="";
	var zero=one=two=three=four=five=six=seven=true;
<?php

        if(isset($HTTP_GET_VARS['id'])){

            $product="select count(*) as total from ".TABLE_PRODUCTS." as p, ".TABLE_PRODUCTS_DESCRIPTION." as pd, ".TABLE_PRODUCTS_TO_CATEGORIES." as pc where p.products_id=pd.products_id and pd.products_id=pc.products_id and pc.categories_id=".$HTTP_GET_VARS['id']." and pd.language_id=".(int)$languages_id;

            $product=tep_db_query($product);

            $products=tep_db_fetch_array($product);  

        }

    ?>

    arr_len=<?=$products['total']?>;

    <?php if($category_name!='EP5'){ ?>

    arr_len=parseInt(arr_len)+7;

    <?php } ?>

var product_name_price=new Array(arr_len);

    <?php

        if(isset($HTTP_GET_VARS['id'])){

            $product="select p.products_id as id, pd.products_name as name, p.products_price as price from ".TABLE_PRODUCTS." as p, ".TABLE_PRODUCTS_DESCRIPTION." as pd, ".TABLE_PRODUCTS_TO_CATEGORIES." as pc where p.products_id=pd.products_id and pd.products_id=pc.products_id and pc.categories_id=".$HTTP_GET_VARS['id']." and pd.language_id=".(int)$languages_id;

            $product=tep_db_query($product);

            if($category_name!='EP5'){?>

                product_name_price['EP5-FLANGE COVER 1 BAY BOTH ENDS']=new Array("834", "28.0000");

                product_name_price['EP5-FLANGE COVER 1 BAY RIGHT END']=new Array("835", "21.0000");

                product_name_price['EP5-FLANGE COVER 1 BAY LEFT END']=new Array("836", "21.0000");

                product_name_price['EP5-FLANGE COVER 1 BAY NO ENDS']=new Array("837", "14.0000");

                product_name_price['EP5-FLANGE COVER 2 BAY BOTH ENDS']=new Array("840", "35.0000");

                product_name_price['EP5-FLANGE COVER 2 BAY RIGHT END']=new Array("841", "28.0000");

                product_name_price['EP5-FLANGE COVER 3 BAY BOTH ENDS']=new Array("842", "42.0000");

           <?php } if($category_name=='EP12'||$category_name=='EP22'){ ?>

                product_name_price['EP11 Center Post Brushed Aluminum']=new Array("242", "86.0000");

                product_name_price['EP11 Center Post Powder Coated Black']=new Array("261", "101.0000");

                product_name_price['EP11 Center Post Brushed Stainless Steel']=new Array("263", "101.0000");

           <?php } 

            while($products=tep_db_fetch_array($product)){?>

                    product_name_price['<?=$products['name']?>']=new Array("<?=$products['id']?>", "<?=$products['price']?>");

            <?php }

        }
		
          $category_name;
    ?>

</script>

<link rel="stylesheet" href="includes/model_files/ORBIT720/ORBIT720.css">
<table id="cart-form" style="" >
    <?php //include('form_option.php')?>
	
    <tr>
        <td>
            
                               <div class="tables-options">         
                                <table class="test-length_f" cellpadding="0" cellspacing="0" width="100%" style="border: 1px solid white;border-radius: 5px;">
            	<tr>
            		<td colspan=3><center><h2 class="heading_all"><span style="float:left">&nbsp;&nbsp;1)</span>Measurements</h2></center></td>
            	</tr>
                <tr style="display:none">
                    <td>
	                    <div style="position: relative;z-index: 102!important;"><h1>Depth</h1>
    						<span id="post_height_span">
                        		<select name="post_height"   onchange="getPriceOfProduct(this.form)" >
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
            
                    	<td><a class="thickbox" href='images/<?php echo $category_name;?>/POSTDIM.jpg' ><h1>Face Length</h1></a>
                    	</td>
                    
	                <td>
				
							<span id="face_length_a_span">
		                        <select name="face_length_a" onchange="getPriceOfProduct(this.form)">
                                    <option value="select">Select</option>
									
									
									
									
									<?php
									
									if($facelengthA=='24')
									{
									echo'<option value="24" selected>24"</option>';		
									}
									
									else{
									echo'<option value="24">24"</option>';	
									}
									
									
									if($facelengthA=='30')
									{
									echo'<option value="30" selected>30"</option>';		
									}
									
									else{
									echo'<option value="30">30"</option>';	
									}
									
									if($facelengthA=='36')
									{
									echo'<option value="36" selected>36"</option>';		
									}
									
									else{
									echo'<option value="36">36"</option>';	
									}
									
									if($facelengthA=='42')
									{
									echo'<option value="42" selected>42"</option>';		
									}
									
									else{
									echo'<option value="42">42"</option>';	
									}
									
									if($facelengthA=='48')
									{
									echo'<option value="48" selected>48"</option>';		
									}
									
									else{
									echo'<option value="48">48"</option>';	
									}
									
									if($facelengthA=='54')
									{
									echo'<option value="54" selected>54"</option>';		
									}
									
									else{
									echo'<option value="54">54"</option>';	
									}
									
									if($facelengthA=='60')
									{
									echo'<option value="60" selected>60"</option>';		
									}
									
									else{
									echo'<option value="60">60"</option>';	
									}
									
									if($facelengthA=='66')
									{
									echo'<option value="66" selected>66"</option>';		
									}
									
									else{
									echo'<option value="66">66"</option>';	
									}
									
									
													
									?>
                                   
									
                                    <option value="custom">Custom</option>
		                        </select>
							</span>
						
                    </td>
                    <td>
                    	<span id="errormsgfirstname">
                           	<img id="glass_err" src="img/iconCheckOff.gif">
                        </span>
                    </td>
                </tr>
                <tr  style="display:none">
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
		  <table class="test-round" cellpadding="0" cellspacing="0" width="100%" style="border: 1px solid white;border-radius: 5px;">
            	<tr>
            		<tr>
                		<td colspan=3><center><h2 class="heading_all"><span style="float:left">&nbsp;&nbsp;2)</span>Options</h2></center></td>
                	</tr>
            	</tr>
            	<tr>
                		<td>
						
                            <a class="thickbox" href="images/<?php echo $category_name;?>/End_panels.jpg"><h1>End Panels</h1></a>
                        </td>
                        <td>
                        	<select class="option" id="end_options">
                                <option value="select">Select</option>
                                <option value="Both Closed End Panels">Both Ends</option>
                                <option value="Right Closed End Panel">Right End</option>
                                <option value="Left Closed End Panel">Left End</option>
                                <option value="No Closed End Panels">No Ends</option>
                            </select>
                        </td>
                        <td>
                        	<span id="errormsgfirstname">
                                <img id="endpan_err" src="img/iconCheckOff.gif">
                            </span>
                        </td>
                	</tr>
	            <tr style="display:none;">
                    <td><a class="thickbox" href="light_newd.php?name=<?php echo  $category_name;?>&KeepThis=true&TB_iframe=true&height=480&width=640" ><h1>Light Bar</h1></a>
                    </td>
                    <td>
						<!-- <a style="width:20px;margin: 0 4px;float: right;" class="thickbox" href="light.php?name=<?php echo  $category_name;?>&KeepThis=true&TB_iframe=true&height=480&width=640" disabled="disabled"><img src="images/flang.jpg" ></a>  -->
                        <!-- <input type="checkbox" id="checkbox2" name="rounded_corners" value="0" style="margin:4px;" onclick="getPriceOfProduct(this.form);" disabled="disabled"/> -->
                        <select id="checkbox2" name="rounded_corners" style="margin:4px;" onchange="getPriceOfProduct(this.form);">
                        	<option value="select">Select</option>
                       		<option value="yes">Yes</option>
                       		<option value="no">No</option>
                        </select>                   
                    </td>
                    <td>
                    	<span id="errormsgfirstname">
                           	<img id="light_err" src="img/iconCheckOff.gif">
                        </span>
                    </td>
                </tr>
                <tr style="display:none;">
           
                    	<td><a class="thickbox" href='images/B950P/RADIUS.jpg'><h1>Battery Pack</h1></a>
                    	</td>
                
                    <td>
                        <!-- <input type="button" class="rounded-corner-image" value="?" style="width:20px;margin: 0 4px;" onclick="changeGlassImage(this.form,'RADIUS.jpg');" />  -->
                        <!-- <input type="checkbox" id="checkbox3" name="rounded_corners2" value="0" style="margin:4px;" onclick="getPriceOfProduct(this.form);" disabled="disabled"/>   -->
                        <select id="checkbox3" name="rounded_corners2" style="margin:4px;width:70px;" onchange="getPriceOfProduct(this.form);" disabled="disabled">
                        	<option value="select">Select</option>
                        	<option value="yes">Yes</option>
                        	<option value="no">No</optiom>
                        </select>                 
                    </td>
                    <td>
                    	<span id="errormsgfirstname">
                           	<img id="btry_err" src="img/iconCheckOff.gif">
                        </span>
                    </td>
                </tr>
                <tr style="display:none;">
					<td colspan=2><a class="thickbox" href='images/Finishes.jpg'><h1>Post Finish</h1></a>
                        <select name="choose_finish" id="choose_finish2" style="width:135px;margin:0" onchange="getPriceOfProduct(this.form)">
							
							<?php
					
					?>
							<!--<option value="PC">Coated Black</option>-->
                            <option value="SL">Brushed Stainless</option>
							
							
                        </select>
                    </td>
                    <td>
                    	<span id="errormsgfirstname">
                           	<img id="glass_c_err" src="img/iconCheckOn.gif">
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
		
    <table id="cart-form" class="price" cellpadding="0" cellspacing="0" width="100%" style="border: 1px solid white;border-radius: 5px;"> 
		<tr>
        	<td colspan=2 style=" font-size:150%;"><center><h2 class="heading_all"><span style="float:left">&nbsp;&nbsp;3)</span>Quote</center></td>
    	</tr>
        <tr style="display:none;">

            <td align="left">Left Post:</td><td id="left-post" align="right">0.00</td>

        </tr>

        <tr style="display:none;">

            <td align="left">Right Post:</td><td id="right-post" align="right">0.00</td>

        </tr>
		

        <tr style="display:none;" >

            <td align="left">Battery Price:</td><td id="trasition-post" align="right">0.00</td>

        </tr>

        <tr style="display:none;">

            <td align="left">Light Bar:</td><td id="flange-cover" align="right">0.00</td>

        </tr>

        <tr>
            <td align="left">Unit Price:</td><td id="face-glass" align="right">0.00</td>
        </tr>
		<tr style="display:none;">
            <td align="left">Left Shelf Post:</td><td id="left-post-sel" align="right">0.00</td>
        </tr>
			<tr style="display:none;">
            <td align="left">Trasition Shelf Post:</td><td id="trasition-post-sel" align="right">0.00</td>
        </tr>
		<tr style="display:none;">
            <td align="left">Right Shelf Post:</td><td id="right-post-sel" align="right">0.00</td>
        </tr>
        <tr >
            <td align="left">Left End Glass:</td><td id="left-Panel" align="right">0.00</td>
        </tr>
        <tr >
            <td align="left">Right End Glass:</td><td id="right-panel" align="right">0.00</td>
        </tr>
        <tr>
            <td colspan="2" style="padding:0px !important;background: #f4f4f4; height:1px"></td>       
        </tr>
<tr style="color:black;border-top:1.5px solid #000;border-bottom:1.5px solid #000;">
		 <td align="left" colspan="2" height="2"></td>
		 </tr>
         <tr style="background-color: rgb(121 239 40 / 30%);color:black;">
        <td align="left">Total:</td><td id="total" align="right">0.00</td>
    </tr>
    </table>
</div>
<div class="price-icon-wishlist-addtocart"> 
<center><h2 class="heading_all" id="addcartandfavorite"><span style="float:left;">&nbsp;&nbsp;&nbsp;4)</span><div class="addcartandfavdiv">Action</div></h2></center>

        <input type="hidden" id="c_glass_a" name="c_glass_a" value=""  />
        <input type="hidden" id="c_glass_a_val" name="c_glass_a_val" value=""  />
 <input type="hidden" id="c_glass_a_light" name="c_glass_a_light" value=""  />
		<input type="hidden" id="c_glass_a_val_light" name="c_glass_a_val_light" value=""  />
          <input type="hidden" id="c_glass_post_left" name="c_glass_post_left" value=""  />
	 <input type="hidden" id="c_glass_post_right" name="c_glass_post_right" value=""  />
        <input type="hidden" id="c_glass_post_val" name="c_glass_post_val" value=""  />
		<input type="hidden" id="c_glass_b" name="c_glass_b" value=""  />
        <input type="hidden" id="c_glass_b_val" name="c_glass_b_val" value=""  />
		<input type="hidden" id="c_glass_c" name="c_glass_c" value=""  />
        <input type="hidden" id="c_glass_c_val" name="c_glass_c_val" value=""  />
   <input type="hidden" id="c_glass_d" name="c_glass_d" value=""  />
        <input type="hidden" id="c_glass_d_val" name="c_glass_d_val" value=""  />
		<input type="hidden" id="is_custom" name="is_custom" value=""  />
	<input type="hidden" id="c_glass_face" name="c_glass_face" value=""  />
        <input type="hidden" id="c_glass_face_val" name="c_glass_face_val" value=""  />
        <input type="hidden" id="c_glass_right" name="c_glass_right" value=""  />
        <input type="hidden" id="c_glass_right_val" name="c_glass_right_val" value=""  />
        <input type="hidden" id="c_glass_left" name="c_glass_left" value=""  />
        <input type="hidden" id="c_glass_left_val" name="c_glass_left_val" value=""  />
		<input type="hidden" id="c_glass_b_light" name="c_glass_b_light" value=""  />
		<input type="hidden" id="c_glass_b_val_light" name="c_glass_b_val_light" value=""  />
		<input type="hidden"id="c_glass_c_light" name="c_glass_c_light" value=""  />
		<input type="hidden"id="c_glass_c_val_light" name="c_glass_c_val_light" value=""  />
		<input type="hidden"id="c_glass_d_light" name="c_glass_d_light" value=""  />
		<input type="hidden"id="c_glass_d_val_light" name="c_glass_d_val_light" value=""  />	
		<input type="hidden" id="post_type_val" name="post_type_val" value=""  />
		<input type="hidden" id="post_degree_val" name="post_degree_val" value=""  />
        <input type="hidden" id="c_glass_mult" name="c_glass_mult" value="1"  />	
        <input type="hidden" id="c_glass_right_mult" name="c_glass_right_mult" value="1"  />
        <input type="hidden" id="c_glass_left_mult" name="c_glass_left_mult" value="1"  />
<input type="hidden" id="c_glass_adjustable_a" name="c_glass_adjustable_a" value=""  />
		<input type="hidden" id="c_glass_adjustable_b" name="c_glass_adjustable_b" value=""  />
		<input type="hidden" id="c_glass_adjustable_c" name="c_glass_adjustable_c" value=""  /> 
                <input type="hidden" id="c_glass_adjustable_d" name="c_glass_adjustable_d" value=""  />
                <input type="hidden" id="c_glass_adjustable_a_val" name="c_glass_adjustable_a_val" value=""  />
		<input type="hidden" id="c_glass_adjustable_b_val" name="c_glass_adjustable_b_val" value=""  />
		<input type="hidden" id="c_glass_adjustable_c_val" name="c_glass_adjustable_c_val" value=""  />
		<input type="hidden" id="c_glass_adjustable_d_val" name="c_glass_adjustable_d_val" value=""  />		
		<input type="hidden" id="c_glass_a_mult" name="c_glass_a_mult" value="1"  />
		<input type="hidden" id="c_glass_b_mult" name="c_glass_b_mult" value="1"  />
		<input type="hidden" id="c_glass_c_mult" name="c_glass_c_mult" value="1"  />
		<input type="hidden" id="c_glass_d_mult" name="c_glass_d_mult" value="1"  />		
		<input type="hidden" id="ckall" name="ckall" value="" />
		<input type="hidden" id="msg" name="msg" value="" />
<input type="hidden" name="link" id="link">
		<input type="hidden" id="product_type" name="product_type" value="<?php echo $category_name; ?>"  />
  <td colspan="2" align="center"><input type="hidden" name="type" value="<?=$_REQUEST['type']?>" />
			<input type="hidden" name="glass_face" value="0" id="glass-face" disabled="disabled">
			 <input type="hidden" name="optionsid" id="optionsid" value="" disabled="disabled">
<div class="item" style="position:absolute;visibility:hidden;">       
           <div class="delete" style="visibility:hidden"></div>
        </div>
		<div class="item" style="position:absolute;visibility:hidden;"> 
           <div class="delete1" style="visibility:hidden">    </div>
		   <div class="delete2" style="visibility:hidden">    </div>
		   <div class="delete3" style="visibility:hidden">    </div>
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js"></script>
<script src="jquery.confirm/jquery.confirm.js"></script>
<script type="text/javascript">
		var ms_face='<?php echo $ms_face; ?>';
        var osc='<?php echo $_REQUEST['osCsid']; ?>';
		var im_id='<?php echo $im_id; ?>';
		var category_name='<?php echo $category_name?>';
</script>
<script src="includes/model_files/ORBIT720/ORBIT720.js"></script>
