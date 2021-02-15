<?php
/*
  $Id: view_counter_install, v 1.0 2012/07/01 by Jack York

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce
  Portions Copyright 2012 oscommerce-solution.com

  Released under the GNU General Public License
*/

  require('includes/application_top.php');

  if (isset($_POST['action']) && $_POST['action'] == 'process') {
      if (isset($_POST['delete'])) {
          unlink('view_counter_install.php');
          tep_redirect(tep_href_link('index.php'));
          exit;
      } else if (isset($_POST['goto'])) {    
          tep_redirect(tep_href_link('index.php'));
      } else {  //catch-all
          tep_redirect(tep_href_link('index.php'));
      }    
  } 
  $db_error = false;

  $db_check_query = tep_db_query("SHOW TABLES LIKE 'view_counter%'");

  if (tep_db_num_rows($db_check_query) > 0) {
      echo 'Looks like View Counter is already installed. Aborting...';
      tep_exit();
  }


  $db_sql_array = array(

                  array("DROP TABLE IF EXISTS view_counter"),
                  array("DROP TABLE IF EXISTS view_counter_storage"),
                  array("DROP TABLE IF EXISTS view_counter_banned"),
                  array("DROP TABLE IF EXISTS view_counter_block_list"),
                  array("DROP TABLE IF EXISTS view_counter_blocked"),
                  array("DROP TABLE IF EXISTS view_counter_emails"),
                  array("DROP TABLE IF EXISTS view_counter_flags"),
                  array("DROP TABLE IF EXISTS view_counter_session_kill"),
                  array("DROP TABLE IF EXISTS view_counter_settings"),
                  array("DROP TABLE IF EXISTS view_counter_ignore"),

                  array("CREATE TABLE view_counter (ip_active tinyint (1) DEFAULT 1,isbot tinyint (1) DEFAULT 0,isadmin varchar (28) DEFAULT '',ip_number INT( 64 ) UNSIGNED NOT NULL,session_id varchar (128) DEFAULT '',file_name varchar (64) DEFAULT '',arg varchar (64) DEFAULT '',view_count int (11) DEFAULT 0,last_date datetime NOT NULL,bot_name VARCHAR (64) DEFAULT '', referrer VARCHAR (256) DEFAULT '', referrer_query VARCHAR (256) DEFAULT '', user_agent VARCHAR (256) DEFAULT '', language_id int DEFAULT '1' NOT NULL,index idx_file_name (file_name),index idx_ip_number (ip_number),index idx_language_id (language_id)) ENGINE=InnoDB"),
                  array("CREATE TABLE view_counter_storage (ip_active tinyint (1) DEFAULT 1,isbot tinyint (1) DEFAULT 0,isadmin varchar (28) DEFAULT '',ip_number INT( 64 ) UNSIGNED NOT NULL,session_id varchar (128) default '',file_name varchar (64) DEFAULT '',arg varchar (64) DEFAULT '',view_count int (11) DEFAULT 0,last_date datetime NOT NULL,bot_name VARCHAR (64) DEFAULT '', referrer VARCHAR (256) DEFAULT '', referrer_query VARCHAR (256) DEFAULT '', user_agent VARCHAR (256) DEFAULT '', language_id int DEFAULT '1' NOT NULL,index idx_file_name (file_name),index idx_ip_number (ip_number),index idx_language_id (language_id)) ENGINE=InnoDB"),
                  array("CREATE TABLE view_counter_banned (ip_number INT( 64 ) UNSIGNED NOT NULL, ip_string VARCHAR (64) NULL DEFAULT NULL, ignore_status tinyint (1) DEFAULT '0' NOT NULL, index idx_ip_number (ip_number), index idx_ip_string (ip_string)) ENGINE=InnoDB"),
                  array("CREATE TABLE view_counter_block_list (name_to_block VARCHAR (32) NOT NULL, index idx_name_to_block (name_to_block)) ENGINE=InnoDB"),
                  array("CREATE TABLE view_counter_blocked (ip_number INT( 64 ) UNSIGNED NOT NULL, country VARCHAR (32) NULL DEFAULT NULL, count int (11) DEFAULT '0' NOT NULL, index idx_ip_number (ip_number)) ENGINE=InnoDB"),
                  array("CREATE TABLE view_counter_emails (ip_number INT( 64 ) UNSIGNED NOT NULL, sent TINYINT ( 1 ) DEFAULT 0, index idx_ip_number (ip_number)) ENGINE=InnoDB"),
                  array("CREATE TABLE view_counter_flags (ip_number INT( 64 ) UNSIGNED NOT NULL, data blob DEFAULT '', index idx_ip_number (ip_number)) ENGINE=InnoDB"),
                  array("CREATE TABLE view_counter_session_kill (session_id varchar (128) DEFAULT '', session_msg text DEFAULT '') ENGINE=InnoDB"),
                  array("CREATE TABLE view_counter_settings (page_name varchar (32) DEFAULT '', sort_by varchar (64) DEFAULT '', sort_by_array tinyblob DEFAULT '', show_type varchar (64) DEFAULT '', show_type_array tinyblob DEFAULT '', sort_direction_array tinyblob DEFAULT '', view_active varchar (10) DEFAULT '', view_spoofed varchar (10) DEFAULT '', display_table varchar (10) DEFAULT '', colors mediumblob DEFAULT '', group_data mediumblob DEFAULT '') ENGINE=InnoDB"),
                  array("CREATE TABLE view_counter_ignore (ip_number INT( 64 ) UNSIGNED NOT NULL, UNIQUE KEY idx_ip_number (ip_number)) ENGINE=InnoDB"));


  // create tables
  foreach ($db_sql_array as $sql_array) {
    foreach ($sql_array as $value) {
      if (tep_db_query($value) == false) {
        $db_error = true;
      }
    }
  }

      $db_query = tep_db_query("select max(configuration_group_id) as id from configuration_group ");
      $max = tep_db_fetch_array($db_query);
      $configuration_group_id = $max['id'] + 1;

  // create configuration group
      $db_query = "INSERT INTO configuration_group (configuration_group_id, configuration_group_title, configuration_group_description, sort_order, visible ) VALUES ('" . $configuration_group_id . "', 'View Counter', 'View Counter site-wide options', '22' , '1')";

      if (tep_db_query($db_query) == false) {
    $db_error = true;
  } else {
    $sortID = 1;

    // create configuration variables
    $fields = " configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added, use_function ";
    $fields_short = " configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added ";
    
    $db_sql_array = array(array("INSERT INTO configuration (" . $fields . ")        VALUES ('ON/OFF', 'VIEW_COUNTER_ENABLED', 'false', '<center><b><h2>View Counter</h2><i>Developed by:</i><br>Jack York @ Oscommerce Solution<br><a href=\"\/\/oscommerce-solution.com\//check_unreleased_updates.php?id=1.6&name=ViewCounter\" target=\"_blank\">Check Updates</a></b></center><br>Site monitoring', '" . $configuration_group_id . "', '" . ($sortID++). "', 'tep_cfg_select_option(array(\'true\', \'false\'), ', now(), NULL)"),
                          array("INSERT INTO configuration (" . $fields_short . ")  VALUES ('Active Time','VIEW_COUNTER_ACTIVE_TIME', '10', 'The number of minutes to show active visitors.', '" . $configuration_group_id . "', '" . ($sortID++). "', now())"),
                          array("INSERT INTO configuration (" . $fields . ")        VALUES ('Autofill Create Account', 'VIEW_COUNTER_AUTOFILL', 'false', 'Autofill some of the fields on the create account and new address pages.<br>(true=on false=off)', '" . $configuration_group_id . "', '" . ($sortID++). "', 'tep_cfg_select_option(array(\'true\', \'false\'), ', now(), NULL)"),
                          array("INSERT INTO configuration (" . $fields . ")        VALUES ('Bad Bot Trap', 'VIEW_COUNTER_BAD_BOT_TRAP', 'Email', 'Choose how to handle the bad bot trap.<br><br><b>Ban:</b> Ban the IP<br><b>Email:</b> Send an Email containing the IP<br><b>Both:</b> Both of the above<br><b>Off:</b> Nothing will be done', '" . $configuration_group_id . "', '" . ($sortID++). "', 'tep_cfg_select_option(array(\'Ban\', \'Email\', \'Both\', \'Off\'), ', now(), NULL)"),
                          array("INSERT INTO configuration (" . $fields . ")        VALUES ('Block Countries Shop', 'VIEW_COUNTER_BLOCK_COUNTRIES_SHOP', 'Off', '<br><b>Off:</b> Not Enabled.<br><br><b>Internal Only:</b> Only use the internal database.<br><br><b>Internal & External:</b> Use the internal database and external sites. More likely to find the country but may slow the site down.', '" . $configuration_group_id . "', '" . ($sortID++). "', 'tep_cfg_select_option(array(\'Off\', \'Internal\', \'External\'), ', now(), NULL)"),
                          array("INSERT INTO configuration (" . $fields . ")        VALUES ('Block Countries Allow Bots', 'VIEW_COUNTER_BLOCK_COUNTRIES_BOTS', 'Off', '<b>Off</b>: If block countries shop is enabled, block all, even search engines.<br><br><b>On</b>: If block countries shop is enabled, do not block search engines.', '" . $configuration_group_id . "', '" . ($sortID++). "', 'tep_cfg_select_option(array(\'Off\', \'On\'), ', now(), NULL)"), 
                          array("INSERT INTO configuration (" . $fields . ")        VALUES ('Countries Check Admin', 'VIEW_COUNTER_COUNTRIES_CHECK_ADMIN', 'Internal', '<br><b>Internal:</b> Only use the internal database.<br><br><b>External:</b> Use the internal database and external sites. This is more likely to find the country but may slow the site down.', '" . $configuration_group_id . "', '" . ($sortID++). "', 'tep_cfg_select_option(array(\'Internal\', \'External\'), ', now(), NULL)"),
                          
                          array("INSERT INTO configuration (" . $fields_short . ")  VALUES ('<font color=purple>Data Skimmers Minimum Count (Pro Version Only)</font>','VIEW_COUNTER_DATA_SKIMMER_MIN_COUNT', '100', 'The minimum number of clicks before an IP is considered to be a skimmer.', '" . $configuration_group_id . "', '" . ($sortID++). "', now())"),
                          array("INSERT INTO configuration (" . $fields . ")        VALUES ('<font color=purple>Data Skimmers Show Bots (Pro Version Only)</font>','VIEW_COUNTER_DATA_SKIMMER_SHOW_BOTS', 'false', 'Include search bots when evaluating skimmers. This may be useful to identify bad bots and spoofers. If enabled, be careful when banning any that show since they may be legitimate bots.<br>(true=on false=off)', '" . $configuration_group_id . "', '" . ($sortID++). "', 'tep_cfg_select_option(array(\'true\', \'false\'), ', now(), NULL)"),
                          array("INSERT INTO configuration (" . $fields_short . ")  VALUES ('<font color=purple>Data Skimmers Period of Time (Pro Version Only)</font>','VIEW_COUNTER_DATA_SKIMMER_PERIOD', '24', 'The amount of time, in hours, to check for skimmers. So 24 would mean to check the log for the last 24 hours.', '" . $configuration_group_id . "', '" . ($sortID++). "', now())"),

                          array("INSERT INTO configuration (" . $fields_short . ")  VALUES ('Date Format','VIEW_COUNTER_DATE_FORMAT', '%a, %D %T', 'The format of the displayed date and time. This requires a valid string so only change it if you are familiar with the format.<br><br><b>12 hr:</b> %a, %D %r => Sun, 14th 01:39:56 PM<br><b>24 hr:</b> %a, %D %T => Sun, 14th 13:39:56<br><br>', '" . $configuration_group_id . "', '" . ($sortID++). "', now())"),
                          array("INSERT INTO configuration (" . $fields_short . ")  VALUES ('Force Reset','VIEW_COUNTER_FORCE_RESET', '2', 'The maximum number of days to keep the IP\'s in the database. The View counter table will grow very large if not cleared and data over a few days is probably of no use.', '" . $configuration_group_id . "', '" . ($sortID++). "', now())"),
                          array("INSERT INTO configuration (" . $fields_short . ")  VALUES ('Force Reset Storage','VIEW_COUNTER_FORCE_RESET_STORAGE', '14', 'The maximum number of days to keep the IP\'s in the storage table. This table is used for reports. It will grow very large if not cleared on a regular basis.', '" . $configuration_group_id . "', '" . ($sortID++). "', now())"),
                          array("INSERT INTO configuration (" . $fields_short . ")  VALUES ('Good IP List','VIEW_COUNTER_GOOD_IP_LIST', '', 'Ignore these IP\'s when banning. Use a comma separated list for multiple IP\'s.', '" . $configuration_group_id . "', '" . ($sortID++). "', now())"),
                          array("INSERT INTO configuration (" . $fields_short . ")  VALUES ('Hide Admin Links','VIEW_COUNTER_HIDE_ADMIN_LINKS', '', 'Do not show admin links for these IP\'s. Use a comma separated list for multiple IP\'s.', '" . $configuration_group_id . "', '" . ($sortID++). "', now())"),
                          array("INSERT INTO configuration (" . $fields_short . ")  VALUES ('Item Name Length','VIEW_COUNTER_ITEM_NAME_LENGTH', '20', 'The length of the names of the categories, manufacturers and products used in the monitor and report sections.', '" . $configuration_group_id . "', '" . ($sortID++). "', now())"),
                          array("INSERT INTO configuration (" . $fields . ")        VALUES ('Kick Off', 'VIEW_COUNTER_ENABLE_KILL_SESSION', 'false', 'Enable the ability to kick off customers.', '" . $configuration_group_id . "', '" . ($sortID++). "', 'tep_cfg_select_option(array(\'true\', \'false\'), ', now(), NULL)"),
                          array("INSERT INTO configuration (" . $fields_short . ")  VALUES ('Page Refresh Period','VIEW_COUNTER_PAGE_REFRESH', '120', 'How often, in seconds, to refresh the main page in admin.', '" . $configuration_group_id . "', '" . ($sortID++). "', now())"),
                          array("INSERT INTO configuration (" . $fields_short . ")  VALUES ('Rows Per Page','VIEW_COUNTER_MAX_ROWS', '20', 'The maximum number of rows to display in the list.', '" . $configuration_group_id . "', '" . ($sortID++). "', now())"),
                          array("INSERT INTO configuration (" . $fields_short . ")  VALUES ('Send Emails To','VIEW_COUNTER_SEND_EMAILS_TO', '', 'The email address any emails created by View Counter will be sent to. If left empty, the shops email address will be used.', '" . $configuration_group_id . "', '" . ($sortID++). "', now())"),
                          array("INSERT INTO configuration (" . $fields . ")        VALUES ('Show Flags', 'VIEW_COUNTER_SHOW_FLAGS', 'true', 'Display the country flags. Turning this off will speed up the display. <br>(true=on false=off)', '" . $configuration_group_id . "', '" . ($sortID++). "', 'tep_cfg_select_option(array(\'true\', \'false\'), ', now(), NULL)"),
                          array("INSERT INTO configuration (" . $fields . ")        VALUES ('Show Account Details', 'VIEW_COUNTER_SHOW_ACCOUNT_DETAILS', 'true', 'Display the account details of the visitor, if possible. If multiple accounts exist, they will all be shown. Enabling this option may cause a slow-down, depending upon the site. <br>(true=on false=off)', '" . $configuration_group_id . "', '" . ($sortID++). "', 'tep_cfg_select_option(array(\'true\', \'false\'), ', now(), NULL)"),
                          array("INSERT INTO configuration (" . $fields . ")        VALUES ('Version Checker', 'VIEW_COUNTER_ENABLE_VERSION_CHECKER', 'false', 'Enable to automatically check if a new version is available. <br>(true=on false=off)', '" . $configuration_group_id . "', '" . ($sortID++). "', 'tep_cfg_select_option(array(\'true\', \'false\'), ', now(), NULL)"));



    foreach ($db_sql_array as $sql_array) {
      foreach ($sql_array as $value) {
        if (tep_db_query($value) == false) {
          $db_error = true;
        }
      }
    }
  }

?>
<div class="pageHeading"><?php echo 'View Counter Database Installer'; ?></div>
<div style="padding:10px 0">
<?php
  if ($db_error == false) {
    echo 'Database successfully Installed for View Counter!!!';
  } else {
    echo 'Installed failed!!!';
  }
?>
</div>

<?php echo tep_draw_form('view_counter_install', 'view_counter_install.php', 'post') . tep_hide_session_id() . tep_draw_hidden_field('action', 'process'); ?>
  <div style="padding-bottom:10px"><input type="submit" name="delete" value="Go To Home Page AFTER deleting this file (recommended)"></div>
  <div style="padding-bottom:10px"><input type="submit" name="goto" value="Go To Home Page"></div>
</form> 

