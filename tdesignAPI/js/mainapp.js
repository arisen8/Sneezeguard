var $type="tee",$color="white",$color2="white",$y_pos="front",$nos_icons=0,$nos_text=0,$custom_img=0;
$(document).ready(function(){
	
	/*
	//ONLOAD
	$("#preview_front").css('background-image', 'url(tdesignAPI/images/product/'+$type+'/'+$color+'/'+$color+'_front.png) ') ;
	$("#preview_back").css('background-image', 'url(tdesignAPI/images/product/'+$type+'/'+$color+'/'+$color+'_back.png) ') ;
	*/
	$("#front_print").css('background-color', 'white') ;
	$("#back_print").css('background-color', 'white') ;
		
	
	
	//$("#preview_front, #preview_back , #preview_left, #preview_right").css('background-color', 'blue') ;
	//$("#preview_front,.T_type").removeClass('dis_none');
	$("#preview_front").removeClass('dis_none');
	$("#preview_back,.color_pick,.default_samples,.custom_icon,.custom_font,.T_type").addClass('dis_none') ;
	//$('.modal').css('dispaly','none');
	
	
	
	
	var banner_widths =$("#banner-width").val();
	var banner_heights =$("#banner-height").val();

	
	var width_in_pixel=parseInt(banner_widths)*7;
	var height_in_pixel=parseInt(banner_heights)*7;

	$('#front_print').css("width",""+width_in_pixel+"px");	
	$('#front_print').css("height",""+height_in_pixel+"px");

	$('#back_print').css("width",""+width_in_pixel+"px");	
	$('#back_print').css("height",""+height_in_pixel+"px");






	//ONLOAD OVER
	
	/*==========================SWITCH MENU===========================*/
	$(".sel_type").click(function(){
		$(".T_type").removeClass('dis_none');
		$(".default_samples,.custom_icon,.color_pick,.custom_font").addClass('dis_none') ;
	});
	$(".sel_color").click(function(){
		$(".color_pick").removeClass('dis_none');
		$(".T_type,.default_samples,.custom_icon,.custom_font").addClass('dis_none') ;
	});
	$(".sel_art").click(function(){
		$(".default_samples").removeClass('dis_none');
		$(".T_type,.custom_icon,.color_pick,.custom_font").addClass('dis_none') ;
	});
	$(".sel_custom_icon").click(function(){
		$(".custom_icon").removeClass('dis_none');
		$(".T_type,.default_samples,.color_pick,.custom_font").addClass('dis_none') ;
	});
	$(".sel_text").click(function(){
		$(".custom_font").removeClass('dis_none');
		$(".T_type,.default_samples,.color_pick,.custom_icon").addClass('dis_none') ;
	});
	
	
	/*=========================SWITCH MENU OVER=====================*/
	/*==========================select type=====================*/
	
	
	
	$('#double_side_type').change(function(){
		
		 banner_sides_types=$(this).val();
		// alert(banner_sides_types);
		//both_side_different
		if(banner_sides_types=="both_different")
		{
		$('#both_side_different').val('10875');	
		}
		else{
		$('#both_side_different').val('');	
		}
		
	});
	
	
	$("#radio1").click(function(){	//tee
		$type="tee";
		change_it();
		
	});
	$("#radio2").click(function(){	//polo
		$type="polo";
		change_it();
		
	});
	$("#radio3").click(function(){	//hoodie
		$type="hoodie";
		change_it();
	});
	/*==========================select type over=====================*/
	/*==========================select back or front=====================*/
	
	/*
	$("#o_front").click(function(){
		$y_pos="front";
				//$("#preview_front").css('background-image', 'url(tdesignAPI/images/product/'+$type+'/'+$color+'/'+$color+'_'+$y_pos+'.png) ') ;
				$("#front_print").css('background-color', ''+$color+'') ;
				
				
				//$("#o_front").attr('src','tdesignAPI/images/product/'+$type+'/'+$color+'/'+$color+'_front.png');
				//$("#o_back").attr('src','tdesignAPI/images/product/'+$type+'/'+$color+'/'+$color+'_back.png');
				$("#o_front").css('background-color', ''+$color+'') ;
				$("#o_back").css('background-color', ''+$color+'') ;
				
				$("#preview_front").removeClass('dis_none') ;
				$("#preview_back").addClass('dis_none') ;
		
	});
	$("#o_back").click(function(){
		$y_pos="back";
				//$("#preview_back").css('background-image', 'url(tdesignAPI/images/product/'+$type+'/'+$color+'/'+$color+'_'+$y_pos+'.png) ') ;
		
				$("#back_print").css('background-color', ''+$color+'') ;
				
				//$("#o_front").attr('src','tdesignAPI/images/product/'+$type+'/'+$color+'/'+$color+'_front.png');
				//$("#o_back").attr('src','tdesignAPI/images/product/'+$type+'/'+$color+'/'+$color+'_back.png');
				$("#o_front").css('background-color', ''+$color+'') ;
				$("#o_back").css('background-color', ''+$color+'') ;
				
				$("#preview_back").removeClass('dis_none') ;
				$("#preview_front").addClass('dis_none') ;
		
	});
	*/
	$('#banner_sided').change(function(){
		banner_sides=$(this).val();
		
		if(banner_sides=='back_sided')
		{
			$y_pos="back";
				$("#back_print").css('background-color', ''+$color+'') ;
				
				//$("#o_front").attr('src','tdesignAPI/images/product/'+$type+'/'+$color+'/'+$color+'_front.png');
				//$("#o_back").attr('src','tdesignAPI/images/product/'+$type+'/'+$color+'/'+$color+'_back.png');
				$("#o_front").css('background-color', ''+$color+'') ;
				//$("#o_back").css('background-color', ''+$color2+'') ;
				$("#o_back").css('background-color', ''+$color+'') ;
				
				$("#preview_back").removeClass('dis_none') ;
				$("#preview_front").addClass('dis_none') ;
				
				$('#banner_sides_view').val('2');
				
		}
		else{
			
			$y_pos="front";
			$("#front_print").css('background-color', ''+$color+'') ;
				
				
				$("#o_front").css('background-color', ''+$color+'') ;
				//$("#o_back").css('background-color', ''+$color2+'') ;
				
				$("#o_back").css('background-color', ''+$color+'') ;
				
				$("#preview_front").removeClass('dis_none') ;
				$("#preview_back").addClass('dis_none') ;
				
				$('#banner_sides_view').val('1');
		}
		
		
	});
	
	
	
/*==========================select back or front OVER=====================*/
/*==========================select COLOR=====================*/
	$('#banner-height').change(function(){

	var banner_widths =$("#banner-width").val();
	var banner_heights =$(this).val();

	
	var width_in_pixel=parseInt(banner_widths)*7;
	var height_in_pixel=parseInt(banner_heights)*7;
	
	var width_in_pixel_main=parseInt(banner_widths)*9;
	var height_in_pixel_main=parseInt(banner_heights)*9;
	//alert(width_in_pixel);
	//alert(width_in_pixel);
	//alert(height_in_pixel);
	//$("#front_print").css('background-color', ''+$color+'') ;
	//$("#back_print").css('background-color', ''+$color+'') ;
				
	$('#front_print').css("width",""+width_in_pixel+"px");	
	$('#front_print').css("height",""+height_in_pixel+"px");
	
	//$('#back_print').css("width",""+width_in_pixel+"px");	
	//$('#back_print').css("height",""+height_in_pixel+"px");	
	
	
	
	
});

	
	
	
	$('.color_radio_div').click(function(){
		
		$banner_side=$('#banner_sided :selected').text();
				
				if($banner_side=='Back')
				{
					$color2=this.id;
					$("#bannercolorcode").val($color2);
					$("#bannercolorcode2").val($color2);
					
					
				}
				else{
				$color=this.id;
				$("#bannercolorcode").val($color);
				$("#bannercolorcode2").val($color);
				}
				
				//alert($color);
				//alert($banner_side);
				change_it();
	});
	
	

	
	
	
	function change_it(){
				//$("#preview_back").css('background-image', 'url(tdesignAPI/images/product/'+$type+'/'+$color+'/'+$color+'_back.png) ') ;
				//$("#preview_front").css('background-image', 'url(tdesignAPI/images/product/'+$type+'/'+$color+'/'+$color+'_front.png) ') ;
				//alert($banner_side);
				/*if($banner_side=='Back')
				{
				$("#back_print").css('background-color', ''+$color2+'') ;
				}
				else{
				$("#front_print").css('background-color', ''+$color+'') ;		
				}*/
				//alert($color);
				$("#back_print").css('background-color', ''+$color+'') ;
				$("#front_print").css('background-color', ''+$color+'') ;
				
				//bannercolorcode
				
				$("#o_front").css('background-color', ''+$color+'') ;
				$("#o_back").css('background-color', ''+$color+'') ;
				
				//$("#o_front").attr('src','tdesignAPI/images/product/'+$type+'/'+$color+'/'+$color+'_front.png');
				//$("#o_back").attr('src','tdesignAPI/images/product/'+$type+'/'+$color+'/'+$color+'_back.png');
		
	}
	/*==========================select COLOR OVER=====================*/
/*=====================SAMPLE ICONS========================*/
	$(".sample_icons").click(function(){
		var $srcimg=$(this).children("img").attr('src');
		image_icon($srcimg);
		
	});

	$(".folder_toggle").click(function(){
		$i=$(this).attr('value');
		$folder=$(this).attr('data-folder');
		$.ajax({
			      url: 'tdesignAPI/control/newcontent.php?folder='+$folder,
			      success: function()
		      	{
		        	$("#toggle_show"+$i ).empty().load("tdesignAPI/control/newcontent.php?folder="+$folder);
		      	}
	    });
	});
/*=====================SAMPLE ICONS over========================*/

/*
 * Font resiZable
 * 
 * 
 * 
 *
var initDiagonal;
var initFontSize;

$(function() {
    $("#resizable").resizable({
        alsoResize: '#content',
        create: function(event, ui) {
            initDiagonal = getContentDiagonal();
            initFontSize = parseInt($("#content").css("font-size"));
        },
        resize: function(e, ui) {
            var newDiagonal = getContentDiagonal();
            var ratio = newDiagonal / initDiagonal;
            
            $("#content").css("font-size", initFontSize + ratio * 3);
        }
    });
});

function getContentDiagonal() {
    var contentWidth = $("#content").width();
    var contentHeight = $("#content").height();
    return contentWidth * contentWidth + contentHeight * contentHeight;
}
/*
 * 
 * 
 * 
 */
	$('#apply_text').click(function(){
		
		var text_val = jQuery("textarea#custom_text").val();
		if(!text_val)
			return false;
		/*
			$("."+$y_pos+"_print").append("<div id=text"+($nos_text)+" class='new_text'  onmouseover='show_delete_btn(this);' onmouseout='hide_delete_btn(this);'><span class='drag_text property_icon'  ></span><textarea id='text_style' >"+text_val+"</textarea><span class='delete_text property_icon' onClick='delete_text(this);' ></span></div>");
			
			*/
			
			$("."+$y_pos+"_print").append("<div id=text"+($nos_text)+" class='draggabletext"+($nos_text)+" new_text' ><div id='targettext"+($nos_text)+"' onmouseover='show_active_textobject("+($nos_text)+");' onmouseout='hide_active_textobject("+($nos_text)+");' style='width: 100px;  padding: 0px; padding-right: 0px;'><span class='drag_text property_icontext"+($nos_text)+"'  ></span><textarea id='text_style' >"+text_val+"</textarea><span class='delete_icon property_icontext"+($nos_text)+"' onClick='delete_textobject("+($nos_text)+");'></span></div></div>");

			//onmouseover='show_active_textobject("+($nos_text)+");' onmouseout='hide_active_textobject("+($nos_text)+");'
			//	$("."+$y_pos+"_print").append("<div id=icon"+($nos_icons)+" class='draggable"+($nos_icons)+"' onmouseover='show_delete_btn(this);' onmouseout='hide_delete_btn(this);'><div id='target"+($nos_icons)+"' onmouseover='show_active_object("+($nos_icons)+");' onmouseout='hide_active_object("+($nos_icons)+");' style='width: 100px;  padding: 0px; padding-right: 0px;'><span class='delete_icon property_icon"+($nos_icons)+"' onClick='delete_bojects("+($nos_icons)+");'></span><img src='"+$srcimg+"'  width='100%' height='100%' /></div></div>");
			
			
			
			// $( "#text"+($nos_text)+"" ).draggable({ containment: "parent" });
			// $( "#text"+($nos_text)+"" ).resizable({
				// maxHeight: 480,
				// maxWidth: 450,
				// minHeight: 60,
				// minWidth: 60
			// });

		var $font_			=$('#custom_text').css("font-family");
		var $font_size		=$('#custom_text').css("font-size");
		var $font_weight	=$('#custom_text').css("font-weight");
		var $font_style		=$('#custom_text').css("font-style");
		var $font_color		=$('#custom_text').css("color");
		//alert($font_u);
		
		
		$("#text"+($nos_text)+" textarea" ).css("font-family", $font_);
		$("#text"+($nos_text)+" textarea" ).css("font-size", $font_size);
		$("#text"+($nos_text)+" textarea" ).css("font-weight", $font_weight);
		$("#text"+($nos_text)+" textarea" ).css("font-style", $font_style);
		$("#text"+($nos_text)+" textarea" ).css("color", $font_color);
		$("#text"+($nos_text)).css({'top':'100px','left':'150px'});
		//document.getElementById("text"+($nos_text)+" textarea").style.textDecoration=(""+$font_u+"");
		
		
		
			$(document).ready(function() {
        var params = {
            start: function(event, ui) {
                console.log("Rotating started")
            },
            rotate: function(event, ui) {
                if (Math.abs(ui.angle.current > 6)) {
                  console.log("Rotating " + ui.angle.current)
                }
            },
            stop: function(event, ui) {
                console.log("Rotating stopped")
            },
        };
     
        $('#targettext'+($nos_text)+'').resizable(); 
        $('#targettext'+($nos_text)+'').rotatable(); 
		
		$('.draggabletext'+($nos_text)+'').draggable()

     
	 
	 
	 
	 
	 
	 $( "#targettext"+($nos_text)+"" ).css({'border':'none'});
	$( ".property_icontext"+($nos_text)+"" ).css({'display':'none'});
	
	
	$("#targettext"+($nos_text)+"").find('.ui-rotatable-handle').css({'display':'none'});
	$("#targettext"+($nos_text)+"").find('.ui-resizable-handle').css({'display':'none'});
	 
	 
		});
			
			
			
			
		++$nos_text;
	});
	
	
	
	
	
$('.preview_images').click(function(){
	//capture();
	//alert($y_pos);
		$("#front_banner_img").attr("src","tdesignAPI/img/banner_design_front.png");
		$("#front_banner_img_back").attr("src","tdesignAPI/img/banner_design_front.png");
	
	//$('.modal').addClass('in');
	
	
	//$('.layer').css('visibility','visible');
	
	
	
	
	//$('.layer').css('visibility','visible');
	//$('body').css('position','fixed');
	//$('.modal').css({'display':'block','height':'auto'});
	//$('.design_api').css('position', 'fixed');
	//$('.modal').css('overflow', 'scroll');
});



$('.close_img').click(function(){

	
	$('.layer').css('visibility','hidden');
	//$('.layer').css('visibility','hidden');
	//$('body').css('position','relative');
	
});

function capture() {
	
	$("#preview_back").removeClass('dis_none') ;
	$("#preview_front").removeClass('dis_none') ;
	var banner_types=$("#banner_types").val();
	//alert(banner_types);
	
	$("#image_reply").empty();
	$y_pos="front";
	
	/*
	 html2canvas($('#preview_front'), {
            onrendered: function(canvas) {
                document.getElementById("image_reply").appendChild(canvas);
				//Set hidden field's value to image data (base-64 string)
				$('#img_front').val(canvas.toDataURL("image/png"));
            }
        });
		
		*/
	//$('#preview_front').hide();
	//$('#preview_back').show();
	
	if(banner_types=='double_side')
	{
		
		/*
  html2canvas($('#preview_back'), {
            onrendered: function(canvas) {
				//$('#img_back').val(canvas.toDataURL("image/png"));
                document.getElementById("image_reply").appendChild(canvas);
				$('#img_back').val(canvas.toDataURL("image/png"));
				$("#preview_back").addClass('dis_none') ;
            }
        });
		*/
		
	}
	else{
	$("#preview_back").addClass('dis_none') ;	
	}




	
}


});

	
	function image_icon($srcimg){
		
		
	
			// $("."+$y_pos+"_print").append("<div id=icon"+($nos_icons)+"  class='new_icon' onmouseover='show_delete_btn(this);' onmouseout='hide_delete_btn(this);'><span class='delete_icon property_icon' onClick='delete_icons(this);'></span><img src='"+$srcimg+"' class='image' width='100%' height='100%' /></div>");
			// $( "#icon"+($nos_icons)+"" ).draggable({ containment: "parent" });
			// $( "#icon"+($nos_icons)+"" ).resizable({
				// maxHeight: 480,
				// maxWidth: 450,
				// minHeight: 60,
				// minWidth: 60
				// });
			// $( "#icon"+($nos_icons)+"" ).css({'top':'100px','left':'150px'});
			// ++$nos_icons;
			
			
			
			
		
			$("."+$y_pos+"_print").append("<div id=icon"+($nos_icons)+" class='draggable"+($nos_icons)+"' onmouseover='show_delete_btn(this);' onmouseout='hide_delete_btn(this);'><div id='target"+($nos_icons)+"' onmouseover='show_active_object("+($nos_icons)+");' onmouseout='hide_active_object("+($nos_icons)+");' style='width: 100px;  padding: 0px; padding-right: 0px;'><span class='delete_icon property_icon"+($nos_icons)+"' onClick='delete_bojects("+($nos_icons)+");'></span><img src='"+$srcimg+"'  width='100%' height='100%' /></div></div>");
			$( "#icon"+($nos_icons)+"" ).draggable({ containment: "parent" });
			// $( "#icon"+($nos_icons)+"" ).resizable({
				// maxHeight: 480,
				// maxWidth: 450,
				// minHeight: 60,
				// minWidth: 60
				// });
			$( "#icon"+($nos_icons)+"" ).css({'top':'10px','left':'5px','width':'120px'});
			
			
	
	
			// $("."+$y_pos+"_print").append("<svg id='svg-container'  width='100%' height='100%' transform='scale(1, 1)'><image class='drag-svg' xlink:href='"+$srcimg+"' height='100px' width='100px' x='10' y='10' clip-path='url(#myid)'></image></svg>");
			// $( "#icon"+($nos_icons)+"" ).draggable({ containment: "parent" });
			// $( "#icon"+($nos_icons)+"" ).resizable({
				// maxHeight: 480,
				// maxWidth: 450,
				// minHeight: 60,
				// minWidth: 60
				// });
			// $( "#icon"+($nos_icons)+"" ).css({'top':'100px','left':'150px'});
			// ++$nos_icons;
			
			
			
			
			$(document).ready(function() {
        var params = {
            start: function(event, ui) {
                console.log("Rotating started")
            },
            rotate: function(event, ui) {
                if (Math.abs(ui.angle.current > 6)) {
                  console.log("Rotating " + ui.angle.current)
                }
            },
            stop: function(event, ui) {
                console.log("Rotating stopped")
            },
        };
     
        $('#target'+($nos_icons)+'').resizable(); 
        $('#target'+($nos_icons)+'').rotatable(); 
		
		$('.draggable'+($nos_icons)+'').draggable()

     
	 
	 
	 
	 
	 
	 $( "#target"+($nos_icons)+"" ).css({'border':'none'});
	$( ".property_icon"+($nos_icons)+"" ).css({'display':'none'});
	
	
	$("#target"+($nos_icons)+"").find('.ui-rotatable-handle').css({'display':'none'});
	$("#target"+($nos_icons)+"").find('.ui-resizable-handle').css({'display':'none'});
	 
	 
		});
			
			
			
			++$nos_icons;
			
			
			
			
			
			
			
			
			
			
			
			
			

    //# sourceURL=pen.js
			/*
			var svgimg 
			
			svgimg = document.createElementNS('http://www.w3.org/2000/svg','image');
svgimg.setAttributeNS(null,'height','500');
svgimg.setAttributeNS(null,'width','500');
svgimg.setAttributeNS('http://www.w3.org/1999/xlink','href', ''+$srcimg+'');
svgimg.setAttributeNS(null,'x','100');
svgimg.setAttributeNS(null,'y','0');
svgimg.setAttributeNS(null, 'visibility', 'visible');
$("."+$y_pos+"_print").append(svgimg);

*/

			
	}






