<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  require('includes/application_top.php');

  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_ADVANCED_SEARCH);

  $breadcrumb->add(NAVBAR_TITLE_1, tep_href_link(FILENAME_ADVANCED_SEARCH));

  require(DIR_WS_INCLUDES . 'template_top.php');
?>






<!--

<script>
$( document ).ready(function() {
 window.location.href = "https://sneezeguard.com";
});
</script>
<body onload=window.location='https://sneezeguard.com'>
-->

  <div>
    

            <link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" />
            <link rel="stylesheet" href="colorbox2.css" />
          
           




<?php
if (!$detect->isMobile())
{
?>


<style type="text/css">


    body
    {
        margin: 0;
        padding: 0;
        background-color: #17171;
    }
    #contributor
    {
        color: Gray;
        margin: 0;
        padding: 0;
        margin-top: 4px;
        text-align: center;
    }
    #contributor a
    {
        color: Gray;
    }
    ul.slide li{
        list-style:none;
        display:inline-block;
        margin: 5px;
        padding:5px;
        border:1px solid #292929;
    }

    .hover_image img
    {
        opacity:0.4;
        filter:alpha(opacity=40); /* For IE8 and earlier */
    }
    li.flex-active img
    {
        opacity:1.0 !important;
        filter:alpha(opacity=100) !important; /* For IE8 and earlier */
    }
    .hover_image img:hover
    {
        opacity:1.0 !important;
        filter:alpha(opacity=100) !important; /* For IE8 and earlier */
    }
#extra-info{
    /*top: 73px;*/
    /*left: 132px;*/
    position: relative;
    /*width: 593px;*/
    z-index: 999999;
    text-align: center;
    padding: 5px 14px 0px 14px;
}.modal{
    display:none;
    background: black;
    opacity: 0.5;
    width: 100%;
    height: 100%;
    top: 0px !important;
    right: 0px !important; 
}
</style>










<style>
body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modalll {
  display: none;
  position: fixed;
  z-index: 1;
  /*padding-top: 100px;*/
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.8);
}

/* Modal Content */
.modalll-content {

    background-color: #fefefe;
    margin: auto;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    top: 50%;
    left: 50%;
    position: absolute;
    padding: 6px;
    max-width: 90%;
    max-height: 100%;
    border-radius: 10px;
    z-index: 999999;

}

/* The Close Button */
.close {
  color: #aaaaaa !important;
  position: absolute !important;
  top: 10px !important;
  right: 25px !important;
  font-size: 35px !important;
  font-weight: bold !important;
      z-index: 99999999;
          background: rgb(0,0,0,0.7);
}

