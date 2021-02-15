
<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

ob_start();
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
  
  and this porject modifed and developed by Arisen Technologies 
  http://www.arisen.in
*/



  require('includes/application_top.php');
  
  

  define('MODULE_HEADER_TAGS_ALL_PAGE_TITLE_STORE_NAME_SEPARATOR', '');
  
  
  
    //include("header.php");

  
if(isset($_REQUEST['cPath']))
{

  $modeliddd=$_REQUEST['cPath'];
}
else{
  
  if(isset($_REQUEST['pid']))
  {
  $modeliddd=$_REQUEST['pid'];  
  }
  else{
  $modeliddd=0; 
  }
    
}
  
  $search_catagory_details = mysql_query("SELECT * FROM categories_description WHERE `categories_id` ='$modeliddd'");
  $category_details=mysql_fetch_array($search_catagory_details);
  $catego_name=$category_details['categories_name'];


  
  

// the following cPath references come from application_top.php
  $category_depth = 'top';
  
 // foreach($category_list_array as $current_category_id){  
  
  if (isset($cPath) && tep_not_null($cPath)) {
   $categories_products_query = tep_db_query("select count(*) as total from " . TABLE_PRODUCTS_TO_CATEGORIES . " where categories_id = '" . (int)$current_category_id . "'");
    
   $categories_products = tep_db_fetch_array($categories_products_query); //number of products of any category in $categories_products
    
    if ($categories_products['total'] > 0) {
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

  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_DEFAULT);
  

	$page_title='ADM Sneezeguards - Glass Guards | Restaurant Sneeze Guard'; 
	$page_description='ADM Sneeze guard manufactures food sneeze guards, we offer industry standard acrylic sneeze guard with latest innovative designs.';
	$page_keyword='foodguard, Brass sneeze guards, Glass Guard, sneeze guard brackets, salad bar sneeze guard';
  

  


require(DIR_WS_INCLUDES . 'header_new_design.php');

// include('includes/configure.php');

		$servername = DB_SERVER;
		$username = DB_SERVER_USERNAME;
		$password = DB_SERVER_PASSWORD;
		$dbname = DB_DATABASE;
		$connt = mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());




?>

<link rel="stylesheet" href="new-design/instockstyle.css">
<div class="mt-5">
<h1>&nbsp;</h1>
</div>

<div class="p-0 bg-white text-dark"   onmouseover="openCity(event, 'Hide');hide_cart_data()">
<table class="text-center text-dark w-100">
<tr>

<td> 
<div class="intock-model-main">
<h2>IN-STOCK
</h2>
</div>
</td>
</tr>

<tr>
<td>
<div class="instock-main-category2">
<h2>PASS-OVER
</h2>
</div>
</td> 
</tr>
</table>

<div class="p-0">
<table  width="100%" class="text-center border-0">

<tr>
<td> 
<div class="intock-model-view-main">

<div class="intock-model-viewsub">

<img id="myImgss" onclick="show_img_popup(this)" src="images/EP5/STARTold.jpg" alt="food guard" title="PORTABLE SNEEZE GUARDS" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_72").''; ?>" >
<div class="intock-modeltext">
<span >EP5</span><br /><br />
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_72").''; ?>"><button>BUY NOW</button></a>
</div>
</div>
<div class="intock-model-viewsub">

<img id="myImgss" class="EP5-size" onclick="show_img_popup(this)" src="images/Ring-EP5/ep5ring.gif" alt="PORTABLE SNEEZE GUARDS" title="food guard" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_122").''; ?>" >
<div class="intock-modeltext">
<span >RING-EP5</span><br /><br />
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_122").''; ?>"><button>BUY NOW</button></a>
</div>
</div>
<div class="intock-model-viewsub">
<img id="myImgss" onclick="show_img_popup(this)" src="images/EP6/STARTold.jpg" alt="sneeze guard brackets" title="sneeze guard" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_129").''; ?>">
<div class="intock-modeltext">
<span >EP6</span><br /><br />
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_129").''; ?>"><button>BUY NOW</button></a>
</div>
</div>
<div class="intock-model-viewsub">
<img id="myImgss" onclick="show_img_popup(this)" src="images/EP7/STARTold.jpg" alt="sneeze guard" title="sneeze guard brackets" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_130").''; ?>">
<div class="intock-modeltext">
<span >EP7</span><br /><br />
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_130").''; ?>"><button>BUY NOW</button></a>
</div>
</div>

</div>
</td> 
</tr>


<tr>
<td> 
<div class="intock-model-view-main">


<div class="intock-model-viewsub">
<img id="myImgss" onclick="show_img_popup(this)" src="images/EP15/STARTold.jpg" alt="glass guards" title="custom sneeze guards" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_71").''; ?>">
<div class="intock-modeltext">

