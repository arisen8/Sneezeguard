<?php
	ini_set('session.cookie_httponly',1);
ini_set('session.cookie_secure',1);
  
  require('includes/application_top.php');
  
 // require_once("Mobile_Detect.php");
      //  $detect = new Mobile_Detect();
// require(DIR_WS_INCLUDES . 'template_top.php');
//echo'<pre>';
//print_r($_POST);


$banners_side=$_POST['banners_side'];
$widths=stripslashes($_POST['c_glass_face_val']);


$products_idarry=$_POST['products_id'];

//echo'<b style="color:red">widths==';  print_r($widths);echo'</b>';

require(DIR_WS_INCLUDES . 'header_new_design.php');

// include('includes/configure.php');

		$servername = DB_SERVER;
		$username = DB_SERVER_USERNAME;
		$password = DB_SERVER_PASSWORD;
		$dbname = DB_DATABASE;
		$connt = mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());




?>





	<link href="ext-banner-design/css/normalize.css" rel="stylesheet">
	
    <!-- Bootstrap core CSS -->
  

    
		<script src="ext-banner-design/js/jquery-1.10.2.js">	</script>
		<script src="ext-banner-design/js/bootstrap.js">		</script>
				
		<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

	<script src="jquery.ui.rotatable.js"></script>
	<link rel="stylesheet" href="jquery.ui.rotatable.css">
		
	

</td>

</tr>

<style>
.banner-design-container{margin-top: 95px;}
#double_side_type{background-color: #fff;}
#banner_sided{background-color: #fff;}
.design_api_container{width: 100% !important;}
.left-icons a {color: black;text-decoration: none;}
a:hover{text-decoration: none;}
	</style>

</tbody>
</table>


<div class="banner-design-container">
<table width="100%" align="center">
		<tr>
		
		<td>
	<div id="maindiv">
		
		<?php
			include 'tdesignAPI/new_applit.php';
		?>
	</div>
</td>

</tr>

</table>
</div>



<style>


#selected-item{display:none;}
</style>


<?php
require(DIR_WS_INCLUDES . 'footer_new_design.php');
?>