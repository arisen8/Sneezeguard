<?php
 
$ip= $_POST['ip'];
//$ip='97.119.102.171';	
$cate_id= $_POST['cate_id'];
$bay= $_POST['bay'];
$customer_id= $_POST['customer_id'];

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
					
	$name_revit= $_POST['name_revit'];
$email_revit= $_POST['email_revit_secure'];
//online
$con=mysqli_connect("localhost","esneezeg_andy149","Qwdf#958","esneezeg_new_sneezeguard") or die(mysqli_connect_error());
//offline		
// $con=mysqli_connect("localhost","root","","esneezeg_new_sneezeguard") or die(mysqli_connect_error());

$get_cat_name="SELECT * FROM `categories_description` WHERE `categories_id` ='".$cate_id."'";
$exe_query=mysqli_query($con,$get_cat_name);
$result_cat_name=mysqli_fetch_array($exe_query);
$cate_name=$result_cat_name['categories_name'];
	
	
$query_insert="INSERT INTO `ip_address_revit_file_downloaded`(`ip_address`, `customer_id`, `customer_name`, `customer_email`, `category_id`, `category_name`, `bay`, `customer_city`, `customer_state`, `customer_country`) VALUES ('".$ip."','".$customer_id."','".$name_revit."','".$email_revit."','".$cate_id."','".$cate_name."','".$bay."','".$customer_city."','".$customer_state."','".$customer_country."')";
$exe_query=mysqli_query($con,$query_insert);
if($exe_query)	
{
echo'Successfully enetered';	
}
else{
	echo'error';
}

	
	
	
?>