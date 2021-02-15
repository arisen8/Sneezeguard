<?php
/*
  $Id$
  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com
  Copyright (c) 2003 osCommerce
  Released under the GNU General Public License
*/
class wishlist {
    function wishlist(){
        $this->productIds = array();
        $this->products = array();
        $this->finalArray = array();
        $this->model_name = "";
        $this->model_type = "";
    }
    
    function remove_content($id, $attr = "", $model_name = "", $model_type = "") {
        global $customer_id;
        if($attr == "") {
            $attr = 'noAttrib';
        }
        if($model_name == "") {
            $model_name = "Parts";
            $model_type = "List";
        }
        if (tep_session_is_registered('customer_id')) {     
            $product_query = tep_db_query("delete from  wishlist where customer_id = '" . (int)$customer_id . "' and product_id = '" . tep_db_input($id) . "' and attributs = '".stripslashes($attr)."' and model_name='".$model_name."' and model_type='".$model_type."'");
        }       
        foreach($this->products as $key => $p) {
            if($p['porduct_id'] == $id && tep_db_input($p['attributs']) == stripslashes($attr) && $p['model_name'] == $model_name && $p['model_type']  == $model_type) {

                unset($this->products[$key]);    
                foreach($this->finalArray as $key => $pro_des) {                    
                    if(!is_array($p['custom_des1'])) {
                        $cusdes = json_decode(html_entity_decode(tep_db_output($p['custom_des1'])), true);
                    } else {
                        $cusdes = $p['custom_des1'];
                    }
                    if($pro_des['id'] == $cusdes['id'] && $pro_des['model_name'] == $cusdes['model_name'] && $pro_des['model_type'] == $cusdes['model_type']) {
                        unset($this->finalArray[$key]);
                    }
                }
            }
        }
        
    }
    
    function remove_model($model_name, $model_type) {
        global $customer_id;
       // echo "<pre>"; print_r($this->products); die;
        if (tep_session_is_registered('customer_id')) {     
            $product_query = tep_db_query("delete from  wishlist where customer_id = '" . (int)$customer_id . "' and model_name = '" . tep_db_input($model_name) . "' and model_type='".tep_db_input($model_type) ."'");
        }
        foreach($this->products as $key => $product) {
            if($product['model_name'] == $model_name && $product['model_type'] == $model_type) {
                foreach($this->finalArray as $key1 => $pro_des) {
                    if($product['id'] == $pro_des['id']) {
                        unset($this->finalArray[$key1]);
                    }
                }
                unset($this->products[$key]);
            }
        }
    }
    
    function removeSession(){
        $this->productIds = array();
        $this->products = array();
        $this->finalArray = array();
    }

