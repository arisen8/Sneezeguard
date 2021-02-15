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

    if ($category_name != 'EP5') { ?>

      product_name_price['EP5-FLANGE COVER 1 BAY BOTH ENDS'] = new Array("834", "28.0000");

      product_name_price['EP5-FLANGE COVER 1 BAY RIGHT END'] = new Array("835", "21.0000");

      product_name_price['EP5-FLANGE COVER 1 BAY LEFT END'] = new Array("836", "21.0000");

      product_name_price['EP5-FLANGE COVER 1 BAY NO ENDS'] = new Array("837", "14.0000");

      product_name_price['EP5-FLANGE COVER 2 BAY BOTH ENDS'] = new Array("840", "35.0000");

      product_name_price['EP5-FLANGE COVER 2 BAY RIGHT END'] = new Array("841", "28.0000");

      product_name_price['EP5-FLANGE COVER 3 BAY BOTH ENDS'] = new Array("842", "42.0000");

    <?php }
    if ($category_name == 'EP12' || $category_name == 'EP22') { ?>

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
$im_id = rand();
if (isset($_SESSION["scr"])) {
  $_SESSION['scr'] = $_SESSION['scr'] . "-" . $im_id;
} else {
  $_SESSION['scr'] = $im_id;
}
?>

<?php if ($_REQUEST['type'] == '1BAY') { ?>
  <style>
    div.left {
      top: 23%;
      left: 72%;
    }

    div.right {
      top: 71%;
      left: 15%;
    }

    div.post {
      top: 150px;
      left: 453px;
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
      top: 52%;
      left: 76%;
    }

    div.left_post {
      top: 66%;
      left: 20%;
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

    div.total {
      display: none;
    }
  </style>
<?php }
if ($_REQUEST['type'] == '2BAY') { ?>
  <style>
    div.left {
      top: 9%;
      left: 82%;
    }

    div.right {
      top: 72%;
      left: 2%;
    }

    div.post {
      top: 116px;
      left: 490px;
    }

    div.glass_a {
      top: 63%;
      left: 58%;
    }

    div.glass_b {
      top: 35%;
      left: 86%;
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

    div.left_post {
      top: 73%;
      left: 11%;
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

    div.total {
      display: none;
    }
  </style>
<?php }
if ($_REQUEST['type'] == '2BAYEXT') { ?>
  <style>
    div.left {
      top: 27%;
      left: 85%;
    }

    div.right {
      top: 72%;
      left: 2%;
    }

    div.post {
      top: 116px;
      left: 490px;
    }

    div.glass_a {
      top: 71%;
      left: 41%;
    }

    div.glass_b {
      top: 52%;
      left: 68%;
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

    div.left_post {
      top: 67%;
      left: 60%;
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

    div.total {
      display: none;
    }
  </style>
<?php }
if ($_REQUEST['type'] == '3BAY') {
?>
  <style>
    div.left {
      top: 13%;
      left: 85%;
    }

    div.right {
      top: 76%;
      left: 1%;
    }

    div.post {
      top: 87px;
      left: 501px;
    }

    div.glass_a {
      top: 66%;
      left: 43%;
    }

    div.glass_b {
      top: 44%;
      left: 70%;
    }

    div.glass_c {
      top: 28%;
      left: 89%;
    }

    div.glass_d {
      display: none;
    }

    div.glass {
      display: none;
    }

    div.left_post {
      top: 72%;
      left: 8%;
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

    div.total {
      display: none;
    }
  </style>

<?php }
if ($_REQUEST['type'] == '4BAY') { ?>
  <style>
    div.left {
      top: 16%;
      left: 86%;
    }

    div.right {
      top: 74%;
      left: 1%;
    }

    div.post {
      top: 78px;
      left: 518px;
    }

    div.glass_a {
      top: 63%;
      left: 39%;
    }

    div.glass_b {
      top: 44%;
      left: 62%;
    }

    div.glass_c {
      top: 31%;
      left: 79%;
    }

    div.glass_d {
      top: 20%;
      left: 92%;
    }

    div.glass {
      display: none;
    }

    div.left_post {
      top: 69%;
      left: 8%;
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

    div.total {
      display: none;
    }
  </style>
<?php }
?>

<!--Coading for custom popup-->
<?php
$ms = "";
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

?>

<div class="item" style="position:absolute;visibility:hidden;">

  <div class="delete" style="visibility:hidden"></div>

</div>

<script type="text/javascript">

</script>
<table id="cart-form"  >

  <tr>
    <td>

      <div class="tables-options">
        <table cellpadding="0" cellspacing="0" width="100%" style="border: 1px solid white;border-radius: 5px;">
          <tr>
            <td colspan=3>
              <center>
                <h2 class="heading_all"><span style="float:left">&nbsp;&nbsp1)</span>Measurements
              </center>
              </h2>
            </td>
          </tr>
          <tr>
            <td>
              <a class="thickbox" href='images/Mid-Shelves/depth.jpg'>
                <h1>Depth</h1>
              </a>
            </td>
            <td>
              <span id="post_height_span">

                <select name="post_height" onchange="getPriceOfProduct(this.form)">
                  <option value="select">Select</option>

                  <?php
                  if ($depthsss == 12) {
                    echo '<option value="12" selected>12"</option>';
                  } else {
                    echo '<option value="12">12"</option>';
                  }

                  if ($depthsss == 16) {
                    echo '<option value="16" selected>16"</option>';
                  } else {
                    echo '<option value="16">16"</option>';
                  }

                  ?>
                  <option value="custom">Custom</option>
                </select>

              </span>
            </td>
            <td>
              <span id="errormsgfirstname">
                <img id="depth_err" src="img/iconCheckOff.gif">
              </span>
            </td>
          </tr>
          <?php if ($_REQUEST['type'] == '1BAY') { ?>
            <tr>
              <td>
                <a class="thickbox" href='images/Mid-Shelves/1bay_faceA.jpg'>
                  <h1>Face Length A</h1>
                </a>
              </td>
              <td>
                <span id="face_length_a_span">
                  <select id="face_length_a" name="face_length_a" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);">
                    <option value="select">Select</option>
                    <?php for ($i = 12; $i <= 42; $i += 6) {

                      if ($facelengthA == $i) {
                        echo '<option value="' . $i . '" selected>' . $i . '"</option> ';
                      } else {
                        echo '<option value="' . $i . '">' . $i . '"</option> ';
                      }
                    }
                    echo '<option value="custom">Custom</option>'
                    ?> <option value="NG">No Glass</option>
                  </select>
                </span>
              </td>
              <td>
                <span id="errormsgfirstname">
                  <img id="glass_a_err" src="img/iconCheckOff.gif">
                </span>
              </td>
            </tr>
            <tr style="display:none">
              <td>

                <h1>Shelves</h1>
                <select name="shelvs_a" onchange="getPriceOfProduct(this.form)">
                  <?php for ($i = 1; $i <= 7; $i += 1) {
                    echo '<option value="' . $i . '">' . $i . '</option>';
                  } ?>
                </select>

              </td>
            </tr>
          <?php  }
          if ($_REQUEST['type'] == '2BAY') { ?>
            <tr style="display:none">
              <td>

                <h1>Shelves </h1>
                <select name="shelvs_a" onchange="getPriceOfProduct(this.form)">
                  <?php for ($i = 1; $i <= 7; $i += 1) {
                    echo '<option value="' . $i . '">' . $i . '</option>';
                  }
                  ?>
                </select>

              </td>
            </tr>
            <tr>
              <td>
                <a class="thickbox" href='images/Mid-Shelves/2bay_faceA.jpg'>
                  <h1>Face Length A</h1>
                </a>
              </td>
              <td>
                <span id="face_length_a_span">
                  <select id="face_length_a" name="face_length_a" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);">
                    <option value="select">Select</option>
                    <?php for ($i = 12; $i <= 42; $i += 6) {

                      echo '<option value="' . $i . '">' . $i . '"</option>';
                    }
                    echo '<option value="custom">Custom</option>'
                    ?>
                    <option value="NG">No Glass</option>
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
              <td>
                <a class="thickbox" href='images/Mid-Shelves/2bay_faceB.jpg'>
                  <h1>Face Length B</h1>
                </a>
              </td>
              <td>
                <span id="face_length_b_span">
                  <select id="face_length_b" name="face_length_b" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);">
                    <option value="select">Select</option>
                    <?php for ($i = 12; $i <= 42; $i += 6) {
                      echo '<option value="' . $i . '">' . $i . '"</option>';
                    }
                    echo '<option value="custom">Custom</option>'
                    ?> <option value="NG">No Glass</option>
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
              <td>

                <!-- <h1>Shelves B</h1>
                        <select name="shelvs_b" onchange="getPriceOfProduct(this.form)">
                            <?php for ($i = 1; $i <= 7; $i += 1) {
                              echo '<option value="' . $i . '">' . $i . '</option>';
                            } ?> 
                        </select>-->

              </td>
            </tr>
          <?php }
          if ($_REQUEST['type'] == '3BAY') { ?>
            <tr style="display:none">
              <td>
                <h1>Shelves </h1>
                <select name="shelvs_a" onchange="getPriceOfProduct(this.form)">
                  <?php for ($i = 1; $i <= 7; $i += 1) {
                    echo '<option value="' . $i . '">' . $i . '</option>';
                  }  ?>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                <a class="thickbox" href='images/Mid-Shelves/3bay_faceA.jpg'>
                  <h1>Face Length A</h1>
                </a>
              </td>
              <td>
                <span id="face_length_a_span">
                  <select id="face_length_a" name="face_length_a" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);">
                    <option value="select">Select</option>
                    <?php for ($i = 12; $i <= 42; $i += 6) {
                      echo '<option value="' . $i . '">' . $i . '"</option>';
                    }
                    echo '<option value="custom">Custom</option>' ?><option value="NG">No Glass</option>
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
              <td>
                <a class="thickbox" href='images/Mid-Shelves/3bay_faceB.jpg'>
                  <h1>Face Length B</h1>
                </a>
              </td>
              <td>
                <span id="face_length_b_span">
                  <select id="face_length_b" name="face_length_b" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);">
                    <option value="select">Select</option>
                    <?php for ($i = 12; $i <= 42; $i += 6) {
                      echo '<option value="' . $i . '">' . $i . '"</option>';
                    }
                    echo '<option value="custom">Custom</option>' ?> <option value="NG">No Glass</option>
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
              <td>

                <!--<h1>Shelves B</h1>
                        <select name="shelvs_b" onchange="getPriceOfProduct(this.form)">
                            <?php for ($i = 1; $i <= 7; $i += 1) {
                              echo '<option value="' . $i . '">' . $i . '</option>';
                            } ?> 
                        </select>-->

              </td>
            </tr>
            <tr>
              <td>
                <a class="thickbox" href='images/Mid-Shelves/3bay_faceC.jpg'>
                  <h1>Face Length C</h1>
                </a>
              </td>
              <td>
                <span id="face_length_c_span">
                  <select id="face_length_c" name="face_length_c" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);">
                    <option value="select">Select</option>
                    <?php for ($i = 12; $i <= 42; $i += 6) {
                      echo '<option value="' . $i . '">' . $i . '"</option>';
                    }
                    echo '<option value="custom">Custom</option>' ?> <option value="NG">No Glass</option>
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
              <td>

                <!--<h1>Shelves C</h1>
                        <select name="shelvs_c" onchange="getPriceOfProduct(this.form)">
                            <?php for ($i = 1; $i <= 7; $i += 1) {
                              echo '<option value="' . $i . '">' . $i . '</option>';
                            } ?> 
                        </select>-->

              </td>
            </tr>
          <?php  }
          if ($_REQUEST['type'] == '4BAY') { ?>
            <tr style="display:none">
              <td>

                <h1>Shelves </h1>
                <select name="shelvs_a" onchange="getPriceOfProduct(this.form)">
                  <?php for ($i = 1; $i <= 7; $i += 1) {
                    echo '<option value="' . $i . '">' . $i . '</option>';
                  }  ?>
                </select>

              </td>
            </tr>
            <tr>
              <td>
                <a class="thickbox" href='images/Mid-Shelves/4bay_faceA.jpg'>
                  <h1>Face Length A</h1>
                </a>
              </td>
              <td>
                <span id="face_length_a_span">
                  <select id="face_length_a" name="face_length_a" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);">
                    <option value="select">Select</option>
                    <?php for ($i = 12; $i <= 42; $i += 6) {
                      echo '<option value="' . $i . '">' . $i . '"</option>';
                    }
                    echo '<option value="custom">Custom</option>' ?><option value="NG">No Glass</option>
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
              <td>
                <a class="thickbox" href='images/Mid-Shelves/4bay_faceB.jpg'>
                  <h1>Face Length B</h1>
                </a>
              </td>
              <td>
                <span id="face_length_b_span">
                  <select id="face_length_b" name="face_length_b" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);">

                    <option value="select">Select</option>
                    <?php for ($i = 12; $i <= 42; $i += 6) {
                      echo '<option value="' . $i . '">' . $i . '"</option>';
                    }
                    echo '<option value="custom">Custom</option>' ?> <option value="NG">No Glass</option>
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
              <td>

                <!--<h1>Shelves B</h1>
                        <select name="shelvs_b" onchange="getPriceOfProduct(this.form)">
                            <?php for ($i = 1; $i <= 7; $i += 1) {
                              echo '<option value="' . $i . '">' . $i . '</option>';
                            } ?> 
                        </select>-->

              </td>
            </tr>
            <tr>
              <td>
                <a class="thickbox" href='images/Mid-Shelves/4bay_faceC.jpg'>
                  <h1>Face Length C</h1>
                </a>
              </td>
              <td>
                <span id="face_length_c_span">
                  <select id="face_length_c" name="face_length_c" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);">
                    <option value="select">Select</option>
                    <?php for ($i = 12; $i <= 42; $i += 6) {
                      echo '<option value="' . $i . '">' . $i . '"</option>';
                    }
                    echo '<option value="custom">Custom</option>' ?> <option value="NG">No Glass</option>
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
              <td>
                <a class="thickbox" href='images/Mid-Shelves/4bay_faceD.jpg'>
                  <h1>Face Length D</h1>
                </a>
              </td>
              <td>
                <span id="face_length_d_span">
                  <select id="face_length_d" name="face_length_d" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);">
                    <option value="select">Select</option>
                    <?php for ($i = 12; $i <= 42; $i += 6) {
                      echo '<option value="' . $i . '">' . $i . '"</option>';
                    }
                    echo '<option value="custom">Custom</option>' ?><option value="NG">No Glass</option>
                  </select>
                </span>
              </td>
              <td>
                <span id="errormsgfirstname">
                  <img id="glass_d_err" src="img/iconCheckOff.gif">
                </span>
              </td>
            </tr>
            <tr>
              <td>

                <!--<h1>Shelves C</h1>
                        <select name="shelvs_c" onchange="getPriceOfProduct(this.form)">
                            <?php for ($i = 1; $i <= 7; $i += 1) {
                              echo '<option value="' . $i . '">' . $i . '</option>';
                            } ?> 
                        </select>-->

              </td>
            </tr>
          <?php  } ?>
        </table>

      </div>
      <div class="tables-options">
        <table class="test-round" cellpadding="0" cellspacing="0" width="100%" style="border: 1px solid white;border-radius: 5px;">
          <tr>
            <td colspan=3>
              <center>
                <h2 class="heading_all"><span style="float:left">&nbsp;&nbsp2)</span>Options
              </center>
              </h2>
            </td>
          </tr>
          <tr>
            <td><a class="thickbox" style="text-color:#c7f900 !important" href=<?php echo '"images/' . $category_name . '/RADIUS.jpg"'; ?>>
                <h1>Glass Corners</h1>
              </a></td>
            <td>

              <?php

              echo $glass_type;
              ?>
              <select id="checkbox2" name="rounded_corners" style="margin:4px;" onchange="getPriceOfProduct(this.form);">
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
                <img id="round_err" src="img/iconCheckOn.gif">
              </span>
            </td>
          </tr>
          <tr>
            <td ><a class="thickbox" href='images/Finishes.jpg'>
                <h1>Post Finish</h1>
              </a>
              </td><td>
              <select id="choose_finish2" name="choose_finish" onchange="getPriceOfProduct(this.form)">

                <?php
                if ($finish_type == 'SS') {
                  echo '<option value="SL" selected>Brushed Stainless</option>';
                } else {
                  echo '<option value="SL">Brushed Stainless</option>';
                }
                if ($finish_type == 'CB') {
                  echo '<option value="PC" selected>Coated Black</option>';
                } else {
                  echo '<option value="PC">Coated Black</option>';
                }
                ?>
              </select>
            </td>
            <td>
              <span id="errormsgfirstname">
                <img id="finish_err" src="img/iconCheckOn.gif">
              </span>
            </td>
          </tr>
        </table>
    </td>

  </tr>
