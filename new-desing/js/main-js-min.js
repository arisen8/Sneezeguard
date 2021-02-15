// const { ajax } = require("jquery");
$(window).on("load", function() {
    $.ajax({
        type: "POST",
        url: 'includes/insideadmajax.php',
        data: { 'class': 'about' },
        success: function(data) {
            setTimeout(function() {
                $('.new-arrival-imgs-EP8').attr('src', 'images/new_arival/EP8/animation.gif');
                $('.new-arrival-imgs-ORBIT720').attr('src', 'images/new_arival/ORBIT720/animation.gif');
                $('.new-arrival-imgs-EP6').attr('src', 'images/new_arival/EP6/animation.gif');
                $('.new-arrival-imgs-EP5').attr('src', 'images/new_arival/EP5/animation.gif');
            }, 3000)
        }
    });
})
$(document).ready(function() {
    /**31-20-2020 code for cart data*/
    var cart_pre = parseInt($('#cart-count-pre').val());
    var cart_post = parseInt($('#cart-count-post').val());
    $('.cart-gif').css('display', 'none');
    if (cart_post > cart_pre) {
        $('.cart-gif').css('display', 'block');
        $('.cart-products').css('display', 'none');
        $('#cart-items-data').css("display", "block");
        setTimeout(function() {
            $('.cart-gif').css('display', 'none');
        }, 1000)
        setTimeout(function() {
            $('.cart-gif').css('display', 'none');
            $('.cart-products').css('display', 'block');
            $('.cart-products').fadeIn("slow");
        }, 1200)
        setTimeout(function() {
            hide_cart_data();
        }, 4500)
    }
    /**31-20-2020 */
    /**30-12-2020 vikram for removing header silder preloaded image  */
    $('.passover-dropbtn').hover(function() {
        var images = '<div class="col-md-4">' +
            '<img alt="sneeze guard" class="w-100" title="sneeze guard for office" src="images/hover-model/EP5.jpg" id="header_image_passover1">' +
            '</div>' +
            '<div class="col-md-4">' +
            '<img alt="sneeze guard" class="w-100" title="sneeze guard for office" src="images/hover-model/EP5_2.jpg" id="header_image_passover2">' +
            '</div>' +
            '<div class="col-md-4 text-right">' +
            '<img alt="sneeze guard" class="w-100" title="sneeze guard for office" src="images/hover-model/EP5_3.jpg" id="header_image_passover3">' +
            '</div>';
        $('.passover-header-slider-images').html(images);
        var slider = '<div class="carousel-item active">' +
            '<img src="sneezegaurd/headerslider/EP5/slider1.png" alt="EP5" id="passover_slides1" >' +
            '</div>' +
            '<div class="carousel-item">' +
            '<img src="sneezegaurd/headerslider/EP5/slider2.png" alt="EP5" id="passover_slides2" >' +
            '</div>' +
            '<div class="carousel-item">' +
            '<img src="sneezegaurd/headerslider/EP5/slider3.png" alt="EP5" id="passover_slides3">' +
            '</div>' +
            '<div class="carousel-item">' +
            '<img src="sneezegaurd/headerslider/EP5/slider4.png" alt="EP5" id="passover_slides4">' +
            '</div>' +
            '<div class="carousel-item">' +
            '<img src="sneezegaurd/headerslider/EP5/slider5.png" alt="EP5" id="passover_slides5">' +
            '</div>';
        $('.passover-header-slider').html(slider);
    })
    $('.selfserve-dropbtn').hover(function() {
        var images = '<div class="col-md-4">' +
            '<img alt="sneeze guard" title="sneeze guard for office" src="images/hover-model/ES29.jpg" id="header_image_selfserve1">' +
            '</div>' +
            '<div class="col-md-4">' +
            '<img alt="sneeze guard" title="sneeze guard for office" src="images/hover-model/ES29_2.jpg" id="header_image_selfserve2">' +
            '</div>' +
            '<div class="col-md-4 text-right">' +
            '<img alt="sneeze guard" title="sneeze guard for office" src="images/hover-model/ES29_3.jpg" id="header_image_selfserve3">' +
            '</div>';
        $('.selfserve-header-slider-images').html(images);
        var slider = '<div class="carousel-item active">' +
            '<img src="sneezegaurd/headerslider/EP5/slider1.png" alt="EP5" id="selfserve_slides1">' +
            '</div>' +
            '<div class="carousel-item">' +
            '<img src="sneezegaurd/headerslider/EP5/slider2.png" alt="EP5" id="selfserve_slides2">' +
            '</div>' +
            '<div class="carousel-item">' +
            '<img src="sneezegaurd/headerslider/EP5/slider3.png" alt="EP5" id="selfserve_slides3">' +
            '</div>' +
            '<div class="carousel-item">' +
            '<img src="sneezegaurd/headerslider/EP5/slider4.png" alt="EP5" id="selfserve_slides4">' +
            '</div>' +
            '<div class="carousel-item">' +
            '<img src="sneezegaurd/headerslider/EP5/slider5.png" alt="EP5" id="selfserve_slides5">' +
            '<div class="carousel-caption">' +
            '</div>' +
            '</div>';
        $('.selfserve-header-slider').html(slider);
    })
    $('.barrier-dropbtn').hover(function() {
        var images = '<div class="col-md-4">' +
            '<img alt="sneeze guard" title="sneeze guard for office" src="images/hover-model/EP5.jpg" id="header_image_barrier1">' +
            '</div>' +
            '<div class="col-md-4">' +
            '<img alt="sneeze guard" title="sneeze guard for office" src="images/hover-model/EP5_2.jpg" id="header_image_barrier2">' +
            '</div>' +
            '<div class="col-md-4 text-right">' +
            '<img alt="sneeze guard" title="sneeze guard for office" src="images/hover-model/EP5_3.jpg" id="header_image_barrier3">' +
            '</div>';
        $('.barrier-header-slider-images').html(images);
        var slider = '<div class="carousel-item active">' +
            '<img src="sneezegaurd/headerslider/EP5/slider1.png" alt="EP5" id="barrier_slides1" >' +
            '</div>' +
            '<div class="carousel-item">' +
            '<img src="sneezegaurd/headerslider/EP5/slider2.png" alt="EP5" id="barrier_slides2" >' +
            '</div>' +
            '<div class="carousel-item">' +
            '<img src="sneezegaurd/headerslider/EP5/slider3.png" alt="EP5" id="barrier_slides3">' +
            '</div>' +
            '<div class="carousel-item">' +
            '<img src="sneezegaurd/headerslider/EP5/slider4.png" alt="EP5" id="barrier_slides4">' +
            '</div>' +
            '<div class="carousel-item">' +
            '<img src="sneezegaurd/headerslider/EP5/slider5.png" alt="EP5" id="barrier_slides5">' +
            '<div class="carousel-caption">' +
            '</div>' +
            '</div>';
        $('.barrier-header-slider').html(slider);
    })
    $('.portable-dropbtn').hover(function() {
        var images = '<div class="col-md-4">' +
            '<img alt="sneeze guard" title="sneeze guard for office" src="images/hover-model/ALLIN1.jpg" id="header_image_portable1">' +
            '</div>' +
            '<div class="col-md-4">' +
            '<img alt="sneeze guard" title="sneeze guard for office" src="images/hover-model/ALLIN1_2.jpg" id="header_image_portable2">' +
            '</div>' +
            '<div class="col-md-4 text-right">' +
            '<img alt="sneeze guard" title="sneeze guard for office" src="images/hover-model/ALLIN1_3.jpg" id="header_image_portable3">' +
            '</div>';
        $('.portable-header-slider-images').html(images);
        var slider = '<div class="carousel-item active">' +
            '<img src="sneezegaurd/headerslider/EP5/slider1.png" alt="EP5" id="portable_slides1" >' +
            '</div>' +
            '<div class="carousel-item">' +
            '<img src="sneezegaurd/headerslider/EP5/slider2.png" alt="EP5" id="portable_slides2" >' +
            '</div>' +
            '<div class="carousel-item">' +
            '<img src="sneezegaurd/headerslider/EP5/slider3.png" alt="EP5" id="portable_slides3">' +
            '</div>' +
            '<div class="carousel-item">' +
            '<img src="sneezegaurd/headerslider/EP5/slider4.png" alt="EP5" id="portable_slides4">' +
            '</div>' +
            '<div class="carousel-item">' +
            '<img src="sneezegaurd/headerslider/EP5/slider5.png" alt="EP5" id="portable_slides5">' +
            '<div class="carousel-caption">' +
            '</div>' +
            '</div>';
        $('.portable-header-slider').html(slider);
    })
    $('.addon-dropbtn').hover(function() {
        var images = '<div class="col-md-4">' +
            '<img alt="sneeze guard" title="sneeze guard for office" src="images/hover-model/Light Bar.jpg" id="header_image_addons1">' +
            '</div>' +
            '<div class="col-md-4">' +
            '<img alt="sneeze guard" title="sneeze guard for office" src="images/hover-model/Light Bar_2.jpg" id="header_image_addons2">' +
            '</div>' +
            '<div class="col-md-4 text-right">' +
            '<img alt="sneeze guard" title="sneeze guard for office" src="images/hover-model/Light Bar_2.jpg" id="header_image_addons3">' +
            '</div>';
        $('.addon-header-slider-images').html(images);
        var slider = '<div class="carousel-item active">' +
            '<img src="sneezegaurd/headerslider/EP5/slider1.png" alt="EP5" id="addons_slides1" >' +
            '</div>' +
            '<div class="carousel-item">' +
            '<img src="sneezegaurd/headerslider/EP5/slider2.png" alt="EP5" id="addons_slides2" >' +
            '</div>' +
            '<div class="carousel-item">' +
            '<img src="sneezegaurd/headerslider/EP5/slider3.png" alt="EP5" id="addons_slides3">' +
            '</div>' +
            '<div class="carousel-item">' +
            '<img src="sneezegaurd/headerslider/EP5/slider4.png" alt="EP5" id="addons_slides4">' +
            '</div>' +
            '<div class="carousel-item">' +
            '<img src="sneezegaurd/headerslider/EP5/slider5.png" alt="EP5" id="addons_slides5">' +
            '<div class="carousel-caption">' +
            '</div>' +
            '</div>';
        $('.addon-header-slider').html(slider);
    })
    $('.insideddadm').hover(function() {
        $.ajax({
            type: "POST",
            url: 'includes/insideadmajax.php',
            data: { 'class': 'about' },
            success: function(data) {
                $('.insideadm-img').html(data);
            }
        });
    })
    $('.insideadmnav').hover(function() {
            $.ajax({
                type: "POST",
                url: 'includes/insideadmajax.php',
                data: { 'class': $(this).data('class') },
                success: function(data) {
                    $('.insideadm-img').html(data);
                }
            });
        })
        // $(".inside-adm-mobile-img").each(function(index) {
        //     $.ajax({
        //         type: "POST",
        //         url: 'includes/insideadmajax.php',
        //         data: { 'class': $(this).data('class') },
        //         success: function(data) {
        //             $(this).html(data);
        //         }
        //     });
        // });
    $('.insideadmmobile').hover(function() {
            $(".inside-adm-mobile-img").each(function(index) {
                var className = $(this).data('class');
                $.ajax({
                    type: "POST",
                    url: 'includes/insideadmajax.php',
                    data: { 'class': $(this).data('class') },
                    success: function(data) {
                        $('.inside-adm-mobile-img-' + className + '').html(data);
                    }
                });
            });
        })
        /**30-12-2020 vikram for removing header silder preloaded image  */
        /**16-12-2020 */
    $('#formspam').submit(function() {
        if ($('input#website').val().length != 0) {
            return false;
        }
    });
    /**16-12-2020 */
    $('#total').closest('tr').css('font-weight', '600');
    $('#t_price').closest('tr').css('font-weight', '600');
    if (screen.width >= 1368) {
        //alert('hiio');
        $('#modal-dialog-change').addClass('modal-lg');
    }

    $('.flange-covers-pricing').click(function() {
        let video = '<video width="100%" poster="pic.jpg" autoplay controls>' +
            '<source src="images/flang.mp4" type=\'video/mp4; codecs="avc1.42E01E, mp4a.40.2"\' />' +
            '<source src="images/flang.webm" type=\'video/webm; codecs="vp8, vorbis"\' />' +
            '<source src="images/flang.ogv" type=\'video/ogg; codecs="theora, vorbis"\' />' +
            '</video>';
        $('#newsalert').click();
        $('.newsalert-body').html(video);

    })
    $('.adjustable-brackets-pricing').click(function() {
        let video = '<video width="100%" poster="pic.jpg" autoplay controls>' +
            '<source src="sneezegaurd/productvideo/videos/18.mp4" type=\'video/mp4; codecs="avc1.42E01E, mp4a.40.2"\' />' +
            '<source src="sneezegaurd/productvideo/videos/18.webm" type=\'video/webm; codecs="vp8, vorbis"\' />' +
            '<source src="sneezegaurd/productvideo/videos/18.ogv" type=\'video/ogg; codecs="theora, vorbis"\' />' +
            '</video>';
        $('#newsalert').click();
        $('.newsalert-body').html(video);

    })
    $('.light-bar-pricing').click(function() {
        let video = '<video width="100%" poster="pic.jpg" autoplay controls>' +
            '<source src="images/' + $(this).data('model-name') + '/light.mp4" type=\'video/mp4; codecs="avc1.42E01E, mp4a.40.2"\' />' +
            '<source src="images/' + $(this).data('model-name') + '/light.webm" type=\'video/webm; codecs="vp8, vorbis"\' />' +
            '<source src="images/' + $(this).data('model-name') + '/light.ogv" type=\'video/ogg; codecs="theora, vorbis"\' />' +
            '</video>';
        $('#newsalert').click();
        $('.newsalert-body').html(video);

    })
    $('.light-bar-barcket-pricing').click(function() {
            let video = '<video width="100%" poster="pic.jpg" autoplay controls>' +
                '<source src="images/light_bracket.mp4" type=\'video/mp4; codecs="avc1.42E01E, mp4a.40.2"\' />' +
                '<source src="images/light_bracket.webm" type=\'video/webm; codecs="vp8, vorbis"\' />' +
                '<source src="images/light_bracket.ogv" type=\'video/ogg; codecs="theora, vorbis"\' />' +
                '</video>';
            $('#newsalert').click();
            $('.newsalert-body').html(video);

        })
        /**code for 360 view 01-12-2020 */
    $('.360-view-btn').click(function() {
        let videourl = $(this).data('videourl');
        let videourlmp4 = $(this).data('videourlmp4');
        let videourlwebm = $(this).data('videourlwebm');
        let videourlogv = $(this).data('videourlogv');
        let video = '<video width="100%" poster="pic.jpg" autoplay controls>' +
            '<source src="' + videourlmp4 + '" />' +
            '<source src="' + videourlwebm + '" />' +
            '<source src="' + videourlogv + '" />' +
            '</video>';
        $('#newsalert').click();
        $('.newsalert-body').html(video);
    })
    $('.adj-btn').click(function() {
        let videourlmp4 = $(this).data('videourlmp4');
        let videourlwebm = $(this).data('videourlwebm');
        let videourlogv = $(this).data('videourlogv');
        let video = '<video width="100%" poster="pic.jpg" autoplay controls>' +
            '<source src="' + videourlmp4 + '" />' +
            '<source src="' + videourlwebm + '" />' +
            '<source src="' + videourlogv + '" />' +
            '</video>';
        $('#newsalert').click();
        $('.newsalert-body').html(video);
    })
    $('.adj2-btn').click(function() {
        let videourlmp4 = $(this).data('videourlmp4');
        let videourlwebm = $(this).data('videourlwebm');
        let videourlogv = $(this).data('videourlogv');
        let video = '<video width="100%" poster="pic.jpg" autoplay controls>' +
            '<source src="' + videourlmp4 + '" />' +
            '<source src="' + videourlwebm + '" />' +
            '<source src="' + videourlogv + '" />' +
            '</video>';
        $('#newsalert').click();
        $('.newsalert-body').html(video);
    })
    $('.videthumb').click(function() {
            let videourl = $(this).data('videourl');
            let video = '<video width="100%" poster="pic.jpg" autoplay controls><source src="' + videourl + '" /></video>';
            $('#newsalert').click();
            $('.newsalert-body').html(video);
        })
        /**code for 360 view 01-12-2020 */
        /* 30-11-2020 Added for header and footer menu toggle on mobile view */
    var countHeader = 0;
    $('form#newsletter').submit(function(e) {
        e.preventDefault();
        let form = $("form#newsletter").serialize();
        let url = $("#urlnews").val();
        $.ajax({
            type: "POST",
            url: url,
            data: form,
            success: function(data) {
                $('#newsalert').click();
                $('.newsalert-body').html(data);

            }
        });
    })
    if (screen.width <= 700) {
        $('.dropbtn').click(function() {
            if (countHeader > 0) {
                if ($(this).next('div').is(":hidden")) {
                    $('.dropdown-content').hide();
                    $(this).next('div').show();
                } else {
                    $(this).next('div').hide();
                }
            }
            countHeader++;
        })
    }

    /*Added for header and footer menu toggle on mobile view */



    $('.horizon-prev').click(function() {

        var windowsize = $(window).width();
        event.preventDefault();
        $('#contentmain').animate({
            scrollLeft: "-=" + windowsize + ""
        }, "slow");
    });

    $('.horizon-next').click(function() {
        var windowsize = $(window).width();
        event.preventDefault();
        $('#contentmain').animate({
            scrollLeft: "+=" + windowsize + ""
        }, "slow");
    });


    $(".close-nav-btn").css("display", "none");
    $(".fa-bars").click(function() {
        $(".close-nav-btn").css("display", "block");
    })

    $(".admdata").css('display', 'none');
    var link = window.location.href;
    $("#link").val(link);
    /**Inside adm image and text change  vikram 15-10-2020 */
    $(".insideddadm").hover(function() {
        $(".admdata").css('display', 'none');
        $("#aboutdiv").css('display', 'block');
    })
    $("#about").hover(function() {
        $(".admdata").css('display', 'none');
        $("#aboutdiv").css('display', 'block');
    })
    $("#innovation").hover(function() {
        $(".admdata").css('display', 'none');
        $("#innovationdiv").css('display', 'block');
    })
    $("#stories").hover(function() {
        $(".admdata").css('display', 'none');
        $("#storiesdiv").css('display', 'block');
    })
    $("#sustainability").hover(function() {
        $(".admdata").css('display', 'none');
        $("#sustainabilitydiv").css('display', 'block');
    })
    $("#madeinusa").hover(function() {
        $(".admdata").css('display', 'none');
        $("#madeinusadiv").css('display', 'block');
    })
    $("#vision").hover(function() {
        $(".admdata").css('display', 'none');
        $("#visiondiv").css('display', 'block');
    })
    $("#mission").hover(function() {
        $(".admdata").css('display', 'none');
        $("#missiondiv").css('display', 'block');
    })



    /*vikram 15-10-2020 */

});
/*start :- Use for change image color in info page*/
function change_color(f) {
    var imagename = f.id;

    var modelnamess = $('#' + f.id + '').data('model')
        //alert(modelnamess);

    $("#infoimage").attr("src", "images/" + modelnamess + "/" + f.id + ".jpg");
}
/*end :- Use for change image color in info page*/
/*start :- Use for show 360 view and adjustability in info page*/
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
/*end :- Use for show 360 view and adjustability in info page*/
/*Mobile Heder Start*/
function myFunctionsss() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
        $(".topnav").css("display", "block");
    } else {
        x.className = "topnav";
    }
}



