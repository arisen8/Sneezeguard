<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

  class shoppingCart {
    var $contents, $total, $weight, $cartID, $content_type;

    function shoppingCart() {
      $this->reset();
    }

    function restore_contents() {
      global $customer_id;

      if (!tep_session_is_registered('customer_id')) return false;

// insert current cart contents in database
      if (is_array($this->contents)) {
        reset($this->contents);
        while (list($products_id, ) = each($this->contents)) {
			$sessidid=tep_session_id();	
			// echo$osCsidss;echo'//<b style="color:red;">';
			// echo$sjdhjd="select * from customers_basket_temp where customers_id='".$sessidid."' and products_id='".$products_id."'";
			// echo'</b><br /><br />';
			
			$query_gettempdata=tep_db_query("select * from customers_basket_temp where customers_id='".$sessidid."' and products_id='".$products_id."'");
			$tempcartdata = tep_db_fetch_array($query_gettempdata);
			
			$temp_proidstri=$tempcartdata['products_id'];
			$temp_vals=$tempcartdata['product_val'];
			$temp_product_custom=$tempcartdata['product_custom'];
			$temp_product_frosted=$tempcartdata['product_frosted'];
			$temp_product_banner_color=$tempcartdata['product_banner_color'];
			$temp_product_banner_height=$tempcartdata['product_banner_height'];
			
			
			$temp_product_wt=$tempcartdata['product_wt'];
			$temp_pid=$tempcartdata['pid'];
			$temp_qty=$tempcartdata['customers_basket_quantity'];
			
          $qty = $this->contents[$products_id]['qty'];
		  
		  
		  // echo'<b style="color:red;">';
			// echo$sjdhjd="select products_id, customers_basket_quantity from from " . TABLE_CUSTOMERS_BASKET . " where customers_id = '" . (int)$customer_id . "' and products_id = '" . tep_db_input($products_id) . "' and product_val='".$temp_vals."'";
			// echo'</b><br /><br />';
          $product_query = tep_db_query("select products_id, customers_basket_quantity from " . TABLE_CUSTOMERS_BASKET . " where customers_id = '" . (int)$customer_id . "' and products_id = '" . tep_db_input($products_id) . "' and product_val='".$temp_vals."' and product_banner_color='".$temp_product_banner_color."' and product_banner_height='".$temp_product_banner_height."'");
		  $getdbbexist = tep_db_fetch_array($product_query);	
		  $dbqtyy=$getdbbexist['customers_basket_quantity'];
          if (!tep_db_num_rows($product_query)) {
			  
			 // echo'<b style="color:red;">qtyinsert=='; print_r($qty);  echo'</b><br /><br />';
			  
            //tep_db_query("insert into " . TABLE_CUSTOMERS_BASKET . " (customers_id, products_id, customers_basket_quantity, customers_basket_date_added) values ('" . (int)$customer_id . "', '" . tep_db_input($products_id) . "', '" . tep_db_input($qty) . "', '" . date('Ymd') . "')");
			// echo'<b style="color:red;">';
			// echo$sjdhjd="insert into " . TABLE_CUSTOMERS_BASKET . " (customers_id, products_id, customers_basket_quantity, product_val, product_custom, product_frosted, product_wt, pid, customers_basket_date_added) values ('" . (int)$customer_id . "', '" . tep_db_input($products_id) . "', '" . (int)$qty . "', '".$temp_vals."', '".$temp_product_custom."', '".$temp_product_frosted."', '".$temp_product_wt."', '".$temp_pid."', '" . date('Ymd') . "')";
			// echo'</b><br /><br />';
			tep_db_query("insert into " . TABLE_CUSTOMERS_BASKET . " (customers_id, products_id, customers_basket_quantity, product_val, product_custom, product_frosted, product_banner_color, product_banner_height, product_wt, pid, customers_basket_date_added) values ('" . (int)$customer_id . "', '" . tep_db_input($products_id) . "', '" . (int)$qty . "', '".$temp_vals."', '".$temp_product_custom."', '".$temp_product_frosted."', '".$temp_product_banner_color."', '".$temp_product_banner_height."', '".$temp_product_wt."', '".$temp_pid."', '" . date('Ymd') . "')");
			
			
			
            if (isset($this->contents[$products_id]['attributes'])) {
              reset($this->contents[$products_id]['attributes']);
              while (list($option, $value) = each($this->contents[$products_id]['attributes'])) {
				  
				  
                tep_db_query("insert into " . TABLE_CUSTOMERS_BASKET_ATTRIBUTES . " (customers_id, products_id, products_options_id, products_options_value_id) values ('" . (int)$customer_id . "', '" . tep_db_input($products_id) . "', '" . (int)$option . "', '" . (int)$value . "')");
				
				
              }
            }
          } else {
			  
			  $newqtyyup=$dbqtyy+$qty;
			  //echo'<b style="color:red;">dbqtyy=='.$dbqtyy.' && qty=='.$qty.'';  echo'</b><br /><br />';
			  
          //  tep_db_query("update " . TABLE_CUSTOMERS_BASKET . " set customers_basket_quantity = '" . tep_db_input($qty) . "' where customers_id = '" . (int)$customer_id . "' and products_id = '" . tep_db_input($products_id) . "'");
		  	// echo'<b style="color:red;">';
			// echo$sjdhjd="update " . TABLE_CUSTOMERS_BASKET . " set customers_basket_quantity = '" . tep_db_input($qty) . "' where customers_id = '" . (int)$customer_id . "' and products_id = '" . tep_db_input($products_id) . "' and product_val='".$temp_vals."'";
			// echo'</b><br /><br />';
			tep_db_query("update " . TABLE_CUSTOMERS_BASKET . " set customers_basket_quantity = '" . tep_db_input($newqtyyup) . "' where customers_id = '" . (int)$customer_id . "' and products_id = '" . tep_db_input($products_id) . "' and product_val='".$temp_vals."'");
			
          }
		  
		  
		  
		  
        }
      }

// reset per-session cart contents, but not the database contents
      $this->reset(false);

      $products_query = tep_db_query("select products_id, customers_basket_quantity from " . TABLE_CUSTOMERS_BASKET . " where customers_id = '" . (int)$customer_id . "'");
	  $l=0;
      while ($products = tep_db_fetch_array($products_query)) {
        $this->contents[$products['products_id']] = array('qty' => $products['customers_basket_quantity']);
// attributes
        $attributes_query = tep_db_query("select products_options_id, products_options_value_id from " . TABLE_CUSTOMERS_BASKET_ATTRIBUTES . " where customers_id = '" . (int)$customer_id . "' and products_id = '" . tep_db_input($products['products_id']) . "'");
        while ($attributes = tep_db_fetch_array($attributes_query)) {
          $this->contents[$products['products_id']]['attributes'][$attributes['products_options_id']] = $attributes['products_options_value_id'];
        }
		$l++;
      }

      $this->cleanup();

// assign a temporary unique ID to the order contents to prevent hack attempts during the checkout procedure
      $this->cartID = $this->generate_cart_id();
    }

    function reset($reset_database = false) {
      global $customer_id;

      $this->contents = array();
      $this->total = 0;
      $this->weight = 0;
      $this->content_type = false;

      if (tep_session_is_registered('customer_id') && ($reset_database == true)) {
        tep_db_query("delete from " . TABLE_CUSTOMERS_BASKET . " where customers_id = '" . (int)$customer_id . "'");
        tep_db_query("delete from " . TABLE_CUSTOMERS_BASKET_ATTRIBUTES . " where customers_id = '" . (int)$customer_id . "'");
      }

      unset($this->cartID);
      if (tep_session_is_registered('cartID')) tep_session_unregister('cartID');
    }

    function add_cart($products_id, $qty = '1', $attributes = '', $cusdesAddval, $cusdesAddqty, $cusdesAddcustom, $cusdesAddfrostd, $cusdesAddbanncolor, $cusdesAddbannheight, $cusdesAddwt, $attvalid, $checkupdate, $notify = true) {
      global $new_products_id_in_cart, $customer_id;

	$updateproid=$products_id;

      $products_id_string = tep_get_uprid($products_id, $attributes);
      $products_id = tep_get_prid($products_id_string);
	  $sissid=$attvalid;
	  if(tep_session_is_registered('customer_id'))
	  {
		$querymaxid=tep_db_query("select max(customers_basket_id) as id from `customers_basket`"); 
		$getmaxid=tep_db_fetch_array($querymaxid);			
		$maxiddd=$getmaxid['id'];	
	  }	
	  else{
		//$querymaxid=tep_db_query("select max(customers_basket_id) as id from `customers_basket_temp`");  
		$maxiddd=rand(1, 1000000);
	  }
	//$getmaxid=tep_db_fetch_array($querymaxid);			
	//$maxiddd=$getmaxid['id'];
	//echo'maxiddd=='.$maxiddd.'';
	
	if($maxiddd=='')
	{
	$maxiddd=rand(1, 1000000);
	}
	else{
	//$maxiddd=$getmaxid['id'];
	$maxiddd=$maxiddd;
	}
	
	// echo'<b style="color:red;">maxx';
			// print_r($maxiddd);
			// echo'</b><br />';
	
		if($attvalid=='')
		{
			$attvalidss=$maxiddd+1;
		}
		else{
			$attvalidss=$maxiddd+$sissid;
		}
	
	$sessionpid=$products_id_string;
	
	
	
	//$fhbhfkgd="select * from " . TABLE_CUSTOMERS_BASKET . " where customers_id='".(int)$customer_id."' and pid='".tep_db_input($sessionpid)."' and product_val='".$cusdesAddval."'";
	
	$cusdesAddval=stripslashes($cusdesAddval);
	
	
			//$updateproid
			if(isset($checkupdate))
			{
			if(tep_session_is_registered('customer_id'))
			{
			$checkdatacartquery=tep_db_query("select * from " . TABLE_CUSTOMERS_BASKET . " where customers_id='".(int)$customer_id."' and products_id='".tep_db_input($updateproid)."' and product_val='".$cusdesAddval."'");	
			}
			else{
			$customer_id=tep_session_id();	
			$checkdatacartquery=tep_db_query("select * from customers_basket_temp where customers_id='".$customer_id."' and products_id='".tep_db_input($updateproid)."' and product_val='".$cusdesAddval."'");	
			}	
				
			}
			else{
			if(tep_session_is_registered('customer_id'))
			{
				
			
				
			$checkdatacartquery=tep_db_query("select * from " . TABLE_CUSTOMERS_BASKET . " where customers_id='".(int)$customer_id."' and pid='".tep_db_input($sessionpid)."' and product_val='".$cusdesAddval."'");	
			}
			else{
			$customer_id=tep_session_id();	
			$checkdatacartquery=tep_db_query("select * from customers_basket_temp where customers_id='".$customer_id."' and pid='".tep_db_input($sessionpid)."' and product_val='".$cusdesAddval."'");	
			}	
				
			}
			
			

	
	
	
	$checkresultt=tep_db_fetch_array($checkdatacartquery);
	
	$dbpidd=$checkresultt['products_id'];
	$dbpiddonly=$checkresultt['pid'];
	$piddbddarr=explode("{",$dbpidd);
	$dbvall=$checkresultt['product_val'];
	
//echo'<b style="color:red;">sessionpid--'.$sessionpid.'//dbpiddonly--'.$dbpiddonly.'//dbpidd--'.$dbpidd.'//dbvall--'.$dbvall.'//cusdesAddval--'.$cusdesAddval.''; echo'</b><br />';
	

//echo'<b style="color:red;">pid-----'; print_r($products_id_string); echo'</b><br />';


	if($sessionpid==$dbpiddonly && $dbvall==$cusdesAddval)
	{
	
	$products_id_string=$dbpidd;
	
	//$updateproid
	}
	else{
		
		if(strpos($products_id_string,"{")!==false){
		$products_id_string =''.$products_id_string.'';	
		}
		else{
		if(isset($checkupdate))
			{
			$products_id_string =$updateproid;		
			}
			else{
			$products_id_string =''.$products_id_string.'{'.$attvalidss.'}';		
			}
		
		}
		
	}
	
		// echo'<b style="color:red;">';
			// print_r($products_id_string);
			// echo'</b><br />';
	

	//$products_id =''.$products_id.'{'.$attvalid.'}';

     /* if (defined('MAX_QTY_IN_CART') && (MAX_QTY_IN_CART > 0) && ((int)$qty > MAX_QTY_IN_CART)) {
        $qty = MAX_QTY_IN_CART;
      }*/
//echo'<b style="color:red;"><pre>'; print_r($cusdesAddval); echo'</b>';
      $attributes_pass_check = true;

      // if (is_array($attributes) && !empty($attributes)) {
        // reset($attributes);
        // while (list($option, $value) = each($attributes)) {
          // if (!is_numeric($option) || !is_numeric($value)) {
            // $attributes_pass_check = false;
            // break;
          // } else {
            // $check_query = tep_db_query("select products_attributes_id from " . TABLE_PRODUCTS_ATTRIBUTES . " where products_id = '" . (int)$products_id . "' and options_id = '" . (int)$option . "' and options_values_id = '" . (int)$value . "' limit 1");
            // if (tep_db_num_rows($check_query) < 1) {
              // $attributes_pass_check = false;
              // break;
            // }
          // }
        // }
      // } elseif (tep_has_product_attributes($products_id)) {
        // $attributes_pass_check = false;
      // }

      if (is_numeric($products_id) && is_numeric($qty) && ($attributes_pass_check == true)) {
        $check_product_query = tep_db_query("select products_status from " . TABLE_PRODUCTS . " where products_id = '" . (int)$products_id . "'");
        $check_product = tep_db_fetch_array($check_product_query);

        if (($check_product !== false) && ($check_product['products_status'] == '1')) {
          if ($notify == true) {
            $new_products_id_in_cart = $products_id;
            tep_session_register('new_products_id_in_cart');
          }

//echo'<b style="color:red;">'.$products_id_string.'---'; print_r($cusdesAddqty); echo'</b><br />';


			// if ($this->in_cart($products_id_string)) {
            // $this->update_quantity($products_id_string, $qty, $attributes);
			// } else {
				
				
			$this->contents[$products_id_string] = array('qty' => (int)$cusdesAddqty);
			
			
			
			
			//$this->contents[$products_id_string] = array('val' => (int)$cusdesAddval);
			
			// }
			//$this->contents[$products_id_string] = array('qty' => (int)$cusdesAddqty);
			
			// if (array_key_exists($products_id_string, $this->contents)){ 
				// $new_qty=$this->contents[$products_id_string]['qty']+$cusdesAddqty;
				// $this->contents[$products_id_string] = array('qty' => (int)$new_qty);
			// } 
			// else{ 
				// $this->contents[$products_id_string] = array('qty' => (int)$cusdesAddqty);
			// }
			
			// echo'<b style="color:red;">';
			// echo$gdhgh="select * from " . TABLE_CUSTOMERS_BASKET . " where customers_id='".(int)$customer_id."' and products_id='".tep_db_input($products_id_string)."' and product_val='".$cusdesAddval."'";
// echo'</b><br />';
			
			if(tep_session_is_registered('customer_id'))
			{
				
					 // echo'<b style="color:red;">';
				// echo$checjquery="select * from " . TABLE_CUSTOMERS_BASKET . " where customers_id='".(int)$customer_id."' and products_id='".tep_db_input($products_id_string)."' and product_val='".$cusdesAddval."'";
 // echo'</b><br />';
				
			$query_cartdata=tep_db_query("select * from " . TABLE_CUSTOMERS_BASKET . " where customers_id='".(int)$customer_id."' and products_id='".tep_db_input($products_id_string)."' and product_val='".$cusdesAddval."'");	
			}
			else{
			$customer_id=tep_session_id();	
			$query_cartdata=tep_db_query("select * from customers_basket_temp where customers_id='".$customer_id."' and products_id='".tep_db_input($products_id_string)."' and product_val='".$cusdesAddval."'");	
			}
			//$cusdesAddbanncolor, $cusdesAddbannheight
			$resultt=tep_db_fetch_array($query_cartdata);
			$iddd=$resultt['customers_basket_id'];
			$qtydb=$resultt['customers_basket_quantity'];
			
			
			//echo'<b style="color:red;">'.$iddd.'';  echo'</b><br />';
			
		if (empty($iddd)) {
		///echo'<b style="color:red;">';
			//echo$gdhgh="insert into customers_basket_temp (customers_id, products_id, customers_basket_quantity, product_val, product_custom, product_frosted, product_banner_color, product_banner_height, product_wt, pid, customers_basket_date_added) values ('" . $customer_id . "', '" . tep_db_input($products_id_string) . "', '" . (int)$cusdesAddqty . "', '".$cusdesAddval."', '".$cusdesAddcustom."', '".$cusdesAddfrostd."', '".$cusdesAddbanncolor."', '".$cusdesAddbannheight."', '".$cusdesAddwt."', '".$sessionpid."', '" . date('Ymd') . "')";
///echo'</b><br />';
		if(tep_session_is_registered('customer_id'))
			{
			if (tep_session_is_registered('customer_id')) tep_db_query("insert into " . TABLE_CUSTOMERS_BASKET . " (customers_id, products_id, customers_basket_quantity, product_val, product_custom, product_frosted, product_banner_color, product_banner_height, product_wt, pid, customers_basket_date_added) values ('" . (int)$customer_id . "', '" . tep_db_input($products_id_string) . "', '" . (int)$cusdesAddqty . "', '".$cusdesAddval."', '".$cusdesAddcustom."', '".$cusdesAddfrostd."', '".$cusdesAddbanncolor."', '".$cusdesAddbannheight."', '".$cusdesAddwt."', '".$sessionpid."', '" . date('Ymd') . "')");	
			}
			else{
			$customer_id=tep_session_id();	
	//echo'<b style="color:red;">';
	//echo$gdhgh="insert into customers_basket_temp (customers_id, products_id, customers_basket_quantity, product_val, product_custom, product_frosted, product_banner_color, product_banner_height, product_wt, pid, customers_basket_date_added) values ('" . $customer_id . "', '" . tep_db_input($products_id_string) . "', '" . (int)$cusdesAddqty . "', '".$cusdesAddval."', '".$cusdesAddcustom."', '".$cusdesAddfrostd."', '".$cusdesAddbanncolor."', '".$cusdesAddbannheight."', '".$cusdesAddwt."', '".$sessionpid."', '" . date('Ymd') . "')";
//echo'</b><br />';

			tep_db_query("insert into customers_basket_temp (customers_id, products_id, customers_basket_quantity, product_val, product_custom, product_frosted, product_banner_color, product_banner_height, product_wt, pid, customers_basket_date_added) values ('" . $customer_id . "', '" . tep_db_input($products_id_string) . "', '" . (int)$cusdesAddqty . "', '".$cusdesAddval."', '".$cusdesAddcustom."', '".$cusdesAddfrostd."', '".$cusdesAddbanncolor."', '".$cusdesAddbannheight."', '".$cusdesAddwt."', '".$sessionpid."', '" . date('Ymd') . "')");	
			}
		
	
	
	 if (is_array($attributes)) {
              reset($attributes);
              while (list($option, $value) = each($attributes)) {
                $this->contents[$products_id_string]['attributes'][$option] = $value;
// insert into database
                if (tep_session_is_registered('customer_id')) tep_db_query("insert into " . TABLE_CUSTOMERS_BASKET_ATTRIBUTES . " (customers_id, products_id, products_options_id, products_options_value_id) values ('" . (int)$customer_id . "', '" . tep_db_input($products_id_string) . "', '" . (int)$option . "', '" . (int)$value . "')");
              }
            }
		}
		else{
			
			if(isset($checkupdate))
			{
			$newqty=$cusdesAddqty;	
			}
			else{
			$newqty=$cusdesAddqty+$qtydb;
			}
			// echo'<b style="color:red;">';
			// echo$gdhgh="update " . TABLE_CUSTOMERS_BASKET . " set customers_basket_quantity='".(int)$newqty."' where customers_id='".(int)$customer_id."' and products_id='".tep_db_input($products_id_string)."' and product_val='".$cusdesAddval."'";
// echo'</b><br />';
 $this->contents[$products_id_string] = array('qty' => (int)$newqty);
 //$this->contents[$products_id_string] = array('val' => (int)$cusdesAddval);
//$this->update_quantity($products_id_string, $newqty, $attributes, $cusdesAddval, $attvalid);
			if(tep_session_is_registered('customer_id'))
			{
			if (tep_session_is_registered('customer_id')) tep_db_query("update " . TABLE_CUSTOMERS_BASKET . " set customers_basket_quantity='".(int)$newqty."' where customers_id='".(int)$customer_id."' and products_id='".tep_db_input($products_id_string)."' and product_val='".$cusdesAddval."' and pid='".$sessionpid."'");	
			}
			else{
			$customer_id=tep_session_id();	
			tep_db_query("update customers_basket_temp set customers_basket_quantity='".(int)$newqty."' where customers_id='".$customer_id."' and products_id='".tep_db_input($products_id_string)."' and product_val='".$cusdesAddval."' and pid='".$sessionpid."'");	
			}
			
			if (is_array($attributes)) {
          reset($attributes);
          while (list($option, $value) = each($attributes)) {
            $this->contents[$products_id_string]['attributes'][$option] = $value;
// update database
            if (tep_session_is_registered('customer_id')) tep_db_query("update " . TABLE_CUSTOMERS_BASKET_ATTRIBUTES . " set products_options_value_id = '" . (int)$value . "' where customers_id = '" . (int)$customer_id . "' and products_id = '" . tep_db_input($products_id_string) . "' and products_options_id = '" . (int)$option . "'");
          }
        }
			
			
			
			
		}


// if (tep_session_is_registered('customer_id'))
// {
	// $getqty=tep_db_query("select count(products_id) from " . TABLE_CUSTOMERS_BASKET . " where customers_id='".(int)$customer_id."' and products_id='".tep_db_input($products_id_string)."'");
	// $resultss=tep_db_fetch_array($getqty);
	// $qtyss=$resultss[0];
	
// $this->contents[$products_id_string] = array('qty' => (int)$qtyss);

// }
// else{
// $this->contents[$products_id_string] = array('qty' => (int)$qty);
	
// }


/*

          // if ($this->in_cart($products_id_string)) {
            // $this->update_quantity($products_id_string, $qty, $attributes);
          // } else {
            $this->contents[$products_id_string] = array('qty' => (int)$qty);
// insert into database

            if (tep_session_is_registered('customer_id')) tep_db_query("insert into " . TABLE_CUSTOMERS_BASKET . " (customers_id, products_id, customers_basket_quantity, product_val, customers_basket_date_added) values ('" . (int)$customer_id . "', '" . tep_db_input($products_id_string) . "', '" . (int)$qty . "', '".$cusdesAddval."', '" . date('Ymd') . "')");

            if (is_array($attributes)) {
              reset($attributes);
              while (list($option, $value) = each($attributes)) {
                $this->contents[$products_id_string]['attributes'][$option] = $value;
// insert into database
                if (tep_session_is_registered('customer_id')) tep_db_query("insert into " . TABLE_CUSTOMERS_BASKET_ATTRIBUTES . " (customers_id, products_id, products_options_id, products_options_value_id) values ('" . (int)$customer_id . "', '" . tep_db_input($products_id_string) . "', '" . (int)$option . "', '" . (int)$value . "')");
              }
            }
         // }
*/
          $this->cleanup();

// assign a temporary unique ID to the order contents to prevent hack attempts during the checkout procedure
          $this->cartID = $this->generate_cart_id();
        }
      }
    }

    function update_quantity($products_id, $quantity, $attributes = '', $cusdesAddval, $attvalidss) {
      global $customer_id;

      $products_id_string = tep_get_uprid($products_id, $attributes);
      $products_id = tep_get_prid($products_id_string);
$products_id_string =''.$products_id_string.'{'.$attvalidss.'}';
//$products_id =''.$products_id.'{'.$attvalid.'}';
     /* if (defined('MAX_QTY_IN_CART') && (MAX_QTY_IN_CART > 0) && ((int)$quantity > MAX_QTY_IN_CART)) {
        $quantity = MAX_QTY_IN_CART;
      }*/

      $attributes_pass_check = true;

      if (is_array($attributes)) {
        reset($attributes);
        while (list($option, $value) = each($attributes)) {
          if (!is_numeric($option) || !is_numeric($value)) {
            $attributes_pass_check = false;
            break;
          }
        }
      }

      if (is_numeric($products_id) && isset($this->contents[$products_id_string]) && is_numeric($quantity) && ($attributes_pass_check == true)) {
        $this->contents[$products_id_string] = array('qty' => (int)$quantity);
// update database
		
        //if (tep_session_is_registered('customer_id')) tep_db_query("update " . TABLE_CUSTOMERS_BASKET . " set customers_basket_quantity = '" . (int)$quantity . "' where customers_id = '" . (int)$customer_id . "' and products_id = '" . tep_db_input($products_id_string) . "'");
		//if (tep_session_is_registered('customer_id')) tep_db_query("update " . TABLE_CUSTOMERS_BASKET . " set customers_basket_quantity='".(int)$quantity."' where customers_id='".(int)$customer_id."' and products_id='".tep_db_input($products_id_string)."' and product_val='".$cusdesAddval."'");
		
        if (is_array($attributes)) {
          reset($attributes);
          while (list($option, $value) = each($attributes)) {
            $this->contents[$products_id_string]['attributes'][$option] = $value;
// update database
            if (tep_session_is_registered('customer_id')) tep_db_query("update " . TABLE_CUSTOMERS_BASKET_ATTRIBUTES . " set products_options_value_id = '" . (int)$value . "' where customers_id = '" . (int)$customer_id . "' and products_id = '" . tep_db_input($products_id_string) . "' and products_options_id = '" . (int)$option . "'");
          }
        }
      }
    }

    function cleanup() {
      global $customer_id;

      reset($this->contents);
      while (list($key,) = each($this->contents)) {
        if ($this->contents[$key]['qty'] < 1) {
          unset($this->contents[$key]);
// remove from database
          if (tep_session_is_registered('customer_id')) {
            tep_db_query("delete from " . TABLE_CUSTOMERS_BASKET . " where customers_id = '" . (int)$customer_id . "' and products_id = '" . tep_db_input($key) . "'");
            tep_db_query("delete from " . TABLE_CUSTOMERS_BASKET_ATTRIBUTES . " where customers_id = '" . (int)$customer_id . "' and products_id = '" . tep_db_input($key) . "'");
          }
        }
      }
    }

    function count_contents() {  // get total number of items in cart 
      $total_items = 0;
	 $ss=0;
      if (is_array($this->contents)) {
        reset($this->contents);
		//echo'<b style="color:red;"><pre>'; print_r($this->contents); echo'</b>';
     //   while (list($products_id, ) = each($this->contents)) {
        while (list($products_id, ) = each($this->contents)) {
			//echo'<b style="color:red">';print_r($this->get_quantity($products_id)); echo'</b><br />';
          $total_items += $this->get_quantity($products_id);
        }
      }

      return $total_items;
    }

    function get_quantity($products_id) {
      if (isset($this->contents[$products_id])) {
        return $this->contents[$products_id]['qty'];
      } else {
        return 0;
      }
    }

    function in_cart($products_id) {
      if (isset($this->contents[$products_id])) {
        return true;
      } else {
        return false;
      }
    }

    function remove($products_id) {
      global $customer_id;

      unset($this->contents[$products_id]);
// remove from database
      if (tep_session_is_registered('customer_id')) {
        tep_db_query("delete from " . TABLE_CUSTOMERS_BASKET . " where customers_id = '" . (int)$customer_id . "' and products_id = '" . tep_db_input($products_id) . "'");
        tep_db_query("delete from " . TABLE_CUSTOMERS_BASKET_ATTRIBUTES . " where customers_id = '" . (int)$customer_id . "' and products_id = '" . tep_db_input($products_id) . "'");
      }

// assign a temporary unique ID to the order contents to prevent hack attempts during the checkout procedure
      $this->cartID = $this->generate_cart_id();
    }

    function remove_all() {
      $this->reset();
    }

    function get_product_id_list() {
      $product_id_list = '';
      if (is_array($this->contents)) {
        reset($this->contents);
        while (list($products_id, ) = each($this->contents)) {
          $product_id_list .= ', ' . $products_id;
        }
      }

      return substr($product_id_list, 2);
    }

    function calculate() {
      global $currencies;

      $this->total = 0;
      $this->weight = 0;
	  
	  $totalamout=0;
      if (!is_array($this->contents)) return 0;
		$ct="";
      reset($this->contents);
	  
	 // echo'<pre>';
	//  print_r($this->contents);
	 // echo'<br />';

      while (list($products_id, ) = each($this->contents)) {
        $qty = $this->contents[$products_id]['qty'];

// products price
        $product_query = tep_db_query("select products_id, products_price, products_tax_class_id, products_weight from " . TABLE_PRODUCTS . " where products_id = '" . (int)$products_id . "'");
        if ($product = tep_db_fetch_array($product_query)) {
          $prid = $product['products_id'];
          $products_tax = tep_get_tax_rate($product['products_tax_class_id']);
          $products_price = $product['products_price'];
          $products_weight = $product['products_weight'];

          $specials_query = tep_db_query("select specials_new_products_price from " . TABLE_SPECIALS . " where products_id = '" . (int)$prid . "' and status = '1'");
          if (tep_db_num_rows ($specials_query)) {
            $specials = tep_db_fetch_array($specials_query);
            $products_price = $specials['specials_new_products_price'];
          }
		$ct1=0;
		//echo'<b style="color:red;">'; print_r($_SESSION['product_final']); echo'</b>';
          while($ct1<sizeof($_SESSION['product_final'])){
			  
			  // echo'<b style="color:red;">prid'; print_r($prid);  echo'sess=';  print_r($_SESSION['product_final'][$ct1]['id']);echo'</b><br />';
			   
			  
			  $cartpid=explode("{",$_SESSION['product_final'][$ct1]['id']);
            if($cartpid[0]==$prid){
              if(!empty($_SESSION['product_final'][$ct1]['wt'])){
                $ct=$_SESSION['product_final'][$ct1]['wt'];
              }else{
                $ct="";
              }
            }
            $ct1++;
          }
		 //echo$ct;echo'<br />';
		
		  if($ct!=""){
            //old 
			//$this->total += round(($currencies->calculate_price($products_price, $products_tax, $qty)*$ct),2);
			 $finalprice_with_ct=round($products_price*$ct);
			 $this->total += round(($currencies->calculate_price($finalprice_with_ct, $products_tax, $qty)),2);
            $this->weight += round((($qty * $products_weight)*$ct),2);
			
			
			//echo'<b style="color:red;">  '.$ct.'-X'.$qty.'-'.$this->total.'';  echo'</b><br />';
			
			
          }else{
            $this->total += round(($currencies->calculate_price($products_price, $products_tax, $qty)),2);
            $this->weight += round(($qty * $products_weight),2);
          }
          //$this->total += $currencies->calculate_price($products_price, $products_tax, $qty);
          //$this->weight += ($qty * $products_weight);
        }
		
		
		//echo'<b style="color:red;"><pre>'; print_r($this->total); echo'</b>';
		//$totalamout=($qty*$products_price);
		
//echo'<b style="color:red;">  '.$ct.'-X'.$qty.'-'.$totalamout.'';  echo'</b><br />';
// attributes price
        if (isset($this->contents[$products_id]['attributes'])) {
          reset($this->contents[$products_id]['attributes']);
          while (list($option, $value) = each($this->contents[$products_id]['attributes'])) {
            $attribute_price_query = tep_db_query("select options_values_price, price_prefix from " . TABLE_PRODUCTS_ATTRIBUTES . " where products_id = '" . (int)$prid . "' and options_id = '" . (int)$option . "' and options_values_id = '" . (int)$value . "'");
            $attribute_price = tep_db_fetch_array($attribute_price_query);
            if ($attribute_price['price_prefix'] == '+') {
              $this->total += $currencies->calculate_price($attribute_price['options_values_price'], $products_tax, $qty);
            } else {
              $this->total -= $currencies->calculate_price($attribute_price['options_values_price'], $products_tax, $qty);
            }
          }
        }
      }
	  
	  
	  //echo'<b style="color:red;">ded '.$totalamout.'';  echo'</b><br />';

    }

    function attributes_price($products_id) {
      $attributes_price = 0;

      if (isset($this->contents[$products_id]['attributes'])) {
        reset($this->contents[$products_id]['attributes']);
        while (list($option, $value) = each($this->contents[$products_id]['attributes'])) {
          $attribute_price_query = tep_db_query("select options_values_price, price_prefix from " . TABLE_PRODUCTS_ATTRIBUTES . " where products_id = '" . (int)$products_id . "' and options_id = '" . (int)$option . "' and options_values_id = '" . (int)$value . "'");
          $attribute_price = tep_db_fetch_array($attribute_price_query);
          if ($attribute_price['price_prefix'] == '+') {
            $attributes_price += $attribute_price['options_values_price'];
          } else {
            $attributes_price -= $attribute_price['options_values_price'];
          }
        }
      }

      return $attributes_price;
    }

    function get_products() {
      global $languages_id;

      if (!is_array($this->contents)) return false;

      $products_array = array();
      reset($this->contents);
      while (list($products_id, ) = each($this->contents)) {
        $products_query = tep_db_query("select p.products_id, pd.products_name, pd.products_description, p.products_model, p.products_image, p.products_price, p.products_weight, p.products_tax_class_id from " . TABLE_PRODUCTS . " p, " . TABLE_PRODUCTS_DESCRIPTION . " pd where p.products_id = '" . (int)$products_id . "' and pd.products_id = p.products_id and pd.language_id = '" . (int)$languages_id . "'");
        if ($products = tep_db_fetch_array($products_query)) {
          $prid = $products['products_id'];
          $products_price = $products['products_price'];
			//echo'<b style="color:red">pid='.$products_id.' and qty='.$this->contents[$products_id]['qty'].' and final_price-'.$products_price.'</b><br />';
          $specials_query = tep_db_query("select specials_new_products_price from " . TABLE_SPECIALS . " where products_id = '" . (int)$prid . "' and status = '1'");
          if (tep_db_num_rows($specials_query)) {
            $specials = tep_db_fetch_array($specials_query);
            $products_price = $specials['specials_new_products_price'];
          }

          $products_array[] = array('id' => $products_id,
                                    'name' => $products['products_name'],
                                    'description' => $products['products_description'],
                                    'model' => $products['products_model'],
                                    'image' => $products['products_image'],
                                    'price' => $products_price,
                                    'quantity' => $this->contents[$products_id]['qty'],
                                    'weight' => $products['products_weight'],
                                    'final_price' => ($products_price + $this->attributes_price($products_id)),
                                    'tax_class_id' => $products['products_tax_class_id'],
                                    'attributes' => (isset($this->contents[$products_id]['attributes']) ? $this->contents[$products_id]['attributes'] : ''));
									
									
        }
		
      }
//echo'<pre><b style="color:red">';print_r($products_array);echo'</b><br />';
      return $products_array;
    }

    function show_total() {
      $this->calculate();

      return $this->total;
    }

    function show_weight() {
      $this->calculate();

      return $this->weight;
    }

    function generate_cart_id($length = 5) {
      return tep_create_random_value($length, 'digits');
    }

    function get_content_type() {
      $this->content_type = false;

      if ( (DOWNLOAD_ENABLED == 'true') && ($this->count_contents() > 0) ) {
        reset($this->contents);
        while (list($products_id, ) = each($this->contents)) {
          if (isset($this->contents[$products_id]['attributes'])) {
            reset($this->contents[$products_id]['attributes']);
            while (list(, $value) = each($this->contents[$products_id]['attributes'])) {
              $virtual_check_query = tep_db_query("select count(*) as total from " . TABLE_PRODUCTS_ATTRIBUTES . " pa, " . TABLE_PRODUCTS_ATTRIBUTES_DOWNLOAD . " pad where pa.products_id = '" . (int)$products_id . "' and pa.options_values_id = '" . (int)$value . "' and pa.products_attributes_id = pad.products_attributes_id");
              $virtual_check = tep_db_fetch_array($virtual_check_query);

              if ($virtual_check['total'] > 0) {
                switch ($this->content_type) {
                  case 'physical':
                    $this->content_type = 'mixed';

                    return $this->content_type;
                    break;
                  default:
                    $this->content_type = 'virtual';
                    break;
                }
              } else {
                switch ($this->content_type) {
                  case 'virtual':
                    $this->content_type = 'mixed';

                    return $this->content_type;
                    break;
                  default:
                    $this->content_type = 'physical';
                    break;
                }
              }
            }
          } else {
            switch ($this->content_type) {
              case 'virtual':
                $this->content_type = 'mixed';

                return $this->content_type;
                break;
              default:
                $this->content_type = 'physical';
                break;
            }
          }
        }
      } else {
        $this->content_type = 'physical';
      }

      return $this->content_type;
    }

    function unserialize($broken) {
      for(reset($broken);$kv=each($broken);) {
        $key=$kv['key'];
        if (gettype($this->$key)!="user function")
        $this->$key=$kv['value'];
      }
    }

  }
?>