.close:hover{
  color: #fff !important;
  text-decoration: none !important;
  cursor: pointer !important;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
      text-shadow: 2px 2px 4px #000000;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
.prev{
    left: 0;
}
/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: white!important;
  font-size: 14px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.take_me_link{
    color: red !important;
}.take_me_link:hover{
    color: red !important;
}
</style>

    <table class="category-List" style="width: 100%;">
        <tr>
            <td align="center"><h2 style="padding-left:0px; font-size:16px; color:#f4f4f4; text-decoration:none; text-align:center;">Installation Images</h2></td>            
        </tr>
<tr><td>
    <section class="slider">
        <div id="carousel" class="flexslider">
            <ul class="slider slide">
                <?PHP 
                $res=tep_db_query("select * from orders where `orders_id` > 905300 order by orders_id desc");
                $l=1;
                $sssss=0;
                while($row=tep_db_fetch_array($res)){
                    $orders_id=$row['orders_id'];
					//echo'<br />';
					
				$res_img=tep_db_query("SELECT * FROM `screen_table` where order_no ='".$orders_id."'");	
				
				$ct=0;
          while($row_img=tep_db_fetch_array($res_img)){
			  
			 echo '<li class="group1" title="Sneeze Guard" style="text-align:center;font-weight:bold;" href="includes/img/'.$row_img['osc_id'].'.jpg" onclick="openModalll();currentSlide('.$l.')">'.$row_img['category'] .'<br><img class="'.($list_index==2?'normal':'').'" src="includes/img/'.$row_img['osc_id'].'_'.$row_img["img_id"].'.jpg" alt="Sneeze Guard Sneezeguard Sneezeguards" width="100" ><br style="clear:both">';
                    echo '</li>';
			  
			  
		  }
					
                    // $asd = "'$row[url]'";
                    // onclick="window.history.replaceState(null, null,'.$asd.');"
                    // echo '<li data-id="'.$row['url'].'" class="group1" title="'.$row['image_name'].'" style="text-align:center;font-weight:bold;" href="images/installation_images/'.$row['picture'].'" onclick="openModalll();currentSlide('.$l.')">'.$row['image_name'] .'<br><img class="'.($list_index==2?'normal':'').'" src="images/installation_images/'.$row['picture'].'" width="100" ><br style="clear:both">';
                    // echo '</li>';
                    $l++;
                    $sssss=$sssss+1;
                    }
                ?>
            <!-- Previous Code for Show all Images START -->
                <?/*PHP 
                $list=scandir('images/installation_images');
                $list_index=2;
                $l=1;
                while($list_index<count($list)){
                    if($list[$list_index]!='Thumbs.db'){
                        $name=explode(".", $list[$list_index]);
                    //echo '<a href="images/installation_images/'.$list[$list_index].'" target="_blank" ><img src="images/installation_images/'.$list[$list_index].'" width="570" height="270" alt="Slide 1"></a>';
                    echo '<li style="text-align:center;font-weight:bold;font-size:14px;">'.$name[0].'<br><img src="images/installation_images/'.$list[$list_index].'" style="border:4px sloid #f2f2f2;"></li>';
                    }
                    $list_index++;
                }
                */?>
            <!-- Previous Code for Show all Images END -->
                <br style="clear:both">            
            </ul>
            <div style="clear: both;"></div>



<!-- <div id="miModal" class="modal"></div>
    <div id="miwindow" style="display: none; width: 670px;background: white;"> 
        <div class="mititle" style="display: block;color: red;text-align: center;">TAKE ME TO THIS PRODUCT</div>
    </div> -->


        <div id="slider" class="flexslider">
            <ul class="slides">
                <?PHP 
                $list=scandir('images/installation_images');
                $list_index=2;
                $l=1;
                while($list_index<count($list)){
                    if($list[$list_index]!='Thumbs.db'){
                        $name=explode(".", $list[$list_index]);
                    //echo '<a href="images/installation_images/'.$list[$list_index].'" target="_blank" ><img src="images/installation_images/'.$list[$list_index].'" width="570" height="270" alt="Slide 1"></a>';
                    // echo '<li style="text-align:center;font-weight:bold;font-size:14px;">'.$name[0].'<br><img src="images/installation_images/'.$list[$list_index].'" style="border:4px sloid #f2f2f2;width: 500px;"></li>';
                    }
                    $list_index++;
                }
                ?>
            </ul>
        </div>
    </section>
</td></tr>
    </table>
    
    
    <script src="jquery-1.6.2.min.js"></script>
            <script type="text/javascript" src="jquery.flexslider.js"></script>
            

<div id="myModalll" class="modalll">
  <span class="close" onclick="closeModalll()">&times;</span>
    <div class="modalll-content">
            <?php 

                $res=tep_db_query("select * from orders where `orders_id` > 905300 order by orders_id desc ");
                $l=1;
                $sssss=0;
                while($row=tep_db_fetch_array($res)){
                    $orders_id=$row['orders_id'];
					//echo'<br />';
					
				$res_img=tep_db_query("SELECT * FROM `screen_table` where order_no ='".$orders_id."'");	
				
				$ct=0;
          while($row_img=tep_db_fetch_array($res_img)){
			  
                    echo'
                    <div class="mySlides" style="border:2px grey;">
      <div><img src="includes/img/'.$row_img['osc_id'].'_'.$row_img["img_id"].'.jpg" style="max-height:399px;" title="Sneeze Guard"  alt="Sneeze Guard"> 
      <p style="margin-top: 2px;margin-bottom: 0px;font-size: 14px;color: black;">'.$row_img['category'].' </p><a href="#" class="take_me_link">Take me to this product</a></div>
       <div class="numbertext" style="color:white;">'.$l.' / '.$sssss.'</div>

    </div>';        

                    $l++;
                          }
						  
				}
                
                        ?>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
</div>

<script>
function openModalll() {
  document.getElementById("myModalll").style.display = "block";
}

function closeModalll() {
  document.getElementById("myModalll").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

<?
}
else
{
?>


       <style type="text/css">
               
          
        body
        {
            margin: 0;
            padding: 0;
            background-color: #17171;
        }
        #contributor
        {
            color: Gray;
            margin: 0;
            padding: 0;
            margin-top: 4px;
            text-align: center;
        }
        #contributor a
        {
            color: Gray;
        }
         ul.slide li{
                list-style:none;
                
                margin: 5px;
                padding:5px;
                /*border:1px solid #292929;*/
            }
            
            .hover_image img
            {
            opacity:0.4;
            filter:alpha(opacity=40); /* For IE8 and earlier */
            }
            li.flex-active img
            {
            opacity:1.0 !important;
            filter:alpha(opacity=100) !important; /* For IE8 and earlier */
            }
            .hover_image img:hover
            {
            opacity:1.0 !important;
            filter:alpha(opacity=100) !important; /* For IE8 and earlier */
            }
      
      
      
      
      
      
    #cboxTitle {
    position: absolute;
    bottom: 48px;
    left: 0;
    text-align: center;
    width: 100%;
    color: #949494;
    font-size: 33px;
} 
      
  #cboxCurrent {
    position: absolute;
    bottom: 4px;
    left: 230px;
    color: #949494;
    font-size: 30px;
}

