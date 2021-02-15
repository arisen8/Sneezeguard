<?php

     define('BASEURL','jquery/');
	 mysql_connect(DB_SERVER,DB_SERVER_USERNAME,DB_SERVER_PASSWORD);
	 mysql_select_db(DB_DATABASE); 
	 $ImageData=mysql_query("SELECT * FROM  upload WHERE publish='1' order by uploadtime") or die(mysql_error());
	$ImageData2=mysql_query("SELECT * FROM  mainpagepopup WHERE publish='1' ") or die(mysql_error());
	 $ROWDATA=mysql_fetch_array($ImageData2)
?><head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
</script>
<link rel="stylesheet" href="colorbox3.css" />
<script type="text/javascript" src="jquery.colorbox3.js"></script>
<!--<script type="text/javascript" src="/js/common.js"></script>-->
<?php
include(BASEURL.'jquery.simplyscroll.js.php');
?>
<link rel="stylesheet" href="jquery/jquery.simplyscroll.css" media="all" type="text/css">
<script type="text/javascript">
	$(document).ready(function(){
			
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
var tis='<table width="600" bordercolor="#000000" border="2" height="300" cellpadding="0" cellspacing="0"><tr>  <td  rowspan="2"><img src="sneezegaurd/mainpagepopup/images/<?php echo $ROWDATA['imagename1'];?>" alt="t1" width="300" height="305" /></td> <td><img src="sneezegaurd/mainpagepopup/images2/<?php echo $ROWDATA['imagename1'];?>" alt="t2" width="300" height="228" /></td></tr><tr>  <td height="75" align="center"><a style="color:#CCC; border-bottom:0px solid #CCC;" href="<?php echo $ROWDATA['linkname'];?>"><img src="images/popup/learnMore.png"  /></a></td></tr></table>';
              $.colorbox({html:tis, open:true, width:"677", height:"410"});
			   
				$(".group1").colorbox({rel:'group1'});
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












(function($) {
	$(function() {
		$("#scroller").simplyScroll();
	});
})(jQuery);
</script>
 

    <style>
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
    
  
    
    
   

<div style="margin-top:20px; font-size:20px;">
<b>Please Choose a Category</b>
</div>
<P>
<TABLE WIDTH="751" HEIGHT="112" BORDER="0"  style="border:1px solid #999999;" CELLPADDING=5>
	<tr>
		<td align="right" width="20%"><A HREF="<?php echo tep_href_link(FILENAME_DEFAULT,'cPath=86');?>"><IMG SRC="images/Models/In-Stock.jpg" BORDER=0></A></td>
		<td width=5 align="right"><IMG SRC="images/shortVertSepIS.jpg"></td>
			<td valign="top">
				<div class="linkClassFrontStock"><A HREF="<?php echo tep_href_link(FILENAME_DEFAULT,'cPath=86');?>">In-Stock</A><font color="#FFFFFF" size="2"><B> - Production Time: In-Stock</B></font><BR></div>
				<div class="modTextFrontPage">Our In-Stock line features structures complete with optional glass panels. Express Online ordering and checkout is available for fast and easy purchases. Most models ship the following business day.<br></div>
				<div class="modTextFrontPageAddl">15 Models to choose from<br></div>
			</td>
		</tr>
	</TABLE>
	<P>
	<TABLE WIDTH="751" HEIGHT="112" BORDER="0" style="border:1px solid #999999;" CELLPADDING=5>
		<tr>
			<td align=right width=20%><A HREF="custom.php"><IMG SRC="images/Models/Custom.jpg" BORDER=0></A></td>
			<td width=5 align=right><IMG SRC="images/shortVertSep.jpg"></td>
			<td valign=top>
				<div class="linkClassFront"><A HREF=custom.php>Custom</A><font color="#FFFFFF" size="2"><B> - Production Time: 10 Business Days</B></font><BR></div>
				<div class="modTextFrontPage">Our Custom line features 1-1/2" round tubing with Clear tempered glass panels. Structures typically include: Presentation quality shop drawings representing the design, features, measurements and code requirements. Units typically ship fully assembled.<br></div><div class="modTextFrontPageAddl">16 Models to choose from<br></div>
			</td>
		</tr>
	</TABLE>
	<P>
	<TABLE WIDTH="751" HEIGHT="112" BORDER="0" style="border:1px solid #999999;" CELLPADDING=5>
	
		<tr>
			<td align=right width=20%><A HREF="adjustable.php"><IMG SRC="images/Models/Adjustable.jpg" BORDER=0></A></td>
			<td width=5 align=right><IMG SRC="images/shortVertSep.jpg"></td>
			<td valign=top>
				<div class="linkClassFront"><A HREF="adjustable.php">Adjustable</A><font color="#FFFFFF" size="2"><B> - Production Time: 10 Business Days</B></font><BR></div>
				<div class="modTextFrontPage">Our Adjustable line has all the features of the Custom line plus the added ability to arrange the models in various configurations.<br></div><div class="modTextFrontPageAddl">5 Models to choose from<br></div>
			</td>
		</tr>
	</TABLE>
    <P>
	<TABLE WIDTH="751" HEIGHT="112" BORDER="0" style="border:1px solid #999999;" CELLPADDING=5>
		<tr>
			<td align=right width=20%><A HREF="portable.php"><IMG SRC="images/Models/Portables.jpg" BORDER=0></A></td>
			<td width=5 align=right><IMG SRC="images/shortVertSep.jpg"></td>
			<td valign=top>
				<div class="linkClassFront"><A HREF="portable.php">Portables</A><font color="#FFFFFF" size="2"><B> - Production Time: In-Stock</B></font><BR></div>
				<div class="modTextFrontPage">Our Portable line features full adjustability for Pass-Over and Self-Serve configurations. Our heavy duty bases provide a secure freestanding footprint. <br></div>
				<div class="modTextFrontPageAddl">2 Models to choose from<br></div>
			</td>
		</tr>
	</TABLE>
    <P>
    <TABLE WIDTH="751" HEIGHT="112" BORDER="0" style="border:1px solid #999999;" CELLPADDING=5>
		<tr>
			<td align=right width=20%><A HREF="info.php?Model=Adjustable-Shelving&mid=89"><IMG SRC="images/Models/shelv.jpg" BORDER=0></A></td>
			<td width=5 align=right><IMG SRC="images/shortVertSep.jpg"></td>
			<td valign=top>
				<div class="linkClassFront"><A HREF="info.php?Model=Adjustable-Shelving&mid=89">Shelving</A><font color="#FFFFFF" size="2"><B> - Production Time: In-Stock</B></font><BR></div>
				<div class="modTextFrontPage">Our Shelving line features full adjustability configurations. Our heavy duty bases provide a secure freestanding footprint. <br></div>
				<div class="modTextFrontPageAddl">1 Model to choose from<br></div>
			</td>
		</tr>
	</TABLE>
	

