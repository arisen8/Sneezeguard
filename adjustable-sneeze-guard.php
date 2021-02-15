<?php
ini_set('session.cookie_httponly',1);
ini_set('session.cookie_secure',1);
  
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

  $page_title='ADM Sneeze Guard Manufacturers | Foodguards'; 
  $page_description='ADM Sneezeguards manufactures online standard Glass Sneeze Guards, COVID-19 Screens for hospitals, grocery stores, restaurants on business days.';
  $page_keyword='Glass Sneeze Guard, Sneeze Guard Manufacturers, Bain Marie Guard, Buffet Sneeze Guard';



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
      if($category_list_row['cname']=="Adjustable"){
           $portable_id=$category_list_row['pid'];
      }
    }
    //echo $portable_id;
    $category_list=tep_db_query("select c.categories_id as pid from ".TABLE_CATEGORIES." as c where c.parent_id='".$portable_id."' order by sort_order");
    $category_list_array=array();
    $i=0;
    while($category_list_row=tep_db_fetch_array($category_list)){
     $category_list_array[$i]=$category_list_row['pid'];
       $i++;
    }
  $category_list_array[0]=81;
  $category_list_array[1]=80;
  $category_list_array[2]=128;
  
  
  //var_dump($category_list_array);
  // Open Table
  $result = mysql_query(
            "SELECT * FROM Models");
  if (!$result) {
    echo("<P>Error performing query: " .
         mysql_error() . "</P>");
    exit();
  }
  

  // Display all models
  $i=0;
  $j=0;
  while ( $row = mysql_fetch_array($result) ) {
  //Now only show the data for the Model in the address bar
if($row["Name"] == "ES90" || $row["Name"] == "ES47" || $row["Name"] == "B-950" || $row["Name"] == "ES92" ||  $row["Name"] == "B-950-SWIVEL" ||  $row["Name"] == "ORBIT360" ){           

$Height = $row["Height"];
    $EndPan = $row["EndPan"];
    $Depth = $row["Depth"];
    $TopGlass = $row["TopGlass"];
    $HeatLamps = $row["HeatLamps"];
    $Lighting = $row["Lighting"];
    $FrontGlass = $row["FrontGlass"];
    $Tubing = $row["Tubing"];
	
	if($row["Name"] == "B-950-SWIVEL")
  {
	$urlss_path='cPath=87_81';  
  }
  else if($row["Name"] == "B-950")
  {
	 $modelidd=80;  
	 $urlss_path='cPath=87_80';  
  }
  else if($row["Name"] == "ORBIT360")
  {
	 $modelidd=128;  
	 $urlss_path='cPath=87_128';  
  }
  else if($row["Name"] == "ES47")
  {
	 $modelidd=124;  
	 $urlss_path='cPath=126_124';  
  }
  else if($row["Name"] == "ES90")
  {
	 $modelidd=123;  
	 $urlss_path='cPath=87_123';  
  }
  else if($row["Name"] == "ES92")
  {
	 $modelidd=125;  
	 $urlss_path='cPath=87_125';  
  }
  
      ?>

<div class="container portable-container">
  <div class="row portable-row">

    <div class="col-sm-3 p-3 barrier-imgs">

<?php

      echo('<A HREF="'.tep_href_link(FILENAME_PRODUCT,$urlss_path).'"><IMG alt="sneeze guard '.$row["Name"].'" title="'.$row["Name"].'" SRC="images/Models/'.$row["Name"].'.jpg" BORDER=0>' . '</A>');  
 
      
?>
    </div>

     
    <div class="col-sm-6 text-left">

      <?php

echo('<div class="linkClass">');
//echo $j;

 echo('<A HREF="'.tep_href_link(FILENAME_PRODUCT,$urlss_path).'">Model Name: ' . $row["Name"] . '</A><BR>');   

  



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
        echo("Finishes");
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