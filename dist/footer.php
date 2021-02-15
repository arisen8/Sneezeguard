<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  require(DIR_WS_INCLUDES . 'counter.php');
  
  
  
  	// Recover the code (en, fr, etc) of the current language
  	$lang_query = tep_db_query("select languages_id, code from " . TABLE_LANGUAGES . " where languages_id = '" . (int)$languages_id . "'");

	// Recover the code (fr, en, etc) and the id (1, 2, etc) of the current language
	if (tep_db_num_rows($lang_query)) {
	   $lang_a = tep_db_fetch_array($lang_query);
	   $lang_code = $lang_a['code'];
	}
  
  
?>
</td>

<style>
	/*For Image*/
/*#PS_load{
    position: fixed;
    display: block;
    height: 534px;
    width: 630px;
    z-index: 103;
    top: 9%;
    left: 24%;
    background: white;
    overflow: hidden;
}.print_img{
    width: 985px;
    margin-bottom: 10px;
    clip: rect(0px,820px,452px,160px);
    margin-left: -177px;
}#PS_load p{
    margin-top: 0px;
    margin-bottom: 10px;
    margin-left: 40%;
    color: red;
  }.close{
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    margin-top: 10px;
}*/
/*End for image*/
.PS_load{
    position: fixed;
    display: block;
    height: fit-content;
    width: 400px;
    z-index: 103;
    top: 44%;
    left: 35%;
    background: white;
    overflow: hidden;
}.print_img{
    width: 985px;
    margin-bottom: 10px;
    clip: rect(0px,820px,452px,160px);
    margin-left: -177px;
}.PS_load p{
    margin-bottom: 12px;
    color: red;
    text-align: center;
    font-weight: bold;
  }.close{
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    margin-top: 10px;
}.h1{
	text-align: center;
    font-size: larger;
    margin-top: 10px;
    margin-bottom: 10px;
    color: red;
}.TB_overlay{
	background-color: #000;
	    opacity: 0.75;
}
</style>
<script type="text/javascript" src="./dist/html2canvas.js"></script>
<script type="text/javascript" src="./dist/canvas2image.js"></script>
  <!-- SOCIAL MEDIA SHARE LINKS START -->
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

      <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

  <!-- SOCIAL MEDIA SHARE LINKS END -->
<script>
// Start Print screen popup

document.addEventListener("keyup", function (e) {
    var keyCode = e.keyCode ? e.keyCode : e.which;
            if (keyCode == 44) {
                stopPrntScr();
            }
        });
function stopPrntScr() {
        html2canvas(document.body, { type: 'view' }).then(function(canvas) {
 var img = canvas.toDataURL("image/png");
 
 var customer_id='<?php echo$customer_id  ?>';
 
// Canvas2Image.saveAsJPEG(canvas); 
  $.ajax({
    type: 'POST',
    url: 'print_screen_images/print_scrn_img.php',
    data: {
      image: img,customer_id: customer_id
    },success:function(a){
      
    }
  });
    $("body").append("<div class='PS_load'><div class='close' onclick='PS_closeWindowButton()'><img src='img/close.png' title='Sneeze Guard' alt='Sneeze Guard'></div><p>IP-<?php echo $_SERVER['REMOTE_ADDR']?></p><h1 class='h1'>Thank You</h1></div>");//add loader to the page
    // <img class='print_img' src='"+img+"' '>
    $("body").append("<div id='TB_overlay' class='TB_overlay'></div>");
    // $('#TB_load').show();
    // $("#TB_overlay").addClass("TB_overlayBG");
});  
}
function PS_closeWindowButton(){
  $('.PS_load').hide();
  $('.TB_overlay').hide();
}


// End Print screen popup

</script>
<script>

//remove comment for restriction of back button
/* f
history.pushState(null, null, window.location);
window.addEventListener('popstate', function () {
    alert("Our website prevents the back button action from working to keep integrity of shopping carts, please use the tabs at the top of page to navigate.");
    history.pushState(null, null, window.location);
});
*/

</script> 


<?php

