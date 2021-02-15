$(document).ready(function() {
    $.ajax({
        type: 'post',
        url: "includes/check_ip_valdation_quote.php",
        data: { ip: ip },
        success: function(data) {
            $('#check_quote_ip').val('quote_ip_not_exist');
        }
    });

    $.ajax({
        type: 'post',
        url: "includes/check_ip_valdation_layout.php",
        data: { ip: ip },
        success: function(data) {
            $('#check_layout_ip').val('layout_ip_not_exist');
        }
    });
})

function save_ip_revit() {
    var name_revit = $("#name_revit").val()
    var email_revit = $("#email_revit").val()
    var reggname = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/;
    var regg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if (reggname.test(name_revit) == true) {
        if (regg.test(email_revit)) {
            var email_revit_secure = email_revit;
            $.ajax({
                type: 'post',
                url: "includes/save_revit_ip.php",
                data: { ip: ip, cate_id: cate_id, bay: bay, customer_id: customer_id, customer_city: customer_city, customer_state: customer_state, customer_country: customer_country, name_revit: name_revit, email_revit_secure: email_revit },
                success: function(data) {
                    modal.style.display = "none";
                    window.location.href = "images/" + category_name + "/" + category_name + "_" + bay + "_revit.rvt";
                    console.log(window.location.href = "images/" + category_name + "/" + category_name + "_" + bay + "_revit.rvt");
                }
            });
        } else {
            alert("You have entered an invalid email address!");
            // document.form1.text1.focus();
        }
    } else {
        alert("Invalid name given.");
    }

}

function save_ip_quote() {
    var name_quote = $("#name_quote").val()
    var email_quote = $("#email_quote").val()
    var reggname = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/;
    var regg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if (reggname.test(name_quote) == true) {
        if (regg.test(email_quote)) {
            var email_quote_secure = email_quote;
            var total_quote_price = $("#total").text();
            var totla_length = $(".total").text();
            $.ajax({
                type: 'post',
                url: "includes/save_quote_ip.php",
                data: { ip: ip, cate_id: cate_id, bay: bay, customer_id: customer_id, customer_city: customer_city, customer_state: customer_state, customer_country: customer_country, name_quote: name_quote, email_quote_secure: email_quote, total_quote_price: total_quote_price, totla_length: totla_length },
                success: function(data) {
                    modal.style.display = "none";
                    abc(this.form);
                    if (customer_id == 0) {

                    } else {
                        customer_quote_data();
                    }
                }
            });
        } else {
            alert("You have entered an invalid email address!");
        }
    } else {
        alert("Invalid name given.");
    }
}

function save_ip_layout(form) {
    var name_layout = $("#name_layout").val();
    var email_layout = $("#email_layout").val();
    var reggname = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/;
    var regg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var email_layout_secure = email_layout;
    if (reggname.test(name_layout) == true) {
        if (regg.test(email_layout)) {
            $.ajax({
                type: 'post',
                url: "includes/save_layout_ip.php",
                data: { ip: ip, cate_id: cate_id, bay: bay, customer_id: customer_id, customer_city: customer_city, customer_state: customer_state, customer_country: customer_country, name_layout: name_layout, email_layout_secure: email_layout },
                success: function(data) {
                    modal.style.display = "none";
                    layout();
                }
            });
        } else {
            alert("You have entered an invalid email address!");
        }
    } else {
        alert("Invalid name given.");
    }
}

