<?php
     	  $post_height='';
           $facelengthA='';
           $facelengthB='';
           $facelengthC='';
           $facelengthD='';
           $glass_type='Square';
           $finish_type='SS';
           $flange='0';
           $lightbar='0';
           $endpanel=4;
           $right_end='';
           $left_end='';
           $post_height=$HTTP_GET_VARS['post_height'];
           $facelengthA=$HTTP_GET_VARS['facelengthA'];
           $facelengthB=$HTTP_GET_VARS['facelengthB'];
           $facelengthC=$HTTP_GET_VARS['facelengthC'];
           $facelengthD=$HTTP_GET_VARS['facelengthD'];
           $glass_type=$HTTP_GET_VARS['glass_type'];
           $finish_type=$HTTP_GET_VARS['finish_type'];
           $flange=$HTTP_GET_VARS['flange'];
           $lightbar=$HTTP_GET_VARS['lightbar'];
           $endpanel=$HTTP_GET_VARS['endpanel'];
           $right_end=$HTTP_GET_VARS['right_end'];
           $left_end=$HTTP_GET_VARS['left_end'];
           $msg="";
           $id=$_GET['id'];
           $tp=$_GET['type'];
           $rs=tep_db_query("select * from custom_popup where id='72'and bay='".$tp."'");
           $rw=tep_db_fetch_array($rs);
           $ms=$rw['message'];
           $ms_option=$rw['option_popup'];
           $ms_option1=$rw['opiton1_popup'];
           $ms_post=$rw['post_popup'];
           $ms_left=$rw['left_popup'];
           $ms_right=$rw['right_popup'];
           $ms_face=$rw['face_popup'];
           $ms_adjustable=$rw['adjustable_popup'];
           $ms_cart=$rw['cart_popup'];
           $ms_glass=$rw['glass_popup'];
           $im_id=rand();
           if(isset($_SESSION["scr"])){
               $_SESSION['scr']=$_SESSION['scr']."-".$im_id;
           }else{
               $_SESSION['scr']=$im_id;
           }
           $res=tep_db_query("select * from wt_val order by id desc");//Fetching the popups from database!
           while($row=tep_db_fetch_array($res)){
               $val=$row['val'];
           }
               $wid="31";
             $wid1="29";
?>
<script type="text/javascript">
            var tot1=osc=im_id=img_ajx="";
            var wt=0;
