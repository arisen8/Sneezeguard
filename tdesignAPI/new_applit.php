<link href='https://fonts.googleapis.com/css?family=Nosifer|League+Script|Yellowtail|Permanent+Marker|Codystar|Eater|Molle:400italic|Snowburst+One|Shojumaru|Frijole|Gloria+Hallelujah|Calligraffitti|Tangerine|Monofett|Monoton|Arbutus|Chewy|Playball|Black+Ops+One|Rock+Salt|Pinyon+Script|Orbitron|Sacramento|Sancreek|Kranky|UnifrakturMaguntia|Creepster|Pirata+One|Seaweed+Script|Miltonian|Herr+Von+Muellerhoff|Rye|Jacques+Francois+Shadow|Montserrat+Subrayada|Akronim|Faster+One|Megrim|Cedarville+Cursive|Ewert|Plaster' rel='stylesheet' type='text/css'>

<link href="tdesignAPI/css/api.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<script type="text/javascript" src="tdesignAPI/js/html2canvas.js"></script>

<script src="tdesignAPI/js/jquery.form.js"></script>
<script src="tdesignAPI/js/mainapp.js"></script>
<link rel="stylesheet" href="tdesignAPI/css/jquery-ui.css" />
<script src="tdesignAPI/js/jquery-ui.js"></script>

<script type="text/javascript">
	function changeval() {
		$total = parseInt($("#small").val()) + parseInt($("#medium").val()) + parseInt($("#large").val()) + parseInt($("#xlarge").val()) + parseInt($("#xxlarge").val());
		//alert($total);
		$('.small').val($("#small").val());
		$('.medium').val($("#medium").val());
		$('.large').val($("#large").val());
		$('.xlarge').val($("#xlarge").val());
		$('.xxlarge').val($("#xxlarge").val());
		$('.total').val($total);
	}

	function changeval2() {
		$total = parseInt($("#small2").val()) + parseInt($("#medium2").val()) + parseInt($("#large2").val()) + parseInt($("#xlarge2").val()) + parseInt($("#xxlarge2").val());
		//alert($total);
		$('.small').val($("#small2").val());
		$('.medium').val($("#medium2").val());
		$('.large').val($("#large2").val());
		$('.xlarge').val($("#xlarge2").val());
		$('.xxlarge').val($("#xxlarge2").val());
		$('.total').val($total);
	}

	function b() {
		$('#custom_text').toggleClass('bold_text');
		$("#bold_button").toggleClass('box-shadow', '0 0 10px inset #3c3c3c');
	}

	function i() {
		$('#custom_text').toggleClass('italic_text');
	}

	function changeFont(_name) {
		$('#custom_text').css("font-family", _name);
	}

	function changeFontSize(_size) {
		$('#custom_text').css("font-size", _size);
	}

	function changeColor(_color) {
		$('#custom_text').css("color", _color);
	}
</script>


<div class="container design_api_container">

<script>
function pro1(){
                document.getElementById("imgInp").click();
            }
</script>



	<div class='design_api'>
		<!--=============================================================-->
		<div id="menu">
		<?php
		if($banners_side=='double_side')
		{
	?>
	<div class="menu_option sel_type" style="display:none;">
<img src="img/incos-banner/options.png">
			</div>
				
	
	<?php
		}
		?>
		
			<div class="menu_option sel_color">
				<!--<i class="fa fa-paint-brush fa-3x"></i>--->
				<img src="img/incos-banner/color-icons.png">

			</div>
		
			<br /><br /><br />
			
			<div class="menu_option sel_text">
				