function customer_quote_data() {
    var products_id = c_glass_post_val = c_glass_face = c_glass_face_val = c_glass_mult = c_glass_right = c_glass_right_val = c_glass_right_mult = c_glass_left = c_glass_left_val = c_glass_left_mult = rostedglass_id = rostedglass_val = c_glass_a_light = c_glass_a_val_light = c_glass_b_light = c_glass_b_val_light = c_glass_c_light = c_glass_c_val_light = c_glass_d_light = c_glass_d_val_light = c_glass_adjustable_a = c_glass_adjustable_b = c_glass_adjustable_c = c_glass_adjustable_d = c_glass_adjustable_a_val = c_glass_adjustable_b_val = c_glass_adjustable_c_val = c_glass_adjustable_d_val = c_glass_right_arc_val = c_glass_left_arc_val = c_glass_a_arc_val = c_glass_b_arc_val = c_glass_c_arc_val = c_glass_d_arc_val = c_glass_a = c_glass_a_val = c_glass_a_mult = c_glass_b = c_glass_b_val = c_glass_b_mult = c_glass_c = c_glass_c_val = c_glass_c_multc_glass_d = c_glass_d_val = c_glass_d_mult = is_custom = is_frosted = product_type = msg = ckall = shelves = c_glass_a_top = c_glass_a_top_val = c_glass_b_top = c_glass_b_top_val = c_glass_c_top = c_glass_c_top_val = c_glass_d_top = c_glass_d_top_val = allincustom = custom_glass = '';
    var inps = document.getElementsByName('products_id[]');
    var product_id = [];
    for (var i = 0; i < inps.length; i++) {
        var inp = inps[i];
        product_id.push(inp.value);
    }
    console.log(inps);
    var product_type = document.getElementById("product_type").value;
    var c_glass_post_val = document.getElementById("c_glass_post_val").value;
    var c_glass_face = document.getElementById("c_glass_face").value;
    var c_glass_face_val = document.getElementById("c_glass_face_val").value;
    if (category_name == 'EP11' || category_name == 'EP12' || category_name == 'EP21' || category_name == 'EP22' || category_name == 'ES31' || category_name == 'ES40' || category_name == 'ES67' || category_name == 'ES73') {

    } else {
        var c_glass_mult = document.getElementById("c_glass_mult").value;
    }
    if (category_name == 'EP5' || category_name == 'Ring-EP5' || category_name == 'EP15' || category_name == 'EP36') {
        var rostedglass_id = document.getElementById("rostedglass_id").value;
        var rostedglass_val = document.getElementById("rostedglass_val").value;
    } else {
        //var rostedglass_id = document.getElementById("rostedglass_id").value;
        //var rostedglass_val = document.getElementById("rostedglass_val").value; 
    }
    if (category_name == 'ED20' || category_name == 'ES29' || category_name == 'ES47' || category_name == 'ES82' || category_name == 'ES90' || category_name == 'ES92') {
        var c_glass_a_top = document.getElementById("c_glass_a_top").value;
        var c_glass_a_top_val = document.getElementById("c_glass_a_top_val").value;
        var c_glass_b_top = document.getElementById("c_glass_b_top").value;
        var c_glass_b_top_val = document.getElementById("c_glass_b_top_val").value;
        var c_glass_c_top = document.getElementById("c_glass_c_top").value;
        var c_glass_c_top_val = document.getElementById("c_glass_c_top_val").value;
        var c_glass_d_top = document.getElementById("c_glass_d_top").value;
        var c_glass_d_top_val = document.getElementById("c_glass_d_top_val").value;
    }
    var c_glass_right = document.getElementById("c_glass_right").value;
    var c_glass_right_val = document.getElementById("c_glass_right_val").value;
    var c_glass_right_mult = document.getElementById("c_glass_right_mult").value;
    var c_glass_left = document.getElementById("c_glass_left").value;
    var c_glass_left_val = document.getElementById("c_glass_left_val").value;
    var c_glass_left_mult = document.getElementById("c_glass_left_mult").value;
    if (category_name == 'ES40') {} else {
        var c_glass_a_light = document.getElementById("c_glass_a_light").value;
        var c_glass_a_val_light = document.getElementById("c_glass_a_val_light").value;
        var c_glass_b_light = document.getElementById("c_glass_b_light").value;
        var c_glass_b_val_light = document.getElementById("c_glass_b_val_light").value;
        var c_glass_c_light = document.getElementById("c_glass_c_light").value;
        var c_glass_c_val_light = document.getElementById("c_glass_c_val_light").value;
        var c_glass_d_light = document.getElementById("c_glass_d_light").value;
        var c_glass_d_val_light = document.getElementById("c_glass_d_val_light").value;
    }
    var c_glass_adjustable_a = document.getElementById("c_glass_adjustable_a").value;
    var c_glass_adjustable_b = document.getElementById("c_glass_adjustable_b").value;
    var c_glass_adjustable_c = document.getElementById("c_glass_adjustable_c").value;
    var c_glass_adjustable_d = document.getElementById("c_glass_adjustable_d").value;
    var c_glass_adjustable_a_val = document.getElementById("c_glass_adjustable_a_val").value;
    var c_glass_adjustable_b_val = document.getElementById("c_glass_adjustable_b_val").value;
    var c_glass_adjustable_c_val = document.getElementById("c_glass_adjustable_c_val").value;
    var c_glass_adjustable_d_val = document.getElementById("c_glass_adjustable_d_val").value;
    var c_glass_a = document.getElementById("c_glass_a").value;
    var c_glass_a_val = document.getElementById("c_glass_a_val").value;
    var c_glass_a_mult = document.getElementById("c_glass_a_mult").value;
    var c_glass_b = document.getElementById("c_glass_b").value;
    var c_glass_b_val = document.getElementById("c_glass_b_val").value;
    var c_glass_b_mult = document.getElementById("c_glass_b_mult").value;
    var c_glass_c = document.getElementById("c_glass_c").value;
    var c_glass_c_val = document.getElementById("c_glass_c_val").value;
    var c_glass_c_mult = document.getElementById("c_glass_c_mult").value;
    var c_glass_d = document.getElementById("c_glass_d").value;
    var c_glass_d_val = document.getElementById("c_glass_d_val").value;
    var c_glass_d_mult = document.getElementById("c_glass_d_mult").value;
    var is_custom = document.getElementById("is_custom").value;
    if (category_name == 'EP5' || category_name == 'Ring-EP5' || category_name == 'EP15' || category_name == 'EP36') {
        var is_frosted = document.getElementById("is_frosted").value;
    }
    var msg = document.getElementById("msg").value;
    var ckall = document.getElementById("ckall").value;
    if (category_name == 'ALLIN1') {
        var allincustom = document.getElementById("custom").value;
        var custom_glass = document.getElementById("custom_glass").value;
    }
    $.ajax({
        type: "POST",
        url: "includes/save_data_for_quote_oredr.php",
        data: {
            c_glass_post_val: c_glass_post_val,
            c_glass_face: c_glass_face,
            c_glass_face_val: c_glass_face_val,
            c_glass_mult: c_glass_mult,
            c_glass_right: c_glass_right,
            c_glass_right_val: c_glass_right_val,
            c_glass_right_mult: c_glass_right_mult,
            c_glass_left: c_glass_left,
            c_glass_left_val: c_glass_left_val,
            c_glass_left_mult: c_glass_left_mult,
            rostedglass_id: rostedglass_id,
            rostedglass_val: rostedglass_val,
            c_glass_a_light: c_glass_a_light,
            c_glass_a_val_light: c_glass_a_val_light,
            c_glass_b_light: c_glass_b_light,
            c_glass_b_val_light: c_glass_b_val_light,
            c_glass_c_light: c_glass_c_light,
            c_glass_c_val_light: c_glass_c_val_light,
            c_glass_d_light: c_glass_d_light,
            c_glass_d_val_light: c_glass_d_val_light,
            c_glass_adjustable_a: c_glass_adjustable_a,
            c_glass_adjustable_b: c_glass_adjustable_b,
            c_glass_adjustable_c: c_glass_adjustable_c,
            c_glass_adjustable_d: c_glass_adjustable_d,
            c_glass_adjustable_a_val: c_glass_adjustable_a_val,
            c_glass_adjustable_b_val: c_glass_adjustable_b_val,
            c_glass_adjustable_c_val: c_glass_adjustable_c_val,
            c_glass_adjustable_d_val: c_glass_adjustable_d_val,
            c_glass_a: c_glass_a,
            c_glass_a_val: c_glass_a_val,
            c_glass_a_mult: c_glass_a_mult,
            c_glass_b: c_glass_b,
            c_glass_b_val: c_glass_b_val,
            c_glass_b_mult: c_glass_b_mult,
            c_glass_c: c_glass_c,
            c_glass_c_val: c_glass_c_val,
            c_glass_c_mult: c_glass_c_mult,
            c_glass_d: c_glass_d,
            c_glass_d_val: c_glass_d_val,
            c_glass_d_mult: c_glass_d_mult,
            is_custom: is_custom,
            product_type: product_type,
            msg: msg,
            ckall: ckall,
            products_id: product_id,
            customer_id: customer_idd,
            shelves: shelves,
            c_glass_a_top: c_glass_a_top,
            c_glass_a_top_val: c_glass_a_top_val,
            c_glass_b_top: c_glass_b_top,
            c_glass_b_top_val: c_glass_b_top_val,
            c_glass_c_top: c_glass_c_top,
            c_glass_c_top_val: c_glass_c_top_val,
            c_glass_d_top: c_glass_d_top,
            c_glass_d_top_val: c_glass_d_top_val,
            custom: allincustom,
            custom_glass: custom_glass,
            is_frosted: is_frosted
        },
        success: function() {

        }
    });
}

