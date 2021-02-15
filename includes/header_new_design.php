<?php
ini_set('session.cookie_httponly',1);
  ini_set('session.cookie_secure',1);
  
  ini_set('display_errors', 0);
	  $servername = DB_SERVER;
		$username = DB_SERVER_USERNAME;
		$password = DB_SERVER_PASSWORD;
		$dbname = DB_DATABASE;
    $connt = mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());
    if($cart->count_contents()>0){
      include('cart_data.php');
    }
    if($page_title=='')
    {
      $page_title='Sneeze Guard | Portable Sneezeguard - ADM Sneezeguards'; 
    }
    
    if($page_description=='')
    {
      $page_description='ADM Sneezeguards manufactures sneeze guard and food guard. Our sneeze guards and Portable Barrier are based on the latest innovative designs.';
    }
    if($page_keyword=='')
    {
      $page_keyword='Sneeze Guard, sneeze guard glass, Breath Guard, Portable Sneeze Guards, Sneezeguards, Restaurant Sneeze Guards';
    }
    $sel = mysqli_query($connt,"select * from insdeadm");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo$page_title ?></title>
<meta name="description" content="<?php echo$page_description ?>">
<meta name="keywords" content="<?php echo$page_keyword ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-1072651700"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-28436015-1', { 'optimize_id': 'GTM-5ZJRN8F'});
</script>
<script>
  gtag('event', 'conversion', {'send_to': 'AW-1072651700/Aj7aCLK3n60BELS7vf8D'});
</script>
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-1072651700/vBmHCIOlk60BELS7vf8D',
      'transaction_id': ''
  });
</script>
<?php
$ulsss=explode('?', $_SERVER["REQUEST_URI"], 2);
?>
<link rel="icon" href="images/favicon.ico" type="img/ioc">
<link rel="canonical" href="https://www.sneezeguard.com<?php echo $ulsss[0]; ?>">
<link rel="preconnect" href="https://www.sneezeguard.com">
<link rel="dns-prefetch" href="https://www.sneezeguard.com">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="msvalidate.01" content="A671AB7AE7F959666D7415258AF5DF66" />
<link rel="alternate" href="https://www.sneezeguard.com/" hreflang="en-US" />
<meta property="og:url" content="https://www.sneezeguard.com/"/>
<meta property="og:type" content="website"/>
<meta property="og:title" content="<?php echo$page_title ?>"/>
<meta property="og:description" content="<?php echo$page_description ?>" />
<meta property="og:image" content="https://www.sneezeguard.com/images/new_logo_main.png" />
<meta property="og:site_name" content="sneeze guard"/>
<meta property="fb:app_id" content="2368710130085474"/>
<meta name="twitter:card" content="summary"></meta>
<meta name="twitter:image" content="https://www.sneezeguard.com/images/new_logo_main.png"/>
<meta name="twitter:site" content="@ASneezeguards"/>
<meta name="twitter:url" content="https://twitter.com/ASneezeguards"/>
<meta name="twitter:description" content="<?php echo$page_description ?>"/>
<meta name="twitter:title" content="<?php echo$page_title ?>" />
<link rel="icon" href="images/favicon.ico" type="img/ico">
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-28436015-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-28436015-1', { 'optimize_id': 'GTM-5ZJRN8F'});
</script>
<link rel="alternate" type="application/rss+xml" title="ADM Sneezeguards - Catalog Feed" href="rss.php?language=en">



<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<script type="text/javascript" src="dist/html2canvas.js"></script>
<script type="text/javascript" src="dist/canvas2image.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<link href='node_modules/font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css' >
<!--<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" >-->
<script src="node_modules/jquery/dist/jquery.min.js" ></script>
<!--<script src="node_modules/bootstrap/dist/js/bootstrap.min.js" ></script>-->


<link rel="stylesheet" href="new-design/stylesheet.css" >
<script src="new-design/js/main-js-min.js" ></script>




</head>
<body>
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

<noscript><img height="1" width="1" alt="Sneeze Guard" id="noscripthead"
src="https://www.facebook.com/tr?id=1321434048059982&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


<div class="wrapper" >
<div class="top-header"  onmouseover="openCity(event, 'Hide');hide_cart_data();">
<a href="<?php echo tep_href_link('common.php')?>"><span>FAQS<span></a>

