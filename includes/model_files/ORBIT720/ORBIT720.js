$(document).ready(function() {

    $("input#glass-face").val(4);
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
            $("input#glass-face").val(4);
            zero = false;
            getPriceOfProduct(document.forms['cart_quantity']);
        }
    });
    getPriceOfProduct(document.forms['cart_quantity']);
    $('input[type="checkbox"]').click(function() {
        if ($(this).is(':checked')) {
            $(this).val(1);
            getPriceOfProduct(document.forms['cart_quantity']);
        } else {
            $(this).val(0);
            getPriceOfProduct(document.forms['cart_quantity']);
        }
    });

});

$(document).ready(function() {


    var my_facelengt_select = "";

    $msg = ms_face;


    $('[name="post_height"]').change(function() {

        if ($(this).val() == 'custom') {

            custom = $(this);

            $('.delete').click();



        }

    })


    $('[name="face_length_a"]').change(function() {

        if ($(this).val() == 'custom') {

            custom = $(this);

            $('.delete').click();



        }

    })

    $('[name="face_length_b"]').change(function() {

        if ($(this).val() == 'custom') {

            custom = $(this);

            $('.delete').click();

        }

    })

    $('[name="face_length_c"]').change(function() {

        if ($(this).val() == 'custom') {

            custom = $(this);

            $('.delete').click();

        }

    })

    $('[name="face_length_d"]').change(function() {

        if ($(this).val() == 'custom') {

            custom = $(this);

            $('.delete').click();

        }

    })





    $('.item .delete').click(function() {


        var elem = $(this).closest('.item');



        $.confirm({





            'title': 'Confirmation',

            'message': $msg,

            'buttons': {

                'Proceed': {

                    'class': 'blue',

                    'action': function() {





                        $('#is_custom').val('Yes');



                        my_facelengt_select = "";

                        my_facelengt_select += '<select name="' + custom.attr("name") + '" onchange="getPriceOfProduct(this.form),toggle()" >';
                        my_facelengt_select += '<option value="select">Select</option>';


                        var myArray = new Array();

                        var i = 1;

                        $('[name="' + custom.attr("name") + '"] > option').each(function() {



                            if ($(this).val() != 'custom') {
                                if ($(this).val() == '0') {
                                    $(this).val() == '12'

                                } else {
                                    myArray[i] = $(this).val();
                                    i++;
                                }


                            }



                        });

                        /*for ep 11 category post height*/







                        var j = 0;

                        for (i = 24; i < myArray[1]; i++) {



                            my_facelengt_select += '<option value="' + myArray[1] + '">' + i + '"</option>';

                            my_facelengt_select += '<option value="' + myArray[1] + '">' + i + '-1/4' + '"</option>';

                            my_facelengt_select += '<option value="' + myArray[1] + '">' + i + '-1/2' + '"</option>';

                            my_facelengt_select += '<option value="' + myArray[1] + '">' + i + '-3/4' + '"</option>';

                            j = i;

                        }



                        for (i = 1; i < myArray.length - 1; i++) {

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

                    'action': function() {
                        var str = custom.attr("name");
                        $('select[name=' + str + ']').val("select");
                        getPriceOfProduct(document.forms['cart_quantity']);
                    }



                }

            }

        });



    });



})

function getProductFolderName(productname) {
    foldername = "";
    switch (productname) {
        case 'Mid-Shelves':
            {
                foldername = "Mid-Shelves";
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

        case 'ES90':
            {
                foldername = "ES90";
                break;
            }
    }
    return foldername;
}

function changeGlassImage(form, image) {

    category_name = "<?=$category_name?>";
    foldername = getProductFolderName("<?=$category_name?>") + form.type.value;

    imageName = '';
    if (form.rounded_corners.value == 0) {
        imageName = 'GLASSNORAD.jpg';
    } else {
        imageName = 'GLASS.jpg'
    }
    if (image != "") {
        imageName = image;
    }
    cross = '<input type="button" onclick="getPriceOfProduct(this.form);" style="margin: 0 4px;position: absolute;right: -627px;top: -30px;width: 20px;z-index: 1000000;" value="X" class="rounded-corner-image">'
    image_string = '<img src="images/' + category_name + '/' + imageName + '" style="width:568px;height:434px">';
    document.getElementById('additional_image').innerHTML = image_string;
    document.getElementById('rott').innerHTML = cross;
}


function getPriceOfProduct(f) {
    // document.getElementById('rott').innerHTML='';

    if (category_name == "ORBIT720") {
        var model_name = "ORBIT720";

    }
    leftEndPostShelvs = "";

    rightEndPostShelvs = "";

    centerPostShelvs = '';

    leftShelvPrice = 0;

    rightShelvPrice = 0;

    centerShelvPrice = 0;
    if (f.face_length_a.value != '0') {
        $("select#choose_finish2").removeAttr("disabled");
        $("select#checkbox2").removeAttr("disabled");
    }

    if (f.rounded_corners.value == "yes") {
        $("select#checkbox3").removeAttr("disabled");
    } else {
        $("select#checkbox3").attr("disabled", "disabled");
        f.rounded_corners2.value = "no";
        f.rounded_corners2.selected = "No";
    }

    if (!$('select[name="right_length"]').length) {

        $('#c_glass_right_val').val('');

        $('#c_glass_right').val('');

    }

    if (!$('select[name="left_length"]').length) {

        $('#c_glass_left_val').val('');

        $('#c_glass_left').val('');

    }

    if (!$('select[name="post_height"]').length) {

        $('#c_glass_post_val').val('');
        $('#c_glass_post').val('');


    }

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






    var rounded_corners;
    var rounded_corners = "LYT";
    var glass_face_obj = f.glass_face;
    var rounded_corners3;
    var rounded_corners3 = "BP";
    var bracket_price = "0";
    var leftEndPanelPrice = 0;
    var rightEndPanelPrice = 0;
    var type = f.type;
    var EndPanelPrice = 0;
    var left_post;
    var imageName;
    var img;
    var left_price = "0";

    var right_post;

    var right_price = "0";

    var center_post;

    var center_price = "0";

    var face_glass_a;

    var face_glass_a_price = "0";
    var light;
    var lightprice = "0";
    var battery;
    var batteryprice = "0";
    var face_glass_b;

    var face_glass_b_price = "0";

    var face_glass_c;

    var face_glass_c_price = "0";
    var face_glass_d;

    var face_glass_d_price = "0";

    var flange;

    var flange_price = "0";

    var fraheight = '';

    var finish;

    var total = 0;

    var face_price = 0;

    var flange_price_n = 0.00;

    var no_of_selvs_a = 1;

    var no_of_selvs_b = 1;

    var no_of_selvs_c = 1;

    var str = "";

    var flange = "Flange";

    var a = 0;

    var b = 0;

    var c = 0;

    var h = 0;

    var imag = '<img src="images/Mid-Shelves1BAY/BOTHEND.jpg" style="width:100%;width:568px;height:434px">';

    var img2 = '<img src="images/Shelving/noglass.jpg" style="width:100%;width:568px;height:434px">';

    img += '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
    c_name = category_name;
    if (glass_face_obj.value == 1) {
        if (f.choose_finish.value == 'SL') {
            leftEndPanel = c_name + "-g" + "LEP Stainless Steel";
            rightEndPanel = c_name + "-g" + "REP Stainless Steel";
        } else {
            leftEndPanel = c_name + "-g" + "LEP Coated Black";
            rightEndPanel = c_name + "-g" + "REP Coated Black";
        }

        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[leftEndPanel][0] + '" />';
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[rightEndPanel][0] + '" />';
        leftEndPanelPrice = parseFloat(product_name_price[leftEndPanel][1]);
        rightEndPanelPrice = parseFloat(product_name_price[rightEndPanel][1]);
        imageName = "BOTHENDS";
    } else if (glass_face_obj.value == 2) {
        leftEndPanel = "";
        if (f.choose_finish.value == 'SL') {
            //leftEndPanel=c_name+"-g"+"LEP-Stainless Steel";
            rightEndPanel = c_name + "-g" + "REP Stainless Steel";
        } else {
            //leftEndPanel=c_name+"-g"+"LEP-Coated Black";
            rightEndPanel = c_name + "-g" + "REP Coated Black";
        }
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[rightEndPanel][0] + '" />';
        leftEndPanelPrice = 0;
        rightEndPanelPrice = parseFloat(product_name_price[rightEndPanel][1]);
        imageName = "RIGHTEND";
    } else if (glass_face_obj.value == 3) {
        //leftEndPanel=c_name+"-g"+"LEP";
        rightEndPanel = "";
        if (f.choose_finish.value == 'SL') {
            leftEndPanel = c_name + "-g" + "LEP Stainless Steel";
            //rightEndPanel=c_name+"-g"+"REP-Stainless Steel";
        } else {
            leftEndPanel = c_name + "-g" + "LEP Coated Black";
            //rightEndPanel=c_name+"-g"+"REP-Coated Black";
        }
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

    if (f.choose_finish.value == 'PC') {
        if (f.rounded_corners.value == "yes") {
            if (f.rounded_corners2.value == "yes") {

                battery = model_name + "-BP";
                batteryprice = product_name_price[battery][1];
                img = "lightpcbp.jpg";
                imageName = "BATLYTBLACK" + imageName;
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[battery][0] + '" />';
                // var img='<img src="images/'+model_name+'/lightpcbp.jpg" style="width:100%;width:568px;height:434px">';
                // img+='<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
                a = f.face_length_a.value;

                if (f.face_length_a.value != "select") {
                    light = model_name + "-" + f.face_length_a.value + "LYT";
                    lightprice = product_name_price[light][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light][0] + '" />';
                    $('#c_glass_a_light').val(product_name_price[light][0]);
                    $('#c_glass_a_val_light').val($('[name="face_length_a"]').find('option:selected').text());
                    face_glass_a = model_name + "-" + f.face_length_a.value;
                    face_glass_a_price = product_name_price[face_glass_a][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_a][0] + '" />';
                    $('#c_glass_a').val(product_name_price[face_glass_a][0]);
                    $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());

                }
            } else {
                img = "lightpc.jpg";
                imageName = "LYTBLACK" + imageName;
                // var img='<img src="images/'+model_name+'/lightpc.jpg" style="width:100%;width:568px;height:434px">';
                // img+='<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
                a = f.face_length_a.value;
                if (f.face_length_a.value != "select") {
                    light = model_name + "-" + f.face_length_a.value + "LYT";
                    lightprice = product_name_price[light][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light][0] + '" />';
                    $('#c_glass_a_light').val(product_name_price[light][0]);
                    $('#c_glass_a_val_light').val($('[name="face_length_a"]').find('option:selected').text());
                    face_glass_a = model_name + "-" + f.face_length_a.value;
                    face_glass_a_price = product_name_price[face_glass_a][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_a][0] + '" />';
                    $('#c_glass_a').val(product_name_price[face_glass_a][0]);
                    $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
                }
            }
        } else {
            img = "BOTHENDS.jpg";
            imageName = "BLACK" + imageName;
            // 	var img='<img src="images/'+model_name+'/BOTHENDS.jpg" style="width:100%;width:568px;height:434px">';
            // img+='<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
            a = f.face_length_a.value;
            if (f.face_length_a.value != "select") {
                face_glass_a = model_name + "-" + f.face_length_a.value;
                face_glass_a_price = product_name_price[face_glass_a][1];
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_a][0] + '" />';
                $('#c_glass_a').val(product_name_price[face_glass_a][0]);
                $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
            }


        }
    }
    if (f.choose_finish.value == 'SL') {
        if (f.rounded_corners.value == "yes") {
            if (f.rounded_corners2.value == "yes") {
                battery = model_name + "-BP";
                batteryprice = product_name_price[battery][1];
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[battery][0] + '" />';
                img = "lightslbp.jpg";
                imageName = "BATLYT" + imageName;
                // var img='<img src="images/'+model_name+'/lightslbp.jpg" style="width:100%;width:568px;height:434px">';
                // img+='<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
                a = f.face_length_a.value;
                if (f.face_length_a.value != "select") {
                    light = model_name + "-" + f.face_length_a.value + "LYT";
                    lightprice = product_name_price[light][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light][0] + '" />';
                    $('#c_glass_a_light').val(product_name_price[light][0]);
                    $('#c_glass_a_val_light').val($('[name="face_length_a"]').find('option:selected').text());
                    face_glass_a = model_name + "-" + f.face_length_a.value + "-SL";
                    face_glass_a_price = product_name_price[face_glass_a][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_a][0] + '" />';
                    $('#c_glass_a').val(product_name_price[face_glass_a][0]);
                    $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
                }
            } else {
                img = "light.jpg";
                imageName = "LYT" + imageName;
                // var img='<img src="images/'+model_name+'/light.jpg" style="width:100%;width:568px;height:434px">';
                // img+='<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
                a = f.face_length_a.value;
                if (f.face_length_a.value != "select") {
                    light = model_name + "-" + f.face_length_a.value + "LYT";
                    lightprice = product_name_price[light][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light][0] + '" />';
                    $('#c_glass_a_light').val(product_name_price[light][0]);
                    $('#c_glass_a_val_light').val($('[name="face_length_a"]').find('option:selected').text());
                    face_glass_a = model_name + "-" + f.face_length_a.value + "-SL";
                    face_glass_a_price = product_name_price[face_glass_a][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_a][0] + '" />';
                    $('#c_glass_a').val(product_name_price[face_glass_a][0]);
                    $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
                }
            }
        } else {
            img = "start2.jpg";
            imageName = imageName;
            // var img='<img src="images/'+model_name+'/start2.jpg" style="width:568px;height:434px;">';
            // img+='<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
            a = f.face_length_a.value;
            if (f.face_length_a.value != "select") {
                face_glass_a = model_name + "-" + f.face_length_a.value + "-SL";
                face_glass_a_price = product_name_price[face_glass_a][1];
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_a][0] + '" />';
                $('#c_glass_a').val(product_name_price[face_glass_a][0]);
                $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
            }

        }
    }
    // alert(imageName);
    batteryprice = parseFloat(batteryprice);
    lightprice = parseFloat(lightprice);
    face_price = parseFloat(face_glass_a_price) + parseFloat(face_glass_b_price) + parseFloat(face_glass_c_price)
    EndPanelPrice = leftEndPanelPrice + rightEndPanelPrice;
    total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(lightprice) + parseFloat(batteryprice) + parseFloat(EndPanelPrice);
    leftShelvPrice = (leftShelvPrice)
    rightShelvPrice = (rightShelvPrice)
    centerShelvPrice = (centerShelvPrice)
    $("#left-post").html(parseFloat(left_price) + ".00");
    $("#right-post").html(parseFloat(right_price) + ".00");
    $("#center-post").html(parseFloat(center_price) + ".00");
    $("#trasition-post").html(parseFloat(batteryprice) + ".00");
    $("#flange-cover").html(lightprice + ".00");
    $("#face-glass").html(face_price + ".00");
    $("#total").html("$&nbsp;" + total + ".00");
    document.getElementById("left-post-sel").innerHTML = leftShelvPrice + ".00";
    document.getElementById("right-post-sel").innerHTML = rightShelvPrice + ".00";
    document.getElementById("trasition-post-sel").innerHTML = centerShelvPrice + ".00";
    document.getElementById("left-Panel").innerHTML = leftEndPanelPrice + ".00";
    document.getElementById("right-panel").innerHTML = rightEndPanelPrice + ".00";
    $('#glass-bracket').html(((parseInt(no_of_selvs_a) + parseInt(no_of_selvs_b) + parseInt(no_of_selvs_c)) * 4 * parseFloat(bracket_price)) + ".00");
    $("#products_ids").html(str);
    img_ajx = imageName;



    var imag = '<img src="images/' + model_name + '/' + imageName + '.jpg" style="width:640px;height:480px;">';


    //var imag='<img src="images/'+model_name+'/'+imageName+'.jpg" style="width:828px;height:583px;">';


    imag += '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
    $("#additional_image").html(imag);
    $(".left_post").html(h + '"');
    //$(".glass_a").html(a-2+'"');
    $(".glass_b").html(b + '"');
    $(".glass_c").html(c + '"');
    if ($('#is_custom').val() == 'Yes') {
        //$(".glass_a").html($('[name="face_length_a"]').find('option:selected').text());
        h = $('[name="face_length_a"]').find('option:selected').text().split("-");
        if (h.length == 2) {
            fraheight = h[1];
            tis = h[1];
            //alert(tis)
            h2 = h[1];
            h1 = h[0];
            if (fraheight != 'undefined') {
                fraheight = fraheight.split('"');
                fraheight = "-" + fraheight[0];
            }
            $("div.glass_a").html(h1 + '-' + h2 + '');
            $("div.glass_b").html(h1 - 8 + '-' + h2 + '');
        } else {
            h = String(h);
            h = h.split('"');
            h = parseInt(h);
            //alert(h);
            // h=h-2;
            h = h;
            if (isNaN(h)) {
                $(".glass_a").html("Length");
                $("div.glass_b").html("Length");
            } else {
                $(".glass_a").html(h + '"');
                $("div.glass_b").html(h - 6 + '"');
            }
        }
    } else {
        if (f.face_length_a.value != "select") {
            $(".glass_a").html(a + '"');
            $(".glass_b").html(a - 8 + '"');
        } else {
            $(".glass_a").html("LENGTH");
            $(".glass_b").html("LENGTH");
        }
    }
    if ($('select[name="post_height"]').length) {
        $(".left_post").html($('[name="post_height"]').find('option:selected').text());
    }
    if ($('select[name="face_length_a"]').length) {
        $(".glass").html($('[name="face_length_a"]').find('option:selected').text());
    }
    if ($('select[name="face_length_b"]').length) {
        $(".glass_b").html($('[name="face_length_b"]').find('option:selected').text());
    }
    if ($('select[name="face_length_c"]').length) {
        $(".glass_c").html($('[name="face_length_c"]').find('option:selected').text());
    }
    if ($('select[name="face_length_d"]').length) {
        $(".glass_d").html($('[name="face_length_d"]').find('option:selected').text());
    }
    var n1 = getBeforeChar($('[name="face_length_a"]').find('option:selected').text()) - 0;
    var n2 = getBeforeChar($('[name="face_length_b"]').find('option:selected').text()) - 0;
    var n3 = getBeforeChar($('[name="face_length_c"]').find('option:selected').text()) - 0;
    var f_n1 = getAfterChar($('[name="face_length_a"]').find('option:selected').text());
    var f_n2 = getAfterChar($('[name="face_length_b"]').find('option:selected').text());
    var f_n3 = getAfterChar($('[name="face_length_c"]').find('option:selected').text());
    if (category_name == "ORBIT720") {
        var total = getTotal3Bay(n1, n2, n3, f_n1, f_n2, f_n3);
    } else {
        var total = getTotal3Bay(n1, n2, n3, f_n1, f_n2, f_n3);
    }
    //alert(n1)
    // if(total=='6"'||total=='0"'){
    // $(".total").html("Total");
    // }else{
    // $(".total").html(total);
    // }










    //var nsss = total.search("-");
    //alert(nsss)

    var totlsspilit1 = total.split('"');


    var totlsspilit = totlsspilit1[0].split("-");
    var custtval = totlsspilit[1];
    //alert(custtval);

    //parseInt();

    var toallll = 'test';

    if (custtval == '1/4') {

        toallll = parseInt(h) + parseInt(1);

        $(".total").html(toallll + '-3/4' + '"');
        //$(".total").html(h+6+totlsspilit[0]+'3/4'+'"');

    } else if (custtval == '1/2') {

        toallll = parseInt(h) + parseInt(2);

        $(".total").html(toallll + '' + '"');
        //$(".total").html(h+7+'"');


    } else if (custtval == '3/4') {
        toallll = parseInt(h) + parseInt(2);

        $(".total").html(toallll + '-1/4' + '"');


    } else {
        if (total == '1"' || total == '0"') {
            $(".total").html("Total");
        } else {


            //$(".total").html(total);
            var totlsspilit1 = total.split('"');
            $(".total").html(totlsspilit1[0] + '-1/2' + '"');
        }
    }

    /*
            
    //alert(total)
    if(total=='1"'||total=='0"'){
        $(".total").html("Total");
    }else{
        $(".total").html(total);
    }
            
            
            
    */









    if (f.face_length_a.value == "select") {
        $("#glass_err").attr("src", "img/iconCheckOff.gif");
        four = false;
    } else {
        $("#glass_err").attr("src", "img/iconCheckOn.gif");
        four = true;
    }


    if (f.rounded_corners2.value == "select") {
        $("#btry_err").attr("src", "img/iconCheckOff.gif");
        five = false;
    } else {
        $("#btry_err").attr("src", "img/iconCheckOn.gif");
        five = true;
    }
    if (f.rounded_corners.value == "select") {
        $("#light_err").attr("src", "img/iconCheckOff.gif");
        six = false;
    } else {
        $("#light_err").attr("src", "img/iconCheckOn.gif");
        six = true;
    }
    if (zero && four && five && six) {
        // $("#add").removeAttr("disabled");
        // $("#add").css("opacity","1");
    } else {
        // $("#add").css("opacity","0.3");
        // $("#add").attr("disabled","disabled");
    }

}

function myFunction(form) {
    var check = true;
    var x = '<center><img src="img/addToCartWindow.jpg" width="100%"></center>';
    x += '<ul style="margin-left:30px;">';
    if (form.face_length_a.value == "select") {
        x += '<li>Face Length <span style="color:red">?</span></li>';
        check = false;
    }
    if (form.end_options.value == "select") {
        x += '<li>End Panel <span style="color:red">?</span></li>';
        check = false;
    }
    // if($('#end_options').val()=="select"){
    // x+='<li>End Panels <span style="color:red">?</span></li>';
    // check=false;
    // }
    // if(form.rounded_corners2.value=="select"){
    // x+='<li>Battery Packs <span style="color:red">?</span></li>';
    // check=false;
    // }
    // if(form.rounded_corners.value=="select"){
    // x+='<li>Light Bar <span style="color:red">?</span></li>';
    // check=false;
    // }

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