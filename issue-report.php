<?php
ini_set('session.cookie_httponly',1);
ini_set('session.cookie_secure',1);
  
$page_title='Sneeze Guard choose from ADM Sneezeguards in USA | Contact'; 
$page_description='Sneeze guard or Glass Barrier is a physical barrier that is used to protect or Covid-19 protection products and maintain cleanliness in workspaces and public spaces.';
$page_keyword='Sneeze Guard store, ADM Sneezeguards Phone Number, Tempered Glass in business days, sneeze guard Manufacturer US, custom sneeze guard';
require('includes/application_top.php');
require(DIR_WS_INCLUDES . 'header_new_design.php');


if(isset($_POST['submit']))
{
    if(isset($_POST['captcha']) && $_SESSION['captcha']!=$_POST['captcha']){
        $captchamismatch=true;
        $messageStack->add('captcha', RECAPTCHA_ERROR); 
          $error = true;
      }else{
//if (isset($_FILES) && $_FILES) {


 // Count total files
 $countfiles = count($_FILES['file']['name']);




    $allowedExtensions = array("pdf", "doc", "docx", "gif", "jpeg", "jpg", "png", "mp4", "ogg", "webm", "avi", "mkv", "xlsx");






	$query_get_ticketno="SELECT MAX(id) FROM issue_report";
	$exe_get_ticket=mysqli_query($connt,$query_get_ticketno);
	$get_ticket_no=mysqli_fetch_array($exe_get_ticket);
	$maxno=$get_ticket_no[0];
	$new_no=$maxno+1;
	
	if($new_no<10)
	{
	
	$ticket_no='ADM000000'.$new_no.'';
	}
	elseif($new_no>9 && $new_no<100)
	{
	
	$ticket_no='ADM00000'.$new_no.'';
	}
	elseif($new_no>99 && $new_no<1000)
	{
	
	$ticket_no='ADM0000'.$new_no.'';
	}
	elseif($new_no>999 && $new_no<10000)
	{
	
	$ticket_no='ADM000'.$new_no.'';
	}
	elseif($new_no>9999 && $new_no<100000)
	{
	
	$ticket_no='ADM00'.$new_no.'';
	}
	elseif($new_no>99999 && $new_no<1000000)
	{
	
	$ticket_no='ADM0'.$new_no.'';
	}
	else{
		$ticket_no='ADM'.$new_no.'';
	}



    // email fields: to, from, subject, and so on
    $to = "info@sneezeguard.com";
    $from = $_POST['email'];
    $subject = "["."$ticket_no"."]".$_POST ['sub'] ;
    $message = $_POST['msg'];
	$messagemain = $_POST['msg'];
	// $headers = [
  // 'MIME-Version: 1.0',
  // 'Content-type: text/plain; charset=utf-8',
  // 'From: '.$from.'',
  // 'Cc: andy@sneezeguard.com, info@sneezeguard.com, '.$from.'',
  // 'Bcc: ksatendra2001@gmail.com, ramesharisen@gmail.com, satendrapatelgpk11@gmail.com, '.$from.''
// ];
// $headers = implode("\r\n", $headers);

//$cc1=$cc2=$cc3=$cc4=$cc5='';

//$cc1='';
//$cc2='';
//$cc3='';
//$cc4='';
//$cc5='';



    $headers = "From: $from";
	
	
	$headers = "From: $from" . "\r\n" .
    "CC: andy@sneezeguard.com,lovekumargupta2015@gmail.com, '.$from.',info@sneezeguard.com, satendrapatelgpk11@gmail.com";
    // "CC:ksatendra2001@gmail.com, arisen.tech@gmail.com";
	
	$email= $_POST['email'];
	
	   
	$sender_name= $_POST['sender_name'];
	$mobile_no= $_POST['mobile_no'];
	
//	$msg=$_POST['msg'];

    // boundary 
    $semi_rand = md5(time());
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

    // headers for attachment 
    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

    // multipart boundary 
    $message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";
    $message .= "--{$mime_boundary}\n";







// $files = array();
 // for($i=0;$i<$countfiles;$i++){
		// $file_name = $_FILES['file']['name'][$i]; 
		// $temp_name = $_FILES['file']['tmp_name'][$i];
		// $file_type = $_FILES['file']['type'][$i];
		// $path_parts = pathinfo($file_name);
		// $ext = $path_parts['extension'];
		// if(!in_array($ext,$allowedExtensions)) {
			// die("File $file_name has the extensions $ext which is not allowed");
		// }
		// array_push($files,$_FILES['file']['name'][$i]);
	// }








// preparing attachments
	for($x=0;$x<$countfiles;$x++){
		
		$file = fopen($_FILES['file']['tmp_name'][$x],"r");
    //echo'<b style="color:red;"><pre>';print_r($_FILES['file']);echo'</b>';
		$data = fread($file,filesize($_FILES['file']['tmp_name'][$x]));
		fclose($file);
		$data = chunk_split(base64_encode($data));
		$name = $_FILES['file']['name'][$x];
		$message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" . 
		"Content-Disposition: attachment;\n" . " filename=\"$name\"\n" . 
		"Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
		$message .= "--{$mime_boundary}\n";

	}

/*
    // preparing attachments
    for ($x = 0; $x < count($files); $x++) {
        $file = fopen($files[$x]['tmp_name'], "rb");
        $data = fread($file, filesize($files[$x]['tmp_name']));
        fclose($file);
        $data = chunk_split(base64_encode($data));
        $name = $files[$x]['name'];
        $message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" .
                "Content-Disposition: attachment;\n" . " filename=\"$name\"\n" .
                "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
        $message .= "--{$mime_boundary}\n";
    }
    // send

	*/
	
	
	
	
$query="INSERT INTO issue_report(`sender_name` ,`email`,`subject` ,`mobile_no` ,`ticket_no` ,`status`,`massage`
)
VALUES ('$sender_name','$email','$subject','$mobile_no','$ticket_no','0','$messagemain')";

	$run=mysqli_query($connt,$query);
$error_status=0;
	if($run)
	{
	$ok = mail($to, $subject, $message, $headers);
    if ($ok) {
        //echo "<p>mail sent to $to!</p>";
		$error_status=0;
		$errormsg="<span style='color:green'>Email send sneezeguard</span>";

		
    } else {
		$error_status=1;
		$errormsg="<span style='color:red'>Error to Email send sneezeguard</span>";
      //  echo "<p>mail could not be sent!</p>";
    }
	$error_status=0;	
		//echo "data inserted";
	}
	else
	{
		$error_status=1;
		$errormsg="<span style='color:red'>Error to Insert Data</span>";
		//echo "data not inserted";
	}
}
      }
	
