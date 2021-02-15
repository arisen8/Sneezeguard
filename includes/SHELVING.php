<?php 
    require_once('Mobile_Detect.php');
    $detect = new Mobile_Detect();
?>
<script type="text/javascript">
<?php
        if(isset($HTTP_GET_VARS['id'])){
            $product="select count(*) as total from ".TABLE_PRODUCTS." as p, ".TABLE_PRODUCTS_DESCRIPTION." as pd, ".TABLE_PRODUCTS_TO_CATEGORIES." as pc where p.products_id=pd.products_id and pd.products_id=pc.products_id and pc.categories_id=".$HTTP_GET_VARS['id']." and pd.language_id=".(int)$languages_id;
            $product=tep_db_query($product);
            $products=tep_db_fetch_array($product);  
        }
    ?>
    arr_len=<?=$products['total']?>;
    <? if($category_name!='EP5'){ ?>
    arr_len=parseInt(arr_len)+7;
    <? } ?>
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
           <? } if($category_name=='EP12'||$category_name=='EP22'){ ?>
                product_name_price['EP11 Center Post Brushed Aluminum']=new Array("242", "86.0000");
                product_name_price['EP11 Center Post Powder Coated Black']=new Array("261", "101.0000");
                product_name_price['EP11 Center Post Brushed Stainless Steel']=new Array("263", "101.0000");
           <?} 
            while($products=tep_db_fetch_array($product)){?>
                    product_name_price['<?=$products['name']?>']=new Array("<?=$products['id']?>", "<?=$products['price']?>");
            <?}
        }
    ?>
