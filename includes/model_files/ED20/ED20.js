function getPriceOfProduct(form) {
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
    $("#counter").val($('select[name="right_length"]').val());

    foldername = "";
    imageName = "";
    glassName_a = "";
    glassName_b = "";
    glassName_c = "";
    glassName_d = "";
    glassName_ = "";
    topGlass_a = "";
    topGlass_b = "";
    topGlass_c = "";
    topGlass_d = "";
    leftEndPost = "";
    leftEndPostShelvs = "";
    rightEndPost = "";
    rightEndPostShelvs = "";
    centerPost = "";
    centerPostShelvs = "";

    leftEndPanel = "";
    rightEndPanel = "";
    endPanelBullet = "";
    lightBar = "";
    flangeCovers = "";

    light_a = "";
    light_b = "";
    light_c = "";
    light_d = "";

    totalPrice = 0;
    glassPrice = 0;
    facePrice_a = 0;
    facePrice_b = 0;
    facePrice_c = 0;
    facePrice_d = 0;
    topGlassPrice_a = 0;
    topGlassPrice_b = 0;
    topGlassPrice_c = 0;
    topGlassPrice_d = 0;
    topGlassPrice = 0;
    leftPostPrice = 0;
    rightPostPrice = 0;

    leftEndPanelPrice = 0;
    rightEndPanelPrice = 0;
    endPanelBulletPrice = 0;

    centerPostPrice = 0;
    flangeCoversPrice = 0;
    lightBarPrice = 0;

    leftShelvPrice = 0;
    rightShelvPrice = 0;
    centerShelvPrice = 0;
    var iscustomimg = 0;
    no_of_selvs_a = form.shelvs_a.value;

    str = "";
    flag = 1;

    right_lenght_obj = form.right_length;
    //left_lenght_obj=form.left_length;   //USE FOR COUNTER WIDTH
    left_lenght_obj = form.right_length;
    face_lenght_obj = form.face_length;
    face_lenght_a_obj = form.face_length_a;
    face_lenght_b_obj = form.face_length_b;
    face_lenght_c_obj = form.face_length_c;
    face_lenght_d_obj = form.face_length_d;
    post_height_obj = form.post_height;
    type_obj = form.type;
    glass_face_obj = form.glass_face;
    top_glass_obj = form.top_glass;
    flange_covers_obj = form.flang_cover;
    light_bar_obj = form.light_bar;

    flangeUnderCounter = "";
    flangeUnderCounterPrice = 0;
    flange_under_counter_obj = form.flange_under_counter;

    choose_finish_obj = form.choose_finish;
    foldername = "ED20" + type_obj.value;
    if (right_lenght_obj.value != "select") {
        leftEndPost = "ED20LP" + right_lenght_obj.value + choose_finish_obj.value;
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[leftEndPost][0] +
            '" />';
        leftPostPrice = parseFloat(product_name_price[leftEndPost][1]);

        rightEndPost = "ED20RP" + right_lenght_obj.value + choose_finish_obj.value;
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[rightEndPost][0] +
            '" />';
        rightPostPrice = parseFloat(product_name_price[rightEndPost][1]);
    }

    if (type_obj.value != "1BAY") {
        if (right_lenght_obj.value != "select") {
            centerPost = "ED20CP" + right_lenght_obj.value + choose_finish_obj.value;
        }
        centerPostShelvs = "ED20SCP" + choose_finish_obj.value;
    }

    //endpanels
    if (glass_face_obj.value == 1) {
        if (right_lenght_obj.value != "select") {
            leftEndPanel = "ED20-" + right_lenght_obj.value + "LEP";
            rightEndPanel = "ED20-" + right_lenght_obj.value + "REP";
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[leftEndPanel][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[rightEndPanel][0] +
                '" />';
            leftEndPanelPrice = parseFloat(product_name_price[leftEndPanel][1]);
            rightEndPanelPrice = parseFloat(product_name_price[rightEndPanel][1]);
        }
        endPanelBullet = "ED20EPB" + choose_finish_obj.value;
        endPanelBulletPrice =
            endPanelBulletPrice +
            4 * parseFloat(product_name_price[endPanelBullet][1]);
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[endPanelBullet][0] +
            '" />';
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[endPanelBullet][0] +
            '" />';
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[endPanelBullet][0] +
            '" />';
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[endPanelBullet][0] +
            '" />';

        endPanelBullet = "ED20EPB" + choose_finish_obj.value;
        endPanelBulletPrice =
            endPanelBulletPrice +
            4 * parseFloat(product_name_price[endPanelBullet][1]);
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[endPanelBullet][0] +
            '" />';
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[endPanelBullet][0] +
            '" />';
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[endPanelBullet][0] +
            '" />';
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[endPanelBullet][0] +
            '" />';

        imageName = "BOTHENDS";
    } else if (glass_face_obj.value == 2) {
        leftEndPanel = "";
        if (right_lenght_obj.value != "select") {
            rightEndPanel = "ED20-" + right_lenght_obj.value + "REP";
            rightEndPanelPrice = parseFloat(product_name_price[rightEndPanel][1]);
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[rightEndPanel][0] +
                '" />';
            // str+='<input type="hidden" name="products_id[]" value="'+product_name_price[rightEndPanel][0]+'" />';
        }
        //alert("warsi");

        endPanelBullet = "ED20EPB" + choose_finish_obj.value;
        endPanelBulletPrice =
            endPanelBulletPrice +
            4 * parseFloat(product_name_price[endPanelBullet][1]);
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[endPanelBullet][0] +
            '" />';
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[endPanelBullet][0] +
            '" />';
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[endPanelBullet][0] +
            '" />';
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[endPanelBullet][0] +
            '" />';

        leftEndPanelPrice = 0;

        imageName = "RIGHTEND";
    } else if (glass_face_obj.value == 3) {
        if (right_lenght_obj.value != "select") {
            leftEndPanel = "ED20-" + right_lenght_obj.value + "LEP";
            leftEndPanelPrice = parseFloat(product_name_price[leftEndPanel][1]);
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[leftEndPanel][0] +
                '" />';
        }

        rightEndPanel = "";
        endPanelBullet = "ED20EPB" + choose_finish_obj.value;
        endPanelBulletPrice =
            endPanelBulletPrice +
            4 * parseFloat(product_name_price[endPanelBullet][1]);
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[endPanelBullet][0] +
            '" />';
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[endPanelBullet][0] +
            '" />';
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[endPanelBullet][0] +
            '" />';
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[endPanelBullet][0] +
            '" />';

        imageName = "LEFTEND";

        rightEndPanelPrice = 0;
    } else {
        leftEndPanel = "";
        rightEndPanel = "";
        imageName = "NOENDS";
        leftEndPanelPrice = 0;
        rightEndPanelPrice = 0;
    }
    //glasses
    if (type_obj.value == "4BAY") {
        if (face_lenght_a_obj.value != "select") {
            glassName_a = "ED20-" + face_lenght_a_obj.value + "GL";
            if (left_lenght_obj.value != "select") {
                topGlass_a =
                    "ED20-" +
                    face_lenght_a_obj.value +
                    "/" +
                    left_lenght_obj.value +
                    "TG";
            }
        }
        if (face_lenght_b_obj.value != "select") {
            glassName_b = "ED20-" + face_lenght_b_obj.value + "GL";
            if (left_lenght_obj.value != "select") {
                topGlass_b =
                    "ED20-" +
                    face_lenght_b_obj.value +
                    "/" +
                    left_lenght_obj.value +
                    "TG";
            }
        }
        if (face_lenght_c_obj.value != "select") {
            glassName_c = "ED20-" + face_lenght_c_obj.value + "GL";
            if (left_lenght_obj.value != "select") {
                topGlass_c =
                    "ED20-" +
                    face_lenght_c_obj.value +
                    "/" +
                    left_lenght_obj.value +
                    "TG";
            }
        }
        if (face_lenght_d_obj.value != "select") {
            glassName_d = "ED20-" + face_lenght_d_obj.value + "GL";
            if (left_lenght_obj.value != "select") {
                topGlass_d =
                    "ED20-" +
                    face_lenght_d_obj.value +
                    "/" +
                    left_lenght_obj.value +
                    "TG";
            }
        }
        if (
            face_lenght_a_obj.value == "No Glass" ||
            face_lenght_b_obj.value == "No Glass" ||
            face_lenght_c_obj.value == "No Glass" ||
            face_lenght_d_obj.value == "No Glass"
        ) {
            flag = 0;
            light_bar_obj.value = "select";
            if (right_lenght_obj.value != "select") {
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[centerPost][0] +
                    '" />';
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[centerPost][0] +
                    '" />';
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[centerPost][0] +
                    '" />';
                centerPostPrice =
                    parseFloat(product_name_price[centerPost][1]) +
                    parseFloat(product_name_price[centerPost][1]) +
                    parseFloat(product_name_price[centerPost][1]);
            }
        } else {
            if (face_lenght_a_obj.value != "select") {
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[glassName_a][0] +
                    '" />';
                facePrice_a = parseFloat(product_name_price[glassName_a][1]);
                if (left_lenght_obj.value != "select") {
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[topGlass_a][0] +
                        '" />';
                    topGlassPrice_a = parseFloat(product_name_price[topGlass_a][1]);
                }
            }
            if (face_lenght_b_obj.value != "select") {
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[glassName_b][0] +
                    '" />';
                facePrice_b = parseFloat(product_name_price[glassName_b][1]);
                if (left_lenght_obj.value != "select") {
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[topGlass_b][0] +
                        '" />';
                    topGlassPrice_b = parseFloat(product_name_price[topGlass_b][1]);
                }
            }
            if (face_lenght_c_obj.value != "select") {
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[glassName_c][0] +
                    '" />';
                facePrice_c = parseFloat(product_name_price[glassName_c][1]);
                if (left_lenght_obj.value != "select") {
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[topGlass_c][0] +
                        '" />';
                    topGlassPrice_c = parseFloat(product_name_price[topGlass_c][1]);
                }
            }
            if (face_lenght_d_obj.value != "select") {
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[glassName_d][0] +
                    '" />';
                facePrice_d = parseFloat(product_name_price[glassName_d][1]);
                if (left_lenght_obj.value != "select") {
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[topGlass_d][0] +
                        '" />';
                    topGlassPrice_d = parseFloat(product_name_price[topGlass_d][1]);
                }
            }
            if (right_lenght_obj.value != "select") {
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[centerPost][0] +
                    '" />';
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[centerPost][0] +
                    '" />';
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[centerPost][0] +
                    '" />';
                centerPostPrice =
                    parseFloat(product_name_price[centerPost][1]) +
                    parseFloat(product_name_price[centerPost][1]) +
                    parseFloat(product_name_price[centerPost][1]);
            }
        }
    } else if (type_obj.value == "3BAY") {
        if (
            face_lenght_a_obj.value == "No Glass" ||
            face_lenght_b_obj.value == "No Glass" ||
            face_lenght_c_obj.value == "No Glass"
        ) {
            flag = 0;
            light_bar_obj.value = "select";
            if (right_lenght_obj.value != "select") {
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[centerPost][0] +
                    '" />';
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[centerPost][0] +
                    '" />';
                centerPostPrice =
                    parseFloat(product_name_price[centerPost][1]) +
                    parseFloat(product_name_price[centerPost][1]);
            }
        } else {
            if (face_lenght_a_obj.value != "select") {
                glassName_a = "ED20-" + face_lenght_a_obj.value + "GL";
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[glassName_a][0] +
                    '" />';
                facePrice_a = parseFloat(product_name_price[glassName_a][1]);
                if (left_lenght_obj.value != "select") {
                    topGlass_a =
                        "ED20-" +
                        face_lenght_a_obj.value +
                        "/" +
                        left_lenght_obj.value +
                        "TG";
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[topGlass_a][0] +
                        '" />';
                    topGlassPrice_a = parseFloat(product_name_price[topGlass_a][1]);
                }
            }
            if (face_lenght_b_obj.value != "select") {
                glassName_b = "ED20-" + face_lenght_b_obj.value + "GL";
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[glassName_b][0] +
                    '" />';
                facePrice_b = parseFloat(product_name_price[glassName_b][1]);
                if (left_lenght_obj.value != "select") {
                    topGlass_b =
                        "ED20-" +
                        face_lenght_b_obj.value +
                        "/" +
                        left_lenght_obj.value +
                        "TG";
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[topGlass_b][0] +
                        '" />';
                    topGlassPrice_b = parseFloat(product_name_price[topGlass_b][1]);
                }
            }
            if (face_lenght_c_obj.value != "select") {
                glassName_c = "ED20-" + face_lenght_c_obj.value + "GL";
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[glassName_c][0] +
                    '" />';
                facePrice_c = parseFloat(product_name_price[glassName_c][1]);
                if (left_lenght_obj.value != "select") {
                    topGlass_c =
                        "ED20-" +
                        face_lenght_c_obj.value +
                        "/" +
                        left_lenght_obj.value +
                        "TG";
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[topGlass_c][0] +
                        '" />';
                    topGlassPrice_c = parseFloat(product_name_price[topGlass_c][1]);
                }
            }
            if (right_lenght_obj.value != "select") {
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[centerPost][0] +
                    '" />';
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[centerPost][0] +
                    '" />';
                centerPostPrice =
                    parseFloat(product_name_price[centerPost][1]) +
                    parseFloat(product_name_price[centerPost][1]);
            }
        }
    } else if (type_obj.value == "2BAY") {
        glassName_c = "";

        topGlass_c = "";

        if (
            face_lenght_a_obj.value == "No Glass" ||
            face_lenght_b_obj.value == "No Glass"
        ) {
            flag = 0;
            light_bar_obj.value = "select";
            if (right_lenght_obj.value != "select") {
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[centerPost][0] +
                    '" />';
                centerPostPrice = parseFloat(product_name_price[centerPost][1]);
            }
        } else {
            if (face_lenght_a_obj.value != "select") {
                glassName_a = "ED20-" + face_lenght_a_obj.value + "GL";
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[glassName_a][0] +
                    '" />';
                facePrice_a = parseFloat(product_name_price[glassName_a][1]);
                if (left_lenght_obj.value != "select") {
                    topGlass_a =
                        "ED20-" +
                        face_lenght_a_obj.value +
                        "/" +
                        left_lenght_obj.value +
                        "TG";
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[topGlass_a][0] +
                        '" />';
                    topGlassPrice_a = parseFloat(product_name_price[topGlass_a][1]);
                }
            }
            if (face_lenght_b_obj.value != "select") {
                glassName_b = "ED20-" + face_lenght_b_obj.value + "GL";
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[glassName_b][0] +
                    '" />';
                facePrice_b = parseFloat(product_name_price[glassName_b][1]);
                if (left_lenght_obj.value != "select") {
                    topGlass_b =
                        "ED20-" +
                        face_lenght_b_obj.value +
                        "/" +
                        left_lenght_obj.value +
                        "TG";
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[topGlass_b][0] +
                        '" />';
                    topGlassPrice_b = parseFloat(product_name_price[topGlass_b][1]);
                }
            }
            facePrice_c = 0;
            topGlassPrice_c = 0;
            if (right_lenght_obj.value != "select") {
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[centerPost][0] +
                    '" />';
                centerPostPrice = parseFloat(product_name_price[centerPost][1]);
            }
        }
    } else if (type_obj.value == "1BAY") {
        glassName_b = "";
        glassName_c = "";

        topGlass_b = "";
        topGlass_c = "";
        if (face_lenght_obj.value == "No Glass") {
            light_bar_obj.value = "select";
            flag = 0;
        } else {
            if (face_lenght_obj.value != "select") {
                glassName_a = "ED20-" + face_lenght_obj.value + "GL";
                facePrice_a = parseFloat(product_name_price[glassName_a][1]);
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[glassName_a][0] +
                    '" />';
                if (left_lenght_obj.value != "select") {
                    topGlass_a =
                        "ED20-" +
                        face_lenght_obj.value +
                        "/" +
                        left_lenght_obj.value +
                        "TG";
                    topGlassPrice_a = parseFloat(product_name_price[topGlass_a][1]);
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[topGlass_a][0] +
                        '" />';
                }
            }
            facePrice_b = 0;
            facePrice_c = 0;
            topGlassPrice_b = 0;
            topGlassPrice_c = 0;
        }
    }
    //alert(facePrice_a );
    //shelvs
    if (no_of_selvs_a != "select" || no_of_selvs_a != 0) {
        for (i = 1; i <= no_of_selvs_a; i++) {
            leftEndPostShelvs = "ED20SLP" + choose_finish_obj.value;
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[leftEndPostShelvs][0] +
                '" />';
            leftShelvPrice =
                leftShelvPrice + parseFloat(product_name_price[leftEndPostShelvs][1]);
            //alert(leftShelvPrice)
            rightEndPostShelvs = "ED20SRP" + choose_finish_obj.value;
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[rightEndPostShelvs][0] +
                '" />';
            rightShelvPrice =
                rightShelvPrice + parseFloat(product_name_price[rightEndPostShelvs][1]);

            centerPostShelvs = "ED20SCP" + choose_finish_obj.value;
            if (type_obj.value == "4BAY") {
                if (
                    face_lenght_a_obj.value == "No Glass" ||
                    face_lenght_b_obj.value == "No Glass" ||
                    face_lenght_c_obj.value == "No Glass" ||
                    face_lenght_d_obj.value == "No Glass"
                ) {
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[centerPostShelvs][0] +
                        '" />';
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[centerPostShelvs][0] +
                        '" />';
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[centerPostShelvs][0] +
                        '" />';
                    centerShelvPrice =
                        centerShelvPrice +
                        parseFloat(product_name_price[centerPostShelvs][1]) +
                        parseFloat(product_name_price[centerPostShelvs][1]) +
                        parseFloat(product_name_price[centerPostShelvs][1]);
                } else {
                    if (topGlass_a != "") {
                        str +=
                            '<input type="hidden" name="products_id[]" value="' +
                            product_name_price[topGlass_a][0] +
                            '" />';
                        facePrice_a =
                            facePrice_a + parseFloat(product_name_price[topGlass_a][1]);
                    }
                    if (topGlass_b != "") {
                        str +=
                            '<input type="hidden" name="products_id[]" value="' +
                            product_name_price[topGlass_b][0] +
                            '" />';
                        facePrice_b =
                            facePrice_b + parseFloat(product_name_price[topGlass_b][1]);
                    }
                    if (topGlass_c != "") {
                        str +=
                            '<input type="hidden" name="products_id[]" value="' +
                            product_name_price[topGlass_c][0] +
                            '" />';
                        facePrice_c =
                            facePrice_c + parseFloat(product_name_price[topGlass_c][1]);
                    }
                    if (topGlass_d != "") {
                        str +=
                            '<input type="hidden" name="products_id[]" value="' +
                            product_name_price[topGlass_d][0] +
                            '" />';
                        facePrice_d =
                            facePrice_c + parseFloat(product_name_price[topGlass_d][1]);
                    }
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[centerPostShelvs][0] +
                        '" />';
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[centerPostShelvs][0] +
                        '" />';
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[centerPostShelvs][0] +
                        '" />';
                    centerShelvPrice =
                        centerShelvPrice +
                        parseFloat(product_name_price[centerPostShelvs][1]) +
                        parseFloat(product_name_price[centerPostShelvs][1]) +
                        parseFloat(product_name_price[centerPostShelvs][1]);
                }
            } else if (type_obj.value == "3BAY") {
                if (
                    face_lenght_a_obj.value == "No Glass" ||
                    face_lenght_b_obj.value == "No Glass" ||
                    face_lenght_c_obj.value == "No Glass"
                ) {
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[centerPostShelvs][0] +
                        '" />';
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[centerPostShelvs][0] +
                        '" />';
                    centerShelvPrice =
                        centerShelvPrice +
                        parseFloat(product_name_price[centerPostShelvs][1]) +
                        parseFloat(product_name_price[centerPostShelvs][1]);
                } else {
                    if (topGlass_a != "") {
                        str +=
                            '<input type="hidden" name="products_id[]" value="' +
                            product_name_price[topGlass_a][0] +
                            '" />';
                        facePrice_a =
                            facePrice_a + parseFloat(product_name_price[topGlass_a][1]);
                    }
                    if (topGlass_b != "") {
                        str +=
                            '<input type="hidden" name="products_id[]" value="' +
                            product_name_price[topGlass_b][0] +
                            '" />';
                        facePrice_b =
                            facePrice_b + parseFloat(product_name_price[topGlass_b][1]);
                    }
                    if (topGlass_c != "") {
                        str +=
                            '<input type="hidden" name="products_id[]" value="' +
                            product_name_price[topGlass_c][0] +
                            '" />';
                        facePrice_c =
                            facePrice_c + parseFloat(product_name_price[topGlass_c][1]);
                    }
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[centerPostShelvs][0] +
                        '" />';
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[centerPostShelvs][0] +
                        '" />';
                    centerShelvPrice =
                        centerShelvPrice +
                        parseFloat(product_name_price[centerPostShelvs][1]) +
                        parseFloat(product_name_price[centerPostShelvs][1]);
                }
            } else if (type_obj.value == "2BAY") {
                if (
                    face_lenght_a_obj.value == "No Glass" ||
                    face_lenght_b_obj.value == "No Glass"
                ) {
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[centerPostShelvs][0] +
                        '" />';
                    centerShelvPrice =
                        centerShelvPrice +
                        parseFloat(product_name_price[centerPostShelvs][1]);
                } else {
                    if (topGlass_a != "select") {
                        str +=
                            '<input type="hidden" name="products_id[]" value="' +
                            product_name_price[topGlass_a][0] +
                            '" />';
                        facePrice_a =
                            facePrice_a + parseFloat(product_name_price[topGlass_a][1]);
                    }
                    if (topGlass_b != "select") {
                        str +=
                            '<input type="hidden" name="products_id[]" value="' +
                            product_name_price[topGlass_b][0] +
                            '" />';
                        facePrice_b =
                            facePrice_b + parseFloat(product_name_price[topGlass_b][1]);
                    }
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[centerPostShelvs][0] +
                        '" />';
                    centerShelvPrice =
                        centerShelvPrice +
                        parseFloat(product_name_price[centerPostShelvs][1]);
                    facePrice_c = 0;
                }
            } else {
                if (face_lenght_obj.value == "No Glass") {} else {
                    if (topGlass_a != "") {
                        str +=
                            '<input type="hidden" name="products_id[]" value="' +
                            product_name_price[topGlass_a][0] +
                            '" />';
                        facePrice_a =
                            facePrice_a + parseFloat(product_name_price[topGlass_a][1]);
                    }
                    facePrice_b = 0;
                    facePrice_c = 0;
                }
            }
        }
    }
    //lights
    if (light_bar_obj.value == "yes") {
        if (type_obj.value == "4BAY") {
            if (
                face_lenght_a_obj.value == "No Glass" ||
                face_lenght_b_obj.value == "No Glass" ||
                face_lenght_c_obj.value == "No Glass" ||
                face_lenght_d_obj.value == "No Glass"
            ) {} else {
                if (face_lenght_a_obj.value != "select") {
                    light_a = "ED20-" + face_lenght_a_obj.value + "LYT";
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[light_a][0] +
                        '" />';
                    lightBarPrice += parseFloat(product_name_price[light_a][1]);
                }
                if (face_lenght_b_obj.value != "select") {
                    light_b = "ED20-" + face_lenght_b_obj.value + "LYT";
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[light_b][0] +
                        '" />';
                    lightBarPrice += parseFloat(product_name_price[light_b][1]);
                }
                if (face_lenght_c_obj.value != "select") {
                    light_c = "ED20-" + face_lenght_c_obj.value + "LYT";
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[light_c][0] +
                        '" />';
                    lightBarPrice += parseFloat(product_name_price[light_c][1]);
                }
                if (face_lenght_d_obj.value != "select") {
                    light_d = "ED20-" + face_lenght_d_obj.value + "LYT";
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[light_d][0] +
                        '" />';
                    lightBarPrice += parseFloat(product_name_price[light_d][1]);
                }
            }
        } else if (type_obj.value == "3BAY") {
            if (
                face_lenght_a_obj.value == "No Glass" ||
                face_lenght_b_obj.value == "No Glass" ||
                face_lenght_c_obj.value == "No Glass"
            ) {} else {
                if (face_lenght_a_obj.value != "select") {
                    light_a = "ED20-" + face_lenght_a_obj.value + "LYT";
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[light_a][0] +
                        '" />';
                    lightBarPrice += parseFloat(product_name_price[light_a][1]);
                }
                if (face_lenght_b_obj.value != "select") {
                    light_b = "ED20-" + face_lenght_b_obj.value + "LYT";
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[light_b][0] +
                        '" />';
                    lightBarPrice += parseFloat(product_name_price[light_b][1]);
                }
                if (face_lenght_c_obj.value != "select") {
                    light_c = "ED20-" + face_lenght_c_obj.value + "LYT";
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[light_c][0] +
                        '" />';
                    lightBarPrice += parseFloat(product_name_price[light_c][1]);
                }
            }
        } else if (type_obj.value == "2BAY") {
            light_c = "";
            if (
                face_lenght_a_obj.value == "No Glass" ||
                face_lenght_b_obj.value == "No Glass"
            ) {} else {
                if (face_lenght_a_obj.value != "select") {
                    light_a = "ED20-" + face_lenght_a_obj.value + "LYT";
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[light_a][0] +
                        '" />';
                    lightBarPrice += parseFloat(product_name_price[light_a][1]);
                }
                if (face_lenght_b_obj.value != "select") {
                    light_b = "ED20-" + face_lenght_b_obj.value + "LYT";
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[light_b][0] +
                        '" />';
                    lightBarPrice += parseFloat(product_name_price[light_b][1]);
                }
            }
        } else {
            light_b = "";
            light_c = "";
            light_d = "";
            if (face_lenght_obj.value == "No Glass") {} else {
                if (face_lenght_obj.value != "select") {
                    light_a = "ED20-" + face_lenght_obj.value + "LYT";
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[light_a][0] +
                        '" />';
                    lightBarPrice = parseFloat(product_name_price[light_a][1]);
                }

                //alert(lightBarPrice);
            }
        }
    }

    //flange cover
    if (flange_covers_obj.value == "yes") {
        flangeCovers = "ED20-FLANGE COVER 1 PIECE";
        if (type_obj.value == "4BAY") {
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeCovers][0] +
                '" />';

            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeCovers][0] +
                '" />';

            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeCovers][0] +
                '" />';

            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeCovers][0] +
                '" />';

            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeCovers][0] +
                '" />';

            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeCovers][0] +
                '" />';

            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeCovers][0] +
                '" />';

            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeCovers][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeCovers][0] +
                '" />';

            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeCovers][0] +
                '" />';

            flangeCoversPrice = parseFloat(product_name_price[flangeCovers][1]) * 10;
        } else if (type_obj.value == "3BAY") {
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeCovers][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeCovers][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeCovers][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeCovers][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeCovers][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeCovers][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeCovers][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeCovers][0] +
                '" />';
            flangeCoversPrice = parseFloat(product_name_price[flangeCovers][1]) * 8;
        } else if (type_obj.value == "2BAY") {
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeCovers][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeCovers][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeCovers][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeCovers][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeCovers][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeCovers][0] +
                '" />';
            flangeCoversPrice = parseFloat(product_name_price[flangeCovers][1]) * 6;
        } else {
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeCovers][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeCovers][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeCovers][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeCovers][0] +
                '" />';
            flangeCoversPrice = parseFloat(product_name_price[flangeCovers][1]) * 4;
        }
    }

    //Under Counter flange cover
    if (flange_under_counter_obj.value == "yes") {
        flangeUnderCounter = "ED20-UNDER COUNTER FLANGE 1 PIECE";
        if (type_obj.value == "4BAY") {
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeUnderCounter][0] +
                '" />';

            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeUnderCounter][0] +
                '" />';

            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeUnderCounter][0] +
                '" />';

            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeUnderCounter][0] +
                '" />';

            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeUnderCounter][0] +
                '" />';

            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeUnderCounter][0] +
                '" />';

            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeUnderCounter][0] +
                '" />';

            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeUnderCounter][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeUnderCounter][0] +
                '" />';

            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeUnderCounter][0] +
                '" />';

            flangeUnderCounterPrice =
                parseFloat(product_name_price[flangeUnderCounter][1]) * 10;
        } else if (type_obj.value == "3BAY") {
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeUnderCounter][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeUnderCounter][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeUnderCounter][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeUnderCounter][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeUnderCounter][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeUnderCounter][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeUnderCounter][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeUnderCounter][0] +
                '" />';
            flangeUnderCounterPrice =
                parseFloat(product_name_price[flangeUnderCounter][1]) * 8;
        } else if (type_obj.value == "2BAY") {
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeUnderCounter][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeUnderCounter][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeUnderCounter][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeUnderCounter][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeUnderCounter][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeUnderCounter][0] +
                '" />';
            flangeUnderCounterPrice =
                parseFloat(product_name_price[flangeUnderCounter][1]) * 6;
        } else {
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeUnderCounter][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeUnderCounter][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeUnderCounter][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[flangeUnderCounter][0] +
                '" />';
            flangeUnderCounterPrice =
                parseFloat(product_name_price[flangeUnderCounter][1]) * 4;
        }
    }

    //images
    if (choose_finish_obj.value == "SS") {
        if (
            (light_bar_obj.value == "no" || light_bar_obj.value == "select") &&
            (no_of_selvs_a == "0" || no_of_selvs_a == "select")
        ) {
            imageName = "SSNOLYT" + imageName;
        } else if (
            (light_bar_obj.value == "no" || light_bar_obj.value == "select") &&
            no_of_selvs_a == "1"
        ) {
            imageName = "NORADRUND" + imageName;
        } else if (
            (light_bar_obj.value == "no" || light_bar_obj.value == "select") &&
            no_of_selvs_a == "2"
        ) {
            imageName = "SSNOLYT2" + imageName;
        } else if (
            light_bar_obj.value == "yes" &&
            (no_of_selvs_a == "0" || no_of_selvs_a == "select")
        ) {
            imageName = "SSLYT" + imageName;
        } else if (light_bar_obj.value == "yes" && no_of_selvs_a == "2") {
            imageName = "SSLYT2" + imageName;
        } else {
            imageName = imageName;
        }
        //          if(light_bar_obj.value=="yes" && no_of_selvs_a!='1' && no_of_selvs_a!='2' && no_of_selvs_a=='0'){
        //              imageName="SSLYT"+imageName;
        //          }  else if(light_bar_obj.value=="no" && no_of_selvs_a!='1' && no_of_selvs_a!='2' && no_of_selvs_a=='0'){
        // 	imageName="SSNOLYT"+imageName;
        // }  else if(light_bar_obj.value=="no" && no_of_selvs_a=='1' && no_of_selvs_a!='2' && no_of_selvs_a!='0'){
        // 	imageName="NORADRUND"+imageName;
        // } else if(light_bar_obj.value=="yes" && no_of_selvs_a!='1' && no_of_selvs_a=='2' && no_of_selvs_a!='0'){
        // 	imageName="SSLYT2"+imageName;
        // }else if(light_bar_obj.value=="no" && no_of_selvs_a!='1' && no_of_selvs_a=='2' && no_of_selvs_a!='0'){
        // 	imageName="SSNOLYT2"+imageName;
        // }else{
        //              imageName=imageName;
        //          }
    } else if (choose_finish_obj.value == "PC") {
        if (
            (light_bar_obj.value == "no" || light_bar_obj.value == "select") &&
            (no_of_selvs_a == "0" || no_of_selvs_a == "select")
        ) {
            imageName = "BLACKNOLYT" + imageName;
        } else if (
            (light_bar_obj.value == "no" || light_bar_obj.value == "select") &&
            no_of_selvs_a == "1"
        ) {
            imageName = "BLACKNORADRUND" + imageName;
        } else if (
            (light_bar_obj.value == "no" || light_bar_obj.value == "select") &&
            no_of_selvs_a == "2"
        ) {
            imageName = "BLACKNOLYT2" + imageName;
        } else if (
            light_bar_obj.value == "yes" &&
            (no_of_selvs_a == "0" || no_of_selvs_a == "select")
        ) {
            imageName = "BLACKLYT" + imageName;
        } else if (light_bar_obj.value == "yes" && no_of_selvs_a == "2") {
            imageName = "BLACKLYT2" + imageName;
        } else {
            imageName = "BLACK" + imageName;
        }

        //          if(light_bar_obj.value=="yes" && no_of_selvs_a!='1' && no_of_selvs_a!='2'){
        //              imageName="BLACKLYT"+imageName;
        //          } else if(light_bar_obj.value=="no" && no_of_selvs_a=='1' && no_of_selvs_a!='2'){
        // 	imageName="BLACKNORADRUND"+imageName;
        // } else if(light_bar_obj.value=="no" && no_of_selvs_a!='1' && no_of_selvs_a!='2'){
        // 	imageName="BLACKNOLYT"+imageName;
        // }  else if(light_bar_obj.value=="no" && no_of_selvs_a!='1' && no_of_selvs_a=='2'){
        // 	imageName="BLACKNOLYT2"+imageName;
        // }else if(light_bar_obj.value=="yes" && no_of_selvs_a!='1' && no_of_selvs_a=='2'){
        // 	imageName="BLACKLYT2"+imageName;
        // } else {
        // imageName="BLACK"+imageName;
        // }
    } else if (choose_finish_obj.value == "AL") {
        if (
            (light_bar_obj.value == "no" || light_bar_obj.value == "select") &&
            (no_of_selvs_a == "0" || no_of_selvs_a == "select")
        ) {
            imageName = "ALMNNOLYT" + imageName;
        } else if (
            (light_bar_obj.value == "no" || light_bar_obj.value == "select") &&
            no_of_selvs_a == "1"
        ) {
            imageName = "ALMNNORADRUND" + imageName;
        } else if (
            (light_bar_obj.value == "no" || light_bar_obj.value == "select") &&
            no_of_selvs_a == "2"
        ) {
            imageName = "ALMNNOLYT2" + imageName;
        } else if (
            light_bar_obj.value == "yes" &&
            (no_of_selvs_a == "0" || no_of_selvs_a == "select")
        ) {
            imageName = "ALMNLYT" + imageName;
        } else if (light_bar_obj.value == "yes" && no_of_selvs_a == "2") {
            imageName = "ALMNLYT2" + imageName;
        } else {
            imageName = "ALMN" + imageName;
        }
        // if(light_bar_obj.value=="no" && no_of_selvs_a=='1' && no_of_selvs_a!='2'){
        //              imageName="ALMNNORADRUND"+imageName;
        //          } else if(light_bar_obj.value=="no" && no_of_selvs_a!='1' && no_of_selvs_a!='2'){
        // 	imageName="ALMNNOLYT"+imageName;
        // } else if(light_bar_obj.value=="yes" && no_of_selvs_a!='1' && no_of_selvs_a!='2'){
        // 	imageName="ALMNLYT"+imageName;
        // } else if(light_bar_obj.value=="no" && no_of_selvs_a!='1' && no_of_selvs_a=='2'){
        // 	imageName="ALMNNOLYT2"+imageName;
        // }else if(light_bar_obj.value=="yes" && no_of_selvs_a!='1' && no_of_selvs_a=='2'){
        // 	imageName="ALMNLYT2"+imageName;
        // }else{
        //   imageName="ALMN"+imageName;
        // }
    }
    //code end here

    if (type_obj.value == "1BAY") {
        if (
            face_lenght_obj.value == "No Glass" &&
            (no_of_selvs_a == "0" || no_of_selvs_a == "select")
        ) {
            imageName = "NOGL" + imageName;
        } else if (face_lenght_obj.value == "No Glass" && no_of_selvs_a == "1") {
            imageName = "NOGL1" + imageName;
        } else if (face_lenght_obj.value == "No Glass" && no_of_selvs_a == "2") {
            imageName = "NOGL2" + imageName;
        }
    }
    if (type_obj.value == "2BAY") {
        if (
            (face_lenght_a_obj.value == "No Glass" ||
                face_lenght_b_obj.value == "No Glass") &&
            (no_of_selvs_a == "0" || no_of_selvs_a == "select")
        ) {
            imageName = "NOGL" + imageName;
        } else if (
            (face_lenght_a_obj.value == "No Glass" ||
                face_lenght_b_obj.value == "No Glass") &&
            no_of_selvs_a == "1"
        ) {
            imageName = "NOGL1" + imageName;
        } else if (
            (face_lenght_a_obj.value == "No Glass" ||
                face_lenght_b_obj.value == "No Glass") &&
            no_of_selvs_a == "2"
        ) {
            imageName = "NOGL2" + imageName;
        }
    }
    if (type_obj.value == "3BAY") {
        if (
            (face_lenght_a_obj.value == "No Glass" ||
                face_lenght_b_obj.value == "No Glass" ||
                face_lenght_c_obj.value == "No Glass") &&
            (no_of_selvs_a == "0" || no_of_selvs_a == "select")
        ) {
            imageName = "NOGL" + imageName;
        } else if (
            (face_lenght_a_obj.value == "No Glass" ||
                face_lenght_b_obj.value == "No Glass" ||
                face_lenght_c_obj.value == "No Glass") &&
            no_of_selvs_a == "1"
        ) {
            imageName = "NOGL1" + imageName;
        } else if (
            (face_lenght_a_obj.value == "No Glass" ||
                face_lenght_b_obj.value == "No Glass" ||
                face_lenght_c_obj.value == "No Glass") &&
            no_of_selvs_a == "2"
        ) {
            imageName = "NOGL2" + imageName;
        }
    }
    if (type_obj.value == "4BAY") {
        if (
            (face_lenght_a_obj.value == "No Glass" ||
                face_lenght_b_obj.value == "No Glass" ||
                face_lenght_c_obj.value == "No Glass" ||
                face_lenght_d_obj.value == "No Glass") &&
            (no_of_selvs_a == "0" || no_of_selvs_a == "select")
        ) {
            imageName = "NOGL" + imageName;
        } else if (
            (face_lenght_a_obj.value == "No Glass" ||
                face_lenght_b_obj.value == "No Glass" ||
                face_lenght_c_obj.value == "No Glass" ||
                face_lenght_d_obj.value == "No Glass") &&
            no_of_selvs_a == "1"
        ) {
            imageName = "NOGL1" + imageName;
        } else if (
            (face_lenght_a_obj.value == "No Glass" ||
                face_lenght_b_obj.value == "No Glass" ||
                face_lenght_c_obj.value == "No Glass" ||
                face_lenght_d_obj.value == "No Glass") &&
            no_of_selvs_a == "2"
        ) {
            imageName = "NOGL2" + imageName;
        }
    }

    if (post_height_obj.value != "Instock" && post_height_obj.value != "custom") {
        imageName = "VERT" + imageName;
    }

    if (type_obj.value == "1BAY") {
        if (document.getElementById("face_length").value == "No Glass") {
            $("#checkbox2").attr("disabled", true);
            $("#checkbox2").attr("checked", false);
        } else {
            $("#checkbox2").attr("disabled", false);
        }
    }
    if (type_obj.value == "2BAY") {
        if (document.getElementById("face_length_a").value == "No Glass") {
            $("#checkbox2").attr("disabled", true);
            $("#checkbox2").attr("checked", false);
        } else if (document.getElementById("face_length_b").value == "No Glass") {
            $("#checkbox2").attr("disabled", true);
            $("#checkbox2").attr("checked", false);
        } else {
            $("#checkbox2").attr("disabled", false);
        }
    }
    if (type_obj.value == "3BAY") {
        if (document.getElementById("face_length_a").value == "No Glass") {
            $("#checkbox2").attr("disabled", true);
            $("#checkbox2").attr("checked", false);
        } else if (document.getElementById("face_length_b").value == "No Glass") {
            $("#checkbox2").attr("disabled", true);
            $("#checkbox2").attr("checked", false);
        } else if (document.getElementById("face_length_c").value == "No Glass") {
            $("#checkbox2").attr("disabled", true);
            $("#checkbox2").attr("checked", false);
        } else {
            $("#checkbox2").attr("disabled", false);
        }
    }
    if (type_obj.value == "4BAY") {
        if (document.getElementById("face_length_a").value == "No Glass") {
            $("#checkbox2").attr("disabled", true);
            $("#checkbox2").attr("checked", false);
        } else if (document.getElementById("face_length_b").value == "No Glass") {
            $("#checkbox2").attr("disabled", true);
            $("#checkbox2").attr("checked", false);
        } else if (document.getElementById("face_length_c").value == "No Glass") {
            $("#checkbox2").attr("disabled", true);
            $("#checkbox2").attr("checked", false);
        } else if (document.getElementById("face_length_d").value == "No Glass") {
            $("#checkbox2").attr("disabled", true);
            $("#checkbox2").attr("checked", false);
        } else {
            $("#checkbox2").attr("disabled", false);
        }
    }

    //code end here
    topGlassPrice =
        topGlassPrice_a + topGlassPrice_b + topGlassPrice_c + topGlassPrice_d;
    glassPrice = facePrice_a + facePrice_b + facePrice_c + facePrice_d;
    totalPrice =
        glassPrice +
        leftPostPrice +
        rightPostPrice +
        leftEndPanelPrice +
        rightEndPanelPrice +
        centerPostPrice +
        flangeCoversPrice +
        flangeUnderCounterPrice +
        centerShelvPrice +
        endPanelBulletPrice +
        rightShelvPrice +
        leftShelvPrice +
        lightBarPrice +
        topGlassPrice;
    img_ajx = imageName;

    image_string =
        '<img src="images/' +
        foldername +
        "/" +
        imageName +
        '.jpg" style="width:568px;height:453px">';

    image_string += '<div class="left">12"</div><div class="right">12"</div>';
    image_string += '<div class="msgtishu"></div>';
    image_string += '<div class="msgtishu1"></div>';
    image_string +=
        '<div class="msgtishu2"><hr color="red" size="6px"   width="' +
        width_three +
        '"> </div>';

    image_string +=
        '<div class="glass">A</div><div class="glass_a">A</div><div class="glass_b">B</div><div class="glass_c">C</div><div class="glass_d">D</div><div class="post">E</div><div class="total">Total</div>';

    document.getElementById("additional_image").innerHTML = image_string;
    // $('.post').css("display","none");
    if (glass_face_obj.value == 1) {
        //$("div.left").text(left_lenght_obj.value+'"');
        if (right_lenght_obj.value != "select") {
            $("div.right").text(parseInt(right_lenght_obj.value) - 4 + '"');
            $("div.left").text(right_lenght_obj.value + '"');
        } else {
            $("div.right").text("Inner Width");
            $("div.left").text("Countertop Width");
        }
    } else if (glass_face_obj.value == 2) {
        if (right_lenght_obj.value != "select") {
            $("div.right").text(parseInt(right_lenght_obj.value) - 4 + '"');
            $("div.left").text(right_lenght_obj.value + '"');
        } else {
            $("div.right").text("Inner Width");
            $("div.left").text("Countertop Width");
        }
        //$("div.left").css("display","none");
    } else if (glass_face_obj.value == 3) {
        if (right_lenght_obj.value != "select") {
            $("div.right").text(parseInt(right_lenght_obj.value) - 4 + '"');
            $("div.left").text(left_lenght_obj.value + '"');
        } else {
            $("div.right").text("Inner Width");
            $("div.left").text("Countertop Width");
        }
        //$("div.right").css("display","none");
    } else if (glass_face_obj.value == 4) {
        if (right_lenght_obj.value != "select") {
            $("div.right").text(parseInt(right_lenght_obj.value) - 4 + '"');
            $("div.left").text(right_lenght_obj.value + '"');
        } else {
            $("div.right").text("Inner Width");
            $("div.left").text("Countertop Width");
        }
        //$("div.left").css("display","none");
        //$("div.right").css("display","none");
    }
    $("#c_glass_post").val();
    $("#shelves").val(no_of_selvs_a);

    if (type_obj.value == "1BAY") {
        //if post height choosen show the post div

        if (
            post_height_obj.value != "select" &&
            post_height_obj.value != "custom"
        ) {
            $(".post").text(
                post_height_obj.options[post_height_obj.selectedIndex].text
            );
            $("#c_glass_post").val(
                post_height_obj.options[post_height_obj.selectedIndex].text
            );
        } else {
            $(".post").text("Height");
        }
        if (face_lenght_obj.value != "No Glass" && flag == 1) {
            if (face_lenght_obj.value != "select") {
                if (light_bar_obj.value == "yes") {
                    $("#c_glass_a_light").val(product_name_price[light_a][0]);
                    $("#c_glass_a_val_light").val(
                        face_lenght_obj.options[face_lenght_obj.selectedIndex].text
                    );
                }
                if (left_lenght_obj.value != "select") {
                    $("#c_glass_a").val(product_name_price[glassName_a][0]);
                    $("#c_glass_a_val").val(
                        face_lenght_obj.options[face_lenght_obj.selectedIndex].text
                    );
                    if (topGlass_a != "") {
                        $("#c_glass_a_top").val(product_name_price[topGlass_a][0]);
                    }
                    $("#c_glass_a_top_val").val(
                        face_lenght_obj.options[face_lenght_obj.selectedIndex].text
                    );
                }
                $("div.glass").text(
                    face_lenght_obj.options[face_lenght_obj.selectedIndex].text
                );
            } else {
                $("div.glass").text("A");
            }
            var n1 =
                getBeforeChar(
                    $('[name="face_length"]').find("option:selected").text()
                ) - 0;
            if (
                getAfterChar(
                    $('[name="face_length"]').find("option:selected").text()
                ) != ""
            ) {
                n1 =
                    n1 +
                    2 +
                    "-" +
                    getAfterChar(
                        $('[name="face_length"]').find("option:selected").text()
                    ) +
                    '"';
            } else {
                n1 = n1 + 2 + '"';
            }

            if (n1 == '2"') {
                $("div.total").text("Total");
            } else {
                $("div.total").text(n1);
                tot1 = n1;
            }
        } else {
            $("div.glass").text("A");
            $("div.total").text("Total");
        }
        if (face_lenght_obj.value == "No Glass") {
            noGlass();
        }
    }

    if (type_obj.value == "2BAY") {
        if (
            post_height_obj.value != "select" &&
            post_height_obj.value != "custom"
        ) {
            $(".post").text(
                post_height_obj.options[post_height_obj.selectedIndex].text
            );
            $("#c_glass_post").val(
                post_height_obj.options[post_height_obj.selectedIndex].text
            );
        } else {
            $(".post").text("Height");
        }
        if (face_lenght_a_obj.value != "select" && flag == 1) {
            $("div.glass_a").text(
                face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text
            );
            if (face_lenght_a_obj.value != "No Glass") {
                if (light_bar_obj.value == "yes") {
                    $("#c_glass_a_light").val(product_name_price[light_a][0]);
                    $("#c_glass_a_val_light").val(
                        face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text
                    );
                }
                if (left_lenght_obj.value != "select") {
                    $("#c_glass_a").val(product_name_price[glassName_a][0]);
                    $("#c_glass_a_val").val(
                        face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text
                    );
                    if (topGlass_a != "") {
                        $("#c_glass_a_top").val(product_name_price[topGlass_a][0]);
                    }
                    $("#c_glass_a_top_val").val(
                        face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text
                    );
                }
            }
        } else {
            $("div.glass_a").text("A");
        }
        if (face_lenght_b_obj.value != "select" && flag == 1) {
            $("div.glass_b").text(
                face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text
            );
            if (face_lenght_b_obj.value != "No Glass") {
                if (light_bar_obj.value == "yes") {
                    $("#c_glass_b_light").val(product_name_price[light_b][0]);
                    $("#c_glass_b_val_light").val(
                        face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text
                    );
                }
                if (left_lenght_obj.value != "select") {
                    $("#c_glass_b").val(product_name_price[glassName_b][0]);
                    $("#c_glass_b_val").val(
                        face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text
                    );
                    if (topGlass_b != "") {
                        $("#c_glass_b_top").val(product_name_price[topGlass_b][0]);
                    }
                    $("#c_glass_b_top_val").val(
                        face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text
                    );
                }
            }
        } else {
            $("div.glass_b").text("B");
        }

        if (
            face_lenght_a_obj.value != "No Glass" &&
            face_lenght_b_obj.value != "No Glass"
        ) {
            var n1 =
                getBeforeChar(
                    $('[name="face_length_a"]').find("option:selected").text()
                ) - 0;
            var n2 =
                getBeforeChar(
                    $('[name="face_length_b"]').find("option:selected").text()
                ) - 0;
            var f_n1 = getAfterChar(
                $('[name="face_length_a"]').find("option:selected").text()
            );
            var f_n2 = getAfterChar(
                $('[name="face_length_b"]').find("option:selected").text()
            );
            var total = getTotal(n1, n2, f_n1, f_n2);
            if (total == '2"') {
                $("div.total").text("Total");
            } else {
                $("div.total").text(total);
                tot1 = total;
            }
        }

        if (
            face_lenght_a_obj.value == "No Glass" ||
            face_lenght_b_obj.value == "No Glass"
        ) {
            noGlass();
        }
    }
    if (type_obj.value == "3BAY") {
        if (
            post_height_obj.value != "select" &&
            post_height_obj.value != "custom"
        ) {
            $(".post").text(
                post_height_obj.options[post_height_obj.selectedIndex].text
            );
            $("#c_glass_post").val(
                post_height_obj.options[post_height_obj.selectedIndex].text
            );
        } else {
            $(".post").text("Height");
        }
        if (face_lenght_a_obj.value != "select" && flag == 1) {
            $("div.glass_a").text(
                face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text
            );
            if (face_lenght_a_obj.value != "No Glass") {
                if (light_bar_obj.value == "yes") {
                    $("#c_glass_a_light").val(product_name_price[light_a][0]);
                    $("#c_glass_a_val_light").val(
                        face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text
                    );
                }
                if (left_lenght_obj.value != "select") {
                    $("#c_glass_a").val(product_name_price[glassName_a][0]);
                    $("#c_glass_a_val").val(
                        face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text
                    );
                    if (topGlass_a != "") {
                        $("#c_glass_a_top").val(product_name_price[topGlass_a][0]);
                    }
                    $("#c_glass_a_top_val").val(
                        face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text
                    );
                }
            }
        } else {
            $("div.glass_a").text("A");
        }
        if (face_lenght_b_obj.value != "select" && flag == 1) {
            $("div.glass_b").text(
                face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text
            );
            if (face_lenght_b_obj.value != "No Glass") {
                if (light_bar_obj.value == "yes") {
                    $("#c_glass_b_light").val(product_name_price[light_b][0]);
                    $("#c_glass_b_val_light").val(
                        face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text
                    );
                }
                if (left_lenght_obj.value != "select") {
                    $("#c_glass_b").val(product_name_price[glassName_b][0]);
                    $("#c_glass_b_val").val(
                        face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text
                    );
                    if (topGlass_b != "") {
                        $("#c_glass_b_top").val(product_name_price[topGlass_b][0]);
                    }
                    $("#c_glass_b_top_val").val(
                        face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text
                    );
                }
            }
        } else {
            $("div.glass_b").text("B");
        }
        if (face_lenght_c_obj.value != "select" && flag == 1) {
            $("div.glass_c").text(
                face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text
            );
            if (face_lenght_c_obj.value != "No Glass") {
                if (light_bar_obj.value == "yes") {
                    $("#c_glass_c_light").val(product_name_price[light_c][0]);
                    $("#c_glass_c_val_light").val(
                        face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text
                    );
                }
                if (left_lenght_obj.value != "select") {
                    $("#c_glass_c").val(product_name_price[glassName_c][0]);
                    $("#c_glass_c_val").val(
                        face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text
                    );
                    if (topGlass_c) {
                        $("#c_glass_c_top").val(product_name_price[topGlass_c][0]);
                    }
                    $("#c_glass_c_top_val").val(
                        face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text
                    );
                }
            }
        } else {
            $("div.glass_c").text("C");
        }

        if (
            face_lenght_a_obj.value != "No Glass" &&
            face_lenght_b_obj.value != "No Glass" &&
            face_lenght_c_obj.value != "No Glass"
        ) {
            var n1 =
                getBeforeChar(
                    $('[name="face_length_a"]').find("option:selected").text()
                ) - 0;
            var n2 =
                getBeforeChar(
                    $('[name="face_length_b"]').find("option:selected").text()
                ) - 0;
            var n3 =
                getBeforeChar(
                    $('[name="face_length_c"]').find("option:selected").text()
                ) - 0;
            var f_n1 = getAfterChar(
                $('[name="face_length_a"]').find("option:selected").text()
            );
            var f_n2 = getAfterChar(
                $('[name="face_length_b"]').find("option:selected").text()
            );
            var f_n3 = getAfterChar(
                $('[name="face_length_c"]').find("option:selected").text()
            );
            //this function not working properly
            var total = getTotal3Bay(n1, n2, n3, f_n1, f_n2, f_n3);
        }
        if (total == '2"') {
            $("div.total").text("Total");
        } else {
            $("div.total").text(total);
            tot1 = total;
        }

        if (
            face_lenght_a_obj.value == "No Glass" ||
            face_lenght_b_obj.value == "No Glass" ||
            face_lenght_c_obj.value == "No Glass"
        ) {
            noGlass();
        }
    }
    if (type_obj.value == "4BAY") {
        if (
            post_height_obj.value != "select" &&
            post_height_obj.value != "custom"
        ) {
            $(".post").text(
                post_height_obj.options[post_height_obj.selectedIndex].text
            );
            $("#c_glass_post").val(
                post_height_obj.options[post_height_obj.selectedIndex].text
            );
        } else {
            $(".post").text("Height");
        }
        if (face_lenght_a_obj.value != "select" && flag == 1) {
            $("div.glass_a").text(
                face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text
            );
            if (face_lenght_a_obj.value != "No Glass") {
                if (light_bar_obj.value == "yes") {
                    $("#c_glass_a_light").val(product_name_price[light_a][0]);
                    $("#c_glass_a_val_light").val(
                        face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text
                    );
                }
                if (left_lenght_obj.value != "select") {
                    $("#c_glass_a").val(product_name_price[glassName_a][0]);
                    $("#c_glass_a_val").val(
                        face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text
                    );
                    if (topGlass_a != "") {
                        $("#c_glass_a_top").val(product_name_price[topGlass_a][0]);
                    }
                    $("#c_glass_a_top_val").val(
                        face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text
                    );
                }
            }
        } else {
            $("div.glass_a").text("A");
        }
        if (face_lenght_b_obj.value != "select" && flag == 1) {
            $("div.glass_b").text(
                face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text
            );
            if (face_lenght_b_obj.value != "No Glass") {
                if (light_bar_obj.value == "yes") {
                    $("#c_glass_b_light").val(product_name_price[light_b][0]);
                    $("#c_glass_b_val_light").val(
                        face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text
                    );
                }
                if (left_lenght_obj.value != "select") {
                    $("#c_glass_b").val(product_name_price[glassName_b][0]);
                    $("#c_glass_b_val").val(
                        face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text
                    );
                    if (topGlass_b != "") {
                        $("#c_glass_b_top").val(product_name_price[topGlass_b][0]);
                    }
                    $("#c_glass_b_top_val").val(
                        face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text
                    );
                }
            }
        } else {
            $("div.glass_b").text("B");
        }
        if (face_lenght_c_obj.value != "select" && flag == 1) {
            $("div.glass_c").text(
                face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text
            );
            if (face_lenght_c_obj.value != "No Glass") {
                if (light_bar_obj.value == "yes") {
                    $("#c_glass_c_light").val(product_name_price[light_c][0]);
                    $("#c_glass_c_val_light").val(
                        face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text
                    );
                }
                if (left_lenght_obj.value != "select") {
                    $("#c_glass_c").val(product_name_price[glassName_c][0]);
                    $("#c_glass_c_val").val(
                        face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text
                    );
                    if (topGlass_c != "select") {
                        $("#c_glass_c_top").val(product_name_price[topGlass_c][0]);
                    }
                    $("#c_glass_c_top_val").val(
                        face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text
                    );
                }
            }
        } else {
            $("div.glass_c").text("C");
        }
        if (face_lenght_d_obj.value != "select" && flag == 1) {
            $("div.glass_d").text(
                face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text
            );
            if (face_lenght_d_obj.value != "No Glass") {
                if (light_bar_obj.value == "yes") {
                    $("#c_glass_d_light").val(product_name_price[light_d][0]);
                    $("#c_glass_d_val_light").val(
                        face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text
                    );
                }
                if (left_lenght_obj.value != "select") {
                    $("#c_glass_d").val(product_name_price[glassName_d][0]);
                    $("#c_glass_d_val").val(
                        face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text
                    );
                    if (topGlass_d != "select") {
                        $("#c_glass_d_top").val(product_name_price[topGlass_d][0]);
                    }
                    $("#c_glass_d_top_val").val(
                        face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text
                    );
                }
            }
        } else {
            $("div.glass_d").text("D");
        }

        if (
            face_lenght_a_obj.value != "No Glass" &&
            face_lenght_b_obj.value != "No Glass" &&
            face_lenght_c_obj.value != "No Glass"
        ) {
            var n1 =
                getBeforeChar(
                    $('[name="face_length_a"]').find("option:selected").text()
                ) - 0;

            var n2 =
                getBeforeChar(
                    $('[name="face_length_b"]').find("option:selected").text()
                ) - 0;

            var n3 =
                getBeforeChar(
                    $('[name="face_length_c"]').find("option:selected").text()
                ) - 0;
            var n4 =
                getBeforeChar(
                    $('[name="face_length_d"]').find("option:selected").text()
                ) - 0;

            var f_n1 = getAfterChar(
                $('[name="face_length_a"]').find("option:selected").text()
            );

            var f_n2 = getAfterChar(
                $('[name="face_length_b"]').find("option:selected").text()
            );

            var f_n3 = getAfterChar(
                $('[name="face_length_c"]').find("option:selected").text()
            );
            var f_n4 = getAfterChar(
                $('[name="face_length_d"]').find("option:selected").text()
            );

            //this function not working properly

            var total = getTotal4Bay(n1, n2, n3, n4, f_n1, f_n2, f_n3, f_n4);
            if (total != '2"') {
                $("div.total").text(total);
                tot1 = total;
            } else {
                $("div.total").text("Total");
            }
        }
        if (
            face_lenght_a_obj.value == "No Glass" ||
            face_lenght_b_obj.value == "No Glass" ||
            face_lenght_c_obj.value == "No Glass" ||
            face_lenght_d_obj.value == "No Glass"
        ) {
            noGlass();
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
        redlineheight1 = 223;
        redlineheight2 = 256;
        redlineheight3 = 285;
        redlineheight4 = 579;
        redlineheight5 = 190;
        redlineverticle = 485;
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
        redlineheight1 = 248;
        redlineheight2 = 280;
        redlineheight3 = 310;
        redlineheight4 = 603;
        redlineheight5 = 190;
        redlineverticle = 509;
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
        redlineheight1 = 270;
        redlineheight2 = 303;
        redlineheight3 = 332;
        redlineheight4 = 628;
        redlineheight5 = 190;
        redlineverticle = 534;
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
        redlineheight1 = 295;
        redlineheight2 = 328;
        redlineheight3 = 357;
        redlineheight4 = 654;
        redlineheight5 = 190;
        redlineverticle = 560;
    }

    document.getElementById("products_ids").innerHTML = str;
    document.getElementById("left-post").innerHTML = leftPostPrice + ".00";
    document.getElementById("right-post").innerHTML = rightPostPrice + ".00";
    document.getElementById("trasition-post").innerHTML = centerPostPrice + ".00";
    document.getElementById("face-glass").innerHTML = glassPrice + ".00";
    document.getElementById("top-glass").innerHTML = topGlassPrice + ".00";
    document.getElementById("total").innerHTML = "$&nbsp;" + totalPrice + ".00";
    document.getElementById("light-bar").innerHTML = lightBarPrice + ".00";

    document.getElementById("flang-cover").innerHTML = flangeCoversPrice + ".00";
    //document.getElementById("flange-under-counter").innerHTML=flangeUnderCounterPrice+".00";

    document.getElementById("flange-cover2").innerHTML =
        endPanelBulletPrice + ".00";
    document.getElementById("left-Panel").innerHTML = leftEndPanelPrice + ".00";
    document.getElementById("right-panel").innerHTML = rightEndPanelPrice + ".00";
    document.getElementById("left-post-sel").innerHTML = leftShelvPrice + ".00";
    document.getElementById("right-post-sel").innerHTML = rightShelvPrice + ".00";
    document.getElementById("trasition-post-sel").innerHTML =
        centerShelvPrice + ".00";

    if (category_name != "EP5" || category_name != "EP15") {
        document.getElementById("left-Panel").innerHTML = leftEndPanelPrice + ".00";
        document.getElementById("right-panel").innerHTML =
            rightEndPanelPrice + ".00";
    }
    if (right_lenght_obj.value == "select") {
        $("#count_err").attr("src", "img/iconCheckOff.gif");
        one = false;
    } else {
        $("#count_err").attr("src", "img/iconCheckOn.gif");
        one = true;
    }
    if (post_height_obj.value == "select") {
        $("#post_err").attr("src", "img/iconCheckOff.gif");
        three = false;
    } else {
        $("#post_err").attr("src", "img/iconCheckOn.gif");
        three = true;
    }
    if (type_obj.value == "1BAY") {
        if (face_lenght_obj != null && face_lenght_obj.value == "select") {
            $("#glass_a_err").attr("src", "img/iconCheckOff.gif");
            four = false;
        } else {
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            four = true;
        }
    } else if (type_obj.value == "2BAY") {
        var foura = (fourb = fourc = fourd = false);
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
        var foura = (fourb = fourc = fourd = false);
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
            //$("#froast").css("display","");
        } else {
            //$("#froast").css("display","none");
        }
    } else if (type_obj.value == "4BAY") {
        var foura = (fourb = fourc = fourd = false);
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
    if (no_of_selvs_a == "select") {
        $("#shelve_err").attr("src", "img/iconCheckOff.gif");
        eight = false;
    } else {
        $("#shelve_err").attr("src", "img/iconCheckOn.gif");
        eight = true;
    }
    if (flange_covers_obj.value == "select") {
        $("#flange_err").attr("src", "img/iconCheckOff.gif");
        five = false;
    } else {
        $("#flange_err").attr("src", "img/iconCheckOn.gif");
        five = true;
    }

    if (flange_under_counter_obj.value == "select") {
        $("#flange_under_counter_err").attr("src", "img/iconCheckOff.gif");
        five = false;
    } else {
        $("#flange_under_counter_err").attr("src", "img/iconCheckOn.gif");
        five = true;
    }

    if (light_bar_obj.value == "select") {
        $("#light_err").attr("src", "img/iconCheckOff.gif");
        six = false;
    } else {
        $("#light_err").attr("src", "img/iconCheckOn.gif");
        six = true;
    }
    if (choose_finish_obj.value == "select") {
        $("#finish_err").attr("src", "img/iconCheckOff.gif");
        //eight=false;
    } else {
        $("#finish_err").attr("src", "img/iconCheckOn.gif");
        //eight=true;
    }
    if (glass_face_obj.value == 2) {
        $("#left_err").attr("src", "img/iconCheckOn.gif");
        two = true;
        if (!zero) {
            $("#left_err").attr("src", "img/iconCheckOff.gif");
        }
    } else if (glass_face_obj.value == 3) {
        $("#right_err").attr("src", "img/iconCheckOn.gif");
        one = true;
        if (!zero) {
            $("#right_err").attr("src", "img/iconCheckOff.gif");
        }
    } else if (glass_face_obj.value == 4) {
        $("#left_err").attr("src", "img/iconCheckOn.gif");
        $("#right_err").attr("src", "img/iconCheckOn.gif");
        one = true;
        two = true;
        if (!zero) {
            $("#left_err").attr("src", "img/iconCheckOff.gif");
            $("#right_err").attr("src", "img/iconCheckOff.gif");
        }
    }
    if (type_obj.value == "1BAY") {
        if (face_lenght_obj.value == "No Glass") {
            four = true;
            six = true;
            seven = true;
            $("#light_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
        }
    }
    if (type_obj.value == "2BAY") {
        if (
            face_lenght_a_obj.value == "No Glass" ||
            face_lenght_b_obj.value == "No Glass"
        ) {
            four = true;
            six = true;
            seven = true;
            $("#light_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_b_err").attr("src", "img/iconCheckOn.gif");
        }
    }
    if (type_obj.value == "3BAY") {
        if (
            face_lenght_a_obj.value == "No Glass" ||
            face_lenght_b_obj.value == "No Glass" ||
            face_lenght_c_obj.value == "No Glass"
        ) {
            four = true;
            six = true;
            seven = true;
            $("#light_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_b_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_c_err").attr("src", "img/iconCheckOn.gif");
        }
    }
    if (type_obj.value == "4BAY") {
        if (
            face_lenght_a_obj.value == "No Glass" ||
            face_lenght_b_obj.value == "No Glass" ||
            face_lenght_c_obj.value == "No Glass" ||
            face_lenght_d_obj.value == "No Glass"
        ) {
            four = true;
            six = true;
            seven = true;
            $("#light_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_b_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_c_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_d_err").attr("src", "img/iconCheckOn.gif");
        }
    }
    if (zero && one && three && four && five && six && eight) {

    } else {

    }
}

function show_lightbar_pupup(form) {
    var lightbarss = form.light_bar.value;

    if (lightbarss == "yes") {

        var check_lightbar_value = 0;

        var bay_value = type_obj.value;
        if (bay_value == "1BAY") {
            var faceglass_valueA = $("#face_length").find("option:selected").text();

            if (faceglass_valueA == "Select") {
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
        if (bay_value == "2BAY") {
            var faceglass_valueA = $("#face_length_a").find("option:selected").text();
            var faceglass_valueB = $("#face_length_b").find("option:selected").text();

            if (faceglass_valueA == "Select") {
                decimal_val_a = 0;
            } else {
                res_val_a = faceglass_valueA.split('"');
                var res_a = res_val_a[0].replace("-", "+");
                var decimal_val_a = eval(res_a);
            }

            if (faceglass_valueB == "Select") {
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
        if (bay_value == "3BAY") {
            var faceglass_valueA = $("#face_length_a").find("option:selected").text();
            var faceglass_valueB = $("#face_length_b").find("option:selected").text();
            var faceglass_valueC = $("#face_length_c").find("option:selected").text();

            if (faceglass_valueA == "Select") {
                decimal_val_a = 0;
            } else {
                res_val_a = faceglass_valueA.split('"');
                var res_a = res_val_a[0].replace("-", "+");
                var decimal_val_a = eval(res_a);
            }

            if (faceglass_valueB == "Select") {
                decimal_val_b = 0;
            } else {
                res_val_b = faceglass_valueB.split('"');
                var res_b = res_val_b[0].replace("-", "+");
                var decimal_val_b = eval(res_b);
            }
            if (faceglass_valueC == "Select") {
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
        if (bay_value == "4BAY") {
            var faceglass_valueA = $("#face_length_a").find("option:selected").text();
            var faceglass_valueB = $("#face_length_b").find("option:selected").text();
            var faceglass_valueC = $("#face_length_c").find("option:selected").text();
            var faceglass_valueD = $("#face_length_d").find("option:selected").text();

            if (faceglass_valueA == "Select") {
                decimal_val_a = 0;
            } else {
                res_val_a = faceglass_valueA.split('"');
                var res_a = res_val_a[0].replace("-", "+");
                var decimal_val_a = eval(res_a);
            }

            if (faceglass_valueB == "Select") {
                decimal_val_b = 0;
            } else {
                res_val_b = faceglass_valueB.split('"');
                var res_b = res_val_b[0].replace("-", "+");
                var decimal_val_b = eval(res_b);
            }
            if (faceglass_valueC == "Select") {
                decimal_val_c = 0;
            } else {
                res_val_c = faceglass_valueC.split('"');
                var res_c = res_val_c[0].replace("-", "+");
                var decimal_val_c = eval(res_c);
            }
            if (faceglass_valueD == "Select") {
                decimal_val_d = 0;
            } else {
                res_val_d = faceglass_valueD.split('"');
                var res_d = res_val_d[0].replace("-", "+");
                var decimal_val_d = eval(res_d);
            }

            if (
                decimal_val_a < 18 ||
                decimal_val_b < 18 ||
                decimal_val_c < 18 ||
                decimal_val_d < 18
            ) {
                check_lightbar_value = 0;
            } else {
                check_lightbar_value = 1;
            }
        }
        //alert(bay_value);

        if (check_lightbar_value == "0") {
            $(document).ready(function() {
                var elem = $(this).closest(".item");
                $.confirm({
                    title: "Confirmation",
                    message: '<div><p style="text-align: justify;"><span style="color: #ff0000;">Caution: about Lightbar Less Than 18" </span><br /><br /><br /><span>If you will select any Facelength <span style="color: #ff0000;">less that 18"</span> you will not able to select <span style="color: #ff0000;">Lightbar</span>. <br /> <br />Means you have to select every Facelenth more than 18" because there is no lightbar for less than 18" Facelength</span></p></div>',
                    buttons: {
                        Proceed: {
                            class: "blue",
                            action: function() {
                                form.light_bar.value = "no";
                                form.light_bar.selected = "No";

                                $("#arc_adius").css("display", "");
                                getPriceOfProduct(document.forms["cart_quantity"]);
                            },
                        },
                        Cancel: {
                            class: "gray",
                            action: function() {
                                form.light_bar.value = "no";
                                form.light_bar.selected = "No";
                                getPriceOfProduct(document.forms["cart_quantity"]);
                            }, // Nothing to do in this case. You can as well omit the action property.
                        },
                    },
                });
            });
        }
    } else {}
}

function getProductFolderName(productname) {
    foldername = "ED20";
    return foldername;
}

function finishImage(form, image) {
    category_name = "<?=$category_name?>";
    foldername = getProductFolderName("<?=$category_name?>");
    if (image != "") {
        imageName = image;
    }

    cross =
        '<input type="button" onclick="getPriceOfProduct(this.form);" style="margin: 0 4px;position: absolute;right: -615px;top: -160px;width: 20px;z-index: 1000000;" value="X" class="rounded-corner-image">';
    image_string =
        '<img src="images/' + imageName + '" style="width:568px;height:453px">';
    //        alert(image_string);

    document.getElementById("additional_image").innerHTML = image_string;
    document.getElementById("rott").innerHTML = cross;
}

function getVedio() {
    str =
        '<video id="example_video_1" class="video-js" width="600" height="480" controls="controls" preload="auto" poster="pic.jpg" autoplay ><source src="images/flang.mp4"' +
        " type='video/mp4; codecs=" +
        '"avc1.42E01E, mp4a.40.2"' +
        ' /><source src="images/flang.webm"' +
        " type='video/webm; codecs=" +
        '"vp8, vorbis"' +
        ' /><source src="images/flang.ogv"' +
        " type='video/ogg; codecs=" +
        '"theora, vorbis"' +
        ' /><object id="flash_fallback_1" class="vjs-flash-fallback" width="640" height="264" type="application/x-shockwave-flash" data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf"><param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" /><param name="allowfullscreen" value="true" /><param name="flashvars" value=' +
        "config={" +
        '"playlist":["pic.jpg", {"url": "images/flang.mp4","autoPlay":false,"autoBuffering":true}]}' +
        ' /><img src="pic.jpg" width="640" height="480" alt="Poster Image" title="No video playback capabilities." /></object></video>';
    document.getElementById("additional_image").innerHTML = str;
}

function noGlass() {
    $("div.glass").text("");
    $("div.glass_a").text("");
    $("div.glass_b").text("");
    $("div.glass_c").text("");
    $("div.glass_d").text("");
    $("div.total").text("");

    $("#c_glass_a_val").val("");
    $("#c_glass_a").val("");

    $("#c_glass_b_val").val("");
    $("#c_glass_b").val("");

    $("#c_glass_c_val").val("");
    $("#c_glass_c").val("");

    $("#c_glass_a_top_val").val("");
    $("#c_glass_a_top").val("");

    $("#c_glass_b_top_val").val("");
    $("#c_glass_b_top").val("");

    $("#c_glass_c_top_val").val("");
    $("#c_glass_c_top").val("");
}
$(document).ready(function() {
    // alert("It is");
    $("#1").click(function() {
        rght = lft = bth = noe = false;
        bth = true;
        // alert(bth);
    });
    $("#2").click(function() {
        rght = lft = bth = noe = false;
        rght = true;
        // alert(rght);
    });
    $("#3").click(function() {
        rght = lft = bth = noe = false;
        lft = true;
        // alert(lft);
    });
    $("#4").click(function() {
        rght = lft = bth = noe = false;
        noe = true;
        // alert(noe);
    });
});
//image_string1='<img src="images/B950'+<?=$HTTP_GET_VARS['type']?>+'/START.jpg" style="width:100%">';
//document.getElementById('additional_image').innerHTML=image_string1;
//leftstr='<td><h1>Left End</h1><select name="left_length" onchange="getPriceOfProduct(this.form)" disabled="disabled"> <option value="12">12"</option><option value="18">18"</option><option value="24">24"</option></select></td>'
// rightstr='<td><h1  style="width:10px">Countertop Width</h1><select name="right_length" onchange="getPriceOfProduct(this.form)" disabled="disabled"> <?php for($i=12; $i<=36; $i++){?>
// <option value="<?php echo $i;?>"><?php echo $i.'"';?></option><?php }?></select></td>'
$(document).ready(function() {
    $('input[type="checkbox"]').click(function() {
        if ($(this).is(":checked")) {
            $(this).val(1);
            getPriceOfProduct(document.forms["cart_quantity"]);
        } else {
            $(this).val(0);
            getPriceOfProduct(document.forms["cart_quantity"]);
        }
    });
});

selectOption = 0;

function setHideShow(selector, msg) {
    setShowEvent(selector, msg);
    //setHideEvent(selector);
}

function setHideShow1(selector, msg) {
    setShowEventmsg(selector, msg);
    //$(".msgtishu1").remove();

    //setHideEvent(selector);
}

function setHideShow2(selector, msg) {
    setShowEventmsg2(selector, msg);
    //setHideEvent(selector);
}

function setShowEvent(selector, msg) {
    // $("#additional_image").css("opacity","0.5");
    // $(".test-hide").css("opacity","0.5");
    var cssObj = {
        "background-color": "#111",
        "border-style": "solid",
        "border-width": "2px",
        "border-color": "#ff0000",
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
        "border-color": "#ff0000",
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
        "border-color": "#ff0000",
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
        "border-color": "#ff0000",
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
        "border-color": "#ff0000",
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
        "border-color": "#ff0000",
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
        background: "none",
        border: "none",
        "box-shadow": "none",
    };
    $(selector).css(cssObj);
    $(".test-hide").css("opacity", "1.0");
    $("#message_w").html("");
    $("#message_wp").html("");
    $("#message_wp1").html("");
    $("#message_wp2").html("");
};

$(document).ready(function() {
    //var custom;
    //	var my_facelengt_select="";
    //	var postheight=false;
    //$msg='Glass for the selected unit currently has a production time of 5-8 working days.  Posts can be shipped within 24 hours.';
    //$('[name="face_length"]').change(function(){
    //		if($(this).val()=='custom'){
    //			custom=$(this);
    //
    //			$('.delete').click();
    //
    //		}
    //	})
    //	$('[name="face_length_a"]').change(function(){
    //		if($(this).val()=='custom'){
    //			custom=$(this);
    //			$('.delete').click();
    //
    //		}
    //	})
    //	$('[name="face_length_b"]').change(function(){
    //		if($(this).val()=='custom'){
    //			custom=$(this);
    //			$('.delete').click();
    //		}
    //	})
    //	$('[name="face_length_c"]').change(function(){
    //		if($(this).val()=='custom'){
    //			custom=$(this);
    //			$('.delete').click();
    //		}
    //	})
    //	$('[name="post_height"]').change(function(){
    //		if($(this).val()=='custom'){
    //			custom=$(this);
    //			$msg='<span align="right" ><img src="jquery.confirm/<?php// echo $category_name; ?>.jpg" style="float:right;"><span style="width:250px;display:block;text-align:justify;">You have chosen a custom height post.  We can manufacture them from '+12+'" to '+30+'" tall in <sup>1</sup>&frasl;<sub>4</sub>" increments.  Custom posts can be produced within 24 hours.<br>If you select proceed, the custom posts will default at '+12+'" tall until a new height is selected via the drop down menu.</span></span>';
    //			postheight=true;
    //			$('.delete').click();
    //		}
    //	})
    //
    //	$('.item .delete').click(function(){
    //
    //		var elem = $(this).closest('.item');
    //
    //		$.confirm({
    //
    //
    //			'title'		: 'Confirmation',
    //			'message'	: $msg,
    //			'buttons'	: {
    //				'Proceed'	: {
    //					'class'	: 'blue',
    //					'action': function(){
    //
    //
    //						$('#is_custom').val('Yes');
    //
    //						my_facelengt_select="";
    //						my_facelengt_select+='<select name="'+custom.attr("name")+'" onchange="getPriceOfProduct(this.form),toggle()" >';
    //						//	my_facelengt_simple_select+='<select name="face_length" onchange="getPriceOfProduct(this.form)" >';
    //						var myArray = new Array();
    //						var i=1;
    //						$('[name="'+custom.attr("name")+'"] > option') .each(function() {
    //
    //							if($(this).val()!='custom'){
    //								myArray[i]=$(this).val();
    //								i++;
    //							}
    //
    //						});
    //						/*for ep 11 category post height*/
    //						var j=0;
    //						if(postheight){
    //								myArray=new Array("","12","18","22","");
    //						}else{
    //
    //
    //						for (i=8;i<myArray[1];i++){
    //
    //							my_facelengt_select+='<option value="'+myArray[1]+'">'+i+'"</option>';
    //							my_facelengt_select+='<option value="'+myArray[1]+'">'+i+'-1/4'+'"</option>';
    //							my_facelengt_select+='<option value="'+myArray[1]+'">'+i+'-1/2'+'"</option>';
    //							my_facelengt_select+='<option value="'+myArray[1]+'">'+i+'-3/4'+'"</option>';
    //							j=i;
    //						}
    //						}
    //
    //
    //						for(i=1;i< myArray.length-2;i++){
    //							for(j=myArray[i];j<myArray[i+1];j++){
    //								if(j>myArray[i]){
    //									my_facelengt_select+='<option value="'+myArray[i+1]+'">'+j+'"</option>';
    //								}else
    //								{
    //									my_facelengt_select+='<option value="'+myArray[i]+'">'+j+'"</option>';
    //								}
    //								my_facelengt_select+='<option value="'+myArray[i+1]+'">'+j+'-1/4'+'"</option>';
    //								my_facelengt_select+='<option value="'+myArray[i+1]+'">'+j+'-1/2'+'"</option>';
    //								my_facelengt_select+='<option value="'+myArray[i+1]+'">'+j+'-3/4'+'"</option>';
    //							}
    //						}
    //						my_facelengt_select+='<option value="'+myArray[i]+'">'+myArray[i]+'"</option>';
    //
    //					$('#'+custom.attr("name")+'_span').html(my_facelengt_select);
    //					/* for ep11 post height */
    //					getPriceOfProduct(document.forms['cart_quantity']);
    //
    //					}
    //				},
    //				'Cancel'	: {
    //					'class'	: 'gray',
    //					'action': function(){}	// Nothing to do in this case. You can as well omit the action property.
    //
    //				}
    //			}
    //		});
    //
    //	});
    //changePost($('#post_height'));
    // changeDrop($('#face_length'));
    // changeDrop($('#face_length_a'));
    // changeDrop($('#face_length_b'));
    // changeDrop($('#face_length_c'));
    // changeDrop($('#face_length_d'));
    function changeDrop(custom) {
        //alert("incoming");

        $("#is_custom").val("Yes");

        my_facelengt_select = "";
        my_facelengt_select +=
            '<select name="' +
            custom.attr("name") +
            '" id="' +
            custom.attr("name") +
            '" onchange="getPriceOfProduct(this.form),toggle()" >';
        my_facelengt_select += '<option value="select">Select</option>';
        //	my_facelengt_simple_select+='<select name="face_length" onchange="getPriceOfProduct(this.form)" >';
        var myArray = new Array();
        var i = 1;
        $('[name="' + custom.attr("name") + '"] > option').each(function() {
            if ($(this).val() != "custom") {
                myArray[i] = $(this).val();
                alert(myArray[i] + " " + i);
                i++;
            }
        });
        /*for ep 11 category post height*/
        var j = 0;
        //if(postheight){
        //								myArray=new Array("","12","18","22","");
        //						}else{

        for (i = 8; i < myArray[2]; i++) {
            my_facelengt_select +=
                '<option value="' + myArray[2] + '">' + i + '"</option>';
            my_facelengt_select +=
                '<option value="' + myArray[2] + '">' + i + "-1/4" + '"</option>';
            my_facelengt_select +=
                '<option value="' + myArray[2] + '">' + i + "-1/2" + '"</option>';
            my_facelengt_select +=
                '<option value="' + myArray[2] + '">' + i + "-3/4" + '"</option>';
            j = i;
        }
        //}

        for (i = 2; i < myArray.length - 2; i++) {
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
        my_facelengt_select +=
            '<option value="' + myArray[i] + '">' + myArray[i] + '"</option>';
        my_facelengt_select += '<option value="No Glass">No Glass</option>';

        $("#" + custom.attr("name") + "_span").html(my_facelengt_select);
        /* for ep11 post height */
        //getPriceOfProduct(document.forms['cart_quantity']);
    }

    function changePost(custom) {
        $("#is_custom").val("Yes");

        my_facelengt_select = "";
        my_facelengt_select +=
            '<select name="' +
            custom.attr("name") +
            '" id="' +
            custom.attr("name") +
            '" onchange="getPriceOfProduct(this.form),toggle()" >';
        my_facelengt_select += '<option value="select">Select</option>';
        //	my_facelengt_simple_select+='<select name="face_length" onchange="getPriceOfProduct(this.form)" >';
        var myArray = new Array();
        var i = 1;
        $('[name="' + custom.attr("name") + '"] > option').each(function() {
            if ($(this).val() != "custom") {
                myArray[i] = $(this).val();
                i++;
            }
        });
        /*for ep 11 category post height*/
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

        //my_facelengt_select+='<option value="'+myArray[i]+'">'+myArray[i]+'"</option>';

        $("#" + custom.attr("name") + "_span").html(my_facelengt_select);
        /* for ep11 post height */
        //getPriceOfProduct(document.forms['cart_quantity']);
    }
});

function myFunction(form) {
    var check = (ck = true);
    var x = '<center><img src="img/addToCartWindow.jpg" width="100%"></center>';
    x += '<ul style="margin-left:30px;">';
    if (form.right_length.value == "select") {
        x += '<li>Countertop Width <span style="color:red">?</span></li>';
        check = false;
    }
    if (form.type.value == "1BAY") {
        if (form.face_length.value == "No Glass") {
            ck = false;
        }
        if (form.face_length.value == "select") {
            x += '<li>Face Length A <span style="color:red">?</span></li>';
            check = false;
        }
    } else if (form.type.value == "2BAY") {
        if (
            form.face_length_a.value == "No Glass" ||
            form.face_length_b.value == "No Glass"
        ) {
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
        if (
            form.face_length_a.value == "No Glass" ||
            form.face_length_b.value == "No Glass" ||
            form.face_length_c.value == "No Glass"
        ) {
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
        if (
            form.face_length_a.value == "No Glass" ||
            form.face_length_b.value == "No Glass" ||
            form.face_length_c.value == "No Glass" ||
            form.face_length_d.value == "No Glass"
        ) {
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
    if (form.post_height.value == "select") {
        x += '<li>Post Height <span style="color:red">?</span></li>';
        check = false;
    }
    if (form.shelvs_a.value == "select") {
        x += '<li>Shelves <span style="color:red">?</span></li>';
        check = false;
    }
    if ($("#end_options").val() == "select") {
        x += '<li>End Panels <span style="color:red">?</span></li>';
        check = false;
    }
    if (form.flang_cover.value == "select") {
        x += '<li>Flange Covers <span style="color:red">?</span></li>';
        check = false;
    }

    if (form.light_bar.value == "select" && ck) {
        x += '<li>Light Bar <span style="color:red">?</span></li>';
        check = false;
    }
    if (form.choose_finish.value == "select") {
        x += '<li>Post Finish <span style="color:red">?</span></li>';
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
        var bay = form.type.value;
        var var1 = (var2 = var3 = var4 = var5 = var6 = var7 = var8 = flange = "");

        flange = form.flang_cover.options[form.flang_cover.selectedIndex].text;
        if (bay == "1BAY") {
            if (form.face_length !== undefined) {
                var1 = form.face_length.options[form.face_length.selectedIndex].text;
            } else {
                var1 =
                    form.face_length_a.options[form.face_length_a.selectedIndex].text;
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
                img: img_ajx,
            },
            cache: false,
            contentType: "application/x-www-form-urlencoded",
            success: function(data, textStatus, request) {
                //tb_show("","pop1.php?KeepThis=true&TB_iframe=true&height=500&width=600","");

                /*
                                        if(flange=='Yes')
                                        {
                                        $(document).ready(function(){
                                            var elem = $(this).closest('.item');
                                            $.confirm({
                                                'title'     : 'Confirmation',
                                    'message'   : '<p><span><span style="color: #ff0000;">LOW STOCK WARNING:-</span> </span></p><p><span>We are out of stock on the following item: </p><p><span style="color: #ff0000;">Flanges Covers,</span> <br />would you like to continue without them?</span></p>',
                                    'buttons'   : {
                                        'Proceed'   : {
                                            'class' : 'blue',
                                            'action': function(){
                                                                   // getPriceOfProduct(document.forms['cart_quantity']);
                                                                    form.flang_cover.value="no";
                                                                form.flang_cover.selected="No";
                                                                getPriceOfProduct(form);
                                                                         //$('#add_more_bay').val('1');
                                                                         $("form[name='cart_quantity']").submit();
                                                                    // alert('yes');
                                                                    
                                            }
                                            
                                                        },
                                        'Cancel': {
                                                            'class': 'gray',
                                                            'action': function(){
                                                                
                                                              //   alert('no');
                                                                //getPriceOfProduct(document.forms['cart_quantity']);
                                                                
                                                                //$("form[name='cart_quantity']").submit();
                                                            }   // Nothing to do in this case. You can as well omit the action property.
                                            
                                        }
                                    }
                                            });
                                
                                        });		
                                            
                                        }
                                        else{
                                            */

                $("form[name='cart_quantity']").submit();

                //}
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
    $(".item .delete2").click(function() {
        var elem = $(this).closest(".item");

        $.confirm({
            title: "Confirmation",
            message: $("#msg").val(),
            buttons: {
                Proceed: {
                    class: "blue",
                    action: function() {
                        document.forms["cart_quantity"].submit();
                    },
                },
                Cancel: {
                    class: "gray",
                    action: function() {
                        return false;
                    }, // Nothing to do in this case. You can as well omit the action property.
                },
            },
        });
    });
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
    if (f_n1 == "" && f_n2 == "") {
        var t = n1 + n2 + 2 + '"';
    } else {
        var t = n1 + n2 + 2;
    }
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
    //alert(f_n1);
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
        t += '-5/4"';
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

function getTotal6(n1, n2, f_n1, f_n2) {
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

function getTotal62(n1, n2, n4, f_n1, f_n2) {
    var t = n1 + n2 + n4 + 2;
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

function getTotal63(n1, n2, f_n1, f_n2) {
    var t = n1 + 2;
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
    if (f_n1 == "3/2" && f_n2 == "1/4") {
        t += 1;
        t += '-3/4"';
    }
    if (f_n1 == "3/2" && f_n2 == "3/4") {
        t += 2;
        t += '-1/4"';
    }
    if (f_n1 == "3/2" && f_n2 == "1/2") {
        t += 2;
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

function getTotal2(n1, n2, n3, n4, f_n1, f_n2, f_n3, f_n4) {
    if (f_n1 == "" && f_n2 == "" && f_n3 == "" && f_n4 == "") {
        var t = n1 + n2 + n3 + n4 + 2 + '"';
    } else {
        var t = n1 + n2 + n3 + n4 + 2;
    }
    if (f_n1 == "" && f_n2 == "" && f_n3 == "" && f_n4 != "") {
        t += "-" + f_n4 + '"';
    }
    if (f_n1 == "" && f_n2 == "" && f_n3 != "" && f_n4 == "") {
        t += "-" + f_n3 + '"';
    }
    if (f_n1 == "" && f_n2 != "" && f_n3 == "" && f_n4 == "") {
        t += "-" + f_n2 + '"';
    }
    if (f_n1 != "" && f_n2 == "" && f_n3 == "" && f_n4 == "") {
        t += "-" + f_n1 + '"';
    }
    if (f_n1 != "" && f_n2 == "" && f_n3 == "" && f_n4 != "") {
        var t = "";
        t += getTotal3(n1, n2, n3, n4, f_n1, f_n4);
    }
    if (f_n1 != "" && f_n2 != "" && f_n3 == "" && f_n4 == "") {
        var t = "";
        t += getTotal3(n1, n2, n3, n4, f_n1, f_n2);
    }
    if (f_n1 != "" && f_n2 == "" && f_n3 != "" && f_n4 == "") {
        var t = "";
        t += getTotal3(n1, n2, n3, n4, f_n1, f_n3);
    }
    if (f_n1 != "" && f_n2 == "" && f_n3 == "" && f_n4 != "") {
        var t = "";
        t += getTotal3(n1, n2, n3, n4, f_n1, f_n4);
    }
    if (f_n1 == "" && f_n2 != "" && f_n3 != "" && f_n4 == "") {
        var t = "";
        t += getTotal3(n1, n2, n3, n4, f_n2, f_n3);
    }
    if (f_n1 == "" && f_n2 != "" && f_n3 == "" && f_n4 != "") {
        var t = "";
        t += getTotal3(n1, n2, n3, n4, f_n2, f_n4);
    }
    if (f_n1 == "" && f_n2 == "" && f_n3 != "" && f_n4 != "") {
        var t = "";
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

$(document).ready(function() {
    zero = true;
    //custom_val_post("post_height");
    if (document.forms.cart_quantity.type.value == "1BAY") {
        // custom_val("face_length");
    } else if (document.forms.cart_quantity.type.value == "2BAY") {
        //custom_val("face_length_a");
        //custom_val("face_length_b");
    } else if (document.forms.cart_quantity.type.value == "3BAY") {
        //custom_val("face_length_a");
        //custom_val("face_length_b");
        // custom_val("face_length_c");
    } else if (document.forms.cart_quantity.type.value == "4BAY") {
        //custom_val("face_length_a");
        //custom_val("face_length_b");
        //custom_val("face_length_c");
        //custom_val("face_length_d");
    }
    $("input#glass-face").val(4);
    // this.forms.cart_quantity.rounded_corners.value="squared";
    // this.forms.cart_quantity.rounded_corners.selected="Squared";
    //
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
            getPriceOfProduct(document.forms["cart_quantity"]);
        } else {
            $("input#glass-face").val(4);
            $("#endpan_err").attr("src", "img/iconCheckOff.gif");
            zero = false;
            getPriceOfProduct(document.forms["cart_quantity"]);
        }
    });
    getPriceOfProduct(document.forms["cart_quantity"]);
    $('input[type="checkbox"]').click(function() {
        if ($(this).is(":checked")) {
            $(this).val(1);
            getPriceOfProduct(document.forms["cart_quantity"]);
        } else {
            $(this).val(0);
            getPriceOfProduct(document.forms["cart_quantity"]);
        }
    });
    var type = this.forms.cart_quantity.type.value;
    if (type == "1BAY") {} else if (type == "2BAY") {
        $("select[name=face_length_a]").change(function() {
            if ($(this).val() == "No Glass") {
                $("select[name=face_length_b]").val("No Glass");
            }
        });
        $("select[name=face_length_b]").change(function() {
            if ($(this).val() == "No Glass") {
                $("select[name=face_length_a]").val("No Glass");
            }
        });
    } else if (type == "3BAY") {
        $("select[name=face_length_a]").change(function() {
            if ($(this).val() == "No Glass") {
                $("select[name=face_length_b]").val("No Glass");
                $("select[name=face_length_c]").val("No Glass");
            }
        });
        $("select[name=face_length_b]").change(function() {
            if ($(this).val() == "No Glass") {
                $("select[name=face_length_a]").val("No Glass");
                $("select[name=face_length_c]").val("No Glass");
            }
        });
        $("select[name=face_length_c]").change(function() {
            if ($(this).val() == "No Glass") {
                $("select[name=face_length_a]").val("No Glass");
                $("select[name=face_length_b]").val("No Glass");
            }
        });
    } else {
        $("select[name=face_length_a]").change(function() {
            if ($(this).val() == "No Glass") {
                $("select[name=face_length_b]").val("No Glass");
                $("select[name=face_length_c]").val("No Glass");
                $("select[name=face_length_d]").val("No Glass");
            }
        });
        $("select[name=face_length_b]").change(function() {
            if ($(this).val() == "No Glass") {
                $("select[name=face_length_a]").val("No Glass");
                $("select[name=face_length_c]").val("No Glass");
                $("select[name=face_length_d]").val("No Glass");
            }
        });
        $("select[name=face_length_c]").change(function() {
            if ($(this).val() == "No Glass") {
                $("select[name=face_length_a]").val("No Glass");
                $("select[name=face_length_b]").val("No Glass");
                $("select[name=face_length_d]").val("No Glass");
            }
        });
        $("select[name=face_length_d]").change(function() {
            if ($(this).val() == "No Glass") {
                $("select[name=face_length_a]").val("No Glass");
                $("select[name=face_length_b]").val("No Glass");
                $("select[name=face_length_c]").val("No Glass");
            }
        });
    }
});

$(document).ready(function() {
    show_panel_type(this.form);
});

function show_panel_type(form) {
    $("input#glass-face").val(4);
    getPriceOfProduct(document.forms["cart_quantity"]);
    var endpanel_val = $("#end_options option:selected").text();
    //alert(endpanel_type);

    if (endpanel_val == "Both Ends") {
        $("input#glass-face").val(1);
        $("#endpan_err").attr("src", "img/iconCheckOn.gif");
    } else if (endpanel_val == "Right End") {
        $("input#glass-face").val(2);
        $("#endpan_err").attr("src", "img/iconCheckOn.gif");
    } else if (endpanel_val == "Left End") {
        $("input#glass-face").val(3);
        $("#endpan_err").attr("src", "img/iconCheckOn.gif");
    } else if (endpanel_val == "No Ends") {
        $("input#glass-face").val(4);
        $("#endpan_err").attr("src", "img/iconCheckOn.gif");
    } else {
        $("input#glass-face").val(4);
        $("#endpan_err").attr("src", "img/iconCheckOff.gif");
    }
    getPriceOfProduct(document.forms["cart_quantity"]);
}