<?php
require("configure.php");



	// if (!$detect->isMobile())
	// {
		
	// }
	// else{
		
	// }
		
		
		
    // requires php5
    define('UPLOAD_DIR', '../img/screenshot/');
    $img = $_POST['img'];
    $img = str_replace('data:image/jpeg;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    $data = base64_decode($img);
    $file = UPLOAD_DIR . "scrn" . '.jpg';
    $success = file_put_contents($file, $data);
    $id = $_POST['id'];
    $bay = $_POST['bay'];
	$device_width = $_POST['device_width'];
	
	
	
	
	$total_quote_price = $_POST['total_quote_price'];
	$totla_length = $_POST['totla_length'];
	$customer_idd = $_POST['customer_idd'];
	
	
	

        $jpeg = imagecreatefromjpeg('../img/screenshot/scrn.jpg');
        $png = imagecreatefrompng('logo.png');
//$device_width
        // Merge the stamp onto our photo with an opacity of 50%
		
		if($id==129)
		{
		$width3rd=round($device_width/2);	
		}
		else{
		$width3rd=round($device_width/4);
		}
		
		$logoxpos=($width3rd+35);
		
		// if($device_width<1920)
		// {
		// imagecopymerge($jpeg, $png, 600, 40, 0, 0, 89, 51, 100);
		// }
		// if($device_width<1368)
		// {
		// imagecopymerge($jpeg, $png, 500, 40, 0, 0, 89, 51, 100);
		// }
		// else
		
		if($device_width<992)
		{
		imagecopymerge($jpeg, $png, 10, 40, 0, 0, 89, 51, 100);	
		}
		else{
		imagecopymerge($jpeg, $png, $logoxpos, 40, 0, 0, 89, 51, 100);	
		}
	
        

        imageJpeg($jpeg,'../img/screenshot/scrn.jpg');

  
	
	
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
		$username = DB_SERVER_USERNAME;
		$password = DB_SERVER_PASSWORD;
		$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
				
		$query_get_model="SELECT * FROM `categories_description` WHERE `categories_id` = '$id'";		
		$exe_get_model=mysqli_query($con,$query_get_model);	
		$get_model=mysqli_fetch_array($exe_get_model);
				
			$mod=$get_model['categories_name'];	
				
				
				
				
			
			$queryss="SELECT MAX(id) FROM `save_quote_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($jpeg,"img_quote/".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$newimgid."_".$customer_idd.".jpg";
		
		//datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
	
	
	$o_id=$osc;
	$im=$newimgid;
	$mo=$mod;
	$customer_id=$customer_idd;
	$img_name=$imgname;
	$dt=date("Y/m/d");
	$total_quote_price = $_POST['total_quote_price'];
	$totla_length = $_POST['totla_length'];
	echo$stmtquery="INSERT INTO save_quote_img (customer_id,img_id,category,date_time,img_name,total_quote_price,total_length) VALUES ('$customer_id','$im','$mo','$dt','$img_name','$total_quote_price','$totla_length')";
	
	
	$exess=mysqli_query($con,$stmtquery);
	if($exess==0){
		$done=false;
	}
}
	
		/*for customer savelayout end*/

	
	
	

    
    print $success ? $file : 'Unable to save the file.';
?>
<?php
  // if (array_key_exists('imageData',$_REQUEST)) {
  //   $imgData = base64_decode($_REQUEST['imageData']);

  //   // Path where the image is going to be saved
  //   $filePath = '/uploads/myImage.png';

  //   // Delete previously uploaded image
  //   if (file_exists($filePath)) { unlink($filePath); }

  //   // Write $imgData into the image file
  //   $file = fopen($filePath, 'w');
  //   fwrite($file, $imgData);
  //   fclose($file);
  // }
?>