<img src="img/incos-banner/text-icons.png" >
			</div>
			<br /><br /><br />
			<div class="menu_option sel_custom_icon">
				
				<form id="form1" runat="server">
				
					
					<img src="img/incos-banner/upload.png" id = "image" onclick = "pro1()";>
        <input type = "file" id = "imgInp" style="display:none;">

				</form>
			</div>
			<br /><br /><br />
			
			<div class="menu_option sel_art">
				<img src="img/incos-banner/arts.png" >
			</div>
		</div>
		
		
		<!--=============================================================-->
		<div id='options'>
			<div class="T_type" >
			<!--
			<label>Both Side</label>
			<br />
			<select style="width:70%;" name="double_side_type" id="double_side_type">
			<option value="both_same">Same</option>
			<option value="both_different">Different</option>
			</select>
			-->
			</div>
			
			<div class="color_pick" >
			<h4 style="color:black;">Color</h4>
			<div style="height: 570px;width:100%;color:black !important;">
			<div class="color_radio_div" id="#ffffff" style="background-color:#ffffff;"></div>
				<div class="color_radio_div" id="#c1b7ad" style="background-color:#c1b7ad;"></div>
				<div class="color_radio_div" id="#a69d94" style="background-color:#a69d94;"></div>
				<div class="color_radio_div" id="#665a53" style="background-color:#665a53;"></div>
				<div class="color_radio_div" id="#000000" style="background-color:#000000;"></div>
				
				<div class="color_radio_div" id="#d2d0cd" style="background-color:#d2d0cd;"></div>
				<div class="color_radio_div" id="#878788" style="background-color:#878788;"></div>
				<div class="color_radio_div" id="#444448" style="background-color:#444448;"></div>
				<div class="color_radio_div" id="#ac002c" style="background-color:#ac002c;"></div>
				<div class="color_radio_div" id="#e6a997" style="background-color:#e6a997;"></div>
				
				<div class="color_radio_div" id="#b2554d" style="background-color:#b2554d;"></div>
				<div class="color_radio_div" id="#6c1e20" style="background-color:#6c1e20;"></div>
				<div class="color_radio_div" id="#b91020" style="background-color:#b91020;"></div>
				<div class="color_radio_div" id="#e07a65" style="background-color:#e07a65;"></div>
				<div class="color_radio_div" id="#d70033" style="background-color:#d70033;"></div>
				
				<div class="color_radio_div" id="#871821" style="background-color:#871821;"></div>
				<div class="color_radio_div" id="#f84c05" style="background-color:#f84c05;"></div>
				<div class="color_radio_div" id="#fda240" style="background-color:#fda240;"></div>
				<div class="color_radio_div" id="#ff7900" style="background-color:#ff7900;"></div>
				<div class="color_radio_div" id="#c74800" style="background-color:#c74800;"></div>
				
	
				<div class="color_radio_div" id="#f8a800" style="background-color:#f8a800;"></div>
				<div class="color_radio_div" id="#f6ce58" style="background-color:#f6ce58;"></div>
				<div class="color_radio_div" id="#eeb100" style="background-color:#eeb100;"></div>
				<div class="color_radio_div" id="#c17d00" style="background-color:#c17d00;"></div>
				<div class="color_radio_div" id="#ffe500" style="background-color:#ffe500;"></div>
				
				<div class="color_radio_div" id="#f7da33" style="background-color:#f7da33;"></div>
				<div class="color_radio_div" id="#fad700" style="background-color:#fad700;"></div>
				<div class="color_radio_div" id="#ffbb00" style="background-color:#ffbb00;"></div>
				<div class="color_radio_div" id="#00903a" style="background-color:#00903a;"></div>
				<div class="color_radio_div" id="#9bdfaa" style="background-color:#9bdfaa;"></div>
				
	
				<div class="color_radio_div" id="#45844d" style="background-color:#45844d;"></div>
				<div class="color_radio_div" id="#1e4624" style="background-color:#1e4624;"></div>
				<div class="color_radio_div" id="#8ad000" style="background-color:#8ad000;"></div>
				<div class="color_radio_div" id="#c4e767" style="background-color:#c4e767;"></div>
				<div class="color_radio_div" id="#98cf44" style="background-color:#98cf44;"></div>
				
				<div class="color_radio_div" id="#44932d" style="background-color:#44932d;"></div>
				<div class="color_radio_div" id="#00b1a5" style="background-color:#00b1a5;"></div>
				<div class="color_radio_div" id="#8ed4c4" style="background-color:#8ed4c4;"></div>
				<div class="color_radio_div" id="#50b9a2" style="background-color:#50b9a2;"></div>
				<div class="color_radio_div" id="#006360" style="background-color:#006360;"></div>
				
	
	
				<div class="color_radio_div" id="#005798" style="background-color:#005798;"></div>
				<div class="color_radio_div" id="#2f89d9" style="background-color:#2f89d9;"></div>
				<div class="color_radio_div" id="#213c7f" style="background-color:#213c7f;"></div>
				<div class="color_radio_div" id="#0f1931" style="background-color:#0f1931;"></div>
				<div class="color_radio_div" id="#4ba6e1" style="background-color:#4ba6e1;"></div>
				
				<div class="color_radio_div" id="#93d3e5" style="background-color:#93d3e5;"></div>
				<div class="color_radio_div" id="#00a5de" style="background-color:#00a5de;"></div>
				<div class="color_radio_div" id="#004b71" style="background-color:#004b71;"></div>
				<div class="color_radio_div" id="#422266" style="background-color:#422266;"></div>
				<div class="color_radio_div" id="#9a91da" style="background-color:#9a91da;"></div>
				
	
	
				<div class="color_radio_div" id="#634f90" style="background-color:#634f90;"></div>
				<div class="color_radio_div" id="#1b1528" style="background-color:#1b1528;"></div>
				<div class="color_radio_div" id="#ac87ba" style="background-color:#ac87ba;"></div>
				<div class="color_radio_div" id="#dfaed4" style="background-color:#dfaed4;"></div>
				<div class="color_radio_div" id="#926096" style="background-color:#926096;"></div>
				
				<div class="color_radio_div" id="#8c43b4" style="background-color:#8c43b4;"></div>
				<div class="color_radio_div" id="#ed64a7" style="background-color:#ed64a7;"></div>
				<div class="color_radio_div" id="#ee84ac" style="background-color:#ee84ac;"></div>
				<div class="color_radio_div" id="#e53285" style="background-color:#e53285;"></div>
				<div class="color_radio_div" id="#d50063" style="background-color:#d50063;"></div>
				
	
	
				<div class="color_radio_div" id="#bb678c" style="background-color:#bb678c;"></div>
				<div class="color_radio_div" id="#c77c98" style="background-color:#c77c98;"></div>
				<div class="color_radio_div" id="#a4446d" style="background-color:#a4446d;"></div>
				<div class="color_radio_div" id="#6e243c" style="background-color:#6e243c;"></div>
				<div class="color_radio_div" id="#4f2b1f" style="background-color:#4f2b1f;"></div>
				
				<div class="color_radio_div" id="#b9967d" style="background-color:#b9967d;"></div>
				<div class="color_radio_div" id="#825745" style="background-color:#825745;"></div>
				<div class="color_radio_div" id="#3d281e" style="background-color:#3d281e;"></div>
				<div class="color_radio_div" id="#be8f60" style="background-color:#be8f60;"></div>
				<div class="color_radio_div" id="#d2b193" style="background-color:#d2b193;"></div>
				<div class="color_radio_div" id="#9a6843" style="background-color:#9a6843;"></div>
				<div class="color_radio_div" id="#4d270b" style="background-color:#4d270b;"></div>
				
			</div>
				
	<div>		
		<div style="width:100%;text-align:center;color:black;">
	
		<input type="text" name="bannercolorcode" id="bannercolorcode" value="#000000" style="border-radius:8px;width: 100%;" disabled>
		</div>	</div>
				
				
				
		
				
			</div>
			
			
			
			
			<div class="custom_font">

				<select id="fs" onchange="changeFont(this.value);">
					<option value="arial">Arial</option>
					<option value="Nosifer, cursive">Nosifer</option>
					<option value="League Script, cursive">League Script</option>
					<option value="Yellowtail, cursive">Yellowtail</option>
					<option value="Permanent Marker, cursive">Permanent Marker</option>
					<option value="Codystar, cursive">Codystar</option>
					<option value="'Eater', cursive">Eater</option>
					<option value="Molle, cursive">Molle</option>
					<option value="Snowburst One, cursive">Snowburst One</option>
					<option value="Shojumaru, cursive">Shojumaru</option>
					<option value="Frijole, cursive">Frijole</option>
					<option value="Gloria Hallelujah, cursive">Gloria Hallelujah</option>
					<option value="Calligraffitti, cursive">Calligraffitti</option>
					<option value="Tangerine, cursive">Tangerine</option>
					<option value="Monofett, cursive">Monofett</option>
					<option value="Monoton, cursive">Monoton</option>
					<option value="Arbutus, cursive">Arbutus</option>
					<option value="Chewy, cursive">Chewy</option>
					<option value="Playball, cursive">Playball</option>
					<option value="Black Ops One, cursive">Black Ops One</option>
					<option value="'Rock Salt', cursive">Rock Salt</option>
					<option value=" 'Pinyon Script', cursive">Pinyon Script</option>
					<option value="'Orbitron', sans-serif">Orbitron</option>
					<option value="'Sacramento', cursive">acramento</option>
					<option value="'Sancreek', cursive">Sancreek</option>
					<option value="'Kranky', cursive">Kranky</option>
					<option value="'UnifrakturMaguntia', cursive">UnifrakturMaguntia</option>
					<option value="'Creepster', cursive">Creepster</option>
					<option value="'Pirata One', cursive">Pirata One</option>
					<option value=" 'Seaweed Script', cursive">Seaweed Script</option>
					<option value=" 'Miltonian', cursive">Miltonian</option>
					<option value=" 'Herr Von Muellerhoff', cursive">Herr Von Muellerhoff</option>
					<option value=" 'Rye', cursive"> 'Rye'</option>
					<option value=" 'Jacques Francois Shadow', cursive">Jacques Francois Shadow</option>
					<option value=" 'Montserrat Subrayada', sans-serif">Montserrat Subrayada</option>
					<option value=" 'Akronim', cursive">Akronim</option>
					<option value=" 'Faster One', cursive">Faster One</option>
					<option value=" 'Megrim', cursive">Megrim</option>
					<option value=" 'Cedarville Cursive', cursive">Cedarville Cursive</option>
					<option value=" 'Ewert', cursive">Ewert</option>
					<option value="'Plaster', cursive">Plaster</option>
					<option value="verdana">Verdana</option>
					<option value="impact">Impact</option>
					<option value="ms comic sans">MS Comic Sans</option>
				</select>
				<input type="color" name="favcolor" onChange="changeColor(this.value);" placeholder="Color Name" />
				<div class="font_styling">

					<span id="bold_button" onclick="b();"><b>B</b></span>
					<span id="italic_button" onclick="i();"><i>I</i></span>

					<select id="font_size" onchange="changeFontSize(this.value);">
						<?php
							for($i=10;$i<=140;$i+=2){
						?>
							
							<option value="<?php echo $i; ?>px"><?php echo $i; ?>px</option>
						<?php		
							}
						?>
						

					</select>
				</div>
				<textarea id="custom_text" placeholder="Create Your Custom Text..."></textarea>
				<button type="button" class="btn btn-primary" id="apply_text">
					Apply
				</button>

			</div>
	
	
	
	
	
	<div class="default_samples">
