$(document).ready(function() {
    category_name = $('#product_type').val();
    getPriceOfProduct(document.forms.cart_quantity);
});
var check = (check1 = false);
var doChange = true;

function popup(form) {
    if (form.rounded_corners.value == "yes") {
        var elem = $(this).closest(".item");
        $.confirm({
            title: "Confirmation",
            message: ms_option1,
            buttons: {
                Proceed: {
                    class: "blue",
                    action: function() {},
                },
                Cancel: {
                    class: "gray",
                    action: function() {},
                },
            },
        });
    }
}

function tishu3(pop) {
    if ($('[name="face_length_a"]').find("option:selected").text() != "Select") {
        $(document).ready(function() {
            var elem = $(this).closest(".item");

            $.confirm({
                title: "Confirmation",
                message: ms,
                buttons: {
                    Proceed: {
                        class: "blue",
                        action: function() {},
                    },
                    Cancel: {
                        class: "gray",
                        action: function() {},
                    },
                },
            });
        });
    }
}

function tishu() {
    if (doChange) {
        $(".delete").click();
    }
}

function tishu2() {
    if (doChange) {}
}

function getProductFolderName(productname) {
    foldername = "";
    switch (productname) {
        case "Mid-Shelves":
            {
                foldername = "Mid-Shelves";
                break;
            }
        case "ES53 SWIVEL":
            {
                foldername = "ES53-Swivel";
                break;
            }
        case "ES53":
            {
                foldername = "ES53";
                break;
            }
        case "ES82":
            {
                foldername = "ES82";
                break;
            }
    }
    return foldername;
}

function changeGlassImage(form, image) {
    category_name = category_name;
    foldername = getProductFolderName(category_name) + form.type.value;

    imageName = "";
    if (form.rounded_corners.value == 0) {
        imageName = "GLASSNORAD.jpg";
    } else {
        imageName = "GLASS.jpg";
    }
    if (image != "") {
        imageName = image;
    }
    cross =
        '<input type="button" onclick="getPriceOfProduct(this.form);" style="margin: 0 4px;position: absolute;right: -627px;top: -30px;width: 20px;z-index: 1000000;" value="X" class="rounded-corner-image">';
    image_string =
        '<img src="images/' +
        category_name +
        "/" +
        imageName +
        '" style="width:568px;height:434px">';
    document.getElementById("additional_image").innerHTML = image_string;
    document.getElementById("rott").innerHTML = cross;
}

function finishImage(form, image) {
    category_name = category_name;
    foldername = getProductFolderName(category_name);
    if (image != "") {
        imageName = image;
    }

    cross =
        '<input type="button" onclick="getPriceOfProduct(this.form);" style="margin: 0 4px;position: absolute;right: -627px;top: -30px;width: 20px;z-index: 1000000;" value="X" class="rounded-corner-image">';
    image_string =
        '<img src="images/' + imageName + '" style="width:568px;height:453px">';

    document.getElementById("additional_image").innerHTML = image_string;
    document.getElementById("rott").innerHTML = cross;
}

