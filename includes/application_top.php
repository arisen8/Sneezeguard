<?php

header('Set-Cookie: HttpOnly; SameSite=None;Secure');
ini_set('session.cookie_httponly',1);
  ini_set('session.cookie_secure',1);
/*
$myippp=$_SERVER['REMOTE_ADDR'];
// echo'<h1>Website Under Maintinance</h1>';
// die;


if($myippp=='103.97.137.237'){
	// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);
}
else{
echo'<h1>Website Under Maintinance</h1>';
die;
}
*/

require("cart_functions.php");

/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2008 osCommerce

  Released under the GNU General Public License
*/








function compress_output($output) 
{ 
// We can perform additional manipulation on $output here, such  
// as stripping whitespace, etc. 
    return gzencode($output); 
} 

// Check if the browser supports gzip encoding, HTTP_ACCEPT_ENCODING 
if (strstr($HTTP_SERVER_VARS['HTTP_ACCEPT_ENCODING'], 'gzip')) {
 
// Start output buffering, and register compress_output() (see  
// below) 
ob_start("compress_output"); 

// Tell the browser the content is compressed with gzip 
header("Content-Encoding: gzip"); 
} 





define('FILENAME_HTTP_ERROR', 'http_error.php');
ini_set('register_long_arrays', 'On');

$HTTP_GET_VARS = $_GET;
$HTTP_SERVER_VARS = $_SERVER;
$HTTP_POST_VARS = $_POST;
$HTTP_COOKIE_VARS = $_COOKIE;

if(isset($_GET["id"]) && $_GET["id"]!=""){
  
 if(!ctype_digit($_GET["id"])){
		die("invalid request");
 }
 }
	if(strpos($_SERVER['QUERY_STRING'],"esneezeg_new_sneezeguard")!==false){
			die("not allowed");
	}
		if(strpos($_SERVER['QUERY_STRING'],"passwd")!==false){
			die("not allowed");
	}
		if(strpos($_SERVER['QUERY_STRING'],"union")!==false){
			die("not allowed");
	}
foreach($_GET as $get){
if(strlen($get)>180){
	

		die("invalid request");
}
}

// start the timer for the page parse time log
$add_to_wish = false;
$add_to_wish_cart = false;
$finalArrayAdded = false;
  define('PAGE_PARSE_START_TIME', microtime());
    define("ENCRYPTION_KEY_EMAIL", "ADM!@#$%^&*vIHAS1234");
function encrypt_email($pure_string, $encryption_key) {
    $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $encrypted_string = base64_encode(mcrypt_encrypt(MCRYPT_BLOWFISH, $encryption_key, utf8_encode($pure_string), MCRYPT_MODE_ECB, $iv));

	//	 if (strpos($encrypted_string, '"') !== false) {
	//encrypt_email($pure_string, $encryption_key);
	//}
    return $encrypted_string;
}
function decrypt_email($encrypted_string, $encryption_key) {
	$encrypted_string = base64_decode($encrypted_string);
    $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $decrypted_string = trim(mcrypt_decrypt(MCRYPT_BLOWFISH, $encryption_key, $encrypted_string, MCRYPT_MODE_ECB, $iv));
    return $decrypted_string;
}
// set the level of error reporting
  error_reporting(E_ALL & ~E_NOTICE);

// check support for register_globals
  if (function_exists('ini_get') && (ini_get('register_globals') == false) && (PHP_VERSION < 4.3) ) {
    exit('Server Requirement Error: register_globals is disabled in your PHP configuration. This can be enabled in your php.ini configuration file or in the .htaccess file in your catalog directory. Please use PHP 4.3+ if register_globals cannot be enabled on the server.');
  }

// load server configuration parameters
  if (file_exists('includes/local/configure.php')) { // for developers
    include('includes/local/configure.php');
  } else {
    include('includes/configure.php');
  }

  if (strlen(DB_SERVER) < 1) {
    if (is_dir('install')) {
      header('Location: install/index.php');
    }
  }

// define the project version --- obsolete, now retrieved with tep_get_version()
  define('PROJECT_VERSION', 'osCommerce Online Merchant v2.3');

// some code to solve compatibility issues
  require(DIR_WS_FUNCTIONS . 'compatibility.php');

// set the type of request (secure or not)
  $request_type = (getenv('HTTPS') == 'on') ? 'SSL' : 'NONSSL';

// set php_self in the local scope
  $PHP_SELF = (((strlen(ini_get('cgi.fix_pathinfo')) > 0) && ((bool)ini_get('cgi.fix_pathinfo') == false)) || !isset($HTTP_SERVER_VARS['SCRIPT_NAME'])) ? basename($HTTP_SERVER_VARS['PHP_SELF']) : basename($HTTP_SERVER_VARS['SCRIPT_NAME']);



 // Security Pro by FWR Media
  include_once DIR_WS_MODULES . 'fwr_media_security_pro.php';
  $security_pro = new Fwr_Media_Security_Pro;
  // If you need to exclude a file from cleansing then you can add it like below
  //$security_pro->addExclusion( 'some_file.php' );
   
 if(strpos($_SERVER['REQUEST_URI'],'wishlist.php') !== false || strpos($_SERVER['REQUEST_URI'],'shopping_cart1.php') !== false || strpos($_SERVER['REQUEST_URI'],'shopping_cart.php') !== false)
 {
	
 }
 else{

	 $security_pro->cleanse( $PHP_SELF );
 }
 
  // End - Security Pro by FWR Media



  if ($request_type == 'NONSSL') {
    define('DIR_WS_CATALOG', DIR_WS_HTTP_CATALOG);
  } else {
    define('DIR_WS_CATALOG', DIR_WS_HTTPS_CATALOG);
  }

// include the list of project filenames
  require(DIR_WS_INCLUDES . 'filenames.php');

// include the list of project database tables
  require(DIR_WS_INCLUDES . 'database_tables.php');

// include the database functions
  require(DIR_WS_FUNCTIONS . 'database.php');

// make a connection to the database... now
  tep_db_connect() or die('Unable to connect to database server!');


//for permanent
 $check_ip_per = mysql_num_rows(mysql_query("select * from ip_block_permanent where ib_ip='{$_SERVER['REMOTE_ADDR']}'"));
  if($check_ip_per>0){
	  
	  die("Blocked");
  }



 $check_ip = mysql_num_rows(mysql_query("select * from ip_block where ib_ip='{$_SERVER['REMOTE_ADDR']}'"));
  if($check_ip>0){
	  
	  die("Blocked");
  }
// set the application parameters
  $configuration_query = tep_db_query('select configuration_key as cfgKey, configuration_value as cfgValue from ' . TABLE_CONFIGURATION);
  while ($configuration = tep_db_fetch_array($configuration_query)) {
    define($configuration['cfgKey'], $configuration['cfgValue']);
  }

/*
// if gzip_compression is enabled, start to buffer the output
  if ( (GZIP_COMPRESSION == 'true') && ($ext_zlib_loaded = extension_loaded('zlib')) && (PHP_VERSION >= '4') ) {
    if (($ini_zlib_output_compression = (int)ini_get('zlib.output_compression')) < 1) {
      if (PHP_VERSION >= '4.0.4') {
        ob_start('ob_gzhandler');
      } else {
        include(DIR_WS_FUNCTIONS . 'gzip_compression.php');
        ob_start();
        ob_implicit_flush();
      }
    } else {
      ini_set('zlib.output_compression_level', GZIP_LEVEL);
    }
  }*/


// echo'<h1>Website Under Maintinance</h1>';
// die;
// set the HTTP GET parameters manually if search_engine_friendly_urls is enabled
  if (SEARCH_ENGINE_FRIENDLY_URLS == 'true') {
    if (strlen(getenv('PATH_INFO')) > 1) {
      $GET_array = array();
      $PHP_SELF = str_replace(getenv('PATH_INFO'), '', $PHP_SELF);
      $vars = explode('/', substr(getenv('PATH_INFO'), 1));
      do_magic_quotes_gpc($vars);
      for ($i=0, $n=sizeof($vars); $i<$n; $i++) {
        if (strpos($vars[$i], '[]')) {
          $GET_array[substr($vars[$i], 0, -2)][] = $vars[$i+1];
        } else {
          $HTTP_GET_VARS[$vars[$i]] = $vars[$i+1];
        }
        $i++;
      }

      if (sizeof($GET_array) > 0) {
        while (list($key, $value) = each($GET_array)) {
          $HTTP_GET_VARS[$key] = $value;
        }
      }
    }
  }

// define general functions used application-wide
  require(DIR_WS_FUNCTIONS . 'general.php');
  require(DIR_WS_FUNCTIONS . 'html_output.php');

// set the cookie domain
  $cookie_domain = (($request_type == 'NONSSL') ? HTTP_COOKIE_DOMAIN : HTTPS_COOKIE_DOMAIN);
  $cookie_path = (($request_type == 'NONSSL') ? HTTP_COOKIE_PATH : HTTPS_COOKIE_PATH);

// include cache functions if enabled
  if (USE_CACHE == 'true') include(DIR_WS_FUNCTIONS . 'cache.php');

// include shopping cart class
  require(DIR_WS_CLASSES . 'shopping_cart.php');
  
// include wishlist class
  require(DIR_WS_CLASSES . 'wishlist.php');

// include navigation history class
  require(DIR_WS_CLASSES . 'navigation_history.php');

// define how the session functions will be used
  require(DIR_WS_FUNCTIONS . 'sessions.php');

// set the session name and save path


  tep_session_name('osCsid');
  //comment following line when make it online
  //$_REQUEST['osCsid']='69d9f9ae8ae8201b0f33e2b8df692fd2';
  
	 //comment following line when make it offline
 // $_REQUEST['osCsid']=bin2hex(mcrypt_create_iv(22, MCRYPT_DEV_URANDOM));
	
  tep_session_save_path(SESSION_WRITE_DIRECTORY);

// set the session cookie parameters
   if (function_exists('session_set_cookie_params')) {
    session_set_cookie_params(0, $cookie_path, $cookie_domain);
  } elseif (function_exists('ini_set')) {
    ini_set('session.cookie_lifetime', '0');
    ini_set('session.cookie_path', $cookie_path);
    ini_set('session.cookie_domain', $cookie_domain);
  }

  @ini_set('session.use_only_cookies', (SESSION_FORCE_COOKIE_USE == 'True') ? 1 : 0);

// set the session ID if it exists
   if (isset($HTTP_POST_VARS[tep_session_name()])) {
     tep_session_id($HTTP_POST_VARS[tep_session_name()]);
   } elseif ( ($request_type == 'SSL') && isset($HTTP_GET_VARS[tep_session_name()]) ) {
     tep_session_id($HTTP_GET_VARS[tep_session_name()]);
   }

// start the session
	
  
  $session_started = false;
  if (SESSION_FORCE_COOKIE_USE == 'True') {
	  
    tep_setcookie('cookie_test', 'please_accept_for_session', time()+60*60*24*30, $cookie_path, $cookie_domain);

    if (isset($HTTP_COOKIE_VARS['cookie_test'])) {
      tep_session_start();
      $session_started = true;
    }
  } elseif (SESSION_BLOCK_SPIDERS == 'True') {
    $user_agent = strtolower(getenv('HTTP_USER_AGENT'));
    $spider_flag = false;

    if (tep_not_null($user_agent)) {
		
      $spiders = file(DIR_WS_INCLUDES . 'spiders.txt');

      for ($i=0, $n=sizeof($spiders); $i<$n; $i++) {
        if (tep_not_null($spiders[$i])) {
          if (is_integer(strpos($user_agent, trim($spiders[$i])))) {
            $spider_flag = true;

            break;
          }
        }
      }
    }

    if ($spider_flag == false) {
      tep_session_start();
      $session_started = true;
    }
  } else {
    tep_session_start();
    $session_started = true;
  }
 
  if ( ($session_started == true) && (PHP_VERSION >= 4.3) && function_exists('ini_get') && (ini_get('register_globals') == false) ) {
    extract($_SESSION, EXTR_OVERWRITE+EXTR_REFS);
  }

// initialize a session token
  if (!tep_session_is_registered('sessiontoken')) {
    $sessiontoken = md5(tep_rand() . tep_rand() . tep_rand() . tep_rand());
    tep_session_register('sessiontoken');
  }

// set SID once, even if empty
  $SID = (defined('SID') ? SID : '');

// verify the ssl_session_id if the feature is enabled
  if ( ($request_type == 'SSL') && (SESSION_CHECK_SSL_SESSION_ID == 'True') && (ENABLE_SSL == true) && ($session_started == true) ) {
    $ssl_session_id = getenv('SSL_SESSION_ID');
    if (!tep_session_is_registered('SSL_SESSION_ID')) {
      $SESSION_SSL_ID = $ssl_session_id;
      tep_session_register('SESSION_SSL_ID');
    }

    if ($SESSION_SSL_ID != $ssl_session_id) {
      tep_session_destroy();
      tep_redirect(tep_href_link(FILENAME_SSL_CHECK));
    }
  }

// verify the browser user agent if the feature is enabled
  if (SESSION_CHECK_USER_AGENT == 'True') {
    $http_user_agent = getenv('HTTP_USER_AGENT');
    if (!tep_session_is_registered('SESSION_USER_AGENT')) {
      $SESSION_USER_AGENT = $http_user_agent;
      tep_session_register('SESSION_USER_AGENT');
    }

    if ($SESSION_USER_AGENT != $http_user_agent) {
      tep_session_destroy();
      tep_redirect(tep_href_link(FILENAME_LOGIN));
    }
  }

// verify the IP address if the feature is enabled
  if (SESSION_CHECK_IP_ADDRESS == 'True') {
    $ip_address = tep_get_ip_address();
    if (!tep_session_is_registered('SESSION_IP_ADDRESS')) {
      $SESSION_IP_ADDRESS = $ip_address;
      tep_session_register('SESSION_IP_ADDRESS');
    }

    if ($SESSION_IP_ADDRESS != $ip_address) {
      tep_session_destroy();
      tep_redirect(tep_href_link(FILENAME_LOGIN));
    }
  }

// create the shopping cart
  if (!tep_session_is_registered('cart') || !is_object($cart)) {
    tep_session_register('cart');
    $cart = new shoppingCart;
  }

// create the wishlist
  if (!tep_session_is_registered('wishlist') || !is_object($wishlist)) {
    tep_session_register('wishlist');
    $wishlist = new wishlist;
  }
  
// include currencies class and create an instance
  require(DIR_WS_CLASSES . 'currencies.php');
  $currencies = new currencies();

// include the mail classes
  require(DIR_WS_CLASSES . 'mime.php');
  require(DIR_WS_CLASSES . 'email.php');

// set the language
$HTTP_GET_VARS['language'] = "english";
  if (!tep_session_is_registered('language') || isset($HTTP_GET_VARS['language'])) {
    if (!tep_session_is_registered('language')) {
      tep_session_register('language');
      tep_session_register('languages_id');
    }

    include(DIR_WS_CLASSES . 'language.php');
    $lng = new language();

    if (isset($HTTP_GET_VARS['language']) && tep_not_null($HTTP_GET_VARS['language'])) {
      $lng->set_language($HTTP_GET_VARS['language']);
    } else {
      $lng->get_browser_language();
    }

    $language = $lng->language['directory'];
    $languages_id = $lng->language['id'];
  }

// include the language translations
  require(DIR_WS_LANGUAGES . $language . '.php');

