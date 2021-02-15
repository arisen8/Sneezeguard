<?php
$HTTP_POST_VARS = $_POST;
echo "<pre>";print_r($HTTP_POST_VARS);
    // requires php5
    require("configure.php");
    //require("application_top.php");
//require('functions/sessions.php');
//require('functions/general.php');
//include("sessions.php");
	//require('application_top.php');
	
	
 //online
$con=mysqli_connect(DB_SERVER,DB_SERVER_USERNAME,DB_SERVER_PASSWORD,DB_DATABASE) or die(mysqli_connect_error());
// offline		
// $con=mysqli_connect("localhost","root","","esneezeg_new_sneezeguard") or die(mysqli_connect_error());

$query_max_quoteid=mysqli_query($con,"SELECT MAX(id) FROM save_quote_img");
$get_max_quoteid=mysqli_fetch_array($query_max_quoteid);
$maxid=$get_max_quoteid[0];
$quoteid=$maxid+1;


$k=0;
$customer_id=$HTTP_POST_VARS['customer_id'];
	

          					// ani code
							
							
							
							
							
					
                $new_k = $k;

								/* for ep 82 there are 2 galasses for same face so declearing variables for that */
								$glassa=false;
								$glassb=false;
								$glassc=false;
								$glassd=false;
								$glassmakea=false;
								$glassmakeb=false;
								$glassmakec=false;
								$glassmaked=false;
								/* fro ed 20 shelevs */
								$nosheleves=$HTTP_POST_VARS['shelves'];
								$start_top_glassa=0;
								$start_top_glassb=0;
								$start_top_glassc=0;
								$start_top_glassd=0;
								
								foreach($HTTP_POST_VARS['products_id'] as $p_ids) {
								  $isglass=false;	


								

								  
								  // for ep5 custom product
								  if($HTTP_POST_VARS['product_type']=='EP5'){
									   if($HTTP_POST_VARS['rostedglass_val']!='' || $HTTP_POST_VARS['rostedglass_id']!=''){
									       $_SESSION['roastedglass']=$HTTP_POST_VARS['rostedglass_val'];
                        $_SESSION['roastedglass_id']=$HTTP_POST_VARS['rostedglass_id'];									
									   }
									   if(($HTTP_POST_VARS['c_glass_face']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_face_val']==''){
										      tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_face'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_face_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_mult']);									
											   $k++; unset($HTTP_POST_VARS['c_glass_face']);$isglass=true;
									   }	
									   if(($HTTP_POST_VARS['c_glass_right']!='')&&($isglass==false)){
									      if($HTTP_POST_VARS['c_glass_right_val']==''){
										      tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_right'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_right_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_right_mult']);									
											   $k++; 
											   unset($HTTP_POST_VARS['c_glass_right']);$isglass=true;
								     }
									   if(($HTTP_POST_VARS['c_glass_left']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_left_val']==''){
										      tep_session_destroy();
										    }
											 $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_left'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_left_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_left_mult']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_left']);$isglass=true;
									   }	
									   if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_a_val']==''){
										      tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_a_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_a_mult']);									
											     $k++;unset($HTTP_POST_VARS['c_glass_a']);$isglass=true; 
								     }	
									   if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_b_val']==''){
										      tep_session_destroy();
										    }
											 $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_b_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_b_mult']);									
											   $k++;unset($HTTP_POST_VARS['c_glass_b']); $isglass=true;
								     }
									   if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)){
								        if($HTTP_POST_VARS['c_glass_c_val']==''){
									         tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_c_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_c_mult']);									
											   $k++;unset($HTTP_POST_VARS['c_glass_c']);$isglass=true; 
									   }	
                     if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_d_val']==''){
									       tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_d_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_d_mult']);									
											     $k++;unset($HTTP_POST_VARS['c_glass_d']);$isglass=true; 
							       }
                     if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++; unset($HTTP_POST_VARS['c_glass_b_light']);
  											 $isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_light'])){
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++; unset($HTTP_POST_VARS['c_glass_c_light']);
  											 $isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_light'])){
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++; unset($HTTP_POST_VARS['c_glass_d_light']);
  											 $isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_adjustable_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_a'])){
  									
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_a'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_a_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_a']);$isglass=true; 
  									}
  									if(($HTTP_POST_VARS['c_glass_adjustable_b']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_b'])){
  									
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_b'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_b_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_b']);$isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_adjustable_c']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_c'])){
  									
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_c'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_c_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_c']);$isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_adjustable_d']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_d'])){
  									
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_d'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_d_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_d']);$isglass=true; 
  									}
  									if($isglass==false){
  										
  										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
  										$k++;
  									}
									
								}
								
								//Ring-EP5 
								
								if($HTTP_POST_VARS['product_type']=='Ring-EP5'){
									   if($HTTP_POST_VARS['rostedglass_val']!='' || $HTTP_POST_VARS['rostedglass_id']!=''){
									       $_SESSION['roastedglass']=$HTTP_POST_VARS['rostedglass_val'];
                        $_SESSION['roastedglass_id']=$HTTP_POST_VARS['rostedglass_id'];									
									   }
									   if(($HTTP_POST_VARS['c_glass_face']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_face_val']==''){
										      tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_face'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_face_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_mult']);									
											   $k++; unset($HTTP_POST_VARS['c_glass_face']);$isglass=true;
									   }	
									   if(($HTTP_POST_VARS['c_glass_right']!='')&&($isglass==false)){
									      if($HTTP_POST_VARS['c_glass_right_val']==''){
										      tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_right'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_right_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_right_mult']);									
											   $k++; 
											   unset($HTTP_POST_VARS['c_glass_right']);$isglass=true;
								     }
									   if(($HTTP_POST_VARS['c_glass_left']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_left_val']==''){
										      tep_session_destroy();
										    }
											 $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_left'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_left_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_left_mult']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_left']);$isglass=true;
									   }	
									   if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_a_val']==''){
										      tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_a_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_a_mult']);									
											     $k++;unset($HTTP_POST_VARS['c_glass_a']);$isglass=true; 
								     }	
									   if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_b_val']==''){
										      tep_session_destroy();
										    }
											 $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_b_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_b_mult']);									
											   $k++;unset($HTTP_POST_VARS['c_glass_b']); $isglass=true;
								     }
									   if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)){
								        if($HTTP_POST_VARS['c_glass_c_val']==''){
									         tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_c_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_c_mult']);									
											   $k++;unset($HTTP_POST_VARS['c_glass_c']);$isglass=true; 
									   }	
                     if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_d_val']==''){
									       tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_d_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_d_mult']);									
											     $k++;unset($HTTP_POST_VARS['c_glass_d']);$isglass=true; 
							       }
                     if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++; unset($HTTP_POST_VARS['c_glass_b_light']);
  											 $isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_light'])){
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++; unset($HTTP_POST_VARS['c_glass_c_light']);
  											 $isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_light'])){
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++; unset($HTTP_POST_VARS['c_glass_d_light']);
  											 $isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_adjustable_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_a'])){
  									
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_a'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_a_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_a']);$isglass=true; 
  									}
  									if(($HTTP_POST_VARS['c_glass_adjustable_b']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_b'])){
  									
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_b'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_b_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_b']);$isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_adjustable_c']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_c'])){
  									
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_c'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_c_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_c']);$isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_adjustable_d']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_d'])){
  									
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_d'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_d_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_d']);$isglass=true; 
  									}
  									if($isglass==false){
  										
  										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
  										$k++;
  									}
									
								}
								//for ep15 custom product
								if($HTTP_POST_VARS['product_type']=='EP15'){
									   if($HTTP_POST_VARS['rostedglass_val']!='' || $HTTP_POST_VARS['rostedglass_id']!=''){
									       $_SESSION['roastedglass']=$HTTP_POST_VARS['rostedglass_val'];
                        $_SESSION['roastedglass_id']=$HTTP_POST_VARS['rostedglass_id'];									
									   }
									   
									   //corner post
									if(($HTTP_POST_VARS['post_type_val']!='')){
									$_SESSION['posttypeval']=$HTTP_POST_VARS['post_type_val'];
										
											
									}
									
									//corner post
									if(($HTTP_POST_VARS['post_degree_val']!='')){
									$_SESSION['postdegreeval']=$HTTP_POST_VARS['post_degree_val'];
										
											
									}
									   if(($HTTP_POST_VARS['c_glass_face']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_face_val']==''){
										      tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_face'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_face_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_mult']);									
											   $k++; unset($HTTP_POST_VARS['c_glass_face']);$isglass=true;
									   }	
									   if(($HTTP_POST_VARS['c_glass_right']!='')&&($isglass==false)){
									      if($HTTP_POST_VARS['c_glass_right_val']==''){
										      tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_right'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_right_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_right_mult']);									
											   $k++; 
											   unset($HTTP_POST_VARS['c_glass_right']);$isglass=true;
								     }
									   if(($HTTP_POST_VARS['c_glass_left']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_left_val']==''){
										      tep_session_destroy();
										    }
											 $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_left'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_left_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_left_mult']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_left']);$isglass=true;
									   }	
									   if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_a_val']==''){
										      tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_a_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_a_mult']);									
											     $k++;unset($HTTP_POST_VARS['c_glass_a']);$isglass=true; 
								     }	
									   if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_b_val']==''){
										      tep_session_destroy();
										    }
											 $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_b_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_b_mult']);									
											   $k++;unset($HTTP_POST_VARS['c_glass_b']); $isglass=true;
								     }
									   if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)){
								        if($HTTP_POST_VARS['c_glass_c_val']==''){
									         tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_c_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_c_mult']);									
											   $k++;unset($HTTP_POST_VARS['c_glass_c']);$isglass=true; 
									   }	
                     if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_d_val']==''){
									       tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_d_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_d_mult']);									
											     $k++;unset($HTTP_POST_VARS['c_glass_d']);$isglass=true; 
							       }
                     if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++; unset($HTTP_POST_VARS['c_glass_b_light']);
  											 $isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_light'])){
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++; unset($HTTP_POST_VARS['c_glass_c_light']);
  											 $isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_light'])){
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++; unset($HTTP_POST_VARS['c_glass_d_light']);
  											 $isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_adjustable_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_a'])){
  									
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_a'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_a_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_a']);$isglass=true; 
  									}
  									if(($HTTP_POST_VARS['c_glass_adjustable_b']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_b'])){
  									
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_b'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_b_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_b']);$isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_adjustable_c']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_c'])){
  									
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_c'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_c_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_c']);$isglass=true; 
  									}if(($HTTP_POST_VARS['c_glass_adjustable_d']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_d'])){
  									
  											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_d'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_d_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
  											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_d']);$isglass=true; 
  									}
  									if($isglass==false){
  										
  										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
  										$k++;
  									}
									
								}
								//for ep21 custom product
								if($HTTP_POST_VARS['product_type']=='EP21'){
									
									
									
									
                  //left end panel and right end panel
                  if(($HTTP_POST_VARS['c_glass_right_val_ep21']!='')){
                        if($HTTP_POST_VARS['c_glass_right_val_ep21']==''){
                          tep_session_destroy();
                        }
                      $_SESSION['rightendpanelval_ep21']=$HTTP_POST_VARS['c_glass_right_val_ep21'];
                     }
                     if(($HTTP_POST_VARS['c_glass_left_val_ep21']!='')){
                       if($HTTP_POST_VARS['c_glass_left_val_ep21']==''){
                          tep_session_destroy();
                        }
                      $_SESSION['leftendpanelval_ep21']=$HTTP_POST_VARS['c_glass_left_val_ep21'];
                     }
                  
                  
                  
                  
									
									
									//corner post
									if(($HTTP_POST_VARS['post_type_val']!='')){
									$_SESSION['posttypeval']=$HTTP_POST_VARS['post_type_val'];
										
											
									}
									
									//corner post
									if(($HTTP_POST_VARS['post_degree_val']!='')){
									$_SESSION['postdegreeval']=$HTTP_POST_VARS['post_degree_val'];
										
											
									}
									
									if(($HTTP_POST_VARS['c_glass_face']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_face_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_face'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_face_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_face']);$isglass=true;
									}
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_a_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_a_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_a']);$isglass=true; 
									}	
									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_b_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_b_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_b']); $isglass=true;
									}
									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_c_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_c_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_c']);$isglass=true; 
									}	
									if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_d_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_d_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_d']);$isglass=true; 
									}	if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d_light']);
											 $isglass=true; 
									}	if(($HTTP_POST_VARS['c_glass_adjustable_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_a'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_a'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_a_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_a']);$isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_adjustable_b']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_b'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_b'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_b_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_b']);$isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_adjustable_c']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_c'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_c'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_c_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_c']);$isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_adjustable_d']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_d'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_d'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_d_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_d']);$isglass=true; 
									}
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}	
									
								}
								//for ep22 custom product
								if($HTTP_POST_VARS['product_type']=='EP22'){
									
									
									
									
												
                  //left end panel and right end panel
                  if(($HTTP_POST_VARS['c_glass_right_val_ep22']!='')){
                        if($HTTP_POST_VARS['c_glass_right_val_ep22']==''){
                          tep_session_destroy();
                        }
                      $_SESSION['rightendpanelval_ep22']=$HTTP_POST_VARS['c_glass_right_val_ep22'];
                     }
                     if(($HTTP_POST_VARS['c_glass_left_val_ep22']!='')){
                       if($HTTP_POST_VARS['c_glass_left_val_ep22']==''){
                          tep_session_destroy();
                        }
                      $_SESSION['leftendpanelval_ep22']=$HTTP_POST_VARS['c_glass_left_val_ep22'];
                     }
                  
									
									
									
									
									
									
									
									
									//corner post
									if(($HTTP_POST_VARS['post_type_val']!='')){
									$_SESSION['posttypeval']=$HTTP_POST_VARS['post_type_val'];
										
											
									}
									
									//corner post
									if(($HTTP_POST_VARS['post_degree_val']!='')){
									$_SESSION['postdegreeval']=$HTTP_POST_VARS['post_degree_val'];
										
											
									}
									
									if(($HTTP_POST_VARS['c_glass_face']!='')&&($isglass==false)){
									 if($HTTP_POST_VARS['c_glass_face_val']==''){
										      
									
										tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_face'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_face_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_face']);$isglass=true;
									}
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)){
							          if($HTTP_POST_VARS['c_glass_a_val']==''){
										      tep_session_destroy();
										
										                      }
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_a_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_a']);$isglass=true; 
									}	
									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)){
									         if($HTTP_POST_VARS['c_glass_b_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_b_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_b']); $isglass=true;
									}
									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_c_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_c_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_c']);$isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_d_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_d_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_d']);$isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
										
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d_light']);
											 $isglass=true; 
									}
									
									if(($HTTP_POST_VARS['c_glass_adjustable_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_a'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_a'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_a_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_a']);$isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_adjustable_b']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_b'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_b'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_b_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_b']);$isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_adjustable_c']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_c'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_c'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_c_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_c']);$isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_adjustable_d']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_d'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_d'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_d_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_d']);$isglass=true; 
									}	
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}

									
									
								}
								//for ep36 custom product
								if($HTTP_POST_VARS['product_type']=='EP36'){
									
									if($HTTP_POST_VARS['rostedglass_val']!='' || $HTTP_POST_VARS['rostedglass_id']!=''){
									       $_SESSION['roastedglass']=$HTTP_POST_VARS['rostedglass_val'];
                                   $_SESSION['roastedglass_id']=$HTTP_POST_VARS['rostedglass_id'];									
									   }
									
									
									
									
																	
                  //left end panel and right end panel
                  if(($HTTP_POST_VARS['c_glass_right_val_ep36']!='')){
                        if($HTTP_POST_VARS['c_glass_right_val_ep36']==''){
                          tep_session_destroy();
                        }
                      $_SESSION['rightendpanelval_ep36']=$HTTP_POST_VARS['c_glass_right_val_ep36'];
                     }
                     if(($HTTP_POST_VARS['c_glass_left_val_ep36']!='')){
                       if($HTTP_POST_VARS['c_glass_left_val_ep36']==''){
                          tep_session_destroy();
                        }
                      $_SESSION['leftendpanelval_ep36']=$HTTP_POST_VARS['c_glass_left_val_ep36'];
                     }
									
									
									
									
									
									
									
									
									//corner post
									if(($HTTP_POST_VARS['post_type_val']!='')){
									$_SESSION['posttypeval']=$HTTP_POST_VARS['post_type_val'];
										
											
									}
									
									
									
									//corner post
									if(($HTTP_POST_VARS['post_degree_val']!='')){
									$_SESSION['postdegreeval']=$HTTP_POST_VARS['post_degree_val'];
										
											
									}
									
									//left post
									if(($HTTP_POST_VARS['c_right_post']!='')&&($isglass==false)){
									      if($HTTP_POST_VARS['c_right_post_val']==''){
										      tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_right_post'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_right_post_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_right_post_mult']);									
											   $k++; 
											   unset($HTTP_POST_VARS['c_right_post']);$isglass=true;
								     }
									 //right post
									   if(($HTTP_POST_VARS['c_left_post']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_left_post_val']==''){
										      tep_session_destroy();
										    }
											 $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_left_post'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_left_post_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_left_post_mult']);									
											 $k++; unset($HTTP_POST_VARS['c_left_post']);$isglass=true;
									   }
									//center post
									if(($HTTP_POST_VARS['c_center1_post']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_center1_post_val']==''){
										      tep_session_destroy();
										    }
											 $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_center1_post'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_center1_post_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_center1_post_mult']);									
											 $k++; unset($HTTP_POST_VARS['c_center1_post']);$isglass=true;
									   }
									   
									   //center2 post
									if(($HTTP_POST_VARS['c_center2_post']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_center2_post_val']==''){
										      tep_session_destroy();
										    }
											 $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_center2_post'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_center2_post_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_center2_post_mult']);									
											 $k++; unset($HTTP_POST_VARS['c_center2_post']);$isglass=true;
									   }
									   
									    //corner post
									if(($HTTP_POST_VARS['c_corner_post']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_corner_post_val']==''){
										      tep_session_destroy();
										    }
											 $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_corner_post'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_corner_post_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_corner_post_mult']);									
											 $k++; unset($HTTP_POST_VARS['c_corner_post']);$isglass=true;
									   }
									   
									   
									    //Flange Cover
									if(($HTTP_POST_VARS['c_flange_cover']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_flange_cover_val']==''){
										      tep_session_destroy();
										    }
											 $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_flange_cover'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_flange_cover_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_flange_cover_mult']);									
											 $k++; unset($HTTP_POST_VARS['c_flange_cover']);$isglass=true;
									   }
									