<span >EP15</span><br/><br/>
<div>
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_71").''; ?>"><button>BUY NOW</button></a>
</div>

</div>

</div>


<div class="intock-model-viewsub">
<img id="myImgss" onclick="show_img_popup(this)" src="images/EP11/STARTold.jpg" alt="custom sneeze guards" title="glass guards" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_55").''; ?>" >
<div class="intock-modeltext">
<span >EP11</span><br /><br />
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_55").''; ?>"><button>BUY NOW</button></a>
</div>
</div>


<div class="intock-model-viewsub">
<img id="myImgss" onclick="show_img_popup(this)" src="images/EP12/STARTold.jpg" alt="SNEEZE GUARD MANUFACTURERS" title="nsf sneeze guard" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_56").''; ?>" >
<div class="intock-modeltext">
<span >EP12</span><br /><br />
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_56").''; ?>"><button>BUY NOW</button></a>
</div>
</div>


<div class="intock-model-viewsub">
<img id="myImgss" onclick="show_img_popup(this)" src="images/EP21/STARTold.jpg" alt="nsf sneeze guard" title="SNEEZE GUARD MANUFACTURERS" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_57").''; ?>" >
<div class="intock-modeltext">
<span >EP21</span><br /><br />
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_57").''; ?>"><button>BUY NOW</button></a>
</div>
</div>

</div>
</td> 
</tr>


<tr>
<td> 
<div class="intock-model-view-main">


<div class="intock-model-viewsub">
<img id="myImgss" onclick="show_img_popup(this)" src="images/EP22/STARTold.jpg" alt="adm sneezeguards" title="foodguards" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_58").''; ?>" >
<div class="intock-modeltext">

<span >EP22</span><br/><br/>
<div>
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_58").''; ?>"><button>BUY NOW</button></a>
</div>

</div>

</div>
<div class="intock-model-viewsub">
<img id="myImgss" onclick="show_img_popup(this)" src="images/EP36/STARTold.jpg" alt="foodguards" title="adm sneezeguards" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_59").''; ?>" >
<div class="intock-modeltext">
<span >EP36</span><br /><br />
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_59").''; ?>"><button>BUY NOW</button></a>
</div>
</div>


<div class="intock-model-viewsub">
<img id="myImgss" onclick="show_img_popup(this)" src="images/ED20/STARTold.jpg" alt="food guards" title="salad bar sneeze guard" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_113").''; ?>" >
<div class="intock-modeltext">
<span >ED20</span><br /><br />
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_113").''; ?>"><button>BUY NOW</button></a>
</div>
</div>



<div class="intock-model-viewsub">
<img id="myImgss" onclick="show_img_popup(this)" src="images/EP8/STARTold.jpg" alt="salad bar sneeze guard" title="food guards" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_133").''; ?>" >
<div class="intock-modeltext">
<span >EP8</span><br /><br />
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=86_133").''; ?>"><button>BUY NOW</button></a>
</div>
</div>

</div>
</td> 
</tr>


</table>
</div>
</div>

<div class="bg-white text-white p-0"   onmouseover="openCity(event, 'Hide');hide_cart_data()">
<table    class="text-center text-black p-0 w-100">

<tr>

<td> 
<div class="instock-main-category2">
<h2>CONVERTIBLE

</h2>
</div>
</td> 
</tr>

</table>

<div class="bg-white p-0"  >
<table class="text-center text-black b-0 w-100">
<tr>
<td> 
<div class="intock-model-view-main">


<div class="intock-model-viewsub">
<img id="myImgss" onclick="show_img_popup(this)" src="images/ES47/STARTold.jpg" alt="custom sneeze guard industry leader" title="breath guard" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=126_124").''; ?>" >
<div class="intock-modeltext">

<span >ES47</span><br /><br />
<div>
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=126_124").''; ?>"><button>BUY NOW</button></a>
</div>

</div>

</div>



</div>
</td> 
</tr>


</table>
</div>
</div>






<div class="bg-white text-white p-0"   onmouseover="openCity(event, 'Hide');hide_cart_data()">
<table class="text-center text-black p-0 w-100">

<tr>

<td> 
<div class="instock-main-category2">
<h2 >SELF-SERVE

</h2>
</div>
</td> 
</tr>

</table>

<div class="bg-white p-0"  >
<table  class="text-center text-black b-0 w-100">
<tr>
<td> 
<div class="intock-model-view-main">


<div class="intock-model-viewsub">
<img id="myImgss" onclick="show_img_popup(this)" src="images/ES29/STARTold.jpg" alt="breath guard" title="custom sneeze guard industry leader" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_114").''; ?>" >
<div class="intock-modeltext">

