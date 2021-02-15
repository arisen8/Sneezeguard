<?php
ini_set('session.cookie_httponly',1);
ini_set('session.cookie_secure',1);
  

$page_title='Sneeze Guard for Grocery | Archive | Adm Sneezeguards'; 
$page_description='ADM Sneezeguards manufactures Glass Barriers for office, we provide industry standard sneeze guard with latest innovative models with various size and color.';
$page_keyword='Sneeze Guard portable for Office, archive sneeze guard, Sneeze Guard for Counter, Sneeze Guard Divider, Glass Divider portable';

require('includes/application_top.php');

require(DIR_WS_INCLUDES . 'header_new_design.php');




?>

<div class="archive container" onmouseover="openCity(event, 'Hide');hide_cart_data()"><!-- deepak 4-1-2021 -->
    <table class="mainTable">
        <tbody>
            <tr>
                <td id="ex" >
                    <table border="0" align="center" >
                        <tbody>
                            <tr>
                                <td align="center">
                                    <font size="">
                                        <p><h2 class="archivedheading"> Archived Models</h2></p>
                                    </font>
                                    <p>
                                        <font size="4" color="white"></font>
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table border="0" align="center">
                        <tbody>
                            <tr>
                                <td align="center">
                                    <!-- Start VisualLightBox.com BODY section id=1 -->
                                    <div align="CENTER">
                                        <div id="vlightbox1">
                                            <a class="vlightbox1" onclick="show_img_popup(this)" src="data/images1/1bay-sideglass2000.jpg" title="1BAY-SIDEGLASS2000"><img src="data/thumbnails1/1bay-sideglass2000.jpg" alt="1BAY-SIDEGLASS2000"></a>
                                            <a class="vlightbox1" onclick="show_img_popup(this)" src="data/images1/b950-1350000.jpg" title="B950-1350000"><img src="data/thumbnails1/b950-1350000.jpg" alt="B950-1350000"></a>
                                            <a class="vlightbox1" onclick="show_img_popup(this)" src="data/images1/newcount10000.jpg" title="NEWCOUNT10000"><img src="data/thumbnails1/newcount10000.jpg" alt="NEWCOUNT10000"></a>
                                            <a class="vlightbox1" onclick="show_img_popup(this)" src="data/images1/updbrac30000.jpg" title="UPDBRAC30000"><img src="data/thumbnails1/updbrac30000.jpg" alt="UPDBRAC30000"></a>
                                            
                                        </div>
                                        <div align="CENTER">
                                            <!-- End VisualLightBox.com BODY section -->

                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>



                    <!-- bodyContent //-->


                </td>






            </tr>
            <style>

            </style>


        </tbody>
    </table>
</div>
<div id="myModalss" class="modalss">
<div class="text-right">
		<span class="model-close index-model-close">×</span>
</div>
  <div class="p-2">
  	<img class="modalss-content" id="img01" alt="sneeze guard regulations" title="sneeze guard partition posts">
  </div>
  
</div>
<?php
require(DIR_WS_INCLUDES . 'footer_new_design.php');
?>