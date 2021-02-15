<?php
$page_title='Sneeze Guard Portable | ADM Sneezeguards| Condition'; 
$page_description='sneeze guard are available here you will find various shapes, styles, sizes and colors at reasonable cost. Order online.';
$page_keyword='ADM Sneezeguards contact us, conditions sneeze guard, Sneeze Guard Questions, Common questions Sneeze Guards, Sneeze Guard Manufacturer company, sneeze posts';
require('includes/application_top.php');
include('includes/header_new_design.php');



if (!tep_session_is_registered('customer_id')) {
  $navigation->set_snapshot();
  tep_redirect(tep_href_link(FILENAME_LOGIN, '', 'SSL'));
}

// needs to be included earlier to set the success message in the messageStack
require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_ACCOUNT_PASSWORD);

if (isset($HTTP_POST_VARS['action']) && ($HTTP_POST_VARS['action'] == 'process') && isset($HTTP_POST_VARS['formid']) && ($HTTP_POST_VARS['formid'] == $sessiontoken)) {
  $password_current = tep_db_prepare_input($HTTP_POST_VARS['password_current']);
  $password_new = tep_db_prepare_input($HTTP_POST_VARS['password_new']);
  $password_confirmation = tep_db_prepare_input($HTTP_POST_VARS['password_confirmation']);

  $error = false;

  if (strlen($password_new) < ENTRY_PASSWORD_MIN_LENGTH) {
    $error = true;

    $messageStack->add('account_password', ENTRY_PASSWORD_NEW_ERROR);
  } elseif ($password_new != $password_confirmation) {
    $error = true;

    $messageStack->add('account_password', ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING);
  }

  if ($error == false) {
    $check_customer_query = tep_db_query("select customers_password from " . TABLE_CUSTOMERS . " where customers_id = '" . (int)$customer_id . "'");
    $check_customer = tep_db_fetch_array($check_customer_query);

    if (tep_validate_password($password_current, $check_customer['customers_password'])) {
      tep_db_query("update " . TABLE_CUSTOMERS . " set customers_password = '" . tep_encrypt_password($password_new) . "' where customers_id = '" . (int)$customer_id . "'");

      tep_db_query("update " . TABLE_CUSTOMERS_INFO . " set customers_info_date_account_last_modified = now() where customers_info_id = '" . (int)$customer_id . "'");

      $messageStack->add_session('account', SUCCESS_PASSWORD_UPDATED, 'success');

      tep_redirect(tep_href_link(FILENAME_ACCOUNT, '', 'SSL'));
    } else {
      $error = true;

      $messageStack->add('account_password', ERROR_CURRENT_PASSWORD_NOT_MATCHING);
    }
  }
}

$breadcrumb->add(NAVBAR_TITLE_1, tep_href_link(FILENAME_ACCOUNT, '', 'SSL'));
$breadcrumb->add(NAVBAR_TITLE_2, tep_href_link(FILENAME_ACCOUNT_PASSWORD, '', 'SSL'));




?>
<?php
  if ($messageStack->size('account_password') > 0) {
    echo $messageStack->output('account_password');
  }
?>

<div class="divaccountpass" onmouseover="openCity(event, 'Hide');hide_cart_data()"><!-- deepak 4-1-2021 -->
<?php echo tep_draw_form('account_password', tep_href_link(FILENAME_ACCOUNT_PASSWORD, '', 'SSL'), 'post', 'onsubmit="return check_form(account_password);"', true) . tep_draw_hidden_field('action', 'process'); ?>

<div class="contentContainer container" align="center">
  <div class="form-group"><h2 class="accountpassheading">Change password</h2></div>
  <div>
    <span class="inputRequirement inputRequirementposition"><?php echo FORM_REQUIRED_INFORMATION; ?></span>
  </div>