function closemobilepage() {
    $(".responsive").css("display", "none");
    $("#myTopnav").removeClass("responsive");
}
/*Mobile Heder End*/

$(document).ready(function() {
    $('.dropbtn').hover(function() {
        let modelname = $(this).data("model-name");
        let modelNameImages = $('.' + modelname + '-img').val().split(',');
        let silderDiv = '';

        function headerslider(item, index) {
            silderDiv += '<div class="carousel-item ' + ((index == 0) ? 'active' : '') + '">' +
                '<img width="100%" src="sneezegaurd/headerslider/' + modelname + '/' + item + '" alt="' + modelname + '">' +
                '</div>';
        }
        modelNameImages.forEach(headerslider);
        $('.slider-image-container').html(silderDiv);
    })
	
	var click_s=0;
    $('.passoverlink').hover(function() {
        let link = $(this).attr("alt");
        let modelname = $(this).attr("id");
        let modelNameImages = $('.' + modelname + '-img').val().split(',');
        let silderDiv = '';

        function headerslider(item, index) {
            silderDiv += '<div class="carousel-item ' + ((index == 0) ? 'active' : '') + '">' +
                '<img width="100%" src="sneezegaurd/headerslider/' + modelname + '/' + item + '" alt="' + modelname + '">' +
                '</div>';
        }
        modelNameImages.forEach(headerslider);
        $('.slider-image-container').html(silderDiv);
        let buynow_links = $(this).data("buynows");
        $('#passoverlernmore').attr('href', link);
        $('#passoverbuynow').attr('href', buynow_links);
        //alert(modelname);
			var device_width=$(window).width();
			if(device_width<1025)
			{
			setTimeout(function(){ 
             $("#"+modelname+"").attr("href", link);
             }, 500);
	
			}
			else{
			 $("#"+modelname+"").attr("href", link);	
			}
		//

		
		



        if (modelname == 'Ring-EP5') {
            var imagename1 = "" + modelname + ".gif";
            var imagename2 = "" + modelname + "_2.jpg";
            var imagename3 = "" + modelname + "_3.jpg";
            //modelname='EP5 Ring Adjustable';
        } else {
            var imagename1 = "" + modelname + ".jpg";
            var imagename2 = "" + modelname + "_2.jpg";
            var imagename3 = "" + modelname + "_3.jpg";
        }

        var textt = '';
        var text = '';
        switch (modelname) {

            case 'EP5':
                {
                    textt = "EP5: A simple vertical partition.";
                    text = "EP-5";
                    modelids = 72;
                    break;
                }

            case 'Ring-EP5':
                {
                    textt = "Ring-EP5: A simple vertical partition with Ring Brackets.";
                    text = "Ring-EP5";
                    modelids = 122;
                    break;
                }
            case 'EP6':
                {
                    textt = "EP6: A simple vertical partition.";
                    text = "EP-6";
                    modelids = 129;
                    break;
                }
            case 'EP7':
                {
                    textt = "EP7: A simple vertical partition.";
                    text = "EP-7";
                    modelids = 130;
                    break;
                }
            case 'EP8':
                {
                    textt = "EP8 Barrier: A simple vertical partition.";
                    text = "EP-8 Barrier";
                    modelids = 133;
                    break;
                }
            case 'EP15':
                {
                    textt = "EP15: Similar to the EP5, but with a mild slant away from the customer.";
                    text = "EP-15";
                    modelids = 71;
                    break;
                }
            case 'EP11':
                {
                    textt = "EP11: Pass-over sneeze guard with an overshelf.";
                    text = "EP-11";
                    modelids = 55;
                    break;
                }
            case 'EP12':
                {
                    textt = "EP12: An overshelf sneeze guard with additional rear supports.";
                    text = "EP-12";
                    modelids = 56;
                    break;
                }
            case 'EP22':
                {
                    textt = 'EP22: Similar to the EP12, but with a mild slant away from the customer.';
                    text = "EP-22";
                    modelids = 57;
                    break;
                }
            case 'EP21':
                {
                    textt = "EP21: Similar to the EP11, but with a mild slant away from the customer.";
                    text = "EP-21";
                    modelids = 58;
                    break;
                }
            case 'EP36':
                {
                    textt = 'EP36: Two-piece pass-over style sneeze guard.  Can transition into the ES31.';
                    text = "EP-36";
                    modelids = 59;
                    break;
                }

            case 'ED20':
                {
                    textt = 'ED20: A fully customizable display case with mid-shelves, commonly used in pizzerias';
                    text = "ED-20";
                    modelids = 113;
                    break;
                }

        }


        //url='info_products.php?Model='+modelname+'&mid='+modelids+'&osCsid='+session_oscidd+'';


        //alert(modelname);
        $("#header_image_passover1").attr("src", "images/hover-model/" + imagename1 + "");
        $("#header_image_passover2").attr("src", "images/hover-model/" + imagename2 + "");
        $("#header_image_passover3").attr("src", "images/hover-model/" + imagename3 + "");
        if (modelname == 'EP5' || modelname == 'EP6' || modelname == 'Ring-EP5') {
            $("#passover_slides1").attr("src", "images/slider2/" + modelname + "/slider1.png");
            $("#passover_slides2").attr("src", "images/slider2/" + modelname + "/slider2.png");
            $("#passover_slides3").attr("src", "images/slider2/" + modelname + "/slider3.png");
            $("#passover_slides4").attr("src", "images/slider2/" + modelname + "/slider4.png");
            $("#passover_slides5").attr("src", "images/slider2/" + modelname + "/slider5.png");
        }

        $("#passover_header-dropdown-model-heading").text(textt);
        $('#heading').text(text);
		
		

    })



    $('.selfservelink').hover(function() {
        let link = $(this).attr("alt");
        let modelname = $(this).attr("id");
        let modelNameImages = $('.' + modelname + '-img').val().split(',');
        let silderDiv = '';

        function headerslider(item, index) {
            silderDiv += '<div class="carousel-item ' + ((index == 0) ? 'active' : '') + '">' +
                '<img src="sneezegaurd/headerslider/' + modelname + '/' + item + '" alt="' + modelname + '">' +
                '</div>';
        }
        modelNameImages.forEach(headerslider);
        $('.slider-image-container').html(silderDiv);
        let buynow_links = $(this).data("buynows");

        $('#selfservelernmore').attr('href', link);
        $('#selfservebuynow').attr('href', buynow_links);
        //alert(modelname);

			if(modelname=='B-950-SWIVEL')
			{
			modelnameaa='B-950-SWIVEL';	
			}
			else{
			modelnameaa=modelname;	
			}
			var device_width=$(window).width();
			if(device_width<1025)
			{
			setTimeout(function(){ 
             $("#"+modelnameaa+"").attr("href", link);
             }, 500);
	
			}
			else{
			 $("#"+modelnameaa+"").attr("href", link);	
			}
			 
			 
			 
        var textt = '';
        var text = '';
        switch (modelname) {

            case 'ES29':
                {
                    textt = "ES29: For when an over shelf is needed on a counter with no tray slide.";
                    text = "ES29";

                    break;
                }

            case 'ES31':
                {
                    textt = "ES31: A simple self-serve sneeze guard for a counter with no tray slide.";
                    text = "ES31";

                    break;
                }
            case 'ES40':
                {
                    textt = "ES40: Self-serve sneeze guard with an over shelf";
                    text = "ES40";

                    break;
                }
            case 'ES53':
                {
                    textt = "ES53: Self-serve sneeze guard that can change height and has an adjustable sliding top.";
                    text = "ES53";

                    break;
                }
            case 'ES67':
                {
                    textt = "ES67: A simple self-serve sneeze guard for a counter with a tray slide.";
                    text = "ES67";

                    break;
                }
            case 'ES73':
                {
                    textt = "ES73: Self-serve sneeze guard with an over shelf.";
                    text = "ES73";

                    break;
                }
            case 'ES82':
                {
                    textt = "ES82: A large double-sided self serve sneeze guard. ";
                    text = "ES82";

                    break;
                }
            case 'ES90':
                {
                    textt = "ES90:A fully adjustable self-serve sneeze guard.";
                    text = "ES90";

                    break;
                }
            case 'ES92':
                {
                    textt = 'ES92: A fully adjustable self-serve sneeze guard.';
                    text = "ES92";

                    break;
                }
            case 'ES47':
                {
                    textt = "ES47: A fully adjustable self-serve sneeze guard.";
                    text = "ES47";

                    break;
                }
            case 'B-950':
                {
                    textt = 'B950: A fully adjustable self-serve sneeze guard.';
                    text = "B950";

                    break;
                }

            case 'B-950-SWIVEL':
                {
                    textt = 'B950-Swivel: Similar to the B950, but with an extra degree of adjustability- the heads can swivel around the posts,';
                    text = "B950-Swivel";

                    break;
                }
            case 'ORBIT360':
                {
                    textt = 'ORBIT360: A fully adjustable self-serve sneeze guard.';
                    text = "ORBIT360";

                    break;
                }

        }
        var imagename1 = "" + modelname + ".jpg";
        var imagename2 = "" + modelname + "_2.jpg";
        var imagename3 = "" + modelname + "_3.jpg";
        if (modelname == "B-950-SWIVEL") {
            modelname = "B-950S"
        }

        //alert(modelname);
        $("#header_image_selfserve1").attr("src", "images/hover-model/" + imagename1 + "");
        $("#header_image_selfserve2").attr("src", "images/hover-model/" + imagename2 + "");
        $("#header_image_selfserve3").attr("src", "images/hover-model/" + imagename3 + "");

        if (modelname == 'EP5' || modelname == 'EP6' || modelname == 'Ring-EP5') {
            $("#selfserve_slides1").attr("src", "images/slider2/" + modelname + "/slider1.png");
            $("#selfserve_slides2").attr("src", "images/slider2/" + modelname + "/slider2.png");
            $("#selfserve_slides3").attr("src", "images/slider2/" + modelname + "/slider3.png");
            $("#selfserve_slides4").attr("src", "images/slider2/" + modelname + "/slider4.png");
            $("#selfserve_slides5").attr("src", "images/slider2/" + modelname + "/slider5.png");
        }


        $("#headingself").text(text);

        $("#selfserve_header-dropdown-model-heading").text(textt);





    })

    $('.barrierlink').hover(function() {
        let link = $(this).attr("alt");
        let modelname = $(this).attr("id");
        let buynow_links = $(this).data("buynows");
        let modelNameImages = $('.' + modelname + '-img').val().split(',');
        let silderDiv = '';

        function headerslider(item, index) {
            silderDiv += '<div class="carousel-item ' + ((index == 0) ? 'active' : '') + '">' +
                '<img src="sneezegaurd/headerslider/' + modelname + '/' + item + '" alt="' + modelname + '">' +
                '</div>';
        }
        modelNameImages.forEach(headerslider);
        $('.slider-image-container').html(silderDiv);
        $('#barrierlernmore').attr('href', link);
        $('#barrierbuynow').attr('href', buynow_links);
        //alert(modelname);
			var device_width=$(window).width();
			if(device_width<1025)
			{
			setTimeout(function(){ 
             $(".barrier-"+modelname+"").attr("href", link);
             }, 500);
	
			}
			else{
			 $(".barrier-"+modelname+"").attr("href", link);	
			}

        if (modelname == 'Ring-EP5') {
            var imagename1 = "" + modelname + ".gif";
            var imagename2 = "" + modelname + "_2.jpg";
            var imagename3 = "" + modelname + "_3.jpg";

        } else {
            var imagename1 = "" + modelname + ".jpg";
            var imagename2 = "" + modelname + "_2.jpg";
            var imagename3 = "" + modelname + "_3.jpg";
        }



        var textt = '';
        var text = '';
        switch (modelname) {

            case 'EP5':
                {
                    textt = "EP5: A simple vertical partition.";
                    text = "EP-5";
                    modelids = 72;
                    break;
                }

            case 'Ring-EP5':
                {
                    textt = "Ring-EP5: A simple vertical partition with Ring Brackets.";
                    text = "Ring-EP5";
                    modelids = 122;
                    break;
                }
            case 'EP6':
                {
                    textt = "EP6: A simple vertical partition.";
                    text = "EP-6";
                    modelids = 129;
                    break;
                }
            case 'EP7':
                {
                    textt = "EP7: A simple vertical partition.";
                    text = "EP-7";
                    modelids = 130;
                    break;
                }
            case 'EP8':
                {
                    textt = "EP8 Barrier: A simple vertical partition.";
                    text = "EP-8 Barrier";
                    modelids = 133;
                    break;
                }


        }




        //alert(modelname);
        $("#header_image_barrier1").attr("src", "images/hover-model/" + imagename1 + "");
        $("#header_image_barrier2").attr("src", "images/hover-model/" + imagename2 + "");
        $("#header_image_barrier3").attr("src", "images/hover-model/" + imagename3 + "");


        //alert(modelname);

        if (modelname == 'EP5' || modelname == 'EP6' || modelname == 'Ring-EP5') {
            $("#barrier_slides1").attr("src", "images/slider2/" + modelname + "/slider1.png");
            $("#barrier_slides2").attr("src", "images/slider2/" + modelname + "/slider2.png");
            $("#barrier_slides3").attr("src", "images/slider2/" + modelname + "/slider3.png");
            $("#barrier_slides4").attr("src", "images/slider2/" + modelname + "/slider4.png");
            $("#barrier_slides5").attr("src", "images/slider2/" + modelname + "/slider5.png");
        }

        $("#barrier_header-dropdown-model-heading").text(textt);
        $('#barrierheading').text(modelname);

    })




    $('.portableslink').hover(function() {
        let link = $(this).attr("alt");
        let modelname = $(this).attr("id");
        let modelNameImages = $('.' + modelname + '-img').val().split(',');
        let silderDiv = '';

        function headerslider(item, index) {
            silderDiv += '<div class="carousel-item ' + ((index == 0) ? 'active' : '') + '">' +
                '<img src="sneezegaurd/headerslider/' + modelname + '/' + item + '" alt="' + modelname + '">' +
                '</div>';
        }
        modelNameImages.forEach(headerslider);
        $('.slider-image-container').html(silderDiv);
        let buynow_links = $(this).data("buynows");
        //alert(link);
        $('#portablelernmore').attr('href', link);
        $('#portablebuynow').attr('href', buynow_links);
        //alert(modelname);

			var device_width=$(window).width();
			if(device_width<1025)
			{
			setTimeout(function(){ 
             $("#"+modelname+"").attr("href", link);
             }, 500);
	
			}
			else{
			 $("#"+modelname+"").attr("href", link);	
			}
			 
        modelname = modelname.toUpperCase();
        var imagename1 = "" + modelname + ".jpg";
        var imagename2 = "" + modelname + "_2.jpg";
        var imagename3 = "" + modelname + "_3.jpg";
        if (modelname == "B-950P-GLASS") {
            modelname = "B-950P";
        }
        if (modelname == "EP-950-ACRYLIC") {
            modelname = "EP-950";
        }


        var textt = '';
        var text = '';
        switch (modelname) {

            case 'ALLIN1':
                {
                    textt = "ALLIN1: A simple vertical partition.";
                    text = "ALLIN1";

                    break;
                }

            case 'B-950P':
                {
                    textt = "B950P-Glass: A portable sneeze guard with an adjustable glass face and retractable stabilizers.";
                    text = "B-950P-GLASS";

                    break;
                }
            case 'EP-950':
                {
                    textt = "EP950-Acrylic: A portable sneeze guard with an adjustable acrylic face and retractable stabilizers.";
                    text = "EP-950";

                    break;
                }
            case 'ORBIT720':
                {
                    textt = "ORBIT720: A fully adjustable portable sneeze guard.";
                    text = "ORBIT720";

                    break;
                }



        }


        //alert(modelname);
        $("#header_image_portable1").attr("src", "images/hover-model/" + imagename1 + "");
        $("#header_image_portable2").attr("src", "images/hover-model/" + imagename2 + "");
        $("#header_image_portable3").attr("src", "images/hover-model/" + imagename3 + "");






        if (modelname == 'EP5' || modelname == 'EP6' || modelname == 'Ring-EP5') {

            $("#portable_slides1").attr("src", "images/slider2/" + modelname + "/slider1.png");
            $("#portable_slides2").attr("src", "images/slider2/" + modelname + "/slider2.png");
            $("#portable_slides3").attr("src", "images/slider2/" + modelname + "/slider3.png");
            $("#portable_slides4").attr("src", "images/slider2/" + modelname + "/slider4.png");
            $("#portable_slides5").attr("src", "images/slider2/" + modelname + "/slider5.png");
        }
        $("#portable_header-dropdown-model-heading").text(textt);
        $('#portableheading').text(modelname);


    })




    $('.addonslink').hover(function() {
        let link = $(this).attr("alt");
        let modelname = $(this).attr("id");
        let modelNameImages = $('.' + modelname + '-img').val().split(',');
        let silderDiv = '';

        function headerslider(item, index) {
            silderDiv += '<div class="carousel-item ' + ((index == 0) ? 'active' : '') + '">' +
                '<img src="sneezegaurd/headerslider/' + modelname + '/' + item + '" alt="' + modelname + '">' +
                '</div>';
        }
        modelNameImages.forEach(headerslider);
        $('.slider-image-container').html(silderDiv);
        let buynow_links = $(this).data("buynows");
        //alert(link);
        $('#addonslernmore').attr('href', link);
        $('#addonsbuynow').attr('href', buynow_links);
        //alert(modelname);
		data_mod=modelname;
        if (modelname == 'Light-Bar' || modelname == 'Heat-Lamp') {
			
			
            modelname = modelname.replace('-', ' ');
			
        }
		
        var imagename1 = "" + modelname + ".jpg";
        var imagename2 = "" + modelname + "_2.jpg";
        var imagename3 = "" + modelname + "_3.jpg";

		
			
			var device_width=$(window).width();
			if(device_width<1025)
			{
			setTimeout(function(){ 
             $("#"+data_mod+"").attr("href", link);
             }, 500);
	
			}
			else{
			 $("#"+data_mod+"").attr("href", link);	
			}
			 

        var textt = '';
        var text = '';
        switch (modelname) {

            case 'Light Bar':
                {
                    textt = "Light Bar: An independently-mounted LED light bar that can be installed after the fact.";
                    text = "Light Bar";

                    break;
                }

            case 'Mid-Shelves':
                {
                    textt = "Mid-Shelves: Mid-shelves that can be added to most in-stock models.";
                    text = "Mid-Shelves";

                    break;
                }
            case 'Heat Lamp':
                {
                    textt = "Heat Lamp: An indepently-mounted Hatco heat lamp that can be installed after the fact.";
                    text = "Heat Lamp";

                    break;
                }




        }



        //alert(modelname);
        $("#header_image_addons1").attr("src", "images/hover-model/" + imagename1 + "");
        $("#header_image_addons2").attr("src", "images/hover-model/" + imagename2 + "");
        $("#header_image_addons3").attr("src", "images/hover-model/" + imagename3 + "");
        $("#headingaddons").text(modelname);


        if (modelname == 'EP5' || modelname == 'EP6' || modelname == 'Ring-EP5') {


            $("#addons_slides1").attr("src", "images/slider2/" + modelname + "/slider1.png");
            $("#addons_slides2").attr("src", "images/slider2/" + modelname + "/slider2.png");
            $("#addons_slides3").attr("src", "images/slider2/" + modelname + "/slider3.png");
            $("#addons_slides4").attr("src", "images/slider2/" + modelname + "/slider4.png");
            $("#addons_slides5").attr("src", "images/slider2/" + modelname + "/slider5.png");



        }
        $("#addons_header-dropdown-model-heading").text(textt);
        $('#addonsheading').text(modelname);



    })
})








