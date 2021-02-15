function openNav(){document.getElementById("mySidenav").style.width="100%",document.getElementById("main").style.marginLeft="100%"}function closeNav(){document.getElementById("mySidenav").style.width="0",document.getElementById("main").style.marginLeft="0"}document.querySelector("input").addEventListener("input",function(){document.querySelector(".box").scrollLeft=this.value}),$(document).ready(function(){products=$("#product_image").html(),$(".change_product_image").click(function(){switch(product_name=$(this).find(".cat_n").text(),link=$(this).attr("alt"),$(".button_open").html(""),$(this).find(".button_open").html('<a href="'+link+'" style="color:#C7F900;width:150px;text-align:right">Open</a>'),product_name){case"EP-950-Acyrlic":product_name="EP-950-ACRYLIC",product_name_text="EP950-Acrylic: A portable sneeze guard with an adjustable acrylic face and retractable stabilizers.  The posts can be permanently mounted to a counter top.",heightred=589+min_pix1,topred=636+min_pix1;break;case"B950P-Glass":product_name="B-950P-GLASS",product_name_text="B950P-Glass: A portable sneeze guard with an adjustable glass face and retractable stabilizers.  The posts can be permanently mounted to a counter top.",heightred=563+min_pix1,topred=610+min_pix1;break;case"B950":product_name="B-950",product_name_text="B950: A fully adjustable self-serve sneeze guard.  Can change height and glass tilt, and the glass has two sets of mounting holes.  Can be used on counters with or without a tray slide.",heightred=437+min_pix1,topred=484+min_pix1;break;case"B950 SWIVEL":product_name="B-950-SWIVEL",product_name_text="B950-Swivel: Similar to the B950, but with an extra degree of adjustability- the heads can swivel around the posts, allowing it to follow curved counter tops.",heightred=463+min_pix1,topred=510+min_pix1;break;case"EP5":product_name_text="EP5: A simple vertical partition.",heightred=0,topred=47;break;case"EP15":product_name_text="EP15: Similar to the EP5, but with a mild slant away from the customer.",heightred=25,topred=72;break;case"EP11":product_name_text="EP11: Pass-over sneeze guard with an overshelf.",heightred=48,topred=95;break;case"EP12":product_name_text="EP12: An overshelf sneeze guard with additional rear supports.",heightred=78+min_pix,topred=125+min_pix;break;case"EP22":product_name_text="EP22: Similar to the EP12, but with a mild slant away from the customer.",heightred=129+min_pix,topred=176+min_pix;break;case"EP21":product_name_text="EP21: Similar to the EP11, but with a mild slant away from the customer.",heightred=104+min_pix,topred=151+min_pix;break;case"EP36":product_name_text="EP36: Two-piece pass-over style sneeze guard.  Can transition into the ES31.",heightred=156,topred=203;break;case"ES29":product_name_text="ES29: For when an over shelf is needed on a counter with no tray slide.  Has a lead time on glass, as we manufacture it based on your counter size.",heightred=253+min_pix,topred=300+min_pix;break;case"ES31":product_name_text="ES31: A simple self-serve sneeze guard for a counter with no tray slide.",heightred=280+min_pix,topred=327+min_pix;break;case"ES40":product_name_text="ES40: Self-serve sneeze guard with an over shelf.  The mounting point is centered so it must be set near the front of a counter that has a tray slide, or farther back on a counter which does not.",heightred=306+min_pix,topred=353+min_pix;break;case"ES53":product_name_text="ES53: Self-serve sneeze guard that can change height and has an adjustable sliding top.  There must be space below the counter top for the posts to pass through.",heightred=331+min_pix1,topred=378+min_pix1;break;case"ES67":product_name_text="ES67: A simple self-serve sneeze guard for a counter with a tray slide.",heightred=360+min_pix1,topred=407+min_pix1;break;case"ES73":product_name_text="ES73: Self-serve sneeze guard with an over shelf.  The mounting point is centered so it must be set near the front of a counter that has a tray slide, or farther back on a counter which does not.",heightred=387+min_pix1,topred=434+min_pix1;break;case"ES82":product_name_text="ES82: A large double-sided self serve sneeze guard.  Has a lead time on glass, as we manufacture it based on your counter size.",heightred=412+min_pix1,topred=459+min_pix1;break;case"ALLIN1":product_name_text="ALLIN1: A portable sneeze guard with articulating arms and an acrylic face.  Can set in multiple positions and folded flat for storage.",heightred=535+min_pix1,topred=582+min_pix1;break;case"Light Bar":product_name_text="Light Bar: An independently-mounted LED light bar that can be installed after the fact.  There must be space below the counter top for the posts and wires to pass through.",heightred=659+min_pix2,topred=706+min_pix2;break;case"Mid-Shelves":product_name_text="Mid-Shelves: Mid-shelves that can be added to most in-stock models.",heightred=685+min_pix2,topred=732+min_pix2;break;case"Heat Lamp":product_name_text="Heat Lamp: An indepently-mounted Hatco heat lamp that can be installed after the fact.  There must be space below the counter top for the posts and wires to pass through.",heightred=713+min_pix2,topred=760+min_pix2;break;case"A-PUSH":product_name_text="";break;case"Adjustable-Shelving":product_name_text="Adjustable Shelving: A freestanding adjustable shelf display.",heightred=699,topred=746;break;case"ED20":product_name_text="ED20: A fully customizable display case with mid-shelves, commonly used in pizzerias.  Has a lead time on glass, as we manufacture it based on your counter size.",heightred=181+min_pix,topred=228+min_pix}$("#product_image").fadeOut(100,function(){"EP5 Ring Adjusts"==product_name?$(this).html('<li id="additional_image" style="overflow:hidden;height:685px;width:897px;"><a href="'+link+'"><img src="images/Ring-EP5/ep5ring.gif" alt="sneeze guard" title="sneeze guard for office" style="width:100%;margin-top: 6px;" /></a><br style="clear:both;"/></li>'):$(this).html('<li id="additional_image" style="overflow:hidden;height:685px;width:897px;"><a href="'+link+'"><img src="images/'+product_name+'/STARTold.jpg"  alt="sneeze guard" title="sneeze guard for office" style="width:100%;margin-top: 6px;"/><br style="clear:both;"/></a></li>'),$(this).fadeIn(100)}),$("#message_wrt").fadeOut(100,function(){})})}),$(document).ready(function(){$("#button_ep5").click(function(){$(".target-ep5").effect("shake",{times:3},100)})}),$(document).ready(function(){$("#button_ringep5").click(function(){$(".target-ringep5").effect("shake",{times:3},100)})}),$(document).ready(function(){$("#button_ep15").click(function(){$(".target-ep15").effect("shake",{times:3},100)})}),$(document).ready(function(){$("#button_ep11").click(function(){$(".target-ep11").effect("shake",{times:3},100)})}),$(document).ready(function(){$("#button_ep12").click(function(){$(".target-ep12").effect("shake",{times:3},100)})}),$(document).ready(function(){$("#button_ep21").click(function(){$(".target-ep21").effect("shake",{times:3},100)})}),$(document).ready(function(){$("#button_ep22").click(function(){$(".target-ep22").effect("shake",{times:3},100)})}),$(document).ready(function(){$("#button_ep36").click(function(){$(".target-ep36").effect("shake",{times:3},100)})}),$(document).ready(function(){$("#button_ed20").click(function(){$(".target-ed20").effect("shake",{times:3},100)})}),$(document).ready(function(){$("#button_es29").click(function(){$(".target-es29").effect("shake",{times:3},100)})}),$(document).ready(function(){$("#button_es31").click(function(){$(".target-es31").effect("shake",{times:3},100)})}),$(document).ready(function(){$("#button_es40").click(function(){$(".target-es40").effect("shake",{times:3},100)})}),$(document).ready(function(){$("#button_es47").click(function(){$(".target-es47").effect("shake",{times:3},100)})}),$(document).ready(function(){$("#button_es53").click(function(){$(".target-es53").effect("shake",{times:3},100)})}),$(document).ready(function(){$("#button_es67").click(function(){$(".target-es67").effect("shake",{times:3},100)})}),$(document).ready(function(){$("#button_es73").click(function(){$(".target-es73").effect("shake",{times:3},100)})}),$(document).ready(function(){$("#button_es82").click(function(){$(".target-es82").effect("shake",{times:3},100)})}),$(document).ready(function(){$("#button_es90").click(function(){$(".target-es90").effect("shake",{times:3},100)})}),$(document).ready(function(){$("#button_es92").click(function(){$(".target-es92").effect("shake",{times:3},100)})}),$(document).ready(function(){$("#button_b950").click(function(){$(".target-b950").effect("shake",{times:3},100)})}),$(document).ready(function(){$("#button_b950s").click(function(){$(".target-b950s").effect("shake",{times:3},100)})}),$(document).ready(function(){$("#button_b950p").click(function(){$(".target-b950p").effect("shake",{times:3},100)})}),$(document).ready(function(){$("#button_ep950").click(function(){$(".target-ep950").effect("shake",{times:3},100)})}),$(document).ready(function(){$("#button_ep6").click(function(){$(".target-ep6").effect("shake",{times:3},100)})}),$(document).ready(function(){$("#button_ep7").click(function(){$(".target-ep7").effect("shake",{times:3},100)})}),$(document).ready(function(){$("#button_allin1").click(function(){$(".target-allin1").effect("shake",{times:3},100)})}),$(document).ready(function(){$("#button_orbit720").click(function(){$(".target-orbit720").effect("shake",{times:3},100)})}),$(document).ready(function(){$("#button_lightbar").click(function(){$(".target-lightbar").effect("shake",{times:3},100)})}),$(document).ready(function(){$("#button_midshelves").click(function(){$(".target-midshelves").effect("shake",{times:3},100)})}),$(document).ready(function(){$("#button_heatlamp").click(function(){$(".target-heatlamp").effect("shake",{times:3},100)})});