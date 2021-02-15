<?php
require("../includes/configure.php");

$image = $_POST['imagess'];
base64_to_jpeg($image);
function base64_to_jpeg($base64_string) {
require 'class.IPInfoDB.php';
$ipinfodb = new IPInfoDB('631f582a00563da8eef6a61c76f057310b677c15ecd28fc58da47cf80c2fb73e');

$customer_id=0;
 $ip = $_SERVER['REMOTE_ADDR'];
//$ip='146.196.37.156';
//online

		$servername = DB_SERVER;
		$username = DB_SERVER_USERNAME;
		$password = DB_SERVER_PASSWORD;
		$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

// $con=mysqli_connect("localhost","esneezeg_andy149","Qwdf#958","esneezeg_new_sneezeguard") or die(mysqli_connect_error());
//offline       
//$con=mysqli_connect("localhost","root","","esneezeg_new_sneezeguard") or die(mysqli_connect_error());

$select = "SELECT max(id) FROM print_scrn";
$res=mysqli_query($con,$select);
$result=mysqli_fetch_array($res);
$max_id=$result['max(id)'];
$file_name = $max_id+1;
$output_file = '../img/print_screen_images/Print_scrn_'.$file_name.'.jpg';
$output_file_name = 'Print_scrn_'.$file_name.'.jpg';


$customer_id = $_POST['customer_id'];


$result = $ipinfodb->getCity($ip);
	$customer_city=$result['cityName'];
	$customer_state=$result['regionName'];
	$customer_country=$result['countryName'];




$sql = "INSERT INTO print_scrn (customer_id,name,IP_address,city,state,country) VALUES ('".$customer_id."','".$output_file_name."','".$ip."','".$customer_city."','".$customer_state."','".$customer_country."')";
$res = mysqli_query($con,$sql);

    // open the output file for writing
    $ifp = fopen( $output_file, 'wb' ); 

    // split the string on commas
    // $data[ 0 ] == "data:image/png;base64"
    // $data[ 1 ] == <actual base64 string>
    $data = explode( ',', $base64_string );

    // we could add validation here with ensuring count( $data ) > 1
    fwrite( $ifp, base64_decode( $data[ 1 ] ) );

    // clean up the file resource
    fclose( $ifp ); 

     return 'success'; 

}
?>