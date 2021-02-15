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
$ms_glass = $rw['glass_popup'];
$im_id = rand();
if (isset($_SESSION["scr"])) {
    $_SESSION['scr'] = $_SESSION['scr'] . "-" . $im_id;
} else {
    $_SESSION['scr'] = $im_id;
}
$res = tep_db_query("select * from wt_val order by id desc");
while ($row = tep_db_fetch_array($res)) {
    $val = $row['val'];
}
?>
<script type="text/javascript">
var tot1 = osc = im_id = img_ajx = "";
var wt = 0;
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
        if ($category_name != 'EP5') { ?>
product_name_price['EP5-FLANGE COVER 1 BAY BOTH ENDS'] = new Array("834", "28.0000");
product_name_price['EP5-FLANGE COVER 1 BAY RIGHT END'] = new Array("835", "21.0000");
product_name_price['EP5-FLANGE COVER 1 BAY LEFT END'] = new Array("836", "21.0000");
product_name_price['EP5-FLANGE COVER 1 BAY NO ENDS'] = new Array("837", "14.0000");
product_name_price['EP5-FLANGE COVER 2 BAY BOTH ENDS'] = new Array("840", "35.0000");
product_name_price['EP5-FLANGE COVER 2 BAY RIGHT END'] = new Array("841", "28.0000");
product_name_price['EP5-FLANGE COVER 3 BAY BOTH ENDS'] = new Array("842", "42.0000");
product_name_price['EP5-FLANGE COVER 1 PIECE'] = new Array("1448", "7.0000");
<?php }
        if ($category_name == 'EP12') { ?>
product_name_price['EP11 Center Post Brushed Aluminum'] = new Array("242", "86.0000");
product_name_price['EP11 Center Post Powder Coated Black'] = new Array("261", "101.0000");
product_name_price['EP11 Center Post Brushed Stainless Steel'] = new Array("263", "101.0000");
<?php }
        while ($products = tep_db_fetch_array($product)) { ?>
product_name_price['<?= $products['name'] ?>'] = new Array("<?= $products['id'] ?>", "<?= $products['price'] ?>");
<?php }
    }
    ?>
</script>
<?php
$product = "select p.products_id as id, pd.products_name as name, p.products_price as price from " . TABLE_PRODUCTS . " as p, " . TABLE_PRODUCTS_DESCRIPTION . " as pd, " . TABLE_PRODUCTS_TO_CATEGORIES . " as pc where p.products_id=pd.products_id and pd.products_id=pc.products_id and pc.categories_id=" . $HTTP_GET_VARS['id'] . " and pd.language_id=" . (int)$languages_id;
$product = tep_db_query($product);
while ($products = tep_db_fetch_array($product)) {
}
?>

<script src="jquery.confirm/jquery.confirm.js"></script>



<?php if ($_REQUEST['type'] == '1BAY') { ?>
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
    top: 69%;
    left: 60%;
}

div.total {
    top: 74%;
    left: 65%;
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
    display: none;
}

div.right {
    display: none;
}

div.post {
    display: none;
}

div.glass_a {
    top: 73%;
    left: 46%;
}

div.glass_b {
    top: 53%;
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
    top: 67%;
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
</style>
<?php }

