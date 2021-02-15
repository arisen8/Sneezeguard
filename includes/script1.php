<?php
require("configure.php");


$mod=str_replace("\\","", $_POST["mod"]);
$bay=str_replace("\\","",$_POST["bay"]);
$ends=str_replace("\\","",$_POST["end"]);
$face1=str_replace("\\","",$_POST["face1"]);
$face2=str_replace("\\","",$_POST["face2"]);
$face3=str_replace("\\","",$_POST["face3"]);
$osc=str_replace("\\","",$_POST["osc"]);
$face4=str_replace("\\","",$_POST["face4"]);
$post=str_replace("\\","",$_POST["post"]);
$left=str_replace("\\","",$_POST["left"]);
$right=str_replace("\\","",$_POST["right"]);
$tot=str_replace("\\","",$_POST["tot"]);
$im_id=str_replace("\\","",$_POST["im_id"]);
$sv=str_replace("\\","",$_POST["sv"]);
$img=str_replace("\\","",$_POST["img"]);

$posttype=str_replace("\\","",$_POST["ptype"]);
$postdegree=str_replace("\\","",$_POST["pdegree"]);
$postposition=str_replace("\\","",$_POST["pposi"]);
$corneryes=str_replace("\\","",$_POST["corny"]);

$noofcornerpostval=str_replace("\\","",$_POST["nocorpost"]);


$arc_glass=str_replace("\\","",$_POST["arc_glass"]);
$arc_glass_value=str_replace("\\","",$_POST["arc_glass_value"]);
$arc_glass_type=str_replace("\\","",$_POST["arc_glass_type_value"]);
$endpanel_arc_glass=str_replace("\\","",$_POST["endpanel_arc_glass_value"]);



$glass_corner=str_replace("\\","",$_POST["glass_corner"]);
$lightbar=str_replace("\\","",$_POST["lightbar"]);
$postfinish=str_replace("\\","",$_POST["postfinish"]);
$adjtb=str_replace("\\","",$_POST["adjtb"]);
$frosted=str_replace("\\","",$_POST["frosted"]);
$texttt1=str_replace("\\","",$_POST["texttt1"]);
$texttt2=str_replace("\\","",$_POST["texttt2"]);


$gotoroundglass=str_replace("\\","",$_POST["gotoroundglass"]);
$round_type=str_replace("\\","",$_POST["round_type"]);
$round_face_a=str_replace("\\","",$_POST["round_face_a"]);
$round_rad_a=str_replace("\\","",$_POST["round_rad_a"]);
$round_face_b=str_replace("\\","",$_POST["round_face_b"]);
$round_rad_b=str_replace("\\","",$_POST["round_rad_b"]);
$round_face_c=str_replace("\\","",$_POST["round_face_c"]);
$round_rad_c=str_replace("\\","",$_POST["round_rad_c"]);
$round_face_d=str_replace("\\","",$_POST["round_face_d"]);
$round_rad_d=str_replace("\\","",$_POST["round_rad_d"]);


$endpaneltype=str_replace("\\","",$_POST["endpaneltype"]);


$customer_idd=str_replace("\\","",$_POST["customer_idd"]);


$glassheight=str_replace("\\","",$_POST["glassheight"]);









	//$posttype  $postdegree  $postposition  $corneryes

	//echo $im_id." ".$osc." ".$sv;
$face1x=0; $face1y=0;
$face2x=0; $face2y=0;
$face3x=0; $face3y=0;
$face4x=0; $face4y=0;
$postx=0; $posty=0;
$rightx=0; $righty=0;
$leftx=0; $lefty=0;

$archeight1x=2000; $archeight1y=2000;
$archeight2x=2000; $archeight2y=2000;
$archeight3x=2000; $archeight3y=2000;
$archeight4x=2000; $archeight4y=2000;


$round_rad_ax=2000; $round_rad_ay=2000;
$round_rad_bx=2000; $round_rad_by=2000;
$round_rad_cx=2000; $round_rad_cy=2000;
$round_rad_dx=2000; $round_rad_dy=2000;


$totx=0; $toty=0;
if($mod=="EP5"){
	if($ends==1){
			//$img="BOTHENDS.jpg";
	}else if($ends==2){
			//$img="RIGHTEND.jpg";
		$left="";
	}else if($ends==3){
			//$img="LEFTEND.jpg";
		$right="";
	}else if($ends==4){
			//$img="NOENDS.jpg";
		$right="";
		$left="";
	}


	$archeight=''.$arc_glass_value.'"';
	if($bay=="1BAY"){
		if($face1=="No Glass"){
			$face1="";
			$left="";
			$right="";
			$tot="";
			$archeight="";
		}
		$path="images/"."EP-51BAY/".$img.".jpg";

		if($arc_glass=='yes')
		{

			if($arc_glass_type=='RD')
			{
				$arc_glass_type='RA';	
			}
			
			if($arc_glass_type=='FA')
			{
				if($arc_glass_value=='2')	
				{
					$leftx=140;$lefty=77;
					$rightx=385;$righty=53;
					$archeight1x=385; $archeight1y=118;
					
				}
				elseif($arc_glass_value=='6')	
				{
					$leftx=130;$lefty=40;
					$rightx=375;$righty=20;
					$archeight1x=385; $archeight1y=100;
					
				}
				else{

					$leftx=140;$lefty=75;
					$rightx=385;$righty=50;
					$archeight1x=385; $archeight1y=113;
				}
			}	
			elseif($arc_glass_type=='CA')
			{
				if($arc_glass_value=='2')	
				{
					$leftx=130;$lefty=90;
					$rightx=370;$righty=53;
					$archeight1x=370; $archeight1y=127;
					
				}
				elseif($arc_glass_value=='6')	
				{
					$leftx=130;$lefty=50;
					$rightx=365;$righty=25;
					$archeight1x=365; $archeight1y=100;
					
				}
				else{

					$leftx=130;$lefty=85;
					$rightx=365;$righty=50;
					$archeight1x=370; $archeight1y=120;

				}
			}
			elseif($arc_glass_type=='RA')
			{
				if($arc_glass_value=='2')	
				{


					$leftx=140;$lefty=80;
					$rightx=390;$righty=55;
					$archeight1x=350; $archeight1y=130;
					
				}
				elseif($arc_glass_value=='6')	
				{
					$leftx=140;$lefty=45;
					$rightx=390;$righty=25;
					$archeight1x=369; $archeight1y=110;
					
				}
				else{

					$leftx=130;$lefty=50;
					$rightx=380;$righty=30;
					$archeight1x=363; $archeight1y=125;

				}
			}
			
			
			
			
			
			$postx=500; $posty=190;
			
			$face1x=375;$face1y=370;
			
			$totx=420;$toty=390;
			
			
			
			
			
			
		}
		else{
			$archeight="";
			
			$face1x=405;$face1y=350;
			$postx=500; $posty=170;
			$rightx=390;$righty=40;
			$leftx=180;$lefty=120;
			$totx=455;$toty=370;	
		}


	}else if($bay=="2BAY"){
		if($face1=="No Glass"||$face2=="No Glass"){
			$face1="";
			$face2="";
			$left="";
			$right="";
			$tot="";
			$archeight="";
		}

		
		
		


		$path="images/"."EP-52BAY/".$img.".jpg";

		if($arc_glass=='yes')
		{

			if($arc_glass_type=='RD')
			{
				$arc_glass_type=='RA';	
			}
			
			if($arc_glass_type=='FA')
			{
				if($arc_glass_value=='2')	
				{
					$leftx=65; $lefty=110;
					$rightx=465; $righty=65;

					$archeight1x=289; $archeight1y=150;
				}
				elseif($arc_glass_value=='6')	
				{
					$rightx=470; $righty=43;
					$leftx=55; $lefty=80;
					$archeight1x=280; $archeight1y=130;
				}
				else{
					$rightx=470; $righty=67;
					$leftx=65; $lefty=110;
					$archeight1x=280; $archeight1y=140;
				}
				$face1x=290;$face1y=375;
			$face2x=475;$face2y=305;
			$postx=560; $posty=185;
			$totx=440;$toty=360;
			}	
			elseif($arc_glass_type=='CA')
			{
				if($arc_glass_value=='2')	
				{
					$rightx=485; $righty=40;
					$leftx=65; $lefty=100;
					$archeight1x=295; $archeight1y=140;
				}
				elseif($arc_glass_value=='6')	
				{

					$leftx=65; $lefty=80;
					$rightx=485; $righty=25;
					$archeight1x=300; $archeight1y=120;
				}
				else{

					$leftx=70; $lefty=105;
					$rightx=475; $righty=40;
					$archeight1x=290; $archeight1y=130;
				}
				$face1x=295;$face1y=365;
			$face2x=490;$face2y=287;
			$postx=575; $posty=165;
			$totx=440;$toty=360;
			}

			elseif($arc_glass_type=='RD')
			{
				if($arc_glass_value=='2')	
				{
					$leftx=70; $lefty=115;
					$rightx=475; $righty=53;
					$archeight1x=275; $archeight1y=160;
				}
				elseif($arc_glass_value=='6')	
				{
					$leftx=65; $lefty=85;
					$rightx=475; $righty=30;
					$archeight1x=270; $archeight1y=140;
				}
				else{
					$rightx=475; $righty=35;
					$leftx=70; $lefty=90;
					$archeight1x=280; $archeight1y=150;
				}
				$face1x=290;$face1y=375;
			$face2x=485;$face2y=300;
			$postx=570; $posty=175;
			$totx=440;$toty=360;
			}



			
			
		}
		else{
			$archeight="";
			$face1x=285;$face1y=355;
			$face2x=470;$face2y=273;
			$postx=560; $posty=150;
			$rightx=465; $righty=35;
			$leftx=85; $lefty=130;
			$totx=430;$toty=330;	
		}

	}else if($bay=="3BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
			$left="";
			$right="";
			$tot="";
			$archeight="";
		}
		$path="images/"."EP-53BAY/".$img.".jpg";
		if($arc_glass=='yes')
		{


			if($arc_glass_type=='RD')
			{
				$arc_glass_type=='RA';
			}
			
			if($arc_glass_type=='FA')
			{
				if($arc_glass_value=='2')	
				{
					$leftx=45; $lefty=145;
					$rightx=515; $righty=75;

					$archeight1x=240; $archeight1y=175;

				}
				elseif($arc_glass_value=='6')	
				{


					$leftx=45; $lefty=115;
					$rightx=520; $righty=57;
					$archeight1x=235; $archeight1y=155;
				}
				else{

					$leftx=45; $lefty=140;
					$rightx=515; $righty=75;
					$archeight1x=240; $archeight1y=165;
				}
			}	
			elseif($arc_glass_type=='CA')
			{
				if($arc_glass_value=='2')	
				{

					$leftx=45; $lefty=145;

					$rightx=520; $righty=75;
					$archeight1x=245; $archeight1y=175;

				}
				elseif($arc_glass_value=='6')	
				{

					$leftx=45; $lefty=125;

					$rightx=520; $righty=60;
					$archeight1x=240; $archeight1y=160;
				}
				else{


					$leftx=45; $lefty=143;

					$rightx=520; $righty=75;
					$archeight1x=245; $archeight1y=165;
				}
			}

			elseif($arc_glass_type=='RD')
			{
				if($arc_glass_value=='2')	
				{

					$leftx=50; $lefty=160;

					$rightx=520; $righty=67;
					$archeight1x=227; $archeight1y=190;

				}
				elseif($arc_glass_value=='6')	
				{
					$leftx=50; $lefty=135;
					$rightx=520; $righty=50;

					$archeight1x=230; $archeight1y=175;
				}
				else{

					$leftx=50; $lefty=140;
					$rightx=520; $righty=57;

					$archeight1x=230; $archeight1y=185;
				}
			}	



			$face1x=235;$face1y=365;
			$face2x=400;$face2y=305;
			$face3x=530;$face3y=255;
			$postx=590; $posty=160;
			$totx=430;$toty=325;
		}
		else{
			$archeight="";
			$face1x=260;$face1y=370;
			$face2x=410;$face2y=280;
			$face3x=530;$face3y=210;
			$postx=590; $posty=100;
			$rightx=520; $righty=10;
			$leftx=65; $lefty=200;
			$totx=450;$toty=300;	
		}	

	}else if($bay=="4BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"||$face4=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
			$face4="";
			$left="";
			$right="";
			$tot="";
			$archeight="";
		}
		$path="images/"."EP-54BAY/".$img.".jpg";
		if($arc_glass=='yes')
		{


			if($arc_glass_type=='RD')
			{
				$arc_glass_type=='RA';	
			}
			
			if($arc_glass_type=='FA')
			{
				if($arc_glass_value=='2')	
				{

					$leftx=35; $lefty=175;		

					$rightx=545; $righty=105;
					$archeight1x=185; $archeight1y=200;	
				}
				elseif($arc_glass_value=='6')	
				{

					$rightx=545; $righty=90;
					$leftx=30; $lefty=155;	
					$archeight1x=175; $archeight1y=190;	
				}
				else{

					$rightx=545; $righty=105;
					$leftx=35; $lefty=175;	
					$archeight1x=185; $archeight1y=195;
				}
				
			$face1x=180; $face1y=355;
			$face2x=335; $face2y=310;
			$face3x=455; $face3y=275;
			$face4x=552; $face4y=245;
			$postx=600; $posty=180;
			$totx=450;$toty=300;
			}	
			elseif($arc_glass_type=='CA')
			{
				if($arc_glass_value=='2')	
				{
					$leftx=30; $lefty=180;	
					$rightx=545; $righty=105;

					$archeight1x=185; $archeight1y=203;	
				}
				elseif($arc_glass_value=='6')	
				{

					$leftx=28; $lefty=160;	
					$rightx=545; $righty=97;

					$archeight1x=175; $archeight1y=190;
				}
				else{

					$leftx=28; $lefty=176;	
					$rightx=545; $righty=105;

					$archeight1x=185; $archeight1y=200;
				}
				
			$face1x=180; $face1y=350;
			$face2x=335; $face2y=310;
			$face3x=455; $face3y=275;
			$face4x=552; $face4y=245;
			$postx=600; $posty=180;
			$totx=450;$toty=300;
			}

			elseif($arc_glass_type=='RD')
			{
				if($arc_glass_value=='2')	
				{
					$leftx=45; $lefty=200;	
					$rightx=527; $righty=130;

					$archeight1x=190; $archeight1y=227;	
				}
				elseif($arc_glass_value=='6')	
				{

					$rightx=520; $righty=115;
					$leftx=45; $lefty=180;	
					$archeight1x=178; $archeight1y=220;	
				}
				else{

					$rightx=525; $righty=120;
					$leftx=45; $lefty=185;	
					$archeight1x=180; $archeight1y=225;	
				}
				
			$face1x=190; $face1y=375;
			$face2x=335; $face2y=330;
			$face3x=445; $face3y=295;
			$face4x=540; $face4y=265;
			$postx=585; $posty=200;
			$totx=450;$toty=320;
			}	







			
			
			
		}
		else{
			$archeight="";
			$face1x=220; $face1y=370;
			$face2x=360; $face2y=290;
			$face3x=475; $face3y=225;
			$face4x=560; $face4y=170;
			$postx=597; $posty=85;
			$rightx=535; $righty=15;
			$leftx=40; $lefty=180;
			$totx=450;$toty=270;	
		}


	}
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;


	
	/*Resize 1920X1440 to 640X480 Start*/
	$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

	$my_img =imagecreatefromjpeg("../".$path);
    list($origWidth, $origHeight) = getimagesize("../".$path);

   
 
	
	$w =640;
	$h =480;
   // $img=$target;
    $extn = strtolower($extn);
 
        //$img = imagecreatefromjpeg($targett);
		
	
  
    $a = imagecreatetruecolor($w, $h);
    
    imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);
	
    imagejpeg($a,'img2/'.$newcpy,300);

	
	
	
	
	
	
	
	
	$resize="img2/".$osc."_".$im_id.".jpg";
	
	
		/*Resize 1920X1440 to 640X480 END*/
	
	
	
	
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;

		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

		//For Online.....
		//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
		//echo $face1;
	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $face2x, $face2y, $face2, $text_colour );
	imagestring( $my_img, 5, $face3x, $face3y, $face3, $text_colour);
	imagestring( $my_img, 5, $face4x, $face4y, $face4, $text_colour);
	imagestring( $my_img, 5, $postx, $posty, $post, $text_colour);
	imagestring( $my_img, 5, $leftx, $lefty, $left, $text_colour);
	imagestring( $my_img, 5, $rightx, $righty, $right, $text_colour);

	imagestring( $my_img, 5, $archeight1x, $archeight1y, $archeight, $text_colour);
		//imagestring( $my_img, 5, $archeight2x, $archeight2y, $archeight, $text_colour);
		//imagestring( $my_img, 5, $archeight3x, $archeight3y, $archeight, $text_colour);
		//imagestring( $my_img, 5, $archeight4x, $archeight4y, $archeight, $text_colour);

	imagestring( $my_img, 5, $totx, $toty,$tot,$text_colour);


//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// $marge_right = 545;
		// $marge_bottom = 425;
		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);


//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));

//hereessss
	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");		
		
		
		
		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/

		
		
		
	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
		//imagejpeg($my_img,$pt."scrn1.jpg");

	imagedestroy( $my_img );
}
else if($mod=="Ring-EP5"){
	if($ends==1){
			//$img="BOTHENDS.jpg";
	}else if($ends==2){
			//$img="RIGHTEND.jpg";
		$left="";
	}else if($ends==3){
			//$img="LEFTEND.jpg";
		$right="";
	}else if($ends==4){
			//$img="NOENDS.jpg";
		$right="";
		$left="";
	}
	$archeight=''.$arc_glass_value.'"';
	if($bay=="1BAY"){
		if($face1=="No Glass"){
			$face1="";
			$left="";
			$right="";
			$tot="";
		}
		$path="images/"."Ring-EP-51BAY/".$img.".jpg";


		if($arc_glass=='yes')
		{

			if($arc_glass_type=='RD')
			{
				$arc_glass_type='RA';	
			}
			
			if($arc_glass_type=='FA')
			{
				if($arc_glass_value=='2')	
				{
					$leftx=140;$lefty=77;
					$rightx=385;$righty=53;
					$archeight1x=385; $archeight1y=118;
					
				}
				elseif($arc_glass_value=='6')	
				{
					$leftx=130;$lefty=40;
					$rightx=375;$righty=20;
					$archeight1x=385; $archeight1y=100;
					
				}
				else{

					$leftx=140;$lefty=75;
					$rightx=385;$righty=50;
					$archeight1x=385; $archeight1y=113;
				}
			}	
			elseif($arc_glass_type=='CA')
			{
				if($arc_glass_value=='2')	
				{
					$leftx=130;$lefty=90;
					$rightx=370;$righty=53;
					$archeight1x=370; $archeight1y=127;
					
				}
				elseif($arc_glass_value=='6')	
				{
					$leftx=130;$lefty=50;
					$rightx=365;$righty=25;
					$archeight1x=365; $archeight1y=100;
					
				}
				else{

					$leftx=130;$lefty=85;
					$rightx=365;$righty=50;
					$archeight1x=370; $archeight1y=120;

				}
			}
			elseif($arc_glass_type=='RA')
			{
				if($arc_glass_value=='2')	
				{


					$leftx=140;$lefty=80;
					$rightx=390;$righty=55;
					$archeight1x=350; $archeight1y=130;
					
				}
				elseif($arc_glass_value=='6')	
				{
					$leftx=140;$lefty=45;
					$rightx=390;$righty=25;
					$archeight1x=369; $archeight1y=110;
					
				}
				else{

					$leftx=130;$lefty=50;
					$rightx=380;$righty=30;
					$archeight1x=363; $archeight1y=125;

				}
			}
			
			
			
			
			
			$postx=500; $posty=190;
			
			$face1x=375;$face1y=370;
			
			$totx=420;$toty=390;
			
			
			
			
			
			
		}
		else{
			$archeight="";
			
			$face1x=405;$face1y=350;
			$postx=500; $posty=170;
			$rightx=390;$righty=40;
			$leftx=180;$lefty=120;
			$totx=455;$toty=370;	
		}


	}else if($bay=="2BAY"){
		if($face1=="No Glass"||$face2=="No Glass"){
			$face1="";
			$face2="";
			$left="";
			$right="";
			$tot="";
		}
		$path="images/"."Ring-EP-52BAY/".$img.".jpg";

		if($arc_glass=='yes')
		{

			if($arc_glass_type=='RD')
			{
				$arc_glass_type=='RA';	
			}
			
			if($arc_glass_type=='FA')
			{
				if($arc_glass_value=='2')	
				{
					$leftx=65; $lefty=110;
					$rightx=465; $righty=65;

					$archeight1x=289; $archeight1y=150;
				}
				elseif($arc_glass_value=='6')	
				{
					$rightx=470; $righty=43;
					$leftx=55; $lefty=80;
					$archeight1x=280; $archeight1y=130;
				}
				else{
					$rightx=470; $righty=67;
					$leftx=65; $lefty=110;
					$archeight1x=280; $archeight1y=140;
				}
				$face1x=290;$face1y=375;
			$face2x=475;$face2y=305;
			$postx=560; $posty=185;
			$totx=440;$toty=360;
			}	
			elseif($arc_glass_type=='CA')
			{
				if($arc_glass_value=='2')	
				{
					$rightx=485; $righty=40;
					$leftx=65; $lefty=100;
					$archeight1x=295; $archeight1y=140;
				}
				elseif($arc_glass_value=='6')	
				{

					$leftx=65; $lefty=80;
					$rightx=485; $righty=25;
					$archeight1x=300; $archeight1y=120;
				}
				else{

					$leftx=70; $lefty=105;
					$rightx=475; $righty=40;
					$archeight1x=290; $archeight1y=130;
				}
				$face1x=295;$face1y=365;
			$face2x=490;$face2y=287;
			$postx=575; $posty=165;
			$totx=440;$toty=360;
			}

			elseif($arc_glass_type=='RD')
			{
				if($arc_glass_value=='2')	
				{
					$leftx=70; $lefty=115;
					$rightx=475; $righty=53;
					$archeight1x=275; $archeight1y=160;
				}
				elseif($arc_glass_value=='6')	
				{
					$leftx=65; $lefty=85;
					$rightx=475; $righty=30;
					$archeight1x=270; $archeight1y=140;
				}
				else{
					$rightx=475; $righty=35;
					$leftx=70; $lefty=90;
					$archeight1x=280; $archeight1y=150;
				}
				$face1x=290;$face1y=375;
			$face2x=485;$face2y=300;
			$postx=570; $posty=175;
			$totx=440;$toty=360;
			}



			
			
		}
		else{
			$archeight="";
			$face1x=285;$face1y=355;
			$face2x=470;$face2y=273;
			$postx=560; $posty=150;
			$rightx=465; $righty=35;
			$leftx=85; $lefty=130;
			$totx=430;$toty=330;	
		}

	}else if($bay=="3BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
			$left="";
			$right="";
			$tot="";
		}
		$path="images/"."Ring-EP-53BAY/".$img.".jpg";

		if($arc_glass=='yes')
		{


			if($arc_glass_type=='RD')
			{
				$arc_glass_type=='RA';
			}
			
			if($arc_glass_type=='FA')
			{
				if($arc_glass_value=='2')	
				{
					$leftx=45; $lefty=145;
					$rightx=515; $righty=75;

					$archeight1x=240; $archeight1y=175;

				}
				elseif($arc_glass_value=='6')	
				{


					$leftx=45; $lefty=115;
					$rightx=520; $righty=57;
					$archeight1x=235; $archeight1y=155;
				}
				else{

					$leftx=45; $lefty=140;
					$rightx=515; $righty=75;
					$archeight1x=240; $archeight1y=165;
				}
			}	
			elseif($arc_glass_type=='CA')
			{
				if($arc_glass_value=='2')	
				{

					$leftx=45; $lefty=145;

					$rightx=520; $righty=75;
					$archeight1x=245; $archeight1y=175;

				}
				elseif($arc_glass_value=='6')	
				{

					$leftx=45; $lefty=125;

					$rightx=520; $righty=60;
					$archeight1x=240; $archeight1y=160;
				}
				else{


					$leftx=45; $lefty=143;

					$rightx=520; $righty=75;
					$archeight1x=245; $archeight1y=165;
				}
			}

			elseif($arc_glass_type=='RD')
			{
				if($arc_glass_value=='2')	
				{

					$leftx=50; $lefty=160;

					$rightx=520; $righty=67;
					$archeight1x=227; $archeight1y=190;

				}
				elseif($arc_glass_value=='6')	
				{
					$leftx=50; $lefty=135;
					$rightx=520; $righty=50;

					$archeight1x=230; $archeight1y=175;
				}
				else{

					$leftx=50; $lefty=140;
					$rightx=520; $righty=57;

					$archeight1x=230; $archeight1y=185;
				}
			}	



			$face1x=235;$face1y=365;
			$face2x=400;$face2y=305;
			$face3x=530;$face3y=255;
			$postx=590; $posty=160;
			$totx=430;$toty=325;
		}
		else{
			$archeight="";
			$face1x=260;$face1y=370;
			$face2x=410;$face2y=280;
			$face3x=530;$face3y=210;
			$postx=590; $posty=100;
			$rightx=520; $righty=10;
			$leftx=65; $lefty=200;
			$totx=450;$toty=300;	
		}

	}else if($bay=="4BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"||$face4=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
			$face4="";
			$left="";
			$right="";
			$tot="";
		}
		$path="images/"."Ring-EP-54BAY/".$img.".jpg";

		if($arc_glass=='yes')
		{


			if($arc_glass_type=='RD')
			{
				$arc_glass_type=='RA';	
			}
			
			if($arc_glass_type=='FA')
			{
				if($arc_glass_value=='2')	
				{

					$leftx=35; $lefty=175;		

					$rightx=545; $righty=105;
					$archeight1x=185; $archeight1y=200;	
				}
				elseif($arc_glass_value=='6')	
				{

					$rightx=545; $righty=90;
					$leftx=30; $lefty=155;	
					$archeight1x=175; $archeight1y=190;	
				}
				else{

					$rightx=545; $righty=105;
					$leftx=35; $lefty=175;	
					$archeight1x=185; $archeight1y=195;
				}
				
			$face1x=180; $face1y=355;
			$face2x=335; $face2y=310;
			$face3x=455; $face3y=275;
			$face4x=552; $face4y=245;
			$postx=600; $posty=180;
			$totx=450;$toty=300;
			}	
			elseif($arc_glass_type=='CA')
			{
				if($arc_glass_value=='2')	
				{
					$leftx=30; $lefty=180;	
					$rightx=545; $righty=105;

					$archeight1x=185; $archeight1y=203;	
				}
				elseif($arc_glass_value=='6')	
				{

					$leftx=28; $lefty=160;	
					$rightx=545; $righty=97;

					$archeight1x=175; $archeight1y=190;
				}
				else{

					$leftx=28; $lefty=176;	
					$rightx=545; $righty=105;

					$archeight1x=185; $archeight1y=200;
				}
				
			$face1x=180; $face1y=350;
			$face2x=335; $face2y=310;
			$face3x=455; $face3y=275;
			$face4x=552; $face4y=245;
			$postx=600; $posty=180;
			$totx=450;$toty=300;
			}

			elseif($arc_glass_type=='RD')
			{
				if($arc_glass_value=='2')	
				{
					$leftx=45; $lefty=200;	
					$rightx=527; $righty=130;

					$archeight1x=190; $archeight1y=227;	
				}
				elseif($arc_glass_value=='6')	
				{

					$rightx=520; $righty=115;
					$leftx=45; $lefty=180;	
					$archeight1x=178; $archeight1y=220;	
				}
				else{

					$rightx=525; $righty=120;
					$leftx=45; $lefty=185;	
					$archeight1x=180; $archeight1y=225;	
				}
				
			$face1x=190; $face1y=375;
			$face2x=335; $face2y=330;
			$face3x=445; $face3y=295;
			$face4x=540; $face4y=265;
			$postx=585; $posty=200;
			$totx=450;$toty=320;
			}	







			
			
			
		}
		else{
			$archeight="";
			$face1x=220; $face1y=370;
			$face2x=360; $face2y=290;
			$face3x=475; $face3y=225;
			$face4x=560; $face4y=170;
			$postx=597; $posty=85;
			$rightx=535; $righty=15;
			$leftx=40; $lefty=180;
			$totx=450;$toty=270;	
		}


	}
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;

	
	/*Resize 1920X1440 to 640X480 Start*/
	$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

	$my_img =imagecreatefromjpeg("../".$path);
    list($origWidth, $origHeight) = getimagesize("../".$path);

   
 
	
	$w =640;
	$h =480;
   // $img=$target;
    $extn = strtolower($extn);
 
        //$img = imagecreatefromjpeg($targett);
		
	
  
    $a = imagecreatetruecolor($w, $h);
    
    imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);
	
    imagejpeg($a,'img2/'.$newcpy,300);

	
	
	
	
	
	
	
	
	$resize="img2/".$osc."_".$im_id.".jpg";
	
	
		/*Resize 1920X1440 to 640X480 END*/
	
	
	
	
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;

		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

		//For Online.....
		//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
		//$font = imageloadfont('04b.gdf');
		//echo $face1;




	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $face2x, $face2y, $face2, $text_colour );
	imagestring( $my_img, 5, $face3x, $face3y, $face3, $text_colour);
	imagestring( $my_img, 5, $face4x, $face4y, $face4, $text_colour);
	imagestring( $my_img, 5, $postx, $posty, $post, $text_colour);
	imagestring( $my_img, 5, $leftx, $lefty, $left, $text_colour);
	imagestring( $my_img, 5, $rightx, $righty, $right, $text_colour);

	imagestring( $my_img, 5, $archeight1x, $archeight1y, $archeight, $text_colour);
		//imagestring( $my_img, 5, $archeight2x, $archeight2y, $archeight, $text_colour);
		//imagestring( $my_img, 5, $archeight3x, $archeight3y, $archeight, $text_colour);
		//imagestring( $my_img, 5, $archeight4x, $archeight4y, $archeight, $text_colour);


	imagestring( $my_img, 5, $totx, $toty,$tot,$text_colour);

//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// $marge_right = 545;
		// $marge_bottom = 425;
		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);



//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));


	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");		
		
		
		
		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/

		
	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
		//imagejpeg($my_img,$pt."scrn1.jpg");

	imagedestroy( $my_img );
}

else if($mod=="EP15"){
	if($ends==1){
			//$img="BOTHENDS.jpg";
	}else if($ends==2){
			//$img="RIGHTEND.jpg";
		$left="";
	}else if($ends==3){
			//$img="LEFTEND.jpg";
		$right="";
	}else if($ends==4){
			//$img="NOENDS.jpg";
		$right="";
		$left="";
	}

	if($bay=="1BAY"){
		if($face1=="No Glass"){
			$face1="";
			$left="";
			$right="";
			$tot="";
		}
		$path="images/"."EP-151BAY/".$img.".jpg";
		$face1x=340;$face1y=355;
		$postx=560; $posty=210;
		$rightx=480;$righty=230;
		$leftx=90;$lefty=320;
		$totx=370;$toty=387;
	}else if($bay=="2BAY"){
		if($face1=="No Glass"||$face2=="No Glass"){
			$face1="";
			$face2="";
			$left="";
			$right="";
			$tot="";
		}
		$path="images/"."EP-152BAY/".$img.".jpg";
			//$posttype  $postdegree  $postposition  $corneryes




		if($corneryes=="1")
		{
			if($posttype=="Outer")
			{
				if($postdegree=="90 Degree")
				{
					if($postposition=="1st Center Post from Left")
					{

						$postx=35;$posty=230; 
						$face1x=177;$face1y=358;
						$face2x=490;$face2y=338;
						$leftx=80;$lefty=175;
						$rightx=540;$righty=115;
						$toty=1465;$totx=1135;	
					}
				}
				if($postdegree=="135 Degree")
				{
					if($postposition=="1st Center Post from Left")
					{

						$postx=75;$posty=280; 
						$face1x=210;$face1y=352;
						$face2x=450;$face2y=348;
						$leftx=25;$lefty=255; 
						$rightx=580;$righty=225; 
						$totx=1135;$toty=1465;	
					}
				}

				
			}				

		}
		else{
			$face1x=210;$face1y=355;
			$face2x=430;$face2y=300;
			$postx=590; $posty=190;
			$rightx=540; $righty=215;
			$leftx=10; $lefty=335;
			$totx=355;$toty=355;
		}




	}else if($bay=="3BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
			$left="";
			$right="";
			$tot="";
		}
		$path="images/"."EP-153BAY/".$img.".jpg";

		if($corneryes=="1")
		{
			if($posttype=="Outer")
			{
				if($postdegree=="90 Degree")
				{
					if($postposition=="1st Center Post from Left")
					{
						$postx=20;  $posty=280;
						$face1x=132; $face1y=377;
						$face2x=395; $face2y=367;
						$face3x=510; $face3y=280;
						$leftx=70; $lefty=230;
						$rightx=560; $righty=113; 
						$totx=1135;$toty=1465;
					}
					if($postposition=="2nd Center Post from Left")
					{
						$postx=30;  $posty=140;
						$face1x=117; $face1y=280;
						$face2x=260; $face2y=346;
						$face3x=520; $face3y=350;
						$leftx=55; $lefty=160;
						$rightx=560; $righty=207; 
						$totx=1135;$toty=1465;
					}
				}
				if($postdegree=="135 Degree")
				{
					if($postposition=="1st Center Post from Left")
					{
						$postx=25;  $posty=265;
						$face1x=122; $face1y=310;
						$face2x=305; $face2y=330;
						$face3x=450; $face3y=315;
						$leftx=45; $lefty=235;
						$rightx=585; $righty=245; 
						$totx=1135;$toty=1465;
					}
					if($postposition=="2nd Center Post from Left")
					{
						$postx=25;  $posty=250;
						$face1x=120; $face1y=300;
						$face2x=255; $face2y=335;
						$face3x=445; $face3y=355;
						$leftx=45; $lefty=220;
						$rightx=585; $righty=280; 
						$totx=1135;$toty=1465;
					}
				}
			}
		}
		else{
			$face1x=180;$face1y=340;
			$face2x=345;$face2y=300;
			$face3x=490;$face3y=265;
			$postx=600; $posty=190;
			$rightx=555; $righty=210;
			$leftx=15; $lefty=340;
			$totx=390;$toty=310;
		}
	}else if($bay=="4BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"||$face4=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
			$face4="";
			$left="";
			$right="";
			$tot="";
		}
		$path="images/"."EP-154BAY/".$img.".jpg";
		if($corneryes=="1")
		{
			if($posttype=="Outer")
			{
				if($postdegree=="90 Degree")
				{
					if($postposition=="1st Center Post from Left")
					{
						$postx=12;  $posty=285;
						$face1x=110; $face1y=375;
						$face2x=330; $face2y=372;
						$face3x=460; $face3y=290;
						$face4x=555; $face4y=220;
						$leftx=65; $lefty=265;
						$rightx=575; $righty=105; 
						$totx=1135;$toty=1465;	
					}
					if($postposition=="2nd Center Post from Left")
					{
						$postx=5;  $posty=220;
						$face1x=110; $face1y=325;
						$face2x=265; $face2y=370;
						$face3x=480; $face3y=350;
						$face4x=575; $face4y=275;
						$leftx=40; $lefty=220;
						$rightx=580; $righty=150; 
						$totx=1135;$toty=1465;		
					}
					if($postposition=="3rd Center Post from Left")
					{
						$postx=15;  $posty=133;
						$face1x=100; $face1y=245;
						$face2x=205; $face2y=300;
						$face3x=330; $face3y=360;
						$face4x=560; $face4y=360;
						$leftx=40; $lefty=140;
						$rightx=585; $righty=235; 
						$totx=1135;$toty=1465;	
					}

				}
				if($postdegree=="135 Degree")
				{
					if($postposition=="1st Center Post from Left")
					{
						$postx=15;  $posty=290;
						$face1x=105; $face1y=322;
						$face2x=250; $face2y=330;
						$face3x=370; $face3y=315;
						$face4x=490; $face4y=295;
						$rightx=610; $righty=238; 
						$leftx=25; $lefty=265;
						$totx=1135;$toty=1465;	
					}
					if($postposition=="2nd Center Post from Left")
					{
						$postx=15;  $posty=247;
						$face1x=100; $face1y=285;
						$face2x=210; $face2y=315;
						$face3x=365; $face3y=330;
						$face4x=480; $face4y=318;
						$leftx=40; $lefty=225;
						$rightx=600; $righty=260; 
						$totx=1135;$toty=1465;		
					}
					if($postposition=="3rd Center Post from Left")
					{
						$postx=10;  $posty=237;
						$face1x=100; $face1y=275;
						$face2x=215; $face2y=295;
						$face3x=335; $face3y=320;
						$face4x=500; $face4y=330;
						$leftx=20; $lefty=212;
						$rightx=600; $righty=260; 
						$totx=1135;$toty=1465;	
					}

				}
			}
		}
		else{
			$face1x=190; $face1y=330;
			$face2x=345; $face2y=285;
			$face3x=450; $face3y=250;
			$face4x=530; $face4y=225;
			$postx=605; $posty=170;
			$rightx=570; $righty=187;
			$leftx=20; $lefty=340;
			$totx=410;$toty=285;
		}
	}
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;


	/*Resize 1920X1440 to 640X480 Start*/
	$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

	$my_img =imagecreatefromjpeg("../".$path);
    list($origWidth, $origHeight) = getimagesize("../".$path);

   
 
	
	$w =640;
	$h =480;
   // $img=$target;
    $extn = strtolower($extn);
 
        //$img = imagecreatefromjpeg($targett);
		
	
  
    $a = imagecreatetruecolor($w, $h);
    
    imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);
	
    imagejpeg($a,'img2/'.$newcpy,300);

	
	
	
	
	
	
	
	
	$resize="img2/".$osc."_".$im_id.".jpg";
	
	
		/*Resize 1920X1440 to 640X480 END*/
	
		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

		//For Online.....
		//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
		//echo $face1;
	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $face2x, $face2y, $face2, $text_colour );
	imagestring( $my_img, 5, $face3x, $face3y, $face3, $text_colour);
	imagestring( $my_img, 5, $face4x, $face4y, $face4, $text_colour);
	imagestring( $my_img, 5, $postx, $posty, $post, $text_colour);
	imagestring( $my_img, 5, $leftx, $lefty, $left, $text_colour);
	imagestring( $my_img, 5, $rightx, $righty, $right, $text_colour);
	imagestring( $my_img, 5, $totx, $toty,$tot,$text_colour);

//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// $marge_right = 545;
		// $marge_bottom = 425;
		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);


//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));


	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");		
		
		
		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/

	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
		//imagejpeg($my_img,$pt."scrn1.jpg");

	imagedestroy( $my_img );
}

