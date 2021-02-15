<?php 
    $videoname = 'ORBIT360';
	$msg="";
    $id=$_GET['id'];
    $tp=$_GET['type'];
    $rs=tep_db_query("select * from custom_popup where id='80'and bay='".$tp."'");
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
	product_name_price['B950LPSS']=new Array("848", "178.0000");
	product_name_price['B-950-SWIVEL GEAR COG']=new Array("5427", "10.0000");
    <?php
        if(isset($HTTP_GET_VARS['id'])){
            $product="select p.products_id as id, pd.products_name as name, p.products_price as price from ".TABLE_PRODUCTS." as p, ".TABLE_PRODUCTS_DESCRIPTION." as pd, ".TABLE_PRODUCTS_TO_CATEGORIES." as pc where p.products_id=pd.products_id and pd.products_id=pc.products_id and pc.categories_id=".$HTTP_GET_VARS['id']." and pd.language_id=".(int)$languages_id;
            $product=tep_db_query($product);
            while($products=tep_db_fetch_array($product)){?>
                    product_name_price['<?=$products['name']?>']=new Array("<?=$products['id']?>", "<?=$products['price']?>");
            <?php } 
        if($HTTP_GET_VARS['id']==81){
            $product="select p.products_id as id, pd.products_name as name, p.products_price as price from ".TABLE_PRODUCTS." as p, ".TABLE_PRODUCTS_DESCRIPTION." as pd, ".TABLE_PRODUCTS_TO_CATEGORIES." as pc where p.products_id=pd.products_id and pd.products_id=pc.products_id and pc.categories_id=80 and pd.language_id=".(int)$languages_id;
            $product=tep_db_query($product);
            while($products=tep_db_fetch_array($product)){?>
                    product_name_price['<?=$products['name']?>']=new Array("<?=$products['id']?>", "<?=$products['price']?>");
            <?php }
         }
      }
    ?>
</script>
<script src="jquery.confirm/jquery.confirm.js"></script>

<script type="text/javascript">
		var isOpera = !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;
    // Opera 8.0+ (UA detection to detect Blink/v8-powered Opera)
var isFirefox = typeof InstallTrigger !== 'undefined';   // Firefox 1.0+
var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0;
    // At least Safari 3+: "[object HTMLElementConstructor]"
var isChrome = !!window.chrome && !isOpera;              // Chrome 1+
var isIE = /*@cc_on!@*/false || !!document.documentMode;   // At least IE6
if(isFirefox==true){
	var width_one=23;
	var width_two=27;
	width_three=30;
	right_next=-44;
	width_review=21;  
	redlinebrowser=26;
	redlinebrowser1=26;
	redln=85;        /*red line width for price */
} else if(isChrome==true){
	var width_one=19;
	var width_two=25;
	width_three=28;
	right_next=-36;
	width_review=19; 
	redlinebrowser=0;
	redlinebrowser1=0;
	redln=85;
}
else if(isSafari==true){
	var width_one=19;
	var width_two=25;
	width_three=28;
	right_next=-40;
	width_review=19; 
	redlinebrowser=0;
	redlinebrowser1=0;
	redln=85;
}else if(isIE==true){
	if (document.all && !document.querySelector) {
        width_two=27;
		redln=85;
    }else{
       	var width_two=32;
       	redln=87;
    }
	var width_one=19;
	width_three=28;
	right_next=-40;
	width_review=19; 
	redlinebrowser=-40;
	redlinebrowser1=-40;
}else if(isOpera==true){
	var width_one=19;
	var width_two=25;
	width_three=28;
	right_next=-40;
	width_review=19; 
	redlinebrowser=0;
	redlinebrowser1=0;
	redln=85;
}else{
	var width_one=19;
	var width_two=29;	
	width_three=28;
	width_review=19;
	redln=85;
}
	one=two=three=four=five=false;
    choseOption=0;
    choselength=0;
    choseRounded=0;
    choseFlang=0;
    choseBracket=0;
    priceOption=0;
    h=100;
    h1=128;
    h2=153;
    h3=200;
    h8=0;
    t8=0;
    leftstr='<td class="test-lenght1bay" ><a class="thickbox" href="images/EP5/1bay_faceA.jpg" ><h1 style="margin-left:20px;">Right End</h1></a></td><td><span id="left_length_span"><select name="left_length" onchange="getPriceOfProduct(this.form)"> <option value="12">12"</option><option value="18">18"</option><option value="24">24"</option><option value="custom">Custom</option></select></span></td><td><span id="errormsgfirstname"><img id="glass_a_err" src="img/iconCheckOff.gif"></span></td>';
    rightstr='<td class="test-lenght2baya"><a class="thickbox" href="images/EP5/2bay_faceA.jpg"><h1 style="margin-left:20px;">Left End</h1></a></td><td><span id="right_length_span"><select name="right_length" onchange="getPriceOfProduct(this.form)"> <option value="12">12"</option><option value="18">18"</option><option value="24">24"</option><option value="custom">Custom</option></select></span></td><td><span id="errormsgfirstname"><img id="glass_b_err" src="img/iconCheckOff.gif"></span></td>';
