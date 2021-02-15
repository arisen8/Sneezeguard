<?php
$page_title = 'Glass Sneeze Guards | Portable Barrier- ADM Sneezeguards';
$page_description = 'Checkout ADM Sneezeguards with latest design and models of food sneeze guard. Shop online at sneezeguard.com and have affordable sneeze guard post.';
$page_keyword = 'Buffet Sneeze Guards, Online sneeze guard partition posts, Manufacturer Sneeze Guard, Shop glass sneeze guard kits';
require('includes/application_top.php');  
$success="";
if (isset($HTTP_GET_VARS['action']) && ($HTTP_GET_VARS['action'] == 'send')) {                                                                   // Open Table
    if (isset($_POST['captcha']) && $_SESSION['captcha'] != $_POST['captcha']) {
        $messageStack->add('captcha', RECAPTCHA_ERROR);
        $captchamismatch = true;
        $error = true;
        echo '<div class="alert alert-danger mt-3 mb-3 ">' . $messageStack->output('captcha') . '</div>';
        tep_session_unregister('captcha');
        } else {
        $name = tep_db_prepare_input($HTTP_POST_VARS['name']);
        $email_address = tep_db_prepare_input($HTTP_POST_VARS['email']);
        $phone= tep_db_prepare_input($HTTP_POST_VARS['phNum']);
        $enquiry = tep_db_prepare_input($HTTP_POST_VARS['message']);
        $message ="<table>
        <tr><th colspan='2'>".$name." sent a quote request</th></tr>
        <tr><td><b>Name</b></td><td>".$name."</td></tr>
        <tr><td><b>Phone Number</b></td><td>".$phone."</td></tr>
        </table>";
        $message.="<b>Message &nbsp;&nbsp;</b>".$enquiry;
        $subject="A Quote Request From ".$name;
        if (tep_validate_email($email_address)) {
        tep_mail(STORE_OWNER,'sales@sneezeguards.com',$subject, $message, $name, $email_address);
        $success.="<p style='color:green;'>Thank you for contacting us, you should recieve a response in 24-48 hours.</p>";
        } else {
        $error = true;
        $messageStack->add('contact-us', ENTRY_EMAIL_ADDRESS_CHECK_ERROR);
        }
    }
}
$text1 = rand(1, 9);
$text2 = rand(1, 9);
$captchatext = $text1 . " + " . $text2;
$captcha = $text1 + $text2;
tep_session_register('captcha');
$captchamismatch = true;
require(DIR_WS_INCLUDES . 'header_new_design.php');  
?>
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


<div class="bg-white">
    <div class="contact container" class="bg-white">
        <table border="0" width="100%" align="center" background="" class="mainTable2">
            <tbody>
                <tr>
                    <td id="ex1" align="center" width="100%" valign="top">
                        <!-- ReCaptcha Start -->
                        <script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
                        <!-- ReCaptcha End -->
                        <div class="form_white">
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <table width="100%" cellpadding="2" cellspacing="2">
                                                <tbody>
                                                    <tr>
                                                        <td valign="top">
                                                            <table border="0" height="40" valign="center" align="center">
                                                                <tbody>
                                                                    <tr>
                                                                        <td align="center">
                                                                            <font color="White" size="4">
                                                                                <b>
                                                                                    <h2>Contact Us</h2>
                                                                                </b><br>
                                                                            </font>
                                                                            <table width="100%" height="133" align="center">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center">
                                                                                            <font size="2">
                                                                                                <b>In Stock Sales Phone:</b> 800-690-0002<br>
                                                                                                <b>Fax No:</b> 800-621-1992<br>
                                                                                                <b>E-Mail: </b><a href="mailto:info@sneezeguard.com">info@sneezeguard.com</a><br><br>
                                                                                                <b>Custom Sales Phone:</b> 800-805-1114<br>
                                                                                                <b>E-Mail: </b><a href="mailto:sales@sneezeguards.com">sales@sneezeguards.com</a><br><br>
                                                                                                <b>Address:</b><br>
                                                                                                2300 Wilbur Ave.<br>
                                                                                                Antioch CA 94509<br>
                                                                                            </font>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table><br>
                                                                            <?=$success;?>
                                                                            <font size="2">
                                                                                Please Feel free to send us a message with any questions or comments you may have.
                                                                            </font>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                            <table border="0" height="40" align="center">
                                                                <tbody>
                                                                    <tr>
                                                                        <td align="left">
                                                                        <?= count($messageStack->messages)>0?'<div class="alert alert-danger mt-3 mb-3 ">'.$messageStack->output('contact-us').' '.$messageStack->output('captcha').'</div>':''?>
                                                                            <table width="100%" height="" align="center" border="0" cellpadding="15" background="">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="right">
                                                                                            <font size="2">
                                                                                            <?php echo tep_draw_form('contact-us-sneeze-guard', tep_href_link('contact-us-sneeze-guard.php', 'action=send'), 'post', '', true,'formspam'); ?>
                                                                                                    <div class="form-group">
                                                                                                        <input name="name" type="text" size="99" placeholder="Name" class="form-control" required>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <input name="email" type="email" size="99" placeholder="Email" class="form-control" required>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <input name="phNum" size="99" type="text" maxlength="10" placeholder="Phone Number" pattern="[0-9]{10}" class="form-control" required>
                                                                                                    </div>

                                                                                                    <div class="form-group">
                                                                                                        <textarea name="message" placeholder="Message" rows="4" cols="75" class="form-control" required></textarea>
                                                                                                    </div>

                                                                                                    <input type="text" id="website" value="">
                                                                                                    <div class="form-group text-secondary text-left">
                                                                                                        <input type="text" name="captcha" class="form-control" placeholder="What is <?= $captchatext ?> =">
                                                                                                    </div>
                                                                                                    <div class="submitbutton">
                                                                                                        <input type="submit" class="btn btn-outline-dark" value="Send Message">
                                                                                                    </div>
                                                                                                </form>
                                                                                            </font>
                                                                                        </td>
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
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

            </tbody>
        </table>
    </div>
</div>
<style>

</style>
<?php
require(DIR_WS_INCLUDES . 'footer_new_design.php');
?>