// currency
  if (!tep_session_is_registered('currency') || isset($HTTP_GET_VARS['currency']) || ( (USE_DEFAULT_LANGUAGE_CURRENCY == 'true') && (LANGUAGE_CURRENCY != $currency) ) ) {
    if (!tep_session_is_registered('currency')) tep_session_register('currency');

    if (isset($HTTP_GET_VARS['currency']) && $currencies->is_set($HTTP_GET_VARS['currency'])) {
      $currency = $HTTP_GET_VARS['currency'];
    } else {
      $currency = ((USE_DEFAULT_LANGUAGE_CURRENCY == 'true') && $currencies->is_set(LANGUAGE_CURRENCY)) ? LANGUAGE_CURRENCY : DEFAULT_CURRENCY;
    }
  }

// navigation history
  if (!tep_session_is_registered('navigation') || !is_object($navigation)) {
    tep_session_register('navigation');
    $navigation = new navigationHistory;
  }
  $navigation->add_current_page();

// action recorder
  include('includes/classes/action_recorder.php');

// Shopping cart actions
  if (isset($HTTP_GET_VARS['action'])) {
// redirect the customer to a friendly cookie-must-be-enabled page if cookies are disabled
    if ($session_started == false) {
      tep_redirect(tep_href_link(FILENAME_COOKIE_USAGE));
    }

    if (DISPLAY_CART == 'true') {
      $goto =  FILENAME_SHOPPING_CART;
      $parameters = array('action', 'cPath', 'products_id', 'pid');
    } else {
      $goto = basename($PHP_SELF);
      if ($HTTP_GET_VARS['action'] == 'buy_now') {
        $parameters = array('action', 'pid', 'products_id');
      } else {
        $parameters = array('action', 'pid');
      }
    }
    switch ($HTTP_GET_VARS['action']) {
	
	
      // customer wants to update the product quantity in their shopping cart
      case 'update_product' : 
	  
	
	  
	  for ($i=0, $n=sizeof($HTTP_POST_VARS['products_id']); $i<$n; $i++) {
                                if (in_array($HTTP_POST_VARS['products_id'][$i], (is_array($HTTP_POST_VARS['cart_delete']) ? $HTTP_POST_VARS['cart_delete'] : array()))) {
                                  $cart->remove($HTTP_POST_VARS['products_id'][$i]);
                                } else {
                                  $attributes = ($HTTP_POST_VARS['id'][$HTTP_POST_VARS['products_id'][$i]]) ? $HTTP_POST_VARS['id'][$HTTP_POST_VARS['products_id'][$i]] : '';
                                  //$cart->add_cart($HTTP_POST_VARS['products_id'][$i], $HTTP_POST_VARS['cart_quantity'][$i], $attributes, false);
                                }
								
								
								
								
                              }
							  /*ani code for custom update in cart*/
								$i=0;
								$k=0;
								$checkupdate=1;
								$ch=false;
								$_SESSION['product_custom']=array();
								if(isset($HTTP_POST_VARS['products_id1'])){
								foreach($HTTP_POST_VARS['products_id1'] as $p_ids){
								$cusomvall=$HTTP_POST_VARS['custom_val'][$i];
								// echo'<b style="color:red;">p_ids=='.$p_ids.'/// vall=='.stripslashes($cusomvall).'/// qty==';
								// print_r($HTTP_POST_VARS['cart_quantity1'][$i]);
								// echo'</b><br />';
								//$cart->add_cart($p_ids, $cart->get_quantity(tep_get_uprid($HTTP_POST_VARS['cart_quantity1'][$i], $attributes))+1, $attributes,stripslashes($cusomvall),$HTTP_POST_VARS['cart_quantity1'][$i],$HTTP_POST_VARS['custom_type'][$i],$HTTP_POST_VARS['frosted_type'][$i],$HTTP_POST_VARS['wt'][$i], $checkupdate, false);
								
								$attributes = ($HTTP_POST_VARS['id'][$HTTP_POST_VARS['products_id1'][$i]]) ? $HTTP_POST_VARS['id'][$HTTP_POST_VARS['products_id1'][$i]] : '';	
								
								$cart->add_cart($p_ids, $cart->get_quantity(tep_get_uprid($p_ids, $attributes))+1, $attributes,stripslashes($cusomvall),$HTTP_POST_VARS['cart_quantity1'][$i],$HTTP_POST_VARS['custom_type'][$i],$HTTP_POST_VARS['frosted_type'][$i],$HTTP_POST_VARS['banner_colors'][$i],$HTTP_POST_VARS['banner_height'][$i],$HTTP_POST_VARS['wt'][$i],$checkupdate,$i); 		
										
								
									for($j=1;$j<=$HTTP_POST_VARS['cart_quantity1'][$i];$j++){
										if($HTTP_POST_VARS['custom_type'][$i]=='Yes'){
											$ch=true;
										}
									 	//echo $p_ids."   ".stripslashes($HTTP_POST_VARS['custom_val'][$i])." ".$HTTP_POST_VARS['custom_type'][$i];
									 	
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>stripslashes($HTTP_POST_VARS['custom_val'][$i]),'qty'=>1,'custom'=>$HTTP_POST_VARS['custom_type'][$i],'frosted'=>$HTTP_POST_VARS['frosted_type'][$i],'wt'=>$HTTP_POST_VARS['wt'][$i],'banner_color'=>$HTTP_POST_VARS['banner_colors'][$i],'banner_height'=>$HTTP_POST_VARS['banner_heights'][$i]);
										
										//$cart->add_cart($p_ids, $HTTP_POST_VARS['cart_quantity1'][$i], $attributes, false);
										
										
										$k++;	
										
										
										
									}
									
									
									
									$i++;
								}
								}else{
								
									foreach($HTTP_POST_VARS['products_id'] as $p_ids){
								
								$cusomvall=$HTTP_POST_VARS['custom_val'][$i];
										//$cart->add_cart($p_ids, $cart->get_quantity(tep_get_uprid($HTTP_POST_VARS['cart_quantity1'][$i], $attributes))+1, $attributes,stripslashes($cusomvall),$HTTP_POST_VARS['cart_quantity'][$i],$HTTP_POST_VARS['custom_type'][$i],$HTTP_POST_VARS['frosted_type'][$i],$HTTP_POST_VARS['wt'][$i], $checkupdate, false);
										
										//working
										//$cart->add_cart($p_ids, $cart->get_quantity(tep_get_uprid($p_ids, $attributes))+1, $attributes,stripslashes($cusomvall),$HTTP_POST_VARS['cart_quantity'][$i],$HTTP_POST_VARS['custom_type'][$i],$HTTP_POST_VARS['frosted_type'][$i],$HTTP_POST_VARS['wt'][$i],$checkupdate,$i); 	
										
									for($j=1;$j<=$HTTP_POST_VARS['cart_quantity'][$i];$j++){
										if($HTTP_POST_VARS['custom_type'][$i]=='Yes'){
											$ch=true;
										}
									 	//echo $p_ids."   ".stripslashes($HTTP_POST_VARS['custom_val'][$i])." ".$HTTP_POST_VARS['custom_type'][$i];
									 	
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>stripslashes($HTTP_POST_VARS['custom_val'][$i]),'qty'=>1,'custom'=>$HTTP_POST_VARS['custom_type'][$i],'frosted'=>$HTTP_POST_VARS['frosted_type'][$i],'banner_color'=>$HTTP_POST_VARS['banner_colors'][$i],'banner_height'=>$HTTP_POST_VARS['banner_heights'][$i]);
										
										
										$k++;	
									}
									$i++;
								}
								
								}
								//calCulateQuantity($_SESSION['product_custom'],$customer_id);
						
							// echo'<b style="color:red"><pre>';
								// print_r($_SESSION['product_custom']); 
								
								// echo'</b>';