    function reset_wishlist(){
        global $customer_id;
        if (tep_session_is_registered('customer_id')) {     
            //$this->getFinalArray();
            $this->productIds = array();
            $this->products = array();
            $this->finalArray = array();
            $product_query = tep_db_query("select * from  wishlist where customer_id = '" . (int)$customer_id . "'");
                while ($products = tep_db_fetch_array($product_query)) {                   
                    $this->productIds[] = $products['product_id'];
                    if(in_array($products['product_id'], $this->productIds)) {
                        $isAttr = false;
                        foreach($this->products as $pk => $p) {
                            if($p['attributs'] == $products['attributs'] && $products['product_id'] == $p['products_id'] &&  $p['model_name'] == $products['model_name'] && $p['model_type'] == $products['model_type']) {
                                $isAttr = true;
                            }
                        }
                        if($isAttr) {
                            $array = array(
                                "model_name"        => $products['model_name'], 
                                "model_type"        => $products['model_type'],
                                "porduct_id"        => $products['product_id'], 
                                "product_quantity"  => $products['product_quantity'],
                                "custom_des1"       => $products['custom_des'],
                                "added_prev"        => 1,
                                "attributs"         => $products['attributs']
                            );    
                            $products['custom_des'] = !empty($array['custom_des1']) ? $array['custom_des1'] : $this->products[$products['product_id']]['custom_des'];
                            $products['model_name'] = $array['model_name'] != "" ? $array['model_name'] : $this->products[$products['product_id']]['model_name'];
                            $products['model_type'] = $array['model_type'] != "" ? $array['model_type'] : $this->products[$products['product_id']]['model_type'];
                            $products['product_quantity'] = $array['product_quantity'] >  $this->products[$products['product_id']]['product_qty'] ? $array['product_quantity'] : $this->products[$products['product_id']]['product_qty'];
                            $this->products[] = array(
                                "model_name"   => $products['model_name'], 
                                "model_type"   => $products['model_type'],
                                "porduct_id"   => $products['product_id'], 
                                "product_qty"  => $products['product_quantity'],
                                "custom_des1"  => $products['custom_des'],
                                "added_prev"   => 1,
                                "attributs"    => $products['attributs']
                            );   
                        } else {
                            $this->products[] = array(
                                "model_name"   => $products['model_name'], 
                                "model_type"   => $products['model_type'],
                                "porduct_id"   => $products['product_id'], 
                                "product_qty"  => $products['product_quantity'],
                                "custom_des1"  => $products['custom_des'],
                                "added_prev"   => 1,
                                "attributs"    => $products['attributs']
                            );          
                        }
                    } else {
                        $this->products[] = array(
                            "model_name"   => $products['model_name'], 
                            "model_type"   => $products['model_type'],
                            "porduct_id"   => $products['product_id'], 
                            "product_qty"  => $products['product_quantity'],
                            "custom_des1"  => $products['custom_des'],
                            "added_prev"   => 1,
                            "attributs"    => $products['attributs']
                        );      
                    }
                    $this->finalArray[] = json_decode(html_entity_decode(tep_db_output($products['custom_des'])), true);
                }
        }
    }
    