function getPriceOfProduct(f) {
    category_name = category_name;

    var model_name = "HL";

    leftEndPostShelvs = "";

    rightEndPostShelvs = "";

    centerPostShelvs = "";

    leftShelvPrice = 0;

    rightShelvPrice = 0;

    centerShelvPrice = 0;
    if (f.face_length_a.value != "0") {
        $("select#choose_finish2").removeAttr("disabled");
        $("select#checkbox2").removeAttr("disabled");
    }

    if (f.rounded_corners.checked) {
        $("input#checkbox3").removeAttr("disabled");
    } else {
        $("input#checkbox3").attr("disabled", "disabled");
    }

    if (!$('select[name="right_length"]').length) {
        $("#c_glass_right_val").val("");

        $("#c_glass_right").val("");
    }

    if (!$('select[name="left_length"]').length) {
        $("#c_glass_left_val").val("");

        $("#c_glass_left").val("");
    }

    if (!$('select[name="post_height"]').length) {
        $("#c_glass_post_val").val("");
        $("#c_glass_post").val("");
    }

    if (!$('select[name="face_length"]').length) {
        $("#c_glass_face_val").val("");

        $("#c_glass_face").val("");
    }

    if (!$('select[name="face_length_a"]').length) {
        $("#c_glass_a_val").val("");

        $("#c_glass_a").val("");
    }

    if (!$('select[name="face_length_b"]').length) {
        $("#c_glass_b_val").val("");

        $("#c_glass_b").val("");
    }

    if (!$('select[name="face_length_c"]').length) {
        $("#c_glass_c_val").val("");

        $("#c_glass_c").val("");
    }
    if (!$('select[name="face_length_d"]').length) {
        $("#c_glass_d_val").val("");

        $("#c_glass_d").val("");
    }

    var rounded_corners;
    var rounded_corners = "IC";

    var rounded_corners3;
    var rounded_corners3 = "BP";
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

    var fraheight = "";

    var finish;

    var total = 0;

    var face_price = 0;

    var flange_price_n = 0.0;

    var no_of_selvs_a = 1;

    var no_of_selvs_b = 1;

    var no_of_selvs_c = 1;

    var str = "";

    var flange = "Flange";

    var a = 0;

    var b = 0;

    var c = 0;

    var h = 0;

    var img =
        '<img src="images/Mid-Shelves1BAY/BOTHEND.jpg" style="width:100%;width:568px;height:434px;">';

    var img2 =
        '<img src="images/Shelving/noglass.jpg" style="width:100%;width:568px;height:434px">';

    img +=
        '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';

    if (f.choose_finish.value == "PC") {
        if (f.rounded_corners.value == "yes") {
            img_ajx = "infinitypc";
            var img =
                '<img src="images/' +
                model_name +
                '/infinitypc.jpg" style="width:100%;width:568px;height:434px;">';

            img +=
                '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';

            a = f.face_length_a.value;

            light = model_name + "-" + a + "-" + "IC";
            lightprice = product_name_price[light][1];
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[light][0] +
                '" />';
            $("#c_glass_a_light").val(product_name_price[light][0]);
            $("#c_glass_a_val_light").val(
                $('[name="face_length_a"]').find("option:selected").text()
            );
            if (f.face_length_a.value != "select") {
                face_glass_a = model_name + "-" + f.face_length_a.value + "-PC";
                face_glass_a_price = product_name_price[face_glass_a][1];
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[face_glass_a][0] +
                    '" />';
                $("#c_glass_a").val(product_name_price[face_glass_a][0]);
                $("#c_glass_a_val").val(
                    $('[name="face_length_a"]').find("option:selected").text()
                );
            }
        } else {
            img_ajx = "BOTHENDS";

            var img =
                '<img src="images/' +
                model_name +
                '/BOTHENDS.jpg" style="width:100%;width:568px;height:434px;">';
            img +=
                '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
            a = f.face_length_a.value;
            if (f.face_length_a.value != "select") {
                face_glass_a = model_name + "-" + f.face_length_a.value + "-PC";
                face_glass_a_price = product_name_price[face_glass_a][1];
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[face_glass_a][0] +
                    '" />';
                $("#c_glass_a").val(product_name_price[face_glass_a][0]);
                $("#c_glass_a_val").val(
                    $('[name="face_length_a"]').find("option:selected").text()
                );
            }
        }
    }
    if (f.choose_finish.value == "SL") {
        if (f.rounded_corners.value == "yes") {
            img_ajx = "infinitysl";

            var img =
                '<img src="images/' +
                model_name +
                '/infinitysl.jpg" style="width:100%;width:568px;height:434px;">';
            img +=
                '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
            a = f.face_length_a.value;
            light = model_name + "-" + a + "-" + "IC";
            lightprice = product_name_price[light][1];
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[light][0] +
                '" />';
            $("#c_glass_a_light").val(product_name_price[light][0]);
            $("#c_glass_a_val_light").val(
                $('[name="face_length_a"]').find("option:selected").text()
            );
            if (f.face_length_a.value != "select") {
                face_glass_a = model_name + "-" + f.face_length_a.value + "-SL";
                face_glass_a_price = product_name_price[face_glass_a][1];
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[face_glass_a][0] +
                    '" />';
                $("#c_glass_a").val(product_name_price[face_glass_a][0]);
                $("#c_glass_a_val").val(
                    $('[name="face_length_a"]').find("option:selected").text()
                );
            }
        } else {
            img_ajx = "start2";
            var img =
                '<img src="images/' +
                model_name +
                '/start2.jpg" style="width:100%;width:568px;height:434px;">';
            img +=
                '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
            a = f.face_length_a.value;
            if (f.face_length_a.value != "select") {
                face_glass_a = model_name + "-" + f.face_length_a.value + "-SL";
                face_glass_a_price = product_name_price[face_glass_a][1];
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[face_glass_a][0] +
                    '" />';
                $("#c_glass_a").val(product_name_price[face_glass_a][0]);
                $("#c_glass_a_val").val(
                    $('[name="face_length_a"]').find("option:selected").text()
                );
            }
        }
    }
    if (f.choose_finish.value == "AL") {
        if (f.rounded_corners.value == "yes") {
            img_ajx = "infinityal";
            var img =
                '<img src="images/' +
                model_name +
                '/infinityal.jpg" style="width:100%;width:568px;height:434px;">';
            img +=
                '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
            a = f.face_length_a.value;
            light = model_name + "-" + a + "-" + "IC";
            lightprice = product_name_price[light][1];
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[light][0] +
                '" />';
            $("#c_glass_a_light").val(product_name_price[light][0]);
            $("#c_glass_a_val_light").val(
                $('[name="face_length_a"]').find("option:selected").text()
            );
            if (f.face_length_a.value != "select") {
                face_glass_a = model_name + "-" + f.face_length_a.value + "-AL";
                face_glass_a_price = product_name_price[face_glass_a][1];
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[face_glass_a][0] +
                    '" />';
                $("#c_glass_a").val(product_name_price[face_glass_a][0]);
                $("#c_glass_a_val").val(
                    $('[name="face_length_a"]').find("option:selected").text()
                );
            }
        } else {
            img_ajx = "start3";
            var img =
                '<img src="images/' +
                model_name +
                '/start3.jpg" style="width:100%;width:568px;height:434px;">';
            img +=
                '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="total">38"</div>';
            a = f.face_length_a.value;
            if (f.face_length_a.value != "select") {
                face_glass_a = model_name + "-" + f.face_length_a.value + "-AL";
                face_glass_a_price = product_name_price[face_glass_a][1];
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[face_glass_a][0] +
                    '" />';
                $("#c_glass_a").val(product_name_price[face_glass_a][0]);
                $("#c_glass_a_val").val(
                    $('[name="face_length_a"]').find("option:selected").text()
                );
            }
        }
    }

    batteryprice = parseFloat(batteryprice);
    lightprice = parseFloat(lightprice);
    face_price =
        parseFloat(face_glass_a_price) +
        parseFloat(face_glass_b_price) +
        parseFloat(face_glass_c_price);
    total =
        no_of_selvs_a * parseFloat(face_glass_a_price) +
        no_of_selvs_a * parseFloat(face_glass_b_price) +
        no_of_selvs_a * parseFloat(face_glass_c_price) +
        parseFloat(left_price) +
        parseFloat(right_price) +
        parseFloat(center_price) +
        parseFloat(lightprice) +
        parseFloat(batteryprice);

    leftShelvPrice = leftShelvPrice;

    rightShelvPrice = rightShelvPrice;

    centerShelvPrice = centerShelvPrice;

    $("#left-post").html(parseFloat(left_price) + ".00");

    $("#right-post").html(parseFloat(right_price) + ".00");
    $("#center-post").html(parseFloat(center_price) + ".00");

    $("#trasition-post").html(parseFloat(batteryprice) + ".00");

    $("#flange-cover").html(lightprice + ".00");

    $("#face-glass").html(face_price + ".00");

    $("#total").html("$&nbsp;" + total + ".00");

    document.getElementById("left-post-sel").innerHTML = leftShelvPrice + ".00";

    document.getElementById("right-post-sel").innerHTML = rightShelvPrice + ".00";

    document.getElementById("trasition-post-sel").innerHTML =
        centerShelvPrice + ".00";

    $("#glass-bracket").html(
        (parseInt(no_of_selvs_a) +
            parseInt(no_of_selvs_b) +
            parseInt(no_of_selvs_c)) *
        4 *
        parseFloat(bracket_price) +
        ".00"
    );

    $("#products_ids").html(str);

    $("#additional_image").html(img);

    $(".left_post").html(h + '"');

    $(".glass_b").html(b + '"');

    $(".glass_c").html(c + '"');

    if ($("#is_custom").val() == "Yes") {
        h = $('[name="face_length_a"]').find("option:selected").text().split("-");

        if (h.length == 2) {
            fraheight = h[1];
            tis = h[1];

            h2 = h[1];
            h1 = h[0];

            if (fraheight != "undefined") {
                fraheight = fraheight.split('"');

                fraheight = "-" + fraheight[0];
            }

            alert(h1 - 2 + "-" + h2 + "");
            $("div.glass_a").html(h1 - 2 + "-" + h2 + "");
            $("div.glass_b").html(h1 - 8 + "-" + h2 + "");
        } else {
            h = parseInt(h);

            if (
                h == "26" ||
                h == "27" ||
                h == "28" ||
                h == "29" ||
                h == "30" ||
                h == "31"
            ) {
                h = "18";
                tis2 = "350";

                if (f.rounded_corners.checked) {
                    tishu2();
                }
                tishu();
            }
            if (
                h == "32" ||
                h == "33" ||
                h == "34" ||
                h == "35" ||
                h == "36" ||
                h == "37"
            ) {
                h = "24";
                tis2 = "500";
                if (f.rounded_corners.checked) {
                    tishu2();
                }
                tishu();
            }
            if (
                h == "38" ||
                h == "39" ||
                h == "40" ||
                h == "41" ||
                h == "42" ||
                h == "43"
            ) {
                h = "30";
                tis2 = "660";
                if (f.rounded_corners.checked) {
                    tishu2();
                }
                tishu();
            }
            if (
                h == "44" ||
                h == "45" ||
                h == "46" ||
                h == "47" ||
                h == "48" ||
                h == "49"
            ) {
                h = "36";
                tis2 = "800";
                if (f.rounded_corners.checked) {
                    tishu2();
                }
                tishu();
            }
            if (
                h == "50" ||
                h == "51" ||
                h == "52" ||
                h == "53" ||
                h == "54" ||
                h == "55"
            ) {
                h = "42";
                tis2 = "950";
                if (f.rounded_corners.checked) {
                    tishu2();
                }
                tishu();
            }
            if (
                h == "56" ||
                h == "57" ||
                h == "58" ||
                h == "59" ||
                h == "60" ||
                h == "61"
            ) {
                h = "48";
                tis2 = "1100";
                if (f.rounded_corners.checked) {
                    tishu2();
                }
                tishu();
            }
            if (
                h == "62" ||
                h == "63" ||
                h == "64" ||
                h == "65" ||
                h == "66" ||
                h == "67"
            ) {
                h = "54";
                tis2 = "1250";
                if (f.rounded_corners.checked) {
                    tishu2();
                }
                tishu();
            }
            if (
                h == "68" ||
                h == "69" ||
                h == "70" ||
                h == "71" ||
                h == "72" ||
                h == "73"
            ) {
                h = "60";
                tis2 = "1400";
                if (f.rounded_corners.checked) {
                    tishu2();
                }
                tishu();
            }
            if (
                h == "74" ||
                h == "75" ||
                h == "76" ||
                h == "77" ||
                h == "78" ||
                h == "79"
            ) {
                h = "66";
                tis2 = "1560";
                if (f.rounded_corners.checked) {
                    tishu2();
                }
                tishu();
            }
            if (
                h == "80" ||
                h == "81" ||
                h == "82" ||
                h == "83" ||
                h == "84" ||
                h == "85"
            ) {
                h = "72";
                tis2 = "1725";
                if (f.rounded_corners.checked) {
                    tishu2();
                }
                tishu();
            }
            var sel = false;
            if (isNaN(h)) {
                $("div.glass_a").html("Centerline");
                $("#line_err").attr("src", "img/iconCheckOff.gif");

                check = false;
            } else {
                $("#line_err").attr("src", "img/iconCheckOn.gif");

                $("div.glass_a").html(h + '"');
                tot1 = h;
                check = true;
            }

            $("div.glass_b").html("110v, " + tis2 + " Watts");
            $("div.glass_c").html("6ft. wire lead");
        }
    } else {
        sel = true;
        $(".glass_a").html("Centerline");
        $(".glass_b").html("Intensity");

        $("div.glass_c").html("6ft. wire lead");
    }

    if ($('select[name="post_height"]').length) {
        $(".left_post").html(
            $('[name="post_height"]').find("option:selected").text()
        );
    }

    if ($('select[name="face_length_a"]').length) {
        if (
            $('[name="face_length_a"]').find("option:selected").text() == "Select"
        ) {
            $("div.glass").html("Length");
        } else {
            $(".glass").html(
                $('[name="face_length_a"]').find("option:selected").text()
            );
        }
    }

    if ($('select[name="face_length_b"]').length) {
        $(".glass_b").html(
            $('[name="face_length_b"]').find("option:selected").text()
        );
    }

    if ($('select[name="face_length_c"]').length) {
        $(".glass_c").html(
            $('[name="face_length_c"]').find("option:selected").text()
        );
    }

    if ($('select[name="face_length_d"]').length) {
        $(".glass_d").html(
            $('[name="face_length_d"]').find("option:selected").text()
        );
    }

    var n1 =
        getBeforeChar($('[name="face_length_a"]').find("option:selected").text()) -
        0;

    var n2 =
        getBeforeChar($('[name="face_length_b"]').find("option:selected").text()) -
        0;

    var n3 =
        getBeforeChar($('[name="face_length_c"]').find("option:selected").text()) -
        0;

    var f_n1 = getAfterChar(
        $('[name="face_length_a"]').find("option:selected").text()
    );

    var f_n2 = getAfterChar(
        $('[name="face_length_b"]').find("option:selected").text()
    );

    var f_n3 = getAfterChar(
        $('[name="face_length_c"]').find("option:selected").text()
    );

    if (category_name == "EP950") {
        var total = getTotal4Bay(n1, n2, n3, f_n1, f_n2, f_n3);
    } else {
        var total = getTotal3Bay(n1, n2, n3, f_n1, f_n2, f_n3);
    }

    if ($('[name="face_length_a"]').find("option:selected").text() == "Select") {
        $(".total").html("Total");
        check = false;
        $("#face-glass").html("0.00");
        $("#flange-cover").html("0.00");
        $("#total").html("$&nbsp;" + "0.00");
        f.rounded_corners.value = "select";
        f.rounded_corners.selected = "Select";
        $("#control_err").attr("src", "img/iconCheckOff.gif");
    } else {
        $(".total").html(total);
        check = true;
    }

    if (sel) {
        $(".glass").html("Length");
        $(".total").html("Total");
    }

    if ($("#checkbox2").val() == "select") {
        $("#control_err").attr("src", "img/iconCheckOff.gif");
        check1 = false;
    } else {
        $("#control_err").attr("src", "img/iconCheckOn.gif");
        check1 = true;
    }
    if (check && check1) {} else {}
}

