function getPriceOfProduct(form) {
    category_name = form.product_type.value;
    var type = form.type;
    if ($("#customheight").is(":checked")) {
        $(".option-panel").css("visibility", "hidden");
        // getPriceOfProduct(document.forms['cart_quantity']);
    } else {
        $(".option-panel").css("visibility", "visible");
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
    var checkall = true;
    if ($('select[name="face_length"]').length) {
        $(".glass").text($('[name="face_length"]').find("option:selected").text());
        if ($('[name="face_length"]').find("option:selected").text() == "Select") {
            checkall = false;
        }
    }
    if ($('select[name="post_height"]').length) {
        $(".post").text($('[name="post_height"]').find("option:selected").text());
        if ($('[name="post_height"]').find("option:selected").text() == "Select") {
            checkall = false;
        }
    }
    if ($('select[name="left_length"]').length) {
        $(".left").text($('[name="left_length"]').find("option:selected").text());
        if ($('[name="left_length"]').find("option:selected").text() == "Select") {
            checkall = false;
        }
    }
    if ($('select[name="right_length"]').length) {
        $(".right").text($('[name="right_length"]').find("option:selected").text());
        if ($('[name="right_length"]').find("option:selected").text() == "Select") {
            checkall = false;
        }
    }
    if ($('select[name="face_length_a"]').length) {
        $(".glass_a").text(
            $('[name="face_length_a"]').find("option:selected").text()
        );
        if (
            $('[name="face_length_a"]').find("option:selected").text() == "Select"
        ) {
            checkall = false;
        }
    }
    if ($('select[name="face_length_b"]').length) {
        $(".glass_b").text(
            $('[name="face_length_b"]').find("option:selected").text()
        );
        if (
            $('[name="face_length_b"]').find("option:selected").text() == "Select"
        ) {
            checkall = false;
        }
    }
    if ($('select[name="face_length_c"]').length) {
        $(".glass_c").text(
            $('[name="face_length_c"]').find("option:selected").text()
        );
        if (
            $('[name="face_length_c"]').find("option:selected").text() == "Select"
        ) {
            checkall = false;
        }
    }
    if ($('select[name="face_length_d"]').length) {
        $(".glass_d").text(
            $('[name="face_length_d"]').find("option:selected").text()
        );
        if (
            $('[name="face_length_d"]').find("option:selected").text() == "Select"
        ) {
            checkall = false;
        }
    }
    $("#c_glass_a_mult").val(1);
    $("#c_glass_b_mult").val(1);
    $("#c_glass_c_mult").val(1);
    $("#c_glass_d_mult").val(1);
    if (checkall) {
        $("#ckall").val(true);
    }
    var checkmoretha42selected = $("#one").is(":checked");

    if (checkmoretha42selected) {
        $("#checkformorethan42").attr("checked", true);
    }
    var checkmoretha42selectedall = $("#checkformorethan42").is(":checked");
    if (type.value == "4BAY") {
        var customefaceA = $("#customefaceA").is(":checked");

        if (customefaceA) {
            var faceA_get = $('[name="face_length_a"]')
                .find("option:selected")
                .text();
            var faceA_get_val = $('[name="face_length_a"]')
                .find("option:selected")
                .val();
            var faceB_get = $('[name="face_length_b"]')
                .find("option:selected")
                .text();
            var faceB_get_val = $('[name="face_length_b"]')
                .find("option:selected")
                .val();
            var faceC_get = $('[name="face_length_c"]')
                .find("option:selected")
                .text();
            var faceC_get_val = $('[name="face_length_c"]')
                .find("option:selected")
                .val();
            var faceD_get = $('[name="face_length_d"]')
                .find("option:selected")
                .text();
            var faceD_get_val = $('[name="face_length_d"]')
                .find("option:selected")
                .val();

            //alert(faceB_get);
            if (faceB_get != "Custom") {
                //alert(faceB_get);
                if (faceB_get == "Select") {
                    form.face_length_b.value = faceA_get_val;
                    form.face_length_b.selected = faceA_get;
                    //$('#face_length_b option[value="'+faceA_get_val+'"]').text(faceA_get);
                } else {
                    form.face_length_b.value = faceB_get_val;
                    $('#face_length_b option[value="' + faceB_get_val + '"]').text(
                        faceB_get
                    );
                }
            }
            if (faceC_get != "Custom") {
                //alert(faceC_get);
                if (faceC_get == "Select") {
                    form.face_length_c.value = faceA_get_val;
                    form.face_length_c.selected = faceA_get;
                    //$('#face_length_c option[value="'+faceA_get_val+'"]').text(faceA_get);
                } else {
                    form.face_length_c.value = faceC_get_val;
                    $('#face_length_c option[value="' + faceC_get_val + '"]').text(
                        faceC_get
                    );
                }
            }
            if (faceD_get != "Custom") {
                if (faceD_get == "Select") {
                    form.face_length_d.value = faceA_get_val;
                    form.face_length_d.selected = faceA_get;
                    //$('#face_length_d option[value="'+faceA_get_val+'"]').text(faceA_get);
                } else {
                    form.face_length_d.value = faceD_get_val;
                    $('#face_length_d option[value="' + faceD_get_val + '"]').text(
                        faceD_get
                    );
                }
            } else {
                form.face_length_b.value = faceA_get_val;
                $('#face_length_b option[value="' + faceA_get_val + '"]').text(
                    faceA_get
                );
                //form.face_length_b.disabled=true;

                form.face_length_c.value = faceA_get_val;
                $('#face_length_c option[value="' + faceA_get_val + '"]').text(
                    faceA_get
                );
                //form.face_length_c.disabled=true;

                form.face_length_d.value = faceA_get_val;
                $('#face_length_d option[value="' + faceA_get_val + '"]').text(
                    faceA_get
                );
                //form.face_length_d.disabled=true;
            }
            $("#checkboxbfor4bayA").attr("checked", true);
            //var option_cust='<option value="48">48"</option><option value="54">54"</option>';

            $("#optio_48_b").css("display", "block");
            $("#optio_54_b").css("display", "block");
            $("#optio_48_c").css("display", "block");
            $("#optio_54_c").css("display", "block");
            $("#optio_48_d").css("display", "block");
            $("#optio_54_d").css("display", "block");
        } else {}

        var checkcheckedb = $("#checkboxbfor4bayA").is(":checked");
        //alert(checkcheckedb);

        if (checkcheckedb) {
            var faceA_get = $('[name="face_length_a"]')
                .find("option:selected")
                .text();
            var faceA_get_val = $('[name="face_length_a"]')
                .find("option:selected")
                .val();
            var faceB_get = $('[name="face_length_b"]')
                .find("option:selected")
                .text();
            var faceB_get_val = $('[name="face_length_b"]')
                .find("option:selected")
                .val();
            var faceC_get = $('[name="face_length_c"]')
                .find("option:selected")
                .text();
            var faceC_get_val = $('[name="face_length_c"]')
                .find("option:selected")
                .val();
            var faceD_get = $('[name="face_length_d"]')
                .find("option:selected")
                .text();
            var faceD_get_val = $('[name="face_length_d"]')
                .find("option:selected")
                .val();
            if (faceB_get != "Custom") {
                if (faceB_get == '8"') {
                    $("#face_length_b option")
                        .filter(function() {
                            return this.text == faceA_get;
                        })
                        .attr("selected", true);
                } else {
                    $("#face_length_b option")
                        .filter(function() {
                            return this.text == faceB_get;
                        })
                        .attr("selected", true);
                }
            } else {
                $("#face_length_b option")
                    .filter(function() {
                        return this.text == faceA_get;
                    })
                    .attr("selected", true);
            }

            //alert(faceC_get);
            //if FacelengthC not same

            if (faceC_get != "Custom") {
                //$("#checkbfor4bayBnonsame").attr("checked",true);

                if (faceC_get == '8"') {
                    $("#face_length_c option")
                        .filter(function() {
                            return this.text == faceA_get;
                        })
                        .attr("selected", true);
                } else {
                    $("#face_length_c option")
                        .filter(function() {
                            return this.text == faceC_get;
                        })
                        .attr("selected", true);
                }
            } else {
                $("#face_length_c option")
                    .filter(function() {
                        return this.text == faceA_get;
                    })
                    .attr("selected", true);
            }
            if (faceD_get != "Custom") {
                if (faceD_get == '8"') {
                    $("#face_length_d option")
                        .filter(function() {
                            return this.text == faceA_get;
                        })
                        .attr("selected", true);
                } else {
                    $("#face_length_d option")
                        .filter(function() {
                            return this.text == faceD_get;
                        })
                        .attr("selected", true);
                }
            } else {
                $("#face_length_d option")
                    .filter(function() {
                        return this.text == faceA_get;
                    })
                    .attr("selected", true);
            }
            $("#optio_48_b").css("display", "block");
            $("#optio_54_b").css("display", "block");
            $("#optio_48_c").css("display", "block");
            $("#optio_54_c").css("display", "block");
            $("#optio_48_d").css("display", "block");
            $("#optio_54_d").css("display", "block");
            $(".customsame").css("display", "block");
            $(".instock").css("display", "none");
        }
        var customefaceB = $("#customefaceB").is(":checked");
        if (customefaceB) {
            var faceB_get = $('[name="face_length_b"]')
                .find("option:selected")
                .text();
            var faceB_get_val = $('[name="face_length_b"]')
                .find("option:selected")
                .val();
            var faceC_get = $('[name="face_length_c"]')
                .find("option:selected")
                .text();
            var faceC_get_val = $('[name="face_length_c"]')
                .find("option:selected")
                .val();
            var faceD_get = $('[name="face_length_d"]')
                .find("option:selected")
                .text();
            var faceD_get_val = $('[name="face_length_d"]')
                .find("option:selected")
                .val();
            if (faceC_get != "Custom") {
                if (faceC_get == "Select") {
                    form.face_length_c.value = faceB_get_val;
                    form.face_length_c.selected = faceB_get;
                } else {
                    form.face_length_c.value = faceC_get_val;
                    $('#face_length_c option[value="' + faceC_get_val + '"]').text(
                        faceC_get
                    );
                }
            }
            if (faceD_get != "Custom") {
                if (faceD_get == "Select") {
                    form.face_length_d.value = faceB_get_val;
                    form.face_length_d.selected = faceB_get;
                } else {
                    form.face_length_d.value = faceD_get_val;
                    $('#face_length_d option[value="' + faceD_get_val + '"]').text(
                        faceD_get
                    );
                }
            } else {
                form.face_length_c.value = faceB_get_val;
                $('#face_length_c option[value="' + faceB_get_val + '"]').text(
                    faceB_get
                );
                form.face_length_d.value = faceB_get_val;
                $('#face_length_d option[value="' + faceB_get_val + '"]').text(
                    faceB_get
                );
            }
            $("#checkboxbfor4bayB").attr("checked", true);
            $("#optio_48_b").css("display", "none");
            $("#optio_54_b").css("display", "none");
            $("#optio_48_c").css("display", "block");
            $("#optio_54_c").css("display", "block");
            $("#optio_48_d").css("display", "block");
            $("#optio_54_d").css("display", "block");
        } else {}

        var checkcheckedb1 = $("#checkboxbfor4bayB").is(":checked");
        if (checkcheckedb1) {
            var faceB_get = $('[name="face_length_b"]')
                .find("option:selected")
                .text();
            var faceB_get_val = $('[name="face_length_b"]')
                .find("option:selected")
                .val();
            var faceC_get = $('[name="face_length_c"]')
                .find("option:selected")
                .text();
            var faceC_get_val = $('[name="face_length_c"]')
                .find("option:selected")
                .val();
            var faceD_get = $('[name="face_length_d"]')
                .find("option:selected")
                .text();
            var faceD_get_val = $('[name="face_length_d"]')
                .find("option:selected")
                .val();

            if (faceC_get != "Custom") {
                if (faceC_get == '8"') {
                    $("#face_length_c option")
                        .filter(function() {
                            return this.text == faceB_get;
                        })
                        .attr("selected", true);
                } else {
                    $("#face_length_c option")
                        .filter(function() {
                            return this.text == faceC_get;
                        })
                        .attr("selected", true);
                }
            } else {
                $("#face_length_c option")
                    .filter(function() {
                        return this.text == faceB_get;
                    })
                    .attr("selected", true);
            }
            if (faceD_get != "Custom") {
                if (faceD_get == '8"') {
                    $("#face_length_d option")
                        .filter(function() {
                            return this.text == faceB_get;
                        })
                        .attr("selected", true);
                } else {
                    $("#face_length_d option")
                        .filter(function() {
                            return this.text == faceD_get;
                        })
                        .attr("selected", true);
                }
            } else {
                $("#face_length_d option")
                    .filter(function() {
                        return this.text == faceB_get;
                    })
                    .attr("selected", true);
            }
            $("#optio_48_b").css("display", "none");
            $("#optio_54_b").css("display", "none");
            $("#optio_48_c").css("display", "block");
            $("#optio_54_c").css("display", "block");
            $("#optio_48_d").css("display", "block");
            $("#optio_54_d").css("display", "block");
            $(".customsame").css("display", "block");
            $(".instock").css("display", "none");
        }

        var customefaceC = $("#customefaceC").is(":checked");
        if (customefaceC) {
            var faceC_get = $('[name="face_length_c"]')
                .find("option:selected")
                .text();
            var faceC_get_val = $('[name="face_length_c"]')
                .find("option:selected")
                .val();
            var faceD_get = $('[name="face_length_d"]')
                .find("option:selected")
                .text();
            var faceD_get_val = $('[name="face_length_d"]')
                .find("option:selected")
                .val();

            if (faceD_get != "Custom") {
                if (faceD_get == "Select") {
                    form.face_length_d.value = faceC_get_val;
                    form.face_length_d.selected = faceC_get;
                } else {
                    form.face_length_d.value = faceD_get_val;
                    $('#face_length_d option[value="' + faceD_get_val + '"]').text(
                        faceD_get
                    );
                }
            } else {
                form.face_length_c.value = faceC_get_val;
                $('#face_length_c option[value="' + faceC_get_val + '"]').text(
                    faceC_get
                );
                //form.face_length_c.disabled=true;

                form.face_length_d.value = faceC_get_val;
                $('#face_length_d option[value="' + faceC_get_val + '"]').text(
                    faceC_get
                );
                //form.face_length_d.disabled=true;
            }
            $("#checkboxbfor4bayC").attr("checked", true);
            //var option_cust='<option value="48">48"</option><option value="54">54"</option>';
            $("#optio_48_b").css("display", "none");
            $("#optio_54_b").css("display", "none");
            $("#optio_48_c").css("display", "none");
            $("#optio_54_c").css("display", "none");
            $("#optio_48_d").css("display", "block");
            $("#optio_54_d").css("display", "block");
        } else {}

        var checkcheckedb2 = $("#checkboxbfor4bayC").is(":checked");
        if (checkcheckedb2) {
            var faceC_get = $('[name="face_length_c"]')
                .find("option:selected")
                .text();
            var faceC_get_val = $('[name="face_length_c"]')
                .find("option:selected")
                .val();
            var faceD_get = $('[name="face_length_d"]')
                .find("option:selected")
                .text();
            var faceD_get_val = $('[name="face_length_d"]')
                .find("option:selected")
                .val();

            //if FacelengthD not same
            if (faceC_get != "Custom") {
                //form.face_length_c.value=faceC_get_val;
                //$('#face_length_c option[value="'+faceC_get_val+'"').text(faceC_get);
                form.face_length_c.selected = faceC_get_val;
            } else {
                form.face_length_c.value = faceC_get_val;
                $('#face_length_c option[value="' + faceC_get_val + '"]').text(
                    faceB_get
                );
                //form.face_length_c.disabled=true;
            }
            //if FacelengthD not same

            if (faceD_get != "Custom") {
                //$("#checkbfor4bayBnonsame").attr("checked",true);

                if (faceD_get == '8"') {
                    $("#face_length_d option")
                        .filter(function() {
                            return this.text == faceC_get;
                        })
                        .attr("selected", true);
                } else {
                    $("#face_length_d option")
                        .filter(function() {
                            return this.text == faceD_get;
                        })
                        .attr("selected", true);
                }
            } else {
                $("#face_length_d option")
                    .filter(function() {
                        return this.text == faceC_get;
                    })
                    .attr("selected", true);
            }

            //var option_cust='<option value="48">48"</option><option value="54">54"</option>';
            $("#optio_48_b").css("display", "none");
            $("#optio_54_b").css("display", "none");
            $("#optio_48_c").css("display", "none");
            $("#optio_54_c").css("display", "none");
            $("#optio_48_d").css("display", "block");
            $("#optio_54_d").css("display", "block");

            $(".customsame").css("display", "block");
            $(".instock").css("display", "none");
        }
    }
    if (type.value == "3BAY") {
        var customefaceA = $("#customefaceA").is(":checked");

        if (customefaceA) {
            var faceA_get = $('[name="face_length_a"]')
                .find("option:selected")
                .text();
            var faceA_get_val = $('[name="face_length_a"]')
                .find("option:selected")
                .val();
            var faceB_get = $('[name="face_length_b"]')
                .find("option:selected")
                .text();
            var faceB_get_val = $('[name="face_length_b"]')
                .find("option:selected")
                .val();
            var faceC_get = $('[name="face_length_c"]')
                .find("option:selected")
                .text();
            var faceC_get_val = $('[name="face_length_c"]')
                .find("option:selected")
                .val();

            //alert(faceB_get);
            if (faceB_get != "Custom") {
                //alert(faceB_get);
                if (faceB_get == "Select") {
                    form.face_length_b.value = faceA_get_val;
                    form.face_length_b.selected = faceA_get;
                    //$('#face_length_b option[value="'+faceA_get_val+'"]').text(faceA_get);
                } else {
                    form.face_length_b.value = faceB_get_val;
                    $('#face_length_b option[value="' + faceB_get_val + '"]').text(
                        faceB_get
                    );
                }
            }
            if (faceC_get != "Custom") {
                //alert(faceC_get);
                if (faceC_get == "Select") {
                    form.face_length_c.value = faceA_get_val;
                    form.face_length_c.selected = faceA_get;
                    //$('#face_length_c option[value="'+faceA_get_val+'"]').text(faceA_get);
                } else {
                    form.face_length_c.value = faceC_get_val;
                    $('#face_length_c option[value="' + faceC_get_val + '"]').text(
                        faceC_get
                    );
                }
            } else {
                form.face_length_b.value = faceA_get_val;
                $('#face_length_b option[value="' + faceA_get_val + '"]').text(
                    faceA_get
                );
                //form.face_length_b.disabled=true;

                form.face_length_c.value = faceA_get_val;
                $('#face_length_c option[value="' + faceA_get_val + '"]').text(
                    faceA_get
                );
                //form.face_length_c.disabled=true;
            }
            $("#checkboxbfor4bayA").attr("checked", true);
            //var option_cust='<option value="48">48"</option><option value="54">54"</option>';

            $("#optio_48_b").css("display", "block");
            $("#optio_54_b").css("display", "block");
            $("#optio_48_c").css("display", "block");
            $("#optio_54_c").css("display", "block");

            //$('#show_select_faceb_fora').css("display","block");
            //$('#face_length_b').css("display","none;");
            //$('#undefined').css("display","none;");

            //$('#show_select_faceb_fora').attr('name', 'other_amount');
        } else {}

        var checkcheckedb = $("#checkboxbfor4bayA").is(":checked");
        //alert(checkcheckedb);

        if (checkcheckedb) {
            var faceA_get = $('[name="face_length_a"]')
                .find("option:selected")
                .text();
            var faceA_get_val = $('[name="face_length_a"]')
                .find("option:selected")
                .val();
            var faceB_get = $('[name="face_length_b"]')
                .find("option:selected")
                .text();
            var faceB_get_val = $('[name="face_length_b"]')
                .find("option:selected")
                .val();
            var faceC_get = $('[name="face_length_c"]')
                .find("option:selected")
                .text();
            var faceC_get_val = $('[name="face_length_c"]')
                .find("option:selected")
                .val();

            //if FacelengthB not same
            if (faceB_get != "Custom") {
                //$("#checkbfor4bayBnonsame").attr("checked",true);

                if (faceB_get == '8"') {
                    $("#face_length_b option")
                        .filter(function() {
                            return this.text == faceA_get;
                        })
                        .attr("selected", true);
                } else {
                    $("#face_length_b option")
                        .filter(function() {
                            return this.text == faceB_get;
                        })
                        .attr("selected", true);
                }
            } else {
                $("#face_length_b option")
                    .filter(function() {
                        return this.text == faceA_get;
                    })
                    .attr("selected", true);
            }

            //alert(faceC_get);
            //if FacelengthC not same

            if (faceC_get != "Custom") {
                //$("#checkbfor4bayBnonsame").attr("checked",true);

                if (faceC_get == '8"') {
                    $("#face_length_c option")
                        .filter(function() {
                            return this.text == faceA_get;
                        })
                        .attr("selected", true);
                } else {
                    $("#face_length_c option")
                        .filter(function() {
                            return this.text == faceC_get;
                        })
                        .attr("selected", true);
                }
            } else {
                $("#face_length_c option")
                    .filter(function() {
                        return this.text == faceA_get;
                    })
                    .attr("selected", true);
            }

            //if FacelengthD not same

            $("#optio_48_b").css("display", "block");
            $("#optio_54_b").css("display", "block");
            $("#optio_48_c").css("display", "block");
            $("#optio_54_c").css("display", "block");

            $(".customsame").css("display", "block");
            $(".instock").css("display", "none");
        }

        var customefaceB = $("#customefaceB").is(":checked");
        if (customefaceB) {
            var faceB_get = $('[name="face_length_b"]')
                .find("option:selected")
                .text();
            var faceB_get_val = $('[name="face_length_b"]')
                .find("option:selected")
                .val();
            var faceC_get = $('[name="face_length_c"]')
                .find("option:selected")
                .text();
            var faceC_get_val = $('[name="face_length_c"]')
                .find("option:selected")
                .val();

            if (faceC_get != "Custom") {
                //alert(faceC_get);
                if (faceC_get == "Select") {
                    form.face_length_c.value = faceB_get_val;
                    form.face_length_c.selected = faceB_get;
                    //$('#face_length_c option[value="'+faceB_get_val+'"]').text(faceB_get);
                } else {
                    form.face_length_c.value = faceC_get_val;
                    $('#face_length_c option[value="' + faceC_get_val + '"]').text(
                        faceC_get
                    );
                }
            } else {
                form.face_length_c.value = faceB_get_val;
                $('#face_length_c option[value="' + faceB_get_val + '"]').text(
                    faceB_get
                );
                //form.face_length_c.disabled=true;
            }
            $("#checkboxbfor4bayB").attr("checked", true);
            //var option_cust='<option value="48">48"</option><option value="54">54"</option>';
            $("#optio_48_b").css("display", "none");
            $("#optio_54_b").css("display", "none");
            $("#optio_48_c").css("display", "block");
            $("#optio_54_c").css("display", "block");
            $("#optio_48_d").css("display", "block");
            $("#optio_54_d").css("display", "block");
        } else {}

        var checkcheckedb1 = $("#checkboxbfor4bayB").is(":checked");
        if (checkcheckedb1) {
            var faceB_get = $('[name="face_length_b"]')
                .find("option:selected")
                .text();
            var faceB_get_val = $('[name="face_length_b"]')
                .find("option:selected")
                .val();
            var faceC_get = $('[name="face_length_c"]')
                .find("option:selected")
                .text();
            var faceC_get_val = $('[name="face_length_c"]')
                .find("option:selected")
                .val();
            var faceD_get = $('[name="face_length_d"]')
                .find("option:selected")
                .text();
            var faceD_get_val = $('[name="face_length_d"]')
                .find("option:selected")
                .val();

            //alert(faceB_get);
            //alert(faceC_get);
            //alert(faceD_get);
            //if FacelengthC not same
            //alert(faceC_get);
            //if FacelengthC not same

            if (faceC_get != "Custom") {
                //$("#checkbfor4bayBnonsame").attr("checked",true);

                if (faceC_get == '8"') {
                    $("#face_length_c option")
                        .filter(function() {
                            return this.text == faceB_get;
                        })
                        .attr("selected", true);
                } else {
                    $("#face_length_c option")
                        .filter(function() {
                            return this.text == faceC_get;
                        })
                        .attr("selected", true);
                }
            } else {
                $("#face_length_c option")
                    .filter(function() {
                        return this.text == faceB_get;
                    })
                    .attr("selected", true);
            }

            //if FacelengthD not same

            //form.face_length_d.disabled=true;
            //var option_cust='<option value="48">48"</option><option value="54">54"</option>';
            $("#optio_48_b").css("display", "none");
            $("#optio_54_b").css("display", "none");
            $("#optio_48_c").css("display", "block");
            $("#optio_54_c").css("display", "block");

            $(".customsame").css("display", "block");
            $(".instock").css("display", "none");
        }
    }
    if (type.value == "2BAY") {
        var customefaceA = $("#customefaceA").is(":checked");

        if (customefaceA) {
            var faceA_get = $('[name="face_length_a"]')
                .find("option:selected")
                .text();
            var faceA_get_val = $('[name="face_length_a"]')
                .find("option:selected")
                .val();
            var faceB_get = $('[name="face_length_b"]')
                .find("option:selected")
                .text();
            var faceB_get_val = $('[name="face_length_b"]')
                .find("option:selected")
                .val();

            //alert(faceB_get);
            if (faceB_get != "Custom") {
                //alert(faceB_get);
                if (faceB_get == "Select") {
                    form.face_length_b.value = faceA_get_val;
                    form.face_length_b.selected = faceA_get;
                    //$('#face_length_b option[value="'+faceA_get_val+'"]').text(faceA_get);
                } else {
                    form.face_length_b.value = faceB_get_val;
                    $('#face_length_b option[value="' + faceB_get_val + '"]').text(
                        faceB_get
                    );
                }
            } else {
                form.face_length_b.value = faceA_get_val;
                $('#face_length_b option[value="' + faceA_get_val + '"]').text(
                    faceA_get
                );
                //form.face_length_b.disabled=true;
            }
            $("#checkboxbfor4bayA").attr("checked", true);
            //var option_cust='<option value="48">48"</option><option value="54">54"</option>';

            $("#optio_48_b").css("display", "block");
            $("#optio_54_b").css("display", "block");

            //$('#show_select_faceb_fora').css("display","block");
            //$('#face_length_b').css("display","none;");
            //$('#undefined').css("display","none;");

            //$('#show_select_faceb_fora').attr('name', 'other_amount');
        } else {}

        var checkcheckedb = $("#checkboxbfor4bayA").is(":checked");
        //alert(checkcheckedb);

        if (checkcheckedb) {
            var faceA_get = $('[name="face_length_a"]')
                .find("option:selected")
                .text();
            var faceA_get_val = $('[name="face_length_a"]')
                .find("option:selected")
                .val();
            var faceB_get = $('[name="face_length_b"]')
                .find("option:selected")
                .text();
            var faceB_get_val = $('[name="face_length_b"]')
                .find("option:selected")
                .val();

            //if FacelengthB not same
            if (faceB_get != "Custom") {
                //$("#checkbfor4bayBnonsame").attr("checked",true);

                if (faceB_get == '8"') {
                    $("#face_length_b option")
                        .filter(function() {
                            return this.text == faceA_get;
                        })
                        .attr("selected", true);
                } else {
                    $("#face_length_b option")
                        .filter(function() {
                            return this.text == faceB_get;
                        })
                        .attr("selected", true);
                }
            } else {
                $("#face_length_b option")
                    .filter(function() {
                        return this.text == faceA_get;
                    })
                    .attr("selected", true);
            }

            //if FacelengthD not same

            $("#optio_48_b").css("display", "block");
            $("#optio_54_b").css("display", "block");

            $(".customsame").css("display", "block");
            $(".instock").css("display", "none");
        }
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
    anglePost = "";
    leftEndPanel = "";
    rightEndPanel = "";
    flangeCovers = "";
    facePrice = 0;
    facePrice_a = 0;
    facePrice_b = 0;
    facePrice_c = 0;
    facePrice_d = 0;
    facePrice_l = 0;
    facePrice_r = 0;
    adjust_price = 0;
    leftPostPrice = 0;
    rightPostPrice = 0;
    leftEndPanelPrice = 0;
    rightEndPanelPrice = 0;
    centerPostPrice = 0;
    anglePostPrice = 0;
    flangeCoversPrice = 0;
    adjustable_name = "ES40 Adjustable Brackets (Pairs)";
    make_adjustable = form.adjustable.value;
    var iscustomimg = 0;
    right_lenght_obj = form.right_length;
    left_lenght_obj = form.left_length;
    post_height_obj = form.post_height;
    face_lenght_obj = form.face_length;
    face_lenght_a_obj = form.face_length_a;
    face_lenght_b_obj = form.face_length_b;
    face_lenght_c_obj = form.face_length_c;
    face_lenght_d_obj = form.face_length_d;
    type_obj = form.type;
    glass_face_obj = form.glass_face;
    corner_obj = form.rounded_corners;
    flange_covers_obj = form.flange_covers;

    flangeUnderCounter = "";
    flangeUnderCounterPrice = 0;
    flange_under_counter_obj = form.flange_under_counter;

    choose_finish_obj = form.choose_finish;
    foldername = getProductFolderName(category_name) + type_obj.value;
    if (flange_covers_obj.value == "yes") {
        flangeCovers = "test";
    }

    if (flange_under_counter_obj.value == "yes") {
        flangeUnderCounter = "test";
    }

    /*this is used for check post height*/
    if (post_height_obj == null || post_height_obj == "undefine") {
        //it will take  glass_face_obj value from input that is set on the ul>li click on top both/something see line no 352
        height = glass_face_obj.value;
    } else {
        height = post_height_obj.value;
    }
    /*this is used for check post height*/
    /*if category ep15 and custom post height choosen*/
    if (category_name == "EP15") {
        if ($("#customheight").is(":checked")) {
            height = post_height_obj.value;
        }
    }
    if (make_adjustable == "yes") {
        //alert(product_name_price[adjustable_name][1]);
        if (type_obj.value == "1BAY") {
            adjust_price = 1 * parseFloat(product_name_price[adjustable_name][1]);
        } else if (type_obj.value == "2BAY") {
            adjust_price = 2 * parseFloat(product_name_price[adjustable_name][1]);
        } else if (type_obj.value == "3BAY") {
            adjust_price = 3 * parseFloat(product_name_price[adjustable_name][1]);
        } else {
            adjust_price = 4 * parseFloat(product_name_price[adjustable_name][1]);
        }
    }
    leftEndPost = category_name + " Left Post " + choose_finish_obj.value;
    rightEndPost = category_name + " Right Post " + choose_finish_obj.value;
    //setting for both end
    if (glass_face_obj.value == 1) {
        if (category_name == "EP5" || category_name == "EP15") {
            glassName_l =
                category_name + "-" + height + " " + left_lenght_obj.value + '" Glass ';
            glassName_r =
                category_name +
                "-" +
                height +
                " " +
                right_lenght_obj.value +
                '" Glass ';
            anglePost =
                category_name +
                "-" +
                height +
                " 90 Degree " +
                (choose_finish_obj.value == "Brushed Aluminum" ?
                    "Brushed Aluminum" :
                    "Post " + choose_finish_obj.value);
            if (flange_covers_obj.value == "yes")
                flangeCovers =
                category_name +
                "-FLANGE COVER " +
                type_obj.value.slice(0, 1) +
                " BAY BOTH ENDS";
            if (corner_obj.value == "round") {
                glassName_l += "(Radiused Corners)";
                glassName_r += "(Radiused Corners)";
            } else {
                glassName_l += "(Squared Corners)";
                glassName_r += "(Squared Corners)";
            }
        } else {
            leftEndPanel =
                category_name + " Left End" + (category_name == "EP11" ? " Panel" : "");
            rightEndPanel =
                category_name +
                " Right End" +
                (category_name == "EP11" ? " Panel" : "");
        }
        imageName = "BOTHENDS";
    } //right closed end
    else if (glass_face_obj.value == 2) {
        if (category_name == "EP5" || category_name == "EP15") {
            glassName_r =
                category_name +
                "-" +
                height +
                " " +
                right_lenght_obj.value +
                '" Glass ';
            anglePost =
                category_name +
                "-" +
                height +
                " 90 Degree " +
                (choose_finish_obj.value == "Brushed Aluminum" ?
                    "Brushed Aluminum" :
                    "Post " + choose_finish_obj.value);
            if (flange_covers_obj.value == "yes")
                flangeCovers =
                category_name +
                "-FLANGE COVER " +
                type_obj.value.slice(0, 1) +
                " BAY RIGHT END";
            if (corner_obj.value == "round") {
                glassName_r += "(Radiused Corners)";
            } else {
                glassName_r += "(Squared Corners)";
            }
        } else {
            rightEndPanel =
                category_name +
                " Right End" +
                (category_name == "EP11" ? " Panel" : "");
        }
        imageName = "RIGHTEND";
    } //left closed panel
    else if (glass_face_obj.value == 3) {
        if (category_name == "EP5" || category_name == "EP15") {
            glassName_l =
                category_name + "-" + height + " " + left_lenght_obj.value + '" Glass ';
            anglePost =
                category_name +
                "-" +
                height +
                " 90 Degree " +
                (choose_finish_obj.value == "Brushed Aluminum" ?
                    "Brushed Aluminum" :
                    "Post " + choose_finish_obj.value);
            if (flange_covers_obj.value == "yes")
                flangeCovers =
                category_name +
                "-FLANGE COVER " +
                type_obj.value.slice(0, 1) +
                " BAY LEFT END";
            if (corner_obj.value == "round") {
                glassName_l += "(Radiused Corners)";
            } else {
                glassName_l += "(Squared Corners)";
            }
        } else {
            leftEndPanel =
                category_name + " Left End" + (category_name == "EP11" ? " Panel" : "");
        }
        imageName = "LEFTEND";
    } //no closed panel
    else if (glass_face_obj.value == 4) {
        if (flange_covers_obj != null && flange_covers_obj != "undefine") {
            if (flange_covers_obj.value == "yes") {
                flangeCovers =
                    category_name +
                    "-FLANGE COVER " +
                    type_obj.value.slice(0, 1) +
                    " BAY NO END";
            }
        }
        glassName_l = "";
        glassName_r = "";
        anglePost = "";
        leftEndPanel = "";
        rightEndPanel = "";
        imageName = "NOENDS";
    }
    if (type_obj.value == "4BAY") {
        if (
            face_lenght_a_obj.value > 42 ||
            face_lenght_b_obj.value > 42 ||
            face_lenght_c_obj.value > 42 ||
            face_lenght_d_obj.value > 42
        ) {
            wt = val;
        } else {
            wt = 1;
        }
    } else if (type_obj.value == "3BAY") {
        if (
            face_lenght_a_obj.value > 42 ||
            face_lenght_b_obj.value > 42 ||
            face_lenght_c_obj.value > 42
        ) {
            wt = val;
        } else {
            wt = 1;
        }
    } else if (type_obj.value == "2BAY") {
        if (face_lenght_a_obj.value > 42 || face_lenght_b_obj.value > 42) {
            wt = val;
        } else {
            wt = 1;
        }
    } else if (type_obj.value == "1BAY") {
        if (face_lenght_obj.value > 42) {
            wt = val;
        } else {
            wt = 1;
        }
    }
    if (face_lenght_obj != null && face_lenght_obj.value != "select") {
        if (face_lenght_obj.value != "No Glass") {
            if (category_name == "EP5" || category_name == "EP15") {
                glassName =
                    category_name +
                    "-" +
                    height +
                    " " +
                    face_lenght_obj.value +
                    '" Glass ' +
                    (corner_obj.value == "round" ?
                        "(Radiused Corners)" :
                        "(Squared Corners)");
            } else {
                glassName =
                    category_name +
                    " " +
                    face_lenght_obj.value +
                    '" Glass ' +
                    (corner_obj.value == "round" ?
                        "(Radiused Corners)" :
                        "(Squared Corners)");
            }
            /*ani code */
            if (
                category_name == "EP11" &&
                post_height_obj.value != "Instock" &&
                post_height_obj.value != "custom"
            ) {
                glassName =
                    category_name +
                    "-" +
                    height +
                    " " +
                    face_lenght_obj.value +
                    '" Glass ' +
                    (corner_obj.value == "round" ?
                        "(Radiused Corners)" :
                        "(Squared Corners)");
                iscustomimg = 1;
                //set the height of post div
            }
            //for ep12
            if (
                category_name == "EP12" &&
                post_height_obj.value != "Instock" &&
                post_height_obj.value != "custom"
            ) {
                glassName =
                    category_name +
                    "-" +
                    height +
                    " " +
                    face_lenght_obj.value +
                    '" Glass ' +
                    (corner_obj.value == "round" ?
                        "(Radiused Corners)" :
                        "(Squared Corners)");
                iscustomimg = 1;
                //set the height of post div
            }
            /*ani code */
        } else {
            //for seting if no glass selected
            flag = 0;
        }
        //alert(glassName);
    }
    //alert(glassName);
    if (face_lenght_a_obj != null && face_lenght_a_obj.value != "select") {
        if (face_lenght_a_obj.value != "No Glass") {
            if (category_name == "EP5" || category_name == "EP15") {
                glassName_a =
                    category_name +
                    "-" +
                    height +
                    " " +
                    face_lenght_a_obj.value +
                    '" Glass ' +
                    (corner_obj.value == "round" ?
                        "(Radiused Corners)" :
                        "(Squared Corners)");
            } else {
                glassName_a =
                    category_name +
                    " " +
                    face_lenght_a_obj.value +
                    '" Glass ' +
                    (corner_obj.value == "round" ?
                        "(Radiused Corners)" :
                        "(Squared Corners)");
            }
            /*ani code */
            if (
                category_name == "EP11" &&
                post_height_obj.value != "Instock" &&
                post_height_obj.value != "custom"
            ) {
                glassName_a =
                    category_name +
                    "-" +
                    height +
                    " " +
                    face_lenght_a_obj.value +
                    '" Glass ' +
                    (corner_obj.value == "round" ?
                        "(Radiused Corners)" :
                        "(Squared Corners)");
                iscustomimg = 1;
                //set the height of post div
            }
            //for ep 12
            if (
                category_name == "EP12" &&
                post_height_obj.value != "Instock" &&
                post_height_obj.value != "custom"
            ) {
                glassName_a =
                    category_name +
                    "-" +
                    height +
                    " " +
                    face_lenght_a_obj.value +
                    '" Glass ' +
                    (corner_obj.value == "round" ?
                        "(Radiused Corners)" :
                        "(Squared Corners)");
                iscustomimg = 1;
                //set the height of post div
            }
            /*ani code*/
        } else {
            flag = 0;
        }
    }
    if (face_lenght_b_obj != null && face_lenght_b_obj.value != "select") {
        if (face_lenght_b_obj.value != "No Glass") {
            if (category_name == "EP5" || category_name == "EP15") {
                glassName_b =
                    category_name +
                    "-" +
                    height +
                    " " +
                    face_lenght_b_obj.value +
                    '" Glass ' +
                    (corner_obj.value == "round" ?
                        "(Radiused Corners)" :
                        "(Squared Corners)");
            } else {
                glassName_b =
                    category_name +
                    " " +
                    face_lenght_b_obj.value +
                    '" Glass ' +
                    (corner_obj.value == "round" ?
                        "(Radiused Corners)" :
                        "(Squared Corners)");
            }
            /*ani code */
            if (
                category_name == "EP11" &&
                post_height_obj.value != "Instock" &&
                post_height_obj.value != "custom"
            ) {
                glassName_b =
                    category_name +
                    "-" +
                    height +
                    " " +
                    face_lenght_b_obj.value +
                    '" Glass ' +
                    (corner_obj.value == "round" ?
                        "(Radiused Corners)" :
                        "(Squared Corners)");
                iscustomimg = 1;
                //set the height of post div
            }
            if (
                category_name == "EP12" &&
                post_height_obj.value != "Instock" &&
                post_height_obj.value != "custom"
            ) {
                glassName_b =
                    category_name +
                    "-" +
                    height +
                    " " +
                    face_lenght_b_obj.value +
                    '" Glass ' +
                    (corner_obj.value == "round" ?
                        "(Radiused Corners)" :
                        "(Squared Corners)");
                iscustomimg = 1;
                //set the height of post div
            }
            /*ani code*/
        } else {
            flag = 0;
        }
    }
    if (face_lenght_c_obj != null && face_lenght_c_obj.value != "select") {
        if (face_lenght_c_obj.value != "No Glass") {
            if (category_name == "EP5" || category_name == "EP15") {
                glassName_c =
                    category_name +
                    "-" +
                    height +
                    " " +
                    face_lenght_c_obj.value +
                    '" Glass ' +
                    (corner_obj.value == "round" ?
                        "(Radiused Corners)" :
                        "(Squared Corners)");
            } else {
                glassName_c =
                    category_name +
                    " " +
                    face_lenght_c_obj.value +
                    '" Glass ' +
                    (corner_obj.value == "round" ?
                        "(Radiused Corners)" :
                        "(Squared Corners)");
            }
            /*ani code */
            if (
                category_name == "EP11" &&
                post_height_obj.value != "Instock" &&
                post_height_obj.value != "custom"
            ) {
                glassName_c =
                    category_name +
                    "-" +
                    height +
                    " " +
                    face_lenght_c_obj.value +
                    '" Glass ' +
                    (corner_obj.value == "round" ?
                        "(Radiused Corners)" :
                        "(Squared Corners)");
                iscustomimg = 1;
                //set the height of post div
            }
            if (
                category_name == "EP12" &&
                post_height_obj.value != "Instock" &&
                post_height_obj.value != "custom"
            ) {
                glassName_c =
                    category_name +
                    "-" +
                    height +
                    " " +
                    face_lenght_c_obj.value +
                    '" Glass ' +
                    (corner_obj.value == "round" ?
                        "(Radiused Corners)" :
                        "(Squared Corners)");
                iscustomimg = 1;
                //set the height of post div
            }
            /*ani code*/
        } else {
            flag = 0;
        }
    }
    if (face_lenght_d_obj != null && face_lenght_d_obj.value != "select") {
        if (face_lenght_d_obj.value != "No Glass") {
            if (category_name == "EP5" || category_name == "EP15") {
                glassName_d =
                    category_name +
                    "-" +
                    height +
                    " " +
                    face_lenght_d_obj.value +
                    '" Glass ' +
                    (corner_obj.value == "round" ?
                        "(Radiused Corners)" :
                        "(Squared Corners)");
            } else {
                glassName_d =
                    category_name +
                    " " +
                    face_lenght_d_obj.value +
                    '" Glass ' +
                    (corner_obj.value == "round" ?
                        "(Radiused Corners)" :
                        "(Squared Corners)");
            }
            if (
                category_name == "EP11" &&
                post_height_obj.value != "Instock" &&
                post_height_obj.value != "custom"
            ) {
                glassName_d =
                    category_name +
                    "-" +
                    height +
                    " " +
                    face_lenght_d_obj.value +
                    '" Glass ' +
                    (corner_obj.value == "round" ?
                        "(Radiused Corners)" :
                        "(Squared Corners)");
                iscustomimg = 1;
                //set the height of post div
            }
            if (
                category_name == "EP12" &&
                post_height_obj.value != "Instock" &&
                post_height_obj.value != "custom"
            ) {
                glassName_d =
                    category_name +
                    "-" +
                    height +
                    " " +
                    face_lenght_d_obj.value +
                    '" Glass ' +
                    (corner_obj.value == "round" ?
                        "(Radiused Corners)" :
                        "(Squared Corners)");
                iscustomimg = 1;
                //set the height of post div
            }
            /*ani code*/
        } else {
            flag = 0;
        }
    }
    if (post_height_obj != null) {
        if (category_name == "EP5") {
            leftEndPost =
                category_name + "-" + height + " End Post " + choose_finish_obj.value;
            rightEndPost =
                category_name + "-" + height + " End Post " + choose_finish_obj.value;
        }
    }
    if (type_obj != null) {
        if (type_obj.value == "4BAY") {
            if (category_name == "EP5" || category_name == "EP15") {
                centerPost =
                    category_name +
                    "-" +
                    height +
                    " Center " +
                    (choose_finish_obj.value == "Brushed Aluminum" ?
                        "Brushed Aluminum" :
                        "Post " + choose_finish_obj.value);
            } else {
                new_name = category_name;
                if (category_name == "EP22") {
                    new_name = "EP21";
                }
                centerPost = new_name + " Center Post " + choose_finish_obj.value;
            }
        }
        if (type_obj.value == "3BAY" || type_obj.value == "2BAY") {
            if (category_name == "EP5" || category_name == "EP15") {
                centerPost =
                    category_name +
                    "-" +
                    height +
                    " Center " +
                    (choose_finish_obj.value == "Brushed Aluminum" ?
                        "Brushed Aluminum" :
                        "Post " + choose_finish_obj.value);
            } else {
                new_name = category_name;
                if (category_name == "EP22") {
                    new_name = "EP21";
                }
                centerPost = new_name + " Center Post " + choose_finish_obj.value;
                //alert(centerPost)
            }
        }
    }

    if (category_name == "EP15") {
        imageName = "BOTHENDS";
    }
    if (corner_obj.value != "round") {
        imageName = "NORAD" + imageName;
    }
    if (flag == 0) {
        glassName = "";
        glassName_l = "";
        glassName_r = "";
        glassName_a = "";
        glassName_b = "";
        glassName_c = "";
        glassName_d = "";
        imageName =
            imageName.substr(0, 5) == "NORAD" ?
            imageName.substr(5, imageName.lenght) :
            imageName;
    }
    if (choose_finish_obj.value == "Powder Coated Black") {
        imageName = "BLACK" + imageName;
    }
    if (choose_finish_obj.value == "Brushed Aluminum") {
        imageName = "ALMN" + imageName;
    }
    if (flag == 0) {
        imageName = "NOGL" + imageName;
    }

    //if(iscustomimg==1){
    //			if(category_name=='EP11'){
    //				imageName='V'+imageName;
    //			}
    //			if(category_name=='EP12'){
    //				imageName='VERT'+imageName;
    //			}
    //
    //	   }

    //alert(glassName_a);	alert( imageName);
    /*alert(glassName_l);
      alert(glassName_r);
      alert(glassName_a);
      alert(glassName_b);
      alert(glassName_c);
      alert(leftEndPost);
      alert(leftEndPanel);
      alert(rightEndPanel);
      alert(rightEndPost);
      alert(centerPost);
      alert(anglePost);*/
    //alert(flag);

    var query_s = "";
    str = "";
    if (glassName != "") {
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[glassName][0] +
            '" />';
        facePrice = parseFloat(product_name_price[glassName][1]);
    }
    if (glassName_l != "") {
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[glassName_l][0] +
            '" />';
        facePrice_l = parseFloat(product_name_price[glassName_l][1]);
    }
    if (glassName_r != "") {
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[glassName_r][0] +
            '" />';
        facePrice_r = parseFloat(product_name_price[glassName_r][1]);
    }
    if (glassName_a != "") {
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[glassName_a][0] +
            '" />';
        facePrice_a = parseFloat(product_name_price[glassName_a][1]);
        if (face_lenght_a_obj.value <= 42 && wt != 1) {
            facePrice_a = Math.round(facePrice_a * wt);
            $("#c_glass_a_mult").val(wt);
        }
    }
    if (glassName_b != "") {
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[glassName_b][0] +
            '" />';
        facePrice_b = parseFloat(product_name_price[glassName_b][1]);
        if (face_lenght_b_obj.value <= 42 && wt != 1) {
            facePrice_b = Math.round(facePrice_b * wt);
            $("#c_glass_b_mult").val(wt);
        }
    }
    if (glassName_c != "") {
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[glassName_c][0] +
            '" />';
        facePrice_c = parseFloat(product_name_price[glassName_c][1]);
        if (face_lenght_c_obj.value <= 42 && wt != 1) {
            facePrice_c = Math.round(facePrice_c * wt);
            $("#c_glass_c_mult").val(wt);
        }
    }
    if (glassName_d != "") {
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[glassName_d][0] +
            '" />';
        facePrice_d = parseFloat(product_name_price[glassName_d][1]);
        if (face_lenght_d_obj.value <= 42 && wt != 1) {
            facePrice_d = Math.round(facePrice_d * wt);
            $("#c_glass_d_mult").val(wt);
        }
    }
    if (leftEndPost != "") {
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[leftEndPost][0] +
            '" />';
        leftPostPrice = parseFloat(product_name_price[leftEndPost][1]);
    }
    if (rightEndPost != "") {
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[rightEndPost][0] +
            '" />';
        rightPostPrice = parseFloat(product_name_price[rightEndPost][1]);
    }

    if (centerPost != "") {
        i = 0;
        j = 0;
        if (type_obj.value == "4BAY") {
            j = 3;
        }
        if (type_obj.value == "3BAY") {
            j = 2;
        }
        if (type_obj.value == "2BAY") {
            j = 1;
        }
        if (category_name == "EP12" || category_name == "EP22") {
            centerPost = centerPost;
        }
        while (i < j) {
            if (product_name_price[centerPost].length == 2) {
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[centerPost][0] +
                    '" />';
                centerPostPrice =
                    centerPostPrice + parseFloat(product_name_price[centerPost][1]);
                // alert(centerPostPrice)
            }
            i++;
        }
    }
    if (anglePost != "" && category_name == "EP5") {
        i = 0;
        j = 0;
        if (glass_face_obj.value == 1) {
            j = 2;
        }
        if (glass_face_obj.value == 2) {
            j = 1;
        }
        if (glass_face_obj.value == 3) {
            j = 1;
        }
        if (glass_face_obj.value == 4) {
            j = 0;
        }
        while (i < j) {
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[anglePost][0] +
                '" />';
            anglePostPrice =
                anglePostPrice + parseFloat(product_name_price[anglePost][1]);
            i++;
        }
    }
    if (make_adjustable == "yes") {
        if (type_obj.value == "1BAY") {
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[adjustable_name][0] +
                '" />';
        } else if (type_obj.value == "2BAY") {
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[adjustable_name][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[adjustable_name][0] +
                '" />';
        } else if (type_obj.value == "3BAY") {
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[adjustable_name][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[adjustable_name][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[adjustable_name][0] +
                '" />';
        } else {
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[adjustable_name][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[adjustable_name][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[adjustable_name][0] +
                '" />';
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[adjustable_name][0] +
                '" />';
        }
    }
    if (leftEndPanel != "") {
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[leftEndPanel][0] +
            '" />';
        leftEndPanelPrice = parseFloat(product_name_price[leftEndPanel][1]);
    }
    if (rightEndPanel != "") {
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[rightEndPanel][0] +
            '" />';
        rightEndPanelPrice = parseFloat(product_name_price[rightEndPanel][1]);
    }

    if (flangeCovers != "") {
        if (category_name == "ES40") {
            if (type_obj.value == "1BAY") {
                //flangeCovers="EP5-FLANGE COVER 2 PIECES";
                flangeCovers = "ES40-FLANGE COVER 1 PIECE";
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[flangeCovers][0] +
                    '" />';
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[flangeCovers][0] +
                    '" />';
                flangeCoversPrice = 2 * parseFloat(product_name_price[flangeCovers][1]);
            } else if (type_obj.value == "2BAY") {
                //flangeCovers="EP5-FLANGE COVER 3 PIECES";
                flangeCovers = "ES40-FLANGE COVER 1 PIECE";
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
                flangeCoversPrice = 3 * parseFloat(product_name_price[flangeCovers][1]);
            } else if (type_obj.value == "3BAY") {
                //flangeCovers="EP5-FLANGE COVER 4 PIECES";
                flangeCovers = "ES40-FLANGE COVER 1 PIECE";
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
                flangeCoversPrice = 4 * parseFloat(product_name_price[flangeCovers][1]);
            } else if (type_obj.value == "4BAY") {
                //flangeCovers="EP5-FLANGE COVER 4 PIECES";
                flangeCovers = "ES40-FLANGE COVER 1 PIECE";
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
                flangeCoversPrice = 5 * parseFloat(product_name_price[flangeCovers][1]);
            }
        }
        if (product_name_price[flangeCovers] != "undifine") {
            //str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';
            //flangeCoversPrice=parseFloat(product_name_price[flangeCovers][1]);
        }
    }

    if (flangeUnderCounter != "") {
        if (category_name == "ES40") {
            if (type_obj.value == "1BAY") {
                flangeUnderCounter = "ES40-UNDER COUNTER FLANGE 1 PIECE";
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[flangeUnderCounter][0] +
                    '" />';
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[flangeUnderCounter][0] +
                    '" />';
                flangeUnderCounterPrice =
                    2 * parseFloat(product_name_price[flangeUnderCounter][1]);
            } else if (type_obj.value == "2BAY") {
                flangeUnderCounter = "ES40-UNDER COUNTER FLANGE 1 PIECE";
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
                    3 * parseFloat(product_name_price[flangeUnderCounter][1]);
            } else if (type_obj.value == "3BAY") {
                flangeUnderCounter = "ES40-UNDER COUNTER FLANGE 1 PIECE";
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
                    4 * parseFloat(product_name_price[flangeUnderCounter][1]);
            } else if (type_obj.value == "4BAY") {
                flangeUnderCounter = "ES40-UNDER COUNTER FLANGE 1 PIECE";
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
                    5 * parseFloat(product_name_price[flangeUnderCounter][1]);
            }
        }
        if (product_name_price[flangeUnderCounter] != "undifine") {
            //str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeUnderCounter][0]+'" />';
            //flangeUnderCounterPrice=parseFloat(product_name_price[flangeUnderCounter][1]);
        }
    }

    //alert(type_obj.value+" "+glass_face_obj.value+" "+flangeCovers);
    glassPrice =
        facePrice +
        facePrice_l +
        facePrice_r +
        facePrice_a +
        facePrice_b +
        facePrice_c +
        facePrice_d;
    t_post_price = centerPostPrice + anglePostPrice;
    totalPrice =
        glassPrice +
        leftPostPrice +
        rightPostPrice +
        leftEndPanelPrice +
        rightEndPanelPrice +
        t_post_price +
        flangeCoversPrice +
        flangeUnderCounterPrice +
        adjust_price;
    if (form.adjustable.value == "yes") {
        //adding image of adjustable breckets!!
        //              alert(imageName);
        imageName = "ADJUST" + imageName;
    }
    img_ajx = imageName;

    image_string =
        '<img src="images/' +
        foldername +
        "/" +
        imageName +
        '.jpg" style="width:568px;height:453px;">';

    if (category_name == "EP5") {
        image_string += '<div class="left">12"</div><div class="right">12"</div>';
    }
    if (
        category_name == "EP5" ||
        category_name == "EP15" ||
        category_name == "EP12" ||
        category_name == "EP11"
    ) {
        image_string += '<div class="post">12"</div>';
    }
    image_string += '<div class="msgtishu"></div>';
    image_string += '<div class="msgtishu1"></div>';
    image_string += '<div class="msgtishu2"></div>';
    image_string +=
        '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="glass_d">12"</div><div class="total">38"</div>';
    document.getElementById("additional_image").innerHTML = image_string;
    if (type_obj.value == "1BAY") {
        //for custom face set value to hidden fileds
        if (face_lenght_obj.value != "select") {
            $("#c_glass_face_val").val(
                $('[name="face_length"]').find("option:selected").text()
            );
            if (glassName != "") {
                $("#c_glass_face").val(product_name_price[glassName][0]);
            }

            $("div.glass").text(
                $('[name="face_length"]').find("option:selected").text()
            );
        } else {
            $("div.glass").text("A");
        }

        var n1 =
            getBeforeChar($('[name="face_length"]').find("option:selected").text()) -
            0;
        if (
            getAfterChar($('[name="face_length"]').find("option:selected").text()) !=
            ""
        ) {
            n1 =
                n1 +
                2 +
                "-" +
                getAfterChar($('[name="face_length"]').find("option:selected").text()) +
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

        if (face_lenght_obj.value == "No Glass") {
            noGlass();
        }
    }
    if (type_obj.value == "2BAY") {
        if (face_lenght_a_obj.value != "select") {
            $("#c_glass_a_val").val(
                $('[name="face_length_a"]').find("option:selected").text()
            );
            if (glassName_a != "") {
                $("#c_glass_a").val(product_name_price[glassName_a][0]);
            }
            $("div.glass_a").text(
                $('[name="face_length_a"]').find("option:selected").text()
            );
        } else {
            $("div.glass_a").text("A");
        }
        if (face_lenght_b_obj.value != "select") {
            $("#c_glass_b_val").val(
                $('[name="face_length_b"]').find("option:selected").text()
            );
            if (glassName_b != "") {
                $("#c_glass_b").val(product_name_price[glassName_b][0]);
            }
            $("div.glass_b").text(
                $('[name="face_length_b"]').find("option:selected").text()
            );
        } else {
            $("div.glass_b").text("B");
        }

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

        if (
            face_lenght_a_obj.value == "No Glass" ||
            face_lenght_b_obj.value == "No Glass"
        ) {
            noGlass();
        }
    }
    if (type_obj.value == "3BAY") {
        if (face_lenght_a_obj.value != "select") {
            $("#c_glass_a_val").val(
                $('[name="face_length_a"]').find("option:selected").text()
            );
            if (glassName_a != "") {
                $("#c_glass_a").val(product_name_price[glassName_a][0]);
            }
            $("div.glass_a").text(
                $('[name="face_length_a"]').find("option:selected").text()
            );
        } else {
            $("div.glass_a").text("A");
        }
        if (face_lenght_b_obj.value != "select") {
            $("#c_glass_b_val").val(
                $('[name="face_length_b"]').find("option:selected").text()
            );
            if (glassName_b != "") {
                $("#c_glass_b").val(product_name_price[glassName_b][0]);
            }
            $("div.glass_b").text(
                $('[name="face_length_b"]').find("option:selected").text()
            );
        } else {
            $("div.glass_b").text("B");
        }
        if (face_lenght_c_obj.value != "select") {
            $("#c_glass_c_val").val(
                $('[name="face_length_c"]').find("option:selected").text()
            );
            if (glassName_c != "") {
                $("#c_glass_c").val(product_name_price[glassName_c][0]);
            }
            $("div.glass_c").text(
                $('[name="face_length_c"]').find("option:selected").text()
            );
        } else {
            $("div.glass_c").text("C");
        }
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
        if (total == '2"') {
            $("div.total").text('Total');
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
        if (face_lenght_a_obj.value != "select") {
            $("#c_glass_a_val").val(
                $('[name="face_length_a"]').find("option:selected").text()
            );
            if (glassName_a != "") {
                $("#c_glass_a").val(product_name_price[glassName_a][0]);
            }
            $("div.glass_a").text(
                $('[name="face_length_a"]').find("option:selected").text()
            );
        } else {
            $("div.glass_a").text("A");
        }
        if (face_lenght_b_obj.value != "select") {
            $("#c_glass_b_val").val(
                $('[name="face_length_b"]').find("option:selected").text()
            );
            if (glassName_b != "") {
                $("#c_glass_b").val(product_name_price[glassName_b][0]);
            }
            $("div.glass_b").text(
                $('[name="face_length_b"]').find("option:selected").text()
            );
        } else {
            $("div.glass_b").text("B");
        }
        if (face_lenght_c_obj.value != "select") {
            $("#c_glass_c_val").val(
                $('[name="face_length_c"]').find("option:selected").text()
            );
            if (glassName_c != "") {
                $("#c_glass_c").val(product_name_price[glassName_c][0]);
            }
            $("div.glass_c").text(
                $('[name="face_length_c"]').find("option:selected").text()
            );
        } else {
            $("div.glass_c").text("C");
        }
        if (face_lenght_d_obj.value != "select") {
            $("#c_glass_d_val").val(
                $('[name="face_length_d"]').find("option:selected").text()
            );
            if (glassName_d != "") {
                $("#c_glass_d").val(product_name_price[glassName_d][0]);
            }
            $("div.glass_d").text(
                $('[name="face_length_d"]').find("option:selected").text()
            );
        } else {
            $("div.glass_d").text("D");
        }
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
        //alert(f_n4);
        // alert(n4);
        var total = getTotal4Bay(n1, n2, n3, n4, f_n1, f_n2, f_n3, f_n4);
        if (total == '2"') {
            $("div.total").text("Total");
        } else {
            $("div.total").text(total);
            tot1 = total;
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
    document.getElementById("products_ids").innerHTML = str;
    document.getElementById("left-post").innerHTML = leftPostPrice + ".00";
    document.getElementById("right-post").innerHTML = rightPostPrice + ".00";
    document.getElementById("trasition-post").innerHTML = t_post_price + ".00";
    document.getElementById("face-glass").innerHTML = glassPrice + ".00";
    document.getElementById("total").innerHTML = "$&nbsp;" + totalPrice + ".00";
    document.getElementById("make-adjustable").innerHTML = adjust_price + ".00";
    // if(category_name=="EP5"){
    document.getElementById("flange-cover").innerHTML = flangeCoversPrice + ".00";

    //document.getElementById("flange-under-counter").innerHTML=flangeUnderCounterPrice+".00";

    //document.getElementById("flange-under-counter").innerHTML=flangeUnderCounterPrice+".00";

    document.getElementById("left-Panel").innerHTML = leftEndPanelPrice + ".00";
    document.getElementById("right-panel").innerHTML = rightEndPanelPrice + ".00";
    // }
    if (type_obj.value == "1BAY") {
        if (face_lenght_obj != null && face_lenght_obj.value == "select") {
            $("#glass_a_err").attr("src", "img/iconCheckOff.gif");
            four = false;
        } else {
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            four = true;
        }
        if (one && two && three && four) {
            //$("#froast").css("display","");
        } else {
            //$("#froast").css("display","none");
        }
    } else if (type_obj.value == "2BAY") {
        var foura = (fourb = false);
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
        var foura = (fourb = fourc = false);
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

    if (type_obj.value == "1BAY") {
        if (face_lenght_obj.value == "No Glass") {
            four = true;
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            $("#round_err").attr("src", "img/iconCheckOn.gif");
            seven = true;
            if (form.adjustable.value == "no") {
                corner_obj.value = "select";
            } else {
                corner_obj.value = "round";
            }
            corner_obj.disabled = true;
            seven = true;
        } else {
            if (form.adjustable.value == "no") {
                corner_obj.disabled = false;
            }
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
        if (
            face_lenght_a_obj.value == "No Glass" ||
            face_lenght_b_obj.value == "No Glass"
        ) {
            four = true;
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_b_err").attr("src", "img/iconCheckOn.gif");
            if (form.adjustable.value == "no") {
                corner_obj.value = "select";
            } else {
                corner_obj.value = "round";
            }
            corner_obj.disabled = true;
            $("#round_err").attr("src", "img/iconCheckOn.gif");
            seven = true;
        } else {
            if (form.adjustable.value == "no") {
                corner_obj.disabled = false;
            }
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
        if (
            face_lenght_a_obj.value == "No Glass" ||
            face_lenght_b_obj.value == "No Glass" ||
            face_lenght_c_obj.value == "No Glass"
        ) {
            four = true;
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_b_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_c_err").attr("src", "img/iconCheckOn.gif");
            if (form.adjustable.value == "no") {
                corner_obj.value = "select";
            } else {
                corner_obj.value = "round";
            }
            corner_obj.disabled = true;
            $("#round_err").attr("src", "img/iconCheckOn.gif");
            seven = true;
        } else {
            if (form.adjustable.value == "no") {
                corner_obj.disabled = false;
            }
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
        if (
            face_lenght_a_obj.value == "No Glass" ||
            face_lenght_b_obj.value == "No Glass" ||
            face_lenght_c_obj.value == "No Glass" ||
            face_lenght_d_obj.value == "No Glass"
        ) {
            four = true;
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_b_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_c_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_d_err").attr("src", "img/iconCheckOn.gif");
            if (form.adjustable.value == "no") {
                corner_obj.value = "select";
            } else {
                corner_obj.value = "round";
            }
            corner_obj.disabled = true;
            $("#round_err").attr("src", "img/iconCheckOn.gif");
            seven = true;
        } else {
            if (form.adjustable.value == "no") {
                corner_obj.disabled = false;
            }
            if (corner_obj.value == "select") {
                $("#round_err").attr("src", "img/iconCheckOff.gif");
                seven = false;
            } else {
                $("#round_err").attr("src", "img/iconCheckOn.gif");
                seven = true;
            }
        }
    }
    // if(corner_obj.value=="select"){
    //     $("#round_err").attr("src","img/iconCheckOff.gif");
    //     seven=false;
    // }else{
    //     $("#round_err").attr("src","img/iconCheckOn.gif");
    //     seven=true;
    // }
    if (choose_finish_obj.value == "select") {
        $("#finish_err").attr("src", "img/iconCheckOff.gif");
        eight = false;
    } else {
        $("#finish_err").attr("src", "img/iconCheckOn.gif");
        eight = true;
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
    if (zero && four && five && seven && eight) {
        //$("#add").removeAttr("disabled");
        //$("#add").css("opacity","1");
    } else {
        //$("#add").css("opacity","0.3");
    }
}

leftstr =
    '<td><h1>Left Length</h1><span id="left_length_span"><select name="left_length" onchange="getPriceOfProduct(this.form)" id="left_length"  disabled="disabled" class="usecustom"> <option value="12">12"</option><option value="18">18"</option><option value="24">24"</option><option value="30">30"</option><option value="36">36"</option><option value="42">42"</option><option value="custom">Custom</option><option value="" style="display:none;">Custom</option></span></select></td>';
rightstr =
    '<td><h1>Right Length</h1><span id="right_length_span"><select name="right_length" onchange="getPriceOfProduct(this.form)" id="right_length" disabled="disabled" class="usecustom"> <option value="12">12"</option><option value="18">18"</option><option value="24">24"</option><option value="30">30"</option><option value="36">36"</option><option value="42">42"</option><option value="custom">Custom</option><option value="" style="display:none;">Custom</option></span></select></td>';
$(document).ready(function() {
    /*ani code for custom checkbox check*/

    $("ul.option1 li").toggle(
        function() {
            $("ul.option li").eq(2).click();
            $("#customheight").attr("Checked", "Checked");
            //doPostChange();
            $(".delete1").click();
        },
        function() {
            $("#customheight").removeAttr("Checked");
            doPostChange();
        }
    );

    $(".item .delete1").click(function() {
        var elem = $(this).closest(".item");

        $.confirm({
            title: "Confirmation",
            message: '<span align="right" ><img src="jquery.confirm/' +
                category_name +
                '.jpg" style="float:right;"><span style="width:250px;display:block;text-align:justify;">' +
                ms_post +
                "",
            buttons: {
                Proceed: {
                    class: "blue",
                    action: function() {
                        doPostChange();
                    },
                },
                Cancel: {
                    class: "gray",
                    action: function() {}, // Nothing to do in this case. You can as well omit the action property.
                },
            },
        });
    });

    function doPostChange() {
        if ($("#customheight").is(":checked")) {
            var my_facelengt_select = "";
            $(".usecustom").each(function() {
                checkfopost = 0;
                my_facelengt_select = "";
                my_facelengt_select +=
                    '<select name="' +
                    $(this).attr("name") +
                    '" onchange="getPriceOfProduct(this.form)" >';
                $('[name="' + $(this).attr("name") + '"] > option').each(function() {
                    if ($(this).val() != "custom") {
                        my_facelengt_select +=
                            '<option value="' +
                            $(this).val() +
                            '" style="display:none;">' +
                            $(this).val() +
                            '"</option>';
                    } else {
                        my_facelengt_select +=
                            '<option value="select" selected="selected" >Select</option>';
                        my_facelengt_select += '<option value="custom">Custom</option>';
                        my_facelengt_select += '<option value="No Glass">No Glass</option>';
                        my_facelengt_select +=
                            '<option value="" style="display:none;">Custom</option>';
                        return false;
                    }
                });

                $("#" + $(this).attr("name") + "_span").html(my_facelengt_select);
            });
            var my_facelengt_select = "";

            my_facelengt_select =
                '<select name="post_height" id="post_height" onchange="getPriceOfProduct(this.form)" >';
            var myArray = new Array("", "18", "22", "26", "");
            var i = 1;

            var j = 0;
            for (i = 8; i < myArray[1]; i++) {
                my_facelengt_select +=
                    '<option value="' + myArray[1] + '">' + i + '"</option>';
                my_facelengt_select +=
                    '<option value="' + myArray[1] + '">' + i + "-1/4" + '"</option>';
                my_facelengt_select +=
                    '<option value="' + myArray[1] + '">' + i + "-1/2" + '"</option>';
                my_facelengt_select +=
                    '<option value="' + myArray[1] + '">' + i + "-3/4" + '"</option>';
                j = i;
            }

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
                        '<option value="' +
                        myArray[i + 1] +
                        '">' +
                        j +
                        "-1/4" +
                        '"</option>';
                    my_facelengt_select +=
                        '<option value="' +
                        myArray[i + 1] +
                        '">' +
                        j +
                        "-1/2" +
                        '"</option>';
                    my_facelengt_select +=
                        '<option value="' +
                        myArray[i + 1] +
                        '">' +
                        j +
                        "-3/4" +
                        '"</option>';
                }
            }
            for (i = 26; i < 30; i++) {
                my_facelengt_select += '<option value="' + 26 + '">' + i + '"</option>';
                my_facelengt_select +=
                    '<option value="' + 26 + '">' + i + "-1/4" + '"</option>';
                my_facelengt_select +=
                    '<option value="' + 26 + '">' + i + "-1/2" + '"</option>';
                my_facelengt_select +=
                    '<option value="' + 26 + '">' + i + "-3/4" + '"</option>';
                j = i;
            }
            my_facelengt_select += '<option value="' + 26 + '">' + 30 + '"</option>';
            //my_facelengt_select+='<option value="'+myArray[i]+'">'+myArray[i]+'"</option>';

            $("#postcustom").html(my_facelengt_select);

            $("#is_custom").val("Yes");

            $("ul.option-panel").css("visibility", "hidden");
            var checkall = true;
            if ($('select[name="face_length"]').length) {
                $(".glass").text(
                    $('[name="face_length"]').find("option:selected").text()
                );
                if (
                    $('[name="face_length"]').find("option:selected").text() == "Select"
                ) {
                    checkall = false;
                }
            }
            if ($('select[name="post_height"]').length) {
                $(".post").text(
                    $('[name="post_height"]').find("option:selected").text()
                );
                if (
                    $('[name="post_height"]').find("option:selected").text() == "Select"
                ) {
                    checkall = false;
                }
            }
            if ($('select[name="left_length"]').length) {
                $(".left").text(
                    $('[name="left_length"]').find("option:selected").text()
                );
                if (
                    $('[name="left_length"]').find("option:selected").text() == "Select"
                ) {
                    checkall = false;
                }
            }
            if ($('select[name="right_length"]').length) {
                $(".right").text(
                    $('[name="right_length"]').find("option:selected").text()
                );
                if (
                    $('[name="right_length"]').find("option:selected").text() == "Select"
                ) {
                    checkall = false;
                }
            }

            if ($('select[name="face_length_a"]').length) {
                $(".glass_a").text(
                    $('[name="face_length_a"]').find("option:selected").text()
                );
                if (
                    $('[name="face_length_a"]').find("option:selected").text() == "Select"
                ) {
                    checkall = false;
                }
            }
            if ($('select[name="face_length_b"]').length) {
                $(".glass_b").text(
                    $('[name="face_length_b"]').find("option:selected").text()
                );
                if (
                    $('[name="face_length_b"]').find("option:selected").text() == "Select"
                ) {
                    checkall = false;
                }
            }
            if ($('select[name="face_length_c"]').length) {
                $(".glass_c").text(
                    $('[name="face_length_c"]').find("option:selected").text()
                );
                if (
                    $('[name="face_length_c"]').find("option:selected").text() == "Select"
                ) {
                    checkall = false;
                }
            }
            if ($('select[name="face_length_d"]').length) {
                $(".glass_d").text(
                    $('[name="face_length_d"]').find("option:selected").text()
                );
                if (
                    $('[name="face_length_d"]').find("option:selected").text() == "Select"
                ) {
                    checkall = false;
                }
            }

            $("#is_custom").val("Yes");
            if (checkall) {
                $("#ckall").val(true);
                getPriceOfProduct(document.forms["cart_quantity"]);
            } else {
                $("#ckall").val(false);
                $(".total").text("Select");
            }
        } else {
            $("#postcustom").html("");
            $("ul.option li").eq(0).click();
            $("ul.option").css("visibility", "visible");
            $("ul.option1 li").removeClass("selected");
        }
    }

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

function makeAdjustable(form) {
    //third make adjustable option!!
    //alert(category_name);
    if (form.adjustable.value == "yes") {
        form.rounded_corners.value = "round";
        form.rounded_corners.selected = "Rounded";
        form.rounded_corners.disabled = true;

        $(document).ready(function() {
            var elem = $(this).closest(".item");
            $.confirm({
                title: "Confirmation",
                message: ms_adjustable,
                buttons: {
                    Proceed: {
                        class: "blue",
                        action: function() {
                            getPriceOfProduct(document.forms["cart_quantity"]);
                        },
                    },
                    Cancel: {
                        class: "gray",
                        action: function() {
                            form.adjustable.value = "no";
                            form.adjustable.selected = "No";
                            form.rounded_corners.value = "squared";
                            form.rounded_corners.selected = "Squared";
                            form.rounded_corners.disabled = false;

                            getPriceOfProduct(document.forms["cart_quantity"]);
                        }, // Nothing to do in this case. You can as well omit the action property.
                    },
                },
            });
        });
    } else {
        form.rounded_corners.value = "squared";
        form.rounded_corners.selected = "Squared";
        form.rounded_corners.disabled = false;
    }
}

function getProductFolderName(productname) {
    foldername = "";
    switch (productname) {
        case "ES40":
            {
                foldername = "ES-40";
                break;
            }
    }
    return foldername;
}

function nogl(form, el, val) {
    var valcheck = document.getElementById("checkformorethan42").checked;
    //var valcheck=$('#checkformorethan42').val();
    //alert(valcheck);

    if (valcheck) {} else {
        if (val > 42) {
            var elem = $(this).closest(".item");
            $.confirm({
                title: "Confirmation",
                message: ms_glass,
                buttons: {
                    cnfrm: {
                        title: "I Agree",
                        class: "tick",
                        action: function() {},
                    },
                    Proceeded: {
                        class: "blue",
                        action: function() {
                            getPriceOfProduct(document.forms["cart_quantity"]);
                        },
                    },
                    Canceled: {
                        class: "gray",
                        action: function() {
                            $("select[name=" + el + "]")[0].selectedIndex = 0;
                            getPriceOfProduct(document.forms["cart_quantity"]);
                        }, // Making the first option selected!!
                    },
                },
            });
        }
    }

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
        '<input type="button" onclick="getPriceOfProduct(this.form);" style="margin: 0 4px;position: absolute;right: -615px;top: -160px;width: 20px;z-index: 1000000;" value="X" class="rounded-corner-image">';

    image_string =
        '<img src="images/' +
        foldername +
        "/" +
        imageName +
        '.jpg" style="width:568px;height:453px;">';

    document.getElementById("additional_image").innerHTML = image_string;
    document.getElementById("ro").innerHTML = cross;
}

function finishImage(form, image) {
    category_name = category_name;
    foldername = getProductFolderName(category_name);
    if (image != "") {
        imageName = image;
    }

    cross =
        '<input type="button" onclick="getPriceOfProduct(this.form);" style="margin: 0 4px;position: absolute;right: -615px;top: -160px;width: 20px;z-index: 1000000;" value="X" class="rounded-corner-image">';

    image_string =
        '<img src="images/' + imageName + '" style="width:568px;height:453px">';

    //        alert(image_string);

    document.getElementById("additional_image").innerHTML = image_string;
    document.getElementById("ro").innerHTML = cross;
}

function changeGlassImage1(form, type) {
    foldername = getProductFolderName(category_name) + form.type.value;
    imageName = "";
    if (form.rounded_corners.value == 0) {
        imageName = "GLASSNORAD.jpg";
    } else {
        imageName = "GLASS.jpg";
    }
    image_string =
        '<img src="images/' +
        foldername +
        "/" +
        imageName +
        '" style="width:100%"><div id="top"></div><div id="bottom"></div><div id="left1"></div>';
    document.getElementById("additional_image").innerHTML = image_string;
    if (type == "G") {
        document.getElementById("top").innerHTML =
            parseInt(form.face_length.value) - 2 + ' 1/8"';
        document.getElementById("bottom").innerHTML =
            parseInt(form.face_length.value) - 2 + ' 1/8"';
    } else if (type == "A") {
        document.getElementById("top").innerHTML =
            parseInt(form.face_length_a.value) - 2 + ' 1/8"';
        document.getElementById("bottom").innerHTML =
            parseInt(form.face_length_a.value) - 2 + ' 1/8"';
        if (category_name == "EP15") {
            document.getElementById("left1").innerHTML =
                parseInt(form.glass_face.value) - 2 + ' 1/2"';
        }
        if (category_name == "EP5") {
            document.getElementById("left1").innerHTML =
                parseInt(form.post_height.value) - 2 + ' 1/2"';
        }
    } else if (type == "B") {
        document.getElementById("top").innerHTML =
            parseInt(form.face_length_b.value) - 2 + ' 1/8"';
        document.getElementById("bottom").innerHTML =
            parseInt(form.face_length_b.value) - 2 + ' 1/8"';
        if (category_name == "EP15") {
            document.getElementById("left1").innerHTML =
                parseInt(form.glass_face.value) - 2 + ' 1/2"';
        }
        if (category_name == "EP5") {
            document.getElementById("left1").innerHTML =
                parseInt(form.post_height.value) - 2 + ' 1/2"';
        }
    } else if (type == "C") {
        document.getElementById("top").innerHTML =
            parseInt(form.face_length_c.value) - 2 + ' 1/8"';
        document.getElementById("bottom").innerHTML =
            parseInt(form.face_length_c.value) - 2 + ' 1/8"';
        if (category_name == "EP15") {
            document.getElementById("left1").innerHTML =
                parseInt(form.glass_face.value) - 2 + ' 1/2"';
        }
        if (category_name == "EP5") {
            document.getElementById("left1").innerHTML =
                parseInt(form.post_height.value) - 2 + ' 1/2"';
        }
    } else if (type == "D") {
        document.getElementById("top").innerHTML =
            parseInt(form.face_length_d.value) - 2 + ' 1/8"';
        document.getElementById("bottom").innerHTML =
            parseInt(form.face_length_d.value) - 2 + ' 1/8"';
        if (category_name == "EP15") {
            document.getElementById("left1").innerHTML =
                parseInt(form.glass_face.value) - 2 + ' 1/2"';
        }
        if (category_name == "EP5") {
            document.getElementById("left1").innerHTML =
                parseInt(form.post_height.value) - 2 + ' 1/2"';
        }
    } else if (type == "L") {
        document.getElementById("left1").innerHTML =
            parseInt(form.post_height.value) - 2 + ' 1/2"';
        document.getElementById("top").innerHTML =
            parseInt(form.left_length.value) - 2 + ' 1/8"';
    } else if (type == "R") {
        document.getElementById("left1").innerHTML =
            parseInt(form.post_height.value) - 2 + ' 1/2"';
        document.getElementById("top").innerHTML =
            parseInt(form.right_length.value) - 2 + ' 1/8"';
    }
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

function myFunction(form) {
    var check = (ck = true);
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
    if ($("#end_options").val() == "select") {
        x += '<li>End Panels <span style="color:red">?</span></li>';
        check = false;
    }
    if (form.flange_covers.value == "select") {
        x += '<li>Flange Covers <span style="color:red">?</span></li>';
        check = false;
    }
    if (form.rounded_corners.value == "select" && ck) {
        x += '<li>Glass Corners <span style="color:red">?</span></li>';
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

        flange = form.flange_covers.options[form.flange_covers.selectedIndex].text;
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
                // $("form[name='cart_quantity']").submit();

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
                                                                form.flange_covers.value="no";
                                                            form.flange_covers.selected="No";
                                                            getPriceOfProduct(form);
                                                                     //$('#add_more_bay').val('1');
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
    $(".item .delete3").click(function() {
        var elem = $(this).closest(".item");

        $.confirm({
            title: "Confirmation",
            message: "Please select face length",
            buttons: {
                Proceed: {
                    class: "blue",
                    action: function() {
                        return false;
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
        $(".gray").css("display", "none");
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
    $("input#glass-face").val(4);
    // this.forms.cart_quantity.rounded_corners.value="squared";
    // this.forms.cart_quantity.rounded_corners.selected="Squared";

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
            $("#endpan_err").attr("src", "img/iconCheckOff.gif");
            $("input#glass-face").val(4);
            zero = false;
            getPriceOfProduct(document.forms["cart_quantity"]);
        }
    });
    getPriceOfProduct(document.forms["cart_quantity"]);

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

    $("tr#left_lenght").css("display", "none");
    $("tr#right_lenght").css("display", "none");

    getPriceOfProduct(document.forms["cart_quantity"]);
}

function noGlass() {
    $("div.left").text("");
    $("div.right").text("");
    $("div.glass").text("");
    $("div.glass_a").text("");
    $("div.glass_b").text("");
    $("div.glass_c").text("");
    $("div.glass_d").text("");
    $("div.total").text("");
    $("#c_glass_right_val").val("");
    $("#c_glass_right").val("");
    $("#c_glass_left_val").val("");
    $("#c_glass_left").val("");
    $("#c_glass_face_val").val("");
    $("#c_glass_face").val("");
    $("#c_glass_a_val").val("");
    $("#c_glass_a").val("");
    $("#c_glass_b_val").val("");
    $("#c_glass_b").val("");
    $("#c_glass_c_val").val("");
    $("#c_glass_c").val("");
    $("#c_glass_d_val").val("");
    $("#c_glass_d").val("");
}

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
    // $(".test-hide").css("opacity","0.5")
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

function jsconfirm($msg, category_name, ispost, custom, post) {
    $.confirm({
        title: "Confirmation",
        message: $msg,
        buttons: {
            Proceed: {
                class: "blue",
                action: function() {
                    var lastmin = 0;
                    var c = 0;
                    $("#is_custom").val("Yes");
                    if (post == "yes") {
                        $(".usecustom").each(function() {
                            checkfopost = 0;
                            my_facelengt_select = "";
                            my_facelengt_select +=
                                '<select name="' +
                                $(this).attr("name") +
                                '" id="' +
                                $(this).attr("name") +
                                '"  onchange="getPriceOfProduct(this.form)" >';
                            $('[name="' + $(this).attr("name") + '"] > option').each(
                                function() {
                                    if ($(this).val() != "custom") {
                                        my_facelengt_select +=
                                            '<option value="' +
                                            $(this).val() +
                                            '" style="display:none;">' +
                                            $(this).val() +
                                            '"</option>';
                                    } else {
                                        my_facelengt_select +=
                                            '<option value="12" selected="selected" >Select</option>';
                                        my_facelengt_select +=
                                            '<option value="custom">Custom</option>';
                                        my_facelengt_select +=
                                            '<option value="No Glass">No Glass</option>';
                                        my_facelengt_select +=
                                            '<option value="" style="display:none;">Custom</option>';
                                        return false;
                                    }
                                }
                            );

                            $("#" + $(this).attr("name") + "_span").html(my_facelengt_select);
                        });
                        ispost = true;
                        c = 1;
                    }
                    if (ispost && c == 0) {
                        lastmin = 4;
                    } else {
                        lastmin = 2;
                    }

                    my_facelengt_select = "";
                    my_facelengt_select +=
                        '<select name="' +
                        custom.attr("name") +
                        '" id="' +
                        $(this).attr("name") +
                        '"  onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);" >';
                    //	my_facelengt_simple_select+='<select name="face_length" onchange="getPriceOfProduct(this.form)" >';
                    var myArray = new Array();
                    var i = 1;
                    $('[name="' + custom.attr("name") + '"] > option').each(function() {
                        if ($(this).val() == 48 || $(this).val() == 54) {} else {
                            //alert($(this).val());
                            if ($(this).val() != "custom") {
                                myArray[i] = $(this).val();
                                i++;
                            }
                        }
                    });
                    /*for ep 11 category post height*/
                    if (post == "yes") {
                        if (category_name == "EP11" || category_name == "EP12") {
                            myArray = new Array("", "12", "18", "22", "");
                        } else {
                            var j = 0;
                            for (i = 8; i < myArray[1]; i++) {
                                my_facelengt_select +=
                                    '<option value="' + myArray[1] + '">' + i + '"</option>';
                                my_facelengt_select +=
                                    '<option value="' +
                                    myArray[1] +
                                    '">' +
                                    i +
                                    "-1/4" +
                                    '"</option>';
                                my_facelengt_select +=
                                    '<option value="' +
                                    myArray[1] +
                                    '">' +
                                    i +
                                    "-1/2" +
                                    '"</option>';
                                my_facelengt_select +=
                                    '<option value="' +
                                    myArray[1] +
                                    '">' +
                                    i +
                                    "-3/4" +
                                    '"</option>';
                                j = i;
                            }
                        }
                    } else {
                        /* 
                                                                //before change custom
                                                                var j=0;
                                                                for (i=8;i<myArray[2];i++){
                                                                
                                                                    my_facelengt_select+='<option value="'+myArray[2]+'">'+i+'"</option>';
                                                                    my_facelengt_select+='<option value="'+myArray[2]+'">'+i+'-1/4'+'"</option>';
                                                                    my_facelengt_select+='<option value="'+myArray[2]+'">'+i+'-1/2'+'"</option>';
                                                                    my_facelengt_select+='<option value="'+myArray[2]+'">'+i+'-3/4'+'"</option>';
                                                                    j=i;
                                                                }
                                                                }
                                                                for(i=1;i< myArray.length-lastmin;i++){
                                                                    for(j=myArray[i];j<myArray[i+1];j++){
                                                                        if(j>myArray[i]){
                                                                            my_facelengt_select+='<option value="'+myArray[i+1]+'">'+j+'"</option>';
                                                                        }else
                                                                        {
                                                                            my_facelengt_select+='<option value="'+myArray[i]+'">'+j+'"</option>';	
                                                                        }
                                                                        my_facelengt_select+='<option value="'+myArray[i+1]+'">'+j+'-1/4'+'"</option>';
                                                                        my_facelengt_select+='<option value="'+myArray[i+1]+'">'+j+'-1/2'+'"</option>';
                                                                        my_facelengt_select+='<option value="'+myArray[i+1]+'">'+j+'-3/4'+'"</option>';
                                                                    }
                                                                }
                                                                */
                        var j = 0;
                        //for (i=8;i<myArray[1];i++){

                        my_facelengt_select += '<option value="12">8"</option>';
                        my_facelengt_select += '<option value="12">8-1/4"</option>';
                        my_facelengt_select += '<option value="12">8-1/2"</option>';
                        my_facelengt_select += '<option value="12">8-3/4"</option>';
                        my_facelengt_select += '<option value="12">9"</option>';
                        my_facelengt_select += '<option value="12">9-1/4"</option>';
                        my_facelengt_select += '<option value="12">9-1/2"</option>';
                        my_facelengt_select += '<option value="12">9-3/4"</option>';
                        my_facelengt_select += '<option value="12">10"</option>';
                        my_facelengt_select += '<option value="12">10-1/4"</option>';
                        my_facelengt_select += '<option value="12">10-1/2"</option>';
                        my_facelengt_select += '<option value="12">10-3/4"</option>';
                        my_facelengt_select += '<option value="12">11"</option>';
                        my_facelengt_select += '<option value="12">11-1/4"</option>';
                        my_facelengt_select += '<option value="12">11-1/2"</option>';
                        my_facelengt_select += '<option value="12">11-3/4"</option>';
                        my_facelengt_select += '<option value="12">12"</option>';
                        my_facelengt_select += '<option value="18">12-1/4"</option>';
                        my_facelengt_select += '<option value="18">12-1/2"</option>';
                        my_facelengt_select += '<option value="18">12-3/4"</option>';
                        my_facelengt_select += '<option value="18">13"</option>';
                        my_facelengt_select += '<option value="18">13-1/4"</option>';
                        my_facelengt_select += '<option value="18">13-1/2"</option>';
                        my_facelengt_select += '<option value="18">13-3/4"</option>';
                        my_facelengt_select += '<option value="18">14"</option>';
                        my_facelengt_select += '<option value="18">14-1/4"</option>';
                        my_facelengt_select += '<option value="18">14-1/2"</option>';
                        my_facelengt_select += '<option value="18">14-3/4"</option>';
                        my_facelengt_select += '<option value="18">15"</option>';
                        my_facelengt_select += '<option value="18">15-1/4"</option>';
                        my_facelengt_select += '<option value="18">15-1/2"</option>';
                        my_facelengt_select += '<option value="18">15-3/4"</option>';
                        my_facelengt_select += '<option value="18">16"</option>';
                        my_facelengt_select += '<option value="18">16-1/4"</option>';
                        my_facelengt_select += '<option value="18">16-1/2"</option>';
                        my_facelengt_select += '<option value="18">16-3/4"</option>';
                        my_facelengt_select += '<option value="18">17"</option>';
                        my_facelengt_select += '<option value="18">17-1/4"</option>';
                        my_facelengt_select += '<option value="18">17-1/2"</option>';
                        my_facelengt_select += '<option value="18">17-3/4"</option>';
                        my_facelengt_select += '<option value="18">18"</option>';
                        my_facelengt_select += '<option value="24">18-1/4"</option>';
                        my_facelengt_select += '<option value="24">18-1/2"</option>';
                        my_facelengt_select += '<option value="24">18-3/4"</option>';
                        my_facelengt_select += '<option value="24">19"</option>';
                        my_facelengt_select += '<option value="24">19-1/4"</option>';
                        my_facelengt_select += '<option value="24">19-1/2"</option>';
                        my_facelengt_select += '<option value="24">19-3/4"</option>';
                        my_facelengt_select += '<option value="24">20"</option>';
                        my_facelengt_select += '<option value="24">20-1/4"</option>';
                        my_facelengt_select += '<option value="24">20-1/2"</option>';
                        my_facelengt_select += '<option value="24">20-3/4"</option>';
                        my_facelengt_select += '<option value="24">21"</option>';
                        my_facelengt_select += '<option value="24">21-1/4"</option>';
                        my_facelengt_select += '<option value="24">21-1/2"</option>';
                        my_facelengt_select += '<option value="24">21-3/4"</option>';
                        my_facelengt_select += '<option value="24">22"</option>';
                        my_facelengt_select += '<option value="24">22-1/4"</option>';
                        my_facelengt_select += '<option value="24">22-1/2"</option>';
                        my_facelengt_select += '<option value="24">22-3/4"</option>';
                        my_facelengt_select += '<option value="24">23"</option>';
                        my_facelengt_select += '<option value="24">23-1/4"</option>';
                        my_facelengt_select += '<option value="24">23-1/2"</option>';
                        my_facelengt_select += '<option value="24">23-3/4"</option>';
                        my_facelengt_select += '<option value="24">24"</option>';
                        my_facelengt_select += '<option value="30">24-1/4"</option>';
                        my_facelengt_select += '<option value="30">24-1/2"</option>';
                        my_facelengt_select += '<option value="30">24-3/4"</option>';
                        my_facelengt_select += '<option value="30">25"</option>';
                        my_facelengt_select += '<option value="30">25-1/4"</option>';
                        my_facelengt_select += '<option value="30">25-1/2"</option>';
                        my_facelengt_select += '<option value="30">25-3/4"</option>';
                        my_facelengt_select += '<option value="30">26"</option>';
                        my_facelengt_select += '<option value="30">26-1/4"</option>';
                        my_facelengt_select += '<option value="30">26-1/2"</option>';
                        my_facelengt_select += '<option value="30">26-3/4"</option>';
                        my_facelengt_select += '<option value="30">27"</option>';
                        my_facelengt_select += '<option value="30">27-1/4"</option>';
                        my_facelengt_select += '<option value="30">27-1/2"</option>';
                        my_facelengt_select += '<option value="30">27-3/4"</option>';
                        my_facelengt_select += '<option value="30">28"</option>';
                        my_facelengt_select += '<option value="30">28-1/4"</option>';
                        my_facelengt_select += '<option value="30">28-1/2"</option>';
                        my_facelengt_select += '<option value="30">28-3/4"</option>';
                        my_facelengt_select += '<option value="30">29"</option>';
                        my_facelengt_select += '<option value="30">29-1/4"</option>';
                        my_facelengt_select += '<option value="30">29-1/2"</option>';
                        my_facelengt_select += '<option value="30">29-3/4"</option>';
                        my_facelengt_select += '<option value="30">30"</option>';
                        my_facelengt_select += '<option value="36">30-1/4"</option>';
                        my_facelengt_select += '<option value="36">30-1/2"</option>';
                        my_facelengt_select += '<option value="36">30-3/4"</option>';
                        my_facelengt_select += '<option value="36">31"</option>';
                        my_facelengt_select += '<option value="36">31-1/4"</option>';
                        my_facelengt_select += '<option value="36">31-1/2"</option>';
                        my_facelengt_select += '<option value="36">31-3/4"</option>';
                        my_facelengt_select += '<option value="36">32"</option>';
                        my_facelengt_select += '<option value="36">32-1/4"</option>';
                        my_facelengt_select += '<option value="36">32-1/2"</option>';
                        my_facelengt_select += '<option value="36">32-3/4"</option>';
                        my_facelengt_select += '<option value="36">33"</option>';
                        my_facelengt_select += '<option value="36">33-1/4"</option>';
                        my_facelengt_select += '<option value="36">33-1/2"</option>';
                        my_facelengt_select += '<option value="36">33-3/4"</option>';
                        my_facelengt_select += '<option value="36">34"</option>';
                        my_facelengt_select += '<option value="36">34-1/4"</option>';
                        my_facelengt_select += '<option value="36">34-1/2"</option>';
                        my_facelengt_select += '<option value="36">34-3/4"</option>';
                        my_facelengt_select += '<option value="36">35"</option>';
                        my_facelengt_select += '<option value="36">35-1/4"</option>';
                        my_facelengt_select += '<option value="36">35-1/2"</option>';
                        my_facelengt_select += '<option value="36">35-3/4"</option>';
                        my_facelengt_select += '<option value="36">36"</option>';
                        my_facelengt_select += '<option value="42">36-1/4"</option>';
                        my_facelengt_select += '<option value="42">36-1/2"</option>';
                        my_facelengt_select += '<option value="42">36-3/4"</option>';
                        my_facelengt_select += '<option value="42">37"</option>';
                        my_facelengt_select += '<option value="42">37-1/4"</option>';
                        my_facelengt_select += '<option value="42">37-1/2"</option>';
                        my_facelengt_select += '<option value="42">37-3/4"</option>';
                        my_facelengt_select += '<option value="42">38"</option>';
                        my_facelengt_select += '<option value="42">38-1/4"</option>';
                        my_facelengt_select += '<option value="42">38-1/2"</option>';
                        my_facelengt_select += '<option value="42">38-3/4"</option>';
                        my_facelengt_select += '<option value="42">39"</option>';
                        my_facelengt_select += '<option value="42">39-1/4"</option>';
                        my_facelengt_select += '<option value="42">39-1/2"</option>';
                        my_facelengt_select += '<option value="42">39-3/4"</option>';
                        my_facelengt_select += '<option value="42">40"</option>';
                        my_facelengt_select += '<option value="42">40-1/4"</option>';
                        my_facelengt_select += '<option value="42">40-1/2"</option>';
                        my_facelengt_select += '<option value="42">40-3/4"</option>';
                        my_facelengt_select += '<option value="42">41"</option>';
                        my_facelengt_select += '<option value="42">41-1/4"</option>';
                        my_facelengt_select += '<option value="42">41-1/2"</option>';
                        my_facelengt_select += '<option value="42">41-3/4"</option>';
                        my_facelengt_select += '<option value="42">42"</option>';
                        //}
                    }
                    for (i = 1; i <= myArray.length - lastmin; i++) {
                        for (j = myArray[i]; j < myArray[i + 1]; j++) {
                            if (j > myArray[i]) {
                                //my_facelengt_select+='<option value="'+myArray[i+1]+'">'+j+'"</option>';
                            } else {
                                //my_facelengt_select+='<option value="'+myArray[i]+'">'+j+'"</option>';
                            }
                            if (j != 42) {
                                //my_facelengt_select+='<option value="'+myArray[i+1]+'">'+j+'-1/4'+'"</option>';
                                //my_facelengt_select+='<option value="'+myArray[i+1]+'">'+j+'-1/2'+'"</option>';
                                //my_facelengt_select+='<option value="'+myArray[i+1]+'">'+j+'-3/4'+'"</option>';
                            }
                        }
                    }

                    if (post == "yes" && category_name == "EP5") {
                        var j = 0;
                        for (i = 22; i < 30; i++) {
                            my_facelengt_select +=
                                '<option value="' + 26 + '">' + i + '"</option>';
                            my_facelengt_select +=
                                '<option value="' + 26 + '">' + i + "-1/4" + '"</option>';
                            my_facelengt_select +=
                                '<option value="' + 26 + '">' + i + "-1/2" + '"</option>';
                            my_facelengt_select +=
                                '<option value="' + 26 + '">' + i + "-3/4" + '"</option>';
                            j = i;
                        }
                        my_facelengt_select +=
                            '<option value="' + 26 + '">' + 30 + '"</option>';
                    } else if (
                        post == "yes" &&
                        (category_name == "EP11" || category_name == "EP12")
                    ) {
                        var j = 0;
                        for (i = 22; i < 24; i++) {
                            my_facelengt_select +=
                                '<option value="' + 22 + '">' + i + '"</option>';
                            my_facelengt_select +=
                                '<option value="' + 22 + '">' + i + "-1/4" + '"</option>';
                            my_facelengt_select +=
                                '<option value="' + 22 + '">' + i + "-1/2" + '"</option>';
                            my_facelengt_select +=
                                '<option value="' + 22 + '">' + i + "-3/4" + '"</option>';
                            j = i;
                        }
                        my_facelengt_select +=
                            '<option value="' + 22 + '">' + 24 + '"</option>';
                    } else {
                        my_facelengt_select +=
                            '<option value="' + myArray[i] + '">' + myArray[i] + '"</option>';
                        for (i = 42; i < 48; i++) {
                            if (i != 42) {
                                my_facelengt_select +=
                                    '<option value="48" style="color:red">' + i + '"</option>';
                            }
                            my_facelengt_select +=
                                '<option value="48" style="color:red">' +
                                i +
                                "-1/4" +
                                '"</option>';
                            my_facelengt_select +=
                                '<option value="48" style="color:red">' +
                                i +
                                "-1/2" +
                                '"</option>';
                            my_facelengt_select +=
                                '<option value="48" style="color:red">' +
                                i +
                                "-3/4" +
                                '"</option>';
                        }
                        for (i = 48; i <= 54; i++) {
                            if (i == 48) {
                                my_facelengt_select +=
                                    '<option value="48" style="color:red">' + i + '"</option>';
                            } else {
                                my_facelengt_select +=
                                    '<option value="54" style="color:red">' + i + '"</option>';
                            }

                            if (i != 54) {
                                my_facelengt_select +=
                                    '<option value="54" style="color:red">' +
                                    i +
                                    "-1/4" +
                                    '"</option>';
                                my_facelengt_select +=
                                    '<option value="54" style="color:red">' +
                                    i +
                                    "-1/2" +
                                    '"</option>';
                                my_facelengt_select +=
                                    '<option value="54" style="color:red">' +
                                    i +
                                    "-3/4" +
                                    '"</option>';
                            }
                        }
                    }
                    my_facelengt_select += '<option value="No Glass">No Glass</option>';

                    $("#" + custom.attr("name") + "_span").html(my_facelengt_select);
                    /* for ep11 post height */
                    //getPriceOfProduct(document.forms['cart_quantity']);
                    if (!ispost) {
                        //getPriceOfProduct(document.forms['cart_quantity']);
                    }
                    if (category_name == "EP11" || category_name == "EP12") {
                        getPriceOfProduct(document.forms["cart_quantity"]);
                    }
                    var checkall = true;
                    if ($('select[name="face_length"]').length) {
                        $(".glass").text(
                            $('[name="face_length"]').find("option:selected").text()
                        );
                        if (
                            $('[name="face_length"]').find("option:selected").text() ==
                            "Select"
                        ) {
                            checkall = false;
                        }
                    }
                    if ($('select[name="post_height"]').length) {
                        $(".post").text(
                            $('[name="post_height"]').find("option:selected").text()
                        );
                        if (
                            $('[name="post_height"]').find("option:selected").text() ==
                            "Select"
                        ) {
                            checkall = false;
                        }
                    }
                    if ($('select[name="left_length"]').length) {
                        $(".left").text(
                            $('[name="left_length"]').find("option:selected").text()
                        );
                        if (
                            $('[name="left_length"]').find("option:selected").text() ==
                            "Select"
                        ) {
                            checkall = false;
                        }
                    }
                    if ($('select[name="right_length"]').length) {
                        $(".right").text(
                            $('[name="right_length"]').find("option:selected").text()
                        );
                        if (
                            $('[name="right_length"]').find("option:selected").text() ==
                            "Select"
                        ) {
                            checkall = false;
                        }
                    }

                    if ($('select[name="face_length_a"]').length) {
                        $(".glass_a").text(
                            $('[name="face_length_a"]').find("option:selected").text()
                        );
                        if (
                            $('[name="face_length_a"]').find("option:selected").text() ==
                            "Select"
                        ) {
                            checkall = false;
                        }
                    }
                    if ($('select[name="face_length_b"]').length) {
                        $(".glass_b").text(
                            $('[name="face_length_b"]').find("option:selected").text()
                        );
                        if (
                            $('[name="face_length_b"]').find("option:selected").text() ==
                            "Select"
                        ) {
                            checkall = false;
                        }
                    }
                    if ($('select[name="face_length_c"]').length) {
                        $(".glass_c").text(
                            $('[name="face_length_c"]').find("option:selected").text()
                        );
                        if (
                            $('[name="face_length_c"]').find("option:selected").text() ==
                            "Select"
                        ) {
                            checkall = false;
                        }
                    }
                    if ($('select[name="face_length_d"]').length) {
                        $(".glass_d").text(
                            $('[name="face_length_d"]').find("option:selected").text()
                        );
                        if (
                            $('[name="face_length_d"]').find("option:selected").text() ==
                            "Select"
                        ) {
                            checkall = false;
                        }
                    }

                    $("#is_custom").val("Yes");
                    if (checkall) {
                        $("#ckall").val(true);
                        getPriceOfProduct(document.forms["cart_quantity"]);
                    } else {
                        $("#ckall").val(false);
                        //$('.total').text('Select');
                        getPriceOfProduct(document.forms["cart_quantity"]);
                    }
                },
            },
            Cancel: {
                class: "gray",
                action: function() {
                    var str = custom.attr("name");
                    $("select[name=" + str + "]").val("select");
                    getPriceOfProduct(document.forms["cart_quantity"]);
                }, // Nothing to do in this case. You can as well omit the action property.
            },
        },
    });
}