<?php
ob_start();

// error_reporting(E_ALL);
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.save-layout-imgs{margin-top:120px;text-align:center;}
#img_layout{width:60%;}
@media screen and (max-width: 768px)
{
#img_layout{width:96%;}	
}
.save-layout-imgs h3{font-size:22px;}
.save-layout-imgs a{font-size:15px; color:black;}
</style>



<div class="container save-layout-imgs" onmouseover="openCity(event, 'Hide');hide_cart_data()"><!-- deeepak 4-1-2021 -->
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

        $total_pages_sql = "SELECT COUNT(*) FROM save_layout_img";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result);
        $total_pages = 700;

            //here goes the data

		$sql22 = "SELECT * FROM save_layout_img WHERE  `customer_id`='$customer_id' ORDER BY id DESC LIMIT $offset, $no_of_records_per_page";
        $res_data22 = mysqli_query($conn,$sql22);
        while($row22 = mysqli_fetch_array($res_data22)){
			
			echo'<h3>'.$row22['category'].'</h3><br />';
			echo'<center><img src="includes/img_layout/'.$row22['img_name'].'" id="img_layout" alt="Sneeze Guard '.$row22['category'].'" title="'.$row22['category'].'"></center>';
			
			echo'<br /><h3>Sneeze guard</h3><br />';
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
            <a href="view_save_layput_img.php<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">&bull; Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>" style="display: inline;margin-left: 10px;">
            <a href="view_save_layput_img.php<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">&bull; Next</a>
        </li>

    </ul>

<?php



?>

</div>
<?php
  require(DIR_WS_INCLUDES . 'footer_new_design.php');
?>