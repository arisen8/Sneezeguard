
<?php
ini_set('session.cookie_httponly',1);
ini_set('session.cookie_secure',1);
  
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// if(substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start('ob_gzhandler'); else ob_start();
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
  
  
  function gen_string($string,$max=20)
{
    $tok=strtok($string,' ');
    $string='';
    while($tok!==false && mb_strlen($string)<$max)
    {
        if (mb_strlen($string)+mb_strlen($tok)<=$max)
            $string.=$tok.' ';
        else
            break;
        $tok=strtok(' ');
    }
    return trim($string).'...';
}

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
  
  if (isset($cPath) && tep_not_null($cPath)) {
	$page_title='ADM Sneezeguards - Glass Guards | Restaurant Sneeze Guard'; 
	$page_description='ADM Sneeze guard manufactures food sneeze guards, we offer industry standard acrylic sneeze guard with latest innovative designs.';
	$page_keyword='foodguard, Brass sneeze guards, Glass Guard, sneeze guard brackets, salad bar sneeze guard';
  
  }
  else{
	$page_title='Sneeze Guard | Portable Sneezeguard - ADM Sneezeguards'; 
	$page_description='ADM Sneezeguards manufactures sneeze guard and food guard. Our sneeze guards and Portable Barrier are based on the latest innovative designs.';
	$page_keyword='Sneeze Guard, sneeze guard glass, Breath Guard, Portable Sneeze Guards, Sneezeguards, Restaurant Sneeze Guards';
  
  }
  


require(DIR_WS_INCLUDES . 'header_new_design.php');

// include('includes/configure.php');

		$servername = DB_SERVER;
		$username = DB_SERVER_USERNAME;
		$password = DB_SERVER_PASSWORD;
		$dbname = DB_DATABASE;
		$connt = mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());




?>













<div class="home-slider" onmouseover="openCity(event, 'Hide');hide_cart_data();">

 
<div id="demo" class="carousel slide pt-2" data-ride="carousel"   data-interval="3000">
 
  <div class="carousel-inner" >
    
	<?php
	$sn=1;
	
	$sel = mysqli_query($connt,"select * from main_slider order by location ASC");
	while($result = mysqli_fetch_assoc($sel))
	{
		
		$db_url=$result['url'];
		$links=tep_href_link(FILENAME_PRODUCT,$db_url);
		if($sn==1)
		{
			$active='active';
			
		}
		else{
			$active='';
		}
			$mob_text= gen_string($result['content'],35);
		?>
		<div class="carousel-item <?php echo$active ?>">
		  <img src="sneezegaurd/upload2/<?php echo $result['imageweb'] ?>"  alt="<?php echo $result['heading'] ?>" title="<?php echo $result['heading'] ?>"  id="slider-img-main<?php echo$sn;?>">

		   <div class="carousel-caption1 <?= str_replace(' ','-',$result['heading'])?>"><!-- change deepak 26-10-2020 -->
		   <div class="mainep6-sub">
		   <div class="main-slider-text">
			<div class="<?php echo$addclass2 ?>"> <!--change deepak 26-10-2020-->
		   <h2><?php echo $result['heading'] ?></h2>
			<p class="desktopviewtext"><?php echo $result['content'] ?>
			</p>
			<p class="mobileviewtext"><?php echo $mob_text ?></p>
		   </div>
			<div class="main-slider-text-bottom">
			<a href="<?php  echo $links; ?>"><button>SHOP NOW </button></a>
			</div>
			</div>
			</div>
		  </div>   
		</div>
		<?php
		$sn++;
	}
	
	?>
    
      
    </div>
	
	 
	
  
   <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>
  
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon fa fa-chevron-left"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon fa fa-chevron-right"></span>
  </a>
</div>

</div>
</div>


<div class="bg-light p-0"  onmouseover="openCity(event, 'Hide');hide_cart_data()" >

<div class="new-arrival">
<h6>NEW ARRIVALS</h6>
<div class="w-100 bg-light pt-2 text-center">
<div class="product-carousel">
<a href="<?php echo tep_href_link('info.php','Model=EP8&pid=133');?>">
<div class="product">
    <div class="product-top">
      <img class="product-image new-arrival-imgs new-arrival-imgs-EP8" alt="food guard" title="PORTABLE SNEEZE GUARDS"  src="images/new_arival/EP8/slider0.jpg" data-modelname="EP8"/>
      <div class="product-name new-arrivalsub">
	  <span>EP8 SCREEN</span>
      </div>
    </div>
</div>
</a>