    function add_wishlist($products_id = "", $product_quantity = '1', $model_name = "", $model_type = "", $attributs = array() , $cusdesAdd = array()){
        global $customer_id;
        if(!empty($attributs)) {
            $attributs = implode(",", $attributs);
        } else {
            $attributs = "noAttrib";
        }
        if($model_name !="" && $model_type != "") {
            $this->model_name = $model_name;
            $this->model_type = $model_type;
        }
        if(!empty($cusdesAdd)) {
            $cusdesAdd['model_name'] = $this->model_name;
            $cusdesAdd['model_type'] = $this->model_type;
        }
        if (tep_session_is_registered('customer_id')) {     
            reset($this->products);
                        
            if($products_id != "") {
                $pid = $products_id;
                $pos = strpos($pid, '{');
                if($pos) {
                    $pid = substr($pid, 0, $pos);
                } 
                $products_id = $pid;
                $product_query = tep_db_query("select * from  wishlist where customer_id = '" . (int)$customer_id . "' and product_id = '" . tep_db_input($products_id) . "' and attributs ='".$attributs."' and model_name='".tep_db_input($model_name)."' and model_type='".tep_db_input($model_type)."'");
                
                if (!tep_db_num_rows($product_query)) {
                    
                    tep_db_query("insert into wishlist (customer_id, model_name, model_type, product_id, product_quantity, attributs, custom_des, created_date) values ('" . (int)$customer_id . "', '" . tep_db_input($model_name) . "', '" .tep_db_input($model_type) . "', '" . tep_db_input($products_id) . "', '" . (int)$product_quantity . "', '" . $attributs . "', '".(empty($cusdesAdd) ? "" : tep_db_input(json_encode($cusdesAdd)))."', '". date('Ymd') . "')");
                } else {
                    tep_db_query("update wishlist set product_quantity =  product_quantity + ".$product_quantity." where customer_id = '" . (int)$customer_id . "' and product_id = '" . tep_db_input($products_id) . "' and attributs = '".$attributs."' and model_name='".tep_db_input($model_name)."' and model_type='".tep_db_input($model_type)."'");
                }
            } else {
                $product_query = tep_db_query("select * from  wishlist where customer_id = '" . (int)$customer_id . "'");
                while ($products = tep_db_fetch_array($product_query)) {
                    $this->productIds[] = $products['product_id'];
                    if(in_array($products['product_id'], $this->productIds)) {
                        $isAttr = false;
                        foreach($this->products as $pk => $p) {
                            if($p['attributs'] == $products['attributs'] && $products['product_id'] == $p['products_id']) {
                                $isAttr = true;
                            }
                        }
                        if($isAttr) {
                            $array = array(
                                "model_name"        => $products['model_name'], 
                                "model_type"        => $products['model_type'],
                                "porduct_id"        => $products['product_id'], 
                                "product_quantity"  => $products['product_quantity'],
                                "custom_des1"       => $products['custom_des'],
                                "added_prev"        => 1,
                                "attributs"         => $poducts['attributs']
                            );    
                            $products['custom_des'] = !empty($array['custom_des1']) ? $array['custom_des1'] : $this->products[$products['product_id']]['custom_des'];
                            $products['model_name'] = $array['model_name'] != "" ? $array['model_name'] : $this->products[$products['product_id']]['model_name'];
                            $products['model_type'] = $array['model_type'] != "" ? $array['model_type'] : $this->products[$products['product_id']]['model_type'];
                            $products['product_quantity'] = $array['product_quantity'] >  $this->products[$products['product_id']]['product_qty'] ? $array['product_quantity'] : $this->products[$products['product_id']]['product_qty'];
                            $this->products[] = array(
                                "model_name"   => $products['model_name'], 
                                "model_type"   => $products['model_type'],
                                "porduct_id"   => $products['product_id'], 
                                "product_qty"  => $products['product_quantity'],
                                "custom_des1"  => $products['custom_des'],
                                "added_prev"   => 1,
                                "attributs"    => $poducts['attributs']
                            );   
                        } else {
                            $this->products[] = array(
                                "model_name"   => $products['model_name'], 
                                "model_type"   => $products['model_type'],
                                "porduct_id"   => $products['product_id'], 
                                "product_qty"  => $products['product_quantity'],
                                "custom_des1"  => $products['custom_des'],
                                "added_prev"   => 1,
                                "attributs"    => $poducts['attributs']
                            );          
                        }
                    } else {
                        $this->products[] = array(
                            "model_name"   => $products['model_name'], 
                            "model_type"   => $products['model_type'],
                            "porduct_id"   => $products['product_id'], 
                            "product_qty"  => $products['product_quantity'],
                            "custom_des1"  => $products['custom_des'],
                            "added_prev"   => 1,
                            "attributs"    => $poducts['attributs']
                        );      
                    }
                    $this->finalArray[] = json_decode(html_entity_decode(tep_db_output($products['custom_des'])), true);
                } 
                reset($this->products);
                while (list($index, ) = each($this->products)) {
                    if($this->products[$index]['added_prev'] == 0) {
                        if(!empty($this->products[$index])) {
                            $product_quantity = $this->products[$index]["product_qty"];
                            $custom_des = tep_db_input(json_encode($this->products[$index]['custom_des1']));
                        }
                        $pid = $this->products[$index]['porduct_id'];
                        $pos = strpos($pid, '{');
                        if($pos) {
                            $pid = substr($pid, 0, $pos);
                        } 
                        $this->products[$index]['porduct_id'] = $pid;
                        tep_db_query("insert into wishlist (customer_id, model_name, model_type, product_id, product_quantity, custom_des, attributs, created_date) values ('" . (int)$customer_id . "', '" . tep_db_input($this->products[$index]["model_name"]) . "', '" . tep_db_input($this->products[$index]["model_type"]) . "', '" .tep_db_input($pid) . "', '" . (int)$product_quantity . "', '" .$custom_des ."', '" . $this->products[$index]["attributs"]. "', '". date('Ymd') . "')");
                    }
                }
            }
        } 
        if($products_id != "") {
            if( in_array($products_id, $this->productIds)) {
                $isAttr = false;
                $prodIndex = "";
                foreach($this->products as $pk => $p) {
                    if($p['attributs'] == $attributs && $products_id == $p['porduct_id'] && $model_type == $p['model_type'] && $model_name == $p['model_name']) {
                        $isAttr = true;
                        $prodIndex = $pk;
                    }
                }
                if($isAttr) {
                    $this->products[$prodIndex]["product_qty"] +=  $product_quantity;
                } else {
                    $this->products[] = array(
                        "model_name"   => $model_name, 
                        "porduct_id"   => $products_id, 
                        "product_qty"  => $product_quantity,
                        "model_type"   => $model_type,
                        "added_prev"   => 0,
                        "custom_des"   => $cusdesAdd,
                        "custom_des1"   => $cusdesAdd,
                        "attributs"    => $attributs
                    );    
                }
            } else {
                $this->productIds[] = $products_id;
                $this->products[] = array(
                    "model_name"   => $model_name, 
                    "porduct_id"   => $products_id, 
                    "product_qty"  => $product_quantity,
                    "model_type"   => $model_type,
                    "added_prev"   => 0,
                    "custom_des"    => $cusdesAdd,
                    "custom_des1"   => $cusdesAdd,
                    "attributs"     => $attributs
                );
            }
        }
        //echo "<pre>"; print_r($this->products); die;
    }
    
    
    
