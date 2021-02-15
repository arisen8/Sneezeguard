<?php
  define('HTTP_SERVER', 'https://www.sneezeguard.com');
  define('HTTPS_SERVER', 'https://www.sneezeguard.com');
  define('ENABLE_SSL', true);
  define('HTTP_COOKIE_DOMAIN', $_SERVER['HTTP_HOST']);
  define('HTTPS_COOKIE_DOMAIN', $_SERVER['HTTPS_HOST']);
  define('HTTP_COOKIE_PATH', '/');
  define('HTTPS_COOKIE_PATH', '/');
  define('DIR_WS_HTTP_CATALOG', '/');
  define('DIR_WS_HTTPS_CATALOG', '/');
  define('DIR_WS_IMAGES', 'images/');
  define('DIR_WS_ICONS', DIR_WS_IMAGES . 'icons/');
  define('DIR_WS_INCLUDES', 'includes/');
  define('DIR_WS_FUNCTIONS', DIR_WS_INCLUDES . 'functions/');
  define('DIR_WS_CLASSES', DIR_WS_INCLUDES . 'classes/');
  define('DIR_WS_MODULES', DIR_WS_INCLUDES . 'modules/');
  define('DIR_WS_LANGUAGES', DIR_WS_INCLUDES . 'languages/');

  define('DIR_WS_DOWNLOAD_PUBLIC', 'pub/');
  define('DIR_FS_CATALOG', '/home6/esneezeg/public_html/sneezeguard/');
  define('DIR_FS_DOWNLOAD', DIR_FS_CATALOG . 'download/');
  define('DIR_FS_DOWNLOAD_PUBLIC', DIR_FS_CATALOG . 'pub/');


define('IMAGE_SERVER_A', 'https://www.sneezeguard.com/images/cookies/');

define('IMAGE_SERVER_B', 'https://www.sneezeguard.com/images/cookies/');

define('IMAGE_SERVER_C', 'https://www.sneezeguard.com/images/cookies/');



// BOF - Zappo - Option Types v2 - defines for Option Type feature
  define('OPTIONS_TYPE_SELECT', 0);
  define('OPTIONS_TYPE_TEXT', 1);
  define('OPTIONS_TYPE_TEXTAREA', 2);
  define('OPTIONS_TYPE_RADIO', 3);
  define('OPTIONS_TYPE_CHECKBOX', 4);
  define('OPTIONS_TYPE_FILE', 5);
  define('OPTIONS_TYPE_IMAGE', 6);
  define('TEXT_PREFIX', 'txt_');
  define('UPLOAD_PREFIX', 'upload_');
  define('TEXT_UPLOAD_NAME', 'CUSTOMER-INPUT');
  define('OPTIONS_VALUE_TEXT_ID', 0);
  define('SHIPPING_MAX_WEIGHT', 60);
  
// EOF - Zappo - Option Types v2 - defines for Option Type feature

  define('DB_SERVER', 'localhost');
  define('DB_SERVER_USERNAME', 'esneezeg_andy149');
  define('DB_SERVER_PASSWORD', 'Qwdf#958');
  define('DB_DATABASE', 'esneezeg_new_sneezeguard');
  define('USE_PCONNECT', 'false');
  define('STORE_SESSIONS', 'mysql');
  define('CFG_TIME_ZONE', 'Asia/Calcutta');
  
  
  
  
  
  
  
  
  
    // reCAPTCHA - start
  //define('RECAPTCHA_PUBLIC_KEY', 'your Site key'); // replace your_public_key with your reCAPTCHA public key (from the API Signup Page https://www.google.com/recaptcha/admin/create?app=php)
    define('RECAPTCHA_PUBLIC_KEY', '6Ldlw9wUAAAAAFZL3__ylkwImZtKnfwPmGrPaSSn'); // replace your_public_key with your reCAPTCHA public key (from the API Signup Page https://www.google.com/recaptcha/admin/create?app=php)

  
  //define('RECAPTCHA_PRIVATE_KEY', 'your Secret key'); // replace your_private_key with your reCAPTCHA private key (from the API Signup Page https://www.google.com/recaptcha/admin/create?app=php)
 

 define('RECAPTCHA_PRIVATE_KEY', '6Ldlw9wUAAAAABrFFw2eog3B_3Gh6NJFU4MRXWyc'); // replace your_private_key with your reCAPTCHA private key (from the API Signup Page https://www.google.com/recaptcha/admin/create?app=php)
  // reCAPTCHA - end
?>