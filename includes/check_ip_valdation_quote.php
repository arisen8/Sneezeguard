<?php


$ip= $_POST['ip'];
//$ip='99.64.83.73';	

require("configure.php");
//online
$con=mysqli_connect(DB_SERVER,DB_SERVER_USERNAME,DB_SERVER_PASSWORD,DB_DATABASE) or die(mysqli_connect_error());
//offline		
//$con=mysqli_connect("localhost","root","","esneezeg_new_sneezeguard") or die(mysqli_connect_error());

 $no=0;
 $query_get_ip="SELECT * FROM  `ip_address_save_quote` WHERE  `ip_address` LIKE  '$ip' AND  email_quote!='' AND email_quote IS NOT NULL LIMIT 0 , 1";
 $exe_get_ip=mysqli_query($con,$query_get_ip);
while($res=mysqli_fetch_array($exe_get_ip))
{
$no++;	
}
if($no>0)
{
	echo'quote_ip_exist';
}
else{
	echo'quote_ip_not_exist';
}	

/*
$exe_query=mysqli_query($con,$query_insert);
if($exe_query)	
{
echo'Successfully enetered';	
}
else{
	echo'error';
}
*/
	
	
	
?>