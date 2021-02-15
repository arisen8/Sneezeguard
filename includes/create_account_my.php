<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  require('includes/application_top.php');
  
  
  
   // ReCaptcha Start
  require(DIR_WS_FUNCTIONS . 'ReCaptcha/autoload.php'); // reCAPTCHA
  // ReCaptcha End


// needs to be included earlier to set the success message in the messageStack
  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_CREATE_ACCOUNT);

  $process = false;
  if (isset($HTTP_POST_VARS['action']) && ($HTTP_POST_VARS['action'] == 'process') && isset($HTTP_POST_VARS['formid']) && ($HTTP_POST_VARS['formid'] == $sessiontoken)) {
    $process = true;
   /*if (ACCOUNT_GENDER == 'true') {
      if (isset($HTTP_POST_VARS['gender'])) {
        $gender = tep_db_prepare_input($HTTP_POST_VARS['gender']);
      } else {
        $gender = false;
      }
    }*/
    $firstname = tep_db_prepare_input($HTTP_POST_VARS['firstname']);
    $lastname = tep_db_prepare_input($HTTP_POST_VARS['lastname']);
    //if (ACCOUNT_DOB == 'true') $dob = tep_db_prepare_input($HTTP_POST_VARS['dob']);
    $email_address = tep_db_prepare_input($HTTP_POST_VARS['email_address']);
    if (ACCOUNT_COMPANY == 'true') $company = tep_db_prepare_input($HTTP_POST_VARS['company']);
    $street_address = tep_db_prepare_input($HTTP_POST_VARS['street_address']);
    if (ACCOUNT_SUBURB == 'true') $suburb = tep_db_prepare_input($HTTP_POST_VARS['suburb']);
    $postcode = tep_db_prepare_input($HTTP_POST_VARS['postcode']);
    $city = tep_db_prepare_input($HTTP_POST_VARS['city']);
    if (ACCOUNT_STATE == 'true') {
      $state = tep_db_prepare_input($HTTP_POST_VARS['state']);
      if (isset($HTTP_POST_VARS['zone_id'])) {
        $zone_id = tep_db_prepare_input($HTTP_POST_VARS['zone_id']);
      } else {
        $zone_id = false;
      }
    }
    $country = tep_db_prepare_input($HTTP_POST_VARS['country']);
    $telephone = tep_db_prepare_input($HTTP_POST_VARS['telephone']);
    $fax = tep_db_prepare_input($HTTP_POST_VARS['fax']);
    if (isset($HTTP_POST_VARS['newsletter'])) {
      $newsletter = tep_db_prepare_input($HTTP_POST_VARS['newsletter']);
    } else {
      $newsletter = false;
    }
	
	
	
	
	
    $password = tep_db_prepare_input($HTTP_POST_VARS['password']);
    $confirmation = tep_db_prepare_input($HTTP_POST_VARS['confirmation']);

    $error = false;
	
	// reCAPTCHA - start
  $recaptcha = new \ReCaptcha\ReCaptcha(RECAPTCHA_PRIVATE_KEY);
  $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
  // if (!$resp->isSuccess()) {
    // $error = true;

    // $messageStack->add('create_account', RECAPTCHA_ERROR);
  // }
  // reCAPTCHA - end

	
	

   /* if (ACCOUNT_GENDER == 'true') {
      if ( ($gender != 'm') && ($gender != 'f') ) {
        $error = true;

        $messageStack->add('create_account', ENTRY_GENDER_ERROR);
      }
    }*/

    if (strlen($firstname) < ENTRY_FIRST_NAME_MIN_LENGTH) {
      $error = true;

      $messageStack->add('create_account', ENTRY_FIRST_NAME_ERROR);
    }

    if (strlen($lastname) < ENTRY_LAST_NAME_MIN_LENGTH) {
      $error = true;

      $messageStack->add('create_account', ENTRY_LAST_NAME_ERROR);
    }

   /* if (ACCOUNT_DOB == 'true') {
      if ((is_numeric(tep_date_raw($dob)) == false) || (@checkdate(substr(tep_date_raw($dob), 4, 2), substr(tep_date_raw($dob), 6, 2), substr(tep_date_raw($dob), 0, 4)) == false)) {
        $error = true;

        $messageStack->add('create_account', ENTRY_DATE_OF_BIRTH_ERROR);
      }
    }*/

    if (strlen($email_address) < ENTRY_EMAIL_ADDRESS_MIN_LENGTH) {
      $error = true;

      $messageStack->add('create_account', ENTRY_EMAIL_ADDRESS_ERROR);
    } elseif (tep_validate_email($email_address) == false) {
      $error = true;

      $messageStack->add('create_account', ENTRY_EMAIL_ADDRESS_CHECK_ERROR);
    } else {
      $check_email_query = tep_db_query("select count(*) as total from " . TABLE_CUSTOMERS . " where customers_email_address = '" . encrypt_email(tep_db_input($email_address), ENCRYPTION_KEY_EMAIL). "'");
      $check_email = tep_db_fetch_array($check_email_query);
      if ($check_email['total'] > 0) {
        $error = true;

        $messageStack->add('create_account', ENTRY_EMAIL_ADDRESS_ERROR_EXISTS);
      }
    }

    if (strlen($street_address) < ENTRY_STREET_ADDRESS_MIN_LENGTH) {
      $error = true;

      $messageStack->add('create_account', ENTRY_STREET_ADDRESS_ERROR);
    }

    if (strlen($postcode) < ENTRY_POSTCODE_MIN_LENGTH) {
      $error = true;

      $messageStack->add('create_account', ENTRY_POST_CODE_ERROR);
    }

    if (strlen($city) < ENTRY_CITY_MIN_LENGTH) {
      $error = true;

      $messageStack->add('create_account', ENTRY_CITY_ERROR);
    }

    if (!is_numeric($country) != false) {
      $error = true;

      $messageStack->add('create_account', ENTRY_COUNTRY_ERROR);
    }

    if (ACCOUNT_STATE == 'true') {
      $zone_id = 0;
      $check_query = tep_db_query("select count(*) as total from " . TABLE_ZONES . " where zone_country_id = '" . (int)$country . "'");
      $check = tep_db_fetch_array($check_query);
      $entry_state_has_zones = ($check['total'] > 0);
      if ($entry_state_has_zones == true) {
        $zone_query = tep_db_query("select distinct zone_id from " . TABLE_ZONES . " where zone_country_id = '" . (int)$country . "' and (zone_name = '" . tep_db_input($state) . "' or zone_code = '" . tep_db_input($state) . "')");
        if (tep_db_num_rows($zone_query) == 1) {
          $zone = tep_db_fetch_array($zone_query);
          $zone_id = $zone['zone_id'];
        } else {
          $error = true;

          $messageStack->add('create_account', ENTRY_STATE_ERROR_SELECT);
        }
      } else {
        if (strlen($state) < ENTRY_STATE_MIN_LENGTH) {
          $error = true;

          $messageStack->add('create_account', ENTRY_STATE_ERROR);
        }
      }
    }

    if (strlen($telephone) < ENTRY_TELEPHONE_MIN_LENGTH) {
      $error = true;

      $messageStack->add('create_account', ENTRY_TELEPHONE_NUMBER_ERROR);
    }


    if (strlen($password) < ENTRY_PASSWORD_MIN_LENGTH) {
      $error = true;

      $messageStack->add('create_account', ENTRY_PASSWORD_ERROR);
    } elseif ($password != $confirmation) {
      $error = true;

      $messageStack->add('create_account', ENTRY_PASSWORD_ERROR_NOT_MATCHING);
    }

    if ($error == false) {
      $sql_data_array = array('customers_firstname' => $firstname,
                              'customers_lastname' => $lastname,
                              'customers_email_address' => encrypt_email($email_address, ENCRYPTION_KEY_EMAIL),
                              'customers_telephone' => $telephone,
                              'customers_fax' => $fax,
                              'customers_newsletter' => $newsletter,
                              'customers_password' => tep_encrypt_password($password));

      if (ACCOUNT_GENDER == 'true') $sql_data_array['customers_gender'] = $gender;
      if (ACCOUNT_DOB == 'true') $sql_data_array['customers_dob'] = tep_date_raw($dob);

      tep_db_perform(TABLE_CUSTOMERS, $sql_data_array);

      $customer_id = tep_db_insert_id();

      $sql_data_array = array('customers_id' => $customer_id,
                              'entry_firstname' => $firstname,
                              'entry_lastname' => $lastname,
                              'entry_street_address' => $street_address,
                              'entry_postcode' => $postcode,
                              'entry_city' => $city,
                              'entry_country_id' => $country);

      if (ACCOUNT_GENDER == 'true') $sql_data_array['entry_gender'] = $gender;
      if (ACCOUNT_COMPANY == 'true') $sql_data_array['entry_company'] = $company;
      if (ACCOUNT_SUBURB == 'true') $sql_data_array['entry_suburb'] = $suburb;
      if (ACCOUNT_STATE == 'true') {
        if ($zone_id > 0) {
          $sql_data_array['entry_zone_id'] = $zone_id;
          $sql_data_array['entry_state'] = '';
        } else {
          $sql_data_array['entry_zone_id'] = '0';
          $sql_data_array['entry_state'] = $state;
        }
      }

      tep_db_perform(TABLE_ADDRESS_BOOK, $sql_data_array);

      $address_id = tep_db_insert_id();

      tep_db_query("update " . TABLE_CUSTOMERS . " set customers_default_address_id = '" . (int)$address_id . "' where customers_id = '" . (int)$customer_id . "'");

      tep_db_query("insert into " . TABLE_CUSTOMERS_INFO . " (customers_info_id, customers_info_number_of_logons, customers_info_date_account_created) values ('" . (int)$customer_id . "', '0', now())");

      if (SESSION_RECREATE == 'True') {
        tep_session_recreate();
      }

      $customer_first_name = $firstname;
      $customer_default_address_id = $address_id;
      $customer_country_id = $country;
      $customer_zone_id = $zone_id;
      tep_session_register('customer_id');
      tep_session_register('customer_first_name');
      tep_session_register('customer_default_address_id');
      tep_session_register('customer_country_id');
      tep_session_register('customer_zone_id');

// reset session token
      $sessiontoken = md5(tep_rand() . tep_rand() . tep_rand() . tep_rand());

// restore cart contents
      $cart->restore_contents();

// build the message content
      $name = $firstname . ' ' . $lastname;

      if (ACCOUNT_GENDER == 'true') {
         if ($gender == 'm') {
           $email_text = sprintf(EMAIL_GREET_MR, $lastname);
         } else {
           $email_text = sprintf(EMAIL_GREET_MS, $lastname);
         }
      } else {
        $email_text = sprintf(EMAIL_GREET_NONE, $firstname);
      }

      $email_text .= EMAIL_WELCOME . EMAIL_TEXT . EMAIL_CONTACT . EMAIL_WARNING;
      tep_mail($name, $email_address, EMAIL_SUBJECT, $email_text, STORE_OWNER, STORE_OWNER_EMAIL_ADDRESS);

      tep_redirect(tep_href_link(FILENAME_CREATE_ACCOUNT_SUCCESS, '', 'SSL'));
    }
  }

  $breadcrumb->add(NAVBAR_TITLE, tep_href_link(FILENAME_CREATE_ACCOUNT, '', 'SSL'));

  //require(DIR_WS_INCLUDES . 'template_top.php');
  require('includes/form_check.js.php');
  
  
  require_once("Mobile_Detect.php");
        $detect = new Mobile_Detect();
