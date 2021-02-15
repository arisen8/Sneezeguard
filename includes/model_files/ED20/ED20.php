
<?php
$post_height = '';
$facelengthA = '';
$facelengthB = '';
$facelengthC = '';
$facelengthD = '';
$glass_type = 'Square';
$finish_type = 'SS';
$flange = '0';
$lightbar = '0';
$endpanel = 4;
$right_end = '';
$left_end = '';
$countertop = '';
$shelve = '';
$post_height = $HTTP_GET_VARS['post_height'];
$facelengthA = $HTTP_GET_VARS['facelengthA'];
$facelengthB = $HTTP_GET_VARS['facelengthB'];

$facelengthccc = $HTTP_GET_VARS['facelengthC'];
if (strpos($facelengthccc, 'W') !== false) {

	$ccarray = explode("W", $facelengthccc);
	$facelengthC = $ccarray[1];
} else {
	$facelengthC = $facelengthccc;
}

$facelengthD = $HTTP_GET_VARS['facelengthD'];
$glass_type = $HTTP_GET_VARS['glass_type'];
$finish_type = $HTTP_GET_VARS['finish_type'];
$flange = $HTTP_GET_VARS['flange'];
$lightbar = $HTTP_GET_VARS['lightbar'];
$endpanel = $HTTP_GET_VARS['endpanel'];
$right_end = $HTTP_GET_VARS['right_end'];
$left_end = $HTTP_GET_VARS['left_end'];
$countertop = $HTTP_GET_VARS['countertop'];
$shelve = $HTTP_GET_VARS['shelve'];
$im_id = rand();
if (isset($_SESSION["scr"])) {
	$_SESSION['scr'] = $_SESSION['scr'] . "-" . $im_id;
} else {
	$_SESSION['scr'] = $im_id;
}

?>
<script type="text/javascript">
	var tot1 = osc = im_id = img_ajx = "";
	<?php
	if (isset($HTTP_GET_VARS['id'])) {
		$product = "select count(*) as total from " . TABLE_PRODUCTS . " as p, " . TABLE_PRODUCTS_DESCRIPTION . " as pd, " . TABLE_PRODUCTS_TO_CATEGORIES . " as pc where p.products_id=pd.products_id and pd.products_id=pc.products_id and pc.categories_id=" . $HTTP_GET_VARS['id'] . " and pd.language_id=" . (int)$languages_id;
		$product = tep_db_query($product);
		$products = tep_db_fetch_array($product);
	}
	?>
	arr_len = <?= $products['total'] ?>;
	<?php if ($category_name != 'EP5') { ?>
		arr_len = parseInt(arr_len) + 7;
	<?php } ?>
	var product_name_price = new Array(arr_len);
	<?php
	if (isset($HTTP_GET_VARS['id'])) {
		$product = "select p.products_id as id, pd.products_name as name, p.products_price as price from " . TABLE_PRODUCTS . " as p, " . TABLE_PRODUCTS_DESCRIPTION . " as pd, " . TABLE_PRODUCTS_TO_CATEGORIES . " as pc where p.products_id=pd.products_id and pd.products_id=pc.products_id and pc.categories_id=" . $HTTP_GET_VARS['id'] . " and pd.language_id=" . (int)$languages_id;
		$product = tep_db_query($product);
		while ($products = tep_db_fetch_array($product)) { ?>
			product_name_price['<?= $products['name'] ?>'] = new Array("<?= $products['id'] ?>", "<?= $products['price'] ?>");
			<?php }
		if ($HTTP_GET_VARS['id'] == 81) {
			$product = "select p.products_id as id, pd.products_name as name, p.products_price as price from " . TABLE_PRODUCTS . " as p, " . TABLE_PRODUCTS_DESCRIPTION . " as pd, " . TABLE_PRODUCTS_TO_CATEGORIES . " as pc where p.products_id=pd.products_id and pd.products_id=pc.products_id and pc.categories_id=80 and pd.language_id=" . (int)$languages_id;
			$product = tep_db_query($product);
			while ($products = tep_db_fetch_array($product)) { ?>
				product_name_price['<?= $products['name'] ?>'] = new Array("<?= $products['id'] ?>", "<?= $products['price'] ?>");
	<?php }
		}
	}
	?>