var modalss = document.getElementById("myModalsss");
var spansss = document.getElementsByClassName("closessss")[0];

spansss.onclick = function() {
    modalss.style.display = "none";
}

var modal = document.getElementById("myModal");
var name_quote = document.getElementById("name_quote");
var email_quote = document.getElementById("email_quote");
var formBtn = document.getElementsByClassName("formBtn");
var name_layout = document.getElementById("name_layout");
var email_layout = document.getElementById("email_layout");
var formBtn22 = document.getElementsByClassName("formBtn22");
var span = document.getElementsByClassName("close")[0];

function open_signup_form_quote() {
    var check_quote_ip = $("#check_quote_ip").val();
    if (check_quote_ip == 'quote_ip_exist') {
        abc(this.form);
    } else {
        modal.style.display = "block";
        $('#name_revit').css("display", "none");
        $('#email_revit').css("display", "none");
        $('#revit').css("display", "none");
        $('#name_quote').css("display", "block");
        $('#email_quote').css("display", "block");
        $('.formBtn').css("display", "block");
        $('#name_layout').css("display", "none");
        $('#email_layout').css("display", "none");
        $('.formBtn22').css("display", "none");
    }
}

function open_signup_form_rivet() {
    var check_quote_ip = $("#check_quote_ip").val();
    if (check_quote_ip == 'quote_ip_exist') {
        save_ip_quote();
    } else {
        modal.style.display = "block";
        $('#name_quote').css("display", "none");
        $('#email_quote').css("display", "none");
        $('.formBtn').css("display", "none");
        $('#name_revit').css("display", "block");
        $('#email_revit').css("display", "block");
        $('#revit').css("display", "block");
        $('#name_layout').css("display", "none");
        $('#email_layout').css("display", "none");
        $('.formBtn22').css("display", "none");
    }
}