<?php
        if(isset($HTTP_GET_VARS['id'])){
            $product="select count(*) as total from ".TABLE_PRODUCTS." as p, ".TABLE_PRODUCTS_DESCRIPTION." as pd, ".TABLE_PRODUCTS_TO_CATEGORIES." as pc where p.products_id=pd.products_id and pd.products_id=pc.products_id and pc.categories_id=".$HTTP_GET_VARS['id']." and pd.language_id=".(int)$languages_id;
            $product=tep_db_query($product);
            $products=tep_db_fetch_array($product);  
        }
    ?>
            arr_len=<?=$products['total']?>;//defining array length!
            <?php if($category_name!='Ring-EP5'){ ?>
            arr_len=parseInt(arr_len)+7;
    <?php } ?>
                                var product_name_price=new Array(arr_len);//array defined to show the price in bay!
                                product_name_price['EP5-12 Center Brushed Aluminum']=new Array("4603", "177.0000");
                                product_name_price['EP5-12 Center Post Brushed Stainless Steel']=new Array("4607", "186.0000");
                                product_name_price['EP5-12 Center Post Powder Coated Black']=new Array("4611", "186.0000");
								product_name_price['EP5-12 End Post Brushed Aluminum']=new Array("4591", "105.0000");
								product_name_price['EP5-12 End Post Brushed Stainless Steel']=new Array("4595", "114.0000");
								product_name_price['EP5-12 End Post Powder Coated Black']=new Array("4599", "114.0000");
								product_name_price['EP5-18 Center Brushed Aluminum']=new Array("4604", "177.0000");
                                product_name_price['EP5-18 Center Post Brushed Stainless Steel']=new Array("4608", "186.0000");
                                product_name_price['EP5-18 Center Post Powder Coated Black']=new Array("4612", "186.0000");
								product_name_price['EP5-18 End Post Brushed Aluminum']=new Array("4592", "105.0000");
								product_name_price['EP5-18 End Post Brushed Stainless Steel']=new Array("4596", "114.0000");
                                product_name_price['EP5-18 End Post Powder Coated Black']=new Array("4600", "114.0000");
                                product_name_price['EP5-22 Center Brushed Aluminum']=new Array("4605", "177.0000");
                                product_name_price['EP5-22 Center Post Brushed Stainless Steel']=new Array("4609", "186.0000");
                                product_name_price['EP5-22 Center Post Powder Coated Black']=new Array("4613", "186.0000");
								product_name_price['EP5-22 End Post Brushed Aluminum']=new Array("4593", "105.0000");
                                product_name_price['EP5-22 End Post Brushed Stainless Steel']=new Array("4597", "114.0000");
                                product_name_price['EP5-22 End Post Powder Coated Black']=new Array("4601", "114.0000");
								product_name_price['EP5-26 Center Brushed Aluminum']=new Array("4606", "177.0000");
								product_name_price['EP5-26 Center Post Brushed Stainless Steel']=new Array("4610", "195.0000");
                                product_name_price['EP5-26 Center Post Powder Coated Black']=new Array("4614", "195.0000");
								product_name_price['EP5-26 End Post Brushed Aluminum']=new Array("4594", "105.0000");
								product_name_price['EP5-26 End Post Brushed Stainless Steel']=new Array("4598", "121.0000");
								product_name_price['EP5-26 End Post Powder Coated Black']=new Array("4602", "121.0000");
                                product_name_price['EP5-22 90 Degree Post Brushed Stainless Steel']=new Array("654", "186.0000");
                                product_name_price['EP5-22 90 Degree Post Powder Coated Black']=new Array("655", "186.0000");
                                product_name_price['EP5-22 90 Degree Brushed Aluminum']=new Array("656", "177.0000");
                                product_name_price['EP5-22 12" Glass (Radiused Corners)']=new Array("657", "104.0000");
                                product_name_price['EP5-22 18" Glass (Radiused Corners)']=new Array("658", "128.0000");
                                product_name_price['EP5-22 24" Glass (Radiused Corners)']=new Array("659", "150.0000");
                                product_name_price['EP5-22 30" Glass (Radiused Corners)']=new Array("660", "174.0000");
                                product_name_price['EP5-22 36" Glass (Radiused Corners)']=new Array("661", "197.0000");
                                product_name_price['EP5-22 42" Glass (Radiused Corners)']=new Array("662", "222.0000");
                                product_name_price['EP5-22 12" Glass (Squared Corners)']=new Array("663", "61.0000");
                                product_name_price['EP5-22 18" Glass (Squared Corners)']=new Array("664", "83.0000");
                                product_name_price['EP5-22 24" Glass (Squared Corners)']=new Array("665", "104.0000");
                                product_name_price['EP5-22 30" Glass (Squared Corners)']=new Array("666", "124.0000");
                                product_name_price['EP5-22 36" Glass (Squared Corners)']=new Array("667", "147.0000");
                                product_name_price['EP5-22 42" Glass (Squared Corners)']=new Array("668", "168.0000");
                                product_name_price['EP5-18 90 Degree Post Brushed Stainless Steel']=new Array("675", "186.0000");
                                product_name_price['EP5-18 90 Degree Post Powder Coated Black']=new Array("676", "186.0000");
                                product_name_price['EP5-18 90 Degree Brushed Aluminum']=new Array("677", "177.0000");
                                product_name_price['EP5-18 12" Glass (Radiused Corners)']=new Array("678", "93.0000");
                                product_name_price['EP5-18 18" Glass (Radiused Corners)']=new Array("679", "113.0000");
                                product_name_price['EP5-18 24" Glass (Radiused Corners)']=new Array("680", "134.0000");
                                product_name_price['EP5-18 30" Glass (Radiused Corners)']=new Array("681", "154.0000");
                                product_name_price['EP5-18 36" Glass (Radiused Corners)']=new Array("682", "174.0000");
                                product_name_price['EP5-18 42" Glass (Radiused Corners)']=new Array("683", "195.0000");
                                product_name_price['EP5-18 12" Glass (Squared Corners)']=new Array("684", "50.0000");
                                product_name_price['EP5-18 18" Glass (Squared Corners)']=new Array("685", "71.0000");
                                product_name_price['EP5-18 24" Glass (Squared Corners)']=new Array("686", "88.0000");
                                product_name_price['EP5-18 30" Glass (Squared Corners)']=new Array("687", "106.0000");
                                product_name_price['EP5-18 36" Glass (Squared Corners)']=new Array("688", "124.0000");
                                product_name_price['EP5-18 42" Glass (Squared Corners)']=new Array("689", "145.0000");
                                product_name_price['EP5-12 90 Degree Post Brushed Stainless Steel']=new Array("696", "186.0000");
                                product_name_price['EP5-12 90 Degree Post Powder Coated Black']=new Array("697", "186.0000");
                                product_name_price['EP5-12 90 Degree Brushed Aluminum']=new Array("698", "177.0000");
                                product_name_price['EP5-12 12" Glass (Radiused Corners)']=new Array("699", "76.0000");
                                product_name_price['EP5-12 18" Glass (Radiused Corners)']=new Array("700", "93.0000");
                                product_name_price['EP5-12 24" Glass (Radiused Corners)']=new Array("701", "109.0000");
                                product_name_price['EP5-12 30" Glass (Radiused Corners)']=new Array("702", "124.0000");
                                product_name_price['EP5-12 36" Glass (Radiused Corners)']=new Array("703", "140.0000");
                                product_name_price['EP5-12 42" Glass (Radiused Corners)']=new Array("704", "156.0000");
                                product_name_price['EP5-12 12" Glass (Squared Corners)']=new Array("705", "37.0000");
                                product_name_price['EP5-12 18" Glass (Squared Corners)']=new Array("706", "50.0000");
                                product_name_price['EP5-12 24" Glass (Squared Corners)']=new Array("707", "65.0000");
                                product_name_price['EP5-12 30" Glass (Squared Corners)']=new Array("708", "81.0000");
                                product_name_price['EP5-12 36" Glass (Squared Corners)']=new Array("709", "94.0000");
                                product_name_price['EP5-12 42" Glass (Squared Corners)']=new Array("710", "108.0000");
                                product_name_price['Glass Bracket']=new Array("711", "10.0000");
                                product_name_price['ES29 Glass Bracket']=new Array("712", "11.0000");
                                product_name_price['EP5 Drill and Tap']=new Array("729", "18.0000");
                                product_name_price['EP5 Custom Angle Post']=new Array("746", "86.0000");
                                product_name_price['EP5 Glass Rounded Bracket']=new Array("755", "11.0000");
                                product_name_price['EP15-FLANGE COVER 3 PIECES']=new Array("834", "33.0000");
                                product_name_price['EP5-FLANGE COVER 3 PIECES']=new Array("835", "33.0000");
                                product_name_price['EP5-FLANGE COVER 1 PIECE']=new Array("836", "11.0000");
                                product_name_price['EP15-FLANGE COVER 2 PIECES']=new Array("837", "22.0000");
                                product_name_price['EP5-FLANGE COVER 5 PIECES']=new Array("840", "55.0000");
                                product_name_price['EP5-FLANGE COVER 4 PIECES']=new Array("841", "44.0000");
                                product_name_price['EP5-FLANGE COVER 6 PIECES']=new Array("842", "66.0000");
                                product_name_price['EP5 Nylon tipped Stainless set screw']=new Array("924", "2.0000");
                                product_name_price['EP5 Nylon White set screw']=new Array("925", "2.0000");
                                product_name_price['EP5 Clip Mounting Screw']=new Array("1388", "2.0000");
                                product_name_price['EP5 SS Flange']=new Array("1392", "8.0000");
                                product_name_price['EP5 AL Flange']=new Array("1393", "8.0000");
                                product_name_price['EP5 BL Flange']=new Array("1394", "8.0000");
                                product_name_price['EP11-FLANGE COVER 1 PIECE']=new Array("1427", "11.0000");
                                product_name_price['EP5-12 3-way Post Brushed Stainless Steel']=new Array("1428", "108.0000");
                                product_name_price['EP5-22 3-way Post Brushed Stainless Steel']=new Array("1429", "108.0000");
                                product_name_price['EP5-18 3-way Post Brushed Stainless Steel']=new Array("1430", "108.0000");
                                product_name_price['EP5-12 3-way Post Brushed Aluminum']=new Array("1431", "99.0000");
                                product_name_price['EP5-18 3-way Post Brushed Aluminum']=new Array("1432", "99.0000");
                                product_name_price['EP5-22 3-way Post Brushed Aluminum']=new Array("1433", "99.0000");
                                product_name_price['EP5-12 3-way Post Powder Coated Black']=new Array("1434", "108.0000");
                                product_name_price['EP5-18 3-way Post Powder Coated Black']=new Array("1435", "108.0000");
                                product_name_price['EP5-22 3-way Post Powder Coated Black']=new Array("1436", "108.0000");
                                product_name_price['EP5-FLANGE COVER 1 PIECE']=new Array("1448", "11.0000");
                                product_name_price['EP5-FLANGE COVER 1 PIECES']=new Array("1449", "11.0000");
                                product_name_price['Ring-EP5-UNDER COUNTER FLANGE 1 PIECE']=new Array("10623", "65.0000");
                                product_name_price['EP5-26 3-way Post Brushed Aluminum']=new Array("2460", "99.0000");
                                product_name_price['EP5-26 90 Degree Brushed Aluminum']=new Array("2461", "177.0000");
                                product_name_price['EP5-26 12" Glass (Radiused Corners)']=new Array("2463", "114.0000");
                                product_name_price['EP5-26 42" Glass (Radiused Corners)']=new Array("2464", "234.0000");
                                product_name_price['EP5-26 24" Glass (Radiused Corners)']=new Array("2466", "168.0000");
                                product_name_price['EP5-26 3-way Post Brushed Stainless Steel']=new Array("2467", "119.0000");
                                product_name_price['EP5-26 30" Glass (Radiused Corners)']=new Array("2468", "195.0000");
                                product_name_price['EP5-26 90 Degree Post Brushed Stainless Steel']=new Array("2469", "195.0000");
                                product_name_price['EP5-26 36" Glass (Radiused Corners)']=new Array("2470", "222.0000");
                                product_name_price['EP5-26 12" Glass (Squared Corners)']=new Array("2474", "71.0000");
                                product_name_price['EP5-26 18" Glass (Squared Corners)']=new Array("2475", "95.0000");
                                product_name_price['EP5-26 24" Glass (Squared Corners)']=new Array("2476", "119.0000");
                                product_name_price['EP5-26 30" Glass (Squared Corners)']=new Array("2477", "142.0000");
                                product_name_price['EP5-26 36" Glass (Squared Corners)']=new Array("2478", "184.0000");
                                product_name_price['EP5-26 42" Glass (Squared Corners)']=new Array("2479", "192.0000");
                                product_name_price['EP5-26 18" Glass (Radiused Corners)']=new Array("2480", "141.0000");
                                product_name_price['EP5-26 3-way Post Powder Coated Black']=new Array("3065", "119.0000");
                                product_name_price['EP5-26 90 Degree Post Powder Coated Black']=new Array("3068", "95.0000");
                                product_name_price['EP5-12LYT']=new Array("4143", "73.0000");
                                product_name_price['EP5-18LYT']=new Array("4144", "109.0000");
                                product_name_price['EP5-24LYT']=new Array("4145", "146.0000");
                                product_name_price['EP5-30LYT']=new Array("4146", "182.0000");
                                product_name_price['EP5-36LYT']=new Array("4147", "218.0000");
                                product_name_price['EP5-42LYT']=new Array("4148", "255.0000");
                                product_name_price['EP5-48LYT']=new Array("4149", "291.0000");
                                product_name_price['EP5 End Cap']=new Array("4236", "5.0000");
                                product_name_price['EP5 WALL MOUNT']=new Array("4258", "20.0000");
                                product_name_price['EP5-ROSTEDGL']=new Array("4358", "62.5000");
                                product_name_price['EP5 Glass Bracket']=new Array("4365", "11.0000");
                                product_name_price['EP5 Adjustable Brackets (Pairs)']=new Array("4372", "182.0000");
                                product_name_price['EP5-12 48" Glass (Radiused Corners)']=new Array("4554", "250.0000");
                                product_name_price['EP5-12 48" Glass (Squared Corners)']=new Array("4555", "219.0000");
                                product_name_price['EP5-12 54" Glass (Radiused Corners)']=new Array("4556", "275.0000");
                                product_name_price['EP5-12 54" Glass (Squared Corners)']=new Array("4557", "245.0000");
                                product_name_price['EP5-18 48" Glass (Radiused Corners)']=new Array("4558", "318.0000");
                                product_name_price['EP5-18 48" Glass (Squared Corners)']=new Array("4559", "288.0000");
                                product_name_price['EP5-18 54" Glass (Radiused Corners)']=new Array("4560", "351.0000");
                                product_name_price['EP5-18 54" Glass (Squared Corners)']=new Array("4561", "321.0000");
                                product_name_price['EP5-22 48" Glass (Radiused Corners)']=new Array("4562", "372.0000");
                                product_name_price['EP5-22 48" Glass (Squared Corners)']=new Array("4563", "341.0000");
                                product_name_price['EP5-22 54" Glass (Radiused Corners)']=new Array("4564", "412.0000");
                                product_name_price['EP5-22 54" Glass (Squared Corners)']=new Array("4565", "381.0000");
                                product_name_price['EP5-26 48" Glass (Radiused Corners)']=new Array("4566", "439.0000");
                                product_name_price['EP5-26 48" Glass (Squared Corners)']=new Array("4567", "409.0000");
                                product_name_price['EP5-26 54" Glass (Radiused Corners)']=new Array("4568", "487.0000");
                                product_name_price['EP5-26 54" Glass (Squared Corners)']=new Array("4569", "456.0000");
                                product_name_price['EP5-48LYT']=new Array("4570", "291.0000");
                                product_name_price['EP5-54LYT']=new Array("4571", "327.0000");
                                product_name_price['EP5 Glass Ring Bracket']=new Array("4584", "36.0000");
                                product_name_price['EP5 Glass Ring Spacer']=new Array("4585", "10.0000");
								product_name_price['EP5-12 12" Glass 2" Arc (Radiused Corners)']=new Array("7368", "376.0000");
                                product_name_price['EP5-12 12" Glass 2" Arc (Squared Corners)']=new Array("7369", "337.0000");
                                product_name_price['EP5-12 18" Glass 2" Arc (Radiused Corners)']=new Array("7370", "393.0000");
                                product_name_price['EP5-12 18" Glass 2" Arc (Squared Corners)']=new Array("7371", "350.0000");
                                product_name_price['EP5-12 24" Glass 2" Arc (Radiused Corners)']=new Array("7372", "409.0000");
                                product_name_price['EP5-12 24" Glass 2" Arc (Squared Corners)']=new Array("7373", "365.0000");
                                product_name_price['EP5-12 30" Glass 2" Arc (Radiused Corners)']=new Array("7374", "424.0000");
                                product_name_price['EP5-12 30" Glass 2" Arc (Squared Corners)']=new Array("7375", "381.0000");
                                product_name_price['EP5-12 36" Glass 2" Arc (Radiused Corners)']=new Array("7376", "440.0000");
                                product_name_price['EP5-12 36" Glass 2" Arc (Squared Corners)']=new Array("7377", "394.0000");
                                product_name_price['EP5-12 42" Glass 2" Arc (Radiused Corners)']=new Array("7378", "456.0000");
                                product_name_price['EP5-12 42" Glass 2" Arc (Squared Corners)']=new Array("7379", "408.0000");
                                product_name_price['EP5-12 48" Glass 2" Arc (Squared Corners)']=new Array("7380", "519.0000");
                                product_name_price['EP5-12 48" Glass 2" Arc (Radiused Corners)']=new Array("7381", "550.0000");
                                product_name_price['EP5-12 54" Glass 2" Arc (Radiused Corners)']=new Array("7382", "575.0000");
                                product_name_price['EP5-12 54" Glass 2" Arc (Squared Corners)']=new Array("7383", "545.0000");
                                product_name_price['EP5-18 12" Glass 4" Arc (Squared Corners)']=new Array("7385", "350.0000");
                                product_name_price['EP5-18 18" Glass 2" Arc (Radiused Corners)']=new Array("7386", "413.0000");
                                product_name_price['EP5-18 18" Glass 2" Arc (Squared Corners)']=new Array("7387", "371.0000");
                                product_name_price['EP5-18 24" Glass 2" Arc (Radiused Corners)']=new Array("7388", "434.0000");
                                product_name_price['EP5-18 24" Glass 2" Arc (Squared Corners)']=new Array("7389", "388.0000");
                                product_name_price['EP5-18 30" Glass 2" Arc (Radiused Corners)']=new Array("7390", "454.0000");
                                product_name_price['EP5-18 30" Glass 2" Arc (Squared Corners)']=new Array("7391", "406.0000");
                                product_name_price['EP5-18 36" Glass 2" Arc (Radiused Corners)']=new Array("7392", "417.0000");
                                product_name_price['EP5-18 12" Glass 4" Arc (Radiused Corners)']=new Array("7393", "393.0000");
                                product_name_price['EP5-18 36" Glass 2" Arc (Squared Corners)']=new Array("7394", "424.0000");
                                product_name_price['EP5-18 42" Glass 2" Arc (Radiused Corners)']=new Array("7395", "495.0000");
                                product_name_price['EP5-18 42" Glass 2" Arc (Squared Corners)']=new Array("7396", "445.0000");
                                product_name_price['EP5-18 48" Glass 2" Arc (Radiused Corners)']=new Array("7397", "618.0000");
                                product_name_price['EP5-18 48" Glass 2" Arc (Squared Corners)']=new Array("7398", "588.0000");
                                product_name_price['EP5-18 54" Glass 2" Arc (Radiused Corners)']=new Array("7399", "651.0000");
                                product_name_price['EP5-18 54" Glass 2" Arc (Squared Corners)']=new Array("7400", "621.0000");
                                product_name_price['EP5-22 12" Glass 2" Arc (Radiused Corners)']=new Array("7401", "404.0000");
                                product_name_price['EP5-22 12" Glass 2" Arc (Squared Corners)']=new Array("7402", "361.0000");
                                product_name_price['EP5-22 18" Glass 2" Arc (Radiused Corners)']=new Array("7403", "428.0000");
                                product_name_price['EP5-22 18" Glass 2" Arc (Squared Corners)']=new Array("7404", "383.0000");
                                product_name_price['EP5-22 24" Glass 2" Arc (Radiused Corners)']=new Array("7405", "450.0000");
                                product_name_price['EP5-22 24" Glass 2" Arc (Squared Corners)']=new Array("7407", "404.0000");
                                product_name_price['EP5-22 30" Glass 2" Arc (Squared Corners)']=new Array("7408", "424.0000");
                                product_name_price['EP5-22 30" Glass 2" Arc (Radiused Corners)']=new Array("7409", "474.0000");
                                product_name_price['EP5-22 36" Glass 2" Arc (Radiused Corners)']=new Array("7410", "497.0000");
                                product_name_price['EP5-22 36" Glass 2" Arc (Squared Corners)']=new Array("7411", "447.0000");
                                product_name_price['EP5-22 42" Glass 2" Arc (Radiused Corners)']=new Array("7412", "522.0000");
                                product_name_price['EP5-22 42" Glass 6" Arc (Squared Corners)']=new Array("7413", "468.0000");
                                product_name_price['EP5-22 48" Glass 2" Arc (Radiused Corners)']=new Array("7414", "672.0000");
                                product_name_price['EP5-22 48" Glass 2" Arc (Squared Corners)']=new Array("7415", "641.0000");
                                product_name_price['EP5-22 54" Glass 2" Arc (Radiused Corners)']=new Array("7416", "712.0000");
                                product_name_price['EP5-22 54" Glass 2" Arc (Squared Corners)']=new Array("7417", "681.0000");
                                product_name_price['EP5-26 12" Glass 2" Arc (Radiused Corners)']=new Array("7418", "414.0000");
                                product_name_price['EP5-26 12" Glass 2" Arc (Squared Corners)']=new Array("7419", "371.0000");
                                product_name_price['EP5-26 18" Glass 2" Arc (Radiused Corners)']=new Array("7420", "441.0000");
                                product_name_price['EP5-26 18" Glass 2" Arc (Squared Corners)']=new Array("7421", "395.0000");
                                product_name_price['EP5-26 24" Glass 2" Arc (Radiused Corners)']=new Array("7422", "468.0000");
                                product_name_price['EP5-26 24" Glass 2" Arc (Squared Corners)']=new Array("7423", "419.0000");
                                product_name_price['EP5-26 30" Glass 2" Arc (Radiused Corners)']=new Array("7424", "495.0000");
                                product_name_price['EP5-26 30" Glass 2" Arc (Squared Corners)']=new Array("7425", "442.0000");
                                product_name_price['EP5-26 36" Glass 2" Arc (Radiused Corners)']=new Array("7426", "522.0000");
                                product_name_price['EP5-26 36" Glass 2" Arc (Squared Corners)']=new Array("7427", "484.0000");
                                product_name_price['EP5-26 42" Glass 2" Arc (Radiused Corners)']=new Array("7428", "534.0000");
                                product_name_price['EP5-26 42" Glass 2" Arc (Squared Corners)']=new Array("7429", "492.0000");
                                product_name_price['EP5-26 48" Glass 2" Arc (Radiused Corners)']=new Array("7430", "739.0000");
                                product_name_price['EP5-26 48" Glass 2" Arc (Squared Corners)']=new Array("7431", "709.0000");
                                product_name_price['EP5-26 54" Glass 2" Arc (Radiused Corners)']=new Array("7432", "787.0000");
                                product_name_price['EP5-26 54" Glass 2" Arc (Squared Corners)']=new Array("7433", "756.0000");
                                product_name_price['EP5-12 12" Glass 4" Arc (Radiused Corners)']=new Array("7434", "376.0000");
                                product_name_price['EP5-12 12" Glass 4" Arc (Squared Corners)']=new Array("7435", "337.0000");
                                product_name_price['EP5-12 18" Glass 4" Arc (Radiused Corners)']=new Array("7436", "393.0000");
                                product_name_price['EP5-12 18" Glass 4" Arc (Squared Corners)']=new Array("7437", "350.0000");
                                product_name_price['EP5-12 24" Glass 4" Arc (Radiused Corners)']=new Array("7438", "409.0000");
                                product_name_price['EP5-12 24" Glass 4" Arc (Squared Corners)']=new Array("7439", "365.0000");
                                product_name_price['EP5-12 30" Glass 4" Arc (Radiused Corners)']=new Array("7440", "424.0000");
                                product_name_price['EP5-12 30" Glass 4" Arc (Squared Corners)']=new Array("7441", "381.0000");
                                product_name_price['EP5-12 36" Glass 4" Arc (Radiused Corners)']=new Array("7442", "440.0000");
                                product_name_price['EP5-12 36" Glass 4" Arc (Squared Corners)']=new Array("7443", "394.0000");
                                product_name_price['EP5-12 42" Glass 4" Arc (Radiused Corners)']=new Array("7444", "456.0000");
                                product_name_price['EP5-12 42" Glass 4" Arc (Squared Corners)']=new Array("7445", "408.0000");
                                product_name_price['EP5-12 48" Glass 4" Arc (Radiused Corners)']=new Array("7446", "550.0000");
                                product_name_price['EP5-12 48" Glass 4" Arc (Radiused Corners)']=new Array("7447", "550.0000");
                                product_name_price['EP5-12 48" Glass 4" Arc (Radiused Corners)']=new Array("7448", "550.0000");
                                product_name_price['EP5-12 48" Glass 4" Arc (Radiused Corners)']=new Array("7449", "550.0000");
                                product_name_price['EP5-12 48" Glass 4" Arc (Squared Corners)']=new Array("7450", "519.0000");
                                product_name_price['EP5-12 54" Glass 4" Arc (Radiused Corners)']=new Array("7451", "575.0000");
                                product_name_price['EP5-12 54" Glass 2" Arc (Squared Corners)']=new Array("7452", "545.0000");
                                product_name_price['EP5-18 18" Glass 4" Arc (Radiused Corners)']=new Array("7454", "413.0000");
                                product_name_price['EP5-18 18" Glass 4" Arc (Squared Corners)']=new Array("7455", "371.0000");
                                product_name_price['EP5-18 24" Glass 4" Arc (Radiused Corners)']=new Array("7456", "434.0000");
                                product_name_price['EP5-18 24" Glass 4" Arc (Squared Corners)']=new Array("7457", "388.0000");
                                product_name_price['EP5-18 30" Glass 4" Arc (Radiused Corners)']=new Array("7458", "454.0000");
                                product_name_price['EP5-18 30" Glass 4" Arc (Squared Corners)']=new Array("7459", "406.0000");
                                product_name_price['EP5-18 36" Glass 4" Arc (Radiused Corners)']=new Array("7460", "417.0000");
                                product_name_price['EP5-18 36" Glass 4" Arc (Squared Corners)']=new Array("7461", "424.0000");
                                product_name_price['EP5-18 42" Glass 4" Arc (Radiused Corners)']=new Array("7462", "495.0000");
                                product_name_price['EP5-18 42" Glass 4" Arc (Squared Corners)']=new Array("7463", "445.0000");
                                product_name_price['EP5-18 48" Glass 4" Arc (Radiused Corners)']=new Array("7464", "618.0000");
                                product_name_price['EP5-18 48" Glass 4" Arc (Squared Corners)']=new Array("7465", "588.0000");
                                product_name_price['EP5-18 54" Glass 4" Arc (Radiused Corners)']=new Array("7466", "651.0000");
                                product_name_price['EP5-18 54" Glass 4" Arc (Squared Corners)']=new Array("7467", "621.0000");
                                product_name_price['EP5-22 12" Glass 4" Arc (Radiused Corners)']=new Array("7468", "404.0000");
                                product_name_price['EP5-22 12" Glass 4" Arc (Squared Corners)']=new Array("7469", "361.0000");
                                product_name_price['EP5-22 18" Glass 4" Arc (Radiused Corners)']=new Array("7470", "428.0000");
                                product_name_price['EP5-22 18" Glass 4" Arc (Squared Corners)']=new Array("7471", "418.4275");
                                product_name_price['EP5-22 24" Glass 4" Arc (Radiused Corners)']=new Array("7472", "450.0000");
                                product_name_price['EP5-22 24" Glass 4" Arc (Squared Corners)']=new Array("7473", "404.0000");
                                product_name_price['EP5-22 30" Glass 4" Arc (Radiused Corners)']=new Array("7474", "474.0000");
                                product_name_price['EP5-22 30" Glass 4" Arc (Squared Corners)']=new Array("7475", "424.0000");
                                product_name_price['EP5-12 12" Glass 6" Arc (Radiused Corners)']=new Array("7476", "376.0000");
                                product_name_price['EP5-12 12" Glass 6" Arc (Squared Corners)']=new Array("7477", "337.0000");
                                product_name_price['EP5-12 18" Glass 6" Arc (Radiused Corners)']=new Array("7478", "393.0000");
                                product_name_price['EP5-12 18" Glass 6" Arc (Squared Corners)']=new Array("7479", "350.0000");
                                product_name_price['EP5-12 24" Glass 6" Arc (Radiused Corners)']=new Array("7480", "409.0000");
                                product_name_price['EP5-12 24" Glass 6" Arc (Squared Corners)']=new Array("7481", "365.0000");
                                product_name_price['EP5-12 30" Glass 6" Arc (Radiused Corners)']=new Array("7482", "424.0000");
                                product_name_price['EP5-12 30" Glass 6" Arc (Squared Corners)']=new Array("7483", "381.0000");
                                product_name_price['EP5-12 36" Glass 6" Arc (Radiused Corners)']=new Array("7484", "440.0000");
                                product_name_price['EP5-12 36" Glass 6" Arc (Squared Corners)']=new Array("7485", "394.0000");
                                product_name_price['EP5-12 42" Glass 6" Arc (Radiused Corners)']=new Array("7486", "456.0000");
                                product_name_price['EP5-12 42" Glass 6" Arc (Squared Corners)']=new Array("7487", "408.0000");
                                product_name_price['EP5-12 48" Glass 6" Arc (Radiused Corners)']=new Array("7488", "550.0000");
                                product_name_price['EP5-12 48" Glass 6" Arc (Squared Corners)']=new Array("7489", "519.0000");
                                product_name_price['EP5-12 54" Glass 6" Arc (Radiused Corners)']=new Array("7490", "575.0000");
                                product_name_price['EP5-12 54" Glass 6" Arc (Squared Corners)']=new Array("7491", "545.0000");
                                product_name_price['EP5-18 12" Glass 6" Arc (Radiused Corners)']=new Array("7492", "393.0000");
                                product_name_price['EP5-18 12" Glass 6" Arc (Squared Corners)']=new Array("7493", "350.0000");
                                product_name_price['EP5-18 18" Glass 6" Arc (Radiused Corners)']=new Array("7494", "413.0000");
                                product_name_price['EP5-18 18" Glass 6" Arc (Squared Corners)']=new Array("7495", "371.0000");
                                product_name_price['EP5-18 24" Glass 6" Arc (Radiused Corners)']=new Array("7496", "434.0000");
                                product_name_price['EP5-18 24" Glass 6" Arc (Squared Corners)']=new Array("7497", "388.0000");
                                product_name_price['EP5-18 30" Glass 6" Arc (Radiused Corners)']=new Array("7498", "454.0000");
                                product_name_price['EP5-18 30" Glass 6" Arc (Squared Corners)']=new Array("7499", "406.0000");
                                product_name_price['EP5-18 36" Glass 6" Arc (Radiused Corners)']=new Array("7500", "417.0000");
                                product_name_price['EP5-18 36" Glass 6" Arc (Squared Corners)']=new Array("7501", "424.0000");
                                product_name_price['EP5-18 42" Glass 6" Arc (Radiused Corners)']=new Array("7502", "495.0000");
                                product_name_price['EP5-18 42" Glass 6" Arc (Squared Corners)']=new Array("7503", "445.0000");
                                product_name_price['EP5-18 48" Glass 6" Arc (Radiused Corners)']=new Array("7504", "618.0000");
                                product_name_price['EP5-18 48" Glass 6" Arc (Squared Corners)']=new Array("7505", "588.0000");
                                product_name_price['EP5-18 54" Glass 6" Arc (Radiused Corners)']=new Array("7506", "651.0000");
                                product_name_price['EP5-18 54" Glass 6" Arc (Squared Corners)']=new Array("7507", "621.0000");
                                product_name_price['EP5-22 12" Glass 6" Arc (Radiused Corners)']=new Array("7508", "404.0000");
                                product_name_price['EP5-22 12" Glass 6" Arc (Squared Corners)']=new Array("7509", "361.0000");
                                product_name_price['EP5-22 18" Glass 6" Arc (Radiused Corners)']=new Array("7510", "428.0000");
                                product_name_price['EP5-22 18" Glass 6" Arc (Squared Corners)']=new Array("7511", "383.0000");
                                product_name_price['EP5-22 24" Glass 6" Arc (Radiused Corners)']=new Array("7512", "450.0000");
                                product_name_price['EP5-22 24" Glass 6" Arc (Squared Corners)']=new Array("7513", "404.0000");
                                product_name_price['EP5-22 30" Glass 6" Arc (Radiused Corners)']=new Array("7514", "474.0000");
                                product_name_price['EP5-22 30" Glass 6" Arc (Squared Corners)']=new Array("7515", "424.0000");
                                product_name_price['EP5-22 36" Glass 6" Arc (Radiused Corners)']=new Array("7516", "497.0000");
                                product_name_price['EP5-22 36" Glass 6" Arc (Squared Corners)']=new Array("7517", "447.0000");
                                product_name_price['EP5-22 42" Glass 6" Arc (Radiused Corners)']=new Array("7518", "522.0000");
                                product_name_price['EP5-22 42" Glass 2" Arc (Squared Corners)']=new Array("7519", "468.0000");
                                product_name_price['EP5-22 48" Glass 6" Arc (Radiused Corners)']=new Array("7520", "672.0000");
                                product_name_price['EP5-22 48" Glass 6" Arc (Squared Corners)']=new Array("7521", "641.0000");
                                product_name_price['EP5-22 54" Glass 6" Arc (Radiused Corners)']=new Array("7522", "712.0000");
                                product_name_price['EP5-22 54" Glass 6" Arc (Squared Corners)']=new Array("7523", "681.0000");
                                product_name_price['EP5-26 12" Glass 6" Arc (Radiused Corners)']=new Array("7524", "414.0000");
                                product_name_price['EP5-26 12" Glass 6" Arc (Squared Corners)']=new Array("7525", "371.0000");
                                product_name_price['EP5-26 18" Glass 6" Arc (Radiused Corners)']=new Array("7526", "441.0000");
                                product_name_price['EP5-26 18" Glass 6" Arc (Squared Corners)']=new Array("7527", "395.0000");
                                product_name_price['EP5-26 24" Glass 6" Arc (Radiused Corners)']=new Array("7528", "468.0000");
                                product_name_price['EP5-26 24" Glass 6" Arc (Squared Corners)']=new Array("7529", "419.0000");
                                product_name_price['EP5-26 30" Glass 6" Arc (Radiused Corners)']=new Array("7530", "495.0000");
                                product_name_price['EP5-26 30" Glass 6" Arc (Squared Corners)']=new Array("7531", "442.0000");
                                product_name_price['EP5-26 36" Glass 6" Arc (Radiused Corners)']=new Array("7532", "522.0000");
                                product_name_price['EP5-26 36" Glass 6" Arc (Squared Corners)']=new Array("7533", "484.0000");
                                product_name_price['EP5-26 42" Glass 6" Arc (Radiused Corners)']=new Array("7534", "534.0000");
                                product_name_price['EP5-26 42" Glass 6" Arc (Squared Corners)']=new Array("7535", "492.0000");
                                product_name_price['EP5-26 48" Glass 6" Arc (Radiused Corners)']=new Array("7536", "739.0000");
                                product_name_price['EP5-26 48" Glass 6" Arc (Squared Corners)']=new Array("7537", "709.0000");
                                product_name_price['EP5-26 54" Glass 6" Arc (Radiused Corners)']=new Array("7538", "787.0000");
                                product_name_price['EP5-26 54" Glass 6" Arc (Squared Corners)']=new Array("7539", "756.0000");
                                product_name_price['EP5-12 12" Glass FA 2" Arc (Radiused Corners)']=new Array("7558", "376.0000");
                                product_name_price['EP5-12 12" Glass FA 2" Arc (Squared Corners)']=new Array("7559", "337.0000");
                                product_name_price['EP5-12 12" Glass FA 4" Arc (Radiused Corners)']=new Array("7560", "376.0000");
                                product_name_price['EP5-12 12" Glass FA 4" Arc (Squared Corners)']=new Array("7561", "337.0000");
                                product_name_price['EP5-12 12" Glass FA 6" Arc (Radiused Corners)']=new Array("7562", "376.0000");
                                product_name_price['EP5-12 12" Glass FA 6" Arc (Squared Corners)']=new Array("7563", "337.0000");
                                product_name_price['EP5-12 18" Glass FA 2" Arc (Radiused Corners)']=new Array("7564", "393.0000");
                                product_name_price['EP5-12 18" Glass FA 2" Arc (Squared Corners)']=new Array("7565", "350.0000");
                                product_name_price['EP5-12 18" Glass FA 4" Arc (Radiused Corners)']=new Array("7566", "393.0000");
                                product_name_price['EP5-12 18" Glass FA 4" Arc (Squared Corners)']=new Array("7567", "350.0000");
                                product_name_price['EP5-12 18" Glass FA 6" Arc (Radiused Corners)']=new Array("7568", "393.0000");
                                product_name_price['EP5-12 18" Glass FA 6" Arc (Squared Corners)']=new Array("7569", "350.0000");
                                product_name_price['EP5-12 24" Glass FA 2" Arc (Radiused Corners)']=new Array("7570", "409.0000");
                                product_name_price['EP5-12 24" Glass FA 2" Arc (Squared Corners)']=new Array("7571", "365.0000");
                                product_name_price['EP5-12 24" Glass FA 4" Arc (Radiused Corners)']=new Array("7572", "409.0000");
                                product_name_price['EP5-12 24" Glass FA 4" Arc (Squared Corners)']=new Array("7573", "365.0000");
                                product_name_price['EP5-12 24" Glass FA 6" Arc (Radiused Corners)']=new Array("7574", "409.0000");
                                product_name_price['EP5-12 24" Glass FA 6" Arc (Squared Corners)']=new Array("7575", "365.0000");
                                product_name_price['EP5-12 30" Glass FA 2" Arc (Radiused Corners)']=new Array("7576", "424.0000");
                                product_name_price['EP5-12 30" Glass FA 2" Arc (Squared Corners)']=new Array("7577", "381.0000");
                                product_name_price['EP5-12 30" Glass FA 4" Arc (Radiused Corners)']=new Array("7578", "424.0000");
                                product_name_price['EP5-12 30" Glass FA 4" Arc (Squared Corners)']=new Array("7579", "381.0000");
                                product_name_price['EP5-12 30" Glass FA 6" Arc (Radiused Corners)']=new Array("7580", "424.0000");
                                product_name_price['EP5-12 30" Glass FA 6" Arc (Squared Corners)']=new Array("7581", "381.0000");
                                product_name_price['EP5-12 36" Glass FA 2" Arc (Radiused Corners)']=new Array("7582", "440.0000");
                                product_name_price['EP5-12 36" Glass FA 2" Arc (Squared Corners)']=new Array("7583", "394.0000");
                                product_name_price['EP5-12 36" Glass FA 4" Arc (Radiused Corners)']=new Array("7584", "440.0000");
                                product_name_price['EP5-12 36" Glass FA 4" Arc (Squared Corners)']=new Array("7585", "394.0000");
                                product_name_price['EP5-12 36" Glass FA 6" Arc (Radiused Corners)']=new Array("7586", "440.0000");
                                product_name_price['EP5-12 36" Glass FA 6" Arc (Squared Corners)']=new Array("7587", "394.0000");
                                product_name_price['EP5-12 42" Glass FA 2" Arc (Radiused Corners)']=new Array("7588", "456.0000");
                                product_name_price['EP5-12 42" Glass FA 2" Arc (Squared Corners)']=new Array("7589", "408.0000");
                                product_name_price['EP5-12 42" Glass FA 4" Arc (Radiused Corners)']=new Array("7590", "456.0000");
                                product_name_price['EP5-12 42" Glass FA 4" Arc (Squared Corners)']=new Array("7591", "408.0000");
                                product_name_price['EP5-12 42" Glass FA 6" Arc (Radiused Corners)']=new Array("7592", "456.0000");
                                product_name_price['EP5-12 42" Glass FA 6" Arc (Squared Corners)']=new Array("7593", "408.0000");
                                product_name_price['EP5-12 48" Glass FA 2" Arc (Radiused Corners)']=new Array("7594", "550.0000");
                                product_name_price['EP5-12 48" Glass FA 2" Arc (Squared Corners)']=new Array("7595", "519.0000");
                                product_name_price['EP5-12 48" Glass FA 4" Arc (Radiused Corners)']=new Array("7596", "550.0000");
                                product_name_price['EP5-12 48" Glass FA 4" Arc (Squared Corners)']=new Array("7600", "519.0000");
                                product_name_price['EP5-12 48" Glass FA 6" Arc (Radiused Corners)']=new Array("7601", "550.0000");
                                product_name_price['EP5-12 48" Glass FA 6" Arc (Squared Corners)']=new Array("7602", "519.0000");
                                product_name_price['EP5-12 54" Glass FA 2" Arc (Radiused Corners)']=new Array("7603", "575.0000");
                                product_name_price['EP5-12 54" Glass FA 4" Arc (Squared Corners)']=new Array("7604", "575.0000");
                                product_name_price['EP5-12 54" Glass FA 2" Arc (Squared Corners)']=new Array("7605", "545.0000");
                                product_name_price['EP5-12 54" Glass FA 4" Arc (Radiused Corners)']=new Array("7606", "575.0000");
                                product_name_price['EP5-12 54" Glass FA 6" Arc (Radiused Corners)']=new Array("7607", "575.0000");
                                product_name_price['EP5-12 54" Glass FA 6" Arc (Squared Corners)']=new Array("7608", "545.0000");
                                product_name_price['EP5-18 12" Glass FA 4" Arc (Radiused Corners)']=new Array("7609", "393.0000");
                                product_name_price['EP5-18 12" Glass FA 4" Arc (Squared Corners)']=new Array("7610", "350.0000");
                                product_name_price['EP5-18 12" Glass FA 6" Arc (Radiused Corners)']=new Array("7611", "393.0000");
                                product_name_price['EP5-18 12" Glass FA 6" Arc (Squared Corners)']=new Array("7612", "350.0000");
                                product_name_price['EP5-18 18" Glass FA 2" Arc (Radiused Corners)']=new Array("7613", "413.0000");
                                product_name_price['EP5-18 18" Glass FA 2" Arc (Squared Corners)']=new Array("7614", "371.0000");
                                product_name_price['EP5-18 18" Glass FA 4" Arc (Radiused Corners)']=new Array("7615", "413.0000");
                                product_name_price['EP5-18 18" Glass FA 4" Arc (Squared Corners)']=new Array("7616", "371.0000");
                                product_name_price['EP5-18 18" Glass FA 6" Arc (Radiused Corners)']=new Array("7617", "413.0000");
                                product_name_price['EP5-18 18" Glass FA 6" Arc (Squared Corners)']=new Array("7618", "371.0000");
                                product_name_price['EP5-18 24" Glass FA 2" Arc (Radiused Corners)']=new Array("7619", "434.0000");
                                product_name_price['EP5-18 24" Glass FA 2" Arc (Squared Corners)']=new Array("7620", "388.0000");
                                product_name_price['EP5-18 24" Glass FA 4" Arc (Radiused Corners)']=new Array("7621", "434.0000");
                                product_name_price['EP5-18 24" Glass FA 4" Arc (Squared Corners)']=new Array("7622", "388.0000");
                                product_name_price['EP5-18 24" Glass FA 6" Arc (Radiused Corners)']=new Array("7623", "434.0000");
                                product_name_price['EP5-18 24" Glass FA 6" Arc (Squared Corners)']=new Array("7624", "388.0000");
                                product_name_price['EP5-18 30" Glass FA 2" Arc (Radiused Corners)']=new Array("7625", "454.0000");
                                product_name_price['EP5-18 30" Glass FA 2" Arc (Squared Corners)']=new Array("7626", "406.0000");
                                product_name_price['EP5-18 30" Glass FA 4" Arc (Radiused Corners)']=new Array("7627", "454.0000");
                                product_name_price['EP5-18 30" Glass FA 4" Arc (Squared Corners)']=new Array("7628", "406.0000");
                                product_name_price['EP5-18 30" Glass FA 6" Arc (Radiused Corners)']=new Array("7629", "454.0000");
                                product_name_price['EP5-18 30" Glass FA 6" Arc (Squared Corners)']=new Array("7630", "406.0000");
                                product_name_price['EP5-18 36" Glass FA 2" Arc (Radiused Corners)']=new Array("7631", "417.0000");
                                product_name_price['EP5-18 36" Glass FA 2" Arc (Squared Corners)']=new Array("7632", "424.0000");
                                product_name_price['EP5-18 36" Glass FA 4" Arc (Radiused Corners)']=new Array("7633", "417.0000");
                                product_name_price['EP5-18 36" Glass FA 4" Arc (Squared Corners)']=new Array("7634", "424.0000");
                                product_name_price['EP5-18 36" Glass FA 6" Arc (Radiused Corners)']=new Array("7635", "417.0000");
                                product_name_price['EP5-18 36" Glass FA 6" Arc (Squared Corners)']=new Array("7636", "424.0000");
                                product_name_price['EP5-18 42" Glass FA 2" Arc (Radiused Corners)']=new Array("7637", "495.0000");
                                product_name_price['EP5-18 42" Glass FA 2" Arc (Squared Corners)']=new Array("7638", "445.0000");
                                product_name_price['EP5-18 42" Glass FA 4" Arc (Radiused Corners)']=new Array("7639", "495.0000");
                                product_name_price['EP5-18 42" Glass FA 4" Arc (Squared Corners)']=new Array("7640", "445.0000");
                                product_name_price['EP5-18 42" Glass FA 6" Arc (Radiused Corners)']=new Array("7641", "495.0000");
                                product_name_price['EP5-18 42" Glass FA 6" Arc (Squared Corners)']=new Array("7642", "445.0000");
                                product_name_price['EP5-18 48" Glass FA 2" Arc (Radiused Corners)']=new Array("7643", "618.0000");
                                product_name_price['EP5-18 48" Glass FA 2" Arc (Squared Corners)']=new Array("7644", "588.0000");
                                product_name_price['EP5-18 48" Glass FA 4" Arc (Radiused Corners)']=new Array("7645", "618.0000");
                                product_name_price['EP5-18 48" Glass FA 4" Arc (Squared Corners)']=new Array("7646", "588.0000");
                                product_name_price['EP5-18 48" Glass FA 6" Arc (Radiused Corners)']=new Array("7647", "618.0000");
                                product_name_price['EP5-18 48" Glass FA 6" Arc (Squared Corners)']=new Array("7648", "588.0000");
                                product_name_price['EP5-18 54" Glass FA 2" Arc (Radiused Corners)']=new Array("7649", "651.0000");
                                product_name_price['EP5-18 54" Glass FA 2" Arc (Squared Corners)']=new Array("7650", "621.0000");
                                product_name_price['EP5-18 54" Glass FA 4" Arc (Radiused Corners)']=new Array("7651", "651.0000");
                                product_name_price['EP5-18 54" Glass FA 4" Arc (Squared Corners)']=new Array("7652", "621.0000");
                                product_name_price['EP5-18 54" Glass FA 6" Arc (Radiused Corners)']=new Array("7653", "651.0000");
                                product_name_price['EP5-18 54" Glass FA 6" Arc (Squared Corners)']=new Array("7654", "621.0000");
                                product_name_price['EP5-22 12" Glass FA 2" Arc (Radiused Corners)']=new Array("7655", "404.0000");
                                product_name_price['EP5-22 12" Glass FA 2" Arc (Squared Corners)']=new Array("7656", "361.0000");
                                product_name_price['EP5-22 12" Glass FA 4" Arc (Radiused Corners)']=new Array("7657", "404.0000");
                                product_name_price['EP5-22 12" Glass FA 4" Arc (Squared Corners)']=new Array("7658", "361.0000");
                                product_name_price['EP5-22 12" Glass FA 6" Arc (Radiused Corners)']=new Array("7659", "404.0000");
                                product_name_price['EP5-22 12" Glass FA 6" Arc (Squared Corners)']=new Array("7660", "361.0000");
                                product_name_price['EP5-22 18" Glass FA 2" Arc (Radiused Corners)']=new Array("7661", "428.0000");
                                product_name_price['EP5-22 18" Glass FA 2" Arc (Squared Corners)']=new Array("7662", "383.0000");
                                product_name_price['EP5-22 18" Glass FA 4" Arc (Radiused Corners)']=new Array("7663", "428.0000");
                                product_name_price['EP5-22 18" Glass FA 4" Arc (Squared Corners)']=new Array("7664", "418.4275");
                                product_name_price['EP5-22 18" Glass FA 6" Arc (Radiused Corners)']=new Array("7665", "428.0000");
                                product_name_price['EP5-22 18" Glass FA 6" Arc (Squared Corners)']=new Array("7666", "383.0000");
                                product_name_price['EP5-22 24" Glass FA 2" Arc (Radiused Corners)']=new Array("7667", "450.0000");
                                product_name_price['EP5-22 24" Glass FA 2" Arc (Squared Corners)']=new Array("7668", "404.0000");
                                product_name_price['EP5-22 24" Glass FA 4" Arc (Radiused Corners)']=new Array("7669", "450.0000");
                                product_name_price['EP5-22 24" Glass FA 4" Arc (Squared Corners)']=new Array("7670", "404.0000");
                                product_name_price['EP5-22 24" Glass FA 6" Arc (Radiused Corners)']=new Array("7671", "450.0000");
                                product_name_price['EP5-22 24" Glass FA 6" Arc (Squared Corners)']=new Array("7672", "404.0000");
                                product_name_price['EP5-22 30" Glass FA 2" Arc (Radiused Corners)']=new Array("7673", "474.0000");
                                product_name_price['EP5-22 30" Glass FA 2" Arc (Squared Corners)']=new Array("7674", "424.0000");
                                product_name_price['EP5-22 30" Glass FA 4" Arc (Radiused Corners)']=new Array("7675", "474.0000");
                                product_name_price['EP5-22 30" Glass FA 4" Arc (Squared Corners)']=new Array("7676", "424.0000");
                                product_name_price['EP5-22 30" Glass FA 6" Arc (Radiused Corners)']=new Array("7677", "474.0000");
                                product_name_price['EP5-22 30" Glass FA 6" Arc (Squared Corners)']=new Array("7678", "424.0000");
                                product_name_price['EP5-22 36" Glass FA 2" Arc (Radiused Corners)']=new Array("7679", "497.0000");
                                product_name_price['EP5-22 36" Glass FA 2" Arc (Squared Corners)']=new Array("7680", "447.0000");
                                product_name_price['EP5-22 36" Glass FA 6" Arc (Radiused Corners)']=new Array("7681", "497.0000");
                                product_name_price['EP5-22 36" Glass FA 6" Arc (Squared Corners)']=new Array("7682", "447.0000");
                                product_name_price['EP5-22 42" Glass FA 2" Arc (Radiused Corners)']=new Array("7683", "522.0000");
                                product_name_price['EP5-22 42" Glass FA 6" Arc (Squared Corners)']=new Array("7684", "468.0000");
                                product_name_price['EP5-22 42" Glass FA 2" Arc (Squared Corners)']=new Array("7685", "468.0000");
                                product_name_price['EP5-22 42" Glass FA 6" Arc (Radiused Corners)']=new Array("7686", "522.0000");
                                product_name_price['EP5-22 48" Glass FA 2" Arc (Radiused Corners)']=new Array("7687", "672.0000");
                                product_name_price['EP5-22 48" Glass FA 2" Arc (Squared Corners)']=new Array("7688", "641.0000");
                                product_name_price['EP5-22 48" Glass FA 6" Arc (Radiused Corners)']=new Array("7689", "672.0000");
                                product_name_price['EP5-22 48" Glass FA 6" Arc (Squared Corners)']=new Array("7690", "641.0000");
                                product_name_price['EP5-22 54" Glass FA 2" Arc (Radiused Corners)']=new Array("7691", "712.0000");
                                product_name_price['EP5-22 54" Glass FA 2" Arc (Squared Corners)']=new Array("7692", "681.0000");
                                product_name_price['EP5-22 54" Glass FA 6" Arc (Radiused Corners)']=new Array("7693", "712.0000");
                                product_name_price['EP5-22 54" Glass FA 6" Arc (Squared Corners)']=new Array("7694", "681.0000");
                                product_name_price['EP5-26 12" Glass FA 2" Arc (Radiused Corners)']=new Array("7695", "414.0000");
                                product_name_price['EP5-26 12" Glass FA 2" Arc (Squared Corners)']=new Array("7696", "371.0000");
                                product_name_price['EP5-26 12" Glass FA 6" Arc (Radiused Corners)']=new Array("7697", "414.0000");
                                product_name_price['EP5-26 12" Glass FA 6" Arc (Squared Corners)']=new Array("7698", "371.0000");
                                product_name_price['EP5-26 18" Glass FA 2" Arc (Radiused Corners)']=new Array("7699", "441.0000");
                                product_name_price['EP5-26 18" Glass FA 2" Arc (Squared Corners)']=new Array("7700", "395.0000");
                                product_name_price['EP5-26 18" Glass FA 6" Arc (Radiused Corners)']=new Array("7701", "441.0000");
                                product_name_price['EP5-26 18" Glass FA 6" Arc (Squared Corners)']=new Array("7702", "395.0000");
                                product_name_price['EP5-26 24" Glass FA 2" Arc (Radiused Corners)']=new Array("7703", "468.0000");
                                product_name_price['EP5-26 24" Glass FA 2" Arc (Squared Corners)']=new Array("7704", "419.0000");
                                product_name_price['EP5-26 24" Glass FA 6" Arc (Radiused Corners)']=new Array("7705", "468.0000");
                                product_name_price['EP5-26 24" Glass FA 6" Arc (Squared Corners)']=new Array("7706", "419.0000");
                                product_name_price['EP5-26 30" Glass FA 2" Arc (Radiused Corners)']=new Array("7707", "495.0000");
                                product_name_price['EP5-26 30" Glass FA 2" Arc (Squared Corners)']=new Array("7708", "442.0000");
                                product_name_price['EP5-26 30" Glass FA 6" Arc (Radiused Corners)']=new Array("7709", "495.0000");
                                product_name_price['EP5-26 30" Glass FA 6" Arc (Squared Corners)']=new Array("7710", "442.0000");
                                product_name_price['EP5-26 36" Glass FA 2" Arc (Radiused Corners)']=new Array("7711", "522.0000");
                                product_name_price['EP5-26 36" Glass FA 2" Arc (Squared Corners)']=new Array("7712", "484.0000");
                                product_name_price['EP5-26 36" Glass FA 6" Arc (Radiused Corners)']=new Array("7713", "522.0000");
                                product_name_price['EP5-26 36" Glass FA 6" Arc (Squared Corners)']=new Array("7714", "484.0000");
                                product_name_price['EP5-26 42" Glass FA 2" Arc (Radiused Corners)']=new Array("7715", "534.0000");
                                product_name_price['EP5-26 42" Glass FA 2" Arc (Squared Corners)']=new Array("7716", "492.0000");
                                product_name_price['EP5-26 42" Glass FA 6" Arc (Radiused Corners)']=new Array("7717", "534.0000");
                                product_name_price['EP5-26 42" Glass FA 6" Arc (Squared Corners)']=new Array("7718", "492.0000");
                                product_name_price['EP5-26 48" Glass FA 2" Arc (Radiused Corners)']=new Array("7719", "739.0000");
                                product_name_price['EP5-26 48" Glass FA 2" Arc (Squared Corners)']=new Array("7720", "709.0000");
                                product_name_price['EP5-26 48" Glass FA 6" Arc (Radiused Corners)']=new Array("7721", "739.0000");
                                product_name_price['EP5-26 48" Glass FA 6" Arc (Squared Corners)']=new Array("7722", "709.0000");
                                product_name_price['EP5-26 54" Glass FA 2" Arc (Radiused Corners)']=new Array("7723", "787.0000");
                                product_name_price['EP5-26 54" Glass FA 2" Arc (Squared Corners)']=new Array("7724", "756.0000");
                                product_name_price['EP5-26 54" Glass FA 6" Arc (Radiused Corners)']=new Array("7725", "787.0000");
                                product_name_price['EP5-26 54" Glass FA 6" Arc (Squared Corners)']=new Array("7726", "756.0000");
                                product_name_price['EP5-18 12" Glass 2" Arc (Radiused Corners)']=new Array("7727", "393.0000");
                                product_name_price['EP5-18 12" Glass 2" Arc (Squared Corners)']=new Array("7728", "350.0000");
                                product_name_price['EP5-18 12" Glass FA 2" Arc (Radiused Corners)']=new Array("7729", "393.0000");
                                product_name_price['EP5-18 12" Glass FA 2" Arc (Squared Corners)']=new Array("7730", "350.0000");
                                product_name_price['EP5-22 36" Glass 4" Arc (Radiused Corners)']=new Array("7731", "497.0000");
                                product_name_price['EP5-22 36" Glass 4" Arc (Squared Corners)']=new Array("7732", "447.0000");
                                product_name_price['EP5-22 36" Glass FA 4" Arc (Radiused Corners)']=new Array("7733", "497.0000");
                                product_name_price['EP5-22 36" Glass FA 4" Arc (Squared Corners)']=new Array("7734", "447.0000");
                                product_name_price['EP5-22 42" Glass 4" Arc (Radiused Corners)']=new Array("7735", "522.0000");
                                product_name_price['EP5-22 42" Glass 4" Arc (Squared Corners)']=new Array("7736", "468.0000");
                                product_name_price['EP5-22 42" Glass FA 4" Arc (Radiused Corners)']=new Array("7737", "522.0000");
                                product_name_price['EP5-22 42" Glass FA 4" Arc (Squared Corners)']=new Array("7738", "468.0000");
                                product_name_price['EP5-22 48" Glass 4" Arc (Radiused Corners)']=new Array("7739", "672.0000");
                                product_name_price['EP5-22 48" Glass 4" Arc (Squared Corners)']=new Array("7740", "641.0000");
                                product_name_price['EP5-22 48" Glass FA 4" Arc (Radiused Corners)']=new Array("7741", "672.0000");
                                product_name_price['EP5-22 48" Glass FA 4" Arc (Squared Corners)']=new Array("7742", "641.0000");
                                product_name_price['EP5-22 54" Glass 4" Arc (Radiused Corners)']=new Array("7743", "712.0000");
                                product_name_price['EP5-22 54" Glass 4" Arc (Squared Corners)']=new Array("7744", "681.0000");
                                product_name_price['EP5-22 54" Glass FA 4" Arc (Radiused Corners)']=new Array("7745", "712.0000");
                                product_name_price['EP5-22 54" Glass FA 4" Arc (Squared Corners)']=new Array("7746", "681.0000");
                                product_name_price['EP5-26 12" Glass 4" Arc (Radiused Corners)']=new Array("7747", "414.0000");
                                product_name_price['EP5-26 12" Glass 4" Arc (Squared Corners)']=new Array("7748", "371.0000");
                                product_name_price['EP5-26 12" Glass FA 4" Arc (Radiused Corners)']=new Array("7749", "414.0000");
                                product_name_price['EP5-26 12" Glass FA 4" Arc (Squared Corners)']=new Array("7750", "371.0000");
                                product_name_price['EP5-26 18" Glass 4" Arc (Radiused Corners)']=new Array("7751", "441.0000");
                                product_name_price['EP5-26 18" Glass 4" Arc (Squared Corners)']=new Array("7752", "395.0000");
                                product_name_price['EP5-26 18" Glass FA 4" Arc (Radiused Corners)']=new Array("7753", "441.0000");
                                product_name_price['EP5-26 18" Glass FA 4" Arc (Squared Corners)']=new Array("7754", "395.0000");
                                product_name_price['EP5-26 24" Glass 4" Arc (Radiused Corners)']=new Array("7755", "468.0000");
                                product_name_price['EP5-26 24" Glass 4" Arc (Squared Corners)']=new Array("7756", "419.0000");
                                product_name_price['EP5-26 24" Glass FA 4" Arc (Radiused Corners)']=new Array("7757", "468.0000");
                                product_name_price['EP5-26 24" Glass FA 4" Arc (Squared Corners)']=new Array("7758", "419.0000");
                                product_name_price['EP5-26 30" Glass 4" Arc (Radiused Corners)']=new Array("7759", "495.0000");
                                product_name_price['EP5-26 30" Glass 4" Arc (Squared Corners)']=new Array("7760", "442.0000");
                                product_name_price['EP5-26 30" Glass FA 4" Arc (Radiused Corners)']=new Array("7761", "495.0000");
                                product_name_price['EP5-26 30" Glass FA 4" Arc (Squared Corners)']=new Array("7762", "442.0000");
                                product_name_price['EP5-26 36" Glass 4" Arc (Radiused Corners)']=new Array("7763", "522.0000");
                                product_name_price['EP5-26 36" Glass 4" Arc (Squared Corners)']=new Array("7764", "484.0000");
                                product_name_price['EP5-26 36" Glass FA 4" Arc (Radiused Corners)']=new Array("7765", "522.0000");
                                product_name_price['EP5-26 36" Glass FA 4" Arc (Squared Corners)']=new Array("7766", "484.0000");
                                product_name_price['EP5-26 42" Glass 4" Arc (Radiused Corners)']=new Array("7767", "534.0000");
                                product_name_price['EP5-26 42" Glass 4" Arc (Squared Corners)']=new Array("7768", "492.0000");
                                product_name_price['EP5-26 42" Glass FA 4" Arc (Radiused Corners)']=new Array("7769", "534.0000");
                                product_name_price['EP5-26 42" Glass FA 4" Arc (Squared Corners)']=new Array("7770", "492.0000");
                                product_name_price['EP5-26 48" Glass 4" Arc (Radiused Corners)']=new Array("7771", "739.0000");
                                product_name_price['EP5-26 48" Glass 4" Arc (Squared Corners)']=new Array("7772", "709.0000");
                                product_name_price['EP5-26 48" Glass FA 4" Arc (Radiused Corners)']=new Array("7773", "739.0000");
                                product_name_price['EP5-26 48" Glass FA 4" Arc (Squared Corners)']=new Array("7774", "709.0000");
                                product_name_price['EP5-26 54" Glass 4" Arc (Radiused Corners)']=new Array("7775", "787.0000");
                                product_name_price['EP5-26 54" Glass 4" Arc (Squared Corners)']=new Array("7776", "756.0000");
                                product_name_price['EP5-26 54" Glass FA 4" Arc (Radiused Corners)']=new Array("7777", "787.0000");
                                product_name_price['EP5-26 54" Glass FA 4" Arc (Squared Corners)']=new Array("7778", "756.0000");
                                product_name_price['EP5-12 12" Glass CA 2" Arc (Radiused Corners)']=new Array("7779", "376.0000");
                                product_name_price['EP5-12 12" Glass CA 2" Arc (Squared Corners)']=new Array("7780", "337.0000");
                                product_name_price['EP5-12 12" Glass CA 4" Arc (Radiused Corners)']=new Array("7781", "376.0000");
                                product_name_price['EP5-12 12" Glass CA 4" Arc (Squared Corners)']=new Array("7782", "337.0000");
                                product_name_price['EP5-12 12" Glass CA 6" Arc (Radiused Corners)']=new Array("7783", "376.0000");
                                product_name_price['EP5-12 12" Glass CA 6" Arc (Squared Corners)']=new Array("7784", "337.0000");
                                product_name_price['EP5-12 18" Glass CA 2" Arc (Radiused Corners)']=new Array("7785", "393.0000");
                                product_name_price['EP5-12 18" Glass CA 2" Arc (Squared Corners)']=new Array("7786", "350.0000");
                                product_name_price['EP5-12 18" Glass CA 4" Arc (Radiused Corners)']=new Array("7787", "393.0000");
                                product_name_price['EP5-12 18" Glass CA 4" Arc (Squared Corners)']=new Array("7788", "350.0000");
                                product_name_price['EP5-12 18" Glass CA 6" Arc (Radiused Corners)']=new Array("7789", "393.0000");
                                product_name_price['EP5-12 18" Glass CA 6" Arc (Squared Corners)']=new Array("7790", "350.0000");
                                product_name_price['EP5-12 24" Glass CA 2" Arc (Radiused Corners)']=new Array("7791", "409.0000");
                                product_name_price['EP5-12 24" Glass CA 2" Arc (Squared Corners)']=new Array("7792", "365.0000");
                                product_name_price['EP5-12 24" Glass CA 4" Arc (Radiused Corners)']=new Array("7793", "409.0000");
                                product_name_price['EP5-12 24" Glass CA 4" Arc (Squared Corners)']=new Array("7794", "365.0000");
                                product_name_price['EP5-12 24" Glass CA 6" Arc (Radiused Corners)']=new Array("7795", "409.0000");
                                product_name_price['EP5-12 24" Glass CA 6" Arc (Squared Corners)']=new Array("7796", "365.0000");
                                product_name_price['EP5-12 30" Glass CA 2" Arc (Radiused Corners)']=new Array("7797", "424.0000");
                                product_name_price['EP5-12 30" Glass CA 2" Arc (Squared Corners)']=new Array("7798", "381.0000");
                                product_name_price['EP5-12 30" Glass CA 4" Arc (Radiused Corners)']=new Array("7799", "424.0000");
                                product_name_price['EP5-12 30" Glass CA 4" Arc (Squared Corners)']=new Array("7800", "381.0000");
                                product_name_price['EP5-12 30" Glass CA 6" Arc (Radiused Corners)']=new Array("7801", "424.0000");
                                product_name_price['EP5-12 30" Glass CA 6" Arc (Squared Corners)']=new Array("7802", "381.0000");
                                product_name_price['EP5-12 36" Glass CA 2" Arc (Radiused Corners)']=new Array("7803", "440.0000");
                                product_name_price['EP5-12 36" Glass CA 2" Arc (Squared Corners)']=new Array("7804", "394.0000");
                                product_name_price['EP5-12 36" Glass CA 4" Arc (Radiused Corners)']=new Array("7805", "440.0000");
                                product_name_price['EP5-12 36" Glass CA 4" Arc (Squared Corners)']=new Array("7806", "394.0000");
                                product_name_price['EP5-12 36" Glass CA 6" Arc (Radiused Corners)']=new Array("7807", "440.0000");
                                product_name_price['EP5-12 36" Glass CA 6" Arc (Squared Corners)']=new Array("7808", "394.0000");
                                product_name_price['EP5-12 42" Glass CA 2" Arc (Radiused Corners)']=new Array("7809", "456.0000");
                                product_name_price['EP5-12 42" Glass CA 2" Arc (Squared Corners)']=new Array("7810", "408.0000");
                                product_name_price['EP5-12 42" Glass CA 4" Arc (Radiused Corners)']=new Array("7811", "456.0000");
                                product_name_price['EP5-12 42" Glass CA 4" Arc (Squared Corners)']=new Array("7812", "408.0000");
                                product_name_price['EP5-12 42" Glass CA 6" Arc (Radiused Corners)']=new Array("7813", "456.0000");
                                product_name_price['EP5-12 42" Glass CA 6" Arc (Squared Corners)']=new Array("7814", "408.0000");
                                product_name_price['EP5-12 48" Glass CA 2" Arc (Radiused Corners)']=new Array("7815", "550.0000");
                                product_name_price['EP5-12 48" Glass CA 2" Arc (Squared Corners)']=new Array("7816", "519.0000");
                                product_name_price['EP5-12 48" Glass CA 4" Arc (Radiused Corners)']=new Array("7817", "550.0000");
                                product_name_price['EP5-12 48" Glass CA 4" Arc (Squared Corners)']=new Array("7818", "519.0000");
                                product_name_price['EP5-12 48" Glass CA 6" Arc (Radiused Corners)']=new Array("7819", "550.0000");
                                product_name_price['EP5-12 48" Glass CA 6" Arc (Squared Corners)']=new Array("7820", "519.0000");
                                product_name_price['EP5-12 54" Glass CA 2" Arc (Radiused Corners)']=new Array("7821", "575.0000");
                                product_name_price['EP5-12 54" Glass CA 2" Arc (Squared Corners)']=new Array("7822", "545.0000");
                                product_name_price['EP5-12 54" Glass CA 4" Arc (Radiused Corners)']=new Array("7823", "575.0000");
                                product_name_price['EP5-12 54" Glass CA 4" Arc (Squared Corners)']=new Array("7824", "575.0000");
                                product_name_price['EP5-12 54" Glass CA 6" Arc (Radiused Corners)']=new Array("7825", "575.0000");
                                product_name_price['EP5-12 54" Glass CA 6" Arc (Squared Corners)']=new Array("7826", "545.0000");
                                product_name_price['EP5-18 12" Glass CA 2" Arc (Radiused Corners)']=new Array("7827", "393.0000");
                                product_name_price['EP5-18 12" Glass CA 2" Arc (Squared Corners)']=new Array("7828", "350.0000");
                                product_name_price['EP5-18 12" Glass CA 4" Arc (Radiused Corners)']=new Array("7829", "393.0000");
                                product_name_price['EP5-18 12" Glass CA 4" Arc (Squared Corners)']=new Array("7830", "350.0000");
                                product_name_price['EP5-18 12" Glass CA 6" Arc (Radiused Corners)']=new Array("7831", "393.0000");
                                product_name_price['EP5-18 12" Glass CA 6" Arc (Squared Corners)']=new Array("7832", "350.0000");
                                product_name_price['EP5-18 18" Glass CA 2" Arc (Radiused Corners)']=new Array("7833", "413.0000");
                                product_name_price['EP5-18 18" Glass CA 2" Arc (Squared Corners)']=new Array("7834", "371.0000");
                                product_name_price['EP5-18 18" Glass CA 4" Arc (Radiused Corners)']=new Array("7835", "413.0000");
                                product_name_price['EP5-18 18" Glass CA 4" Arc (Squared Corners)']=new Array("7836", "371.0000");
                                product_name_price['EP5-18 18" Glass CA 6" Arc (Radiused Corners)']=new Array("7837", "413.0000");
                                product_name_price['EP5-18 18" Glass CA 6" Arc (Squared Corners)']=new Array("7838", "371.0000");
                                product_name_price['EP5-18 24" Glass CA 2" Arc (Radiused Corners)']=new Array("7839", "434.0000");
                                product_name_price['EP5-18 24" Glass CA 2" Arc (Squared Corners)']=new Array("7840", "388.0000");
                                product_name_price['EP5-18 24" Glass CA 4" Arc (Radiused Corners)']=new Array("7841", "434.0000");
                                product_name_price['EP5-18 24" Glass CA 4" Arc (Squared Corners)']=new Array("7842", "388.0000");
                                product_name_price['EP5-18 24" Glass CA 6" Arc (Radiused Corners)']=new Array("7843", "434.0000");
                                product_name_price['EP5-18 24" Glass CA 6" Arc (Squared Corners)']=new Array("7844", "388.0000");
                                product_name_price['EP5-18 30" Glass CA 2" Arc (Radiused Corners)']=new Array("7845", "454.0000");
                                product_name_price['EP5-18 30" Glass CA 2" Arc (Squared Corners)']=new Array("7846", "406.0000");
                                product_name_price['EP5-18 30" Glass CA 4" Arc (Radiused Corners)']=new Array("7847", "454.0000");
                                product_name_price['EP5-18 30" Glass CA 4" Arc (Squared Corners)']=new Array("7848", "406.0000");
                                product_name_price['EP5-18 30" Glass CA 6" Arc (Radiused Corners)']=new Array("7849", "454.0000");
                                product_name_price['EP5-18 30" Glass CA 6" Arc (Squared Corners)']=new Array("7850", "406.0000");
                                product_name_price['EP5-18 36" Glass CA 2" Arc (Radiused Corners)']=new Array("7851", "417.0000");
                                product_name_price['EP5-18 36" Glass CA 2" Arc (Squared Corners)']=new Array("7852", "424.0000");
                                product_name_price['EP5-18 36" Glass CA 4" Arc (Radiused Corners)']=new Array("7853", "417.0000");
                                product_name_price['EP5-18 36" Glass CA 4" Arc (Squared Corners)']=new Array("7854", "424.0000");
                                product_name_price['EP5-18 36" Glass CA 6" Arc (Radiused Corners)']=new Array("7855", "417.0000");
                                product_name_price['EP5-18 36" Glass CA 6" Arc (Squared Corners)']=new Array("7856", "424.0000");
                                product_name_price['EP5-18 42" Glass CA 2" Arc (Radiused Corners)']=new Array("7857", "495.0000");
                                product_name_price['EP5-18 42" Glass CA 2" Arc (Squared Corners)']=new Array("7858", "445.0000");
                                product_name_price['EP5-18 42" Glass CA 4" Arc (Radiused Corners)']=new Array("7859", "495.0000");
                                product_name_price['EP5-18 42" Glass CA 4" Arc (Squared Corners)']=new Array("7860", "445.0000");
                                product_name_price['EP5-18 42" Glass CA 6" Arc (Radiused Corners)']=new Array("7861", "495.0000");
                                product_name_price['EP5-18 42" Glass CA 6" Arc (Squared Corners)']=new Array("7862", "445.0000");
                                product_name_price['EP5-18 48" Glass CA 2" Arc (Radiused Corners)']=new Array("7863", "618.0000");
                                product_name_price['EP5-18 48" Glass CA 2" Arc (Squared Corners)']=new Array("7864", "588.0000");
                                product_name_price['EP5-18 48" Glass CA 4" Arc (Radiused Corners)']=new Array("7865", "618.0000");
                                product_name_price['EP5-18 48" Glass CA 4" Arc (Squared Corners)']=new Array("7866", "588.0000");
                                product_name_price['EP5-18 48" Glass CA 6" Arc (Radiused Corners)']=new Array("7867", "618.0000");
                                product_name_price['EP5-18 48" Glass CA 6" Arc (Squared Corners)']=new Array("7868", "588.0000");
                                product_name_price['EP5-18 54" Glass CA 2" Arc (Radiused Corners)']=new Array("7869", "651.0000");
                                product_name_price['EP5-18 54" Glass CA 2" Arc (Squared Corners)']=new Array("7870", "621.0000");
                                product_name_price['EP5-18 54" Glass CA 4" Arc (Radiused Corners)']=new Array("7871", "651.0000");
                                product_name_price['EP5-18 54" Glass CA 4" Arc (Squared Corners)']=new Array("7872", "621.0000");
                                product_name_price['EP5-18 54" Glass CA 6" Arc (Radiused Corners)']=new Array("7873", "651.0000");
                                product_name_price['EP5-18 54" Glass CA 6" Arc (Squared Corners)']=new Array("7874", "621.0000");
                                product_name_price['EP5-22 12" Glass CA 2" Arc (Radiused Corners)']=new Array("7875", "404.0000");
                                product_name_price['EP5-22 12" Glass CA 2" Arc (Squared Corners)']=new Array("7876", "361.0000");
                                product_name_price['EP5-22 12" Glass CA 4" Arc (Radiused Corners)']=new Array("7877", "404.0000");
                                product_name_price['EP5-22 12" Glass CA 4" Arc (Squared Corners)']=new Array("7878", "361.0000");
                                product_name_price['EP5-22 12" Glass CA 6" Arc (Radiused Corners)']=new Array("7879", "404.0000");
                                product_name_price['EP5-22 12" Glass CA 6" Arc (Squared Corners)']=new Array("7880", "361.0000");
                                product_name_price['EP5-22 18" Glass CA 2" Arc (Radiused Corners)']=new Array("7881", "428.0000");
                                product_name_price['EP5-22 18" Glass CA 2" Arc (Squared Corners)']=new Array("7882", "383.0000");
                                product_name_price['EP5-22 18" Glass CA 4" Arc (Radiused Corners)']=new Array("7883", "428.0000");
                                product_name_price['EP5-22 18" Glass CA 4" Arc (Squared Corners)']=new Array("7884", "418.4275");
                                product_name_price['EP5-22 18" Glass CA 6" Arc (Radiused Corners)']=new Array("7885", "428.0000");
                                product_name_price['EP5-22 18" Glass CA 6" Arc (Squared Corners)']=new Array("7886", "383.0000");
                                product_name_price['EP5-22 24" Glass CA 2" Arc (Radiused Corners)']=new Array("7887", "450.0000");
                                product_name_price['EP5-22 24" Glass CA 2" Arc (Squared Corners)']=new Array("7888", "404.0000");
                                product_name_price['EP5-22 24" Glass CA 4" Arc (Radiused Corners)']=new Array("7889", "450.0000");
                                product_name_price['EP5-22 24" Glass CA 4" Arc (Squared Corners)']=new Array("7890", "404.0000");
                                product_name_price['EP5-22 24" Glass CA 6" Arc (Radiused Corners)']=new Array("7891", "450.0000");
                                product_name_price['EP5-22 24" Glass CA 6" Arc (Squared Corners)']=new Array("7892", "404.0000");
                                product_name_price['EP5-22 30" Glass CA 2" Arc (Radiused Corners)']=new Array("7893", "474.0000");
                                product_name_price['EP5-22 30" Glass CA 2" Arc (Squared Corners)']=new Array("7894", "424.0000");
                                product_name_price['EP5-22 30" Glass CA 4" Arc (Radiused Corners)']=new Array("7895", "474.0000");
                                product_name_price['EP5-22 30" Glass CA 4" Arc (Squared Corners)']=new Array("7896", "424.0000");
                                product_name_price['EP5-22 30" Glass CA 6" Arc (Radiused Corners)']=new Array("7897", "474.0000");
                                product_name_price['EP5-22 30" Glass CA 6" Arc (Squared Corners)']=new Array("7898", "424.0000");
                                product_name_price['EP5-22 36" Glass CA 2" Arc (Radiused Corners)']=new Array("7899", "497.0000");
                                product_name_price['EP5-22 36" Glass CA 2" Arc (Squared Corners)']=new Array("7900", "447.0000");
                                product_name_price['EP5-22 36" Glass CA 4" Arc (Radiused Corners)']=new Array("7901", "497.0000");
                                product_name_price['EP5-22 36" Glass CA 4" Arc (Squared Corners)']=new Array("7902", "447.0000");
                                product_name_price['EP5-22 36" Glass CA 6" Arc (Radiused Corners)']=new Array("7903", "497.0000");
                                product_name_price['EP5-22 36" Glass CA 6" Arc (Squared Corners)']=new Array("7904", "447.0000");
                                product_name_price['EP5-22 42" Glass CA 2" Arc (Radiused Corners)']=new Array("7905", "522.0000");
                                product_name_price['EP5-22 42" Glass CA 2" Arc (Squared Corners)']=new Array("7906", "468.0000");
                                product_name_price['EP5-22 42" Glass CA 4" Arc (Radiused Corners)']=new Array("7907", "522.0000");
                                product_name_price['EP5-22 42" Glass CA 4" Arc (Squared Corners)']=new Array("7908", "468.0000");
                                product_name_price['EP5-22 42" Glass CA 6" Arc (Radiused Corners)']=new Array("7909", "522.0000");
                                product_name_price['EP5-22 42" Glass CA 6" Arc (Squared Corners)']=new Array("7910", "468.0000");
                                product_name_price['EP5-22 48" Glass CA 2" Arc (Radiused Corners)']=new Array("7911", "672.0000");
                                product_name_price['EP5-22 48" Glass CA 2" Arc (Squared Corners)']=new Array("7912", "641.0000");
                                product_name_price['EP5-22 48" Glass CA 4" Arc (Radiused Corners)']=new Array("7913", "672.0000");
                                product_name_price['EP5-22 48" Glass CA 4" Arc (Squared Corners)']=new Array("7914", "641.0000");
                                product_name_price['EP5-22 48" Glass CA 6" Arc (Radiused Corners)']=new Array("7915", "672.0000");
                                product_name_price['EP5-22 48" Glass CA 6" Arc (Squared Corners)']=new Array("7916", "641.0000");
                                product_name_price['EP5-22 54" Glass CA 2" Arc (Radiused Corners)']=new Array("7917", "712.0000");
                                product_name_price['EP5-22 54" Glass CA 2" Arc (Squared Corners)']=new Array("7918", "681.0000");
                                product_name_price['EP5-22 54" Glass CA 4" Arc (Radiused Corners)']=new Array("7919", "712.0000");
                                product_name_price['EP5-22 54" Glass CA 4" Arc (Squared Corners)']=new Array("7920", "681.0000");
                                product_name_price['EP5-22 54" Glass CA 6" Arc (Radiused Corners)']=new Array("7921", "712.0000");
                                product_name_price['EP5-22 54" Glass CA 6" Arc (Squared Corners)']=new Array("7922", "681.0000");
                                product_name_price['EP5-26 12" Glass CA 2" Arc (Radiused Corners)']=new Array("7923", "414.0000");
                                product_name_price['EP5-26 12" Glass CA 2" Arc (Squared Corners)']=new Array("7924", "371.0000");
                                product_name_price['EP5-26 12" Glass CA 4" Arc (Radiused Corners)']=new Array("7925", "414.0000");
                                product_name_price['EP5-26 12" Glass CA 4" Arc (Squared Corners)']=new Array("7926", "371.0000");
                                product_name_price['EP5-26 12" Glass CA 6" Arc (Radiused Corners)']=new Array("7927", "414.0000");
                                product_name_price['EP5-26 12" Glass CA 6" Arc (Squared Corners)']=new Array("7928", "371.0000");
                                product_name_price['EP5-26 18" Glass CA 2" Arc (Radiused Corners)']=new Array("7929", "441.0000");
                                product_name_price['EP5-26 18" Glass CA 2" Arc (Squared Corners)']=new Array("7930", "395.0000");
                                product_name_price['EP5-26 18" Glass CA 4" Arc (Radiused Corners)']=new Array("7931", "441.0000");
                                product_name_price['EP5-26 18" Glass CA 4" Arc (Squared Corners)']=new Array("7932", "395.0000");
                                product_name_price['EP5-26 18" Glass CA 6" Arc (Radiused Corners)']=new Array("7933", "441.0000");
                                product_name_price['EP5-26 18" Glass CA 6" Arc (Squared Corners)']=new Array("7934", "395.0000");
                                product_name_price['EP5-26 24" Glass CA 2" Arc (Radiused Corners)']=new Array("7935", "468.0000");
                                product_name_price['EP5-26 24" Glass CA 2" Arc (Squared Corners)']=new Array("7936", "419.0000");
                                product_name_price['EP5-26 24" Glass CA 4" Arc (Radiused Corners)']=new Array("7937", "468.0000");
                                product_name_price['EP5-26 24" Glass CA 4" Arc (Squared Corners)']=new Array("7938", "419.0000");
                                product_name_price['EP5-26 24" Glass CA 6" Arc (Radiused Corners)']=new Array("7939", "468.0000");
                                product_name_price['EP5-26 24" Glass CA 6" Arc (Squared Corners)']=new Array("7940", "419.0000");
                                product_name_price['EP5-26 30" Glass CA 2" Arc (Radiused Corners)']=new Array("7941", "495.0000");
                                product_name_price['EP5-26 30" Glass CA 2" Arc (Squared Corners)']=new Array("7942", "442.0000");
                                product_name_price['EP5-26 30" Glass CA 4" Arc (Radiused Corners)']=new Array("7943", "495.0000");
                                product_name_price['EP5-26 30" Glass CA 4" Arc (Squared Corners)']=new Array("7944", "442.0000");
                                product_name_price['EP5-26 30" Glass CA 6" Arc (Radiused Corners)']=new Array("7945", "495.0000");
                                product_name_price['EP5-26 30" Glass CA 6" Arc (Squared Corners)']=new Array("7946", "442.0000");
                                product_name_price['EP5-26 36" Glass CA 2" Arc (Radiused Corners)']=new Array("7947", "522.0000");
                                product_name_price['EP5-26 36" Glass CA 2" Arc (Squared Corners)']=new Array("7948", "484.0000");
                                product_name_price['EP5-26 36" Glass CA 4" Arc (Radiused Corners)']=new Array("7949", "522.0000");
                                product_name_price['EP5-26 36" Glass CA 4" Arc (Squared Corners)']=new Array("7950", "484.0000");
                                product_name_price['EP5-26 36" Glass CA 6" Arc (Radiused Corners)']=new Array("7951", "522.0000");
                                product_name_price['EP5-26 36" Glass CA 6" Arc (Squared Corners)']=new Array("7952", "484.0000");
                                product_name_price['EP5-26 42" Glass CA 2" Arc (Radiused Corners)']=new Array("7953", "534.0000");
                                product_name_price['EP5-26 42" Glass CA 2" Arc (Squared Corners)']=new Array("7954", "492.0000");
                                product_name_price['EP5-26 42" Glass CA 4" Arc (Radiused Corners)']=new Array("7955", "534.0000");
                                product_name_price['EP5-26 42" Glass CA 4" Arc (Squared Corners)']=new Array("7956", "492.0000");
                                product_name_price['EP5-26 42" Glass CA 6" Arc (Radiused Corners)']=new Array("7957", "534.0000");
                                product_name_price['EP5-26 42" Glass CA 6" Arc (Squared Corners)']=new Array("7958", "492.0000");
                                product_name_price['EP5-26 48" Glass CA 2" Arc (Radiused Corners)']=new Array("7959", "739.0000");
                                product_name_price['EP5-26 48" Glass CA 2" Arc (Squared Corners)']=new Array("7960", "709.0000");
                                product_name_price['EP5-26 48" Glass CA 4" Arc (Radiused Corners)']=new Array("7961", "739.0000");
                                product_name_price['EP5-26 48" Glass CA 4" Arc (Squared Corners)']=new Array("7962", "709.0000");
                                product_name_price['EP5-26 48" Glass CA 6" Arc (Radiused Corners)']=new Array("7963", "739.0000");
                                product_name_price['EP5-26 48" Glass CA 6" Arc (Squared Corners)']=new Array("7964", "709.0000");
                                product_name_price['EP5-26 54" Glass CA 2" Arc (Radiused Corners)']=new Array("7965", "787.0000");
                                product_name_price['EP5-26 54" Glass CA 2" Arc (Squared Corners)']=new Array("7966", "756.0000");
                                product_name_price['EP5-26 54" Glass CA 4" Arc (Radiused Corners)']=new Array("7967", "787.0000");
                                product_name_price['EP5-26 54" Glass CA 4" Arc (Squared Corners)']=new Array("7968", "756.0000");
                                product_name_price['EP5-26 54" Glass CA 6" Arc (Radiused Corners)']=new Array("7969", "787.0000");
                                product_name_price['EP5-26 54" Glass CA 6" Arc (Squared Corners)']=new Array("7970", "756.0000");
                                product_name_price['EP5-12 12" Glass RA 2" Arc (Radiused Corners)']=new Array("7971", "376.0000");
                                product_name_price['EP5-12 12" Glass RA 2" Arc (Squared Corners)']=new Array("7972", "337.0000");
                                product_name_price['EP5-12 12" Glass RA 4" Arc (Radiused Corners)']=new Array("7973", "376.0000");
                                product_name_price['EP5-12 12" Glass RA 4" Arc (Squared Corners)']=new Array("7974", "337.0000");
                                product_name_price['EP5-12 12" Glass RA 6" Arc (Radiused Corners)']=new Array("7975", "376.0000");
                                product_name_price['EP5-12 12" Glass RA 6" Arc (Squared Corners)']=new Array("7976", "337.0000");
                                product_name_price['EP5-12 18" Glass RA 2" Arc (Radiused Corners)']=new Array("7977", "393.0000");
                                product_name_price['EP5-12 18" Glass RA 2" Arc (Squared Corners)']=new Array("7978", "350.0000");
                                product_name_price['EP5-12 18" Glass RA 4" Arc (Radiused Corners)']=new Array("7979", "393.0000");
                                product_name_price['EP5-12 18" Glass RA 4" Arc (Squared Corners)']=new Array("7980", "350.0000");
                                product_name_price['EP5-12 18" Glass RA 6" Arc (Radiused Corners)']=new Array("7981", "393.0000");
                                product_name_price['EP5-12 18" Glass RA 6" Arc (Squared Corners)']=new Array("7982", "350.0000");
                                product_name_price['EP5-12 24" Glass RA 2" Arc (Radiused Corners)']=new Array("7983", "409.0000");
                                product_name_price['EP5-12 24" Glass RA 2" Arc (Squared Corners)']=new Array("7984", "365.0000");
                                product_name_price['EP5-12 24" Glass RA 4" Arc (Radiused Corners)']=new Array("7985", "409.0000");
                                product_name_price['EP5-12 24" Glass RA 4" Arc (Squared Corners)']=new Array("7986", "365.0000");
                                product_name_price['EP5-12 24" Glass RA 6" Arc (Radiused Corners)']=new Array("7987", "409.0000");
                                product_name_price['EP5-12 24" Glass RA 6" Arc (Squared Corners)']=new Array("7988", "365.0000");
                                product_name_price['EP5-12 30" Glass RA 2" Arc (Radiused Corners)']=new Array("7989", "424.0000");
                                product_name_price['EP5-12 30" Glass RA 2" Arc (Squared Corners)']=new Array("7990", "381.0000");
                                product_name_price['EP5-12 30" Glass RA 4" Arc (Radiused Corners)']=new Array("7991", "424.0000");
                                product_name_price['EP5-12 30" Glass RA 4" Arc (Squared Corners)']=new Array("7992", "381.0000");
                                product_name_price['EP5-12 30" Glass RA 6" Arc (Radiused Corners)']=new Array("7993", "424.0000");
                                product_name_price['EP5-12 30" Glass RA 6" Arc (Squared Corners)']=new Array("7994", "381.0000");
                                product_name_price['EP5-12 36" Glass RA 2" Arc (Radiused Corners)']=new Array("7995", "440.0000");
                                product_name_price['EP5-12 36" Glass RA 2" Arc (Squared Corners)']=new Array("7996", "394.0000");
                                product_name_price['EP5-12 36" Glass RA 4" Arc (Radiused Corners)']=new Array("7997", "440.0000");
                                product_name_price['EP5-12 36" Glass RA 4" Arc (Squared Corners)']=new Array("7998", "394.0000");
                                product_name_price['EP5-12 36" Glass RA 6" Arc (Radiused Corners)']=new Array("7999", "440.0000");
                                product_name_price['EP5-12 36" Glass RA 6" Arc (Squared Corners)']=new Array("8000", "394.0000");
                                product_name_price['EP5-12 42" Glass RA 2" Arc (Radiused Corners)']=new Array("8001", "456.0000");
                                product_name_price['EP5-12 42" Glass RA 2" Arc (Squared Corners)']=new Array("8002", "408.0000");
                                product_name_price['EP5-12 42" Glass RA 4" Arc (Radiused Corners)']=new Array("8003", "456.0000");
                                product_name_price['EP5-12 42" Glass RA 4" Arc (Squared Corners)']=new Array("8004", "408.0000");
                                product_name_price['EP5-12 42" Glass RA 6" Arc (Radiused Corners)']=new Array("8005", "456.0000");
                                product_name_price['EP5-12 42" Glass RA 6" Arc (Squared Corners)']=new Array("8006", "408.0000");
                                product_name_price['EP5-12 48" Glass RA 2" Arc (Radiused Corners)']=new Array("8007", "550.0000");
                                product_name_price['EP5-12 48" Glass RA 2" Arc (Squared Corners)']=new Array("8008", "519.0000");
                                product_name_price['EP5-12 48" Glass RA 4" Arc (Radiused Corners)']=new Array("8009", "550.0000");
                                product_name_price['EP5-12 48" Glass RA 4" Arc (Squared Corners)']=new Array("8010", "519.0000");
                                product_name_price['EP5-12 48" Glass RA 6" Arc (Radiused Corners)']=new Array("8011", "550.0000");
                                product_name_price['EP5-12 48" Glass RA 6" Arc (Squared Corners)']=new Array("8012", "519.0000");
                                product_name_price['EP5-12 54" Glass RA 2" Arc (Radiused Corners)']=new Array("8013", "575.0000");
                                product_name_price['EP5-12 54" Glass RA 2" Arc (Squared Corners)']=new Array("8014", "545.0000");
                                product_name_price['EP5-12 54" Glass RA 4" Arc (Radiused Corners)']=new Array("8015", "575.0000");
                                product_name_price['EP5-12 54" Glass RA 4" Arc (Squared Corners)']=new Array("8016", "575.0000");
                                product_name_price['EP5-12 54" Glass RA 6" Arc (Radiused Corners)']=new Array("8017", "575.0000");
                                product_name_price['EP5-12 54" Glass RA 6" Arc (Squared Corners)']=new Array("8018", "545.0000");
                                product_name_price['EP5-18 12" Glass RA 2" Arc (Radiused Corners)']=new Array("8019", "393.0000");
                                product_name_price['EP5-18 12" Glass RA 2" Arc (Squared Corners)']=new Array("8020", "350.0000");
                                product_name_price['EP5-18 12" Glass RA 4" Arc (Radiused Corners)']=new Array("8021", "393.0000");
                                product_name_price['EP5-18 12" Glass RA 4" Arc (Squared Corners)']=new Array("8022", "350.0000");
                                product_name_price['EP5-18 12" Glass RA 6" Arc (Radiused Corners)']=new Array("8023", "393.0000");
                                product_name_price['EP5-18 12" Glass RA 6" Arc (Squared Corners)']=new Array("8024", "350.0000");
                                product_name_price['EP5-18 18" Glass RA 2" Arc (Radiused Corners)']=new Array("8025", "413.0000");
                                product_name_price['EP5-18 18" Glass RA 2" Arc (Squared Corners)']=new Array("8026", "371.0000");
                                product_name_price['EP5-18 18" Glass RA 4" Arc (Radiused Corners)']=new Array("8027", "413.0000");
                                product_name_price['EP5-18 18" Glass RA 4" Arc (Squared Corners)']=new Array("8028", "371.0000");
                                product_name_price['EP5-18 18" Glass RA 6" Arc (Radiused Corners)']=new Array("8029", "413.0000");
                                product_name_price['EP5-18 18" Glass RA 6" Arc (Squared Corners)']=new Array("8030", "371.0000");
                                product_name_price['EP5-18 24" Glass RA 2" Arc (Radiused Corners)']=new Array("8031", "434.0000");
                                product_name_price['EP5-18 24" Glass RA 2" Arc (Squared Corners)']=new Array("8032", "388.0000");
                                product_name_price['EP5-18 24" Glass RA 4" Arc (Radiused Corners)']=new Array("8033", "434.0000");
                                product_name_price['EP5-18 24" Glass RA 4" Arc (Squared Corners)']=new Array("8034", "388.0000");
                                product_name_price['EP5-18 24" Glass RA 6" Arc (Radiused Corners)']=new Array("8035", "434.0000");
                                product_name_price['EP5-18 24" Glass RA 6" Arc (Squared Corners)']=new Array("8036", "388.0000");
                                product_name_price['EP5-18 30" Glass RA 2" Arc (Radiused Corners)']=new Array("8037", "454.0000");
                                product_name_price['EP5-18 30" Glass RA 2" Arc (Squared Corners)']=new Array("8038", "406.0000");
                                product_name_price['EP5-18 30" Glass RA 4" Arc (Radiused Corners)']=new Array("8039", "454.0000");
                                product_name_price['EP5-18 30" Glass RA 4" Arc (Squared Corners)']=new Array("8040", "406.0000");
                                product_name_price['EP5-18 30" Glass RA 6" Arc (Radiused Corners)']=new Array("8041", "454.0000");
                                product_name_price['EP5-18 30" Glass RA 6" Arc (Squared Corners)']=new Array("8042", "406.0000");
                                product_name_price['EP5-18 36" Glass RA 2" Arc (Radiused Corners)']=new Array("8043", "417.0000");
                                product_name_price['EP5-18 36" Glass RA 2" Arc (Squared Corners)']=new Array("8044", "424.0000");
                                product_name_price['EP5-18 36" Glass RA 4" Arc (Radiused Corners)']=new Array("8045", "417.0000");
                                product_name_price['EP5-18 36" Glass RA 4" Arc (Squared Corners)']=new Array("8046", "424.0000");
                                product_name_price['EP5-18 36" Glass RA 6" Arc (Radiused Corners)']=new Array("8047", "417.0000");
                                product_name_price['EP5-18 36" Glass RA 6" Arc (Squared Corners)']=new Array("8048", "424.0000");
                                product_name_price['EP5-18 42" Glass RA 2" Arc (Radiused Corners)']=new Array("8049", "495.0000");
                                product_name_price['EP5-18 42" Glass RA 2" Arc (Squared Corners)']=new Array("8050", "445.0000");
                                product_name_price['EP5-18 42" Glass RA 4" Arc (Radiused Corners)']=new Array("8051", "495.0000");
                                product_name_price['EP5-18 42" Glass RA 4" Arc (Squared Corners)']=new Array("8052", "445.0000");
                                product_name_price['EP5-18 42" Glass RA 6" Arc (Radiused Corners)']=new Array("8053", "495.0000");
                                product_name_price['EP5-18 42" Glass RA 6" Arc (Squared Corners)']=new Array("8054", "445.0000");
                                product_name_price['EP5-18 48" Glass RA 2" Arc (Squared Corners)']=new Array("8055", "588.0000");
                                product_name_price['EP5-18 48" Glass RA 4" Arc (Radiused Corners)']=new Array("8056", "618.0000");
                                product_name_price['EP5-18 48" Glass RA 4" Arc (Squared Corners)']=new Array("8057", "588.0000");
                                product_name_price['EP5-18 48" Glass RA 6" Arc (Radiused Corners)']=new Array("8058", "618.0000");
                                product_name_price['EP5-18 48" Glass RA 6" Arc (Squared Corners)']=new Array("8059", "588.0000");
                                product_name_price['EP5-18 54" Glass RA 2" Arc (Radiused Corners)']=new Array("8060", "651.0000");
                                product_name_price['EP5-18 54" Glass RA 2" Arc (Squared Corners)']=new Array("8061", "621.0000");
                                product_name_price['EP5-18 54" Glass RA 4" Arc (Radiused Corners)']=new Array("8062", "651.0000");
                                product_name_price['EP5-18 54" Glass RA 4" Arc (Squared Corners)']=new Array("8063", "621.0000");
                                product_name_price['EP5-18 54" Glass RA 6" Arc (Radiused Corners)']=new Array("8064", "651.0000");
                                product_name_price['EP5-18 54" Glass RA 6" Arc (Squared Corners)']=new Array("8065", "621.0000");
                                product_name_price['EP5-22 12" Glass RA 2" Arc (Radiused Corners)']=new Array("8066", "404.0000");
                                product_name_price['EP5-22 12" Glass RA 2" Arc (Squared Corners)']=new Array("8067", "361.0000");
                                product_name_price['EP5-22 12" Glass RA 4" Arc (Radiused Corners)']=new Array("8068", "404.0000");
                                product_name_price['EP5-22 12" Glass RA 4" Arc (Squared Corners)']=new Array("8069", "361.0000");
                                product_name_price['EP5-22 12" Glass RA 6" Arc (Radiused Corners)']=new Array("8070", "404.0000");
                                product_name_price['EP5-22 12" Glass RA 6" Arc (Squared Corners)']=new Array("8071", "361.0000");
                                product_name_price['EP5-22 18" Glass RA 2" Arc (Radiused Corners)']=new Array("8072", "428.0000");
                                product_name_price['EP5-22 18" Glass RA 2" Arc (Squared Corners)']=new Array("8073", "383.0000");
                                product_name_price['EP5-22 18" Glass RA 4" Arc (Radiused Corners)']=new Array("8074", "428.0000");
                                product_name_price['EP5-22 18" Glass RA 4" Arc (Squared Corners)']=new Array("8075", "418.4275");
                                product_name_price['EP5-22 18" Glass RA 6" Arc (Radiused Corners)']=new Array("8076", "428.0000");
                                product_name_price['EP5-22 18" Glass RA 6" Arc (Squared Corners)']=new Array("8077", "383.0000");
                                product_name_price['EP5-22 24" Glass RA 2" Arc (Radiused Corners)']=new Array("8078", "450.0000");
                                product_name_price['EP5-22 24" Glass RA 2" Arc (Squared Corners)']=new Array("8079", "404.0000");
                                product_name_price['EP5-22 24" Glass RA 4" Arc (Radiused Corners)']=new Array("8080", "450.0000");
                                product_name_price['EP5-22 24" Glass RA 4" Arc (Squared Corners)']=new Array("8081", "404.0000");
                                product_name_price['EP5-22 24" Glass RA 6" Arc (Radiused Corners)']=new Array("8082", "450.0000");
                                product_name_price['EP5-22 24" Glass RA 6" Arc (Squared Corners)']=new Array("8083", "404.0000");
                                product_name_price['EP5-22 30" Glass RA 2" Arc (Radiused Corners)']=new Array("8084", "474.0000");
                                product_name_price['EP5-22 30" Glass RA 2" Arc (Squared Corners)']=new Array("8085", "424.0000");
                                product_name_price['EP5-22 30" Glass RA 4" Arc (Radiused Corners)']=new Array("8086", "474.0000");
                                product_name_price['EP5-22 30" Glass RA 4" Arc (Squared Corners)']=new Array("8087", "424.0000");
                                product_name_price['EP5-22 30" Glass RA 6" Arc (Radiused Corners)']=new Array("8088", "474.0000");
                                product_name_price['EP5-22 30" Glass RA 6" Arc (Squared Corners)']=new Array("8089", "424.0000");
                                product_name_price['EP5-22 36" Glass RA 2" Arc (Radiused Corners)']=new Array("8090", "497.0000");
                                product_name_price['EP5-22 36" Glass RA 2" Arc (Squared Corners)']=new Array("8091", "447.0000");
                                product_name_price['EP5-22 36" Glass RA 4" Arc (Radiused Corners)']=new Array("8092", "497.0000");
                                product_name_price['EP5-22 36" Glass RA 4" Arc (Squared Corners)']=new Array("8093", "447.0000");
                                product_name_price['EP5-22 36" Glass RA 6" Arc (Radiused Corners)']=new Array("8094", "497.0000");
                                product_name_price['EP5-22 36" Glass RA 6" Arc (Squared Corners)']=new Array("8095", "447.0000");
                                product_name_price['EP5-22 42" Glass RA 2" Arc (Radiused Corners)']=new Array("8096", "522.0000");
                                product_name_price['EP5-22 42" Glass RA 2" Arc (Squared Corners)']=new Array("8097", "468.0000");
                                product_name_price['EP5-22 42" Glass RA 4" Arc (Radiused Corners)']=new Array("8098", "522.0000");
                                product_name_price['EP5-22 42" Glass RA 4" Arc (Squared Corners)']=new Array("8099", "468.0000");
                                product_name_price['EP5-22 42" Glass RA 6" Arc (Radiused Corners)']=new Array("8100", "522.0000");
                                product_name_price['EP5-22 42" Glass RA 6" Arc (Squared Corners)']=new Array("8101", "468.0000");
                                product_name_price['EP5-22 48" Glass RA 2" Arc (Radiused Corners)']=new Array("8102", "672.0000");
                                product_name_price['EP5-22 48" Glass RA 2" Arc (Squared Corners)']=new Array("8103", "641.0000");
                                product_name_price['EP5-22 48" Glass RA 4" Arc (Radiused Corners)']=new Array("8104", "672.0000");
                                product_name_price['EP5-22 48" Glass RA 4" Arc (Squared Corners)']=new Array("8105", "641.0000");
                                product_name_price['EP5-22 48" Glass RA 6" Arc (Radiused Corners)']=new Array("8106", "672.0000");
                                product_name_price['EP5-22 48" Glass RA 6" Arc (Squared Corners)']=new Array("8107", "641.0000");
                                product_name_price['EP5-22 54" Glass RA 2" Arc (Radiused Corners)']=new Array("8108", "712.0000");
                                product_name_price['EP5-22 54" Glass RA 2" Arc (Squared Corners)']=new Array("8109", "681.0000");
                                product_name_price['EP5-22 54" Glass RA 4" Arc (Radiused Corners)']=new Array("8110", "712.0000");
                                product_name_price['EP5-22 54" Glass RA 4" Arc (Squared Corners)']=new Array("8111", "681.0000");
                                product_name_price['EP5-22 54" Glass RA 6" Arc (Radiused Corners)']=new Array("8112", "712.0000");
                                product_name_price['EP5-22 54" Glass RA 6" Arc (Squared Corners)']=new Array("8113", "681.0000");
                                product_name_price['EP5-26 12" Glass RA 2" Arc (Radiused Corners)']=new Array("8114", "414.0000");
                                product_name_price['EP5-26 12" Glass RA 2" Arc (Squared Corners)']=new Array("8115", "371.0000");
                                product_name_price['EP5-26 12" Glass RA 4" Arc (Radiused Corners)']=new Array("8116", "414.0000");
                                product_name_price['EP5-26 12" Glass RA 4" Arc (Squared Corners)']=new Array("8117", "371.0000");
                                product_name_price['EP5-26 12" Glass RA 6" Arc (Radiused Corners)']=new Array("8118", "414.0000");
                                product_name_price['EP5-26 12" Glass RA 6" Arc (Squared Corners)']=new Array("8119", "371.0000");
                                product_name_price['EP5-26 18" Glass RA 2" Arc (Radiused Corners)']=new Array("8120", "441.0000");
                                product_name_price['EP5-26 18" Glass RA 2" Arc (Squared Corners)']=new Array("8121", "395.0000");
                                product_name_price['EP5-26 18" Glass RA 4" Arc (Radiused Corners)']=new Array("8122", "441.0000");
                                product_name_price['EP5-26 18" Glass RA 4" Arc (Squared Corners)']=new Array("8123", "395.0000");
                                product_name_price['EP5-26 18" Glass RA 6" Arc (Radiused Corners)']=new Array("8124", "441.0000");
                                product_name_price['EP5-26 18" Glass RA 6" Arc (Squared Corners)']=new Array("8125", "395.0000");
                                product_name_price['EP5-26 24" Glass RA 2" Arc (Radiused Corners)']=new Array("8126", "468.0000");
                                product_name_price['EP5-26 24" Glass RA 2" Arc (Squared Corners)']=new Array("8127", "419.0000");
                                product_name_price['EP5-26 24" Glass RA 4" Arc (Radiused Corners)']=new Array("8128", "468.0000");
                                product_name_price['EP5-26 24" Glass RA 4" Arc (Squared Corners)']=new Array("8129", "419.0000");
                                product_name_price['EP5-26 24" Glass RA 6" Arc (Radiused Corners)']=new Array("8130", "468.0000");
                                product_name_price['EP5-26 24" Glass RA 6" Arc (Squared Corners)']=new Array("8131", "419.0000");
                                product_name_price['EP5-26 30" Glass RA 2" Arc (Radiused Corners)']=new Array("8132", "495.0000");
                                product_name_price['EP5-26 30" Glass RA 2" Arc (Squared Corners)']=new Array("8133", "442.0000");
                                product_name_price['EP5-26 30" Glass RA 4" Arc (Radiused Corners)']=new Array("8134", "495.0000");
                                product_name_price['EP5-26 30" Glass RA 4" Arc (Squared Corners)']=new Array("8135", "442.0000");
                                product_name_price['EP5-26 30" Glass RA 6" Arc (Radiused Corners)']=new Array("8136", "495.0000");
                                product_name_price['EP5-26 30" Glass RA 6" Arc (Squared Corners)']=new Array("8137", "442.0000");
                                product_name_price['EP5-26 36" Glass RA 2" Arc (Radiused Corners)']=new Array("8138", "522.0000");
                                product_name_price['EP5-26 36" Glass RA 2" Arc (Squared Corners)']=new Array("8139", "484.0000");
                                product_name_price['EP5-26 36" Glass RA 4" Arc (Radiused Corners)']=new Array("8140", "522.0000");
                                product_name_price['EP5-26 36" Glass RA 4" Arc (Squared Corners)']=new Array("8141", "484.0000");
                                product_name_price['EP5-26 36" Glass RA 6" Arc (Radiused Corners)']=new Array("8142", "522.0000");
                                product_name_price['EP5-26 36" Glass RA 6" Arc (Squared Corners)']=new Array("8143", "484.0000");
                                product_name_price['EP5-26 42" Glass RA 2" Arc (Radiused Corners)']=new Array("8144", "534.0000");
                                product_name_price['EP5-26 42" Glass RA 2" Arc (Squared Corners)']=new Array("8145", "492.0000");
                                product_name_price['EP5-26 42" Glass RA 4" Arc (Radiused Corners)']=new Array("8146", "534.0000");
                                product_name_price['EP5-26 42" Glass RA 4" Arc (Squared Corners)']=new Array("8147", "492.0000");
                                product_name_price['EP5-26 42" Glass RA 6" Arc (Radiused Corners)']=new Array("8148", "534.0000");
                                product_name_price['EP5-26 42" Glass RA 6" Arc (Squared Corners)']=new Array("8149", "492.0000");
                                product_name_price['EP5-26 48" Glass RA 2" Arc (Radiused Corners)']=new Array("8150", "739.0000");
                                product_name_price['EP5-26 48" Glass RA 2" Arc (Squared Corners)']=new Array("8151", "709.0000");
                                product_name_price['EP5-26 48" Glass RA 4" Arc (Radiused Corners)']=new Array("8152", "739.0000");
                                product_name_price['EP5-26 48" Glass RA 4" Arc (Squared Corners)']=new Array("8153", "709.0000");
                                product_name_price['EP5-26 48" Glass RA 6" Arc (Radiused Corners)']=new Array("8154", "739.0000");
                                product_name_price['EP5-26 48" Glass RA 6" Arc (Squared Corners)']=new Array("8155", "709.0000");
                                product_name_price['EP5-26 54" Glass RA 2" Arc (Radiused Corners)']=new Array("8156", "787.0000");
                                product_name_price['EP5-26 54" Glass RA 2" Arc (Squared Corners)']=new Array("8157", "756.0000");
                                product_name_price['EP5-26 54" Glass RA 4" Arc (Radiused Corners)']=new Array("8158", "787.0000");
                                product_name_price['EP5-26 54" Glass RA 4" Arc (Squared Corners)']=new Array("8159", "756.0000");
                                product_name_price['EP5-26 54" Glass RA 6" Arc (Radiused Corners)']=new Array("8160", "787.0000");
                                product_name_price['EP5-26 54" Glass RA 6" Arc (Squared Corners)']=new Array("8161", "756.0000");
                                product_name_price['EP5-18 48" Glass RA 2" Arc (Radiused Corners)']=new Array("8162", "618.0000");
								product_name_price['EP5-36 54" Glass (Squared Corners)']=new Array("10711", "468.0000");
                                product_name_price['EP5-36 54" Glass (Radiused Corners)']=new Array("10712", "499.0000");
                                product_name_price['EP5-36 48" Glass (Squared Corners)']=new Array("10713", "421.0000");
                                product_name_price['EP5-36 48" Glass (Radiused Corners)']=new Array("10714", "451.0000");
                                product_name_price['EP5-36 18" Glass (Radiused Corners)']=new Array("10715", "153.0000");
                                product_name_price['EP5-36 42" Glass (Squared Corners)']=new Array("10716", "204.0000");
                                product_name_price['EP5-36 36" Glass (Squared Corners)']=new Array("10717", "196.0000");
                                product_name_price['EP5-36 30" Glass (Squared Corners)']=new Array("10718", "154.0000");
                                product_name_price['EP5-36 24" Glass (Squared Corners)']=new Array("10719", "131.0000");
                                product_name_price['EP5-36 18" Glass (Squared Corners)']=new Array("10720", "107.0000");
                                product_name_price['EP5-36 12" Glass (Squared Corners)']=new Array("10721", "83.0000");
                                product_name_price['EP5-36 36" Glass (Radiused Corners)']=new Array("10722", "234.0000");
                                product_name_price['EP5-36 30" Glass (Radiused Corners)']=new Array("10723", "207.0000");
                                product_name_price['EP5-36 24" Glass (Radiused Corners)']=new Array("10724", "180.0000");
                                product_name_price['EP5-36 42" Glass (Radiused Corners)']=new Array("10725", "246.0000");
                                product_name_price['EP5-36 12" Glass (Radiused Corners)']=new Array("10726", "126.0000");
                                product_name_price['EP5-42 12" Glass (Radiused Corners)']=new Array("10727", "138.0000");
                                product_name_price['EP5-42 42" Glass (Radiused Corners)']=new Array("10728", "258.0000");
                                product_name_price['EP5-42 24" Glass (Radiused Corners)']=new Array("10729", "192.0000");
                                product_name_price['EP5-42 30" Glass (Radiused Corners)']=new Array("10730", "219.0000");
                                product_name_price['EP5-42 36" Glass (Radiused Corners)']=new Array("10731", "246.0000");
                                product_name_price['EP5-42 18" Glass (Radiused Corners)']=new Array("10732", "165.0000");
                                product_name_price['EP5-42 48" Glass (Radiused Corners)']=new Array("10733", "463.0000");
                                product_name_price['EP5-42 54" Glass (Radiused Corners)']=new Array("10734", "511.0000");
                                product_name_price['EP5-42 12" Glass (Squared Corners)']=new Array("10735", "95.0000");
                                product_name_price['EP5-42 18" Glass (Squared Corners)']=new Array("10736", "119.0000");
                                product_name_price['EP5-42 24" Glass (Squared Corners)']=new Array("10737", "143.0000");
                                product_name_price['EP5-42 30" Glass (Squared Corners)']=new Array("10738", "166.0000");
                                product_name_price['EP5-42 36" Glass (Squared Corners)']=new Array("10739", "208.0000");
                                product_name_price['EP5-42 42" Glass (Squared Corners)']=new Array("10740", "216.0000");
                                product_name_price['EP5-42 48" Glass (Squared Corners)']=new Array("10741", "433.0000");
                                product_name_price['EP5-42 54" Glass (Squared Corners)']=new Array("10742", "480.0000");
								product_name_price['EP5-36 Center Brushed Aluminum']=new Array("10763", "219.0000");
								product_name_price['EP5-36 Center Post Brushed Stainless Steel']=new Array("10762", "237.0000");
                                product_name_price['EP5-36 Center Post Powder Coated Black']=new Array("10761", "237.0000");
								product_name_price['EP5-36 End Post Brushed Aluminum']=new Array("10766", "136.0000");
								product_name_price['EP5-36 End Post Brushed Stainless Steel']=new Array("10765", "152.0000");
								product_name_price['EP5-36 End Post Powder Coated Black']=new Array("10764", "152.0000");
								product_name_price['EP5-42 Center Brushed Aluminum']=new Array("10770", "261.0000");
								product_name_price['EP5-42 Center Post Brushed Stainless Steel']=new Array("10771", "279.0000");
                                product_name_price['EP5-42 Center Post Powder Coated Black']=new Array("10772", "279.0000");
								product_name_price['EP5-42 End Post Brushed Aluminum']=new Array("10767", "167.0000");
								product_name_price['EP5-42 End Post Brushed Stainless Steel']=new Array("10768", "183.0000");
								product_name_price['EP5-42 End Post Powder Coated Black']=new Array("10769", "183.0000");
								product_name_price['EP5-36 54" Glass RA 2" Arc (Squared Corners)']=new Array("10839", "768.0000");
                                product_name_price['EP5-36 54" Glass RA 2" Arc (Radiused Corners)']=new Array("10840", "799.0000");
                                product_name_price['EP5-36 48" Glass RA 2" Arc (Squared Corners)']=new Array("10841", "711.0000");
                                product_name_price['EP5-36 48" Glass RA 2" Arc (Radiused Corners)']=new Array("10842", "751.0000");
                                product_name_price['EP5-36 42" Glass RA 2" Arc (Squared Corners)']=new Array("10843", "504.0000");
                                product_name_price['EP5-36 42" Glass RA 2" Arc (Radiused Corners)']=new Array("10844", "546.0000");
                                product_name_price['EP5-36 36" Glass RA 2" Arc (Squared Corners)']=new Array("10845", "496.0000");
                                product_name_price['EP5-36 36" Glass RA 2" Arc (Radiused Corners)']=new Array("10846", "534.0000");
                                product_name_price['EP5-36 30" Glass RA 2" Arc (Squared Corners)']=new Array("10847", "454.0000");
                                product_name_price['EP5-36 30" Glass RA 2" Arc (Radiused Corners)']=new Array("10848", "507.0000");
                                product_name_price['EP5-36 24" Glass RA 2" Arc (Squared Corners)']=new Array("10849", "431.0000");
                                product_name_price['EP5-36 24" Glass RA 2" Arc (Radiused Corners)']=new Array("10850", "480.0000");
                                product_name_price['EP5-36 18" Glass RA 2" Arc (Squared Corners)']=new Array("10851", "407.0000");
                                product_name_price['EP5-36 18" Glass RA 2" Arc (Radiused Corners)']=new Array("10852", "453.0000");
                                product_name_price['EP5-36 12" Glass RA 2" Arc (Squared Corners)']=new Array("10853", "383.0000");
                                product_name_price['EP5-36 12" Glass RA 2" Arc (Radiused Corners)']=new Array("10854", "426.0000");
                                product_name_price['EP5-36 12" Glass RA 4" Arc (Radiused Corners)']=new Array("10855", "426.0000");
                                product_name_price['EP5-36 12" Glass RA 4" Arc (Squared Corners)']=new Array("10856", "383.0000");
                                product_name_price['EP5-36 18" Glass RA 4" Arc (Radiused Corners)']=new Array("10857", "453.0000");
                                product_name_price['EP5-36 18" Glass RA 4" Arc (Squared Corners)']=new Array("10858", "407.0000");
                                product_name_price['EP5-36 24" Glass RA 4" Arc (Radiused Corners)']=new Array("10859", "480.0000");
                                product_name_price['EP5-36 24" Glass RA 4" Arc (Squared Corners)']=new Array("10860", "431.0000");
                                product_name_price['EP5-36 30" Glass RA 4" Arc (Radiused Corners)']=new Array("10861", "507.0000");
                                product_name_price['EP5-36 30" Glass RA 4" Arc (Squared Corners)']=new Array("10862", "454.0000");
                                product_name_price['EP5-36 36" Glass RA 4" Arc (Radiused Corners)']=new Array("10863", "534.0000");
                                product_name_price['EP5-36 36" Glass RA 4" Arc (Squared Corners)']=new Array("10864", "496.0000");
                                product_name_price['EP5-36 42" Glass RA 4" Arc (Radiused Corners)']=new Array("10865", "546.0000");
                                product_name_price['EP5-36 42" Glass RA 4" Arc (Squared Corners)']=new Array("10866", "504.0000");
                                product_name_price['EP5-36 48" Glass RA 4" Arc (Radiused Corners)']=new Array("10867", "751.0000");
                                product_name_price['EP5-36 48" Glass RA 4" Arc (Squared Corners)']=new Array("10868", "711.0000");
                                product_name_price['EP5-36 54" Glass RA 4" Arc (Radiused Corners)']=new Array("10869", "799.0000");
                                product_name_price['EP5-36 54" Glass RA 4" Arc (Squared Corners)']=new Array("10870", "768.0000");
                                product_name_price['EP5-36 12" Glass RA 6" Arc (Radiused Corners)']=new Array("10871", "426.0000");
                                product_name_price['EP5-36 12" Glass RA 6" Arc (Squared Corners)']=new Array("10872", "383.0000");
                                product_name_price['EP5-36 18" Glass RA 6" Arc (Radiused Corners)']=new Array("10873", "453.0000");
                                product_name_price['EP5-36 18" Glass RA 6" Arc (Squared Corners)']=new Array("10874", "407.0000");
                                product_name_price['EP5-36 24" Glass RA 6" Arc (Radiused Corners)']=new Array("10875", "480.0000");
                                product_name_price['EP5-36 24" Glass RA 6" Arc (Squared Corners)']=new Array("10876", "431.0000");
                                product_name_price['EP5-36 30" Glass RA 6" Arc (Radiused Corners)']=new Array("10877", "507.0000");
                                product_name_price['EP5-36 30" Glass RA 6" Arc (Squared Corners)']=new Array("10878", "454.0000");
                                product_name_price['EP5-36 36" Glass RA 6" Arc (Radiused Corners)']=new Array("10879", "534.0000");
                                product_name_price['EP5-36 36" Glass RA 6" Arc (Squared Corners)']=new Array("10880", "496.0000");
                                product_name_price['EP5-36 42" Glass RA 6" Arc (Radiused Corners)']=new Array("10881", "546.0000");
                                product_name_price['EP5-36 42" Glass RA 6" Arc (Squared Corners)']=new Array("10882", "504.0000");
                                product_name_price['EP5-36 48" Glass RA 6" Arc (Radiused Corners)']=new Array("10883", "751.0000");
                                product_name_price['EP5-36 48" Glass RA 6" Arc (Squared Corners)']=new Array("10884", "711.0000");
                                product_name_price['EP5-36 54" Glass RA 6" Arc (Radiused Corners)']=new Array("10885", "799.0000");
                                product_name_price['EP5-36 54" Glass RA 6" Arc (Squared Corners)']=new Array("10886", "768.0000");
                                product_name_price['EP5-36 54" Glass FA 6" Arc (Squared Corners)']=new Array("10887", "768.0000");
                                product_name_price['EP5-36 54" Glass FA 6" Arc (Radiused Corners)']=new Array("10888", "799.0000");
                                product_name_price['EP5-36 48" Glass FA 6" Arc (Squared Corners)']=new Array("10889", "711.0000");
                                product_name_price['EP5-36 48" Glass FA 6" Arc (Radiused Corners)']=new Array("10890", "751.0000");
                                product_name_price['EP5-36 42" Glass FA 6" Arc (Squared Corners)']=new Array("10891", "504.0000");
                                product_name_price['EP5-36 42" Glass FA 6" Arc (Radiused Corners)']=new Array("10892", "546.0000");
                                product_name_price['EP5-36 36" Glass FA 6" Arc (Squared Corners)']=new Array("10893", "496.0000");
                                product_name_price['EP5-36 36" Glass FA 6" Arc (Radiused Corners)']=new Array("10894", "534.0000");
                                product_name_price['EP5-36 30" Glass FA 6" Arc (Squared Corners)']=new Array("10895", "454.0000");
                                product_name_price['EP5-36 30" Glass FA 6" Arc (Radiused Corners)']=new Array("10896", "507.0000");
                                product_name_price['EP5-36 24" Glass FA 6" Arc (Squared Corners)']=new Array("10897", "431.0000");
                                product_name_price['EP5-36 24" Glass FA 6" Arc (Radiused Corners)']=new Array("10898", "480.0000");
                                product_name_price['EP5-36 18" Glass FA 6" Arc (Squared Corners)']=new Array("10899", "407.0000");
                                product_name_price['EP5-36 18" Glass FA 6" Arc (Radiused Corners)']=new Array("10900", "453.0000");
                                product_name_price['EP5-36 12" Glass FA 6" Arc (Squared Corners)']=new Array("10901", "383.0000");
                                product_name_price['EP5-36 12" Glass FA 6" Arc (Radiused Corners)']=new Array("10902", "426.0000");
                                product_name_price['EP5-36 54" Glass FA 4" Arc (Squared Corners)']=new Array("10903", "768.0000");
                                product_name_price['EP5-36 54" Glass FA 4" Arc (Radiused Corners)']=new Array("10904", "799.0000");
                                product_name_price['EP5-36 48" Glass FA 4" Arc (Squared Corners)']=new Array("10905", "711.0000");
                                product_name_price['EP5-36 48" Glass FA 4" Arc (Radiused Corners)']=new Array("10906", "751.0000");
                                product_name_price['EP5-36 42" Glass FA 4" Arc (Squared Corners)']=new Array("10907", "504.0000");
                                product_name_price['EP5-36 42" Glass FA 4" Arc (Radiused Corners)']=new Array("10908", "546.0000");
                                product_name_price['EP5-36 36" Glass FA 4" Arc (Squared Corners)']=new Array("10909", "496.0000");
                                product_name_price['EP5-36 36" Glass FA 4" Arc (Radiused Corners)']=new Array("10910", "534.0000");
                                product_name_price['EP5-36 30" Glass FA 4" Arc (Squared Corners)']=new Array("10911", "454.0000");
                                product_name_price['EP5-36 30" Glass FA 4" Arc (Radiused Corners)']=new Array("10912", "507.0000");
                                product_name_price['EP5-36 24" Glass FA 4" Arc (Squared Corners)']=new Array("10913", "431.0000");
                                product_name_price['EP5-36 24" Glass FA 4" Arc (Radiused Corners)']=new Array("10914", "480.0000");
                                product_name_price['EP5-36 18" Glass FA 4" Arc (Squared Corners)']=new Array("10915", "407.0000");
                                product_name_price['EP5-36 18" Glass FA 4" Arc (Radiused Corners)']=new Array("10916", "453.0000");
                                product_name_price['EP5-36 12" Glass FA 4" Arc (Squared Corners)']=new Array("10917", "383.0000");
                                product_name_price['EP5-36 12" Glass FA 4" Arc (Radiused Corners)']=new Array("10918", "426.0000");
                                product_name_price['EP5-36 12" Glass FA 2" Arc (Radiused Corners)']=new Array("10919", "426.0000");
                                product_name_price['EP5-36 12" Glass FA 2" Arc (Squared Corners)']=new Array("10920", "383.0000");
                                product_name_price['EP5-36 18" Glass FA 2" Arc (Radiused Corners)']=new Array("10921", "453.0000");
                                product_name_price['EP5-36 18" Glass FA 2" Arc (Squared Corners)']=new Array("10922", "407.0000");
                                product_name_price['EP5-36 24" Glass FA 2" Arc (Radiused Corners)']=new Array("10923", "480.0000");
                                product_name_price['EP5-36 24" Glass FA 2" Arc (Squared Corners)']=new Array("10924", "431.0000");
                                product_name_price['EP5-36 30" Glass FA 2" Arc (Radiused Corners)']=new Array("10925", "507.0000");
                                product_name_price['EP5-36 30" Glass FA 2" Arc (Squared Corners)']=new Array("10926", "454.0000");
                                product_name_price['EP5-36 36" Glass FA 2" Arc (Radiused Corners)']=new Array("10927", "534.0000");
                                product_name_price['EP5-36 36" Glass FA 2" Arc (Squared Corners)']=new Array("10928", "496.0000");
                                product_name_price['EP5-36 42" Glass FA 2" Arc (Radiused Corners)']=new Array("10929", "546.0000");
                                product_name_price['EP5-36 42" Glass FA 2" Arc (Squared Corners)']=new Array("10930", "504.0000");
                                product_name_price['EP5-36 48" Glass FA 2" Arc (Radiused Corners)']=new Array("10931", "751.0000");
                                product_name_price['EP5-36 48" Glass FA 2" Arc (Squared Corners)']=new Array("10932", "711.0000");
                                product_name_price['EP5-36 54" Glass FA 2" Arc (Radiused Corners)']=new Array("10933", "799.0000");
                                product_name_price['EP5-36 54" Glass FA 2" Arc (Squared Corners)']=new Array("10934", "768.0000");
                                product_name_price['EP5-36 54" Glass CA 6" Arc (Squared Corners)']=new Array("10935", "768.0000");
                                product_name_price['EP5-36 54" Glass CA 6" Arc (Radiused Corners)']=new Array("10936", "799.0000");
                                product_name_price['EP5-36 48" Glass CA 6" Arc (Squared Corners)']=new Array("10937", "711.0000");
                                product_name_price['EP5-36 48" Glass CA 6" Arc (Radiused Corners)']=new Array("10938", "751.0000");
                                product_name_price['EP5-36 42" Glass CA 6" Arc (Squared Corners)']=new Array("10939", "504.0000");
                                product_name_price['EP5-36 42" Glass CA 6" Arc (Radiused Corners)']=new Array("10940", "546.0000");
                                product_name_price['EP5-36 36" Glass CA 6" Arc (Squared Corners)']=new Array("10941", "496.0000");
                                product_name_price['EP5-36 36" Glass CA 6" Arc (Radiused Corners)']=new Array("10942", "534.0000");
                                product_name_price['EP5-36 30" Glass CA 6" Arc (Squared Corners)']=new Array("10943", "454.0000");
                                product_name_price['EP5-36 30" Glass CA 6" Arc (Radiused Corners)']=new Array("10944", "507.0000");
                                product_name_price['EP5-36 24" Glass CA 6" Arc (Squared Corners)']=new Array("10945", "431.0000");
                                product_name_price['EP5-36 24" Glass CA 6" Arc (Radiused Corners)']=new Array("10946", "480.0000");
                                product_name_price['EP5-36 18" Glass CA 6" Arc (Squared Corners)']=new Array("10947", "407.0000");
                                product_name_price['EP5-36 18" Glass CA 6" Arc (Radiused Corners)']=new Array("10948", "453.0000");
                                product_name_price['EP5-36 12" Glass CA 6" Arc (Squared Corners)']=new Array("10949", "383.0000");
                                product_name_price['EP5-36 12" Glass CA 6" Arc (Radiused Corners)']=new Array("10950", "426.0000");
                                product_name_price['EP5-36 54" Glass CA 4" Arc (Squared Corners)']=new Array("10951", "768.0000");
                                product_name_price['EP5-36 54" Glass CA 4" Arc (Radiused Corners)']=new Array("10952", "799.0000");
                                product_name_price['EP5-36 48" Glass CA 4" Arc (Squared Corners)']=new Array("10953", "711.0000");
                                product_name_price['EP5-36 48" Glass CA 4" Arc (Radiused Corners)']=new Array("10954", "751.0000");
                                product_name_price['EP5-36 42" Glass CA 4" Arc (Squared Corners)']=new Array("10955", "504.0000");
                                product_name_price['EP5-36 42" Glass CA 4" Arc (Radiused Corners)']=new Array("10956", "546.0000");
                                product_name_price['EP5-36 36" Glass CA 4" Arc (Squared Corners)']=new Array("10957", "496.0000");
                                product_name_price['EP5-36 36" Glass CA 4" Arc (Radiused Corners)']=new Array("10958", "534.0000");
                                product_name_price['EP5-36 30" Glass CA 4" Arc (Squared Corners)']=new Array("10959", "454.0000");
                                product_name_price['EP5-36 30" Glass CA 4" Arc (Radiused Corners)']=new Array("10960", "507.0000");
                                product_name_price['EP5-36 24" Glass CA 4" Arc (Squared Corners)']=new Array("10961", "431.0000");
                                product_name_price['EP5-36 24" Glass CA 4" Arc (Radiused Corners)']=new Array("10962", "480.0000");
                                product_name_price['EP5-36 18" Glass CA 4" Arc (Squared Corners)']=new Array("10963", "407.0000");
                                product_name_price['EP5-36 18" Glass CA 4" Arc (Radiused Corners)']=new Array("10964", "453.0000");
                                product_name_price['EP5-36 12" Glass CA 4" Arc (Squared Corners)']=new Array("10965", "383.0000");
                                product_name_price['EP5-36 12" Glass CA 4" Arc (Radiused Corners)']=new Array("10966", "426.0000");
                                product_name_price['EP5-36 12" Glass CA 2" Arc (Radiused Corners)']=new Array("10967", "426.0000");
                                product_name_price['EP5-36 12" Glass CA 2" Arc (Squared Corners)']=new Array("10968", "383.0000");
                                product_name_price['EP5-36 18" Glass CA 2" Arc (Radiused Corners)']=new Array("10969", "453.0000");
                                product_name_price['EP5-36 18" Glass CA 2" Arc (Squared Corners)']=new Array("10970", "407.0000");
                                product_name_price['EP5-36 24" Glass CA 2" Arc (Radiused Corners)']=new Array("10971", "480.0000");
                                product_name_price['EP5-36 24" Glass CA 2" Arc (Squared Corners)']=new Array("10972", "431.0000");
                                product_name_price['EP5-36 30" Glass CA 2" Arc (Radiused Corners)']=new Array("10973", "507.0000");
                                product_name_price['EP5-36 30" Glass CA 2" Arc (Squared Corners)']=new Array("10974", "454.0000");
                                product_name_price['EP5-36 36" Glass CA 2" Arc (Radiused Corners)']=new Array("10975", "534.0000");
                                product_name_price['EP5-36 36" Glass CA 2" Arc (Squared Corners)']=new Array("10976", "496.0000");
                                product_name_price['EP5-36 42" Glass CA 2" Arc (Radiused Corners)']=new Array("10977", "546.0000");
                                product_name_price['EP5-36 42" Glass CA 2" Arc (Squared Corners)']=new Array("10978", "504.0000");
                                product_name_price['EP5-36 48" Glass CA 2" Arc (Radiused Corners)']=new Array("10979", "751.0000");
                                product_name_price['EP5-36 48" Glass CA 2" Arc (Squared Corners)']=new Array("10980", "711.0000");
                                product_name_price['EP5-36 54" Glass CA 2" Arc (Radiused Corners)']=new Array("10981", "799.0000");
                                product_name_price['EP5-36 54" Glass CA 2" Arc (Squared Corners)']=new Array("10982", "768.0000");
                                product_name_price['EP5-42 12" Glass RA 2" Arc (Radiused Corners)']=new Array("10983", "438.0000");
                                product_name_price['EP5-42 12" Glass RA 2" Arc (Squared Corners)']=new Array("10984", "395.0000");
                                product_name_price['EP5-42 18" Glass RA 2" Arc (Radiused Corners)']=new Array("10985", "465.0000");
                                product_name_price['EP5-42 18" Glass RA 2" Arc (Squared Corners)']=new Array("10986", "419.0000");
                                product_name_price['EP5-42 24" Glass RA 2" Arc (Radiused Corners)']=new Array("10987", "492.0000");
                                product_name_price['EP5-42 24" Glass RA 2" Arc (Squared Corners)']=new Array("10988", "443.0000");
                                product_name_price['EP5-42 30" Glass RA 2" Arc (Radiused Corners)']=new Array("10989", "519.0000");
                                product_name_price['EP5-42 30" Glass RA 2" Arc (Squared Corners)']=new Array("10990", "466.0000");
                                product_name_price['EP5-42 36" Glass RA 2" Arc (Radiused Corners)']=new Array("10991", "546.0000");
                                product_name_price['EP5-42 36" Glass RA 2" Arc (Squared Corners)']=new Array("10992", "508.0000");
                                product_name_price['EP5-42 42" Glass RA 2" Arc (Radiused Corners)']=new Array("10993", "558.0000");
                                product_name_price['EP5-42 42" Glass RA 2" Arc (Squared Corners)']=new Array("10994", "516.0000");
                                product_name_price['EP5-42 48" Glass RA 2" Arc (Radiused Corners)']=new Array("10995", "763.0000");
                                product_name_price['EP5-42 48" Glass RA 2" Arc (Squared Corners)']=new Array("10996", "733.0000");
                                product_name_price['EP5-42 54" Glass RA 2" Arc (Radiused Corners)']=new Array("10997", "811.0000");
                                product_name_price['EP5-42 54" Glass RA 2" Arc (Squared Corners)']=new Array("10998", "780.0000");
                                product_name_price['EP5-42 54" Glass RA 4" Arc (Squared Corners)']=new Array("10999", "780.0000");
                                product_name_price['EP5-42 54" Glass RA 4" Arc (Radiused Corners)']=new Array("11000", "811.0000");
                                product_name_price['EP5-42 48" Glass RA 4" Arc (Squared Corners)']=new Array("11001", "733.0000");
                                product_name_price['EP5-42 48" Glass RA 4" Arc (Radiused Corners)']=new Array("11002", "763.0000");
                                product_name_price['EP5-42 42" Glass RA 4" Arc (Squared Corners)']=new Array("11003", "516.0000");
                                product_name_price['EP5-42 42" Glass RA 4" Arc (Radiused Corners)']=new Array("11004", "558.0000");
                                product_name_price['EP5-42 36" Glass RA 4" Arc (Squared Corners)']=new Array("11005", "508.0000");
                                product_name_price['EP5-42 36" Glass RA 4" Arc (Radiused Corners)']=new Array("11006", "546.0000");
                                product_name_price['EP5-42 30" Glass RA 4" Arc (Squared Corners)']=new Array("11007", "466.0000");
                                product_name_price['EP5-42 30" Glass RA 4" Arc (Radiused Corners)']=new Array("11008", "519.0000");
                                product_name_price['EP5-42 24" Glass RA 4" Arc (Squared Corners)']=new Array("11009", "443.0000");
                                product_name_price['EP5-42 24" Glass RA 4" Arc (Radiused Corners)']=new Array("11010", "492.0000");
                                product_name_price['EP5-42 18" Glass RA 4" Arc (Squared Corners)']=new Array("11011", "419.0000");
                                product_name_price['EP5-42 18" Glass RA 4" Arc (Radiused Corners)']=new Array("11012", "465.0000");
                                product_name_price['EP5-42 12" Glass RA 4" Arc (Squared Corners)']=new Array("11013", "395.0000");
                                product_name_price['EP5-42 12" Glass RA 4" Arc (Radiused Corners)']=new Array("11014", "438.0000");
                                product_name_price['EP5-42 54" Glass RA 6" Arc (Squared Corners)']=new Array("11015", "780.0000");
                                product_name_price['EP5-42 54" Glass RA 6" Arc (Radiused Corners)']=new Array("11016", "811.0000");
                                product_name_price['EP5-42 48" Glass RA 6" Arc (Squared Corners)']=new Array("11017", "733.0000");
                                product_name_price['EP5-42 48" Glass RA 6" Arc (Radiused Corners)']=new Array("11018", "763.0000");
                                product_name_price['EP5-42 42" Glass RA 6" Arc (Squared Corners)']=new Array("11019", "516.0000");
                                product_name_price['EP5-42 42" Glass RA 6" Arc (Radiused Corners)']=new Array("11020", "558.0000");
                                product_name_price['EP5-42 36" Glass RA 6" Arc (Squared Corners)']=new Array("11021", "508.0000");
                                product_name_price['EP5-42 36" Glass RA 6" Arc (Radiused Corners)']=new Array("11022", "546.0000");
                                product_name_price['EP5-42 30" Glass RA 6" Arc (Squared Corners)']=new Array("11023", "466.0000");
                                product_name_price['EP5-42 30" Glass RA 6" Arc (Radiused Corners)']=new Array("11024", "519.0000");
                                product_name_price['EP5-42 24" Glass RA 6" Arc (Squared Corners)']=new Array("11025", "443.0000");
                                product_name_price['EP5-42 24" Glass RA 6" Arc (Radiused Corners)']=new Array("11026", "492.0000");
                                product_name_price['EP5-42 18" Glass RA 6" Arc (Squared Corners)']=new Array("11027", "419.0000");
                                product_name_price['EP5-42 18" Glass RA 6" Arc (Radiused Corners)']=new Array("11028", "465.0000");
                                product_name_price['EP5-42 12" Glass RA 6" Arc (Squared Corners)']=new Array("11029", "395.0000");
                                product_name_price['EP5-42 12" Glass RA 6" Arc (Radiused Corners)']=new Array("11030", "438.0000");
                                product_name_price['EP5-42 12" Glass FA 6" Arc (Radiused Corners)']=new Array("11031", "438.0000");
                                product_name_price['EP5-42 12" Glass FA 6" Arc (Squared Corners)']=new Array("11032", "395.0000");
                                product_name_price['EP5-42 18" Glass FA 6" Arc (Radiused Corners)']=new Array("11033", "465.0000");
                                product_name_price['EP5-42 18" Glass FA 6" Arc (Squared Corners)']=new Array("11034", "419.0000");
                                product_name_price['EP5-42 24" Glass FA 6" Arc (Radiused Corners)']=new Array("11035", "492.0000");
                                product_name_price['EP5-42 24" Glass FA 6" Arc (Squared Corners)']=new Array("11036", "443.0000");
                                product_name_price['EP5-42 30" Glass FA 6" Arc (Radiused Corners)']=new Array("11037", "519.0000");
                                product_name_price['EP5-42 30" Glass FA 6" Arc (Squared Corners)']=new Array("11038", "466.0000");
                                product_name_price['EP5-42 36" Glass FA 6" Arc (Radiused Corners)']=new Array("11039", "546.0000");
                                product_name_price['EP5-42 36" Glass FA 6" Arc (Squared Corners)']=new Array("11040", "508.0000");
                                product_name_price['EP5-42 42" Glass FA 6" Arc (Radiused Corners)']=new Array("11041", "558.0000");
                                product_name_price['EP5-42 42" Glass FA 6" Arc (Squared Corners)']=new Array("11042", "516.0000");
                                product_name_price['EP5-42 48" Glass FA 6" Arc (Radiused Corners)']=new Array("11043", "763.0000");
                                product_name_price['EP5-42 48" Glass FA 6" Arc (Squared Corners)']=new Array("11044", "733.0000");
                                product_name_price['EP5-42 54" Glass FA 6" Arc (Radiused Corners)']=new Array("11045", "811.0000");
                                product_name_price['EP5-42 54" Glass FA 6" Arc (Squared Corners)']=new Array("11046", "780.0000");
                                product_name_price['EP5-42 12" Glass FA 4" Arc (Radiused Corners)']=new Array("11047", "438.0000");
                                product_name_price['EP5-42 12" Glass FA 4" Arc (Squared Corners)']=new Array("11048", "395.0000");
                                product_name_price['EP5-42 18" Glass FA 4" Arc (Radiused Corners)']=new Array("11049", "465.0000");
                                product_name_price['EP5-42 18" Glass FA 4" Arc (Squared Corners)']=new Array("11050", "419.0000");
                                product_name_price['EP5-42 24" Glass FA 4" Arc (Radiused Corners)']=new Array("11051", "492.0000");
                                product_name_price['EP5-42 24" Glass FA 4" Arc (Squared Corners)']=new Array("11052", "443.0000");
                                product_name_price['EP5-42 30" Glass FA 4" Arc (Radiused Corners)']=new Array("11053", "519.0000");
                                product_name_price['EP5-42 30" Glass FA 4" Arc (Squared Corners)']=new Array("11054", "466.0000");
                                product_name_price['EP5-42 36" Glass FA 4" Arc (Radiused Corners)']=new Array("11055", "546.0000");
                                product_name_price['EP5-42 36" Glass FA 4" Arc (Squared Corners)']=new Array("11056", "508.0000");
                                product_name_price['EP5-42 42" Glass FA 4" Arc (Radiused Corners)']=new Array("11057", "558.0000");
                                product_name_price['EP5-42 42" Glass FA 4" Arc (Squared Corners)']=new Array("11058", "516.0000");
                                product_name_price['EP5-42 48" Glass FA 4" Arc (Radiused Corners)']=new Array("11059", "763.0000");
                                product_name_price['EP5-42 48" Glass FA 4" Arc (Squared Corners)']=new Array("11060", "733.0000");
                                product_name_price['EP5-42 54" Glass FA 4" Arc (Radiused Corners)']=new Array("11061", "811.0000");
                                product_name_price['EP5-42 54" Glass FA 4" Arc (Squared Corners)']=new Array("11062", "780.0000");
                                product_name_price['EP5-42 54" Glass FA 2" Arc (Squared Corners)']=new Array("11063", "780.0000");
                                product_name_price['EP5-42 54" Glass FA 2" Arc (Radiused Corners)']=new Array("11064", "811.0000");
                                product_name_price['EP5-42 48" Glass FA 2" Arc (Squared Corners)']=new Array("11065", "733.0000");
                                product_name_price['EP5-42 48" Glass FA 2" Arc (Radiused Corners)']=new Array("11066", "763.0000");
                                product_name_price['EP5-42 42" Glass FA 2" Arc (Squared Corners)']=new Array("11067", "516.0000");
                                product_name_price['EP5-42 42" Glass FA 2" Arc (Radiused Corners)']=new Array("11068", "558.0000");
                                product_name_price['EP5-42 36" Glass FA 2" Arc (Squared Corners)']=new Array("11069", "508.0000");
                                product_name_price['EP5-42 36" Glass FA 2" Arc (Radiused Corners)']=new Array("11070", "546.0000");
                                product_name_price['EP5-42 30" Glass FA 2" Arc (Squared Corners)']=new Array("11071", "466.0000");
                                product_name_price['EP5-42 30" Glass FA 2" Arc (Radiused Corners)']=new Array("11072", "519.0000");
                                product_name_price['EP5-42 24" Glass FA 2" Arc (Squared Corners)']=new Array("11073", "443.0000");
                                product_name_price['EP5-42 24" Glass FA 2" Arc (Radiused Corners)']=new Array("11074", "492.0000");
                                product_name_price['EP5-42 18" Glass FA 2" Arc (Squared Corners)']=new Array("11075", "419.0000");
                                product_name_price['EP5-42 18" Glass FA 2" Arc (Radiused Corners)']=new Array("11076", "465.0000");
                                product_name_price['EP5-42 12" Glass FA 2" Arc (Squared Corners)']=new Array("11077", "395.0000");
                                product_name_price['EP5-42 12" Glass FA 2" Arc (Radiused Corners)']=new Array("11078", "438.0000");
                                product_name_price['EP5-42 12" Glass CA 6" Arc (Radiused Corners)']=new Array("11079", "438.0000");
                                product_name_price['EP5-42 12" Glass CA 6" Arc (Squared Corners)']=new Array("11080", "395.0000");
                                product_name_price['EP5-42 18" Glass CA 6" Arc (Radiused Corners)']=new Array("11081", "465.0000");
                                product_name_price['EP5-42 18" Glass CA 6" Arc (Squared Corners)']=new Array("11082", "419.0000");
                                product_name_price['EP5-42 24" Glass CA 6" Arc (Radiused Corners)']=new Array("11083", "492.0000");
                                product_name_price['EP5-42 24" Glass CA 6" Arc (Squared Corners)']=new Array("11084", "443.0000");
                                product_name_price['EP5-42 30" Glass CA 6" Arc (Radiused Corners)']=new Array("11085", "519.0000");
                                product_name_price['EP5-42 30" Glass CA 6" Arc (Squared Corners)']=new Array("11086", "466.0000");
                                product_name_price['EP5-42 36" Glass CA 6" Arc (Radiused Corners)']=new Array("11087", "546.0000");
                                product_name_price['EP5-42 36" Glass CA 6" Arc (Squared Corners)']=new Array("11088", "508.0000");
                                product_name_price['EP5-42 42" Glass CA 6" Arc (Radiused Corners)']=new Array("11089", "558.0000");
                                product_name_price['EP5-42 42" Glass CA 6" Arc (Squared Corners)']=new Array("11090", "516.0000");
                                product_name_price['EP5-42 48" Glass CA 6" Arc (Radiused Corners)']=new Array("11091", "763.0000");
                                product_name_price['EP5-42 48" Glass CA 6" Arc (Squared Corners)']=new Array("11092", "733.0000");
                                product_name_price['EP5-42 54" Glass CA 6" Arc (Radiused Corners)']=new Array("11093", "811.0000");
                                product_name_price['EP5-42 54" Glass CA 6" Arc (Squared Corners)']=new Array("11094", "780.0000");
                                product_name_price['EP5-42 12" Glass CA 4" Arc (Radiused Corners)']=new Array("11095", "438.0000");
                                product_name_price['EP5-42 12" Glass CA 4" Arc (Squared Corners)']=new Array("11096", "395.0000");
                                product_name_price['EP5-42 18" Glass CA 4" Arc (Radiused Corners)']=new Array("11097", "465.0000");
                                product_name_price['EP5-42 18" Glass CA 4" Arc (Squared Corners)']=new Array("11098", "419.0000");
                                product_name_price['EP5-42 24" Glass CA 4" Arc (Radiused Corners)']=new Array("11099", "492.0000");
                                product_name_price['EP5-42 24" Glass CA 4" Arc (Squared Corners)']=new Array("11100", "443.0000");
                                product_name_price['EP5-42 30" Glass CA 4" Arc (Radiused Corners)']=new Array("11101", "519.0000");
                                product_name_price['EP5-42 30" Glass CA 4" Arc (Squared Corners)']=new Array("11102", "466.0000");
                                product_name_price['EP5-42 36" Glass CA 4" Arc (Radiused Corners)']=new Array("11103", "546.0000");
                                product_name_price['EP5-42 36" Glass CA 4" Arc (Squared Corners)']=new Array("11104", "508.0000");
                                product_name_price['EP5-42 42" Glass CA 4" Arc (Radiused Corners)']=new Array("11105", "558.0000");
                                product_name_price['EP5-42 42" Glass CA 4" Arc (Squared Corners)']=new Array("11106", "516.0000");
                                product_name_price['EP5-42 48" Glass CA 4" Arc (Radiused Corners)']=new Array("11107", "763.0000");
                                product_name_price['EP5-42 48" Glass CA 4" Arc (Squared Corners)']=new Array("11108", "733.0000");
                                product_name_price['EP5-42 54" Glass CA 4" Arc (Radiused Corners)']=new Array("11109", "811.0000");
                                product_name_price['EP5-42 54" Glass CA 4" Arc (Squared Corners)']=new Array("11110", "780.0000");
                                product_name_price['EP5-42 54" Glass CA 2" Arc (Squared Corners)']=new Array("11111", "780.0000");
                                product_name_price['EP5-42 54" Glass CA 2" Arc (Radiused Corners)']=new Array("11112", "811.0000");
                                product_name_price['EP5-42 48" Glass CA 2" Arc (Squared Corners)']=new Array("11113", "733.0000");
                                product_name_price['EP5-42 48" Glass CA 2" Arc (Radiused Corners)']=new Array("11114", "763.0000");
                                product_name_price['EP5-42 42" Glass CA 2" Arc (Squared Corners)']=new Array("11115", "516.0000");
                                product_name_price['EP5-42 42" Glass CA 2" Arc (Radiused Corners)']=new Array("11116", "558.0000");
                                product_name_price['EP5-42 36" Glass CA 2" Arc (Squared Corners)']=new Array("11117", "508.0000");
                                product_name_price['EP5-42 36" Glass CA 2" Arc (Radiused Corners)']=new Array("11118", "546.0000");
                                product_name_price['EP5-42 30" Glass CA 2" Arc (Squared Corners)']=new Array("11119", "466.0000");
                                product_name_price['EP5-42 30" Glass CA 2" Arc (Radiused Corners)']=new Array("11120", "519.0000");
                                product_name_price['EP5-42 24" Glass CA 2" Arc (Squared Corners)']=new Array("11121", "443.0000");
                                product_name_price['EP5-42 24" Glass CA 2" Arc (Radiused Corners)']=new Array("11122", "492.0000");
                                product_name_price['EP5-42 18" Glass CA 2" Arc (Squared Corners)']=new Array("11123", "419.0000");
                                product_name_price['EP5-42 18" Glass CA 2" Arc (Radiused Corners)']=new Array("11124", "465.0000");
                                product_name_price['EP5-42 12" Glass CA 2" Arc (Squared Corners)']=new Array("11125", "395.0000");
                                product_name_price['EP5-42 12" Glass CA 2" Arc (Radiused Corners)']=new Array("11126", "438.0000");
								product_name_price['EP5-MAILBOX CUTOUT']=new Array("10844", "100.0000");                            
