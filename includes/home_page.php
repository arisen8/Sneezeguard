<?php

     define('BASEURL','jquery/');
	 mysql_connect(DB_SERVER,DB_SERVER_USERNAME,DB_SERVER_PASSWORD);
	 mysql_select_db(DB_DATABASE); 
	 $ImageData=mysql_query("SELECT * FROM  upload WHERE publish='1' order by uploadtime") or die(mysql_error());
	$tis=$_GET[T];
	
	$ImageData2=mysql_query("SELECT * FROM  mainpagepopup WHERE publish='1' ") or die(mysql_error());
	 $ROWDATA=mysql_fetch_array($ImageData2)
?><head>

<!--<script type="text/javascript" src="/js/common.js"></script>-->
<?php
include(BASEURL.'jquery.simplyscroll.js.php');
?>
<link rel="stylesheet" href="jquery/jquery.simplyscroll.css" media="all" type="text/css">
<link rel="stylesheet" href="jquery/jquery.simplyscroll.css" media="all" type="text/css">
<script type="text/javascript">
	if (document.all && !document.addEventListener) {
		var $j = jQuery.noConflict();
	} 
</script>
<link rel="stylesheet" href="colorbox3.css" />
<script type="text/javascript" src="jquery.colorbox3.js"></script>
 <?php if ($ROWDATA['publish']==1): ?>
 <script type="text/javascript">
//     $(document).ready(function(){
			
// 				//Examples of how to assign the Colorbox event to elements
// 				$("#cboxContent").addClass("blue_border_example");
// 				$("#cboxTopLeft").hide();
// $("#cboxTopRight").hide();
// $("#cboxBottomLeft").hide();
// $("#cboxBottomRight").hide();
// $("#cboxMiddleLeft").hide();
// $("#cboxMiddleRight").hide();
// $("#cboxTopCenter").hide();
// $("#cboxBottomCenter").hide();
// var tis='<table width="600" bordercolor="#000000" border="2" height="300" cellpadding="0" cellspacing="0"><tr>  <td  rowspan="2"><img src="sneezegaurd/mainpagepopup/images/<?php echo $ROWDATA['imagename1'];?>" alt="t1" width="300" height="305" /></td> <td ><img src="sneezegaurd/mainpagepopup/images2/<?php echo $ROWDATA['imagename1'];?>" alt="t2" width="300" height="228" /></td></tr><tr>  <td height="75" align="center"><a style="color:#CCC; border-bottom:0px solid #CCC;" href="<?php echo $ROWDATA['linkname'];?>"><img src="images/popup/learnMore.png"  /></a></td></tr></table>';
//               $.colorbox({html:tis, open:true, width:"677", height:"410"});
			   
				
// 			});
 </script>
 <?php endif; ?>
<script type="text/javascript">

	





(function($) {
	$(function() {
		$("#scroller").simplyScroll();
	});
})(jQuery);

/*
$(document).ready(function() {	

		var id = '#dialog';
	
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(1000);	
		$('#mask').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
              
		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);
	
		//transition effect
		$(id).fadeIn(2000); 	
	
	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		
		$('#mask').hide();
		$('.window').hide();
	});		
	
	//if mask is clicked
	$('#mask').click(function () {
		//$(this).hide();
		//$('.window').hide();
	});		
	
});
*/

</script>
 

    <style>
	body {
font-family:verdana;
font-size:15px;
}

a {color:#333; text-decoration:none}
a:hover {color:#ccc; text-decoration:none}

#mask {
  position:absolute;
  left:0;
  top:0;
  z-index:9000;
  background-color:#000;
  display:none;
}  
#boxes .window {
  position:absolute;
  left:0;
  top:0;
  width:440px;
  height:200px;
  display:none;
  z-index:9999;
  padding:20px;
}
#boxes #dialog {
  width:375px; 
  height:203px;
  padding:10px;
  background-color:#ffffff;
}
	
	
	
        .tips b {display:block; text-align:center; margin-bottom:9px;}
    </style>
</head>