/*
#cboxClose {
    position: absolute;
    bottom: 0;
    right: 0;
    background: url(img/new_icons/close.png) no-repeat -25px 0;
    width: 25px;
    height: 25px;
    text-indent: -9999px;
}

#cboxPrevious {
    position: absolute;
    bottom: 0;
    left: 0;
    background: url(img/new_icons/previous.png) no-repeat -75px 0;
    width: 25px;
    height: 25px;
    text-indent: -9999px;
}

#cboxNext {
    position: absolute;
    bottom: 0;
    left: 27px;
    background: url(img/new_icons/next.png) no-repeat -50px 0;
    width: 25px;
    height: 25px;
    text-indent: -9999px;
} 
*/

#colorbox{
    display: block;
    visibility: visible;
    top: 382px;
    left: 149px;
    position: absolute;
    width: 882px;
    height: 1307px;
} 


#cboxWrapper{ 
    height: 1307px;
    width: 882px;
}

#cboxContent{
      float: left;
    width: 840px;
    height: 1265px;
} 


#cboxLoadedContent{
  
      width: 840px;
    overflow: auto;
    height: 1237px;
} 

#cboxLoadedContent img{
    margin-top: 170px !important;
    cursor: pointer;
    width: 834px !important;
    height: 626px !important;
    float: none;
}

@media only screen and (max-device-width: 375px){
    #cboxContent{
        height: 730px !important;
    }
    #cboxLoadedContent{
        height: 660px !important;
        margin-bottom: 0px !important;
    }
    #cboxMiddleRight{
        height: 730px !important;
    }
    #cboxMiddleLeft{
        height: 730px !important;
    }
    #cboxLoadedContent img{
        margin-top: 20px !important;
    }
    #cboxTitle{
        float: right !important;
        display: inline !important;
        margin-right: 40px !important;
        width: auto !important;
        position: unset !important;
    }
    #cboxCurrent{
        float: left !important;
        display: inline !important;
        margin-left: 72px !important;
        position: unset !important;
    }
}

@media only screen and (min-device-width: 348px) and (max-device-width: 375px){
      #cboxLoadedContent img{
        margin-top: 20px !important;
  }
    #cboxLoadedContent{
        height: 670px !important;
        margin-bottom: 0px !important;
    }
    #cboxContent{
        height: 750px !important;
    }
    #cboxMiddleRight{
        height: 750px !important;
    }
    #cboxMiddleLeft{
        height: 750px !important;
    }
    #cboxTitle{
        float: right !important;
        display: inline !important;
        margin-right: 40px !important;
        width: auto !important;
        position: unset !important;
    }
    #cboxCurrent{
        float: left !important;
        display: inline !important;
        margin-left: 72px !important;
        position: unset !important;
    }
}


@media only screen and (min-device-width: 376px) and (max-device-width: 425px){
      #cboxLoadedContent img{
        margin-top: 30px !important;
        margin-bottom: 0px !important;
  }
  #cboxLoadedContent{
    height: 666px !important;
        margin-bottom: 0px !important;
  }
    #cboxContent{
        height: 725px !important;
    }
    #cboxMiddleRight{
        height: 725px !important;
    }
    #cboxMiddleLeft{
        height: 725px !important;
    }
  #cboxTitle{
    float: right !important;
      display: inline !important;
      margin-right: 40px !important;
      width: auto !important;
      position: unset !important;
  }
  #cboxCurrent{
    float: left !important;
      display: inline !important;
      margin-left: 72px !important;
      position: unset !important;
  }
}