</script>
<?php if($_REQUEST['type']=='1BAY'){?>
<style>
div.left {
    top: 23%;
    left: 30%;
}
div.right {
    top: 8%;
    left: 57%;
}
div.post {
    top: 36%;
    left: 74%;
}
div.glass_a {
	display:none;
}
div.glass_b {
    display:none;
}
div.glass_c {
   display:none;
}
div.glass_d {
   display:none;
}
div.glass {
   top: 71%;
    left: 62%;
}

div.total {
    top: 76%;
    left: 86%;
}
div.msgtishu {
   display:none;
}
div.msgtishu1 {
   display:none;
}
div.msgtishu2 {
   display:none;
}
</style>
<?php }
if($_REQUEST['type']=='2BAY'){?>
<style>
div.left {
    top: 26%;
    left: 13%;
}
div.right {
    top: 7%;
    left: 71%;
}
div.post {
    top: 30%;
    left: 81%;
}
div.glass_a {
    top: 73%;
    left: 47%;
}
div.glass_b {
    top: 56%;
    left: 70%;
}
div.glass_c {
   display:none;
}
div.glass_d {
   display:none;
}
div.glass {
   display:none;
}
div.total {
    top: 69%;
    left: 63%;
}
div.msgtishu {
   display:none;
}
div.msgtishu1 {
   display:none;
}
div.msgtishu2 {
   display:none;
}
</style>
<?php }
if($_REQUEST['type']=='3BAY'){
?>
<style>
div.left {
    top: 41%;
    left: 11%;
}
div.right {
    top: 3%;
    left: 78%;
}
div.post {
    top: 20%;
    left: 89%;
}
div.glass_a {
	top: 76%;
    left: 42%;
}
div.glass_b {
    top: 58%;
    left: 64%;
}
div.glass_c {
    top: 43%;
    left: 82%;
}
div.glass_d {
   display:none;
}
div.glass {
   display:none;
}
div.total {
    top: 63%;
    left: 66%;
}
div.msgtishu {
   display:none;
}
div.msgtishu1 {
   display:none;
}
div.msgtishu2 {
   display:none;
}
</style>

<?php }
if($_REQUEST['type']=='4BAY'){?>
<style>
div.left {
    top: 40%;
    left: 8%;
}
div.right {
    top: 2%;
    left: 82%;
}
div.post {
    top: 16%;
    left: 89%;
}
div.glass_a {
	top: 75%;
    left: 38%;
}
div.glass_b {
    top: 58%;
	left: 57%;
}
div.glass_c {
    top: 45%;
    left: 74%;
}
div.glass_d {
    top: 34%;
    left: 87%;
}
div.glass {
   display:none;
}
div.total {
    top: 56%;
    left: 68%;
}
div.msgtishu {
   display:none;
}
div.msgtishu1 {
   display:none;
}
div.msgtishu2 {
   display:none;
}
</style>
<?php }
?>

