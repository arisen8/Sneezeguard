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
$depthsss = '';
$shelve = '';
$infinecontrol = '';

//
$post_height = $HTTP_GET_VARS['post_height'];
$facelengthA = $HTTP_GET_VARS['facelengthA'];
$facelengthB = $HTTP_GET_VARS['facelengthB'];

$facelengthccc = $HTTP_GET_VARS['facelengthC'];
if (strpos($facelengthccc, 'W') !== false) {

    $ccarray = explode("W", $facelengthccc);
    $facelengthC = $ccarray[1];

    //echo'<b style="color:red;font-size:11px;">'; print_r($facelengthC);

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

$depthsss = $HTTP_GET_VARS['countertop'];
$shelve = $HTTP_GET_VARS['shelve'];
$infinecontrol = $HTTP_GET_VARS['infinecontrol'];
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

$info = array();

if (isset($HTTP_GET_VARS['id'])) {

    $product = "select count(*) as total from " . TABLE_PRODUCTS . " as p, " . TABLE_PRODUCTS_DESCRIPTION . " as pd, " . TABLE_PRODUCTS_TO_CATEGORIES . " as pc where p.products_id=pd.products_id and pd.products_id=pc.products_id and pc.categories_id=" . $HTTP_GET_VARS['id'] . " and pd.language_id=" . (int)$languages_id;

    $product = tep_db_query($product);

    $products = tep_db_fetch_array($product);
}

?>

<script type="text/javascript">
    var tot1 = osc = im_id = img_ajx = "";
    var product_name_price = new Array(<?= $products['total'] ?>);

    <?php

    if (isset($HTTP_GET_VARS['id'])) {

        $product = "select p.products_id as id, pd.products_name as name, p.products_price as price from " . TABLE_PRODUCTS . " as p, " . TABLE_PRODUCTS_DESCRIPTION . " as pd, " . TABLE_PRODUCTS_TO_CATEGORIES . " as pc where p.products_id=pd.products_id and pd.products_id=pc.products_id and pc.categories_id=" . $HTTP_GET_VARS['id'] . " and pd.language_id=" . (int)$languages_id;

        $product = tep_db_query($product);

        $i = 0;

        while ($products = tep_db_fetch_array($product)) { ?>

            product_name_price['<?= $products['name'] ?>'] = new Array("<?= $products['id'] ?>", "<?= $products['price'] ?>");

    <?php

            $sl = explode("-", $products['name']);

            if (empty($sl[2])) {

                $info[$i++] = $products['name'];
            }
        }
    }

    ?>
</script>

<link rel="stylesheet" href="includes/model_files/ALLIN1/ALLIN1.css">
<table id="cart-form">

    <tr>
        <td>

            <div class="tables-options">
                <table class="test-length_f" cellpadding="0" cellspacing="0" width="100%" style="border: 1px solid white;border-radius: 5px;">
                    <tr>
                        <td colspan=3>
                            <center>
                                <h2 class="heading_all"><span style="float:left">&nbsp;&nbsp;1)</span>Measurements</h2>
                            </center>
                        </td>
                    </tr>
                    <tr style="display:none">
                        <td>
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
                            <a class="thickbox" href="images/ALLIN1/POSTDIM.jpg">
                                <h1>Options</h1>
                            </a>
                        </td>
                        <td>
                            <?php
                            ?>
                            <span class="custom_span">
                                <select name="optn" onchange="getPriceOfProduct(this.form)">
                                    <option value="select">Select</option>
                                    <?php
                                    if ($facelengthA == '24') {
                                        echo '<option value="ALLIN1-24" selected>ALLIN1-24</option>';
                                    } else {
                                        echo '<option value="ALLIN1-24">ALLIN1-24</option>';
                                    }

                                    if ($facelengthA == '30') {
                                        echo '<option value="ALLIN1-30" selected>ALLIN1-30</option>';
                                    } else {
                                        echo '<option value="ALLIN1-30">ALLIN1-30</option>';
                                    }

                                    if ($facelengthA == '36') {
                                        echo '<option value="ALLIN1-36" selected>ALLIN1-36</option>';
                                    } else {
                                        echo '<option value="ALLIN1-36">ALLIN1-36</option>';
                                    }

                                    if ($facelengthA == '42') {
                                        echo '<option value="ALLIN1-42" selected>ALLIN1-42</option>';
                                    } else {
                                        echo '<option value="ALLIN1-42">ALLIN1-42</option>';
                                    }

                                    if ($facelengthA == '48') {
                                        echo '<option value="ALLIN1-48" selected>ALLIN1-48</option>';
                                    } else {
                                        echo '<option value="ALLIN1-48">ALLIN1-48</option>';
                                    }

                                    if ($facelengthA == '54') {
                                        echo '<option value="ALLIN1-54" selected>ALLIN1-54</option>';
                                    } else {
                                        echo '<option value="ALLIN1-54">ALLIN1-54</option>';
                                    }

                                    if ($facelengthA == '60') {
                                        echo '<option value="ALLIN1-60" selected>ALLIN1-60</option>';
                                    } else {
                                        echo '<option value="ALLIN1-60">ALLIN1-60</option>';
                                    }

                                    if ($facelengthA == '66') {
                                        echo '<option value="ALLIN1-66" selected>ALLIN1-66</option>';
                                    } else {
                                        echo '<option value="ALLIN1-66">ALLIN1-66</option>';
                                    }

                                    if ($facelengthA == '72') {
                                        echo '<option value="ALLIN1-72" selected>ALLIN1-72</option>';
                                    } else {
                                        echo '<option value="ALLIN1-72">ALLIN1-72</option>';
                                    }

                                    if ($facelengthA == '78') {
                                        echo '<option value="ALLIN1-78" selected>ALLIN1-78</option>';
                                    } else {
                                        echo '<option value="ALLIN1-78">ALLIN1-78</option>';
                                    }

                                    if ($facelengthA == '84') {
                                        echo '<option value="ALLIN1-84" selected>ALLIN1-84</option>';
                                    } else {
                                        echo '<option value="ALLIN1-84">ALLIN1-84</option>';
                                    }

                                    if ($facelengthA == '90') {
                                        echo '<option value="ALLIN1-90" selected>ALLIN1-90</option>';
                                    } else {
                                        echo '<option value="ALLIN1-90">ALLIN1-90</option>';
                                    }

                                    if ($facelengthA == '96') {
                                        echo '<option value="ALLIN1-96" selected>ALLIN1-96</option>';
                                    } else {
                                        echo '<option value="ALLIN1-96">ALLIN1-96</option>';
                                    }
                                    ?>

                                    <option value="custom">Custom</option>
                                </select>

                            </span>

                            <div style="clear: both;"></div>
                        </td>
                        <td width="11%">
                            <span id="errormsgfirstname">
                                <img id="count_err" src="img/iconCheckOff.gif">
                            </span>
                        </td>
                    </tr>
                    <tr style="display:none">
                        <td>
                            <div style="position: relative;z-index: 102!important;">
                                <h1>Shelves</h1>
                                <select name="shelvs_a" onchange="getPriceOfProduct(this.form)">
                                    <?php for ($i = 1; $i <= 7; $i += 1) {
                                        echo '<option value="' . $i . '">' . $i . '</option>';
                                    } ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                </table>

            </div>
            <div class="tables-options">
                <table class="test-round" cellpadding="0" cellspacing="0" width="100%" style="border: 1px solid white;border-radius: 5px;">
                    <tr>
                        <td colspan=3>
                            <center>
                                <h2 class="heading_all"><span style="float:left">&nbsp;&nbsp;2)</span>Options</h2>
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a class="thickbox" href='images/Finishes.jpg'>
                                <h1>Post Finish</h1>
                            </a>
                        </td>
                        <td>
                            <ul class="option-panel">
                                <select name="choose_finish"  onchange="getPriceOfProduct(this.form)">
                                    <? if($category_name=='ALLIN1'){ ?>
                                    <option value="SL">Brushed Aluminum </option>
                                    <?} else {?>
                                    <option value="PB">Powder Coated Black</option>
                                    <option value="SL">Brushed Stainless Steel</option>
                                    <?}?>
                                </select>
                            </ul>
                        </td>
                        <td width="11%">
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

        <table id="cart-form" class="price" cellpadding="0" cellspacing="0" width="100%" style="border: 1px solid white;border-radius: 5px;">
            <tr>
                <td colspan=2 style=" font-size:150%;">
                    <center>
                        <h2 class="heading_all"><span style="float:left">&nbsp;&nbsp;3)</span>Quote
                    </center>
                </td>
            </tr>

            <tr style="background-color: rgb(121 239 40 / 30%);color:black;">
                <td align="left">Total:</td>
                <td id="t_price" align="right">0.00</td>
            </tr>
        </table>
    </div>
    <div class="price-icon-wishlist-addtocart">
    <center><h2 class="heading_all" id="addcartandfavorite"><span style="float:left;">&nbsp;&nbsp;&nbsp;4)</span><div class="addcartandfavdiv">Action</div></h2></center>
       

        <input type="hidden" id="c_glass_face" name="c_glass_face" value="" />
        <input type="hidden" id="c_glass_face_val" name="c_glass_face_val" value="" />

        <input type="hidden" id="c_glass_right" name="c_glass_right" value="" />
        <input type="hidden" id="c_glass_right_val" name="c_glass_right_val" value="" />

        <input type="hidden" id="c_glass_left" name="c_glass_left" value="" />
        <input type="hidden" id="c_glass_left_val" name="c_glass_left_val" value="" />

        <input type="hidden" id="c_glass_a" name="c_glass_a" value="" />
        <input type="hidden" id="c_glass_a_val" name="c_glass_a_val" value="" />

        <input type="hidden" id="c_glass_b" name="c_glass_b" value="" />
        <input type="hidden" id="c_glass_b_val" name="c_glass_b_val" value="" />

        <input type="hidden" id="c_glass_c" name="c_glass_c" value="" />
        <input type="hidden" id="c_glass_c_val" name="c_glass_c_val" value="" />

        <input type="hidden" id="c_glass_d" name="c_glass_d" value="" />
        <input type="hidden" id="c_glass_d_val" name="c_glass_d_val" value="" />

        <input type="hidden" id="c_glass_a_light" name="c_glass_a_light" value="" />
        <input type="hidden" id="c_glass_a_val_light" name="c_glass_a_val_light" value="" />
        <input type="hidden" id="c_glass_b_light" name="c_glass_b_light" value="" />
        <input type="hidden" id="c_glass_b_val_light" name="c_glass_b_val_light" value="" />
        <input type="hidden" id="c_glass_c_light" name="c_glass_c_light" value="" />
        <input type="hidden" id="c_glass_c_val_light" name="c_glass_c_val_light" value="" />
        <input type="hidden" id="c_glass_d_light" name="c_glass_d_light" value="" />
        <input type="hidden" id="c_glass_d_val_light" name="c_glass_d_val_light" value="" />

        <input type="hidden" id="post_type_val" name="post_type_val" value="" />
        <input type="hidden" id="post_degree_val" name="post_degree_val" value="" />

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

        <input type="hidden" id="msg" name="msg" value="" />

        <input type="hidden" id="c_glass_post" name="c_glass_post" value="" />

        <input type="checkbox" name="custom" id="custom" value="custom" style="float:left;visibility:hidden;" />

        <input type="hidden" name="custom_glass" value="" id="custom_glass" />

        <input type="hidden" name="link" value="" id="link" />

        <input type="hidden" id="is_custom" name="is_custom" value="" />

        <input type="hidden" id="product_type" name="product_type" value="<?php echo $category_name; ?>" />
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js"></script>
<script src="jquery.confirm/jquery.confirm.js"></script>
<script type="text/javascript">
    var tis = 0;
    var isOpera = !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;
    // Opera 8.0+ (UA detection to detect Blink/v8-powered Opera)
    var isFirefox = typeof InstallTrigger !== 'undefined'; // Firefox 1.0+
    var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0;
    // At least Safari 3+: "[object HTMLElementConstructor]"
    var isChrome = !!window.chrome && !isOpera; // Chrome 1+
    var isIE = /*@cc_on!@*/ false || !!document.documentMode; // At least IE6
    if (isFirefox == true) {
        var width_one = 23;
        var width_two = 27;
        width_three = 30;
        right_next = -44;
        width_review = 21; /*red line width for price */
    } else if (isChrome == true) {
        var width_one = 19;
        var width_two = 25;
        width_three = 28;
        right_next = -36;
        width_review = 19;
    } else if (isSafari == true) {
        var width_one = 19;
        var width_two = 25;
        width_three = 28;
        right_next = -40;
        width_review = 19;
    } else if (isIE == true) {
        var width_one = 19;
        var width_two = 25;
        width_three = 28;
        right_next = -40;
        width_review = 19;
    } else if (isOpera == true) {
        var width_one = 19;
        var width_two = 25;
        width_three = 28;
        right_next = -40;
        width_review = 19;
    } else {
        var width_one = 19;
        var width_two = 25;
        width_three = 28;
        width_review = 19;
    }
    var ms_face = '<?php echo $ms_face; ?>';
    var osc = '<?php echo $_REQUEST['osCsid']; ?>';
    var im_id = '<?php echo $im_id; ?>';
    var category_name = '<?php echo $category_name ?>';
</script>
<script src="includes/model_files/ALLIN1/ALLIN1.js"></script>