<?php
if (tep_session_is_registered('customer_id')) 
{ 
?>
<div class="sign-icon" onmouseover="show_myaccount_list();" onmouseout="hide_myaccount_list();"><p class="sign-icon-p"><b><i class="fa fa-user mt-2"></i><span class="myaccount">MY ACCOUNT</span></b></p></div>
<ul class="myaccount-menu"  onmouseover="show_myaccount_list();" onmouseout="hide_myaccount_list();">
<li><a href="<?php echo tep_href_link('account.php', '', 'SSL') ?>">MY PROFILE</a></li>
<li><a href="<?php echo tep_href_link('account_history.php', '', 'SSL') ?>">MY ORDER</a></li>
<li><a href="<?php echo tep_href_link('logoff.php', '', 'SSL') ?>">LOGOUT</a></li>
</ul>
<?php
}
else
{ 
?>
<div class="sign-icon"><a href="<?php echo tep_href_link('login.php', '', 'SSL') ?>" tabindex="0"> <b>SIGN IN</b></a></div>
<?php
}
?>

</div>
<div>
  <nav class="shadow-sm mb-5 bg-white">
    <a href="javascript:void(0);" class="icon" onclick="myFunctionsss()">
    <i class="fa fa-bars"></i>
  </a>
  <div class="left-icons"  onmouseover="openCity(event, 'Hide');hide_cart_data();">
    <a href="<?php  echo tep_href_link(FILENAME_DEFAULT); ?>"><h1><i>ADM Sneezeguards</i></h1></a>
  </div>
  <div class="right-icons">
  <ul>
  <li><a href="<?php echo tep_href_link('contact-us-sneeze-guard.php', '', 'SSL') ?>"><img alt="Contact Us" title="Contact Us" src="img/contact-black.png"  id="contact-icons" onmouseover="change_contact_img();hide_cart_data()"  onmouseout="change_contactblack_img();openCity(event, 'Hide');"></a></li>
   <li><a href="<?php echo tep_href_link('wishlist.php', '', 'SSL') ?>"><img alt="Wishlist" title="Wishlist" src="img/wishlist-black.png" id="wishlist-icons" onmouseover="change_wishlist_img();hide_cart_data()"  onmouseout="change_wishlistblack_img();openCity(event, 'Hide');"><span class="wishlist-count <?= ($wishlist->count_contents()>0)?"wishlistitem-block":"wishlistitem-none"?>" ><?php echo $wishlist->count_contents();?></span></a></li>
 
  
  <li><a href="<?php echo tep_href_link('shopping_cart1.php', '', 'SSL') ?>"><img alt="Shopping Cart" title="Shopping Cart" src="<?=($cart->count_contents()<=0)?"img/cart-black.png":"img/cart-red.png"?>" id="cart-icons" onmouseover="change_cart_img();show_cart_data();openCity(event, 'Hide')" onmouseout="change_cartblack_img();" class="tablinks" ></a><span class="cart-count <?= ($cart->count_contents()>0)?"cartitem-block":"cartitem-none"?>" ><?php echo $cart->count_contents();?></span></li>
    </ul>
  </div>
    <div class="topnav" id="myTopnav">
	<div class="option-mobile-header">
	<div class="close-nav-btn" onclick="closemobilepage()">X</div>
	<button class="tablinkss shopp" onclick="openPages('Shop', this, '#c61017')" id="defaultOpen">SHOP</button>