//								exit;
								
								/*ani code*/
							
							 	 $goto='shopping_cart.php';
							
                              tep_redirect(tep_href_link($goto, tep_get_all_get_params($parameters)));
                              break;
      // customer adds a product from the products page     
       case 'add_wishlist_to_cart' : 
	   
	   
        if (tep_has_product_attributes($HTTP_GET_VARS['products_id'])) {
            if(!(isset($HTTP_POST_VARS['id']) && !empty($HTTP_POST_VARS['id']))) {
                tep_redirect(tep_href_link(FILENAME_PRODUCT_INFO1, 'products_id=' . $HTTP_GET_VARS['products_id']));
            } 
        }
		$kk=0;
		$customvalsssarray=array();
        if(is_array($HTTP_POST_VARS['products_id'])){
			
          foreach($HTTP_POST_VARS['products_id'] as $pk => $productId) {
            $customdata = json_decode(stripslashes($HTTP_POST_VARS['data_custom'][$pk]), true);
            foreach($wishlist->finalArray as $arr) {
              if($arr['id'] == $productId && trim($arr['val']) == trim($customdata['custom']) && $arr['model_name'] == $customdata['model_name'] && $arr['model_type'] == $customdata['model_type']) {
                $_SESSION['product_custom'][] = $arr;
				$customvalsssarray = $arr;
				//echo'<b style="color:red"><pre>'; print_r($arr); echo'</b><br />';
				  $attributes = '';  
				$cart->add_cart($productId, $cart->get_quantity(tep_get_uprid($productId, $attributes))+1, $attributes,$arr['val'],1,$arr['custom'],$arr['frosted'],$arr['wt'],$kk);
              }
            }
			$kk++;
          } 
          calCulateQuantity($_SESSION['product_custom'],$customer_id);
		// echo'<b style="color:red;"><pre>'; print_r($HTTP_POST_VARS['products_id']); echo'</b>';
		   
		  // echo'<b style="color:red;"><pre>Complete model';echo'</b>';
		  	 
          foreach($HTTP_POST_VARS['products_id'] as $p_ids) {
            $attributes = '';            
            //$cart->add_cart($p_ids, $cart->get_quantity(tep_get_uprid($p_ids, $attributes))+1, $attributes);
			$customdatasss = json_decode(stripslashes($HTTP_POST_VARS['data_custom'][$p_ids]), true);
		
          }
        } else {
			//echo'<b style="color:red"><pre>'; print_r($HTTP_GET_VARS); echo'</b><br />';
          $attributes = isset($HTTP_POST_VARS['id']) ? $HTTP_POST_VARS['id'] : '';          
          $id = isset($HTTP_POST_VARS['products_id']) ?  $HTTP_POST_VARS['products_id'] : $HTTP_GET_VARS['products_id'];
          $customdata = json_decode(stripslashes($HTTP_POST_VARS['data_custom']), true);
          if(isset($HTTP_POST_VARS['products_qty'])) {
            $qty =  $cart->get_quantity(tep_get_uprid($id , $attributes)) + $HTTP_GET_VARS['products_qty'];
          } else if ($HTTP_GET_VARS['products_qty']) {
            $qty = $cart->get_quantity(tep_get_uprid($id , $attributes)) + $HTTP_POST_VARS['products_qty'];
          } else {
            $qty = $cart->get_quantity(tep_get_uprid($id , $attributes))+1;
          }
          if(isset($_POST['id'])) {
            foreach($_POST['id'] as $key=>$val){
              $id.="{".$key."}".$val;
            }
          }
          $i = 0;
		  
          while($i < $HTTP_POST_VARS['products_qty']) {
            foreach($wishlist->finalArray as $arr) {
				
				$newid=$arr['id'];
				$checkdid=''.$id.'{';
				
				
				if(strpos($arr['id'],$checkdid) !== false){
				//	echo'<b style="color:red;"><pre>'; print_r($arr['id']); echo'</b>';
				//echo'<b style="color:red;"><pre>'; print_r($id); echo'</b>';
				if($arr['id'] == $newid && trim($arr['val']) == trim($customdata['custom']) && $arr['model_name'] == $customdata['model_name'] && $arr['model_type'] == $customdata['model_type']) {
                $_SESSION['product_custom'][] = $arr;
				
				echo'<b style="color:red;">'; print_r($arr); echo'</b>';
				//$cart->add_cart($id,  $qty, $attributes);
				$cart->add_cart($id, $cart->get_quantity(tep_get_uprid($id, $attributes))+1, $attributes,$arr['val'],1,$arr['custom'],$arr['frosted'],$arr['wt'],$i);
				//echo'<b style="color:red;">val'.$customdata['custom'].''; echo'</b>';
				//echo'<b style="color:red;">'; print_r($arr); echo'</b>';
				
              }
				
				
				}
				else{
				
				if($arr['id'] == $id && trim($arr['val']) == trim($customdata['custom']) && $arr['model_name'] == $customdata['model_name'] && $arr['model_type'] == $customdata['model_type']) {
                $_SESSION['product_custom'][] = $arr;
				
				echo'<b style="color:red;">'; print_r($arr); echo'</b>';
				//$cart->add_cart($id,  $qty, $attributes);
				$cart->add_cart($id, $cart->get_quantity(tep_get_uprid($id, $attributes))+1, $attributes,$arr['val'],1,$arr['custom'],$arr['frosted'],$arr['wt'],$i);
				//echo'<b style="color:red;">val'.$customdata['custom'].''; echo'</b>';
				//echo'<b style="color:red;">'; print_r($arr); echo'</b>';
				
              }
				
				}
				
              
			  
			  
			  
			  
			  
			  
            }
            $i++;
          }
		 
          calCulateQuantity($_SESSION['product_custom'],$customer_id);
 //echo'<b style="color:red;"><pre>'; print_r($customdata); echo'</b>';
          //
        }
		
		// echo'<b style="color:red;"><pre>'; print_r($wishlist->finalArray); echo'</b>';
        tep_redirect(tep_href_link("shopping_cart1.php"));
      break;
	  
	  
	  
      case 'add_wishlist' :
        if (tep_has_product_attributes($HTTP_GET_VARS['products_id'])) {
            if(!(isset($HTTP_POST_VARS['id']) && !empty($HTTP_POST_VARS['id']))) {
                tep_redirect(tep_href_link(FILENAME_PRODUCT_INFO1, 'products_id=' . $HTTP_GET_VARS['products_id']));
            } 
        }
        $add_to_wish = true;       
        $wishlist->model_name = 'Parts';
        $wishlist->model_type = 'List';
        if(isset($HTTP_POST_VARS['product_type'])) {
          $wishlist->model_name = $HTTP_POST_VARS['product_type'];
          $wishlist->model_type = $HTTP_POST_VARS['type'];
        }
        if(isset($HTTP_GET_VARS['prodetatil'])) {         
          $arr = json_decode(stripslashes($HTTP_GET_VARS['prodetatil']), true);
          $wishlist->addFinalArray($arr);
          $finalArrayAdded = true;
          $wishlist->add_wishlist($HTTP_GET_VARS['products_id'], (isset($HTTP_GET_VARS['products_qty'])  ? $HTTP_GET_VARS['products_qty'] : 1), "Parts", "List", array($arr['val']), $arr);
          tep_redirect(tep_href_link("wishlist.php"));
        }
        
      case 'add_product' : 	 
	  if(is_array($HTTP_POST_VARS['products_id'])){
          					// ani code
			$wishlist2->model_name = $HTTP_POST_VARS['product_type'];
          $wishlist2->model_type = $HTTP_POST_VARS['type'];				
							
							if($HTTP_POST_VARS['add_more_bay']==1)
							{
							$_SESSION['check_add_more']	=1;	
							if((($HTTP_POST_VARS['is_custom']=='Yes'&&$HTTP_POST_VARS['is_custom']!=''&& $HTTP_POST_VARS['product_type']!=''))||isset($_SESSION['product_custom'])){
								
								//$HTTP_POST_VARS['cpath_val']
								//$HTTP_POST_VARS['product_type']
							//$goto='shopping_cart1.php';
							$goto='product.php?Model='.$HTTP_POST_VARS['product_type'].'&cPath='.$HTTP_POST_VARS['cpath_val'].'&add_more_bay=1';
							
							}
							//$goto='shopping_cart1.php';	
							$goto='product.php?Model='.$HTTP_POST_VARS['product_type'].'&cPath='.$HTTP_POST_VARS['cpath_val'].'&add_more_bay=1';	
							}
							else{
							$_SESSION['check_add_more']	=1;	
							
							if((($HTTP_POST_VARS['is_custom']=='Yes'&&$HTTP_POST_VARS['is_custom']!=''&& $HTTP_POST_VARS['product_type']!=''))||isset($_SESSION['product_custom'])){
							$goto='shopping_cart1.php';
							}
							$goto='shopping_cart1.php';	
							
							
							}
							
							
							
							
							
								if($cart->count_contents()<=0){
									unset($_SESSION['product_custom']);
								}
								if(empty($_SESSION['product_custom'])){
									$_SESSION['product_custom']=array();
									$k=0;
								}else{
									   $k=sizeof( $_SESSION['product_custom']);
								}
								
                $new_k = $k;

								/* for ep 82 there are 2 galasses for same face so declearing variables for that */
								$glassa=false;
								$glassb=false;
								$glassc=false;
								$glassd=false;
								$glassmakea=false;
								$glassmakeb=false;
								$glassmakec=false;
								$glassmaked=false;
								/* fro ed 20 shelevs */
								$nosheleves=$HTTP_POST_VARS['shelves'];
								$start_top_glassa=0;
								$start_top_glassb=0;
								$start_top_glassc=0;
								$start_top_glassd=0;
								
								foreach($HTTP_POST_VARS['products_id'] as $p_ids) {
								  $isglass=false;	


								

								  
								  // for ep5 custom product
								  if($HTTP_POST_VARS['product_type']=='EP5'){
									   if($HTTP_POST_VARS['rostedglass_val']!='' || $HTTP_POST_VARS['rostedglass_id']!=''){
									       $_SESSION['roastedglass']=$HTTP_POST_VARS['rostedglass_val'];
                        $_SESSION['roastedglass_id']=$HTTP_POST_VARS['rostedglass_id'];									
									   }
									   if(($HTTP_POST_VARS['c_glass_face']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_face_val']==''){
										      tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_face'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_face_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_mult']);									
											   $k++; unset($HTTP_POST_VARS['c_glass_face']);$isglass=true;
									   }	
									   if(($HTTP_POST_VARS['c_glass_right']!='')&&($isglass==false)){
									      if($HTTP_POST_VARS['c_glass_right_val']==''){
										      tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_right'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_right_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_right_mult']);									
											   $k++; 
											   unset($HTTP_POST_VARS['c_glass_right']);$isglass=true;
								     }
									   if(($HTTP_POST_VARS['c_glass_left']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_left_val']==''){
										      tep_session_destroy();
										    }
											 $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_left'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_left_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_left_mult']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_left']);$isglass=true;
									   }	
									   if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_a_val']==''){
										      tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_a_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_a_mult']);									
											     $k++;unset($HTTP_POST_VARS['c_glass_a']);$isglass=true; 
								     }	
									   if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_b_val']==''){
										      tep_session_destroy();
										    }
											 $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_b_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_b_mult']);									
											   $k++;unset($HTTP_POST_VARS['c_glass_b']); $isglass=true;
								     }
									   if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)){
								        if($HTTP_POST_VARS['c_glass_c_val']==''){
									         tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_c_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_c_mult']);									
											   $k++;unset($HTTP_POST_VARS['c_glass_c']);$isglass=true; 
									   }	
                     if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_d_val']==''){
									       tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_d_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_d_mult']);									
											     $k++;unset($HTTP_POST_VARS['c_glass_d']);$isglass=true; 
							       }
                     if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++; unset($HTTP_POST_VARS['c_glass_b_light']);
  											 $isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_light'])){
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++; unset($HTTP_POST_VARS['c_glass_c_light']);
  											 $isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_light'])){
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++; unset($HTTP_POST_VARS['c_glass_d_light']);
  											 $isglass=true; 
  									}
									
												
						
					
					if($HTTP_POST_VARS['c_glass_face_val']!='')
					{
					$faca_mailbox_cutout_val=$HTTP_POST_VARS['c_glass_face_val'];
					}
					else
					{
					$faca_mailbox_cutout_val=$HTTP_POST_VARS['c_glass_a_val'];	
					}
					

								
					 if(($HTTP_POST_VARS['c_glass_a_maibox_cut']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_maibox_cut'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_maibox_cut'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$faca_mailbox_cutout_val." ".$HTTP_POST_VARS['c_glass_a_val_maibox_cut']." LOCATION A",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_maibox_cut']);
											 $isglass=true; 
  									}			   
								   
								   
									   
					 if(($HTTP_POST_VARS['c_glass_b_maibox_cut']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_maibox_cut'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_maibox_cut'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_b_val']." ".$HTTP_POST_VARS['c_glass_b_val_maibox_cut']." LOCATION B",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b_maibox_cut']);
											 $isglass=true; 
  									}		   
								   
					
									   
					 if(($HTTP_POST_VARS['c_glass_c_maibox_cut']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_maibox_cut'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_maibox_cut'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_c_val']." ".$HTTP_POST_VARS['c_glass_c_val_maibox_cut']." LOCATION C",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c_maibox_cut']);
											 $isglass=true; 
  									}		   
								   
					
									   
					 if(($HTTP_POST_VARS['c_glass_d_maibox_cut']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_maibox_cut'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_maibox_cut'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_d_val']." ".$HTTP_POST_VARS['c_glass_d_val_maibox_cut']." LOCATION D",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d_maibox_cut']);
											 $isglass=true; 
  									}		   
						
									
									
									if(($HTTP_POST_VARS['c_glass_adjustable_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_a'])){
  									
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_a'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_a_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_a']);$isglass=true; 
  									}
  									if(($HTTP_POST_VARS['c_glass_adjustable_b']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_b'])){
  									
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_b'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_b_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_b']);$isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_adjustable_c']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_c'])){
  									
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_c'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_c_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_c']);$isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_adjustable_d']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_d'])){
  									
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_d'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_d_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_d']);$isglass=true; 
  									}
  									if($isglass==false){
  										
  										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
  										$k++;
  									}
									
								}
								
								//Ring-EP5 
								
								if($HTTP_POST_VARS['product_type']=='Ring-EP5'){
									   if($HTTP_POST_VARS['rostedglass_val']!='' || $HTTP_POST_VARS['rostedglass_id']!=''){
									       $_SESSION['roastedglass']=$HTTP_POST_VARS['rostedglass_val'];
                        $_SESSION['roastedglass_id']=$HTTP_POST_VARS['rostedglass_id'];									
									   }
									   if(($HTTP_POST_VARS['c_glass_face']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_face_val']==''){
										      tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_face'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_face_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_mult']);									
											   $k++; unset($HTTP_POST_VARS['c_glass_face']);$isglass=true;
									   }	
									   if(($HTTP_POST_VARS['c_glass_right']!='')&&($isglass==false)){
									      if($HTTP_POST_VARS['c_glass_right_val']==''){
										      tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_right'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_right_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_right_mult']);									
											   $k++; 
											   unset($HTTP_POST_VARS['c_glass_right']);$isglass=true;
								     }
									   if(($HTTP_POST_VARS['c_glass_left']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_left_val']==''){
										      tep_session_destroy();
										    }
											 $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_left'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_left_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_left_mult']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_left']);$isglass=true;
									   }	
									   if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_a_val']==''){
										      tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_a_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_a_mult']);									
											     $k++;unset($HTTP_POST_VARS['c_glass_a']);$isglass=true; 
								     }	
									   if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_b_val']==''){
										      tep_session_destroy();
										    }
											 $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_b_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_b_mult']);									
											   $k++;unset($HTTP_POST_VARS['c_glass_b']); $isglass=true;
								     }
									   if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)){
								        if($HTTP_POST_VARS['c_glass_c_val']==''){
									         tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_c_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_c_mult']);									
											   $k++;unset($HTTP_POST_VARS['c_glass_c']);$isglass=true; 
									   }	
                     if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_d_val']==''){
									       tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_d_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_d_mult']);									
											     $k++;unset($HTTP_POST_VARS['c_glass_d']);$isglass=true; 
							       }
								   
							
					if($HTTP_POST_VARS['c_glass_face_val']!='')
					{
					$faca_mailbox_cutout_val=$HTTP_POST_VARS['c_glass_face_val'];
					}
					else
					{
					$faca_mailbox_cutout_val=$HTTP_POST_VARS['c_glass_a_val'];	
					}
					

								
					 if(($HTTP_POST_VARS['c_glass_a_maibox_cut']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_maibox_cut'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_maibox_cut'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$faca_mailbox_cutout_val." ".$HTTP_POST_VARS['c_glass_a_val_maibox_cut']." LOCATION A",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_maibox_cut']);
											 $isglass=true; 
  									}			   
								   
								   
									   
					 if(($HTTP_POST_VARS['c_glass_b_maibox_cut']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_maibox_cut'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_maibox_cut'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_b_val']." ".$HTTP_POST_VARS['c_glass_b_val_maibox_cut']." LOCATION B",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b_maibox_cut']);
											 $isglass=true; 
  									}		   
								   
					
									   
					 if(($HTTP_POST_VARS['c_glass_c_maibox_cut']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_maibox_cut'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_maibox_cut'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_c_val']." ".$HTTP_POST_VARS['c_glass_c_val_maibox_cut']." LOCATION C",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c_maibox_cut']);
											 $isglass=true; 
  									}		   
								   
					
									   
					 if(($HTTP_POST_VARS['c_glass_d_maibox_cut']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_maibox_cut'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_maibox_cut'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_d_val']." ".$HTTP_POST_VARS['c_glass_d_val_maibox_cut']." LOCATION D",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d_maibox_cut']);
											 $isglass=true; 
  									}		   
						
								   
								   
								   
                     if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++; unset($HTTP_POST_VARS['c_glass_b_light']);
  											 $isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_light'])){
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++; unset($HTTP_POST_VARS['c_glass_c_light']);
  											 $isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_light'])){
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++; unset($HTTP_POST_VARS['c_glass_d_light']);
  											 $isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_adjustable_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_a'])){
  									
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_a'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_a_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_a']);$isglass=true; 
  									}
  									if(($HTTP_POST_VARS['c_glass_adjustable_b']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_b'])){
  									
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_b'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_b_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_b']);$isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_adjustable_c']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_c'])){
  									
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_c'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_c_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_c']);$isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_adjustable_d']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_d'])){
  									
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_d'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_d_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_d']);$isglass=true; 
  									}
  									if($isglass==false){
  										
  										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
  										$k++;
  									}
									
								}
								//for ep15 custom product
								if($HTTP_POST_VARS['product_type']=='EP15'){
									   if($HTTP_POST_VARS['rostedglass_val']!='' || $HTTP_POST_VARS['rostedglass_id']!=''){
									       $_SESSION['roastedglass']=$HTTP_POST_VARS['rostedglass_val'];
                        $_SESSION['roastedglass_id']=$HTTP_POST_VARS['rostedglass_id'];									
									   }
									   
									   //corner post
									if(($HTTP_POST_VARS['post_type_val']!='')){
									$_SESSION['posttypeval']=$HTTP_POST_VARS['post_type_val'];
										
											
									}
									
									//corner post
									if(($HTTP_POST_VARS['post_degree_val']!='')){
									$_SESSION['postdegreeval']=$HTTP_POST_VARS['post_degree_val'];
										
											
									}
									   if(($HTTP_POST_VARS['c_glass_face']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_face_val']==''){
										      tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_face'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_face_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_mult']);									
											   $k++; unset($HTTP_POST_VARS['c_glass_face']);$isglass=true;
									   }	
									   if(($HTTP_POST_VARS['c_glass_right']!='')&&($isglass==false)){
									      if($HTTP_POST_VARS['c_glass_right_val']==''){
										      tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_right'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_right_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_right_mult']);									
											   $k++; 
											   unset($HTTP_POST_VARS['c_glass_right']);$isglass=true;
								     }
									   if(($HTTP_POST_VARS['c_glass_left']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_left_val']==''){
										      tep_session_destroy();
										    }
											 $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_left'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_left_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_left_mult']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_left']);$isglass=true;
									   }	
									   if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_a_val']==''){
										      tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_a_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_a_mult']);									
											     $k++;unset($HTTP_POST_VARS['c_glass_a']);$isglass=true; 
								     }	
									   if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_b_val']==''){
										      tep_session_destroy();
										    }
											 $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_b_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_b_mult']);									
											   $k++;unset($HTTP_POST_VARS['c_glass_b']); $isglass=true;
								     }
									   if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)){
								        if($HTTP_POST_VARS['c_glass_c_val']==''){
									         tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_c_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_c_mult']);									
											   $k++;unset($HTTP_POST_VARS['c_glass_c']);$isglass=true; 
									   }	
                     if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_d_val']==''){
									       tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_d_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_d_mult']);									
											     $k++;unset($HTTP_POST_VARS['c_glass_d']);$isglass=true; 
							       }
                     if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++; unset($HTTP_POST_VARS['c_glass_b_light']);
  											 $isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_light'])){
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++; unset($HTTP_POST_VARS['c_glass_c_light']);
  											 $isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_light'])){
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++; unset($HTTP_POST_VARS['c_glass_d_light']);
  											 $isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_adjustable_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_a'])){
  									
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_a'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_a_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_a']);$isglass=true; 
  									}
  									if(($HTTP_POST_VARS['c_glass_adjustable_b']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_b'])){
  									
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_b'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_b_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_b']);$isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_adjustable_c']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_c'])){
  									
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_c'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_c_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_c']);$isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_adjustable_d']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_d'])){
  									
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_d'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_d_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_d']);$isglass=true; 
  									}
  									if($isglass==false){
  										
  										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
  										$k++;
  									}
									
								}
								//for ep21 custom product
								if($HTTP_POST_VARS['product_type']=='EP21'){
									
									
									
									
                  //left end panel and right end panel
                  if(($HTTP_POST_VARS['c_glass_right_val_ep21']!='')){
                        if($HTTP_POST_VARS['c_glass_right_val_ep21']==''){
                          tep_session_destroy();
                        }
                      $_SESSION['rightendpanelval_ep21']=$HTTP_POST_VARS['c_glass_right_val_ep21'];
                     }
                     if(($HTTP_POST_VARS['c_glass_left_val_ep21']!='')){
                       if($HTTP_POST_VARS['c_glass_left_val_ep21']==''){
                          tep_session_destroy();
                        }
                      $_SESSION['leftendpanelval_ep21']=$HTTP_POST_VARS['c_glass_left_val_ep21'];
                     }
                  
                  
                  
                  
									
									
									//corner post
									if(($HTTP_POST_VARS['post_type_val']!='')){
									$_SESSION['posttypeval']=$HTTP_POST_VARS['post_type_val'];
										
											
									}
									
									//corner post
									if(($HTTP_POST_VARS['post_degree_val']!='')){
									$_SESSION['postdegreeval']=$HTTP_POST_VARS['post_degree_val'];
										
											
									}
									
									if(($HTTP_POST_VARS['c_glass_face']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_face_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_face'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_face_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_face']);$isglass=true;
									}
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_a_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_a_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_a']);$isglass=true; 
									}	
									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_b_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_b_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_b']); $isglass=true;
									}
									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_c_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_c_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_c']);$isglass=true; 
									}	
									if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_d_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_d_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_d']);$isglass=true; 
									}	if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d_light']);
											 $isglass=true; 
									}	if(($HTTP_POST_VARS['c_glass_adjustable_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_a'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_a'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_a_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_a']);$isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_adjustable_b']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_b'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_b'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_b_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_b']);$isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_adjustable_c']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_c'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_c'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_c_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_c']);$isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_adjustable_d']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_d'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_d'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_d_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_d']);$isglass=true; 
									}
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}	
									
								}
								//for ep22 custom product
								if($HTTP_POST_VARS['product_type']=='EP22'){
									
									
									
									
												
                  //left end panel and right end panel
                  if(($HTTP_POST_VARS['c_glass_right_val_ep22']!='')){
                        if($HTTP_POST_VARS['c_glass_right_val_ep22']==''){
                          tep_session_destroy();
                        }
                      $_SESSION['rightendpanelval_ep22']=$HTTP_POST_VARS['c_glass_right_val_ep22'];
                     }
                     if(($HTTP_POST_VARS['c_glass_left_val_ep22']!='')){
                       if($HTTP_POST_VARS['c_glass_left_val_ep22']==''){
                          tep_session_destroy();
                        }
                      $_SESSION['leftendpanelval_ep22']=$HTTP_POST_VARS['c_glass_left_val_ep22'];
                     }
                  
									
									
									
									
									
									
									
									
									//corner post
									if(($HTTP_POST_VARS['post_type_val']!='')){
									$_SESSION['posttypeval']=$HTTP_POST_VARS['post_type_val'];
										
											
									}
									
									//corner post
									if(($HTTP_POST_VARS['post_degree_val']!='')){
									$_SESSION['postdegreeval']=$HTTP_POST_VARS['post_degree_val'];
										
											
									}
									
									if(($HTTP_POST_VARS['c_glass_face']!='')&&($isglass==false)){
									 if($HTTP_POST_VARS['c_glass_face_val']==''){
										      
									
										tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_face'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_face_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_face']);$isglass=true;
									}
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)){
							          if($HTTP_POST_VARS['c_glass_a_val']==''){
										      tep_session_destroy();
										
										                      }
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_a_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_a']);$isglass=true; 
									}	
									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)){
									         if($HTTP_POST_VARS['c_glass_b_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_b_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_b']); $isglass=true;
									}
									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_c_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_c_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_c']);$isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_d_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_d_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_d']);$isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
										
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d_light']);
											 $isglass=true; 
									}
									
									if(($HTTP_POST_VARS['c_glass_adjustable_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_a'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_a'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_a_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_a']);$isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_adjustable_b']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_b'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_b'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_b_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_b']);$isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_adjustable_c']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_c'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_c'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_c_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_c']);$isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_adjustable_d']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_d'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_d'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_d_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_d']);$isglass=true; 
									}	
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}

									
									
								}
								//for ep36 custom product
								if($HTTP_POST_VARS['product_type']=='EP36'){
									
									if($HTTP_POST_VARS['rostedglass_val']!='' || $HTTP_POST_VARS['rostedglass_id']!=''){
									       $_SESSION['roastedglass']=$HTTP_POST_VARS['rostedglass_val'];
                                   $_SESSION['roastedglass_id']=$HTTP_POST_VARS['rostedglass_id'];									
									   }
									
									
									
									
																	
                  //left end panel and right end panel
                  if(($HTTP_POST_VARS['c_glass_right_val_ep36']!='')){
                        if($HTTP_POST_VARS['c_glass_right_val_ep36']==''){
                          tep_session_destroy();
                        }
                      $_SESSION['rightendpanelval_ep36']=$HTTP_POST_VARS['c_glass_right_val_ep36'];
                     }
                     if(($HTTP_POST_VARS['c_glass_left_val_ep36']!='')){
                       if($HTTP_POST_VARS['c_glass_left_val_ep36']==''){
                          tep_session_destroy();
                        }
                      $_SESSION['leftendpanelval_ep36']=$HTTP_POST_VARS['c_glass_left_val_ep36'];
                     }
									
									
									
									
									
									
									
									
									//corner post
									if(($HTTP_POST_VARS['post_type_val']!='')){
									$_SESSION['posttypeval']=$HTTP_POST_VARS['post_type_val'];
										
											
									}
									
									
									
									//corner post
									if(($HTTP_POST_VARS['post_degree_val']!='')){
									$_SESSION['postdegreeval']=$HTTP_POST_VARS['post_degree_val'];
										
											
									}
									
									//left post
									// if(($HTTP_POST_VARS['c_right_post']!='')&&($isglass==false)){
									      // if($HTTP_POST_VARS['c_right_post_val']==''){
										      // tep_session_destroy();
										    // }
											   // $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_right_post'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_right_post_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_right_post_mult']);									
											   // $k++; 
											   // unset($HTTP_POST_VARS['c_right_post']);$isglass=true;
								     // }
									 //right post
									   // if(($HTTP_POST_VARS['c_left_post']!='')&&($isglass==false)){
									     // if($HTTP_POST_VARS['c_left_post_val']==''){
										      // tep_session_destroy();
										    // }
											 // $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_left_post'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_left_post_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_left_post_mult']);									
											 // $k++; unset($HTTP_POST_VARS['c_left_post']);$isglass=true;
									   // }
									//center post
									if(($HTTP_POST_VARS['c_center1_post']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_center1_post_val']==''){
										      tep_session_destroy();
										    }
											 $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_center1_post'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_center1_post_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_center1_post_mult']);									
											 $k++; unset($HTTP_POST_VARS['c_center1_post']);$isglass=true;
									   }
									   
									   //center2 post
									if(($HTTP_POST_VARS['c_center2_post']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_center2_post_val']==''){
										      tep_session_destroy();
										    }
											 $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_center2_post'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_center2_post_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_center2_post_mult']);									
											 $k++; unset($HTTP_POST_VARS['c_center2_post']);$isglass=true;
									   }
									   
									    //corner post
									if(($HTTP_POST_VARS['c_corner_post']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_corner_post_val']==''){
										      tep_session_destroy();
										    }
											 $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_corner_post'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_corner_post_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_corner_post_mult']);									
											 $k++; unset($HTTP_POST_VARS['c_corner_post']);$isglass=true;
									   }
									   
									   
									    //Flange Cover
									if(($HTTP_POST_VARS['c_flange_cover']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_flange_cover_val']==''){
										      tep_session_destroy();
										    }
											 $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_flange_cover'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_flange_cover_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_flange_cover_mult']);									
											 $k++; unset($HTTP_POST_VARS['c_flange_cover']);$isglass=true;
									   }
									