</script>
<script type="text/javascript">
    function getPriceOfProduct(f){
        var type=f.type;
        var left_post;
        var left_price="0";
        var right_post;
        var right_price="0";
        var center_post;
        var center_price="0";
        var face_glass_a;
        var face_glass_a_price="0";
        var face_glass_b;
        var face_glass_b_price="0";
        var face_glass_c;
        var face_glass_c_price="0";
        var flange;
        var flange_price="0";
        var model_name="SLV";
        var finish;
        var total=0;
        var face_price=0;
        var flange_price_n=0.00;
        var no_of_selvs_a=1;
        var no_of_selvs_b=1;
        var no_of_selvs_c=1;
        var str="";
        var flange="Flange";
        var a=0;
        var b=0;
        var c=0;
        var h=0;
        var img='<img src="images/Shelving/1bay_arrows.jpg" style="width:100%">';
        img+='<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
        
        if(f.post_height.value!=0){
            
             img+='<div class="left_post">24"</div>';
             h=f.post_height.value;
             
            left_post=model_name+" LP "+f.post_height.value+" "+f.choose_finish.value;
            left_price=product_name_price[left_post][1];
            str+='<input type="hidden" name="products_id[]" value="'+product_name_price[left_post][0]+'" />';
            
            right_post=model_name+" RP "+f.post_height.value+" "+f.choose_finish.value;
            right_price=product_name_price[right_post][1];
            str+='<input type="hidden" name="products_id[]" value="'+product_name_price[right_post][0]+'" />';
            
            if(type.value=="2BAY"){
                center_post=model_name+" CP "+f.post_height.value+" "+f.choose_finish.value;
                center_price=product_name_price[center_post][1];
                }
                if(type.value=="3BAY"){
                center_post=model_name+" CP "+f.post_height.value+" "+f.choose_finish.value;
                center_price=2*product_name_price[center_post][1];
                }
            
            if(f.flange_covers.checked){
                flange+=" "+f.choose_finish.value
                flange_price_q=product_name_price[flange][1];
                flange_price=flange_price_q;
                if(type.value=="1BAY"){
                    flange_price_n=(4*parseFloat(flange_price_q));
                    for(i=1;i<=4;i++){
                      str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flange][0]+'" />';  
                    } 
                }
                else if(type.value=="2BAY"){
                    flange_price_n=(6*parseFloat(flange_price_q));
                     for(i=1;i<=6;i++){
                      str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flange][0]+'" />';  
                    } 
                }
                else if(type.value=="3BAY"){
                    flange_price_n=(8*parseFloat(flange_price_q));
                    for(i=1;i<=8;i++){
                      str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flange][0]+'" />';  
                    } 
                }
            }
            else{
                flange_price_n=0.00;
            }
            
            if(type.value=="1BAY"){
                
                face_glass_a=model_name+" GL "+f.face_length_a.value;
                face_glass_a_price=product_name_price[face_glass_a][1];
                a=f.face_length_a.value;
                h=f.post_height.value;
               // $("#additional_image").html(img);
               // $(".glass_a").html(f.face_length_a.value);
               // $(".total").html(parseInt(f.face_length_a.value)+2);
                
                var no_of_selvs_a=f.shelvs_a.value;
                
                for(i=1;i<=no_of_selvs_a;i++){
                      str+='<input type="hidden" name="products_id[]" value="'+product_name_price[face_glass_a][0]+'" />';  
                    } 
                
                total=(no_of_selvs_a*parseFloat(face_glass_a_price))+(no_of_selvs_b*parseFloat(face_glass_b_price))+(no_of_selvs_c*parseFloat(face_glass_c_price))+parseFloat(left_price)+parseFloat(right_price)+parseFloat(center_price)+parseFloat(center_price)+4*parseFloat(flange_price);
                
            }
            else if(type.value=="2BAY"){
                img='<img src="images/Shelving/2bay_arrows.jpg" style="width:100%">';
               img+='<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
                a=f.face_length_a.value;
                b=f.face_length_b.value;
                 img+='<div class="left_post">24"</div>';
                 h=f.post_height.value;
               // $("#additional_image").html(img);
               // $(".glass_a").html(f.face_length_a.value);
               // $(".glass_b").html(f.face_length_b.value);
               // $(".total").html(parseInt(f.face_length_a.value)+parseInt(f.face_length_b.value)+2);
                face_glass_a=model_name+" GL "+f.face_length_a.value;
                face_glass_a_price=product_name_price[face_glass_a][1];
                
                face_glass_b=model_name+" GL "+f.face_length_b.value;
                face_glass_b_price=product_name_price[face_glass_b][1];
                var no_of_selvs_a=f.shelvs_a.value;
                var no_of_selvs_b=f.shelvs_b.value;
                for(i=1;i<=no_of_selvs_a;i++){
                      str+='<input type="hidden" name="products_id[]" value="'+product_name_price[face_glass_a][0]+'" />';  
                    }
                    
                for(i=1;i<=no_of_selvs_b;i++){
                      str+='<input type="hidden" name="products_id[]" value="'+product_name_price[face_glass_b][0]+'" />';  
                    }
                str+='<input type="hidden" name="products_id[]" value="'+product_name_price[center_post][0]+'" />';  
                
                
                total=(no_of_selvs_a*parseFloat(face_glass_a_price))+(no_of_selvs_b*parseFloat(face_glass_b_price))+(no_of_selvs_c*parseFloat(face_glass_c_price))+parseFloat(left_price)+parseFloat(right_price)+parseFloat(center_price)+6*parseFloat(flange_price);
                
            }
            else if(type.value=="3BAY"){
                img='<img src="images/Shelving/3bay_arrows.jpg" style="width:100%">';
              img+='<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
              
                 img+='<div class="left_post">24"</div>';
                 h=f.post_height.value; 
                 
               a=f.face_length_a.value;
               b=f.face_length_b.value;
               c=f.face_length_c.value;
                face_glass_a=model_name+" GL "+f.face_length_a.value;
                face_glass_a_price=product_name_price[face_glass_a][1];
                
                face_glass_b=model_name+" GL "+f.face_length_b.value;
                face_glass_b_price=product_name_price[face_glass_b][1];
                
                face_glass_c=model_name+" GL "+f.face_length_c.value;
                face_glass_c_price=product_name_price[face_glass_c][1];
                
                var no_of_selvs_a=f.shelvs_a.value;
                var no_of_selvs_b=f.shelvs_b.value;
                var no_of_selvs_c=f.shelvs_c.value;
                 for(i=1;i<=no_of_selvs_a;i++){
                      str+='<input type="hidden" name="products_id[]" value="'+product_name_price[face_glass_a][0]+'" />';  
                    }
                    
                for(i=1;i<=no_of_selvs_b;i++){
                      str+='<input type="hidden" name="products_id[]" value="'+product_name_price[face_glass_b][0]+'" />';  
                    }
                
                for(i=1;i<=no_of_selvs_c;i++){
                      str+='<input type="hidden" name="products_id[]" value="'+product_name_price[face_glass_c][0]+'" />';  
                    }
                str+='<input type="hidden" name="products_id[]" value="'+product_name_price[center_post][0]+'" />'; 
                str+='<input type="hidden" name="products_id[]" value="'+product_name_price[center_post][0]+'" />'; 
                
                total=(no_of_selvs_a*parseFloat(face_glass_a_price))+(no_of_selvs_b*parseFloat(face_glass_b_price))+(no_of_selvs_c*parseFloat(face_glass_c_price))+parseFloat(left_price)+parseFloat(right_price)+parseFloat(center_price)+8*parseFloat(flange_price);
                
            }
            
        }
        
        face_price=(no_of_selvs_a*parseFloat(face_glass_a_price))+(no_of_selvs_b*parseFloat(face_glass_b_price))+(no_of_selvs_c*parseFloat(face_glass_c_price))
        
        $("#left-post").html(parseFloat(left_price)+".00");
        $("#right-post").html(parseFloat(right_price)+".00");
        $("#trasition-post").html(parseFloat(center_price)+".00");
        $("#flange-cover").html(flange_price_n+".00");
        $("#face-glass").html(face_price+".00");
        $("#total").html(total+".00");
        $("#products_ids").html(str);
         $("#additional_image").html(img);
                $(".left_post").html(h+'"');
                $(".glass_a").html(a+'"');
                $(".glass_b").html(b+'"');
                $(".glass_c").html(c+'"');
                $(".total").html((parseInt(a)+parseInt(b)+parseInt(c)+2)+'"');
    }
    
    function submit_form(f){
        if(f.post_height.value!=0){
           document.forms['cart_quantity'].submit();
        }
        else{
            alert("Please Select Post Height")
            return false;            
        }
    }
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js">
</script>