if ($_REQUEST['type'] == '3BAY') {
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

div.glass_a {
    top: 76%;
    left: 40%;
}

div.glass_b {
    top: 57%;
    left: 68%;
}

div.glass_c {
    top: 45%;
    left: 85%;
}

div.glass_d {
    display: none;
}

div.glass {
    display: none;
}

div.total {
    top: 64%;
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
    display: none;
}

div.right {
    display: none;
}

div.post {
    display: none;
}

div.glass_a {
    top: 73%;
    left: 35%;
}

div.glass_b {
    top: 56%;
    left: 59%;
}

div.glass_c {
    top: 44%;
    left: 76%;
}

div.glass_d {
    top: 35%;
    left: 86%;
}

div.glass {
    display: none;
}

div.total {
    top: 52%;
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
?>

<table id="cart-form">


    <tr>
        <td>

            <div class="tables-options">
                <table cellpadding="0" cellspacing="0" width="100%" style="border: 1px solid white;border-radius: 5px;">

                    <tr>
                        <td colspan=3>
                            <center>
                                <h2 class="heading_all"><span style="float:left">&nbsp;&nbsp;1)</span>Measurements
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

                            </center>
                            </h2>
                        </td>
                    </tr>
                    <?php include('includes/model_files/type_of_products.php') ?>
                </table>

            </div>
            <div class="tables-options">
                <table class="test-round" cellpadding="0" cellspacing="0" width="100%"
                    style="border: 1px solid white;border-radius: 5px;">
                    <tr>
                        <td colspan=3>
                            <center>
                                <h2 class="heading_all"><span style="float:left">&nbsp;&nbsp2)</span>Options
                            </center>
                            </h2>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a class="thickbox" href="images/ES40/End_panels.jpg">
                                <h1>End Panels</h1>
                            </a>
                        </td>
                        <td>

                            <select class="option" id="end_options" tabindex="6" onchange="show_panel_type(this.form)">
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
                            <select name="flange_covers" style="margin:4px; float: right;" align="right"
                                onchange="getPriceOfProduct(this.form);">
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
                        <td class="test-flang"><a class="thickbox"
                                href='flang_under_counter.php?type=adj&KeepThis=true&TB_iframe=true&height=480&width=640'>
                                <h1>Flange Under Counter</h1>
                            </a></td>
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
                    <tr class="test-finish">
                        <td><a class="thickbox" style="text-color:#c7f900 !important"
                                href=<?php echo '"images/' . $category_name . '/RADIUS.jpg"'; ?>>
                                <h1>Glass Corners</h1>
                            </a></td>
                        <td>
                            <?php

                            ?>
                            <select class="roundcheck" name="rounded_corners" id="round_check" style="margin:4px;"
                                onchange="getPriceOfProduct(this.form)">
                                <option value="select">Select</option>

                                <?php
                                if ($glass_type == 'Square') {
                                    echo '<option value="squared" selected>Squared</option>';
                                } else {
                                    echo '<option value="squared" >Squared</option>';
                                }
                                if ($glass_type == 'Rounded') {
                                    echo '<option value="round" selected>Rounded</option>';
                                } else {
                                    echo '<option value="round" >Rounded</option>';
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
                    <tr class="test-finish">
                        <td><a class="thickbox" href='images/Finishes.jpg'>
                                <h1>Post Finish</h1>
                            </a>
                            </td><td>
                            <select name="choose_finish" 
                                onchange="getPriceOfProduct(this.form)">


                                <?php
                                if ($finish_type == 'SS') {
                                    echo '<option value="Brushed Stainless Steel" selected>Brushed Stainless</option>';
                                } else {
                                    echo '<option value="Brushed Stainless Steel">Brushed Stainless</option>';
                                }
                                if ($finish_type == 'CB') {
                                    echo '<option value="Powder Coated Black" selected>Coated Black</option>';
                                } else {
                                    echo '<option value="Powder Coated Black">Coated Black</option>';
                                }

                                ?>

                                <!--  <option value="Brushed Aluminum">Brushed Aluminum</option>-->
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

            <div class="tables-options">
                <table cellpadding="0" cellspacing="0" width="100%" style="border: 1px solid white;border-radius: 5px;">
                    <tr>
                        <td colspan=3>
                            <center>
                                <h2 class="heading_all"><span style="float:left">&nbsp;&nbsp;3)</span>Extras
                            </center>
                            </h2>
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
                <td align="left">Flange Cover:</td>
                <td id="flange-cover" align="right">0.00</td>
            </tr>



            <tr style="display:none;">
                <td align="left">Flange Under Counter:</td>
                <td id="flange-under-counter" align="right">0.00</td>
            </tr>



            <tr>
                <td align="left">Adjustable Brackets:</td>
                <td id="make-adjustable" align="right">0.00</td>
            </tr>

            <tr style="display:none;">
                <td align="left">Light Bar:</td>
                <td id="lightbar" align="right">0.00</td>
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
        </table>

    </div>

    <div class="price-icon-wishlist-addtocart">
    <center><h2 class="heading_all" id="addcartandfavorite"><span style="float:left;">&nbsp;&nbsp;&nbsp;5)</span><div class="addcartandfavdiv">Action</div></h2></center>
       
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

        <input type="hidden" id="c_glass_a_tube" name="c_glass_a_tube" value="" />
        <input type="hidden" id="c_glass_a_val_tube" name="c_glass_a_val_tube" value="" />
        <input type="hidden" id="c_glass_b_tube" name="c_glass_b_tube" value="" />
        <input type="hidden" id="c_glass_b_val_tube" name="c_glass_b_val_tube" value="" />
        <input type="hidden" id="c_glass_c_tube" name="c_glass_c_tube" value="" />
        <input type="hidden" id="c_glass_c_val_tube" name="c_glass_c_val_tube" value="" />
        <input type="hidden" id="c_glass_d_tube" name="c_glass_d_tube" value="" />
        <input type="hidden" id="c_glass_d_val_tube" name="c_glass_d_val_tube" value="" />

        <input type="hidden" id="c_glass_adjustable_a" name="c_glass_adjustable_a" value="" />
        <input type="hidden" id="c_glass_adjustable_b" name="c_glass_adjustable_b" value="" />
        <input type="hidden" id="c_glass_adjustable_c" name="c_glass_adjustable_c" value="" />
        <input type="hidden" id="c_glass_adjustable_d" name="c_glass_adjustable_d" value="" />
        <input type="hidden" id="c_glass_adjustable_a_val" name="c_glass_adjustable_a_val" value="" />
        <input type="hidden" id="c_glass_adjustable_b_val" name="c_glass_adjustable_b_val" value="" />
        <input type="hidden" id="c_glass_adjustable_c_val" name="c_glass_adjustable_c_val" value="" />
        <input type="hidden" id="c_glass_adjustable_d_val" name="c_glass_adjustable_d_val" value="" />

        <input type="hidden" id="glass_a_top_ext" name="glass_a_top_ext" value="" />
        <input type="hidden" id="glass_b_top_ext" name="glass_b_top_ext" value="" />

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

        <td colspan="2" align="center"><input type="hidden" name="type" value="<?= $_REQUEST['type'] ?>" />
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