@media only screen and (min-device-width: 426px) and (max-device-width: 1080px){
      #cboxLoadedContent img{
      margin-top: 1px !important;
      width: 600px !important;
      height: 440px !important;
      margin-bottom: 0px !important;
  }
  #colorbox{
    top: 90px !important;
    height: 500px !important;
  }
  #cboxWrapper{
    height: 500px !important;
  }
  #cboxContent{
    height: 470px !important;
  }
  #cboxMiddleRight{
    height: 470px !important;
  }
  #cboxMiddleLeft{
    height: 470px !important;
  }
  #cboxLoadedContent{
    height: 444px !important;
    margin-bottom: 0px !important;
  }
  #cboxTitle{
    float: right !important;
      display: inline !important;
      margin-right: 40px !important;
      width: auto !important;
      position: unset !important;
      font-size: 22px !important;
  }
  #cboxCurrent{
    float: left !important;
      display: inline !important;
      margin-left: 72px !important;
      position: unset !important;
      font-size: 22px !important;
  }
    #TB_window{
    top: 31%;
}
}
#extra-info{
    /*top: 73px;*/
    /*left: 132px;*/
    position: relative;
    /*width: 593px;*/
    z-index: 999999;
    text-align: center;
    padding: 5px 14px 0px 14px;
}

    </style>
    <table class="category-List" style="width: 100%;">
        <tr>
            <td align="center"><h2 style="padding-left:0px; font-size:30px; color:#f4f4f4; text-decoration:none; text-align:center;"><?=$_REQUEST['Model']?> Installation Images</h2></td>
            
           
            
        </tr>
<tr><td>
    <section class="slider">
        <div id="carousel" class="flexslider">
            <ul class="slider slide">
                <?PHP 
				
				
				
				
				$res=tep_db_query("select * from orders order by orders_id desc  LIMIT 0 , 30");
                $l=1;
                $sssss=0;
                while($row=tep_db_fetch_array($res)){
                    $orders_id=$row['orders_id'];
					//echo'<br />';
					
				$res_img=tep_db_query("SELECT * FROM `screen_table` where order_no ='".$orders_id."' LIMIT 0 , 30");	
				
				$ct=0;
          while($row_img=tep_db_fetch_array($res_img)){
                

                    echo '<li  class="group1" title="Sneeze Guard" style="text-align:center;font-weight:bold;" href="includes/img/'.$row_img['osc_id'].'_'.$row_img["img_id"].'.jpg">'.$row_img['category'] .'<br><img class="'.($list_index==2?'normal':'').'" src="includes/img/'.$row_img['osc_id'].'_'.$row_img["img_id"].'.jpg"  alt="Sneeze Guard Sneezeguard Sneezeguards" width="100" ><br style="clear:both"></li>';
                    }
					
				}

                ?>
            <!-- Previous Code for Show all Images START -->
                <?/*PHP 
                $list=scandir('images/installation_images');
                $list_index=2;
                $l=1;
                while($list_index<count($list)){
                    if($list[$list_index]!='Thumbs.db'){
                    $name=explode(".", $list[$list_index]);
                    //echo '<a href="images/installation_images/'.$list[$list_index].'" target="_blank" ><img src="images/installation_images/'.$list[$list_index].'" width="570" height="270" alt="Slide 1"></a>';
                    echo '<li class="group1" title="'.$list[$list_index].'" style="text-align:center;font-weight:bold;font-size: 26px;" href="images/installation_images/'.$list[$list_index].'">'.$name[0].'<br><img class="'.($list_index==2?'normal':'').'" src="images/installation_images/'.$list[$list_index].'" width="100" style="width: 500px;" ><br style="clear:both"></li>';
                    }
                    $list_index++;
                }
                */?>
            <!-- Previous Code for Show all Images END -->                  
                <br style="clear:both">            
            </ul>
            <div style="clear: both;"></div>

