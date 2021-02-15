

<?php
ini_set('session.cookie_httponly',1);
  ini_set('session.cookie_secure',1);
  
$ip=$_SERVER["REMOTE_ADDR"];
$img=$_GET["hell"];
$type=$_GET["type"];
session_start();
include("simple-php-captcha.php");
$_SESSION['captcha'] = simple_php_captcha();
?>
<?php
	//require('includes/classes/mime.php');
	//require('includes/classes/email.php');
	//require('includes/functions/general.php');
	$msg="";
	if(isset($_GET["mai"])){
		if($_GET["cap_hid"]==$_GET["captcha"]){
			$msg="";
			$mail=$_GET["mai"];
			$sub=$_GET["sub"];
			$mge=$_GET["msg"];
			$type=$_GET["type"];
			$hed= 'MIME-Version: 1.0' . "\r\n";
			$hed.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$hed.='From:'. "ADM Sneezeguard <info@sneezeguard.com> \r\n";
			$message = "<html><head>
                <title>Your email at the time</title>
                </head>
                <body>
                <p>".$mge."</p>
                <img src=\"http://sneezeguard.com/img/screenshot/".$img.".jpg\">
				<h3>This Email is send by the <span style=\"color:red\">".$ip."</span>
                </body></html>";
				if(mail($mail, $sub, $message, $hed)){
					echo '<meta http-equiv="refresh" content="0; URL=send.php?val='.$mail.'&ip='.$ip.'&sub='.$sub.'&msg='.$mge.'&type='.$type.'&img='.$img.'">';
					//header('Location: send.php');
					//http_redirect("send.php", array("name" => "value"), true, HTTP_REDIRECT_PERM);
				}else{
					echo "Some Error";
				}
		}else{
			$msg="<span style='color:red'>Please Enter correct Captha</span>";
		}
	}
?>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<form name="mail" method="get" action="#">
<body>
<div id="cont" style="margin-left:00px;">
	
	<table align="center" width="700" id="tbl" width="100%" style="background-color:white;color:black;">
		<tr style="background-color:#171717;">
			<td colspan=2 >
				<img src="images/logo.jpg" >
			</td>
		</tr>
		<tr>
			<td>
				<b><label style="color:black">To</label></b>
			</td>
			<td>
				<input type="text" name="mai" placeholder="example@email.com"><input name="hell" type="hidden" value=<?php echo $img;?>>
			</td>
		</tr>
		<tr>
			<td>
				<b><label style="color:black">Subject Line</label></b>
			</td>
			<td>
				<input type="text" name="sub" placeholder="Subject">
			</td>
		</tr>
		<tr>
			<td>
				<b><label style="color:black">Message</label></b>
			</td>
			<td>
				<textarea rows="4" cols="50" name="msg" placeholder="Enter Message"></textarea>
			</td>
		</tr>
		
		<tr>
			<td>
				<b><label style="color:black">Captcha</label></b>
			</td>
			<td>
				<img src=<?php echo $_SESSION['captcha']['image_src'];?>><img src="img/refresh.png" onclick="location.reload();" title="Refresh Captcha">
			</td>
		</tr>
		<tr>
			<td>
			</td>
			<td>
				<input type="text" name="captcha" placeholder="Captcha"><input type="hidden" name="cap_hid" value=<?php echo $_SESSION["captcha"]["code"]?>><span style="colo:red"><?php echo $msg;?></span>
			</td>
		</tr>
		<tr>
		<td>
		</td>
			<td>
				<input onclick="abc(this.form);" type="button" value="Send Mail" name="sbmt">
			</td>
		</tr>
		<tr>
			<td>
				<p id="check"></p>
			</td>
		</tr>
		<tr>
			<td><hr></td>
			
		<tr>
		<tr>
			<td valign="top">
				<b><label style="color:black" >Image Sent</label></b>
			</td>
			<td>
				<img src="img/screenshot/<?php echo $img?>.jpg" style="width:280;height=360;"> 
			</td>
		</tr>
		
		<tr>
			<td>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</td>
			<td>
				<h3 style="float:left"><span style="color:black">Your IP:</span><span style="color:red"><?php echo $ip?></span></h3><input type="hidden" name="type" value=<?php echo $type;?>>
			</td>
			
		</tr>
		</table>
		
		</div>
		</body>
</form>
	
<script>
	function abc(form){
		if(validateEmail(form.mai.value)){
			if(form.sub.value==""){
				alert("Insert Subject");
			}else{
				form.submit();
			}
		}
	}
	function validateEmail(sEmail) {
  		var reEmail = /^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!\.)){0,61}[a-zA-Z0-9]?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!$)){0,61}[a-zA-Z0-9]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/;

  		if(!sEmail.match(reEmail)) {
    		alert("Invalid email address");
    		return false;
  		}

  		return true;

	}
	
</script>