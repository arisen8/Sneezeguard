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
  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_ACCOUNT_EDIT);

  if (isset($HTTP_POST_VARS['action']) && ($HTTP_POST_VARS['action'] == 'process') && isset($HTTP_POST_VARS['formid']) && ($HTTP_POST_VARS['formid'] == $sessiontoken)) {
   // if (ACCOUNT_GENDER == 'true') $gender = tep_db_prepare_input($HTTP_POST_VARS['gender']);
    $firstname = tep_db_prepare_input($HTTP_POST_VARS['firstname']);
    $lastname = tep_db_prepare_input($HTTP_POST_VARS['lastname']);
   // if (ACCOUNT_DOB == 'true') $dob = tep_db_prepare_input($HTTP_POST_VARS['dob']);
    $email_address = tep_db_prepare_input($HTTP_POST_VARS['email_address']);
    $telephone = tep_db_prepare_input($HTTP_POST_VARS['telephone']);
    $fax = tep_db_prepare_input($HTTP_POST_VARS['fax']);




$firstname2 = tep_db_prepare_input($HTTP_POST_VARS['firstname2']);
    $lastname2 = tep_db_prepare_input($HTTP_POST_VARS['lastname2']);
    //if (ACCOUNT_DOB == 'true') $dob = tep_db_prepare_input($HTTP_POST_VARS['dob']);
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
    $addressiddd = tep_db_prepare_input($HTTP_POST_VARS['addressiddd']);







    $error = false;

    /*if (ACCOUNT_GENDER == 'true') {
      if ( ($gender != 'm') && ($gender != 'f') ) {
        $error = true;

        $messageStack->add('account_edit', ENTRY_GENDER_ERROR);
      }
    }*/

    if (strlen($firstname) < ENTRY_FIRST_NAME_MIN_LENGTH) {
      $error = true;

      $messageStack->add('account_edit', ENTRY_FIRST_NAME_ERROR);
    }

    if (strlen($lastname) < ENTRY_LAST_NAME_MIN_LENGTH) {
      $error = true;

      $messageStack->add('account_edit', ENTRY_LAST_NAME_ERROR);
    }

    /*if (ACCOUNT_DOB == 'true') {
      if ((is_numeric(tep_date_raw($dob)) == false) || (@checkdate(substr(tep_date_raw($dob), 4, 2), substr(tep_date_raw($dob), 6, 2), substr(tep_date_raw($dob), 0, 4)) == false)) {
        $error = true;

        $messageStack->add('account_edit', ENTRY_DATE_OF_BIRTH_ERROR);
      }
    }*/

    if (strlen($email_address) < ENTRY_EMAIL_ADDRESS_MIN_LENGTH) {
      $error = true;

      $messageStack->add('account_edit', ENTRY_EMAIL_ADDRESS_ERROR);
    }

    if (!tep_validate_email($email_address)) {
      $error = true;

      $messageStack->add('account_edit', ENTRY_EMAIL_ADDRESS_CHECK_ERROR);
    }




    if (strlen($firstname2) < ENTRY_FIRST_NAME_MIN_LENGTH) {
      $error = true;

      $messageStack->add('account_edit', ENTRY_FIRST_NAME_ERROR);
    }

    if (strlen($lastname2) < ENTRY_LAST_NAME_MIN_LENGTH) {
      $error = true;

      $messageStack->add('account_edit', ENTRY_LAST_NAME_ERROR);
    }

  


    if (strlen($street_address) < ENTRY_STREET_ADDRESS_MIN_LENGTH) {
      $error = true;

      $messageStack->add('account_edit', ENTRY_STREET_ADDRESS_ERROR);
    }

    if (strlen($postcode) < ENTRY_POSTCODE_MIN_LENGTH) {
      $error = true;

      $messageStack->add('account_edit', ENTRY_POST_CODE_ERROR);
    }

    if (strlen($city) < ENTRY_CITY_MIN_LENGTH) {
      $error = true;

      $messageStack->add('account_edit', ENTRY_CITY_ERROR);
    }

    if (!is_numeric($country) != false) {
      $error = true;

      $messageStack->add('account_edit', ENTRY_COUNTRY_ERROR);
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

          $messageStack->add('account_edit', ENTRY_STATE_ERROR_SELECT);
        }
      } else {
        if (strlen($state) < ENTRY_STATE_MIN_LENGTH) {
          $error = true;

          $messageStack->add('account_edit', ENTRY_STATE_ERROR);
        }
      }
    }













    $check_email_query = tep_db_query("select count(*) as total from " . TABLE_CUSTOMERS . " where customers_email_address = '" . encrypt_email(tep_db_input($email_address), ENCRYPTION_KEY_EMAIL) . "' and customers_id != '" . (int)$customer_id . "'");
    $check_email = tep_db_fetch_array($check_email_query);
    if ($check_email['total'] > 0) {
      $error = true;

      $messageStack->add('account_edit', ENTRY_EMAIL_ADDRESS_ERROR_EXISTS);
    }

    if (strlen($telephone) < ENTRY_TELEPHONE_MIN_LENGTH) {
      $error = true;

      $messageStack->add('account_edit', ENTRY_TELEPHONE_NUMBER_ERROR);
    }

    if ($error == false) {
      $sql_data_array = array('customers_firstname' => $firstname,
                              'customers_lastname' => $lastname,
                              'customers_email_address' => encrypt_email($email_address, ENCRYPTION_KEY_EMAIL),
                              'customers_telephone' => $telephone,
                              'customers_fax' => $fax);

      if (ACCOUNT_GENDER == 'true') $sql_data_array['customers_gender'] = $gender;
      if (ACCOUNT_DOB == 'true') $sql_data_array['customers_dob'] = tep_date_raw($dob);

      tep_db_perform(TABLE_CUSTOMERS, $sql_data_array, 'update', "customers_id = '" . (int)$customer_id . "'");

      tep_db_query("update " . TABLE_CUSTOMERS_INFO . " set customers_info_date_account_last_modified = now() where customers_info_id = '" . (int)$customer_id . "'");

      $sql_data_array = array('entry_firstname' => $firstname,
                              'entry_lastname' => $lastname);

      tep_db_perform(TABLE_ADDRESS_BOOK, $sql_data_array, 'update', "customers_id = '" . (int)$customer_id . "' and address_book_id = '" . (int)$customer_default_address_id . "'");



/* update prmary billing address start */
	$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
$conn=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());
$update_primaryaddress=tep_db_query("UPDATE `address_book` SET `entry_company`='$company',`entry_firstname`='$firstname2',`entry_lastname`='$lastname2',`entry_street_address`='$street_address',`entry_suburb`='$suburb',`entry_postcode`='$postcode',`entry_city`='$city',`entry_state`='$state',`entry_country_id`='$country',`entry_zone_id`='$zone_id' WHERE `address_book_id`='$addressiddd' AND `customers_id`='$customer_id'");



