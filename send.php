<link rel="stylesheet" type="text/css" href="stylesheet.css">
<body>
	<center><img src="images/logo.jpg" ></center>
	<h3>Mail send to:
		<span style="color:red">
			<?php
				require("includes/configure.php");
				echo $_GET["val"];
				$ip=$_GET["ip"];
				$mail=$_GET["val"];
				$sub=$_GET["sub"];
				$msg=$_GET["msg"];
				$type=$_GET["type"];
				if($type=="quote"){
					$type="Save Quote";
				}else{
					$type="Save Layout";
				}
				$img=$_GET["img"];
				$servername = DB_SERVER;
				$username = DB_SERVER_USERNAME;
				$password = DB_SERVER_PASSWORD;
				$dbname = DB_DATABASE;
				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);

				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}else{
//		    		echo "Connect";
				}
				$stmt = $conn->prepare("INSERT INTO mail_table (mail_id,ip,date_time,subject,content,type,image) VALUES (?,?,?,?,?,?,?)");
				$stmt->bind_param("sssssss",$im,$mo,$dt,$su,$ms,$tp,$imi);
				$im=$mail;
				$mo=$ip;
				$dt=date("m-d-Y H:i:s");
				$su=$sub;
				$ms=$msg;
				$tp=$type;
				$imi=$img;
				$t=$stmt->execute();
				//echo $t;
				if($t==0){
					//echo "Mail not send";
				}
			?>
		</span> 
	</h3>
	<h3>
		Thank You!!
	</h3>
</body>