else if($mod=="EP11")
{
	
	if($ends==1){
			//$img="VNORADBOTHENDS.jpg";
	}else if($ends==2){
			//$img="VNORADRIGHTEND.jpg";
		$left="";
	}else if($ends==3){
			//$img="VNORADLEFTEND.jpg";
		$right="";
	}else if($ends==4){
			//$img="VNORADNOENDS.jpg";
		$right="";
		$left="";
	}

	if($bay=="1BAY"){
		if($face1=="No Glass"){
			$face1="";
			$left="";
			$right="";
			$tot="";
		}
		$path="images/"."EP-111BAY/".$img.".jpg";

		if($endpaneltype=='Extended')
		{
			$face1x=400;$face1y=340;
			$postx=480; $posty=165;
			$rightx=395;$righty=37;
			$leftx=120;$lefty=100;
			$totx=435;$toty=365;

		}
		else{
			$face1x=375;$face1y=335;
			$postx=500; $posty=145;
			$rightx=40000;$righty=2000;
			$leftx=17000;$lefty=9000;
			$totx=430;$toty=355;

		}




	}else if($bay=="2BAY"){
		if($face1=="No Glass"||$face2=="No Glass"){
			$face1="";
			$face2="";
			$left="";
			$right="";
			$tot="";
		}
		$path="images/"."EP-112BAY/".$img.".jpg";

		if($corneryes=="1")
		{
			
			
			
			
			if($endpaneltype=='Extended')
			{


			//Extended Endpanel
				if($posttype=="Inner")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=260;$face1y=320;
							$face2x=345;$face2y=315;
							$postx=575; $posty=240;


							$rightx=530; $righty=115;
							$leftx=55; $lefty=130;
							$totx=1135;$toty=1465;	
						}


					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=215;$face1y=350;
							$face2x=395;$face2y=345;
							$postx=1; $posty=280;


							$rightx=555; $righty=100;
							$leftx=60; $lefty=105;
							$totx=1135;$toty=1465;		
						}


					}
				}
				if($posttype=="Outer")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=125;$face1y=340;
							$face2x=520;$face2y=337;
							$postx=12; $posty=203;


							$rightx=500; $righty=55;
							$leftx=131; $lefty=58;
							$totx=1135;$toty=1465;		
						}


					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=150;$face1y=348;
							$face2x=475;$face2y=330;
							$postx=2; $posty=215;


							$rightx=545; $righty=65;
							$leftx=94; $lefty=80;
							$totx=1135;$toty=1465;		
						}


					}
				}
			}
			else{
			//Normal Endpanel
				if($posttype=="Inner")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=285;$face1y=332;
							$face2x=350;$face2y=335;
							$postx=50; $posty=275;


							$rightx=465000; $righty=1500;
							$leftx=8500; $lefty=10500;
							$totx=1135;$toty=1465;	
						}


					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=300;$face1y=350;
							$face2x=490;$face2y=315;
							$postx=18; $posty=292;


							$rightx=465000; $righty=1500;
							$leftx=8500; $lefty=10500;
							$totx=1135;$toty=1465;		
						}


					}
				}
				if($posttype=="Outer")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=205;$face1y=370;
							$face2x=545;$face2y=310;
							$postx=42; $posty=200;


							$rightx=465000; $righty=1500;
							$leftx=8500; $lefty=10500;
							$totx=1135;$toty=1465;		
						}


					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=165;$face1y=350;
							$face2x=485;$face2y=350;
							$postx=12; $posty=210;


							$rightx=465000; $righty=1500;
							$leftx=8500; $lefty=10500;
							$totx=1135;$toty=1465;		
						}


					}
				}
			}
			
			
		}

		else{
			
			// $face1x=255;$face1y=315;
			// $face2x=450;$face2y=205;
			// $postx=545; $posty=80;
			// $rightx=465; $righty=15;
			// $leftx=85; $lefty=105;
			// $totx=400;$toty=280;
			
			
			if($endpaneltype=='Extended')
			{
			//Extended Endpanel
				$face1x=330;$face1y=350;
				$face2x=510;$face2y=255;
				$postx=555; $posty=130;
				$rightx=485; $righty=10;
				$leftx=70; $lefty=105;
				$totx=470;$toty=320;
			}
			else{
			//Normal Endpanel
				$face1x=290;$face1y=365;
				$face2x=490;$face2y=260;
				$postx=545; $posty=130;
				$rightx=46500; $righty=1500;
				$leftx=8500; $lefty=10500;
				$totx=450;$toty=320;
			}
			
		}

	}else if($bay=="3BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
			$left="";
			$right="";
			$tot="";
		}
		$path="images/"."EP-113BAY/".$img.".jpg";


		if($corneryes=="1")
		{

			
			
			if($endpaneltype=='Extended')
			{

			//Extended Endpanel
				if($noofcornerpostval=="2")	
				{
			//two corner post	


					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=2; $posty=280;	
								$face1x=280;$face1y=285;
								$face2x=325;$face2y=255;
								$face3x=370;$face3y=285;


								$rightx=540; $righty=135;
								$leftx=110; $lefty=135;
								$totx=1430;$toty=1240;	
							}


						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=0; $posty=265;	
								$face1x=170;$face1y=285;
								$face2x=302;$face2y=270;
								$face3x=435;$face3y=295;

								$rightx=580; $righty=140;
								$leftx=25; $lefty=135;
								$totx=1430;$toty=1240;	
							}


						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{

								$postx=540; $posty=190;		
								$face1x=50;$face1y=280;
								$face2x=310;$face2y=400;
								$face3x=570;$face3y=300;

								$rightx=425; $righty=80;
								$leftx=195; $lefty=80;
								$totx=1430;$toty=1240;	
							}


						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=0; $posty=205;		
								$face1x=60;$face1y=317;
								$face2x=325;$face2y=355;
								$face3x=590;$face3y=290;

								$rightx=540; $righty=100;
								$leftx=85; $lefty=110;
								$totx=1430;$toty=1240;	
							}


						}
					}	
				}
				else{
			//one corner post	




					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=195;$face1y=230;
								$face2x=255;$face2y=230;
								$face3x=355;$face3y=300;
								$postx=1; $posty=195;

								$rightx=555; $righty=130;
								$leftx=35; $lefty=70;
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=210;$face1y=315;
								$face2x=360;$face2y=260;
								$face3x=430;$face3y=260;
								$postx=1; $posty=285;

								$rightx=569; $righty=115;
								$leftx=38; $lefty=140;
								$totx=1420;$toty=1250;
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=185;$face1y=325;
								$face2x=295;$face2y=305;
								$face3x=460;$face3y=310;
								$postx=565; $posty=235;

								$rightx=555; $righty=130;
								$leftx=35; $lefty=170;
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=250;$face1y=345;
								$face2x=390;$face2y=290;
								$face3x=485;$face3y=275;
								$postx=570; $posty=213;

								$rightx=555; $righty=105;
								$leftx=58; $lefty=160;
								$totx=1420;$toty=1250;
							}

						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=100;$face1y=345;
								$face2x=445;$face2y=325;
								$face3x=565;$face3y=220;
								$postx=1; $posty=195;

								$rightx=520; $righty=40;
								$leftx=99; $lefty=93;
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=95;$face1y=285;
								$face2x=275;$face2y=360;
								$face3x=565;$face3y=330;
								$postx=2; $posty=160;

								$rightx=500; $righty=75;
								$leftx=75; $lefty=55;
								$totx=1420;$toty=1250;
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=110;$face1y=300;
								$face2x=365;$face2y=310;
								$face3x=545;$face3y=265;
								$postx=0; $posty=190;

								$rightx=570; $righty=70;
								$leftx=75; $lefty=85;
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=125;$face1y=335;
								$face2x=295;$face2y=355;
								$face3x=535;$face3y=332;
								$postx=0; $posty=250;

								$rightx=550; $righty=135;
								$leftx=55; $lefty=150;
								$totx=1420;$toty=1250;
							}

						}
					}





				}
			}
			else{
			//normal panel	
				if($noofcornerpostval=="2")	
				{
			//two corner post	


					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=10; $posty=330;	
								$face1x=260;$face1y=315;
								$face2x=310;$face2y=260;
								$face3x=385;$face3y=315;


								$rightx=495000; $righty=10000;
								$leftx=55000; $lefty=15500;
								$totx=1430;$toty=1240;	
							}


						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=0; $posty=300;	
								$face1x=180;$face1y=320;
								$face2x=312;$face2y=290;
								$face3x=455;$face3y=325;

								$rightx=495000; $righty=10000;
								$leftx=55000; $lefty=15500;
								$totx=1430;$toty=1240;	
							}


						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{

								$postx=20; $posty=205;		
								$face1x=40;$face1y=299;
								$face2x=320;$face2y=390;
								$face3x=570;$face3y=299;

								$rightx=495000; $righty=10000;
								$leftx=55000; $lefty=15500;
								$totx=1430;$toty=1240;	
							}


						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=587; $posty=180;		
								$face1x=60;$face1y=310;
								$face2x=310;$face2y=360;
								$face3x=570;$face3y=290;

								$rightx=495000; $righty=10000;
								$leftx=55000; $lefty=15500;
								$totx=1430;$toty=1240;	
							}


						}
					}	
				}
				else{
			//one corner post	




					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=180;$face1y=252;
								$face2x=230;$face2y=253;
								$face3x=365;$face3y=355;
								$postx=1; $posty=210;

								$rightx=495000; $righty=10000;
								$leftx=55000; $lefty=15500;
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=220;$face1y=330;
								$face2x=399;$face2y=285;
								$face3x=445;$face3y=292;
								$postx=5; $posty=280;

								$rightx=495000; $righty=10000;
								$leftx=55000; $lefty=15500;
								$totx=1420;$toty=1250;
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=200;$face1y=320;
								$face2x=320;$face2y=290;
								$face3x=500;$face3y=290;
								$postx=0; $posty=290;

								$rightx=495000; $righty=10000;
								$leftx=55000; $lefty=15500;
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=260;$face1y=350;
								$face2x=410;$face2y=282;
								$face3x=525;$face3y=265;
								$postx=5; $posty=320;

								$rightx=495000; $righty=10000;
								$leftx=55000; $lefty=15500;
								$totx=1420;$toty=1250;
							}

						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=170;$face1y=385;
								$face2x=490;$face2y=345;
								$face3x=580;$face3y=220;
								$postx=15; $posty=210;

								$rightx=495000; $righty=10000;
								$leftx=55000; $lefty=15500;
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=110;$face1y=280;
								$face2x=320;$face2y=345;
								$face3x=590;$face3y=305;
								$postx=1; $posty=155;

								$rightx=495000; $righty=10000;
								$leftx=55000; $lefty=15500;
								$totx=1420;$toty=1250;
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=130;$face1y=355;
								$face2x=365;$face2y=355;
								$face3x=535;$face3y=310;
								$postx=0; $posty=245;

								$rightx=49500; $righty=10;
								$leftx=5500; $lefty=155;
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=125;$face1y=290;
								$face2x=320;$face2y=310;
								$face3x=550;$face3y=290;
								$postx=0; $posty=198;

								$rightx=495000; $righty=10000;
								$leftx=55000; $lefty=15500;
								$totx=1420;$toty=1250;
							}

						}
					}





				}
			}
			
			
		}

		else{
			
			
			
			if($endpaneltype=='Extended')
			{
				$face1x=220;$face1y=350;
				$face2x=405;$face2y=285;
				$face3x=525;$face3y=230;
				$postx=5; $posty=330;

				$rightx=525; $righty=55;
				$leftx=40; $lefty=172;
				$totx=445;$toty=305;


			}
			else{
				$face1x=200;$face1y=360;
				$face2x=390;$face2y=285;
				$face3x=530;$face3y=230;
				$postx=580; $posty=140;
				$rightx=49500; $righty=10000;
				$leftx=55000; $lefty=15500;
				$totx=425;$toty=300;


			}
			
		}	
	}else if($bay=="4BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"||$face4=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
			$face4="";
			$left="";
			$right="";
			$tot="";
		}
		$path="images/"."EP-114BAY/".$img.".jpg";


		if($corneryes=="1")
		{



			
			
			
			if($endpaneltype=='Extended')
			{
				
				if($noofcornerpostval=="2")	
				{
					//two corner post	

					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								//$face1x=240; $face1y=235;
								$postx=2; $posty=195;
								$face1x=245; $face1y=200;
								$face2x=285; $face2y=170;
								$face3x=350; $face3y=200;
								$face4x=355; $face4y=295;


								$rightx=519; $righty=160;
								$leftx=110;$lefty=80;
								$totx=1450;$toty=1220;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$postx=565; $posty=220;	
								$face1x=265; $face1y=300;
								$face2x=275; $face2y=220;
								$face3x=315; $face3y=185;
								$face4x=375; $face4y=220;


								$rightx=505; $righty=100;
								$leftx=90; $lefty=190;
								$totx=1450;$toty=1220;	
							}

						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{


								$postx=575; $posty=265;	
								$face1x=165; $face1y=285;
								$face2x=250; $face2y=265;
								$face3x=350; $face3y=260;
								$face4x=465; $face4y=295;


								$rightx=575; $righty=170;
								$leftx=40; $lefty=190;
								$totx=1450;$toty=1220;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$postx=575; $posty=205;
								$face1x=199; $face1y=305;
								$face2x=290; $face2y=255;
								$face3x=370; $face3y=235;
								$face4x=485; $face4y=240;


								$rightx=585; $righty=110;
								$leftx=45; $lefty=185;
								$totx=1450;$toty=1220;	
							}

						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=520; $posty=130;
								$face1x=60; $face1y=295;
								$face2x=290; $face2y=425;
								$face3x=585; $face3y=320;
								$face4x=540; $face4y=210;


								$rightx=405; $righty=45;
								$leftx=200; $lefty=105;
								$totx=1450;$toty=1220;		
							}
							if($postposition=="2nd Center Post from Left")
							{
								$postx=550; $posty=195;
								$face1x=95; $face1y=215;
								$face2x=50; $face2y=305;
								$face3x=310; $face3y=410;
								$face4x=560; $face4y=305;




								$rightx=430; $righty=100;
								$leftx=230; $lefty=55;
								$totx=1450;$toty=1220;	
							}

						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=2; $posty=270;
								$face1x=70; $face1y=380;
								$face2x=340; $face2y=390;
								$face3x=555; $face3y=320;
								$face4x=595; $face4y=260;


								$rightx=545; $righty=110;
								$leftx=70; $lefty=170;
								$totx=1450;$toty=1220;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$postx=2; $posty=235;
								$face1x=60; $face1y=310;
								$face2x=185; $face2y=345;
								$face3x=410; $face3y=355;
								$face4x=560; $face4y=295;


								$rightx=510; $righty=150;
								$leftx=60; $lefty=150;
								$totx=1450;$toty=1220;	
							}

						}
					}

				}
				else{
					//one corner post	


					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=145; $face1y=210;
								$face2x=197; $face2y=210;
								$face3x=275; $face3y=260;
								$face4x=377; $face4y=320;
								$postx=5; $posty=180;


								$rightx=550; $righty=185;
								$leftx=30; $lefty=80;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=160; $face1y=295;
								$face2x=295; $face2y=250;
								$face3x=345; $face3y=255;
								$face4x=415; $face4y=297;
								$postx=0; $posty=275;


								$rightx=575; $righty=180;
								$leftx=27; $lefty=165;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="3rd Center Post from Left")
							{
								$face1x=160; $face1y=305;
								$face2x=310; $face2y=260;
								$face3x=430; $face3y=224;
								$face4x=480; $face4y=225;
								$postx=0; $posty=280;


								$rightx=595; $righty=110;
								$leftx=30; $lefty=160;
								$totx=1425;$toty=1225;		
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=160; $face1y=330;
								$face2x=240; $face2y=305;
								$face3x=380; $face3y=300;
								$face4x=530; $face4y=295;
								$postx=585; $posty=230;


								$rightx=585; $righty=145;
								$leftx=30; $lefty=205;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=190; $face1y=330;
								$face2x=300; $face2y=275;
								$face3x=385; $face3y=255;
								$face4x=510; $face4y=250;
								$postx=585; $posty=190;


								$rightx=565; $righty=105;
								$leftx=40; $lefty=195;
								$totx=1425;$toty=1225;		
							}
							if($postposition=="3rd Center Post from Left")
							{
								$face1x=70; $face1y=280;
								$face2x=225; $face2y=285;
								$face3x=355; $face3y=285;
								$face4x=445; $face4y=297;
								$postx=580; $posty=258;


								$rightx=565; $righty=175;
								$leftx=15; $lefty=130;
								$totx=1425;$toty=1225;		
							}

						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=100; $face1y=335;
								$face2x=380; $face2y=325;
								$face3x=475; $face3y=245;
								$face4x=547; $face4y=190;
								$postx=547; $posty=107;


								$rightx=495; $righty=30;
								$leftx=80; $lefty=90;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=40; $face1y=255;
								$face2x=170; $face2y=325;
								$face3x=430; $face3y=325;
								$face4x=545; $face4y=245;
								$postx=2; $posty=170;


								$rightx=505; $righty=80;
								$leftx=70; $lefty=90;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="3rd Center Post from Left")
							{
								$face1x=70; $face1y=240;
								$face2x=180; $face2y=290;
								$face3x=330; $face3y=360;
								$face4x=575; $face4y=340;
								$postx=1; $posty=150;


								$rightx=525; $righty=135;
								$leftx=60; $lefty=70;
								$totx=1425;$toty=1225;	
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=130; $face1y=350;
								$face2x=355; $face2y=320;
								$face3x=480; $face3y=268;
								$face4x=570; $face4y=240;
								$postx=05; $posty=260;


								$rightx=555; $righty=95;
								$leftx=70; $lefty=160;
								$totx=1425;$toty=1225;		
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=80; $face1y=310;
								$face2x=215; $face2y=340;
								$face3x=410; $face3y=335;
								$face4x=560; $face4y=295;
								$postx=2; $posty=235;


								$rightx=575; $righty=155;
								$leftx=50; $lefty=160;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="3rd Center Post from Left")
							{
								$face1x=100; $face1y=295;
								$face2x=240; $face2y=305;
								$face3x=380; $face3y=315;
								$face4x=560; $face4y=290;
								$postx=1; $posty=233;


								$rightx=565; $righty=135;
								$leftx=40; $lefty=150;
								$totx=1425;$toty=1225;	
							}

						}
					}




				}
			}
			else{
				
				if($noofcornerpostval=="2")	
				{
			//two corner post	

					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
			//$face1x=240; $face1y=235;
								$postx=20; $posty=200;
								$face1x=245; $face1y=225;
								$face2x=295; $face2y=205;
								$face3x=350; $face3y=225;
								$face4x=355; $face4y=325;


								$rightx=52500; $righty=15000;
								$leftx=40000; $lefty=18000;
								$totx=1450;$toty=1220;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$postx=20; $posty=300;	
								$face1x=305; $face1y=310;
								$face2x=305; $face2y=240;
								$face3x=355; $face3y=210;
								$face4x=430; $face4y=240;


								$rightx=52500; $righty=15000;
								$leftx=40000; $lefty=18000;
								$totx=1450;$toty=1220;	
							}

						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{


								$postx=0; $posty=250;	
								$face1x=135; $face1y=275;
								$face2x=240; $face2y=270;
								$face3x=350; $face3y=280;
								$face4x=465; $face4y=330;


								$rightx=52500; $righty=15000;
								$leftx=40000; $lefty=18000;
								$totx=1450;$toty=1220;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$postx=0; $posty=285;
								$face1x=150; $face1y=315;
								$face2x=270; $face2y=290;
								$face3x=370; $face3y=285;
								$face4x=485; $face4y=305;


								$rightx=52500; $righty=15000;
								$leftx=40000; $lefty=18000;
								$totx=1450;$toty=1220;	
							}

						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=15; $posty=175;
								$face1x=50; $face1y=300;
								$face2x=310; $face2y=410;
								$face3x=575; $face3y=310;
								$face4x=535; $face4y=200;


								$rightx=52500; $righty=15000;
								$leftx=40000; $lefty=18000;
								$totx=1450;$toty=1220;		
							}
							if($postposition=="2nd Center Post from Left")
							{
								$postx=65; $posty=155;
								$face1x=85; $face1y=235;
								$face2x=35; $face2y=320;
								$face3x=310; $face3y=420;
								$face4x=560; $face4y=320;




								$rightx=52500; $righty=15000;
								$leftx=40000; $lefty=18000;
								$totx=1450;$toty=1220;	
							}

						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=570; $posty=190;
								$face1x=50; $face1y=310;
								$face2x=260; $face2y=350;
								$face3x=500; $face3y=300;
								$face4x=580; $face4y=260;


								$rightx=52500; $righty=15000;
								$leftx=40000; $lefty=18000;
								$totx=1450;$toty=1220;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$postx=0; $posty=210;
								$face1x=50; $face1y=285;
								$face2x=165; $face2y=320;
								$face3x=399; $face3y=340;
								$face4x=595; $face4y=295;


								$rightx=52500; $righty=15000;
								$leftx=40000; $lefty=18000;
								$totx=1450;$toty=1220;	
							}

						}
					}

				}
				else{
			//one corner post	


					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=140; $face1y=205;
								$face2x=175; $face2y=210;
								$face3x=240; $face3y=260;
								$face4x=370; $face4y=360;
								$postx=3; $posty=165;


								$rightx=52500; $righty=15000;
								$leftx=40000; $lefty=18000;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=175; $face1y=285;
								$face2x=307; $face2y=245;
								$face3x=345; $face3y=248;
								$face4x=450; $face4y=320;
								$postx=1; $posty=255;


								$rightx=52500; $righty=15000;
								$leftx=40000; $lefty=18000;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="3rd Center Post from Left")
							{
								$face1x=240; $face1y=340;
								$face2x=399; $face2y=265;
								$face3x=480; $face3y=219;
								$face4x=510; $face4y=219;
								$postx=15; $posty=320;


								$rightx=52500; $righty=15000;
								$leftx=40000; $lefty=18000;
								$totx=1425;$toty=1225;		
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=155; $face1y=290;
								$face2x=250; $face2y=270;
								$face3x=390; $face3y=268;
								$face4x=530; $face4y=265;
								$postx=0; $posty=268;


								$rightx=52500; $righty=15000;
								$leftx=40000; $lefty=18000;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=180; $face1y=310;
								$face2x=315; $face2y=265;
								$face3x=398; $face3y=255;
								$face4x=540; $face4y=265;
								$postx=0; $posty=275;


								$rightx=52500; $righty=15000;
								$leftx=40000; $lefty=18000;
								$totx=1425;$toty=1225;		
							}
							if($postposition=="3rd Center Post from Left")
							{
								$face1x=70; $face1y=250;
								$face2x=210; $face2y=270;
								$face3x=350; $face3y=290;
								$face4x=455; $face4y=320;
								$postx=0; $posty=185;


								$rightx=52500; $righty=15000;
								$leftx=40000; $lefty=18000;
								$totx=1425;$toty=1225;		
							}

						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=80; $face1y=340;
								$face2x=405; $face2y=340;
								$face3x=500; $face3y=255;
								$face4x=585; $face4y=199;
								$postx=27; $posty=213;


								$rightx=52500; $righty=15000;
								$leftx=40000; $lefty=18000;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=80; $face1y=290;
								$face2x=280; $face2y=365;
								$face3x=545; $face3y=335;
								$face4x=595; $face4y=220;
								$postx=0; $posty=165;


								$rightx=52500; $righty=15000;
								$leftx=40000; $lefty=18000;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="3rd Center Post from Left")
							{
								$face1x=70; $face1y=210;
								$face2x=180; $face2y=260;
								$face3x=320; $face3y=330;
								$face4x=595; $face4y=300;
								$postx=1; $posty=128;


								$rightx=52500; $righty=15000;
								$leftx=40000; $lefty=18000;
								$totx=1425;$toty=1225;	
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=125; $face1y=340;
								$face2x=355; $face2y=310;
								$face3x=485; $face3y=250;
								$face4x=585; $face4y=210;
								$postx=01; $posty=250;


								$rightx=52500; $righty=15000;
								$leftx=40000; $lefty=18000;
								$totx=1425;$toty=1225;		
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=110; $face1y=299;
								$face2x=275; $face2y=320;
								$face3x=490; $face3y=300;
								$face4x=585; $face4y=255;
								$postx=0; $posty=225;


								$rightx=52500; $righty=15000;
								$leftx=40000; $lefty=18000;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="3rd Center Post from Left")
							{
								$face1x=80; $face1y=265;
								$face2x=210; $face2y=290;
								$face3x=370; $face3y=320;
								$face4x=550; $face4y=320;
								$postx=0; $posty=190;


								$rightx=52500; $righty=15000;
								$leftx=40000; $lefty=18000;
								$totx=1425;$toty=1225;	
							}

						}
					}




				}
			}
			
			
		}

		else{
			
			
			
			if($endpaneltype=='Extended')
			{
				$face1x=200; $face1y=330;
				$face2x=345; $face2y=265;
				$face3x=465; $face3y=225;
				$face4x=560; $face4y=180;
				
				
				$postx=5; $posty=320;

				$rightx=555; $righty=35;
				$leftx=35; $lefty=185;
				$totx=435;$toty=270;

			}
			else{
				$face1x=180; $face1y=350;
				$face2x=340; $face2y=280;
				$face3x=460; $face3y=230;
				$face4x=560; $face4y=185;
				$postx=580; $posty=115;
				$rightx=40000;$righty=2000;
				$leftx=17000;$lefty=9000;
				$totx=425;$toty=280;

			}
			
		}
	}
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;
	echo getcwd();

	
	
	/*Resize 1920X1440 to 640X480 Start*/
	$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

	$my_img =imagecreatefromjpeg("../".$path);
    list($origWidth, $origHeight) = getimagesize("../".$path);

   
 
	
	$w =640;
	$h =480;
   // $img=$target;
    $extn = strtolower($extn);
 
        //$img = imagecreatefromjpeg($targett);
		
	
  
    $a = imagecreatetruecolor($w, $h);
    
    imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);
	
    imagejpeg($a,'img2/'.$newcpy,300);

	
	
	
	
	
	
	
	
	$resize="img2/".$osc."_".$im_id.".jpg";
	
	
		/*Resize 1920X1440 to 640X480 END*/
	
	
	
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;
	echo getcwd();

		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

		//For Online.....
		// $my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
		//echo $face1;
	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $face2x, $face2y, $face2, $text_colour );
	imagestring( $my_img, 5, $face3x, $face3y, $face3, $text_colour);
	imagestring( $my_img, 5, $face4x, $face4y, $face4, $text_colour);
	imagestring( $my_img, 5, $postx, $posty, $post, $text_colour);
	imagestring( $my_img, 5, $leftx, $lefty, $left, $text_colour);
	imagestring( $my_img, 5, $rightx, $righty, $right, $text_colour);
	imagestring( $my_img, 5, $totx, $toty,$tot,$text_colour);

//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// $marge_right = 545;
		// $marge_bottom = 425;
		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);



//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));


	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");	


		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/
		
	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
	imagedestroy( $my_img );
}else if($mod=="EP12"){
	if($ends==1){
			//$img="VERTNORADBOTHENDS.jpg";
	}else if($ends==2){
			//$img="VERTNORADRIGHTEND.jpg";
		$left="";
	}else if($ends==3){
			//$img="VERTNORADLEFTEND.jpg";
		$right="";
	}else if($ends==4){
			//$img="VERTNORADNOENDS.jpg";
		$right="";
		$left="";
	}

	if($bay=="1BAY"){
		if($face1=="No Glass"){
			$face1="";
			$left="";
			$right="";
			$tot="";
		}
		$path="images/"."EP-121BAY/".$img.".jpg";

		if($endpaneltype=='Extended')
		{
			$face1x=400;$face1y=340;
			$postx=480; $posty=165;
			$rightx=395;$righty=37;
			$leftx=120;$lefty=100;
			$totx=435;$toty=365;
		}
		else{
			$face1x=375;$face1y=335;
			$postx=500; $posty=145;
			$rightx=40000;$righty=2000;
			$leftx=17000;$lefty=9000;
			$totx=430;$toty=355;
		}



	}else if($bay=="2BAY"){
		if($face1=="No Glass"||$face2=="No Glass"){
			$face1="";
			$face2="";
			$left="";
			$right="";
			$tot="";
		}
		$path="images/"."EP-122BAY/".$img.".jpg";

		if($corneryes=="1")
		{


			
			
			
			
			if($endpaneltype=='Extended')
			{
			//Extended Endpanel
				if($posttype=="Inner")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=260;$face1y=320;
							$face2x=345;$face2y=315;
							$postx=575; $posty=240;


							$rightx=530; $righty=115;
							$leftx=55; $lefty=130;
							$totx=1135;$toty=1465;	
						}


					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=215;$face1y=350;
							$face2x=395;$face2y=345;
							$postx=1; $posty=280;


							$rightx=555; $righty=100;
							$leftx=60; $lefty=105;
							$totx=1135;$toty=1465;			
						}


					}
				}
				if($posttype=="Outer")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=125;$face1y=340;
							$face2x=520;$face2y=337;
							$postx=12; $posty=203;


							$rightx=500; $righty=55;
							$leftx=131; $lefty=58;
							$totx=1135;$toty=1465;		
						}


					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=150;$face1y=348;
							$face2x=475;$face2y=330;
							$postx=2; $posty=215;


							$rightx=545; $righty=65;
							$leftx=94; $lefty=80;
							$totx=1135;$toty=1465;	
						}


					}
				}
			}
			else{
				if($posttype=="Inner")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=285;$face1y=332;
							$face2x=350;$face2y=335;
							$postx=50; $posty=275;


							$rightx=465000; $righty=1500;
							$leftx=8500; $lefty=10500;
							$totx=1135;$toty=1465;	
						}


					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=300;$face1y=350;
							$face2x=490;$face2y=315;
							$postx=18; $posty=292;


							$rightx=465000; $righty=1500;
							$leftx=8500; $lefty=10500;
							$totx=1135;$toty=1465;			
						}


					}
				}
				if($posttype=="Outer")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=205;$face1y=370;
							$face2x=545;$face2y=310;
							$postx=42; $posty=200;


							$rightx=40000;$righty=20000;
							$leftx=17000;$lefty=9000;
							$totx=11350;$toty=14650;		
						}


					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=165;$face1y=350;
							$face2x=485;$face2y=350;
							$postx=12; $posty=210;


							$rightx=40000;$righty=2000;
							$leftx=17000;$lefty=9000;		
						}


					}
				}
			}
			
		}

		else{
			
			
			
			
			if($endpaneltype=='Extended')
			{
			//Extended Endpanel
				$face1x=330;$face1y=350;
				$face2x=510;$face2y=255;
				$postx=555; $posty=130;
				$rightx=485; $righty=10;
				$leftx=70; $lefty=105;
				$totx=470;$toty=320;
			}
			else{
				$face1x=290;$face1y=365;
				$face2x=490;$face2y=260;
				$postx=545; $posty=130;
				$rightx=46500; $righty=1500;
				$leftx=8500; $lefty=10500;
				$totx=450;$toty=320;
			}
			
			
		}
	}else if($bay=="3BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
			$left="";
			$right="";
			$tot="";
		}
		$path="images/"."EP-123BAY/".$img.".jpg";

		if($corneryes=="1")
		{





			if($endpaneltype=='Extended')
			{

			//Extended Endpanel
				if($noofcornerpostval=="2")	
				{
			//two corner post	


					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=2; $posty=280;	
								$face1x=280;$face1y=285;
								$face2x=325;$face2y=255;
								$face3x=370;$face3y=285;


								$rightx=540; $righty=135;
								$leftx=110; $lefty=135;
								$totx=1430;$toty=1240;		
							}


						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=0; $posty=265;	
								$face1x=170;$face1y=285;
								$face2x=302;$face2y=270;
								$face3x=435;$face3y=295;

								$rightx=580; $righty=140;
								$leftx=25; $lefty=135;
								$totx=1430;$toty=1240;	
							}


						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{

								$postx=540; $posty=190;		
								$face1x=50;$face1y=280;
								$face2x=310;$face2y=400;
								$face3x=570;$face3y=300;

								$rightx=425; $righty=80;
								$leftx=195; $lefty=80;
								$totx=1430;$toty=1240;		
							}


						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=0; $posty=205;		
								$face1x=60;$face1y=317;
								$face2x=325;$face2y=355;
								$face3x=590;$face3y=290;

								$rightx=540; $righty=100;
								$leftx=85; $lefty=110;
								$totx=1430;$toty=1240;	
							}


						}
					}	
				}
				else{
			//one corner post	




					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=195;$face1y=230;
								$face2x=255;$face2y=230;
								$face3x=355;$face3y=300;
								$postx=1; $posty=195;

								$rightx=555; $righty=130;
								$leftx=35; $lefty=70;
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=210;$face1y=315;
								$face2x=360;$face2y=260;
								$face3x=430;$face3y=260;
								$postx=1; $posty=285;

								$rightx=569; $righty=115;
								$leftx=38; $lefty=140;
								$totx=1420;$toty=1250;
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=185;$face1y=325;
								$face2x=295;$face2y=305;
								$face3x=460;$face3y=310;
								$postx=565; $posty=235;

								$rightx=555; $righty=130;
								$leftx=35; $lefty=170;
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=250;$face1y=345;
								$face2x=390;$face2y=290;
								$face3x=485;$face3y=275;
								$postx=570; $posty=213;

								$rightx=555; $righty=105;
								$leftx=58; $lefty=160;
								$totx=1420;$toty=1250;
							}

						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=100;$face1y=345;
								$face2x=445;$face2y=325;
								$face3x=565;$face3y=220;
								$postx=1; $posty=195;

								$rightx=520; $righty=40;
								$leftx=99; $lefty=93;
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=95;$face1y=285;
								$face2x=275;$face2y=360;
								$face3x=565;$face3y=330;
								$postx=2; $posty=160;

								$rightx=500; $righty=75;
								$leftx=75; $lefty=55;
								$totx=1420;$toty=1250;
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=110;$face1y=300;
								$face2x=365;$face2y=310;
								$face3x=545;$face3y=265;
								$postx=0; $posty=190;

								$rightx=570; $righty=70;
								$leftx=75; $lefty=85;
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=125;$face1y=335;
								$face2x=295;$face2y=355;
								$face3x=535;$face3y=332;
								$postx=0; $posty=250;

								$rightx=550; $righty=135;
								$leftx=55; $lefty=150;
								$totx=1420;$toty=1250;
							}

						}
					}





				}
			}
			else{
				if($noofcornerpostval=="2")	
				{
			//two corner post	


					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=10; $posty=330;	
								$face1x=260;$face1y=315;
								$face2x=310;$face2y=260;
								$face3x=385;$face3y=315;


								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1430;$toty=1240;	
							}


						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=0; $posty=300;	
								$face1x=180;$face1y=320;
								$face2x=312;$face2y=290;
								$face3x=455;$face3y=325;

								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1430;$toty=1240;	
							}


						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{

								$postx=20; $posty=205;		
								$face1x=40;$face1y=299;
								$face2x=320;$face2y=390;
								$face3x=570;$face3y=299;

								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1430;$toty=1240;	
							}


						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=587; $posty=180;		
								$face1x=60;$face1y=310;
								$face2x=310;$face2y=360;
								$face3x=570;$face3y=290;

								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1430;$toty=1240;	
							}


						}
					}	
				}
				else{
			//one corner post	


					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=180;$face1y=252;
								$face2x=230;$face2y=253;
								$face3x=365;$face3y=355;
								$postx=1; $posty=210;

								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=220;$face1y=330;
								$face2x=399;$face2y=285;
								$face3x=445;$face3y=292;
								$postx=5; $posty=280;

								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1420;$toty=1250;
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=200;$face1y=320;
								$face2x=320;$face2y=290;
								$face3x=500;$face3y=290;
								$postx=0; $posty=290;

								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=260;$face1y=350;
								$face2x=410;$face2y=282;
								$face3x=525;$face3y=265;
								$postx=5; $posty=320;

								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1420;$toty=1250;
							}

						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=170;$face1y=385;
								$face2x=490;$face2y=345;
								$face3x=580;$face3y=220;
								$postx=15; $posty=210;

								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=110;$face1y=280;
								$face2x=320;$face2y=345;
								$face3x=590;$face3y=305;
								$postx=1; $posty=155;

								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1420;$toty=1250;
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=130;$face1y=355;
								$face2x=365;$face2y=355;
								$face3x=535;$face3y=310;
								$postx=0; $posty=245;

								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=125;$face1y=290;
								$face2x=320;$face2y=310;
								$face3x=550;$face3y=290;
								$postx=0; $posty=198;

								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1420;$toty=1250;
							}

						}
					}





				}
			}
			
			
		}

		else{


			
			if($endpaneltype=='Extended')
			{
				$face1x=220;$face1y=350;
				$face2x=405;$face2y=285;
				$face3x=525;$face3y=230;
				$postx=5; $posty=330;

				$rightx=525; $righty=55;
				$leftx=40; $lefty=172;
				$totx=445;$toty=305;


			}
			else{
				$face1x=200;$face1y=360;
				$face2x=390;$face2y=285;
				$face3x=530;$face3y=230;
				$postx=580; $posty=140;
				$rightx=49500; $righty=10000;
				$leftx=55000; $lefty=15500;
				$totx=425;$toty=300;

			}
		}


	}else if($bay=="4BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"||$face4=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
			$face4="";
			$left="";
			$right="";
			$tot="";
		}
		$path="images/"."EP-124BAY/".$img.".jpg";

		if($corneryes=="1")
		{




			if($endpaneltype=='Extended')
			{
				if($noofcornerpostval=="2")	
				{
					//two corner post	

					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
									//$face1x=240; $face1y=235;
								$postx=2; $posty=195;
								$face1x=245; $face1y=200;
								$face2x=285; $face2y=170;
								$face3x=350; $face3y=200;
								$face4x=355; $face4y=295;


								$rightx=519; $righty=160;
								$leftx=110;$lefty=80;
								$totx=1450;$toty=1220;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$postx=565; $posty=220;	
								$face1x=265; $face1y=300;
								$face2x=275; $face2y=220;
								$face3x=315; $face3y=185;
								$face4x=375; $face4y=220;


								$rightx=505; $righty=100;
								$leftx=90; $lefty=190;
								$totx=1450;$toty=1220;	
							}

						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{


								$postx=575; $posty=265;	
								$face1x=165; $face1y=285;
								$face2x=250; $face2y=265;
								$face3x=350; $face3y=260;
								$face4x=465; $face4y=295;


								$rightx=565; $righty=170;
								$leftx=40; $lefty=180;
								$totx=1450;$toty=1220;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$postx=575; $posty=205;
								$face1x=199; $face1y=305;
								$face2x=290; $face2y=255;
								$face3x=370; $face3y=235;
								$face4x=485; $face4y=240;


								$rightx=585; $righty=110;
								$leftx=45; $lefty=185;
								$totx=1450;$toty=1220;	
							}

						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=520; $posty=130;
								$face1x=60; $face1y=295;
								$face2x=290; $face2y=425;
								$face3x=585; $face3y=320;
								$face4x=540; $face4y=210;


								$rightx=405; $righty=45;
								$leftx=200; $lefty=105;
								$totx=1450;$toty=1220;		
							}
							if($postposition=="2nd Center Post from Left")
							{
								$postx=550; $posty=195;
								$face1x=95; $face1y=215;
								$face2x=50; $face2y=305;
								$face3x=310; $face3y=410;
								$face4x=560; $face4y=305;




								$rightx=430; $righty=100;
								$leftx=230; $lefty=55;
								$totx=1450;$toty=1220;	
							}

						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=2; $posty=270;
								$face1x=70; $face1y=380;
								$face2x=340; $face2y=390;
								$face3x=555; $face3y=320;
								$face4x=595; $face4y=260;


								$rightx=545; $righty=110;
								$leftx=70; $lefty=170;
								$totx=1450;$toty=1220;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$postx=2; $posty=235;
								$face1x=60; $face1y=310;
								$face2x=185; $face2y=345;
								$face3x=410; $face3y=355;
								$face4x=560; $face4y=295;


								$rightx=510; $righty=150;
								$leftx=60; $lefty=150;
								$totx=1450;$toty=1220;	
							}

						}
					}

				}
				else{
					//one corner post	


					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=145; $face1y=210;
								$face2x=197; $face2y=210;
								$face3x=275; $face3y=260;
								$face4x=377; $face4y=320;
								$postx=5; $posty=180;


								$rightx=550; $righty=185;
								$leftx=30; $lefty=80;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=160; $face1y=295;
								$face2x=295; $face2y=250;
								$face3x=345; $face3y=255;
								$face4x=415; $face4y=297;
								$postx=0; $posty=275;


								$rightx=575; $righty=180;
								$leftx=27; $lefty=165;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="3rd Center Post from Left")
							{
								$face1x=160; $face1y=305;
								$face2x=310; $face2y=260;
								$face3x=430; $face3y=224;
								$face4x=480; $face4y=225;
								$postx=0; $posty=280;


								$rightx=595; $righty=110;
								$leftx=30; $lefty=160;
								$totx=1425;$toty=1225;		
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=160; $face1y=330;
								$face2x=240; $face2y=305;
								$face3x=380; $face3y=300;
								$face4x=530; $face4y=295;
								$postx=585; $posty=230;


								$rightx=585; $righty=145;
								$leftx=30; $lefty=205;
								$totx=1425;$toty=1225;
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=190; $face1y=330;
								$face2x=300; $face2y=275;
								$face3x=385; $face3y=255;
								$face4x=510; $face4y=250;
								$postx=585; $posty=190;


								$rightx=565; $righty=105;
								$leftx=40; $lefty=195;
								$totx=1425;$toty=1225;		
							}
							if($postposition=="3rd Center Post from Left")
							{
								$face1x=70; $face1y=240;
								$face2x=180; $face2y=290;
								$face3x=330; $face3y=360;
								$face4x=575; $face4y=340;
								$postx=1; $posty=150;


								$rightx=525; $righty=135;
								$leftx=60; $lefty=70;
								$totx=1425;$toty=1225;	
							}

						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=100; $face1y=335;
								$face2x=380; $face2y=325;
								$face3x=475; $face3y=245;
								$face4x=547; $face4y=190;
								$postx=547; $posty=107;


								$rightx=495; $righty=30;
								$leftx=80; $lefty=90;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=40; $face1y=255;
								$face2x=170; $face2y=325;
								$face3x=430; $face3y=325;
								$face4x=545; $face4y=245;
								$postx=2; $posty=170;


								$rightx=505; $righty=80;
								$leftx=70; $lefty=90;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="3rd Center Post from Left")
							{
								$face1x=40; $face1y=220;
								$face2x=140; $face2y=260;
								$face3x=280; $face3y=330;
								$face4x=515; $face4y=320;
								$postx=1; $posty=150;


								$rightx=500; $righty=125;
								$leftx=60; $lefty=70;
								$totx=1425;$toty=1225;	
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=155; $face1y=370;
								$face2x=365; $face2y=330;
								$face3x=480; $face3y=268;
								$face4x=560; $face4y=230;
								$postx=05; $posty=300;


								$rightx=525; $righty=95;
								$leftx=50; $lefty=180;
								$totx=1425;$toty=1225;		
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=80; $face1y=310;
								$face2x=205; $face2y=330;
								$face3x=380; $face3y=325;
								$face4x=520; $face4y=295;
								$postx=2; $posty=235;


								$rightx=535; $righty=155;
								$leftx=50; $lefty=160;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="3rd Center Post from Left")
							{
								$face1x=100; $face1y=295;
								$face2x=240; $face2y=305;
								$face3x=380; $face3y=315;
								$face4x=560; $face4y=290;
								$postx=1; $posty=233;


								$rightx=565; $righty=135;
								$leftx=40; $lefty=150;
								$totx=1425;$toty=1225;	
							}

						}
					}




				}
			}
			else{
				if($noofcornerpostval=="2")	
				{
			//two corner post	

					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
			//$face1x=240; $face1y=235;
								$postx=20; $posty=200;
								$face1x=245; $face1y=225;
								$face2x=295; $face2y=205;
								$face3x=350; $face3y=225;
								$face4x=355; $face4y=325;


								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1450;$toty=1220;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$postx=20; $posty=300;	
								$face1x=305; $face1y=310;
								$face2x=305; $face2y=240;
								$face3x=355; $face3y=210;
								$face4x=430; $face4y=240;


								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1450;$toty=1220;	
							}

						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{


								$postx=0; $posty=250;	
								$face1x=135; $face1y=275;
								$face2x=240; $face2y=270;
								$face3x=350; $face3y=280;
								$face4x=465; $face4y=330;


								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1450;$toty=1220;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$postx=0; $posty=285;
								$face1x=150; $face1y=315;
								$face2x=270; $face2y=290;
								$face3x=370; $face3y=285;
								$face4x=485; $face4y=305;


								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1450;$toty=1220;	
							}

						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=15; $posty=175;
								$face1x=50; $face1y=300;
								$face2x=310; $face2y=410;
								$face3x=575; $face3y=310;
								$face4x=535; $face4y=200;


								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1450;$toty=1220;		
							}
							if($postposition=="2nd Center Post from Left")
							{
								$postx=65; $posty=155;
								$face1x=85; $face1y=235;
								$face2x=35; $face2y=320;
								$face3x=310; $face3y=420;
								$face4x=560; $face4y=320;




								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1450;$toty=1220;	
							}

						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=570; $posty=190;
								$face1x=50; $face1y=310;
								$face2x=260; $face2y=350;
								$face3x=500; $face3y=300;
								$face4x=580; $face4y=260;


								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1450;$toty=1220;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$postx=0; $posty=210;
								$face1x=50; $face1y=285;
								$face2x=165; $face2y=320;
								$face3x=399; $face3y=340;
								$face4x=595; $face4y=295;


								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1450;$toty=1220;	
							}

						}
					}

				}
				else{
			//one corner post	


					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=140; $face1y=205;
								$face2x=175; $face2y=210;
								$face3x=240; $face3y=260;
								$face4x=370; $face4y=360;
								$postx=3; $posty=165;


								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=175; $face1y=285;
								$face2x=307; $face2y=245;
								$face3x=345; $face3y=248;
								$face4x=450; $face4y=320;
								$postx=1; $posty=255;


								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="3rd Center Post from Left")
							{
								$face1x=240; $face1y=340;
								$face2x=399; $face2y=265;
								$face3x=480; $face3y=219;
								$face4x=510; $face4y=219;
								$postx=15; $posty=320;


								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1425;$toty=1225;		
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=155; $face1y=290;
								$face2x=250; $face2y=270;
								$face3x=390; $face3y=268;
								$face4x=530; $face4y=265;
								$postx=0; $posty=268;


								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=180; $face1y=310;
								$face2x=315; $face2y=265;
								$face3x=398; $face3y=255;
								$face4x=540; $face4y=265;
								$postx=0; $posty=275;


								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1425;$toty=1225;		
							}
							if($postposition=="3rd Center Post from Left")
							{
								$face1x=70; $face1y=250;
								$face2x=210; $face2y=270;
								$face3x=350; $face3y=290;
								$face4x=455; $face4y=320;
								$postx=0; $posty=185;


								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1425;$toty=1225;		
							}

						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=80; $face1y=340;
								$face2x=405; $face2y=340;
								$face3x=500; $face3y=255;
								$face4x=585; $face4y=199;
								$postx=27; $posty=213;


								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=80; $face1y=290;
								$face2x=280; $face2y=365;
								$face3x=545; $face3y=335;
								$face4x=595; $face4y=220;
								$postx=0; $posty=165;


								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="3rd Center Post from Left")
							{
								$face1x=70; $face1y=210;
								$face2x=180; $face2y=260;
								$face3x=320; $face3y=330;
								$face4x=595; $face4y=300;
								$postx=1; $posty=128;


								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1425;$toty=1225;	
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=125; $face1y=340;
								$face2x=355; $face2y=310;
								$face3x=485; $face3y=250;
								$face4x=585; $face4y=210;
								$postx=01; $posty=250;


								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1425;$toty=1225;		
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=110; $face1y=299;
								$face2x=275; $face2y=320;
								$face3x=490; $face3y=300;
								$face4x=585; $face4y=255;
								$postx=0; $posty=225;


								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="3rd Center Post from Left")
							{
								$face1x=80; $face1y=265;
								$face2x=210; $face2y=290;
								$face3x=370; $face3y=320;
								$face4x=550; $face4y=320;
								$postx=0; $posty=190;


								$rightx=40000;$righty=20000;
								$leftx=17000;$lefty=9000;
								$totx=1425;$toty=1225;	
							}

						}
					}






				}
			}	
			
			
		}

		else{

			
			
			
			if($endpaneltype=='Extended')
			{

				$face1x=200; $face1y=330;
				$face2x=345; $face2y=265;
				$face3x=465; $face3y=225;
				$face4x=560; $face4y=180;
				
				
				$postx=5; $posty=320;

				$rightx=555; $righty=35;
				$leftx=35; $lefty=185;
				$totx=435;$toty=270;


			}
			else{
				$face1x=180; $face1y=330;
				$face2x=320; $face2y=270;
				$face3x=440; $face3y=220;
				$face4x=530; $face4y=185;
				$postx=560; $posty=120;
				$rightx=40000;$righty=2000;
				$leftx=17000;$lefty=9000;
				$totx=415;$toty=260;
			}
			
		}
	}
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;
	echo getcwd();

	
	/*Resize 1920X1440 to 640X480 Start*/
	$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

	$my_img =imagecreatefromjpeg("../".$path);
    list($origWidth, $origHeight) = getimagesize("../".$path);

   
 
	
	$w =640;
	$h =480;
   // $img=$target;
    $extn = strtolower($extn);
 
        //$img = imagecreatefromjpeg($targett);
		
	
  
    $a = imagecreatetruecolor($w, $h);
    
    imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);
	
    imagejpeg($a,'img2/'.$newcpy,300);

	
	
	
	
	
	
	
	
	$resize="img2/".$osc."_".$im_id.".jpg";
	
	
		/*Resize 1920X1440 to 640X480 END*/
	
	
	
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;
	echo getcwd();

		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

		//For Online.....
		//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
		//echo $face1;
	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $face2x, $face2y, $face2, $text_colour );
	imagestring( $my_img, 5, $face3x, $face3y, $face3, $text_colour);
	imagestring( $my_img, 5, $face4x, $face4y, $face4, $text_colour);
	imagestring( $my_img, 5, $postx, $posty, $post, $text_colour);
	imagestring( $my_img, 5, $leftx, $lefty, $left, $text_colour);
	imagestring( $my_img, 5, $rightx, $righty, $right, $text_colour);
	imagestring( $my_img, 5, $totx, $toty,$tot,$text_colour);

