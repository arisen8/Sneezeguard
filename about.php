<?php
ini_set('session.cookie_httponly',1);
ini_set('session.cookie_secure',1);
  
$page_title='Sneeze Guard for Checkout Counters | About us - ADM Sneezeguards'; 
$page_description='Get the best Sneeze Guard on the largest online selection at sneezeguard.com. Browse your favorite designs of Glass Barrier for office In-stock at affordable prices.';
$page_keyword='Sneeze Guard In-stock, Latest design sneeze guard, Sneeze Gaurd online collection, In-stock Glass Barrier';

require('includes/application_top.php');

require(DIR_WS_FUNCTIONS . 'url_validation.php');
error_reporting(0);
$obj=new Urlvalidation();
// echo'erfkekt='; print_r($obj);
// die;

if(isset($_GET['class'])){
$toshow=$_GET['class'];	

//echo''. $obj->tep_check_by_about_id($toshow).'<br /><br /><br />';
	if($obj->tep_check_by_about_id($toshow))
	{

	}
	else{
		tep_redirect(tep_href_link('validation_faild', '', 'SSL'));
		exit;
	}
}

require(DIR_WS_INCLUDES . 'header_new_design.php');

$servername = DB_SERVER;
$username = DB_SERVER_USERNAME;
$password = DB_SERVER_PASSWORD;
$dbname = DB_DATABASE;
$connt = mysqli_connect($servername, $username, $password, $dbname) or die(mysqli_connect_error());
$html="";
if (isset($_GET['class'])) {
    $bid = $_GET['class'];
    $sel = mysqli_query($connt, "select * from insdeadm where divid='$bid'");
    $result = mysqli_fetch_assoc($sel);
    $html.='<div class="'.$result['divid'].' tohide">
    <img src="sneezegaurd/upload2/'.$result['image'].'" alt="sneezguard" title="ADM '.$result['leftheading'].'" class="w-100">
    <div class="container-fluid mt-3">
    <h4 id="STORY">'.$result['leftheading'].'</h4>
    <p class="aboutus-content">'.$result['content'].'</p>
    </div>
</div>';
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        let toShow = "<?=$toshow;?>";
        $('.'+toShow).css('display','block');
    })
</script>
<style>

</style>
<div class="container about-us-content" onmouseover="openCity(event, 'Hide');hide_cart_data()">
<!-- deepak 4-1-2021 -->
<?= $html;?>
</div>
<?php
require(DIR_WS_INCLUDES . 'footer_new_design.php');
?>