<button class="tablinkss insideadm insideadmmobile" onclick="openPages('Inside-ADM', this, '#555')" >INSIDE ADM</button>
</div>
	<div id="Shop" class="tabcontenthead">
	<a href="<?php  echo tep_href_link(FILENAME_DEFAULT); ?>"><span class="homelink" >HOME</span></a>
	  <div class="dropdown">
    <a class="dropbtn passover-dropbtn" data-model-name="EP5"><span class="tablinks" onmouseover="openCity(event, 'instock');hide_cart_data()">PASS-OVER</span>
      <i class="fa fa-caret-down"></i>
    </a>
    <div class="dropdown-content">
	 <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_72").''; ?>">EP5</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_122").''; ?>">EP5 Ring Adjusts</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_129").''; ?>">EP6</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_130").''; ?>">EP7</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_133").''; ?>">EP8</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_71").''; ?>">EP15</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_55").''; ?>">EP11</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_56").''; ?>">EP12</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_57").''; ?>">EP21</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_58").''; ?>">EP22</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_59").''; ?>">EP36</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_113").''; ?>">ED20</a>
    </div>
  </div> 
	  <div class="dropdown">
    <a class="dropbtn selfserve-dropbtn" data-model-name="ES29"><span class="tablinks" onmouseover="openCity(event, 'customss');hide_cart_data()">SELF-SERVE</span>
      <i class="fa fa-caret-down"></i>
    </a>
    <div class="dropdown-content">
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_114").''; ?>">ES29</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_61").''; ?>">ES31</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_62").''; ?>">ES40</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_110").''; ?>">ES53</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_63").''; ?>">ES67</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_64").''; ?>">ES73</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_111").''; ?>">ES82</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=126_124").''; ?>">ES47</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_123").''; ?>">ES90</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_125").''; ?>">ES92</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_80").''; ?>">B950</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_81").''; ?>">B950-SWIVEL</a>
	  <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_128").''; ?>">ORBIT360</a>
    </div>
  </div> 
	<div class="dropdown">
    <a class="dropbtn barrier-dropbtn" data-model-name="EP5"><span class="tablinks" onmouseover="openCity(event, 'adjustable');hide_cart_data()">BARRIER</span>
      <i class="fa fa-caret-down"></i>
    </a>
    <div class="dropdown-content">
       <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_72").''; ?>">EP5</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_122").''; ?>">EP5 Ring Adjusts</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_129").''; ?>">EP6</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_130").''; ?>">EP7</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_133").''; ?>">EP8</a>
    </div>
  </div> 
	<div class="dropdown">
    <a class="dropbtn portable-dropbtn" data-model-name="ALLIN1"><span class="tablinks" onmouseover="openCity(event, 'portable');hide_cart_data()">PORTABLE</span>
      <i class="fa fa-caret-down"></i>
    </a>
    <div class="dropdown-content">
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=85_117").''; ?>">ALLIN1</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=85_79").''; ?>">B950P-GLASS</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=85_70").''; ?>">EP950-ACRYLIC</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=85_131").''; ?>">ORBIT720</a>
    </div>
  </div> 
	<div class="dropdown">
    <a class="dropbtn addon-dropbtn" data-model-name="Light-Bar"><span class="tablinks" onmouseover="openCity(event, 'addons');hide_cart_data()">ADD-ON</span>
      <i class="fa fa-caret-down"></i>
    </a>
    <div class="dropdown-content">
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=88_121").''; ?>">Light Bar</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=88_118").''; ?>">Mid-Shelves</a>
      <a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=88_120").''; ?>">Heat Lamp</a>
    </div>
  </div> 
		<a ><span class="tablinks insideddadm" onmouseover="openCity(event, 'insideadm');hide_cart_data()">INSIDE <br />ADM</span></a></li>
		
       <a><span class="tablinks" onmouseover="openCity(event, 'Hide');hide_cart_data();hide_cart_data();"></span></a>
	 </div> 	 
<!-- 	/*vikram 15-10-2020 */ -->
	 
<div id="Inside-ADM" class="tabcontenthead">
<?php
$query_get_insideadm="SELECT * FROM `insdeadm`";
$exe_get_insideadm=mysqli_query($connt,$query_get_insideadm);
while($get_insideadm=mysqli_fetch_array($exe_get_insideadm))
{
$headingss=$get_insideadm['heading'];
$leftheadingss=$get_insideadm['leftheading'];
$contentss=$get_insideadm['content'];
$imagess=$get_insideadm['image'];
$urlss=$get_insideadm['url'];
$dividss=$get_insideadm['divid'];
?>
<div class="inside-adm-mobile-main text-center">
<a href="<?= tep_href_link($urlss,"class=".$dividss."");?>">
<div class="inside-adm-mobile-img inside-adm-mobile-img-<?=$dividss?>" data-class="<?=$dividss?>">

</div>
<div>
<h4 ><?=$leftheadingss; ?></h4>
<p><?=$contentss; ?>. 
<a href="<?= tep_href_link($urlss,"class=".$dividss."");?>">READ MORE</a>
</p>
</div>
</a>
</div>
<?php
}
?>
</div>
    </div>
  </nav>
  </div>
  <div id="cart-items-data" onmouseover="show_cart_data()" onmouseout="hide_cart_data();">
  <input type="hidden" id="cart-count-pre" value="<?=(isset($_SESSION['cart_count_pre'])?$_SESSION['cart_count_pre']:0)?>">
  <?php
      $cart_count_pre=$cart->count_contents();
      tep_session_register('cart_count_pre');
  ?>
  <input type="hidden" id="cart-count-post" value="<?=(isset($_SESSION['cart_count_pre'])?$_SESSION['cart_count_pre']:0)?>">
  <div class="cart-item-products">
  <div class="text-center p-2 cart-gif">
    <img src="img/cart-loader.gif" alt="" width="14%">
  </div>
  <div class="cart-products">
    <?php print_r($html);?>
  </div>
  <br>
  <p class="text-view-cart-all">VIEW CART TO SEE ALL ITEMS</p>
  </div>
  <div class="cart-item-subtotal">
  <div class="cart-subtotal-left">
    <br>
 <h3>SUBTOTAL</h3>
 <span>Taxes are calculated at checkout</span>
  </div>
  <div class="cart-subtotal-right"><strong><?=($cart->count_contents()>0)?"$&nbsp".number_format((float)$cart->show_total(), 2, '.', ''):'';?></strong></div>
  </div>
  <div class="cart-item-checkout">
  
  <a href="<?php echo tep_href_link('shopping_cart1.php', '', 'SSL') ?>"> <button>VIEW CART & CHECKOUT</button></a>
  </div>
  </div>
  <!-- vikram header drop down 03-12-2020 -->
