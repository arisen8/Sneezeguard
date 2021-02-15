<?php
ini_set('session.cookie_httponly',1);
ini_set('session.cookie_secure',1);
  
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  require('includes/application_top.php');


  if (!tep_session_is_registered('customer_id')) {
    $navigation->set_snapshot();
    tep_redirect(tep_href_link(FILENAME_LOGIN, '', 'SSL'));
  }

  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_ACCOUNT);

  $breadcrumb->add(NAVBAR_TITLE, tep_href_link(FILENAME_ACCOUNT, '', 'SSL'));

require(DIR_WS_INCLUDES . 'header_new_design.php');
?>
<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
<script src="css/bootstrap/bootstrap.min.js"></script>
<?


//Connection to database START.....
	$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	$conn=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());
//Connection to database END.....




	//fetch data...
$sql = "SELECT * FROM customer_dashboard_data ORDER BY `status` DESC ";
$query = mysqli_query($conn,$sql);

?>

<style>
	.processccc{
		color:#605b5b; font-size:12px;
	}p {
	    font-family: "Times New Roman", Times, serif;
	    color: ffffff;
	    font-size: 17px;
	    / padding-left: 35px; /
	}.col1{
		background-color: #F5F5F5;
		border: 1px solid lightgrey;
		color: black; 
		padding-top: 5%;
	    padding-bottom: 5%;
	    text-align: center;
	}.col1 p{
		font-size: 13px;

	}.col1 h5{
		margin-top: 8px;
	    text-align: center;
	}.col1 img{
		width: 50px;
	    border-radius: 10%;
	}.col1 a{
		text-decoration: none !important;
		color: black;
	}.col1:hover{
		box-shadow: #cbcbce 1px 1px 14px 6px;
		-webkit-box-shadow: #cbcbce 1px 1px 14px 6px;
		z-index: 0;
		transform: translateY(-4px);
		-webkit-transform: translateY(-4px);
		transition: transform .5s,box-shadow .5s,-webkit-transform .5s,-webkit-box-shadow .5s;
		/*text-decoration: none !important;	*/
	}.container-fluid{
		padding-top: 20px;
	    padding-bottom: 20px;
	    width: 95% !important;
	}
	
	.myaccount-content{margin-top:95px;}
	
	
	
.myaccount-content p{font-size:16px;}

.myaccount-content h5{font-size:20px;}
</style>

<div class="myaccount-content" style="background-color:white;color: black;margin-left: 4px;margin-right: 4px;" onmouseover="openCity(event, 'Hide');hide_cart_data()"><!-- deepak 4-1-2021 -->
	<div class="container-fluid ">
	  	<div class="row row1">
	  		<?php
        while($row = mysqli_fetch_array($query)){

			$idss=$row['id'];
			if($idss==1){
				$imgss='user';
				$link=tep_href_link('account_edit.php');
			}elseif($idss==2){
				$imgss='tag';
				$link=tep_href_link('account_history.php');
			}elseif($idss==3){
				$imgss='picture';
				$link=tep_href_link('view_save_quote_img.php');
			}elseif($idss==4){
				$imgss='reload';
				$link=tep_href_link('account_notifications.php');
			}elseif($idss==5){
				$imgss='heart';
				$link=tep_href_link('wishlist.php');
			}elseif($idss==6){
				$imgss='change_password';
				$link=tep_href_link('account_password.php');
			}elseif($idss==7){
				$imgss='address_book';
				$link=tep_href_link('address_book.php');
			}elseif($idss==8){
				$imgss='newsletter';
				$link=tep_href_link('account_newsletters.php');
			}elseif($idss==9){
				$imgss='picture';
				$link=tep_href_link('view_save_layput_img.php');
			}elseif($idss==10){
				$imgss='checkout';
				$link=tep_href_link('checkout_shipping.php');
			}elseif($idss==11){
				$imgss='pencil';
				$link=tep_href_link('account_edit.php');
			}elseif($idss==12){
				$imgss='card';
				$link=tep_href_link('account_edit.php');
			}


$statusss=$row['status'];
$total_no=$cart->count_contents();
if($idss==10)
{
if($total_no<=0)
{
	$statusss=0;
}
else{
$statusss=$row['status'];
}
}
else{
$statusss=$row['status'];
}





		    echo '<div class="col-md-3 col-sm-6 col1 hoverable">';
		    if ($statusss==1) {
		    	echo '<a href="'.$link.'">';
			    	echo '<img src="img/myaccount/'.$imgss.'.png" alt="glass guard adm" title="'.$row['heading'].'">';
			    	echo '<h5>'.$row['heading'].'</h5>';
			    	echo '<p>'.$row['short_description'].'</p>';
				echo '</a>';
		    }else{
			    	echo '<img src="img/myaccount/'.$imgss.'.png" alt="ADM PORTABLE SNEEZEGUARDS" title="'.$row['heading'].'">';
			    	echo '<h5>'.$row['heading'].'</h5>';
			    	echo '<p>'.$row['short_description'].'</p>';			    	
		    }
		    echo '</div>';
		}
	  		?>
	  	</div>
	</div>
</div>


<?php
require(DIR_WS_INCLUDES . 'footer_new_design.php');

?>
