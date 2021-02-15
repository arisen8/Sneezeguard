<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE ");
        if(msie>1){
            if(document.URL.indexOf("#")==-1){
                url = document.URL+"#";
                location = "#";
                location.reload(true);
            }
        }
    });
</script>
<?php
require_once("Mobile_Detect.php");
$detect = new Mobile_Detect();


if (!$detect->isMobile())
{
?>



<div style="text-align:center;">
<h1>Wait !</h1>
<h3>GET 10% OFF TODAY +</h3>
<h4>EXCLUSIVE OFFERS! </h4>
<h4>We'll Send Your Discount Right Now!! </h4>
<p><input type="text" name="name" id="cname" placeholder="First Name"></p>
<p><input type="email" name="email" id="email" placeholder="Email"></p>
<span>*By completing this form you are signing up to receive our emails and can unsubscribe at any time</span>
<button name="signup">Sign Up</button>
</div>
<?php
}
else{
?>

<style>
#TB_iframeContent {
    width: 924px !important;
    height: 1020px !important;
}
#TB_window {
    margin-left: -474px !important;
    width: 924px !important;
    height: 1129px !important;
    margin-top: -647px !important;
    display: block;
}
</style>


<img id="image" src="includes/scrn1.jpg" style="width:909px; height:678px;">
<div style="float:left"><img src="img/save_button.png" style="margin-right:5px; width:80px;" onclick="save_im()"><img src="img/print_button.png" style="margin-right:5px; width:80px;" onclick="print_im()"><img src="img/email_button.png" style="margin-right:5px; width:80px;" onclick="email_im()"></div>
<?php
}
?>


<form id="myForm" name="image_send" method="post" action="#">
    <input type="hidden" name="val" value="yes">
</form>
<script>
	function print_im(){
        
        function printImage(image)
        {
            var printWindow = window.open('', 'Print Window','height=1024,width=768');
            printWindow.document.write('<html><head><title>Print Window</title>');
            printWindow.document.write('</head><body ><img src=\'');
            printWindow.document.write(image.src);
            printWindow.document.write('\' style="width=595px; height:600px" /></body></html>');
            printWindow.document.close();
            setTimeout(function(){
                printWindow.print();//your code to be executed after 1 seconds
            }, 1000);
        }
        var image = document.getElementById('image');
        printImage(image);
    }


      function save_im(){
      	var link = document.createElement('a');
        //link.className="thickbox";
        //alert(link.className);
        link.href = "includes/scrn1.jpg";
        link.download="screenshot.jpg";
        document.body.appendChild(link);
        link.click();
      }
      function email_im(){
        document.getElementById("myForm").submit();
            //var im=Math.floor(Math.random()*100000);
            //window.open('mail_send.php?hell='+Math.floor(Math.random()*100000) , 'Print Window','height=1024,width=768');
      }
      
</script>

    <?php   
        if(isset($_POST['val'])){
            $img=rand();
            $imageName = $img.".jpg";
            $imageContent = file_get_contents("includes/scrn1.jpg");
            file_put_contents("img/screenshot/".$imageName, $imageContent);
            echo  "<script type='text/javascript'>";
            echo "window.open('mail_send.php?type=layout&hell='+".$img." , '_blank');";
            echo "</script>";    
        }
    ?>