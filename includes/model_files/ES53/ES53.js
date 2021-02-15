$(document).ready(function() {
    zero = true;
    $("input#glass-face").val(4);
    this.forms.cart_quantity.rounded_corners.value = "squared";
    this.forms.cart_quantity.rounded_corners.selected = "Squared";

    $("#end_options").change(function() {
        if ($("#end_options").val() != "select") {
            if ($(this).val() == "Both Closed End Panels") {
                $("input#glass-face").val(1); //calling the image of both closed end panels
            } else if ($(this).val() == "Right Closed End Panel") {
                $("input#glass-face").val(2); //calling the image according to the above click
            } else if ($(this).val() == "Left Closed End Panel") {
                $("input#glass-face").val(3); //showing the image of left closed panel
            } else if ($(this).val() == "No Closed End Panels") {
                $("input#glass-face").val(4); //showing the image
            }
            if ($(".makeadjustablecheck31").val() != "select") {
                //$("#round_check").attr("disabled",true);//making disable the checkbox.. .. ..
            }
            $("#endpan_err").attr("src", "img/iconCheckOn.gif");
            zero = true;
            getPriceOfProduct(document.forms['cart_quantity']);
        } else {
            $("#endpan_err").attr("src", "img/iconCheckOff.gif");
            zero = false;
            $("input#glass-face").val(4);
            getPriceOfProduct(document.forms['cart_quantity']);
        }
    });
    getPriceOfProduct(document.forms['cart_quantity']);

});
var isOpera = !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;
// Opera 8.0+ (UA detection to detect Blink/v8-powered Opera)
var isFirefox = typeof InstallTrigger !== 'undefined'; // Firefox 1.0+
var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0;
// At least Safari 3+: "[object HTMLElementConstructor]"
var isChrome = !!window.chrome && !isOpera; // Chrome 1+
var isIE = /*@cc_on!@*/ false || !!document.documentMode; // At least IE6
if (isFirefox == true) {
    var width_one = 23;
    var width_two = 26;
    width_three = 30;
    right_next = -44;
    width_review = 21;
    redlinebrowser = 23;
    redlinebrowser1 = 23;
    redln = 85; /*red line width for price */
} else if (isChrome == true) {
    var width_one = 19;
    var width_two = 25;
    width_three = 28;
    right_next = -36;
    width_review = 19;
    redlinebrowser = 0;
    redlinebrowser1 = 0;
    redln = 85;

} else if (isSafari == true) {
    var width_one = 19;
    var width_two = 25;
    width_three = 28;
    right_next = -40;
    width_review = 19;
    redlinebrowser = 0;
    redlinebrowser1 = 0;
    redln = 85;
} else if (isIE == true) {
    var width_one = 19;
    var width_two = 28;
    width_three = 28;
    right_next = -40;
    width_review = 19;
    redlinebrowser = 0;
    redlinebrowser1 = 0;
    redln = 87;
} else if (isOpera == true) {
    var width_one = 19;
    var width_two = 25;
    width_three = 28;
    right_next = -40;
    width_review = 19;
    redlinebrowser = 0;
    redlinebrowser1 = 0;
    redln = 85;
} else {
    var width_one = 19;
    var width_two = 25;
    width_three = 28;
    width_review = 19;
    redln = 85;
}
choseOption = 0;
choselength = 0;
choseRounded = 0;
choseFlang = 0;
choseBracket = 0;
priceOption = 0;
h = 100;
h1 = 128;
h2 = 153;
h3 = 200;
h8 = 0;
t8 = 0;

function noGlass() {
    $("div.left").text("");
    $("div.right").text("");
    $("div.glass").text("");
    $("div.glass_a").text("");
    $("div.glass_b").text("");
    $("div.glass_c").text("");
    $("div.glass_d").text("");
    $("div.total").text("");
}

$(document).ready(function() {
    $("ul.option li").click(function() {
        i = $("ul.option").children().length;
        j = 0;
        while (j < i) {
            $("ul.option li").removeClass('selected');
            j++;
        }
        $(this).addClass('selected');
        if ($(this).text() == "Both Closed End Panels") {
            $("input#glass-face").val(1);
            $("tr#right_lenght").html(rightstr);
            $("tr#left_lenght").html(leftstr);
        } else if ($(this).text() == "Right Closed End Panel") {
            $("input#glass-face").val(2);
            $("tr#left_lenght").html("<td height='22'></td>");
            $("tr#right_lenght").html(leftstr);
        } else if ($(this).text() == "Left Closed End Panel") {
            $("tr#right_lenght").html("<td height='22'></td>");
            $("tr#left_lenght").html(leftstr);
            $("input#glass-face").val(3);
        } else if ($(this).text() == "No Closed End Panels") {
            $("tr#right_lenght").html("<td height='22'></td>");
            $("tr#left_lenght").html("<td height='22'></td>");
            $("input#glass-face").val(4);
        }
        $("select").removeAttr("disabled");
        $("input").removeAttr("disabled");
        // $("#msg").remove();
        $("table tr td#option-panel").css("background", "none");
        action_event(".test-warsi")
        getPriceOfProduct(document.forms['cart_quantity']);
    });

    $('input[type="checkbox"]').click(function() {
        if ($(this).is(':checked')) {
            $(this).val(1);
            getPriceOfProduct(document.forms['cart_quantity']);
        } else {
            $(this).val(0);
            getPriceOfProduct(document.forms['cart_quantity']);
        }
    });
    var type = this.forms.cart_quantity.type.value;
    if (type == "1BAY") {

    } else if (type == "2BAY") {
        $('select[name=face_length_a]').change(function() {
            if ($(this).val() == "No Glass") {
                $('select[name=face_length_b]').val("No Glass");
            }
        });
        $('select[name=face_length_b]').change(function() {
            if ($(this).val() == "No Glass") {
                $('select[name=face_length_a]').val("No Glass");
            }
        });
    } else if (type == "3BAY") {
        $('select[name=face_length_a]').change(function() {
            if ($(this).val() == "No Glass") {
                $('select[name=face_length_b]').val("No Glass");
                $('select[name=face_length_c]').val("No Glass");
            }
        });
        $('select[name=face_length_b]').change(function() {
            if ($(this).val() == "No Glass") {
                $('select[name=face_length_a]').val("No Glass");
                $('select[name=face_length_c]').val("No Glass");
            }
        });
        $('select[name=face_length_c]').change(function() {
            if ($(this).val() == "No Glass") {
                $('select[name=face_length_a]').val("No Glass");
                $('select[name=face_length_b]').val("No Glass");
            }
        });
    } else {
        $('select[name=face_length_a]').change(function() {
            if ($(this).val() == "No Glass") {
                $('select[name=face_length_b]').val("No Glass");
                $('select[name=face_length_c]').val("No Glass");
                $('select[name=face_length_d]').val("No Glass");
            }
        });
        $('select[name=face_length_b]').change(function() {
            if ($(this).val() == "No Glass") {
                $('select[name=face_length_a]').val("No Glass");
                $('select[name=face_length_c]').val("No Glass");
                $('select[name=face_length_d]').val("No Glass");
            }
        });
        $('select[name=face_length_c]').change(function() {
            if ($(this).val() == "No Glass") {
                $('select[name=face_length_a]').val("No Glass");
                $('select[name=face_length_b]').val("No Glass");
                $('select[name=face_length_d]').val("No Glass");
            }
        });
        $('select[name=face_length_d]').change(function() {
            if ($(this).val() == "No Glass") {
                $('select[name=face_length_a]').val("No Glass");
                $('select[name=face_length_b]').val("No Glass");
                $('select[name=face_length_c]').val("No Glass");
            }
        });
    }
});

function show_lightbar_pupup(form) {

    var lightbarss = form.flange_covers.value;

    if (lightbarss == 'yes') {
        // var val_a='8-1/4"';

        // res_val_a = val_a.split('"');
        // var res_a = res_val_a[0].replace("-", "+");

        // var decimal = eval(res_a);
        // alert(decimal);
        // var e=form.end_options.value;
        var check_lightbar_value = 0;

        var bay_value = type_obj.value;
        if (bay_value == '1BAY') {
            var faceglass_valueA = $("#face_length").find("option:selected").text();
            //var ssss =$("select[name=face_length]").text();
            //alert(faceglass_valueA);
            if (faceglass_valueA == 'Select') {
                decimal_val_a = 0;
            } else {
                res_val_a = faceglass_valueA.split('"');
                var res_a = res_val_a[0].replace("-", "+");
                var decimal_val_a = eval(res_a);
            }

            if (decimal_val_a < 18) {
                check_lightbar_value = 0;
            } else {
                check_lightbar_value = 1;
            }




        }
        if (bay_value == '2BAY') {
            var faceglass_valueA = $("#face_length_a").find("option:selected").text();
            var faceglass_valueB = $("#face_length_b").find("option:selected").text();

            if (faceglass_valueA == 'Select') {
                decimal_val_a = 0;
            } else {
                res_val_a = faceglass_valueA.split('"');
                var res_a = res_val_a[0].replace("-", "+");
                var decimal_val_a = eval(res_a);
            }

            if (faceglass_valueB == 'Select') {
                decimal_val_b = 0;
            } else {
                res_val_b = faceglass_valueB.split('"');
                var res_b = res_val_b[0].replace("-", "+");
                var decimal_val_b = eval(res_b);
            }
            //alert(decimal_val_a);
            //alert(decimal_val_b);
            if (decimal_val_a < 18 || decimal_val_b < 18) {
                check_lightbar_value = 0;
            } else {
                check_lightbar_value = 1;
            }

            //alert(check_lightbar_value);


        }
        if (bay_value == '3BAY') {

            var faceglass_valueA = $("#face_length_a").find("option:selected").text();
            var faceglass_valueB = $("#face_length_b").find("option:selected").text();
            var faceglass_valueC = $("#face_length_c").find("option:selected").text();

            if (faceglass_valueA == 'Select') {
                decimal_val_a = 0;
            } else {
                res_val_a = faceglass_valueA.split('"');
                var res_a = res_val_a[0].replace("-", "+");
                var decimal_val_a = eval(res_a);
            }

            if (faceglass_valueB == 'Select') {
                decimal_val_b = 0;
            } else {
                res_val_b = faceglass_valueB.split('"');
                var res_b = res_val_b[0].replace("-", "+");
                var decimal_val_b = eval(res_b);
            }
            if (faceglass_valueC == 'Select') {
                decimal_val_c = 0;
            } else {
                res_val_c = faceglass_valueC.split('"');
                var res_c = res_val_c[0].replace("-", "+");
                var decimal_val_c = eval(res_c);
            }


            if (decimal_val_a < 18 || decimal_val_b < 18 || decimal_val_c < 18) {
                check_lightbar_value = 0;
            } else {
                check_lightbar_value = 1;
            }



        }
        if (bay_value == '4BAY') {

            var faceglass_valueA = $("#face_length_a").find("option:selected").text();
            var faceglass_valueB = $("#face_length_b").find("option:selected").text();
            var faceglass_valueC = $("#face_length_c").find("option:selected").text();
            var faceglass_valueD = $("#face_length_d").find("option:selected").text();

            if (faceglass_valueA == 'Select') {
                decimal_val_a = 0;
            } else {
                res_val_a = faceglass_valueA.split('"');
                var res_a = res_val_a[0].replace("-", "+");
                var decimal_val_a = eval(res_a);
            }

            if (faceglass_valueB == 'Select') {
                decimal_val_b = 0;
            } else {
                res_val_b = faceglass_valueB.split('"');
                var res_b = res_val_b[0].replace("-", "+");
                var decimal_val_b = eval(res_b);
            }
            if (faceglass_valueC == 'Select') {
                decimal_val_c = 0;
            } else {
                res_val_c = faceglass_valueC.split('"');
                var res_c = res_val_c[0].replace("-", "+");
                var decimal_val_c = eval(res_c);
            }
            if (faceglass_valueD == 'Select') {
                decimal_val_d = 0;
            } else {
                res_val_d = faceglass_valueD.split('"');
                var res_d = res_val_d[0].replace("-", "+");
                var decimal_val_d = eval(res_d);
            }

            if (decimal_val_a < 18 || decimal_val_b < 18 || decimal_val_c < 18 || decimal_val_d < 18) {
                check_lightbar_value = 0;
            } else {
                check_lightbar_value = 1;
            }

        }
        //alert(bay_value);	


        if (check_lightbar_value == "0") {


            $(document).ready(function() {
                var elem = $(this).closest('.item');
                $.confirm({
                    'title': 'Confirmation',
                    'message': '<div><p style="text-align: justify;"><span style="color: #ff0000;">Caution: about Lightbar Less Than 18" </span><br /><br /><br /><span>If you will select any Facelength <span style="color: #ff0000;">less that 18"</span> you will not able to select <span style="color: #ff0000;">Lightbar</span>. <br /> <br />Means you have to select every Facelenth more than 18" because there is no lightbar for less than 18" Facelength</span></p></div>',
                    'buttons': {
                        'Proceed': {
                            'class': 'blue',
                            'action': function() {


                                form.flange_covers.value = "no";
                                form.flange_covers.selected = "No";

                                $('#arc_adius').css("display", "");
                                getPriceOfProduct(document.forms['cart_quantity']);

                            }

                        },
                        'Cancel': {
                            'class': 'gray',
                            'action': function() {
                                    form.flange_covers.value = "no";
                                    form.flange_covers.selected = "No";
                                    getPriceOfProduct(document.forms['cart_quantity']);
                                } // Nothing to do in this case. You can as well omit the action property.

                        }
                    }
                });



            });
        }









    } else {

    }


}
/*lightbar popup end */







function getProductFolderName(productname) {
    foldername = "";
    switch (productname) {
        case 'ES53':
            {
                foldername = "ES53";
                break;
            }
        case 'ES53 SWIVEL':
            {
                foldername = "ES53-Swivel";
                break;
            }
        case 'ES53':
            {
                foldername = "ES53";
                break;
            }
        case 'ES82':
            {
                foldername = "ES82";
                break;
            }
    }
    return foldername;
}

function changeGlassImage(form, image) {

    foldername = getProductFolderName(category_name) + form.type.value;
    imageName = '';
    if (form.rounded_corners.value == 0) {
        imageName = 'GLASSNORAD.jpg';
    } else {
        imageName = 'GLASS.jpg'
    }
    if (image != "") {
        imageName = image;
    }
    cross = '<input type="button" onclick="getPriceOfProduct(this.form);" style="margin: 0 4px;position: absolute;right: -636px;top: -189px;width: 20px;z-index: 1000000;" value="X" class="rounded-corner-image">'



    image_string = '<img src="images/' + foldername + '/' + imageName + '.jpg" style="width:568px;height:453px;">';

    document.getElementById('additional_image').innerHTML = image_string;
    document.getElementById('rott').innerHTML = cross;
}

function nogl(form, el, val) {
    if (form.type.value == "1BAY") {
        if (val == "No Glass" || val == 'No Glass"') {}
    }
    if (form.type.value == "2BAY") {
        if (val == "No Glass" || val == 'No Glass"') {
            form.face_length_a.value = "No Glass";
            form.face_length_b.value = "No Glass";
        }
    }
    if (form.type.value == "3BAY") {
        if (val == "No Glass" || val == 'No Glass"') {
            form.face_length_a.value = "No Glass";
            form.face_length_b.value = "No Glass";
            form.face_length_c.value = "No Glass";
        }
    }
    if (form.type.value == "4BAY") {
        if (val == "No Glass" || val == 'No Glass"') {
            form.face_length_a.value = "No Glass";
            form.face_length_b.value = "No Glass";
            form.face_length_c.value = "No Glass";
            form.face_length_d.value = "No Glass";
        }
    }
}

function finishImage(form, image) {
    category_name = category_name;
    foldername = getProductFolderName(category_name);
    if (image != "") {
        imageName = image;
    }

    cross = '<input type="button" onclick="getPriceOfProduct(this.form);" style="margin: 0 4px;position: absolute;right: -615px;top: -160px;width: 20px;z-index: 1000000;" value="X" class="rounded-corner-image">'



    image_string = '<img src="images/' + imageName + '" style="width:568px;height:453px">';


    //        alert(image_string);

    document.getElementById('additional_image').innerHTML = image_string;
    document.getElementById('ro').innerHTML = cross;
}

function getVedio() {
    str = '<video id="example_video_1" class="video-js" width="600" height="480" controls="controls" preload="auto" poster="pic.jpg" autoplay ><source src="images/flang.mp4"' + " type='video/mp4; codecs=" + '"avc1.42E01E, mp4a.40.2"' + ' /><source src="images/flang.webm"' + " type='video/webm; codecs=" + '"vp8, vorbis"' + ' /><source src="images/flang.ogv"' + " type='video/ogg; codecs=" + '"theora, vorbis"' + ' /><object id="flash_fallback_1" class="vjs-flash-fallback" width="640" height="264" type="application/x-shockwave-flash" data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf"><param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" /><param name="allowfullscreen" value="true" /><param name="flashvars" value=' + "config={" + '"playlist":["pic.jpg", {"url": "images/flang.mp4","autoPlay":false,"autoBuffering":true}]}' + ' /><img src="pic.jpg" width="640" height="480" alt="Poster Image" title="No video playback capabilities." /></object></video>';
    document.getElementById('additional_image').innerHTML = str;
}