?>

<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">
<html <?php echo HTML_PARAMS; ?>>
<head>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-28436015-1', { 'optimize_id': 'GTM-5ZJRN8F'});
</script>

<!-- Event snippet for Page_view conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-1072651700/Aj7aCLK3n60BELS7vf8D'});
</script>

<!-- Event snippet for Purchase_product conversion page -->
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-1072651700/vBmHCIOlk60BELS7vf8D',
      'transaction_id': ''
  });
</script>
<title>Sneeze Guard Create Account for Online Shop- ADM Sneezeguards</title>
<!-- End Google Add Conversion -->

<!-- End Google Add Conversion -->
<meta name="google-site-verification" content="qCniVCJ6BLGaxFIjLt_Le0HrCeDwZJAzR-UrXe-8poc" />
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET; ?>" />
<meta name="msvalidate.01" content="A671AB7AE7F959666D7415258AF5DF66" />
<meta name="viewport" content="width=device-width">
<!--<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">-->
<meta name="description" content="ADM Sneezeguards is able to custom feature make sneeze guard and Glass barriers, this is a amazing choice for shops, markets, Grocery, Banks, catering, supermarkers, convenience stores and medical centres.">
<meta name="keywords" content="Custom line Business Sneeze Guards, Chosse sneeze guard from store, Sneeze Guard Online shopping, ADM Sneezeguard account, online protective sneeze guard">
<base href="<?php echo (($request_type == 'SSL') ? HTTPS_SERVER : HTTP_SERVER) . DIR_WS_CATALOG; ?>" />
<script type="text/javascript" src="jquery-latest.js"></script>
<script type="text/javascript" src="thickbox.js"></script>

<link rel="icon" href="images/favicon.ico" type="img/ioc">
<link rel="canonical" href="https://www.sneezeguard.com<?php echo $_SERVER['REQUEST_URI']; ?>">
<link rel="stylesheet" type="text/css" href="ext/jquery/ui/redmond/jquery-ui-1.8.6.css" />
<script type="text/javascript" src="ext/jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="ext/jquery/ui/jquery-ui-1.8.6.min.js"></script>


<meta property="og:url" content="https://www.sneezeguard.com<?php echo $_SERVER['REQUEST_URI']; ?>" />
<meta property="og:type" content="website"/>
<meta property="og:title" content="ADM Sneezeguards - Sneeze Guard Portable | Restaurant Food Guards" />
<meta property="og:description" content="ADM Sneezeguards manufactures for the food service industry, we offer industry standard sneeze guards with latest innovative designs." />
<meta property="og:image" content="https://www.sneezeguard.com/images/new_logo_main.png" />
<meta property="og:site_name" content="sneezeguard"/>
<meta property="fb:app_id" content="2368710130085474"/>
<meta property="twitter:card" content="ADM Sneeze Guard Portable"/>
<meta property="twitter:image" content="https://twitter.com/ASneezeguards/photo"/>
<meta property="twitter:site" content="@ASneezeguards"/>
<meta property="twitter:url" content="https://twitter.com/ASneezeguards"/>






<link rel="stylesheet" type="text/css" href="stylesheet.css">

<style type="text/css">
<!--
.style2 {font-family: Tahoma; font-size: 12; line-height: 13px}
.style3 {font-family: Tahoma; font-size: 12; line-height: 17px; font-weight: bold}
.style6 {font-weight: bold; font-size: 12}
.TopLargeText {font-family: Tahoma; font-weight: bold; color: #C7F917; font-size: 20}
-->


p {
    font-family: "Times New Roman", Times, serif;
    color: #000000;
  
}
</style>


<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "sneeze guard",
  "url": "https://www.sneezeguard.com",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://www.sneezeguard.com/index.php{search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>



<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Sneeze Guard",
  "alternateName": "Sneeze Guard",
  "url": "https://www.sneezeguard.com",
  "logo": "https://ibb.co/12PH7w8",
  "sameAs": [
    "https://www.facebook.com/admsneezeguards",
    "https://twitter.com/ASneezeguards",
    "https://www.instagram.com/nickpadm",
    "https://www.youtube.com/channel/UCXn-Tc-uqqY8blZZapPDNXg",
    "https://www.linkedin.com/company/adm-sneezeguards",
    "https://www.pinterest.com/admsneezeguards1",
    "https://www.sneezeguard.com/"
  ]
}
</script>
</head>
<?php require(DIR_WS_INCLUDES . 'header.php'); ?>


  <!-- ReCaptcha Start -->
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<!-- ReCaptcha End -->
  
  <?php
  
  
  
  
  
if($_GET['message']=='success' || $_GET['message']=='success2')
  {
   //tep_redirect(tep_href_link(FILENAME_CREATE_ACCOUNT_SUCCESS, '', 'SSL'));
  ?>
<script>
window.parent.location='create_account.php?osCsid=<?php echo ($_GET['osCsid']);?>';

</script>
<?php
} 
?>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>