//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// $marge_right = 545;
		// $marge_bottom = 425;
		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);



//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));


	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");		
		
		
		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/

	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
	imagedestroy( $my_img );
}else if($mod=="EP21"){
	if($ends==1){
			//$img="NORADBOTHENDS.jpg";
	}else if($ends==2){
			//$img="NORADRIGHTEND.jpg";
		$left="";
	}else if($ends==3){
			//$img="NORADLEFTEND.jpg";
		$right="";
	}else if($ends==4){
			//$img="NORADNOENDS.jpg";
		$right="";
		$left="";
	}

	if($bay=="1BAY"){
		if($face1=="No Glass"){
			$face1="";
			$left="";
			$right="";
			$tot="";
		}
		$path="images/"."EP-211BAY/".$img.".jpg";
		
		
		if($endpaneltype=='Extended')
		{
			$face1x=400;$face1y=335;
			$postx=450; $posty=170;
			$rightx=397;$righty=15;
			$leftx=120;$lefty=65;
			$totx=460;$toty=370;

		}
		else{
		
		$face1x=400;$face1y=335;
		$postx=500; $posty=150;
		$rightx=4000;$righty=20;
		$leftx=1700;$lefty=90;
		$totx=450;$toty=380;
		}
		
		
		
		
	}else if($bay=="2BAY"){
		if($face1=="No Glass"||$face2=="No Glass"){
			$face1="";
			$face2="";
			$left="";
			$right="";
			$tot="";
		}
		$path="images/"."EP-212BAY/".$img.".jpg";




		if($corneryes=="1")
		{
			
		
			
			if($endpaneltype=='Extended')
			{


			//Extended Endpanel
				if($posttype=="Inner")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=260;$face1y=305;
							$face2x=360;$face2y=305;
							$postx=570; $posty=230;


							$rightx=585; $righty=320;
							$leftx=37; $lefty=320;
							$totx=1135;$toty=1465;	
						}


					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=270;$face1y=335;
							$face2x=480;$face2y=285;
							$postx=565; $posty=195;


							$rightx=595; $righty=47;
							$leftx=35; $lefty=87;
							$totx=1135;$toty=1465;		
						}


					}
				}
				if($posttype=="Outer")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=120;$face1y=340;
							$face2x=485;$face2y=340;
							$postx=12; $posty=230;


							$rightx=465; $righty=30;
							$leftx=130; $lefty=25;
							$totx=1135;$toty=1465;		
						}


					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=135;$face1y=370;
							$face2x=520;$face2y=340;
							$postx=2; $posty=215;


							$rightx=525; $righty=45;
							$leftx=70; $lefty=75;
							$totx=1135;$toty=1465;		
						}


					}
				}
			}
			else{
			//Normal Endpanel	
			
			
			if($posttype=="Inner")
			{
				if($postdegree=="90 Degree")
				{
					if($postposition=="1st Center Post from Left")
					{

						$face1x=260;$face1y=305;
						$face2x=370;$face2y=305;


						$postx=540; $posty=120;
						$rightx=4650; $righty=15;
						$leftx=8500; $lefty=105;
						$totx=1430;$toty=1270;	
					}
				}
				if($postdegree=="135 Degree")
				{
					if($postposition=="1st Center Post from Left")
					{

						$face1x=275;$face1y=330;
						$face2x=490;$face2y=285;


						$postx=540; $posty=120;
						$rightx=4650; $righty=15;
						$leftx=8500; $lefty=105;
						$totx=1430;$toty=1270;	
					}
				}
			}
			
			if($posttype=="Outer")
			{
				if($postdegree=="90 Degree")
				{
					if($postposition=="1st Center Post from Left")
					{

						$face1x=110;$face1y=340;
						$face2x=500;$face2y=340;


						$postx=540; $posty=120;
						$rightx=4650; $righty=15;
						$leftx=8500; $lefty=105;
						$totx=1430;$toty=1270;	
					}
				}
				if($postdegree=="135 Degree")
				{
					if($postposition=="1st Center Post from Left")
					{

						$face1x=135;$face1y=365;
						$face2x=520;$face2y=335;


						$postx=540; $posty=120;
						$rightx=4650; $righty=15;
						$leftx=8500; $lefty=105;
						$totx=1430;$toty=1270;	
					}
				}
			}
			
		}
			
		}
		
		
		
		else{
			
			if($endpaneltype=='Extended')
			{
			//Extended Endpanel
				$face1x=315;$face1y=345;
				$face2x=510;$face2y=240;
				$postx=525; $posty=155;
				$rightx=495; $righty=10;
				$leftx=40; $lefty=80;
				$totx=460;$toty=320;
			}
			else{
			
			
			$face1x=315;$face1y=345;
			$face2x=510;$face2y=240;
			$postx=540; $posty=120;
			$rightx=4650; $righty=15;
			$leftx=850; $lefty=105;
			$totx=460;$toty=320;
			
			}
		}
	}else if($bay=="3BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
			$left="";
			$right="";
			$tot="";
		}
		$path="images/"."EP-213BAY/".$img.".jpg";

		if($corneryes=="1")
		{
		
		
			if($endpaneltype=='Extended')
			{

			//Extended Endpanel
				if($noofcornerpostval=="2")	
				{
			//two corner post	


					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=2; $posty=290;	
								$face1x=260;$face1y=290;
								$face2x=310;$face2y=245;
								$face3x=365;$face3y=290;


								$rightx=525; $righty=360;
								$leftx=100; $lefty=365;
								$totx=1430;$toty=1240;	
							}


						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=2; $posty=265;	
								$face1x=188;$face1y=300;
								$face2x=314;$face2y=271;
								$face3x=449;$face3y=295;

								$rightx=594; $righty=145;
								$leftx=33; $lefty=153;
								$totx=1430;$toty=1240;	
							}


						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{

								$postx=540; $posty=185;		
								$face1x=47;$face1y=275;
								$face2x=310;$face2y=370;
								$face3x=590;$face3y=270;

								$rightx=426; $righty=83;
								$leftx=188; $lefty=86;
								$totx=1430;$toty=1240;	
							}


						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=5; $posty=235;		
								$face1x=65;$face1y=315;
								$face2x=355;$face2y=360;
								$face3x=590;$face3y=270;

								$rightx=550; $righty=60;
								$leftx=63; $lefty=90;
								$totx=1430;$toty=1240;	
							}


						}
					}	
				}
				else{
			//one corner post	




					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=180;$face1y=255;
								$face2x=255;$face2y=253;
								$face3x=395;$face3y=325;
								$postx=575; $posty=265;

								$rightx=595; $righty=340;
								$leftx=20; $lefty=265;
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
								//its not done
								$face1x=250;$face1y=310;
								$face2x=375;$face2y=245;
								$face3x=455;$face3y=245;
								$postx=575; $posty=190;

								$rightx=600; $righty=245;
								$leftx=30; $lefty=325;
								$totx=1420;$toty=1250;
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=230;$face1y=310;
								$face2x=370;$face2y=265;
								$face3x=530;$face3y=250;
								$postx=4; $posty=215;

								$rightx=590; $righty=80;
								$leftx=40; $lefty=140;
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=290;$face1y=340;
								$face2x=420;$face2y=250;
								$face3x=530;$face3y=220;
								$postx=4; $posty=215;

								$rightx=585; $righty=50;
								$leftx=45; $lefty=125;
								$totx=1420;$toty=1250;
							}

						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=110;$face1y=355;
								$face2x=460;$face2y=350;
								$face3x=590;$face3y=225;
								$postx=3; $posty=195;

								$rightx=535; $righty=20;
								$leftx=120; $lefty=60;
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=40;$face1y=235;
								$face2x=170;$face2y=335;
								$face3x=540;$face3y=350;
								$postx=2; $posty=170;

								$rightx=510; $righty=50;
								$leftx=90; $lefty=90;
								$totx=1420;$toty=1250;
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=90;$face1y=320;
								$face2x=355;$face2y=330;
								$face3x=540;$face3y=285;
								$postx=2; $posty=190;

								$rightx=585; $righty=75;
								$leftx=55; $lefty=95;
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=90;$face1y=300;
								$face2x=290;$face2y=335;
								$face3x=560;$face3y=310;
								$postx=2; $posty=250;

								$rightx=560; $righty=95;
								$leftx=40; $lefty=90;
								$totx=1420;$toty=1250;
							}

						}
					}





				}
			}
			else{
			//normal panel	
		

			if($noofcornerpostval=="2")	
			{
			//two corner post	
				
				
				if($posttype=="Inner")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=260;$face1y=290;
							$face2x=310;$face2y=246;
							$face3x=365;$face3y=290;

							$postx=555; $posty=95;
							$rightx=4950; $righty=10;
							$leftx=5500; $lefty=155;
							$totx=1430;$toty=1240;	
						}


					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=184;$face1y=299;
							$face2x=312;$face2y=270;
							$face3x=450;$face3y=295;

							$postx=555; $posty=95;
							$rightx=49500; $righty=10;
							$leftx=5500; $lefty=155;
							$totx=1430;$toty=1240;	
						}


					}
				}
				if($posttype=="Outer")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=45;$face1y=275;
							$face2x=310;$face2y=365;
							$face3x=590;$face3y=270;

							$postx=555; $posty=95;
							$rightx=4950; $righty=10;
							$leftx=5500; $lefty=155;
							$totx=1430;$toty=1240;	
						}


					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=65;$face1y=310;
							$face2x=360;$face2y=355;
							$face3x=590;$face3y=270;

							$postx=555; $posty=95;
							$rightx=4950; $righty=10;
							$leftx=5500; $lefty=155;
							$totx=1430;$toty=1240;	
						}


					}
				}	
			}
			else{
			//one corner post	
				
				
				if($posttype=="Inner")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=180;$face1y=255;
							$face2x=260;$face2y=257;
							$face3x=390;$face3y=330;

							$postx=555; $posty=95;
							$rightx=4950; $righty=10;
							$leftx=5500; $lefty=155;
							$totx=1430;$toty=1240;	
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=250;$face1y=310;
							$face2x=365;$face2y=250;
							$face3x=445;$face3y=250;

							$postx=555; $posty=95;
							$rightx=4950; $righty=10;
							$leftx=5500; $lefty=155;
							$totx=1430;$toty=1240;	
						}

					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=230;$face1y=305;
							$face2x=370;$face2y=265;
							$face3x=540;$face3y=250;

							$postx=555; $posty=95;
							$rightx=4950; $righty=10;
							$leftx=5500; $lefty=155;
							$totx=1430;$toty=1240;	
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=290;$face1y=330;
							$face2x=410;$face2y=250;
							$face3x=540;$face3y=215;

							$postx=555; $posty=95;
							$rightx=4950; $righty=10;
							$leftx=5500; $lefty=155;
							$totx=1430;$toty=1240;	
						}

					}
				}
				if($posttype=="Outer")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=110;$face1y=350;
							$face2x=470;$face2y=340;
							$face3x=590;$face3y=220;

							$postx=555; $posty=95;
							$rightx=4950; $righty=10;
							$leftx=5500; $lefty=155;
							$totx=1430;$toty=1240;	
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=30;$face1y=230;
							$face2x=170;$face2y=345;
							$face3x=530;$face3y=360;

							$postx=555; $posty=95;
							$rightx=4950; $righty=10;
							$leftx=5500; $lefty=155;
							$totx=1430;$toty=1240;		
						}

					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=90;$face1y=320;
							$face2x=350;$face2y=335;
							$face3x=540;$face3y=285;

							$postx=555; $posty=95;
							$rightx=4950; $righty=10;
							$leftx=5500; $lefty=155;
							$totx=1430;$toty=1240;	
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=95;$face1y=300;
							$face2x=290;$face2y=330;
							$face3x=555;$face3y=310;

							$postx=555; $posty=95;
							$rightx=4950; $righty=10;
							$leftx=5500; $lefty=155;
							$totx=1430;$toty=1240;	
						}

					}
				}





			}			


		}
			
			
		}
		else{
			
			//Extended Endpanel
			if($endpaneltype=='Extended')
			{
				$face1x=295;$face1y=340;
				$face2x=450;$face2y=245;
				$face3x=550;$face3y=185;
				$postx=560; $posty=160;

				$rightx=520; $righty=20;
				$leftx=45; $lefty=125;
				$totx=480;$toty=270;


			}
			else{
			//Normal Endpanel
			$face1x=295;$face1y=340;
			$face2x=450;$face2y=245;
			$face3x=550;$face3y=185;
			$postx=555; $posty=95;
			$rightx=4950; $righty=10;
			$leftx=5500; $lefty=155;
			$totx=480;$toty=270;
			
			}
		}

	}else if($bay=="4BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"||$face4=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
			$face4="";
			$left="";
			$right="";
			$tot="";
		}
		$path="images/"."EP-214BAY/".$img.".jpg";

		if($corneryes=="1")
		{


			
			//Extended Endpanel
			
			
			if($endpaneltype=='Extended')
			{
			//Extended Endpanel	
				if($noofcornerpostval=="2")	
				{
					//two corner post	

					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								//$face1x=240; $face1y=235;
								$postx=2; $posty=205;
								$face1x=227; $face1y=190;
								$face2x=265; $face2y=150;
								$face3x=310; $face3y=187;
								$face4x=320; $face4y=280;


								$rightx=505; $righty=405;
								$leftx=85;$lefty=255;
								$totx=1450;$toty=1220;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$postx=578; $posty=220;	
								$face1x=299; $face1y=305;
								$face2x=310; $face2y=215;
								$face3x=355; $face3y=180;
								$face4x=403; $face4y=215;


								$rightx=540; $righty=275;
								$leftx=107; $lefty=433;
								$totx=1450;$toty=1220;	
							}

						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{


								$postx=575; $posty=265;	
								$face1x=155; $face1y=257;
								$face2x=250; $face2y=233;
								$face3x=350; $face3y=248;
								$face4x=469; $face4y=290;


								$rightx=599; $righty=162;
								$leftx=25; $lefty=145;
								$totx=1450;$toty=1220;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$postx=575; $posty=265;	
								$face1x=165; $face1y=290;
								$face2x=280; $face2y=240;
								$face3x=378; $face3y=220;
								$face4x=490; $face4y=240;


								$rightx=609; $righty=120;
								$leftx=15; $lefty=155;
								$totx=1450;$toty=1220;		
							}

						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=520; $posty=130;
								$face1x=45; $face1y=275;
								$face2x=295; $face2y=385;
								$face3x=585; $face3y=275;
								$face4x=535; $face4y=180;


								$rightx=400; $righty=50;
								$leftx=204; $lefty=80;
								$totx=1450;$toty=1220;		
							}
							if($postposition=="2nd Center Post from Left")
							{
								$postx=550; $posty=185;
								$face1x=100; $face1y=190;
								$face2x=50; $face2y=280;
								$face3x=295; $face3y=405;
								$face4x=580; $face4y=290;




								$rightx=425; $righty=90;
								$leftx=225; $lefty=62;
								$totx=1450;$toty=1220;	
							}

						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=2; $posty=270;
								$face1x=40; $face1y=330;
								$face2x=270; $face2y=390;
								$face3x=505; $face3y=330;
								$face4x=590; $face4y=273;


								$rightx=560; $righty=125;
								$leftx=70; $lefty=147;
								$totx=1450;$toty=1220;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$postx=2; $posty=235;
								$face1x=45; $face1y=235;
								$face2x=150; $face2y=300;
								$face3x=410; $face3y=335;
								$face4x=599; $face4y=260;


								$rightx=560; $righty=85;
								$leftx=47; $lefty=80;
								$totx=1450;$toty=1220;	
							}

						}
					}

				}
				else{
					//one corner post	


					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=147; $face1y=197;
								$face2x=210; $face2y=203;
								$face3x=295; $face3y=260;
								$face4x=410; $face4y=340;
								$postx=570; $posty=280;


								$rightx=590; $righty=365;
								$leftx=10; $lefty=200;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=160; $face1y=275;
								$face2x=280; $face2y=225;
								$face3x=340; $face3y=230;
								$face4x=445; $face4y=280;
								$postx=570; $posty=250;


								$rightx=600; $righty=290;
								$leftx=17; $lefty=280;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="3rd Center Post from Left")
							{
								$face1x=205; $face1y=305;
								$face2x=340; $face2y=240;
								$face3x=430; $face3y=193;
								$face4x=490; $face4y=195;
								$postx=575; $posty=180;


								$rightx=610; $righty=197;
								$leftx=15; $lefty=320;
								$totx=1425;$toty=1225;		
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=185; $face1y=300;
								$face2x=300; $face2y=260;
								$face3x=435; $face3y=245;
								$face4x=560; $face4y=230;
								$postx=2; $posty=207;


								$rightx=603; $righty=97;
								$leftx=26; $lefty=182;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=210; $face1y=320;
								$face2x=320; $face2y=260;
								$face3x=430; $face3y=230;
								$face4x=565; $face4y=220;
								$postx=2; $posty=207;


								$rightx=607; $righty=90;
								$leftx=29; $lefty=172;
								$totx=1425;$toty=1225;		
							}
							if($postposition=="3rd Center Post from Left")
							{
								$face1x=60; $face1y=245;
								$face2x=180; $face2y=263;
								$face3x=320; $face3y=277;
								$face4x=435; $face4y=320;
								$postx=2; $posty=207;


								$rightx=587; $righty=180;
								$leftx=30; $lefty=115;
								$totx=1425;$toty=1225;	
							}

						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=80; $face1y=365;
								$face2x=390; $face2y=345;
								$face3x=530; $face3y=250;
								$face4x=600; $face4y=200;
								$postx=547; $posty=107;


								$rightx=560; $righty=43;
								$leftx=87; $lefty=93;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=50; $face1y=260;
								$face2x=185; $face2y=355;
								$face3x=480; $face3y=355;
								$face4x=595; $face4y=240;
								$postx=2; $posty=170;


								$rightx=545; $righty=60;
								$leftx=70; $lefty=80;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="3rd Center Post from Left")
							{
								$face1x=30; $face1y=170;
								$face2x=100; $face2y=230;
								$face3x=250; $face3y=340;
								$face4x=545; $face4y=350;
								$postx=1; $posty=150;


								$rightx=530; $righty=80;
								$leftx=75; $lefty=75;
								$totx=1425;$toty=1225;	
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=90; $face1y=350;
								$face2x=350; $face2y=320;
								$face3x=480; $face3y=260;
								$face4x=580; $face4y=220;
								$postx=05; $posty=300;


								$rightx=575; $righty=65;
								$leftx=30; $lefty=140;
								$totx=1425;$toty=1225;		
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=80; $face1y=302;
								$face2x=235; $face2y=330;
								$face3x=467; $face3y=310;
								$face4x=580; $face4y=265;
								$postx=05; $posty=300;


								$rightx=580; $righty=100;
								$leftx=28; $lefty=120;
								$totx=1425;$toty=1225;		
							}
							if($postposition=="3rd Center Post from Left")
							{
								$face1x=60; $face1y=260;
								$face2x=210; $face2y=287;
								$face3x=355; $face3y=307;
								$face4x=575; $face4y=300;
								$postx=1; $posty=233;


								$rightx=573; $righty=125;
								$leftx=30; $lefty=103;
								$totx=1425;$toty=1225;	
							}

						}
					}




				}
			}
			else{
				//normal endpanel


			if($noofcornerpostval=="2")	
			{
			//two corner post	
				
				if($posttype=="Inner")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
			//$face1x=240; $face1y=235;
							$face1x=225; $face1y=190;
							$face2x=260; $face2y=150;
							$face3x=305; $face3y=190;
							$face4x=315; $face4y=285;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=300; $face1y=310;
							$face2x=315; $face2y=215;
							$face3x=360; $face3y=180;
							$face4x=405; $face4y=215;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}

					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=150; $face1y=255;
							$face2x=250; $face2y=233;
							$face3x=350; $face3y=250;
							$face4x=475; $face4y=295;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=165; $face1y=285;
							$face2x=280; $face2y=240;
							$face3x=380; $face3y=220;
							$face4x=490; $face4y=240;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}

					}
				}
				if($posttype=="Outer")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=50; $face1y=270;
							$face2x=300; $face2y=385;
							$face3x=585; $face3y=275;
							$face4x=535; $face4y=175;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;		
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=100; $face1y=190;
							$face2x=50; $face2y=280;
							$face3x=310; $face3y=400;
							$face4x=580; $face4y=285;



							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}

					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=40; $face1y=330;
							$face2x=260; $face2y=393;
							$face3x=510; $face3y=335;
							$face4x=590; $face4y=265;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=30; $face1y=235;
							$face2x=150; $face2y=300;
							$face3x=399; $face3y=340;
							$face4x=595; $face4y=260;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}

					}
				}
				
			}
			else{
			//one corner post	
				if($posttype=="Inner")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=145; $face1y=195;
							$face2x=200; $face2y=200;
							$face3x=285; $face3y=260;
							$face4x=410; $face4y=345;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=170; $face1y=275;
							$face2x=280; $face2y=225;
							$face3x=340; $face3y=230;
							$face4x=450; $face4y=280;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}
						if($postposition=="3rd Center Post from Left")
						{
							$face1x=205; $face1y=310;
							$face2x=335; $face2y=240;
							$face3x=430; $face3y=193;
							$face4x=490; $face4y=193;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;		
						}
					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=180; $face1y=300;
							$face2x=295; $face2y=263;
							$face3x=440; $face3y=243;
							$face4x=560; $face4y=230;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=210; $face1y=320;
							$face2x=320; $face2y=255;
							$face3x=430; $face3y=230;
							$face4x=560; $face4y=220;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}
						if($postposition=="3rd Center Post from Left")
						{
							$face1x=60; $face1y=245;
							$face2x=180; $face2y=260;
							$face3x=315; $face3y=278;
							$face4x=435; $face4y=315;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}
					}
				}
				if($posttype=="Outer")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=80; $face1y=355;
							$face2x=390; $face2y=350;
							$face3x=530; $face3y=250;
							$face4x=595; $face4y=197;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;		
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=50; $face1y=260;
							$face2x=190; $face2y=350;
							$face3x=480; $face3y=350;
							$face4x=590; $face4y=245;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}
						if($postposition=="3rd Center Post from Left")
						{
							$face1x=25; $face1y=175;
							$face2x=100; $face2y=230;
							$face3x=240; $face3y=340;
							$face4x=540; $face4y=350;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}
					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=90; $face1y=350;
							$face2x=350; $face2y=320;
							$face3x=480; $face3y=260;
							$face4x=585; $face4y=220;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=80; $face1y=300;
							$face2x=230; $face2y=325;
							$face3x=455; $face3y=310;
							$face4x=575; $face4y=265;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}
						if($postposition=="3rd Center Post from Left")
						{
							$face1x=60; $face1y=260;
							$face2x=210; $face2y=285;
							$face3x=360; $face3y=312;
							$face4x=575; $face4y=300;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}
					}
				}




			}			



			}
			
			
			
		}
		else{
			
			
			if($endpaneltype=='Extended')
			{
				$face1x=230; $face1y=320;
				$face2x=385; $face2y=240;
				$face3x=490; $face3y=190;
				$face4x=570; $face4y=155;
				
				
				$postx=580; $posty=110;

				$rightx=545; $righty=25;
				$leftx=20; $lefty=140;
				$totx=450;$toty=240;

			}
			else{
			
			
			$face1x=230; $face1y=320;
			$face2x=385; $face2y=240;
			$face3x=490; $face3y=190;
			$face4x=570; $face4y=155;
			$postx=575; $posty=85;
			$rightx=5250; $righty=15;
			$leftx=4000; $lefty=180;
			$totx=450;$toty=240;
			
			}
		}

	}
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;
	echo getcwd();

	
	/*Resize 1920X1440 to 640X480 Start*/
	$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

	$my_img =imagecreatefromjpeg("../".$path);
    list($origWidth, $origHeight) = getimagesize("../".$path);

   
 
	
	$w =640;
	$h =480;
   // $img=$target;
    $extn = strtolower($extn);
 
        //$img = imagecreatefromjpeg($targett);
		
	
  
    $a = imagecreatetruecolor($w, $h);
    
    imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);
	
    imagejpeg($a,'img2/'.$newcpy,300);

	
	
	
	
	
	
	
	
	$resize="img2/".$osc."_".$im_id.".jpg";
	
	
		/*Resize 1920X1440 to 640X480 END*/
	


		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

		//For Online.....
		//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
		//echo $face1;
	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $face2x, $face2y, $face2, $text_colour );
	imagestring( $my_img, 5, $face3x, $face3y, $face3, $text_colour);
	imagestring( $my_img, 5, $face4x, $face4y, $face4, $text_colour);
	imagestring( $my_img, 5, $postx, $posty, $post, $text_colour);
	imagestring( $my_img, 5, $leftx, $lefty, $left, $text_colour);
	imagestring( $my_img, 5, $rightx, $righty, $right, $text_colour);
	imagestring( $my_img, 5, $totx, $toty,$tot,$text_colour);

//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// $marge_right = 545;
		// $marge_bottom = 425;
		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);