<style type="text/css">
#m1{ 
    background: url("images/login-bg.png") repeat scroll 0 0 transparent;
    border: 2px solid #FF0000;
    border-radius: 4px 4px 4px 4px;
    color: #C7F900 !important;
    font-size: 18px;
    font-weight: bold;
    height: 68px;
    padding: 5px;
    text-shadow: 2px 2px 3px #111111;
    width: 575px;
	color: red;
    font-size: 14px;
    font-weight: bold;
    
    z-index: 100;
}
#m2{ 
    background: url("images/login-bg.png") repeat scroll 0 0 transparent;
    border: 2px solid #FF0000;
    border-radius: 4px 4px 4px 4px;
    color: #C7F900 !important;
    font-size: 18px;
    font-weight: bold;
    height: 68px;
    padding: 5px;
    text-shadow: 2px 2px 3px #111111;
    width: 575px;
	color: red;
    font-size: 14px;
    font-weight: bold;
    
    z-index: 100;
}
#m3{ 
    background: url("images/login-bg.png") repeat scroll 0 0 transparent;
    border: 2px solid #FF0000;
    border-radius: 4px 4px 4px 4px;
    color: #C7F900 !important;
    font-size: 18px;
    font-weight: bold;
    height: 68px;
    padding: 5px;
    text-shadow: 2px 2px 3px #111111;
    width: 575px;
	color: red;
    font-size: 14px;
    font-weight: bold;
    
    z-index: 100;
}
#m4{ 
    background: url("images/login-bg.png") repeat scroll 0 0 transparent;
    border: 2px solid #FF0000;
    border-radius: 4px 4px 4px 4px;
    color: #C7F900 !important;
    font-size: 18px;
    font-weight: bold;
    height: 68px;
    padding: 5px;
    text-shadow: 2px 2px 3px #111111;
    width: 575px;
	color: red;
    font-size: 14px;
    font-weight: bold;
    
    z-index: 100;
}
#m5{ 
    background: url("images/login-bg.png") repeat scroll 0 0 transparent;
    border: 2px solid #FF0000;
    border-radius: 4px 4px 4px 4px;
    color: #C7F900 !important;
    font-size: 18px;
    font-weight: bold;
    height: 68px;
    padding: 5px;
    text-shadow: 2px 2px 3px #111111;
    width: 575px;
	color: red;
    font-size: 14px;
    font-weight: bold;
    
    z-index: 100;
}