function delete_bojects(idd){
	$( "#icon"+idd+"" ).css({'display':'none'});
}



function show_active_object(idd){
	$( "#target"+idd+"" ).css({'border':'2px solid grey'});
	$( ".property_icon"+idd+"" ).css({'display':''});
	$("#target"+idd+"").find('.ui-rotatable-handle').css({'display':''});
	$("#target"+idd+"").find('.ui-resizable-handle').css({'display':''});
}


function hide_active_object(idd){
	//alert(idd);
	$( "#target"+idd+"" ).css({'border':'none'});
	$( ".property_icon"+idd+"" ).css({'display':'none'});
	
	
	$("#target"+idd+"").find('.ui-rotatable-handle').css({'display':'none'});
	$("#target"+idd+"").find('.ui-resizable-handle').css({'display':'none'});
}





function delete_icons(e){
		
		$(e).parent('.new_icon').remove();
		
		--$nos_icons;
	}
	function show_delete_btn(e){
	
		$(e).children('.property_icon').show();
	}
	function hide_delete_btn(e){
	
		$(e).children('.property_icon').hide();
	}
	
	/*=============================================*/
	
	
	
function delete_textobject(idd){
	$( "#text"+idd+"" ).css({'display':'none'});
}
	

function show_active_textobject(idd){
	//alert(idd);
	$( "#targettext"+idd+"" ).css({'border':'2px solid grey'});
	$( ".property_icontext"+idd+"" ).css({'display':''});
	$("#targettext"+idd+"").find('.ui-rotatable-handle').css({'display':''});
	$("#targettext"+idd+"").find('.ui-resizable-handle').css({'display':''});
	
	$( ".new_text" ).css({'border':'none'});
	
}


