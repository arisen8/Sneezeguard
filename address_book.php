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

  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_ADDRESS_BOOK);

  $breadcrumb->add(NAVBAR_TITLE_1, tep_href_link(FILENAME_ACCOUNT, '', 'SSL'));
  $breadcrumb->add(NAVBAR_TITLE_2, tep_href_link(FILENAME_ADDRESS_BOOK, '', 'SSL'));

  require(DIR_WS_INCLUDES . 'header_new_design.php');
?>



<style>
.contentText, .contentText table {
    /* padding: 5px 0 5px 0; */
    font-size: 15px;
    line-height: 1.5;
}

p {
    font-family: "Times New Roman", Times, serif;
    color: ffffff;
    font-size: 17px;
    /* padding-left: 35px; */
}

.ui-widget {
    font-family: Lucida Grande, Lucida Sans, Arial, sans-serif;
    font-size: 1.1em;
    width: 50%;
}

.button2 {
    border-radius: 10px;
    padding-top: 0px;
}


.button224 {
        background-color: #0971dad4;
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 23px;
    cursor: pointer;
    width: 141px;
    height: 49px;
}


.button3 {
    border-radius: 10px;
    padding-top: 0px;
}


.button223 {
        background-color: #0971dad4;
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 23px;
    cursor: pointer;
    width: 206px;
    height: 49px;
}

.address-book-main{margin-top:100px;padding-top:50px;}
@media screen and (max-width:768px) {
	

.button224 {

    font-size: 19px;

    width: 102px;
    height: 34px;
}
	
	
.button223 {

    font-size: 19px;

    width: 160px;
    height: 34px;
}
}

</style>



<div class="container address-book-main" onmouseover="openCity(event, 'Hide');hide_cart_data()"><!-- deepak 4-1-2021 -->



<div class="row">

<div class="col-md-12"><h2 style=" height:26px;"><?php echo HEADING_TITLE; ?></h2></div>

</div>


<div class="row">

<div class="col-md-6">
 <h2><?php echo PRIMARY_ADDRESS_TITLE; ?></h2>
 
  <p><?php echo PRIMARY_ADDRESS_DESCRIPTION; ?></p>
</div>
<div class="col-md-6">

<div class="row">

<div class="col-md-6"><p><b><?php echo PRIMARY_ADDRESS_TITLE; ?></b></p><img src="images/arrow_south_east.gif" border="0" alt="" width="50" height="31"></div>
<div class="col-md-6"><p><?php echo tep_address_label($customer_id, $customer_default_address_id, true, ' ', '<br />'); ?></p></div>

</div>


</div>

</div>




<div class="row">

<div class="col-md-12"><h2><?php echo ADDRESS_BOOK_TITLE; ?></h2></div>

</div>



<?php
  $addresses_query = tep_db_query("select address_book_id, entry_firstname as firstname, entry_lastname as lastname, entry_company as company, entry_street_address as street_address, entry_suburb as suburb, entry_city as city, entry_postcode as postcode, entry_state as state, entry_zone_id as zone_id, entry_country_id as country_id from " . TABLE_ADDRESS_BOOK . " where customers_id = '" . (int)$customer_id . "' order by firstname, lastname");
  while ($addresses = tep_db_fetch_array($addresses_query)) {
    $format_id = tep_get_address_format_id($addresses['country_id']);
?>

<div class="row">

<div class="col-md-6">
 <p><strong><?php echo tep_output_string_protected($addresses['firstname'] . ' ' . $addresses['lastname']); ?></strong><?php if ($addresses['address_book_id'] == $customer_default_address_id) echo '&nbsp;<small><i>' . PRIMARY_ADDRESS . '</i></small>'; ?></p>
      <p style="padding-left: 20px;"><?php echo tep_address_format($format_id, $addresses, true, ' ', '<br />'); ?></p>
</div>
<div class="col-md-6">
 <span style="float: right;" class="edit_account"><?php echo '<a  class="btn btn-outline-dark" href="'.tep_href_link(FILENAME_ADDRESS_BOOK_PROCESS, 'edit=' . $addresses['address_book_id'], 'SSL').'">EDIT</a>'.' ' . '<a class="btn btn-outline-dark" href="'.tep_href_link(FILENAME_ADDRESS_BOOK_PROCESS, 'delete=' . $addresses['address_book_id'], 'SSL').'">DELETE</a>'; ?></span>
</div>

</div>


<?php
  }
?>


<div class="row">

<div class="col-md-12">
<br />
<table width="100%">
<tr>
<td width="60%;"><a href="<?php echo tep_href_link(FILENAME_ACCOUNT, '', 'SSL') ?>"><button class="btn btn-outline-dark">Back</button></a>
</td>
<td width="40%;">

<?php
  if (tep_count_customer_address_book_entries() < MAX_ADDRESS_BOOK_ENTRIES) {
?>

	<a href="<?php echo tep_href_link(FILENAME_ADDRESS_BOOK_PROCESS, '', 'SSL') ?>"><button class="btn btn-outline-dark">Add Address</button></a>


<?php
  }
?>

</td>
</tr>
</table>
<br />



</div>


</div>




<div class="row">

<div class="col-md-12"><p><?php echo sprintf(TEXT_MAXIMUM_ENTRIES, MAX_ADDRESS_BOOK_ENTRIES); ?></p></h2></div>

</div>






</div>








<?php
  require(DIR_WS_INCLUDES . 'footer_new_design.php');
?>