<table id="cart-form">
    <tr>
        <td> 
        <div class="tables-options">  
		<table cellpadding="0" cellspacing="0" width=100% style="border: 1px solid white;border-radius: 5px;">
                                    <tr>
                                        <td colspan=3><center><h2 class="heading_all"><span style="float:left">&nbsp;&nbsp1)</span>Measurements
										<br />
										<input type="checkbox" id="checkboxbfor4bayA" name="checkboxbfor4bayA" style="display:none;" >
										<input type="checkbox" id="checkboxbfor4bayB" name="checkboxbfor4bayB" style="display:none;" >
										<input type="checkbox" id="checkboxbfor4bayC" name="checkboxbfor4bayC" style="display:none;" >
										<input type="checkbox" id="checkbfor4bayBnonsame" name="checkbfor4bayBnonsame" style="display:none;" >
										<input type="checkbox" id="checkcfor4bayCnonsame" name="checkcfor4bayCnonsame" style="display:none;" >
										<input type="checkbox" id="checkdfor4bayDnonsame" name="checkdfor4bayDnonsame" style="display:none;" >
										<input type="checkbox" id="checkformorethan42" name="checkformorethan42" style="display:none;" >
										</h2></center></td>
                                    </tr>
                                    <tr>
                                      <td><a class="thickbox" href='images/EP5/Post_height.jpg' ><h1>Post Height</h1></a></td><td>
                                           <span id="post_height_span">
                                            <select name="post_height" id="post_height" tabindex="1"  onchange="getPriceOfProduct(this.form)" >
											    <option value="select">Select</option>
											<?php
											if($post_height=='12')
											{
											echo'<option value="12" selected>12&quot;</option>';	
											}
											else{
											echo'<option value="12">12&quot;</option>';	
											}
											if($post_height=='18')
											{
											echo'<option value="18" selected>18&quot;</option>';	
											}
											else{
											echo'<option value="18">18&quot;</option>';	
											}
											if($post_height=='22')
											{
											echo'<option value="22" selected>22&quot;</option>';	
											}
											else{
											echo'<option value="22">22&quot;</option>';	
											}
											
											if($post_height=='25')
											{
											echo'<option value="22" selected>25&quot;</option>';	
											}
											else{
											echo'<option value="22">25&quot;</option>';	
											}
											?>

												<option value="custom">Custom</option>
                                            </select>
                                            </span></td>
                                        <td>
                                            <span id="errormsgfirstname">
                                                <img id="post_err" src="img/iconCheckOff.gif">
                                            </span>
                                        </td>
                                    </tr>  
                                    <tr><td></td></tr>	