/*
									if(($HTTP_POST_VARS['c_glass_right']!='')&&($isglass==false)){
									      if($HTTP_POST_VARS['c_glass_right_val']==''){
										      tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_right'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_right_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_right_mult']);									
											   $k++; 
											   unset($HTTP_POST_VARS['c_glass_right']);$isglass=true;
								     }
									   if(($HTTP_POST_VARS['c_glass_left']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_left_val']==''){
										      tep_session_destroy();
										    }
											 $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_left'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_left_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_left_mult']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_left']);$isglass=true;
									   }
									 */  

									 /*  
									 if($HTTP_POST_VARS['c_glass_right']!=''){
									      
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_right'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_right_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_right_mult']);									
											   $k++; 
											   unset($HTTP_POST_VARS['c_glass_right']);$isglass=true;
								     }
									   if($HTTP_POST_VARS['c_glass_left']!=''){
									     
										    
											 $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_left'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_left_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_left_mult']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_left']);$isglass=true;
									   }
										*/

									   
									if(($HTTP_POST_VARS['c_glass_face']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_face_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_face'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_face_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_face']);$isglass=true;
									}
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_a_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_a_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_a']);$isglass=true; 
									}	
									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_b_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_b_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_b']); $isglass=true;
									}
									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_c_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_c_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_c']);$isglass=true; 
									}	if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_d_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_d_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_d']);$isglass=true; 
									}	if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_adjustable_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_a'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_a'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_a_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_a']);$isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_adjustable_b']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_b'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_b'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_b_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_b']);$isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_adjustable_c']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_c'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_c'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_c_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_c']);$isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_adjustable_d']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_d'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_d'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_d_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_d']);$isglass=true; 
									}
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}	
									
								}
								
								//for es31 custom product
								if($HTTP_POST_VARS['product_type']=='ES31'){
									
									
									if(($HTTP_POST_VARS['c_glass_face']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_face_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_face'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_face_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_face']);$isglass=true;
									}
									
									
									
																				
                  //left end panel and right end panel
                  if(($HTTP_POST_VARS['c_glass_right_val_es31']!='')){
                        if($HTTP_POST_VARS['c_glass_right_val_es31']==''){
                          tep_session_destroy();
                        }
                      $_SESSION['rightendpanelval_es31']=$HTTP_POST_VARS['c_glass_right_val_es31'];
                     }
                     if(($HTTP_POST_VARS['c_glass_left_val_es31']!='')){
                       if($HTTP_POST_VARS['c_glass_left_val_es31']==''){
                          tep_session_destroy();
                        }
                      $_SESSION['leftendpanelval_es31']=$HTTP_POST_VARS['c_glass_left_val_es31'];
                     }
						
									
									
									
									
									
									
									
									
									//corner post
									if(($HTTP_POST_VARS['post_type_val']!='')){
									$_SESSION['posttypeval']=$HTTP_POST_VARS['post_type_val'];
										
											
									}
									
									//corner post
									if(($HTTP_POST_VARS['post_degree_val']!='')){
									$_SESSION['postdegreeval']=$HTTP_POST_VARS['post_degree_val'];
										
											
									}
									
									
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_a_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_a_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_a']);$isglass=true; 
									}	
									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_b_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_b_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_b']); $isglass=true;
									}
									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_c_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_c_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_c']);$isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_d_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_d_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_d']);$isglass=true; 
									}	if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d_light']);
											 $isglass=true; 
									}
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}	
									
								}
								
								//for es40 custom product
								if($HTTP_POST_VARS['product_type']=='ES40'){
									
									
									if(($HTTP_POST_VARS['c_glass_face']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_face_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_face'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_face_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_face']);$isglass=true;
									}
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_a_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_a_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_a']);$isglass=true; 
									}	
									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_b_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_b_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_b']); $isglass=true;
									}
									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_c_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_c_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_c']);$isglass=true; 
									}	if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_d_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_d_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_d']);$isglass=true; 
									}	if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d_light']);
											 $isglass=true; 
									}
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}	
									
								}
								//for es67 custom product
								if($HTTP_POST_VARS['product_type']=='ES67'){
									
									
									if(($HTTP_POST_VARS['c_glass_face']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_face_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_face'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_face_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_face']);$isglass=true;
									}
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_a_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_a_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_a']);$isglass=true; 
									}	
									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_b_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_b_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_b']); $isglass=true;
									}
									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_c_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_c_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_c']);$isglass=true; 
									}	if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_d_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_d_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_d']);$isglass=true; 
									}	if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d_light']);
											 $isglass=true; 
									}
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}	
									
								}
								//for es73 custom product
								if($HTTP_POST_VARS['product_type']=='ES73'){
									
									
									if(($HTTP_POST_VARS['c_glass_face']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_face_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_face'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_face_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_face']);$isglass=true;
									}
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_a_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_a_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_a']);$isglass=true; 
									}	
									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_b_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_b_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_b']); $isglass=true;
									}
									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_c_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_c_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_c']);$isglass=true; 
									}	if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_d_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_d_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_d']);$isglass=true; 
									}	if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d_light']);
											 $isglass=true; 
									}
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}	
									
								}
								
                //for ep11 and ep12 custom product
                if($HTTP_POST_VARS['product_type']=='EP11'||$HTTP_POST_VARS['product_type']=='EP12'){
                  $postheight="";
                  if($HTTP_POST_VARS['c_glass_post_val']!=""){
                  
                        $postheight1=$HTTP_POST_VARS['c_glass_post_val'];
                        $postheight=$HTTP_POST_VARS['product_type']." ".$postheight1." ".$HTTP_POST_VARS['c_glass_face_val'];
                  }else{
                  
                    $postheight1=" ";
                    $postheight=$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_face_val'];
                  }
                  
                  //corner post
                  if(($HTTP_POST_VARS['post_type_val']!='')){
                  $_SESSION['posttypeval']=$HTTP_POST_VARS['post_type_val'];
                    
                      
                  }
                  
                  //corner post
                  if(($HTTP_POST_VARS['post_degree_val']!='')){
                  $_SESSION['postdegreeval']=$HTTP_POST_VARS['post_degree_val'];
                    
                      
                  }
                  
                  
                  if($HTTP_POST_VARS['c_glass_adjustable_a_val']!=""){
                  
                        $makeadjustable=$HTTP_POST_VARS['c_glass_adjustable_a_val'];
                        
                        }
                  if(($HTTP_POST_VARS['c_glass_face']!='')&&($isglass==false)){
                  if($HTTP_POST_VARS['c_glass_face_val']==''){
                          tep_session_destroy();
                    }
                      $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_face'],'val'=>$HTTP_POST_VARS['product_type']." ".$postheight1." ".$HTTP_POST_VARS['c_glass_face_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);                 
                       $k++; unset($HTTP_POST_VARS['c_glass_face']);$isglass=true;
                  } 
                  
                  
                  //left end panel and right end panel
                  if(($HTTP_POST_VARS['c_glass_right_val_ep11']!='')){
                        if($HTTP_POST_VARS['c_glass_right_val_ep11']==''){
                          tep_session_destroy();
                        }
                      $_SESSION['rightendpanelval_ep11']=$HTTP_POST_VARS['c_glass_right_val_ep11'];
                     }
                     if(($HTTP_POST_VARS['c_glass_left_val_ep11']!='')){
                       if($HTTP_POST_VARS['c_glass_left_val_ep11']==''){
                          tep_session_destroy();
                        }
                      $_SESSION['leftendpanelval_ep11']=$HTTP_POST_VARS['c_glass_left_val_ep11'];
                     }
                  
                  if(($HTTP_POST_VARS['c_glass_right_val_ep12']!='')){
                        if($HTTP_POST_VARS['c_glass_right_val_ep12']==''){
                          tep_session_destroy();
                        }
                      $_SESSION['rightendpanelval_ep12']=$HTTP_POST_VARS['c_glass_right_val_ep12'];
                     }
                     if(($HTTP_POST_VARS['c_glass_left_val_ep12']!='')){
                       if($HTTP_POST_VARS['c_glass_left_val_ep12']==''){
                          tep_session_destroy();
                        }
                      $_SESSION['leftendpanelval_ep12']=$HTTP_POST_VARS['c_glass_left_val_ep12'];
                     }
                  
                  
                  
                  
                  
                  if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)){
                  if($HTTP_POST_VARS['c_glass_a_val']==''){
                          tep_session_destroy();
                    }
                      $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']." ".$postheight1." ".$HTTP_POST_VARS['c_glass_a_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_a_mult']);                 
                       $k++;unset($HTTP_POST_VARS['c_glass_a']);$isglass=true; 
                  }if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
                      $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);                  
                       $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
                       $isglass=true; 
                  }
                  if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)){
                  if($HTTP_POST_VARS['c_glass_b_val']==''){
                          tep_session_destroy();
                    }
                      $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']." ".$postheight1." ".$HTTP_POST_VARS['c_glass_b_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_b_mult']);                 
                       $k++;unset($HTTP_POST_VARS['c_glass_b']); $isglass=true;
                  }if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){
                      $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);                  
                       $k++; unset($HTTP_POST_VARS['c_glass_b_light']);
                       $isglass=true; 
                  }
                  if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)){
                  if($HTTP_POST_VARS['c_glass_c_val']==''){
                          tep_session_destroy();
                    }
                      $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']." ".$postheight1." ".$HTTP_POST_VARS['c_glass_c_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_c_mult']);                 
                       $k++;unset($HTTP_POST_VARS['c_glass_c']);$isglass=true; 
                  }
                  if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_light'])){
                      $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);                  
                       $k++; unset($HTTP_POST_VARS['c_glass_c_light']);
                       $isglass=true; 
                  }if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)){
                  if($HTTP_POST_VARS['c_glass_d_val']==''){
                          tep_session_destroy();
                    }
                      $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']." ".$postheight1." ".$HTTP_POST_VARS['c_glass_d_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_d_mult']);                 
                       $k++;unset($HTTP_POST_VARS['c_glass_d']);$isglass=true; 
                  }if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_light'])){
                      $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);                  
                       $k++; unset($HTTP_POST_VARS['c_glass_d_light']);
                       $isglass=true; 
                  }if(($HTTP_POST_VARS['c_glass_adjustable_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_a'])){
                  
                      $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_a'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_a_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);                  
                       $k++;unset($HTTP_POST_VARS['c_glass_adjustable_a']);$isglass=true; 
                  }
                  if(($HTTP_POST_VARS['c_glass_adjustable_b']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_b'])){
                  
                      $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_b'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_b_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);                  
                       $k++;unset($HTTP_POST_VARS['c_glass_adjustable_b']);$isglass=true; 
                  }if(($HTTP_POST_VARS['c_glass_adjustable_c']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_c'])){
                  
                      $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_c'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_c_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);                  
                       $k++;unset($HTTP_POST_VARS['c_glass_adjustable_c']);$isglass=true; 
                  }if(($HTTP_POST_VARS['c_glass_adjustable_d']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_d'])){
                  
                      $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_d'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_d_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);                  
                       $k++;unset($HTTP_POST_VARS['c_glass_adjustable_d']);$isglass=true; 
                  }
                  
                  
                  
                  
                  
                  
                    
                  
                  
                  
                  if($isglass==false){
                    //hererer
                    //if (in_array($p_ids, $_SESSION['product_custom'][$k])) 
                    // if(array_search($p_ids, array_column($_SESSION['product_custom'][$k], 'id')) !== false) { 
                      
                      // } 
                    // else
                      // { 
                      $_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type']." ".$postheight1,'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']); 
                      // }
                    
                  //echo'<pre><b style="color:red;">';print_r($_SESSION['product_custom'][$k]);echo'<br />';
                    $k++;
                  }                                 
                }
								//for es29
								if($HTTP_POST_VARS['product_type']=='ES29'||$HTTP_POST_VARS['product_type']=='ES82'||$HTTP_POST_VARS['product_type']=='ES90'||$HTTP_POST_VARS['product_type']=='ES47'||$HTTP_POST_VARS['product_type']=='ES92'||$HTTP_POST_VARS['product_type']=='A-PUSH'){
									
									
									
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; if($HTTP_POST_VARS['product_type']=='ES29'){unset($HTTP_POST_VARS['c_glass_a']);}
											 else{ if($glassa){unset($HTTP_POST_VARS['c_glass_a']);}}
											$glassa=true;
											 $isglass=true; 
									}
									
									
									
									
									
									/*
									if(($HTTP_POST_VARS['c_glass_a_top']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_top'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_top'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val']."/".$HTTP_POST_VARS['right_length']."TG",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_a_top']);unset($HTTP_POST_VARS['c_glass_a']);$isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_a_top']);unset($HTTP_POST_VARS['c_glass_a_light']);$isglass=true; 
									}
									
									
									
									*/
									
									if($HTTP_POST_VARS['product_type']=='ES90'||$HTTP_POST_VARS['product_type']=='ES92'||$HTTP_POST_VARS['product_type']=='ES47')
									{
									if(($HTTP_POST_VARS['c_glass_a_top']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_top'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_top'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val']."/".$HTTP_POST_VARS['right_length']."TG ".$HTTP_POST_VARS['glass_a_top_ext']."",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_a_top']);unset($HTTP_POST_VARS['c_glass_a']);$isglass=true; 
									}

									
									if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT ".$HTTP_POST_VARS['glass_a_top_ext']."",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_a_top']);unset($HTTP_POST_VARS['c_glass_a_light']);$isglass=true; 
									}

													
									}
									else{
									if(($HTTP_POST_VARS['c_glass_a_top']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_top'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_top'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val']."/".$HTTP_POST_VARS['right_length']."TG",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_a_top']);unset($HTTP_POST_VARS['c_glass_a']);$isglass=true; 
									}	
									
									
									if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_a_top']);unset($HTTP_POST_VARS['c_glass_a_light']);$isglass=true; 
									}
									
									
									
									}
									
									
									
									
									
									
									
									
									//tube
									if(($HTTP_POST_VARS['c_glass_a_tube']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_tube'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_tube'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_tube']."BACK HORIZONTAL TUBE",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_a_top']);unset($HTTP_POST_VARS['c_glass_a_tube']);$isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);	//unset($HTTP_POST_VARS['c_glass_a']);								
											 $k++; if($HTTP_POST_VARS['product_type']=='ES29'){unset($HTTP_POST_VARS['c_glass_b']);}
											 else{ if($glassb){unset($HTTP_POST_VARS['c_glass_b']);}}
											$glassb=true;
											 $isglass=true;
									}
									
									
									
									
									
									/*
									if(($HTTP_POST_VARS['c_glass_b_top']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_top'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_top'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val']."/".$HTTP_POST_VARS['right_length']."TG",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_b_top']);unset($HTTP_POST_VARS['c_glass_b']); $isglass=true;
									}if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_b_top']);unset($HTTP_POST_VARS['c_glass_b_light']);$isglass=true; 
									}
									*/
									
									
								if($HTTP_POST_VARS['product_type']=='ES90'||$HTTP_POST_VARS['product_type']=='ES92'||$HTTP_POST_VARS['product_type']=='ES47')
									{
									if(($HTTP_POST_VARS['c_glass_b_top']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_top'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_top'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val']."/".$HTTP_POST_VARS['right_length']."TG ".$HTTP_POST_VARS['glass_b_top_ext']."",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_b_top']);unset($HTTP_POST_VARS['c_glass_b']); $isglass=true;
									}	
									
									
									if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT ".$HTTP_POST_VARS['glass_b_top_ext']."",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_b_top']);unset($HTTP_POST_VARS['c_glass_b_light']);$isglass=true; 
									}
									}
									else{
									if(($HTTP_POST_VARS['c_glass_b_top']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_top'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_top'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val']."/".$HTTP_POST_VARS['right_length']."TG",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_b_top']);unset($HTTP_POST_VARS['c_glass_b']); $isglass=true;
									}	
									
									
									
									if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_b_top']);unset($HTTP_POST_VARS['c_glass_b_light']);$isglass=true; 
									}
									}
									
									
									
									
									
									
									//tube
									if(($HTTP_POST_VARS['c_glass_b_tube']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_tube'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_tube'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_tube']."BACK HORIZONTAL TUBE",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_b_top']);unset($HTTP_POST_VARS['c_glass_b_tube']);$isglass=true; 
									}
									
									
									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; if($HTTP_POST_VARS['product_type']=='ES29'){unset($HTTP_POST_VARS['c_glass_c']);}
											 else{ if($glassc){unset($HTTP_POST_VARS['c_glass_c']);}}
											$glassc=true;
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_c_top']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_top'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_top'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val']."/".$HTTP_POST_VARS['right_length']."TG",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_c_top']);unset($HTTP_POST_VARS['c_glass_c']);$isglass=true; 
									}	
									if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_c_top']);unset($HTTP_POST_VARS['c_glass_c_light']);$isglass=true; 
									}
									//tube
									if(($HTTP_POST_VARS['c_glass_c_tube']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_tube'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_tube'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_tube']."BACK HORIZONTAL TUBE",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_c_top']);unset($HTTP_POST_VARS['c_glass_c_tube']);$isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; if($HTTP_POST_VARS['product_type']=='ES29'){unset($HTTP_POST_VARS['c_glass_d']);}
											 else{ if($glassd){unset($HTTP_POST_VARS['c_glass_d']);}}
											$glassd=true;
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_d_top']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_top'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_top'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val']."/".$HTTP_POST_VARS['right_length']."TG",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_d_top']);unset($HTTP_POST_VARS['c_glass_d']);$isglass=true; 
									}
									//lyt
									if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_d_top']);unset($HTTP_POST_VARS['c_glass_b_light']);$isglass=true; 
									}
									//tubef
									if(($HTTP_POST_VARS['c_glass_d_tube']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_tube'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_tube'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_tube']."BACK HORIZONTAL TUBE",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_d_top']);unset($HTTP_POST_VARS['c_glass_b_tube']);$isglass=true; 
									}
									
									if(($HTTP_POST_VARS['c_glass_adjustable_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_a'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_a'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_a_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;if($glassmakea){unset($HTTP_POST_VARS['c_glass_adjustable_a']);}$isglass=true;$glassmakea=true; 
									}
									if(($HTTP_POST_VARS['c_glass_adjustable_b']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_b'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_b'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_b_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;if($glassmakeb){unset($HTTP_POST_VARS['c_glass_adjustable_b']);}$isglass=true;$glassmakeb=true; 
									}if(($HTTP_POST_VARS['c_glass_adjustable_c']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_c'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_c'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_c_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;if($glassmakec){unset($HTTP_POST_VARS['c_glass_adjustable_c']);}$isglass=true;$glassmakec=true; 
									}if(($HTTP_POST_VARS['c_glass_adjustable_d']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_d'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_d'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_d_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;if($glassmaked){unset($HTTP_POST_VARS['c_glass_adjustable_d']);}$isglass=true;$glassmaked=true; 
									}
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'] ,'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}																	
								}
								// for ed20
								
								//for es29
								if($HTTP_POST_VARS['product_type']=='ED20'){

									$face='';

									if($HTTP_POST_VARS['c_glass_post']!=''){

										$face=$HTTP_POST_VARS['c_glass_post']." ";

									}if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a'])){

											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$face.$HTTP_POST_VARS['c_glass_a_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									

											 $k++; unset($HTTP_POST_VARS['c_glass_a']);

											 $isglass=true; 

									}

									if(($HTTP_POST_VARS['c_glass_a_top']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_top'])){

											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_top'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val']."/".$HTTP_POST_VARS['right_length']."TG",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									

											 $k++;if($start_top_glassa==$nosheleves){ unset($HTTP_POST_VARS['c_glass_a_top']);  }unset($HTTP_POST_VARS['c_glass_a']);$isglass=true; $start_top_glassa++;

									}if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){

											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									

											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);

											 $isglass=true; 

									}	

									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b'])){

											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$face.$HTTP_POST_VARS['c_glass_b_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									

											 $k++; unset($HTTP_POST_VARS['c_glass_b']);

											 $isglass=true;

									}

									if(($HTTP_POST_VARS['c_glass_b_top']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_top'])){

											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_top'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val']."/".$HTTP_POST_VARS['right_length']."TG",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									

											 $k++;if($start_top_glassb==$nosheleves){unset($HTTP_POST_VARS['c_glass_b_top']);  }unset($HTTP_POST_VARS['c_glass_b']); $isglass=true;$start_top_glassb++;

									}if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){

											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									

											 $k++; unset($HTTP_POST_VARS['c_glass_b_light']);

											 $isglass=true; 

									}

									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c'])){

											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$face.$HTTP_POST_VARS['c_glass_c_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									

											 $k++; unset($HTTP_POST_VARS['c_glass_c']);

											 $isglass=true; 

									}

									if(($HTTP_POST_VARS['c_glass_c_top']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_top'])){

											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_top'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val']."/".$HTTP_POST_VARS['right_length']."TG",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									

											 $k++;if($start_top_glassc==$nosheleves){unset($HTTP_POST_VARS['c_glass_c_top']);}unset($HTTP_POST_VARS['c_glass_c']);$start_top_glassc++; $isglass=true; 
                                      
									}if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_light'])){

											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									

											 $k++; unset($HTTP_POST_VARS['c_glass_c_light']);

											 $isglass=true; 

									}	if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d'])){

											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$face.$HTTP_POST_VARS['c_glass_d_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									

											 $k++; unset($HTTP_POST_VARS['c_glass_d']);

											 $isglass=true; 

									}if(($HTTP_POST_VARS['c_glass_d_top']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_top']))
									{
                                     $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_top'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val']."/".$HTTP_POST_VARS['right_length']."TG",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									

									 $k++;if($start_top_glassc==$nosheleves){unset($HTTP_POST_VARS['c_glass_d_top']);}unset($HTTP_POST_VARS['c_glass_d']);$start_top_glassc++; $isglass=true; 

									}if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_light'])){

											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									

											 $k++; unset($HTTP_POST_VARS['c_glass_d_light']);

											 $isglass=true; 

									}

									if($isglass==false){
                                   $_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post']."-".$HTTP_POST_VARS['counter'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);

										$k++;

									}																	

								}
								
								//for es 53
								if($HTTP_POST_VARS['product_type']=='ES53'){
									
									 if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d_light']);
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val']."GL ".$HTTP_POST_VARS['c_glass_round_a_val']." ".$HTTP_POST_VARS['c_glass_round_a']."",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val']."GL ".$HTTP_POST_VARS['c_glass_round_b_val']." ".$HTTP_POST_VARS['c_glass_round_b']."",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b']); 
											 $isglass=true;
									}
									
									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val']."GL ".$HTTP_POST_VARS['c_glass_round_c_val']." ".$HTTP_POST_VARS['c_glass_round_c']."",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val']."GL ".$HTTP_POST_VARS['c_glass_round_d_val']." ".$HTTP_POST_VARS['c_glass_round_d']."",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d']);
											 $isglass=true; 
									}
										
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}																	
								}
								
								if($HTTP_POST_VARS['product_type']=='Heat Lamp'){
									
									 if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."IC",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val']."CL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a']);
											 $isglass=true; 
									}
										
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}																	
								}
								if($HTTP_POST_VARS['product_type']=='Light Bar'){
									
									 if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."IC",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val']."Light Bar",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a']);
											 $isglass=true; 
									}
										
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}																	
								}
								//ORBIT720
								if($HTTP_POST_VARS['product_type']=='ORBIT720'){
									
									 if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a']);
											 $isglass=true; 
									}
										
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}																	
								}
								
								if($HTTP_POST_VARS['product_type']=='B950P'){
									
									 if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a']);
											 $isglass=true; 
									}
										
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}																	
								}
								
								if($HTTP_POST_VARS['product_type']=='EP950'){
									
									 if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a']);
											 $isglass=true; 
									}
										
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}																	
								}
								
								
								
									if($HTTP_POST_VARS['product_type']=='EP6'){
									
									/*
									 if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									/*
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}*/
									if(($HTTP_POST_VARS['c_glass_face']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_face_val']==''){
										      tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_face'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_face_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_mult']);									
											   $k++; unset($HTTP_POST_VARS['c_glass_face']);$isglass=true;
									   }
									   
									 if(($HTTP_POST_VARS['c_glass_right']!='')&&($isglass==false)){
									      if($HTTP_POST_VARS['c_glass_right_val']==''){
										      tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_right'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_right_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_right_mult']);									
											   $k++; 
											   unset($HTTP_POST_VARS['c_glass_right']);$isglass=true;
								     }
									   if(($HTTP_POST_VARS['c_glass_left']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_left_val']==''){
										      tep_session_destroy();
										    }
											 $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_left'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_left_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_left_mult']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_left']);$isglass=true;
									   }   
									   
									   
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a']);
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b']);
											 $isglass=true; 
									}

									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c']);
											 $isglass=true; 
									}	
									
									if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d']);
											 $isglass=true; 
									}
									
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}																	
								}
								
								
								
									if($HTTP_POST_VARS['product_type']=='Ring-EP6'){
									
									/*
									 if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									/*
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}*/
									if(($HTTP_POST_VARS['c_glass_face']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_face_val']==''){
										      tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_face'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_face_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_mult']);									
											   $k++; unset($HTTP_POST_VARS['c_glass_face']);$isglass=true;
									   }
									   
									 if(($HTTP_POST_VARS['c_glass_right']!='')&&($isglass==false)){
									      if($HTTP_POST_VARS['c_glass_right_val']==''){
										      tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_right'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_right_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_right_mult']);									
											   $k++; 
											   unset($HTTP_POST_VARS['c_glass_right']);$isglass=true;
								     }
									   if(($HTTP_POST_VARS['c_glass_left']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_left_val']==''){
										      tep_session_destroy();
										    }
											 $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_left'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_left_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_left_mult']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_left']);$isglass=true;
									   }   
									   
									   
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a']);
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b']);
											 $isglass=true; 
									}

									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c']);
											 $isglass=true; 
									}	
									
									if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d']);
											 $isglass=true; 
									}
									
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}																	
								}
								
								
								
									if($HTTP_POST_VARS['product_type']=='EP7'){
									
									/*
									 if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									/*
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}*/
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($p_ids==$HTTP_POST_VARS['c_glass_a'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a']);
											 $isglass=true; 
									}
										
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}																	
								}
								
								
								
								
								
									if($HTTP_POST_VARS['product_type']=='EP8'){
									
									if(($HTTP_POST_VARS['c_glass_face']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_face_val']==''){
										      tep_session_destroy();
										    }
											    $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_face'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_face_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_mult'],'banner_color'=>$HTTP_POST_VARS['bannercolorcode2'],'banner_height'=>$HTTP_POST_VARS['banner-height']);									
											   $k++; unset($HTTP_POST_VARS['c_glass_face']);$isglass=true;
									   }
									   
									   
									   
									   
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a']);
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b']);
											 $isglass=true; 
									}

									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c']);
											 $isglass=true; 
									}	
									
									if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d']);
											 $isglass=true; 
									}
									
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}																	
								}
								
								
								
								
								
								
								
								
								
								
								
								//for B950 SWIVEL and B950 both
								if(($HTTP_POST_VARS['product_type']=='B950 SWIVEL')||($HTTP_POST_VARS['product_type']=='B950')){
									
									//corner post
									if(($HTTP_POST_VARS['post_type_val']!='')){
									$_SESSION['posttypeval']=$HTTP_POST_VARS['post_type_val'];
										
											
									}
									
									//corner post
									if(($HTTP_POST_VARS['post_degree_val']!='')){
									$_SESSION['postdegreeval']=$HTTP_POST_VARS['post_degree_val'];
										
											
									}
									
									
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>"B950"."-".$HTTP_POST_VARS['c_glass_a_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}
									
									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>"B950"."-".$HTTP_POST_VARS['c_glass_b_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b']); 
											 $isglass=true;
									}if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b_light']);
											 $isglass=true; 
									}
									
									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>"B950"."-".$HTTP_POST_VARS['c_glass_c_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>"B950"."-".$HTTP_POST_VARS['c_glass_d_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d_light']);
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_right']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_right'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_right'],'val'=>"B950"."-g".$HTTP_POST_VARS['c_glass_right_val']."REP",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_right']);
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_left']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_left'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_left'],'val'=>"B950"."-g".$HTTP_POST_VARS['c_glass_left_val']."LEP",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_left']);
											 $isglass=true; 
									}
									
										
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>'B950','qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}																	
								}
								
								
								//for ORBIT360
								if(($HTTP_POST_VARS['product_type']=='ORBIT360')){
									
									
									
									
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>"ORBIT360"."-".$HTTP_POST_VARS['c_glass_a_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a']);
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>"ORBIT360"."-".$HTTP_POST_VARS['c_glass_b_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b']); 
											 $isglass=true;
									}
									if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b_light']);
											 $isglass=true; 
									}
									
									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>"ORBIT360"."-".$HTTP_POST_VARS['c_glass_c_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c']);
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c_light']);
											 $isglass=true; 
									}
									
									if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>"ORBIT360"."-".$HTTP_POST_VARS['c_glass_d_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d']);
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d_light']);
											 $isglass=true; 
									}
									
									
									
										
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>'ORBIT360','qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}																	
								}
								
								//for Adjustable-Shelving
								if(($HTTP_POST_VARS['product_type']=='Mid-Shelves')){
									
									if(($HTTP_POST_VARS['c_glass_post_right']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_post_right'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_post_right'],'val'=>"right post"." ".$HTTP_POST_VARS['c_glass_post_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_post']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_post_left']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_post_left'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_post_left'],'val'=>"left post"." ".$HTTP_POST_VARS['c_glass_post_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_post']);
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>"Mid Shelves GL"." ".$HTTP_POST_VARS['c_glass_a_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a']);
											 $isglass=true; 
									}
									
									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>"Mid Shelves GL"." ".$HTTP_POST_VARS['c_glass_b_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b']); 
											 $isglass=true;
									}
									
									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>"Mid Shelves GL"." ".$HTTP_POST_VARS['c_glass_c_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_c']);
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>"Mid Shelves GL"." ".$HTTP_POST_VARS['c_glass_d_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_d']);
											 $isglass=true; 
									}
									
									
										
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>'Mid Shelves','qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}																	
								}
									if(($HTTP_POST_VARS['product_type']=='Adjustable-Shelving')){
									
									
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>"SLV GL"." ".$HTTP_POST_VARS['c_glass_a_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; //unset($HTTP_POST_VARS['c_glass_a']);
											 $isglass=true; 
									}
									
									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>"SLV GL"." ".$HTTP_POST_VARS['c_glass_b_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; //unset($HTTP_POST_VARS['c_glass_b']); 
											 $isglass=true;
									}
									
								                  if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c'])){
								                    $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>"SLV GL"." ".$HTTP_POST_VARS['c_glass_c_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											              $k++;
											              $isglass=true; 
									                }
                									if($isglass==false){
                										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>'SLV','qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
                										$k++;
                									}																	
								                }
								              }
              								if(($HTTP_POST_VARS['product_type']=='ALLIN1')&&isset($HTTP_POST_VARS['product_type'])){
              								   $_SESSION['product_custom'][$k]=array('id'=>$_POST['products_id'][0],'val'=>$HTTP_POST_VARS['custom_glass'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
              										$k++;
              								}
							                $_SESSION['totalnocustom']=$k;
                                if($add_to_wish) {
                                $wishlistProduct = array();
                                while($new_k <= $k) {
                                  $wishlistProduct[] = $_SESSION['product_custom'][$k];
                                  unset($_SESSION['product_custom'][$k]);
                                  $_SESSION['totalnocustom']--;
                                  $k--;
                                }
                              }
							  /*
							  $wishlistProduct2 = array();
                                while($new_k <= $k) {
                                  $wishlistProduct2[] = $_SESSION['product_custom'][$k];
                                  //unset($_SESSION['product_custom'][$k]);
                                  $_SESSION['totalnocustom']--;
                                  $k--;
                                }
							  */
							  
							  $addtocartsproducts== array();
							  while($new_k <= $k) {
                                  $addtocartsproducts[] = $_SESSION['product_custom'][$k];
                                  //unset($_SESSION['product_custom'][$k]);
                                  $_SESSION['totalnocustom']--;
                                  $k--;
                                }
							  
							   $sssss=json_encode($addtocartsproducts);
							  
							 // echo'<b style="color:red;"><pre>'; print_r(json_encode($addtocartsproducts)); echo'</b><br />';
							 // echo'<b style="color:red;"><pre>'; print_r(json_decode($sssss)); echo'</b>';
							  
							  
							  
  						                
                              $produts_ids_list=$HTTP_POST_VARS['products_id'];
                              $i=0;  
                              if($add_to_wish) {                                
                                foreach($wishlistProduct as $wa => $wishlistProduct) {
                                  if(in_array($wishlistProduct['id'], $produts_ids_list)) {
                                    $wishlist->add_wishlist($wishlistProduct['id'], 1, $HTTP_POST_VARS['product_type'], (empty($HTTP_POST_VARS['type']) ? "1BAY" : $HTTP_POST_VARS['type']), array($wishlistProduct['val']), $wishlistProduct);
                                  }
                                }
                                
                              }
							  
							  
							  
                              /*
                              foreach($produts_ids_list as $p_ids) {
                                $attributes = '';
                                if($add_to_wish) {                                  
                                  
                                } else {
								//$cartProductval[] = $_SESSION['product_custom'][$k]['val'];	
									
                                  $cart->add_cart($p_ids, $cart->get_quantity(tep_get_uprid($p_ids, $attributes))+1, $attributes,$addtocartsproducts[$i]['val']);
                                }
                                $i++;
                              }
							  
							  */
							  $i=0;
							  $produts_ids_list=$HTTP_POST_VARS['products_id'];
							   foreach($addtocartsproducts as $wa => $addtocartsproducts) {
								   $attributes = '';
                                  if(in_array($addtocartsproducts['id'], $produts_ids_list)) {
									  
									//$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_right'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_right_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_right_mult']);
									
                                    $cart->add_cart($addtocartsproducts['id'], $cart->get_quantity(tep_get_uprid($addtocartsproducts['id'], $attributes))+1, $attributes,$addtocartsproducts['val'],$addtocartsproducts['qty'],$addtocartsproducts['custom'],$addtocartsproducts['frosted'],$addtocartsproducts['banner_color'],$addtocartsproducts['banner_height'],$addtocartsproducts['wt'],$i);
									//echo'<b style="color:red;">hjhjhjh='.$i.'<pre>'; print_r($addtocartsproducts); echo'</b>';
									
									//$wishlist2->add_wishlist($addtocartsproducts['id'], 1, $HTTP_POST_VARS['product_type'], (empty($HTTP_POST_VARS['type']) ? "1BAY" : $HTTP_POST_VARS['type']), array($addtocartsproducts['val']), $addtocartsproducts);
                                  }
								  $i++;
                                }
							  
							  
							  
							  
							  
							  
							  // foreach($addtocartsproducts as $wa => $addtocartsproducts) {
                                  // if(in_array($addtocartsproducts['id'], $produts_ids_list)) {
                                    // $wishlist2->add_wishlist($addtocartsproducts['id'], 1, $HTTP_POST_VARS['product_type'], (empty($HTTP_POST_VARS['type']) ? "1BAY" : $HTTP_POST_VARS['type']), array($addtocartsproducts['val']), $addtocartsproducts);
                                  // }
                                // }
							  
							  
							  /*$newsarray=array();
							  for($ss=0;$ss<sizeof($_SESSION['product_custom']);$ss++)
							  {
								  if()
								  $newsarray
							  }*/
							  		
							  /*foreach($_SESSION['product_custom'] as $row){  // iterate all rows
									if(!isset($result[$row['id']])){  // if first occurrence of day...
										$result[]=$row;
										
									}else{                                    // if not the first occurrence of day...
										$result[]['qty']+=$row['qty'];  // add movements value
									}
								}
								*/
								//echo'<b style="color:red;"><pre>'; print_r($result); echo'</b><br />';
							
					if (!empty($customer_id)) {	
					
						calCulateQuantity($_SESSION['product_custom'],$customer_id);		
				}	
			else{
				calCulateQuantity($_SESSION['product_custom'],$customer_id);
			}		
							
							 
							 
                            } else {

                              $product_name = tep_get_products_name($HTTP_POST_VARS['products_id']);

                              $search_string = array("EP5","Ring-EP5","EP15", "EP11","EP12", "EP21", "EP22","EP36", "ES31","ES40","ES67","ES73");

                              $search_name = "";
                              $search_model_name = "";
                              $is_name_change = false;
                              foreach($search_string as $model) {
                                // Check for model name
                                $pos = strpos($product_name, $model);
                                $isGlass = strpos($product_name, "Glass");
                                if($pos !== false && $isGlass !== false) {
                                  $search_model_name = $model;
                                  $is_name_change = true;                                  
                                  $search_name = trim(substr($product_name, 0, $isGlass));
                                }
                                if($is_name_change) {
                                  break;
                                }
                              }

                              $length_check = false;

                              for($i = 42; $i<=54; $i++) {
                                $posArray = explode($i, $product_name);
								// echo'<b style="color:red;">'; print_r($posArray); echo'</b><br />';
                                if (count($posArray) > 1) {
                                  $length_check = true;                                  
                                }

                                if($length_check) {
                                  break;
                                }
                              }

                              //print_r($_SESSION); die;

                              $attributes = isset($HTTP_POST_VARS['id']) ? $HTTP_POST_VARS['id'] : '';
            								  if(empty($_SESSION['product_custom'])){
              									$_SESSION['product_custom']=array();
              									$k=0;
              								} else {
  									            $k=sizeof( $_SESSION['product_custom']);
              								}


                              if($is_name_change && $length_check) {
                                $val = $search_name;
                                if($search_model_name == "EP5" ||$search_model_name == "Ring-EP5" || $search_model_name == "EP15" ) {
                                  $val = str_replace(' ', '" ', $search_name);
                                } else if ( $search_model_name == "EP11" || 
                                  $search_model_name == "EP21" || 
                                  $search_model_name == "EP22" ||
                                  $search_model_name == "EP36" ||
                                  $search_model_name == "ES31" ||
                                  $search_model_name == "ES40" ||
								  $search_model_name == "EP6" ||
                                  $search_model_name == "ES67" ||
                                  $search_model_name == "ES73" ) {
                                  $val = str_replace($search_model_name, $search_model_name.'-', $search_name);
                                }
                                $_SESSION['product_custom'][$k] = array(
                                  'id'=>$HTTP_GET_VARS['products_id'],
                                  'val'=> $val,
                                  'qty'=>1,
                                  'custom'=>'Yes',
                                  'wt'=>1
                                );
                              }
              								$id = isset($HTTP_POST_VARS['products_id']) ?  $HTTP_POST_VARS['products_id'] : $HTTP_GET_VARS['products_id'];
                              if(isset($_POST['id'])) {
                								foreach($_POST['id'] as $key=>$val){
                								  $id.="{".$key."}".$val;
                								}
                              }
                              if(isset($HTTP_POST_VARS['products_qty'])) {
                                $qty =  $cart->get_quantity(tep_get_uprid($id , $attributes)) + $HTTP_GET_VARS['products_qty'];
                              } else if ($HTTP_GET_VARS['products_qty']) {
                                $qty = $cart->get_quantity(tep_get_uprid($id , $attributes)) + $HTTP_POST_VARS['products_qty'];
                              } else {
                                $qty = $cart->get_quantity(tep_get_uprid($id , $attributes))+1;
                              }
                              if(!isset($_SESSION['product_custom'][$k])) {
                                $_SESSION['product_custom'][$k]=array('id'=>$id,'val'=>"type",'qty'=>$qty,'custom'=>"beyond");
                              }
                              if($finalArrayAdded) {
                                while($new_k <= $k) {
                                  unset($_SESSION['product_custom'][$k]);
                                 // $_SESSION['totalnocustom']--;
                                  $k--;
                                }
                                $attributes = $HTTP_GET_VARS['attributes'];
                              }
              								calCulateQuantity($_SESSION['product_custom'],$customer_id);                                            
							                if($add_to_wish) {
                                foreach($_SESSION['product_custom'] as $wa => $wishlistProduct) {
                                  if($wishlistProduct['id']==$id && $id != '') {
                                    $wishlist->add_wishlist($id, (isset($HTTP_GET_VARS['products_qty'])  ? $HTTP_GET_VARS['products_qty'] : 1), "Parts", "List", (!empty($attributes) ? $attributes : array($wishlistProduct['val'])), $wishlistProduct);
                                    $id = "";
                                  }
                                } 
                                unset($_SESSION['product_custom'][$k]);                               
                              } else {
								  
								   ///$cart->add_cart($id,  $qty, $attributes);
								  
								   $cart->add_cart($_SESSION['product_custom'][$k]['id'], 1, $attributes,$_SESSION['product_custom'][$k]['val'],1,$_SESSION['product_custom'][$k]['custom'],$_SESSION['product_custom'][$k]['frosted'],$_SESSION['product_custom'][$k]['banner_color'],$_SESSION['product_custom'][$k]['banner_height'],$_SESSION['product_custom'][$k]['wt'],$k);
								  // $ssdsqty=$cart->get_quantity(tep_get_uprid($_SESSION['product_custom'][$k]['id'], $attributes))+1;
								  // echo'<b style="color:red;">get_quantity==';
								// print_r($ssdsqty);
								// echo'qty=';
								// print_r($_SESSION['product_custom'][$k]['qty']);
								// echo'</b><br />';
								  
								 // foreach($_SESSION['product_custom'] as $wa => $wishlistProduct2) {
                                  // if($wishlistProduct2['id']==$id && $id != '') {
                                    // $wishlist2->add_wishlist($id, (isset($HTTP_GET_VARS['products_qty'])  ? $HTTP_GET_VARS['products_qty'] : 1), "Parts", "List", (!empty($attributes) ? $attributes : array($wishlistProduct2['val'])), $wishlistProduct2);
                                    // $id = "";
                                  // }
                                // }  
								  
								  
                                
                              }
                            }
                            if($add_to_wish) {
                                $goto="wishlist.php" ;
                            } else {
								
								if($HTTP_POST_VARS['add_more_bay']==1)
							{
							$_SESSION['check_add_more']	=1;
							$goto='product.php?Model='.$HTTP_POST_VARS['product_type'].'&cPath='.$HTTP_POST_VARS['cpath_val'].'&add_more_bay=1';	
							}
							else{
								$SESSION['check_add_more']	=0;
							 $goto="shopping_cart1.php" ;	
							 if($HTTP_POST_VARS['link']!=""){
									tep_redirect($HTTP_POST_VARS['link']);
								}else{
							 tep_redirect(tep_href_link($goto));
								}
							 
							}							
								
                            }
							
							
							
							
                            if(is_array($HTTP_POST_VARS['products_id'])){
                               tep_redirect(tep_href_link($goto));
                            } else if(isset($HTTP_POST_VARS['products_id'])||isset($HTTP_GET_VARS['products_id'])){
                               tep_redirect(tep_href_link($goto, tep_get_all_get_params($parameters)));
                            }
							
							
							/*
							//for header cart
							  if(is_array($HTTP_POST_VARS['products_id'])){
								if($HTTP_POST_VARS['link']!=""){
									tep_redirect($HTTP_POST_VARS['link']);
								}else{
									tep_redirect(tep_href_link($goto));
								}	
                            } else if(isset($HTTP_POST_VARS['products_id'])||isset($HTTP_GET_VARS['products_id'])){
								//code for test on add to cart of parts 
								if($HTTP_POST_VARS['link']!=""){
									tep_redirect($HTTP_POST_VARS['link']);
								}else{
									tep_redirect(tep_href_link($goto));
								}
								//tep_redirect(tep_href_link($goto, tep_get_all_get_params($parameters)));
                            }
							
							*/
							
							
							
                          break;
        case 'remove_product_wishlist' :
            $wishlist->remove_content($HTTP_GET_VARS['products_id'], $HTTP_GET_VARS['attr'], $HTTP_GET_VARS['model_name'], $HTTP_GET_VARS['model_type']);
			$wishlist->reset_wishlist();
			tep_redirect(tep_href_link("wishlist.php"));
        break;
        case 'remove_model_wishlist' :
            $wishlist->remove_model($HTTP_GET_VARS['model_name'], $HTTP_GET_VARS['model_type']);
            tep_redirect(tep_href_link("wishlist.php"));
        break;
      // customer removes a product from their shopping cart
      case 'remove_product' : if (isset($HTTP_GET_VARS['products_id'])) {
								  /* ani code */
							    /*$i=0;
								if(!empty($_SESSION['product_custom'])){
								$totalquantity=0;
                $totalUnset = 0;
	  							foreach($_SESSION['product_custom'] as $key => $val){
								//echo stripslashes($_SESSION['product_custom'][$i]['val']);
								    $a=$HTTP_GET_VARS['val'];
								 	if($_SESSION['product_custom'][$key]['id']==$HTTP_GET_VARS['products_id']){
										$totalquantity++;
									}
									if(stripslashes($_SESSION['product_custom'][$key]['val'])==str_replace("\\","", $a)&&$_SESSION['product_custom'][$key]['id']==$HTTP_GET_VARS['products_id']&&$_SESSION['product_custom'][$key]['custom']==$HTTP_GET_VARS['custom']){
										
										//unset($_SESSION['product_custom'][$key]);
                    //$totalUnset++;
                    
										unset($_SESSION['product_custom'][$i]['id']);
										unset($_SESSION['product_custom'][$i]['val']);
										unset($_SESSION['product_custom'][$i]['qty']);
										unset($_SESSION['product_custom'][$i]['custom']);

										
									}
									$i++;
									
									
								}
								$goto='shopping_cart1.php';
                //if($totalUnset > $HTTP_GET_VARS['qty']) {
								  //$finalq=$totalquantity-$totalUnset;
                //} else {
                  $finalq=$totalquantity-$HTTP_GET_VARS['qty'];
                //}
								calCulateQuantity($_SESSION['product_custom'],$customer_id);
								
							   //print_r($_SESSION['product_final1']);
							   if ($HTTP_GET_VARS['val']=='type'){
							   	$cart->remove($HTTP_GET_VARS['products_id']);
							   }
								
								$cart->add_cart($HTTP_GET_VARS['products_id'], $finalq, '', false);
								
								}else{*/
								 /* ani code */
                                $cart->remove($HTTP_GET_VARS['products_id']);
								/*}
								if($cart->count_contents()<=0){
								 unset($_SESSION['product_custom']);
								}*/
                              }
                              tep_redirect(tep_href_link($goto, tep_get_all_get_params($parameters)));
                              break;
      // performed by the 'buy now' button in product listings and review page
     case 'buy_now' :        if (isset($HTTP_GET_VARS['products_id'])) {
                                if (tep_has_product_attributes($HTTP_GET_VARS['products_id'])) {
                                  tep_redirect(tep_href_link(FILENAME_PRODUCT_INFO1, 'products_id=' . $HTTP_GET_VARS['products_id']));
                                } else {
								if(empty($_SESSION['product_custom'])){
									$_SESSION['product_custom']=array();
									$k=0;
								}else{
									   $k=sizeof( $_SESSION['product_custom']);
								}


                $product_name = tep_get_products_name($HTTP_GET_VARS['products_id']);

                $search_string = array("EP5","Ring-EP5","EP15", "EP11","EP12", "EP21", "EP22","EP36", "ES31","ES40","ES67","ES73");

                $search_name = "";
                $is_name_change = false;
                $search_model_name = "";
                foreach($search_string as $model) {
                  // Check for model name
                  $pos = strpos($product_name, $model);
                  $isGlass = strpos($product_name, "Glass");
                  if($pos !== false && $isGlass !== false) {
                    $search_model_name = $model;
                    $is_name_change = true;                                  
                    $search_name = trim(substr($product_name, 0, $isGlass));
                  }
                  if($is_name_change) {
                    break;
                  }
                }

                $length_check = false;

                for($i = 42; $i<=54; $i++) {
                  $posArray = explode($i, $product_name);
                  if (count($posArray) > 1) {
                    $length_check = true;                                  
                  }

                  if($length_check) {
                    break;
                  }
                }

                if($is_name_change && $length_check) {
                  $val = $search_name;
                  if($search_model_name == "EP5" || $search_model_name == "Ring-EP5" || $search_model_name == "EP15" ) {
                    $val = str_replace(' ', '" ', $search_name);
                  } else if ( $search_model_name == "EP11" || 
                    $search_model_name == "EP21" || 
                    $search_model_name == "EP22" ||
                    $search_model_name == "EP36" ||
                    $search_model_name == "ES31" ||
                    $search_model_name == "ES40" ||
                    $search_model_name == "ES67" ||
                    $search_model_name == "ES73" ) {
                    $val = str_replace($search_model_name, $search_model_name.'-', $search_name);
                  }
                  $_SESSION['product_custom'][$k] = array(
                    'id'=>$HTTP_GET_VARS['products_id'],
                    'val'=> $val,
                    'qty'=>1,
                    'custom'=>'Yes',
                    'wt'=>1
                  );
                }

                if(!isset($_SESSION['product_custom'][$k])) {
								  $_SESSION['product_custom'][$k]=array('id'=>$HTTP_GET_VARS['products_id'],'val'=>$HTTP_GET_VARS['keywords'],'qty'=>(isset($HTTP_GET_VARS['products_qty']) ? $HTTP_GET_VARS['products_qty'] : 1),'custom'=>"beyond");
                }
								
								calCulateQuantity($_SESSION['product_custom'],$customer_id);
								
								  
                                 // $cart->add_cart($HTTP_GET_VARS['products_id'], $cart->get_quantity($HTTP_GET_VARS['products_id'])+(isset($HTTP_GET_VARS['products_qty']) ? $HTTP_GET_VARS['products_qty'] : 1));
								 
								 
								$cart->add_cart($_SESSION['product_custom'][$k]['id'], $cart->get_quantity(tep_get_uprid($_SESSION['product_custom'][$k]['id'], $attributes))+1, $attributes,$_SESSION['product_custom'][$k]['val'],$_SESSION['product_custom'][$k]['qty'],$_SESSION['product_custom'][$k]['custom'],$_SESSION['product_custom'][$k]['frosted'],$_SESSION['product_custom'][$k]['wt'],$k); 
								 
                                }
									
								//echo'<b style="color:red;"><pre>';print_r($_SESSION['product_custom']);echo'</b><br />';	
                              }
							   //for header cart
							  // $goto="shopping_cart1.php";
                             // tep_redirect(tep_href_link($goto, tep_get_all_get_params($parameters)));
							 
							 
							  if(isset($HTTP_GET_VARS['link'])){
								$goto=$HTTP_GET_VARS['link'].tep_get_all_get_params($parameters);
								tep_redirect($goto);
							  }else{
								$goto="shopping_cart1.php";
								tep_redirect(tep_href_link($goto, tep_get_all_get_params($parameters)));
							  }
							 
							 
                              break;
      case 'notify' :         if (tep_session_is_registered('customer_id')) {
                                if (isset($HTTP_GET_VARS['products_id'])) {
                                  $notify = $HTTP_GET_VARS['products_id'];
                                } elseif (isset($HTTP_GET_VARS['notify'])) {
                                  $notify = $HTTP_GET_VARS['notify'];
                                } elseif (isset($HTTP_POST_VARS['notify'])) {
                                  $notify = $HTTP_POST_VARS['notify'];
                                } else {
                                  tep_redirect(tep_href_link(basename($PHP_SELF), tep_get_all_get_params(array('action', 'notify'))));
                                }
                                if (!is_array($notify)) $notify = array($notify);
                                for ($i=0, $n=sizeof($notify); $i<$n; $i++) {
                                  $check_query = tep_db_query("select count(*) as count from " . TABLE_PRODUCTS_NOTIFICATIONS . " where products_id = '" . $notify[$i] . "' and customers_id = '" . $customer_id . "'");
                                  $check = tep_db_fetch_array($check_query);
                                  if ($check['count'] < 1) {
                                    tep_db_query("insert into " . TABLE_PRODUCTS_NOTIFICATIONS . " (products_id, customers_id, date_added) values ('" . $notify[$i] . "', '" . $customer_id . "', now())");
                                  }
                                }
                                tep_redirect(tep_href_link(basename($PHP_SELF), tep_get_all_get_params(array('action', 'notify'))));
                              } else {
                                $navigation->set_snapshot();
                                tep_redirect(tep_href_link(FILENAME_LOGIN, '', 'SSL'));
                              }
                              break;
      case 'notify_remove' :  if (tep_session_is_registered('customer_id') && isset($HTTP_GET_VARS['products_id'])) {
                                $check_query = tep_db_query("select count(*) as count from " . TABLE_PRODUCTS_NOTIFICATIONS . " where products_id = '" . $HTTP_GET_VARS['products_id'] . "' and customers_id = '" . $customer_id . "'");
                                $check = tep_db_fetch_array($check_query);
                                if ($check['count'] > 0) {
                                  tep_db_query("delete from " . TABLE_PRODUCTS_NOTIFICATIONS . " where products_id = '" . $HTTP_GET_VARS['products_id'] . "' and customers_id = '" . $customer_id . "'");
                                }
                                tep_redirect(tep_href_link(basename($PHP_SELF), tep_get_all_get_params(array('action'))));
                              } else {
                                $navigation->set_snapshot();
                                tep_redirect(tep_href_link(FILENAME_LOGIN, '', 'SSL'));
                              }
                              break;
      case 'cust_order' :     if (tep_session_is_registered('customer_id') && isset($HTTP_GET_VARS['pid'])) {
                                if (tep_has_product_attributes($HTTP_GET_VARS['pid'])) {
                                  tep_redirect(tep_href_link(FILENAME_PRODUCT_INFO, 'products_id=' . $HTTP_GET_VARS['pid']));
                                } else {
                                  $cart->add_cart($HTTP_GET_VARS['pid'], $cart->get_quantity($HTTP_GET_VARS['pid'])+1);
                                }
                              }
                              tep_redirect(tep_href_link($goto, tep_get_all_get_params($parameters)));
                              break;
    }
  }

  
  
 
