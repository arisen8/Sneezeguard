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
?>
<script type="text/javascript">
            var tot1=osc=im_id=img_ajx="";
            var wt=0;
<?php
        if(isset($HTTP_GET_VARS['id'])){
            $product="select count(*) as total from ".TABLE_PRODUCTS." as p, ".TABLE_PRODUCTS_DESCRIPTION." as pd, ".TABLE_PRODUCTS_TO_CATEGORIES." as pc where p.products_id=pd.products_id and pd.products_id=pc.products_id and pc.categories_id='122' and pd.language_id=".(int)$languages_id;
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
<link rel="stylesheet" href="includes/model_files/EP5/EP5.css">
<table id="cart-form">
    <?php //include('form_option.php')?>
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
                                            <select name="post_height" id="post_height"  onchange="getPriceOfProduct(this.form)" >
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
                                            </span>
                                        <td>
                                            <span id="errormsgfirstname">
                                                <img id="post_err" src="img/iconCheckOff.gif">
                                            </span>
                                        </td>
                                    </tr>
                                    
                                    <tr><td></td></tr>
                                  
									
									 
                           
                                    
                                
                                
                     
		                      
                     
								
						   
<?php 
//STRUCTURE for 1 bay
    if($category_name=='Ring-EP5'){
	if($_REQUEST['type']=='1BAY') {
      ?>
            
            <tr class="test-length">
                <td class="test-lenght1bay" ><a class="thickbox" href='images/EP5/1bay_faceA.jpg' ><h1>Face Length A</h1></a></td><td>
                <span id="face_length_span">
                    <select name="face_length" tabindex="2" id="face_length" class="usecustom" onchange="getPriceOfProduct(this.form);nogl(this.form,this.name,this.value);show_lightbar_pupup(this.form);">
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
                <td class="test-lenght2baya"><a class="thickbox" href='images/EP5/2bay_faceA.jpg'><h1>Face Length A</h1></a></td><td>
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
                <td class="test-lenght2bayb"><a class="thickbox" href='images/EP5/2bay_faceB.jpg' ><h1>Face Length B</h1></a></td><td>
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
                    
					<!--</select><select  id="show_select_faceb_fora" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);" style="display:none;">-->
					
					<option value="12" class="customsame" style="display:none;">8-1/4"</option>
					<option value="12" class="customsame" style="display:none;">8-1/2"</option>
					<option value="12" class="customsame" style="display:none;">8-3/4"</option>
					<option value="12" class="customsame" style="display:none;">9"</option>
					<option value="12" class="customsame" style="display:none;">9-1/4"</option>
					<option value="12" class="customsame" style="display:none;">9-1/2"</option>
					<option value="12" class="customsame" style="display:none;">9-3/4"</option>
					<option value="12" class="customsame" style="display:none;">10"</option>
					<option value="12" class="customsame" style="display:none;">10-1/4"</option>
					<option value="12" class="customsame" style="display:none;">10-1/2"</option>
					<option value="12" class="customsame" style="display:none;">10-3/4"</option>
					<option value="12" class="customsame" style="display:none;">11"</option>
					<option value="12" class="customsame" style="display:none;">11-1/4"</option>
					<option value="12" class="customsame" style="display:none;">11-1/2"</option>
					<option value="12" class="customsame" style="display:none;">11-3/4"</option>
					<option value="12" class="customsame" style="display:none;">12"</option>
					<option value="18" class="customsame" style="display:none;">12-1/4"</option>
					<option value="18" class="customsame" style="display:none;">12-1/2"</option>
					<option value="18" class="customsame" style="display:none;">12-3/4"</option>
					<option value="18" class="customsame" style="display:none;">13"</option>
					<option value="18" class="customsame" style="display:none;">13-1/4"</option>
					<option value="18" class="customsame" style="display:none;">13-1/2"</option>
					<option value="18" class="customsame" style="display:none;">13-3/4"</option>
					<option value="18" class="customsame" style="display:none;">14"</option>
					<option value="18" class="customsame" style="display:none;">14-1/4"</option>
					<option value="18" class="customsame" style="display:none;">14-1/2"</option>
					<option value="18" class="customsame" style="display:none;">14-3/4"</option>
					<option value="18" class="customsame" style="display:none;">15"</option>
					<option value="18" class="customsame" style="display:none;">15-1/4"</option>
					<option value="18" class="customsame" style="display:none;">15-1/2"</option>
					<option value="18" class="customsame" style="display:none;">15-3/4"</option>
					<option value="18" class="customsame" style="display:none;">16"</option>
					<option value="18" class="customsame" style="display:none;">16-1/4"</option>
					<option value="18" class="customsame" style="display:none;">16-1/2"</option>
					<option value="18" class="customsame" style="display:none;">16-3/4"</option>
					<option value="18" class="customsame" style="display:none;">17"</option>
					<option value="18" class="customsame" style="display:none;">17-1/4"</option>
					<option value="18" class="customsame" style="display:none;">17-1/2"</option>
					<option value="18" class="customsame" style="display:none;">17-3/4"</option>
					<option value="18" class="customsame" style="display:none;">18"</option>
					<option value="24" class="customsame" style="display:none;">18-1/4"</option>
					<option value="24" class="customsame" style="display:none;">18-1/2"</option>
					<option value="24" class="customsame" style="display:none;">18-3/4"</option>
					<option value="24" class="customsame" style="display:none;">19"</option>
					<option value="24" class="customsame" style="display:none;">19-1/4"</option>
					<option value="24" class="customsame" style="display:none;">19-1/2"</option>
					<option value="24" class="customsame" style="display:none;">19-3/4"</option>
					<option value="24" class="customsame" style="display:none;">20"</option>
					<option value="24" class="customsame" style="display:none;">20-1/4"</option>
					<option value="24" class="customsame" style="display:none;">20-1/2"</option>
					<option value="24" class="customsame" style="display:none;">20-3/4"</option>
					<option value="24" class="customsame" style="display:none;">21"</option>
					<option value="24" class="customsame" style="display:none;">21-1/4"</option>
					<option value="24" class="customsame" style="display:none;">21-1/2"</option>
					<option value="24" class="customsame" style="display:none;">21-3/4"</option>
					<option value="24" class="customsame" style="display:none;">22"</option>
					<option value="24" class="customsame" style="display:none;">22-1/4"</option>
					<option value="24" class="customsame" style="display:none;">22-1/2"</option>
					<option value="24" class="customsame" style="display:none;">22-3/4"</option>
					<option value="24" class="customsame" style="display:none;">23"</option>
					<option value="24" class="customsame" style="display:none;">23-1/4"</option>
					<option value="24" class="customsame" style="display:none;">23-1/2"</option>
					<option value="24" class="customsame" style="display:none;">23-3/4"</option>
					<option value="24" class="customsame" style="display:none;">24"</option>
					<option value="30" class="customsame" style="display:none;">24-1/4"</option>
					<option value="30" class="customsame" style="display:none;">24-1/2"</option>
					<option value="30" class="customsame" style="display:none;">24-3/4"</option>
					<option value="30" class="customsame" style="display:none;">25"</option>
					<option value="30" class="customsame" style="display:none;">25-1/4"</option>
					<option value="30" class="customsame" style="display:none;">25-1/2"</option>
					<option value="30" class="customsame" style="display:none;">25-3/4"</option>
					<option value="30" class="customsame" style="display:none;">26"</option>
					<option value="30" class="customsame" style="display:none;">26-1/4"</option>
					<option value="30" class="customsame" style="display:none;">26-1/2"</option>
					<option value="30" class="customsame" style="display:none;">26-3/4"</option>
					<option value="30" class="customsame" style="display:none;">27"</option>
					<option value="30" class="customsame" style="display:none;">27-1/4"</option>
					<option value="30" class="customsame" style="display:none;">27-1/2"</option>
					<option value="30" class="customsame" style="display:none;">27-3/4"</option>
					<option value="30" class="customsame" style="display:none;">28"</option>
					<option value="30" class="customsame" style="display:none;">28-1/4"</option>
					<option value="30" class="customsame" style="display:none;">28-1/2"</option>
					<option value="30" class="customsame" style="display:none;">28-3/4"</option>
					<option value="30" class="customsame" style="display:none;">29"</option>
					<option value="30" class="customsame" style="display:none;">29-1/4"</option>
					<option value="30" class="customsame" style="display:none;">29-1/2"</option>
					<option value="30" class="customsame" style="display:none;">29-3/4"</option>
					<option value="30" class="customsame" style="display:none;">30"</option>
					<option value="36" class="customsame" style="display:none;">30-1/4"</option>
					<option value="36" class="customsame" style="display:none;">30-1/2"</option>
					<option value="36" class="customsame" style="display:none;">30-3/4"</option>
					<option value="36" class="customsame" style="display:none;">31"</option>
					<option value="36" class="customsame" style="display:none;">31-1/4"</option>
					<option value="36" class="customsame" style="display:none;">31-1/2"</option>
					<option value="36" class="customsame" style="display:none;">31-3/4"</option>
					<option value="36" class="customsame" style="display:none;">32"</option>
					<option value="36" class="customsame" style="display:none;">32-1/4"</option>
					<option value="36" class="customsame" style="display:none;">32-1/2"</option>
					<option value="36" class="customsame" style="display:none;">32-3/4"</option>
					<option value="36" class="customsame" style="display:none;">33"</option>
					<option value="36" class="customsame" style="display:none;">33-1/4"</option>
					<option value="36" class="customsame" style="display:none;">33-1/2"</option>
					<option value="36" class="customsame" style="display:none;">33-3/4"</option>
					<option value="36" class="customsame" style="display:none;">34"</option>
					<option value="36" class="customsame" style="display:none;">34-1/4"</option>
					<option value="36" class="customsame" style="display:none;">34-1/2"</option>
					<option value="36" class="customsame" style="display:none;">34-3/4"</option>
					<option value="36" class="customsame" style="display:none;">35"</option>
					<option value="36" class="customsame" style="display:none;">35-1/4"</option>
					<option value="36" class="customsame" style="display:none;">35-1/2"</option>
					<option value="36" class="customsame" style="display:none;">35-3/4"</option>
					<option value="36" class="customsame" style="display:none;">36"</option>
					<option value="42" class="customsame" style="display:none;">36-1/4"</option>
					<option value="42" class="customsame" style="display:none;">36-1/2"</option>
					<option value="42" class="customsame" style="display:none;">36-3/4"</option>
					<option value="42" class="customsame" style="display:none;">37"</option>
					<option value="42" class="customsame" style="display:none;">37-1/4"</option>
					<option value="42" class="customsame" style="display:none;">37-1/2"</option>
					<option value="42" class="customsame" style="display:none;">37-3/4"</option>
					<option value="42" class="customsame" style="display:none;">38"</option>
					<option value="42" class="customsame" style="display:none;">38-1/4"</option>
					<option value="42" class="customsame" style="display:none;">38-1/2"</option>
					<option value="42" class="customsame" style="display:none;">38-3/4"</option>
					<option value="42" class="customsame" style="display:none;">39"</option>
					<option value="42" class="customsame" style="display:none;">39-1/4"</option>
					<option value="42" class="customsame" style="display:none;">39-1/2"</option>
					<option value="42" class="customsame" style="display:none;">39-3/4"</option>
					<option value="42" class="customsame" style="display:none;">40"</option>
					<option value="42" class="customsame" style="display:none;">40-1/4"</option>
					<option value="42" class="customsame" style="display:none;">40-1/2"</option>
					<option value="42" class="customsame" style="display:none;">40-3/4"</option>
					<option value="42" class="customsame" style="display:none;">41"</option>
					<option value="42" class="customsame" style="display:none;">41-1/4"</option>
					<option value="42" class="customsame" style="display:none;">41-1/2"</option>
					<option value="42" class="customsame" style="display:none;">41-3/4"</option>
					<option value="42" class="customsame" style="display:none;">42"</option>
					<option value="48" class="customsame" style="color:red;display:none;">42-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">42-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">42-3/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">43"</option>
					<option value="48" class="customsame" style="color:red;display:none;">43-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">43-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">43-3/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">44"</option>
					<option value="48" class="customsame" style="color:red;display:none;">44-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">44-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">44-3/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">45"</option>
					<option value="48" class="customsame" style="color:red;display:none;">45-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">45-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">45-3/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">46"</option>
					<option value="48" class="customsame" style="color:red;display:none;">46-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">46-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">46-3/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">47"</option>
					<option value="48" class="customsame" style="color:red;display:none;">47-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">47-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">47-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">48"</option>
					<option value="54" class="customsame" style="color:red;display:none;">48-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">48-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">48-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">49"</option>
					<option value="54" class="customsame" style="color:red;display:none;">49-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">49-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">49-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">50"</option>
					<option value="54" class="customsame" style="color:red;display:none;">50-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">50-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">50-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">51"</option>
					<option value="54" class="customsame" style="color:red;display:none;">51-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">51-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">51-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">52"</option>
					<option value="54" class="customsame" style="color:red;display:none;">52-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">52-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">52-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">53"</option>
					<option value="54" class="customsame" style="color:red;display:none;">53-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">53-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">53-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">54"</option>
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
                <td class="test-lenght3baya"><a class="thickbox" href='images/EP5/3bay_faceA.jpg'><h1>Face Length A</h1></a></td><td>
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
                <td class="test-lenght3bayb"><a class="thickbox" href='images/EP5/3bay_faceB.jpg' ><h1>Face Length B</h1></a></td><td>
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
                    
					<!--</select><select  id="show_select_faceb_fora" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);" style="display:none;">-->
					
					<option value="12" class="customsame" style="display:none;">8-1/4"</option>
					<option value="12" class="customsame" style="display:none;">8-1/2"</option>
					<option value="12" class="customsame" style="display:none;">8-3/4"</option>
					<option value="12" class="customsame" style="display:none;">9"</option>
					<option value="12" class="customsame" style="display:none;">9-1/4"</option>
					<option value="12" class="customsame" style="display:none;">9-1/2"</option>
					<option value="12" class="customsame" style="display:none;">9-3/4"</option>
					<option value="12" class="customsame" style="display:none;">10"</option>
					<option value="12" class="customsame" style="display:none;">10-1/4"</option>
					<option value="12" class="customsame" style="display:none;">10-1/2"</option>
					<option value="12" class="customsame" style="display:none;">10-3/4"</option>
					<option value="12" class="customsame" style="display:none;">11"</option>
					<option value="12" class="customsame" style="display:none;">11-1/4"</option>
					<option value="12" class="customsame" style="display:none;">11-1/2"</option>
					<option value="12" class="customsame" style="display:none;">11-3/4"</option>
					<option value="12" class="customsame" style="display:none;">12"</option>
					<option value="18" class="customsame" style="display:none;">12-1/4"</option>
					<option value="18" class="customsame" style="display:none;">12-1/2"</option>
					<option value="18" class="customsame" style="display:none;">12-3/4"</option>
					<option value="18" class="customsame" style="display:none;">13"</option>
					<option value="18" class="customsame" style="display:none;">13-1/4"</option>
					<option value="18" class="customsame" style="display:none;">13-1/2"</option>
					<option value="18" class="customsame" style="display:none;">13-3/4"</option>
					<option value="18" class="customsame" style="display:none;">14"</option>
					<option value="18" class="customsame" style="display:none;">14-1/4"</option>
					<option value="18" class="customsame" style="display:none;">14-1/2"</option>
					<option value="18" class="customsame" style="display:none;">14-3/4"</option>
					<option value="18" class="customsame" style="display:none;">15"</option>
					<option value="18" class="customsame" style="display:none;">15-1/4"</option>
					<option value="18" class="customsame" style="display:none;">15-1/2"</option>
					<option value="18" class="customsame" style="display:none;">15-3/4"</option>
					<option value="18" class="customsame" style="display:none;">16"</option>
					<option value="18" class="customsame" style="display:none;">16-1/4"</option>
					<option value="18" class="customsame" style="display:none;">16-1/2"</option>
					<option value="18" class="customsame" style="display:none;">16-3/4"</option>
					<option value="18" class="customsame" style="display:none;">17"</option>
					<option value="18" class="customsame" style="display:none;">17-1/4"</option>
					<option value="18" class="customsame" style="display:none;">17-1/2"</option>
					<option value="18" class="customsame" style="display:none;">17-3/4"</option>
					<option value="18" class="customsame" style="display:none;">18"</option>
					<option value="24" class="customsame" style="display:none;">18-1/4"</option>
					<option value="24" class="customsame" style="display:none;">18-1/2"</option>
					<option value="24" class="customsame" style="display:none;">18-3/4"</option>
					<option value="24" class="customsame" style="display:none;">19"</option>
					<option value="24" class="customsame" style="display:none;">19-1/4"</option>
					<option value="24" class="customsame" style="display:none;">19-1/2"</option>
					<option value="24" class="customsame" style="display:none;">19-3/4"</option>
					<option value="24" class="customsame" style="display:none;">20"</option>
					<option value="24" class="customsame" style="display:none;">20-1/4"</option>
					<option value="24" class="customsame" style="display:none;">20-1/2"</option>
					<option value="24" class="customsame" style="display:none;">20-3/4"</option>
					<option value="24" class="customsame" style="display:none;">21"</option>
					<option value="24" class="customsame" style="display:none;">21-1/4"</option>
					<option value="24" class="customsame" style="display:none;">21-1/2"</option>
					<option value="24" class="customsame" style="display:none;">21-3/4"</option>
					<option value="24" class="customsame" style="display:none;">22"</option>
					<option value="24" class="customsame" style="display:none;">22-1/4"</option>
					<option value="24" class="customsame" style="display:none;">22-1/2"</option>
					<option value="24" class="customsame" style="display:none;">22-3/4"</option>
					<option value="24" class="customsame" style="display:none;">23"</option>
					<option value="24" class="customsame" style="display:none;">23-1/4"</option>
					<option value="24" class="customsame" style="display:none;">23-1/2"</option>
					<option value="24" class="customsame" style="display:none;">23-3/4"</option>
					<option value="24" class="customsame" style="display:none;">24"</option>
					<option value="30" class="customsame" style="display:none;">24-1/4"</option>
					<option value="30" class="customsame" style="display:none;">24-1/2"</option>
					<option value="30" class="customsame" style="display:none;">24-3/4"</option>
					<option value="30" class="customsame" style="display:none;">25"</option>
					<option value="30" class="customsame" style="display:none;">25-1/4"</option>
					<option value="30" class="customsame" style="display:none;">25-1/2"</option>
					<option value="30" class="customsame" style="display:none;">25-3/4"</option>
					<option value="30" class="customsame" style="display:none;">26"</option>
					<option value="30" class="customsame" style="display:none;">26-1/4"</option>
					<option value="30" class="customsame" style="display:none;">26-1/2"</option>
					<option value="30" class="customsame" style="display:none;">26-3/4"</option>
					<option value="30" class="customsame" style="display:none;">27"</option>
					<option value="30" class="customsame" style="display:none;">27-1/4"</option>
					<option value="30" class="customsame" style="display:none;">27-1/2"</option>
					<option value="30" class="customsame" style="display:none;">27-3/4"</option>
					<option value="30" class="customsame" style="display:none;">28"</option>
					<option value="30" class="customsame" style="display:none;">28-1/4"</option>
					<option value="30" class="customsame" style="display:none;">28-1/2"</option>
					<option value="30" class="customsame" style="display:none;">28-3/4"</option>
					<option value="30" class="customsame" style="display:none;">29"</option>
					<option value="30" class="customsame" style="display:none;">29-1/4"</option>
					<option value="30" class="customsame" style="display:none;">29-1/2"</option>
					<option value="30" class="customsame" style="display:none;">29-3/4"</option>
					<option value="30" class="customsame" style="display:none;">30"</option>
					<option value="36" class="customsame" style="display:none;">30-1/4"</option>
					<option value="36" class="customsame" style="display:none;">30-1/2"</option>
					<option value="36" class="customsame" style="display:none;">30-3/4"</option>
					<option value="36" class="customsame" style="display:none;">31"</option>
					<option value="36" class="customsame" style="display:none;">31-1/4"</option>
					<option value="36" class="customsame" style="display:none;">31-1/2"</option>
					<option value="36" class="customsame" style="display:none;">31-3/4"</option>
					<option value="36" class="customsame" style="display:none;">32"</option>
					<option value="36" class="customsame" style="display:none;">32-1/4"</option>
					<option value="36" class="customsame" style="display:none;">32-1/2"</option>
					<option value="36" class="customsame" style="display:none;">32-3/4"</option>
					<option value="36" class="customsame" style="display:none;">33"</option>
					<option value="36" class="customsame" style="display:none;">33-1/4"</option>
					<option value="36" class="customsame" style="display:none;">33-1/2"</option>
					<option value="36" class="customsame" style="display:none;">33-3/4"</option>
					<option value="36" class="customsame" style="display:none;">34"</option>
					<option value="36" class="customsame" style="display:none;">34-1/4"</option>
					<option value="36" class="customsame" style="display:none;">34-1/2"</option>
					<option value="36" class="customsame" style="display:none;">34-3/4"</option>
					<option value="36" class="customsame" style="display:none;">35"</option>
					<option value="36" class="customsame" style="display:none;">35-1/4"</option>
					<option value="36" class="customsame" style="display:none;">35-1/2"</option>
					<option value="36" class="customsame" style="display:none;">35-3/4"</option>
					<option value="36" class="customsame" style="display:none;">36"</option>
					<option value="42" class="customsame" style="display:none;">36-1/4"</option>
					<option value="42" class="customsame" style="display:none;">36-1/2"</option>
					<option value="42" class="customsame" style="display:none;">36-3/4"</option>
					<option value="42" class="customsame" style="display:none;">37"</option>
					<option value="42" class="customsame" style="display:none;">37-1/4"</option>
					<option value="42" class="customsame" style="display:none;">37-1/2"</option>
					<option value="42" class="customsame" style="display:none;">37-3/4"</option>
					<option value="42" class="customsame" style="display:none;">38"</option>
					<option value="42" class="customsame" style="display:none;">38-1/4"</option>
					<option value="42" class="customsame" style="display:none;">38-1/2"</option>
					<option value="42" class="customsame" style="display:none;">38-3/4"</option>
					<option value="42" class="customsame" style="display:none;">39"</option>
					<option value="42" class="customsame" style="display:none;">39-1/4"</option>
					<option value="42" class="customsame" style="display:none;">39-1/2"</option>
					<option value="42" class="customsame" style="display:none;">39-3/4"</option>
					<option value="42" class="customsame" style="display:none;">40"</option>
					<option value="42" class="customsame" style="display:none;">40-1/4"</option>
					<option value="42" class="customsame" style="display:none;">40-1/2"</option>
					<option value="42" class="customsame" style="display:none;">40-3/4"</option>
					<option value="42" class="customsame" style="display:none;">41"</option>
					<option value="42" class="customsame" style="display:none;">41-1/4"</option>
					<option value="42" class="customsame" style="display:none;">41-1/2"</option>
					<option value="42" class="customsame" style="display:none;">41-3/4"</option>
					<option value="42" class="customsame" style="display:none;">42"</option>
					<option value="48" class="customsame" style="color:red;display:none;">42-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">42-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">42-3/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">43"</option>
					<option value="48" class="customsame" style="color:red;display:none;">43-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">43-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">43-3/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">44"</option>
					<option value="48" class="customsame" style="color:red;display:none;">44-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">44-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">44-3/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">45"</option>
					<option value="48" class="customsame" style="color:red;display:none;">45-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">45-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">45-3/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">46"</option>
					<option value="48" class="customsame" style="color:red;display:none;">46-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">46-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">46-3/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">47"</option>
					<option value="48" class="customsame" style="color:red;display:none;">47-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">47-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">47-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">48"</option>
					<option value="54" class="customsame" style="color:red;display:none;">48-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">48-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">48-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">49"</option>
					<option value="54" class="customsame" style="color:red;display:none;">49-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">49-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">49-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">50"</option>
					<option value="54" class="customsame" style="color:red;display:none;">50-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">50-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">50-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">51"</option>
					<option value="54" class="customsame" style="color:red;display:none;">51-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">51-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">51-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">52"</option>
					<option value="54" class="customsame" style="color:red;display:none;">52-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">52-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">52-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">53"</option>
					<option value="54" class="customsame" style="color:red;display:none;">53-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">53-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">53-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">54"</option>
					<option value="No Glass" class="customsame" style="display:none;">No Glass</option>
                    </select>
					</span></td><td>
					   <span id="errormsgfirstname">
                            <img id="glass_b_err" src="img/iconCheckOff.gif">
                        </span>
                </td>
            </tr>
            <tr class="test-length">
                <td class="test-lenght3bayc"><a class="thickbox" href='images/EP5/3bay_faceC.jpg' ><h1>Face Length C</h1></a></td><td>
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
                    
					<!--</select><select  id="show_select_faceb_fora" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);" style="display:none;">-->
					
					<option value="12" class="customsame" style="display:none;">8-1/4"</option>
					<option value="12" class="customsame" style="display:none;">8-1/2"</option>
					<option value="12" class="customsame" style="display:none;">8-3/4"</option>
					<option value="12" class="customsame" style="display:none;">9"</option>
					<option value="12" class="customsame" style="display:none;">9-1/4"</option>
					<option value="12" class="customsame" style="display:none;">9-1/2"</option>
					<option value="12" class="customsame" style="display:none;">9-3/4"</option>
					<option value="12" class="customsame" style="display:none;">10"</option>
					<option value="12" class="customsame" style="display:none;">10-1/4"</option>
					<option value="12" class="customsame" style="display:none;">10-1/2"</option>
					<option value="12" class="customsame" style="display:none;">10-3/4"</option>
					<option value="12" class="customsame" style="display:none;">11"</option>
					<option value="12" class="customsame" style="display:none;">11-1/4"</option>
					<option value="12" class="customsame" style="display:none;">11-1/2"</option>
					<option value="12" class="customsame" style="display:none;">11-3/4"</option>
					<option value="12" class="customsame" style="display:none;">12"</option>
					<option value="18" class="customsame" style="display:none;">12-1/4"</option>
					<option value="18" class="customsame" style="display:none;">12-1/2"</option>
					<option value="18" class="customsame" style="display:none;">12-3/4"</option>
					<option value="18" class="customsame" style="display:none;">13"</option>
					<option value="18" class="customsame" style="display:none;">13-1/4"</option>
					<option value="18" class="customsame" style="display:none;">13-1/2"</option>
					<option value="18" class="customsame" style="display:none;">13-3/4"</option>
					<option value="18" class="customsame" style="display:none;">14"</option>
					<option value="18" class="customsame" style="display:none;">14-1/4"</option>
					<option value="18" class="customsame" style="display:none;">14-1/2"</option>
					<option value="18" class="customsame" style="display:none;">14-3/4"</option>
					<option value="18" class="customsame" style="display:none;">15"</option>
					<option value="18" class="customsame" style="display:none;">15-1/4"</option>
					<option value="18" class="customsame" style="display:none;">15-1/2"</option>
					<option value="18" class="customsame" style="display:none;">15-3/4"</option>
					<option value="18" class="customsame" style="display:none;">16"</option>
					<option value="18" class="customsame" style="display:none;">16-1/4"</option>
					<option value="18" class="customsame" style="display:none;">16-1/2"</option>
					<option value="18" class="customsame" style="display:none;">16-3/4"</option>
					<option value="18" class="customsame" style="display:none;">17"</option>
					<option value="18" class="customsame" style="display:none;">17-1/4"</option>
					<option value="18" class="customsame" style="display:none;">17-1/2"</option>
					<option value="18" class="customsame" style="display:none;">17-3/4"</option>
					<option value="18" class="customsame" style="display:none;">18"</option>
					<option value="24" class="customsame" style="display:none;">18-1/4"</option>
					<option value="24" class="customsame" style="display:none;">18-1/2"</option>
					<option value="24" class="customsame" style="display:none;">18-3/4"</option>
					<option value="24" class="customsame" style="display:none;">19"</option>
					<option value="24" class="customsame" style="display:none;">19-1/4"</option>
					<option value="24" class="customsame" style="display:none;">19-1/2"</option>
					<option value="24" class="customsame" style="display:none;">19-3/4"</option>
					<option value="24" class="customsame" style="display:none;">20"</option>
					<option value="24" class="customsame" style="display:none;">20-1/4"</option>
					<option value="24" class="customsame" style="display:none;">20-1/2"</option>
					<option value="24" class="customsame" style="display:none;">20-3/4"</option>
					<option value="24" class="customsame" style="display:none;">21"</option>
					<option value="24" class="customsame" style="display:none;">21-1/4"</option>
					<option value="24" class="customsame" style="display:none;">21-1/2"</option>
					<option value="24" class="customsame" style="display:none;">21-3/4"</option>
					<option value="24" class="customsame" style="display:none;">22"</option>
					<option value="24" class="customsame" style="display:none;">22-1/4"</option>
					<option value="24" class="customsame" style="display:none;">22-1/2"</option>
					<option value="24" class="customsame" style="display:none;">22-3/4"</option>
					<option value="24" class="customsame" style="display:none;">23"</option>
					<option value="24" class="customsame" style="display:none;">23-1/4"</option>
					<option value="24" class="customsame" style="display:none;">23-1/2"</option>
					<option value="24" class="customsame" style="display:none;">23-3/4"</option>
					<option value="24" class="customsame" style="display:none;">24"</option>
					<option value="30" class="customsame" style="display:none;">24-1/4"</option>
					<option value="30" class="customsame" style="display:none;">24-1/2"</option>
					<option value="30" class="customsame" style="display:none;">24-3/4"</option>
					<option value="30" class="customsame" style="display:none;">25"</option>
					<option value="30" class="customsame" style="display:none;">25-1/4"</option>
					<option value="30" class="customsame" style="display:none;">25-1/2"</option>
					<option value="30" class="customsame" style="display:none;">25-3/4"</option>
					<option value="30" class="customsame" style="display:none;">26"</option>
					<option value="30" class="customsame" style="display:none;">26-1/4"</option>
					<option value="30" class="customsame" style="display:none;">26-1/2"</option>
					<option value="30" class="customsame" style="display:none;">26-3/4"</option>
					<option value="30" class="customsame" style="display:none;">27"</option>
					<option value="30" class="customsame" style="display:none;">27-1/4"</option>
					<option value="30" class="customsame" style="display:none;">27-1/2"</option>
					<option value="30" class="customsame" style="display:none;">27-3/4"</option>
					<option value="30" class="customsame" style="display:none;">28"</option>
					<option value="30" class="customsame" style="display:none;">28-1/4"</option>
					<option value="30" class="customsame" style="display:none;">28-1/2"</option>
					<option value="30" class="customsame" style="display:none;">28-3/4"</option>
					<option value="30" class="customsame" style="display:none;">29"</option>
					<option value="30" class="customsame" style="display:none;">29-1/4"</option>
					<option value="30" class="customsame" style="display:none;">29-1/2"</option>
					<option value="30" class="customsame" style="display:none;">29-3/4"</option>
					<option value="30" class="customsame" style="display:none;">30"</option>
					<option value="36" class="customsame" style="display:none;">30-1/4"</option>
					<option value="36" class="customsame" style="display:none;">30-1/2"</option>
					<option value="36" class="customsame" style="display:none;">30-3/4"</option>
					<option value="36" class="customsame" style="display:none;">31"</option>
					<option value="36" class="customsame" style="display:none;">31-1/4"</option>
					<option value="36" class="customsame" style="display:none;">31-1/2"</option>
					<option value="36" class="customsame" style="display:none;">31-3/4"</option>
					<option value="36" class="customsame" style="display:none;">32"</option>
					<option value="36" class="customsame" style="display:none;">32-1/4"</option>
					<option value="36" class="customsame" style="display:none;">32-1/2"</option>
					<option value="36" class="customsame" style="display:none;">32-3/4"</option>
					<option value="36" class="customsame" style="display:none;">33"</option>
					<option value="36" class="customsame" style="display:none;">33-1/4"</option>
					<option value="36" class="customsame" style="display:none;">33-1/2"</option>
					<option value="36" class="customsame" style="display:none;">33-3/4"</option>
					<option value="36" class="customsame" style="display:none;">34"</option>
					<option value="36" class="customsame" style="display:none;">34-1/4"</option>
					<option value="36" class="customsame" style="display:none;">34-1/2"</option>
					<option value="36" class="customsame" style="display:none;">34-3/4"</option>
					<option value="36" class="customsame" style="display:none;">35"</option>
					<option value="36" class="customsame" style="display:none;">35-1/4"</option>
					<option value="36" class="customsame" style="display:none;">35-1/2"</option>
					<option value="36" class="customsame" style="display:none;">35-3/4"</option>
					<option value="36" class="customsame" style="display:none;">36"</option>
					<option value="42" class="customsame" style="display:none;">36-1/4"</option>
					<option value="42" class="customsame" style="display:none;">36-1/2"</option>
					<option value="42" class="customsame" style="display:none;">36-3/4"</option>
					<option value="42" class="customsame" style="display:none;">37"</option>
					<option value="42" class="customsame" style="display:none;">37-1/4"</option>
					<option value="42" class="customsame" style="display:none;">37-1/2"</option>
					<option value="42" class="customsame" style="display:none;">37-3/4"</option>
					<option value="42" class="customsame" style="display:none;">38"</option>
					<option value="42" class="customsame" style="display:none;">38-1/4"</option>
					<option value="42" class="customsame" style="display:none;">38-1/2"</option>
					<option value="42" class="customsame" style="display:none;">38-3/4"</option>
					<option value="42" class="customsame" style="display:none;">39"</option>
					<option value="42" class="customsame" style="display:none;">39-1/4"</option>
					<option value="42" class="customsame" style="display:none;">39-1/2"</option>
					<option value="42" class="customsame" style="display:none;">39-3/4"</option>
					<option value="42" class="customsame" style="display:none;">40"</option>
					<option value="42" class="customsame" style="display:none;">40-1/4"</option>
					<option value="42" class="customsame" style="display:none;">40-1/2"</option>
					<option value="42" class="customsame" style="display:none;">40-3/4"</option>
					<option value="42" class="customsame" style="display:none;">41"</option>
					<option value="42" class="customsame" style="display:none;">41-1/4"</option>
					<option value="42" class="customsame" style="display:none;">41-1/2"</option>
					<option value="42" class="customsame" style="display:none;">41-3/4"</option>
					<option value="42" class="customsame" style="display:none;">42"</option>
					<option value="48" class="customsame" style="color:red;display:none;">42-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">42-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">42-3/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">43"</option>
					<option value="48" class="customsame" style="color:red;display:none;">43-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">43-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">43-3/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">44"</option>
					<option value="48" class="customsame" style="color:red;display:none;">44-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">44-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">44-3/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">45"</option>
					<option value="48" class="customsame" style="color:red;display:none;">45-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">45-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">45-3/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">46"</option>
					<option value="48" class="customsame" style="color:red;display:none;">46-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">46-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">46-3/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">47"</option>
					<option value="48" class="customsame" style="color:red;display:none;">47-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">47-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">47-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">48"</option>
					<option value="54" class="customsame" style="color:red;display:none;">48-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">48-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">48-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">49"</option>
					<option value="54" class="customsame" style="color:red;display:none;">49-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">49-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">49-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">50"</option>
					<option value="54" class="customsame" style="color:red;display:none;">50-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">50-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">50-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">51"</option>
					<option value="54" class="customsame" style="color:red;display:none;">51-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">51-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">51-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">52"</option>
					<option value="54" class="customsame" style="color:red;display:none;">52-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">52-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">52-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">53"</option>
					<option value="54" class="customsame" style="color:red;display:none;">53-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">53-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">53-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">54"</option>
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
                <td class="test-lenght4baya"><a class="thickbox" href='images/EP5/4bay_faceA.jpg' ><h1>Face Length A</h1></a></td><td>
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
                <td class="test-lenght4bayb"><a class="thickbox" href='images/EP5/4bay_faceB.jpg' ><h1>Face Length B</h1></a></td><td>
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
                    
					<!--</select><select  id="show_select_faceb_fora" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);" style="display:none;">-->
					
					<option value="12" class="customsame" style="display:none;">8-1/4"</option>
					<option value="12" class="customsame" style="display:none;">8-1/2"</option>
					<option value="12" class="customsame" style="display:none;">8-3/4"</option>
					<option value="12" class="customsame" style="display:none;">9"</option>
					<option value="12" class="customsame" style="display:none;">9-1/4"</option>
					<option value="12" class="customsame" style="display:none;">9-1/2"</option>
					<option value="12" class="customsame" style="display:none;">9-3/4"</option>
					<option value="12" class="customsame" style="display:none;">10"</option>
					<option value="12" class="customsame" style="display:none;">10-1/4"</option>
					<option value="12" class="customsame" style="display:none;">10-1/2"</option>
					<option value="12" class="customsame" style="display:none;">10-3/4"</option>
					<option value="12" class="customsame" style="display:none;">11"</option>
					<option value="12" class="customsame" style="display:none;">11-1/4"</option>
					<option value="12" class="customsame" style="display:none;">11-1/2"</option>
					<option value="12" class="customsame" style="display:none;">11-3/4"</option>
					<option value="12" class="customsame" style="display:none;">12"</option>
					<option value="18" class="customsame" style="display:none;">12-1/4"</option>
					<option value="18" class="customsame" style="display:none;">12-1/2"</option>
					<option value="18" class="customsame" style="display:none;">12-3/4"</option>
					<option value="18" class="customsame" style="display:none;">13"</option>
					<option value="18" class="customsame" style="display:none;">13-1/4"</option>
					<option value="18" class="customsame" style="display:none;">13-1/2"</option>
					<option value="18" class="customsame" style="display:none;">13-3/4"</option>
					<option value="18" class="customsame" style="display:none;">14"</option>
					<option value="18" class="customsame" style="display:none;">14-1/4"</option>
					<option value="18" class="customsame" style="display:none;">14-1/2"</option>
					<option value="18" class="customsame" style="display:none;">14-3/4"</option>
					<option value="18" class="customsame" style="display:none;">15"</option>
					<option value="18" class="customsame" style="display:none;">15-1/4"</option>
					<option value="18" class="customsame" style="display:none;">15-1/2"</option>
					<option value="18" class="customsame" style="display:none;">15-3/4"</option>
					<option value="18" class="customsame" style="display:none;">16"</option>
					<option value="18" class="customsame" style="display:none;">16-1/4"</option>
					<option value="18" class="customsame" style="display:none;">16-1/2"</option>
					<option value="18" class="customsame" style="display:none;">16-3/4"</option>
					<option value="18" class="customsame" style="display:none;">17"</option>
					<option value="18" class="customsame" style="display:none;">17-1/4"</option>
					<option value="18" class="customsame" style="display:none;">17-1/2"</option>
					<option value="18" class="customsame" style="display:none;">17-3/4"</option>
					<option value="18" class="customsame" style="display:none;">18"</option>
					<option value="24" class="customsame" style="display:none;">18-1/4"</option>
					<option value="24" class="customsame" style="display:none;">18-1/2"</option>
					<option value="24" class="customsame" style="display:none;">18-3/4"</option>
					<option value="24" class="customsame" style="display:none;">19"</option>
					<option value="24" class="customsame" style="display:none;">19-1/4"</option>
					<option value="24" class="customsame" style="display:none;">19-1/2"</option>
					<option value="24" class="customsame" style="display:none;">19-3/4"</option>
					<option value="24" class="customsame" style="display:none;">20"</option>
					<option value="24" class="customsame" style="display:none;">20-1/4"</option>
					<option value="24" class="customsame" style="display:none;">20-1/2"</option>
					<option value="24" class="customsame" style="display:none;">20-3/4"</option>
					<option value="24" class="customsame" style="display:none;">21"</option>
					<option value="24" class="customsame" style="display:none;">21-1/4"</option>
					<option value="24" class="customsame" style="display:none;">21-1/2"</option>
					<option value="24" class="customsame" style="display:none;">21-3/4"</option>
					<option value="24" class="customsame" style="display:none;">22"</option>
					<option value="24" class="customsame" style="display:none;">22-1/4"</option>
					<option value="24" class="customsame" style="display:none;">22-1/2"</option>
					<option value="24" class="customsame" style="display:none;">22-3/4"</option>
					<option value="24" class="customsame" style="display:none;">23"</option>
					<option value="24" class="customsame" style="display:none;">23-1/4"</option>
					<option value="24" class="customsame" style="display:none;">23-1/2"</option>
					<option value="24" class="customsame" style="display:none;">23-3/4"</option>
					<option value="24" class="customsame" style="display:none;">24"</option>
					<option value="30" class="customsame" style="display:none;">24-1/4"</option>
					<option value="30" class="customsame" style="display:none;">24-1/2"</option>
					<option value="30" class="customsame" style="display:none;">24-3/4"</option>
					<option value="30" class="customsame" style="display:none;">25"</option>
					<option value="30" class="customsame" style="display:none;">25-1/4"</option>
					<option value="30" class="customsame" style="display:none;">25-1/2"</option>
					<option value="30" class="customsame" style="display:none;">25-3/4"</option>
					<option value="30" class="customsame" style="display:none;">26"</option>
					<option value="30" class="customsame" style="display:none;">26-1/4"</option>
					<option value="30" class="customsame" style="display:none;">26-1/2"</option>
					<option value="30" class="customsame" style="display:none;">26-3/4"</option>
					<option value="30" class="customsame" style="display:none;">27"</option>
					<option value="30" class="customsame" style="display:none;">27-1/4"</option>
					<option value="30" class="customsame" style="display:none;">27-1/2"</option>
					<option value="30" class="customsame" style="display:none;">27-3/4"</option>
					<option value="30" class="customsame" style="display:none;">28"</option>
					<option value="30" class="customsame" style="display:none;">28-1/4"</option>
					<option value="30" class="customsame" style="display:none;">28-1/2"</option>
					<option value="30" class="customsame" style="display:none;">28-3/4"</option>
					<option value="30" class="customsame" style="display:none;">29"</option>
					<option value="30" class="customsame" style="display:none;">29-1/4"</option>
					<option value="30" class="customsame" style="display:none;">29-1/2"</option>
					<option value="30" class="customsame" style="display:none;">29-3/4"</option>
					<option value="30" class="customsame" style="display:none;">30"</option>
					<option value="36" class="customsame" style="display:none;">30-1/4"</option>
					<option value="36" class="customsame" style="display:none;">30-1/2"</option>
					<option value="36" class="customsame" style="display:none;">30-3/4"</option>
					<option value="36" class="customsame" style="display:none;">31"</option>
					<option value="36" class="customsame" style="display:none;">31-1/4"</option>
					<option value="36" class="customsame" style="display:none;">31-1/2"</option>
					<option value="36" class="customsame" style="display:none;">31-3/4"</option>
					<option value="36" class="customsame" style="display:none;">32"</option>
					<option value="36" class="customsame" style="display:none;">32-1/4"</option>
					<option value="36" class="customsame" style="display:none;">32-1/2"</option>
					<option value="36" class="customsame" style="display:none;">32-3/4"</option>
					<option value="36" class="customsame" style="display:none;">33"</option>
					<option value="36" class="customsame" style="display:none;">33-1/4"</option>
					<option value="36" class="customsame" style="display:none;">33-1/2"</option>
					<option value="36" class="customsame" style="display:none;">33-3/4"</option>
					<option value="36" class="customsame" style="display:none;">34"</option>
					<option value="36" class="customsame" style="display:none;">34-1/4"</option>
					<option value="36" class="customsame" style="display:none;">34-1/2"</option>
					<option value="36" class="customsame" style="display:none;">34-3/4"</option>
					<option value="36" class="customsame" style="display:none;">35"</option>
					<option value="36" class="customsame" style="display:none;">35-1/4"</option>
					<option value="36" class="customsame" style="display:none;">35-1/2"</option>
					<option value="36" class="customsame" style="display:none;">35-3/4"</option>
					<option value="36" class="customsame" style="display:none;">36"</option>
					<option value="42" class="customsame" style="display:none;">36-1/4"</option>
					<option value="42" class="customsame" style="display:none;">36-1/2"</option>
					<option value="42" class="customsame" style="display:none;">36-3/4"</option>
					<option value="42" class="customsame" style="display:none;">37"</option>
					<option value="42" class="customsame" style="display:none;">37-1/4"</option>
					<option value="42" class="customsame" style="display:none;">37-1/2"</option>
					<option value="42" class="customsame" style="display:none;">37-3/4"</option>
					<option value="42" class="customsame" style="display:none;">38"</option>
					<option value="42" class="customsame" style="display:none;">38-1/4"</option>
					<option value="42" class="customsame" style="display:none;">38-1/2"</option>
					<option value="42" class="customsame" style="display:none;">38-3/4"</option>
					<option value="42" class="customsame" style="display:none;">39"</option>
					<option value="42" class="customsame" style="display:none;">39-1/4"</option>
					<option value="42" class="customsame" style="display:none;">39-1/2"</option>
					<option value="42" class="customsame" style="display:none;">39-3/4"</option>
					<option value="42" class="customsame" style="display:none;">40"</option>
					<option value="42" class="customsame" style="display:none;">40-1/4"</option>
					<option value="42" class="customsame" style="display:none;">40-1/2"</option>
					<option value="42" class="customsame" style="display:none;">40-3/4"</option>
					<option value="42" class="customsame" style="display:none;">41"</option>
					<option value="42" class="customsame" style="display:none;">41-1/4"</option>
					<option value="42" class="customsame" style="display:none;">41-1/2"</option>
					<option value="42" class="customsame" style="display:none;">41-3/4"</option>
					<option value="42" class="customsame" style="display:none;">42"</option>
					<option value="48" class="customsame" style="color:red;display:none;">42-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">42-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">42-3/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">43"</option>
					<option value="48" class="customsame" style="color:red;display:none;">43-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">43-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">43-3/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">44"</option>
					<option value="48" class="customsame" style="color:red;display:none;">44-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">44-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">44-3/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">45"</option>
					<option value="48" class="customsame" style="color:red;display:none;">45-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">45-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">45-3/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">46"</option>
					<option value="48" class="customsame" style="color:red;display:none;">46-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">46-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">46-3/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">47"</option>
					<option value="48" class="customsame" style="color:red;display:none;">47-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">47-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">47-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">48"</option>
					<option value="54" class="customsame" style="color:red;display:none;">48-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">48-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">48-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">49"</option>
					<option value="54" class="customsame" style="color:red;display:none;">49-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">49-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">49-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">50"</option>
					<option value="54" class="customsame" style="color:red;display:none;">50-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">50-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">50-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">51"</option>
					<option value="54" class="customsame" style="color:red;display:none;">51-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">51-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">51-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">52"</option>
					<option value="54" class="customsame" style="color:red;display:none;">52-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">52-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">52-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">53"</option>
					<option value="54" class="customsame" style="color:red;display:none;">53-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">53-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">53-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">54"</option>
					<option value="No Glass" class="customsame" style="display:none;">No Glass</option>
                    </select>
					</span></td><td>
					   <span id="errormsgfirstname">
                            <img id="glass_b_err" src="img/iconCheckOff.gif">
                        </span>
                </td>
            </tr>
            <tr class="test-length">
                <td class="test-lenght4bayc"><a class="thickbox" href='images/EP5/4bay_faceC.jpg' ><h1>Face Length C</h1></a></td><td>
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
                    
					<!--</select><select  id="show_select_faceb_fora" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);" style="display:none;">-->
					
					<option value="12" class="customsame" style="display:none;">8-1/4"</option>
					<option value="12" class="customsame" style="display:none;">8-1/2"</option>
					<option value="12" class="customsame" style="display:none;">8-3/4"</option>
					<option value="12" class="customsame" style="display:none;">9"</option>
					<option value="12" class="customsame" style="display:none;">9-1/4"</option>
					<option value="12" class="customsame" style="display:none;">9-1/2"</option>
					<option value="12" class="customsame" style="display:none;">9-3/4"</option>
					<option value="12" class="customsame" style="display:none;">10"</option>
					<option value="12" class="customsame" style="display:none;">10-1/4"</option>
					<option value="12" class="customsame" style="display:none;">10-1/2"</option>
					<option value="12" class="customsame" style="display:none;">10-3/4"</option>
					<option value="12" class="customsame" style="display:none;">11"</option>
					<option value="12" class="customsame" style="display:none;">11-1/4"</option>
					<option value="12" class="customsame" style="display:none;">11-1/2"</option>
					<option value="12" class="customsame" style="display:none;">11-3/4"</option>
					<option value="12" class="customsame" style="display:none;">12"</option>
					<option value="18" class="customsame" style="display:none;">12-1/4"</option>
					<option value="18" class="customsame" style="display:none;">12-1/2"</option>
					<option value="18" class="customsame" style="display:none;">12-3/4"</option>
					<option value="18" class="customsame" style="display:none;">13"</option>
					<option value="18" class="customsame" style="display:none;">13-1/4"</option>
					<option value="18" class="customsame" style="display:none;">13-1/2"</option>
					<option value="18" class="customsame" style="display:none;">13-3/4"</option>
					<option value="18" class="customsame" style="display:none;">14"</option>
					<option value="18" class="customsame" style="display:none;">14-1/4"</option>
					<option value="18" class="customsame" style="display:none;">14-1/2"</option>
					<option value="18" class="customsame" style="display:none;">14-3/4"</option>
					<option value="18" class="customsame" style="display:none;">15"</option>
					<option value="18" class="customsame" style="display:none;">15-1/4"</option>
					<option value="18" class="customsame" style="display:none;">15-1/2"</option>
					<option value="18" class="customsame" style="display:none;">15-3/4"</option>
					<option value="18" class="customsame" style="display:none;">16"</option>
					<option value="18" class="customsame" style="display:none;">16-1/4"</option>
					<option value="18" class="customsame" style="display:none;">16-1/2"</option>
					<option value="18" class="customsame" style="display:none;">16-3/4"</option>
					<option value="18" class="customsame" style="display:none;">17"</option>
					<option value="18" class="customsame" style="display:none;">17-1/4"</option>
					<option value="18" class="customsame" style="display:none;">17-1/2"</option>
					<option value="18" class="customsame" style="display:none;">17-3/4"</option>
					<option value="18" class="customsame" style="display:none;">18"</option>
					<option value="24" class="customsame" style="display:none;">18-1/4"</option>
					<option value="24" class="customsame" style="display:none;">18-1/2"</option>
					<option value="24" class="customsame" style="display:none;">18-3/4"</option>
					<option value="24" class="customsame" style="display:none;">19"</option>
					<option value="24" class="customsame" style="display:none;">19-1/4"</option>
					<option value="24" class="customsame" style="display:none;">19-1/2"</option>
					<option value="24" class="customsame" style="display:none;">19-3/4"</option>
					<option value="24" class="customsame" style="display:none;">20"</option>
					<option value="24" class="customsame" style="display:none;">20-1/4"</option>
					<option value="24" class="customsame" style="display:none;">20-1/2"</option>
					<option value="24" class="customsame" style="display:none;">20-3/4"</option>
					<option value="24" class="customsame" style="display:none;">21"</option>
					<option value="24" class="customsame" style="display:none;">21-1/4"</option>
					<option value="24" class="customsame" style="display:none;">21-1/2"</option>
					<option value="24" class="customsame" style="display:none;">21-3/4"</option>
					<option value="24" class="customsame" style="display:none;">22"</option>
					<option value="24" class="customsame" style="display:none;">22-1/4"</option>
					<option value="24" class="customsame" style="display:none;">22-1/2"</option>
					<option value="24" class="customsame" style="display:none;">22-3/4"</option>
					<option value="24" class="customsame" style="display:none;">23"</option>
					<option value="24" class="customsame" style="display:none;">23-1/4"</option>
					<option value="24" class="customsame" style="display:none;">23-1/2"</option>
					<option value="24" class="customsame" style="display:none;">23-3/4"</option>
					<option value="24" class="customsame" style="display:none;">24"</option>
					<option value="30" class="customsame" style="display:none;">24-1/4"</option>
					<option value="30" class="customsame" style="display:none;">24-1/2"</option>
					<option value="30" class="customsame" style="display:none;">24-3/4"</option>
					<option value="30" class="customsame" style="display:none;">25"</option>
					<option value="30" class="customsame" style="display:none;">25-1/4"</option>
					<option value="30" class="customsame" style="display:none;">25-1/2"</option>
					<option value="30" class="customsame" style="display:none;">25-3/4"</option>
					<option value="30" class="customsame" style="display:none;">26"</option>
					<option value="30" class="customsame" style="display:none;">26-1/4"</option>
					<option value="30" class="customsame" style="display:none;">26-1/2"</option>
					<option value="30" class="customsame" style="display:none;">26-3/4"</option>
					<option value="30" class="customsame" style="display:none;">27"</option>
					<option value="30" class="customsame" style="display:none;">27-1/4"</option>
					<option value="30" class="customsame" style="display:none;">27-1/2"</option>
					<option value="30" class="customsame" style="display:none;">27-3/4"</option>
					<option value="30" class="customsame" style="display:none;">28"</option>
					<option value="30" class="customsame" style="display:none;">28-1/4"</option>
					<option value="30" class="customsame" style="display:none;">28-1/2"</option>
					<option value="30" class="customsame" style="display:none;">28-3/4"</option>
					<option value="30" class="customsame" style="display:none;">29"</option>
					<option value="30" class="customsame" style="display:none;">29-1/4"</option>
					<option value="30" class="customsame" style="display:none;">29-1/2"</option>
					<option value="30" class="customsame" style="display:none;">29-3/4"</option>
					<option value="30" class="customsame" style="display:none;">30"</option>
					<option value="36" class="customsame" style="display:none;">30-1/4"</option>
					<option value="36" class="customsame" style="display:none;">30-1/2"</option>
					<option value="36" class="customsame" style="display:none;">30-3/4"</option>
					<option value="36" class="customsame" style="display:none;">31"</option>
					<option value="36" class="customsame" style="display:none;">31-1/4"</option>
					<option value="36" class="customsame" style="display:none;">31-1/2"</option>
					<option value="36" class="customsame" style="display:none;">31-3/4"</option>
					<option value="36" class="customsame" style="display:none;">32"</option>
					<option value="36" class="customsame" style="display:none;">32-1/4"</option>
					<option value="36" class="customsame" style="display:none;">32-1/2"</option>
					<option value="36" class="customsame" style="display:none;">32-3/4"</option>
					<option value="36" class="customsame" style="display:none;">33"</option>
					<option value="36" class="customsame" style="display:none;">33-1/4"</option>
					<option value="36" class="customsame" style="display:none;">33-1/2"</option>
					<option value="36" class="customsame" style="display:none;">33-3/4"</option>
					<option value="36" class="customsame" style="display:none;">34"</option>
					<option value="36" class="customsame" style="display:none;">34-1/4"</option>
					<option value="36" class="customsame" style="display:none;">34-1/2"</option>
					<option value="36" class="customsame" style="display:none;">34-3/4"</option>
					<option value="36" class="customsame" style="display:none;">35"</option>
					<option value="36" class="customsame" style="display:none;">35-1/4"</option>
					<option value="36" class="customsame" style="display:none;">35-1/2"</option>
					<option value="36" class="customsame" style="display:none;">35-3/4"</option>
					<option value="36" class="customsame" style="display:none;">36"</option>
					<option value="42" class="customsame" style="display:none;">36-1/4"</option>
					<option value="42" class="customsame" style="display:none;">36-1/2"</option>
					<option value="42" class="customsame" style="display:none;">36-3/4"</option>
					<option value="42" class="customsame" style="display:none;">37"</option>
					<option value="42" class="customsame" style="display:none;">37-1/4"</option>
					<option value="42" class="customsame" style="display:none;">37-1/2"</option>
					<option value="42" class="customsame" style="display:none;">37-3/4"</option>
					<option value="42" class="customsame" style="display:none;">38"</option>
					<option value="42" class="customsame" style="display:none;">38-1/4"</option>
					<option value="42" class="customsame" style="display:none;">38-1/2"</option>
					<option value="42" class="customsame" style="display:none;">38-3/4"</option>
					<option value="42" class="customsame" style="display:none;">39"</option>
					<option value="42" class="customsame" style="display:none;">39-1/4"</option>
					<option value="42" class="customsame" style="display:none;">39-1/2"</option>
					<option value="42" class="customsame" style="display:none;">39-3/4"</option>
					<option value="42" class="customsame" style="display:none;">40"</option>
					<option value="42" class="customsame" style="display:none;">40-1/4"</option>
					<option value="42" class="customsame" style="display:none;">40-1/2"</option>
					<option value="42" class="customsame" style="display:none;">40-3/4"</option>
					<option value="42" class="customsame" style="display:none;">41"</option>
					<option value="42" class="customsame" style="display:none;">41-1/4"</option>
					<option value="42" class="customsame" style="display:none;">41-1/2"</option>
					<option value="42" class="customsame" style="display:none;">41-3/4"</option>
					<option value="42" class="customsame" style="display:none;">42"</option>
					<option value="48" class="customsame" style="color:red;display:none;">42-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">42-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">42-3/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">43"</option>
					<option value="48" class="customsame" style="color:red;display:none;">43-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">43-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">43-3/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">44"</option>
					<option value="48" class="customsame" style="color:red;display:none;">44-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">44-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">44-3/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">45"</option>
					<option value="48" class="customsame" style="color:red;display:none;">45-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">45-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">45-3/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">46"</option>
					<option value="48" class="customsame" style="color:red;display:none;">46-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">46-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">46-3/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">47"</option>
					<option value="48" class="customsame" style="color:red;display:none;">47-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">47-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">47-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">48"</option>
					<option value="54" class="customsame" style="color:red;display:none;">48-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">48-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">48-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">49"</option>
					<option value="54" class="customsame" style="color:red;display:none;">49-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">49-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">49-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">50"</option>
					<option value="54" class="customsame" style="color:red;display:none;">50-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">50-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">50-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">51"</option>
					<option value="54" class="customsame" style="color:red;display:none;">51-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">51-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">51-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">52"</option>
					<option value="54" class="customsame" style="color:red;display:none;">52-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">52-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">52-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">53"</option>
					<option value="54" class="customsame" style="color:red;display:none;">53-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">53-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">53-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">54"</option>
					<option value="No Glass" class="customsame" style="display:none;">No Glass</option>
                    </select>
					</span></td><td>
					   <span id="errormsgfirstname">
                            <img id="glass_c_err" src="img/iconCheckOff.gif">
                        </span>
                </td>
            </tr> 
			<tr class="test-length">
                <td class="test-lenght4bayd"><a class="thickbox" href='images/EP5/4bay_faceD.jpg'><h1>Face Length D</h1></a></td><td>
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
                    
					<!--</select><select  id="show_select_faceb_fora" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);" style="display:none;">-->
					
					<option value="12" class="customsame" style="display:none;">8-1/4"</option>
					<option value="12" class="customsame" style="display:none;">8-1/2"</option>
					<option value="12" class="customsame" style="display:none;">8-3/4"</option>
					<option value="12" class="customsame" style="display:none;">9"</option>
					<option value="12" class="customsame" style="display:none;">9-1/4"</option>
					<option value="12" class="customsame" style="display:none;">9-1/2"</option>
					<option value="12" class="customsame" style="display:none;">9-3/4"</option>
					<option value="12" class="customsame" style="display:none;">10"</option>
					<option value="12" class="customsame" style="display:none;">10-1/4"</option>
					<option value="12" class="customsame" style="display:none;">10-1/2"</option>
					<option value="12" class="customsame" style="display:none;">10-3/4"</option>
					<option value="12" class="customsame" style="display:none;">11"</option>
					<option value="12" class="customsame" style="display:none;">11-1/4"</option>
					<option value="12" class="customsame" style="display:none;">11-1/2"</option>
					<option value="12" class="customsame" style="display:none;">11-3/4"</option>
					<option value="12" class="customsame" style="display:none;">12"</option>
					<option value="18" class="customsame" style="display:none;">12-1/4"</option>
					<option value="18" class="customsame" style="display:none;">12-1/2"</option>
					<option value="18" class="customsame" style="display:none;">12-3/4"</option>
					<option value="18" class="customsame" style="display:none;">13"</option>
					<option value="18" class="customsame" style="display:none;">13-1/4"</option>
					<option value="18" class="customsame" style="display:none;">13-1/2"</option>
					<option value="18" class="customsame" style="display:none;">13-3/4"</option>
					<option value="18" class="customsame" style="display:none;">14"</option>
					<option value="18" class="customsame" style="display:none;">14-1/4"</option>
					<option value="18" class="customsame" style="display:none;">14-1/2"</option>
					<option value="18" class="customsame" style="display:none;">14-3/4"</option>
					<option value="18" class="customsame" style="display:none;">15"</option>
					<option value="18" class="customsame" style="display:none;">15-1/4"</option>
					<option value="18" class="customsame" style="display:none;">15-1/2"</option>
					<option value="18" class="customsame" style="display:none;">15-3/4"</option>
					<option value="18" class="customsame" style="display:none;">16"</option>
					<option value="18" class="customsame" style="display:none;">16-1/4"</option>
					<option value="18" class="customsame" style="display:none;">16-1/2"</option>
					<option value="18" class="customsame" style="display:none;">16-3/4"</option>
					<option value="18" class="customsame" style="display:none;">17"</option>
					<option value="18" class="customsame" style="display:none;">17-1/4"</option>
					<option value="18" class="customsame" style="display:none;">17-1/2"</option>
					<option value="18" class="customsame" style="display:none;">17-3/4"</option>
					<option value="18" class="customsame" style="display:none;">18"</option>
					<option value="24" class="customsame" style="display:none;">18-1/4"</option>
					<option value="24" class="customsame" style="display:none;">18-1/2"</option>
					<option value="24" class="customsame" style="display:none;">18-3/4"</option>
					<option value="24" class="customsame" style="display:none;">19"</option>
					<option value="24" class="customsame" style="display:none;">19-1/4"</option>
					<option value="24" class="customsame" style="display:none;">19-1/2"</option>
					<option value="24" class="customsame" style="display:none;">19-3/4"</option>
					<option value="24" class="customsame" style="display:none;">20"</option>
					<option value="24" class="customsame" style="display:none;">20-1/4"</option>
					<option value="24" class="customsame" style="display:none;">20-1/2"</option>
					<option value="24" class="customsame" style="display:none;">20-3/4"</option>
					<option value="24" class="customsame" style="display:none;">21"</option>
					<option value="24" class="customsame" style="display:none;">21-1/4"</option>
					<option value="24" class="customsame" style="display:none;">21-1/2"</option>
					<option value="24" class="customsame" style="display:none;">21-3/4"</option>
					<option value="24" class="customsame" style="display:none;">22"</option>
					<option value="24" class="customsame" style="display:none;">22-1/4"</option>
					<option value="24" class="customsame" style="display:none;">22-1/2"</option>
					<option value="24" class="customsame" style="display:none;">22-3/4"</option>
					<option value="24" class="customsame" style="display:none;">23"</option>
					<option value="24" class="customsame" style="display:none;">23-1/4"</option>
					<option value="24" class="customsame" style="display:none;">23-1/2"</option>
					<option value="24" class="customsame" style="display:none;">23-3/4"</option>
					<option value="24" class="customsame" style="display:none;">24"</option>
					<option value="30" class="customsame" style="display:none;">24-1/4"</option>
					<option value="30" class="customsame" style="display:none;">24-1/2"</option>
					<option value="30" class="customsame" style="display:none;">24-3/4"</option>
					<option value="30" class="customsame" style="display:none;">25"</option>
					<option value="30" class="customsame" style="display:none;">25-1/4"</option>
					<option value="30" class="customsame" style="display:none;">25-1/2"</option>
					<option value="30" class="customsame" style="display:none;">25-3/4"</option>
					<option value="30" class="customsame" style="display:none;">26"</option>
					<option value="30" class="customsame" style="display:none;">26-1/4"</option>
					<option value="30" class="customsame" style="display:none;">26-1/2"</option>
					<option value="30" class="customsame" style="display:none;">26-3/4"</option>
					<option value="30" class="customsame" style="display:none;">27"</option>
					<option value="30" class="customsame" style="display:none;">27-1/4"</option>
					<option value="30" class="customsame" style="display:none;">27-1/2"</option>
					<option value="30" class="customsame" style="display:none;">27-3/4"</option>
					<option value="30" class="customsame" style="display:none;">28"</option>
					<option value="30" class="customsame" style="display:none;">28-1/4"</option>
					<option value="30" class="customsame" style="display:none;">28-1/2"</option>
					<option value="30" class="customsame" style="display:none;">28-3/4"</option>
					<option value="30" class="customsame" style="display:none;">29"</option>
					<option value="30" class="customsame" style="display:none;">29-1/4"</option>
					<option value="30" class="customsame" style="display:none;">29-1/2"</option>
					<option value="30" class="customsame" style="display:none;">29-3/4"</option>
					<option value="30" class="customsame" style="display:none;">30"</option>
					<option value="36" class="customsame" style="display:none;">30-1/4"</option>
					<option value="36" class="customsame" style="display:none;">30-1/2"</option>
					<option value="36" class="customsame" style="display:none;">30-3/4"</option>
					<option value="36" class="customsame" style="display:none;">31"</option>
					<option value="36" class="customsame" style="display:none;">31-1/4"</option>
					<option value="36" class="customsame" style="display:none;">31-1/2"</option>
					<option value="36" class="customsame" style="display:none;">31-3/4"</option>
					<option value="36" class="customsame" style="display:none;">32"</option>
					<option value="36" class="customsame" style="display:none;">32-1/4"</option>
					<option value="36" class="customsame" style="display:none;">32-1/2"</option>
					<option value="36" class="customsame" style="display:none;">32-3/4"</option>
					<option value="36" class="customsame" style="display:none;">33"</option>
					<option value="36" class="customsame" style="display:none;">33-1/4"</option>
					<option value="36" class="customsame" style="display:none;">33-1/2"</option>
					<option value="36" class="customsame" style="display:none;">33-3/4"</option>
					<option value="36" class="customsame" style="display:none;">34"</option>
					<option value="36" class="customsame" style="display:none;">34-1/4"</option>
					<option value="36" class="customsame" style="display:none;">34-1/2"</option>
					<option value="36" class="customsame" style="display:none;">34-3/4"</option>
					<option value="36" class="customsame" style="display:none;">35"</option>
					<option value="36" class="customsame" style="display:none;">35-1/4"</option>
					<option value="36" class="customsame" style="display:none;">35-1/2"</option>
					<option value="36" class="customsame" style="display:none;">35-3/4"</option>
					<option value="36" class="customsame" style="display:none;">36"</option>
					<option value="42" class="customsame" style="display:none;">36-1/4"</option>
					<option value="42" class="customsame" style="display:none;">36-1/2"</option>
					<option value="42" class="customsame" style="display:none;">36-3/4"</option>
					<option value="42" class="customsame" style="display:none;">37"</option>
					<option value="42" class="customsame" style="display:none;">37-1/4"</option>
					<option value="42" class="customsame" style="display:none;">37-1/2"</option>
					<option value="42" class="customsame" style="display:none;">37-3/4"</option>
					<option value="42" class="customsame" style="display:none;">38"</option>
					<option value="42" class="customsame" style="display:none;">38-1/4"</option>
					<option value="42" class="customsame" style="display:none;">38-1/2"</option>
					<option value="42" class="customsame" style="display:none;">38-3/4"</option>
					<option value="42" class="customsame" style="display:none;">39"</option>
					<option value="42" class="customsame" style="display:none;">39-1/4"</option>
					<option value="42" class="customsame" style="display:none;">39-1/2"</option>
					<option value="42" class="customsame" style="display:none;">39-3/4"</option>
					<option value="42" class="customsame" style="display:none;">40"</option>
					<option value="42" class="customsame" style="display:none;">40-1/4"</option>
					<option value="42" class="customsame" style="display:none;">40-1/2"</option>
					<option value="42" class="customsame" style="display:none;">40-3/4"</option>
					<option value="42" class="customsame" style="display:none;">41"</option>
					<option value="42" class="customsame" style="display:none;">41-1/4"</option>
					<option value="42" class="customsame" style="display:none;">41-1/2"</option>
					<option value="42" class="customsame" style="display:none;">41-3/4"</option>
					<option value="42" class="customsame" style="display:none;">42"</option>
					<option value="48" class="customsame" style="color:red;display:none;">42-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">42-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">42-3/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">43"</option>
					<option value="48" class="customsame" style="color:red;display:none;">43-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">43-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">43-3/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">44"</option>
					<option value="48" class="customsame" style="color:red;display:none;">44-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">44-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">44-3/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">45"</option>
					<option value="48" class="customsame" style="color:red;display:none;">45-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">45-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">45-3/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">46"</option>
					<option value="48" class="customsame" style="color:red;display:none;">46-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">46-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">46-3/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">47"</option>
					<option value="48" class="customsame" style="color:red;display:none;">47-1/4"</option>
					<option value="48" class="customsame" style="color:red;display:none;">47-1/2"</option>
					<option value="48" class="customsame" style="color:red;display:none;">47-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">48"</option>
					<option value="54" class="customsame" style="color:red;display:none;">48-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">48-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">48-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">49"</option>
					<option value="54" class="customsame" style="color:red;display:none;">49-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">49-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">49-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">50"</option>
					<option value="54" class="customsame" style="color:red;display:none;">50-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">50-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">50-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">51"</option>
					<option value="54" class="customsame" style="color:red;display:none;">51-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">51-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">51-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">52"</option>
					<option value="54" class="customsame" style="color:red;display:none;">52-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">52-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">52-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">53"</option>
					<option value="54" class="customsame" style="color:red;display:none;">53-1/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">53-1/2"</option>
					<option value="54" class="customsame" style="color:red;display:none;">53-3/4"</option>
					<option value="54" class="customsame" style="color:red;display:none;">54"</option>
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
			<td><a class="thickbox" href="images/EP5/End_panels.jpg"><h1>End Panels</h1></a></td>
			<td>
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
                                        <td><a class="thickbox" href='images/EP5/Right_length.jpg' ><h1 style="margin-left:20px;">Right Length</h1></a></td><td>
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
                                        <td><center><a class="thickbox" href='images/EP5/Left_length.jpg' ><h1 style="margin-left:20px;">Left Length</h1></a></center></td><td>
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

                <td class="test-flang"><a class="thickbox" href='flang_newd.php?type=adj&KeepThis=true&TB_iframe=true&height=480&width=640'><h1>Flange Covers</h1></a></td>
                <td>
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
                        <td class="test-flang"><a class="thickbox" href='flang_under_counter.php?type=adj&KeepThis=true&TB_iframe=true&height=480&width=640'><h1>Flange Under Counter</h1></a></td>
                        <td>
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
                <td><a class="thickbox" style="text-color:#c7f900 !important" href=<?php echo '"images/'.$category_name.'/RADIUS.jpg"';?>><h1 >Glass Corners</h1></a></td>
                <td>
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
                <td class="test-light"><a class="thickbox" href="light_newd.php?name=EP5&KeepThis=true&TB_iframe=true&height=480&width=640"><h1>Light Bar</h1></a></td>
                <td>
                    <select name="light_bar" tabindex="11" id="checkbox2" value="0" style="margin:4px; float: right;" align="right" onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);"/>
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
				<td><a class="thickbox" href='images/Finishes.jpg'><h1>Post Finish</h1></a>
				</td>
				<td>
                    <select name="choose_finish" tabindex="12" style="width:135px;margin:0" onchange="getPriceOfProduct(this.form)" >
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
                <td colspan=2><center><h2 class="heading_all"><span style="float:left">&nbsp;&nbsp3)</span>Extras</h2></center></td>
            </tr>
            <tr id="adjbrackedt">
                <td><a class="thickbox" href="demo3_newd.php?name=18&KeepThis=true&TB_iframe=true&height=480&width=640"><h1>Adjustable Brackets</h1></a></td>
                <td>
                    <select class="makeadjustablecheck31" tabindex="13" name="adjustable" style="margin:4px ; float: right;width:70px;" align="right" onchange="makeAdjustable(this.form);getPriceOfProduct(this.form);"/>
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>
                </td>    
            </tr>
            <tr id="froast">
                <td class="test-roasted"><a class="thickbox" href='http://www.sneezeguard.com/images/EP-51BAY/RADIUS1.jpg'><h1>Frosted Glass</h1></a></td>
				<td>  
                    <select name="roasted_glass"  value="0" tabindex="14" style="margin:4px; float: right;width:70px;" align="right;" onchange="getPriceOfProduct(this.form);show_pop(this.form);" />
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>    
                </td>
            </tr>
			
			 
			  <tr id="froast">
                <td class="test-roasted"><a class="thickbox" href='http://www.sneezeguard.com/images/EP5/type_of_arc.jpg'><h1>Arc Glass</h1></a></td>
				<td>  
                    <select name="arc_glass" id="arc_glass_status"  value="0" tabindex="14" style="margin:4px; float: right;width:70px;" align="right;" onchange="getPriceOfProduct(this.form);show_pop_arc_glass(this.form);" />
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>    
                </td>
            </tr>
			
			  <tr id="arc_glass_type" style="display:none;">
                <td class="test-roasted"><a class="thickbox" href='http://www.sneezeguard.com/images/EP5/type_of_arc.jpg'><h1>Arc Glass Type</h1></a></td>
				<td style="text-align:right;">  
                    <select name="arc_glass_type_value" id="arc_glass_type_value"   value="0" tabindex="14" style="margin:4px; float: right;width:70px;" align="right;" onchange="getPriceOfProduct(this.form);" />
                        <option value="FA" selected>Full Arc</option>
                        <option value="CA">Curved Arc</option>
                        <option value="RD">Random Arc</option>
                    </select>    
                </td>
            </tr>
			
			<tr id="endpanel_arc_glass" style="display:none;">
                <td class="test-roasted"><a class="thickbox" href='http://www.sneezeguard.com/images/EP5/with_and_without_end_panel.jpg'><h1>End Panel Arc Glass</h1></a></td>
				<td style="text-align:right;">  
                    <select name="endpanel_arc_glass_value" id="endpanel_arc_glass_value"  value="0" tabindex="14" style="margin:4px; float: right;width:70px;" align="right;" onchange="getPriceOfProduct(this.form);" />
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>    
                </td>
            </tr>
			
			  <tr id="arc_adius" style="display:none;">
                <td class="test-roasted"><a class="thickbox" href='http://www.sneezeguard.com/images/EP5/radius_of_arc.jpg'><h1>Arc Radius</h1></a></td>
				<td style="text-align:right;">  
                    <select name="arc_glass_value" id="arc_glass_value"  value="0" tabindex="14" style="margin:4px; float: right;width:70px;" align="right;" onchange="getPriceOfProduct(this.form);" />
                        <option value="2">2"</option>
                        <option value="4" selected>4"</option>
                        <option value="6">6"</option>
                    </select>    
                </td>
            </tr>
			
			
			
			
			<?php 
			
			//Mailbox Cutout
//mailbox_cut_status
//mailbox_cut
			?>
				 
			  <tr id="froast">
                <td class="test-roasted"><a class="thickbox" href='images/EP5/ep5-mailbox-cutout.jpg'><h1>Mailbox Cutout</h1></a></td>
				<td>  
                    <select name="mailbox_cut" id="mailbox_cut_status"  value="0" tabindex="14" style="margin:4px; float: right;width:70px;" align="right;" onchange="getPriceOfProduct(this.form);show_pop_mailbox_cut(this.form);" />
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>    
                </td>
            </tr>
			
			<?php
			if($_REQUEST['type']=='1BAY' ||$_REQUEST['type']=='2BAY' || $_REQUEST['type']=='3BAY'  ||$_REQUEST['type']=='4BAY'){
			
			?>
				 
			  <tr id="mailbox_cutout_a" style="display:none;">
                <td class="test-roasted"><a class="thickbox" href='images/EP5/ep5-mailbox-cutout.jpg'><h1>Cutout Face A</h1></a></td>
				<td>  
                    <select name="cutout_face_a" id="cutout_facea_status"  value="0" tabindex="14" style="margin:4px; float: right;width:70px;" align="right;" onchange="getPriceOfProduct(this.form);" />
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>    
                </td>
            </tr>
			<?php
			}
			
			if($_REQUEST['type']=='2BAY' || $_REQUEST['type']=='3BAY'  ||$_REQUEST['type']=='4BAY'){
			?>
				 
			  <tr id="mailbox_cutout_b" style="display:none;">
                <td class="test-roasted"><a class="thickbox" href='images/EP5/ep5-mailbox-cutout.jpg'><h1>Cutout Face B</h1></a></td>
				<td>  
                    <select name="cutout_face_b" id="cutout_faceb_status"  value="0" tabindex="14" style="margin:4px; float: right;width:70px;" align="right;" onchange="getPriceOfProduct(this.form);" />
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>    
                </td>
            </tr>
			
			<?php
			}
			if($_REQUEST['type']=='3BAY'  ||$_REQUEST['type']=='4BAY'){
			
			?>
			
					 
			  <tr id="mailbox_cutout_c" style="display:none;">
                <td class="test-roasted"><a class="thickbox" href='images/EP5/ep5-mailbox-cutout.jpg'><h1>Cutout Face C</h1></a></td>
				<td>  
                    <select name="cutout_face_c" id="cutout_facec_status"  value="0" tabindex="14" style="margin:4px; float: right;width:70px;" align="right;" onchange="getPriceOfProduct(this.form);" />
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>    
                </td>
            </tr>
			
			<?php
			}
			if($_REQUEST['type']=='4BAY'){
			
			?>
			
			
					 
			  <tr id="mailbox_cutout_d" style="display:none;">
                <td class="test-roasted"><a class="thickbox" href='images/EP5/ep5-mailbox-cutout.jpg'><h1>Cutout Face D</h1></a></td>
				<td>  
                    <select name="cutout_face_d" id="cutout_faced_status"  value="0" tabindex="14" style="margin:4px; float: right;width:70px;" align="right;" onchange="getPriceOfProduct(this.form);" />
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>    
                </td>
            </tr>
			
			<?php
			}
			
			
			?>
			
			
        </table>
		</div>
    </td> 
</tr>
</table>


</div>





<div style="" class="table-pricing-tab-col3" valign="top" align="center" >


<div id="selected-item" style="position: relative;display: inline-block;">




<ul class="head-table">
<li id="additional_image"><img src="images/EP-54BAY/NORADNOENDS.jpg" style="max-width: 100%;max-height: 100%;display: block;">

</li>
<br style="clear:both;">
</ul>

</div>

</div>


<div style=""  class="table-pricing-tab-col4" valign="top" align="center" >

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

	
<!-- ani code -->

<br>
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

<table id="cart-form"   valign="bottom" >

    <tbody><tr>
	
	
		<td align="left">
		<div class="pricing-icon-wishlist">
		<p><a href="dfds.php" id="show_guarantee" onclick="show_guarantee();">
		<img src="img/pricing-page/wishlist22.png" style=""></a></p>
		<p>Save to Favorite</p>
		</div>
		</td>
		
        <td  align="right">
		
	
		
		
		
		<div  class="pricing-icon-addtocart">
	
        <p><input type="image" onclick="return myFunction2(this.form)" button="" id="add" title=" Add to Cart " alt="Add to Cart" src="img/pricing-page/add-to-cart.jpg" style="float: none;background: none !important;box-shadow: none;border: medium none;width:55px;height:55px;" ></p>
		
		<p>Add To Cart</p>
</div>

		
        </td>
    </tr>
</tbody></table>
</div>



       



</div>
<script type="text/javascript">
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
	/*make adjustable variable */
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
	
	/*red line height and width variable */

	
	var isOpera = !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;
    // Opera 8.0+ (UA detection to detect Blink/v8-powered Opera)
var isFirefox = typeof InstallTrigger !== 'undefined';   // Firefox 1.0+
var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0;
    // At least Safari 3+: "[object HTMLElementConstructor]"
var isChrome = !!window.chrome && !isOpera;              // Chrome 1+
var isIE = /*@cc_on!@*/false || !!document.documentMode;   // At least IE6
if(isFirefox==true){
var width_one=23;
var width_two=31;
width_three=30;
right_next=-44;
width_review=21;
redlinebrowser=23;
redlinebrowser1=23;
redln=85;
          /*red line width for price */
} else if(isChrome==true){
var width_one=19;//width of line one!!
var width_two=29;//width for below line!!
width_three=28;
right_next=-36;//align for next button!!
width_review=19; 
redln=85;
redlinebrowser=0;
redlinebrowser1=0;

}else if(isSafari==true){
var width_one=19;
var width_two=27;
width_three=28;
right_next=-40;
width_review=19; 
redlinebrowser=0;
redlinebrowser1=0;
redln=85;
}else if(isIE==true){
    if (document.all && !document.querySelector) {
        var width_two=27;
        redln=85;
    }else{
        var width_two=32;
        redln=87;
    }
var width_one=19;

width_three=28;
right_next=-40;
width_review=19; 
redlinebrowser=0;
redlinebrowser1=0;

}
else if(isOpera==true){
var width_one=19;
var width_two=27;
width_three=28;
right_next=-40;
width_review=19; 
redlinebrowser=0;
redlinebrowser1=0;
redln=85;
}

else{
var width_one=19;
var width_two=29;
width_three=28;
width_review=19;
redln=85;
}

	/* ende red line height and width variable */


	//yet having no use as i've seem as i've got any use of this funtion i'll change this comment!!
	
</script>
<script src="jquery.confirm/jquery.confirm.js"></script><!-- calling the popup confirmation box!! -->

<?php
    $msg="";
    $id=$_GET['id'];
    $tp=$_GET['type'];
    $rs=tep_db_query("select * from custom_popup where id='72'and bay='".$tp."'");
    $rw=tep_db_fetch_array($rs);
    $ms=$rw['message'];
    $ms_option=$rw['option_popup'];
    //echo "The message id here".$ms_option;
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
?>
    <!-- ani code -->



<script>
    
    
	
	

	$(document).ready(function(){
		show_panel_type(this.form);
	});	
	
	
	function show_panel_type(form)
	{
	$("input#glass-face").val(4);
	getPriceOfProduct(document.forms['cart_quantity']);	
	var endpanel_val=$("#end_options option:selected").text();
	//alert(endpanel_type);
	
	if(endpanel_val=="Both Ends")	
	{
	$("input#glass-face").val(1)	
	$("#endpan_err").attr("src","img/iconCheckOn.gif");
	}
	else if(endpanel_val=="Right End")	
	{
	$("input#glass-face").val(2);	
	$("#endpan_err").attr("src","img/iconCheckOn.gif");
	}
	else if(endpanel_val=="Left End")	
	{
	$("input#glass-face").val(3);		
	$("#endpan_err").attr("src","img/iconCheckOn.gif");
	}
	else if(endpanel_val=="No Ends")	
	{
	$("input#glass-face").val(4);		
	$("#endpan_err").attr("src","img/iconCheckOn.gif");
	}
	else 
	{
	$("input#glass-face").val(4);	
	$("#endpan_err").attr("src","img/iconCheckOff.gif");
	}	
		
		
	$("tr#left_lenght").css('display','none');
    $("tr#right_lenght").css('display','none');	

	getPriceOfProduct(document.forms['cart_quantity']);	

	
	
	}
	
	
	

</script>
<script type="text/javascript">


/*lightbar popup start */

function show_lightbar_pupup(form){
	
	var lightbarss=form.light_bar.value;
	
	if(lightbarss=='yes')
	{
	 // var val_a='8-1/4"';
	 
	// res_val_a = val_a.split('"');
	 // var res_a = res_val_a[0].replace("-", "+");
	 
	// var decimal = eval(res_a);
	// alert(decimal);
	// var e=form.end_options.value;
	var check_lightbar_value=0;
	
	var bay_value=type_obj.value;
	if(bay_value=='1BAY')
	{
	var faceglass_valueA=$("#face_length").find("option:selected").text();
	//var ssss =$("select[name=face_length]").text();
	//alert(faceglass_valueA);
	if(faceglass_valueA=='Select')
	{
	decimal_val_a =0;
	}
	else{
	res_val_a = faceglass_valueA.split('"');
	var res_a = res_val_a[0].replace("-", "+");
	var decimal_val_a = eval(res_a);
	}
	
	if(decimal_val_a<18)
	{
	check_lightbar_value=0;	
	}
	else{
	check_lightbar_value=1;	
	}
	
	
	
	
	}
	if(bay_value=='2BAY')
	{
	var faceglass_valueA=$("#face_length_a").find("option:selected").text();
	var faceglass_valueB=$("#face_length_b").find("option:selected").text();
	
	if(faceglass_valueA=='Select')
	{
	decimal_val_a =0;
	}
	else{
	res_val_a = faceglass_valueA.split('"');
	var res_a = res_val_a[0].replace("-", "+");
	var decimal_val_a = eval(res_a);
	}
	
	if(faceglass_valueB=='Select')
	{
	decimal_val_b =0;
	}
	else{
	res_val_b = faceglass_valueB.split('"');
	var res_b = res_val_b[0].replace("-", "+");
	var decimal_val_b = eval(res_b);
	}
	//alert(decimal_val_a);
	//alert(decimal_val_b);
	if(decimal_val_a<18 || decimal_val_b <18)
	{
	check_lightbar_value=0;	
	}
	else{
	check_lightbar_value=1;	
	}
	
	//alert(check_lightbar_value);
	
		
	}
	if(bay_value=='3BAY')
	{
	
	var faceglass_valueA=$("#face_length_a").find("option:selected").text();
	var faceglass_valueB=$("#face_length_b").find("option:selected").text();
	var faceglass_valueC=$("#face_length_c").find("option:selected").text();
	
	if(faceglass_valueA=='Select')
	{
	decimal_val_a =0;
	}
	else{
	res_val_a = faceglass_valueA.split('"');
	var res_a = res_val_a[0].replace("-", "+");
	var decimal_val_a = eval(res_a);
	}
	
	if(faceglass_valueB=='Select')
	{
	decimal_val_b =0;
	}
	else{
	res_val_b = faceglass_valueB.split('"');
	var res_b = res_val_b[0].replace("-", "+");
	var decimal_val_b = eval(res_b);
	}
	if(faceglass_valueC=='Select')
	{
	decimal_val_c =0;
	}
	else{
	res_val_c = faceglass_valueC.split('"');
	var res_c = res_val_c[0].replace("-", "+");
	var decimal_val_c = eval(res_c);
	}
	
	
	if(decimal_val_a<18 || decimal_val_b<18 || decimal_val_c<18)
	{
	check_lightbar_value=0;	
	}
	else{
	check_lightbar_value=1;	
	}	


	
	}
	if(bay_value=='4BAY')
	{
	
	var faceglass_valueA=$("#face_length_a").find("option:selected").text();
	var faceglass_valueB=$("#face_length_b").find("option:selected").text();
	var faceglass_valueC=$("#face_length_c").find("option:selected").text();
	var faceglass_valueD=$("#face_length_d").find("option:selected").text();
	
	if(faceglass_valueA=='Select')
	{
	decimal_val_a =0;
	}
	else{
	res_val_a = faceglass_valueA.split('"');
	var res_a = res_val_a[0].replace("-", "+");
	var decimal_val_a = eval(res_a);
	}
	
	if(faceglass_valueB=='Select')
	{
	decimal_val_b =0;
	}
	else{
	res_val_b = faceglass_valueB.split('"');
	var res_b = res_val_b[0].replace("-", "+");
	var decimal_val_b = eval(res_b);
	}
	if(faceglass_valueC=='Select')
	{
	decimal_val_c =0;
	}
	else{
	res_val_c = faceglass_valueC.split('"');
	var res_c = res_val_c[0].replace("-", "+");
	var decimal_val_c = eval(res_c);
	}
	if(faceglass_valueD=='Select')
	{
	decimal_val_d =0;
	}
	else{
	res_val_d = faceglass_valueD.split('"');
	var res_d = res_val_d[0].replace("-", "+");
	var decimal_val_d = eval(res_d);
	}
	
	if(decimal_val_a<18 || decimal_val_b<18 || decimal_val_c<18 || decimal_val_d<18)
	{
	check_lightbar_value=0;	
	}
	else{
	check_lightbar_value=1;	
	}	
			
	}
	//alert(bay_value);	
	
	
	if(check_lightbar_value=="0") {
			
			
            $(document).ready(function(){
                    var elem = $(this).closest('.item');
                    $.confirm({
                        'title'     : 'Confirmation',
            'message'   : '<div><p style="text-align: justify;"><span style="color: #ff0000;">Caution: about Lightbar Less Than 18" </span><br /><br /><br /><span>If you will select any Facelength <span style="color: #ff0000;">less that 18"</span> you will not able to select <span style="color: #ff0000;">Lightbar</span>. <br /> <br />Means you have to select every Facelenth more than 18" because there is no lightbar for less than 18" Facelength</span></p></div>',
            'buttons'   : {
                'Proceed'   : {
                    'class' : 'blue',
                    'action': function(){
										
										
										form.light_bar.value="no";
                                        form.light_bar.selected="No";		
										
										$('#arc_adius').css("display","");				
                                            getPriceOfProduct(document.forms['cart_quantity']);
                                            
                    }
                    
                                },
                'Cancel': {
                                    'class': 'gray',
                                    'action': function(){
                                        form.light_bar.value="no";
                                        form.light_bar.selected="No";	
										getPriceOfProduct(document.forms['cart_quantity']);
                                    }   // Nothing to do in this case. You can as well omit the action property.
                    
                }
            }
                    });
        
    
        
                });
            }
	
	
	
	
	
	
	
	
	
	}
	else{
		
	}
	
	
}
/*lightbar popup end */

//arc_glass_value
	//arc_adius
	//Arc Glass Popup
	 function show_pop_arc_glass(form){
		 var arc_glsssss=form.arc_glass.value;
		 //alert(arc_glsssss);
        if(arc_glsssss=="yes") {
			
			
            $(document).ready(function(){
                    var elem = $(this).closest('.item');
                    $.confirm({
                        'title'     : 'Confirmation',
            'message'   : '<div><p style="text-align: justify;"><span style="color: #ff0000;">Caution: about Arc Glass </span><br /><span>If you will select Arc Glass the all unit will be Arc Glass.<br /><br /> You need to select Arc type from <span style="color: #ff0000;">Arc Glass Type dropdown</span> and height of Arc Glass <span style="color: #ff0000;">2" , 4" or 6" from Arc Radius dropdown.</span> If you will not select height then it will be selected <span style="color: #ff0000;">4"</span> by default value. </span></p></div>',
            'buttons'   : {
                'Proceed'   : {
                    'class' : 'blue',
                    'action': function(){
										form.adjustable.value="no";
                                        form.adjustable.selected="No";		
										form.adjustable.disabled=true;
										
										form.light_bar.value="no";
                                        form.light_bar.selected="No";	
										$("#checkbox2").attr('disabled','disabled')										
										//form.light_bar.disabled=true;
										// $('#checkbox2').attr("disabled", true);
										// $("#checkbox2").attr("checked", false);

										 $('#arc_adius').css("display","");		
										 $('#endpanel_arc_glass').css("display","");		
										 $('#arc_glass_type').css("display","");
										 
										 $('#adjbrackedt').css("display","none");
									     $('#lightbarstatus').css("display","none");	
										
																				 
                                            getPriceOfProduct(document.forms['cart_quantity']);
                                            
                    }
                    
                                },
                'Cancel': {
                                    'class': 'gray',
                                    'action': function(){
                                        form.arc_glass.value="no";
                                        form.arc_glass.selected="No";
										$('#arc_adius').css("display","none");
										$('#endpanel_arc_glass').css("display","none");		
										$('#arc_glass_type').css("display","none");
										
										$('#adjbrackedt').css("display","");
										$('#lightbarstatus').css("display","");
										
										getPriceOfProduct(document.forms['cart_quantity']);
                                    }   // Nothing to do in this case. You can as well omit the action property.
                    
                }
            }
                    });
        
    
        
                });
            }
			
			else{
				$('#arc_adius').css("display","none");	
				$('#endpanel_arc_glass').css("display","none");		
				$('#arc_glass_type').css("display","none");
				
				$('#adjbrackedt').css("display","");
				$('#lightbarstatus').css("display","");
				
				
			
				
				form.adjustable.disabled=false;
            }       
    }
	
	
	
	
	
	
	 function show_pop_mailbox_cut(form){
		 var mailbox_cuss=form.mailbox_cut.value;
		 //alert(mailbox_cuss);
		 
        if(mailbox_cuss=="yes") {
			
			
            $(document).ready(function(){
                    var elem = $(this).closest('.item');
                    $.confirm({
                        'title'     : 'Confirmation',
            'message'   : '<div><p style="text-align: justify;"><span style="color: #ff0000;">Caution: about Mailbox Cutout </span><br /><span>Do you want to add mailbox cutout in glass . </span></p></div>',
            'buttons'   : {
                'Proceed'   : {
                    'class' : 'blue',
                    'action': function(){
										///form.adjustable.value="no";
                                        ////form.adjustable.selected="No";		
										//form.adjustable.disabled=true;
										
										//form.light_bar.value="no";
                                        //form.light_bar.selected="No";	
										$("#checkbox2").attr('disabled','disabled')										
										//form.light_bar.disabled=true;
										// $('#checkbox2').attr("disabled", true);
										// $("#checkbox2").attr("checked", false);

										 $('#mailbox_cutout_a').css("display","");		
										 $('#mailbox_cutout_b').css("display","");
		
										 $('#mailbox_cutout_c').css("display","");										 
										 $('#mailbox_cutout_d').css("display","");
										 ////mailbox_cut_status
										//mailbox_cut
										 
										 
										 
										 //$('#adjbrackedt').css("display","none");
									     //$('#lightbarstatus').css("display","none");	
										
																				 
                                            getPriceOfProduct(document.forms['cart_quantity']);
                                            
                    }
                    
                                },
                'Cancel': {
                                    'class': 'gray',
                                    'action': function(){
                                      
										///$('#adjbrackedt').css("display","");
										///$('#lightbarstatus').css("display","");
										
										  form.mailbox_cut.value="no";
											form.mailbox_cut.selected="No";
									
										 $('#mailbox_cutout_a').css("display","none");		
										 $('#mailbox_cutout_b').css("display","none");
		
										 $('#mailbox_cutout_c').css("display","none");										 
										 $('#mailbox_cutout_d').css("display","none");
										
										getPriceOfProduct(document.forms['cart_quantity']);
                                    }   // Nothing to do in this case. You can as well omit the action property.
                    
                }
            }
                    });
        
    
        
                });
            }
			
			else{
				
				$('#mailbox_cutout_a').css("display","none");		
				$('#mailbox_cutout_b').css("display","none");
		
				$('#mailbox_cutout_c').css("display","none");										 
				$('#mailbox_cutout_d').css("display","none");
										
				//$('#adjbrackedt').css("display","");
				//$('#lightbarstatus').css("display","");
				
				
			
				
				//form.adjustable.disabled=false;
            }       
    }
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
/*make adjustable popup */
	    function show_pop(form){
        if(form.roasted_glass.value=="yes") {
            $(document).ready(function(){
                    var elem = $(this).closest('.item');
                    $.confirm({
                        'title'     : 'Confirmation',
            'message'   : '<p><span>Frosted Glass current production lead time: </span></p><p><span><span style="color: #ff0000;"><span><span style="color: #ff0000;">4-6</span></span>&nbsp;business days for <strong><span style="text-decoration: underline;">S</span><span style="text-decoration: underline;">quare Corner</span></strong> glass</span> </span></p><p><span>(Certain models not available with square corners), and&nbsp;</span></p><p><span><span><span style="color: #ff0000;"><strong>4-6</strong> business days&nbsp;for <strong><span style="text-decoration: underline;">R</span><span style="text-decoration: underline;"><strong>o</strong>unded Corner</span></strong> glass</span>.</span></span></p>',
            'buttons'   : {
                'Proceed'   : {
                    'class' : 'blue',
                    'action': function(){
                                            getPriceOfProduct(document.forms['cart_quantity']);
                                            $('#is_frosted').val('Yes');
                    }
                    
                                },
                'Cancel': {
                                    'class': 'gray',
                                    'action': function(){
                                        form.roasted_glass.value="no";
                                        form.roasted_glass.selected="No";
										getPriceOfProduct(document.forms['cart_quantity']);
                                    }   // Nothing to do in this case. You can as well omit the action property.
                    
                }
            }
                    });
        
    
        
                });
            }else{
            }       
    }
    function makeAdjustable(form)//first make adjustable option
	{
        if(form.adjustable.value=="yes") {
            form.rounded_corners.value="round";
            form.rounded_corners.selected="Rounded";
            form.rounded_corners.disabled=true;
        $(document).ready(function(){
                    var elem = $(this).closest('.item');
                    $.confirm({
                        'title'     : 'Confirmation',
            'message'   : '<p style="text-align: justify;"><span><span style="color: #ff0000;">Caution:</span><span style="color: #ff0000;"> R</span><span style="color: #ff0000;">ounded&nbsp;</span><span><span style="color: #ff0000;">corner glass <span style="text-decoration: underline;">is required</span> for safety</span></span> when ordering adjustable panels. </span><span>Square corner glass is no longer an option.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; If this is acceptable select proceed, if not select cancel.</span></p>',
            'buttons'   : {
                'Proceed'   : {
                    'class' : 'blue',
                    'action': function(){
                                            getPriceOfProduct(document.forms['cart_quantity']);
                                            
                    }
                    
                                },
                'Cancel': {
                                    'class': 'gray',
                                    'action': function(){
                                        form.adjustable.value="no";
                                        form.adjustable.selected="No";
                                        form.rounded_corners.value="squared";
                                        //form.rounded_corners.selected="Select";
                                        form.rounded_corners.disabled=false;
                                        getPriceOfProduct(document.forms['cart_quantity']);
                                    }   // Nothing to do in this case. You can as well omit the action property.
                    
                }
            }
                    });
        
    
        
                });
            }else{
                form.rounded_corners.value="squared";
                //form.rounded_corners.selected="Select";
                form.rounded_corners.disabled=false;
            }		
	}



    leftstr='<td><h1>Left Length</h1><td></td><span id="left_length_span"><select name="left_length" onchange="getPriceOfProduct(this.form)" id="left_length"  disabled="disabled" class="usecustom"> <option value="12">12"</option><option value="18">18"</option><option value="24">24"</option><option value="30">30"</option><option value="36">36"</option><option value="42">42"</option><option value="custom">Custom</option></span></select></td><td></td>'
   
   rightstr='<td><h1 style="letter-spacing:-0.5px;">Right Length</h1><td></td><span id="right_length_span"><select name="right_length" onchange="getPriceOfProduct(this.form)" id="right_length" disabled="disabled" class="usecustom"> <option value="12">12"</option><option value="18">18"</option><option value="24">24"</option><option value="30">30"</option><option value="36">36"</option><option value="42">42"</option><option value="custom">Custom</option></span></select></td><td></td>'
    $(document).ready(function(){//custom option's coding does here!!
		/*ani code for custom checkbox check*/
	
		 $("ul.option1 li").toggle(
        function () { 
			$("ul.option li").eq(2).click();
			$('#customheight').attr('Checked','Checked'); 
			//doPostChange();//already comment
        	 $('.delete1').click();
		  
		   },
        function () { 
            $('#customheight').removeAttr('Checked'); 
			doPostChange();
        }
		
    );
	
		
		  
		$('.item .delete1').click(function(){//calling for the confirm box!!
		
		var elem = $(this).closest('.item');
		
		$.confirm({
		
	
			'title'		: 'Confirmation',
			
		
			 'message'	: '<span align="right" ><img src="jquery.confirm/EP5.jpg" style="float:right;"><span style="width:250px;display:block;text-align:justify;"><p><span>You have chosen a custom height post. We can manufacture them from 8" to 30" tall in&nbsp;</span><sup>1</sup><span>&frasl;</span><sub>4</sub><span>" increments. Custom posts can be produced within 24 hours.</span><br /><br /><span>If you select proceed, the custom posts will default at 8" tall until a new height is selected via the drop down menu.</span></p></span></span>',
			
		
			  
			 // 'message'	: '<span align="right" ><img src="jquery.confirm/EP5.jpg" style="float:right;"><span style="width:429px;display:block;text-align:justify;"><p><span>You have chosen a custom height post. We can manufacture them from 8" to 30" tall in&nbsp;</span><sup>1</sup><span>&frasl;</span><sub>4</sub><span>" increments. Custom posts can be produced within 24 hours.</span><br /><br /><span>If you select proceed, the custom posts will default at 8" tall until a new height is selected via the drop down menu.</span></p></span></span>',
			
		
			
			
			'buttons'	: {
				'Proceed'	: {
					'class'	: 'blue',
					'action': function(){
						
						 
			             doPostChange();
							
						
					}
				},
				'Cancel'	: {
					'class'	: 'gray',
					'action': function(){}	// Nothing to do in this case. You can as well omit the action property.
					
				}
			}
		});
		
	});
        




        $("ul.option li").click(function(){//click funtion for options!!
		
		
		
        action_event(".test-warsi");//removing the activated format means red lines and changing messages!
            i=$("ul.option").children().length;
            j=0;
            while(j<i){
                $("ul.option li").removeClass('selected');//leave selected after clicked
                j++;
            }
            $(this).addClass('selected');

			/*for ep 15 if custom button is clicked ani code */
			if($('#customheight').is(':checked')){//this is for EP15
			 $('ul.option1 li').css('visibility','visible');
			 $('ul.option1 li').addClass('selected');
			 }else{
			 	$('ul.option1 li').removeClass('selected');
			 }
			/*end ani code*/
			
						
			
			if($(this).text()=="Both Closed End Panels"||bth){//next step functions
                            $("input#glass-face").val(1);//calling the image of both closed end panels
                            $("tr#right_lenght").html(rightstr);//providing the values to the right length option
                            $("tr#left_lenght").html(leftstr);//providing the values to the left length option
			}
			else if($(this).text()=="Right Closed End Panel"||rght){
                            $("input#glass-face").val(2);//calling the image according to the above click
                            $("tr#left_lenght").html("<td height='20'></td>");//hiding left length option
                            $("tr#right_lenght").html(rightstr);//providing the right length options to the select
			}
			else if($(this).text()=="Left Closed End Panel"||lft){
                            $("tr#right_lenght").html("<td height='20'></td>");//hiding the right length 
                            $("tr#left_lenght").html(leftstr);//Showing the left length
                            $("input#glass-face").val(3);//showing the image of left closed panel
			}
			else if($(this).text()=="No Closed End Panels"||noe){
			    $("tr#right_lenght").html("<td height='20'></td>");//hiding the right length 
                            $("tr#left_lenght").html("<td height='20'></td>");//hidhing the left length
                            $("input#glass-face").val(4);//showing the image
			}
			else if($(this).text()=='18" Tall'){
				$("input#glass-face").val(18);//this for the EP15 which have two different funtion
			}
			else if($(this).text()=='22" Tall'){
				$("input#glass-face").val(22);//this is also for the EP15 
			}
			else if($(this).text()=='26" Tall'){
				$("input#glass-face").val(26);
			}
			
           $("select").removeAttr("disabled");//activating all selects for editing the product description
            $("input").removeAttr("disabled");//activating all the input box for selection
			if($(".makeadjustablecheck31").val()==1){
                $("#round_check").attr("disabled",true);//making disable the checkbox.. .. ..
            }
			getPriceOfProduct(document.forms['cart_quantity']);
           // action_event(".test-warsi")
        
			
		
		
		});
		function doPostChange(){//this is in case of EP15
		
			if($('#customheight').is(':checked')){
				
				var my_facelengt_select="";
				$('.usecustom').each(function(){
							checkfopost=0;
							my_facelengt_select="";
							my_facelengt_select+='<select name="'+$(this).attr("name")+'" onchange="getPriceOfProduct(this.form)" >';
						 	$('[name="'+$(this).attr("name")+'"] > option') .each(function() {
								
								if($(this).val()!='custom'){
									
									my_facelengt_select+='<option value="'+$(this).val()+'" style="display:none;">'+$(this).val()+'"</option>';
								}else{
									my_facelengt_select+='<option value="select" selected="selected" >Select</option>';
									my_facelengt_select+='<option value="custom">Custom</option>';
									my_facelengt_select+='<option value="No Glass">No Glass</option>';
									//my_facelengt_select+='<option value="" style="display:none;">Custom</option>';
								  return false;
								}
													
							});
							
							$('#'+$(this).attr("name")+'_span').html(my_facelengt_select);
						})
				var my_facelengt_select="";
				
				 my_facelengt_select='<select name="post_height" id="post_height" onchange="getPriceOfProduct(this.form)" >';
						var myArray=new Array("","18","22","26","")
						var i=1;
						
							
							
							
									
						
						var j=0;
						for (i=8;i<myArray[1];i++){
						
							my_facelengt_select+='<option value="'+myArray[1]+'">'+i+'"</option>';
							my_facelengt_select+='<option value="'+myArray[1]+'">'+i+'-1/4'+'"</option>';
							my_facelengt_select+='<option value="'+myArray[1]+'">'+i+'-1/2'+'"</option>';
							my_facelengt_select+='<option value="'+myArray[1]+'">'+i+'-3/4'+'"</option>';
							j=i;
						}
						
						for(i=1;i< myArray.length-2;i++){
							for(j=myArray[i];j<myArray[i+1];j++){
								if(j>myArray[i]){
									my_facelengt_select+='<option value="'+myArray[i+1]+'">'+j+'"</option>';
								}else
								{
									my_facelengt_select+='<option value="'+myArray[i]+'">'+j+'"</option>';	
								}
								my_facelengt_select+='<option value="'+myArray[i+1]+'">'+j+'-1/4'+'"</option>';
								my_facelengt_select+='<option value="'+myArray[i+1]+'">'+j+'-1/2'+'"</option>';
								my_facelengt_select+='<option value="'+myArray[i+1]+'">'+j+'-3/4'+'"</option>';
							}
						}
							for (i=26;i<30;i++){
							
								my_facelengt_select+='<option value="'+26+'">'+i+'"</option>';
								my_facelengt_select+='<option value="'+26+'">'+i+'-1/4'+'"</option>';
								my_facelengt_select+='<option value="'+26+'">'+i+'-1/2'+'"</option>';
								my_facelengt_select+='<option value="'+26+'">'+i+'-3/4'+'"</option>';
								j=i;
							}
							my_facelengt_select+='<option value="'+26+'">'+30+'"</option>';
						//my_facelengt_select+='<option value="'+myArray[i]+'">'+myArray[i]+'"</option>';
				
						$('#postcustom').html(my_facelengt_select);
				
				$('#is_custom').val('Yes');
		 	  
			  $('ul.option-panel').css('visibility','hidden');
			  $('h1.option-panel2').css('visibility','visible');
			  
			var checkall=true;
					 if($('select[name="face_length"]').length){
					 $('.glass').text( $('[name="face_length"]').find('option:selected').text());
					 	if($('[name="face_length"]').find('option:selected').text()=='Select'){
							checkall=false;
						}
					 }
					 if($('select[name="post_height"]').length){
					 $('.post').text( $('[name="post_height"]').find('option:selected').text());
					 	if($('[name="post_height"]').find('option:selected').text()=='Select'){
							checkall=false;
						}
					 }
					 if($('select[name="left_length"]').length){
					 $('.left').text( $('[name="left_length"]').find('option:selected').text());
					 	if($('[name="left_length"]').find('option:selected').text()=='Select'){
							checkall=false;
						}
					 }
					 if($('select[name="right_length"]').length){
					 $('.right').text( $('[name="right_length"]').find('option:selected').text());
					 	if($('[name="right_length"]').find('option:selected').text()=='Select'){
							checkall=false;
						}
					 }
					 
					 if($('select[name="face_length_a"]').length){
					 $('.glass_a').text( $('[name="face_length_a"]').find('option:selected').text());
					 	if($('[name="face_length_a"]').find('option:selected').text()=='Select'){
							checkall=false;
						}
					 }
					 if($('select[name="face_length_b"]').length){
					 $('.glass_b').text( $('[name="face_length_b"]').find('option:selected').text());
					 	if($('[name="face_length_b"]').find('option:selected').text()=='Select'){
							checkall=false;
						}
					 }
					 if($('select[name="face_length_c"]').length){
					 $('.glass_c').text( $('[name="face_length_c"]').find('option:selected').text());
					 	if($('[name="face_length_c"]').find('option:selected').text()=='Select'){
							checkall=false;
						}
					 }if($('select[name="face_length_d"]').length){
					 $('.glass_d').text( $('[name="face_length_d"]').find('option:selected').text());
					 	if($('[name="face_length_d"]').find('option:selected').text()=='Select'){
							checkall=false;
						}
					 }
					 
					 
					$('#is_custom').val('Yes');
						if(checkall){
							$('#ckall').val(true);
							getPriceOfProduct(document.forms['cart_quantity']);
						}else{
							$('#ckall').val(false);
							$('.total').text('Select');
						}
			  
			
			  

					

//						alert('hi');
			  
			}else{
				$('#postcustom').html("");
				 $("ul.option li").eq(0).click();
				 $('ul.option').css('visibility','visible');
				 $('ul.option1 li').removeClass('selected');
			}
		}
		
		
		//if($('#customheight').is(':checked')){
//			 $("ul.option li").eq(0).click();
//		  $('.option-panel').css('visibility','hidden');
//		  
//		 
//		  //getPriceOfProduct(document.forms['cart_quantity']);
//		  
//		}else{
//			$('.option-panel').css('visibility','visible');
//		}
//		
		
        
        $('input[type="checkbox"]').click(function(){//getting and adding the price of other accessories which are like flange cover light bar and frosted glass!!
			if($(this).is(':checked')){
				$(this).val(1);
                getPriceOfProduct(document.forms['cart_quantity']);
			}
			else{
				$(this).val(0);
                getPriceOfProduct(document.forms['cart_quantity']);
			}            
        });
    });
</script>
<script type="text/javascript">
 function getProductFolderName(productname){
        foldername="";
        switch(productname){
            case 'Ring-EP5':{
                foldername="Ring-EP-5";//getting the resource images from the perticular folder
                break;
            }
           
        }
        return foldername;
    }

    function nogl(form,el,val){
        var valcheck=document.getElementById('checkformorethan42').checked
		//var valcheck=$('#checkformorethan42').val();
	//alert(valcheck);
	
		if(valcheck)
		{
			
		}
	else{
		if(val>42){
            var elem = $(this).closest('.item');
            $.confirm({
                'title'     : 'Confirmation',
                'message'   : '<?php echo $ms_glass?>',
                'buttons'   : {
                    'cnfrm':{
                        'title' : 'I Agree',
                        'class' : 'tick',
                        'action': function(){
                        }
                    },
                    'Proceeded'   : {
                        'class' : 'blue',
                        'action': function(){
                            getPriceOfProduct(document.forms['cart_quantity']);
                        }
                    },
					'Canceled': {
                        'class': 'gray',
                        'action': function(){
							$("select[name="+el+"]")[0].selectedIndex = 0;
							getPriceOfProduct(document.forms['cart_quantity']);
                        }   // Making the first option selected!!
                    }
                }
            });
        }
	}
		
        if(form.type.value=="1BAY"){
            if(val=="No Glass" || val=='No Glass"'){
                form.face_length.value="No Glass";
                form.right_length.value="No Glass";
                form.left_length.value="No Glass";
                getPriceOfProduct(document.forms['cart_quantity']);
            }else{
                if($("input#glass-face").val()==1){

                }else if($("input#glass-face").val()==2){
                    //form.right_length.value="select";
                    form.left_length.value="select";    
                }else if($("input#glass-face").val()==3){
                    form.right_length.value="select";
                    //form.left_length.value="select";    
                }else if($("input#glass-face").val()==4){
                    form.right_length.value="select";
                    form.left_length.value="select";    
                }
                
                getPriceOfProduct(document.forms['cart_quantity']);
                
            }
        }
        if(form.type.value=="2BAY"){
            if(val=="No Glass" || val=='No Glass"'){
                form.face_length_a.value="No Glass";
                form.face_length_b.value="No Glass";
                form.right_length.value="No Glass";
                form.left_length.value="No Glass";
                getPriceOfProduct(document.forms['cart_quantity']);
            }else{
                if(form.face_length_a.value!="No Glass" && form.face_length_b.value!="No Glass"){
                    if($("input#glass-face").val()==1){

					}else if($("input#glass-face").val()==2){
						//form.right_length.value="select";
						form.left_length.value="select";    
					}else if($("input#glass-face").val()==3){
						form.right_length.value="select";
						//form.left_length.value="select";    
					}else if($("input#glass-face").val()==4){
						form.right_length.value="select";
						form.left_length.value="select";    
					}
                    getPriceOfProduct(document.forms['cart_quantity']);
                }
            }
        }
        if(form.type.value=="3BAY"){
            if(val=="No Glass" || val=='No Glass"'){
                form.face_length_a.value="No Glass";
                form.face_length_b.value="No Glass";
                form.face_length_c.value="No Glass";
                form.right_length.value="No Glass";
                form.left_length.value="No Glass";
                getPriceOfProduct(document.forms['cart_quantity']);
            }else{
                if(form.face_length_a.value!="No Glass" && form.face_length_b.value!="No Glass" && form.face_length_c.value!="No Glass"){
                    if($("input#glass-face").val()==1){

					}else if($("input#glass-face").val()==2){
                    //form.right_length.value="select";
						form.left_length.value="select";    
					}else if($("input#glass-face").val()==3){
						form.right_length.value="select";
                    //form.left_length.value="select";    
					}else if($("input#glass-face").val()==4){
						form.right_length.value="select";
						form.left_length.value="select";    
					}
                    getPriceOfProduct(document.forms['cart_quantity']);
                }
            }
        }
        if(form.type.value=="4BAY" ){
            if(val=="No Glass" || val=='No Glass"'){
                form.face_length_a.value="No Glass";
                form.face_length_b.value="No Glass";
                form.face_length_c.value="No Glass";
                form.face_length_d.value="No Glass";
                form.right_length.value="No Glass";
                form.left_length.value="No Glass";
                getPriceOfProduct(document.forms['cart_quantity']);
            }else{
                if(form.face_length_a.value!="No Glass" && form.face_length_b.value!="No Glass" && form.face_length_c.value!="No Glass" && form.face_length_d.value!="No Glass"){
                    if($("input#glass-face").val()==1){

					}else if($("input#glass-face").val()==2){
						//form.right_length.value="select";
						form.left_length.value="select";    
					}else if($("input#glass-face").val()==3){
						form.right_length.value="select";
						//form.left_length.value="select";    
					}else if($("input#glass-face").val()==4){
						form.right_length.value="select";
						form.left_length.value="select";    
					}
                    getPriceOfProduct(document.forms['cart_quantity']);
                }
            }
        }
    }



    function changeGlassImage(form, image){
	
	
        category_name="Ring-EP5";
        foldername=getProductFolderName("Ring-EP5")+form.type.value;
        imageName='';
        if(form.rounded_corners.value==0){
            imageName='GLASSNORAD.jpg';
        }
        else{
            imageName='GLASS.jpg'
        }
        if(image!=""){
            imageName=image;
        }
		if(type_obj.value=="1BAY"){
		cross = '<input type="button" onclick="getPriceOfProduct(this.form);" style="margin: 0 4px;position: absolute;right: -650px;top: -180px;width: 20px;z-index: 1000000;" value="X" class="rounded-corner-image">'
        }if(type_obj.value=="2BAY"){
		cross = '<input type="button" onclick="getPriceOfProduct(this.form);" style="margin: 0 4px;position: absolute;right: -650px;top: -230px;width: 20px;z-index: 1000000;" value="X" class="rounded-corner-image">'
        }if(type_obj.value=="3BAY"){
		cross = '<input type="button" onclick="getPriceOfProduct(this.form);" style="margin: 0 4px;position: absolute;right: -650px;top: -280px;width: 20px;z-index: 1000000;" value="X" class="rounded-corner-image">'
        }if(type_obj.value=="4BAY"){
		cross = '<input type="button" onclick="getPriceOfProduct(this.form);" style="margin: 0 4px;position: absolute;right: -650px;top: -330px;width: 20px;z-index: 1000000;" value="X" class="rounded-corner-image">'
        } 
		
		image_string='<img src="images/'+foldername+'/'+imageName+'" style="width:640px;height:640px">';
		//image_string='<img src="images/'+foldername+'/'+imageName+'" style="width:568px;height:453px">';
		
        document.getElementById('additional_image').innerHTML=image_string;
		document.getElementById('ro').innerHTML=cross;
    }

    function finishImage(form,image){
         category_name="Ring-EP5";
        foldername=getProductFolderName("Ring-EP5");
        if(image!=""){
            imageName=image;
        }

        cross = '<input type="button" onclick="getPriceOfProduct(this.form);" style="margin: 0 4px;position: absolute;right: -615px;top: -160px;width: 20px;z-index: 1000000;" value="X" class="rounded-corner-image">'
		
        image_string='<img src="images/'+imageName+'" style="width:568px;height:453px">';
       // image_string='<img src="images/'+imageName+'" style="width:568px;height:453px">';
		
		
//        alert(image_string);
        
        document.getElementById('additional_image').innerHTML=image_string;
        document.getElementById('ro').innerHTML=cross;
    }

    function changeGlassImage1(form, type){
	
	
        foldername=getProductFolderName("Ring-EP5")+form.type.value;
        imageName='';
        if(form.rounded_corners.value==0){
            imageName='GLASSNORAD.jpg';
        }
        else{
            imageName='GLASS.jpg'
        }
        image_string='<img src="images/'+foldername+'/'+imageName+'" style="width:100%"><div id="top"></div><div id="bottom"></div><div id="left1"></div>';
        document.getElementById('additional_image').innerHTML=image_string;
       
        if(type=="G"){
            document.getElementById('top').innerHTML=(parseInt(form.face_length.value)-2)+' 1/8"';
            document.getElementById('bottom').innerHTML=(parseInt(form.face_length.value)-2)+' 1/8"';
        }
        else if(type=="A"){
            document.getElementById('top').innerHTML=(parseInt(form.face_length_a.value)-2)+' 1/8"';
            document.getElementById('bottom').innerHTML=(parseInt(form.face_length_a.value)-2)+' 1/8"';
            if("EP5"=="EP15"){
                document.getElementById('left1').innerHTML=(parseInt(form.glass_face.value)-2)+' 1/2"';
            }
            if("EP5"=="EP5"){
                document.getElementById('left1').innerHTML=(parseInt(form.post_height.value)-2)+' 1/2"';
            }
        }
        else if(type=="B"){
            document.getElementById('top').innerHTML=(parseInt(form.face_length_b.value)-2)+' 1/8"';
            document.getElementById('bottom').innerHTML=(parseInt(form.face_length_b.value)-2)+' 1/8"';
            if("EP5"=="EP15"){
                document.getElementById('left1').innerHTML=(parseInt(form.glass_face.value)-2)+' 1/2"';
            }
            if("EP5"=="EP5"){
                document.getElementById('left1').innerHTML=(parseInt(form.post_height.value)-2)+' 1/2"';
            }
        }
        else if(type=="C"){
            document.getElementById('top').innerHTML=(parseInt(form.face_length_c.value)-2)+' 1/8"';
            document.getElementById('bottom').innerHTML=(parseInt(form.face_length_c.value)-2)+' 1/8"';
            if("EP5"=="EP15"){
                document.getElementById('left1').innerHTML=(parseInt(form.glass_face.value)-2)+' 1/2"';
            }
            if("EP5"=="EP5"){
                document.getElementById('left1').innerHTML=(parseInt(form.post_height.value)-2)+' 1/2"';
            }
        }else if(type=="D"){

            document.getElementById('top').innerHTML=(parseInt(form.face_length_d.value)-2)+' 1/8"';

            document.getElementById('bottom').innerHTML=(parseInt(form.face_length_d.value)-2)+' 1/8"';

            if("EP5"=="EP15"){

                document.getElementById('left1').innerHTML=(parseInt(form.glass_face.value)-2)+' 1/2"';

            }

            if("EP5"=="EP5"){

                document.getElementById('left1').innerHTML=(parseInt(form.post_height.value)-2)+' 1/2"';

            }

        }
        else if(type=="L"){
            document.getElementById('left1').innerHTML=(parseInt(form.post_height.value)-2)+' 1/2"';
            document.getElementById('top').innerHTML=(parseInt(form.left_length.value)-2)+' 1/8"';
        }
        else if(type=="R"){
            document.getElementById('left1').innerHTML=(parseInt(form.post_height.value)-2)+' 1/2"';
            document.getElementById('top').innerHTML=(parseInt(form.right_length.value)-2)+' 1/8"';
        }
    }
    
    function getVedio(){
        str='<video id="example_video_1" class="video-js" width="600" height="480" controls="controls" preload="auto" poster="pic.jpg" autoplay ><source src="images/flang.mp4"'+" type='video/mp4; codecs="+'"avc1.42E01E, mp4a.40.2"'+' /><source src="images/flang.webm"'+" type='video/webm; codecs="+'"vp8, vorbis"'+' /><source src="images/flang.ogv"'+" type='video/ogg; codecs="+'"theora, vorbis"'+' /><object id="flash_fallback_1" class="vjs-flash-fallback" width="640" height="264" type="application/x-shockwave-flash" data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf"><param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" /><param name="allowfullscreen" value="true" /><param name="flashvars" value='+"config={"+'"playlist":["pic.jpg", {"url": "images/flang.mp4","autoPlay":false,"autoBuffering":true}]}'+' /><img src="pic.jpg" width="640" height="480" alt="Poster Image" title="No video playback capabilities." /></object></video>';
        document.getElementById('additional_image').innerHTML=str;
		
    }    
	function getPriceOfProduct(form){
		// <!-- ani code -->
		// <!-- for custom ep 15 height -->//now get the solution for EP15
		if($('#customheight').is(':checked')){
			 $('.option-panel').css('visibility','hidden');
		    //getPriceOfProduct(document.forms['cart_quantity']);
		}else{
			$('.option-panel').css('visibility','visible');
		}
		$('#product_type').val('Ring-EP5');
		if(!$('select[name="right_length"]').length){
			$('#c_glass_right_val').val('');
			$('#c_glass_right').val('');
		}
		if(!$('select[name="left_length"]').length){
			$('#c_glass_left_val').val('');
			$('#c_glass_left').val('');
		}
		if(!$('select[name="post_height"]').length){
			$('#c_glass_post_val').val('');
		}
		if(!$('select[name="face_length"]').length){
			$('#c_glass_face_val').val('');
			$('#c_glass_face').val('');
		}
		if(!$('select[name="face_length_a"]').length){
			$('#c_glass_a_val').val('');
			$('#c_glass_a').val('');
		}
		if(!$('select[name="face_length_b"]').length){
			$('#c_glass_b_val').val('');
			$('#c_glass_b').val('');
		}
		if(!$('select[name="face_length_c"]').length){
			$('#c_glass_c_val').val('');
			$('#c_glass_c').val('');
		}if(!$('select[name="face_length_d"]').length){
			$('#c_glass_d_val').val('');
			$('#c_glass_d').val('');
		}
		var checkall=true;
        if($('select[name="face_length"]').length){
            $('.glass').text( $('[name="face_length"]').find('option:selected').text());
            if($('[name="face_length"]').find('option:selected').text()=='Select'){
                checkall=false;
            }
		}
		if($('select[name="post_height"]').length){
            $('.post').text( $('[name="post_height"]').find('option:selected').text());
            if($('[name="post_height"]').find('option:selected').text()=='Select'){
                checkall=false;
            }
		}
		if($('select[name="left_length"]').length){
            $('.left').text( $('[name="left_length"]').find('option:selected').text());
            if($('[name="left_length"]').find('option:selected').text()=='Select'){
                checkall=false;
            }
		}
		if($('select[name="right_length"]').length){
            $('.right').text( $('[name="right_length"]').find('option:selected').text());
            if($('[name="right_length"]').find('option:selected').text()=='Select'){
                checkall=false;
            }
		}
        if($('select[name="face_length_a"]').length){
            $('.glass_a').text( $('[name="face_length_a"]').find('option:selected').text());
            if($('[name="face_length_a"]').find('option:selected').text()=='Select'){
                checkall=false;
            }
		}
		if($('select[name="face_length_b"]').length){
            $('.glass_b').text( $('[name="face_length_b"]').find('option:selected').text());
            if($('[name="face_length_b"]').find('option:selected').text()=='Select'){
                checkall=false;
            }
		}
		if($('select[name="face_length_c"]').length){
            $('.glass_c').text( $('[name="face_length_c"]').find('option:selected').text());
            if($('[name="face_length_c"]').find('option:selected').text()=='Select'){
                checkall=false;
            }
		}
        if($('select[name="face_length_d"]').length){
            $('.glass_d').text( $('[name="face_length_d"]').find('option:selected').text());
            if($('[name="face_length_d"]').find('option:selected').text()=='Select'){
                checkall=false;
            }
		}
        $("#c_glass_mult").val(1);
        $("#c_glass_a_mult").val(1);
        $("#c_glass_b_mult").val(1);
        $("#c_glass_c_mult").val(1);
        $("#c_glass_d_mult").val(1);
        $("#c_glass_right_mult").val(1);
        $("#c_glass_left_mult").val(1);
		if(checkall){
            $('#ckall').val(true);
        }
		
		
					//checkformorethan42
				
						//checkformorethan42
				//FOR MORE THAN 42 GLASS
					var checkmoretha42selected  = $('#one').is(':checked');
	               
					 if(checkmoretha42selected)
					 {
						$("#checkformorethan42").attr("checked",true); 
					 }
					var checkmoretha42selectedall  = $('#checkformorethan42').is(':checked');		 
					 
	
					<?php if($_REQUEST['type']=='4BAY'){
						?>
				
				//alert(checkmoretha42selectedall);
	
				
				
	               var customefaceA  = $('#customefaceA').is(':checked');
	               
					 if(customefaceA)
					 {
						  var faceA_get =$('[name="face_length_a"]').find('option:selected').text();
						  var faceA_get_val =$('[name="face_length_a"]').find('option:selected').val();
						  var faceB_get =$('[name="face_length_b"]').find('option:selected').text();
						  var faceB_get_val =$('[name="face_length_b"]').find('option:selected').val();
						  var faceC_get =$('[name="face_length_c"]').find('option:selected').text();
						  var faceC_get_val =$('[name="face_length_c"]').find('option:selected').val();
						  var faceD_get =$('[name="face_length_d"]').find('option:selected').text();
						  var faceD_get_val =$('[name="face_length_d"]').find('option:selected').val();
						  
						  
						//alert(faceB_get);
						if(faceB_get!='Custom')
						{
							//alert(faceB_get);
							if(faceB_get=='Select')
							{
								form.face_length_b.value=faceA_get_val;
								form.face_length_b.selected=faceA_get;
							//$('#face_length_b option[value="'+faceA_get_val+'"]').text(faceA_get);
							}
							else{
							form.face_length_b.value=faceB_get_val;
							$('#face_length_b option[value="'+faceB_get_val+'"]').text(faceB_get);
							}
						}
						if(faceC_get!='Custom')
						{
							//alert(faceC_get);
							if(faceC_get=='Select')
							{
								form.face_length_c.value=faceA_get_val;
								form.face_length_c.selected=faceA_get;
							//$('#face_length_c option[value="'+faceA_get_val+'"]').text(faceA_get);
							}
							else{
							form.face_length_c.value=faceC_get_val;
							$('#face_length_c option[value="'+faceC_get_val+'"]').text(faceC_get);
							}
						}
						if(faceD_get!='Custom')
						{
							if(faceD_get=='Select')
							{
								form.face_length_d.value=faceA_get_val;
								form.face_length_d.selected=faceA_get;
							//$('#face_length_d option[value="'+faceA_get_val+'"]').text(faceA_get);
							}
							else{
							form.face_length_d.value=faceD_get_val;
							$('#face_length_d option[value="'+faceD_get_val+'"]').text(faceD_get);
							}
						}
						else{
						form.face_length_b.value=faceA_get_val;
						$('#face_length_b option[value="'+faceA_get_val+'"]').text(faceA_get);
						//form.face_length_b.disabled=true;	
						
						form.face_length_c.value=faceA_get_val;
						$('#face_length_c option[value="'+faceA_get_val+'"]').text(faceA_get);
						//form.face_length_c.disabled=true;
						
						form.face_length_d.value=faceA_get_val;
						$('#face_length_d option[value="'+faceA_get_val+'"]').text(faceA_get);
						//form.face_length_d.disabled=true;
						}
						$("#checkboxbfor4bayA").attr("checked",true);
						//var option_cust='<option value="48">48"</option><option value="54">54"</option>';
						
						$('#optio_48_b').css("display","block");
						$('#optio_54_b').css("display","block");
						$('#optio_48_c').css("display","block");
						$('#optio_54_c').css("display","block");
						$('#optio_48_d').css("display","block");
						$('#optio_54_d').css("display","block");
						
						
						//$('#show_select_faceb_fora').css("display","block");
						//$('#face_length_b').css("display","none;");
						//$('#undefined').css("display","none;");
						
						//$('#show_select_faceb_fora').attr('name', 'other_amount');
						
						
						
						
					 }
					 else{
						 
					 }
					 
					 var checkcheckedb  = $('#checkboxbfor4bayA').is(':checked');
					 //alert(checkcheckedb);
					 
					 if(checkcheckedb)
					 {
						var faceA_get =$('[name="face_length_a"]').find('option:selected').text();
						var faceA_get_val =$('[name="face_length_a"]').find('option:selected').val();
						 var faceB_get =$('[name="face_length_b"]').find('option:selected').text();
						 var faceB_get_val =$('[name="face_length_b"]').find('option:selected').val();
						var faceC_get =$('[name="face_length_c"]').find('option:selected').text();
						  var faceC_get_val =$('[name="face_length_c"]').find('option:selected').val();
						  var faceD_get =$('[name="face_length_d"]').find('option:selected').text();
						  var faceD_get_val =$('[name="face_length_d"]').find('option:selected').val();
						  
						
						//if FacelengthB not same
						if(faceB_get!='Custom')
						{
						//$("#checkbfor4bayBnonsame").attr("checked",true);	
							
						
						
						if(faceB_get=='8"')
						{
						
						$("#face_length_b option").filter(function() {
							return this.text == faceA_get; 
						}).attr('selected', true);
						
						
						}
						else{
							$("#face_length_b option").filter(function() {
							return this.text == faceB_get; 
						}).attr('selected', true);
						
						}
						
						}
						else{
						$("#face_length_b option").filter(function() {
							return this.text == faceA_get; 
						}).attr('selected', true);
						}
						
						//alert(faceC_get);
						//if FacelengthC not same
						
						if(faceC_get!='Custom')
						{
						//$("#checkbfor4bayBnonsame").attr("checked",true);	
							
						
						
						if(faceC_get=='8"')
						{
						
						$("#face_length_c option").filter(function() {
							return this.text == faceA_get; 
						}).attr('selected', true);
						
						
						}
						else{
							$("#face_length_c option").filter(function() {
							return this.text == faceC_get; 
						}).attr('selected', true);
						
						}
						
						}
						else{
						$("#face_length_c option").filter(function() {
							return this.text == faceA_get; 
						}).attr('selected', true);
						}
						
						
						
						//if FacelengthD not same
						
						
						if(faceD_get!='Custom')
						{
						//$("#checkbfor4bayBnonsame").attr("checked",true);	
							
						
						
						if(faceD_get=='8"')
						{
						
						$("#face_length_d option").filter(function() {
							return this.text == faceA_get; 
						}).attr('selected', true);
						
						
						}
						else{
							$("#face_length_d option").filter(function() {
							return this.text == faceD_get; 
						}).attr('selected', true);
						
						}
						
						}
						else{
						$("#face_length_d option").filter(function() {
							return this.text == faceA_get; 
						}).attr('selected', true);
						}
						
						
						
						
						
						
						
						$('#optio_48_b').css("display","block");
						$('#optio_54_b').css("display","block");
						$('#optio_48_c').css("display","block");
						$('#optio_54_c').css("display","block");
						$('#optio_48_d').css("display","block");
						$('#optio_54_d').css("display","block");
						
						
						
						$('.customsame').css("display","block");
						$('.instock').css("display","none");
						
						
				
					 }
					 
					 
					 var customefaceB  = $('#customefaceB').is(':checked');
					 if(customefaceB)
					 {
						var faceB_get =$('[name="face_length_b"]').find('option:selected').text();
						var faceB_get_val =$('[name="face_length_b"]').find('option:selected').val();
						var faceC_get =$('[name="face_length_c"]').find('option:selected').text();
						var faceC_get_val =$('[name="face_length_c"]').find('option:selected').val();
						var faceD_get =$('[name="face_length_d"]').find('option:selected').text();
						var faceD_get_val =$('[name="face_length_d"]').find('option:selected').val();
						
						
						
						if(faceC_get!='Custom')
						{
							//alert(faceC_get);
							if(faceC_get=='Select')
							{
								form.face_length_c.value=faceB_get_val;
								form.face_length_c.selected=faceB_get;
							//$('#face_length_c option[value="'+faceB_get_val+'"]').text(faceB_get);
							}
							else{
							form.face_length_c.value=faceC_get_val;
							$('#face_length_c option[value="'+faceC_get_val+'"]').text(faceC_get);
							}
						}
						if(faceD_get!='Custom')
						{
							if(faceD_get=='Select')
							{
								form.face_length_d.value=faceB_get_val;
								form.face_length_d.selected=faceB_get;
							//$('#face_length_d option[value="'+faceB_get_val+'"]').text(faceB_get);
							}
							else{
							form.face_length_d.value=faceD_get_val;
							$('#face_length_d option[value="'+faceD_get_val+'"]').text(faceD_get);
							}
						}
						else{
						
						form.face_length_c.value=faceB_get_val;
						$('#face_length_c option[value="'+faceB_get_val+'"]').text(faceB_get);
						//form.face_length_c.disabled=true;
						
						form.face_length_d.value=faceB_get_val;
						$('#face_length_d option[value="'+faceB_get_val+'"]').text(faceB_get);
						//form.face_length_d.disabled=true;
						}
						$("#checkboxbfor4bayB").attr("checked",true);
						//var option_cust='<option value="48">48"</option><option value="54">54"</option>';
						$('#optio_48_b').css("display","none");
						$('#optio_54_b').css("display","none");
						$('#optio_48_c').css("display","block");
						$('#optio_54_c').css("display","block");
						$('#optio_48_d').css("display","block");
						$('#optio_54_d').css("display","block");
						
					 }
					 else{
						 
					 }
					 
					 var checkcheckedb1  = $('#checkboxbfor4bayB').is(':checked');
					 if(checkcheckedb1)
					 {
						var faceB_get =$('[name="face_length_b"]').find('option:selected').text();
						var faceB_get_val =$('[name="face_length_b"]').find('option:selected').val();
						 var faceC_get =$('[name="face_length_c"]').find('option:selected').text();
						  var faceC_get_val =$('[name="face_length_c"]').find('option:selected').val();
						  var faceD_get =$('[name="face_length_d"]').find('option:selected').text();
						  var faceD_get_val =$('[name="face_length_d"]').find('option:selected').val();
						  
						
						
						//alert(faceB_get);
						//alert(faceC_get);
						//alert(faceD_get);
						//if FacelengthC not same
						//alert(faceC_get);
						//if FacelengthC not same
						
						if(faceC_get!='Custom')
						{
						//$("#checkbfor4bayBnonsame").attr("checked",true);	
							
						
						
						if(faceC_get=='8"')
						{
						
						$("#face_length_c option").filter(function() {
							return this.text == faceB_get; 
						}).attr('selected', true);
						
						
						}
						else{
							$("#face_length_c option").filter(function() {
							return this.text == faceC_get; 
						}).attr('selected', true);
						
						}
						
						}
						else{
						$("#face_length_c option").filter(function() {
							return this.text == faceB_get; 
						}).attr('selected', true);
						}
						
						
						
						//if FacelengthD not same
						
						
						if(faceD_get!='Custom')
						{
						//$("#checkbfor4bayBnonsame").attr("checked",true);	
							
						
						
						if(faceD_get=='8"')
						{
						
						$("#face_length_d option").filter(function() {
							return this.text == faceB_get; 
						}).attr('selected', true);
						
						
						}
						else{
							$("#face_length_d option").filter(function() {
							return this.text == faceD_get; 
						}).attr('selected', true);
						
						}
						
						}
						else{
						$("#face_length_d option").filter(function() {
							return this.text == faceB_get; 
						}).attr('selected', true);
						}
						
						//form.face_length_d.disabled=true;
					//var option_cust='<option value="48">48"</option><option value="54">54"</option>';
						$('#optio_48_b').css("display","none");
						$('#optio_54_b').css("display","none");
						$('#optio_48_c').css("display","block");
						$('#optio_54_c').css("display","block");
						$('#optio_48_d').css("display","block");
						$('#optio_54_d').css("display","block");
					
						$('.customsame').css("display","block");
						$('.instock').css("display","none");
					 }
					 
					 var customefaceC  = $('#customefaceC').is(':checked');
					 if(customefaceC)
					 {
						var faceC_get =$('[name="face_length_c"]').find('option:selected').text();
						var faceC_get_val =$('[name="face_length_c"]').find('option:selected').val();
						var faceD_get =$('[name="face_length_d"]').find('option:selected').text();
						var faceD_get_val =$('[name="face_length_d"]').find('option:selected').val();
						 
						
						if(faceD_get!='Custom')
						{
							if(faceD_get=='Select')
							{
								form.face_length_d.value=faceC_get_val;
								form.face_length_d.selected=faceC_get;
							//$('#face_length_d option[value="'+faceC_get_val+'"]').text(faceC_get);
							}
							else{
							form.face_length_d.value=faceD_get_val;
							$('#face_length_d option[value="'+faceD_get_val+'"]').text(faceD_get);
							}
						}
						else{
						
						form.face_length_c.value=faceC_get_val;
						$('#face_length_c option[value="'+faceC_get_val+'"]').text(faceC_get);
						//form.face_length_c.disabled=true;
						
						form.face_length_d.value=faceC_get_val;
						$('#face_length_d option[value="'+faceC_get_val+'"]').text(faceC_get);
						//form.face_length_d.disabled=true;
						}
						$("#checkboxbfor4bayC").attr("checked",true);
						//var option_cust='<option value="48">48"</option><option value="54">54"</option>';
						$('#optio_48_b').css("display","none");
						$('#optio_54_b').css("display","none");
						$('#optio_48_c').css("display","none");
						$('#optio_54_c').css("display","none");
						$('#optio_48_d').css("display","block");
						$('#optio_54_d').css("display","block");
						
					 }
					 else{
						 
					 }
					 
					 var checkcheckedb2  = $('#checkboxbfor4bayC').is(':checked');
					 if(checkcheckedb2)
					 {
						var faceC_get =$('[name="face_length_c"]').find('option:selected').text();
						var faceC_get_val =$('[name="face_length_c"]').find('option:selected').val();
						var faceD_get =$('[name="face_length_d"]').find('option:selected').text();
						var faceD_get_val =$('[name="face_length_d"]').find('option:selected').val();
						  
						//if FacelengthD not same
						if(faceC_get!='Custom')
						{
						//form.face_length_c.value=faceC_get_val;
						//$('#face_length_c option[value="'+faceC_get_val+'"').text(faceC_get);
						form.face_length_c.selected=faceC_get_val;
						}
						else{
						form.face_length_c.value=faceC_get_val;
						$('#face_length_c option[value="'+faceC_get_val+'"]').text(faceB_get);
						//form.face_length_c.disabled=true;	
						}
						//if FacelengthD not same
						
						
						if(faceD_get!='Custom')
						{
						//$("#checkbfor4bayBnonsame").attr("checked",true);	
							
						
						
						if(faceD_get=='8"')
						{
						
						$("#face_length_d option").filter(function() {
							return this.text == faceC_get; 
						}).attr('selected', true);
						
						
						}
						else{
							$("#face_length_d option").filter(function() {
							return this.text == faceD_get; 
						}).attr('selected', true);
						
						}
						
						}
						else{
						$("#face_length_d option").filter(function() {
							return this.text == faceC_get; 
						}).attr('selected', true);
						}
						 
					
					//var option_cust='<option value="48">48"</option><option value="54">54"</option>';
						$('#optio_48_b').css("display","none");
						$('#optio_54_b').css("display","none");
						$('#optio_48_c').css("display","none");
						$('#optio_54_c').css("display","none");
						$('#optio_48_d').css("display","block");
						$('#optio_54_d').css("display","block");
						
						$('.customsame').css("display","block");
						$('.instock').css("display","none");
					 }
					 
					<?php }
						?>
					 
					 
					 
					 <?php if($_REQUEST['type']=='3BAY'){
						?>
	
	               
				
	               var customefaceA  = $('#customefaceA').is(':checked');
	               
					 if(customefaceA)
					 {
						  var faceA_get =$('[name="face_length_a"]').find('option:selected').text();
						  var faceA_get_val =$('[name="face_length_a"]').find('option:selected').val();
						  var faceB_get =$('[name="face_length_b"]').find('option:selected').text();
						  var faceB_get_val =$('[name="face_length_b"]').find('option:selected').val();
						  var faceC_get =$('[name="face_length_c"]').find('option:selected').text();
						  var faceC_get_val =$('[name="face_length_c"]').find('option:selected').val();
						  
						  
						//alert(faceB_get);
						if(faceB_get!='Custom')
						{
							//alert(faceB_get);
							if(faceB_get=='Select')
							{
								form.face_length_b.value=faceA_get_val;
								form.face_length_b.selected=faceA_get;
							//$('#face_length_b option[value="'+faceA_get_val+'"]').text(faceA_get);
							}
							else{
							form.face_length_b.value=faceB_get_val;
							$('#face_length_b option[value="'+faceB_get_val+'"]').text(faceB_get);
							}
						}
						if(faceC_get!='Custom')
						{
							//alert(faceC_get);
							if(faceC_get=='Select')
							{
								form.face_length_c.value=faceA_get_val;
								form.face_length_c.selected=faceA_get;
							//$('#face_length_c option[value="'+faceA_get_val+'"]').text(faceA_get);
							}
							else{
							form.face_length_c.value=faceC_get_val;
							$('#face_length_c option[value="'+faceC_get_val+'"]').text(faceC_get);
							}
						}
						
						else{
						form.face_length_b.value=faceA_get_val;
						$('#face_length_b option[value="'+faceA_get_val+'"]').text(faceA_get);
						//form.face_length_b.disabled=true;	
						
						form.face_length_c.value=faceA_get_val;
						$('#face_length_c option[value="'+faceA_get_val+'"]').text(faceA_get);
						//form.face_length_c.disabled=true;
						
						}
						$("#checkboxbfor4bayA").attr("checked",true);
						//var option_cust='<option value="48">48"</option><option value="54">54"</option>';
						
						$('#optio_48_b').css("display","block");
						$('#optio_54_b').css("display","block");
						$('#optio_48_c').css("display","block");
						$('#optio_54_c').css("display","block");
						
						
						//$('#show_select_faceb_fora').css("display","block");
						//$('#face_length_b').css("display","none;");
						//$('#undefined').css("display","none;");
						
						//$('#show_select_faceb_fora').attr('name', 'other_amount');
						
						
						
						
					 }
					 else{
						 
					 }
					 
					 var checkcheckedb  = $('#checkboxbfor4bayA').is(':checked');
					 //alert(checkcheckedb);
					 
					 if(checkcheckedb)
					 {
						var faceA_get =$('[name="face_length_a"]').find('option:selected').text();
						var faceA_get_val =$('[name="face_length_a"]').find('option:selected').val();
						 var faceB_get =$('[name="face_length_b"]').find('option:selected').text();
						 var faceB_get_val =$('[name="face_length_b"]').find('option:selected').val();
						var faceC_get =$('[name="face_length_c"]').find('option:selected').text();
						  var faceC_get_val =$('[name="face_length_c"]').find('option:selected').val();
						  
						
						//if FacelengthB not same
						if(faceB_get!='Custom')
						{
						//$("#checkbfor4bayBnonsame").attr("checked",true);	
							
						
						
						if(faceB_get=='8"')
						{
						
						$("#face_length_b option").filter(function() {
							return this.text == faceA_get; 
						}).attr('selected', true);
						
						
						}
						else{
							$("#face_length_b option").filter(function() {
							return this.text == faceB_get; 
						}).attr('selected', true);
						
						}
						
						}
						else{
						$("#face_length_b option").filter(function() {
							return this.text == faceA_get; 
						}).attr('selected', true);
						}
						
						//alert(faceC_get);
						//if FacelengthC not same
						
						if(faceC_get!='Custom')
						{
						//$("#checkbfor4bayBnonsame").attr("checked",true);	
							
						
						
						if(faceC_get=='8"')
						{
						
						$("#face_length_c option").filter(function() {
							return this.text == faceA_get; 
						}).attr('selected', true);
						
						
						}
						else{
							$("#face_length_c option").filter(function() {
							return this.text == faceC_get; 
						}).attr('selected', true);
						
						}
						
						}
						else{
						$("#face_length_c option").filter(function() {
							return this.text == faceA_get; 
						}).attr('selected', true);
						}
						
						
						
						//if FacelengthD not same
						
						
						
						
						
						
						
						
						
						
						$('#optio_48_b').css("display","block");
						$('#optio_54_b').css("display","block");
						$('#optio_48_c').css("display","block");
						$('#optio_54_c').css("display","block");
						
						
						$('.customsame').css("display","block");
						$('.instock').css("display","none");
						
						
				
					 }
					 
					 
					 var customefaceB  = $('#customefaceB').is(':checked');
					 if(customefaceB)
					 {
						var faceB_get =$('[name="face_length_b"]').find('option:selected').text();
						var faceB_get_val =$('[name="face_length_b"]').find('option:selected').val();
						var faceC_get =$('[name="face_length_c"]').find('option:selected').text();
						var faceC_get_val =$('[name="face_length_c"]').find('option:selected').val();
						
						
						if(faceC_get!='Custom')
						{
							//alert(faceC_get);
							if(faceC_get=='Select')
							{
								form.face_length_c.value=faceB_get_val;
								form.face_length_c.selected=faceB_get;
							//$('#face_length_c option[value="'+faceB_get_val+'"]').text(faceB_get);
							}
							else{
							form.face_length_c.value=faceC_get_val;
							$('#face_length_c option[value="'+faceC_get_val+'"]').text(faceC_get);
							}
						}
						
						else{
						
						form.face_length_c.value=faceB_get_val;
						$('#face_length_c option[value="'+faceB_get_val+'"]').text(faceB_get);
						//form.face_length_c.disabled=true;
						
						}
						$("#checkboxbfor4bayB").attr("checked",true);
						//var option_cust='<option value="48">48"</option><option value="54">54"</option>';
						$('#optio_48_b').css("display","none");
						$('#optio_54_b').css("display","none");
						$('#optio_48_c').css("display","block");
						$('#optio_54_c').css("display","block");
						$('#optio_48_d').css("display","block");
						$('#optio_54_d').css("display","block");
						
					 }
					 else{
						 
					 }
					 
					 var checkcheckedb1  = $('#checkboxbfor4bayB').is(':checked');
					 if(checkcheckedb1)
					 {
						var faceB_get =$('[name="face_length_b"]').find('option:selected').text();
						var faceB_get_val =$('[name="face_length_b"]').find('option:selected').val();
						 var faceC_get =$('[name="face_length_c"]').find('option:selected').text();
						  var faceC_get_val =$('[name="face_length_c"]').find('option:selected').val();
						  var faceD_get =$('[name="face_length_d"]').find('option:selected').text();
						  var faceD_get_val =$('[name="face_length_d"]').find('option:selected').val();
						  
						
						
						//alert(faceB_get);
						//alert(faceC_get);
						//alert(faceD_get);
						//if FacelengthC not same
						//alert(faceC_get);
						//if FacelengthC not same
						
						if(faceC_get!='Custom')
						{
						//$("#checkbfor4bayBnonsame").attr("checked",true);	
							
						
						
						if(faceC_get=='8"')
						{
						
						$("#face_length_c option").filter(function() {
							return this.text == faceB_get; 
						}).attr('selected', true);
						
						
						}
						else{
							$("#face_length_c option").filter(function() {
							return this.text == faceC_get; 
						}).attr('selected', true);
						
						}
						
						}
						else{
						$("#face_length_c option").filter(function() {
							return this.text == faceB_get; 
						}).attr('selected', true);
						}
						
						
						
						//if FacelengthD not same
						
						
						
						
						//form.face_length_d.disabled=true;
					//var option_cust='<option value="48">48"</option><option value="54">54"</option>';
						$('#optio_48_b').css("display","none");
						$('#optio_54_b').css("display","none");
						$('#optio_48_c').css("display","block");
						$('#optio_54_c').css("display","block");
						
					
						$('.customsame').css("display","block");
						$('.instock').css("display","none");
					 }
					
					 
					 
					 
					 
					<? }
						?>
					 
					 
					 
					 <? if($_REQUEST['type']=='2BAY'){
						?>
	
	               
	               
				
	               var customefaceA  = $('#customefaceA').is(':checked');
	               
					 if(customefaceA)
					 {
						  var faceA_get =$('[name="face_length_a"]').find('option:selected').text();
						  var faceA_get_val =$('[name="face_length_a"]').find('option:selected').val();
						  var faceB_get =$('[name="face_length_b"]').find('option:selected').text();
						  var faceB_get_val =$('[name="face_length_b"]').find('option:selected').val();
						
						  
						//alert(faceB_get);
						if(faceB_get!='Custom')
						{
							//alert(faceB_get);
							if(faceB_get=='Select')
							{
								form.face_length_b.value=faceA_get_val;
								form.face_length_b.selected=faceA_get;
							//$('#face_length_b option[value="'+faceA_get_val+'"]').text(faceA_get);
							}
							else{
							form.face_length_b.value=faceB_get_val;
							$('#face_length_b option[value="'+faceB_get_val+'"]').text(faceB_get);
							}
						}
					
						
						else{
						form.face_length_b.value=faceA_get_val;
						$('#face_length_b option[value="'+faceA_get_val+'"]').text(faceA_get);
						//form.face_length_b.disabled=true;	
						
						}
						$("#checkboxbfor4bayA").attr("checked",true);
						//var option_cust='<option value="48">48"</option><option value="54">54"</option>';
						
						$('#optio_48_b').css("display","block");
						$('#optio_54_b').css("display","block");
						
						//$('#show_select_faceb_fora').css("display","block");
						//$('#face_length_b').css("display","none;");
						//$('#undefined').css("display","none;");
						
						//$('#show_select_faceb_fora').attr('name', 'other_amount');
						
						
						
						
					 }
					 else{
						 
					 }
					 
					 var checkcheckedb  = $('#checkboxbfor4bayA').is(':checked');
					 //alert(checkcheckedb);
					 
					 if(checkcheckedb)
					 {
						var faceA_get =$('[name="face_length_a"]').find('option:selected').text();
						var faceA_get_val =$('[name="face_length_a"]').find('option:selected').val();
						 var faceB_get =$('[name="face_length_b"]').find('option:selected').text();
						 var faceB_get_val =$('[name="face_length_b"]').find('option:selected').val();
						
						//if FacelengthB not same
						if(faceB_get!='Custom')
						{
						//$("#checkbfor4bayBnonsame").attr("checked",true);	
							
						
						
						if(faceB_get=='8"')
						{
						
						$("#face_length_b option").filter(function() {
							return this.text == faceA_get; 
						}).attr('selected', true);
						
						
						}
						else{
							$("#face_length_b option").filter(function() {
							return this.text == faceB_get; 
						}).attr('selected', true);
						
						}
						
						}
						else{
						$("#face_length_b option").filter(function() {
							return this.text == faceA_get; 
						}).attr('selected', true);
						}
						
						
						
						
						
						//if FacelengthD not same
						
						
						
						
						
						
						
						
						
						
						$('#optio_48_b').css("display","block");
						$('#optio_54_b').css("display","block");
						
						
						$('.customsame').css("display","block");
						$('.instock').css("display","none");
						
						
				
					 }
					 
					 
					 
					 
					 
					 
					 
					 
					<? }
						?>
					 
		
		
		
		
		<!-- ani code -->
		//document.getElementById('ro').innerHTML='';//DECLARING THE all price variables
        osc="<?=$_REQUEST['osCsid']; ?>"
        im_id="<?=$im_id; ?>"
		number_of_end_post=2;
		number_glass=1;
		number_center=1;
        flag=1;
		foldername="";
        imageName="";
		glassName="";
		glassName_l="";
		glassName_r="";
		glassName_a="";
		glassName_b="";
		glassName_c="";
		glassName_d="";
		light_a="";
        light_b="";
        light_c="";
		light_d="";
		leftEndPost="";
		rightEndPost="";
		centerPost="";
		anglePost="";
		leftEndPanel="";
		rightEndPanel="";
		flangeCovers="";
		roastedglass="";     /*for roasted glass */
        adjustable_name="EP5 Adjustable Brackets (Pairs)";
        make_adjustable=form.adjustable.value;
        adjust_price=0;
        facePrice=0;
        facePrice_a=0;
        facePrice_b=0;
        facePrice_c=0;
		facePrice_d=0;
		lightPrice_a=0;
        lightPrice_b=0;
        lightPrice_c=0;
		lightPrice_d=0;
        facePrice_l=0;
        facePrice_r=0;
        leftPostPrice=0;
        rightPostPrice=0;
        leftEndPanelPrice=0;
        rightEndPanelPrice=0;
        centerPostPrice=0;
        anglePostPrice=0;
        flangeCoversPrice=0;
		flangeCoversPrice2=0
		roastedglassprice=0;
		
		
		mailboxCutoutPriceTotal=0;
		mailboxCutoutPrice_a=0;
		mailboxCutoutPrice_b=0;
		mailboxCutoutPrice_c=0;
		mailboxCutoutPrice_d=0;
		
		
		mailboxCutoutName_a="";
		mailboxCutoutName_b="";
		mailboxCutoutName_c="";
		mailboxCutoutName_d="";
		
        var iscustomimg=0
		
		category_name="<?=$category_name?>";
		right_lenght_obj=form.right_length;
		left_lenght_obj=form.left_length;
		post_height_obj=form.post_height;
		face_lenght_obj=form.face_length;
		
		arc_glass_value_obj=form.arc_glass_value;
		arc_glass_obj=form.arc_glass;
		arc_glass_type_value_obj=form.arc_glass_type_value;
		endpanel_arc_glass_value_obj=form.endpanel_arc_glass_value;
		
		mailbox_cutout_obj=form.mailbox_cut;
		///alert(mailbox_cutout_obj.value);
		//mailbox_cutout_obj
		//cutout_face_a_obj
		cutout_face_a_obj=form.cutout_face_a;
		cutout_face_b_obj=form.cutout_face_b;
		cutout_face_c_obj=form.cutout_face_c;
		cutout_face_d_obj=form.cutout_face_d;
		
		
		
		
		
		face_lenght_a_obj=form.face_length_a;
		face_lenght_b_obj=form.face_length_b;
		face_lenght_c_obj=form.face_length_c;
        face_lenght_d_obj=form.face_length_d;		
		type_obj=form.type;
        //alert(form.glass_face.name);
		glass_face_obj=form.glass_face;
		corner_obj=form.rounded_corners;
		flange_covers_obj=form.flange_covers;
		
		
		flangeUnderCounter="";
		flangeUnderCounterPrice=0;
	flange_under_counter_obj=form.flange_under_counter;
	
		
		
		flange_covers2_obj=form.light_bar;
		roasted_glass_obj=form.roasted_glass;
		choose_finish_obj=form.choose_finish;
        foldername=getProductFolderName(category_name)+type_obj.value;
        if(flange_covers_obj.value=="yes"){//for post height
            flangeCovers="test";
        }            
		
		

			 if(flange_under_counter_obj.value=="yes"){
				flangeUnderCounter="test";
					} 
		
		
		
        /*this is used for check post height*/
		if(post_height_obj==null||post_height_obj=='undefine'){
			//it will take  glass_face_obj value from input that is set on the ul>li click on top both/something see line no 352
			height=glass_face_obj.value;
		}else{
			height=post_height_obj.value;
		}
        if(make_adjustable=="yes"){
               // alert(product_name_price[adjustable_name][1]);
            if(type_obj.value=="1BAY"){
                adjust_price=1*parseFloat(product_name_price[adjustable_name][1]);
            }else if(type_obj.value=="2BAY"){
                adjust_price=2*parseFloat(product_name_price[adjustable_name][1]);
            }else if(type_obj.value=="3BAY"){
                adjust_price=3*parseFloat(product_name_price[adjustable_name][1]);
            }else{
                adjust_price=4*parseFloat(product_name_price[adjustable_name][1]);
            }
        }
		/*this is used for check post height*/
		/*if category ep15 and custom post height choosen*/
		if("EP5"=='EP15'){
			if($('#customheight').is(':checked')){
				
				height=post_height_obj.value;
			}
			
		}

        leftEndPost="EP5 Left Post "+choose_finish_obj.value;
		rightEndPost="EP5 Right Post "+choose_finish_obj.value;
		if("EP5"=="EP15"){
            leftEndPost="EP5-"+height+" Left Post "+choose_finish_obj.value;
            rightEndPost="EP5-"+height+" Right Post "+choose_finish_obj.value 
//			alert(rightEndPost+leftEndPost);
        }
		//alert(leftEndPost+rightEndPost);
		//lights
		//setting for both end
        //alert(glass_face_obj.value);

		arc_glass_yn=arc_glass_obj.value;
		arc_glass_valss=arc_glass_value_obj.value;
		
		arc_glass_type_valss=arc_glass_type_value_obj.value;
		endpanel_arc=endpanel_arc_glass_value_obj.value;
		if(arc_glass_type_valss=='RD')
		{
		arc_glass_type_valss='RA';		
		}
		else{
		
		arc_glass_type_valss=arc_glass_type_value_obj.value;
		}
		//Glass CA 2"
		


		if(glass_face_obj.value==1){//I have to change here!
            if(height!="select"){
                anglePost='EP5-'+height+" Center "+(choose_finish_obj.value=="Brushed Aluminum"?"Brushed Aluminum":"Post "+choose_finish_obj.value);
            }
            if(left_lenght_obj.value!="select"){
                if(left_lenght_obj.value!="No Glass"){
                    if(height!="select"){
                       // glassName_l='EP5-'+height+' '+left_lenght_obj.value+'" Glass ';
						
						if(arc_glass_yn=='yes' && arc_glass_valss!="select" && endpanel_arc=='yes')
						{
						 glassName_l='EP5-'+height+' '+left_lenght_obj.value+'" Glass '+arc_glass_type_valss+' '+arc_glass_valss+'" Arc ';	
						}
						else{
						 glassName_l='EP5-'+height+' '+left_lenght_obj.value+'" Glass ';	
						}
                        if(corner_obj.value=="round"){
                            glassName_l+="(Radiused Corners)";
                        }else{
                            glassName_l+="(Squared Corners)";
                        }
                    }
                }else{
                    noGlass();
					flag=0;
                }
            }
            if(right_lenght_obj.value!="select"){
                if(right_lenght_obj.value!="No Glass"){
                    if(height!="select"){
                        //glassName_r='EP5-'+height+' '+right_lenght_obj.value+'" Glass ';
						
						if(arc_glass_yn=='yes' && arc_glass_valss!="select" && endpanel_arc=='yes')
						{
						 glassName_r='EP5-'+height+' '+right_lenght_obj.value+'" Glass '+arc_glass_type_valss+' '+arc_glass_valss+'" Arc ';	
						}
						else{
						 glassName_r='EP5-'+height+' '+right_lenght_obj.value+'" Glass ';	
						}
						
                        if(corner_obj.value=="round"){
                            glassName_r+="(Radiused Corners)";
                        }else{
                            glassName_r+="(Squared Corners)";
                        }
                    }
                }else{
                    noGlass();
					flag=0;
                }
            }
            
            if(roasted_glass_obj.value=="yes"){
                roastedglass="EP5-ROSTEDGL";
                //alert(roastedglass)
            }
            if(flange_covers_obj.value=="yes"){
                flangeCovers="EP5-FLANGE COVER "+type_obj.value.slice(0,1)+" BAY BOTH ENDS";
            }
            imageName="BOTHENDS";
		}//right closed end
		else if(glass_face_obj.value==2 ){
            if(height!="select"){
                anglePost='EP5-'+height+" Center "+(choose_finish_obj.value=="Brushed Aluminum"?"Brushed Aluminum":"Post "+choose_finish_obj.value);
            }
			//left_lenght_obj.value="select";
			if(right_lenght_obj.value!="select"){	
                if(right_lenght_obj.value!="No Glass"){	
                    if(height!="select"){
                        //glassName_r='EP5-'+height+' '+right_lenght_obj.value+'" Glass ';
						
						if(arc_glass_yn=='yes' && arc_glass_valss!="select" && endpanel_arc=='yes')
						{
						 glassName_r='EP5-'+height+' '+right_lenght_obj.value+'" Glass '+arc_glass_type_valss+' '+arc_glass_valss+'" Arc ';	
						}
						else{
						 glassName_r='EP5-'+height+' '+right_lenght_obj.value+'" Glass ';	
						}
						
                        if(corner_obj.value=="round"){          
                            glassName_r+="(Radiused Corners)";
                        }else{           
                            glassName_r+="(Squared Corners)";
                        }
                    }
                }else{
					
                    noGlass();
					flag=0;
                }
				if(roasted_glass_obj.value=="yes"){
				   
				   roastedglass="EP5-ROSTEDGL";
				   //alert(roastedglass)
				   }
				if(flange_covers_obj.value=="yes")
                    flangeCovers="EP5-FLANGE COVER "+type_obj.value.slice(0,1)+" BAY RIGHT END";
				
            }
                imageName="RIGHTEND";
            
		}//left closed panel
		else if(glass_face_obj.value==3){
            if(height!="select"){
                anglePost='EP5-'+height+" Center "+(choose_finish_obj.value=="Brushed Aluminum"?"Brushed Aluminum":"Post "+choose_finish_obj.value);
            }
			//right_lenght_obj.value="select";
			if(left_lenght_obj.value!="select"){
                if(left_lenght_obj.value!="No Glass"){
                    if(height!="select"){
                        //glassName_l='EP5-'+height+' '+left_lenght_obj.value+'" Glass ';   

						if(arc_glass_yn=='yes' && arc_glass_valss!="select" && endpanel_arc=='yes')
						{
						 glassName_l='EP5-'+height+' '+left_lenght_obj.value+'" Glass '+arc_glass_type_valss+' '+arc_glass_valss+'" Arc ';	
						}
						else{
						 glassName_l='EP5-'+height+' '+left_lenght_obj.value+'" Glass ';	
						}
						
                        anglePost='EP5-'+height+" Center "+(choose_finish_obj.value=="Brushed Aluminum"?"Brushed Aluminum":"Post "+choose_finish_obj.value);
                        if(corner_obj.value=="round"){
                            glassName_l+="(Radiused Corners)";              
                        }
                        else{
                            glassName_l+="(Squared Corners)";               
                        }
                    }
                }else{
					noGlass();
					flag=0;
                }
				if(roasted_glass_obj.value=="yes"){
				   roastedglass="EP5-ROSTEDGL";
				   //alert(roastedglass)
                }
                if(flange_covers_obj.value=="yes"){
                    flangeCovers="EP5-FLANGE COVER "+type_obj.value.slice(0,1)+" BAY LEFT END";
                }
    				
			}	
			else{
				//leftEndPanel="EP5 Left End"+("EP5"=="EP11"?" Panel":"");				
			}
            imageName="LEFTEND";
		}
		//no closed panel
		else if(glass_face_obj.value==4){
			//right_lenght_obj.value="select";
			//left_lenght_obj.value="select";
			if(height!="select"){
				if(flange_covers_obj.value=="yes"){
					flangeCovers="EP5-FLANGE COVER "+type_obj.value.slice(0,1)+" BAY NO END";
				}
				if(roasted_glass_obj.value=="yes"){
				   
				   roastedglass="EP5-ROSTEDGL";
				   //alert(roastedglass)
				   }
			}
            glassName_l="";
			glassName_r="";
			anglePost="";			
			leftEndPanel="";
			rightEndPanel=""; 
            imageName="NOENDS";           		
		}   
        
		if(type_obj.value=="4BAY"){
            if(face_lenght_a_obj.value == 'select' || face_lenght_b_obj.value == 'select' || face_lenght_c_obj.value == 'select' || face_lenght_d_obj.value == 'select'){
                // form.light_bar.value="select";
                // form.light_bar.selected="Select";
            }
            var chk_gl=false;
            if(glass_face_obj.value==4){
                if(face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass' || face_lenght_d_obj.value == 'No Glass'){
                    chk_gl=true;
                }else{
                    chk_gl=false;
                    if(face_lenght_a_obj.value>42||face_lenght_b_obj.value>42||face_lenght_c_obj.value>42||face_lenght_d_obj.value>42){
                        wt=1.65;
                    }else{
                        wt=1;
                    }
                }
            }else if(glass_face_obj.value==3){
                if(face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass' || face_lenght_d_obj.value == 'No Glass' || left_lenght_obj.value=='No Glass'){
                    chk_gl=true;
                }else{
                    chk_gl=false;
                    if(face_lenght_a_obj.value>42||face_lenght_b_obj.value>42||face_lenght_c_obj.value>42||face_lenght_d_obj.value>42 || left_lenght_obj.value>42){
                        wt=1.65;
                    }else{
                        wt=1;
                    }
                }
            }else if(glass_face_obj.value==2){
                if(face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass' || face_lenght_d_obj.value == 'No Glass' || right_lenght_obj.value=='No Glass'){
                    chk_gl=true;
                }else{
                    chk_gl=false;
                    if(face_lenght_a_obj.value>42||face_lenght_b_obj.value>42||face_lenght_c_obj.value>42||face_lenght_d_obj.value>42 || right_lenght_obj.value>42){
                        wt=1.65;
                    }else{
                        wt=1;
                    }
                }
            }else if(glass_face_obj.value==1){
                if(face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass' || face_lenght_d_obj.value == 'No Glass' || left_lenght_obj.value=='No Glass' || right_lenght_obj.value=='No Glass'){
                    chk_gl=true;
                }else{
                    chk_gl=false;
                    if(face_lenght_a_obj.value>42||face_lenght_b_obj.value>42||face_lenght_c_obj.value>42||face_lenght_d_obj.value>42 || left_lenght_obj.value>42 || right_lenght_obj.value>42){
                        wt=1.65;
                    }else{
                        wt=1;
                    }
                }
            }
            if(chk_gl){
                form.light_bar.value="no";
                form.light_bar.selected="No";
                form.light_bar.disabled=true;
                roasted_glass_obj.value="no";
                roasted_glass_obj.selected="No";
                roasted_glass_obj.disabled=true;
            }else{
                form.light_bar.disabled=false;
                roasted_glass_obj.disabled=false;
            }
        }
        if(type_obj.value=="3BAY"){
            if(face_lenght_a_obj.value == 'select' || face_lenght_b_obj.value == 'select' || face_lenght_c_obj.value == 'select'){
                // form.light_bar.value="select";
                // form.light_bar.selected="Select";
            }
            var chk_gl=false;
            if(glass_face_obj.value==4){
                if(face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass'){
                    chk_gl=true;
                }else{
                    chk_gl=false;
                    if(face_lenght_a_obj.value>42||face_lenght_b_obj.value>42||face_lenght_c_obj.value>42){
                        wt=1.65;
                    }else{
                        wt=1;
                    }
                }
            }else if(glass_face_obj.value==3){
                if(face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass' || left_lenght_obj.value=='No Glass'){
                    chk_gl=true;
                }else{
                    chk_gl=false;
                    if(face_lenght_a_obj.value>42||face_lenght_b_obj.value>42||face_lenght_c_obj.value>42 || left_lenght_obj.value>42){
                        wt=1.65;
                    }else{
                        wt=1;
                    }
                }
            }else if(glass_face_obj.value==2){
                if(face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass' || right_lenght_obj.value=='No Glass'){
                    chk_gl=true;
                }else{
                    chk_gl=false;
                    if(face_lenght_a_obj.value>42||face_lenght_b_obj.value>42||face_lenght_c_obj.value>42 || right_lenght_obj.value>42){
                        wt=1.65;
                    }else{
                        wt=1;
                    }
                }
            }else if(glass_face_obj.value==1){
                if(face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass' || left_lenght_obj.value=='No Glass' || right_lenght_obj.value=='No Glass'){
                    chk_gl=true;
                }else{
                    chk_gl=false;
                    if(face_lenght_a_obj.value>42||face_lenght_b_obj.value>42||face_lenght_c_obj.value>42 || left_lenght_obj.value>42 || right_lenght_obj.value>42){
                        wt=1.65;
                    }else{
                        wt=1;
                    }
                }
            }
            if(chk_gl){
                form.light_bar.value="no";
                form.light_bar.selected="No";
                form.light_bar.disabled=true;
                roasted_glass_obj.value="no";
                roasted_glass_obj.selected="No";
                roasted_glass_obj.disabled=true;
            }else{
                form.light_bar.disabled=false;
                roasted_glass_obj.disabled=false;
            }
        }
        if(type_obj.value=="2BAY"){
            if(face_lenght_a_obj.value == 'select' || face_lenght_b_obj.value == 'select'){
                // form.light_bar.value="select";
                // form.light_bar.selected="Select";
            }
            var chk_gl=false;
            if(glass_face_obj.value==4){
                if(face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass'){
                    chk_gl=true;
                }else{
                    chk_gl=false;
                    if(face_lenght_a_obj.value>42 || face_lenght_b_obj.value>42){
                        wt=1.65;
                    }else{
                        wt=1;
                    }
                }
            }else if(glass_face_obj.value==3){
                if(face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || left_lenght_obj.value=='No Glass'){
                    chk_gl=true;
                }else{
                    chk_gl=false;
                    if(face_lenght_a_obj.value>42 || face_lenght_b_obj.value>42 || left_lenght_obj.value>42){
                        wt=1.65;
                    }else{
                        wt=1;
                    }
                }
            }else if(glass_face_obj.value==2){
                if(face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || right_lenght_obj.value=='No Glass'){
                    chk_gl=true;
                }else{
                    chk_gl=false;
                    if(face_lenght_a_obj.value>42 || face_lenght_b_obj.value>42 || right_lenght_obj.value>42){
                        wt=1.65;
                    }else{
                        wt=1;
                    }
                }
            }else if(glass_face_obj.value==1){
                if(face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || left_lenght_obj.value=='No Glass' || right_lenght_obj.value=='No Glass'){
                    chk_gl=true;
                }else{
                    chk_gl=false;
                    if(face_lenght_a_obj.value>42 || face_lenght_b_obj.value>42 || left_lenght_obj.value>42 || right_lenght_obj.value>42){
                        wt=1.65;
                    }else{
                        wt=1;
                    }
                }
            }
            if(chk_gl){
                form.light_bar.value="no";
                form.light_bar.selected="No";
                form.light_bar.disabled=true;
                roasted_glass_obj.value="no";
                roasted_glass_obj.selected="No";
                roasted_glass_obj.disabled=true;
            }else{
                form.light_bar.disabled=false;
                roasted_glass_obj.disabled=false;
            }
        }
        if(type_obj.value=="1BAY"){
            if(face_lenght_obj.value == 'select'){
                // form.light_bar.value="select";
                // form.light_bar.selected="Select";
            }
            var chk_gl=false;
            if(glass_face_obj.value==4){
                if(face_lenght_obj.value == 'No Glass'){
                    chk_gl=true;
                }else{
                    chk_gl=false;
                    if(face_lenght_obj.value>42){
                        wt=1.65;
                    }else{
                        wt=1;
                    }
                }
            }else if(glass_face_obj.value==3){
                if(face_lenght_obj.value == 'No Glass' || left_lenght_obj.value=='No Glass'){
                    chk_gl=true;
                }else{
                    chk_gl=false;
                    if(face_lenght_obj.value>42 || left_lenght_obj.value>42){
                        wt=1.65;
                    }else{
                        wt=1;
                    }
                }
            }else if(glass_face_obj.value==2){
                if(face_lenght_obj.value == 'No Glass' || right_lenght_obj.value=='No Glass'){
                    chk_gl=true;
                }else{
                    chk_gl=false;
                    if(face_lenght_obj.value>42 || right_lenght_obj.value>42){
                        wt=1.65;
                    }else{
                        wt=1;
                    }
                }
            }else if(glass_face_obj.value==1){
                if(face_lenght_obj.value == 'No Glass' || left_lenght_obj.value=='No Glass' || right_lenght_obj.value=='No Glass'){
                    chk_gl=true;
                }else{
                    chk_gl=false;
                    if(face_lenght_obj.value>42 || left_lenght_obj.value>42 || right_lenght_obj.value>42){
                        wt=1.65;
                    }else{
                        wt=1;
                    }
                }
            }
            if(chk_gl){
                form.light_bar.value="no";
                form.light_bar.selected="No";
                form.light_bar.disabled=true;
                roasted_glass_obj.value="no";
                roasted_glass_obj.selected="No";
                roasted_glass_obj.disabled=true;
            }else{
                form.light_bar.disabled=false;
                roasted_glass_obj.disabled=false;
            }
        }
        
		
		
			//arc_glass_value
			//arc_glass
		
		//arc_glass_value_obj=form.arc_glass_value;
		//arc_glass_obj=form.arc_glass;
		
		arc_glass_yn=arc_glass_obj.value;
		arc_glass_valss=arc_glass_value_obj.value;
		
		
		mailbox_cutout_yn=mailbox_cutout_obj.value;
		//cutout_face_a_obj	
		//mailbox_cutout_yn
		
		
		
		
		
		if(face_lenght_obj!=null&&face_lenght_obj.value!="select"){
            if(face_lenght_obj.value!="No Glass"){
    			if("EP5"=="EP5"||"EP5"=="EP15"){
                    if(height!="select"){
						
						
						if(arc_glass_yn=='yes' && arc_glass_valss!="select")
						{
						glassName='EP5-'+height+' '+face_lenght_obj.value+'" Glass '+arc_glass_type_valss+' '+arc_glass_valss+'" Arc '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
						else{
						glassName='EP5-'+height+' '+face_lenght_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
						
                       // glassName='EP5-'+height+' '+face_lenght_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");
						
					if(mailbox_cutout_yn=='yes' && cutout_face_a_obj.value!="no")
					{
					mailboxCutoutName_a="EP5-MAILBOX CUTOUT";	
					
							
					}
					
						
                    }
                    if(flange_covers2_obj.value=="yes"){
                        light_a="EP5-"+face_lenght_obj.value+"LYT";
                    }
                }else{
    				//glassName='EP5 '+face_lenght_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");
					if(arc_glass_yn=='yes' && arc_glass_valss!="select")
						{
						glassName='EP5 '+face_lenght_obj.value+'" Glass '+arc_glass_type_valss+' '+arc_glass_valss+'" Arc '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
						else{
						glassName='EP5 '+face_lenght_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
					
					
				    if(flange_covers2_obj.value=="yes"){
                        light_a="EP5-"+face_lenght_obj.value+"LYT";
                    }
                }
            }else{
			    //for seting if no glass selected
                flag=0;
            }
			// alert(glassName);
        }
		// alert(glassName);
		if(face_lenght_a_obj!=null && face_lenght_a_obj.value!="select"){
            if(face_lenght_a_obj.value!="No Glass"){
			    if("EP5"=="EP5"||"EP5"=="EP15"){
                    if(height!="select"){
                        //glassName_a='EP5-'+height+' '+face_lenght_a_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");
						if(arc_glass_yn=='yes' && arc_glass_valss!="select")
						{
						glassName_a='EP5-'+height+' '+face_lenght_a_obj.value+'" Glass '+arc_glass_type_valss+' '+arc_glass_valss+'" Arc '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
						else{
						glassName_a='EP5-'+height+' '+face_lenght_a_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
						
							
						if(mailbox_cutout_yn=='yes' && cutout_face_a_obj.value!="no")
						{
						mailboxCutoutName_a="EP5-MAILBOX CUTOUT";	
						
						}
                    }
                    if(flange_covers2_obj.value=="yes"){
                        light_a="EP5-"+face_lenght_a_obj.value+"LYT";
                    }
			    }else{
                  //  glassName_a='EP5 '+face_lenght_a_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");
					
					if(arc_glass_yn=='yes' && arc_glass_valss!="select")
						{
						  glassName_a='EP5 '+face_lenght_a_obj.value+'" Glass '+arc_glass_type_valss+' '+arc_glass_valss+'" Arc '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
						else{
						  glassName_a='EP5 '+face_lenght_a_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
					
					
                    if(flange_covers2_obj.value=="yes"){
                        light_a="EP5-"+face_lenght_a_obj.value+"LYT";
                    }
			    }
            }
            else{
               flag=0;
            }			
		}
		if(face_lenght_b_obj!=null && face_lenght_b_obj.value!="select"){
		    if(face_lenght_b_obj.value!="No Glass"){
			    if("EP5"=="EP5"||"EP5"=="EP15"){
                    if(height!="select"){
				        //glassName_b='EP5-'+height+' '+face_lenght_b_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");
					if(arc_glass_yn=='yes' && arc_glass_valss!="select")
						{
						glassName_b='EP5-'+height+' '+face_lenght_b_obj.value+'" Glass '+arc_glass_type_valss+' '+arc_glass_valss+'" Arc '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
						else{
						glassName_b='EP5-'+height+' '+face_lenght_b_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}	
						
						
						if(mailbox_cutout_yn=='yes' && cutout_face_b_obj.value!="no")
						{
						mailboxCutoutName_b="EP5-MAILBOX CUTOUT";	
						
						}
                    }
				    if(flange_covers2_obj.value=="yes"){
	                   light_b="EP5-"+face_lenght_b_obj.value+"LYT";
				    }
			    }else{
				    //glassName_b='EP5 '+face_lenght_b_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");
					
						if(arc_glass_yn=='yes' && arc_glass_valss!="select")
						{
						  glassName_b='EP5 '+face_lenght_b_obj.value+'" Glass '+arc_glass_type_valss+' '+arc_glass_valss+'" Arc '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
						else{
						  glassName_b='EP5 '+face_lenght_b_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}	
					
					
				    if(flange_covers2_obj.value=="yes"){
	                    light_b="EP5-"+face_lenght_b_obj.value+"LYT";
                    }
	            }
				
            }
            else{
                flag=0;
            }
		}
		if(face_lenght_c_obj!=null && face_lenght_c_obj.value!="select"){
		    if(face_lenght_c_obj.value!="No Glass"){
			    if("EP5"=="EP5"||"EP5"=="EP15"){
                    if(height!="select"){
				        //glassName_c='EP5-'+height+' '+face_lenght_c_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");
					if(arc_glass_yn=='yes' && arc_glass_valss!="select")
						{
						glassName_c='EP5-'+height+' '+face_lenght_c_obj.value+'" Glass '+arc_glass_type_valss+' '+arc_glass_valss+'" Arc '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
						else{
						glassName_c='EP5-'+height+' '+face_lenght_c_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
				        	
						  
						if(mailbox_cutout_yn=='yes' && cutout_face_c_obj.value!="no")
						{
						mailboxCutoutName_c="EP5-MAILBOX CUTOUT";	
						
						
						}
						
                    }
				    if(flange_covers2_obj.value=="yes"){
	                   light_c="EP5-"+face_lenght_c_obj.value+"LYT";
				    }  
			    }else{
				    //glassName_c='EP5 '+face_lenght_c_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");
					if(arc_glass_yn=='yes' && arc_glass_valss!="select")
						{
						glassName_c='EP5 '+face_lenght_c_obj.value+'" Glass '+arc_glass_type_valss+' '+arc_glass_valss+'" Arc '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
						else{
						glassName_c='EP5 '+face_lenght_c_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
					
				    if(flange_covers2_obj.value=="yes"){
	                    light_c="EP5-"+face_lenght_c_obj.value+"LYT";
                    }				
	       		}
				/*ani code */
				
            }
            else{
               flag=0;
            }
			
		}
        if(face_lenght_d_obj!=null && face_lenght_d_obj.value!="select"){
            if(face_lenght_d_obj.value!="No Glass"){
                if("EP5"=="EP5"||"EP5"=="EP15"){
                    if(height!="select"){
                        //glassName_d='EP5-'+height+' '+face_lenght_d_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");
					
						if(arc_glass_yn=='yes' && arc_glass_valss!="select")
						{
						 glassName_d='EP5-'+height+' '+face_lenght_d_obj.value+'" Glass '+arc_glass_type_valss+' '+arc_glass_valss+'" Arc '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
						else{
						 glassName_d='EP5-'+height+' '+face_lenght_d_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}	
						
						
						if(mailbox_cutout_yn=='yes' && cutout_face_d_obj.value!="no")
						{
						mailboxCutoutName_d="EP5-MAILBOX CUTOUT";	
						
						}
                    }
					if(flange_covers2_obj.value=="yes"){
	                    light_d="EP5-"+face_lenght_d_obj.value+"LYT";
				    } 
                }else{
    				//glassName_d='EP5 '+face_lenght_d_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						if(arc_glass_yn=='yes' && arc_glass_valss!="select")
						{
						glassName_d='EP5 '+face_lenght_d_obj.value+'" Glass '+arc_glass_type_valss+' '+arc_glass_valss+'" Arc '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");		
						}
						else{
						glassName_d='EP5 '+face_lenght_d_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");		
						}


					if(flange_covers2_obj.value=="yes"){
	                light_d="EP5-"+face_lenght_d_obj.value+"LYT";
                }
			}
            
        }else{
            flag=0;
        }
	}
	if(post_height_obj!=null){
    	if("EP5"=="EP5"){
            if(height!="select"){
			    leftEndPost="EP5-"+height+" End Post "+choose_finish_obj.value;
			    rightEndPost="EP5-"+height+" End Post "+choose_finish_obj.value;
            }
		}
	}
	if(type_obj!=null){
		if(type_obj.value=="4BAY"){
			if("EP5"=="EP5"||"EP5"=="EP15"){
                    if(height!="select"){
					   centerPost="EP5-"+height+" Center "+(choose_finish_obj.value=="Brushed Aluminum"?"Brushed Aluminum":"Post "+choose_finish_obj.value);
                    }

				}else{

				    new_name=category_name

                    if(category_name == 'EP22'){

                        new_name='EP21'

                    }

					centerPost=new_name+" Center Post "+choose_finish_obj.value;

				}
					}	
			if(type_obj.value=="3BAY"||type_obj.value=="2BAY"){
				if("EP5"=="EP5"||"EP5"=="EP15"){
                    if(height!="select"){
					   centerPost="EP5-"+height+" Center "+(choose_finish_obj.value=="Brushed Aluminum"?"Brushed Aluminum":"Post "+choose_finish_obj.value);
                    }
				}
				
				else{
				    new_name=category_name
                    if(category_name == 'EP22'){
                        new_name='EP21'
                    }
					centerPost=new_name+" Center Post "+choose_finish_obj.value;
				}
				
			}
		}
        
        if("EP5"=="EP15"){
            imageName="BOTHENDS";
        }
        if(corner_obj.value!="round"){
            imageName="NORAD"+imageName;
        }
        if(flag==0){
            glassName="";
    		glassName_l="";
    		glassName_r="";
    		glassName_a="";
    		glassName_b="";
    		glassName_c="";
			glassName_d="";
			
			
			mailboxCutoutName_a="";
			mailboxCutoutName_b="";
			mailboxCutoutName_c="";
			mailboxCutoutName_d="";
			light_a="";
			light_b="";
			light_c="";
			light_d="";
            imageName=imageName.substr(0, 5)=="NORAD"?imageName.substr(5, imageName.lenght):imageName;
			
        }
		
        if(choose_finish_obj.value=="Powder Coated Black"){
            imageName="BLACK"+imageName;
        }
		
		if(choose_finish_obj.value=="Brushed Aluminum") {
			
				imageName="ALMN"+imageName;
			
		}
		
        if(flag==0){
             imageName="NOGL"+imageName;
        }
		
       
	   if(flange_covers2_obj.value=="yes" && flag!=0){
	   
	   imageName="LYT"+imageName;
	   
	   }
	   if( flange_covers2_obj.value=="yes" && flag==0){
             imageName=imageName.substr(0, 20)
        }
	
	   
/*	  $('select[name="face_length"]').change(function() {
    if('No Glass' == $(this).val() ) {
        $('#checkboxA').hide(); // make sure all divs are hidden
         // show the right one
    } else{
	$('#checkboxA').show();
} 
});
 $('select[name="face_length_a"]').change(function() {
    if('No Glass' == $(this).val() ) {
        $('#checkboxA').hide(); // make sure all divs are hidden
        //$('#checkboxA').show(); // show the right one
    } else{
	$('#checkboxA').show();
} 
}); 
$('select[name="face_length_b"]').change(function() {
    if('No Glass' == $(this).val() ) {
        $('#checkboxA').hide(); // make sure all divs are hidden
        //$('#checkboxA').show(); // show the right one
    } else{
	$('#checkboxA').show();
} 
});
 $('select[name="face_length_c"]').change(function() {
    if('No Glass' == $(this).val() ) {
        $('#checkboxA').hide(); // make sure all divs are hidden
        //$('#checkboxA').show(); // show the right one
    }else{
	$('#checkboxA').show();
}  
});
 $('select[name="face_length_d"]').change(function() {
    if('No Glass' == $(this).val() ) {
        $('#checkboxA').hide(); // make sure all divs are hidden
        //$('#checkboxA').show(); // show the right one
    } else{
	$('#checkboxA').show();
} 
});*/

	  $('select[name="face_length"]').change(function() {
    if('No Glass' == $(this).val() ) {
        $('#checkbox2').attr("disabled", true); // make sure all divs are hidden
        $("#checkbox2").attr("checked", false);
    } else{
	$('#checkbox2').attr("disabled", false);
} 
});
 $('select[name="face_length_a"]').change(function() {
    if('No Glass' == $(this).val() ) {
         $('#checkbox2').attr("disabled", true); // make sure all divs are hidden
        $("#checkbox2").attr("checked", false);
    } else{
	$('#checkbox2').attr("disabled", false);
} 
}); 
$('select[name="face_length_b"]').change(function() {
    if('No Glass' == $(this).val() ) {
	 $('#checkbox2').attr("disabled", true); // make sure all divs are hidden
        $("#checkbox2").attr("checked", false);
        //$('#checkboxA').hide(); // make sure all divs are hidden
        //$('#checkboxA').show(); // show the right one
    } else{
	$('#checkbox2').attr("disabled", false);
} 
});
 $('select[name="face_length_c"]').change(function() {
    if('No Glass' == $(this).val() ) {
         $('#checkbox2').attr("disabled", true); // make sure all divs are hidden
        $("#checkbox2").attr("checked", false);
    }else{
	$('#checkbox2').attr("disabled", false);
}  
});
 $('select[name="face_length_d"]').change(function() {
    if('No Glass' == $(this).val() ) {
         $('#checkbox2').attr("disabled", true); // make sure all divs are hidden
        $("#checkbox2").attr("checked", false);
    } else{
	$('#checkbox2').attr("disabled", false);
} 
});


 

 
	   //if(iscustomimg==1){
//			if(category_name=='EP11'){
//				imageName='V'+imageName;
//			}
//			if(category_name=='EP12'){
//				imageName='VERT'+imageName;
//			}
//			
//	   }
	 		if(category_name=='EP11'){
				imageName='V'+imageName;
				
				
			}
			if(category_name=='EP12'){
				imageName='VERT'+imageName;
			}
    //alert(glassName_a);	alert( imageName);    
       /*alert(glassName_l);
        alert(glassName_r);
        alert(glassName_a);
        alert(glassName_b);
        alert(glassName_c);
        alert(leftEndPost);
		alert(leftEndPanel);
		alert(rightEndPanel);
        alert(rightEndPost);
        alert(centerPost);
        alert(anglePost);*/
       //alert(flag);
	  
		var query_s = "";
		str="";
		if(height!="select"){
            if(!glassName.indexOf("select")){
                if(glassName!=""){
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[glassName][0]+'" />';
                    facePrice=parseFloat(product_name_price[glassName][1]);
                }
            }else{

            }
                
		
		if(glassName_l!=""){
			str+='<input type="hidden" name="products_id[]" value="'+product_name_price[glassName_l][0]+'" />';
            facePrice_l=parseFloat(product_name_price[glassName_l][1]);
            if(left_lenght_obj.value<=42 && wt!=1){
                facePrice_l=Math.round(facePrice_l*wt);
                $("#c_glass_left_mult").val(wt);
            }
		}
		if(glassName_r!=""){
			str+='<input type="hidden" name="products_id[]" value="'+product_name_price[glassName_r][0]+'" />';
            facePrice_r=parseFloat(product_name_price[glassName_r][1]);
            if(right_lenght_obj.value<=42 && wt!=1){
                facePrice_r=Math.round(facePrice_r*wt);
                $("#c_glass_right_mult").val(wt);
            }
		}
        if(glassName!=""){
            str+='<input type="hidden" name="products_id[]" value="'+product_name_price[glassName][0]+'" />';
            facePrice_a=parseFloat(product_name_price[glassName][1]);
            if(face_lenght_obj.value<=42 && wt!=1){
                facePrice_a=Math.round(facePrice_a*wt);
                $("#c_glass_mult").val(wt);
            }
        }
		if(glassName_a!=""){
			str+='<input type="hidden" name="products_id[]" value="'+product_name_price[glassName_a][0]+'" />';
            facePrice_a=parseFloat(product_name_price[glassName_a][1]);
            if(face_lenght_a_obj.value<=42 && wt!=1){
                facePrice_a=Math.round(facePrice_a*wt);
                $("#c_glass_a_mult").val(wt);
            }
		}
		
		if(glassName_b!=""){
			str+='<input type="hidden" name="products_id[]" value="'+product_name_price[glassName_b][0]+'" />';
            facePrice_b=parseFloat(product_name_price[glassName_b][1]);
            if(face_lenght_b_obj.value<=42 && wt!=1){
                facePrice_b=Math.round(facePrice_b*wt);
                $("#c_glass_b_mult").val(wt);
            }
		}
		if(glassName_c!=""){
			str+='<input type="hidden" name="products_id[]" value="'+product_name_price[glassName_c][0]+'" />';
            facePrice_c=parseFloat(product_name_price[glassName_c][1]);
            if(face_lenght_c_obj.value<=42 && wt!=1){
                facePrice_c=Math.round(facePrice_c*wt);
                $("#c_glass_c_mult").val(wt);
            }
		}
		if(glassName_d!=""){
            str+='<input type="hidden" name="products_id[]" value="'+product_name_price[glassName_d][0]+'" />';
            facePrice_d=parseFloat(product_name_price[glassName_d][1]);
            if(face_lenght_d_obj.value<=42 && wt!=1){
                facePrice_d=Math.round(facePrice_d*wt);
                $("#c_glass_d_mult").val(wt);
            }
		}
		
		
		if(mailboxCutoutName_a!=""){
			//str+='<input type="hidden" name="products_id[]" value="'+product_name_price[light_d][0]+'" />';
			str+='<input type="hidden" name="products_id[]" value="'+product_name_price[mailboxCutoutName_a][0]+'" />';
				
                mailboxCutoutPrice_a=parseFloat(product_name_price[mailboxCutoutName_a][1]);
				
				 $("#c_glass_a_val_maibox_cut").val('MAILBOX');
				 $('#c_glass_a_maibox_cut').val(product_name_price[mailboxCutoutName_a][0]);
					
		}
		
		if(mailboxCutoutName_b!=""){
			//str+='<input type="hidden" name="products_id[]" value="'+product_name_price[light_d][0]+'" />';
			str+='<input type="hidden" name="products_id[]" value="'+product_name_price[mailboxCutoutName_b][0]+'" />';
				
                mailboxCutoutPrice_b=parseFloat(product_name_price[mailboxCutoutName_b][1]);
				
				 $("#c_glass_b_val_maibox_cut").val('MAILBOX');
				 $('#c_glass_b_maibox_cut').val(product_name_price[mailboxCutoutName_b][0]);
					
		}
		
		if(mailboxCutoutName_c!=""){
			//str+='<input type="hidden" name="products_id[]" value="'+product_name_price[light_d][0]+'" />';
			str+='<input type="hidden" name="products_id[]" value="'+product_name_price[mailboxCutoutName_c][0]+'" />';
				
                mailboxCutoutPrice_c=parseFloat(product_name_price[mailboxCutoutName_c][1]);
				
				 $("#c_glass_c_val_maibox_cut").val('MAILBOX');
				 $('#c_glass_c_maibox_cut').val(product_name_price[mailboxCutoutName_c][0]);
					
		}
		
		
		if(mailboxCutoutName_d!=""){
			//str+='<input type="hidden" name="products_id[]" value="'+product_name_price[light_d][0]+'" />';
			str+='<input type="hidden" name="products_id[]" value="'+product_name_price[mailboxCutoutName_d][0]+'" />';
				
                mailboxCutoutPrice_d=parseFloat(product_name_price[mailboxCutoutName_d][1]);
				
				 $("#c_glass_d_val_maibox_cut").val('MAILBOX');
				 $('#c_glass_d_maibox_cut').val(product_name_price[mailboxCutoutName_d][0]);
					
		}
		
		
		if(light_a!=""){
			//str+='<input type="hidden" name="products_id[]" value="'+product_name_price[light_d][0]+'" />';
			str+='<input type="hidden" name="products_id[]" value="'+product_name_price[light_a][0]+'" />';
				
                lightPrice_a=parseFloat(product_name_price[light_a][1]);
				//alert(lightPrice_a)
		}
		if(light_b!=""){
			//str+='<input type="hidden" name="products_id[]" value="'+product_name_price[light_d][0]+'" />';
			str+='<input type="hidden" name="products_id[]" value="'+product_name_price[light_b][0]+'" />';
				
               lightPrice_b=parseFloat(product_name_price[light_b][1]);
		}
		if(light_c!=""){
			//str+='<input type="hidden" name="products_id[]" value="'+product_name_price[light_d][0]+'" />';
			str+='<input type="hidden" name="products_id[]" value="'+product_name_price[light_c][0]+'" />';
				
               lightPrice_c=parseFloat(product_name_price[light_c][1]);
		}
		if(light_d!=""){
			//str+='<input type="hidden" name="products_id[]" value="'+product_name_price[light_d][0]+'" />';
			str+='<input type="hidden" name="products_id[]" value="'+product_name_price[light_d][0]+'" />';
				
               lightPrice_d=parseFloat(product_name_price[light_d][1]);
		}
		if(leftEndPost!=""){
			str+='<input type="hidden" name="products_id[]" value="'+product_name_price[leftEndPost][0]+'" />';
            leftPostPrice=parseFloat(product_name_price[leftEndPost][1]);
           
		}
		if(rightEndPost!=""){
			str+='<input type="hidden" name="products_id[]" value="'+product_name_price[rightEndPost][0]+'" />';
            rightPostPrice=parseFloat(product_name_price[rightEndPost][1]);
		}
	
		if(centerPost!=""){
		  i=0;
          j=0;
           if(type_obj.value=="4BAY"){
		      j=3;		      
		  }
		  if(type_obj.value=="3BAY"){
		      j=2;		      
		  }
          if(type_obj.value=="2BAY"){
		      j=1;		      
		  }
          if("EP5"=="EP22"){
                centerPost=centerPost.replace("EP5", "EP11");
				
            }if("EP5"=="EP12"){
                centerPost=centerPost.replace(category_name, "EP12");
				
            }
          while(i<j){
            if(product_name_price[centerPost].length==2){
		      str+='<input type="hidden" name="products_id[]" value="'+product_name_price[centerPost][0]+'" />';
              centerPostPrice=centerPostPrice+parseFloat(product_name_price[centerPost][1]);
            }
            i++;      
          }
		}
        
		if(anglePost!="" && "EP5"=="EP5"){
            i=0;
            j=0;
            if(glass_face_obj.value==1){
                j=2;
            }
            if(glass_face_obj.value==2){
                j=1;
            }
            if(glass_face_obj.value==3){
                j=1;
            }
            if(glass_face_obj.value==4){
                j=0;
            }
            while(i<j){
                str+='<input type="hidden" name="products_id[]" value="'+product_name_price[anglePost][0]+'" />';
                anglePostPrice=anglePostPrice+parseFloat(product_name_price[anglePost][1]);
                i++;
            }
		  }
        }
        if(make_adjustable=="yes"){
            if(type_obj.value=="1BAY"){
                str+='<input type="hidden" name="products_id[]" value="'+product_name_price[adjustable_name][0]+'" />';
            }else if(type_obj.value=="2BAY"){
                str+='<input type="hidden" name="products_id[]" value="'+product_name_price[adjustable_name][0]+'" />';
                str+='<input type="hidden" name="products_id[]" value="'+product_name_price[adjustable_name][0]+'" />';
            }else if(type_obj.value=="3BAY"){
                str+='<input type="hidden" name="products_id[]" value="'+product_name_price[adjustable_name][0]+'" />';
                str+='<input type="hidden" name="products_id[]" value="'+product_name_price[adjustable_name][0]+'" />';
                str+='<input type="hidden" name="products_id[]" value="'+product_name_price[adjustable_name][0]+'" />';
            }else{
                str+='<input type="hidden" name="products_id[]" value="'+product_name_price[adjustable_name][0]+'" />';
                str+='<input type="hidden" name="products_id[]" value="'+product_name_price[adjustable_name][0]+'" />';
                str+='<input type="hidden" name="products_id[]" value="'+product_name_price[adjustable_name][0]+'" />';
                str+='<input type="hidden" name="products_id[]" value="'+product_name_price[adjustable_name][0]+'" />';
            }
        }
		if(leftEndPanel!=""){
			str+='<input type="hidden" name="products_id[]" value="'+product_name_price[leftEndPanel][0]+'" />';
			leftEndPanelPrice=parseFloat(product_name_price[leftEndPanel][1]);
		}
		if(rightEndPanel!=""){
			str+='<input type="hidden" name="products_id[]" value="'+product_name_price[rightEndPanel][0]+'" />';
            rightEndPanelPrice=parseFloat(product_name_price[rightEndPanel][1]);
		} 
		/*frosteg glass by yogesh*/
		if(roastedglass != ""){
            if("EP5"=="EP5"){
                if(type_obj.value=="1BAY"){
                    if(glass_face_obj.value==1){
                        if(roasted_glass_obj.value=="yes"){
				            //flangeCovers="EP5-FLANGE COVER 1 PIECE";
                                str+='<input type="hidden" name="products_id[]" value="'+product_name_price[roastedglass][0]+'" />';
			                    /* for left lenth and postb height*/
                                var leftlenght=getBeforeChar(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
					            var leftlenghtcustom=getAfterChar(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
                                if(leftlenghtcustom!=''){
                                    var customlenth=customcal(leftlenghtcustom);
                                }else{
                                    var customlenth=' ';
                                }
                                totle_for_leftlenght=yoge(leftlenght,customlenth);
                                var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                                var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                                if(postlenghtcustom!=''){
                                    var customlenth_post=customcal(postlenghtcustom);
                                } else{
                                    var customlenth_post=' ';
                                }
                                totle_for_postlenght=yoge(postlenght,customlenth_post);
                                var finalprice_for_post_and_left=roastedglasscal(totle_for_leftlenght,totle_for_postlenght)
                                //alert(finalprice_for_post_and_left)
                                /* for left lenth and postb height*/
                                /* for right lenth and postb height*/
                                var rightlenght=getBeforeChar(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
                                var rightlenghtcustom=getAfterChar(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
                                if(rightlenghtcustom!=''){
                                    var customlenthright=customcal(rightlenghtcustom);
                                } else{
                                    var customlenthright=' ';
                                }
                                totle_for_rightlenght=yoge(rightlenght,customlenthright);
                                var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                                var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                                if(postlenghtcustom!=''){
                                    var customlenth_post=customcal(postlenghtcustom);
                                }else{
                                    var customlenth_post=' ';
                                }
                                totle_for_postlenght=yoge(postlenght,customlenth_post);
                                var finalprice_for_post_and_right=roastedglasscal(totle_for_rightlenght,totle_for_postlenght)
                                //alert(finalprice_for_post_and_right)
                                /* for right lenth and postb height*/
                                /* for face lenth and postb height*/
                                var facelenght=getBeforeChar(face_lenght_obj.options[face_lenght_obj.selectedIndex].text);
                                var facelenghtcustom=getAfterChar(face_lenght_obj.options[face_lenght_obj.selectedIndex].text);
                                if(facelenghtcustom!=''){
                                    var customlenthface=customcal(facelenghtcustom);
                                }else{
                                    var customlenthface=' ';
                                }
                                totle_for_facelenght=yoge(facelenght,customlenthface);
                                var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                                var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                                if(postlenghtcustom!=''){
                                    var customlenth_post=customcal(postlenghtcustom);
                                } else{
                                    var customlenth_post=' ';
                                }
                                totle_for_postlenght=yoge(postlenght,customlenth_post);
                                var finalprice_for_post_and_face=roastedglasscal(totle_for_facelenght,totle_for_postlenght)
                                //alert(finalprice_for_post_and_face)
                                /* for face lenth and postb height*/
                                roastedglassprice1=finalprice_for_post_and_face+finalprice_for_post_and_right+finalprice_for_post_and_left;
                                roastedglassprice = roastedglassprice1.toFixed(2)
                                //alert(finalprice_for_post_and_face)
                            }
                            //var teeshu=getBeforeChar(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
                            //alert(teeshu)
                        }else if(glass_face_obj.value==2){
                            //flangeCovers="EP5-FLANGE COVER 3 PIECES";
                            if(roasted_glass_obj.value=="yes"){
                                //flangeCovers="EP5-FLANGE COVER 1 PIECE";
                                str+='<input type="hidden" name="products_id[]" value="'+product_name_price[roastedglass][0]+'" />';
                                /* for left lenth and postb height*/
                                /* var leftlenght=getBeforeChar(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
                                var leftlenghtcustom=getAfterChar(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
                                if(leftlenghtcustom!=''){
                                    var customlenth=customcal(leftlenghtcustom);
                                }else{
                                    var customlenth=' ';
                                }
                                totle_for_leftlenght=yoge(leftlenght,customlenth);
                                var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                                var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                                if(postlenghtcustom!=''){
                                    var customlenth_post=customcal(postlenghtcustom);
                                }else{
                                    var customlenth_post=' ';
                                }
                                totle_for_postlenght=yoge(postlenght,customlenth_post);
                                */
                                var finalprice_for_post_and_left=0;
                                //alert(finalprice_for_post_and_left)
                                /* for left lenth and postb height*/
                                /* for right lenth and postb height*/
                                var rightlenght=getBeforeChar(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
                                var rightlenghtcustom=getAfterChar(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
                                if(rightlenghtcustom!=''){
                                    var customlenthright=customcal(rightlenghtcustom);
                                }else{
                                    var customlenthright=' ';
                                }
                                totle_for_rightlenght=yoge(rightlenght,customlenthright);
                                var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                                var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                                if(postlenghtcustom!=''){
                                    var customlenth_post=customcal(postlenghtcustom);
                                }else{
                                    var customlenth_post=' ';
                                }
                                totle_for_postlenght=yoge(postlenght,customlenth_post);
                                var finalprice_for_post_and_right=roastedglasscal(totle_for_rightlenght,totle_for_postlenght)
                                //alert(finalprice_for_post_and_right)
                                /* for right lenth and postb height*/
                                /* for face lenth and postb height*/
                                var facelenght=getBeforeChar(face_lenght_obj.options[face_lenght_obj.selectedIndex].text);
                                var facelenghtcustom=getAfterChar(face_lenght_obj.options[face_lenght_obj.selectedIndex].text);
                                if(facelenghtcustom!=''){
                                    var customlenthface=customcal(facelenghtcustom);
                                }else{
                                    var customlenthface=' ';
                                }
                                totle_for_facelenght=yoge(facelenght,customlenthface);
                                var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                                var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                                if(postlenghtcustom!=''){
                                    var customlenth_post=customcal(postlenghtcustom);
                                }else{
                                    var customlenth_post=' ';
                                }
                                totle_for_postlenght=yoge(postlenght,customlenth_post);
                                var finalprice_for_post_and_face=roastedglasscal(totle_for_facelenght,totle_for_postlenght)
                                //alert(finalprice_for_post_and_face)
                                /* for face lenth and postb height*/
                                roastedglassprice1=finalprice_for_post_and_face+finalprice_for_post_and_right+finalprice_for_post_and_left;
                                roastedglassprice = roastedglassprice1.toFixed(2)
                                //alert(finalprice_for_post_and_face)
                            }
                        }else if(glass_face_obj.value==3){
                            if(roasted_glass_obj.value=="yes"){
                                //flangeCovers="EP5-FLANGE COVER 1 PIECE";
                                str+='<input type="hidden" name="products_id[]" value="'+product_name_price[roastedglass][0]+'" />';
                                /* for left lenth and postb height*/
                                var leftlenght=getBeforeChar(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
			             		var leftlenghtcustom=getAfterChar(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
					            if(leftlenghtcustom!=''){
                					var customlenth=customcal(leftlenghtcustom);
				            	} else{
                                    var customlenth=' ';
                                }
                                totle_for_leftlenght=yoge(leftlenght,customlenth);
                                var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                                var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                                if(postlenghtcustom!=''){
                                    var customlenth_post=customcal(postlenghtcustom);
                                } else{
                                    var customlenth_post=' ';
                                }
                                totle_for_postlenght=yoge(postlenght,customlenth_post);
                                var finalprice_for_post_and_left=roastedglasscal(totle_for_leftlenght,totle_for_postlenght)
                                //alert(finalprice_for_post_and_left)
                                /* for left lenth and postb height*/
                                /* for right lenth and postb height*/
                                /*  var rightlenght=getBeforeChar(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
                                var rightlenghtcustom=getAfterChar(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
                                if(rightlenghtcustom!=''){
                                    var customlenthright=customcal(rightlenghtcustom);
                                } else{
                                    var customlenthright=' ';
                                }
                                totle_for_rightlenght=yoge(rightlenght,customlenthright);
                                var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                                var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                                if(postlenghtcustom!=''){
                                    var customlenth_post=customcal(postlenghtcustom);
                                }else{
                                    var customlenth_post=' ';
                                }
                                totle_for_postlenght=yoge(postlenght,customlenth_post);
                                */
                                var finalprice_for_post_and_right=0;
                                //alert(finalprice_for_post_and_right)
                                /* for right lenth and postb height*/
                                /* for face lenth and postb height*/
                                var facelenght=getBeforeChar(face_lenght_obj.options[face_lenght_obj.selectedIndex].text);
                                var facelenghtcustom=getAfterChar(face_lenght_obj.options[face_lenght_obj.selectedIndex].text);
                                if(facelenghtcustom!=''){
                                    var customlenthface=customcal(facelenghtcustom);
                                } else{
                                    var customlenthface=' ';
                                }
                                totle_for_facelenght=yoge(facelenght,customlenthface);
                                var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                                var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                                if(postlenghtcustom!=''){
                                    var customlenth_post=customcal(postlenghtcustom);
                                } else{
                                    var customlenth_post=' ';
                                }
                                totle_for_postlenght=yoge(postlenght,customlenth_post);
                                var finalprice_for_post_and_face=roastedglasscal(totle_for_facelenght,totle_for_postlenght)
                                //alert(finalprice_for_post_and_face)
                                /* for face lenth and postb height*/
                                roastedglassprice1=finalprice_for_post_and_face+finalprice_for_post_and_right+finalprice_for_post_and_left;
                                roastedglassprice = roastedglassprice1.toFixed(2)
                                //alert(finalprice_for_post_and_face)
        				   }
                        }else if(glass_face_obj.value==4){
                            //flangeCovers="EP5-FLANGE COVER 2 PIECES";
                            if(roasted_glass_obj.value=="yes"){
				                //flangeCovers="EP5-FLANGE COVER 1 PIECE";
                                str+='<input type="hidden" name="products_id[]" value="'+product_name_price[roastedglass][0]+'" />';
				                /* for left lenth and postb height*/
                                /*   var leftlenght=getBeforeChar(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
                                var leftlenghtcustom=getAfterChar(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
                                if(leftlenghtcustom!=''){
                                    var customlenth=customcal(leftlenghtcustom);
                				} else{
                                    var customlenth=' ';
                                }
                                totle_for_leftlenght=yoge(leftlenght,customlenth);
                                var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                                var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                                if(postlenghtcustom!=''){
                                    var customlenth_post=customcal(postlenghtcustom);
                                } else{
                                    var customlenth_post=' ';
                                }
                                totle_for_postlenght=yoge(postlenght,customlenth_post);
                                */
                                var finalprice_for_post_and_left=0;
                                //alert(finalprice_for_post_and_left)
                                /* for left lenth and postb height*/
                                /* for right lenth and postb height*/
                                /*   var rightlenght=getBeforeChar(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
                                var rightlenghtcustom=getAfterChar(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
                                if(rightlenghtcustom!=''){
                                var customlenthright=customcal(rightlenghtcustom);
                            } else{
                                var customlenthright=' ';
                            }
                            totle_for_rightlenght=yoge(rightlenght,customlenthright);
                            var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                            var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                            if(postlenghtcustom!=''){
                                var customlenth_post=customcal(postlenghtcustom);
                            } else{
                                var customlenth_post=' ';
                            }
                            totle_for_postlenght=yoge(postlenght,customlenth_post);
                            */
                            var finalprice_for_post_and_right=0;
                            //alert(finalprice_for_post_and_right)
                            /* for right lenth and postb height*/
                            /* for face lenth and postb height*/
                            var facelenght=getBeforeChar(face_lenght_obj.options[face_lenght_obj.selectedIndex].text);
                            var facelenghtcustom=getAfterChar(face_lenght_obj.options[face_lenght_obj.selectedIndex].text);
                            if(facelenghtcustom!=''){
                                var customlenthface=customcal(facelenghtcustom);
                            } else{
                                var customlenthface=' ';
                            }
                            totle_for_facelenght=yoge(facelenght,customlenthface);
                            var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                            var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                            if(postlenghtcustom!=''){
                                var customlenth_post=customcal(postlenghtcustom);
                            } else{
                                var customlenth_post=' ';
                            }
                            totle_for_postlenght=yoge(postlenght,customlenth_post);
                            var finalprice_for_post_and_face=roastedglasscal(totle_for_facelenght,totle_for_postlenght)
                            //alert(finalprice_for_post_and_face)
                            /* for face lenth and postb height*/
                            roastedglassprice1=finalprice_for_post_and_face+finalprice_for_post_and_right+finalprice_for_post_and_left;
                            roastedglassprice = roastedglassprice1.toFixed(2)
                            //alert(finalprice_for_post_and_face)
                        }
                    }
                }else if(type_obj.value=="2BAY"){
                    if(glass_face_obj.value==1){
                        if(roasted_glass_obj.value=="yes"){
                            str+='<input type="hidden" name="products_id[]" value="'+product_name_price[roastedglass][0]+'" />';
                            /* for left lenth and postb height*/
                            var leftlenght=getBeforeChar(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
                            var leftlenghtcustom=getAfterChar(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
                            if(leftlenghtcustom!=''){
                                var customlenth=customcal(leftlenghtcustom);
                            } else{
                                var customlenth=' ';
                            }
                            totle_for_leftlenght=yoge(leftlenght,customlenth);
                            var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                            var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                            if(postlenghtcustom!=''){
                                var customlenth_post=customcal(postlenghtcustom);
                            } else{
                                var customlenth_post=' ';
                            }
                            totle_for_postlenght=yoge(postlenght,customlenth_post);
                            var finalprice_for_post_and_left=roastedglasscal(totle_for_leftlenght,totle_for_postlenght)
                            //alert(finalprice_for_post_and_left)
                            /* for left lenth and postb height*/
                            /* for right lenth and postb height*/
                            var rightlenght=getBeforeChar(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
                            var rightlenghtcustom=getAfterChar(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
                            if(rightlenghtcustom!=''){
                                var customlenthright=customcal(rightlenghtcustom);
                            } else{
                                var customlenthright=' ';
                            }
                            totle_for_rightlenght=yoge(rightlenght,customlenthright);
                            var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                            var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                            if(postlenghtcustom!=''){
                                var customlenth_post=customcal(postlenghtcustom);
                            } else{
                                var customlenth_post=' ';
                            }
                            totle_for_postlenght=yoge(postlenght,customlenth_post);
                            var finalprice_for_post_and_right=roastedglasscal(totle_for_rightlenght,totle_for_postlenght)
                            //alert(finalprice_for_post_and_right)
                            /* for right lenth and postb height*/
                            /* for face lenth and postb height*/
                            var facelenght_a=getBeforeChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                            var facelenght_a_custom=getAfterChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                            if(facelenght_a_custom!=''){
                                var customlenthface_a=customcal(facelenght_a_custom);
                            } else{
                                var customlenthface_a=' ';
                            }
                            totle_for_facelenght_a=yoge(facelenght_a,customlenthface_a);
        					var facelenght_b=getBeforeChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                            var facelenght_b_custom=getAfterChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                            if(facelenght_b_custom!=''){
                                var customlenthface_b=customcal(facelenght_b_custom);
                            } else{
                                var customlenthface_b=' ';
                    		}
                            totle_for_facelenght_b=yoge(facelenght_b,customlenthface_b);
        					var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                            var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                            if(postlenghtcustom!=''){
                                var customlenth_post=customcal(postlenghtcustom);
                            } else{
                                var customlenth_post=' ';
                            }
                            totle_for_postlenght=yoge(postlenght,customlenth_post);
                            var finalprice_for_post_and_facelenght_a=roastedglasscal(totle_for_facelenght_a,totle_for_postlenght)
                            var finalprice_for_post_and_facelenght_b=roastedglasscal(totle_for_facelenght_b,totle_for_postlenght)
                            //alert(finalprice_for_post_and_face)
                            /* for face lenth and postb height*/
                            roastedglassprice1=finalprice_for_post_and_facelenght_a+finalprice_for_post_and_facelenght_b+finalprice_for_post_and_right+finalprice_for_post_and_left;
                            roastedglassprice = roastedglassprice1.toFixed(2)
                            //alert(finalprice_for_post_and_face)
    				    }
                        //var teeshu=getBeforeChar(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
			             //alert(teeshu)
                    }else if(glass_face_obj.value==2){
                        if(roasted_glass_obj.value=="yes"){
                            str+='<input type="hidden" name="products_id[]" value="'+product_name_price[roastedglass][0]+'" />';
				            /* for left lenth and postb height*/
                            /* var leftlenght=getBeforeChar(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
                            var leftlenghtcustom=getAfterChar(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
                            if(leftlenghtcustom!=''){
                                var customlenth=customcal(leftlenghtcustom);
                            } else{
                                var customlenth=' ';
                            }
                            totle_for_leftlenght=yoge(leftlenght,customlenth);
        					var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
		          			var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                            if(postlenghtcustom!=''){
                                var customlenth_post=customcal(postlenghtcustom);
                            } else{
                                var customlenth_post=' ';
            				}
                            totle_for_postlenght=yoge(postlenght,customlenth_post);
                            */
                            var finalprice_for_post_and_left=0;
                            //alert(finalprice_for_post_and_left)
                            /* for left lenth and postb height*/
    					   /* for right lenth and postb height*/
                            var rightlenght=getBeforeChar(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
                            var rightlenghtcustom=getAfterChar(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
                            if(rightlenghtcustom!=''){
                                var customlenthright=customcal(rightlenghtcustom);
                            } else{
                                var customlenthright=' ';
                            }
                            totle_for_rightlenght=yoge(rightlenght,customlenthright);
                            var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                            var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                            if(postlenghtcustom!=''){
                                var customlenth_post=customcal(postlenghtcustom);
                            } else{
                                var customlenth_post=' ';
                            }
                            totle_for_postlenght=yoge(postlenght,customlenth_post);
                            var finalprice_for_post_and_right=roastedglasscal(totle_for_rightlenght,totle_for_postlenght)
                            //alert(finalprice_for_post_and_right)
                            /* for right lenth and postb height*/
    					   /* for face lenth and postb height*/
                            var facelenght_a=getBeforeChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                            var facelenght_a_custom=getAfterChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                            if(facelenght_a_custom!=''){
                                var customlenthface_a=customcal(facelenght_a_custom);
                            } else{
                                var customlenthface_a=' ';
                            }
                            totle_for_facelenght_a=yoge(facelenght_a,customlenthface_a);
        					var facelenght_b=getBeforeChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                            var facelenght_b_custom=getAfterChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                            if(facelenght_b_custom!=''){
                                var customlenthface_b=customcal(facelenght_b_custom);
        					} else{
                                var customlenthface_b=' ';
    				    	}
                            totle_for_facelenght_b=yoge(facelenght_b,customlenthface_b);
        					var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
        					var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
        					if(postlenghtcustom!=''){
            					var customlenth_post=customcal(postlenghtcustom);
        					} else{
            					var customlenth_post=' ';
        					}
                            totle_for_postlenght=yoge(postlenght,customlenth_post);
                            var finalprice_for_post_and_facelenght_a=roastedglasscal(totle_for_facelenght_a,totle_for_postlenght)
                            var finalprice_for_post_and_facelenght_b=roastedglasscal(totle_for_facelenght_b,totle_for_postlenght)
                            //alert(finalprice_for_post_and_face)
                            /* for face lenth and postb height*/
                            roastedglassprice1=finalprice_for_post_and_facelenght_a+finalprice_for_post_and_facelenght_b+finalprice_for_post_and_right+finalprice_for_post_and_left;
                            roastedglassprice = roastedglassprice1.toFixed(2)
                            //alert(finalprice_for_post_and_face)
                        }
                    }else if(glass_face_obj.value==3){
                        if(roasted_glass_obj.value=="yes"){
                            str+='<input type="hidden" name="products_id[]" value="'+product_name_price[roastedglass][0]+'" />';
                            /* for left lenth and postb height*/
                            var leftlenght=getBeforeChar(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
                            var leftlenghtcustom=getAfterChar(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
					        if(leftlenghtcustom!=''){
        		      			var customlenth=customcal(leftlenghtcustom);
		          			} else{
					           var customlenth=' ';
                            }
                            totle_for_leftlenght=yoge(leftlenght,customlenth);
        					var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                            var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                            if(postlenghtcustom!=''){
                                var customlenth_post=customcal(postlenghtcustom);
                            } else{
                                var customlenth_post=' ';
                            }
                            totle_for_postlenght=yoge(postlenght,customlenth_post);
                            var finalprice_for_post_and_left=roastedglasscal(totle_for_leftlenght,totle_for_postlenght)
                            //alert(finalprice_for_post_and_left)
                            /* for left lenth and postb height*/
                            /* for right lenth and postb height*/
                            /* var rightlenght=getBeforeChar(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
                            var rightlenghtcustom=getAfterChar(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
                            if(rightlenghtcustom!=''){
                                var customlenthright=customcal(rightlenghtcustom);
                            } else{
                                var customlenthright=' ';
                            }
                            totle_for_rightlenght=yoge(rightlenght,customlenthright);
                            var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                            var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                            if(postlenghtcustom!=''){
                                var customlenth_post=customcal(postlenghtcustom);
                            } else{
                                var customlenth_post=' ';
                            }
                            totle_for_postlenght=yoge(postlenght,customlenth_post);
                            */
                            var finalprice_for_post_and_right=0;
                            //alert(finalprice_for_post_and_right)
                            /* for right lenth and postb height*/
    					   /* for face lenth and postb height*/
                            var facelenght_a=getBeforeChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                            var facelenght_a_custom=getAfterChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        	if(facelenght_a_custom!=''){
            					var customlenthface_a=customcal(facelenght_a_custom);
        					} else{
                                var customlenthface_a=' ';
        					}
        					totle_for_facelenght_a=yoge(facelenght_a,customlenthface_a);
        					var facelenght_b=getBeforeChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                            var facelenght_b_custom=getAfterChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                            if(facelenght_b_custom!=''){
                                var customlenthface_b=customcal(facelenght_b_custom);
                            } else{
                                var customlenthface_b=' ';
                            }
                            totle_for_facelenght_b=yoge(facelenght_b,customlenthface_b);
        					var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
        					var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
        					if(postlenghtcustom!=''){
            					var customlenth_post=customcal(postlenghtcustom);
        					} else{
            					var customlenth_post=' ';
        					}
                            totle_for_postlenght=yoge(postlenght,customlenth_post);
                            var finalprice_for_post_and_facelenght_a=roastedglasscal(totle_for_facelenght_a,totle_for_postlenght)
                            var finalprice_for_post_and_facelenght_b=roastedglasscal(totle_for_facelenght_b,totle_for_postlenght)
                            //alert(finalprice_for_post_and_face)
                            /* for face lenth and postb height*/
                            roastedglassprice1=finalprice_for_post_and_facelenght_a+finalprice_for_post_and_facelenght_b+finalprice_for_post_and_right+finalprice_for_post_and_left;
                            roastedglassprice = roastedglassprice1.toFixed(2)
                            //alert(finalprice_for_post_and_face)
                        }
                    }else if(glass_face_obj.value==4){
                        //flangeCovers="EP5-FLANGE COVER 2 PIECES";
                        if(roasted_glass_obj.value=="yes"){
                            str+='<input type="hidden" name="products_id[]" value="'+product_name_price[roastedglass][0]+'" />';
        				   /* for left lenth and postb height*/
                         /*  var leftlenght=getBeforeChar(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
        					var leftlenghtcustom=getAfterChar(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
        					if(leftlenghtcustom!=''){
            					var customlenth=customcal(leftlenghtcustom);
        					} else{
            					var customlenth=' ';
        					}
        					totle_for_leftlenght=yoge(leftlenght,customlenth);
        					var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
        					var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
        					if(postlenghtcustom!=''){
            					var customlenth_post=customcal(postlenghtcustom);
        					} else{
            					var customlenth_post=' ';
        					}
                            totle_for_postlenght=yoge(postlenght,customlenth_post);
        					*/
                            var finalprice_for_post_and_left=0;
                            //alert(finalprice_for_post_and_left)
                            /* for left lenth and postb height*/
    					   /* for right lenth and postb height*/
                           /* var rightlenght=getBeforeChar(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
        			        var rightlenghtcustom=getAfterChar(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
        					if(rightlenghtcustom!=''){
            					var customlenthright=customcal(rightlenghtcustom);
        					} else{
            					var customlenthright=' ';
        					}
        					totle_for_rightlenght=yoge(rightlenght,customlenthright);
        					var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
        					var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
        					if(postlenghtcustom!=''){
            					var customlenth_post=customcal(postlenghtcustom);
        					} else{
            					var customlenth_post=' ';
        					}
                            totle_for_postlenght=yoge(postlenght,customlenth_post);
                            */
                            var finalprice_for_post_and_right=0;
                            //alert(finalprice_for_post_and_right)
                            /* for right lenth and postb height*/
    					   /* for face lenth and postb height*/
                            var facelenght_a=getBeforeChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
        					var facelenght_a_custom=getAfterChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
        					if(facelenght_a_custom!=''){
            					var customlenthface_a=customcal(facelenght_a_custom);
        					} else{
            					var customlenthface_a=' ';
        					}
        					totle_for_facelenght_a=yoge(facelenght_a,customlenthface_a);
        					var facelenght_b=getBeforeChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
        					var facelenght_b_custom=getAfterChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
        					if(facelenght_b_custom!=''){
            					var customlenthface_b=customcal(facelenght_b_custom);
        					} else{
                                var customlenthface_b=' ';
                            }
                            totle_for_facelenght_b=yoge(facelenght_b,customlenthface_b);
        					var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
        					var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
        					if(postlenghtcustom!=''){
            					var customlenth_post=customcal(postlenghtcustom);
        					} else{
            					var customlenth_post=' ';
        					}
                            totle_for_postlenght=yoge(postlenght,customlenth_post);
                            var finalprice_for_post_and_facelenght_a=roastedglasscal(totle_for_facelenght_a,totle_for_postlenght)
                            var finalprice_for_post_and_facelenght_b=roastedglasscal(totle_for_facelenght_b,totle_for_postlenght)
                            //alert(finalprice_for_post_and_face)
                            /* for face lenth and postb height*/
                            roastedglassprice1=finalprice_for_post_and_facelenght_a+finalprice_for_post_and_facelenght_b+finalprice_for_post_and_right+finalprice_for_post_and_left;
        				    roastedglassprice = roastedglassprice1.toFixed(2)
            				//alert(finalprice_for_post_and_face)
    				   }
                    }             
                }else if(type_obj.value=="3BAY"){
                    if(glass_face_obj.value==1){
                        if(roasted_glass_obj.value=="yes"){
				        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[roastedglass][0]+'" />';
				        /* for left lenth and postb height*/
                        var leftlenght=getBeforeChar(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
                        var leftlenghtcustom=getAfterChar(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
                        if(leftlenghtcustom!=''){
                            var customlenth=customcal(leftlenghtcustom);
                        } else{
                            var customlenth=' ';
                        }
                        totle_for_leftlenght=yoge(leftlenght,customlenth);
                        var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                        var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
                        if(postlenghtcustom!=''){
                            var customlenth_post=customcal(postlenghtcustom);
                        } else{
                            var customlenth_post=' ';
                        }
                        totle_for_postlenght=yoge(postlenght,customlenth_post);
                        var finalprice_for_post_and_left=roastedglasscal(totle_for_leftlenght,totle_for_postlenght)
                        //alert(finalprice_for_post_and_left)
                        /* for left lenth and postb height*/
					   /* for right lenth and postb height*/
                        var rightlenght=getBeforeChar(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
    	   		        var rightlenghtcustom=getAfterChar(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
    					if(rightlenghtcustom!=''){
        					var customlenthright=customcal(rightlenghtcustom);
    					} else{
        					var customlenthright=' ';
    					}
    					totle_for_rightlenght=yoge(rightlenght,customlenthright);
    					var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
    					var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
    					if(postlenghtcustom!=''){
        					var customlenth_post=customcal(postlenghtcustom);
    					} else{
         					var customlenth_post=' ';
    					}
                        totle_for_postlenght=yoge(postlenght,customlenth_post);
                        var finalprice_for_post_and_right=roastedglasscal(totle_for_rightlenght,totle_for_postlenght)
                        //alert(finalprice_for_post_and_right)
                        /* for right lenth and postb height*/
					   /* for face lenth and postb height*/
                        var facelenght_a=getBeforeChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
    					var facelenght_a_custom=getAfterChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
    					if(facelenght_a_custom!=''){
        					var customlenthface_a=customcal(facelenght_a_custom);
    					} else{
        					var customlenthface_a=' ';
    					}
    					totle_for_facelenght_a=yoge(facelenght_a,customlenthface_a);
    					var facelenght_b=getBeforeChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        var facelenght_b_custom=getAfterChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        if(facelenght_b_custom!=''){
                            var customlenthface_b=customcal(facelenght_b_custom);
    					} else{
                            var customlenthface_b=' ';
    					}
    					totle_for_facelenght_b=yoge(facelenght_b,customlenthface_b);
    					var facelenght_c=getBeforeChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
    					var facelenght_c_custom=getAfterChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
    					if(facelenght_c_custom!=''){
        					var customlenthface_c=customcal(facelenght_c_custom);
    					} else{
        					var customlenthface_c=' ';
    					}
    					totle_for_facelenght_c=yoge(facelenght_c,customlenthface_c);
    					var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
    					var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
    					if(postlenghtcustom!=''){
        					var customlenth_post=customcal(postlenghtcustom);
    					} else{
        					var customlenth_post=' ';
    					}
                        totle_for_postlenght=yoge(postlenght,customlenth_post);
                        var finalprice_for_post_and_facelenght_a=roastedglasscal(totle_for_facelenght_a,totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_b=roastedglasscal(totle_for_facelenght_b,totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_c=roastedglasscal(totle_for_facelenght_c,totle_for_postlenght)
                        //alert(finalprice_for_post_and_face)
                        /* for face lenth and postb height*/
                        roastedglassprice1=finalprice_for_post_and_facelenght_a+finalprice_for_post_and_facelenght_b+finalprice_for_post_and_right+finalprice_for_post_and_facelenght_c+finalprice_for_post_and_left;
    				    roastedglassprice = roastedglassprice1.toFixed(2)
                    }
                }else if(glass_face_obj.value==2){
                    if(roasted_glass_obj.value=="yes"){
    				    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[roastedglass][0]+'" />';
    				   /* for left lenth and postb height*/
                        var finalprice_for_post_and_left=0;
                        //alert(finalprice_for_post_and_left)
                        /* for left lenth and postb height*/
                        /* for right lenth and postb height*/
                        var rightlenght=getBeforeChar(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
                        var rightlenghtcustom=getAfterChar(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
                        if(rightlenghtcustom!=''){
        					var customlenthright=customcal(rightlenghtcustom);
    					} else{
        					var customlenthright=' ';
    					}
    					totle_for_rightlenght=yoge(rightlenght,customlenthright);
    					var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
    					var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
    					if(postlenghtcustom!=''){
        					var customlenth_post=customcal(postlenghtcustom);
    					} else{
        					var customlenth_post=' ';
    					}
                        totle_for_postlenght=yoge(postlenght,customlenth_post);
                        var finalprice_for_post_and_right=roastedglasscal(totle_for_rightlenght,totle_for_postlenght)
                        /* for right lenth and postb height*/
					   /* for face lenth and postb height*/
                        var facelenght_a=getBeforeChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
    					var facelenght_a_custom=getAfterChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
    					if(facelenght_a_custom!=''){
        					var customlenthface_a=customcal(facelenght_a_custom);
    					} else{
        					var customlenthface_a=' ';
	   				    }
    					totle_for_facelenght_a=yoge(facelenght_a,customlenthface_a);
    					var facelenght_b=getBeforeChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        var facelenght_b_custom=getAfterChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
    					if(facelenght_b_custom!=''){
        					var customlenthface_b=customcal(facelenght_b_custom);
    					} else{
        					var customlenthface_b=' ';
    					}
    					totle_for_facelenght_b=yoge(facelenght_b,customlenthface_b);
    					var facelenght_c=getBeforeChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
    					var facelenght_c_custom=getAfterChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
    					if(facelenght_c_custom!=''){
        					var customlenthface_c=customcal(facelenght_c_custom);
    					} else{
        					var customlenthface_c=' ';
    					}
    					totle_for_facelenght_c=yoge(facelenght_c,customlenthface_c);
    					var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
    					var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
    					if(postlenghtcustom!=''){
        					var customlenth_post=customcal(postlenghtcustom);
    					} else{
        	   				var customlenth_post=' ';
    					}
                        totle_for_postlenght=yoge(postlenght,customlenth_post);
                        var finalprice_for_post_and_facelenght_a=roastedglasscal(totle_for_facelenght_a,totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_b=roastedglasscal(totle_for_facelenght_b,totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_c=roastedglasscal(totle_for_facelenght_c,totle_for_postlenght)
                        //alert(finalprice_for_post_and_face)
                        /* for face lenth and postb height*/
                        roastedglassprice1=finalprice_for_post_and_facelenght_a+finalprice_for_post_and_facelenght_b+finalprice_for_post_and_right+finalprice_for_post_and_facelenght_c+finalprice_for_post_and_left;
                        roastedglassprice = roastedglassprice1.toFixed(2)
                    }
                }else if(glass_face_obj.value==3){
                    if(roasted_glass_obj.value=="yes"){
    				    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[roastedglass][0]+'" />';
    				   /* for left lenth and postb height*/
                        var leftlenght=getBeforeChar(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
    					var leftlenghtcustom=getAfterChar(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
    					if(leftlenghtcustom!=''){
        					var customlenth=customcal(leftlenghtcustom);
    					} else{
        					var customlenth=' ';
    					}
    					totle_for_leftlenght=yoge(leftlenght,customlenth);
    					var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
    					var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
    					if(postlenghtcustom!=''){
        					var customlenth_post=customcal(postlenghtcustom);
    					} else{
        					var customlenth_post=' ';
    					}
                        totle_for_postlenght=yoge(postlenght,customlenth_post);
                        var finalprice_for_post_and_left=roastedglasscal(totle_for_leftlenght,totle_for_postlenght)
                        /* for left lenth and postb height*/
					   /* for right lenth and postb height*/
                        var finalprice_for_post_and_right=0;
                        //alert(finalprice_for_post_and_right)
                        /* for right lenth and postb height*/
					   /* for face lenth and postb height*/
                        var facelenght_a=getBeforeChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
    					var facelenght_a_custom=getAfterChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
    					if(facelenght_a_custom!=''){
        					var customlenthface_a=customcal(facelenght_a_custom);
    					} else{
        					var customlenthface_a=' ';
    					}
                        totle_for_facelenght_a=yoge(facelenght_a,customlenthface_a);
    					var facelenght_b=getBeforeChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
    					var facelenght_b_custom=getAfterChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
    					if(facelenght_b_custom!=''){
        					var customlenthface_b=customcal(facelenght_b_custom);
    					} else{
        					var customlenthface_b=' ';
    					}
    					totle_for_facelenght_b=yoge(facelenght_b,customlenthface_b);
    					var facelenght_c=getBeforeChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
    					var facelenght_c_custom=getAfterChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
    					if(facelenght_c_custom!=''){
        					var customlenthface_c=customcal(facelenght_c_custom);
    	   				} else{
        					var customlenthface_c=' ';
    					}
       					totle_for_facelenght_c=yoge(facelenght_c,customlenthface_c);
    					var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
    					var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
    					if(postlenghtcustom!=''){
        					var customlenth_post=customcal(postlenghtcustom);
    	   				} else{
        					var customlenth_post=' ';
    					}
                        totle_for_postlenght=yoge(postlenght,customlenth_post);
                        var finalprice_for_post_and_facelenght_a=roastedglasscal(totle_for_facelenght_a,totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_b=roastedglasscal(totle_for_facelenght_b,totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_c=roastedglasscal(totle_for_facelenght_c,totle_for_postlenght)
                        //alert(finalprice_for_post_and_face)
                        /* for face lenth and postb height*/
                        roastedglassprice1=finalprice_for_post_and_facelenght_a+finalprice_for_post_and_facelenght_b+finalprice_for_post_and_right+finalprice_for_post_and_facelenght_c+finalprice_for_post_and_left;
    				    roastedglassprice = roastedglassprice1.toFixed(2)
                    }
                }else if(glass_face_obj.value==4){
                    if(roasted_glass_obj.value=="yes"){
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[roastedglass][0]+'" />';
                        /* for left lenth and postb height*/
                        var finalprice_for_post_and_left=0;
                        /* for left lenth and postb height*/
					   /* for right lenth and postb height*/
                        var finalprice_for_post_and_right=0;
                        /* for right lenth and postb height*/
					   /* for face lenth and postb height*/
                        var facelenght_a=getBeforeChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
    					var facelenght_a_custom=getAfterChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
    					if(facelenght_a_custom!=''){
        					var customlenthface_a=customcal(facelenght_a_custom);
    					} else{
        					var customlenthface_a=' ';
    					}
    					totle_for_facelenght_a=yoge(facelenght_a,customlenthface_a);
    					var facelenght_b=getBeforeChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
    					var facelenght_b_custom=getAfterChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
    					if(facelenght_b_custom!=''){
        					var customlenthface_b=customcal(facelenght_b_custom);
    					} else{
        					var customlenthface_b=' ';
    					}
    					totle_for_facelenght_b=yoge(facelenght_b,customlenthface_b);
    					var facelenght_c=getBeforeChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
    					var facelenght_c_custom=getAfterChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
    					if(facelenght_c_custom!=''){
        					var customlenthface_c=customcal(facelenght_c_custom);
    					} else{
        					var customlenthface_c=' ';
    					}
    					totle_for_facelenght_c=yoge(facelenght_c,customlenthface_c);
    					var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
    					var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
    					if(postlenghtcustom!=''){
        					var customlenth_post=customcal(postlenghtcustom);
    					} else{
        					var customlenth_post=' ';
    					}
                        totle_for_postlenght=yoge(postlenght,customlenth_post);
                        var finalprice_for_post_and_facelenght_a=roastedglasscal(totle_for_facelenght_a,totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_b=roastedglasscal(totle_for_facelenght_b,totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_c=roastedglasscal(totle_for_facelenght_c,totle_for_postlenght)
                        //alert(finalprice_for_post_and_face)
                        /* for face lenth and postb height*/
                        roastedglassprice1=finalprice_for_post_and_facelenght_a+finalprice_for_post_and_facelenght_b+finalprice_for_post_and_right+finalprice_for_post_and_facelenght_c+finalprice_for_post_and_left;
    				    roastedglassprice = roastedglassprice1.toFixed(2)
                    }
                }               
            }else if(type_obj.value=="4BAY"){
                if(glass_face_obj.value==1){
                    if(roasted_glass_obj.value=="yes"){
				        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[roastedglass][0]+'" />';
                        /* for left lenth and postb height*/
                        var leftlenght=getBeforeChar(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
    					var leftlenghtcustom=getAfterChar(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
    					if(leftlenghtcustom!=''){
        					var customlenth=customcal(leftlenghtcustom);
    					} else{
        					var customlenth=' ';
    					}
    					totle_for_leftlenght=yoge(leftlenght,customlenth);
    					var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
    					var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
    					if(postlenghtcustom!=''){
        					var customlenth_post=customcal(postlenghtcustom);
    					} else{
        					var customlenth_post=' ';
    					}
                        totle_for_postlenght=yoge(postlenght,customlenth_post);
                        var finalprice_for_post_and_left=roastedglasscal(totle_for_leftlenght,totle_for_postlenght)
                        //alert(finalprice_for_post_and_left)
                        /* for left lenth and postb height*/
					   /* for right lenth and postb height*/
                        var rightlenght=getBeforeChar(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
    			        var rightlenghtcustom=getAfterChar(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
    					if(rightlenghtcustom!=''){
        					var customlenthright=customcal(rightlenghtcustom);
    					} else{
        					var customlenthright=' ';
    	   				}
    					totle_for_rightlenght=yoge(rightlenght,customlenthright);
    					var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
    					var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
    					if(postlenghtcustom!=''){
        					var customlenth_post=customcal(postlenghtcustom);
    					} else{
        					var customlenth_post=' ';
    	   				}
                        totle_for_postlenght=yoge(postlenght,customlenth_post);
                        var finalprice_for_post_and_right=roastedglasscal(totle_for_rightlenght,totle_for_postlenght)
                        //alert(finalprice_for_post_and_right)
                        /* for right lenth and postb height*/
					   /* for face lenth and postb height*/
                        var facelenght_a=getBeforeChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
    					var facelenght_a_custom=getAfterChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
    					if(facelenght_a_custom!=''){
        					var customlenthface_a=customcal(facelenght_a_custom);
    					} else{
        					var customlenthface_a=' ';
    					}
    					totle_for_facelenght_a=yoge(facelenght_a,customlenthface_a);
    					var facelenght_b=getBeforeChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
    					var facelenght_b_custom=getAfterChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
    					if(facelenght_b_custom!=''){
        					var customlenthface_b=customcal(facelenght_b_custom);
    					} else{
        					var customlenthface_b=' ';
    	   				}
    					totle_for_facelenght_b=yoge(facelenght_b,customlenthface_b);
    					var facelenght_c=getBeforeChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
    					var facelenght_c_custom=getAfterChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
    					if(facelenght_c_custom!=''){
        					var customlenthface_c=customcal(facelenght_c_custom);
    					} else{
        					var customlenthface_c=' ';
    					}
    					totle_for_facelenght_c=yoge(facelenght_c,customlenthface_c);
    					var facelenght_d=getBeforeChar(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
    					var facelenght_d_custom=getAfterChar(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
    					if(facelenght_d_custom!=''){
        					var customlenthface_d=customcal(facelenght_d_custom);
    					} else{
        					var customlenthface_d=' ';
    					}
    					totle_for_facelenght_d=yoge(facelenght_d,customlenthface_d);
    					var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
    					var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
    					if(postlenghtcustom!=''){
        					var customlenth_post=customcal(postlenghtcustom);
    					} else{
        					var customlenth_post=' ';
    					}
                        totle_for_postlenght=yoge(postlenght,customlenth_post);
                        var finalprice_for_post_and_facelenght_a=roastedglasscal(totle_for_facelenght_a,totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_b=roastedglasscal(totle_for_facelenght_b,totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_c=roastedglasscal(totle_for_facelenght_c,totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_d=roastedglasscal(totle_for_facelenght_d,totle_for_postlenght)
                        //alert(finalprice_for_post_and_face)
                        /* for face lenth and postb height*/
                        roastedglassprice1=finalprice_for_post_and_facelenght_a+finalprice_for_post_and_facelenght_b+finalprice_for_post_and_right+finalprice_for_post_and_facelenght_c+finalprice_for_post_and_facelenght_d+finalprice_for_post_and_left;
    				    roastedglassprice = roastedglassprice1.toFixed(2)
                    }
                }else if(glass_face_obj.value==2){
                    if(roasted_glass_obj.value=="yes"){
    				    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[roastedglass][0]+'" />';
    				   /* for left lenth and postb height*/
                        var finalprice_for_post_and_left=0;
                        //alert(finalprice_for_post_and_left)
                        /* for left lenth and postb height*/
					   /* for right lenth and postb height*/
                        var rightlenght=getBeforeChar(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
    			        var rightlenghtcustom=getAfterChar(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
    					if(rightlenghtcustom!=''){
        					var customlenthright=customcal(rightlenghtcustom);
                        } else{
        					var customlenthright=' ';
    					}
    					totle_for_rightlenght=yoge(rightlenght,customlenthright);
    					var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
    					var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
    					if(postlenghtcustom!=''){
        					var customlenth_post=customcal(postlenghtcustom);
    					} else{
        					var customlenth_post=' ';
    					}
                        totle_for_postlenght=yoge(postlenght,customlenth_post);
                        var finalprice_for_post_and_right=roastedglasscal(totle_for_rightlenght,totle_for_postlenght)
                        /* for right lenth and postb height*/
					   /* for face lenth and postb height*/
                        var facelenght_a=getBeforeChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
    					var facelenght_a_custom=getAfterChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
    					if(facelenght_a_custom!=''){
        					var customlenthface_a=customcal(facelenght_a_custom);
    					} else{
        					var customlenthface_a=' ';
    					}
    					totle_for_facelenght_a=yoge(facelenght_a,customlenthface_a);
    					var facelenght_b=getBeforeChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
    					var facelenght_b_custom=getAfterChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
    					if(facelenght_b_custom!=''){
        					var customlenthface_b=customcal(facelenght_b_custom);
    					} else{
        					var customlenthface_b=' ';
    					}
    					totle_for_facelenght_b=yoge(facelenght_b,customlenthface_b);
    					var facelenght_c=getBeforeChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
    					var facelenght_c_custom=getAfterChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
    					if(facelenght_c_custom!=''){
        					var customlenthface_c=customcal(facelenght_c_custom);
    					} else{
        					var customlenthface_c=' ';
	   				    }
    					totle_for_facelenght_c=yoge(facelenght_c,customlenthface_c);
    					var facelenght_d=getBeforeChar(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
    					var facelenght_d_custom=getAfterChar(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
    					if(facelenght_d_custom!=''){
        					var customlenthface_d=customcal(facelenght_d_custom);
    					} else{
        					var customlenthface_d=' ';
    					}
    					totle_for_facelenght_d=yoge(facelenght_d,customlenthface_d);
    					var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
    					var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
    					if(postlenghtcustom!=''){
        					var customlenth_post=customcal(postlenghtcustom);
    					} else{
        					var customlenth_post=' ';
    					}
                        totle_for_postlenght=yoge(postlenght,customlenth_post);
                        var finalprice_for_post_and_facelenght_a=roastedglasscal(totle_for_facelenght_a,totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_b=roastedglasscal(totle_for_facelenght_b,totle_for_postlenght)
					    var finalprice_for_post_and_facelenght_c=roastedglasscal(totle_for_facelenght_c,totle_for_postlenght)
					    var finalprice_for_post_and_facelenght_d=roastedglasscal(totle_for_facelenght_d,totle_for_postlenght)
                        //alert(finalprice_for_post_and_face)
                        /* for face lenth and postb height*/
                        roastedglassprice1=finalprice_for_post_and_facelenght_a+finalprice_for_post_and_facelenght_b+finalprice_for_post_and_right+finalprice_for_post_and_facelenght_c+finalprice_for_post_and_facelenght_d+finalprice_for_post_and_left;
    				    roastedglassprice = roastedglassprice1.toFixed(2)
                    }
                }else if(glass_face_obj.value==3){
                    if(roasted_glass_obj.value=="yes"){
				        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[roastedglass][0]+'" />';
                        /* for left lenth and postb height*/
                        var leftlenght=getBeforeChar(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
    					var leftlenghtcustom=getAfterChar(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
    					if(leftlenghtcustom!=''){
        					var customlenth=customcal(leftlenghtcustom);
    					} else{
        					var customlenth=' ';
    					}
    					totle_for_leftlenght=yoge(leftlenght,customlenth);
    					var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
    					var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
    					if(postlenghtcustom!=''){
        					var customlenth_post=customcal(postlenghtcustom);
    					} else{
        					var customlenth_post=' ';
    					}
                        totle_for_postlenght=yoge(postlenght,customlenth_post);
                        var finalprice_for_post_and_left=roastedglasscal(totle_for_leftlenght,totle_for_postlenght)
                        /* for left lenth and postb height*/
					   /* for right lenth and postb height*/
                        var finalprice_for_post_and_right=0;
                        //alert(finalprice_for_post_and_right)
                        /* for right lenth and postb height*/
					   /* for face lenth and postb height*/
                        var facelenght_a=getBeforeChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
    					var facelenght_a_custom=getAfterChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
    					if(facelenght_a_custom!=''){
        					var customlenthface_a=customcal(facelenght_a_custom);
    					} else{
        					var customlenthface_a=' ';
    					}
    					totle_for_facelenght_a=yoge(facelenght_a,customlenthface_a);
    					var facelenght_b=getBeforeChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
    					var facelenght_b_custom=getAfterChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
    					if(facelenght_b_custom!=''){
        					var customlenthface_b=customcal(facelenght_b_custom);
    					} else{
        					var customlenthface_b=' ';
    					}
    					totle_for_facelenght_b=yoge(facelenght_b,customlenthface_b);   
    					var facelenght_c=getBeforeChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
    					var facelenght_c_custom=getAfterChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
    					if(facelenght_c_custom!=''){
        					var customlenthface_c=customcal(facelenght_c_custom);
    					} else{
        					var customlenthface_c=' ';
    					}
    					totle_for_facelenght_c=yoge(facelenght_c,customlenthface_c);
    					var facelenght_d=getBeforeChar(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
    					var facelenght_d_custom=getAfterChar(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
    					if(facelenght_d_custom!=''){
        					var customlenthface_d=customcal(facelenght_d_custom);
    					} else{
        					var customlenthface_d=' ';
    					}
    					totle_for_facelenght_d=yoge(facelenght_d,customlenthface_d);
    					var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
    					var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
    					if(postlenghtcustom!=''){
        					var customlenth_post=customcal(postlenghtcustom);
    					} else{
        					var customlenth_post=' ';
    					}
                        totle_for_postlenght=yoge(postlenght,customlenth_post);
                        var finalprice_for_post_and_facelenght_a=roastedglasscal(totle_for_facelenght_a,totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_b=roastedglasscal(totle_for_facelenght_b,totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_c=roastedglasscal(totle_for_facelenght_c,totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_d=roastedglasscal(totle_for_facelenght_d,totle_for_postlenght)
                        //alert(finalprice_for_post_and_face)
                        /* for face lenth and postb height*/
                        roastedglassprice1=finalprice_for_post_and_facelenght_a+finalprice_for_post_and_facelenght_b+finalprice_for_post_and_right+finalprice_for_post_and_facelenght_c+finalprice_for_post_and_facelenght_d+finalprice_for_post_and_left;
    				    roastedglassprice = roastedglassprice1.toFixed(2)
                    }
                }else if(glass_face_obj.value==4){
                    if(roasted_glass_obj.value=="yes"){
    				    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[roastedglass][0]+'" />';
    				   /* for left lenth and postb height*/
                        var finalprice_for_post_and_left=0;
                        /* for left lenth and postb height*/
					   /* for right lenth and postb height*/
                        var finalprice_for_post_and_right=0;
                        /* for right lenth and postb height*/
					   /* for face lenth and postb height*/
                        var facelenght_a=getBeforeChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
    					var facelenght_a_custom=getAfterChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
    					if(facelenght_a_custom!=''){
        					var customlenthface_a=customcal(facelenght_a_custom);
    					} else{
        					var customlenthface_a=' ';
    					}
    					totle_for_facelenght_a=yoge(facelenght_a,customlenthface_a);
    					var facelenght_b=getBeforeChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
    					var facelenght_b_custom=getAfterChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
    					if(facelenght_b_custom!=''){
        					var customlenthface_b=customcal(facelenght_b_custom);
    					} else{
        					var customlenthface_b=' ';
    	   				}
    					totle_for_facelenght_b=yoge(facelenght_b,customlenthface_b);
    					var facelenght_c=getBeforeChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
    					var facelenght_c_custom=getAfterChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
    					if(facelenght_c_custom!=''){
        					var customlenthface_c=customcal(facelenght_c_custom);
    					} else{
        					var customlenthface_c=' ';
    					}
    					totle_for_facelenght_c=yoge(facelenght_c,customlenthface_c);
    					var facelenght_d=getBeforeChar(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
    					var facelenght_d_custom=getAfterChar(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
    					if(facelenght_d_custom!=''){
        					var customlenthface_d=customcal(facelenght_d_custom);
    					} else{
        					var customlenthface_d=' ';
    					}
    					totle_for_facelenght_d=yoge(facelenght_d,customlenthface_d);
    					var postlenght=getBeforeChar(post_height_obj.options[post_height_obj.selectedIndex].text);
    					var postlenghtcustom=getAfterChar(post_height_obj.options[post_height_obj.selectedIndex].text);
    					if(postlenghtcustom!=''){
        					var customlenth_post=customcal(postlenghtcustom);
    					} else{
        					var customlenth_post=' ';
    					}
                        totle_for_postlenght=yoge(postlenght,customlenth_post);
                        var finalprice_for_post_and_facelenght_a=roastedglasscal(totle_for_facelenght_a,totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_b=roastedglasscal(totle_for_facelenght_b,totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_c=roastedglasscal(totle_for_facelenght_c,totle_for_postlenght)
					    var finalprice_for_post_and_facelenght_d=roastedglasscal(totle_for_facelenght_d,totle_for_postlenght)
                        //alert(finalprice_for_post_and_face)
                        /* for face lenth and postb height*/
                        roastedglassprice1=finalprice_for_post_and_facelenght_a+finalprice_for_post_and_facelenght_b+finalprice_for_post_and_right+finalprice_for_post_and_facelenght_c+finalprice_for_post_and_facelenght_d+finalprice_for_post_and_left;
    				    roastedglassprice = roastedglassprice1.toFixed(2)
                    }
                }    
            }
        }
    }
	
	
	
	
	
	
	
	
		/* end frosteg glass by yogesh*/
        //Addition of Flange Covers!!
		
		
		if(flangeCovers != ""){
            if("EP5"=="EP5"){
                if(type_obj.value=="1BAY"){
                    if(glass_face_obj.value==1){
                        //flangeCovers="EP5-FLANGE COVER 4 PIECES";
                        flangeCovers="EP5-FLANGE COVER 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        flangeCoversPrice=4*parseFloat(product_name_price[flangeCovers][1]);
                        //var teeshu=getBeforeChar(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
                        //alert(teeshu)
                   
                    }else if(glass_face_obj.value==2){
                        //flangeCovers="EP5-FLANGE COVER 3 PIECES";
                        flangeCovers="EP5-FLANGE COVER 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        flangeCoversPrice=3*parseFloat(product_name_price[flangeCovers][1]);
                    }else if(glass_face_obj.value==3){
                        //flangeCovers="EP5-FLANGE COVER 3 PIECES";
                        flangeCovers="EP5-FLANGE COVER 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        flangeCoversPrice=3*parseFloat(product_name_price[flangeCovers][1]);
                    }else if(glass_face_obj.value==4){
                        //flangeCovers="EP5-FLANGE COVER 2 PIECES";
                        flangeCovers="EP5-FLANGE COVER 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        flangeCoversPrice=2*parseFloat(product_name_price[flangeCovers][1]);
                    }
                }else if(type_obj.value=="2BAY"){
                    if(glass_face_obj.value==1){
                        //flangeCovers="EP5-FLANGE COVER 5 PIECES";
                        flangeCovers="EP5-FLANGE COVER 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        flangeCoversPrice=5*parseFloat(product_name_price[flangeCovers][1]);
                    }else if(glass_face_obj.value==2){
                        //flangeCovers="EP5-FLANGE COVER 4 PIECES";
                        flangeCovers="EP5-FLANGE COVER 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        flangeCoversPrice=4*parseFloat(product_name_price[flangeCovers][1]);
                    }else if(glass_face_obj.value==3){
                        // flangeCovers="EP5-FLANGE COVER 4 PIECES";
                        flangeCovers="EP5-FLANGE COVER 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        flangeCoversPrice=4*parseFloat(product_name_price[flangeCovers][1]);
                    }else if(glass_face_obj.value==4){
                        //flangeCovers="EP5-FLANGE COVER 3 PIECES";
                        flangeCovers="EP5-FLANGE COVER 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        flangeCoversPrice=3*parseFloat(product_name_price[flangeCovers][1]);
                    }                
                }else if(type_obj.value=="3BAY"){
                    if(glass_face_obj.value==1){
                        //flangeCovers="EP5-FLANGE COVER 6 PIECES";
                        flangeCovers="EP5-FLANGE COVER 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        flangeCoversPrice=6*parseFloat(product_name_price[flangeCovers][1]);
                    }else if(glass_face_obj.value==2){
                        //flangeCovers="EP5-FLANGE COVER 5 PIECES";
                        flangeCovers="EP5-FLANGE COVER 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        flangeCoversPrice=5*parseFloat(product_name_price[flangeCovers][1]);
                    }else if(glass_face_obj.value==3){
                        //flangeCovers="EP5-FLANGE COVER 5 PIECES";
                        flangeCovers="EP5-FLANGE COVER 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        flangeCoversPrice=5*parseFloat(product_name_price[flangeCovers][1]);
                    }else if(glass_face_obj.value==4){
                        //flangeCovers="EP5-FLANGE COVER 4 PIECES";
                        flangeCovers="EP5-FLANGE COVER 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        flangeCoversPrice=4*parseFloat(product_name_price[flangeCovers][1]);
                    }                
                }else if(type_obj.value=="4BAY"){
                    if(glass_face_obj.value==1){
                        //flangeCovers="EP5-FLANGE COVER 6 PIECES";
                        flangeCovers="EP5-FLANGE COVER 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        flangeCoversPrice=7*parseFloat(product_name_price[flangeCovers][1]);
                    }else if(glass_face_obj.value==2){
                        //flangeCovers="EP5-FLANGE COVER 5 PIECES";
                        flangeCovers="EP5-FLANGE COVER 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        flangeCoversPrice=6*parseFloat(product_name_price[flangeCovers][1]);
                    }else if(glass_face_obj.value==3){
                        //flangeCovers="EP5-FLANGE COVER 5 PIECES";
                        flangeCovers="EP5-FLANGE COVER 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        flangeCoversPrice=6*parseFloat(product_name_price[flangeCovers][1]);
                    }else if(glass_face_obj.value==4){
                        //flangeCovers="EP5-FLANGE COVER 4 PIECES";
                        flangeCovers="EP5-FLANGE COVER 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                        flangeCoversPrice=5*parseFloat(product_name_price[flangeCovers][1]);
                    }                
                }   
           }
 
			

            
            
            
            
            if(product_name_price[flangeCovers]!="undifine"){
  			   //str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
               
                //flangeCoversPrice=parseFloat(product_name_price[flangeCovers][1]);
            }
		}
		
		
	
		
		//flangeUnderCounter
	//	flange_under_counter
		
		
		
		
		
		if(flangeUnderCounter != ""){
            if("EP5"=="EP5"){
                if(type_obj.value=="1BAY"){
                    if(glass_face_obj.value==1){
                        //flangeCovers="EP5-FLANGE COVER 4 PIECES";
                        flangeUnderCounter="Ring-EP5-UNDER COUNTER FLANGE 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        flangeUnderCounterPrice=4*parseFloat(product_name_price[flangeUnderCounter][1]);
                        //var teeshu=getBeforeChar(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
                        //alert(teeshu)
                   
                    }else if(glass_face_obj.value==2){
                        //flangeUnderCounter="EP5-FLANGE COVER 3 PIECES";
                        flangeUnderCounter="Ring-EP5-UNDER COUNTER FLANGE 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        flangeUnderCounterPrice=3*parseFloat(product_name_price[flangeUnderCounter][1]);
                    }else if(glass_face_obj.value==3){
                        //flangeUnderCounter="EP5-FLANGE COVER 3 PIECES";
                        flangeUnderCounter="Ring-EP5-UNDER COUNTER FLANGE 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        flangeUnderCounterPrice=3*parseFloat(product_name_price[flangeUnderCounter][1]);
                    }else if(glass_face_obj.value==4){
                        //flangeUnderCounter="EP5-FLANGE COVER 2 PIECES";
                        flangeUnderCounter="Ring-EP5-UNDER COUNTER FLANGE 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        flangeUnderCounterPrice=2*parseFloat(product_name_price[flangeUnderCounter][1]);
                    }
                }else if(type_obj.value=="2BAY"){
                    if(glass_face_obj.value==1){
                        //flangeUnderCounter="EP5-FLANGE COVER 5 PIECES";
                       flangeUnderCounter="Ring-EP5-UNDER COUNTER FLANGE 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        flangeUnderCounterPrice=5*parseFloat(product_name_price[flangeUnderCounter][1]);
                    }else if(glass_face_obj.value==2){
                        //flangeUnderCounter="EP5-FLANGE COVER 4 PIECES";
                        flangeUnderCounter="Ring-EP5-UNDER COUNTER FLANGE 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        flangeUnderCounterPrice=4*parseFloat(product_name_price[flangeUnderCounter][1]);
                    }else if(glass_face_obj.value==3){
                        // flangeUnderCounter="EP5-FLANGE COVER 4 PIECES";
                       flangeUnderCounter="Ring-EP5-UNDER COUNTER FLANGE 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        flangeUnderCounterPrice=4*parseFloat(product_name_price[flangeUnderCounter][1]);
                    }else if(glass_face_obj.value==4){
                        //flangeUnderCounter="EP5-FLANGE COVER 3 PIECES";
                        flangeUnderCounter="Ring-EP5-UNDER COUNTER FLANGE 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        flangeUnderCounterPrice=3*parseFloat(product_name_price[flangeUnderCounter][1]);
                    }                
                }else if(type_obj.value=="3BAY"){
                    if(glass_face_obj.value==1){
                        //flangeUnderCounter="EP5-FLANGE COVER 6 PIECES";
                        flangeUnderCounter="Ring-EP5-UNDER COUNTER FLANGE 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        flangeUnderCounterPrice=6*parseFloat(product_name_price[flangeUnderCounter][1]);
                    }else if(glass_face_obj.value==2){
                        //flangeUnderCounter="EP5-FLANGE COVER 5 PIECES";
                        flangeUnderCounter="Ring-EP5-UNDER COUNTER FLANGE 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        flangeUnderCounterPrice=5*parseFloat(product_name_price[flangeUnderCounter][1]);
                    }else if(glass_face_obj.value==3){
                        //flangeUnderCounter="EP5-FLANGE COVER 5 PIECES";
                        flangeUnderCounter="Ring-EP5-UNDER COUNTER FLANGE 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        flangeUnderCounterPrice=5*parseFloat(product_name_price[flangeUnderCounter][1]);
                    }else if(glass_face_obj.value==4){
                        //flangeUnderCounter="EP5-FLANGE COVER 4 PIECES";
                       flangeUnderCounter="Ring-EP5-UNDER COUNTER FLANGE 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        flangeUnderCounterPrice=4*parseFloat(product_name_price[flangeUnderCounter][1]);
                    }                
                }else if(type_obj.value=="4BAY"){
                    if(glass_face_obj.value==1){
                        //flangeUnderCounter="EP5-FLANGE COVER 6 PIECES";
                        flangeUnderCounter="Ring-EP5-UNDER COUNTER FLANGE 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        flangeUnderCounterPrice=7*parseFloat(product_name_price[flangeUnderCounter][1]);
                    }else if(glass_face_obj.value==2){
                        //flangeUnderCounter="EP5-FLANGE COVER 5 PIECES";
                        flangeUnderCounter="Ring-EP5-UNDER COUNTER FLANGE 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        flangeUnderCounterPrice=6*parseFloat(product_name_price[flangeUnderCounter][1]);
                    }else if(glass_face_obj.value==3){
                        //flangeUnderCounter="EP5-FLANGE COVER 5 PIECES";
                        flangeUnderCounter="Ring-EP5-UNDER COUNTER FLANGE 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        flangeUnderCounterPrice=6*parseFloat(product_name_price[flangeUnderCounter][1]);
                    }else if(glass_face_obj.value==4){
                        //flangeUnderCounter="EP5-FLANGE COVER 4 PIECES";
                        flangeUnderCounter="Ring-EP5-UNDER COUNTER FLANGE 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        flangeUnderCounterPrice=5*parseFloat(product_name_price[flangeUnderCounter][1]);
                    }                
                }   
           }
 
			

            
            
            
            
            if(product_name_price[flangeUnderCounter]!="undifine"){
  			   //str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
               
                //flangeCoversPrice=parseFloat(product_name_price[flangeCovers][1]);
            }
		}
		
		
		
		
		
		
		
		
		
		
		  
        //alert(type_obj.value+" "+glass_face_obj.value+" "+flangeCovers);
		flangeCoversPrice2=lightPrice_a+lightPrice_b+lightPrice_c+lightPrice_d;
        glassPrice=facePrice+facePrice_a+facePrice_b+facePrice_c+facePrice_d;
		//adjustablePrice=0;
mailboxCutoutPriceTotal=mailboxCutoutPrice_a+mailboxCutoutPrice_b+mailboxCutoutPrice_c+mailboxCutoutPrice_d;

        t_post_price=centerPostPrice+anglePostPrice;
        totalPrice1=glassPrice+leftPostPrice+rightPostPrice+leftEndPanelPrice+rightEndPanelPrice+t_post_price+flangeCoversPrice+flangeUnderCounterPrice+flangeCoversPrice2+parseFloat(roastedglassprice)+adjust_price+facePrice_l+facePrice_r+mailboxCutoutPriceTotal;
		totalPrice = totalPrice1.toFixed(2)
        if(form.adjustable.value=="yes"){//adding image of adjustable breckets!!
//              alert(imageName);
                imageName="ADJUST"+imageName;
            
        }

		if(form.roasted_glass.value=="yes"){//adding image of Frosted Glass!!
     //              alert(imageName);
                imageName="FROSTED"+imageName;
            
        }     	
		
		
		arc_glass_yn=arc_glass_obj.value;
		arc_glass_valss=arc_glass_value_obj.value;
		
		arc_glass_type_value=arc_glass_type_value_obj.value;
		endpanel_arc_glass_value=endpanel_arc_glass_value_obj.value;
		
		
		//ADM Sneezeguards - Sneeze guard | Sneezeguard Portable | Sneeze Guards
		
		if(arc_glass_yn=="yes"){
		//adding image of Curv (Arc) Glass!!
		
		
		
		if(arc_glass_valss=='2')
		{
			imageName="CURV2"+imageName;
		}
		else if(arc_glass_valss=='6')
		{
			imageName="CURV6"+imageName;
		}
		else{
			imageName="CURV4"+imageName;	
		}
		
		
		
		
		

if(endpanel_arc_glass_value=="yes"){
//for with endpanel Arch
imageName="WTEND"+imageName;
}
else {
//for without endpanel Arch
//if(glass_face_obj.value==4)
//{
//imageName="WOTEND"+imageName;
//}
//else{
imageName="WOTEND"+imageName;
//}



}
		
		if(arc_glass_type_value=="FA"){
		imageName="FA"+imageName;	
		}
		else if(arc_glass_type_value=="CA"){
		imageName="CA"+imageName;	
		}
		else if(arc_glass_type_value=="RD"){
		imageName="RA"+imageName;	
		}
		else{
		imageName=""+imageName;	
		}
		     
            
        }
		
		
		
        image_string='<img src="images/'+foldername+'/'+imageName+'.jpg" style="width:640px;height:640px">'; 

	   // image_string='<img src="images/'+foldername+'/'+imageName+'.jpg" style="width:828px;height:583px">'; 

        if("EP5"=="EP5"){
            image_string+='<div class="left">Left</div><div class="right">Right</div>';
        }
        if("EP5"=="EP5" || "EP5"=="EP15" || ("EP5"=="EP12")|| ("EP5"=="EP11") ){
            image_string+='<div class="arc_height1"></div>';
			//image_string+='<div class="arc_height2"></div>';
			//image_string+='<div class="arc_height3"></div>';
			//image_string+='<div class="arc_height4"></div>';
			image_string+='<div class="msgtishu"></div>';
			image_string+='<div class="msgtishu1"></div>';
			image_string+='<div class="post">Height</div>';
			image_string+='<div class="msgtishu2"><hr color="red" size="6px"   width="'+width_three+'"> </div>';
        
        }
        img_ajx=imageName;
        image_string+='<div class="glass">A</div><div class="glass_a">A</div><div class="glass_b">B</div><div class="glass_c">C</div><div class="glass_d">D</div><div class="total">Total"</div>';
        
        document.getElementById('additional_image').innerHTML=image_string;
		
        
     	//setting position of post div
		
		//setting position of post div
		
		
		if(type_obj.value=="4BAY"){
		$('.post').css("top","17%");
        $('.post').css("left","92%");		
			
		$('.glass').css("display","none");
		}
		if(type_obj.value=="3BAY"){
		$('.post').css("top","20%");
        $('.post').css("left","90%");	
		
		$('.glass').css("display","none");	
		$('.glass_d').css("display","none");	
		}
		
		if(type_obj.value=="2BAY"){
		$('.post').css("top","30%");
        $('.post').css("left","84%");	
		
		$('.glass_a').css("top","73%");
        $('.glass_a').css("left","47%");
		
		$('.glass_b').css("top","56%");
        $('.glass_b').css("left","73%");
		
		$('.total').css("top","69%");
        $('.total').css("left","63%");
		
		
		$('.glass').css("display","none");		
		$('.glass_c').css("display","none");	
		$('.glass_d').css("display","none");	
		}
		if(type_obj.value=="1BAY"){
			
		$('.post').css("top","36%");
        $('.post').css("left","74%");	
		
		
		
		$('.left').css("top","23%");
        $('.left').css("left","30%");	
		
		
		$('.right').css("top","9%");
        $('.right').css("left","57%");	
		
		$('.glass').css("top","71%");
        $('.glass').css("left","64%");	
		
		$('.total').css("top","76%");
        $('.total').css("left","68%");
		
		
		$('.msgtishu').css("display","none");	
		$('.msgtishu1').css("display","none");	
		$('.msgtishu2').css("display","none");	
		$('.glass_a').css("display","none");	
		$('.glass_b').css("display","none");	
		$('.glass_c').css("display","none");	
		$('.glass_d').css("display","none");	
		}
		
		
		
		arc_glass_yn=arc_glass_obj.value;
		arc_glass_valss=arc_glass_value_obj.value;
	
		//arc_glass_type_value
		//endpanel_arc_glass_value
		
		
		
		
		
		//Desktop View
		
		if(arc_glass_yn=='yes')
		{
		var arcc_height=''+arc_glass_valss+'"';	
		$("div.arc_height1").text(arcc_height);	
			
		if(type_obj.value=="1BAY"){
			
		//for Full Arch		
		if(arc_glass_type_value=='FA')
		{
			
		
		if(arc_glass_valss=='2')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","16%");
        $('.left').css("left","22%");
		
		
		$('.right').css("top","10%");
        $('.right').css("left","57%");
			
		}		
			
		$('.arc_height1').css("top","24%");
        $('.arc_height1').css("left","58%");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","8%");
        $('.left').css("left","21%");
		
		
		$('.right').css("top","4%");
        $('.right').css("left","57%");
			
		}	
			
		
		$('.arc_height1').css("top","20%");
        $('.arc_height1').css("left","58%");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","15%");
        $('.left').css("left","22%");
		
		$('.right').css("top","10%");
        $('.right').css("left","57%");
			
		}		
		
		$('.arc_height1').css("top","22%");
        $('.arc_height1').css("left","58%");	
		

			
		}
		$('.post').css("top","41%");
        $('.post').css("left","77%");	
			
		$('.glass').css("top","74%");
        $('.glass').css("left","59%");
			
		$('.total').css("top","80%");
        $('.total').css("left","66%");
			
		}
		
		//for Eye or Curv  Arch		
		if(arc_glass_type_value=='CA')
		{
			
		
		if(arc_glass_valss=='2')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","17%");
        $('.left').css("left","20%");
		
		
		$('.right').css("top","10%");
        $('.right').css("left","57%");
			
		}		
			
		$('.arc_height1').css("top","25%");
        $('.arc_height1').css("left","58%");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","10%");
        $('.left').css("left","20%");
		
		
		$('.right').css("top","6%");
        $('.right').css("left","57%");
			
		}	
			
		
		$('.arc_height1').css("top","20%");
        $('.arc_height1').css("left","57%");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","17%");
        $('.left').css("left","20%");
		
		$('.right').css("top","10%");
        $('.right').css("left","57%");
			
		}		
		
		$('.arc_height1').css("top","24%");
        $('.arc_height1').css("left","57%");	
		

			
		}
		
		
		$('.post').css("top","40%");
        $('.post').css("left","75%");	
			
		$('.glass').css("top","74%");
        $('.glass').css("left","56%");
			
		$('.total').css("top","80%");
        $('.total').css("left","64%");
			
		}
		
		//for Random  Arch		
		if(arc_glass_type_value=='RD')
		{
			
		
		if(arc_glass_valss=='2')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","16%");
        $('.left').css("left","23%");
		
		
		$('.right').css("top","11%");
        $('.right').css("left","59%");
			
		}		
			
		$('.arc_height1').css("top","26%");
        $('.arc_height1').css("left","57%");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","9%");
        $('.left').css("left","22%");
		
		
		$('.right').css("top","4%");
        $('.right').css("left","59%");
			
		}	
			
		
		$('.arc_height1').css("top","20%");
        $('.arc_height1').css("left","59%");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","11%");
        $('.left').css("left","22%");
		
		$('.right').css("top","7%");
        $('.right').css("left","59%");
			
		}		
		
		$('.arc_height1').css("top","25%");
        $('.arc_height1').css("left","55%");	
		

			
		}
		$('.post').css("top","41%");
        $('.post').css("left","77%");	
			
		$('.glass').css("top","75%");
        $('.glass').css("left","58%");
			
		$('.total').css("top","80%");
        $('.total').css("left","65%");
		
		}
		

		
		
		
		
		
		
		
			
		}	
//2BAY		
		if(type_obj.value=="2BAY"){
			
		//for Full Arch		
		if(arc_glass_type_value=='FA')
		{
			
		
		if(arc_glass_valss=='2')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","23%");
        $('.left').css("left","11%");
		
		$('.right').css("top","13%");
        $('.right').css("left","72%");
			
		}		
			
		$('.arc_height1').css("top","30%");
        $('.arc_height1').css("left","43%");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","15%");
        $('.left').css("left","10%");
		
		$('.right').css("top","8%");
        $('.right').css("left","70%");
			
		}	
			
		
		$('.arc_height1').css("top","25%");
        $('.arc_height1').css("left","44%");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","22%");
        $('.left').css("left","10%");
		
		$('.right').css("top","13%");
        $('.right').css("left","70%");
			
		}		
		
		$('.arc_height1').css("top","28%");
        $('.arc_height1').css("left","44%");	
		

			
		}
		$('.post').css("top","37%");
        $('.post').css("left","85%");
			
		$('.glass_a').css("top","76%");
        $('.glass_a').css("left","44%");
		
		$('.glass_b').css("top","63%");
        $('.glass_b').css("left","72%");
			
		$('.total').css("top","74%");
        $('.total').css("left","64%");
		
		}
		
		//for Eye or Curv  Arch		
		if(arc_glass_type_value=='CA')
		{
			
		
		if(arc_glass_valss=='2')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","20%");
        $('.left').css("left","10%");
		
		$('.right').css("top","8%");
        $('.right').css("left","74%");
			
		}		
			
		$('.arc_height1').css("top","28%");
        $('.arc_height1').css("left","46%");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","16%");
        $('.left').css("left","11%");
		
		$('.right').css("top","4%");
        $('.right').css("left","74%");
			
		}	
			
		
		$('.arc_height1').css("top","24%");
        $('.arc_height1').css("left","46%");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","21%");
        $('.left').css("left","12%");
		
		$('.right').css("top","8%");
        $('.right').css("left","74%");
			
		}		
		
		$('.arc_height1').css("top","26%");
        $('.arc_height1').css("left","46%");	
		

			
		}
		$('.post').css("top","32%");
        $('.post').css("left","88%");
			
		$('.glass_a').css("top","74%");
        $('.glass_a').css("left","46%");
		
		$('.glass_b').css("top","59%");
        $('.glass_b').css("left","74%");
			
		$('.total').css("top","75%");
        $('.total').css("left","62%");
		
		}
		
		//for Random  Arch		
		if(arc_glass_type_value=='RD')
		{
			
		
		if(arc_glass_valss=='2')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","23%");
        $('.left').css("left","12%");
		
		$('.right').css("top","10%");
        $('.right').css("left","74%");
			
		}		
			
		$('.arc_height1').css("top","31%");
        $('.arc_height1').css("left","45%");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","17%");
        $('.left').css("left","12%");
		
		$('.right').css("top","6%");
        $('.right').css("left","74%");
			
		}	
			
		
		$('.arc_height1').css("top","27%");
        $('.arc_height1').css("left","48%");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","17%");
        $('.left').css("left","12%");
		
		$('.right').css("top","7%");
        $('.right').css("left","73%");
			
		}		
		
		$('.arc_height1').css("top","28%");
        $('.arc_height1').css("left","47%");	
		

			
		}
		$('.post').css("top","35%");
        $('.post').css("left","88%");
			
		$('.glass_a').css("top","77%");
        $('.glass_a').css("left","47%");
		
		$('.glass_b').css("top","61%");
        $('.glass_b').css("left","75%");
			
		$('.total').css("top","75%");
        $('.total').css("left","64%");
		
		}
			
		
		
			
			
			
		}	

//3BAY		
		if(type_obj.value=="3BAY"){
			
		
		//for Full Arch		
		if(arc_glass_type_value=='FA')
		{
			
		
		if(arc_glass_valss=='2')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","29%");
        $('.left').css("left","8%");
		
		$('.right').css("top","15%");
        $('.right').css("left","78%");
			
		}		
			
		$('.arc_height1').css("top","35%");
        $('.arc_height1').css("left","37%");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","23%");
        $('.left').css("left","8%");
		
		$('.right').css("top","12%");
        $('.right').css("left","78%");
		
		}	
			
		
		$('.arc_height1').css("top","31%");
        $('.arc_height1').css("left","36%");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		if(endpanel_arc_glass_value=='yes')	
		{
		$('.left').css("top","30%");
        $('.left').css("left","9%");
		
		$('.right').css("top","16%");
        $('.right').css("left","79%");
		}
		else{
		$('.left').css("top","29%");
        $('.left').css("left","8%");
		
		$('.right').css("top","15%");
        $('.right').css("left","78%");
		}
		
		}		
		
		$('.arc_height1').css("top","33%");
        $('.arc_height1').css("left","36%");
		

			
		}
		
		}
		
		//for Eye or Curv  Arch		
		if(arc_glass_type_value=='CA')
		{
			
		
		if(arc_glass_valss=='2')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","30%");
        $('.left').css("left","8%");
		
		$('.right').css("top","16%");
        $('.right').css("left","79%");
			
		}		
			
		$('.arc_height1').css("top","35%");
        $('.arc_height1').css("left","37%");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","26%");
        $('.left').css("left","8%");
		
		$('.right').css("top","13%");
        $('.right').css("left","80%");
		
		}	
			
		
		$('.arc_height1').css("top","32%");
        $('.arc_height1').css("left","38%");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","30%");
        $('.left').css("left","8%");
		
		$('.right').css("top","16%");
        $('.right').css("left","79%");
		
		}		
		
		$('.arc_height1').css("top","33%");
        $('.arc_height1').css("left","38%");
		

			
		}
		
		}
		
		//for Random  Arch		
		if(arc_glass_type_value=='RD')
		{
			
		
		if(arc_glass_valss=='2')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","33%");
        $('.left').css("left","9%");
		
		$('.right').css("top","15%");
        $('.right').css("left","80%");
			
		}		
			
		$('.arc_height1').css("top","38%");
        $('.arc_height1').css("left","36%");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","27%");
        $('.left').css("left","9%");
		
		$('.right').css("top","11%");
        $('.right').css("left","80%");
		
		}	
			
		
		$('.arc_height1').css("top","36%");
        $('.arc_height1').css("left","35%");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","28%");
        $('.left').css("left","9%");
		
		$('.right').css("top","12%");
        $('.right').css("left","80%");
		
		}		
		
		$('.arc_height1').css("top","35%");
        $('.arc_height1').css("left","39%");
		

			
		}
		
		}
		
		
		
		
		$('.post').css("top","33%");
        $('.post').css("left","91%");
			
		$('.glass_a').css("top","74%");
        $('.glass_a').css("left","37%");
		
		$('.glass_b').css("top","62%");
        $('.glass_b').css("left","63%");
		
		$('.glass_c').css("top","52%");
        $('.glass_c').css("left","81%");
				
		$('.total').css("top","65%");
        $('.total').css("left","67%");
				
		}			
		if(type_obj.value=="4BAY"){
			
		
		
		//for Full Arch		
		if(arc_glass_type_value=='FA')
		{
			
		
		if(arc_glass_valss=='2')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","36%");
        $('.left').css("left","6%");
		
		$('.right').css("top","21%");
        $('.right').css("left","82%");
			
		}		
			
		$('.arc_height1').css("top","41%");
        $('.arc_height1').css("left","29%");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","31%");
        $('.left').css("left","6%");
		
		$('.right').css("top","18%");
        $('.right').css("left","84%");
		
		}	
			
		
		$('.arc_height1').css("top","38%");
        $('.arc_height1').css("left","29%");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		if(endpanel_arc_glass_value=='yes')	
		{
		$('.left').css("top","36%");
        $('.left').css("left","6%");
		
		$('.right').css("top","21%");
        $('.right').css("left","83%");
		}
		else{
		$('.left').css("top","35%");
        $('.left').css("left","6%");
		
		$('.right').css("top","21%");
        $('.right').css("left","82%");
		}
		
		}		
		
		$('.arc_height1').css("top","40%");
        $('.arc_height1').css("left","29%");	
		}
		$('.post').css("top","36%");
        $('.post').css("left","92%");
			
		$('.glass_a').css("top","72%");
        $('.glass_a').css("left","29%");
		
		$('.glass_b').css("top","63%");
        $('.glass_b').css("left","52%");
		
		$('.glass_c').css("top","57%");
        $('.glass_c').css("left","69%");
		
		$('.glass_d').css("top","51%");
        $('.glass_d').css("left","84%");
					
		$('.total').css("top","63%");
        $('.total').css("left","65%");
			
		
		}
		
		//for Eye or Curv  Arch		
		if(arc_glass_type_value=='CA')
		{
			
		
		if(arc_glass_valss=='2')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","36%");
        $('.left').css("left","6%");
		
		$('.right').css("top","21%");
        $('.right').css("left","83%");
			
		}		
			
		$('.arc_height1').css("top","41%");
        $('.arc_height1').css("left","30%");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","32%");
        $('.left').css("left","6%");
		
		$('.right').css("top","19%");
        $('.right').css("left","84%");
		
		}	
			
		
		$('.arc_height1').css("top","39%");
        $('.arc_height1').css("left","30%");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","36%");
        $('.left').css("left","6%");
		
		$('.right').css("top","21%");
        $('.right').css("left","84%");
		
		}		
		
		$('.arc_height1').css("top","40%");
        $('.arc_height1').css("left","30%");
		

			
		}
		$('.post').css("top","36%");
        $('.post').css("left","92%");
			
		$('.glass_a').css("top","72%");
        $('.glass_a').css("left","28%");
		
		$('.glass_b').css("top","63%");
        $('.glass_b').css("left","51%");
		
		$('.glass_c').css("top","56%");
        $('.glass_c').css("left","69%");
		
		$('.glass_d').css("top","50%");
        $('.glass_d').css("left","84%");
					
		$('.total').css("top","63%");
        $('.total').css("left","65%");
			
		
		}
		
		//for Random  Arch		
		if(arc_glass_type_value=='RD')
		{
			
		
		if(arc_glass_valss=='2')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","41%");
        $('.left').css("left","8%");
		
		$('.right').css("top","26%");
        $('.right').css("left","80%");
			
		}		
			
		$('.arc_height1').css("top","46%");
        $('.arc_height1').css("left","31%");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","37%");
        $('.left').css("left","8%");
		
		$('.right').css("top","23%");
        $('.right').css("left","81%");
		
		}	
			
		
		$('.arc_height1').css("top","45%");
        $('.arc_height1').css("left","30%");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","38%");
        $('.left').css("left","8%");
		
		$('.right').css("top","24%");
        $('.right').css("left","81%");
		
		}		
		
		$('.arc_height1').css("top","45%");
        $('.arc_height1').css("left","31%");	
		

			
		}
		$('.post').css("top","40%");
        $('.post').css("left","90%");
			
		$('.glass_a').css("top","77%");
        $('.glass_a').css("left","30%");
		
		$('.glass_b').css("top","68%");
        $('.glass_b').css("left","51%");
		
		$('.glass_c').css("top","61%");
        $('.glass_c').css("left","68%");
		
		$('.glass_d').css("top","54%");
        $('.glass_d').css("left","82%");
					
		$('.total').css("top","68%");
        $('.total').css("left","65%");
		
		}
		
		
		
			
		}			
						
		}
		
		
		
		
        if("EP5"=="EP5"){
				
            if(glass_face_obj.value==1){
                if(left_lenght_obj.value=="select"){
                    $("div.left").text("Left");
                }else{
                    $("div.left").text(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
                    $('#c_glass_left_val').val(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
                    if(glassName_l!=''){
                        $('#c_glass_left').val(product_name_price[glassName_l][0]);     
                    } 
                } 
                if(right_lenght_obj.value=="select"){
                    $("div.right").text("Right");
                }else{
                    $("div.right").text(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
                    <!-- ani code-->
                    $('#c_glass_right_val').val(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
                    if(glassName_r!=''){
                        $('#c_glass_right').val(product_name_price[glassName_r][0]);
                    } 
                }
                
				
				
				<!-- ani code-->
				
				
            }
            else if(glass_face_obj.value==2){
                if(right_lenght_obj.value=="select"){
                    $("div.left").css("display","none");
                    $("div.right").text("Right");
                }else{
                    $("div.left").css("display","none");
                    $("div.right").text(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
                    <!-- ani code -->
                    if(glassName_r!=''){
                        $('#c_glass_right').val(product_name_price[glassName_r][0]);
                    }
                    $('#c_glass_right_val').val(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
                 <!-- ani code -->
                }
                
            }
            else if(glass_face_obj.value==3){
                if(left_lenght_obj.value=="select"){
                    $("div.right").css("display","none");
                    $("div.left").text("Left");
                }else{
                    $("div.right").css("display","none");
                    $("div.left").text(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
                    <!-- ani code -->
                    if(glassName_l!=''){
                        $('#c_glass_left').val(product_name_price[glassName_l][0]);
                    }      
                    $('#c_glass_left_val').val(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
                    <!-- ani code -->
                }
                
            }
            else if(glass_face_obj.value==4){
                $("div.left").css("display","none");
                $("div.right").css("display","none");
            }
			
        }
        if("EP5"=="EP5"){
			<!-- ani code -->
			//for custom face set value to hidden fileds
            if(post_height_obj.value=="select"){
                $("div.post").text("Height");                
            }else{
                $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                <!-- ani code -->
                $("div.post").text($('[name="post_height"]').find('option:selected').text());                
            }

        }
        
        if("EP5"=="EP15"){
		// setting if custom height is choosen for  EP15
			
            
			if($('#customheight').is(':checked')){
				$('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
				$("div.post").text(post_height.options[post_height.selectedIndex].text);
			}else{
				$("div.post").text(glass_face_obj.value+'"');
				$('#c_glass_post_val').val(glass_face_obj.value+'"');
				$('#is_custom').val('');
			}
        }
			
        if(type_obj.value=="1BAY"){
			
			<!-- ani code -->
			//for custom face set value to hidden fileds
			$('#c_glass_face_val').val($('[name="face_length"]').find('option:selected').text());
			if(glassName!=''){
			$('#c_glass_face').val(product_name_price[glassName][0]);
			}
			
		   if(flange_covers2_obj.value=="yes" && face_lenght_obj.value!="select"){
		   
		  $('#c_glass_a_light').val(product_name_price[light_a][0]);
           $('#c_glass_a_val_light').val(face_lenght_obj.options[face_lenght_obj.selectedIndex].text);
		   
		   }if(roasted_glass_obj.value=="yes"){
				if(roastedglass!=""){
					$('#rostedglass_id').val(product_name_price[roastedglass][0]);
					$('#rostedglass_val').val(roastedglassprice);
				}
		    }
			<!-- ani code -->
            if($('[name="face_length"]').find('option:selected').text()=="Select"){
                $("div.glass").text("A");
            }else{
                $("div.glass").text($('[name="face_length"]').find('option:selected').text());
            }
			var n1=getBeforeChar($('[name="face_length"]').find('option:selected').text())-0;
			//alert(n1)
			if(getAfterChar($('[name="face_length"]').find('option:selected').text())!=""){
			n1=(n1+2)+'-'+getAfterChar($('[name="face_length"]').find('option:selected').text())+'"';
			}else { n1=(n1+2)+'"';}
             if(n1=='2"'){
                $("div.total").text("Total");
            }else{
                $("div.total").text(n1);
                tot1=n1;
            }
             // $("div.total").text(n1);
			 if(face_lenght_obj.value == 'No Glass' || left_lenght_obj.value=="No Glass" || right_lenght_obj.value=="No Glass"){
			 
				noGlass()
			}
				
        }
        if(type_obj.value=="2BAY"){
			<!-- ani code -->
			
		
				$('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
				$('#c_glass_b_val').val($('[name="face_length_b"]').find('option:selected').text());
				if(glassName_a!=''&&glassName_b!=''){
				$('#c_glass_a').val(product_name_price[glassName_a][0]);
				$('#c_glass_b').val(product_name_price[glassName_b][0]);
				}	
				
            if(face_lenght_a_obj.value != 'No Glass' && face_lenght_b_obj.value != 'No Glass'){				
				if(flange_covers2_obj.value=="yes"){
                    if(face_lenght_a_obj.value!="select"){
			            $('#c_glass_a_light').val(product_name_price[light_a][0]);
                        $('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                    }
                    if(face_lenght_b_obj.value!="select"){
                        $('#c_glass_b_light').val(product_name_price[light_b][0]);
                        $('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                    }
		        }
		        if(roasted_glass_obj.value=="yes"){
					if(roastedglass!=""){
						$('#rostedglass_id').val(product_name_price[roastedglass][0]);
						$('#rostedglass_val').val(roastedglassprice);
					}
                }
            }
				
			if($('[name="face_length_a"]').find('option:selected').text()=="Select"){
                $("div.glass_a").text("A");
            }else{
                $("div.glass_a").text($('[name="face_length_a"]').find('option:selected').text());    
            }
            if($('[name="face_length_b"]').find('option:selected').text()=="Select"){
                $("div.glass_b").text("B");
            }else{
                $("div.glass_b").text($('[name="face_length_b"]').find('option:selected').text());    
            }
            
			var n1=getBeforeChar($('[name="face_length_a"]').find('option:selected').text())-0;
			var n2=getBeforeChar($('[name="face_length_b"]').find('option:selected').text())-0;
			var f_n1=getAfterChar($('[name="face_length_a"]').find('option:selected').text());
			//alert(f_n1)
			var f_n2=getAfterChar($('[name="face_length_b"]').find('option:selected').text());
			var total= getTotal(n1,n2,f_n1,f_n2);
			if(total=='2"'){
				$("div.total").text("Total");
			}else{
					$("div.total").text(total);
                    tot1=total;
			}
            
			<!-- ani code -->
			if(face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || left_lenght_obj.value=="No Glass" || right_lenght_obj.value=="No Glass"){
				noGlass()
			}
        }
		 
        if(type_obj.value=="3BAY"){
			
			<!-- ani code -->
			
		
			$('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
			$('#c_glass_b_val').val($('[name="face_length_b"]').find('option:selected').text());
			$('#c_glass_c_val').val($('[name="face_length_c"]').find('option:selected').text());
			if(glassName_a!=''&&glassName_b!=''&&glassName_c!=''){
			$('#c_glass_a').val(product_name_price[glassName_a][0]);
			$('#c_glass_b').val(product_name_price[glassName_b][0]);
			$('#c_glass_c').val(product_name_price[glassName_c][0]);	
			}
			if(face_lenght_a_obj.value != 'No Glass' && face_lenght_b_obj.value != 'No Glass' && face_lenght_c_obj.value!= 'No Glass' ){

			if(flange_covers2_obj.value=="yes"){
                if(face_lenght_a_obj.value!="select"){
			        $('#c_glass_a_light').val(product_name_price[light_a][0]);
                    $('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                }
                if(face_lenght_b_obj.value!="select"){
                    $('#c_glass_b_light').val(product_name_price[light_b][0]);
                    $('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                }
                if(face_lenght_c_obj.value!="select"){
                    $('#c_glass_c_light').val(product_name_price[light_c][0]);
                    $('#c_glass_c_val_light').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                }
		   
} 
				if(roasted_glass_obj.value=="yes"){
					if(roastedglass!=""){
						$('#rostedglass_id').val(product_name_price[roastedglass][0]);
						$('#rostedglass_val').val(roastedglassprice);
					}
				}
	
}
            if($('[name="face_length_a"]').find('option:selected').text()=="Select"){
                $("div.glass_a").text("A");
            }else{
                $("div.glass_a").text($('[name="face_length_a"]').find('option:selected').text());    
            }
            if($('[name="face_length_b"]').find('option:selected').text()=="Select"){
                $("div.glass_b").text("B");
            }else{
                $("div.glass_b").text($('[name="face_length_b"]').find('option:selected').text());    
            }
            if($('[name="face_length_c"]').find('option:selected').text()=="Select"){
                $("div.glass_c").text("C");
            }else{
                $("div.glass_c").text($('[name="face_length_c"]').find('option:selected').text());    
            }			
            // $("div.glass_a").text($('[name="face_length_a"]').find('option:selected').text());
            // $("div.glass_b").text($('[name="face_length_b"]').find('option:selected').text());
            // $("div.glass_c").text($('[name="face_length_c"]').find('option:selected').text());
			var n1=getBeforeChar($('[name="face_length_a"]').find('option:selected').text())-0;
			var n2=getBeforeChar($('[name="face_length_b"]').find('option:selected').text())-0;
			var n3=getBeforeChar($('[name="face_length_c"]').find('option:selected').text())-0;
			var f_n1=getAfterChar($('[name="face_length_a"]').find('option:selected').text());
			var f_n2=getAfterChar($('[name="face_length_b"]').find('option:selected').text());
			var f_n3=getAfterChar($('[name="face_length_c"]').find('option:selected').text());	
			//this function not working properly		
			var total=getTotal3Bay(n1,n2,n3,f_n1,f_n2,f_n3);
			if(total=='2"'){
				$("div.total").text("Total");
			}else{
					$("div.total").text(total);
                    tot1=total;
			}
            
			
			<!-- ani code -->
			if(face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value== 'No Glass' || left_lenght_obj.value=="No Glass" || right_lenght_obj.value=="No Glass"){
				noGlass()
			}
        }if(type_obj.value=="4BAY"){

			

			<!-- ani code -->

			<!--for send value in hidden field-->

		

			$('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());

			$('#c_glass_b_val').val($('[name="face_length_b"]').find('option:selected').text());

			$('#c_glass_c_val').val($('[name="face_length_c"]').find('option:selected').text());
			$('#c_glass_d_val').val($('[name="face_length_d"]').find('option:selected').text());

			if(glassName_a!=''&&glassName_b!=''&&glassName_c!=''&&glassName_d!=''){

			$('#c_glass_a').val(product_name_price[glassName_a][0]);

			$('#c_glass_b').val(product_name_price[glassName_b][0]);

			$('#c_glass_c').val(product_name_price[glassName_c][0]);	
			$('#c_glass_d').val(product_name_price[glassName_d][0]);	

			}
			if(face_lenght_a_obj.value != 'No Glass' && face_lenght_b_obj.value != 'No Glass' && face_lenght_c_obj.value!= 'No Glass' && face_lenght_d_obj.value!= 'No Glass' ){
                if(flange_covers2_obj.value=="yes"){
                    if(face_lenght_a_obj.value!="select"){
                        $('#c_glass_a_light').val(product_name_price[light_a][0]);
                        $('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                    }
                    if(face_lenght_b_obj.value!="select"){
                        $('#c_glass_b_light').val(product_name_price[light_b][0]);
                        $('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                    }
                    if(face_lenght_c_obj.value!="select"){
                        $('#c_glass_c_light').val(product_name_price[light_c][0]);
                        $('#c_glass_c_val_light').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                    }
                    if(face_lenght_d_obj.value!="select"){
                        $('#c_glass_d_light').val(product_name_price[light_d][0]);
                        $('#c_glass_d_val_light').val(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
                    }
                }
                if(roasted_glass_obj.value=="yes"){
					if(roastedglass!=""){
						$('#rostedglass_id').val(product_name_price[roastedglass][0]);
						$('#rostedglass_val').val(roastedglassprice);
					}
                }
            }
			
            if($('[name="face_length_a"]').find('option:selected').text()=="Select"){
                $("div.glass_a").text("A");
            }else{
                $("div.glass_a").text($('[name="face_length_a"]').find('option:selected').text());    
            }
            if($('[name="face_length_b"]').find('option:selected').text()=="Select"){
                $("div.glass_b").text("B");
            }else{
                $("div.glass_b").text($('[name="face_length_b"]').find('option:selected').text());    
            }
            if($('[name="face_length_c"]').find('option:selected').text()=="Select"){
                $("div.glass_c").text("C");
            }else{
                $("div.glass_c").text($('[name="face_length_c"]').find('option:selected').text());    
            }           
            if($('[name="face_length_d"]').find('option:selected').text()=="Select"){
                $("div.glass_d").text("D");
            }else{
                $("div.glass_d").text($('[name="face_length_d"]').find('option:selected').text());    
            }  
   //          $("div.glass_a").text($('[name="face_length_a"]').find('option:selected').text());

   //          $("div.glass_b").text($('[name="face_length_b"]').find('option:selected').text());

   //          $("div.glass_c").text($('[name="face_length_c"]').find('option:selected').text());
			
			// $("div.glass_d").text($('[name="face_length_d"]').find('option:selected').text());
      
			var n1=getBeforeChar($('[name="face_length_a"]').find('option:selected').text())-0;

			var n2=getBeforeChar($('[name="face_length_b"]').find('option:selected').text())-0;

			var n3=getBeforeChar($('[name="face_length_c"]').find('option:selected').text())-0;
			var n4=getBeforeChar($('[name="face_length_d"]').find('option:selected').text())-0;

			var f_n1=getAfterChar($('[name="face_length_a"]').find('option:selected').text());

			var f_n2=getAfterChar($('[name="face_length_b"]').find('option:selected').text());

			var f_n3=getAfterChar($('[name="face_length_c"]').find('option:selected').text());
            var f_n4=getAfterChar($('[name="face_length_d"]').find('option:selected').text());			

			//this function not working properly	

                    //alert(f_n4);
                    // alert(n4);			

			var total=getTotal4Bay(n1,n2,n3,n4,f_n1,f_n2,f_n3,f_n4);

			
			if(total=='2"'){
				$("div.total").text("Total");
			}else{
					$("div.total").text(total);
                    tot1=total;
			}
            

			

			<!-- ani code -->
			
			if(face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value== 'No Glass' || face_lenght_d_obj.value== 'No Glass' || left_lenght_obj.value=="No Glass" || right_lenght_obj.value=="No Glass"){

				noGlass()

			}

        }
    		
		document.getElementById("products_ids").innerHTML=str;
        
        document.getElementById("left-post").innerHTML=leftPostPrice+".00";
        document.getElementById("right-post").innerHTML=rightPostPrice+".00";
        document.getElementById("trasition-post").innerHTML=t_post_price+".00";
        document.getElementById("face-glass").innerHTML=glassPrice+".00";
		
		document.getElementById("mailbox-cutout-price").innerHTML=mailboxCutoutPriceTotal+".00";;

		
        document.getElementById("total").innerHTML=totalPrice;
		 document.getElementById("make-adjustable").innerHTML=adjust_price+".00"; 
       
       // if("EP5"=="EP5"){
            document.getElementById("flange-cover").innerHTML=flangeCoversPrice+".00";
			//document.getElementById("flange-under-counter").innerHTML=flangeUnderCounterPrice+".00"; 
			
			 if(roasted_glass_obj.value=="yes"){
          document.getElementById("roasted-glass").innerHTML=roastedglassprice;	
             }else{
              document.getElementById("roasted-glass").innerHTML=roastedglassprice+".00";
                     }		  
             document.getElementById("lightbar").innerHTML=flangeCoversPrice2+".00";  			
       // }

        if("EP5"!="EP15"){
			if(glass_face_obj.value==1){
                document.getElementById("left-Panel").innerHTML=(facePrice_l)+".00";
				document.getElementById("right-panel").innerHTML=(facePrice_r)+".00";
            }
            if(glass_face_obj.value==2){
                document.getElementById("left-Panel").innerHTML="0.00";
				document.getElementById("right-panel").innerHTML=facePrice_r+".00";
            }
            if(glass_face_obj.value==3){
                document.getElementById("left-Panel").innerHTML=facePrice_l+".00";
				document.getElementById("right-panel").innerHTML="0.00";
            }
            if(glass_face_obj.value==4){
                document.getElementById("left-Panel").innerHTML="0.00";
				document.getElementById("right-panel").innerHTML="0.00";
            }
            
        }
        // right_lenght_obj=form.right_length;
        // left_lenght_obj=form.left_length;
        // post_height_obj=form.post_height;
        // face_lenght_obj=form.face_length;
        // face_lenght_a_obj=form.face_length_a;
        // face_lenght_b_obj=form.face_length_b;
        // face_lenght_c_obj=form.face_length_c;
        //         face_lenght_d_obj=form.face_length_d;       
        // type_obj=form.type;
        
        
        // //alert(form.glass_face.name);
        // glass_face_obj=form.glass_face;
        // corner_obj=form.rounded_corners;
        // flange_covers_obj=form.flange_covers;
        // flange_covers2_obj=form.light_bar;
        // roasted_glass_obj=form.roasted_glass;
        // choose_finish_obj=form.choose_finish;

        if(right_lenght_obj.value=="select"){
            $("#right_err").attr("src","img/iconCheckOff.gif");
            one=false;
        }else{
            $("#right_err").attr("src","img/iconCheckOn.gif");
            one=true;
        } 
        if(left_lenght_obj.value=="select"){
            two=false;
            $("#left_err").attr("src","img/iconCheckOff.gif");
        }else{
            $("#left_err").attr("src","img/iconCheckOn.gif");
            two=true;
        }
        if(post_height_obj.value=="select"){
            $("#post_err").attr("src","img/iconCheckOff.gif");
            three=false;
        }else{
            $("#post_err").attr("src","img/iconCheckOn.gif");
            three=true;
        }
        if(type_obj.value=="1BAY"){
            if(face_lenght_obj!=null && face_lenght_obj.value=="select"){
                $("#glass_a_err").attr("src","img/iconCheckOff.gif");
                four=false;
            }else{
                $("#glass_a_err").attr("src","img/iconCheckOn.gif");
                four=true;
            }
			if(one&&two&&three&&four){
                //$("#froast").css("display","");
            }else{
                //$("#froast").css("display","none");
            }
        }else if(type_obj.value=="2BAY"){
            if(face_lenght_a_obj!=null && face_lenght_a_obj.value=="select"){
                $("#glass_a_err").attr("src","img/iconCheckOff.gif");
                four=false;
            }else{
                $("#glass_a_err").attr("src","img/iconCheckOn.gif");
                four=true;
            }
            if(face_lenght_b_obj!=null && face_lenght_b_obj.value=="select"){
                $("#glass_b_err").attr("src","img/iconCheckOff.gif");
                four=false;
            }else{
                $("#glass_b_err").attr("src","img/iconCheckOn.gif");
                four=true;
            }
			if(one&&two&&three&&four){
                //$("#froast").css("display","");
            }else{
                //$("#froast").css("display","none");
            }
        }else if(type_obj.value=="3BAY"){
            if(face_lenght_a_obj!=null && face_lenght_a_obj.value=="select"){
                $("#glass_a_err").attr("src","img/iconCheckOff.gif");
                four=false;
            }else{
                $("#glass_a_err").attr("src","img/iconCheckOn.gif");
                four=true;
            }
            if(face_lenght_b_obj!=null && face_lenght_b_obj.value=="select"){
                $("#glass_b_err").attr("src","img/iconCheckOff.gif");
                four=false;
            }else{
                $("#glass_b_err").attr("src","img/iconCheckOn.gif");
                four=true;
            }
            if(face_lenght_c_obj!=null && face_lenght_c_obj.value=="select"){
                $("#glass_c_err").attr("src","img/iconCheckOff.gif");
                four=false;
            }else{
                $("#glass_c_err").attr("src","img/iconCheckOn.gif");
                four=true;
            }
			if(one&&two&&three&&four){
                //$("#froast").css("display","");
            }else{
                //$("#froast").css("display","none");
            }
        }else if (type_obj.value=="4BAY"){
            if(face_lenght_a_obj!=null && face_lenght_a_obj.value=="select"){
                $("#glass_a_err").attr("src","img/iconCheckOff.gif");
                four=false;
            }else{
                $("#glass_a_err").attr("src","img/iconCheckOn.gif");
                four=true;
            }
            if(face_lenght_b_obj!=null && face_lenght_b_obj.value=="select"){
                $("#glass_b_err").attr("src","img/iconCheckOff.gif");
                four=false;
            }else{
                $("#glass_b_err").attr("src","img/iconCheckOn.gif");
                four=true;
            }
            if(face_lenght_c_obj!=null && face_lenght_c_obj.value=="select"){
                $("#glass_c_err").attr("src","img/iconCheckOff.gif");
                four=false;
            }else{
                $("#glass_c_err").attr("src","img/iconCheckOn.gif");
                four=true;
            }
            if(face_lenght_d_obj!=null && face_lenght_d_obj.value=="select"){
                $("#glass_d_err").attr("src","img/iconCheckOff.gif");
                four=false;
            }else{
                $("#glass_d_err").attr("src","img/iconCheckOn.gif");
                four=true;
            }
			if(one&&two&&three&&four){
                //$("#froast").css("display","");
            }else{
                //$("#froast").css("display","none");
            }
        }
        
        if(flange_covers_obj.value=="select"){
            $("#flange_err").attr("src","img/iconCheckOff.gif");
            five=false;
        }else{
            $("#flange_err").attr("src","img/iconCheckOn.gif");
            five=true;
        }
		
		 if(flange_under_counter_obj.value=="select"){
            $("#flange_under_counter_err").attr("src","img/iconCheckOff.gif");
            five=false;
        }else{
            $("#flange_under_counter_err").attr("src","img/iconCheckOn.gif");
            five=true;
        }
		
		
		
		
        if(flange_covers2_obj.value=="select"){
            $("#light_err").attr("src","img/iconCheckOff.gif");
            six=false;
        }else{
            $("#light_err").attr("src","img/iconCheckOn.gif");
            six=true;
        }
        if(corner_obj.value=="select"){
            $("#round_err").attr("src","img/iconCheckOff.gif");
            seven=false;
        }else{
            $("#round_err").attr("src","img/iconCheckOn.gif");
            seven=true;
        }
        if(choose_finish_obj.value=="select"){
            $("#finish_err").attr("src","img/iconCheckOff.gif");
            eight=false;
        }else{
            $("#finish_err").attr("src","img/iconCheckOn.gif");
            eight=true;
        }
        if(glass_face_obj.value==2){
            $("#left_err").attr("src","img/iconCheckOn.gif");
            two=true;
            if(!zero){
                $("#left_err").attr("src","img/iconCheckOff.gif");
            }
        }else if(glass_face_obj.value==3){
            $("#right_err").attr("src","img/iconCheckOn.gif");
            one=true;
            if(!zero){
                $("#right_err").attr("src","img/iconCheckOff.gif");
            }
        }else if(glass_face_obj.value==4){
            $("#left_err").attr("src","img/iconCheckOn.gif");
            $("#right_err").attr("src","img/iconCheckOn.gif");
            one=true;
            two=true;
            if(!zero){
                $("#left_err").attr("src","img/iconCheckOff.gif");
                $("#right_err").attr("src","img/iconCheckOff.gif");
            }
        }
        if(type_obj.value=="1BAY"){
            if(glass_face_obj.value==1){
                if(face_lenght_obj.value=="No Glass" || left_lenght_obj.value=="No Glass" || right_lenght_obj.value=="No Glass"){
                    $("#light_err").attr("src","img/iconCheckOn.gif");
                    $("#round_err").attr("src","img/iconCheckOn.gif");
                    if(form.adjustable.value=="no"){
                        corner_obj.value="select";
                    }else{
                        corner_obj.value="round";
                    }
                    corner_obj.disabled=true;
                }else{
                    if(form.adjustable.value=="no"){
                        corner_obj.disabled=false;
                    }
                    if(corner_obj.value=="select"){
                        $("#round_err").attr("src","img/iconCheckOff.gif");
                    }else{
                        $("#round_err").attr("src","img/iconCheckOn.gif");
                    }       
                }
            }else if(glass_face_obj.value==2){
                if(face_lenght_obj.value=="No Glass" || right_lenght_obj.value=="No Glass"){
                    $("#light_err").attr("src","img/iconCheckOn.gif");
                    $("#round_err").attr("src","img/iconCheckOn.gif");
                    if(form.adjustable.value=="no"){
                        corner_obj.value="select";
                    }else{
                        corner_obj.value="round";
                    }
                    corner_obj.disabled=true;
                }else{
                    if(form.adjustable.value=="no"){
                        corner_obj.disabled=false;
                    }
                    if(corner_obj.value=="select"){
                        $("#round_err").attr("src","img/iconCheckOff.gif");
                    }else{
                        $("#round_err").attr("src","img/iconCheckOn.gif");
                    }       
                }
            }else if(glass_face_obj.value==3){
                if(face_lenght_obj.value=="No Glass" || left_lenght_obj.value=="No Glass"){
                    $("#light_err").attr("src","img/iconCheckOn.gif");
                    $("#round_err").attr("src","img/iconCheckOn.gif");
                    if(form.adjustable.value=="no"){
                        corner_obj.value="select";
                    }else{
                        corner_obj.value="round";
                    }
                    corner_obj.disabled=true;
                }else{
                    if(form.adjustable.value=="no"){
                        corner_obj.disabled=false;
                    }
                    if(corner_obj.value=="select"){
                        $("#round_err").attr("src","img/iconCheckOff.gif");
                    }else{
                        $("#round_err").attr("src","img/iconCheckOn.gif");
                    }       
                }
            }else if(glass_face_obj.value==4){
                if(face_lenght_obj.value=="No Glass"){
                    $("#light_err").attr("src","img/iconCheckOn.gif");
                    $("#round_err").attr("src","img/iconCheckOn.gif");
                    if(form.adjustable.value=="no"){
                        corner_obj.value="select";
                    }else{
                        corner_obj.value="round";
                    }
                    corner_obj.disabled=true;
                }else{
                    if(form.adjustable.value=="no"){
                        corner_obj.disabled=false;
                    }
                    if(corner_obj.value=="select"){
                        $("#round_err").attr("src","img/iconCheckOff.gif");
                    }else{
                        $("#round_err").attr("src","img/iconCheckOn.gif");
                    }       
                }
            }
                
        }
        if(type_obj.value=="2BAY"){
            if(glass_face_obj.value==1){
                if(face_lenght_a_obj.value=="No Glass" || face_lenght_b_obj.value=="No Glass" || left_lenght_obj.value=="No Glass" || right_lenght_obj.value=="No Glass"){
                    $("#light_err").attr("src","img/iconCheckOn.gif");
                    if(form.adjustable.value=="no"){
                        corner_obj.value="select";
                    }else{
                        corner_obj.value="round";
                    }
                    corner_obj.disabled=true;
                    $("#round_err").attr("src","img/iconCheckOn.gif");
                }else{
                    if(form.adjustable.value=="no"){
                        corner_obj.disabled=false;
                    }
                    if(corner_obj.value=="select"){
                        $("#round_err").attr("src","img/iconCheckOff.gif");
                        seven=false;
                    }else{
                        $("#round_err").attr("src","img/iconCheckOn.gif");
                        seven=true;
                    }  
                }
            }else if(glass_face_obj.value==2){
                if(face_lenght_a_obj.value=="No Glass" || face_lenght_b_obj.value=="No Glass" || right_lenght_obj.value=="No Glass"){
                    $("#light_err").attr("src","img/iconCheckOn.gif");
                    if(form.adjustable.value=="no"){
                        corner_obj.value="select";
                    }else{
                        corner_obj.value="round";
                    }
                    corner_obj.disabled=true;
                    $("#round_err").attr("src","img/iconCheckOn.gif");
                }else{
                    if(form.adjustable.value=="no"){
                        corner_obj.disabled=false;
                    }
                    if(corner_obj.value=="select"){
                        $("#round_err").attr("src","img/iconCheckOff.gif");
                        seven=false;
                    }else{
                        $("#round_err").attr("src","img/iconCheckOn.gif");
                        seven=true;
                    }  
                }
            }else if(glass_face_obj.value==3){
                if(face_lenght_a_obj.value=="No Glass" || face_lenght_b_obj.value=="No Glass" || left_lenght_obj.value=="No Glass"){
                    $("#light_err").attr("src","img/iconCheckOn.gif");
                    if(form.adjustable.value=="no"){
                        corner_obj.value="select";
                    }else{
                        corner_obj.value="round";
                    }
                    corner_obj.disabled=true;
                    $("#round_err").attr("src","img/iconCheckOn.gif");
                }else{
                    if(form.adjustable.value=="no"){
                        corner_obj.disabled=false;
                    }
                    if(corner_obj.value=="select"){
                        $("#round_err").attr("src","img/iconCheckOff.gif");
                        seven=false;
                    }else{
                        $("#round_err").attr("src","img/iconCheckOn.gif");
                        seven=true;
                    }  
                }
            }else if(glass_face_obj.value==4){
                if(face_lenght_a_obj.value=="No Glass" || face_lenght_b_obj.value=="No Glass"){
                    $("#light_err").attr("src","img/iconCheckOn.gif");
                    if(form.adjustable.value=="no"){
                        corner_obj.value="select";
                    }else{
                        corner_obj.value="round";
                    }
                    corner_obj.disabled=true;
                    $("#round_err").attr("src","img/iconCheckOn.gif");
                }else{
                    if(form.adjustable.value=="no"){
                        corner_obj.disabled=false;
                    }
                    if(corner_obj.value=="select"){
                        $("#round_err").attr("src","img/iconCheckOff.gif");
                        seven=false;
                    }else{
                        $("#round_err").attr("src","img/iconCheckOn.gif");
                        seven=true;
                    }  
                }
            }
                
        }
        if(type_obj.value=="3BAY"){
            if(glass_face_obj.value==1){
                if(face_lenght_a_obj.value=="No Glass" || face_lenght_b_obj.value=="No Glass" || face_lenght_c_obj.value=="No Glass" || left_lenght_obj.value=="No Glass" || right_lenght_obj.value=="No Glass"){
                    four=true;
                    six=true;
                    $("#light_err").attr("src","img/iconCheckOn.gif");
                    if(form.adjustable.value=="no"){
                        corner_obj.value="select";
                    }else{
                        corner_obj.value="round";
                    }
                    corner_obj.disabled=true;
                    $("#round_err").attr("src","img/iconCheckOn.gif");
                    seven=true;
                    two=true;
                    one=true;
                }else{
                    if(form.adjustable.value=="no"){
                        corner_obj.disabled=false;
                    }
                    if(corner_obj.value=="select"){
                        $("#round_err").attr("src","img/iconCheckOff.gif");
                        seven=false;
                    }else{
                        $("#round_err").attr("src","img/iconCheckOn.gif");
                        seven=true;
                    }  
                }
            }else if(glass_face_obj.value==2){
                if(face_lenght_a_obj.value=="No Glass" || face_lenght_b_obj.value=="No Glass" || face_lenght_c_obj.value=="No Glass" || right_lenght_obj.value=="No Glass"){
                    four=true;
                    six=true;
                    $("#light_err").attr("src","img/iconCheckOn.gif");
                    if(form.adjustable.value=="no"){
                        corner_obj.value="select";
                    }else{
                        corner_obj.value="round";
                    }
                    corner_obj.disabled=true;
                    $("#round_err").attr("src","img/iconCheckOn.gif");
                    seven=true;
                    two=true;
                    one=true;
                }else{
                    if(form.adjustable.value=="no"){
                        corner_obj.disabled=false;
                    }
                    if(corner_obj.value=="select"){
                        $("#round_err").attr("src","img/iconCheckOff.gif");
                        seven=false;
                    }else{
                        $("#round_err").attr("src","img/iconCheckOn.gif");
                        seven=true;
                    }  
                }
            }else if(glass_face_obj.value==3){
                if(face_lenght_a_obj.value=="No Glass" || face_lenght_b_obj.value=="No Glass" || face_lenght_c_obj.value=="No Glass" || left_lenght_obj.value=="No Glass"){
                    four=true;
                    six=true;
                    $("#light_err").attr("src","img/iconCheckOn.gif");
                    if(form.adjustable.value=="no"){
                        corner_obj.value="select";
                    }else{
                        corner_obj.value="round";
                    }
                    corner_obj.disabled=true;
                    $("#round_err").attr("src","img/iconCheckOn.gif");
                    seven=true;
                    two=true;
                    one=true;
                }else{
                    if(form.adjustable.value=="no"){
                        corner_obj.disabled=false;
                    }
                    if(corner_obj.value=="select"){
                        $("#round_err").attr("src","img/iconCheckOff.gif");
                        seven=false;
                    }else{
                        $("#round_err").attr("src","img/iconCheckOn.gif");
                        seven=true;
                    }  
                }
            }else if(glass_face_obj.value==4){
                if(face_lenght_a_obj.value=="No Glass" || face_lenght_b_obj.value=="No Glass" || face_lenght_c_obj.value=="No Glass"){
                    four=true;
                    six=true;
                    $("#light_err").attr("src","img/iconCheckOn.gif");
                    if(form.adjustable.value=="no"){
                        corner_obj.value="select";
                    }else{
                        corner_obj.value="round";
                    }
                    corner_obj.disabled=true;
                    $("#round_err").attr("src","img/iconCheckOn.gif");
                    seven=true;
                    two=true;
                    one=true;
                }else{
                    if(form.adjustable.value=="no"){
                        corner_obj.disabled=false;
                    }
                    if(corner_obj.value=="select"){
                        $("#round_err").attr("src","img/iconCheckOff.gif");
                        seven=false;
                    }else{
                        $("#round_err").attr("src","img/iconCheckOn.gif");
                        seven=true;
                    }  
                }
            }
                
        }
        if(type_obj.value=="4BAY"){
            if(glass_face_obj.value==1){
                if(face_lenght_a_obj.value=="No Glass" || face_lenght_b_obj.value=="No Glass" || face_lenght_c_obj.value=="No Glass" || face_lenght_d_obj.value=="No Glass" || left_lenght_obj.value=="No Glass" || right_lenght_obj.value=="No Glass"){
                    four=true;
                    six=true;
                    $("#light_err").attr("src","img/iconCheckOn.gif");
                    if(form.adjustable.value=="no"){
                        corner_obj.value="select";
                    }else{
                        corner_obj.value="round";
                    }
                    corner_obj.disabled=true;
                    $("#round_err").attr("src","img/iconCheckOn.gif");
                    seven=true;
                    two=true;
                    one=true;
                }else{
                    if(form.adjustable.value=="no"){
                        corner_obj.disabled=false;
                    }
                    if(corner_obj.value=="select"){
                        $("#round_err").attr("src","img/iconCheckOff.gif");
                        seven=false;
                    }else{
                        $("#round_err").attr("src","img/iconCheckOn.gif");
                        seven=true;
                    }  
                }
            }else if(glass_face_obj.value==2){
                if(face_lenght_a_obj.value=="No Glass" || face_lenght_b_obj.value=="No Glass" || face_lenght_c_obj.value=="No Glass" || face_lenght_d_obj.value=="No Glass" || right_lenght_obj.value=="No Glass"){
                    four=true;
                    six=true;
                    $("#light_err").attr("src","img/iconCheckOn.gif");
                    if(form.adjustable.value=="no"){
                        corner_obj.value="select";
                    }else{
                        corner_obj.value="round";
                    }
                    corner_obj.disabled=true;
                    $("#round_err").attr("src","img/iconCheckOn.gif");
                    seven=true;
                    two=true;
                    one=true;
                }else{
                    if(form.adjustable.value=="no"){
                        corner_obj.disabled=false;
                    }
                    if(corner_obj.value=="select"){
                        $("#round_err").attr("src","img/iconCheckOff.gif");
                        seven=false;
                    }else{
                        $("#round_err").attr("src","img/iconCheckOn.gif");
                        seven=true;
                    }  
                }
            }else if(glass_face_obj.value==3){
                if(face_lenght_a_obj.value=="No Glass" || face_lenght_b_obj.value=="No Glass" || face_lenght_c_obj.value=="No Glass" || face_lenght_d_obj.value=="No Glass" || left_lenght_obj.value=="No Glass"){
                    four=true;
                    six=true;
                    $("#light_err").attr("src","img/iconCheckOn.gif");
                    if(form.adjustable.value=="no"){
                        corner_obj.value="select";
                    }else{
                        corner_obj.value="round";
                    }
                    corner_obj.disabled=true;
                    $("#round_err").attr("src","img/iconCheckOn.gif");
                    seven=true;
                    two=true;
                    one=true;
                }else{
                    if(form.adjustable.value=="no"){
                        corner_obj.disabled=false;
                    }
                    if(corner_obj.value=="select"){
                        $("#round_err").attr("src","img/iconCheckOff.gif");
                        seven=false;
                    }else{
                        $("#round_err").attr("src","img/iconCheckOn.gif");
                        seven=true;
                    }  
                }
            }else if(glass_face_obj.value==4){
                if(face_lenght_a_obj.value=="No Glass" || face_lenght_b_obj.value=="No Glass" || face_lenght_c_obj.value=="No Glass" || face_lenght_d_obj.value=="No Glass"){
                    four=true;
                    six=true;
                    $("#light_err").attr("src","img/iconCheckOn.gif");
                    if(form.adjustable.value=="no"){
                        corner_obj.value="select";
                    }else{
                        corner_obj.value="round";
                    }
                    corner_obj.disabled=true;
                    $("#round_err").attr("src","img/iconCheckOn.gif");
                    seven=true;
                    two=true;
                    one=true;
                }else{
                    if(form.adjustable.value=="no"){
                        corner_obj.disabled=false;
                    }
                    if(corner_obj.value=="select"){
                        $("#round_err").attr("src","img/iconCheckOff.gif");
                        seven=false;
                    }else{
                        $("#round_err").attr("src","img/iconCheckOn.gif");
                        seven=true;
                    }  
                }
            }
                
        }
        if(zero&&one&&two&&three&&four&&five&&six&&seven&&eight){
            //$("#add").removeAttr("disabled");
            //$("#add").css("opacity","1");
        }else{
            //$("#add").css("opacity","0.3");
        }

        

	}  
</script>














<script type="text/javascript">


    function myFunction(form){
        var check=ck=true;
        var x='<center><img src="img/addToCartWindow.jpg" width="460px"></center>';
        x+='<ul style="margin-left:30px;">';
        if(form.post_height.value=="select"){
            x+='<li>Post Height <span style="color:red">?</span></li>';
            check=false;
        }
        if(form.type.value=="1BAY"){
            if(form.face_length.value=="No Glass"){
                ck=false;
            }
            if(form.face_length.value=="select"){
                x+='<li>Face Length A <span style="color:red">?</span></li>';
                check=false;
            }
        }else if(form.type.value=="2BAY"){
            if(form.face_length_a.value=="No Glass" || form.face_length_b.value=="No Glass"){
                ck=false;
            }
            if(form.face_length_a.value=="select"){
                x+='<li>Face Length A <span style="color:red">?</span></li>';
                check=false;
            }
            if(form.face_length_b.value=="select"){
                x+='<li>Face Length B <span style="color:red">?</span></li>';
                check=false;
            }
            
        }else if(form.type.value=="3BAY"){
            if(form.face_length_a.value=="No Glass" || form.face_length_b.value=="No Glass" || form.face_length_c.value=="No Glass"){
               ck=false;
            }
            if(form.face_length_a.value=="select"){
                x+='<li>Face Length A <span style="color:red">?</span></li>';
                check=false;
            }
            if(form.face_length_b.value=="select"){
                x+='<li>Face Length B <span style="color:red">?</span></li>';
                check=false;
            }
            if(form.face_length_c.value=="select"){
                x+='<li>Face Length C <span style="color:red">?</span></li>';
                check=false;
            }
        }else if(form.type.value=="4BAY"){
            if(form.face_length_a.value=="No Glass" || form.face_length_b.value=="No Glass" || form.face_length_c.value=="No Glass" || form.face_length_d.value=="No Glass"){
                ck=false;
            }
            if(form.face_length_a.value=="select"){
                x+='<li>Face Length A <span style="color:red">?</span></li>';
                check=false;
            }
            if(form.face_length_b.value=="select"){
                x+='<li>Face Length B <span style="color:red">?</span></li>';
                check=false;
            }
            if(form.face_length_c.value=="select"){
                x+='<li>Face Length C <span style="color:red">?</span></li>';
                check=false;
            }
            if(form.face_length_d.value=="select"){
                x+='<li>Face Length D <span style="color:red">?</span></li>';
                check=false;
            }
        }
        if(form.glass_face.value==1){
            if(form.right_length.value=="select"){
                x+='<li>Right Length <span style="color:red">?</span></li>';
                check=false;
            }
            if(form.left_length.value=="select"){
                x+='<li>Left Length <span style="color:red">?</span></li>';
                check=false;
            }
        }else if(form.glass_face.value==2){
            if(form.right_length.value=="select"){
                x+='<li>Right Length <span style="color:red">?</span></li>';
                check=false;
            }
        }else if(form.glass_face.value==3){
            if(form.left_length.value=="select"){
                x+='<li>Left Length <span style="color:red">?</span></li>';
                check=false;
            }
        }else if(form.glass_face.value==4){

        }
        if($('#end_options').val()=="select"){
            x+='<li>End Panels <span style="color:red">?</span></li>';
            check=false;
        }
        if(form.flange_covers.value=="select"){
            x+='<li>Flange Covers <span style="color:red">?</span></li>';
            check=false;
        }

        if(form.rounded_corners.value=="select" && ck){
            x+='<li>Glass Corners <span style="color:red">?</span></li>';
            check=false;
        }
        if(form.light_bar.value=="select"){
            x+='<li>Light Bar <span style="color:red">?</span></li>';
            check=false;
        }
        if(form.choose_finish.value=="select"){
            x+='<li>Post Finish <span style="color:red">?</span></li>';
            check=false;
        }
        x+='</ul>';
        if(!check){
            var elem = $(this).closest('.item');
        
            $.confirm({
            
    
                'title'     : 'More Information Is Needed.....',
                'message'   :x,
                'buttons'   : {
                    'OK'   : {
                        'class' : 'blue',
                        'action': function(){
                        }
                    }
                }
            });

            return false;
        }else{
            return true;
        }
    };
     function myFunction2(form){    
        //var form=document.forms['cart_quantity'];
        if(myFunction(document.forms['cart_quantity'])){
            var bay=form.type.value;
            var var1=var2=var3=var4=var5=var6=var7=var8=glass_corner=lightbar=postfinish=adjtb=frosted=flange="";
		
		flange=form.flange_covers.options[form.flange_covers.selectedIndex].text;
            if(bay=="1BAY"){
                if(form.face_length!==undefined){
                    var1=form.face_length.options[form.face_length.selectedIndex].text;
                }else{
                    var1=form.face_length_a.options[form.face_length_a.selectedIndex].text;
                }
            }else if(bay=="2BAY"){
                var1=form.face_length_a.options[form.face_length_a.selectedIndex].text;
                var2=form.face_length_b.options[form.face_length_b.selectedIndex].text;
            }else if(bay=="3BAY"){
                var1=form.face_length_a.options[form.face_length_a.selectedIndex].text;
                var2=form.face_length_b.options[form.face_length_b.selectedIndex].text;
                var3=form.face_length_c.options[form.face_length_c.selectedIndex].text;
            }else if(bay=="4BAY"){
                var1=form.face_length_a.options[form.face_length_a.selectedIndex].text;
                var2=form.face_length_b.options[form.face_length_b.selectedIndex].text;
                var3=form.face_length_c.options[form.face_length_c.selectedIndex].text;
                var4=form.face_length_d.options[form.face_length_d.selectedIndex].text;
            }
            if(form.post_height!== undefined){
                var5=form.post_height.options[form.post_height.selectedIndex].text;  
            }
            if(form.right_length!== undefined){
                var6=form.right_length.options[form.right_length.selectedIndex].text;
            }
            if(form.left_length!== undefined){
                var7=form.left_length.options[form.left_length.selectedIndex].text;
            }
			
			glass_corner=form.rounded_corners.options[form.rounded_corners.selectedIndex].text;
		lightbar=form.light_bar.options[form.light_bar.selectedIndex].text;
		postfinish=form.choose_finish.options[form.choose_finish.selectedIndex].text;
		adjtb=form.adjustable.options[form.adjustable.selectedIndex].text;
		frosted=form.roasted_glass.options[form.roasted_glass.selectedIndex].text;
            end=$("input#glass-face").val();
            $.ajax({
                type: "POST",
                url: "includes/script1.php",
                data: { 
                    mod:category_name, bay:bay, face1:var1, face2:var2,face3:var3,face4:var4,post:var5,left:var7,right:var6,end:end,tot:tot1,osc:osc,im_id:im_id,sv:"save",img:img_ajx, glass_corner:glass_corner, lightbar:lightbar, postfinish:postfinish, adjtb:adjtb, frosted:frosted
                },
                cache: false,
                contentType: "application/x-www-form-urlencoded",
                success: function(data, textStatus, request){
                    //tb_show("","pop1.php?KeepThis=true&TB_iframe=true&height=500&width=600","");
                   // $("form[name='cart_quantity']").submit();
					
				/*
				
				if(flange=='Yes')
				{
				$(document).ready(function(){
                    var elem = $(this).closest('.item');
                    $.confirm({
                        'title'     : 'Confirmation',
            'message'   : '<p><span><span style="color: #ff0000;">LOW STOCK WARNING:-</span> </span></p><p><span>We are out of stock on the following item: </p><p><span style="color: #ff0000;">Flanges Covers,</span> <br />would you like to continue without them?</span></p>',
            'buttons'   : {
                'Proceed'   : {
                    'class' : 'blue',
                    'action': function(){
                                           // getPriceOfProduct(document.forms['cart_quantity']);
										    form.flange_covers.value="no";
                                        form.flange_covers.selected="No";
										getPriceOfProduct(form);
											 	//$('#add_more_bay').val('1');
											 	//$('#add_more_bay').val('1');
												 $("form[name='cart_quantity']").submit();
											// alert('yes');
                                            
                    }
                    
                                },
                'Cancel': {
                                    'class': 'gray',
                                    'action': function(){
										
                                      //   alert('no');
										//getPriceOfProduct(document.forms['cart_quantity']);
										
										//$("form[name='cart_quantity']").submit();
                                    }   // Nothing to do in this case. You can as well omit the action property.
                    
                }
            }
                    });
        
    
        
                });		
					
				}
				else{
					*/
					
				$("form[name='cart_quantity']").submit();		
				//}
				
				
				
				
					
					
					
                },
                error: function (request, textStatus, errorThrown) {
                    alert("some error");
                }
            });
            return false;
        }else{
            return false;
        }
            

    };
	
	$(document).ready(function(){
	
	$('.item .delete2').click(function(){
		
		var elem = $(this).closest('.item');
		
		$.confirm({
		
	
			'title'		: 'Confirmation',
			'message'	:$('#msg').val(),
			'buttons'	: {
				'Proceed'	: {
					'class'	: 'blue',
					'action': function(){
						
						document.forms['cart_quantity'].submit();
						
						
					}
				},
				'Cancel'	: {
					'class'	: 'gray',
					'action': function(){
						return false;
					}	// Nothing to do in this case. You can as well omit the action property.
					
				}
			}
		});
		
	});
	$('.item .delete3').click(function(){
		
		var elem = $(this).closest('.item');
		
		$.confirm({
		
		
			'title'		: 'Confirmation',
			'message'	:'Please select face length',
			'buttons'	: {
				'Proceed'	: {
					'class'	: 'blue',
					'action': function(){
						
						return false;
						
						
					}
				},
				'Cancel'	: {
					'class'	: 'gray',
					'action': function(){
						return false;
					}	// Nothing to do in this case. You can as well omit the action property.
					
				}
			}
		});
		$('.gray').css('display','none');
	});

})
	
</script>

<!-- ani code -->
<script>
$(document).ready(function(){
	
	var custom;
	var my_facelengt_select="";
	var post='';
	var ispost=false;
	$('[name="face_length_a"]').live('change',function(){
		if($(this).val()=='custom'){
			custom=$(this);post='';
			$msg='<?php echo $ms_face .'&nbsp;&nbsp;<input type="checkbox" id="customefaceA" onchange="makeFacechange(this.form);"  /><span style="color:#666; font-size:16px;font: 26px/1 "Cuprum","Lucida Sans Unicode", "Lucida Grande", sans-serif;text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.6);color: #666;text-align: justify;" > : Make Next All Glass of Same Length</span>'?>';
			$('.delete').click();
			
		}
	})
	$('[name="face_length_b"]').live('change',function(){
		if($(this).val()=='custom'){
			$msg='<?php echo $ms_face .'&nbsp;&nbsp;<input type="checkbox" id="customefaceB" onchange="makeFacechange(this.form);"  /><span style="color:#666; font-size:16px;font: 26px/1 "Cuprum","Lucida Sans Unicode", "Lucida Grande", sans-serif;text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.6);color: #666;text-align: justify;" > : Make Next All Glass of Same Length</span>'?>';
			custom=$(this);post='';
			$('.delete').click();
		}
	})
	$('[name="face_length_c"]').live('change',function(){
		if($(this).val()=='custom'){
			custom=$(this);post='';
			$msg='<?php echo $ms_face .'&nbsp;&nbsp;<input type="checkbox" id="customefaceC" onchange="makeFacechange(this.form);"  /><span style="color:#666; font-size:16px;font: 26px/1 "Cuprum","Lucida Sans Unicode", "Lucida Grande", sans-serif;text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.6);color: #666;text-align: justify;" > : Make Next All Glass of Same Length</span>'?>';
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
			$msg='<p><span>You have selected to use a custom glass length. Be advised that the production lead time: </span></p><p><span><span style="color: #ff0000;">4-6 business days for <span style="text-decoration: underline;">square corner</span> glass</span></span></p><p><span>(Certain models not available with square corners), and&nbsp;</span></p><p><span><span style="color: #ff0000;"><span><span style="color: #ff0000;">4-6</span></span>&nbsp;business days&nbsp;for <span style="text-decoration: underline;">rounded corner</span> glass</span>.</span><br /><br /><span>If you select proceed, the custom length will default at 8" wide until a new length is selected via the drop down menu.</span></p>';
			custom=$(this);post='';
			$('.delete').click();
		}
	})
	$('[name="left_length"]').live('change', function(){
		if($(this).val()=='custom'){
			$msg='<p><span>You have selected to use a custom glass length. Be advised that the production lead time: </span></p><p><span><span style="color: #ff0000;">4-6 business days for <span style="text-decoration: underline;">square corner</span> glass</span></span></p><p><span>(Certain models not available with square corners), and&nbsp;</span></p><p><span><span style="color: #ff0000;"><span><span style="color: #ff0000;">4-6</span></span>&nbsp;business days&nbsp;for <span style="text-decoration: underline;">rounded corner</span> glass</span>.</span><br /><br /><span>If you select proceed, the custom length will default at 8" wide until a new length is selected via the drop down menu.</span></p>';
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
			if('EP5'=='EP5'){ var a=8;var b=30;}
			if('EP5'=='EP11'||'EP5'=='EP12'){ var a=12;var b=24;}
		
			 $msg='<span align="right" ><img src="jquery.confirm/EP5.jpg" style="float:right;"><span style="width:250px;display:block;text-align:justify;"><p><span>You have chosen a custom height post. We can manufacture them from 8" to 42" tall in&nbsp;</span><sup>1</sup><span>&frasl;</span><sub>4</sub><span>" increments. Custom posts can be produced within 24 hours.</span><br /><br /><span>If you select proceed, the custom posts will default at 8" tall until a new height is selected via the drop down menu.</span></p></span></span>';
			
			
			
			$('.delete').click();
		}
	})
	
	
	$('.item .delete').click(function(){
		
		var elem = $(this).closest('.item');
		
		$.confirm({
		
	
			'title'		: 'Confirmation',
			'message'	: $msg,
			'buttons'	: {
				'Proceed'	: {
					'class'	: 'blue',
					'action': function(){
						var lastmin=0;
						var c=0;
						$('#is_custom').val('Yes');
					
						if((ispost)&&(c==0)){
							lastmin=4;
						}else{lastmin=2;}
						
						
						my_facelengt_select="";
						my_facelengt_select+='<select name="'+custom.attr("name")+'" id="'+custom.attr("name")+'"  onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);" >';
                        // my_facelengt_select+='<option value="select">Select</option>';
						//	my_facelengt_simple_select+='<select name="face_length" onchange="getPriceOfProduct(this.form)" >';
						var myArray = new Array();
						var i=1;
						$('[name="'+custom.attr("name")+'"] > option') .each(function() {
                              if($(this).val()==48||$(this).val()==54)
							{
								
							}	
							else{	
							//alert($(this).val());
							if($(this).val()!='custom'){
								myArray[i]=$(this).val();
								i++;
							}
							}
							
													
						});
						/*for ep 11 category post height*/
						if(post=='yes'){
						if(('EP5'=='EP11')||('EP5'=='EP12')){
							 myArray=new Array("","12","18","22","");
						}else{
						var j=0;
						
						
									my_facelengt_select+='<option value="12">8"</option>';
									my_facelengt_select+='<option value="12">8-1/4"</option>';
									my_facelengt_select+='<option value="12">8-1/2"</option>';
									my_facelengt_select+='<option value="12">8-3/4"</option>';
									my_facelengt_select+='<option value="12">9"</option>';
									my_facelengt_select+='<option value="12">9-1/4"</option>';
									my_facelengt_select+='<option value="12">9-1/2"</option>';
									my_facelengt_select+='<option value="12">9-3/4"</option>';
									my_facelengt_select+='<option value="12">10"</option>';
									my_facelengt_select+='<option value="12">10-1/4"</option>';
									my_facelengt_select+='<option value="12">10-1/2"</option>';
									my_facelengt_select+='<option value="12">10-3/4"</option>';
									my_facelengt_select+='<option value="12">11"</option>';
									my_facelengt_select+='<option value="12">11-1/4"</option>';
									my_facelengt_select+='<option value="12">11-1/2"</option>';
									my_facelengt_select+='<option value="12">11-3/4"</option>';
									my_facelengt_select+='<option value="12">12"</option>';
									my_facelengt_select+='<option value="18">12-1/4"</option>';
									my_facelengt_select+='<option value="18">12-1/2"</option>';
									my_facelengt_select+='<option value="18">12-3/4"</option>';
									my_facelengt_select+='<option value="18">13"</option>';
									my_facelengt_select+='<option value="18">13-1/4"</option>';
									my_facelengt_select+='<option value="18">13-1/2"</option>';
									my_facelengt_select+='<option value="18">13-3/4"</option>';
									my_facelengt_select+='<option value="18">14"</option>';
									my_facelengt_select+='<option value="18">14-1/4"</option>';
									my_facelengt_select+='<option value="18">14-1/2"</option>';
									my_facelengt_select+='<option value="18">14-3/4"</option>';
									my_facelengt_select+='<option value="18">15"</option>';
									my_facelengt_select+='<option value="18">15-1/4"</option>';
									my_facelengt_select+='<option value="18">15-1/2"</option>';
									my_facelengt_select+='<option value="18">15-3/4"</option>';
									my_facelengt_select+='<option value="18">16"</option>';
									my_facelengt_select+='<option value="18">16-1/4"</option>';
									my_facelengt_select+='<option value="18">16-1/2"</option>';
									my_facelengt_select+='<option value="18">16-3/4"</option>';
									my_facelengt_select+='<option value="18">17"</option>';
									my_facelengt_select+='<option value="18">17-1/4"</option>';
									my_facelengt_select+='<option value="18">17-1/2"</option>';
									my_facelengt_select+='<option value="18">17-3/4"</option>';
									my_facelengt_select+='<option value="18">18"</option>';
									my_facelengt_select+='<option value="22">18-1/4"</option>';
									my_facelengt_select+='<option value="22">18-1/2"</option>';
									my_facelengt_select+='<option value="22">18-3/4"</option>';
									my_facelengt_select+='<option value="22">19"</option>';
									my_facelengt_select+='<option value="22">19-1/4"</option>';
									my_facelengt_select+='<option value="22">19-1/2"</option>';
									my_facelengt_select+='<option value="22">19-3/4"</option>';
									my_facelengt_select+='<option value="22">20"</option>';
									my_facelengt_select+='<option value="22">20-1/4"</option>';
									my_facelengt_select+='<option value="22">20-1/2"</option>';
									my_facelengt_select+='<option value="22">20-3/4"</option>';
									my_facelengt_select+='<option value="22">21"</option>';
									my_facelengt_select+='<option value="22">21-1/4"</option>';
									my_facelengt_select+='<option value="22">21-1/2"</option>';
									my_facelengt_select+='<option value="22">21-3/4"</option>';
						}
						}else{
						
						
						
						var j=0;
						//for (i=8;i<myArray[1];i++){
						
							my_facelengt_select+='<option value="12">8"</option>';
									my_facelengt_select+='<option value="12">8-1/4"</option>';
									my_facelengt_select+='<option value="12">8-1/2"</option>';
									my_facelengt_select+='<option value="12">8-3/4"</option>';
									my_facelengt_select+='<option value="12">9"</option>';
									my_facelengt_select+='<option value="12">9-1/4"</option>';
									my_facelengt_select+='<option value="12">9-1/2"</option>';
									my_facelengt_select+='<option value="12">9-3/4"</option>';
									my_facelengt_select+='<option value="12">10"</option>';
									my_facelengt_select+='<option value="12">10-1/4"</option>';
									my_facelengt_select+='<option value="12">10-1/2"</option>';
									my_facelengt_select+='<option value="12">10-3/4"</option>';
									my_facelengt_select+='<option value="12">11"</option>';
									my_facelengt_select+='<option value="12">11-1/4"</option>';
									my_facelengt_select+='<option value="12">11-1/2"</option>';
									my_facelengt_select+='<option value="12">11-3/4"</option>';
									my_facelengt_select+='<option value="12">12"</option>';
									my_facelengt_select+='<option value="18">12-1/4"</option>';
									my_facelengt_select+='<option value="18">12-1/2"</option>';
									my_facelengt_select+='<option value="18">12-3/4"</option>';
									my_facelengt_select+='<option value="18">13"</option>';
									my_facelengt_select+='<option value="18">13-1/4"</option>';
									my_facelengt_select+='<option value="18">13-1/2"</option>';
									my_facelengt_select+='<option value="18">13-3/4"</option>';
									my_facelengt_select+='<option value="18">14"</option>';
									my_facelengt_select+='<option value="18">14-1/4"</option>';
									my_facelengt_select+='<option value="18">14-1/2"</option>';
									my_facelengt_select+='<option value="18">14-3/4"</option>';
									my_facelengt_select+='<option value="18">15"</option>';
									my_facelengt_select+='<option value="18">15-1/4"</option>';
									my_facelengt_select+='<option value="18">15-1/2"</option>';
									my_facelengt_select+='<option value="18">15-3/4"</option>';
									my_facelengt_select+='<option value="18">16"</option>';
									my_facelengt_select+='<option value="18">16-1/4"</option>';
									my_facelengt_select+='<option value="18">16-1/2"</option>';
									my_facelengt_select+='<option value="18">16-3/4"</option>';
									my_facelengt_select+='<option value="18">17"</option>';
									my_facelengt_select+='<option value="18">17-1/4"</option>';
									my_facelengt_select+='<option value="18">17-1/2"</option>';
									my_facelengt_select+='<option value="18">17-3/4"</option>';
									my_facelengt_select+='<option value="18">18"</option>';
									my_facelengt_select+='<option value="24">18-1/4"</option>';
									my_facelengt_select+='<option value="24">18-1/2"</option>';
									my_facelengt_select+='<option value="24">18-3/4"</option>';
									my_facelengt_select+='<option value="24">19"</option>';
									my_facelengt_select+='<option value="24">19-1/4"</option>';
									my_facelengt_select+='<option value="24">19-1/2"</option>';
									my_facelengt_select+='<option value="24">19-3/4"</option>';
									my_facelengt_select+='<option value="24">20"</option>';
									my_facelengt_select+='<option value="24">20-1/4"</option>';
									my_facelengt_select+='<option value="24">20-1/2"</option>';
									my_facelengt_select+='<option value="24">20-3/4"</option>';
									my_facelengt_select+='<option value="24">21"</option>';
									my_facelengt_select+='<option value="24">21-1/4"</option>';
									my_facelengt_select+='<option value="24">21-1/2"</option>';
									my_facelengt_select+='<option value="24">21-3/4"</option>';
									my_facelengt_select+='<option value="24">22"</option>';
									my_facelengt_select+='<option value="24">22-1/4"</option>';
									my_facelengt_select+='<option value="24">22-1/2"</option>';
									my_facelengt_select+='<option value="24">22-3/4"</option>';
									my_facelengt_select+='<option value="24">23"</option>';
									my_facelengt_select+='<option value="24">23-1/4"</option>';
									my_facelengt_select+='<option value="24">23-1/2"</option>';
									my_facelengt_select+='<option value="24">23-3/4"</option>';
									my_facelengt_select+='<option value="24">24"</option>';
									my_facelengt_select+='<option value="30">24-1/4"</option>';
									my_facelengt_select+='<option value="30">24-1/2"</option>';
									my_facelengt_select+='<option value="30">24-3/4"</option>';
									my_facelengt_select+='<option value="30">25"</option>';
									my_facelengt_select+='<option value="30">25-1/4"</option>';
									my_facelengt_select+='<option value="30">25-1/2"</option>';
									my_facelengt_select+='<option value="30">25-3/4"</option>';
									my_facelengt_select+='<option value="30">26"</option>';
									my_facelengt_select+='<option value="30">26-1/4"</option>';
									my_facelengt_select+='<option value="30">26-1/2"</option>';
									my_facelengt_select+='<option value="30">26-3/4"</option>';
									my_facelengt_select+='<option value="30">27"</option>';
									my_facelengt_select+='<option value="30">27-1/4"</option>';
									my_facelengt_select+='<option value="30">27-1/2"</option>';
									my_facelengt_select+='<option value="30">27-3/4"</option>';
									my_facelengt_select+='<option value="30">28"</option>';
									my_facelengt_select+='<option value="30">28-1/4"</option>';
									my_facelengt_select+='<option value="30">28-1/2"</option>';
									my_facelengt_select+='<option value="30">28-3/4"</option>';
									my_facelengt_select+='<option value="30">29"</option>';
									my_facelengt_select+='<option value="30">29-1/4"</option>';
									my_facelengt_select+='<option value="30">29-1/2"</option>';
									my_facelengt_select+='<option value="30">29-3/4"</option>';
									my_facelengt_select+='<option value="30">30"</option>';
									my_facelengt_select+='<option value="36">30-1/4"</option>';
									my_facelengt_select+='<option value="36">30-1/2"</option>';
									my_facelengt_select+='<option value="36">30-3/4"</option>';
									my_facelengt_select+='<option value="36">31"</option>';
									my_facelengt_select+='<option value="36">31-1/4"</option>';
									my_facelengt_select+='<option value="36">31-1/2"</option>';
									my_facelengt_select+='<option value="36">31-3/4"</option>';
									my_facelengt_select+='<option value="36">32"</option>';
									my_facelengt_select+='<option value="36">32-1/4"</option>';
									my_facelengt_select+='<option value="36">32-1/2"</option>';
									my_facelengt_select+='<option value="36">32-3/4"</option>';
									my_facelengt_select+='<option value="36">33"</option>';
									my_facelengt_select+='<option value="36">33-1/4"</option>';
									my_facelengt_select+='<option value="36">33-1/2"</option>';
									my_facelengt_select+='<option value="36">33-3/4"</option>';
									my_facelengt_select+='<option value="36">34"</option>';
									my_facelengt_select+='<option value="36">34-1/4"</option>';
									my_facelengt_select+='<option value="36">34-1/2"</option>';
									my_facelengt_select+='<option value="36">34-3/4"</option>';
									my_facelengt_select+='<option value="36">35"</option>';
									my_facelengt_select+='<option value="36">35-1/4"</option>';
									my_facelengt_select+='<option value="36">35-1/2"</option>';
									my_facelengt_select+='<option value="36">35-3/4"</option>';
									my_facelengt_select+='<option value="36">36"</option>';
									my_facelengt_select+='<option value="42">36-1/4"</option>';
									my_facelengt_select+='<option value="42">36-1/2"</option>';
									my_facelengt_select+='<option value="42">36-3/4"</option>';
									my_facelengt_select+='<option value="42">37"</option>';
									my_facelengt_select+='<option value="42">37-1/4"</option>';
									my_facelengt_select+='<option value="42">37-1/2"</option>';
									my_facelengt_select+='<option value="42">37-3/4"</option>';
									my_facelengt_select+='<option value="42">38"</option>';
									my_facelengt_select+='<option value="42">38-1/4"</option>';
									my_facelengt_select+='<option value="42">38-1/2"</option>';
									my_facelengt_select+='<option value="42">38-3/4"</option>';
									my_facelengt_select+='<option value="42">39"</option>';
									my_facelengt_select+='<option value="42">39-1/4"</option>';
									my_facelengt_select+='<option value="42">39-1/2"</option>';
									my_facelengt_select+='<option value="42">39-3/4"</option>';
									my_facelengt_select+='<option value="42">40"</option>';
									my_facelengt_select+='<option value="42">40-1/4"</option>';
									my_facelengt_select+='<option value="42">40-1/2"</option>';
									my_facelengt_select+='<option value="42">40-3/4"</option>';
									my_facelengt_select+='<option value="42">41"</option>';
									my_facelengt_select+='<option value="42">41-1/4"</option>';
									my_facelengt_select+='<option value="42">41-1/2"</option>';
									my_facelengt_select+='<option value="42">41-3/4"</option>';
									my_facelengt_select+='<option value="42">42"</option>';
						//}
						}
						for(i=1;i<= myArray.length-lastmin;i++){
							for(j=myArray[i];j<myArray[i+1];j++){
								if(j>myArray[i]){
									//my_facelengt_select+='<option value="'+myArray[i+1]+'">'+j+'"</option>';
								}else
								{
									//my_facelengt_select+='<option value="'+myArray[i]+'">'+j+'"</option>';	
								}
								if(j!=42){
									//my_facelengt_select+='<option value="'+myArray[i+1]+'">'+j+'-1/4'+'"</option>';
									//my_facelengt_select+='<option value="'+myArray[i+1]+'">'+j+'-1/2'+'"</option>';
									//my_facelengt_select+='<option value="'+myArray[i+1]+'">'+j+'-3/4'+'"</option>';
								}
							}
						}
						
						if((post=='yes')&&('EP5'=='EP5')){
							
							var j=0;
							for (i=22;i<30;i++){
							    if(i==22){
                                    my_facelengt_select+='<option value="'+22+'">'+i+'"</option>';
                                }else{
                                    my_facelengt_select+='<option value="'+26+'">'+i+'"</option>';
                                }
								my_facelengt_select+='<option value="'+26+'">'+i+'-1/4'+'"</option>';
								my_facelengt_select+='<option value="'+26+'">'+i+'-1/2'+'"</option>';
								my_facelengt_select+='<option value="'+26+'">'+i+'-3/4'+'"</option>';
								j=i;
							}
									my_facelengt_select+='<option value="'+26+'">'+30+'"</option>';
									my_facelengt_select+='<option value="36">30-1/4"</option>';
									my_facelengt_select+='<option value="36">30-1/2"</option>';
									my_facelengt_select+='<option value="36">30-3/4"</option>';
									my_facelengt_select+='<option value="36">31"</option>';
									my_facelengt_select+='<option value="36">31-1/4"</option>';
									my_facelengt_select+='<option value="36">31-1/2"</option>';
									my_facelengt_select+='<option value="36">31-3/4"</option>';
									my_facelengt_select+='<option value="36">32"</option>';
									my_facelengt_select+='<option value="36">32-1/4"</option>';
									my_facelengt_select+='<option value="36">32-1/2"</option>';
									my_facelengt_select+='<option value="36">32-3/4"</option>';
									my_facelengt_select+='<option value="36">33"</option>';
									my_facelengt_select+='<option value="36">33-1/4"</option>';
									my_facelengt_select+='<option value="36">33-1/2"</option>';
									my_facelengt_select+='<option value="36">33-3/4"</option>';
									my_facelengt_select+='<option value="36">34"</option>';
									my_facelengt_select+='<option value="36">34-1/4"</option>';
									my_facelengt_select+='<option value="36">34-1/2"</option>';
									my_facelengt_select+='<option value="36">34-3/4"</option>';
									my_facelengt_select+='<option value="36">35"</option>';
									my_facelengt_select+='<option value="36">35-1/4"</option>';
									my_facelengt_select+='<option value="36">35-1/2"</option>';
									my_facelengt_select+='<option value="36">35-3/4"</option>';
									my_facelengt_select+='<option value="36">36"</option>';
									my_facelengt_select+='<option value="42">36-1/4"</option>';
									my_facelengt_select+='<option value="42">36-1/2"</option>';
									my_facelengt_select+='<option value="42">36-3/4"</option>';
									my_facelengt_select+='<option value="42">37"</option>';
									my_facelengt_select+='<option value="42">37-1/4"</option>';
									my_facelengt_select+='<option value="42">37-1/2"</option>';
									my_facelengt_select+='<option value="42">37-3/4"</option>';
									my_facelengt_select+='<option value="42">38"</option>';
									my_facelengt_select+='<option value="42">38-1/4"</option>';
									my_facelengt_select+='<option value="42">38-1/2"</option>';
									my_facelengt_select+='<option value="42">38-3/4"</option>';
									my_facelengt_select+='<option value="42">39"</option>';
									my_facelengt_select+='<option value="42">39-1/4"</option>';
									my_facelengt_select+='<option value="42">39-1/2"</option>';
									my_facelengt_select+='<option value="42">39-3/4"</option>';
									my_facelengt_select+='<option value="42">40"</option>';
									my_facelengt_select+='<option value="42">40-1/4"</option>';
									my_facelengt_select+='<option value="42">40-1/2"</option>';
									my_facelengt_select+='<option value="42">40-3/4"</option>';
									my_facelengt_select+='<option value="42">41"</option>';
									my_facelengt_select+='<option value="42">41-1/4"</option>';
									my_facelengt_select+='<option value="42">41-1/2"</option>';
									my_facelengt_select+='<option value="42">41-3/4"</option>';
									my_facelengt_select+='<option value="42">42"</option>';
							
							
							
							
						}else if((post=='yes')&&('EP5'=='EP11'||'EP5'=='EP12')){
							
							var j=0;
							for (i=22;i<24;i++){
							
								my_facelengt_select+='<option value="'+22+'">'+i+'"</option>';
								my_facelengt_select+='<option value="'+22+'">'+i+'-1/4'+'"</option>';
								my_facelengt_select+='<option value="'+22+'">'+i+'-1/2'+'"</option>';
								my_facelengt_select+='<option value="'+22+'">'+i+'-3/4'+'"</option>';
								j=i;
							}
							my_facelengt_select+='<option value="'+22+'">'+24+'"</option>';
						}
						else {
                            
						    if(myArray[i]=="No Glass"){
								for(j=42;j<48;j++){
                                    if(j!=42){
                                        my_facelengt_select+='<option value="48" style="color:red">'+j+'"</option>';
                                    }
                                        my_facelengt_select+='<option value="48" style="color:red">'+j+'-1/4'+'"</option>';
                                        my_facelengt_select+='<option value="48" style="color:red">'+j+'-1/2'+'"</option>'; 
                                        my_facelengt_select+='<option value="48" style="color:red">'+j+'-3/4'+'"</option>';
                                    
                                }
                                for(j=48;j<=54;j++){
									if(j==48){
										my_facelengt_select+='<option value="48" style="color:red">'+j+'"</option>';
									}else{
										my_facelengt_select+='<option value="54" style="color:red">'+j+'"</option>';
									}
                                    
                                    if(j!=54){
                                        my_facelengt_select+='<option value="54" style="color:red">'+j+'-1/4'+'"</option>';
                                        my_facelengt_select+='<option value="54" style="color:red">'+j+'-1/2'+'"</option>';
                                        my_facelengt_select+='<option value="54" style="color:red">'+j+'-3/4'+'"</option>';
                                    }
                                }
                                my_facelengt_select+='<option value="'+myArray[i]+'">'+myArray[i]+'"</option>';    
                            }else{
                                my_facelengt_select+='<option value="'+myArray[i]+'">'+myArray[i]+'"</option>';
                            }
                            
                            if(myArray[i]==42){
								for(i=42;i<48;i++){
                                    if(i!=42){
                                        my_facelengt_select+='<option value="48" style="color:red">'+i+'"</option>';
                                    }
                                        my_facelengt_select+='<option value="48" style="color:red">'+i+'-1/4'+'"</option>';
                                        my_facelengt_select+='<option value="48" style="color:red">'+i+'-1/2'+'"</option>'; 
                                        my_facelengt_select+='<option value="48" style="color:red">'+i+'-3/4'+'"</option>';
                                    
                                }
                                for(i=48;i<=54;i++){
									if(i==48){
										my_facelengt_select+='<option value="48" style="color:red">'+i+'"</option>';
									}else{
										my_facelengt_select+='<option value="54" style="color:red">'+i+'"</option>';
									}
                                    
                                    if(i!=54){
                                        my_facelengt_select+='<option value="54" style="color:red">'+i+'-1/4'+'"</option>';
                                        my_facelengt_select+='<option value="54" style="color:red">'+i+'-1/2'+'"</option>';
                                        my_facelengt_select+='<option value="54" style="color:red">'+i+'-3/4'+'"</option>';
                                    }
                                }
                                my_facelengt_select+='<option value="No Glass">No Glass</option>';
                            }
						}
						

					$('#'+custom.attr("name")+'_span').html(my_facelengt_select);
					/* for ep11 post height */
					//getPriceOfProduct(document.forms['cart_quantity']);
					if(!ispost){
						//getPriceOfProduct(document.forms['cart_quantity']);
					}
					if(('EP5'=='EP11'||'EP5'=='EP12')){
						getPriceOfProduct(document.forms['cart_quantity']);
					}
                    getPriceOfProduct(document.forms['cart_quantity']);
					var checkall=true;
					 if($('select[name="face_length"]').length){
					 $('.glass').text( $('[name="face_length"]').find('option:selected').text());
					 	if($('[name="face_length"]').find('option:selected').text()=='Select'){
							checkall=false;
						}
					 }
					 if($('select[name="post_height"]').length){
					 $('.post').text( $('[name="post_height"]').find('option:selected').text());
					 	if($('[name="post_height"]').find('option:selected').text()=='Select'){
							checkall=false;
						}
					 }
					 if($('select[name="left_length"]').length){
					 $('.left').text( $('[name="left_length"]').find('option:selected').text());
					 	if($('[name="left_length"]').find('option:selected').text()=='Select'){
							checkall=false;
						}
					 }
					 if($('select[name="right_length"]').length){
					 $('.right').text( $('[name="right_length"]').find('option:selected').text());
					 	if($('[name="right_length"]').find('option:selected').text()=='Select'){
							checkall=false;
						}
					 }
					 
					 if($('select[name="face_length_a"]').length){
					 $('.glass_a').text( $('[name="face_length_a"]').find('option:selected').text());
					 	if($('[name="face_length_a"]').find('option:selected').text()=='Select'){
							checkall=false;
						}
					 }
					 if($('select[name="face_length_b"]').length){
					 $('.glass_b').text( $('[name="face_length_b"]').find('option:selected').text());
					 	if($('[name="face_length_b"]').find('option:selected').text()=='Select'){
							checkall=false;
						}
					 }
					 if($('select[name="face_length_c"]').length){
					 $('.glass_c').text( $('[name="face_length_c"]').find('option:selected').text());
					 	if($('[name="face_length_c"]').find('option:selected').text()=='Select'){
							checkall=false;
						}
					 }if($('select[name="face_length_d"]').length){
					 $('.glass_d').text( $('[name="face_length_d"]').find('option:selected').text());
					 	if($('[name="face_length_d"]').find('option:selected').text()=='Select'){
							checkall=false;
						}
					 }
					 
					$('#is_custom').val('Yes');
						if(checkall){
							$('#ckall').val(true);
							getPriceOfProduct(document.forms['cart_quantity']);
						}else{
							$('#ckall').val(false);
							//$('.total').text('Select');
						}
					}
				},
				'Cancel'	: {
					'class'	: 'gray',
					'action': function(){
                        var str=custom.attr("name");
                            $('select[name='+str+']').val("select");
                            getPriceOfProduct(document.forms['cart_quantity']);
                    }	// Nothing to do in this case. You can as well omit the action property.
					
				}
			}
		});
		
	});
	
});

</script>








<script type="text/javascript">


function yoge(a,b){
 var tees=(a+b);
return tees;
}
function customcal(v){
if(v=='1/4'){
v1='.25';
}
if(v=='1/2'){
v1='.50';
}
if(v=='3/4'){
v1='.75';
}
return v1;
//alert(v)
}
function roastedglasscal(l,p){
 var left=(l*p)/144;
  //var right=(r*p)/144;
  var cal=(left)*25;
  return cal;
}
function roastedglasscalface(f,p){
 var face=(f*p)/144;
  
  var cal=(face)*25;
  return cal;
}
function getBeforeChar(str){
	var f_str=str.substr(0, str.indexOf('-')); 
	if(f_str==""){
		return str.substr(0, str.indexOf('"'));;
	}else { return f_str; }
}
function getAfterChar(str){
	var f_str=str.substring(str.lastIndexOf("-")+1,str.lastIndexOf('"'));
	if(isInt(f_str)){ return ''; }else { return f_str;}

}
function isInt(value) {
   return !isNaN(value) && parseInt(value) == value;
}
function getTotal(n1,n2,f_n1,f_n2){
 if(f_n1=="" && f_n2==""){
	var t=n1+n2+2+'"';}else{var t=n1+n2+2;}
	if(f_n1=='1/4'&&f_n2=='1/4'){
		t+='-1/2"';
	}
	if(f_n1=='1/4'&&f_n2=='1/2'){
		t+='-3/4"';
	}
	if(f_n1=='1/4'&&f_n2=='3/4'){
		t+=1;
		t+='"';
	}
	if(f_n1=='1/2'&&f_n2=='1/4'){
		t+='-3/4"';
	}
	if(f_n1=='1/2'&&f_n2=='1/2'){
		t+=1;
		t+='"';
	}
	if(f_n1=='1/2'&&f_n2=='3/4'){
		t+=1;
		t+='-1/4"';
	}
	if(f_n1=='3/4'&&f_n2=='1/4'){
		t+=1;
		t+='"';
	}
	if(f_n1=='3/4'&&f_n2=='1/2'){
		t+=1;
		t+='-1/4"';
	}
	if(f_n1=='3/4'&&f_n2=='3/4'){
		t+=1;
		t+='-1/2"';
	}
	//alert(f_n1);
	if(f_n1==""&&f_n2!=""){ t+="-"+f_n2+'"'; } 
	if(f_n2==""&&f_n1!=""){ t+="-"+f_n1+'"'; } 
	return t;
	
}
function getTotal3Bay(n1,n2,n3,f_n1,f_n2,f_n3){
	if(f_n1==""&&f_n2==""&&f_n3==""){
		var t=n1+n2+n3+2+'"';
	} else{
	var t=n1+n2+n3+2;
	}
	var t=getTotal(n1,n2,f_n1,f_n2);
	
	var new1=getBeforeChar(t);
	new1-=2;
	var far=getAfterChar(t);
	var t=getTotal(new1,n3,far,f_n3);
	return t;
	
}
function getTotal3(n1,n2,n3,n4,f_n1,f_n2){
	var t=n1+n2+n3+n4+2;
	if(f_n1=='1/4'&&f_n2=='1/4'){t+='-1/2"';}
	if(f_n1=='1/4'&&f_n2=='1/2'){t+='-3/4"';}
	if(f_n1=='1/4'&&f_n2=='3/4'){t+=1;t+='"';}
	if(f_n1=='1/2'&&f_n2=='1/4'){t+='-3/4"';}
	if(f_n1=='1/2'&&f_n2=='1/2'){t+=1;t+='"';}
	if(f_n1=='1/2'&&f_n2=='3/4'){t+='-5/4"';}
	if(f_n1=='3/4'&&f_n2=='1/4'){t+=1;t+='"';}
	if(f_n1=='3/4'&&f_n2=='1/2'){t+=1;t+='-1/4"';}
	if(f_n1=='3/4'&&f_n2=='3/4'){t+=1;t+='-1/2"';}
	if(f_n1==""&&f_n2!=""){ t+="-"+f_n2+'"'; } 
	if(f_n2==""&&f_n1!=""){ t+="-"+f_n1+'"'; } 
	
	return t;}
		
	function getTotal6(n1,n2,f_n1,f_n2){
	var t=n1+n2+2;
	if(f_n1=='1/4'&&f_n2=='1/4'){t+='-1/2"';}
	if(f_n1=='1/4'&&f_n2=='1/2'){t+='-3/4"';}
	if(f_n1=='1/4'&&f_n2=='3/4'){t+=1;t+='"';}
	if(f_n1=='1/2'&&f_n2=='1/4'){t+='-3/4"';}
	if(f_n1=='1/2'&&f_n2=='1/2'){t+=1;t+='"';}
	if(f_n1=='1/2'&&f_n2=='3/4'){t+=1;t+='-1/4"';}
	if(f_n1=='3/4'&&f_n2=='1/4'){t+=1;t+='"';}
	if(f_n1=='3/4'&&f_n2=='1/2'){t+=1;t+='-1/4"';}
	if(f_n1=='3/4'&&f_n2=='3/4'){t+=1;t+='-1/2"';}
	
	if(f_n1==""&&f_n2!=""){ t+="-"+f_n2+'"'; } 
	if(f_n2==""&&f_n1!=""){ t+="-"+f_n1+'"'; } 

	
	return t;}
	
	
	function getTotal62(n1,n2,n4,f_n1,f_n2){
	var t=n1+n2+n4+2;
	if(f_n1=='1/4'&&f_n2=='1/4'){t+='-1/2"';}
	if(f_n1=='1/4'&&f_n2=='1/2'){t+='-3/4"';}
	if(f_n1=='1/4'&&f_n2=='3/4'){t+=1;t+='"';}
	if(f_n1=='1/2'&&f_n2=='1/4'){t+='-3/4"';}
	if(f_n1=='1/2'&&f_n2=='1/2'){t+=1;t+='"';}
	if(f_n1=='1/2'&&f_n2=='3/4'){t+=1;t+='-1/4"';}
	if(f_n1=='3/4'&&f_n2=='1/4'){t+=1;t+='"';}
	if(f_n1=='3/4'&&f_n2=='1/2'){t+=1;t+='-1/4"';}
	if(f_n1=='3/4'&&f_n2=='3/4'){t+=1;t+='-1/2"';}
	
	if(f_n1==""&&f_n2!=""){ t+="-"+f_n2+'"'; } 
	if(f_n2==""&&f_n1!=""){ t+="-"+f_n1+'"'; } 

	
	return t;}
	
function getTotal63(n1,n2,f_n1,f_n2){
	var t=n1+2;
	if(f_n1=='1/4'&&f_n2=='1/4'){t+='-1/2"';}
	if(f_n1=='1/4'&&f_n2=='1/2'){t+='-3/4"';}
	if(f_n1=='1/4'&&f_n2=='3/4'){t+=1;t+='"';}
	if(f_n1=='1/2'&&f_n2=='1/4'){t+='-3/4"';}
	if(f_n1=='1/2'&&f_n2=='1/2'){t+=1;t+='"';}
	if(f_n1=='1/2'&&f_n2=='3/4'){t+=1;t+='-1/4"';}
	if(f_n1=='3/2'&&f_n2=='1/4'){t+=1;t+='-3/4"';}
	if(f_n1=='3/2'&&f_n2=='3/4'){t+=2;t+='-1/4"';}
	if(f_n1=='3/2'&&f_n2=='1/2'){t+=2;}
	if(f_n1=='3/4'&&f_n2=='1/4'){t+=1;t+='"';}
	if(f_n1=='3/4'&&f_n2=='1/2'){t+=1;t+='-1/4"';}
	if(f_n1=='3/4'&&f_n2=='3/4'){t+=1;t+='-1/2"';}
	
	if(f_n1==""&&f_n2!=""){ t+="-"+f_n2+'"'; } 
	if(f_n2==""&&f_n1!=""){ t+="-"+f_n1+'"'; } 

	
	return t;}

function getTotal2(n1,n2,n3,n4,f_n1,f_n2,f_n3,f_n4){
if(f_n1==""&&f_n2==""&&f_n3==""&&f_n4==""){

		var t=n1+n2+n3+n4+2+'"';

	}else{var t=n1+n2+n3+n4+2;}
 if(f_n1==""&&f_n2==""&&f_n3==""&&f_n4!=""){t+="-"+f_n4+'"';} 
 if(f_n1==""&&f_n2==""&&f_n3!=""&&f_n4==""){ t+="-"+f_n3+'"'; }
 if(f_n1==""&&f_n2!=""&&f_n3==""&&f_n4==""){ t+="-"+f_n2+'"'; }     
 if(f_n1!=""&&f_n2==""&&f_n3==""&&f_n4==""){ t+="-"+f_n1+'"'; }      
if(f_n1!=""&&f_n2==""&&f_n3==""&&f_n4!=""){ var t='';t+=getTotal3(n1,n2,n3,n4,f_n1,f_n4); } 
if(f_n1!=""&&f_n2!=""&&f_n3==""&&f_n4==""){ var t='';t+=getTotal3(n1,n2,n3,n4,f_n1,f_n2); } 
if(f_n1!=""&&f_n2==""&&f_n3!=""&&f_n4==""){ var t=''; t+=getTotal3(n1,n2,n3,n4,f_n1,f_n3); }
if(f_n1!=""&&f_n2==""&&f_n3==""&&f_n4!=""){ var t='';t+=getTotal3(n1,n2,n3,n4,f_n1,f_n4); } 
if(f_n1==""&&f_n2!=""&&f_n3!=""&&f_n4==""){ var t='';t+=getTotal3(n1,n2,n3,n4,f_n2,f_n3); } 
if(f_n1==""&&f_n2!=""&&f_n3==""&&f_n4!=""){ var t='';t+=getTotal3(n1,n2,n3,n4,f_n2,f_n4); } 
if(f_n1==""&&f_n2==""&&f_n3!=""&&f_n4!=""){ var t='';t+=getTotal3(n1,n2,n3,n4,f_n3,f_n4); } 
 
if(f_n1==""&&f_n2!=""&&f_n3!=""&&f_n4!=""){ 
     t=getTotal6(n2,n3,f_n2,f_n3); 
     var new1=getBeforeChar(t);
	new1-=2;
	var far=getAfterChar(t);
	var t=getTotal62(new1,n4,n1,far,f_n4);
	return t;
} if(f_n1!=""&&f_n2==""&&f_n3!=""&&f_n4!=""){ 
     t=getTotal6(n1,n3,f_n1,f_n3); 
     var new1=getBeforeChar(t);
	new1-=2;
	var far=getAfterChar(t);
	var t=getTotal62(new1,n4,n2,far,f_n4);
	return t;
} if(f_n1!=""&&f_n2!=""&&f_n3==""&&f_n4!=""){ 
       t=getTotal6(n1,n2,f_n1,f_n2); 
   var new1=getBeforeChar(t);
	new1-=2;
	var far=getAfterChar(t);
	var t=getTotal62(new1,n4,n3,far,f_n4);
	return t;}
if(f_n1!=""&&f_n2!=""&&f_n3!=""&&f_n4==""){ 
     t=getTotal6(n1,n2,f_n1,f_n2); 
     var new1=getBeforeChar(t);
	new1-=2;
	var far=getAfterChar(t);
	var t=getTotal62(new1,n3,n4,far,f_n3);
	return t;
} 
if(f_n1!=""&&f_n2!=""&&f_n3!=""&&f_n4!=""){ 
     t=getTotal6(n1,n2,f_n1,f_n2); 
     var new1=getBeforeChar(t);
	new1-=2;
	var far=getAfterChar(t);
	var t=getTotal62(new1,n3,n4,far,f_n3);
	var new1=getBeforeChar(t);
	new1-=2;
	var far=getAfterChar(t);
	var t=getTotal63(new1,n4,far,f_n4);
	return t;
} 
return t;

	

}
function getTotal4Bay(n1,n2,n3,n4,f_n1,f_n2,f_n3,f_n4){

	if(f_n1==""&&f_n2==""&&f_n3==""&&f_n4==""){

		var t=n1+n2+n3+n4+2;

	}
	 var t=getTotal2(n1,n2,n3,n4,f_n1,f_n2,f_n3,f_n4);


	return t;
}



</script>
	 
	 	 
	 
	  
	 
