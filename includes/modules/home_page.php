<?php







     define('BASEURL','jquery/');



	 mysql_connect(DB_SERVER,DB_SERVER_USERNAME,DB_SERVER_PASSWORD);



	 mysql_select_db(DB_DATABASE); 



	 $ImageData=mysql_query("SELECT * FROM  upload WHERE publish='1' order by uploadtime") or die(mysql_error());



	$tis=$_GET[T];



	



	

 $ImageData2=mysql_query("SELECT * FROM  custompopup WHERE publish='1' ") or die(mysql_error());

     $ROWDATA=mysql_fetch_array($ImageData2)



	 



?><head>







<!--<script type="text/javascript" src="/js/common.js"></script>-->
<script type="text/javascript" src="jquery/jquery.simplyscroll.js"></script>


<?php



//include(BASEURL.'jquery.simplyscroll.js.php');



?>







<?php



if (!$detect->isMobile())



{

	echo'<style>

	
	</style>

	';

}

else{

	echo'<style>

	</style>';

	

	

	echo'<style>

	</style>';

}

?>



























<script type="text/javascript">



	if (document.all && !document.addEventListener) {



		var $j = jQuery.noConflict();



	} 

 $(document).ready(function(){



        $('a.thickbox').click(function(){



            url=$(this).attr('data-url');



            str ='<div class="error"><h2><a href="'+url+'">TAKE ME TO THIS PRODUCT</a></h2></div>'



            document.getElementById('TB_ajaxWindowTitle').innerHTML=str; 



        });    



    });

</script>



<link rel="stylesheet" href="colorbox3.css" />



<script type="text/javascript" src="jquery.colorbox3.js"></script>

<?php if ($ROWDATA['publish']==1): ?>








<?php
if (!$detect->isMobile())
{
?>


<?php
}
?>


<style>
	
</style>


 <script type="text/javascript">

  window.addEventListener('load', function () {

		  //$(document).ready(function(){	

				//Examples of how to assign the Colorbox event to elements

				$("#cboxContent").addClass("blue_border_example");

				

				$("#cboxTopLeft").hide();

$("#cboxTopRight").hide();

$("#cboxBottomLeft").hide();

$("#cboxBottomRight").hide();

$("#cboxMiddleLeft").hide();

$("#cboxMiddleRight").hide();

$("#cboxTopCenter").hide();

$("#cboxBottomCenter").hide();




<?php

if (!$detect->isMobile())



{

?>




var tis='<span id="popuptext1"><b>EP-6</b></span><span id="popuptext2"><b>EP-5</b></span><span  id="popuptext3"><b>EP-8</b> </span><table width="100%"  cellpadding="0" cellspacing="0" id="table1"><tr><td><h3 id="table1h31">Stock Size</h3></td><td><h3 id="table1h32">BARRIERS</h3></td><td><h3 id="table1h33">Custom Sizes</h3></td></tr></table><table width="100%"  cellpadding="0" cellspacing="0" id="table2" bordercolor="#ff0000" border="2"><tr colspan="2"><td><a href="<?php echo tep_href_link(FILENAME_PRODUCT,"cPath=86_129");?>"><img class="lazyload" src="image_new/EP6_new31.gif" alt="Sneeze Guard" title="Sneeze Guard" width="100%" height="456" /></a></td></tr></table><table width="100%"  cellpadding="0" cellspacing="0" id="table3" bordercolor="#ff0000" ></table><table width="100%"  cellpadding="0" cellspacing="0" id="table4" bordercolor="#ff0000" border="2"><tr><td><a href="<?php echo tep_href_link(FILENAME_PRODUCT,"cPath=86_72");?>"><img class="lazyload" src="image_new/banking.png" alt="Sneeze Guard" title="Sneeze Guard" width="320"height="210" /></a></td><td><a href="<?php echo tep_href_link(FILENAME_PRODUCT,"cPath=86_133");?>"><img class="lazyload" src="image_new/ep8_start.jpg" alt="Sneeze Guard" title="Sneeze Guard" width="320" height="210" /></a></td></tr></table>';


<?php

}

else{



?>


var tis='<span style="top: 10%;left: 73%;position: absolute;color:black;font-size: 20px;"><b>EP-6</b></span><span style="top: 95%;left: 2%;position: absolute;color:white;font-size: 20px;"><b>EP-5</b></span><span style="top: 95%;left: 51%;position: absolute;color:black;font-size: 20px;"><b>EP-8</b></span><table width="100%"  cellpadding="0" cellspacing="0" style="border-bottom-width: 0px;"><tr><td><h3 style="font-size:13px;color: black;margin-top: 0px;margin-bottom: 0px;">Stock Size</h3></td><td><h3 style="font-size:18px;color: black;margin-top: 0px;margin-bottom: 0px;">BARRIERS</h3></td><td><h3 style="font-size:13px;color: black;margin-top: 0px;margin-bottom: 0px;">Custom Sizes</h3></td></tr></table><table width="100%"  cellpadding="0" cellspacing="0" style="border-bottom-width: 0px;" bordercolor="#ff0000" border="2"><tr ><td  ><a href="<?php echo tep_href_link(FILENAME_PRODUCT,"cPath=86_129");?>"><img class="lazyload" src="image_new/EP6_new31.gif" alt="Sneeze Guard" title="Sneeze Guard" width="100%" height="456" /></a></td></tr></table><table width="100%"  cellpadding="0" cellspacing="0" style="border-bottom-width: 0px;border-top-width: 0px; background-color:#ff0000;" bordercolor="#ff0000" ></table><table width="100%"  cellpadding="0" cellspacing="0" style="border-bottom-width: 0px;" bordercolor="#ff0000" border="2"><tr><td><a href="<?php echo tep_href_link(FILENAME_PRODUCT,"cPath=86_72");?>"><img class="lazyload" src="image_new/banking.png" alt="Sneeze Guard" title="Sneeze Guard" width="320"height="210" /></a></td><td><a href="<?php echo tep_href_link(FILENAME_PRODUCT,"cPath=86_133");?>"><img class="lazyload" src="image_new/ep8_start.jpg" alt="Sneeze Guard" title="Sneeze Guard" width="320" height="210" /></a></td></tr></table>';







<?php

}

?>














              $.colorbox({html:tis, open:true, width:"677", height:"410",top:"5%"});

					

				

			//});
	})
			

			function close_btnnn(){

				

            parent.$.colorbox.close();

            return false;

				

			}

			

 </script>

 <?php endif; ?>



