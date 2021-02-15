<?php
ob_start();

error_reporting(0);
// ini_set('display_errors', 1);



  require('includes/application_top.php');
  
  
  if (!tep_session_is_registered('customer_id')) {
    $navigation->set_snapshot();
    tep_redirect(tep_href_link(FILENAME_LOGIN, '', 'SSL'));
  }

  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_ADVANCED_SEARCH);

  $breadcrumb->add(NAVBAR_TITLE_1, tep_href_link(FILENAME_ADVANCED_SEARCH));

  require(DIR_WS_INCLUDES . 'header_new_design.php');
// insert your mysql connection code here

?>


 <?php
 
 
 /*Replace Titles start ob_start(); is on top*/
 //ob_start();
    $buffer=ob_get_contents();
    ob_end_clean();
 
 
 $keyword = 'Sneeze Guard, Sneeze Guard Glass, Sneeze Guard Buffet, Sneeze Guard Frames, Vertical Sneeze Guard';
  //add anew desc and author
$buffer = str_replace('name="keywords" content="Sneeze Guard, sneeze guard glass, Portable Food Guards, Sneezeguards, Restaurant Supply Equipment"', 'name="keywords" content="'.$keyword.'"', $buffer);

 $titlessss = 'Sneeze Guard Portable | Buffet Guards - ADM Sneezeguards';
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $titlessss . '$3', $buffer);

    echo $buffer;
    
    
    
    
    
    

 ?>

<style>
.save-quote-img{margin-top:100px;text-align:center;}
#save-quote-main-img{width:80%; height:auto;}
@media screen and (max-width:992px) {
#save-quote-main-img{width:95%; height:auto;}	
}
@media screen and (max-width: 768px)
{
.save-quote-img h3 {
    font-size: 1.5rem;
}
#add{width:35%;}
}
</style>

<div class="save-quote-img container" onmouseover="openCity(event, 'Hide');hide_cart_data()">

<!--
<script>
$( document ).ready(function() {
 window.location.href = "https://sneezeguard.com";
});
</script>
<body onload=window.location='https://sneezeguard.com'>
-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<?php

        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 30;
        $offset = ($pageno-1) * $no_of_records_per_page;


	$servername = DB_SERVER;
	$username = DB_SERVER_USERNAME;
	$password = DB_SERVER_PASSWORD;
	$dbname = DB_DATABASE;



        //$conn=mysqli_connect("localhost","my_user","my_password","my_db");
		$conn=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());

		
        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }

        $total_pages_sql = "SELECT COUNT(*) FROM save_quote_img";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result);
        $total_pages = 700;

            //here goes the data

		$sql22 = "SELECT * FROM save_quote_img WHERE  `customer_id`='$customer_id' ORDER BY id DESC LIMIT $offset, $no_of_records_per_page";
        $res_data22 = mysqli_query($conn,$sql22);
        while($row22 = mysqli_fetch_array($res_data22)){
			
			$quote_id=$row22['id'];
			echo'
			<form action="" method="post" >
			<h3><strong>'.$row22['category'].'</strong></h3><br />';
			echo'<center><img src="includes/img_quote/'.$row22['img_name'].'" id="save-quote-main-img"   title="'.$row22["category"].'" alt="Sneeze Guard '.$row22["category"].'"></center>';
			echo'
			<input type="hidden" id="quote_id" name="quote_id" value="'.$quote_id.'">
			
			<br /><br />
			<img onclick="return add_to_cart('.$quote_id.');" id="add" button="" title=" Add to Cart " alt="Add to Cart" src="includes/languages/english/images/buttons/button_in_cart.gif" style="float: none;background: none !important;box-shadow: none;border: medium none;">
			
			<br />
			</form>
			';
			//echo'<img src="includes/languages/english/images/buttons/button_in_cart.gif">';
			echo'<br /><h3>Sneeze guard</h3>
			<br />
			';
			
			
			echo'<hr />
			
			
			';
			//echo'order'.$l.''.$orders_id.'<br />';
			
			$srno++;
		}
	

        mysqli_close($conn);
    ?>
    <ul class="pagination" style="white-space:nowrap; text-align: center;">
        <li style="display: inline;"><a href="sneezeguard-layout-design.php?pageno=1">&bull; First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>" style="display: inline;margin-left: 10px;">
            <a href="view_save_quote_img.php<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">&bull; Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>" style="display: inline;margin-left: 10px;">
            <a href="view_save_quote_img.php<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">&bull; Next</a>
        </li>
<!--         <li style="display: inline;margin-left: 10px;"><a href="sneezeguard-layout-design.php?pageno=<?php echo $total_pages; ?>">&bull; Last</a></li> -->
    </ul>
	
	</div>
<script>





<?php





?>
function add_to_cart(quoteiid){
	
	var jhdj=quoteiid;
	
	var quote_idd=quoteiid;
	
	//alert(jhdj);
	
	 $.ajax({
				type:"POST",
				data:{quote_id:quote_idd},
				success: function(){
//alert(data);
				//window.location.href = 'shopping_cart1.php';
				window.location.href = '<?php  echo tep_href_link("shopping_cart1.php") ?>';
				}
			});
	
}


</script>











<?php

?>


<?php
  require(DIR_WS_INCLUDES . 'footer_new_design.php');
?>