    function get_wishlist_product(){
        if(!tep_session_is_registered("customer_id")){
            return array();
        }
        return $this->products;
    }
    
    function getProductGroup(){
        if(!tep_session_is_registered("customer_id")){
            return array();
        }
        $productGroup = array();
        foreach($this->products as $key => $detail) {
            if($detail['model_name'] != "") {
                $productGroup[$detail['model_name']."-".$detail['model_type']][] = $detail;
            }
        }
        return $productGroup;
    }
    
    function getFinalGroup($group){
        if(!tep_session_is_registered("customer_id")){
            return array();
        }
        $finalGroup = array();
        global $customer_id;
        foreach($this->finalArray as $key => $detail) {
            $pos = strpos($detail['id'], '{');
            if($pos) {
                $id = substr($detail['id'], 0, $pos);
            } else {
                $id = $detail['id'];
            }


            $remaining = substr($detail[$key]['id'], $pos+1);
            $newAttr = "";
            if(strlen($remaining) > 0) {
                while($pos = strpos($remaining, '}')) {
                    $index = substr($remaining, 0, $pos);
                    $remaining = substr($remaining, $pos+1);
                    $pos1 = strpos($remaining, '{');
                    if(!$pos1) {
                        $val = $remaining;
                        $remaining = "";
                    } else {
                        $val = substr($remaining, 0, $pos1);
                        $remaining = substr($remaining, $pos1+1);
                    }
                    $ids[$index] = $val;
                }

                $newAttr = implode(",", $ids);
            }
            foreach($group as $g) {
                if($g['porduct_id'] == $id && $g['model_name'] == $detail['model_name'] && $g['model_type'] == $detail['model_type']) {
                    if($newAttr != "") {
                        if($newAttr == $g['attributs']) {
                            $finalGroup[] = $detail;        
                        }
                    } else if($detail['val'] == $g['attributs']){
                        $finalGroup[] = $detail;        
                    }else {
                        $finalGroup[] = $detail;    
                    }
                }
            }
        }
        $ids = array();
        $valsw = array();
        $valds = array();
        $finalArray = array();
        if( !empty($finalGroup)) {
            foreach($finalGroup as $key => $pro_des) {
                if(!isset($valds[$pro_des['id']])) {
                    $valds[$pro_des['id']] = array();
                }
                if(!in_array($pro_des['id'], $ids) || !in_array($pro_des['val'], $valds[$pro_des['id']])) {
                    $ids[] = $pro_des['id'];
                    $valsw[] = $pro_des['val'];
                    $valds[$pro_des['id']][]  = $pro_des['val'];
                    $qtyset = false;              
                    $attr = "";   
                    $product_id = "";   
                    foreach($group as $k => $p) {
                        $pos = strpos($pro_des['id'], '{');
                        if($pos) {
                            $id = substr($pro_des['id'], 0, $pos);
                        } else {
                            $id = $pro_des['id'];
                        }
                        if($p['porduct_id'] == $id) {
                            $attr = $p['attributs'];
                            $product_id = $p['porduct_id'];
                            if(!is_array($p['custom_des1'])) {
                                $cusdes = json_decode(html_entity_decode(tep_db_output($p['custom_des1'])), true);
                            } else {
                                $cusdes = $p['custom_des1'];
                            }
                            if($cusdes['id'] == $finalGroup[$key]['id'] && $p['model_name'] == $finalGroup[$key]['model_name'] && $p['model_type'] == $finalGroup[$key]['model_type']) {
                                if(!$qtyset) {             
                                    $group[$k]['custom_des1'] = $pro_des;
                                    if($p['product_qty'] > $finalGroup[$key]['qty']) {
                                        if((addslashes($p['attributs']) == $finalGroup[$key]['val']) || strpos($p['attributs'],',') !== false  || is_numeric($p['attributs']) || $p['attributs'] == $finalGroup[$key]['val']) {
                                            $finalGroup[$key]['qty'] = $p['product_qty'];   
                                            $pro_des['qty'] = $p['product_qty']; 
                                            $qtyset = true;
                                        }
										
                                    }
                                }
                            }
                        }
                    }
                    $finalArray[] = $finalGroup[$key];                    
                    if($attr == "") {
                        $attr = 'noAttrib';
                    }
                    if (tep_session_is_registered('customer_id')) {   
                        $sql = tep_db_query("select * from wishlist where customer_id = '" . (int)$customer_id . "' and product_id = '" . tep_db_input($product_id) . "' and attributs = '".$attr."' and model_name='".$finalGroup[$key]['model_name']."' and model_type='".$finalGroup[$key]['model_type']."'");                       
                        while ($product = tep_db_fetch_array($sql)) {  
                            if($product['custom_des'] == "") {                       
                                tep_db_query("update wishlist set custom_des = '".tep_db_input(json_encode($pro_des))."' where customer_id = '" . (int)$customer_id . "' and product_id = '" . tep_db_input($product_id) . "' and attributs = '".$attr."' and model_name='".$finalGroup[$key]['model_name']."' and model_type='".$finalGroup[$key]['model_type']."'");
                            }
                        }
                    }
                } 
            }
        }     
        return $finalArray;
    }
    