<script type="text/javascript">







	























(function($) {



	$(function() {



		$("#scroller").simplyScroll();



	});



})(jQuery);







</script>



 







    <style>




    </style>



</head>







<style>


</style>



<script>



    $(document).ready(function(){



        $('a.thickbox').click(function(){



            url=$(this).attr('data-url');



            str ='<div class="error"><h2><a href="'+url+'">TAKE ME TO THIS PRODUCT</a></h2></div>'



            document.getElementById('TB_ajaxWindowTitle').innerHTML=str; 



        });    



    });



    

</script>







<?php



if (!$detect->isMobile())



{







?>





<style>
</style>





<ul id="scroller">      



      <?php



  



	  while($Data=mysql_fetch_array($ImageData))



	  {



	   



	 $ALT= explode("=",$Data['linkname']);



	 // echo "<!/sneezegaurd/upload/images/!>';
$expl11= explode("=",$Data['linkname']);

$expl12= explode('&',$expl11[1]);
//print_r($expl12);

$modellname=$expl12[0]

	  ?>  


     



 <li> <a  href="demo.php?name=<?php echo  $Data['uploadid'];?>&KeepThis=true&TB_iframe=true&height=480&width=640&modelname=<?php echo$modellname; ?>" class="thickbox"  title="<?php echo $ALT[1];?>" 



  data-url='<?php echo $Data['linkname'];?>'>



   <img class="lazyload" src="sneezegaurd/upload/images/<?php echo  $Data['imagename'];?>" border="0"  alt="Sneeze Guard" />



 </a></li>            







<?php







}



?>



</ul>



 <?php



}



