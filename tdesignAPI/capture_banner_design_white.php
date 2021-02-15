<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

 //include $_SERVER['DOCUMENT_ROOT'].'/includes/configure.php'; 
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
$file = 'front_'.$osc.'_'.$im_id.'_white.png';	
$file2 = 'back_'.$osc.'_'.$im_id.'_white.png';	

}
else{
$file = 'banner_design_front_white.png';
$file2 = 'banner_design_back_white.png';

}

    //unlink('img/'.$file.'');




if(file_put_contents('img/'.$file.'', $data))
{
	
	
	
	
	
	//$pngimg = imagecreatefrompng('img/'.$file.'');
	/*
	$source = imagecreatefromjpeg('img/'.$file.'');



	$width=imagesx($source);
	$height=imagesy($source);;
	
	
	$newwidth=$width*6;
	$newheight=$height*6;
	
	
	//$imagess = file_get_contents('img/'.$file.'');
	
	$thumb = imagecreatetruecolor($newwidth, $newheight);

// Resize
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);



imagepng($thumb,'img/'.$file.'');
*/






	//file_put_contents('img/'.$file.'',$thumb);

	
	
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
	file_put_contents('img/'.$file2.'', $data);	
		
	$stmtquery="INSERT INTO screen_table_banner (osc_id,img_id,category,date_time,side) VALUES ('$o_id','$im','$mo','$dt','1')";
	
	$exess=mysqli_query($con,$stmtquery);
	if($exess==0){
		$done=false;
	}
	
	
$stmtquery2="INSERT INTO screen_table_banner (osc_id,img_id,category,date_time,side) VALUES ('$o_id','$im','$mo','$dt','2')";


	$exess2=mysqli_query($con,$stmtquery2);
	if($exess2==0){
		$done2=false;
	}	
	}
	else{
	$stmtquery="INSERT INTO screen_table_banner (osc_id,img_id,category,date_time,side) VALUES ('$o_id','$im','$mo','$dt','1')";
	
	$exess=mysqli_query($con,$stmtquery);
	if($exess==0){
		$done=false;
	}
	
	}
		
}
else{
	if($banner_sides_type_view==1)
	{
		file_put_contents('img/'.$file2.'', $data);
		
		
		
	/*	
$source2 = imagecreatefromjpeg('img/'.$file2.'');
	$width=imagesx($source2);
	$height=imagesy($source2);;
	
	
	$newwidth=$width*6;
	$newheight=$height*6;
	
$thumb2 = imagecreatetruecolor($newwidth, $newheight);

// Resize
imagecopyresized($thumb2, $source2, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);



imagepng($thumb2,'img/'.$file2.'');
*/







	}
}


}

else{
	echo'error';
}





?>