</script>
<script src="jquery.confirm/jquery.confirm.js"></script>

<?php if ($_REQUEST['type'] == '1BAY') { ?>
	<style>
		div.left {
			top: 77%;
   			 left: 8%;

		}

		div.right {
			top: 74%;
   			 left: 16%;

		}

		div.post {
			top: 40%;
    		left: 90%;
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
			top: 73%;
    		left: 65%;
		}

		div.total {
			top: 79%;
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
	</style>
<?php }
if ($_REQUEST['type'] == '2BAY') { ?>
	<style>
		div.left {
			top: 77%;
   			 left: 8%;

		}

		div.right {
			top: 74%;
   			 left: 16%;

		}

		div.post {
			top: 30%;
			left: 92%;
		}

		div.glass_a {
			top: 69%;
   			 left: 55%;
		}

		div.glass_b {
			top: 51%;
    		left: 80%;
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
			top: 64%;
    		left: 76%;
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
if ($_REQUEST['type'] == '3BAY') {
?>
	<style>
		div.left {
			top: 75%;
    		left: 5%;

		}

		div.right {
			top: 72%;
   			 left: 11%;

		}

		div.post {
			top: 31%;
   			 left: 92%;
		}

		div.glass_a {
			top: 69%;
    		left: 43%;

		}

		div.glass_b {
			top: 55%;
    		left: 67%;
		}

		div.glass_c {
			top: 45%;
   			 left: 84%;
		}

		div.glass_d {
			display: none;
		}

		div.glass {
			display: none;
		}

		div.total {
			top: 63%;
			left: 66%;
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
if ($_REQUEST['type'] == '4BAY') { ?>
	<style>
div.left {
top: 77%;
left: 8%;

}

div.right {
top: 74%;
left: 13%;

}

div.post {
top: 27%;
left: 92%;
}

div.glass_a {
top: 69%;
left: 45%;
}

div.glass_b {
top: 54%;
left: 65%;
}

div.glass_c {
top: 45%;
left: 78%;
}

div.glass_d {
top: 38%;
left: 88%;
}

div.glass {
display: none;
}

div.total {
top: 54%;
left: 75%;
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
?>


<table id="cart-form">
	<?php
	?>

	<tr>
		<td>
			<div class="tables-options" id="hidetable1">
				<table cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td colspan=3>
							<center>
								<h2 class="heading_all"><span style="float:left">&nbsp;&nbsp;1)</span>Measurements</h2>
							</center>
						</td>
					</tr>
					<tr id="right_lenght">
						<td><a class="thickbox" href='images/ED20/Depth.jpg'>
								<h1>Countertop Width</h1>
							</a></td>
						<td>
							<select name="right_length" onchange="getPriceOfProduct(this.form)">
								<option value="select">Select</option>
								<?php for ($i = 12; $i <= 36; $i++) { ?>
									<?php
									if ($i == $countertop) {
									?>

										<option value="<?php echo $i; ?>" selected><?php echo $i . '"'; ?></option>

									<?php
									} else {
									?>
										<option value="<?php echo $i; ?>"><?php echo $i . '"'; ?></option>

									<?php
									}

									?>

								<?php } ?>
							</select>
						</td>
						<td width="11%">
							<span id="errormsgfirstname">
								<img id="count_err" src="img/iconCheckOff.gif">
							</span>
						</td>
					</tr>

					<?php if ($_REQUEST['type'] == '1BAY') {

						echo    '<tr>
                                <td><a class="thickbox" href="images/ED20/1bay_faceA.jpg"><h1>Face Length A</h1></a></td>
                                <td>
									<span id="face_length_span">
                                    <select name="face_length"  id="face_length" onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">';
						echo '
										<option value="select">Select</option>';
										
									echo dropdown_option_facelength_custom_mod($facelengthA);
					
						echo '
										
										
										<option value="No Glass">No Glass</option>
										';


						echo '</select>
									</span>
                                </td>
                                <td>
                                	<span id="errormsgfirstname">
                                    	<img id="glass_a_err" src="img/iconCheckOff.gif">
                                	</span>
                                </td>
                            </tr>';
					}
					if ($_REQUEST['type'] == '2BAY') {
						echo '<tr>
                            <td><a class="thickbox" href="images/ED20/2bay_faceA.jpg"><h1>Face Length A</h1></a></td>
                            <td>
								<span id="face_length_a_span">
                                <select name="face_length_a" id="face_length_a" onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">';




						echo '
										<option value="select">Select</option>
										';
										
									echo dropdown_option_facelength_custom_mod($facelengthB);
						echo '
										<option value="No Glass">No Glass</option>
										';
						echo ' </select>
								</span>
                            </td>
                            <td>
                            	<span id="errormsgfirstname">
                                    <img id="glass_a_err" src="img/iconCheckOff.gif">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td><a class="thickbox" href="images/ED20/2bay_faceB.jpg"><h1>Face Length B</h1></a></td>
                            <td>
								<span id="face_length_b_span">
                                <select name="face_length_b" id="face_length_b" onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">';




						echo '
										<option value="select">Select</option>
									';
										
									echo dropdown_option_facelength_custom_mod($facelengthC);

						echo '
										
										
										<option value="No Glass">No Glass</option>
										';


						echo '</select>
								</span>
                            </td>
                            <td>
                            	<span id="errormsgfirstname">
                                    <img id="glass_b_err" src="img/iconCheckOff.gif">
                                </span>
                            </td>
                        </tr>';
					}
					if ($_REQUEST['type'] == '3BAY') {
						echo '<tr>
                            <td><a class="thickbox" href="images/ED20/3bay_faceA.jpg"><h1>Face Length A</h1></a></td>
                            <td>
								<span id="face_length_a_span">
                                <select name="face_length_a" id="face_length_a" onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">';




						echo '
										<option value="select">Select</option>
										';
										
									echo dropdown_option_facelength_custom_mod($facelengthA);
						echo '
										
										
										<option value="No Glass">No Glass</option>
										';


						echo ' </select>
								</span>
                            </td>
                            <td>
                            	<span id="errormsgfirstname">
                                    <img id="glass_a_err" src="img/iconCheckOff.gif">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td><a class="thickbox" href="images/ED20/3bay_faceB.jpg"><h1>Face Length B</h1></a></td>
                            <td>
							<span id="face_length_b_span">
                                <select name="face_length_b" id="face_length_b" onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">';




						echo '
										<option value="select">Select</option>
										';
										
									echo dropdown_option_facelength_custom_mod($facelengthB);

						echo '
										
										
										<option value="No Glass">No Glass</option>
										';


						echo '</select>
								</span>
                            </td>
                            <td>
                            	<span id="errormsgfirstname">
                                    <img id="glass_b_err" src="img/iconCheckOff.gif">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td><a class="thickbox" href="images/ED20/3bay_faceC.jpg"><h1>Face Length C</h1></a></td>
                            <td>
								<span id="face_length_c_span">
                                <select name="face_length_c" id="face_length_c" onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">';




						echo '
										<option value="select">Select</option>
										';
										
									echo dropdown_option_facelength_custom_mod($facelengthC);

						echo '
										
										
										<option value="No Glass">No Glass</option>
										';


						echo ' </select>
								</span>
                            </td>
                            	
                            <td>
                                <span id="errormsgfirstname">
                                    <img id="glass_c_err" src="img/iconCheckOff.gif">
                                </span>
                            </td>
                        </tr>';
					}
					if ($_REQUEST['type'] == '4BAY') {

						echo '<tr>

                            <td><a class="thickbox" href="images/ED20/4bay_faceA.jpg"><h1>Face Length A</h1></a></td>
                            <td>

								<span id="face_length_a_span">

                                <select name="face_length_a" id="face_length_a" onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">';




						echo '
										<option value="select">Select</option>
										';
										
									echo dropdown_option_facelength_custom_mod($facelengthA);


						echo '
										
										
										<option value="No Glass">No Glass</option>
										';


						echo ' </select>

								</span>

                            </td>
                            <td>
                            	<span id="errormsgfirstname">
                                    <img id="glass_a_err" src="img/iconCheckOff.gif">
                                </span>
                            </td>
                        </tr>

                        <tr>

                            <td><a class="thickbox" href="images/ED20/4bay_faceB.jpg"><h1>Face Length B</h1></a></td>
                            <td>

							<span id="face_length_b_span">

                                <select name="face_length_b" id="face_length_b" onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">';




						echo '
										<option value="select">Select</option>
										';
										
									echo dropdown_option_facelength_custom_mod($facelengthB);

						echo '
										
										
										<option value="No Glass">No Glass</option>
										';


						echo ' </select>

								</span>

                            </td>
                            <td>
                            	<span id="errormsgfirstname">
                                    <img id="glass_b_err" src="img/iconCheckOff.gif">
                                </span>
                            </td>

                        </tr>

                        <tr>

                            <td><a class="thickbox" href="images/ED20/4bay_faceC.jpg"><h1>Face Length C</h1></a></td>
                            <td>

								<span id="face_length_c_span">

                                <select name="face_length_c" id="face_length_c" onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">';




						echo '
										<option value="select">Select</option>
										';
										
									echo dropdown_option_facelength_custom_mod($facelengthC);

						echo '
										
										
										<option value="No Glass">No Glass</option>
										';


						echo ' </select>

								</span>

                            </td>
                            <td>
	                            <span id="errormsgfirstname">
                                    <img id="glass_c_err" src="img/iconCheckOff.gif">
                                </span>
                            </td>
                        </tr><tr>

                            <td><a class="thickbox" href="images/ED20/4bay_faceD.jpg"><h1>Face Length D</h1></a></td>
                            <td>

								<span id="face_length_d_span">

                                <select name="face_length_d" id="face_length_d" onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">';




						echo '
										<option value="select">Select</option>
										';
										
									echo dropdown_option_facelength_custom_mod($facelengthD);

						echo '
										
										
										<option value="No Glass">No Glass</option>
										';


						echo ' </select>

								</span>

                            </td>
                            	
                            <td>
                                <span id="errormsgfirstname">
                                    <img id="glass_d_err" src="img/iconCheckOff.gif">
                                </span>
                            </td>
                        </tr>';
					} ?>
					<tr>
						<td>
							<a class="thickbox" href="images/ED20/Post_Height.jpg">
								<h1>Post Height</h1>
							</a>
						</td>
						<td>
							<span id="post_height_span">
								<select name="post_height" id="post_height" onchange="getPriceOfProduct(this.form)">
									<option value="select">Select</option>
									<?php

									if ($post_height == '12') {
										echo '<option value="12" selected>12"</option>';
									} else {
										echo '<option value="12">12"</option>';
									}


									echo '<option value="18">12-1/4"</option>
											<option value="18">12-1/2"</option>
											<option value="18">12-3/4"</option>
											<option value="18">13"</option>
											<option value="18">13-1/4"</option>
											<option value="18">13-1/2"</option>
											<option value="18">13-3/4"</option>
											';

									if ($post_height == '14') {
										echo '<option value="18" selected>14"</option>';
									} else {
										echo '<option value="18">14"</option>';
									}
									echo '
											
											<option value="18">14-1/4"</option>
											<option value="18">14-1/2"</option>
											<option value="18">14-3/4"</option>
											<option value="18">15"</option>
											<option value="18">15-1/4"</option>
											<option value="18">15-1/2"</option>
											<option value="18">15-3/4"</option>
											<option value="18">16"</option>
											<option value="18">16-1/4"</option>
											<option value="18">16-1/2"</option>
											<option value="18">16-3/4"</option>
											<option value="18">17"</option>
											<option value="18">17-1/4"</option>
											<option value="18">17-1/2"</option>
											<option value="18">17-3/4"</option>';

									if ($post_height == '18') {
										echo '<option value="18" selected>18"</option>';
									} else {
										echo '<option value="18">18"</option>';
									}
									echo '
											
											<option value="18">18-1/4"</option>
											<option value="18">18-1/2"</option>
											<option value="18">18-3/4"</option>
											<option value="24">19"</option>
											<option value="24">19-1/4"</option>
											<option value="24">19-1/2"</option>
											<option value="24">19-3/4"</option>
											';

									if ($post_height == '20') {
										echo '<option value="24" selected>20"</option>';
									} else {
										echo '<option value="24">20"</option>';
									}
									echo '
											
											<option value="24">20-1/4"</option>
											<option value="24">20-1/2"</option>
											<option value="24">20-3/4"</option>
											';

									if ($post_height == '21') {
										echo '<option value="24" selected>21"</option>';
									} else {
										echo '<option value="24">21"</option>';
									}
									echo '<option value="24">21-1/4"</option>
											<option value="24">21-1/2"</option>
											<option value="24">21-3/4"</option>
											';

									if ($post_height == '22') {
										echo '<option value="24" selected>22"</option>';
									} else {
										echo '<option value="24">22"</option>';
									}
									echo '<option value="24">22-1/4"</option>
											<option value="24">22-1/2"</option>
											<option value="24">22-3/4"</option>
											<option value="24">23"</option>
											<option value="24">23-1/4"</option>
											<option value="24">23-1/2"</option>
											<option value="24">23-3/4"</option>
											<option value="24">24"</option>
											<option value="24">24-1/4"</option>
											<option value="24">24-1/2"</option>
											<option value="24">24-3/4"</option>
											<option value="24">25"</option>
											<option value="24">25-1/4"</option>
											<option value="24">25-1/2"</option>
											<option value="24">25-3/4"</option>
											<option value="24">26"</option>
											<option value="24">26-1/4"</option>
											<option value="24">26-1/2"</option>
											<option value="24">26-3/4"</option>
											<option value="24">27"</option>
											<option value="24">27-1/4"</option>
											<option value="24">27-1/2"</option>
											<option value="24">27-3/4"</option>
											<option value="24">28"</option>
											<option value="24">28-1/4"</option>
											<option value="24">28-1/2"</option>
											<option value="24">28-3/4"</option>
											<option value="24">29"</option>
											<option value="24">29-1/4"</option>
											<option value="24">29-1/2"</option>
											<option value="24">29-3/4"</option>
											<option value="24">30"</option>
											
											';

									?>
								</select>
							</span>
						</td>
						<td>
							<span id="errormsgfirstname">
								<img id="post_err" src="img/iconCheckOff.gif">
							</span>
						</td>
					</tr>
					<tr>
						<td>
							<a class="thickbox" href="images/ED20/Mid_Shelves.jpg">
								<h1>Shelves</h1>
							</a>
						</td>
						<td>
							<select name="shelvs_a" onchange="getPriceOfProduct(this.form)">
								<option value="select">Select</option>
								<?php
								if ($shelve == '0') {
									echo '<option value="0" selected>0</option>';
								} else {
									echo '<option value="0">0</option>';
								}
								if ($shelve == '1') {
									echo '<option value="1" selected>1</option>';
								} else {
									echo '<option value="1">1</option>';
								}
								if ($shelve == '2') {
									echo '<option value="2" selected>2</option>';
								} else {
									echo '<option value="2">2</option>';
								}
								?>





							</select>

						</td>
						<td>
							<span id="errormsgfirstname">
								<img id="shelve_err" src="img/iconCheckOff.gif">
							</span>
						</td>
					</tr>




				</table>
			</div>
			<div class="tables-options" id="hidetable2">
				<table cellpadding="0" cellspacing="0" width=100% style="border: 1px solid white;border-radius: 5px;">
					<tr>
						<td colspan=3>
							<center>
								<h2 class="heading_all"><span style="float:left">&nbsp;&nbsp;2)</span>Options</h2>
							</center>
						</td>
					</tr>
					<tr>
						<td>
							<a class="thickbox" href="images/ED20/End_panels.jpg">
								<h1>End Panels</h1>
							</a>
						</td>
						<td>
							<select class="option" id="end_options" onchange="show_panel_type(this.form)">
								<option value="select">Select</option>
								<?php
								if ($endpanel == 1) {
									echo '<option value="Both Closed End Panels" selected>Both Ends</option>';
								} else {
									echo '<option value="Both Closed End Panels">Both Ends</option>';
								}
								if ($endpanel == 2) {
									echo '<option value="Right Closed End Panel" selected>Right End</option>';
								} else {
									echo '<option value="Right Closed End Panel">Right End</option>';
								}
								if ($endpanel == 3) {
									echo '<option value="Left Closed End Panel" selected>Left End</option>';
								} else {
									echo '<option value="Left Closed End Panel">Left End</option>';
								}
								if ($endpanel == 4) {
									echo '<option value="No Closed End Panels" selected>No Ends</option>';
								} else {
									echo '<option value="No Closed End Panels">No Ends</option>';
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
							<select name="flang_cover" style="margin:4px;" onchange="getPriceOfProduct(this.form);">
								<option value="select">Select</option>
								<?php
								if ($flange == 1) {
									echo '<option value="yes" selected>Yes</option>';
								} else {
									echo '<option value="yes">Yes</option>';
								}
								if ($flange == 0) {
									echo '<option value="no" selected>No</option>';
								} else {
									echo '<option value="no">No</option>';
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
						<td class="test-flang"><a class="thickbox" href='flang_under_counter.php?type=adj&KeepThis=true&TB_iframe=true&height=480&width=640'>
								<h1>Flange Under Counter</h1>
							</a></td>
						<td>
							<select name="flange_under_counter" style="margin:4px; float: right;" align="right" onchange="getPriceOfProduct(this.form);">
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
					<td class="test-light"><a class="light-bar-pricing" data-model-name="<?=$category_name;?>"><h1>Light Bar</h1></a></td>
						<td>
							<select name="light_bar" id="checkbox2" style="margin:4px;" onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
								<option value="select">Select</option>

								<?php
								if ($lightbar == 1) {
									echo '<option value="yes" selected>Yes</option>';
								} else {
									echo '<option value="yes">Yes</option>';
								}
								if ($lightbar == 0) {
									echo '<option value="no" selected>No</option>';
								} else {
									echo '<option value="no">No</option>';
								}
								?>

							</select>
							<!-- <input type="checkbox" name="light_bar" id="checkbox2"value="0" style="margin:4px;" onclick="getPriceOfProduct(this.form);" disabled="disabled"/>     -->
						</td>
						<td>
							<span id="errormsgfirstname">
								<img id="light_err" src="img/iconCheckOff.gif">
							</span>
						</td>
					</tr>
					<tr>
						<td>
							<a class="thickbox" href='images/Finishes.jpg'>
								<h1>Post Finish</h1>
							</a></td><td>
							
							<select name="choose_finish"  onchange="getPriceOfProduct(this.form)">
								<?php
								if ($finish_type == 'SS') {
									echo '<option value="SS" selected>Brushed Stainless</option>';
								} else {
									echo '<option value="SS">Brushed Stainless</option>';
								}
								if ($finish_type == 'CB') {
									echo '<option value="PC" selected>Coated Black</option>';
								} else {
									echo '<option value="PC">Coated Black</option>';
								}
								?>



								<!--<option value="AL">Brushed Aluminum</option>-->
							</select>
						</td>
						<td>
							<span id="errormsgfirstname">
								<img id="finish_err" src="img/iconCheckOff.gif">
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

		<table id="cart-form" class="price" cellpadding="0" cellspacing="0" width="100%" valign="top">
			<tbody>
				<tr>
					<td colspan=2>
						<center>
							<h2 class="heading_all"><span style="float:left">&nbsp;&nbsp;3)</span>Quote</h2>
						</center>
					</td>
				</tr>
				<tr>
					<td align="left">Left Panel:</td>
					<td id="left-Panel" align="right">0.00</td>
				</tr>
				<tr>
					<td align="left">Right Panel:</td>
					<td id="right-panel" align="right">0.00</td>
				</tr>
				<tr>
					<td align="left">End Panel Bullet:</td>
					<td id="flange-cover2" align="right">0.00</td>
				</tr>
				<tr>
					<td align="left">Left Post:</td>
					<td id="left-post" align="right">0.00</td>
				</tr>
				<tr>
					<td align="left">Left Shelf Post:</td>
					<td id="left-post-sel" align="right">0.00</td>
				</tr>
				<tr>
					<td align="left">Right Post:</td>
					<td id="right-post" align="right">0.00</td>
				</tr>
				<tr>
					<td align="left">Right Shelf Post:</td>
					<td id="right-post-sel" align="right">0.00</td>
				</tr>
				<tr>
					<td align="left">Transistions Post:</td>
					<td id="trasition-post" align="right">0.00</td>
				</tr>
				<tr>
					<td align="left">Transistions Shelf Post:</td>
					<td id="trasition-post-sel" align="right">0.00</td>
				</tr>
				<tr>
					<td align="left">Glass:</td>
					<td id="face-glass" align="right">0.00</td>
				</tr>
				<tr>
					<td align="left">TopGlass:</td>
					<td id="top-glass" align="right">0.00</td>
				</tr>
				<tr>
					<td align="left">Light Bar:</td>
					<td id="light-bar" align="right">0.00</td>
				</tr>
				<tr>
					<td align="left">Flange Cover:</td>
					<td id="flang-cover" align="right">0.00</td>
				</tr>


				<tr style="display:none;">
					<td style="font-size:110%;" align="left">Flange Under Counter:</td>
					<td style="font-size:110%;" id="flange-under-counter" align="right">0.00</td>
				</tr>

				<tr style="color:black;border-top:1.5px solid #000;border-bottom:1.5px solid #000;">
					<td align="left" colspan="2" height="2"></td>
				</tr>

				<tr style="background-color: rgb(121 239 40 / 30%);color:black;">
					<td align="left">Total:</td>
					<td id="total" align="right">0.00</td>
				</tr>
			</tbody>
		</table>

	</div>

	<div class="price-icon-wishlist-addtocart">
	<center><h2 class="heading_all" id="addcartandfavorite"><span style="float:left;">&nbsp;&nbsp;&nbsp;4)</span><div class="addcartandfavdiv">Action</div></h2></center>

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

		<input type="hidden" id="c_glass_b_top" name="c_glass_b_top" value="" />
		<input type="hidden" id="c_glass_b_top_val" name="c_glass_b_top_val" value="" />
		<input type="hidden" id="c_glass_b" name="c_glass_b" value="" />
		<input type="hidden" id="c_glass_b_val" name="c_glass_b_val" value="" />


		<input type="hidden" id="c_glass_a_light" name="c_glass_a_light" value="" />
		<input type="hidden" id="c_glass_a_val_light" name="c_glass_a_val_light" value="" />
		<input type="hidden" id="c_glass_b_light" name="c_glass_b_light" value="" />
		<input type="hidden" id="c_glass_b_val_light" name="c_glass_b_val_light" value="" />
		<input type="hidden" id="c_glass_c_light" name="c_glass_c_light" value="" />
		<input type="hidden" id="c_glass_c_val_light" name="c_glass_c_val_light" value="" />
		<input type="hidden" id="c_glass_d_light" name="c_glass_d_light" value="" />
		<input type="hidden" id="c_glass_d_val_light" name="c_glass_d_val_light" value="" />

		<input type="hidden" id="c_glass_c_top" name="c_glass_c_top" value="" />
		<input type="hidden" id="c_glass_c_top_val" name="c_glass_c_top_val" value="" />
		<input type="hidden" id="c_glass_c" name="c_glass_c" value="" />
		<input type="hidden" id="c_glass_c_val" name="c_glass_c_val" value="" />
		<input type="hidden" id="c_glass_d" name="c_glass_d" value="" />
		<input type="hidden" id="c_glass_d_val" name="c_glass_d_val" value="" />
		<input type="hidden" id="c_glass_d_top" name="c_glass_d_top" value="" />
		<input type="hidden" id="c_glass_d_top_val" name="c_glass_d_top_val" value="" />
		<input type="hidden" id="counter" name="counter" value="" />
		<input type="hidden" id="shelves" name="shelves" value="" />
		<input type="hidden" id="is_custom" name="is_custom" value="Yes" />

		<input type="hidden" id="is_frosted" name="is_frosted" value="">

		<input type="hidden" id="product_type" name="product_type" value="<?php echo $category_name; ?>">

		<input type="hidden" name="link" id="link">

		<input type="hidden" id="msg" name="msg" value="">
		<input type="hidden" id="ckall" name="ckall" value="">

		<input type="hidden" name="type" id="type" value="<?php echo $_REQUEST['type'] ?>">
		<input type="hidden" name="glass_face" value="0" id="glass-face" disabled="disabled">
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
			<img src="img/pricing-page/wishlist22.png" style="width:50%;margin-top: 9%;">
			<p>Save to Favorite</p>
			</a>
			</div>
			<div class="col-6 col-md-6 col-sm-6 text-center" id="cart-div">
			<button  onclick="return myFunction2(this.form)" id="add" title=" Add to Cart " alt="Add to Cart"  style="background: none;border: none;outline:none;" >
			<img src="img/pricing-page/add-to-cart23.png" style="margin-top: -2%;">
			<p>Add to Cart</p>
			</button>
		
			</div>
		</div>

	</div>
</div>
<script type="text/javascript">
	var isOpera = !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;

	var isFirefox = typeof InstallTrigger !== 'undefined';
	var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0;

	var isChrome = !!window.chrome && !isOpera;
	var isIE = false || !!document.documentMode;
	if (isFirefox == true) {
		var width_one = 23;
		var width_two = 27;
		width_three = 30;
		right_next = -44;
		width_review = 21;
		redlinebrowser = 33;
		redlinebrowser1 = 33;
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
			var width_two = 27;
			redln = 85;
		} else {
			var width_two = 32;
			redln = 87;
		}
		var width_one = 19;

		width_three = 28;
		right_next = -40;
		width_review = 19;
		redlinebrowser = -30;
		redlinebrowser1 = -30;

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




	choseOption = 0;
	choselength = 0;
	choseRounded = 0;
	choseFlang = 0;
	choseBracket = 0;
	priceOption = 0;
	h = 100;
	h1 = 128;
	h2 = 153;
	h3 = 200;
	h8 = 0;
	t8 = 0;
	osc = "<?= $_REQUEST['osCsid']; ?>";
	im_id = "<?= $im_id; ?>";
	category_name = "<?= $category_name ?>";
</script>
<script src="includes/model_files/ED20/ED20.js"></script>