/* update prmary billing address start end*/



// reset the session variables
      $customer_first_name = $firstname;

      $messageStack->add_session('account', SUCCESS_ACCOUNT_UPDATED, 'success');

      tep_redirect(tep_href_link(FILENAME_ACCOUNT, '', 'SSL'));
    }
  }

  $account_query = tep_db_query("select customers_gender, customers_firstname, customers_lastname, customers_dob, customers_email_address, customers_telephone, customers_fax from " . TABLE_CUSTOMERS . " where customers_id = '" . (int)$customer_id . "'");
  $account = tep_db_fetch_array($account_query);

  $breadcrumb->add(NAVBAR_TITLE_1, tep_href_link(FILENAME_ACCOUNT, '', 'SSL'));
  $breadcrumb->add(NAVBAR_TITLE_2, tep_href_link(FILENAME_ACCOUNT_EDIT, '', 'SSL'));

  //require(DIR_WS_INCLUDES . 'template_top.php');
  require(DIR_WS_INCLUDES . 'header_new_design.php');
  
  require('includes/form_check.js.php');
?>













<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>

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



<style>
  
  .contactprimary tr{height:63px;}
  /* .contactprimary input[type=text] {
	  width:25%;
	  height:36px;
	  border: 2px solid #d1cbcb;
    border-radius: 8px;
  }
  
    .contactprimary input[type=password] {
	  width:25%;
	  height:36px;
	  border: 2px solid #d1cbcb;
    border-radius: 8px;
  }
  
    .contactprimary select {
	  width:25%;
	  height:36px;
	  border: 2px solid #d1cbcb;
    border-radius: 8px;
  }
  
  .button2 {
    border-radius: 10px;
    padding-top: 0px;
} */

.fieldValue .form-control
{

  width: 50%;
}