<div id="TB_overlay" class="TB_overlayBG" style="display: none;"></div>
<div id="TB_window" style="margin-left: -335px;  margin-top: -260px; display: none;">
    <div style="text-align: center;" class="take_me"></div>
    <div class="img_slct" style="width:600px; height:440px;overflow: auto;"></div>
    <div class="social_icon">
        <!-- <div id="extra-info" style="position: sticky;z-index: 9999;display: block;visibility: visible;top: 467px;left: 264px;padding-left: 14px;padding-right: 14px;top: 450px;"> -->
          <div style="background:white;border-radius: 0px 0px 5px 5px;">
            <a href="https://www.facebook.com/sharer/sharer.php?kid_directed_site=0&sdk=joey&u=https://www.sneezeguard.com<?php echo $_SERVER['REQUEST_URI']?>" class="fb-share-button" data-layout="button" style="width: 12px;left: 20px;">
            <img src="fb.png" style="width: 32px;margin-left: 35%;margin-bottom: 2px;">
        </a>
            <!-- <img src="instagram.png" style="width: 35px; border-radius: 6px;    margin-left: 15px;"> -->
        <a href="https://twitter.com/share?url=https://www.sneezeguard.com<?php echo $_SERVER['REQUEST_URI']?>" style="width: 12px;left: 20px;">
            <img src="twitter.png" style="width: 35px; margin-left: 15px;    margin-top: 7px;">
        </a>   
        <a href="https://api.whatsapp.com/send?text=https://www.sneezeguard.com<?php echo $_SERVER['REQUEST_URI']?>" style="width: 12px;left: 20px;">
            <img src="whatsapp.png" style="width: 35px; margin-left: 15px;">
        </a>
            <!-- // <img src="snapchat.jpg" style="width: 35px; border-radius: 6px;    margin-left: 15px;margin-bottom: 10px;"> -->
        <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://www.sneezeguard.com<?php echo $_SERVER['REQUEST_URI']?>">
            <img src="linkdn.jpg" style="width: 35px; margin-left: 15px;">
        </a>
          </div>
        <!-- </div> -->
    </div>
</div>

        </div>
        <div id="slider" class="flexslider">
            <ul class="slides">
                <?PHP 
                $list=scandir('images/installation_images');
                $list_index=2;
                $l=1;
               $res=tep_db_query("select * from orders order by orders_id desc");
                $l=1;
                $sssss=0;
                while($row=tep_db_fetch_array($res)){
                    $orders_id=$row['orders_id'];
					//echo'<br />';
					
				$res_img=tep_db_query("SELECT * FROM `screen_table` where order_no ='".$orders_id."'");	
				
				$ct=0;
          while($row_img=tep_db_fetch_array($res_img)){
                    //echo '<a href="images/installation_images/'.$list[$list_index].'" target="_blank" ><img src="images/installation_images/'.$list[$list_index].'" width="570" height="270" alt="Slide 1"></a>';
                    echo '<li style="text-align:center;font-weight:bold;font-size:14px;">'.$row_img['category'].'<br><img src="includes/img/'.$row_img['osc_id'].'_'.$row_img["img_id"].'.jpg" title="Sneeze Guard" alt="Sneeze Guard Sneezeguard Sneezeguards" style="border:4px sloid #f2f2f2;width: 500px;"></li>';
                    }
                    $list_index++;
                }
                ?>
            </ul>
        </div>
    </section>
