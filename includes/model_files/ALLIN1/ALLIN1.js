$(document).ready(function() {
    getPriceOfProduct(document.forms.cart_quantity);
    $('select[name=optn]').change(function() {
        if ($('select[name=optn]').val() == "custom") {
            var elem = $(this).closest('.item');
            $('#custom').attr('Checked', 'Checked');
            doPostChange();
            getPriceOfProduct(document.forms.cart_quantity);
        }
    });

});

function doPostChange() {

    var myArray = new Array("", "24", "30", "36", "42", "48", "54", "60", "66", "72", "78", "84", "90", "96", "");

    valuecustom = "ALLIN1-";

    my_facelengt_select = '<select name="optn" onchange="getPriceOfProduct(this.form)" >';

    var i = 1;

    var j = 0;

    for (i = 24; i < myArray[1]; i++) {

        my_facelengt_select += '<option value="' + valuecustom + myArray[1] + '">' + valuecustom + i + '"</option>';

        my_facelengt_select += '<option value="' + valuecustom + myArray[1] + '">' + valuecustom + i + '-1/4' + '"</option>';

        my_facelengt_select += '<option value="' + valuecustom + myArray[1] + '">' + valuecustom + i + '-1/2' + '"</option>';

        my_facelengt_select += '<option value="' + valuecustom + myArray[1] + '">' + valuecustom + i + '-3/4' + '"</option>';

        j = i;

    }

    for (i = 1; i < myArray.length - 2; i++) {

        for (j = myArray[i]; j < myArray[i + 1]; j++) {

            if (j > myArray[i]) {

                my_facelengt_select += '<option value="' + valuecustom + myArray[i + 1] + '">' + valuecustom + j + '"</option>';

            } else

            {

                my_facelengt_select += '<option value="' + valuecustom + myArray[i] + '">' + valuecustom + j + '"</option>';

            }

            my_facelengt_select += '<option value="' + valuecustom + myArray[i + 1] + '">' + valuecustom + j + '-1/4' + '"</option>';

            my_facelengt_select += '<option value="' + valuecustom + myArray[i + 1] + '">' + valuecustom + j + '-1/2' + '"</option>';

            my_facelengt_select += '<option value="' + valuecustom + myArray[i + 1] + '">' + valuecustom + j + '-3/4' + '"</option>';

        }

    }

    my_facelengt_select += '<option value="' + valuecustom + myArray[i] + '">' + valuecustom + myArray[i] + '"</option>';

    $('.custom_span').html(my_facelengt_select);

}