//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));



	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");		
		
		
		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/

	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
	imagedestroy( $my_img );
}else if($mod=="EP22"){
	if($ends==1){
			//$img="NORADBOTHENDS.jpg";
	}else if($ends==2){
			//$img="NORADRIGHTEND.jpg";
		$left="";
	}else if($ends==3){
			//$img="NORADLEFTEND.jpg";
		$right="";
	}else if($ends==4){
			//$img="NORADNOENDS.jpg";
		$right="";
		$left="";
	}

	if($bay=="1BAY"){
		if($face1=="No Glass"){
			$face1="";
			$left="";
			$right="";
			$tot="";
		}
		$path="images/"."EP-221BAY/".$img.".jpg";

		if($endpaneltype=='Extended')
		{
			$face1x=400;$face1y=335;
			$postx=450; $posty=170;
			$rightx=395;$righty=10;
			$leftx=120;$lefty=60;
			$totx=457;$toty=375;

		}
		else{
		$face1x=390;$face1y=333;
		$postx=500; $posty=150;
		$rightx=4000;$righty=20;
		$leftx=1700;$lefty=90;
		$totx=450;$toty=373;
		}
		
		
		
	}else if($bay=="2BAY"){
		if($face1=="No Glass"||$face2=="No Glass"){
			$face1="";
			$face2="";
			$left="";
			$right="";
			$tot="";
		}
		$path="images/"."EP-222BAY/".$img.".jpg";

		if($corneryes=="1")
		{
			
		
			
			if($endpaneltype=='Extended')
			{


			//Extended Endpanel
				if($posttype=="Inner")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=260;$face1y=305;
							$face2x=360;$face2y=305;
							$postx=570; $posty=230;


							$rightx=585; $righty=320;
							$leftx=37; $lefty=320;
							$totx=1135;$toty=1465;	
						}


					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=270;$face1y=335;
							$face2x=480;$face2y=285;
							$postx=565; $posty=195;


							$rightx=595; $righty=47;
							$leftx=35; $lefty=87;
							$totx=1135;$toty=1465;		
						}


					}
				}
				if($posttype=="Outer")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=120;$face1y=340;
							$face2x=485;$face2y=340;
							$postx=12; $posty=230;


							$rightx=465; $righty=30;
							$leftx=130; $lefty=25;
							$totx=1135;$toty=1465;		
						}


					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=135;$face1y=370;
							$face2x=520;$face2y=340;
							$postx=2; $posty=215;


							$rightx=525; $righty=45;
							$leftx=70; $lefty=75;
							$totx=1135;$toty=1465;		
						}


					}
				}
			}
			else{
			//Normal Endpanel	
				
			
			
			if($posttype=="Inner")
			{
				if($postdegree=="90 Degree")
				{
					if($postposition=="1st Center Post from Left")
					{

						$face1x=260;$face1y=305;
						$face2x=370;$face2y=305;


						$postx=540; $posty=120;
						$rightx=4650; $righty=15;
						$leftx=8500; $lefty=105;
						$totx=1430;$toty=1270;	
					}
				}
				if($postdegree=="135 Degree")
				{
					if($postposition=="1st Center Post from Left")
					{

						$face1x=275;$face1y=330;
						$face2x=490;$face2y=285;


						$postx=540; $posty=120;
						$rightx=4650; $righty=15;
						$leftx=8500; $lefty=105;
						$totx=1430;$toty=1270;	
					}
				}
			}
			
			if($posttype=="Outer")
			{
				if($postdegree=="90 Degree")
				{
					if($postposition=="1st Center Post from Left")
					{

						$face1x=110;$face1y=340;
						$face2x=500;$face2y=340;


						$postx=540; $posty=120;
						$rightx=4650; $righty=15;
						$leftx=8500; $lefty=105;
						$totx=1430;$toty=1270;	
					}
				}
				if($postdegree=="135 Degree")
				{
					if($postposition=="1st Center Post from Left")
					{

						$face1x=135;$face1y=365;
						$face2x=520;$face2y=335;


						$postx=540; $posty=120;
						$rightx=4650; $righty=15;
						$leftx=8500; $lefty=105;
						$totx=1430;$toty=1270;	
					}
				}
			}
			
		}	
			
			
		}
		else{
			
			
			if($endpaneltype=='Extended')
			{
			//Extended Endpanel
				$face1x=320;$face1y=345;
				$face2x=510;$face2y=240;
				$postx=525; $posty=155;
				$rightx=495; $righty=05;
				$leftx=45; $lefty=80;
				$totx=470;$toty=310;
			}
			else{
			
			$face1x=320;$face1y=345;
			$face2x=510;$face2y=240;
			$postx=540; $posty=120;
			$rightx=4650; $righty=15;
			$leftx=850; $lefty=105;
			$totx=470;$toty=310;
			}
			
			
		}

	}else if($bay=="3BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
			$left="";
			$right="";
			$tot="";
		}
		$path="images/"."EP-223BAY/".$img.".jpg";

		if($corneryes=="1")
		{


		
		
			if($endpaneltype=='Extended')
			{

			//Extended Endpanel
				if($noofcornerpostval=="2")	
				{
			//two corner post	


					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=2; $posty=290;	
								$face1x=260;$face1y=290;
								$face2x=310;$face2y=245;
								$face3x=365;$face3y=290;


								$rightx=525; $righty=360;
								$leftx=100; $lefty=365;
								$totx=1430;$toty=1240;	
							}


						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=2; $posty=265;	
								$face1x=188;$face1y=300;
								$face2x=314;$face2y=271;
								$face3x=449;$face3y=295;

								$rightx=594; $righty=145;
								$leftx=33; $lefty=153;
								$totx=1430;$toty=1240;	
							}


						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{

								$postx=540; $posty=185;		
								$face1x=47;$face1y=275;
								$face2x=310;$face2y=370;
								$face3x=590;$face3y=270;

								$rightx=426; $righty=83;
								$leftx=188; $lefty=86;
								$totx=1430;$toty=1240;	
							}


						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=5; $posty=235;		
								$face1x=65;$face1y=315;
								$face2x=355;$face2y=360;
								$face3x=590;$face3y=270;

								$rightx=550; $righty=60;
								$leftx=63; $lefty=90;
								$totx=1430;$toty=1240;	
							}


						}
					}	
				}
				else{
			//one corner post	




					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=180;$face1y=255;
								$face2x=255;$face2y=253;
								$face3x=395;$face3y=325;
								$postx=575; $posty=265;

								$rightx=595; $righty=340;
								$leftx=20; $lefty=265;
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
								//its not done
								$face1x=250;$face1y=310;
								$face2x=375;$face2y=245;
								$face3x=455;$face3y=245;
								$postx=575; $posty=190;

								$rightx=600; $righty=245;
								$leftx=30; $lefty=325;
								$totx=1420;$toty=1250;
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=230;$face1y=310;
								$face2x=370;$face2y=265;
								$face3x=530;$face3y=250;
								$postx=4; $posty=215;

								$rightx=590; $righty=80;
								$leftx=40; $lefty=140;
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=290;$face1y=340;
								$face2x=420;$face2y=250;
								$face3x=530;$face3y=220;
								$postx=4; $posty=215;

								$rightx=585; $righty=50;
								$leftx=45; $lefty=125;
								$totx=1420;$toty=1250;
							}

						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=110;$face1y=355;
								$face2x=460;$face2y=350;
								$face3x=590;$face3y=225;
								$postx=3; $posty=195;

								$rightx=535; $righty=20;
								$leftx=120; $lefty=60;
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=40;$face1y=235;
								$face2x=170;$face2y=335;
								$face3x=540;$face3y=350;
								$postx=2; $posty=170;

								$rightx=510; $righty=50;
								$leftx=90; $lefty=90;
								$totx=1420;$toty=1250;
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=85;$face1y=320;
								$face2x=350;$face2y=335;
								$face3x=540;$face3y=285;
								$postx=2; $posty=190;

								$rightx=580; $righty=75;
								$leftx=55; $lefty=93;
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=100;$face1y=300;
								$face2x=290;$face2y=335;
								$face3x=560;$face3y=307;
								$postx=2; $posty=250;

								$rightx=555; $righty=95;
								$leftx=40; $lefty=92;
								$totx=1420;$toty=1250;
							}

						}
					}





				}
			}
			else{
			//normal panel	
		


			if($noofcornerpostval=="2")	
			{
			//two corner post	
				
				
				if($posttype=="Inner")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=260;$face1y=290;
							$face2x=310;$face2y=246;
							$face3x=365;$face3y=290;

							$postx=555; $posty=95;
							$rightx=4950; $righty=10;
							$leftx=5500; $lefty=155;
							$totx=1430;$toty=1240;	
						}


					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=184;$face1y=299;
							$face2x=312;$face2y=270;
							$face3x=450;$face3y=295;

							$postx=555; $posty=95;
							$rightx=49500; $righty=10;
							$leftx=5500; $lefty=155;
							$totx=1430;$toty=1240;	
						}


					}
				}
				if($posttype=="Outer")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=45;$face1y=275;
							$face2x=310;$face2y=365;
							$face3x=590;$face3y=270;

							$postx=555; $posty=95;
							$rightx=4950; $righty=10;
							$leftx=5500; $lefty=155;
							$totx=1430;$toty=1240;	
						}


					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=65;$face1y=310;
							$face2x=360;$face2y=355;
							$face3x=590;$face3y=270;

							$postx=555; $posty=95;
							$rightx=4950; $righty=10;
							$leftx=5500; $lefty=155;
							$totx=1430;$toty=1240;	
						}


					}
				}	
			}
			else{
			//one corner post	
				
				
				if($posttype=="Inner")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=180;$face1y=255;
							$face2x=260;$face2y=257;
							$face3x=390;$face3y=330;

							$postx=555; $posty=95;
							$rightx=4950; $righty=10;
							$leftx=5500; $lefty=155;
							$totx=1430;$toty=1240;	
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=250;$face1y=310;
							$face2x=365;$face2y=250;
							$face3x=445;$face3y=250;

							$postx=555; $posty=95;
							$rightx=4950; $righty=10;
							$leftx=5500; $lefty=155;
							$totx=1430;$toty=1240;	
						}

					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=230;$face1y=305;
							$face2x=370;$face2y=265;
							$face3x=540;$face3y=250;

							$postx=555; $posty=95;
							$rightx=4950; $righty=10;
							$leftx=5500; $lefty=155;
							$totx=1430;$toty=1240;	
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=290;$face1y=330;
							$face2x=410;$face2y=250;
							$face3x=540;$face3y=215;

							$postx=555; $posty=95;
							$rightx=4950; $righty=10;
							$leftx=5500; $lefty=155;
							$totx=1430;$toty=1240;	
						}

					}
				}
				if($posttype=="Outer")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=110;$face1y=350;
							$face2x=470;$face2y=340;
							$face3x=590;$face3y=220;

							$postx=555; $posty=95;
							$rightx=4950; $righty=10;
							$leftx=5500; $lefty=155;
							$totx=1430;$toty=1240;	
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=30;$face1y=230;
							$face2x=170;$face2y=345;
							$face3x=530;$face3y=360;

							$postx=555; $posty=95;
							$rightx=4950; $righty=10;
							$leftx=5500; $lefty=155;
							$totx=1430;$toty=1240;		
						}

					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=90;$face1y=320;
							$face2x=350;$face2y=335;
							$face3x=540;$face3y=285;

							$postx=555; $posty=95;
							$rightx=4950; $righty=10;
							$leftx=5500; $lefty=155;
							$totx=1430;$toty=1240;	
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=95;$face1y=300;
							$face2x=290;$face2y=330;
							$face3x=555;$face3y=310;

							$postx=555; $posty=95;
							$rightx=4950; $righty=10;
							$leftx=5500; $lefty=155;
							$totx=1430;$toty=1240;	
						}

					}
				}



				
			}


			
			
			
		}	
			
			
			
		}
		else{
			
				//Extended Endpanel
			if($endpaneltype=='Extended')
			{
				$face1x=290;$face1y=345;
				$face2x=455;$face2y=250;
				$face3x=555;$face3y=180;
				$postx=560; $posty=160;

				$rightx=525; $righty=20;
				$leftx=50; $lefty=125;
				$totx=485;$toty=270;


			}
			else{
			//Normal Endpanel
			$face1x=290;$face1y=345;
			$face2x=455;$face2y=250;
			$face3x=555;$face3y=180;
			$postx=555; $posty=95;
			$rightx=4950; $righty=10;
			$leftx=5500; $lefty=155;
			$totx=485;$toty=270;
			
			}
			
		}
		
		
	}else if($bay=="4BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"||$face4=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
			$face4="";
			$left="";
			$right="";
			$tot="";
		}
		$path="images/"."EP-224BAY/".$img.".jpg";

		if($corneryes=="1")
		{
			
			
		
			//Extended Endpanel
			
			
			if($endpaneltype=='Extended')
			{
			//Extended Endpanel	
				if($noofcornerpostval=="2")	
				{
					//two corner post	

					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								//$face1x=240; $face1y=235;
								$postx=2; $posty=205;
								$face1x=227; $face1y=190;
								$face2x=265; $face2y=150;
								$face3x=310; $face3y=187;
								$face4x=320; $face4y=280;


								$rightx=505; $righty=405;
								$leftx=85;$lefty=255;
								$totx=1450;$toty=1220;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$postx=578; $posty=220;	
								$face1x=299; $face1y=305;
								$face2x=310; $face2y=215;
								$face3x=355; $face3y=180;
								$face4x=403; $face4y=215;


								$rightx=540; $righty=275;
								$leftx=107; $lefty=433;
								$totx=1450;$toty=1220;	
							}

						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{


								$postx=575; $posty=265;	
								$face1x=155; $face1y=257;
								$face2x=250; $face2y=233;
								$face3x=350; $face3y=248;
								$face4x=469; $face4y=290;


								$rightx=599; $righty=162;
								$leftx=25; $lefty=145;
								$totx=1450;$toty=1220;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$postx=575; $posty=265;	
								$face1x=165; $face1y=290;
								$face2x=280; $face2y=240;
								$face3x=378; $face3y=220;
								$face4x=490; $face4y=240;


								$rightx=609; $righty=120;
								$leftx=15; $lefty=155;
								$totx=1450;$toty=1220;		
							}

						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=520; $posty=130;
								$face1x=45; $face1y=275;
								$face2x=295; $face2y=385;
								$face3x=585; $face3y=275;
								$face4x=535; $face4y=180;


								$rightx=400; $righty=50;
								$leftx=204; $lefty=80;
								$totx=1450;$toty=1220;		
							}
							if($postposition=="2nd Center Post from Left")
							{
								$postx=550; $posty=185;
								$face1x=100; $face1y=190;
								$face2x=50; $face2y=280;
								$face3x=295; $face3y=405;
								$face4x=580; $face4y=290;




								$rightx=425; $righty=90;
								$leftx=225; $lefty=62;
								$totx=1450;$toty=1220;	
							}

						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=2; $posty=270;
								$face1x=40; $face1y=330;
								$face2x=270; $face2y=390;
								$face3x=505; $face3y=330;
								$face4x=590; $face4y=273;


								$rightx=560; $righty=125;
								$leftx=70; $lefty=147;
								$totx=1450;$toty=1220;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$postx=2; $posty=235;
								$face1x=45; $face1y=235;
								$face2x=150; $face2y=300;
								$face3x=410; $face3y=335;
								$face4x=599; $face4y=260;


								$rightx=560; $righty=85;
								$leftx=47; $lefty=80;
								$totx=1450;$toty=1220;	
							}

						}
					}

				}
				else{
					//one corner post	


					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=147; $face1y=197;
								$face2x=210; $face2y=203;
								$face3x=295; $face3y=260;
								$face4x=410; $face4y=340;
								$postx=570; $posty=280;


								$rightx=590; $righty=365;
								$leftx=10; $lefty=200;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=160; $face1y=275;
								$face2x=280; $face2y=225;
								$face3x=340; $face3y=230;
								$face4x=445; $face4y=280;
								$postx=570; $posty=250;


								$rightx=600; $righty=290;
								$leftx=17; $lefty=280;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="3rd Center Post from Left")
							{
								$face1x=205; $face1y=305;
								$face2x=340; $face2y=240;
								$face3x=430; $face3y=193;
								$face4x=490; $face4y=195;
								$postx=575; $posty=180;


								$rightx=610; $righty=197;
								$leftx=15; $lefty=320;
								$totx=1425;$toty=1225;		
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=185; $face1y=300;
								$face2x=300; $face2y=260;
								$face3x=435; $face3y=245;
								$face4x=560; $face4y=230;
								$postx=2; $posty=207;


								$rightx=603; $righty=97;
								$leftx=26; $lefty=182;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=210; $face1y=320;
								$face2x=320; $face2y=260;
								$face3x=430; $face3y=230;
								$face4x=565; $face4y=220;
								$postx=2; $posty=207;


								$rightx=607; $righty=90;
								$leftx=29; $lefty=172;
								$totx=1425;$toty=1225;		
							}
							if($postposition=="3rd Center Post from Left")
							{
								$face1x=60; $face1y=245;
								$face2x=180; $face2y=263;
								$face3x=320; $face3y=277;
								$face4x=435; $face4y=320;
								$postx=2; $posty=207;


								$rightx=587; $righty=180;
								$leftx=30; $lefty=115;
								$totx=1425;$toty=1225;	
							}

						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=80; $face1y=365;
								$face2x=390; $face2y=345;
								$face3x=530; $face3y=250;
								$face4x=600; $face4y=200;
								$postx=547; $posty=107;


								$rightx=560; $righty=43;
								$leftx=87; $lefty=93;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=50; $face1y=260;
								$face2x=185; $face2y=355;
								$face3x=480; $face3y=355;
								$face4x=595; $face4y=240;
								$postx=2; $posty=170;


								$rightx=545; $righty=60;
								$leftx=70; $lefty=80;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="3rd Center Post from Left")
							{
								$face1x=30; $face1y=170;
								$face2x=100; $face2y=230;
								$face3x=250; $face3y=340;
								$face4x=545; $face4y=350;
								$postx=1; $posty=150;


								$rightx=530; $righty=80;
								$leftx=75; $lefty=75;
								$totx=1425;$toty=1225;	
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=90; $face1y=350;
								$face2x=350; $face2y=320;
								$face3x=480; $face3y=260;
								$face4x=580; $face4y=220;
								$postx=05; $posty=300;


								$rightx=575; $righty=65;
								$leftx=30; $lefty=140;
								$totx=1425;$toty=1225;		
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=80; $face1y=302;
								$face2x=235; $face2y=330;
								$face3x=467; $face3y=310;
								$face4x=580; $face4y=265;
								$postx=05; $posty=300;


								$rightx=580; $righty=100;
								$leftx=28; $lefty=120;
								$totx=1425;$toty=1225;		
							}
							if($postposition=="3rd Center Post from Left")
							{
								$face1x=60; $face1y=260;
								$face2x=210; $face2y=287;
								$face3x=355; $face3y=307;
								$face4x=575; $face4y=300;
								$postx=1; $posty=233;


								$rightx=573; $righty=125;
								$leftx=30; $lefty=103;
								$totx=1425;$toty=1225;	
							}

						}
					}




				}
			}
			else{
				//normal endpanel
	
			
			

			if($noofcornerpostval=="2")	
			{
			//two corner post	
				
				if($posttype=="Inner")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							//$face1x=240; $face1y=235;
							$face1x=225; $face1y=190;
							$face2x=260; $face2y=150;
							$face3x=305; $face3y=190;
							$face4x=315; $face4y=285;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=300; $face1y=310;
							$face2x=315; $face2y=215;
							$face3x=360; $face3y=180;
							$face4x=405; $face4y=215;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}

					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=150; $face1y=255;
							$face2x=250; $face2y=233;
							$face3x=350; $face3y=250;
							$face4x=475; $face4y=295;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=165; $face1y=285;
							$face2x=280; $face2y=240;
							$face3x=380; $face3y=220;
							$face4x=490; $face4y=240;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}

					}
				}
				if($posttype=="Outer")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=50; $face1y=270;
							$face2x=300; $face2y=385;
							$face3x=585; $face3y=275;
							$face4x=535; $face4y=175;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;		
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=100; $face1y=190;
							$face2x=50; $face2y=280;
							$face3x=310; $face3y=400;
							$face4x=580; $face4y=285;



							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}

					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=40; $face1y=330;
							$face2x=260; $face2y=393;
							$face3x=510; $face3y=335;
							$face4x=590; $face4y=265;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=30; $face1y=235;
							$face2x=150; $face2y=300;
							$face3x=399; $face3y=340;
							$face4x=595; $face4y=260;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}

					}
				}
				
			}
			else{
			//one corner post	
				
				if($posttype=="Inner")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=145; $face1y=195;
							$face2x=210; $face2y=200;
							$face3x=290; $face3y=260;
							$face4x=410; $face4y=345;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=170; $face1y=275;
							$face2x=285; $face2y=230;
							$face3x=340; $face3y=230;
							$face4x=440; $face4y=280;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}
						if($postposition=="3rd Center Post from Left")
						{
							$face1x=210; $face1y=305;
							$face2x=340; $face2y=240;
							$face3x=430; $face3y=190;
							$face4x=490; $face4y=195;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;		
						}
					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=180; $face1y=297;
							$face2x=297; $face2y=260;
							$face3x=430; $face3y=245;
							$face4x=570; $face4y=230;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=210; $face1y=320;
							$face2x=330; $face2y=257;
							$face3x=430; $face3y=230;
							$face4x=560; $face4y=220;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}
						if($postposition=="3rd Center Post from Left")
						{
							$face1x=60; $face1y=245;
							$face2x=180; $face2y=260;
							$face3x=305; $face3y=275;
							$face4x=435; $face4y=320;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}
					}
				}
				if($posttype=="Outer")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=80; $face1y=365;
							$face2x=390; $face2y=355;
							$face3x=530; $face3y=250;
							$face4x=600; $face4y=200;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;		
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=40; $face1y=260;
							$face2x=180; $face2y=355;
							$face3x=480; $face3y=350;
							$face4x=590; $face4y=250;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}
						if($postposition=="3rd Center Post from Left")
						{
							$face1x=30; $face1y=175;
							$face2x=100; $face2y=230;
							$face3x=240; $face3y=335;
							$face4x=550; $face4y=360;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}
					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=90; $face1y=350;
							$face2x=350; $face2y=320;
							$face3x=480; $face3y=260;
							$face4x=585; $face4y=215;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=75; $face1y=300;
							$face2x=225; $face2y=325;
							$face3x=460; $face3y=315;
							$face4x=580; $face4y=260;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}
						if($postposition=="3rd Center Post from Left")
						{
							$face1x=70; $face1y=260;
							$face2x=205; $face2y=287;
							$face3x=355; $face3y=312;
							$face4x=570; $face4y=300;

							$postx=575; $posty=85;
							$rightx=5250; $righty=15;
							$leftx=4000; $lefty=180;
							$totx=1450;$toty=1220;	
						}
					}
				}




			}			

			
		}	
			
			
			
		}
		else{
			
			if($endpaneltype=='Extended')
			{
				$face1x=230; $face1y=320;
				$face2x=390; $face2y=240;
				$face3x=490; $face3y=190;
				$face4x=570; $face4y=155;
				$postx=580; $posty=110;

				$rightx=545; $righty=30;
				$leftx=25; $lefty=137;
				$totx=470;$toty=230;

			}
			else{
			
			
			$face1x=230; $face1y=320;
			$face2x=390; $face2y=240;
			$face3x=490; $face3y=190;
			$face4x=570; $face4y=155;
			$postx=575; $posty=85;
			$rightx=5250; $righty=15;
			$leftx=4000; $lefty=180;
			$totx=470;$toty=230;
			}
			
			
		}
	}
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;
	echo getcwd();

		
	/*Resize 1920X1440 to 640X480 Start*/
	$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

	$my_img =imagecreatefromjpeg("../".$path);
    list($origWidth, $origHeight) = getimagesize("../".$path);

   
 
	
	$w =640;
	$h =480;
   // $img=$target;
    $extn = strtolower($extn);
 
        //$img = imagecreatefromjpeg($targett);
		
	
  
    $a = imagecreatetruecolor($w, $h);
    
    imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);
	
    imagejpeg($a,'img2/'.$newcpy,300);

	
	
	
	
	
	
	
	
	$resize="img2/".$osc."_".$im_id.".jpg";
	
	
		/*Resize 1920X1440 to 640X480 END*/
	


		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

		//For Online.....
		//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
		//echo $face1;
	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $face2x, $face2y, $face2, $text_colour );
	imagestring( $my_img, 5, $face3x, $face3y, $face3, $text_colour);
	imagestring( $my_img, 5, $face4x, $face4y, $face4, $text_colour);
	imagestring( $my_img, 5, $postx, $posty, $post, $text_colour);
	imagestring( $my_img, 5, $leftx, $lefty, $left, $text_colour);
	imagestring( $my_img, 5, $rightx, $righty, $right, $text_colour);
	imagestring( $my_img, 5, $totx, $toty,$tot,$text_colour);

//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// $marge_right = 545;
		// $marge_bottom = 425;
		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);



//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));


	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");		
		
		
		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/

	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
	imagedestroy( $my_img );
}else if($mod=="EP36"){
	if($ends==1){
			//$img="NORADBOTHENDS.jpg";
	}else if($ends==2){
			//$img="NORADRIGHTEND.jpg";
		$left="";
	}else if($ends==3){
			//$img="NORADLEFTEND.jpg";
		$right="";
	}else if($ends==4){
			//$img="NORADNOENDS.jpg";
		$right="";
		$left="";
	}

	if($bay=="1BAY"){
		if($face1=="No Glass"){
			$face1="";
			$left="";
			$right="";
			$tot="";
		}
		$path="images/"."EP-361BAY/".$img.".jpg";
		
		if($endpaneltype=='Extended')
		{
			$face1x=399;$face1y=385;
			$postx=450000; $posty=170000;
			$rightx=410;$righty=05;
			$leftx=130;$lefty=35;
			$totx=430;$toty=395;

		}
		else{
			$face1x=399;$face1y=385;
		$postx=500000; $posty=150000;
		$rightx=400000;$righty=200000;
		$leftx=1700000;$lefty=900000;
		$totx=430;$toty=395;
		
		}
		
	}else if($bay=="2BAY"){
		if($face1=="No Glass"||$face2=="No Glass"){
			$face1="";
			$face2="";
			$left="";
			$right="";
			$tot="";
		}
		$path="images/"."EP-362BAY/".$img.".jpg";

		if($corneryes=="1")
		{
			
			
		
			if($endpaneltype=='Extended')
			{


			//Extended Endpanel
				if($posttype=="Inner")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=250;$face1y=300;
							$face2x=360;$face2y=305;
							$postx=570; $posty=230;


							$rightx=585; $righty=300;
							$leftx=38; $lefty=325;
							$totx=1135;$toty=1465;	
						}


					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=270;$face1y=345;
							$face2x=430;$face2y=315;
							$postx=565; $posty=195;


							$rightx=595; $righty=245;
							$leftx=43; $lefty=335;
							$totx=1135;$toty=1465;		
						}


					}
				}
				if($posttype=="Outer")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=115;$face1y=340;
							$face2x=475;$face2y=370;
							$postx=12; $posty=230;


							$rightx=485; $righty=20;
							$leftx=155; $lefty=15;
							$totx=1135;$toty=1465;		
						}


					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=135;$face1y=370;
							$face2x=450;$face2y=380;
							$postx=2; $posty=215;


							$rightx=505; $righty=75;
							$leftx=90; $lefty=75;
							$totx=1135;$toty=1465;		
						}


					}
				}
			}
			else{
			//Normal Endpanel	
			
			
			
			
			
			
			
			if($posttype=="Inner")
			{
				if($postdegree=="90 Degree")
				{
					if($postposition=="1st Center Post from Left")
					{

						$face1x=265;$face1y=350;
						$face2x=370;$face2y=350;


						$postx=540; $posty=120;
						$rightx=465; $righty=15;
						$leftx=85; $lefty=105;
						$totx=1430;$toty=1270;	
					}
				}
				if($postdegree=="135 Degree")
				{
					if($postposition=="1st Center Post from Left")
					{

						$face1x=299;$face1y=370;
						$face2x=475;$face2y=300;


						$postx=540; $posty=120;
						$rightx=465; $righty=15;
						$leftx=85; $lefty=105;
						$totx=1430;$toty=1270;	
					}
				}
			}
			
			if($posttype=="Outer")
			{
				if($postdegree=="90 Degree")
				{
					if($postposition=="1st Center Post from Left")
					{

						$face1x=135;$face1y=338;
						$face2x=530;$face2y=315;


						$postx=540; $posty=120;
						$rightx=465; $righty=15;
						$leftx=85; $lefty=105;
						$totx=1430;$toty=1270;	
					}
				}
				if($postdegree=="135 Degree")
				{
					if($postposition=="1st Center Post from Left")
					{

						$face1x=140;$face1y=355;
						$face2x=480;$face2y=327;


						$postx=540; $posty=120;
						$rightx=465; $righty=15;
						$leftx=85; $lefty=105;
						$totx=1430;$toty=1270;	
					}
				}
			}
			
			}
			
			
			
			
			
			
		}
		else{
			
			
			//herrr
			if($endpaneltype=='Extended')
			{
			//Extended Endpanel
				$face1x=295;$face1y=370;
				$face2x=510;$face2y=290;
				$postx=525; $posty=155;
				$rightx=510; $righty=10;
				$leftx=45; $lefty=80;
				$totx=440;$toty=340;
			}
			else{
			//Normal Endpanel
			
			$face1x=295;$face1y=370;
				$face2x=510;$face2y=290;
			$postx=5400000; $posty=5400000;
			$rightx=5400000; $righty=5400000;
			$leftx=5400000; $lefty=5400000;
			$totx=440;$toty=340;
			
			}
		}

	}else if($bay=="3BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
			$left="";
			$right="";
			$tot="";
		}
		$path="images/"."EP-363BAY/".$img.".jpg";

		if($corneryes=="1")
		{
		
		
		
			if($endpaneltype=='Extended')
			{

			//Extended Endpanel
				if($noofcornerpostval=="2")	
				{
			//two corner post	


					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=2; $posty=290;	
								$face1x=270;$face1y=275;
								$face2x=315;$face2y=240;
								$face3x=365;$face3y=275;


								$rightx=525; $righty=385;
								$leftx=100; $lefty=385;
								$totx=1430;$toty=1240;	
							}


						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=2; $posty=265;	
								$face1x=190;$face1y=305;
								$face2x=302;$face2y=275;
								$face3x=405;$face3y=305;

								$rightx=595; $righty=300;
								$leftx=25; $lefty=310;
								$totx=1430;$toty=1240;	
							}


						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{

								$postx=540; $posty=185;		
								$face1x=75;$face1y=290;
								$face2x=310;$face2y=440;
								$face3x=530;$face3y=280;

								$rightx=390; $righty=7;
								$leftx=225; $lefty=5;
								$totx=1430;$toty=1240;	
							}


						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=5; $posty=235;		
								$face1x=60;$face1y=330;
								$face2x=330;$face2y=360;
								$face3x=570;$face3y=300;

								$rightx=520; $righty=60;
								$leftx=80; $lefty=80;
								$totx=1430;$toty=1240;	
							}


						}
					}	
				}
				else{
			//one corner post	




					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=175;$face1y=240;
								$face2x=245;$face2y=245;
								$face3x=340;$face3y=320;
								$postx=575; $posty=265;

								$rightx=575; $righty=370;
								$leftx=20; $lefty=235;
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
								//its not done
								$face1x=260;$face1y=300;
								$face2x=367;$face2y=233;
								$face3x=440;$face3y=230;
								$postx=575; $posty=190;

								$rightx=595; $righty=230;
								$leftx=40; $lefty=340;
								$totx=1420;$toty=1250;
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=220;$face1y=300;
								$face2x=340;$face2y=275;
								$face3x=495;$face3y=270;
								$postx=4; $posty=215;

								$rightx=595; $righty=220;
								$leftx=40; $lefty=300;
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=260;$face1y=370;
								$face2x=399;$face2y=280;
								$face3x=495;$face3y=250;
								$postx=4; $posty=215;

								$rightx=599; $righty=190;
								$leftx=35; $lefty=375;
								$totx=1420;$toty=1250;
							}

						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=120;$face1y=375;
								$face2x=430;$face2y=355;
								$face3x=530;$face3y=250;
								$postx=3; $posty=195;

								$rightx=495; $righty=25;
								$leftx=105; $lefty=95;
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=100;$face1y=285;
								$face2x=275;$face2y=355;
								$face3x=565;$face3y=330;
								$postx=2; $posty=170;

								$rightx=510; $righty=75;
								$leftx=85; $lefty=75;
								$totx=1420;$toty=1250;
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=110;$face1y=360;
								$face2x=375;$face2y=340;
								$face3x=525;$face3y=295;
								$postx=2; $posty=190;

								$rightx=550; $righty=55;
								$leftx=50; $lefty=105;
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=100;$face1y=325;
								$face2x=295;$face2y=345;
								$face3x=535;$face3y=332;
								$postx=2; $posty=250;

								$rightx=560; $righty=85;
								$leftx=35; $lefty=90;
								$totx=1420;$toty=1250;
							}

						}
					}





				}
			}
			else{
			//normal panel	
			if($noofcornerpostval=="2")	
			{
			//two corner post	
				
				
				if($posttype=="Inner")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=260;$face1y=320;
							$face2x=310;$face2y=270;
							$face3x=360;$face3y=320;

							$postx=555; $posty=95;
							$rightx=495; $righty=10;
							$leftx=55; $lefty=155;
							$totx=1430;$toty=1240;	
						}


					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=190;$face1y=310;
							$face2x=312;$face2y=280;
							$face3x=455;$face3y=295;

							$postx=555; $posty=95;
							$rightx=495; $righty=10;
							$leftx=55; $lefty=155;
							$totx=1430;$toty=1240;	
						}


					}
				}
				if($posttype=="Outer")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=80;$face1y=280;
							$face2x=340;$face2y=420;
							$face3x=550;$face3y=285;

							$postx=555; $posty=95;
							$rightx=495; $righty=10;
							$leftx=55; $lefty=155;
							$totx=1430;$toty=1240;	
						}


					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=80;$face1y=340;
							$face2x=340;$face2y=360;
							$face3x=570;$face3y=300;

							$postx=555; $posty=95;
							$rightx=495; $righty=10;
							$leftx=55; $lefty=155;
							$totx=1430;$toty=1240;	
						}


					}
				}	
			}
			else{
			//one corner post	
				
				
				if($posttype=="Inner")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=160;$face1y=285;
							$face2x=270;$face2y=280;
							$face3x=420;$face3y=350;

							$postx=555; $posty=95;
							$rightx=495; $righty=10;
							$leftx=55; $lefty=155;
							$totx=1430;$toty=1240;	
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=200;$face1y=325;
							$face2x=370;$face2y=250;
							$face3x=455;$face3y=250;

							$postx=555; $posty=95;
							$rightx=495; $righty=10;
							$leftx=55; $lefty=155;
							$totx=1430;$toty=1240;	
						}

					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=240;$face1y=325;
							$face2x=350;$face2y=270;
							$face3x=530;$face3y=230;

							$postx=555; $posty=95;
							$rightx=495; $righty=10;
							$leftx=55; $lefty=155;
							$totx=1430;$toty=1240;	
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=100;$face1y=265;
							$face2x=280;$face2y=300;
							$face3x=410;$face3y=355;

							$postx=555; $posty=95;
							$rightx=495; $righty=10;
							$leftx=55; $lefty=155;
							$totx=1430;$toty=1240;	
						}

					}
				}
				if($posttype=="Outer")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=120;$face1y=340;
							$face2x=440;$face2y=335;
							$face3x=580;$face3y=215;

							$postx=555; $posty=95;
							$rightx=495; $righty=10;
							$leftx=55; $lefty=155;
							$totx=1430;$toty=1240;	
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=70;$face1y=230;
							$face2x=235;$face2y=320;
							$face3x=535;$face3y=340;

							$postx=555; $posty=95;
							$rightx=495; $righty=10;
							$leftx=55; $lefty=155;
							$totx=1430;$toty=1240;		
						}

					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=110;$face1y=360;
							$face2x=380;$face2y=345;
							$face3x=555;$face3y=305;

							$postx=555; $posty=95;
							$rightx=495; $righty=10;
							$leftx=55; $lefty=155;
							$totx=1430;$toty=1240;	
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=90;$face1y=300;
							$face2x=290;$face2y=305;
							$face3x=545;$face3y=290;

							$postx=555; $posty=95;
							$rightx=495; $righty=10;
							$leftx=55; $lefty=155;
							$totx=1430;$toty=1240;	
						}

					}
				}	
			}

		}
			
			
			
			
			
		}
		else{
			
			
			if($endpaneltype=='Extended')
			{
				//Extended Endpanel
				$face1x=255;$face1y=375;
				$face2x=415;$face2y=295;
				$face3x=540;$face3y=235;
				$postx=560; $posty=160;

				$rightx=543; $righty=20;
				$leftx=40; $lefty=138;
				$totx=430;$toty=330;


			}
			else{
			//Normal Endpanel
			$face1x=255;$face1y=375;
				$face2x=415;$face2y=295;
				$face3x=540;$face3y=235;
			$postx=555; $posty=95;
			$rightx=495; $righty=10;
			$leftx=55; $lefty=155;
			$totx=430;$toty=330;
			}
		}

	}else if($bay=="4BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"||$face4=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
			$face4="";
			$left="";
			$right="";
			$tot="";
		}
		$path="images/"."EP-364BAY/".$img.".jpg";

		if($corneryes=="1")
		{

			
			
			if($endpaneltype=='Extended')
			{
			//Extended Endpanel	
				if($noofcornerpostval=="2")	
				{
					//two corner post	

					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								//$face1x=240; $face1y=235;
								$postx=2; $posty=205;
								$face1x=240; $face1y=228;
								$face2x=280; $face2y=195;
								$face3x=320; $face3y=228;
								$face4x=315; $face4y=310;


								$rightx=500; $righty=450;
								$leftx=80;$lefty=295;
								$totx=1450;$toty=1220;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$postx=575; $posty=220;	
								$face1x=295; $face1y=295;
								$face2x=295; $face2y=210;
								$face3x=330; $face3y=180;
								$face4x=370; $face4y=210;


								$rightx=520; $righty=275;
								$leftx=100; $lefty=440;
								$totx=1450;$toty=1220;	
							}

						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{


								$postx=575; $posty=265;	
								$face1x=160; $face1y=275;
								$face2x=245; $face2y=260;
								$face3x=330; $face3y=280;
								$face4x=435; $face4y=310;


								$rightx=595; $righty=320;
								$leftx=10; $lefty=270;
								$totx=1450;$toty=1220;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$postx=575; $posty=265;	
								$face1x=185; $face1y=305;
								$face2x=290; $face2y=270;
								$face3x=375; $face3y=250;
								$face4x=455; $face4y=275;


								$rightx=599; $righty=280;
								$leftx=20; $lefty=300;
								$totx=1450;$toty=1220;		
							}

						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=520; $posty=130;
								$face1x=80; $face1y=300;
								$face2x=300; $face2y=460;
								$face3x=530; $face3y=300;
								$face4x=485; $face4y=200;


								$rightx=370; $righty=10;
								$leftx=235; $lefty=30;
								$totx=1450;$toty=1220;		
							}
							if($postposition=="2nd Center Post from Left")
							{
								$postx=550; $posty=185;
								$face1x=125; $face1y=205;
								$face2x=80; $face2y=305;
								$face3x=310; $face3y=455;
								$face4x=540; $face4y=305;




								$rightx=380; $righty=35;
								$leftx=250; $lefty=05;
								$totx=1450;$toty=1220;	
							}

						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$postx=2; $posty=270;
								$face1x=50; $face1y=330;
								$face2x=270; $face2y=370;
								$face3x=499; $face3y=320;
								$face4x=590; $face4y=260;


								$rightx=560; $righty=60;
								$leftx=60; $lefty=100;
								$totx=1450;$toty=1220;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$postx=2; $posty=235;
								$face1x=50; $face1y=290;
								$face2x=170; $face2y=335;
								$face3x=410; $face3y=370;
								$face4x=590; $face4y=310;


								$rightx=535; $righty=100;
								$leftx=60; $lefty=95;
								$totx=1450;$toty=1220;	
							}

						}
					}

				}
				else{
					//one corner post	


					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=145; $face1y=235;
								$face2x=205; $face2y=235;
								$face3x=280; $face3y=280;
								$face4x=390; $face4y=340;
								$postx=570; $posty=280;


								$rightx=570; $righty=360;
								$leftx=20; $lefty=240;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=175; $face1y=285;
								$face2x=270; $face2y=250;
								$face3x=340; $face3y=245;
								$face4x=425; $face4y=290;
								$postx=570; $posty=250;


								$rightx=570; $righty=300;
								$leftx=27; $lefty=295;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="3rd Center Post from Left")
							{
								$face1x=230; $face1y=345;
								$face2x=350; $face2y=260;
								$face3x=430; $face3y=204;
								$face4x=480; $face4y=205;
								$postx=575; $posty=180;


								$rightx=605; $righty=200;
								$leftx=30; $lefty=370;
								$totx=1425;$toty=1225;		
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=160; $face1y=310;
								$face2x=260; $face2y=282;
								$face3x=385; $face3y=275;
								$face4x=510; $face4y=270;
								$postx=2; $posty=207;


								$rightx=600; $righty=220;
								$leftx=30; $lefty=310;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=199; $face1y=300;
								$face2x=300; $face2y=240;
								$face3x=385; $face3y=215;
								$face4x=510; $face4y=210;
								$postx=2; $posty=207;


								$rightx=599; $righty=165;
								$leftx=30; $lefty=310;
								$totx=1425;$toty=1225;		
							}
							if($postposition=="3rd Center Post from Left")
							{
								$face1x=240; $face1y=350;
								$face2x=360; $face2y=265;
								$face3x=460; $face3y=205;
								$face4x=530; $face4y=190;
								$postx=2; $posty=207;


								$rightx=610; $righty=135;
								$leftx=40; $lefty=370;
								$totx=1425;$toty=1225;	
							}

						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=120; $face1y=399;
								$face2x=380; $face2y=375;
								$face3x=495; $face3y=265;
								$face4x=560; $face4y=180;
								$postx=547; $posty=107;


								$rightx=530; $righty=05;
								$leftx=80; $lefty=130;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=35; $face1y=265;
								$face2x=130; $face2y=345;
								$face3x=410; $face3y=365;
								$face4x=555; $face4y=290;
								$postx=2; $posty=170;


								$rightx=545; $righty=85;
								$leftx=70; $lefty=80;
								$totx=1425;$toty=1225;	
							}
							if($postposition=="3rd Center Post from Left")
							{
								$face1x=50; $face1y=190;
								$face2x=140; $face2y=260;
								$face3x=250; $face3y=360;
								$face4x=515; $face4y=360;
								$postx=1; $posty=150;


								$rightx=510; $righty=120;
								$leftx=140; $lefty=35;
								$totx=1425;$toty=1225;	
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								$face1x=90; $face1y=320;
								$face2x=300; $face2y=320;
								$face3x=425; $face3y=288;
								$face4x=560; $face4y=260;
								$postx=05; $posty=300;


								$rightx=585; $righty=70;
								$leftx=30; $lefty=115;
								$totx=1425;$toty=1225;		
							}
							if($postposition=="2nd Center Post from Left")
							{
								$face1x=90; $face1y=300;
								$face2x=260; $face2y=310;
								$face3x=445; $face3y=298;
								$face4x=560; $face4y=270;
								$postx=05; $posty=300;


								$rightx=565; $righty=85;
								$leftx=25; $lefty=105;
								$totx=1425;$toty=1225;		
							}
							if($postposition=="3rd Center Post from Left")
							{
								$face1x=80; $face1y=315;
								$face2x=240; $face2y=320;
								$face3x=390; $face3y=325;
								$face4x=560; $face4y=310;
								$postx=1; $posty=233;


								$rightx=565; $righty=110;
								$leftx=10; $lefty=120;
								$totx=1425;$toty=1225;	
							}

						}
					}




				}
			}
			else{
				//Normal Endpanel

			if($noofcornerpostval=="2")	
			{
			//two corner post	
				
				if($posttype=="Inner")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=230; $face1y=235;
							$face2x=280; $face2y=200;
							$face3x=325; $face3y=240;
							$face4x=325; $face4y=350;

							$postx=575; $posty=85;
							$rightx=525; $righty=15;
							$leftx=40; $lefty=180;
							$totx=1450;$toty=1220;	
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=290; $face1y=330;
							$face2x=290; $face2y=230;
							$face3x=330; $face3y=190;
							$face4x=390; $face4y=230;

							$postx=575; $posty=85;
							$rightx=525; $righty=15;
							$leftx=40; $lefty=180;
							$totx=1450;$toty=1220;	
						}

					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=135; $face1y=280;
							$face2x=230; $face2y=260;
							$face3x=330; $face3y=275;
							$face4x=455; $face4y=320;

							$postx=575; $posty=85;
							$rightx=525; $righty=15;
							$leftx=40; $lefty=180;
							$totx=1450;$toty=1220;	
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=145; $face1y=320;
							$face2x=280; $face2y=280;
							$face3x=380; $face3y=260;
							$face4x=475; $face4y=280;

							$postx=575; $posty=85;
							$rightx=525; $righty=15;
							$leftx=40; $lefty=180;
							$totx=1450;$toty=1220;	
						}

					}
				}
				if($posttype=="Outer")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=80; $face1y=300;
							$face2x=310; $face2y=457;
							$face3x=540; $face3y=320;
							$face4x=490; $face4y=210;

							$postx=575; $posty=85;
							$rightx=525; $righty=15;
							$leftx=40; $lefty=180;
							$totx=1450;$toty=1220;		
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=130; $face1y=205;
							$face2x=80; $face2y=300;
							$face3x=310; $face3y=447;
							$face4x=540; $face4y=310;



							$postx=575; $posty=85;
							$rightx=525; $righty=15;
							$leftx=40; $lefty=180;
							$totx=1450;$toty=1220;	
						}

					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=45; $face1y=320;
							$face2x=260; $face2y=375;
							$face3x=500; $face3y=320;
							$face4x=590; $face4y=260;

							$postx=575; $posty=85;
							$rightx=525; $righty=15;
							$leftx=40; $lefty=180;
							$totx=1450;$toty=1220;	
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=60; $face1y=290;
							$face2x=180; $face2y=335;
							$face3x=400; $face3y=365;
							$face4x=590; $face4y=310;

							$postx=575; $posty=85;
							$rightx=525; $righty=15;
							$leftx=40; $lefty=180;
							$totx=1450;$toty=1220;	
						}

					}
				}
				
			}
			else{
			//one corner post	

				
				
				if($posttype=="Inner")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=125; $face1y=220;
							$face2x=200; $face2y=220;
							$face3x=305; $face3y=260;
							$face4x=455; $face4y=325;

							$postx=575; $posty=85;
							$rightx=525; $righty=15;
							$leftx=40; $lefty=180;
							$totx=1450;$toty=1220;	
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=160; $face1y=300;
							$face2x=275; $face2y=240;
							$face3x=355; $face3y=240;
							$face4x=465; $face4y=290;

							$postx=575; $posty=85;
							$rightx=525; $righty=15;
							$leftx=40; $lefty=180;
							$totx=1450;$toty=1220;	
						}
						if($postposition=="3rd Center Post from Left")
						{
							$face1x=170; $face1y=332;
							$face2x=320; $face2y=270;
							$face3x=425; $face3y=229;
							$face4x=505; $face4y=228;

							$postx=575; $posty=85;
							$rightx=525; $righty=15;
							$leftx=40; $lefty=180;
							$totx=1450;$toty=1220;		
						}
					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=155; $face1y=302;
							$face2x=270; $face2y=275;
							$face3x=410; $face3y=245;
							$face4x=540; $face4y=225;

							$postx=575; $posty=85;
							$rightx=525; $righty=15;
							$leftx=40; $lefty=180;
							$totx=1450;$toty=1220;	
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=180; $face1y=330;
							$face2x=320; $face2y=240;
							$face3x=400; $face3y=210;
							$face4x=540; $face4y=200;

							$postx=575; $posty=85;
							$rightx=525; $righty=15;
							$leftx=40; $lefty=180;
							$totx=1450;$toty=1220;	
						}
						if($postposition=="3rd Center Post from Left")
						{
							$face1x=210; $face1y=340;
							$face2x=370; $face2y=260;
							$face3x=470; $face3y=210;
							$face4x=550; $face4y=190;

							$postx=575; $posty=85;
							$rightx=525; $righty=15;
							$leftx=40; $lefty=180;
							$totx=1450;$toty=1220;	
						}
					}
				}
				if($posttype=="Outer")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=80; $face1y=380;
							$face2x=399; $face2y=347;
							$face3x=510; $face3y=245;
							$face4x=585; $face4y=170;

							$postx=575; $posty=85;
							$rightx=525; $righty=15;
							$leftx=40; $lefty=180;
							$totx=1450;$toty=1220;		
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=45; $face1y=270;
							$face2x=145; $face2y=345;
							$face3x=400; $face3y=355;
							$face4x=540; $face4y=295;

							$postx=575; $posty=85;
							$rightx=525; $righty=15;
							$leftx=40; $lefty=180;
							$totx=1450;$toty=1220;	
						}
						if($postposition=="3rd Center Post from Left")
						{
							$face1x=25; $face1y=190;
							$face2x=115; $face2y=260;
							$face3x=240; $face3y=370;
							$face4x=530; $face4y=390;

							$postx=575; $posty=85;
							$rightx=525; $righty=15;
							$leftx=40; $lefty=180;
							$totx=1450;$toty=1220;	
						}
					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{
							$face1x=90; $face1y=325;
							$face2x=280; $face2y=320;
							$face3x=420; $face3y=280;
							$face4x=555; $face4y=250;

							$postx=575; $posty=85;
							$rightx=525; $righty=15;
							$leftx=40; $lefty=180;
							$totx=1450;$toty=1220;	
						}
						if($postposition=="2nd Center Post from Left")
						{
							$face1x=70; $face1y=299;
							$face2x=240; $face2y=315;
							$face3x=455; $face3y=300;
							$face4x=570; $face4y=270;

							$postx=575; $posty=85;
							$rightx=525; $righty=15;
							$leftx=40; $lefty=180;
							$totx=1450;$toty=1220;	
						}
						if($postposition=="3rd Center Post from Left")
						{
							$face1x=85; $face1y=310;
							$face2x=215; $face2y=315;
							$face3x=385; $face3y=325;
							$face4x=560; $face4y=307;

							$postx=575; $posty=85;
							$rightx=525; $righty=15;
							$leftx=40; $lefty=180;
							$totx=1450;$toty=1220;	
						}
					}
				}
				
			}
			}


			
			
			
			
		}
		else{	
		
		
			if($endpaneltype=='Extended')
			{
				
				
				$rightx=557; $righty=15;
				$leftx=30; $lefty=147;
				$face1x=220; $face1y=345;
				$face2x=365; $face2y=275;
				$face3x=475; $face3y=225;
				$face4x=565; $face4y=185;
				$totx=435;$toty=270;
				$postx=580; $posty=110;

			}
			else{
		
		
				$face1x=220; $face1y=345;
				$face2x=365; $face2y=275;
				$face3x=475; $face3y=225;
				$face4x=565; $face4y=185;
			$postx=575; $posty=85;
			$rightx=525; $righty=15;
			$leftx=40; $lefty=180;
			$totx=435;$toty=270;
			
			
			}
		}

	}
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;
	echo getcwd();
	/*Resize 1920X1440 to 640X480 Start*/