<?php 
    if($category_name=='Ring-EP5'){
	if($_REQUEST['type']=='1BAY') {
      ?> 
            <tr class="test-length">
                <td width="40%" class="test-lenght1bay" ><a class="thickbox" href='images/EP5/1bay_faceA.jpg' ><h1>Face Length A</h1></a></td><td width="50%">
                <span id="face_length_span">
                    <select name="face_length" id="face_length" tabindex="2" class="usecustom" onchange="getPriceOfProduct(this.form);nogl(this.form,this.name,this.value);show_lightbar_pupup(this.form);">
                        <option value="select">Select</option>
						<?php
						if($facelengthA=='12')
						{
						echo'<option value="12" selected>12&quot;</option>';	
						}
						else{
						echo'<option value="12">12&quot;</option>';	
						}
						if($facelengthA=='18')
						{
						echo'<option value="18" selected>18&quot;</option>';	
						}
						else{
						echo'<option value="18">18&quot;</option>';	
						}
						if($facelengthA=='24')
						{
						echo'<option value="24" selected>24&quot;</option>';	
						}
						else{
						echo'<option value="24">24&quot;</option>';	
						}
						if($facelengthA=='30')
						{
						echo'<option value="30" selected>30&quot;</option>';	
						}
						else{
						echo'<option value="30">30&quot;</option>';	
						}
						if($facelengthA=='36')
						{
						echo'<option value="36" selected>36&quot;</option>';	
						}
						else{
						echo'<option value="36">36&quot;</option>';	
						}
						if($facelengthA=='42')
						{
						echo'<option value="42" selected>42&quot;</option>';	
						}
						else{
						echo'<option value="42">42&quot;</option>';	
						}
						?>
                        <option value="custom">Custom</option>
                        <option value="No Glass">No Glass</option>
                    </select>
                </span></td><td>
                <span id="errormsgfirstname">
                    <img id="glass_a_err" src="img/iconCheckOff.gif">
                </span>          
                </td>
            </tr>
        </table>
  <?php  }
    //structure for two bay!!
    if($_REQUEST['type']=='2BAY'){
        ?><tr class="test-length">
                <td width="40%" class="test-lenght2baya"><a class="thickbox" href='images/EP5/2bay_faceA.jpg'><h1>Face Length A</h1></a></td><td width="50%">
					<span id="face_length_a_span">
                    <select name="face_length_a" id="face_length_a" tabindex="2" class="usecustom" onchange="getPriceOfProduct(this.form);nogl(this.form,this.name,this.value);show_lightbar_pupup(this.form);">
                        <option value="select">Select</option>
                        
						<?php
						if($facelengthA=='12')
						{
						echo'<option value="12" selected>12&quot;</option>';	
						}
						else{
						echo'<option value="12">12&quot;</option>';	
						}
						if($facelengthA=='18')
						{
						echo'<option value="18" selected>18&quot;</option>';	
						}
						else{
						echo'<option value="18">18&quot;</option>';	
						}
						if($facelengthA=='24')
						{
						echo'<option value="24" selected>24&quot;</option>';	
						}
						else{
						echo'<option value="24">24&quot;</option>';	
						}
						if($facelengthA=='30')
						{
						echo'<option value="30" selected>30&quot;</option>';	
						}
						else{
						echo'<option value="30">30&quot;</option>';	
						}
						if($facelengthA=='36')
						{
						echo'<option value="36" selected>36&quot;</option>';	
						}
						else{
						echo'<option value="36">36&quot;</option>';	
						}
						if($facelengthA=='42')
						{
						echo'<option value="42" selected>42&quot;</option>';	
						}
						else{
						echo'<option value="42">42&quot;</option>';	
						}
						?>
                       
                        <option value="custom">Custom</option>
                        <option value="No Glass">No Glass</option>
                    </select>
					</span></td><td>
						<span id="errormsgfirstname">
                            <img id="glass_a_err" src="img/iconCheckOff.gif">
                        </span>		
                </td>
            </tr>
			
            <tr class="test-length">
                <td width="40%" class="test-lenght2bayb"><a class="thickbox" href='images/EP5/2bay_faceB.jpg' ><h1>Face Length B</h1></a></td><td width="50%">
					<span id="face_length_b_span">
                    <select name="face_length_b" id="face_length_b" tabindex="3" class="usecustom" onchange="getPriceOfProduct(this.form);nogl(this.form,this.name,this.value);show_lightbar_pupup(this.form);">
                        <option value="select" class="instock">Select</option>
						<option value="12" class="customsame" style="display:none;">8"</option>
						
						<?php
						if($facelengthB=='12')
						{
						echo'<option value="12" class="instock" style="display: block;" selected>12"</option>';	
						}
						else{
						echo'<option value="12" class="instock" style="display: block;">12"</option>';	
						}
						if($facelengthB=='18')
						{
						echo'<option value="18" class="instock" style="display: block;" selected>18"</option>';	
						}
						else{
						echo'<option value="18" class="instock" style="display: block;">18"</option>';	
						}
						if($facelengthB=='24')
						{
						echo'<option value="24" class="instock" style="display: block;" selected>24"</option>';	
						}
						else{
						echo'<option value="24" class="instock" style="display: block;">24"</option>';	
						}
						if($facelengthB=='30')
						{
						echo'<option value="30" class="instock" style="display: block;" selected>30"</option>';	
						}
						else{
						echo'<option value="30" class="instock" style="display: block;">30"</option>';	
						}
						if($facelengthB=='36')
						{
						echo'<option value="36" class="instock" style="display: block;" selected>36"</option>';	
						}
						else{
						echo'<option value="36" class="instock" style="display: block;">36"</option>';	
						}
						if($facelengthB=='42')
						{
						echo'<option value="42" class="instock" style="display: block;" selected>42"</option>';	
						}
						else{
						echo'<option value="42" class="instock" style="display: block;">42"</option>';	
						}
						?>

						<option value="48" class="instock" id="optio_48_b" style="display:none;">48"</option>
                        <option value="54" class="instock" id="optio_54_b" style="display:none;">54"</option>
	
						<option value="custom" class="instock" style="display: block;">Custom</option>
						<option value="No Glass" class="instock" style="display: block;">No Glass</option>
						
						<?php
						echo dropdown_option_facelength();
						?>
						<option value="No Glass" class="customsame" style="display:none;">No Glass</option>
                    </select>
					</span></td><td>
						<span id="errormsgfirstname">
                            <img id="glass_b_err" src="img/iconCheckOff.gif">
                        </span>		
                </td>
              </tr>
        </table>
    
  <?php  }
  //structure for 3bay
    if($_REQUEST['type']=='3BAY'){
       ?> <tr class="test-length">
                <td width="40%" class="test-lenght3baya"><a class="thickbox" href='images/EP5/3bay_faceA.jpg'><h1>Face Length A</h1></a></td><td width="50%">
					<span id="face_length_a_span">
                    <select name="face_length_a" id="face_length_a" tabindex="2" class="usecustom" onchange="getPriceOfProduct(this.form);nogl(this.form,this.name,this.value);show_lightbar_pupup(this.form);">
                        <option value="select">Select</option>
                        
						<?php
						if($facelengthA=='12')
						{
						echo'<option value="12" selected>12&quot;</option>';	
						}
						else{
						echo'<option value="12">12&quot;</option>';	
						}
						if($facelengthA=='18')
						{
						echo'<option value="18" selected>18&quot;</option>';	
						}
						else{
						echo'<option value="18">18&quot;</option>';	
						}
						if($facelengthA=='24')
						{
						echo'<option value="24" selected>24&quot;</option>';	
						}
						else{
						echo'<option value="24">24&quot;</option>';	
						}
						if($facelengthA=='30')
						{
						echo'<option value="30" selected>30&quot;</option>';	
						}
						else{
						echo'<option value="30">30&quot;</option>';	
						}
						if($facelengthA=='36')
						{
						echo'<option value="36" selected>36&quot;</option>';	
						}
						else{
						echo'<option value="36">36&quot;</option>';	
						}
						if($facelengthA=='42')
						{
						echo'<option value="42" selected>42&quot;</option>';	
						}
						else{
						echo'<option value="42">42&quot;</option>';	
						}
											?>
                       
                        <option value="custom">Custom</option>
                        <option value="No Glass">No Glass</option>
                    </select>
					</span></td><td>
					   <span id="errormsgfirstname">
                            <img id="glass_a_err" src="img/iconCheckOff.gif">
                        </span>
                </td>
            </tr>
			
            <tr class="test-length">
                <td width="40%" class="test-lenght3bayb"><a class="thickbox" href='images/EP5/3bay_faceB.jpg' ><h1>Face Length B</h1></a></td><td width="50%">
					<span id="face_length_b_span">
                    <select name="face_length_b" id="face_length_b" tabindex="3" class="usecustom"  onchange="getPriceOfProduct(this.form);nogl(this.form,this.name,this.value);show_lightbar_pupup(this.form);">
                        <option value="select" class="instock">Select</option>
						<option value="12" class="customsame" style="display:none;">8"</option>
						
						<?php
						if($facelengthB=='12')
						{
						echo'<option value="12" class="instock" style="display: block;" selected>12"</option>';	
						}
						else{
						echo'<option value="12" class="instock" style="display: block;">12"</option>';	
						}
						if($facelengthB=='18')
						{
						echo'<option value="18" class="instock" style="display: block;" selected>18"</option>';	
						}
						else{
						echo'<option value="18" class="instock" style="display: block;">18"</option>';	
						}
						if($facelengthB=='24')
						{
						echo'<option value="24" class="instock" style="display: block;" selected>24"</option>';	
						}
						else{
						echo'<option value="24" class="instock" style="display: block;">24"</option>';	
						}
						if($facelengthB=='30')
						{
						echo'<option value="30" class="instock" style="display: block;" selected>30"</option>';	
						}
						else{
						echo'<option value="30" class="instock" style="display: block;">30"</option>';	
						}
						if($facelengthB=='36')
						{
						echo'<option value="36" class="instock" style="display: block;" selected>36"</option>';	
						}
						else{
						echo'<option value="36" class="instock" style="display: block;">36"</option>';	
						}
						if($facelengthB=='42')
						{
						echo'<option value="42" class="instock" style="display: block;" selected>42"</option>';	
						}
						else{
						echo'<option value="42" class="instock" style="display: block;">42"</option>';	
						}
						?>
						<option value="48" class="instock" id="optio_48_b" style="display:none;">48"</option>
                        <option value="54" class="instock" id="optio_54_b" style="display:none;">54"</option>
	
						<option value="custom" class="instock" style="display: block;">Custom</option>
                        <option value="No Glass" class="instock" style="display: block;">No Glass</option>
                
						<?php
						echo dropdown_option_facelength();
						?>
						<option value="No Glass" class="customsame" style="display:none;">No Glass</option>
                    </select>
					</span></td><td>
					   <span id="errormsgfirstname">
                            <img id="glass_b_err" src="img/iconCheckOff.gif">
                        </span>
                </td>
            </tr>
            <tr class="test-length">
                <td width="40%" class="test-lenght3bayc"><a class="thickbox" href='images/EP5/3bay_faceC.jpg' ><h1>Face Length C</h1></a></td><td width="50%">
					<span id="face_length_c_span">
                    <select name="face_length_c" id="face_length_c" tabindex="4" class="usecustom" onchange="getPriceOfProduct(this.form);nogl(this.form,this.name,this.value);show_lightbar_pupup(this.form);">
                        <option value="select" class="instock">Select</option>
						<option value="12" class="customsame" style="display:none;">8"</option>
						
						<?php
						if($facelengthC=='12')
						{
						echo'<option value="12" class="instock" style="display: block;" selected>12"</option>';	
						}
						else{
						echo'<option value="12" class="instock" style="display: block;">12"</option>';	
						}
						if($facelengthC=='18')
						{
						echo'<option value="18" class="instock" style="display: block;" selected>18"</option>';	
						}
						else{
						echo'<option value="18" class="instock" style="display: block;">18"</option>';	
						}
						if($facelengthC=='24')
						{
						echo'<option value="24" class="instock" style="display: block;" selected>24"</option>';	
						}
						else{
						echo'<option value="24" class="instock" style="display: block;">24"</option>';	
						}
						if($facelengthC=='30')
						{
						echo'<option value="30" class="instock" style="display: block;" selected>30"</option>';	
						}
						else{
						echo'<option value="30" class="instock" style="display: block;">30"</option>';	
						}
						if($facelengthC=='36')
						{
						echo'<option value="36" class="instock" style="display: block;" selected>36"</option>';	
						}
						else{
						echo'<option value="36" class="instock" style="display: block;">36"</option>';	
						}
						if($facelengthC=='42')
						{
						echo'<option value="42" class="instock" style="display: block;" selected>42"</option>';	
						}
						else{
						echo'<option value="42" class="instock" style="display: block;">42"</option>';	
						}
						?>
                       
						
						<option value="48" class="instock" id="optio_48_b" style="display:none;">48"</option>
                        <option value="54" class="instock" id="optio_54_b" style="display:none;">54"</option>
	
						<option value="custom" class="instock" style="display: block;">Custom</option>
                        <option value="No Glass" class="instock" style="display: block;">No Glass</option>
						<?php
						echo dropdown_option_facelength();
						?>
						<option value="No Glass" class="customsame" style="display:none;">No Glass</option>
                    </select>
					</span></td><td>
						<span id="errormsgfirstname">
                            <img id="glass_c_err" src="img/iconCheckOff.gif">
                        </span>			
                </td>
            </tr>
        </table>
  <?  } //structure for 4bay
  if($_REQUEST['type']=='4BAY'){
      ?> <tr class="test-length">
                <td width="40%" class="test-lenght4baya"><a class="thickbox" href='images/EP5/4bay_faceA.jpg' ><h1>Face Length A</h1></a></td><td width="50%">
					<span id="face_length_a_span">
                    <select name="face_length_a" id="face_length_a" tabindex="2" class="usecustom" onchange="getPriceOfProduct(this.form);nogl(this.form,this.name,this.value);show_lightbar_pupup(this.form);">
                        <option value="select">Select</option>
                        
						<?php
						if($facelengthA=='12')
						{
						echo'<option value="12" selected>12&quot;</option>';	
						}
						else{
						echo'<option value="12">12&quot;</option>';	
						}
						if($facelengthA=='18')
						{
						echo'<option value="18" selected>18&quot;</option>';	
						}
						else{
						echo'<option value="18">18&quot;</option>';	
						}
						if($facelengthA=='24')
						{
						echo'<option value="24" selected>24&quot;</option>';	
						}
						else{
						echo'<option value="24">24&quot;</option>';	
						}
						if($facelengthA=='30')
						{
						echo'<option value="30" selected>30&quot;</option>';	
						}
						else{
						echo'<option value="30">30&quot;</option>';	
						}
						if($facelengthA=='36')
						{
						echo'<option value="36" selected>36&quot;</option>';	
						}
						else{
						echo'<option value="36">36&quot;</option>';	
						}
						if($facelengthA=='42')
						{
						echo'<option value="42" selected>42&quot;</option>';	
						}
						else{
						echo'<option value="42">42&quot;</option>';	
						}
						?>
                       
                        <option value="custom">Custom</option>
                        <option value="No Glass">No Glass</option>
                    </select>
					</span></td><td>
					   <span id="errormsgfirstname">
                            <img id="glass_a_err" src="img/iconCheckOff.gif">
                        </span>
                </td>
            </tr>
            <tr class="test-length">
                <td width="40%" class="test-lenght4bayb"><a class="thickbox" href='images/EP5/4bay_faceB.jpg' ><h1>Face Length B</h1></a></td><td width="50%">
					<span id="face_length_b_span">
                    <select name="face_length_b" id="face_length_b" tabindex="3" class="usecustom"  onchange="getPriceOfProduct(this.form);nogl(this.form,this.name,this.value);show_lightbar_pupup(this.form);">
                        <option value="select" class="instock">Select</option>
						<option value="12" class="customsame" style="display:none;">8"</option>
						<?php
						if($facelengthB=='12')
						{
						echo'<option value="12" class="instock" style="display: block;" selected>12"</option>';	
						}
						else{
						echo'<option value="12" class="instock" style="display: block;">12"</option>';	
						}
						if($facelengthB=='18')
						{
						echo'<option value="18" class="instock" style="display: block;" selected>18"</option>';	
						}
						else{
						echo'<option value="18" class="instock" style="display: block;">18"</option>';	
						}
						if($facelengthB=='24')
						{
						echo'<option value="24" class="instock" style="display: block;" selected>24"</option>';	
						}
						else{
						echo'<option value="24" class="instock" style="display: block;">24"</option>';	
						}
						if($facelengthB=='30')
						{
						echo'<option value="30" class="instock" style="display: block;" selected>30"</option>';	
						}
						else{
						echo'<option value="30" class="instock" style="display: block;">30"</option>';	
						}
						if($facelengthB=='36')
						{
						echo'<option value="36" class="instock" style="display: block;" selected>36"</option>';	
						}
						else{
						echo'<option value="36" class="instock" style="display: block;">36"</option>';	
						}
						if($facelengthB=='42')
						{
						echo'<option value="42" class="instock" style="display: block;" selected>42"</option>';	
						}
						else{
						echo'<option value="42" class="instock" style="display: block;">42"</option>';	
						}
						?>
						<option value="48" class="instock" id="optio_48_b" style="display:none;">48"</option>
                        <option value="54" class="instock" id="optio_54_b" style="display:none;">54"</option>
	
						<option value="custom" class="instock" style="display: block;">Custom</option>
                        <option value="No Glass" class="instock" style="display: block;">No Glass</option>
					<?php
						echo dropdown_option_facelength();
						?>
						<option value="No Glass" class="customsame" style="display:none;">No Glass</option>
                    </select>
					</span></td><td>
					   <span id="errormsgfirstname">
                            <img id="glass_b_err" src="img/iconCheckOff.gif">
                        </span>
                </td>
            </tr>
            <tr class="test-length">
                <td width="40%" class="test-lenght4bayc"><a class="thickbox" href='images/EP5/4bay_faceC.jpg' ><h1>Face Length C</h1></a></td><td width="50%">
					<span id="face_length_c_span">
                    <select name="face_length_c" id="face_length_c" tabindex="4" class="usecustom" onchange="getPriceOfProduct(this.form);nogl(this.form,this.name,this.value);show_lightbar_pupup(this.form);">
                        <option value="select" class="instock">Select</option>
						<option value="12" class="customsame" style="display:none;">8"</option>
						
                        <?php
						if($facelengthC=='12')
						{
						echo'<option value="12" class="instock" style="display: block;" selected>12"</option>';	
						}
						else{
						echo'<option value="12" class="instock" style="display: block;">12"</option>';	
						}
						if($facelengthC=='18')
						{
						echo'<option value="18" class="instock" style="display: block;" selected>18"</option>';	
						}
						else{
						echo'<option value="18" class="instock" style="display: block;">18"</option>';	
						}
						if($facelengthC=='24')
						{
						echo'<option value="24" class="instock" style="display: block;" selected>24"</option>';	
						}
						else{
						echo'<option value="24" class="instock" style="display: block;">24"</option>';	
						}
						if($facelengthC=='30')
						{
						echo'<option value="30" class="instock" style="display: block;" selected>30"</option>';	
						}
						else{
						echo'<option value="30" class="instock" style="display: block;">30"</option>';	
						}
						if($facelengthC=='36')
						{
						echo'<option value="36" class="instock" style="display: block;" selected>36"</option>';	
						}
						else{
						echo'<option value="36" class="instock" style="display: block;">36"</option>';	
						}
						if($facelengthC=='42')
						{
						echo'<option value="42" class="instock" style="display: block;" selected>42"</option>';	
						}
						else{
						echo'<option value="42" class="instock" style="display: block;">42"</option>';	
						}
						?>
                       
						
						<option value="48" class="instock" id="optio_48_b" style="display:none;">48"</option>
                        <option value="54" class="instock" id="optio_54_b" style="display:none;">54"</option>
	
						<option value="custom" class="instock" style="display: block;">Custom</option>
						<option value="No Glass" class="instock" style="display: block;">No Glass</option>
						
						<?php
						echo dropdown_option_facelength();
						?>
						<option value="No Glass" class="customsame" style="display:none;">No Glass</option>
                    </select>
					</span></td><td>
					   <span id="errormsgfirstname">
                            <img id="glass_c_err" src="img/iconCheckOff.gif">
                        </span>
                </td>
            </tr> 
			<tr class="test-length">
                <td width="40%" class="test-lenght4bayd"><a class="thickbox" href='images/EP5/4bay_faceD.jpg'><h1>Face Length D</h1></a></td><td width="50%">
					<span id="face_length_d_span">
                    <select name="face_length_d" id="face_length_d" tabindex="5" class="usecustom" onchange="getPriceOfProduct(this.form);nogl(this.form,this.name,this.value);show_lightbar_pupup(this.form);" >
                        <option value="select" class="instock">Select</option>
						<option value="12" class="customsame" style="display:none;">8"</option>
						
						<?php
						if($facelengthD=='12')
						{
						echo'<option value="12" class="instock" style="display: block;" selected>12"</option>';	
						}
						else{
						echo'<option value="12" class="instock" style="display: block;">12"</option>';	
						}
						if($facelengthD=='18')
						{
						echo'<option value="18" class="instock" style="display: block;" selected>18"</option>';	
						}
						else{
						echo'<option value="18" class="instock" style="display: block;">18"</option>';	
						}
						if($facelengthD=='24')
						{
						echo'<option value="24" class="instock" style="display: block;" selected>24"</option>';	
						}
						else{
						echo'<option value="24" class="instock" style="display: block;">24"</option>';	
						}
						if($facelengthD=='30')
						{
						echo'<option value="30" class="instock" style="display: block;" selected>30"</option>';	
						}
						else{
						echo'<option value="30" class="instock" style="display: block;">30"</option>';	
						}
						if($facelengthD=='36')
						{
						echo'<option value="36" class="instock" style="display: block;" selected>36"</option>';	
						}
						else{
						echo'<option value="36" class="instock" style="display: block;">36"</option>';	
						}
						if($facelengthD=='42')
						{
						echo'<option value="42" class="instock" style="display: block;" selected>42"</option>';	
						}
						else{
						echo'<option value="42" class="instock" style="display: block;">42"</option>';	
						}
						?>
						<option value="48" class="instock" id="optio_48_b" style="display:none;">48"</option>
                        <option value="54" class="instock" id="optio_54_b" style="display:none;">54"</option>
	
						<option value="custom" class="instock" style="display: block;">Custom</option>
						<option value="No Glass" class="instock" style="display: block;">No Glass</option>
						<?php
						echo dropdown_option_facelength();
						?>
						<option value="No Glass" class="customsame" style="display:none;">No Glass</option>
                    </select>
					</span></td><td>
					   <span id="errormsgfirstname">
                            <img id="glass_d_err" src="img/iconCheckOff.gif">
                        </span>
                </td>
            </tr>
        </table>
 <?   }}?>
            
		  </div>
			 <div class="tables-options">
		  <table cellpadding="0" cellspacing="0" width="100%" style="border-radius: 5px;">
            <tr>
                <td colspan=3><center><h2 class="heading_all"><span style="float:left">&nbsp;&nbsp2)</span>Options</center></h2></td>
            </tr>
		<tr>
			<td width="40%"><a class="thickbox" href="images/EP5/End_panels.jpg"><h1>End Panels</h1></a></td>
			<td width="50%">
				<select class="option" id="end_options" tabindex="6" onchange="show_panel_type(this.form)" >
                             	<option value="select">Select</option>
								<?php
								if($endpanel==1)
								{
								echo'<option value="Both Closed End Panels" selected>Both Ends</option>';	
								}
								else{
								echo'<option value="Both Closed End Panels">Both Ends</option>';	
								}
								if($endpanel==2)
								{
								echo'<option value="Right Closed End Panel" selected>Right End</option>';	
								}
								else{
								echo'<option value="Right Closed End Panel">Right End</option>';	
								}
								if($endpanel==3)
								{
								echo'<option value="Left Closed End Panel" selected>Left End</option>';	
								}
								else{
								echo'<option value="Left Closed End Panel">Left End</option>';	
								}
								if($endpanel==4)
								{
								echo'<option value="No Closed End Panels" selected>No Ends</option>';	
								}
								else{
								echo'<option value="No Closed End Panels">No Ends</option>';	
								}
								?>
                             	</select>
                       	</td><td>
                       		<span id="errormsgfirstname">
		                        <img id="endpan_err" src="img/iconCheckOff.gif">
                                </span>
		        </td>
		  </tr>
		<tr id="right_lenght">
                                        <td width="40%"><a class="thickbox" href='images/EP5/Right_length.jpg' ><h1 style="margin-left:20px;">Right Length</h1></a></td><td width="50%">
                                        	<span id="right_length_span">
                                            <select name="right_length" tabindex="7" onchange="getPriceOfProduct(this.form);nogl(this.form,this.name,this.value);" class="usecustom" id="right_length"> 
                                                <option value="select">Select</option>
												
                                               <?php
												if($right_end=='12')
												{
												echo'<option value="12" selected>12&quot;</option>';	
												}
												else{
												echo'<option value="12">12&quot;</option>';	
												}
												if($right_end=='18')
												{
												echo'<option value="18" selected>18&quot;</option>';	
												}
												else{
												echo'<option value="18">18&quot;</option>';	
												}
												if($right_end=='24')
												{
												echo'<option value="24" selected>24&quot;</option>';	
												}
												else{
												echo'<option value="24">24&quot;</option>';	
												}
												if($right_end=='30')
												{
												echo'<option value="30" selected>30&quot;</option>';	
												}
												else{
												echo'<option value="30">30&quot;</option>';	
												}
												if($right_end=='36')
												{
												echo'<option value="36" selected>36&quot;</option>';	
												}
												else{
												echo'<option value="36">36&quot;</option>';	
												}
												if($right_end=='42')
												{
												echo'<option value="42" selected>42&quot;</option>';	
												}
												else{
												echo'<option value="42">42&quot;</option>';	
												}
												?>
												
                                                <option value="custom">Custom</option>
                                                <option value="No Glass">No Glass</option>
                                            </select>
                                            </span></td>
                                        <td>
                                            <span id="errormsgfirstname">
                                                <img id="right_err" src="img/iconCheckOff.gif">
                                            </span>
                                        </td>
                                    </tr>
                                    <tr id="left_lenght">
                                        <td width="40%"><center><a class="thickbox" href='images/EP5/Left_length.jpg' ><h1 style="margin-left:20px;">Left Length</h1></a></center></td><td width="50%">
                                        	<span id="left_length_span">
                                            <select name="left_length" tabindex="8" id="left_length" class="usecustom" onchange="getPriceOfProduct(this.form);nogl(this.form,this.name,this.value);">
                                                <option value="select">Select</option>
												
												<?php
												if($left_end=='12')
												{
												echo'<option value="12" selected>12&quot;</option>';	
												}
												else{
												echo'<option value="12">12&quot;</option>';	
												}
												if($left_end=='18')
												{
												echo'<option value="18" selected>18&quot;</option>';	
												}
												else{
												echo'<option value="18">18&quot;</option>';	
												}
												if($left_end=='24')
												{
												echo'<option value="24" selected>24&quot;</option>';	
												}
												else{
												echo'<option value="24">24&quot;</option>';	
												}
												if($left_end=='30')
												{
												echo'<option value="30" selected>30&quot;</option>';	
												}
												else{
												echo'<option value="30">30&quot;</option>';	
												}
												if($left_end=='36')
												{
												echo'<option value="36" selected>36&quot;</option>';	
												}
												else{
												echo'<option value="36">36&quot;</option>';	
												}
												if($left_end=='42')
												{
												echo'<option value="42" selected>42&quot;</option>';	
												}
												else{
												echo'<option value="42">42&quot;</option>';	
												}
												?>
												
                                                <option value="custom">Custom</option>
                                                <option value="No Glass">No Glass</option>
                                            </select>
                                            </span></td>
                                        <td>
                                            <span id="errormsgfirstname">
                                                <img id="left_err" src="img/iconCheckOff.gif">
                                            </span>
                                        </td>
                                    </tr>
            <tr>

                <td width="40%" class="test-flang"><a class="flange-covers-pricing"><h1>Flange Covers</h1></a></td>
                <td width="50%">
                    <select class="roundcheck" tabindex="9" name="flange_covers" value="0" style="margin:4px; float: right;" align="right" onchange="getPriceOfProduct(this.form);" />
                        <option value="select">Select</option>
						<?php
						if($flange==1)
						{
						echo'<option value="yes" selected>Yes</option>';	
						}
						else{
						echo'<option value="yes">Yes</option>';	
						}
						if($flange==0)
						{
						echo'<option value="no" selected>No</option>';	
						}
						else{
						echo'<option value="no">No</option>';	
						}
						?>
                    </select>
                </td>
                <td>
                    <span id="errormsgfirstname">
                        <img id="flange_err" src="img/iconCheckOff.gif">
                    </span>
                </td>
            </tr>
                    <tr style="display:none;">
                        <td width="40%" class="test-flang"><a class="thickbox" href='flang_under_counter.php?type=adj&KeepThis=true&TB_iframe=true&height=480&width=640'><h1>Flange Under Counter</h1></a></td>
                        <td width="50%">
                            <select name="flange_under_counter" style="margin:4px; float: right;" align="right" onchange="getPriceOfProduct(this.form);">
                              <option value="select">Select</option>
                              <option value="yes">Yes</option>
						      <option value="no">No</option>
                            </select>
                        </td>
                        <td>
                            <span id="errormsgfirstname">
                                <img id="flange_under_counter_err" src="img/iconCheckOff.gif">
                            </span>
                        </td>
                    </tr>
            <tr>
                <td width="40%"><a class="thickbox" style="text-color:#c7f900 !important" href=<?php echo '"images/'.$category_name.'/RADIUS.jpg"';?>><h1 >Glass Corners</h1></a></td>
                <td width="50%">
                    <select class="roundcheck" tabindex="10" name="rounded_corners" id="round_check" style="margin:4px;" onchange="getPriceOfProduct(this.form)" >
                        <option value="select">Select</option>
						<?php
						if($glass_type=='Square')
						{
						echo'<option value="squared" selected>Squared</option>';	
						}
						else{
						echo'<option value="squared" >Squared</option>';	
						}
						if($glass_type=='Rounded')
						{
						echo'<option value="round" selected>Rounded</option>';	
						}
						else{
						echo'<option value="round" >Rounded</option>';	
						}
						?>
                    </select>
                </td>
                <td>
                    <span id="errormsgfirstname">
                        <img id="round_err" src="img/iconCheckOff.gif">
                    </span>
                </td>
            </tr>
			
            <tr id="lightbarstatus">
                <td width="40%" class="test-light"><a class="light-bar-pricing" data-model-name="<?=$category_name;?>"><h1>Light Bar</h1></a></td>
                <td width="50%">
                    <select name="light_bar" tabindex="11" id="checkbox2" value="0" style="margin:4px; float: right;" align="right" onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                        <option value="select">Select</option>
						<?php
						if($lightbar==1)
						{
						echo'<option value="yes" selected>Yes</option>';	
						}
						else{
						echo'<option value="yes">Yes</option>';	
						}
						if($lightbar==0)
						{
						echo'<option value="no" selected>No</option>';	
						}
						else{
						echo'<option value="no">No</option>';	
						}
						?>
                    </select>
                </td>
                <td>
                    <span id="errormsgfirstname">
                        <img id="light_err" src="img/iconCheckOff.gif">
                    </span>
                </td>
            </tr>
            <tr>
                <td width="40%"><a class="thickbox" href='images/Finishes.jpg'><h1>Post Finish</h1></a>
				</td>
				<td width="50%">
                    <select name="choose_finish" tabindex="12" onchange="getPriceOfProduct(this.form)" >
					<?php
					if($finish_type=='SS')
					{
					echo'<option value="Brushed Stainless Steel" selected>Brushed Stainless</option>';	
					}
					else{
					echo'<option value="Brushed Stainless Steel">Brushed Stainless</option>';	
					}
					if($finish_type=='CB')
					{
					echo'<option value="Powder Coated Black" selected>Coated Black</option>';	
					}
					else{
					echo'<option value="Powder Coated Black">Coated Black</option>';	
					}
					if($finish_type=='AL')
					{
					echo'<option value="Brushed Aluminum" selected>Brushed Aluminum</option>';	
					}
					else{
					echo'<option value="Brushed Aluminum">Brushed Aluminum</option>';	
					}
					?>
                    </select>
                </td>
                <td>
                    <span id="errormsgfirstname">
                        <img id="finish_err" src="img/iconCheckOff.gif">
                    </span>
                </td>
            </tr>
        </table>
        </div>
		<div class="tables-options">
		
        <table cellpadding="0" cellspacing="0" width="100%" style="border-radius: 5px;">
            <tr>
                <td colspan=3><center><h2 class="heading_all"><span style="float:left">&nbsp;&nbsp3)</span>Extras</h2></center></td>
            </tr>
            <tr id="adjbrackedt">
                <td width="40%"><a class="adjustable-brackets-pricing" ><h1>Adjustable Brackets</h1></a></td>
                <td width="50%">
                    <select class="makeadjustablecheck31" tabindex="13" name="adjustable" style="margin:4px ; float: right;width:70px;" align="right" onchange="makeAdjustable(this.form);getPriceOfProduct(this.form);"/>
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>
                </td>   
					<td>
                    <span id="errormsgfirstname">
                        <img id="adjustable_err" src="img/iconCheckOn.gif">
                    </span>
                </td>				
            </tr>
            <tr id="froast">
                <td width="40%" class="test-roasted"><a class="thickbox" href='http://www.sneezeguard.com/images/EP-51BAY/RADIUS1.jpg'><h1>Frosted Glass</h1></a></td>
				<td width="50%">  
                    <select name="roasted_glass"  value="0" tabindex="14" style="margin:4px; float: right;width:70px;" align="right;" onchange="getPriceOfProduct(this.form);show_pop(this.form);" />
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>    
                </td>
					<td>
                    <span id="errormsgfirstname">
                        <img id="adjustable_err" src="img/iconCheckOn.gif">
                    </span>
                </td>	
            </tr>
			
			 
			  <tr id="froast">
                <td width="40%" class="test-roasted"><a class="thickbox" href='http://www.sneezeguard.com/images/EP5/type_of_arc.jpg'><h1>Arc Glass</h1></a></td>
				<td width="50%">  
                    <select name="arc_glass" id="arc_glass_status"  value="0" tabindex="14" style="margin:4px; float: right;width:70px;" align="right;" onchange="getPriceOfProduct(this.form);show_pop_arc_glass(this.form);" />
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>    
                </td>
					<td>
                    <span id="errormsgfirstname">
                        <img id="adjustable_err" src="img/iconCheckOn.gif">
                    </span>
                </td>	
            </tr>
			
			  <tr id="arc_glass_type" style="display:none;">
                <td width="40%" class="test-roasted"><a class="thickbox" href='http://www.sneezeguard.com/images/EP5/type_of_arc.jpg'><h1>Arc Glass Type</h1></a></td>
				<td width="50%" style="text-align:right;">  
                    <select name="arc_glass_type_value" id="arc_glass_type_value"   value="0" tabindex="14" style="margin:4px; float: right;width:70px;" align="right;" onchange="getPriceOfProduct(this.form);" />
                        <option value="FA" selected>Full Arc</option>
                        <option value="CA">Curved Arc</option>
                        <option value="RD">Random Arc</option>
                    </select>    
                </td>
					<td>
                    <span id="errormsgfirstname">
                        <img id="adjustable_err" src="img/iconCheckOn.gif">
                    </span>
                </td>	
            </tr>
			
			<tr id="endpanel_arc_glass" style="display:none;">
                <td width="40%" class="test-roasted"><a class="thickbox" href='http://www.sneezeguard.com/images/EP5/with_and_without_end_panel.jpg'><h1>End Panel Arc Glass</h1></a></td>
				<td width="50%" style="text-align:right;">  
                    <select name="endpanel_arc_glass_value" id="endpanel_arc_glass_value"  value="0" tabindex="14" style="margin:4px; float: right;width:70px;" align="right;" onchange="getPriceOfProduct(this.form);" />
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>    
                </td>
					<td>
                    <span id="errormsgfirstname">
                        <img id="adjustable_err" src="img/iconCheckOn.gif">
                    </span>
                </td>	
            </tr>
			
			  <tr id="arc_adius" style="display:none;">
                <td width="40%" class="test-roasted"><a class="thickbox" href='http://www.sneezeguard.com/images/EP5/radius_of_arc.jpg'><h1>Arc Radius</h1></a></td>
				<td width="50%" style="text-align:right;">  
                    <select name="arc_glass_value" id="arc_glass_value"  value="0" tabindex="14" style="margin:4px; float: right;width:70px;" align="right;" onchange="getPriceOfProduct(this.form);" />
                        <option value="2">2"</option>
                        <option value="4" selected>4"</option>
                        <option value="6">6"</option>
                    </select>    
                </td>
					<td>
                    <span id="errormsgfirstname">
                        <img id="adjustable_err" src="img/iconCheckOn.gif">
                    </span>
                </td>	
            </tr>
				 
			<tr id="froast">
                <td width="40%" class="test-roasted"><a class="thickbox" href='images/EP5/ep5-mailbox-cutout.jpg'><h1>Mailbox Cutout</h1></a></td>
				<td width="40%">  
                    <select name="mailbox_cut" id="mailbox_cut_status"  value="0" tabindex="14" style="margin:4px; float: right;width:70px;" align="right;" onchange="getPriceOfProduct(this.form);show_pop_mailbox_cut(this.form);" />
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>    
                </td>
					<td>
                    <span id="errormsgfirstname">
                        <img id="adjustable_err" src="img/iconCheckOn.gif">
                    </span>
                </td>	
            </tr>
			
			<?php
			if($_REQUEST['type']=='1BAY' ||$_REQUEST['type']=='2BAY' || $_REQUEST['type']=='3BAY'  ||$_REQUEST['type']=='4BAY'){
			
			?>
				 
			  <tr id="mailbox_cutout_a" style="display:none;">
                <td width="40%" class="test-roasted"><a class="thickbox" href='images/EP5/ep5-mailbox-cutout.jpg'><h1>Cutout Face A</h1></a></td>
				<td width="50%">  
                    <select name="cutout_face_a" id="cutout_facea_status"  value="0" tabindex="14" style="margin:4px; float: right;width:70px;" align="right;" onchange="getPriceOfProduct(this.form);" />
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>    
                </td>
					<td>
                    <span id="errormsgfirstname">
                        <img id="adjustable_err" src="img/iconCheckOn.gif">
                    </span>
                </td>	
            </tr>
			<?php } if($_REQUEST['type']=='2BAY' || $_REQUEST['type']=='3BAY'  ||$_REQUEST['type']=='4BAY'){?>
				 
			  <tr id="mailbox_cutout_b" style="display:none;">
                <td width="40%" class="test-roasted"><a class="thickbox" href='images/EP5/ep5-mailbox-cutout.jpg'><h1>Cutout Face B</h1></a></td>
				<td width="50%">  
                    <select name="cutout_face_b" id="cutout_faceb_status"  value="0" tabindex="14" style="margin:4px; float: right;width:70px;" align="right;" onchange="getPriceOfProduct(this.form);" />
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>    
                </td>
					<td>
                    <span id="errormsgfirstname">
                        <img id="adjustable_err" src="img/iconCheckOn.gif">
                    </span>
                </td>	
            </tr>
			<?php } if($_REQUEST['type']=='3BAY'  ||$_REQUEST['type']=='4BAY'){?>		 
			  <tr id="mailbox_cutout_c" style="display:none;">
                <td width="40%" class="test-roasted"><a class="thickbox" href='images/EP5/ep5-mailbox-cutout.jpg'><h1>Cutout Face C</h1></a></td>
				<td width="50%">  
                    <select name="cutout_face_c" id="cutout_facec_status"  value="0" tabindex="14" style="margin:4px; float: right;width:70px;" align="right;" onchange="getPriceOfProduct(this.form);" />
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>    
                </td>
					<td>
                    <span id="errormsgfirstname">
                        <img id="adjustable_err" src="img/iconCheckOn.gif">
                    </span>
                </td>	
            </tr>
			
			<?php	}if($_REQUEST['type']=='4BAY'){?>	 
			  <tr id="mailbox_cutout_d" style="display:none;">
                <td width="40%" class="test-roasted"><a class="thickbox" href='images/EP5/ep5-mailbox-cutout.jpg'><h1>Cutout Face D</h1></a></td>
				<td width="50%">  
                    <select name="cutout_face_d" id="cutout_faced_status"  value="0" tabindex="14" style="margin:4px; float: right;width:70px;" align="right;" onchange="getPriceOfProduct(this.form);" />
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>    
                </td>
					<td>
                    <span id="errormsgfirstname">
                        <img id="adjustable_err" src="img/iconCheckOn.gif">
                    </span>
                </td>	
            </tr>
			<?php }?>
        </table>
		</div>
    </td> 
