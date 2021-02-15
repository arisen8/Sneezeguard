<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  if (!isset($process)) $process = false;
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
  <div class="contentText">
    <table border="0" width="100%" cellspacing="0" cellpadding="2">

<?php
  if (ACCOUNT_GENDER == 'true') {
    if (isset($gender)) {
      $male = ($gender == 'm') ? true : false;
      $female = ($gender == 'f') ? true : false;
    } else {
      $male = false;
      $female = false;
    }
?>

    <!--tr>
      <td class="fieldKey"><?php echo ENTRY_GENDER; ?></td>
      <td class="fieldValue"><?php echo tep_draw_radio_field('gender', 'm', $male) . '    ' . MALE . '    ' . tep_draw_radio_field('gender', 'f', $female) . '    ' . FEMALE . '  ' . (tep_not_null(ENTRY_GENDER_TEXT) ? '<span class="inputRequirement">' . ENTRY_GENDER_TEXT . '</span>': ''); ?></td>
    </tr-->

<?php
  }
?>

    <tr>
      <td class="fieldKey"  width="33%"><?php echo ENTRY_FIRST_NAME; ?></td>
      <td class="fieldValue" width="33%"><?php echo tep_draw_input_field('firstname','','id="firstname" class="shipping-address-input" size="20"'); ?></td ><td align="left" width="34%"><span id="errormsgfirstname"><img src="img/iconCheckOff.gif" /></span></td>
    </tr>
    <tr>
      <td class="fieldKey"><?php echo ENTRY_LAST_NAME; ?></td>
      <td class="fieldValue"><?php echo tep_draw_input_field('lastname','','id="lastname" class="shipping-address-input"  size="20"'); ?></td><td align="left"><span id="errormsglastname" align="center"><img src="img/iconCheckOff.gif" /></span></td>
    </tr>

<?php
  if (ACCOUNT_COMPANY == 'true') {
?>

    <tr>
      <td class="fieldKey"><?php echo ENTRY_COMPANY; ?></td>
      <td class="fieldValue"><?php echo tep_draw_input_field('company','','id="company" class="shipping-address-input" size="20" ' ); ?></td><td align="left"  ><span id="errormsgcompany"><img src="img/iconCheckOff.gif" /></span></td>
    </tr>

<?php
  }
?>

    <tr>
      <td class="fieldKey"><?php echo ENTRY_STREET_ADDRESS; ?></td>
      <td class="fieldValue"><?php echo tep_draw_input_field('street_address','','id="street_address" class="shipping-address-input"  size="20"'); ?></td><td align="left" ><span id="errormsgstreet"><img src="img/iconCheckOff.gif" /></span></td>
    </tr>

<?php
  if (ACCOUNT_SUBURB == 'true') {
?>

    <tr>
      <td class="fieldKey"><?php echo ENTRY_SUBURB; ?></td>
      <td class="fieldValue"><?php echo tep_draw_input_field('suburb','','id="street_address222" class="shipping-address-input"') . '  ' . (tep_not_null(ENTRY_SUBURB_TEXT) ? '<span class="inputRequirement">' . ENTRY_SUBURB_TEXT . '</span>': ''); ?></td><td align="left" ><span id="errormsgstreet_address222"><img src="img/iconCheckOff.gif" /></span></td>
    </tr>

<?php
  }
?>

    <tr>
      <td class="fieldKey"><?php echo ENTRY_POST_CODE; ?></td>
      <td class="fieldValue"><?php echo tep_draw_input_field('postcode','','id="postcode" class="shipping-address-input"  size="20"')
//		. '  ' . (tep_not_null(ENTRY_POST_CODE_TEXT) ? '<span class="inputRequirement">' . ENTRY_POST_CODE_TEXT . '</span>': ''); 
?></td><td align="left"><span id="errormsgpostcode"><img src="img/iconCheckOff.gif" /></span></td>
    </tr>
    <tr>
      <td class="fieldKey"><?php echo ENTRY_CITY; ?></td>
      <td class="fieldValue"><?php echo tep_draw_input_field('city','','id="city"  class="shipping-address-input" size="20"'); ?></td><td align="left" ><span id="errormsgcity"><img src="img/iconCheckOff.gif" /></span></td>
    </tr>

<?php
  if (ACCOUNT_STATE == 'true') {
?>

    <tr>
      <td class="fieldKey"><?php echo ENTRY_STATE; ?></td>
      <td class="fieldValue">

<?php
    if ($process == true) {
      if ($entry_state_has_zones == true) {
        $zones_array = array();
        $zones_query = tep_db_query("select zone_name from " . TABLE_ZONES . " where zone_country_id = '" . (int)$country . "' order by zone_name");
        while ($zones_values = tep_db_fetch_array($zones_query)) {
          $zones_array[] = array('id' => $zones_values['zone_name'], 'text' => $zones_values['zone_name']);
        }
        echo tep_draw_pull_down_menu('state', $zones_array,'','id="state" class="shipping-address-input"');
      } else {
        echo tep_draw_input_field('state','','id="state" class="shipping-address-input"');
      }
    } else {
      echo tep_draw_input_field('state','','id="state" class="shipping-address-input"');
    }

    if (tep_not_null(ENTRY_STATE_TEXT)) echo '  <span class="inputRequirement">' . ENTRY_STATE_TEXT . '</span>';
?>

      </td><td align="left" ><span id="errormsgstate"><img src="img/iconCheckOff.gif" /></span></td>
    </tr>

<?php
  }
?>

    <tr>
      <td class="fieldKey"><?php echo ENTRY_COUNTRY; ?></td>
      <td class="fieldValue"><?php echo tep_get_country_list('country','','id="country" class="shipping-address-input"  size="0" ',STORE_COUNTRY) 
		//. '  ' . (tep_not_null(ENTRY_COUNTRY_TEXT) ? '<span class="inputRequirement">' . ENTRY_COUNTRY_TEXT . '</span>': '')
		; ?></td><td align="left"><span id="errormsgcountry"><img src="img/iconCheckOff.gif" /></span></td>
		<!--'country', STORE_COUNTRY) . '  ' . (tep_not_null(ENTRY_COUNTRY_TEXT) ? '<span class="inputRequirement">' . ENTRY_COUNTRY_TEXT . '</span>': ''); ?></td><td align="left"><span id="errormsgcountry"><img src="img/iconCheckOff.gif" /></span></td>-->
    </tr>
  </table>
</div>



   
   
 