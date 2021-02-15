<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
  
  and this porject modifed and developed by Arisen Technologies 
  http://www.arisen.in
*/

ob_start();


  require('includes/application_top.php');

  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_PRODUCTS_NEW);

  $breadcrumb->add(NAVBAR_TITLE, tep_href_link(FILENAME_PRODUCTS_NEW));


/*
  require(DIR_WS_INCLUDES . 'template_top.php');
  

    $buffer=ob_get_contents();
    ob_end_clean();


$titlessss = 'ADM Sneezeguards - Sneeze Guard Product | Latest Sneezeguard';
$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $titlessss . '$3', $buffer);
$keyword = 'sneeze guard, sneeze guard Model, sneeze guard design, Latest sneeze guard, sneeze guard Manufacturer';
  //add anew desc and author
$buffer = str_replace('name="keywords" content="Sneeze Guard, sneeze guard glass, Portable Food Guards, Sneezeguards, Restaurant Supply Equipment"', 'name="keywords" content="'.$keyword.'"', $buffer);

echo $buffer;

*/





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
<title>ADM Sneezeguards - Sneeze Guard Product | Latest Sneezeguard</title>
<!-- End Google Add Conversion -->

<!-- End Google Add Conversion -->
<meta name="google-site-verification" content="qCniVCJ6BLGaxFIjLt_Le0HrCeDwZJAzR-UrXe-8poc" />
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET; ?>" />
<meta name="msvalidate.01" content="A671AB7AE7F959666D7415258AF5DF66" />
<meta name="viewport" content="width=device-width">
<!--<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">-->
<meta name="description" content="Check out our potable collection of commercial in-stock sneeze guard for your business with fast delivery and affordable price. Order online.">
<meta name="keywords" content="sneeze guard, sneeze guard Model, sneeze guard design, Latest sneeze guard, sneeze guard Manufacturer">
<base href="<?php echo (($request_type == 'SSL') ? HTTPS_SERVER : HTTP_SERVER) . DIR_WS_CATALOG; ?>" />
<script type="text/javascript" src="jquery-latest.js"></script>
<script type="text/javascript" src="thickbox.js"></script>

<link rel="icon" href="images/favicon.ico" type="img/ioc">
<link rel="canonical" href="https://www.sneezeguard.com<?php echo $_SERVER['REQUEST_URI']; ?>">
<link rel="stylesheet" type="text/css" href="ext/jquery/ui/redmond/jquery-ui-1.8.6.css" />
<script type="text/javascript" src="ext/jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="ext/jquery/ui/jquery-ui-1.8.6.min.js"></script>



<meta property="og:url" content="https://www.sneezeguard.com/<?php echo $_SERVER['REQUEST_URI']; ?>"/>
<meta property="og:type" content="website"/>
<meta property="og:title" content="Sneeze Guard Portable | Glass Barrier - ADM Sneezeguards"/>
<meta property="og:description" content="ADM Sneezeguards manufactures for the food service industry, we offer industry standard sneeze guards with latest innovative designs." />
<meta property="og:image" content="https://www.sneezeguard.com/images/new_logo_main.png" />
<meta property="og:site_name" content="sneeze guard"/>
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




<?php
  
  mysql_connect(DB_SERVER,DB_SERVER_USERNAME,DB_SERVER_PASSWORD);
	 mysql_select_db(DB_DATABASE); 
	 $ImageData=mysql_query("SELECT * FROM  product_video WHERE publish='1'") or die(mysql_error());
	 
	
?>
 
 <?php
  if (!$detect->isMobile())
{
	//echo'<td id="ex1" align=center width="190" valign="top">';
}
else{
	echo'<td id="ex1" align=center width="190" valign="top">';

}

?>
<h1><?php //echo HEADING_TITLE; ?></h1>

<div class="contentContainer">
  <div class="contentText">

<?php
  $products_new_array = array();

  $products_new_query_raw = "select p.products_id, pd.products_name, p.products_image, p.products_price, p.products_tax_class_id, p.products_date_added, m.manufacturers_name from " . TABLE_PRODUCTS . " p left join " . TABLE_MANUFACTURERS . " m on (p.manufacturers_id = m.manufacturers_id), " . TABLE_PRODUCTS_DESCRIPTION . " pd where p.products_status = '1' and p.products_id = pd.products_id and pd.language_id = '" . (int)$languages_id . "' order by p.products_date_added DESC, pd.products_name";
  $products_new_split = new splitPageResults($products_new_query_raw, MAX_DISPLAY_PRODUCTS_NEW);

  if (($products_new_split->number_of_rows > 0) && ((PREV_NEXT_BAR_LOCATION == '1') || (PREV_NEXT_BAR_LOCATION == '3'))) {
?>

    <div>
      <span style="float: right;"><?php echo TEXT_RESULT_PAGE . ' ' . $products_new_split->display_links(MAX_DISPLAY_PAGE_LINKS, tep_get_all_get_params(array('page', 'info', 'x', 'y'))); ?></span>

      <span><?php echo $products_new_split->display_count(TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW); ?></span>
    </div>

    <br />

<?php
  }