</tr>
</table>

<div><h2>&nbsp;</h2></div>
</div>

<div style=""  class="info-sub-container3" valign="top" align="center" >
	<div class="test-Price div3">	
    <table id="cart-form" class="price" cellpadding="0" cellspacing="0" width="100%"  valign="top"> 
    	<tbody><tr>
        <td colspan="2"><center><h2 class="heading_all"><span style="float:left">&nbsp;&nbsp;4)</span>Quote</h2></center></td>
    </tr>
    <tr>
        <td align="left" >Left Post:</td><td id="left-post" align="right">0.00</td>
    </tr>
    <tr>
        <td align="left">Right Post:</td><td id="right-post" align="right">0.00</td>
    </tr>
    <tr>
        <td align="left">Transistions Post:</td><td id="trasition-post" align="right">0.00</td>
    </tr>
    <tr>
        <td align="left">Flange Cover:</td><td id="flange-cover" align="right">0.00</td>
    </tr>
	<tr style="display:none;">
        <td align="left">Flange Under Counter:</td><td id="flange-under-counter" align="right">0.00</td>
    </tr>
	<tr>
        <td align="left">Frosted Glass:</td><td id="roasted-glass" align="right">0.00</td>
    </tr>
	<tr>
        <td align="left">Mailbox Cutout:</td><td id="mailbox-cutout-price" align="right">0.00</td>
    </tr>
	<tr>
        <td align="left">Light Bar:</td><td id="lightbar" align="right">0.00</td>
    </tr>
	<tr>
        <td align="left">Adjustable Brackets:</td><td id="make-adjustable" align="right">0.00</td>
    </tr>
    <tr>
        <td align="left">Face Glass:</td><td id="face-glass" align="right">0.00</td>
    </tr>
        <tr>
        <td align="left">Left End Glass:</td><td id="left-Panel" align="right">0.00</td>
    </tr>
    <tr>
        <td align="left">Right End Glass:</td><td id="right-panel" align="right">0.00</td>
    </tr>
        <tr>
        <td colspan="2" style="padding:0px !important;background: #f4f4f4; height:1px"></td>       
    </tr>
	<tr style="color:black;border-top:1.5px solid #000;border-bottom:1.5px solid #000;">
		 <td align="left" colspan="2" height="2"></td>
		 </tr>
    <tr style="background-color: rgb(121 239 40 / 30%);color:black;">
        <td align="left">Total:</td><td id="total" align="right">0.00</td>
    </tr>
