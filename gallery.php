<?php
ini_set('session.cookie_httponly',1);
ini_set('session.cookie_secure',1);
  
ob_start();
require('includes/application_top.php');
require(DIR_WS_FUNCTIONS . 'url_validation.php');
$obj=new Urlvalidation();
if(isset($_GET['Model'])  && (isset($_GET['mid']) || isset($_GET['pid']))){
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
$page_title=''.$_REQUEST["Model"].' sneeze guard Gallery | ADM Sneezeguards'; 
$page_description='ADM Sneezeguards manufactures sneeze guard and food guard. Our sneeze guards and Portable Barrier are based on the latest innovative designs.';
$page_keyword='Sneeze Guard, sneeze guard glass, Breath Guard, Portable Sneeze Guards, Sneezeguards, Restaurant Sneeze Guards';
require(DIR_WS_INCLUDES . 'header_new_design.php');
?>





<link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" />

<div class="container" style="margin-top:7rem">
<h4 class="text-center"><?=$_REQUEST['Model']?> Additional Images</h4>
    <section class="slider">
        <div class="row">            
                <?PHP 
                  $list_index=2;
                  $l=1;
                $sssss=0;                  
                $res=tep_db_query("select * from additional_images WHERE category_name ='".$_REQUEST['Model']."' order by order_no asc");
                while($row=tep_db_fetch_array($res)){
                    ?>
                    <div class="col-md-3 col-sm-6 pb-4 group1" title="<?=$row['image_name']?>" href="images/<?=$_REQUEST['Model'].'/addlImages/'.$row['picture']?>" onclick="openModalll();currentSlide('<?=$l?>')">
                    <div class="card">
                    <div class="card-body text-center p-2">
                    <img class="card-img-top <?=($list_index==2?'normal':'')?> galleryimagesize" src="images/<?=$_REQUEST['Model'].'/addlImages/'.$row['picture']?>"  >
                        <h6 class="card-title mt-3"><?=$row['image_name'] ?></h6>
                    </div>
                    </div>
                    </div>
                    <!-- <li class="group1" title="'.$row['image_name'].'" style="text-align:center;font-weight:bold;" href="images/'.$_REQUEST['Model'].'/addlImages/'.$row['picture'].'" onclick="openModalll();currentSlide('.$l.')"><div class="polaroid"><img class="'.($list_index==2?'normal':'').' galleryimagesize" src="images/'.$_REQUEST['Model'].'/addlImages/'.$row['picture'].'"  ><div class="container"><H3 style="  margin-top: 0px;margin-bottom: 0px;">'.$row['image_name'] .'</H3></div></div><br style="clear:both"></li> -->
                    <?php
                  $list_index++;
                    $l++;
                    $sssss=$sssss+1;
                    }
                ?>
            <div style="clear: both;"></div>
        </div>

    <div id="slider" class="flexslider">
            <ul class="slides">
<!-- To Show images according Database Start..... -->              
                <?PHP 
                  $list_index=2;
                  $l=1;
                  $sssss=0;

                $res=tep_db_query("select * from additional_images WHERE category_name ='".$_REQUEST['Model']."' order by order_no asc");
                while($row=tep_db_fetch_array($res)){
                   
                    echo '<li style="text-align:center;font-weight:bold;font-size:14px;" onclick="openModalll();currentSlide('.$l.')">'.$row['image_name'].'<br><img src="images/'.$_REQUEST['Model'].'/addlImages/'.$row['picture'].'" style="border:4px sloid #f2f2f2;width: 100%;"></li>';

                      $list_index++;
                      $l++;
                      $sssss=$sssss+1;
                    }
                ?>
<!-- To Show images according Database End..... -->

<!-- --------------------------------------------------------------------------------------------------------------------------- -->

<!-- To Show images according folder Start..... -->                
                <?/*PHP 
                $list=scandir('images/'.$_REQUEST['Model'].'/addlImages');
                $list_index=2;
                $l=1;
                while($list_index<count($list)){
                    if($list[$list_index]!='Thumbs.db'){
                        $name=explode(".", $list[$list_index]);
                    //echo '<a href="images/'.$_REQUEST['Model'].'/addlImages/'.$list[$list_index].'" target="_blank" ><img src="images/'.$_REQUEST['Model'].'/addlImages/'.$list[$list_index].'" width="570" height="270" alt="Slide 1"></a>';
                    echo '<li style="text-align:center;font-weight:bold;font-size:14px;" onclick="openModalll();currentSlide('.$l.')">'.$name[0].'<br><img src="images/'.$_REQUEST['Model'].'/addlImages/'.$list[$list_index].'" style="border:4px sloid #f2f2f2;width: 500px;"></li>';
                    }
                    $list_index++;
                }
                */?>
<!-- To Show images according folder End..... -->                
            </ul>
        </div>
    </section>
</td></tr>
    </table>
        <div id="myModalll" class="modalll">
    <div>
        <div class="text-right modelll-cut">
        <span class="index-model-close" onclick="closeModalll()">&times;</span>
        </div>
    </div>
    <div class="modalll-content">
            <?php 
                $list_index=2;
                $l=1;
                $res=tep_db_query("select * from additional_images WHERE category_name ='".$_REQUEST['Model']."' order by order_no asc");
                while($row=tep_db_fetch_array($res)){
                    echo'
                    <div class="mySlides" style="border:2px grey;">
      <div> <img src="images/'.$_REQUEST['Model'].'/addlImages/'.$row['picture'].'" style="" class="gallerypopupimage"> <br><br>
      <p class="text-center">'.$row['image_name'].' </p></div>
       <div class="numbertext" style="color:white;">'.$l.' / '.$sssss.'</div>
      <div style="padding: 7px;text-align:center;">

<a href="https://www.facebook.com/sharer/sharer.php?kid_directed_site=0&sdk=joey&u=https://www.sneezeguard.com'.$_SERVER["REQUEST_URI"].'" class="fb-share-button" data-layout="button" style="width: 12px;left: 20px;">
            <img src="social_icons/fb.png" style="width: 35px; border-radius: 6px;">
        </a>
        <a href="https://twitter.com/share?url=https://www.sneezeguard.com'.$_SERVER["REQUEST_URI"].'" style="width: 12px;left: 20px;">
            <img src="social_icons/twitter.png" style="width: 35px; border-radius: 6px;  margin-left: ;">
        </a>   
        <a href="https://api.whatsapp.com/send?text=https://www.sneezeguard.com'.$_SERVER["REQUEST_URI"].'" style="width: 12px;left: 20px;">
            <img src="social_icons/whatsapp.png" style="width: 35px; border-radius: 6px;    margin-left: ;">
        </a>
        <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://www.sneezeguard.com'.$_SERVER["REQUEST_URI"].'">
            <img src="social_icons/linkdn.jpg" style="width: 35px; border-radius: 6px;    margin-left: ;">
        </a>

       </div>     
    </div>';        
                    $list_index++;
                    $l++;
                          }
                       ?>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
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
  showSlides(slideIndex += parseInt(n));
}

function currentSlide(n) {
  showSlides(slideIndex = parseInt(n));
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
  slides[parseInt(slideIndex)-1].style.display = "block";   
  dots[parseInt(slideIndex)-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>







<?php
require(DIR_WS_INCLUDES . 'footer_new_design.php');
?>