<br><br>
  <div class="contentText" align="center">
    <table border="0" cellspacing="2" cellpadding="2" class="accountpasstable1">
      <tr>
        <td class="fieldKey" ><?php //echo ENTRY_PASSWORD_CURRENT; ?></td>
        <td class="fieldValue"><div class="form-group inputaccountpass"><?php echo tep_draw_password_field('password_current', '', 'placeholder="Current Password" class="form-control"') . '&nbsp;' . (tep_not_null(ENTRY_PASSWORD_CURRENT_TEXT) ? '<span class="inputRequirement">' . ENTRY_PASSWORD_CURRENT_TEXT . '</span>': ''); ?></div></td>
      </tr>
      <tr> 
        <td class="fieldKey"><?php //echo ENTRY_PASSWORD_NEW; ?></td>
        <td class="fieldValue"><div class="form-group inputaccountpass"><?php echo tep_draw_password_field('password_new', '', 'placeholder="New Password" class="form-control"') . '&nbsp;' . (tep_not_null(ENTRY_PASSWORD_NEW_TEXT) ? '<span class="inputRequirement">' . ENTRY_PASSWORD_NEW_TEXT . '</span>': ''); ?></div></td>
      </tr>
      <tr> 
        <td class="fieldKey"><?php //echo ENTRY_PASSWORD_CONFIRMATION; ?></td>
        <td class="fieldValue"><div class="form-group inputaccountpass"><?php echo tep_draw_password_field('password_confirmation', '', 'placeholder="Password Confirmation" class="form-control"') . '&nbsp;' . (tep_not_null(ENTRY_PASSWORD_CONFIRMATION_TEXT) ? '<span class="inputRequirement">' . ENTRY_PASSWORD_CONFIRMATION_TEXT . '</span>': ''); ?></div></td>
      </tr>
	  </table>
	  <table class="accountpassbtns">
	  <tr align="center">
      	<td style="width:25%" align="left"><a href="<?php echo tep_href_link(FILENAME_ACCOUNT, '', 'SSL') ?>"><button type="button" class="btn btn-outline-dark" style="">Back</button></a></td>
		  <td style="width:25%" align="right"><!--<input type="image"  src="img/new_icons/continue.png" alt="Continue" title=" Continue " primary="" class="continuebtnaccountpass" onclick="javascript:document.forms['checkout_payment'].submit();">--><input type="submit" value="Continue" primary="" class="btn btn-outline-dark" onclick="javascript:document.forms['checkout_payment'].submit();"></td>
      </tr>
     <!-- <tr>
      	<td><?php echo '<a href="'.tep_href_link(FILENAME_ACCOUNT, '', 'SSL').'">'.tep_image_button('button_back.gif', IMAGE_BUTTON_BACK).'</a>';?></td>
		
		<td align="right"><?php echo tep_image_submit("continue.gif", IMAGE_BUTTON_CONTINUE, 'primary'); ?></td>
      </tr>-->
    </table>
  </div>
</div>
</form>
</div>
<style>
.contentContainer
{
  margin-top: 10%;
}
.backbtnaccountpass
{
  height: auto;
  width: 40%;
}
.continuebtnaccountpass
{
  height: auto;
  width: 40%;
}

.accountpasstable1
{
  width: 50%;
}
.inputaccountpass
{
  display: flex;
}
.inputRequirement
{
  font-size: 17px;
  color: red;
}
.accountpassbtns
{
  width: 90%;
}


.btn 
{
  font-family: DIN;
  border-radius: 0;
  border: none;
  text-transform: uppercase;
  color: #111;
  font-size: 15px;
  padding: 10px 15px;
  border:2px solid black;
}
.inputRequirementposition
{
  float: right;
}
@media screen and (max-width:800px)
{
  .inputRequirementposition
  {
    float: none;
  }
  .fieldValue .form-control
  {
    border: 0px !important;
    border-radius: 0px !important;
    outline: 2px solid #9a9a9b !important;
    height: 40px !important;
    font-size: 14px !important;
  }
  .accountpassbtns
  {
    width: 87%;
  }
  .divaccountpass
  {
    padding-top: 15%;
  }
  .accountpasstable1
  {
    width: 88%;
  }
  .inputRequirement
  {
    font-size: 14px;
  }
  .accountpassheading
  {
    font-size: 14px;
  }
  .btn 
  {
    font-family: DIN;
    border-radius: 0;
    border: none;
    text-transform: uppercase;
    color: #111;
    font-size: 14px;
    padding: 10px 15px;
    border: 2px solid black;
  }
}
</style>
<?php
include('includes/footer_new_design.php');
?>