/*image change on model start*/

/*image change on model end*/

/*header dropdown start*/

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;


    tabcontent = document.getElementsByClassName("tabcontent");

    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    if (cityName == 'Hide') {
        //document.getElementById(cityName).style.display = "none";
        // evt.currentTarget.className += " active";  
    } else {
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    //alert(cityName);
    $(document).click(function() {
        // document.getElementById(cityName).style.display = "none";
    });


}






function change_color_finish(f) {
    //alert(f.id);
    var imagname = f.id;
    $("#new-arival4").attr("src", "images/new_arival/" + f.id + ".jpg");

}


function change_terminology_img() {

    $("#terminology-icons").attr("src", "img/terminology-red.png");
}

function change_terminologyblack_img() {

    $("#terminology-icons").attr("src", "img/terminology-black.png");
}

function change_contact_img() {

    $("#contact-icons").attr("src", "img/contact-red.png");
}

function change_contactblack_img() {

    $("#contact-icons").attr("src", "img/contact-black.png");
}

function change_wishlist_img() {

    $("#wishlist-icons").attr("src", "img/wishlist-red.png");
}

function change_wishlistblack_img() {

    $("#wishlist-icons").attr("src", "img/wishlist-black.png");
}


function change_cart_img() {

    $("#cart-icons").attr("src", "img/cart-red.png");
    //$('#cart-items-data').css("display","block");


}

