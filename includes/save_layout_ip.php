<?php
    // requires php5
    //require("configure.php");
    //require("application_top.php");
//require('functions/sessions.php');
//require('functions/general.php');
//include("sessions.php");
	//require('application_top.php');
 
 
 	
//online
$con=mysqli_connect("localhost","esneezeg_andy149","Qwdf#958","esneezeg_new_sneezeguard") or die(mysqli_connect_error());
//offline		
// $con=mysqli_connect("localhost","root","","esneezeg_new_sneezeguard") or die(mysqli_connect_error());


$ip= $_POST['ip'];
//$ip='99.64.83.73';	
$cate_id= $_POST['cate_id'];
$bay= $_POST['bay'];
$customer_id= $_POST['customer_id'];

/*
//for hide popup
$query_get_ip="SELECT * FROM  `ip_address_save_layout` WHERE  `ip_address` LIKE  '$ip' AND  email_layout!='' AND email_layout IS NOT NULL LIMIT 0 , 1";
 $exe_get_ip=mysqli_query($con,$query_get_ip);
 if($get_datat=mysqli_fetch_array($exe_get_ip))
 {
	$name_layout= $get_datat['name_layout'];
	$email_layout= $get_datat['email_layout'];
 }
 else{
	$name_layout= $_POST['name_layout'];
	$email_layout= $_POST['email_layout'];

 }
*/
//for show popup
	$name_layout= $_POST['name_layout'];
	$email_layout= $_POST['email_layout_secure'];


//$customer_city= $_POST['customer_city'];	
//$customer_state= $_POST['customer_state'];	
//$customer_country= $_POST['customer_country'];	


//$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
			//print_r($details);echo'<br />';
			//$customer_city=$details->city;
			////$customer_state=$details->region;
			//$customer_country=$details->country;

$ip_address=$_POST['ip'];
/*Get user ip address details with geoplugin.net*/
$geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip_address;
$addrDetailsArr = unserialize(file_get_contents($geopluginURL)); 
 $customer_city = $addrDetailsArr['geoplugin_city']; 
//echo "<br />";
 $customer_state = $addrDetailsArr['geoplugin_region']; 
//echo "<br />";
 $customer_country = $addrDetailsArr['geoplugin_countryName'];
					

$get_cat_name="SELECT * FROM `categories_description` WHERE `categories_id` ='".$cate_id."'";
$exe_query=mysqli_query($con,$get_cat_name);
$result_cat_name=mysqli_fetch_array($exe_query);
$cate_name=$result_cat_name['categories_name'];
	
	
$query_insert="INSERT INTO `ip_address_save_layout`(`ip_address`, `customer_id`, `name_layout`, `email_layout`, `category_id`, `category_name`, `bay`, `customer_city`, `customer_state`, `customer_country`) VALUES ('".$ip."','".$customer_id."','".$name_layout."','".$email_layout."','".$cate_id."','".$cate_name."','".$bay."','".$customer_city."','".$customer_state."','".$customer_country."')";
$exe_query=mysqli_query($con,$query_insert);
if($exe_query)	
{
echo'Successfully enetered';	
}
else{
	echo'error';
}

	
	
	
?>