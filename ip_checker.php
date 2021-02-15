<?php

error_reporting(0);
define("AMDHOST","localhost");
    define("AMDUSER", "esneezeg_andy149");
    define("AMDPASSWORD", "Qwdf#958");
    define("AMD_DB", "esneezeg_new_sneezeguard");
 $con=mysql_connect(AMDHOST, AMDUSER, AMDPASSWORD);
    
    if(!$con){
        die("Mysql Connection Error");
    }
      
    mysql_select_db(AMD_DB, $con);
  mysql_query("delete from ip_block where ib_date<=DATE_SUB(NOW(),INTERVAL 24 HOUR)");
  
 $rr_result =  mysql_query("select count(*) as ip_count, ic_ip from ip_check where ic_date>= DATE_SUB(NOW(),INTERVAL 15 MINUTE) group by ic_ip");
 while($rr_row =  mysql_fetch_array($rr_result)){
	 echo $rr_row['ip_count'];
	 //old
	 //if($rr_row['ip_count']>5){
	//new	 
	 if($rr_row['ip_count']>7){
		 //uncomment following line if need ip blocker 
		 //mysql_query("insert into ip_block set ib_ip='{$rr_row['ic_ip']}', ib_date=now()");
		 
		 //remove following code when need to activate IP blocker
	 //mysql_query("insert into ip_block set ib_ip='{$rr_row['ic_ip']}', ib_date=now(), reason_of_block='Multiple Hit by same IP'");

		 
	 }
	 
 }
echo "done";






?>
