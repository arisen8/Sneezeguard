<?php
/*
  Leapfrog, Realtime osCommerce Visitor Tracking
  http://www.oscommerce-tips.com

  Copyright (C) 2006  Ed Brocklebank

  This program is free software; you can redistribute it and/or
  modify it under the terms of the GNU General Public License
  as published by the Free Software Foundation; either version 2
  of the License, or (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.
*/

/*
  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License

  Written by Ed Brocklebank.
	Based on the code by Andrew Edmond.
  10th December 2006
*/

  function lf_update_tracking() 
  {
    global $customer_id, $languages_id, $HTTP_GET_VARS, $HTTP_SERVER_VARS, $spider_flag;
		
		// Used to store visitors real name. Only available if they are logged in.
		$wo_real_name = '';

		// Check is the customer exists in our database
    if (isset($customer_id)) {
		
			// Yes they do
      $wo_customer_id = $customer_id;

      $customer_query = tep_db_query("select customers_firstname, customers_lastname from " . TABLE_CUSTOMERS . " where customers_id = '" . $customer_id . "'");
      $customer = tep_db_fetch_array($customer_query);

      $wo_full_name = tep_db_input($customer['customers_firstname'] . ' ' . $customer['customers_lastname']);
			$wo_real_name = tep_db_input($customer['customers_firstname'] . ' ' . $customer['customers_lastname']);
			
    } else {
		
			// No they don't
      $wo_customer_id = '';
			
			// Is the visitor a bot? If so, show it's name.
			// The $spider_flag variable is set in application_top.php.
			if ($spider_flag == true) {
			
				// It's a bot. Extract the bots name
				$wo_full_name = '[Bot] ';
				
				$user_agent = getenv('HTTP_USER_AGENT');
				if (tep_not_null($user_agent)) {
				
					// Bot string is of form - "Mozilla/5.0 (compatible; Yahoo! Slurp; http://help.yahoo.com/help/us/ysearch/slurp)"
				
					$needle = '(compatible;';
					$bot_name_start_pos = strpos($user_agent, $needle);
					$bot_name = substr($user_agent, $bot_name_start_pos+strlen($needle));
					$bot_name_end_pos = strpos($bot_name, ';');
					$bot_name = substr($bot_name, 0, $bot_name_end_pos);
					$wo_full_name .= tep_db_input(tep_db_prepare_input($bot_name));
					
				} else {
					$wo_full_name .= 'Unknown spider';
				}
				
			} else {
			  // This is just a regular guest.
     	 	$wo_full_name = 'Guest';
			}
			
    }

    $wo_session_id = tep_session_id();
    $wo_ip_address = getenv('REMOTE_ADDR');
		
		// Get the page URL. On some servers getenv('REQUEST_URI')
		// doesn't work, so try different method.
		$wo_last_page_url = getenv('REQUEST_URI');
		if (!isset($wo_last_page_url)) {
			$myurl = getenv('PATH_INFO') . getenv('QUERY_STRING');
			$wo_last_page_url = tep_db_input($myurl);
		}

		// Get a description of the page the visitor is 
		// currently viewing. This is either the product
		// or category name.
		if ($HTTP_GET_VARS['products_id']) {
		
			// Visitor is looking at a particular item page
			$page_desc_query = tep_db_query("select pd.products_name, p.products_image from " .
																			TABLE_PRODUCTS_DESCRIPTION . " pd, " . TABLE_PRODUCTS . " p where pd.products_id = '" .
																			(int)$HTTP_GET_VARS['products_id'] . "' and pd.language_id = '" .
																			$languages_id . "' and pd.products_id = p.products_id");
			$page_desc_values = tep_db_fetch_array($page_desc_query);
			$page_desc = $page_desc_values['products_name'];
			$page_thumb = $page_desc_values['products_image'];
			
		} elseif ($HTTP_GET_VARS['cPath']) {
		
			// Visitor is browsing categories
			$cPath = $HTTP_GET_VARS['cPath'];
			$cPath_array = tep_parse_category_path($cPath);
			$cPath = implode('_', $cPath_array);
			
			$current_category_id = $cPath_array[(sizeof($cPath_array)-1)];
			$page_desc_query = tep_db_query("select cd.categories_name, c.categories_image from " . TABLE_CATEGORIES_DESCRIPTION .
			                                " cd, " . TABLE_CATEGORIES . " c " .
																			" where cd.categories_id = '" . $current_category_id . "' and cd.language_id = '" .
																			$languages_id . "' and cd.categories_id = c.categories_id");
			$page_desc_values = tep_db_fetch_array($page_desc_query);
			$page_desc = $page_desc_values['categories_name'];
			$page_thumb = $page_desc_values['categories_image'];
			
		} else {
		
			// Just use the page title
			$page_desc = tep_db_input(HEADING_TITLE);
			$page_thumb = "";
			
		}
		
		// Get referring page
    $referer_url = tep_db_input(tep_db_prepare_input($HTTP_SERVER_VARS['HTTP_REFERER']));

		// Get the click time
    $current_time = time();
		
		// Insert all the information we have gathered into the database
		// Check if we need to track robots and spiders?
    if ( (LEAPFROG_EXCLUDE_ROBOTS == 'true' && $spider_flag != true) || LEAPFROG_EXCLUDE_ROBOTS == 'false') {
			$insert_query = "insert into leapfrog" .
											" (customer_id, customer_name, customer_realname, session_id, ip_address, click_time, page_url, page_title, referer_url, thumb_url)" .
											' values ("' . $wo_customer_id . '", "' . $wo_full_name . '", "' . $wo_real_name . '", "' . $wo_session_id . '", "' . $wo_ip_address .
											'", "' . $current_time . '", "' . $wo_last_page_url . '", "' . $page_desc . '", "' . $referer_url . '", "' . $page_thumb . '")';
      tep_db_query($insert_query);
		}
  }

?>