else{



?>



<style>





</style>







<style>




</style>



 <ul id="scroller" width="">      



      <?php



  



	  while($Data=mysql_fetch_array($ImageData))



	  {



	   



	 $ALT= explode("=",$Data['linkname']);



	 // echo "<!/sneezegaurd/upload/images/!>';



	 // echo "<!/sneezegaurd/upload/images/!>';
$expl11= explode("=",$Data['linkname']);

$expl12= explode('&',$expl11[1]);
//print_r($expl12);

$modellname=$expl12[0]


	  ?>  



     



 <li> <a  href="demo.php?name=<?php echo  $Data['uploadid'];?>&KeepThis=true&TB_iframe=true&height=780&width=840&modelname=<?php echo$modellname; ?>" class="thickbox"  title="<?php echo $ALT[1];?>" 



  data-url='<?php echo $Data['linkname'];?>'>



   <img class="lazyload" src="sneezegaurd/upload/images/<?php echo  $Data['imagename'];?>" border="0"  alt="<?php echo $ALT[1];?>" style="width:300px;" />



 </a></li>            







<?php







}



?>



</ul>



<?php



}



?>



  



 



  






<?php







$query_spacial_price=mysql_query("SELECT * FROM  special_price_product_status") or die(mysql_error());



$spacial_price=mysql_fetch_array($query_spacial_price);







$status_flag=$spacial_price['status_flag'];



if (!$detect->isMobile())



{







//In-Stock Content



// $query_instock=mysql_query("SELECT * FROM  homepage_content WHERE content_id=1") or die(mysql_error());



// $homepage_content_instock=mysql_fetch_array($query_instock);







  $res=tep_db_query("select * from homepage_content ORDER BY `priority` ASC");//Fetching the popups from database!



    while($homepage_content_instock=tep_db_fetch_array($res)){







$content_name1=$homepage_content_instock['content_name'];	



$description1=$homepage_content_instock['description'];	



$production_time1=$homepage_content_instock['production_time'];	



$total_model1=$homepage_content_instock['total_model'];	



$content_id=$homepage_content_instock['content_id'];	



$status_flag=$homepage_content_instock['status_flag'];	







$query_instockss=mysql_query("SELECT * FROM  homepage_content_img WHERE content_id=".$content_id) or die(mysql_error());



$homepage_content_instockss=mysql_fetch_array($query_instockss);



$picture1=$homepage_content_instockss['pic'];	























if ($status_flag==1) {



	# code...



echo '<style>;



</style>







<TABLE WIDTH="751" HEIGHT="112" BORDER="0"  id="tableinsrock" CELLPADDING=5>



	<tr>



		<td align="right" width="20%">';



				







				switch ($content_name1) {



					case 'In-Stock':



				echo '<A HREF="'.tep_href_link(FILENAME_DEFAULT,"cPath=86").'	"><img class="lazyload" src="sneezegaurd/images/homepage_images/'.$picture1.'" BORDER=0 title="Sneeze Guard" alt="Sneeze Guard"></A></td>



						<td width=5 align="right"><img class="lazyload" src="images/shortVertSepIS.jpg" title="Sneeze Guard" alt="Sneeze Guard"></td>



						<td valign="top">



			



				<div class="linkClassFrontStock">



				<div>';



			echo'<style>
			
			</style>
			';



				echo '<div id="instockdiv1"><A HREF="'.tep_href_link(FILENAME_DEFAULT,'cPath=86').'">'.$content_name1.'</A></div>';



						break;







					case 'Summer Blowout Sale':



					echo'<A HREF="'.tep_href_link(FILENAME_DEFAULT,"cPath=86").'	"><img class="lazyload" src="sneezegaurd/images/homepage_images/'.$picture1.'" BORDER=0 title="Sneeze Guard" alt="Sneeze Guard"></A></td>



		<td width=5 align="right"><img class="lazyload" src="images/shortVertSepIS.jpg" title="Sneeze Guard" alt="Sneeze Guard"></td>



			<td valign="top">



			



				<div class="linkClassFrontStock">



				<div>';







			echo '<div id="instockdiv2"><A HREF="advanced_search_result.php?categories_id=127&keywords=Special-Price&sort=5a">'.$content_name1.'</A></div>';



						break;







					case 'Custom':



					echo'<A HREF="'.tep_href_link("custom.php").'"><img class="lazyload" src="sneezegaurd/images/homepage_images/'.$picture1.'" BORDER=0 title="Sneeze Guard" alt="Sneeze Guard"></A></td>



		<td width=5 align="right"><img class="lazyload" src="images/shortVertSepIS.jpg" title="Sneeze Guard" alt="Sneeze Guard"></td>



			<td valign="top">



			



				<div class="linkClassFrontStock">



				<div>';







				echo '<div id="instockdiv1"><A HREF='.tep_href_link("custom.php").'>'.$content_name1.'</A></div>';



						break;







					case 'Adjustable':



					echo'<A HREF="'.tep_href_link("adjustable.php").'"><img class="lazyload" src="sneezegaurd/images/homepage_images/'.$picture1.'" BORDER=0 title="Sneeze Guard" alt="Sneeze Guard"></A></td>



		<td width=5 align="right"><img class="lazyload" src="images/shortVertSepIS.jpg" title="Sneeze Guard" alt="Sneeze Guard"></td>



			<td valign="top">



			



				<div class="linkClassFrontStock">



				<div>';







				echo '<div id="instockdiv1"><A HREF="'.tep_href_link("adjustable.php").'">'.$content_name1.'</A></div>';



						break;







					case 'Portables':



					echo'<A HREF="'.tep_href_link("portable.php").'"><img class="lazyload" src="sneezegaurd/images/homepage_images/'.$picture1.'" BORDER=0 title="Sneeze Guard" alt="Sneeze Guard"></A></td>



		<td width=5 align="right"><img class="lazyload" src="images/shortVertSepIS.jpg" title="Sneeze Guard" alt="Sneeze Guard"></td>



			<td valign="top">



			



				<div class="linkClassFrontStock">



				<div>';







				echo '<div id="instockdiv1"><A HREF="'.tep_href_link("portable.php").'">'.$content_name1.'</A></div>';



						break;







					case 'Installations':



					echo '<A HREF="'.tep_href_link("instalation.php").'"><img class="lazyload" src="sneezegaurd/images/homepage_images/'.$picture1.'" BORDER=0 title="Sneeze Guard" alt="Sneeze Guard"></A></td>



		<td width=5 align="right"><img class="lazyload" src="images/shortVertSepIS.jpg" title="Sneeze Guard" alt="Sneeze Guard"></td>



			<td valign="top">



			



				<div class="linkClassFrontStock">



				<div>';







				echo '<div id="instockdiv1"><A HREF="'.tep_href_link("instalation.php").'">'.$content_name1.'</A></div>';



						break;	







					default:



				echo '<div id="instockdiv1"><A HREF="'.tep_href_link(FILENAME_DEFAULT,'cPath=86').'">'.$content_name1.'</A></div>';



						break;



				}				







				echo '<div id="instockdiv1"><B><span id="productiontime">Production Time: '.$production_time1.'</span></B></div>



				</div><BR></div>



				<div class="modTextFrontPage">'.$description1.'<br></div>



				<div class="modTextFrontPageAddl">'.$total_model1.' Models to choose from<br></div>



			</td>



		</tr>



</TABLE>



<TABLE><TR><TD HEIGHT="1PX"></TD></TR></TABLE>';







}else{}







}











?>



<P>







<?php



}



