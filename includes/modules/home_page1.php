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
<div id="videogallery">
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
</div>

<font color=white size=4>
<b>Please Choose a Category</b>
</font>
<P>
<TABLE WIDTH="751" HEIGHT="112" BORDER="0" BACKGROUND="images/squareIS.jpg" CELLPADDING=5>
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
	<TABLE WIDTH="751" HEIGHT="112" BORDER="0" BACKGROUND="images/square.jpg" CELLPADDING=5>
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
	<TABLE WIDTH="751" HEIGHT="112" BORDER="0" BACKGROUND="images/square.jpg" CELLPADDING=5>
	
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
	<TABLE WIDTH="751" HEIGHT="112" BORDER="0" BACKGROUND="images/square.jpg" CELLPADDING=5>
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
    <TABLE WIDTH="751" HEIGHT="112" BORDER="0" BACKGROUND="images/square.jpg" CELLPADDING=5>
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
	