<div class="tabcontent w-100 pt-1 headerslidercontainer" id="instock">
<div class="row" >
<div class="col-md-5">
<div class="row">
  <div class="col-md-5">
  <h3><b>PASS-OVER</b></h3>
      <ul>
      <li><a  data-buynows="<?=tep_href_link("product.php", "Model=EP5&cPath=84_72")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=86_72").''; ?>" id="EP5"  class="passoverlink"> EP5</a></li>
      <li><a  data-buynows="<?=tep_href_link("product.php", "Model=Ring-EP5&cPath=84_122")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=86_122").''; ?>"  id="Ring-EP5" class="passoverlink" >EP5 Ring Adjusts</a></li>
      <li><a  data-buynows="<?=tep_href_link("product.php", "Model=EP6&cPath=84_129")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=86_129").''; ?>" id="EP6" class="passoverlink" >EP6</a></li>
      <li><a  data-buynows="<?=tep_href_link("product_info.php", "Model=EP7&id=130")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=86_130").''; ?>" id="EP7" class="passoverlink" >EP7</a></li>
      <li><a  data-buynows="<?=tep_href_link("product_info.php", "Model=EP8&id=133")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=86_133").''; ?>" id="EP8" class="passoverlink" >EP8</a></li>
      <li><a  data-buynows="<?=tep_href_link("product.php", "Model=EP15&cPath=84_71")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=86_71").''; ?>" id="EP15" class="passoverlink" >EP15</a></li>
      <li><a  data-buynows="<?=tep_href_link("product.php", "Model=EP11&cPath=84_55")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=86_55").''; ?>" id="EP11" class="passoverlink" > EP11</a></li>
      <li><a  data-buynows="<?=tep_href_link("product.php", "Model=EP12&cPath=84_56")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=86_56").''; ?>" id="EP12" class="passoverlink" >EP12</a></li>
      <li><a  data-buynows="<?=tep_href_link("product.php", "Model=EP21&cPath=84_57")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=86_57").''; ?>" id="EP21" class="passoverlink" >EP21</a></li>
      <li><a  data-buynows="<?=tep_href_link("product.php", "Model=EP22&cPath=84_58")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=86_58").''; ?>" id="EP22" class="passoverlink" >EP22</a></li>
      <li><a  data-buynows="<?=tep_href_link("product.php", "Model=EP36&cPath=84_59")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=86_59").''; ?>" id="EP36" class="passoverlink" >EP36</a></li>
      <li><a  data-buynows="<?=tep_href_link("adjustable_product_newd.php", "Model=ED20&cPath=84_113")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=86_113").''; ?>" id="ED20" class="passoverlink" >ED20</a></li>
      </ul>
  </div>
  <div class="col-md-7">
      <p class="header-drop-heading font-weight-bold header-slider-heading" id="heading">EP5</p>
  </div>
  </div>
<?php
$query
?>


<input type="hidden" name="image_name" id="model-imagename">


  <div class="pl-4 p-2  text-center header-dropdow-btn">
      <a href="<?php echo tep_href_link(FILENAME_PRODUCT,"cPath=86_72"); ?>" id="passoverlernmore"><button class="btn btn-sm btn-dark">LEARN MORE</button></a>
      <a href="<?=tep_href_link("product.php", "Model=&cPath=84_72")?>" id="passoverbuynow"><button class="btn btn-sm btn-dark">SHOP NOW</button></a>
  </div> 
</div>
<div class="col-md-7 header-image-container">
  <div class="row pr-5 passover-header-slider-images">

  </div>

  <div class="carousel pr-5" data-ride="carousel"  data-interval="2000">
  <div class="carousel-inner slider-image-container passover-header-slider">

  </div>
   </div> 
