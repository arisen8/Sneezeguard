<?php
require('configure.php');
$servername = DB_SERVER;
$username = DB_SERVER_USERNAME;
$password = DB_SERVER_PASSWORD;
$dbname = DB_DATABASE;
$connt = mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());
if(isset($_POST['class'])){
    $sel = mysqli_query($connt,"select * from insdeadm where divid='".$_POST['class']."' ");
    $html='';
    while($result = mysqli_fetch_assoc($sel))
    {
        $html.='<img alt="sneeze guard" title="sneeze guard for office" src="sneezegaurd/upload2/'.$result["image"].'" id="insideadm-img" />';
    }
    echo $html;
}else{
    print_r($_POST);
    die;
    $mobile_html='';
    $query_get_insideadm="SELECT * FROM `insdeadm`";
    $exe_get_insideadm=mysqli_query($connt,$query_get_insideadm);
    while($get_insideadm=mysqli_fetch_array($exe_get_insideadm))
    {
    $mobile_html.='<img src="sneezegaurd/upload2/'.$imagess.'" alt="sneeze guards" title="PORTABLE SNEEZEGUARD"></div>';
    }	
    echo $mobile_html;
}
?>
