<?php
$page_title='Glass Sneeze Guards | Portable Barrier- ADM Sneezeguards'; 
$page_description='Checkout ADM Sneezeguards with latest design and models of food sneeze guard. Shop online at sneezeguard.com and have affordable sneeze guard post.';
$page_keyword='Buffet Sneeze Guards, Online sneeze guard partition posts, Manufacturer Sneeze Guard, Shop glass sneeze guard kits';
require('includes/application_top.php');
tep_redirect(tep_href_link('contact-us-sneeze-guard.php'));
include('includes/header_new_design.php');
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
                                                                        </table>
                                                                        <br><br>
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
                                                                    <?php 
                                                                        // Open Table
                                                                        $result = mysql_query(
                                                                                "SELECT * FROM Models");
                                                                        if (!$result) {
                                                                        echo("<P>Error performing query: " .
                                                                            mysql_error() . "</P>");
                                                                        exit();
                                                                        }

                                                                        while ( $row = mysql_fetch_array($result) ) {
                                                                        //Now only show the data for the Model in the address bar
                                                                        if($row["Name"] == $Model){

                                                                        $EndPan = $row["EndPan"];
                                                                        $Depth = $row["Depth"];
                                                                        $TopGlass = $row["TopGlass"];
                                                                        $HeatLamps = $row["HeatLamps"];
                                                                        $Lighting = $row["Lighting"];
                                                                        }}
                                                                        
                                                                        ?>
                                                                        <?php
                                                                        function spamcheck($field)
                                                                        {
                                                                        //filter_var() sanitizes the e-mail 
                                                                        //address using FILTER_SANITIZE_EMAIL
                                                                        $field=filter_var($field, FILTER_SANITIZE_EMAIL);
                                                                        
                                                                        //filter_var() validates the e-mail
                                                                        //address using FILTER_VALIDATE_EMAIL
                                                                        if(filter_var($field, FILTER_VALIDATE_EMAIL))
                                                                            {
                                                                            return TRUE;
                                                                            }
                                                                        else
                                                                            {
                                                                            return FALSE;
                                                                            }
                                                                        }

                                                                        if (isset($_REQUEST['email']))
                                                                        {
                                                                            
                                                                         
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            //if "email" is filled out, proceed

                                                                        //check if the email address is invalid
                                                                        $mailcheck = spamcheck($_REQUEST['email']);
                                                                        if ($mailcheck==FALSE)
                                                                            {
                                                                            echo "Invalid input";
                                                                            }
                                                                        else
                                                                            {//send email
                                                                            $hatHeat = $_REQUEST['hatHeat'] ;
                                                                            $hatLight = $_REQUEST['hatLight'] ;
                                                                            $endPanLeft = $_REQUEST['endPanLeft'] ;
                                                                            $endPanRight = $_REQUEST['endPanRight'] ;
                                                                            $strLength = $_REQUEST['strLength'] ;
                                                                            $email = $_REQUEST['email'] ; 
                                                                            $name = $_REQUEST['name'];
                                                                            $phNumb = $_REQUEST['phNum'];
                                                                            $subject = "Quote Request for model $Model.";
                                                                            $message = $_REQUEST['message'] ;
                                                                            mail("sales@sneezeguards.com", $subject,
                                                                            "This is a quote request from: $name \n
                                                                            Phone Number: $phNumb \n\n
                                                                            $message", "From: $email" );
                                                                            echo "
                                                                            <table align=center>
                                                                            <tr>
                                                                            <td align=center>
                                                                            <font size=2 >
                                                                            Thank you for contacting us, you should recieve a response in 24-48 hours.
                                                                            </font>
                                                                            </td>
                                                                            </tr>
                                                                            </table>";
                                                                            }
                                                                            
                                                                            
                                                                            
                                                                       
                                                                            
                                                                            
                                                                        }
                                                                        
                                                                        ?>
                                                                        <table width="100%" height="" align="center" border="0" cellpadding="15" background="">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="right">
                                                                                        <font size="2">
                                                                                            <form method="post" action="contact.php">
                                                                                                <div class="form-group">
                                                                                                    <input name="name" type="text" size="99" placeholder="Name" class="form-control">
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <input name="email" type="text" size="99" placeholder="Email" class="form-control" >
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <input name="phNum" size="99" type="text" placeholder="Phone Number" class="form-control">
                                                                                                </div>

                                                                                                <div class="form-group">
                                                                                                    <textarea name="message" placeholder="Message" rows="4" cols="75" class="form-control"></textarea>
                                                                                                </div>




                                                                                               




                                                                                                <div class="submitbutton">
                                                                                                    <input type="submit" value="Send Message" >
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
include('includes/footer_new_design.php');
?>