function myFunction(form) {
    var check = true;
    var x = '<center><img src="img/addToCartWindow.jpg" width="100%"></center>';
    x += '<ul style="margin-left:30px;">';
    if (form.face_length_a.value == "select") {
        x += '<li>Centerline <span style="color:red">?</span></li>';
        check = false;
    }
    if (form.rounded_corners.value == "select") {
        x += '<li>Infinite Control <span style="color:red">?</span></li>';
        check = false;
    }
    x += "</ul>";
    if (!check) {
        var elem = $(this).closest(".item");

        $.confirm({
            title: "More Information Is Needed.....",
            message: x,
            buttons: {
                OK: {
                    class: "blue",
                    action: function() {},
                },
            },
        });
        return false;
    } else {
        return true;
    }
}

function myFunction2(form) {
    if (myFunction(document.forms["cart_quantity"])) {
        var form = document.forms["cart_quantity"];
        var texttt1 = (texttt2 = "");
        texttt1 = document.querySelector(".glass_b").firstChild.data;
        texttt2 = document.querySelector(".glass_c").firstChild.data;
        if (category_name == "ALLIN1") {
            var1 = form.optn.options[form.optn.selectedIndex].text;
            end = "";
        } else {
            var1 = form.face_length_a.options[form.face_length_a.selectedIndex].text;
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
                img: img_ajx,
                texttt1: texttt1,
                texttt2: texttt2,
            },
            cache: false,
            contentType: "application/x-www-form-urlencoded",
            success: function(data, textStatus, request) {
                document.forms["cart_quantity"].submit();
            },
            error: function(request, textStatus, errorThrown) {
                alert("some error");
            },
        });
        return false;
    } else {
        return false;
    }
}