function change_cartblack_img() {

    $("#cart-icons").attr("src", "img/cart-black.png");
    //$('#cart-items-data').css("display","none");
}


function show_cart_data() {
    $('#cart-items-data').css("display", "block");
}

function hide_cart_data() {
    $('#cart-items-data').css("display", "none");
}


function show_myaccount_list() {
    $('.myaccount-menu').css("display", "block");
}

function hide_myaccount_list() {
    $('.myaccount-menu').css("display", "none");
}

/*slide start*/
// $(document).ready(function() {
//     var slideIndexsss = 1;
//     showSlidesss1(1);
// });
// var slideIndexsss = 1;
// showSlidesss1(slideIndexsss);

// function plusSlides(n) {
//     showSlidesss1(slideIndexsss += n);
// }

// function currentSlidess1(n) {
//     showSlidesss1(slideIndexsss = n);
// }

// function showSlidesss1(n) {
//     //alert(n);

//     //
//     $('#startimg1').css("display", "none");
//     $('#startimgicon1').css("display", "none");
//     var i;
//     var slides = document.getElementsByClassName("mySlidesss1");
//     var dots = document.getElementsByClassName("demoss1");
//     var captionText = document.getElementById("caption");
//     if (n > slides.length) { slideIndexsss = 1 }
//     if (n < 1) { slideIndexsss = slides.length }
//     for (i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";
//     }
//     for (i = 0; i < dots.length; i++) {
//         dots[i].className = dots[i].className.replace(" activesli1", "");
//     }
//     slides[slideIndexsss - 1].style.display = "block";
//     dots[slideIndexsss - 1].className += " activesli1";
//     captionText.innerHTML = dots[slideIndexsss - 1].alt;
//     //demoss1 cursorss1 active
//     $(".activesli1").attr("src", "img/progress_active.png");
//     //progress_active