</div>
<div class="footer-address-div fixed-bottom border-top p-2">
  <div class="row">
    <div class="col-md-3 col-sm-3 text-left pl-5">
      <img src="img/new-log1s.jpg" alt="buffet sneeze guard" title="glass sneeze guard kits" class="admimagefooter">
    </div>
    <div class="col-md-6 col-sm-6">
     <div class="footer-address-center text-center">

      <p class="footer-address-center-h4">Need help find the perfect sneeze guard ?
      <br />Call 800-690-0002</h4>
      
    </div>
    </div>
    <div class="col-md-3 col-sm-3 text-right pr-5">
      <img src="img/close.png" alt="glass sneeze guard kits" title="buffet sneeze guard" class="closeimage" onclick="openCity(event, 'Hide');hide_cart_data();">
    </div>
  </div>
</div>
</div>
</div>

<div id="customss" class="tabcontent w-100 pt-1 headerslidercontainer" id="instock">
<div class="row" >
<div class="col-md-5">
<div class="row">
  <div class="col-md-5">
  <h3><b>SELF-SERVE </b></h3>
  <ul>
  
  <li><a data-buynows="<?=tep_href_link("product.php", "Model=ES29&cPath=84_114")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=87_114").''; ?>" id="ES29" class="selfservelink">ES29</a></li>
  
  <li><a data-buynows="<?=tep_href_link("product.php", "Model=ES31&cPath=84_61")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=87_61").''; ?>" id="ES31" class="selfservelink">ES31</a></li>
  <li><a  data-buynows="<?=tep_href_link("product.php", "Model=ES40&cPath=84_62")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=87_62").''; ?>" id="ES40" class="selfservelink">ES40</a></li>
  <li><a  data-buynows="<?=tep_href_link("product.php", "Model=ES53&cPath=84_110")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=87_110").''; ?>" id="ES53" class="selfservelink">ES53</a></li>
  <li><a  data-buynows="<?=tep_href_link("product.php", "Model=ES67&cPath=84_63")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=87_63").''; ?>" id="ES67" class="selfservelink">ES67</a></li>
  <li><a  data-buynows="<?=tep_href_link("product.php", "Model=ES73&cPath=84_64")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=87_64").''; ?>" id="ES73" class="selfservelink">ES73</a></li>
  <li><a  data-buynows="<?=tep_href_link("product.php", "Model=ES82&cPath=84_111")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=87_111").''; ?>" id="ES82" class="selfservelink">ES82</a></li>
  <li><a  data-buynows="<?=tep_href_link("product.php", "Model=ES47&cPath=84_124")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=126_124").''; ?>" id="ES47" class="selfservelink">ES47</a></li>
  <li><a  data-buynows="<?=tep_href_link("product.php", "Model=ES90&cPath=84_123")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=87_123").''; ?>" id="ES90" class="selfservelink">ES90</a></li>
  <li><a  data-buynows="<?=tep_href_link("product.php", "Model=ES92&cPath=84_125")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=87_125").''; ?>" id="ES92" class="selfservelink">ES92</a></li>
  <li><a  data-buynows="<?=tep_href_link("product.php", "Model=B-950&cPath=84_80")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=87_80").''; ?>" id="B-950" class="selfservelink">B950</a></li>
  <li><a  data-buynows="<?=tep_href_link("product.php", "Model=B-950-SWIVEL&cPath=84_81")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=87_81").''; ?>" id="B-950-SWIVEL" class="selfservelink">B950-SWIVEL</a></li>
  <li><a  data-buynows="<?=tep_href_link("product.php", "Model=ORBIT360&cPath=87_128")?>"  id="ORBIT360" class="selfservelink" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=87_128").''; ?>">ORBIT360</a></li>
  </ul>
  </div>
  <div class="col-md-7">
      <p class="header-drop-heading font-weight-bold header-slider-heading" id="headingself">ES29</p>
  </div>
  </div>

  <div class="pl-4 p-2  text-center header-dropdow-btn">
      <a href="<?php echo tep_href_link(FILENAME_PRODUCT,"cPath=86_72"); ?>" id="selfservelernmore"><button class="btn btn-sm btn-dark">LEARN MORE</button></a>
      <a href="<?=tep_href_link("product.php", "Model=&cPath=84_72")?>" id="selfservebuynow"><button class="btn btn-sm btn-dark">SHOP NOW</button></a>
  </div> 