$text1=rand(1,9);
$text2=rand(1,9);
$captchatext=$text1." + ".$text2;
$captcha=$text1+$text2;
tep_session_register('captcha');
$captchamismatch=true;
?>
<!-- ReCaptcha Start -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<!-- ReCaptcha End -->
<div class="issue">
    <table width="100%">

        <tbody>
            <tr>

                <td>
                    <table width="100%" cellpadding="2" cellspacing="2">
                        <tbody>
                            <tr>

                                <td valign="top">
                                    <table border="0" height="40" valign="center" align="center">
                                        <tbody>
                                            <tr>
                                                <td align="center">
                                                    <font color="black" size="4">

                                                    </font>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table border="0" height="40" align="center">
                                        <tbody>
                                            <tr>
                                                <td align="center">
                                                <?php
                                                if(count($messageStack->messages)>0){
                                                    echo '<div class="alert alert-danger mt-3 mb-3 ">'.$messageStack->output('captcha').' '.$errormsg.'</div>';
                                                }else{
                                                    if(isset($errormsg))
                                                    {
                                                    echo''.$errormsg.''; 
                                                    }
                                                }
                                                    ?>
                                                    <?php
function spamcheck($field)
  {
  //filter_var() sanitizes the e-mail 
  //address using FILTER_SANITIZE_EMAIL
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);
  
  //filter_var() validates the e-mail
  //address using FILTER_VALIDATE_EMAIL
  if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
  }