// include the who's online functions
  require(DIR_WS_FUNCTIONS . 'whos_online.php');
  tep_update_whos_online();
 
// include the password crypto functions
  require(DIR_WS_FUNCTIONS . 'password_funcs.php');

// include validation functions (right now only email address)
  require(DIR_WS_FUNCTIONS . 'validations.php');

// split-page-results
  require(DIR_WS_CLASSES . 'split_page_results.php');

// infobox
  require(DIR_WS_CLASSES . 'boxes.php');

// auto activate and expire banners
  require(DIR_WS_FUNCTIONS . 'banner.php');
  tep_activate_banners();
  tep_expire_banners();

// auto expire special products
  require(DIR_WS_FUNCTIONS . 'specials.php');
  tep_expire_specials();

  require(DIR_WS_CLASSES . 'osc_template.php');
  $oscTemplate = new oscTemplate();

// calculate category path
  if (isset($HTTP_GET_VARS['cPath'])) {
    $cPath = $HTTP_GET_VARS['cPath'];
  } elseif (isset($HTTP_GET_VARS['products_id']) && !isset($HTTP_GET_VARS['manufacturers_id'])) {
    $cPath = tep_get_product_path($HTTP_GET_VARS['products_id']);
  } else {
    $cPath = '';
  }

  if (tep_not_null($cPath)) {
    $cPath_array = tep_parse_category_path($cPath);
    $cPath = implode('_', $cPath_array);
    $current_category_id = $cPath_array[(sizeof($cPath_array)-1)];
  } else {
    $current_category_id = 0;
  }