</table>

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
            <h2 class="heading_all"><span style="float:left">&nbsp;&nbsp;3)</span>Quote</h2>
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

      <tr style="display:none;">

        <td align="left">Flange:</td>
        <td id="flange-cover" align="right">0.00</td>

      </tr>

      <tr>

        <td align="left">Face Glass:</td>
        <td id="face-glass" align="right">0.00</td>

      </tr>

      <tr style="display:none;">

        <td align="left">Left Shelf Post:</td>
        <td id="left-post-sel" align="right">0.00</td>

      </tr>

      <tr style="display:none;">

        <td align="left">Transition Shelf Post:</td>
        <td id="trasition-post-sel" align="right">0.00</td>

      </tr>

      <tr style="display:none;">

        <td align="left">Right Shelf Post:</td>
        <td id="right-post-sel" align="right">0.00</td>

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
  <center><h2 class="heading_all" id="addcartandfavorite"><span style="float:left;">&nbsp;&nbsp;&nbsp;4)</span><div class="addcartandfavdiv">Action</div></h2></center>
   

    <!--td><h1>Add to Cart</h1></td-->

    <input type="hidden" id="c_glass_face" name="c_glass_face" value="" />
    <input type="hidden" id="c_glass_face_val" name="c_glass_face_val" value="" />

    <input type="hidden" id="c_glass_right" name="c_glass_right" value="" />
    <input type="hidden" id="c_glass_right_val" name="c_glass_right_val" value="" />

    <input type="hidden" id="c_glass_left" name="c_glass_left" value="" />
    <input type="hidden" id="c_glass_left_val" name="c_glass_left_val" value="" />

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

    <input type="hidden" id="c_glass_a" name="c_glass_a" value="" />

    <input type="hidden" id="c_glass_a_val" name="c_glass_a_val" value="" />

    <input type="hidden" id="c_glass_post_left" name="c_glass_post_left" value="" />
    <input type="hidden" id="c_glass_post_right" name="c_glass_post_right" value="" />

    <input type="hidden" id="c_glass_post_val" name="c_glass_post_val" value="" />

    <input type="hidden" id="c_glass_b" name="c_glass_b" value="" />

    <input type="hidden" id="c_glass_b_val" name="c_glass_b_val" value="" />

    <input type="hidden" id="c_glass_c" name="c_glass_c" value="" />

    <input type="hidden" id="c_glass_c_val" name="c_glass_c_val" value="" />

    <input type="hidden" id="c_glass_d" name="c_glass_d" value="" />

    <input type="hidden" id="c_glass_d_val" name="c_glass_d_val" value="" />

    <input type="hidden" id="is_custom" name="is_custom" value="" />

    <input type="hidden" name="link" id="link">
    <input type="hidden" id="product_type" name="product_type" value="<?php echo $category_name; ?>" />
    <input type="hidden" id="msg" name="msg" value="" />
    <!--td><h1>Add to Cart</h1></td-->
    <td colspan="2" align="center"><input type="hidden" name="type" value="<?= $_REQUEST['type'] ?>" />
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
<script type="text/javascript">
  depthsss = "<?= $depthsss; ?>";
  category_name = "<?= $category_name ?>";
  osc = "<?= $_REQUEST['osCsid']; ?>";
  im_id = "<?= $im_id; ?>";
  ms = '<?php echo $ms ?>';
</script>
<script src="includes/model_files/Mid-Shelves/Mid-Shelves.js"></script>