$(document).ready(function(){ 
	
		 $('#firstname').on('blur',function(){     
		 var myfirstname= $(this).val();
		 if(myfirstname.length==0){
		 $('#errormsgfirstname').html("<img src='img/iconCheckX.gif' /> Please Enter Your First Name");
		  }
		  else
		  {
		   $('#errormsgfirstname').html("<img src='img/iconCheckOn.gif' />");
		
		   }		  
	      });
		  
		 $('#lastname').on('blur',function(){     
		 var lastname= $(this).val();
		 if(lastname.length==0){
	     $('#errormsglastname').html("<img src='img/iconCheckX.gif' /> Please Enter Your Last Name");
		  }
		  else
		  {
		   $('#errormsglastname').html("<img src='img/iconCheckOn.gif' />");
		
		   }		  
	      });
	
	 
	 $('#email').on('blur',function(){     
		 var email= $(this).val();
		 if(email.length==0){
		 $('#errormsgemail').html("<img src='img/iconCheckX.gif' /> Please Enter Your Email Address");
		  }
		  else
		  {
		  validateEmail(email);
		   
		
		   }		  
	      });
		  
		  
		  
function validateEmail(sEmail) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(sEmail)) {
        $('#errormsgemail').html("<img src='img/iconCheckOn.gif' />");
    }
    else {
         $('#errormsgemail').html("<img src='img/iconCheckX.gif' /> Please Enter Correct Email Address");
    }
}
		  
		  $('#email2').on('blur',function(){     
		 var email2= $(this).val();
		 if(email2.length==""){
		 $('#errormsgemail2').html("<img src='img/iconCheckX.gif' /> Please Enter Your Email Address");
		  }
		  else if( $("#email").val() != $("#email2").val())
		  {
		  $('#errormsgemail2').html("<img src='img/iconCheckX.gif' /> Please Match Your Confirm Email Address");
		  }
		  else
		  {
		   $('#errormsgemail2').html("<img src='img/iconCheckOn.gif' />");
		   
		
		   }		  
	      });
		  
		  
		  
		  
		  
		   $('#company').on('blur',function(){     
		 var company= $(this).val();
		 if(company.length==0){
		 $('#errormsgcompany').html("<img src='img/iconCheckX.gif' />  Company Name Optional");
		  }
		  else
		  {
		   $('#errormsgcompany').html("<img src='img/iconCheckOn.gif' />");
		
		   }		  
	      });
		   
		   
		    $('#street_address').on('blur',function(){     
		 var street_address= $(this).val();
		 if(street_address.length==0){
		 $('#errormsgstreet').html("<img src='img/iconCheckX.gif' /> Please Enter Your Street Address");
		  }
		  else
		  {
		   $('#errormsgstreet').html("<img src='img/iconCheckOn.gif' />");
		
		   }		  
	      });
		  
		  
		  
		      $('#street_address222').on('blur',function(){     
		 var street_address= $(this).val();
		 if(street_address.length==0){
		// $('#errormsgstreet_address222').html("<img src='img/iconCheckX.gif' /> Please Enter Your Street Address");
		 $('#errormsgstreet_address222').html("");
		  }
		  else
		  {
		   $('#errormsgstreet_address222').html("<img src='img/iconCheckOn.gif' />");
		
		   }		  
	      });
		  
		  $('#postcode').on('blur',function(){     
		 var postcode= $(this).val();
		 if(postcode.length==0){
		 $('#errormsgpostcode').html("<img src='img/iconCheckX.gif' /> Please Enter Post Code");
		  }
		  else
		  {
		   $('#errormsgpostcode').html("<img src='img/iconCheckOn.gif' />");
		
		   }		  
	      });
	
	 $('#city').on('blur',function(){     
		 var city= $(this).val();
		 if(city.length==0){
		 $('#errormsgcity').html("<img src='img/iconCheckX.gif' /> Please Enter Your City Name");
		  }
		  else
		  {
		   $('#errormsgcity').html("<img src='img/iconCheckOn.gif' />");
		
		   }		  
	      });
		  
		   $('#state').on('blur',function(){     
		 var state= $(this).val();
		 if(state.length==0){
		 $('#errormsgstate').html("<img src='img/iconCheckX.gif' /> Please Enter Your State");
		  }
		  else
		  {
		   $('#errormsgstate').html("<img src='img/iconCheckOn.gif' />");
		
		   }		  
	      });
		  
		  $('#country').on('blur',function(){     
		 var country= $(this).val();
		 if(country.length==0){
		 $('#errormsgcountry').html("<img src='img/iconCheckX.gif' /> Please Enter Country Name");
		  }
		  else
		  {
		   $('#errormsgcountry').html("<img src='img/iconCheckOn.gif' />");
		
		   }		  
	      });  
		  
		  
		   $('#firstname2').on('blur',function(){     
		 var country= $(this).val();
		 if(country.length==0){
		 $('#errormsgfirstname2').html("<img src='img/iconCheckX.gif' /> Please Enter First Name");
		  }
		  else
		  {
		   $('#errormsgfirstname2').html("<img src='img/iconCheckOn.gif' />");
		
		   }		  
	      });
		  
		   $('#lastname2').on('blur',function(){     
		 var country= $(this).val();
		 if(country.length==0){
		 $('#errormsglastname2').html("<img src='img/iconCheckX.gif' /> Please Enter Last Name");
		  }
		  else
		  {
		   $('#errormsglastname2').html("<img src='img/iconCheckOn.gif' />");
		
		   }		  
	      });
		  
		   $('#telephone2').on('blur',function(){     
		 var country= $(this).val();
		 if(isNaN(country)|| country.indexOf("-")!=-1){
              alert("Phone number error-  Please no symbols or spaces.");return false;
			  }
			  if (country.charAt(0)=="1"){
                alert("Phone number error- Please remove '1' from area code");
                return false
           }if (country.charAt(0)==" "){
                alert("Phone number error-  Please no symbols or spaces.");
                return false
           }if (country.charAt(0)==""){
                alert("Please enter a contact phone number");
                return false
           }
		 if(country.length<10  ){
		 $('#errormsgtelephone2').html("<img src='img/iconCheckX.gif' /> 10 digits max required");
		  }
		  else
		  {
		   $('#errormsgtelephone2').html("<img src='img/iconCheckOn.gif' />");
		
		   }		  
	      });
		   $('#telephone').on('blur',function(){     
		 var country= $(this).val();
		if(isNaN(country)|| country.indexOf("-")!=-1){
              alert("Phone number error-  Please no symbols or spaces.");return false;
			  }
			  if (country.charAt(0)=="1"){
                alert("Phone number error- Please remove '1' from area code");
                return false
           }if (country.charAt(0)==" "){
                alert("Phone number error-  Please no symbols or spaces.");
                return false
           }if (country.charAt(0)==""){
                alert("Please enter a contact phone number");
                return false
           }
		 if(country.length<10 ){
		 $('#errormsgtelephone').html("<img src='img/iconCheckX.gif' /> 10 digits max required");
		  }
		  else
		  {
		   $('#errormsgtelephone').html("<img src='img/iconCheckOn.gif' />");
		
		   }		  
	      });
		  
		  $('#fax').on('blur',function(){     
		 var country= $(this).val();
		 if(country.length==0){
		 $('#errormsgfax').html("<img src='img/iconCheckX.gif' /> Please Enter Telephone No.");
		  }
		  else
		  {
		   $('#errormsgfax').html("<img src='img/iconCheckOn.gif' />");
		
		   }		  
	      });
		  
		  
	  $('#password').on('blur',function(){     
		 var password= $(this).val();
		 if(password.length==0){
		 $('#errormsgpassword').html("<img src='img/iconCheckX.gif' /> Please Enter Password");
		  }
		  else
		  {
		   $('#errormsgpassword').html("<img src='img/iconCheckOn.gif' />");
		
		   }		  
	      });
		  
		   $('#confirmation').on('blur',function(){     
		 var confirmation= $(this).val();
		 if(confirmation.length==0){
		 $('#errormsgconfirmation').html("<img src='img/iconCheckX.gif' /> Enter Confirmation Password");
		  }
		  else if( $("#password").val() != $("#confirmation").val())
		  {
		  $('#errormsgconfirmation').html("<img src='img/iconCheckX.gif' /> Confirm Password Not Matched");
		 // alert('Password & Confirm Password Not Matched');
		  
		  }
		  else
		  {
		   $('#errormsgconfirmation').html("<img src='img/iconCheckOn.gif' />");
		
		   }		  
	      });
		  
		  
		 
		  
		  
});
</script>
<script>
window.onload = function() {
 var myInput = document.getElementById('email2');
 myInput.onpaste = function(e) {
   e.preventDefault();
 }
}
</script>
<script>
	$(document).ready(function(){
		if (document.all && !document.querySelector) {
   			$("#ex1").css('width',"100%");
   			$(".price_table").css("text-align","left");
		}
   	});