#next1{
-moz-appearance: button;
background-color: green !important;
    box-shadow: none;
    font-weight: bold;
    font-size: 14px;
    font-family: tahoma;
    border-style:solid;
   border-width:1px;
   border-color: #ff0000;
   border-radius: 4px 4px 4px 4px;
    display: block;
    float: right;
    
padding: 2px 4px 2px 4px;
}
#next2 {
-moz-appearance: button;
background-color: green !important;
    box-shadow: none;
    font-weight: bold;
    font-size: 14px;
    font-family: tahoma;
    border-style:solid;
   border-width:1px;
   border-color: #ff0000;
   border-radius: 4px 4px 4px 4px;
    display: none;
    float: right;
    
padding: 2px 4px 2px 4px;
}
#next3 {
-moz-appearance: button;
background-color: green !important;
    box-shadow: none;
    font-weight: bold;
    font-size: 14px;
    font-family: tahoma;
    border-style:solid;
   border-width:1px;
   border-color: #ff0000;
   border-radius: 4px 4px 4px 4px;
    display: none;
    float: right;
    
padding: 2px 4px 2px 4px;
}
#next4 {
-moz-appearance: button;
background-color: green !important;
    box-shadow: none;
    font-weight: bold;
    font-size: 14px;
    font-family: tahoma;
    border-style:solid;
   border-width:1px;
   border-color: #ff0000;
   border-radius: 4px 4px 4px 4px;
    display: none;
    float: right;
    
padding: 2px 4px 2px 4px;
}
#kox1{
  background: url("images/login-bg.png") repeat scroll 0 0 transparent;
    border: 2px solid #FF0000;
    color: #C7F900 !important;
   z-index: 2;
   
    width: 206px; 
   
   }
   #kox2{
  background: url("images/login-bg.png") repeat scroll 0 0 transparent;
    border: 2px solid #FF0000;
    color: #C7F900 !important;
   z-index: 5;
    display: none;
    width: 206px; 
   }
   #kox3{
  background: url("images/login-bg.png") repeat scroll 0 0 transparent;
    border: 2px solid #FF0000;
    color: #C7F900 !important;
   
    display: none;
    width: 206px; 
   }
   #kox4{
   background: url("images/login-bg.png") repeat scroll 0 0 transparent;
    border: 2px solid #FF0000;
    color: #C7F900 !important;
   
    display: none;
    width: 206px; 
   }
   #kox5{
   
    border: 2px solid #FF0000;
    color: #C7F900 !important;
    
    display: none;
    width: 206px; 
   }
   #step1{
    width:42px;border:
    1px solid #FF0000; 
    background-color: 
    green !important;
    left: -55px; 
    padding: 5px;
    }
    #step2{
    width:42px;border:
    1px solid #FF0000; 
    background-color: 
    green !important;
    left: -55px; 
    padding: 5px;
    

</style>

