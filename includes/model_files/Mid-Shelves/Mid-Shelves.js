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
    }
    return foldername;
}

function changeGlassImage(form, image) {
    // alert(image)
    category_name = category_name;
    foldername = getProductFolderName(category_name) + form.type.value;

    imageName = '';
    if (form.rounded_corners.value == "squared") {
        imageName = 'GLASSNORAD.jpg';
    } else {
        imageName = 'GLASS.jpg'
    }
    if (image != "") {
        imageName = image;
    }
    cross = '<input type="button" onclick="getPriceOfProduct(this.form);" style="margin: 0 4px;position: absolute;right: -627px;top: -53px;width: 20px;z-index: 1000000;" value="X" class="rounded-corner-image">'
    image_string = '<img src="images/' + foldername + '/' + imageName + '" style="width:568px;height:434px">';
    document.getElementById('additional_image').innerHTML = image_string;
}

function nogl(form, el, val) {
    if (form.type.value == "1BAY") {
        if (val == "NG" || val == 'NG"') {}
    }
    if (form.type.value == "2BAY") {
        if (val == "NG" || val == 'NG"') {
            form.face_length_a.value = "NG";
            form.face_length_b.value = "NG";
        }
    }
    if (form.type.value == "3BAY") {
        if (val == "NG" || val == 'NG"') {
            form.face_length_a.value = "NG";
            form.face_length_b.value = "NG";
            form.face_length_c.value = "NG";
        }
    }
    if (form.type.value == "4BAY") {
        if (val == "NG" || val == 'NG"') {
            form.face_length_a.value = "NG";
            form.face_length_b.value = "NG";
            form.face_length_c.value = "NG";
            form.face_length_d.value = "NG";
        }
    }
}


function finishImage(form, image) {
    category_name = category_name;
    foldername = getProductFolderName(category_name);
    if (image != "") {
        imageName = image;
    }

    cross = '<input type="button" onclick="getPriceOfProduct(this.form);" style="margin: 0 4px;position: absolute;right: -627px;top: -53px;width: 20px;z-index: 1000000;" value="X" class="rounded-corner-image">'
    image_string = '<img src="images/' + imageName + '" style="width:568px;height:453px">';
    //        alert(image_string);

    document.getElementById('additional_image').innerHTML = image_string;
    document.getElementById('ro').innerHTML = cross;
}
$(document).ready(function() {
    getPriceOfProduct(document.forms.cart_quantity);

    //document.forms.cart_quantity.rounded_corners.value="squared";//Remember Values are Tilted**
    // document.forms.cart_quantity.rounded_corners.selected="Squared";

});