<div>
				
<?php
	$dir    = 'tdesignAPI/images/Images';
	$files1 = scandir($dir);
	//$files2 = scandir($dir, 1);
	foreach ($files1 as &$value) {
		if (strpos($value,'.png') !== false || strpos($value,'.jpg') !== false) {
    		//echo 'true';
			echo '<div class="sample_icons"><img src="tdesignAPI/images/Images/' .$value. '" width="100%" height="100%" /></div>' ;
		}elseif(strpos($value,'.') === false){
			//echo '<div class="sample_icons"><img src="tdesignAPI/images/folder.png" width="100%" height="100%" />' .$value. '</div>' ;
		}
    		//echo "Value: $value<br />\n";
	}
?>
</div>
<div style="padding-top:10px;">
		
<?php
	$dir    = 'tdesignAPI/images/Images/Free';
	$files1 = scandir($dir);
	//$files2 = scandir($dir, 1);
	foreach ($files1 as &$value) {
		if (strpos($value,'.png') !== false || strpos($value,'.jpg') !== false) {
    		//echo 'true';
			echo '<div class="sample_icons"><img src="tdesignAPI/images/Images/Free/' .$value. '" width="100%" height="100%" /></div>' ;
		}elseif(strpos($value,'.') === false){
			//echo '<div class="sample_icons"><img src="tdesignAPI/images/folder.png" width="100%" height="100%" />' .$value. '</div>' ;
		}
    		//echo "Value: $value<br />\n";
	}
?>

</div>

			</div>
	
	
	
			<div class="custom_icon">
				
			</div>

		</div>
		<!--=============================================================-->
		<!--=========================preview start====================================-->

		<div id='preview_t'  >

	 
	<form name="cart_quantity" id="" action="<?php echo tep_href_link(FILENAME_PRODUCT_INFO, tep_get_all_get_params(array('action')) . 'action=add_product') ?>" method="post" >	
		
<div class="design_banner_header" style="height:13%;">

<div style="width:100%; height:45%;text-align:left;padding-left:10px;padding-top:5px;">
<span style="font-size:20px;">Design Your Banner</span>
</div>
<div style="width:100%; height:55%;">

<div style="width:100%;">

<div style="width:35%;float:left;">

		<span>Both Side Banner</span>
			<br />
			<select style="width:70%;" name="double_side_type" id="double_side_type" onchange="change_banner_sides_popup(this.form)">
			<option value="both_same">Same</option>
			<option value="both_different">Different</option>
			</select>
</div>

<div style="width:30%;float:left;">
<span>Banner Sides</span><br />
<select name="banner_sided" id="banner_sided">
<?php
if($banners_side=='double_side')
{
echo'<option value="front_side">Front</option>
<option value="back_sided">Back</option>
';	
}
else{
echo'<option value="front_side">Front</option>
';	
}


?>


</select>

</div>
<div style="width:35%;float:left;">
<span>Banner Size</span><br />
<div class="object-size form-inline">

<div style="width:50%;float:left;text-align:center;">
    <div class="form-group">
 <div class="input-group input-group-sm">
 <div class="input-group-addon">W</div>
 <input type="text" class="form-control form-control-small app-canvas-height" id="banner-width" onchange="change_banner_size(this.form)" value="<?php echo$widths; ?>" data-inchesvalue="70" data-revertvalue="70" disabled>
</div>
  </div>
</div>
<div style="width:50%;float:left;text-align:left;">

 <div class="form-group">
 <div class="input-group input-group-sm">
 <div class="input-group-addon">H</div>
<input type="text" class="form-control form-control-small app-canvas-height" onchange="change_banner_size(this.form)"  id="banner-height" name="banner-height" value="70" data-inchesvalue="70" data-revertvalue="70">
  </div>
</div>
               

</div>

       
  </div>
  
  
</div>

</div>

