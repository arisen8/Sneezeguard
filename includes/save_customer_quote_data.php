<?php

$json=json_decode($_POST['data']);//All product's data...
$json_product_id=json_decode($_POST['data_product_id']);//All product id's...


// $duplicates_count = array();
// $product_id = array();
// $product_qty = array();
// $product_wt = array();
// $product_val = array();
// $qt = array();
// echo "<pre>";
print_r($json);
echo "<br>";
print_r($json_product_id);
echo "<br>";

// filter product json data...
for ($i=1; $i <15; $i++) { 
	$a = 'a'.$i;
	$b =  'c_glass_id'.$i;
	if (!$json->{$a}->{$b}) {
		# code...
	}else{
		$objToarr[] = (array)$json->{$a};
	}
}

// delete first index in $objToarr...
array_shift($objToarr);

for ($iii=0; $iii <count($objToarr); $iii++) { 
	$b =  'c_glass_id'.$iii;
		$product_id[] = reset($objToarr[$iii]);
		$product_val[] = $json->{'a15'}->{'product_type'}.'-'.$objToarr[$iii]['val'];
		$product_wt[] = $objToarr[$iii]['mult'];
}

// print_r($product_id);


// For find Quantity of Duplicate values...
$duplicates_count_product_val = array_filter(
					array_count_values($product_val),
	                    function($item){
	                    	return $item>=1;
	                    }
                );

// For product quantity...
foreach($duplicates_count_product_val as $key => $item){
		$product_qty[] = $item;
}

//find unique in product values not duplicate...
$product_val = array_unique($product_val);


//find unique in product id not duplicate...
$product_id = array_unique($product_id);


foreach($product_val as $key => $item){
		$product_wt3[] = $product_wt[$key];
}


//For find Duplicate values...
$duplicates = array_keys(
				array_filter(
					array_count_values($json_product_id),
	                    function($item){
	                    	return $item>1;
	                    }
                )
            );

for($abc=0; $abc<count($duplicates); $abc++) {
	if (array_search($duplicates[$abc], $json_product_id)) {
		unset($json_product_id[$abc]);
	}
}

// print_r($duplicates);
// echo "<br>";
// print_r($json_product_id);
// echo "<br>";

//For find Quantity of Duplicate values...
$duplicates_count = array_filter(
					array_count_values($json_product_id),
	                    function($item){
	                    	return $item>1;
	                    }
                );
// print_r($duplicates_count);
// echo "<br>";
foreach($duplicates_count as $key => $item){
		$product_id2[] = $key;
		$product_qty2[] = $item;
		$product_val2[] = $json->{'a15'}->{'product_type'}.'-'.$json->{'a1'}->{'c_glass_post_val'};
		$product_wt2[] = $json->{'a1'}->{'mult'};
}


// //for find non duplicate ID's...
// for($ii=0; $ii<count($duplicates); $ii++){
// 	for($jj=0; $jj<count($json_product_id); $jj++){
//     	if($json_product_id[$jj]!=$duplicates[$ii]){

// 		}else{
//             $qt[] = $jj;	

//         }
//     }	
// }
// print_r($qt);
// foreach($qt as $key => $item){
// 	unset($json_product_id[$item]);
// }




// print_r($product_id);
// echo "<br>";
// print_r($product_val);
// echo "<br>";
// print_r($product_qty);
// echo "<br>";
// print_r($product_wt3);
// echo "<br>";



// print_r($product_id2);
// echo "<br>";
// print_r($product_val2);
// echo "<br>";
// print_r($product_qty2);
// echo "<br>";
// print_r($product_wt2);


$products_id = array_merge($product_id,$product_id2);
$products_value = array_merge($product_val,$product_val2);
$products_quantity = array_merge($product_qty,$product_qty2);
$products_wt = array_merge($product_wt3,$product_wt2);


print_r($products_id);
echo "<br>";
print_r($products_value);
echo "<br>";
print_r($products_quantity);
echo "<br>";
print_r($products_wt);
echo "<br>";



?>