</script>
<?php
if($_REQUEST['type']=='1BAY') {
?>
<style>
div.left {
    display: none;
}
div.right {
    display: none;
}
div.post {
    display: none;
}
div.msgtishu {
    display:none;
}
div.msgtishu1 {
    display:none;
}
div.msgtishu2 {
    display:none;
}
div.msgtishu2 {
    display:none;
}

div.glass_a {
    display:none;
}
div.glass_b {
    display:none;
}
div.glass_c {
    display:none;
}
div.glass_d {
    display:none;
}

div.glass {
    top: 73%;
    left: 63%;
}

div.total {
    top: 76%;
    left: 66%;
}
</style>
<?
}
?>
<?php
if($_REQUEST['type']=='2BAY') {
?>
<style>
div.left {
    display: none;
}
div.right {
    display: none;
}
div.post {
    display: none;
}
div.msgtishu {
    display:none;
}
div.msgtishu1 {
    display:none;
}
div.msgtishu2 {
    display:none;
}

div.glass {
    display: none;
}

div.glass_a {
    top: 73%;
    left: 48%;
}
div.glass_b {
    top: 57%;
    left: 80%;
}
div.glass_c {
    display:none;
}
div.glass_d {
    display:none;
}
div.total {

    top: 67%;
    left: 68%;

}
</style>
<?
}
?>
<?php
if($_REQUEST['type']=='3BAY') {
?>
<style>
div.left {
    display: none;
}
div.right {
    display: none;
}
div.post {
    display: none;
}
div.msgtishu {
    display:none;
}
div.msgtishu1 {
    display:none;
}
div.msgtishu2 {
    display:none;
}

div.glass {
    display: none;
}

div.glass_a {
    top: 71%;
    left: 34%;
}
div.glass_b {
     top: 59%;
    left: 63%;
}
div.glass_c {
    top: 49%;
    left: 85%;
}
div.glass_d {
    display:none;
}
div.total {
    top: 61%;
    left: 67%;
}
</style>
<?
}
?>
<?php
if($_REQUEST['type']=='4BAY') {
?>
<style>
div.left {
    display: none;
}
div.right {
    display: none;
}
div.post {
    display: none;
}
div.msgtishu {
    display:none;
}
div.msgtishu1 {
    display:none;
}
div.msgtishu2 {
    display:none;
}

div.glass {
    display: none;
}

div.glass_a {
        top: 68%;
    left: 28%;
}
div.glass_b {
        top: 58%;
    left: 53%;
}
div.glass_c {
        top: 50%;
    left: 73%;
}
div.glass_d {
    top: 45%;
    left: 88%;
}
div.total {
    top: 56%;
    left: 65%;
}
</style>
<?
}
?>
<table id="cart-form" style="" >
    <tr>
        <td>           
                               <div class="tables-options">         
                                <table cellpadding="0" cellspacing="0" width="100%" style="border: 1px solid white;border-radius: 5px;">
                <tr>
                        <td colspan=3><center><h2 class="heading_all"><span style="float:left">&nbsp;&nbsp1)</span>Measurements
						<br />
							 <input type="checkbox" id="checkboxbfor4bayA" name="checkboxbfor4bayA"
                                        style="display:none;">
                                    <input type="checkbox" id="checkboxbfor4bayB" name="checkboxbfor4bayB"
                                        style="display:none;">
                                    <input type="checkbox" id="checkboxbfor4bayC" name="checkboxbfor4bayC"
                                        style="display:none;">

                                    <input type="checkbox" id="checkbfor4bayBnonsame" name="checkbfor4bayBnonsame"
                                        style="display:none;">
                                    <input type="checkbox" id="checkcfor4bayCnonsame" name="checkcfor4bayCnonsame"
                                        style="display:none;">
                                    <input type="checkbox" id="checkdfor4bayDnonsame" name="checkdfor4bayDnonsame"
                                        style="display:none;">
                                    <input type="checkbox" id="checkformorethan42" name="checkformorethan42"
                                        style="display:none;">
						</center></h2></td>
                </tr>
                 <?php 
                    $fn="";
                    if($category_name=="ORBIT360"){
                        $fn="ORBIT360";
                    }else{
                        $fn="ORBIT360";
                    }
                    if($_REQUEST['type']=='1BAY') {
                    echo    '<tr>
                                <td class="test-lenght1baya"><a class="thickbox" href="images/'.$fn.'/1bay_faceA.jpg"><h1>Face Length A</h1></td>
                                <td>
								<span id="face_length_span">
                                    <select name="face_length" onchange="getPriceOfProduct(this.form);">
                                        <option value="select">Select</option>
                                        <option value="24">24"</option>
                                        <option value="30">30"</option>
                                        <option value="36">36"</option>
                                        <option value="42">42"</option>
                                        <option value="48">48"</option>
                                        <option value="54">54"</option>
                                        <option value="60">60"</option>
                                        <option value="66">66"</option>
										<option value="custom">Custom</option>
                                    </select>
									</span>
                                </td>
                                <td width="11%">
                                	<span id="errormsgfirstname">
                            			<img id="glass_a_err" src="img/iconCheckOff.gif">
                        			</span>
                                </td>
                            </tr>'; 
                }
                if($_REQUEST['type']=='2BAY'){
                    echo '<tr>
                            <td class="test-lenght2baya"><a class="thickbox" href="images/'.$fn.'/2bay_faceA.jpg"><h1>Face Length A</h1></a></td>
                            <td>
								<span id="face_length_a_span">
                                <select name="face_length_a" id="face_length_a" onchange="getPriceOfProduct(this.form);">
                                    <option value="select">Select</option>
                                    <option value="24">24"</option>
                                        <option value="30">30"</option>
                                        <option value="36">36"</option>
                                        <option value="42">42"</option>
                                        <option value="48">48"</option>
                                        <option value="54">54"</option>
                                        <option value="60">60"</option>
                                        <option value="66">66"</option>
										<option value="custom">Custom</option>
                                </select>
								</span>
                            </td>
                            <td width="11%">
                                <span id="errormsgfirstname">
                            		<img id="glass_a_err" src="img/iconCheckOff.gif">
                        		</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="test-lenght4bayb"><a class="thickbox" href="images/'.$fn.'/2bay_faceB.jpg" ><h1>Face Length B</h1></a></td>
                            <td>
								<span id="face_length_b_span">
                                <select name="face_length_b" id="face_length_b" onchange="getPriceOfProduct(this.form);">
                                   <option value="select" class="instock">Select</option>
									<option value="24" class="customsame" style="display:none;">24"</option>
									<option value="24" class="instock" style="display: block;">24"</option>
									<option value="30" class="instock" style="display: block;">30"</option>
									<option value="36" class="instock" style="display: block;">36"</option>
									<option value="42" class="instock" style="display: block;">42"</option>
									<option value="48" class="instock" style="display: block;">48"</option>
                                    <option value="54" class="instock" style="display: block;">54"</option>
                                    <option value="60" class="instock" style="display: block;">60"</option>
                                    <option value="66" class="instock" style="display: block;">66"</option>
									<option value="custom" class="instock" style="display: block;">Custom</option>
									
									';
									echo dropdown_option_facelength_custom_orbit360();
									echo'
                                </select>
								</span>
                            </td>
                            <td>
					   			<span id="errormsgfirstname">
                            		<img id="glass_b_err" src="img/iconCheckOff.gif">
                        		</span>
                			</td>
                        </tr>';
                }
                if($_REQUEST['type']=='3BAY'){
                    echo '<tr>
                            <td class="test-lenght3baya"><a class="thickbox" href="images/'.$fn.'/3bay_faceA.jpg"><h1>Face Length A</h1></a></td>
                            <td>
							<span id="face_length_a_span">
                                <select name="face_length_a" id="face_length_a" onchange="getPriceOfProduct(this.form);">
                                    <option value="select">Select</option>
                                    <option value="24">24"</option>
                                        <option value="30">30"</option>
                                        <option value="36">36"</option>
                                        <option value="42">42"</option>
                                        <option value="48">48"</option>
                                        <option value="54">54"</option>
                                        <option value="60">60"</option>
                                        <option value="66">66"</option>
										<option value="custom">Custom</option>
                                </select>
								</span>
                            </td>
                            <td width="11%">
                                <span id="errormsgfirstname">
                            		<img id="glass_a_err" src="img/iconCheckOff.gif">
                        		</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="test-lenght4bayb"><a class="thickbox" href="images/'.$fn.'/3bay_faceB.jpg" ><h1>Face Length B</h1></a></td>
                            <td>
								<span id="face_length_b_span">
                                <select name="face_length_b" id="face_length_b" onchange="getPriceOfProduct(this.form);">
                                    <option value="select" class="instock">Select</option>
									<option value="24" class="customsame" style="display:none;">24"</option>
									<option value="24" class="instock" style="display: block;">24"</option>
									<option value="30" class="instock" style="display: block;">30"</option>
									<option value="36" class="instock" style="display: block;">36"</option>
									<option value="42" class="instock" style="display: block;">42"</option>
									<option value="48" class="instock" style="display: block;">48"</option>
                                    <option value="54" class="instock" style="display: block;">54"</option>
                                    <option value="60" class="instock" style="display: block;">60"</option>
                                    <option value="66" class="instock" style="display: block;">66"</option>
									<option value="custom" class="instock" style="display: block;">Custom</option>
									
									
									';
									echo dropdown_option_facelength_custom_orbit360();
									echo'
                                </select>
								</span>
                            </td>
                            <td>
					   			<span id="errormsgfirstname">
                            		<img id="glass_b_err" src="img/iconCheckOff.gif">
                        		</span>
                			</td>
                        </tr>
                        <tr>
                            <td class="test-lenght4bayc"><a class="thickbox" href="images/'.$fn.'/3bay_faceC.jpg" ><h1>Face Length C</h1></a></td>
                            <td>
							<span id="face_length_c_span">
                                <select name="face_length_c" id="face_length_c" onchange="getPriceOfProduct(this.form);">
                                    <option value="select" class="instock">Select</option>
									<option value="24" class="customsame" style="display:none;">24"</option>
									<option value="24" class="instock" style="display: block;">24"</option>
									<option value="30" class="instock" style="display: block;">30"</option>
									<option value="36" class="instock" style="display: block;">36"</option>
									<option value="42" class="instock" style="display: block;">42"</option>
									<option value="48" class="instock" style="display: block;">48"</option>
                                    <option value="54" class="instock" style="display: block;">54"</option>
                                    <option value="60" class="instock" style="display: block;">60"</option>
                                    <option value="66" class="instock" style="display: block;">66"</option>
									<option value="custom" class="instock" style="display: block;">Custom</option>
									
									
									';
									echo dropdown_option_facelength_custom_orbit360();
									echo'
                                </select>
								</span>
                            </td>
                            <td>
					   			<span id="errormsgfirstname">
                            		<img id="glass_c_err" src="img/iconCheckOff.gif">
                        		</span>
                			</td>
                        </tr>';
                } if($_REQUEST['type']=='4BAY'){
                    echo '<tr>
                            <td class="test-lenght3baya"><a class="thickbox" href="images/'.$fn.'/4bay_faceA.jpg"><h1>Face Length A</h1></a></td>
                            <td>
							<span id="face_length_a_span">
                                <select name="face_length_a" id="face_length_a" onchange="getPriceOfProduct(this.form);">
                                    <option value="select">Select</option>
                                    <option value="24">24"</option>
                                        <option value="30">30"</option>
                                        <option value="36">36"</option>
                                        <option value="42">42"</option>
                                        <option value="48">48"</option>
                                        <option value="54">54"</option>
                                        <option value="60">60"</option>
                                        <option value="66">66"</option>
										<option value="custom">Custom</option>
                                </select>
								</span>
                            </td>
                            <td width="11%">
                                <span id="errormsgfirstname">
                            		<img id="glass_a_err" src="img/iconCheckOff.gif">
                        		</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="test-lenght4bayb"><a class="thickbox" href="images/'.$fn.'/4bay_faceB.jpg"><h1>Face Length B</h1></a></td>
                            <td>
								<span id="face_length_b_span">
                                <select name="face_length_b" id="face_length_b" onchange="getPriceOfProduct(this.form);">
                                    <option value="select" class="instock">Select</option>
									<option value="24" class="customsame" style="display:none;">24"</option>
									<option value="24" class="instock" style="display: block;">24"</option>
									<option value="30" class="instock" style="display: block;">30"</option>
									<option value="36" class="instock" style="display: block;">36"</option>
									<option value="42" class="instock" style="display: block;">42"</option>
									<option value="48" class="instock" style="display: block;">48"</option>
                                    <option value="54" class="instock" style="display: block;">54"</option>
                                    <option value="60" class="instock" style="display: block;">60"</option>
                                    <option value="66" class="instock" style="display: block;">66"</option>
									<option value="custom" class="instock" style="display: block;">Custom</option>
									
									
									';
									echo dropdown_option_facelength_custom_orbit360();
									echo'
                                </select>
								</span>
                            </td>
                            <td>
					   			<span id="errormsgfirstname">
                            		<img id="glass_b_err" src="img/iconCheckOff.gif">
                        		</span>
                			</td>
                        </tr>
                        <tr>
                            <td class="test-lenght4bayc"><a class="thickbox" href="images/'.$fn.'/4bay_faceC.jpg" ><h1>Face Length C</h1></a></td>
                            <td>
							<span id="face_length_c_span">
                                <select name="face_length_c" id="face_length_c" onchange="getPriceOfProduct(this.form);">
                                    <option value="select" class="instock">Select</option>
									<option value="24" class="customsame" style="display:none;">24"</option>
									<option value="24" class="instock" style="display: block;">24"</option>
									<option value="30" class="instock" style="display: block;">30"</option>
									<option value="36" class="instock" style="display: block;">36"</option>
									<option value="42" class="instock" style="display: block;">42"</option>
									<option value="48" class="instock" style="display: block;">48"</option>
                                    <option value="54" class="instock" style="display: block;">54"</option>
                                    <option value="60" class="instock" style="display: block;">60"</option>
                                    <option value="66" class="instock" style="display: block;">66"</option>
									<option value="custom" class="instock" style="display: block;">Custom</option>
									
									
									';
									echo dropdown_option_facelength_custom_orbit360();
									echo'
                                </select>
								</span>
                            </td>
                            <td>
					   			<span id="errormsgfirstname">
                            		<img id="glass_c_err" src="img/iconCheckOff.gif">
                        		</span>
                			</td>
                        </tr><tr>
                            <td class="test-lenght4bayd"><a class="thickbox" href="images/'.$fn.'/4bay_faceD.jpg"><h1>Face Length D</h1></a></td>
                            <td>
							<span id="face_length_d_span">
                                <select name="face_length_d" id="face_length_d" onchange="getPriceOfProduct(this.form);">
                                    <option value="select" class="instock">Select</option>
									<option value="24" class="customsame" style="display:none;">24"</option>
									<option value="24" class="instock" style="display: block;">24"</option>
									<option value="30" class="instock" style="display: block;">30"</option>
									<option value="36" class="instock" style="display: block;">36"</option>
									<option value="42" class="instock" style="display: block;">42"</option>
									<option value="48" class="instock" style="display: block;">48"</option>
                                    <option value="54" class="instock" style="display: block;">54"</option>
                                    <option value="60" class="instock" style="display: block;">60"</option>
                                    <option value="66" class="instock" style="display: block;">66"</option>
									<option value="custom" class="instock" style="display: block;">Custom</option>
									
									
									';
									echo dropdown_option_facelength_custom_orbit360();
									echo'
                                </select>
								</span>
                            </td>
                            <td>
					   			<span id="errormsgfirstname">
                            		<img id="glass_d_err" src="img/iconCheckOff.gif">
                        		</span>
                			</td>
                        </tr>';
                }?>
                </table>        
		  </div>
			 <div class="tables-options">
		  <table class="test-round" cellpadding="0" cellspacing="0" width="100%" style="border: 1px solid white;border-radius: 5px;">
            	<tr>
                        <td colspan=3><center><h2 class="heading_all"><span style="float:left">&nbsp;&nbsp2)</span>Options</center></h2></td>
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
                        <td width="11%">
                        	<span id="errormsgfirstname">
                                <img id="endpan_err" src="img/iconCheckOff.gif">
                            </span>
                        </td>
                	</tr>
                        <tr>
                            <td class="test-flang"><a class="thickbox" href='images/ORBIT360/all_type_flange.jpg'><h1>Flange</h1></a></td>
                            <td>
                                <select name="flange_coverss" style="margin:4px; float: right;" align="right" onchange="getPriceOfProduct(this.form);">
                                    <option value="select">Select</option>
									<option value="normal">Flange</option>
									<option value="normal_cover">Flange with Cover</option>
									<option value="above_counter">Above Counter Compression</option>
									<option value="below_counter">Below Counter Compression</option>					
                                </select>                         
                            </td>
                            <td>
                                <span id="errormsgfirstname">
                                    <img id="flange_err" src="img/iconCheckOff.gif">
                                </span>
                            </td>
                        </tr>						
					  <tr>
					  <td class="test-light"><a class="light-bar-pricing" data-model-name="<?=''?>"><h1>Light Bar</h1></a></td>
                    <td>
                    	<select name="flange_covers" style="margin:4px;" onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);"> 
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
        	<td colspan=2><center><h2 class="heading_all"><span style="float:left">&nbsp;&nbsp;3)</span>Quote</h2></center></td>
    	</tr>
        <tr>
            <td align="left">Left Post:</td><td id="left-post" align="right">0.00</td>
        </tr>
        <tr>
            <td align="left">Right Post:</td><td id="right-post" align="right">0.00</td>
        </tr>
        <tr>
            <td align="left">Transistions Post:</td><td id="trasition-post" align="right">0.00</td>
        </tr>
        <tr>
            <td align="left">Face Glass:</td><td id="face-glass" align="right">0.00</td>
        </tr>
	    <tr>
            <td align="left">Flange Type:</td><td id="flange-covers" align="right">0.00</td>
        </tr>
        <tr>
            <td align="left">Light Bar:</td><td id="flange-cover" align="right">0.00</td>
        </tr>
	     <tr >
            <td align="left" >Left End Glass:</td><td  id="left-Panel" align="right">0.00</td>
        </tr>
        <tr >
            <td align="left">Right End Glass:</td><td  id="right-panel" align="right">0.00</td>
        </tr>
        <tr>
            <td colspan="2" style="padding:0px !important;background: #f4f4f4; height:1px"></td>       
        </tr>
		<tr style="color:black;border-top:1.5px solid #000;border-bottom:1.5px solid #000;">
		 <td align="left" colspan="2" height="2"></td>
		 </tr>
         <tr style="background-color: rgb(121 239 40 / 30%);color:black;">
        <td  align="left">Total:</td><td  id="total" align="right">0.00</td>
    </tr>
    </table>