</div>



</div>
<style>
.input-group {
    display: flex;
    justify-content: center;
    width: 100%;
    flex: 1;
}
.input-group {
    position: relative;
    display: table;
    border-collapse: separate;
}
.form-inline .input-group {
    display: inline-table;
    vertical-align: middle;
}


#TB_window{
	    top: 10% !important;
}
</style>
		
		<div style="height:78%;border-top: 6px solid #efefef;
    border-bottom: 6px solid #efefef;background-color: #f0f0f0;">
		<div id="preview_front" class="preview_front" >
				<div class="front_print" id="front_print">

				</div>
			</div>
			<div id="preview_back" class="preview_back" >
				<div class="back_print" id="back_print">

				</div>
			</div>
		</div>
		
		
		
		<?php
		//print_r($products_idarry);
		foreach ($products_idarry as $productidd) {
		echo'<input type="hidden" name="products_id[]" value="'.$productidd.'" />';
		//echo'<input type="text" name="products_id[]" id="banner_types" value="'.$productidd.' ">';
		
		}
		
		echo'<input type="hidden" name="products_id[]" id="both_side_different" value="" />';
		?>
		<input type="hidden" name="bannercolorcode2" id="bannercolorcode2" value="#000000">
		
		<input type="hidden" name="banner_types" id="banner_types" value="<?php echo$banners_side; ?>">
		
		
 <input type="hidden" id="c_glass_post_val" name="c_glass_post_val" value="<?php  echo$_POST['c_glass_post_val']; ?>"  />
        
        <input type="hidden" id="c_glass_face" name="c_glass_face" value="<?php  echo$_POST['c_glass_face']; ?>"  />
        <input type="hidden" id="c_glass_face_val" name="c_glass_face_val" value='<?php  echo$widths; ?>'  />
        <input type="hidden" id="c_glass_mult" name="c_glass_mult" value="1"  />
       
	
		
		<input type="hidden" id="c_glass_a" name="c_glass_a" value="<?php  echo$_POST['c_glass_a']; ?>"  />
        <input type="hidden" id="c_glass_a_val" name="c_glass_a_val" value="<?php  echo$_POST['c_glass_a_val']; ?>"  />
        <input type="hidden" id="c_glass_a_mult" name="c_glass_a_mult" value="1"  />
		
		
		<input type="hidden" id="c_glass_b" name="c_glass_b" value="<?php  echo$_POST['c_glass_b']; ?>"  />
        <input type="hidden" id="c_glass_b_val" name="c_glass_b_val" value="<?php  echo$_POST['c_glass_b_val']; ?>"  />
		<input type="hidden" id="c_glass_b_mult" name="c_glass_b_mult" value="1"  />
		
		<input type="hidden" id="c_glass_c" name="c_glass_c" value="<?php  echo$_POST['c_glass_c']; ?>"  />
        <input type="hidden" id="c_glass_c_val" name="c_glass_c_val" value="<?php  echo$_POST['c_glass_c_val']; ?>"  />
        <input type="hidden" id="c_glass_c_mult" name="c_glass_c_mult" value="1"  />
	    <input type="hidden" id="c_glass_d" name="c_glass_d" value="<?php  echo$_POST['c_glass_d']; ?>"  />
        <input type="hidden" id="c_glass_d_val" name="c_glass_d_val" value="<?php  echo$_POST['c_glass_d_val']; ?>"  />
		<input type="hidden" id="c_glass_d_mult" name="c_glass_d_mult" value="1"  />
		
		
		<input type="hidden" id="is_custom" name="is_custom" value="<?php  echo$_POST['is_custom']; ?>"  />
		<input type="hidden" id="is_frosted" name="is_frosted" value="<?php  echo$_POST['is_frosted']; ?>"  />
		
		
		
		<input type="hidden" id="im_ids" name="im_id" value="<?php  echo$_POST['im_id']; ?>"  />
		<input type="hidden" id="osc" name="osc" value="<?php  echo$_POST['osc']; ?>"  />
		 
		
		<input type="hidden" id="product_type" name="product_type" value="<?php  echo$_POST['product_type']; ?>"  />
		
		
		<input type="hidden" id="msg" name="msg" value="<?php  echo$_POST['msg']; ?>"  />
		<input type="hidden" id="ckall" name="ckall" value="<?php  echo$_POST['ckall']; ?>" />
		
		<input type="hidden" name="type" id="type" value="<?php  echo$_POST['type']; ?>" />
		
			<input type="hidden" name="glass_face" value="0" id="glass-face" disabled="disabled"/>

			<div style="height:9%;padding-top: 10px;background-color: #f6f5f5;width:100%;">
		
			<input type="text" name="banner_sides_view" id="banner_sides_view" value="1" style="display:none;">	
			<input type="text" name="banner_sides_type_view" id="banner_sides_type_view" value="1" style="display:none;">	
			
			<div style="float:right;">
			<button type="button" class="preview_images preview-button" id="" data-toggle="modal" data-target=".bs-example-modal-lg"   onclick="capture_screen();">
			View Proof
			</button>
			
			<button type="button" class="btn btn-primary btn-block" onclick="capture_screen_order(this.form);"  data-toggle="modal"data-target=".bs-example-modal-lg" style="width: 161px;display: inline;" >
					Proceed
				</button>
				
				<button type="button" class="cancel-button"  data-toggle="modal" data-target=".bs-example-modal-lg">
					Cancel
				</button>
				
				</div>
		</div>
			
		
		</div>
		<!--capture_screen()=============================================================-->
		<!--======================view start=======================================-->
<?php
//print_r($_POST);

?>

	</div>

	<!-- Large modal -->
	<!--
	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
	<div class="modal-content"> -->

	<div class="layer">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close close_img" data-dismiss="modal">
					<span aria-hidden="true">&times;</span><span class="sr-only close_img">Close</span>
				</button>
				<h4 class="modal-title">Banner</h4>
			</div>
			<div class="modal-body">

				<div id="image_reply">
				<img src="" id="front_banner_img">
				<img src="" id="front_banner_img_back">
				
				</div>
				<div class="modal-footer">
					
					
				</div>
			</div>

		</div>
	</div>


</div>

<script type="text/javascript" src="dist/html2canvas.js"></script>
<script type="text/javascript" src="dist/canvas2image.js"></script>

