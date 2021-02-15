<?php

 require("../includes/configure.php");
 $banner_sides_type_view=1;
$data=$_POST['img'];
$data = substr($data,strpos($data,",")+1);
$data = base64_decode($data);

$osc=$_POST['osc'];
$im_id=$_POST['im_id'];
$sv=$_POST['sv'];
$banner_sides_type_view=$_POST['banner_sides_type_view'];




if($sv=='save')
{
$file = 'back_'.$osc.'_'.$im_id.'.png';		

}
else{
$file = 'banner_design_back.png';

}
 unlink('img/'.$file.'');

if(file_put_contents('img/'.$file.'', $data))
{
	
	
	if($sv=='save')
	{
	$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;

$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

	
	$o_id=$osc;
	$im=$im_id;
	$mo='EP8';
	
	$dt=date("Y/m/d");
	if($banner_sides_type_view==1)
	{
	
	}
	else{
	$stmtquery="INSERT INTO screen_table_banner (osc_id,img_id,category,date_time,side) VALUES ('$o_id','$im','$mo','$dt','2')";
	
	$exess=mysqli_query($con,$stmtquery);
	if($exess==0){
		$done=false;
	}
	
	}
		
}



}

else{
	echo'error';
}

?>