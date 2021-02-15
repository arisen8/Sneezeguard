<?php
$HTTP_POST_VARS = $_POST;
//echo "<pre>";print_r($HTTP_POST_VARS);
    // requires php5
    require("configure.php");
	
	$con=mysqli_connect(DB_SERVER,DB_SERVER_USERNAME,DB_SERVER_PASSWORD,DB_DATABASE) or die(mysqli_connect_error());
	
	$quote_id=$_POST['quote_id'];
	
	$query_quote_data="SELECT * FROM customers_quote_data WHERE quote_id='$quote_id'";
	$exe_qupte=mysqli_query($con,$query_quote_data);
	while($get_quote_data=mysqli_fetch_array($exe_qupte))
	{
	$customers_id=$get_quote_data['customers_id'];
	$productid=$get_quote_data['products_id'];
	$qtyss=$get_quote_data['customers_basket_quantity'];
	$product_val=$get_quote_data['product_val'];
	$product_custom=$get_quote_data['product_custom'];
	$product_wt=$get_quote_data['product_wt'];
/*
$query_checkss="SELECT * customers_basket WHERE customers_id='$customers_id' AND products_id='$productid' AND product_val='$product_val'";
$exe_checkss=mysqli_query($con,$query_checkss);
$get_checkss=mysqli_fetch_array($exe_checkss);
$iddddd=$get_checkss[0];
 if ($iddddd) {
	
	
	$query_old_qty="SELECT * FROM customers_basket WHERE customers_id='$customers_id' AND products_id='$productid' AND product_val='$product_val'";
	$exe_oldss=mysqli_query($con,$query_old_qty);
	$get_qty=mysqli_fetch_array($exe_oldss);
	$neww_qty=$get_qty['customers_basket_quantity']+$qtyss;
	$basket_id=$get_qty['customers_basket_id'];
	//update qty 
	$update_qty="UPDATE `customers_basket` SET `customers_basket_quantity`='$neww_qty' WHERE `customers_basket_id` ='$basket_id'";
	$exe_query=mysqli_query($con,$update_qty);
	
 }
 else{*/
	//insert 
	$insert_data="INSERT INTO `customers_basket`(`customers_id`, `products_id`, `customers_basket_quantity`, `product_val`, `product_custom`, `product_wt`, `customers_basket_date_added`) VALUES ('$customers_id','$productid','$qtyss','$product_val','$product_custom','$product_wt','" . date('Ymd') . "')";
	 $exe_query=mysqli_query($con,$insert_data);
 //}
	
	}
	
	
	
	
	
	?>