.inputRequirement {
    color: #FF0000;
    font-family: Verdana,Arial,sans-serif;
    font-size: 14px;
    position: relative;
    top: -44px;
    left: 26%;
}
.inputRequirementheading {
    color: #FF0000;
    font-family: Verdana,Arial,sans-serif;
    font-size: 14px;

}


.account-edit-content{margin-top:95px;text-align:center;}



.account-edit-content p{font-size:16px;}

.account-edit-content textarea{font-size:16px;}
.account-edit-content select{font-size:16px !important;}





  .inputRequirement {
    color: #FF0000;
    font-family: Verdana,Arial,sans-serif;
    font-size: 16px;
}

.inputaccountpass
{
  display: flex;
}
.inputRequirementposition
{
  float: right;
}
@media screen and (max-width:768px) {
	
  .inputRequirementposition
  {
    float: none;
  }

.fieldValue .form-control
{

  width: 90%;
}
.inputRequirement{left: 49%;}
}

  </style>
<div class="form_white account-edit-content"  align="center" class="" onmouseover="openCity(event, 'Hide');hide_cart_data()"><!-- deepak 4-1-2021 -->
<table width="100%"  cellpadding="0" cellspacing="0" style="padding:5px;" class="contactprimary " > 

<tr  >

<td style="">
<table width="100%"  cellpadding="2" cellspacing="2">
<tr>

<td   valign="top" >
<h2 style=" height:26px;"><?php echo HEADING_TITLE; ?></h2>

<?php
  if ($messageStack->size('account_edit') > 0) {
    echo $messageStack->output('account_edit');
  }
?>

<?php echo tep_draw_form('account_edit', tep_href_link(FILENAME_ACCOUNT_EDIT, '', 'SSL'), 'post', 'onsubmit="return check_form(account_edit);"', true) . tep_draw_hidden_field('action', 'process'); ?>

<div class="contentContainer" >
  <div>
  <h2><?php echo MY_ACCOUNT_TITLE; ?></h2>
    <div class="inputRequirementheading" ><?php echo FORM_REQUIRED_INFORMATION; ?></div>

    
  </div>

  <div class="contentText" align="center">
    <table border="0" cellspacing="2" cellpadding="2" width="100%" align="center">

<?php
  if (ACCOUNT_GENDER == 'true') {
    if (isset($gender)) {
      $male = ($gender == 'm') ? true : false;
    } else {
      $male = ($account['customers_gender'] == 'm') ? true : false;
    }
    $female = !$male;
?>

<?php
  }
?>

      <tr align="center">
     
        <td width="90%"  class="fieldValue">
<?php echo tep_draw_input_field('firstname', $account['customers_firstname'],'class="form-control"') . '&nbsp;' . (tep_not_null(ENTRY_FIRST_NAME_TEXT) ? '<span class="inputRequirement">' . ENTRY_FIRST_NAME_TEXT . '</span>': ''); ?></td>
<td  width="10%" ></td>
      </tr>
      <tr align="center">
       
       <td width="90%"  class="fieldValue"><?php echo tep_draw_input_field('lastname', $account['customers_lastname'],'class="form-control"') . '&nbsp;' . (tep_not_null(ENTRY_LAST_NAME_TEXT) ? '<span class="inputRequirement">' . ENTRY_LAST_NAME_TEXT . '</span>': ''); ?></td>
	   <td  width="10%" ></td>
      </tr>

<?php
  if (ACCOUNT_DOB == 'true') {
?>

<?php
  }
