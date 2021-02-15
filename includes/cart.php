<?php 

  
    require_once('Mobile_Detect.php');
    $detect = new Mobile_Detect();
	
	
	
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
    arr_len=<?=$products['total']?>;
    <? if($category_name!='EP5'){ ?>
    arr_len=parseInt(arr_len)+7;
    <? } ?>
                
var product_name_price=new Array(arr_len);
    <?php
    
        if(isset($HTTP_GET_VARS['id'])){
            $product="select p.products_id as id, pd.products_name as name, p.products_price as price from ".TABLE_PRODUCTS." as p, ".TABLE_PRODUCTS_DESCRIPTION." as pd, ".TABLE_PRODUCTS_TO_CATEGORIES." as pc where p.products_id=pd.products_id and pd.products_id=pc.products_id and pc.categories_id=".$HTTP_GET_VARS['id']." and pd.language_id=".(int)$languages_id;
            $product=tep_db_query($product);
            if($category_name!='EP5'){?>
                product_name_price['EP5-FLANGE COVER 1 BAY BOTH ENDS']=new Array("834", "28.0000");
                product_name_price['EP5-FLANGE COVER 1 BAY RIGHT END']=new Array("835", "21.0000");
                product_name_price['EP5-FLANGE COVER 1 BAY LEFT END']=new Array("836", "21.0000");
                product_name_price['EP5-FLANGE COVER 1 BAY NO ENDS']=new Array("837", "14.0000");
                product_name_price['EP5-FLANGE COVER 2 BAY BOTH ENDS']=new Array("840", "35.0000");
                product_name_price['EP5-FLANGE COVER 2 BAY RIGHT END']=new Array("841", "28.0000");
                product_name_price['EP5-FLANGE COVER 3 BAY BOTH ENDS']=new Array("842", "42.0000");
				product_name_price['EP5-FLANGE COVER 1 PIECE'] = new Array("1448", "7.0000");
           <? } if($category_name=='EP12'){ ?>
                product_name_price['EP11 Center Post Brushed Aluminum']=new Array("242", "86.0000");
                product_name_price['EP11 Center Post Powder Coated Black']=new Array("261", "101.0000");
                product_name_price['EP11 Center Post Brushed Stainless Steel']=new Array("263", "101.0000");
           <?php } 
            while($products=tep_db_fetch_array($product)){
                
                    
                   ?>
                    product_name_price['<?=$products['name']?>']=new Array("<?=$products['id']?>", "<?=$products['price']?>");
            <?}
        }
    ?>
	temp=0;
        while(temp<arr_len){
//            alert(product_name_price[temp][1]);
            temp++;
        }
</script>
<?php
    $product="select p.products_id as id, pd.products_name as name, p.products_price as price from ".TABLE_PRODUCTS." as p, ".TABLE_PRODUCTS_DESCRIPTION." as pd, ".TABLE_PRODUCTS_TO_CATEGORIES." as pc where p.products_id=pd.products_id and pd.products_id=pc.products_id and pc.categories_id=".$HTTP_GET_VARS['id']." and pd.language_id=".(int)$languages_id;
    $product=tep_db_query($product);
    while($products=tep_db_fetch_array($product)){
        //echo $products['name'].'<br />';
    }
?>
<script type="text/javascript">
<?
if($category_name=='EP15'){
$wid="27";
$wid1="25";
} else {
$wid="31";
$wid1="29";
}


?>
	zero=one=two=three=four=five=six=seven=eight=false;
    selectOption=0;
    choseOption=0;
    choseAdjust=0;
    choselength=0;
	choselight=0;
    <?php if($category_name=='ES31' || $category_name == "ES67"){   ?>
        choseRounded=0;
    <?php } else { ?>
        choseRounded=0;
    <?}?>
    choseFlang=0;
    priceOption=0;
    h=10;
    h1=10;
    h2=10;
    h3=10;
    t1=0;
    t2=0;
    t3=0;
    t4=0;
	
	var isOpera = !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;
    // Opera 8.0+ (UA detection to detect Blink/v8-powered Opera)
var isFirefox = typeof InstallTrigger !== 'undefined';   // Firefox 1.0+
var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0;
    // At least Safari 3+: "[object HTMLElementConstructor]"
var isChrome = !!window.chrome && !isOpera;              // Chrome 1+
var isIE = /*@cc_on!@*/false || !!document.documentMode;   // At least IE6
if(isFirefox==true){
var width_one=23;
var width_two=<?php echo $wid?>;
width_three=30;
right_next=-44;
width_review=21;
redlinebrowser=23;
redlinebrowser1=23;
redln=85;
          /*red line width for price */
} else if(isChrome==true){
var width_one=19;
var width_two=<?php echo $wid1?>;
width_three=28;
right_next=-36;
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
// var width_two=32;
width_three=28;
right_next=-40;
width_review=19; 
redlinebrowser=0;
redlinebrowser1=0;
// redln=87;
}else if(isOpera==true){
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
var width_two=<?php echo $wid1?>;
width_three=28;
width_review=19;
redln=85;
}

	
	function noGlass(){		
		$("div.left").text("");
		$("div.right").text("");
		$("div.glass").text("");
		$("div.glass_a").text("");
		$("div.glass_b").text("");
		$("div.glass_c").text("");
		$("div.glass_d").text("");
		$("div.total").text("");	
		
			$('#c_glass_right_val').val('');
			$('#c_glass_right').val('');
	
			$('#c_glass_left_val').val('');
			$('#c_glass_left').val('');
		
		
	
		
			$('#c_glass_face_val').val('');
			$('#c_glass_face').val('');
		
		
			$('#c_glass_a_val').val('');
			$('#c_glass_a').val('');
		
			$('#c_glass_b_val').val('');
			$('#c_glass_b').val('');
		
		
			$('#c_glass_c_val').val('');
			$('#c_glass_c').val('');
			$('#c_glass_d_val').val('');
			$('#c_glass_d').val('');
	
		
	}

       
       
        
        function setHideShow(selector, msg){
            setShowEvent(selector, msg)
            //setHideEvent(selector);
        }
		 function setHideShow1(selector, msg){
            setShowEventmsg(selector, msg)
			//$(".msgtishu1").remove();
		
            //setHideEvent(selector);
        }
		 function setHideShow2(selector, msg){
            setShowEventmsg2(selector, msg)
            //setHideEvent(selector);
        }
        function setShowEvent(selector, msg){
           // $("#additional_image").css("opacity","0.5");
           // $(".test-hide").css("opacity","0.5");
            var cssObj={
                    "background-color":"#111",
                    "border-style":"solid",
                    "border-width":"2px",
                    "border-color":"#ff0000"};
            $(selector).css(cssObj);
            $("#message_w").html(msg);
        }
		function setShowEventverticle(selector, msg){
           // $("#additional_image").css("opacity","0.5");
           // $(".test-hide").css("opacity","0.5");
            var cssObj={
                    "background-color":"#111",
                    "border-style":"solid",
                    "border-width":"2px",
                    "border-color":"#ff0000"};
            $(selector).css(cssObj);
            $("#message_wp").html(msg);
        }
		function setShowEventhori(selector, msg){
           // $("#additional_image").css("opacity","0.5");
           // $(".test-hide").css("opacity","0.5");
            var cssObj={
                    "background-color":"#111",
                    "border-style":"solid",
                    "border-width":"2px",
                    "border-color":"#ff0000"};
            $(selector).css(cssObj);
            $("#message_wp1").html(msg);
        }
		function setShowEventhori1(selector, msg){
           // $("#additional_image").css("opacity","0.5");
           // $(".test-hide").css("opacity","0.5");
            var cssObj={
                    "background-color":"#111",
                    "border-style":"solid",
                    "border-width":"2px",
                    "border-color":"#ff0000"};
            $(selector).css(cssObj);
            $("#message_wp2").html(msg);
        }
		 function setShowEventmsg(selector, msg){
           // $("#additional_image").css("opacity","0.5");
           // $(".test-hide").css("opacity","0.5");
            var cssObj={
                    "background-color":"#111",
                    "border-style":"solid",
                    "border-width":"2px",
                    "border-color":"#ff0000"};
            $(selector).css(cssObj);
            $(".msgtishu").html(msg);
			
        }
		 function setShowEventmsg2(selector, msg){
           // $("#additional_image").css("opacity","0.5");
           // $(".test-hide").css("opacity","0.5");
            var cssObj={
                    "background-color":"#111",
                    "border-style":"solid",
                    "border-width":"2px",
                    "border-color":"#ff0000"};
            $(selector).css(cssObj);
            $(".msgtishu1").html(msg);
        }
        function setHideEvent(selector){
           action_event(selector);
        }
        var action_event = function(selector){
                $("#additional_image").css("opacity","1.0");
                 var cssObj={
                        "background":"none",
                        "border":"none",
                        "box-shadow":"none"};
                $(selector).css(cssObj);
                $(".test-hide").css("opacity","1.0");
                $("#message_w").html("");
				 $("#message_wp").html("");
				 $("#message_wp1").html("");
				 $("#message_wp2").html("");
            };
</script>

<!-- ani code -->

<script src="jquery.confirm/jquery.confirm.js"></script>


<style type="text/css">


    .message_p{
        position:relative;
        z-index: 1000000;
    }
    .message_w{
       /* position:absolute;
        color:#C7F900;
        text-shadow:2px 2px 3px #111;
        font-size: 16px;
        right:15px;
        bottom:-460px;
        background: url('images/login-bg.png');
        padding:5px;
        border-radius:10px;
        font-weight: bold;
        text-align: center;
        width: 400px;
        border: 2px solid #ff0000;*/
        
        color:#C7F900 !important;
        text-shadow:2px 2px 3px #111;
        font-size: 18px;
        border: 2px solid #ff0000;
        background: url('images/login-bg.png');
        padding:5px;
        border-radius:4px;
        font-weight: bold;
        
        width: 584px;
        height:67px                
    }
    table#cart-form tr td .next_button{
        background-color:green !important;
        box-shadow: none;
        font-weight: bold;
    }
	
	
	
	.item{
	background: url("img/shadow_wide.png") no-repeat center bottom;
	padding-bottom: 6px;
	display: inline-block;
	margin-bottom: 30px;
	position:relative;
}

.item .delete{
	background:url('img/delete_icon.png') no-repeat;
	width:37px;
	height:38px;
	position:absolute;
	cursor:pointer;
	top:10px;
	right:-80px
}

.item a{
	background-color: #FAFAFA;
	border: none;
	display: block;
	padding: 10px;
	text-decoration: none;
}

    .heading_all{
        color:white; 
        margin-bottom:0px;
        margin-top:5px;
        font-size:16px;
        text-shadow: 1px 1px black,1px 1px black,1px 1px black,1px 1px black;
    }

.item:first-child .delete:before{
	background:url('img/tooltip.png') no-repeat;
	content:'.';
	text-indent:-9999px;
	overflow:hidden;
	width:145px;
	height:90px;
	position:absolute;
	right:-110px;
	top:-95px;
}

.item a img{
	display:block;
	border:none;
}
.c_msg{background:none;}

#confirmOverlay{
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	background:url('jquery.confirm/ie.png');
	background: -moz-linear-gradient(rgba(11,11,11,0.1), rgba(11,11,11,0.6)) repeat-x rgba(11,11,11,0.2);
	background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(11,11,11,0.1)), to(rgba(11,11,11,0.6))) repeat-x rgba(11,11,11,0.2);
	z-index:100000;
}