else{







//cho "hii";







echo '<td id="ex1" align=center width="190" valign="top">



<style>




</style>



<P>';







  $res=tep_db_query("select * from homepage_content ORDER BY `priority` ASC");//Fetching the popups from database!



    while($homepage_content_instock=tep_db_fetch_array($res)){







$content_name1=$homepage_content_instock['content_name'];	



$description1=$homepage_content_instock['description'];	



$production_time1=$homepage_content_instock['production_time'];	



$total_model1=$homepage_content_instock['total_model'];	



$content_id=$homepage_content_instock['content_id'];	



$status_flag=$homepage_content_instock['status_flag'];	







$query_instockss=mysql_query("SELECT * FROM  homepage_content_img WHERE content_id=".$content_id) or die(mysql_error());



$homepage_content_instockss=mysql_fetch_array($query_instockss);



$picture1=$homepage_content_instockss['pic'];	























if ($status_flag==1) {



// echo '<TABLE WIDTH="751" HEIGHT="112" BORDER="0"  CELLPADDING=5>



// 	<tr>



// 	<td valign="top" colspan="2" style="font-size:38px;">Our Products</td>



// 	</tr>



// 	<tr><td colspan="2" style="height:20px;"></td></tr>







// 	<tr>';



		switch ($content_name1) {







					case 'In-Stock':



				echo '<TABLE WIDTH="751" HEIGHT="112" BORDER="0"  CELLPADDING=5>



					<tr>



					<td valign="top" colspan="2" style="font-size:38px;">Our Products</td>



					</tr>



					<tr><td colspan="2" style="height:20px;"></td></tr>







					<tr>';



				echo '<td><A HREF="'.tep_href_link(FILENAME_DEFAULT,'cPath=86').'" style="font-size:31px;font-weight: bold;line-height: 22px;text-decoration: none;color: #ccf906;">'.$content_name1.'</A></td>';







				echo '<td align="right"><B style="font-size: 26px;">Production Time: '.$production_time1.'</B></td>



				</tr>



				<tr>



				<td valign="top"  colspan="2">



							<SPAN class="content22">'.$description1.'.<br></SPAN>



					</td>



				</tr>



				<tr><td colspan="2" style="height:20px;"></td></tr>



				<tr>



				<td colspan="2" style="font-size:25px;" align="center"><SPAN><b>'.$total_model1.' Models to choose from</b><br></SPAN></td>



					</tr>



						<tr><td colspan="2" style="height:20px;"></td></tr>







					<tr>';







				echo '<td colspan="2" style="font-size:32px;" align="center"><a href="'.tep_href_link(FILENAME_DEFAULT,'cPath=86').'"><button class="button224 button2">Buy Online</button></b></td>';







				echo '</tr>



				



		</TABLE>



		<br />



		<hr />



		<br />';									



						break;







					case 'Summer Blowout Sale':



				echo '<TABLE WIDTH="751" HEIGHT="112" BORDER="0"  CELLPADDING=5>







					<tr><td colspan="2" style="height:20px;"></td></tr>







					<tr>';					



				echo '<td><A HREF="advanced_search_result.php?categories_id=127&keywords=Special-Price&sort=5a" style="font-size:31px;font-weight: bold;line-height: 22px;text-decoration: none;color: #ccf906;">'.$content_name1.'</A></td>';







				echo '<td align="right"><B style="font-size: 26px;">Production Time: '.$production_time1.'</B></td>



				</tr>



				<tr>



				<td valign="top"  colspan="2">



							<SPAN class="content22">'.$description1.'.<br></SPAN>



					</td>



				</tr>



				<tr><td colspan="2" style="height:20px;"></td></tr>



				<tr>



				<td colspan="2" style="font-size:25px;" align="center"><SPAN><b>'.$total_model1.' Models to choose from</b><br></SPAN></td>



					</tr>



						<tr><td colspan="2" style="height:20px;"></td></tr>







					<tr>';	



			



			echo '<td colspan="2" style="font-size:32px;" align="center"><a href="advanced_search_result.php?categories_id=127&keywords=Special-Price&sort=5a"><button class="button224 button2">Buy Now</button></b></td>';







				echo '</tr>



				



		</TABLE>



		<br />



		<hr />



		<br />';							



						break;







					case 'Custom':



				echo '<TABLE WIDTH="751" HEIGHT="112" BORDER="0"  CELLPADDING=5>







					<tr><td colspan="2" style="height:20px;"></td></tr>







					<tr>';					



				echo '<td><A HREF="'.tep_href_link("custom.php").'" style="font-size:31px;font-weight: bold;line-height: 22px;text-decoration: none;color:#c38731;">'.$content_name1.'</A></td>';



				echo '<td align="right"><B style="font-size: 26px;">Production Time: '.$production_time1.'</B></td>



				</tr>



				<tr>



				<td valign="top"  colspan="2">



							<SPAN class="content22">'.$description1.'.<br></SPAN>



					</td>



				</tr>



				<tr><td colspan="2" style="height:20px;"></td></tr>



				<tr>



				<td colspan="2" style="font-size:25px;" align="center"><SPAN><b>'.$total_model1.' Models to choose from</b><br></SPAN></td>



					</tr>



						<tr><td colspan="2" style="height:20px;"></td></tr>







					<tr>';







				echo '</tr>



				



		</TABLE>



		<br />



		<hr />



		<br />';									



						break;







					case 'Adjustable':



				echo '<TABLE WIDTH="751" HEIGHT="112" BORDER="0"  CELLPADDING=5>



					<tr>







					<tr><td colspan="2" style="height:20px;"></td></tr>







					<tr>';					



				echo '<td><A HREF="'.tep_href_link("adjustable.php").'" style="font-size:31px;font-weight: bold;line-height: 22px;text-decoration: none;color:#c38731;">'.$content_name1.'</A></td>';



				echo '<td align="right"><B style="font-size: 26px;">Production Time: '.$production_time1.'</B></td>



				</tr>



				<tr>



				<td valign="top"  colspan="2">



							<SPAN class="content22">'.$description1.'.<br></SPAN>



					</td>



				</tr>



				<tr><td colspan="2" style="height:20px;"></td></tr>



				<tr>



				<td colspan="2" style="font-size:25px;" align="center"><SPAN><b>'.$total_model1.' Models to choose from</b><br></SPAN></td>



					</tr>



						<tr><td colspan="2" style="height:20px;"></td></tr>







					<tr>';







				echo '</tr>



				



		</TABLE>



		<br />



		<hr />



		<br />';									



						break;







					case 'Portables':



				echo '<TABLE WIDTH="751" HEIGHT="112" BORDER="0"  CELLPADDING=5>



					



					<tr><td colspan="2" style="height:20px;"></td></tr>







					<tr>';					



				echo '<td><A HREF="'.tep_href_link("portable.php").'" style="font-size:31px;font-weight: bold;line-height: 22px;text-decoration: none;color:#c38731;">'.$content_name1.'</A></td>';



				echo '<td align="right"><B style="font-size: 26px;">Production Time: '.$production_time1.'</B></td>



				</tr>



				<tr>



				<td valign="top"  colspan="2">



							<SPAN class="content22">'.$description1.'.<br></SPAN>



					</td>



				</tr>



				<tr><td colspan="2" style="height:20px;"></td></tr>



				<tr>



				<td colspan="2" style="font-size:25px;" align="center"><SPAN><b>'.$total_model1.' Models to choose from</b><br></SPAN></td>



					</tr>



						<tr><td colspan="2" style="height:20px;"></td></tr>







					<tr>';







				echo '<td colspan="2" style="font-size:32px;" align="center"><a href="'.tep_href_link("portable.php").'"><button class="button224 button2">Buy Online</button></b></td>';







				echo '</tr>



				



		</TABLE>



		<br />



		<hr />



		<br />';									



						break;







					case 'Installations':



				echo '<TABLE WIDTH="751" HEIGHT="112" BORDER="0"  CELLPADDING=5>



					<tr>



					<td valign="top" colspan="2" style="font-size:38px;">Instalation</td>



					</tr>



					<tr><td colspan="2" style="height:20px;"></td></tr>







					<tr>';					



				echo '<td><A HREF="'.tep_href_link("instalation.php").'" style="font-size:31px;font-weight: bold;line-height: 22px;text-decoration: none;color: #ccf906;">'.$content_name1.'</A></td>';



				echo '<td align="right"><B style="font-size: 26px;">Production Time: '.$production_time1.'</B></td>



				</tr>



				<tr>



				<td valign="top"  colspan="2">



							<SPAN class="content22">'.$description1.'.<br></SPAN>



					</td>



				</tr>



				<tr><td colspan="2" style="height:20px;"></td></tr>



				<tr>



				<td colspan="2" style="font-size:25px;" align="center"><SPAN><b>'.$total_model1.' Models to choose from</b><br></SPAN></td>



					</tr>



						<tr><td colspan="2" style="height:20px;"></td></tr>







					<tr>';







				echo '<td colspan="2" style="font-size:32px;" align="center"><a href="<?php echo tep_href_link(FILENAME_DEFAULT,'.'cPath=86'.');?>"><button class="button224 button2">Buy Online</button></b></td>';







				echo '</tr>



				



		</TABLE>



		<br />



		<hr />



		<br />';									



						break;	







					default:



				echo '<div style="width: 50%; float:left;"><A HREF="'.tep_href_link(FILENAME_DEFAULT,'cPath=86').'">'.$content_name1.'</A></div>';



						break;



			}














}else{



	



}



}



?>



<TABLE><TR><TD HEIGHT="1PX"></TD></TR></TABLE>



























    </P>







<?php



}



?>







   