function hide_active_textobject(idd){
	//alert(idd);
	$( "#targettext"+idd+"" ).css({'border':'none'});
	$( ".property_icontext"+idd+"" ).css({'display':'none'});
	$("#targettext"+idd+"").find('.ui-rotatable-handle').css({'display':'none'});
	$("#targettext"+idd+"").find('.ui-resizable-handle').css({'display':'none'});
	$( ".new_text" ).css({'border':'none'});
}

	
	
function delete_text(f){
			$(f).parent('.new_text').remove();
			--$nos_icons;
	}

function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();            
            reader.onload = function (e) {
	
				$("."+$y_pos+"_print").append("<div id='c_icon"+($custom_img)+"' class='new_icon'><span class='delete_icon' onClick='delete_icons(this);' ></span><img src='#' id='c_img"+$custom_img+"' width='100%' height='100%' /></div>");
				$( "#c_icon"+($custom_img)+"" ).draggable({ containment: "parent" });
				$( "#c_icon"+($custom_img)+"" ).resizable({
					maxHeight: 480,
					maxWidth: 450,
					minHeight: 60,
					minWidth: 60
				});		
			
			
			$("#c_img"+($custom_img)+"").attr('src', e.target.result);
			++$custom_img;
			};
            reader.readAsDataURL(input.files[0]);
        }
}