<span >ES29</span><br /><br />
<div>
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_114").''; ?>"><button>BUY NOW</button></a>
</div>

</div>

</div>
<div class="intock-model-viewsub">
<img id="myImgss" onclick="show_img_popup(this)" src="images/ES31/STARTold.jpg" alt="buffet sneeze guards" title="sneeze guards for restaurants" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_61").''; ?>" >
<div class="intock-modeltext">
<span >ES31</span><br /><br />
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_61").''; ?>"><button>BUY NOW</button></a>
</div>
</div>
<div class="intock-model-viewsub">
<img id="myImgss" onclick="show_img_popup(this)" src="images/ES40/STARTold.jpg" alt="sneeze guards for restaurants" title="buffet sneeze guards" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_62").''; ?>" >
<div class="intock-modeltext">
<span >ES40</span><br /><br />
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_62").''; ?>"><button>BUY NOW</button></a>
</div>
</div>
<div class="intock-model-viewsub">
<img id="myImgss" onclick="show_img_popup(this)" src="images/ES53/STARTold.jpg" alt="sneezeguard" title="restaurant sneeze guards" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_110").''; ?>" >
<div class="intock-modeltext">
<span >ES53</span><br /><br />
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_110").''; ?>"><button>BUY NOW</button></a>
</div>
</div>

</div>
</td> 
</tr>

<tr>
<td> 
<div class="intock-model-view-main">


<div class="intock-model-viewsub">
<img id="myImgss" onclick="show_img_popup(this)" src="images/ES67/STARTold.jpg" alt="restaurant sneeze guards" title="sneezeguard" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_63").''; ?>" >
<div class="intock-modeltext">

<span >ES67</span><br /><br />
<div>
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_63").''; ?>"><button>BUY NOW</button></a>
</div>

</div>

</div>
<div class="intock-model-viewsub">
<img id="myImgss" onclick="show_img_popup(this)" src="images/ES73/STARTold.jpg" alt="brass guard sneeze" title="adm sneezeguard" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_64").''; ?>" >
<div class="intock-modeltext">
<span >ES73</span><br /><br />
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_64").''; ?>"><button>BUY NOW</button></a>
</div>
</div>
<div class="intock-model-viewsub">
<img id="myImgss" onclick="show_img_popup(this)" src="images/ES82/STARTold.jpg" alt="adm sneezeguard" title="brass guard sneeze" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_111").''; ?>" >
<div class="intock-modeltext">
<span >ES82</span><br /><br />
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_111").''; ?>"><button>BUY NOW</button></a>
</div>
</div>
<div class="intock-model-viewsub">
<img id="myImgss" onclick="show_img_popup(this)" src="images/ES90/STARTold.jpg" alt="CUSTOM SNEEZE GUARD" title="glass sneeze guards" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_123").''; ?>" >
<div class="intock-modeltext">
<span >ES90</span><br /><br />
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_123").''; ?>"><button>BUY NOW</button></a>
</div>
</div>

</div>
</td> 
</tr>


<tr>
<td> 
<div class="intock-model-view-main">


<div class="intock-model-viewsub">
<img id="myImgss" onclick="show_img_popup(this)" src="images/ES92/STARTold.jpg" alt="glass sneeze guards" title="CUSTOM SNEEZE GUARD" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_125").''; ?>" >
<div class="intock-modeltext">

<span >ES92</span><br /><br />
<div>
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_125").''; ?>"><button>BUY NOW</button></a>
</div>

</div>

</div>
<div class="intock-model-viewsub">
<img id="myImgss" onclick="show_img_popup(this)" src="images/B-950/STARTold.jpg" alt="sneeze guard requirements" title="bain marie guard" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_80").''; ?>" >
<div class="intock-modeltext">
<span >B-950</span><br /><br />
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_80").''; ?>"><button>BUY NOW</button></a>
</div>
</div>
<div class="intock-model-viewsub">
<img id="myImgss" onclick="show_img_popup(this)" src="images/B-950-SWIVEL/STARTold.jpg" alt="bain marie guard" title="sneeze guard requirements" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_81").''; ?>" >
<div class="intock-modeltext">
<span >B-950-SWIVEL</span><br /><br />
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_81").''; ?>"><button>BUY NOW</button></a>
</div>
</div>
<div class="intock-model-viewsub">
<img id="myImgss" onclick="show_img_popup(this)" src="images/ORBIT360/STARTold.jpg" alt="sneeze guards" title="PORTABLE SNEEZEGUARD" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_128").''; ?>" >
<div class="intock-modeltext">
<span >ORBIT360</span><br /><br />
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=87_128").''; ?>"><button>BUY NOW</button></a>
</div>
</div>


