<?php
ini_set('session.cookie_httponly',1);
ini_set('session.cookie_secure',1);
  
ob_start();
require('includes/application_top.php');
require(DIR_WS_FUNCTIONS . 'url_validation.php');
$obj=new Urlvalidation();
if(isset($_GET['Model']) && (isset($_GET['mid']) || isset($_GET['pid']))){
	$model_name=$_GET['Model'];
	if(isset($_GET['mid'])){
		$category_id=$_GET['mid'];
	}else if(isset($_GET['pid'])){
		$category_id=$_GET['pid'];
	}else{
			$category_id='';
	}
	if($obj->tep_check_model_name($model_name) && $obj->tep_check_mid($category_id))
	{

	}
	else{
		tep_redirect(tep_href_link('validation_faild', '', 'SSL'));
		exit;
	}
}
if(isset($_GET['var'])){
	$path='images/'.$_GET['Model'].'/'.$_GET['var'];
	if($obj->tep_check_image($path))
	{

	}
	else{
		tep_redirect(tep_href_link('validation_faild', '', 'SSL'));
		exit;
	}
}
?>
<?php

if ($_GET['Model']=='B-950P-GLASS') {

	$page_keyword = 'Sneeze Guard, Custom Sneeze Guard, B-950, Restaurant Food Supply, sneeze guards for buffets';
	
	}elseif($_GET['Model']=='EP5') {
	
	$page_keyword = 'Sneeze Guard, EP5, Vertical Sneeze Guards, Restaurant sneeze guards, Pass over sneeze guard';
	
	}elseif($_GET['Model']=='Ring-EP5') {
	
	$page_keyword = 'Sneeze Guard, EP5 Ringed Adjust, Vertical Sneeze Guards, sneeze guard frame';
	
	}elseif($_GET['Model']=='EP15') {
	
	$page_keyword = 'EP15, Sneeze Guard, sneeze mounts, sneeze gurad kits';
	 
	}elseif($_GET['Model']=='EP11') {
	

	$page_keyword = 'EP11, Sneeze guard, Shop Food Guards Kit, Pass-Over sneeze guards';
	
	}elseif($_GET['Model']=='EP-950-ACRYLIC') {
	
	
	$page_keyword = 'Sneeze Guard, sneeze mounts, sneeze labels, sneeze guard glass, sneeze nsf';

	}elseif($_GET['Model']=='ALLIN1') {
	
	$page_keyword = 'sneeze guard, sneeze guards for buffets, sneeze countertops, sneeze posts guard';
	 
	}else{

	$page_keyword = 'Portable Sneeze Guard, sneeze guard posts, Buffet Equipment and Supplies, online sneeze guard';

	}
	
	
	
	
	
	if($_GET['Model']=='EP-950-ACRYLIC') {
	
	$page_title = 'Sneeze Guard | Glass Guards '.$_GET['Model'].' | Adm Sneezeguards';
	}
	else{
		$page_title = 'Sneeze Guard | Glass Guards Info '.$_GET['Model'].' | Adm Sneezeguards';
	}
	$page_description='ADM Sneezeguards manufactures sneeze guard and food guard. Our sneeze guards and Portable Barrier are based on the latest innovative designs.';
	



require(DIR_WS_INCLUDES . 'header_new_design.php');

// include('includes/configure.php');

		$servername = DB_SERVER;
		$username = DB_SERVER_USERNAME;
		$password = DB_SERVER_PASSWORD;
		$dbname = DB_DATABASE;
		$connt = mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());