</tbody></table>
</div>
<div class="price-icon-wishlist-addtocart"> 
<center><h2 class="heading_all" id="addcartandfavorite"><span style="float:left;">&nbsp;&nbsp;&nbsp;5)</span><div class="addcartandfavdiv">Action</div></h2></center>

        <input type="hidden" id="c_glass_post_val" name="c_glass_post_val" value="">
        <input type="hidden" id="c_glass_face" name="c_glass_face" value="">
        <input type="hidden" id="c_glass_face_val" name="c_glass_face_val" value="">
        <input type="hidden" id="c_glass_mult" name="c_glass_mult" value="1">
		 <input type="hidden" id="c_glass_right" name="c_glass_right" value="">
        <input type="hidden" id="c_glass_right_val" name="c_glass_right_val" value="">
        <input type="hidden" id="c_glass_right_mult" name="c_glass_right_mult" value="1">
        <input type="hidden" id="c_glass_left" name="c_glass_left" value="">
        <input type="hidden" id="c_glass_left_val" name="c_glass_left_val" value="">
        <input type="hidden" id="c_glass_left_mult" name="c_glass_left_mult" value="1">
		<input type="hidden" id="rostedglass_id" name="rostedglass_id" value="">
		<input type="hidden" id="rostedglass_val" name="rostedglass_val" value="">
		<input type="hidden" id="c_glass_a_maibox_cut" name="c_glass_a_maibox_cut" value="">
		<input type="hidden" id="c_glass_a_val_maibox_cut" name="c_glass_a_val_maibox_cut" value="">
		<input type="hidden" id="c_glass_b_maibox_cut" name="c_glass_b_maibox_cut" value="">
		<input type="hidden" id="c_glass_b_val_maibox_cut" name="c_glass_b_val_maibox_cut" value="">
		<input type="hidden" id="c_glass_c_maibox_cut" name="c_glass_c_maibox_cut" value="">
		<input type="hidden" id="c_glass_c_val_maibox_cut" name="c_glass_c_val_maibox_cut" value="">
		<input type="hidden" id="c_glass_d_maibox_cut" name="c_glass_d_maibox_cut" value="">
		<input type="hidden" id="c_glass_d_val_maibox_cut" name="c_glass_d_val_maibox_cut" value="">
		<input type="hidden" id="c_glass_a_light" name="c_glass_a_light" value="">
		<input type="hidden" id="c_glass_a_val_light" name="c_glass_a_val_light" value="">
		<input type="hidden" id="c_glass_b_light" name="c_glass_b_light" value="">
		<input type="hidden" id="c_glass_b_val_light" name="c_glass_b_val_light" value="">
		<input type="hidden" id="c_glass_c_light" name="c_glass_c_light" value="">
		<input type="hidden" id="c_glass_c_val_light" name="c_glass_c_val_light" value="">
		<input type="hidden" id="c_glass_d_light" name="c_glass_d_light" value="">
		<input type="hidden" id="c_glass_d_val_light" name="c_glass_d_val_light" value="">
		<input type="hidden" id="c_glass_adjustable_a" name="c_glass_adjustable_a" value="">
		<input type="hidden" id="c_glass_adjustable_b" name="c_glass_adjustable_b" value="">
		<input type="hidden" id="c_glass_adjustable_c" name="c_glass_adjustable_c" value=""> 
        <input type="hidden" id="c_glass_adjustable_d" name="c_glass_adjustable_d" value="">
        <input type="hidden" id="c_glass_adjustable_a_val" name="c_glass_adjustable_a_val" value="">
		<input type="hidden" id="c_glass_adjustable_b_val" name="c_glass_adjustable_b_val" value="">
		<input type="hidden" id="c_glass_adjustable_c_val" name="c_glass_adjustable_c_val" value="">
		<input type="hidden" id="c_glass_adjustable_d_val" name="c_glass_adjustable_d_val" value="">
		<input type="hidden" id="c_glass_a" name="c_glass_a" value="">
        <input type="hidden" id="c_glass_a_val" name="c_glass_a_val" value="Select">
        <input type="hidden" id="c_glass_a_mult" name="c_glass_a_mult" value="1">
		<input type="hidden" id="c_glass_b" name="c_glass_b" value="">
        <input type="hidden" id="c_glass_b_val" name="c_glass_b_val" value="Select">
		<input type="hidden" id="c_glass_b_mult" name="c_glass_b_mult" value="1">
		<input type="hidden" id="c_glass_c" name="c_glass_c" value="">
        <input type="hidden" id="c_glass_c_val" name="c_glass_c_val" value="Select">
        <input type="hidden" id="c_glass_c_mult" name="c_glass_c_mult" value="1">
	    <input type="hidden" id="c_glass_d" name="c_glass_d" value="">
        <input type="hidden" id="c_glass_d_val" name="c_glass_d_val" value="Select">
		<input type="hidden" id="c_glass_d_mult" name="c_glass_d_mult" value="1">
		<input type="hidden" id="is_custom" name="is_custom" value="">
		<input type="hidden" id="is_frosted" name="is_frosted" value="">
		<input type="hidden" id="product_type" name="product_type" value="<?php echo $category_name; ?>">
		<input type="hidden" name="link" id="link">
		<input type="hidden" id="msg" name="msg" value="">
		<input type="hidden" id="ckall" name="ckall" value="">
     	<input type="hidden" name="type" id="type" value="<?php echo$_REQUEST['type'] ?>">
		<input type="hidden" name="glass_face" value="0" id="glass-face" disabled="disabled">
		<input type="hidden" name="optionsid" id="optionsid" value="" disabled="disabled">
    <div class="item" style="position:absolute;visibility:hidden;">
           <div class="delete" style="visibility:hidden"></div>
        </div>
		<div class="item" style="position:absolute;visibility:hidden;">
           <div class="delete1" style="visibility:hidden">    </div>
		   <div class="delete2" style="visibility:hidden">    </div>
		   <div class="delete3" style="visibility:hidden">    </div>
        </div>
        <div class="row m-1">
			<div class="col-6 col-md-6 col-sm-6 text-center" title="Save to Favorite" id="wishlistt-div">
			
			
			<a href="javascript:void(0)" onclick="wishlist()">
			<img src="img/pricing-page/wishlist22.png" style="width:50%;margin-top: -5%;">
			<p>Save to Favorite</p>
			</a>
			</div>
			<div class="col-6 col-md-6 col-sm-6 text-center" id="cart-div">
			<button  onclick="return myFunction2(this.form)" id="add" title=" Add to Cart " alt="Add to Cart"  style="background: none;border: none;outline:none;" >
			<img src="img/pricing-page/add-to-cart23.png" >
			<p>Add to Cart</p>
			</button>
		
			</div>
		</div>

