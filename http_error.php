<?php
/*
  $Id: http_error.php,v 1.5
  2004/06/30 20:55:23 chaicka Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2004 osCommerce

  Released under the GNU General Public License
*/
//error_reporting(E_ALL);
//ini_set('display_errors', 0);

  require('includes/application_top.php');

  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_HTTP_ERROR);
  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_ADVANCED_SEARCH);


if(isset($_GET['error_id'])){
	$errorid=$_GET['error_id'];
if(is_numeric($errorid))
{
	
}
else{
tep_redirect(tep_href_link('validation_faild', '', 'SSL'));
		exit;
}
}

  //require(DIR_WS_INCLUDES . 'template_top.php');
  switch ($HTTP_GET_VARS['error_id']) {
     case '400':  $error_text = ERROR_400_DESC; break;
     case '401':  $error_text = ERROR_401_DESC; break;
     case '403':  $error_text = ERROR_403_DESC; break;
     case '404':  $error_text = ERROR_404_DESC; break;
     case '405':  $error_text = ERROR_405_DESC; break;
     case '408':  $error_text = ERROR_408_DESC; break;
     case '415':  $error_text = ERROR_415_DESC; break;
     case '416':  $error_text = ERROR_416_DESC; break;
     case '417':  $error_text = ERROR_417_DESC; break;
     case '500':  $error_text = ERROR_500_DESC; break;
     case '501':  $error_text = ERROR_501_DESC; break;
     case '502':  $error_text = ERROR_502_DESC; break;
     case '503':  $error_text = ERROR_503_DESC; break;
     case '504':  $error_text = ERROR_504_DESC; break;
     case '505':  $error_text = ERROR_505_DESC; break;
     default:     $error_text = UNKNOWN_ERROR_DESC; break;
  }

