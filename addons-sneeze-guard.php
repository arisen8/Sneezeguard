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



  $category_depth = 'top';
  if (isset($cPath) && tep_not_null($cPath)) {
    $categories_products_query = tep_db_query("select count(*) as total from " . TABLE_PRODUCTS_TO_CATEGORIES . " where categories_id = '" . (int)$current_category_id . "'");
    $cateqories_products = tep_db_fetch_array($categories_products_query);
    if ($cateqories_products['total'] > 0) {
      $category_depth = 'products'; // display products
    } else {
      $category_parent_query = tep_db_query("select count(*) as total from " . TABLE_CATEGORIES . " where parent_id = '" . (int)$current_category_id . "'");
      $category_parent = tep_db_fetch_array($category_parent_query);
      if ($category_parent['total'] > 0) {
        $category_depth = 'nested'; // navigate through the categories
      } else {
        $category_depth = 'products'; // category has no products, but display the 'no products' message
      }
    }
  }

  $page_title='Sneeze Guard | brass guard sneeze | ADDONS - ADM Sneezeguards'; 
  $page_description='Maintain social distance and physical separation using Custom Sneeze Guard at workplaces. Protect yourself from virus and germs with our clear Portable Sneezeguards.';
  $page_keyword='Buffet Sneeze Guards, addon sneeze guard, Commercial Portable Screen, Online sneeze guard regulations, Shop sneezeguards';



include('includes/header_new_design.php');

?>
  <style>
.container {
    width: 95% !important;
    max-width: 100% !important;
}
@media screen and (max-width: 992px){

.container {
  width: 90% !important;
} 
}
.boredr-row {
    border: 1px solid grey;
    margin-top: 2px;
}
   </style>
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
	if($row["Name"] == "Orbit-720" || $row["Name"] == "Heat-Lamp" || $row["Name"] == "Mid-Shelves" || $row["Name"] == "Light-Bar"){
	if($row["Name"] == "EP-950-ACRYLIC"){
	   $category_list_array[$i]="70";
	} if($row["Name"] == "Heat-Lamp"){
	   $category_list_array[$i]="120";
	} if($row["Name"] == "Light-Bar"){
	   $category_list_array[$i]="121";
	}  if($row["Name"] == "Mid-Shelves"){
	   $category_list_array[$i]="118";
	}
if($row["Name"] == "B-950P-GLASS"){
	   $category_list_array[$i]="118";
	}
	$Height = $row["Height"];
	$lenght=$row["FlangeSize"];
      $EndPan = $row["EndPan"];
      $Depth = $row["Depth"];
      $TopGlass = $row["TopGlass"];
      $HeatLamps = $row["HeatLamps"];
      $Lighting = $row["Lighting"];
      $FrontGlass = $row["FrontGlass"];
      $Tubing = $row["Tubing"];
      ?>

<div class="container">
  <div class="row boredr-row">

    <div class="col-sm-3 p-3 barrier-imgs">
<?php
if($row["Name"] == "ALLIN1"){
	        echo('<A HREF="javascript:submit()">' . '<IMG alt="sneeze guard" title="sneeze guard for office" SRC="images/Models/' . $row["Name"] . '.jpg" BORDER=0>' . '</A>');
	   }else{
      echo('<A HREF="'.tep_href_link('info.php', 'Model='.$row["Name"].'&mid='.$category_list_array[$i]).'">' . '<IMG alt="sneeze guard" title="sneeze guard for office" SRC="images/Models/' . $row["Name"] . '.jpg" BORDER=0>' . '</A>');
	  }

?>
    </div>

     
    <div class="col-sm-6 text-left">

      <?php

echo('<div class="linkClass">');
//echo $j;
 if($row["Name"] == "ALLIN1"){
	   echo('<A HREF="javascript:submit()">Model Name: ' . $row["Name"] . '</A><BR>');
	  }
	  else{
      echo('<A HREF="'.tep_href_link('info.php', 'Model='.$row["Name"].'&mid='.$category_list_array[$i]).'">Model Name: ' . $row["Name"] . '</A><BR>');}



  echo('</div>');
 echo('<div class="modText">');
	  if($row["Name"] == "Mid-Shelves"){
      echo('T-Clamp: ' . $Height . '<br>');
	  echo('Length: ' . $lenght . '<br>');
	  } else{
	  echo('Height: ' . $Height . '<br>');
	  }
	  if($row["Name"] == "Heat-Lamp" || $row["Name"] == "Light-Bar"){
	  if($Depth != "0"){
      echo('Electrical: ' . $Depth . '<br>');
      }
	  echo('FlangeSize: ' . $FrontGlass . '<br>');
	  }else{
      if($Depth != "0"){
      echo('Depth: ' . $Depth . '<br>');
      }
	  echo('Glass: ' . $FrontGlass . '<br>');
	  }
      
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
      //echo("Finishes");
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
include('includes/footer_new_design.php');
?>