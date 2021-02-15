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
	  $countertop='';
	  $shelve='';
	  
	  $post_height=$HTTP_GET_VARS['post_height'];
	  $facelengthA=$HTTP_GET_VARS['facelengthA'];
	  $facelengthB=$HTTP_GET_VARS['facelengthB'];
	  
	  $facelengthccc=$HTTP_GET_VARS['facelengthC'];
	  if(strpos($facelengthccc, 'W') !== false) 
	  {
		 
		$ccarray=explode("W",$facelengthccc); 
	    $facelengthC=$ccarray[1];
		
	  }
	  else{
		  $facelengthC=$facelengthccc;
	  }
	  
	  $facelengthD=$HTTP_GET_VARS['facelengthD'];
	  $glass_type=$HTTP_GET_VARS['glass_type'];
	  $finish_type=$HTTP_GET_VARS['finish_type'];
	  $flange=$HTTP_GET_VARS['flange'];
	  $lightbar=$HTTP_GET_VARS['lightbar'];
	  $endpanel=$HTTP_GET_VARS['endpanel'];
	  
	  $right_end=$HTTP_GET_VARS['right_end'];
	  $left_end=$HTTP_GET_VARS['left_end'];
	  
	  $countertop=$HTTP_GET_VARS['countertop'];
	  $shelve=$HTTP_GET_VARS['shelve'];
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
    $im_id=rand();
    if(isset($_SESSION["scr"])){
        $_SESSION['scr']=$_SESSION['scr']."-".$im_id;
    }else{
        $_SESSION['scr']=$im_id;
    }

?>

<script type="text/javascript">
var tot1 = osc = im_id = img_ajx = "";
<?php
        if(isset($HTTP_GET_VARS['id'])){
            $product="select count(*) as total from ".TABLE_PRODUCTS." as p, ".TABLE_PRODUCTS_DESCRIPTION." as pd, ".TABLE_PRODUCTS_TO_CATEGORIES." as pc where p.products_id=pd.products_id and pd.products_id=pc.products_id and pc.categories_id=".$HTTP_GET_VARS['id']." and pd.language_id=".(int)$languages_id;
            $product=tep_db_query($product);
            $products=tep_db_fetch_array($product);  
        }
    ?>
arr_len = <?=$products['total']?>;
<?php if($category_name!='EP5'){ ?>
arr_len = parseInt(arr_len) + 7;
<?php } ?>
var product_name_price = new Array(arr_len);
<?php
        if(isset($HTTP_GET_VARS['id'])){
            $product="select p.products_id as id, pd.products_name as name, p.products_price as price from ".TABLE_PRODUCTS." as p, ".TABLE_PRODUCTS_DESCRIPTION." as pd, ".TABLE_PRODUCTS_TO_CATEGORIES." as pc where p.products_id=pd.products_id and pd.products_id=pc.products_id and pc.categories_id=".$HTTP_GET_VARS['id']." and pd.language_id=".(int)$languages_id;
            $product=tep_db_query($product);
            while($products=tep_db_fetch_array($product)){?>
product_name_price['<?=$products['name']?>'] = new Array("<?=$products['id']?>", "<?=$products['price']?>");
<?php } 
        if($HTTP_GET_VARS['id']==81){
            $product="select p.products_id as id, pd.products_name as name, p.products_price as price from ".TABLE_PRODUCTS." as p, ".TABLE_PRODUCTS_DESCRIPTION." as pd, ".TABLE_PRODUCTS_TO_CATEGORIES." as pc where p.products_id=pd.products_id and pd.products_id=pc.products_id and pc.categories_id=80 and pd.language_id=".(int)$languages_id;
            $product=tep_db_query($product);
            while($products=tep_db_fetch_array($product)){?>
product_name_price['<?=$products['name']?>'] = new Array("<?=$products['id']?>", "<?=$products['price']?>");
<?php }
         }
      }
    ?>
</script>
<script src="jquery.confirm/jquery.confirm.js"></script>

<?php if($_REQUEST['type']=='1BAY'){?>
<style>
div.left {
    top: 4%;
    left: 15%;
}

div.right {
    top: 2%;
    left: 68%;
}

div.post {
    display: none;
}

div.glass_a {
    display: none;
}

div.glass_b {
    display: none;
}

div.glass_c {
    display: none;
}

div.glass_d {
    display: none;
}

div.glass {
	top: 70%;
    left: 64%;
}

div.total {
	top: 76%;
    left: 68%;

}

div.msgtishu {
    display: none;
}

div.msgtishu1 {
    display: none;
}

div.msgtishu2 {
    display: none;
}
</style>
<?php }
if($_REQUEST['type']=='2BAY'){?>
<style>
div.left {
    top: 17%;
    left: 5%;
}

div.right {
    top: 7%;
    left: 82%;
}

div.post {
    display: none;
}

div.glass_a {
    top: 72%;
    left: 48%;
}

div.glass_b {
	top: 54%;
    left: 80%;
}

div.glass_c {
    display: none;
}

div.glass_d {
    display: none;
}

div.glass {
    display: none;
}

div.total {
    top: 67%;
    left: 68%;
}

div.msgtishu {
    display: none;
}

div.msgtishu1 {
    display: none;
}

div.msgtishu2 {
    display: none;
}
</style>
<?php }

if($_REQUEST['type']=='3BAY'){
?>
<style>
div.left {
    top: 27%;
    left: 5%;

}

div.right {
    top: 13%;
    left: 85%;

}

div.post {
    display: none;
}

div.glass_a {
	top: 69%;
    left: 39%;
}

div.glass_b {
	top: 54%;
    left: 67%;
}

div.glass_c {
    top: 45%;
    left: 86%;

}

div.glass_d {
    display: none;
}

div.glass {
    display: none;
}

div.total {
	top: 60%;
    left: 65%;
}

div.msgtishu {
    display: none;
}

div.msgtishu1 {
    display: none;
}

div.msgtishu2 {
    display: none;
}
</style>

<?php }
if($_REQUEST['type']=='4BAY'){?>
<style>
div.left {
    top: 31%;
    left: 5%;
}

div.right {
	top: 17%;
    left: 86%;
}

div.post {
    display: none;
}

div.glass_a {
    top: 66%;
    left: 34%;
}

div.glass_b {
	top: 55%;
    left: 58%;
}

div.glass_c {
	top: 47%;
    left: 76%;
}

div.glass_d {
	top: 41%;
    left: 88%;
}

div.glass {
    display: none;
}

div.total {
	top: 54%;
    left: 68%;
}

div.msgtishu {
    display: none;
}

div.msgtishu1 {
    display: none;
}

div.msgtishu2 {
    display: none;
}
</style>
<?php }
?>