$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

$my_img =imagecreatefromjpeg("../".$path);
list($origWidth, $origHeight) = getimagesize("../".$path);




$w =640;
$h =480;
// $img=$target;
$extn = strtolower($extn);

//$img = imagecreatefromjpeg($targett);



$a = imagecreatetruecolor($w, $h);

imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);

imagejpeg($a,'img2/'.$newcpy,300);









$resize="img2/".$osc."_".$im_id.".jpg";


/*Resize 1920X1440 to 640X480 END*/
		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

		//For Online.....
		//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
		//echo $face1;
	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $face2x, $face2y, $face2, $text_colour );
	imagestring( $my_img, 5, $face3x, $face3y, $face3, $text_colour);
	imagestring( $my_img, 5, $face4x, $face4y, $face4, $text_colour);
		//imagestring( $my_img, 5, $postx, $posty, $noofcornerpostval, $text_colour);
	if($endpaneltype=='Extended')
	{	
	imagestring( $my_img, 5, $leftx, $lefty, $left, $text_colour);
	imagestring( $my_img, 5, $rightx, $righty, $right, $text_colour);
	}
	
	imagestring( $my_img, 5, $totx, $toty,$tot,$text_colour);

//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// $marge_right = 545;
		// $marge_bottom = 425;
		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);


//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));



	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");		
		
		
		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/

	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
	imagedestroy( $my_img );
}else if($mod=="ES29"){
	if($ends==1){
			//$img="BOTHENDS.jpg";
	}else if($ends==2){
			//$img="RIGHTEND.jpg";
			//$left="";
	}else if($ends==3){
			//$img="LEFTEND.jpg";
			//$right="";
	}else if($ends==4){
			//$img="NOENDS.jpg";
			//$right="";
			//$left="";
	}

	if($bay=="1BAY"){
		if($face1=="No Glass"){
			$face1="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES291BAY/".$img.".jpg";
		$face1x=400;$face1y=335;
		$postx=500; $posty=150;
		$leftx=425;$lefty=210;
		$rightx=85;$righty=340;
		$totx=440;$toty=365;
	}else if($bay=="2BAY"){
		if($face1=="No Glass"||$face2=="No Glass"){
			$face1="";
			$face2="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES292BAY/".$img.".jpg";
		$face1x=300;$face1y=335;
		$face2x=505;$face2y=240;
		$postx=540; $posty=120;
		$rightx=60; $righty=350;
		$leftx=340; $lefty=240;
		$totx=465;$toty=295;
	}else if($bay=="3BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES293BAY/".$img.".jpg";
		$face1x=245;$face1y=335;
		$face2x=435;$face2y=250;
		$face3x=560;$face3y=185;
		$postx=555; $posty=95;
		$rightx=40; $righty=340;
		$leftx=295; $lefty=250;
		$totx=450;$toty=265;
	}else if($bay=="4BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"||$face4=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
			$face4="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES294BAY/".$img.".jpg";
		$face1x=195; $face1y=345;
		$face2x=340; $face2y=285;
		$face3x=470; $face3y=240;
		$face4x=565; $face4y=205;
		$postx=575; $posty=85;
		$rightx=30; $righty=355;
		$leftx=225; $lefty=290;
		$totx=440;$toty=275;
	}
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;
	echo getcwd();


	
	/*Resize 1920X1440 to 640X480 Start*/
	$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

	$my_img =imagecreatefromjpeg("../".$path);
    list($origWidth, $origHeight) = getimagesize("../".$path);

   
 
	
	$w =640;
	$h =480;
   // $img=$target;
    $extn = strtolower($extn);
 
        //$img = imagecreatefromjpeg($targett);
		
	
  
    $a = imagecreatetruecolor($w, $h);
    
    imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);
	
    imagejpeg($a,'img2/'.$newcpy,300);

	
	
	
	
	
	
	
	
	$resize="img2/".$osc."_".$im_id.".jpg";
	
	
		/*Resize 1920X1440 to 640X480 END*/
	
	
	
	
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;

		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

		//For Online.....
		//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
		//echo $face1;
	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $face2x, $face2y, $face2, $text_colour );
	imagestring( $my_img, 5, $face3x, $face3y, $face3, $text_colour);
	imagestring( $my_img, 5, $face4x, $face4y, $face4, $text_colour);
	imagestring( $my_img, 5, $postx, $posty, $post, $text_colour);
	imagestring( $my_img, 5, $leftx, $lefty, (str_replace('"', "", $right)-4).'"', $text_colour);
	imagestring( $my_img, 5, $rightx, $righty, $right, $text_colour);
	imagestring( $my_img, 5, $totx, $toty,$tot,$text_colour);

//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// $marge_right = 545;
		// $marge_bottom = 425;
		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);


//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));



	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");		
		
		
		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/

	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
	imagedestroy( $my_img );
}else if($mod=="ES31"){
	if($ends==1){
			//$img="BOTHENDS.jpg";
	}else if($ends==2){
			//$img="RIGHTEND.jpg";
		$left="";
	}else if($ends==3){
			//$img="LEFTEND.jpg";
		$right="";
	}else if($ends==4){
			//$img="NOENDS.jpg";
		$right="";
		$left="";
	}

	if($bay=="1BAY"){
		if($face1=="No Glass"){
			$face1="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES-311BAY/".$img.".jpg";
		
		if($endpaneltype=='Extended')
		{

			$rightx=400;$righty=5;
			$leftx=145;$lefty=30;
		

		}
		else{
		
		
		
		$rightx=140;$righty=330;
		$leftx=170;$lefty=90;
	
		}
		$postx=490; $posty=170;

		$face1x=370;$face1y=340;
		$totx=400;$toty=370;
		
	}else if($bay=="2BAY"){
		if($face1=="No Glass"||$face2=="No Glass"){
			$face1="";
			$face2="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES-312BAY/".$img.".jpg";

		if($corneryes=="1")
		{
			
			

			//Extended Endpanel
				if($posttype=="Inner")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{

							if($endpaneltype=='Extended')
							{

								$rightx=580; $righty=320;
								$leftx=40; $lefty=320;
							}
							else{

								$rightx=540; $righty=320;
								$leftx=70; $lefty=330;
							}
							$face1x=250;$face1y=320;
							$face2x=360;$face2y=325;
							$postx=570; $posty=230;


							$totx=1135;$toty=1465;	
						}


					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{

							if($endpaneltype=='Extended')
							{
								$rightx=590; $righty=240;
								$leftx=25; $lefty=340;
							}
							else{
								$rightx=535; $righty=280;
								$leftx=55; $lefty=300;		
							}
							$face1x=265;$face1y=350;
							$face2x=440;$face2y=320;
							$postx=565; $posty=195;


							
							$totx=1135;$toty=1465;		
						}


					}
				}
				if($posttype=="Outer")
				{
					if($postdegree=="90 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{

							if($endpaneltype=='Extended')
							{
								$rightx=460; $righty=20;
								$leftx=140; $lefty=40;
							}
							else{
								$rightx=445; $righty=50;
								$leftx=150; $lefty=60;	
							}
							$face1x=130;$face1y=350;
							$face2x=470;$face2y=340;
							$postx=12; $posty=230;


							
							$totx=1135;$toty=1465;		
						}


					}
					if($postdegree=="135 Degree")
					{
						if($postposition=="1st Center Post from Left")
						{

							if($endpaneltype=='Extended')
							{
								$rightx=530; $righty=55;
								$leftx=100; $lefty=70;
							}
							else{
								$rightx=505; $righty=65;
								$leftx=100; $lefty=70;	
							}
							$face1x=135;$face1y=380;
							$face2x=470;$face2y=380;
							$postx=2; $posty=215;


							
							$totx=1135;$toty=1465;		
						}


					}
				}
	
			
			
			
			
			
			
			
			
		}
		else{
			
			//herrr
			if($endpaneltype=='Extended')
			{
			//Extended Endpanel
				
				$rightx=500; $righty=10;
				$leftx=70; $lefty=100;
			
			}
			else{
			//Normal Endpanel
			
			
			
		
			$rightx=65; $righty=340;
			$leftx=85; $lefty=105;
			
			
			}

			$face1x=290;$face1y=350;
			$face2x=475;$face2y=270;

			$postx=540; $posty=120;

			$totx=420;$toty=340;

		}

	}else if($bay=="3BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES-313BAY/".$img.".jpg";

		if($corneryes=="1")
		{

		
			
			//Extended Endpanel
				if($noofcornerpostval=="2")	
				{
			//two corner post	


					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
							if($endpaneltype=='Extended')
							{
								$rightx=525; $righty=425;
								$leftx=80; $lefty=440;
							}
							else{
								$rightx=525; $righty=400;
								$leftx=100; $lefty=400;
							}
					
								
								$postx=2; $posty=290;	
								$face1x=260;$face1y=350;
								$face2x=305;$face2y=310;
								$face3x=355;$face3y=350;


								
								$totx=1430;$toty=1240;	
							}


						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
							if($endpaneltype=='Extended')
							{
								$rightx=565; $righty=110;
								$leftx=35; $lefty=120;
							}
							else{
								$rightx=575; $righty=300;
								$leftx=25; $lefty=300;	
							}	

								$postx=2; $posty=265;	
								$face1x=195;$face1y=325;
								$face2x=307;$face2y=300;
								$face3x=420;$face3y=330;

								
								$totx=1430;$toty=1240;	
							}


						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{

							if($endpaneltype=='Extended')
							{
								$rightx=420; $righty=20;
								$leftx=210; $lefty=20;
							}
							else{
								$rightx=395; $righty=64;
								$leftx=215; $lefty=60;	
							}	

								$postx=540; $posty=185;		
								$face1x=85;$face1y=290;
								$face2x=310;$face2y=430;
								$face3x=550;$face3y=280;

								
								$totx=1430;$toty=1240;	
							}


						}
						if($postdegree=="135 Degree")
						{


							if($postposition=="1st Center Post from Left")
							{
							if($endpaneltype=='Extended')
							{
								$rightx=530; $righty=80;
								$leftx=70; $lefty=90;
							}
							else{
								$rightx=510; $righty=110;
								$leftx=100; $lefty=110;	
							}	

								
								$postx=5; $posty=235;		
								$face1x=65;$face1y=350;
								$face2x=300;$face2y=380;
								$face3x=550;$face3y=310;

								
								$totx=1430;$toty=1240;	
							}


						}
					}	
				}
				else{
			//one corner post	




					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
							if($endpaneltype=='Extended')
							{
								$rightx=580; $righty=100;
								$leftx=25; $lefty=92;
							}
							else{
								$rightx=580; $righty=355;
								$leftx=45; $lefty=340;	
							}
								
								$face1x=170;$face1y=300;
								$face2x=255;$face2y=300;
								$face3x=410;$face3y=350;
								$postx=575; $posty=265;

								
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
							if($endpaneltype=='Extended')
							{
								$rightx=590; $righty=80;
								$leftx=20; $lefty=82;
							}
							else{
								$rightx=575; $righty=320;
								$leftx=30; $lefty=305;	
							}
								//its not done
								$face1x=210;$face1y=320;
								$face2x=350;$face2y=280;
								$face3x=435;$face3y=285;
								$postx=575; $posty=190;

								
								$totx=1420;$toty=1250;
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
							if($endpaneltype=='Extended')
							{
								$rightx=585; $righty=65;
								$leftx=40; $lefty=80;
							}
							else{
								$rightx=585; $righty=280;
								$leftx=45; $lefty=335;	
							}	
								$face1x=200;$face1y=330;
								$face2x=335;$face2y=290;
								$face3x=510;$face3y=280;
								$postx=4; $posty=295;

								
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
							if($endpaneltype=='Extended')
							{
								$rightx=595; $righty=55;
								$leftx=25; $lefty=75;
							}
							else{
								$rightx=580; $righty=310;
								$leftx=40; $lefty=315;	
							}	
								$face1x=230;$face1y=345;
								$face2x=390;$face2y=290;
								$face3x=505;$face3y=270;
								$postx=4; $posty=215;

								
								$totx=1420;$toty=1250;
							}

						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{

							if($endpaneltype=='Extended')
							{
								$rightx=520; $righty=45;
								$leftx=105; $lefty=80;
							}
							else{
								$rightx=495; $righty=45;
								$leftx=115; $lefty=85;	
							}	
								$face1x=95;$face1y=365;
								$face2x=395;$face2y=355;
								$face3x=550;$face3y=280;
								$postx=3; $posty=195;

								
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{

							if($endpaneltype=='Extended')
							{
								$rightx=520; $righty=75;
								$leftx=80; $lefty=80;
							}
							else{
								$rightx=510; $righty=75;
								$leftx=129; $lefty=15;	
							}	
								$face1x=80;$face1y=310;
								$face2x=250;$face2y=375;
								$face3x=560;$face3y=340;
								$postx=2; $posty=170;

								
								$totx=1420;$toty=1250;
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{

							if($endpaneltype=='Extended')
							{
								$rightx=575; $righty=90;
								$leftx=50; $lefty=100;
							}
							else{
								$rightx=555; $righty=75;
								$leftx=90; $lefty=90;	
							}	
								$face1x=100;$face1y=350;
								$face2x=350;$face2y=360;
								$face3x=525;$face3y=325;
								$postx=2; $posty=190;

								
								$totx=1420;$toty=1250;
							}
							if($postposition=="2nd Center Post from Left")
							{
							
							if($endpaneltype=='Extended')
							{
								$rightx=560; $righty=100;
								$leftx=40; $lefty=100;
							}
							else{
								$rightx=550; $righty=100;
								$leftx=50; $lefty=90;	
							}
								$face1x=100;$face1y=335;
								$face2x=285;$face2y=365;
								$face3x=540;$face3y=340;
								$postx=2; $posty=250;

								
								$totx=1420;$toty=1250;
							}

						}
					}





				}
			
			

			
			
			
			
			
		}
		else{
			
			if($endpaneltype=='Extended')
			{
				//Extended Endpanel
				$rightx=530; $righty=15;
				$leftx=40; $lefty=125;
			}
			else{
			//Normal Endpanel
			$rightx=45; $righty=340;
			$leftx=55; $lefty=155;
			}
	
			$face1x=225;$face1y=360;
			$face2x=400;$face2y=290;
			$face3x=520;$face3y=230;
			$postx=555; $posty=95;
			$totx=410;$toty=320;



		}
	}else if($bay=="4BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"||$face4=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
			$face4="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES-314BAY/".$img.".jpg";


		if($corneryes=="1")
		{
			
				
			
			
			//Extended Endpanel	
				if($noofcornerpostval=="2")	
				{
					//two corner post	

					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								//$face1x=240; $face1y=235;
							if($endpaneltype=='Extended')
							{
								$rightx=530; $righty=440;
								$leftx=70;$lefty=320;
							}
							else{
							
							}

								$postx=2; $posty=205;
								$face1x=225; $face1y=270;
								$face2x=270; $face2y=240;
								$face3x=320; $face3y=260;
								$face4x=335; $face4y=340;


								
								$totx=1450;$toty=1220;	
							}
							if($postposition=="2nd Center Post from Left")
							{
							if($endpaneltype=='Extended')
							{
								$rightx=525; $righty=305;
								$leftx=105; $lefty=430;		
							}
							else{
							
							}
	
								$postx=565; $posty=240;	
								$face1x=280; $face1y=340;
								$face2x=290; $face2y=260;
								$face3x=330; $face3y=230;
								$face4x=370; $face4y=260;


								
								$totx=1450;$toty=1220;	
							}

						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
							if($endpaneltype=='Extended')
							{
								$rightx=605; $righty=95;
								$leftx=50; $lefty=130;		
							}
							
	

								$postx=575; $posty=265;	
								$face1x=205; $face1y=310;
								$face2x=275; $face2y=280;
								$face3x=380; $face3y=270;
								$face4x=520; $face4y=275;


								
								$totx=1450;$toty=1220;	
							}
							if($postposition=="2nd Center Post from Left")
							{
								if($endpaneltype=='Extended')
							{
								$rightx=600; $righty=100;
								$leftx=30; $lefty=130;		
							}
							
	

								$postx=575; $posty=265;	
								$face1x=180; $face1y=310;
								$face2x=285; $face2y=270;
								$face3x=380; $face3y=260;
								$face4x=480; $face4y=275;

								
								$totx=1450;$toty=1220;		
							}

						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
							if($endpaneltype=='Extended')
							{
								$rightx=380; $righty=10;
								$leftx=200; $lefty=55;	
							}
						

								$postx=520; $posty=130;
								$face1x=60; $face1y=300;
								$face2x=305; $face2y=460;
								$face3x=530; $face3y=310;
								$face4x=480; $face4y=180;


								
								$totx=1450;$toty=1220;		
							}
							if($postposition=="2nd Center Post from Left")
							{
								if($endpaneltype=='Extended')
								{
									$rightx=400; $righty=50;
									$leftx=210; $lefty=15;	
								}
							
	
									$postx=520; $posty=130;
									$face1x=90; $face1y=200;
									$face2x=60; $face2y=300;
									$face3x=305; $face3y=445;
									$face4x=545; $face4y=300;

								
								$totx=1450;$toty=1220;	
							}

						}
						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
							if($endpaneltype=='Extended')
							{
								$rightx=560; $righty=90;
								$leftx=70; $lefty=105;	
							}
						

								$postx=2; $posty=270;
								$face1x=50; $face1y=320;
								$face2x=265; $face2y=360;
								$face3x=480; $face3y=320;
								$face4x=580; $face4y=270;


								
								$totx=1450;$toty=1220;	
							}
							if($postposition=="2nd Center Post from Left")
							{
							if($endpaneltype=='Extended')
							{
								$rightx=550; $righty=90;
								$leftx=40; $lefty=95;	
							}
						

								$postx=2; $posty=235;
								$face1x=55; $face1y=310;
								$face2x=185; $face2y=355;
								$face3x=430; $face3y=370;
								$face4x=600; $face4y=300;


								
								$totx=1450;$toty=1220;	
							}

						}
					}

				}
				else{
					//one corner post	


					if($posttype=="Inner")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
								
							if($endpaneltype=='Extended')
							{
								$rightx=590; $righty=160;
								$leftx=25; $lefty=110;	
							}
							
								$face1x=145; $face1y=265;
								$face2x=205; $face2y=265;
								$face3x=295; $face3y=295;
								$face4x=435; $face4y=350;
								$postx=570; $posty=280;


								
								$totx=1425;$toty=1225;	
							}
							if($postposition=="2nd Center Post from Left")
							{
							if($endpaneltype=='Extended')
							{
								$rightx=590; $righty=150;
								$leftx=20; $lefty=140;	
							}
							
								$face1x=155; $face1y=310;
								$face2x=270; $face2y=280;
								$face3x=330; $face3y=280;
								$face4x=435; $face4y=320;
								$postx=570; $posty=250;


								
								$totx=1425;$toty=1225;	
							}
							if($postposition=="3rd Center Post from Left")
							{
							if($endpaneltype=='Extended')
							{
								$rightx=585; $righty=110;
								$leftx=30; $lefty=150;	
							}
						
								$face1x=180; $face1y=340;
								$face2x=310; $face2y=298;
								$face3x=410; $face3y=258;
								$face4x=475; $face4y=265;
								$postx=575; $posty=180;


								
								$totx=1425;$toty=1225;		
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
							if($endpaneltype=='Extended')
							{
								$rightx=600; $righty=100;
								$leftx=35; $lefty=160;	
							}
						
								$face1x=160; $face1y=320;
								$face2x=260; $face2y=290;
								$face3x=385; $face3y=280;
								$face4x=530; $face4y=270;
								$postx=2; $posty=207;


								
								$totx=1425;$toty=1225;	
							}
							if($postposition=="2nd Center Post from Left")
							{
							if($endpaneltype=='Extended')
							{
								$rightx=605; $righty=80;
								$leftx=35; $lefty=160;	
							}
						
								$face1x=185; $face1y=350;
								$face2x=300; $face2y=290;
								$face3x=400; $face3y=270;
								$face4x=540; $face4y=265;
								$postx=2; $posty=207;


								
								$totx=1425;$toty=1225;		
							}
							if($postposition=="3rd Center Post from Left")
							{
							if($endpaneltype=='Extended')
							{
								$rightx=605; $righty=55;
								$leftx=35; $lefty=145;	
							}

								$face1x=200; $face1y=355;
								$face2x=340; $face2y=290;
								$face3x=445; $face3y=250;
								$face4x=540; $face4y=230;
								$postx=2; $posty=207;


								$totx=1425;$toty=1225;	
							}

						}
					}
					if($posttype=="Outer")
					{
						if($postdegree=="90 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
							if($endpaneltype=='Extended')
							{
							
								$rightx=550; $righty=25;
								$leftx=80; $lefty=100;	
							}
							
								$face1x=85; $face1y=345;
								$face2x=365; $face2y=335;
								$face3x=475; $face3y=275;
								$face4x=560; $face4y=230;
								$postx=547; $posty=107;


								$totx=1425;$toty=1225;	
							}
							if($postposition=="2nd Center Post from Left")
							{
							if($endpaneltype=='Extended')
							{
								$rightx=545; $righty=60;
								$leftx=90; $lefty=80;	
							}
							
								$face1x=50; $face1y=260;
								$face2x=160; $face2y=355;
								$face3x=440; $face3y=365;
								$face4x=560; $face4y=285;
								$postx=2; $posty=170;


							
								$totx=1425;$toty=1225;	
							}
							if($postposition=="3rd Center Post from Left")
							{
							
							if($endpaneltype=='Extended')
							{
							
								$rightx=525; $righty=100;
								$leftx=135; $lefty=35;	
							}
							
								$face1x=35; $face1y=210;
								$face2x=90; $face2y=275;
								$face3x=200; $face3y=350;
								$face4x=520; $face4y=390;
								$postx=1; $posty=150;


								$totx=1425;$toty=1225;	
							}

						}

						if($postdegree=="135 Degree")
						{
							if($postposition=="1st Center Post from Left")
							{
							
							if($endpaneltype=='Extended')
							{
							
								$rightx=575; $righty=80;
								$leftx=25; $lefty=135;	
							}
							
								$face1x=105; $face1y=360;
								$face2x=320; $face2y=330;
								$face3x=445; $face3y=285;
								$face4x=560; $face4y=250;
								$postx=05; $posty=300;


								$totx=1425;$toty=1225;		
							}
							if($postposition=="2nd Center Post from Left")
							{
							
							if($endpaneltype=='Extended')
							{
							
								$rightx=580; $righty=100;
								$leftx=25; $lefty=130;	
							}
						
								$face1x=70; $face1y=320;
								$face2x=230; $face2y=350;
								$face3x=415; $face3y=340;
								$face4x=550; $face4y=300;
								$postx=05; $posty=300;


								$totx=1425;$toty=1225;		
							}
							if($postposition=="3rd Center Post from Left")
							{
							
							if($endpaneltype=='Extended')
							{
							
								$rightx=580; $righty=160;
								$leftx=35; $lefty=130;	
							}
						
								$face1x=80; $face1y=310;
								$face2x=200; $face2y=340;
								$face3x=350; $face3y=365;
								$face4x=540; $face4y=370;
								$postx=1; $posty=233;


								$totx=1425;$toty=1225;	
							}

						}
					}




				}
			
			

			
			
			
			
			
			
			
			
		}
		else{
			
			
			if($endpaneltype=='Extended')
			{
				
				
				$rightx=555; $righty=70;
				$leftx=20; $lefty=140;
			

			}
			else{
		
			
			
			
			$rightx=45; $righty=325;
			$leftx=30; $lefty=160;
		
			
			}
			$face1x=170; $face1y=340;
			$face2x=320; $face2y=300;
			$face3x=450; $face3y=260;
			$face4x=540; $face4y=235;
			$postx=575; $posty=85;
			$totx=410;$toty=300;
			
		}
	}
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;
	echo getcwd();

	
	/*Resize 1920X1440 to 640X480 Start*/
	$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

	$my_img =imagecreatefromjpeg("../".$path);
    list($origWidth, $origHeight) = getimagesize("../".$path);

   
 
	
	$w =640;
	$h =480;
   // $img=$target;
    $extn = strtolower($extn);
 
        //$img = imagecreatefromjpeg($targett);
		
	
  
    $a = imagecreatetruecolor($w, $h);
    
    imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);
	
    imagejpeg($a,'img2/'.$newcpy,300);

	
	
	
	
	
	
	
	
	$resize="img2/".$osc."_".$im_id.".jpg";
	
	
		/*Resize 1920X1440 to 640X480 END*/
	
	
	
		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

		//For Online.....
		//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
		//echo $face1;
	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $face2x, $face2y, $face2, $text_colour );
	imagestring( $my_img, 5, $face3x, $face3y, $face3, $text_colour);
	imagestring( $my_img, 5, $face4x, $face4y, $face4, $text_colour);
	imagestring( $my_img, 5, $postx, $posty, $post, $text_colour);
	if($endpaneltype=='Extended')
	{
	imagestring( $my_img, 5, $leftx, $lefty, $left, $text_colour);
	imagestring( $my_img, 5, $rightx, $righty, $right, $text_colour);
	}
	imagestring( $my_img, 5, $totx, $toty,$tot,$text_colour);

//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));



	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");		
		
		
		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/

	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
	imagedestroy( $my_img );
}else if($mod=="ES40"){
	if($ends==1){
			//$img="NORADBOTHENDS.jpg";
	}else if($ends==2){
			//$img="NORADRIGHTEND.jpg";
		$left="";
	}else if($ends==3){
			//$img="NORADLEFTEND.jpg";
		$right="";
	}else if($ends==4){
			//$img="NORADNOENDS.jpg";
		$right="";
		$left="";
	}

	if($bay=="1BAY"){
		if($face1=="No Glass"){
			$face1="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES-401BAY/".$img.".jpg";
		$face1x=380;$face1y=335;
		$postx=500; $posty=150;
		$rightx=140;$righty=330;
		$leftx=170;$lefty=90;
		$totx=420;$toty=360;
	}else if($bay=="2BAY"){
		if($face1=="No Glass"||$face2=="No Glass"){
			$face1="";
			$face2="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES-402BAY/".$img.".jpg";
		$face1x=270;$face1y=345;
		$face2x=480;$face2y=255;
		$postx=540; $posty=140;
		$rightx=65; $righty=340;
		$leftx=85; $lefty=105;
		$totx=440;$toty=330;
	}else if($bay=="3BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES-403BAY/".$img.".jpg";
		$face1x=230;$face1y=365;
		$face2x=405;$face2y=285;
		$face3x=530;$face3y=210;
		$postx=555; $posty=95;
		$rightx=45; $righty=340;
		$leftx=55; $lefty=155;
		$totx=440;$toty=310;
	}else if($bay=="4BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"||$face4=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
			$face4="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES-404BAY/".$img.".jpg";
		$face1x=190; $face1y=355;
		$face2x=350; $face2y=275;
		$face3x=460; $face3y=210;
		$face4x=545; $face4y=170;
		$postx=575; $posty=85;
		$rightx=45; $righty=325;
		$leftx=40; $lefty=180;
		$totx=430;$toty=265;
	}
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;
	echo getcwd();

	
	
	/*Resize 1920X1440 to 640X480 Start*/
	$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

	$my_img =imagecreatefromjpeg("../".$path);
    list($origWidth, $origHeight) = getimagesize("../".$path);

   
 
	
	$w =640;
	$h =480;
   // $img=$target;
    $extn = strtolower($extn);
 
        //$img = imagecreatefromjpeg($targett);
		
	
  
    $a = imagecreatetruecolor($w, $h);
    
    imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);
	
    imagejpeg($a,'img2/'.$newcpy,300);

	
	
	
	
	
	
	
	
	$resize="img2/".$osc."_".$im_id.".jpg";
	
	
		/*Resize 1920X1440 to 640X480 END*/
	
	
	
	
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;

		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

		//For Online.....
		//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
		//echo $face1;
	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $face2x, $face2y, $face2, $text_colour );
	imagestring( $my_img, 5, $face3x, $face3y, $face3, $text_colour);
	imagestring( $my_img, 5, $face4x, $face4y, $face4, $text_colour);
	imagestring( $my_img, 5, $postx, $posty, $post, $text_colour);
	imagestring( $my_img, 5, $leftx, $lefty, $left, $text_colour);
	imagestring( $my_img, 5, $rightx, $righty, $right, $text_colour);
	imagestring( $my_img, 5, $totx, $toty,$tot,$text_colour);

//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// $marge_right = 545;
		// $marge_bottom = 425;
		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);


