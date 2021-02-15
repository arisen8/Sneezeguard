<?php
/*
  $Id: address_book_details.php,v 1.10 2003/06/09 22:49:56 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

  if (!isset($process)) $process = false;
?>





<style>
 
  
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


}




  </style>
  
  
<table border="0" width="100%" cellspacing="0" cellpadding="2">
  <tr>
    <td><table border="0" width="100%" cellspacing="0" cellpadding="2">
      <tr>
        <td class="main"><b><?php //echo NEW_ADDRESS_TITLE; ?></b></td>
		<tr>
		<tr>
        <td class="inputRequirement inputRequirementposition" align="right"><?php echo FORM_REQUIRED_INFORMATION; ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>
	
	<table border="0" width="100%" cellspacing="1" cellpadding="2" class="infoBox">
      <tr class="infoBoxContents">
        <td>
		
		<table width="100%;" border="0" cellspacing="2" cellpadding="2" class="infoBoxsss">
<?php
  /*if (ACCOUNT_GENDER == 'true') {
    if (isset($gender)) {
      $male = ($gender == 'm') ? true : false;
    } else {
      $male = ($entry['entry_gender'] == 'm') ? true : false;
    }
    $female = !$male;*/
?>
          <!--tr>
            <td class="main"><?php echo ENTRY_GENDER; ?></td>
            <td class="main"><?php echo tep_draw_radio_field('gender', 'm', $male) . '&nbsp;&nbsp;' . MALE . '&nbsp;&nbsp;' . tep_draw_radio_field('gender', 'f', $female) . '&nbsp;&nbsp;' . FEMALE . '&nbsp;' . (tep_not_null(ENTRY_GENDER_TEXT) ? '<span class="inputRequirement inputRequirementposition">' . ENTRY_GENDER_TEXT . '</span>': ''); ?></td>
          </tr-->
<?php
  //}
  
  
  
  $firstname=$entry['entry_firstname'];

?>


          <tr>
          
            <td class="main" style="width:100%" colspan="2">
			
            <div class="form-group inputaccountpass">
			
      <?php echo tep_draw_input_field('firstname','',  '" value="'.$entry['entry_firstname'].'" class="form-control" placeholder="First Name"', 'text') . '' . (tep_not_null(ENTRY_FIRST_NAME_TEXT) ? '<span class="inputRequirement inputRequirementposition">' . ENTRY_FIRST_NAME_TEXT . '</span>': ''); ?>
            </div>
    </td>
          
    
    </tr>
          <tr>
           
            <td class="main" style="width:100%" colspan="2">
            <div class="form-group inputaccountpass">
			<?php 
			echo tep_draw_input_field('lastname','', 'placeholder="Last Name" value="'.$entry['entry_lastname'].'" class="form-control"', 'text') . '' . (tep_not_null(ENTRY_LAST_NAME_TEXT) ? '<span class="inputRequirement inputRequirementposition">' . ENTRY_LAST_NAME_TEXT . '</span>': ''); ?>
    
            </div>
  </td>
          </tr>
       
<?php
  if (ACCOUNT_COMPANY == 'true') {
?>
          <tr>
           
            <td class="main" style="width:100%" colspan="2">
            <div class="form-group inputaccountpass">
			<?php 
			echo tep_draw_input_field('company','', 'placeholder="Company" value="'.$entry['entry_company'].'" class="form-control"', 'text') . '' . (tep_not_null(ENTRY_COMPANY_TEXT) ? '<span class="inputRequirement inputRequirementposition">' . ENTRY_COMPANY_TEXT . '</span>': ''); ?>&nbsp;&nbsp;&nbsp;&nbsp;
    
            </div>
  </td>
          </tr>
     
<?php
  }