if (!$detect->isMobile())
{

 
    $folderName=$category_name;
      switch ($category_name){
           case 'B950':{
               $folderName="B950";
               break;
           }
           case 'B950 SWIVEL':{
                $folderName="B950-Swivel";
                break;
            }
      }
      
    if(isset($_REQUEST['cPath'])){
        $cpath_list=explode("_", $_REQUEST['cPath']);
        $sql="select count(*) as total from ".TABLE_CATEGORIES." where parent_id=".$cpath_list[0];
        $count=mysql_query($sql) or die("Error in count category warsi ".mysql_error());
        $count=mysql_fetch_array($count);
        $count=$count['total']; 
        
        if($count>3){
        if(count($cpath_list)>=1){
            echo '<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td valign="top" align="left">
            
                    <div id="selected-item">'; ?>
                    
                     <ul class="head-table" id="message_wrt" style="height:0px;display:none;">
       <li id="item-text" style="margin:0;padding:0;"><div class="message_p"><div  class="message_wrt1" id="message_wrt1" ></div><div  class="message_wrt2" id="message_wrt2" ></div><div  class="message_wrt3" id="message_wrt3" ></div></div>
               </ul>
                    <ul class="head-table" style="min-height: 456px;" id="product_image">
                        <?php
                            if($category_image==''){
                            //DIE('No Images');
                                /*$sql="select c.categories_image as ci, cd.categories_name as cdn from ".TABLE_CATEGORIES." as c, ".TABLE_CATEGORIES_DESCRIPTION." as cd where c.parent_id=".$cpath_list[0]." and c.categories_id=cd.categories_id";
                                $result=mysql_query($sql) or die(" Error in Search Images Warsi ".mysql_error());
                                $rows=mysql_num_rows($result);
                                while($row=mysql_fetch_array($result)){*/
                                    echo '<li id="additional_image" style="overflow:hidden;height:450px;border-style:solid;border-width:2px;border-color:white;"><img src="img/index_page.jpg" style="width:100%" title="Sneeze Guard" alt="Sneeze Guard"/><br style="clear:both;"/></li>';
                                    // echo '<li id="additional_image"><img src="images/top_images/2.jpg"><br style="clear:both;"/></li>';
                                    // echo '<li id="additional_image"><img src="images/top_images/3.jpg"><br style="clear:both;"/></li>';
                                    // echo '<li id="additional_image"><img src="images/top_images/4.jpg"><br style="clear:both;"/></li>';
                                    // echo '<li id="additional_image"><img src="images/top_images/5.jpg"><br style="clear:both;"/></li>';
                                    // echo '<li id="additional_image"><img src="images/top_images/6.jpg"><br style="clear:both;"/></li>';
                                    // echo '<li id="additional_image"><img src="images/top_images/7.jpg"><br style="clear:both;"/></li>';
                                    // echo '<li id="additional_image"><img src="images/top_images/8.jpg"><br style="clear:both;"/></li>';
                                    // echo '<li id="additional_image"><img src="images/top_images/9.jpg"><br style="clear:both;"/></li>';
                                    
                                /*}*/
                            }
                            else{
                                echo '<li id="additional_image"><img src="images/'.$folderName.'/'.$category_image.'" style="width:100%"/><br style="clear:both;"/></li>';
                            }
                        ?>
                        <br style="clear:both;"/>
                    </ul>
                   
        <?php echo '</div>
                </td>';
        }
       }
       
    }
    else if(isset($_REQUEST['type'])){
        if($category_name=="B950"){
            $fm="B-950";
        }else if($category_name=="B950 SWIVEL"){
            $fm="B-950-SWIVEL";
        }ELSE{
            $fm=$category_name;
        }
       include(DIR_WS_MODULES."forms/".FILENAME_PRODUCT_CSS);
        echo '<td valign="top" align="left">
		
		
				
		
                <div id="selected-item">
                
				';
					if($category_name=="ES53"){
					echo'<div style="height:auto;display:none;" id="round_layout">
					<h2 class="heading_all"><u>Choose Layouts</u></h2>
					<table>
					';
					
					
					if($_REQUEST['type']=='4BAY')
					{
					echo'<tr>
					<td>
					<label>
				   <input type="radio" name="corner_post" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE1ST" checked>
				   <img src="images/ES53/4BAY/JSHAPE1ST.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE2ND">
				   <img src="images/ES53/4BAY/JSHAPE2ND.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE3RD">
				   <img src="images/ES53/4BAY/JSHAPE3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE4TH">
				   <img src="images/ES53/4BAY/JSHAPE4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					
					</tr>
					
					<tr>
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE1ST2ND">
				   <img src="images/ES53/4BAY/JSHAPE1ST2ND.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE1ST3RD">
				   <img src="images/ES53/4BAY/JSHAPE1ST3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE1ST4TH">
				   <img src="images/ES53/4BAY/JSHAPE1ST4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE2ND3RD">
				   <img src="images/ES53/4BAY/JSHAPE2ND3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					
					</tr>
					
					<tr>
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE2ND4TH">
				   <img src="images/ES53/4BAY/JSHAPE2ND4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE3RD4TH">
				   <img src="images/ES53/4BAY/JSHAPE3RD4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
				
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE1ST2ND3RD">
				   <img src="images/ES53/4BAY/JSHAPE1ST2ND3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE1ST2ND4TH">
				   <img src="images/ES53/4BAY/JSHAPE1ST2ND4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					
					
					</tr>
					
					<tr>
					
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE1ST3RD4TH">
				   <img src="images/ES53/4BAY/JSHAPE1ST3RD4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE2ND3RD4TH">
				   <img src="images/ES53/4BAY/JSHAPE2ND3RD4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE1ST2ND3RD4TH">
				   <img src="images/ES53/4BAY/JSHAPE1ST2ND3RD4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" onclick="hide_layout(this.form);" onchange="getPriceOfProduct(this.form)" value="LSHAPE1ST">
				   <img src="images/ES53/4BAY/LSHAPE1ST.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					</tr>
					
					
					
					
					<tr>
					
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE2ND">
				   <img src="images/ES53/4BAY/LSHAPE2ND.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE3RD">
				   <img src="images/ES53/4BAY/LSHAPE3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE4TH">
				   <img src="images/ES53/4BAY/LSHAPE4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE1ST2ND">
				   <img src="images/ES53/4BAY/LSHAPE1ST2ND.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					</tr>
					
					<tr>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE1ST3RD">
				   <img src="images/ES53/4BAY/LSHAPE1ST3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE1ST4TH">
				   <img src="images/ES53/4BAY/LSHAPE1ST4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE2ND3RD">
				   <img src="images/ES53/4BAY/LSHAPE2ND3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE2ND4TH">
				   <img src="images/ES53/4BAY/LSHAPE2ND4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					</tr>
					
					<tr>
					
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE3RD4TH">
				   <img src="images/ES53/4BAY/LSHAPE3RD4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
				
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE1ST2ND3RD">
				   <img src="images/ES53/4BAY/LSHAPE1ST2ND3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE1ST2ND4TH">
				   <img src="images/ES53/4BAY/LSHAPE1ST2ND4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE1ST3RD4TH">
				   <img src="images/ES53/4BAY/LSHAPE1ST3RD4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					</tr>
					
					<tr>
					
					
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE2ND3RD4TH">
				   <img src="images/ES53/4BAY/LSHAPE2ND3RD4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE1ST2ND3RD4TH">
				   <img src="images/ES53/4BAY/LSHAPE1ST2ND3RD4TH.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					</tr>';
					
					}
					
					if($_REQUEST['type']=='3BAY')
					{
					echo'
					
					<tr>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" onclick="hide_layout(this.form);" onchange="getPriceOfProduct(this.form)" value="JSHAPE1ST" checked>
				   <img src="images/ES53/3BAY/JSHAPE1ST.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE2ND">
				   <img src="images/ES53/3BAY/JSHAPE2ND.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE3RD">
				   <img src="images/ES53/3BAY/JSHAPE3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE1ST2ND">
				   <img src="images/ES53/3BAY/JSHAPE1ST2ND.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					</tr>
					
					<tr>
					
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE1ST3RD">
				   <img src="images/ES53/3BAY/JSHAPE1ST3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE2ND3RD">
				   <img src="images/ES53/3BAY/JSHAPE2ND3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE1ST2ND3RD">
				   <img src="images/ES53/3BAY/JSHAPE1ST2ND3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
				
				
					<td>
					<label>
				   <input type="radio" name="corner_post" onclick="hide_layout(this.form);" onchange="getPriceOfProduct(this.form)" value="LSHAPE1ST">
				   <img src="images/ES53/3BAY/LSHAPE1ST.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					</tr>
					
					
					
					<tr>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" onchange="getPriceOfProduct(this.form);" value="LSHAPE2ND">
				   <img src="images/ES53/3BAY/LSHAPE2ND.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE3RD">
				   <img src="images/ES53/3BAY/LSHAPE3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE1ST2ND">
				   <img src="images/ES53/3BAY/LSHAPE1ST2ND.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE1ST3RD">
				   <img src="images/ES53/3BAY/LSHAPE1ST3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					</tr>
					
					<tr>
					
					
					
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE2ND3RD">
				   <img src="images/ES53/3BAY/LSHAPE2ND3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE1ST2ND3RD">
				   <img src="images/ES53/3BAY/LSHAPE1ST2ND3RD.jpg" style="width:95%;" id="postimg1"></label>
					</td>
				
				
					</tr>
					
					';
					
					}
					
					
					
					if($_REQUEST['type']=='2BAY')
					{
					echo'
					
					<tr>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" onclick="hide_layout(this.form);" onchange="getPriceOfProduct(this.form)" value="JSHAPE1ST" checked>
				   <img src="images/ES53/2BAY/JSHAPE1ST.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE2ND">
				   <img src="images/ES53/2BAY/JSHAPE2ND.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="JSHAPE1ST2ND">
				   <img src="images/ES53/2BAY/JSHAPE1ST2ND.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" onclick="hide_layout(this.form);" onchange="getPriceOfProduct(this.form)" value="LSHAPE1ST">
				   <img src="images/ES53/2BAY/LSHAPE1ST.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					</tr>
					
					<tr>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE2ND">
				   <img src="images/ES53/2BAY/LSHAPE2ND.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					
					
					<td>
					<label>
				   <input type="radio" name="corner_post" id="1stcenter" onclick="hide_layout();" onchange="getPriceOfProduct(this.form);" value="LSHAPE1ST2ND">
				   <img src="images/ES53/2BAY/LSHAPE1ST2ND.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					</tr>';
					
					}
					
					
					if($_REQUEST['type']=='1BAY')
					{
					echo'
					
					<tr>
					
					<td>
					<label>
				   <input type="radio" name="corner_post" onclick="hide_layout(this.form);" onchange="getPriceOfProduct(this.form)" value="JSHAPE1ST" checked>
				   <img src="images/ES53/1BAY/JSHAPE1ST.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					
					<td>
					<label>
				   <input type="radio" name="corner_post" onclick="hide_layout(this.form);" onchange="getPriceOfProduct(this.form)" value="LSHAPE1ST" >
				   <img src="images/ES53/1BAY/LSHAPE1ST.jpg" style="width:95%;" id="postimg1"></label>
					</td>
					
					</tr>
					';
					
					}
					
					
					
					echo'</table>
					
					
					
					</div>';
					
					}
					
					
					
                  echo'
				
				
				

                    <ul class="head-table">
                        <li id="additional_image">';
                            if(is_file('images/'.$folderName.'/'.$_REQUEST['type'].'.jpg')){
                               ///old
							   //echo '<img src="images/'.$folderName.'/'.$_REQUEST['type'].'s.jpg" style="width:568px;height:453px;">';
                                //new
								echo '';
                                echo '<div class="glass">A</div><div class="glass_a">A</div><div class="glass_b">B</div><div class="glass_c">C</div><div class="glass_d">D</div><div class="total">Total"</div><div class="post">Height</div>';
                            }else{
                                if($folderName!='B-950-SWIVEL'){
                                    //
									//echo '<img src="images/'.$folderName.$_REQUEST['type'].'/START.jpg" style="width:100%">';
                                    //
									echo '';
                                }
                                else{
                                    //old
									//echo '<img src="images/'.$folderName.'/START.jpg" style="width:100%">';   
                                    //new
									echo '<img src="images/'.$folderName.'/START.jpg" style="width:100%">';   
                                }
                            }
						///sdadfdfffff
                        echo '</li>
                        <br style="clear:both;"/>
                    </ul>
					<ul class="head-table" style="border-top:1px solid #888;height:170px;">
                        <li id="item-text" style="margin:0;padding:0;">
                            <table style="font-family: tahoma,verdana,arial;font-size:12px;text-align: center;width:580px;" align="center">
                                <tbody>
                                    <tr>
                                        <td>
                                            <a onclick="open_signup_form_quote();" style="height:55px;width:55px;cursor:pointer;" >
                                                <img src="img/saveQuote_button.jpg" style="height:55px;width:55px;" >
                                            </a>
                                        </td>
                                        <td>
                                            <a style="height:55px;width:55px;cursor:pointer;" onclick="open_signup_form_layout();" >
                                                <img src="img/saveLayout_button.jpg" style="height:55px;width:55px;" >
                                            </a>
                                        </td>
                                        <td>
                                            <a class="thickbox" href="images/'.$fm.'/POSTDIM.jpg" style="height:55px;width:55px;" >
                                                <img src="images/'.$fm.'/POSTDIM.jpg" style="height:55px;width:55px;" >
                                            </a>
                                        </td>
                                        <td>';
										
										if(($fm=='ES90' || $fm=='ES92'|| $fm=='ES47')&&($_REQUEST['type']=='2BAYEXT'))
										{
										echo' <a href="PDF/'.$fm.'_EXT.pdf" style="height:55px;width:55px;" target="_blank" >
                                                <img src="images/pdf-icon.gif" style="height:55px;width:55px;">
                                            </a>';	
										}
										else{
										echo' <a href="PDF/'.$fm.'.pdf" style="height:55px;width:55px;" target="_blank" >
                                                <img src="images/pdf-icon.gif" style="height:55px;width:55px;">
                                            </a>';	
											
										}
											
                                           
											
											
                                        echo'</td>
                                        <td>
                                            <a href="javascript:void(0)" onclick="wishlist()" style="height:55px;width:55px;" >
                                                <img src="images/wishlist_icon.png" title="Save for later" style="height:55px;width:55px;">
                                            </a>
                                        </td>
                                        <td  style="display:none;">
                                            <!--<a class="thickbox" href="images/'.$category_name.'/mydrw.jpg" style="height:55px;width:55px;" >
                                                <img src="images/'.$category_name.'/mydr.png" style="height:55px;width:55px;" >
                                            </a>-->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Save quote</b></td>
                                        <td><b>Save layout</b></td>
                                        <td><b>Post Dimensions</b></td>
                                        <td><b>PDF Spec Sheet</b></td>
                                        <td><b>Save for later</b></td>
                                        <td style="display:none;">
                                            <b>My Shop Drawing</b>
                                        </td>
                                    </tr>
                                   
                                </tbody>
                            </table>
							<table style="font-family: tahoma,verdana,arial;font-size:12px;text-align: center;width:580px;" align="center">
                                <tbody>
								 <tr style="height:70px;">
										
                                        <td colspan=4>
                                            <a class="thickbox" href="img/'.$fm.'.jpg" style="height:55px;width:55px;">
                                                <img src="img/needHelpButton.png">
                                            </a>
                                        </td>';
										//ss
										$bay=$_REQUEST['type'];
										$cate_id=$_REQUEST['id'];
										
										
										 $mobile = new Mobile_Detect;
										   $tablet = 'Tablet';
										   $mobile = 'Mobile';
										HEADING_IPRECORDED_1;
										$ip_iprecorded = YOUR_IP_IPRECORDED;
										$isp_iprecorded = YOUR_ISP_IPRECORDED;
										$ip = $HTTP_SERVER_VARS["REMOTE_ADDR"];
										$client = gethostbyaddr($HTTP_SERVER_VARS["REMOTE_ADDR"]).' Device : ' .($mobile->isMobile ? $mobile : 'MOBILE');
										$str = preg_split("/\./", $client);
										$i = count($str);
										$x = $i - 1;
										$n = $i - 2;
										 $isp = $str[$n] . "." . $str[$x] ;
										$ip_address=$_SERVER['REMOTE_ADDR'];
										
										//echo'<b style="color:red;">IP is '.$customer_id.' and device-</b>';
										
										//if($cate_id=="79")
										//{
										//}
										//else{
											//
											//images/'.$category_name.'/'.$category_name.'_'.$bay.'_revit.rvt
										echo'<td><a onclick="open_signup_form_rivet()"  id="revit" style="height:55px;width:55px;"  >
                                                <img src="images/'.$category_name.'/Rivit.jpg" style="width:84px;">
                                            </a>
											
                                       
											
										</td>';
										//}
                                    echo'</tr>
									
							</tbody>
                            </table>
                        </li>
                   </ul>
                </div>
				
				
				
				
            </td>';
    }
    else if(isset($_REQUEST['Model']) && isset($_REQUEST['id']) ){
         include(DIR_WS_MODULES."forms/".FILENAME_PRODUCT_CSS);
            echo '<td valign="top" align="left">
                <div id="selected-item">
				
				
				
				
				
                
                    <ul class="head-table">
                        <li id="additional_image" style="position:relative">';
                        if($_REQUEST['Model']=="EP-950-ACRYLIC"){
                            echo '<div class="msg_red" style="position:absolute;top:222px;left:20px;"><i>Fully Adjustable<br><br>Multi Functional<br><br>Indoor and Outdoor Use<br><br>Easy Disassembly for Storage,<br><br>Ready for Shipping</i></div>';
                        }
                        if($_REQUEST['Model']=="B-950P-GLASS"){
                            echo '<div class="msg_red" style="position:absolute;top:300px;left:20px;"><i>Fully Adjustable<br>Multi Functional<br>Indoor and Outdoor Use<br>Easy Disassembly for Storage,<br>Ready for Shipping</i></div>';
                        }
                        if($_REQUEST['Model']=="ALLIN1"){
                            echo '<img src="images/'.$_REQUEST['Model'].'/STARTMAIN.jpg" style="width:100%"/>
                        </li>
                        <br style="clear:both;"/>
                    </ul>
                    <ul class="head-table" style="border-top:1px solid #888;height:170px;">
                      <li id="item-text" style="margin:0;padding:0;">
                        <table style="font-family: tahoma,verdana,arial;font-size:12px;text-align: center;width:580px;" align="center">
                            <tbody>
                                <tr>
                                    <td>
                                            <a onclick="open_signup_form_quote();" style="height:55px;width:55px;cursor:pointer;" >
                                                <img src="img/saveQuote_button.jpg" style="height:55px;width:55px;" >
                                            </a>
                                        </td>
                                        <td>
                                            <a style="height:55px;width:55px;cursor:pointer;" onclick="open_signup_form_layout();" >
                                                <img src="img/saveLayout_button.jpg" style="height:55px;width:55px;" >
                                            </a>
                                        </td>
                                    <td>
                                        <a class="thickbox" href="images/'.$_REQUEST['Model'].'/POSTDIM.jpg" style="height:55px;width:55px;" >
                                            <img src="images/'.$_REQUEST['Model'].'/POSTDIM.jpg" style="height:55px;width:55px;" >
                                        </a>
                                    </td>
                                    <td>
                                        <a href="PDF/'.$category_name.'.pdf" target="_blank" style="height:55px;width:55px;" >
                                            <img src="images/pdf-icon.gif" style="height:55px;width:55px;">
                                        </a>
                                    </td>
                                    <td>
                                            <a href="javascript:void(0)" onclick="wishlist()" style="height:55px;width:55px;" >
                                                <img src="images/wishlist_icon.png" style="height:55px;width:55px;">
                                            </a>
                                        </td>
                                    <td style="display:none;">
                                        <!--<a class="thickbox" href="images/'.$category_name.'/mydrw.jpg" style="height:55px;width:55px;" >
                                            <img src="images/'.$category_name.'/mydr.png" style="height:55px;width:55px;" >
                                        </a>-->
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Save quote</b></td>
                                    <td><b>Save layout</b></td>
                                    <td><b>Post Dimensions</b></td>
                                    <td><b>PDF Spec Sheet</b></td>
                                    <td><b>Save for leter</b></td>
                                    <td style="display:none;"><b>My Shop Drawing</b></td>
                                </tr>
                                
                            </tbody>
                        </table>
						<table style="font-family: tahoma,verdana,arial;font-size:12px;text-align: center;width:580px;" align="center">
                                <tbody>
								<tr style="height:85px;">
								
                                    <td colspan=5>
                                        <a class="thickbox" href="img/'.$category_name.'.jpg" style="height:55px;width:55px;">
                                            <img src="img/needHelpButton.png">
                                        </a>
                                    </td>';
										//ss
										$bay=$_REQUEST['type'];
										$cate_id=$_REQUEST['id'];
										$ip_address=$_SERVER['REMOTE_ADDR'];
										//echo'<b style="color:red;">IP is '.$ip_address.'</b>';
										//if($cate_id=="79")
										//{
										//}
										//else{
										echo'<td><a onclick="open_signup_form_rivet()" href="images/'.$category_name.'/'.$category_name.'_'.$bay.'_revit.rvt" style="height:55px;width:55px;">
                                                <img src="images/'.$category_name.'/Rivit.jpg" style="width:84px;">
                                            </a>
										</td>';
										//}
                                    echo'</tr>
									
							</tbody>
                            </table>
                        </li></tbody></table></li>
                   </ul>
                </div>
            </td>';
                        } else{

                    echo '<img src="images/'.$_REQUEST['Model'].'/START.jpg" style="width:100%"/>
                        </li>
                        <br style="clear:both;"/>
                    </ul>
                    <ul class="head-table" style="border-top:1px solid #888;height:170px;">
                        <li id="item-text" style="margin:0;padding:0;">
                            <table style="font-family: tahoma,verdana,arial;font-size:12px;text-align: center;width:580px;" align="center">
                                <tbody>
                                    <tr>
                                        <td>
                                            <a onclick="open_signup_form_quote();" style="height:55px;width:55px;cursor:pointer;" >
                                                <img src="img/saveQuote_button.jpg" style="height:55px;width:55px;" >
                                            </a>
                                        </td>
                                        <td>
                                            <a style="height:55px;width:55px;cursor:pointer;" onclick="open_signup_form_layout();" >
                                                <img src="img/saveLayout_button.jpg" style="height:55px;width:55px;" >
                                            </a>
                                        </td>
                                        <td>
                                            <a class="thickbox" href="images/'.$_REQUEST['Model'].'/POSTDIM.jpg" style="height:55px;width:55px;" >
                                                <img src="images/'.$_REQUEST['Model'].'/POSTDIM.jpg" style="height:55px;width:55px;" >
                                            </a>
                                        </td>
                                        <td>
                                            <a href="PDF/'.$category_name.'.pdf" target="_blank" style="height:55px;width:55px;" >
                                                <img src="images/pdf-icon.gif" style="height:55px;width:55px;">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" onclick="wishlist()" style="height:55px;width:55px;" >
                                                <img src="images/wishlist_icon.png" style="height:55px;width:55px;">
                                            </a>
                                        </td>
                                        <td style="display:none;">
                                            <!--<a class="thickbox" href="images/'.$category_name.'/mydrw.jpg" style="height:55px;width:55px;" >
                                                <img src="images/'.$category_name.'/mydr.png" style="height:55px;width:55px;" >
                                            </a>-->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Save quote</b></td>
                                        <td><b>Save layout</b></td>
                                        <td><b>Post Dimensions</b></td>
                                        <td><b>PDF Spec Sheet</b></td>
                                        <td><b>Save for leter</b></td>
                                        <td style="display:none;"><b>My Shop Drawing</b></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
							<table style="font-family: tahoma,verdana,arial;font-size:12px;text-align: center;width:580px;" align="center">
                                <tbody>
								<tr style="height:85px;">
								
                                        <td colspan="4">
                                            <a class="thickbox" href="img/'.$category_name.'.jpg" style="height:55px;width:55px;">
                                                <img src="img/needHelpButton.png">
                                            </a>
                                        </td>';
										//ss
										$bay=$_REQUEST['type'];
										$cate_id=$_REQUEST['id'];
										//if($cate_id=="79")
										//{
										//}
										//else{
										echo'<td><a onclick="open_signup_form_rivet()" href="images/'.$category_name.'/'.$category_name.'_'.$bay.'_revit.rvt" style="height:55px;width:55px;">
                                                <img src="images/'.$category_name.'/Rivit.jpg" style="width:84px;">
                                            </a>
										</td>';
										//}
                                    echo'</tr>
									
							</tbody>
                            </table>
                        </li>
                    </tbody>
                    </table></li>
                   </ul>
                </div>
            </td>';
        } }
    if(isset($_REQUEST['Model']) && isset($_REQUEST['cPath'])&&!isset($_REQUEST['var'])){
             include(DIR_WS_MODULES."forms/".FILENAME_PRODUCT_CSS);
             //if($_REQUEST['Model']==EP11){

             //}else{
               // echo '<td valign="top" align="left">
                 //   <div id="selected-item">
                   //     <ul class="head-table" style="border-top:1px solid #888;height:80px;">
                     //       <li><h1 id="textarea56" style="padding-left: 0;"> '.$_REQUEST['Model'].'<br>126" and larger, please call so we may better assist you (1-800-690-0002)</h1></li>
                       // </ul>
                        //<ul class="head-table">
                          //  <li id="additional_image">
                            //    <img src="images/'.$_REQUEST['Model'].'/START.jpg" style="width:100%;width:568px;height:453px"/>
                            //</li>
                            //<br style="clear:both;"/>
                        //</ul>
                    //</div>
                //</td>';
             //}
            
        }
		
}
else{
$folderName=$category_name;
      switch ($category_name){
           case 'B950':{
               $folderName="B950";
               break;
           }
           case 'B950 SWIVEL':{
                $folderName="B950-Swivel";
                break;
            }
      }
      
    
   
   
    if(isset($_REQUEST['type'])){
        if($category_name=="B950"){
            $fm="B-950";
        }else if($category_name=="B950 SWIVEL"){
            $fm="B-950-SWIVEL";
        }ELSE{
            $fm=$category_name;
        }
       include(DIR_WS_MODULES."forms/".FILENAME_PRODUCT_CSS);
	  echo'						
                            <table style="font-family: tahoma,verdana,arial;font-size:12px;text-align: center;width:848px;" align="center">
                                <tbody>
                                    <tr>
                                        <td>
                                            <a onclick="open_signup_form_quote();" style="height:55px;width:55px;cursor:pointer;" >
                                                <img src="img/saveQuote_button.jpg" style="height:55px;width:55px;" >
                                            </a>
                                        </td>
                                        <td>
                                            <a style="height:55px;width:55px;cursor:pointer;" onclick="open_signup_form_layout();" >
                                                <img src="img/saveLayout_button.jpg" style="height:55px;width:55px;" >
                                            </a>
                                        </td>
                                        <td>
                                            <a class="thickbox" href="images/'.$fm.'/POSTDIM.jpg" style="height:55px;width:55px;" >
                                                <img src="images/'.$fm.'/POSTDIM.jpg" style="height:55px;width:55px;" >
                                            </a>
                                        </td>
                                        <td>';
										
										if(($fm=='ES90' || $fm=='ES92'|| $fm=='ES47')&&($_REQUEST['type']=='2BAYEXT'))
										{
										echo' <a href="PDF/'.$fm.'_EXT.pdf" style="height:55px;width:55px;" target="_blank" >
                                                <img src="images/pdf-icon.gif" style="height:55px;width:55px;">
                                            </a>';	
										}
										else{
											echo' <a href="PDF/'.$fm.'.pdf" style="height:55px;width:55px;" target="_blank" >
                                                <img src="images/pdf-icon.gif" style="height:55px;width:55px;">
                                            </a>';
											
										}
                                           
											
											
											
                                       echo' </td>
                                        <td>
                                            <a href="javascript:void(0)" onclick="wishlist()" style="height:55px;width:55px;" >
                                                <img src="images/wishlist_icon.png" title="Save for later" style="height:55px;width:55px;">
                                            </a>
                                        </td>
                                        <td  style="display:none;">
                                            <!--<a class="thickbox" href="images/'.$category_name.'/mydrw.jpg" style="height:55px;width:55px;" >
                                                <img src="images/'.$category_name.'/mydr.png" style="height:55px;width:55px;" >
                                            </a>-->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Save quote</b></td>
                                        <td><b>Save layout</b></td>
                                        <td><b>Post Dimensions</b></td>
                                        <td><b>PDF Spec Sheet</b></td>
                                        <td><b>Save for later</b></td>
                                        <td style="display:none;">
                                            <b>My Shop Drawing</b>
                                        </td>
                                    </tr>
                                   
                                </tbody>
                            </table>
							<table style="font-family: tahoma,verdana,arial;font-size:12px;text-align: center;width:849px;" align="center">
                                <tbody>
								 <tr style="height:70px;">
										
                                        <td colspan=4>
                                            <a class="thickbox" href="img/'.$fm.'.jpg" style="height:55px;width:55px;">
                                                <img src="img/needHelpButton.png">
                                            </a>
                                        </td>';
										//ss
										$bay=$_REQUEST['type'];
										$cate_id=$_REQUEST['id'];
										//if($cate_id=="79")
										//{
										//}
										//else{
										echo'<td><a onclick="open_signup_form_rivet()" href="images/'.$category_name.'/'.$category_name.'_'.$bay.'_revit.rvt" style="height:55px;width:55px;">
                                                <img src="images/'.$category_name.'/Rivit.jpg" style="width:84px;">
                                            </a>
										</td>';
										//}
                                    echo'</tr>
									
							</tbody>
                            </table>
                        ';
	   
	}
    else if(isset($_REQUEST['Model']) && isset($_REQUEST['id']) ){
         include(DIR_WS_MODULES."forms/".FILENAME_PRODUCT_CSS);
            echo '<td valign="top" align="left">
                <div id="selected-item" style="width: 88%;margin-left: 6%;">
                ';
                        if($_REQUEST['Model']=="EP-950-ACRYLIC"){
                           /* echo '<div class="msg_red" style="position:absolute;top:222px;left:20px;"><i>Fully Adjustable<br><br>Multi Functional<br><br>Indoor and Outdoor Use<br><br>Easy Disassembly for Storage,<br><br>Ready for Shipping</i></div>';*/
                        }
                        if($_REQUEST['Model']=="B-950P-GLASS"){
                           /* echo '<div class="msg_red" style="position:absolute;top:300px;left:20px;"><i>Fully Adjustable<br>Multi Functional<br>Indoor and Outdoor Use<br>Easy Disassembly for Storage,<br>Ready for Shipping</i></div>';*/
                        }
                        if($_REQUEST['Model']=="ALLIN1"){
                            echo '
                    <ul class="head-table" style="border-top:1px solid #888;height:170px;">
                      <li id="item-text" style="margin:0;padding:0;">
                        <table style="font-family: tahoma,verdana,arial;font-size:12px;text-align: center;width:848px;" align="center">
                            <tbody>
                                <tr>
                                    <td>
                                            <a onclick="open_signup_form_quote();" style="height:55px;width:55px;cursor:pointer;" >
                                                <img src="img/saveQuote_button.jpg" style="height:55px;width:55px;" >
                                            </a>
                                        </td>
                                        <td>
                                            <a style="height:55px;width:55px;cursor:pointer;" onclick="open_signup_form_layout();" >
                                                <img src="img/saveLayout_button.jpg" style="height:55px;width:55px;" >
                                            </a>
                                        </td>
                                    <td>
                                        <a class="thickbox" href="images/'.$_REQUEST['Model'].'/POSTDIM.jpg" style="height:55px;width:55px;" >
                                            <img src="images/'.$_REQUEST['Model'].'/POSTDIM.jpg" style="height:55px;width:55px;" >
                                        </a>
                                    </td>
                                    <td>
                                        <a href="PDF/'.$category_name.'.pdf" target="_blank" style="height:55px;width:55px;" >
                                            <img src="images/pdf-icon.gif" style="height:55px;width:55px;">
                                        </a>
                                    </td>
                                    <td>
                                            <a href="javascript:void(0)" onclick="wishlist()" style="height:55px;width:55px;" >
                                                <img src="images/wishlist_icon.png" style="height:55px;width:55px;">
                                            </a>
                                        </td>
                                    <td style="display:none;">
                                        <!--<a class="thickbox" href="images/'.$category_name.'/mydrw.jpg" style="height:55px;width:55px;" >
                                            <img src="images/'.$category_name.'/mydr.png" style="height:55px;width:55px;" >
                                        </a>-->
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Save quote</b></td>
                                    <td><b>Save layout</b></td>
                                    <td><b>Post Dimensions</b></td>
                                    <td><b>PDF Spec Sheet</b></td>
                                    <td><b>Save for leter</b></td>
                                    <td style="display:none;"><b>My Shop Drawing</b></td>
                                </tr>
                                
                            </tbody>
                        </table>
						<table style="font-family: tahoma,verdana,arial;font-size:12px;text-align: center;width:849px;" align="center">
                                <tbody>
								<tr style="height:85px;">
								
                                    <td colspan=5>
                                        <a class="thickbox" href="img/'.$category_name.'.jpg" style="height:55px;width:55px;">
                                            <img src="img/needHelpButton.png">
                                        </a>
                                    </td>';
										//ss
										$bay=$_REQUEST['type'];
										$cate_id=$_REQUEST['id'];
										//if($cate_id=="79")
										//{
										//}
										//else{
										echo'<td><a onclick="open_signup_form_rivet()" href="images/'.$category_name.'/'.$category_name.'_'.$bay.'_revit.rvt" style="height:55px;width:55px;">
                                                <img src="images/'.$category_name.'/Rivit.jpg" style="width:84px;">
                                            </a>
										</td>';
										//}
                                    echo'</tr>
									
							</tbody>
                            </table>
                        </li></tbody></table></li>
                   </ul>
                </div>
            </td>';
                        } else{

                    echo '
                    <ul class="head-table" style="border-top:1px solid #888;height:170px;">
                        <li id="item-text" style="margin:0;padding:0;">
                            <table style="font-family: tahoma,verdana,arial;font-size:12px;text-align: center;width:848px;" align="center">
                                <tbody>
                                    <tr>
                                        <td>
                                            <a onclick="open_signup_form_quote();" style="height:55px;width:55px;cursor:pointer;" >
                                                <img src="img/saveQuote_button.jpg" style="height:55px;width:55px;" >
                                            </a>
                                        </td>
                                        <td>
                                            <a style="height:55px;width:55px;cursor:pointer;" onclick="open_signup_form_layout();" >
                                                <img src="img/saveLayout_button.jpg" style="height:55px;width:55px;" >
                                            </a>
                                        </td>
                                        <td>
                                            <a class="thickbox" href="images/'.$_REQUEST['Model'].'/POSTDIM.jpg" style="height:55px;width:55px;" >
                                                <img src="images/'.$_REQUEST['Model'].'/POSTDIM.jpg" style="height:55px;width:55px;" >
                                            </a>
                                        </td>
                                        <td>
                                            <a href="PDF/'.$category_name.'.pdf" target="_blank" style="height:55px;width:55px;" >
                                                <img src="images/pdf-icon.gif" style="height:55px;width:55px;">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" onclick="wishlist()" style="height:55px;width:55px;" >
                                                <img src="images/wishlist_icon.png" style="height:55px;width:55px;">
                                            </a>
                                        </td>
                                        <td style="display:none;">
                                            <!--<a class="thickbox" href="images/'.$category_name.'/mydrw.jpg" style="height:55px;width:55px;" >
                                                <img src="images/'.$category_name.'/mydr.png" style="height:55px;width:55px;" >
                                            </a>-->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Save quote</b></td>
                                        <td><b>Save layout</b></td>
                                        <td><b>Post Dimensions</b></td>
                                        <td><b>PDF Spec Sheet</b></td>
                                        <td><b>Save for leter</b></td>
                                        <td style="display:none;"><b>My Shop Drawing</b></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
							<table style="font-family: tahoma,verdana,arial;font-size:12px;text-align: center;width:849px;" align="center">
                                <tbody>
								<tr style="height:85px;">
								
                                        <td colspan="4">
                                            <a class="thickbox" href="img/'.$category_name.'.jpg" style="height:55px;width:55px;">
                                                <img src="img/needHelpButton.png">
                                            </a>
                                        </td>';
										//ss
										$bay=$_REQUEST['type'];
										$cate_id=$_REQUEST['id'];
										//if($cate_id=="79")
										//{
										//}
										//else{
										echo'<td><a onclick="open_signup_form_rivet()" href="images/'.$category_name.'/'.$category_name.'_'.$bay.'_revit.rvt" style="height:55px;width:55px;">
                                                <img src="images/'.$category_name.'/Rivit.jpg" style="width:84px;">
                                            </a>
										</td>';
										//}
                                    echo'</tr>
									
							</tbody>
                            </table>
                        </li>
                    </tbody>
                    </table></li>
                   </ul>
                </div>
            </td>';
        } }
    if(isset($_REQUEST['Model']) && isset($_REQUEST['cPath'])&&!isset($_REQUEST['var'])){
             include(DIR_WS_MODULES."forms/".FILENAME_PRODUCT_CSS);
             //if($_REQUEST['Model']==EP11){

             //}else{
               // echo '<td valign="top" align="left">
                 //   <div id="selected-item">
                   //     <ul class="head-table" style="border-top:1px solid #888;height:80px;">
                     //       <li><h1 id="textarea56" style="padding-left: 0;"> '.$_REQUEST['Model'].'<br>126" and larger, please call so we may better assist you (1-800-690-0002)</h1></li>
                       // </ul>
                        //<ul class="head-table">
                          //  <li id="additional_image">
                            //<img src="images/'.$_REQUEST['Model'].'/START.jpg" style="width:100%;width:568px;height:453px"/>
                            //</li>
                            //<br style="clear:both;"/>
                        //</ul>
                    //</div>
                //</td>';
             //}
            
        }	
	
}		
		
		
		
