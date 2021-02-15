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
	  $rs=tep_db_query("select * from custom_popup where id='".$id."'and bay='".$tp."'");
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

            while($products=tep_db_fetch_array($product)){?>

product_name_price['<?=$products['name']?>'] = new Array("<?=$products['id']?>", "<?=$products['price']?>");

<?php } 

        if($HTTP_GET_VARS['id']==81){

            $product="select p.products_id as id, pd.products_name as name, p.products_price as price from ".TABLE_PRODUCTS." as p, ".TABLE_PRODUCTS_DESCRIPTION." as pd, ".TABLE_PRODUCTS_TO_CATEGORIES." as pc where p.products_id=pd.products_id and pd.products_id=pc.products_id and pc.categories_id=80 and pd.language_id=".(int)$languages_id;

            $product=tep_db_query($product);

            while($products=tep_db_fetch_array($product)){?>

product_name_price['<?=$products['name']?>'] = new Array("<?=$products['id']?>", "<?=$products['price']?>");

<?php }

         }

      }

    ?>
</script>

<script src="jquery.confirm/jquery.confirm.js"></script>

<?php if($_REQUEST['type']=='1BAY'){?>
<style>
div.left {
	top: 62%;
    left: 18%;
}

div.right {
    top: 68%;
    left: 10%;
}

div.post {
	top: 63%;
    left: 66%;
}

div.glass_a {
    display: none;
}

div.glass_b {
    display: none;
}

div.glass_c {
    display: none;
}

div.glass_d {
    display: none;
}

div.glass {
	top: 63%;
    left: 66%;
}

div.total {
    top: 71%;
    left: 73%;
}

div.msgtishu {
    display: none;
}

div.msgtishu1 {
    display: none;
}

div.msgtishu2 {
    display: none;
}
</style>
<?php }
if($_REQUEST['type']=='2BAY'){?>
<style>
div.left {
	top: 70%;
    left: 12%;
}

div.right {
	top: 73%;
    left: 8%;
}

div.post {
	top: 69%;
    left: 491%;
}

div.glass_a {
	top: 69%;
    left: 49%;
}

div.glass_b {
    top: 54%;
    left: 79%;
}

div.glass_c {
    display: none;
}

div.glass_d {
    display: none;
}

div.glass {
    display: none;
}

div.total {
    top: 65%;
    left: 70%;
}

div.msgtishu {
    display: none;
}

div.msgtishu1 {
    display: none;
}

div.msgtishu2 {
    display: none;
}
ul.head-table li div
{
    font-size: 15px;
}
</style>
<?php }

if($_REQUEST['type']=='3BAY'){
?>
<style>
div.left {
	top: 66%;
    left: 8%;
}

div.right {
    top: 69%;
    left: 4%;
}

div.post {
    top: 67%;
    left: 36%;
}

div.glass_a {
    top: 67%;
    left: 36%;
}

div.glass_b {
    top: 55%;
    left: 64%;
}

div.glass_c {
    top: 45%;
    left: 83%;
}

div.glass_d {
    display: none;
}

div.glass {
    display: none;
}

div.total {
    top: 61%;
    left: 63%;
}

div.msgtishu {
    display: none;
}

div.msgtishu1 {
    display: none;
}

div.msgtishu2 {
    display: none;
}
ul.head-table li div
{
    font-size: 15px;
}
</style>

<?php }
if($_REQUEST['type']=='4BAY'){?>
<style>
div.left {
    top: 65%;
    left: 7%;
}

div.right {
    top: 68%;
    left: 4%;
}

div.post {
    top: 68%;
    left: 4%;
}

div.glass_a {
	top: 65%;
    left: 30%;
}

div.glass_b {
	top: 54%;
    left: 55%;
}

div.glass_c {
	top: 45%;
    left: 73%;
}

div.glass_d {
    top: 38%;
    left: 87%;
}

div.glass {
    display: none;
}

div.total {
	top: 52%;
    left: 69%;
}

div.msgtishu {
    display: none;
}

div.msgtishu1 {
    display: none;
}

div.msgtishu2 {
    display: none;
}
ul.head-table li div
{
    font-size: 13px;
}
</style>
<?php }
?>