</div>
</td> 
</tr>


</table>
</div>
</div>








<div class="bg-white text-white p-0"   onmouseover="openCity(event, 'Hide');hide_cart_data()">
<table    class="text-center text-black p-0 w-100">

<tr>

<td> 
<div class="instock-main-category2">
<h2>PORTABLE

</h2>
</div>
</td> 
</tr>

</table>

<div class="bg-white p-0"  >
<table    class="text-center text-black p-0 w-100">
<tr>
<td> 
<div class="intock-model-view-main">

<div class="intock-model-viewsub">
<img id="myImgss" onclick="show_img_popup(this)" src="images/ALLIN1/STARTold.jpg" alt="PORTABLE SNEEZEGUARD" title="sneeze guards" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=85_117").''; ?>" >
<div class="intock-modeltext">
<span >ALLIN1</span><br /><br />
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=85_117").''; ?>"><button>BUY NOW</button></a>
</div>
</div>

<div class="intock-model-viewsub">
<img id="myImgss" onclick="show_img_popup(this)" src="images/B-950P-GLASS/STARTold.jpg" alt="glass sneeze guard" title="sneeze guard post" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=85_79").''; ?>" >
<div class="intock-modeltext">

<span >B950P-GLASS</span><br /><br />
<div>
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=85_79").''; ?>"><button>BUY NOW</button></a>
</div>

</div>

</div>
<div class="intock-model-viewsub">
<img id="myImgss" onclick="show_img_popup(this)" src="images/EP-950-ACRYLIC/STARTold.jpg" alt="sneeze guard post" title="glass sneeze guard" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=85_70").''; ?>" >
<div class="intock-modeltext">
<span >EP950-ACRYLIC</span><br /><br />
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=85_70").''; ?>"><button>BUY NOW</button></a>
</div>
</div>
<div class="intock-model-viewsub">
<img id="myImgss" onclick="show_img_popup(this)" src="images/ORBIT720/STARTold.jpg" alt="esneezeguards" title="food sneeze guards" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=85_131").''; ?>" >
<div class="intock-modeltext">
<span >ORBIT720</span><br /><br />
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=85_131").''; ?>"><button>BUY NOW</button></a>
</div>
</div>

</div>
</td> 
</tr>


</table>
</div>
</div>







<div class="p-0 b-white text-dark"   onmouseover="openCity(event, 'Hide');hide_cart_data()">
<table    class="text-center text-black p-0 w-100">

<tr>

<td> 
<div class="instock-main-category2">
<h2>ADD-ONS

</h2>
</div>
</td> 
</tr>

</table>

<div class="bg-white p-0"  >
<table    class="text-center text-black p-0 w-100">
<tr>
<td> 
<div class="intock-model-view-main">

<div class="intock-model-viewsub">
<img id="myImgss" onclick="show_img_popup(this)" src="images/Light Bar/STARTold.jpg" alt="food sneeze guards" title="esneezeguards" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=88_121").''; ?>" >
<div class="intock-modeltext">
<span >Light Bar</span><br /><br />
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=88_121").''; ?>"><button>BUY NOW</button></a>
</div>
</div>

<div class="intock-model-viewsub">
<img id="myImgss" onclick="show_img_popup(this)" src="images/Mid-Shelves/STARTold.jpg" alt="SNEEZE GUARD GLASS" title="cheap sneeze guard" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=88_118").''; ?>" >
<div class="intock-modeltext">

<span>Mid-Shelves</span><br/><br/>
<div>
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=88_118").''; ?>"><button>BUY NOW</button></a>
</div>

</div>

</div>
<div class="intock-model-viewsub">
<img id="myImgss" onclick="show_img_popup(this)" src="images/Heat Lamp/STARTold.jpg" alt="cheap sneeze guard" title="SNEEZE GUARD GLASS" url="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=88_120").''; ?>" >
<div class="intock-modeltext">
<span>Heat Lamp</span><br /><br />
<a href="<?php  echo ''.tep_href_link(FILENAME_PRODUCT,"cPath=88_120").''; ?>"><button>BUY NOW</button></a>
</div>
</div>


</div>
</td> 
</tr>


</table>
</div>
</div>

<!-- The Modal -->
<div id="myModalss" class="modalss">
<div class="text-right">
		<span class="model-close index-model-close" >&times;</span>
</div>
  <div class="p-2">
  	<img class="modalss-content" id="img01" alt="sneeze guard regulations" title="sneeze guard partition posts">
  </div>
  <div class="text-center p-2"><a href="" id="model-url" class="btn btn-sm btn-light">BUY NOW</a></div>
</div>






<?php

require(DIR_WS_INCLUDES . 'footer_new_design.php');
?>