<?php

ini_set('session.cookie_httponly',1);
ini_set('session.cookie_secure',1);
  


$page_title='Sneeze Guard Latest Models design | Privacy - ADM Sneezeguards'; 
$page_description='ADM Sneezeguards offers made to order glass barriers and sneeze guards for effective virus broadcast prevention. Online place an order.';
$page_keyword='social distance Glass Barrier, Physical sepration Glass Models, Sneeze Guard models for office, ADM Sneezeguards Models Privacy';

require('includes/application_top.php');

require(DIR_WS_INCLUDES . 'header_new_design.php');



$servername = DB_SERVER;
$username = DB_SERVER_USERNAME;
$password = DB_SERVER_PASSWORD;
$dbname = DB_DATABASE;
$connt = mysqli_connect($servername, $username, $password, $dbname) or die(mysqli_connect_error());


?>

<div class="privacy container" onmouseover="openCity(event, 'Hide');hide_cart_data()"><!-- deepak 4-1-2021 -->
<table class="mainTable">
    <tbody>
        <tr>
            <td id="ex">

                <div class="form_white">
                    <table>
                        <tbody>
                            <tr>
                                <td >
                                    <table cellpadding="2" cellspacing="2">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td align="center">
                                                                    <h2>Privacy Notice</h2><br><br>
                                                                    <table align="justify">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>

                                                                                    <p><strong class="privacysubheading">Information We Collect</strong></p>

                                                                                    <p>The information we gather from customers helps us personalize and continually improve your shopping experience at sneezeguard.com. Here are the types of information we gather.</p>

                                                                                    <p>We receive and store any information you enter on our Web site or give us in any other way. You can choose not to provide certain information, but this can limit your access to many of our features. We use the information that you provide for such purposes as responding to your requests, customizing future shopping for you, improving our stores, and communicating with you.</p>

                                                                                    <p>By providing your email address you agree to receive marketing emails from sneezeguard.com and may unsubscribe at any time. We receive and store certain types of information whenever you interact with us. For example, like many Web sites, we use cookies, and we obtain certain types of information when your Web browser accesses sneezeguard.com.</p>

                                                                                    <p><strong class="privacysubheading">Cookies</strong></p>

                                                                                    <p>Sneezeguard.com uses "cookies" to improve our customer's shopping experience. The cookie itself does not contain personal information although it will enable us to relate your use of this site to information that you have specifically and knowingly provided.</p>

                                                                                    <p><strong class="privacysubheading">Information Sharing</strong></p>

                                                                                    <p>Information about our customers is an important part of our business, and we are NOT in the business of selling it to others.</p>

                                                                                    <p>We work in conjunction with other companies and individuals to perform functions on our behalf. Examples include fulfilling orders, delivering orders, and processing credit card payments. They have access to address information needed to perform their functions, but may not use it for other purposes.</p>

                                                                                    <p>We release account and other personal information when we believe release is appropriate to comply with the law; enforce or apply our Conditions of Use and other agreements; or protect the rights, property, or safety of sneezeguard.com, our users, or others. This includes exchanging information with other companies and organizations for fraud protection and credit risk reduction. Obviously, however, this does not include selling, renting, sharing, or otherwise disclosing personally identifiable information from customers for commercial purposes in violation of the commitments set forth in this Privacy Notice.</p>

                                                                                    <p><strong class="privacysubheading">Information Security</strong></p>

                                                                                    <p>We work to protect the security of your information during transmission by using Secure Sockets Layer (SSL) software, which encrypts information you input.</p>

                                                                                    <p>We reveal only the last four digits of your credit card numbers when confirming an order. Of course, we transmit the entire credit card number to the appropriate credit card company during order processing.</p>

                                                                                    <p>It is important for you to protect against unauthorized access to your password and to your computer. Be sure to sign off and close your browser window when finished using a shared computer.</p>



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
            </td>
    </tbody>
</table>
</div>

    
<?php
require(DIR_WS_INCLUDES . 'footer_new_design.php');
?>