// }



function change_img_to_black() {
    //$(".cursorss1").attr("src","img/img_black.png");
    $(".activesli1").attr("src", "img/progress_active.png");
}

function change_img_to_incons() {
    $(".activesli1").attr("src", "img/progress_active.png");
    $(".cursorss1").attr("src", "img/img_black.png");
}


/*slide end*/







/*Instock-pupop images start*/

function show_img_popup(imgss) {
    var imgidd = imgss.id;

    // Get the modal
    var modalss = document.getElementById("myModalss");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById(imgidd);
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("captionss");

    // var urlll=$(this).data("url");

    // alert(urlll);
    // return false;


    modalss.style.display = "block";
    modalImg.src = imgss.getAttribute('src');
    //captionText.innerHTML = imgss.alt;

    // alert(imgss.getAttribute('url'));
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("model-close")[0];


    // When the user clicks on <span> (x), close the modal

    span.onclick = function() {
        modalss.style.display = "none";
    }

    link = imgss.getAttribute('url');

    document.getElementById("model-url").setAttribute("href", link);

}
/*Instock-pupop images end*/







function openPages(pageName, elmnt, color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontenthead");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinkss");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
// document.getElementById("defaultOpen").click();





function slide_leftsss1() {
    $('.latest-ordermain').animate({
        scrollLeft: '+=' + $('.latest-ordermain').width()
    });
}

