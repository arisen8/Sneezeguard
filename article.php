<?php
/*
  $Id: index.php,v 1.1 2003/06/11 17:37:59 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License

  Prepared by Lunaxod http://www.charger.od.ua
*/

  require('includes/application_top.php');



  require_once("Mobile_Detect.php");
        $detect = new Mobile_Detect();

  if ($HTTP_GET_VARS['action'] == 'reply') {
   $id = (int)tep_db_prepare_input($HTTP_POST_VARS['id']);
   $name = tep_db_prepare_input($HTTP_POST_VARS['name']);
   $content = tep_db_prepare_input2($HTTP_POST_VARS['content']);
   $username = tep_db_prepare_input($HTTP_POST_VARS['username']);
   $email = tep_db_prepare_input($HTTP_POST_VARS['email']);
   $date = date("Y-m-d G:i:s");
   if (ARTICLE_APPROVED == 'true') { 
        $approved = 0;
      } else {
      $approved = 1;
     }
   $content = strip_tags($content, '<p>');

  if ((empty($username)) || (empty($content))) {
         $error = 'You must enter a value for your name and comments.';
      } else {
    if (empty($name)) { $name = 'Reply'; };
     $sql_data_array = array('article_id' => $id,
                              'date' => $date,
                              'name' => $name,
                              'username' => $username,
                              'email' => $email,
                              'content' => $content,
                              'approved' => $approved);
      tep_db_perform(TABLE_ARTICLE_REPLYS, $sql_data_array);
      tep_db_query('update ' . TABLE_ARTICLE . ' set replys = replys+1 where id = ' . (int)$HTTP_GET_VARS['article']);

    if (ARTICLE_EMAIL == 'true') {
       $message = $name . ' has added a comment to your article blog.' . 
       $email . 
       'At ' . HTTP_SERVER . DIR_WS_HTTP_CATALOG . FILENAME_ARTICLE . '?article=' . $HTTP_GET_VARS['article'];
       tep_mail(STORE_OWNER, STORE_OWNER_EMAIL_ADDRESS, 'New News Reply', $message, $name, $email);
    }
   tep_redirect(tep_href_link(FILENAME_ARTICLE, 'article=' . $HTTP_GET_VARS['article']));
  }
 }

  $breadcrumb->add(NAVBAR_TITLE, tep_href_link(FILENAME_ARTICLE, '', 'SSL'));

  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_ARTICLE);
?>
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">
<html <?php echo HTML_PARAMS; ?>>
<head>
<title><?php echo ARTICLE; ?></title>
<meta name="description" content="<?php echo META_DESC; ?>" />
<meta name="keywords" content="<?php echo KEYWORDS; ?>" />
<base href="<?php echo (($request_type == 'SSL') ? HTTPS_SERVER : HTTP_SERVER) . DIR_WS_CATALOG; ?>">
<link rel="alternate" type="application/rss+xml" title="<?php echo META_DESC; ?>" href="<?php echo  tep_href_link(FILENAME_RSS_ARTICLE); ?>" />
<link rel="stylesheet" type="text/css" href="stylesheet.css">

