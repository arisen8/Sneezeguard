<?php     
$Array = json_encode($_POST);		 
?>
<link rel="stylesheet" href="colorbox.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="jquery.colorbox.js"></script>
		<script src="jquery.colorbox-min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
        jQuery.colorbox({href:'CheckAddress.php?Mode=<?php echo $Array;?>&osCsid=<?php echo $_GET['osCsid'];?>', iframe:true, open:true, width:700, height:600})
      });
</script>

<?php
die;
?>