function getPriceOfProduct(f) {
    // document.getElementById('rott').innerHTML='';
    category_name = "Mid-Shelves";

    leftEndPostShelvs = "";

    rightEndPostShelvs = "";

    centerPostShelvs = '';

    leftShelvPrice = 0;

    rightShelvPrice = 0;

    centerShelvPrice = 0;

    if (f.post_height.value != 0) {
        $("select#face_length_a").removeAttr("disabled");
        $("select#face_length_b").removeAttr("disabled");
        $("select#face_length_c").removeAttr("disabled");
        $("select#face_length_d").removeAttr("disabled");
        $("select#choose_finish2").removeAttr("disabled");
        $("input#checkbox2").removeAttr("disabled");
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
    var rounded_corners = "RND";
    var bracket_price = "0";

    var type = f.type;

    var left_post;

    var left_price = "0";

    var right_post;

    var right_price = "0";

    var center_post;

    var center_price = "0";

    var face_glass_a;

    var face_glass_a_price = "0";

    var face_glass_b;

    var face_glass_b_price = "0";

    var face_glass_c;

    var face_glass_c_price = "0";
    var face_glass_d;

    var face_glass_d_price = "0";

    var flange;

    var flange_price = "0";

    var model_name = "MS";

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


    if (type.value == "1BAY") {
        var img = '<img src="images/Mid-Shelves1BAY/BOTHEND.jpg" style="width:100%">';
    } else if (type.value == "2BAY") {
        var img = '<img src="images/Mid-Shelves2BAY/NORADBOTHENDS.jpg" style="width:100%">';
    } else if (type.value == "3BAY") {
        var img = '<img src="images/Mid-Shelves3BAY/NORADBOTHENDS.jpg" style="width:100%">';
    } else if (type.value == "4BAY") {
        var img = '<img src="images/Mid-Shelves4BAY/NORADBOTHENDS.jpg" style="width:100%">';
    }

    // var img='<img src="images/Mid-Shelves1BAY/BOTHEND.jpg" style="width:100%">';

    var img2 = '<img src="images/Shelving/noglass.jpg" style="width:100%">';



    img += '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="glass_d"></div><div class="total">38"</div>';
    img += '<div class="left_post">24"</div>';
    if (type.value == "1BAY") {
        if (f.face_length_a.value == "NG") {
            f.rounded_corners.value = "select";
            f.rounded_corners.disabled = true;
        } else {
            f.rounded_corners.disabled = false;
        }
    } else if (type.value == "2BAY") {
        if (f.face_length_a.value == "NG" || f.face_length_b.value == "NG") {
            f.rounded_corners.value = "select";
            f.rounded_corners.disabled = true;
        } else {
            f.rounded_corners.disabled = false;
        }
    } else if (type.value == "3BAY") {
        if (f.face_length_a.value == "NG" || f.face_length_b.value == "NG" || f.face_length_c.value == "NG") {
            f.rounded_corners.value = "select";
            f.rounded_corners.disabled = true;
        } else {
            f.rounded_corners.disabled = false;
        }
    } else if (type.value == "4BAY") {
        if (f.face_length_a.value == "NG" || f.face_length_b.value == "NG" || f.face_length_c.value == "NG" || f.face_length_d.value == "NG") {
            f.rounded_corners.value = "select";
            f.rounded_corners.disabled = true;
        } else {
            f.rounded_corners.disabled = false;
        }
    }
    if (f.post_height.value != "select") {
        if (type.value == "1BAY") {
            if (f.rounded_corners.value == "round" && f.face_length_a.value != "NG") {
                if (f.choose_finish.value == 'AL') {
                    img_ajx = "ALMNBOTHENDS";

                    var img = '<img src="images/Mid-Shelves1BAY/ALMNBOTHENDS.jpg" style="width:100%">';


                    img += '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
                    img += '<div class="left_post">24"</div>';
                    left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                    left_price = product_name_price[left_post][1];
                    right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                    right_price = product_name_price[right_post][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                    if (f.face_length_a.value != "select") {
                        if (f.face_length_a.value != "NG") {
                            face_glass_a = model_name + " RNDGL " + f.face_length_a.value + "/" + f.post_height.value;
                            face_glass_a_price = product_name_price[face_glass_a][1];
                            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_a][0] + '" />';
                            $('#c_glass_a').val(product_name_price[face_glass_a][0]);
                            $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
                        }
                    }
                    //alert(face_glass_a_price)
                    a = f.face_length_a.value;
                    h = f.post_height.value;
                    /*qani code*/

                    //$('#c_glass_post').val(product_name_price[post_height][0]);  
                    $('#c_glass_post_left').val(product_name_price[left_post][0]);
                    $('#c_glass_post_right').val(product_name_price[right_post][0]);
                    $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                    var no_of_selvs_a = f.shelvs_a.value;
                    face_price = parseFloat(face_glass_a_price) + parseFloat(face_glass_b_price) + parseFloat(face_glass_c_price)
                    total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                    //total=parseFloat(face_glass_a_price);
                }
                if (f.choose_finish.value == 'SL') {
                    img_ajx = "RNDBOTHEND";


                    var img = '<img src="images/Mid-Shelves1BAY/RNDBOTHEND.jpg" style="width:100%">';


                    img += '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
                    img += '<div class="left_post">24"</div>';
                    left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                    left_price = product_name_price[left_post][1];
                    right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                    right_price = product_name_price[right_post][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                    if (f.face_length_a.value != "select") {
                        if (f.face_length_a.value != "NG") {
                            face_glass_a = model_name + " RNDGL " + f.face_length_a.value + "/" + f.post_height.value;
                            face_glass_a_price = product_name_price[face_glass_a][1];
                            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_a][0] + '" />';
                            $('#c_glass_a').val(product_name_price[face_glass_a][0]);
                            $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
                        }
                    }

                    //alert(face_glass_a_price)

                    a = f.face_length_a.value;
                    h = f.post_height.value;
                    /*qani code*/

                    //$('#c_glass_post').val(product_name_price[post_height][0]);
                    $('#c_glass_post_left').val(product_name_price[left_post][0]);
                    $('#c_glass_post_right').val(product_name_price[right_post][0]);
                    $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                    var no_of_selvs_a = f.shelvs_a.value;
                    face_price = parseFloat(face_glass_a_price) + parseFloat(face_glass_b_price) + parseFloat(face_glass_c_price)
                    total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                }
                if (f.choose_finish.value == 'PC') {
                    img_ajx = "BLACKBOTHENDS";

                    var img = '<img src="images/Mid-Shelves1BAY/BLACKBOTHENDS.jpg" style="width:100%">';


                    no_of_selvs_b = 0;
                    no_of_selvs_c = 0;
                    img += '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
                    img += '<div class="left_post">24"</div>';
                    left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                    left_price = product_name_price[left_post][1];
                    right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                    right_price = product_name_price[right_post][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                    if (f.face_length_a.value != "select") {
                        if (f.face_length_a.value != "NG") {
                            face_glass_a = model_name + " RNDGL " + f.face_length_a.value + "/" + f.post_height.value;
                            face_glass_a_price = product_name_price[face_glass_a][1];
                            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_a][0] + '" />';
                            $('#c_glass_a').val(product_name_price[face_glass_a][0]);
                            $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
                        }
                    }

                    //alert(face_glass_a_price)
                    a = f.face_length_a.value;
                    h = f.post_height.value;
                    /*qani code*/
                    //$('#c_glass_post_val').val(product_name_price[face_glass_a][0]);
                    //$('#c_glass_post_val').val($('[name="face_length_a"]').find('option:selected').text());

                    $('#c_glass_post_left').val(product_name_price[left_post][0]);
                    $('#c_glass_post_right').val(product_name_price[right_post][0]);
                    $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                    var no_of_selvs_a = f.shelvs_a.value;
                    face_price = parseFloat(face_glass_a_price) + parseFloat(face_glass_b_price) + parseFloat(face_glass_c_price)
                    total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                    //total=parseFloat(face_glass_a_price);
                }
            } else {
                if (f.choose_finish.value == 'AL') {
                    if (f.face_length_a.value == 'NG') {
                        img_ajx = "NOGLALMNBOTHENDS";

                        var img = '<img src="images/Mid-Shelves1BAY/NOGLALMNBOTHENDS.jpg" style="width:100%">';

                        img += '<div class="left_post">24"</div>';
                        left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                        left_price = product_name_price[left_post][1];
                        right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                        right_price = product_name_price[right_post][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                        $('#c_glass_post_left').val(product_name_price[left_post][0]);
                        $('#c_glass_post_right').val(product_name_price[right_post][0]);
                        $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                        total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                    } else {
                        img_ajx = "ALMNNORADBOTHENDS";

                        var img = '<img src="images/Mid-Shelves1BAY/ALMNNORADBOTHENDS.jpg" style="width:100%">';

                        img += '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
                        img += '<div class="left_post">24"</div>';
                        left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                        left_price = product_name_price[left_post][1];
                        right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                        right_price = product_name_price[right_post][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                        if (f.face_length_a.value != "select") {
                            if (f.face_length_a.value != "NG") {
                                face_glass_a = model_name + " GLASS " + f.face_length_a.value + "/" + f.post_height.value;
                                face_glass_a_price = product_name_price[face_glass_a][1];
                                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_a][0] + '" />';
                                $('#c_glass_a').val(product_name_price[face_glass_a][0]);
                                $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
                            }
                        }

                        //alert(face_glass_a_price)
                        a = f.face_length_a.value;
                        h = f.post_height.value;
                        /*qani code*/

                        $('#c_glass_post_left').val(product_name_price[left_post][0]);
                        $('#c_glass_post_right').val(product_name_price[right_post][0]);
                        $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                        var no_of_selvs_a = f.shelvs_a.value;
                        face_price = parseFloat(face_glass_a_price) + parseFloat(face_glass_b_price) + parseFloat(face_glass_c_price)
                        total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                        //total=parseFloat(face_glass_a_price);
                    }
                }
                if (f.choose_finish.value == 'SL') {
                    if (f.face_length_a.value == 'NG') {
                        img_ajx = "NOGLBOTHENDS";

                        var img = '<img src="images/Mid-Shelves1BAY/NOGLBOTHENDS.jpg" style="width:100%">';

                        img += '<div class="left_post">24"</div>';
                        left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                        left_price = product_name_price[left_post][1];
                        right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                        right_price = product_name_price[right_post][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                        $('#c_glass_post_left').val(product_name_price[left_post][0]);
                        $('#c_glass_post_right').val(product_name_price[right_post][0]);
                        $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                        total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                    } else {
                        img_ajx = "BOTHEND";
                        no_of_selvs_b = 0;
                        no_of_selvs_c = 0;
                        img += '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
                        img += '<div class="left_post">24"</div>';
                        left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                        left_price = product_name_price[left_post][1];
                        right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                        right_price = product_name_price[right_post][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                        if (f.face_length_a.value != "select") {
                            if (f.face_length_a.value != "NG") {
                                face_glass_a = model_name + " GLASS " + f.face_length_a.value + "/" + f.post_height.value;
                                face_glass_a_price = product_name_price[face_glass_a][1];
                                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_a][0] + '" />';
                                $('#c_glass_a').val(product_name_price[face_glass_a][0]);
                                $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
                            }
                        }

                        //alert(face_glass_a_price)
                        a = f.face_length_a.value;
                        h = f.post_height.value;
                        /*qani code*/
                        //$('#c_glass_post_val').val(product_name_price[face_glass_a][0]);
                        //$('#c_glass_post_val').val($('[name="face_length_a"]').find('option:selected').text());

                        $('#c_glass_post_left').val(product_name_price[left_post][0]);
                        $('#c_glass_post_right').val(product_name_price[right_post][0]);
                        $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                        var no_of_selvs_a = f.shelvs_a.value;
                        face_price = parseFloat(face_glass_a_price) + parseFloat(face_glass_b_price) + parseFloat(face_glass_c_price)
                        total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                    }
                    //total=parseFloat(face_glass_a_price);
                }
                if (f.choose_finish.value == 'PC') {
                    if (f.face_length_a.value == 'NG') {
                        img_ajx = "NOGLBLACKBOTHENDS";

                        var img = '<img src="images/Mid-Shelves1BAY/NOGLBLACKBOTHENDS.jpg" style="width:100%">';


                        img += '<div class="left_post">24"</div>';
                        left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                        left_price = product_name_price[left_post][1];
                        right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                        right_price = product_name_price[right_post][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                        $('#c_glass_post_left').val(product_name_price[left_post][0]);
                        $('#c_glass_post_right').val(product_name_price[right_post][0]);
                        $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                        total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                    } else {
                        img_ajx = "BLACKNORADBOTHENDS";

                        var img = '<img src="images/Mid-Shelves1BAY/BLACKNORADBOTHENDS.jpg" style="width:100%">';

                        no_of_selvs_b = 0;
                        no_of_selvs_c = 0;
                        img += '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
                        img += '<div class="left_post">24"</div>';
                        left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                        left_price = product_name_price[left_post][1];
                        right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                        right_price = product_name_price[right_post][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                        if (f.face_length_a.value != "select") {
                            if (f.face_length_a.value != "NG") {
                                face_glass_a = model_name + " GLASS " + f.face_length_a.value + "/" + f.post_height.value;
                                face_glass_a_price = product_name_price[face_glass_a][1];
                                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_a][0] + '" />';
                                $('#c_glass_a').val(product_name_price[face_glass_a][0]);
                                $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
                            }
                        }

                        //alert(face_glass_a_price)
                        a = f.face_length_a.value;
                        h = f.post_height.value;
                        /*qani code*/
                        //$('#c_glass_post_val').val(product_name_price[face_glass_a][0]);
                        //$('#c_glass_post_val').val($('[name="face_length_a"]').find('option:selected').text());

                        $('#c_glass_post_left').val(product_name_price[left_post][0]);
                        $('#c_glass_post_right').val(product_name_price[right_post][0]);
                        $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                        var no_of_selvs_a = f.shelvs_a.value;
                        face_price = parseFloat(face_glass_a_price) + parseFloat(face_glass_b_price) + parseFloat(face_glass_c_price)
                        total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                    }
                    //total=parseFloat(face_glass_a_price);
                }
            }
        } else if (type.value == "2BAY") {
            if (f.rounded_corners.value == "round" && (f.face_length_a.value != "NG" || f.face_length_b.value != "NG")) {
                if (f.choose_finish.value == 'AL') {
                    img_ajx = "ALMNBOTHENDS";

                    var img = '<img src="images/Mid-Shelves2BAY/ALMNBOTHENDS.jpg" style="width:100%">';


                    img += '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
                    img += '<div class="left_post">24"</div>';
                    a = f.face_length_a.value;
                    b = f.face_length_b.value;
                    img += '<div class="left_post">24"</div>';
                    h = f.post_height.value;
                    left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                    //right_post=model_name+" RP "+f.post_height.value+" "+f.choose_finish.value;
                    left_price = product_name_price[left_post][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                    right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                    right_price = product_name_price[right_post][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                    if (f.face_length_a.value != "select") {
                        face_glass_a = model_name + " RNDGL " + f.face_length_a.value + "/" + f.post_height.value;
                        face_glass_a_price = product_name_price[face_glass_a][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_a][0] + '" />';
                        $('#c_glass_a').val(product_name_price[face_glass_a][0]);
                        $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
                    }
                    if (f.face_length_b.value != "select") {
                        face_glass_b = model_name + " RNDGL " + f.face_length_b.value + "/" + f.post_height.value;
                        face_glass_b_price = product_name_price[face_glass_b][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_b][0] + '" />';
                        $('#c_glass_b').val(product_name_price[face_glass_b][0]);
                        $('#c_glass_b_val').val($('[name="face_length_b"]').find('option:selected').text());
                    }

                    var no_of_selvs_a = f.shelvs_a.value;
                    /*qani code*/
                    $('#c_glass_post_left').val(product_name_price[left_post][0]);
                    $('#c_glass_post_right').val(product_name_price[right_post][0]);
                    $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                    /*qani code*/
                    center_post = model_name + " CP " + f.post_height.value + " " + f.choose_finish.value;
                    center_price = product_name_price[center_post][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                    face_price = parseFloat(face_glass_a_price) + parseFloat(face_glass_b_price) + parseFloat(face_glass_c_price)
                    total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                }
                if (f.choose_finish.value == 'SL') {
                    img_ajx = "BOTHENDS";

                    var img = '<img src="images/Mid-Shelves2BAY/BOTHENDS.jpg" style="width:100%">';


                    img += '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
                    a = f.face_length_a.value;
                    b = f.face_length_b.value;
                    img += '<div class="left_post">24"</div>';
                    h = f.post_height.value;
                    left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                    //right_post=model_name+" RP "+f.post_height.value+" "+f.choose_finish.value;
                    left_price = product_name_price[left_post][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                    right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                    right_price = product_name_price[right_post][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                    if (f.face_length_a.value != "select") {
                        face_glass_a = model_name + " RNDGL " + f.face_length_a.value + "/" + f.post_height.value;
                        face_glass_a_price = product_name_price[face_glass_a][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_a][0] + '" />';
                        $('#c_glass_a').val(product_name_price[face_glass_a][0]);
                        $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
                    }
                    if (f.face_length_b.value != "select") {
                        face_glass_b = model_name + " RNDGL " + f.face_length_b.value + "/" + f.post_height.value;
                        face_glass_b_price = product_name_price[face_glass_b][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_b][0] + '" />';
                        $('#c_glass_b').val(product_name_price[face_glass_b][0]);
                        $('#c_glass_b_val').val($('[name="face_length_b"]').find('option:selected').text());
                    }
                    var no_of_selvs_a = f.shelvs_a.value;
                    //var no_of_selvs_b=f.shelvs_b.value;
                    /*qani code*/
                    $('#c_glass_post_left').val(product_name_price[left_post][0]);
                    $('#c_glass_post_right').val(product_name_price[right_post][0]);
                    $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                    /*qani code*/
                    center_post = model_name + " CP " + f.post_height.value + " " + f.choose_finish.value;
                    center_price = product_name_price[center_post][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                    face_price = parseFloat(face_glass_a_price) + parseFloat(face_glass_b_price) + parseFloat(face_glass_c_price)
                    total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                }
                if (f.choose_finish.value == 'PC') {
                    img_ajx = "BLACKBOTHENDS";

                    var img = '<img src="images/Mid-Shelves2BAY/BLACKBOTHENDS.jpg" style="width:100%">';

                    img += '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
                    img += '<div class="left_post">24"</div>';
                    a = f.face_length_a.value;
                    b = f.face_length_b.value;
                    img += '<div class="left_post">24"</div>';
                    h = f.post_height.value;
                    left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                    //right_post=model_name+" RP "+f.post_height.value+" "+f.choose_finish.value;
                    left_price = product_name_price[left_post][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                    right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                    right_price = product_name_price[right_post][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                    if (f.face_length_a.value != "select") {
                        face_glass_a = model_name + " RNDGL " + f.face_length_a.value + "/" + f.post_height.value;
                        face_glass_a_price = product_name_price[face_glass_a][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_a][0] + '" />';
                        $('#c_glass_a').val(product_name_price[face_glass_a][0]);
                        $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
                    }
                    if (f.face_length_b.value != "select") {
                        face_glass_b = model_name + " RNDGL " + f.face_length_b.value + "/" + f.post_height.value;
                        face_glass_b_price = product_name_price[face_glass_b][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_b][0] + '" />';
                        $('#c_glass_b').val(product_name_price[face_glass_b][0]);
                        $('#c_glass_b_val').val($('[name="face_length_b"]').find('option:selected').text());
                    }
                    var no_of_selvs_a = f.shelvs_a.value;
                    /*qani code*/
                    $('#c_glass_post_left').val(product_name_price[left_post][0]);
                    $('#c_glass_post_right').val(product_name_price[right_post][0]);
                    $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                    /*qani code*/
                    center_post = model_name + " CP " + f.post_height.value + " " + f.choose_finish.value;
                    center_price = product_name_price[center_post][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                    face_price = parseFloat(face_glass_a_price) + parseFloat(face_glass_b_price) + parseFloat(face_glass_c_price)
                    total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                }
            } else {
                if (f.choose_finish.value == 'AL') {
                    if (f.face_length_a.value == 'NG' || f.face_length_b.value == 'NG') {
                        img_ajx = "NOGLALMNBOTHENDS";


                        var img = '<img src="images/Mid-Shelves2BAY/NOGLALMNBOTHENDS.jpg" style="width:100%">';


                        img += '<div class="left_post">24"</div>';
                        left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                        left_price = product_name_price[left_post][1];
                        right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                        right_price = product_name_price[right_post][1];
                        center_post = model_name + " CP " + f.post_height.value + " " + f.choose_finish.value;
                        center_price = product_name_price[center_post][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                        $('#c_glass_post_left').val(product_name_price[left_post][0]);
                        $('#c_glass_post_right').val(product_name_price[right_post][0]);
                        $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                        total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                    } else {
                        img_ajx = "ALMNNORADBOTHENDS";


                        var img = '<img src="images/Mid-Shelves2BAY/ALMNNORADBOTHENDS.jpg" style="width:100%">';


                        img += '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
                        a = f.face_length_a.value;
                        b = f.face_length_b.value;
                        img += '<div class="left_post">24"</div>';
                        h = f.post_height.value;
                        left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                        left_price = product_name_price[left_post][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                        right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                        right_price = product_name_price[right_post][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                        if (f.face_length_a.value != "select") {
                            face_glass_a = model_name + " GLASS " + f.face_length_a.value + "/" + f.post_height.value;
                            face_glass_a_price = product_name_price[face_glass_a][1];
                            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_a][0] + '" />';
                            $('#c_glass_a').val(product_name_price[face_glass_a][0]);
                            $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
                        }
                        if (f.face_length_b.value != "select") {
                            face_glass_b = model_name + " GLASS " + f.face_length_b.value + "/" + f.post_height.value;
                            face_glass_b_price = product_name_price[face_glass_b][1];
                            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_b][0] + '" />';
                            $('#c_glass_b').val(product_name_price[face_glass_b][0]);
                            $('#c_glass_b_val').val($('[name="face_length_b"]').find('option:selected').text());
                        }
                        var no_of_selvs_a = f.shelvs_a.value;
                        //var no_of_selvs_b=f.shelvs_b.value;
                        /*qani code*/
                        $('#c_glass_post_left').val(product_name_price[left_post][0]);
                        $('#c_glass_post_right').val(product_name_price[right_post][0]);
                        $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                        /*qani code*/
                        center_post = model_name + " CP " + f.post_height.value + " " + f.choose_finish.value;
                        center_price = product_name_price[center_post][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        face_price = parseFloat(face_glass_a_price) + parseFloat(face_glass_b_price) + parseFloat(face_glass_c_price)
                        total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                    }
                }
                if (f.choose_finish.value == 'SL') {
                    if (f.face_length_a.value == 'NG' || f.face_length_b.value == 'NG') {
                        img_ajx = "NOGLBOTHENDS";

                        var img = '<img src="images/Mid-Shelves2BAY/NOGLBOTHENDS.jpg" style="width:100%">';


                        img += '<div class="left_post">24"</div>';
                        left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                        left_price = product_name_price[left_post][1];
                        right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                        right_price = product_name_price[right_post][1];
                        center_post = model_name + " CP " + f.post_height.value + " " + f.choose_finish.value;
                        center_price = product_name_price[center_post][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                        $('#c_glass_post_left').val(product_name_price[left_post][0]);
                        $('#c_glass_post_right').val(product_name_price[right_post][0]);
                        $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                        total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                    } else {
                        img_ajx = "NORADBOTHENDS";

                        var img = '<img src="images/Mid-Shelves2BAY/NORADBOTHENDS.jpg" style="width:100%">';

                        img += '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
                        left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                        left_price = product_name_price[left_post][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                        right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                        right_price = product_name_price[right_post][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                        a = f.face_length_a.value;
                        b = f.face_length_b.value;
                        img += '<div class="left_post">24"</div>';
                        h = f.post_height.value;
                        if (f.face_length_a.value != "select") {
                            face_glass_a = model_name + " GLASS " + f.face_length_a.value + "/" + f.post_height.value;
                            face_glass_a_price = product_name_price[face_glass_a][1];
                            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_a][0] + '" />';
                            $('#c_glass_a').val(product_name_price[face_glass_a][0]);
                            $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
                        }
                        if (f.face_length_b.value != "select") {
                            face_glass_b = model_name + " GLASS " + f.face_length_b.value + "/" + f.post_height.value;
                            face_glass_b_price = product_name_price[face_glass_b][1];
                            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_b][0] + '" />';
                            $('#c_glass_b').val(product_name_price[face_glass_b][0]);
                            $('#c_glass_b_val').val($('[name="face_length_b"]').find('option:selected').text());
                        }


                        var no_of_selvs_a = f.shelvs_a.value;
                        $('#c_glass_post_left').val(product_name_price[left_post][0]);
                        $('#c_glass_post_right').val(product_name_price[right_post][0]);
                        $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                        /*qani code*/
                        center_post = model_name + " CP " + f.post_height.value + " " + f.choose_finish.value;
                        center_price = product_name_price[center_post][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        face_price = parseFloat(face_glass_a_price) + parseFloat(face_glass_b_price) + parseFloat(face_glass_c_price)
                        total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                    }
                }
                if (f.choose_finish.value == 'PC') {
                    if (f.face_length_a.value == 'NG' || f.face_length_b.value == 'NG') {
                        img_ajx = "NOGLBLACKBOTHENDS";

                        var img = '<img src="images/Mid-Shelves2BAY/NOGLBLACKBOTHENDS.jpg" style="width:100%">';


                        img += '<div class="left_post">24"</div>';
                        left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                        left_price = product_name_price[left_post][1];
                        right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                        right_price = product_name_price[right_post][1];
                        center_post = model_name + " CP " + f.post_height.value + " " + f.choose_finish.value;
                        center_price = product_name_price[center_post][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                        $('#c_glass_post_left').val(product_name_price[left_post][0]);
                        $('#c_glass_post_right').val(product_name_price[right_post][0]);
                        $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                        total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                    } else {
                        img_ajx = "BLACKNORADBOTHENDS";


                        var img = '<img src="images/Mid-Shelves2BAY/BLACKNORADBOTHENDS.jpg" style="width:100%">';


                        img += '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
                        a = f.face_length_a.value;
                        b = f.face_length_b.value;
                        img += '<div class="left_post">24"</div>';
                        h = f.post_height.value;
                        left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                        left_price = product_name_price[left_post][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                        right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                        right_price = product_name_price[right_post][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                        if (f.face_length_a.value != "select") {
                            face_glass_a = model_name + " GLASS " + f.face_length_a.value + "/" + f.post_height.value;
                            face_glass_a_price = product_name_price[face_glass_a][1];
                            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_a][0] + '" />';
                            $('#c_glass_a').val(product_name_price[face_glass_a][0]);
                            $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
                        }
                        if (f.face_length_b.value != "select") {
                            face_glass_b = model_name + " GLASS " + f.face_length_b.value + "/" + f.post_height.value;
                            face_glass_b_price = product_name_price[face_glass_b][1];
                            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_b][0] + '" />';
                            $('#c_glass_b').val(product_name_price[face_glass_b][0]);
                            $('#c_glass_b_val').val($('[name="face_length_b"]').find('option:selected').text());
                        }


                        var no_of_selvs_a = f.shelvs_a.value;
                        //var no_of_selvs_b=f.shelvs_b.value;
                        /*qani code*/
                        $('#c_glass_post_left').val(product_name_price[left_post][0]);
                        $('#c_glass_post_right').val(product_name_price[right_post][0]);
                        $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                        /*qani code*/
                        center_post = model_name + " CP " + f.post_height.value + " " + f.choose_finish.value;
                        center_price = product_name_price[center_post][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        face_price = parseFloat(face_glass_a_price) + parseFloat(face_glass_b_price) + parseFloat(face_glass_c_price)
                        total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                    }
                }
            }
        } else if (type.value == "3BAY") {
            if (f.rounded_corners.value == "round") {
                if (f.choose_finish.value == 'AL') {
                    img_ajx = "ALMNBOTHENDS";

                    var img = '<img src="images/Mid-Shelves3BAY/ALMNBOTHENDS.jpg" style="width:100%">';


                    img += '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
                    left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                    left_price = product_name_price[left_post][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                    right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                    right_price = product_name_price[right_post][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                    a = f.face_length_a.value;
                    b = f.face_length_b.value;
                    c = f.face_length_c.value;
                    img += '<div class="left_post">24"</div>';
                    h = f.post_height.value;
                    if (f.face_length_a.value != "select") {
                        face_glass_a = model_name + " RNDGL " + f.face_length_a.value + "/" + f.post_height.value;
                        face_glass_a_price = product_name_price[face_glass_a][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_a][0] + '" />';
                        $('#c_glass_a').val(product_name_price[face_glass_a][0]);
                        $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
                    }
                    if (f.face_length_b.value != "select") {
                        face_glass_b = model_name + " RNDGL " + f.face_length_b.value + "/" + f.post_height.value;
                        face_glass_b_price = product_name_price[face_glass_b][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_b][0] + '" />';
                        $('#c_glass_b').val(product_name_price[face_glass_b][0]);
                        $('#c_glass_b_val').val($('[name="face_length_b"]').find('option:selected').text());
                    }
                    if (f.face_length_c.value != "select") {
                        face_glass_c = model_name + " RNDGL " + f.face_length_c.value + "/" + f.post_height.value;
                        face_glass_c_price = product_name_price[face_glass_c][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_c][0] + '" />';
                        $('#c_glass_c').val(product_name_price[face_glass_c][0]);
                        $('#c_glass_c_val').val($('[name="face_length_c"]').find('option:selected').text());
                    }



                    var no_of_selvs_a = f.shelvs_a.value;
                    $('#c_glass_post_left').val(product_name_price[left_post][0]);
                    $('#c_glass_post_right').val(product_name_price[right_post][0]);
                    $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                    /*qani code*/
                    center_post = model_name + " CP " + f.post_height.value + " " + f.choose_finish.value;
                    center_price = product_name_price[center_post][1] * 2;
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                    face_price = parseFloat(face_glass_a_price) + parseFloat(face_glass_b_price) + parseFloat(face_glass_c_price)
                    total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                }
                if (f.choose_finish.value == 'SL') {
                    img_ajx = "BOTHENDS";

                    var img = '<img src="images/Mid-Shelves3BAY/BOTHENDS.jpg" style="width:100%">';


                    img += '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
                    left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                    left_price = product_name_price[left_post][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                    right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                    right_price = product_name_price[right_post][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                    a = f.face_length_a.value;
                    b = f.face_length_b.value;
                    c = f.face_length_c.value;
                    img += '<div class="left_post">24"</div>';
                    h = f.post_height.value;
                    if (f.face_length_a.value != "select") {
                        face_glass_a = model_name + " RNDGL " + f.face_length_a.value + "/" + f.post_height.value;
                        face_glass_a_price = product_name_price[face_glass_a][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_a][0] + '" />';
                        $('#c_glass_a').val(product_name_price[face_glass_a][0]);
                        $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
                    }
                    if (f.face_length_b.value != "select") {
                        face_glass_b = model_name + " RNDGL " + f.face_length_b.value + "/" + f.post_height.value;
                        face_glass_b_price = product_name_price[face_glass_b][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_b][0] + '" />';
                        $('#c_glass_b').val(product_name_price[face_glass_b][0]);
                        $('#c_glass_b_val').val($('[name="face_length_b"]').find('option:selected').text());
                    }
                    if (f.face_length_c.value != "select") {
                        face_glass_c = model_name + " RNDGL " + f.face_length_c.value + "/" + f.post_height.value;
                        face_glass_c_price = product_name_price[face_glass_c][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_c][0] + '" />';
                        $('#c_glass_c').val(product_name_price[face_glass_c][0]);
                        $('#c_glass_c_val').val($('[name="face_length_c"]').find('option:selected').text());
                    }
                    var no_of_selvs_a = f.shelvs_a.value;
                    $('#c_glass_post_left').val(product_name_price[left_post][0]);
                    $('#c_glass_post_right').val(product_name_price[right_post][0]);
                    $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                    /*qani code*/
                    center_post = model_name + " CP " + f.post_height.value + " " + f.choose_finish.value;
                    center_price = product_name_price[center_post][1] * 2;
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                    face_price = parseFloat(face_glass_a_price) + parseFloat(face_glass_b_price) + parseFloat(face_glass_c_price)
                    total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                }
                if (f.choose_finish.value == 'PC') {
                    img_ajx = "BLACKBOTHENDS";

                    var img = '<img src="images/Mid-Shelves3BAY/BLACKBOTHENDS.jpg" style="width:100%">';


                    img += '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
                    left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                    left_price = product_name_price[left_post][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                    right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                    right_price = product_name_price[right_post][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                    a = f.face_length_a.value;
                    b = f.face_length_b.value;
                    c = f.face_length_c.value;
                    img += '<div class="left_post">24"</div>';
                    h = f.post_height.value;
                    if (f.face_length_a.value != "select") {
                        face_glass_a = model_name + " RNDGL " + f.face_length_a.value + "/" + f.post_height.value;
                        face_glass_a_price = product_name_price[face_glass_a][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_a][0] + '" />';
                        $('#c_glass_a').val(product_name_price[face_glass_a][0]);
                        $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
                    }
                    if (f.face_length_b.value != "select") {
                        face_glass_b = model_name + " RNDGL " + f.face_length_b.value + "/" + f.post_height.value;
                        face_glass_b_price = product_name_price[face_glass_b][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_b][0] + '" />';
                        $('#c_glass_b').val(product_name_price[face_glass_b][0]);
                        $('#c_glass_b_val').val($('[name="face_length_b"]').find('option:selected').text());
                    }
                    if (f.face_length_c.value != "select") {
                        face_glass_c = model_name + " RNDGL " + f.face_length_c.value + "/" + f.post_height.value;
                        face_glass_c_price = product_name_price[face_glass_c][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_c][0] + '" />';
                        $('#c_glass_c').val(product_name_price[face_glass_c][0]);
                        $('#c_glass_c_val').val($('[name="face_length_c"]').find('option:selected').text());
                    }



                    var no_of_selvs_a = f.shelvs_a.value;
                    $('#c_glass_post_left').val(product_name_price[left_post][0]);
                    $('#c_glass_post_right').val(product_name_price[right_post][0]);
                    $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                    /*qani code*/
                    center_post = model_name + " CP " + f.post_height.value + " " + f.choose_finish.value;
                    center_price = product_name_price[center_post][1] * 2;
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                    face_price = parseFloat(face_glass_a_price) + parseFloat(face_glass_b_price) + parseFloat(face_glass_c_price)
                    total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                }
            } else {
                if (f.choose_finish.value == 'AL') {
                    if (f.face_length_a.value == 'NG' || f.face_length_b.value == 'NG' || f.face_length_c.value == 'NG') {
                        img_ajx = "NOGLALMNBOTHENDS";

                        var img = '<img src="images/Mid-Shelves3BAY/NOGLALMNBOTHENDS.jpg" style="width:100%">';


                        img += '<div class="left_post">24"</div>';
                        left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                        left_price = product_name_price[left_post][1];
                        right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                        right_price = product_name_price[right_post][1];
                        center_post = model_name + " CP " + f.post_height.value + " " + f.choose_finish.value;
                        center_price = product_name_price[center_post][1] * 2;
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                        $('#c_glass_post_left').val(product_name_price[left_post][0]);
                        $('#c_glass_post_right').val(product_name_price[right_post][0]);
                        $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                        total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                    } else {
                        img_ajx = "ALMNNORADBOTHENDS";

                        var img = '<img src="images/Mid-Shelves3BAY/ALMNNORADBOTHENDS.jpg" style="width:100%">';


                        img += '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
                        left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                        left_price = product_name_price[left_post][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                        right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                        right_price = product_name_price[right_post][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                        a = f.face_length_a.value;
                        b = f.face_length_b.value;
                        c = f.face_length_c.value;
                        img += '<div class="left_post">24"</div>';
                        h = f.post_height.value;
                        if (f.face_length_a.value != "select") {
                            face_glass_a = model_name + " GLASS " + f.face_length_a.value + "/" + f.post_height.value;
                            face_glass_a_price = product_name_price[face_glass_a][1];
                            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_a][0] + '" />';
                            $('#c_glass_a').val(product_name_price[face_glass_a][0]);
                            $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
                        }
                        if (f.face_length_b.value != "select") {
                            face_glass_b = model_name + " GLASS " + f.face_length_b.value + "/" + f.post_height.value;
                            face_glass_b_price = product_name_price[face_glass_b][1];
                            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_b][0] + '" />';
                            $('#c_glass_b').val(product_name_price[face_glass_b][0]);
                            $('#c_glass_b_val').val($('[name="face_length_b"]').find('option:selected').text());
                        }
                        if (f.face_length_c.value != "select") {
                            face_glass_c = model_name + " GLASS " + f.face_length_c.value + "/" + f.post_height.value;
                            face_glass_c_price = product_name_price[face_glass_c][1];
                            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_c][0] + '" />';
                            $('#c_glass_c').val(product_name_price[face_glass_c][0]);
                            $('#c_glass_c_val').val($('[name="face_length_c"]').find('option:selected').text());
                        }
                        var no_of_selvs_a = f.shelvs_a.value;
                        $('#c_glass_post_left').val(product_name_price[left_post][0]);
                        $('#c_glass_post_right').val(product_name_price[right_post][0]);
                        $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                        /*qani code*/
                        center_post = model_name + " CP " + f.post_height.value + " " + f.choose_finish.value;
                        center_price = product_name_price[center_post][1] * 2;
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        face_price = parseFloat(face_glass_a_price) + parseFloat(face_glass_b_price) + parseFloat(face_glass_c_price)
                        total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                    }
                }
                if (f.choose_finish.value == 'SL') {
                    if (f.face_length_a.value == 'NG' || f.face_length_b.value == 'NG' || f.face_length_c.value == 'NG') {
                        img_ajx = "NOGLBOTHENDS";

                        var img = '<img src="images/Mid-Shelves3BAY/NOGLBOTHENDS.jpg" style="width:100%">';

                        img += '<div class="left_post">24"</div>';
                        left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                        left_price = product_name_price[left_post][1];
                        right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                        right_price = product_name_price[right_post][1];
                        center_post = model_name + " CP " + f.post_height.value + " " + f.choose_finish.value;
                        center_price = product_name_price[center_post][1] * 2;
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                        $('#c_glass_post_left').val(product_name_price[left_post][0]);
                        $('#c_glass_post_right').val(product_name_price[right_post][0]);
                        $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                        total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                    } else {
                        img_ajx = "NORADBOTHENDS";

                        var img = '<img src="images/Mid-Shelves3BAY/NORADBOTHENDS.jpg" style="width:100%">';


                        img += '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
                        left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                        left_price = product_name_price[left_post][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                        right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                        right_price = product_name_price[right_post][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                        a = f.face_length_a.value;
                        b = f.face_length_b.value;
                        c = f.face_length_c.value;
                        img += '<div class="left_post">24"</div>';
                        h = f.post_height.value;
                        if (f.face_length_a.value != "select") {
                            face_glass_a = model_name + " GLASS " + f.face_length_a.value + "/" + f.post_height.value;
                            face_glass_a_price = product_name_price[face_glass_a][1];
                            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_a][0] + '" />';
                            $('#c_glass_a').val(product_name_price[face_glass_a][0]);
                            $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
                        }
                        if (f.face_length_b.value != "select") {
                            face_glass_b = model_name + " GLASS " + f.face_length_b.value + "/" + f.post_height.value;
                            face_glass_b_price = product_name_price[face_glass_b][1];
                            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_b][0] + '" />';
                            $('#c_glass_b').val(product_name_price[face_glass_b][0]);
                            $('#c_glass_b_val').val($('[name="face_length_b"]').find('option:selected').text());
                        }
                        if (f.face_length_c.value != "select") {
                            face_glass_c = model_name + " GLASS " + f.face_length_c.value + "/" + f.post_height.value;
                            face_glass_c_price = product_name_price[face_glass_c][1];
                            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_c][0] + '" />';
                            $('#c_glass_c').val(product_name_price[face_glass_c][0]);
                            $('#c_glass_c_val').val($('[name="face_length_c"]').find('option:selected').text());
                        }



                        var no_of_selvs_a = f.shelvs_a.value;
                        $('#c_glass_post_left').val(product_name_price[left_post][0]);
                        $('#c_glass_post_right').val(product_name_price[right_post][0]);
                        $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                        /*qani code*/
                        center_post = model_name + " CP " + f.post_height.value + " " + f.choose_finish.value;
                        center_price = product_name_price[center_post][1] * 2;
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        face_price = parseFloat(face_glass_a_price) + parseFloat(face_glass_b_price) + parseFloat(face_glass_c_price)
                        total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                    }
                }
                if (f.choose_finish.value == 'PC') {
                    if (f.face_length_a.value == 'NG' || f.face_length_b.value == 'NG' || f.face_length_c.value == 'NG') {
                        img_ajx = "NOGLBLACKBOTHENDS";

                        var img = '<img src="images/Mid-Shelves3BAY/NOGLBLACKBOTHENDS.jpg" style="width:100%">';


                        img += '<div class="left_post">24"</div>';
                        left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                        left_price = product_name_price[left_post][1];
                        right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                        right_price = product_name_price[right_post][1];
                        center_post = model_name + " CP " + f.post_height.value + " " + f.choose_finish.value;
                        center_price = product_name_price[center_post][1] * 2;
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                        $('#c_glass_post_left').val(product_name_price[left_post][0]);
                        $('#c_glass_post_right').val(product_name_price[right_post][0]);
                        $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                        total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                    } else {
                        img_ajx = "BLACKNORADBOTHENDS";

                        var img = '<img src="images/Mid-Shelves3BAY/BLACKNORADBOTHENDS.jpg" style="width:100%">';


                        img += '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
                        left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                        left_price = product_name_price[left_post][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                        right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                        right_price = product_name_price[right_post][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                        a = f.face_length_a.value;
                        b = f.face_length_b.value;
                        c = f.face_length_c.value;
                        img += '<div class="left_post">24"</div>';
                        h = f.post_height.value;
                        if (f.face_length_a.value != "select") {
                            face_glass_a = model_name + " GLASS " + f.face_length_a.value + "/" + f.post_height.value;
                            face_glass_a_price = product_name_price[face_glass_a][1];
                            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_a][0] + '" />';
                            $('#c_glass_a').val(product_name_price[face_glass_a][0]);
                            $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
                        }
                        if (f.face_length_b.value != "select") {
                            face_glass_b = model_name + " GLASS " + f.face_length_b.value + "/" + f.post_height.value;
                            face_glass_b_price = product_name_price[face_glass_b][1];
                            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_b][0] + '" />';
                            $('#c_glass_b').val(product_name_price[face_glass_b][0]);
                            $('#c_glass_b_val').val($('[name="face_length_b"]').find('option:selected').text());
                        }
                        if (f.face_length_c.value != "select") {
                            face_glass_c = model_name + " GLASS " + f.face_length_c.value + "/" + f.post_height.value;
                            face_glass_c_price = product_name_price[face_glass_c][1];
                            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_c][0] + '" />';
                            $('#c_glass_c').val(product_name_price[face_glass_c][0]);
                            $('#c_glass_c_val').val($('[name="face_length_c"]').find('option:selected').text());
                        }
                        var no_of_selvs_a = f.shelvs_a.value;
                        $('#c_glass_post_left').val(product_name_price[left_post][0]);
                        $('#c_glass_post_right').val(product_name_price[right_post][0]);
                        $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                        /*qani code*/
                        center_post = model_name + " CP " + f.post_height.value + " " + f.choose_finish.value;
                        center_price = product_name_price[center_post][1] * 2;
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        face_price = parseFloat(face_glass_a_price) + parseFloat(face_glass_b_price) + parseFloat(face_glass_c_price)
                        total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                    }
                }
            }
        } else if (type.value == "4BAY") {
            if (f.rounded_corners.value == "round") {
                if (f.choose_finish.value == 'AL') {
                    img_ajx = "ALMNBOTHENDS";

                    var img = '<img src="images/Mid-Shelves4BAY/ALMNBOTHENDS.jpg" style="width:100%">';

                    img += '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="glass_d">12"</div><div class="total">38"</div>';
                    left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                    left_price = product_name_price[left_post][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                    right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                    right_price = product_name_price[right_post][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                    a = f.face_length_a.value;
                    b = f.face_length_b.value;
                    c = f.face_length_c.value;
                    d = f.face_length_d.value;
                    img += '<div class="left_post">24"</div>';
                    h = f.post_height.value;
                    if (f.face_length_a.value != "select") {
                        face_glass_a = model_name + " RNDGL " + f.face_length_a.value + "/" + f.post_height.value;
                        face_glass_a_price = product_name_price[face_glass_a][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_a][0] + '" />';
                        $('#c_glass_a').val(product_name_price[face_glass_a][0]);
                        $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
                    }
                    if (f.face_length_b.value != "select") {
                        face_glass_b = model_name + " RNDGL " + f.face_length_b.value + "/" + f.post_height.value;
                        face_glass_b_price = product_name_price[face_glass_b][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_b][0] + '" />';
                        $('#c_glass_b').val(product_name_price[face_glass_b][0]);
                        $('#c_glass_b_val').val($('[name="face_length_b"]').find('option:selected').text());
                    }
                    if (f.face_length_c.value != "select") {
                        face_glass_c = model_name + " RNDGL " + f.face_length_c.value + "/" + f.post_height.value;
                        face_glass_c_price = product_name_price[face_glass_c][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_c][0] + '" />';
                        $('#c_glass_c').val(product_name_price[face_glass_c][0]);
                        $('#c_glass_c_val').val($('[name="face_length_c"]').find('option:selected').text());
                    }
                    if (f.face_length_d.value != "select") {
                        face_glass_d = model_name + " RNDGL " + f.face_length_d.value + "/" + f.post_height.value;
                        face_glass_d_price = product_name_price[face_glass_d][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_d][0] + '" />';
                        $('#c_glass_d').val(product_name_price[face_glass_d][0]);
                        $('#c_glass_d_val').val($('[name="face_length_d"]').find('option:selected').text());
                    }
                    var no_of_selvs_a = f.shelvs_a.value;
                    $('#c_glass_post_left').val(product_name_price[left_post][0]);
                    $('#c_glass_post_right').val(product_name_price[right_post][0]);
                    $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                    /*qani code*/
                    center_post = model_name + " CP " + f.post_height.value + " " + f.choose_finish.value;
                    center_price = product_name_price[center_post][1] * 3;
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                    face_price = parseFloat(face_glass_a_price) + parseFloat(face_glass_b_price) + parseFloat(face_glass_c_price) + parseFloat(face_glass_d_price)
                    total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + (no_of_selvs_a * parseFloat(face_glass_d_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                }
                if (f.choose_finish.value == 'SL') {
                    img_ajx = "BOTHENDS";

                    var img = '<img src="images/Mid-Shelves4BAY/BOTHENDS.jpg" style="width:100%">';


                    img += '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="glass_d">12"</div><div class="total">38"</div>';
                    left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                    left_price = product_name_price[left_post][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                    right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                    right_price = product_name_price[right_post][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                    a = f.face_length_a.value;
                    b = f.face_length_b.value;
                    c = f.face_length_c.value;
                    d = f.face_length_d.value;
                    img += '<div class="left_post">24"</div>';
                    h = f.post_height.value;
                    if (f.face_length_a.value != "select") {
                        face_glass_a = model_name + " RNDGL " + f.face_length_a.value + "/" + f.post_height.value;
                        face_glass_a_price = product_name_price[face_glass_a][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_a][0] + '" />';
                        $('#c_glass_a').val(product_name_price[face_glass_a][0]);
                        $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
                    }
                    if (f.face_length_b.value != "select") {
                        face_glass_b = model_name + " RNDGL " + f.face_length_b.value + "/" + f.post_height.value;
                        face_glass_b_price = product_name_price[face_glass_b][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_b][0] + '" />';
                        $('#c_glass_b').val(product_name_price[face_glass_b][0]);
                        $('#c_glass_b_val').val($('[name="face_length_b"]').find('option:selected').text());
                    }
                    if (f.face_length_c.value != "select") {
                        face_glass_c = model_name + " RNDGL " + f.face_length_c.value + "/" + f.post_height.value;
                        face_glass_c_price = product_name_price[face_glass_c][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_c][0] + '" />';
                        $('#c_glass_c').val(product_name_price[face_glass_c][0]);
                        $('#c_glass_c_val').val($('[name="face_length_c"]').find('option:selected').text());
                    }
                    if (f.face_length_d.value != "select") {
                        face_glass_d = model_name + " RNDGL " + f.face_length_d.value + "/" + f.post_height.value;
                        face_glass_d_price = product_name_price[face_glass_d][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_d][0] + '" />';
                        $('#c_glass_d').val(product_name_price[face_glass_d][0]);
                        $('#c_glass_d_val').val($('[name="face_length_d"]').find('option:selected').text());
                    }
                    var no_of_selvs_a = f.shelvs_a.value;
                    $('#c_glass_post_left').val(product_name_price[left_post][0]);
                    $('#c_glass_post_right').val(product_name_price[right_post][0]);
                    $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                    /*qani code*/
                    center_post = model_name + " CP " + f.post_height.value + " " + f.choose_finish.value;
                    center_price = product_name_price[center_post][1] * 3;
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                    face_price = parseFloat(face_glass_a_price) + parseFloat(face_glass_b_price) + parseFloat(face_glass_c_price) + parseFloat(face_glass_d_price)
                    total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + (no_of_selvs_a * parseFloat(face_glass_d_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                }
                if (f.choose_finish.value == 'PC') {
                    img_ajx = "BLACKBOTHENDS";

                    var img = '<img src="images/Mid-Shelves4BAY/BLACKBOTHENDS.jpg" style="width:100%">';


                    img += '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="glass_d">12"</div><div class="total">38"</div>';
                    left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                    left_price = product_name_price[left_post][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                    right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                    right_price = product_name_price[right_post][1];
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                    a = f.face_length_a.value;
                    b = f.face_length_b.value;
                    c = f.face_length_c.value;
                    d = f.face_length_d.value;
                    img += '<div class="left_post">24"</div>';
                    h = f.post_height.value;
                    if (f.face_length_a.value != "select") {
                        face_glass_a = model_name + " RNDGL " + f.face_length_a.value + "/" + f.post_height.value;
                        face_glass_a_price = product_name_price[face_glass_a][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_a][0] + '" />';
                        $('#c_glass_a').val(product_name_price[face_glass_a][0]);
                        $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
                    }
                    if (f.face_length_b.value != "select") {
                        face_glass_b = model_name + " RNDGL " + f.face_length_b.value + "/" + f.post_height.value;
                        face_glass_b_price = product_name_price[face_glass_b][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_b][0] + '" />';
                        $('#c_glass_b').val(product_name_price[face_glass_b][0]);
                        $('#c_glass_b_val').val($('[name="face_length_b"]').find('option:selected').text());
                    }
                    if (f.face_length_c.value != "select") {
                        face_glass_c = model_name + " RNDGL " + f.face_length_c.value + "/" + f.post_height.value;
                        face_glass_c_price = product_name_price[face_glass_c][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_c][0] + '" />';
                        $('#c_glass_c').val(product_name_price[face_glass_c][0]);
                        $('#c_glass_c_val').val($('[name="face_length_c"]').find('option:selected').text());
                    }
                    if (f.face_length_d.value != "select") {
                        face_glass_d = model_name + " RNDGL " + f.face_length_d.value + "/" + f.post_height.value;
                        face_glass_d_price = product_name_price[face_glass_d][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_d][0] + '" />';
                        $('#c_glass_d').val(product_name_price[face_glass_d][0]);
                        $('#c_glass_d_val').val($('[name="face_length_d"]').find('option:selected').text());
                    }
                    var no_of_selvs_a = f.shelvs_a.value;
                    $('#c_glass_post_left').val(product_name_price[left_post][0]);
                    $('#c_glass_post_right').val(product_name_price[right_post][0]);
                    $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                    /*qani code*/
                    center_post = model_name + " CP " + f.post_height.value + " " + f.choose_finish.value;
                    center_price = product_name_price[center_post][1] * 3;
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                    face_price = parseFloat(face_glass_a_price) + parseFloat(face_glass_b_price) + parseFloat(face_glass_c_price) + parseFloat(face_glass_d_price)
                    total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + (no_of_selvs_a * parseFloat(face_glass_d_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                }
            } else {
                if (f.choose_finish.value == 'AL') {
                    if (f.face_length_a.value == 'NG' || f.face_length_b.value == 'NG' || f.face_length_c.value == 'NG' || f.face_length_d.value == 'NG') {
                        img_ajx = "NOGLALMNBOTHENDS";

                        var img = '<img src="images/Mid-Shelves3BAY/NOGLALMNBOTHENDS.jpg" style="width:100%">';


                        img += '<div class="left_post">24"</div>';
                        left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                        left_price = product_name_price[left_post][1];
                        right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                        right_price = product_name_price[right_post][1];
                        center_post = model_name + " CP " + f.post_height.value + " " + f.choose_finish.value;
                        center_price = product_name_price[center_post][1] * 3;
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                        $('#c_glass_post_left').val(product_name_price[left_post][0]);
                        $('#c_glass_post_right').val(product_name_price[right_post][0]);
                        $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                        total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                    } else {
                        img_ajx = "ALMNNORADBOTHENDS";

                        var img = '<img src="images/Mid-Shelves4BAY/ALMNNORADBOTHENDS.jpg" style="width:100%">';


                        img += '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="glass_d">12"</div><div class="total">38"</div>';
                        left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                        left_price = product_name_price[left_post][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                        right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                        right_price = product_name_price[right_post][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                        a = f.face_length_a.value;
                        b = f.face_length_b.value;
                        c = f.face_length_c.value;
                        d = f.face_length_d.value;
                        img += '<div class="left_post">24"</div>';
                        h = f.post_height.value;
                        if (f.face_length_a.value != "select") {
                            face_glass_a = model_name + " GLASS " + f.face_length_a.value + "/" + f.post_height.value;
                            face_glass_a_price = product_name_price[face_glass_a][1];
                            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_a][0] + '" />';
                            $('#c_glass_a').val(product_name_price[face_glass_a][0]);
                            $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
                        }
                        if (f.face_length_b.value != "select") {
                            face_glass_b = model_name + " GLASS " + f.face_length_b.value + "/" + f.post_height.value;
                            face_glass_b_price = product_name_price[face_glass_b][1];
                            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_b][0] + '" />';
                            $('#c_glass_b').val(product_name_price[face_glass_b][0]);
                            $('#c_glass_b_val').val($('[name="face_length_b"]').find('option:selected').text());
                        }
                        if (f.face_length_c.value != "select") {
                            face_glass_c = model_name + " GLASS " + f.face_length_c.value + "/" + f.post_height.value;
                            face_glass_c_price = product_name_price[face_glass_c][1];
                            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_c][0] + '" />';
                            $('#c_glass_c').val(product_name_price[face_glass_c][0]);
                            $('#c_glass_c_val').val($('[name="face_length_c"]').find('option:selected').text());
                        }
                        if (f.face_length_d.value != "select") {
                            face_glass_d = model_name + " GLASS " + f.face_length_d.value + "/" + f.post_height.value;
                            face_glass_d_price = product_name_price[face_glass_d][1];
                            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_d][0] + '" />';
                            $('#c_glass_d').val(product_name_price[face_glass_d][0]);
                            $('#c_glass_d_val').val($('[name="face_length_d"]').find('option:selected').text());
                        }
                        var no_of_selvs_a = f.shelvs_a.value;
                        $('#c_glass_post_left').val(product_name_price[left_post][0]);
                        $('#c_glass_post_right').val(product_name_price[right_post][0]);
                        $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                        /*qani code*/
                        center_post = model_name + " CP " + f.post_height.value + " " + f.choose_finish.value;
                        center_price = product_name_price[center_post][1] * 3;
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        face_price = parseFloat(face_glass_a_price) + parseFloat(face_glass_b_price) + parseFloat(face_glass_c_price) + parseFloat(face_glass_d_price)
                        total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + (no_of_selvs_a * parseFloat(face_glass_d_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                    }
                }
                if (f.choose_finish.value == 'SL') {
                    if (f.face_length_a.value == 'NG' || f.face_length_b.value == 'NG' || f.face_length_c.value == 'NG' || f.face_length_d.value == 'NG') {
                        img_ajx = "NOGLBOTHENDS";

                        var img = '<img src="images/Mid-Shelves3BAY/NOGLBOTHENDS.jpg" style="width:100%">';


                        img += '<div class="left_post">24"</div>';
                        left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                        left_price = product_name_price[left_post][1];
                        right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                        right_price = product_name_price[right_post][1];
                        center_post = model_name + " CP " + f.post_height.value + " " + f.choose_finish.value;
                        center_price = product_name_price[center_post][1] * 3;
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                        $('#c_glass_post_left').val(product_name_price[left_post][0]);
                        $('#c_glass_post_right').val(product_name_price[right_post][0]);
                        $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                        total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                    } else {
                        img_ajx = "NORADBOTHENDS";

                        var img = '<img src="images/Mid-Shelves4BAY/NORADBOTHENDS.jpg" style="width:100%">';


                        img += '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="glass_d">12"</div><div class="total">38"</div>';
                        left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                        left_price = product_name_price[left_post][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                        right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                        right_price = product_name_price[right_post][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                        a = f.face_length_a.value;
                        b = f.face_length_b.value;
                        c = f.face_length_c.value;
                        d = f.face_length_d.value;
                        img += '<div class="left_post">24"</div>';
                        h = f.post_height.value;
                        if (f.face_length_a.value != "select") {
                            face_glass_a = model_name + " GLASS " + f.face_length_a.value + "/" + f.post_height.value;
                            face_glass_a_price = product_name_price[face_glass_a][1];
                            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_a][0] + '" />';
                            $('#c_glass_a').val(product_name_price[face_glass_a][0]);
                            $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
                        }
                        if (f.face_length_b.value != "select") {
                            face_glass_b = model_name + " GLASS " + f.face_length_b.value + "/" + f.post_height.value;
                            face_glass_b_price = product_name_price[face_glass_b][1];
                            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_b][0] + '" />';
                            $('#c_glass_b').val(product_name_price[face_glass_b][0]);
                            $('#c_glass_b_val').val($('[name="face_length_b"]').find('option:selected').text());
                        }
                        if (f.face_length_c.value != "select") {
                            face_glass_c = model_name + " GLASS " + f.face_length_c.value + "/" + f.post_height.value;
                            face_glass_c_price = product_name_price[face_glass_c][1];
                            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_c][0] + '" />';
                            $('#c_glass_c').val(product_name_price[face_glass_c][0]);
                            $('#c_glass_c_val').val($('[name="face_length_c"]').find('option:selected').text());
                        }
                        if (f.face_length_d.value != "select") {
                            face_glass_d = model_name + " GLASS " + f.face_length_d.value + "/" + f.post_height.value;
                            face_glass_d_price = product_name_price[face_glass_d][1];
                            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_d][0] + '" />';
                            $('#c_glass_d').val(product_name_price[face_glass_d][0]);
                            $('#c_glass_d_val').val($('[name="face_length_d"]').find('option:selected').text());
                        }
                        var no_of_selvs_a = f.shelvs_a.value;
                        $('#c_glass_post_left').val(product_name_price[left_post][0]);
                        $('#c_glass_post_right').val(product_name_price[right_post][0]);
                        $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                        /*qani code*/
                        center_post = model_name + " CP " + f.post_height.value + " " + f.choose_finish.value;
                        center_price = product_name_price[center_post][1] * 3;
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        face_price = parseFloat(face_glass_a_price) + parseFloat(face_glass_b_price) + parseFloat(face_glass_c_price) + parseFloat(face_glass_d_price)
                        total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + (no_of_selvs_a * parseFloat(face_glass_d_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                    }
                }
                if (f.choose_finish.value == 'PC') {
                    if (f.face_length_a.value == 'NG' || f.face_length_b.value == 'NG' || f.face_length_c.value == 'NG' || f.face_length_d.value == 'NG') {
                        img_ajx = "NOGLBLACKBOTHENDS";

                        var img = '<img src="images/Mid-Shelves3BAY/NOGLBLACKBOTHENDS.jpg" style="width:100%">';


                        img += '<div class="left_post">24"</div>';
                        left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                        left_price = product_name_price[left_post][1];
                        right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                        right_price = product_name_price[right_post][1];
                        center_post = model_name + " CP " + f.post_height.value + " " + f.choose_finish.value;
                        center_price = product_name_price[center_post][1] * 3;
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                        $('#c_glass_post_left').val(product_name_price[left_post][0]);
                        $('#c_glass_post_right').val(product_name_price[right_post][0]);
                        $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                        total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                    } else {
                        img_ajx = "BLACKNORADBOTHENDS";

                        var img = '<img src="images/Mid-Shelves4BAY/BLACKNORADBOTHENDS.jpg" style="width:100%;width:568px;height:434px">';


                        img += '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="glass_d">12"</div><div class="total">38"</div>';
                        left_post = model_name + " LP " + f.post_height.value + " " + f.choose_finish.value;
                        left_price = product_name_price[left_post][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[left_post][0] + '" />';
                        right_post = model_name + " RP " + f.post_height.value + " " + f.choose_finish.value;
                        right_price = product_name_price[right_post][1];
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[right_post][0] + '" />';
                        a = f.face_length_a.value;
                        b = f.face_length_b.value;
                        c = f.face_length_c.value;
                        d = f.face_length_d.value;
                        img += '<div class="left_post">24"</div>';
                        h = f.post_height.value;
                        if (f.face_length_a.value != "select") {
                            face_glass_a = model_name + " GLASS " + f.face_length_a.value + "/" + f.post_height.value;
                            face_glass_a_price = product_name_price[face_glass_a][1];
                            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_a][0] + '" />';
                            $('#c_glass_a').val(product_name_price[face_glass_a][0]);
                            $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
                        }
                        if (f.face_length_b.value != "select") {
                            face_glass_b = model_name + " GLASS " + f.face_length_b.value + "/" + f.post_height.value;
                            face_glass_b_price = product_name_price[face_glass_b][1];
                            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_b][0] + '" />';
                            $('#c_glass_b').val(product_name_price[face_glass_b][0]);
                            $('#c_glass_b_val').val($('[name="face_length_b"]').find('option:selected').text());
                        }
                        if (f.face_length_c.value != "select") {
                            face_glass_c = model_name + " GLASS " + f.face_length_c.value + "/" + f.post_height.value;
                            face_glass_c_price = product_name_price[face_glass_c][1];
                            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_c][0] + '" />';
                            $('#c_glass_c').val(product_name_price[face_glass_c][0]);
                            $('#c_glass_c_val').val($('[name="face_length_c"]').find('option:selected').text());
                        }
                        if (f.face_length_d.value != "select") {
                            face_glass_d = model_name + " GLASS " + f.face_length_d.value + "/" + f.post_height.value;
                            face_glass_d_price = product_name_price[face_glass_d][1];
                            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[face_glass_d][0] + '" />';
                            $('#c_glass_d').val(product_name_price[face_glass_d][0]);
                            $('#c_glass_d_val').val($('[name="face_length_d"]').find('option:selected').text());
                        }
                        var no_of_selvs_a = f.shelvs_a.value;
                        $('#c_glass_post_left').val(product_name_price[left_post][0]);
                        $('#c_glass_post_right').val(product_name_price[right_post][0]);
                        $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
                        /*qani code*/
                        center_post = model_name + " CP " + f.post_height.value + " " + f.choose_finish.value;
                        center_price = product_name_price[center_post][1] * 3;
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[center_post][0] + '" />';
                        face_price = parseFloat(face_glass_a_price) + parseFloat(face_glass_b_price) + parseFloat(face_glass_c_price) + parseFloat(face_glass_d_price)
                        total = (no_of_selvs_a * parseFloat(face_glass_a_price)) + (no_of_selvs_a * parseFloat(face_glass_b_price)) + (no_of_selvs_a * parseFloat(face_glass_c_price)) + (no_of_selvs_a * parseFloat(face_glass_d_price)) + parseFloat(left_price) + parseFloat(right_price) + parseFloat(center_price) + parseFloat(flange_price_n);
                    }
                }
            }
        }


        if (depthsss > 0) {
            A = "A";
            B = "B";
            C = "C";
            D = "D";
        }
    } else {
        h = "Depth";
        A = "A";
        B = "B";
        C = "C";
        D = "D";
    }
    leftShelvPrice = (leftShelvPrice)
    rightShelvPrice = (rightShelvPrice)
    centerShelvPrice = (centerShelvPrice)
    $("#left-post").html(parseFloat(left_price) + ".00");
    $("#right-post").html(parseFloat(right_price) + ".00");
    $("#center-post").html(parseFloat(center_price) + ".00");
    $("#trasition-post").html(parseFloat(center_price) + ".00");
    $("#flange-cover").html(flange_price_n + ".00");
    $("#face-glass").html(face_price + ".00");
    $("#total").html("$&nbsp;" + total + ".00");
    document.getElementById("left-post-sel").innerHTML = leftShelvPrice + ".00";
    document.getElementById("right-post-sel").innerHTML = rightShelvPrice + ".00";
    document.getElementById("trasition-post-sel").innerHTML = centerShelvPrice + ".00";
    $('#glass-bracket').html(((parseInt(no_of_selvs_a) + parseInt(no_of_selvs_b) + parseInt(no_of_selvs_c)) * 4 * parseFloat(bracket_price)) + ".00");
    $("#products_ids").html(str);
    // #additional_image").css("height","434px");
    $("#additional_image").html(img);

    $(".left_post").html(h + '"');

    //$(".glass_a").html(A+'"');

    $(".glass_a").html('' + A + '"');

    $(".glass_b").html(B + '"');

    $(".glass_c").html(C + '"');
    if (f.type.value == "4BAY") {
        $(".glass_d").html(D + '"');
    } else {
        $(".glass_d").html("");
    }




    if ($('select[name="post_height"]').length) {
        if (f.post_height.value != "select") {
            $(".left_post").html($('[name="post_height"]').find('option:selected').text());
        } else {
            $(".left_post").html("Depth");
        }

    }

    if ($('select[name="face_length_a"]').length) {
        if (f.face_length_a.value != "select") {
            $(".glass_a").html($('[name="face_length_a"]').find('option:selected').text());
        }

    }

    if ($('select[name="face_length_b"]').length) {
        if (f.face_length_b.value != "select") {
            $(".glass_b").html($('[name="face_length_b"]').find('option:selected').text());
        }
    }

    if ($('select[name="face_length_c"]').length) {
        if (f.face_length_c.value != "select") {
            $(".glass_c").html($('[name="face_length_c"]').find('option:selected').text());
        }
    }

    if ($('select[name="face_length_d"]').length) {
        if (f.face_length_d.value != "select") {
            $(".glass_d").html($('[name="face_length_d"]').find('option:selected').text());
        }
    }




    var n1 = getBeforeChar($('[name="face_length_a"]').find('option:selected').text()) - 0;

    var n2 = getBeforeChar($('[name="face_length_b"]').find('option:selected').text()) - 0;

    var n3 = getBeforeChar($('[name="face_length_c"]').find('option:selected').text()) - 0;

    var f_n1 = getAfterChar($('[name="face_length_a"]').find('option:selected').text());

    var f_n2 = getAfterChar($('[name="face_length_b"]').find('option:selected').text());

    var f_n3 = getAfterChar($('[name="face_length_c"]').find('option:selected').text());

    //this function not working properly		

    var total = getTotal3Bay(n1, n2, n3, f_n1, f_n2, f_n3);













    $(".total").html(total);
    if (f.post_height.value == "select") {
        $("#depth_err").attr("src", "img/iconCheckOff.gif");
        three = false;
    } else {
        $("#depth_err").attr("src", "img/iconCheckOn.gif");
        three = true;
    }
    if (f.type.value == "1BAY") {
        if (f.face_length_a != null && f.face_length_a.value == "select") {
            $("#glass_a_err").attr("src", "img/iconCheckOff.gif");
            four = false;
        } else {
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            four = true;
        }

    } else if (f.type.value == "2BAY") {
        var foura = fourb = fourc = fourd = false;
        if (f.face_length_a != null && f.face_length_a.value == "select") {
            $("#glass_a_err").attr("src", "img/iconCheckOff.gif");
            four = false;
        } else {
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            foura = true;
        }
        if (f.face_length_b != null && f.face_length_b.value == "select") {
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
    } else if (f.type.value == "3BAY") {
        var foura = fourb = fourc = fourd = false;
        if (f.face_length_a != null && f.face_length_a.value == "select") {
            $("#glass_a_err").attr("src", "img/iconCheckOff.gif");
            four = false;
        } else {
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            foura = true;
        }
        if (f.face_length_b != null && f.face_length_b.value == "select") {
            $("#glass_b_err").attr("src", "img/iconCheckOff.gif");
            four = false;
        } else {
            $("#glass_b_err").attr("src", "img/iconCheckOn.gif");
            fourb = true;
        }
        if (f.face_length_c != null && f.face_length_c.value == "select") {
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
    } else if (f.type.value == "4BAY") {
        var foura = fourb = fourc = fourd = false;
        if (f.face_length_a != null && f.face_length_a.value == "select") {
            $("#glass_a_err").attr("src", "img/iconCheckOff.gif");
            four = false;
        } else {
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            foura = true;
        }
        if (f.face_length_b != null && f.face_length_b.value == "select") {
            $("#glass_b_err").attr("src", "img/iconCheckOff.gif");
            four = false;
        } else {
            $("#glass_b_err").attr("src", "img/iconCheckOn.gif");
            fourb = true;
        }
        if (f.face_length_c != null && f.face_length_c.value == "select") {
            $("#glass_c_err").attr("src", "img/iconCheckOff.gif");
            four = false;
        } else {
            $("#glass_c_err").attr("src", "img/iconCheckOn.gif");
            fourc = true;
        }
        if (f.face_length_d != null && f.face_length_d.value == "select") {
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
    if (f.rounded_corners.value == "select") {
        $("#round_err").attr("src", "img/iconCheckOff.gif");
        seven = false;

    } else {
        $("#round_err").attr("src", "img/iconCheckOn.gif");
        seven = true;
    }
    if (f.type.value == "1BAY") {
        if (f.face_length_a.value == "NG") {
            four = true;
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            $("#round_err").attr("src", "img/iconCheckOn.gif");
            seven = true;
        }
    }
    if (f.type.value == "2BAY") {
        if (f.face_length_a.value == "NG" || f.face_length_b.value == "NG") {
            four = true;
            // f.face_length_a.value="NG";
            // f.face_length_b.value="NG";
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_b_err").attr("src", "img/iconCheckOn.gif");
            $("#round_err").attr("src", "img/iconCheckOn.gif");
            seven = true;
        }
    }
    if (f.type.value == "3BAY") {
        if (f.face_length_a.value == "NG" || f.face_length_b.value == "NG" || f.face_length_c.value == "NG") {
            four = true;
            // f.face_length_a.value="NG";
            // f.face_length_b.value="NG";
            // f.face_length_c.value="NG";
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_b_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_c_err").attr("src", "img/iconCheckOn.gif");
            $("#round_err").attr("src", "img/iconCheckOn.gif");
            seven = true;
        }
    }
    if (f.type.value == "4BAY") {
        if (f.face_length_a.value == "NG" || f.face_length_b.value == "NG" || f.face_length_c.value == "NG" || f.face_length_d.value == "NG") {
            four = true;
            // f.face_length_a.value="NG";
            // f.face_length_b.value="NG";
            // f.face_length_c.value="NG";
            // f.face_length_d.value="NG";
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_b_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_c_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_d_err").attr("src", "img/iconCheckOn.gif");
            $("#round_err").attr("src", "img/iconCheckOn.gif");
            seven = true;
        }
    }

    if (three && four && seven) {
        // $("#add").removeAttr("disabled");
        // $("#add").css("opacity","1");
    } else {
        // $("#add").css("opacity","0.3");
        // $("#add").attr("disabled","disabled");
    }


}

function myFunction(form) {
    var check = ck = true;
    var x = '<center><img src="img/addToCartWindow.jpg" width="100%"></center>';
    x += '<ul style="margin-left:30px;">';
    if (form.post_height.value == "select") {
        x += '<li>Depth<span style="color:red">?</span></li>';
        check = false;
    }
    if (form.type.value == "1BAY") {
        if (form.face_length_a.value == "NG") {
            ck = false;
        }
        if (form.face_length_a.value == "select") {
            x += '<li>Face Length A <span style="color:red">?</span></li>';
            check = false;
        }
    } else if (form.type.value == "2BAY") {
        if (form.face_length_a.value == "NG" || form.face_length_b.value == "NG") {
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
        if (form.face_length_a.value == "NG" || form.face_length_b.value == "NG" || form.face_length_c.value == "NG") {
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
        if (form.face_length_a.value == "NG" || form.face_length_b.value == "NG" || form.face_length_c.value == "NG" || form.face_length_d.value == "NG") {
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
    if (form.rounded_corners.value == "select" && ck) {
        x += '<li>Glass Corners <span style="color:red">?</span></li>';
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
        //document.forms['cart_quantity'].submit();
        return true;
    }
}


function myFunction2(form) {
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
                //tb_show("","pop1.php?KeepThis=true&TB_iframe=true&height=500&width=600","");
                form.submit();
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

$(document).ready(function() {



    var my_facelengt_select = "";

    $msg = ms;


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

                        my_facelengt_select += '<select name="' + custom.attr("name") + '" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form),toggle()" >';

                        //	my_facelengt_simple_select+='<select name="face_length" onchange="getPriceOfProduct(this.form)" >';

                        var myArray = new Array();

                        var i = 1;

                        $('[name="' + custom.attr("name") + '"] > option').each(function() {



                            if ($(this).val() != 'custom') {
                                if ($(this).val() == '0' || $(this).val() == 'select') {
                                    $(this).val() == '12'

                                } else {
                                    myArray[i] = $(this).val();
                                    i++;
                                }


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



                        for (i = 1; i < myArray.length - 1; i++) {

                            for (j = myArray[i]; j < myArray[i + 1]; j++) {

                                if (j > myArray[i]) {

                                    my_facelengt_select += '<option value="' + myArray[i + 1] + '">' + j + '"</option>';

                                } else

                                {

                                    my_facelengt_select += '<option value="' + myArray[i] + '">' + j + '"</option>';

                                }
                                if (j != 42) {
                                    my_facelengt_select += '<option value="' + myArray[i + 1] + '">' + j + '-1/4' + '"</option>';

                                    my_facelengt_select += '<option value="' + myArray[i + 1] + '">' + j + '-1/2' + '"</option>';

                                    my_facelengt_select += '<option value="' + myArray[i + 1] + '">' + j + '-3/4' + '"</option>';
                                }

                            }

                        }

                        if (myArray[i] == "NG") {
                            my_facelengt_select += '<option value="' + myArray[i] + '">No Glass</option>';
                        } else {
                            my_facelengt_select += '<option value="' + myArray[i] + '">' + myArray[i] + '"</option>';
                        }



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

        return n1 + n2 + n3 + 2;

    }

    var t = getTotal(n1, n2, f_n1, f_n2);



    var new1 = getBeforeChar(t);

    new1 -= 2;

    var far = getAfterChar(t);

    var t = getTotal(new1, n3, far, f_n3);

    return t;



}