?>
     </form>
	 
	 
	 
	 
	 
<script>
/*
function save_ip_reviat(){
	
	<?php
	$bay=$_REQUEST['type'];
	$cate_id=$_REQUEST['id'];
							
	$ip=$_SERVER['REMOTE_ADDR'];
	?>
	var ip=<?php echo$ip ?>
	var cate_id=<?php echo$cate_id ?>
	var bay=<?php echo$bay ?>
	
	
     $.ajax({
      type:'post',
      url:"includes/save_revit_ip.php",
      data:{ip:ip,cate_id:cate_id,bay:bay},
      success: function(data){
      window.location.reload(true);
	}
      });
  //alert(data);
}*/

$(document).ready(function() {
	
	<?php
	$ip=$_SERVER['REMOTE_ADDR'];
	
	?>
var ip ='<?php echo$ip ?>';
	 $.ajax({
      type:'post',
      url:"includes/check_ip_valdation_quote.php",
      data:{ip:ip},
      success: function(data){
     // window.location.reload(true);
	  //alert(data);
	  //$('#check_quote_ip').val(data);
	  $('#check_quote_ip').val('quote_ip_not_exist');
	  
	}
      });
	  
	   $.ajax({
      type:'post',
      url:"includes/check_ip_valdation_layout.php",
      data:{ip:ip},
      success: function(data){
     // window.location.reload(true);
	  //alert(data);
	  //$('#check_layout_ip').val(data);
	  $('#check_layout_ip').val('layout_ip_not_exist');
	  
	}
      });
	  
	
});


 function save_ip_revit(){
    <?php
	$bay=$_REQUEST['type'];
	if($bay=='')
	{
		$bay='1BAY';
	}
	$cate_id=$_REQUEST['id'];
							
	$ip=$_SERVER['REMOTE_ADDR'];
	$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
	$customer_city=$details->city;
	$customer_state=$details->region;
	$customer_country=$details->country;
	?>
	
	
	
	
	var ip='<?php echo$ip ?>';
	var bay='<?php echo$bay ?>';
	var cate_id='<?php echo$cate_id ?>';
	var customer_id='<?php echo$customer_id ?>';
	var customer_city='<?php echo$customer_city ?>';
	var customer_state='<?php echo$customer_state ?>';
	var customer_country='<?php echo$customer_country ?>';
  var category_name = '<?php echo$category_name ?>';
  var bay = '<?php echo$bay ?>';

var name_revit=$("#name_revit").val()
  var email_revit=$("#email_revit").val()

      var reggname = /^[a-zA-Z]+[a-zA-Z]$/;
      var regg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

  if(reggname.test(name_revit) == true)
  {

    if(regg.test(email_revit))
    {

       var email_revit_secure = email_revit;

  	//alert(customer_id);
       $.ajax({
        type:'post',
        url:"includes/save_revit_ip.php",
        data:{ip:ip,cate_id:cate_id,bay:bay,customer_id:customer_id,customer_city:customer_city,customer_state:customer_state,customer_country:customer_country,name_revit:name_revit,email_revit_secure:email_revit},
        success: function(data){
          window.location.href = "images/"+category_name+"/"+category_name+"_"+bay+"_revit.rvt";
          console.log(window.location.href = "images/"+category_name+"/"+category_name+"_"+bay+"_revit.rvt");
       // window.location.reload(true);
  	  //alert(data);
  	     }
      });

     }else{ 
      alert("You have entered an invalid email address!");
      // document.form1.text1.focus();
    }
}else{ 
      alert("Invalid name given.");
}
  
  }