<table id="cart-form" style="">

    <tr>
        <td>

            <div class="tables-options">
                <table cellpadding="0" cellspacing="0" width="100%" style="border: 1px solid white;border-radius: 5px;">
                    <tr>
                        <td colspan=3>
                            <center>
                                <h2 class="heading_all"><span style="float:left">&nbsp;&nbsp1)</span>Measurements
                                    <br />
                                    <input type="checkbox" id="checkboxbfor4bayA" name="checkboxbfor4bayA"
                                        style="display:none;">
                                    <input type="checkbox" id="checkboxbfor4bayB" name="checkboxbfor4bayB"
                                        style="display:none;">
                                    <input type="checkbox" id="checkboxbfor4bayC" name="checkboxbfor4bayC"
                                        style="display:none;">

                                    <input type="checkbox" id="checkbfor4bayBnonsame" name="checkbfor4bayBnonsame"
                                        style="display:none;">
                                    <input type="checkbox" id="checkcfor4bayCnonsame" name="checkcfor4bayCnonsame"
                                        style="display:none;">
                                    <input type="checkbox" id="checkdfor4bayDnonsame" name="checkdfor4bayDnonsame"
                                        style="display:none;">
                                    <input type="checkbox" id="checkformorethan42" name="checkformorethan42"
                                        style="display:none;">

                            </center>
                            </h2>
                        </td>
                    </tr>
                    <?php 
                    $fn="";
                    if($category_name=="B950 SWIVEL"){
                        $fn="B-950-SWIVEL";
                    }else{
                        $fn="B950";
                    }
				
                    if($_REQUEST['type']=='1BAY') {
                    echo    '<tr>
                                <td class="test-lenght1baya"><a class="thickbox" href="images/'.$fn.'/1bay_faceA.jpg"><h1>Face Length A</h1></td>
                                <td>
								<span id="face_length_span">
                                    <select name="face_length" onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                                        <option value="select">Select</option>';
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
						if($facelengthA=='48')
						{
						echo'<option value="48" selected>48&quot;</option>';	
						}
						else{
						echo'<option value="48">48&quot;</option>';	
						}
						if($facelengthA=='54')
						{
						echo'<option value="54" selected>54&quot;</option>';	
						}
						else{
						echo'<option value="54">54&quot;</option>';	
						}	

						if($facelengthA=='60')
						{
						echo'<option value="60" selected>60&quot;</option>';	
						}
						else{
						echo'<option value="60">60&quot;</option>';	
						}	
						
                       if($facelengthA=='66')
						{
						echo'<option value="66" selected>66&quot;</option>';	
						}
						else{
						echo'<option value="66">66&quot;</option>';	
						}	
							echo'<option value="custom">Custom</option>
                                    </select>
									</span>
                                </td>
                                <td width="11%">
                                	<span id="errormsgfirstname">
                            			<img id="glass_a_err" src="img/iconCheckOff.gif">
                        			</span>
                                </td>
                            </tr>'; 
                }
                if($_REQUEST['type']=='2BAY'){
                    echo '<tr>
                            <td class="test-lenght2baya"><a class="thickbox" href="images/'.$fn.'/2bay_faceA.jpg"><h1>Face Length A</h1></a></td>
                            <td>
								<span id="face_length_a_span">
                                <select name="face_length_a" id="face_length_a" onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                                    <option value="select">Select</option>';
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
						if($facelengthA=='48')
						{
						echo'<option value="48" selected>48&quot;</option>';	
						}
						else{
						echo'<option value="48">48&quot;</option>';	
						}
						if($facelengthA=='54')
						{
						echo'<option value="54" selected>54&quot;</option>';	
						}
						else{
						echo'<option value="54">54&quot;</option>';	
						}	

						if($facelengthA=='60')
						{
						echo'<option value="60" selected>60&quot;</option>';	
						}
						else{
						echo'<option value="60">60&quot;</option>';	
						}	
						
                       if($facelengthA=='66')
						{
						echo'<option value="66" selected>66&quot;</option>';	
						}
						else{
						echo'<option value="66">66&quot;</option>';	
						}	
							echo'<option value="custom">Custom</option>
                                </select>
								</span>
                            </td>
                            <td width="11%">
                                <span id="errormsgfirstname">
                            		<img id="glass_a_err" src="img/iconCheckOff.gif">
                        		</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="test-lenght4bayb"><a class="thickbox" href="images/'.$fn.'/2bay_faceB.jpg" ><h1>Face Length B</h1></a></td>
                            <td>
								<span id="face_length_b_span">
                                <select name="face_length_b" id="face_length_b" onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                                   <option value="select" class="instock">Select</option>
									<option value="24" class="customsame" style="display:none;">8"</option>
									
									';
						if($facelengthB=='24')
						{
						echo'<option value="24" selected class="instock" style="display: block;">24&quot;</option>';	
						}
						else{
						echo'<option value="24" class="instock" style="display: block;">24&quot;</option>';	
						}
						if($facelengthB=='30')
						{
						echo'<option value="30" selected class="instock" style="display: block;">30&quot;</option>';	
						}
						else{
						echo'<option value="30" class="instock" style="display: block;">30&quot;</option>';	
						}
						if($facelengthB=='36')
						{
						echo'<option value="36" selected class="instock" style="display: block;">36&quot;</option>';	
						}
						else{
						echo'<option value="36" class="instock" style="display: block;">36&quot;</option>';	
						}
						if($facelengthB=='42')
						{
						echo'<option value="42" selected class="instock" style="display: block;">42&quot;</option>';	
						}
						else{
						echo'<option value="42" class="instock" style="display: block;">42&quot;</option>';	
						}
						if($facelengthB=='48')
						{
						echo'<option value="48" selected class="instock" style="display: block;">48&quot;</option>';	
						}
						else{
						echo'<option value="48" class="instock" style="display: block;">48&quot;</option>';	
						}
						if($facelengthB=='54')
						{
						echo'<option value="54" selected class="instock" style="display: block;">54&quot;</option>';	
						}
						else{
						echo'<option value="54" class="instock" style="display: block;">54&quot;</option>';	
						}	

						if($facelengthB=='60')
						{
						echo'<option value="60" selected class="instock" style="display: block;">60&quot;</option>';	
						}
						else{
						echo'<option value="60" class="instock" style="display: block;">60&quot;</option>';	
						}	
						
                       if($facelengthB=='66')
						{
						echo'<option value="66" selected class="instock" style="display: block;">66&quot;</option>';	
						}
						else{
						echo'<option value="66" class="instock" style="display: block;">66&quot;</option>';	
						}	
							echo'<option value="custom" class="instock" style="display: block;">Custom</option>
									
									<option value="24" class="customsame" style="display:none;">8-1/4"</option>
									<option value="24" class="customsame" style="display:none;">8-1/2"</option>
									<option value="24" class="customsame" style="display:none;">8-3/4"</option>
									<option value="24" class="customsame" style="display:none;">9"</option>
									<option value="24" class="customsame" style="display:none;">9-1/4"</option>
									<option value="24" class="customsame" style="display:none;">9-1/2"</option>
									<option value="24" class="customsame" style="display:none;">9-3/4"</option>
									<option value="24" class="customsame" style="display:none;">10"</option>
									<option value="24" class="customsame" style="display:none;">10-1/4"</option>
									<option value="24" class="customsame" style="display:none;">10-1/2"</option>
									<option value="24" class="customsame" style="display:none;">10-3/4"</option>
									<option value="24" class="customsame" style="display:none;">11"</option>
									<option value="24" class="customsame" style="display:none;">11-1/4"</option>
									<option value="24" class="customsame" style="display:none;">11-1/2"</option>
									<option value="24" class="customsame" style="display:none;">11-3/4"</option>
									<option value="24" class="customsame" style="display:none;">12"</option>
									<option value="24" class="customsame" style="display:none;">12-1/4"</option>
									<option value="24" class="customsame" style="display:none;">12-1/2"</option>
									<option value="24" class="customsame" style="display:none;">12-3/4"</option>
									<option value="24" class="customsame" style="display:none;">13"</option>
									<option value="24" class="customsame" style="display:none;">13-1/4"</option>
									<option value="24" class="customsame" style="display:none;">13-1/2"</option>
									<option value="24" class="customsame" style="display:none;">13-3/4"</option>
									<option value="24" class="customsame" style="display:none;">14"</option>
									<option value="24" class="customsame" style="display:none;">14-1/4"</option>
									<option value="24" class="customsame" style="display:none;">14-1/2"</option>
									<option value="24" class="customsame" style="display:none;">14-3/4"</option>
									<option value="24" class="customsame" style="display:none;">15"</option>
									<option value="24" class="customsame" style="display:none;">15-1/4"</option>
									<option value="24" class="customsame" style="display:none;">15-1/2"</option>
									<option value="24" class="customsame" style="display:none;">15-3/4"</option>
									<option value="24" class="customsame" style="display:none;">16"</option>
									<option value="24" class="customsame" style="display:none;">16-1/4"</option>
									<option value="24" class="customsame" style="display:none;">16-1/2"</option>
									<option value="24" class="customsame" style="display:none;">16-3/4"</option>
									<option value="24" class="customsame" style="display:none;">17"</option>
									<option value="24" class="customsame" style="display:none;">17-1/4"</option>
									<option value="24" class="customsame" style="display:none;">17-1/2"</option>
									<option value="24" class="customsame" style="display:none;">17-3/4"</option>
									<option value="24" class="customsame" style="display:none;">18"</option>
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
									<option value="48" class="customsame" style="display:none;">42-1/4"</option>
									<option value="48" class="customsame" style="display:none;">42-1/2"</option>
									<option value="48" class="customsame" style="display:none;">42-3/4"</option>
									<option value="48" class="customsame" style="display:none;">43"</option>
									<option value="48" class="customsame" style="display:none;">43-1/4"</option>
									<option value="48" class="customsame" style="display:none;">43-1/2"</option>
									<option value="48" class="customsame" style="display:none;">43-3/4"</option>
									<option value="48" class="customsame" style="display:none;">44"</option>
									<option value="48" class="customsame" style="display:none;">44-1/4"</option>
									<option value="48" class="customsame" style="display:none;">44-1/2"</option>
									<option value="48" class="customsame" style="display:none;">44-3/4"</option>
									<option value="48" class="customsame" style="display:none;">45"</option>
									<option value="48" class="customsame" style="display:none;">45-1/4"</option>
									<option value="48" class="customsame" style="display:none;">45-1/2"</option>
									<option value="48" class="customsame" style="display:none;">45-3/4"</option>
									<option value="48" class="customsame" style="display:none;">46"</option>
									<option value="48" class="customsame" style="display:none;">46-1/4"</option>
									<option value="48" class="customsame" style="display:none;">46-1/2"</option>
									<option value="48" class="customsame" style="display:none;">46-3/4"</option>
									<option value="48" class="customsame" style="display:none;">47"</option>
									<option value="48" class="customsame" style="display:none;">47-1/4"</option>
									<option value="48" class="customsame" style="display:none;">47-1/2"</option>
									<option value="48" class="customsame" style="display:none;">47-3/4"</option>
									<option value="48" class="customsame" style="display:none;">48"</option>
									<option value="54" class="customsame" style="display:none;">48-1/4"</option>
									<option value="54" class="customsame" style="display:none;">48-1/2"</option>
									<option value="54" class="customsame" style="display:none;">48-3/4"</option>
									<option value="54" class="customsame" style="display:none;">49"</option>
									<option value="54" class="customsame" style="display:none;">49-1/4"</option>
									<option value="54" class="customsame" style="display:none;">49-1/2"</option>
									<option value="54" class="customsame" style="display:none;">49-3/4"</option>
									<option value="54" class="customsame" style="display:none;">50"</option>
									<option value="54" class="customsame" style="display:none;">50-1/4"</option>
									<option value="54" class="customsame" style="display:none;">50-1/2"</option>
									<option value="54" class="customsame" style="display:none;">50-3/4"</option>
									<option value="54" class="customsame" style="display:none;">51"</option>
									<option value="54" class="customsame" style="display:none;">51-1/4"</option>
									<option value="54" class="customsame" style="display:none;">51-1/2"</option>
									<option value="54" class="customsame" style="display:none;">51-3/4"</option>
									<option value="54" class="customsame" style="display:none;">52"</option>
									<option value="54" class="customsame" style="display:none;">52-1/4"</option>
									<option value="54" class="customsame" style="display:none;">52-1/2"</option>
									<option value="54" class="customsame" style="display:none;">52-3/4"</option>
									<option value="54" class="customsame" style="display:none;">53"</option>
									<option value="54" class="customsame" style="display:none;">53-1/4"</option>
									<option value="54" class="customsame" style="display:none;">53-1/2"</option>
									<option value="54" class="customsame" style="display:none;">53-3/4"</option>
									<option value="54" class="customsame" style="display:none;">54"</option>
									<option value="60" class="customsame" style="display:none;">54-1/4"</option>
									<option value="60" class="customsame" style="display:none;">54-1/2"</option>
									<option value="60" class="customsame" style="display:none;">54-3/4"</option>
									<option value="60" class="customsame" style="display:none;">55"</option>
									<option value="60" class="customsame" style="display:none;">55-1/4"</option>
									<option value="60" class="customsame" style="display:none;">55-1/2"</option>
									<option value="60" class="customsame" style="display:none;">55-3/4"</option>
									<option value="60" class="customsame" style="display:none;">56"</option>
									<option value="60" class="customsame" style="display:none;">56-1/4"</option>
									<option value="60" class="customsame" style="display:none;">56-1/2"</option>
									<option value="60" class="customsame" style="display:none;">56-3/4"</option>
									<option value="60" class="customsame" style="display:none;">57"</option>
									<option value="60" class="customsame" style="display:none;">57-1/4"</option>
									<option value="60" class="customsame" style="display:none;">57-1/2"</option>
									<option value="60" class="customsame" style="display:none;">57-3/4"</option>
									<option value="60" class="customsame" style="display:none;">58"</option>
									<option value="60" class="customsame" style="display:none;">58-1/4"</option>
									<option value="60" class="customsame" style="display:none;">58-1/2"</option>
									<option value="60" class="customsame" style="display:none;">58-3/4"</option>
									<option value="60" class="customsame" style="display:none;">59"</option>
									<option value="60" class="customsame" style="display:none;">59-1/4"</option>
									<option value="60" class="customsame" style="display:none;">59-1/2"</option>
									<option value="60" class="customsame" style="display:none;">59-3/4"</option>
									<option value="60" class="customsame" style="display:none;">60"</option>
									<option value="66" class="customsame" style="display:none;">60-1/4"</option>
									<option value="66" class="customsame" style="display:none;">60-1/2"</option>
									<option value="66" class="customsame" style="display:none;">60-3/4"</option>
									<option value="66" class="customsame" style="display:none;">61"</option>
									<option value="66" class="customsame" style="display:none;">61-1/4"</option>
									<option value="66" class="customsame" style="display:none;">61-1/2"</option>
									<option value="66" class="customsame" style="display:none;">61-3/4"</option>
									<option value="66" class="customsame" style="display:none;">62"</option>
									<option value="66" class="customsame" style="display:none;">62-1/4"</option>
									<option value="66" class="customsame" style="display:none;">62-1/2"</option>
									<option value="66" class="customsame" style="display:none;">62-3/4"</option>
									<option value="66" class="customsame" style="display:none;">63"</option>
									<option value="66" class="customsame" style="display:none;">63-1/4"</option>
									<option value="66" class="customsame" style="display:none;">63-1/2"</option>
									<option value="66" class="customsame" style="display:none;">63-3/4"</option>
									<option value="66" class="customsame" style="display:none;">64"</option>
									<option value="66" class="customsame" style="display:none;">64-1/4"</option>
									<option value="66" class="customsame" style="display:none;">64-1/2"</option>
									<option value="66" class="customsame" style="display:none;">64-3/4"</option>
									<option value="66" class="customsame" style="display:none;">65"</option>
									<option value="66" class="customsame" style="display:none;">65-1/4"</option>
									<option value="66" class="customsame" style="display:none;">65-1/2"</option>
									<option value="66" class="customsame" style="display:none;">65-3/4"</option>
									<option value="66" class="customsame" style="display:none;">66"</option>
									<option value="66" class="customsame" style="display:none;">66-1/4"</option>
									<option value="66" class="customsame" style="display:none;">66-1/2"</option>
									<option value="66" class="customsame" style="display:none;">66-3/4"</option>
									<option value="66" class="customsame" style="display:none;">67"</option>
									<option value="66" class="customsame" style="display:none;">67-1/4"</option>
									<option value="66" class="customsame" style="display:none;">67-1/2"</option>
									<option value="66" class="customsame" style="display:none;">67-3/4"</option>
									<option value="66" class="customsame" style="display:none;">68"</option>
									<option value="66" class="customsame" style="display:none;">68-1/4"</option>
									<option value="66" class="customsame" style="display:none;">68-1/2"</option>
									<option value="66" class="customsame" style="display:none;">68-3/4"</option>
									<option value="66" class="customsame" style="display:none;">69"</option>
									<option value="66" class="customsame" style="display:none;">69-1/4"</option>
									<option value="66" class="customsame" style="display:none;">69-1/2"</option>
									<option value="66" class="customsame" style="display:none;">69-3/4"</option>
									<option value="66" class="customsame" style="display:none;">70"</option>
									<option value="66" class="customsame" style="display:none;">70-1/4"</option>
									<option value="66" class="customsame" style="display:none;">70-1/2"</option>
									<option value="66" class="customsame" style="display:none;">70-3/4"</option>
									<option value="66" class="customsame" style="display:none;">71"</option>
									<option value="66" class="customsame" style="display:none;">71-1/4"</option>
									<option value="66" class="customsame" style="display:none;">71-1/2"</option>
									<option value="66" class="customsame" style="display:none;">71-3/4"</option>
									<option value="66" class="customsame" style="display:none;">72"</option>
									<option value="66" class="customsame" style="display:none;">72-1/4"</option>
									<option value="66" class="customsame" style="display:none;">72-1/2"</option>
									<option value="66" class="customsame" style="display:none;">72-3/4"</option>
									<option value="66" class="customsame" style="display:none;">73"</option>
									<option value="66" class="customsame" style="display:none;">73-1/4"</option>
									<option value="66" class="customsame" style="display:none;">73-1/2"</option>
									<option value="66" class="customsame" style="display:none;">73-3/4"</option>
									<option value="66" class="customsame" style="display:none;">74"</option>
									<option value="66" class="customsame" style="display:none;">74-1/4"</option>
									<option value="66" class="customsame" style="display:none;">74-1/2"</option>
									<option value="66" class="customsame" style="display:none;">74-3/4"</option>
									<option value="66" class="customsame" style="display:none;">75"</option>
                                </select>
								</span>
                            </td>
                            <td>
					   			<span id="errormsgfirstname">
                            		<img id="glass_b_err" src="img/iconCheckOff.gif">
                        		</span>
                			</td>
                        </tr>';
                }
                if($_REQUEST['type']=='3BAY'){
                    echo '<tr>
                            <td class="test-lenght3baya"><a class="thickbox" href="images/'.$fn.'/3bay_faceA.jpg"><h1>Face Length A</h1></a></td>
                            <td>
							<span id="face_length_a_span">
                                <select name="face_length_a" id="face_length_a" onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                                    <option value="select">Select</option>';
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
						if($facelengthA=='48')
						{
						echo'<option value="48" selected>48&quot;</option>';	
						}
						else{
						echo'<option value="48">48&quot;</option>';	
						}
						if($facelengthA=='54')
						{
						echo'<option value="54" selected>54&quot;</option>';	
						}
						else{
						echo'<option value="54">54&quot;</option>';	
						}	

						if($facelengthA=='60')
						{
						echo'<option value="60" selected>60&quot;</option>';	
						}
						else{
						echo'<option value="60">60&quot;</option>';	
						}	
						
                       if($facelengthA=='66')
						{
						echo'<option value="66" selected>66&quot;</option>';	
						}
						else{
						echo'<option value="66">66&quot;</option>';	
						}	
							echo'<option value="custom">Custom</option>
                                </select>
								</span>
                            </td>
                            <td width="11%">
                                <span id="errormsgfirstname">
                            		<img id="glass_a_err" src="img/iconCheckOff.gif">
                        		</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="test-lenght4bayb"><a class="thickbox" href="images/'.$fn.'/3bay_faceB.jpg" ><h1>Face Length B</h1></a></td>
                            <td>
								<span id="face_length_b_span">
                                <select name="face_length_b" id="face_length_b" onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                                    <option value="select" class="instock">Select</option>
									<option value="24" class="customsame" style="display:none;">8"</option>';
						if($facelengthB=='24')
						{
						echo'<option value="24" selected class="instock" style="display: block;">24&quot;</option>';	
						}
						else{
						echo'<option value="24" class="instock" style="display: block;">24&quot;</option>';	
						}
						if($facelengthB=='30')
						{
						echo'<option value="30" selected class="instock" style="display: block;">30&quot;</option>';	
						}
						else{
						echo'<option value="30" class="instock" style="display: block;">30&quot;</option>';	
						}
						if($facelengthB=='36')
						{
						echo'<option value="36" selected class="instock" style="display: block;">36&quot;</option>';	
						}
						else{
						echo'<option value="36" class="instock" style="display: block;">36&quot;</option>';	
						}
						if($facelengthB=='42')
						{
						echo'<option value="42" selected class="instock" style="display: block;">42&quot;</option>';	
						}
						else{
						echo'<option value="42" class="instock" style="display: block;">42&quot;</option>';	
						}
						if($facelengthB=='48')
						{
						echo'<option value="48" selected class="instock" style="display: block;">48&quot;</option>';	
						}
						else{
						echo'<option value="48" class="instock" style="display: block;">48&quot;</option>';	
						}
						if($facelengthB=='54')
						{
						echo'<option value="54" selected class="instock" style="display: block;">54&quot;</option>';	
						}
						else{
						echo'<option value="54" class="instock" style="display: block;">54&quot;</option>';	
						}	

						if($facelengthB=='60')
						{
						echo'<option value="60" selected class="instock" style="display: block;">60&quot;</option>';	
						}
						else{
						echo'<option value="60" class="instock" style="display: block;">60&quot;</option>';	
						}	
						
                       if($facelengthB=='66')
						{
						echo'<option value="66" selected class="instock" style="display: block;">66&quot;</option>';	
						}
						else{
						echo'<option value="66" class="instock" style="display: block;">66&quot;</option>';	
						}	
							echo'<option value="custom" class="instock" style="display: block;">Custom</option>
									
									<option value="24" class="customsame" style="display:none;">8-1/4"</option>
									<option value="24" class="customsame" style="display:none;">8-1/2"</option>
									<option value="24" class="customsame" style="display:none;">8-3/4"</option>
									<option value="24" class="customsame" style="display:none;">9"</option>
									<option value="24" class="customsame" style="display:none;">9-1/4"</option>
									<option value="24" class="customsame" style="display:none;">9-1/2"</option>
									<option value="24" class="customsame" style="display:none;">9-3/4"</option>
									<option value="24" class="customsame" style="display:none;">10"</option>
									<option value="24" class="customsame" style="display:none;">10-1/4"</option>
									<option value="24" class="customsame" style="display:none;">10-1/2"</option>
									<option value="24" class="customsame" style="display:none;">10-3/4"</option>
									<option value="24" class="customsame" style="display:none;">11"</option>
									<option value="24" class="customsame" style="display:none;">11-1/4"</option>
									<option value="24" class="customsame" style="display:none;">11-1/2"</option>
									<option value="24" class="customsame" style="display:none;">11-3/4"</option>
									<option value="24" class="customsame" style="display:none;">12"</option>
									<option value="24" class="customsame" style="display:none;">12-1/4"</option>
									<option value="24" class="customsame" style="display:none;">12-1/2"</option>
									<option value="24" class="customsame" style="display:none;">12-3/4"</option>
									<option value="24" class="customsame" style="display:none;">13"</option>
									<option value="24" class="customsame" style="display:none;">13-1/4"</option>
									<option value="24" class="customsame" style="display:none;">13-1/2"</option>
									<option value="24" class="customsame" style="display:none;">13-3/4"</option>
									<option value="24" class="customsame" style="display:none;">14"</option>
									<option value="24" class="customsame" style="display:none;">14-1/4"</option>
									<option value="24" class="customsame" style="display:none;">14-1/2"</option>
									<option value="24" class="customsame" style="display:none;">14-3/4"</option>
									<option value="24" class="customsame" style="display:none;">15"</option>
									<option value="24" class="customsame" style="display:none;">15-1/4"</option>
									<option value="24" class="customsame" style="display:none;">15-1/2"</option>
									<option value="24" class="customsame" style="display:none;">15-3/4"</option>
									<option value="24" class="customsame" style="display:none;">16"</option>
									<option value="24" class="customsame" style="display:none;">16-1/4"</option>
									<option value="24" class="customsame" style="display:none;">16-1/2"</option>
									<option value="24" class="customsame" style="display:none;">16-3/4"</option>
									<option value="24" class="customsame" style="display:none;">17"</option>
									<option value="24" class="customsame" style="display:none;">17-1/4"</option>
									<option value="24" class="customsame" style="display:none;">17-1/2"</option>
									<option value="24" class="customsame" style="display:none;">17-3/4"</option>
									<option value="24" class="customsame" style="display:none;">18"</option>
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
									<option value="48" class="customsame" style="display:none;">42-1/4"</option>
									<option value="48" class="customsame" style="display:none;">42-1/2"</option>
									<option value="48" class="customsame" style="display:none;">42-3/4"</option>
									<option value="48" class="customsame" style="display:none;">43"</option>
									<option value="48" class="customsame" style="display:none;">43-1/4"</option>
									<option value="48" class="customsame" style="display:none;">43-1/2"</option>
									<option value="48" class="customsame" style="display:none;">43-3/4"</option>
									<option value="48" class="customsame" style="display:none;">44"</option>
									<option value="48" class="customsame" style="display:none;">44-1/4"</option>
									<option value="48" class="customsame" style="display:none;">44-1/2"</option>
									<option value="48" class="customsame" style="display:none;">44-3/4"</option>
									<option value="48" class="customsame" style="display:none;">45"</option>
									<option value="48" class="customsame" style="display:none;">45-1/4"</option>
									<option value="48" class="customsame" style="display:none;">45-1/2"</option>
									<option value="48" class="customsame" style="display:none;">45-3/4"</option>
									<option value="48" class="customsame" style="display:none;">46"</option>
									<option value="48" class="customsame" style="display:none;">46-1/4"</option>
									<option value="48" class="customsame" style="display:none;">46-1/2"</option>
									<option value="48" class="customsame" style="display:none;">46-3/4"</option>
									<option value="48" class="customsame" style="display:none;">47"</option>
									<option value="48" class="customsame" style="display:none;">47-1/4"</option>
									<option value="48" class="customsame" style="display:none;">47-1/2"</option>
									<option value="48" class="customsame" style="display:none;">47-3/4"</option>
									<option value="48" class="customsame" style="display:none;">48"</option>
									<option value="54" class="customsame" style="display:none;">48-1/4"</option>
									<option value="54" class="customsame" style="display:none;">48-1/2"</option>
									<option value="54" class="customsame" style="display:none;">48-3/4"</option>
									<option value="54" class="customsame" style="display:none;">49"</option>
									<option value="54" class="customsame" style="display:none;">49-1/4"</option>
									<option value="54" class="customsame" style="display:none;">49-1/2"</option>
									<option value="54" class="customsame" style="display:none;">49-3/4"</option>
									<option value="54" class="customsame" style="display:none;">50"</option>
									<option value="54" class="customsame" style="display:none;">50-1/4"</option>
									<option value="54" class="customsame" style="display:none;">50-1/2"</option>
									<option value="54" class="customsame" style="display:none;">50-3/4"</option>
									<option value="54" class="customsame" style="display:none;">51"</option>
									<option value="54" class="customsame" style="display:none;">51-1/4"</option>
									<option value="54" class="customsame" style="display:none;">51-1/2"</option>
									<option value="54" class="customsame" style="display:none;">51-3/4"</option>
									<option value="54" class="customsame" style="display:none;">52"</option>
									<option value="54" class="customsame" style="display:none;">52-1/4"</option>
									<option value="54" class="customsame" style="display:none;">52-1/2"</option>
									<option value="54" class="customsame" style="display:none;">52-3/4"</option>
									<option value="54" class="customsame" style="display:none;">53"</option>
									<option value="54" class="customsame" style="display:none;">53-1/4"</option>
									<option value="54" class="customsame" style="display:none;">53-1/2"</option>
									<option value="54" class="customsame" style="display:none;">53-3/4"</option>
									<option value="54" class="customsame" style="display:none;">54"</option>
									<option value="60" class="customsame" style="display:none;">54-1/4"</option>
									<option value="60" class="customsame" style="display:none;">54-1/2"</option>
									<option value="60" class="customsame" style="display:none;">54-3/4"</option>
									<option value="60" class="customsame" style="display:none;">55"</option>
									<option value="60" class="customsame" style="display:none;">55-1/4"</option>
									<option value="60" class="customsame" style="display:none;">55-1/2"</option>
									<option value="60" class="customsame" style="display:none;">55-3/4"</option>
									<option value="60" class="customsame" style="display:none;">56"</option>
									<option value="60" class="customsame" style="display:none;">56-1/4"</option>
									<option value="60" class="customsame" style="display:none;">56-1/2"</option>
									<option value="60" class="customsame" style="display:none;">56-3/4"</option>
									<option value="60" class="customsame" style="display:none;">57"</option>
									<option value="60" class="customsame" style="display:none;">57-1/4"</option>
									<option value="60" class="customsame" style="display:none;">57-1/2"</option>
									<option value="60" class="customsame" style="display:none;">57-3/4"</option>
									<option value="60" class="customsame" style="display:none;">58"</option>
									<option value="60" class="customsame" style="display:none;">58-1/4"</option>
									<option value="60" class="customsame" style="display:none;">58-1/2"</option>
									<option value="60" class="customsame" style="display:none;">58-3/4"</option>
									<option value="60" class="customsame" style="display:none;">59"</option>
									<option value="60" class="customsame" style="display:none;">59-1/4"</option>
									<option value="60" class="customsame" style="display:none;">59-1/2"</option>
									<option value="60" class="customsame" style="display:none;">59-3/4"</option>
									<option value="60" class="customsame" style="display:none;">60"</option>
									<option value="66" class="customsame" style="display:none;">60-1/4"</option>
									<option value="66" class="customsame" style="display:none;">60-1/2"</option>
									<option value="66" class="customsame" style="display:none;">60-3/4"</option>
									<option value="66" class="customsame" style="display:none;">61"</option>
									<option value="66" class="customsame" style="display:none;">61-1/4"</option>
									<option value="66" class="customsame" style="display:none;">61-1/2"</option>
									<option value="66" class="customsame" style="display:none;">61-3/4"</option>
									<option value="66" class="customsame" style="display:none;">62"</option>
									<option value="66" class="customsame" style="display:none;">62-1/4"</option>
									<option value="66" class="customsame" style="display:none;">62-1/2"</option>
									<option value="66" class="customsame" style="display:none;">62-3/4"</option>
									<option value="66" class="customsame" style="display:none;">63"</option>
									<option value="66" class="customsame" style="display:none;">63-1/4"</option>
									<option value="66" class="customsame" style="display:none;">63-1/2"</option>
									<option value="66" class="customsame" style="display:none;">63-3/4"</option>
									<option value="66" class="customsame" style="display:none;">64"</option>
									<option value="66" class="customsame" style="display:none;">64-1/4"</option>
									<option value="66" class="customsame" style="display:none;">64-1/2"</option>
									<option value="66" class="customsame" style="display:none;">64-3/4"</option>
									<option value="66" class="customsame" style="display:none;">65"</option>
									<option value="66" class="customsame" style="display:none;">65-1/4"</option>
									<option value="66" class="customsame" style="display:none;">65-1/2"</option>
									<option value="66" class="customsame" style="display:none;">65-3/4"</option>
									<option value="66" class="customsame" style="display:none;">66"</option>
									<option value="66" class="customsame" style="display:none;">66-1/4"</option>
									<option value="66" class="customsame" style="display:none;">66-1/2"</option>
									<option value="66" class="customsame" style="display:none;">66-3/4"</option>
									<option value="66" class="customsame" style="display:none;">67"</option>
									<option value="66" class="customsame" style="display:none;">67-1/4"</option>
									<option value="66" class="customsame" style="display:none;">67-1/2"</option>
									<option value="66" class="customsame" style="display:none;">67-3/4"</option>
									<option value="66" class="customsame" style="display:none;">68"</option>
									<option value="66" class="customsame" style="display:none;">68-1/4"</option>
									<option value="66" class="customsame" style="display:none;">68-1/2"</option>
									<option value="66" class="customsame" style="display:none;">68-3/4"</option>
									<option value="66" class="customsame" style="display:none;">69"</option>
									<option value="66" class="customsame" style="display:none;">69-1/4"</option>
									<option value="66" class="customsame" style="display:none;">69-1/2"</option>
									<option value="66" class="customsame" style="display:none;">69-3/4"</option>
									<option value="66" class="customsame" style="display:none;">70"</option>
									<option value="66" class="customsame" style="display:none;">70-1/4"</option>
									<option value="66" class="customsame" style="display:none;">70-1/2"</option>
									<option value="66" class="customsame" style="display:none;">70-3/4"</option>
									<option value="66" class="customsame" style="display:none;">71"</option>
									<option value="66" class="customsame" style="display:none;">71-1/4"</option>
									<option value="66" class="customsame" style="display:none;">71-1/2"</option>
									<option value="66" class="customsame" style="display:none;">71-3/4"</option>
									<option value="66" class="customsame" style="display:none;">72"</option>
									<option value="66" class="customsame" style="display:none;">72-1/4"</option>
									<option value="66" class="customsame" style="display:none;">72-1/2"</option>
									<option value="66" class="customsame" style="display:none;">72-3/4"</option>
									<option value="66" class="customsame" style="display:none;">73"</option>
									<option value="66" class="customsame" style="display:none;">73-1/4"</option>
									<option value="66" class="customsame" style="display:none;">73-1/2"</option>
									<option value="66" class="customsame" style="display:none;">73-3/4"</option>
									<option value="66" class="customsame" style="display:none;">74"</option>
									<option value="66" class="customsame" style="display:none;">74-1/4"</option>
									<option value="66" class="customsame" style="display:none;">74-1/2"</option>
									<option value="66" class="customsame" style="display:none;">74-3/4"</option>
									<option value="66" class="customsame" style="display:none;">75"</option>
                                </select>
								</span>
                            </td>
                            <td>
					   			<span id="errormsgfirstname">
                            		<img id="glass_b_err" src="img/iconCheckOff.gif">
                        		</span>
                			</td>
                        </tr>
                        <tr>
                            <td class="test-lenght4bayc"><a class="thickbox" href="images/'.$fn.'/3bay_faceC.jpg" ><h1>Face Length C</h1></a></td>
                            <td>
							<span id="face_length_c_span">
                                <select name="face_length_c" id="face_length_c" onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                                    <option value="select" class="instock">Select</option>
									<option value="24" class="customsame" style="display:none;">8"</option>
								';
						if($facelengthC=='24')
						{
						echo'<option value="24" selected class="instock" style="display: block;">24&quot;</option>';	
						}
						else{
						echo'<option value="24" class="instock" style="display: block;">24&quot;</option>';	
						}
						if($facelengthC=='30')
						{
						echo'<option value="30" selected class="instock" style="display: block;">30&quot;</option>';	
						}
						else{
						echo'<option value="30" class="instock" style="display: block;">30&quot;</option>';	
						}
						if($facelengthC=='36')
						{
						echo'<option value="36" selected class="instock" style="display: block;">36&quot;</option>';	
						}
						else{
						echo'<option value="36" class="instock" style="display: block;">36&quot;</option>';	
						}
						if($facelengthC=='42')
						{
						echo'<option value="42" selected class="instock" style="display: block;">42&quot;</option>';	
						}
						else{
						echo'<option value="42" class="instock" style="display: block;">42&quot;</option>';	
						}
						if($facelengthC=='48')
						{
						echo'<option value="48" selected class="instock" style="display: block;">48&quot;</option>';	
						}
						else{
						echo'<option value="48" class="instock" style="display: block;">48&quot;</option>';	
						}
						if($facelengthC=='54')
						{
						echo'<option value="54" selected class="instock" style="display: block;">54&quot;</option>';	
						}
						else{
						echo'<option value="54" class="instock" style="display: block;">54&quot;</option>';	
						}	

						if($facelengthC=='60')
						{
						echo'<option value="60" selected class="instock" style="display: block;">60&quot;</option>';	
						}
						else{
						echo'<option value="60" class="instock" style="display: block;">60&quot;</option>';	
						}	
						
                       if($facelengthC=='66')
						{
						echo'<option value="66" selected class="instock" style="display: block;">66&quot;</option>';	
						}
						else{
						echo'<option value="66" class="instock" style="display: block;">66&quot;</option>';	
						}	
							echo'
									<option value="custom" class="instock" style="display: block;">Custom</option>
									
									<option value="24" class="customsame" style="display:none;">8-1/4"</option>
									<option value="24" class="customsame" style="display:none;">8-1/2"</option>
									<option value="24" class="customsame" style="display:none;">8-3/4"</option>
									<option value="24" class="customsame" style="display:none;">9"</option>
									<option value="24" class="customsame" style="display:none;">9-1/4"</option>
									<option value="24" class="customsame" style="display:none;">9-1/2"</option>
									<option value="24" class="customsame" style="display:none;">9-3/4"</option>
									<option value="24" class="customsame" style="display:none;">10"</option>
									<option value="24" class="customsame" style="display:none;">10-1/4"</option>
									<option value="24" class="customsame" style="display:none;">10-1/2"</option>
									<option value="24" class="customsame" style="display:none;">10-3/4"</option>
									<option value="24" class="customsame" style="display:none;">11"</option>
									<option value="24" class="customsame" style="display:none;">11-1/4"</option>
									<option value="24" class="customsame" style="display:none;">11-1/2"</option>
									<option value="24" class="customsame" style="display:none;">11-3/4"</option>
									<option value="24" class="customsame" style="display:none;">12"</option>
									<option value="24" class="customsame" style="display:none;">12-1/4"</option>
									<option value="24" class="customsame" style="display:none;">12-1/2"</option>
									<option value="24" class="customsame" style="display:none;">12-3/4"</option>
									<option value="24" class="customsame" style="display:none;">13"</option>
									<option value="24" class="customsame" style="display:none;">13-1/4"</option>
									<option value="24" class="customsame" style="display:none;">13-1/2"</option>
									<option value="24" class="customsame" style="display:none;">13-3/4"</option>
									<option value="24" class="customsame" style="display:none;">14"</option>
									<option value="24" class="customsame" style="display:none;">14-1/4"</option>
									<option value="24" class="customsame" style="display:none;">14-1/2"</option>
									<option value="24" class="customsame" style="display:none;">14-3/4"</option>
									<option value="24" class="customsame" style="display:none;">15"</option>
									<option value="24" class="customsame" style="display:none;">15-1/4"</option>
									<option value="24" class="customsame" style="display:none;">15-1/2"</option>
									<option value="24" class="customsame" style="display:none;">15-3/4"</option>
									<option value="24" class="customsame" style="display:none;">16"</option>
									<option value="24" class="customsame" style="display:none;">16-1/4"</option>
									<option value="24" class="customsame" style="display:none;">16-1/2"</option>
									<option value="24" class="customsame" style="display:none;">16-3/4"</option>
									<option value="24" class="customsame" style="display:none;">17"</option>
									<option value="24" class="customsame" style="display:none;">17-1/4"</option>
									<option value="24" class="customsame" style="display:none;">17-1/2"</option>
									<option value="24" class="customsame" style="display:none;">17-3/4"</option>
									<option value="24" class="customsame" style="display:none;">18"</option>
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
									<option value="48" class="customsame" style="display:none;">42-1/4"</option>
									<option value="48" class="customsame" style="display:none;">42-1/2"</option>
									<option value="48" class="customsame" style="display:none;">42-3/4"</option>
									<option value="48" class="customsame" style="display:none;">43"</option>
									<option value="48" class="customsame" style="display:none;">43-1/4"</option>
									<option value="48" class="customsame" style="display:none;">43-1/2"</option>
									<option value="48" class="customsame" style="display:none;">43-3/4"</option>
									<option value="48" class="customsame" style="display:none;">44"</option>
									<option value="48" class="customsame" style="display:none;">44-1/4"</option>
									<option value="48" class="customsame" style="display:none;">44-1/2"</option>
									<option value="48" class="customsame" style="display:none;">44-3/4"</option>
									<option value="48" class="customsame" style="display:none;">45"</option>
									<option value="48" class="customsame" style="display:none;">45-1/4"</option>
									<option value="48" class="customsame" style="display:none;">45-1/2"</option>
									<option value="48" class="customsame" style="display:none;">45-3/4"</option>
									<option value="48" class="customsame" style="display:none;">46"</option>
									<option value="48" class="customsame" style="display:none;">46-1/4"</option>
									<option value="48" class="customsame" style="display:none;">46-1/2"</option>
									<option value="48" class="customsame" style="display:none;">46-3/4"</option>
									<option value="48" class="customsame" style="display:none;">47"</option>
									<option value="48" class="customsame" style="display:none;">47-1/4"</option>
									<option value="48" class="customsame" style="display:none;">47-1/2"</option>
									<option value="48" class="customsame" style="display:none;">47-3/4"</option>
									<option value="48" class="customsame" style="display:none;">48"</option>
									<option value="54" class="customsame" style="display:none;">48-1/4"</option>
									<option value="54" class="customsame" style="display:none;">48-1/2"</option>
									<option value="54" class="customsame" style="display:none;">48-3/4"</option>
									<option value="54" class="customsame" style="display:none;">49"</option>
									<option value="54" class="customsame" style="display:none;">49-1/4"</option>
									<option value="54" class="customsame" style="display:none;">49-1/2"</option>
									<option value="54" class="customsame" style="display:none;">49-3/4"</option>
									<option value="54" class="customsame" style="display:none;">50"</option>
									<option value="54" class="customsame" style="display:none;">50-1/4"</option>
									<option value="54" class="customsame" style="display:none;">50-1/2"</option>
									<option value="54" class="customsame" style="display:none;">50-3/4"</option>
									<option value="54" class="customsame" style="display:none;">51"</option>
									<option value="54" class="customsame" style="display:none;">51-1/4"</option>
									<option value="54" class="customsame" style="display:none;">51-1/2"</option>
									<option value="54" class="customsame" style="display:none;">51-3/4"</option>
									<option value="54" class="customsame" style="display:none;">52"</option>
									<option value="54" class="customsame" style="display:none;">52-1/4"</option>
									<option value="54" class="customsame" style="display:none;">52-1/2"</option>
									<option value="54" class="customsame" style="display:none;">52-3/4"</option>
									<option value="54" class="customsame" style="display:none;">53"</option>
									<option value="54" class="customsame" style="display:none;">53-1/4"</option>
									<option value="54" class="customsame" style="display:none;">53-1/2"</option>
									<option value="54" class="customsame" style="display:none;">53-3/4"</option>
									<option value="54" class="customsame" style="display:none;">54"</option>
									<option value="60" class="customsame" style="display:none;">54-1/4"</option>
									<option value="60" class="customsame" style="display:none;">54-1/2"</option>
									<option value="60" class="customsame" style="display:none;">54-3/4"</option>
									<option value="60" class="customsame" style="display:none;">55"</option>
									<option value="60" class="customsame" style="display:none;">55-1/4"</option>
									<option value="60" class="customsame" style="display:none;">55-1/2"</option>
									<option value="60" class="customsame" style="display:none;">55-3/4"</option>
									<option value="60" class="customsame" style="display:none;">56"</option>
									<option value="60" class="customsame" style="display:none;">56-1/4"</option>
									<option value="60" class="customsame" style="display:none;">56-1/2"</option>
									<option value="60" class="customsame" style="display:none;">56-3/4"</option>
									<option value="60" class="customsame" style="display:none;">57"</option>
									<option value="60" class="customsame" style="display:none;">57-1/4"</option>
									<option value="60" class="customsame" style="display:none;">57-1/2"</option>
									<option value="60" class="customsame" style="display:none;">57-3/4"</option>
									<option value="60" class="customsame" style="display:none;">58"</option>
									<option value="60" class="customsame" style="display:none;">58-1/4"</option>
									<option value="60" class="customsame" style="display:none;">58-1/2"</option>
									<option value="60" class="customsame" style="display:none;">58-3/4"</option>
									<option value="60" class="customsame" style="display:none;">59"</option>
									<option value="60" class="customsame" style="display:none;">59-1/4"</option>
									<option value="60" class="customsame" style="display:none;">59-1/2"</option>
									<option value="60" class="customsame" style="display:none;">59-3/4"</option>
									<option value="60" class="customsame" style="display:none;">60"</option>
									<option value="66" class="customsame" style="display:none;">60-1/4"</option>
									<option value="66" class="customsame" style="display:none;">60-1/2"</option>
									<option value="66" class="customsame" style="display:none;">60-3/4"</option>
									<option value="66" class="customsame" style="display:none;">61"</option>
									<option value="66" class="customsame" style="display:none;">61-1/4"</option>
									<option value="66" class="customsame" style="display:none;">61-1/2"</option>
									<option value="66" class="customsame" style="display:none;">61-3/4"</option>
									<option value="66" class="customsame" style="display:none;">62"</option>
									<option value="66" class="customsame" style="display:none;">62-1/4"</option>
									<option value="66" class="customsame" style="display:none;">62-1/2"</option>
									<option value="66" class="customsame" style="display:none;">62-3/4"</option>
									<option value="66" class="customsame" style="display:none;">63"</option>
									<option value="66" class="customsame" style="display:none;">63-1/4"</option>
									<option value="66" class="customsame" style="display:none;">63-1/2"</option>
									<option value="66" class="customsame" style="display:none;">63-3/4"</option>
									<option value="66" class="customsame" style="display:none;">64"</option>
									<option value="66" class="customsame" style="display:none;">64-1/4"</option>
									<option value="66" class="customsame" style="display:none;">64-1/2"</option>
									<option value="66" class="customsame" style="display:none;">64-3/4"</option>
									<option value="66" class="customsame" style="display:none;">65"</option>
									<option value="66" class="customsame" style="display:none;">65-1/4"</option>
									<option value="66" class="customsame" style="display:none;">65-1/2"</option>
									<option value="66" class="customsame" style="display:none;">65-3/4"</option>
									<option value="66" class="customsame" style="display:none;">66"</option>
									<option value="66" class="customsame" style="display:none;">66-1/4"</option>
									<option value="66" class="customsame" style="display:none;">66-1/2"</option>
									<option value="66" class="customsame" style="display:none;">66-3/4"</option>
									<option value="66" class="customsame" style="display:none;">67"</option>
									<option value="66" class="customsame" style="display:none;">67-1/4"</option>
									<option value="66" class="customsame" style="display:none;">67-1/2"</option>
									<option value="66" class="customsame" style="display:none;">67-3/4"</option>
									<option value="66" class="customsame" style="display:none;">68"</option>
									<option value="66" class="customsame" style="display:none;">68-1/4"</option>
									<option value="66" class="customsame" style="display:none;">68-1/2"</option>
									<option value="66" class="customsame" style="display:none;">68-3/4"</option>
									<option value="66" class="customsame" style="display:none;">69"</option>
									<option value="66" class="customsame" style="display:none;">69-1/4"</option>
									<option value="66" class="customsame" style="display:none;">69-1/2"</option>
									<option value="66" class="customsame" style="display:none;">69-3/4"</option>
									<option value="66" class="customsame" style="display:none;">70"</option>
									<option value="66" class="customsame" style="display:none;">70-1/4"</option>
									<option value="66" class="customsame" style="display:none;">70-1/2"</option>
									<option value="66" class="customsame" style="display:none;">70-3/4"</option>
									<option value="66" class="customsame" style="display:none;">71"</option>
									<option value="66" class="customsame" style="display:none;">71-1/4"</option>
									<option value="66" class="customsame" style="display:none;">71-1/2"</option>
									<option value="66" class="customsame" style="display:none;">71-3/4"</option>
									<option value="66" class="customsame" style="display:none;">72"</option>
									<option value="66" class="customsame" style="display:none;">72-1/4"</option>
									<option value="66" class="customsame" style="display:none;">72-1/2"</option>
									<option value="66" class="customsame" style="display:none;">72-3/4"</option>
									<option value="66" class="customsame" style="display:none;">73"</option>
									<option value="66" class="customsame" style="display:none;">73-1/4"</option>
									<option value="66" class="customsame" style="display:none;">73-1/2"</option>
									<option value="66" class="customsame" style="display:none;">73-3/4"</option>
									<option value="66" class="customsame" style="display:none;">74"</option>
									<option value="66" class="customsame" style="display:none;">74-1/4"</option>
									<option value="66" class="customsame" style="display:none;">74-1/2"</option>
									<option value="66" class="customsame" style="display:none;">74-3/4"</option>
									<option value="66" class="customsame" style="display:none;">75"</option>
                                </select>
								</span>
                            </td>
                            <td>
					   			<span id="errormsgfirstname">
                            		<img id="glass_c_err" src="img/iconCheckOff.gif">
                        		</span>
                			</td>
                        </tr>';
                } if($_REQUEST['type']=='4BAY'){
                    echo '<tr>
                            <td class="test-lenght3baya"><a class="thickbox" href="images/'.$fn.'/4bay_faceA.jpg"><h1>Face Length A</h1></a></td>
                            <td>
							<span id="face_length_a_span">
                                <select name="face_length_a" id="face_length_a" onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                                    <option value="select">Select</option>
                                    ';
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
						if($facelengthA=='48')
						{
						echo'<option value="48" selected>48&quot;</option>';	
						}
						else{
						echo'<option value="48">48&quot;</option>';	
						}
						if($facelengthA=='54')
						{
						echo'<option value="54" selected>54&quot;</option>';	
						}
						else{
						echo'<option value="54">54&quot;</option>';	
						}	

						if($facelengthA=='60')
						{
						echo'<option value="60" selected>60&quot;</option>';	
						}
						else{
						echo'<option value="60">60&quot;</option>';	
						}	
						
                       if($facelengthA=='66')
						{
						echo'<option value="66" selected>66&quot;</option>';	
						}
						else{
						echo'<option value="66">66&quot;</option>';	
						}	
							echo'
										<option value="custom">Custom</option>
                                </select>
								</span>
                            </td>
                            <td width="11%">
                                <span id="errormsgfirstname">
                            		<img id="glass_a_err" src="img/iconCheckOff.gif">
                        		</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="test-lenght4bayb"><a class="thickbox" href="images/'.$fn.'/4bay_faceB.jpg"><h1>Face Length B</h1></a></td>
                            <td>
								<span id="face_length_b_span">
                                <select name="face_length_b" id="face_length_b" onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                                    <option value="select" class="instock">Select</option>
									<option value="24" class="customsame" style="display:none;">8"</option>
									
									';
						if($facelengthB=='24')
						{
						echo'<option value="24" selected class="instock" style="display: block;">24&quot;</option>';	
						}
						else{
						echo'<option value="24" class="instock" style="display: block;">24&quot;</option>';	
						}
						if($facelengthB=='30')
						{
						echo'<option value="30" selected class="instock" style="display: block;">30&quot;</option>';	
						}
						else{
						echo'<option value="30" class="instock" style="display: block;">30&quot;</option>';	
						}
						if($facelengthB=='36')
						{
						echo'<option value="36" selected class="instock" style="display: block;">36&quot;</option>';	
						}
						else{
						echo'<option value="36" class="instock" style="display: block;">36&quot;</option>';	
						}
						if($facelengthB=='42')
						{
						echo'<option value="42" selected class="instock" style="display: block;">42&quot;</option>';	
						}
						else{
						echo'<option value="42" class="instock" style="display: block;">42&quot;</option>';	
						}
						if($facelengthB=='48')
						{
						echo'<option value="48" selected class="instock" style="display: block;">48&quot;</option>';	
						}
						else{
						echo'<option value="48" class="instock" style="display: block;">48&quot;</option>';	
						}
						if($facelengthB=='54')
						{
						echo'<option value="54" selected class="instock" style="display: block;">54&quot;</option>';	
						}
						else{
						echo'<option value="54" class="instock" style="display: block;">54&quot;</option>';	
						}	

						if($facelengthB=='60')
						{
						echo'<option value="60" selected class="instock" style="display: block;">60&quot;</option>';	
						}
						else{
						echo'<option value="60" class="instock" style="display: block;">60&quot;</option>';	
						}	
						
                       if($facelengthB=='66')
						{
						echo'<option value="66" selected class="instock" style="display: block;">66&quot;</option>';	
						}
						else{
						echo'<option value="66" class="instock" style="display: block;">66&quot;</option>';	
						}	
							echo'
									
									<option value="custom" class="instock" style="display: block;">Custom</option>
									
									<option value="24" class="customsame" style="display:none;">8-1/4"</option>
									<option value="24" class="customsame" style="display:none;">8-1/2"</option>
									<option value="24" class="customsame" style="display:none;">8-3/4"</option>
									<option value="24" class="customsame" style="display:none;">9"</option>
									<option value="24" class="customsame" style="display:none;">9-1/4"</option>
									<option value="24" class="customsame" style="display:none;">9-1/2"</option>
									<option value="24" class="customsame" style="display:none;">9-3/4"</option>
									<option value="24" class="customsame" style="display:none;">10"</option>
									<option value="24" class="customsame" style="display:none;">10-1/4"</option>
									<option value="24" class="customsame" style="display:none;">10-1/2"</option>
									<option value="24" class="customsame" style="display:none;">10-3/4"</option>
									<option value="24" class="customsame" style="display:none;">11"</option>
									<option value="24" class="customsame" style="display:none;">11-1/4"</option>
									<option value="24" class="customsame" style="display:none;">11-1/2"</option>
									<option value="24" class="customsame" style="display:none;">11-3/4"</option>
									<option value="24" class="customsame" style="display:none;">12"</option>
									<option value="24" class="customsame" style="display:none;">12-1/4"</option>
									<option value="24" class="customsame" style="display:none;">12-1/2"</option>
									<option value="24" class="customsame" style="display:none;">12-3/4"</option>
									<option value="24" class="customsame" style="display:none;">13"</option>
									<option value="24" class="customsame" style="display:none;">13-1/4"</option>
									<option value="24" class="customsame" style="display:none;">13-1/2"</option>
									<option value="24" class="customsame" style="display:none;">13-3/4"</option>
									<option value="24" class="customsame" style="display:none;">14"</option>
									<option value="24" class="customsame" style="display:none;">14-1/4"</option>
									<option value="24" class="customsame" style="display:none;">14-1/2"</option>
									<option value="24" class="customsame" style="display:none;">14-3/4"</option>
									<option value="24" class="customsame" style="display:none;">15"</option>
									<option value="24" class="customsame" style="display:none;">15-1/4"</option>
									<option value="24" class="customsame" style="display:none;">15-1/2"</option>
									<option value="24" class="customsame" style="display:none;">15-3/4"</option>
									<option value="24" class="customsame" style="display:none;">16"</option>
									<option value="24" class="customsame" style="display:none;">16-1/4"</option>
									<option value="24" class="customsame" style="display:none;">16-1/2"</option>
									<option value="24" class="customsame" style="display:none;">16-3/4"</option>
									<option value="24" class="customsame" style="display:none;">17"</option>
									<option value="24" class="customsame" style="display:none;">17-1/4"</option>
									<option value="24" class="customsame" style="display:none;">17-1/2"</option>
									<option value="24" class="customsame" style="display:none;">17-3/4"</option>
									<option value="24" class="customsame" style="display:none;">18"</option>
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
									<option value="48" class="customsame" style="display:none;">42-1/4"</option>
									<option value="48" class="customsame" style="display:none;">42-1/2"</option>
									<option value="48" class="customsame" style="display:none;">42-3/4"</option>
									<option value="48" class="customsame" style="display:none;">43"</option>
									<option value="48" class="customsame" style="display:none;">43-1/4"</option>
									<option value="48" class="customsame" style="display:none;">43-1/2"</option>
									<option value="48" class="customsame" style="display:none;">43-3/4"</option>
									<option value="48" class="customsame" style="display:none;">44"</option>
									<option value="48" class="customsame" style="display:none;">44-1/4"</option>
									<option value="48" class="customsame" style="display:none;">44-1/2"</option>
									<option value="48" class="customsame" style="display:none;">44-3/4"</option>
									<option value="48" class="customsame" style="display:none;">45"</option>
									<option value="48" class="customsame" style="display:none;">45-1/4"</option>
									<option value="48" class="customsame" style="display:none;">45-1/2"</option>
									<option value="48" class="customsame" style="display:none;">45-3/4"</option>
									<option value="48" class="customsame" style="display:none;">46"</option>
									<option value="48" class="customsame" style="display:none;">46-1/4"</option>
									<option value="48" class="customsame" style="display:none;">46-1/2"</option>
									<option value="48" class="customsame" style="display:none;">46-3/4"</option>
									<option value="48" class="customsame" style="display:none;">47"</option>
									<option value="48" class="customsame" style="display:none;">47-1/4"</option>
									<option value="48" class="customsame" style="display:none;">47-1/2"</option>
									<option value="48" class="customsame" style="display:none;">47-3/4"</option>
									<option value="48" class="customsame" style="display:none;">48"</option>
									<option value="54" class="customsame" style="display:none;">48-1/4"</option>
									<option value="54" class="customsame" style="display:none;">48-1/2"</option>
									<option value="54" class="customsame" style="display:none;">48-3/4"</option>
									<option value="54" class="customsame" style="display:none;">49"</option>
									<option value="54" class="customsame" style="display:none;">49-1/4"</option>
									<option value="54" class="customsame" style="display:none;">49-1/2"</option>
									<option value="54" class="customsame" style="display:none;">49-3/4"</option>
									<option value="54" class="customsame" style="display:none;">50"</option>
									<option value="54" class="customsame" style="display:none;">50-1/4"</option>
									<option value="54" class="customsame" style="display:none;">50-1/2"</option>
									<option value="54" class="customsame" style="display:none;">50-3/4"</option>
									<option value="54" class="customsame" style="display:none;">51"</option>
									<option value="54" class="customsame" style="display:none;">51-1/4"</option>
									<option value="54" class="customsame" style="display:none;">51-1/2"</option>
									<option value="54" class="customsame" style="display:none;">51-3/4"</option>
									<option value="54" class="customsame" style="display:none;">52"</option>
									<option value="54" class="customsame" style="display:none;">52-1/4"</option>
									<option value="54" class="customsame" style="display:none;">52-1/2"</option>
									<option value="54" class="customsame" style="display:none;">52-3/4"</option>
									<option value="54" class="customsame" style="display:none;">53"</option>
									<option value="54" class="customsame" style="display:none;">53-1/4"</option>
									<option value="54" class="customsame" style="display:none;">53-1/2"</option>
									<option value="54" class="customsame" style="display:none;">53-3/4"</option>
									<option value="54" class="customsame" style="display:none;">54"</option>
									<option value="60" class="customsame" style="display:none;">54-1/4"</option>
									<option value="60" class="customsame" style="display:none;">54-1/2"</option>
									<option value="60" class="customsame" style="display:none;">54-3/4"</option>
									<option value="60" class="customsame" style="display:none;">55"</option>
									<option value="60" class="customsame" style="display:none;">55-1/4"</option>
									<option value="60" class="customsame" style="display:none;">55-1/2"</option>
									<option value="60" class="customsame" style="display:none;">55-3/4"</option>
									<option value="60" class="customsame" style="display:none;">56"</option>
									<option value="60" class="customsame" style="display:none;">56-1/4"</option>
									<option value="60" class="customsame" style="display:none;">56-1/2"</option>
									<option value="60" class="customsame" style="display:none;">56-3/4"</option>
									<option value="60" class="customsame" style="display:none;">57"</option>
									<option value="60" class="customsame" style="display:none;">57-1/4"</option>
									<option value="60" class="customsame" style="display:none;">57-1/2"</option>
									<option value="60" class="customsame" style="display:none;">57-3/4"</option>
									<option value="60" class="customsame" style="display:none;">58"</option>
									<option value="60" class="customsame" style="display:none;">58-1/4"</option>
									<option value="60" class="customsame" style="display:none;">58-1/2"</option>
									<option value="60" class="customsame" style="display:none;">58-3/4"</option>
									<option value="60" class="customsame" style="display:none;">59"</option>
									<option value="60" class="customsame" style="display:none;">59-1/4"</option>
									<option value="60" class="customsame" style="display:none;">59-1/2"</option>
									<option value="60" class="customsame" style="display:none;">59-3/4"</option>
									<option value="60" class="customsame" style="display:none;">60"</option>
									<option value="66" class="customsame" style="display:none;">60-1/4"</option>
									<option value="66" class="customsame" style="display:none;">60-1/2"</option>
									<option value="66" class="customsame" style="display:none;">60-3/4"</option>
									<option value="66" class="customsame" style="display:none;">61"</option>
									<option value="66" class="customsame" style="display:none;">61-1/4"</option>
									<option value="66" class="customsame" style="display:none;">61-1/2"</option>
									<option value="66" class="customsame" style="display:none;">61-3/4"</option>
									<option value="66" class="customsame" style="display:none;">62"</option>
									<option value="66" class="customsame" style="display:none;">62-1/4"</option>
									<option value="66" class="customsame" style="display:none;">62-1/2"</option>
									<option value="66" class="customsame" style="display:none;">62-3/4"</option>
									<option value="66" class="customsame" style="display:none;">63"</option>
									<option value="66" class="customsame" style="display:none;">63-1/4"</option>
									<option value="66" class="customsame" style="display:none;">63-1/2"</option>
									<option value="66" class="customsame" style="display:none;">63-3/4"</option>
									<option value="66" class="customsame" style="display:none;">64"</option>
									<option value="66" class="customsame" style="display:none;">64-1/4"</option>
									<option value="66" class="customsame" style="display:none;">64-1/2"</option>
									<option value="66" class="customsame" style="display:none;">64-3/4"</option>
									<option value="66" class="customsame" style="display:none;">65"</option>
									<option value="66" class="customsame" style="display:none;">65-1/4"</option>
									<option value="66" class="customsame" style="display:none;">65-1/2"</option>
									<option value="66" class="customsame" style="display:none;">65-3/4"</option>
									<option value="66" class="customsame" style="display:none;">66"</option>
									<option value="66" class="customsame" style="display:none;">66-1/4"</option>
									<option value="66" class="customsame" style="display:none;">66-1/2"</option>
									<option value="66" class="customsame" style="display:none;">66-3/4"</option>
									<option value="66" class="customsame" style="display:none;">67"</option>
									<option value="66" class="customsame" style="display:none;">67-1/4"</option>
									<option value="66" class="customsame" style="display:none;">67-1/2"</option>
									<option value="66" class="customsame" style="display:none;">67-3/4"</option>
									<option value="66" class="customsame" style="display:none;">68"</option>
									<option value="66" class="customsame" style="display:none;">68-1/4"</option>
									<option value="66" class="customsame" style="display:none;">68-1/2"</option>
									<option value="66" class="customsame" style="display:none;">68-3/4"</option>
									<option value="66" class="customsame" style="display:none;">69"</option>
									<option value="66" class="customsame" style="display:none;">69-1/4"</option>
									<option value="66" class="customsame" style="display:none;">69-1/2"</option>
									<option value="66" class="customsame" style="display:none;">69-3/4"</option>
									<option value="66" class="customsame" style="display:none;">70"</option>
									<option value="66" class="customsame" style="display:none;">70-1/4"</option>
									<option value="66" class="customsame" style="display:none;">70-1/2"</option>
									<option value="66" class="customsame" style="display:none;">70-3/4"</option>
									<option value="66" class="customsame" style="display:none;">71"</option>
									<option value="66" class="customsame" style="display:none;">71-1/4"</option>
									<option value="66" class="customsame" style="display:none;">71-1/2"</option>
									<option value="66" class="customsame" style="display:none;">71-3/4"</option>
									<option value="66" class="customsame" style="display:none;">72"</option>
									<option value="66" class="customsame" style="display:none;">72-1/4"</option>
									<option value="66" class="customsame" style="display:none;">72-1/2"</option>
									<option value="66" class="customsame" style="display:none;">72-3/4"</option>
									<option value="66" class="customsame" style="display:none;">73"</option>
									<option value="66" class="customsame" style="display:none;">73-1/4"</option>
									<option value="66" class="customsame" style="display:none;">73-1/2"</option>
									<option value="66" class="customsame" style="display:none;">73-3/4"</option>
									<option value="66" class="customsame" style="display:none;">74"</option>
									<option value="66" class="customsame" style="display:none;">74-1/4"</option>
									<option value="66" class="customsame" style="display:none;">74-1/2"</option>
									<option value="66" class="customsame" style="display:none;">74-3/4"</option>
									<option value="66" class="customsame" style="display:none;">75"</option>
                                </select>
								</span>
                            </td>
                            <td>
					   			<span id="errormsgfirstname">
                            		<img id="glass_b_err" src="img/iconCheckOff.gif">
                        		</span>
                			</td>
                        </tr>
                        <tr>
                            <td class="test-lenght4bayc"><a class="thickbox" href="images/'.$fn.'/4bay_faceC.jpg" ><h1>Face Length C</h1></a></td>
                            <td>
							<span id="face_length_c_span">
                                <select name="face_length_c" id="face_length_c" onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                                    <option value="select" class="instock">Select</option>
									<option value="24" class="customsame" style="display:none;">8"</option>
									
									';
						if($facelengthC=='24')
						{
						echo'<option value="24" selected class="instock" style="display: block;">24&quot;</option>';	
						}
						else{
						echo'<option value="24" class="instock" style="display: block;">24&quot;</option>';	
						}
						if($facelengthC=='30')
						{
						echo'<option value="30" selected class="instock" style="display: block;">30&quot;</option>';	
						}
						else{
						echo'<option value="30" class="instock" style="display: block;">30&quot;</option>';	
						}
						if($facelengthC=='36')
						{
						echo'<option value="36" selected class="instock" style="display: block;">36&quot;</option>';	
						}
						else{
						echo'<option value="36" class="instock" style="display: block;">36&quot;</option>';	
						}
						if($facelengthC=='42')
						{
						echo'<option value="42" selected class="instock" style="display: block;">42&quot;</option>';	
						}
						else{
						echo'<option value="42" class="instock" style="display: block;">42&quot;</option>';	
						}
						if($facelengthC=='48')
						{
						echo'<option value="48" selected class="instock" style="display: block;">48&quot;</option>';	
						}
						else{
						echo'<option value="48" class="instock" style="display: block;">48&quot;</option>';	
						}
						if($facelengthC=='54')
						{
						echo'<option value="54" selected class="instock" style="display: block;">54&quot;</option>';	
						}
						else{
						echo'<option value="54" class="instock" style="display: block;">54&quot;</option>';	
						}	

						if($facelengthC=='60')
						{
						echo'<option value="60" selected class="instock" style="display: block;">60&quot;</option>';	
						}
						else{
						echo'<option value="60" class="instock" style="display: block;">60&quot;</option>';	
						}	
						
                       if($facelengthC=='66')
						{
						echo'<option value="66" selected class="instock" style="display: block;">66&quot;</option>';	
						}
						else{
						echo'<option value="66" class="instock" style="display: block;">66&quot;</option>';	
						}	
							echo'
									
									<option value="custom" class="instock" style="display: block;">Custom</option>
									
									<option value="24" class="customsame" style="display:none;">8-1/4"</option>
									<option value="24" class="customsame" style="display:none;">8-1/2"</option>
									<option value="24" class="customsame" style="display:none;">8-3/4"</option>
									<option value="24" class="customsame" style="display:none;">9"</option>
									<option value="24" class="customsame" style="display:none;">9-1/4"</option>
									<option value="24" class="customsame" style="display:none;">9-1/2"</option>
									<option value="24" class="customsame" style="display:none;">9-3/4"</option>
									<option value="24" class="customsame" style="display:none;">10"</option>
									<option value="24" class="customsame" style="display:none;">10-1/4"</option>
									<option value="24" class="customsame" style="display:none;">10-1/2"</option>
									<option value="24" class="customsame" style="display:none;">10-3/4"</option>
									<option value="24" class="customsame" style="display:none;">11"</option>
									<option value="24" class="customsame" style="display:none;">11-1/4"</option>
									<option value="24" class="customsame" style="display:none;">11-1/2"</option>
									<option value="24" class="customsame" style="display:none;">11-3/4"</option>
									<option value="24" class="customsame" style="display:none;">12"</option>
									<option value="24" class="customsame" style="display:none;">12-1/4"</option>
									<option value="24" class="customsame" style="display:none;">12-1/2"</option>
									<option value="24" class="customsame" style="display:none;">12-3/4"</option>
									<option value="24" class="customsame" style="display:none;">13"</option>
									<option value="24" class="customsame" style="display:none;">13-1/4"</option>
									<option value="24" class="customsame" style="display:none;">13-1/2"</option>
									<option value="24" class="customsame" style="display:none;">13-3/4"</option>
									<option value="24" class="customsame" style="display:none;">14"</option>
									<option value="24" class="customsame" style="display:none;">14-1/4"</option>
									<option value="24" class="customsame" style="display:none;">14-1/2"</option>
									<option value="24" class="customsame" style="display:none;">14-3/4"</option>
									<option value="24" class="customsame" style="display:none;">15"</option>
									<option value="24" class="customsame" style="display:none;">15-1/4"</option>
									<option value="24" class="customsame" style="display:none;">15-1/2"</option>
									<option value="24" class="customsame" style="display:none;">15-3/4"</option>
									<option value="24" class="customsame" style="display:none;">16"</option>
									<option value="24" class="customsame" style="display:none;">16-1/4"</option>
									<option value="24" class="customsame" style="display:none;">16-1/2"</option>
									<option value="24" class="customsame" style="display:none;">16-3/4"</option>
									<option value="24" class="customsame" style="display:none;">17"</option>
									<option value="24" class="customsame" style="display:none;">17-1/4"</option>
									<option value="24" class="customsame" style="display:none;">17-1/2"</option>
									<option value="24" class="customsame" style="display:none;">17-3/4"</option>
									<option value="24" class="customsame" style="display:none;">18"</option>
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
									<option value="48" class="customsame" style="display:none;">42-1/4"</option>
									<option value="48" class="customsame" style="display:none;">42-1/2"</option>
									<option value="48" class="customsame" style="display:none;">42-3/4"</option>
									<option value="48" class="customsame" style="display:none;">43"</option>
									<option value="48" class="customsame" style="display:none;">43-1/4"</option>
									<option value="48" class="customsame" style="display:none;">43-1/2"</option>
									<option value="48" class="customsame" style="display:none;">43-3/4"</option>
									<option value="48" class="customsame" style="display:none;">44"</option>
									<option value="48" class="customsame" style="display:none;">44-1/4"</option>
									<option value="48" class="customsame" style="display:none;">44-1/2"</option>
									<option value="48" class="customsame" style="display:none;">44-3/4"</option>
									<option value="48" class="customsame" style="display:none;">45"</option>
									<option value="48" class="customsame" style="display:none;">45-1/4"</option>
									<option value="48" class="customsame" style="display:none;">45-1/2"</option>
									<option value="48" class="customsame" style="display:none;">45-3/4"</option>
									<option value="48" class="customsame" style="display:none;">46"</option>
									<option value="48" class="customsame" style="display:none;">46-1/4"</option>
									<option value="48" class="customsame" style="display:none;">46-1/2"</option>
									<option value="48" class="customsame" style="display:none;">46-3/4"</option>
									<option value="48" class="customsame" style="display:none;">47"</option>
									<option value="48" class="customsame" style="display:none;">47-1/4"</option>
									<option value="48" class="customsame" style="display:none;">47-1/2"</option>
									<option value="48" class="customsame" style="display:none;">47-3/4"</option>
									<option value="48" class="customsame" style="display:none;">48"</option>
									<option value="54" class="customsame" style="display:none;">48-1/4"</option>
									<option value="54" class="customsame" style="display:none;">48-1/2"</option>
									<option value="54" class="customsame" style="display:none;">48-3/4"</option>
									<option value="54" class="customsame" style="display:none;">49"</option>
									<option value="54" class="customsame" style="display:none;">49-1/4"</option>
									<option value="54" class="customsame" style="display:none;">49-1/2"</option>
									<option value="54" class="customsame" style="display:none;">49-3/4"</option>
									<option value="54" class="customsame" style="display:none;">50"</option>
									<option value="54" class="customsame" style="display:none;">50-1/4"</option>
									<option value="54" class="customsame" style="display:none;">50-1/2"</option>
									<option value="54" class="customsame" style="display:none;">50-3/4"</option>
									<option value="54" class="customsame" style="display:none;">51"</option>
									<option value="54" class="customsame" style="display:none;">51-1/4"</option>
									<option value="54" class="customsame" style="display:none;">51-1/2"</option>
									<option value="54" class="customsame" style="display:none;">51-3/4"</option>
									<option value="54" class="customsame" style="display:none;">52"</option>
									<option value="54" class="customsame" style="display:none;">52-1/4"</option>
									<option value="54" class="customsame" style="display:none;">52-1/2"</option>
									<option value="54" class="customsame" style="display:none;">52-3/4"</option>
									<option value="54" class="customsame" style="display:none;">53"</option>
									<option value="54" class="customsame" style="display:none;">53-1/4"</option>
									<option value="54" class="customsame" style="display:none;">53-1/2"</option>
									<option value="54" class="customsame" style="display:none;">53-3/4"</option>
									<option value="54" class="customsame" style="display:none;">54"</option>
									<option value="60" class="customsame" style="display:none;">54-1/4"</option>
									<option value="60" class="customsame" style="display:none;">54-1/2"</option>
									<option value="60" class="customsame" style="display:none;">54-3/4"</option>
									<option value="60" class="customsame" style="display:none;">55"</option>
									<option value="60" class="customsame" style="display:none;">55-1/4"</option>
									<option value="60" class="customsame" style="display:none;">55-1/2"</option>
									<option value="60" class="customsame" style="display:none;">55-3/4"</option>
									<option value="60" class="customsame" style="display:none;">56"</option>
									<option value="60" class="customsame" style="display:none;">56-1/4"</option>
									<option value="60" class="customsame" style="display:none;">56-1/2"</option>
									<option value="60" class="customsame" style="display:none;">56-3/4"</option>
									<option value="60" class="customsame" style="display:none;">57"</option>
									<option value="60" class="customsame" style="display:none;">57-1/4"</option>
									<option value="60" class="customsame" style="display:none;">57-1/2"</option>
									<option value="60" class="customsame" style="display:none;">57-3/4"</option>
									<option value="60" class="customsame" style="display:none;">58"</option>
									<option value="60" class="customsame" style="display:none;">58-1/4"</option>
									<option value="60" class="customsame" style="display:none;">58-1/2"</option>
									<option value="60" class="customsame" style="display:none;">58-3/4"</option>
									<option value="60" class="customsame" style="display:none;">59"</option>
									<option value="60" class="customsame" style="display:none;">59-1/4"</option>
									<option value="60" class="customsame" style="display:none;">59-1/2"</option>
									<option value="60" class="customsame" style="display:none;">59-3/4"</option>
									<option value="60" class="customsame" style="display:none;">60"</option>
									<option value="66" class="customsame" style="display:none;">60-1/4"</option>
									<option value="66" class="customsame" style="display:none;">60-1/2"</option>
									<option value="66" class="customsame" style="display:none;">60-3/4"</option>
									<option value="66" class="customsame" style="display:none;">61"</option>
									<option value="66" class="customsame" style="display:none;">61-1/4"</option>
									<option value="66" class="customsame" style="display:none;">61-1/2"</option>
									<option value="66" class="customsame" style="display:none;">61-3/4"</option>
									<option value="66" class="customsame" style="display:none;">62"</option>
									<option value="66" class="customsame" style="display:none;">62-1/4"</option>
									<option value="66" class="customsame" style="display:none;">62-1/2"</option>
									<option value="66" class="customsame" style="display:none;">62-3/4"</option>
									<option value="66" class="customsame" style="display:none;">63"</option>
									<option value="66" class="customsame" style="display:none;">63-1/4"</option>
									<option value="66" class="customsame" style="display:none;">63-1/2"</option>
									<option value="66" class="customsame" style="display:none;">63-3/4"</option>
									<option value="66" class="customsame" style="display:none;">64"</option>
									<option value="66" class="customsame" style="display:none;">64-1/4"</option>
									<option value="66" class="customsame" style="display:none;">64-1/2"</option>
									<option value="66" class="customsame" style="display:none;">64-3/4"</option>
									<option value="66" class="customsame" style="display:none;">65"</option>
									<option value="66" class="customsame" style="display:none;">65-1/4"</option>
									<option value="66" class="customsame" style="display:none;">65-1/2"</option>
									<option value="66" class="customsame" style="display:none;">65-3/4"</option>
									<option value="66" class="customsame" style="display:none;">66"</option>
									<option value="66" class="customsame" style="display:none;">66-1/4"</option>
									<option value="66" class="customsame" style="display:none;">66-1/2"</option>
									<option value="66" class="customsame" style="display:none;">66-3/4"</option>
									<option value="66" class="customsame" style="display:none;">67"</option>
									<option value="66" class="customsame" style="display:none;">67-1/4"</option>
									<option value="66" class="customsame" style="display:none;">67-1/2"</option>
									<option value="66" class="customsame" style="display:none;">67-3/4"</option>
									<option value="66" class="customsame" style="display:none;">68"</option>
									<option value="66" class="customsame" style="display:none;">68-1/4"</option>
									<option value="66" class="customsame" style="display:none;">68-1/2"</option>
									<option value="66" class="customsame" style="display:none;">68-3/4"</option>
									<option value="66" class="customsame" style="display:none;">69"</option>
									<option value="66" class="customsame" style="display:none;">69-1/4"</option>
									<option value="66" class="customsame" style="display:none;">69-1/2"</option>
									<option value="66" class="customsame" style="display:none;">69-3/4"</option>
									<option value="66" class="customsame" style="display:none;">70"</option>
									<option value="66" class="customsame" style="display:none;">70-1/4"</option>
									<option value="66" class="customsame" style="display:none;">70-1/2"</option>
									<option value="66" class="customsame" style="display:none;">70-3/4"</option>
									<option value="66" class="customsame" style="display:none;">71"</option>
									<option value="66" class="customsame" style="display:none;">71-1/4"</option>
									<option value="66" class="customsame" style="display:none;">71-1/2"</option>
									<option value="66" class="customsame" style="display:none;">71-3/4"</option>
									<option value="66" class="customsame" style="display:none;">72"</option>
									<option value="66" class="customsame" style="display:none;">72-1/4"</option>
									<option value="66" class="customsame" style="display:none;">72-1/2"</option>
									<option value="66" class="customsame" style="display:none;">72-3/4"</option>
									<option value="66" class="customsame" style="display:none;">73"</option>
									<option value="66" class="customsame" style="display:none;">73-1/4"</option>
									<option value="66" class="customsame" style="display:none;">73-1/2"</option>
									<option value="66" class="customsame" style="display:none;">73-3/4"</option>
									<option value="66" class="customsame" style="display:none;">74"</option>
									<option value="66" class="customsame" style="display:none;">74-1/4"</option>
									<option value="66" class="customsame" style="display:none;">74-1/2"</option>
									<option value="66" class="customsame" style="display:none;">74-3/4"</option>
									<option value="66" class="customsame" style="display:none;">75"</option>
                                </select>
								</span>
                            </td>
                            <td>
					   			<span id="errormsgfirstname">
                            		<img id="glass_c_err" src="img/iconCheckOff.gif">
                        		</span>
                			</td>
                        </tr><tr>
                            <td class="test-lenght4bayd"><a class="thickbox" href="images/'.$fn.'/4bay_faceD.jpg"><h1>Face Length D</h1></a></td>
                            <td>
							<span id="face_length_d_span">
                                <select name="face_length_d" id="face_length_d" onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                                    <option value="select" class="instock">Select</option>
									<option value="24" class="customsame" style="display:none;">8"</option>
									';
						if($facelengthD=='24')
						{
						echo'<option value="24" selected class="instock" style="display: block;">24&quot;</option>';	
						}
						else{
						echo'<option value="24" class="instock" style="display: block;">24&quot;</option>';	
						}
						if($facelengthD=='30')
						{
						echo'<option value="30" selected class="instock" style="display: block;">30&quot;</option>';	
						}
						else{
						echo'<option value="30" class="instock" style="display: block;">30&quot;</option>';	
						}
						if($facelengthD=='36')
						{
						echo'<option value="36" selected class="instock" style="display: block;">36&quot;</option>';	
						}
						else{
						echo'<option value="36" class="instock" style="display: block;">36&quot;</option>';	
						}
						if($facelengthD=='42')
						{
						echo'<option value="42" selected class="instock" style="display: block;">42&quot;</option>';	
						}
						else{
						echo'<option value="42" class="instock" style="display: block;">42&quot;</option>';	
						}
						if($facelengthD=='48')
						{
						echo'<option value="48" selected class="instock" style="display: block;">48&quot;</option>';	
						}
						else{
						echo'<option value="48" class="instock" style="display: block;">48&quot;</option>';	
						}
						if($facelengthD=='54')
						{
						echo'<option value="54" selected class="instock" style="display: block;">54&quot;</option>';	
						}
						else{
						echo'<option value="54" class="instock" style="display: block;">54&quot;</option>';	
						}	

						if($facelengthD=='60')
						{
						echo'<option value="60" selected class="instock" style="display: block;">60&quot;</option>';	
						}
						else{
						echo'<option value="60" class="instock" style="display: block;">60&quot;</option>';	
						}	
						
                       if($facelengthD=='66')
						{
						echo'<option value="66" selected class="instock" style="display: block;">66&quot;</option>';	
						}
						else{
						echo'<option value="66" class="instock" style="display: block;">66&quot;</option>';	
						}	
							echo'
									<option value="custom" class="instock" style="display: block;">Custom</option>
									
									<option value="24" class="customsame" style="display:none;">8-1/4"</option>
									<option value="24" class="customsame" style="display:none;">8-1/2"</option>
									<option value="24" class="customsame" style="display:none;">8-3/4"</option>
									<option value="24" class="customsame" style="display:none;">9"</option>
									<option value="24" class="customsame" style="display:none;">9-1/4"</option>
									<option value="24" class="customsame" style="display:none;">9-1/2"</option>
									<option value="24" class="customsame" style="display:none;">9-3/4"</option>
									<option value="24" class="customsame" style="display:none;">10"</option>
									<option value="24" class="customsame" style="display:none;">10-1/4"</option>
									<option value="24" class="customsame" style="display:none;">10-1/2"</option>
									<option value="24" class="customsame" style="display:none;">10-3/4"</option>
									<option value="24" class="customsame" style="display:none;">11"</option>
									<option value="24" class="customsame" style="display:none;">11-1/4"</option>
									<option value="24" class="customsame" style="display:none;">11-1/2"</option>
									<option value="24" class="customsame" style="display:none;">11-3/4"</option>
									<option value="24" class="customsame" style="display:none;">12"</option>
									<option value="24" class="customsame" style="display:none;">12-1/4"</option>
									<option value="24" class="customsame" style="display:none;">12-1/2"</option>
									<option value="24" class="customsame" style="display:none;">12-3/4"</option>
									<option value="24" class="customsame" style="display:none;">13"</option>
									<option value="24" class="customsame" style="display:none;">13-1/4"</option>
									<option value="24" class="customsame" style="display:none;">13-1/2"</option>
									<option value="24" class="customsame" style="display:none;">13-3/4"</option>
									<option value="24" class="customsame" style="display:none;">14"</option>
									<option value="24" class="customsame" style="display:none;">14-1/4"</option>
									<option value="24" class="customsame" style="display:none;">14-1/2"</option>
									<option value="24" class="customsame" style="display:none;">14-3/4"</option>
									<option value="24" class="customsame" style="display:none;">15"</option>
									<option value="24" class="customsame" style="display:none;">15-1/4"</option>
									<option value="24" class="customsame" style="display:none;">15-1/2"</option>
									<option value="24" class="customsame" style="display:none;">15-3/4"</option>
									<option value="24" class="customsame" style="display:none;">16"</option>
									<option value="24" class="customsame" style="display:none;">16-1/4"</option>
									<option value="24" class="customsame" style="display:none;">16-1/2"</option>
									<option value="24" class="customsame" style="display:none;">16-3/4"</option>
									<option value="24" class="customsame" style="display:none;">17"</option>
									<option value="24" class="customsame" style="display:none;">17-1/4"</option>
									<option value="24" class="customsame" style="display:none;">17-1/2"</option>
									<option value="24" class="customsame" style="display:none;">17-3/4"</option>
									<option value="24" class="customsame" style="display:none;">18"</option>
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
									<option value="48" class="customsame" style="display:none;">42-1/4"</option>
									<option value="48" class="customsame" style="display:none;">42-1/2"</option>
									<option value="48" class="customsame" style="display:none;">42-3/4"</option>
									<option value="48" class="customsame" style="display:none;">43"</option>
									<option value="48" class="customsame" style="display:none;">43-1/4"</option>
									<option value="48" class="customsame" style="display:none;">43-1/2"</option>
									<option value="48" class="customsame" style="display:none;">43-3/4"</option>
									<option value="48" class="customsame" style="display:none;">44"</option>
									<option value="48" class="customsame" style="display:none;">44-1/4"</option>
									<option value="48" class="customsame" style="display:none;">44-1/2"</option>
									<option value="48" class="customsame" style="display:none;">44-3/4"</option>
									<option value="48" class="customsame" style="display:none;">45"</option>
									<option value="48" class="customsame" style="display:none;">45-1/4"</option>
									<option value="48" class="customsame" style="display:none;">45-1/2"</option>
									<option value="48" class="customsame" style="display:none;">45-3/4"</option>
									<option value="48" class="customsame" style="display:none;">46"</option>
									<option value="48" class="customsame" style="display:none;">46-1/4"</option>
									<option value="48" class="customsame" style="display:none;">46-1/2"</option>
									<option value="48" class="customsame" style="display:none;">46-3/4"</option>
									<option value="48" class="customsame" style="display:none;">47"</option>
									<option value="48" class="customsame" style="display:none;">47-1/4"</option>
									<option value="48" class="customsame" style="display:none;">47-1/2"</option>
									<option value="48" class="customsame" style="display:none;">47-3/4"</option>
									<option value="48" class="customsame" style="display:none;">48"</option>
									<option value="54" class="customsame" style="display:none;">48-1/4"</option>
									<option value="54" class="customsame" style="display:none;">48-1/2"</option>
									<option value="54" class="customsame" style="display:none;">48-3/4"</option>
									<option value="54" class="customsame" style="display:none;">49"</option>
									<option value="54" class="customsame" style="display:none;">49-1/4"</option>
									<option value="54" class="customsame" style="display:none;">49-1/2"</option>
									<option value="54" class="customsame" style="display:none;">49-3/4"</option>
									<option value="54" class="customsame" style="display:none;">50"</option>
									<option value="54" class="customsame" style="display:none;">50-1/4"</option>
									<option value="54" class="customsame" style="display:none;">50-1/2"</option>
									<option value="54" class="customsame" style="display:none;">50-3/4"</option>
									<option value="54" class="customsame" style="display:none;">51"</option>
									<option value="54" class="customsame" style="display:none;">51-1/4"</option>
									<option value="54" class="customsame" style="display:none;">51-1/2"</option>
									<option value="54" class="customsame" style="display:none;">51-3/4"</option>
									<option value="54" class="customsame" style="display:none;">52"</option>
									<option value="54" class="customsame" style="display:none;">52-1/4"</option>
									<option value="54" class="customsame" style="display:none;">52-1/2"</option>
									<option value="54" class="customsame" style="display:none;">52-3/4"</option>
									<option value="54" class="customsame" style="display:none;">53"</option>
									<option value="54" class="customsame" style="display:none;">53-1/4"</option>
									<option value="54" class="customsame" style="display:none;">53-1/2"</option>
									<option value="54" class="customsame" style="display:none;">53-3/4"</option>
									<option value="54" class="customsame" style="display:none;">54"</option>
									<option value="60" class="customsame" style="display:none;">54-1/4"</option>
									<option value="60" class="customsame" style="display:none;">54-1/2"</option>
									<option value="60" class="customsame" style="display:none;">54-3/4"</option>
									<option value="60" class="customsame" style="display:none;">55"</option>
									<option value="60" class="customsame" style="display:none;">55-1/4"</option>
									<option value="60" class="customsame" style="display:none;">55-1/2"</option>
									<option value="60" class="customsame" style="display:none;">55-3/4"</option>
									<option value="60" class="customsame" style="display:none;">56"</option>
									<option value="60" class="customsame" style="display:none;">56-1/4"</option>
									<option value="60" class="customsame" style="display:none;">56-1/2"</option>
									<option value="60" class="customsame" style="display:none;">56-3/4"</option>
									<option value="60" class="customsame" style="display:none;">57"</option>
									<option value="60" class="customsame" style="display:none;">57-1/4"</option>
									<option value="60" class="customsame" style="display:none;">57-1/2"</option>
									<option value="60" class="customsame" style="display:none;">57-3/4"</option>
									<option value="60" class="customsame" style="display:none;">58"</option>
									<option value="60" class="customsame" style="display:none;">58-1/4"</option>
									<option value="60" class="customsame" style="display:none;">58-1/2"</option>
									<option value="60" class="customsame" style="display:none;">58-3/4"</option>
									<option value="60" class="customsame" style="display:none;">59"</option>
									<option value="60" class="customsame" style="display:none;">59-1/4"</option>
									<option value="60" class="customsame" style="display:none;">59-1/2"</option>
									<option value="60" class="customsame" style="display:none;">59-3/4"</option>
									<option value="60" class="customsame" style="display:none;">60"</option>
									<option value="66" class="customsame" style="display:none;">60-1/4"</option>
									<option value="66" class="customsame" style="display:none;">60-1/2"</option>
									<option value="66" class="customsame" style="display:none;">60-3/4"</option>
									<option value="66" class="customsame" style="display:none;">61"</option>
									<option value="66" class="customsame" style="display:none;">61-1/4"</option>
									<option value="66" class="customsame" style="display:none;">61-1/2"</option>
									<option value="66" class="customsame" style="display:none;">61-3/4"</option>
									<option value="66" class="customsame" style="display:none;">62"</option>
									<option value="66" class="customsame" style="display:none;">62-1/4"</option>
									<option value="66" class="customsame" style="display:none;">62-1/2"</option>
									<option value="66" class="customsame" style="display:none;">62-3/4"</option>
									<option value="66" class="customsame" style="display:none;">63"</option>
									<option value="66" class="customsame" style="display:none;">63-1/4"</option>
									<option value="66" class="customsame" style="display:none;">63-1/2"</option>
									<option value="66" class="customsame" style="display:none;">63-3/4"</option>
									<option value="66" class="customsame" style="display:none;">64"</option>
									<option value="66" class="customsame" style="display:none;">64-1/4"</option>
									<option value="66" class="customsame" style="display:none;">64-1/2"</option>
									<option value="66" class="customsame" style="display:none;">64-3/4"</option>
									<option value="66" class="customsame" style="display:none;">65"</option>
									<option value="66" class="customsame" style="display:none;">65-1/4"</option>
									<option value="66" class="customsame" style="display:none;">65-1/2"</option>
									<option value="66" class="customsame" style="display:none;">65-3/4"</option>
									<option value="66" class="customsame" style="display:none;">66"</option>
									<option value="66" class="customsame" style="display:none;">66-1/4"</option>
									<option value="66" class="customsame" style="display:none;">66-1/2"</option>
									<option value="66" class="customsame" style="display:none;">66-3/4"</option>
									<option value="66" class="customsame" style="display:none;">67"</option>
									<option value="66" class="customsame" style="display:none;">67-1/4"</option>
									<option value="66" class="customsame" style="display:none;">67-1/2"</option>
									<option value="66" class="customsame" style="display:none;">67-3/4"</option>
									<option value="66" class="customsame" style="display:none;">68"</option>
									<option value="66" class="customsame" style="display:none;">68-1/4"</option>
									<option value="66" class="customsame" style="display:none;">68-1/2"</option>
									<option value="66" class="customsame" style="display:none;">68-3/4"</option>
									<option value="66" class="customsame" style="display:none;">69"</option>
									<option value="66" class="customsame" style="display:none;">69-1/4"</option>
									<option value="66" class="customsame" style="display:none;">69-1/2"</option>
									<option value="66" class="customsame" style="display:none;">69-3/4"</option>
									<option value="66" class="customsame" style="display:none;">70"</option>
									<option value="66" class="customsame" style="display:none;">70-1/4"</option>
									<option value="66" class="customsame" style="display:none;">70-1/2"</option>
									<option value="66" class="customsame" style="display:none;">70-3/4"</option>
									<option value="66" class="customsame" style="display:none;">71"</option>
									<option value="66" class="customsame" style="display:none;">71-1/4"</option>
									<option value="66" class="customsame" style="display:none;">71-1/2"</option>
									<option value="66" class="customsame" style="display:none;">71-3/4"</option>
									<option value="66" class="customsame" style="display:none;">72"</option>
									<option value="66" class="customsame" style="display:none;">72-1/4"</option>
									<option value="66" class="customsame" style="display:none;">72-1/2"</option>
									<option value="66" class="customsame" style="display:none;">72-3/4"</option>
									<option value="66" class="customsame" style="display:none;">73"</option>
									<option value="66" class="customsame" style="display:none;">73-1/4"</option>
									<option value="66" class="customsame" style="display:none;">73-1/2"</option>
									<option value="66" class="customsame" style="display:none;">73-3/4"</option>
									<option value="66" class="customsame" style="display:none;">74"</option>
									<option value="66" class="customsame" style="display:none;">74-1/4"</option>
									<option value="66" class="customsame" style="display:none;">74-1/2"</option>
									<option value="66" class="customsame" style="display:none;">74-3/4"</option>
									<option value="66" class="customsame" style="display:none;">75"</option>
                                </select>
								</span>
                            </td>
                            <td>
					   			<span id="errormsgfirstname">
                            		<img id="glass_d_err" src="img/iconCheckOff.gif">
                        		</span>
                			</td>
                        </tr>';
                }?>
                </table>

            </div>
            <div class="tables-options">
                <table class="test-round" cellpadding="0" cellspacing="0" width="100%"
                    style="border: 1px solid white;border-radius: 5px;">
                    <tr>
                        <td colspan=3>
                            <center>
                                <h2 class="heading_all"><span style="float:left">&nbsp;&nbsp2)</span>Options
                            </center>
                            </h2>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a class="thickbox" href="images/<?php echo $fn?>/End_panels.jpg">
                                <h1>End Panels</h1>
                            </a>
                        </td>
                        <td>
                            <select class="option" id="end_options" tabindex="6" onchange="show_panel_type(this.form)">
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
                        </td>
                        <td width="11%">
                            <span id="errormsgfirstname">
                                <img id="endpan_err" src="img/iconCheckOff.gif">
                            </span>
                        </td>
                    </tr>
                    <tr id="right_lenght">
                        <td class="test-lenght1bay"><a class="thickbox" href='images/<?php echo $fn?>/Right_length.jpg'>
                                <h1 style="margin-left:20px;">Right End</h1>
                            </a></td>
                        <td>
                            <span id="right_length_span">
                                <select name="right_length" onchange="getPriceOfProduct(this.form)">
                                    <option value="select">Select</option>

                                    <?php
							if($right_end=='12')
							{
							echo'<option value="12" selected>12"</option>';	
							}
							else{
							echo'<option value="12">12"</option>';	
							}
							if($right_end=='18')
							{
							echo'<option value="18" selected>18"</option>';	
							}
							else{
							echo'<option value="18">18"</option>';	
							}
							if($right_end=='24')
							{
							echo'<option value="24" selected>24"</option>';	
							}
							else{
							echo'<option value="24">24"</option>';	
							}
							?>
                                    <!--
                            <option value="12">12"</option>
                            <option value="18">18"</option>
                            <option value="24">24"</option>
							-->

                                    <option value="custom">Custom</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span id="errormsgfirstname">
                                <img id="right_err" src="img/iconCheckOff.gif">
                            </span>
                        </td>
                    </tr>
                    <tr id="left_lenght">
                        <td class="test-lenght2baya"><a class="thickbox" href='images/<?php echo $fn?>/Left_length.jpg'>
                                <h1 style="margin-left:20px;">Left End</h1>
                            </a></td>
                        <td>
                            <span id="left_length_span">
                                <select name="left_length" onchange="getPriceOfProduct(this.form)">
                                    <option value="select">Select</option>

                                    <?php
							if($left_end=='12')
							{
							echo'<option value="12" selected>12"</option>';	
							}
							else{
							echo'<option value="12">12"</option>';	
							}
							if($left_end=='18')
							{
							echo'<option value="18" selected>18"</option>';	
							}
							else{
							echo'<option value="18">18"</option>';	
							}
							if($left_end=='24')
							{
							echo'<option value="24" selected>24"</option>';	
							}
							else{
							echo'<option value="24">24"</option>';	
							}
							?>
                                    <!--
                            <option value="12">12"</option>
                            <option value="18">18"</option>
                            <option value="24">24"</option>
							-->

                                    <option value="custom">Custom</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span id="errormsgfirstname">
                                <img id="left_err" src="img/iconCheckOff.gif">
                            </span>
                        </td>
                    </tr>

                    <tr>
					<td class="test-light"><a class="light-bar-pricing" data-model-name="<?=''?>"><h1>Light Bar</h1></a></td>
                        <!-- <td class="test-light"><a class="thickbox"
                                href="light.php?name=<?php echo $videoname;?>&type=adj&KeepThis=true&TB_iframe=true&height=480&width=640">
                                <h1>Light Bar</h1>
                            </a></td> -->
                        <td>
                            <select name="flange_covers" style="margin:4px;"
                                onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
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
                            <!--input type="button" class="flange-covers-image thickbox" value="?" style="width:20px;margin: 0 4px;" onclick="javascript:window.location.href='flang.php?type=adj&KeepThis=true&TB_iframe=true&height=480&width=640'" disabled="disabled"/-->
                            <!-- <a style="width:20px;margin: 0 4px;float: right;" class="thickbox" href='light.php?type=adj&KeepThis=true&TB_iframe=true&height=480&width=640' disabled="disabled"><img src="images/flang.jpg" ></a>   -->
                            <!-- <input type="checkbox" name="flange_covers" value="0" style="margin:4px;" onclick="getPriceOfProduct(this.form);" disabled="disabled"/>     -->
                        </td>
                        <td>
                            <span id="errormsgfirstname">
                                <img id="light_err" src="img/iconCheckOff.gif">
                            </span>
                        </td>
                    </tr>
                    <?php if($category_name=="B950"){
                        		$dsp="display:none";
                        	}else{
                        		$dsp="";
                        	}?>
                    <tr style="<?php echo $dsp;?>">

                        <td class="test-light"><a class="thickbox"
                                href='light_bracket.php?type=adj&KeepThis=true&TB_iframe=true&height=480&width=640'>
                                <h1>Light Bracket</h1>
                            </a></td>
                        <td>
                            <select name="flange_covers_2" onchange="getPriceOfProduct(this.form)" style="width: 68px;">
                                <option value="select">Select</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </td>
                        <td>
                            <span id="errormsgfirstname">
                                <img id="light_br_err" src="img/iconCheckOff.gif">
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td><a class="thickbox" href='images/Finishes.jpg'>
                                <h1>Post Finish</h1>
                            </a>
                        </td>
                        <td>
                            <select name="choose_finish" 
                                onchange="getPriceOfProduct(this.form)">

                                <?php
					if($finish_type=='SS')
					{
					echo'<option value="SS" selected>Brushed Stainless</option>';	
					}
					else{
					echo'<option value="SS">Brushed Stainless</option>';	
					}
					if($finish_type=='CB')
					{
					echo'<option value="PC" selected>Coated Black</option>';	
					}
					else{
					echo'<option value="PC">Coated Black</option>';	
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

        </td>
    </tr>
</table>

<div><h2>&nbsp;</h2></div>
</div>


<div class="info-sub-container3" valign="top" align="center">

    <div class="test-Price div3">

        <table id="cart-form" class="price">

            <tr>
                <td colspan=2>
                    <center>
                        <h2 class="heading_all"><span style="float:left">&nbsp;&nbsp;3)</span>Quote</h2>
                    </center>
                </td>
            </tr>
            <tr>
                <td align="left">Left Post:</td>
                <td id="left-post" align="right">0.00</td>
            </tr>
            <tr>
                <td align="left">Right Post:</td>
                <td id="right-post" align="right">0.00</td>
            </tr>
            <tr>
                <td align="left">Transistions Post:</td>
                <td id="trasition-post" align="right">0.00</td>
            </tr>
            <tr>
                <td align="left">Light:</td>
                <td id="flange-cover" align="right">0.00</td>
            </tr>
            <?php if($category_name=="B950") {?>
            <tr style="position: absolute;right: -44px;top: 0;z-index: 102;display:none;">
                <td align="left">Light Bracket:</td>
                <td id="flange-cover2" align="right">0.00</td>
            </tr><?php }else{?><tr>
                <td align="left">Light Bracket:</td>
                <td id="flange-cover2" align="right">0.00</td>
            </tr>
            <?}?>
            <tr>
                <td align="left">Face Glass:</td>
                <td id="face-glass" align="right">0.00</td>
            </tr>

            <tr>
                <td align="left">Left End Glass:</td>
                <td id="left-Panel" align="right">0.00</td>
            </tr>
            <tr>
                <td align="left">Right End Glass:</td>
                <td id="right-panel" align="right">0.00</td>
            </tr>

            <tr style="color:black;border-top:1.5px solid #000;border-bottom:1.5px solid #000;">
                <td align="left" colspan="2" height="2"></td>
            </tr>
            <tr style="background-color: rgb(121 239 40 / 30%);color:black;">
                <td align="left">Total:</td>
                <td id="total" align="right">0.00</td>
            </tr>
        </table>

    </div>

    <div class="price-icon-wishlist-addtocart">
	<center><h2 class="heading_all" id="addcartandfavorite"><span style="float:left;">&nbsp;&nbsp;&nbsp;4)</span><div class="addcartandfavdiv">Action</div></h2></center>
        

        <!--td><h1>Add to Cart</h1></td-->

        <input type="hidden" id="c_glass_post_val" name="c_glass_post_val" value="" />
        <input type="hidden" id="c_glass_face" name="c_glass_face" value="" />
        <input type="hidden" id="c_glass_face_val" name="c_glass_face_val" value="" />
        <input type="hidden" id="c_glass_mult" name="c_glass_mult" value="1" />

        <input type="hidden" id="c_glass_right" name="c_glass_right" value="" />
        <input type="hidden" id="c_glass_right_val" name="c_glass_right_val" value="" />
        <input type="hidden" id="c_glass_right_mult" name="c_glass_right_mult" value="1" />
        <input type="hidden" id="c_glass_left" name="c_glass_left" value="" />
        <input type="hidden" id="c_glass_left_val" name="c_glass_left_val" value="" />
        <input type="hidden" id="c_glass_left_mult" name="c_glass_left_mult" value="1" />

        <input type="hidden" id="c_glass_adjustable_a" name="c_glass_adjustable_a" value="" />
        <input type="hidden" id="c_glass_adjustable_b" name="c_glass_adjustable_b" value="" />
        <input type="hidden" id="c_glass_adjustable_c" name="c_glass_adjustable_c" value="" />
        <input type="hidden" id="c_glass_adjustable_d" name="c_glass_adjustable_d" value="" />
        <input type="hidden" id="c_glass_adjustable_a_val" name="c_glass_adjustable_a_val" value="" />
        <input type="hidden" id="c_glass_adjustable_b_val" name="c_glass_adjustable_b_val" value="" />
        <input type="hidden" id="c_glass_adjustable_c_val" name="c_glass_adjustable_c_val" value="" />
        <input type="hidden" id="c_glass_adjustable_d_val" name="c_glass_adjustable_d_val" value="" />

        <input type="hidden" id="c_glass_a_mult" name="c_glass_a_mult" value="1" />
        <input type="hidden" id="c_glass_b_mult" name="c_glass_b_mult" value="1" />
        <input type="hidden" id="c_glass_c_mult" name="c_glass_c_mult" value="1" />
        <input type="hidden" id="c_glass_d_mult" name="c_glass_d_mult" value="1" />

        <input type="hidden" id="ckall" name="ckall" value="" />

        <input type="hidden" id="msg" name="msg" value="" />

        <input type="hidden" id="c_glass_post" name="c_glass_post" value="" />

        <input type="hidden" id="c_glass_a" name="c_glass_a" value="" />
        <input type="hidden" id="c_glass_a_val" name="c_glass_a_val" value="" />

        <input type="hidden" id="c_glass_b" name="c_glass_b" value="" />
        <input type="hidden" id="c_glass_b_val" name="c_glass_b_val" value="" />

        <input type="hidden" id="c_glass_c" name="c_glass_c" value="" />
        <input type="hidden" id="c_glass_c_val" name="c_glass_c_val" value="" />

        <input type="hidden" id="c_glass_d" name="c_glass_d" value="" />
        <input type="hidden" id="c_glass_d_val" name="c_glass_d_val" value="" />

        <input type="hidden" id="c_glass_a_light" name="c_glass_a_light" value="" />
        <input type="hidden" id="c_glass_a_val_light" name="c_glass_a_val_light" value="" />
        <input type="hidden" id="c_glass_b_light" name="c_glass_b_light" value="" />
        <input type="hidden" id="c_glass_b_val_light" name="c_glass_b_val_light" value="" />
        <input type="hidden" id="c_glass_c_light" name="c_glass_c_light" value="" />
        <input type="hidden" id="c_glass_c_val_light" name="c_glass_c_val_light" value="" />
        <input type="hidden" id="c_glass_d_light" name="c_glass_d_light" value="" />
        <input type="hidden" id="c_glass_d_val_light" name="c_glass_d_val_light" value="" />
        <input type="hidden" id="is_custom" name="is_custom" value="" />

        <input type="hidden" name="link" id="link">
        <input type="hidden" id="product_type" name="product_type" value="<?php echo $category_name; ?>" />
        <input type="hidden" id="msg" name="msg" value="" />
        <!--td><h1>Add to Cart</h1></td-->
        <td colspan="2" align="center"><input type="hidden" name="type" value="<?=$_REQUEST['type']?>" />
            <input type="hidden" name="glass_face" value="0" id="glass-face" disabled="disabled">
            <!-- <div id="products_ids"></div> -->
            <input type="hidden" name="optionsid" id="optionsid" value="" disabled="disabled">

            <div class="item" style="position:absolute;visibility:hidden;">

                <div class="delete" style="visibility:hidden"></div>
            </div>
            <div class="item" style="position:absolute;visibility:hidden;">

                <div class="delete1" style="visibility:hidden"> </div>
                <div class="delete2" style="visibility:hidden"> </div>
                <div class="delete3" style="visibility:hidden"> </div>
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
<script type="text/javascript">
osc = "<?=$_REQUEST['osCsid']; ?>";
im_id = "<?=$im_id; ?>";
category_name = "<?=$category_name?>";
$(document).ready(function() {

    $('[name="face_length_a"]').live('change', function() {
        if ($(this).val() == 'custom') {
            custom = $(this);
            post = '';
            $msg =
                '<?php echo $ms_face .'&nbsp;&nbsp;<input type="checkbox" id="customefaceA"  /><span style="color:#666; font-size:16px;font: 26px/1 "Cuprum","Lucida Sans Unicode", "Lucida Grande", sans-serif;text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.6);color: #666;text-align: justify;" > : Make Next All Glass of Same Length</span>'?>';
            $('.delete').click();

        }
    })
    $('[name="face_length_b"]').live('change', function() {
        if ($(this).val() == 'custom') {
            $msg =
                '<?php echo $ms_face .'&nbsp;&nbsp;<input type="checkbox" id="customefaceB"  /><span style="color:#666; font-size:16px;font: 26px/1 "Cuprum","Lucida Sans Unicode", "Lucida Grande", sans-serif;text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.6);color: #666;text-align: justify;" > : Make Next All Glass of Same Length</span>'?>';
            custom = $(this);
            post = '';
            $('.delete').click();
        }
    })
    $('[name="face_length_c"]').live('change', function() {
        if ($(this).val() == 'custom') {
            custom = $(this);
            post = '';
            $msg =
                '<?php echo $ms_face .'&nbsp;&nbsp;<input type="checkbox" id="customefaceC"  /><span style="color:#666; font-size:16px;font: 26px/1 "Cuprum","Lucida Sans Unicode", "Lucida Grande", sans-serif;text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.6);color: #666;text-align: justify;" > : Make Next All Glass of Same Length</span>'?>';
            $('.delete').click();
        }
    })

    $('[name="face_length"]').live('change', function() {
        if ($(this).val() == 'custom') {
            $msg = '<?php echo $ms_face;?>';
            custom = $(this);
            post = '';
            $('.delete').click();
        }
    })

    $('[name="face_length_d"]').live('change', function() {
        if ($(this).val() == 'custom') {
            custom = $(this);
            post = '';
            $msg = '<?php echo $ms_face;?>';
            $('.delete').click();
        }
    })

    $('[name="right_length"]').live('change', function() {
        if ($(this).val() == 'custom') {
            $msg = '<?php echo $ms_right?>';
            custom = $(this);
            post = '';
            $('.delete').click();
        }
    })
    $('[name="left_length"]').live('change', function() {
        if ($(this).val() == 'custom') {
            $msg = '<?php echo $ms_left?>';
            custom = $(this);
            post = '';
            $('.delete').click();
        }
    })

})
</script>
<script src="includes/model_files/B950/B950.js"></script>