// Send the HTTP Error to Store Owner   -   Enviar error HTTP al email de la tienda
  if (EMAIL_HTTP_ERROR == 'true') {
    tep_mail(STORE_OWNER, STORE_OWNER_EMAIL_ADDRESS, EMAIL_TEXT_SUBJECT, sprintf(EMAIL_BODY, HTTP_SERVER, $HTTP_GET_VARS['error_id'], $error_text, date("d/m/Y G:i:s"), HTTP_SERVER . $_SERVER['REQUEST_URI'], $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT'], $_SERVER['HTTP_REFERER']), STORE_OWNER, STORE_OWNER_EMAIL_ADDRESS, '');
  }

// Save the HTTP Error Report to disk   -   Guardar informe con error HTTP en disco 

if (STORE_HTTP_ERROR == 'true') {
// change of 1.5 : check if there is there is a path given in the admin, if not store it ot catalog\log\http_error.log
if (STORE_HTTP_ERROR_LOG !="")  
{
error_log(strftime(STORE_PARSE_DATE_TIME_FORMAT) . ',' . $HTTP_GET_VARS['error_id'] . ',' . HTTP_SERVER . $_SERVER['REQUEST_URI'] . ',' . $_SERVER['REMOTE_ADDR'] . ',' . $_SERVER['HTTP_USER_AGENT'] . ',' . $_SERVER['HTTP_REFERER'] . "\n", 3, STORE_HTTP_ERROR_LOG);
}
else
{
 error_log(strftime(STORE_PARSE_DATE_TIME_FORMAT) . ',' . $HTTP_GET_VARS['error_id'] . ',' . HTTP_SERVER . $_SERVER['REQUEST_URI'] . ',' . $_SERVER['REMOTE_ADDR'] . ',' . $_SERVER['HTTP_USER_AGENT'] . ',' . $_SERVER['HTTP_REFERER'] . "\n", 3, DIR_FS_CATALOG . '/log/http_error.log');
 }
}

?>

<script language="javascript"><!--
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

  if ( ((keywords == '') || (keywords.length < 1)) && ((dfrom == '') || (dfrom == '<?php echo DOB_FORMAT_STRING; ?>') || (dfrom.length < 1)) && ((dto == '') || (dto == '<?php echo DOB_FORMAT_STRING; ?>') || (dto.length < 1)) && ((pfrom == '') || (pfrom.length < 1)) && ((pto == '') || (pto.length < 1)) ) {
    error_message = error_message + "* <?php echo ERROR_AT_LEAST_ONE_INPUT; ?>\n";
    error_field = document.advanced_search.keywords;
    error_found = true;
  }

  if ((dfrom.length > 0) && (dfrom != '<?php echo DOB_FORMAT_STRING; ?>')) {
    if (!IsValidDate(dfrom, '<?php echo DOB_FORMAT_STRING; ?>')) {
      error_message = error_message + "* <?php echo ERROR_INVALID_FROM_DATE; ?>\n";
      error_field = document.advanced_search.dfrom;
      error_found = true;
    }
  }

  if ((dto.length > 0) && (dto != '<?php echo DOB_FORMAT_STRING; ?>')) {
    if (!IsValidDate(dto, '<?php echo DOB_FORMAT_STRING; ?>')) {
      error_message = error_message + "* <?php echo ERROR_INVALID_TO_DATE; ?>\n";
      error_field = document.advanced_search.dto;
      error_found = true;
    }
  }

  if ((dfrom.length > 0) && (dfrom != '<?php echo DOB_FORMAT_STRING; ?>') && (IsValidDate(dfrom, '<?php echo DOB_FORMAT_STRING; ?>')) && (dto.length > 0) && (dto != '<?php echo DOB_FORMAT_STRING; ?>') && (IsValidDate(dto, '<?php echo DOB_FORMAT_STRING; ?>'))) {
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
    RemoveFormatString(document.advanced_search.dfrom, "<?php echo DOB_FORMAT_STRING; ?>");
    RemoveFormatString(document.advanced_search.dto, "<?php echo DOB_FORMAT_STRING; ?>");
    return true;
  }
}

function popupWindow(url) {
  window.open(url,'popupWindow','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,copyhistory=no,width=450,height=280,screenX=150,screenY=150,top=150,left=150')
}
//--></script>

<?php 


include('includes/header_new_design.php');

// include('includes/configure.php');

		


 ?>
<!-- header_eof //-->
<style>
.error-page-contaner{margin-top:100px;}
</style>
<!-- body //-->
<table border="0" width="100%" cellspacing="3" cellpadding="3" class="error-page-contaner">
  <tr>
    <td width="<?php echo BOX_WIDTH; ?>" valign="top"><table border="0" width="<?php echo BOX_WIDTH; ?>" cellspacing="0" cellpadding="2">
<!-- left_navigation //-->
<?php //require(DIR_WS_INCLUDES . 'column_left.php'); ?>
<!-- left_navigation_eof //-->
    </table></td>
<!-- body_text //-->
    <td width="100%" valign="top"><table border="0" width="100%" cellspacing="0" cellpadding="0">
      <tr>
        <td><table border="0" width="100%" cellspacing="0" cellpadding="0">
          <tr>
            <td class="pageHeading"><h2><?php echo sprintf(HEADING_TITLE, $HTTP_GET_VARS['error_id']); ?></h2></td>
            <td class="pageHeading" align="right"><?php echo tep_image(DIR_WS_IMAGES . 'table_background_password_forgotten.gif', HEADING_TITLE, HEADING_IMAGE_WIDTH, HEADING_IMAGE_HEIGHT); ?></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
      </tr>
	  <tr>
	  <td style="text-align:center;"> <img src="images/new_logo_main.png" title="sneeze guard" alt="sneeze guard" style="width: 80%;"> </td>
	  </tr>
      <tr>
        <td><br><table border="0" width="100%" cellspacing="0" cellpadding="2">
          <tr>
            <td class="main"><?php echo sprintf(TEXT_INFORMATION, $error_text)?></td>
          </tr>
        </table></td>
      </tr>
	  
	  
	  <tr style="height:100px;text-align:center;" >
	  <td><a href="index.php"><button class="btn btn-outline-dark"><b>Go To Homepage</b></button></a></td>
	  </tr>
      
    </table>
 <?php //this is where I added the advanced Search
  //echo tep_draw_form('advanced_search', tep_href_link(FILENAME_ADVANCED_SEARCH_RESULT, '', 'NONSSL', false), 'get', 'onSubmit="return check_form(this);"') . tep_hide_session_id(); ?><table border="0" width="100%" cellspacing="0" cellpadding="0">
      <tr>
        <td></td>
      </tr>
      <tr>
        <td><?php //echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
      </tr>
  
  
  
  
      <tr>
        <td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
      </tr>
      <tr>
        <td><table border="0" width="100%" cellspacing="0" cellpadding="2">
          <tr>
            <td class="smallText"><?php //echo '<a href="javascript:popupWindow(\'' . tep_href_link(FILENAME_POPUP_SEARCH_HELP) . '\')">' . TEXT_SEARCH_HELP_LINK . '</a>'; ?></td>
            <td class="smallText" align="right"><?php //echo tep_image_submit('button_search.gif', IMAGE_BUTTON_SEARCH); ?></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
      </tr>
      <tr>
        <td><table border="0" width="100%" cellspacing="0" cellpadding="2" class="infoBox">
          <tr class="infoBoxContents">
            <td></td>
          </tr>
        </table></td>
      </tr>
    </table></form></td>
<!-- body_text_eof //-->
    <td width="<?php echo BOX_WIDTH; ?>" valign="top"><table border="0" width="<?php echo BOX_WIDTH; ?>" cellspacing="0" cellpadding="2">
<!-- right_navigation //-->
<?php //require(DIR_WS_INCLUDES . 'column_right.php'); ?>
<!-- right_navigation_eof //-->
    </table></td>
  </tr>
</table>
<!-- body_eof //-->

<!-- footer //-->
<?php require(DIR_WS_INCLUDES . 'footer.php'); ?>
<!-- footer_eof //-->
<br>

<?php require(DIR_WS_INCLUDES . 'application_bottom.php'); ?>