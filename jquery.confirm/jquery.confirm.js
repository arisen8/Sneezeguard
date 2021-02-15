(function($){
	
	$.confirm = function(params){
		
		if($('#confirmOverlay').length){
			// A confirm is already shown on the page:
			return false;
		}
		
		var buttonHTML = '';
		$.each(params.buttons,function(name,obj){
			
			// Generating the markup for the buttons:
			if(name=="cnfrm"){
				buttonHTML += '<input type="checkbox" class="button" id="one" style="-ms-transform: scale(1.5);-moz-transform: scale(1.5);-webkit-transform: scale(1.5);-o-transform: scale(1.5);height:10px;padding:0px 0px 0px 0px;margin-left:0px;background-image:none;">I Agree<span style="margin-right:30px;"></span>';
			}else if(name=="Proceeded"){
				buttonHTML += '<a href="" id="two" class="button '+obj['class']+'" style="opacity:0.3;">Proceed<span></span></a>';
			}else if(name=="Canceled"){
				buttonHTML += '<a href="" class="button '+obj['class']+'">Cancel<span></span></a>';
			}else{
				buttonHTML += '<a href="" class="button '+obj['class']+'">'+name+'<span></span></a>';
			}
			
			if(!obj.action){
				obj.action = function(){};
			}
		});
		
		var markup = [
			'<div id="confirmOverlay">',
			'<div id="confirmBox">',
			'<h1>',params.title,'</h1>',
			'<div>',params.message,'</div>',
			'<div id="confirmButtons">',
			buttonHTML,
			'</div></div></div>'
		].join('');
		
		$(markup).hide().appendTo('body').fadeIn();
		
		var buttons = $('#confirmBox .button'),
			i = 0;

		$.each(params.buttons,function(name,obj){
			buttons.eq(i++).click(function(){
				
				// Calling the action attribute when a
				// click occurs, and hiding the confirm.
				if(name=="Proceeded"){
					if($("#one").attr("checked")){
						obj.action();
						$.confirm.hide();
						return false;
					}else{
						return false;
					}
				}else if(name=="Proceed"){
					obj.action();
					$.confirm.hide();
					return false;
				}else if(name=="Canceled"){
					obj.action();
					$.confirm.hide();
					return false;
				}else if(name=="Cancel"){
					obj.action();
					$.confirm.hide();
					return false;
				}else if(name=="cnfrm"){
					if($("#one").attr("checked")){
						$("#two").css('opacity','1');
					}else{
						$("#two").css('opacity','0.3');
					}
				}else{
					obj.action();
					$.confirm.hide();
					return false;
				}
				// if($("#one").attr("checked")){
				// 	$("#two").css('opacity','1');
				// 	if(name!="cnfrm"){
				// 		$.confirm1.hide();
				// 		obj.action();
				// 	}
				// }else{
				// 	$("#two").css('opacity','0.3');
				// 	if(name=="Cancel" || name=="Proceed" || name=="Canceled"){
				// 		$.confirm1.hide();
				// 		obj.action();
				// 	}
				// }
				// if(name!="cnfrm"){
				// 	return false;
				// }
				// obj.action();
				// $.confirm.hide();
				// return false;
			});
		});
	}
	
	
	
	$.confirm.hide = function(){
		$('#confirmOverlay').fadeOut(function(){
			$(this).remove();
		});
	}
	
})(jQuery);

