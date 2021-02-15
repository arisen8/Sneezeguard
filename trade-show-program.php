<?php
$page_title='Sneeze Guard For Bank | Trade Show Program | ADM Sneezeguards'; 
$page_description='Buy online products related to sneeze guard portable for your office, Bank, Hospital, Bank, Grocery During Coronavirus with latest innovative designs.';
$page_keyword='Glass Barrier, Glass Barrier for Office, Glass Barrier for Hospital, Glass Barrier for Bank, Glass Barrier for Grocery';
require('includes/application_top.php');
require(DIR_WS_INCLUDES . 'header_new_design.php');
$tradeData=mysql_query("SELECT * FROM  trade_show WHERE id='2'") or die(mysql_error());
	   $tradeDataArray=mysql_fetch_array($tradeData);
	  
  $error = false;
  if (isset($HTTP_GET_VARS['action']) && ($HTTP_GET_VARS['action'] == 'send')) {
    $name = tep_db_prepare_input($HTTP_POST_VARS['name']);
    $email_address = tep_db_prepare_input($HTTP_POST_VARS['email']);
    $enquiry = tep_db_prepare_input($HTTP_POST_VARS['enquiry']);

    if (tep_validate_email($email_address)) {
      tep_mail(STORE_OWNER, $tradeDataArray['email1'], EMAIL_SUBJECT, $enquiry, $name, $email_address);

      tep_redirect(tep_href_link(FILENAME_CONTACT_US, 'action=success'));
    } else {
      $error = true;

      $messageStack->add('contact', ENTRY_EMAIL_ADDRESS_CHECK_ERROR);
    }
  }

  $breadcrumb->add(NAVBAR_TITLE, tep_href_link(FILENAME_CONTACT_US));
$sel = mysqli_query($connt,"select * from trade_show");
$result = mysqli_fetch_assoc($sel);
?>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-1072651700');
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

<div class="trade container trade-show-display" onmouseover="openCity(event, 'Hide');hide_cart_data()"><!-- deepak 4-1-2021 -->
    <table width="100%">
        <!--<tr>
<td colspan="3" style="background:url(img/TopBak.jpg) !important ; height:26px; border:1px solid #ccc;">&nbsp;</td>
</tr>-->
        <tbody>
            <tr>

                <td>
                    <table width="100%" cellpadding="2" cellspacing="2">
                        <tbody>
                            <tr>

                                <td width="35%" valign="top">
                                    <table border="0" width="50%" cellspacing="0" cellpadding="0" align="center">
                                        <tbody>
                                            <tr>
                                                <!-- body_text //-->
                                                <td width="100%" valign="top">
                                                <?php echo tep_draw_form('trade_show_program', tep_href_link('trade_show_program.php', 'action=send')); ?><table border="0" width="100%" cellspacing="0" cellpadding="0">
                                                        <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                                <tr align="center">
                                                                                    <td class="pageHeading">
                                                                                        <h2 class="tradeheading"><?php echo 'Dealer Information'; ?></h2>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>

                                                                </tr>
                                                                <?php
                                                                if ($messageStack->size('contact') > 0) {
                                                                ?>
                                                                <tr>
                                                                        <td><?php echo $messageStack->output('contact'); ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
                                                                    </tr>
                                                                    <?php
                                                                    }
                                                                    if (isset($HTTP_GET_VARS['action']) && ($HTTP_GET_VARS['action'] == 'success')) {
                                                                        ?>
                                                                        <tr>
                                                                                    <td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><table border="0" width="100%" cellspacing="1" cellpadding="2" class="continue">
                                                                                    <tr class="continue">
                                                                                        <td><table border="0" width="100%" cellspacing="0" cellpadding="2">
                                                                                        <tr>
                                                                                            <td width="10"><?php echo tep_draw_separator('pixel_trans.gif', '10', '1'); ?></td>
                                                                                            <td align="right"><?php echo '<a href="' . tep_href_link(FILENAME_DEFAULT) . '">' . tep_image_button('button_continue.gif', IMAGE_BUTTON_CONTINUE) . '</a>'; ?></td>
                                                                                            <td width="10"><?php echo tep_draw_separator('pixel_trans.gif', '10', '1'); ?></td>
                                                                                        </tr>
                                                                                        </table></td>
                                                                                    </tr>
                                                                                    </table></td>
                                                                                </tr>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                <tr>
                                                                    <td>
                                                                        <table border="0" width="100%" cellspacing="1" cellpadding="2" class="continue">
                                                                            <tbody>
                                                                                <tr class="continue">
                                                                                    <td>
                                                                                        <div align="center" class="teesh">
                                                                                            <?php echo $result['text1'] ?>
                                                                                        </div>
                                                                                        <div align="center" class="teesh1">
                                                                                            <?php echo $result['text2'] ?>
                                                                                        </div>
                                                                                        <p align="center" style="color:black" class="tradepara">Thank you for your interest.</p>
                                                                                        <table border="0" width="100%" cellspacing="0" cellpadding="2">
                                                                                            <tbody>
                                                                                                <tr>

                                                                                                    <td class="main"></td>
                                                                                                </tr>
                                                                                                <!--<tr>
                <td class="main" ><input type="text" name="name" style="border: 2px; border-style: solid; border-color: black;" /></td>
              </tr>
              <tr>
                <td class="main"></td>
              </tr>
              <tr>
                <td class="main"><input type="text" name="email" style="border: 2px; border-style: solid; border-color: black;" /></td>
              </tr>
              <tr>
                <td class="main">Message:</td>
              </tr>
              <tr>
                <td><textarea name="enquiry" cols="100" rows="15"></textarea></td>
              </tr>
			  -->
                                                                                                <tr>
                                                                                                    <td class="main"><div class="form-group"><input type="text" name="name" placeholder="Company Name" class="form-control"></div></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class="main"></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class="main"><div class="form-group"><input type="text" name="email" placeholder="Company Email" class="form-control"></div></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class="main"></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class="main"><div><textarea name="enquiry" cols="" rows="4" placeholder="Message" class="form-control"></textarea></div></td>
                                                                                                </tr>

                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><img src="images/pixel_trans.gif" alt="Sneeze Guard" title=" Sneeze Guard " width="100%" height="10"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <table border="0" width="100%" cellspacing="1" cellpadding="2" class="continue">
                                                                            <tbody>
                                                                                <tr class="continue">
                                                                                    <td>
                                                                                        <table border="0" width="100%" cellspacing="0" cellpadding="2">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td width="10"><img src="images/pixel_trans.gif" alt="Sneeze Guard" title=" Sneeze Guard " width="10" height="1"></td>
                                                                                                    <td align="center"><input type="image" class="updatebutton" style="" src="includes/languages/english/images/buttons/button_continue.gif" alt="Continue" title=" Continue " onclick="javascript:document.forms['checkout_payment'].submit();"></td>
                                                                                                    <td  width="10"><img src="images/pixel_trans.gif" alt="Sneeze Guard" title=" Sneeze Guard " width="10" height="1"></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <?php
                                                                    }
                                                                    ?>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                </td>
                                                <!-- body_text_eof //-->
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- body_eof //-->

                                    <!-- footer //-->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<style>
    
    
</style>
<?php
require(DIR_WS_INCLUDES . 'footer_new_design.php');
?>