</script>


<script>

 function save_ip_quote(){
    <?php
	$bay=$_REQUEST['type'];
	if($bay=='')
	{
		$bay='1BAY';
	}
	$cate_id=$_REQUEST['id'];
							
	$ip=$_SERVER['REMOTE_ADDR'];
	$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
	$customer_city=$details->city;
	$customer_state=$details->region;
	$customer_country=$details->country;
	

	?>
	
	
	
	
	var ip='<?php echo$ip ?>';
	var bay='<?php echo$bay ?>';
	var cate_id='<?php echo$cate_id ?>';
	var customer_id='<?php echo$customer_id ?>';
	var customer_city='<?php echo$customer_city ?>';
	var customer_state='<?php echo$customer_state ?>';
	var customer_country='<?php echo$customer_country ?>';
	var name_quote=$("#name_quote").val()
	var email_quote=$("#email_quote").val()
      
      var reggname = /^[a-zA-Z]+[a-zA-Z]$/;
      var regg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

  if(reggname.test(name_quote) == true)
  {

    if(regg.test(email_quote))
    {

       var email_quote_secure = email_quote;
	     var total_quote_price=$("#total").text();
	     var totla_length=  $(".total").text();
		 //var bay='<?php echo$bay ?>';
	/*if(cate_id=='79' || cate_id=='40')
	{
	totla_length=totla_length;	
	}
	else{
		totla_length=0;
	}*/

	//<input placeholder="Name" type="text" name="name_quote" id="name_quote" required />
    //<input placeholder="Email" type="email" name="email_quote" id="email_quote" required />
	
     $.ajax({
      type:'post',
      url:"includes/save_quote_ip.php",
      data:{ip:ip,cate_id:cate_id,bay:bay,customer_id:customer_id,customer_city:customer_city,customer_state:customer_state,customer_country:customer_country,name_quote:name_quote,email_quote_secure:email_quote,total_quote_price:total_quote_price,totla_length:totla_length},
      success: function(data){
  abc(this.form); 

     // window.location.reload(true);
	  //alert(data);
	}
      });

    }else{ 
      alert("You have entered an invalid email address!");
  }
}else{ 
      alert("Invalid name given.");
}


  
  }