//$Model=$_GET["Model"];




    // Open Table
    $result = mysql_query("SELECT * FROM Models");
    $search_catagory = mysql_query("SELECT * FROM categories, categories_description where categories.categories_id=categories_description.categories_id");
    $categoies_search = array();
    while($r=mysql_fetch_array($search_catagory)){
        $categoies_search[$r['categories_name']] = $r['categories_id'];
    }
    if (!$result) {
      echo("<P>Error performing query: " .
           mysql_error() . "</P>");
      exit();
    }
  $Model=$_GET["Model"];
  if($Model=="Adjustable-Shelving"){
    $Model="Shelving";
  }if($Model=="Mid-Shelves"){
    $Model2="MS";
  }
 
   if($Model=="Light-Bar"){
    $Model2="LB";
  }
  
  
   while ( $row = mysql_fetch_array($result) ) {
	
    //Now only show the data for the Model in the address bar
	if($row["Name"] == $Model){
?>
<!---start here-->

<link rel="stylesheet" href="new-design/infostyle.css">



<div class="info-main-container" onmouseover="openCity(event, 'Hide');hide_cart_data()">
<div class="info-sub-container2">
	<img alt="sneeze guard" title="<?php echo $Model ?>" src="images/<?php echo $Model  ; ?>/<?php  if (empty($_GET["var"])) { echo 'START.jpg' ;}  else {echo $_GET["var"];}?>" alt="Sneeze guard <?php echo $Model  ; ?>" title="Sneeze guard <?php echo $Model  ; ?>"  id="infoimage" class="main-image-height-and-width" />
	<div class="Available-finishes">

		<?php  
	
$filename = "images"."/".$Model."/"."lighting.jpg";

if (file_exists($filename)) {
    $l=1;
} else {
    $l=0;
}

$filename = "images"."/".$Model."/"."heatlamp.jpg";

if (file_exists($filename)) {
    $h=1;
} else {
    $h=0;
}


$filename = "images"."/".$Model."/"."endpanel.jpg";

if (file_exists($filename)) {
    $e=1;
} else {
    $e=0;
}

$filename = "images"."/".$Model."/"."ex1bay_1.jpg";

if (file_exists($filename)) {
    $t1=1;
} else {
    $t1=0;
}

$filename = "images"."/".$Model."/"."ex2bay_1.jpg";

if (file_exists($filename)) {
    $t2=1;
} else {
    $t2=0;
}


$filename = "images"."/".$Model."/"."ex3bay_1.jpg";

if (file_exists($filename)) {
    $t3=1;
} else {
    $t3=0;
}

$filename = "images"."/".$Model."/"."STARTblack.jpg";

if (file_exists($filename)) {
    $sb=1;
} else {
    $sb=0;
}

$filename = "images"."/".$Model."/"."BlackPost.jpg";

if (file_exists($filename)) {
    $bp=1;
} else {
    $bp=0;
}

?>

	<table class="table3">
	
	<?php
	echo'
		<tr>';
		
		if ($t1==1) 
		{
		
			echo'<td>
				<a href="'.tep_href_link('info.php', 'Model='.$Model.(isset($_REQUEST["pid"])?"&pid=".$_REQUEST["pid"]:(isset($_REQUEST["mid"])?"&mid=".$_REQUEST["mid"]:"")).'&var=ex1bay.jpg').'"><img src="images/'.$Model.'/ex1bay_1.jpg" alt="adm sneeze guard brackets" title="sneeze guard brackets adm" class="size-of-image" ></a>
			</td>';
		}
		else{
			echo'';
		}
			
		if ($t2==1) 
		{			
			
			echo'<td>
				<a href="'.tep_href_link('info.php', 'Model='.$Model.(isset($_REQUEST["pid"])?"&pid=".$_REQUEST["pid"]:(isset($_REQUEST["mid"])?"&mid=".$_REQUEST["mid"]:"")).'&var=ex2bay.jpg').'"><img src="images/'.$Model.'/ex2bay_1.jpg" alt="adm custom sneeze guards" title="custom sneeze guards adm" class="size-of-image" ></a>
			</td>
			';
			
		}
		else{
			echo'';
		}
			
		if ($t3==1) 
			 {	
			echo'<td>
				<a href="'.tep_href_link('info.php', 'Model='.$Model.(isset($_REQUEST["pid"])?"&pid=".$_REQUEST["pid"]:(isset($_REQUEST["mid"])?"&mid=".$_REQUEST["mid"]:"")).'&var=ex3bay.jpg').'"><img src="images/'.$Model.'/ex3bay_1.jpg" alt="adm nsf sneeze guard" title="nsf sneeze guard adm" class="size-of-image" ></a>
			</td>
		</tr>';
			 }
		else{
			echo'';
		}
		
		
			echo'
		';
		?>
		
		
	</table>
	<div class="table4">
	
	
		<div class="size-of-color">
			<a class="color-black" id="START" alt="START.jpg" title="Brushed Stainless" data-model="<?php echo$Model ?>" onmouseover="change_color(this);"><span></span></a>
		</div>
		
			<?php
		if($Model=='EP5' || $Model=='Ring-EP5' || $Model=='EP11' || $Model=='EP12' || $Model=='EP15' || $Model=='EP21' || $Model=='EP22' || $Model=='EP36' || $Model=='ED20' || $Model=='ES29' || $Model=='ES47' || $Model=='ES31' || $Model=='ES40' || $Model=='ES53' || $Model=='ES67' || $Model=='ES73' || $Model=='ES82' || $Model=='ES90' || $Model=='ES92' || $Model=='B-950-SWIVEL' || $Model=='B-950' || $Model=='B-950P-GLASS' || $Model=='EP-950-ACRYLIC' || $Model=='Light-Bar' || $Model=='Mid-Shelves' || $Model=='Heat-Lamp')
		{
		?>
		
		
		<div class="size-of-color">
			<a class="color-adm" id="BlackPost" title="Coated Black" alt="BlackPost.jpg" data-model="<?php echo$Model ?>" onmouseover="change_color(this);"><span></span></a>
		</div>
		
		<?php
		}
		else{
			echo'';
		}
		
		?>
		
		
		<?php
		if($Model=='EP5' || $Model=='Ring-EP5')
		{
		?>
		
		<div class="size-of-color">
			<a class="color-silver " id="STARTblack" title="Brushed Aluminum" alt="STARTblack.jpg" data-model="<?php echo$Model ?>" onmouseover="change_color(this);"><span></span></a>
		</div>
		<?php
		}
		else{
			echo'';
		}
		
		?>
		
		
	</div>
</div>
</div>
<div class="info-sub-container1">

<table class="text-center table1" height="250px" width="80%" >
	<tr>
		<th class="text-center information">
			<h6 class="heading1" >Information</h6>
		</th>
	</tr>
	
	
	<tr>
		<td>
		<?php
		
//
		
//<a onclick="window.navigator.vibrate(500);" href="video.php?name=EP5&amp;type=anim&amp;KeepThis=true&amp;TB_iframe=true&amp;height=680&amp;width=840" class="thickbox"><img src="img/new_icons/start/360degree.png" alt="sneeze guard" title="sneeze guard for office"></a>

?>
			<button class="button1 360-view-btn"  data-videourlmp4="images/<?php echo$Model ?>/anim.mp4" data-videourlogv="images/<?php echo$Model ?>/anim.ogv" data-videourlwebm="images/<?php echo$Model ?>/anim.webm">360 View</button>
		</td>
	</tr>
	
	<?php if(file_exists('images/'.$Model.'/adj.mp4')||file_exists('images/'.$Model.'/adj.ogv')||file_exists('images/'.$Model.'/adj.swf')||file_exists('images/'.$Model.'/adj.webm')) {?>
	<tr>
		<td>
			<button  class="button1 adj-btn"  data-videourlmp4="images/<?php echo$Model ?>/adj.mp4" data-videourlogv="images/<?php echo$Model ?>/adj.ogv" data-videourlwebm="images/<?php echo$Model ?>/adj.webm">Adjustability</button>
		</td>
	</tr>
	
	<?php } ?>
	
	
	<?php if(file_exists('images/'.$Model.'/adj2.mp4')||file_exists('images/'.$Model.'/adj2.ogv')||file_exists('images/'.$Model.'/adj2.swf')||file_exists('images/'.$Model.'/adj2.webm')) {?>
	<tr>
		<td>
			<button class="button1 adj2-btn" data-videourlmp4="images/<?php echo$Model ?>/adj2.mp4" data-videourlogv="images/<?php echo$Model ?>/adj2.ogv" data-videourlwebm="images/<?php echo$Model ?>/adj2.webm">Adjustability2</button>
		</td>
	</tr>
	
	<?php } ?>
	
	
	      <?php $cpath='&cPath=84_';
                if(isset($_REQUEST["pid"])||isset($_REQUEST["mid"])){
                    $cpath='&mid=';
            }
    ?>
	<tr>
		<td>
		<a href="<?=tep_href_link("info.php", 'Model='.$Model.(isset($_REQUEST["pid"])?"&pid=".$_REQUEST["pid"]:($cpath.$_REQUEST["mid"])).'&var=POSTDIM.jpg')?>"  ><button class="button3">Dimensions</button></a>
			
		</td>
	</tr>

	
	<tr>
		<td>
		<?php if($_REQUEST["mid"]== "72" ||$_REQUEST["mid"]== "122" || $_REQUEST["mid"]== "71" || $_REQUEST["mid"]== "55" || $_REQUEST["mid"]== "56" || $_REQUEST["mid"]== "57" || $_REQUEST["mid"]== "58" || $_REQUEST["mid"]== "59" || $_REQUEST["mid"]== "114" || $_REQUEST["mid"]== "110" || $_REQUEST["mid"]== "61" || $_REQUEST["mid"]== "62" || $_REQUEST["mid"]== "63"|| $_REQUEST["mid"]== "64"|| $_REQUEST["mid"]== "111" || $_REQUEST["mid"]== "123" || $_REQUEST["mid"]== "124" || $_REQUEST["mid"]== "125"  || $_REQUEST["mid"]== "129" || $_REQUEST["mid"]== "132") {?>
			<a href="<?=tep_href_link(isset($_REQUEST["pid"])?"product.php":"product.php", 'Model='.$Model.(isset($_REQUEST["pid"])?"&id=".$_REQUEST["pid"]:"&cPath=84_".$_REQUEST["mid"]))?>" >
         
             <?php } else if(isset($_REQUEST["pid"])||isset($_REQUEST["mid"]))	{ ?>   
<?if($_REQUEST["mid"]== "117" ||$_REQUEST["mid"]== "120" ||$_REQUEST["mid"]== "121") {?><a href="<?=tep_href_link("product_info.php", 'id='.$_REQUEST["mid"].'&type=1BAY&osCsid='.$_REQUEST['osCsid'].'')?>" onmouseover="changeImage('1bay');" onmouseout="showSame();">



<?}
else{
	?>
	
<?php
if($_REQUEST["pid"]=='131' || $_REQUEST["pid"]=='130' || $_REQUEST["pid"]=='133')
{
?>	
<a href="<?=tep_href_link(isset($_REQUEST["pid"])?"product_info.php":"product.php", 'Model='.$Model.(isset($_REQUEST["pid"])?"&id=".$_REQUEST["pid"]:"&cPath=84_".$_REQUEST["mid"]))?>"  >



           
<?php
}
else
{
?>			   
	<a href="<?=tep_href_link(isset($_REQUEST["pid"])?"product_info.php":"product.php", 'Model='.$Model.(isset($_REQUEST["pid"])?"&id=".$_REQUEST["pid"]:"&cPath=84_".$_REQUEST["mid"]))?>"  >
        
<?php
}
?>		
	
	<?}?>
   		   
		   
		   <? } ?>
		
			<button class="button4">Pricing</button></a>
		</td>
	</tr>
	
	
	
	<tr>
		<td>
		 
		   <?if($Model=="Mid-Shelves"){?>
        	<a href="<?=tep_href_link("advanced_search_result.php", 'categories_id='.$categoies_search[$Model].'&keywords='.$Model2.'&sort=5a')?>" ><?}
			else{
			if($_REQUEST["mid"]=='80')
			{
			?>	<a href="<?=tep_href_link("advanced_search_result.php", 'categories_id=80&keywords=B950&sort=5a')?>" >	
			
			<?
			}
			elseif($_REQUEST["mid"]=='81')
			{
			?>	<a href="<?=tep_href_link("advanced_search_result.php", 'categories_id=81&keywords=B950S&sort=5a')?>" >	
			
			<?
			}
			elseif($_REQUEST["mid"]=='121')
			{
			?>	<a href="<?=tep_href_link("advanced_search_result.php", 'categories_id=121&keywords=LB&sort=5a')?>" >	
			
			<?
			}
			elseif($_REQUEST["mid"]=='120')
			{
			?>	<a href="<?=tep_href_link("advanced_search_result.php", 'categories_id=120&keywords=HL&sort=5a')?>" >	
			
			<?
			}
			elseif($_REQUEST["pid"]=='70')
			{
			?>	<a href="<?=tep_href_link("advanced_search_result.php", 'categories_id=70&keywords=EP950&sort=5a')?>" >	
			
			<?
			}
			elseif($_REQUEST["pid"]=='79')
			{
			?>	<a href="<?=tep_href_link("advanced_search_result.php", 'categories_id=79&keywords=B950P&sort=5a')?>" >	
			
			<?
			}
			else{
			?>
			<a href="<?=tep_href_link("advanced_search_result.php", 'categories_id='.$categoies_search[$Model].'&keywords='.$Model.'&sort=5a')?>" >		
				
			<?	
			}
			}
			?>
		
			<button class="button1">Parts</button></a>
		</td>
	</tr>
</table>
<br>
<table class="text-center images_and_videos" height="90px" width="100%" >
	<tr>
		<td>
			<a href="<?=tep_href_link('gallery.php', 'Model='.$Model.(isset($_REQUEST["pid"])?"&pid=".$_REQUEST["pid"]:(isset($_REQUEST["mid"])?"&mid=".$_REQUEST["mid"]:"")))?>"><button class="button6">Additional Images</button></a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="<?=tep_href_link('videouplode.php', 'Model='.$Model.(isset($_REQUEST["pid"])?"&pid=".$_REQUEST["pid"]:(isset($_REQUEST["mid"])?"&mid=".$_REQUEST["mid"]:"")))?>"><button class="button7">Tutorial Videos</button></a>
		</td>
	</tr>
</table>
</div>

<div class="info-sub-container3">
<div class="desc" >

<h2 class="proheader">Model <?php echo$Model; ?></h2>


<?php

  
       
      if($_REQUEST['Model']=='ALLIN1') {echo("<label class='txtarea'>Tubing: " . $row["Tubing"] . "<br><p></p>" .
       
       "Height: " . $row["Height"] . "<br><p></p>");}
       else{if($_REQUEST['Model']=='A-PUSH'){
	   echo("<label class='txtarea'>Supports:- " . $row["Tubing"] . "<br><p></p>" .
       "Flange Size: " . $row["FlangeSize"] . "<br><p></p>" .
       "Height: " . $row["Height"] . "<br><p></p>");
	   
       }else{
	   if($_REQUEST['Model']=='Mid-Shelves'){
	  echo("<label class='txtarea'>Tubing:- " . $row["Tubing"] . "<br><p></p>" ."T-Clamp:- " . $row["Height"] ."<br><p></p>".
       "Length: " . $row["FlangeSize"] . "<br><p></p>" );}else{ echo("<label class='txtarea'>Tubing:- " . $row["Tubing"] . "<br><p></p>" .
       "Flange Size:- " . $row["FlangeSize"] . "<br><p></p>" .
       "Height:- " . $row["Height"] . "<br><p></p>");}
	   
	   }}if($_REQUEST['Model']=='A-PUSH' ||$_REQUEST['Model']=='EP5'||$_REQUEST['Model']=='Ring-EP5'||$_REQUEST['Model']=='EP15'||$_REQUEST['Model']=='EP11'||$_REQUEST['Model']=='EP12'||$_REQUEST['Model']=='EP21'||$_REQUEST['Model']=='EP22'||$_REQUEST['Model']=='EP36'){
       }else{
			
			if($_REQUEST['Model']=='Heat-Lamp'){
			if($Depth != "0")
       		echo("Electrical:- " . $row["Depth"] . "<br><p></p>");
			}else{
			
			if($Depth != "0")
       		echo("Depth:- " . $row["Depth"] . "<br><p></p>");
			
			}
			}
       
	    if($_REQUEST['Model']=='EP5' || $_REQUEST['Model']=='Ring-EP5')
		{
		echo "<label>Finishes:- Brushed Stainless Steel,Brushed Aluminum and coated black</label><br>";
		}
		elseif($_REQUEST['Model']=='EP15' || $_REQUEST['Model']=='EP11' || $_REQUEST['Model']=='EP12' || $_REQUEST['Model']=='EP21' || $_REQUEST['Model']=='EP22' || $_REQUEST['Model']=='EP36' || $_REQUEST['Model']=='ED20' || $_REQUEST['Model']=='ES29' || $_REQUEST['Model']=='ES31' || $_REQUEST['Model']=='ES40' || $_REQUEST['Model']=='ES53' || $_REQUEST['Model']=='ES67' || $_REQUEST['Model']=='ES73' || $_REQUEST['Model']=='ES82' || $_REQUEST['Model']=='ES47' || $_REQUEST['Model']=='ES90' || $_REQUEST['Model']=='ES92' || $_REQUEST['Model']=='Light-Bar' || $_REQUEST['Model']=='Mid-Shelves' || $_REQUEST['Model']=='Heat-Lamp')
		{
		echo "<label>Finishes:- Brushed Stainless Steel and Coated Black</label><br>";
		}
		elseif($_REQUEST['Model']=='B-950' || $_REQUEST['Model']=='B-950-SWIVEL' || $_REQUEST['Model']=='B-950P-GLASS' || $_REQUEST['Model']=='EP-950-ACRYLIC')
		{
		echo "<label>Finishes:- Brushed Stainless Steel and Coated Black with Stainless accents</label><br>";
		}

		elseif($_REQUEST['Model']=='ALLIN1'){
		echo "<label>Finishes:- Brushed Aluminum Finish</label><br>";
		}
		elseif($_REQUEST['Model']=='EP6')
		{
		echo "<label>Finishes:- Brushed Stainless/Machine Aluminum</label><br>";
		}
		elseif($_REQUEST['Model']=='EP7')
		{
		echo "<label>Finishes:- Brushed Stainless width Machined Aluminum</label><br>";
		}
		elseif($_REQUEST['Model']=='EP8')
		{
		echo "<label>Finishes:- Brushed Stainless width Alum machined componets</label><br>";
		}
		else
		{
		echo "<label>Finishes:- Brushed Stainless steel</label><br>";
		}
	   
	   
	   
	   
       if($_REQUEST['Model']=='A-PUSH'||$_REQUEST['Model']=='ALLIN1' ||$_REQUEST['Model']=='EP5'||$_REQUEST['Model']=='Ring-EP5'||$_REQUEST['Model']=='EP15'||$_REQUEST['Model']=='EP11'||$_REQUEST['Model']=='EP12'||$_REQUEST['Model']=='EP21'||$_REQUEST['Model']=='EP22'||$_REQUEST['Model']=='EP36'||$_REQUEST['Model']=='ES29'||$_REQUEST['Model']=='ES31'||$_REQUEST['Model']=='ES40'||$_REQUEST['Model']=='ES53'||$_REQUEST['Model']=='ES67'||$_REQUEST['Model']=='ES63'||$_REQUEST['Model']=='ES82'||$_REQUEST['Model']=='Mid-Shelves'){
	   
       echo("Glass:- " . $row["FrontGlass"] . "<br><br><P><P>");
       
       }else{
       if($TopGlass != "0"){
       echo("Front Glass:- " . $row["FrontGlass"] . "<br><p></p>" .
       "Top Glass:- " . $row["TopGlass"] . "<br><br><P><P>");
       }
       else{
	     if($_REQUEST['Model']=='Heat-Lamp'){}
		 if($_REQUEST['Model']=='Light-Bar'){
		 echo("LED:- " . $row["FrontGlass"] . "<br><p></p>");
		 echo("Natural White (4000k~4500k) " ."<br><br><P><P>");
		 }
		 else{
       echo("Glass:- " . $row["FrontGlass"] . "<br><P><P>");
       }}}
       echo('</label>');

?>


<!--
<label class="txtarea">Tubing :- 1"</label><br>


<label class="txtarea">Flange size :- 2"</label><br>


<label class="txtarea">Height :- 22-5/8</label><br>

<label class="txtarea">Depth :- 24"-54"</label><br>

<label class="txtarea">Glass :- 3/8" Clear tempered with radiused corners</label><br><br>
-->


<div class="pdfposition">
<label class="pdfname">PDF Specs</label><br>&nbsp;&nbsp;&nbsp;&nbsp;
<!-- deepak 4-11-2020 -->
<a href="PDF/<?php echo$Model ?>.pdf" target="_blank"><img class="pdf" src="images/pdf-specs.png" alt="Adm sneezeguard" title="PDF"></a>
</div>
</div>

</div>

</div>
<?php
       }
       }
?>

<!--end here-->
<div class="container">
</div>

<?php
require(DIR_WS_INCLUDES . 'footer_new_design.php');
?>