/*
function showLocation() {
	var zipCodeValue =$("#postcode").val();
	//alert(zipCodeValue);
   // var txtCity = $("#city");
   // var txtState = $("#state");
    if (zipCodeValue.toString().length != 5) {
        //txtCity.val("");
       // txtState.val("");
    }
    else {
        $.ajax({
            dataType: "json",
            url: "https://api.zip-codes.com/ZipCodesAPI.svc/1.0/QuickGetZipCodeDetails/"+zipCodeValue+"?key=DEMOAPIKEY",
            
            success: function (data) {
                   // txtCity.val(data.City);
                   // txtState.val(data.State);
				  console.log(data);
            }
        });
    }
}
*/
</script>
<script type="text/javascript">//<![CDATA[
	function showLocation() {
	var zipCodeValue =$("#postcode").val();
	
	var http = require("https");

var options = {
	"method": "GET",
	"hostname": "locationcontext-zip-info-v1.p.rapidapi.com",
	"port": null,
	"path": "/zip-info?zip="+zipCodeValue+"",
	"headers": {
		"x-rapidapi-host": "locationcontext-zip-info-v1.p.rapidapi.com",
		"x-rapidapi-key": "7e121c1d33mshb483c37cf941837p158d84jsn4b07c5722166",
		"useQueryString": true
	}
};

var req = http.request(options, function (res) {
	var chunks = [];

	res.on("data", function (chunk) {
		chunks.push(chunk);
	});

	res.on("end", function () {
		var body = Buffer.concat(chunks);
		console.log(body.toString());
	});
});

req.end();
	}