</div>
</div>
<script>
    var tot1=osc=im_id=img_ajx="";
	var wt=0;
	var requestType="<?=$_REQUEST['type']?>";
	var osc="<?=$_REQUEST['osCsid']; ?>";
	var im_id="<?=$im_id; ?>";
	var val="<?= $val ?>";
	var category_name='<?=$category_name?>';
	var ms_glass='<?=$ms_glass?>';
	var ms_adjustable='<?=$ms_glass?>';
	var ms_option='<?=$ms_option?>';
    var ms_post='<?=$ms_post?>';
	function getPriceOfProduct(data){
		getPriceOfProductRingEP5(data,requestType,osc,im_id,val,category_name);
	}
	function nogl(data,el,val){
		noglRingEP5(data,el,val,ms_glass);
	}
	function show_pop(data){
		show_popEP5(data,ms_option);	
	}
	$(document).ready(function(){
	zero=one=two=three=four=five=six=seven=eight=nine=ten=eleven=false;
    selectOption=0;
    choseOption=0;
    choselength=0;
	choselight=0;
	choseroasted=0;
    choseRounded=0;
    choseFlang=0;
    priceOption=0;
	FaceLenght=0;
	Frostedglass=0;
	Lenghta=0;
	Lenghtb=0;
	Lenghtc=0;
	Lenghtd=0;
	MakeAdja=0;
	MakeAdjb=0;
	MakeAdjc=0;
	MakeAdjd=0;
	MakeAdj=0;
	choseFinish=0;
    h=10;
    h1=10;
    h2=10;
    h3=10;
    t1=0;
    t2=0;
    t3=0;
    t4=0;
	var custom;
	var my_facelengt_select="";
	var post='';
	var ispost=false;
	$('[name="face_length_a"]').live('change',function(){
		if($(this).val()=='custom'){
			custom=$(this);post='';
			$msg='<?php echo $ms_face ?>&nbsp;&nbsp;<input type="checkbox" id="customefaceA" onchange="makeFacechange(this.form);"><span style="color:#666; font-size:16px;font: 26px/1 " cuprum","lucida="" sans="" unicode",="" "lucida="" grande",="" sans-serif;text-shadow:="" 1px="" 0="" rgba(255,="" 255,="" 0.6);color:="" #666;text-align:="" justify;"=""> : Make Next All Glass of Same Length</span>';
			$('.delete').click();
		}
	})
	$('[name="face_length_b"]').live('change',function(){
		if($(this).val()=='custom'){
			$msg='<?php echo $ms_face ?>&nbsp;&nbsp;<input type="checkbox" id="customefaceB" onchange="makeFacechange(this.form);"><span style="color:#666; font-size:16px;font: 26px/1 " cuprum","lucida="" sans="" unicode",="" "lucida="" grande",="" sans-serif;text-shadow:="" 1px="" 0="" rgba(255,="" 255,="" 0.6);color:="" #666;text-align:="" justify;"=""> : Make Next All Glass of Same Length</span>';
			custom=$(this);post='';
			$('.delete').click();
		}
	})
	$('[name="face_length_c"]').live('change',function(){
		if($(this).val()=='custom'){
			custom=$(this);post='';
			$msg='<?php echo $ms_face ?>&nbsp;&nbsp;<input type="checkbox" id="customefaceC" onchange="makeFacechange(this.form);"><span style="color:#666; font-size:16px;font: 26px/1 " cuprum","lucida="" sans="" unicode",="" "lucida="" grande",="" sans-serif;text-shadow:="" 1px="" 0="" rgba(255,="" 255,="" 0.6);color:="" #666;text-align:="" justify;"=""> : Make Next All Glass of Same Length</span>';
			$('.delete').click();
		}
	})	
	$('[name="face_length_d"]').live('change',function(){
		if($(this).val()=='custom'){
			custom=$(this);post='';
            $msg='<?php echo $ms_face?>';
           $('.delete').click();
		   }
			})

	$('[name="face_length"]').live('change',function(){
		if($(this).val()=='custom'){
			$msg='<?php echo $ms_face?>';
			custom=$(this);post='';
			$('.delete').click();
		}
	})
	$('[name="right_length"]').live('change', function(){
		if($(this).val()=='custom'){
			$msg='<?php echo $ms_right?>';
			custom=$(this);post='';
			$('.delete').click();
		}
	})
	$('[name="left_length"]').live('change', function(){
		if($(this).val()=='custom'){
			$msg='<?php echo $ms_left?>';
			custom=$(this);
			post='';
			$('.delete').click();
		}
	})
	$('[name="post_height"]').change(function(){
		if($(this).val()=='custom'){
			custom=$(this);
			post='yes'; 
			var a;
			var b;
			if(category_name=='EP5'){ var a=8;var b=30;}
			if(category_name=='EP11'||category_name=='EP12'){ var a=12;var b=24;}
			$msg='<span align="right" ><img src="jquery.confirm/<?php echo $category_name; ?>.jpg" style="float:right;"><span style="width:250px;display:block;text-align:justify;"><?php echo $ms_post?></span></span>';
			$('.delete').click();
		}
	})
	$('.item .delete').click(function(){
		jsconfirm($msg,category_name,ispost,custom,post);
	});	
});
</script>
<script src="jquery.confirm/jquery.confirm.js"></script>
<script src="includes/model_files/Ring-EP5/Ring-EP5.js"></script>