?>

      <tr  align="center"> 
     
        <td style="" width="90%"  class="fieldValue"><?php echo tep_draw_input_field('email_address', decrypt_email($account['customers_email_address'],ENCRYPTION_KEY_EMAIL),'class="form-control"') . '&nbsp;' . (tep_not_null(ENTRY_EMAIL_ADDRESS_TEXT) ? '<span class="inputRequirement">' . ENTRY_EMAIL_ADDRESS_TEXT . '</span>': ''); ?></td>
     <td  width="10%" ></td>
	 </tr>
      <tr align="center">
 
        <td width="90%"  class="fieldValue"><?php echo tep_draw_input_field('telephone', $account['customers_telephone'],'class="form-control"') . '&nbsp;' . (tep_not_null(ENTRY_TELEPHONE_NUMBER_TEXT) ? '<span class="inputRequirement">' . ENTRY_TELEPHONE_NUMBER_TEXT . '</span>': ''); ?></td>
		<td  width="10%" ></td>
      </tr>
      <tr align="center">
   
        <td width="90%"  class="fieldValue">
		
			<?php echo tep_draw_input_field('fax','',  'placeholder="Fax" class="form-control" value="'.$account['customers_fax'].'" style="border: 2px solid #d1cbcb;border-radius: 8px;"', 'text') . '' . (tep_not_null(ENTRY_FAX_NUMBER_TEXT) ? '<span class="inputRequirement">' . ENTRY_FAX_NUMBER_TEXT . '</span>': ''); ?>
		&nbsp;&nbsp;
	</td>
		<td  width="10%" ></td>
      </tr>
	  
	  
	  
	   
	  
	  
	  <?php
	  
	
	  $addresses_query = tep_db_query("select address_book_id, entry_firstname as firstname, entry_lastname as lastname, entry_company as company, entry_street_address as street_address, entry_suburb as suburb, entry_city as city, entry_postcode as postcode, entry_state as state, entry_zone_id as zone_id, entry_country_id as country_id from " . TABLE_ADDRESS_BOOK . " where customers_id = '" . (int)$customer_id . "' order by firstname, lastname");
  while ($addresses = tep_db_fetch_array($addresses_query)) {
    $format_id = tep_get_address_format_id($addresses['country_id']);
	
	if ($addresses['address_book_id'] == $customer_default_address_id)
		
		{
			
			
		 $street = tep_output_string_protected($addresses['street_address']);
    $suburb = tep_output_string_protected($addresses['suburb']);
    $city = tep_output_string_protected($addresses['city']);
    $state = tep_output_string_protected($addresses['state']);
    if (isset($addresses['country_id']) && tep_not_null($addresses['country_id'])) {
      $country = tep_get_country_name($addresses['country_id']);

      if (isset($addresses['zone_id']) && tep_not_null($addresses['zone_id'])) {
        $state = tep_get_zone_code($addresses['country_id'], $addresses['zone_id'], $state);
      }
    } elseif (isset($addresses['country']) && tep_not_null($addresses['country'])) {
      $country = tep_output_string_protected($addresses['country']['title']);
    } else {
      $country = '';
    }
    $postcode = tep_output_string_protected($addresses['postcode']);
    $zip = $postcode;	
			
			
	
		}
	
	
	//echo'<b style="color:red;"><pre>'; print_r($addresses); echo'</b><br>';
	
	$firstname2=$addresses['firstname'];
	$lastname2=$addresses['lastname'];
	$company=$addresses['company'];
	$street_address=$addresses['street_address'];
	$suburb=$addresses['suburb'];
	$city=$addresses['city'];
	$postcodesss=$addresses['postcode'];
	
	$country_idsss=$addresses['country_id'];
	$country=$country;
	$state=$state;
	$addressbookid=$addresses['address_book_id'];
	
	
  }
	?>
	  
	  <input type="hidden" name="addressiddd" value="<?php echo$addressbookid; ?>">
	  <tr  align="center">
	  <td width="90%"  class="fieldValue" align="center">
	  <h3 style="color:black;" class="headingaccountedit">
	  Primary Billing Address</h3>
	  </td>
		<td  width="10%" ></td>
	  </tr>
	  
	  
	  
	   <tr align="center">

        <td width="90%"  class="fieldValue"><?php echo tep_draw_input_field('firstname2','','id="firstname2" placeholder="First Name" class="form-control" value="'.$firstname2.'" size="20"'); ?>&nbsp;&nbsp;&nbsp;</td>
		    <td  width="10%" ><span id="errormsgfirstname2"></span></td>
			
      </tr>
      <tr align="center"> 
   
        <td  width="90%" class="fieldValue" ><?php echo tep_draw_input_field('lastname2','','id="lastname2"  placeholder="Last Name" class="form-control"  value="'.$lastname2.'"') 
	
		; ?>&nbsp;&nbsp;&nbsp;</td>
		<td  width="10%"  ><span id="errormsglastname2"></span></td>
      </tr>
      <tr align="center">
        
        <td width="90%"  class="fieldValue"><?php echo tep_draw_input_field('company','','id="company" size="20" class="form-control" placeholder="Business Name" value="'.$company.'"' )
	
		; ?>&nbsp;&nbsp;&nbsp;</td>
		<td   width="10%" ><span id="errormsgcompany"></span></td>
	
      </tr> 
    
	  
	
	  <?php
$_SESSION['street']=$_POST['street_address'];
?>