function open_signup_form_layout() {
    // remove comment when make it online

    var check_layout_ip = $("#check_layout_ip").val();

    if (check_layout_ip == 'layout_ip_exist') {
        //  layout();
        save_ip_layout(this.form);
    } else {
        modal.style.display = "block";

        $('#name_revit').css("display", "none");
        $('#email_revit').css("display", "none");
        $('#revit').css("display", "none");

        $('#name_quote').css("display", "none");
        $('#email_quote').css("display", "none");
        $('.formBtn').css("display", "none");

        $('#name_layout').css("display", "block");
        $('#email_layout').css("display", "block");
        $('.formBtn22').css("display", "block");
    }
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {}
}

function validateForm() {
    return 0 != document.getElementById("glass-face").value
}

function wishlist() {
    var form = document.forms['cart_quantity'];
    if (myFunction(document.forms['cart_quantity'])) {
        var bay = form.type.value;
        var var1 = var2 = var3 = var4 = var5 = var6 = var7 = var8 = "";
        if (bay == "1BAY") {
            if (form.face_length !== undefined) {
                var1 = form.face_length.options[form.face_length.selectedIndex].text;
            } else {
                var1 = form.face_length_a.options[form.face_length_a.selectedIndex].text;
            }
        } else if (bay == "2BAY") {
            var1 = form.face_length_a.options[form.face_length_a.selectedIndex].text;
            var2 = form.face_length_b.options[form.face_length_b.selectedIndex].text;
        } else if (bay == "3BAY") {
            var1 = form.face_length_a.options[form.face_length_a.selectedIndex].text;
            var2 = form.face_length_b.options[form.face_length_b.selectedIndex].text;
            var3 = form.face_length_c.options[form.face_length_c.selectedIndex].text;
        } else if (bay == "4BAY") {
            var1 = form.face_length_a.options[form.face_length_a.selectedIndex].text;
            var2 = form.face_length_b.options[form.face_length_b.selectedIndex].text;
            var3 = form.face_length_c.options[form.face_length_c.selectedIndex].text;
            var4 = form.face_length_d.options[form.face_length_d.selectedIndex].text;
        }
        if (form.post_height !== undefined) {
            var5 = form.post_height.options[form.post_height.selectedIndex].text;
        }
        if (form.right_length !== undefined) {
            var6 = form.right_length.options[form.right_length.selectedIndex].text;
        }
        if (form.left_length !== undefined) {
            var7 = form.left_length.options[form.left_length.selectedIndex].text;
        }
        end = $("input#glass-face").val();
        $.ajax({
            type: "POST",
            url: "includes/script1.php",
            data: {
                mod: category_name,
                bay: bay,
                face1: var1,
                face2: var2,
                face3: var3,
                face4: var4,
                post: var5,
                left: var7,
                right: var6,
                end: end,
                tot: tot1,
                osc: osc,
                im_id: im_id,
                sv: "save",
                img: img_ajx
            },
            cache: false,
            contentType: "application/x-www-form-urlencoded",
            success: function(data, textStatus, request) {
                var action = $("form[name='cart_quantity']").attr("action");
                action = action.replace("add_product", "add_wishlist");
                $("form[name='cart_quantity']").attr("action", action);
                $("form[name='cart_quantity']").removeAttr("onsubmit");
                $("form[name='cart_quantity']").submit();
            },
            error: function(request, textStatus, errorThrown) {
                alert("some error");
            }
        });
        return false;
    } else {
        return false;
    }
}