    function get_products($productGroup) {
      global $languages_id;
      if (!is_array($productGroup)) return false;
      $products_array = array();
      reset($productGroup);
      while (list($index, ) = each($productGroup)) {
        $products_query = tep_db_query("select p.products_id, pd.products_name, pd.products_description, p.products_model, p.products_image, p.products_price, p.products_weight, p.products_tax_class_id from " . TABLE_PRODUCTS . " p, " . TABLE_PRODUCTS_DESCRIPTION . " pd where p.products_id = '" . (int)$productGroup[$index]['porduct_id'] . "' and pd.products_id = p.products_id and pd.language_id = '" . (int)$languages_id . "'");
        if ($products = tep_db_fetch_array($products_query)) {
          $prid = $products['products_id'];
          $products_price = $products['products_price'];

          $specials_query = tep_db_query("select specials_new_products_price from " . TABLE_SPECIALS . " where products_id = '" . (int)$prid . "' and status = '1'");
          if (tep_db_num_rows($specials_query)) {
            $specials = tep_db_fetch_array($specials_query);
            $products_price = $specials['specials_new_products_price'];
          }

          $products_array[] = array('id' => $prid,
                                    'name' => $products['products_name'],
                                    'description' => $products['products_description'],
                                    'model' => $products['products_model'],
                                    'image' => $products['products_image'],
                                    'price' => $products_price,
                                    'quantity' => $productGroup[$products_id]['product_qty'],
                                    'weight' => $products['products_weight'],
                                    'final_price' => ($products_price),
                                    'tax_class_id' => $products['products_tax_class_id'],
                                    'attributes' => (isset($productGroup[$products_id]['attributes']) ? $productGroup[$products_id]['attributes'] : ''));
        }
      }
      return $products_array;
    }
    
    function count_contents(){
        $count = 0;
        if(!tep_session_is_registered("customer_id")){
            return $count;
        }
        reset($this->products);
        while (list($products_id, ) = each($this->products)) {
            if($this->products[$products_id]['model_name']!="") {
                $count += $this->products[$products_id]['product_qty'];
            }
        }
        
        return $count;
    }
    
    function addFinalArray($arr) {
        $arr['model_name'] = $this->model_name;
        $arr['model_type'] = $this->model_type;
        $flag = true;
        if(empty($this->finalArray)) {
            $this->finalArray[] = $arr;            
            $flag = false;
        }  else {
            foreach ($this->finalArray as $key => $value) {
                if($value['id'] == $arr['id'] && $value['model_name'] == $arr['model_name'] && $value['model_type'] == $arr['model_type']) {
                    $flag = false;
                } 
            }
        }
        if($flag) {
            $this->finalArray[] = $arr;
        }
    }

