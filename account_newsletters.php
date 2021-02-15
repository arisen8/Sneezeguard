<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  require('includes/application_top.php');

  if (!tep_session_is_registered('customer_id')) {
    $navigation->set_snapshot();
    tep_redirect(tep_href_link(FILENAME_LOGIN, '', 'SSL'));
  }

// needs to be included earlier to set the success message in the messageStack
  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_ACCOUNT_NEWSLETTERS);

  $newsletter_query = tep_db_query("select customers_newsletter from " . TABLE_CUSTOMERS . " where customers_id = '" . (int)$customer_id . "'");
  $newsletter = tep_db_fetch_array($newsletter_query);

  if (isset($HTTP_POST_VARS['action']) && ($HTTP_POST_VARS['action'] == 'process') && isset($HTTP_POST_VARS['formid']) && ($HTTP_POST_VARS['formid'] == $sessiontoken)) {
    if (isset($HTTP_POST_VARS['newsletter_general']) && is_numeric($HTTP_POST_VARS['newsletter_general'])) {
      $newsletter_general = tep_db_prepare_input($HTTP_POST_VARS['newsletter_general']);
    } else {
      $newsletter_general = '0';
    }

    if ($newsletter_general != $newsletter['customers_newsletter']) {
      $newsletter_general = (($newsletter['customers_newsletter'] == '1') ? '0' : '1');

      tep_db_query("update " . TABLE_CUSTOMERS . " set customers_newsletter = '" . (int)$newsletter_general . "' where customers_id = '" . (int)$customer_id . "'");
    }

    $messageStack->add_session('account', SUCCESS_NEWSLETTER_UPDATED, 'success');

    tep_redirect(tep_href_link(FILENAME_ACCOUNT, '', 'SSL'));
  }

  $breadcrumb->add(NAVBAR_TITLE_1, tep_href_link(FILENAME_ACCOUNT, '', 'SSL'));
  $breadcrumb->add(NAVBAR_TITLE_2, tep_href_link(FILENAME_ACCOUNT_NEWSLETTERS, '', 'SSL'));

  require(DIR_WS_INCLUDES . 'header_new_design.php');
?>


<style>
.account-newslatter{margin-top:100px; padding-top:90px;}
.account-newslatter p{font-size:15px;}

.account-newslatter h2{font-size:22px;}
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
@media screen and (max-width:800px)
{
  .contentContainer
  {
    width: 97%;
    margin-left: 2%;
  }
  .contentText
  {
    
  }
  .account-newslatter h2 {
    font-size: 15px;
}
}
</style>
<div class="container account-newslatter" onmouseover="openCity(event, 'Hide');hide_cart_data()"><!-- deepak 4-1-2021 -->
<table width="100%" cellpadding="0" cellspacing="0" style="padding:5px;"> 

<tr  >

<td >
<table width="100%" cellpadding="2" cellspacing="2">
<tr>

<td valign="top" >
<h2 style=" height:26px;"><?php echo HEADING_TITLE; ?></h2>

<?php echo tep_draw_form('account_newsletter', tep_href_link(FILENAME_ACCOUNT_NEWSLETTERS, '', 'SSL'), 'post', '', true) . tep_draw_hidden_field('action', 'process'); ?>

<div class="contentContainer" style="text-align:left">
  <h2><?php echo MY_NEWSLETTERS_TITLE; ?></h2>
<br />
  <div class="contentText" >
    <table border="0" cellspacing="2" cellpadding="2">
      <tr>
        <td><?php echo tep_draw_checkbox_field('newsletter_general', '1', (($newsletter['customers_newsletter'] == '1') ? true : false), 'onclick="checkBox(\'newsletter_general\')"'); ?></td>
        <td><p><strong><?php echo MY_NEWSLETTERS_GENERAL_NEWSLETTER; ?></strong><br /><?php echo MY_NEWSLETTERS_GENERAL_NEWSLETTER_DESCRIPTION; ?></p></td>
      </tr>
    </table>
  </div>

 <table width="100%">
   
	<tr>
      	<td colspan="2" height="50"></td>
		  </tr>
		
	<tr>
      	<td>
		
		<?php echo '<a href="'.tep_href_link(FILENAME_ACCOUNT, '', 'SSL').'" class="btn btn-outline-dark">Back</a>';?>
		
		
		</td>
		<td align="right"><input type="submit" value="Continue" class="btn btn-outline-dark"  onclick="javascript:document.forms['checkout_payment'].submit();"></td>
      </tr>
	  
      <!-- <tr>	<td><?php echo '<a href="'.tep_href_link(FILENAME_ACCOUNT, '', 'SSL').'">'.tep_image_button('button_back.gif', IMAGE_BUTTON_BACK).'</a>';?></td>
		
		<td align="right"><?php echo tep_image_submit("continue.gif", IMAGE_BUTTON_CONTINUE, 'primary'); ?></td>
      </tr>-->
	  <tr>
      	<td colspan="2" height="30"></td>
		  </tr>
 </table>
</div>

</form>
</td></tr></table></td></tr>

</table>
</div>






<?php
  require(DIR_WS_INCLUDES . 'footer_new_design.php');
?>
