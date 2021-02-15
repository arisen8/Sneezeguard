<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/
?>

<!-- bodyContent //-->

<?php
$file = $_SERVER["SCRIPT_NAME"];
$break = Explode('/', $file);
$pfile = $break[count($break) - 1]; 
$os = array("index.php", "common.php", "contact_us.php",  "term.php");


  if ($oscTemplate->hasBlocks('boxes_column_left')) 
	  {
	  if($_REQUEST['cPath']!="")
		{

?>


<?php
}
  }
?>

<?php 
require_once("Mobile_Detect.php");
        $detect = new Mobile_Detect();
		
		$check= basename($_SERVER['PHP_SELF']);
        if($detect->isMobile() || $detect->isTablet())
		{
 			//if($check=='login.php'||$check=='checkout_shipping.php'||$check=='checkout_payment.php'||$check=='account.php'||$check=='checkout_payment_address.php' ||$check=='checkout_confirmation.php'||$check=='checkout_success.php'||$check=='create_account.php'||$check=='create_account_success.php'||$check=='checkout_shipping_address.php'||$check=='account_edit.php'||$check=='address_book.php' ||$check=='address_book_process.php'||$check=='account_password.php' ||$check=='account_history.php'||$check=='account_history_info.php'||$check=='account_newsletters.php'||$check=='account_notifications.php'){
			//}else{
				 require(DIR_WS_INCLUDES . 'footer.php'); 
			//}

       }
	   else
	   {
	   		
				 require(DIR_WS_INCLUDES . 'footer.php');  
			
	   }
 
 ?>

<?php echo $oscTemplate->getBlocks('footer_scripts'); ?>

</body>
</html>