function abc(is) {
    if (myFunction(document.forms['cart_quantity'])) {
        $("body").append("<div id='TB_load'><img alt='sneeze guard' title='sneeze guard for office' src='" + tb_pathToImage + "'></div>"); //add loader to the page
        // $("body").append("<div id='TB_overlay'></div><div id='TB_window'></div>");
		var device_width=$(window).width();
		//alert(device_width);
		
		
        $('#TB_load').show();
        $("#TB_overlay").addClass("TB_overlayBG");
        html2canvas(document.getElementsByClassName("info-main-container")).then(function(canvas) {
            var var1 = var2 = var3 = var4 = var5 = var6 = var7 = var8 = var9 = var10 = var11 = glass_corner = lightbar = postfinish = adjtb = frosted = texttt1 = texttt2 = var12 = var13 = var14 = var15 = var16 = round_a = round_b = round_c = round_d = round_face_a = round_face_b = round_face_c = round_face_d = round_type = gotocornerpostss = endpaneltype = gotoroundglassss = flange = "";
            var inps = document.getElementsByName('products_id[]');
            var product_id = [];
            for (var i = 0; i < inps.length; i++) {
                var inp = inps[i];
                product_id.push(inp.value);
            }
            var pic = canvas.toDataURL("image/jpeg");
            var total_quote_price = $("#total").text();
            var totla_length = $(".total").text();
            end = $("input#glass-face").val();
            pic = pic.replace(/^data:image\/(png|jpg);base64,/, "");
            $.ajax({
                type: "POST",
                url: "includes/script.php",
                data: {
                    img: pic,
                    id: id_for_logo,
                    bay: bay_for_logo,
                    total_quote_price: total_quote_price,
                    totla_length: totla_length,
                    customer_idd: customer_idd,
                    device_width: device_width
                },
                cache: false,
                contentType: "application/x-www-form-urlencoded",
                success: function(data, textStatus, request) {
                    modal.style.display = "none";
                    $('#TB_load').hide();
                    // $('#TB_overlay').hide();
                    var html = '<div><img id="image" src="img/screenshot/scrn.jpg" style="width:100% !important; height:auto !important;"></div>' +
                        '<div style="float:left" class="pt-1"><img src="img/save_button.png" style="margin-right:2px" onclick="save_quote_im()"><img src="img/print_button.png" style="margin-right:2px" onclick="print_quote_im()"><img src="img/email_button.png" onclick="email_im()"></div>' +
                        '<form id="myForm" name="image_send" method="post" action="#"><input type="hidden" name="save_quote" value="yes"></form>';
                    $('#newsalert').click();
                    $('.newsalert-body').html(html);
                    // tb_show("", "pop.php?KeepThis=true&TB_iframe=true&height=500&width=600", "");
                },
                error: function(request, textStatus, errorThrown) {
                    alert("some error");
                }
            })
        });
    }
}