<a href="<?php echo tep_href_link('info.php','Model=ORBIT720&pid=131');?>">
<div class="product">
    <div class="product-top">
      <img class="product-image new-arrival-imgs new-arrival-imgs-ORBIT720" alt="sneeze guard brackets" title="sneeze guard"  src="images/new_arival/ORBIT720/slider0.jpg" data-modelname="ORBIT720"/>
      <div class="product-name new-arrivalsub">
	  <span>ORBIT720</span>
      </div>
    </div>
  </div>
</a>

<a href="<?php echo tep_href_link('info.php','Model=EP6&mid=129');?>">
  <div class="product">
    <div class="product-top">
      <img class="product-image new-arrival-imgs new-arrival-imgs-EP6" alt="glass guards" title="custom sneeze guards"  src="images/new_arival/EP6/slider0.jpg" data-modelname="EP6"/>
      <div class="product-name new-arrivalsub">
	  <span>EP6</span>
      </div>
    </div>
  </div>
</a>

<a href="<?php echo tep_href_link('info.php','Model=EP5&mid=72');?>">
  <div class="product">
    <div class="product-top">
      <img class="product-image new-arrival-imgs new-arrival-imgs-EP5" alt="SNEEZE GUARD MANUFACTURERS" title="nsf sneeze guard"  src="images/new_arival/EP5/slider0.jpg" data-modelname="EP5"/>
      <div class="product-name new-arrivalsub">
	  <span>EP5</span>
      </div>
    </div>
  </div>
</a>
</div>
</div>

</div>

</div>


<div class="container-col2" onmouseover="openCity(event, 'Hide');hide_cart_data()">
<ul>
<?php
$sel = mysqli_query($connt,"select * from instock_and_portable where id='1'");
$result = mysqli_fetch_assoc($sel);
?>
<li class="container-col2-list1">
<div class="portable-text">
<h5><?php echo $result['model_number']; ?></h5>
<h6><?php echo $result['heading']; ?></h6>
<p><?php echo $result['content']; ?></p>


<a href="<?php echo tep_href_link('instock-sneeze-guard.php','cPath=86');?>"><button>SHOP NOW </button></a>
</div>


<img src="sneezegaurd/upload2/<?php echo $result['image'] ?>" alt="instock sneeze guard" title="buffet sneeze guards" id="imageinstock"/>
</li>

<?php 
$sel = mysqli_query($connt,"select * from instock_and_portable where id='3'");
$result = mysqli_fetch_assoc($sel);
?>
<li  class="container-col2-list2">
<div class="portable-text">
<h5><?php echo $result['model_number']; ?></h5>
<h6><?php echo $result['heading'] ?></h6>
<p><?php echo $result['content'] ?></p>


<a href="<?php  echo tep_href_link('portable-sneeze-guard.php'); ?>"><button>SHOP NOW </button></a>

</div>
<img src="sneezegaurd/upload2/<?php echo $result['image'] ?>" alt="portable sneeze guard" title="sneeze guards for restaurants"  id="imageportable" /></li>
</ul>
</div>


<div class="bg-light p-0"   onmouseover="openCity(event, 'Hide');hide_cart_data()">

<div class="quick-order-main">
<h2>QUICK ORDER
</div>
</h2>

<div  class="p-0 bg-white">

<div class="product-carousel">




<?php
$gfgfg="SELECT * FROM orders WHERE `orders_id` > '905038' ORDER BY orders_id DESC LIMIT 10";

$res_data = mysqli_query($connt,$gfgfg);