function getPriceOfProduct(form) {

    if (!$('select[name="face_length"]').length) {
        $('#c_glass_face_val').val('');
        $('#c_glass_face').val('');
    }
    if (!$('select[name="face_length_a"]').length) {
        $('#c_glass_a_val').val('');
        $('#c_glass_a').val('');
    }
    if (!$('select[name="face_length_b"]').length) {
        $('#c_glass_b_val').val('');
        $('#c_glass_b').val('');
    }
    if (!$('select[name="face_length_c"]').length) {
        $('#c_glass_c_val').val('');
        $('#c_glass_c').val('');
    }
    if (!$('select[name="face_length_d"]').length) {
        $('#c_glass_d_val').val('');
        $('#c_glass_d').val('');
    }

    number_of_end_post = 2;
    number_glass = 1;
    number_center = 1;
    flag = 1;
    foldername = "";
    imageName = "";
    glassName = "";
    glassName_l = "";
    glassName_r = "";
    glassName_a = "";
    glassName_b = "";
    glassName_c = "";
    glassName_d = "";
    leftEndPost = "";
    rightEndPost = "";
    centerPost = "";
    leftEndPanel = "";
    rightEndPanel = "";
    flangeCovers = ""; //Use For Light
    flageCovers2 = ""; //Use For Light Bracket
    rounded_corners = ""; //USE FOR roundes
    light_a = "";
    light_b = "";
    light_c = "";
    light_d = "";

    facePrice = 0;
    facePrice_a = 0;
    facePrice_b = 0;
    facePrice_c = 0;
    facePrice_d = 0;
    facePrice_l = 0;
    facePrice_r = 0;
    leftPostPrice = 0;
    rightPostPrice = 0;
    leftEndPanelPrice = 0;
    rightEndPanelPrice = 0;
    centerPostPrice = 0;
    anglePostPrice = 0;
    flangeCoversPrice = 0; //Use for Light
    flangeCoversPrice2 = 0; //Use for Light Bracket
    str = "";

    category_name = category_name;
    right_lenght_obj = form.right_length;
    left_lenght_obj = form.left_length;
    post_height_obj = form.post_height;
    face_lenght_obj = form.face_length;
    face_lenght_a_obj = form.face_length_a;
    face_lenght_b_obj = form.face_length_b;
    face_lenght_c_obj = form.face_length_c;
    face_lenght_d_obj = form.face_length_d;

    round_face_length_a_obj = form.round_face_length_a;
    round_face_length_b_obj = form.round_face_length_b;
    round_face_length_c_obj = form.round_face_length_c;
    round_face_length_d_obj = form.round_face_length_d;

    round_face_radius_a_obj = form.round_face_radius_a;
    round_face_radius_b_obj = form.round_face_radius_b;
    round_face_radius_c_obj = form.round_face_radius_c;
    round_face_radius_d_obj = form.round_face_radius_d;

    round_type_obj = form.round_type;

    type_obj = form.type;

    glass_face_obj = form.glass_face;
    corner_obj = form.rounded_corners;
    flange_covers_obj = form.flange_covers; //use Form Light

    flangeUnderCounter = "";
    flangeUnderCounterPrice = 0;
    flange_under_counter_obj = form.flange_under_counter;

    flange_covers_obj2 = form.flange_covers_2; //use Form Light Bracket
    rounded_corners_obj = form.rounded_corners; //use for roundedcorner
    choose_finish_obj = form.choose_finish;
    foldername = getProductFolderName(category_name) + type_obj.value;

    c_name = category_name;

    leftEndPost = c_name + 'LP' + choose_finish_obj.value;
    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[leftEndPost][0] + '" />';
    leftPostPrice = parseFloat(product_name_price[leftEndPost][1]);
    rightEndPost = c_name + 'RP' + choose_finish_obj.value;

    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[rightEndPost][0] + '" />';
    rightPostPrice = parseFloat(product_name_price[rightEndPost][1]);
    if (type_obj.value != "1BAY") {
        centerPost = c_name + 'CP' + choose_finish_obj.value;
    }

    if (category_name == "b950 SWIVEL") {
        c_name = 'b950';
    }
    //endpanels


    if (flange_under_counter_obj.value == "yes") {
        flangeUnderCounter = "test";
    }



    if (glass_face_obj.value == 1) {

        leftEndPanel = c_name + "-g" + left_lenght_obj.value + "LEP";
        rightEndPanel = c_name + "-g" + right_lenght_obj.value + "REP";


        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[leftEndPanel][0] + '" />';
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[rightEndPanel][0] + '" />';
        leftEndPanelPrice = parseFloat(product_name_price[leftEndPanel][1]);
        rightEndPanelPrice = parseFloat(product_name_price[rightEndPanel][1]);
        imageName = "BOTHENDS";


    } else if (glass_face_obj.value == 2) {
        leftEndPanel = "";

        rightEndPanel = c_name + "-g" + left_lenght_obj.value + "REP";


        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[rightEndPanel][0] + '" />';
        leftEndPanelPrice = 0;
        rightEndPanelPrice = parseFloat(product_name_price[rightEndPanel][1]);
        imageName = "RIGHTEND";

    } else if (glass_face_obj.value == 3) {

        leftEndPanel = c_name + "-g" + left_lenght_obj.value + "LEP";
        rightEndPanel = "";

        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[leftEndPanel][0] + '" />';
        imageName = "LEFTEND";
        leftEndPanelPrice = parseFloat(product_name_price[leftEndPanel][1]);
        rightEndPanelPrice = 0;
    } else {
        leftEndPanel = "";
        rightEndPanel = "";
        imageName = "NOENDS";
        leftEndPanelPrice = 0;
        rightEndPanelPrice = 0;
    }
    //condition for disabling the light and round corner option!!
    if (type_obj.value == "4BAY") {
        if (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass' || face_lenght_d_obj.value == 'No Glass') {
            form.flange_covers.value = "no";
            form.flange_covers.selected = "No";
            form.flange_covers.disabled = true;
            form.rounded_corners.value = "squared";
            form.rounded_corners.selected = "Squared";
            form.rounded_corners.disabled = true;
        } else {
            form.flange_covers.disabled = false;
            form.rounded_corners.disabled = false;
        }
    }
    if (type_obj.value == "3BAY") {
        if (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass') {
            form.flange_covers.value = "no";
            form.flange_covers.selected = "No";
            form.flange_covers.disabled = true;
            form.rounded_corners.value = "squared";
            form.rounded_corners.selected = "Squared";
            form.rounded_corners.disabled = true;
        } else {
            form.flange_covers.disabled = false;
            form.rounded_corners.disabled = false;
        }
    }
    if (type_obj.value == "2BAY") {
        if (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass') {
            form.flange_covers.value = "no";
            form.flange_covers.selected = "No";
            form.flange_covers.disabled = true;
            form.rounded_corners.value = "squared";
            form.rounded_corners.selected = "Squared";
            form.rounded_corners.disabled = true;
        } else {
            form.flange_covers.disabled = false;
            form.rounded_corners.disabled = false;
        }
    }
    if (type_obj.value == "1BAY") {
        if (face_lenght_obj.value == 'No Glass') {
            form.flange_covers.value = "no";
            form.flange_covers.selected = "No";
            form.flange_covers.disabled = true;
            form.rounded_corners.value = "squared";
            form.rounded_corners.selected = "Squared";
            form.rounded_corners.disabled = true;
        } else {
            form.flange_covers.disabled = false;
            form.rounded_corners.disabled = false;
        }
    }
    //glasses

    var gotoroundglass = $("input[name='gotoroundglasscheck']:checked").val();


    if (type_obj.value == "4BAY") {
        if (face_lenght_a_obj.value != "select") {

            if (gotoroundglass == 1) {
                if (round_face_length_a_obj.value == 'yes') {
                    glassName_a = c_name + "-" + face_lenght_a_obj.value + "GL RADIUS";
                } else {
                    glassName_a = c_name + "-" + face_lenght_a_obj.value + "GL";
                }
            } else {
                glassName_a = c_name + "-" + face_lenght_a_obj.value + "GL";
            }




            if (rounded_corners_obj.value == "round") {
                glassName_a = glassName_a + "-RND";
            }
            if (rounded_corners_obj.value == "squared" && (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass' || face_lenght_d_obj.value == 'No Glass')) {} else {
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_a][0] + '" />';
                facePrice_a = parseFloat(product_name_price[glassName_a][1]);
            }
        }
        if (face_lenght_b_obj.value != "select") {

            if (gotoroundglass == 1) {
                if (round_face_length_b_obj.value == 'yes') {
                    glassName_b = c_name + "-" + face_lenght_b_obj.value + "GL RADIUS";
                } else {
                    glassName_b = c_name + "-" + face_lenght_b_obj.value + "GL";
                }
            } else {
                glassName_b = c_name + "-" + face_lenght_b_obj.value + "GL";
            }

            if (rounded_corners_obj.value == "round") {
                glassName_b = glassName_b + "-RND";
            }
            if (rounded_corners_obj.value == "squared" && (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass' || face_lenght_d_obj.value == 'No Glass')) {} else {
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_b][0] + '" />';
                facePrice_b = parseFloat(product_name_price[glassName_b][1]);
            }
        }
        if (face_lenght_c_obj.value != "select") {

            if (gotoroundglass == 1) {
                if (round_face_length_c_obj.value == 'yes') {
                    glassName_c = c_name + "-" + face_lenght_c_obj.value + "GL RADIUS";
                } else {
                    glassName_c = c_name + "-" + face_lenght_c_obj.value + "GL";
                }
            } else {
                glassName_c = c_name + "-" + face_lenght_c_obj.value + "GL";
            }


            if (rounded_corners_obj.value == "round") {
                glassName_c = glassName_c + "-RND";
            }
            if (rounded_corners_obj.value == "squared" && (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass' || face_lenght_d_obj.value == 'No Glass')) {} else {
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_c][0] + '" />';
                facePrice_c = parseFloat(product_name_price[glassName_c][1]);
            }
        }
        if (face_lenght_d_obj.value != "select") {

            if (gotoroundglass == 1) {
                if (round_face_length_d_obj.value == 'yes') {
                    glassName_d = c_name + "-" + face_lenght_d_obj.value + "GL RADIUS";
                } else {
                    glassName_d = c_name + "-" + face_lenght_d_obj.value + "GL";
                }
            } else {
                glassName_d = c_name + "-" + face_lenght_d_obj.value + "GL";
            }


            if (rounded_corners_obj.value == "round") {
                glassName_d = glassName_d + "-RND";
            }
            if (rounded_corners_obj.value == "squared" && (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass' || face_lenght_d_obj.value == 'No Glass')) {

            } else {
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_d][0] + '" />';
                facePrice_d = parseFloat(product_name_price[glassName_d][1]);
            }
        }
        //          glassName_a=c_name+"-"+face_lenght_a_obj.value+"GL";
        //          glassName_b=c_name+"-"+face_lenght_b_obj.value+"GL";
        //          glassName_c=c_name+"-"+face_lenght_c_obj.value+"GL";
        // glassName_d=c_name+"-"+face_lenght_d_obj.value+"GL";

        //        if(rounded_corners_obj.value=="round"){
        // 	glassName_a=glassName_a+"-RND";
        // 	glassName_b=glassName_b+"-RND";
        // 	glassName_c=glassName_c+"-RND";
        // 	glassName_d=glassName_d+"-RND";
        //  }
        //  if(rounded_corners_obj.value=="squared" &&(face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass' || face_lenght_d_obj.value == 'No Glass')){

        //     str+='<input type="hidden" name="products_id[]" value="'+product_name_price[centerPost][0]+'" />';
        //     str+='<input type="hidden" name="products_id[]" value="'+product_name_price[centerPost][0]+'" />';
        //     str+='<input type="hidden" name="products_id[]" value="'+product_name_price[centerPost][0]+'" />';
        //              centerPostPrice=parseFloat(product_name_price[centerPost][1])+parseFloat(product_name_price[centerPost][1]);
        //   }
        //   else {
        //              // form.flange_covers.disabled=false;
        //              // form.rounded_corners.disabled=false;
        // str+='<input type="hidden" name="products_id[]" value="'+product_name_price[glassName_a][0]+'" />';
        //          str+='<input type="hidden" name="products_id[]" value="'+product_name_price[glassName_b][0]+'" />';
        //          str+='<input type="hidden" name="products_id[]" value="'+product_name_price[glassName_c][0]+'" />';
        // str+='<input type="hidden" name="products_id[]" value="'+product_name_price[glassName_d][0]+'" />';
        //          facePrice_a=parseFloat(product_name_price[glassName_a][1]);
        // str+='<input type="hidden" name="products_id[]" value="'+product_name_price[centerPost][0]+'" />';
        // str+='<input type="hidden" name="products_id[]" value="'+product_name_price[centerPost][0]+'" />';
        //          facePrice_b=parseFloat(product_name_price[glassName_b][1]);
        //          facePrice_c=parseFloat(product_name_price[glassName_c][1]);
        // facePrice_d=parseFloat(product_name_price[glassName_d][1]);
        // str+='<input type="hidden" name="products_id[]" value="'+product_name_price[centerPost][0]+'" />';
        //         centerPostPrice=parseFloat(product_name_price[centerPost][1])+parseFloat(product_name_price[centerPost][1])+parseFloat(product_name_price[centerPost][1]);
        //         }
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[centerPost][0] + '" />';
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[centerPost][0] + '" />';
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[centerPost][0] + '" />';
        centerPostPrice = parseFloat(product_name_price[centerPost][1]) + parseFloat(product_name_price[centerPost][1]) + parseFloat(product_name_price[centerPost][1]);

    }

    if (type_obj.value == "3BAY") {
        if (face_lenght_a_obj.value != "select") {

            if (gotoroundglass == 1) {
                if (round_face_length_a_obj.value == 'yes') {
                    glassName_a = c_name + "-" + face_lenght_a_obj.value + "GL RADIUS";
                } else {
                    glassName_a = c_name + "-" + face_lenght_a_obj.value + "GL";
                }
            } else {
                glassName_a = c_name + "-" + face_lenght_a_obj.value + "GL";
            }




            if (rounded_corners_obj.value == "round") {
                glassName_a = glassName_a + "-RND";
                // glassName_b=glassName_b+"-RND";
                // glassName_c=glassName_c+"-RND";
            }
            if (rounded_corners_obj.value == "squared" && (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass')) {} else {
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_a][0] + '" />';
                // str+='<input type="hidden" name="products_id[]" value="'+product_name_price[glassName_b][0]+'" />';
                // str+='<input type="hidden" name="products_id[]" value="'+product_name_price[glassName_c][0]+'" />';
                facePrice_a = parseFloat(product_name_price[glassName_a][1]);
                // facePrice_b=parseFloat(product_name_price[glassName_b][1]);
                // facePrice_c=parseFloat(product_name_price[glassName_c][1]);

            }
        }
        if (face_lenght_b_obj.value != "select") {

            if (gotoroundglass == 1) {
                if (round_face_length_b_obj.value == 'yes') {
                    glassName_b = c_name + "-" + face_lenght_b_obj.value + "GL RADIUS";
                } else {
                    glassName_b = c_name + "-" + face_lenght_b_obj.value + "GL";
                }
            } else {
                glassName_b = c_name + "-" + face_lenght_b_obj.value + "GL";
            }


            if (rounded_corners_obj.value == "round") {
                // glassName_a=glassName_a+"-RND";
                glassName_b = glassName_b + "-RND";
                // glassName_c=glassName_c+"-RND";
            }
            if (rounded_corners_obj.value == "squared" && (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass')) {} else {
                // str+='<input type="hidden" name="products_id[]" value="'+product_name_price[glassName_a][0]+'" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_b][0] + '" />';
                // str+='<input type="hidden" name="products_id[]" value="'+product_name_price[glassName_c][0]+'" />';
                // facePrice_a=parseFloat(product_name_price[glassName_a][1]);
                facePrice_b = parseFloat(product_name_price[glassName_b][1]);
                // facePrice_c=parseFloat(product_name_price[glassName_c][1]);

            }
        }
        if (face_lenght_c_obj.value != "select") {

            if (gotoroundglass == 1) {
                if (round_face_length_c_obj.value == 'yes') {
                    glassName_c = c_name + "-" + face_lenght_c_obj.value + "GL RADIUS";
                } else {
                    glassName_c = c_name + "-" + face_lenght_c_obj.value + "GL";
                }
            } else {
                glassName_c = c_name + "-" + face_lenght_c_obj.value + "GL";
            }



            if (rounded_corners_obj.value == "round") {
                // glassName_a=glassName_a+"-RND";
                // glassName_b=glassName_b+"-RND";
                glassName_c = glassName_c + "-RND";
            }
            if (rounded_corners_obj.value == "squared" && (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass')) {} else {
                // str+='<input type="hidden" name="products_id[]" value="'+product_name_price[glassName_a][0]+'" />';
                // str+='<input type="hidden" name="products_id[]" value="'+product_name_price[glassName_b][0]+'" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_c][0] + '" />';
                // facePrice_a=parseFloat(product_name_price[glassName_a][1]);
                // facePrice_b=parseFloat(product_name_price[glassName_b][1]);
                facePrice_c = parseFloat(product_name_price[glassName_c][1]);

            }
        }
        //         glassName_a=c_name+"-"+face_lenght_a_obj.value+"GL";
        //         glassName_b=c_name+"-"+face_lenght_b_obj.value+"GL";
        //         glassName_c=c_name+"-"+face_lenght_c_obj.value+"GL";

        //       if(rounded_corners_obj.value=="round"){
        // glassName_a=glassName_a+"-RND";
        // glassName_b=glassName_b+"-RND";
        // glassName_c=glassName_c+"-RND";
        // }

        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[centerPost][0] + '" />';
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[centerPost][0] + '" />';
        centerPostPrice = parseFloat(product_name_price[centerPost][1]) + parseFloat(product_name_price[centerPost][1]);

    } else if (type_obj.value == "2BAY") {
        if (face_lenght_a_obj.value != "select") {

            if (gotoroundglass == 1) {
                if (round_face_length_a_obj.value == 'yes') {
                    glassName_a = c_name + "-" + face_lenght_a_obj.value + "GL RADIUS";
                } else {
                    glassName_a = c_name + "-" + face_lenght_a_obj.value + "GL";
                }
            } else {
                glassName_a = c_name + "-" + face_lenght_a_obj.value + "GL";
            }



            // glassName_b=c_name+"-"+face_lenght_b_obj.value+"GL";
            glassName_c = "";
            if (rounded_corners_obj.value == "round") {
                glassName_a = glassName_a + "-RND";
                // glassName_b=glassName_b+"-RND";
            }
            if (rounded_corners_obj.value == "squared" && (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass')) {
                // str+='<input type="hidden" name="products_id[]" value="'+product_name_price[centerPost][0]+'" />';
                // centerPostPrice=parseFloat(product_name_price[centerPost][1]);
            } else {
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_a][0] + '" />';
                // str+='<input type="hidden" name="products_id[]" value="'+product_name_price[glassName_b][0]+'" />';
                facePrice_a = parseFloat(product_name_price[glassName_a][1]);
                // facePrice_b=parseFloat(product_name_price[glassName_b][1]);
                facePrice_c = 0;
                // str+='<input type="hidden" name="products_id[]" value="'+product_name_price[centerPost][0]+'" />';
                // centerPostPrice=parseFloat(product_name_price[centerPost][1]);
                //alert(glassName_b);
            }
        }
        if (face_lenght_b_obj.value != "select") {

            if (gotoroundglass == 1) {
                if (round_face_length_a_obj.value == 'yes') {
                    glassName_b = c_name + "-" + face_lenght_b_obj.value + "GL RADIUS";
                } else {
                    glassName_b = c_name + "-" + face_lenght_b_obj.value + "GL";
                }
            } else {
                glassName_b = c_name + "-" + face_lenght_b_obj.value + "GL";
            }

            // glassName_a=c_name+"-"+face_lenght_a_obj.value+"GL";

            glassName_c = "";
            if (rounded_corners_obj.value == "round") {
                // glassName_a=glassName_a+"-RND";
                glassName_b = glassName_b + "-RND";
            }
            if (rounded_corners_obj.value == "squared" && (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass')) {
                // str+='<input type="hidden" name="products_id[]" value="'+product_name_price[centerPost][0]+'" />';
                // centerPostPrice=parseFloat(product_name_price[centerPost][1]);
            } else {
                // str+='<input type="hidden" name="products_id[]" value="'+product_name_price[glassName_a][0]+'" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_b][0] + '" />';
                // facePrice_a=parseFloat(product_name_price[glassName_a][1]);
                facePrice_b = parseFloat(product_name_price[glassName_b][1]);
                facePrice_c = 0;
                // str+='<input type="hidden" name="products_id[]" value="'+product_name_price[centerPost][0]+'" />';
                // centerPostPrice=parseFloat(product_name_price[centerPost][1]);
                //alert(glassName_b);
            }
        }
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[centerPost][0] + '" />';
        centerPostPrice = parseFloat(product_name_price[centerPost][1]);


    } else if (type_obj.value == "1BAY") {
        if (face_lenght_obj.value != "select") {

            if (gotoroundglass == 1) {
                if (round_face_length_a_obj.value == 'yes') {
                    glassName_a = c_name + "-" + face_lenght_obj.value + "GL RADIUS";
                } else {
                    glassName_a = c_name + "-" + face_lenght_obj.value + "GL";
                }
            } else {
                glassName_a = c_name + "-" + face_lenght_obj.value + "GL";
            }


            glassName_b = "";
            glassName_c = "";
            if (rounded_corners_obj.value == "round") {
                glassName_a = glassName_a + "-RND";
            }
            facePrice_a = parseFloat(product_name_price[glassName_a][1]);
            facePrice_b = 0;
            facePrice_c = 0;
            if (face_lenght_obj.value == 'No Glass' && rounded_corners_obj.value == "squared") {} else {
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_a][0] + '" />';
            }
        }
    }







    //lights
    if (flange_covers_obj.value == "yes") {
        if (type_obj.value == "4BAY") {
            if (face_lenght_a_obj.value != "select") {
                light_a = c_name + "-" + face_lenght_a_obj.value + "LYT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_a][0] + '" />';
                flangeCoversPrice += parseFloat(product_name_price[light_a][1]);
            }
            if (face_lenght_b_obj.value != "select") {
                light_b = c_name + "-" + face_lenght_b_obj.value + "LYT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_b][0] + '" />';
                flangeCoversPrice += parseFloat(product_name_price[light_b][1]);
            }
            if (face_lenght_c_obj.value != "select") {
                light_c = c_name + "-" + face_lenght_c_obj.value + "LYT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_c][0] + '" />';
                flangeCoversPrice += parseFloat(product_name_price[light_c][1]);
            }
            if (face_lenght_d_obj.value != "select") {
                light_d = c_name + "-" + face_lenght_d_obj.value + "LYT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_d][0] + '" />';
                flangeCoversPrice += parseFloat(product_name_price[light_d][1]);
            }
            //             light_a=c_name+"-"+face_lenght_a_obj.value+"LYT";
            //             light_b=c_name+"-"+face_lenght_b_obj.value+"LYT";
            //             light_c=c_name+"-"+face_lenght_c_obj.value+"LYT";
            // light_d=c_name+"-"+face_lenght_d_obj.value+"LYT";
            //             str+='<input type="hidden" name="products_id[]" value="'+product_name_price[light_a][0]+'" />';
            //             str+='<input type="hidden" name="products_id[]" value="'+product_name_price[light_b][0]+'" />';
            //             str+='<input type="hidden" name="products_id[]" value="'+product_name_price[light_c][0]+'" />';
            // str+='<input type="hidden" name="products_id[]" value="'+product_name_price[light_d][0]+'" />';
            //             flangeCoversPrice=parseFloat(product_name_price[light_a][1])+parseFloat(product_name_price[light_b][1])+parseFloat(product_name_price[light_c][1])+parseFloat(product_name_price[light_d][1]);
            //alert(flangeCoversPrice);
        } else if (type_obj.value == "3BAY") {
            if (face_lenght_a_obj.value != "select") {
                light_a = c_name + "-" + face_lenght_a_obj.value + "LYT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_a][0] + '" />';
                flangeCoversPrice += parseFloat(product_name_price[light_a][1]);
            }
            if (face_lenght_b_obj.value != "select") {
                light_b = c_name + "-" + face_lenght_b_obj.value + "LYT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_b][0] + '" />';
                flangeCoversPrice += parseFloat(product_name_price[light_b][1]);
            }
            if (face_lenght_c_obj.value != "select") {
                light_c = c_name + "-" + face_lenght_c_obj.value + "LYT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_c][0] + '" />';
                flangeCoversPrice += parseFloat(product_name_price[light_c][1]);
            }



            light_d = "";




        } else if (type_obj.value == "2BAY") {
            if (face_lenght_a_obj.value != "select") {
                light_a = c_name + "-" + face_lenght_a_obj.value + "LYT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_a][0] + '" />';
                flangeCoversPrice += parseFloat(product_name_price[light_a][1]);
            }
            if (face_lenght_b_obj.value != "select") {
                light_b = c_name + "-" + face_lenght_b_obj.value + "LYT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_b][0] + '" />';
                flangeCoversPrice += parseFloat(product_name_price[light_b][1]);
            }

            light_c = "";
            light_d = "";
            // str+='<input type="hidden" name="products_id[]" value="'+product_name_price[light_a][0]+'" />';

            // flangeCoversPrice=parseFloat(product_name_price[light_a][1])+parseFloat(product_name_price[light_b][1])+0;
        } else {
            if (face_lenght_obj.value != "select") {
                light_a = c_name + "-" + face_lenght_obj.value + "LYT";
                light_b = "";
                light_c = "";
                light_d = "";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_a][0] + '" />';
                flangeCoversPrice = parseFloat(product_name_price[light_a][1]);
            }

        }
        //alert(flangeCoversPrice);
    }

    if (flange_covers_obj2.value == "yes") {
        flageCovers2 = "Light Bracket";
        for (i = 1; i <= flange_covers_obj2.value; i++) {
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flageCovers2][0] + '" />';
        }
        flangeCoversPrice2 = parseFloat(product_name_price[flageCovers2][1]) * flange_covers_obj2.value;
    }








    if (flangeUnderCounter != "") {
        if (category_name == "ES53") {
            if (type_obj.value == "1BAY") {
                flangeUnderCounter = "ES53-UNDER COUNTER FLANGE 1 PIECE";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
                flangeUnderCounterPrice = 2 * parseFloat(product_name_price[flangeUnderCounter][1]);
            } else if (type_obj.value == "2BAY") {
                flangeUnderCounter = "ES53-UNDER COUNTER FLANGE 1 PIECE";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
                flangeUnderCounterPrice = 3 * parseFloat(product_name_price[flangeUnderCounter][1]);
            } else if (type_obj.value == "3BAY") {
                flangeUnderCounter = "ES53-UNDER COUNTER FLANGE 1 PIECE";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
                flangeUnderCounterPrice = 4 * parseFloat(product_name_price[flangeUnderCounter][1]);
            } else if (type_obj.value == "4BAY") {
                flangeUnderCounter = "ES53-UNDER COUNTER FLANGE 1 PIECE";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
                flangeUnderCounterPrice = 5 * parseFloat(product_name_price[flangeUnderCounter][1]);
            }
        }
        if (product_name_price[flangeUnderCounter] != "undifine") {
            //str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
            //flangeUnderCounterPrice=parseFloat(product_name_price[flangeUnderCounter][1]);
        }
    }










    //images
    if (flange_covers_obj.value == "select") {
        if (choose_finish_obj.value == "SS") {
            if (rounded_corners_obj.value == "round") {
                imageName = "NORADRUND" + imageName;
            } else if (flange_covers_obj.value == "no" && rounded_corners_obj.value == "round") {
                imageName = "NORADRUND" + imageName;
            } else {
                imageName = "NORAD" + imageName;
            }
        }
        if (choose_finish_obj.value == "PC") {
            if (rounded_corners_obj.value == "round") {
                imageName = "BLACKNORADRUND" + imageName;
            } else {
                imageName = "BLACKNORAD" + imageName;
            }
        }
        if (choose_finish_obj.value == "AL") {
            if (rounded_corners_obj.value == "round") {
                imageName = "ALMNNORADRUND" + imageName;
            } else {
                imageName = "ALMNNORAD" + imageName;
            }
        }
    } else {
        if (choose_finish_obj.value == "SS") {
            if (flange_covers_obj.value == "yes" && rounded_corners_obj.value == "squared") {
                imageName = imageName;
            } else if (flange_covers_obj.value == "yes" && rounded_corners_obj.value == "round") {
                imageName = "RUND" + imageName;
            } else if (flange_covers_obj.value == "no" && rounded_corners_obj.value == "round") {
                imageName = "NORADRUND" + imageName;
            } else {
                imageName = "NORAD" + imageName;
            }

        } else if (choose_finish_obj.value == "PC") {
            if (flange_covers_obj.value == "yes" && rounded_corners_obj.value == "squared") {
                imageName = "BLACK" + imageName;
            } else if (flange_covers_obj.value == "yes" && rounded_corners_obj.value == "round") {
                imageName = "BLACKRUND" + imageName;
            } else if (flange_covers_obj.value == "no" && rounded_corners_obj.value == "round") {
                imageName = "BLACKNORADRUND" + imageName;
            } else {
                imageName = "BLACKNORAD" + imageName;
            }

        } else if (choose_finish_obj.value == "AL") {
            if (flange_covers_obj.value == "yes" && rounded_corners_obj.value == "squared") {
                imageName = "ALMN" + imageName;
            } else if (flange_covers_obj.value == "yes" && rounded_corners_obj.value == "round") {
                imageName = "ALMNRUND" + imageName;
            } else if (flange_covers_obj.value == "no" && rounded_corners_obj.value == "round") {
                imageName = "ALMNNORADRUND" + imageName;
            } else {
                imageName = "ALMNNORAD" + imageName;
            }

        }
    }

    /*if(face_lenght_obj.value == 'No Glass' && flange_covers_obj.value!=0){
             imageName="ALMN2NORAD"+imageName;
             }
           if(face_lenght_a_obj.value == 'No Glass' && flange_covers_obj.value!=0){
             imageName="ALMNORAD"+imageName;
             }
           if(face_lenght_b_obj.value == 'No Glass' && flange_covers_obj.value!=0){
             imageName="ALMNORAD"+imageName;
             }*/
    // Code End Here

    // FOR NO GLASS
    if (type_obj.value == "1BAY") {
        if (face_lenght_obj.value == 'No Glass') {
            imageName = "NOGL" + imageName;
        }
    }
    if (type_obj.value == "2BAY") {
        if (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass') {
            imageName = "NOGL" + imageName;
        }
    }
    if (type_obj.value == "3BAY") {
        if (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass') {
            imageName = "NOGL" + imageName;
        }
    }
    if (type_obj.value == "4BAY") {
        if (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass' || face_lenght_d_obj.value == 'No Glass') {
            imageName = "NOGL" + imageName;
        }
    }


    // FOR NO GLASS
    // alert(glassName_a);

    glassPrice = facePrice_a + facePrice_b + facePrice_c + facePrice_d;
    t_post_price = centerPostPrice + anglePostPrice;
    totalPrice = glassPrice + leftPostPrice + rightPostPrice + leftEndPanelPrice + rightEndPanelPrice + t_post_price + flangeCoversPrice + flangeUnderCounterPrice + flangeCoversPrice2;
    // alert(totalPrice);	


    var gotoroundglass = $("input[name='gotoroundglasscheck']:checked").val();

    //alert(gotoroundglass);
    if (gotoroundglass == 1) {
        //round_face_radius_a_obj
        //round_type_obj	
        //alert(round_face_length_a_obj.value);



        //round_face_radius_a

        if (type_obj.value == "4BAY") {
            if (round_face_length_d_obj.value == 'yes') {
                $('#radius_d').css("display", "");

                //var radius4val=''+round_face_radius_d_obj.value+'"';

                //$('.radius4').text(radius4val);
                //alert(radius4val);
                //$("div.radius4").text(radius4val);

                imageName = "4TH" + imageName;
            } else {
                $('#radius_d').css("display", "none");
                imageName = "" + imageName;
            }

        }

        if (type_obj.value == "3BAY" || type_obj.value == "4BAY") {

            if (round_face_length_c_obj.value == 'yes') {
                $('#radius_c').css("display", "");

                imageName = "3RD" + imageName;
            } else {
                $('#radius_c').css("display", "none");
                imageName = "" + imageName;
            }

        }
        if (type_obj.value == "2BAY" || type_obj.value == "3BAY" || type_obj.value == "4BAY") {
            if (round_face_length_b_obj.value == 'yes') {
                $('#radius_b').css("display", "");
                imageName = "2ND" + imageName;
            } else {
                $('#radius_b').css("display", "none");
                imageName = "" + imageName;
            }
        }




        if (round_face_length_a_obj.value == 'yes') {
            $('#radius_a').css("display", "");
            imageName = "1ST" + imageName;

            var radius1val = '' + round_face_radius_a_obj.value + '"';

            //$('.radius1').text('kdkdkmdkl');
            //alert(radius4val);
            //$("div.radius4").text(radius4val);

        } else {
            $('#radius_a').css("display", "none");
            imageName = "" + imageName;
        }


        //typeJ	
        //round_type
        //Jshape
        //Lshape
        if (round_type_obj.value == 'Jshape') {
            imageName = "JSHAPE" + imageName;
        }
        if (round_type_obj.value == 'Lshape') {
            imageName = "LSHAPE" + imageName;
        }
    }
    //$('.radius1').text('kdkdkmdkl');
    img_ajx = imageName;


    image_string = '<img src="images/' + foldername + '/' + imageName + '.jpg" style="width:568px;height:453px;">';

    image_string += '<div class="left">12"</div><div class="right">12"</div>';
    image_string += '<div class="msgtishu"></div>';

    image_string += '<div class="msgtishu1"></div>';
    image_string += '<div class="radius1"></div>';
    image_string += '<div class="radius2"></div>';
    image_string += '<div class="radius3"></div>';
    image_string += '<div class="radius4"></div>';


    image_string += '<div class="msgtishu2"><hr color="red" size="6px"   width="' + width_three + '"> </div>';

    image_string += '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="glass_d">12"</div><div class="total">38"</div>';
    //from here images are changing
    document.getElementById('additional_image').innerHTML = image_string;

    if (glass_face_obj.value == 1) {
        $("div.left").css("display", "none");
        $("div.right").css("display", "none");
    } else if (glass_face_obj.value == 2) {
        $("div.left").css("display", "none");
        $("div.right").css("display", "none");
    } else if (glass_face_obj.value == 3) {
        $("div.right").css("display", "none");
        $("div.left").css("display", "none");
    } else if (glass_face_obj.value == 4) {
        $("div.left").css("display", "none");
        $("div.right").css("display", "none");
    }

    if (type_obj.value == "1BAY") {


        if (gotoroundglass == 1) {
            //alert(round_face_length_a_obj.value);
            if (round_face_length_a_obj.value == "yes") {
                var radius1val = 'R-' + round_face_radius_a_obj.value + '"';
                //$("div.radius1").text(radius1val);
                $("div.radius1").text(radius1val);
                $('#c_glass_round_a').val('RADIUS');
                $('#c_glass_round_a_val').val(radius1val);
            } else {
                $("div.radius1").text("");
                $('#c_glass_round_a').val('');
                $('#c_glass_round_a_val').val('');

            }





        } else {
            $("div.radius1").text("");
            $("div.radius2").text("");
            $("div.radius3").text("");
            $("div.radius4").text("");

            $('#c_glass_round_a').val('');
            $('#c_glass_round_a_val').val('');


        }

        /* ani code */
        if (face_lenght_obj.value != "select") {
            $('#c_glass_a').val(product_name_price[glassName_a][0]);
            $('#c_glass_a_val').val(face_lenght_obj.options[face_lenght_obj.selectedIndex].text);
            $("div.glass").text(face_lenght_obj.options[face_lenght_obj.selectedIndex].text);
        } else {
            $("div.glass").text("A");
        }
        if (flange_covers_obj.value == "yes") {
            if (face_lenght_obj.value != "select") {
                $('#c_glass_a_light').val(product_name_price[light_a][0]);
                $('#c_glass_a_val_light').val(face_lenght_obj.options[face_lenght_obj.selectedIndex].text);
            }
        }

        var n1 = getBeforeChar($('[name="face_length"]').find('option:selected').text()) - 0;
        if (getAfterChar($('[name="face_length"]').find('option:selected').text()) != "") {
            n1 = (n1 + 2) + '-' + getAfterChar($('[name="face_length"]').find('option:selected').text()) + '"';
        } else { n1 = (n1 + 2) + '"'; }
        if (n1 == '2"') {
            $("div.total").text("Total");
        } else {
            $("div.total").text(n1);
            tot1 = n1;
        }

        /*ani code */
        if (face_lenght_obj.value == 'No Glass') {
            noGlass()
        }
    }
    if (type_obj.value == "2BAY") {


        if (gotoroundglass == 1) {
            //alert(round_face_length_a_obj.value);
            if (round_face_length_a_obj.value == "yes") {
                var radius1val = 'R-' + round_face_radius_a_obj.value + '"';
                //$("div.radius1").text(radius1val);
                $("div.radius1").text(radius1val);
                $('#c_glass_round_a').val('RADIUS');
                $('#c_glass_round_a_val').val(radius1val);
            } else {
                $("div.radius1").text("");
                $('#c_glass_round_a').val('');
                $('#c_glass_round_a_val').val('');

            }

            if (round_face_length_b_obj.value == "yes") {
                var radius2val = 'R-' + round_face_radius_b_obj.value + '"';
                $("div.radius2").text(radius2val);
                $('#c_glass_round_a').val('RADIUS');
                $('#c_glass_round_a_val').val(radius1val);

                $('#c_glass_round_b').val('RADIUS');
                $('#c_glass_round_b_val').val(radius2val);
            } else {
                $("div.radius2").text("");

                $('#c_glass_round_b').val('');
                $('#c_glass_round_b_val').val('');
            }




        } else {
            $("div.radius1").text("");
            $("div.radius2").text("");
            $("div.radius3").text("");
            $("div.radius4").text("");

            $('#c_glass_round_a').val('');
            $('#c_glass_round_a_val').val('');

            $('#c_glass_round_b').val('');
            $('#c_glass_round_b_val').val('');


        }


        // $("div.glass_a").text(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
        // $("div.glass_b").text(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
        if (face_lenght_a_obj.value != "select") {
            $("div.glass_a").text(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
            $('#c_glass_a').val(product_name_price[glassName_a][0]);
            $('#c_glass_a_val').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
            if (flange_covers_obj.value == "yes") {
                $('#c_glass_a_light').val(product_name_price[light_a][0]);
                $('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                // $('#c_glass_b_light').val(product_name_price[light_b][0]);
                // $('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
            }
        } else {
            $("div.glass_a").text("A");
        }
        if (face_lenght_b_obj.value != "select") {
            $("div.glass_b").text(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
            $('#c_glass_b').val(product_name_price[glassName_b][0]);
            $('#c_glass_b_val').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
            if (flange_covers_obj.value == "yes") {
                // $('#c_glass_a_light').val(product_name_price[light_a][0]);
                // $('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                $('#c_glass_b_light').val(product_name_price[light_b][0]);
                $('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
            }
        } else {
            $("div.glass_b").text("B");
        }
        var n1 = getBeforeChar($('[name="face_length_a"]').find('option:selected').text()) - 0;
        var n2 = getBeforeChar($('[name="face_length_b"]').find('option:selected').text()) - 0;
        var f_n1 = getAfterChar($('[name="face_length_a"]').find('option:selected').text());
        var f_n2 = getAfterChar($('[name="face_length_b"]').find('option:selected').text());
        var total = getTotal(n1, n2, f_n1, f_n2);
        if (total == '2"') {
            $("div.total").text("Total");
        } else {
            $("div.total").text(total);
            tot1 = total;
        }

        if (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass') {
            noGlass()
        }
    }
    if (type_obj.value == "3BAY") {


        if (gotoroundglass == 1) {
            //alert(round_face_length_a_obj.value);
            if (round_face_length_a_obj.value == "yes") {
                var radius1val = 'R-' + round_face_radius_a_obj.value + '"';
                //$("div.radius1").text(radius1val);
                $("div.radius1").text(radius1val);
                $('#c_glass_round_a').val('RADIUS');
                $('#c_glass_round_a_val').val(radius1val);
            } else {
                $("div.radius1").text("");
                $('#c_glass_round_a').val('');
                $('#c_glass_round_a_val').val('');

            }

            if (round_face_length_b_obj.value == "yes") {
                var radius2val = 'R-' + round_face_radius_b_obj.value + '"';
                $("div.radius2").text(radius2val);
                $('#c_glass_round_a').val('RADIUS');
                $('#c_glass_round_a_val').val(radius1val);

                $('#c_glass_round_b').val('RADIUS');
                $('#c_glass_round_b_val').val(radius2val);
            } else {
                $("div.radius2").text("");

                $('#c_glass_round_b').val('');
                $('#c_glass_round_b_val').val('');
            }

            if (round_face_length_c_obj.value == "yes") {
                var radius3val = 'R-' + round_face_radius_c_obj.value + '"';
                $("div.radius3").text(radius3val);
                $('#c_glass_round_a').val('RADIUS');
                $('#c_glass_round_a_val').val(radius1val);

                $('#c_glass_round_b').val('RADIUS');
                $('#c_glass_round_b_val').val(radius2val);

                $('#c_glass_round_c').val('RADIUS');
                $('#c_glass_round_c_val').val(radius3val);

            } else {
                $("div.radius3").text("");
                $('#c_glass_round_c').val('');
                $('#c_glass_round_c_val').val('');
            }



        } else {
            $("div.radius1").text("");
            $("div.radius2").text("");
            $("div.radius3").text("");
            $("div.radius4").text("");

            $('#c_glass_round_a').val('');
            $('#c_glass_round_a_val').val('');

            $('#c_glass_round_b').val('');
            $('#c_glass_round_b_val').val('');

            $('#c_glass_round_c').val('');
            $('#c_glass_round_c_val').val('');

        }


        if (face_lenght_a_obj.value != "select") {
            $("div.glass_a").text(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
            $('#c_glass_a').val(product_name_price[glassName_a][0]);
            $('#c_glass_a_val').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
            if (flange_covers_obj.value == "yes") {
                $('#c_glass_a_light').val(product_name_price[light_a][0]);
                $('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                // $('#c_glass_b_light').val(product_name_price[light_b][0]);
                // $('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                // $('#c_glass_c_light').val(product_name_price[light_c][0]);
                // $('#c_glass_c_val_light').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
            }
        } else {
            $("div.glass_a").text("A");
        }
        if (face_lenght_b_obj.value != "select") {
            $("div.glass_b").text(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
            $('#c_glass_b').val(product_name_price[glassName_b][0]);
            $('#c_glass_b_val').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
            if (flange_covers_obj.value == "yes") {
                // $('#c_glass_a_light').val(product_name_price[light_a][0]);
                // $('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                $('#c_glass_b_light').val(product_name_price[light_b][0]);
                $('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                // $('#c_glass_c_light').val(product_name_price[light_c][0]);
                // $('#c_glass_c_val_light').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
            }
        } else {
            $("div.glass_b").text("B");
        }
        if (face_lenght_c_obj.value != "select") {
            $("div.glass_c").text(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
            $('#c_glass_c').val(product_name_price[glassName_c][0]);
            $('#c_glass_c_val').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
            if (flange_covers_obj.value == "yes") {
                // $('#c_glass_a_light').val(product_name_price[light_a][0]);
                // $('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                // $('#c_glass_b_light').val(product_name_price[light_b][0]);
                // $('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                $('#c_glass_c_light').val(product_name_price[light_c][0]);
                $('#c_glass_c_val_light').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
            }
        } else {
            $("div.glass_c").text("C");
        }



        // if(flange_covers_obj.value=="yes"){
        //     $('#c_glass_a_light').val(product_name_price[light_a][0]);
        //     $('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
        //     $('#c_glass_b_light').val(product_name_price[light_b][0]);
        //     $('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
        //     $('#c_glass_c_light').val(product_name_price[light_c][0]);
        //     $('#c_glass_c_val_light').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
        // }







        var n1 = getBeforeChar($('[name="face_length_a"]').find('option:selected').text()) - 0;
        var n2 = getBeforeChar($('[name="face_length_b"]').find('option:selected').text()) - 0;
        var n3 = getBeforeChar($('[name="face_length_c"]').find('option:selected').text()) - 0;
        var f_n1 = getAfterChar($('[name="face_length_a"]').find('option:selected').text());
        var f_n2 = getAfterChar($('[name="face_length_b"]').find('option:selected').text());
        var f_n3 = getAfterChar($('[name="face_length_c"]').find('option:selected').text());
        //this function not working properly		
        var total = getTotal3Bay(n1, n2, n3, f_n1, f_n2, f_n3);

        if (total == '2"') {
            $("div.total").text("Total");
        } else {
            $("div.total").text(total);
            tot1 = total;
        }
        if (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass') {
            noGlass()
        }
    }
    if (type_obj.value == "4BAY") {

        // var gotoroundglass=$("input[name='gotoroundglasscheck']:checked").val();

        if (gotoroundglass == 1) {
            //alert(round_face_length_a_obj.value);
            if (round_face_length_a_obj.value == "yes") {
                var radius1val = 'R-' + round_face_radius_a_obj.value + '"';
                //$("div.radius1").text(radius1val);
                $("div.radius1").text(radius1val);
                $('#c_glass_round_a').val('RADIUS');
                $('#c_glass_round_a_val').val(radius1val);
            } else {
                $("div.radius1").text("");
                $('#c_glass_round_a').val('');
                $('#c_glass_round_a_val').val('');

            }

            if (round_face_length_b_obj.value == "yes") {
                var radius2val = 'R-' + round_face_radius_b_obj.value + '"';
                $("div.radius2").text(radius2val);
                $('#c_glass_round_a').val('RADIUS');
                $('#c_glass_round_a_val').val(radius1val);

                $('#c_glass_round_b').val('RADIUS');
                $('#c_glass_round_b_val').val(radius2val);
            } else {
                $("div.radius2").text("");

                $('#c_glass_round_b').val('');
                $('#c_glass_round_b_val').val('');
            }

            if (round_face_length_c_obj.value == "yes") {
                var radius3val = 'R-' + round_face_radius_c_obj.value + '"';
                $("div.radius3").text(radius3val);
                $('#c_glass_round_a').val('RADIUS');
                $('#c_glass_round_a_val').val(radius1val);

                $('#c_glass_round_b').val('RADIUS');
                $('#c_glass_round_b_val').val(radius2val);

                $('#c_glass_round_c').val('RADIUS');
                $('#c_glass_round_c_val').val(radius3val);

            } else {
                $("div.radius3").text("");
                $('#c_glass_round_c').val('');
                $('#c_glass_round_c_val').val('');
            }

            if (round_face_length_d_obj.value == "yes") {
                var radius4val = 'R-' + round_face_radius_d_obj.value + '"';
                $("div.radius4").text(radius4val);
                $('#c_glass_round_a').val('RADIUS');
                $('#c_glass_round_a_val').val(radius1val);

                $('#c_glass_round_b').val('RADIUS');
                $('#c_glass_round_b_val').val(radius2val);

                $('#c_glass_round_c').val('RADIUS');
                $('#c_glass_round_c_val').val(radius3val);

                $('#c_glass_round_d').val('RADIUS');
                $('#c_glass_round_d_val').val(radius4val);
            } else {
                $("div.radius4").text("");
                $('#c_glass_round_d').val('');
                $('#c_glass_round_d_val').val('');
            }




        } else {
            $("div.radius1").text("");
            $("div.radius2").text("");
            $("div.radius3").text("");
            $("div.radius4").text("");

            $('#c_glass_round_a').val('');
            $('#c_glass_round_a_val').val('');

            $('#c_glass_round_b').val('');
            $('#c_glass_round_b_val').val('');

            $('#c_glass_round_c').val('');
            $('#c_glass_round_c_val').val('');

            $('#c_glass_round_d').val('');
            $('#c_glass_round_d_val').val('');
        }

        //c_glass_round_a
        //c_glass_round_a_val

        if (face_lenght_a_obj.value != "select") {
            $("div.glass_a").text(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
            $('#c_glass_a').val(product_name_price[glassName_a][0]);
            $('#c_glass_a_val').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
            if (flange_covers_obj.value == "yes") {
                $('#c_glass_a_light').val(product_name_price[light_a][0]);
                $('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
            }
        } else {
            $("div.glass_a").text("A");
        }
        //$("div.radius1").text("A");
        if (face_lenght_b_obj.value != "select") {
            $("div.glass_b").text(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
            $('#c_glass_b').val(product_name_price[glassName_b][0]);
            $('#c_glass_b_val').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
            if (flange_covers_obj.value == "yes") {
                $('#c_glass_b_light').val(product_name_price[light_b][0]);
                $('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
            }
        } else {
            $("div.glass_b").text("B");
        }
        if (face_lenght_c_obj.value != "select") {
            $("div.glass_c").text(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
            $('#c_glass_c').val(product_name_price[glassName_c][0]);
            $('#c_glass_c_val').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
            if (flange_covers_obj.value == "yes") {
                $('#c_glass_c_light').val(product_name_price[light_c][0]);
                $('#c_glass_c_val_light').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
            }
        } else {
            $("div.glass_c").text("C");
        }
        if (face_lenght_d_obj.value != "select") {
            $("div.glass_d").text(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
            $('#c_glass_d').val(product_name_price[glassName_d][0]);
            $('#c_glass_d_val').val(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
            if (flange_covers_obj.value == "yes") {
                $('#c_glass_d_light').val(product_name_price[light_d][0]);
                $('#c_glass_d_val_light').val(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
            }
        } else {
            $("div.glass_d").text("D");
        }
        //          $("div.glass_a").text(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
        //          $("div.glass_b").text(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
        //          $("div.glass_c").text(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
        // $("div.glass_d").text(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
        // if(flange_covers_obj.value=="yes"){
        //  		    $('#c_glass_a_light').val(product_name_price[light_a][0]);
        //              $('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
        //              $('#c_glass_b_light').val(product_name_price[light_b][0]);
        //              $('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
        //  		    $('#c_glass_c_light').val(product_name_price[light_c][0]);
        //              $('#c_glass_c_val_light').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
        //  		    $('#c_glass_d_light').val(product_name_price[light_d][0]);
        //              $('#c_glass_d_val_light').val(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
        //          }








        var n1 = getBeforeChar($('[name="face_length_a"]').find('option:selected').text()) - 0;
        var n2 = getBeforeChar($('[name="face_length_b"]').find('option:selected').text()) - 0;
        var n3 = getBeforeChar($('[name="face_length_c"]').find('option:selected').text()) - 0;
        var n4 = getBeforeChar($('[name="face_length_d"]').find('option:selected').text()) - 0;
        var f_n1 = getAfterChar($('[name="face_length_a"]').find('option:selected').text());
        var f_n2 = getAfterChar($('[name="face_length_b"]').find('option:selected').text());
        var f_n3 = getAfterChar($('[name="face_length_c"]').find('option:selected').text());
        var f_n4 = getAfterChar($('[name="face_length_d"]').find('option:selected').text());
        //this function not working properly		
        var total = getTotal4Bay(n1, n2, n3, n4, f_n1, f_n2, f_n3, f_n4);
        if (total == '2"') {
            $("div.total").text("Total");
        } else {
            $("div.total").text(total);
            tot1 = total;
        }

        if (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass' || face_lenght_d_obj.value == 'No Glass') {
            noGlass()
        }

    }



    // $('.radius1').css("top","350px");
    // $('.radius1').css("left","240px");

    // $('.glass_a').css("top","295px");
    // $('.glass_a').css("left","328px");

    // $('.glass_b').css("top","248px");
    // $('.glass_b').css("left","388px");

    // $('.total').css("display","none");
    var gotoroundglassss = $("input[name='gotoroundglasscheck']:checked").val();






    if (type_obj.value == "1BAY") {
        if (gotoroundglass == 1) {

            var roundtype = round_type_obj.value;

            var radfaceA = round_face_length_a_obj.value;

            if (roundtype == 'Jshape') {
                //1st	
                if (radfaceA == 'yes') {
                    $('.radius1').css("top", "26%");
                    $('.radius1').css("left", "47%");

                    $('.glass').css("top", "79%");
                    $('.glass').css("left", "51%");



                    $('.total').css("display", "none");
                }

            } else if (roundtype == 'Lshape') {
                //1st	
                if (radfaceA == 'yes') {
                    $('.radius1').css("top", "62%");
                    $('.radius1').css("left", "47%");

                    $('.glass').css("top", "33%");
                    $('.glass').css("left", "47%");


                    $('.total').css("display", "none");
                }

            }




        }

    }

    if (type_obj.value == "2BAY") {
        if (gotoroundglass == 1) {

            var roundtype = round_type_obj.value;

            var radfaceA = round_face_length_a_obj.value;
            var radfaceB = round_face_length_b_obj.value;


            if (roundtype == 'Jshape') {



                //1st	
                if (radfaceA == 'yes' && radfaceB == 'no') {

                    //alert('test');
                    $('.radius1').css("top", "34%");
                    $('.radius1').css("left", "30%");

                    $('.glass_a').css("top", "55%");
                    $('.glass_a').css("left", "77%");

                    $('.glass_b').css("top", "19%");
                    $('.glass_b').css("left", "60%");


                    $('.total').css("display", "none");
                }
                //2nd
                else if (radfaceA == 'no' && radfaceB == 'yes') {
                    $('.radius2').css("top", "16%");
                    $('.radius2').css("left", "51%");

                    $('.glass_a').css("top", "66%");
                    $('.glass_a').css("left", "51%");

                    $('.glass_b').css("top", "32%");
                    $('.glass_b').css("left", "84%");

                    $('.total').css("display", "none");
                }


                //1st2nd
                else if (radfaceA == 'yes' && radfaceB == 'yes') {
                    $('.radius1').css("top", "38%");
                    $('.radius1').css("left", "41%");

                    $('.radius2').css("top", "37%");
                    $('.radius2').css("left", "57%");

                    $('.glass_a').css("top", "75%");
                    $('.glass_a').css("left", "13%");

                    $('.glass_b').css("top", "71%");
                    $('.glass_b').css("left", "87%");

                    $('.total').css("display", "none");

                }


            } else if (roundtype == 'Lshape') {



                //1st	
                if (radfaceA == 'yes' && radfaceB == 'no') {

                    //alert('test');
                    $('.radius1').css("top", "26%");
                    $('.radius1').css("left", "71%");

                    $('.glass_a').css("top", "10%");
                    $('.glass_a').css("left", "47%");

                    $('.glass_b').css("top", "56%");
                    $('.glass_b').css("left", "24%");


                    $('.total').css("display", "none");
                }
                //2nd
                else if (radfaceA == 'no' && radfaceB == 'yes') {
                    $('.radius2').css("top", "39%");
                    $('.radius2').css("left", "71%");

                    $('.glass_a').css("top", "22%");
                    $('.glass_a').css("left", "47%");

                    $('.glass_b').css("top", "57%");
                    $('.glass_b').css("left", "32%");

                    $('.total').css("display", "none");
                }


                //1st2nd
                else if (radfaceA == 'yes' && radfaceB == 'yes') {
                    $('.radius1').css("top", "50%");
                    $('.radius1').css("left", "38%");

                    $('.radius2').css("top", "50%");
                    $('.radius2').css("left", "57%");

                    $('.glass_a').css("top", "30%");
                    $('.glass_a').css("left", "23%");

                    $('.glass_b').css("top", "29%");
                    $('.glass_b').css("left", "75%");

                    $('.total').css("display", "none");

                }


            }


        }

    }





    if (type_obj.value == "3BAY") {
        if (gotoroundglass == 1) {

            var roundtype = round_type_obj.value;

            var radfaceA = round_face_length_a_obj.value;
            var radfaceB = round_face_length_b_obj.value;
            var radfaceC = round_face_length_c_obj.value;

            if (roundtype == 'Jshape') {



                //1st	
                if (radfaceA == 'yes' && radfaceB == 'no' && radfaceC == 'no') {
                    $('.radius1').css("top", "51%");
                    $('.radius1').css("left", "43%");

                    $('.glass_a').css("top", "60%");
                    $('.glass_a').css("left", "80%");

                    $('.glass_b').css("top", "27%");
                    $('.glass_b').css("left", "56%");

                    $('.glass_c').css("top", "14%");
                    $('.glass_c').css("left", "40%");

                    $('.total').css("display", "none");
                }
                //2nd
                else if (radfaceA == 'no' && radfaceB == 'yes' && radfaceC == 'no') {
                    $('.radius2').css("top", "29%");
                    $('.radius2').css("left", "47%");

                    $('.glass_a').css("top", "75%");
                    $('.glass_a').css("left", "56%");

                    $('.glass_b').css("top", "38%");
                    $('.glass_b').css("left", "73%");

                    $('.glass_c').css("top", "13%");
                    $('.glass_c').css("left", "59%");

                    $('.total').css("display", "none");
                }
                //3rd
                else if (radfaceA == 'no' && radfaceB == 'no' && radfaceC == 'yes') {


                    $('.radius3').css("top", "9%");
                    $('.radius3').css("left", "64%");

                    $('.glass_a').css("top", "72%");
                    $('.glass_a').css("left", "45%");

                    $('.glass_b').css("top", "42%");
                    $('.glass_b').css("left", "74%");

                    $('.glass_c').css("top", "18%");
                    $('.glass_c').css("left", "89%");

                    $('.total').css("display", "none");
                }

                //1st2nd
                else if (radfaceA == 'yes' && radfaceB == 'yes' && radfaceC == 'no') {
                    $('.radius1').css("top", "44%");
                    $('.radius1').css("left", "43%");

                    $('.radius2').css("top", "39%");
                    $('.radius2').css("left", "54%");

                    $('.glass_a').css("top", "93%");
                    $('.glass_a').css("left", "43%");

                    $('.glass_b').css("top", "56%");
                    $('.glass_b').css("left", "88%");

                    $('.glass_c').css("top", "22%");
                    $('.glass_c').css("left", "77%");

                    $('.total').css("display", "none");

                }
                //1st3rd
                //3bss
                else if (radfaceA == 'yes' && radfaceB == 'no' && radfaceC == 'yes') {
                    //alert('test');
                    $('.radius1').css("top", "47%");
                    $('.radius1').css("left", "34%");


                    $('.radius3').css("top", "15%");
                    $('.radius3').css("left", "60%");



                    $('.glass_a').css("top", "89%");
                    $('.glass_a').css("left", "45%");

                    $('.glass_b').css("top", "51%");
                    $('.glass_b').css("left", "77%");

                    $('.glass_c').css("top", "21%");
                    $('.glass_c').css("left", "83%");

                    $('.total').css("display", "none");


                }

                //2nd3rd
                else if (radfaceA == 'no' && radfaceB == 'yes' && radfaceC == 'yes') {

                    $('.radius2').css("top", "34%");
                    $('.radius2').css("left", "45%");

                    $('.radius3').css("top", "31%");
                    $('.radius3').css("left", "34%");


                    $('.glass_a').css("top", "66%");
                    $('.glass_a').css("left", "82%");

                    $('.glass_b').css("top", "24%");
                    $('.glass_b').css("left", "67%");

                    $('.glass_c').css("top", "11%");
                    $('.glass_c').css("left", "31%");

                    $('.total').css("display", "none");

                }



                //1st2nd3rd
                else if (radfaceA == 'yes' && radfaceB == 'yes' && radfaceC == 'yes') {
                    $('.radius1').css("top", "28%");
                    $('.radius1').css("left", "38%");

                    $('.radius2').css("top", "35%");
                    $('.radius2').css("left", "50%");

                    $('.radius3').css("top", "28%");
                    $('.radius3').css("left", "61%");


                    $('.glass_a').css("top", "47%");
                    $('.glass_a').css("left", "4%");

                    $('.glass_b').css("top", "88%");
                    $('.glass_b').css("left", "52%");

                    $('.glass_c').css("top", "44%");
                    $('.glass_c').css("left", "94%");



                    $('.total').css("display", "none");


                }





            } else if (roundtype == 'Lshape') {



                //1st	
                if (radfaceA == 'yes' && radfaceB == 'no' && radfaceC == 'no') {
                    $('.radius1').css("top", "10%");
                    $('.radius1').css("left", "39%");

                    $('.glass_a').css("top", "15%");
                    $('.glass_a').css("left", "20%");

                    $('.glass_b').css("top", "43%");
                    $('.glass_b').css("left", "28%");

                    $('.glass_c').css("top", "75%");
                    $('.glass_c').css("left", "45%");

                    $('.total').css("display", "none");
                }
                //2nd
                else if (radfaceA == 'no' && radfaceB == 'yes' && radfaceC == 'no') {
                    $('.radius2').css("top", "37%");
                    $('.radius2').css("left", "40%");

                    $('.glass_a').css("top", "40%");
                    $('.glass_a').css("left", "5%");

                    $('.glass_b').css("top", "69%");
                    $('.glass_b').css("left", "24%");

                    $('.glass_c').css("top", "70%");
                    $('.glass_c').css("left", "76%");

                    $('.total').css("display", "none");
                }
                //3rd
                else if (radfaceA == 'no' && radfaceB == 'no' && radfaceC == 'yes') {


                    $('.radius3').css("top", "51%");
                    $('.radius3').css("left", "57%");

                    $('.glass_a').css("top", "8%");
                    $('.glass_a').css("left", "66%");

                    $('.glass_b').css("top", "23%");
                    $('.glass_b').css("left", "48%");

                    $('.glass_c').css("top", "55%");
                    $('.glass_c').css("left", "19%");

                    $('.total').css("display", "none");
                }

                //1st2nd
                else if (radfaceA == 'yes' && radfaceB == 'yes' && radfaceC == 'no') {
                    $('.radius1').css("top", "25%");
                    $('.radius1').css("left", "67%");

                    $('.radius2').css("top", "27%");
                    $('.radius2').css("left", "56%");

                    $('.glass_a').css("top", "12%");
                    $('.glass_a').css("left", "75%");

                    $('.glass_b').css("top", "21%");
                    $('.glass_b').css("left", "30%");

                    $('.glass_c').css("top", "61%");
                    $('.glass_c').css("left", "13%");

                    $('.total').css("display", "none");

                }
                //1st3rd
                //3bss
                else if (radfaceA == 'yes' && radfaceB == 'no' && radfaceC == 'yes') {
                    //alert('test');
                    $('.radius1').css("top", "48%");
                    $('.radius1').css("left", "28%");


                    $('.radius3').css("top", "47%");
                    $('.radius3').css("left", "71%");



                    $('.glass_a').css("top", "33%");
                    $('.glass_a').css("left", "17%");

                    $('.glass_b').css("top", "26%");
                    $('.glass_b').css("left", "49%");

                    $('.glass_c').css("top", "31%");
                    $('.glass_c').css("left", "80%");

                    $('.total').css("display", "none");


                }

                //2nd3rd
                else if (radfaceA == 'no' && radfaceB == 'yes' && radfaceC == 'yes') {

                    $('.radius2').css("top", "42%");
                    $('.radius2').css("left", "43%");

                    $('.radius3').css("top", "47%");
                    $('.radius3').css("left", "54%");


                    $('.glass_a').css("top", "31%");
                    $('.glass_a').css("left", "27%");

                    $('.glass_b').css("top", "57%");
                    $('.glass_b').css("left", "15%");

                    $('.glass_c').css("top", "89%");
                    $('.glass_c').css("left", "53%");

                    $('.total').css("display", "none");

                }



                //1st2nd3rd
                else if (radfaceA == 'yes' && radfaceB == 'yes' && radfaceC == 'yes') {
                    $('.radius1').css("top", "41%");
                    $('.radius1').css("left", "34%");

                    $('.radius2').css("top", "33%");
                    $('.radius2').css("left", "46%");

                    $('.radius3').css("top", "41%");
                    $('.radius3').css("left", "58%");


                    $('.glass_a').css("top", "37%");
                    $('.glass_a').css("left", "10%");

                    $('.glass_b').css("top", "12%");
                    $('.glass_b').css("left", "47%");

                    $('.glass_c').css("top", "36%");
                    $('.glass_c').css("left", "87%");



                    $('.total').css("display", "none");


                }





            }




        }

    }








    if (type_obj.value == "4BAY") {
        if (gotoroundglass == 1) {

            var roundtype = round_type_obj.value;

            var radfaceA = round_face_length_a_obj.value;
            var radfaceB = round_face_length_b_obj.value;
            var radfaceC = round_face_length_c_obj.value;
            var radfaceD = round_face_length_d_obj.value;


            if (roundtype == 'Jshape') {



                //1st	
                if (radfaceA == 'yes' && radfaceB == 'no' && radfaceC == 'no' && radfaceD == 'no') {
                    $('.radius1').css("top", "46%");
                    $('.radius1').css("left", "26%");

                    $('.glass_a').css("top", "83%");
                    $('.glass_a').css("left", "32%");

                    $('.glass_b').css("top", "53%");
                    $('.glass_b').css("left", "66%");

                    $('.glass_c').css("top", "34%");
                    $('.glass_c').css("left", "82%");

                    $('.glass_d').css("top", "20%");
                    $('.glass_d').css("left", "93%");

                    $('.total').css("display", "none");
                }
                //2nd
                else if (radfaceA == 'no' && radfaceB == 'yes' && radfaceC == 'no' && radfaceD == 'no') {
                    $('.radius2').css("top", "38%");
                    $('.radius2').css("left", "53%");

                    $('.glass_a').css("top", "79%");
                    $('.glass_a').css("left", "53%");

                    $('.glass_b').css("top", "51%");
                    $('.glass_b').css("left", "79%");

                    $('.glass_c').css("top", "29%");
                    $('.glass_c').css("left", "70%");

                    $('.glass_d').css("top", "17%");
                    $('.glass_d').css("left", "60%");

                    $('.total').css("display", "none");
                }
                //3rd
                else if (radfaceA == 'no' && radfaceB == 'no' && radfaceC == 'yes' && radfaceD == 'no') {


                    $('.radius3').css("top", "24%");
                    $('.radius3').css("left", "54%");

                    $('.glass_a').css("top", "79%");
                    $('.glass_a').css("left", "60%");

                    $('.glass_b').css("top", "50%");
                    $('.glass_b').css("left", "68%");

                    $('.glass_c').css("top", "25%");
                    $('.glass_c').css("left", "71%");

                    $('.glass_d').css("top", "9%");
                    $('.glass_d').css("left", "57%");

                    $('.total').css("display", "none");
                }
                //4rd
                else if (radfaceA == 'no' && radfaceB == 'no' && radfaceC == 'no' && radfaceD == 'yes') {

                    $('.radius4').css("top", "7%");
                    $('.radius4').css("left", "70%");

                    $('.glass_a').css("top", "75%");
                    $('.glass_a').css("left", "40%");

                    $('.glass_b').css("top", "51%");
                    $('.glass_b').css("left", "63%");

                    $('.glass_c').css("top", "31%");
                    $('.glass_c').css("left", "78%");

                    $('.glass_d').css("top", "15%");
                    $('.glass_d').css("left", "88%");

                    $('.total').css("display", "none");
                }
                //1st2nd
                else if (radfaceA == 'yes' && radfaceB == 'yes' && radfaceC == 'no' && radfaceD == 'no') {
                    $('.radius1').css("top", "31%");
                    $('.radius1').css("left", "25%");

                    $('.radius2').css("top", "39%");
                    $('.radius2').css("left", "29%");

                    $('.glass_a').css("top", "31%");
                    $('.glass_a').css("left", "7%");

                    $('.glass_b').css("top", "64%");
                    $('.glass_b').css("left", "12%");

                    $('.glass_c').css("top", "72%");
                    $('.glass_c').css("left", "50%");

                    $('.glass_d').css("top", "71%");
                    $('.glass_d').css("left", "81%");

                    $('.total').css("display", "none");

                }
                //1st3rd
                else if (radfaceA == 'yes' && radfaceB == 'no' && radfaceC == 'yes' && radfaceD == 'no') {

                    $('.radius1').css("top", "50%");
                    $('.radius1').css("left", "29%");

                    $('.radius3').css("top", "47%");
                    $('.radius3').css("left", "67%");



                    $('.glass_a').css("top", "77%");
                    $('.glass_a').css("left", "13%");

                    $('.glass_b').css("top", "79%");
                    $('.glass_b').css("left", "54%");

                    $('.glass_c').css("top", "67%");
                    $('.glass_c').css("left", "88%");

                    $('.glass_d').css("top", "42%");
                    $('.glass_d').css("left", "90%");

                    $('.total').css("display", "none");


                }
                //1st4th
                else if (radfaceA == 'yes' && radfaceB == 'no' && radfaceC == 'no' && radfaceD == 'yes') {
                    $('.radius1').css("top", "43%");
                    $('.radius1').css("left", "25%");

                    $('.radius4').css("top", "15%");
                    $('.radius4').css("left", "77%");


                    $('.glass_a').css("top", "76%");
                    $('.glass_a').css("left", "22%");

                    $('.glass_b').css("top", "58%");
                    $('.glass_b').css("left", "59%");

                    $('.glass_c').css("top", "41%");
                    $('.glass_c').css("left", "81%");

                    $('.glass_d').css("top", "24%");
                    $('.glass_d').css("left", "95%");

                    $('.total').css("display", "none");
                }
                //2nd3rd
                else if (radfaceA == 'no' && radfaceB == 'yes' && radfaceC == 'yes' && radfaceD == 'no') {

                    $('.radius2').css("top", "41%");
                    $('.radius2').css("left", "43%");

                    $('.radius3').css("top", "40%");
                    $('.radius3').css("left", "58%");


                    $('.glass_a').css("top", "37%");
                    $('.glass_a').css("left", "5%");

                    $('.glass_b').css("top", "79%");
                    $('.glass_b').css("left", "24%");

                    $('.glass_c').css("top", "76%");
                    $('.glass_c').css("left", "84%");

                    $('.glass_d').css("top", "32%");
                    $('.glass_d').css("left", "94%");

                    $('.total').css("display", "none");

                }
                //2nd4th
                else if (radfaceA == 'no' && radfaceB == 'yes' && radfaceC == 'no' && radfaceD == 'yes') {


                    $('.radius2').css("top", "35%");
                    $('.radius2').css("left", "57%");


                    $('.radius4').css("top", "24%");
                    $('.radius4').css("left", "21%");


                    $('.glass_a').css("top", "63%");
                    $('.glass_a').css("left", "90%");

                    $('.glass_b').css("top", "26%");
                    $('.glass_b').css("left", "76%");

                    $('.glass_c').css("top", "13%");
                    $('.glass_c').css("left", "49%");

                    $('.glass_d').css("top", "9%");
                    $('.glass_d').css("left", "19%");

                    $('.total').css("display", "none");
                }
                //3rd4th
                else if (radfaceA == 'no' && radfaceB == 'no' && radfaceC == 'yes' && radfaceD == 'yes') {
                    $('.radius3').css("top", "20%");
                    $('.radius3').css("left", "47%");


                    $('.radius4').css("top", "17%");
                    $('.radius4').css("left", "40%");


                    $('.glass_a').css("top", "70%");
                    $('.glass_a').css("left", "67%");

                    $('.glass_b').css("top", "40%");
                    $('.glass_b').css("left", "66%");

                    $('.glass_c').css("top", "15%");
                    $('.glass_c').css("left", "60%");

                    $('.glass_d').css("top", "4%");
                    $('.glass_d').css("left", "37%");

                    $('.total').css("display", "none");
                }


                //1st2nd3rd
                else if (radfaceA == 'yes' && radfaceB == 'yes' && radfaceC == 'yes' && radfaceD == 'no') {
                    $('.radius1').css("top", "34%");
                    $('.radius1').css("left", "39%");

                    $('.radius2').css("top", "42%");
                    $('.radius2').css("left", "47%");

                    $('.radius3').css("top", "36%");
                    $('.radius3').css("left", "60%");


                    $('.glass_a').css("top", "48%");
                    $('.glass_a').css("left", "7%");

                    $('.glass_b').css("top", "90%");
                    $('.glass_b').css("left", "45%");

                    $('.glass_c').css("top", "55%");
                    $('.glass_c').css("left", "93%");

                    $('.glass_d').css("top", "23%");
                    $('.glass_d').css("left", "83%");

                    $('.total').css("display", "none");


                }

                //1st2nd4th
                else if (radfaceA == 'yes' && radfaceB == 'yes' && radfaceC == 'no' && radfaceD == 'yes') {
                    $('.radius1').css("top", "59%");
                    $('.radius1').css("left", "39%");

                    $('.radius2').css("top", "58%");
                    $('.radius2').css("left", "50%");

                    $('.radius4').css("top", "28%");
                    $('.radius4').css("left", "58%");


                    $('.glass_a').css("top", "89%");
                    $('.glass_a').css("left", "21%");

                    $('.glass_b').css("top", "84%");
                    $('.glass_b').css("left", "66%");

                    $('.glass_c').css("top", "52%");
                    $('.glass_c').css("left", "78%");

                    $('.glass_d').css("top", "28%");
                    $('.glass_d').css("left", "77%");

                    $('.total').css("display", "none");
                }
                //1st3rd4th
                else if (radfaceA == 'yes' && radfaceB == 'no' && radfaceC == 'yes' && radfaceD == 'yes') {

                    $('.radius1').css("top", "59%");
                    $('.radius1').css("left", "56%");

                    $('.radius3').css("top", "19%");
                    $('.radius3').css("left", "48%");

                    $('.radius4').css("top", "17%");
                    $('.radius4').css("left", "39%");


                    $('.glass_a').css("top", "73%");
                    $('.glass_a').css("left", "79%");

                    $('.glass_b').css("top", "34%");
                    $('.glass_b').css("left", "72%");

                    $('.glass_c').css("top", "9%");
                    $('.glass_c').css("left", "60%");

                    $('.glass_d').css("top", "4%");
                    $('.glass_d').css("left", "33%");

                    $('.total').css("display", "none");
                }

                //2nd3rd4th
                else if (radfaceA == 'no' && radfaceB == 'yes' && radfaceC == 'yes' && radfaceD == 'yes') {

                    $('.radius2').css("top", "35%");
                    $('.radius2').css("left", "53%");

                    $('.radius3').css("top", "31%");
                    $('.radius3').css("left", "43%");

                    $('.radius4').css("top", "38%");
                    $('.radius4').css("left", "34%");


                    $('.glass_a').css("top", "70%");
                    $('.glass_a').css("left", "86%");

                    $('.glass_b').css("top", "28%");
                    $('.glass_b').css("left", "74%");

                    $('.glass_c').css("top", "13%");
                    $('.glass_c').css("left", "41%");

                    $('.glass_d').css("top", "37%");
                    $('.glass_d').css("left", "12%");

                    $('.total').css("display", "none");
                }


                //1st2nd3rd4th
                else if (radfaceA == 'yes' && radfaceB == 'yes' && radfaceC == 'yes' && radfaceD == 'yes') {
                    $('.radius1').css("top", "26%");
                    $('.radius1').css("left", "39%");

                    $('.radius2').css("top", "38%");
                    $('.radius2').css("left", "42%");

                    $('.radius3').css("top", "38%");
                    $('.radius3').css("left", "56%");

                    $('.radius4').css("top", "26%");
                    $('.radius4').css("left", "60%");


                    $('.glass_a').css("top", "27%");
                    $('.glass_a').css("left", "14%");

                    $('.glass_b').css("top", "75%");
                    $('.glass_b').css("left", "22%");

                    $('.glass_c').css("top", "73%");
                    $('.glass_c').css("left", "80%");

                    $('.glass_d').css("top", "26%");
                    $('.glass_d').css("left", "85%");

                    $('.total').css("display", "none");

                }

            } else if (roundtype == 'Lshape') {



                //1st	
                if (radfaceA == 'yes' && radfaceB == 'no' && radfaceC == 'no' && radfaceD == 'no') {
                    $('.radius1').css("top", "13%");
                    $('.radius1').css("left", "53%");

                    $('.glass_a').css("top", "9%");
                    $('.glass_a').css("left", "42%");

                    $('.glass_b').css("top", "29%");
                    $('.glass_b').css("left", "38%");

                    $('.glass_c').css("top", "51%");
                    $('.glass_c').css("left", "37%");

                    $('.glass_d').css("top", "79%");
                    $('.glass_d').css("left", "36%");

                    $('.total').css("display", "none");
                }
                //2nd
                else if (radfaceA == 'no' && radfaceB == 'yes' && radfaceC == 'no' && radfaceD == 'no') {
                    $('.radius2').css("top", "24%");
                    $('.radius2').css("left", "35%");

                    $('.glass_a').css("top", "11%");
                    $('.glass_a').css("left", "28%");

                    $('.glass_b').css("top", "31%");
                    $('.glass_b').css("left", "17%");

                    $('.glass_c').css("top", "53%");
                    $('.glass_c').css("left", "27%");

                    $('.glass_d').css("top", "80%");
                    $('.glass_d').css("left", "46%");

                    $('.total').css("display", "none");
                }
                //3rd
                else if (radfaceA == 'no' && radfaceB == 'no' && radfaceC == 'yes' && radfaceD == 'no') {


                    $('.radius3').css("top", "41%");
                    $('.radius3').css("left", "42%");

                    $('.glass_a').css("top", "14%");
                    $('.glass_a').css("left", "37%");

                    $('.glass_b').css("top", "29%");
                    $('.glass_b').css("left", "28%");

                    $('.glass_c').css("top", "53%");
                    $('.glass_c').css("left", "20%");

                    $('.glass_d').css("top", "81%");
                    $('.glass_d').css("left", "42%");

                    $('.total').css("display", "none");
                }
                //4rd
                else if (radfaceA == 'no' && radfaceB == 'no' && radfaceC == 'no' && radfaceD == 'yes') {

                    $('.radius4').css("top", "62%");
                    $('.radius4').css("left", "40%");

                    $('.glass_a').css("top", "8%");
                    $('.glass_a').css("left", "62%");

                    $('.glass_b').css("top", "20%");
                    $('.glass_b').css("left", "50%");

                    $('.glass_c').css("top", "36%");
                    $('.glass_c').css("left", "34%");

                    $('.glass_d').css("top", "66%");
                    $('.glass_d').css("left", "12%");

                    $('.total').css("display", "none");
                }
                //1st2nd
                else if (radfaceA == 'yes' && radfaceB == 'yes' && radfaceC == 'no' && radfaceD == 'no') {
                    $('.radius1').css("top", "54%");
                    $('.radius1').css("left", "53%");

                    $('.radius2').css("top", "47%");
                    $('.radius2').css("left", "43%");

                    $('.glass_a').css("top", "93%");
                    $('.glass_a').css("left", "59%");

                    $('.glass_b').css("top", "59%");
                    $('.glass_b').css("left", "20%");

                    $('.glass_c').css("top", "32%");
                    $('.glass_c').css("left", "25%");

                    $('.glass_d').css("top", "14%");
                    $('.glass_d').css("left", "34%");

                    $('.total').css("display", "none");

                }
                //1st3rd
                else if (radfaceA == 'yes' && radfaceB == 'no' && radfaceC == 'yes' && radfaceD == 'no') {

                    $('.radius1').css("top", "17%");
                    $('.radius1').css("left", "32%");


                    $('.radius3').css("top", "50%");
                    $('.radius3').css("left", "40%");



                    $('.glass_a').css("top", "15%");
                    $('.glass_a').css("left", "15%");

                    $('.glass_b').css("top", "44%");
                    $('.glass_b').css("left", "12%");

                    $('.glass_c').css("top", "82%");
                    $('.glass_c').css("left", "22%");

                    $('.glass_d').css("top", "90%");
                    $('.glass_d').css("left", "63%");

                    $('.total').css("display", "none");


                }
                //1st4th
                else if (radfaceA == 'yes' && radfaceB == 'no' && radfaceC == 'no' && radfaceD == 'yes') {
                    $('.radius1').css("top", "63%");
                    $('.radius1').css("left", "53%");


                    $('.radius4').css("top", "18%");
                    $('.radius4').css("left", "69%");


                    $('.glass_a').css("top", "76%");
                    $('.glass_a').css("left", "30%");

                    $('.glass_b').css("top", "44%");
                    $('.glass_b').css("left", "39%");

                    $('.glass_c').css("top", "27%");
                    $('.glass_c').css("left", "47%");

                    $('.glass_d').css("top", "13%");
                    $('.glass_d').css("left", "58%");

                    $('.total').css("display", "none");
                }
                //2nd3rd
                else if (radfaceA == 'no' && radfaceB == 'yes' && radfaceC == 'yes' && radfaceD == 'no') {

                    $('.radius2').css("top", "38%");
                    $('.radius2').css("left", "32%");

                    $('.radius3').css("top", "49%");
                    $('.radius3').css("left", "37%");


                    $('.glass_a').css("top", "15%");
                    $('.glass_a').css("left", "30%");

                    $('.glass_b').css("top", "42%");
                    $('.glass_b').css("left", "10%");

                    $('.glass_c').css("top", "85%");
                    $('.glass_c').css("left", "22%");

                    $('.glass_d').css("top", "85%");
                    $('.glass_d').css("left", "69%");

                    $('.total').css("display", "none");

                }
                //2nd4th
                else if (radfaceA == 'no' && radfaceB == 'yes' && radfaceC == 'no' && radfaceD == 'yes') {


                    $('.radius2').css("top", "25%");
                    $('.radius2').css("left", "32%");

                    $('.radius4').css("top", "51%");
                    $('.radius4').css("left", "59%");


                    $('.glass_a').css("top", "10%");
                    $('.glass_a').css("left", "26%");

                    $('.glass_b').css("top", "30%");
                    $('.glass_b').css("left", "9%");

                    $('.glass_c').css("top", "60%");
                    $('.glass_c').css("left", "20%");

                    $('.glass_d').css("top", "94%");
                    $('.glass_d').css("left", "54%");

                    $('.total').css("display", "none");
                }
                //3rd4th
                else if (radfaceA == 'no' && radfaceB == 'no' && radfaceC == 'yes' && radfaceD == 'yes') {
                    $('.radius3').css("top", "24%");
                    $('.radius3').css("left", "59%");

                    $('.radius4').css("top", "24%");
                    $('.radius4').css("left", "69%");


                    $('.glass_a').css("top", "60%");
                    $('.glass_a').css("left", "11%");

                    $('.glass_b').css("top", "33%");
                    $('.glass_b').css("left", "30%");

                    $('.glass_c').css("top", "11%");
                    $('.glass_c').css("left", "50%");

                    $('.glass_d').css("top", "14%");
                    $('.glass_d').css("left", "81%");

                    $('.total').css("display", "none");
                }


                //1st2nd3rd
                else if (radfaceA == 'yes' && radfaceB == 'yes' && radfaceC == 'yes' && radfaceD == 'no') {
                    $('.radius1').css("top", "31%");
                    $('.radius1').css("left", "65%");

                    $('.radius2').css("top", "24%");
                    $('.radius2').css("left", "56%");

                    $('.radius3').css("top", "28%");
                    $('.radius3').css("left", "45%");


                    $('.glass_a').css("top", "33%");
                    $('.glass_a').css("left", "90%");

                    $('.glass_b').css("top", "9%");
                    $('.glass_b').css("left", "60%");

                    $('.glass_c').css("top", "22%");
                    $('.glass_c').css("left", "23%");

                    $('.glass_d').css("top", "63%");
                    $('.glass_d').css("left", "8%");

                    $('.total').css("display", "none");


                }

                //1st2nd4th
                else if (radfaceA == 'yes' && radfaceB == 'yes' && radfaceC == 'no' && radfaceD == 'yes') {
                    $('.radius1').css("top", "18%");
                    $('.radius1').css("left", "61%");

                    $('.radius2').css("top", "19%");
                    $('.radius2').css("left", "52%");

                    $('.radius4').css("top", "56%");
                    $('.radius4').css("left", "44%");


                    $('.glass_a').css("top", "7%");
                    $('.glass_a').css("left", "68%");

                    $('.glass_b').css("top", "11%");
                    $('.glass_b').css("left", "40%");

                    $('.glass_c').css("top", "35%");
                    $('.glass_c').css("left", "26%");

                    $('.glass_d').css("top", "73%");
                    $('.glass_d').css("left", "20%");

                    $('.total').css("display", "none");
                }

                //1st3rd4th
                else if (radfaceA == 'yes' && radfaceB == 'no' && radfaceC == 'yes' && radfaceD == 'yes') {
                    $('.radius1').css("top", "17%");
                    $('.radius1').css("left", "47%");

                    $('.radius3').css("top", "51%");
                    $('.radius3').css("left", "44%");

                    $('.radius4').css("top", "56%");
                    $('.radius4').css("left", "54%");


                    $('.glass_a').css("top", "11%");
                    $('.glass_a').css("left", "33%");

                    $('.glass_b').css("top", "36%");
                    $('.glass_b').css("left", "23%");

                    $('.glass_c').css("top", "71%");
                    $('.glass_c').css("left", "23%");

                    $('.glass_d').css("top", "93%");
                    $('.glass_d').css("left", "63%");

                    $('.total').css("display", "none");
                }
                //2nd3rd4th
                else if (radfaceA == 'no' && radfaceB == 'yes' && radfaceC == 'yes' && radfaceD == 'yes') {

                    $('.radius2').css("top", "31%");
                    $('.radius2').css("left", "46%");

                    $('.radius3').css("top", "27%");
                    $('.radius3').css("left", "58%");

                    $('.radius4').css("top", "35%");
                    $('.radius4').css("left", "66%");


                    $('.glass_a').css("top", "62%");
                    $('.glass_a').css("left", "8%");

                    $('.glass_b').css("top", "23%");
                    $('.glass_b').css("left", "24%");

                    $('.glass_c').css("top", "11%");
                    $('.glass_c').css("left", "63%");

                    $('.glass_d').css("top", "37%");
                    $('.glass_d').css("left", "93%");

                    $('.total').css("display", "none");
                }


                //1st2nd3rd4th
                else if (radfaceA == 'yes' && radfaceB == 'yes' && radfaceC == 'yes' && radfaceD == 'yes') {
                    $('.radius1').css("top", "41%");
                    $('.radius1').css("left", "37%");

                    $('.radius2').css("top", "31%");
                    $('.radius2').css("left", "43%");

                    $('.radius3').css("top", "29%");
                    $('.radius3').css("left", "56%");

                    $('.radius4').css("top", "41%");
                    $('.radius4').css("left", "61%");


                    $('.glass_a').css("top", "57%");
                    $('.glass_a').css("left", "4%");

                    $('.glass_b').css("top", "16%");
                    $('.glass_b').css("left", "26%");

                    $('.glass_c').css("top", "16%");
                    $('.glass_c').css("left", "71%");

                    $('.glass_d').css("top", "57%");
                    $('.glass_d').css("left", "95%");

                    $('.total').css("display", "none");

                }

            }










        }

    }










    if (type_obj.value == "1BAY") {
        h = 286 + 27;
        h1 = 220 + 27;
        h2 = 189 + 7 - 11;
        h3 = 204 + 27;
        h8 = 191 + 27 - 5;
        t8 = 251 + 5;
        t1 = 156;
        t2 = 222;
        t3 = 253 + 31;
        t4 = 239;
        right_next = -40;
        redlineheight = 97;
        redlineheight1 = 120;
        redlineheight2 = 153;
        redlineheight3 = 180;
        redlineheight4 = 378;
        redlineverticle = 284;
    } else if (type_obj.value == "2BAY") {
        h = 286 + 27;
        h1 = 196 + 27;
        h2 = 163 + 7 - 11;
        h3 = 175 + 27;
        h8 = 167 + 27 - 5;
        t8 = 275 + 5;
        t1 = 156;
        t2 = 246;
        t3 = 279 + 31;
        t4 = 267;
        right_next = -40;
        redlineheight = 97;
        redlineheight1 = 120 + 25;
        redlineheight2 = 153 + 25;
        redlineheight3 = 180 + 25;
        redlineheight4 = 403;
        redlineverticle = 309;
    } else if (type_obj.value == "3BAY") {
        h = 286 + 27;
        h1 = 168 + 27;
        h2 = 135 + 7 - 11;
        h3 = 150 + 27;
        h8 = 143 + 27 - 5;
        t8 = 299 + 5;
        t1 = 156;
        t2 = 274;
        t3 = 307 + 31;
        t4 = 291;
        right_next = -40;
        redlineheight = 97;
        redlineheight1 = 120 + 25 + 23 + 8;
        redlineheight2 = 153 + 25 + 23 + 8;
        redlineheight3 = 180 + 25 + 23 + 8;
        redlineheight4 = 403 + 23 + 8;
        redlineverticle = 332 + 8;
    } else if (type_obj.value == "4BAY") {
        h = 286 + 27;
        h1 = 168 + 27;
        h2 = 135 + 7 - 11;
        h3 = 150 + 27;
        h8 = 143 + 27 - 5;
        t8 = 299 + 5;
        t1 = 156;
        t2 = 274;
        t3 = 307 + 31;
        t4 = 291;
        right_next = -40;
        redlineheight = 97;
        redlineheight1 = 120 + 25 + 23 + 23 + 5;
        redlineheight2 = 153 + 25 + 23 + 23 + 5;
        redlineheight3 = 180 + 25 + 23 + 23 + 5;
        redlineheight4 = 403 + 23 + 23;
        redlineverticle = 356;
    }
    t3 = t3 - 31;
    h2 = h2 + 30
    document.getElementById("products_ids").innerHTML = str;
    document.getElementById("left-post").innerHTML = leftPostPrice + ".00";
    document.getElementById("right-post").innerHTML = rightPostPrice + ".00";
    document.getElementById("trasition-post").innerHTML = t_post_price + ".00";
    document.getElementById("face-glass").innerHTML = glassPrice + ".00";
    document.getElementById("total").innerHTML = "$&nbsp;" + totalPrice + ".00";
    document.getElementById("flange-cover").innerHTML = flangeCoversPrice + ".00";
    document.getElementById("flange-cover2").innerHTML = flangeCoversPrice2 + ".00";
    document.getElementById("left-Panel").innerHTML = leftEndPanelPrice + ".00";
    document.getElementById("right-panel").innerHTML = rightEndPanelPrice + ".00";

    //document.getElementById("flange-under-counter").innerHTML=flangeUnderCounterPrice+".00"; 


    if (category_name != "EP5" || category_name != "EP15") {
        document.getElementById("left-Panel").innerHTML = leftEndPanelPrice + ".00";
        document.getElementById("right-panel").innerHTML = rightEndPanelPrice + ".00";
    }
    if (type_obj.value == "1BAY") {
        if (face_lenght_obj != null && face_lenght_obj.value == "select") {
            $("#glass_a_err").attr("src", "img/iconCheckOff.gif");
            four = false;
        } else {
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            four = true;
        }
        // if(one&&two&&three&&four){
        //     //$("#froast").css("display","");
        // }else{
        //     //$("#froast").css("display","none");
        // }
    } else if (type_obj.value == "2BAY") {
        var foura = fourb = false;
        if (face_lenght_a_obj != null && face_lenght_a_obj.value == "select") {
            $("#glass_a_err").attr("src", "img/iconCheckOff.gif");
            four = false;
        } else {
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            foura = true;
        }
        if (face_lenght_b_obj != null && face_lenght_b_obj.value == "select") {
            $("#glass_b_err").attr("src", "img/iconCheckOff.gif");
            four = false;
        } else {
            $("#glass_b_err").attr("src", "img/iconCheckOn.gif");
            fourb = true;
        }
        if (foura && fourb) {
            four = true;
        } else {
            //$("#froast").css("display","none");
        }
    } else if (type_obj.value == "3BAY") {
        var foura = fourb = fourc = false;
        if (face_lenght_a_obj != null && face_lenght_a_obj.value == "select") {
            $("#glass_a_err").attr("src", "img/iconCheckOff.gif");
            four = false;
        } else {
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            foura = true;
        }
        if (face_lenght_b_obj != null && face_lenght_b_obj.value == "select") {
            $("#glass_b_err").attr("src", "img/iconCheckOff.gif");
            four = false;
        } else {
            $("#glass_b_err").attr("src", "img/iconCheckOn.gif");
            fourb = true;
        }
        if (face_lenght_c_obj != null && face_lenght_c_obj.value == "select") {
            $("#glass_c_err").attr("src", "img/iconCheckOff.gif");
            four = false;
        } else {
            $("#glass_c_err").attr("src", "img/iconCheckOn.gif");
            fourc = true;
        }
        if (foura && fourb && fourc) {
            four = true;
        } else {
            //$("#froast").css("display","none");
        }
    } else if (type_obj.value == "4BAY") {
        var foura = fourb = fourc = fourd = false;
        if (face_lenght_a_obj != null && face_lenght_a_obj.value == "select") {
            $("#glass_a_err").attr("src", "img/iconCheckOff.gif");
            four = false;
        } else {
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            foura = true;
        }
        if (face_lenght_b_obj != null && face_lenght_b_obj.value == "select") {
            $("#glass_b_err").attr("src", "img/iconCheckOff.gif");
            four = false;
        } else {
            $("#glass_b_err").attr("src", "img/iconCheckOn.gif");
            fourb = true;
        }
        if (face_lenght_c_obj != null && face_lenght_c_obj.value == "select") {
            $("#glass_c_err").attr("src", "img/iconCheckOff.gif");
            four = false;
        } else {
            $("#glass_c_err").attr("src", "img/iconCheckOn.gif");
            fourc = true;
        }
        if (face_lenght_d_obj != null && face_lenght_d_obj.value == "select") {
            $("#glass_d_err").attr("src", "img/iconCheckOff.gif");
            four = false;
        } else {
            $("#glass_d_err").attr("src", "img/iconCheckOn.gif");
            fourd = true;
        }
        if (foura && fourb && fourc && fourd) {
            four = true;
        } else {
            //$("#froast").css("display","none");
        }
    }

    // if(flange_covers_obj.value=="select"){
    //     $("#flange_err").attr("src","img/iconCheckOff.gif");
    //     five=false;
    // }else{
    //     $("#flange_err").attr("src","img/iconCheckOn.gif");
    //     five=true;
    // }
    if (flange_covers_obj.value == "select") {
        $("#light_err").attr("src", "img/iconCheckOff.gif");
        six = false;
    } else {
        $("#light_err").attr("src", "img/iconCheckOn.gif");
        six = true;
    }


    if (flange_under_counter_obj.value == "select") {
        $("#flange_under_counter_err").attr("src", "img/iconCheckOff.gif");
        five = false;
    } else {
        $("#flange_under_counter_err").attr("src", "img/iconCheckOn.gif");
        five = true;
    }




    if (rounded_corners_obj.value == "select") {
        $("#round_err").attr("src", "img/iconCheckOff.gif");
        seven = false;
    } else {
        $("#round_err").attr("src", "img/iconCheckOn.gif");
        seven = true;
    }
    if (type_obj.value == "1BAY") {
        if (face_lenght_obj.value == "No Glass") {
            four = true;
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            $("#round_err").attr("src", "img/iconCheckOn.gif");
            seven = true;
            corner_obj.value = "select";
            corner_obj.disabled = true;
            seven = true;
        } else {
            corner_obj.disabled = false;
            if (corner_obj.value == "select") {
                $("#round_err").attr("src", "img/iconCheckOff.gif");
                seven = false;
            } else {
                $("#round_err").attr("src", "img/iconCheckOn.gif");
                seven = true;
            }
        }
    }
    if (type_obj.value == "2BAY") {
        if (face_lenght_a_obj.value == "No Glass" || face_lenght_b_obj.value == "No Glass") {
            four = true;
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_b_err").attr("src", "img/iconCheckOn.gif");
            corner_obj.value = "select";
            corner_obj.disabled = true;
            $("#round_err").attr("src", "img/iconCheckOn.gif");
            seven = true;
        } else {
            corner_obj.disabled = false;
            if (corner_obj.value == "select") {
                $("#round_err").attr("src", "img/iconCheckOff.gif");
                seven = false;
            } else {
                $("#round_err").attr("src", "img/iconCheckOn.gif");
                seven = true;
            }
        }
    }
    if (type_obj.value == "3BAY") {
        if (face_lenght_a_obj.value == "No Glass" || face_lenght_b_obj.value == "No Glass" || face_lenght_c_obj.value == "No Glass") {
            four = true;
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_b_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_c_err").attr("src", "img/iconCheckOn.gif");
            corner_obj.value = "select";
            corner_obj.disabled = true;
            $("#round_err").attr("src", "img/iconCheckOn.gif");
            seven = true;
        } else {
            corner_obj.disabled = false;
            if (corner_obj.value == "select") {
                $("#round_err").attr("src", "img/iconCheckOff.gif");
                seven = false;
            } else {
                $("#round_err").attr("src", "img/iconCheckOn.gif");
                seven = true;
            }
        }
    }
    if (type_obj.value == "4BAY") {
        if (face_lenght_a_obj.value == "No Glass" || face_lenght_b_obj.value == "No Glass" || face_lenght_c_obj.value == "No Glass" || face_lenght_d_obj.value == "No Glass") {
            four = true;
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_b_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_c_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_d_err").attr("src", "img/iconCheckOn.gif");
            corner_obj.value = "select";
            corner_obj.disabled = true;
            $("#round_err").attr("src", "img/iconCheckOn.gif");
            seven = true;
        } else {
            corner_obj.disabled = false;
            if (corner_obj.value == "select") {
                $("#round_err").attr("src", "img/iconCheckOff.gif");
                seven = false;
            } else {
                $("#round_err").attr("src", "img/iconCheckOn.gif");
                seven = true;
            }
        }
    }
    if (choose_finish_obj.value == "select") {
        $("#finish_err").attr("src", "img/iconCheckOff.gif");
        eight = false;
    } else {
        $("#finish_err").attr("src", "img/iconCheckOn.gif");
        eight = true;
    }
    // if(glass_face_obj.value==2){
    //     $("#left_err").attr("src","img/iconCheckOn.gif");
    //     two=true;
    //     if(!zero){
    //         $("#left_err").attr("src","img/iconCheckOff.gif");
    //     }
    // }else if(glass_face_obj.value==3){
    //     $("#right_err").attr("src","img/iconCheckOn.gif");
    //     one=true;
    //     if(!zero){
    //         $("#right_err").attr("src","img/iconCheckOff.gif");
    //     }
    // }else if(glass_face_obj.value==4){
    //     $("#left_err").attr("src","img/iconCheckOn.gif");
    //     $("#right_err").attr("src","img/iconCheckOn.gif");
    //     one=true;
    //     two=true;
    //     if(!zero){
    //         $("#left_err").attr("src","img/iconCheckOff.gif");
    //         $("#right_err").attr("src","img/iconCheckOff.gif");
    //     }
    // }
    if (zero && four && six && seven && eight) {
        //$("#add").removeAttr("disabled");
        //$("#add").css("opacity","1");
    } else {
        //$("#add").css("opacity","0.3");
    }

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

function setShowEvent(selector, msg) {
    // $("#additional_image").css("opacity","0.5");
    // $(".test-hide").css("opacity","0.5");
    var cssObj = {
        "background-color": "#111",
        "border-style": "solid",
        "border-width": "2px",
        "border-color": "#ff0000"
    };
    $(selector).css(cssObj);
    $("#message_w").html(msg);
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

function setHideEvent(selector) {
    action_event(selector);
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
    $("#message_wp").html("");
    $("#message_wp1").html("");
    $("#message_wp2").html("");
};

function myFunction(form) {
    var check = ck = true;
    var x = '<center><img src="img/addToCartWindow.jpg" width="100%"></center>';
    x += '<ul style="margin-left:30px;">';
    if (form.type.value == "1BAY") {
        if (form.face_length.value == "No Glass") {
            ck = false;
        }
        if (form.face_length.value == "select") {
            x += '<li>Face Length A <span style="color:red">?</span></li>';
            check = false;
        }
    } else if (form.type.value == "2BAY") {
        if (form.face_length_a.value == "No Glass" || form.face_length_b.value == "No Glass") {
            ck = false;
        }
        if (form.face_length_a.value == "select") {
            x += '<li>Face Length A <span style="color:red">?</span></li>';
            check = false;
        }
        if (form.face_length_b.value == "select") {
            x += '<li>Face Length B <span style="color:red">?</span></li>';
            check = false;
        }

    } else if (form.type.value == "3BAY") {
        if (form.face_length_a.value == "No Glass" || form.face_length_b.value == "No Glass" || form.face_length_c.value == "No Glass") {
            ck = false;
        }
        if (form.face_length_a.value == "select") {
            x += '<li>Face Length A <span style="color:red">?</span></li>';
            check = false;
        }
        if (form.face_length_b.value == "select") {
            x += '<li>Face Length B <span style="color:red">?</span></li>';
            check = false;
        }
        if (form.face_length_c.value == "select") {
            x += '<li>Face Length C <span style="color:red">?</span></li>';
            check = false;
        }
    } else if (form.type.value == "4BAY") {
        if (form.face_length_a.value == "No Glass" || form.face_length_b.value == "No Glass" || form.face_length_c.value == "No Glass" || form.face_length_d.value == "No Glass") {
            ck = false;
        }
        if (form.face_length_a.value == "select") {
            x += '<li>Face Length A <span style="color:red">?</span></li>';
            check = false;
        }
        if (form.face_length_b.value == "select") {
            x += '<li>Face Length B <span style="color:red">?</span></li>';
            check = false;
        }
        if (form.face_length_c.value == "select") {
            x += '<li>Face Length C <span style="color:red">?</span></li>';
            check = false;
        }
        if (form.face_length_d.value == "select") {
            x += '<li>Face Length D <span style="color:red">?</span></li>';
            check = false;
        }
    }
    if ($('#end_options').val() == "select") {
        x += '<li>End Panels <span style="color:red">?</span></li>';
        check = false;
    }
    if (form.rounded_corners.value == "select" && ck) {
        x += '<li>Glass Corners <span style="color:red">?</span></li>';
        check = false;
    }
    if (form.flange_covers.value == "select") {
        x += '<li>Light Bar <span style="color:red">?</span></li>';
        check = false;
    }
    if (form.choose_finish.value == "select") {
        x += '<li>Post Finish <span style="color:red">?</span></li>';
        check = false;
    }
    x += '</ul>';
    if (!check) {
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
};

function myFunction2(form) {
    if (myFunction(document.forms['cart_quantity'])) {
        var bay = form.type.value;
        var var1 = var2 = var3 = var4 = var5 = var6 = var7 = var8 = round_a = round_b = round_c = round_d = round_face_a = round_face_b = round_face_c = round_face_d = round_type = gotocornerpostss = "";



        var gotoroundglassss = $("input[name='gotoroundglasscheck']:checked").val();
        if (gotoroundglassss == "1") {
            round_type = form.round_type.options[form.round_type.selectedIndex].value;

            //console.log(round_type);
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
                img: img_ajx,
                round_rad_a: 'R-' + round_a,
                round_rad_b: 'R-' + round_b,
                round_rad_c: 'R-' + round_c,
                round_rad_d: 'R-' + round_d,
                round_face_a: round_face_a,
                round_face_b: round_face_b,
                round_face_c: round_face_c,
                round_face_d: round_face_d,
                gotoroundglass: gotoroundglassss,
                round_type: round_type
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
};
$(document).ready(function() {

    $('.item .delete2').click(function() {

        var elem = $(this).closest('.item');

        $.confirm({


            'title': 'Confirmation',
            'message': $('#msg').val(),
            'buttons': {
                'Proceed': {
                    'class': 'blue',
                    'action': function() {

                        document.forms['cart_quantity'].submit();


                    }
                },
                'Cancel': {
                    'class': 'gray',
                    'action': function() {
                            return false;
                        } // Nothing to do in this case. You can as well omit the action property.

                }
            }
        });

    });

})

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

function getTotal(n1, n2, f_n1, f_n2) {
    if (f_n1 == "" && f_n2 == "") {
        var t = n1 + n2 + 2 + '"';
    } else { var t = n1 + n2 + 2; }
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
    //alert(f_n1);
    if (f_n1 == "" && f_n2 != "") { t += "-" + f_n2 + '"'; }
    if (f_n2 == "" && f_n1 != "") { t += "-" + f_n1 + '"'; }
    return t;

}

function getTotal3Bay(n1, n2, n3, f_n1, f_n2, f_n3) {
    if (f_n1 == "" && f_n2 == "" && f_n3 == "") {
        var t = n1 + n2 + n3 + 2 + '"';
    } else {
        var t = n1 + n2 + n3 + 2;
    }
    var t = getTotal(n1, n2, f_n1, f_n2);

    var new1 = getBeforeChar(t);
    new1 -= 2;
    var far = getAfterChar(t);
    var t = getTotal(new1, n3, far, f_n3);
    return t;

}

function getTotal3(n1, n2, n3, n4, f_n1, f_n2) {
    var t = n1 + n2 + n3 + n4 + 2;
    if (f_n1 == '1/4' && f_n2 == '1/4') { t += '-1/2"'; }
    if (f_n1 == '1/4' && f_n2 == '1/2') { t += '-3/4"'; }
    if (f_n1 == '1/4' && f_n2 == '3/4') {
        t += 1;
        t += '"';
    }
    if (f_n1 == '1/2' && f_n2 == '1/4') { t += '-3/4"'; }
    if (f_n1 == '1/2' && f_n2 == '1/2') {
        t += 1;
        t += '"';
    }
    if (f_n1 == '1/2' && f_n2 == '3/4') { t += '-5/4"'; }
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

function getTotal6(n1, n2, f_n1, f_n2) {
    var t = n1 + n2 + 2;
    if (f_n1 == '1/4' && f_n2 == '1/4') { t += '-1/2"'; }
    if (f_n1 == '1/4' && f_n2 == '1/2') { t += '-3/4"'; }
    if (f_n1 == '1/4' && f_n2 == '3/4') {
        t += 1;
        t += '"';
    }
    if (f_n1 == '1/2' && f_n2 == '1/4') { t += '-3/4"'; }
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


function getTotal62(n1, n2, n4, f_n1, f_n2) {
    var t = n1 + n2 + n4 + 2;
    if (f_n1 == '1/4' && f_n2 == '1/4') { t += '-1/2"'; }
    if (f_n1 == '1/4' && f_n2 == '1/2') { t += '-3/4"'; }
    if (f_n1 == '1/4' && f_n2 == '3/4') {
        t += 1;
        t += '"';
    }
    if (f_n1 == '1/2' && f_n2 == '1/4') { t += '-3/4"'; }
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

function getTotal63(n1, n2, f_n1, f_n2) {
    var t = n1 + 2;
    if (f_n1 == '1/4' && f_n2 == '1/4') { t += '-1/2"'; }
    if (f_n1 == '1/4' && f_n2 == '1/2') { t += '-3/4"'; }
    if (f_n1 == '1/4' && f_n2 == '3/4') {
        t += 1;
        t += '"';
    }
    if (f_n1 == '1/2' && f_n2 == '1/4') { t += '-3/4"'; }
    if (f_n1 == '1/2' && f_n2 == '1/2') {
        t += 1;
        t += '"';
    }
    if (f_n1 == '1/2' && f_n2 == '3/4') {
        t += 1;
        t += '-1/4"';
    }
    if (f_n1 == '3/2' && f_n2 == '1/4') {
        t += 1;
        t += '-3/4"';
    }
    if (f_n1 == '3/2' && f_n2 == '3/4') {
        t += 2;
        t += '-1/4"';
    }
    if (f_n1 == '3/2' && f_n2 == '1/2') { t += 2; }
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

function getTotal2(n1, n2, n3, n4, f_n1, f_n2, f_n3, f_n4) {
    if (f_n1 == "" && f_n2 == "" && f_n3 == "" && f_n4 == "") {

        var t = n1 + n2 + n3 + n4 + 2 + '"';

    } else { var t = n1 + n2 + n3 + n4 + 2; }
    if (f_n1 == "" && f_n2 == "" && f_n3 == "" && f_n4 != "") { t += "-" + f_n4 + '"'; }
    if (f_n1 == "" && f_n2 == "" && f_n3 != "" && f_n4 == "") { t += "-" + f_n3 + '"'; }
    if (f_n1 == "" && f_n2 != "" && f_n3 == "" && f_n4 == "") { t += "-" + f_n2 + '"'; }
    if (f_n1 != "" && f_n2 == "" && f_n3 == "" && f_n4 == "") { t += "-" + f_n1 + '"'; }
    if (f_n1 != "" && f_n2 == "" && f_n3 == "" && f_n4 != "") {
        var t = '';
        t += getTotal3(n1, n2, n3, n4, f_n1, f_n4);
    }
    if (f_n1 != "" && f_n2 != "" && f_n3 == "" && f_n4 == "") {
        var t = '';
        t += getTotal3(n1, n2, n3, n4, f_n1, f_n2);
    }
    if (f_n1 != "" && f_n2 == "" && f_n3 != "" && f_n4 == "") {
        var t = '';
        t += getTotal3(n1, n2, n3, n4, f_n1, f_n3);
    }
    if (f_n1 != "" && f_n2 == "" && f_n3 == "" && f_n4 != "") {
        var t = '';
        t += getTotal3(n1, n2, n3, n4, f_n1, f_n4);
    }
    if (f_n1 == "" && f_n2 != "" && f_n3 != "" && f_n4 == "") {
        var t = '';
        t += getTotal3(n1, n2, n3, n4, f_n2, f_n3);
    }
    if (f_n1 == "" && f_n2 != "" && f_n3 == "" && f_n4 != "") {
        var t = '';
        t += getTotal3(n1, n2, n3, n4, f_n2, f_n4);
    }
    if (f_n1 == "" && f_n2 == "" && f_n3 != "" && f_n4 != "") {
        var t = '';
        t += getTotal3(n1, n2, n3, n4, f_n3, f_n4);
    }

    if (f_n1 == "" && f_n2 != "" && f_n3 != "" && f_n4 != "") {
        t = getTotal6(n2, n3, f_n2, f_n3);
        var new1 = getBeforeChar(t);
        new1 -= 2;
        var far = getAfterChar(t);
        var t = getTotal62(new1, n4, n1, far, f_n4);
        return t;
    }
    if (f_n1 != "" && f_n2 == "" && f_n3 != "" && f_n4 != "") {
        t = getTotal6(n1, n3, f_n1, f_n3);
        var new1 = getBeforeChar(t);
        new1 -= 2;
        var far = getAfterChar(t);
        var t = getTotal62(new1, n4, n2, far, f_n4);
        return t;
    }
    if (f_n1 != "" && f_n2 != "" && f_n3 == "" && f_n4 != "") {
        t = getTotal6(n1, n2, f_n1, f_n2);
        var new1 = getBeforeChar(t);
        new1 -= 2;
        var far = getAfterChar(t);
        var t = getTotal62(new1, n4, n3, far, f_n4);
        return t;
    }
    if (f_n1 != "" && f_n2 != "" && f_n3 != "" && f_n4 == "") {
        t = getTotal6(n1, n2, f_n1, f_n2);
        var new1 = getBeforeChar(t);
        new1 -= 2;
        var far = getAfterChar(t);
        var t = getTotal62(new1, n3, n4, far, f_n3);
        return t;
    }
    if (f_n1 != "" && f_n2 != "" && f_n3 != "" && f_n4 != "") {
        t = getTotal6(n1, n2, f_n1, f_n2);
        var new1 = getBeforeChar(t);
        new1 -= 2;
        var far = getAfterChar(t);
        var t = getTotal62(new1, n3, n4, far, f_n3);
        var new1 = getBeforeChar(t);
        new1 -= 2;
        var far = getAfterChar(t);
        var t = getTotal63(new1, n4, far, f_n4);
        return t;
    }
    return t;



}

function getTotal4Bay(n1, n2, n3, n4, f_n1, f_n2, f_n3, f_n4) {

    if (f_n1 == "" && f_n2 == "" && f_n3 == "" && f_n4 == "") {

        var t = n1 + n2 + n3 + n4 + 2;

    }
    var t = getTotal2(n1, n2, n3, n4, f_n1, f_n2, f_n3, f_n4);


    return t;
}


changeDrop($('#face_length'));
changeDrop($('#face_length_a'));
changeDrop($('#face_length_b'));
changeDrop($('#face_length_c'));
changeDrop($('#face_length_d'));

function changeDrop(custom) {
    $('#is_custom').val('Yes');
    my_facelengt_select = "";
    my_facelengt_select += '<select name="' + custom.attr("name") + '" id="' + custom.attr("name") + '" onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);" >';

    //my_facelengt_select+='<select name="'+custom.attr("name")+'" id="'+custom.attr("name")+'" onchange="getPriceOfProduct(this.form),toggle();show_lightbar_pupup(this.form);" >';
    my_facelengt_select += '<option value="select">Select</option>';
    //	my_facelengt_simple_select+='<select name="face_length" onchange="getPriceOfProduct(this.form)" >';
    var myArray = new Array();
    var i = 1;
    $('[name="' + custom.attr("name") + '"] > option').each(function() {
        if ($(this).val() != 'custom') {
            myArray[i] = $(this).val();
            i++;
        }
    });
    /*for ep 11 category post height*/
    var j = 0;
    //if(postheight){
    //								myArray=new Array("","12","18","22","");
    //						}else{
    for (i = 8; i < myArray[1]; i++) {
        my_facelengt_select += '<option value="' + myArray[1] + '">' + i + '"</option>';
        my_facelengt_select += '<option value="' + myArray[1] + '">' + i + '-1/4' + '"</option>';
        my_facelengt_select += '<option value="' + myArray[1] + '">' + i + '-1/2' + '"</option>';
        my_facelengt_select += '<option value="' + myArray[1] + '">' + i + '-3/4' + '"</option>';
        j = i;
    }
    //}
    for (i = 1; i < myArray.length - 2; i++) {
        for (j = myArray[i]; j < myArray[i + 1]; j++) {
            if (j > myArray[i]) {
                my_facelengt_select += '<option value="' + myArray[i + 1] + '">' + j + '"</option>';
            } else {
                my_facelengt_select += '<option value="' + myArray[i] + '">' + j + '"</option>';
            }
            my_facelengt_select += '<option value="' + myArray[i + 1] + '">' + j + '-1/4' + '"</option>';
            my_facelengt_select += '<option value="' + myArray[i + 1] + '">' + j + '-1/2' + '"</option>';
            my_facelengt_select += '<option value="' + myArray[i + 1] + '">' + j + '-3/4' + '"</option>';
        }
    }
    my_facelengt_select += '<option value="' + myArray[i] + '">' + myArray[i] + '"</option>';
    my_facelengt_select += '<option value="No Glass">No Glass</option>';
    //$('#' + custom.attr("name") + '_span').html(my_facelengt_select);


    /* for ep11 post height */
    //getPriceOfProduct(document.forms['cart_quantity']);
}

function jsconfirm() {
    $.confirm({





        'title': 'Confirmation',

        'message': $msg,

        'buttons': {

            'Proceed': {

                'class': 'blue',

                'action': function() {





                    $('#is_custom').val('Yes');



                    my_facelengt_select = "";

                    my_facelengt_select += '<select name="' + custom.attr("name") + '" onchange="getPriceOfProduct(this.form),toggle();show_lightbar_pupup(this.form);" >';

                    //	my_facelengt_simple_select+='<select name="face_length" onchange="getPriceOfProduct(this.form)" >';

                    var myArray = new Array();

                    var i = 1;

                    $('[name="' + custom.attr("name") + '"] > option').each(function() {



                        if ($(this).val() != 'custom') {

                            myArray[i] = $(this).val();

                            i++;

                        }



                    });

                    /*for ep 11 category post height*/







                    var j = 0;

                    for (i = 8; i < myArray[1]; i++) {



                        my_facelengt_select += '<option value="' + myArray[1] + '">' + i + '"</option>';

                        my_facelengt_select += '<option value="' + myArray[1] + '">' + i + '-1/4' + '"</option>';

                        my_facelengt_select += '<option value="' + myArray[1] + '">' + i + '-1/2' + '"</option>';

                        my_facelengt_select += '<option value="' + myArray[1] + '">' + i + '-3/4' + '"</option>';

                        j = i;

                    }



                    for (i = 1; i < myArray.length - 2; i++) {

                        for (j = myArray[i]; j < myArray[i + 1]; j++) {

                            if (j > myArray[i]) {

                                my_facelengt_select += '<option value="' + myArray[i + 1] + '">' + j + '"</option>';

                            } else

                            {

                                my_facelengt_select += '<option value="' + myArray[i] + '">' + j + '"</option>';

                            }

                            my_facelengt_select += '<option value="' + myArray[i + 1] + '">' + j + '-1/4' + '"</option>';

                            my_facelengt_select += '<option value="' + myArray[i + 1] + '">' + j + '-1/2' + '"</option>';

                            my_facelengt_select += '<option value="' + myArray[i + 1] + '">' + j + '-3/4' + '"</option>';

                        }

                    }

                    my_facelengt_select += '<option value="' + myArray[i] + '">' + myArray[i] + '"</option>';



                    $('#' + custom.attr("name") + '_span').html(my_facelengt_select);

                    /* for ep11 post height */

                    getPriceOfProduct(document.forms['cart_quantity']);



                }

            },

            'Cancel': {

                'class': 'gray',

                'action': function() {} // Nothing to do in this case. You can as well omit the action property.



            }

        }

    });
}

$(document).ready(function() {

    $("[data-labelfor]").click(function() {
        $('#' + $(this).attr("data-labelfor")).prop('checked',
            function(i, oldVal) { return !oldVal; });
    });

});



$(document).ready(function() {




    $('#gotoroundglass').click(function() {
        $('#showtable1').toggle('slow');
        $('#showtable2').toggle('slow');
        $('#forstarightpost').toggle('slow');
        $('#hidetable1').toggle('hide');
        $('#hidetable2').toggle('hide');
        $('#hidetable3').toggle('hide');
        $('#forgotot').toggle('hide');

        $('#round_layout').toggle('slow');

        $('#quotetext span').html('&nbsp;&nbsp;3)');
        $('#addcartandfavorite span').html('&nbsp;&nbsp;4)');
        $('#extratext span').html('&nbsp;&nbsp;1)');

        //form.flange_covers.value="no";
        // form.flange_covers.selected="No";	
        $('#lightbarss').val('no').attr('selected', true);






    });
})


$(document).ready(function() {
    $('#backtostraightpost').click(function() {
        $('#round_layout').hide();
        $('#showtable1').toggle('slow');
        $('#showtable2').toggle('slow');
        $('#forstarightpost').toggle('slow');
        $('#hidetable1').toggle('hide');
        $('#hidetable2').toggle('hide');
        $('#hidetable3').toggle('hide');
        $('#forgotot').toggle('hide');
        $('#quotetext span').html('&nbsp;&nbsp;4)');
        $('#addcartandfavorite span').html('&nbsp;&nbsp;5)');
        $('#extratext span').html('&nbsp;&nbsp;3)');






    });
})

function hide_layout() {


    var cornerPosition = $("input[name='corner_post']:checked").val();



    //alert(cornerPosition);
    if (cornerPosition == 'JSHAPE1ST') {
        $('#round_type').val('Jshape').attr('selected', true);
        $('#round_face_length_a').val('yes').attr('selected', true);
        $('#round_face_length_b').val('no').attr('selected', true);
        $('#round_face_length_c').val('no').attr('selected', true);
        $('#round_face_length_d').val('no').attr('selected', true);
    } else if (cornerPosition == 'JSHAPE2ND') {
        $('#round_type').val('Jshape').attr('selected', true);

        $('#round_face_length_b').val('yes').attr('selected', true);
        $('#round_face_length_a').val('no').attr('selected', true);
        $('#round_face_length_c').val('no').attr('selected', true);
        $('#round_face_length_d').val('no').attr('selected', true);
    } else if (cornerPosition == 'JSHAPE3RD') {
        $('#round_type').val('Jshape').attr('selected', true);

        $('#round_face_length_c').val('yes').attr('selected', true);
        $('#round_face_length_a').val('no').attr('selected', true);
        $('#round_face_length_b').val('no').attr('selected', true);
        $('#round_face_length_d').val('no').attr('selected', true);
    } else if (cornerPosition == 'JSHAPE4TH') {
        $('#round_type').val('Jshape').attr('selected', true);

        $('#round_face_length_d').val('yes').attr('selected', true);
        $('#round_face_length_a').val('no').attr('selected', true);
        $('#round_face_length_b').val('no').attr('selected', true);
        $('#round_face_length_c').val('no').attr('selected', true);
    } else if (cornerPosition == 'JSHAPE1ST2ND') {
        $('#round_type').val('Jshape').attr('selected', true);

        $('#round_face_length_a').val('yes').attr('selected', true);
        $('#round_face_length_b').val('yes').attr('selected', true);
        $('#round_face_length_c').val('no').attr('selected', true);
        $('#round_face_length_d').val('no').attr('selected', true);
    } else if (cornerPosition == 'JSHAPE1ST3RD') {
        $('#round_type').val('Jshape').attr('selected', true);

        $('#round_face_length_a').val('yes').attr('selected', true);
        $('#round_face_length_b').val('no').attr('selected', true);
        $('#round_face_length_c').val('yes').attr('selected', true);
        $('#round_face_length_d').val('no').attr('selected', true);
    } else if (cornerPosition == 'JSHAPE1ST4TH') {
        $('#round_type').val('Jshape').attr('selected', true);

        $('#round_face_length_a').val('yes').attr('selected', true);
        $('#round_face_length_b').val('no').attr('selected', true);
        $('#round_face_length_c').val('no').attr('selected', true);
        $('#round_face_length_d').val('yes').attr('selected', true);
    } else if (cornerPosition == 'JSHAPE2ND3RD') {
        $('#round_type').val('Jshape').attr('selected', true);

        $('#round_face_length_a').val('no').attr('selected', true);
        $('#round_face_length_b').val('yes').attr('selected', true);
        $('#round_face_length_c').val('yes').attr('selected', true);
        $('#round_face_length_d').val('no').attr('selected', true);
    } else if (cornerPosition == 'JSHAPE2ND4TH') {
        $('#round_type').val('Jshape').attr('selected', true);

        $('#round_face_length_a').val('no').attr('selected', true);
        $('#round_face_length_b').val('yes').attr('selected', true);
        $('#round_face_length_c').val('no').attr('selected', true);
        $('#round_face_length_d').val('yes').attr('selected', true);
    } else if (cornerPosition == 'JSHAPE3RD4TH') {
        $('#round_type').val('Jshape').attr('selected', true);

        $('#round_face_length_a').val('no').attr('selected', true);
        $('#round_face_length_b').val('no').attr('selected', true);
        $('#round_face_length_c').val('yes').attr('selected', true);
        $('#round_face_length_d').val('yes').attr('selected', true);
    } else if (cornerPosition == 'JSHAPE1ST2ND3RD') {
        $('#round_type').val('Jshape').attr('selected', true);

        $('#round_face_length_a').val('yes').attr('selected', true);
        $('#round_face_length_b').val('yes').attr('selected', true);
        $('#round_face_length_c').val('yes').attr('selected', true);
        $('#round_face_length_d').val('no').attr('selected', true);
    } else if (cornerPosition == 'JSHAPE1ST2ND4TH') {
        $('#round_type').val('Jshape').attr('selected', true);

        $('#round_face_length_a').val('yes').attr('selected', true);
        $('#round_face_length_b').val('yes').attr('selected', true);
        $('#round_face_length_c').val('no').attr('selected', true);
        $('#round_face_length_d').val('yes').attr('selected', true);
    } else if (cornerPosition == 'JSHAPE1ST3RD4TH') {
        $('#round_type').val('Jshape').attr('selected', true);

        $('#round_face_length_a').val('yes').attr('selected', true);
        $('#round_face_length_b').val('no').attr('selected', true);
        $('#round_face_length_c').val('yes').attr('selected', true);
        $('#round_face_length_d').val('yes').attr('selected', true);
    } else if (cornerPosition == 'JSHAPE2ND3RD4TH') {
        $('#round_type').val('Jshape').attr('selected', true);

        $('#round_face_length_a').val('no').attr('selected', true);
        $('#round_face_length_b').val('yes').attr('selected', true);
        $('#round_face_length_c').val('yes').attr('selected', true);
        $('#round_face_length_d').val('yes').attr('selected', true);
    } else if (cornerPosition == 'JSHAPE1ST2ND3RD4TH') {
        $('#round_type').val('Jshape').attr('selected', true);

        $('#round_face_length_a').val('yes').attr('selected', true);
        $('#round_face_length_b').val('yes').attr('selected', true);
        $('#round_face_length_c').val('yes').attr('selected', true);
        $('#round_face_length_d').val('yes').attr('selected', true);
    } else if (cornerPosition == 'LSHAPE1ST') {
        $('#round_type').val('Lshape').attr('selected', true);
        $('#round_face_length_a').val('yes').attr('selected', true);
        $('#round_face_length_b').val('no').attr('selected', true);
        $('#round_face_length_c').val('no').attr('selected', true);
        $('#round_face_length_d').val('no').attr('selected', true);
    } else if (cornerPosition == 'LSHAPE2ND') {
        $('#round_type').val('Lshape').attr('selected', true);

        $('#round_face_length_b').val('yes').attr('selected', true);
        $('#round_face_length_a').val('no').attr('selected', true);
        $('#round_face_length_c').val('no').attr('selected', true);
        $('#round_face_length_d').val('no').attr('selected', true);
    } else if (cornerPosition == 'LSHAPE3RD') {
        $('#round_type').val('Lshape').attr('selected', true);

        $('#round_face_length_c').val('yes').attr('selected', true);
        $('#round_face_length_a').val('no').attr('selected', true);
        $('#round_face_length_b').val('no').attr('selected', true);
        $('#round_face_length_d').val('no').attr('selected', true);
    } else if (cornerPosition == 'LSHAPE4TH') {
        $('#round_type').val('Lshape').attr('selected', true);

        $('#round_face_length_d').val('yes').attr('selected', true);
        $('#round_face_length_a').val('no').attr('selected', true);
        $('#round_face_length_b').val('no').attr('selected', true);
        $('#round_face_length_c').val('no').attr('selected', true);
    } else if (cornerPosition == 'LSHAPE1ST2ND') {
        $('#round_type').val('Lshape').attr('selected', true);

        $('#round_face_length_a').val('yes').attr('selected', true);
        $('#round_face_length_b').val('yes').attr('selected', true);
        $('#round_face_length_c').val('no').attr('selected', true);
        $('#round_face_length_d').val('no').attr('selected', true);
    } else if (cornerPosition == 'LSHAPE1ST3RD') {
        $('#round_type').val('Lshape').attr('selected', true);

        $('#round_face_length_a').val('yes').attr('selected', true);
        $('#round_face_length_b').val('no').attr('selected', true);
        $('#round_face_length_c').val('yes').attr('selected', true);
        $('#round_face_length_d').val('no').attr('selected', true);
    } else if (cornerPosition == 'LSHAPE1ST4TH') {
        $('#round_type').val('Lshape').attr('selected', true);

        $('#round_face_length_a').val('yes').attr('selected', true);
        $('#round_face_length_b').val('no').attr('selected', true);
        $('#round_face_length_c').val('no').attr('selected', true);
        $('#round_face_length_d').val('yes').attr('selected', true);
    } else if (cornerPosition == 'LSHAPE2ND3RD') {
        $('#round_type').val('Lshape').attr('selected', true);

        $('#round_face_length_a').val('no').attr('selected', true);
        $('#round_face_length_b').val('yes').attr('selected', true);
        $('#round_face_length_c').val('yes').attr('selected', true);
        $('#round_face_length_d').val('no').attr('selected', true);
    } else if (cornerPosition == 'LSHAPE2ND4TH') {
        $('#round_type').val('Lshape').attr('selected', true);

        $('#round_face_length_a').val('no').attr('selected', true);
        $('#round_face_length_b').val('yes').attr('selected', true);
        $('#round_face_length_c').val('no').attr('selected', true);
        $('#round_face_length_d').val('yes').attr('selected', true);
    } else if (cornerPosition == 'LSHAPE3RD4TH') {
        $('#round_type').val('Lshape').attr('selected', true);

        $('#round_face_length_a').val('no').attr('selected', true);
        $('#round_face_length_b').val('no').attr('selected', true);
        $('#round_face_length_c').val('yes').attr('selected', true);
        $('#round_face_length_d').val('yes').attr('selected', true);
    } else if (cornerPosition == 'LSHAPE1ST2ND3RD') {
        $('#round_type').val('Lshape').attr('selected', true);

        $('#round_face_length_a').val('yes').attr('selected', true);
        $('#round_face_length_b').val('yes').attr('selected', true);
        $('#round_face_length_c').val('yes').attr('selected', true);
        $('#round_face_length_d').val('no').attr('selected', true);
    } else if (cornerPosition == 'LSHAPE1ST2ND4TH') {
        $('#round_type').val('Lshape').attr('selected', true);

        $('#round_face_length_a').val('yes').attr('selected', true);
        $('#round_face_length_b').val('yes').attr('selected', true);
        $('#round_face_length_c').val('no').attr('selected', true);
        $('#round_face_length_d').val('yes').attr('selected', true);
    } else if (cornerPosition == 'LSHAPE1ST3RD4TH') {
        $('#round_type').val('Lshape').attr('selected', true);

        $('#round_face_length_a').val('yes').attr('selected', true);
        $('#round_face_length_b').val('no').attr('selected', true);
        $('#round_face_length_c').val('yes').attr('selected', true);
        $('#round_face_length_d').val('yes').attr('selected', true);
    } else if (cornerPosition == 'LSHAPE2ND3RD4TH') {
        $('#round_type').val('Lshape').attr('selected', true);

        $('#round_face_length_a').val('no').attr('selected', true);
        $('#round_face_length_b').val('yes').attr('selected', true);
        $('#round_face_length_c').val('yes').attr('selected', true);
        $('#round_face_length_d').val('yes').attr('selected', true);
    } else if (cornerPosition == 'LSHAPE1ST2ND3RD4TH') {
        $('#round_type').val('Lshape').attr('selected', true);

        $('#round_face_length_a').val('yes').attr('selected', true);
        $('#round_face_length_b').val('yes').attr('selected', true);
        $('#round_face_length_c').val('yes').attr('selected', true);
        $('#round_face_length_d').val('yes').attr('selected', true);
    }
    //$('#round_layout').css("display","none");
    $('#round_layout').toggle('hide');



}

function show_layout(form) {

    //$('#round_layout').css("display","block");
    $('#round_layout').toggle('show');




}