</div>
<div class="col-md-7 header-image-container">
  <div class="row pr-5 selfserve-header-slider-images">

  </div>

    <div class="carousel pr-5" data-ride="carousel"  data-interval="2000">
      <div class="carousel-inner slider-image-container selfserve-header-slider">

      </div>
    </div> 
</div>
<div class="footer-address-div fixed-bottom border-top p-2">
  <div class="row">
    <div class="col-md-3 col-sm-3 text-left pl-5">
      <img src="img/new-log1s.jpg" alt="buffet sneeze guard" title="glass sneeze guard kits" class="admimagefooter">
    </div>
    <div class="col-md-6 col-sm-6">
     <div class="footer-address-center text-center">

      <p class="footer-address-center-h4">Need help find the perfect sneeze guard ?
      <br />Call 800-690-0002</h4>
      
    </div>
    </div>
    <div class="col-md-3 col-sm-3 text-right pr-5">
      <img src="img/close.png" alt="glass sneeze guard kits" title="buffet sneeze guard" class="closeimage" onclick="openCity(event, 'Hide');hide_cart_data();">
    </div>
  </div>
</div>
</div>
</div>

<div id="adjustable" class="tabcontent w-100 pt-1 headerslidercontainer" id="instock">
<div class="row" >
<div class="col-md-5">
<div class="row">
  <div class="col-md-5">
  <h3><b>BARRIER</b></h3>
  <ul>
    <li><a  data-buynows="<?=tep_href_link("product.php", "Model=EP5&cPath=84_72")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=86_72").''; ?>" id="EP5"  class="barrierlink barrier-EP5"> EP5</a></li>
    <li><a  data-buynows="<?=tep_href_link("product.php", "Model=Ring-EP5&cPath=84_122")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=86_122").''; ?>"  id="Ring-EP5" class="barrierlink barrier-Ring-EP5" >EP5 Ring Adjusts</a></li>
    <li><a  data-buynows="<?=tep_href_link("product.php", "Model=EP6&cPath=84_129")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=86_129").''; ?>" id="EP6" class="barrierlink barrier-EP6" >EP6</a></li>
    <li><a  data-buynows="<?=tep_href_link("product_info.php", "Model=EP7&id=130")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=86_130").''; ?>" id="EP7" class="barrierlink barrier-EP7" >EP7</a></li>
    <li><a  data-buynows="<?=tep_href_link("product_info.php", "Model=EP8&id=133")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=86_133").''; ?>" id="EP8" class="barrierlink barrier-EP8" >EP8</a></li>
  </ul>
  </div>
  <div class="col-md-7">
      <p class="header-drop-heading font-weight-bold header-slider-heading-barrier" id="barrierheading">EP5</p>
  </div>
</div>

  <div class="pl-4 p-2  text-center header-dropdow-btn">
      <a href="<?php echo tep_href_link(FILENAME_PRODUCT,"cPath=86_72"); ?>" id="barrierlernmore"><button class="btn btn-sm btn-dark">LEARN MORE</button></a>
      <a href="<?=tep_href_link("product.php", "Model=&cPath=84_72")?>" id="barrierbuynow"><button class="btn btn-sm btn-dark">SHOP NOW</button></a>
  </div> 
</div>
<div class="col-md-7 header-image-container">
  <div class="row pr-5 barrier-header-slider-images">

  </div>

    <div class="carousel pr-5" data-ride="carousel"  data-interval="2000">
    <div class="carousel-inner slider-image-container barrier-header-slider">
    
    </div>
</div>
<div class="footer-address-div fixed-bottom border-top p-2">
  <div class="row">
    <div class="col-md-3 col-sm-3 text-left pl-5">
      <img src="img/new-log1s.jpg" alt="buffet sneeze guard" title="glass sneeze guard kits" class="admimagefooter">
    </div>
    <div class="col-md-6 col-sm-6">
     <div class="footer-address-center text-center">

      <p class="footer-address-center-h4">Need help find the perfect sneeze guard ?
      <br />Call 800-690-0002</h4>
      
    </div>
    </div>
    <div class="col-md-3 col-sm-3 text-right pr-5">
      <img src="img/close.png" alt="glass sneeze guard kits" title="buffet sneeze guard" class="closeimage" onclick="openCity(event, 'Hide');hide_cart_data();">
    </div>
  </div>
</div>
</div>
</div>
</div>

