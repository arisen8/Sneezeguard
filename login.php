<?php 
ini_set('session.cookie_httponly',1);
  ini_set('session.cookie_secure',1);
  
$page_title='Glass Panels | Sneeze Guard | Login | Signin - ADM Sneezeguards'; 
$page_description='ADM Sneezeguards manufactures for the Grocery service industry, we offer industry standard Glass Panels models to choose with latest innovative designs.';
$page_keyword='Sneeze Guard, Shop online Sneeze Guard, Sneeze Guard custom, sneeze posts, Glass Panels';

ini_set('display_errors', 0);
ob_start();
require("includes/application_top.php");
// require(DIR_WS_FUNCTIONS . 'ReCaptcha/autoload.php');
require(DIR_WS_INCLUDES . 'header_new_design.php'); 

// redirect the customer to a friendly cookie-must-be-enabled page if cookies are disabled (or the session has not started)


 // ReCaptcha Start
//   require(DIR_WS_FUNCTIONS . 'ReCaptcha/autoload.php'); // reCAPTCHA
  // ReCaptcha End








  if ($session_started == false) {

    tep_redirect(tep_href_link(FILENAME_COOKIE_USAGE));

  }



  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_LOGIN);



  //$error = false;
//$resp ='';

if($HTTP_GET_VARS['action'] == 'process')

{
  if (isset($HTTP_GET_VARS['action']) && ($HTTP_GET_VARS['action'] == 'process') && isset($HTTP_POST_VARS['formid']) && ($HTTP_POST_VARS['formid'] == $sessiontoken)) {
    if(isset($_POST['captcha']) && $_SESSION['captcha']!=$_POST['captcha']){
      $captchamismatch=true;
	    $error = true;
    }
	else{



    $email_address = tep_db_prepare_input($HTTP_POST_VARS['email_address']);

    $password = tep_db_prepare_input($HTTP_POST_VARS['password']);



// Check if email exists

    $check_customer_query = tep_db_query("select customers_id, customers_firstname, customers_password, customers_email_address, customers_default_address_id from " . TABLE_CUSTOMERS . " where customers_email_address = '" .encrypt_email(tep_db_input($email_address), ENCRYPTION_KEY_EMAIL) . "'");

    if (!tep_db_num_rows($check_customer_query)) {

      $error = true;

    } else {

      $check_customer = tep_db_fetch_array($check_customer_query);

// Check that password is good

      if (!tep_validate_password($password, $check_customer['customers_password'])) {

        $error = true;

      } else {

        if (SESSION_RECREATE == 'True') {

          tep_session_recreate();

        }



// migrate old hashed password to new phpass password

        if (tep_password_type($check_customer['customers_password']) != 'phpass') {

          tep_db_query("update " . TABLE_CUSTOMERS . " set customers_password = '" . tep_encrypt_password($password) . "' where customers_id = '" . (int)$check_customer['customers_id'] . "'");

        }



        $check_country_query = tep_db_query("select entry_country_id, entry_zone_id from " . TABLE_ADDRESS_BOOK . " where customers_id = '" . (int)$check_customer['customers_id'] . "' and address_book_id = '" . (int)$check_customer['customers_default_address_id'] . "'");

        $check_country = tep_db_fetch_array($check_country_query);



        $customer_id = $check_customer['customers_id'];

        $customer_default_address_id = $check_customer['customers_default_address_id'];

        $customer_first_name = $check_customer['customers_firstname'];

        $customer_country_id = $check_country['entry_country_id'];

        $customer_zone_id = $check_country['entry_zone_id'];

        tep_session_register('customer_id');

        tep_session_register('customer_default_address_id');

        tep_session_register('customer_first_name');

        tep_session_register('customer_country_id');

        tep_session_register('customer_zone_id');



        tep_db_query("update " . TABLE_CUSTOMERS_INFO . " set customers_info_date_of_last_logon = now(), customers_info_number_of_logons = customers_info_number_of_logons+1 where customers_info_id = '" . (int)$customer_id . "'");



// reset session token

        $sessiontoken = md5(tep_rand() . tep_rand() . tep_rand() . tep_rand());



// restore cart contents

        

		tep_db_query("update " . TABLE_CUSTOMERS_INFO . " set customers_info_date_of_last_logon = now(), customers_info_number_of_logons = customers_info_number_of_logons+1 where customers_info_id = '" . (int)$customer_id . "'");

		tep_db_query("delete from " . TABLE_CUSTOMERS_BASKET . " where customers_id = '" . (int)$customer_id . "' and `product_val` = ''");
/*
		//tep_db_query("delete from " . TABLE_CUSTOMERS_BASKET . " where customers_id = '" . (int)$customer_id . "'");

       //tep_db_query("delete from " . TABLE_CUSTOMERS_BASKET_ATTRIBUTES . " where customers_id = '" . (int)$customer_id . "'");

		
		if((strpos($origin_href,'checkout_shipping.php') !== false))
		{
		$cart->restore_contents();	
		}
		else{
		$cart->restore_contents();
		}
        
        

$wishlist->add_wishlist();

calCulateQuantityad($_SESSION['product_custom'],$customer_id);

*/




		// tep_db_query("delete from " . TABLE_CUSTOMERS_BASKET . " where customers_id = '" . (int)$customer_id . "'");

       // tep_db_query("delete from " . TABLE_CUSTOMERS_BASKET_ATTRIBUTES . " where customers_id = '" . (int)$customer_id . "'");

		
		$cart->restore_contents();
		$wishlist->add_wishlist();

        

        if (sizeof($navigation->snapshot) > 0) {

          $origin_href = tep_href_link($navigation->snapshot['page'], tep_array_to_string($navigation->snapshot['get'], array(tep_session_name())), $navigation->snapshot['mode']);

          $navigation->clear_snapshot();


		//echo'<b style="color:red;">'; print_r($origin_href);  echo'</b><br />';
		// if((strpos($origin_href,'checkout_shipping.php') !== false))
		// {
			 // tep_href_link("shopping_cart1.php");
		// }
		// else{
			 tep_redirect($origin_href);
		//}
        // 

        } else {
            if($wishlist->isNotLogin) {
                $wishlist->isNotLogin = false;
                tep_redirect(tep_href_link("wishlist.php"));
            } else {
                $wishlist->isNotLogin = false;
                tep_redirect(tep_href_link(FILENAME_DEFAULT));
            }

        }

      }

    }

	}
}
    else {
      $error = true;
    }
	
	}
	else{
	 $error = false;	
	}
  

  if ($error == true) {
    if($captchamismatch){
      $messageStack->add('captcha', RECAPTCHA_ERROR);
    }else{
      $messageStack->add('login', TEXT_LOGIN_ERROR);
    }
      
  }