/*
									if(($HTTP_POST_VARS['c_glass_right']!='')&&($isglass==false)){
									      if($HTTP_POST_VARS['c_glass_right_val']==''){
										      tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_right'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_right_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_right_mult']);									
											   $k++; 
											   unset($HTTP_POST_VARS['c_glass_right']);$isglass=true;
								     }
									   if(($HTTP_POST_VARS['c_glass_left']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_left_val']==''){
										      tep_session_destroy();
										    }
											 $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_left'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_left_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_left_mult']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_left']);$isglass=true;
									   }
									 */  

									 /*  
									 if($HTTP_POST_VARS['c_glass_right']!=''){
									      
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_right'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_right_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_right_mult']);									
											   $k++; 
											   unset($HTTP_POST_VARS['c_glass_right']);$isglass=true;
								     }
									   if($HTTP_POST_VARS['c_glass_left']!=''){
									     
										    
											 $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_left'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post_val']." ".$HTTP_POST_VARS['c_glass_left_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_left_mult']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_left']);$isglass=true;
									   }
										*/

									   
									if(($HTTP_POST_VARS['c_glass_face']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_face_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_face'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_face_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_face']);$isglass=true;
									}
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_a_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_a_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_a']);$isglass=true; 
									}	
									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_b_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_b_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_b']); $isglass=true;
									}
									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_c_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_c_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_c']);$isglass=true; 
									}	if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_d_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_d_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_d']);$isglass=true; 
									}	if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_adjustable_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_a'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_a'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_a_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_a']);$isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_adjustable_b']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_b'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_b'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_b_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_b']);$isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_adjustable_c']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_c'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_c'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_c_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_c']);$isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_adjustable_d']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_d'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_d'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_d_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_adjustable_d']);$isglass=true; 
									}
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}	
									
								}
								
								//for es31 custom product
								if($HTTP_POST_VARS['product_type']=='ES31'){
									
									
									if(($HTTP_POST_VARS['c_glass_face']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_face_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_face'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_face_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_face']);$isglass=true;
									}
									
									
									
																				
                  //left end panel and right end panel
                  if(($HTTP_POST_VARS['c_glass_right_val_es31']!='')){
                        if($HTTP_POST_VARS['c_glass_right_val_es31']==''){
                          tep_session_destroy();
                        }
                      $_SESSION['rightendpanelval_es31']=$HTTP_POST_VARS['c_glass_right_val_es31'];
                     }
                     if(($HTTP_POST_VARS['c_glass_left_val_es31']!='')){
                       if($HTTP_POST_VARS['c_glass_left_val_es31']==''){
                          tep_session_destroy();
                        }
                      $_SESSION['leftendpanelval_es31']=$HTTP_POST_VARS['c_glass_left_val_es31'];
                     }
						
									
									
									
									
									
									
									
									
									//corner post
									if(($HTTP_POST_VARS['post_type_val']!='')){
									$_SESSION['posttypeval']=$HTTP_POST_VARS['post_type_val'];
										
											
									}
									
									//corner post
									if(($HTTP_POST_VARS['post_degree_val']!='')){
									$_SESSION['postdegreeval']=$HTTP_POST_VARS['post_degree_val'];
										
											
									}
									
									
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_a_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_a_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_a']);$isglass=true; 
									}	
									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_b_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_b_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_b']); $isglass=true;
									}
									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_c_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_c_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_c']);$isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_d_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_d_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_d']);$isglass=true; 
									}	if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d_light']);
											 $isglass=true; 
									}
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}	
									
								}
								
								//for es40 custom product
								if($HTTP_POST_VARS['product_type']=='ES40'){
									
									
									if(($HTTP_POST_VARS['c_glass_face']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_face_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_face'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_face_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_face']);$isglass=true;
									}
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_a_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_a_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_a']);$isglass=true; 
									}	
									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_b_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_b_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_b']); $isglass=true;
									}
									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_c_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_c_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_c']);$isglass=true; 
									}	if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_d_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_d_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_d']);$isglass=true; 
									}	if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d_light']);
											 $isglass=true; 
									}
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}	
									
								}
								//for es67 custom product
								if($HTTP_POST_VARS['product_type']=='ES67'){
									
									
									if(($HTTP_POST_VARS['c_glass_face']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_face_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_face'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_face_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_face']);$isglass=true;
									}
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_a_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_a_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_a']);$isglass=true; 
									}	
									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_b_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_b_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_b']); $isglass=true;
									}
									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_c_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_c_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_c']);$isglass=true; 
									}	if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_d_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_d_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_d']);$isglass=true; 
									}	if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d_light']);
											 $isglass=true; 
									}
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}	
									
								}
								//for es73 custom product
								if($HTTP_POST_VARS['product_type']=='ES73'){
									
									
									if(($HTTP_POST_VARS['c_glass_face']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_face_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_face'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_face_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_face']);$isglass=true;
									}
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_a_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_a_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_a']);$isglass=true; 
									}	
									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_b_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_b_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_b']); $isglass=true;
									}
									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_c_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_c_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_c']);$isglass=true; 
									}	if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)){
									if($HTTP_POST_VARS['c_glass_d_val']==''){
										      tep_session_destroy();
										}
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_d_mult']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_d']);$isglass=true; 
									}	if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d_light']);
											 $isglass=true; 
									}
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}	
									
								}
								
                //for ep11 and ep12 custom product
                if($HTTP_POST_VARS['product_type']=='EP11'||$HTTP_POST_VARS['product_type']=='EP12'){
                  $postheight="";
                  if($HTTP_POST_VARS['c_glass_post_val']!=""){
                  
                        $postheight1=$HTTP_POST_VARS['c_glass_post_val'];
                        $postheight=$HTTP_POST_VARS['product_type']." ".$postheight1." ".$HTTP_POST_VARS['c_glass_face_val'];
                  }else{
                  
                    $postheight1=" ";
                    $postheight=$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_face_val'];
                  }
                  
                  //corner post
                  if(($HTTP_POST_VARS['post_type_val']!='')){
                  $_SESSION['posttypeval']=$HTTP_POST_VARS['post_type_val'];
                    
                      
                  }
                  
                  //corner post
                  if(($HTTP_POST_VARS['post_degree_val']!='')){
                  $_SESSION['postdegreeval']=$HTTP_POST_VARS['post_degree_val'];
                    
                      
                  }
                  
                  
                  if($HTTP_POST_VARS['c_glass_adjustable_a_val']!=""){
                  
                        $makeadjustable=$HTTP_POST_VARS['c_glass_adjustable_a_val'];
                        
                        }
                  if(($HTTP_POST_VARS['c_glass_face']!='')&&($isglass==false)){
                  if($HTTP_POST_VARS['c_glass_face_val']==''){
                          tep_session_destroy();
                    }
                      $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_face'],'val'=>$HTTP_POST_VARS['product_type']." ".$postheight1." ".$HTTP_POST_VARS['c_glass_face_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);                 
                       $k++; unset($HTTP_POST_VARS['c_glass_face']);$isglass=true;
                  } 
                  
                  
                  //left end panel and right end panel
                  if(($HTTP_POST_VARS['c_glass_right_val_ep11']!='')){
                        if($HTTP_POST_VARS['c_glass_right_val_ep11']==''){
                          tep_session_destroy();
                        }
                      $_SESSION['rightendpanelval_ep11']=$HTTP_POST_VARS['c_glass_right_val_ep11'];
                     }
                     if(($HTTP_POST_VARS['c_glass_left_val_ep11']!='')){
                       if($HTTP_POST_VARS['c_glass_left_val_ep11']==''){
                          tep_session_destroy();
                        }
                      $_SESSION['leftendpanelval_ep11']=$HTTP_POST_VARS['c_glass_left_val_ep11'];
                     }
                  
                  if(($HTTP_POST_VARS['c_glass_right_val_ep12']!='')){
                        if($HTTP_POST_VARS['c_glass_right_val_ep12']==''){
                          tep_session_destroy();
                        }
                      $_SESSION['rightendpanelval_ep12']=$HTTP_POST_VARS['c_glass_right_val_ep12'];
                     }
                     if(($HTTP_POST_VARS['c_glass_left_val_ep12']!='')){
                       if($HTTP_POST_VARS['c_glass_left_val_ep12']==''){
                          tep_session_destroy();
                        }
                      $_SESSION['leftendpanelval_ep12']=$HTTP_POST_VARS['c_glass_left_val_ep12'];
                     }
                  
                  
                  
                  
                  
                  if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)){
                  if($HTTP_POST_VARS['c_glass_a_val']==''){
                          tep_session_destroy();
                    }
                      $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']." ".$postheight1." ".$HTTP_POST_VARS['c_glass_a_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_a_mult']);                 
                       $k++;unset($HTTP_POST_VARS['c_glass_a']);$isglass=true; 
                  }if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
                      $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);                  
                       $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
                       $isglass=true; 
                  }
                  if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)){
                  if($HTTP_POST_VARS['c_glass_b_val']==''){
                          tep_session_destroy();
                    }
                      $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']." ".$postheight1." ".$HTTP_POST_VARS['c_glass_b_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_b_mult']);                 
                       $k++;unset($HTTP_POST_VARS['c_glass_b']); $isglass=true;
                  }if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){
                      $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);                  
                       $k++; unset($HTTP_POST_VARS['c_glass_b_light']);
                       $isglass=true; 
                  }
                  if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)){
                  if($HTTP_POST_VARS['c_glass_c_val']==''){
                          tep_session_destroy();
                    }
                      $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']." ".$postheight1." ".$HTTP_POST_VARS['c_glass_c_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_c_mult']);                 
                       $k++;unset($HTTP_POST_VARS['c_glass_c']);$isglass=true; 
                  }
                  if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_light'])){
                      $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);                  
                       $k++; unset($HTTP_POST_VARS['c_glass_c_light']);
                       $isglass=true; 
                  }if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)){
                  if($HTTP_POST_VARS['c_glass_d_val']==''){
                          tep_session_destroy();
                    }
                      $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']." ".$postheight1." ".$HTTP_POST_VARS['c_glass_d_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'wt'=>$HTTP_POST_VARS['c_glass_d_mult']);                 
                       $k++;unset($HTTP_POST_VARS['c_glass_d']);$isglass=true; 
                  }if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_light'])){
                      $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);                  
                       $k++; unset($HTTP_POST_VARS['c_glass_d_light']);
                       $isglass=true; 
                  }if(($HTTP_POST_VARS['c_glass_adjustable_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_a'])){
                  
                      $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_a'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_a_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);                  
                       $k++;unset($HTTP_POST_VARS['c_glass_adjustable_a']);$isglass=true; 
                  }
                  if(($HTTP_POST_VARS['c_glass_adjustable_b']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_b'])){
                  
                      $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_b'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_b_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);                  
                       $k++;unset($HTTP_POST_VARS['c_glass_adjustable_b']);$isglass=true; 
                  }if(($HTTP_POST_VARS['c_glass_adjustable_c']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_c'])){
                  
                      $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_c'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_c_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);                  
                       $k++;unset($HTTP_POST_VARS['c_glass_adjustable_c']);$isglass=true; 
                  }if(($HTTP_POST_VARS['c_glass_adjustable_d']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_d'])){
                  
                      $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_d'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_d_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);                  
                       $k++;unset($HTTP_POST_VARS['c_glass_adjustable_d']);$isglass=true; 
                  }
                  
                  
                  
                  
                  
                  
                    
                  
                  
                  
                  if($isglass==false){
                    //hererer
                    //if (in_array($p_ids, $_SESSION['product_custom'][$k])) 
                    // if(array_search($p_ids, array_column($_SESSION['product_custom'][$k], 'id')) !== false) { 
                      
                      // } 
                    // else
                      // { 
                      $_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type']." ".$postheight1,'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']); 
                      // }
                    
                  //echo'<pre><b style="color:red;">';print_r($_SESSION['product_custom'][$k]);echo'<br />';
                    $k++;
                  }                                 
                }
								//for es29
								if($HTTP_POST_VARS['product_type']=='ES29'||$HTTP_POST_VARS['product_type']=='ES82'||$HTTP_POST_VARS['product_type']=='ES90'||$HTTP_POST_VARS['product_type']=='ES47'||$HTTP_POST_VARS['product_type']=='ES92'||$HTTP_POST_VARS['product_type']=='A-PUSH'){
									
									
									
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; if($HTTP_POST_VARS['product_type']=='ES29'){unset($HTTP_POST_VARS['c_glass_a']);}
											 else{ if($glassa){unset($HTTP_POST_VARS['c_glass_a']);}}
											$glassa=true;
											 $isglass=true; 
									}
									
									
									
									
									
									/*
									if(($HTTP_POST_VARS['c_glass_a_top']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_top'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_top'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val']."/".$HTTP_POST_VARS['right_length']."TG",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_a_top']);unset($HTTP_POST_VARS['c_glass_a']);$isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_a_top']);unset($HTTP_POST_VARS['c_glass_a_light']);$isglass=true; 
									}
									
									
									
									*/
									
									if($HTTP_POST_VARS['product_type']=='ES90'||$HTTP_POST_VARS['product_type']=='ES92'||$HTTP_POST_VARS['product_type']=='ES47')
									{
									if(($HTTP_POST_VARS['c_glass_a_top']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_top'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_top'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val']."/".$HTTP_POST_VARS['right_length']."TG ".$HTTP_POST_VARS['glass_a_top_ext']."",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_a_top']);unset($HTTP_POST_VARS['c_glass_a']);$isglass=true; 
									}

									
									if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT ".$HTTP_POST_VARS['glass_a_top_ext']."",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_a_top']);unset($HTTP_POST_VARS['c_glass_a_light']);$isglass=true; 
									}

													
									}
									else{
									if(($HTTP_POST_VARS['c_glass_a_top']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_top'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_top'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val']."/".$HTTP_POST_VARS['right_length']."TG",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_a_top']);unset($HTTP_POST_VARS['c_glass_a']);$isglass=true; 
									}	
									
									
									if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_a_top']);unset($HTTP_POST_VARS['c_glass_a_light']);$isglass=true; 
									}
									
									
									
									}
									
									
									
									
									
									
									
									
									//tube
									if(($HTTP_POST_VARS['c_glass_a_tube']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_tube'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_tube'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_tube']."BACK HORIZONTAL TUBE",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_a_top']);unset($HTTP_POST_VARS['c_glass_a_tube']);$isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);	//unset($HTTP_POST_VARS['c_glass_a']);								
											 $k++; if($HTTP_POST_VARS['product_type']=='ES29'){unset($HTTP_POST_VARS['c_glass_b']);}
											 else{ if($glassb){unset($HTTP_POST_VARS['c_glass_b']);}}
											$glassb=true;
											 $isglass=true;
									}
									
									
									
									
									
									/*
									if(($HTTP_POST_VARS['c_glass_b_top']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_top'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_top'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val']."/".$HTTP_POST_VARS['right_length']."TG",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_b_top']);unset($HTTP_POST_VARS['c_glass_b']); $isglass=true;
									}if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_b_top']);unset($HTTP_POST_VARS['c_glass_b_light']);$isglass=true; 
									}
									*/
									
									
								if($HTTP_POST_VARS['product_type']=='ES90'||$HTTP_POST_VARS['product_type']=='ES92'||$HTTP_POST_VARS['product_type']=='ES47')
									{
									if(($HTTP_POST_VARS['c_glass_b_top']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_top'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_top'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val']."/".$HTTP_POST_VARS['right_length']."TG ".$HTTP_POST_VARS['glass_b_top_ext']."",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_b_top']);unset($HTTP_POST_VARS['c_glass_b']); $isglass=true;
									}	
									
									
									if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT ".$HTTP_POST_VARS['glass_b_top_ext']."",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_b_top']);unset($HTTP_POST_VARS['c_glass_b_light']);$isglass=true; 
									}
									}
									else{
									if(($HTTP_POST_VARS['c_glass_b_top']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_top'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_top'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val']."/".$HTTP_POST_VARS['right_length']."TG",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_b_top']);unset($HTTP_POST_VARS['c_glass_b']); $isglass=true;
									}	
									
									
									
									if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_b_top']);unset($HTTP_POST_VARS['c_glass_b_light']);$isglass=true; 
									}
									}
									
									
									
									
									
									
									//tube
									if(($HTTP_POST_VARS['c_glass_b_tube']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_tube'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_tube'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_tube']."BACK HORIZONTAL TUBE",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_b_top']);unset($HTTP_POST_VARS['c_glass_b_tube']);$isglass=true; 
									}
									
									
									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; if($HTTP_POST_VARS['product_type']=='ES29'){unset($HTTP_POST_VARS['c_glass_c']);}
											 else{ if($glassc){unset($HTTP_POST_VARS['c_glass_c']);}}
											$glassc=true;
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_c_top']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_top'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_top'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val']."/".$HTTP_POST_VARS['right_length']."TG",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_c_top']);unset($HTTP_POST_VARS['c_glass_c']);$isglass=true; 
									}	
									if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_c_top']);unset($HTTP_POST_VARS['c_glass_c_light']);$isglass=true; 
									}
									//tube
									if(($HTTP_POST_VARS['c_glass_c_tube']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_tube'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_tube'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_tube']."BACK HORIZONTAL TUBE",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_c_top']);unset($HTTP_POST_VARS['c_glass_c_tube']);$isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; if($HTTP_POST_VARS['product_type']=='ES29'){unset($HTTP_POST_VARS['c_glass_d']);}
											 else{ if($glassd){unset($HTTP_POST_VARS['c_glass_d']);}}
											$glassd=true;
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_d_top']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_top'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_top'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val']."/".$HTTP_POST_VARS['right_length']."TG",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_d_top']);unset($HTTP_POST_VARS['c_glass_d']);$isglass=true; 
									}
									//lyt
									if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_d_top']);unset($HTTP_POST_VARS['c_glass_b_light']);$isglass=true; 
									}
									//tubef
									if(($HTTP_POST_VARS['c_glass_d_tube']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_tube'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_tube'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_tube']."BACK HORIZONTAL TUBE",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_d_top']);unset($HTTP_POST_VARS['c_glass_b_tube']);$isglass=true; 
									}
									
									if(($HTTP_POST_VARS['c_glass_adjustable_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_a'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_a'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_a_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;if($glassmakea){unset($HTTP_POST_VARS['c_glass_adjustable_a']);}$isglass=true;$glassmakea=true; 
									}
									if(($HTTP_POST_VARS['c_glass_adjustable_b']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_b'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_b'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_b_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;if($glassmakeb){unset($HTTP_POST_VARS['c_glass_adjustable_b']);}$isglass=true;$glassmakeb=true; 
									}if(($HTTP_POST_VARS['c_glass_adjustable_c']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_c'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_c'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_c_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;if($glassmakec){unset($HTTP_POST_VARS['c_glass_adjustable_c']);}$isglass=true;$glassmakec=true; 
									}if(($HTTP_POST_VARS['c_glass_adjustable_d']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_adjustable_d'])){
									
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_adjustable_d'],'val'=>$HTTP_POST_VARS['product_type']." ".$HTTP_POST_VARS['c_glass_adjustable_d_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;if($glassmaked){unset($HTTP_POST_VARS['c_glass_adjustable_d']);}$isglass=true;$glassmaked=true; 
									}
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'] ,'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}																	
								}
								// for ed20
								
								//for es29
								if($HTTP_POST_VARS['product_type']=='ED20'){

									$face='';

									if($HTTP_POST_VARS['c_glass_post']!=''){

										$face=$HTTP_POST_VARS['c_glass_post']." ";

									}if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a'])){

											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$face.$HTTP_POST_VARS['c_glass_a_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									

											 $k++; unset($HTTP_POST_VARS['c_glass_a']);

											 $isglass=true; 

									}

									if(($HTTP_POST_VARS['c_glass_a_top']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_top'])){

											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_top'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val']."/".$HTTP_POST_VARS['right_length']."TG",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									

											 $k++;if($start_top_glassa==$nosheleves){ unset($HTTP_POST_VARS['c_glass_a_top']);  }unset($HTTP_POST_VARS['c_glass_a']);$isglass=true; $start_top_glassa++;

									}if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){

											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									

											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);

											 $isglass=true; 

									}	

									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b'])){

											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$face.$HTTP_POST_VARS['c_glass_b_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									

											 $k++; unset($HTTP_POST_VARS['c_glass_b']);

											 $isglass=true;

									}

									if(($HTTP_POST_VARS['c_glass_b_top']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_top'])){

											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_top'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val']."/".$HTTP_POST_VARS['right_length']."TG",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									

											 $k++;if($start_top_glassb==$nosheleves){unset($HTTP_POST_VARS['c_glass_b_top']);  }unset($HTTP_POST_VARS['c_glass_b']); $isglass=true;$start_top_glassb++;

									}if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){

											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									

											 $k++; unset($HTTP_POST_VARS['c_glass_b_light']);

											 $isglass=true; 

									}

									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c'])){

											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$face.$HTTP_POST_VARS['c_glass_c_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									

											 $k++; unset($HTTP_POST_VARS['c_glass_c']);

											 $isglass=true; 

									}

									if(($HTTP_POST_VARS['c_glass_c_top']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_top'])){

											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_top'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val']."/".$HTTP_POST_VARS['right_length']."TG",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									

											 $k++;if($start_top_glassc==$nosheleves){unset($HTTP_POST_VARS['c_glass_c_top']);}unset($HTTP_POST_VARS['c_glass_c']);$start_top_glassc++; $isglass=true; 
                                      
									}if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_light'])){

											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									

											 $k++; unset($HTTP_POST_VARS['c_glass_c_light']);

											 $isglass=true; 

									}	if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d'])){

											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$face.$HTTP_POST_VARS['c_glass_d_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									

											 $k++; unset($HTTP_POST_VARS['c_glass_d']);

											 $isglass=true; 

									}if(($HTTP_POST_VARS['c_glass_d_top']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_top']))
									{
                                     $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_top'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val']."/".$HTTP_POST_VARS['right_length']."TG",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									

									 $k++;if($start_top_glassc==$nosheleves){unset($HTTP_POST_VARS['c_glass_d_top']);}unset($HTTP_POST_VARS['c_glass_d']);$start_top_glassc++; $isglass=true; 

									}if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_light'])){

											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									

											 $k++; unset($HTTP_POST_VARS['c_glass_d_light']);

											 $isglass=true; 

									}

									if($isglass==false){
                                   $_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_post']."-".$HTTP_POST_VARS['counter'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);

										$k++;

									}																	

								}
								
								//for es 53
								if($HTTP_POST_VARS['product_type']=='ES53'){
									
									 if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d_light']);
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val']."GL ".$HTTP_POST_VARS['c_glass_round_a_val']." ".$HTTP_POST_VARS['c_glass_round_a']."",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val']."GL ".$HTTP_POST_VARS['c_glass_round_b_val']." ".$HTTP_POST_VARS['c_glass_round_b']."",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b']); 
											 $isglass=true;
									}
									
									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val']."GL ".$HTTP_POST_VARS['c_glass_round_c_val']." ".$HTTP_POST_VARS['c_glass_round_c']."",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val']."GL ".$HTTP_POST_VARS['c_glass_round_d_val']." ".$HTTP_POST_VARS['c_glass_round_d']."",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d']);
											 $isglass=true; 
									}
										
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}																	
								}
								
								if($HTTP_POST_VARS['product_type']=='Heat Lamp'){
									
									 if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."IC",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val']."CL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a']);
											 $isglass=true; 
									}
										
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}																	
								}
								if($HTTP_POST_VARS['product_type']=='Light Bar'){
									
									 if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."IC",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val']."Light Bar",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a']);
											 $isglass=true; 
									}
										
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}																	
								}
								//ORBIT720
								if($HTTP_POST_VARS['product_type']=='ORBIT720'){
									
									 if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a']);
											 $isglass=true; 
									}
										
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}																	
								}
								
								if($HTTP_POST_VARS['product_type']=='B950P'){
									
									 if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a']);
											 $isglass=true; 
									}
										
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}																	
								}
								
								if($HTTP_POST_VARS['product_type']=='EP950'){
									
									 if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a']);
											 $isglass=true; 
									}
										
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}																	
								}
								
								
								
									if($HTTP_POST_VARS['product_type']=='EP6'){
									
									/*
									 if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									/*
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}*/
									if(($HTTP_POST_VARS['c_glass_face']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_face_val']==''){
										      tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_face'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_face_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_mult']);									
											   $k++; unset($HTTP_POST_VARS['c_glass_face']);$isglass=true;
									   }
									   
									 if(($HTTP_POST_VARS['c_glass_right']!='')&&($isglass==false)){
									      if($HTTP_POST_VARS['c_glass_right_val']==''){
										      tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_right'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_right_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_right_mult']);									
											   $k++; 
											   unset($HTTP_POST_VARS['c_glass_right']);$isglass=true;
								     }
									   if(($HTTP_POST_VARS['c_glass_left']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_left_val']==''){
										      tep_session_destroy();
										    }
											 $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_left'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_left_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_left_mult']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_left']);$isglass=true;
									   }   
									   
									   
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a']);
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b']);
											 $isglass=true; 
									}

									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c']);
											 $isglass=true; 
									}	
									
									if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d']);
											 $isglass=true; 
									}
									
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}																	
								}
								
								
								
									if($HTTP_POST_VARS['product_type']=='Ring-EP6'){
									
									/*
									 if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									/*
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}*/
									if(($HTTP_POST_VARS['c_glass_face']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_face_val']==''){
										      tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_face'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_face_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_mult']);									
											   $k++; unset($HTTP_POST_VARS['c_glass_face']);$isglass=true;
									   }
									   
									 if(($HTTP_POST_VARS['c_glass_right']!='')&&($isglass==false)){
									      if($HTTP_POST_VARS['c_glass_right_val']==''){
										      tep_session_destroy();
										    }
											   $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_right'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_right_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_right_mult']);									
											   $k++; 
											   unset($HTTP_POST_VARS['c_glass_right']);$isglass=true;
								     }
									   if(($HTTP_POST_VARS['c_glass_left']!='')&&($isglass==false)){
									     if($HTTP_POST_VARS['c_glass_left_val']==''){
										      tep_session_destroy();
										    }
											 $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_left'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_left_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom'],'frosted'=>$HTTP_POST_VARS['is_frosted'],'wt'=>$HTTP_POST_VARS['c_glass_left_mult']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_left']);$isglass=true;
									   }   
									   
									   
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a']);
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b']);
											 $isglass=true; 
									}

									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c']);
											 $isglass=true; 
									}	
									
									if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d']);
											 $isglass=true; 
									}
									
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}																	
								}
								
								
								
									if($HTTP_POST_VARS['product_type']=='EP7'){
									
									/*
									 if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									/*
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}*/
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($p_ids==$HTTP_POST_VARS['c_glass_a'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a']);
											 $isglass=true; 
									}
										
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>$HTTP_POST_VARS['product_type'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}																	
								}
								
								//for B950 SWIVEL and B950 both
								if(($HTTP_POST_VARS['product_type']=='B950 SWIVEL')||($HTTP_POST_VARS['product_type']=='B950')){
									
									//corner post
									if(($HTTP_POST_VARS['post_type_val']!='')){
									$_SESSION['posttypeval']=$HTTP_POST_VARS['post_type_val'];
										
											
									}
									
									//corner post
									if(($HTTP_POST_VARS['post_degree_val']!='')){
									$_SESSION['postdegreeval']=$HTTP_POST_VARS['post_degree_val'];
										
											
									}
									
									
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>"B950"."-".$HTTP_POST_VARS['c_glass_a_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_a_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_a_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a_light']);
											 $isglass=true; 
									}
									
									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>"B950"."-".$HTTP_POST_VARS['c_glass_b_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b']); 
											 $isglass=true;
									}if(($HTTP_POST_VARS['c_glass_b_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_b_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b_light']);
											 $isglass=true; 
									}
									
									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>"B950"."-".$HTTP_POST_VARS['c_glass_c_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_c_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_c_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c_light']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>"B950"."-".$HTTP_POST_VARS['c_glass_d_val']."GL",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_d_light']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d_light'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d_light'],'val'=>$HTTP_POST_VARS['product_type']."-".$HTTP_POST_VARS['c_glass_d_val_light']."LYT",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d_light']);
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_right']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_right'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_right'],'val'=>"B950"."-g".$HTTP_POST_VARS['c_glass_right_val']."REP",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_right']);
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_left']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_left'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_left'],'val'=>"B950"."-g".$HTTP_POST_VARS['c_glass_left_val']."LEP",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_left']);
											 $isglass=true; 
									}
									
										
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>'B950','qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}																	
								}
								
								
								//for ORBIT360
								if(($HTTP_POST_VARS['product_type']=='ORBIT360')){
									
									
									
									
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>"ORBIT360"."-".$HTTP_POST_VARS['c_glass_a_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a']);
											 $isglass=true; 
									}
									
									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>"ORBIT360"."-".$HTTP_POST_VARS['c_glass_b_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b']); 
											 $isglass=true;
									}
									
									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>"ORBIT360"."-".$HTTP_POST_VARS['c_glass_c_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_c']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>"ORBIT360"."-".$HTTP_POST_VARS['c_glass_d_val']." ",'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_d']);
											 $isglass=true; 
									}
									
									
										
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>'ORBIT360','qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}																	
								}
								
								//for Adjustable-Shelving
								if(($HTTP_POST_VARS['product_type']=='Mid-Shelves')){
									
									if(($HTTP_POST_VARS['c_glass_post_right']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_post_right'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_post_right'],'val'=>"right post"." ".$HTTP_POST_VARS['c_glass_post_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_post']);
											 $isglass=true; 
									}if(($HTTP_POST_VARS['c_glass_post_left']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_post_left'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_post_left'],'val'=>"left post"." ".$HTTP_POST_VARS['c_glass_post_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_post']);
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>"Mid Shelves GL"." ".$HTTP_POST_VARS['c_glass_a_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_a']);
											 $isglass=true; 
									}
									
									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>"Mid Shelves GL"." ".$HTTP_POST_VARS['c_glass_b_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; unset($HTTP_POST_VARS['c_glass_b']); 
											 $isglass=true;
									}
									
									if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>"Mid Shelves GL"." ".$HTTP_POST_VARS['c_glass_c_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_c']);
											 $isglass=true; 
									}
									if(($HTTP_POST_VARS['c_glass_d']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_d'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_d'],'val'=>"Mid Shelves GL"." ".$HTTP_POST_VARS['c_glass_d_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++;unset($HTTP_POST_VARS['c_glass_d']);
											 $isglass=true; 
									}
									
									
										
									if($isglass==false){
										
										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>'Mid Shelves','qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
										$k++;
									}																	
								}
									if(($HTTP_POST_VARS['product_type']=='Adjustable-Shelving')){
									
									
									if(($HTTP_POST_VARS['c_glass_a']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_a'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_a'],'val'=>"SLV GL"." ".$HTTP_POST_VARS['c_glass_a_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; //unset($HTTP_POST_VARS['c_glass_a']);
											 $isglass=true; 
									}
									
									if(($HTTP_POST_VARS['c_glass_b']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_b'])){
											$_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_b'],'val'=>"SLV GL"." ".$HTTP_POST_VARS['c_glass_b_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											 $k++; //unset($HTTP_POST_VARS['c_glass_b']); 
											 $isglass=true;
									}
									
								                  if(($HTTP_POST_VARS['c_glass_c']!='')&&($isglass==false)&&($p_ids==$HTTP_POST_VARS['c_glass_c'])){
								                    $_SESSION['product_custom'][$k]=array('id'=>$HTTP_POST_VARS['c_glass_c'],'val'=>"SLV GL"." ".$HTTP_POST_VARS['c_glass_c_val'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);									
											              $k++;
											              $isglass=true; 
									                }
                									if($isglass==false){
                										$_SESSION['product_custom'][$k]=array('id'=>$p_ids,'val'=>'SLV','qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
                										$k++;
                									}																	
								                }
								              }
              								if(($HTTP_POST_VARS['product_type']=='ALLIN1')&&isset($HTTP_POST_VARS['product_type'])){
              								   $_SESSION['product_custom'][$k]=array('id'=>$_POST['products_id'][0],'val'=>$HTTP_POST_VARS['custom_glass'],'qty'=>1,'custom'=>$HTTP_POST_VARS['is_custom']);
              										$k++;
              								}
							                $_SESSION['totalnocustom']=$k;
                             
  						               // calCulateQuantityQuote($_SESSION['product_custom'],$customer_id);
                              $produts_ids_list=$HTTP_POST_VARS['products_id'];
                              $i=0;  
                             
                               
                              foreach($produts_ids_list as $p_ids) {
                                $attributes = '';
                               //echo'<b style="color:red;"><pre>'; print_r($_SESSION['product_custom'][$i]['id']); echo'<br></b>';
							   
									//$products_id_string = tep_get_uprid($products_id, $attributes);
									$qty=$_SESSION['product_custom'][$i]['qty'];
									

								echo$query_check_itm="SELECT * FROM customers_quote_data WHERE  quote_id='" . $quoteid . "' AND products_id='". $p_ids ."' AND product_val='". $_SESSION['product_custom'][$i]['val'] ."' AND product_frosted='". $_SESSION['product_custom'][$i]['frosted'] ."'";
								$exe_check_itm=mysqli_query($con, $query_check_itm);
								$check_itm=mysqli_fetch_array($exe_check_itm);
								
								$cousttquoiteid=$check_itm['customers_basket_id'];
								//echo'<br />cousttquoiteid=='.$cousttquoiteid.'';
								
								$dbqty=$check_itm['customers_basket_quantity'];
								$newqtyy=$dbqty+$qty;
								if($cousttquoiteid)
								{
								$insertquery="UPDATE `customers_quote_data` SET `customers_basket_quantity`='$newqtyy' WHERE `customers_basket_id`='$cousttquoiteid'";	
								}
								else{
								$insertquery="insert into customers_quote_data (customers_id, quote_id, products_id, customers_basket_quantity, product_val, product_frosted, customers_basket_date_added) values ('" . (int)$customer_id . "', '" . $quoteid . "', '" . $p_ids . "', '" . (int)$qty . "', '" . $_SESSION['product_custom'][$i]['val'] . "', '" . $_SESSION['product_custom'][$i]['frosted'] . "', '" . date('Ymd') . "')";	
								}


					
								

								//print_r($_SESSION['product_custom'][$i]);

								$exe_insert=mysqli_query($con,$insertquery);
									
									
                                  //$cart->add_cart($p_ids, $cart->get_quantity(tep_get_uprid($p_ids, $attributes))+1, $attributes);
                               
                                $i++;
                              }
                         
			
		

?>