#confirmBox{
	background:url('jquery.confirm/body_bg.jpg') repeat-x left bottom #e5e5e5;
	width:460px;
	position:fixed;
	left:50%;
	top:20%;
	margin:-130px 0 0 -230px;
	border: 1px solid rgba(33, 33, 33, 0.6);
	
	-moz-box-shadow: 0 0 2px rgba(255, 255, 255, 0.6) inset;
	-webkit-box-shadow: 0 0 2px rgba(255, 255, 255, 0.6) inset;
	box-shadow: 0 0 2px rgba(255, 255, 255, 0.6) inset;
}

#confirmBox h1,
#confirmBox p{
	font:26px/1 'Cuprum','Lucida Sans Unicode', 'Lucida Grande', sans-serif;
	background:url('jquery.confirm/header_bg.jpg') repeat-x left bottom #f5f5f5;
	padding: 18px 25px;
	text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.6);
	color:#666;
	text-align:justify;
}

#confirmBox h1{
	letter-spacing:0.3px;
	color:#888;
}

#confirmBox p{
	background:none;
	font-size:16px;
	line-height:1.4;
	padding-top: 1px;
}

#confirmButtons{
	padding:15px 0 25px;
	text-align:center;
}

#confirmBox .button{
	display:inline-block;
	background:url('jquery.confirm/buttons.png') no-repeat;
	color:white;
	position:relative;
	height: 33px;
	
	font:17px/33px 'Cuprum','Lucida Sans Unicode', 'Lucida Grande', sans-serif;
	
	margin-right: 15px;
	padding: 0 35px 0 40px;
	text-decoration:none;
	border:none;
}

#confirmBox .button:last-child{	margin-right:0;}

#confirmBox .button span{
	position:absolute;
	top:0;
	right:-5px;
	background:url('jquery.confirm/buttons.png') no-repeat;
	width:5px;
	height:33px
}

#confirmBox .blue{				background-position:left top;text-shadow:1px 1px 0 #5889a2;}
#confirmBox .blue span{			background-position:-195px 0;}
#confirmBox .blue:hover{		background-position:left bottom;}
#confirmBox .blue:hover span{	background-position:-195px bottom;}

#confirmBox .gray{				background-position:-200px top;text-shadow:1px 1px 0 #707070;}
#confirmBox .gray span{			background-position:-395px 0;}
#confirmBox .gray:hover{		background-position:-200px bottom;}
#confirmBox .gray:hover span{	background-position:-395px bottom;}
	
	ul.option1 {
    background: none repeat scroll 0 0 #393A35;
    border: 0 solid #888888;
    float: right;
    margin: 2px;
    padding: 0;
    width: 170px;
}
table#cart-form ul li ul.option1 li  {
    border-bottom: 2px dotted #777777;
    color: #F4F4F4;
    cursor: default;
    display: block!important;
    float: none;
    font-size: 11px;
    font-weight: bold;
    list-style: none outside none;
    padding: 4px;
    text-align: left;
}
ul.option1 li.last:hover {
    padding: 2px;
	display: block;
}
table#cart-form ul.option1 li:hover {
    border: 2px solid rgb(239, 166, 0);
    padding: 3px;
    box-shadow: 0px 8px 7px rgb(85, 85, 85) inset;
}
table#cart-form ul.option1 li.selected {
    background: none repeat scroll 0 0 #C18700;
    border-radius: 0;
}	
table#cart-form ul.option1 li.selected:hover {
    box-shadow: 0px 8px 7px rgb(218, 180, 96) inset;
}
    </style>
    <!--Coading for custom popup-->
<?php
    $msg="";
    $id=$_GET['id'];
    $tp=$_GET['type'];
    $rs=tep_db_query("select * from custom_popup where id='".$id."'and bay='".$tp."'");
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
    //echo $ms.'<br>'.$ms_adjustable.'<br>'.$ms_cart.'<br>'.$ms_face.'<br>'.$ms_left.'<br>'.$ms_option.'<br>'.$ms_option1.'<br>'.$ms_post.'<br>'.$ms_right;
?>
    <!-- ani code -->
    <script>
    $(document).ready(function(){
        zero=true;
        $("input#glass-face").val(4);
        this.forms.cart_quantity.rounded_corners.value="squared";
        this.forms.cart_quantity.rounded_corners.selected="Squared";
        
        $("#end_options").change(function(){
            if($("#end_options").val()!="select"){
                if($(this).val()=="Both Closed End Panels"){
                    $("input#glass-face").val(1);//calling the image of both closed end panels
                }else if($(this).val()=="Right Closed End Panel"){
                    $("input#glass-face").val(2);//calling the image according to the above click
                }else if($(this).val()=="Left Closed End Panel"){
                    $("input#glass-face").val(3);//showing the image of left closed panel
                }else if($(this).val()=="No Closed End Panels"){
                    $("input#glass-face").val(4);//showing the image
                }
                if($(".makeadjustablecheck31").val()!="select"){
                    //$("#round_check").attr("disabled",true);//making disable the checkbox.. .. ..
                }
                $("#endpan_err").attr("src","img/iconCheckOn.gif");
                zero=true;
                getPriceOfProduct(document.forms['cart_quantity']);
            }else{
                $("#endpan_err").attr("src","img/iconCheckOff.gif");
                zero=false;
				$("input#glass-face").val(4);
                getPriceOfProduct(document.forms['cart_quantity']);
            }
        });
        getPriceOfProduct(document.forms['cart_quantity']);
    });
</script>
<script type="text/javascript">
        
        //var rght=lft=bth=noe=false;
        $(document).ready(function(){
            $("#1").click(function(){
                rght=lft=bth=noe=false;
                bth=true;
                // alert(bth);
            });
            $("#2").click(function(){
                rght=lft=bth=noe=false;
                rght=true;
                // alert(rght);
            });
            $("#3").click(function(){
                rght=lft=bth=noe=false;
                lft=true;
                // alert(lft);
            });
            $("#4").click(function(){
                rght=lft=bth=noe=false;
                noe=true;
                // alert(noe);
            });
        });
        
        // $("#2").click(function(){
        //     rght=lft=bth=noe=false;
        //     rght=true;
        //     // alert(rght);
        // });
        // $("#3").click(function(){
        //     rght=lft=bth=noe=false;
        //     lft=true;
        //     // alert(lft);
        // });
        // $("#4").click(function(){
        //     rght=lft=bth=noe=false;
        //     noe=true;
        //     // alert(noe);
        // });


    leftstr='<td><h1>Left Length</h1><span id="left_length_span"><select name="left_length" onchange="getPriceOfProduct(this.form)" id="left_length"  disabled="disabled" class="usecustom"> <option value="12">12"</option><option value="18">18"</option><option value="24">24"</option><option value="30">30"</option><option value="36">36"</option><option value="42">42"</option><option value="custom">Custom</option><option value="" style="display:none;">Custom</option></span></select></td>';
    rightstr='<td><h1>Right Length</h1><span id="right_length_span"><select name="right_length" onchange="getPriceOfProduct(this.form)" id="right_length" disabled="disabled" class="usecustom"> <option value="12">12"</option><option value="18">18"</option><option value="24">24"</option><option value="30">30"</option><option value="36">36"</option><option value="42">42"</option><option value="custom">Custom</option><option value="" style="display:none;">Custom</option></span></select></td>';
    
    $(document).ready(function(){
        $("ul.option li").click(function(){//option click funtion starts from here
	
        action_event(".test-warsi");
            i=$("ul.option").children().length;
            j=0;
            while(j<i){
                $("ul.option li").removeClass('selected');
                j++;
            }
            $(this).addClass('selected');
            if($(this).text()=="Both Closed End Panels"||bth){
		$("input#glass-face").val(1);
                $("tr#right_lenght").html(rightstr);
                $("tr#left_lenght").html(leftstr);
            }else if($(this).text()=="Right Closed End Panel"||rght){
		$("input#glass-face").val(2);
                $("tr#left_lenght").html("<td height='20'></td>");
                $("tr#right_lenght").html(rightstr);
            }else if($(this).text()=="Left Closed End Panel"||lft){
  	        $("tr#right_lenght").html("<td height='20'></td>");
                $("tr#left_lenght").html(leftstr);
		$("input#glass-face").val(3);
            }else if($(this).text()=="No Closed End Panels"||noe){
                $("tr#right_lenght").html("<td height='20'></td>");
                $("tr#left_lenght").html("<td height='20'></td>");
		$("input#glass-face").val(4);
            }
            $("select").removeAttr("disabled");
            $("input").removeAttr("disabled");
			if($(".makeadjustablecheck31").val()==1){
                $("#round_check").attr("disabled",true);//making disable the checkbox.. .. ..
            }
            getPriceOfProduct(document.forms['cart_quantity']);
           // action_event(".test-warsi")
        
			
		
		
		});
        
        $('input[type="checkbox"]').click(function(){
            if($(this).is(':checked')){
                $(this).val(1);
                getPriceOfProduct(document.forms['cart_quantity']);
            }else{
                $(this).val(0);
                getPriceOfProduct(document.forms['cart_quantity']);
            }            
        });
        
    });
</script>
<script type="text/javascript">