<script type="text/javascript">
zero = one = two = three = four = five = six = seven = eight = nine = ten = eleven = false;

var isOpera = !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;

var isFirefox = typeof InstallTrigger !== 'undefined';
var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0;

var isChrome = !!window.chrome && !isOpera;
var isIE = false || !!document.documentMode;
if (isFirefox == true) {
    var width_one = 23;
    var width_two = 26;
    width_three = 30;
    right_next = -44;
    width_review = 21;
    redlinebrowser = 23;
    redlinebrowser1 = 23;
    redln = 85;
} else if (isChrome == true) {
    var width_one = 19;
    var width_two = 25;
    width_three = 28;
    right_next = -36;
    width_review = 19;
    redlinebrowser = 0;
    redlinebrowser1 = 0;
    redln = 85;
} else if (isSafari == true) {
    var width_one = 19;
    var width_two = 25;
    width_three = 28;
    right_next = -40;
    width_review = 19;
    redlinebrowser = 0;
    redlinebrowser1 = 0;
    redln = 85;
} else if (isIE == true) {
    if (document.all && !document.querySelector) {
        width_two = 27;
        redln = 85;
    } else {
        var width_two = 32;
        redln = 87;
    }
    var width_one = 19;

    width_three = 28;
    right_next = -40;
    width_review = 19;
    redlinebrowser = 0;
    redlinebrowser1 = 0;

} else if (isOpera == true) {
    var width_one = 19;
    var width_two = 25;
    width_three = 28;
    right_next = -40;
    width_review = 19;
    redlinebrowser = 0;
    redlinebrowser1 = 0;
    redln = 85;
} else {
    var width_one = 19;
    var width_two = 25;
    width_three = 28;
    width_review = 19;
    redln = 85;
}

zero = one = two = three = four = five = six = seven = eight = nine = ten = eleven = false;
choseFinish = 0;
selectOption = 0;
choseOption = 0;
choselength = 0;
choselight = 0;
choseRounded = 0;
choseFlang = 0;
priceOption = 0;
PostHeight = 0;
FaceLenght = 0;
Lenghta = 0;
Lenghtb = 0;
Lenghtc = 0;
Lenghtd = 0;
MakeAdja = 0;
MakeAdjb = 0;
MakeAdjc = 0;
MakeAdjd = 0;
MakeAdj = 0;

h = 100;

h1 = 128;

h2 = 153;

h3 = 200;

h8 = 0;

t8 = 0;
ms_adjustable='<?php echo $ms_adjustable?>';
category_name="<?=$category_name?>";
osc = "<?=$_REQUEST['osCsid']; ?>";
im_id = "<?=$im_id; ?>";
</script>
<script src="includes/model_files/ES82/ES82.js"></script>