//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));



	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");	


		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/
		
	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
	imagedestroy( $my_img );
}else if($mod=="ES53"){
	if($ends==1){
			//$img="NORADBOTHENDS.jpg";
	}else if($ends==2){
			//$img="NORADRIGHTEND.jpg";
		$left="";
	}else if($ends==3){
			//$img="NORADLEFTEND.jpg";
		$right="";
	}else if($ends==4){
			//$img="NORADNOENDS.jpg";
		$right="";
		$left="";
	}

	if($bay=="1BAY"){
		if($face1=="No Glass"){
			$face1="";

			$round_rad_a="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES531BAY/".$img.".jpg";


		if($gotoroundglass==1)
		{
			if($round_type=='Jshape')
			{
				if($round_face_a=='yes')
				{
					$round_rad_ax=305; $round_rad_ay=125;
					$face1x=300; $face1y=375;
				}
				
				
				
			}	
			if($round_type=='Lshape')
			{
				if($round_face_a=='yes')
				{
					
					$round_rad_ax=310; $round_rad_ay=295;
					$face1x=305; $face1y=160;
				}
				
				
				
			}
			$totx=15000;$toty=15000;	
		}
		else{
			
			
			$face1x=425;$face1y=280;
			$postx=500; $posty=150;
			$rightx=140;$righty=330;
			$leftx=170;$lefty=90;
			$totx=470;$toty=302;
		}

	}else if($bay=="2BAY"){
		if($face1=="No Glass"||$face2=="No Glass"){
			$face1="";
			$face2="";

			$round_rad_a="";
			$round_rad_b="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES532BAY/".$img.".jpg";


		if($gotoroundglass==1)
		{
			if($round_type=='Jshape')
			{
				if($round_face_a=='yes' && $round_face_b=='no')
				{
					$round_rad_ax=190; $round_rad_ay=160;
					$face1x=500; $face1y=270;
					$face2x=380; $face2y=85;	
				}
				elseif($round_face_a=='no' && $round_face_b=='yes')
				{
					$round_rad_bx=328; $round_rad_by=80;
					$face1x=310; $face1y=310;
					$face2x=530; $face2y=150;
				}
				elseif($round_face_a=='yes' && $round_face_b=='yes')
				{
					$round_rad_ax=265; $round_rad_ay=180;
					$round_rad_bx=370; $round_rad_by=180;
					
					$face1x=70; $face1y=345;
					
					$face2x=555; $face2y=335;				
				}
				
				
			}	
			if($round_type=='Lshape')
			{
				if($round_face_a=='yes' && $round_face_b=='no')
				{
					$round_rad_ax=450; $round_rad_ay=125;
					
					$face1x=270; $face1y=50; 
					
					$face2x=125; $face2y=250; //3	
				}
				elseif($round_face_a=='no' && $round_face_b=='yes')
				{
					$round_rad_bx=445; $round_rad_by=190;
					
					$face1x=270; $face1y=105; 
					
					$face2x=185; $face2y=280; //3
				}
				elseif($round_face_a=='yes' && $round_face_b=='yes')
				{
					$round_rad_ax=250; $round_rad_ay=240; //left
					$round_rad_bx=358; $round_rad_by=240;//right
					
					$face1x=125; $face1y=140;//8-1/2   
					
					
					$face2x=490; $face2y=140;				
				}
				
				
			}
			$totx=15000;$toty=15000;	
		}
		else{
			
			
			
			$face1x=335;$face1y=290;
			$face2x=525;$face2y=165;
			$postx=540; $posty=120;
			$rightx=65; $righty=340;
			$leftx=85; $lefty=105;
			$totx=480;$toty=240;
			
		}
	}else if($bay=="3BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"){
			$face1="";
			$face2="";
			$face3="";

			$round_rad_a="";
			$round_rad_b="";
			$round_rad_c="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES533BAY/".$img.".jpg";





		if($gotoroundglass==1)
		{
			if($round_type=='Jshape')
			{
				if($round_face_a=='yes' && $round_face_b=='no' && $round_face_c=='no')
				{
					$round_rad_ax=270; $round_rad_ay=245;
					$face1x=515; $face1y=290;
					$face2x=350; $face2y=130;
					$face3x=255; $face3y=65;	
				}
				elseif($round_face_a=='no' && $round_face_b=='yes' && $round_face_c=='no')
				{
					$round_rad_bx=295; $round_rad_by=140;
					$face1x=345; $face1y=365;
					$face2x=460; $face2y=180;
					$face3x=380; $face3y=60;
				}
				elseif($round_face_a=='no' && $round_face_b=='no' && $round_face_c=='yes')
				{
					$round_rad_cx=410; $round_rad_cy=40;
					$face1x=270; $face1y=350;
					$face2x=465; $face2y=200;
					$face3x=560; $face3y=90;					
				}
				elseif($round_face_a=='yes' && $round_face_b=='yes' && $round_face_c=='no')
				{
					$round_rad_ax=270; $round_rad_ay=210;
					$round_rad_bx=350; $round_rad_by=185;
					$face1x=280; $face1y=440;
					$face2x=555; $face2y=255;
					$face3x=490; $face3y=100;					
				}
				elseif($round_face_a=='yes' && $round_face_b=='no' && $round_face_c=='yes')
				{
					$round_rad_ax=205; $round_rad_ay=220;
					$round_rad_cx=380; $round_rad_cy=70;
					$face1x=270; $face1y=430;
					$face2x=480; $face2y=245;
					$face3x=530; $face3y=90;				
				}
				elseif($round_face_a=='no' && $round_face_b=='yes' && $round_face_c=='yes')
				{
					$round_rad_ax=210; $round_rad_ay=145;
					$round_rad_bx=285; $round_rad_by=160;
					$face1x=520; $face1y=300;
					$face2x=420; $face2y=102;
					$face3x=175; $face3y=50;					
				}
				elseif($round_face_a=='yes' && $round_face_b=='yes' && $round_face_c=='yes')
				{
					$round_rad_ax=235; $round_rad_ay=130;
					$round_rad_bx=315; $round_rad_by=165;
					$round_rad_cx=395; $round_rad_cy=130;
					$face1x=15; $face1y=230;
					$face2x=285; $face2y=415;
					$face3x=585; $face3y=225;					
				}				
			}	
			if($round_type=='Lshape')
			{
				if($round_face_a=='yes' && $round_face_b=='no' && $round_face_c=='no')
				{
					$round_rad_ax=250; $round_rad_ay=50;
					$face1x=120; $face1y=75;
					$face2x=170; $face2y=200;
					$face3x=280; $face3y=365;
				}
				elseif($round_face_a=='no' && $round_face_b=='yes' && $round_face_c=='no')
				{
					$round_rad_bx=260; $round_rad_by=175;
					$face1x=20; $face1y=190;
					$face2x=150; $face2y=330;
					$face3x=470; $face3y=335;
				}
				elseif($round_face_a=='no' && $round_face_b=='no' && $round_face_c=='yes')
				{
					$round_rad_cx=370; $round_rad_cy=245;
					$face1x=390; $face1y=40;
					$face2x=280; $face2y=110;
					$face3x=95; $face3y=280;					
				}
				elseif($round_face_a=='yes' && $round_face_b=='yes' && $round_face_c=='no')
				{
					$round_rad_ax=430; $round_rad_ay=120;
					$round_rad_bx=360; $round_rad_by=130;
					$face1x=420; $face1y=50;
					$face2x=175; $face2y=100;
					$face3x=75; $face3y=305;				
				}
				elseif($round_face_a=='yes' && $round_face_b=='no' && $round_face_c=='yes')
				{
					$round_rad_ax=170; $round_rad_ay=230;
					$round_rad_cx=445; $round_rad_cy=220;
					$face1x=90; $face1y=150;
					$face2x=290; $face2y=125;
					$face3x=515; $face3y=150;						
				}
				elseif($round_face_a=='no' && $round_face_b=='yes' && $round_face_c=='yes')
				{
					$round_rad_ax=275; $round_rad_ay=200;
					$round_rad_cx=350; $round_rad_cy=230;
					$face1x=160; $face1y=150;
					$face2x=70; $face2y=260;
					$face3x=330; $face3y=430;				
				}
				elseif($round_face_a=='yes' && $round_face_b=='yes' && $round_face_c=='yes' )
				{
					$round_rad_ax=210; $round_rad_ay=195;
					$round_rad_bx=295; $round_rad_by=165;
					$round_rad_cx=375; $round_rad_cy=195;
					$face1x=40; $face1y=180;					
					$face2x=285; $face2y=60;
					$face3x=555; $face3y=185;
				}				
			}	
			$totx=15000;$toty=15000;	
		}
		else{
			$face1x=270;$face1y=305;
			$face2x=450;$face2y=195;
			$face3x=550;$face3y=128;
			$postx=555; $posty=95;
			$rightx=45; $righty=340;
			$leftx=55; $lefty=155;
			$totx=430;$toty=240;
		}

	}else if($bay=="4BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"||$face4=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
			$face4="";

			$round_rad_a="";
			$round_rad_b="";
			$round_rad_c="";
			$round_rad_d="";
				//$left="";
				//$right="";
			$tot="";
		}

	// $gotoroundglass=str_replace("\\","",$_POST["gotoroundglass"]);
	// $round_type=str_replace("\\","",$_POST["round_type"]);
	// $round_face_a=str_replace("\\","",$_POST["round_face_a"]);
	// $round_rad_a=str_replace("\\","",$_POST["round_rad_a"]);
	// $round_face_b=str_replace("\\","",$_POST["round_face_b"]);
	// $round_rad_b=str_replace("\\","",$_POST["round_rad_b"]);
	// $round_face_c=str_replace("\\","",$_POST["round_face_c"]);
	// $round_rad_c=str_replace("\\","",$_POST["round_rad_c"]);
	// $round_face_d=str_replace("\\","",$_POST["round_face_d"]);
	// $round_rad_d=str_replace("\\","",$_POST["round_rad_d"]);		

		$path="images/"."ES534BAY/".$img.".jpg";



		if($gotoroundglass==1)
		{
			if($round_type=='Jshape')
			{
				if($round_face_a=='yes' && $round_face_b=='no' && $round_face_c=='no' && $round_face_d=='no')
				{
					$round_rad_ax=155; $round_rad_ay=220;
					$face1x=200; $face1y=400;
					$face2x=415; $face2y=260;
					$face3x=530; $face3y=165;
					$face4x=580; $face4y=95;	
				}
				elseif($round_face_a=='no' && $round_face_b=='yes' && $round_face_c=='no' && $round_face_d=='no')
				{
					$round_rad_bx=333; $round_rad_by=178;
					$face1x=320; $face1y=390;
					$face2x=520; $face2y=250;
					$face3x=450; $face3y=140;
					$face4x=385; $face4y=80;
				}
				elseif($round_face_a=='no' && $round_face_b=='no' && $round_face_c=='yes' && $round_face_d=='no')
				{
					$round_rad_cx=340; $round_rad_cy=110;
					$face1x=375; $face1y=380;
					$face2x=435; $face2y=232;
					$face3x=456; $face3y=120;
					$face4x=365; $face4y=40;					
				}
				elseif($round_face_a=='no' && $round_face_b=='no' && $round_face_c=='no' && $round_face_d=='yes')
				{
					$round_rad_dx=450; $round_rad_dy=33;
					$face1x=250; $face1y=360;
					$face2x=395; $face2y=235;
					$face3x=500; $face3y=150;
					$face4x=560; $face4y=70;					
				}
				elseif($round_face_a=='yes' && $round_face_b=='yes' && $round_face_c=='no' && $round_face_d=='no')
				{
					$round_rad_ax=160; $round_rad_ay=150;
					$round_rad_bx=175; $round_rad_by=185;
					$face1x=30; $face1y=145;
					$face2x=60; $face2y=310;
					$face3x=300; $face3y=345;
					$face4x=510; $face4y=345;						
				}
				elseif($round_face_a=='yes' && $round_face_b=='no' && $round_face_c=='yes' && $round_face_d=='no')
				{
					$round_rad_ax=178; $round_rad_ay=239;
					$round_rad_cx=420; $round_rad_cy=222;
					$face1x=70; $face1y=360;
					$face2x=325; $face2y=380;
					$face3x=550; $face3y=320;
					$face4x=575; $face4y=200;					
				}
				elseif($round_face_a=='yes' && $round_face_b=='no' && $round_face_c=='no' && $round_face_d=='yes')
				{
					$round_rad_ax=145; $round_rad_ay=200;
					$round_rad_dx=485; $round_rad_dy=65;
					$face1x=135; $face1y=360;
					$face2x=375; $face2y=275;
					$face3x=520; $face3y=200;
					$face4x=585; $face4y=115;					
				}
				elseif($round_face_a=='no' && $round_face_b=='yes' && $round_face_c=='yes' && $round_face_d=='no')
				{
					$round_rad_bx=270; $round_rad_by=195;
					$round_rad_cx=370; $round_rad_cy=190;
					$face1x=15; $face1y=180;
					$face2x=125; $face2y=370;
					$face3x=520; $face3y=370;
					$face4x=585; $face4y=155;					
				}
				elseif($round_face_a=='no' && $round_face_b=='yes' && $round_face_c=='no' && $round_face_d=='yes')
				{
					$round_rad_bx=365; $round_rad_by=160;
					$round_rad_dx=130; $round_rad_dy=110;
					$face1x=580; $face1y=300;
					$face2x=490; $face2y=130;
					$face3x=305; $face3y=50;
					$face4x=130; $face4y=30;
				}
				elseif($round_face_a=='no' && $round_face_b=='no' && $round_face_c=='yes' && $round_face_d=='yes')
				{
					$round_rad_cx=290; $round_rad_cy=90;
					$round_rad_dx=245; $round_rad_dy=75;
					$face1x=430; $face1y=340;
					$face2x=425; $face2y=190;
					$face3x=380; $face3y=60;
					$face4x=225; $face4y=15;					
				}
				elseif($round_face_a=='yes' && $round_face_b=='yes' && $round_face_c=='yes' && $round_face_d=='no')
				{
					$round_rad_ax=225; $round_rad_ay=165;
					$round_rad_bx=290; $round_rad_by=195;
					$round_rad_cx=380; $round_rad_cy=175;
					$face1x=20; $face1y=235;
					$face2x=240; $face2y=425;
					$face3x=580; $face3y=280;
					$face4x=530; $face4y=105;					
				}
				elseif($round_face_a=='yes' && $round_face_b=='yes' && $round_face_c=='no' && $round_face_d=='yes')
				{
					$round_rad_ax=240; $round_rad_ay=280;
					$round_rad_bx=310; $round_rad_by=280;
					$round_rad_dx=370; $round_rad_dy=130;
					$face1x=140; $face1y=430;
					$face2x=400; $face2y=400;
					$face3x=500; $face3y=250;
					$face4x=490; $face4y=130;						
				}
				elseif($round_face_a=='yes' && $round_face_b=='no' && $round_face_c=='yes' && $round_face_d=='yes')
				{
					$round_rad_ax=355; $round_rad_ay=275;
					$round_rad_cx=300; $round_rad_cy=85;
					$round_rad_dx=245; $round_rad_dy=80;
					$face1x=500; $face1y=345;
					$face2x=470; $face2y=160;
					$face3x=380; $face3y=40;
					$face4x=190; $face4y=20;					
				}
				elseif($round_face_a=='no' && $round_face_b=='yes' && $round_face_c=='yes' && $round_face_d=='yes')
				{
					$round_rad_bx=330; $round_rad_by=170;
					$round_rad_cx=260; $round_rad_cy=145;
					$round_rad_dx=210; $round_rad_dy=180;
					$face1x=545; $face1y=315;
					$face2x=470; $face2y=130;
					$face3x=230; $face3y=70;
					$face4x=55; $face4y=180;					
				}
				elseif($round_face_a=='yes' && $round_face_b=='yes' && $round_face_c=='yes' && $round_face_d=='yes')
				{
					$round_rad_ax=240; $round_rad_ay=130;
					$round_rad_bx=260; $round_rad_by=185;
					$round_rad_cx=370; $round_rad_cy=180;
					$round_rad_dx=380; $round_rad_dy=130;
					$face1x=50; $face1y=135;
					$face2x=120; $face2y=360;
					$face3x=500; $face3y=350;
					$face4x=550; $face4y=120;	
				}
				
			}	
			if($round_type=='Lshape')
			{
				if($round_face_a=='yes' && $round_face_b=='no' && $round_face_c=='no' && $round_face_d=='no')
				{
					$round_rad_ax=340; $round_rad_ay=60;
					$face1x=225; $face1y=35;
					$face2x=220; $face2y=140;
					$face3x=220; $face3y=245;
					$face4x=220; $face4y=380;
				}
				elseif($round_face_a=='no' && $round_face_b=='yes' && $round_face_c=='no' && $round_face_d=='no')
				{
					$round_rad_bx=220; $round_rad_by=110;
					$face1x=145; $face1y=55;
					$face2x=80; $face2y=150;
					$face3x=170; $face3y=260;
					$face4x=190; $face4y=380;
				}
				elseif($round_face_a=='no' && $round_face_b=='no' && $round_face_c=='yes' && $round_face_d=='no')
				{
					$round_rad_cx=257; $round_rad_cy=193;
					$face1x=220; $face1y=65;
					$face2x=170; $face2y=140;
					$face3x=100; $face3y=245;
					$face4x=250; $face4y=380;					
				}
				elseif($round_face_a=='no' && $round_face_b=='no' && $round_face_c=='no' && $round_face_d=='yes')
				{
					$round_rad_dx=245; $round_rad_dy=300;
					$face1x=390; $face1y=35;
					$face2x=305; $face2y=95;
					$face3x=190; $face3y=175;
					$face4x=65; $face4y=315;					
				}
				elseif($round_face_a=='yes' && $round_face_b=='yes' && $round_face_c=='no' && $round_face_d=='no')
				{
					$round_rad_ax=330; $round_rad_ay=250;
					$round_rad_bx=260; $round_rad_by=220;
					$face1x=350; $face1y=445;
					$face2x=100; $face2y=300;
					$face3x=135; $face3y=150;
					$face4x=205; $face4y=65;						
				}
				elseif($round_face_a=='yes' && $round_face_b=='no' && $round_face_c=='yes' && $round_face_d=='no')
				{
					$round_rad_ax=195; $round_rad_ay=80;
					$round_rad_cx=250; $round_rad_cy=240;
					$face1x=70; $face1y=90;
					$face2x=60; $face2y=210;
					$face3x=135; $face3y=380;
					$face4x=390; $face4y=435;					
				}
				elseif($round_face_a=='yes' && $round_face_b=='no' && $round_face_c=='no' && $round_face_d=='yes')
				{
					$round_rad_ax=335; $round_rad_ay=300;
					$round_rad_dx=440; $round_rad_dy=85;
					$face1x=165; $face1y=365;					
					$face2x=230; $face2y=210;
					$face3x=290; $face3y=135;
					$face4x=365; $face4y=50;
				}
				elseif($round_face_a=='no' && $round_face_b=='yes' && $round_face_c=='yes' && $round_face_d=='no')
				{
					$round_rad_bx=190; $round_rad_by=185;
					$round_rad_cx=230; $round_rad_cy=230;
					$face1x=170; $face1y=70;
					$face2x=35; $face2y=200;
					$face3x=130; $face3y=410;
					$face4x=420; $face4y=400;					
				}
				elseif($round_face_a=='no' && $round_face_b=='yes' && $round_face_c=='no' && $round_face_d=='yes')
				{
					$round_rad_bx=190; $round_rad_by=115;
					$round_rad_dx=380; $round_rad_dy=250;
					$face1x=140; $face1y=40;
					$face2x=38; $face2y=145;
					$face3x=110; $face3y=290;
					$face4x=340; $face4y=440;
				}
				elseif($round_face_a=='no' && $round_face_b=='no' && $round_face_c=='yes' && $round_face_d=='yes')
				{
					$round_rad_cx=365; $round_rad_cy=115;
					$round_rad_dx=430; $round_rad_dy=115;
					$face1x=60; $face1y=300;
					$face2x=160; $face2y=160;
					$face3x=290; $face3y=50;
					$face4x=515; $face4y=60;					
				}
				elseif($round_face_a=='yes' && $round_face_b=='yes' && $round_face_c=='yes' && $round_face_d=='no')
				{
					$round_rad_ax=410; $round_rad_ay=145;
					$round_rad_bx=355; $round_rad_by=115;
					$round_rad_cx=280; $round_rad_cy=135;
					$face1x=570; $face1y=160;
					$face2x=360; $face2y=30;
					$face3x=115; $face3y=100;
					$face4x=30; $face4y=300;					
				}
				elseif($round_face_a=='yes' && $round_face_b=='yes' && $round_face_c=='no' && $round_face_d=='yes')
				{
					$round_rad_ax=391; $round_rad_ay=90;
					$round_rad_bx=320; $round_rad_by=90;
					$round_rad_dx=270; $round_rad_dy=270;
					$face1x=430; $face1y=30;						
					$face2x=220; $face2y=60;
					$face3x=145; $face3y=170;
					$face4x=110; $face4y=340;
				}
				elseif($round_face_a=='yes' && $round_face_b=='no' && $round_face_c=='yes' && $round_face_d=='yes')
				{
					$round_rad_ax=345; $round_rad_ay=265;
					$round_rad_cx=270; $round_rad_cy=245;
					$round_rad_dx=298; $round_rad_dy=80;
					$face1x=385; $face1y=445;
					$face2x=125; $face2y=340;
					$face3x=115; $face3y=180;
					$face4x=190; $face4y=50;					
				}
				elseif($round_face_a=='no' && $round_face_b=='yes' && $round_face_c=='yes' && $round_face_d=='yes')
				{
					$round_rad_bx=300; $round_rad_by=145;
					$round_rad_cx=370; $round_rad_cy=130;
					$round_rad_dx=415; $round_rad_dy=170;
					$face1x=40; $face1y=305;					
					$face2x=130; $face2y=110;
					$face3x=380; $face3y=50;
					$face4x=580; $face4y=180;
				}
				elseif($round_face_a=='yes' && $round_face_b=='yes' && $round_face_c=='yes' && $round_face_d=='yes')
				{
					$round_rad_ax=390; $round_rad_ay=195;
					$round_rad_bx=350; $round_rad_by=140;
					$round_rad_cx=260; $round_rad_cy=140;
					$round_rad_dx=220; $round_rad_dy=195;
					$face1x=580; $face1y=270;
					$face2x=450; $face2y=75;	
					$face3x=145; $face3y=75;
					$face4x=10; $face4y=280;
				}
				
			}	
			$totx=15000;$toty=15000;	
		}
		else{
			$face1x=200; $face1y=310;
			$face2x=370; $face2y=220;
			$face3x=485; $face3y=155;
			$face4x=570; $face4y=105;
			$postx=575; $posty=85;
			$rightx=45; $righty=325;
			$leftx=40; $lefty=180;
			$totx=440;$toty=200;	

		}










	}
	
	
	
	
	
	
	
	
	
	/*Resize 1920X1440 to 640X480 Start*/
	$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

	$my_img =imagecreatefromjpeg("../".$path);
    list($origWidth, $origHeight) = getimagesize("../".$path);

   
 
	
	$w =640;
	$h =480;
   // $img=$target;
    $extn = strtolower($extn);
 
        //$img = imagecreatefromjpeg($targett);
		
	
  
    $a = imagecreatetruecolor($w, $h);
    
    imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);
	
    imagejpeg($a,'img2/'.$newcpy,300);

	
	
	
	
	
	
	
	
	$resize="img2/".$osc."_".$im_id.".jpg";
	
	
		/*Resize 1920X1440 to 640X480 END*/
	
	
	
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;
	echo getcwd();

		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

		//For Online.....
		// $my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
		//echo $face1;
	imagestring( $my_img, 5, $round_rad_ax, $round_rad_ay, $round_rad_a, $text_colour);
	imagestring( $my_img, 5, $round_rad_bx, $round_rad_by, $round_rad_b, $text_colour);
	imagestring( $my_img, 5, $round_rad_cx, $round_rad_cy, $round_rad_c, $text_colour);
	imagestring( $my_img, 5, $round_rad_dx, $round_rad_dy, $round_rad_d, $text_colour);

	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $face2x, $face2y, $face2, $text_colour );
	imagestring( $my_img, 5, $face3x, $face3y, $face3, $text_colour);
	imagestring( $my_img, 5, $face4x, $face4y, $face4, $text_colour);
	imagestring( $my_img, 5, $postx, $posty, $post, $text_colour);
	imagestring( $my_img, 5, $leftx, $lefty, "", $text_colour);
	imagestring( $my_img, 5, $rightx, $righty, "", $text_colour);
	imagestring( $my_img, 5, $totx, $toty,$tot,$text_colour);


//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// $marge_right = 545;
		// $marge_bottom = 425;
		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);


//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));



	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");	


		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/
		
	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
	imagedestroy( $my_img );
}else if($mod=="ES67"){
	if($ends==1){
			//$img="BOTHENDS.jpg";
	}else if($ends==2){
			//$img="RIGHTEND.jpg";
		$left="";
	}else if($ends==3){
			//$img="LEFTEND.jpg";
		$right="";
	}else if($ends==4){
			//$img="NOENDS.jpg";
		$right="";
		$left="";
	}

	if($bay=="1BAY"){
		if($face1=="No Glass"){
			$face1="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES-671BAY/".$img.".jpg";
		$face1x=340;$face1y=330;
		$postx=500; $posty=150;
		$rightx=140;$righty=330;
		$leftx=170;$lefty=90;
		$totx=380;$toty=365;
	}else if($bay=="2BAY"){
		if($face1=="No Glass"||$face2=="No Glass"){
			$face1="";
			$face2="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES-672BAY/".$img.".jpg";
		$face1x=265;$face1y=335;
		$face2x=455;$face2y=250;
		$postx=540; $posty=120;
		$rightx=65; $righty=340;
		$leftx=85; $lefty=105;
		$totx=400;$toty=320;
	}else if($bay=="3BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES-673BAY/".$img.".jpg";
		$face1x=190;$face1y=330;
		$face2x=370;$face2y=260;
		$face3x=515;$face3y=195;
		$postx=555; $posty=95;
		$rightx=45; $righty=340;
		$leftx=55; $lefty=155;
		$totx=380;$toty=283;
	}else if($bay=="4BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"||$face4=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
			$face4="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES-674BAY/".$img.".jpg";
		$face1x=170; $face1y=330;
		$face2x=325; $face2y=255;
		$face3x=440; $face3y=205;
		$face4x=540; $face4y=150;
		$postx=575; $posty=85;
		$rightx=45; $righty=325;
		$leftx=40; $lefty=180;
		$totx=420;$toty=246;
	}
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;
	echo getcwd();

	
	/*Resize 1920X1440 to 640X480 Start*/
	$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

	$my_img =imagecreatefromjpeg("../".$path);
    list($origWidth, $origHeight) = getimagesize("../".$path);

   
 
	
	$w =640;
	$h =480;
   // $img=$target;
    $extn = strtolower($extn);
 
        //$img = imagecreatefromjpeg($targett);
		
	
  
    $a = imagecreatetruecolor($w, $h);
    
    imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);
	
    imagejpeg($a,'img2/'.$newcpy,300);

	
	
	
	
	
	
	
	
	$resize="img2/".$osc."_".$im_id.".jpg";
	
	
		/*Resize 1920X1440 to 640X480 END*/
	
	
	
	
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;

		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

		//For Online.....
		//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
		//echo $face1;
	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $face2x, $face2y, $face2, $text_colour );
	imagestring( $my_img, 5, $face3x, $face3y, $face3, $text_colour);
	imagestring( $my_img, 5, $face4x, $face4y, $face4, $text_colour);
	imagestring( $my_img, 5, $postx, $posty, $post, $text_colour);
	imagestring( $my_img, 5, $leftx, $lefty, $left, $text_colour);
	imagestring( $my_img, 5, $rightx, $righty, $right, $text_colour);
	imagestring( $my_img, 5, $totx, $toty,$tot,$text_colour);

//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// $marge_right = 545;
		// $marge_bottom = 425;
		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);


//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));



	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");		
		
		
		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/

	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
	imagedestroy( $my_img );
}else if($mod=="ES73"){
	if($ends==1){
			//$img="BOTHENDS.jpg";
	}else if($ends==2){
			//$img="RIGHTEND.jpg";
		$left="";
	}else if($ends==3){
			//$img="LEFTEND.jpg";
		$right="";
	}else if($ends==4){
			//$img="NOENDS.jpg";
		$right="";
		$left="";
	}

	if($bay=="1BAY"){
		if($face1=="No Glass"){
			$face1="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES-731BAY/".$img.".jpg";
		$face1x=350;$face1y=340;
		$postx=500; $posty=150;
		$rightx=140;$righty=330;
		$leftx=170;$lefty=90;
		$totx=395;$toty=370;
	}else if($bay=="2BAY"){
		if($face1=="No Glass"||$face2=="No Glass"){
			$face1="";
			$face2="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES-732BAY/".$img.".jpg";
		$face1x=285;$face1y=345;
		$face2x=460;$face2y=260;
		$postx=540; $posty=120;
		$rightx=65; $righty=340;
		$leftx=85; $lefty=105;
		$totx=420;$toty=330;
	}else if($bay=="3BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES-733BAY/".$img.".jpg";
		$face1x=230;$face1y=350;
		$face2x=400;$face2y=265;
		$face3x=520;$face3y=205;
		$postx=555; $posty=95;
		$rightx=45; $righty=340;
		$leftx=55; $lefty=155;
		$totx=425;$toty=300;
	}else if($bay=="4BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"||$face4=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
			$face4="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES-734BAY/".$img.".jpg";
		$face1x=190; $face1y=350;
		$face2x=340; $face2y=265;
		$face3x=450; $face3y=205;
		$face4x=538; $face4y=160;
		$postx=575; $posty=85;
		$rightx=45; $righty=325;
		$leftx=40; $lefty=180;
		$totx=420;$toty=260;
	}
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;
	echo getcwd();

		
	
	/*Resize 1920X1440 to 640X480 Start*/
	$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

	$my_img =imagecreatefromjpeg("../".$path);
    list($origWidth, $origHeight) = getimagesize("../".$path);

   
 
	
	$w =640;
	$h =480;
   // $img=$target;
    $extn = strtolower($extn);
 
        //$img = imagecreatefromjpeg($targett);
		
	
  
    $a = imagecreatetruecolor($w, $h);
    
    imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);
	
    imagejpeg($a,'img2/'.$newcpy,300);

	
	
	
	
	
	
	
	
	$resize="img2/".$osc."_".$im_id.".jpg";
	
	
		/*Resize 1920X1440 to 640X480 END*/
	
	
	
		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

		//For Online.....
		//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
		//echo $face1;
	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $face2x, $face2y, $face2, $text_colour );
	imagestring( $my_img, 5, $face3x, $face3y, $face3, $text_colour);
	imagestring( $my_img, 5, $face4x, $face4y, $face4, $text_colour);
	imagestring( $my_img, 5, $postx, $posty, $post, $text_colour);
	imagestring( $my_img, 5, $leftx, $lefty, $left, $text_colour);
	imagestring( $my_img, 5, $rightx, $righty, $right, $text_colour);
	imagestring( $my_img, 5, $totx, $toty,$tot,$text_colour);

//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// $marge_right = 545;
		// $marge_bottom = 425;
		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);


//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));



	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");	


		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/
		
	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
	imagedestroy( $my_img );
}else if($mod=="ES82"){
	if($ends==1){
			//$img="NORADBOTHENDS.jpg";
	}else if($ends==2){
			//$img="NORADRIGHTEND.jpg";
		$left="";
	}else if($ends==3){
			//$img="NORADLEFTEND.jpg";
			//$right="";
	}else if($ends==4){
			//$img="NORADNOENDS.jpg";
			//$right="";
		$left="";
	}

	if($bay=="1BAY"){
		if($face1=="No Glass"){
			$face1="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES821BAY/".$img.".jpg";
		$face1x=420;$face1y=310;
		$postx=500; $posty=150;
		$rightx=55;$righty=325;
		$leftx=115;$lefty=305;
		$totx=465;$toty=340;
	}else if($bay=="2BAY"){
		if($face1=="No Glass"||$face2=="No Glass"){
			$face1="";
			$face2="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES822BAY/".$img.".jpg";
		$face1x=300;$face1y=335;
		$face2x=505;$face2y=270;
		$postx=540; $posty=120;
		$rightx=35; $righty=352;
		$leftx=65; $lefty=338;
		$totx=440;$toty=320;
	}else if($bay=="3BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES823BAY/".$img.".jpg";
		$face1x=230;$face1y=320;
		$face2x=405;$face2y=265;
		$face3x=540;$face3y=220;
		$postx=555; $posty=95;
		$rightx=20; $righty=336;
		$leftx=45; $lefty=321;
		$totx=440;$toty=290;
	}else if($bay=="4BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"||$face4=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
			$face4="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES824BAY/".$img.".jpg";
		$face1x=185; $face1y=320;
		$face2x=345; $face2y=264;
		$face3x=465; $face3y=220;
		$face4x=560; $face4y=185;
		$postx=575; $posty=85;
		$rightx=15; $righty=325;
		$leftx=35; $lefty=310;
		$totx=435;$toty=260;
	}
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;
	echo getcwd();

	
	/*Resize 1920X1440 to 640X480 Start*/
	$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

	$my_img =imagecreatefromjpeg("../".$path);
    list($origWidth, $origHeight) = getimagesize("../".$path);

   
 
	
	$w =640;
	$h =480;
   // $img=$target;
    $extn = strtolower($extn);
 
        //$img = imagecreatefromjpeg($targett);
		
	
  
    $a = imagecreatetruecolor($w, $h);
    
    imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);
	
    imagejpeg($a,'img2/'.$newcpy,300);

	
	
	
	
	
	
	
	
	$resize="img2/".$osc."_".$im_id.".jpg";
	
	
		/*Resize 1920X1440 to 640X480 END*/
	
	
	
		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

		//For Online.....
		//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
		//echo $face1;
	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $face2x, $face2y, $face2, $text_colour );
	imagestring( $my_img, 5, $face3x, $face3y, $face3, $text_colour);
	imagestring( $my_img, 5, $face4x, $face4y, $face4, $text_colour);
	imagestring( $my_img, 5, $postx, $posty, $post, $text_colour);
	imagestring( $my_img, 5, $leftx, $lefty, (str_replace('"',"", $right)-2).'"', $text_colour);
	imagestring( $my_img, 5, $rightx, $righty, $right, $text_colour);
	imagestring( $my_img, 5, $totx, $toty,$tot,$text_colour);

//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// $marge_right = 545;
		// $marge_bottom = 425;
		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);