<div id="portable" class="tabcontent w-100 pt-1 headerslidercontainer" id="instock">
<div class="row" >
<div class="col-md-5">
<div class="row">
  <div class="col-md-5">
  <h3><b>PORTABLE </b></h3>
  <ul>
  <li><a  data-buynows="<?=tep_href_link("product_info.php", "Model=ALLIN1&id=117")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=85_117").''; ?>" id="ALLIN1" class="portableslink">ALLIN1</a></li>
  <li><a  data-buynows="<?=tep_href_link("product_info.php", "Model=B-950P-GLASS&id=79")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=85_79").''; ?>" id="B-950P-Glass" class="portableslink">B950P-GLASS</a></li>
  <li><a  data-buynows="<?=tep_href_link("product_info.php", "Model=EP-950-ACRYLIC&id=70")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=85_70").''; ?>" id="EP-950-ACRYLIC" class="portableslink">EP950-ACRYLIC</a></li>
  <li><a  data-buynows="<?=tep_href_link("product_info.php", "Model=ORBIT720&id=131")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=85_131").''; ?>"  id="ORBIT720" class="portableslink">ORBIT720</a></li>
  </ul>
  </div>
  <div class="col-md-7 header-image-container">
      <p class="header-drop-heading font-weight-bold header-slider-heading-portable" id="portableheading">ALLIN1</p>
  </div>
  </div>

  <div class="pl-4 p-2  text-center header-dropdow-btn">
      <a href="<?php echo tep_href_link(FILENAME_PRODUCT,"cPath=86_72"); ?>" id="portablelernmore"><button class="btn btn-sm btn-dark">LEARN MORE</button></a>
      <a href="<?=tep_href_link("product.php", "Model=&cPath=84_72")?>" id="portablebuynow"><button class="btn btn-sm btn-dark">SHOP NOW</button></a>
  </div> 
</div>
<div class="col-md-7 header-image-container">
  <div class="row pr-5 portable-header-slider-images">

  </div>

    <div class="carousel pr-5" data-ride="carousel"  data-interval="2000">
    <div class="carousel-inner slider-image-container portable-header-slider">
    
    </div>
    </div> 
</div>
<div class="footer-address-div fixed-bottom border-top p-2">
  <div class="row">
    <div class="col-md-3 col-sm-3 text-left pl-5">
      <img src="img/new-log1s.jpg" alt="buffet sneeze guard" title="glass sneeze guard kits" class="admimagefooter">
    </div>
    <div class="col-md-6 col-sm-6">
     <div class="footer-address-center text-center">

      <p class="footer-address-center-h4">Need help find the perfect sneeze guard ?
      <br />Call 800-690-0002</h4>
      
    </div>
    </div>
    <div class="col-md-3 col-sm-3 text-right pr-5">
      <img src="img/close.png" alt="glass sneeze guard kits" title="buffet sneeze guard" class="closeimage" onclick="openCity(event, 'Hide');hide_cart_data();">
    </div>
  </div>
</div>
</div>
</div>

<div id="addons" class="tabcontent w-100 pt-1 headerslidercontainer" id="instock">
<div class="row" >
<div class="col-md-5">
<div class="row">
  <div class="col-md-5">
  <h3><b>ADD-ON </b></h3>
    <ul>
    <li><a  data-buynows="<?=tep_href_link("product_info.php", "id=121&type=1BAY")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=88_121").''; ?>" id="Light-Bar" class="addonslink">Light Bar</a></li>
    <li><a  data-buynows="<?=tep_href_link("adjustable_product_newd.php", "Model=Mid-Shelves&cPath=84_118")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=88_118").''; ?>" id="Mid-Shelves" class="addonslink">Mid-Shelves</a></li>
    <li><a  data-buynows="<?=tep_href_link("product_info.php", "id=120&type=1BAY")?>" alt="<?php  echo''.tep_href_link(FILENAME_PRODUCT,"cPath=88_120").''; ?>" id="Heat-Lamp" class="addonslink">Heat Lamp</a></li>
	
	<li><a href="https://www.admglass.com" data-buynows="https://www.admglass.com" alt="https://www.admglass.com" id="Custom-Glass" class="addonslink">Custom Glass</a></li>
    </ul>
  </div>
  <div class="col-md-7">
      <p class="header-drop-heading font-weight-bold header-slider-heading-addon" id="addonsheading">Light Bar</p>
  </div>
  </div>

  <div class="pl-4 p-2  text-center header-dropdow-btn">
      <a href="<?php echo tep_href_link(FILENAME_PRODUCT,"cPath=86_72"); ?>" id="addonslernmore"><button class="btn btn-sm btn-dark">LEARN MORE</button></a>
      <a href="<?=tep_href_link("product.php", "Model=&cPath=84_72")?>" id="addonsbuynow"><button class="btn btn-sm btn-dark">SHOP NOW</button></a>
  </div> 