// include the breadcrumb class and start the breadcrumb trail
  require(DIR_WS_CLASSES . 'breadcrumb.php');
  $breadcrumb = new breadcrumb;

  $breadcrumb->add(HEADER_TITLE_TOP, HTTP_SERVER);
  $breadcrumb->add(HEADER_TITLE_CATALOG, tep_href_link(FILENAME_DEFAULT));

// add category names or the manufacturer name to the breadcrumb trail
  if (isset($cPath_array)) {
    for ($i=0, $n=sizeof($cPath_array); $i<$n; $i++) {
      $categories_query = tep_db_query("select categories_name from " . TABLE_CATEGORIES_DESCRIPTION . " where categories_id = '" . (int)$cPath_array[$i] . "' and language_id = '" . (int)$languages_id . "'");
      if (tep_db_num_rows($categories_query) > 0) {
        $categories = tep_db_fetch_array($categories_query);
        $breadcrumb->add($categories['categories_name'], tep_href_link(FILENAME_DEFAULT, 'cPath=' . implode('_', array_slice($cPath_array, 0, ($i+1)))));
      } else {
        break;
      }
    }
  } elseif (isset($HTTP_GET_VARS['manufacturers_id'])) {
    $manufacturers_query = tep_db_query("select manufacturers_name from " . TABLE_MANUFACTURERS . " where manufacturers_id = '" . (int)$HTTP_GET_VARS['manufacturers_id'] . "'");
    if (tep_db_num_rows($manufacturers_query)) {
      $manufacturers = tep_db_fetch_array($manufacturers_query);
      $breadcrumb->add($manufacturers['manufacturers_name'], tep_href_link(FILENAME_DEFAULT, 'manufacturers_id=' . $HTTP_GET_VARS['manufacturers_id']));
    }
  }