//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));


	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");		
		
		
		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/

	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
	imagedestroy( $my_img );
}
else if($mod=="ES92"){
	if($ends==1){
			//$img="NORADBOTHENDS.jpg";
	}else if($ends==2){
			//$img="NORADRIGHTEND.jpg";
		$left="";
	}else if($ends==3){
			//$img="NORADLEFTEND.jpg";
			//$right="";
	}else if($ends==4){
			//$img="NORADNOENDS.jpg";
			//$right="";
		$left="";
	}

	if($bay=="1BAY"){
		if($face1=="No Glass"){
			$face1="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES921BAY/".$img.".jpg";
		$face1x=355;$face1y=350;
		$postx=500; $posty=150;

		$rightx=480;$righty=110;
    		//$rightx=155;$righty=340;
		$leftx=110;$lefty=347;
    		//$leftx=190;$lefty=315;

		$totx=396;$toty=385;
	}else if($bay=="2BAY"){
		if($face1=="No Glass"||$face2=="No Glass"){
			$face1="";
			$face2="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES922BAY/".$img.".jpg";
		$face1x=257;$face1y=345;
		$face2x=430;$face2y=250;
		$postx=540; $posty=120;
		$rightx=530; $righty=50;
		$leftx=20; $lefty=350;
		$totx=370;$toty=330;
	}else if($bay=="2BAYEXT"){
		if($face1=="No Glass"||$face2=="No Glass"){
			$face1="";
			$face2="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES922BAYEXT/".$img.".jpg";
		$face1x=270;$face1y=346;
		$face2x=455;$face2y=255;
		$postx=540; $posty=120;
		$rightx=555; $righty=135;
		$leftx=20; $lefty=345;
		$totx=405;$toty=310;
	}else if($bay=="3BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES923BAY/".$img.".jpg";
		$face1x=210;$face1y=370;
		$face2x=360;$face2y=295;
		$face3x=490;$face3y=225;
		$postx=515; $posty=95;
		$rightx=555; $righty=75;
		$leftx=20; $lefty=370;
		$totx=365;$toty=325;
	}else if($bay=="4BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"||$face4=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
			$face4="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES924BAY/".$img.".jpg";
		$face1x=165; $face1y=365;
		$face2x=300; $face2y=305;
		$face3x=415; $face3y=253;
		$face4x=515; $face4y=205;
		$postx=575; $posty=95;
		$rightx=570; $righty=90;
		$leftx=7; $lefty=360;
		$totx=390;$toty=293;
	}
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;
	echo getcwd();

		//For Offline.....
	
	/*Resize 1920X1440 to 640X480 Start*/
	$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

	$my_img =imagecreatefromjpeg("../".$path);
    list($origWidth, $origHeight) = getimagesize("../".$path);

   
 
	
	$w =640;
	$h =480;
   // $img=$target;
    $extn = strtolower($extn);
 
        //$img = imagecreatefromjpeg($targett);
		
	
  
    $a = imagecreatetruecolor($w, $h);
    
    imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);
	
    imagejpeg($a,'img2/'.$newcpy,300);

	
	
	
	
	
	
	
	
	$resize="img2/".$osc."_".$im_id.".jpg";
	
	
		/*Resize 1920X1440 to 640X480 END*/
	
	
	
		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

		//For Online.....
		//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
		//echo $face1;
	$inner_t=str_replace('"',"", $right)-15.75;
	if($inner_t=="8.25"){ $inner="8-1/4"; }
	if($inner_t=="9.25"){ $inner="9-1/4"; }
	if($inner_t=="10.25"){ $inner="10-1/4"; }
	if($inner_t=="11.25"){ $inner="11-1/4"; }
	if($inner_t=="12.25"){ $inner="12-1/4"; }
	if($inner_t=="13.25"){ $inner="13-1/4"; }
	if($inner_t=="14.25"){ $inner="14-1/4"; }
	if($inner_t=="15.25"){ $inner="15-1/4"; }
	if($inner_t=="16.25"){ $inner="16-1/4"; }
	if($inner_t=="17.25"){ $inner="17-1/4"; }
	if($inner_t=="18.25"){ $inner="18-1/4"; }
	if($inner_t=="19.25"){ $inner="19-1/4"; }
	if($inner_t=="20.25"){ $inner="20-1/4"; }
	if($inner_t=="21.25"){ $inner="21-1/4"; }
	if($inner_t=="22.25"){ $inner="22-1/4"; }
	if($inner_t=="23.25"){ $inner="23-1/4"; }
	if($inner_t=="24.25"){ $inner="24-1/4"; }
	if($inner_t=="25.25"){ $inner="25-1/4"; }
	if($inner_t=="26.25"){ $inner="26-1/4"; }
	if($inner_t=="27.25"){ $inner="27-1/4"; }
	if($inner_t=="28.25"){ $inner="28-1/4"; }
	if($inner_t=="29.25"){ $inner="29-1/4"; }
	if($inner_t=="30.25"){ $inner="30-1/4"; }
	if($inner_t=="31.25"){ $inner="31-1/4"; }
	if($inner_t=="32.25"){ $inner="32-1/4"; }
	if($inner_t=="33.25"){ $inner="33-1/4"; }
	if($inner_t=="34.25"){ $inner="34-1/4"; }
	if($inner_t=="35.25"){ $inner="35-1/4"; }
	if($inner_t=="36.25"){ $inner="36-1/4"; }
	if($inner_t=="37.25"){ $inner="37-1/4"; }
	if($inner_t=="38.25"){ $inner="38-1/4"; }
	$counter_t=str_replace('"',"", $right)-2.25;
	if($counter_t=="21.75"){ $counter="21-3/4"; }
	if($counter_t=="22.75"){ $counter="22-3/4"; }
	if($counter_t=="23.75"){ $counter="23-3/4"; }
	if($counter_t=="24.75"){ $counter="24-3/4"; }
	if($counter_t=="25.75"){ $counter="25-3/4"; }
	if($counter_t=="26.75"){ $counter="26-3/4"; }
	if($counter_t=="27.75"){ $counter="27-3/4"; }
	if($counter_t=="28.75"){ $counter="28-3/4"; }
	if($counter_t=="29.75"){ $counter="29-3/4"; }
	if($counter_t=="30.75"){ $counter="30-3/4"; }
	if($counter_t=="31.75"){ $counter="31-3/4"; }
	if($counter_t=="32.75"){ $counter="32-3/4"; }
	if($counter_t=="33.75"){ $counter="33-3/4"; }
	if($counter_t=="34.75"){ $counter="34-3/4"; }
	if($counter_t=="35.75"){ $counter="35-3/4"; }
	if($counter_t=="36.75"){ $counter="36-3/4"; }
	if($counter_t=="37.75"){ $counter="37-3/4"; }
	if($counter_t=="38.75"){ $counter="38-3/4"; }
	if($counter_t=="39.75"){ $counter="39-3/4"; }
	if($counter_t=="40.75"){ $counter="40-3/4"; }
	if($counter_t=="41.75"){ $counter="41-3/4"; }
	if($counter_t=="42.75"){ $counter="42-3/4"; }
	if($counter_t=="43.75"){ $counter="43-3/4"; }
	if($counter_t=="44.75"){ $counter="44-3/4"; }
	if($counter_t=="45.75"){ $counter="45-3/4"; }
	if($counter_t=="46.75"){ $counter="46-3/4"; }
	if($counter_t=="47.75"){ $counter="47-3/4"; }
	if($counter_t=="48.75"){ $counter="48-3/4"; }
	if($counter_t=="49.75"){ $counter="49-3/4"; }
	if($counter_t=="50.75"){ $counter="50-3/4"; }
	if($counter_t=="51.75"){ $counter="51-3/4"; }
	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $face2x, $face2y, $face2, $text_colour );
	imagestring( $my_img, 5, $face3x, $face3y, $face3, $text_colour);
	imagestring( $my_img, 5, $face4x, $face4y, $face4, $text_colour);
	imagestring( $my_img, 5, $postx, $posty, $post, $text_colour);
	imagestring( $my_img, 5, $leftx, $lefty, ($inner).'"', $text_colour);
	imagestring( $my_img, 5, $rightx, $righty, ($counter).'"', $text_colour);
	imagestring( $my_img, 5, $totx, $toty,$tot,$text_colour);

//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// $marge_right = 545;
		// $marge_bottom = 425;
		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);


//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));



	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");	


		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/
		
	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
	imagedestroy( $my_img );
}
else if($mod=="ES90"){
	if($ends==1){
			//$img="NORADBOTHENDS.jpg";
	}else if($ends==2){
			//$img="NORADRIGHTEND.jpg";
		$left="";
	}else if($ends==3){
			//$img="NORADLEFTEND.jpg";
			//$right="";
	}else if($ends==4){
			//$img="NORADNOENDS.jpg";
			//$right="";
		$left="";
	}

	if($bay=="1BAY"){
		if($face1=="No Glass"){
			$face1="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES901BAY/".$img.".jpg";
		$face1x=400;$face1y=330;
		$postx=500; $posty=150;
		$rightx=80;$righty=320;
		$leftx=125;$lefty=305;
		$totx=435;$toty=360;
	}else if($bay=="2BAY"){
		if($face1=="No Glass"||$face2=="No Glass"){
			$face1="";
			$face2="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES902BAY/".$img.".jpg";
		$face1x=330;$face1y=352;
		$face2x=500;$face2y=252;
		$postx=540; $posty=120;
		$rightx=35; $righty=330;
		$leftx=75; $lefty=320;
		$totx=450;$toty=330;
	}else if($bay=="2BAYEXT"){
		if($face1=="No Glass"||$face2=="No Glass"){
			$face1="";
			$face2="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES902BAYEXT/".$img.".jpg";
		$face1x=280;$face1y=350;
		$face2x=475;$face2y=235;
		$postx=540; $posty=120;
		$rightx=35; $righty=330;
		$leftx=75; $lefty=320;
		$totx=400;$toty=320;
	}else if($bay=="3BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES903BAY/".$img.".jpg";
		$face1x=260;$face1y=360;
		$face2x=415;$face2y=265;
		$face3x=530;$face3y=187;
		$postx=555; $posty=95;
		$rightx=30; $righty=340;
		$leftx=55; $lefty=325;
		$totx=420;$toty=297;
	}else if($bay=="4BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"||$face4=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
			$face4="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES904BAY/".$img.".jpg";
		$face1x=210; $face1y=369;
		$face2x=350; $face2y=288;
		$face3x=465; $face3y=223;
		$face4x=555; $face4y=170;
		$postx=575; $posty=85;
		$rightx=25; $righty=345;
		$leftx=50; $lefty=335;
		$totx=425;$toty=285;
	}
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;
	echo getcwd();

		//For Offline.....
	
	/*Resize 1920X1440 to 640X480 Start*/
	$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

	$my_img =imagecreatefromjpeg("../".$path);
    list($origWidth, $origHeight) = getimagesize("../".$path);

   
 
	
	$w =640;
	$h =480;
   // $img=$target;
    $extn = strtolower($extn);
 
        //$img = imagecreatefromjpeg($targett);
		
	
  
    $a = imagecreatetruecolor($w, $h);
    
    imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);
	
    imagejpeg($a,'img2/'.$newcpy,300);

	
	
	
	
	
	
	
	
	$resize="img2/".$osc."_".$im_id.".jpg";
	
	
		/*Resize 1920X1440 to 640X480 END*/
	
	
	
		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

		//For Online.....
		//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
		//echo $face1;
	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $face2x, $face2y, $face2, $text_colour );
	imagestring( $my_img, 5, $face3x, $face3y, $face3, $text_colour);
	imagestring( $my_img, 5, $face4x, $face4y, $face4, $text_colour);
	imagestring( $my_img, 5, $postx, $posty, $post, $text_colour);
		//imagestring( $my_img, 5, $leftx, $lefty, (str_replace('"',"", $right)-0).'"', $text_colour);
	imagestring( $my_img, 5, $rightx, $righty, $right, $text_colour);
	imagestring( $my_img, 5, $totx, $toty,$tot,$text_colour);

//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// if($bay=="2BAYEXT")
		// {
		// $marge_right = 535;	
		// }
		// else{
		// $marge_right = 585;	
		// }
		// $marge_bottom = 425;

		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);


//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));



	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");	


		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/
		
	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
	imagedestroy( $my_img );
}
else if($mod=="ES47"){
	if($ends==1){
			//$img="NORADBOTHENDS.jpg";
	}else if($ends==2){
			//$img="NORADRIGHTEND.jpg";
		$left="";
	}else if($ends==3){
			//$img="NORADLEFTEND.jpg";
			//$right="";
	}else if($ends==4){
			//$img="NORADNOENDS.jpg";
			//$right="";
		$left="";
	}

	if($bay=="1BAY"){
		if($face1=="No Glass"){
			$face1="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES471BAY/".$img.".jpg";
		$face1x=410;$face1y=315;
		$postx=500; $posty=150;
		$rightx=80;$righty=320;
		$leftx=125;$lefty=305;
		$totx=440;$toty=340;
	}else if($bay=="2BAY"){
		if($face1=="No Glass"||$face2=="No Glass"){
			$face1="";
			$face2="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES472BAY/".$img.".jpg";
		$face1x=340;$face1y=330;
		$face2x=510;$face2y=230;
		$postx=540; $posty=120;
		$rightx=35; $righty=330;
		$leftx=75; $lefty=320;
		$totx=470;$toty=295;
	}else if($bay=="2BAYEXT"){
		if($face1=="No Glass"||$face2=="No Glass"){
			$face1="";
			$face2="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES472BAYEXT/".$img.".jpg";
		$face1x=315;$face1y=295;
		$face2x=461;$face2y=217;
		$postx=540; $posty=120;
		$rightx=35; $righty=330;
		$leftx=75; $lefty=320;
		$totx=410;$toty=280;
	}else if($bay=="3BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES473BAY/".$img.".jpg";
		$face1x=230;$face1y=345;
		$face2x=410;$face2y=265;
		$face3x=540;$face3y=205;
		$postx=555; $posty=95;
		$rightx=30; $righty=340;
		$leftx=55; $lefty=325;
		$totx=420;$toty=295;
	}else if($bay=="4BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"||$face4=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
			$face4="";
				//$left="";
				//$right="";
			$tot="";
		}
		$path="images/"."ES474BAY/".$img.".jpg";
		$face1x=170; $face1y=330;
		$face2x=320; $face2y=280;
		$face3x=450; $face3y=230;
		$face4x=555; $face4y=195;
		$postx=575; $posty=85;
		$rightx=25; $righty=345;
		$leftx=50; $lefty=335;
		$totx=410;$toty=265;
	}
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;
	echo getcwd();

	
	/*Resize 1920X1440 to 640X480 Start*/
	$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

	$my_img =imagecreatefromjpeg("../".$path);
    list($origWidth, $origHeight) = getimagesize("../".$path);

   
 
	
	$w =640;
	$h =480;
   // $img=$target;
    $extn = strtolower($extn);
 
        //$img = imagecreatefromjpeg($targett);
		
	
  
    $a = imagecreatetruecolor($w, $h);
    
    imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);
	
    imagejpeg($a,'img2/'.$newcpy,300);

	
	
	
	
	
	
	
	
	$resize="img2/".$osc."_".$im_id.".jpg";
	
	
		/*Resize 1920X1440 to 640X480 END*/
	
	
	
		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

		//For Online.....
		//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
		//echo $face1;
	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $face2x, $face2y, $face2, $text_colour );
	imagestring( $my_img, 5, $face3x, $face3y, $face3, $text_colour);
	imagestring( $my_img, 5, $face4x, $face4y, $face4, $text_colour);
	imagestring( $my_img, 5, $postx, $posty, $post, $text_colour);
		//imagestring( $my_img, 5, $leftx, $lefty, (str_replace('"',"", $right)-4).'"', $text_colour);
	imagestring( $my_img, 5, $rightx, $righty, $right, $text_colour);
	imagestring( $my_img, 5, $totx, $toty,$tot,$text_colour);

//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// $marge_right = 545;
		// $marge_bottom = 425;
		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);


//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));



	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");

		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/
		
	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
	imagedestroy( $my_img );
}

else if($mod=="ED20"){
	if($ends==1){
			//$img="VERTSSNOLYTBOTHENDS.jpg";
	}else if($ends==2){
			//$img="VERTSSNOLYTRIGHTEND.jpg";
			//$left="";
	}else if($ends==3){
			//$img="VERTSSNOLYTLEFTEND.jpg";
			//$right="";
	}else if($ends==4){
			//$img="VERTSSNOLYTNOENDS.jpg";
			//$right="";
			//$left="";
	}

	if($bay=="1BAY"){
		if($face1=="No Glass"){
			$face1="";
			$tot="";
		}
		$path="images/"."ED201BAY/".$img.".jpg";
		$face1x=405;$face1y=355;
		$postx=580; $posty=185;
		$rightx=40;$righty=375;
		$leftx=90;$lefty=350;
		$totx=435;$toty=380;
	}else if($bay=="2BAY"){
		if($face1=="No Glass"||$face2=="No Glass"){
			$face1="";
			$face2="";
			$tot="";
		}
		$path="images/"."ED202BAY/".$img.".jpg";
		$face1x=345;$face1y=340;
		$face2x=515;$face2y=255;
		$postx=595; $posty=140;
		$rightx=40;$righty=375;
		$leftx=90;$lefty=350;
		$totx=470;$toty=315;
	}else if($bay=="3BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
			$tot="";
		}
		$path="images/"."ED203BAY/".$img.".jpg";
		$face1x=260;$face1y=333;
		$face2x=430;$face2y=268;
		$face3x=545;$face3y=215;
		$postx=585; $posty=150;
		$rightx=20; $righty=365;
		$leftx=55; $lefty=350;
		$totx=430;$toty=298;
	}else if($bay=="4BAY"){
		if($face1=="No Glass"||$face2=="No Glass"||$face3=="No Glass"||$face4=="No Glass"){
			$face1="";
			$face2="";
			$face3="";
			$face4="";
			$tot="";
		}
		$path="images/"."ED204BAY/".$img.".jpg";
		$face1x=270; $face1y=335;
		$face2x=410; $face2y=265;
		$face3x=505; $face3y=215;
		$face4x=575; $face4y=185;
		$postx=588; $posty=130;
		$rightx=35; $righty=370;
		$leftx=60; $lefty=355;
		$totx=470;$toty=280;
	}
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;
	echo getcwd();






	/*Resize 1920X1440 to 640X480 Start*/
	$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

	$my_img =imagecreatefromjpeg("../".$path);
    list($origWidth, $origHeight) = getimagesize("../".$path);

   
 
	
	$w =640;
	$h =480;
   // $img=$target;
    $extn = strtolower($extn);
 
        //$img = imagecreatefromjpeg($targett);
		
	
  
    $a = imagecreatetruecolor($w, $h);
    
    imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);
	
    imagejpeg($a,'img2/'.$newcpy,300);

	
	
	
	
	
	
	
	
	$resize="img2/".$osc."_".$im_id.".jpg";
	
	
		/*Resize 1920X1440 to 640X480 END*/
	
	
	
		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

		//For Online.....
		//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);
	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
		//echo $face1;
	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $face2x, $face2y, $face2, $text_colour );
	imagestring( $my_img, 5, $face3x, $face3y, $face3, $text_colour);
	imagestring( $my_img, 5, $face4x, $face4y, $face4, $text_colour);
	imagestring( $my_img, 5, $postx, $posty, $post, $text_colour);
	imagestring( $my_img, 5, $leftx, $lefty, (str_replace('"', "", $right)-4).'"', $text_colour);
	imagestring( $my_img, 5, $rightx, $righty, $right, $text_colour);
	imagestring( $my_img, 5, $totx, $toty,$tot,$text_colour);

	$png = imagecreatefrompng('logo.png');
		// Set the margins for the stamp and get the height/width of the stamp image
	$marge_right = 5;
	$marge_bottom = 5;
	$sx = imagesx($png);
	$sy = imagesy($png);

		// Merge the stamp onto our photo with an opacity of 50%
	imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);

	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");		
		
		
		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/

	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
	imagedestroy( $my_img );
}else if($mod=="B950"){
	if($ends==1){
			//$img="NORADBOTHENDS.jpg";
	}else if($ends==2){
			//$img="NORADRIGHTEND.jpg";
		$left="";
	}else if($ends==3){
			//$img="NORADLEFTEND.jpg";
		$right="";
	}else if($ends==4){
			//$img="NORADNOENDS.jpg";
		$right="";
		$left="";
	}

	if($bay=="1BAY"){
		$path="images/"."B9501BAY/".$img.".jpg";
		$face1x=395;$face1y=345;
		$postx=580; $posty=125;
		$rightx=440;$righty=6;
		$leftx=105;$lefty= 0;
		$totx=440;$toty=370;
	}else if($bay=="2BAY"){
		$path="images/"."B9502BAY/".$img.".jpg";
		$face1x=300;$face1y=340;
		$face2x=510;$face2y=260;
		$postx=580; $posty=110;
		$rightx=530; $righty=30;
		$leftx=30; $lefty=80;
		$totx=445;$toty=340;
	}else if($bay=="3BAY"){
		$path="images/"."B9503BAY/".$img.".jpg";
		$face1x=240;$face1y=330;
		$face2x=428;$face2y=257;
		$face3x=550;$face3y=215;
		$postx=580; $posty=90;
		$rightx=560; $righty=52;
		$leftx=28; $lefty=130;
		$totx=445;$toty=290;
	}else if($bay=="4BAY"){
		$path="images/"."B9504BAY/".$img.".jpg";
		$face1x=200; $face1y=315;
		$face2x=364; $face2y=265;
		$face3x=480; $face3y=226;
		$face4x=565; $face4y=195;
		$postx=580; $posty=100;
		$rightx=570; $righty=75;
		$leftx=25; $lefty=150;
		$totx=435;$toty=265;
	}
	echo getcwd();


	
	/*Resize 1920X1440 to 640X480 Start*/
	$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

	$my_img =imagecreatefromjpeg("../".$path);
    list($origWidth, $origHeight) = getimagesize("../".$path);

   
 
	
	$w =640;
	$h =480;
   // $img=$target;
    $extn = strtolower($extn);
 
        //$img = imagecreatefromjpeg($targett);
		
	
  
    $a = imagecreatetruecolor($w, $h);
    
    imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);
	
    imagejpeg($a,'img2/'.$newcpy,300);

	
	
	
	
	
	
	
	
	$resize="img2/".$osc."_".$im_id.".jpg";
	
	
		/*Resize 1920X1440 to 640X480 END*/
	
	
	
		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

		//For Online.....
		//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
		//echo $face1;
	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $face2x, $face2y, $face2, $text_colour );
	imagestring( $my_img, 5, $face3x, $face3y, $face3, $text_colour);
	imagestring( $my_img, 5, $face4x, $face4y, $face4, $text_colour);
	imagestring( $my_img, 5, $postx, $posty, $post, $text_colour);
	imagestring( $my_img, 5, $leftx, $lefty, $left, $text_colour);
	imagestring( $my_img, 5, $rightx, $righty, $right, $text_colour);
	imagestring( $my_img, 5, $totx, $toty,$tot,$text_colour);

//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// $marge_right = 5;
		// $marge_bottom = 5;
		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);


//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));



	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");		
		
		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/

	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
	imagedestroy( $my_img );
}else if($mod=="B950 SWIVEL"){
	if($ends==1){
			//$img="NORADBOTHENDS.jpg";
	}else if($ends==2){
			//$img="NORADRIGHTEND.jpg";
		$left="";
	}else if($ends==3){
			//$img="NORADLEFTEND.jpg";
		$right="";
	}else if($ends==4){
			//$img="NORADNOENDS.jpg";
		$right="";
		$left="";
	}

	if($bay=="1BAY"){
		$path="images/"."B950-Swivel1BAY/".$img.".jpg";
		$face1x=390;$face1y=345;
		$postx=580; $posty=125;
		$rightx=420;$righty=25;
		$leftx=75;$lefty=75;
		$totx=420;$toty=367;
	}else if($bay=="2BAY"){
		$path="images/"."B950-Swivel2BAY/".$img.".jpg";
		if($corneryes=="1")
		{
			if($posttype=="Inner")
			{
				if($postdegree=="90 Degree")
				{
					if($postposition=="1st Center Post from Left")
					{
						$face1x=230;$face1y=310;

						$face2x=380;$face2y=303;

						$leftx=30; $lefty=120;
						$rightx=588; $righty=122;


						$postx=580; $posty=110;
						$totx=1445;$toty=1295;	
					}

				}
				if($postdegree=="135 Degree")
				{
					if($postposition=="1st Center Post from Left")
					{
						$face1x=290;$face1y=345;

						$face2x=480;$face2y=285;

						$leftx=40; $lefty=120;
						$rightx=560; $righty=60;

						$postx=580; $posty=110;
						$totx=1445;$toty=1295;	
					}

				}
			}
			
			if($posttype=="Outer")
			{
				if($postdegree=="90 Degree")
				{
					if($postposition=="1st Center Post from Left")
					{
						$face1x=130;$face1y=330;

						$face2x=485;$face2y=330;

						$leftx=130; $lefty=35;

						$rightx=475; $righty=28;

						$postx=580; $posty=110;
						$totx=1445;$toty=1295;	
					}

				}
				if($postdegree=="135 Degree")
				{
					if($postposition=="1st Center Post from Left")
					{
						$face1x=140;$face1y=370;

						$face2x=510;$face2y=345;

						$rightx=557; $righty=75;
						$leftx=45; $lefty=85;

						$postx=580; $posty=110;
						$totx=1445;$toty=1295;	
					}

				}
			}
			
			
			
		}
		else{
			$face1x=330;$face1y=345;
			$face2x=530;$face2y=253;
			$postx=580; $posty=110;
			$rightx=525; $righty=27;
			$leftx=30; $lefty=93;
			$totx=465;$toty=310;
		}
	}else if($bay=="3BAY"){
		$path="images/"."B950-Swivel3BAY/".$img.".jpg";

		if($corneryes=="1")
		{
			if($posttype=="Inner")
			{
				if($postdegree=="90 Degree")
				{
					if($postposition=="1st Center Post from Left")
					{
						$face1x=170;$face1y=245;
						$face2x=280;$face2y=245;
						$face3x=420;$face3y=310;

						$leftx=20; $lefty=122;

						$rightx=595; $righty=155;


						$postx=580; $posty=90;
						$totx=1445;$toty=1260;	
					}
					if($postposition=="2nd Center Post from Left")
					{
						$face1x=210;$face1y=300;
						$face2x=350;$face2y=241;
						$face3x=450;$face3y=245;

						$rightx=600; $righty=110;
						$leftx=25; $lefty=140;

						$postx=580; $posty=90;
						$totx=1445;$toty=1260;	
					}

				}
				if($postdegree=="135 Degree")
				{
					if($postposition=="1st Center Post from Left")
					{
						$face1x=95;$face1y=250;
						$face2x=200;$face2y=275;
						$face3x=340;$face3y=340;
						$rightx=577; $righty=145;
						$leftx=33; $lefty=95;

						$postx=580; $posty=90;
						$totx=1445;$toty=1260;	
					}
					if($postposition=="2nd Center Post from Left")
					{
						$face1x=280;$face1y=335;
						$face2x=425;$face2y=245;
						$face3x=535;$face3y=210;
						$rightx=597; $righty=45;
						$leftx=40; $lefty=145;

						$postx=580; $posty=90;
						$totx=1445;$toty=1260;	
					}

				}


			}
			if($posttype=="Outer")
			{
				if($postdegree=="90 Degree")
				{
					if($postposition=="1st Center Post from Left")
					{
						$face1x=120;$face1y=355;
						$face2x=490;$face2y=330;
						$face3x=585;$face3y=210;
						$rightx=535; $righty=20;
						$leftx=101; $lefty=70;

						$postx=580; $posty=90;
						$totx=1445;$toty=1260;	
					}
					if($postposition=="2nd Center Post from Left")
					{
						$face1x=50;$face1y=230;
						$face2x=190;$face2y=335;
						$face3x=520;$face3y=340;
						$rightx=510; $righty=55;
						$leftx=100; $lefty=67;

						$postx=580; $posty=90;
						$totx=1445;$toty=1260;	
					}

				}
				if($postdegree=="135 Degree")
				{
					if($postposition=="1st Center Post from Left")
					{
						$face1x=80;$face1y=310;
						$face2x=330;$face2y=325;
						$face3x=520;$face3y=300;


						$leftx=45; $lefty=115;
						$rightx=589; $righty=115;


						$postx=580; $posty=90;
						$totx=1445;$toty=1260;	
					}
					if($postposition=="2nd Center Post from Left")
					{
						$face1x=75;$face1y=270;
						$face2x=260;$face2y=310;
						$face3x=510;$face3y=325;
						$rightx=580; $righty=110;
						$leftx=40; $lefty=90;

						$postx=580; $posty=90;
						$totx=1445;$toty=1260;	
					}

				}


			}
			
		}
		else{
			
			$face1x=270;$face1y=335;
			$face2x=444;$face2y=260;
			$face3x=565;$face3y=209;
			$postx=580; $posty=90;
			$rightx=551; $righty=55;
			$leftx=27; $lefty=135;
			$totx=465;$toty=275;
			
		}
	}else if($bay=="4BAY"){
		$path="images/"."B950-Swivel4BAY/".$img.".jpg";

		if($corneryes=="1")
		{
			if($posttype=="Inner")
			{
				if($postdegree=="90 Degree")
				{
					if($postposition=="1st Center Post from Left")
					{
						$face1x=135; $face1y=200;
						$face2x=210; $face2y=200;
						$face3x=305; $face3y=256;	
						$face4x=430; $face4y=330;
						$rightx=595; $righty=210;
						$leftx=20; $lefty=97;
						$postx=580; $posty=100;
						$totx=1435;$toty=1235;	
					}
					if($postposition=="2nd Center Post from Left")
					{
						$face1x=150; $face1y=260;
						$face2x=265 ; $face2y=230;
						$face3x=350; $face3y=225;
						$face4x=465; $face4y=270;
						$rightx=603; $righty=155;
						$leftx=10; $lefty=145;
						$postx=580; $posty=100;
						$totx=1435;$toty=1235;	

					}
					if($postposition=="3rd Center Post from Left")
					{

						$face1x=205; $face1y=325;
						$face2x=325; $face2y=257;
						$face3x=405; $face3y=205;
						$face4x=490; $face4y=203;
						$rightx=597; $righty=100;
						$leftx=20; $lefty=200;
						$postx=580; $posty=100;
						$totx=1435;$toty=1235;	

					}
				}
				if($postdegree=="135 Degree")
				{
					if($postposition=="1st Center Post from Left")
					{
						$face1x=180; $face1y=295;
						$face2x=290; $face2y=260;
						$face3x=430; $face3y=245;
						$face4x=555; $face4y=230;
						$rightx=600; $righty=100;
						$leftx=25; $lefty=185;
						$postx=580; $posty=100;
						$totx=1435;$toty=1235;	

					}
					if($postposition=="2nd Center Post from Left")
					{

						$face1x=200; $face1y=303;
						$face2x=320; $face2y=245;
						$face3x=420; $face3y=220;
						$face4x=550; $face4y=210;
						$rightx=603; $righty=80;
						$leftx=25; $lefty=170;
						$postx=580; $posty=100;
						$totx=1435;$toty=1235;	

					}
					if($postposition=="3rd Center Post from Left")
					{
						$face1x=250; $face1y=330;
						$face2x=400; $face2y=240;
						$face3x=480; $face3y=190;
						$face4x=560; $face4y=170;
						$rightx=598; $righty=40;
						$leftx=40; $lefty=160;
						$postx=580; $posty=100;
						$totx=1435;$toty=1235;	

					}
				}


			}
			if($posttype=="Outer")
			{
				if($postdegree=="90 Degree")
				{
					if($postposition=="1st Center Post from Left")
					{
						$face1x=100; $face1y=375;
						$face2x=455; $face2y=350;
						$face3x=550; $face3y=260;
						$face4x=610; $face4y=200;
						$rightx=560; $righty=60;
						$leftx=90; $lefty=100;
						$postx=580; $posty=100;
						$totx=1435;$toty=1235;	

					}
					if($postposition=="2nd Center Post from Left")
					{
						$face1x=50; $face1y=260;
						$face2x=180; $face2y=350;
						$face3x=490; $face3y=345;
						$face4x=590; $face4y=250;
						$rightx=555; $righty=70;
						$leftx=65; $lefty=75;
						$postx=580; $posty=100;
						$totx=1435;$toty=1235;	

					}
					if($postposition=="3rd Center Post from Left")
					{
						$face1x=30; $face1y=195;
						$face2x=120; $face2y=250;
						$face3x=260; $face3y=345;
						$face4x=555; $face4y=350;
						$rightx=540; $righty=100;
						$leftx=70; $lefty=85;
						$postx=580; $posty=100;
						$totx=1435;$toty=1235;	

					}
				}
				if($postdegree=="135 Degree")
				{
					if($postposition=="1st Center Post from Left")
					{
						$face1x=70; $face1y=315;
						$face2x=270; $face2y=320;
						$face3x=425; $face3y=295;
						$face4x=555; $face4y=270;
						$rightx=585; $righty=140;
						$leftx=35; $lefty=160;
						$postx=580; $posty=100;
						$totx=1435;$toty=1235;	

					}
					if($postposition=="2nd Center Post from Left")
					{
						$face1x=65; $face1y=298;
						$face2x=220; $face2y=320;
						$face3x=430; $face3y=315;
						$face4x=565; $face4y=280;
						$rightx=580; $righty=142;
						$leftx=25; $lefty=150;
						$postx=580; $posty=100;
						$totx=1435;$toty=1235;	

					}
					if($postposition=="3rd Center Post from Left")
					{
						$face1x=65; $face1y=275;
						$face2x=200; $face2y=295;
						$face3x=355; $face3y=320;
						$face4x=555; $face4y=310;
						$rightx=584; $righty=158;
						$leftx=25; $lefty=137;
						$postx=580; $posty=100;
						$totx=1435;$toty=1235;	

					}
				}


			}
			
			
			
		}
		else{
			$face1x=220; $face1y=320;
			$face2x=390; $face2y=257;
			$face3x=495; $face3y=215;
			$face4x=580; $face4y=180;
			$postx=580; $posty=100;
			$rightx=570; $righty=65;
			$leftx=23; $lefty=150;
			$totx=455;$toty=250;
		}
	}
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;
	echo getcwd();

	
	/*Resize 1920X1440 to 640X480 Start*/
	$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

	$my_img =imagecreatefromjpeg("../".$path);
    list($origWidth, $origHeight) = getimagesize("../".$path);

   
 
	
	$w =640;
	$h =480;
   // $img=$target;
    $extn = strtolower($extn);
 
        //$img = imagecreatefromjpeg($targett);
		
	
  
    $a = imagecreatetruecolor($w, $h);
    
    imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);
	
    imagejpeg($a,'img2/'.$newcpy,300);

	
	
	
	
	
	
	
	
	$resize="img2/".$osc."_".$im_id.".jpg";
	
	
		/*Resize 1920X1440 to 640X480 END*/
	


		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

		//For Online.....
		//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
		//echo $face1;
	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $face2x, $face2y, $face2, $text_colour );
	imagestring( $my_img, 5, $face3x, $face3y, $face3, $text_colour);
	imagestring( $my_img, 5, $face4x, $face4y, $face4, $text_colour);
	imagestring( $my_img, 5, $postx, $posty, $post, $text_colour);
	imagestring( $my_img, 5, $leftx, $lefty, $left, $text_colour);
	imagestring( $my_img, 5, $rightx, $righty, $right, $text_colour);
	imagestring( $my_img, 5, $totx, $toty,$tot,$text_colour);

//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// $marge_right = 5;
		// $marge_bottom = 5;
		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);


//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));



	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");	

		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/
		
	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
	imagedestroy( $my_img );
}
else if($mod=="ORBIT360"){
	if($ends==1){
			//$img="NORADBOTHENDS.jpg";
	}else if($ends==2){
			//$img="NORADRIGHTEND.jpg";
		$left="";
	}else if($ends==3){
			//$img="NORADLEFTEND.jpg";
		$right="";
	}else if($ends==4){
			//$img="NORADNOENDS.jpg";
		$right="";
		$left="";
	}

	if($bay=="1BAY"){
		$path="images/"."ORBIT3601BAY/".$img.".jpg";
		$postx=580; $posty=125;
		$rightx=440;$righty=6;
		$leftx=75;$lefty=34;
		
		$face1x=400;$face1y=355;
		$totx=430;$toty=370;
		
	}else if($bay=="2BAY"){
		$path="images/"."ORBIT3602BAY/".$img.".jpg";
		$postx=580; $posty=110;
		$rightx=530; $righty=30;
		$leftx=33; $lefty=100;
		
		
		$face1x=305;$face1y=355;
		$face2x=517;$face2y=280;
		$totx=440;$toty=330;
	}else if($bay=="3BAY"){
		$path="images/"."ORBIT3603BAY/".$img.".jpg";
		$postx=580; $posty=90;
		$rightx=560; $righty=48;
		$leftx=28; $lefty=140;
		
		
		$face1x=210;$face1y=345;
		$face2x=405;$face2y=285;
		$face3x=545;$face3y=245;
		$totx=412;$toty=305;
	}else if($bay=="4BAY"){
		$path="images/"."ORBIT3604BAY/".$img.".jpg";
		$postx=580; $posty=100;
		$rightx=575; $righty=60;
		$leftx=25; $lefty=170;
		
		
		$face1x=170; $face1y=330;
		$face2x=340; $face2y=285;
		$face3x=465; $face3y=245;
		$face4x=567; $face4y=222;
		$totx=410;$toty=275;
	}
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;
	echo getcwd();


	
	/*Resize 1920X1440 to 640X480 Start*/
	$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

	$my_img =imagecreatefromjpeg("../".$path);
    list($origWidth, $origHeight) = getimagesize("../".$path);

   
 
	
	$w =640;
	$h =480;
   // $img=$target;
    $extn = strtolower($extn);
 
        //$img = imagecreatefromjpeg($targett);
		
	
  
    $a = imagecreatetruecolor($w, $h);
    
    imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);
	
    imagejpeg($a,'img2/'.$newcpy,300);

	
	
	
	
	
	
	
	
	$resize="img2/".$osc."_".$im_id.".jpg";
	
	
		/*Resize 1920X1440 to 640X480 END*/
	
	
	
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;
	echo getcwd();

		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

		//For Online.....
		//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
		//echo $face1;
	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $face2x, $face2y, $face2, $text_colour );
	imagestring( $my_img, 5, $face3x, $face3y, $face3, $text_colour);
	imagestring( $my_img, 5, $face4x, $face4y, $face4, $text_colour);
	imagestring( $my_img, 5, $postx, $posty, $post, $text_colour);
	imagestring( $my_img, 5, $leftx, $lefty, $left, $text_colour);
	imagestring( $my_img, 5, $rightx, $righty, $right, $text_colour);
	imagestring( $my_img, 5, $totx, $toty,$tot,$text_colour);

//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// $marge_right = 5;
		// $marge_bottom = 5;
		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);


//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));



	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");	

		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/

		
	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
	imagedestroy( $my_img );
}




else if($mod=="A-PUSH"){
	if($ends==1){
			//$img="NORADBOTHENDS.jpg";
	}else if($ends==2){
			//$img="NORADRIGHTEND.jpg";
		$left="";
	}else if($ends==3){
			//$img="NORADLEFTEND.jpg";
		$right="";
	}else if($ends==4){
			//$img="NORADNOENDS.jpg";
		$right="";
		$left="";
	}

	if($bay=="1BAY"){
		$path="images/"."A-PUSH1BAY/".$img.".jpg";
		$face1x=190;$face1y=320;
		$postx=580; $posty=125;
		$rightx=100;$righty=335;
		$leftx=170;$lefty=90;
		$totx=0;$toty=0;
	}else if($bay=="2BAY"){
		$path="images/"."A-PUSH2BAY/".$img.".jpg";
		$face1x=300;$face1y=335;
		$face2x=510;$face2y=243;
		$postx=580; $posty=110;
		$rightx=50; $righty=340;
		$leftx=85; $lefty=105;
		$totx=0;$toty=0;
	}else if($bay=="3BAY"){
		$path="images/"."A-PUSH3BAY/".$img.".jpg";
		$face1x=240;$face1y=325;
		$face2x=424;$face2y=247;
		$face3x=545;$face3y=198;
		$postx=580; $posty=90;
		$rightx=39; $righty=325;
		$leftx=55; $lefty=155;
		$totx=0;$toty=0;
	}else if($bay=="4BAY"){
		$path="images/"."A-PUSH4BAY/".$img.".jpg";
		$face1x=200; $face1y=310;
		$face2x=360; $face2y=250;
		$face3x=475; $face3y=206;
		$face4x=560; $face4y=175;
		$postx=580; $posty=100;
		$rightx=45; $righty=330;
		$leftx=40; $lefty=180;
		$totx=0;$toty=0;
	}
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;
	echo getcwd();

		//For Offline.....
		//$my_img =imagecreatefromjpeg("../".$path);

		//For Online.....
	$my_img =imagecreatefromjpeg("http://esneezeguards.com/testserver/catalog/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
		//echo $face1;
	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $face2x, $face2y, $face2, $text_colour );
	imagestring( $my_img, 5, $face3x, $face3y, $face3, $text_colour);
	imagestring( $my_img, 5, $face4x, $face4y, $face4, $text_colour);
		//imagestring( $my_img, 5, $postx, $posty, $post, $text_colour);
		//imagestring( $my_img, 5, $leftx, $lefty, $left, $text_colour);
		//imagestring( $my_img, 5, $rightx, $righty, $right, $text_colour);
	imagestring( $my_img, 5, 440, 370,"",$text_colour);

//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// $marge_right = 545;
		// $marge_bottom = 425;
		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);


//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));



	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");		
		
		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/

	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
	imagedestroy( $my_img );
}else if($mod=="Mid-Shelves"){
	//$img="BOTHEND.jpg";



if($bay=="1BAY"){
	if($face1=="No Glass"){
		$face1="";
		$tot="";
	}
	$path="images/"."Mid-Shelves1BAY/".$img.".jpg";
	$face1x=495;$face1y=250;
	$postx=115; $posty=325;
	$rightx=100;$righty=335;
	$leftx=170;$lefty=90;
	$totx=0;$toty=0;
}else if($bay=="2BAY"){
		//$img="NORADBOTHENDS.jpg";
	if($face1=="No Glass"||$face2=="No Glass"){
		$face1="";
		$face2="";
		$tot="";
	}
	$path="images/"."Mid-Shelves2BAY/".$img.".jpg";
	$face1x=365;$face1y=305;
	$face2x=555;$face2y=170;
	$postx=60; $posty=355;
	$rightx=50; $righty=340;
	$leftx=85; $lefty=105;
	$totx=0;$toty=0;
}else if($bay=="3BAY"){
		//$img="NORADBOTHENDS.jpg";
	if($face1=="No Glass"||$face2=="No Glass" || $face3=="No Glass"){
		$face1="";
		$face2="";
		$face3="";
		$tot="";
	}
	$path="images/"."Mid-Shelves3BAY/".$img.".jpg";
	$face1x=270;$face1y=320;
	$face2x=445;$face2y=215;
	$face3x=570;$face3y=140;
	$postx=40; $posty=350;
	$rightx=39; $righty=325;
	$leftx=55; $lefty=155;
	$totx=0;$toty=0;
}else if($bay=="4BAY"){
	if($face1=="No Glass"||$face2=="No Glass" || $face3=="No Glass" || $face4=="No Glass"){
		$face1="";
		$face2="";
		$face3="";
		$face4="";
		$tot="";
	}
		//$img="NORADBOTHENDS.jpg";
	$path="images/"."Mid-Shelves4BAY/".$img.".jpg";
	$face1x=250; $face1y=300;
	$face2x=400; $face2y=215;
	$face3x=510; $face3y=150;
	$face4x=595; $face4y=100;
	$postx=40; $posty=335;
	$rightx=45; $righty=330;
	$leftx=40; $lefty=180;
	$totx=0;$toty=0;
}
	// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;
echo getcwd();

	
	/*Resize 1920X1440 to 640X480 Start*/
	$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

	$my_img =imagecreatefromjpeg("../".$path);
    list($origWidth, $origHeight) = getimagesize("../".$path);

   
 
	
	$w =640;
	$h =480;
   // $img=$target;
    $extn = strtolower($extn);
 
        //$img = imagecreatefromjpeg($targett);
		
	
  
    $a = imagecreatetruecolor($w, $h);
    
    imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);
	
    imagejpeg($a,'img2/'.$newcpy,300);

	
	
	
	
	
	
	
	
	$resize="img2/".$osc."_".$im_id.".jpg";
	
	
		/*Resize 1920X1440 to 640X480 END*/
	
	
	
		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

	//For Online.....
	//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
	//echo $face1;
imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
imagestring( $my_img, 5, $face2x, $face2y, $face2, $text_colour );
imagestring( $my_img, 5, $face3x, $face3y, $face3, $text_colour);
imagestring( $my_img, 5, $face4x, $face4y, $face4, $text_colour);
imagestring( $my_img, 5, $postx, $posty, $post, $text_colour);
	//imagestring( $my_img, 5, $leftx, $lefty, $left, $text_colour);
	//imagestring( $my_img, 5, $rightx, $righty, $right, $text_colour);
imagestring( $my_img, 5, 440, 370,"",$text_colour);