<script>
zero = one = two = three = four = five = six = seven = eight = false;
selectOption = 0;
choseOption = 0;
choselength = 0;
choseRounded = 0;
choseFlang = 0;
priceOption = 0;
h = 10;
h1 = 10;
h2 = 10;
h3 = 10;
t1 = 0;
t2 = 0;
t3 = 0;
t4 = 0;
var isOpera = !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;

var isFirefox = typeof InstallTrigger !== 'undefined';
var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0;

var isChrome = !!window.chrome && !isOpera;
var isIE = false || !!document.documentMode;
if (isFirefox == true) {
    var width_one = 23;
    var width_two = 31;
    width_three = 30;
    right_next = -44;
    width_review = 21;
    redlinebrowser = 23;
    redlinebrowser1 = 23;
    redln = 85;
} else if (isChrome == true) {
    var width_one = 19;
    var width_two = 29;
    width_three = 28;
    right_next = -36;
    width_review = 19;
    redlinebrowser = 0;
    redlinebrowser1 = 0;
    redln = 85;
} else if (isSafari == true) {
    var width_one = 19;
    var width_two = 29;
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
    redlinebrowser = 0;
    redlinebrowser1 = 0;

} else if (isOpera == true) {
    var width_one = 19;
    var width_two = 29;
    width_three = 28;
    right_next = -40;
    width_review = 19;
    redlinebrowser = 0;
    redlinebrowser1 = 0;
    redln = 85;
} else {
    var width_one = 19;
    var width_two = 29;
    width_three = 28;
    width_review = 19;
    redln = 85;
}