function layout() {
    if (myFunction(document.forms['cart_quantity'])) {
        $("body").append("<div id='TB_load'><img src='" + tb_pathToImage + "'></div>"); //add loader to the page
        // $("body").append("<div id='TB_overlay'></div><div id='TB_window'></div>");
        $('#TB_load').show();
        $("#TB_overlay").addClass("TB_overlayBG");
        var form = document.forms['cart_quantity'];
        var bay = form.type.value;
        var var1 = var2 = var3 = var4 = var5 = var6 = var7 = var8 = var9 = var10 = var11 = glass_corner = lightbar = postfinish = adjtb = frosted = texttt1 = texttt2 = var12 = var13 = var14 = var15 = var16 = round_a = round_b = round_c = round_d = round_face_a = round_face_b = round_face_c = round_face_d = round_type = gotocornerpostss = endpaneltype = glassheight = bannerss = bannerss_type = "";
        if (category_name == 'EP11' || category_name == 'EP12' || category_name == 'EP21' || category_name == 'EP22' || category_name == 'EP36' || category_name == 'ES31') {
            endpaneltype = form.end_options_type.options[form.end_options_type.selectedIndex].text;
        }
        if (category_name == 'Ring-EP5' || category_name == 'EP5') {
            var check_arc_glass = $('#arc_glass_status :selected').val();
            if (check_arc_glass == 'yes') {
                var13 = check_arc_glass;
                var14 = $('#arc_glass_value :selected').val();
                var15 = $('#endpanel_arc_glass_value :selected').val();
                var16 = $('#arc_glass_type_value :selected').val();
            }
        }

        if (category_name == 'Ring-EP6' || category_name == 'EP6') {
            glassheight = $('#glass_height_type_value :selected').val();
        }
        var gotocornerpostss = $("input[name='gotocornerpostcheck']:checked").val();
        if (gotocornerpostss == "1") {
            var9 = form.posttype.options[form.posttype.selectedIndex].text;
            var10 = form.degree.options[form.degree.selectedIndex].text;
            var11 = $("input[name='corner_post']:checked").val();
            if (category_name == 'B950 SWIVEL' || category_name == 'EP15') {

            } else {
                if (bay == "2BAY") {} else {
                    var12 = form.noofcornerpost.options[form.noofcornerpost.selectedIndex].text;
                }
            }
        }
        var gotoroundglassss = $("input[name='gotoroundglasscheck']:checked").val();
        if (gotoroundglassss == "1") {
            round_type = form.round_type.options[form.round_type.selectedIndex].value;
        }
        if (bay == "1BAY") {
            if (form.face_length !== undefined) {
                var1 = form.face_length.options[form.face_length.selectedIndex].text;
            } else {

                var1 = form.face_length_a.options[form.face_length_a.selectedIndex].text;
            }
            if (gotoroundglassss == "1") {
                round_a = form.round_face_radius_a.options[form.round_face_radius_a.selectedIndex].text;

                round_face_a = form.round_face_length_a.options[form.round_face_length_a.selectedIndex].value;

            }
        } else if (bay == "2BAY" || bay == "2BAYEXT") {
            var1 = form.face_length_a.options[form.face_length_a.selectedIndex].text;
            var2 = form.face_length_b.options[form.face_length_b.selectedIndex].text;
            if (gotoroundglassss == "1") {
                round_a = form.round_face_radius_a.options[form.round_face_radius_a.selectedIndex].text;
                round_b = form.round_face_radius_b.options[form.round_face_radius_b.selectedIndex].text;

                round_face_a = form.round_face_length_a.options[form.round_face_length_a.selectedIndex].value;
                round_face_b = form.round_face_length_b.options[form.round_face_length_b.selectedIndex].value;

            }
        } else if (bay == "3BAY") {
            var1 = form.face_length_a.options[form.face_length_a.selectedIndex].text;
            var2 = form.face_length_b.options[form.face_length_b.selectedIndex].text;
            var3 = form.face_length_c.options[form.face_length_c.selectedIndex].text;
            if (gotoroundglassss == "1") {
                round_a = form.round_face_radius_a.options[form.round_face_radius_a.selectedIndex].text;
                round_b = form.round_face_radius_b.options[form.round_face_radius_b.selectedIndex].text;
                round_c = form.round_face_radius_c.options[form.round_face_radius_c.selectedIndex].text;

                round_face_a = form.round_face_length_a.options[form.round_face_length_a.selectedIndex].value;
                round_face_b = form.round_face_length_b.options[form.round_face_length_b.selectedIndex].value;
                round_face_c = form.round_face_length_c.options[form.round_face_length_c.selectedIndex].value;
            }
        } else if (bay == "4BAY") {
            var1 = form.face_length_a.options[form.face_length_a.selectedIndex].text;
            var2 = form.face_length_b.options[form.face_length_b.selectedIndex].text;
            var3 = form.face_length_c.options[form.face_length_c.selectedIndex].text;
            var4 = form.face_length_d.options[form.face_length_d.selectedIndex].text;
            if (gotoroundglassss == "1") {
                round_a = form.round_face_radius_a.options[form.round_face_radius_a.selectedIndex].text;
                round_b = form.round_face_radius_b.options[form.round_face_radius_b.selectedIndex].text;
                round_c = form.round_face_radius_c.options[form.round_face_radius_c.selectedIndex].text;
                round_d = form.round_face_radius_d.options[form.round_face_radius_d.selectedIndex].text;

                round_face_a = form.round_face_length_a.options[form.round_face_length_a.selectedIndex].value;
                round_face_b = form.round_face_length_b.options[form.round_face_length_b.selectedIndex].value;
                round_face_c = form.round_face_length_c.options[form.round_face_length_c.selectedIndex].value;
                round_face_d = form.round_face_length_d.options[form.round_face_length_d.selectedIndex].value;

            }
        }
        if (category_name == 'EP8') {
            bannerss = form.banners.options[form.banners.selectedIndex].value;
            bannerss_type = form.banners_side.options[form.banners_side.selectedIndex].value;
        }
        if (form.post_height !== undefined) {
            if (category_name == 'EP8') {

                var5 = '73"';

            } else {
                var5 = form.post_height.options[form.post_height.selectedIndex].text;
            }
        }
        if (form.right_length !== undefined) {
            var6 = form.right_length.options[form.right_length.selectedIndex].text;
        }
        if (form.left_length !== undefined) {
            var7 = form.left_length.options[form.left_length.selectedIndex].text;
        }
        if (category_name == 'Ring-EP5') {
            glass_corner = form.rounded_corners.options[form.rounded_corners.selectedIndex].text;
            lightbar = form.light_bar.options[form.light_bar.selectedIndex].text;
            postfinish = form.choose_finish.options[form.choose_finish.selectedIndex].text;
            adjtb = form.adjustable.options[form.adjustable.selectedIndex].text;
            frosted = form.roasted_glass.options[form.roasted_glass.selectedIndex].text;
        }
        if (category_name == "B950P") {
            var1 = form.face_length_a.options[form.face_length_a.selectedIndex].text;
        }
        if (category_name == "ORBIT720") {
            var1 = form.face_length_a.options[form.face_length_a.selectedIndex].text;
        }
        if (category_name == "ALLIN1") {
            var1 = form.optn.options[form.optn.selectedIndex].text;
        }
        if (category_name == "EP950") {
            var1 = form.face_length_a.options[form.face_length_a.selectedIndex].text;
        }

        if (category_name == "EP7") {
            var1 = form.face_length_a.options[form.face_length_a.selectedIndex].text;
        }
        if (category_name == "Light Bar") {
            texttt1 = document.querySelector('.glass_b').firstChild.data;
            texttt2 = document.querySelector('.glass_c').firstChild.data;

        }

        if (category_name == "Heat Lamp") {
            texttt1 = document.querySelector('.glass_b').firstChild.data;
            texttt2 = document.querySelector('.glass_c').firstChild.data;
        }
        end = $("input#glass-face").val();
        $.ajax({
            type: "POST",
            url: "includes/script1.php",
            data: {
                mod: category_name,
                bay: bay,
                face1: var1,
                face2: var2,
                face3: var3,
                face4: var4,
                post: var5,
                left: var7,
                right: var6,
                end: end,
                tot: tot1,
                osc: "",
                im_id: "",
                sv: "",
                img: img_ajx,
                ptype: var9,
                pdegree: var10,
                pposi: var11,
                corny: gotocornerpostss,
                glass_corner: glass_corner,
                lightbar: lightbar,
                postfinish: postfinish,
                adjtb: adjtb,
                frosted: frosted,
                texttt1: texttt1,
                texttt2: texttt2,
                nocorpost: var12,
                arc_glass: var13,
                arc_glass_value: var14,
                endpanel_arc_glass_value: var15,
                arc_glass_type_value: var16,
                round_rad_a: 'R-' + round_a,
                round_rad_b: 'R-' + round_b,
                round_rad_c: 'R-' + round_c,
                round_rad_d: 'R-' + round_d,
                round_face_a: round_face_a,
                round_face_b: round_face_b,
                round_face_c: round_face_c,
                round_face_d: round_face_d,
                gotoroundglass: gotoroundglassss,
                round_type: round_type,
                endpaneltype: endpaneltype,
                customer_idd: customer_idd,
                glassheight: glassheight,
                bannerss: bannerss,
                bannerss_type: bannerss_type
            },
            cache: false,
            contentType: "application/x-www-form-urlencoded",
            success: function(data, textStatus, request) {
                modal.style.display = "none";
                $('#TB_load').hide();
                // $('#TB_overlay').hide();
                var ip = $('#ipaddress').val();
                var html = '<div><img id="image" src="includes/scrn1.jpg" style="width:100% !important; height:auto !important;"></div><p class="mt-1">IP - <b style="color: red;">' + ip + '</b></p>' +
                    '<div style="float:left" class="pt-1"><img src="img/save_button.png" style="margin-right:2px" onclick="save_layout_im()"><img src="img/print_button.png" style="margin-right:2px" onclick="print_layout_im()"><img src="img/email_button.png" onclick="email_im()"></div>' +
                    '<form id="myForm" name="image_send" method="post" action="#"><input type="hidden" name="save_layout" value="yes"></form>';
                $('#newsalert').click();
                $('.newsalert-body').html(html);
                // tb_show("", "pop1.php?KeepThis=true&TB_iframe=true&height=500&width=600", "");
            },
            error: function(request, textStatus, errorThrown) {
                alert("some error");
            }

        });
    }
}