<tr align="center">
       
        <td width="90%"   width="10%" class="fieldValue" ><?php echo tep_draw_input_field('street_address','','id="street_address" class="form-control"  size="20" placeholder="Street Address" value="'.$street_address.'"') 
		
		; ?>&nbsp;&nbsp;&nbsp;</td>
		<td  ><span id="errormsgstreet"></span></td>
      </tr>
	  

 	  <?php
  if (ACCOUNT_SUBURB == 'true') {
?>

      <tr align="center">
        
        <td width="90%"  class="fieldValue" ><?php echo tep_draw_input_field('suburb','',' placeholder="" class="form-control" id="street_address222" value="'.$suburb.'"') 

; ?> &nbsp;&nbsp;</td>
<td  width="10%" ><span id="errormsgstreet_address222"></span></td>
      </tr>

<?php
  }
?>    
	  
	  <?php 
$_SESSION['postcode']=$_POST['postcode'];
?>
      <tr align="center">
        
        <td  width="90%"  class="fieldValue" ><?php echo tep_draw_input_field('city','','id="city" class="form-control" size="20" placeholder="City" value="'.$city.'"') 
		
		; ?>&nbsp;&nbsp;&nbsp;</td>
		<td  width="10%" ><span id="errormsgcity"></span></td>
      </tr>
 
	  <?php
$_SESSION['city']=$_POST['city'];
?>
<?php
  if (ACCOUNT_STATE == 'true') {
?>


      <tr align="center">
       
        <td width="90%"  class="fieldValue" >
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
      echo '<select name="state" id="state" class="form-control" size="0">
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
		
     &nbsp;&nbsp; </td>
		<td  width="10%"><span  id="errormsgstate"></span>
        </td>
      </tr>
	  

	  <?php
$_SESSION['state']=$_POST['state'];
?>
<?php
  }
  
  //echo$postcode;
?>

 <tr align="center"><?php //echo'postcode== '.$postcodesss;?>

        <td width="90%" class="fieldValue"><?php echo tep_draw_input_field('postcode','','id="postcode" class="form-control"  size="20" placeholder="Zip/Postal Code" value="'.$postcodesss.'"')

?></td>
<td  width="10%"><span id="errormsgpostcode"></span></td>
      </tr>

      <tr align="center">

        <td  width="90%"  class="fieldValue" >
		<select name="country" id="country" class="form-control" size="0" onchange="getPrice(this.form)">
		
		<option value="" >Please Select</option>
		
		
		<?php
		if($country_idsss=='38')
		{
		echo'<option value="38" selected>Canada</option>';	
		}
		else{
		echo'<option value="38">Canada</option>';	
		}
		
		
		if($country_idsss=='172')
		{
		echo'<option value="172" selected>Puerto Rico</option>';	
		}
		else{
		echo'<option value="172">Puerto Rico</option>';	
		}
		if($country_idsss=='223')
		{
		echo'<option value="223" selected>United States</option>';	
		}
		else{
		echo'<option value="223" >United States</option>';	
		}
		
		?>
		
		
		
		
			
		</select>
		
		
		
	</td>
		
		<td  width="10%"><span id="errormsgcountry"></span></td>
		
      </tr>
	    
      

 
	  

	  
	  
	  
	  
    </table>

	  <table width="75%"> 
	  
      <tr align="center">
        <td width="15%"><?php //echo '<a href="'.tep_href_link(FILENAME_ACCOUNT, '', 'SSL').'">'.tep_image_button('button_back.gif', IMAGE_BUTTON_BACK).'</a>';?>
		<?php echo '<a href="'.tep_href_link(FILENAME_ACCOUNT, '', 'SSL').'"  class="btn btn-outline-dark"> ';?>Back</a>
		</td>
		
		
	  
	  
    
		<td width="28%">
		<?php //echo tep_image_submit("continue.gif", IMAGE_BUTTON_CONTINUE, 'primary'); ?>
		<input type="submit" value="Continue" class="btn btn-outline-dark"   alt="Continue" title=" Continue " primary="" onclick="javascript:document.forms['checkout_payment'].submit();">
		</td>
      </tr>
	  </table>
    <br />
  </div>
</div>





</form>
</td></tr></table></td></tr></table>




<?php
require(DIR_WS_INCLUDES . 'footer_new_design.php');

  // require(DIR_WS_INCLUDES . 'template_bottom.php');
  // require(DIR_WS_INCLUDES . 'application_bottom.php');
?>
