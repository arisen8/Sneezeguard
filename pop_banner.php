<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="-1" />

<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="Pragma" content="no-cache" />

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


$image_name='banner_design_front.png';	





if (!$detect->isMobile())
{
?>
<div style="width:100%">
<div style="width:50%;float:left;"><img id="image" src="tdesignAPI/img/<?php echo$image_name ?>" style="height:95%;"></div>
<div style="width:50%;float:left;"><img id="image" src="tdesignAPI/img/<?php echo$image_name ?>" style="height:95%;"></div>

</div>
<div style="float:left"><img src="img/save_button.png" style="margin-right:2px" onclick="save_im()"><img src="img/print_button.png" style="margin-right:2px" onclick="print_im()"><img src="img/email_button.png" onclick="email_im()"></div>
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
<div style="width:100%">
<div style="width:50%;float:left;"><img id="image" src="tdesignAPI/img/<?php echo$image_name ?>" style="height:95%;"></div>
<div style="width:50%;float:left;"><img id="image" src="tdesignAPI/img/<?php echo$image_name ?>" style="height:95%;"></div>

</div>
<div style="float:left"><img src="img/save_button.png" style="margin-right:5px; width:80px;" onclick="save_im()"><img src="img/print_button.png" style="margin-right:5px; width:80px;" onclick="print_im()"><img src="img/email_button.png" style="width:80px;" onclick="email_im()"></div>
<?php
}
?>



<form id="myForm" name="image_send" method="post" action="#">
	<input type="hidden" name="val" value="yes">
</form>
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
        link.href = "tdesignAPI/img/<?php echo$image_name ?>";
        link.download="tdesignAPI/img/<?php echo$image_name ?>"
        document.body.appendChild(link);
        link.click();
      }
	  function email_im(){
		  document.getElementById("myForm").submit();
	  }
</script>

	<?php   
        if(isset($_POST['val'])){
            $img=rand();
            $imageName = $img.".jpg";
            $imageContent = file_get_contents("tdesignAPI/img/".$image_name."");
            file_put_contents("tdesignAPI/img/".$imageName, $imageContent);
            echo  "<script type='text/javascript'>";
            echo "window.open('mail_send.php?type=quote&hell='+".$img." , '_blank');";
            echo "</script>";    
        }
    ?>