</td></tr>
    </table>
  
  

    <script src="jquery-1.6.2.min.js"></script>
            <script type="text/javascript" src="jquery.flexslider.js"></script>
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="jquery.colorbox2.js"></script>

              <script type="text/javascript">


  $(".group1").click(function(){
        $("#TB_overlay").show();
        $("#TB_window").show();
        var link_url = $(this).data('id');
        var img_src = $(this).attr('href');
        // $("#miModal").show();
        // $("#miwindow").show();
        // $("#mititle").show();
        // $(".img_slct").html('<a href="https://www.sneezeguard.com/'+dd+'" sstyle="color: red;margin-top: 11px;text-align: center;font-size: 14px;"><b>TAKE ME TO THIS PRODUCT</b></a><span class="close" style="margin-top: 0px;">&times;</span>');
// ONLINE
        $(".take_me").html('<a href="https://www.sneezeguard.com/'+link_url+'" style="color: red;margin-top: 11px;text-align: center;font-size: 14px;"><b>TAKE ME TO THIS PRODUCT</b></a><span class="close" style="margin-top: 0px;" onclick=$("#TB_overlay").hide();$("#TB_window").hide();>&times;</span>');
// OFFLINE
        // $(".take_me").html('<a href="http://localhost/sneezeguard/'+link_url+'" style="color: red;margin-top: 11px;text-align: center;font-size: 14px;"><b>TAKE ME TO THIS PRODUCT</b></a><span class="close" style="margin-top: 0px;" onclick=$("#TB_overlay").hide();$("#TB_window").hide();>&times;</span>');
        
        $(".img_slct").html('<img src="'+img_src+'" style="width: 100%;" >');
});
  $(".close").click(function() {
    alert('hii');
  $("#TB_overlay").hide();
  $("#TB_window").hide();

});

      //   $(document).ready(function(){
      //  //Examples of how to assign the Colorbox event to elements
      //  $(".group1").colorbox({rel:'group1', transition:"none", height:"60%"});
      //  $(".group2").colorbox({rel:'group2', transition:"fade"});
      //  $(".group3").colorbox({rel:'group3', transition:"none", width:"100%", height:"100%"});
      //  $(".group4").colorbox({rel:'group4', slideshow:true});
      //  $(".ajax").colorbox();
      //  $(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
      //  $(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
      //  $(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
      //  $(".inline").colorbox({inline:true, width:"50%"});
      //  $(".callbacks").colorbox({
      //    onOpen:function(){ alert('onOpen: colorbox is about to open'); },
      //    onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
      //    onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
      //    onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
      //    onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
      //  });

      //  $('.non-retina').colorbox({rel:'group5', transition:'none'})
      //  $('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
        
      //  //Example of preserving a JavaScript event for inline calls.
      //  $("#click").click(function(){ 
      //    $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
      //    return false;
      //  });
      // });
   
    
    
      </script> 
<!-- <script type="text/javascript">
                var dd = "";

              $(".group1").click(function(){

                //Examples of how to assign the Colorbox event to elements
                $(".group1").colorbox({rel:'group1', transition:"none", height:"75%"});

                    dd = $(this).data('id');  

if ($('#extra-info').length==1) {

        $('#extra-info').replaceWith('<div id="extra-info">'+
                  '<div style="background:white;border-radius: 5px 5px 0px 0px;"  class="extra-info-url">'+
                  // ONLINE
                    // '<a href="https://www.sneezeguard.com/'+dd+'" style="width: 12px;left: 20px;color:red;"><b>TAKE ME TO THIS PRODUCT</b>'+
                    // OFFLINE
                    '<a href="http://localhost/sneezeguard/'+dd+'" style="width: 12px;left: 20px;color:red;" class="take_me_url" data-id="http://localhost/sneezeguard/'+dd+'"><b>TAKE ME TO THIS PRODUCT</b>'+
                    '</a>'+
                  '</div>'+
                '</div>');
        console.log('replaced');
}else{

     $('#colorbox').append('<div id="extra-info">'+
          '<div style="background:white;border-radius: 5px 5px 0px 0px;"  class="extra-info-url">'+
          // ONLINE
            // '<a href="https://www.sneezeguard.com/'+dd+'" style="width: 12px;left: 20px;color:red;"><b>TAKE ME TO THIS PRODUCT</b>'+
            // OFFLINE
            '<a href="http://localhost/sneezeguard/'+dd+'" style="width: 12px;left: 20px;color:red;" class="take_me_url" data-id="http://localhost/sneezeguard/'+dd+'"><b>TAKE ME TO THIS PRODUCT</b>'+
            '</a>'+
          '</div>'+
        '</div>');  
}
    console.log($('.take_me_url').data('id'));

$('#cboxNext').click(function(){
   console.log($('.take_me_url').data('id'));
});
$('#cboxPrevious').click(function(){
   console.log($('.take_me_url').data('id'));
});
   


                $('.non-retina').colorbox({rel:'group5', transition:'none'});
                $('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
                
                //Example of preserving a JavaScript event for inline calls.
                $("#click").click(function(){ 
                    $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
                    return false;
                });

            });
        
      </script>  -->

<?
}
?>

  
  
  
  
  
  
  </div>

<?php
  require(DIR_WS_INCLUDES . 'template_bottom.php');
  require(DIR_WS_INCLUDES . 'application_bottom.php');
?>