$(document).ready(function() {
    changePost($("#post_height"));

    function changeDrop(custom) {
        $("#is_custom").val("Yes");

        my_facelengt_select = "";

        my_facelengt_select +=
            '<select name="' +
            custom.attr("name") +
            '"  id="' +
            custom.attr("name") +
            '" onchange="tishu3(true),getPriceOfProduct(this.form),toggle()" >';

        var myArray = new Array();
        var i = 1;
        $('[name="' + custom.attr("name") + '"] > option').each(function() {
            if ($(this).val() != "custom") {
                myArray[i] = $(this).val();
                i++;
            }
        });

        var j = 0;

        my_facelengt_select += '<option value="select">Select</option>';
        for (i = 26; i < myArray[1]; i++) {
            my_facelengt_select +=
                '<option value="' + myArray[1] + '">' + i + '"</option>';

            j = i;
        }

        for (i = 1; i < myArray.length - 1; i++) {
            for (j = myArray[i]; j < myArray[i + 1]; j++) {
                if (j > myArray[i]) {
                    my_facelengt_select +=
                        '<option value="' + myArray[i + 1] + '">' + j + '"</option>';
                } else {
                    my_facelengt_select +=
                        '<option value="' + myArray[i] + '">' + j + '"</option>';
                }
            }
        }

        my_facelengt_select +=
            '<option value="' + myArray[i] + '">' + myArray[i] + '"</option>';

        $("#" + custom.attr("name") + "_span").html(my_facelengt_select);
    }

    function changePost(custom) {
        $("#is_custom").val("Yes");

        my_facelengt_select = "";
        my_facelengt_select +=
            '<select name="' +
            custom.attr("name") +
            '" id="' +
            custom.attr("name") +
            '" disabled="disabled" onchange="getPriceOfProduct(this.form),toggle()" >';

        var myArray = new Array();
        var i = 1;
        $('[name="' + custom.attr("name") + '"] > option').each(function() {
            if ($(this).val() != "custom") {
                myArray[i] = $(this).val();
                i++;
            }
        });

        var j = 0;

        myArray = new Array("", "12", "18", "22", "");

        for (i = 1; i < myArray.length - 2; i++) {
            for (j = myArray[i]; j < myArray[i + 1]; j++) {
                if (j > myArray[i]) {
                    my_facelengt_select +=
                        '<option value="' + myArray[i + 1] + '">' + j + '"</option>';
                } else {
                    my_facelengt_select +=
                        '<option value="' + myArray[i] + '">' + j + '"</option>';
                }
                my_facelengt_select +=
                    '<option value="' + myArray[i + 1] + '">' + j + "-1/4" + '"</option>';
                my_facelengt_select +=
                    '<option value="' + myArray[i + 1] + '">' + j + "-1/2" + '"</option>';
                my_facelengt_select +=
                    '<option value="' + myArray[i + 1] + '">' + j + "-3/4" + '"</option>';
            }
        }

        var j = 0;
        for (i = 22; i < 30; i++) {
            my_facelengt_select += '<option value="' + 22 + '">' + i + '"</option>';
            my_facelengt_select +=
                '<option value="' + 22 + '">' + i + "-1/4" + '"</option>';
            my_facelengt_select +=
                '<option value="' + 22 + '">' + i + "-1/2" + '"</option>';
            my_facelengt_select +=
                '<option value="' + 22 + '">' + i + "-3/4" + '"</option>';
            j = i;
        }
        my_facelengt_select += '<option value="' + 22 + '">' + 30 + '"</option>';

        $("#" + custom.attr("name") + "_span").html(my_facelengt_select);
    }
});

