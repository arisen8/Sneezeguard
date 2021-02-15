<?php
ini_set('session.cookie_httponly',1);
  ini_set('session.cookie_secure',1);
  
require('includes/application_top.php');
require(DIR_WS_INCLUDES . 'header_new_design.php');

  

require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_PASSWORD_FORGOTTEN);

if (isset($HTTP_GET_VARS['action']) && ($HTTP_GET_VARS['action'] == 'process') && isset($HTTP_POST_VARS['formid']) && ($HTTP_POST_VARS['formid'] == $sessiontoken)) {
    
    
    // reCAPTCHA - start
// $recaptcha = new \ReCaptcha\ReCaptcha(RECAPTCHA_PRIVATE_KEY);
// $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

// if ($resp->isSuccess()) {
    
    
    
  $email_address = tep_db_prepare_input($HTTP_POST_VARS['email_address']);

  $check_customer_query = tep_db_query("select customers_firstname, customers_lastname, customers_password, customers_id from " . TABLE_CUSTOMERS . " where customers_email_address = '" . encrypt_email(tep_db_input($email_address), ENCRYPTION_KEY_EMAIL) . "'");
  if (tep_db_num_rows($check_customer_query)) {
    $check_customer = tep_db_fetch_array($check_customer_query);

    $new_password = tep_create_random_value(ENTRY_PASSWORD_MIN_LENGTH);
    $crypted_password = tep_encrypt_password($new_password);

     tep_db_query("update " . TABLE_CUSTOMERS . " set customers_password = '" . tep_db_input($crypted_password) . "' where customers_id = '" . (int)$check_customer['customers_id'] . "'");

     tep_mail($check_customer['customers_firstname'] . ' ' . $check_customer['customers_lastname'], $email_address, EMAIL_PASSWORD_REMINDER_SUBJECT, sprintf(EMAIL_PASSWORD_REMINDER_BODY, $new_password), STORE_OWNER, STORE_OWNER_EMAIL_ADDRESS);

     $messageStack->add_session('login', SUCCESS_PASSWORD_SENT, 'success');
    
    tep_redirect(tep_href_link(FILENAME_LOGIN, '', 'SSL'));
  } else {
    $messageStack->add('password_forgotten', TEXT_NO_EMAIL_ADDRESS_FOUND);
  }
  
  
// }
  
  
  
  
}








$breadcrumb->add(NAVBAR_TITLE_1, tep_href_link(FILENAME_LOGIN, '', 'SSL'));
$breadcrumb->add(NAVBAR_TITLE_2, tep_href_link(FILENAME_PASSWORD_FORGOTTEN, '', 'SSL'));


?>
<style>

</style>
<script>
	$(document).ready(function(){
		if (document.all && !document.querySelector) {
   			$("#ex1").css('width',"100%");
   			$(".price_table").css("text-align","left");
		}
   	});

</script>
<div class="container" style="margin-top: 100px;">

<h2 class="text-center"><?php echo HEADING_TITLE; ?></h2>

<?php
  if ($messageStack->size('password_forgotten') > 0) {
    echo $messageStack->output('password_forgotten');
  }
?>

<?php echo tep_draw_form('password_forgotten', tep_href_link(FILENAME_PASSWORD_FORGOTTEN, 'action=process', 'SSL'), 'post', '', true); ?>


 

	
<div class="row">
    <div class="col-sm-3 "></div>
    <div class="col-sm-6 ">
	    <div class="form-group text-center"><?php echo TEXT_MAIN; ?></div>
	
		<input type="text" name="email_address" class="form-control" placeholder="<?php echo ENTRY_EMAIL_ADDRESS; ?>" >

	    <!-- ReCaptcha Start -->
  <?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?>
  <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_PUBLIC_KEY; ?>"></div>
  <!-- ReCaptcha End -->
		


  <div class="row mt-4">
  
<div class="col-6">
  
    <div class="text-left"><a  href="<?php echo tep_href_link(FILENAME_LOGIN, '', 'SSL') ?>"   role="button" class="btn btn-outline-dark"> Back</span></a></span> </div>
  </div> 
  
  
  <div class="col-6">
  <div class="text-right"><span class=""><button  type="submit" class="btn btn-outline-dark" role="button" aria-disabled="false">Continue</span></button></span></div>
   

  
  </div>
  </div>
  
  
  
  


</form>
	</div>
    <div class="col-sm-3"></div>
</div>


<div class="mt-5 ">
<h1>&nbsp;</h1>
</div>



</form>
</div>
<?php
require(DIR_WS_INCLUDES . 'footer_new_design.php');
?>