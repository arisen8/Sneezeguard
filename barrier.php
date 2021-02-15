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

  $page_title='Sneeze Guard Barrier | Tempered Glass - ADM Sneezeguards'; 
  $page_description='ADM Sneezeguards manufactures for Hospital service industry, we offer industry standard Desktop and Reception Counter Sneeze Guard & tempered glass business days.';
  $page_keyword='Sneeze Guard custom line, Barrier sneezeguards, sneeze guards posts, Buffet Food guards';



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

.row {
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
  $category_list_array[0]=72;
  $category_list_array[1]=122;
  $category_list_array[2]=129;
  $category_list_array[3]=130;
  $category_list_array[4]=133;
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
if($row["Name"] == "EP5" || $row["Name"] == "Ring-EP5" || $row["Name"] == "EP6" || $row["Name"] == "EP7" || $row["Name"] == "EP8"){           

$Height = $row["Height"];
    $EndPan = $row["EndPan"];
    $Depth = $row["Depth"];
    $TopGlass = $row["TopGlass"];
    $HeatLamps = $row["HeatLamps"];
    $Lighting = $row["Lighting"];
    $FrontGlass = $row["FrontGlass"];
    $Tubing = $row["Tubing"];
      ?>

<div class="container">
  <div class="row">

    <div class="col-sm-3 p-3 barrier-imgs">

<?php
if($row["Name"]=='EP8')
{
  $linkss=  'Model='.$row["Name"].'&mid=133';
}
else{
    $linkss=   'Model='.$row["Name"].'&mid='.$category_list_array[$j++].'';
}

	
      echo('<A HREF="'.tep_href_link('info.php', $linkss).'"><IMG alt="sneeze guard" title="sneeze guard for office" SRC="images/Models/'.$row["Name"].'.jpg" BORDER=0>' . '</A>');  
   
      
?>
    </div>

     
    <div class="col-sm-6 ">

      <?php

echo('<div class="linkClass">');

 echo('<A HREF="'.tep_href_link('info.php', $linkss).'">Model Name: ' . $row["Name"] . '</A><BR>');   

  



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
        echo("<B style=''.$fontsize.''>Options:</B><BR>");
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
include('includes/footer_new_design.php');
?>