</script>


<script>

 function save_ip_layout(form){

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
			
			var name_layout=$("#name_layout").val();
			var email_layout=$("#email_layout").val();

      var reggname = /^[a-zA-Z]+[a-zA-Z]$/;
      var regg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

  // if(reggname.test(name_layout) == true)
  // {

    // if(regg.test(email_layout) == true)
    // {

        var email_layout_secure = email_layout;


			//alert(bay);
		     $.ajax({
		      type:'post',
		      url:"includes/save_layout_ip.php",
		      data:{ip:ip,cate_id:cate_id,bay:bay,customer_id:customer_id,customer_city:customer_city,customer_state:customer_state,customer_country:customer_country,name_layout:name_layout,email_layout_secure:email_layout},
		      success: function(data){
            		layout();
		      //window.location.reload(true);
			  //alert(data);
			   }
		      });

		// }else{ 
      // alert("You have entered an invalid email address!");

    // }
  // }

  // else{ 
      // alert("Invalid name given.");

    // }
}


</script>

<script>
  function abc(is){
  	if (!document.getElementById('name_quote').value) {
  		document.getElementById('input_reuired').style.display = 'block';
  		
  	}else if(!document.getElementById('email_quote').value){
  		
  		document.getElementById('input_reuired').style.display = 'block';
  	}else{
  		    if(myFunction(document.forms['cart_quantity'])){
        $("body").append("<div id='TB_load'><img src='"+tb_pathToImage+"'></div>");//add loader to the page
        $("body").append("<div id='TB_overlay'></div><div id='TB_window'></div>");
        $('#TB_load').show();
        $("#TB_overlay").addClass("TB_overlayBG");
        html2canvas(document.getElementsByClassName("mainTable2")).then(function(canvas) {
            var pic=canvas.toDataURL("image/jpeg");
            var id_for_logo = <?php echo ($_GET["id"])?>;
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
		//alert(customer_idd);
			//savaquoteee
			var total_quote_price=$("#total").text();
	     var totla_length=  $(".total").text();
		 //var bay='<?php echo$bay ?>';
		 
		 

			
            pic = pic.replace(/^data:image\/(png|jpg);base64,/, "");
            $.ajax({
                type: "POST",
                url: "includes/script.php",
                data: { 
                    img: pic, 
                     id: id_for_logo, 
                    bay: bay_for_logo,total_quote_price:total_quote_price,totla_length:totla_length,
					customer_idd:customer_idd
                },
                cache: false,
                contentType: "application/x-www-form-urlencoded",
                success: function(data, textStatus, request){
                modal.style.display = "none";   
                tb_show("","pop.php?KeepThis=true&TB_iframe=true&height=500&width=600","");
                //$("#scrn").href="img/screenshot/scrn.jpg";
                // var link = document.createElement('a');
                // link.className="thickbox";
                // //alert(link.className);
                // link.href = "img/screenshot/scrn.jpg";
                // document.body.appendChild(link);
                // link.click();
            },
            error: function (request, textStatus, errorThrown) {
                alert("some error");
            }
        })
        });
    }
  	}
 }
  	
  function layout(){



//fix code for convert div into image START........
// html2canvas(document.querySelector("#additional_image")).then(canvas => {
//     // document.body.appendChild(canvas)
//     // download(canvas, 'myimage.png');
//     // var img    = canvas.toDataURL("image/png");
//     // document.write('<img src="'+img+'"/>');
//     var dataURL = canvas.toDataURL("image/png;base64");
// 	$.ajax({
// 	  type: 'POST',
// 	  url: 'includes/save_div_in_to_image.php',
// 	  data: { data: dataURL},
// 	  success: function (data) {
// 	    	console.log(data);
// 	    }
// 	});
// });
//fix code for convert div into image END........






  	//  	  	if (!document.getElementById('name_layout').value) {
  	// 	document.getElementById('input_reuired').style.display = 'block';
  	// }else if(!document.getElementById('email_layout').value){
  	// 	document.getElementById('input_reuired').style.display = 'block';
  	// }
  	// else{
    if(myFunction(document.forms['cart_quantity'])){
		$("body").append("<div id='TB_load'><img src='"+tb_pathToImage+"'></div>");//add loader to the page
        $("body").append("<div id='TB_overlay'></div><div id='TB_window'></div>");
        $('#TB_load').show();
        $("#TB_overlay").addClass("TB_overlayBG");
        var form=document.forms['cart_quantity'];
        var bay=form.type.value;
		//alert(category_name);
		//alert($(".glass_a").css("top"));
		//alert($(".glass_a").css("left"));
        var var1=var2=var3=var4=var5=var6=var7=var8=var9=var10=var11=glass_corner=lightbar=postfinish=adjtb=frosted=texttt1=texttt2=var12=var13=var14=var15=var16=round_a=round_b=round_c=round_d=round_face_a=round_face_b=round_face_c=round_face_d=round_type=gotocornerpostss=endpaneltype="";
		
		//alert(category_name);
		//var customer_idd='<?php echo$customer_id ?>';
		
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
		//alert(customer_idd);
		if(category_name=='EP11' ||category_name=='EP12'){
		endpaneltype=form.end_options_type.options[form.end_options_type.selectedIndex].text;
		}
		
		if(category_name=='Ring-EP5' ||category_name=='EP5'){
		var check_arc_glass=$('#arc_glass_status :selected').val();
		//alert(check_arc_glass);
		if(check_arc_glass=='yes')
		{
		var13=check_arc_glass;
		var14=$('#arc_glass_value :selected').val();
		var15=$('#endpanel_arc_glass_value :selected').val();
		var16=$('#arc_glass_type_value :selected').val();
		}
		}
		
		var gotocornerpostss=$("input[name='gotocornerpostcheck']:checked").val();
		
		if(gotocornerpostss=="1")
		{
		var9=form.posttype.options[form.posttype.selectedIndex].text;
		var10=form.degree.options[form.degree.selectedIndex].text;
		var11=$("input[name='corner_post']:checked").val();
		if(category_name=='B950 SWIVEL' || category_name=='EP15')
		{

		}
		else{
			 if(bay=="2BAY"){
			 }
			 else{
			 	var12=form.noofcornerpost.options[form.noofcornerpost.selectedIndex].text;  
			 }
				
		}

		

		}
		//alert(var9);alert(var10);alert(var11);
		//alert(var12);
		var gotoroundglassss=$("input[name='gotoroundglasscheck']:checked").val();
		 if(gotoroundglassss=="1")
            {
            round_type=form.round_type.options[form.round_type.selectedIndex].value;	
			
			console.log(round_type);
            }
		
        if(bay=="1BAY"){
            if(form.face_length!==undefined){
                var1=form.face_length.options[form.face_length.selectedIndex].text;
            }else{
        
                var1=form.face_length_a.options[form.face_length_a.selectedIndex].text;
            }

            if(gotoroundglassss=="1")
            {
            	round_a=form.round_face_radius_a.options[form.round_face_radius_a.selectedIndex].text;

            	round_face_a=form.round_face_length_a.options[form.round_face_length_a.selectedIndex].value;

            }


      
        }else if(bay=="2BAY"||bay=="2BAYEXT"){
            var1=form.face_length_a.options[form.face_length_a.selectedIndex].text;
            var2=form.face_length_b.options[form.face_length_b.selectedIndex].text;
      	    if(gotoroundglassss=="1")
            {
	            round_a=form.round_face_radius_a.options[form.round_face_radius_a.selectedIndex].text;
	            round_b=form.round_face_radius_b.options[form.round_face_radius_b.selectedIndex].text;

            	round_face_a=form.round_face_length_a.options[form.round_face_length_a.selectedIndex].value;
            	round_face_b=form.round_face_length_b.options[form.round_face_length_b.selectedIndex].value;

            }
        }else if(bay=="3BAY"){
            var1=form.face_length_a.options[form.face_length_a.selectedIndex].text;
            var2=form.face_length_b.options[form.face_length_b.selectedIndex].text;
            var3=form.face_length_c.options[form.face_length_c.selectedIndex].text;
      	    if(gotoroundglassss=="1")
            {
	            round_a=form.round_face_radius_a.options[form.round_face_radius_a.selectedIndex].text;
	            round_b=form.round_face_radius_b.options[form.round_face_radius_b.selectedIndex].text;
	            round_c=form.round_face_radius_c.options[form.round_face_radius_c.selectedIndex].text;

            	round_face_a=form.round_face_length_a.options[form.round_face_length_a.selectedIndex].value;
            	round_face_b=form.round_face_length_b.options[form.round_face_length_b.selectedIndex].value;
            	round_face_c=form.round_face_length_c.options[form.round_face_length_c.selectedIndex].value;
            }      
        }else if(bay=="4BAY"){
            var1=form.face_length_a.options[form.face_length_a.selectedIndex].text;
            var2=form.face_length_b.options[form.face_length_b.selectedIndex].text;
            var3=form.face_length_c.options[form.face_length_c.selectedIndex].text;
            var4=form.face_length_d.options[form.face_length_d.selectedIndex].text;
      	    if(gotoroundglassss=="1")
            {
	            round_a=form.round_face_radius_a.options[form.round_face_radius_a.selectedIndex].text;
	            round_b=form.round_face_radius_b.options[form.round_face_radius_b.selectedIndex].text;
	            round_c=form.round_face_radius_c.options[form.round_face_radius_c.selectedIndex].text;
	            round_d=form.round_face_radius_d.options[form.round_face_radius_d.selectedIndex].text;

            	round_face_a=form.round_face_length_a.options[form.round_face_length_a.selectedIndex].value;
            	round_face_b=form.round_face_length_b.options[form.round_face_length_b.selectedIndex].value;
            	round_face_c=form.round_face_length_c.options[form.round_face_length_c.selectedIndex].value;	            
            	round_face_d=form.round_face_length_d.options[form.round_face_length_d.selectedIndex].value;	
           
            }  

        }
        if(form.post_height!== undefined){
            var5=form.post_height.options[form.post_height.selectedIndex].text;  
        }
        if(form.right_length!== undefined){
            var6=form.right_length.options[form.right_length.selectedIndex].text;
        }
        if(form.left_length!== undefined){
            var7=form.left_length.options[form.left_length.selectedIndex].text;
        }
		if(category_name=='Ring-EP5'){
		glass_corner=form.rounded_corners.options[form.rounded_corners.selectedIndex].text;
		lightbar=form.light_bar.options[form.light_bar.selectedIndex].text;
		postfinish=form.choose_finish.options[form.choose_finish.selectedIndex].text;
		adjtb=form.adjustable.options[form.adjustable.selectedIndex].text;
		frosted=form.roasted_glass.options[form.roasted_glass.selectedIndex].text;
		}
		if(category_name=="B950P"){
			var1=form.face_length_a.options[form.face_length_a.selectedIndex].text;
		}
		if(category_name=="ALLIN1"){
			var1=form.optn.options[form.optn.selectedIndex].text;
		}
		if(category_name=="EP950"){
			var1=form.face_length_a.options[form.face_length_a.selectedIndex].text;
		}
		
		if(category_name=="Light Bar"){
			texttt1 =document.querySelector('.glass_b').firstChild.data;
			texttt2 =document.querySelector('.glass_c').firstChild.data;
			
		}
		
		if(category_name=="Heat Lamp"){
			texttt1 =document.querySelector('.glass_b').firstChild.data;
			texttt2 =document.querySelector('.glass_c').firstChild.data;
		}
		//alert(texttt1);
		//alert(texttt2);
		//alert(category_name);
		//alert(var1);
	
		// var15=form.endpanel_arc_glass_value.value;
		// var16=form.arc_glass_type_value.value;
        end=$("input#glass-face").val();
        $.ajax({
            type: "POST",
            url: "includes/script1.php",
            data: { 
                mod:category_name, bay:bay, face1:var1, face2:var2,face3:var3,face4:var4,post:var5,left:var7,right:var6,end:end,tot:tot1,osc:"",im_id:"",sv:"",img:img_ajx, ptype:var9, pdegree:var10, pposi:var11, corny:gotocornerpostss, glass_corner:glass_corner, lightbar:lightbar, postfinish:postfinish, adjtb:adjtb, frosted:frosted, texttt1:texttt1, texttt2:texttt2, nocorpost:var12,arc_glass:var13,arc_glass_value:var14,endpanel_arc_glass_value:var15,arc_glass_type_value:var16,round_rad_a:'R-'+round_a,round_rad_b:'R-'+round_b,round_rad_c:'R-'+round_c,round_rad_d:'R-'+round_d,round_face_a:round_face_a,round_face_b:round_face_b,round_face_c:round_face_c,round_face_d:round_face_d,gotoroundglass:gotoroundglassss,round_type:round_type,endpaneltype:endpaneltype,customer_idd:customer_idd},
            cache: false,
            contentType: "application/x-www-form-urlencoded",
            success: function(data, textStatus, request){
				 modal.style.display = "none";
                tb_show("","pop1.php?KeepThis=true&TB_iframe=true&height=500&width=600","");
				//alert(data);
            },
            error: function (request, textStatus, errorThrown) {
                alert("some error");
            }
			
        });
    }
}
  // }
  function layout1(){
    if(myFunction(document.forms['cart_quantity'])){
		$("body").append("<div id='TB_load'><img src='"+tb_pathToImage+"'></div>");//add loader to the page
        $("body").append("<div id='TB_overlay'></div><div id='TB_window'></div>");
        $('#TB_load').show();
        $("#TB_overlay").addClass("TB_overlayBG");
        var form=document.forms['cart_quantity'];
        if(category_name=="ALLIN1"){
            var1=form.optn.options[form.optn.selectedIndex].text;
            end="";
        }else{
            var1=form.face_length_a.options[form.face_length_a.selectedIndex].text;;
            end=$("input#glass-face").val();
        }
    
        $.ajax({
            type: "POST",
            url: "includes/script1.php",
            data: { 
                mod:category_name, bay:"", face1:var1, face2:"",face3:"",face4:"",post:"",left:"",right:"",end:end,tot:tot1,osc:"",im_id:"",sv:"",img:img_ajx
            },
            cache: false,
            contentType: "application/x-www-form-urlencoded",
            success: function(data, textStatus, request){
                tb_show("","pop1.php?KeepThis=true&TB_iframe=true&height=500&width=600","");
            },
            error: function (request, textStatus, errorThrown) {
                alert("some error");
            }
        });
    }
  }
  
  