<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
function displayHTML(form) {
var inf = form.content.value;
win = window.open(", ", 'popup', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,width=400,height=250,left = 412,top = 284');
win.document.write("" + inf + "");
}
//  End -->
</script>
</head>
<body marginwidth="0" marginheight="0" topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0">
<!-- header //-->
<?php require(DIR_WS_INCLUDES . 'header.php'); ?>
<!-- header_eof //-->

<!-- body //-->
<table border="0" width="100%" cellspacing="3" cellpadding="3">
  <tr>
    <td width="<?php echo BOX_WIDTH; ?>" valign="top"><table border="0" width="<?php echo BOX_WIDTH; ?>" cellspacing="0" cellpadding="2">
<!-- left_navigation //-->
<?php //require(DIR_WS_INCLUDES . 'column_left.php'); ?>
<!-- left_navigation_eof //-->
    </table></td>
<!-- body_text //-->
    <td width="100%" valign="top"><table border="0" width="100%" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="2"><table border="0" width="100%" cellspacing="4" cellpadding="4">
          <tr>
            <td class=""><?php echo HEADING_TITLE; ?></td>
            <td class="" align="right"><?php tep_image(DIR_WS_IMAGES . $category['categories_image'], $category['categories_name'], HEADING_IMAGE_WIDTH, HEADING_IMAGE_HEIGHT); ?></td>
          </tr>
        </table></td>
        </tr>
<?php
    if ($HTTP_GET_VARS['article'] == true) {
    $id = (int)tep_db_prepare_input($HTTP_GET_VARS['article']);
    $article_query = tep_db_query("select n.date_created, nd.name, nd.content from " . TABLE_ARTICLE . " n, " . TABLE_ARTICLE_DESC . " nd where nd.article_id = '" . (int)$id . "' and n.id = '" . (int)$id . "' and nd.language_id = '" . (int)$languages_id . "'");

    $article = tep_db_fetch_array($article_query);
?>
        <tr class="headerNavigation">
        <td class="headerNavigation">&nbsp;&nbsp;<?php echo $article['name']; ?></td>
        <td class="headerNavigation" align="right"><?php echo '<i>Date: ' . tep_date_short($article['date_created']); ?></i>&nbsp;&nbsp;</td>
        </tr>
       <tr>
        <td colspan="2"><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
      </tr>
        <tr>
        <td class="main" colspan="2"><?php echo $article['content']; ?></td>
        </tr>
       <tr>
        <td colspan="2"><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
      </tr>
<?php
     $reply_query = tep_db_query("select * from " . TABLE_ARTICLE_REPLYS . " where article_id = $id");
    $reply = tep_db_fetch_array($reply_query);
   if ($reply == true)  { 
?>
        <tr>
        <td colspan="2"><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
      </tr>
<?php
     $reply_query2 = tep_db_query("select * from " . TABLE_ARTICLE_REPLYS . " where article_id = $id and approved = 1");
      while ($reply2 = tep_db_fetch_array($reply_query2)) {
?>
        <tr>
        <td colspan="2"><table valign="top" border="0" width="700" cellspacing="0" cellpadding="0" align="right">
        <tr class="headerNavigation">
        <td class="headerNavigation">&nbsp;&nbsp;<?php echo $reply2['name']; ?></td>
        <td class="headerNavigation"" align="right"><?php echo '<i>Date: ' . tep_date_short($reply2['date']); ?></i>&nbsp;&nbsp;</td>
        </tr>
        <tr>
        <td class="main" colspan="2"><b><i>From: <?php echo $reply2['username']; ?></i></b></td>
        </tr>
        <tr>
        <td colspan="2"><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
      </tr>
        <tr>
        <td class="main" colspan="2"><?php echo $reply2['content']; ?></td>
        </tr>
       <tr>
        <td colspan="2"><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
      </tr>
      </table></td>
      </tr>
<?php
}
}
?>
        <tr>
        <td colspan="2"><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
      </tr>
        <tr>
        <td colspan="2"><table valign="top" border="0" width="100%" cellspacing="0" cellpadding="0" align="center">
<?php

// check and see if replys are anonymous
      if ((ARTICLE_REPLY == 'false') || (tep_session_is_registered('customer_id'))) {
         if (isset($error)) echo '<tr><td class="main" colspan="2"><font color="red">' . $error . '</font></td></tr>';
?>
        <tr>
        <td class="main" colspan="2"><b><?php echo ADD_COMMENT; ?></b></td>
        </tr>
        <tr>
        <td colspan="2"><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?><form action="<?php echo tep_href_link(FILENAME_ARTICLE, 'action=reply&article=' . $id); ?>" method="post"></td>
        <tr>
            <td class="main"><?php echo TD_REPLY_TOPIC; ?></td>
            <td class="main"><input type="text" name="name" size="30" value="<?php if (isset($name)) echo $name; ?>"> <?php echo TD_OPTIONAL; ?></td>
            </tr>
<?php
        if (!tep_session_is_registered('customer_id')) {
?>
            <tr>
            <td class="main"><?php echo TD_NAME; ?></td>
            <td class="main"><input type="text" name="username" size="30" value="<?php if (isset($username)) echo $username; ?>"></td>
            </tr>
           <tr>
            <td class="main"><?php echo TD_EMAIL;?></td>
            <td class="main"><input type="text" name="email" size="30" value="<?php if (isset($email)) echo $email; ?>"> <?php echo TD_OPTIONAL2; ?></td>
            </tr>
<?php
      } else {
    $check_customer_query = tep_db_query("select customers_firstname, customers_lastname, customers_email_address from " . TABLE_CUSTOMERS . " where customers_id = '" . (int)$customer_id . "'");
        $check_customer = tep_db_fetch_array($check_customer_query);
?>
      <input type="hidden" name="username" value="<?php echo $check_customer['customers_firstname'] . ' ' .$check_customer['customers_lastname']; ?>">
       <input type="hidden" name="email" size="30" value="<?php echo  $check_customer['customers_email_address']; ?>">
<?php
  }
?>
        <tr valign="top">
            <td class="main"><?php echo TD_COMMENTS; ?></td>
            <td class="main"><TEXTAREA NAME="content" ROWS="10" COLS="15"><?php if (isset($content)) echo $content; ?></TEXTAREA></td>
            </tr>
            <tr>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <td>&nbsp;</td><td align="left"><input type="submit" value="Submit"><input type="button" value="Preview" onclick="displayHTML(this.form)"></form></td>
         </tr>
        <tr>
        <td class="main" colspan="2"><a href="<?php echo tep_href_link(FILENAME_ARTICLE); ?>"><u>Back</u></a></td>
        </tr>
<?php
     } else {
?>
     <tr>
        <td class="main" colspan="2"><b><?php echo ADD_COMMENT_lOGIN; ?></b></td>
        </tr>
        <tr>
       <tr>
        <td class="main" colspan="2"><a href="<?php echo tep_href_link(FILENAME_ARTICLE); ?>"><u>Back</u></a></td>
        </tr>
<?php
    }
  } elseif ($HTTP_GET_VARS['viewall'] == true) {
?>
   <tr>
        <td width="100%" valign="top"><table border="0" width="100%" cellspacing="0" cellpadding="0">
        <tr>
        <tr class="headerNavigation">
        <td class="headerNavigation">&nbsp;&nbsp;<?php echo TD_DATE; ?></td>
        </tr>
       <tr>
        <td class="main">
<?php
        $date_query = tep_db_query("select distinct month_date from " . TABLE_ARTICLE . " order by month_date asc");
     while ($date = tep_db_fetch_array($date_query)) {
?>
        <?php echo '<a href="' . tep_href_link(FILENAME_ARTICLE, 'date=' . $date['month_date']) . '"><u>' . $date['month_date']; ?></u></a>&nbsp;
<?php
 }
?>
      </td>
      <tr>
        <td colspan="2"><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
      </tr>
       <tr>
        <td class="main" colspan="2"><a href="<?php echo tep_href_link(FILENAME_ARTICLE); ?>"><u>Back</u></a></td>
        </tr>
         </td>
        </tr>
<?php
 } else {
?>
        <tr>
        <td width="25%" valign="top"><table border="0" width="100%" cellspacing="0" cellpadding="0">
        <tr class="headerNavigation">
        <td class="headerNavigation">&nbsp;&nbsp;<?php echo TD_DATE; ?></td>
        </tr>
<?php
       $date_query = tep_db_query("select distinct month_date from " . TABLE_ARTICLE . " order by month_date asc limit " . ARTICLE_MONTH_ROWS);
     while ($date = tep_db_fetch_array($date_query)) {
?>
        <tr>
        <td class="main"><?php echo '<a href="' . tep_href_link(FILENAME_ARTICLE, 'date=' . $date['month_date']) . '"><u>' . $date['month_date']; ?></u></a></td>
        </tr>
<?php
 }
?>
      <tr>
        <td class="main"><?php echo '<a href="' . tep_href_link(FILENAME_ARTICLE, 'viewall=viewall' ); ?>"><u><?php echo VIEW_ALL; ?></u></a></td>
        </tr>
        <tr>
        <td class="main"><?php echo '<a href="' . tep_href_link(FILENAME_RSS_ARTICLE); ?>"><?php echo tep_image(DIR_WS_IMAGES . 'rss.png', SUBSCRIBE); ?></a></td>
        </tr>
        </table></td>
        <td width="75%" valign="top"><table border="0" width="100%" cellspacing="0" cellpadding="0">
        <tr class="headerNavigation">
        <td class="headerNavigation" colspan="2">&nbsp;&nbsp;<?php echo TD_ARTICLES; ?></td>
        </tr>
<?php
    $listing_sql = "select n.id, n.date_created, nd.name, nd.content, n.replys from " . TABLE_ARTICLE . " n, " . TABLE_ARTICLE_DESC . " nd where nd.language_id = '" . (int)$languages_id . "' and n.id = nd.article_id";

   if ($HTTP_GET_VARS['date'] == true) {
    $month_date = tep_db_prepare_input($HTTP_GET_VARS['date']);
    $listing_sql .= " and month_date = '$month_date'";
}
    $listing_sql .= " order by id desc";
    $listing_split = new splitPageResults($listing_sql, 10);

     if ($listing_split->number_of_rows > 0) {
    $listing_query = tep_db_query($listing_split->sql_query);
    while ($listing = tep_db_fetch_array($listing_query)) {
   // $url_name = str_replace(' ' , '_', $listing['name']);
   //$count_sql = "select article_id from article_replys where article_id = " . $listing['id'];
   // $count = tep_db_fetch_array($count_sql);
?>
        <tr>
        <td class="main"><u><b><?php echo '<a href="' . tep_href_link(FILENAME_ARTICLE, 'article=' . $listing['id']) . '">' . $listing['name']; ?></a></b></u></td>
        <td class="main" align="right"><i><?php echo TD_DATE_CREATED;?> <?php echo tep_date_short($listing['date_created']); ?></i>&nbsp;&nbsp;&nbsp; <u><?php echo TD_REPLIES; ?> <?php echo $listing['replys']; ?></u></td>
        </tr>
        <tr>
        <td class="main" colspan="2"><?php $content = substr($listing['content'], 0, ARTICLE_CHARACTERS); 
         echo  strip_tags($content);?>....</td>
        </tr>
<?php
 }
 }
?>
 <tr>
    <td class="smallText" align="right" colspan="2"><?php echo TEXT_RESULT_PAGE . ' ' . $listing_split->display_links(MAX_DISPLAY_PAGE_LINKS, tep_get_all_get_params(array('page', 'info', 'x', 'y'))); ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>
<?php
 }
?>
        </table></td>
 
      </tr>
    </table></td>
<!-- body_text_eof //-->
    <td width="<?php echo BOX_WIDTH; ?>" valign="top"><table border="0" width="<?php echo BOX_WIDTH; ?>" cellspacing="0" cellpadding="2">
 <!-- right_navigation //-->
<?php //require(DIR_WS_INCLUDES . 'column_right.php'); ?>
 <!--right_navigation_eof //-->
    </table></td>
  </tr>
</table>
<!-- body_eof //-->

<!-- footer //-->
<?php require(DIR_WS_INCLUDES . 'footer.php'); ?>
<!-- footer_eof //-->
<br>
</body>
</html>
<?php require(DIR_WS_INCLUDES . 'application_bottom.php'); ?>