function myFunction2(form) {
    if (myFunction(document.forms['cart_quantity'])) {
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
                osc: osc,
                im_id: im_id,
                sv: "save",
                img: img_ajx
            },
            cache: false,
            contentType: "application/x-www-form-urlencoded",
            success: function(data, textStatus, request) {
                //tb_show("","pop1.php?KeepThis=true&TB_iframe=true&height=500&width=600","");
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

function myFunction(form) {
    if (form.optn.value == "select") {
        var x = '<center><img src="img/addToCartWindow.jpg" width="100%"></center>';
        x += '<ul style="margin-left:30px;">';
        x += '<li>Options <span style="color:red">?</span></li>';
        x += '</ul>';
        var elem = $(this).closest('.item');

        $.confirm({

            'title': 'More Information Is Needed.....',
            'message': x,
            'buttons': {
                'OK': {
                    'class': 'blue',
                    'action': function() {}
                }
            }
        });
        return false;
    } else {
        return true;
    }
}

function getProductFolderName(productname) {

    foldername = "";

    switch (productname) {

        case 'ALLIN1':
            {

                foldername = "ALLIN1";

                break;

            }

    }

    return foldername;

}

// function getPriceOfProduct(form){ 
// 	var imageName="";
//        image_string='<img src="images/'+foldername+'/'+imageName+'.jpg" width="604px">'; 

// } 

function getAfterChar(str) {

    var f_str = str.substring(str.lastIndexOf("-") + 1, str.lastIndexOf('"'));

    if (isInt(f_str)) { return ''; } else { return f_str; }

}

function getBeforeChar(str) {

    var f_str = str.substr(0, str.indexOf('-'));

    if (f_str == "") {

        return str.substr(0, str.indexOf('"'));;

    } else { return f_str; }

}

function setHideShow(selector, msg) {

    setShowEvent(selector, msg)

    //setHideEvent(selector);

}

function setHideShow1(selector, msg) {
    setShowEventmsg(selector, msg)
        //$(".msgtishu1").remove();

    //setHideEvent(selector);
}

function setHideShow2(selector, msg) {
    setShowEventmsg2(selector, msg)
        //setHideEvent(selector);
}

function setShowEventverticle(selector, msg) {
    // $("#additional_image").css("opacity","0.5");
    // $(".test-hide").css("opacity","0.5");
    var cssObj = {
        "background-color": "#111",
        "border-style": "solid",
        "border-width": "2px",
        "border-color": "#ff0000"
    };
    $(selector).css(cssObj);
    $("#message_wp").html(msg);
}

function setShowEventhori(selector, msg) {
    // $("#additional_image").css("opacity","0.5");
    // $(".test-hide").css("opacity","0.5");
    var cssObj = {
        "background-color": "#111",
        "border-style": "solid",
        "border-width": "2px",
        "border-color": "#ff0000"
    };
    $(selector).css(cssObj);
    $("#message_wp1").html(msg);
}

function setShowEventhori1(selector, msg) {
    // $("#additional_image").css("opacity","0.5");
    // $(".test-hide").css("opacity","0.5");
    var cssObj = {
        "background-color": "#111",
        "border-style": "solid",
        "border-width": "2px",
        "border-color": "#ff0000"
    };
    $(selector).css(cssObj);
    $("#message_wp2").html(msg);
}

function setShowEventmsg(selector, msg) {
    // $("#additional_image").css("opacity","0.5");
    // $(".test-hide").css("opacity","0.5");
    var cssObj = {
        "background-color": "#111",
        "border-style": "solid",
        "border-width": "2px",
        "border-color": "#ff0000"
    };
    $(selector).css(cssObj);
    $(".msgtishu").html(msg);

}

function setShowEventmsg2(selector, msg) {
    // $("#additional_image").css("opacity","0.5");
    // $(".test-hide").css("opacity","0.5");
    var cssObj = {
        "background-color": "#111",
        "border-style": "solid",
        "border-width": "2px",
        "border-color": "#ff0000"
    };
    $(selector).css(cssObj);
    $(".msgtishu1").html(msg);
}

function setShowEvent(selector, msg) {

    //$("#additional_image").css("opacity","0.5");

    //$(".test-hide").css("opacity","0.5");

    var cssObj = {

        "background-color": "#111",

        "border": "2px solid #ff0000"
    };

    $(selector).css(cssObj);

    $("#message_w").html(msg);

    var cssObj = { "border": "2px solid #ff0000" };

    $("#message_w").css(cssObj);

}

function setHideEvent(selector) {

    setInterval(function() {

        action_event(selector);

    }, 4000);

}

var action_event = function(selector) {

    $("#additional_image").css("opacity", "1.0");

    var cssObj = {

        "background": "none",

        "border": "none",

        "box-shadow": "none"
    };

    $(selector).css(cssObj);

    $(".test-hide").css("opacity", "1.0");

    $("#message_w").html("");

};

function getprice() {

    $("#products_ids").html("");

    $("#t_price").html("");

    $("#cart_button").attr("disabled", "disabled");

    //clickFunction();

}

function getPriceOfProduct(form) {
    var price = 0;
    var name = "";
    finish = form.choose_finish.val;
    i = $("ul.option").children().length;
    j = 0;
    if (form.optn.value != "select") {
        if (form.optn.value != "custom") {
            name = form.optn.value;
            if (form.choose_finish.value == "SL") {

                name = name + "-SL";

            }
            price = product_name_price[name][1];
        }

    }
    if ($('#customselect').length == 0) {

        $('#custom_glass').val($('select[name=optn]').find('option:selected').text());
    }

    h = form.optn.value.split("-");

    /* ani code* if custom check has been checked gte the dropdown text as an height */

    var fraheight = '';

    if ($('#custom').is(':checked')) {

        h = $('select[name=optn]').find('option:selected').text().split("-");
        if (h.length == 3) {

            fraheight = h[2];
            tis = h[2];

            if (fraheight != 'undefined') {

                fraheight = fraheight.split('"');

                fraheight = "-" + fraheight[0];

            }

        }

    } else { fraheight = ''; }

    /*ani code*/

    h = h[1];

    h = parseInt(h);

    h = h - 2;

    foldername = "";
    $('#product_type').val(category_name);

    image_string = '<img src="images/ALLIN1/start2.jpg" style="width:828px;height:583px;">';

    img_ajx = "start2";
    image_string += '<div class="glass">12"</div><div class="total">38"</div>';

    document.getElementById('additional_image').innerHTML = image_string;

    var myArray3 = new Array("-", "1/2");

    if (category_name == "EP950") {

        $("div.glass").html(h - 6 + fraheight + '"');

        $("div.total").html(h + 2 + fraheight + '"');

    }
    if (category_name == "ALLIN1") {
        if (form.optn.value != "select") {
            $("div.glass").html(h + 6 + myArray3[0] + myArray3[1] + fraheight + '"');
            $("div.total").html(h + 2 + fraheight + '"');
            $("#count_err").attr("src", "img/iconCheckOn.gif");

        } else {
            $("div.glass").html("Total");
            $("div.total").html("Length");
            $("#count_err").attr("src", "img/iconCheckOff.gif");

        }

        $("#t_price").html("$&nbsp;" + parseFloat(price) + ".00");

        $("#glass-face").val(1);
        if (name != "") {
            // alert(product_name_price[name][0]);
            $("#products_ids").html('<input type="hidden" name="products_id[]" value="' + product_name_price[name][0] + '">');
            // alert(name);
        }

        if (tis == '1/4"') {
            $("div.glass").html(h + 6 + myArray3[0] + '3/4' + '"');

            $("div.total").html(h + 2 + fraheight + '"');
        } else if (tis == '1/2"') {
            $("div.glass").html(h + 7 + '"');

            $("div.total").html(h + 2 + fraheight + '"');

        } else if (tis == '3/4"') {

            $("div.glass").html(h + 7 + myArray3[0] + '1/4' + '"');

            $("div.total").html(h + 2 + fraheight + '"');

        }

    } else {
        $("div.glass").html(h - 0 + fraheight + '"');

        $("div.total").html(h + 8 + fraheight + '"');
    }

    $("#t_price").html("$&nbsp;" + parseFloat(price) + ".00");

    $("#glass-face").val(1);

};

function getBeforeChar(str) {

    var f_str = str.substr(0, str.indexOf('-'));

    if (f_str == "") {

        return str.substr(0, str.indexOf('"'));;

    } else { return f_str; }

}

function getAfterChar(str) {

    var f_str = str.substring(str.lastIndexOf("-") + 1, str.lastIndexOf('"'));

    if (isInt(f_str)) { return ''; } else { return f_str; }

}

function isInt(value) {

    return !isNaN(value) && parseInt(value) == value;

}

function getTotal2(n1, n2, f_n1, f_n2) {

    var t = n1 + n2;

    if (f_n1 == '1/4' && f_n2 == '1/4') {

        t += '-1/2"';

    }

    if (f_n1 == '1/4' && f_n2 == '1/2') {

        t += '-3/4"';

    }

    if (f_n1 == '1/4' && f_n2 == '3/4') {

        t += 1;

        t += '"';

    }

    if (f_n1 == '1/2' && f_n2 == '1/4') {

        t += '-3/4"';

    }

    if (f_n1 == '1/2' && f_n2 == '1/2') {

        t += 1;

        t += '"';

    }

    if (f_n1 == '1/2' && f_n2 == '3/4') {

        t += 1;

        t += '-1/4"';

    }

    if (f_n1 == '3/4' && f_n2 == '1/4') {

        t += 1;

        t += '"';

    }

    if (f_n1 == '3/4' && f_n2 == '1/2') {

        t += 1;

        t += '-1/4"';

    }

    if (f_n1 == '3/4' && f_n2 == '3/4') {

        t += 1;

        t += '-1/2"';

    }

    if (f_n1 == "" && f_n2 != "") { t += "-" + f_n2 + '"'; }

    if (f_n2 == "" && f_n1 != "") { t += "-" + f_n1 + '"'; }

    return t;

}

function getTotal(n1, n2, f_n1, f_n2) {

    var t = n1 + n2 + 2;

    if (f_n1 == '1/4' && f_n2 == '1/4') {

        t += '-1/2"';

    }

    if (f_n1 == '1/4' && f_n2 == '1/2') {

        t += '-3/4"';

    }

    if (f_n1 == '1/4' && f_n2 == '3/4') {

        t += 1;

        t += '"';

    }

    if (f_n1 == '1/2' && f_n2 == '1/4') {

        t += '-3/4"';

    }

    if (f_n1 == '1/2' && f_n2 == '1/2') {

        t += 1;

        t += '"';

    }

    if (f_n1 == '1/2' && f_n2 == '3/4') {

        t += 1;

        t += '-1/4"';

    }

    if (f_n1 == '3/4' && f_n2 == '1/4') {

        t += 1;

        t += '"';

    }

    if (f_n1 == '3/4' && f_n2 == '1/2') {

        t += 1;

        t += '-1/4"';

    }

    if (f_n1 == '3/4' && f_n2 == '3/4') {

        t += 1;

        t += '-1/2"';

    }

    if (f_n1 == "" && f_n2 != "") { t += "-" + f_n2 + '"'; }

    if (f_n2 == "" && f_n1 != "") { t += "-" + f_n1 + '"'; }

    return t;

}

function getTotal3Bay(n1, n2, n3, f_n1, f_n2, f_n3) {

    if (f_n1 == "" && f_n2 == "" && f_n3 == "") {

        return (n1 + n2 + n3 + 1 + '"');

    }

    var t = getTotal(n1, n2, f_n1, f_n2);

    var new1 = getBeforeChar(t);

    new1 -= +3;

    var far = getAfterChar(t);

    var t = getTotal(new1, n3, far, f_n3);

    return t;

}

function getTotal4Bay(n1, n2, n3, f_n1, f_n2, f_n3) {

    if (f_n1 == "" && f_n2 == "" && f_n3 == "") {

        return (n1 + n2 + n3 + '"');

    }

    var t = getTotal2(n1, n2, f_n1, f_n2);

    var new1 = getBeforeChar(t);

    new1 -= 0;

    var far = getAfterChar(t);

    var t = getTotal2(new1, n3, far, f_n3);

    return t;

}