<script>
$(document).ready(function(){
  $("#next1").click(function(){
    $("#step1").hide();
    $("#step2").show();
    $("#kox1").hide();
    $("#kox2").show();
    $("#m1").hide();
	$("#m2").show();
    $(this).hide();
	$("#next2").show();
	$("#next3").hide();
	$("#next4").hide();
	
  });
  $("#next2").click(function(){
    $("#step2").hide();
    $("#step3").show();
    $("#kox2").hide();
    $("#kox3").show();
    $("#m2").hide();
	$("#m3").show();
	$(this).hide();
	$("#next3").show();
	$("#next4").hide();
  });
  $("#next3").click(function(){
    $("#step3").hide();
    $("#step4").show();
    $("#kox3").hide();
    $("#kox4").show();
    $("#m3").hide();
	$("#m4").show();
	$(this).hide();
	$("#next4").show();
  });
  $("#next4").click(function(){
    $("#step4").hide();
    $("#kox4").hide();
    $("#kox5").show();
    $("#m4").hide();
	$("#m5").show();
	$(this).hide();
  });
  });
</script>
<table id="cart-form"> 
    <tr>
        <td>
            <div style="position: relative;">
            <table class="test-length_f" width="100%">
                <tr>
                    <td>
                    <div style="position: relative;z-index: 102!important;"><h1>Post Height</h1>
                        <select name="post_height" onchange="getPriceOfProduct(this.form)">
                            <option value="0">Length</option>
                        <?php for($i=24;$i<=90;$i+=1){
                            echo '<option value="'.$i.'">'.$i.'"</option>';
                        }?> 
                        </select>
                        </div>
                    </td>
                </tr>
                 <?php if($_REQUEST['type']=='1BAY') {?>
                   <tr>
                    <td>
                     <div style="position: relative;z-index: 102!important;">
                    <h1>Face Lenght</h1>
                        <select name="face_length_a" onchange="getPriceOfProduct(this.form)">
                            <?php for($i=24;$i<=66;$i+=6){
                            echo '<option value="'.$i.'">'.$i.'"</option>';
                        }?> 
                        </select>
                        </div>
                       
                    </td>
                </tr>
                <tr>
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
                <div id="m1" style="bottom: -433px; left: 246px; position: absolute; text-align: left;">Choose Your Desired Post Height</div>
                <div id="m2" style="bottom: -438px; left: 246px; position: absolute; text-align: left;display:none">Choose your glass size by clicking on the available in-stock lengths and Number of shalves Select next button to continue</div>
                <div id="m3" style="bottom: -438px; left: 246px; position: absolute; text-align: left;display:none">'Select whether you want flange covers if not leave blank, and click next button to continue</div>
                <div id="m4" style="bottom: -438px; left: 246px; position: absolute; text-align: left;display:none">Choose your desired finish Select next button to continue</div>
                <div id="m5" style="bottom: -438px; left: 246px; position: absolute; text-align: left;display:none">Review the displayed image to verify your choices Press add to cart to continue</div>
                <div id="next1" style="position: absolute;right: -45px; top: 0;z-index: 102;">Next</div>
                <div id="next2" style="position: absolute;right: -45px; top: 25px;z-index: 102;">Next</div>
                <div id="next3" style="position: absolute;right: -45px; top: 75px;z-index: 102;">Next</div>
                <div id="next4" style="position: absolute;right: -45px; top: 110px;z-index: 102;">Next</div>
                <div id="kox2" style="height: 48px;position: absolute;right: -3px;top: 24px;"></div>
                <div id="kox1" style="position: absolute; right: -3px; top: -6px;height: 28px;"></div>
                <div id="kox3" style="height: 32px; position: absolute;right: -3px;top: 72px;"></div>
                <div id="kox4" style="height: 46px; position: absolute; right: -3px;top: 108px;"></div>
                <div id="kox5" style=" height: 110px; position: absolute;right: -3px;top: 171px;"></div>
                <div id="step2" style="top: 25px; position: absolute;display: none;">Step-2</div>
               <?php  }
                if($_REQUEST['type']=='2BAY'){?>
                   <tr>
                    <td>
                     <div style="position: relative;z-index: 90!important;">
                    
                    <h1>Length A</h1>
                        <select name="face_length_a" onchange="getPriceOfProduct(this.form)">
                            <?php for($i=24;$i<=66;$i+=6){
                            echo '<option value="'.$i.'">'.$i.'"</option>';
                        }?> 
                        </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                     <div style="position: relative;z-index: 102!important;">
                    <h1>Shelves A</h1>
                        <select name="shelvs_a" onchange="getPriceOfProduct(this.form)">
                            <?php for($i=1;$i<=7;$i+=1){
                            echo '<option value="'.$i.'">'.$i.'</option>';
                        }?> 
                        </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                     <div style="position: relative;z-index: 102!important;">
                    <h1>Length B</h1>
                        <select name="face_length_b" onchange="getPriceOfProduct(this.form)">
                            <?php for($i=24;$i<=66;$i+=6){
                            echo '<option value="'.$i.'">'.$i.'"</option>';
                        }?> 
                        </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                     <div style="position: relative;z-index: 102!important;">
                    <h1>Shelves B</h1>
                        <select name="shelvs_b" onchange="getPriceOfProduct(this.form)">
                            <?php for($i=1;$i<=7;$i+=1){
                            echo '<option value="'.$i.'">'.$i.'</option>';
                        }?> 
                        </select>
                        </div>
                    </td>
                </tr>
                <div id="m1" style="bottom: -387px; left: 246px; position: absolute; text-align: left;">Choose Your Desired Post Height</div>
                <div id="m2" style="bottom: -390px; left: 246px; position: absolute; text-align: left;display:none">Choose your glass size by clicking on the available in-stock lengths and Number of shalves Select next button to continue</div>
                <div id="m3" style="bottom: -390px; left: 246px; position: absolute; text-align: left;display:none">Select whether you want flange covers if not leave blank, and click next button to continue</div>
                <div id="m4" style="bottom: -390px; left: 246px; position: absolute; text-align: left;display:none">Choose your desired finish Select next button to continue</div>
                <div id="m5" style="bottom: -390px; left: 246px; position: absolute; text-align: left;display:none">Review the displayed image to verify your choices Press add to cart to continue</div>
                <div id="next1" style="position: absolute;right: -45px; top: 0;z-index: 102;">Next</div>
                <div id="next2" style="position: absolute;right: -45px; top: 25px;z-index: 102;">Next</div>
                <div id="next3" style="position: absolute;right: -45px; top: 118px;z-index: 102;">Next</div>
                <div id="next4" style="position: absolute;right: -45px; top: 156px;z-index: 102;">Next</div>
                <div id="kox2" style="height: 95px;position: absolute;right: -3px;top: 24px;"></div>
                <div id="kox1" style="position: absolute; right: -3px; top: -6px;height: 28px;"></div>
                <div id="kox3" style="height: 32px; position: absolute;right: -3px;top: 120px;"></div>
                <div id="kox4" style="height: 46px; position: absolute; right: -3px;top: 155px;"></div>
                <div id="kox5" style=" height: 110px; position: absolute;right: -3px;top: 218px;"></div>
                <div id="step2" style="top: 25px; position: absolute;display: none;">Step-2</div>
                <?php }
                if($_REQUEST['type']=='3BAY'){ ?>
                    <tr>
                    <td>
                    <div style="position: relative;z-index: 102!important;">
                    <h1>Length A</h1>
                        <select name="face_length_a" onchange="getPriceOfProduct(this.form)">
                            <?php for($i=24;$i<=66;$i+=6){
                            echo '<option value="'.$i.'">'.$i.'"</option>';
                        }?> 
                        </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                    <div style="position: relative;z-index: 102!important;"><h1>Shelves A</h1>
                        <select name="shelvs_a" onchange="getPriceOfProduct(this.form)">
                            <?php for($i=1;$i<=7;$i+=1){
                            echo '<option value="'.$i.'">'.$i.'</option>';
                        }?> 
                        </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                    <div style="position: relative;z-index: 102!important;"><h1>Length B</h1>
                        <select name="face_length_b" onchange="getPriceOfProduct(this.form)">
                            <?php for($i=24;$i<=66;$i+=6){
                            echo '<option value="'.$i.'">'.$i.'"</option>';
                        }?> 
                        </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                    <div style="position: relative;z-index: 102!important;"><h1>Shelves B</h1>
                        <select name="shelvs_b" onchange="getPriceOfProduct(this.form)">
                            <?php for($i=1;$i<=7;$i+=1){
                            echo '<option value="'.$i.'">'.$i.'</option>';
                        }?> 
                        </select>
                        </div>
                    </td>
                </tr>
                 <tr>
                    <td>
                    <div style="position: relative;z-index: 102!important;"><h1>Length C</h1>
                        <select name="face_length_c" onchange="getPriceOfProduct(this.form)">
                            <?php for($i=24;$i<=66;$i+=6){
                            echo '<option value="'.$i.'">'.$i.'"</option>';
                        }?> 
                        </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                    <div style="position: relative;z-index: 102!important;"><h1>Shelves C</h1>
                        <select name="shelvs_c" onchange="getPriceOfProduct(this.form)">
                            <?php for($i=1;$i<=7;$i+=1){
                            echo '<option value="'.$i.'">'.$i.'</option>';
                        }?> 
                        </select>
                        </div>
                    </td>
                </tr>
                <div id="m1" style="bottom: -338px; left: 246px; position: absolute; text-align: left;">Choose Your Desired Post Height</div>
                <div id="m2" style="bottom: -342px; left: 246px; position: absolute; text-align: left;display:none">Choose your glass size by clicking on the available in-stock lengths and Number of shalves Select next button to continue</div>
                <div id="m3" style="bottom: -342px; left: 246px; position: absolute; text-align: left;display:none">Select whether you want flange covers if not leave blank, and click next button to continue</div>
                <div id="m4" style="bottom: -342px; left: 246px; position: absolute; text-align: left;display:none">Choose your desired finish Select next button to continue</div>
                <div id="m5" style="bottom: -342px; left: 246px; position: absolute; text-align: left;display:none">Review the displayed image to verify your choices Press add to cart to continue</div>
                <div id="next1" style="position: absolute;right: -45px; top: 0;z-index: 102;">Next</div>
                <div id="next2" style="position: absolute;right: -45px; top: 25px;z-index: 102;">Next</div>
                <div id="next3" style="position: absolute;right: -45px; top: 167px;z-index: 102;">Next</div>
                <div id="next4" style="position: absolute;right: -45px; top: 205px;z-index: 102;">Next</div>
                <div id="kox2" style="height: 142px;position: absolute;right: -3px;top: 24px;"></div>
                <div id="kox1" style="position: absolute; right: -3px; top: -6px;height: 28px;"></div>
                <div id="kox3" style="height: 32px; position: absolute;right: -3px;top: 169px;"></div>
                <div id="kox4" style="height: 46px; position: absolute; right: -3px;top: 205px;"></div>
                <div id="kox5" style=" height: 110px; position: absolute;right: -3px;top: 267px;"></div>
                <div id="step2" style="top: 25px; position: absolute;display: none;">Step-2</div>
               <?php  }?>
                </table>
                
                    <div id="step1" style="width:42px;border: 1px solid #FF0000; background-color: green !important; top: 0px; left: -55px; padding: 5px; position: absolute;">Step-1</div>
                
                    <!--div id="line1" style="width:42px;border: 1px solid #FF0000; background-color: green !important; top: 0px; left: -55px; padding: 5px; position: absolute;"></div-->
                    <!--div id="line1" style="background: none repeat scroll 0 0 #ff0000;height: 4px;position: absolute;right: -33px;top: 0;width: 33px;display:none;z-index: 102;"></div-->
                    <!--div class="cilck_button" id="cilck_button1" style="position: absolute;right: -44px;top: 0;z-index: 102;display:none;"></div-->
                </div>
                <div style="position: relative;">
                <table class="test-round" width="100%">
                <tr>
                    <td><h1>Extra Flange</h1>
                        <a style="width:20px;margin: 0 4px;float: right;" class="thickbox" href='flang.php?type=adj&KeepThis=true&TB_iframe=true&height=480&width=640' ><img src="images/flang.jpg" ></a>  
                        <input type="checkbox" name="flange_covers" value="0" style="margin:4px;" onclick="getPriceOfProduct(this.form);"/>                   
                    </td>
                </tr>
                </table>
                <div id="step3" style="width:42px;border: 1px solid #FF0000; background-color: green !important; top: 0px; left: -55px; padding: 5px; position: absolute;display:none;">Step-3</div>
                <!--div id="line2" style="width:42px;border: 1px solid #FF0000; background-color: green !important; top: 0px; left: -55px; padding: 5px; position: absolute;">Step-3</div>
                <div class="cilck_button" id="cilck_button2" style="position: absolute;right: -44px;top: 0;z-index: 102;display:none;"></div-->
                </div>
                <div style="position: relative;">
                <table class="test-flang" width="100%">
                   <tr>
                    <td><h1>Choose Finish</h1>
                        <select name="choose_finish" style="width:100%;margin:0" onchange="getPriceOfProduct(this.form)">
                            <option value="SL">Brushed Stainless Steel</option>
                            <option value="AL">Brushed Aluminum</option>
                        </select>
                    </td>
                </tr>
                </table>
                 <div id="step4" style="width:42px;border: 1px solid #FF0000; background-color: green !important; top: 0px; left: -55px; padding: 5px; position: absolute;display:none;">Step-4</div>
                <!--div id="line3" style="width:42px;border: 1px solid #FF0000; background-color: green !important; top: 0px; left: -55px; padding: 5px; position: absolute;"><?php if ($category_name == "B950 SWIVEL") {echo 'Step-5';} else {echo 'Step-4';} ?> </div>
                <div class="cilck_button" id="cilck_button3" style="position: absolute;right: -44px;top: 0;z-index: 102;display:none;"></div-->
            </div>
        </td>
    </tr>
