<?php
include_once("common1.php");

mysql_query("UPDATE orders SET cc_number='' WHERE  date_purchased < DATE_SUB(CURDATE(), INTERVAL 14 DAY)");
?>