<style>
    .error h2{
        
        padding:0;
        margin:0;
        text-align:center;
    }
    .error h2 a{
        color:red !important;
        text-align:center;
    }
    #TB_ajaxWindowTitle{
        display:block;
        margin-left:200px;
    }
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
<!--<div id="videogallery">
    <a  href="demo.php?name=comp_7&KeepThis=true&TB_iframe=true&height=480&width=640" class="thickbox"  title="Comp 7" data-url='info.php?Model=EP-950-ACRYLIC&pid=70'>
        <img src="images/data/thumbnails/comp_7.png" border="0" alt="Comp 7" />
    </a>
    <a href="demo.php?name=a475_pass2&KeepThis=true&TB_iframe=true&height=480&width=640&" class="thickbox" data-url='info.php?Model=A-475' target="_blank">
        <img src="images/data/thumbnails/a475_pass2.png" border="0" alt="a475_pass2" />
    </a>
    <a href="demo.php?name=b950_portable_master_blaster&KeepThis=true&TB_iframe=true&height=480&width=640" class="thickbox"  target="_blank" title="B950_PORTABLE_MASTER_BLASTER" data-url='info.php?Model=B-950P-GLASS&pid=79'>
        <img src="images/data/thumbnails/b950_portable_master_blaster.png" border="0" alt="B950_PORTABLE_MASTER_BLASTER">
    </a>
    <a href="demo.php?name=toppings_101&KeepThis=true&TB_iframe=true&height=480&width=640" class="thickbox"  target="_blank" title="toppings_101" data-url='info.php?Model=B-950&mid=80'>
        <img src="images/data/thumbnails/toppings_101.png" border="0" alt="toppings_101" /><span></span>
    </a>
    <a href="demo.php?name=b950_swivel_commercial&KeepThis=true&TB_iframe=true&height=480&width=640" class="thickbox"  target="_blank"  title="b950_swivel_commercial" data-url='info.php?Model=B-950-SWIVEL&mid=81'>
        <img src="images/data/thumbnails/b950_swivel_commercial.png" border="0" alt="b950_swivel_commercial" />
    </a>
    
    
</div>-->

<?php
if (!$detect->isMobile())
{

?>


<ul id="scroller">      
      <?php
  
	  while($Data=mysql_fetch_array($ImageData))
	  {
	   
	 $ALT= explode("=",$Data['linkname']);
	 // echo "<!/sneezegaurd/upload/images/!>';
	  ?>  
     
 <li> <a  href="demo.php?name=<?php echo  $Data['uploadid'];?>&KeepThis=true&TB_iframe=true&height=480&width=640" class="thickbox"  title="<?php echo $ALT[1];?>" 
  data-url='<?php echo $Data['linkname'];?>'>
   <img src="sneezegaurd/upload/images/<?php echo  $Data['imagename'];?>" border="0"  alt="<?php echo $ALT[1];?>" />
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
.simply-scroll .simply-scroll-list li{
	width:314px;
}
</style>

<style>
#TB_window {
    position: fixed;
    background: #ffffff;
    z-index: 102;
    color: #000000;
    display: none;
    border: 4px solid #525252;
    text-align: left;
    top: 33%;
    left: 50%;
}

#TB_ajaxWindowTitle {
    display: block;
    margin-left: 184px;
    font-size: 30px;
}
.error h2 {
    padding: 0;
    margin: 0;
    text-align: center;
	font-size:30px;
}

#TB_closeAjaxWindow img{width:50px;}
</style>
 <ul id="scroller" width="">      
      <?php
  
	  while($Data=mysql_fetch_array($ImageData))
	  {
	   
	 $ALT= explode("=",$Data['linkname']);
	 // echo "<!/sneezegaurd/upload/images/!>';
	  ?>  
     
 <li> <a  href="demo.php?name=<?php echo  $Data['uploadid'];?>&KeepThis=true&TB_iframe=true&height=780&width=840" class="thickbox"  title="<?php echo $ALT[1];?>" 
  data-url='<?php echo $Data['linkname'];?>'>
   <img src="sneezegaurd/upload/images/<?php echo  $Data['imagename'];?>" border="0"  alt="<?php echo $ALT[1];?>" style="width:300px;" />
 </a></li>            

<?php

}
?>
</ul>
<?php
}
?>
  
 
  
    <div id="boxes">
<div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window">

<?php
 //include_once('t/example.php'); ?>

</div>
<!-- Mask to cover the whole screen -->
<div style="width: 1478px; height: 602px; display: none; opacity: 0.8;" id="mask"></div>
</div>
    
   

<div style="margin-top:20px; font-size:20px;">

</div>

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
.modTextFrontPage span{font-size: 14px !important;}
.modTextFrontPage p{font-size: 14px !important;}
</style>