// add the products model to the breadcrumb trail
  if (isset($HTTP_GET_VARS['products_id'])) {
    $model_query = tep_db_query("select products_model from " . TABLE_PRODUCTS . " where products_id = '" . (int)$HTTP_GET_VARS['products_id'] . "'");
    if (tep_db_num_rows($model_query)) {
      $model = tep_db_fetch_array($model_query);
      $breadcrumb->add($model['products_model'], tep_href_link(FILENAME_PRODUCT_INFO, 'cPath=' . $cPath . '&products_id=' . $HTTP_GET_VARS['products_id']));
    }
  }

// initialize the message stack for output messages
  require(DIR_WS_CLASSES . 'message_stack.php');
  $messageStack = new messageStack;
  
  // Discount Code 2.6 - start
if (MODULE_ORDER_TOTAL_DISCOUNT_STATUS == 'true') {
if (!tep_session_is_registered('sess_discount_code'))
tep_session_register('sess_discount_code');
if (!empty($HTTP_GET_VARS['discount_code'])) $sess_discount_code =
tep_db_prepare_input($HTTP_GET_VARS['discount_code']);
if (!empty($HTTP_POST_VARS['discount_code'])) $sess_discount_code =
tep_db_prepare_input($HTTP_POST_VARS['discount_code']);
}
// Discount Code 2.6 - end
 