</script>







<!-- Trigger/Open The Modal -->

<!-- The Modal 
<div id="myModal" class="modal" style="background-image: url('img/mail/backgroung_imgs.jpg');">
-->
<div id="myModalsss" class="modalss" >
<div id="contactFormsssss">
 <span class="closessss">&times;</span>
<p class="maintextsssss" >BEST PRICE GUARANTEE</p>
<hr />
<!--
<p class="othtext" ><img src="img/mail/mail_img.png" id="mail_img">Subscribe to our mailing list to get the update to your email inbox.....</p>
-->
<div style="width:100%;height: 30%;">

<?php
if (!$detect->isMobile())
{
?>
<div style="width:30%;float:left;height: 150px;"><img src="img/social/new_img_bestprice.jpg" id="mail_imgsssss" title="Sneeze Guard" alt="Sneeze Guard"></div>
<div style="width:100%"><p class="othtextsssss" >
<i style="color:black;">


<?php
}
else{
?>
<div style="width:30%;float:left;height: 150px;"><img src="img/social/new_img_bestprice.jpg" id="mail_imgsssss" style="width:70%;" title="Sneeze Guard" alt="Sneeze Guard"></div>
<div style="width:100%"><p class="othtextsssss" >
<i style="color:black;font-size:28px;">

<?php
}
?>
<center>When ordering at ADM Sneezeguards, you will get the Best Price Guarantee. If you can find a better price, not only we will match it, but we will even give you an additional 5% discount off of the matched price !</center></i>


</p></div>
</div>
<div>


</div>
    
</div>

</div>



<script>
// Get the modal
var modalss = document.getElementById("myModalsss");
 
// Get the <span> element that closes the modal
var spansss = document.getElementsByClassName("closessss")[0];

// When the user clicks the button, open the modal 
function show_guarantee()
 {
  modalss.style.display = "block";
  
 
}



// When the user clicks on <span> (x), close the modal
spansss.onclick = function() {
  modalss.style.display = "none";
}




</script>


<?php
if (!$detect->isMobile())
{

?>

<style>

/* The Modal (background) */
.modalss {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 102; /* Sit on top */
 
}

/* Modal Content */
.modalss-content {

}

/* The Close Button */
.closessss {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.closessss:hover,
.closessss:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}


@import "https://fonts.googleapis.com/css?family=Raleway";
* { box-sizing: border-box; }
body { 
  margin: 0; 
  padding: 0; 
  background: #171717;
 
  
}
h1{ margin: 0; }

#contactFormsssss { 
  

  border: 10px solid #818181; 
  width: 500px;
  background: #fff;
  position: fixed;
  padding: 17px;
  font-family:Verdana, Geneva, sans-serif;
  top:50%;
  left:50%;
  transform: translate(-50%,-50%);
  -webkit-transform: translate(-50%,-50%)
      
  
}





.maintextsssss{
font-size:30px; color:#026773;		
color:#026773;	
font-family: fantasy;
padding-left: 13px;
}

.othtextsssss{
	color:black;
	font-size:13px;
	font-family: sans-serif;
}
.smalltextsssss{
	color:black;
	font-size:13px;
	margin: 14px;
	font-family: sans-serif;
}

#mail_imgsssss{width:90%;}
</style>


<?php
}
else{

?>


<style>

/* The Modal (background) */
.modalss {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 102 !important; /* Sit on top */
 
}

/* Modal Content */
.modalss-content {

}

/* The Close Button */
.closessss {
  color: #aaaaaa;
  float: right;
  font-size: 66px;
  font-weight: bold;
}

.closessss:hover,
.closessss:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}


@import "https://fonts.googleapis.com/css?family=Raleway";
* { box-sizing: border-box; }
body { 
  margin: 0; 
  padding: 0; 
  background: #171717;
 
  
}

#contactFormsssss { 
  

  border: 10px solid #818181; 
  width: 836px;
  height: 516px;
  text-align: center;
  background: #fff;
  position: fixed;
  z-index: 101 !important; /* Sit on top */
  top:50%;
  left:50%;
  transform: translate(-50%,-50%);
  -webkit-transform: translate(-50%,-50%)
  
}

.maintextsssss{
font-size:50px; 
color:#026773;	
font-family: fantasy;
padding-left: 13px;
}

.othtextsssss{
	font-size:32px;
	font-family: sans-serif;
	color:black;
}
.othtextsssss i{
	font-size:32px;
	font-family: sans-serif;
	color:black;
}
.smalltextsssss{
    font-size:32px;
	font-family: sans-serif;
	color:black;
	margin: 14px;
}

#mail_imgsssss{width:89%;}
</style>




<?php
}
?>










<?php

if (!$detect->isMobile())
{

?>


<style>

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 102; /* Sit on top */
 
}

/* Modal Content */
.modal-content {

}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}