$snnn=1;
while($row = mysqli_fetch_array($res_data))
{
	$orders_id=$row[0];
	$res_data22=mysqli_query($connt,"SELECT * FROM `screen_table` where order_no ='".$orders_id."'");
	
	while($row22 = mysqli_fetch_array($res_data22))
	{
		
	 if($snnn<=10)
	 {
		 
	$category_namess=$row22['category'];
	$bays=$row22['bay'];
	
	if($bays=='')
	{
		$bays='1BAY';
	}
	if($category_namess=='EP5')
	{
	
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=86_72");	
	$urlss=tep_href_link("product_info.php", 'id=72&type='.$bays.'&add_more_bay=0');	
	}
	elseif($category_namess=='Ring-EP5')
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=86_122");
	$urlss=tep_href_link("product_info.php", 'id=122&type='.$bays.'&add_more_bay=0');	
	}
	elseif($category_namess=='EP6')
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=86_129");
	$urlss=tep_href_link("product_info.php", 'id=129&type='.$bays.'&add_more_bay=0');		
	}
	elseif($category_namess=='EP7')
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=86_130");
	$urlss=tep_href_link("product_info.php", 'Model=EP7&id=130');		
	}
	elseif($category_namess=='EP8')
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=86_133");
	$urlss=tep_href_link("product_info.php", 'Model=EP8&id=133');		
	}
	elseif($category_namess=='EP15')
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=86_71");
	$urlss=tep_href_link("product_info.php", 'id=71&type='.$bays.'&add_more_bay=0');		
	}
	elseif($category_namess=='EP11')
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=86_55");
	$urlss=tep_href_link("product_info.php", 'id=55&type='.$bays.'&add_more_bay=0');		
	}
	elseif($category_namess=='EP12')
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=86_56");
	$urlss=tep_href_link("product_info.php", 'id=56&type='.$bays.'&add_more_bay=0');		
	}
	elseif($category_namess=='EP21')
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=86_57");
	$urlss=tep_href_link("product_info.php", 'id=57&type='.$bays.'&add_more_bay=0');		
	}
	elseif($category_namess=='EP22')
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=86_58");
	$urlss=tep_href_link("product_info.php", 'id=58&type='.$bays.'&add_more_bay=0');		
	}
	elseif($category_namess=='EP36')
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=86_59");
	$urlss=tep_href_link("product_info.php", 'id=59&type='.$bays.'&add_more_bay=0');		
	}
	elseif($category_namess=='ED20')
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=86_113");
	$urlss=tep_href_link("product_info.php", 'id=113&type='.$bays.'&add_more_bay=0');		
	}
	elseif($category_namess=='ES47')
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=126_124");
	$urlss=tep_href_link("product_info.php", 'id=124&type='.$bays.'&add_more_bay=0');		
	}
	elseif($category_namess=='ES29')
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=87_114");
	$urlss=tep_href_link("product_info.php", 'id=114&type='.$bays.'&add_more_bay=0');		
	}
	elseif($category_namess=='ES31')
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=87_61");
	$urlss=tep_href_link("product_info.php", 'id=61&type='.$bays.'&add_more_bay=0');		
	}
	elseif($category_namess=='ES40')
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=87_62");
	$urlss=tep_href_link("product_info.php", 'id=62&type='.$bays.'&add_more_bay=0');		
	}
	elseif($category_namess=='ES53')
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=87_110");
	$urlss=tep_href_link("product_info.php", 'id=110&type='.$bays.'&add_more_bay=0');		
	}
	elseif($category_namess=='ES67')
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=87_63");
	$urlss=tep_href_link("product_info.php", 'id=63&type='.$bays.'&add_more_bay=0');		
	}
	elseif($category_namess=='ES73')
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=87_64");
	$urlss=tep_href_link("product_info.php", 'id=64&type='.$bays.'&add_more_bay=0');		
	}
	elseif($category_namess=='ES82')
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=87_111");
	$urlss=tep_href_link("product_info.php", 'id=111&type='.$bays.'&add_more_bay=0');		
	}
	elseif($category_namess=='ES90')
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=87_123");
	$urlss=tep_href_link("product_info.php", 'id=123&type='.$bays.'&add_more_bay=0');		
	}
	elseif($category_namess=='ES92')
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=87_125");
	$urlss=tep_href_link("product_info.php", 'id=125&type='.$bays.'&add_more_bay=0');		
	}
	elseif($category_namess=='B950')
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=87_80");
	$urlss=tep_href_link("product_info.php", 'id=80&type='.$bays.'&add_more_bay=0');		
	}
	elseif($category_namess=='B950 SWIVEL')
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=87_81");	
	$urlss=tep_href_link("product_info.php", 'id=81&type='.$bays.'&add_more_bay=0');	
	}
	elseif($category_namess=='ORBIT360')
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=87_128");
	$urlss=tep_href_link("product_info.php", 'id=128&type='.$bays.'&add_more_bay=0');		
	}
	elseif($category_namess=='ALLIN1')
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=85_117");
	$urlss=tep_href_link("product_info.php", 'Model=ALLIN1&id=117');		
	}
	elseif($category_namess=='B950P')
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=85_79");	
	$urlss=tep_href_link("product_info.php", 'Model=B-950P-GLASS&id=79');	
	}
	elseif($category_namess=='EP950')
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=85_70");
	$urlss=tep_href_link("product_info.php", 'Model=EP-950-ACRYLIC&id=70');		
	}
	elseif($category_namess=='ORBIT720')
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=85_131");
	$urlss=tep_href_link("product_info.php", 'Model=ORBIT720&id=131');		
	}
	elseif($category_namess=='Light Bar')
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=88_121");
	$urlss=tep_href_link("product_info.php", 'id=121&type=1BAY');		
	}
	elseif($category_namess=='Mid-Shelves')
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=88_118");
	$urlss=tep_href_link("product_info.php", 'id=118&type='.$bays.'&add_more_bay=0');		
	}
	elseif($category_namess=='Heat Lamp')	
	{
	$url=tep_href_link(FILENAME_PRODUCT,"cPath=88_120");
	$urlss=tep_href_link("product_info.php", 'id=120&type='.$bays.'&add_more_bay=0');		
	}
		 
		 
		 
		 
	if($category_namess=='EP5' ||$category_namess=='Ring-EP5' ||$category_namess=='EP6' ||$category_namess=='EP7' ||$category_namess=='EP8'){
			$keywordname="Barrier";
		} 
		else{
			$keywordname="Sneeze Guard";
		}
		 
		 
	?>
		
		<div class="product">
			<div class="product-top">
			<img class="product-image" alt="<?php echo ''.$row22['category'].' '.$keywordname.''; ?>" title="<?php echo ''.$row22['category'].' '.$keywordname.''; ?>"  src="https://www.sneezeguard.com/includes/img/<?php echo $row22['osc_id'].'_'.$row22['img_id'].'.jpg' ?>" />
			<div class="product-name">
				<p class="text-dark"><?php echo ''.$row22['category'].' '.$keywordname.''; ?> </p>
			</div>
			<a href="<?php echo$urlss ?>" class="portable-text button"><button>BUY NOW</button></a>
			</div>
		</div>
	<?php
	}
	$snnn++;
	}
}
?>

