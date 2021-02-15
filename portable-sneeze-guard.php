<?php
ob_start();
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  require('includes/application_top.php');

  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_DEFAULT);

  $breadcrumb->add(NAVBAR_TITLE, tep_href_link(FILENAME_DEFAULT));

  //require(DIR_WS_INCLUDES . 'template_top.php');

  $page_title='Food Guards | Sneeze Guard requirements - ADM Sneezeguards'; 
  $page_description='Buy online sneezeguard models to protect food industry and grocery stores, esneezeguards create social distance, protect yourself by using self serve sneeze guard.';
  $page_keyword='Portable Sneeze Guard, sneeze guard posts, Sneeze Guard requirements, self serve sneeze guard';



require(DIR_WS_INCLUDES . 'header_new_design.php');

?>
 <div class="page-main-container" align="center"  onmouseover="openCity(event, 'Hide');hide_cart_data()">

<?php
    $portable_id="";
     $category_list=tep_db_query("select distinct parent_id as pid from ".TABLE_CATEGORIES." where parent_id!=0");
      $category_list_array=array();
      $i=0;
      while($category_list_row=tep_db_fetch_array($category_list)){
      	$category_list_array[$i]=$category_list_row['pid'];
    	$i++;
      }
       $ids=implode(', ', $category_list_array);
      
      $category_list=tep_db_query("select c.categories_id as pid, cd.categories_name as cname from ".TABLE_CATEGORIES." as c, ".TABLE_CATEGORIES_DESCRIPTION." as cd where c.categories_id in (".$ids.") and c.categories_id=cd.categories_id order by sort_order");
      $category_list_array=array();
      $i=0;
      while($category_list_row=tep_db_fetch_array($category_list)){
        if($category_list_row['cname']=="Portable"){
      	     $portable_id=$category_list_row['pid'];
        }
      }
      
      $category_list=tep_db_query("select c.categories_id as pid from ".TABLE_CATEGORIES." as c where c.parent_id=".$portable_id." order by sort_order");
      $category_list_array=array();
      $i=0;
      while($category_list_row=tep_db_fetch_array($category_list)){
	     $category_list_array[$i]=$category_list_row['pid'];
         $i++;
      }
     
    // Open Table
    $result = mysql_query(
              "SELECT * FROM Models");
    if (!$result) {
      echo("<P>Error performing query: " .
           mysql_error() . "</P>");
      exit();
    }
   
  $i=0;
    // Display all models
	
    while ( $row = mysql_fetch_array($result) ) {
    //Now only show the data for the Model in the address bar
	if($row["Name"] == "Orbit-720" || $row["Name"] == "B-950P-GLASS" || $row["Name"] == "EP-950-ACRYLIC" || $row["Name"] == "ALLIN1" ||$row["Name"] == "Portable" ||$row["Name"] == "ORBIT720"  ){
	if($row["Name"] == "EP-950-ACRYLIC"){
	   $category_list_array[$i]="70";
	} if($row["Name"] == "ALLIN1"){
	   $category_list_array[$i]="117";
	}if($row["Name"] == "B-950P-GLASS"){
	   $category_list_array[$i]="79";
	}
	if($row["Name"] == "ORBIT720"){
	   $category_list_array[$i]="131";
	}
	$Height = $row["Height"];
      $EndPan = $row["EndPan"];
      $Depth = $row["Depth"];
      $TopGlass = $row["TopGlass"];
      $HeatLamps = $row["HeatLamps"];
      $Lighting = $row["Lighting"];
      $FrontGlass = $row["FrontGlass"];
      $Tubing = $row["Tubing"];
      ?>

<div class="container portable-container">
  <div class="row portable-row">

    <div class="col-sm-3 p-3 barrier-imgs">

<?php
	   if($row["Name"] == "ALLIN1"){
	        echo('<A HREF="'.tep_href_link('info.php', 'Model='.$row["Name"].'&pid='.$category_list_array[$i]).'">' . '<IMG alt="sneeze guard '.$row["Name"].'" title="'.$row["Name"].'" SRC="images/Models/' . $row["Name"] . '.jpg" BORDER=0>' . '</A>');
	   }else{
      echo('<A HREF="'.tep_href_link('info.php', 'Model='.$row["Name"].'&pid='.$category_list_array[$i]).'">' . '<IMG alt="sneeze guard '.$row["Name"].'" title="'.$row["Name"].'" SRC="images/Models/' . $row["Name"] . '.jpg" BORDER=0>' . '</A>');
    }
    
?>
    </div>

     
    <div class="col-sm-6 text-left">

      <?php

      echo('<div class="linkClass">');

   
	  if($row["Name"] == "ALLIN1"){
	   echo('<A HREF="'.tep_href_link('info.php', 'Model='.$row["Name"].'&pid='.$category_list_array[$i]).'">Model Name: ' . $row["Name"] . '</A><BR>');
	  }
	  else{
      echo('<A HREF="'.tep_href_link('info.php', 'Model='.$row["Name"].'&pid='.$category_list_array[$i]).'">Model Name: ' . $row["Name"] . '</A><BR>');}
      echo('</div>');
      echo('<div class="modText">');
      echo('Height: ' . $Height . '<br>');
      if($Depth != "0"){
      echo('Depth: ' . $Depth . '<br>');
      }
      echo('Glass: ' . $FrontGlass . '<br>');
      echo('Tubing: ' . $Tubing . '<br>');
      echo('</div>');
?>


    </div>
     
      <div class="col-sm-3 p-3">


      <?php
      //if($EndPan || $HeatLamps || $Lighting  != "0"){
      echo('<div class="modName">');
      echo("<B>Options:</B><BR>");
      echo('</div>');
      echo('<div class="modText">');
      if($EndPan != "0")
      echo("End Panels " . "<br>");
      if($HeatLamps != "0")
      echo("Heat Lamps " . "<br>");
      if($Lighting != "0")
      echo("Lighting " . "<br>");
      //}
	  if($row["Name"] == "ORBIT720" ||$row["Name"] == "ALLIN1")
	  {
		  
	  }
	  else{
      echo("Finishes");
	  }
      echo('</div>');
?>



      </div>
      </div>

      </div>

      
     <?php 
      $i++;
      }
	   //print_r($category_list_array[$i]);
      }
      
?>
</div>

<?php
require(DIR_WS_INCLUDES . 'footer_new_design.php');
?>