<script src="jquery.confirm/jquery.confirm.js"></script><!-- calling the popup confirmation box!! -->

<script type="text/javascript" src="js/inline_onpage_data.js"></script>
<script>

 // function change_banner_sides_popup(form)
 // {
	 
	 // alert(form);
	 
 // }
 $(document).ready(function(){
 
  $('#banner_sided').prop('disabled', 'disabled');
    });
function change_banner_sides_popup(form){
	
	//alert(form.double_side_type.value)
	
	
        if(form.double_side_type.value=="both_different") {
            $(document).ready(function(){
                    var elem = $(this).closest('.item');
                    $.confirm({
                        'title'     : 'Confirmation',
            'message'   : '<p><span style="color: #ff0000;">Caution: About Banner Both side Different: </span></p><p><span>If You will select Both side banner as Different then it will be change $75.00 when you will add to cart. </span></p><p><span>Base color of banner will be same for both side you cant not change base color. You can change only design.</span></p></p>',
            'buttons'   : {
                'Proceed'   : {
                    'class' : 'blue',
                    'action': function(){
                                            //getPriceOfProduct(document.forms['cart_quantity']);
											//$('#is_frosted').val('Yes');
											
										form.banner_sided.value="front_side";
                                        form.banner_sided.selected="Front";	
										
										form.banner_sided.value="front_side";
									    form.banner_sided.selected="Front";
									    $("#preview_front").removeClass('dis_none') ;
									    $("#preview_back").addClass('dis_none') ;
									    $('#banner_sides_view').val('1');
									  
									    $('#banner_sides_type_view').val('2');
										
                                        $('#banner_sided').prop('disabled', false);     
                    }
                    
                                },
                'Cancel': {
                                    'class': 'gray',
                                    'action': function(){
                                        form.double_side_type.value="both_same";
                                        form.double_side_type.selected="Same";
										
										form.banner_sided.value="front_side";
										  form.banner_sided.selected="Front";
										  $("#preview_front").removeClass('dis_none') ;
										  $("#preview_back").addClass('dis_none') ;
										  $('#banner_sides_view').val('1');
										  
										  $('#banner_sides_type_view').val('1');
																
										 $('#banner_sided').prop('disabled', 'disabled');
										//getPriceOfProduct(document.forms['cart_quantity']);
                                    }   // Nothing to do in this case. You can as well omit the action property.
                    
                }
            }
                    });
        
    
        
                });
            }else{
				  form.banner_sided.value="front_side";
                  form.banner_sided.selected="Front";
				  $("#preview_front").removeClass('dis_none') ;
				  $("#preview_back").addClass('dis_none') ;
				  $('#banner_sides_view').val('1');
				  
				  $('#banner_sides_type_view').val('1');
				  
				  
				  $('#banner_sided').prop('disabled', 'disabled');
            }    

			
    }