function getBeforeChar(str) {
    var f_str = str.substr(0, str.indexOf("-"));

    if (f_str == "") {
        return str.substr(0, str.indexOf('"'));
    } else {
        return f_str;
    }
}

function getAfterChar(str) {
    var f_str = str.substring(str.lastIndexOf("-") + 1, str.lastIndexOf('"'));

    if (isInt(f_str)) {
        return "";
    } else {
        return f_str;
    }
}

function isInt(value) {
    return !isNaN(value) && parseInt(value) == value;
}

function getTotal(n1, n2, f_n1, f_n2) {
    var t = n1 + n2 + 2;

    if (f_n1 == "1/4" && f_n2 == "1/4") {
        t += '-1/2"';
    }

    if (f_n1 == "1/4" && f_n2 == "1/2") {
        t += '-3/4"';
    }

    if (f_n1 == "1/4" && f_n2 == "3/4") {
        t += 1;

        t += '"';
    }

    if (f_n1 == "1/2" && f_n2 == "1/4") {
        t += '-3/4"';
    }

    if (f_n1 == "1/2" && f_n2 == "1/2") {
        t += 1;

        t += '"';
    }

    if (f_n1 == "1/2" && f_n2 == "3/4") {
        t += 1;

        t += '-1/4"';
    }

    if (f_n1 == "3/4" && f_n2 == "1/4") {
        t += 1;

        t += '"';
    }

    if (f_n1 == "3/4" && f_n2 == "1/2") {
        t += 1;

        t += '-1/4"';
    }

    if (f_n1 == "3/4" && f_n2 == "3/4") {
        t += 1;

        t += '-1/2"';
    }

    if (f_n1 == "" && f_n2 != "") {
        t += "-" + f_n2 + '"';
    }

    if (f_n2 == "" && f_n1 != "") {
        t += "-" + f_n1 + '"';
    }

    return t;
}

function getTotal3Bay(n1, n2, n3, f_n1, f_n2, f_n3) {
    if (f_n1 == "" && f_n2 == "" && f_n3 == "") {
        return n1 + n2 + n3 + 2 + '-1/2"';
    }

    var t = getTotal(n1, n2, f_n1, f_n2);

    var new1 = getBeforeChar(t);

    new1 -= -2;

    var far = getAfterChar(t);

    var t = getTotal(new1, n3, far, f_n3);

    return t;
}

function getTotal4Bay(n1, n2, n3, f_n1, f_n2, f_n3) {
    if (f_n1 == "" && f_n2 == "" && f_n3 == "") {
        return n1 + n2 + n3 + '"';
    }

    var t = getTotal(n1, n2, f_n1, f_n2);

    var new1 = getBeforeChar(t);

    new1 -= -2;

    var far = getAfterChar(t);

    var t = getTotal(new1, n3, far, f_n3);

    return t;
}