    function getFinalArray() {
        $finalGroup = array();
        global $customer_id;
        foreach($this->finalArray as $key => $detail) {
            $pos = strpos($detail['id'], '{');
            if($pos) {
                $id = substr($detail['id'], 0, $pos);
            } else {
                $id = $detail['id'];
            }


            $remaining = substr($detail[$key]['id'], $pos+1);
            $newAttr = "";
            if(strlen($remaining) > 0) {
                while($pos = strpos($remaining, '}')) {
                    $index = substr($remaining, 0, $pos);
                    $remaining = substr($remaining, $pos+1);
                    $pos1 = strpos($remaining, '{');
                    if(!$pos1) {
                        $val = $remaining;
                        $remaining = "";
                    } else {
                        $val = substr($remaining, 0, $pos1);
                        $remaining = substr($remaining, $pos1+1);
                    }
                    $ids[$index] = $val;
                }

                $newAttr = implode(",", $ids);
            }
            foreach($group as $g) {
                if($g['porduct_id'] == $id && $g['model_name'] == $detail['model_name'] && $g['model_type'] == $detail['model_type']) {
                    if($newAttr != "") {
                        if($newAttr == $g['attributs']) {
                            $finalGroup[] = $detail;        
                        }
                    } else {
                        $finalGroup[] = $detail;    
                    }
                }
            }
        }
        $ids = array();
        $finalArray = array();
        if( !empty($finalGroup)) {
            foreach($finalGroup as $key => $pro_des) {
                if(!in_array($pro_des['id'], $ids)) {
                    $ids[] = $pro_des['id'];
                    $qtyset = false;              
                    $attr = "";   
                    $product_id = "";   
                    foreach($this->products as $k => $p) {
                        $pos = strpos($pro_des['id'], '{');
                        if($pos) {
                            $id = substr($pro_des['id'], 0, $pos);
                        } else {
                            $id = $pro_des['id'];
                        }
                        if($p['porduct_id'] == $id) {
                            $attr = $p['attributs'];
                            $product_id = $p['porduct_id'];
                            if(!is_array($p['custom_des1'])) {
                                $cusdes = json_decode(html_entity_decode(tep_db_output($p['custom_des1'])), true);
                            } else {
                                $cusdes = $p['custom_des1'];
                            }
                            if($cusdes['id'] == $finalGroup[$key]['id'] && $p['model_name'] == $finalGroup[$key]['model_name'] && $p['model_type'] == $finalGroup[$key]['model_type']) {
                                if(!$qtyset) {             
                                    $this->products[$k]['custom_des1'] = $pro_des;
                                    if($p['product_qty'] > $finalGroup[$key]['qty']) {
                                        $finalGroup[$key]['qty'] = $p['product_qty'];   
                                        $pro_des['qty'] = $p['product_qty']; 
                                        $qtyset = true;
                                    }
                                }
                            }
                        }
                    }
                    $finalArray[] = $finalGroup[$key];                    
                    if($attr == "") {
                        $attr = 'noAttrib';
                    }
                    if (tep_session_is_registered('customer_id')) {  
                        $sql = tep_db_query("select * from wishlist where customer_id = '" . (int)$customer_id . "' and product_id = '" . tep_db_input($product_id) . "' and attributs = '".$attr."' and model_name='".$finalGroup[$key]['model_name']."' and model_type='".$finalGroup[$key]['model_type']."'");                       
                        while ($product = tep_db_fetch_array($sql)) {  
                            if($product['custom_des'] == "") {
                                tep_db_query("update wishlist set custom_des = '".tep_db_input(json_encode($pro_des))."' where customer_id = '" . (int)$customer_id . "' and product_id = '" . tep_db_input($product_id) . "' and attributs = '".$attr."' and model_name='".$finalGroup[$key]['model_name']."' and model_type='".$finalGroup[$key]['model_type']."'");
                            }
                        }
                    }
                } 
            }
        }
        return $this->finalArray;
    }
}
?>