function capture_screen_order(form){
  	
	var banner_sides_view=$('#banner_sides_view').val();
	var banner_sides_type_view=$('#banner_sides_type_view').val();
	
	var banner_color=$('#bannercolorcode').val();
	
	var im_ids="<?php echo$_POST['im_id']; ?>";
	var osc="<?php echo$_POST['osc']; ?>";
	
	//alert(banner_sides_type_view);
	//alert(osc);
	if(banner_sides_type_view==1)
	{
		/*
	if(banner_sides_view==1)
	{
		*/
	html2canvas(document.getElementsByClassName("front_print")).then(function(canvas) {
			

		
		var pic=canvas.toDataURL("image/jpeg");
			
            pic = pic.replace(/^data:image\/(png|jpg);base64,/, "");
            $.ajax({
                type: "POST",
                url: "tdesignAPI/capture_banner_design.php",
                data: { 
                    img: pic,im_id:im_ids,osc:osc,sv:"save",banner_sides_type_view:banner_sides_type_view
                },
                cache: false,
                contentType: "application/x-www-form-urlencoded",
                success: function(data, textStatus, request){
			//tb_show("","pop_banner.php?KeepThis=true&TB_iframe=true&height=500&width=600&side=1","");
		
				$("#front_banner_img").attr("src","tdesignAPI/img/banner_design_front.png");
					
            },
            error: function (request, textStatus, errorThrown) {
                alert("some error");
            }
        })
        });
		
		
		
		$("#front_print").css('background-color', '#ffffff') ;
		$("#back_print").css('background-color', '#ffffff') ;
		
		html2canvas(document.getElementsByClassName("front_print")).then(function(canvas) {
			
			
		var pic=canvas.toDataURL("image/jpeg");
			
            pic = pic.replace(/^data:image\/(png|jpg);base64,/, "");
            $.ajax({
                type: "POST",
                url: "tdesignAPI/capture_banner_design_white.php",
                data: { 
                   img: pic,im_id:im_ids,osc:osc,sv:"save",banner_sides_type_view:banner_sides_type_view
                },
                cache: false,
                contentType: "application/x-www-form-urlencoded",
                success: function(data, textStatus, request){
			//tb_show("","pop_banner.php?KeepThis=true&TB_iframe=true&height=500&width=600&side=1","");
		
				$("#front_banner_img").attr("src","tdesignAPI/img/banner_design_front.png");
				
				$("#front_print").css('background-color', ''+banner_color+'') ;
				$("#front_print").css('background-color', ''+banner_color+'') ;
		$("form[name='cart_quantity']").submit();
				//$("#front_print").css('background-color', '#ffffff') ;
            },
            error: function (request, textStatus, errorThrown) {
                alert("some error");
            }
        })
        });
	/*
	}
	else{
	html2canvas(document.getElementsByClassName("back_print")).then(function(canvas) {
			
			
		var pic=canvas.toDataURL("image/jpeg");
			
            pic = pic.replace(/^data:image\/(png|jpg);base64,/, "");
            $.ajax({
                type: "POST",
                url: "tdesignAPI/capture_banner_design_back.php",
                data: { 
                    img: pic,im_id:im_ids,osc:osc
                },
                cache: false,
                contentType: "application/x-www-form-urlencoded",
                success: function(data, textStatus, request){
			tb_show("","pop_banner_back.php?KeepThis=true&TB_iframe=true&height=500&width=600&side=2","");
				
		$("#front_banner_img_back").attr("src","tdesignAPI/img/banner_design_front.png");
				
				
				
            },
            error: function (request, textStatus, errorThrown) {
                alert("some error");
            }
        })
        });
			
		
	}	
	*/	
	}
	else{
		
		$("#preview_back").removeClass('dis_none') ;
		$("#preview_front").removeClass('dis_none') ;
		
		html2canvas(document.getElementsByClassName("front_print")).then(function(canvas) {
			
			
		var pic=canvas.toDataURL("image/jpeg");
			
            pic = pic.replace(/^data:image\/(png|jpg);base64,/, "");
            $.ajax({
                type: "POST",
                url: "tdesignAPI/capture_banner_design.php",
                data: { 
                    img: pic,im_id:im_ids,osc:osc,sv:"save",banner_sides_type_view:banner_sides_type_view
                },
                cache: false,
                contentType: "application/x-www-form-urlencoded",
                success: function(data, textStatus, request){
			//tb_show("","pop_banner.php?KeepThis=true&TB_iframe=true&height=500&width=600&side=1","");
		
				$("#front_banner_img").attr("src","tdesignAPI/img/banner_design_front.png");
				$("#preview_front").removeClass('dis_none') ;
				$("#preview_back").addClass('dis_none') ;
				
				//$("form[name='cart_quantity']").submit();	
            },
            error: function (request, textStatus, errorThrown) {
                alert("some error");
            }
        })
        });
		
		
		$("#preview_back").removeClass('dis_none') ;
		html2canvas(document.getElementsByClassName("back_print")).then(function(canvas) {
			
			
		var pic=canvas.toDataURL("image/jpeg");
			
            pic = pic.replace(/^data:image\/(png|jpg);base64,/, "");
            $.ajax({
                type: "POST",
                url: "tdesignAPI/capture_banner_design_back.php",
                data: { 
                    img: pic,im_id:im_ids,osc:osc,sv:"save",banner_sides_type_view:banner_sides_type_view
                },
                cache: false,
                contentType: "application/x-www-form-urlencoded",
                success: function(data, textStatus, request){
			//tb_show("","pop_banner_both.php?KeepThis=true&TB_iframe=true&height=500&width=600&side=2","");
				
		$("#front_banner_img_back").attr("src","tdesignAPI/img/banner_design_front.png");
				$("#preview_front").removeClass('dis_none') ;
				$("#preview_back").addClass('dis_none') ;
				
				//$("form[name='cart_quantity']").submit();	
				
            },
            error: function (request, textStatus, errorThrown) {
                alert("some error");
            }
        })
        });
		
		
		
		
		
		$("#preview_back").removeClass('dis_none') ;
		$("#preview_front").removeClass('dis_none') ;
		
		
		$("#front_print").css('background-color', '#ffffff') ;
		$("#back_print").css('background-color', '#ffffff') ;
		
		html2canvas(document.getElementsByClassName("front_print")).then(function(canvas) {
			
			
		var pic=canvas.toDataURL("image/jpeg");
			
            pic = pic.replace(/^data:image\/(png|jpg);base64,/, "");
            $.ajax({
                type: "POST",
                url: "tdesignAPI/capture_banner_design_white.php",
                data: { 
                    img: pic,im_id:im_ids,osc:osc,sv:"save",banner_sides_type_view:banner_sides_type_view
                },
                cache: false,
                contentType: "application/x-www-form-urlencoded",
                success: function(data, textStatus, request){
			//tb_show("","pop_banner.php?KeepThis=true&TB_iframe=true&height=500&width=600&side=1","");
		
				$("#front_banner_img").attr("src","tdesignAPI/img/banner_design_front.png");
				$("#preview_front").removeClass('dis_none') ;
				$("#preview_back").addClass('dis_none') ;
				
				
            },
            error: function (request, textStatus, errorThrown) {
                alert("some error");
            }
        })
        });
		
		
		$("#preview_back").removeClass('dis_none') ;
		html2canvas(document.getElementsByClassName("back_print")).then(function(canvas) {
			
			
		var pic=canvas.toDataURL("image/jpeg");
			
            pic = pic.replace(/^data:image\/(png|jpg);base64,/, "");
            $.ajax({
                type: "POST",
                url: "tdesignAPI/capture_banner_design_back_white.php",
                data: { 
                    img: pic,im_id:im_ids,osc:osc,sv:"save",banner_sides_type_view:banner_sides_type_view
                },
                cache: false,
                contentType: "application/x-www-form-urlencoded",
                success: function(data, textStatus, request){
			//tb_show("","pop_banner_both.php?KeepThis=true&TB_iframe=true&height=500&width=600&side=2","");
				
		$("#front_banner_img_back").attr("src","tdesignAPI/img/banner_design_front.png");
				$("#preview_front").removeClass('dis_none') ;
				$("#preview_back").addClass('dis_none') ;
				
				
		$("#front_print").css('background-color', ''+banner_color+'') ;
		$("#back_print").css('background-color', ''+banner_color+'') ;
		
		$("form[name='cart_quantity']").submit();	
				
            },
            error: function (request, textStatus, errorThrown) {
                alert("some error");
            }
        })
        });
		
		
		
		
		
		
	}
	
		
        
		
		

 }


 

  function capture_screen(){
  	
	var banner_sides_view=$('#banner_sides_view').val();
	var banner_sides_type_view=$('#banner_sides_type_view').val();
	
	var im_ids="<?php echo$_POST['im_id']; ?>";
	var osc="<?php echo$_POST['osc']; ?>";
	
	
	var banner_color=$('#bannercolorcode').val();
	
	//alert(banner_sides_type_view);
	//alert(osc);
	if(banner_sides_type_view==1)
	{
		/*
	if(banner_sides_view==1)
	{
		*/
		
	html2canvas(document.getElementsByClassName("front_print")).then(function(canvas) {
			
			
		var pic=canvas.toDataURL("image/png");
			
            pic = pic.replace(/^data:image\/(png|jpg);base64,/, "");
            $.ajax({
                type: "POST",
                url: "tdesignAPI/capture_banner_design.php",
                data: { 
                    img: pic,im_id:im_ids,osc:osc,sv:"",banner_sides_type_view:banner_sides_type_view
                },
                cache: false,
                contentType: "application/x-www-form-urlencoded",
                success: function(data, textStatus, request){
			//tb_show("","pop_banner.php?KeepThis=true&TB_iframe=true&height=500&width=600&side=1","");
		
				$("#front_banner_img").attr("src","tdesignAPI/img/banner_design_front.png");
				//$("#front_print").css('background-color', '#ffffff') ;
            },
            error: function (request, textStatus, errorThrown) {
                alert("some error");
            }
        })
        });
		
		$("#front_print").css('background-color', '') ;
		$("#back_print").css('background-color', '') ;
		
		$("#front_print").css('background-image', 'url("tdesignAPI/img/imghss.png")') ;
		$("#back_print").css('background-color', 'url("tdesignAPI/img/imghss.png")') ;
		
		
		
		let el = document.querySelector("#front_print")
		html2canvas(el,{backgroundColor:null}).then(canvas => {
		
		//html2canvas(document.getElementsByClassName("front_print")).then(function(canvas) {
			
		
		var pic=canvas.toDataURL("image/jpeg");
			
	
            pic = pic.replace(/^data:image\/(png|jpg);base64,/, "");
			
			
			
            $.ajax({
                type: "POST",
                url: "tdesignAPI/capture_banner_design_white.php",
                data: { 
                    img: pic,im_id:im_ids,osc:osc,sv:"",banner_sides_type_view:banner_sides_type_view
                },
                cache: false,
                contentType: "application/x-www-form-urlencoded",
                success: function(data, textStatus, request){
			tb_show("","pop_banner.php?KeepThis=true&TB_iframe=true&height=500&width=600&side=1","");
		
				$("#front_banner_img").attr("src","tdesignAPI/img/banner_design_front.png");
				
				$("#front_print").css('background-color', ''+banner_color+'') ;
				$("#front_print").css('background-color', ''+banner_color+'') ;
		
				//$("#front_print").css('background-color', '#ffffff') ;
            },
            error: function (request, textStatus, errorThrown) {
                alert("some error");
            }
        })
        });
		
	/*
	}
	else{
	html2canvas(document.getElementsByClassName("back_print")).then(function(canvas) {
			
			
		var pic=canvas.toDataURL("image/jpeg");
			
            pic = pic.replace(/^data:image\/(png|jpg);base64,/, "");
            $.ajax({
                type: "POST",
                url: "tdesignAPI/capture_banner_design_back.php",
                data: { 
                    img: pic,im_id:im_ids,osc:osc
                },
                cache: false,
                contentType: "application/x-www-form-urlencoded",
                success: function(data, textStatus, request){
			tb_show("","pop_banner_back.php?KeepThis=true&TB_iframe=true&height=500&width=600&side=2","");
				
		$("#front_banner_img_back").attr("src","tdesignAPI/img/banner_design_front.png");
				
				
				
            },
            error: function (request, textStatus, errorThrown) {
                alert("some error");
            }
        })
        });
			
		
	}	
	*/	
	}
	else{
		
		$("#preview_back").removeClass('dis_none') ;
		$("#preview_front").removeClass('dis_none') ;
		
		
		html2canvas(document.getElementsByClassName("front_print")).then(function(canvas) {
			
			
		var pic=canvas.toDataURL("image/jpeg");
			
            pic = pic.replace(/^data:image\/(png|jpg);base64,/, "");
            $.ajax({
                type: "POST",
                url: "tdesignAPI/capture_banner_design.php",
                data: { 
                    img: pic,im_id:im_ids,osc:osc,sv:""
                },
                cache: false,
                contentType: "application/x-www-form-urlencoded",
                success: function(data, textStatus, request){
			//tb_show("","pop_banner.php?KeepThis=true&TB_iframe=true&height=500&width=600&side=1","");
		
				$("#front_banner_img").attr("src","tdesignAPI/img/banner_design_front.png");
				$("#preview_front").removeClass('dis_none') ;
				$("#preview_back").addClass('dis_none') ;
				
				
            },
            error: function (request, textStatus, errorThrown) {
                alert("some error");
            }
        })
        });
		
		
		$("#preview_back").removeClass('dis_none') ;
		html2canvas(document.getElementsByClassName("back_print")).then(function(canvas) {
			
			
		var pic=canvas.toDataURL("image/jpeg");
			
            pic = pic.replace(/^data:image\/(png|jpg);base64,/, "");
            $.ajax({
                type: "POST",
                url: "tdesignAPI/capture_banner_design_back.php",
                data: { 
                    img: pic,im_id:im_ids,osc:osc,sv:""
                },
                cache: false,
                contentType: "application/x-www-form-urlencoded",
                success: function(data, textStatus, request){
			//tb_show("","pop_banner_both.php?KeepThis=true&TB_iframe=true&height=500&width=600&side=2","");
				
		$("#front_banner_img_back").attr("src","tdesignAPI/img/banner_design_front.png");
				$("#preview_front").removeClass('dis_none') ;
				$("#preview_back").addClass('dis_none') ;
				
            },
            error: function (request, textStatus, errorThrown) {
                alert("some error");
            }
        })
        });
		
		
		
		
		$("#preview_back").removeClass('dis_none') ;
		$("#preview_front").removeClass('dis_none') ;
		
		
		$("#front_print").css('background-color', '#ffffff') ;
		$("#back_print").css('background-color', '#ffffff') ;
		
		html2canvas(document.getElementsByClassName("front_print")).then(function(canvas) {
			
			
		var pic=canvas.toDataURL("image/jpeg");
			
            pic = pic.replace(/^data:image\/(png|jpg);base64,/, "");
            $.ajax({
                type: "POST",
                url: "tdesignAPI/capture_banner_design_white.php",
                data: { 
                    img: pic,im_id:im_ids,osc:osc,sv:""
                },
                cache: false,
                contentType: "application/x-www-form-urlencoded",
                success: function(data, textStatus, request){
			//tb_show("","pop_banner.php?KeepThis=true&TB_iframe=true&height=500&width=600&side=1","");
		
				$("#front_banner_img").attr("src","tdesignAPI/img/banner_design_front.png");
				$("#preview_front").removeClass('dis_none') ;
				$("#preview_back").addClass('dis_none') ;
				
				
            },
            error: function (request, textStatus, errorThrown) {
                alert("some error");
            }
        })
        });
		
		
		$("#preview_back").removeClass('dis_none') ;
		html2canvas(document.getElementsByClassName("back_print")).then(function(canvas) {
			
			
		var pic=canvas.toDataURL("image/jpeg");
			
            pic = pic.replace(/^data:image\/(png|jpg);base64,/, "");
            $.ajax({
                type: "POST",
                url: "tdesignAPI/capture_banner_design_back_white.php",
                data: { 
                    img: pic,im_id:im_ids,osc:osc,sv:""
                },
                cache: false,
                contentType: "application/x-www-form-urlencoded",
                success: function(data, textStatus, request){
			tb_show("","pop_banner_both.php?KeepThis=true&TB_iframe=true&height=500&width=600&side=2","");
				
		$("#front_banner_img_back").attr("src","tdesignAPI/img/banner_design_front.png");
				$("#preview_front").removeClass('dis_none') ;
				$("#preview_back").addClass('dis_none') ;
				
				
		$("#front_print").css('background-color', ''+banner_color+'') ;
		$("#back_print").css('background-color', ''+banner_color+'') ;
		
				
            },
            error: function (request, textStatus, errorThrown) {
                alert("some error");
            }
        })
        });
		
		
		
	}
	
		
        
		
		

 }


