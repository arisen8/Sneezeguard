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
require(DIR_WS_INCLUDES . 'header_new_design.php');
?>



<link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="colorbox2.css" />
<div class="mt-5">
    <h1>&nbsp;</h1>
</div>
<div class="container" onmouseover="openCity(event, 'Hide');hide_cart_data()"><!-- deepak 4-1-2021 -->
                <h2 class="videouploadeheading text-center font-weight-bold pb-4 pt-4"><?= $_REQUEST['Model'] ?> Additional Video</h2>
                <div class="row">
                <?php 
                    $modalname = $_REQUEST['Model'];
                    echo $modelname;
                    $sel = mysqli_query($connt,"select * from video where modalname='$modalname' and publish='1'");
                    while($result = mysqli_fetch_assoc($sel))
                    {
                        if(count($result) < 1)
                        {
                            ?>
                                
                            <?php
                        }
                        else
                        {
                            ?>
                            <div class="col-md-3 col-sm-3 text-center">
                                <img alt="sneeze guard <?php echo $result['modalimage'] ?>" title="sneeze guard for office <?php echo $result['modalimage']; ?>" src="sneezegaurd/upload2/images/<?php echo $result['modalimage'] ?>" border="0" class="videthumb" width="80%" data-videourl="sneezegaurd/upload2/videos/<?=$result['modalid'] ?>.mp4">
                            </div>
                            <?php
                        }
                        
                    }

                ?>
</div>
                </div>
<?php
require(DIR_WS_INCLUDES . 'footer_new_design.php');
?>