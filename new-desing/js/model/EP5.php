<?php 

  
    require_once('Mobile_Detect.php');
    $detect = new Mobile_Detect();
	
	 // ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
	
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
//
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
            $product="select count(*) as total from ".TABLE_PRODUCTS." as p, ".TABLE_PRODUCTS_DESCRIPTION." as pd, ".TABLE_PRODUCTS_TO_CATEGORIES." as pc where p.products_id=pd.products_id and pd.products_id=pc.products_id and pc.categories_id=".$HTTP_GET_VARS['id']." and pd.language_id=".(int)$languages_id;
            $product=tep_db_query($product);
            $products=tep_db_fetch_array($product);  
        }
    ?>
    arr_len=<?=$products['total']?>;//defining array length!
    <? if($category_name!='EP5'){ ?>
    arr_len=parseInt(arr_len)+7;
    <? } ?>
var product_name_price=new Array(arr_len);//array defined to show the price in bay!
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
           <?} 
            while($products=tep_db_fetch_array($product)){ ?>
                    product_name_price['<?=$products['name']?>']=new Array("<?=$products['id']?>", "<?=$products['price']?>");
            <?}
        }
    ?>
		
</script>

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
var width_two=<?php echo $wid?>;
width_three=30;
right_next=-44;
width_review=21;
redlinebrowser=23;
redlinebrowser1=23;
redln=85;
          /*red line width for price */
} else if(isChrome==true){
var width_one=19;//width of line one!!
var width_two=<?php echo $wid1?>;//width for below line!!
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
var width_two=<?php echo $wid1?>;
width_three=28;
width_review=19;
redln=85;
}

	/* ende red line height and width variable */


	//yet having no use as i've seem as i've got any use of this funtion i'll change this comment!!
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
     
       
      function setHideShow(selector, msg){//function definitions of above things!!
            setShowEvent(selector, msg)
            //setHideEvent(selector);
        }
		 function setHideShow1(selector, msg){//function definition to hide the show!!
            setShowEventmsg(selector, msg)
			//$(".msgtishu1").remove();
		
            //setHideEvent(selector);
        }
		 function setHideShow2(selector, msg){
            setShowEventmsg2(selector, msg)
            //setHideEvent(selector);
        }
        function setShowEvent(selector, msg){//function defines the background border and message of the selected element!!
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
		function setShowEventverticle(selector, msg){//this function showing the option elements border!!
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
		function setShowEventhori(selector, msg){//this funtion defines all below verticle line in div(#message_wp1) division
           // $("#additional_image").css("opacity","0.5");
           // $(".test-hide").css("opacity","0.5");
            var cssObj={
                    "background-color":"#111",
                    "border-style":"solid",
                    "border-width":"2px",
                    "border-color":"#ff0000"};
            $(selector).css(cssObj);
            $("#message_wp1").html(msg);
//            alert(msg);
        }
		function setShowEventhori1(selector, msg){//this funtion used for the horizontal line of above
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
		 function setShowEventmsg(selector, msg){//I believe it is having no use!!
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
		 function setShowEventmsg2(selector, msg){//it too not having any use!!
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
        var action_event = function(selector){//this event is used to rub all the formatting!!
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

<script src="jquery.confirm/jquery.confirm.js"></script><!-- calling the popup confirmation box!! -->








<!--here the designing i.e. css started!!-->
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
        //border: 2px solid #ff0000;
        //background: url('images/login-bg.png');
        padding:5px;
        border-radius:4px;
        font-weight: bold;
        
        width: 585px;
        height:67px                
    }
    table#cart-form tr td .next_button{
        background-color:green !important;
        box-shadow: none;
        font-weight: bold;
    }
	
	
	
	.item{
	/*background: url("img/shadow_wide.png") no-repeat center bottom;*/
	padding-bottom: 6px;
	display: inline-block;
	margin-bottom: 30px;
	position:relative;
}

.item .delete{
	/*background:url('img/delete_icon.png') no-repeat;*/
	width:37px;
	height:38px;
	position:absolute;
	cursor:pointer;
	top:10px;
	right:-80px
}
.heading_all{
    color:white; 
    margin-bottom:0px;
    margin-top:5px;
    font-size:16px;
    text-shadow: 1px 1px black,1px 1px black,1px 1px black,1px 1px black;
}
.item a{
	background-color: #FAFAFA;
	border: none;
	display: block;
	padding: 10px;
	text-decoration: none;
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
		zero=true;
        $("tr#right_lenght").css('display','none');
        $("tr#left_lenght").css('display','none');
        $("input#glass-face").val(4);
		getPriceOfProduct(document.forms['cart_quantity']);
        $("#end_options").change(function(){
            if($("#end_options").val()!="select"){
                //$("select").removeAttr("disabled");
                if($(this).val()=="Both Closed End Panels"){
                    $("input#glass-face").val(1);//calling the image of both closed end panels
                    $("#left_length").removeAttr("disabled");
                    $("tr#right_lenght").css('display','');
                    $("tr#left_lenght").css('display','');
                    $("#right_length").removeAttr("disabled");
                }else if($(this).val()=="Right Closed End Panel"){
                    $("input#glass-face").val(2);//calling the image according to the above click
                    $("#left_length").attr("disabled","disabled");
                    $("#right_length").removeAttr("disabled");
                    $("tr#right_lenght").css('display','');
                    $("tr#left_lenght").css('display','none');
                }else if($(this).val()=="Left Closed End Panel"){
                    $("#left_length").removeAttr("disabled");
                    $("#right_length").attr("disabled","disabled");
                    $("tr#right_lenght").css('display','none');
                    $("tr#left_lenght").css('display','');
                    $("input#glass-face").val(3);//showing the image of left closed panel
                }else if($(this).val()=="No Closed End Panels"){
                    $("#left_length").attr('disabled', 'disabled');
                    $("#right_length").attr('disabled', 'disabled');
                    $("tr#right_lenght").css('display','none');
                    $("tr#left_lenght").css('display','none');
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
				$("tr#left_lenght").css('display','none');
                $("tr#right_lenght").css('display','none');
                $("#left_length").removeAttr("disabled");
                $("#right_length").removeAttr("disabled");
                zero=false;
				$("input#glass-face").val(4);
                getPriceOfProduct(document.forms['cart_quantity']);
            }
        });
        
    });





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




//Frosted Glass Popup
	    function show_pop(form){
        if(form.roasted_glass.value=="yes") {
            $(document).ready(function(){
                    var elem = $(this).closest('.item');
                    $.confirm({
                        'title'     : 'Confirmation',
            'message'   : '<?php echo $ms_option?>',
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
										$('#is_frosted').val('');
                                    }   // Nothing to do in this case. You can as well omit the action property.
                    
                }
            }
                    });
        
    
        
                });
            }else{
				$('#is_frosted').val('');
            }       
    }
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
            'message'   : '<?php echo $ms_adjustable?>',
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
			<?
			  if (!$detect->isMobile())
				{
			  ?>
			  'message'	: '<span align="right" ><img src="jquery.confirm/<?php echo $category_name; ?>.jpg" style="float:right;"><span style="width:250px;display:block;text-align:justify;"><?php echo $ms_post?></span></span>',
			  <?
				}
				else{
			  ?>
			  
			  'message'	: '<span align="right" ><img src="jquery.confirm/<?php echo $category_name; ?>.jpg" style="float:right;"><span style="width:429px;display:block;text-align:justify;"><?php echo $ms_post?></span></span>',
			  <?
				}
				?>
			
			
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
            case 'EP5':{
                foldername="EP-5";//getting the resource images from the perticular folder
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
	
	
        category_name="<?=$category_name?>";
        foldername=getProductFolderName("<?=$category_name?>")+form.type.value;
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
        } image_string='<img src="images/'+foldername+'/'+imageName+'" style="width:568px;height:453px">';
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
		<!-- ani code -->
		<!-- for custom ep 15 height -->//now get the solution for EP15
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
					 
	
					<? if($_REQUEST['type']=='4BAY'){
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
					 
					<? }
						?>
					 
					 
					 
					 <? if($_REQUEST['type']=='3BAY'){
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
                anglePost=category_name+'-'+height+" 90 Degree "+(choose_finish_obj.value=="Brushed Aluminum"?"Brushed Aluminum":"Post "+choose_finish_obj.value);
            }
            if(left_lenght_obj.value!="select"){
                if(left_lenght_obj.value!="No Glass"){
                    if(height!="select"){
						
						if(arc_glass_yn=='yes' && arc_glass_valss!="select" && endpanel_arc=='yes')
						{
						 glassName_l=category_name+'-'+height+' '+left_lenght_obj.value+'" Glass '+arc_glass_type_valss+' '+arc_glass_valss+'" Arc ';	
						}
						else{
						 glassName_l=category_name+'-'+height+' '+left_lenght_obj.value+'" Glass ';	
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
						
						
						if(arc_glass_yn=='yes' && arc_glass_valss!="select" && endpanel_arc=='yes')
						{
						glassName_r=category_name+'-'+height+' '+right_lenght_obj.value+'" Glass '+arc_glass_type_valss+' '+arc_glass_valss+'" Arc ';	
						}
						else{
						glassName_r=category_name+'-'+height+' '+right_lenght_obj.value+'" Glass ';	
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
                roastedglass=category_name+"-ROSTEDGL";
                //alert(roastedglass)
            }
            if(flange_covers_obj.value=="yes"){
                flangeCovers=category_name+"-FLANGE COVER "+type_obj.value.slice(0,1)+" BAY BOTH ENDS";
            }
            imageName="BOTHENDS";
		}//right closed end
		else if(glass_face_obj.value==2 ){
            if(height!="select"){
                anglePost=category_name+'-'+height+" 90 Degree "+(choose_finish_obj.value=="Brushed Aluminum"?"Brushed Aluminum":"Post "+choose_finish_obj.value);
            }
			//left_lenght_obj.value="select";
			if(right_lenght_obj.value!="select"){	
                if(right_lenght_obj.value!="No Glass"){	
                    if(height!="select"){
						
						if(arc_glass_yn=='yes' && arc_glass_valss!="select" && endpanel_arc=='yes')
						{
						glassName_r=category_name+'-'+height+' '+right_lenght_obj.value+'" Glass '+arc_glass_type_valss+' '+arc_glass_valss+'" Arc ';	
						}
						else{
						glassName_r=category_name+'-'+height+' '+right_lenght_obj.value+'" Glass ';	
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
				   
				   roastedglass=category_name+"-ROSTEDGL";
				   //alert(roastedglass)
				   }
				if(flange_covers_obj.value=="yes")
                    flangeCovers=category_name+"-FLANGE COVER "+type_obj.value.slice(0,1)+" BAY RIGHT END";
				
            }
                imageName="RIGHTEND";
            
		}//left closed panel
		else if(glass_face_obj.value==3){
            if(height!="select"){
                anglePost=category_name+'-'+height+" 90 Degree "+(choose_finish_obj.value=="Brushed Aluminum"?"Brushed Aluminum":"Post "+choose_finish_obj.value);
            }
			//right_lenght_obj.value="select";
			if(left_lenght_obj.value!="select"){
                if(left_lenght_obj.value!="No Glass"){
                    if(height!="select"){
						
						
						if(arc_glass_yn=='yes' && arc_glass_valss!="select" && endpanel_arc=='yes')
						{
						glassName_l=category_name+'-'+height+' '+left_lenght_obj.value+'" Glass '+arc_glass_type_valss+' '+arc_glass_valss+'" Arc '; 	
						}
						else{
						glassName_l=category_name+'-'+height+' '+left_lenght_obj.value+'" Glass '; 	
						}
                        

						
                        anglePost=category_name+'-'+height+" 90 Degree "+(choose_finish_obj.value=="Brushed Aluminum"?"Brushed Aluminum":"Post "+choose_finish_obj.value);
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
				   roastedglass=category_name+"-ROSTEDGL";
				   //alert(roastedglass)
                }
                if(flange_covers_obj.value=="yes"){
                    flangeCovers=category_name+"-FLANGE COVER "+type_obj.value.slice(0,1)+" BAY LEFT END";
                }
    				
			}	
			else{
				//leftEndPanel=category_name+" Left End"+(category_name=="EP11"?" Panel":"");				
			}
            imageName="LEFTEND";
		}
		//no closed panel
		
		else if(glass_face_obj.value==4){
			//right_lenght_obj.value="select";
			//left_lenght_obj.value="select";
			if(height!="select"){
				if(flange_covers_obj.value=="yes"){
					flangeCovers=category_name+"-FLANGE COVER "+type_obj.value.slice(0,1)+" BAY NO END";
				}
				if(roasted_glass_obj.value=="yes"){
				   
				   roastedglass=category_name+"-ROSTEDGL";
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
       // alert(glassName_l);
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
                        wt=<?php echo $val?>;
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
                        wt=<?php echo $val?>;
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
                        wt=<?php echo $val?>;
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
                        wt=<?php echo $val?>;
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
                        wt=<?php echo $val?>;
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
                        wt=<?php echo $val?>;
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
                        wt=<?php echo $val?>;
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
                        wt=<?php echo $val?>;
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
                        wt=<?php echo $val?>;
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
                        wt=<?php echo $val?>;
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
                        wt=<?php echo $val?>;
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
                        wt=<?php echo $val?>;
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
                        wt=<?php echo $val?>;
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
                        wt=<?php echo $val?>;
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
                        wt=<?php echo $val?>;
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
                        wt=<?php echo $val?>;
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
    			if(category_name=="EP5"||category_name=="EP15"){
                    if(height!="select"){
						
						if(arc_glass_yn=='yes' && arc_glass_valss!="select")
						{
						glassName=category_name+'-'+height+' '+face_lenght_obj.value+'" Glass '+arc_glass_type_valss+' '+arc_glass_valss+'" Arc '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
						else{
						glassName=category_name+'-'+height+' '+face_lenght_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
                        
				
					//alert(mailbox_cutout_yn);
					//alert(cutout_face_a_obj);
					if(mailbox_cutout_yn=='yes' && cutout_face_a_obj.value!="no")
					{
					mailboxCutoutName_a="EP5-MAILBOX CUTOUT";	
					
							
					}
					
				
				
						
                    }
                    if(flange_covers2_obj.value=="yes"){
                        light_a=category_name+"-"+face_lenght_obj.value+"LYT";
                    }
                }else{
					
					//
    				
					
					if(arc_glass_yn=='yes' && arc_glass_valss!="select")
						{
						glassName=category_name+' '+face_lenght_obj.value+'" Glass '+arc_glass_type_valss+' '+arc_glass_valss+'" Arc '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
						else{
						glassName=category_name+' '+face_lenght_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
					
				    if(flange_covers2_obj.value=="yes"){
                        light_a=category_name+"-"+face_lenght_obj.value+"LYT";
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
			    if(category_name=="EP5"||category_name=="EP15"){
                    if(height!="select"){
						
						if(arc_glass_yn=='yes' && arc_glass_valss!="select")
						{
						glassName_a=category_name+'-'+height+' '+face_lenght_a_obj.value+'" Glass '+arc_glass_type_valss+' '+arc_glass_valss+'" Arc '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
						else{
						glassName_a=category_name+'-'+height+' '+face_lenght_a_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
                        
						
						if(mailbox_cutout_yn=='yes' && cutout_face_a_obj.value!="no")
						{
						mailboxCutoutName_a="EP5-MAILBOX CUTOUT";	
						
								
						 
						}
						
                    }
                    if(flange_covers2_obj.value=="yes"){
                        light_a=category_name+"-"+face_lenght_a_obj.value+"LYT";
                    }
			    }else{
					
					if(arc_glass_yn=='yes' && arc_glass_valss!="select")
						{
						 glassName_a=category_name+' '+face_lenght_a_obj.value+'" Glass '+arc_glass_type_valss+' '+arc_glass_valss+'" Arc '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
						else{
						 glassName_a=category_name+' '+face_lenght_a_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
					
                   
					
					
                    if(flange_covers2_obj.value=="yes"){
                        light_a=category_name+"-"+face_lenght_a_obj.value+"LYT";
                    }
			    }
            }
            else{
               flag=0;
            }			
		}
		if(face_lenght_b_obj!=null && face_lenght_b_obj.value!="select"){
		    if(face_lenght_b_obj.value!="No Glass"){
			    if(category_name=="EP5"||category_name=="EP15"){
                    if(height!="select"){
						
						if(arc_glass_yn=='yes' && arc_glass_valss!="select")
						{
						glassName_b=category_name+'-'+height+' '+face_lenght_b_obj.value+'" Glass '+arc_glass_type_valss+' '+arc_glass_valss+'" Arc '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
						else{
						glassName_b=category_name+'-'+height+' '+face_lenght_b_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
				        
						if(mailbox_cutout_yn=='yes' && cutout_face_b_obj.value!="no")
						{
						mailboxCutoutName_b="EP5-MAILBOX CUTOUT";	
						
						}
						
                    }
				    if(flange_covers2_obj.value=="yes"){
	                   light_b=category_name+"-"+face_lenght_b_obj.value+"LYT";
				    }
			    }else{
					if(arc_glass_yn=='yes' && arc_glass_valss!="select")
						{
						 glassName_b=category_name+' '+face_lenght_b_obj.value+'" Glass '+arc_glass_type_valss+' '+arc_glass_valss+'" Arc '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
						else{
						 glassName_b=category_name+' '+face_lenght_b_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
					
				   
					
					
					
				    if(flange_covers2_obj.value=="yes"){
	                    light_b=category_name+"-"+face_lenght_b_obj.value+"LYT";
                    }
	            }
				
            }
            else{
                flag=0;
            }
		}
		if(face_lenght_c_obj!=null && face_lenght_c_obj.value!="select"){
		    if(face_lenght_c_obj.value!="No Glass"){
			    if(category_name=="EP5"||category_name=="EP15"){
                    if(height!="select"){
						
						if(arc_glass_yn=='yes' && arc_glass_valss!="select")
						{
						glassName_c=category_name+'-'+height+' '+face_lenght_c_obj.value+'" Glass '+arc_glass_type_valss+' '+arc_glass_valss+'" Arc '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
						else{
						glassName_c=category_name+'-'+height+' '+face_lenght_c_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
				        
						if(mailbox_cutout_yn=='yes' && cutout_face_c_obj.value!="no")
						{
						mailboxCutoutName_c="EP5-MAILBOX CUTOUT";	
						
						
						}
						
                    }
				    if(flange_covers2_obj.value=="yes"){
	                   light_c=category_name+"-"+face_lenght_c_obj.value+"LYT";
				    }  
			    }else{
					
					if(arc_glass_yn=='yes' && arc_glass_valss!="select")
						{
						glassName_c=category_name+' '+face_lenght_c_obj.value+'" Glass '+arc_glass_type_valss+' '+arc_glass_valss+'" Arc '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
						else{
						glassName_c=category_name+' '+face_lenght_c_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
				    
					
					
				    if(flange_covers2_obj.value=="yes"){
	                    light_c=category_name+"-"+face_lenght_c_obj.value+"LYT";
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
                if(category_name=="EP5"||category_name=="EP15"){
                    if(height!="select"){
						
						if(arc_glass_yn=='yes' && arc_glass_valss!="select")
						{
						glassName_d=category_name+'-'+height+' '+face_lenght_d_obj.value+'" Glass '+arc_glass_type_valss+' '+arc_glass_valss+'" Arc '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
						else{
						glassName_d=category_name+'-'+height+' '+face_lenght_d_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");	
						}
                        
						if(mailbox_cutout_yn=='yes' && cutout_face_d_obj.value!="no")
						{
						mailboxCutoutName_d="EP5-MAILBOX CUTOUT";	
						
						}
						
                    }
					if(flange_covers2_obj.value=="yes"){
	                    light_d=category_name+"-"+face_lenght_d_obj.value+"LYT";
				    } 
                }else{
					
					if(arc_glass_yn=='yes' && arc_glass_valss!="select")
						{
						glassName_d=category_name+' '+face_lenght_d_obj.value+'" Glass '+arc_glass_type_valss+' '+arc_glass_valss+'" Arc '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");		
						}
						else{
						glassName_d=category_name+' '+face_lenght_d_obj.value+'" Glass '+(corner_obj.value=="round"?"(Radiused Corners)":"(Squared Corners)");		
						}
    				
					
					
					if(flange_covers2_obj.value=="yes"){
	                light_d=category_name+"-"+face_lenght_d_obj.value+"LYT";
                }
			}
            
        }else{
            flag=0;
        }
	}
	if(post_height_obj!=null){
    	if(category_name=="EP5"){
            if(height!="select"){
			    leftEndPost=category_name+"-"+height+" End Post "+choose_finish_obj.value;
			    rightEndPost=category_name+"-"+height+" End Post "+choose_finish_obj.value;
            }
		}
	}
	if(type_obj!=null){
		if(type_obj.value=="4BAY"){
			if(category_name=="EP5"||category_name=="EP15"){
                    if(height!="select"){
					   centerPost=category_name+"-"+height+" Center "+(choose_finish_obj.value=="Brushed Aluminum"?"Brushed Aluminum":"Post "+choose_finish_obj.value);
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
				if(category_name=="EP5"||category_name=="EP15"){
                    if(height!="select"){
					   centerPost=category_name+"-"+height+" Center "+(choose_finish_obj.value=="Brushed Aluminum"?"Brushed Aluminum":"Post "+choose_finish_obj.value);
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
/*
 $('select[name="arc_glass"]').change(function() {
    if('yes' == $(this).val() ) {
         $('#checkbox2').attr("disabled", true); // make sure all divs are hidden
        $("#checkbox2").attr("checked", false);
    } else{
	$('#checkbox2').attr("disabled", false);
} 
});
 */

 
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
          if(category_name=="EP22"){
                centerPost=centerPost.replace(category_name, "EP11");
				
            }if(category_name=="EP12"){
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
            if(category_name=="EP5"){
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
            if(category_name=="EP5"){
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
                        flangeUnderCounter="EP5-UNDER COUNTER FLANGE 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        flangeUnderCounterPrice=4*parseFloat(product_name_price[flangeUnderCounter][1]);
                        //var teeshu=getBeforeChar(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
                        //alert(teeshu)
                   
                    }else if(glass_face_obj.value==2){
                        //flangeUnderCounter="EP5-FLANGE COVER 3 PIECES";
                        flangeUnderCounter="EP5-UNDER COUNTER FLANGE 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        flangeUnderCounterPrice=3*parseFloat(product_name_price[flangeUnderCounter][1]);
                    }else if(glass_face_obj.value==3){
                        //flangeUnderCounter="EP5-FLANGE COVER 3 PIECES";
                        flangeUnderCounter="EP5-UNDER COUNTER FLANGE 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        flangeUnderCounterPrice=3*parseFloat(product_name_price[flangeUnderCounter][1]);
                    }else if(glass_face_obj.value==4){
                        //flangeUnderCounter="EP5-FLANGE COVER 2 PIECES";
                        flangeUnderCounter="EP5-UNDER COUNTER FLANGE 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        flangeUnderCounterPrice=2*parseFloat(product_name_price[flangeUnderCounter][1]);
                    }
                }else if(type_obj.value=="2BAY"){
                    if(glass_face_obj.value==1){
                        //flangeUnderCounter="EP5-FLANGE COVER 5 PIECES";
                       flangeUnderCounter="EP5-UNDER COUNTER FLANGE 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        flangeUnderCounterPrice=5*parseFloat(product_name_price[flangeUnderCounter][1]);
                    }else if(glass_face_obj.value==2){
                        //flangeUnderCounter="EP5-FLANGE COVER 4 PIECES";
                        flangeUnderCounter="EP5-UNDER COUNTER FLANGE 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        flangeUnderCounterPrice=4*parseFloat(product_name_price[flangeUnderCounter][1]);
                    }else if(glass_face_obj.value==3){
                        // flangeUnderCounter="EP5-FLANGE COVER 4 PIECES";
                       flangeUnderCounter="EP5-UNDER COUNTER FLANGE 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        flangeUnderCounterPrice=4*parseFloat(product_name_price[flangeUnderCounter][1]);
                    }else if(glass_face_obj.value==4){
                        //flangeUnderCounter="EP5-FLANGE COVER 3 PIECES";
                        flangeUnderCounter="EP5-UNDER COUNTER FLANGE 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        flangeUnderCounterPrice=3*parseFloat(product_name_price[flangeUnderCounter][1]);
                    }                
                }else if(type_obj.value=="3BAY"){
                    if(glass_face_obj.value==1){
                        //flangeUnderCounter="EP5-FLANGE COVER 6 PIECES";
                        flangeUnderCounter="EP5-UNDER COUNTER FLANGE 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        flangeUnderCounterPrice=6*parseFloat(product_name_price[flangeUnderCounter][1]);
                    }else if(glass_face_obj.value==2){
                        //flangeUnderCounter="EP5-FLANGE COVER 5 PIECES";
                        flangeUnderCounter="EP5-UNDER COUNTER FLANGE 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        flangeUnderCounterPrice=5*parseFloat(product_name_price[flangeUnderCounter][1]);
                    }else if(glass_face_obj.value==3){
                        //flangeUnderCounter="EP5-FLANGE COVER 5 PIECES";
                        flangeUnderCounter="EP5-UNDER COUNTER FLANGE 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        flangeUnderCounterPrice=5*parseFloat(product_name_price[flangeUnderCounter][1]);
                    }else if(glass_face_obj.value==4){
                        //flangeUnderCounter="EP5-FLANGE COVER 4 PIECES";
                       flangeUnderCounter="EP5-UNDER COUNTER FLANGE 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        flangeUnderCounterPrice=4*parseFloat(product_name_price[flangeUnderCounter][1]);
                    }                
                }else if(type_obj.value=="4BAY"){
                    if(glass_face_obj.value==1){
                        //flangeUnderCounter="EP5-FLANGE COVER 6 PIECES";
                        flangeUnderCounter="EP5-UNDER COUNTER FLANGE 1 PIECE";
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
                        flangeUnderCounter="EP5-UNDER COUNTER FLANGE 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        flangeUnderCounterPrice=6*parseFloat(product_name_price[flangeUnderCounter][1]);
                    }else if(glass_face_obj.value==3){
                        //flangeUnderCounter="EP5-FLANGE COVER 5 PIECES";
                        flangeUnderCounter="EP5-UNDER COUNTER FLANGE 1 PIECE";
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
                        flangeUnderCounterPrice=6*parseFloat(product_name_price[flangeUnderCounter][1]);
                    }else if(glass_face_obj.value==4){
                        //flangeUnderCounter="EP5-FLANGE COVER 4 PIECES";
                        flangeUnderCounter="EP5-UNDER COUNTER FLANGE 1 PIECE";
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
		imageName="WOTEND"+imageName;	
		}
		else {
			//for without endpanel Arch
		if(glass_face_obj.value==4)
		{
		imageName="WOTEND"+imageName;	
		}
		else{
		imageName="WTEND"+imageName;	
		}
			
		
		
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
		
     	<?php 
		if (!$detect->isMobile())
		{
		?>
		
        image_string='<img src="images/'+foldername+'/'+imageName+'.jpg" style="width:568px;height:453px">'; 
		<?php 
		}
		else{
		?>
	    image_string='<img src="images/'+foldername+'/'+imageName+'.jpg" style="width:828px;height:583px">'; 

		<?php
		}
		?>
		
        if(category_name=="EP5"){
            image_string+='<div class="left">Left</div><div class="right">Right</div>';
        }
        if(category_name=="EP5" || category_name=="EP15" || (category_name=="EP12")|| (category_name=="EP11") ){
            
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
		
		
		arc_glass_yn=arc_glass_obj.value;
		arc_glass_valss=arc_glass_value_obj.value;
	
		//arc_glass_type_value
		//endpanel_arc_glass_value
		
		
		
		
		
		<?php 
		if (!$detect->isMobile())
		{
		?>
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
		$('.left').css("top","31px");
        $('.left').css("left","120px");
		
		
		$('.right').css("top","17px");
        $('.right').css("left","349px");
			
		}		
			
		$('.arc_height1').css("top","88px");
        $('.arc_height1').css("left","352px");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","10px");
        $('.left').css("left","120px");
		
		
		$('.right').css("top","5px");
        $('.right').css("left","346px");
			
		}	
			
		
		$('.arc_height1').css("top","57px");
        $('.arc_height1').css("left","348px");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","35px");
        $('.left').css("left","126px");
		
		$('.right').css("top","26px");
        $('.right').css("left","345px");
			
		}		
		
		$('.arc_height1').css("top","77px");
        $('.arc_height1').css("left","348px");	
		

			
		}
		
			
		}
		
		//for Eye or Curv  Arch		
		if(arc_glass_type_value=='CA')
		{
			
		
		if(arc_glass_valss=='2')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","43px");
        $('.left').css("left","125px");
		
		
		$('.right').css("top","29px");
        $('.right').css("left","348px");
			
		}		
			
		$('.arc_height1').css("top","95px");
        $('.arc_height1').css("left","351px");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","43px");
        $('.left').css("left","118px");
		
		
		$('.right').css("top","16px");
        $('.right').css("left","351px");
			
		}	
			
		
		$('.arc_height1').css("top","73px");
        $('.arc_height1').css("left","348px");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","43px");
        $('.left').css("left","123px");
		
		$('.right').css("top","26px");
        $('.right').css("left","346px");
			
		}		
		
		$('.arc_height1').css("top","80px");
        $('.arc_height1').css("left","348px");	
		

			
		}
		
		
		
			
		}
		
		//for Random  Arch		
		if(arc_glass_type_value=='RD')
		{
			
		
		if(arc_glass_valss=='2')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","42px");
        $('.left').css("left","123px");
		
		
		$('.right').css("top","32px");
        $('.right').css("left","346px");
			
		}		
			
		$('.arc_height1').css("top","88px");
        $('.arc_height1').css("left","335px");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","18px");
        $('.left').css("left","127px");
		
		
		$('.right').css("top","16px");
        $('.right').css("left","344px");
			
		}	
			
		
		$('.arc_height1').css("top","73px");
        $('.arc_height1').css("left","335px");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","14px");
        $('.left').css("left","116px");
		
		$('.right').css("top","8px");
        $('.right').css("left","339px");
			
		}		
		
		$('.arc_height1').css("top","68px");
        $('.arc_height1').css("left","332px");	
		

			
		}
		
		}
		

		
		
		$('.post').css("top","182px");
        $('.post').css("left","461px");	
			
		$('.glass').css("top","341px");
        $('.glass').css("left","368px");
			
		$('.total').css("top","370px");
        $('.total').css("left","410px");
		
		
		
		
			
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
		$('.left').css("top","90px");
        $('.left').css("left","77px");
		
		$('.right').css("top","40px");
        $('.right').css("left","427px");
			
		}		
			
		$('.arc_height1').css("top","124px");
        $('.arc_height1').css("left","267px");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","55px");
        $('.left').css("left","77px");
		
		$('.right').css("top","15px");
        $('.right').css("left","425px");
			
		}	
			
		
		$('.arc_height1').css("top","96px");
        $('.arc_height1').css("left","265px");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","81px");
        $('.left').css("left","74px");
		
		$('.right').css("top","32px");
        $('.right').css("left","428px");
			
		}		
		
		$('.arc_height1').css("top","109px");
        $('.arc_height1').css("left","264px");	
		

			
		}
		
		}
		
		//for Eye or Curv  Arch		
		if(arc_glass_type_value=='CA')
		{
			
		
		if(arc_glass_valss=='2')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","90px");
        $('.left').css("left","68px");
		
		$('.right').css("top","37px");
        $('.right').css("left","426px");
			
		}		
			
		$('.arc_height1').css("top","124px");
        $('.arc_height1').css("left","267px");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","84px");
        $('.left').css("left","74px");
		
		$('.right').css("top","22px");
        $('.right').css("left","428px");
			
		}	
			
		
		$('.arc_height1').css("top","105px");
        $('.arc_height1').css("left","264px");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","89px");
        $('.left').css("left","78px");
		
		$('.right').css("top","39px");
        $('.right').css("left","432px");
			
		}		
		
		$('.arc_height1').css("top","116px");
        $('.arc_height1').css("left","264px");	
		

			
		}
		
		}
		
		//for Random  Arch		
		if(arc_glass_type_value=='RD')
		{
			
		
		if(arc_glass_valss=='2')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","90px");
        $('.left').css("left","75px");
		
		$('.right').css("top","39px");
        $('.right').css("left","429px");
			
		}		
			
		$('.arc_height1').css("top","126px");
        $('.arc_height1').css("left","253px");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","63px");
        $('.left').css("left","72px");
		
		$('.right').css("top","21px");
        $('.right').css("left","426px");
			
		}	
			
		
		$('.arc_height1').css("top","105px");
        $('.arc_height1').css("left","249px");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","62px");
        $('.left').css("left","77px");
		
		$('.right').css("top","17px");
        $('.right').css("left","427px");
			
		}		
		
		$('.arc_height1').css("top","104px");
        $('.arc_height1').css("left","256px");	
		

			
		}
		
		}
			
		
		$('.post').css("top","152px");
        $('.post').css("left","509px");
			
		$('.glass_a').css("top","331px");
        $('.glass_a').css("left","278px");
		
		$('.glass_b').css("top","265px");
        $('.glass_b').css("left","446px");
			
		$('.total').css("top","329px");
        $('.total').css("left","388px");
			
			
			
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
		$('.left').css("top","119px");
        $('.left').css("left","52px");
		
		$('.right').css("top","50px");
        $('.right').css("left","458px");
			
		}		
			
		$('.arc_height1').css("top","144px");
        $('.arc_height1').css("left","219px");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","88px");
        $('.left').css("left","48px");
		
		$('.right').css("top","25px");
        $('.right').css("left","461px");
		
		}	
			
		
		$('.arc_height1').css("top","124px");
        $('.arc_height1').css("left","215px");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		if(endpanel_arc_glass_value=='yes')	
		{
		$('.left').css("top","78px");
        $('.left').css("left","46px");
		
		$('.right').css("top","26px");
        $('.right').css("left","460px");
		}
		else{
		$('.left').css("top","110px");
        $('.left').css("left","52px");
		
		$('.right').css("top","45px");
        $('.right').css("left","460px");
		}
		
		}		
		
		$('.arc_height1').css("top","137px");
        $('.arc_height1').css("left","218px");
		

			
		}
		
		}
		
		//for Eye or Curv  Arch		
		if(arc_glass_type_value=='CA')
		{
			
		
		if(arc_glass_valss=='2')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","117px");
        $('.left').css("left","54px");
		
		$('.right').css("top","49px");
        $('.right').css("left","459px");
			
		}		
			
		$('.arc_height1').css("top","143px");
        $('.arc_height1').css("left","225px");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","114px");
        $('.left').css("left","52px");
		
		$('.right').css("top","41px");
        $('.right').css("left","461px");
		
		}	
			
		
		$('.arc_height1').css("top","130px");
        $('.arc_height1').css("left","216px");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","115px");
        $('.left').css("left","55px");
		
		$('.right').css("top","46px");
        $('.right').css("left","460px");
		
		}		
		
		$('.arc_height1').css("top","138px");
        $('.arc_height1').css("left","220px");
		

			
		}
		
		}
		
		//for Random  Arch		
		if(arc_glass_type_value=='RD')
		{
			
		
		if(arc_glass_valss=='2')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","115px");
        $('.left').css("left","52px");
		
		$('.right').css("top","47px");
        $('.right').css("left","456px");
			
		}		
			
		$('.arc_height1').css("top","144px");
        $('.arc_height1').css("left","209px");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","90px");
        $('.left').css("left","56px");
		
		$('.right').css("top","33px");
        $('.right').css("left","456px");
		
		}	
			
		
		$('.arc_height1').css("top","130px");
        $('.arc_height1').css("left","212px");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","90px");
        $('.left').css("left","57px");
		
		$('.right').css("top","30px");
        $('.right').css("left","458px");
		
		}		
		
		$('.arc_height1').css("top","129px");
        $('.arc_height1').css("left","210px");
		

			
		}
		
		}
		
		
		
		
		$('.post').css("top","133px");
        $('.post').css("left","523px");
			
		$('.glass_a').css("top","320px");
        $('.glass_a').css("left","235px");
		
		$('.glass_b').css("top","261px");
        $('.glass_b').css("left","379px");
		
		$('.glass_c').css("top","218px");
        $('.glass_c').css("left","486px");
				
		$('.total').css("top","286px");
        $('.total').css("left","396px");
				
		}			
		if(type_obj.value=="4BAY"){
			
		
		
		//for Full Arch		
		if(arc_glass_type_value=='FA')
		{
			
		
		if(arc_glass_valss=='2')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","167px");
        $('.left').css("left","35px");
		
		$('.right').css("top","90px");
        $('.right').css("left","484px");
			
		}		
			
		$('.arc_height1').css("top","191px");
        $('.arc_height1').css("left","167px");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","144px");
        $('.left').css("left","33px");
		
		$('.right').css("top","79px");
        $('.right').css("left","486px");
		
		}	
			
		
		$('.arc_height1').css("top","178px");
        $('.arc_height1').css("left","159px");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		if(endpanel_arc_glass_value=='yes')	
		{
		$('.left').css("top","139px");
        $('.left').css("left","28px");
		
		$('.right').css("top","74px");
        $('.right').css("left","486px");
		}
		else{
		$('.left').css("top","164px");
        $('.left').css("left","28px");
		
		$('.right').css("top","90px");
        $('.right').css("left","486px");
		}
		
		}		
		
		$('.arc_height1').css("top","185px");
        $('.arc_height1').css("left","161px");
		

			
		}
		
		}
		
		//for Eye or Curv  Arch		
		if(arc_glass_type_value=='CA')
		{
			
		
		if(arc_glass_valss=='2')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","169px");
        $('.left').css("left","33px");
		
		$('.right').css("top","92px");
        $('.right').css("left","485px");
			
		}		
			
		$('.arc_height1').css("top","192px");
        $('.arc_height1').css("left","166px");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","165px");
        $('.left').css("left","30px");
		
		$('.right').css("top","82px");
        $('.right').css("left","487px");
		
		}	
			
		
		$('.arc_height1').css("top","181px");
        $('.arc_height1').css("left","159px");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","170px");
        $('.left').css("left","29px");
		
		$('.right').css("top","92px");
        $('.right').css("left","482px");
		
		}		
		
		$('.arc_height1').css("top","186px");
        $('.arc_height1').css("left","164px");
		

			
		}
		
		}
		
		//for Random  Arch		
		if(arc_glass_type_value=='RD')
		{
			
		
		if(arc_glass_valss=='2')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","167px");
        $('.left').css("left","33px");
		
		$('.right').css("top","93px");
        $('.right').css("left","485px");
			
		}		
			
		$('.arc_height1').css("top","191px");
        $('.arc_height1').css("left","153px");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","147px");
        $('.left').css("left","40px");
		
		$('.right').css("top","79px");
        $('.right').css("left","483px");
		
		}	
			
		
		$('.arc_height1').css("top","180px");
        $('.arc_height1').css("left","156px");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","150px");
        $('.left').css("left","38px");
		
		$('.right').css("top","79px");
        $('.right').css("left","483px");
		
		}		
		
		$('.arc_height1').css("top","180px");
        $('.arc_height1').css("left","156px");	
		

			
		}
		
		}
		
		
		$('.post').css("top","160px");
        $('.post').css("left","529px");
			
		$('.glass_a').css("top","333px");
        $('.glass_a').css("left","171px");
		
		$('.glass_b').css("top","291px");
        $('.glass_b').css("left","306px");
		
		$('.glass_c').css("top","255px");
        $('.glass_c').css("left","413px");
		
		$('.glass_d').css("top","228px");
        $('.glass_d').css("left","501px");
					
		$('.total').css("top","294px");
        $('.total').css("left","371px");
			
			
		}			
						
		}
		
		
		
		<?php
		}
		else
		{
		?>
		//Mobile View
		
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
		$('.left').css("top","57px");
        $('.left').css("left","169px");
		
		
		$('.right').css("top","47px");
        $('.right').css("left","501px");
			
		}		
			
		$('.arc_height1').css("top","114px");
        $('.arc_height1').css("left","506px");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","20px");
        $('.left').css("left","174px");
		
		
		$('.right').css("top","14px");
        $('.right').css("left","507px");
			
		}	
			
		
		$('.arc_height1').css("top","81px");
        $('.arc_height1').css("left","500px");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","53px");
        $('.left').css("left","183px");
		
		$('.right').css("top","38px");
        $('.right').css("left","506px");
			
		}		
		
		$('.arc_height1').css("top","101px");
        $('.arc_height1').css("left","507px");	
		

			
		}
		
			
		}
		
		//for Eye or Curv  Arch		
		if(arc_glass_type_value=='CA')
		{
			
		
		if(arc_glass_valss=='2')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","64px");
        $('.left').css("left","180px");
		
		
		$('.right').css("top","50px");
        $('.right').css("left","510px");
			
		}		
			
		$('.arc_height1').css("top","122px");
        $('.arc_height1').css("left","508px");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","55px");
        $('.left').css("left","157px");
		
		
		$('.right').css("top","30px");
        $('.right').css("left","514px");
			
		}	
			
		
		$('.arc_height1').css("top","94px");
        $('.arc_height1').css("left","510px");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","56px");
        $('.left').css("left","181px");
		
		$('.right').css("top","42px");
        $('.right').css("left","508px");
			
		}		
		
		$('.arc_height1').css("top","101px");
        $('.arc_height1').css("left","507px");	
		

			
		}
		
		
		
			
		}
		
		//for Random  Arch		
		if(arc_glass_type_value=='RD')
		{
			
		
		if(arc_glass_valss=='2')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","15px");
        $('.left').css("left","169px");
		
		
		$('.right').css("top","21px");
        $('.right').css("left","504px");
			
		}		
			
		$('.arc_height1').css("top","91px");
        $('.arc_height1').css("left","479px");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","26px");
        $('.left').css("left","179px");
		
		
		$('.right').css("top","21px");
        $('.right').css("left","515px");
			
		}	
			
		
		$('.arc_height1').css("top","94px");
        $('.arc_height1').css("left","483px");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","23px");
        $('.left').css("left","169px");
		
		$('.right').css("top","19px");
        $('.right').css("left","495px");
			
		}		
		
		$('.arc_height1').css("top","91px");
        $('.arc_height1').css("left","479px");	
		

			
		}
		
		}
		

		
		$('.post').css("top","238px");
        $('.post').css("left","680px");	
			
		$('.glass').css("top","449px");
        $('.glass').css("left","529px");
			
		$('.total').css("top","483px");
        $('.total').css("left","592px");
		
		
		
			
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
		$('.left').css("top","120px");
        $('.left').css("left","106px");
		
		$('.right').css("top","54px");
        $('.right').css("left","623px");
			
		}		
			
		$('.arc_height1').css("top","165px");
        $('.arc_height1').css("left","348px");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","76px");
        $('.left').css("left","115px");
		
		$('.right').css("top","21px");
        $('.right').css("left","626px");
			
		}	
			
		
		$('.arc_height1').css("top","128px");
        $('.arc_height1').css("left","386px");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","25px");
        $('.left').css("left","72px");
		
		$('.right').css("top","9px");
        $('.right').css("left","419px");
			
		}		
		
		$('.arc_height1').css("top","101px");
        $('.arc_height1').css("left","348px");	
		

			
		}
		
		}
		
		//for Eye or Curv  Arch		
		if(arc_glass_type_value=='CA')
		{
			
		
		if(arc_glass_valss=='2')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","121px");
        $('.left').css("left","105px");
		
		$('.right').css("top","54px");
        $('.right').css("left","625px");
			
		}		
			
		$('.arc_height1').css("top","163px");
        $('.arc_height1').css("left","385px");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","122px");
        $('.left').css("left","105px");
		
		$('.right').css("top","40px");
        $('.right').css("left","631px");
			
		}	
			
		
		$('.arc_height1').css("top","139px");
        $('.arc_height1').css("left","382px");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","122px");
        $('.left').css("left","112px");
		
		$('.right').css("top","47px");
        $('.right').css("left","627px");
			
		}		
		
		$('.arc_height1').css("top","150px");
        $('.arc_height1').css("left","385px");	
		

			
		}
		
		}
		
		//for Random  Arch		
		if(arc_glass_type_value=='RD')
		{
			
		
		if(arc_glass_valss=='2')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","122px");
        $('.left').css("left","111px");
		
		$('.right').css("top","55px");
        $('.right').css("left","623px");
			
		}		
			
		$('.arc_height1').css("top","167px");
        $('.arc_height1').css("left","365px");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","76px");
        $('.left').css("left","106px");
		
		$('.right').css("top","24px");
        $('.right').css("left","625px");
			
		}	
			
		
		$('.arc_height1').css("top","141px");
        $('.arc_height1').css("left","359px");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","81px");
        $('.left').css("left","115px");
		
		$('.right').css("top","16px");
        $('.right').css("left","620px");
			
		}		
		
		$('.arc_height1').css("top","138px");
        $('.arc_height1').css("left","369px");	
		

			
		}
		
		}
			
		
		$('.post').css("top","203px");
        $('.post').css("left","741px");
			
		$('.glass_a').css("top","429px");
        $('.glass_a').css("left","417px");
		
		$('.glass_b').css("top","348px");
        $('.glass_b').css("left","650px");
			
		$('.total').css("top","423px");
        $('.total').css("left","559px");
			
			
			
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
		$('.left').css("top","155px");
        $('.left').css("left","76px");
		
		$('.right').css("top","67px");
        $('.right').css("left","672px");
			
		}		
			
		$('.arc_height1').css("top","187px");
        $('.arc_height1').css("left","321px");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","113px");
        $('.left').css("left","75px");
		
		$('.right').css("top","35px");
        $('.right').css("left","675px");
		
		}	
			
		
		$('.arc_height1').css("top","163px");
        $('.arc_height1').css("left","315px");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		if(endpanel_arc_glass_value=='yes')
		{
		$('.left').css("top","97px");
        $('.left').css("left","68px");
		
		$('.right').css("top","34px");
        $('.right').css("left","672px");
		}
		else{
		$('.left').css("top","141px");
        $('.left').css("left","68px");
		
		$('.right').css("top","56px");
        $('.right').css("left","672px");
		}
		
		}		
		
		$('.arc_height1').css("top","176px");
        $('.arc_height1').css("left","319px ");
		

			
		}
		
		}
		
		//for Eye or Curv  Arch		
		if(arc_glass_type_value=='CA')
		{
			
		
		if(arc_glass_valss=='2')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","158px");
        $('.left').css("left","75px");
		
		$('.right').css("top","70px");
        $('.right').css("left","668px");
			
		}		
			
		$('.arc_height1').css("top","184px");
        $('.arc_height1').css("left","326px");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","152px");
        $('.left').css("left","70px");
		
		$('.right').css("top","55px");
        $('.right').css("left","671px");
		
		}	
			
		
		$('.arc_height1').css("top","166px");
        $('.arc_height1').css("left","312px");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","149px");
        $('.left').css("left","80px");
		
		$('.right').css("top","69px");
        $('.right').css("left","670px");
		
		}		
		
		$('.arc_height1').css("top","179px");
        $('.arc_height1').css("left","326px");
		

			
		}
		
		}
		
		//for Random  Arch		
		if(arc_glass_type_value=='RD')
		{
			
		
		if(arc_glass_valss=='2')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","145px");
        $('.left').css("left","79px");
		
		$('.right').css("top","64px");
        $('.right').css("left","669px");
			
		}		
			
		$('.arc_height1').css("top","185px");
        $('.arc_height1').css("left","303px");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","116px");
        $('.left').css("left","84px");
		
		$('.right').css("top","45px");
        $('.right').css("left","667px");
		
		}	
			
		
		$('.arc_height1').css("top","169px");
        $('.arc_height1').css("left","308px");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","115px");
        $('.left').css("left","85px");
		
		$('.right').css("top","44px");
        $('.right').css("left","670px");
		
		}		
		
		$('.arc_height1').css("top","164px");
        $('.arc_height1').css("left","310px");
		

			
		}
		
		}
		
		
		
		
		$('.post').css("top","173px");
        $('.post').css("left","764px");
			
		$('.glass_a').css("top","411px");
        $('.glass_a').css("left","349px");
		
		$('.glass_b').css("top","341px");
        $('.glass_b').css("left","555px");
		
		$('.glass_c').css("top","288px");
        $('.glass_c').css("left","706px");
				
		$('.total').css("top","387px");
        $('.total').css("left","582px");
				
		}			
		if(type_obj.value=="4BAY"){
			
		
		
		//for Full Arch		
		if(arc_glass_type_value=='FA')
		{
			
		
		if(arc_glass_valss=='2')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","217px");
        $('.left').css("left","44px");
		
		$('.right').css("top","117px");
        $('.right').css("left","711px");
			
		}		
			
		$('.arc_height1').css("top","247px");
        $('.arc_height1').css("left","236px");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","185px");
        $('.left').css("left","44px");
		
		$('.right').css("top","97px");
        $('.right').css("left","712px");
		
		}	
			
		
		$('.arc_height1').css("top","233px");
        $('.arc_height1').css("left","230px");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		if(endpanel_arc_glass_value=='yes')
		{			
		$('.left').css("top","181px");
        $('.left').css("left","44px");
		
		$('.right').css("top","102px");
        $('.right').css("left","708px");
		}
		else{			
		$('.left').css("top","212px");
        $('.left').css("left","44px");
		
		$('.right').css("top","117px");
        $('.right').css("left","708px");
		}
		
		}		
		
		$('.arc_height1').css("top","242px");
        $('.arc_height1').css("left","233px");
		

			
		}
		
		}
		
		//for Eye or Curv  Arch		
		if(arc_glass_type_value=='CA')
		{
			
		
		if(arc_glass_valss=='2')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","224px");
        $('.left').css("left","44px");
		
		$('.right').css("top","124px");
        $('.right').css("left","708px");
			
		}		
			
		$('.arc_height1').css("top","248px");
        $('.arc_height1').css("left","238px");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","198px");
        $('.left').css("left","44px");
		
		$('.right').css("top","105px");
        $('.right').css("left","715px");
		
		}	
			
		
		$('.arc_height1').css("top","237px");
        $('.arc_height1').css("left","230px");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","217px");
        $('.left').css("left","44px");
		
		$('.right').css("top","115px");
        $('.right').css("left","710px");
		
		}		
		
		$('.arc_height1').css("top","243px");
        $('.arc_height1').css("left","238px");
		

			
		}
		
		}
		
		//for Random  Arch		
		if(arc_glass_type_value=='RD')
		{
			
		
		if(arc_glass_valss=='2')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","218px");
        $('.left').css("left","38px");
		
		$('.right').css("top","120px");
        $('.right').css("left","710px");
			
		}		
			
		$('.arc_height1').css("top","248px");
        $('.arc_height1').css("left","221px");	
		
	
		}
		else if(arc_glass_valss=='6')
		{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","190px");
        $('.left').css("left","59px");
		
		$('.right').css("top","101px");
        $('.right').css("left","705px");
		
		}	
			
		
		$('.arc_height1').css("top","234px");
        $('.arc_height1').css("left","228px");	
		
	
		}
		else{
			
		if(endpanel_arc_glass_value=='yes' || endpanel_arc_glass_value=='no')
		{
		$('.left').css("top","190px");
        $('.left').css("left","56px");
		
		$('.right').css("top","98px");
        $('.right').css("left","705px");
		
		}		
		
		$('.arc_height1').css("top","236px");
        $('.arc_height1').css("left","233px");	
		

			
		}
		
		}
		
		
		$('.post').css("top","204px");
        $('.post').css("left","781px");
			
		$('.glass_a').css("top","427px");
        $('.glass_a').css("left","263px");
		
		$('.glass_b').css("top","373px");
        $('.glass_b').css("left","450px");
		
		$('.glass_c').css("top","330px");
        $('.glass_c').css("left","608px");
		
		$('.glass_d').css("top","297px");
        $('.glass_d').css("left","729px");
					
		$('.total').css("top","386px");
        $('.total').css("left","510px");	
			
		}			
						
		}
		
		
		
		
		<?php
		}
		
		?>
		
		
		
		
		
		
		//arc_glass_yn=arc_glass_obj.value;
		
        if(category_name=="EP5"){
				
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
					
					// if(arc_glass_yn=='yes')
					// {
					// $('#c_glass_right_arc_val').val($('[name="arc_glass_type_value"]').find('option:selected').text());
					// }
					// else{
					// $('#c_glass_right_arc_val').val('');
					// }
					
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
        if(category_name=="EP5"){
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
        
        if(category_name=="EP15"){
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
			
			
			// if(arc_glass_yn=='yes')
				// {
				// $('#c_glass_a_arc_val').val($('[name="arc_glass_type_value"]').find('option:selected').text());
				// }
				// else{
				// $('#c_glass_a_arc_val').val('');
				// }
				
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
				
				
				//arc_glass_sss=$('[name="arc_glass"]').find('option:selected').value();
				// if(arc_glass_yn=='yes')
				// {
				// $('#c_glass_a_arc_val').val($('[name="arc_glass_type_value"]').find('option:selected').text());
				// $('#c_glass_b_arc_val').val($('[name="arc_glass_type_value"]').find('option:selected').text());	
				// }
				// else{
				// $('#c_glass_a_arc_val').val('');
				// $('#c_glass_b_arc_val').val('');	
				// }
				
				
				
		
				
				
				
				
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
			
			
			// if(arc_glass_yn=='yes')
				// {
				// $('#c_glass_a_arc_val').val($('[name="arc_glass_type_value"]').find('option:selected').text());
				// $('#c_glass_b_arc_val').val($('[name="arc_glass_type_value"]').find('option:selected').text());	
				// $('#c_glass_c_arc_val').val($('[name="arc_glass_type_value"]').find('option:selected').text());	
				// }
				// else{
				// $('#c_glass_a_arc_val').val('');
				// $('#c_glass_b_arc_val').val('');	
				// $('#c_glass_c_arc_val').val('');	
				// }
			
			
			
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

			// if(arc_glass_yn=='yes')
				// {
				// $('#c_glass_a_arc_val').val($('[name="arc_glass_type_value"]').find('option:selected').text());
				// $('#c_glass_b_arc_val').val($('[name="arc_glass_type_value"]').find('option:selected').text());	
				// $('#c_glass_c_arc_val').val($('[name="arc_glass_type_value"]').find('option:selected').text());	
				// $('#c_glass_d_arc_val').val($('[name="arc_glass_type_value"]').find('option:selected').text());	
				// }
				// else{
				// $('#c_glass_a_arc_val').val('');
				// $('#c_glass_b_arc_val').val('');	
				// $('#c_glass_c_arc_val').val('');	
				// $('#c_glass_d_arc_val').val('');	
				// }	


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
       
       // if(category_name=="EP5"){
            document.getElementById("flange-cover").innerHTML=flangeCoversPrice+".00";
			//document.getElementById("flange-under-counter").innerHTML=flangeUnderCounterPrice+".00"; 
			
			 if(roasted_glass_obj.value=="yes"){
          document.getElementById("roasted-glass").innerHTML=roastedglassprice;	
             }else{
              document.getElementById("roasted-glass").innerHTML=roastedglassprice+".00";
                     }		  
             document.getElementById("lightbar").innerHTML=flangeCoversPrice2+".00";  			
       // }

        if(category_name!="EP15"){
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