function slide_rightss1() {
    $('.latest-ordermain').animate({
        scrollLeft: '-=' + $('.latest-ordermain').width()
    });
}

function show_list_footer1() {

    $('.footerlist1').css("display", "inline");
    $('.footerlist2').css("display", "none");
    $('.footerlist3').css("display", "none");
}

function show_list_footer2() {
    $('.footerlist2').css("display", "inline");
    $('.footerlist1').css("display", "none");
    $('.footerlist3').css("display", "none");
}

function show_list_footer3() {
    $('.footerlist3').css("display", "inline");
    $('.footerlist2').css("display", "none");
    $('.footerlist1').css("display", "none");
}

/*15-12-2020 deepak */
function addMoreAttachment() {
    var num = 1;
    for (i = 1; i <= num; i++) {
        var x = document.createElement("INPUT");
        x.setAttribute("type", "file");
        x.setAttribute("name", "file[]");
        x.setAttribute("class", "form-control");
        x.setAttribute("multiple", "multiple");
        document.getElementById('moreattachment').append(x);
    }
    num++;
}

/**for product_info page 30-12-2020 */
function print_quote_im() {
    function printImage(image) {
        var printWindow = window.open('', 'Print Window', 'height=1024,width=768');
        printWindow.document.write('<html><head><title>Print Window</title>');
        printWindow.document.write('</head><body ><img src=\'');
        printWindow.document.write(image.src);
        printWindow.document.write('\' style="width=595px; height:600px" /></body></html>');
        printWindow.document.close();
        setTimeout(function() {
            printWindow.print(); //your code to be executed after 1 seconds
        }, 1000);
    }
    var image = document.getElementById('image');
    printImage(image);
}