function myFunction2(form){
	//$("form[name='cart_quantity']").submit();	 
 }



	//$('input[type=file]').bootstrapFileInput();
	//$('.file-inputs').bootstrapFileInput();
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				image_icon(e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}


	$("#imgInp").change(function() {
		readURL(this);
	});

</script>
<style>

#TB_window{width: 733px !important;}
#TB_iframeContent{width: 715px !important;}

   .message_p{
        position:relative;
        z-index: 1000000;
    }
    .message_w{
       /* position:absolute;
        color:#C7F900;
        text-shadow:2px 2px 3px #111;
        font-size: 16px;
        right:15px;
        bottom:-460px;
        background: url('images/login-bg.png');
        padding:5px;
        border-radius:10px;
        font-weight: bold;
        text-align: center;
        width: 400px;
        border: 2px solid #ff0000;*/
        
        color:#C7F900 !important;
        text-shadow:2px 2px 3px #111;
        font-size: 18px;
        //border: 2px solid #ff0000;
        //background: url('images/login-bg.png');
        padding:5px;
        border-radius:4px;
        font-weight: bold;
        
        width: 585px;
        height:67px                
    }
    table#cart-form tr td .next_button{
        background-color:green !important;
        box-shadow: none;
        font-weight: bold;
    }
	
	
	
	.item{
	/*background: url("img/shadow_wide.png") no-repeat center bottom;*/
	padding-bottom: 6px;
	display: inline-block;
	margin-bottom: 30px;
	position:relative;
}

