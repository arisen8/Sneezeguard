<?php
ini_set('session.cookie_httponly',1);
ini_set('session.cookie_secure',1);
  
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/
ob_start();
require('includes/application_top.php');
require(DIR_WS_FUNCTIONS . 'url_validation.php');
$obj=new Urlvalidation();

if(isset($_GET['categories_id'])){
	$category_id=$_GET['categories_id'];
	if($obj->tep_check_special_charectar($category_id)){
		tep_redirect(tep_href_link('validation_faild', '', 'SSL'));
		exit;
	}}
if(isset($_GET['keywords'])){
  if($obj->tep_check_special_charectar($_GET['keywords'])){
    tep_redirect(tep_href_link('validation_faild', '', 'SSL'));
    exit;
  }
}
if(isset($_GET['sort'])){
  if($obj->tep_check_special_charectar($_GET['sort'])){
    tep_redirect(tep_href_link('validation_faild', '', 'SSL'));
    exit;
  }
}

  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_ADVANCED_SEARCH);

  $breadcrumb->add(NAVBAR_TITLE_1, tep_href_link(FILENAME_ADVANCED_SEARCH));

  require(DIR_WS_INCLUDES . 'header_new_design.php');
?>

<script type="text/javascript" src="includes/general.js"></script>
<script type="text/javascript">
function check_form() {
  var error_message = "<?php echo JS_ERROR; ?>";
  var error_found = false;
  var error_field;
  var keywords = document.advanced_search.keywords.value;
  var dfrom = document.advanced_search.dfrom.value;
  var dto = document.advanced_search.dto.value;
  var pfrom = document.advanced_search.pfrom.value;
  var pto = document.advanced_search.pto.value;
  var pfrom_float;
  var pto_float;

  if ( ((keywords == '') || (keywords.length < 1)) && ((dfrom == '') || (dfrom.length < 1)) && ((dto == '') || (dto.length < 1)) && ((pfrom == '') || (pfrom.length < 1)) && ((pto == '') || (pto.length < 1)) ) {
    error_message = error_message + "* <?php echo ERROR_AT_LEAST_ONE_INPUT; ?>\n";
    error_field = document.advanced_search.keywords;
    error_found = true;
  }

  if (dfrom.length > 0) {
    if (!IsValidDate(dfrom, '<?php echo DOB_FORMAT_STRING; ?>')) {
      error_message = error_message + "* <?php echo ERROR_INVALID_FROM_DATE; ?>\n";
      error_field = document.advanced_search.dfrom;
      error_found = true;
    }
  }

  if (dto.length > 0) {
    if (!IsValidDate(dto, '<?php echo DOB_FORMAT_STRING; ?>')) {
      error_message = error_message + "* <?php echo ERROR_INVALID_TO_DATE; ?>\n";
      error_field = document.advanced_search.dto;
      error_found = true;
    }
  }

  if ((dfrom.length > 0) && (IsValidDate(dfrom, '<?php echo DOB_FORMAT_STRING; ?>')) && (dto.length > 0) && (IsValidDate(dto, '<?php echo DOB_FORMAT_STRING; ?>'))) {
    if (!CheckDateRange(document.advanced_search.dfrom, document.advanced_search.dto)) {
      error_message = error_message + "* <?php echo ERROR_TO_DATE_LESS_THAN_FROM_DATE; ?>\n";
      error_field = document.advanced_search.dto;
      error_found = true;
    }
  }

  if (pfrom.length > 0) {
    pfrom_float = parseFloat(pfrom);
    if (isNaN(pfrom_float)) {
      error_message = error_message + "* <?php echo ERROR_PRICE_FROM_MUST_BE_NUM; ?>\n";
      error_field = document.advanced_search.pfrom;
      error_found = true;
    }
  } else {
    pfrom_float = 0;
  }

  if (pto.length > 0) {
    pto_float = parseFloat(pto);
    if (isNaN(pto_float)) {
      error_message = error_message + "* <?php echo ERROR_PRICE_TO_MUST_BE_NUM; ?>\n";
      error_field = document.advanced_search.pto;
      error_found = true;
    }
  } else {
    pto_float = 0;
  }

  if ( (pfrom.length > 0) && (pto.length > 0) ) {
    if ( (!isNaN(pfrom_float)) && (!isNaN(pto_float)) && (pto_float < pfrom_float) ) {
      error_message = error_message + "* <?php echo ERROR_PRICE_TO_LESS_THAN_PRICE_FROM; ?>\n";
      error_field = document.advanced_search.pto;
      error_found = true;
    }
  }

  if (error_found == true) {
    alert(error_message);
    error_field.focus();
    return false;
  } else {
    return true;
  }
}

function popupWindow(url) {
  window.open(url,'popupWindow','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,copyhistory=no,width=450,height=280,screenX=150,screenY=150,top=150,left=150')
}
</script>

<div class="m-5">
  <h1>&nbsp;</h1>