//old code..............
	// $png = imagecreatefrompng('logo.png');
	// // Set the margins for the stamp and get the height/width of the stamp image
	// $marge_right = 545;
	// $marge_bottom = 425;
	// $sx = imagesx($png);
	// $sy = imagesy($png);

	// // Merge the stamp onto our photo with an opacity of 50%
	// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);


//new resized logo simillar to additional images............
$logo = 'new_logo.png';
			// Get new dimensions
list($logo_width, $logo_height) = getimagesize($logo);
			// Resample
$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

imagealphablending($logo_r, false);
imagesavealpha($logo_r,true);
$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

$image = imagecreatefrompng($logo);
imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));



if($sv!="save"){
	$image2 = imagecreatetruecolor(1280, 960);	
	imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
	imagejpeg($image2,"scrn1.jpg");		
	
	
	/*for customer savelayout start*/
	if($customer_idd!=0)
	{
		
	$servername = DB_SERVER;
$username = DB_SERVER_USERNAME;
$password = DB_SERVER_PASSWORD;
$dbname = DB_DATABASE;

	$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

			
		
		$queryss="SELECT MAX(id) FROM `save_layout_img`";
		$exe_queryss=mysqli_query($con,$queryss);
		$getid=mysqli_fetch_array($exe_queryss);
		$imgggid=$getid[0];
		$newimgid=$imgggid+1;
		
	imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
	
	$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
	
	datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
	}
	
	
	/*for customer savelayout end*/

	
}else{
	$image2 = imagecreatetruecolor(1280, 960);	
	imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
	imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
	datasave($osc,$im_id,$mod,$bay);
}
imagedestroy( $my_img );
}else if($mod=="ALLIN1"){
	$img="start2.jpg";
	$ar=explode("-", $face1);
	$path="images/"."ALLIN1/".$img;
	$face1x=360;$face1y=30;
	$totx=180; $toty=330;

	/*Resize 1920X1440 to 640X480 Start*/
	$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

	$my_img =imagecreatefromjpeg("../".$path);
    list($origWidth, $origHeight) = getimagesize("../".$path);

   
 
	
	$w =640;
	$h =480;
   // $img=$target;
    $extn = strtolower($extn);
 
        //$img = imagecreatefromjpeg($targett);
		
	
  
    $a = imagecreatetruecolor($w, $h);
    
    imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);
	
    imagejpeg($a,'img2/'.$newcpy,300);

	
	
	
	
	
	
	
	
	$resize="img2/".$osc."_".$im_id.".jpg";
	
	
		/*Resize 1920X1440 to 640X480 END*/
	
	
	
		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

		//For Online.....
		//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
	imagestring( $my_img, 5, $face1x, $face1y, $ar[2]==""?$ar[1]:$ar[1]."-".$ar[2], $text_colour);
	if($ar[2]!=""){
		if($ar[2]=="1/4"){
			$ar[1]=$ar[1]+4;
			$ar[2]="3/4";
		}else if($ar[2]=="1/2"){
			$ar[1]=$ar[1]+5;
			$ar[2]="";
		}else if($ar[2]=="3/4"){
			$ar[1]=$ar[1]+5;
			$ar[2]="1/4";
		}
	}
	imagestring( $my_img, 5, $totx, $toty, $ar[2]==""?($ar[1]+4)."-1/2":($ar[1])."-".$ar[2], $text_colour);

//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// $marge_right = 545;
		// $marge_bottom = 425;
		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);


//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));



	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");		
		
		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/

		
	}else{
		echo $osc.$im_id;
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
	imagedestroy( $my_img );
}

else if($mod=="B950P"){
	$ar=explode("-",$face1);
	echo $ar[1];
	if($ar[1]!=""){
		$face1=(str_replace('"',"", $ar[0])-2)."-".$ar[1];
		$tot=($ar[0]+6)."-".$ar[1];
	}else{
		$face1=(str_replace('"',"", $face1)-2).'"';
		$tot=($face1+8).'"';
	}
	if($ends==1){
			//$img="BLACKBOTHENDS.jpg";
	}else if($ends==2){
			//$img="BLACKRIGHTEND.jpg";
		$left="";
	}else if($ends==3){
			//$img="BLACKLEFTEND.jpg";
		$right="";
	}else if($ends==4){
			//$img="BLACKNOENDS.jpg";
		$right="";
		$left="";
	}
	$path="images/"."B950P/".$img.".jpg";
	$face1x=220;$face1y=330;
	$totx=180;$toty=360;
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;
		//For Offline.....
	$my_img =imagecreatefromjpeg("../".$path);

		//For Online.....
		//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );

	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $totx, $toty,$tot,$text_colour);

//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// $marge_right = 545;
		// $marge_bottom = 425;
		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);


//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));



	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");		
		
		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/

		
	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
	imagedestroy( $my_img );
}


else if($mod=="EP950"){
	$ar=explode("-",$face1);
	if($ar[1]!=""){
		$tot=($ar[0]-8)."-".$ar[1];
	}else{
		$tot=($face1-8).'"';
	}
	if($ends==1){
			//$img="BLACKBOTHENDS.jpg";
	}else if($ends==2){
			//$img="BLACKRIGHTEND.jpg";
		$left="";
	}else if($ends==3){
			//$img="BLACKLEFTEND.jpg";
		$right="";
	}else if($ends==4){
			//$img="BLACKNOENDS.jpg";
		$right="";
		$left="";
	}
	$path="images/"."EP950/".$img.".jpg";
	$face1x=150;$face1y=330;
	$totx=205;$toty=299;
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;
	
	/*Resize 1920X1440 to 640X480 Start*/
	$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

	$my_img =imagecreatefromjpeg("../".$path);
    list($origWidth, $origHeight) = getimagesize("../".$path);

   
 
	
	$w =640;
	$h =480;
   // $img=$target;
    $extn = strtolower($extn);
 
        //$img = imagecreatefromjpeg($targett);
		
	
  
    $a = imagecreatetruecolor($w, $h);
    
    imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);
	
    imagejpeg($a,'img2/'.$newcpy,300);

	
	
	
	
	
	
	
	
	$resize="img2/".$osc."_".$im_id.".jpg";
	
	
		/*Resize 1920X1440 to 640X480 END*/
	
	
	
		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

		//For Online.....
		//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
		//echo $face1;
	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $totx, $toty,$tot,$text_colour);

//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// $marge_right = 545;
		// $marge_bottom = 425;
		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);


//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));



	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");		
		
		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/

		
		
	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
	imagedestroy( $my_img );
}

else if($mod=="ORBIT720"){
	$ar=explode("-",$face1);
	echo $ar[1];
	if($ar[1]!=""){
		
		$face1=(str_replace('"',"", $ar[0]))."-".$ar[1];
		if($ar[1]=='1/4"')
		{
		$tot=($ar[0]+1).'-3/4"';	
		}
		elseif($ar[1]=='1/2"')
		{
		$tot=($ar[0]+2).'"';	
		}
		elseif($ar[1]=='3/4"')
		{
		$tot=($ar[0]+2).'-1/4"';
		}
		
		
		
	}else{
		$face1=(str_replace('"',"", $face1)).'"';
		$tot=($face1+1).'-1/2"';
	}
	if($ends==1){
			//$img="BLACKBOTHENDS.jpg";
	}else if($ends==2){
			//$img="BLACKRIGHTEND.jpg";
		$left="";
	}else if($ends==3){
			//$img="BLACKLEFTEND.jpg";
		$right="";
	}else if($ends==4){
			//$img="BLACKNOENDS.jpg";
		$right="";
		$left="";
	}
	$path="images/"."ORBIT720/".$img.".jpg";
	$face1x=220;$face1y=338;
	$totx=180;$toty=360;
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;

	/*Resize 1920X1440 to 640X480 Start*/
	$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

	$my_img =imagecreatefromjpeg("../".$path);
    list($origWidth, $origHeight) = getimagesize("../".$path);

   
 
	
	$w =640;
	$h =480;
   // $img=$target;
    $extn = strtolower($extn);
 
        //$img = imagecreatefromjpeg($targett);
		
	
  
    $a = imagecreatetruecolor($w, $h);
    
    imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);
	
    imagejpeg($a,'img2/'.$newcpy,300);

	
	
	
	
	
	
	
	
	$resize="img2/".$osc."_".$im_id.".jpg";
	
	
		/*Resize 1920X1440 to 640X480 END*/
	
	
	
		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

		//For Online.....
		//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );

	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $totx, $toty,$tot,$text_colour);

//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// $marge_right = 545;
		// $marge_bottom = 425;
		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);


//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));



	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");		
		
		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/

		
	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
	imagedestroy( $my_img );
}

else if($mod=="EP6"){
	if($ends==1){
			//$img="BOTHENDS.jpg";
	}else if($ends==2){
			//$img="RIGHTEND.jpg";
		$left="";
	}else if($ends==3){
			//$img="LEFTEND.jpg";
		$right="";
	}else if($ends==4){
			//$img="NOENDS.jpg";
		$right="";
		$left="";
	}


	$archeight=''.$arc_glass_value.'"';
	if($bay=="1BAY"){
		if($face1=="POST ONLY"){
			$face1="";
			$left="";
			$right="";
			$tot="";
			$archeight="";
		}
		$path="images/"."EP-61BAY/".$img.".jpg";

			
		if($glassheight=='6INCH')	
		{
		
			$leftx=170; $lefty=05;
			$rightx=425; $righty=50;
			$face1x=160; $face1y=390;
			$face2x=28000; $face2y=37000;
			$face3x=35500; $face3y=39000;
			$face4x=39000; $face4y=40000;
			
			
			$postx=57500; $posty=8500;
			$totx=450000;$toty=250000;		
			
		}
		elseif($glassheight=='12INCH')	
		{
			
			$leftx=170; $lefty=05;
			$rightx=427; $righty=30;
			$face1x=170; $face1y=395;
			$face2x=28000; $face2y=37000;
			$face3x=35500; $face3y=39000;
			$face4x=39000; $face4y=40000;
			
			
			$postx=57500; $posty=8500;
			$totx=450000;$toty=250000;	
			
		}
		else
		{
			
			
			$leftx=179; $lefty=10;
			$rightx=470; $righty=70;
			$face1x=170; $face1y=375;
			$face2x=28000; $face2y=37000;
			$face3x=35500; $face3y=39000;
			$face4x=39000; $face4y=40000;
			
			
			$postx=57500; $posty=8500;
			$totx=450000;$toty=250000;	
			
		}	


	}else if($bay=="2BAY"){
		if($face1=="POST ONLY"||$face2=="POST ONLY"){
			$face1="";
			$face2="";
			$left="";
			$right="";
			$tot="";
			$archeight="";
		}

		
		
		


		$path="images/"."EP-62BAY/".$img.".jpg";

	
		if($glassheight=='6INCH')	
		{
		
			$leftx=121; $lefty=12;
			$rightx=520; $righty=95;
			$face1x=80; $face1y=285;
			$face2x=270; $face2y=390;
			$face3x=35500; $face3y=39000;
			$face4x=39000; $face4y=40000;
			
			
			$postx=57500; $posty=8500;
			$totx=450000;$toty=250000;		
			
		}
		elseif($glassheight=='12INCH')	
		{
			
			$leftx=125; $lefty=15;
			$rightx=500; $righty=100;
			$face1x=100; $face1y=305;
			$face2x=275; $face2y=395;
			$face3x=35500; $face3y=39000;
			$face4x=39000; $face4y=40000;
			
			
			$postx=57500; $posty=8500;
			$totx=450000;$toty=250000;	
			
		}
		else
		{
			
			
			$leftx=110; $lefty=5;
			$rightx=550; $righty=100;
			$face1x=70; $face1y=265;
			$face2x=285; $face2y=380;
			$face3x=35500; $face3y=39000;
			$face4x=39000; $face4y=40000;
			
			
			$postx=57500; $posty=8500;
			$totx=450000;$toty=250000;	
			
		}	

	}else if($bay=="3BAY"){
		if($face1=="POST ONLY"||$face2=="POST ONLY"||$face3=="POST ONLY"){
			$face1="";
			$face2="";
			$face3="";
			$left="";
			$right="";
			$tot="";
			$archeight="";
		}
		$path="images/"."EP-63BAY/".$img.".jpg";
		
		if($glassheight=='6INCH')	
		{
		
			$leftx=110; $lefty=60;
			$rightx=580; $righty=105;
			$face1x=45; $face1y=235;
			$face2x=165; $face2y=300;
			$face3x=345; $face3y=390;
			$face4x=39000; $face4y=40000;
			
			
			$postx=57500; $posty=8500;
			$totx=450000;$toty=250000;		
			
		}
		elseif($glassheight=='12INCH')	
		{
			
			$leftx=125; $lefty=45;
			$rightx=585; $righty=77;
			$face1x=45; $face1y=235;
			$face2x=165; $face2y=300;
			$face3x=345; $face3y=390;
			$face4x=39000; $face4y=40000;
			
			
			$postx=57500; $posty=8500;
			$totx=450000;$toty=250000;	
			
		}
		else
		{
			
			
			$leftx=70; $lefty=75;
			$rightx=578; $righty=148;
			$face1x=45; $face1y=235;
			$face2x=165; $face2y=300;
			$face3x=345; $face3y=390;
			$face4x=39000; $face4y=40000;
			
			$postx=57500; $posty=8500;
			$totx=450000;$toty=250000;	
			
		}	
		

	}else if($bay=="4BAY"){
		if($face1=="POST ONLY"||$face2=="POST ONLY"||$face3=="POST ONLY"||$face4=="POST ONLY"){
			$face1="";
			$face2="";
			$face3="";
			$face4="";
			$left="";
			$right="";
			$tot="";
			$archeight="";
		}
		$path="images/"."EP-64BAY/".$img.".jpg";
		
		if($glassheight=='6INCH')	
		{
		
			$leftx=85; $lefty=80;
			$rightx=585; $righty=120;
			$face1x=25; $face1y=195;
			$face2x=110; $face2y=235;
			$face3x=230; $face3y=290;
			$face4x=390; $face4y=360;
			
			
			$postx=57500; $posty=8500;
			$totx=450000;$toty=250000;	
			
		}
		elseif($glassheight=='12INCH')	
		{
			
			$leftx=85; $lefty=75;
			$rightx=590; $righty=75;
			$face1x=25; $face1y=195;
			$face2x=110; $face2y=235;
			$face3x=230; $face3y=290;
			$face4x=390; $face4y=360;
			
			
			$postx=57500; $posty=8500;
			$totx=450000;$toty=250000;
			
		}
		else
		{
			
			
			$leftx=99; $lefty=70;
			$rightx=585; $righty=135;
			$face1x=25; $face1y=195;
			$face2x=110; $face2y=235;
			$face3x=230; $face3y=290;
			$face4x=390; $face4y=360;
			
			$postx=57500; $posty=8500;
			$totx=450000;$toty=250000;	
			
		}
			


	}
	
	
	
	
	
	/*Resize 1920X1440 to 640X480 Start*/
	$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

	$my_img =imagecreatefromjpeg("../".$path);
    list($origWidth, $origHeight) = getimagesize("../".$path);

   
 
	
	$w =640;
	$h =480;
   // $img=$target;
    $extn = strtolower($extn);
 
        //$img = imagecreatefromjpeg($targett);
		
	
  
    $a = imagecreatetruecolor($w, $h);
    
    imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);
	
    imagejpeg($a,'img2/'.$newcpy,300);

	
	
	
	
	
	
	
	
	$resize="img2/".$osc."_".$im_id.".jpg";
	
	
		/*Resize 1920X1440 to 640X480 END*/
	
	
	
	
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;

		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

		//For Online.....
		//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
		//echo $face1;
	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $face2x, $face2y, $face2, $text_colour );
	imagestring( $my_img, 5, $face3x, $face3y, $face3, $text_colour);
	imagestring( $my_img, 5, $face4x, $face4y, $face4, $text_colour);
	imagestring( $my_img, 5, $postx, $posty, $post, $text_colour);
	imagestring( $my_img, 5, $leftx, $lefty, $left, $text_colour);
	imagestring( $my_img, 5, $rightx, $righty, $right, $text_colour);

	///imagestring( $my_img, 5, $archeight1x, $archeight1y, $archeight, $text_colour);
		//imagestring( $my_img, 5, $archeight2x, $archeight2y, $archeight, $text_colour);
		//imagestring( $my_img, 5, $archeight3x, $archeight3y, $archeight, $text_colour);
		//imagestring( $my_img, 5, $archeight4x, $archeight4y, $archeight, $text_colour);

	imagestring( $my_img, 5, $totx, $toty,$tot,$text_colour);


//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// $marge_right = 545;
		// $marge_bottom = 425;
		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);


//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));

//hereessss
	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");		
		
		
		
		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/

		
		
		
	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
		//imagejpeg($my_img,$pt."scrn1.jpg");

	imagedestroy( $my_img );
}



else if($mod=="Ring-EP6"){
	if($ends==1){
			//$img="BOTHENDS.jpg";
	}else if($ends==2){
			//$img="RIGHTEND.jpg";
		$left="";
	}else if($ends==3){
			//$img="LEFTEND.jpg";
		$right="";
	}else if($ends==4){
			//$img="NOENDS.jpg";
		$right="";
		$left="";
	}


	$archeight=''.$arc_glass_value.'"';
	if($bay=="1BAY"){
		if($face1=="POST ONLY"){
			$face1="";
			$left="";
			$right="";
			$tot="";
			$archeight="";
		}
		$path="images/"."Ring-EP-61BAY/".$img.".jpg";

			
		if($glassheight=='6INCH')	
		{
		
			$leftx=225; $lefty=55;
			$rightx=435; $righty=105;
			$face1x=225; $face1y=380;
			$face2x=28000; $face2y=37000;
			$face3x=35500; $face3y=39000;
			$face4x=39000; $face4y=40000;
			
			
			$postx=57500; $posty=8500;
			$totx=450000;$toty=250000;		
			
		}
		elseif($glassheight=='12INCH')	
		{
			
			$leftx=230; $lefty=25;
			$rightx=441; $righty=70;
			$face1x=225; $face1y=380;
			$face2x=28000; $face2y=37000;
			$face3x=35500; $face3y=39000;
			$face4x=39000; $face4y=40000;
			
			
			$postx=57500; $posty=8500;
			$totx=450000;$toty=250000;	
			
		}
		else
		{
			
			
			$leftx=225; $lefty=80;
			$rightx=430; $righty=145;
			$face1x=225; $face1y=380;
			$face2x=28000; $face2y=37000;
			$face3x=35500; $face3y=39000;
			$face4x=39000; $face4y=40000;
			
			
			$postx=57500; $posty=8500;
			$totx=450000;$toty=250000;	
			
		}	


	}else if($bay=="2BAY"){
		if($face1=="POST ONLY"||$face2=="POST ONLY"){
			$face1="";
			$face2="";
			$left="";
			$right="";
			$tot="";
			$archeight="";
		}

		
		
		


		$path="images/"."Ring-EP-62BAY/".$img.".jpg";

	
		if($glassheight=='6INCH')	
		{
		
			$leftx=150; $lefty=50;
			$rightx=500; $righty=145;
			$face1x=140; $face1y=305;
			$face2x=295; $face2y=390;
			$face3x=35500; $face3y=39000;
			$face4x=39000; $face4y=40000;
			
			
			$postx=57500; $posty=8500;
			$totx=450000;$toty=250000;		
			
		}
		elseif($glassheight=='12INCH')	
		{
			
			$leftx=150; $lefty=30;
			$rightx=505; $righty=115;
			$face1x=140; $face1y=305;
			$face2x=295; $face2y=390;
			$face3x=35500; $face3y=39000;
			$face4x=39000; $face4y=40000;
			
			
			$postx=57500; $posty=8500;
			$totx=450000;$toty=250000;	
			
		}
		else
		{
			
			
			$leftx=150; $lefty=70;
			$rightx=500; $righty=180;
			$face1x=140; $face1y=305;
			$face2x=295; $face2y=390;
			$face3x=35500; $face3y=39000;
			$face4x=39000; $face4y=40000;
			
			
			$postx=57500; $posty=8500;
			$totx=450000;$toty=250000;	
			
		}	

	}else if($bay=="3BAY"){
		if($face1=="POST ONLY"||$face2=="POST ONLY"||$face3=="POST ONLY"){
			$face1="";
			$face2="";
			$face3="";
			$left="";
			$right="";
			$tot="";
			$archeight="";
		}
		$path="images/"."Ring-EP-63BAY/".$img.".jpg";
		
		if($glassheight=='6INCH')	
		{
		
			$leftx=110; $lefty=60;
			$rightx=530; $righty=170;
			$face1x=85; $face1y=255;
			$face2x=195; $face2y=310;
			$face3x=345; $face3y=390;
			$face4x=39000; $face4y=40000;
			
			
			$postx=57500; $posty=8500;
			$totx=450000;$toty=250000;		
			
		}
		elseif($glassheight=='12INCH')	
		{
			
			$leftx=125; $lefty=45;
			$rightx=525; $righty=145;
			$face1x=85; $face1y=255;
			$face2x=195; $face2y=310;
			$face3x=345; $face3y=390;
			$face4x=39000; $face4y=40000;
			
			
			$postx=57500; $posty=8500;
			$totx=450000;$toty=250000;	
			
		}
		else
		{
			
			
			$leftx=107; $lefty=75;
			$rightx=525; $righty=200;
			$face1x=85; $face1y=255;
			$face2x=195; $face2y=310;
			$face3x=345; $face3y=390;
			$face4x=39000; $face4y=40000;
			
			
			$postx=57500; $posty=8500;
			$totx=450000;$toty=250000;	
			
		}	
		

	}else if($bay=="4BAY"){
		if($face1=="POST ONLY"||$face2=="POST ONLY"||$face3=="POST ONLY"||$face4=="POST ONLY"){
			$face1="";
			$face2="";
			$face3="";
			$face4="";
			$left="";
			$right="";
			$tot="";
			$archeight="";
		}
		$path="images/"."Ring-EP-64BAY/".$img.".jpg";
		
		if($glassheight=='6INCH')	
		{
		
			$leftx=85; $lefty=80;
			$rightx=555; $righty=205;
			$face1x=70; $face1y=235;
			$face2x=145; $face2y=280;
			$face3x=245; $face3y=340;
			$face4x=380; $face4y=410;
			
			
			$postx=57500; $posty=8500;
			$totx=450000;$toty=250000;	
			
		}
		elseif($glassheight=='12INCH')	
		{
			
			$leftx=85; $lefty=75;
			$rightx=555; $righty=180;
			$face1x=70; $face1y=235;
			$face2x=145; $face2y=280;
			$face3x=245; $face3y=340;
			$face4x=380; $face4y=410;
			
			
			$postx=57500; $posty=8500;
			$totx=450000;$toty=250000;
			
		}
		else
		{
			
			
			$leftx=90; $lefty=90;
			$rightx=545; $righty=235;
			$face1x=70; $face1y=235;
			$face2x=145; $face2y=280;
			$face3x=245; $face3y=340;
			$face4x=380; $face4y=410;
			
			
			$postx=57500; $posty=8500;
			$totx=450000;$toty=250000;	
			
		}
			


	}
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;

		//For Offline.....
	$my_img =imagecreatefromjpeg("../".$path);

		//For Online.....
		//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
		//echo $face1;
	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $face2x, $face2y, $face2, $text_colour );
	imagestring( $my_img, 5, $face3x, $face3y, $face3, $text_colour);
	imagestring( $my_img, 5, $face4x, $face4y, $face4, $text_colour);
	imagestring( $my_img, 5, $postx, $posty, $post, $text_colour);
	imagestring( $my_img, 5, $leftx, $lefty, $left, $text_colour);
	imagestring( $my_img, 5, $rightx, $righty, $right, $text_colour);

	imagestring( $my_img, 5, $archeight1x, $archeight1y, $archeight, $text_colour);
		//imagestring( $my_img, 5, $archeight2x, $archeight2y, $archeight, $text_colour);
		//imagestring( $my_img, 5, $archeight3x, $archeight3y, $archeight, $text_colour);
		//imagestring( $my_img, 5, $archeight4x, $archeight4y, $archeight, $text_colour);

	imagestring( $my_img, 5, $totx, $toty,$tot,$text_colour);


//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// $marge_right = 545;
		// $marge_bottom = 425;
		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);


//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));

//hereessss
	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");		
		
		
		
		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/

		
		
		
	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
		//imagejpeg($my_img,$pt."scrn1.jpg");

	imagedestroy( $my_img );
}


else if($mod=="EP7"){
	$ar=explode("-",$face1);
	if($ar[1]!=""){
		
		if($ar[1]=='1/4"')
		{
		$tot=($ar[0]+1).'-7/8"';	
		}
		elseif($ar[1]=='1/2"')
		{
		$tot=($ar[0]+2).'-1/8"';	
		}
		elseif($ar[1]=='3/4"')
		{
		$tot=($ar[0]+2).'-3/8"';	
		}
		
		
		
	}else{
		$tot=($face1+1).'-5/8"';
	}
	if($ends==1){
			//$img="BLACKBOTHENDS.jpg";
	}else if($ends==2){
			//$img="BLACKRIGHTEND.jpg";
		$left="";
	}else if($ends==3){
			//$img="BLACKLEFTEND.jpg";
		$right="";
	}else if($ends==4){
			//$img="BLACKNOENDS.jpg";
		$right="";
		$left="";
	}
	$path="images/"."EP7/".$img.".jpg";
	
	if($face1=='POST ONLY')
	{
	$face1x=25000;$face1y=39000;	
	$totx=3500000;$toty=2950000;
	}
	else{
	$face1x=280;$face1y=325;	
	$totx=230;$toty=370;
	}
	
	
	
	
	/*Resize 1920X1440 to 640X480 Start*/
	$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

	$my_img =imagecreatefromjpeg("../".$path);
    list($origWidth, $origHeight) = getimagesize("../".$path);

   
 
	
	$w =640;
	$h =480;
   // $img=$target;
    $extn = strtolower($extn);
 
        //$img = imagecreatefromjpeg($targett);
		
	
  
    $a = imagecreatetruecolor($w, $h);
    
    imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);
	
    imagejpeg($a,'img2/'.$newcpy,300);

	
	
	
	
	
	
	
	
	$resize="img2/".$osc."_".$im_id.".jpg";
	
	
		/*Resize 1920X1440 to 640X480 END*/
	
	
	
	//$totx=0;$toty=0;
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;
		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

		//For Online.....
		//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
		//echo $face1;
	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $totx, $toty, $tot,$text_colour);

//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// $marge_right = 545;
		// $marge_bottom = 425;
		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);


//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));



	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");		
		
		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/

		
		
	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
	imagedestroy( $my_img );
}


else if($mod=="EP8"){
	if($ends==1){
			//$img="BOTHENDS.jpg";
	}else if($ends==2){
			//$img="RIGHTEND.jpg";
		$left="";
	}else if($ends==3){
			//$img="LEFTEND.jpg";
		$right="";
	}else if($ends==4){
			//$img="NOENDS.jpg";
		$right="";
		$left="";
	}


//$tot
$bannerss=str_replace("\\","",$_POST["bannerss"]);
$bannerss_type=str_replace("\\","",$_POST["bannerss_type"]);

	$archeight=''.$arc_glass_value.'"';
	if($bay=="1BAY"){
		if($face1=="POST ONLY"){
			$face1="";
			$left="";
			$right="";
			$tot="";
			$archeight="";
		}
		$path="images/"."EP-81BAY/".$img.".jpg";

			
			$leftx=28000; $lefty=28000;
			$rightx=28000; $righty=28000;
			
			
			$face2x=28000; $face2y=37000;
			$face3x=35500; $face3y=39000;
			$face4x=39000; $face4y=40000;
			
			if($bannerss=='yes')
			{
			if($bannerss_type=='double_side')
			{
			$postx=70; $posty=220;
			$face1x=250; $face1y=325;
			$totx=260;$toty=410;
			}
			else{
			$postx=160; $posty=220;
			$face1x=330; $face1y=330;
			$totx=350;$toty=410;
			}
			}
			else{
			$postx=160; $posty=220;
			$face1x=330; $face1y=330;
			$totx=350;$toty=410;
			}

	}else if($bay=="2BAY"){
		if($face1=="POST ONLY"||$face2=="POST ONLY"){
			$face1="";
			$face2="";
			$left="";
			$right="";
			$tot="";
			$archeight="";
		}

		
		
		


		$path="images/"."EP-82BAY/".$img.".jpg";

			
			
			$leftx=150; $lefty=70;
			$rightx=500; $righty=180;
			$face1x=140; $face1y=305;
			$face2x=295; $face2y=390;
			$face3x=35500; $face3y=39000;
			$face4x=39000; $face4y=40000;
			
			$postx=575; $posty=85;
			$totx=450;$toty=250;	
	

	}else if($bay=="3BAY"){
		if($face1=="POST ONLY"||$face2=="POST ONLY"||$face3=="POST ONLY"){
			$face1="";
			$face2="";
			$face3="";
			$left="";
			$right="";
			$tot="";
			$archeight="";
		}
		$path="images/"."EP-83BAY/".$img.".jpg";
		
		
			
			
			$leftx=107; $lefty=75;
			$rightx=525; $righty=200;
			$face1x=85; $face1y=255;
			$face2x=195; $face2y=310;
			$face3x=345; $face3y=390;
			$face4x=39000; $face4y=40000;
			
			$postx=575; $posty=85;
			$totx=450;$toty=250;	
	
		

	}else if($bay=="4BAY"){
		if($face1=="POST ONLY"||$face2=="POST ONLY"||$face3=="POST ONLY"||$face4=="POST ONLY"){
			$face1="";
			$face2="";
			$face3="";
			$face4="";
			$left="";
			$right="";
			$tot="";
			$archeight="";
		}
		$path="images/"."EP-84BAY/".$img.".jpg";
		
		
			$leftx=90; $lefty=90;
			$rightx=545; $righty=235;
			$face1x=70; $face1y=235;
			$face2x=145; $face2y=280;
			$face3x=245; $face3y=340;
			$face4x=380; $face4y=410;
			
			$postx=575; $posty=85;
			$totx=450;$toty=250;	
	


	}
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;


	/*Resize 1920X1440 to 640X480 Start*/
	$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

	$my_img =imagecreatefromjpeg("../".$path);
    list($origWidth, $origHeight) = getimagesize("../".$path);

   
 
	
	$w =640;
	$h =480;
   // $img=$target;
    $extn = strtolower($extn);
 
        //$img = imagecreatefromjpeg($targett);
		
	
  
    $a = imagecreatetruecolor($w, $h);
    
    imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);
	
    imagejpeg($a,'img2/'.$newcpy,300);

	
	
	
	
	
	
	
	
	$resize="img2/".$osc."_".$im_id.".jpg";
	
	
		/*Resize 1920X1440 to 640X480 END*/
	


		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

		//For Online.....
		//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
		//echo $face1;
	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $face2x, $face2y, $face2, $text_colour );
	imagestring( $my_img, 5, $face3x, $face3y, $face3, $text_colour);
	imagestring( $my_img, 5, $face4x, $face4y, $face4, $text_colour);
	imagestring( $my_img, 5, $postx, $posty, $post, $text_colour);
	imagestring( $my_img, 5, $leftx, $lefty, $left, $text_colour);
	imagestring( $my_img, 5, $rightx, $righty, $right, $text_colour);

	///imagestring( $my_img, 5, $archeight1x, $archeight1y, $archeight, $text_colour);
		//imagestring( $my_img, 5, $archeight2x, $archeight2y, $archeight, $text_colour);
		//imagestring( $my_img, 5, $archeight3x, $archeight3y, $archeight, $text_colour);
		//imagestring( $my_img, 5, $archeight4x, $archeight4y, $archeight, $text_colour);

	imagestring( $my_img, 5, $totx, $toty,$tot,$text_colour);


//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// $marge_right = 545;
		// $marge_bottom = 425;
		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);


//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));

//hereessss
	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");		
		
		
		
		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/

		
		
		
	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
		//imagejpeg($my_img,$pt."scrn1.jpg");

	imagedestroy( $my_img );
}

else if($mod=="Light Bar"){
	//$img="start2.jpg";
$path="images/"."LB/".$img.".jpg";
$face1x=355;$face1y=330;
$texttt1x=270;$texttt1y=295;
$texttt2x=270;$texttt2y=310;

	// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;

	
	/*Resize 1920X1440 to 640X480 Start*/
	$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

	$my_img =imagecreatefromjpeg("../".$path);
    list($origWidth, $origHeight) = getimagesize("../".$path);

   
 
	
	$w =640;
	$h =480;
   // $img=$target;
    $extn = strtolower($extn);
 
        //$img = imagecreatefromjpeg($targett);
		
	
  
    $a = imagecreatetruecolor($w, $h);
    
    imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);
	
    imagejpeg($a,'img2/'.$newcpy,300);

	
	
	
	
	
	
	
	
	$resize="img2/".$osc."_".$im_id.".jpg";
	
	
		/*Resize 1920X1440 to 640X480 END*/
	
	
	
		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

	//For Online.....
	//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
	//echo $face1;
	//$texttt1
	//$texttt2
imagestring( $my_img, 5, $texttt1x, $texttt1y, $texttt1, $text_colour);
imagestring( $my_img, 5, $texttt2x, $texttt2y, $texttt2, $text_colour);
imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
imagestring( $my_img, 5, 395, 360,(str_replace('"', "", $face1)+2).'-1/2"',$text_colour);

//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// $marge_right = 545;
		// $marge_bottom = 425;
		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);


//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));



	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");		
		
		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/

		
	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
	imagedestroy( $my_img );
}else if($mod=="Heat Lamp"){
		//$img="start2.jpg";
	$path="images/"."HL/".$img.".jpg";
	$face1x=340;$face1y=310;
	$totx=350; $toty=350;
	$face2x=300;$face2y=180;
	$texttt1x=120;$texttt1y=310;
	$texttt2x=120;$texttt2y=323;
		// echo $_SERVER['DOCUMENT_ROOT']."/".$_SERVER["SERVER_NAME"]."/".__FILE__;
/*Resize 1920X1440 to 640X480 Start*/
$newcpy = "".$osc."_".$im_id.".jpg";
$w = 640; // maximum width of new file. Change it according to your need
$h = 480; // maximum height of new file. Change it according to your need
$extn='';

$my_img =imagecreatefromjpeg("../".$path);
list($origWidth, $origHeight) = getimagesize("../".$path);




$w =640;
$h =480;
// $img=$target;
$extn = strtolower($extn);

//$img = imagecreatefromjpeg($targett);



$a = imagecreatetruecolor($w, $h);

imagecopyresampled($a,$my_img,0,0,0,0,$w,$h,$origWidth,$origHeight);

imagejpeg($a,'img2/'.$newcpy,300);









$resize="img2/".$osc."_".$im_id.".jpg";


/*Resize 1920X1440 to 640X480 END*/
		//For Offline.....
	$my_img =imagecreatefromjpeg($resize);

		//For Online.....
		//$my_img =imagecreatefromjpeg("http://sneezeguard.com/".$path);

	$text_colour = imagecolorallocate( $my_img, 255, 0, 0 );
		//echo $face1;
	imagestring( $my_img, 5, $texttt1x, $texttt1y, $texttt1, $text_colour);
	imagestring( $my_img, 5, $texttt2x, $texttt2y, $texttt2, $text_colour);

	imagestring( $my_img, 5, $face1x, $face1y, $face1, $text_colour);
	imagestring( $my_img, 5, $face2x, $face2y, $tot.'"', $text_colour);
	imagestring( $my_img, 5, $totx, $toty,(str_replace('"', "", $face1)+2).'-1/2"',$text_colour);

//old code..............
		// $png = imagecreatefrompng('logo.png');
		// // Set the margins for the stamp and get the height/width of the stamp image
		// $marge_right = 545;
		// $marge_bottom = 425;
		// $sx = imagesx($png);
		// $sy = imagesy($png);

		// // Merge the stamp onto our photo with an opacity of 50%
		// imagecopymerge($my_img, $png, imagesx($my_img) - $sx - $marge_right, imagesy($my_img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);


//new resized logo simillar to additional images............
	$logo = 'new_logo.png';
				// Get new dimensions
	list($logo_width, $logo_height) = getimagesize($logo);
				// Resample
	$logo_r = imagecreatetruecolor($logo_width/6, $logo_height/6);

	imagealphablending($logo_r, false);
	imagesavealpha($logo_r,true);
	$transparentt = imagecolorallocatealpha($logo_r, 255, 255, 255, 127);
	imagefilledrectangle ($logo_r, 0, 0, $logo_width/6, $logo_height/6, $transparentt);

	$image = imagecreatefrompng($logo);
	imagecopyresampled($logo_r, $image, 0, 0, 0, 0, $logo_width/6, $logo_height/6, $logo_width, $logo_height);
	imagecopy($my_img, $logo_r, 6, 6 , 0, 0, imagesx($logo_r),  imagesy($logo_r));



	if($sv!="save"){
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);				
		imagejpeg($image2,"scrn1.jpg");		
		
		
		/*for customer savelayout start*/
		if($customer_idd!=0)
		{
			
		$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;
	
		$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

				
			
			$queryss="SELECT MAX(id) FROM `save_layout_img`";
			$exe_queryss=mysqli_query($con,$queryss);
			$getid=mysqli_fetch_array($exe_queryss);
			$imgggid=$getid[0];
			$newimgid=$imgggid+1;
			
		imagejpeg($image2,"img_layout/".$osc."_".$newimgid."_".$customer_idd.".jpg");
		
		$imgname="".$osc."_".$newimgid."_".$customer_idd.".jpg";
		
		datasave_layout($osc,$newimgid,$mod,$customer_idd,$imgname);
		}
		
		
		/*for customer savelayout end*/

		
	}else{
		$image2 = imagecreatetruecolor(1280, 960);	
		imagecopyresampled($image2, $my_img, 0, 0, 0, 0, 1280, 960, 640, 480);	
		imagejpeg($image2,"img/".$osc."_".$im_id.".jpg");
		datasave($osc,$im_id,$mod,$bay);
	}
	imagedestroy( $my_img );
}




function datasave($osc,$img,$mod,$bay){
	$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;

		// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}else{
//		    echo "Connect";
	}
	$stmt = $conn->prepare("INSERT INTO screen_table (osc_id,img_id,category,bay,date_time) VALUES (?,?,?,?,?)");
	$stmt->bind_param("sssss", $o_id,$im,$mo,$by,$dt);
	$o_id=$osc;
	$im=$img;
	$mo=$mod;
	$by=$bay;
	$dt=date("Y/m/d");
	$t=$stmt->execute();
	if($t==0){
		$done=false;
	}
}



//save_layout_function
function datasave_layout($osc,$img,$mod,$customer_idd,$imgname){
	$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;

$con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

	
	$o_id=$osc;
	$im=$img;
	$mo=$mod;
	$customer_id=$customer_idd;
	$img_name=$imgname;
	$dt=date("Y/m/d");
	
	$stmtquery="INSERT INTO save_layout_img (osc_id,customer_id,img_id,category,date_time,img_name) VALUES ('$o_id','$customer_id','$im','$mo','$dt','$img_name')";
	
	
	$exess=mysqli_query($con,$stmtquery);
	if($exess==0){
		$done=false;
	}
}

?>