</div>
<div class="price-icon-wishlist-addtocart"> 
<center><h2 class="heading_all" id="addcartandfavorite"><span style="float:left;">&nbsp;&nbsp;&nbsp;4)</span><div class="addcartandfavdiv">Action</div></h2></center>

		<input type="hidden" id="c_glass_face" name="c_glass_face" value=""  />
        <input type="hidden" id="c_glass_face_val" name="c_glass_face_val" value=""  />
        <input type="hidden" id="c_glass_right" name="c_glass_right" value=""  />
        <input type="hidden" id="c_glass_right_val" name="c_glass_right_val" value=""  />
        <input type="hidden" id="c_glass_left" name="c_glass_left" value=""  />
        <input type="hidden" id="c_glass_left_val" name="c_glass_left_val" value=""  />
		<input type="hidden" id="c_glass_a" name="c_glass_a" value=""  />
        <input type="hidden" id="c_glass_a_val" name="c_glass_a_val" value=""  />
		<input type="hidden" id="c_glass_b" name="c_glass_b" value=""  />
        <input type="hidden" id="c_glass_b_val" name="c_glass_b_val" value=""  />
		<input type="hidden" id="c_glass_c" name="c_glass_c" value=""  />
        <input type="hidden" id="c_glass_c_val" name="c_glass_c_val" value=""  />
		<input type="hidden" id="c_glass_d" name="c_glass_d" value=""  />
        <input type="hidden" id="c_glass_d_val" name="c_glass_d_val" value=""  />
		<input type="hidden" id="c_glass_a_light" name="c_glass_a_light" value=""  />
		<input type="hidden" id="c_glass_a_val_light" name="c_glass_a_val_light" value=""  />
		<input type="hidden" id="c_glass_b_light" name="c_glass_b_light" value=""  />
		<input type="hidden" id="c_glass_b_val_light" name="c_glass_b_val_light" value=""  />
		<input type="hidden"id="c_glass_c_light" name="c_glass_c_light" value=""  />
		<input type="hidden"id="c_glass_c_val_light" name="c_glass_c_val_light" value=""  />
		<input type="hidden"id="c_glass_d_light" name="c_glass_d_light" value=""  />
		<input type="hidden"id="c_glass_d_val_light" name="c_glass_d_val_light" value=""  />
		<input type="hidden" id="is_custom" name="is_custom" value=""  />
		<input type="hidden" name="link" id="link">
		<input type="hidden" id="product_type" name="product_type" value="<?php echo $category_name; ?>"  />
    <tr>
        <td colspan="2" align="center"><input type="hidden" name="type" value="<?=$_REQUEST['type']?>" />
			<input type="hidden" name="glass_face" value="0" id="glass-face" disabled="disabled">
			 <input type="hidden" name="optionsid" id="optionsid" value="" disabled="disabled">