.item .delete{
	/*background:url('img/delete_icon.png') no-repeat;*/
	width:37px;
	height:38px;
	position:absolute;
	cursor:pointer;
	top:10px;
	right:-80px
}
.heading_all{
    color:white; 
    margin-bottom:0px;
    margin-top:5px;
    font-size:16px;
    text-shadow: 1px 1px black,1px 1px black,1px 1px black,1px 1px black;
}
.item a{
	background-color: #FAFAFA;
	border: none;
	display: block;
	padding: 10px;
	text-decoration: none;
}

.item:first-child .delete:before{
	background:url('img/tooltip.png') no-repeat;
	content:'.';
	text-indent:-9999px;
	overflow:hidden;
	width:145px;
	height:90px;
	position:absolute;
	right:-110px;
	top:-95px;
}

.item a img{
	display:block;
	border:none;
}
.c_msg{background:none;}

#confirmOverlay{
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	background:url('jquery.confirm/ie.png');
	background: -moz-linear-gradient(rgba(11,11,11,0.1), rgba(11,11,11,0.6)) repeat-x rgba(11,11,11,0.2);
	background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(11,11,11,0.1)), to(rgba(11,11,11,0.6))) repeat-x rgba(11,11,11,0.2);
	z-index:100000;
}

#confirmBox{
	background:url('jquery.confirm/ep8-body_bg.jpg') repeat-x left bottom #ffffff;
	width:460px;
	position:fixed;
	left:50%;
	top:20%;
	margin:-130px 0 0 -230px;
	border: 1px solid rgba(33, 33, 33, 0.6);
	
	-moz-box-shadow: 0 0 2px rgba(255, 255, 255, 0.6) inset;
	-webkit-box-shadow: 0 0 2px rgba(255, 255, 255, 0.6) inset;
	box-shadow: 0 0 2px rgba(255, 255, 255, 0.6) inset;
}

#confirmBox h1,
#confirmBox p{
	font:26px/1 'Cuprum','Lucida Sans Unicode', 'Lucida Grande', sans-serif;
	background:url('jquery.confirm/ep8-body_bg.jpg') repeat-x left bottom #ffffff;
	padding: 18px 25px;
	text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.6);
	color:#666;
	text-align:justify;
}

#confirmBox h1{
	letter-spacing:0.3px;
	color:#888;
}

#confirmBox p{
	background:none;
	font-size:16px;
	line-height:1.4;
	padding-top: 1px;
}

#confirmButtons{
	padding:15px 0 25px;
	text-align:center;
}

#confirmBox .button{
	display:inline-block;
	background:url('jquery.confirm/buttons.png') no-repeat;
	color:white;
	position:relative;
	height: 33px;
	
	font:17px/33px 'Cuprum','Lucida Sans Unicode', 'Lucida Grande', sans-serif;
	
	margin-right: 15px;
	padding: 0 35px 0 40px;
	text-decoration:none;
	border:none;
}

#confirmBox .button:last-child{	margin-right:0;}

#confirmBox .button span{
	position:absolute;
	top:0;
	right:-5px;
	background:url('jquery.confirm/buttons.png') no-repeat;
	width:5px;
	height:33px
}

#confirmBox .blue{				background-position:left top;text-shadow:1px 1px 0 #5889a2;}
#confirmBox .blue span{			background-position:-195px 0;}
#confirmBox .blue:hover{		background-position:left bottom;}
#confirmBox .blue:hover span{	background-position:-195px bottom;}

#confirmBox .gray{				background-position:-200px top;text-shadow:1px 1px 0 #707070;}
#confirmBox .gray span{			background-position:-395px 0;}
#confirmBox .gray:hover{		background-position:-200px bottom;}
#confirmBox .gray:hover span{	background-position:-395px bottom;}
	
	ul.option1 {
    background: none repeat scroll 0 0 #393A35;
    border: 0 solid #888888;
    float: right;
    margin: 2px;
    padding: 0;
    width: 170px;
}
</style>