</table>
<br />
<div class="test-Price">
    <table id="cart-form" class="price"> 
        <tr>
            <td align="left">Left Post:</td><td id="left-post" align="right">0.00</td>
        </tr>
        <tr>
            <td align="left">Right Post:</td><td id="right-post" align="right">0.00</td>
        </tr>
        <tr>
            <td align="left">Trasition Post:</td><td id="trasition-post" align="right">0.00</td>
        </tr>
        <tr>
            <td align="left">Flange:</td><td id="flange-cover" align="right">0.00</td>
        </tr>
        <tr>
            <td align="left">Face Glass:</td><td id="face-glass" align="right">0.00</td>
        </tr>
        <tr>
            <td colspan="2" style="padding:0px !important;background: #f4f4f4; height:1px"></td>       
        </tr>
        <tr>
            <td align="left">Total:</td><td id="total" align="right">0.00</td>
        </tr>
    </table>
</div>
<br />
<table id="cart-form">
    <tr>
        <td colspan="2" align="center"><input type="hidden" name="type" value="<?=$_REQUEST['type']?>" />
			<input type="hidden" name="glass_face" value="0" id="glass-face" disabled="disabled"/><div id="products_ids"></div>
            <input type="image" onclick="return submit_form(this.form);" button="" title=" Add to Cart " alt="Add to Cart" src="includes/languages/english/images/buttons/button_in_cart.gif" style="float: none;background: none !important;box-shadow: none;border: medium none;">
            <input type="hidden" name="optionsid" id="optionsid" value="" disabled="disabled"/>
        </td>
    </tr>
</table>