$text1=rand(1,9);
$text2=rand(1,9);
$captchatext=$text1." + ".$text2;
$captcha=$text1+$text2;
tep_session_register('captcha');
$captchamismatch=true;

  $breadcrumb->add(NAVBAR_TITLE, tep_href_link(FILENAME_LOGIN, '', 'SSL'));
?>
<script type="text/javascript" nonce="">
      recaptcha.anchor.ErrorMain.init("[\x22ainput\x22,null,null,null,null,null,[1,1,1]\n,\x22Localhost is not supported by default. To enable it, add it to the list of supported domains.\x22,5,null,null,null,[\x22https://www.google.com/intl/en/policies/privacy/\x22,\x22https://www.google.com/intl/en/policies/terms/\x22]\n]\n");
</script>

<!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
<body>
<section>
    <div class="mt-5">
        <h1>&nbsp;</h1>
    </div>
    <h2 class="text-center p-2 font-weight-bold">LOGIN</h2>
    <h4 class="text-center">LOG IN OR SIGN UP TO SNEEZEGUARD</h4>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 border-right pl-5 pr-5 pb-5">
            <?php echo tep_draw_form('login', tep_href_link('login.php', 'action=process', 'SSL'), 'post', '', true,'formspam'); ?>
                    <div>
                        <h6 class="text-uppercase font-weight-bold">Returning Customers</h6>
                    </div>
                    <div class="mt-2 mb-1">
                        <p class="text-dark font-weight-normal">I am a returning customer.</p>
                    </div>
                    <?= count($messageStack->messages)>0?'<div class="alert alert-danger mt-3 mb-3 ">'.$messageStack->output('login').''.$messageStack->output('captcha').'</div>':''?> 

                    <div class="form-group text-secondary">
                        <label for="email" class="text-uppercase">Email</label>
                        <input type="email" class="form-control" name="email_address" id="email">
                    </div>
                    <div class="form-group text-secondary">
                        <label for="password" class="text-uppercase">Password</label>
                        <input type="password" name="password" class="form-control" id="password" autocomplete="off">
                    </div>
                    <div class="form-group text-secondary">
                        <input type="text" name="captcha" class="form-control" placeholder="What is <?=$captchatext?> =">
                    </div>
                    <div class="form-group p-2 text-center">
                        <a href="<?php echo tep_href_link('password_forgotten.php', '', 'SSL') ?>" target="" rel="" class="text-danger">Forgot your password?</a>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-outline-dark form-control" onclick="javascript:document.forms['checkout_payment'].submit();" value="SIGN IN">
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-sm-6 pl-5 pr-5">
                <div>
                    <h6 class="text-uppercase font-weight-bold">Check out as a guest</h6>
                </div>
                <div class="mt-2 mb-1">
                    <p class="text-dark font-weight-normal">Proceed to checkout and create a Login ID with us .</p>
                </div>
                <div class="mt-4 text-uppercase cbtn">
                <input type="text" id="website" value="">
                <a href="<?php echo tep_href_link('create_account.php', '', 'SSL') ?>">
                <input type="submit" class="btn btn-outline-dark form-control p-2" value="CONTINUE AS GUEST">
                </a>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
<?php require(DIR_WS_INCLUDES . 'footer_new_design.php');?>