/*@import "https://fonts.googleapis.com/css?family=Raleway";*/
* { box-sizing: border-box; }

#contact { 
  -webkit-user-select: none; /* Chrome/Safari */        
  -moz-user-select: none; /* Firefox */
  -ms-user-select: none; /* IE10+ */
  margin: 4em auto;
  width: 100px; 
  height: 30px; 
  line-height: 30px;
  background: teal;
  color: white;
  font-weight: 700;
  text-align: center;
  cursor: pointer;
  border: 1px solid white;
}

#contact:hover { background: #666; }
#contact:active { background: #444; }

#contactForm { 
  

  border: 10px solid #818181; 
  width: 500px;
  background: #fff;
  position: fixed;
  padding: 33px;
  font-family:Verdana, Geneva, sans-serif;
  top:50%;
  left:50%;
  transform: translate(-50%,-50%);
  -webkit-transform: translate(-50%,-50%)
      
  
}



.formBtn { 
  width: 140px;
  display: inline-block;
  
  background: teal;
  color: #2f9db3;
  font-weight: 100;
  font-size: 1.2em;
  border: none;
  border-radius: 12px;
  color:white;
}

#revit { 
  width: 140px;
  display: inline-block;
  
  background: teal;
  color: #2f9db3;
  font-weight: 100;
  font-size: 1.2em;
  border: none;
  border-radius: 12px;
  color:white;
}

.formBtn22 { 
  width: 140px;
  display: inline-block;
  
  background: teal;
  color: #2f9db3;
  font-weight: 100;
  font-size: 1.2em;
  border: none;
  border-radius: 12px;
  color:white;
}


#name_quote {
	width:90%;
	border:2px solid #ccb793;
	border-radius: 3px;
}

#email_quote {
	width:90%;
	border:2px solid #ccb793;
	border-radius: 3px;
}

#name_layout {
	width:90%;
	border:2px solid #ccb793;
	border-radius: 3px;
}

#email_layout {
	width:90%;
	border:2px solid #ccb793;
	border-radius: 3px;
}

#name_revit {
  width:90%;
  border:2px solid #ccb793;
  border-radius: 3px;
}

#email_revit {
  width:90%;
  border:2px solid #ccb793;
  border-radius: 3px;
}



.maintext{
font-size:30px; color:#026773;		
color:#026773;	
font-family: fantasy;
padding-left: 13px;
}

.othtext{
	color:black;
	font-size:15px;
	font-family: sans-serif;
}
.smalltext{
	color:black;
	font-size:13px;
	margin: 14px;
	font-family: sans-serif;
}

#mail_img{width:80%;}
</style>



<?php
}
else{

?>


<style>

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 102 !important; /* Sit on top */
 
}

/* Modal Content */
.modal-content {

}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 66px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}


/*@import "https://fonts.googleapis.com/css?family=Raleway";*/
* { box-sizing: border-box; }
body { 
  margin: 0; 
  padding: 0; 
  background: #171717;
 
  
}
h1{ margin: 0; }
#contact { 
  -webkit-user-select: none; /* Chrome/Safari */        
  -moz-user-select: none; /* Firefox */
  -ms-user-select: none; /* IE10+ */
  margin: 4em auto;
  width: 100px; 
  height: 30px; 
  line-height: 30px;
  background: teal;
  color: white;
  font-weight: 700;
  text-align: center;
  cursor: pointer;
  border: 1px solid white;
}

#contact:hover { background: #666; }
#contact:active { background: #444; }

#contactForm { 
  

  border: 10px solid #818181; 
  width: 836px;
  text-align: center;
  background: #fff;
  position: fixed;
  z-index: 101 !important; /* Sit on top */
  top:50%;
  left:50%;
  transform: translate(-50%,-50%);
  -webkit-transform: translate(-50%,-50%)
  
}


.formBtn { 
  width: 223px;
  display: inline-block;
      font-size: 36px;
  background: teal;
  color: #2f9db3;
  font-weight: 100;
  border: none;
  height: 82px;
  border-radius: 12px;
  color:white;
}


#revit { 
  width: 223px;
  display: inline-block;
      font-size: 36px;
  background: teal;
  color: #2f9db3;
  font-weight: 100;
  border: none;
  height: 82px;
  border-radius: 12px;
  color:white;
}

#name_quote {
	font-size:30px;
	width:90%;
	border:2px solid #ccb793;
	border-radius: 3px;
}

#email_quote {
	font-size:30px;
	width:90%;
	border:2px solid #ccb793;
	border-radius: 3px;
}

#name_layout {
	font-size:30px;
	width:90%;
	border:2px solid #ccb793;
	border-radius: 3px;
}

#email_layout {
	font-size:30px;
	width:90%;
	border:2px solid #ccb793;
	border-radius: 3px;
}

#name_revit {
  font-size:30px;
  width:90%;
  border:2px solid #ccb793;
  border-radius: 3px;
}

#email_revit {
  font-size:30px;
  width:90%;
  border:2px solid #ccb793;
  border-radius: 3px;
}


.formBtn22 { 
  width: 223px;
  display: inline-block;
      font-size: 36px;
  background: teal;
  color: #2f9db3;
  font-weight: 100;
  border: none;
  height: 82px;
  border-radius: 12px;
  color:white;
}

.maintext{
font-size:65px; 
color:#026773;	
font-family: fantasy;
padding-left: 13px;
}

.othtext{
	font-size:32px;
	font-family: sans-serif;
	color:black;
}
.smalltext{
    font-size:32px;
	font-family: sans-serif;
	color:black;
	margin: 14px;
}

#mail_img{width:80%;}
</style>




<?php
}

?>




<!-- Trigger/Open The Modal -->

<!-- The Modal 
<div id="myModal" class="modal" style="background-image: url('img/mail/backgroung_imgs.jpg');">
-->
<div id="myModal" class="modal" >
<div id="contactForm">
 <span class="close">&times;</span>
<p class="maintext" >YOUR EMAIL IS NEEDED</p>
<hr />
<!--
<p class="othtext" ><img src="img/mail/mail_img.png" id="mail_img">Subscribe to our mailing list to get the update to your email inbox.....</p>
-->
<div style="width:100%;height: 69px;">
<div style="width:20%;float:left;"><img src="img/mail/mail_img.png" id="mail_img" title="Sneeze Guard" alt="Sneeze Guard"></div>
<div style="width:90%"><p class="othtext" ><i>To save or print we need you email address and you will also be added to our mailing list for future sales, discounts and new products.....</i></p>
</div>
</div>
<div id="input_reuired" style="display: none;">
	<p style="text-align: center;color: red;">*Please enter name and email</p>
</div>



<?php

if (!$detect->isMobile())
{

?>
  <div> 
<input placeholder="Name" type="text" name="name_quote" id="name_quote" style="display:none;margin: .8em auto;display: block;padding: .4em;"  />
    <input placeholder="Email" type="email" name="email_quote" id="email_quote" style="display:none;margin: .8em auto;display: block;padding: .4em;"  />
   
    <input type="submit" value="Subscribe" class="formBtn" onclick="save_ip_quote();" style="display:none;margin: .8em auto;display: block;padding: .4em;" />

<!-- Save Revit Start -->
  
<input placeholder="Name" type="text" name="name_revit" id="name_revit" style="display:none;margin: .8em auto;padding: .4em;"  />

    <input placeholder="Email" type="email" name="email_revit" id="email_revit" style="display:none;margin: .8em auto;padding: .4em;"  />

     <input type="submit" value="Subscribe" class="" id="revit" onclick="save_ip_revit();" style="display:none;margin: .8em auto;padding: .4em;" />
	
<!-- Save Revit End -->
	
	<input placeholder="Name" type="text" name="name_layout" id="name_layout" style="display:none;margin: .8em auto;display: block;padding: .4em;"  />
    <input placeholder="Email" type="email" name="email_layout" id="email_layout" style="display:none;margin: .8em auto;display: block;padding: .4em;"  />
   
    <input type="submit" value="Subscribe" class="formBtn22" onclick="save_ip_layout(this.form);" style="display:none;margin: .8em auto;display: block;padding: .4em;" />
	
	

<?php
}
else
{
?>

<div style=" padding-top: 70px;">
<input placeholder="Name" type="text" name="name_quote" id="name_quote" style="display:none;margin: .8em auto;display: block;padding: .4em; width: 474px;height: 55px;"  />
    <input placeholder="Email" type="email" name="email_quote" id="email_quote" style="display:none;margin: .8em auto;display: block;padding: .4em; width: 474px;height: 55px;" />
   
    <input type="submit" value="Subscribe" class="formBtn" onclick="save_ip_quote();abc(this.form);" style="display:none;margin: .8em auto;display: block;padding: .4em; width: 474px;height: 55px;" />

<!-- Save Revit Start -->

    <input placeholder="Name" type="text" name="name_revit" id="name_revit" style="display:none;margin: .8em auto;padding: .4em; width: 474px;height: 55px;"  />
    
    <input placeholder="Email" type="email" name="email_revit" id="email_revit" style="display:none;margin: .8em auto;padding: .4em; width: 474px;height: 55px;" />

    <input type="submit" value="Subscribe" class="" id="revit" onclick="save_ip_revit();" style="display:none;margin: .8em auto;padding: .4em; width: 474px;height: 55px;" />

<!-- Save Revit End -->	
	
	<input placeholder="Name" type="text" name="name_layout" id="name_layout" style="display:none;margin: .8em auto;display: block;padding: .4em; width: 474px;height: 55px;"  />
    <input placeholder="Email" type="email" name="email_layout" id="email_layout" style="display:none;margin: .8em auto;display: block;padding: .4em; width: 474px;height: 55px;"  />
   
    <input type="submit" value="Subscribe" class="formBtn22" onclick="save_ip_layout(this);" style="display:none;margin: .8em auto;display: block;padding: .4em; width: 474px;height: 55px;" />
	
	

<?php
}

?>

	
   <center class="smalltext">*By completing this form you are signing up to receive our emails and can unsubscribe at anytime.....</center>
</div>
    
</div>

</div>





<script>
// Get the modal
var modal = document.getElementById("myModal");

var name_quote = document.getElementById("name_quote");
var email_quote = document.getElementById("email_quote");
var formBtn = document.getElementsByClassName("formBtn");


var name_layout = document.getElementById("name_layout");
var email_layout = document.getElementById("email_layout");
var formBtn22 = document.getElementsByClassName("formBtn22");


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
function open_signup_form_quote()
 {
	 
	var check_quote_ip=$("#check_quote_ip").val(); 
	 
	if(check_quote_ip=='quote_ip_exist')
	{
	save_ip_quote();
	// abc(this.form);	
	}	
	else{
	modal.style.display = "block";
  
  $('#name_revit').css("display","none");
  $('#email_revit').css("display","none");
  $('#revit').css("display","none");

  $('#name_quote').css("display","block");
  $('#email_quote').css("display","block");
  $('.formBtn').css("display","block");
  
   $('#name_layout').css("display","none");
  $('#email_layout').css("display","none");
  $('.formBtn22').css("display","none");
  	
	}	
  
  
}

