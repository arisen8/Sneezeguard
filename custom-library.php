<?php
ini_set('session.cookie_httponly',1);
ini_set('session.cookie_secure',1);

$page_title='Sneeze Guard for Banks | Custom Library - ADM Sneezeguards'; 
$page_description='Shop Sneeze Guards, Covid-19 Protection and restaurant equipment in US at best prices on ADMSneezeguards. In-stock Glass Barriers for offices are ready to ship.';
$page_keyword='Covid-19 Protection, Coronavirus Updates, coronavirus Prevention Sneeze Guard, Glass Divider choose from, Custom Library ADM Sneezeguards';

require('includes/application_top.php');

require(DIR_WS_INCLUDES . 'header_new_design.php');




?>
<style>
    
</style>



      
<link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="colorbox2.css" />	
<div class="custom custom-library">
    <table class="category-List">
        <tbody>
            <tr>
                <td align="center">
                    <h2 class="customHeading"> Custom Library</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <section class="slider">
                        <div class="images">
                            <ul class="slider slide">
                                <li class="group1 cboxElement polaroid" title="Ex 1" style="text-align:center;font-weight:bold;" href="sneezegaurd/customlib/images2/1.jpg"><br><img alt="sneeze guard" title="sneeze guard" src="sneezegaurd/customlib/images2/1.jpg" width="120"><br style="clear:both"><span class="title">Ex 1</span></li>
                                <li class="group1 cboxElement polaroid" title="Ex 2" style="text-align:center;font-weight:bold;" href="sneezegaurd/customlib/images2/43.jpg"><br><img alt="sneeze guard" title="sneeze guard" src="sneezegaurd/customlib/images2/43.jpg" width="120"><br style="clear:both"><span class="title">Ex 2</span></li>
                                <br style="clear:both">
                            </ul>
                            
                        </div>
                    </section>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<script src="jquery-1.6.2.min.js"></script>
            <script type="text/javascript" src="jquery.flexslider.js"></script>
			
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="jquery.colorbox2.js"></script>
              <script type="text/javascript">
			  $(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1', transition:"none", height:"75%"});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
   
		
		
      </script> 
      <style>
          
      </style>
<?php
require(DIR_WS_INCLUDES . 'footer_new_design.php');
?>