</div>
<div class="col-md-7 header-image-container">
  <div class="row pr-5 addon-header-slider-images">
    
  </div>

    <div class="carousel pr-5" data-ride="carousel"  data-interval="2000">
    <div class="carousel-inner slider-image-container addon-header-slider">

    </div>
    </div> 
</div>
<div class="footer-address-div fixed-bottom border-top p-2">
  <div class="row">
    <div class="col-md-3 col-sm-3 text-left pl-5">
      <img src="img/new-log1s.jpg" alt="buffet sneeze guard" title="glass sneeze guard kits" class="admimagefooter">
    </div>
    <div class="col-md-6 col-sm-6">
     <div class="footer-address-center text-center">

      <p class="footer-address-center-h4">Need help find the perfect sneeze guard ?
      <br />Call 800-690-0002</h4>
      
    </div>
    </div>
    <div class="col-md-3 col-sm-3 text-right pr-5">
      <img src="img/close.png" alt="glass sneeze guard kits" title="buffet sneeze guard" class="closeimage" onclick="openCity(event, 'Hide');hide_cart_data();">
    </div>
  </div>
</div>
</div>
</div>

<div id="insideadm" class="tabcontent" >
<div class="w-100">
<div class="insideadmleftdiv">
 <div >
  <ul>
    <?php
     $sel = mysqli_query($connt,"select * from insdeadm");
     while($result = mysqli_fetch_assoc($sel))
     {
       $class = strtolower($result['divid']);
       ?>
          <li><a href="<?= tep_href_link(''.$result["url"].'','class='.$class .'');?>" id="<?php echo strtolower($result['divid']); ?>" class="insideadmnav" data-class="<?php echo strtolower($result['divid']); ?>"><?php echo $result['leftheading'] ?></a></li>
       <?php
     }
    ?>
  
  </ul>
  </div></div>
 
  <?php
  
  $sel = mysqli_query($connt,"select * from insdeadm");
  while($result = mysqli_fetch_assoc($sel))
  {
    $class = strtolower($result['leftheading']);
    ?>
     <a href="<?= tep_href_link(''.$result["url"].'','class='.$class.'');?>" id="admlink">
      <div id="<?php echo $result['divid'].'div' ?>" class="admdata">
      <div class="insideadm-img">
      
      </div>
      <div class='insideadmtext'>
      <h5 id="insideadm-heading"><?php echo $result['heading'] ?></h5>
      <p id="insideadm-contanet"><?php echo $result['content'] ?></p>
      </div>
      </div>
      </a>
    <?php
  }
  ?>

  </div>  
<div class="footer-address-div fixed-bottom border-top p-2">
  <div class="row">
    <div class="col-md-3 col-sm-3 text-left pl-5">
      <img src="img/logo-new.png" alt="buffet sneeze guard" title="glass sneeze guard kits" class="admimagefooter">
    </div>
    <div class="col-md-6 col-sm-6">
     <div class="footer-address-center text-center">

      <p class="footer-address-center-h4">Need help find the perfect sneeze guard ?
      <br />Call 800-690-0002</h4>
      
    </div>
    </div>
    <div class="col-md-3 col-sm-3 text-right pr-5">
      <img src="img/close.png" alt="glass sneeze guard kits" title="buffet sneeze guard" class="closeimage" onclick="openCity(event, 'Hide');hide_cart_data();">
    </div>
  </div>
</div>
</div>
</div>
<input type="hidden" name="remote_ip" id="remote_ipss" value="<?=$_SERVER['REMOTE_ADDR'];?>">
<input type="hidden" name="customer_id" id="customer_idss" value="<?=$customer_id;?>">


<?php
$modelNameSql=mysqli_query($connt,'SELECT DISTINCT `model_name` FROM header_slider   ORDER BY `model_name` ASC ');
$modelName=array();
$headerSliderImages=array();
while($models=mysqli_fetch_assoc($modelNameSql)){
  array_push($modelName,$models['model_name']);
}
foreach($modelName as $models){
  $model_image_name='';
  $headerImageSql=mysqli_query($connt,'SELECT `image` FROM header_slider WHERE `status`="1" AND `model_name`="'.$models.'"  ORDER BY `id`  DESC');
  while($imageResult=mysqli_fetch_assoc($headerImageSql)){
    $model_image_name.=$imageResult['image'].',';
  }
  $model_image_name=rtrim($model_image_name,',');
  echo '<input type="hidden" class="'.$models.'-img" value="'.$model_image_name.'">';
}
?>