<div class="item" style="position:absolute;visibility:hidden;">
           <div class="delete" style="visibility:hidden"></div>
        </div>
		<div class="item" style="position:absolute;visibility:hidden;">
           <div class="delete1" style="visibility:hidden"></div>
		   <div class="delete2" style="visibility:hidden"></div>
		   <div class="delete3" style="visibility:hidden"></div>
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
</script>
<script type="text/javascript">
	osc="<?=$_REQUEST['osCsid']; ?>";
	im_id="<?=$im_id; ?>";	
	$(document).ready(function(){
		$('[name="face_length_a"]').live('change', function() {
        if ($(this).val() == 'custom') {
            custom = $(this);
            post = '';
            $msg =
                '<?php echo $ms_face .'&nbsp;&nbsp;<input type="checkbox" id="customefaceA"  /><span style="color:#666; font-size:16px;font: 26px/1 "Cuprum","Lucida Sans Unicode", "Lucida Grande", sans-serif;text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.6);color: #666;text-align: justify;" > : Make Next All Glass of Same Length</span>'?>';
            $('.delete').click();

        }
    })
    $('[name="face_length_b"]').live('change', function() {
        if ($(this).val() == 'custom') {
            $msg =
                '<?php echo $ms_face .'&nbsp;&nbsp;<input type="checkbox" id="customefaceB"  /><span style="color:#666; font-size:16px;font: 26px/1 "Cuprum","Lucida Sans Unicode", "Lucida Grande", sans-serif;text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.6);color: #666;text-align: justify;" > : Make Next All Glass of Same Length</span>'?>';
            custom = $(this);
            post = '';
            $('.delete').click();
        }
    })
    $('[name="face_length_c"]').live('change', function() {
        if ($(this).val() == 'custom') {
            custom = $(this);
            post = '';
            $msg =
                '<?php echo $ms_face .'&nbsp;&nbsp;<input type="checkbox" id="customefaceC"  /><span style="color:#666; font-size:16px;font: 26px/1 "Cuprum","Lucida Sans Unicode", "Lucida Grande", sans-serif;text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.6);color: #666;text-align: justify;" > : Make Next All Glass of Same Length</span>'?>';
            $('.delete').click();
        }
    })

    $('[name="face_length"]').live('change', function() {
        if ($(this).val() == 'custom') {
            $msg = '<?php echo $ms_face;?>';
            custom = $(this);
            post = '';
            $('.delete').click();
        }
    })

    $('[name="face_length_d"]').live('change', function() {
        if ($(this).val() == 'custom') {
            custom = $(this);
            post = '';
            $msg = '<?php echo $ms_face;?>';
            $('.delete').click();
        }
    })

    $('[name="right_length"]').live('change', function() {
        if ($(this).val() == 'custom') {
            $msg = '<?php echo $ms_right?>';
            custom = $(this);
            post = '';
            $('.delete').click();
        }
    })
    $('[name="left_length"]').live('change', function() {
        if ($(this).val() == 'custom') {
            $msg = '<?php echo $ms_left?>';
            custom = $(this);
            post = '';
            $('.delete').click();
        }
    })
})
</script>
<script src="includes/model_files/ORBIT360/ORBIT360.js"></script> 