if (isset($_REQUEST['email']))
  {//if "email" is filled out, proceed

  //check if the email address is invalid
  $mailcheck = spamcheck($_REQUEST['email']);
  
  
    // reCAPTCHA - start
// $recaptcha = new \ReCaptcha\ReCaptcha(RECAPTCHA_PRIVATE_KEY);
 // $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
 
 // if ($resp->isSuccess()) {
  
  
  
  
  
  
  
  if ($mailcheck==FALSE)
    {
    echo "Invalid input";
    }
  else
    {//send email
    $hatHeat = $_REQUEST['hatHeat'] ;
    $hatLight = $_REQUEST['hatLight'] ;
    $endPanLeft = $_REQUEST['endPanLeft'] ;
    $endPanRight = $_REQUEST['endPanRight'] ;
    $strLength = $_REQUEST['strLength'] ;
    $email = $_REQUEST['email'] ; 
    $name = $_REQUEST['name'];
    $phNumb = $_REQUEST['phNum'];
    $subject = "Quote Request for model $Model.";
    $message = $_REQUEST['message'] ;
	mail("sales@sneezeguards.com", $subject,
    "This is a quote request from: $name \n
    Phone Number: $phNumb \n\n
    $message", "From: $email" );
    echo "
    <table align=center>
    <tr>
    <td align=center>
    <font size=2 >
    Thank you for contacting us, you should recieve a response in 24-48 hours.
    </font>
    </td>
    </tr>
    </table>";
    }


/*	
  }
else{
	
	echo'<script>alert("Please Select correct Captcha")</script>';
}	
	*/
	
	
  }

?>
                                                    <table width="100%" >
                                                        <tbody>
                                                            <tr>
                                                                <td align="center">
                                                                    <h2 class="reportheading">Report Issue</h2>
                                                                    <form method="post" action="" enctype="multipart/form-data">
                                                                        <div class="form-group"><input name="sender_name" type="text"  placeholder="Name" class="form-control"></div>
                                                                        <div class="form-group"><input name="email" type="text"  placeholder="Email" class="form-control"></div>
                                                                        <div class="form-group"><input name="sub" type="text"  placeholder="Subject" class="form-control"></div>

                                                                        <div class="form-group"><input name="mobile_no"  type="text" placeholder="Phone Number" class="form-control"></div>
                                                                        <div class="form-group"><textarea name="msg" placeholder="Message" rows="10" cols="75" class="form-control"></textarea></div>

                                                                        <div align="left">
                                                                       <div class="attachment-row form-group" id="moreattachment">
                                                                            <input type="file" name="file[]" multiple="multiple" class="form-control">
                                                                        </div>
                                                                       <div  onclick="addMoreAttachment();" class="icon-add-more-attachemnt" title="Add More Attachments">
                                                                            <p>Add More <img src="icon-add-more-attachment.png" alt="Add More Attachments"></p>
                                                                        </div>
                                                                        <div class="form-group text-secondary">
                                                                            <input type="text" name="captcha" class="form-control" placeholder="What is <?=$captchatext?> =">
                                                                        </div>
                                                                        <div class="mt-4">
                                                                        <input type="text" id="website" value="">
                                                                        <input type="submit" value="Send Mail" name="submit" class="btn btn-dark form-control p-2">
                                                                        </div>
                                                                       </div>
                                                                    </form>



                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>

                                </td>
                            </tr>

                        </tbody>
                    </table>
                </td>
            </tr>

        </tbody>
    </table>
</div>
<style>
    
</style>
<?php
require(DIR_WS_INCLUDES . 'footer_new_design.php');
?>