?>

<?php
  if ($products_new_split->number_of_rows > 0) {
?>

   

	<table>
		<tr>
			<td align="center"><br /></td>
		</tr>
		<tr>
			<td align="center"><br /></td>
		</tr>
		<tr>
			<td align="center"><br /></td>
		</tr>
		
			 
			 
			<?php
			if (!$detect->isMobile())
			{
			?>
<tr>			
			 <?php


	   //echo $Data['modalname'];
	  
	  while($Data=mysql_fetch_array($ImageData))
	  {
	?>
	    
      
 <a  href="demo3.php?name=<?php echo  $Data['uploadid'];?>&KeepThis=true&TB_iframe=true&height=480&width=640&modelname=<?php echo$Data['modelname'] ?>" class="thickbox">
   <img alt="sneeze guard" title="sneeze guard for office" src="sneezegaurd/productvideo/images/<?php echo $Data['imagename'];?>" border="0"   style="padding:6px;"  />
 </a>
	   
	<?   }
	

	  ?> 
	  </tr>
	  <?php
			}
			else{
	   ?>
	   
	   
	   <?php


	    //echo $Data['modalname'];
	  
	  while($Data=mysql_fetch_array($ImageData))
	  {
	?>
	    
      <tr><td>
  <a  href="demo3.php?name=<?php echo  $Data['uploadid'];?>&KeepThis=true&TB_iframe=true&height=780&width=740&modelname=<?php echo$Data['modelname'] ?>" class="thickbox">
   <img alt="sneeze guard" title="sneeze guard for office" src="sneezegaurd/productvideo/images/<?php echo $Data['imagename'];?>" border="0"   style="padding:6px;width: 459px;"  />
 </a>
 </td>
	</tr>   
	<?   }
	

	  ?>
	   
	   
	   <style>
	   #TB_window{
    margin-left: -482px !important;
    width: 957px !important;
    margin-top: -594px !important;
    display: block;
}
#TB_iframeContent {
    
    width: 952px !important;
    height: 793px !important;
}

#TB_closeWindowButton img{
	
	    width: 50px;
}

	   </style>
	 


	    <?
			}
			?>
	  
	  
		
		
		<tr>
		
			<td align="center"><h1 style="color: #292727;">Sneeze Guard | New Product Model Design</h1><br /></td>
		</tr>
			
			<td align="center"><br /></td>
		</tr>
		<tr>
			<td align="center"><br /></td>
		</tr>
		<tr>
			<td align="center"><br /></td>
		</tr>
		<tr>
			<td align="center"><br /></td>
		</tr>
		<tr>
			<td align="center"><br /></td>
		</tr>
		<tr>
			<td align="center"><br /></td>
		</tr>
		
		<tr>
			<!--<td align="center"><h1 style="font-size:16px;">REVOLUTION&trade; Series - (COMING SOON)</h1></td>-->
		</tr>
		
		<tr>
			<td align="center"><br /></td>
		</tr>
		<tr>
			<td align="center"><br /></td>
		</tr>
		<tr>
			<td align="center"><br /></td>
		</tr>
	</table>

<?php
  } else {
?>

    <div>
      <?php echo TEXT_NO_NEW_PRODUCTS; ?>
    </div>

<?php
  }

  if (($products_new_split->number_of_rows > 0) && ((PREV_NEXT_BAR_LOCATION == '2') || (PREV_NEXT_BAR_LOCATION == '3'))) {
?>

    <!--br />

    <div>
      <span style="float: right;"><?php echo TEXT_RESULT_PAGE . ' ' . $products_new_split->display_links(MAX_DISPLAY_PAGE_LINKS, tep_get_all_get_params(array('page', 'info', 'x', 'y'))); ?></span>

      <span><?php echo $products_new_split->display_count(TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW); ?></span>
    </div-->

<?php
  }
?>

  </div>
</div>

<?php
  require(DIR_WS_INCLUDES . 'template_bottom.php');
  require(DIR_WS_INCLUDES . 'application_bottom.php');
?>