function makeAdjustable(form)//third make adjustable option!!
	{
            //alert(category_name);
            if(form.adjustable.value=="yes") {
                if(category_name=="ES73"){
                    form.rounded_corners.value="round";
                    form.rounded_corners.selected="Rounded";
                    form.rounded_corners.disabled=true;
                }
		$(document).ready(function(){
                    var elem = $(this).closest('.item');
                    $.confirm({
                        'title'		: 'Confirmation',
			'message'	: '<?php echo $ms_adjustable?>',
			'buttons'	: {
				'Proceed'	: {
					'class'	: 'blue',
					'action': function(){
                                            getPriceOfProduct(document.forms['cart_quantity']);
                                            
					}
					
                                },
				'Cancel': {
                                    'class': 'gray',
                                    'action': function(){
                                        form.adjustable.value="no";
                                        form.adjustable.selected="No";
                                        form.adjustable.checked=false;
                                        if(category_name=="ES73"){
                                            form.rounded_corners.value="squared";
                                            form.rounded_corners.selected="Squared";
                                            form.rounded_corners.disabled=false;
                                        }
                                        getPriceOfProduct(document.forms['cart_quantity']);
					
                                    }	// Nothing to do in this case. You can as well omit the action property.
					
				}
			}
                    });
		
	
		
                });
            }else{
                if(category_name=="ES73"){
                    form.rounded_corners.value="squared";
                    form.rounded_corners.selected="squared";
                    form.rounded_corners.disabled=false;
                }
            }
        }
        
        
 function getProductFolderName(productname){
    foldername="";
    switch(productname){
        case 'EP36':{
            foldername="EP-36";
            break;
        }
        case 'ES31':
        {
            foldername="ES-31";
            break;
        }
        case 'ES67':{
            foldername="ES-67";
            break;
        }
        case 'ES73':{
            foldername="ES-73";
                break;
            }
			case 'ES53': 
				foldername="ES53";
			break;
        }
        return foldername;
    }
    function nogl(form,el,val){
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
        if(form.type.value=="1BAY"){
            if(val=="No Glass" || val=='No Glass"'){
            }
        }
        if(form.type.value=="2BAY"){
            if(val=="No Glass" || val=='No Glass"'){
                form.face_length_a.value="No Glass";
                form.face_length_b.value="No Glass";
            }
        }
        if(form.type.value=="3BAY"){
            if(val=="No Glass" || val=='No Glass"'){
                form.face_length_a.value="No Glass";
                form.face_length_b.value="No Glass";
                form.face_length_c.value="No Glass";
            }
        }
        if(form.type.value=="4BAY" ){
            if(val=="No Glass" || val=='No Glass"'){
                form.face_length_a.value="No Glass";
                form.face_length_b.value="No Glass";
                form.face_length_c.value="No Glass";
                form.face_length_d.value="No Glass";
            }
        }
    }
    function changeGlassImage(form, image){
        category_name="<?=$category_name?>";
        foldername=getProductFolderName("<?=$category_name?>")+form.type.value;
        
        imageName='';
        if(form.rounded_corners.value==0){
            imageName='GLASSNORAD.jpg';
            
        }
        else{
            imageName='GLASS.jpg';
            
        }
        if(image!=""){
            imageName=image;
        }
        
		
	cross = '<input type="button" onclick="getPriceOfProduct(this.form);" style="margin: 0 4px;position: absolute;right: -615px;top: -160px;width: 20px;z-index: 1000000;" value="X" class="rounded-corner-image">'
        image_string='<img src="images/'+foldername+'/'+imageName+'" style="width:568px;height:453px">';
//        alert(image_string);
        
        document.getElementById('additional_image').innerHTML=image_string;
	document.getElementById('ro').innerHTML=cross;
        
    }
    function finishImage(form,image){
         category_name="<?=$category_name?>";
        foldername=getProductFolderName("<?=$category_name?>");
        if(image!=""){
            imageName=image;
        }

        cross = '<input type="button" onclick="getPriceOfProduct(this.form);" style="margin: 0 4px;position: absolute;right: -615px;top: -160px;width: 20px;z-index: 1000000;" value="X" class="rounded-corner-image">'
        image_string='<img src="images/'+imageName+'" style="width:568px;height:453px">';
//        alert(image_string);
        
        document.getElementById('additional_image').innerHTML=image_string;
        document.getElementById('ro').innerHTML=cross;
    }    
    function changeGlassImage1(form, type){
        foldername=getProductFolderName("<?=$category_name?>")+form.type.value;
//        alert(foldername);
        imageName='';
        if(form.rounded_corners.value==0){
            imageName='GLASSNORAD.jpg';
        }else{
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
            if(category_name=="EP15"){
                document.getElementById('left1').innerHTML=(parseInt(form.glass_face.value)-2)+' 1/2"';
            }
            if(category_name=="EP5"){
                document.getElementById('left1').innerHTML=(parseInt(form.post_height.value)-2)+' 1/2"';
            }
        }
        else if(type=="B"){
            document.getElementById('top').innerHTML=(parseInt(form.face_length_b.value)-2)+' 1/8"';
            document.getElementById('bottom').innerHTML=(parseInt(form.face_length_b.value)-2)+' 1/8"';
            if(category_name=="EP15"){
                document.getElementById('left1').innerHTML=(parseInt(form.glass_face.value)-2)+' 1/2"';
            }
            if(category_name=="EP5"){
                document.getElementById('left1').innerHTML=(parseInt(form.post_height.value)-2)+' 1/2"';
            }
        }
        else if(type=="C"){
            document.getElementById('top').innerHTML=(parseInt(form.face_length_c.value)-2)+' 1/8"';
            document.getElementById('bottom').innerHTML=(parseInt(form.face_length_c.value)-2)+' 1/8"';
            if(category_name=="EP15"){
                document.getElementById('left1').innerHTML=(parseInt(form.glass_face.value)-2)+' 1/2"';
            }
            if(category_name=="EP5"){
                document.getElementById('left1').innerHTML=(parseInt(form.post_height.value)-2)+' 1/2"';
            }
        }else if(type=="D"){

            document.getElementById('top').innerHTML=(parseInt(form.face_length_d.value)-2)+' 1/8"';

            document.getElementById('bottom').innerHTML=(parseInt(form.face_length_d.value)-2)+' 1/8"';

            if(category_name=="EP15"){

                document.getElementById('left1').innerHTML=(parseInt(form.glass_face.value)-2)+' 1/2"';

            }

            if(category_name=="EP5"){

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
//		alert(choseOption +" "+ choselength+" "+choseRounded+" "+choseFlang+" "+priceOption+" "+choselight);
            <!-- ani code -->
            <!-- for custom ep 15 height -->
            if($('#customheight').is(':checked')){
                $('.option-panel').css('visibility','hidden');
		//getPriceOfProduct(document.forms['cart_quantity']);
            }else{
                $('.option-panel').css('visibility','visible');
            }
            $('#product_type').val($('.product-title').text());
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
            }
            if(!$('select[name="face_length_d"]').length){
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
			$("#c_glass_a_mult").val(1);
			$("#c_glass_b_mult").val(1);
			$("#c_glass_c_mult").val(1);
			$("#c_glass_d_mult").val(1);
            if(checkall){
                $('#ckall').val(true);
            }
            <!-- ani code -->
            // document.getElementById('ro').innerHTML='';
            osc="<?=$_REQUEST['osCsid']; ?>";
            im_id="<?=$im_id; ?>";
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
            var iscustomimg=0
		
            category_name="<?=$category_name?>";
            adjustable_name="ES31 Adjustable Brackets (Pairs)";
            //alert(category_name);
            if(category_name=="ES31"){
                adjustable_name="ES31 Adjustable Brackets (Pairs)";
            }else if(category_name=="ES73"){
                adjustable_name="ES73 Adjustable Brackets (Pairs)";
            }else if(category_name=="ES67"){
                adjustable_name="ES67 Adjustable Brackets (Pairs)";
                //alert(category_name);
            }
            right_lenght_obj=form.right_length;
            left_lenght_obj=form.left_length;
            post_height_obj=form.post_height;
            face_lenght_obj=form.face_length;
            face_lenght_a_obj=form.face_length_a;
            face_lenght_b_obj=form.face_length_b;
            face_lenght_c_obj=form.face_length_c;
            face_lenght_d_obj=form.face_length_d;		
            type_obj=form.type;
            adjustable_a1="";
		adjustable_b1="";
		adjustable_c1="";
		adjustable_d1="";
		adjustable_a="";
		adjustable_b="";
		adjustable_c="";
		adjustable_d="";
	   
                adjustableprice_a=0;
                adjustableprice_b=0;
                adjustableprice_c=0;
                adjustableprice_d=0;
		      make_adjustable=form.adjustable.value;
            glass_face_obj=form.glass_face;
            corner_obj=form.rounded_corners;
            flange_covers_obj=form.flange_covers;
            flange_covers2_obj=form.light_bar;
            choose_finish_obj=form.choose_finish;
            foldername=getProductFolderName(category_name)+type_obj.value;
            adjust_price=0;
//            temp.toString();

            if(category_name=="ES31"||category_name=="ES67"){
                corner_obj.value="round";
            }
            if(category_name=="ES36"){
                make_adjustable="no";
            }
            if(make_adjustable=="yes"){
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
            if(flange_covers_obj.value=="yes"){
                flangeCovers="test";
            }            
            /*this is used for check post height*/
            if(post_height_obj==null||post_height_obj=='undefine'){
            //it will take  glass_face_obj value from input that is set on the ul>li click on top both/something see line no 352
                height=glass_face_obj.value;
            }else{
		height=post_height_obj.value;
            }
            /*this is used for check post height*/
            /*if category ep15 and custom post height choosen*/
            if(category_name=='EP15'){
                if($('#customheight').is(':checked')){
                    height=post_height_obj.value;
		}
			
            }
		
		
            leftEndPost=category_name+" Left Post "+choose_finish_obj.value;
            rightEndPost=category_name+" Right Post "+choose_finish_obj.value;
            if(category_name=="EP15"){
                leftEndPost=category_name+"-"+height+" Left Post "+choose_finish_obj.value;
		rightEndPost=category_name+"-"+height+" Right Post "+choose_finish_obj.value 
		//alert(rightEndPost);
            }
            //lights
            //setting for both end
            if(glass_face_obj.value==1){
                if(category_name=="EP5"||category_name=="EP15"){
                    glassName_l=category_name+'-'+height+' '+left_lenght_obj.value+'" Glass ';
                    glassName_r=category_name+'-'+height+' '+right_lenght_obj.value+'" Glass ';
                    anglePost=category_name+'-'+height+" 90 Degree "+(choose_finish_obj.value=="Brushed Aluminum"?"Brushed Aluminum":"Post "+choose_finish_obj.value);
                    if(flange_covers_obj.value=="yes")
                        flangeCovers=category_name+"-FLANGE COVER "+type_obj.value.slice(0,1)+" BAY BOTH ENDS";
                    if(corner_obj.value=="round"){
                        glassName_l+="(Radiused Corners)";
			glassName_r+="(Radiused Corners)";
                    }else{
			glassName_l+="(Squared Corners)";
			glassName_r+="(Squared Corners)";
                    }
		}else{
                    leftEndPanel=category_name+" Left End"+(category_name=="EP11"?" Panel":"");
                    rightEndPanel=category_name+" Right End"+(category_name=="EP11"?" Panel":"");
		}   
                imageName="BOTHENDS";         
            }//right closed end
            else if(glass_face_obj.value==2){
		if(category_name=="EP5"||category_name=="EP15"){			
                    glassName_r=category_name+'-'+height+' '+right_lenght_obj.value+'" Glass ';
                    anglePost=category_name+'-'+height+" 90 Degree "+(choose_finish_obj.value=="Brushed Aluminum"?"Brushed Aluminum":"Post "+choose_finish_obj.value);
                    if(flange_covers_obj.value=="yes")
                        flangeCovers=category_name+"-FLANGE COVER "+type_obj.value.slice(0,1)+" BAY RIGHT END";
                    if(corner_obj.value=="round"){			
                        glassName_r+="(Radiused Corners)";
                    }else{			
			glassName_r+="(Squared Corners)";
                    }
		}else{
                    rightEndPanel=category_name+" Right End"+(category_name=="EP11"?" Panel":"");
		}
                imageName="RIGHTEND";
            }//left closed panel
            else if(glass_face_obj.value==3){
                if(category_name=="EP5"||category_name=="EP15"){
                    glassName_l=category_name+'-'+height+' '+left_lenght_obj.value+'" Glass ';				
                    anglePost=category_name+'-'+height+" 90 Degree "+(choose_finish_obj.value=="Brushed Aluminum"?"Brushed Aluminum":"Post "+choose_finish_obj.value);
                    if(flange_covers_obj.value=="yes")
                        flangeCovers=category_name+"-FLANGE COVER "+type_obj.value.slice(0,1)+" BAY LEFT END";
                    if(corner_obj.value=="round"){
                        glassName_l+="(Radiused Corners)";				
                    }else{
			glassName_l+="(Squared Corners)";                                   
                    }
		}else{
                    leftEndPanel=category_name+" Left End"+(category_name=="EP11"?" Panel":"");				
		}
                imageName="LEFTEND";
            }
            //no closed panel
            else if(glass_face_obj.value==4){
                if(flange_covers_obj!=null && flange_covers_obj!='undefine'){
                    if(flange_covers_obj.value=="yes"){
                        flangeCovers=category_name+"-FLANGE COVER "+type_obj.value.slice(0,1)+" BAY NO END";
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
            if(face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass' || face_lenght_d_obj.value == 'No Glass'){
                form.light_bar.value="no";
                form.light_bar.selected="No";
                form.light_bar.disabled=true;
            }else{
                form.light_bar.disabled=false;
				if(face_lenght_a_obj.value>42||face_lenght_b_obj.value>42||face_lenght_c_obj.value>42||face_lenght_d_obj.value>42){
                    wt=<?php echo $val?>;
                }else{
                    wt=1;
                }
            }
        }
        if(type_obj.value=="3BAY"){
            if(face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass'){
                form.light_bar.value="no";
                form.light_bar.selected="No";
                form.light_bar.disabled=true;
            }else{
                form.light_bar.disabled=false;
				if(face_lenght_a_obj.value>42||face_lenght_b_obj.value>42||face_lenght_c_obj.value>42){
                    wt=<?php echo $val?>;
                }else{
                    wt=1;
                }
            }
        }
        if(type_obj.value=="2BAY"){
            if(face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass'){
                form.light_bar.value="no";
                form.light_bar.selected="No";
                form.light_bar.disabled=true;
                
            }else{
                form.light_bar.disabled=false;
				if(face_lenght_a_obj.value>42 || face_lenght_b_obj.value>42){
                    wt=<?php echo $val?>;
                }else{
                    wt=1;
                }
                
            }
        }
        if(type_obj.value=="1BAY"){
            if(face_lenght_obj.value== 'No Glass'){
                form.light_bar.value="no";
                form.light_bar.selected="No";
                form.light_bar.disabled=true;
            }else{
                form.light_bar.disabled=false;
				if(face_lenght_obj.value>42){
                    wt=<?php echo $val?>;
                }else{
                    wt=1;
                }
            }
        }
		
            if(face_lenght_obj!=null && face_lenght_obj.value!="select"){
                if(face_lenght_obj.value!="No Glass"){
                    if(category_name=="EP5"||category_name=="EP15"){
                        glassName=category_name+'-'+height+' '+face_lenght_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");
			if(flange_covers2_obj.value=="yes"){
                            light_a=category_name+"-"+face_lenght_obj.value+"LYT";
                        }
                    }else{
    			glassName=category_name+' '+face_lenght_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");
			if(flange_covers2_obj.value=="yes"){
                            light_a=category_name+"-"+face_lenght_obj.value+"LYT";
                        }
                    }
                    /*ani code */
                    if(category_name=='EP11'&&(post_height_obj.value!='Instock')&&(post_height_obj.value!='custom')){
                        glassName=category_name+'-'+height+' '+face_lenght_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");
			iscustomimg=1;
			//set the height of post div
                    }
                    //for ep12
                    if(category_name=='EP12'&&(post_height_obj.value!='Instock')&&(post_height_obj.value!='custom')){
                        glassName=category_name+'-'+height+' '+face_lenght_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");
                        iscustomimg=1;
			//set the height of post div
                    }
                    /*ani code */
				
                }else{
                //for seting if no glass selected
                flag=0;
                }
			//alert(glassName);
		}
		//alert(glassName);
		if(face_lenght_a_obj!=null && face_lenght_a_obj.value!="select"){
		  if(face_lenght_a_obj.value!="No Glass"){
                    if(category_name=="EP5"||category_name=="EP15"){
                        glassName_a=category_name+'-'+height+' '+face_lenght_a_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");
			if(flange_covers2_obj.value=="yes"){
                            light_a=category_name+"-"+face_lenght_a_obj.value+"LYT";
				   
                        }
                    }else{
			glassName_a=category_name+' '+face_lenght_a_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");
                        if(flange_covers2_obj.value=="yes"){
                            light_a=category_name+"-"+face_lenght_a_obj.value+"LYT";
				   
                        }
                    }
//                    if(make_adjustable_a_obj.value!=0){
//                                adjustable_a=category_name+"-adjustable-bracket";
//				adjustable_a1=type_obj.value+"--"+"A--selected adjustable-bracket";
//				  // alert("a")
//                            }
                    /*ani code */
                    if(category_name=='EP11'&&(post_height_obj.value!='Instock')&&(post_height_obj.value!='custom')){
                        glassName_a=category_name+'-'+height+' '+face_lenght_a_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");
			iscustomimg=1;
			//set the height of post div
					
                    }
                    //for ep 12
                    if(category_name=='EP12'&&(post_height_obj.value!='Instock')&&(post_height_obj.value!='custom')){
                        glassName_a=category_name+'-'+height+' '+face_lenght_a_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");
			iscustomimg=1;
                    //set the height of post div
                    }
                    /*ani code*/
			
                }else{
                flag=0;
            }			
        }
        
	if(face_lenght_b_obj!=null && face_lenght_b_obj.value!="select"){
            if(face_lenght_b_obj.value!="No Glass"){
                if(category_name=="EP5"||category_name=="EP15"){
                    glassName_b=category_name+'-'+height+' '+face_lenght_b_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");
                    if(flange_covers2_obj.value=="yes"){
                        light_b=category_name+"-"+face_lenght_b_obj.value+"LYT";
				   
				   
                    }
		}else{
                    glassName_b=category_name+' '+face_lenght_b_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");
                    if(flange_covers2_obj.value=="yes"){
                        light_b=category_name+"-"+face_lenght_b_obj.value+"LYT";
				   
				   
                    }
		}
		/*ani code */
		if(category_name=='EP11'&&(post_height_obj.value!='Instock')&&(post_height_obj.value!='custom')){
                    glassName_b=category_name+'-'+height+' '+face_lenght_b_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");
                    iscustomimg=1;
		//set the height of post div
					
		}
		if(category_name=='EP12'&&(post_height_obj.value!='Instock')&&(post_height_obj.value!='custom')){
                    glassName_b=category_name+'-'+height+' '+face_lenght_b_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");
                    iscustomimg=1;
		//set the height of post div
					
		}
				/*ani code*/
            }else{
                flag=0;
            }
	}
	if(face_lenght_c_obj!=null && face_lenght_c_obj.value!="select"){
            if(face_lenght_c_obj.value!="No Glass"){
                if(category_name=="EP5"||category_name=="EP15"){
                    glassName_c=category_name+'-'+height+' '+face_lenght_c_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");
                    if(flange_covers2_obj.value=="yes"){
                        light_c=category_name+"-"+face_lenght_c_obj.value+"LYT";
				   
				   
                    }

                }else{
                    glassName_c=category_name+' '+face_lenght_c_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");
                    if(flange_covers2_obj.value=="yes"){
                        light_c=category_name+"-"+face_lenght_c_obj.value+"LYT";
				   
				   
                    }				
                }
            /*ani code */
                if(category_name=='EP11'&&(post_height_obj.value!='Instock')&&(post_height_obj.value!='custom')){
                    glassName_c=category_name+'-'+height+' '+face_lenght_c_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");
                    iscustomimg=1;
                    //set the height of post div

                }
                if(category_name=='EP12'&&(post_height_obj.value!='Instock')&&(post_height_obj.value!='custom')){
                    glassName_c=category_name+'-'+height+' '+face_lenght_c_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");
                    iscustomimg=1;
                    //set the height of post div

                }
                /*ani code*/
            }else{
                flag=0;
            }
			
        }
        if(face_lenght_d_obj!=null && face_lenght_d_obj.value!="select"){
            if(face_lenght_d_obj.value!="No Glass"){

                if(category_name=="EP5"||category_name=="EP15"){

                    glassName_d=category_name+'-'+height+' '+face_lenght_d_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");
                    if(flange_covers2_obj.value=="yes"){
                        light_d=category_name+"-"+face_lenght_d_obj.value+"LYT";
				   
				   
                    }

                }else{

                    glassName_d=category_name+' '+face_lenght_d_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");				
                        if(flange_covers2_obj.value=="yes"){
                            light_d=category_name+"-"+face_lenght_d_obj.value+"LYT";
				   
				   
                        }

		}
                if(category_name=='EP11'&&(post_height_obj.value!='Instock')&&(post_height_obj.value!='custom')){

                    glassName_d=category_name+'-'+height+' '+face_lenght_d_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");

                    iscustomimg=1;

                    //set the height of post div

					

		}

		if(category_name=='EP12'&&(post_height_obj.value!='Instock')&&(post_height_obj.value!='custom')){

                    glassName_d=category_name+'-'+height+' '+face_lenght_d_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");

                    iscustomimg=1;

                    //set the height of post div
                    					

		}

		/*ani code*/

            }else{

                flag=0;

            }

			

	}
	if(post_height_obj!=null){
            if(category_name=="EP5"){
                leftEndPost=category_name+"-"+height+" End Post "+choose_finish_obj.value;
		rightEndPost=category_name+"-"+height+" End Post "+choose_finish_obj.value;
            }
			
	}
	if(type_obj!=null){
            if(type_obj.value=="4BAY"){
                    
		if(category_name=="EP5"||category_name=="EP15"){

                    centerPost=category_name+"-"+height+" Center "+(choose_finish_obj.value=="Brushed Aluminum"?"Brushed Aluminum":"Post "+choose_finish_obj.value);

		}else{

                    new_name=category_name

                    if(category_name == 'EP22'){
                        
                        new_name='EP21'

                    }

                    centerPost=new_name+" Center Post "+choose_finish_obj.value;
                    // alert(centerPost);

		}
            }	
            if(type_obj.value=="3BAY"||type_obj.value=="2BAY"){
                if(category_name=="EP5"||category_name=="EP15"){
                    centerPost=category_name+"-"+height+" Center "+(choose_finish_obj.value=="Brushed Aluminum"?"Brushed Aluminum":"Post "+choose_finish_obj.value);
		}else{
                    new_name=category_name
                    if(category_name == 'EP22'){
                        new_name='EP21'
                    }
                    centerPost=new_name+" Center Post "+choose_finish_obj.value;
		}
				
            }
	}
        
        if(category_name=="EP15"){
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
//            alert(imageName);
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
            }else{
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

	if(category_name=='EP11'){
            imageName='V'+imageName;
	}
	if(category_name=='EP12'){
            imageName='VERT'+imageName;
	}
   
        var query_s = "";
	str="";
		
	if(glassName!=""){
            str+='<input type="hidden" name="products_id[]" value="'+product_name_price[glassName][0]+'" />';
            facePrice=parseFloat(product_name_price[glassName][1]);
						
	}
	if(glassName_l!=""){
            str+='<input type="hidden" name="products_id[]" value="'+product_name_price[glassName_l][0]+'" />';
            facePrice_l=parseFloat(product_name_price[glassName_l][1]);
	}
	if(glassName_r!=""){
            str+='<input type="hidden" name="products_id[]" value="'+product_name_price[glassName_r][0]+'" />';
            facePrice_r=parseFloat(product_name_price[glassName_r][1]);
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
        if(light_a!=""){
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
            if(category_name=="EP22"){
                centerPost=centerPost.replace(category_name, "EP11");
				
            }
            if(category_name=="EP12"){
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
        
	if(anglePost!="" && category_name=="EP5"){
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
	if(leftEndPanel!=""){
            str+='<input type="hidden" name="products_id[]" value="'+product_name_price[leftEndPanel][0]+'" />';
            leftEndPanelPrice=parseFloat(product_name_price[leftEndPanel][1]);
	}
	if(rightEndPanel!=""){
            str+='<input type="hidden" name="products_id[]" value="'+product_name_price[rightEndPanel][0]+'" />';
            rightEndPanelPrice=parseFloat(product_name_price[rightEndPanel][1]);
	}
	
		
	if(flangeCovers != ""){
          
            
            if(category_name=="EP36"){ 
                if(type_obj.value=="1BAY"){ 
                   // flangeCovers="EP5-FLANGE COVER 2 PIECES";
                    flangeCovers="EP36-FLANGE COVER 1 PIECE";
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    flangeCoversPrice=2*parseFloat(product_name_price[flangeCovers][1]);
                }else if(type_obj.value=="2BAY"){
                    //flangeCovers="EP5-FLANGE COVER 3 PIECES"; 
                    flangeCovers="EP36-FLANGE COVER 1 PIECE";
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    flangeCoversPrice=3*parseFloat(product_name_price[flangeCovers][1]);   
                }else if(type_obj.value=="3BAY"){
                    //flangeCovers="EP5-FLANGE COVER 4 PIECES"; 
                    flangeCovers="EP36-FLANGE COVER 1 PIECE";
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    flangeCoversPrice=4*parseFloat(product_name_price[flangeCovers][1]);              
                }else if(type_obj.value=="4BAY"){
                    //flangeCovers="EP5-FLANGE COVER 4 PIECES"; 
                    flangeCovers="EP36-FLANGE COVER 1 PIECE";
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    flangeCoversPrice=5*parseFloat(product_name_price[flangeCovers][1]);              
                }
            }
            
            
            if(category_name=="ES31"){ 
                if(type_obj.value=="1BAY"){ 
                    //flangeCovers="EP5-FLANGE COVER 2 PIECES";
                    flangeCovers="ES31-FLANGE COVER 1 PIECE";
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    flangeCoversPrice=2*parseFloat(product_name_price[flangeCovers][1]);
                    
                    
                }
                else if(type_obj.value=="2BAY"){
                    //flangeCovers="EP5-FLANGE COVER 3 PIECES";
                    flangeCovers="ES31-FLANGE COVER 1 PIECE"; 
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    flangeCoversPrice=3*parseFloat(product_name_price[flangeCovers][1]); 
                  
                }
                else if(type_obj.value=="3BAY"){
                    //flangeCovers="EP5-FLANGE COVER 4 PIECES";
                    flangeCovers="ES31-FLANGE COVER 1 PIECE"; 
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    flangeCoversPrice=4*parseFloat(product_name_price[flangeCovers][1]);              
                }else if(type_obj.value=="4BAY"){
                    //flangeCovers="EP5-FLANGE COVER 4 PIECES";
                    flangeCovers="ES31-FLANGE COVER 1 PIECE"; 
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
					str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    flangeCoversPrice=5*parseFloat(product_name_price[flangeCovers][1]);              
                }
            }
            
            if(category_name=="ES67"){ 
                if(type_obj.value=="1BAY"){ 
                    //flangeCovers="EP5-FLANGE COVER 2 PIECES";
                    flangeCovers="ES67-FLANGE COVER 1 PIECE";
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    flangeCoversPrice=2*parseFloat(product_name_price[flangeCovers][1]);
                }else if(type_obj.value=="2BAY"){
                    // flangeCovers="EP5-FLANGE COVER 3 PIECES"; 
                    flangeCovers="ES67-FLANGE COVER 1 PIECE";
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />'; 
                    flangeCoversPrice=3*parseFloat(product_name_price[flangeCovers][1]);  
                }else if(type_obj.value=="3BAY"){
                    //flangeCovers="EP5-FLANGE COVER 4 PIECES";
                    flangeCovers="ES67-FLANGE COVER 1 PIECE"; 
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />'; 
                    flangeCoversPrice=4*parseFloat(product_name_price[flangeCovers][1]);             
                }else if(type_obj.value=="4BAY"){
                    //flangeCovers="EP5-FLANGE COVER 4 PIECES";
                    flangeCovers="ES67-FLANGE COVER 1 PIECE"; 
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />'; 
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />'; 
                    flangeCoversPrice=5*parseFloat(product_name_price[flangeCovers][1]);             
                }
            }
            if(category_name=="ES73"){ 
                if(type_obj.value=="1BAY"){ 
                    //flangeCovers="EP5-FLANGE COVER 2 PIECES";
                    flangeCovers="ES73-FLANGE COVER 1 PIECE";
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    flangeCoversPrice=2*parseFloat(product_name_price[flangeCovers][1]);
                }else if(type_obj.value=="2BAY"){
                    // flangeCovers="EP5-FLANGE COVER 3 PIECES";
                    flangeCovers="ES73-FLANGE COVER 1 PIECE";
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    flangeCoversPrice=3*parseFloat(product_name_price[flangeCovers][1]);    
                }else if(type_obj.value=="3BAY"){
                    //flangeCovers="EP5-FLANGE COVER 4 PIECES"; 
                    flangeCovers="ES73-FLANGE COVER 1 PIECE";
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    flangeCoversPrice=4*parseFloat(product_name_price[flangeCovers][1]);             
                }else if(type_obj.value=="4BAY"){
                    //flangeCovers="EP5-FLANGE COVER 4 PIECES"; 
                    flangeCovers="ES73-FLANGE COVER 1 PIECE";
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
                    flangeCoversPrice=5*parseFloat(product_name_price[flangeCovers][1]);             
                }
            }

            
	}
		
		  
        //alert(type_obj.value+" "+glass_face_obj.value+" "+flangeCovers);
	flangeCoversPrice2=lightPrice_a+lightPrice_b+lightPrice_c+lightPrice_d;
        glassPrice=facePrice+facePrice_l+facePrice_r+facePrice_a+facePrice_b+facePrice_c+facePrice_d;
        t_post_price=centerPostPrice+anglePostPrice;
        totalPrice=glassPrice+leftPostPrice+rightPostPrice+leftEndPanelPrice+adjust_price+rightEndPanelPrice+t_post_price+flangeCoversPrice+flangeCoversPrice2;
	if(form.adjustable.value=="yes"){//adding image of adjustable breckets!!
//            alert(imageName);
            imageName="ADJUST"+imageName;
            
        }	
        img_ajx=imageName; 	
        image_string='<img src="images/'+foldername+'/'+imageName+'.jpg" style="width:568px;height:453px">'; 
        //alert(image_string);
        
	image_string+='<div class="msgtishu"></div>';
	image_string+='<div class="msgtishu1"></div>';
	image_string+='<div class="msgtishu2"><hr color="red" size="6px"   width="'+width_three+'"> </div>';
        image_string+='<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="glass_d">12"</div><div class="total">38"</div>';
        
        document.getElementById('additional_image').innerHTML=image_string;
		
        
     	//setting position of post div
		
		
		
	//end of setting position
    			
        if(type_obj.value=="1BAY"){
			if(face_lenght_obj.value!="select"){
                $('#c_glass_face_val').val($('[name="face_length"]').find('option:selected').text());
                if(glassName!=''){
                    $('#c_glass_face').val(product_name_price[glassName][0]);
                }
                if(flange_covers2_obj.value=="yes" ){
                    $('#c_glass_a_light').val(product_name_price[light_a][0]);
                    $('#c_glass_a_val_light').val(face_lenght_obj.options[face_lenght_obj.selectedIndex].text);
                }
                $("div.glass").text($('[name="face_length"]').find('option:selected').text());
            }else{
                $("div.glass").text("A");
            }
            <!-- ani code -->
            //for custom face set value to hidden fileds
            
            
			
            
            <!-- ani code -->
            
            var n1=getBeforeChar($('[name="face_length"]').find('option:selected').text())-0;
            if(getAfterChar($('[name="face_length"]').find('option:selected').text())!=""){
                n1=(n1+2)+'-'+getAfterChar($('[name="face_length"]').find('option:selected').text())+'"';
            }else { n1=(n1+2)+'"';}
			if(n1=='2"'){
                $("div.total").text("Total");
            }else{
                $("div.total").text(n1);
                tot1=n1;
            }
            
            if(face_lenght_obj.value == 'No Glass'){
			 
                noGlass()
            }
				
        }
        if(type_obj.value=="2BAY"){
            <!-- ani code -->
			
            if(face_lenght_a_obj.value!="select"){
                 $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
                 if(glassName_a!=''){
                    $('#c_glass_a').val(product_name_price[glassName_a][0]);
                }
                if(face_lenght_a_obj.value != 'No Glass'){             
                if(flange_covers2_obj.value=="yes"){
                    $('#c_glass_a_light').val(product_name_price[light_a][0]);
                    $('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                    // $('#c_glass_b_light').val(product_name_price[light_b][0]);
                    // $('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                }
                $("div.glass_a").text($('[name="face_length_a"]').find('option:selected').text());
            }
            }else{
                $("div.glass_a").text("A");
            }
            if(face_lenght_b_obj.value!="select"){
                $('#c_glass_b_val').val($('[name="face_length_b"]').find('option:selected').text());
                if(glassName_b!=''){
                    $('#c_glass_b').val(product_name_price[glassName_b][0]);
                }
                if(face_lenght_b_obj.value != 'No Glass'){             
                    if(flange_covers2_obj.value=="yes"){
                        // $('#c_glass_a_light').val(product_name_price[light_a][0]);
                        // $('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        $('#c_glass_b_light').val(product_name_price[light_b][0]);
                        $('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                    }
                }
                $("div.glass_b").text($('[name="face_length_b"]').find('option:selected').text());
            }else{
                $("div.glass_b").text("B");
            }
           
            
            	
            
				
			
            
            
            var n1=getBeforeChar($('[name="face_length_a"]').find('option:selected').text())-0;
            var n2=getBeforeChar($('[name="face_length_b"]').find('option:selected').text())-0;
            var f_n1=getAfterChar($('[name="face_length_a"]').find('option:selected').text());
            var f_n2=getAfterChar($('[name="face_length_b"]').find('option:selected').text());
            var total= getTotal(n1,n2,f_n1,f_n2);
            if(total=='2"'){
                $("div.total").text("Total");
            }else{
                $("div.total").text(total);
                tot1=total;
            }
            
            <!-- ani code -->
            if(face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass'){
                noGlass()
            }
        }
		 
        if(type_obj.value=="3BAY"){
			
            <!-- ani code -->
			if(face_lenght_a_obj.value!="select"){
                $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
                if(glassName_a!=''){
                    $('#c_glass_a').val(product_name_price[glassName_a][0]);
                    // $('#c_glass_b').val(product_name_price[glassName_b][0]);
                    // $('#c_glass_c').val(product_name_price[glassName_c][0]);    
                }
                if(face_lenght_a_obj.value != 'No Glass' && face_lenght_b_obj.value != 'No Glass' && face_lenght_c_obj.value!= 'No Glass' ){

                    if(flange_covers2_obj.value=="yes"){
                        $('#c_glass_a_light').val(product_name_price[light_a][0]);
                        $('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        // $('#c_glass_b_light').val(product_name_price[light_b][0]);
                        // $('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        // $('#c_glass_c_light').val(product_name_price[light_c][0]);
                        // $('#c_glass_c_val_light').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                    }
                }
                $("div.glass_a").text($('[name="face_length_a"]').find('option:selected').text());
            }else{
                $("div.glass_a").text("A");
            }
            if(face_lenght_b_obj.value!="select"){
                $('#c_glass_b_val').val($('[name="face_length_b"]').find('option:selected').text());
                if(glassName_b!=''){
                    // $('#c_glass_a').val(product_name_price[glassName_a][0]);
                    $('#c_glass_b').val(product_name_price[glassName_b][0]);
                    // $('#c_glass_c').val(product_name_price[glassName_c][0]);    
                }
                if(face_lenght_a_obj.value != 'No Glass' && face_lenght_b_obj.value != 'No Glass' && face_lenght_c_obj.value!= 'No Glass' ){

                    if(flange_covers2_obj.value=="yes"){
                        // $('#c_glass_a_light').val(product_name_price[light_a][0]);
                        // $('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        $('#c_glass_b_light').val(product_name_price[light_b][0]);
                        $('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        // $('#c_glass_c_light').val(product_name_price[light_c][0]);
                        // $('#c_glass_c_val_light').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                    }
                }
                $("div.glass_b").text($('[name="face_length_b"]').find('option:selected').text());
            }else{
                $("div.glass_b").text("B");
            }
            if(face_lenght_c_obj.value!="select"){
                $('#c_glass_c_val').val($('[name="face_length_c"]').find('option:selected').text());
                if(glassName_c!=''){
                    // $('#c_glass_a').val(product_name_price[glassName_a][0]);
                    // $('#c_glass_b').val(product_name_price[glassName_b][0]);
                    $('#c_glass_c').val(product_name_price[glassName_c][0]);    
                }
                if(face_lenght_a_obj.value != 'No Glass' && face_lenght_b_obj.value != 'No Glass' && face_lenght_c_obj.value!= 'No Glass' ){

                    if(flange_covers2_obj.value=="yes"){
                        // $('#c_glass_a_light').val(product_name_price[light_a][0]);
                        // $('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        // $('#c_glass_b_light').val(product_name_price[light_b][0]);
                        // $('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        $('#c_glass_c_light').val(product_name_price[light_c][0]);
                        $('#c_glass_c_val_light').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                    }
                }
                $("div.glass_c").text($('[name="face_length_c"]').find('option:selected').text());
            }else{
                $("div.glass_c").text("C");
            }
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
            if(face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value== 'No Glass' ){
                noGlass()
            }
        }
        if(type_obj.value=="4BAY"){

			if(face_lenght_a_obj.value!="select"){
                $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
                if(glassName_a!=''){
                    $('#c_glass_a').val(product_name_price[glassName_a][0]);
                }
                if(face_lenght_a_obj.value != 'No Glass' && face_lenght_b_obj.value != 'No Glass' && face_lenght_c_obj.value!= 'No Glass' && face_lenght_d_obj.value!= 'No Glass' ){
                    if(flange_covers2_obj.value=="yes"){
                        $('#c_glass_a_light').val(product_name_price[light_a][0]);
                        $('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        // $('#c_glass_b_light').val(product_name_price[light_b][0]);
                        // $('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        // $('#c_glass_c_light').val(product_name_price[light_c][0]);
                        // $('#c_glass_c_val_light').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                        // $('#c_glass_d_light').val(product_name_price[light_d][0]);
                        // $('#c_glass_d_val_light').val(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
                    }
                
                }
                $("div.glass_a").text($('[name="face_length_a"]').find('option:selected').text());
            }else{
                $("div.glass_a").text("A");
            }
            if(face_lenght_b_obj.value!="select"){
                $('#c_glass_b_val').val($('[name="face_length_b"]').find('option:selected').text());
                if(glassName_b!=''){
                    $('#c_glass_b').val(product_name_price[glassName_b][0]);
                }
                if(face_lenght_a_obj.value != 'No Glass' && face_lenght_b_obj.value != 'No Glass' && face_lenght_c_obj.value!= 'No Glass' && face_lenght_d_obj.value!= 'No Glass' ){
                    if(flange_covers2_obj.value=="yes"){
                        // $('#c_glass_a_light').val(product_name_price[light_a][0]);
                        // $('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        $('#c_glass_b_light').val(product_name_price[light_b][0]);
                        $('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        // $('#c_glass_c_light').val(product_name_price[light_c][0]);
                        // $('#c_glass_c_val_light').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                        // $('#c_glass_d_light').val(product_name_price[light_d][0]);
                        // $('#c_glass_d_val_light').val(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
                    }
                
                }
                $("div.glass_b").text($('[name="face_length_b"]').find('option:selected').text());
            }else{
                $("div.glass_b").text("B");
            }
            if(face_lenght_c_obj.value!="select"){
                $('#c_glass_c_val').val($('[name="face_length_c"]').find('option:selected').text());
                if(glassName_c!=''){
                    $('#c_glass_c').val(product_name_price[glassName_c][0]);  
                }
                if(face_lenght_a_obj.value != 'No Glass' && face_lenght_b_obj.value != 'No Glass' && face_lenght_c_obj.value!= 'No Glass' && face_lenght_d_obj.value!= 'No Glass' ){
                    if(flange_covers2_obj.value=="yes"){
                        // $('#c_glass_a_light').val(product_name_price[light_a][0]);
                        // $('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        // $('#c_glass_b_light').val(product_name_price[light_b][0]);
                        // $('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        $('#c_glass_c_light').val(product_name_price[light_c][0]);
                        $('#c_glass_c_val_light').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                        // $('#c_glass_d_light').val(product_name_price[light_d][0]);
                        // $('#c_glass_d_val_light').val(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
                    }
                
                }
                $("div.glass_c").text($('[name="face_length_c"]').find('option:selected').text());
            }else{
                $("div.glass_c").text("C");
            }
            if(face_lenght_d_obj.value!="select"){
                $('#c_glass_d_val').val($('[name="face_length_d"]').find('option:selected').text());
                if(glassName_d!=''){
                    $('#c_glass_d').val(product_name_price[glassName_d][0]);    
                }
                if(face_lenght_a_obj.value != 'No Glass' && face_lenght_b_obj.value != 'No Glass' && face_lenght_c_obj.value!= 'No Glass' && face_lenght_d_obj.value!= 'No Glass' ){
                    if(flange_covers2_obj.value=="yes"){
                        // $('#c_glass_a_light').val(product_name_price[light_a][0]);
                        // $('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        // $('#c_glass_b_light').val(product_name_price[light_b][0]);
                        // $('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        // $('#c_glass_c_light').val(product_name_price[light_c][0]);
                        // $('#c_glass_c_val_light').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                        $('#c_glass_d_light').val(product_name_price[light_d][0]);
                        $('#c_glass_d_val_light').val(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
                    }
                
                }
                $("div.glass_d").text($('[name="face_length_d"]').find('option:selected').text());
            }else{
                $("div.glass_d").text("D");
            }
            <!-- ani code -->
            <!--for send value in hidden field-->
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

            if(face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value== 'No Glass' || face_lenght_d_obj.value== 'No Glass' ){

                noGlass()

            }

        }
       
	
			
		
	document.getElementById("products_ids").innerHTML=str;
        
        document.getElementById("left-post").innerHTML=leftPostPrice+".00";
        document.getElementById("right-post").innerHTML=rightPostPrice+".00";
        document.getElementById("trasition-post").innerHTML=t_post_price+".00";
        document.getElementById("face-glass").innerHTML=glassPrice+".00";
        document.getElementById("total").innerHTML=totalPrice+".00";
	if(category_name!="EP36"){
            document.getElementById("make-adjustable").innerHTML=adjust_price+".00";
        }	
                
        // if(category_name=="EP5"){
        document.getElementById("flange-cover").innerHTML=flangeCoversPrice+".00";  
        document.getElementById("lightbar").innerHTML=flangeCoversPrice2+".00";
        document.getElementById("left-Panel").innerHTML=leftEndPanelPrice+".00";
        document.getElementById("right-panel").innerHTML=rightEndPanelPrice+".00";      		
        // }
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
            var foura=fourb=false;
            if(face_lenght_a_obj!=null && face_lenght_a_obj.value=="select"){
                $("#glass_a_err").attr("src","img/iconCheckOff.gif");
                four=false;
            }else{
                $("#glass_a_err").attr("src","img/iconCheckOn.gif");
                foura=true;
            }
            if(face_lenght_b_obj!=null && face_lenght_b_obj.value=="select"){
                $("#glass_b_err").attr("src","img/iconCheckOff.gif");
                four=false;
            }else{
                $("#glass_b_err").attr("src","img/iconCheckOn.gif");
                fourb=true;
            }
            if(foura&&fourb){
                four=true;
            }else{
                //$("#froast").css("display","none");
            }
        }else if(type_obj.value=="3BAY"){
            var foura=fourb=fourc=false;
            if(face_lenght_a_obj!=null && face_lenght_a_obj.value=="select"){
                $("#glass_a_err").attr("src","img/iconCheckOff.gif");
                four=false;
            }else{
                $("#glass_a_err").attr("src","img/iconCheckOn.gif");
                foura=true;
            }
            if(face_lenght_b_obj!=null && face_lenght_b_obj.value=="select"){
                $("#glass_b_err").attr("src","img/iconCheckOff.gif");
                four=false;
            }else{
                $("#glass_b_err").attr("src","img/iconCheckOn.gif");
                fourb=true;
            }
            if(face_lenght_c_obj!=null && face_lenght_c_obj.value=="select"){
                $("#glass_c_err").attr("src","img/iconCheckOff.gif");
                four=false;
            }else{
                $("#glass_c_err").attr("src","img/iconCheckOn.gif");
                fourc=true;
            }
            if(foura&&fourb&&fourc){
                four=true;
            }else{
                //$("#froast").css("display","none");
            }
        }else if (type_obj.value=="4BAY"){
            var foura=fourb=fourc=fourd=false;
            if(face_lenght_a_obj!=null && face_lenght_a_obj.value=="select"){
                $("#glass_a_err").attr("src","img/iconCheckOff.gif");
                four=false;
            }else{
                $("#glass_a_err").attr("src","img/iconCheckOn.gif");
                foura=true;
            }
            if(face_lenght_b_obj!=null && face_lenght_b_obj.value=="select"){
                $("#glass_b_err").attr("src","img/iconCheckOff.gif");
                four=false;
            }else{
                $("#glass_b_err").attr("src","img/iconCheckOn.gif");
                fourb=true;
            }
            if(face_lenght_c_obj!=null && face_lenght_c_obj.value=="select"){
                $("#glass_c_err").attr("src","img/iconCheckOff.gif");
                four=false;
            }else{
                $("#glass_c_err").attr("src","img/iconCheckOn.gif");
                fourc=true;
            }
            if(face_lenght_d_obj!=null && face_lenght_d_obj.value=="select"){
                $("#glass_d_err").attr("src","img/iconCheckOff.gif");
                four=false;
            }else{
                $("#glass_d_err").attr("src","img/iconCheckOn.gif");
                fourd=true;
            }
            if(foura&&fourb&&fourc&&fourd){
                four=true;
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
        if(flange_covers2_obj.value=="select"){
            $("#light_err").attr("src","img/iconCheckOff.gif");
            six=false;
        }else{
            $("#light_err").attr("src","img/iconCheckOn.gif");
            six=true;
        }
        if(category_name=="EP36" || category_name=="ES73"){
            if(type_obj.value=="1BAY"){
                if(face_lenght_obj.value=="No Glass"){
                    four=true;
                    six=true;
                    $("#light_err").attr("src","img/iconCheckOn.gif");
                    $("#glass_a_err").attr("src","img/iconCheckOn.gif");
                    $("#round_err").attr("src","img/iconCheckOn.gif");
                    seven=true;
					if(form.adjustable.value=="no"){
						corner_obj.value="select";
					}else{
						corner_obj.value="round";
					}
                    corner_obj.disabled=true;
                    $("#round_err").attr("src","img/iconCheckOn.gif");
                    seven=true;
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
            if(type_obj.value=="2BAY"){
                if(face_lenght_a_obj.value=="No Glass" || face_lenght_b_obj.value=="No Glass"){
                    four=true;
                    six=true;
                    $("#light_err").attr("src","img/iconCheckOn.gif");
                    $("#glass_a_err").attr("src","img/iconCheckOn.gif");
                    $("#glass_b_err").attr("src","img/iconCheckOn.gif");
                    if(form.adjustable.value=="no"){
						corner_obj.value="select";
					}else{
						corner_obj.value="round";
					}
                    corner_obj.disabled=true;
                    $("#round_err").attr("src","img/iconCheckOn.gif");
                    seven=true;
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
            if(type_obj.value=="3BAY"){
                if(face_lenght_a_obj.value=="No Glass" || face_lenght_b_obj.value=="No Glass" || face_lenght_c_obj.value=="No Glass"){
                    four=true;
                    six=true;
                    $("#light_err").attr("src","img/iconCheckOn.gif");
                    $("#glass_a_err").attr("src","img/iconCheckOn.gif");
                    $("#glass_b_err").attr("src","img/iconCheckOn.gif");
                    $("#glass_c_err").attr("src","img/iconCheckOn.gif");
                    if(form.adjustable.value=="no"){
						corner_obj.value="select";
					}else{
						corner_obj.value="round";
					}
                    corner_obj.disabled=true;
                    $("#round_err").attr("src","img/iconCheckOn.gif");
                    seven=true;
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
            if(type_obj.value=="4BAY"){
                if(face_lenght_a_obj.value=="No Glass" || face_lenght_b_obj.value=="No Glass" || face_lenght_c_obj.value=="No Glass" || face_lenght_d_obj.value=="No Glass"){
                    four=true;
                    six=true;
                    $("#light_err").attr("src","img/iconCheckOn.gif");
                    $("#glass_a_err").attr("src","img/iconCheckOn.gif");
                    $("#glass_b_err").attr("src","img/iconCheckOn.gif");
                    $("#glass_c_err").attr("src","img/iconCheckOn.gif");
                    $("#glass_d_err").attr("src","img/iconCheckOn.gif");
                    if(form.adjustable.value=="no"){
						corner_obj.value="select";
					}else{
						corner_obj.value="round";
					}
                    corner_obj.disabled=true;
                    $("#round_err").attr("src","img/iconCheckOn.gif");
                    seven=true;
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
        }else{
            if(type_obj.value=="1BAY"){
                if(face_lenght_obj.value=="No Glass"){
                    four=true;
                    six=true;
                    $("#light_err").attr("src","img/iconCheckOn.gif");
                    $("#glass_a_err").attr("src","img/iconCheckOn.gif");
                }
            }
            if(type_obj.value=="2BAY"){
                if(face_lenght_a_obj.value=="No Glass" || face_lenght_b_obj.value=="No Glass"){
                    four=true;
                    six=true;
                    $("#light_err").attr("src","img/iconCheckOn.gif");
                    $("#glass_a_err").attr("src","img/iconCheckOn.gif");
                    $("#glass_b_err").attr("src","img/iconCheckOn.gif");
                }
            }
            if(type_obj.value=="3BAY"){
                if(face_lenght_a_obj.value=="No Glass" || face_lenght_b_obj.value=="No Glass" || face_lenght_c_obj.value=="No Glass"){
                    four=true;
                    six=true;
                    $("#light_err").attr("src","img/iconCheckOn.gif");
                    $("#glass_a_err").attr("src","img/iconCheckOn.gif");
                    $("#glass_b_err").attr("src","img/iconCheckOn.gif");
                    $("#glass_c_err").attr("src","img/iconCheckOn.gif");
                }
            }
            if(type_obj.value=="4BAY"){
                if(face_lenght_a_obj.value=="No Glass" || face_lenght_b_obj.value=="No Glass" || face_lenght_c_obj.value=="No Glass" || face_lenght_d_obj.value=="No Glass"){
                    four=true;
                    six=true;
                    $("#light_err").attr("src","img/iconCheckOn.gif");
                    $("#glass_a_err").attr("src","img/iconCheckOn.gif");
                    $("#glass_b_err").attr("src","img/iconCheckOn.gif");
                    $("#glass_c_err").attr("src","img/iconCheckOn.gif");
                    $("#glass_d_err").attr("src","img/iconCheckOn.gif");
                }
            }
            if(corner_obj.value=="select"){
                $("#round_err").attr("src","img/iconCheckOff.gif");
                seven=false;
            }else{
                $("#round_err").attr("src","img/iconCheckOn.gif");
                seven=true;
            }
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
        if(zero&&four&&five&&six&&seven&&eight){
            // $("#add").removeAttr("disabled");
            // $("#add").css("opacity","1");
        }else{
            // $("#add").css("opacity","0.3");
        }
	}  
	
</script>

    <table  id="cart-form">
        <?php //include('form_option.php')?>
            <tr>
                <td>
                    <table cellpadding="0" cellspacing="0" width=100% style="border: 1px solid white;border-radius: 5px;">
                        <tr>
                            <td colspan=3><center><h2 class="heading_all"><span style="float:left">&nbsp;&nbsp;1)</span>Measurements</h2></center></td>
                        </tr>
                        <?php include('type_of_products.php'); ?>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table cellpadding="0" cellspacing="0" width=100% style="border: 1px solid white;border-radius: 5px;">
                    <tr>
                        <td colspan=3><center><h2 class="heading_all"><span style="float:left">&nbsp;&nbsp;2)</span>Options</h2></center></td>
                    </tr>
					<?php 
						$display = ' ';
						$checked ="";
						$disp=true;
                        $display_adjust="none";
						$value = 0;
						if($category_name == "ES31" || $category_name == "ES67") {
                                $display = "display:none";
                                $checked = "checked";
                                $value = 1;
								$disp=false;
                            }
                        if($category_name=='ES31'||$category_name=="ES67"||$category_name=="ES73"){
                            $display_adjust='box';
                        }
					?>
                        <tr>
                        <td>
                            <a class="thickbox" href="images/<?php echo $category_name;?>/End_panels.jpg"><h1>End Panels</h1></a>
                        </td>
                        <td>
                            <select class="option" id="end_options">
                                <option value="select">Select</option>
                                <option value="Both Closed End Panels">Both Ends</option>
                                <option value="Right Closed End Panel">Right End</option>
                                <option value="Left Closed End Panel">Left End</option>
                                <option value="No Closed End Panels">No Ends</option>
                            </select>
                        </td>
                        <td>
                            <span id="errormsgfirstname">
                                <img id="endpan_err" src="img/iconCheckOff.gif">
                            </span>
                        </td>
                    </tr>
                        <tr>
                            <td class="test-flang"><a class="thickbox" href='flang.php?type=adj&KeepThis=true&TB_iframe=true&height=480&width=640'><h1>Flange Covers</h1></a></td>
                            <td>
                                <select name="flange_covers" style="margin:4px; float: right;" align="right" onchange="getPriceOfProduct(this.form);">
                                    <option value="select">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                               <!-- <input type="checkbox" name="flange_covers" value="0" style="margin:4px; float: right;" align="right" onclick="getPriceOfProduct(this.form);" disabled="disabled"/>     -->
                            </td>
                            <td>
                                <span id="errormsgfirstname">
                                    <img id="flange_err" src="img/iconCheckOff.gif">
                                </span>
                            </td>
                        </tr>
                        <tr class="test-finish" style="<?php echo  $display ;?>">
                            <td><a class="thickbox" style="text-color:#c7f900 !important" href=<?php echo '"images/'.$category_name.'/RADIUS.jpg"';?> ><h1 >Glass Corners</h1></a></td>
                            <td>
                                <select name="rounded_corners" id="round_check" style="margin:4px;" onchange="getPriceOfProduct(this.form)" >
                                    <option value="select">Select</option>
                                    <option value="squared">Squared</option>
                                    <option value="round">Rounded</option>
                                </select>
                                <!-- <input type="button" class="rounded-corner-image" value="?" style="width:20px;margin: 0 4px;" onclick="changeGlassImage(this.form,'RADIUS.jpg');" disabled="disabled"/> -->
                                <!-- <input type="checkbox" /> -->
                            </td>
                            <td>
                                <span id="errormsgfirstname">
                                    <img id="round_err" src="img/iconCheckOff.gif">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="test-light"><a class="thickbox" href="light.php?name=<?php echo  $category_name;?>&KeepThis=true&TB_iframe=true&height=480&width=640" ><h1>Light Bar</h1></a></td>
                            <td>
                                <select name="light_bar" id="checkbox2" value="0" style="margin:4px; float: right;" align="right" onchange="getPriceOfProduct(this.form);">
                                    <option value="select">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                <!-- <input type="checkbox" name="light_bar" id="checkbox2" value="0" style="margin:4px; float: right;" align="right" onclick="getPriceOfProduct(this.form);" disabled="disabled"/>     -->
                            </td>
                            <td>
                                <span id="errormsgfirstname">
                                    <img id="light_err" src="img/iconCheckOff.gif">
                                </span>
                            </td>
                        </tr>
                        <?php include('choose-finish.php')?>
                    </table>
                    <table cellpadding="0" cellspacing="0" width=100% style="border: 1px solid white;border-radius: 5px;display:<?php echo $display_adjust;?>;">
                        <tr>
                            <td colspan=2><center><h2  class="heading_all"><span style="float:left">&nbsp;&nbsp3)</span>Extras</center></h2></td>
                        </tr>    
                        <tr style="display:<?php echo $display_adjust;?>;">
                        <?php
                            $nm="";
                            if($category_name=="ES31"){
                                $nm="ES-31";
                            }else if($category_name=="EP36"){
                                $nm="EP-36";
                            }else if($category_name=="ES67"){
                                $nm="ES-67";
                            }else if($category_name=="ES73"){
                                $nm="ES-73";
                            }
                        ?>
                            <td class="make-adjustable3a"><a class="thickbox" href="http://www.sneezeguard.com/demo3.php?name=18&KeepThis=true&TB_iframe=true&height=480&width=640"><h1>Adjustable Brackets</h1></a></td>
                            <td>
								<?php
                                    if($disp){
                                ?>
                                    <select class="makeadjustablecheck31" name="adjustable" style="margin:4px ; float: right;width:70px;" align="right" onchange="makeAdjustable(this.form);getPriceOfProduct(this.form);">
                                <?php
                                    }else{
                                ?>
                                    <select class="makeadjustablecheck31" name="adjustable" style="margin:4px ; float: right;width:70px;" align="right" onchange="getPriceOfProduct(this.form);">
                                <?php
                                    }
                                ?>
                                
                                    <option value="no">No</option>
                                    <option value="yes">Yes</option>
                                </select>
                        </td>    
                    </tr>
                </table>
            </div>
        </td>
    </tr>
</table>
<?php  include("includes/modules/forms/price.php")?>

<script type="text/javascript">


    function myFunction(form){
        var check=ck=true;
        var x='<center><img src="img/addToCartWindow.jpg" width="460px"></center>';
        x+='<ul style="margin-left:30px;">';
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
    function myFunction2(form)
    {    
        if(myFunction(document.forms['cart_quantity'])){
            var bay=form.type.value;
            var var1=var2=var3=var4=var5=var6=var7=var8="";
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
            end=$("input#glass-face").val();
            $.ajax({
                type: "POST",
                url: "includes/script1.php",
                data: { 
                    mod:category_name, bay:bay, face1:var1, face2:var2,face3:var3,face4:var4,post:var5,left:var7,right:var6,end:end,tot:tot1,osc:osc,im_id:im_id,sv:"save",img:img_ajx
                },
                cache: false,
                contentType: "application/x-www-form-urlencoded",
                success: function(data, textStatus, request){
                    //tb_show("","pop1.php?KeepThis=true&TB_iframe=true&height=500&width=600","");
                    $("form[name='cart_quantity']").submit();
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
			$msg='<?php echo $ms_face;?>';
			$('.delete').click();
			
		}
	})
	$('[name="face_length_b"]').live('change',function(){
		if($(this).val()=='custom'){
			$msg='<?php echo $ms_face;?>';
			custom=$(this);post='';
			$('.delete').click();
		}
	})
	$('[name="face_length_c"]').live('change',function(){
		if($(this).val()=='custom'){
			custom=$(this);post='';
			$msg='<?php echo $ms_face;?>';
			$('.delete').click();
		}
	})	
	$('[name="face_length_d"]').live('change',function(){

		if($(this).val()=='custom'){

			custom=$(this);post='';
            $msg='<?php echo $ms_face;?>';
           $('.delete').click();
		   }
			})
	
	$('[name="face_length"]').live('change',function(){
		if($(this).val()=='custom'){
			$msg='<?php echo $ms_face;?>';
			custom=$(this);post='';
			$('.delete').click();
		}
	})
	
	
	
	
	$('[name="right_length"]').live('change', function(){
		if($(this).val()=='custom'){
			$msg='<?php echo $ms_right; ?>';
			custom=$(this);post='';
			$('.delete').click();
		}
	})
	$('[name="left_length"]').live('change', function(){
		if($(this).val()=='custom'){
			$msg='<?php echo $ms_left;?>';
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
                if('<?php echo $category_name; ?>'=='EP5'){ var a=8;var b=30;}
                if('<?php echo $category_name; ?>'=='EP11'||'<?php echo $category_name; ?>'=='EP12'){ var a=12;var b=24;}
                $msg='<span align="right" ><img src="jquery.confirm/<?php echo $category_name; ?>.jpg" style="float:right;"><span style="width:250px;display:block;text-align:justify;"><?php echo $ms_post;?>';
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
                            if(post=='yes'){
                                $('.usecustom').each(function(){
                                    checkfopost=0;
                                    my_facelengt_select="";
                                    my_facelengt_select+='<select name="'+$(this).attr("name")+'" onchange="getPriceOfProduct(this.form)" >';
                                    $('[name="'+$(this).attr("name")+'"] > option') .each(function() {
                                        if($(this).val()!='custom'){
                                            my_facelengt_select+='<option value="'+$(this).val()+'" style="display:none;">'+$(this).val()+'"</option>';
					}else{
                                            my_facelengt_select+='<option value="12" selected="selected" >Select</option>';
                                            my_facelengt_select+='<option value="custom">Custom</option>';
                                            my_facelengt_select+='<option value="No Glass">No Glass</option>';
                                            my_facelengt_select+='<option value="" style="display:none;">Custom</option>';
                                            return false;
					}
                                    });
				$('#'+$(this).attr("name")+'_span').html(my_facelengt_select);
                            })
			ispost=true;
                    c=1;
		}
            if((ispost)&&(c==0)){
                lastmin=4;
            }else{lastmin=2;}
            my_facelengt_select="";
            my_facelengt_select+='<select name="'+custom.attr("name")+'" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);" >';
            var myArray = new Array();
            var i=1;
            $('[name="'+custom.attr("name")+'"] > option') .each(function() {
                if($(this).val()!='custom'){
                    myArray[i]=$(this).val();
                    i++;
		}
            });
            /*for ep 11 category post height*/
            if(post=='yes'){
                if(('<?php echo $category_name; ?>'=='EP11')||('<?php echo $category_name; ?>'=='EP12')){
                    myArray=new Array("","12","18","22","");
                }else{
                    var j=0;
                    for (i=8;i<myArray[1];i++){
                        my_facelengt_select+='<option value="'+myArray[1]+'">'+i+'"</option>';
			my_facelengt_select+='<option value="'+myArray[1]+'">'+i+'-1/4'+'"</option>';
			my_facelengt_select+='<option value="'+myArray[1]+'">'+i+'-1/2'+'"</option>';
			my_facelengt_select+='<option value="'+myArray[1]+'">'+i+'-3/4'+'"</option>';
			j=i;
                    }
		}
            }else{
                var j=0;
		for (i=8;i<myArray[2];i++){
                    my_facelengt_select+='<option value="'+myArray[2]+'">'+i+'"</option>';
                    my_facelengt_select+='<option value="'+myArray[2]+'">'+i+'-1/4'+'"</option>';
                    my_facelengt_select+='<option value="'+myArray[2]+'">'+i+'-1/2'+'"</option>';
                    my_facelengt_select+='<option value="'+myArray[2]+'">'+i+'-3/4'+'"</option>';
                    j=i;
		}
            }
            for(i=1;i< myArray.length-lastmin;i++){
                for(j=myArray[i];j<myArray[i+1];j++){
                    if(j>myArray[i]){
						my_facelengt_select+='<option value="'+myArray[i+1]+'">'+j+'"</option>';
                    }else{
						my_facelengt_select+='<option value="'+myArray[i]+'">'+j+'"</option>';	
                    }
					my_facelengt_select+='<option value="'+myArray[i+1]+'">'+j+'-1/4'+'"</option>';
                    my_facelengt_select+='<option value="'+myArray[i+1]+'">'+j+'-1/2'+'"</option>';
                    my_facelengt_select+='<option value="'+myArray[i+1]+'">'+j+'-3/4'+'"</option>';
                }
            }
            if((post=='yes')&&('<?php echo $category_name; ?>'=='EP5')){
                var j=0;
                for (i=22;i<30;i++){
                    my_facelengt_select+='<option value="'+26+'">'+i+'"</option>';
                    my_facelengt_select+='<option value="'+26+'">'+i+'-1/4'+'"</option>';
                    my_facelengt_select+='<option value="'+26+'">'+i+'-1/2'+'"</option>';
                    my_facelengt_select+='<option value="'+26+'">'+i+'-3/4'+'"</option>';
                    j=i;
                }
                my_facelengt_select+='<option value="'+26+'">'+30+'"</option>';
                }else if((post=='yes')&&('<?php echo $category_name; ?>'=='EP11'||'<?php echo $category_name; ?>'=='EP12')){
                    var j=0;
                    for (i=22;i<24;i++){
                        my_facelengt_select+='<option value="'+22+'">'+i+'"</option>';
                        my_facelengt_select+='<option value="'+22+'">'+i+'-1/4'+'"</option>';
                        my_facelengt_select+='<option value="'+22+'">'+i+'-1/2'+'"</option>';
                        my_facelengt_select+='<option value="'+22+'">'+i+'-3/4'+'"</option>';
                        j=i;
                    }
                    my_facelengt_select+='<option value="'+22+'">'+24+'"</option>';
                }else{
                    my_facelengt_select+='<option value="'+myArray[i]+'">'+myArray[i]+'"</option>';
                    if(myArray[i]==42){
						for(i=42;i<=48;i++){
                            if(i!=42){
                                my_facelengt_select+='<option value="48" style="color:red">'+i+'"</option>';
                            }
							if(i!=48){
								my_facelengt_select+='<option value="48" style="color:red">'+i+'-1/4'+'"</option>';
								my_facelengt_select+='<option value="48" style="color:red">'+i+'-1/2'+'"</option>';
								my_facelengt_select+='<option value="48" style="color:red">'+i+'-3/4'+'"</option>';
							}
                        }
                        for(i=48;i<=54;i++){
							if(i!=48){
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
                if(('<?php echo $category_name; ?>'=='EP11'||'<?php echo $category_name; ?>'=='EP12')){
                    getPriceOfProduct(document.forms['cart_quantity']);
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
                $('#is_custom').val('Yes');
                if(checkall){
                    $('#ckall').val(true);
                    getPriceOfProduct(document.forms['cart_quantity']);
                }else{
                    $('#ckall').val(false);
                    // $('.total').text('Select');
                    getPriceOfProduct(document.forms['cart_quantity']);
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
/*
function myFunction()
{
var x;
var r=confirm("Press a button!");
if (r==true)
  {
  x="You pressed OK!";
  window.location = 'shopping_cart.php?osCsid=5rhn53ijn3q4lcsbhc76mrpda5';
 
  }
else
  {
  x="You pressed Cancel!";
  window.location = 'product_info.php?id=72&type=1BAY&osCsid=5rhn53ijn3q4lcsbhc76mrpda5';
  }
document.getElementById("demo").innerHTML=x;

}
*/
</script>

<!-- ani code -->

<br />
<table id="cart-form" cellpadding="0" cellspacing="0" style="border: 1px solid white;border-radius: 5px;"><!--The form which sends the values!!-->
    <tr>
        <!--td><h1>Add to Cart</h1></td-->
        
        <!-- ani code -->
            <input type="hidden" id="c_glass_post_val" name="c_glass_post_val" value=""  />
        
            <input type="hidden" id="c_glass_face" name="c_glass_face" value=""  />
            <input type="hidden" id="c_glass_face_val" name="c_glass_face_val" value=""  />
        
            <input type="text" id="c_glass_right" name="c_glass_right" value=""  />
            <input type="text" id="c_glass_right_val" name="c_glass_right_val" value=""  />
        
            <input type="text" id="c_glass_left" name="c_glass_left" value=""  />
            <input type="text" id="c_glass_left_val" name="c_glass_left_val" value=""  />

            <input type="hidden" id="c_glass_a_light" name="c_glass_a_light" value=""  />
            <input type="hidden" id="c_glass_a_val_light" name="c_glass_a_val_light" value=""  />
            <input type="hidden" id="c_glass_b_light" name="c_glass_b_light" value=""  />
            <input type="hidden" id="c_glass_b_val_light" name="c_glass_b_val_light" value=""  />
            <input type="hidden" id="c_glass_c_light" name="c_glass_c_light" value=""  />
            <input type="hidden" id="c_glass_c_val_light" name="c_glass_c_val_light" value=""  />
            <input type="hidden" id="c_glass_d_light" name="c_glass_d_light" value=""  />
            <input type="hidden" id="c_glass_d_val_light" name="c_glass_d_val_light" value=""  />
            <input type="hidden" id="c_glass_a" name="c_glass_a" value=""  /><!--Price of glass a-->
            <input type="hidden" id="c_glass_a_val" name="c_glass_a_val" value=""  /><!--size of glass a-->
			<input type="hidden" id="c_glass_a_mult" name="c_glass_a_mult" value="1"  />
            <input type="hidden" id="c_glass_b" name="c_glass_b" value=""  /><!--Price of glass b-->
            <input type="hidden" id="c_glass_b_val" name="c_glass_b_val" value=""  /><!--size of glass b-->
			<input type="hidden" id="c_glass_b_mult" name="c_glass_b_mult" value="1"  />
            <input type="hidden" id="c_glass_c" name="c_glass_c" value=""  /><!--Price of glass c-->
            <input type="hidden" id="c_glass_c_val" name="c_glass_c_val" value=""  /><!--size of glass c-->
			<input type="hidden" id="c_glass_c_mult" name="c_glass_c_mult" value="1"  />
            <input type="hidden" id="c_glass_d" name="c_glass_d" value=""  /><!--Price of glass d-->
            <input type="hidden" id="c_glass_d_val" name="c_glass_d_val" value=""  /><!--size of glass d-->
			<input type="hidden" id="c_glass_d_mult" name="c_glass_d_mult" value="1"  />
            <input type="hidden" id="is_custom" name="is_custom" value=""  /><!--If Custom is selected-->
            <input type="hidden" id="product_type" name="product_type" value=""  /><!--Product Name-->
            <input type="hidden" id="msg" name="msg" value=""  />
            <input type="hidden" id="ckall" name="ckall" value="" />
            <!-- ani code -->
            <td colspan="2" align="center"><input type="hidden" name="type" value="<?=$_REQUEST['type']?>" />
            <input type="hidden" name="glass_face" value="0" id="glass-face" disabled="disabled"/><div id="products_ids"><?php echo "</div>";?>
            <input type="image" onclick="return myFunction2(this.form);" button="" id="add" title=" Add to Cart " alt="Add to Cart" src="includes/languages/english/images/buttons/button_in_cart.gif" style="float: none;background: none !important;box-shadow: none;border: medium none;">
            <input type="hidden" name="optionsid" id="optionsid" value="" disabled="disabled"/>
        </td>
    </tr>
</table>

<div class="item" style="position:absolute;visibility:hidden;">
	       
           <div class="delete" style="visibility:hidden"></div>
        </div>
		<div class="item" style="position:absolute;visibility:hidden;">
	       
           <div class="delete1" style="visibility:hidden">    </div>
		   <div class="delete2" style="visibility:hidden">    </div>
		   <div class="delete3" style="visibility:hidden">    </div>
        </div>

<script type="text/javascript">
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


<!-- ani code -->

<div id="cl"></div>