?>
          <tr>
           
            <td class="main" style="width:100%" colspan="2">
            <div class="form-group inputaccountpass">
			<?php 
      echo tep_draw_input_field('street_address','', 'placeholder="Street Address" value="'.$entry['entry_street_address'].'" class="form-control"', 'text') . '' . (tep_not_null(ENTRY_STREET_ADDRESS_TEXT) ? '<span class="inputRequirement inputRequirementposition">' . ENTRY_STREET_ADDRESS_TEXT . '</span>': ''); ?>
            </div>  
    </td>
          </tr>
<?php
  if (ACCOUNT_SUBURB == 'true') {
?>
          <tr>
         
            <td class="main" style="width:100%" colspan="2">
            <div class="form-group inputaccountpass">
			<?php 
			echo tep_draw_input_field('suburb','', 'placeholder="Suburb" value="'.$entry['entry_suburb'].'" class="form-control"', 'text') . '&nbsp;' . (tep_not_null(ENTRY_SUBURB_TEXT) ? '<span class="inputRequirement inputRequirementposition">' . ENTRY_SUBURB_TEXT . '</span>': ''); 
			
      ?>
            </div>  
    </td>
          </tr>
<?php
  }
?>
          <tr>
          
            <td class="main" style="width:100%" colspan="2">
            <div class="form-group inputaccountpass">
			<?php 
      echo tep_draw_input_field('postcode','', 'placeholder="Post Code" value="'.$entry['entry_postcode'].'" class="form-control"', 'text') . '' . (tep_not_null(ENTRY_POST_CODE_TEXT) ? '<span class="inputRequirement inputRequirementposition">' . ENTRY_POST_CODE_TEXT . '</span>': ''); ?>
            </div>  
    </td>
          </tr>
          <tr>
          
            <td class="main" style="width:100%" colspan="2">
            <div class="form-group inputaccountpass">
			<?php 
      echo tep_draw_input_field('city','', 'placeholder="City" value="'.$entry['entry_city'].'" class="form-control"', 'text') . '' . (tep_not_null(ENTRY_CITY_TEXT) ? '<span class="inputRequirement inputRequirementposition">' . ENTRY_CITY_TEXT . '</span>': ''); ?>
            </div>  
    </td>
          </tr>
<?php
  if (ACCOUNT_STATE == 'true') {
?>
          <tr>
  
            <td class="main" style="width:100%" colspan="2">
            <div class="form-group inputaccountpass">
<?php
    if ($process == true) {
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
      echo tep_draw_input_field('state','', 'placeholder="State" class="stateinput form-control" style="border: 2px solid #d1cbcb;border-radius: 8px;"', tep_get_zone_name($entry['entry_country_id'], $entry['entry_zone_id'], $entry['entry_state']));
    }

    if (tep_not_null(ENTRY_STATE_TEXT)) echo '<span class="inputRequirement inputRequirementposition">' . ENTRY_STATE_TEXT;
?>
            </div>
</td>
          </tr>
<?php
  }
?>
          <tr>
          
            <td class="main" style="width:100%" colspan="2">
            <div class="form-group inputaccountpass">
      <?php echo tep_get_country_list('country', '','class="form-control"', $entry['entry_country_id']) . '&nbsp;' . (tep_not_null(ENTRY_COUNTRY_TEXT) ? '<span class="inputRequirement inputRequirementposition">' . ENTRY_COUNTRY_TEXT . '</span>': ''); ?>
    
            </div>
    </td>
          </tr>
<?php
  if ((isset($HTTP_GET_VARS['edit']) && ($customer_default_address_id != $HTTP_GET_VARS['edit'])) || (isset($HTTP_GET_VARS['edit']) == false) ) {
?>
          <tr>
            <td colspan="2" style="width:100%"><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
             </tr>
               <tr style="width:100%"><td colspan="2" class="main"><p><?php echo tep_draw_checkbox_field('primary', 'on', false, 'id="primary"') . ' ' . SET_AS_PRIMARY; ?></p></td>
          </tr>
<?php
  }
?>
        </table></td>
      </tr>
    </table>
	
	</td>
  </tr>
</table>
  

