<?php
ini_set('session.cookie_httponly',1);
ini_set('session.cookie_secure',1);
  
require('includes/application_top.php');

require(DIR_WS_INCLUDES . 'header_new_design.php');


?>

<div class="conditions container" onmouseover="openCity(event, 'Hide');hide_cart_data()"><!-- deepak 4-1-2021 -->
    <table class="mainTable">
        <tbody>
            <tr>
                <td id="ex">

                    <div class="form_white" >
                        <table width="100%" cellpadding="0" cellspacing="0" style="padding:5px;">

                            <tbody>
                                <tr>

                                    <td >
                                        <table width="100%" cellpadding="2" cellspacing="2">
                                            <tbody>
                                                <tr>

                                                    <td valign="top">
                                                        <table border="0" height="40" valign="center" align="center" background="middleback.jpg">
                                                            <tbody>
                                                                <tr>
                                                                    <td align="center">

                                                                        <b>
                                                                            <h2>Warranty</h2>
                                                                        </b><br><br>
                                                                        <table align="center" >
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>


                                                                                    <h3 class="headingconditions"><b>WARRANTY INFORMATION:</b></h3>
                                                                                        <p class="conditionspara">ADM Sneezeguards is fully dedicated to give you the best-quality glass products in the market. The Company takes pride in manufacturing durable and long-lasting sneeze guards in California. Once you purchase the product, you will get the assurity that your new product is free from defects in materials and will be the same as given in the description. </p>
                                                                                        <h3 class="headingconditions"><b>Limitations or Exclusions for products:</b></h3>
                                                                                           <p class="conditionspara"><b>Our product’s warranty does not apply on the given conditions:</b></p>
                                                                                        <p class="conditionspara">

                                                                                            * Damage caused by misuse, accident, disaster, improper storage, chemical cleaning, fire electrical surges, environmental factors or discoloration due to sunlight.</p>
                                                                                        <p class="conditionspara">

                                                                                            * Normal wear and tear due to overuse or overtime.</p>
                                                                                        <p class="conditionspara">

                                                                                            * Products which have been repaired, modified or altered by someone other than Company.</p>
                                                                                        <p class="conditionspara">

                                                                                            * Any false attachment to the product which is not granted by the company</p>
                                                                                        <p class="conditionspara">

                                                                                            * Products used for rental purposes.</p>
                                                                                        <p class="conditionspara">

                                                                                            * Products that were not properly maintained or installed as given in the instructions and warnings.</p>
                                                                                        <p class="conditionspara">

                                                                                        If the product is having any defect in materials or manufacturing, the Company will replace or repair it as the remedy. Company will not be responsible for incidental damages and repairs, or other costs spent in return or re-installation of defective product. Other expenses, loss or damage for replacing any defective product will be bear by purchaser.
                                                                                        </p>
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
<style>
    
</style>
<?php
require(DIR_WS_INCLUDES . 'footer_new_design.php');
?>