/*ani code */ 
  function calCulateQuantity($array,$customer_id){
    global $wishlist, $add_to_wish;

    //CUSTOMER ID...
    $customer_id=$customer_id;
    $_SESSION['product_final1']=array();
    $_SESSION['customer_shopping_cart_product']=array();


    $l=0;
    $m=0;		
    for ($l=0; $l < sizeof($_SESSION['product_custom']); $l++ ) {
		//echo'<b style="color:red">test</b></br />';
      $currnetid=$_SESSION['product_custom'][$l]['id'];
      $currnetval=$_SESSION['product_custom'][$l]['val'];
      $currnetCustom=$_SESSION['product_custom'][$l]['custom'];
	  
	  $currnetFrosted=$_SESSION['product_custom'][$l]['frosted'];
      if(isset($_SESSION['product_custom'][$l]['id'])) {
        if(searchArray($_SESSION['product_final1'], $currnetid) && searchArrayVal($_SESSION['product_final1'], $currnetval,$currnetid) && searchArrayVal1($_SESSION['product_final1'], $currnetCustom,$currnetid)||($currnetid=='')){
			  } else {
				 	$totalq=0;
						for($k=$l;$k<sizeof($_SESSION['product_custom']);$k++){
							if(($currnetid==$_SESSION['product_custom'][$k]['id'])&&($currnetval==$_SESSION['product_custom'][$k]['val'])&&($currnetCustom==$_SESSION['product_custom'][$k]['custom'])){
                if(!$add_to_wish) {
                  $totalq++;
                }
							}
						}
            if($add_to_wish) {
                if(!$finalArrayAdded) 
                $wishlist->addFinalArray(array('id'=>$_SESSION['product_custom'][$l]['id'],'val'=>$_SESSION['product_custom'][$l]['val'],'qty'=>$totalq,'custom'=>$currnetCustom,'frosted'=>$currnetFrosted,'wt'=>$_SESSION['product_custom'][$l]['wt'],'banner_color'=>$_SESSION['product_custom'][$l]['banner_color'],'banner_height'=>$_SESSION['product_custom'][$l]['banner_height']));
            } else {
              //Default code...
              // $_SESSION['product_final1'][$m]=array('id'=>$_SESSION['product_custom'][$l]['id'],'val'=>$_SESSION['product_custom'][$l]['val'],'qty'=>$totalq,'custom'=>$currnetCustom,'wt'=>$_SESSION['product_custom'][$l]['wt']);


              //customer_shopping_cart_product START-*******
          //    if (empty($customer_id)) {//if Customer not LoggedIn

              $_SESSION['product_final1'][$m]=array('id'=>$_SESSION['product_custom'][$l]['id'],'val'=>$_SESSION['product_custom'][$l]['val'],'qty'=>$totalq,'custom'=>$currnetCustom,'frosted'=>$currnetFrosted,'wt'=>$_SESSION['product_custom'][$l]['wt'],'banner_color'=>$_SESSION['product_custom'][$l]['banner_color'],'banner_height'=>$_SESSION['product_custom'][$l]['banner_height']);

/*
              }else{//else Customer LoggedIn
                
                //CREATE A VARIBALE WITH PRODUCT_VALUES.....
                $_SESSION['customer_shopping_cart_product'][$m] = array('id'=>$_SESSION['product_custom'][$l]['id'],'val'=>$_SESSION['product_custom'][$l]['val'],'qty'=>$totalq,'custom'=>$currnetCustom,'frosted'=>$currnetFrosted,'wt'=>$_SESSION['product_custom'][$l]['wt']);


                //FETCH CUSTOMER IF ADDED PRODUCT FROM TABLE...
                // $querycartdata = tep_db_query("SELECT * FROM `customers_basket` WHERE `customers_id` ='$customer_id' AND `product_val`LIKE '" . $_SESSION['customer_shopping_cart_product'][$m]['val'] . "'");

                // $querycartdata = tep_db_query("SELECT * FROM `customers_basket` WHERE `customers_id` ='$customer_id'");


                // $getcartdata = tep_db_fetch_array($querycartdata);
                // if(!$getcartdata){//insert
                
				
				
				//for show shopping cart data
				
				
				$queryinsert=tep_db_query("SELECT * FROM `customers_basket` where `customers_id`='" . $customer_id . "' AND `products_id`='" . $_SESSION['customer_shopping_cart_product'][$m]['id'] . "' AND `product_val`='" . $_SESSION['customer_shopping_cart_product'][$m]['val'] . "'");
				 $check_productcart = tep_db_fetch_array($queryinsert);
				$dbproid=$check_productcart['products_id'];
				if(empty($dbproid)){
				//insert	qty
				//echo'<b style="color:red;"><pre>'; print_r($_SESSION['customer_shopping_cart_product']); echo'</b>';
				
				
				$queryupdat =tep_db_query("INSERT INTO `customers_basket`(`customers_id`, `products_id`, `customers_basket_quantity`, `product_val`, `product_custom`, `product_frosted`, `product_wt`, `customers_basket_date_added`) VALUES ('" . $customer_id . "', '" . $_SESSION['customer_shopping_cart_product'][$m]['id'] . "', '" . $_SESSION['customer_shopping_cart_product'][$m]['qty'] . "', '" . $_SESSION['customer_shopping_cart_product'][$m]['val'] . "', '" . $_SESSION['customer_shopping_cart_product'][$m]['custom'] . "', '" . $_SESSION['customer_shopping_cart_product'][$m]['frosted'] . "', '" . $_SESSION['customer_shopping_cart_product'][$m]['wt'] . "','" . date('Ymd') . "')");
				}
				else{
					$dbqty=$check_productcart['customers_basket_quantity'];
					$newqtyss=$totalq;
					//update
					$queryupdat = tep_db_query("UPDATE `customers_basket` SET `product_val` = '" . $_SESSION['customer_shopping_cart_product'][$m]['val'] . "', `product_custom` = '" . $_SESSION['customer_shopping_cart_product'][$m]['custom'] . "', `product_frosted` = '" . $_SESSION['customer_shopping_cart_product'][$m]['frosted'] . "', `product_wt` = '" . $_SESSION['customer_shopping_cart_product'][$m]['wt'] . "'  WHERE `customers_id`='" . $customer_id . "' AND `products_id`='" . $_SESSION['customer_shopping_cart_product'][$m]['id'] . "' AND `product_val`='" . $_SESSION['customer_shopping_cart_product'][$m]['val'] . "'");
				}
				
					
                 // 
//hide if got solution
  //$_SESSION['product_final1'][$m]=array('id'=>$_SESSION['product_custom'][$l]['id'],'val'=>$_SESSION['product_custom'][$l]['val'],'qty'=>$totalq,'custom'=>$currnetCustom,'wt'=>$_SESSION['product_custom'][$l]['wt']);






                // }else{//update

                  // $iddd=$getcartdata['id'];
                  // $queryupdat=tep_db_query("UPDATE `customer_shopping_cart` SET `product_qty`='" . $_SESSION['customer_shopping_cart_product'][$m]['qty'] . "' WHERE `id`='$iddd' ");


                  // tep_db_query("insert into " . CUSTOMERS_BASKET . " (customers_id, products_id, customers_basket_quantity) values ('" . $customer_id . "', '" . $_SESSION['customer_shopping_cart_product'][$m]['id'] . "', '" . $_SESSION['customer_shopping_cart_product'][$m]['qty'] . "')");




                  // $queryupdat = tep_db_query("UPDATE `customers_basket`  SET `product_val` = '" . $_SESSION['customer_shopping_cart_product'][$m]['val'] . "', `product_custom` = '" . $_SESSION['customer_shopping_cart_product'][$m]['custom'] . "', `product_wt` = '" . $_SESSION['customer_shopping_cart_product'][$m]['wt'] . "'  WHERE `customers_id`='" . $customer_id . "' AND `products_id`='" . $_SESSION['customer_shopping_cart_product'][$m]['id'] . "'");

                // }
              }
*/
              
            }
            $m++;
          }
				}
			}
			
			
			//echo'<b style="color:red;"><pre>'; print_r($_SESSION['customer_shopping_cart_product']); echo'</b>';
		}	
		
		
			
	if(isset($_POST['quote_id']))
{


	$con=mysqli_connect(DB_SERVER,DB_SERVER_USERNAME,DB_SERVER_PASSWORD,DB_DATABASE) or die(mysqli_connect_error());
	

$_SESSION['product_custom']=array();
$l=0;
	$quote_id=$_POST['quote_id'];
	
	$query_quote_data="SELECT * FROM customers_quote_data WHERE quote_id='$quote_id'";
	$exe_qupte=mysqli_query($con,$query_quote_data);
	while($get_quote_data=mysqli_fetch_array($exe_qupte))
	{
	$customers_id=$get_quote_data['customers_id'];
	$productid=$get_quote_data['products_id'];
	$qtyss=$get_quote_data['customers_basket_quantity'];
	$product_val=$get_quote_data['product_val'];
	$product_customss=$get_quote_data['product_custom'];
	$product_wt=$get_quote_data['product_wt'];
/*
$query_checkss="SELECT * customers_basket WHERE customers_id='$customers_id' AND products_id='$productid' AND product_val='$product_val'";
$exe_checkss=mysqli_query($con,$query_checkss);
$get_checkss=mysqli_fetch_array($exe_checkss);
$iddddd=$get_checkss[0];
 if ($iddddd) {
	
	
	$query_old_qty="SELECT * FROM customers_basket WHERE customers_id='$customers_id' AND products_id='$productid' AND product_val='$product_val'";
	$exe_oldss=mysqli_query($con,$query_old_qty);
	$get_qty=mysqli_fetch_array($exe_oldss);
	$neww_qty=$get_qty['customers_basket_quantity']+$qtyss;
	$basket_id=$get_qty['customers_basket_id'];
	//update qty 
	$update_qty="UPDATE `customers_basket` SET `customers_basket_quantity`='$neww_qty' WHERE `customers_basket_id` ='$basket_id'";
	$exe_query=mysqli_query($con,$update_qty);
	
 }
 else{*/
	//insert 
	// $insert_data="INSERT INTO `customers_basket`(`customers_id`, `products_id`, `customers_basket_quantity`, `product_val`, `product_custom`, `product_wt`, `customers_basket_date_added`) VALUES ('$customers_id','$productid','$qtyss','$product_val','$product_customss','$product_wt','" . date('Ymd') . "')";
	 // $exe_query=mysqli_query($con,$insert_data);
 //}
	
					// $_SESSION['product_custom'][$l]['id']=$productid;
					// $_SESSION['product_custom'][$l]['val']=$product_val;
					// $_SESSION['product_custom'][$l]['qty']=$qtyss;
					// $_SESSION['product_custom'][$l]['custom']=$product_customss;
					// $_SESSION['product_custom'][$l]['wt']=$product_wt;

$_SESSION['product_custom'][$l] = array('id'=>$productid,'val'=>$product_val,'qty'=>$qtyss,'custom'=>$product_customss,'wt'=>$product_wt);
//$cart->add_cart($productid, $cart->get_quantity($qtyss)+1);
//$cart->add_cart($productid,  $qtyss);
$attributes='';
 $cart->add_cart($productid, $cart->get_quantity(tep_get_uprid($productid, $attributes))+1, $attributes,$product_val,$qtyss,$product_customss,$product_frosteds,$product_wt,$l);

$l++;
	}
	//echo'<pre>';print_r($_SESSION['product_custom']);
	//calCulateQuantity($_SESSION['product_custom'],$customer_id);



///fdgdgdrrd




//echo'<pre>';print_r($_SESSION['product_custom']);	

}

		
		
		
		
		
		
		
	//echo'<b style="color:red">'; print_r($_SESSION['product_final1']); echo'</b></br />';
function searchArray($myarray, $id) {
    foreach ($myarray as $item) {
        if ($item['id'] == $id)
            return true;
    }
    return false;
}
function searchArrayVal($myarray,$id,$currnetid) {
    foreach ($myarray as $item) {
        if ($item['val'] == $id&&$item['id']==$currnetid)
            return true;
    }
    return false;
}
function searchArrayVal1($myarray,$id,$currnetid) {
    foreach ($myarray as $item) {
        if ($item['custom'] == $id&&$item['id']==$currnetid)
            return true;
    }
    return false;
}
					
/*ani code */

 /***** Begin View Counter *****/
  require(DIR_WS_INCLUDES . 'view_counter_defines.php');

  if (VIEW_COUNTER_ENABLED == 'true' && strpos(basename($_SERVER['PHP_SELF']), 'googlefeeder.php') === FALSE) {
      include(DIR_WS_MODULES . FILENAME_VIEW_COUNTER);
  }
  /***** End View Counter  *****/








  
?>