// Luv Start
function open_signup_form_rivet()
 {
  var check_quote_ip=$("#check_quote_ip").val(); 
   
  if(check_quote_ip=='quote_ip_exist')
  {
  save_ip_quote();
  // abc(this.form); 
  } 
  else{
  modal.style.display = "block";
  
    $('#name_quote').css("display","none");
  $('#email_quote').css("display","none");
  $('.formBtn').css("display","none");

  $('#name_revit').css("display","block");
  $('#email_revit').css("display","block");
  $('#revit').css("display","block");
  
   $('#name_layout').css("display","none");
  $('#email_layout').css("display","none");
  $('.formBtn22').css("display","none");
    
  // save_ip_revit();
  } 
  
 
}
// Luv End

function open_signup_form_layout()
 {
	 
//for offline
	  layout();


// remove comment when make it online
	 /*
	var check_layout_ip=$("#check_layout_ip").val(); 
	 
	if(check_layout_ip=='layout_ip_exist')
	{
	// layout();
	save_ip_layout(this.form);	
	}	
	else{
		modal.style.display = "block";

  $('#name_revit').css("display","none");
  $('#email_revit').css("display","none");
  $('#revit').css("display","none");
  
	  $('#name_quote').css("display","none");
	  $('#email_quote').css("display","none");
	  $('.formBtn').css("display","none");
	  
	   $('#name_layout').css("display","block");
	  $('#email_layout').css("display","block");
	  $('.formBtn22').css("display","block");
	} 
  
  */
  
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
  document.getElementById('input_reuired').style.display = "none"
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
   // modal.style.display = "none";
  }
}






</script>


	 
	 
	 
	 
<input type="hidden" id="check_quote_ip" name="check_quote_ip" value="">
<input type="hidden" id="check_layout_ip" name="check_layout_ip" value="">


</tr>
<?
if (!$detect->isMobile())
{
?>

<?
}
else{
?>
<style>
#image img{
	    width: 855px !important;
    height: 759px !important;
}
</style>
<?

}
?>


<?php echo$customer_name ?>
</table>
<table border="0" width="856" height="10" align="center" background="images/backBottom.jpg">
    <tr>
        <td align=center></td>
    </tr>
</table>
<table border="0" width="856" height="30" align="center" style="background:#272727;">
    <tr>
    <td style="padding-left: 15px; text-align: center;">

      <a href="https://www.sneezeguard.com/" class="fb-share-button" data-layout="button" style="top: -3px;">Share</a>

     <a href="https://twitter.com/share?ref_src=" class="twitter-share-button" data-show-count="false">Tweet</a>

     <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://www.sneezeguard.com/index.php?cPath=86" onclick="window.open(this.href, 'mywin',
'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" ><img src="https://chillyfacts.com/wp-content/uploads/2017/06/LinkedIN.gif" alt="" width="54" height="20" title="Sneeze Guard" alt="Sneeze Guard"/></a>

  <a href="http://feeds.feedburner.com/AdmSneezeguards" target="_blank" title="<?php echo BOX_INFORMATION_RSS; ?>" onclick="rss_feed();">
    <?php/* echo tep_image("social_icons/rss-icon.png" , STORE_NAME . " - " . BOX_INFORMATION_RSS); */?>
    <img src="social_icons/rss-icon.png" alt="Sneeze Guard" title=" Sneeze Guard " style="width: 20px;">
  </a>

</td>
</tr>
</table>

<table border="0" width="856" height="30" align="center" style="background:#6e6e64;">
    <tr>
         <td width="185" height="55" style="padding-left: 15px"><img src="images/m24.gif" align="center" vspace="12" title="Sneeze Guard" alt="Sneeze Guard"></td>
		 <td width="475" style="padding-left: 15px"><div align="center"><a href="http://feeds.feedburner.com/AdmSneezeguardsNews"><img src="images/comstr.jpg" title="Sneeze Guard" alt="Sneeze Guard"></a></div></td>
		 <!--<td width="73" style="padding-left: 15px"><a href="https://www.facebook.com/admsneezeguards/" target="_blank"><img src="img/social/facebookimage.png" width="49" height="49" align="right" title="Sneeze Guard" alt="Sneeze Guard"></a></td>-->
		 <td width="73" style="padding-left: 15px"><a href="http://info.nsf.org/Certified/Food/Listings.asp?Company=0U560&Standard=002" target="_blank"><img src="images/nsflogo.jpg" width="49" height="49" align="right" title="Sneeze Guard" alt="Sneeze Guard"></a></td>
		 <td width="115" style="padding-left: 15px"><img src="images/SSL.gif" width="89" height="49" align="left" title="Sneeze Guard" alt="Sneeze Guard"></td>
		 </tr>
</table>

<table border="0" width="850" align="center">
<tr>
    <td width="100%" height="45" align="center" valign="middle">
    <font size="2" face=Tahoma>
    <font size='2' color=white>
  
  
  
    <B>Copyright&copy;<?php echo date("Y");?>  ADM Sneezeguards A division of Advanced Design Manufacturing L.L.C.</B> | <A HREF='<?php echo tep_href_link('shipping.php');?>'>Shipping and Return</A> | <A HREF='<?php echo tep_href_link(FILENAME_PRIVACY);?>'>Privacy Notice</A> | <A HREF='<?php echo tep_href_link(FILENAME_CUSTOMLIBRARY);?>'><b>Custom Library</b></A> |<A HREF='<?php echo tep_href_link(FILENAME_CONDITIONS);?>'><b>Terms of Use</b></A> | <A HREF='<?php echo tep_href_link('projects.php');?>'><B>Projects</B></A>  | <A HREF='<?php echo tep_href_link('archive.php');?>'><B>Archive</B></A> |<A HREF='<?php echo tep_href_link('contact_us_dealer.php');?>'><B>Dealer Inquiries</B></A> |<A HREF='<?php echo tep_href_link('trade_show_program.php');?>'><B>Trade Show Display Program</B></A><A HREF="<?php echo tep_href_link('sneezeguard-layout-design.php');?>"><B> | Sneeze guard Layout Design</B></A>

    <font size='2' color=white>
    <br>
	
    <center><!--<b style="font-size:15px;">Follow us on-</b>--> 
	
	<a href="https://www.facebook.com/admsneezeguards" target="_blank"><img src="img/social/facebook.png" style="width:50px;" alt="Follow us on Facebook" title="Follow us on Facebook"></a>  
	<a href="https://twitter.com/ASneezeguards" target="_blank"><img src="img/social/twittee.png" style="width:50px;" alt="Follow us on Twitter" title="Follow us on Twitter"></a>  
	<a href="https://www.linkedin.com/company/adm-sneezeguards" target="_blank"><img src="img/social/linklind.png" style="width:50px;" alt="Follow us on LinkedIn" title="Follow us on LinkedIn"> </a>  
	<a href="https://www.pinterest.com/admsneezeguards1" target="_blank"> <img src="img/social/pintrest.png" style="width:50px;" alt="Follow us on Pinterest" title="Follow us on Pinterest"> </a>  
	<a href="https://www.instagram.com/nickpadm" target="_blank"> <img src="img/social/instagram.png" style="width:50px;" alt="Follow us on Instagram" title="Follow us on Instagram"> </a>  
	<a href="https://www.youtube.com/channel/UCXn-Tc-uqqY8blZZapPDNXg" target="_blank"> <img src="img/social/youtube.png" style="width:50px;" alt="Follow us on YouTube" title="Follow us on YouTube"> </a> 
	</center>
    <C><font size='1' color=#ffffff>Advanced Design Mfg. L.L.C. d.b.a. ADM Sneezeguards is listed and certified as a custom sneezeguard manufacturer by N.S.F., all style numbers and names of units shown on this website and subsequent literature are strictly for reference purposes only.</C>
    </font></font>
    </td>
</tr>
</table>
<?php 
    $res=tep_db_query("select * from custom_popup where id=200");
    $row=tep_db_fetch_array($res);
?>
<script src="jquery.confirm/jquery.confirm.js"></script>
<script type="text/javascript">



function rss_feed(){
  var test_rss_variable = 'hiii';
             $.ajax({
                type: "POST",
                url: "./rss.php",
                data: { 
                    test_rss:test_rss_variable
                },
                success: function(){
                      console.log("Success rss_feed xml file created.");            
                }
            });
}





    function wishlist()
    {    
        var form = document.forms['cart_quantity'];
        if(myFunction(document.forms['cart_quantity'])){
            var bay=form.type.value;
            var var1=var2=var3=var4=var5=var6=var7=var8="";
            if(bay=="1BAY"){
                if(form.face_length!==undefined){
                    var1=form.face_length.options[form.face_length.selectedIndex].text;
                }else{
                    var1=form.face_length_a.options[form.face_length_a.selectedIndex].text;
                }
            }else if(bay=="2BAY"){
                var1=form.face_length_a.options[form.face_length_a.selectedIndex].text;
                var2=form.face_length_b.options[form.face_length_b.selectedIndex].text;
            }else if(bay=="3BAY"){
                var1=form.face_length_a.options[form.face_length_a.selectedIndex].text;
                var2=form.face_length_b.options[form.face_length_b.selectedIndex].text;
                var3=form.face_length_c.options[form.face_length_c.selectedIndex].text;
            }else if(bay=="4BAY"){
                var1=form.face_length_a.options[form.face_length_a.selectedIndex].text;
                var2=form.face_length_b.options[form.face_length_b.selectedIndex].text;
                var3=form.face_length_c.options[form.face_length_c.selectedIndex].text;
                var4=form.face_length_d.options[form.face_length_d.selectedIndex].text;
            }
            if(form.post_height!== undefined){
                var5=form.post_height.options[form.post_height.selectedIndex].text;  
            }
            if(form.right_length!== undefined){
                var6=form.right_length.options[form.right_length.selectedIndex].text;
            }
            if(form.left_length!== undefined){
                var7=form.left_length.options[form.left_length.selectedIndex].text;
            }
            end=$("input#glass-face").val();
            $.ajax({
                type: "POST",
                url: "includes/script1.php",
                data: { 
                    mod:category_name, bay:bay, face1:var1, face2:var2,face3:var3,face4:var4,post:var5,left:var7,right:var6,end:end,tot:tot1,osc:osc,im_id:im_id,sv:"save",img:img_ajx
                },
                cache: false,
                contentType: "application/x-www-form-urlencoded",
                success: function(data, textStatus, request){
                    //tb_show("","pop1.php?KeepThis=true&TB_iframe=true&height=500&width=600","");
                    var action = $("form[name='cart_quantity']").attr("action");
                    action = action.replace("add_product", "add_wishlist");
                    $("form[name='cart_quantity']").attr("action", action);  
                    $("form[name='cart_quantity']").removeAttr("onsubmit");
                    $("form[name='cart_quantity']").submit();                    
                },
                error: function (request, textStatus, errorThrown) {
                    alert("some error");
                }
            });
            return false;
        }else{
            return false;
        }
    }
    <?php if($wishlist->isNotLogin && basename($_SERVER['PHP_SELF']) == 'login.php') { ?>
        $(document).ready(function(){
            $.confirm({
                'title'     : 'Alert!!!',
                'message'   : '<?php echo $row['message']?>',
                'buttons'   : {
                    'OK'    : {
                        'class' : 'blue',
                        'action': function(){
                        }
                    }
                }
            });
        });
    <?php } ?>
</script>