//]]></script>


 
 <?php
  if (!$detect->isMobile())
{
?>


<style>

.processccc{color:#605b5b; font-size:12px;}



</style>
<div style="background-color:white;">
<table width="100%" border="0" style="font:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bolder;">
  <tr>
    <td class="processccc">1. Log In	</td>
    <td class="processccc"><b style="color:Red">2. Address Information</b></td>
    <td class="processccc">3. Shipping & Delivery</td>
    <td class="processccc">4. Payment Options</td>
    <td class="processccc">5. Order Review</td>
    <td class="processccc">6. Order Receipt</td>
  </tr>
</table>

<div class="form_white" >
	
<!--<h1 style="background:url(images/m99.gif) -5px 0; height:26px;"><?php// echo HEADING_TITLE; ?></h1>-->

<?php
  if ($messageStack->size('create_account') > 0) {
    echo $messageStack->output('create_account');
  }
?>

<p style="color: #000000; font-family: tahoma,verdana,arial;font-size: 14px;">
<?php echo sprintf(TEXT_ORIGIN_LOGIN, tep_href_link(FILENAME_LOGIN, tep_get_all_get_params(), 'SSL')); ?></p>

<?php echo tep_draw_form('create_account', tep_href_link(FILENAME_CREATE_ACCOUNT, '', 'SSL'), 'post', 'onsubmit="return check_form(create_account);"', true) . tep_draw_hidden_field('action', 'process'); ?>
<table width="100%" cellpadding="0" cellspacing="0" style="padding:5px;"> 

<tr  >

<td style="border-bottom:1px solid #ccc; border-left:1px solid #ccc; border-right:1px solid #ccc;">
<table width="100%" cellpadding="2" cellspacing="2">
<tr>
<td width="50%" style=" border-right:1px solid #ccc;">
<div class="contentContainer" style="text-align: left;">
  <div>
   
    <h2 class="firstH2"><?php echo "Contact Information"; ?></h2>
  </div>

  <style>
  
  .contactprimary tr{height:63px; text-align:center;}
  .contactprimary input[type=text] {
	  width:300px !important;
	  height:31px;
	  border: 2px solid #d1cbcb;
    border-radius: 8px;
  }
  
    .contactprimary input[type=password] {
	  width:300px !important;
	  height:31px;
	  border: 2px solid #d1cbcb;
    border-radius: 8px;
  }
  
    .contactprimary select {
	  width:300px !important;
	  height:31px;
	  border: 2px solid #d1cbcb;
    border-radius: 8px;
  }
  </style>
  <div class="contentText">

    <table border="0" cellspacing="0" cellpadding="0" width="100%" class="contactprimary">

<?php
  if (ACCOUNT_GENDER == 'true') {
?>


<?php
  }
?>

      <tr>
       <!-- <td width="19%" class="fieldKey" align="right"><?php echo ENTRY_FIRST_NAME; ?></td>-->
        <td width="18%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('firstname','','id="firstname" size="20" placeholder="First Name"'); ?></td><td align="left"><span id="errormsgfirstname"><img src="img/iconCheckOff.gif" /></span></td>
      </tr>
      <tr> 
        <!--<td class="fieldKey" align="right"><?php echo ENTRY_LAST_NAME; ?></td>-->
        <td class="fieldValue" colspan="2"><?php echo tep_draw_input_field('lastname','','id="lastname"  size="20" placeholder="Last Name"') 
		//. '&nbsp;' . (tep_not_null(ENTRY_LAST_NAME_TEXT) ? '<span class="inputRequirement">' . ENTRY_LAST_NAME_TEXT . '</span>': '')
		; ?></td>
		<td align="left" ><span id="errormsglastname" align="center"><img src="img/iconCheckOff.gif" /></span></td>
      </tr>
	   <tr>
        <!--<td width="19%" class="fieldKey" align="right"><?php echo "Phone Number:"; ?></td>-->
        <td width="18%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('telephone2','','id="telephone2" maxlength="10" size="20" placeholder="Phone Number"') 
		//. '&nbsp;' . (tep_not_null(ENTRY_TELEPHONE_NUMBER_TEXT) ? '<span class="inputRequirement">' . ENTRY_TELEPHONE_NUMBER_TEXT . '</span>': '')
		; ?></td>
		<td align="left" ><span id="errormsgtelephone2" ><img src="img/iconCheckOff.gif" />Ex:8885558888</span></td>
      </tr>

	   <tr>
        <!--<td width="19%" class="fieldKey" align="right"><?php echo ENTRY_EMAIL_ADDRESS; ?></td>-->
        <td width="18%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('email_address','','id="email"  size="20" placeholder="Email Address"')  
//		. '&nbsp;' . (tep_not_null(ENTRY_EMAIL_ADDRESS_TEXT) ? '<span class="inputRequirement">' . ENTRY_EMAIL_ADDRESS_TEXT . '</span>': '')
      ; ?></td>
	  <td align="left" ><span id="errormsgemail"><img src="img/iconCheckOff.gif" /></span></td>
      </tr>
	   <tr>
        <!--<td width="19%" class="fieldKey" align="right"><?php echo "Confirm Email Address:"; ?></td>-->
        <td width="18%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('email_address2','','id="email2"  size="20" placeholder="Confirm Email Address"')  
//		. '&nbsp;' . (tep_not_null(ENTRY_EMAIL_ADDRESS_TEXT) ? '<span class="inputRequirement">' . ENTRY_EMAIL_ADDRESS_TEXT . '</span>': '')
      ; ?></td>
	  <td align="left" ><span id="errormsgemail2"><img src="img/iconCheckOff.gif" /></span></td>
      </tr>
	  
<?php
  if (ACCOUNT_DOB == 'true') {
?>

     

<?php
  }
?>

     
    </table>
  </div>

  
  
  

<?php
session_start();

  if (ACCOUNT_COMPANY == 'true') {
?>

  <h2 class="firstH2"><?php echo "Where will this order ship to?"; ?></h2>

  <div class="contentText">
    <table border="0" cellspacing="0" cellpadding="0" width="100%" class="contactprimary">
	
	   <tr>
       <!-- <td width="19%" class="fieldKey" align="right"><?php echo ENTRY_FIRST_NAME; ?></td>-->
        <td width="18%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('firstname2','','id="firstname2" placeholder="First Name" size="20"'); ?></td><td align="left"  ><span id="errormsgfirstname2"><img src="img/iconCheckOff.gif" /></span></td>
			
      </tr>
      <tr> 
        <!--<td width="19%"class="fieldKey" align="right"><?php echo ENTRY_LAST_NAME; ?></td>-->
        <td  width="18%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('lastname2','','id="lastname2"  placeholder="Last Name" size="20"') 
		//. '&nbsp;' . (tep_not_null(ENTRY_LAST_NAME_TEXT) ? '<span class="inputRequirement">' . ENTRY_LAST_NAME_TEXT . '</span>': '')
		; ?></td><td align="left"  ><span id="errormsglastname2"><img src="img/iconCheckOff.gif" /></span></td>
      </tr>
      <tr>
        <!--<td width="19%" class="fieldKey" align="right"><?php echo "Business Name:"; ?></td>-->
        <td width="18%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('company','','id="company" size="20" placeholder="Business Name"' )
	//	. '&nbsp;' . (tep_not_null(ENTRY_COMPANY_TEXT) ? '<span class="inputRequirement">' . ENTRY_COMPANY_TEXT . '</span>': '')
		; ?></td><td align="left"  ><span id="errormsgcompany"><img src="img/iconCheckOff.gif" /></span></td>
	
      </tr> 
    </table>
  </div>

<?php
  }
?>





  <div class="contentText">
    <table border="0" cellspacing="0" cellpadding="0" width="100%" class="contactprimary">
      
	  <?php
$_SESSION['street']=$_POST['street_address'];
?>


<tr>
        <!--<td width="19%" class="fieldKey" align="right"><?php echo "Phone Number:"; ?></td>--->
        <td width="18%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('telephone','','id="telephone" maxlength="10" placeholder="Phone Number" ') 
		//. '&nbsp;' . (tep_not_null(ENTRY_TELEPHONE_NUMBER_TEXT) ? '<span class="inputRequirement">' . ENTRY_TELEPHONE_NUMBER_TEXT . '</span>': '')
		; ?></td><td align="left"  ><span id="errormsgtelephone"><img src="img/iconCheckOff.gif" />Ex.8881234567</span></td>
		
      </tr>

<tr>
        <!--<td width="19%" class="fieldKey" align="right"><?php echo ENTRY_STREET_ADDRESS; ?></td>-->
        <td width="18%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('street_address','','id="street_address"  size="20" placeholder="Street Address"') 
		//. '&nbsp;' . (tep_not_null(ENTRY_STREET_ADDRESS_TEXT) ? '<span class="inputRequirement">' . ENTRY_STREET_ADDRESS_TEXT . '</span>': '')
		; ?></td><td align="left" ><span id="errormsgstreet"><img src="img/iconCheckOff.gif" /></span></td>
      </tr>
	  

 	  <?php
  if (ACCOUNT_SUBURB == 'true') {
?>

      <tr>
        <!--<td width="19%" cellpadding="2" class="fieldKey" align="right" ><?php echo "Suite/Apt/Unit Number:"; ?></td>-->
        <td width="18%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('suburb','',' placeholder="" id="street_address222"') 
//	. '&nbsp;' . (tep_not_null(ENTRY_SUBURB_TEXT) ? '<span class="inputRequirement">' . ENTRY_SUBURB_TEXT . '</span>': '')
; ?> </td><td align="left" ><span id="errormsgstreet_address222"><img src="img/iconCheckOff.gif" /></span></td>
      </tr>

<?php
  }
?>    
	  
	  <?php
$_SESSION['postcode']=$_POST['postcode'];
?>
      <tr>
        <!--<td width="19%" class="fieldKey" align="right"><?php echo ENTRY_CITY; ?></td>-->
        <td  width="18%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('city','','id="city"  size="20" placeholder="City"') 
		//. '&nbsp;' . (tep_not_null(ENTRY_CITY_TEXT) ? '<span class="inputRequirement">' . ENTRY_CITY_TEXT . '</span>': '')
		; ?></td><td align="left" ><span id="errormsgcity"><img src="img/iconCheckOff.gif" /></span></td>
      </tr>
 
	  <?php
$_SESSION['city']=$_POST['city'];
?>
<?php
  if (ACCOUNT_STATE == 'true') {
?>


      <tr>
        <!--<td width="19%" class="fieldKey" align="right"><?php echo ENTRY_STATE; ?></td>-->
        <td width="18%" class="fieldValue" colspan="2">
<?if ($process == true) {
      if ($entry_state_has_zones == true) {
        $zones_array = array();
        $zones_query = tep_db_query("select zone_name from " . TABLE_ZONES . " where zone_country_id = '" . (int)$country . "' order by zone_name");
        while ($zones_values = tep_db_fetch_array($zones_query)) {
          $zones_array[] = array('id' => $zones_values['zone_name'], 'text' => $zones_values['zone_name']);
        }
        echo tep_draw_pull_down_menu('state', $zones_array);
	 /* echo '<select name="state" id="state"   STYLE="width: 150px" size="0">
	  <optgroup label="Canada"> 
	<option value="Alberta">Alberta</option>
	<option value="BC">British Columbia</option>
	<option value="British Columbia">Manitoba</option>
	<option value="New Brunswick">New Brunswick</option>
	<option value="Newfoundland and Labrador">Newfoundland and Labrador</option>
	<option value="Nova Scotia">Nova Scotia</option>
	<option value="Northwest Territories">Northwest Territories</option>
	<option value="Nunavut">Nunavut</option>	
	<option value="Ontario">Ontario</option>
	<option value="Prince Edward Island">Prince Edward Island</option>
	<option value="Quebec">Quebec</option>
	<option value="Saskatchewan">Saskatchewan</option>
	<option value="Yukon">Yukon</option>
</optgroup>
<optgroup label="Puerto Rico"> 
	<option value="Puerto Rico">Puerto Rico</option>
</optgroup>
<optgroup label="United States"> 
	  <option value="Alabama">Alabama</option>
<option value="Alaska">Alaska</option>
<option value="American Samoa">American Samoa</option>
<option value="Arizona">Arizona</option>
<option value="Arkansas">Arkansas</option>
<option value="Armed Forces Africa">Armed Forces Africa</option>
<option value="Armed Forces Americas">Armed Forces Americas</option>
<option value="Armed Forces Canada">Armed Forces Canada</option>
<option value="Armed Forces Europe">Armed Forces Europe</option>
<option value="Armed Forces Middle East">Armed Forces Middle East</option>
<option value="Armed Forces Pacific">Armed Forces Pacific</option>
<option value="California">California</option>
<option value="Colorado">Colorado</option>
<option value="Connecticut">Connecticut</option>
<option value="Delaware">Delaware</option>
<option value="District of Columbia">District of Columbia</option>
<option value="Federated States Of Micronesia">Federated States Of Micronesia</option>
<option value="Florida">Florida</option>
<option value="Georgia">Georgia</option>
<option value="Guam">Guam</option>
<option value="Hawaii">Hawaii</option>
<option value="Idaho">Idaho</option>
<option value="Illinois">Illinois</option>
<option value="Indiana">Indiana</option>
<option value="Iowa">Iowa</option>
<option value="Kansas">Kansas</option>
<option value="Kentucky">Kentucky</option>
<option value="Louisiana">Louisiana</option>
<option value="Maine">Maine</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Maryland">Maryland</option>
<option value="Massachusetts">Massachusetts</option>
<option value="Michigan">Michigan</option>
<option value="Minnesota">Minnesota</option>
<option value="Mississippi">Mississippi</option>
<option value="Missouri">Missouri</option>
<option value="Montana">Montana</option>
<option value="Nebraska">Nebraska</option>
<option value="Nevada">Nevada</option>
<option value="New Hampshire">New Hampshire</option>
<option value="New Jersey">New Jersey</option>
<option value="New Mexico">New Mexico</option>
<option value="New York">New York</option>
<option value="North Carolina">North Carolina</option>
<option value="North Dakota">North Dakota</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Ohio">Ohio</option>
<option value="Oklahoma">Oklahoma</option>
<option value="Oregon">Oregon</option>
<option value="Palau">Palau</option>
<option value="Pennsylvania">Pennsylvania</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Rhode Island">Rhode Island</option>
<option value="South Carolina">South Carolina</option>
<option value="South Dakota">South Dakota</option>
<option value="Tennessee">Tennessee</option>
<option value="Texas">Texas</option>
<option value="Utah">Utah</option>
<option value="Vermont">Vermont</option>
<option value="Virgin Islands">Virgin Islands</option>
<option value="Virginia">Virginia</option>
<option value="Washington">Washington</option>
<option value="West Virginia">West Virginia</option>
<option value="Wisconsin">Wisconsin</option>
<option value="Wyoming">Wyoming</option>
 </optgroup>	  </select>';*/
		
      } else {
        echo tep_draw_input_field('state');
      }
    } else {
      echo '<select name="state" id="state"   STYLE="width: 150px" size="0">
<option value >State/Province</option>
<optgroup label="Canada"> 
	<option value="AB">Alberta</option>
	<option value="BC">British Columbia</option>
	<option value="MB">Manitoba</option>
	<option value="NB">New Brunswick</option>
	<option value="NL">Newfoundland and Labrador</option>
	<option value="NS">Nova Scotia</option>
	<option value="NT">Northwest Territories</option>
	<option value="NU">Nunavut</option>	
	<option value="ON">Ontario</option>
	<option value="PE">Prince Edward Island</option>
	<option value="QC">Quebec</option>
	<option value="SK">Saskatchewan</option>
	<option value="YT">Yukon</option>
</optgroup>
<optgroup label="Puerto Rico"> 
	<option value="SK">Puerto Rico</option>
</optgroup>
<optgroup label="United States"> 
		<option value="AL">Alabama</option>
		<option value="AK">Alaska</option>
		<option value="AZ">Arizona</option>
		<option value="AR">Arkansas</option>
		<option value="CA">California</option>
		<option value="CO">Colorado</option>
		<option value="CT">Connecticut</option>
		<option value="DE">Delaware</option>
		<option value="DC">District of Columbia</option>
		<option value="FL">Florida</option>
		<option value="GA">Georgia</option>
		<option value="HI">Hawaii</option>
		<option value="ID">Idaho</option>
		<option value="IL">Illinois</option>
		<option value="IN">Indiana</option>
		<option value="IA">Iowa</option>
		<option value="KS">Kansas</option>
		<option value="KY">Kentucky</option>
		<option value="LA">Louisiana</option>
		<option value="ME">Maine</option>
		<option value="MD">Maryland</option>
		<option value="MA">Massachusetts</option>
		<option value="MI">Michigan</option>
		<option value="MN">Minnesota</option>
		<option value="MS">Mississippi</option>
		<option value="MO">Missouri</option>
		<option value="MT">Montana</option>
		<option value="NE">Nebraska</option>
		<option value="NV">Nevada</option>
		<option value="NH">New Hampshire</option>
		<option value="NJ">New Jersey</option>
		<option value="NM">New Mexico</option>
		<option value="NY">New York</option>
		<option value="NC">North Carolina</option>
		<option value="ND">North Dakota</option>
		<option value="OH">Ohio</option>
		<option value="OK">Oklahoma</option>
		<option value="OR">Oregon</option>
		<option value="PA">Pennsylvania</option>
		<option value="RI">Rhode Island</option>
		<option value="SC">South Carolina</option>
		<option value="SD">South Dakota</option>
		<option value="TN">Tennessee</option>
		<option value="TX">Texas</option>
		<option value="UT">Utah</option>
		<option value="VT">Vermont</option>
		<option value="VA">Virginia</option>
		<option value="WA">Washington</option>
		<option value="WV">West Virginia</option>
		<option value="WI">Wisconsin</option>
		<option value="WY">Wyoming</option>
        </optgroup>
</select>';
    }
	?>
		
        </td>
		<td align="left"><span align="left" id="errormsgstate"><img align="left" src="img/iconCheckOff.gif" /></span>
        </td>
      </tr>
	  

	  <?php
$_SESSION['state']=$_POST['state'];
?>
<?php
  }
?>
 <tr>
       <!-- <td width="19%"class="fieldKey" align="right"><?php echo "Zip/ ".ENTRY_POST_CODE; ?></td>-->
        <td width="18%"class="fieldValue" colspan="2"><?php echo tep_draw_input_field('postcode','','id="postcode"  size="20" placeholder="Zip/Postal Code " onchange="showLocation();"')
//		. '&nbsp;' . (tep_not_null(ENTRY_POST_CODE_TEXT) ? '<span class="inputRequirement">' . ENTRY_POST_CODE_TEXT . '</span>': ''); 
?></td><td align="left"><span id="errormsgpostcode"><img src="img/iconCheckOff.gif" /></span></td>
      </tr>

      <tr>
        <!--<td width="19%"class="fieldKey" align="right"><?php echo ENTRY_COUNTRY; ?></td>-->
        <td  width="18%" class="fieldValue" colspan="2">
		<select name="country" id="country" style="width: 150px" size="0" onchange="getPrice(this.form)">
		<option value="" >Please Select</option>
		<option value="38">Canada</option>
		<option value="172">Puerto Rico</option>
		<option value="223" selected="selected">United States</option>
		</select>
		
		
		
		<?php //echo tep_get_country_list('country','','id="country"   STYLE="width: 150px" size="0" placeholder="Last Name" ') 
		//. '&nbsp;' . (tep_not_null(ENTRY_COUNTRY_TEXT) ? '<span class="inputRequirement">' . ENTRY_COUNTRY_TEXT . '</span>': '')
		; ?></td><td align="left"><span id="errormsgcountry"><img src="img/iconCheckOn.gif" /></span></td>
		
      </tr>
	    
      
     
    </table>
	
  </div>




  
</td>
<td  valign="top">



  <div class="contentText">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
    
    </table>
  </div>

  <h2 class="firstH2"><?php echo CATEGORY_PASSWORD; ?></h2>

  <div class="contentText">
    <table border="0" cellspacing="0" cellpadding="0" width="100%" class="contactprimary">
      <tr>
       <!-- <td width="19%" class="fieldKey" align="right"><?php echo ENTRY_PASSWORD; ?></td>-->
        <td width="18%" class="fieldValue" colspan="2"><?php echo tep_draw_password_field('password','','id="password"  size="20" placeholder="Password"') 
		//. '&nbsp;' . (tep_not_null(ENTRY_PASSWORD_TEXT) ? '<span class="inputRequirement">' . ENTRY_PASSWORD_TEXT . '</span>': '')
		; ?></td><td align="left"><span id="errormsgpassword"><img src="img/iconCheckOff.gif" /></span></td>
      </tr>
      <tr>
       <!-- <td width="19%"class="fieldKey" align="right"><?php echo ENTRY_PASSWORD_CONFIRMATION; ?></td>-->
        <td width="18%"class="fieldValue" colspan="2"><?php echo tep_draw_password_field('confirmation','','id="confirmation"  size="20" placeholder="Password Confirmation"') 
		//. '&nbsp;' . (tep_not_null(ENTRY_PASSWORD_CONFIRMATION_TEXT) ? '<span class="inputRequirement">' . ENTRY_PASSWORD_CONFIRMATION_TEXT . '</span>': '')
		; ?></td><td align="left"><span id="errormsgconfirmation"><img src="img/iconCheckOff.gif" /></span><span id="errormsgnotconfirmation"></span></td>
      </tr>
	  </table>
	  <tr>
	 <td align="right" colspan="3">
	  
 <!-- ReCaptcha Start -->
  <?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?>
  <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_PUBLIC_KEY; ?>"></div>
  <!-- ReCaptcha End -->
  </div>
<div class="buttonSet" style="float:right; width:50%">
    <span class="buttonAction"><input type="image" class="updatebutton" style="width:248px;" src="img/new_icons/continue.png"  alt="Continue" title=" Continue " button="" onclick="javascript:document.forms['checkout_payment'].submit();" ></span>
  </div>
  
  <!--
  <div class="buttonSet" style="float:right; width:50%">
    <span class="buttonAction" ><?php echo tep_image_submit("continue.png", IMAGE_BUTTON_CONTINUE, 'button'); ?></span>
  </div>-->
</div>
</form>
</td>
</tr>




<tr>



</td>



</td>

</tr>
</table>
</td>
</tr>
</table>

<?
}
else{
	?>
	<td id="ex1" align=center width="190" valign="top">
	
	
<style>

.processccc{color:#605b5b; font-size:22px;}



</style>
<div style="background-color:white;">
<table width="100%" border="0" style="font:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bolder;">
  <tr>
    <td class="processccc">1. Log In	</td>
    <td class="processccc"><b style="color:Red">2. Address Information</b></td>
    <td class="processccc">3. Shipping & Delivery</td>
	</tr>
	<tr>
    <td class="processccc">4. Payment Options</td>
    <td class="processccc">5. Order Review</td>
    <td class="processccc">6. Order Receipt</td>
  </tr>
</table>

<div class="form_white" >
	
<!--<h1 style="background:url(images/m99.gif) -5px 0; height:26px;"><?php// echo HEADING_TITLE; ?></h1>-->

<?php
  if ($messageStack->size('create_account') > 0) {
    echo $messageStack->output('create_account');
  }
?>

<p style="color: #000000; font-family: tahoma,verdana,arial;font-size: 24px;">
<?php echo sprintf(TEXT_ORIGIN_LOGIN, tep_href_link(FILENAME_LOGIN, tep_get_all_get_params(), 'SSL')); ?></p>

<?php echo tep_draw_form('create_account', tep_href_link(FILENAME_CREATE_ACCOUNT, '', 'SSL'), 'post', 'onsubmit="return check_form(create_account);"', true) . tep_draw_hidden_field('action', 'process'); ?>
<table width="100%" cellpadding="0" cellspacing="0" style="padding:5px;"> 

<tr  >

<td style="border-bottom:1px solid #ccc; border-left:1px solid #ccc; border-right:1px solid #ccc;">
<table width="100%" cellpadding="2" cellspacing="2">
<tr>
<td width="100%" style=" border-right:1px solid #ccc;">
<div class="contentContainer" style="text-align: left;">
  <div>
   
    <h2 class="firstH2"><?php echo "Contact Information"; ?></h2>
  </div>

  <style>
  .form_white h2 {
    color: black;
    font-size: 27px;
}
  .contactprimary tr{height:105px; text-align:center;}
  
  .contactprimary tr span{font-size:26px;}
  .contactprimary tr img{width: 65px;}
  
  .contactprimary input[type=text] {
	      width: 489px;
    height: 69px;
    border: 2px solid #d1cbcb;
    border-radius: 8px;
    font-size: 27px;
  }
  
    .contactprimary input[type=password] {
	      width: 489px;
    height: 69px;
    border: 2px solid #d1cbcb;
    border-radius: 8px;
    font-size: 27px;
  }
  
    .contactprimary select {
	  width: 481px;
    height: 75px;
    font-size: 28px;
	  border: 2px solid #d1cbcb;
    border-radius: 8px;
  }
  
  #errormsgfirstname img{width: 65px;}
  </style>
  <div class="contentText">

    <table border="0" cellspacing="0" cellpadding="0" width="100%" class="contactprimary">

<?php
  if (ACCOUNT_GENDER == 'true') {
?>


<?php
  }
?>

      <tr>
       <!-- <td width="19%" class="fieldKey" align="right"><?php echo ENTRY_FIRST_NAME; ?></td>-->
        <td width="70%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('firstname','','id="firstname" size="20" placeholder="First Name"'); ?></td>
		<td width="30%" align="left"><span id="errormsgfirstname"><img src="img/iconCheckOff.gif" /></span></td>
      </tr>
      <tr> 
        <!--<td class="fieldKey" align="right"><?php echo ENTRY_LAST_NAME; ?></td>-->
        <td width="70%" class="fieldValue" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo tep_draw_input_field('lastname','','id="lastname"  size="20" placeholder="Last Name"') 
		//. '&nbsp;' . (tep_not_null(ENTRY_LAST_NAME_TEXT) ? '<span class="inputRequirement">' . ENTRY_LAST_NAME_TEXT . '</span>': '')
		; ?></td>
		<td align="left" width="30%" ><span id="errormsglastname" align="center"><img src="img/iconCheckOff.gif" /></span></td>
      </tr>
	   <tr>
        <!--<td width="19%" class="fieldKey" align="right"><?php echo "Phone Number:"; ?></td>-->
        <td width="70%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('telephone2','','id="telephone2" maxlength="10" size="20" placeholder="Phone Number"') 
		//. '&nbsp;' . (tep_not_null(ENTRY_TELEPHONE_NUMBER_TEXT) ? '<span class="inputRequirement">' . ENTRY_TELEPHONE_NUMBER_TEXT . '</span>': '')
		; ?></td>
		<td align="left"  width="30%"><span id="errormsgtelephone2" align="center"><img src="img/iconCheckOff.gif" />Ex:8885558888</span></td>
      </tr>

	   <tr>
        <!--<td width="19%" class="fieldKey" align="right"><?php echo ENTRY_EMAIL_ADDRESS; ?></td>-->
        <td width="70%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('email_address','','id="email"  size="20" placeholder="Confirm Email Address"')  
//		. '&nbsp;' . (tep_not_null(ENTRY_EMAIL_ADDRESS_TEXT) ? '<span class="inputRequirement">' . ENTRY_EMAIL_ADDRESS_TEXT . '</span>': '')
      ; ?></td>
	  <td align="left" width="30%" ><span id="errormsgemail"><img src="img/iconCheckOff.gif" /></span></td>
      </tr>
	   <tr>
        <!--<td width="19%" class="fieldKey" align="right"><?php echo "Confirm Email Address:"; ?></td>-->
        <td width="70%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('email_address2','','id="email2"  size="20" placeholder="Confirm Email Address"')  
//		. '&nbsp;' . (tep_not_null(ENTRY_EMAIL_ADDRESS_TEXT) ? '<span class="inputRequirement">' . ENTRY_EMAIL_ADDRESS_TEXT . '</span>': '')
      ; ?></td>
	  <td align="left" width="30%" ><span id="errormsgemail2"><img src="img/iconCheckOff.gif" /></span></td>
      </tr>
	  
<?php
  if (ACCOUNT_DOB == 'true') {
?>

     

<?php
  }
?>

     
    </table>
  </div>


<?php
session_start();

  if (ACCOUNT_COMPANY == 'true') {
?>

  <h2 class="firstH2"><?php echo "Where will this order ship to?"; ?></h2>

  <div class="contentText">
    <table border="0" cellspacing="0" cellpadding="0" width="100%" class="contactprimary">
	
	   <tr>
       <!-- <td width="19%" class="fieldKey" align="right"><?php echo ENTRY_FIRST_NAME; ?></td>-->
        <td width="70%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('firstname2','','id="firstname2" placeholder="First Name" size="20"'); ?></td>
		<td align="left" width="30%"  ><span id="errormsgfirstname2"><img src="img/iconCheckOff.gif" /></span></td>
			
      </tr>
      <tr> 
        <!--<td width="19%"class="fieldKey" align="right"><?php echo ENTRY_LAST_NAME; ?></td>-->
        <td  width="70%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('lastname2','','id="lastname2"  placeholder="Last Name" size="20"') 
		//. '&nbsp;' . (tep_not_null(ENTRY_LAST_NAME_TEXT) ? '<span class="inputRequirement">' . ENTRY_LAST_NAME_TEXT . '</span>': '')
		; ?></td>
		<td align="left" width="30%"  ><span id="errormsglastname2"><img src="img/iconCheckOff.gif" /></span></td>
      </tr>
      <tr>
        <!--<td width="19%" class="fieldKey" align="right"><?php echo "Business Name:"; ?></td>-->
        <td width="70%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('company','','id="company" size="20" placeholder="Business Name"' )
	//	. '&nbsp;' . (tep_not_null(ENTRY_COMPANY_TEXT) ? '<span class="inputRequirement">' . ENTRY_COMPANY_TEXT . '</span>': '')
		; ?></td>
		<td align="left" width="30%"  ><span id="errormsgcompany"><img src="img/iconCheckOff.gif" /></span></td>
	
      </tr> 
    </table>
  </div>

<?php
  }
?>





  <div class="contentText">
    <table border="0" cellspacing="0" cellpadding="0" width="100%" class="contactprimary">
      
	  <?php
$_SESSION['street']=$_POST['street_address'];
?>


<tr>
        <!--<td width="19%" class="fieldKey" align="right"><?php echo "Phone Number:"; ?></td>--->
        <td width="70%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('telephone','','id="telephone" maxlength="10" placeholder="Phone Number" ') 
		//. '&nbsp;' . (tep_not_null(ENTRY_TELEPHONE_NUMBER_TEXT) ? '<span class="inputRequirement">' . ENTRY_TELEPHONE_NUMBER_TEXT . '</span>': '')
		; ?></td>
		<td align="left" width="30%"  ><span id="errormsgtelephone"><img src="img/iconCheckOff.gif" />Ex.8881234567</span></td>
		
      </tr>

<tr>
        <!--<td width="19%" class="fieldKey" align="right"><?php echo ENTRY_STREET_ADDRESS; ?></td>-->
        <td width="70%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('street_address','','id="street_address"  size="20" placeholder="Street Address"') 
		//. '&nbsp;' . (tep_not_null(ENTRY_STREET_ADDRESS_TEXT) ? '<span class="inputRequirement">' . ENTRY_STREET_ADDRESS_TEXT . '</span>': '')
		; ?></td>
		<td align="left" width="30%" ><span id="errormsgstreet"><img src="img/iconCheckOff.gif" /></span></td>
      </tr>
	  

   	  <?php
  if (ACCOUNT_SUBURB == 'true') {
?>

      <tr>
        <!--<td width="19%" cellpadding="2" class="fieldKey" align="right" ><?php echo "Suite/Apt/Unit Number:"; ?></td>-->
        <td width="70%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('suburb','',' placeholder=""  id="street_address222" ') 
//	. '&nbsp;' . (tep_not_null(ENTRY_SUBURB_TEXT) ? '<span class="inputRequirement">' . ENTRY_SUBURB_TEXT . '</span>': '')
; ?> </td>
<td align="left" width="30%" ><span id="errormsgstreet_address222"><img src="img/iconCheckOff.gif" /></span></td>
      </tr>

<?php
  }
?>  
	  
	  <?php
$_SESSION['postcode']=$_POST['postcode'];
?>
      <tr>
        <!--<td width="19%" class="fieldKey" align="right"><?php echo ENTRY_CITY; ?></td>-->
        <td  width="70%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('city','','id="city"  size="20" placeholder="City"') 
		//. '&nbsp;' . (tep_not_null(ENTRY_CITY_TEXT) ? '<span class="inputRequirement">' . ENTRY_CITY_TEXT . '</span>': '')
		; ?></td>
		<td align="left" width="30%" ><span id="errormsgcity"><img src="img/iconCheckOff.gif" /></span></td>
      </tr>
 
	  <?php
$_SESSION['city']=$_POST['city'];
?>
<?php
  if (ACCOUNT_STATE == 'true') {
?>


      <tr>
        <!--<td width="19%" class="fieldKey" align="right"><?php echo ENTRY_STATE; ?></td>-->
        <td width="70%" class="fieldValue" colspan="2">
<?if ($process == true) {
      if ($entry_state_has_zones == true) {
        $zones_array = array();
        $zones_query = tep_db_query("select zone_name from " . TABLE_ZONES . " where zone_country_id = '" . (int)$country . "' order by zone_name");
        while ($zones_values = tep_db_fetch_array($zones_query)) {
          $zones_array[] = array('id' => $zones_values['zone_name'], 'text' => $zones_values['zone_name']);
        }
        echo tep_draw_pull_down_menu('state', $zones_array);
      } else {
        echo tep_draw_input_field('state');
      }
    } else {
      echo '<select name="state" id="state"   STYLE="" size="0">
<option value >State/Province</option>
<optgroup label="Canada"> 
	<option value="AB">Alberta</option>
	<option value="BC">British Columbia</option>
	<option value="MB">Manitoba</option>
	<option value="NB">New Brunswick</option>
	<option value="NL">Newfoundland and Labrador</option>
	<option value="NS">Nova Scotia</option>
	<option value="NT">Northwest Territories</option>
	<option value="NU">Nunavut</option>	
	<option value="ON">Ontario</option>
	<option value="PE">Prince Edward Island</option>
	<option value="QC">Quebec</option>
	<option value="SK">Saskatchewan</option>
	<option value="YT">Yukon</option>
</optgroup>
<optgroup label="Puerto Rico"> 
	<option value="SK">Puerto Rico</option>
</optgroup>
<optgroup label="United States"> 
		<option value="AL">Alabama</option>
		<option value="AK">Alaska</option>
		<option value="AZ">Arizona</option>
		<option value="AR">Arkansas</option>
		<option value="CA">California</option>
		<option value="CO">Colorado</option>
		<option value="CT">Connecticut</option>
		<option value="DE">Delaware</option>
		<option value="DC">District of Columbia</option>
		<option value="FL">Florida</option>
		<option value="GA">Georgia</option>
		<option value="HI">Hawaii</option>
		<option value="ID">Idaho</option>
		<option value="IL">Illinois</option>
		<option value="IN">Indiana</option>
		<option value="IA">Iowa</option>
		<option value="KS">Kansas</option>
		<option value="KY">Kentucky</option>
		<option value="LA">Louisiana</option>
		<option value="ME">Maine</option>
		<option value="MD">Maryland</option>
		<option value="MA">Massachusetts</option>
		<option value="MI">Michigan</option>
		<option value="MN">Minnesota</option>
		<option value="MS">Mississippi</option>
		<option value="MO">Missouri</option>
		<option value="MT">Montana</option>
		<option value="NE">Nebraska</option>
		<option value="NV">Nevada</option>
		<option value="NH">New Hampshire</option>
		<option value="NJ">New Jersey</option>
		<option value="NM">New Mexico</option>
		<option value="NY">New York</option>
		<option value="NC">North Carolina</option>
		<option value="ND">North Dakota</option>
		<option value="OH">Ohio</option>
		<option value="OK">Oklahoma</option>
		<option value="OR">Oregon</option>
		<option value="PA">Pennsylvania</option>
		<option value="RI">Rhode Island</option>
		<option value="SC">South Carolina</option>
		<option value="SD">South Dakota</option>
		<option value="TN">Tennessee</option>
		<option value="TX">Texas</option>
		<option value="UT">Utah</option>
		<option value="VT">Vermont</option>
		<option value="VA">Virginia</option>
		<option value="WA">Washington</option>
		<option value="WV">West Virginia</option>
		<option value="WI">Wisconsin</option>
		<option value="WY">Wyoming</option>
        </optgroup>
</select>';
    }
	?>
		
        </td>
		<td align="left" width="30%"><span align="left" id="errormsgstate"><img align="left" src="img/iconCheckOff.gif" /></span>
        </td>
      </tr>
	  

	  <?php
$_SESSION['state']=$_POST['state'];
?>
<?php
  }
?>
 <tr>
       <!-- <td width="19%"class="fieldKey" align="right"><?php echo "Zip/ ".ENTRY_POST_CODE; ?></td>-->
        <td width="70%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('postcode','','id="postcode"  size="20" placeholder="Zip/Postal Code "')
//		. '&nbsp;' . (tep_not_null(ENTRY_POST_CODE_TEXT) ? '<span class="inputRequirement">' . ENTRY_POST_CODE_TEXT . '</span>': ''); 
?></td>
 <td align="left" width="30%"><span id="errormsgpostcode"><img src="img/iconCheckOff.gif" /></span></td>
      </tr>

      <tr>
        <!--<td width="19%"class="fieldKey" align="right"><?php echo ENTRY_COUNTRY; ?></td>-->
        <td  width="70%" class="fieldValue" colspan="2">
		
		
		<select name="country" id="country" size="0" placeholder="" onchange="getPrice(this.form)">
		<option value="" >Please Select</option>
		<option value="38">Canada</option>
		<option value="172">Puerto Rico</option>
		<option value="223" selected="selected">United States</option>
		</select>
		
		<?php //echo tep_get_country_list('country','','id="country"    size="0" placeholder="Last Name" ') 
		//. '&nbsp;' . (tep_not_null(ENTRY_COUNTRY_TEXT) ? '<span class="inputRequirement">' . ENTRY_COUNTRY_TEXT . '</span>': '')
		; ?></td>
		<td align="left" width="30%"><span id="errormsgcountry"><img src="img/iconCheckOn.gif" /></span></td>
		
      </tr>
	    
      
     
    </table>
	
  </div>




  


  <div class="contentText">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
    
    </table>
  </div>

  <h2 class="firstH2"><?php echo CATEGORY_PASSWORD; ?></h2>

  <div class="contentText">
    <table border="0" cellspacing="0" cellpadding="0" width="100%" class="contactprimary">
      <tr>
       <!-- <td width="19%" class="fieldKey" align="right"><?php echo ENTRY_PASSWORD; ?></td>-->
        <td width="70%" class="fieldValue" colspan="2"><?php echo tep_draw_password_field('password','','id="password"  size="20" placeholder="Password"') 
		//. '&nbsp;' . (tep_not_null(ENTRY_PASSWORD_TEXT) ? '<span class="inputRequirement">' . ENTRY_PASSWORD_TEXT . '</span>': '')
		; ?></td>
		<td align="left" width="30%"><span id="errormsgpassword"><img src="img/iconCheckOff.gif" /></span></td>
      </tr>
      <tr>
       <!-- <td width="19%"class="fieldKey" align="right"><?php echo ENTRY_PASSWORD_CONFIRMATION; ?></td>-->
        <td width="70%"class="fieldValue" colspan="2"><?php echo tep_draw_password_field('confirmation','','id="confirmation"  size="20" placeholder="Password Confirmation"') 
		//. '&nbsp;' . (tep_not_null(ENTRY_PASSWORD_CONFIRMATION_TEXT) ? '<span class="inputRequirement">' . ENTRY_PASSWORD_CONFIRMATION_TEXT . '</span>': '')
		; ?></td>
		<td align="left" width="30%"><span id="errormsgconfirmation"><img src="img/iconCheckOff.gif" /></span><span id="errormsgnotconfirmation"></span></td>
      </tr>
	  </table>
	  <tr>
	 <td align="right" colspan="3">
	   <!-- ReCaptcha Start -->
  <?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?>
  <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_PUBLIC_KEY; ?>"></div>
  <!-- ReCaptcha End -->

  </div>
<div  style="width:100%; text-align:center;">
    <span><input type="image" class="updatebutton" style="width:581px;height: 119px;" src="img/new_icons/continue.png"  alt="Continue" title=" Continue " button="" onclick="javascript:document.forms['checkout_payment'].submit();" ></span>
  </div>
  
  <!--
  <div class="buttonSet" style="float:right; width:50%">
    <span class="buttonAction" ><?php echo tep_image_submit("continue.png", IMAGE_BUTTON_CONTINUE, 'button'); ?></span>
  </div>-->
</div>
</form>
</td>
</tr>




<tr>



</td>



</td>

</tr>
</table>
</td>
</tr>
</table>
<?
}

?>


<?php
  require(DIR_WS_INCLUDES . 'template_bottom.php');
  require(DIR_WS_INCLUDES . 'application_bottom.php');
?>

