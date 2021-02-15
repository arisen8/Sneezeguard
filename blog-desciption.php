<?php
ini_set('session.cookie_httponly',1);
ini_set('session.cookie_secure',1);
  
  require('includes/application_top.php');
  
require(DIR_WS_INCLUDES . 'header_new_design.php');

require(DIR_WS_INCLUDES . 'config_pdo.php');

if(isset($_GET['id']))
{
if(is_numeric($_GET['id']))
{
 $bid = $_GET['id'];

$results = $dbConn->query("select * from homepage_blog where id='". (int)$bid."'");

$result = $results->fetch(PDO::FETCH_ASSOC); 
     $dburl =$result['url'];
	$mainulr = tep_href_link(FILENAME_PRODUCT,$dburl);

	
}
else{
tep_redirect(tep_href_link('validation_faild', '', 'SSL'));
		exit;	
}
}
else{
	tep_redirect(tep_href_link('validation_faild', '', 'SSL'));
		exit;
}
?>
<div class="mt-5"><h1>&nbsp;</h1></div>
<div class="desccontainer container" onmouseover="openCity(event, 'Hide');hide_cart_data()"><!-- deepak 4-1-2021 -->
<?php
if($result['model_name']=='')
{
?>

<div class="blog-image-main">
    <h2>No Data Found</h2>
	</div>
<?php
}
else{
?>

<div class="blog-image-main">
    <img src="sneezegaurd/upload2/<?php echo$result['image'] ?>" alt="<?php echo $result['mdoel_name'] ?> foodguard" title="<?php echo $result['model_name'] ?> sneezeguards" class="image_size">
	</div>
<div class="blogdescdiv">
    <div class="blogdescdiv">
        <span class="headingbloge"><?php echo$result['model_name'] ?></span>
    </div>
    <div id="description">
      <!--  <span class="blogheading"><?php echo $result['subheading'] ?></span><br>-->
        <?php echo$result['content'] ?>
    </div>
    <div id="time">
   <!-- <span >Date - <?php echo$result['time'] ?></span>-->
    </div>
</div>
<div class="container text-center"><a class="btn btn-dark" href="<?=$mainulr;?>">SHOP NOW</a></div>

<?php
}

?>
</div>
<?php
require(DIR_WS_INCLUDES . 'footer_new_design.php');
?>