</div>



	
</div>

</div>
	 
<div class="w-100 bg-light pt-2 text-center">

<div class="product-carousel" onmouseover="openCity(event, 'Hide');hide_cart_data()">
<?php 

$sel = mysqli_query($connt,'select * from homepage_blog');
while($result = mysqli_fetch_assoc($sel))
{
	
	$blog_id=$result['id'];
  ?>
    <div class="product">
    <div class="product-top">
      <img class="product-image" alt="<?php echo $result['model_name'] ?>" title="<?php echo $result['model_name'] ?> custom sneeze guard"  src="sneezegaurd/upload2/<?php echo $result['image'] ?>" />
      <div class="product-name">
	  <h3><?php echo $result['model_name'] ?></h3>
      </div>
    </div>
	<p class="desktopviewtext1"><?php
			echo gen_string($result['subheading'],100);
	?>
	</p>
	  <p class="mobileviewtext1"><?php 
	 		echo gen_string($result['subheading'],69);
	  ?></p>
	  <a href=" <?php  echo''.tep_href_link('blog-desciption.php',"id=".$blog_id."").''; ?>" class="portable-text button"><button>READ MORE</button></a>
  </div>
  <?php
}
?>
  
</div>

<script src='new-design/js/slick.js'></script>
<script src='new-design/js/homepage_productslider.js'></script>
     
	
</div>



<div class="container-col2-barrier" onmouseover="openCity(event, 'Hide');hide_cart_data()">
<ul>

<li class="container-col2-barrier-list1">
<?php 
$sel = mysqli_query($connt,"select * from barrier_and_adjustable where id='1'");
$result = mysqli_fetch_assoc($sel);
?>
<div class="portable-text">
<h4><?php echo $result['model_number'] ?></h4>
<h6><?php echo $result['heading'] ?></h6>
<p><?php echo $result['content'] ?></p>


<a href="<?php  echo tep_href_link('barrier-sneeze-guard.php'); ?>"><button>LEARN MORE</button></a>
</div>


<img src="sneezegaurd/upload2/<?php echo $result['image'] ?>" alt="barrier sneeze guard" title="restaurant sneeze guards"  id="imageinstock" />

</li>


<li  class="container-col2-barrier-list2">
<?php 
$sel = mysqli_query($connt,"select * from barrier_and_adjustable where id='2'");
$result = mysqli_fetch_assoc($sel);
?>
<div class="portable-text">
<h4><?php echo $result['model_number'] ?></h4>
<h6><?php echo $result['heading'] ?></h6>
<p><?php echo $result['content'] ?>

</p>

<a href="<?php  echo tep_href_link('adjustable-sneeze-guard.php'); ?>"><button>LEARN MORE</button></a>
</div>
<img src="sneezegaurd/upload2/<?php echo $result['image'] ?>" alt="adjustable sneeze guard" title="sneeze guard post"  id="imageportable" />
</li>
</ul>
</div>




<?php

require(DIR_WS_INCLUDES . 'footer_new_design.php');
?>