function layout1() {
    if (myFunction(document.forms['cart_quantity'])) {
        $("body").append("<div id='TB_load'><img src='" + tb_pathToImage + "'></div>"); //add loader to the page
        $("body").append("<div id='TB_overlay'></div><div id='TB_window'></div>");
        $('#TB_load').show();
        $("#TB_overlay").addClass("TB_overlayBG");
        var form = document.forms['cart_quantity'];
        if (category_name == "ALLIN1") {
            var1 = form.optn.options[form.optn.selectedIndex].text;
            end = "";
        } else {
            var1 = form.face_length_a.options[form.face_length_a.selectedIndex].text;;
            end = $("input#glass-face").val();
        }

        $.ajax({
            type: "POST",
            url: "includes/script1.php",
            data: {
                mod: category_name,
                bay: "",
                face1: var1,
                face2: "",
                face3: "",
                face4: "",
                post: "",
                left: "",
                right: "",
                end: end,
                tot: tot1,
                osc: "",
                im_id: "",
                sv: "",
                img: img_ajx
            },
            cache: false,
            contentType: "application/x-www-form-urlencoded",
            success: function(data, textStatus, request) {
                tb_show("", "pop1.php?KeepThis=true&TB_iframe=true&height=500&width=600", "");
            },
            error: function(request, textStatus, errorThrown) {
                alert("some error");
            }
        });
    }
}

function show_guarantee() {
    modalss.style.display = "block";
}