osc = '<?= $_REQUEST['osCsid']; ?>';
im_id = '<?= $im_id; ?>';
category_name = '<?= $category_name ?>';
val = '<?= $val ?>';
ms_post = '<?= $ms_post ?>';
ms_adjustable = '<?= $ms_adjustable ?>';
ms_glass = '<?= $ms_glass ?>';

$(document).ready(function() {

    var custom;
    var my_facelengt_select = "";
    var post = '';
    var ispost = false;
    $('[name="face_length_a"]').live('change', function() {
        if ($(this).val() == 'custom') {
            custom = $(this);
            post = '';
            $msg =
                '<?php echo $ms_face . '&nbsp;&nbsp;<input type="checkbox" id="customefaceA" onchange="makeFacechange(this.form);"  /><span style="color:#666; font-size:16px;font: 26px/1 "Cuprum","Lucida Sans Unicode", "Lucida Grande", sans-serif;text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.6);color: #666;text-align: justify;" > : Make Next All Glass of Same Length</span>' ?>';
            $('.delete').click();

        }
    })
    $('[name="face_length_b"]').live('change', function() {
        if ($(this).val() == 'custom') {
            $msg =
                '<?php echo $ms_face . '&nbsp;&nbsp;<input type="checkbox" id="customefaceB" onchange="makeFacechange(this.form);"  /><span style="color:#666; font-size:16px;font: 26px/1 "Cuprum","Lucida Sans Unicode", "Lucida Grande", sans-serif;text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.6);color: #666;text-align: justify;" > : Make Next All Glass of Same Length</span>' ?>';
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
                '<?php echo $ms_face . '&nbsp;&nbsp;<input type="checkbox" id="customefaceC" onchange="makeFacechange(this.form);"  /><span style="color:#666; font-size:16px;font: 26px/1 "Cuprum","Lucida Sans Unicode", "Lucida Grande", sans-serif;text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.6);color: #666;text-align: justify;" > : Make Next All Glass of Same Length</span>' ?>';
            $('.delete').click();
        }
    })
    $('[name="face_length_d"]').live('change', function() {

        if ($(this).val() == 'custom') {

            custom = $(this);
            post = '';
            $msg = '<?php echo $ms_face ?>';
            $('.delete').click();
        }
    })

    $('[name="face_length"]').live('change', function() {
        if ($(this).val() == 'custom') {
            $msg = '<?php echo $ms_face ?>';
            custom = $(this);
            post = '';
            $('.delete').click();
        }
    })




    $('[name="right_length"]').live('change', function() {
        if ($(this).val() == 'custom') {
            $msg = '<?php echo $ms_right ?>';
            custom = $(this);
            post = '';
            $('.delete').click();
        }
    })
    $('[name="left_length"]').live('change', function() {
        if ($(this).val() == 'custom') {
            $msg = '<?php echo $ms_left ?>';
            custom = $(this);
            post = '';
            $('.delete').click();
        }
    })

    $('[name="post_height"]').change(function() {
        if ($(this).val() == 'custom') {
            custom = $(this);
            post = 'yes';
            var a;
            var b;
            if ('<?php echo $category_name; ?>' == 'EP5') {
                var a = 8;
                var b = 30;
            }
            if ('<?php echo $category_name; ?>' == 'EP11' || '<?php echo $category_name; ?>' ==
                'EP12') {
                var a = 12;
                var b = 24;
            }
            $msg =
                '<span align="right" ><img src="jquery.confirm/<?php echo $category_name; ?>.jpg" style="float:right;"><span style="width:250px;display:block;text-align:justify;"><?php echo $ms_post ?>';
            $('.delete').click();
        }
    })
    $('.item .delete').click(function() {
        jsconfirm($msg, category_name, ispost, custom, post);
    });

});
</script>
<script src="includes/model_files/ES40/ES40.js"></script>