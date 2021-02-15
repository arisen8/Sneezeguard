<?php 
    if($category_name=='EP11'){
	if($_REQUEST['type']=='1BAY') {
      ?>  <tr class="test-length">
            <td class="test-lenght1bay" width="40%"><a class="thickbox" href='images/EP11/1bay_faceA.jpg'><h1>Face Length A</h1></a></td>
            <td >
				<span id="face_length_span">
                    <select name="face_length" id="face_length" class="usecustom" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                        <option value="select">Select</option>
						
						
						<?php
						if($facelengthA=='12')
						{
						echo'<option value="12" selected>12"</option>';	
						}
						else{
						echo'<option value="12">12"</option>';	
						}
						if($facelengthA=='18')
						{
						echo'<option value="18" selected>18"</option>';	
						}
						else{
						echo'<option value="18">18"</option>';	
						}
						if($facelengthA=='24')
						{
						echo'<option value="24" selected>24"</option>';	
						}
						else{
						echo'<option value="24">24"</option>';	
						}
						if($facelengthA=='30')
						{
						echo'<option value="30" selected>30"</option>';	
						}
						else{
						echo'<option value="30">30"</option>';	
						}
						if($facelengthA=='36')
						{
						echo'<option value="36" selected>36"</option>';	
						}
						else{
						echo'<option value="36">36"</option>';	
						}
						if($facelengthA=='42')
						{
						echo'<option value="42" selected>42"</option>';	
						}
						else{
						echo'<option value="42">42"</option>';	
						}
											?>
                       
						
						<option value="custom">Custom</option>
                        <option value="No Glass">No Glass</option>
                    </select>
				</span>
            </td>
            <td width="11%">
                <span id="errormsgfirstname">
                    <img id="glass_a_err" src="img/iconCheckOff.gif">
                </span>
            </td>
        </tr>
  <?  }
    if($_REQUEST['type']=='2BAY'){
        ?><tr class="test-length">
                <td class="test-lenght2baya"><a class="thickbox" href='images/EP11/2bay_faceA.jpg'><h1>Face Length A</h1></a></td>
                <td>
					<span id="face_length_a_span">
                    <select name="face_length_a" id="face_length_a" class="usecustom" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                        <option value="select">Select</option>
						
						<?php
						if($facelengthA=='12')
						{
						echo'<option value="12" selected>12"</option>';	
						}
						else{
						echo'<option value="12">12"</option>';	
						}
						if($facelengthA=='18')
						{
						echo'<option value="18" selected>18"</option>';	
						}
						else{
						echo'<option value="18">18"</option>';	
						}
						if($facelengthA=='24')
						{
						echo'<option value="24" selected>24"</option>';	
						}
						else{
						echo'<option value="24">24"</option>';	
						}
						if($facelengthA=='30')
						{
						echo'<option value="30" selected>30"</option>';	
						}
						else{
						echo'<option value="30">30"</option>';	
						}
						if($facelengthA=='36')
						{
						echo'<option value="36" selected>36"</option>';	
						}
						else{
						echo'<option value="36">36"</option>';	
						}
						if($facelengthA=='42')
						{
						echo'<option value="42" selected>42"</option>';	
						}
						else{
						echo'<option value="42">42"</option>';	
						}
											?>
                       
						
						<option value="custom">Custom</option>
                        <option value="No Glass">No Glass</option>
                    </select>
					
					

					</span>
                </td>
                <td width="11%">
                    <span id="errormsgfirstname">
                        <img id="glass_a_err" src="img/iconCheckOff.gif">
                    </span>				
                </td>
            </tr>
			
            <tr class="test-length">
                <td class="test-lenght2bayb"><a class="thickbox" href='images/EP11/2bay_faceB.jpg'><h1>Face Length B</h1></a></td>
                <td>
					<span id="face_length_b_span">
                    <select name="face_length_b" id="face_length_b" class="usecustom" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
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
					</span>
                </td>
                <td>
                    <span id="errormsgfirstname">
                        <img id="glass_b_err" src="img/iconCheckOff.gif">
                    </span>
                </td>
            </tr>
  <?  }
    if($_REQUEST['type']=='3BAY'){
       ?> <tr class="test-length">
                <td class="test-lenght3baya"><a class="thickbox" href='images/EP11/3bay_faceA.jpg'><h1>Face Length A</h1></a></td>
                <td>
					<span id="face_length_a_span">
                    <select name="face_length_a" id="face_length_a" class="usecustom" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                        <option value="select">Select</option>
						
						
						<?php
						if($facelengthA=='12')
						{
						echo'<option value="12" selected>12"</option>';	
						}
						else{
						echo'<option value="12">12"</option>';	
						}
						if($facelengthA=='18')
						{
						echo'<option value="18" selected>18"</option>';	
						}
						else{
						echo'<option value="18">18"</option>';	
						}
						if($facelengthA=='24')
						{
						echo'<option value="24" selected>24"</option>';	
						}
						else{
						echo'<option value="24">24"</option>';	
						}
						if($facelengthA=='30')
						{
						echo'<option value="30" selected>30"</option>';	
						}
						else{
						echo'<option value="30">30"</option>';	
						}
						if($facelengthA=='36')
						{
						echo'<option value="36" selected>36"</option>';	
						}
						else{
						echo'<option value="36">36"</option>';	
						}
						if($facelengthA=='42')
						{
						echo'<option value="42" selected>42"</option>';	
						}
						else{
						echo'<option value="42">42"</option>';	
						}
											?>
                       
						
						<option value="custom">Custom</option>
                        <option value="No Glass">No Glass</option>
                    </select>
					</span>
                </td>
                <td width="11%">
                    <span id="errormsgfirstname">
                            <img id="glass_a_err" src="img/iconCheckOff.gif">
                    </span>
                </td>
            </tr>
			
            <tr class="test-length">
                <td class="test-lenght3bayb"><a class="thickbox" href='images/EP11/3bay_faceB.jpg'><h1>Face Length B</h1></a></td>
                <td>
					<span id="face_length_b_span">
                    <select name="face_length_b" id="face_length_b" class="usecustom"  onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
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
					</span>
                </td>
                <td>
                    <span id="errormsgfirstname">
                            <img id="glass_b_err" src="img/iconCheckOff.gif">
                    </span>
                </td>
            </tr>
            <tr class="test-length">
                <td class="test-lenght3bayc"><a class="thickbox" href='images/EP11/3bay_faceC.jpg'><h1>Face Length C</h1></a></td>
                <td>
					<span id="face_length_c_span">
                    <select name="face_length_c" id="face_length_c" class="usecustom" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
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
					</span>
                </td>
                <td>
                    <span id="errormsgfirstname">
                            <img id="glass_c_err" src="img/iconCheckOff.gif">
                    </span>
                </td>
            </tr>
  <?  } if($_REQUEST['type']=='4BAY'){
      ?> <tr class="test-length">
                <td class="test-lenght4baya"><a class="thickbox" href='images/EP11/4bay_faceA.jpg'><h1>Face Length A</h1></a></td>
                <td>
					<span id="face_length_a_span">
                    <select name="face_length_a" id="face_length_a" class="usecustom" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                        <option value="select">Select</option>
						<?php
						if($facelengthA=='12')
						{
						echo'<option value="12" selected>12"</option>';	
						}
						else{
						echo'<option value="12">12"</option>';	
						}
						if($facelengthA=='18')
						{
						echo'<option value="18" selected>18"</option>';	
						}
						else{
						echo'<option value="18">18"</option>';	
						}
						if($facelengthA=='24')
						{
						echo'<option value="24" selected>24"</option>';	
						}
						else{
						echo'<option value="24">24"</option>';	
						}
						if($facelengthA=='30')
						{
						echo'<option value="30" selected>30"</option>';	
						}
						else{
						echo'<option value="30">30"</option>';	
						}
						if($facelengthA=='36')
						{
						echo'<option value="36" selected>36"</option>';	
						}
						else{
						echo'<option value="36">36"</option>';	
						}
						if($facelengthA=='42')
						{
						echo'<option value="42" selected>42"</option>';	
						}
						else{
						echo'<option value="42">42"</option>';	
						}
											?>
                       
						
						<option value="custom">Custom</option>
                        <option value="No Glass">No Glass</option>
                    </select>
					</span>
                </td>
                <td width="11%">
                    <span id="errormsgfirstname">
                            <img id="glass_a_err" src="img/iconCheckOff.gif">
                    </span>
                </td>
            </tr>
            <tr class="test-length">
                <td class="test-lenght4bayb"><a class="thickbox" href='images/EP11/4bay_faceB.jpg'><h1>Face Length B</h1></a></td>
                <td>
					<span id="face_length_b_span">
                    <select name="face_length_b" id="face_length_b" class="usecustom"  onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
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
					
					
					</span>
                </td>
                <td>				
                    <span id="errormsgfirstname">
                            <img id="glass_b_err" src="img/iconCheckOff.gif">
                    </span>
                </td>
            </tr>
            <tr class="test-length">
                <td class="test-lenght4bayc"><a class="thickbox" href='images/EP11/4bay_faceC.jpg'><h1>Face Length C</h1></a></td>
                <td>
					<span id="face_length_c_span">
                    <select name="face_length_c" id="face_length_c" class="usecustom" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
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
					
					</span>
                </td>
                <td>
                    <span id="errormsgfirstname">
                            <img id="glass_c_err" src="img/iconCheckOff.gif">
                    </span>
                </td>
            </tr> 
			<tr class="test-length">
                <td class="test-lenght4bayd"><a class="thickbox" href='images/EP11/4bay_faceD.jpg'><h1>Face Length D</h1></a></td>
                <td>
					<span id="face_length_d_span">
                    <select name="face_length_d" id="face_length_d" class="usecustom" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
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
					
					</span>
                </td>
                <td>
                    <span id="errormsgfirstname">
                            <img id="glass_d_err" src="img/iconCheckOff.gif">
                    </span>
                </td>
            </tr>
 <?php   }} else{
	
	
	if($_REQUEST['type']=='1BAY') {
        echo    '<tr class="test-length">
                    <td><a class="thickbox" href="images/'.$category_name.'/1bay_faceA.jpg" ><h1>Face Length A</h1></a></td>
                    <td>
						<span id="face_length_span">
                        <select name="face_length" id="face_length" class="usecustom" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                            <option value="select">Select</option>';
							
							
                            if($facelengthA=='12')
						{
						echo'<option value="12" selected>12"</option>';	
						}
						else{
						echo'<option value="12">12"</option>';	
						}
						if($facelengthA=='18')
						{
						echo'<option value="18" selected>18"</option>';	
						}
						else{
						echo'<option value="18">18"</option>';	
						}
						if($facelengthA=='24')
						{
						echo'<option value="24" selected>24"</option>';	
						}
						else{
						echo'<option value="24">24"</option>';	
						}
						if($facelengthA=='30')
						{
						echo'<option value="30" selected>30"</option>';	
						}
						else{
						echo'<option value="30">30"</option>';	
						}
						if($facelengthA=='36')
						{
						echo'<option value="36" selected>36"</option>';	
						}
						else{
						echo'<option value="36">36"</option>';	
						}
						if($facelengthA=='42')
						{
						echo'<option value="42" selected>42"</option>';	
						}
						else{
						echo'<option value="42">42"</option>';	
						}
							echo'<option value="custom">Custom</option>
                            <option value="No Glass">No Glass</option>
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
        echo '<tr class="test-length">
                <td><a class="thickbox" href="images/'.$category_name.'/2bay_faceA.jpg"><h1>Face Length A</h1></a></td>
                <td>
					<span id="face_length_a_span">
                    <select name="face_length_a" id="face_length_a" class="usecustom" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                        <option value="select">Select</option>
                        ';
							
							
                            if($facelengthA=='12')
						{
						echo'<option value="12" selected>12"</option>';	
						}
						else{
						echo'<option value="12">12"</option>';	
						}
						if($facelengthA=='18')
						{
						echo'<option value="18" selected>18"</option>';	
						}
						else{
						echo'<option value="18">18"</option>';	
						}
						if($facelengthA=='24')
						{
						echo'<option value="24" selected>24"</option>';	
						}
						else{
						echo'<option value="24">24"</option>';	
						}
						if($facelengthA=='30')
						{
						echo'<option value="30" selected>30"</option>';	
						}
						else{
						echo'<option value="30">30"</option>';	
						}
						if($facelengthA=='36')
						{
						echo'<option value="36" selected>36"</option>';	
						}
						else{
						echo'<option value="36">36"</option>';	
						}
						if($facelengthA=='42')
						{
						echo'<option value="42" selected>42"</option>';	
						}
						else{
						echo'<option value="42">42"</option>';	
						}
							echo'
						<option value="custom">Custom</option>
                        <option value="No Glass">No Glass</option>
                    </select>
					</span>
                </td>
                <td width="11%">
                    <span id="errormsgfirstname">
                        <img id="glass_a_err" src="img/iconCheckOff.gif">
                    </span>
                </td>
            </tr>
            <tr class="test-length">
                <td><a class="thickbox" href="images/'.$category_name.'/2bay_faceB.jpg"><h1>Face Length B</h1></a></td>
                <td>
					<span id="face_length_b_span">
                    <select name="face_length_b" id="face_length_b" class="usecustom" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                        <option value="select" class="instock">Select</option>
						<option value="12" class="customsame" style="display:none;">8"</option>
						
						';
							
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
							echo'
						
						<option value="48" class="instock" id="optio_48_b" style="display:none;">48"</option>
                        <option value="54" class="instock" id="optio_54_b" style="display:none;">54"</option>
	
						<option value="custom" class="instock" style="display: block;">Custom</option>
                        <option value="No Glass" class="instock" style="display: block;">No Glass</option>
                    ';
						echo dropdown_option_facelength();
						echo'
					<option value="No Glass" class="customsame" style="display:none;">No Glass</option>
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
        echo '<tr class="test-length">
                <td><a class="thickbox" href="images/'.$category_name.'/3bay_faceA.jpg"><h1>Face Length A</h1></a></td>
                <td>
					<span id="face_length_a_span">
                    <select name="face_length_a" id="face_length_a" class="usecustom" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                        <option value="select">Select</option>
						
						';
							
							
                            if($facelengthA=='12')
						{
						echo'<option value="12" selected>12"</option>';	
						}
						else{
						echo'<option value="12">12"</option>';	
						}
						if($facelengthA=='18')
						{
						echo'<option value="18" selected>18"</option>';	
						}
						else{
						echo'<option value="18">18"</option>';	
						}
						if($facelengthA=='24')
						{
						echo'<option value="24" selected>24"</option>';	
						}
						else{
						echo'<option value="24">24"</option>';	
						}
						if($facelengthA=='30')
						{
						echo'<option value="30" selected>30"</option>';	
						}
						else{
						echo'<option value="30">30"</option>';	
						}
						if($facelengthA=='36')
						{
						echo'<option value="36" selected>36"</option>';	
						}
						else{
						echo'<option value="36">36"</option>';	
						}
						if($facelengthA=='42')
						{
						echo'<option value="42" selected>42"</option>';	
						}
						else{
						echo'<option value="42">42"</option>';	
						}
							echo'
						
						<option value="custom">Custom</option>
                        <option value="No Glass">No Glass</option>
                    </select>
					</span>
                </td>
                <td width="11%">
                    <span id="errormsgfirstname">
                        <img id="glass_a_err" src="img/iconCheckOff.gif">
                    </span>
                </td>
            </tr>
            <tr class="test-length">
                <td><a class="thickbox" href="images/'.$category_name.'/3bay_faceB.jpg"><h1>Face Length B</h1></a></td>
                <td>
					<span id="face_length_b_span">
                    <select name="face_length_b" id="face_length_b" class="usecustom"  onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                        <option value="select" class="instock">Select</option>
						<option value="12" class="customsame" style="display:none;">8"</option>
						
						
                        ';
						
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
						
						echo'<option value="48" class="instock" id="optio_48_b" style="display:none;">48"</option>
                        <option value="54" class="instock" id="optio_54_b" style="display:none;">54"</option>
	
						<option value="custom" class="instock" style="display: block;">Custom</option>
                        <option value="No Glass" class="instock" style="display: block;">No Glass</option>
                    ';
						echo dropdown_option_facelength();
						echo'
					<option value="No Glass" class="customsame" style="display:none;">No Glass</option>
                    </select>
					</span>
                </td>
                <td>
                    <span id="errormsgfirstname">
                        <img id="glass_b_err" src="img/iconCheckOff.gif">
                    </span>
                </td>
            </tr>
            <tr class="test-length">
                <td><a class="thickbox" href="images/'.$category_name.'/3bay_faceC.jpg"><h1>Face Length C</h1></a></td>
                <td>
					<span id="face_length_c_span">
                    <select name="face_length_c" id="face_length_c" class="usecustom" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                        <option value="select" class="instock">Select</option>
						<option value="12" class="customsame" style="display:none;">8"</option>
						
						';
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
						echo'<option value="48" class="instock" id="optio_48_b" style="display:none;">48"</option>
                        <option value="54" class="instock" id="optio_54_b" style="display:none;">54"</option>
	
						<option value="custom" class="instock" style="display: block;">Custom</option>
                        <option value="No Glass" class="instock" style="display: block;">No Glass</option>
                    ';
						echo dropdown_option_facelength();
						echo'
					<option value="No Glass" class="customsame" style="display:none;">No Glass</option>
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
        echo '<tr class="test-length">
                <td><a class="thickbox" href="images/'.$category_name.'/4bay_faceA.jpg"><h1>Face Length A</h1></a></td>
                <td>
					<span id="face_length_a_span">
                    <select name="face_length_a" id="face_length_a" class="usecustom" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                        <option value="select">Select</option>
						
						';
                      if($facelengthA=='12')
						{
						echo'<option value="12" selected>12"</option>';	
						}
						else{
						echo'<option value="12">12"</option>';	
						}
						if($facelengthA=='18')
						{
						echo'<option value="18" selected>18"</option>';	
						}
						else{
						echo'<option value="18">18"</option>';	
						}
						if($facelengthA=='24')
						{
						echo'<option value="24" selected>24"</option>';	
						}
						else{
						echo'<option value="24">24"</option>';	
						}
						if($facelengthA=='30')
						{
						echo'<option value="30" selected>30"</option>';	
						}
						else{
						echo'<option value="30">30"</option>';	
						}
						if($facelengthA=='36')
						{
						echo'<option value="36" selected>36"</option>';	
						}
						else{
						echo'<option value="36">36"</option>';	
						}
						if($facelengthA=='42')
						{
						echo'<option value="42" selected>42"</option>';	
						}
						else{
						echo'<option value="42">42"</option>';	
						}
						
						echo'<option value="custom">Custom</option>
                        <option value="No Glass">No Glass</option>
                    </select>
					</span>
                </td>
                <td width="11%">
                    <span id="errormsgfirstname">
                        <img id="glass_a_err" src="img/iconCheckOff.gif">
                    </span>
                </td>
            </tr>
            <tr class="test-length">
                <td><a class="thickbox" href="images/'.$category_name.'/4bay_faceB.jpg"><h1>Face Length B</h1></a></td>
                <td>
					<span id="face_length_b_span">
                    <select name="face_length_b" id="face_length_b" class="usecustom"  onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                        <option value="select" class="instock">Select</option>
						<option value="12" class="customsame" style="display:none;">8"</option>
						
						
						';
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
						echo'
						
						<option value="48" class="instock" id="optio_48_b" style="display:none;">48"</option>
                        <option value="54" class="instock" id="optio_54_b" style="display:none;">54"</option>
	
						<option value="custom" class="instock" style="display: block;">Custom</option>
                        <option value="No Glass" class="instock" style="display: block;">No Glass</option>
                    ';
						echo dropdown_option_facelength();
						echo'
					<option value="No Glass" class="customsame" style="display:none;">No Glass</option>
                    </select>
					</span>
                </td>
                <td>
                    <span id="errormsgfirstname">
                        <img id="glass_b_err" src="img/iconCheckOff.gif">
                    </span>
                </td>
            </tr>
            <tr class="test-length">
                <td><a class="thickbox" href="images/'.$category_name.'/4bay_faceC.jpg"><h1>Face Length C</h1></td>
                <td>
					<span id="face_length_c_span">
                    <select name="face_length_c" id="face_length_c" class="usecustom" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                        <option value="select" class="instock">Select</option>
						<option value="12" class="customsame" style="display:none;">8"</option>
						
						
						';
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
						echo'
						
						<option value="48" class="instock" id="optio_48_b" style="display:none;">48"</option>
                        <option value="54" class="instock" id="optio_54_b" style="display:none;">54"</option>
	
						<option value="custom" class="instock" style="display: block;">Custom</option>
                        <option value="No Glass" class="instock" style="display: block;">No Glass</option>
                    ';
						echo dropdown_option_facelength();
						echo'
					<option value="No Glass" class="customsame" style="display:none;">No Glass</option>
                    </select>
					</span>
                </td>
                <td>
                    <span id="errormsgfirstname">
                        <img id="glass_c_err" src="img/iconCheckOff.gif">
                    </span>
                </td>
            </tr> <tr class="test-length">
                <td><a class="thickbox" href="images/'.$category_name.'/4bay_faceD.jpg"><h1>Face Length D</h1></a></td>
                <td>
					<span id="face_length_d_span">
                    <select name="face_length_d" id="face_length_d" class="usecustom" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);">
                        <option value="select" class="instock">Select</option>
						<option value="12" class="customsame" style="display:none;">8"</option>
						
						
						';
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
						echo'
						
						
						<option value="48" class="instock" id="optio_48_b" style="display:none;">48"</option>
                        <option value="54" class="instock" id="optio_54_b" style="display:none;">54"</option>
	
						<option value="custom" class="instock" style="display: block;">Custom</option>
                        <option value="No Glass" class="instock" style="display: block;">No Glass</option>
                    ';
						echo dropdown_option_facelength();
						echo'
					<option value="No Glass" class="customsame" style="display:none;">No Glass</option>
                    </select>
					</span>
                </td>
                <td>
                    <span id="errormsgfirstname">
                        <img id="glass_d_err" src="img/iconCheckOff.gif">
                    </span>
                </td>
            </tr>';
    }
	
	
	
	
	
	
	
	
	
	
	}?>