</div>
<?php
  if ($messageStack->size('search') > 0) {
    echo $messageStack->output('search');
  }
?>

<?php echo tep_draw_form('advanced_search', tep_href_link(FILENAME_ADVANCED_SEARCH_RESULT, '', 'NONSSL', false), 'get', 'onsubmit="return check_form(this);"') . tep_hide_session_id(); ?>

<div class="container"  onmouseover="openCity(event, 'Hide');hide_cart_data()">
<!-- deepak 4-1-2021 -->
  <h3 class="mb-2"><?php echo HEADING_TITLE_1; ?></h3>
  <h4 class="text-center"><?php echo HEADING_SEARCH_CRITERIA; ?></h4>

  <div class="contentText">
    <div>
      <input type="text" name="keywords" placeholder="Search........." class="form-control">
      <?php echo tep_draw_hidden_field('search_in_description', '1'); ?>
    </div>

    <br />

    <div>
    <div class="text-right">
    <input type="submit" value="SEARCH" class="tdbLink btn btn-dark" id="tdb1"> 
    </div>
    <div class="text-center">
    <?php echo '<a data-toggle="modal" data-target="#exampleModal" href="' . tep_href_link(FILENAME_POPUP_SEARCH_HELP) . '" target="_blank" onclick="$(\'#helpSearch\').dialog(\'open\'); return false;">' . TEXT_SEARCH_HELP_LINK . '</a>'; ?>
    </div>
    </div>

    <div id="helpSearch" title="<?php echo HEADING_SEARCH_HELP; ?>">
    </div>

<script type="text/javascript">
$('#helpSearch').dialog({
  autoOpen: false,
  buttons: {
    Ok: function() {
      $(this).dialog('close');
    }
  }
});
</script>

    <br />
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6 card p-3">
      <div class="form-group">
    <div class="row">
      <div class="col-3 col-md-3 col-sm-3 text-right">
          <label class="mt-1"><?php echo ENTRY_CATEGORIES; ?></label>
      </div>
      <div class="col-9 col-md-9 col-sm-9">
      <?php echo tep_draw_pull_down_menu('categories_id', tep_get_categories(array(array('id' => '', 'text' => TEXT_ALL_CATEGORIES))),'','class="form-control"'); ?>
      </div>
      </div>
    </div>
    <div class="form-group">
      <div class="row">
      <div class="col-md-12 text-right">
      <?php echo tep_draw_checkbox_field('inc_subcat', '1', true) . ' ' . ENTRY_INCLUDE_SUBCATEGORIES; ?>
      </div>
      </div>
    </div>
    <div class="form-group">
      <div class="row">
      <div class="col-3 col-md-3 col-sm-3 text-right">
          <label class="mt-1"><?php echo ENTRY_MANUFACTURERS; ?></label>
      </div>
      <div class="col-9 col-md-9 col-sm-9">
      <?php echo tep_draw_pull_down_menu('manufacturers_id', tep_get_manufacturers(array(array('id' => '', 'text' => TEXT_ALL_MANUFACTURERS))),'','class="form-control"'); ?>
      </div>
      </div>
    </div>
    <div class="form-group">
      <div class="row">
      <div class="col-3 col-md-3 col-sm-3 text-right">
          <label class="mt-1"><?php echo ENTRY_PRICE_FROM; ?></label>
      </div>
      <div class="col-9 col-md-9 col-sm-9">
        <?php echo tep_draw_input_field('pfrom','','class="form-control"'); ?>
      </div>
      </div>
    </div>
    <div class="form-group">
      <div class="row">
      <div class="col-3 col-md-3 col-sm-3 text-right">
          <label class="mt-1"><?php echo ENTRY_PRICE_TO; ?></label>
      </div>
      <div class="col-9 col-md-9 col-sm-9">
      <?php echo tep_draw_input_field('pto','','class="form-control"'); ?>
      </div>
      </div>
  </div>
  <div class="form-group">
      <div class="row">
      <div class="col-3 col-md-3 col-sm-3 text-right">
          <label class="mt-1"><?php echo ENTRY_DATE_FROM; ?></label>
      </div>
      <div class="col-9 col-md-9 col-sm-9">
      <input type="date" name="dfrom" id="dfrom" class="form-control">
      </div>
      </div>
  </div>
  <div class="form-group">
      <div class="row">
      <div class="col-3 col-md-3 col-sm-3 text-right">
          <label class="mt-1"><?php echo ENTRY_DATE_TO; ?></label>
      </div>
      <div class="col-9 col-md-9 col-sm-9">
        <input type="date" name="dto" id="dto" class="form-control">
      </div>
      </div>
  </div>
      </div>
      <div class="col-md-3"></div>
    </div>
    
  </div>
  </div>
</div>

</form>
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rearch Help</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p><?php echo TEXT_SEARCH_HELP; ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php
  require(DIR_WS_INCLUDES . 'footer_new_design.php');
?>