<table id="cart-form"  >

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
                    <tr id="right_lenght">
                        <td>
                            <a class="thickbox" href='images/ES82/Depth.jpg'>
                                <h1>Countertop Width</h1>
                            </a>
                        </td>
                        <td>
                            <select name="right_length" onchange="getPriceOfProduct(this.form)">
                                <option value="select">Select</option>
                                <?php for($i=24; $i<=54; $i++){?>
                                <?php
							if($i==$countertop)
							{
							?>

                                <option value="<?php echo $i;?>" selected><?php echo $i.'"';?></option>

                                <?php
							}
							else
							{
							?>
                                <option value="<?php echo $i;?>"><?php echo $i.'"';?></option>

                                <?php
							}
							
							?>
                                <?php }?>
                            </select>
                        </td>
                        <td width="11%">
                            <span id="errormsgfirstname">
                                <img id="count_err" src="img/iconCheckOff.gif">
                            </span>
                        </td>
                    </tr>
                    <?php 
    				if($category_name=='ES82'){
						if($_REQUEST['type']=='1BAY') {
      			?>
                    <tr class="test-length">
                        <td class="test-lenght1bay"><a class="thickbox" href='images/ES82/1bay_faceA.jpg'>
                                <h1>Face Length A</h1>
                            </a></td>
                        <td>
                            <span id="face_length_span">
                                <select name="face_length" id="face_length" class="usecustom"
                                    onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">

                                    <?php
									
										echo'
										<option value="select">Select</option>
										';
										echo dropdown_option_facelength_custom_mod($facelengthA);
								echo '			
										
										<option value="No Glass">No Glass</option>
										';
									
									?>

                                </select>
                            </span>
                        </td>
                        <td>
                            <span id="errormsgfirstname">
                                <img id="glass_a_err" src="img/iconCheckOff.gif">
                            </span>
                        </td>
                    </tr>

                    <?  }
    					if($_REQUEST['type']=='2BAY'){
        					?>
                    <tr class="test-length">
                        <td class="test-lenght2baya"><a class="thickbox" href='images/ES82/2bay_faceA.jpg'>
                                <h1>Face Length A</h1>
                            </a></td>
                        <td>
                            <span id="face_length_a_span">
                                <select name="face_length_a" id="face_length_a" class="usecustom"
                                    onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">

                                    <?php
								
										echo'
										<option value="select">Select</option>
										';
										echo dropdown_option_facelength_custom_mod($facelengthA);
								echo '			
										
										<option value="No Glass">No Glass</option>
										';
									
									?>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span id="errormsgfirstname">
                                <img id="glass_a_err" src="img/iconCheckOff.gif">
                            </span>
                        </td>
                    </tr>

                    <tr class="test-length">
                        <td class="test-lenght2bayb"><a class="thickbox" href='images/ES82/2bay_faceB.jpg'>
                                <h1>Face Length B</h1>
                            </a></td>
                        <td>
                            <span id="face_length_b_span">
                                <select name="face_length_b" id="face_length_b" class="usecustom"
                                    onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                                    <?php
									
										echo'
										<option value="select">Select</option>
										';
										echo dropdown_option_facelength_custom_mod($facelengthB);
								echo '			
										
										<option value="No Glass">No Glass</option>
										';
									
									?>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span id="errormsgfirstname">
                                <img id="glass_b_err" src="img/iconCheckOff.gif">
                            </span>
                        </td>
                    </tr>

                    <?  }
    				if($_REQUEST['type']=='3BAY'){
       					?>
                    <tr class="test-length">
                        <td class="test-lenght3baya"><a class="thickbox" href='images/ES82/3bay_faceA.jpg'>
                                <h1>Face Length A</h1>
                            </a></td>
                        <td>
                            <span id="face_length_a_span">
                                <select name="face_length_a" id="face_length_a" class="usecustom"
                                    onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                                    <?php
									
										echo'
										<option value="select">Select</option>
										';
										echo dropdown_option_facelength_custom_mod($facelengthA);
								echo '			
										
										<option value="No Glass">No Glass</option>
										';
									
									?>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span id="errormsgfirstname">
                                <img id="glass_a_err" src="img/iconCheckOff.gif">
                            </span>
                        </td>
                    </tr>

                    <tr class="test-length">
                        <td class="test-lenght3bayb"><a class="thickbox" href='images/ES82/3bay_faceB.jpg'>
                                <h1>Face Length B</h1>
                            </a></td>
                        <td>
                            <span id="face_length_b_span">
                                <select name="face_length_b" id="face_length_b" class="usecustom"
                                    onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                                    <?php
								
										echo'
										<option value="select">Select</option>
										';
										echo dropdown_option_facelength_custom_mod($facelengthB);
								echo '			
										
										<option value="No Glass">No Glass</option>
										';
									
									?>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span id="errormsgfirstname">
                                <img id="glass_b_err" src="img/iconCheckOff.gif">
                            </span>
                        </td>
                    </tr>

                    <tr class="test-length">
                        <td class="test-lenght3bayc"><a class="thickbox" href='images/ES82/3bay_faceC.jpg'>
                                <h1>Face Length C</h1>
                            </a></td>
                        <td>
                            <span id="face_length_c_span">
                                <select name="face_length_c" id="face_length_c" class="usecustom"
                                    onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                                    <?php
								
										echo'
										<option value="select">Select</option>
										';
										echo dropdown_option_facelength_custom_mod($facelengthC);
								echo '			
										
										<option value="No Glass">No Glass</option>
										';
									
									?>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span id="errormsgfirstname">
                                <img id="glass_c_err" src="img/iconCheckOff.gif">
                            </span>
                        </td>
                    </tr>

                    <?  } if($_REQUEST['type']=='4BAY'){
      					?>
                    <tr class="test-length">
                        <td class="test-lenght4baya"><a class="thickbox" href='images/ES82/4bay_faceA.jpg'>
                                <h1>Face Length A</h1>
                            </a></td>
                        <td>
                            <span id="face_length_a_span">
                                <select name="face_length_a" id="face_length_a" class="usecustom"
                                    onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                                    <?php
								
										echo'
										<option value="select">Select</option>
										';
										echo dropdown_option_facelength_custom_mod($facelengthA);
								echo '			
										
										<option value="No Glass">No Glass</option>
										';
									
									?>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span id="errormsgfirstname">
                                <img id="glass_a_err" src="img/iconCheckOff.gif">
                            </span>
                        </td>
                    </tr>

                    <tr class="test-length">
                        <td class="test-lenght4bayb"><a class="thickbox" href='images/ES82/4bay_faceB.jpg'>
                                <h1>Face Length B</h1>
                            </a></td>
                        <td>
                            <span id="face_length_b_span">
                                <select name="face_length_b" id="face_length_b" class="usecustom"
                                    onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                                    <?php
									
										echo'
										<option value="select">Select</option>
										';
										echo dropdown_option_facelength_custom_mod($facelengthB);
								echo '			
										
										<option value="No Glass">No Glass</option>
										';
									
									?>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span id="errormsgfirstname">
                                <img id="glass_b_err" src="img/iconCheckOff.gif">
                            </span>
                        </td>
                    </tr>

                    <tr class="test-length">
                        <td class="test-lenght4bayc"><a class="thickbox" href='images/ES82/4bay_faceC.jpg'>
                                <h1>Face Length C</h1>
                            </a></td>
                        <td>
                            <span id="face_length_c_span">
                                <select name="face_length_c" id="face_length_c" class="usecustom"
                                    onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                                    <?php
									
										echo'
										<option value="select">Select</option>
										';
										echo dropdown_option_facelength_custom_mod($facelengthC);
								echo '			
										
										<option value="No Glass">No Glass</option>
										';
									
									?>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span id="errormsgfirstname">
                                <img id="glass_c_err" src="img/iconCheckOff.gif">
                            </span>
                        </td>
                    </tr>

                    <tr class="test-length">
                        <td class="test-lenght4bayd"><a class="thickbox" href='images/ES82/4bay_faceD.jpg'>
                                <h1>Face Length D</h1>
                            </a></td>
                        <td>
                            <span id="face_length_d_span">
                                <select name="face_length_d" id="face_length_d" class="usecustom"
                                    onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                                    <?php
							
										echo'
										<option value="select">Select</option>
										';
										echo dropdown_option_facelength_custom_mod($facelengthD);
								echo '			
										
										<option value="No Glass">No Glass</option>
										';
									
									?>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span id="errormsgfirstname">
                                <img id="glass_d_err" src="img/iconCheckOff.gif">
                            </span>
                        </td>
                    </tr>

                    <?   }} ?>
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
                            <a class="thickbox" href="images/ES82/End_panels.jpg">
                                <h1>End Panels</h1>
                            </a>
                        </td>
                        <td>
                            <select class="option" id="end_options" tabindex="6" onchange="show_panel_type(this.form)">
                                <option value="select">Select</option>

                                <?php
								if($endpanel==1)
								{
								echo'<option value="Both Closed End Panels" selected>Both Ends</option>';	
								}
								else{
								echo'<option value="Both Closed End Panels">Both Ends</option>';	
								}
								if($endpanel==2)
								{
								echo'<option value="Right Closed End Panel" selected>Right End</option>';	
								}
								else{
								echo'<option value="Right Closed End Panel">Right End</option>';	
								}
								if($endpanel==3)
								{
								echo'<option value="Left Closed End Panel" selected>Left End</option>';	
								}
								else{
								echo'<option value="Left Closed End Panel">Left End</option>';	
								}
								if($endpanel==4)
								{
								echo'<option value="No Closed End Panels" selected>No Ends</option>';	
								}
								else{
								echo'<option value="No Closed End Panels">No Ends</option>';	
								}
								
								?>

                            </select>
                        </td>
                        <td width="11%">
                            <span id="errormsgfirstname">
                                <img id="endpan_err" src="img/iconCheckOff.gif">
                            </span>
                        </td>
                    </tr>
                    <tr>
                    <td class="test-flang"><a class="flange-covers-pricing"><h1>Flange Covers</h1></a></td>
                        <td>
                            <select name="flang_cover" style="margin:4px; float: right;" align="right"
                                onchange="getPriceOfProduct(this.form);">
                                <option value="select">Select</option>
                                <?php
						if($flange==1)
						{
						echo'<option value="yes" selected>Yes</option>';	
						}
						else{
						echo'<option value="yes">Yes</option>';	
						}
						if($flange==0)
						{
						echo'<option value="no" selected>No</option>';	
						}
						else{
						echo'<option value="no">No</option>';	
						}
						?>

                            </select>
                        </td>
                        <td>
                            <span id="errormsgfirstname">
                                <img id="flange_err" src="img/iconCheckOff.gif">
                            </span>
                        </td>
                    </tr>

                    <tr style="display:none;">
                        <td class="test-flang">
                            <div style="position: relative; height:27px;"><a class="thickbox"
                                    href='flang_under_counter.php?type=adj&KeepThis=true&TB_iframe=true&height=480&width=640'>
                                    <h1>Flange Under Counter</h1>
                                </a>
                        </td>
                        <td>
                            <select name="flange_under_counter" style="margin:4px; float: right;" align="right"
                                onchange="getPriceOfProduct(this.form);">
                                <option value="select">Select</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </td>
                        <td>
                            <span id="errormsgfirstname">
                                <img id="flange_under_counter_err" src="img/iconCheckOff.gif">
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td><a class="thickbox" style="text-color:#c7f900 !important"
                                href=<?php echo '"images/'.$category_name.'/RADIUS.jpg"';?>>
                                <h1>Glass Corners</h1>
                            </a></td>
                        <td>
                            <!-- <input type="checkbox" class="roundcheck" name="rounded_corners" id="round_check" value="<?php echo $value;?>" style="margin:4px;" onclick="getPriceOfProduct(this.form)" <?php echo $checked;?> disabled="disabled"/> -->
                            <select class="roundcheck" name="rounded_corners" id="round_check" style="margin:4px;"
                                onchange="getPriceOfProduct(this.form)">
                                <option value="select">Select</option>

                                <?php
						if($glass_type=='Square')
						{
						echo'<option value="squared" selected>Squared</option>';	
						}
						else{
						echo'<option value="squared" >Squared</option>';	
						}
						if($glass_type=='Rounded')
						{
						echo'<option value="round" selected>Rounded</option>';	
						}
						else{
						echo'<option value="round" >Rounded</option>';	
						}
						?>

                            </select>
                        </td>
                        <td>
                            <span id="errormsgfirstname">
                                <img id="round_err" src="img/iconCheckOff.gif">
                            </span>
                        </td>
                    </tr>
                    <tr>
                    <td class="test-light"><a class="light-bar-pricing" data-model-name="<?=$category_name;?>"><h1>Light Bar</h1></a></td>
                        <td>
                            <select name="flange_covers" id="checkbox2" style="margin:4px; float: right;" align="right"
                                onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                                <option value="select">Select</option>

                                <?php
						if($lightbar==1)
						{
						echo'<option value="yes" selected>Yes</option>';	
						}
						else{
						echo'<option value="yes">Yes</option>';	
						}
						if($lightbar==0)
						{
						echo'<option value="no" selected>No</option>';	
						}
						else{
						echo'<option value="no">No</option>';	
						}
						?>

                            </select>
                        </td>
                        <td>
                            <span id="errormsgfirstname">
                                <img id="light_err" src="img/iconCheckOff.gif">
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td ><a class="thickbox" href='images/Finishes.jpg'>
                                <h1>Post Finish</h1>
							</a>
					</td><td>
                            <select name="choose_finish" 
                                onchange="getPriceOfProduct(this.form)">

                                <?php
					if($finish_type=='SS')
					{
					echo'<option value="SS" selected>Brushed Stainless</option>';	
					}
					else{
					echo'<option value="SS">Brushed Stainless</option>';	
					}
					if($finish_type=='CB')
					{
					echo'<option value="PC" selected>Coated Black</option>';	
					}
					else{
					echo'<option value="PC">Coated Black</option>';	
					}
					?>

                                <!--
								<?php if($category_name == 'ES53') {
									
								} else {?>
			                        <option value="PC">Coated Black</option>
								<?php }?>
								<?php if($category_name == 'ES82') {
									
								}?>
								-->

                            </select>
                        </td>
                        <td>
                            <span id="errormsgfirstname">
                                <img id="finish_err" src="img/iconCheckOff.gif">
                            </span>
                        </td>
                    </tr>
                    <tr style="position: relative;<?=$category_name=="B950 SWIVEL"?"":"display:none"?>">
                        <td>
                            <h1>Light Bracket</h1>
                            <a style="width:20px;margin: 0 4px;float: right;" class="thickbox"
                                href='light_bracket.php?type=adj&KeepThis=true&TB_iframe=true&height=480&width=640'
                                disabled="disabled"><img src="images/flang.jpg"></a>
                            <select name="flange_covers_2" onchange="getPriceOfProduct(this.form)" disabled="disabled"
                                style="width: 68px;">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="tables-options">
                <table cellpadding="0" cellspacing="0" width="100%" style="border: 1px solid white;border-radius: 5px;">
                    <tr>
                        <td>
                            <table cellpadding="0" cellspacing="0" width="100%"
                                style="border: 1px solid white;border-radius: 5px;">
                                <tr>
                                    <td colspan=3>
                                        <center>
                                            <h2 class="heading_all"><span style="float:left">&nbsp;&nbsp;3)</span>Extras
                                            </h2>
                                        </center>
                                    </td>
                                </tr>
                                <tr>
                                <td><a class="adjustable-brackets-pricing" ><h1>Adjustable Brackets</h1></a></td>
                                    <td>
                                        <select class="makeadjustablecheck31" name="adjustable"
                                            style="margin:4px ; float: right;width:70px;" align="right"
                                            onchange="makeAdjustable(this.form);getPriceOfProduct(this.form);">
                                            <option value="no">No</option>
                                            <option value="yes">Yes</option>
                                        </select>
                                    </td> 
						 <td width="11%">
                    <span id="errormsgfirstname">
                        <img id="adjustable_err" src="img/iconCheckOn.gif">
                    </span>
                </td>  
                                </tr>
                            </table>
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
                <td colspan=2>
                    <center>
                        <h2 class="heading_all"><span style="float:left">&nbsp;&nbsp;4)</span>Quote</h2>
                    </center>
                </td>
            </tr>
            <tr>
                <td align="left">Left Post:</td>
                <td id="left-post" align="right">0.00</td>
            </tr>
            <tr>
                <td align="left">Right Post:</td>
                <td id="right-post" align="right">0.00</td>
            </tr>
            <tr>
                <td align="left">Transistions Post:</td>
                <td id="trasition-post" align="right">0.00</td>
            </tr>
            <tr>
                <td align="left">Light:</td>
                <td id="flange-cover" align="right">0.00</td>
            </tr>
            <tr style="position: relative;<?=$category_name=="B950 SWIVEL"?"":"display:none"?>">
                <td align="left">Light Bracket:</td>
                <td id="flange-cover2" align="right">0.00</td>
            </tr>
            <tr>
                <td align="left">Adjustable Brackets:</td>
                <td id="make-adjustable" align="right">0.00</td>
            </tr>
            <tr>
                <td align="left">Face Glass:</td>
                <td id="face-glass" align="right">0.00</td>
            </tr>
            <tr>
                <td align="left">Flange Cover:</td>
                <td id="flang-cover" align="right">0.00</td>
            </tr>

            <tr style="display:none;">
                <td style="font-size:110%;" align="left">Flange Under Counter:</td>
                <td style="font-size:110%;" id="flange-under-counter" align="right">0.00</td>
            </tr>

            <tr>
                <td align="left">TopGlass:</td>
                <td id="top-glass" align="right">0.00</td>
            </tr>
            <?php if($category_name!="EP5" && $category_name!="EP15") {?>
            <tr>
                <td align="left">Left End Glass:</td>
                <td id="left-Panel" align="right">0.00</td>
            </tr>
            <tr>
                <td align="left">Right End Glass:</td>
                <td id="right-panel" align="right">0.00</td>
            </tr>
            <?php }?>

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
    <center><h2 class="heading_all" id="addcartandfavorite"><span style="float:left;">&nbsp;&nbsp;&nbsp;5)</span><div class="addcartandfavdiv">Action</div></h2></center>
        

        <!--td><h1>Add to Cart</h1></td-->

        <input type="hidden" id="c_glass_post_val" name="c_glass_post_val" value="" />
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

        <input type="hidden" id="c_glass_post" name="c_glass_post" value="" />

        <input type="hidden" id="c_glass_a_top" name="c_glass_a_top" value="" />
        <input type="hidden" id="c_glass_a_top_val" name="c_glass_a_top_val" value="" />
        <input type="hidden" id="c_glass_a" name="c_glass_a" value="" />
        <input type="hidden" id="c_glass_a_val" name="c_glass_a_val" value="" />
        <input type="hidden" id="c_glass_a_light" name="c_glass_a_light" value="" />
        <input type="hidden" id="c_glass_a_val_light" name="c_glass_a_val_light" value="" />
        <input type="hidden" id="c_glass_b_light" name="c_glass_b_light" value="" />
        <input type="hidden" id="c_glass_b_val_light" name="c_glass_b_val_light" value="" />
        <input type="hidden" id="c_glass_c_light" name="c_glass_c_light" value="" />
        <input type="hidden" id="c_glass_c_val_light" name="c_glass_c_val_light" value="" />
        <input type="hidden" id="c_glass_d_light" name="c_glass_d_light" value="" />
        <input type="hidden" id="c_glass_d_val_light" name="c_glass_d_val_light" value="" />
        <input type="hidden" id="c_glass_adjustable_a" name="c_glass_adjustable_a" value="" />
        <input type="hidden" id="c_glass_adjustable_b" name="c_glass_adjustable_b" value="" />
        <input type="hidden" id="c_glass_adjustable_c" name="c_glass_adjustable_c" value="" />
        <input type="hidden" id="c_glass_adjustable_d" name="c_glass_adjustable_d" value="" />
        <input type="hidden" id="c_glass_adjustable_a_val" name="c_glass_adjustable_a_val" value="" />
        <input type="hidden" id="c_glass_adjustable_b_val" name="c_glass_adjustable_b_val" value="" />
        <input type="hidden" id="c_glass_adjustable_c_val" name="c_glass_adjustable_c_val" value="" />
        <input type="hidden" id="c_glass_adjustable_d_val" name="c_glass_adjustable_d_val" value="" />
        <input type="hidden" id="c_glass_b_top" name="c_glass_b_top" value="" />
        <input type="hidden" id="c_glass_b_top_val" name="c_glass_b_top_val" value="" />
        <input type="hidden" id="c_glass_b" name="c_glass_b" value="" />
        <input type="hidden" id="c_glass_b_val" name="c_glass_b_val" value="" />
        <input type="hidden" id="c_glass_c_top" name="c_glass_c_top" value="" />
        <input type="hidden" id="c_glass_c_top_val" name="c_glass_c_top_val" value="" />
        <input type="hidden" id="c_glass_c" name="c_glass_c" value="" />
        <input type="hidden" id="c_glass_c_val" name="c_glass_c_val" value="" />
        <input type="hidden" id="c_glass_d_top" name="c_glass_d_top" value="" />
        <input type="hidden" id="c_glass_d_top_val" name="c_glass_d_top_val" value="" />
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