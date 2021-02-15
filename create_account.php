<?php 
ini_set('session.cookie_httponly',1);
ini_set('session.cookie_secure',1);
  
ini_set('display_errors', 0);
ob_start();
require("includes/application_top.php");


$page_title='Sneeze Guard Create Account for Online Shop- ADM Sneezeguards';
$page_description='ADM Sneezeguards is able to custom feature make sneeze guard and Glass barriers, this is a amazing choice for shops, markets, Grocery, Banks, catering, supermarkers, convenience stores and medical centres.';
$page_keyword='Custom line Business Sneeze Guards, Chosse sneeze guard from store, Sneeze Guard Online shopping, ADM Sneezeguard account, online protective sneeze guard';
require(DIR_WS_INCLUDES . 'header_new_design.php'); 
require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_CREATE_ACCOUNT);
  $process = false;
  if (isset($HTTP_POST_VARS['action']) && ($HTTP_POST_VARS['action'] == 'process') && isset($HTTP_POST_VARS['formid']) && ($HTTP_POST_VARS['formid'] == $sessiontoken)) {
    if(isset($_POST['captcha']) && $_SESSION['captcha']!=$_POST['captcha']){
      $messageStack->add('captcha', RECAPTCHA_ERROR); 
      $captchamismatch=true;
	    $error = true;
    }else{
      $process = true;
    $firstname = tep_db_prepare_input($HTTP_POST_VARS['firstname']);
    $lastname = tep_db_prepare_input($HTTP_POST_VARS['lastname']);
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
    if (strlen($firstname) < ENTRY_FIRST_NAME_MIN_LENGTH) {
      $error = true;

      $messageStack->add('create_account', ENTRY_FIRST_NAME_ERROR);
    }

    if (strlen($lastname) < ENTRY_LAST_NAME_MIN_LENGTH) {
      $error = true;

      $messageStack->add('create_account', ENTRY_LAST_NAME_ERROR);
    }
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


      $sessiontoken = md5(tep_rand() . tep_rand() . tep_rand() . tep_rand());

      $cart->restore_contents();

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
     
  }

  $text1=rand(1,9);
  $text2=rand(1,9);
  $captchatext=$text1." + ".$text2;
  $captcha=$text1+$text2;
  tep_session_register('captcha');
  $captchamismatch=true;

  $breadcrumb->add(NAVBAR_TITLE, tep_href_link(FILENAME_CREATE_ACCOUNT, '', 'SSL'));

  require('includes/form_check.js.php');
?>

<body>
<section>
    <div class="mt-5">
        <h1>&nbsp;</h1>
    </div>
    <h3 class="text-center p-2 font-weight-bold">CREATE ACCOUNT</h3>
    <h5 class="text-center notice"><span class="text-danger">NOTE</span>: If you already have an account with us, please login at the login page.</h5>
    <hr>
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 col-sm-6 border-right pl-3 pr-1 pb-5">
            <?php echo tep_draw_form('create_account', tep_href_link('create_account.php', '', 'SSL'), 'post', 'onsubmit="return check_form(create_account);"', true,'formspam') . tep_draw_hidden_field('action', 'process'); ?>
                    <div>
                        <h6 class="text-uppercase font-weight-bold mb-3 mt-3">Contact Information</h6>
                    </div>
                    <?= count($messageStack->messages)>0?'<div class="alert alert-danger mt-3 mb-3 ">'.$messageStack->output('create_account').' '.$messageStack->output('captcha').'</div>':''?>                  
                    <div class="form-group text-secondary">
                        <table width="100%">
                            <tr>
                            <td width="70%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('firstname','','id="firstname" class="form-control" size="20" placeholder="First Name"'); ?></td>
		                    <td width="30%" align="left"><span id="errormsgfirstname"><img src="img/iconCheckOff.gif" /></span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-group text-secondary">
                        <table width="100%">
                            <tr>
                            <td width="70%" class="fieldValue" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo tep_draw_input_field('lastname','','id="lastname" class="form-control size="20" placeholder="Last Name"')  ; ?></td>
		                    <td align="left" width="30%" ><span id="errormsglastname" align="center"><img src="img/iconCheckOff.gif" /></span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-group text-secondary">
                        <table width="100%">
                            <tr>
                            <td width="70%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('telephone2','','id="telephone2" class="form-control" maxlength="10" size="20" placeholder="Phone Number"')	; ?></td>
		                        <td align="left"  width="30%"><span id="errormsgtelephone2" align="center"><img src="img/iconCheckOff.gif" />Ex:8885558888</span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-group text-secondary">
                        <table width="100%">
                            <tr>
                            <td width="70%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('email_address','','id="email"  class="form-control" size="20" placeholder="Email Address"') ; ?></td>
	                        <td align="left" width="30%" ><span id="errormsgemail"><img src="img/iconCheckOff.gif" /></span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-group text-secondary">
                        <table width="100%">
                            <tr>
                            <td width="70%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('email_address2','','id="email2" class="form-control" size="20" placeholder="Confirm Email Address"') ;?></td>
	                        <td align="left" width="30%" ><span id="errormsgemail2"><img src="img/iconCheckOff.gif" /></span></td>
                            </tr>
                        </table>
                    </div>
                <div>
                    <h6 class="text-uppercase font-weight-bold">Your Password</h6>
                </div>
                <div class="form-group text-secondary">
                    <table width="100%">
                        <tr>
                            <td width="70%" class="fieldValue" colspan="2"><?php echo tep_draw_password_field('password','','id="password"  class="form-control" size="20" placeholder="Password" autocomplete="off"')	; ?></td>
                            <td width="30%" align="left"><span id="errormsgpassword"><img src="img/iconCheckOff.gif" /></span></td>
                        </tr>
                    </table>
                </div>
                <div class="form-group text-secondary">
                <table width="100%">
                <tr>
                <td width="70%"class="fieldValue" colspan="2"><?php echo tep_draw_password_field('confirmation','','id="confirmation" class="form-control" size="20" placeholder="Password Confirmation" autocomplete="off"'); ?></td>
                <td width="30%" align="left"><span id="errormsgconfirmation"><img src="img/iconCheckOff.gif" /></span><span id="errormsgnotconfirmation"></span></td>     
                </tr>
                </table>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 pl-3 pr-1">
            <div>
                        <h6 class="text-uppercase font-weight-bold mb-3 mt-3">Where will this order ship to?</h6>
                    </div>
                    <div class="form-group text-secondary">
                        <table width="100%">
                            <tr>
                            <td width="70%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('firstname2','','id="firstname2"  class="form-control" placeholder="First Name" size="20"'); ?></td>
		                    <td align="left" width="30%"  ><span id="errormsgfirstname2"><img src="img/iconCheckOff.gif" /></span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-group text-secondary">
                        <table width="100%">
                            <tr>
                            <td  width="70%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('lastname2','','id="lastname2" class="form-control" placeholder="Last Name" size="20"') ; ?></td>
		                    <td align="left" width="30%"  ><span id="errormsglastname2"><img src="img/iconCheckOff.gif" /></span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-group text-secondary">
                        <table width="100%">
                            <tr>
                            <td width="70%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('company','','id="company" class="form-control" size="20" placeholder="Business Name"' ); ?></td>
		                    <td align="left" width="30%"  ><span id="errormsgcompany"><img src="img/iconCheckOff.gif" /></span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-group text-secondary">
                        <table width="100%">
                            <tr>
                            <td width="70%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('telephone','','id="telephone" class="form-control" maxlength="10" placeholder="Phone Number" ') ; ?></td>
                            <td width="30%" align="left"  ><span id="errormsgtelephone"><img src="img/iconCheckOff.gif" />Ex.8881234567</span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-group text-secondary">
                        <table width="100%">
                            <tr>
                            <td width="70%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('street_address','','id="street_address" class="form-control" size="20" placeholder="Street Address 1"'); ?></td>
                            <td width="30%" align="left" ><span id="errormsgstreet"><img src="img/iconCheckOff.gif" /></span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-group text-secondary">
                        <table width="100%">
                            <tr>
                            <td width="70%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('suburb','','class="form-control" placeholder="Street Address 2" id="street_address222"') ; ?></td>
                            <td width="30%" align="left" ><span id="errormsgstreet_address222"><img src="img/iconCheckOff.gif" /></span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-group text-secondary">
                        <table width="100%">
                            <tr>
                            <td     width="70%" class="fieldValue" colspan="2"><?php echo tep_draw_input_field('city','','id="city" class="form-control" size="20" placeholder="City"') ; ?></td>
                            <td     width="30%" align="left" ><span id="errormsgcity"><img src="img/iconCheckOff.gif" /></span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-group text-secondary">
                        <table width="100%">
                            <tr>
                            <td width="70%" class="fieldValue" colspan="2">
<?if ($process == true) {
      if ($entry_state_has_zones == true) {
        $zones_array = array();
        $zones_query = tep_db_query("select zone_name from " . TABLE_ZONES . " where zone_country_id = '" . (int)$country . "' order by zone_name");
        while ($zones_values = tep_db_fetch_array($zones_query)) {
          $zones_array[] = array('id' => $zones_values['zone_name'], 'text' => $zones_values['zone_name']);
        }
        echo tep_draw_pull_down_menu('state', $zones_array,'','id="state" class="form-control" ');
      } else {
        echo tep_draw_input_field('state');
      }
    } else {
      echo '<select name="state"  class="form-control" id="state"size="0">
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
                            </tr>
                        </table>
                    </div>

                    <div class="form-group text-secondary">
                        <table width="100%">
                            <tr>
                            <td width="70%" colspan="2"><?php echo tep_draw_input_field('postcode','','id="postcode" class="form-control size="20" placeholder="Zip/Postal Code " onchange="showLocation();"') ;?></td>
                            <td width="30%" align="left"><span id="errormsgpostcode"><img src="img/iconCheckOff.gif" /></span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-group text-secondary">
                        <table width="100%">
                            <tr>
                            <td  width="70%" class="fieldValue" colspan="2">
                            <select name="country" id="country" class="form-control" size="0" onchange="getPrice(this.form)">
                            <option value="" >Please Select</option>
                            <option value="38">Canada</option>
                            <option value="172">Puerto Rico</option>
                            <option value="223" selected="selected">United States</option>
                            </select>
                    </td>
                    <td width="30%" align="left"><span id="errormsgcountry"><img src="img/iconCheckOn.gif" /></span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-group text-secondary">
                        <table width="70%">
                            <tr>
                            <td   class="fieldValue text-secondary" colspan="2">
                              <input type="text" name="captcha" class="form-control" placeholder="What is <?=$captchatext?> =">
                            </td>
                            </tr>
                        </table>
                    </div>
                    <input type="text" id="website" value="">
                <div class="mt-4 text-uppercase cbtn">
                <input type="submit" class="btn btn-outline-dark form-control p-2" value="CONTINUE">
                </div>
                </form>
            </div>
        </div>
    </div>
</section>

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
</body>
</html>
<?php require(DIR_WS_INCLUDES . 'footer_new_design.php');?>

