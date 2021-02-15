<?php
$page_title='Sneeze Guard For Office | Contact Dealer | ADM Sneezeguards'; 
$page_description='ADM Sneezeguards manufactures for the Bank, Hospital, Grocery industry, we delivers industry standard sneeze guard portable with latest designs.';
$page_keyword='Sneeze Guard For Office, Sneeze Guard, Sneeze Guard For Bank, Sneeze Gard For Grocery, Sneeze Guard for Hospital';
require('includes/application_top.php');
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
error_reporting(0);
if (isset($HTTP_GET_VARS['action']) && ($HTTP_GET_VARS['action'] == 'send')) {
    if(isset($_POST['captcha']) && $_SESSION['captcha']!=$_POST['captcha']){
        $messageStack->add('captcha', RECAPTCHA_ERROR); 
        $captchamismatch=true;
        $error = true;
      }else{
        $name = tep_db_prepare_input($HTTP_POST_VARS['name']);
        $email_address = tep_db_prepare_input($HTTP_POST_VARS['email']);
        $enquiry = tep_db_prepare_input($HTTP_POST_VARS['enquiry']);
        $message ="<table>
        <tr><td><b>Name</b></td><td>".$name."</td></tr>
        <tr><td><b>Email Address</b></td><td>".$email_address."</td></tr>
        </table>";
        $message.="<b>Enquiry &nbsp;&nbsp;</b>".$enquiry;
        $subject="An inquiry From ".$name;
        if (tep_validate_email($email_address)) {
          tep_mail(STORE_OWNER,STORE_OWNER_EMAIL_ADDRESS,$subject, $enquiry, $name, $email_address);
          tep_redirect(tep_href_link('contact-us-dealer.php', 'action=success'));
        } else {
          $error = true;
          $messageStack->add('contact', ENTRY_EMAIL_ADDRESS_CHECK_ERROR);
        }
      }
  }

  $text1=rand(1,9);
  $text2=rand(1,9);
  $captchatext=$text1." + ".$text2;
  $captcha=$text1+$text2;
  tep_session_register('captcha');
  $captchamismatch=true;

require(DIR_WS_INCLUDES . 'header_new_design.php');

?>

<div class="contact container">
    <table width="100%" cellpadding="0" cellspacing="0" class="p-1">
        <tbody>
            <tr>
                <td >
                    <table width="100%" cellpadding="2" cellspacing="2">
                        <tbody>
                            <tr>

                                <td width="35%"  valign="top">
                                    <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                        <tbody>
                                            <tr>
                                                <!-- body_text //-->
                                                <td width="100%" valign="top">
                                                    <?php echo tep_draw_form('contact_us_dealer', tep_href_link('contact-us-dealer.php', 'action=send'), 'post', '', true,'formspam'); ?><table border="0" width="100%" cellspacing="0" cellpadding="0">
                                                        <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <!-- <td class="pageHeading">Dealer Information</td> -->
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
                                                                        <table border="0" cellspacing="1" cellpadding="2" class="continue contact-us-dealer-table" align="center">
                                                                            <tbody>
                                                                                <tr class="continue">
                                                                                    <td>
                                                                                    
                                                                                        <div align="center">
                                                                                            <p align="center" class="TopLargeText"></p>
                                                                                            <h2 class="contactheading">For Dealer Information, Programs and Setup call 1-800-805-1114 </h2>
                                                                                            <p></p>
                                                                                        </div>
                                                                                        <?= count($messageStack->messages)>0?'<div class="alert alert-danger mt-3 mb-3 ">'.$messageStack->output('contact').' '.$messageStack->output('captcha').'</div>':''?>
                                                                                        <p align="center" class="text-dark">You may also contact us by E-mail by filling out the form below. <br></p>
                                                                                        <p align="center" class="text-dark">Thank you for your interest.</p>
                                                                                        <table border="0" width="100%" cellspacing="0" cellpadding="2" >
                                                                                            <tbody>
                                                                                                <tr>


                                                                                                    <td class="main"></td>
                                                                                                </tr>

                                                                                                <!--<tr>
                <td class="main"><input type="text" name="name" /></td>
              </tr>
              <tr>
                <td class="main">E-Mail Address:</td>
              </tr>
              <tr>
                <td class="main"><input type="text" name="email" /></td>
              </tr>
              <tr>
                <td class="main">Message:</td>
              </tr>
              <tr>
                <td><textarea name="enquiry" cols="100" rows="15"></textarea></td>
              </tr>-->

                                                                                                <tr>
                                                                                                    <td class="main"><div class="form-group"><input type="text" name="name" placeholder="Company Name" class="form-control" required></div></td>
                                                                                                </tr>

                                                                                                <tr>
                                                                                                    <td class="main"><div class="form-group"><input type="text" name="email" placeholder="E-Mail Address" class="form-control" required></div></td>
                                                                                                </tr>

                                                                                                <tr>
                                                                                                    <td><textarea name="enquiry" cols="" rows="4" placeholder="Message" class="form-control" required></textarea></td>
                                                                                                </tr>

                                                                                                <tr>
                                                                                                    <td><div class="form-group text-secondary text-left">
                                                                                                <input type="text" name="captcha" class="form-control" placeholder="What is <?=$captchatext?> =">
                                                                                            </div></td>
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
                                                                                                    <td align="center">
                                                                                                    <input type="text" id="website" value="">
                                                                                                    <input type="submit" value="New Customer/Continue" name="submit" class="btn btn-dark p-2" title=" Continue " onclick="javascript:document.forms['checkout_payment'].submit();"></td>
                                                                                                    <td width="10"><img src="images/pixel_trans.gif" alt="Sneeze Guard" title=" Sneeze Guard " width="10" height="1"></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
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