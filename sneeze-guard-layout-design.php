<?php
ini_set('session.cookie_httponly',1);
ini_set('session.cookie_secure',1);
  
$page_title='Sneeze Guard Layout Design Portable - ADM Sneezeguards'; 
$page_description='Maintain social distance and physical separation in Hospital, Grocery, Office, Counter while protecting from virus and germs with our sneeze guard layout design model';
$page_keyword='Sneeze Guard Layout Design, Sneeze Guard Glass, Sneeze Guard Buffet, Sneeze Guard Frames, Vertical Sneeze Guard';


require('includes/application_top.php');

require(DIR_WS_INCLUDES . 'header_new_design.php');



?>

<div class="layout" onmouseover="openCity(event, 'Hide');hide_cart_data()"><!-- deepak 4-1-2021 -->
<?php

if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 30;
$offset = ($pageno-1) * $no_of_records_per_page;

//$conn=mysqli_connect("localhost","my_user","my_password","my_db");
//$conn=mysqli_connect("localhost","root","","esneezeg_new_sneezeguard") or die(mysqli_connect_error());

$servername = DB_SERVER;
$username = DB_SERVER_USERNAME;
$password = DB_SERVER_PASSWORD;
$dbname = DB_DATABASE;
$conn=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());


// Check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die();
}

$total_pages_sql = "SELECT COUNT(*) FROM orders";
$result = mysqli_query($conn,$total_pages_sql);
$total_rows = mysqli_fetch_array($result);
$total_pages = 700;

$sql = "SELECT * FROM orders WHERE  `orders_id` > 905300 ORDER BY orders_id DESC LIMIT $offset, $no_of_records_per_page";
$res_data = mysqli_query($conn,$sql);
$srno=1;
while($row = mysqli_fetch_array($res_data)){
    //here goes the data
$orders_id=$row[0];

$sql22 = "SELECT * FROM `screen_table` where order_no ='".$orders_id."'";
$res_data22 = mysqli_query($conn,$sql22);
while($row22 = mysqli_fetch_array($res_data22)){
    echo'<h3 align="center" class="guardheading">'.$row22['category'].'</h3>';
    echo'<center><img src="https://www.sneezeguard.com/includes/img/'.$row22['osc_id'].'_'.$row22["img_id"].'.jpg" title="'.$row22['category'].'" alt="Sneeze Guard '.$row22['category'].'" ></center>';
    echo'<h3 align="center" class="guardheading">Sneeze guard</h3>';
    echo'<hr />
    
    
    ';
    //echo'order'.$l.''.$orders_id.'<br />';
    
    $srno++;
}



    
     // echo'order'.$l.''.$hdgsgfs.'<br />';
}
mysqli_close($conn);
?>
<ul class="pagination" style="white-space:nowrap; text-align: center;">
<li style="display: inline;"><a href="sneezeguard-layout-design.php?pageno=1">&bull; First</a></li>
<li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>" style="display: inline;margin-left: 10px;">
    <a href="sneeze-guard-layout-design.php<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">&bull; Prev</a>
</li>
<li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>" style="display: inline;margin-left: 10px;">
    <a href="sneeze-guard-layout-design.php<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">&bull; Next</a>
</li>
<!--         <li style="display: inline;margin-left: 10px;"><a href="sneezeguard-layout-design.php?pageno=<?php echo $total_pages; ?>">&bull; Last</a></li> -->
</ul>

<?php




?>
<style>
    

    
</style>
<?php
require(DIR_WS_INCLUDES . 'footer_new_design.php');
?>