<?php


//echo'ep11 pages';
//die;	
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


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
//
$post_height = $HTTP_GET_VARS['post_height'];
$facelengthA = $HTTP_GET_VARS['facelengthA'];
$facelengthB = $HTTP_GET_VARS['facelengthB'];
$facelengthC = $HTTP_GET_VARS['facelengthC'];
$facelengthD = $HTTP_GET_VARS['facelengthD'];
$glass_type = $HTTP_GET_VARS['glass_type'];
$finish_type = $HTTP_GET_VARS['finish_type'];
$flange = $HTTP_GET_VARS['flange'];
$lightbar = $HTTP_GET_VARS['lightbar'];
$endpanel = $HTTP_GET_VARS['endpanel'];
$right_end = $HTTP_GET_VARS['right_end'];
$left_end = $HTTP_GET_VARS['left_end'];
$msg = "";
$id = $_GET['id'];
$tp = $_GET['type'];

$rs = tep_db_query("select * from custom_popup where id='" . $id . "'and bay='" . $tp . "'");
$rw = tep_db_fetch_array($rs);
$ms = $rw['message'];
$ms_option = $rw['option_popup'];
$ms_option1 = $rw['opiton1_popup'];
$ms_post = $rw['post_popup'];
$ms_left = $rw['left_popup'];
$ms_right = $rw['right_popup'];
$ms_face = $rw['face_popup'];
$ms_adjustable = $rw['adjustable_popup'];
$ms_cart = $rw['cart_popup'];
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
		div.post {
			top: 36%;
			left: 74%;
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
			top: 58%;
			left: 68%;

		}

		div.total {
			top: 64%;
			left: 72%;
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
		div.post {
			top: 30%;
			left: 81%;
		}

		div.glass_a {
			top: 61%;
			left: 53%;
		}

		div.glass_b {
			top: 34%;
			left: 82%;
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
			top: 48%;
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
if ($_REQUEST['type'] == '3BAY') {
?>
	<style>
		div.post {
			top: 20%;
			left: 89%;
		}

		div.glass_a {
			top: 63%;
			left: 45%;
		}

		div.glass_b {
			top: 40%;
			left: 71%;
		}

		div.glass_c {
			top: 26%;
			left: 86%;
		}

		div.glass_d {
			display: none;
		}

		div.glass {
			display: none;
		}

		div.total {
			top: 45%;
			left: 71%;
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
		div.post {
			top: 16%;
			left: 89%;
		}

		div.glass_a {
			top: 64%;
			left: 34%;
		}

		div.glass_b {
			top: 45%;
			left: 59%;
		}

		div.glass_c {
			top: 31%;
			left: 76%;
		}

		div.glass_d {
			top: 22%;
			left: 88%;
		}

		div.glass {
			display: none;
		}

		div.total {
			    top: 42%;
				left: 68%;
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


//echo dropdown_option_facelength_custom_mod($facelengthA);
?>







<table id="cart-form" style="">
	<?php //include('form_option.php')
	?>

	<tr>
		<td>

			<div class="tables-options" id="hidetable1">
				<table cellpadding="0" cellspacing="0" width="100%" style="">
					<tr>
						<td colspan=3>
							<center>
								<h2 class="heading_all"><span style="float:left">&nbsp;&nbsp;1)</span>Measurements</h2>
							</center>
						</td>
					</tr>
					<tr id="right_lenght" style="display:none">
						<td>
							<h1>Right End</h1>
							<select name="right_length" onchange="getPriceOfProduct(this.form)" disabled="disabled">
								<option value="12">12"</option>
								<option value="18">18"</option>
								<option value="24">24"</option>
							</select>
						</td>
					</tr>
					<tr id="left_lenght" style="display:none;">
						<td>
							<h1>Left End</h1>
							<select name="left_length" onchange="getPriceOfProduct(this.form)" disabled="disabled">
								<option value="12">12"</option>
								<option value="18">18"</option>
								<option value="24">24"</option>
							</select>
						</td>
					</tr>
					<?php if ($_REQUEST['type'] == '1BAY') {
						
						echo    '<tr>
                                <td class="test-lenght1bay"><a class="thickbox" href="images/ES53/1bay_faceA.jpg"><h1>Face Length A</h1></a></td>
                                <td>
									<span id="face_length_span">
                                    <select name="face_length" id="face_length" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                                        ';

						echo '
										<option value="select">Select</option>';
										echo dropdown_option_facelength_custom_mod($facelengthA);
								echo '			
										
										<option value="No Glass">No Glass</option>
										';


						echo '
                                    </select>
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
                            <td class="test-lenght1bay"><a class="thickbox" href="images/ES53/2bay_faceA.jpg"><h1>Face Length A</h1></a></td>
                                <td>
								<span id="face_length_a_span">
                                <select name="face_length_a" id="face_length_a"onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
								      ';

						echo '
										<option value="select">Select</option>
										';
										echo dropdown_option_facelength_custom_mod($facelengthA);
								echo '			
										
										<option value="No Glass">No Glass</option>
										';


						echo '
                                </select>
								</span>
                            </td>
                            <td>
                                <span id="errormsgfirstname">
                                    <img id="glass_a_err" src="img/iconCheckOff.gif">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="test-lenght4bayb"><a class="thickbox" href="images/ES53/2bay_faceB.jpg"><h1>Face Length B</h1></a></td>
                            <td>
								<span id="face_length_b_span">
                                <select name="face_length_b" id="face_length_b"onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                                ';
						echo '
										<option value="select">Select</option>
										';
										echo dropdown_option_facelength_custom_mod($facelengthB);
								echo '			
										
										<option value="No Glass">No Glass</option>
										';



						echo '
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
					if ($_REQUEST['type'] == '3BAY') {
						echo '<tr>
                            <td class="test-lenght1bay"><a class="thickbox" href="images/ES53/3bay_faceA.jpg"><h1>Face Length A</h1></a></td>
                                <td>
							<span id="face_length_a_span">
                                <select name="face_length_a" id="face_length_a"onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                                ';

						echo '
										<option value="select">Select</option>
										';
										echo dropdown_option_facelength_custom_mod($facelengthA);
								echo '			
										
										<option value="No Glass">No Glass</option>
										';

						echo '
                                </select>
								</span>
                            </td>
                            <td>
                                <span id="errormsgfirstname">
                                    <img id="glass_a_err" src="img/iconCheckOff.gif">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="test-lenght4bayb"><a class="thickbox" href="images/ES53/3bay_faceB.jpg"><h1>Face Length B</h1></a></td>
                            <td>
								<span id="face_length_b_span">
                                <select name="face_length_b" id="face_length_b"onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                                ';
						echo '
                                <option value="select">Select</option>
                                ';
										echo dropdown_option_facelength_custom_mod($facelengthB);
								echo '			
										
										<option value="No Glass">No Glass</option>
										';


						echo '
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
                            <td class="test-lenght4bayc"><a class="thickbox" href="images/ES53/3bay_faceC.jpg"><h1>Face Length C</h1></a></td>
                            <td>
								<span id="face_length_c_span">
                                <select name="face_length_c" id="face_length_c" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                                ';
						echo '
                                <option value="select">Select</option>
                                ';
										echo dropdown_option_facelength_custom_mod($facelengthC);
								echo '			
										
										<option value="No Glass">No Glass</option>
										';

						echo '
                                </select>
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
                            <td class="test-lenght1bay"><a class="thickbox" href="images/ES53/4bay_faceA.jpg"><h1>Face Length A</h1></a></td>
                            <td>
							<span id="face_length_a_span">
                                <select name="face_length_a" id="face_length_a"onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                                ';

						echo '
										<option value="select">Select</option>
										';
										echo dropdown_option_facelength_custom_mod($facelengthA);
								echo '			
										
										<option value="No Glass">No Glass</option>
										';


						echo '
                                </select>
								</span>
                            </td>
                            <td>
                                <span id="errormsgfirstname">
                                    <img id="glass_a_err" src="img/iconCheckOff.gif">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="test-lenght4bayb"><a class="thickbox" href="images/ES53/4bay_faceB.jpg"><h1>Face Length B</h1></a></td>
                            <td>
								<span id="face_length_b_span">
                                <select name="face_length_b" id="face_length_b"onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                                ';
						echo '
                                <option value="select">Select</option>
                                ';
										echo dropdown_option_facelength_custom_mod($facelengthB);
								echo '			
										
										<option value="No Glass">No Glass</option>
										';



						echo '
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
                            <td class="test-lenght4bayc"><a class="thickbox" href="images/ES53/4bay_faceC.jpg"><h1>Face Length C</h1></a></td>
                            <td>
								<span id="face_length_c_span">
                                <select name="face_length_c" id="face_length_c" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                                ';
						echo '
                                <option value="select">Select</option>
                                ';
										echo dropdown_option_facelength_custom_mod($facelengthC);
								echo '			
										
										<option value="No Glass">No Glass</option>
										';


						echo '
                                </select>
								</span>
                            </td>
                            <td>
                                <span id="errormsgfirstname">
                                    <img id="glass_c_err" src="img/iconCheckOff.gif">
                                </span>
                            </td>
                        </tr>
						<tr>
                            <td class="test-lenght4bayd"><a class="thickbox" href="images/ES53/4bay_faceD.jpg"><h1>Face Length D</h1></a></td>
                            <td>
								<span id="face_length_d_span">
                                <select name="face_length_d" id="face_length_d" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                                ';
						echo '
                                <option value="select">Select</option>
                                ';
										echo dropdown_option_facelength_custom_mod($facelengthD);
								echo '			
										
										<option value="No Glass">No Glass</option>
										';


						echo '
                                </select>
								</span>
                            </td>
                            <td>
                                <span id="errormsgfirstname">
                                    <img id="glass_d_err" src="img/iconCheckOff.gif">
                                </span>
                            </td>
                        </tr>
						';
					}




					?>


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
							<a class="thickbox" href="images/ES53/End_panels.jpg">
								<h1>End Panels</h1>
							</a>
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
					<tr class="test-finish">
						<td><a class="thickbox" style="text-color:#c7f900 !important" href=<?php echo '"images/' . $category_name . '/RADIUS.jpg"'; ?>>
								<h1>Glass Corners</h1>
							</a></td>
						<td>
							<!-- <input type="checkbox" class="roundcheck" name="rounded_corners" id="round_check" value="<?php echo $value; ?>" style="margin:4px;" onclick="getPriceOfProduct(this.form)" <?php echo $checked; ?> disabled="disabled"/> -->
							<select class="roundcheck" name="rounded_corners" id="round_check" style="margin:4px;" onchange="getPriceOfProduct(this.form)">
								<option value="select">Select</option>
								<option value="squared">Squared</option>
								<option value="round">Rounded</option>
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
							<!-- <a style="width:20px;margin: 0 4px;float: right;" class="thickbox" href='light.php?type=adj&KeepThis=true&TB_iframe=true&height=480&width=640'><img src="images/flang.jpg" ></a>   -->
							<!-- <input type="checkbox" name="flange_covers" value="0" style="margin:4px;" onclick="getPriceOfProduct(this.form);"/>     -->
							<select name="flange_covers" id="lightbarss" style="margin:4px;" onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
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
						<td class="test-flang">
							<div style="position: relative; height:27px;"><a class="thickbox" href='flang_under_counter.php?type=adj&KeepThis=true&TB_iframe=true&height=480&width=640'>
									<h1>Flange Under Counter</h1>
								</a>
						</td>
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






					<tr style="display:none;">
						<td>
							<h1>Light Bracket</h1>
							<a style="width:20px;margin: 0 4px;float: right;" class="thickbox" href='light_bracket.php?type=adj&KeepThis=true&TB_iframe=true&height=480&width=640'><img src="images/flang.jpg"></a>
							<select name="flange_covers_2" onchange="getPriceOfProduct(this.form)" style="width: 68px;">
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><a class="thickbox" href='images/Finishes.jpg'>
								<h1>Post Finish</h1>
							</a>
						</td>
						<td>
							<select name="choose_finish" onchange="getPriceOfProduct(this.form)">
								<option value="SS">Brushed Stainless</option>
								<option value="PC">Coated Black</option>
								<!-- <option value="AL">Brushed Aluminum</option>-->
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



			<div id="cart-form" class="tables-options showtable11">
				<table id="showtable1" align="center" style="display:none" cellpadding="0" cellspacing="0" width=100% style="border: 1px solid white;border-radius: 5px;">
					<tr>
						<td colspan=2>
							<center>
								<h2 class="heading_all"><span style="float:left">&nbsp;&nbsp1)</span>Choose Option</h2>
							</center>
						</td>
					</tr>



					<tr>
						<td class="test-lenght1bay"><a class="thickbox" href="images/ES53/1bay_faceA.jpg">
								<h1>Round Shape</h1>
							</a></td>
						<td>
							<span id="face_length_span">
								<select name="round_type" disabled id="round_type" onchange="getPriceOfProduct(this.form);" style="width: 93px;">
									<!--<option value="Jshape">J-Shape</option>
			 <option value="Lshape">L-Shape</option>-->
									<option value="Jshape">Left Curve</option>
									<option value="Lshape">Right Curve</option>
								</select>
							</span>
						</td>
					</tr>
					<tr style="height:15px;">
						<td colspan="2"></td>
					</tr>





					<?php
					if ($_REQUEST['type'] == '1BAY') {

					?>

						<tr style="height:33px;">
							<td class="test-lenght1bay"><a class="thickbox" href="images/ES53/1bay_faceA.jpg">
									<h1>Round FaceLength A</h1>
								</a></td>
							<td>
								<span id="face_length_span">
									<select name="round_face_length_a" id="round_face_length_a" onchange="getPriceOfProduct(this.form);" disabled style="width: 86px;">
										<option value="no">Straight</option>
										<option value="yes" selected>Curv</option>
									</select>
								</span>
							</td>
						</tr>
						<tr id="radius_a" style="display:none;">
							<td class="test-lenght1bay"><a class="thickbox" href="images/ES53/1bay_faceA.jpg">
									<h1>Radius</h1>
								</a></td>
							<td>
								<span id="round_face_radius_span">
									<select name="round_face_radius_a" id="round_face_radius_a" onchange="getPriceOfProduct(this.form);" style="width: 86px;">
										<?php
										for ($i = 10; $i <= 200; $i++) {

											echo '<option value="' . $i . '">' . $i . '"</option>';
										}
										?>
									</select>
								</span>
							</td>
						</tr>



					<?php
					}
					if ($_REQUEST['type'] == '2BAY') {
					?>

						<tr style="height:33px;">
							<td class="test-lenght1bay"><a class="thickbox" href="images/ES53/1bay_faceA.jpg">
									<h1>Round FaceLength A</h1>
								</a></td>
							<td>
								<span id="face_length_span">
									<select name="round_face_length_a" id="round_face_length_a" onchange="getPriceOfProduct(this.form);" disabled style="width: 86px;">
										<option value="no">Straight</option>
										<option value="yes" selected>Curve</option>
									</select>
								</span>
							</td>
						</tr>
						<tr id="radius_a" style="display:none;">
							<td class="test-lenght1bay"><a class="thickbox" href="images/ES53/1bay_faceA.jpg">
									<h1>Radius</h1>
								</a></td>
							<td>
								<span id="round_face_radius_span">
									<select name="round_face_radius_a" id="round_face_radius_a" onchange="getPriceOfProduct(this.form);" style="width: 86px;">
										<?php
										for ($i = 10; $i <= 200; $i++) {

											echo '<option value="' . $i . '">' . $i . '"</option>';
										}
										?>


									</select>
								</span>
							</td>
						</tr>
						<tr style="height:33px;">
							<td class="test-lenght1bay"><a class="thickbox" href="images/ES53/1bay_faceA.jpg">
									<h1>Round FaceLength B</h1>
								</a></td>
							<td>
								<span id="face_length_span">
									<select name="round_face_length_b" id="round_face_length_b" onchange="getPriceOfProduct(this.form);" disabled style="width: 86px;">
										<option value="no">Straight</option>
										<option value="yes">Curve</option>
									</select>
								</span>
							</td>
						</tr>

						<tr id="radius_b" style="display:none;">
							<td class="test-lenght1bay"><a class="thickbox" href="images/ES53/1bay_faceA.jpg">
									<h1>Radius</h1>
								</a></td>
							<td>
								<span id="round_face_radius_span">
									<select name="round_face_radius_b" id="round_face_radius_b" onchange="getPriceOfProduct(this.form);" style="width: 86px;">

										<?php
										for ($i = 10; $i <= 200; $i++) {

											echo '<option value="' . $i . '">' . $i . '"</option>';
										}
										?>

									</select>
								</span>
							</td>
						</tr>


					<?php
					}
					if ($_REQUEST['type'] == '3BAY') {
					?>

						<tr style="height:33px;">
							<td class="test-lenght1bay"><a class="thickbox" href="images/ES53/1bay_faceA.jpg">
									<h1>Round FaceLength A</h1>
								</a></td>
							<td>
								<span id="face_length_span">
									<select name="round_face_length_a" id="round_face_length_a" onchange="getPriceOfProduct(this.form);" disabled style="width: 86px;">
										<option value="no">Straight</option>
										<option value="yes" selected>Curve</option>
									</select>
								</span>
							</td>
						</tr>
						<tr id="radius_a" style="display:none;">
							<td class="test-lenght1bay"><a class="thickbox" href="images/ES53/1bay_faceA.jpg">
									<h1>Radius</h1>
								</a></td>
							<td>
								<span id="round_face_radius_span">
									<select name="round_face_radius_a" id="round_face_radius_a" onchange="getPriceOfProduct(this.form);" style="width: 86px;">
										<?php
										for ($i = 10; $i <= 200; $i++) {

											echo '<option value="' . $i . '">' . $i . '"</option>';
										}
										?>
									</select>
								</span>
							</td>
						</tr>
						<tr style="height:33px;">
							<td class="test-lenght1bay"><a class="thickbox" href="images/ES53/1bay_faceA.jpg">
									<h1>Round FaceLength B</h1>
								</a></td>
							<td>
								<span id="face_length_span">
									<select name="round_face_length_b" id="round_face_length_b" onchange="getPriceOfProduct(this.form);" disabled style="width: 86px;">
										<option value="no">Straight</option>
										<option value="yes">Curve</option>
									</select>
								</span>
							</td>
						</tr>

						<tr id="radius_b" style="display:none;">
							<td class="test-lenght1bay"><a class="thickbox" href="images/ES53/1bay_faceA.jpg">
									<h1>Radius</h1>
								</a></td>
							<td>
								<span id="round_face_radius_span">
									<select name="round_face_radius_b" id="round_face_radius_b" onchange="getPriceOfProduct(this.form);" style="width: 86px;">
										<?php
										for ($i = 10; $i <= 200; $i++) {

											echo '<option value="' . $i . '">' . $i . '"</option>';
										}
										?>
									</select>
								</span>
							</td>
						</tr>


						<tr style="height:33px;">
							<td class="test-lenght1bay"><a class="thickbox" href="images/ES53/1bay_faceA.jpg">
									<h1>Round FaceLength C</h1>
								</a></td>
							<td>
								<span id="face_length_span">
									<select name="round_face_length_c" id="round_face_length_c" onchange="getPriceOfProduct(this.form);" disabled style="width: 86px;">
										<option value="no">Straight</option>
										<option value="yes">Curve</option>
									</select>
								</span>
							</td>
						</tr>


						<tr id="radius_c" style="display:none;">
							<td class="test-lenght1bay"><a class="thickbox" href="images/ES53/1bay_faceA.jpg">
									<h1>Radius</h1>
								</a></td>
							<td>
								<span id="round_face_radius_span">
									<select name="round_face_radius_c" id="round_face_radius_c" onchange="getPriceOfProduct(this.form);" style="width: 86px;">
										<?php
										for ($i = 10; $i <= 200; $i++) {

											echo '<option value="' . $i . '">' . $i . '"</option>';
										}
										?>
									</select>
								</span>
							</td>
						</tr>



					<?php
					}
					if ($_REQUEST['type'] == '4BAY') {
					?>


						<tr style="height:33px;">
							<td class="test-lenght1bay"><a class="thickbox" href="images/ES53/1bay_faceA.jpg">
									<h1>Round FaceLength A</h1>
								</a></td>
							<td>
								<span id="face_length_span">
									<select name="round_face_length_a" id="round_face_length_a" onchange="getPriceOfProduct(this.form);" disabled style="width: 86px;">
										<option value="no">Straight</option>
										<option value="yes" selected>Curve</option>
									</select>
								</span>
							</td>
						</tr>
						<tr id="radius_a" style="display:none;">
							<td class="test-lenght1bay"><a class="thickbox" href="images/ES53/1bay_faceA.jpg">
									<h1>Radius</h1>
								</a></td>
							<td>
								<span id="round_face_radius_span">
									<select name="round_face_radius_a" id="round_face_radius_a" onchange="getPriceOfProduct(this.form);" style="width: 86px;">
										<?php
										for ($i = 10; $i <= 200; $i++) {

											echo '<option value="' . $i . '">' . $i . '"</option>';
										}
										?>
									</select>
								</span>
							</td>
						</tr>
						<tr style="height:33px;">
							<td class="test-lenght1bay"><a class="thickbox" href="images/ES53/1bay_faceA.jpg">
									<h1>Round FaceLength B</h1>
								</a></td>
							<td>
								<span id="face_length_span">
									<select name="round_face_length_b" id="round_face_length_b" onchange="getPriceOfProduct(this.form);" disabled style="width: 86px;">
										<option value="no">Straight</option>
										<option value="yes">Curve</option>
									</select>
								</span>
							</td>
						</tr>

						<tr id="radius_b" style="display:none;">
							<td class="test-lenght1bay"><a class="thickbox" href="images/ES53/1bay_faceA.jpg">
									<h1>Radius</h1>
								</a></td>
							<td>
								<span id="round_face_radius_span">
									<select name="round_face_radius_b" id="round_face_radius_b" onchange="getPriceOfProduct(this.form);" style="width: 86px;">
										<?php
										for ($i = 10; $i <= 200; $i++) {

											echo '<option value="' . $i . '">' . $i . '"</option>';
										}
										?>
									</select>
								</span>
							</td>
						</tr>


						<tr style="height:33px;">
							<td class="test-lenght1bay"><a class="thickbox" href="images/ES53/1bay_faceA.jpg">
									<h1>Round FaceLength C</h1>
								</a></td>
							<td>
								<span id="face_length_span">
									<select name="round_face_length_c" disabled id="round_face_length_c" onchange="getPriceOfProduct(this.form);" style="width: 86px;">
										<option value="no">Straight</option>
										<option value="yes">Curve</option>
									</select>
								</span>
							</td>
						</tr>


						<tr id="radius_c" style="display:none;">
							<td class="test-lenght1bay"><a class="thickbox" href="images/ES53/1bay_faceA.jpg">
									<h1>Radius</h1>
								</a></td>
							<td>
								<span id="round_face_radius_span">
									<select name="round_face_radius_c" id="round_face_radius_c" onchange="getPriceOfProduct(this.form);" style="width: 86px;">
										<?php
										for ($i = 10; $i <= 200; $i++) {

											echo '<option value="' . $i . '">' . $i . '"</option>';
										}
										?>
									</select>
								</span>
							</td>
						</tr>


						<tr style="height:33px;">
							<td class="test-lenght1bay"><a class="thickbox" href="images/ES53/1bay_faceA.jpg">
									<h1>Round FaceLength D</h1>
								</a></td>
							<td>
								<span id="face_length_span">
									<select name="round_face_length_d" id="round_face_length_d" onchange="getPriceOfProduct(this.form);" disabled style="width: 86px;">
										<option value="no">Straight</option>
										<option value="yes">Curve</option>
									</select>
								</span>
							</td>
						</tr>



						<tr id="radius_d" style="display:none;">
							<td class="test-lenght1bay"><a class="thickbox" href="images/ES53/1bay_faceA.jpg">
									<h1>Radius</h1>
								</a></td>
							<td>
								<span id="round_face_radius_span">
									<select name="round_face_radius_d" id="round_face_radius_d" onchange="getPriceOfProduct(this.form);" style="width: 86px;">
										<?php
										for ($i = 10; $i <= 200; $i++) {

											echo '<option value="' . $i . '">' . $i . '"</option>';
										}
										?>
									</select>
								</span>
							</td>
						</tr>

					<?php
					}
					?>








				</table>
			</div>





			<style>




			</style>

			<div id="cart-form" class="tables-options forgotot" >

				<table id="forgotot" cellpadding="0" cellspacing="0" width=100% style="border: 1px solid white;border-radius: 5px;text-align:center;">
					<tr>
						<td colspan=2>
							<h3 class="showlayoutl">
								<a>
									<input type="checkbox" id="gotoroundglasscheck" onchange="getPriceOfProduct(this.form)" name="gotoroundglasscheck" value="Go To Corner Post" style="display:none;">
									<span class="heading_all"><span style="float:left;">&nbsp;&nbsp;3)</span></span>
									<label for="gotoroundglasscheck" id="gotoroundglass" style="float:left;"> Go To Round Glass <span style="color:#fa0202; text-align:left !important;font-size: 26px;">
											<blink><b>New!</b></blink>
										</span></label>
								</a>
							</h3>
						</td>
					</tr>
				</table>

				<table id="forstarightpost" cellpadding="0" cellspacing="0" width=100% style="border: 1px solid white;border-radius: 5px; display:none;text-align:center;">
					<tr>
						<td colspan=2>
							<h3 class="showlayoutl" style="float:left;"><a id="backtostraightpost">
							<span class="heading_all" style="float:left;"><span >&nbsp;&nbsp;2)</span></span>&nbsp;
									<label for="gotoroundglasscheck"> Back To Straight Glass</label></a></h3>
							<label class="showlayoutll">
								<h3 align="center" style="text-align:center;" onclick="show_layout(this.form);">Show Layouts
								</h3>
							</label>
							</center><br />
						</td>
					</tr>
				</table>

			</div>

		</td>
	</tr>
</table>


<div><h2>&nbsp;</h2></div>
</div>



<div style=""  class="info-sub-container3" valign="top" align="center" >

	<div class="test-Price div3">

		<table id="cart-form" class="price" cellpadding="0" cellspacing="0" width="100%" valign="top">
			<tr>
				<td colspan=2>
					<center>
						<h2 class="heading_all" id="quotetext"><span style="float:left">&nbsp;&nbsp;4)</span>Quote</h2>
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
			<tr style="position: relative;<?= $category_name == "ES53 SWIVEL" ? "" : "display:none" ?>">
				<td align="left">Light Bracket:</td>
				<td id="flange-cover2" align="right">0.00</td>
			</tr>



			<tr style="display:none;">
				<td style="font-size:110%;" align="left">Flange Under Counter:</td>
				<td style="font-size:110%;" id="flange-under-counter" align="right">0.00</td>
			</tr>





			<tr>
				<td align="left">Face Glass:</td>
				<td id="face-glass" align="right">0.00</td>
			</tr>

			<tr>
				<td align="left">Left End Glass:</td>
				<td id="left-Panel" align="right">0.00</td>
			</tr>
			<tr>
				<td align="left">Right End Glass:</td>
				<td id="right-panel" align="right">0.00</td>
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

	<center><h2 class="heading_all" id="addcartandfavorite"><span style="float:left;">&nbsp;&nbsp;&nbsp;5)</span><div class="addcartandfavdiv">Action</div></h2></center>
		<!-- ani code -->

		

		<!--td><h1>Add to Cart</h1></td-->

		<!-- ani code -->

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




		<input type="hidden" id="c_glass_a" name="c_glass_a" value="" />
		<input type="hidden" id="c_glass_a_val" name="c_glass_a_val" value="" />


		<input type="hidden" id="c_glass_b" name="c_glass_b" value="" />
		<input type="hidden" id="c_glass_b_val" name="c_glass_b_val" value="" />



		<input type="hidden" id="c_glass_c" name="c_glass_c" value="" />
		<input type="hidden" id="c_glass_c_val" name="c_glass_c_val" value="" />

		<input type="hidden" id="c_glass_d" name="c_glass_d" value="" />
		<input type="hidden" id="c_glass_d_val" name="c_glass_d_val" value="" />

		<input type="hidden" id="c_glass_round_a" name="c_glass_round_a" value="" />
		<input type="hidden" id="c_glass_round_a_val" name="c_glass_round_a_val" value="" />

		<input type="hidden" id="c_glass_round_b" name="c_glass_round_b" value="" />
		<input type="hidden" id="c_glass_round_b_val" name="c_glass_round_b_val" value="" />

		<input type="hidden" id="c_glass_round_c" name="c_glass_round_c" value="" />
		<input type="hidden" id="c_glass_round_c_val" name="c_glass_round_c_val" value="" />

		<input type="hidden" id="c_glass_round_d" name="c_glass_round_d" value="" />
		<input type="hidden" id="c_glass_round_d_val" name="c_glass_round_d_val" value="" />


		<input type="hidden" id="c_glass_a_light" name="c_glass_a_light" value="" />
		<input type="hidden" id="c_glass_a_val_light" name="c_glass_a_val_light" value="" />
		<input type="hidden" id="c_glass_b_light" name="c_glass_b_light" value="" />
		<input type="hidden" id="c_glass_b_val_light" name="c_glass_b_val_light" value="" />
		<input type="hidden" id="c_glass_c_light" name="c_glass_c_light" value="" />
		<input type="hidden" id="c_glass_c_val_light" name="c_glass_c_val_light" value="" />
		<input type="hidden" id="c_glass_d_light" name="c_glass_d_light" value="" />
		<input type="hidden" id="c_glass_d_val_light" name="c_glass_d_val_light" value="" />



		<input type="hidden" id="c_light_bar" name="c_light_bar" value="" />

		<input type="hidden" id="is_custom" name="is_custom" value="" />

		<input type="hidden" id="product_type" name="product_type" value="<?php echo $category_name; ?>">

		<input type="hidden" name="link" id="link">


		<input type="hidden" id="msg" name="msg" value="">
		<input type="hidden" id="ckall" name="ckall" value="">
		<!-- ani code -->
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
	category_name = "<?= $category_name ?>";
	osc = "<?= $_REQUEST['osCsid']; ?>";
	im_id = "<?= $im_id; ?>";
	$(document).ready(function() {

		var custom;
		var my_facelengt_select = "";
		$msg = 'Glass for the selected unit currently has a production time of<font color="red"> 5-8 working days.</font>  Posts can be shipped within 24 hours.';
		$('[name="face_length"]').change(function() {
			if ($(this).val() == 'custom') {
				custom = $(this);

				$('.delete').click();

			}
		})
		$('[name="face_length_a"]').change(function() {
			if ($(this).val() == 'custom') {
				custom = $(this);
				$('.delete').click();

			}
		})
		$('[name="face_length_b"]').change(function() {
			if ($(this).val() == 'custom') {
				custom = $(this);
				$('.delete').click();
			}
		})
		$('[name="face_length_c"]').change(function() {
			if ($(this).val() == 'custom') {
				custom = $(this);
				$('.delete').click();
			}
		})
		$('[name="face_length_d"]').change(function() {
			if ($(this).val() == 'custom') {
				custom = $(this);
				$('.delete').click();
			}
		})
		$('.item .delete').click(function() {

			var elem = $(this).closest('.item');

			jsconfirm();

		});
	});
</script>
<script src="includes/model_files/ES53/ES53.js"></script>