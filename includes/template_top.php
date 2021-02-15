<?php    
   
    
?>
<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  $oscTemplate->buildBlocks();

  if (!$oscTemplate->hasBlocks('boxes_column_left')) {
    $oscTemplate->setGridContentWidth($oscTemplate->getGridContentWidth() + $oscTemplate->getGridColumnWidth());
  }

  if (!$oscTemplate->hasBlocks('boxes_column_right')) {
    $oscTemplate->setGridContentWidth($oscTemplate->getGridContentWidth() + $oscTemplate->getGridColumnWidth());
  }
?>


<?php


//exploit the path
setcookie('key', 'value', time()+(7*24*3600), "/; SameSite=None; Secure");


?>


<!-- RSS Feed Strat -->
<?php
	  if (!isset($lng) || (isset($lng) && !is_object($lng))) {
	    include_once(DIR_WS_CLASSES . 'language.php');
	    $lng = new language;
	  }

	  reset($lng->catalog_languages);
	  while (list($key, $value) = each($lng->catalog_languages)) {
	?>
	<link rel="alternate" type="application/rss+xml" title="<?php echo STORE_NAME . ' - ' . BOX_INFORMATION_RSS; ?>" href="<?php echo FILENAME_RSS, '?language=' . $key;  ?>">
	<?php
	  }
	?>
