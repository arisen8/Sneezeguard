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
	  $res=tep_db_query("select * from wt_val order by id desc");
	  while($row=tep_db_fetch_array($res)){
		  $val=$row['val'];
	  }
	  	$wid="31";
		$wid1="29";
?>

<script type="text/javascript">

<?php
        if(isset($HTTP_GET_VARS['id'])){
            $product="select count(*) as total from ".TABLE_PRODUCTS." as p, ".TABLE_PRODUCTS_DESCRIPTION." as pd, ".TABLE_PRODUCTS_TO_CATEGORIES." as pc where p.products_id=pd.products_id and pd.products_id=pc.products_id and pc.categories_id=".$HTTP_GET_VARS['id']." and pd.language_id=".(int)$languages_id;
            $product=tep_db_query($product);
            $products=tep_db_fetch_array($product);  
        }
    ?>
    				arr_len=<?=$products['total']?>;//defining array length!
    <?php if($category_name!='EP5'){ ?>
    			arr_len=parseInt(arr_len)+7;
    <?php } ?>
				var product_name_price=new Array(arr_len);//array defined to show the price in bay!
    <?php
        if(isset($HTTP_GET_VARS['id'])){
            $product="select p.products_id as id, pd.products_name as name, p.products_price as price from ".TABLE_PRODUCTS." as p, ".TABLE_PRODUCTS_DESCRIPTION." as pd, ".TABLE_PRODUCTS_TO_CATEGORIES." as pc where p.products_id=pd.products_id and pd.products_id=pc.products_id and pc.categories_id=".$HTTP_GET_VARS['id']." and pd.language_id=".(int)$languages_id;
			$product=tep_db_query($product);
            while($products=tep_db_fetch_array($product)){ ?>
                    product_name_price['<?=$products['name']?>']=new Array("<?=$products['id']?>", "<?=$products['price']?>");
            <?php }
        }
    ?>		
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

<table id="cart-form" style="" >
    <tr>
        <td>
            
                               <div class="tables-options">         
                                <table cellpadding="0" cellspacing="0" width="100%" style="" >
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
//STRUCTURE for 1 bay
    if($category_name=='EP5'){
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
        <td align="left" >Left Post:</td><td  id="left-post" align="right">0.00</td>
    </tr>
    <tr>
        <td  align="left">Right Post:</td><td id="right-post" align="right">0.00</td>
    </tr>
    <tr>
        <td align="left">Transistions Post:</td><td  id="trasition-post" align="right">0.00</td>
    </tr>
    <tr>
        <td  align="left">Flange Cover:</td><td  id="flange-cover" align="right">0.00</td>
    </tr>
	
	<tr style="display:none;">
        <td  align="left">Flange Under Counter:</td><td id="flange-under-counter" align="right">0.00</td>
    </tr>
	
	
	<tr>
        <td  align="left">Frosted Glass:</td><td id="roasted-glass" align="right">0.00</td>
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
		getPriceOfProductEP5(data,requestType,osc,im_id,val,category_name);
	}
	function nogl(data,el,val){
		noglEP5(data,el,val,ms_glass);
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
<script src="includes/model_files/EP5/EP5.js"></script>