function save_quote_im() {
    var link = document.createElement('a');
    //link.className="thickbox";
    //alert(link.className);
    link.href = "img/screenshot/scrn.jpg";
    link.download = "img/screenshot/scrn.jpg"
    document.body.appendChild(link);
    link.click();
}

function email_im() {
    document.getElementById("myForm").submit();
}

function print_layout_im() {

    function printImage(image) {
        var printWindow = window.open('', 'Print Window', 'height=1024,width=768');
        printWindow.document.write('<html><head><title>Print Window</title>');
        printWindow.document.write('</head><body ><img src=\'');
        printWindow.document.write(image.src);
        printWindow.document.write('\' style="width=595px; height:600px" /></body></html>');
        printWindow.document.close();
        setTimeout(function() {
            printWindow.print(); //your code to be executed after 1 seconds
        }, 1000);
    }
    var image = document.getElementById('image');
    printImage(image);
}


function save_layout_im() {
    var link = document.createElement('a');
    //link.className="thickbox";
    //alert(link.className);
    link.href = "includes/scrn1.jpg";
    link.download = "screenshot.jpg";
    document.body.appendChild(link);
    link.click();
}











// Start Print screen popup

document.addEventListener("keyup", function (e) {
    var keyCode = e.keyCode ? e.keyCode : e.which;
            if (keyCode == 44) {
                stopPrntScr();
            }
        });
function stopPrntScr() {
	

        html2canvas(document.body, {type: 'view' }).then(function(canvas) {
				
 var img = canvas.toDataURL("image/png");
 
 var customer_id=$('#customer_idss').val();
 var remote_ipss=$('#remote_ipss').val();
 //alert(remote_ipss);
 // alert(customer_id);
 // alert(remote_ipss);
 // return false;
// Canvas2Image.saveAsJPEG(canvas); 
  $.ajax({
    type: 'POST',
    url: 'print_screen_images/print_scrn_img.php',
    data: {
      imagess: img,customer_id: customer_id
    },success:function(a){
      
    }
  });
 
	
	 var html = '<div><p class="mt-1">IP - <b style="color: red;">' + remote_ipss + '</b></p><br /><h1 class="thank-h1">Thank You</h1>' +
                    '</div>' +
                    '';
                $('#newsalert').click();
                $('.newsalert-body').html(html);
	
	
});  
}
function PS_closeWindowButton(){
  $('.PS_load').hide();
  $('.TB_overlay').hide();
}


// End Print screen popup