<TABLE WIDTH="751" HEIGHT="112" BORDER="0"  style="border:1px solid #999999;" CELLPADDING=5>
	<tr>
		<td align="right" width="20%">';
				

				switch ($content_name1) {
					case 'In-Stock':
				echo '<A HREF="'.tep_href_link(FILENAME_DEFAULT,"cPath=86").'	"><IMG SRC="sneezegaurd/images/homepage_images/'.$picture1.'" BORDER=0></A></td>
						<td width=5 align="right"><IMG SRC="images/shortVertSepIS.jpg"></td>
						<td valign="top">
			
				<div class="linkClassFrontStock">
				<div>';
				
				echo '<div style="width: 50%; float:left;"><A HREF="'.tep_href_link(FILENAME_DEFAULT,'cPath=86').'">'.$content_name1.'</A></div>';
						break;

					case 'Summer Blowout Sale':
					echo'<A HREF="'.tep_href_link(FILENAME_DEFAULT,"cPath=86").'	"><IMG SRC="sneezegaurd/images/homepage_images/'.$picture1.'" BORDER=0></A></td>
		<td width=5 align="right"><IMG SRC="images/shortVertSepIS.jpg"></td>
			<td valign="top">
			
				<div class="linkClassFrontStock">
				<div>';

			echo '<div style="width: 50%; float:left;"><A HREF="advanced_search_result.php?categories_id=127&keywords=Special-Price&sort=5a">'.$content_name1.'</A></div>';
						break;

					case 'Custom':
					echo'<A HREF="custom.php"><IMG SRC="sneezegaurd/images/homepage_images/'.$picture1.'" BORDER=0></A></td>
		<td width=5 align="right"><IMG SRC="images/shortVertSepIS.jpg"></td>
			<td valign="top">
			
				<div class="linkClassFrontStock">
				<div>';

				echo '<div style="width: 50%; float:left;"><A HREF=custom.php>'.$content_name1.'</A></div>';
						break;

					case 'Adjustable':
					echo'<A HREF="adjustable.php"><IMG SRC="sneezegaurd/images/homepage_images/'.$picture1.'" BORDER=0></A></td>
		<td width=5 align="right"><IMG SRC="images/shortVertSepIS.jpg"></td>
			<td valign="top">
			
				<div class="linkClassFrontStock">
				<div>';

				echo '<div style="width: 50%; float:left;"><A HREF="adjustable.php">'.$content_name1.'</A></div>';
						break;

					case 'Portables':
					echo'<A HREF="portable.php"><IMG SRC="sneezegaurd/images/homepage_images/'.$picture1.'" BORDER=0></A></td>
		<td width=5 align="right"><IMG SRC="images/shortVertSepIS.jpg"></td>
			<td valign="top">
			
				<div class="linkClassFrontStock">
				<div>';

				echo '<div style="width: 50%; float:left;"><A HREF="portable.php">'.$content_name1.'</A></div>';
						break;

					case 'Installations':
					echo '<A HREF="instalation.php"><IMG SRC="sneezegaurd/images/homepage_images/'.$picture1.'" BORDER=0></A></td>
		<td width=5 align="right"><IMG SRC="images/shortVertSepIS.jpg"></td>
			<td valign="top">
			
				<div class="linkClassFrontStock">
				<div>';

				echo '<div style="width: 50%; float:left;"><A HREF="instalation.php">'.$content_name1.'</A></div>';
						break;	

					default:
				echo '<div style="width: 50%; float:left;"><A HREF="'.tep_href_link(FILENAME_DEFAULT,'cPath=86').'">'.$content_name1.'</A></div>';
						break;
				}				

				echo '<div style="width: 50%; float:right;"><font color="#FFFFFF" size="2"><B>Production Time: '.$production_time1.'</B></font></div>
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

echo "hii";

echo '<td id="ex1" align=center width="190" valign="top">
<style>
.button224 {
    background-color: #0e82f8d4; /* Green */
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 39px;
    cursor: pointer;
	width: 610px;
    height: 119px;
}
.button2 {border-radius: 10px;padding-top: 10px;}
.content22{
font-size: 23px;font-family: tahoma,verdana,arial;text-align:justify;
}
.simply-scroll .simply-scroll-clip {
    width: 964px;
}

.content22 span{font-size: 26px !important;}
.content22 p{font-size: 26px !important;}
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
				echo '<td><A HREF="https://www.sneezeguard.com/custom.php" style="font-size:31px;font-weight: bold;line-height: 22px;text-decoration: none;color:#c38731;">'.$content_name1.'</A></td>';
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
				echo '<td><A HREF="adjustable.php" style="font-size:31px;font-weight: bold;line-height: 22px;text-decoration: none;color:#c38731;">'.$content_name1.'</A></td>';
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
				echo '<td><A HREF="portable.php" style="font-size:31px;font-weight: bold;line-height: 22px;text-decoration: none;color:#c38731;">'.$content_name1.'</A></td>';
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

				echo '<td colspan="2" style="font-size:32px;" align="center"><a href="portable.php"><button class="button224 button2">Buy Online</button></b></td>';

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
				echo '<td><A HREF="instalation.php" style="font-size:31px;font-weight: bold;line-height: 22px;text-decoration: none;color: #ccf906;">'.$content_name1.'</A></td>';
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


	// echo '<td align="right"><B style="font-size: 26px;">Production Time: '.$production_time1.'</B></td>
	// </tr>
	// <tr>
	// <td valign="top"  colspan="2">
	// 			<SPAN class="content22">'.$description1.'.<br></SPAN>
	// 	</td>
	// </tr>
	// <tr><td colspan="2" style="height:20px;"></td></tr>
	// <tr>
	// <td colspan="2" style="font-size:25px;" align="center"><SPAN><b>'.$total_model1.' Models to choose from</b><br></SPAN></td>
	// 	</tr>
	// 		<tr><td colspan="2" style="height:20px;"></td></tr>

	// 	<tr>';

}else{
	
}
}
?>
<TABLE><TR><TD HEIGHT="1PX"></TD></TR></TABLE>






    </P>

<?php
}
?>

   

