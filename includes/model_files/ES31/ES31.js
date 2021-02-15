function getPriceOfProduct(form) {
    var type = form.type;
    if ($("#customheight").is(":checked")) {
        $(".option-panel").css("visibility", "hidden");
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

            if (faceB_get != "Custom") {
                if (faceB_get == "Select") {
                    form.face_length_b.value = faceA_get_val;
                    form.face_length_b.selected = faceA_get;
                } else {
                    form.face_length_b.value = faceB_get_val;
                    $('#face_length_b option[value="' + faceB_get_val + '"]').text(
                        faceB_get
                    );
                }
            }
            if (faceC_get != "Custom") {
                if (faceC_get == "Select") {
                    form.face_length_c.value = faceA_get_val;
                    form.face_length_c.selected = faceA_get;
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

                form.face_length_c.value = faceA_get_val;
                $('#face_length_c option[value="' + faceA_get_val + '"]').text(
                    faceA_get
                );

                form.face_length_d.value = faceA_get_val;
                $('#face_length_d option[value="' + faceA_get_val + '"]').text(
                    faceA_get
                );
            }
            $("#checkboxbfor4bayA").attr("checked", true);

            $("#optio_48_b").css("display", "block");
            $("#optio_54_b").css("display", "block");
            $("#optio_48_c").css("display", "block");
            $("#optio_54_c").css("display", "block");
            $("#optio_48_d").css("display", "block");
            $("#optio_54_d").css("display", "block");
        } else {}

        var checkcheckedb = $("#checkboxbfor4bayA").is(":checked");

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

            if (faceC_get != "Custom") {
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

                form.face_length_d.value = faceC_get_val;
                $('#face_length_d option[value="' + faceC_get_val + '"]').text(
                    faceC_get
                );
            }
            $("#checkboxbfor4bayC").attr("checked", true);

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

            if (faceC_get != "Custom") {
                form.face_length_c.selected = faceC_get_val;
            } else {
                form.face_length_c.value = faceC_get_val;
                $('#face_length_c option[value="' + faceC_get_val + '"]').text(
                    faceB_get
                );
            }

            if (faceD_get != "Custom") {
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

            if (faceB_get != "Custom") {
                if (faceB_get == "Select") {
                    form.face_length_b.value = faceA_get_val;
                    form.face_length_b.selected = faceA_get;
                } else {
                    form.face_length_b.value = faceB_get_val;
                    $('#face_length_b option[value="' + faceB_get_val + '"]').text(
                        faceB_get
                    );
                }
            }
            if (faceC_get != "Custom") {
                if (faceC_get == "Select") {
                    form.face_length_c.value = faceA_get_val;
                    form.face_length_c.selected = faceA_get;
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

                form.face_length_c.value = faceA_get_val;
                $('#face_length_c option[value="' + faceA_get_val + '"]').text(
                    faceA_get
                );
            }
            $("#checkboxbfor4bayA").attr("checked", true);

            $("#optio_48_b").css("display", "block");
            $("#optio_54_b").css("display", "block");
            $("#optio_48_c").css("display", "block");
            $("#optio_54_c").css("display", "block");
        } else {}

        var checkcheckedb = $("#checkboxbfor4bayA").is(":checked");

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

            if (faceC_get != "Custom") {
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
                if (faceC_get == "Select") {
                    form.face_length_c.value = faceB_get_val;
                    form.face_length_c.selected = faceB_get;
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

            if (faceB_get != "Custom") {
                if (faceB_get == "Select") {
                    form.face_length_b.value = faceA_get_val;
                    form.face_length_b.selected = faceA_get;
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
            }
            $("#checkboxbfor4bayA").attr("checked", true);

            $("#optio_48_b").css("display", "block");
            $("#optio_54_b").css("display", "block");
        } else {}

        var checkcheckedb = $("#checkboxbfor4bayA").is(":checked");

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

    light_a = "";
    light_b = "";
    light_c = "";
    light_d = "";
    leftEndPost = "";
    rightEndPost = "";
    centerPost = "";

    centerPost1 = "";
    centerPost2 = "";
    centerPost3 = "";

    anglePost = "";
    leftEndPanel = "";
    rightEndPanel = "";
    flangeCovers = "";
    facePrice = 0;
    facePrice_a = 0;
    facePrice_b = 0;
    facePrice_c = 0;
    facePrice_d = 0;
    lightPrice_a = 0;
    lightPrice_b = 0;
    lightPrice_c = 0;
    lightPrice_d = 0;
    facePrice_l = 0;
    facePrice_r = 0;
    leftPostPrice = 0;
    rightPostPrice = 0;
    leftEndPanelPrice = 0;
    rightEndPanelPrice = 0;
    centerPostPrice = 0;

    centerPostPrice1 = 0;
    centerPostPrice2 = 0;
    centerPostPrice3 = 0;

    anglePostPrice = 0;
    flangeCoversPrice = 0;
    flangeCoversPrice2 = 0;
    var iscustomimg = 0;

    adjustable_name = "ES31 Adjustable Brackets (Pairs)";

    if (category_name == "ES31") {
        adjustable_name = "ES31 Adjustable Brackets (Pairs)";
    } else if (category_name == "ES73") {
        adjustable_name = "ES73 Adjustable Brackets (Pairs)";
    } else if (category_name == "ES67") {
        adjustable_name = "ES67 Adjustable Brackets (Pairs)";
    }
    right_lenght_obj = form.right_length;
    left_lenght_obj = form.left_length;
    post_height_obj = form.post_height;
    face_lenght_obj = form.face_length;
    face_lenght_a_obj = form.face_length_a;
    face_lenght_b_obj = form.face_length_b;
    face_lenght_c_obj = form.face_length_c;
    face_lenght_d_obj = form.face_length_d;
    type_obj = form.type;
    adjustable_a1 = "";
    adjustable_b1 = "";
    adjustable_c1 = "";
    adjustable_d1 = "";
    adjustable_a = "";
    adjustable_b = "";
    adjustable_c = "";
    adjustable_d = "";

    adjustableprice_a = 0;
    adjustableprice_b = 0;
    adjustableprice_c = 0;
    adjustableprice_d = 0;
    make_adjustable = form.adjustable.value;
    glass_face_obj = form.glass_face;
    corner_obj = form.rounded_corners;
    flange_covers_obj = form.flange_covers;

    flangeUnderCounter = "";
    flangeUnderCounterPrice = 0;
    flange_under_counter_obj = form.flange_under_counter;

    flange_covers2_obj = form.light_bar;
    choose_finish_obj = form.choose_finish;

    degree_obj = form.degree;
    posttype_obj = form.posttype;
    noofcornerpost_obj = form.noofcornerpost;

    end_options_type_obj = form.end_options_type;

    var gotocornerpostss = $("input[name='gotocornerpostcheck']:checked").val();

    foldername = getProductFolderName(category_name) + type_obj.value;
    adjust_price = 0;

    if (category_name == "ES31" || category_name == "ES67") {
        corner_obj.value = "round";
    }
    if (category_name == "ES36") {
        make_adjustable = "no";
    }
    if (make_adjustable == "yes") {
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
    if (flange_covers_obj.value == "yes") {
        flangeCovers = "test";
    }

    if (flange_under_counter_obj.value == "yes") {
        flangeUnderCounter = "test";
    }

    if (post_height_obj == null || post_height_obj == "undefine") {
        height = glass_face_obj.value;
    } else {
        height = post_height_obj.value;
    }

    if (category_name == "EP15") {
        if ($("#customheight").is(":checked")) {
            height = post_height_obj.value;
        }
    }

    var add_more_bay = add_more_bay;
    if (add_more_bay == 1) {
        leftEndPost = category_name + " Left Post " + choose_finish_obj.value;
        rightEndPost = category_name + " Center Post " + choose_finish_obj.value;
    } else {
        leftEndPost = category_name + " Left Post " + choose_finish_obj.value;
        rightEndPost = category_name + " Right Post " + choose_finish_obj.value;
    }

    if (category_name == "EP15") {
        leftEndPost =
            category_name + "-" + height + " Left Post " + choose_finish_obj.value;
        rightEndPost =
            category_name + "-" + height + " Right Post " + choose_finish_obj.value;
    }

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
            if (end_options_type_obj.value == "extended") {
                if (left_lenght_obj.value != "select") {
                    leftEndPanel = "ES31 " + left_lenght_obj.value + '" EXT Left End';
                }
                if (right_lenght_obj.value != "select") {
                    rightEndPanel = "ES31 " + right_lenght_obj.value + '" EXT Right End';
                }
            } else {
                leftEndPanel =
                    category_name +
                    " Left End" +
                    (category_name == "EP11" ? " Panel" : "");
                rightEndPanel =
                    category_name +
                    " Right End" +
                    (category_name == "EP11" ? " Panel" : "");
            }
        }
        imageName = "BOTHENDS";
    } else if (glass_face_obj.value == 2) {
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
            if (end_options_type_obj.value == "extended") {
                if (right_lenght_obj.value != "select") {
                    rightEndPanel = "ES31 " + right_lenght_obj.value + '" EXT Right End';
                }
            } else {
                rightEndPanel =
                    category_name +
                    " Right End" +
                    (category_name == "EP11" ? " Panel" : "");
            }
        }
        imageName = "RIGHTEND";
    } else if (glass_face_obj.value == 3) {
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
            if (end_options_type_obj.value == "extended") {
                if (left_lenght_obj.value != "select") {
                    leftEndPanel = "ES31 " + left_lenght_obj.value + '" EXT Left End';
                }
            } else {
                leftEndPanel =
                    category_name +
                    " Left End" +
                    (category_name == "EP11" ? " Panel" : "");
            }
        }
        imageName = "LEFTEND";
    } else if (glass_face_obj.value == 4) {
        if (flange_covers_obj != null && flange_covers_obj != "undefine") {
            if (flange_covers_obj.value == "yes") {
                flangeCovers =
                    category_name +
                    "-FLANGE COVER " +
                    type_obj.value.slice(0, 1) +
                    " BAY NO END";
            }
        }

        if (
            flange_under_counter_obj != null &&
            flange_under_counter_obj != "undefine"
        ) {
            if (flange_under_counter_obj.value == "yes") {
                flangeUnderCounter =
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
            face_lenght_a_obj.value == "No Glass" ||
            face_lenght_b_obj.value == "No Glass" ||
            face_lenght_c_obj.value == "No Glass" ||
            face_lenght_d_obj.value == "No Glass"
        ) {
            form.light_bar.value = "no";
            form.light_bar.selected = "No";
            form.light_bar.disabled = true;
        } else {
            form.light_bar.disabled = false;
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
        }
    }
    if (type_obj.value == "3BAY") {
        if (
            face_lenght_a_obj.value == "No Glass" ||
            face_lenght_b_obj.value == "No Glass" ||
            face_lenght_c_obj.value == "No Glass"
        ) {
            form.light_bar.value = "no";
            form.light_bar.selected = "No";
            form.light_bar.disabled = true;
        } else {
            form.light_bar.disabled = false;
            if (
                face_lenght_a_obj.value > 42 ||
                face_lenght_b_obj.value > 42 ||
                face_lenght_c_obj.value > 42
            ) {
                wt = val;
            } else {
                wt = 1;
            }
        }
    }
    if (type_obj.value == "2BAY") {
        if (
            face_lenght_a_obj.value == "No Glass" ||
            face_lenght_b_obj.value == "No Glass"
        ) {
            form.light_bar.value = "no";
            form.light_bar.selected = "No";
            form.light_bar.disabled = true;
        } else {
            form.light_bar.disabled = false;
            if (face_lenght_a_obj.value > 42 || face_lenght_b_obj.value > 42) {
                wt = val;
            } else {
                wt = 1;
            }
        }
    }
    if (type_obj.value == "1BAY") {
        if (face_lenght_obj.value == "No Glass") {
            form.light_bar.value = "no";
            form.light_bar.selected = "No";
            form.light_bar.disabled = true;
        } else {
            form.light_bar.disabled = false;
            if (face_lenght_obj.value > 42) {
                wt = val;
            } else {
                wt = 1;
            }
        }
    }

    if (
        type_obj.value == "2BAY" ||
        type_obj.value == "3BAY" ||
        type_obj.value == "4BAY"
    ) {
        if (form.posttype.value == "outer") {
            var posttypegl = "Outer";
        } else if (form.posttype.value == "inner") {
            var posttypegl = "Inner";
        }

        if (form.degree.value == "90degre") {
            var postdegreegl = "90 Degree";
        } else if (form.degree.value == "135degre") {
            var postdegreegl = "135 Degree";
        }

        if (type_obj.value == "3BAY" || type_obj.value == "4BAY") {
            if (form.noofcornerpost.value == "2") {
                var noofcornerpostgl = "Two";
            } else {
                var noofcornerpostgl = "";
            }
        }
    }

    var cornerPosition = $("input[name='corner_post']:checked").val();

    var noofcornerpostval = $("#noofcornerpost :selected").text();

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
                if (flange_covers2_obj.value == "yes") {
                    light_a = category_name + "-" + face_lenght_obj.value + "LYT";
                }
            } else {
                if (gotocornerpostss == "1") {
                    if (
                        form.posttype.value != "select" &&
                        cornerPosition == "1st Center Post from Left"
                    ) {
                        glassName =
                            category_name +
                            " " +
                            face_lenght_obj.value +
                            '" Glass ' +
                            posttypegl +
                            " Corner " +
                            postdegreegl +
                            " Post " +
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

                if (flange_covers2_obj.value == "yes") {
                    light_a = category_name + "-" + face_lenght_obj.value + "LYT";
                }
            }

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
            }

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
            }
        } else {
            flag = 0;
        }
    }

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
                if (flange_covers2_obj.value == "yes") {
                    light_a = category_name + "-" + face_lenght_a_obj.value + "LYT";
                }
            } else {
                if (gotocornerpostss == "1") {
                    if (
                        form.posttype.value != "select" &&
                        cornerPosition == "1st Center Post from Left"
                    ) {
                        glassName_a =
                            category_name +
                            " " +
                            face_lenght_a_obj.value +
                            '" Glass ' +
                            posttypegl +
                            " Corner " +
                            postdegreegl +
                            " Post " +
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

                if (flange_covers2_obj.value == "yes") {
                    light_a = category_name + "-" + face_lenght_a_obj.value + "LYT";
                }
            }

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
            }

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
            }
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
                if (flange_covers2_obj.value == "yes") {
                    light_b = category_name + "-" + face_lenght_b_obj.value + "LYT";
                }
            } else {
                if (gotocornerpostss == "1") {
                    if (noofcornerpostval == 2) {
                        if (
                            form.posttype.value != "select" &&
                            cornerPosition == "1st Center Post from Left"
                        ) {
                            glassName_b =
                                category_name +
                                " " +
                                face_lenght_b_obj.value +
                                '" Glass ' +
                                posttypegl +
                                " Two Corner " +
                                postdegreegl +
                                " Post " +
                                (corner_obj.value == "round" ?
                                    "(Radiused Corners)" :
                                    "(Squared Corners)");
                        } else if (
                            form.posttype.value != "select" &&
                            cornerPosition == "2nd Center Post from Left"
                        ) {
                            glassName_b =
                                category_name +
                                " " +
                                face_lenght_b_obj.value +
                                '" Glass ' +
                                posttypegl +
                                " Corner " +
                                postdegreegl +
                                " Post " +
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
                    } else {
                        if (
                            (form.posttype.value != "select" &&
                                cornerPosition == "1st Center Post from Left") ||
                            cornerPosition == "2nd Center Post from Left"
                        ) {
                            glassName_b =
                                category_name +
                                " " +
                                face_lenght_b_obj.value +
                                '" Glass ' +
                                posttypegl +
                                " Corner " +
                                postdegreegl +
                                " Post " +
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
                    }
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

                if (flange_covers2_obj.value == "yes") {
                    light_b = category_name + "-" + face_lenght_b_obj.value + "LYT";
                }
            }

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
            }
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
                if (flange_covers2_obj.value == "yes") {
                    light_c = category_name + "-" + face_lenght_c_obj.value + "LYT";
                }
            } else {
                if (gotocornerpostss == "1") {
                    if (noofcornerpostval == 2) {
                        if (
                            form.posttype.value != "select" &&
                            cornerPosition == "1st Center Post from Left"
                        ) {
                            glassName_c =
                                category_name +
                                " " +
                                face_lenght_c_obj.value +
                                '" Glass ' +
                                posttypegl +
                                " Corner " +
                                postdegreegl +
                                " Post " +
                                (corner_obj.value == "round" ?
                                    "(Radiused Corners)" :
                                    "(Squared Corners)");
                        } else if (
                            form.posttype.value != "select" &&
                            cornerPosition == "2nd Center Post from Left"
                        ) {
                            glassName_c =
                                category_name +
                                " " +
                                face_lenght_c_obj.value +
                                '" Glass ' +
                                posttypegl +
                                " Two Corner " +
                                postdegreegl +
                                " Post " +
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
                    } else {
                        if (
                            (form.posttype.value != "select" &&
                                cornerPosition == "2nd Center Post from Left") ||
                            cornerPosition == "3rd Center Post from Left"
                        ) {
                            glassName_c =
                                category_name +
                                " " +
                                face_lenght_c_obj.value +
                                '" Glass ' +
                                posttypegl +
                                " Corner " +
                                postdegreegl +
                                " Post " +
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
                    }
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

                if (flange_covers2_obj.value == "yes") {
                    light_c = category_name + "-" + face_lenght_c_obj.value + "LYT";
                }
            }

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
            }
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
                if (flange_covers2_obj.value == "yes") {
                    light_d = category_name + "-" + face_lenght_d_obj.value + "LYT";
                }
            } else {
                if (gotocornerpostss == "1") {
                    if (noofcornerpostval == 2) {
                        if (
                            form.posttype.value != "select" &&
                            cornerPosition == "2nd Center Post from Left"
                        ) {
                            glassName_d =
                                category_name +
                                " " +
                                face_lenght_d_obj.value +
                                '" Glass ' +
                                posttypegl +
                                " Corner " +
                                postdegreegl +
                                " Post " +
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
                    } else {
                        if (
                            form.posttype.value != "select" &&
                            cornerPosition == "3rd Center Post from Left"
                        ) {
                            glassName_d =
                                category_name +
                                " " +
                                face_lenght_d_obj.value +
                                '" Glass ' +
                                posttypegl +
                                " Corner " +
                                postdegreegl +
                                " Post " +
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
                    }
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

                if (flange_covers2_obj.value == "yes") {
                    light_d = category_name + "-" + face_lenght_d_obj.value + "LYT";
                }
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
            }
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
        if (type_obj.value == "3BAY" || type_obj.value == "4BAY") {
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

                if (gotocornerpostss == "1") {
                    if (noofcornerpostval == 2) {
                        if (cornerPosition == "1st Center Post from Left") {
                            centerPost1 =
                                new_name +
                                " " +
                                posttypegl +
                                " Corner " +
                                postdegreegl +
                                " Post " +
                                choose_finish_obj.value;
                            centerPost2 =
                                new_name +
                                " " +
                                posttypegl +
                                " Corner " +
                                postdegreegl +
                                " Post " +
                                choose_finish_obj.value;
                            centerPost3 =
                                new_name + " Center Post " + choose_finish_obj.value;
                        }
                        if (cornerPosition == "2nd Center Post from Left") {
                            centerPost2 =
                                new_name +
                                " " +
                                posttypegl +
                                " Corner " +
                                postdegreegl +
                                " Post " +
                                choose_finish_obj.value;
                            centerPost1 =
                                new_name + " Center Post " + choose_finish_obj.value;
                            centerPost3 =
                                new_name +
                                " " +
                                posttypegl +
                                " Corner " +
                                postdegreegl +
                                " Post " +
                                choose_finish_obj.value;
                        } else {
                            centerPost = new_name + " Center Post " + choose_finish_obj.value;
                        }
                    } else {
                        if (cornerPosition == "1st Center Post from Left") {
                            centerPost1 =
                                new_name +
                                " " +
                                posttypegl +
                                " Corner " +
                                postdegreegl +
                                " Post " +
                                choose_finish_obj.value;
                            centerPost2 =
                                new_name + " Center Post " + choose_finish_obj.value;
                            centerPost3 =
                                new_name + " Center Post " + choose_finish_obj.value;
                        }
                        if (cornerPosition == "2nd Center Post from Left") {
                            centerPost2 =
                                new_name +
                                " " +
                                posttypegl +
                                " Corner " +
                                postdegreegl +
                                " Post " +
                                choose_finish_obj.value;
                            centerPost1 =
                                new_name + " Center Post " + choose_finish_obj.value;
                            centerPost3 =
                                new_name + " Center Post " + choose_finish_obj.value;
                        }
                        if (cornerPosition == "3rd Center Post from Left") {
                            centerPost3 =
                                new_name +
                                " " +
                                posttypegl +
                                " Corner " +
                                postdegreegl +
                                " Post " +
                                choose_finish_obj.value;
                            centerPost1 =
                                new_name + " Center Post " + choose_finish_obj.value;
                            centerPost2 =
                                new_name + " Center Post " + choose_finish_obj.value;
                        } else {
                            centerPost = new_name + " Center Post " + choose_finish_obj.value;
                        }
                    }
                } else {
                    centerPost = new_name + " Center Post " + choose_finish_obj.value;
                }
            }
        }
        if (type_obj.value == "2BAY") {
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

                if (gotocornerpostss == "1") {
                    if (cornerPosition == "1st Center Post from Left") {
                        centerPost1 =
                            new_name +
                            " " +
                            posttypegl +
                            " Corner " +
                            postdegreegl +
                            " Post " +
                            choose_finish_obj.value;
                        centerPost2 = new_name + " Center Post " + choose_finish_obj.value;
                        centerPost3 = new_name + " Center Post " + choose_finish_obj.value;
                    }
                    if (cornerPosition == "2nd Center Post from Left") {
                        centerPost2 =
                            new_name +
                            " " +
                            posttypegl +
                            " Corner " +
                            postdegreegl +
                            " Post " +
                            choose_finish_obj.value;
                        centerPost1 = new_name + " Center Post " + choose_finish_obj.value;
                        centerPost3 = new_name + " Center Post " + choose_finish_obj.value;
                    }
                    if (cornerPosition == "3rd Center Post from Left") {
                        centerPost3 =
                            new_name +
                            " " +
                            posttypegl +
                            " Corner " +
                            postdegreegl +
                            " Post " +
                            choose_finish_obj.value;
                        centerPost1 = new_name + " Center Post " + choose_finish_obj.value;
                        centerPost2 = new_name + " Center Post " + choose_finish_obj.value;
                    } else {
                        centerPost = new_name + " Center Post " + choose_finish_obj.value;
                    }
                } else {
                    centerPost = new_name + " Center Post " + choose_finish_obj.value;
                }
            }
        }
    }

    if (category_name == "EP15") {
        imageName = "BOTHENDS";
    }

    if (end_options_type_obj.value == "standard") {} else if (end_options_type_obj.value == "extended") {
        imageName = "EXT" + imageName;
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
        light_a = "";
        light_b = "";
        light_c = "";
        light_d = "";
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

    if (flange_covers2_obj.value == "yes" && flag != 0) {
        imageName = "LYT" + imageName;
    }
    if (flange_covers2_obj.value == "yes" && flag == 0) {
        imageName = imageName.substr(0, 20);
    }

    $('select[name="face_length"]').change(function() {
        if ("No Glass" == $(this).val()) {
            $("#checkbox2").attr("disabled", true);
            $("#checkbox2").attr("checked", false);
        } else {
            $("#checkbox2").attr("disabled", false);
        }
    });
    $('select[name="face_length_a"]').change(function() {
        if ("No Glass" == $(this).val()) {
            $("#checkbox2").attr("disabled", true);
            $("#checkbox2").attr("checked", false);
        } else {
            $("#checkbox2").attr("disabled", false);
        }
    });
    $('select[name="face_length_b"]').change(function() {
        if ("No Glass" == $(this).val()) {
            $("#checkbox2").attr("disabled", true);
            $("#checkbox2").attr("checked", false);
        } else {
            $("#checkbox2").attr("disabled", false);
        }
    });
    $('select[name="face_length_c"]').change(function() {
        if ("No Glass" == $(this).val()) {
            $("#checkbox2").attr("disabled", true);
            $("#checkbox2").attr("checked", false);
        } else {
            $("#checkbox2").attr("disabled", false);
        }
    });
    $('select[name="face_length_d"]').change(function() {
        if ("No Glass" == $(this).val()) {
            $("#checkbox2").attr("disabled", true);
            $("#checkbox2").attr("checked", false);
        } else {
            $("#checkbox2").attr("disabled", false);
        }
    });

    if (category_name == "EP11") {
        imageName = "V" + imageName;
    }
    if (category_name == "EP12") {
        imageName = "VERT" + imageName;
    }

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
    if (light_a != "") {
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[light_a][0] +
            '" />';

        lightPrice_a = parseFloat(product_name_price[light_a][1]);
    }
    if (light_b != "") {
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[light_b][0] +
            '" />';

        lightPrice_b = parseFloat(product_name_price[light_b][1]);
    }
    if (light_c != "") {
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[light_c][0] +
            '" />';

        lightPrice_c = parseFloat(product_name_price[light_c][1]);
    }
    if (light_d != "") {
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[light_d][0] +
            '" />';

        lightPrice_d = parseFloat(product_name_price[light_d][1]);
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

    if (rightEndPost != "") {
        str +=
            '<input type="hidden" name="products_id[]" value="' +
            product_name_price[rightEndPost][0] +
            '" />';
        rightPostPrice = parseFloat(product_name_price[rightEndPost][1]);
    }
    var add_more_bay = add_more_bay;
    if (add_more_bay == 1) {
        if (leftEndPost != "") {
            str += '<input type="hidden" name="products_id[]" value="0" />';
            leftPostPrice = parseFloat(0);
        }
    } else {
        if (leftEndPost != "") {
            str +=
                '<input type="hidden" name="products_id[]" value="' +
                product_name_price[leftEndPost][0] +
                '" />';
            leftPostPrice = parseFloat(product_name_price[leftEndPost][1]);
        }
    }

    if (
        centerPost != "" ||
        centerPost1 != "" ||
        centerPost2 != "" ||
        centerPost3 != ""
    ) {
        if (gotocornerpostss == "1") {
            if (type_obj.value == "2BAY") {
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[centerPost1][0] +
                    '" />';
                centerPostPrice1 = parseFloat(product_name_price[centerPost1][1]);
                centerPostPrice = centerPostPrice1;
            }
            if (type_obj.value == "3BAY") {
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[centerPost1][0] +
                    '" />';
                centerPostPrice1 = parseFloat(product_name_price[centerPost1][1]);

                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[centerPost2][0] +
                    '" />';
                centerPostPrice2 = parseFloat(product_name_price[centerPost2][1]);
                centerPostPrice = centerPostPrice1 + centerPostPrice2;
            }
            if (type_obj.value == "4BAY") {
                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[centerPost1][0] +
                    '" />';
                centerPostPrice1 = parseFloat(product_name_price[centerPost1][1]);

                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[centerPost2][0] +
                    '" />';
                centerPostPrice2 = parseFloat(product_name_price[centerPost2][1]);

                str +=
                    '<input type="hidden" name="products_id[]" value="' +
                    product_name_price[centerPost3][0] +
                    '" />';
                centerPostPrice3 = parseFloat(product_name_price[centerPost3][1]);
                centerPostPrice =
                    centerPostPrice1 + centerPostPrice2 + centerPostPrice3;
            }
        } else {
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
            if (category_name == "EP22") {
                centerPost = centerPost.replace(category_name, "EP11");
            }
            if (category_name == "EP12") {
                centerPost = centerPost.replace(category_name, "EP12");
            }
            while (i < j) {
                if (product_name_price[centerPost].length == 2) {
                    str +=
                        '<input type="hidden" name="products_id[]" value="' +
                        product_name_price[centerPost][0] +
                        '" />';
                    centerPostPrice =
                        centerPostPrice + parseFloat(product_name_price[centerPost][1]);
                }
                i++;
            }
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
        if (category_name == "EP36") {
            if (type_obj.value == "1BAY") {
                flangeCovers = "EP36-FLANGE COVER 1 PIECE";
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
                flangeCovers = "EP36-FLANGE COVER 1 PIECE";
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
                flangeCovers = "EP36-FLANGE COVER 1 PIECE";
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
                flangeCovers = "EP36-FLANGE COVER 1 PIECE";
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

        if (category_name == "ES31") {
            if (type_obj.value == "1BAY") {
                flangeCovers = "ES31-FLANGE COVER 1 PIECE";
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
                flangeCovers = "ES31-FLANGE COVER 1 PIECE";
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
                flangeCovers = "ES31-FLANGE COVER 1 PIECE";
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
                flangeCovers = "ES31-FLANGE COVER 1 PIECE";
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

        if (category_name == "ES67") {
            if (type_obj.value == "1BAY") {
                flangeCovers = "ES67-FLANGE COVER 1 PIECE";
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
                flangeCovers = "ES67-FLANGE COVER 1 PIECE";
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
                flangeCovers = "ES67-FLANGE COVER 1 PIECE";
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
                flangeCovers = "ES67-FLANGE COVER 1 PIECE";
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
        if (category_name == "ES73") {
            if (type_obj.value == "1BAY") {
                flangeCovers = "ES73-FLANGE COVER 1 PIECE";
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
                flangeCovers = "ES73-FLANGE COVER 1 PIECE";
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
                flangeCovers = "ES73-FLANGE COVER 1 PIECE";
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
                flangeCovers = "ES73-FLANGE COVER 1 PIECE";
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
    }

    if (flangeUnderCounter != "") {
        if (category_name == "ES31") {
            if (type_obj.value == "1BAY") {
                flangeUnderCounter = "ES31-UNDER COUNTER FLANGE 1 PIECE";
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
                flangeUnderCounter = "ES31-UNDER COUNTER FLANGE 1 PIECE";
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
                flangeUnderCounter = "ES31-UNDER COUNTER FLANGE 1 PIECE";
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
                flangeUnderCounter = "ES31-UNDER COUNTER FLANGE 1 PIECE";
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

        if (product_name_price[flangeUnderCounter] != "undifine") {}
    }

    flangeCoversPrice2 =
        lightPrice_a + lightPrice_b + lightPrice_c + lightPrice_d;
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
        adjust_price +
        rightEndPanelPrice +
        t_post_price +
        flangeCoversPrice +
        flangeUnderCounterPrice +
        flangeCoversPrice2;

    if (category_name == "ES31") {
        var rad1 = $("input[name='corner_post']:checked").val();

        var gotocornerpost = $("input[name='gotocornerpostcheck']:checked").val();

        var noofcornerpostval = $("#noofcornerpost :selected").text();

        if (gotocornerpost == "1") {
            form.adjustable.value = "no";
            form.adjustable.selected = "No";
            form.light_bar.value = "no";
            form.light_bar.selected = "No";
        }

        if (form.adjustable.value == "yes") {
            imageName = "ADJUST" + imageName;
        }

        if (
            type_obj.value == "2BAY" ||
            type_obj.value == "3BAY" ||
            type_obj.value == "4BAY"
        ) {
            if (rad1 == "1st Center Post from Left") {
                if (gotocornerpost == "1") {
                    if (noofcornerpostval == 2) {
                        imageName = "1STAND2ND" + imageName;
                    } else {
                        imageName = "1ST" + imageName;
                    }
                } else {
                    imageName = "" + imageName;
                }
            }

            if (rad1 == "2nd Center Post from Left") {
                if (gotocornerpost == "1") {
                    if (noofcornerpostval == 2) {
                        imageName = "2NDAND3RD" + imageName;
                    } else {
                        imageName = "2ND" + imageName;
                    }
                } else {
                    imageName = "" + imageName;
                }
            }

            if (rad1 == "3rd Center Post from Left") {
                if (gotocornerpost == "1") {
                    imageName = "3RD" + imageName;
                } else {
                    imageName = "" + imageName;
                }
            }

            if (form.degree.value == "90degre") {
                if (gotocornerpost == "1") {
                    imageName = "90D" + imageName;
                } else {
                    imageName = "" + imageName;
                }
            }

            if (form.degree.value == "135degre") {
                if (gotocornerpost == "1") {
                    imageName = "135D" + imageName;
                } else {
                    imageName = "" + imageName;
                }
            }

            if (form.posttype.value == "inner") {
                if (gotocornerpost == "1") {
                    imageName = "INNER" + imageName;
                } else {
                    imageName = "" + imageName;
                }
            }

            if (form.posttype.value == "outer") {
                if (gotocornerpost == "1") {
                    imageName = "OUTER" + imageName;
                } else {
                    imageName = "" + imageName;
                }
            }
        }
    } else {
        if (form.adjustable.value == "yes") {
            imageName = "ADJUST" + imageName;
        }
    }
    img_ajx = imageName;

    image_string =
        '<img src="images/' +
        foldername +
        "/" +
        imageName +
        '.jpg" style="width:568px;height:453px;">';

    image_string += '<div class="left">Left</div><div class="right">Right</div>';
    image_string += '<div class="msgtishu"></div>';
    image_string += '<div class="msgtishu1"></div>';
    image_string +=
        '<div class="msgtishu2"><hr color="red" size="6px"   width="' +
        width_three +
        '"> </div>';
    image_string +=
        '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="glass_d">12"</div><div class="total">38"</div>';

    document.getElementById("additional_image").innerHTML = image_string;

    if (gotocornerpost == "1") {
        $("#post_type_val").val(
            $('[name="posttype"]').find("option:selected").text()
        );
        $("#post_degree_val").val(
            $('[name="degree"]').find("option:selected").text()
        );
    }

    if (
        type_obj.value == "2BAY" ||
        type_obj.value == "3BAY" ||
        type_obj.value == "4BAY"
    ) {
        if (noofcornerpostval == 2) {
            if (form.posttype.value == "inner") {
                if (form.degree.value == "90degre") {
                    var imgpsorname1 = "INNER90D1STAND2NDPOST.jpg";
                    var imgpsorname2 = "INNER90D2NDAND3RDPOST.jpg";
                }
                if (form.degree.value == "135degre") {
                    var imgpsorname1 = "INNER135D1STAND2NDPOST.jpg";
                    var imgpsorname2 = "INNER135D2NDAND3RDPOST.jpg";
                }
            }
            if (form.posttype.value == "outer") {
                if (form.degree.value == "90degre") {
                    var imgpsorname1 = "OUTER90D1STAND2NDPOST.jpg";
                    var imgpsorname2 = "OUTER90D2NDAND3RDPOST.jpg";
                }
                if (form.degree.value == "135degre") {
                    var imgpsorname1 = "OUTER135D1STAND2NDPOST.jpg";
                    var imgpsorname2 = "OUTER135D2NDAND3RDPOST.jpg";
                }
            }
        } else {
            if (form.posttype.value == "inner") {
                if (form.degree.value == "90degre") {
                    var imgpsorname1 = "INNER90D1STPOST.jpg";
                    var imgpsorname2 = "INNER90D2NDPOST.jpg";
                    var imgpsorname3 = "INNER90D3RDPOST.jpg";
                }
                if (form.degree.value == "135degre") {
                    var imgpsorname1 = "INNER135D1STPOST.jpg";
                    var imgpsorname2 = "INNER135D2NDPOST.jpg";
                    var imgpsorname3 = "INNER135D3RDPOST.jpg";
                }
            }
            if (form.posttype.value == "outer") {
                if (form.degree.value == "90degre") {
                    var imgpsorname1 = "OUTER90D1STPOST.jpg";
                    var imgpsorname2 = "OUTER90D2NDPOST.jpg";
                    var imgpsorname3 = "OUTER90D3RDPOST.jpg";
                }
                if (form.degree.value == "135degre") {
                    var imgpsorname1 = "OUTER135D1STPOST.jpg";
                    var imgpsorname2 = "OUTER135D2NDPOST.jpg";
                    var imgpsorname3 = "OUTER135D3RDPOST.jpg";
                }
            }
        }

        if (noofcornerpostval == 2) {
            if (type_obj.value == "4BAY") {
                document.getElementById("postimg12").src =
                    "images/ES31/4BAY/" + imgpsorname1 + "";
                document.getElementById("postimg23").src =
                    "images/ES31/4BAY/" + imgpsorname2 + "";
            }
            if (type_obj.value == "3BAY") {
                document.getElementById("postimg12").src =
                    "images/ES31/3BAY/" + imgpsorname1 + "";
            }
        } else {
            if (type_obj.value == "4BAY") {
                document.getElementById("postimg1").src =
                    "images/ES31/4BAY/" + imgpsorname1 + "";
                document.getElementById("postimg2").src =
                    "images/ES31/4BAY/" + imgpsorname2 + "";
                document.getElementById("postimg3").src =
                    "images/ES31/4BAY/" + imgpsorname3 + "";
            }
            if (type_obj.value == "3BAY") {
                document.getElementById("postimg1").src =
                    "images/ES31/3BAY/" + imgpsorname1 + "";
                document.getElementById("postimg2").src =
                    "images/ES31/3BAY/" + imgpsorname2 + "";
            }
        }

        if (type_obj.value == "2BAY") {
            document.getElementById("postimg1").src =
                "images/ES31/2BAY/" + imgpsorname1 + "";
        }
    }

    var endpanel_type = $("#end_options_type option:selected").text();

    if (endpanel_type == "Extended") {
        if (category_name == "ES31") {
            if (glass_face_obj.value == 1) {
                if (left_lenght_obj.value == "select") {
                    $("div.left").text("Left");
                } else {
                    $("div.left").text(
                        left_lenght_obj.options[left_lenght_obj.selectedIndex].text
                    );
                    $("#c_glass_left_val").val(
                        left_lenght_obj.options[left_lenght_obj.selectedIndex].text
                    );
                    if (leftEndPanel != "") {
                        $("#c_glass_left").val(product_name_price[leftEndPanel][0]);
                    }
                }
                if (right_lenght_obj.value == "select") {
                    $("div.right").text("Right");
                } else {
                    $("div.right").text(
                        right_lenght_obj.options[right_lenght_obj.selectedIndex].text
                    );

                    $("#c_glass_right_val").val(
                        right_lenght_obj.options[right_lenght_obj.selectedIndex].text
                    );

                    if (rightEndPanel != "") {
                        $("#c_glass_right").val(product_name_price[rightEndPanel][0]);
                    }
                }
            } else if (glass_face_obj.value == 2) {
                if (right_lenght_obj.value == "select") {
                    $("div.left").css("display", "none");
                    $("div.right").text("Right");
                } else {
                    $("div.left").css("display", "none");
                    $("div.right").text(
                        right_lenght_obj.options[right_lenght_obj.selectedIndex].text
                    );

                    if (rightEndPanel != "") {
                        $("#c_glass_right").val(product_name_price[rightEndPanel][0]);
                    }
                    $("#c_glass_right_val").val(
                        right_lenght_obj.options[right_lenght_obj.selectedIndex].text
                    );
                }
            } else if (glass_face_obj.value == 3) {
                if (left_lenght_obj.value == "select") {
                    $("div.right").css("display", "none");
                    $("div.left").text("Left");
                } else {
                    $("div.right").css("display", "none");
                    $("div.left").text(
                        left_lenght_obj.options[left_lenght_obj.selectedIndex].text
                    );

                    if (leftEndPanel != "") {
                        $("#c_glass_left").val(product_name_price[leftEndPanel][0]);
                    }
                    $("#c_glass_left_val").val(
                        left_lenght_obj.options[left_lenght_obj.selectedIndex].text
                    );
                }
            } else if (glass_face_obj.value == 4) {
                $("div.left").css("display", "none");
                $("div.right").css("display", "none");
            }
        }
    }

    if (type_obj.value == "1BAY") {
        if (face_lenght_obj.value != "select") {
            $("#c_glass_face_val").val(
                $('[name="face_length"]').find("option:selected").text()
            );
            if (glassName != "") {
                $("#c_glass_face").val(product_name_price[glassName][0]);
            }
            if (flange_covers2_obj.value == "yes") {
                $("#c_glass_a_light").val(product_name_price[light_a][0]);
                $("#c_glass_a_val_light").val(
                    face_lenght_obj.options[face_lenght_obj.selectedIndex].text
                );
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
            if (face_lenght_a_obj.value != "No Glass") {
                if (flange_covers2_obj.value == "yes") {
                    $("#c_glass_a_light").val(product_name_price[light_a][0]);
                    $("#c_glass_a_val_light").val(
                        face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text
                    );
                }
                $("div.glass_a").text(
                    $('[name="face_length_a"]').find("option:selected").text()
                );
            }
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
            if (face_lenght_b_obj.value != "No Glass") {
                if (flange_covers2_obj.value == "yes") {
                    $("#c_glass_b_light").val(product_name_price[light_b][0]);
                    $("#c_glass_b_val_light").val(
                        face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text
                    );
                }
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
            if (
                face_lenght_a_obj.value != "No Glass" &&
                face_lenght_b_obj.value != "No Glass" &&
                face_lenght_c_obj.value != "No Glass"
            ) {
                if (flange_covers2_obj.value == "yes") {
                    $("#c_glass_a_light").val(product_name_price[light_a][0]);
                    $("#c_glass_a_val_light").val(
                        face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text
                    );
                }
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
            if (
                face_lenght_a_obj.value != "No Glass" &&
                face_lenght_b_obj.value != "No Glass" &&
                face_lenght_c_obj.value != "No Glass"
            ) {
                if (flange_covers2_obj.value == "yes") {
                    $("#c_glass_b_light").val(product_name_price[light_b][0]);
                    $("#c_glass_b_val_light").val(
                        face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text
                    );
                }
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
            if (
                face_lenght_a_obj.value != "No Glass" &&
                face_lenght_b_obj.value != "No Glass" &&
                face_lenght_c_obj.value != "No Glass"
            ) {
                if (flange_covers2_obj.value == "yes") {
                    $("#c_glass_c_light").val(product_name_price[light_c][0]);
                    $("#c_glass_c_val_light").val(
                        face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text
                    );
                }
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

        var total = getTotal3Bay(n1, n2, n3, f_n1, f_n2, f_n3);
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
        if (face_lenght_a_obj.value != "select") {
            $("#c_glass_a_val").val(
                $('[name="face_length_a"]').find("option:selected").text()
            );
            if (glassName_a != "") {
                $("#c_glass_a").val(product_name_price[glassName_a][0]);
            }
            if (
                face_lenght_a_obj.value != "No Glass" &&
                face_lenght_b_obj.value != "No Glass" &&
                face_lenght_c_obj.value != "No Glass" &&
                face_lenght_d_obj.value != "No Glass"
            ) {
                if (flange_covers2_obj.value == "yes") {
                    $("#c_glass_a_light").val(product_name_price[light_a][0]);
                    $("#c_glass_a_val_light").val(
                        face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text
                    );
                }
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
            if (
                face_lenght_a_obj.value != "No Glass" &&
                face_lenght_b_obj.value != "No Glass" &&
                face_lenght_c_obj.value != "No Glass" &&
                face_lenght_d_obj.value != "No Glass"
            ) {
                if (flange_covers2_obj.value == "yes") {
                    $("#c_glass_b_light").val(product_name_price[light_b][0]);
                    $("#c_glass_b_val_light").val(
                        face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text
                    );
                }
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
            if (
                face_lenght_a_obj.value != "No Glass" &&
                face_lenght_b_obj.value != "No Glass" &&
                face_lenght_c_obj.value != "No Glass" &&
                face_lenght_d_obj.value != "No Glass"
            ) {
                if (flange_covers2_obj.value == "yes") {
                    $("#c_glass_c_light").val(product_name_price[light_c][0]);
                    $("#c_glass_c_val_light").val(
                        face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text
                    );
                }
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
            if (
                face_lenght_a_obj.value != "No Glass" &&
                face_lenght_b_obj.value != "No Glass" &&
                face_lenght_c_obj.value != "No Glass" &&
                face_lenght_d_obj.value != "No Glass"
            ) {
                if (flange_covers2_obj.value == "yes") {
                    $("#c_glass_d_light").val(product_name_price[light_d][0]);
                    $("#c_glass_d_val_light").val(
                        face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text
                    );
                }
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

    var endpanel_type = $("#end_options_type :selected").text();

    if (type_obj.value == "1BAY") {
        if (endpanel_type == "Extended") {
            $(".left").css("top", "7%");
            $(".left").css("left", "22%");

            $(".right").css("top", "2%");
            $(".right").css("left", "61%");


        } else {
            $(".left").css("display", "none");

            $(".right").css("display", "none");
        }
    }

    if (type_obj.value == "2BAY") {
        if (endpanel_type == "Extended") {
            $(".left").css("top", "7%");
            $(".left").css("left", "10%");

            $(".right").css("top", "1%");
            $(".right").css("left", "77%");



        } else {
            $(".left").css("display", "none");

            $(".right").css("display", "none");
        }
    }

    if (type_obj.value == "3BAY") {
        if (endpanel_type == "Extended") {
            $(".left").css("top", "27%");
            $(".left").css("left", "6%");

            $(".right").css("top", "2%");
            $(".right").css("left", "81%");


        } else {
            $(".left").css("display", "none");

            $(".right").css("display", "none");
        }
    }

    if (type_obj.value == "4BAY") {
        if (endpanel_type == "Extended") {
            $(".left").css("top", "31%");
            $(".left").css("left", "4%");

            $(".right").css("top", "15%");
            $(".right").css("left", "86%");



        } else {
            $(".left").css("display", "none");

            $(".right").css("display", "none");
        }
    }

    var cornerPosition = $("input[name='corner_post']:checked").val();

    var gotocornerpostss = $("input[name='gotocornerpostcheck']:checked").val();
    var noofcornerpostval = $("#noofcornerpost :selected").text();

    if (type_obj.value == "2BAY") {
        if (endpanel_type == "Extended") {
            if (gotocornerpostss == "1") {
                if (form.posttype.value == "inner") {
                    if (form.degree.value == "90degre") {
                        if (cornerPosition == "1st Center Post from Left") {
                            $(".left").css("top", "67%");
                            $(".left").css("left", "6%");

                            $(".right").css("top", "66%");
                            $(".right").css("left", "90%");

                            $(".glass_a").css("top", "66%");
                            $(".glass_a").css("left", "40%");

                            $(".glass_b").css("top", "67%");
                            $(".glass_b").css("left", "58%");


                            $(".total").css("display", "none");
                        }
                    } else if (form.degree.value == "135degre") {
                        if (cornerPosition == "1st Center Post from Left") {
                            $(".left").css("top", "72%");
                            $(".left").css("left", "5%");

                            $(".right").css("top", "51%");
                            $(".right").css("left", "93%");

                            $(".glass_a").css("top", "74%");
                            $(".glass_a").css("left", "44%");

                            $(".glass_b").css("top", "66%");
                            $(".glass_b").css("left", "72%");

                            $(".total").css("display", "none");
                        }
                    }
                } else if (form.posttype.value == "outer") {
                    if (form.degree.value == "90degre") {
                        if (cornerPosition == "1st Center Post from Left") {
                            $(".left").css("top", "3%");
                            $(".left").css("left", "20%");

                            $(".right").css("top", "3%");
                            $(".right").css("left", "72%");

                            $(".glass_a").css("top", "74%");
                            $(".glass_a").css("left", "20%");

                            $(".glass_b").css("top", "71%");
                            $(".glass_b").css("left", "75%");



                            $(".total").css("display", "none");
                        }
                    } else if (form.degree.value == "135degre") {
                        if (cornerPosition == "1st Center Post from Left") {
                            $(".left").css("top", "11%");
                            $(".left").css("left", "13%");

                            $(".right").css("top", "12%");
                            $(".right").css("left", "83%");

                            $(".glass_a").css("top", "77%");
                            $(".glass_a").css("left", "22%");

                            $(".glass_b").css("top", "79%");
                            $(".glass_b").css("left", "75%");

                            $(".total").css("display", "none");
                        }
                    }
                }
            }
        } else {
            if (gotocornerpostss == "1") {
                if (form.posttype.value == "inner") {
                    if (form.degree.value == "90degre") {
                        if (cornerPosition == "1st Center Post from Left") {
                            $(".glass_a").css("top", "66%");
                            $(".glass_a").css("left", "40%");

                            $(".glass_b").css("top", "67%");
                            $(".glass_b").css("left", "58%");

                            $(".total").css("display", "none");
                        }
                    } else if (form.degree.value == "135degre") {
                        if (cornerPosition == "1st Center Post from Left") {
                            $(".glass_a").css("top", "74%");
                            $(".glass_a").css("left", "44%");

                            $(".glass_b").css("top", "66%");
                            $(".glass_b").css("left", "72%");

                            $(".total").css("display", "none");
                        }
                    }
                } else if (form.posttype.value == "outer") {
                    if (form.degree.value == "90degre") {
                        if (cornerPosition == "1st Center Post from Left") {
                            $(".glass_a").css("top", "74%");
                            $(".glass_a").css("left", "20%");

                            $(".glass_b").css("top", "71%");
                            $(".glass_b").css("left", "75%");

                            $(".total").css("display", "none");
                        }
                    } else if (form.degree.value == "135degre") {
                        if (cornerPosition == "1st Center Post from Left") {
                            $(".glass_a").css("top", "77%");
                            $(".glass_a").css("left", "22%");

                            $(".glass_b").css("top", "79%");
                            $(".glass_b").css("left", "75%");

                            $(".total").css("display", "none");
                        }
                    }
                }
            }
        }
    }
    if (type_obj.value == "3BAY") {

        if (gotocornerpostss == "1") {
            if (noofcornerpostval == 2) {
                if (form.posttype.value == "inner") {
                    if (form.degree.value == "90degre") {
                        if (cornerPosition == "1st Center Post from Left") {

                            if (endpanel_type == "Extended") {
                                $(".left").css("top", "90%");
                                $(".left").css("left", "14%");

                                $(".right").css("top", "88%");
                                $(".right").css("left", "82%");
                            } else {
                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }



                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "71%");
                            $(".glass_a").css("left", "41%");

                            $(".glass_b").css("top", "65%");
                            $(".glass_b").css("left", "49%");

                            $(".glass_c").css("top", "72%");
                            $(".glass_c").css("left", "57%");

                            $(".total").css("display", "none");
                        }
                    } else if (form.degree.value == "135degre") {
                        if (cornerPosition == "1st Center Post from Left") {

                            if (endpanel_type == "Extended") {

                                $(".left").css("top", "26%");
                                $(".left").css("left", "6%");

                                $(".right").css("top", "23%");
                                $(".right").css("left", "90%");
                            } else {
                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }





                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "69%");
                            $(".glass_a").css("left", "33%");

                            $(".glass_b").css("top", "63%");
                            $(".glass_b").css("left", "50%");

                            $(".glass_c").css("top", "68%");
                            $(".glass_c").css("left", "69%");

                            $(".total").css("display", "none");
                        }
                    }
                } else if (form.posttype.value == "outer") {
                    if (form.degree.value == "90degre") {
                        if (cornerPosition == "1st Center Post from Left") {

                            if (endpanel_type == "Extended") {

                                $(".left").css("top", "2%");
                                $(".left").css("left", "33%");

                                $(".right").css("top", "4%");
                                $(".right").css("left", "66%");
                            } else {
                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }
                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "57%");
                            $(".glass_a").css("left", "14%");

                            $(".glass_b").css("top", "90%");
                            $(".glass_b").css("left", "49%");

                            $(".glass_c").css("top", "56%");
                            $(".glass_c").css("left", "87%");

                            $(".total").css("display", "none");
                        }
                    } else if (form.degree.value == "135degre") {
                        if (cornerPosition == "1st Center Post from Left") {

                            if (endpanel_type == "Extended") {

                                $(".left").css("top", "20%");
                                $(".left").css("left", "13%");

                                $(".right").css("top", "16%");
                                $(".right").css("left", "82%");
                            } else {
                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }
                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "71%");
                            $(".glass_a").css("left", "13%");

                            $(".glass_b").css("top", "78%");
                            $(".glass_b").css("left", "52%");

                            $(".glass_c").css("top", "65%");
                            $(".glass_c").css("left", "87%");

                            $(".total").css("display", "none");
                        }
                    }
                }
            } else {
                if (form.posttype.value == "inner") {
                    if (form.degree.value == "90degre") {
                        if (cornerPosition == "1st Center Post from Left") {

                            if (endpanel_type == "Extended") {

                                $(".left").css("top", "19%");
                                $(".left").css("left", "4%");

                                $(".right").css("top", "22%");
                                $(".right").css("left", "91%");
                            } else {
                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }
                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "62%");
                            $(".glass_a").css("left", "28%");

                            $(".glass_b").css("top", "62%");
                            $(".glass_b").css("left", "42%");

                            $(".glass_c").css("top", "74%");
                            $(".glass_c").css("left", "64%");

                            $(".total").css("display", "none");
                        } else if (cornerPosition == "2nd Center Post from Left") {

                            if (endpanel_type == "Extended") {
                                $(".left").css("top", "17%");
                                $(".left").css("left", "4%");

                                $(".right").css("top", "17%");
                                $(".right").css("left", "91%");

                            } else {
                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }
                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "67%");
                            $(".glass_a").css("left", "35%");

                            $(".glass_b").css("top", "58%");
                            $(".glass_b").css("left", "56%");

                            $(".glass_c").css("top", "59%");
                            $(".glass_c").css("left", "70%");

                            $(".total").css("display", "none");
                        }
                    } else if (form.degree.value == "135degre") {
                        if (cornerPosition == "1st Center Post from Left") {

                            if (endpanel_type == "Extended") {

                                $(".left").css("top", "16%");
                                $(".left").css("left", "6%");

                                $(".right").css("top", "12%");
                                $(".right").css("left", "90%");
                            } else {
                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }
                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "67%");
                            $(".glass_a").css("left", "35%");

                            $(".glass_b").css("top", "60%");
                            $(".glass_b").css("left", "56%");

                            $(".glass_c").css("top", "58%");
                            $(".glass_c").css("left", "83%");

                            $(".total").css("display", "none");
                        } else if (cornerPosition == "2nd Center Post from Left") {

                            if (endpanel_type == "Extended") {

                                $(".left").css("top", "14%");
                                $(".left").css("left", "5%");

                                $(".right").css("top", "11%");
                                $(".right").css("left", "92%");
                            } else {
                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }
                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "72%");
                            $(".glass_a").css("left", "40%");

                            $(".glass_b").css("top", "59%");
                            $(".glass_b").css("left", "63%");

                            $(".glass_c").css("top", "56%");
                            $(".glass_c").css("left", "84%");

                            $(".total").css("display", "none");
                        }
                    }
                } else if (form.posttype.value == "outer") {
                    if (form.degree.value == "90degre") {
                        if (cornerPosition == "1st Center Post from Left") {

                            if (endpanel_type == "Extended") {

                                $(".left").css("top", "14%");
                                $(".left").css("left", "15%");

                                $(".right").css("top", "10%");
                                $(".right").css("left", "82%");
                            } else {
                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }
                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "74%");
                            $(".glass_a").css("left", "14%");

                            $(".glass_b").css("top", "74%");
                            $(".glass_b").css("left", "65%");

                            $(".glass_c").css("top", "65%");
                            $(".glass_c").css("left", "88%");

                            $(".total").css("display", "none");
                        } else if (cornerPosition == "2nd Center Post from Left") {

                            if (endpanel_type == "Extended") {

                                $(".left").css("top", "13%");
                                $(".left").css("left", "12%");

                                $(".right").css("top", "14%");
                                $(".right").css("left", "80%");
                            } else {
                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }
                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "64%");
                            $(".glass_a").css("left", "14%");

                            $(".glass_b").css("top", "79%");
                            $(".glass_b").css("left", "45%");

                            $(".glass_c").css("top", "72%");
                            $(".glass_c").css("left", "90%");

                            $(".total").css("display", "none");
                        }
                    } else if (form.degree.value == "135degre") {
                        if (cornerPosition == "1st Center Post from Left") {

                            if (endpanel_type == "Extended") {

                                $(".left").css("top", "21%");
                                $(".left").css("left", "10%");

                                $(".right").css("top", "19%");
                                $(".right").css("left", "88%");
                            } else {
                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }
                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "72%");
                            $(".glass_a").css("left", "17%");

                            $(".glass_b").css("top", "74%");
                            $(".glass_b").css("left", "55%");

                            $(".glass_c").css("top", "67%");
                            $(".glass_c").css("left", "83%");

                            $(".total").css("display", "none");
                        } else if (cornerPosition == "2nd Center Post from Left") {

                            if (endpanel_type == "Extended") {
                                $(".left").css("top", "20%");
                                $(".left").css("left", "7%");

                                $(".right").css("top", "21%");
                                $(".right").css("left", "87%");

                            } else {
                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }
                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "68%");
                            $(".glass_a").css("left", "17%");

                            $(".glass_b").css("top", "74%");
                            $(".glass_b").css("left", "47%");

                            $(".glass_c").css("top", "71%");
                            $(".glass_c").css("left", "84%");

                            $(".total").css("display", "none");
                        }
                    }
                }
            }
        }

    }
    if (type_obj.value == "4BAY") {

        if (gotocornerpostss == "1") {
            if (noofcornerpostval == 2) {
                if (form.posttype.value == "inner") {
                    if (form.degree.value == "90degre") {
                        if (cornerPosition == "1st Center Post from Left") {




                            if (endpanel_type == "Extended") {

                                $(".left").css("top", "68%");
                                $(".left").css("left", "12%");

                                $(".right").css("top", "92%");
                                $(".right").css("left", "81%");
                            } else {

                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }


                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "55%");
                            $(".glass_a").css("left", "36%");

                            $(".glass_b").css("top", "50%");
                            $(".glass_b").css("left", "43%");

                            $(".glass_c").css("top", "55%");
                            $(".glass_c").css("left", "50%");

                            $(".glass_d").css("top", "71%");
                            $(".glass_d").css("left", "52%");

                            $(".total").css("display", "none");
                        } else if (cornerPosition == "2nd Center Post from Left") {

                            if (endpanel_type == "Extended") {
                                $(".left").css("top", "93%");
                                $(".left").css("left", "18%");

                                $(".right").css("top", "63%");
                                $(".right").css("left", "82%");
                            } else {

                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }
                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "73%");
                            $(".glass_a").css("left", "47%");

                            $(".glass_b").css("top", "54%");
                            $(".glass_b").css("left", "46%");

                            $(".glass_c").css("top", "49%");
                            $(".glass_c").css("left", "53%");

                            $(".glass_d").css("top", "54%");
                            $(".glass_d").css("left", "60%");

                            $(".total").css("display", "none");
                        }
                    } else if (form.degree.value == "135degre") {
                        if (cornerPosition == "1st Center Post from Left") {

                            if (endpanel_type == "Extended") {
                                $(".left").css("top", "27%");
                                $(".left").css("left", "9%");

                                $(".right").css("top", "19%");
                                $(".right").css("left", "93%");
                            } else {

                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }
                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "65%");
                            $(".glass_a").css("left", "34%");

                            $(".glass_b").css("top", "58%");
                            $(".glass_b").css("left", "45%");

                            $(".glass_c").css("top", "56%");
                            $(".glass_c").css("left", "60%");

                            $(".glass_d").css("top", "58%");
                            $(".glass_d").css("left", "83%");

                            $(".total").css("display", "none");
                        } else if (cornerPosition == "2nd Center Post from Left") {

                            if (endpanel_type == "Extended") {
                                $(".left").css("top", "27%");
                                $(".left").css("left", "5%");

                                $(".right").css("top", "23%");
                                $(".right").css("left", "91%");
                            } else {

                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }
                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "65%");
                            $(".glass_a").css("left", "29%");

                            $(".glass_b").css("top", "56%");
                            $(".glass_b").css("left", "48%");

                            $(".glass_c").css("top", "53%");
                            $(".glass_c").css("left", "60%");

                            $(".glass_d").css("top", "57%");
                            $(".glass_d").css("left", "75%");

                            $(".total").css("display", "none");
                        }
                    }
                } else if (form.posttype.value == "outer") {
                    if (form.degree.value == "90degre") {
                        if (cornerPosition == "1st Center Post from Left") {


                            $(".post").css("display", "none");
                            if (endpanel_type == "Extended") {
                                $(".left").css("top", "11%");
                                $(".left").css("left", "31%");

                                $(".right").css("top", "1%");
                                $(".right").css("left", "58%");
                            } else {

                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }
                            $(".glass_a").css("top", "62%");
                            $(".glass_a").css("left", "13%");

                            $(".glass_b").css("top", "95%");
                            $(".glass_b").css("left", "47%");

                            $(".glass_c").css("top", "62%");
                            $(".glass_c").css("left", "80%");

                            $(".glass_d").css("top", "38%");
                            $(".glass_d").css("left", "73%");

                            $(".total").css("display", "none");
                        } else if (cornerPosition == "2nd Center Post from Left") {

                            if (endpanel_type == "Extended") {
                                $(".left").css("top", "3%");
                                $(".left").css("left", "33%");

                                $(".right").css("top", "11%");
                                $(".right").css("left", "63%");
                            } else {

                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }
                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "40%");
                            $(".glass_a").css("left", "18%");

                            $(".glass_b").css("top", "64%");
                            $(".glass_b").css("left", "11%");

                            $(".glass_c").css("top", "91%");
                            $(".glass_c").css("left", "49%");

                            $(".glass_d").css("top", "61%");
                            $(".glass_d").css("left", "87%");

                            $(".total").css("display", "none");
                        }
                    } else if (form.degree.value == "135degre") {
                        if (cornerPosition == "1st Center Post from Left") {

                            if (endpanel_type == "Extended") {
                                $(".left").css("top", "22%");
                                $(".left").css("left", "13%");

                                $(".right").css("top", "18%");
                                $(".right").css("left", "86%");
                            } else {

                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }
                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "66%");
                            $(".glass_a").css("left", "9%");

                            $(".glass_b").css("top", "74%");
                            $(".glass_b").css("left", "40%");

                            $(".glass_c").css("top", "66%");
                            $(".glass_c").css("left", "76%");

                            $(".glass_d").css("top", "56%");
                            $(".glass_d").css("left", "90%");

                            $(".total").css("display", "none");
                        } else if (cornerPosition == "2nd Center Post from Left") {

                            if (endpanel_type == "Extended") {
                                $(".left").css("top", "21%");
                                $(".left").css("left", "7%");

                                $(".right").css("top", "19%");
                                $(".right").css("left", "85%");
                            } else {

                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }
                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "64%");
                            $(".glass_a").css("left", "11%");

                            $(".glass_b").css("top", "74%");
                            $(".glass_b").css("left", "32%");

                            $(".glass_c").css("top", "60%");
                            $(".glass_c").css("left", "94%");

                            $(".glass_d").css("top", "75%");
                            $(".glass_d").css("left", "71%");

                            $(".total").css("display", "none");
                        }
                    }
                }
            } else {
                if (form.posttype.value == "inner") {
                    if (form.degree.value == "90degre") {
                        if (cornerPosition == "1st Center Post from Left") {

                            if (endpanel_type == "Extended") {
                                $(".left").css("top", "23%");
                                $(".left").css("left", "5%");

                                $(".right").css("top", "36%");
                                $(".right").css("left", "92%");
                            } else {

                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }
                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "55%");
                            $(".glass_a").css("left", "24%");

                            $(".glass_b").css("top", "55%");
                            $(".glass_b").css("left", "34%");

                            $(".glass_c").css("top", "63%");
                            $(".glass_c").css("left", "50%");

                            $(".glass_d").css("top", "73%");
                            $(".glass_d").css("left", "71%");

                            $(".total").css("display", "none");
                        } else if (cornerPosition == "2nd Center Post from Left") {

                            if (endpanel_type == "Extended") {
                                $(".left").css("top", "29%");
                                $(".left").css("left", "4%");

                                $(".right").css("top", "31%");
                                $(".right").css("left", "91%");
                            } else {

                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }
                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "65%");
                            $(".glass_a").css("left", "27%");

                            $(".glass_b").css("top", "58%");
                            $(".glass_b").css("left", "44%");

                            $(".glass_c").css("top", "58%");
                            $(".glass_c").css("left", "54%");

                            $(".glass_d").css("top", "68%");
                            $(".glass_d").css("left", "70%");

                            $(".total").css("display", "none");
                        } else if (cornerPosition == "3rd Center Post from Left") {

                            if (endpanel_type == "Extended") {
                                $(".left").css("top", "33%");
                                $(".left").css("left", "6%");

                                $(".right").css("top", "23%");
                                $(".right").css("left", "92%");
                            } else {

                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }
                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "72%");
                            $(".glass_a").css("left", "30%");

                            $(".glass_b").css("top", "62%");
                            $(".glass_b").css("left", "51%");

                            $(".glass_c").css("top", "55%");
                            $(".glass_c").css("left", "65%");

                            $(".glass_d").css("top", "55%");
                            $(".glass_d").css("left", "76%");

                            $(".total").css("display", "none");
                        }
                    } else if (form.degree.value == "135degre") {
                        if (cornerPosition == "1st Center Post from Left") {

                            if (endpanel_type == "Extended") {
                                $(".left").css("top", "34%");
                                $(".left").css("left", "7%");

                                $(".right").css("top", "20%");
                                $(".right").css("left", "92%");
                            } else {

                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }
                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "66%");
                            $(".glass_a").css("left", "28%");

                            $(".glass_b").css("top", "61%");
                            $(".glass_b").css("left", "42%");

                            $(".glass_c").css("top", "58%");
                            $(".glass_c").css("left", "64%");

                            $(".glass_d").css("top", "56%");
                            $(".glass_d").css("left", "84%");

                            $(".total").css("display", "none");
                        } else if (cornerPosition == "2nd Center Post from Left") {

                            if (endpanel_type == "Extended") {
                                $(".left").css("top", "34%");
                                $(".left").css("left", "6%");

                                $(".right").css("top", "18%");
                                $(".right").css("left", "93%");
                            } else {

                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }
                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "72%");
                            $(".glass_a").css("left", "33%");

                            $(".glass_b").css("top", "60%");
                            $(".glass_b").css("left", "50%");

                            $(".glass_c").css("top", "56%");
                            $(".glass_c").css("left", "65%");

                            $(".glass_d").css("top", "54%");
                            $(".glass_d").css("left", "86%");

                            $(".total").css("display", "none");
                        } else if (cornerPosition == "3rd Center Post from Left") {

                            if (endpanel_type == "Extended") {
                                $(".left").css("top", "31%");
                                $(".left").css("left", "7%");

                                $(".right").css("top", "12%");
                                $(".right").css("left", "93%");
                            } else {

                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }
                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "72%");
                            $(".glass_a").css("left", "35%");

                            $(".glass_b").css("top", "60%");
                            $(".glass_b").css("left", "56%");

                            $(".glass_c").css("top", "51%");
                            $(".glass_c").css("left", "71%");

                            $(".glass_d").css("top", "48%");
                            $(".glass_d").css("left", "85%");

                            $(".total").css("display", "none");
                        }
                    }
                } else if (form.posttype.value == "outer") {
                    if (form.degree.value == "90degre") {
                        if (cornerPosition == "1st Center Post from Left") {

                            if (endpanel_type == "Extended") {
                                $(".left").css("top", "20%");
                                $(".left").css("left", "15%");

                                $(".right").css("top", "7%");
                                $(".right").css("left", "85%");
                            } else {

                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }
                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "73%");
                            $(".glass_a").css("left", "13%");

                            $(".glass_b").css("top", "72%");
                            $(".glass_b").css("left", "55%");

                            $(".glass_c").css("top", "56%");
                            $(".glass_c").css("left", "75%");

                            $(".glass_d").css("top", "46%");
                            $(".glass_d").css("left", "90%");

                            $(".total").css("display", "none");
                        } else if (cornerPosition == "2nd Center Post from Left") {

                            if (endpanel_type == "Extended") {
                                $(".left").css("top", "11%");
                                $(".left").css("left", "13%");

                                $(".right").css("top", "13%");
                                $(".right").css("left", "85%");
                            } else {

                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }
                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "56%");
                            $(".glass_a").css("left", "10%");

                            $(".glass_b").css("top", "74%");
                            $(".glass_b").css("left", "25%");

                            $(".glass_c").css("top", "76%");
                            $(".glass_c").css("left", "67%");

                            $(".glass_d").css("top", "59%");
                            $(".glass_d").css("left", "88%");

                            $(".total").css("display", "none");
                        } else if (cornerPosition == "3rd Center Post from Left") {

                            if (endpanel_type == "Extended") {
                                $(".left").css("top", "4%");
                                $(".left").css("left", "13%");

                                $(".right").css("top", "21%");
                                $(".right").css("left", "82%");
                            } else {

                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }
                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "44%");
                            $(".glass_a").css("left", "7%");

                            $(".glass_b").css("top", "56%");
                            $(".glass_b").css("left", "17%");

                            $(".glass_c").css("top", "76%");
                            $(".glass_c").css("left", "33%");

                            $(".glass_d").css("top", "81%");
                            $(".glass_d").css("left", "81%");

                            $(".total").css("display", "none");
                        }
                    } else if (form.degree.value == "135degre") {
                        if (cornerPosition == "1st Center Post from Left") {

                            if (endpanel_type == "Extended") {
                                $(".left").css("top", "30%");
                                $(".left").css("left", "7%");

                                $(".right").css("top", "15%");
                                $(".right").css("left", "88%");
                            } else {

                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }
                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "75%");
                            $(".glass_a").css("left", "18%");

                            $(".glass_b").css("top", "70%");
                            $(".glass_b").css("left", "53%");

                            $(".glass_c").css("top", "60%");
                            $(".glass_c").css("left", "73%");

                            $(".glass_d").css("top", "53%");
                            $(".glass_d").css("left", "89%");

                            $(".total").css("display", "none");
                        } else if (cornerPosition == "2nd Center Post from Left") {

                            if (endpanel_type == "Extended") {
                                $(".left").css("top", "27%");
                                $(".left").css("left", "7%");

                                $(".right").css("top", "24%");
                                $(".right").css("left", "91%");
                            } else {

                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }
                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "65%");
                            $(".glass_a").css("left", "14%");

                            $(".glass_b").css("top", "72%");
                            $(".glass_b").css("left", "38%");

                            $(".glass_c").css("top", "70%");
                            $(".glass_c").css("left", "68%");

                            $(".glass_d").css("top", "62%");
                            $(".glass_d").css("left", "87%");

                            $(".total").css("display", "none");
                        } else if (cornerPosition == "3rd Center Post from Left") {

                            if (endpanel_type == "Extended") {
                                $(".left").css("top", "28%");
                                $(".left").css("left", "7%");

                                $(".right").css("top", "35%");
                                $(".right").css("left", "89%");
                            } else {

                                $(".left").css("display", "none");
                                $(".right").css("display", "none");
                            }
                            $(".post").css("display", "none");

                            $(".glass_a").css("top", "64%");
                            $(".glass_a").css("left", "13%");

                            $(".glass_b").css("top", "70%");
                            $(".glass_b").css("left", "33%");

                            $(".glass_c").css("top", "75%");
                            $(".glass_c").css("left", "56%");

                            $(".glass_d").css("top", "76%");
                            $(".glass_d").css("left", "86%");

                            $(".total").css("display", "none");
                        }
                    }
                }
            }
        }

    }

    document.getElementById("products_ids").innerHTML = str;

    document.getElementById("left-post").innerHTML = leftPostPrice + ".00";
    document.getElementById("right-post").innerHTML = rightPostPrice + ".00";
    document.getElementById("trasition-post").innerHTML = t_post_price + ".00";
    document.getElementById("face-glass").innerHTML = glassPrice + ".00";
    document.getElementById("total").innerHTML = "$&nbsp;" + totalPrice + ".00";
    if (category_name != "EP36") {
        document.getElementById("make-adjustable").innerHTML = adjust_price + ".00";
    }

    document.getElementById("flange-cover").innerHTML = flangeCoversPrice + ".00";

    document.getElementById("lightbar").innerHTML = flangeCoversPrice2 + ".00";
    document.getElementById("left-Panel").innerHTML = leftEndPanelPrice + ".00";
    document.getElementById("right-panel").innerHTML = rightEndPanelPrice + ".00";

    if (right_lenght_obj.value == "select") {
        $("#right_err").attr("src", "img/iconCheckOff.gif");
        one = false;
    } else {
        $("#right_err").attr("src", "img/iconCheckOn.gif");
        one = true;
    }
    if (left_lenght_obj.value == "select") {
        two = false;
        $("#left_err").attr("src", "img/iconCheckOff.gif");
    } else {
        $("#left_err").attr("src", "img/iconCheckOn.gif");
        two = true;
    }

    if (type_obj.value == "1BAY") {
        if (face_lenght_obj != null && face_lenght_obj.value == "select") {
            $("#glass_a_err").attr("src", "img/iconCheckOff.gif");
            four = false;
        } else {
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            four = true;
        }
        if (one && two && three && four) {} else {}
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
        } else {}
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
        } else {}
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
        } else {}
    }

    if (
        type_obj.value == "2BAY" ||
        type_obj.value == "3BAY" ||
        type_obj.value == "4BAY"
    ) {
        if (degree_obj.value == "select") {
            $("#post_angle_err").attr("src", "img/iconCheckOff.gif");
            eight = false;
        } else {
            $("#post_angle_err").attr("src", "img/iconCheckOn.gif");
            eight = true;
        }

        if (posttype_obj.value == "select") {
            $("#post_type_err").attr("src", "img/iconCheckOff.gif");
            eight = false;
        } else {
            $("#post_type_err").attr("src", "img/iconCheckOn.gif");
            eight = true;
        }

        if (type_obj.value == "3BAY" || type_obj.value == "4BAY") {
            if (noofcornerpost_obj.value == "select") {
                $("#noof_cornerpost_err").attr("src", "img/iconCheckOff.gif");
                eight = false;
            } else {
                $("#noof_cornerpost_err").attr("src", "img/iconCheckOn.gif");
                eight = true;
            }
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

    if (flange_covers2_obj.value == "select") {
        $("#light_err").attr("src", "img/iconCheckOff.gif");
        six = false;
    } else {
        $("#light_err").attr("src", "img/iconCheckOn.gif");
        six = true;
    }
    if (category_name == "EP36" || category_name == "ES73") {
        if (type_obj.value == "1BAY") {
            if (face_lenght_obj.value == "No Glass") {
                four = true;
                six = true;
                $("#light_err").attr("src", "img/iconCheckOn.gif");
                $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
                $("#round_err").attr("src", "img/iconCheckOn.gif");
                seven = true;
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
        if (type_obj.value == "2BAY") {
            if (
                face_lenght_a_obj.value == "No Glass" ||
                face_lenght_b_obj.value == "No Glass"
            ) {
                four = true;
                six = true;
                $("#light_err").attr("src", "img/iconCheckOn.gif");
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
                six = true;
                $("#light_err").attr("src", "img/iconCheckOn.gif");
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
                six = true;
                $("#light_err").attr("src", "img/iconCheckOn.gif");
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
    } else {
        if (type_obj.value == "1BAY") {
            if (face_lenght_obj.value == "No Glass") {
                four = true;
                six = true;
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
                $("#light_err").attr("src", "img/iconCheckOn.gif");
                $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
                $("#glass_b_err").attr("src", "img/iconCheckOn.gif");
                $("#glass_c_err").attr("src", "img/iconCheckOn.gif");
                $("#glass_d_err").attr("src", "img/iconCheckOn.gif");
            }
        }
        if (corner_obj.value == "select") {
            $("#round_err").attr("src", "img/iconCheckOff.gif");
            seven = false;
        } else {
            $("#round_err").attr("src", "img/iconCheckOn.gif");
            seven = true;
        }
    }

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
    if (zero && four && five && six && seven && eight) {} else {}
}

$(document).ready(function() {
    $("#1").click(function() {
        rght = lft = bth = noe = false;
        bth = true;

    });
    $("#2").click(function() {
        rght = lft = bth = noe = false;
        rght = true;

    });
    $("#3").click(function() {
        rght = lft = bth = noe = false;
        lft = true;

    });
    $("#4").click(function() {
        rght = lft = bth = noe = false;
        noe = true;

    });
});

leftstr = '<td><h1>Left Length</h1><span id="left_length_span"><select name="left_length" onchange="getPriceOfProduct(this.form)" id="left_length"  disabled="disabled" class="usecustom"> <option value="12">12"</option><option value="18">18"</option><option value="24">24"</option><option value="30">30"</option><option value="36">36"</option><option value="42">42"</option><option value="custom">Custom</option><option value="" style="display:none;">Custom</option></span></select></td>';
rightstr = '<td><h1>Right Length</h1><span id="right_length_span"><select name="right_length" onchange="getPriceOfProduct(this.form)" id="right_length" disabled="disabled" class="usecustom"> <option value="12">12"</option><option value="18">18"</option><option value="24">24"</option><option value="30">30"</option><option value="36">36"</option><option value="42">42"</option><option value="custom">Custom</option><option value="" style="display:none;">Custom</option></span></select></td>';

$(document).ready(function() {
    $("ul.option li").click(function() {

        action_event(".test-warsi");
        i = $("ul.option").children().length;
        j = 0;
        while (j < i) {
            $("ul.option li").removeClass('selected');
            j++;
        }
        $(this).addClass('selected');
        if ($(this).text() == "Both Closed End Panels" || bth) {
            $("input#glass-face").val(1);
            $("tr#right_lenght").html(rightstr);
            $("tr#left_lenght").html(leftstr);
        } else if ($(this).text() == "Right Closed End Panel" || rght) {
            $("input#glass-face").val(2);
            $("tr#left_lenght").html("<td height='20'></td>");
            $("tr#right_lenght").html(rightstr);
        } else if ($(this).text() == "Left Closed End Panel" || lft) {
            $("tr#right_lenght").html("<td height='20'></td>");
            $("tr#left_lenght").html(leftstr);
            $("input#glass-face").val(3);
        } else if ($(this).text() == "No Closed End Panels" || noe) {
            $("tr#right_lenght").html("<td height='20'></td>");
            $("tr#left_lenght").html("<td height='20'></td>");
            $("input#glass-face").val(4);
        }
        $("select").removeAttr("disabled");
        $("input").removeAttr("disabled");
        if ($(".makeadjustablecheck31").val() == 1) {
            $("#round_check").attr("disabled", true);
        }
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

});

function show_lightbar_pupup(form) {

    var lightbarss = form.light_bar.value;

    if (lightbarss == 'yes') {

        var check_lightbar_value = 0;

        var bay_value = type_obj.value;
        if (bay_value == '1BAY') {
            var faceglass_valueA = $("#face_length").find("option:selected").text();

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

            if (decimal_val_a < 18 || decimal_val_b < 18) {
                check_lightbar_value = 0;
            } else {
                check_lightbar_value = 1;
            }

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

                                form.light_bar.value = "no";
                                form.light_bar.selected = "No";

                                $('#arc_adius').css("display", "");
                                getPriceOfProduct(document.forms['cart_quantity']);

                            }

                        },
                        'Cancel': {
                            'class': 'gray',
                            'action': function() {
                                form.light_bar.value = "no";
                                form.light_bar.selected = "No";
                                getPriceOfProduct(document.forms['cart_quantity']);
                            }

                        }
                    }
                });

            });
        }

    } else {

    }

}

function makeAdjustable(form) {

    if (form.adjustable.value == "yes") {
        form.rounded_corners.value = "round";
        form.rounded_corners.selected = "Rounded";
        form.rounded_corners.disabled = true;
        $(document).ready(function() {
            var elem = $(this).closest('.item');
            $.confirm({
                'title': 'Confirmation',
                'message': ms_adjustable,
                'buttons': {
                    'Proceed': {
                        'class': 'blue',
                        'action': function() {
                            getPriceOfProduct(document.forms['cart_quantity']);

                        }

                    },
                    'Cancel': {
                        'class': 'gray',
                        'action': function() {
                            form.adjustable.value = "no";
                            form.adjustable.selected = "No";
                            form.rounded_corners.value = "select";
                            form.rounded_corners.selected = "Select";
                            form.rounded_corners.disabled = false;
                            getPriceOfProduct(document.forms['cart_quantity']);
                        }

                    }
                }
            });

        });
    } else {
        form.rounded_corners.value = "select";
        form.rounded_corners.selected = "Select";
        form.rounded_corners.disabled = false;
    }

}

function getProductFolderName(productname) {
    foldername = "";
    switch (productname) {
        case 'EP36':
            {
                foldername = "EP-36";
                break;
            }
        case 'ES31':
            {
                foldername = "ES-31";
                break;
            }
        case 'ES67':
            {
                foldername = "ES-67";
                break;
            }
        case 'ES73':
            {
                foldername = "ES-73";
                break;
            }
        case 'ES53':
            foldername = "ES53";
            break;
    }
    return foldername;
}

function nogl(form, el, val) {
    var valcheck = document.getElementById('checkformorethan42').checked

    if (valcheck) {

    } else {
        if (val > 42) {
            var elem = $(this).closest('.item');
            $.confirm({
                'title': 'Confirmation',
                'message': ms_glass,
                'buttons': {
                    'cnfrm': {
                        'title': 'I Agree',
                        'class': 'tick',
                        'action': function() {}
                    },
                    'Proceeded': {
                        'class': 'blue',
                        'action': function() {
                            getPriceOfProduct(document.forms['cart_quantity']);
                        }
                    },
                    'Canceled': {
                        'class': 'gray',
                        'action': function() {
                            $("select[name=" + el + "]")[0].selectedIndex = 0;
                            getPriceOfProduct(document.forms['cart_quantity']);
                        }
                    }
                }
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

    imageName = '';
    if (form.rounded_corners.value == 0) {
        imageName = 'GLASSNORAD.jpg';

    } else {
        imageName = 'GLASS.jpg';

    }
    if (image != "") {
        imageName = image;
    }

    cross = '<input type="button" onclick="getPriceOfProduct(this.form);" style="margin: 0 4px;position: absolute;right: -615px;top: -160px;width: 20px;z-index: 1000000;" value="X" class="rounded-corner-image">'

    image_string = '<img src="images/' + foldername + '/' + imageName + '.jpg" style="width:568px;height:453px;">';

    document.getElementById('additional_image').innerHTML = image_string;
    document.getElementById('ro').innerHTML = cross;

}

function finishImage(form, image) {
    category_name = category_name;
    foldername = getProductFolderName(category_name);
    if (image != "") {
        imageName = image;
    }

    cross = '<input type="button" onclick="getPriceOfProduct(this.form);" style="margin: 0 4px;position: absolute;right: -615px;top: -160px;width: 20px;z-index: 1000000;" value="X" class="rounded-corner-image">'

    image_string = '<img src="images/' + imageName + '" style="width:568px;height:453px">';

    document.getElementById('additional_image').innerHTML = image_string;
    document.getElementById('ro').innerHTML = cross;
}

function changeGlassImage1(form, type) {
    foldername = getProductFolderName(category_name) + form.type.value;

    imageName = '';
    if (form.rounded_corners.value == 0) {
        imageName = 'GLASSNORAD.jpg';
    } else {
        imageName = 'GLASS.jpg'
    }
    image_string = '<img src="images/' + foldername + '/' + imageName + '" style="width:100%"><div id="top"></div><div id="bottom"></div><div id="left1"></div>';
    document.getElementById('additional_image').innerHTML = image_string;
    if (type == "G") {
        document.getElementById('top').innerHTML = (parseInt(form.face_length.value) - 2) + ' 1/8"';
        document.getElementById('bottom').innerHTML = (parseInt(form.face_length.value) - 2) + ' 1/8"';
    } else if (type == "A") {
        document.getElementById('top').innerHTML = (parseInt(form.face_length_a.value) - 2) + ' 1/8"';
        document.getElementById('bottom').innerHTML = (parseInt(form.face_length_a.value) - 2) + ' 1/8"';
        if (category_name == "EP15") {
            document.getElementById('left1').innerHTML = (parseInt(form.glass_face.value) - 2) + ' 1/2"';
        }
        if (category_name == "EP5") {
            document.getElementById('left1').innerHTML = (parseInt(form.post_height.value) - 2) + ' 1/2"';
        }
    } else if (type == "B") {
        document.getElementById('top').innerHTML = (parseInt(form.face_length_b.value) - 2) + ' 1/8"';
        document.getElementById('bottom').innerHTML = (parseInt(form.face_length_b.value) - 2) + ' 1/8"';
        if (category_name == "EP15") {
            document.getElementById('left1').innerHTML = (parseInt(form.glass_face.value) - 2) + ' 1/2"';
        }
        if (category_name == "EP5") {
            document.getElementById('left1').innerHTML = (parseInt(form.post_height.value) - 2) + ' 1/2"';
        }
    } else if (type == "C") {
        document.getElementById('top').innerHTML = (parseInt(form.face_length_c.value) - 2) + ' 1/8"';
        document.getElementById('bottom').innerHTML = (parseInt(form.face_length_c.value) - 2) + ' 1/8"';
        if (category_name == "EP15") {
            document.getElementById('left1').innerHTML = (parseInt(form.glass_face.value) - 2) + ' 1/2"';
        }
        if (category_name == "EP5") {
            document.getElementById('left1').innerHTML = (parseInt(form.post_height.value) - 2) + ' 1/2"';
        }
    } else if (type == "D") {

        document.getElementById('top').innerHTML = (parseInt(form.face_length_d.value) - 2) + ' 1/8"';

        document.getElementById('bottom').innerHTML = (parseInt(form.face_length_d.value) - 2) + ' 1/8"';

        if (category_name == "EP15") {

            document.getElementById('left1').innerHTML = (parseInt(form.glass_face.value) - 2) + ' 1/2"';

        }

        if (category_name == "EP5") {

            document.getElementById('left1').innerHTML = (parseInt(form.post_height.value) - 2) + ' 1/2"';

        }

    } else if (type == "L") {
        document.getElementById('left1').innerHTML = (parseInt(form.post_height.value) - 2) + ' 1/2"';
        document.getElementById('top').innerHTML = (parseInt(form.left_length.value) - 2) + ' 1/8"';
    } else if (type == "R") {
        document.getElementById('left1').innerHTML = (parseInt(form.post_height.value) - 2) + ' 1/2"';
        document.getElementById('top').innerHTML = (parseInt(form.right_length.value) - 2) + ' 1/8"';
    }
}

function getVedio() {
    str = '<video id="example_video_1" class="video-js" width="600" height="480" controls="controls" preload="auto" poster="pic.jpg" autoplay ><source src="images/flang.mp4"' + " type='video/mp4; codecs=" + '"avc1.42E01E, mp4a.40.2"' + ' /><source src="images/flang.webm"' + " type='video/webm; codecs=" + '"vp8, vorbis"' + ' /><source src="images/flang.ogv"' + " type='video/ogg; codecs=" + '"theora, vorbis"' + ' /><object id="flash_fallback_1" class="vjs-flash-fallback" width="640" height="264" type="application/x-shockwave-flash" data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf"><param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" /><param name="allowfullscreen" value="true" /><param name="flashvars" value=' + "config={" + '"playlist":["pic.jpg", {"url": "images/flang.mp4","autoPlay":false,"autoBuffering":true}]}' + ' /><img src="pic.jpg" width="640" height="480" alt="Poster Image" title="No video playback capabilities." /></object></video>';
    document.getElementById('additional_image').innerHTML = str;

}

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
    if ($('#end_options_type').val() == "extended") {
        if (form.glass_face.value == 1) {
            if (form.right_length.value == "select") {
                x += '<li>Right Length <span style="color:red">?</span></li>';
                check = false;
            }
            if (form.left_length.value == "select") {
                x += '<li>Left Length <span style="color:red">?</span></li>';
                check = false;
            }
        } else if (form.glass_face.value == 2) {
            if (form.right_length.value == "select") {
                x += '<li>Right Length <span style="color:red">?</span></li>';
                check = false;
            }
        } else if (form.glass_face.value == 3) {
            if (form.left_length.value == "select") {
                x += '<li>Left Length <span style="color:red">?</span></li>';
                check = false;
            }
        }
    }
    if (form.flange_covers.value == "select") {
        x += '<li>Flange Covers <span style="color:red">?</span></li>';
        check = false;
    }
    if (form.rounded_corners.value == "select" && ck) {
        x += '<li>Glass Corners <span style="color:red">?</span></li>';
        check = false;
    }
    if (form.light_bar.value == "select") {
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

        var var1 = var2 = var3 = var4 = var5 = var6 = var7 = var8 = var9 = var10 = var11 = var12= endpaneltype = flange = "";

        flange = form.flange_covers.options[form.flange_covers.selectedIndex].text;

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
 endpaneltype = form.end_options_type.options[form.end_options_type.selectedIndex].text;
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
                img: img_ajx,
                ptype: var9,
                pdegree: var10,
                pposi: var11,
                corny: gotocornerpostss,
                nocorpost: var12,
                endpaneltype: endpaneltype
            },
            cache: false,
            contentType: "application/x-www-form-urlencoded",
            success: function(data, textStatus, request) {

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
                    }

                }
            }
        });

    });
    $('.item .delete3').click(function() {

        var elem = $(this).closest('.item');

        $.confirm({

            'title': 'Confirmation',
            'message': 'Please select face length',
            'buttons': {
                'Proceed': {
                    'class': 'blue',
                    'action': function() {

                        return false;

                    }
                },
                'Cancel': {
                    'class': 'gray',
                    'action': function() {
                        return false;
                    }

                }
            }
        });
        $('.gray').css('display', 'none');
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

$(document).ready(function() {
    zero = true;
    $("input#glass-face").val(4);
    this.forms.cart_quantity.rounded_corners.value = "squared";
    this.forms.cart_quantity.rounded_corners.selected = "Squared";

    $("#end_options").change(function() {
        if ($("#end_options").val() != "select") {
            if ($(this).val() == "Both Closed End Panels") {
                $("input#glass-face").val(1);
            } else if ($(this).val() == "Right Closed End Panel") {
                $("input#glass-face").val(2);
            } else if ($(this).val() == "Left Closed End Panel") {
                $("input#glass-face").val(3);
            } else if ($(this).val() == "No Closed End Panels") {
                $("input#glass-face").val(4);
            }
            if ($(".makeadjustablecheck31").val() != "select") {

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

$(document).ready(function() {
    show_panel_type(this.form);
});

$(document).ready(function() {
    show_panel_type(this.form);
});

function show_panel_type(form) {
    $("input#glass-face").val(4);
    getPriceOfProduct(document.forms['cart_quantity']);
    var endpanel_val = $("#end_options option:selected").text();
    var endpanel_type = $("#end_options_type option:selected").text();

    if (endpanel_type == "Extended") {
        if (endpanel_val == "Both Ends") {
            $("input#glass-face").val(1)
            $("#right_length").removeAttr("disabled");
            $("#left_length").removeAttr("disabled");
            $("tr#left_lenght").css('display', '');
            $("tr#right_lenght").css('display', '');
            $("#endpan_err").attr("src", "img/iconCheckOn.gif");
        } else if (endpanel_val == "Right End") {
            $("#right_length").removeAttr("disabled");
            $("#left_length").attr("disabled", "disabled");
            $("input#glass-face").val(2);
            $("tr#left_lenght").css('display', 'none');
            $("tr#right_lenght").css('display', '');
            $("#endpan_err").attr("src", "img/iconCheckOn.gif");
        } else if (endpanel_val == "Left End") {
            $("#left_length").removeAttr("disabled");
            $("#right_length").attr("disabled", "disabled");
            $("input#glass-face").val(3);
            $("tr#left_lenght").css('display', '');
            $("tr#right_lenght").css('display', 'none');
            $("#endpan_err").attr("src", "img/iconCheckOn.gif");
        } else if (endpanel_val == "No Ends") {
            $("input#glass-face").val(4);
            $("#right_length").attr("disabled", "disabled");
            $("#left_length").attr("disabled", "disabled");
            $("tr#left_lenght").css('display', 'none');
            $("tr#right_lenght").css('display', 'none');
            $("#endpan_err").attr("src", "img/iconCheckOn.gif");
        } else {
            $("input#glass-face").val(4);
            $("#right_length").attr("disabled", "disabled");
            $("#left_length").attr("disabled", "disabled");
            $("tr#left_lenght").css('display', 'none');
            $("tr#right_lenght").css('display', 'none');
            $("#endpan_err").attr("src", "img/iconCheckOff.gif");
        }

        getPriceOfProduct(document.forms['cart_quantity']);
    } else {
        if (endpanel_val == "Both Ends") {
            $("input#glass-face").val(1)
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

        $("tr#left_lenght").css('display', 'none');
        $("tr#right_lenght").css('display', 'none');

        getPriceOfProduct(document.forms['cart_quantity']);
    }

}

function noGlass() {

    $("div.glass").text("");
    $("div.glass_a").text("");
    $("div.glass_b").text("");
    $("div.glass_c").text("");
    $("div.glass_d").text("");
    $("div.total").text("");

    $('#c_glass_right_val').val('');
    $('#c_glass_right').val('');

    $('#c_glass_left_val').val('');
    $('#c_glass_left').val('');

    $('#c_glass_face_val').val('');
    $('#c_glass_face').val('');

    $('#c_glass_a_val').val('');
    $('#c_glass_a').val('');

    $('#c_glass_b_val').val('');
    $('#c_glass_b').val('');

    $('#c_glass_c_val').val('');
    $('#c_glass_c').val('');
    $('#c_glass_d_val').val('');
    $('#c_glass_d').val('');

}

function setHideShow(selector, msg) {
    setShowEvent(selector, msg)

}

function setHideShow1(selector, msg) {
    setShowEventmsg(selector, msg)

}

function setHideShow2(selector, msg) {
    setShowEventmsg2(selector, msg)

}

function setShowEvent(selector, msg) {

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
}

function jsconfirm($msg, category_name, ispost, custom, post, endcheckk) {
    $.confirm({

        'title': 'Confirmation',
        'message': $msg,
        'buttons': {
            'Proceed': {
                'class': 'blue',
                'action': function() {
                    var lastmin = 0;
                    var c = 0;
                    $('#is_custom').val('Yes');
                    if (post == 'yes') {
                        $('.usecustom').each(function() {
                            checkfopost = 0;
                            my_facelengt_select = "";
                            my_facelengt_select += '<select name="' + $(this).attr("name") + '" id="' + $(this).attr("name") + '"  onchange="getPriceOfProduct(this.form);show_lightbar_pupup(this.form);" >';
                            $('[name="' + $(this).attr("name") + '"] > option').each(function() {

                                if ($(this).val() != 'custom') {

                                    my_facelengt_select += '<option value="' + $(this).val() + '" style="display:none;">' + $(this).val() + '"</option>';
                                } else {
                                    my_facelengt_select += '<option value="12" selected="selected" >Select</option>';
                                    my_facelengt_select += '<option value="custom">Custom</option>';
                                    my_facelengt_select += '<option value="No Glass">No Glass</option>';
                                    my_facelengt_select += '<option value="" style="display:none;">Custom</option>';
                                    return false;
                                }

                            });

                            $('#' + $(this).attr("name") + '_span').html(my_facelengt_select);
                        })
                        ispost = true;
                        c = 1;
                    }
                    if ((ispost) && (c == 0)) {
                        lastmin = 4;
                    } else { lastmin = 2; }

                    my_facelengt_select = "";
                    my_facelengt_select += '<select name="' + custom.attr("name") + '" id="' + custom.attr("name") + '"  onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);" >';

                    var myArray = new Array();
                    var i = 1;
                    $('[name="' + custom.attr("name") + '"] > option').each(function() {

                        if ($(this).val() == 48 || $(this).val() == 54) {

                        } else {

                            if ($(this).val() != 'custom') {
                                myArray[i] = $(this).val();
                                i++;
                            }
                        }

                    });

                    if (post == 'yes') {
                        if (('<?php echo $category_name; ?>' == 'EP11') || ('<?php echo $category_name; ?>' == 'EP12')) {
                            myArray = new Array("", "12", "18", "22", "");
                        } else {
                            var j = 0;
                            for (i = 8; i < myArray[1]; i++) {

                                my_facelengt_select += '<option value="' + myArray[1] + '">' + i + '"</option>';
                                my_facelengt_select += '<option value="' + myArray[1] + '">' + i + '-1/4' + '"</option>';
                                my_facelengt_select += '<option value="' + myArray[1] + '">' + i + '-1/2' + '"</option>';
                                my_facelengt_select += '<option value="' + myArray[1] + '">' + i + '-3/4' + '"</option>';
                                j = i;
                            }
                        }
                    } else {

                        var j = 0;

                        if (endcheckk == 'yes') {
                            my_facelengt_select += '<option value="18">17"</option>';
                            my_facelengt_select += '<option value="18">18"</option>';
                            my_facelengt_select += '<option value="24">19"</option>';
                            my_facelengt_select += '<option value="24">20"</option>';
                            my_facelengt_select += '<option value="24">21"</option>';
                            my_facelengt_select += '<option value="24">22"</option>';
                            my_facelengt_select += '<option value="24">23"</option>';
                            my_facelengt_select += '<option value="24">24"</option>';
                            my_facelengt_select += '<option value="30">25"</option>';
                            my_facelengt_select += '<option value="30">26"</option>';
                            my_facelengt_select += '<option value="30">27"</option>';
                            my_facelengt_select += '<option value="30">28"</option>';
                            my_facelengt_select += '<option value="30">29"</option>';
                            my_facelengt_select += '<option value="30">30"</option>';
                            my_facelengt_select += '<option value="36">31"</option>';
                            my_facelengt_select += '<option value="36">32"</option>';
                            my_facelengt_select += '<option value="36">33"</option>';
                            my_facelengt_select += '<option value="36">34"</option>';
                            my_facelengt_select += '<option value="36">35"</option>';
                            my_facelengt_select += '<option value="36">36"</option>';

                        } else {

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

                        }

                    }

                    if (endcheckk == 'yes') {

                    } else {

                        for (i = 1; i <= myArray.length - lastmin; i++) {
                            for (j = myArray[i]; j < myArray[i + 1]; j++) {
                                if (j > myArray[i]) {

                                } else {

                                }
                                if (j != 42) {

                                }
                            }
                        }

                    }

                    if ((post == 'yes') && ('<?php echo $category_name; ?>' == 'EP5')) {

                        var j = 0;
                        for (i = 22; i < 30; i++) {

                            my_facelengt_select += '<option value="' + 26 + '">' + i + '"</option>';
                            my_facelengt_select += '<option value="' + 26 + '">' + i + '-1/4' + '"</option>';
                            my_facelengt_select += '<option value="' + 26 + '">' + i + '-1/2' + '"</option>';
                            my_facelengt_select += '<option value="' + 26 + '">' + i + '-3/4' + '"</option>';
                            j = i;
                        }
                        my_facelengt_select += '<option value="' + 26 + '">' + 30 + '"</option>';
                    } else if ((post == 'yes') && ('<?php echo $category_name; ?>' == 'EP11' || '<?php echo $category_name; ?>' == 'EP12')) {

                        var j = 0;
                        for (i = 22; i < 24; i++) {

                            my_facelengt_select += '<option value="' + 22 + '">' + i + '"</option>';
                            my_facelengt_select += '<option value="' + 22 + '">' + i + '-1/4' + '"</option>';
                            my_facelengt_select += '<option value="' + 22 + '">' + i + '-1/2' + '"</option>';
                            my_facelengt_select += '<option value="' + 22 + '">' + i + '-3/4' + '"</option>';
                            j = i;
                        }
                        my_facelengt_select += '<option value="' + 22 + '">' + 24 + '"</option>';
                    } else {

                    }

                    if (endcheckk == 'yes') {

                    } else {

                        for (i = 42; i <= 48; i++) {

                            if (i != 42) {
                                my_facelengt_select += '<option value="48" style="color:red">' + i + '"</option>';
                            }
                            if (i != 48) {
                                my_facelengt_select += '<option value="48" style="color:red">' + i + '-1/4' + '"</option>';
                                my_facelengt_select += '<option value="48" style="color:red">' + i + '-1/2' + '"</option>';
                                my_facelengt_select += '<option value="48" style="color:red">' + i + '-3/4' + '"</option>';
                            }

                        }
                        for (i = 48; i <= 54; i++) {

                            if (i != 48) {
                                my_facelengt_select += '<option value="54" style="color:red">' + i + '"</option>';
                            } else {

                            }

                            if (i != 54) {
                                my_facelengt_select += '<option value="54" style="color:red">' + i + '-1/4' + '"</option>';
                                my_facelengt_select += '<option value="54" style="color:red">' + i + '-1/2' + '"</option>';
                                my_facelengt_select += '<option value="54" style="color:red">' + i + '-3/4' + '"</option>';
                            }

                        }

                        my_facelengt_select += '<option value="No Glass">No Glass</option>';

                    }

                    $('#' + custom.attr("name") + '_span').html(my_facelengt_select);

                    if (!ispost) {

                    }
                    if (('<?php echo $category_name; ?>' == 'EP11' || '<?php echo $category_name; ?>' == 'EP12')) {
                        getPriceOfProduct(document.forms['cart_quantity']);
                    }
                    var checkall = true;
                    if ($('select[name="face_length"]').length) {
                        $('.glass').text($('[name="face_length"]').find('option:selected').text());
                        if ($('[name="face_length"]').find('option:selected').text() == 'Select') {
                            checkall = false;
                        }
                    }
                    if ($('select[name="post_height"]').length) {
                        $('.post').text($('[name="post_height"]').find('option:selected').text());
                        if ($('[name="post_height"]').find('option:selected').text() == 'Select') {
                            checkall = false;
                        }
                    }
                    if ($('select[name="left_length"]').length) {
                        $('.left').text($('[name="left_length"]').find('option:selected').text());
                        if ($('[name="left_length"]').find('option:selected').text() == 'Select') {
                            checkall = false;
                        }
                    }
                    if ($('select[name="right_length"]').length) {
                        $('.right').text($('[name="right_length"]').find('option:selected').text());
                        if ($('[name="right_length"]').find('option:selected').text() == 'Select') {
                            checkall = false;
                        }
                    }
                    if ($('select[name="face_length_a"]').length) {
                        $('.glass_a').text($('[name="face_length_a"]').find('option:selected').text());
                        if ($('[name="face_length_a"]').find('option:selected').text() == 'Select') {
                            checkall = false;
                        }
                    }
                    if ($('select[name="face_length_b"]').length) {
                        $('.glass_b').text($('[name="face_length_b"]').find('option:selected').text());
                        if ($('[name="face_length_b"]').find('option:selected').text() == 'Select') {
                            checkall = false;
                        }
                    }
                    if ($('select[name="face_length_c"]').length) {
                        $('.glass_c').text($('[name="face_length_c"]').find('option:selected').text());
                        if ($('[name="face_length_c"]').find('option:selected').text() == 'Select') {
                            checkall = false;
                        }
                    }
                    if ($('select[name="face_length_d"]').length) {
                        $('.glass_d').text($('[name="face_length_d"]').find('option:selected').text());
                        if ($('[name="face_length_d"]').find('option:selected').text() == 'Select') {
                            checkall = false;
                        }
                    }
                    $('#is_custom').val('Yes');
                    if (checkall) {
                        $('#ckall').val(true);
                        getPriceOfProduct(document.forms['cart_quantity']);
                    } else {
                        $('#ckall').val(false);

                        getPriceOfProduct(document.forms['cart_quantity']);
                    }
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
}

$(document).ready(function() {

    $("[data-labelfor]").click(function() {
        $('#' + $(this).attr("data-labelfor")).prop('checked',
            function(i, oldVal) {
                return !oldVal;
            });
    });

    $('.showtable11').css('display', 'none');
    $('.showtable21').css("display", "none");

});

$(document).ready(function() {
    $('#gotocornerpost').click(function() {
        if (screen.width >= 992 && screen.width <= 1024) {
            if ($(this).data('bay') == '2BAY') {
                $('.icons-quotes2').css('margin-top', '-5rem');
            } else if ($(this).data('bay') == '3BAY') {
                $('.icons-quotes2').css('margin-top', '-6rem');
            } else if ($(this).data('bay') == '4BAY') {
                $('.icons-quotes2').css('margin-top', '-13rem');
            }
        }
        $('#showtable1').toggle('slow');
        $('#showtable2').toggle('slow');
        $('#forstarightpost').toggle('slow');
        $('#hidetable1').toggle('hide');
        $('#hidetable2').toggle('hide');
        $('#hidetable3').toggle('hide');
        $('#forgotot').toggle('hide');
        $('#forgotot11').toggle('hide');
        $('#quotetext span').html('&nbsp;&nbsp;4)');
        $('#addcartandfavorite span').html('&nbsp;&nbsp;5)');
        $('.showtable11').css('display', '');
        $('.showtable21').css('display', '');
    });
})

$(document).ready(function() {
    $('#backtostraightpost').click(function() {
        if (screen.width >= 992 && screen.width <= 1024) {
            if ($(this).data('bay') == '2BAY') {
                $('.icons-quotes2').css('margin-top', '-6rem');
            } else if ($(this).data('bay') == '3BAY') {
                $('.icons-quotes2').css('margin-top', '-7.50rem');
            } else if ($(this).data('bay') == '4BAY') {
                $('.icons-quotes2').css('margin-top', '-8.50rem');
            }
        }
        $('#showtable1').toggle('slow');
        $('#showtable2').toggle('slow');

        $('.showtable11').css('display', 'none');
        $('.showtable21').css("display", "none");

        $('#forstarightpost').toggle('slow');
        $('#hidetable1').toggle('hide');
        $('#hidetable2').toggle('hide');
        $('#hidetable3').toggle('hide');
        $('#forgotot').toggle('hide');
        $('#forgotot11').toggle('hide');
        $('#quotetext span').html('&nbsp;&nbsp;5)');
        $('#addcartandfavorite span').html('&nbsp;&nbsp;6)');
    });
})

function change_corner_post_no() {

    var noofcornerpost = $('#noofcornerpost :selected').text();

    if (noofcornerpost == 2) {
        $('#fortwo_corner_post').toggle('show');
        $('#forone_corner_post').toggle('hide');
        $('#forone_corner_post2').toggle('hide');
    } else {
        $('#fortwo_corner_post').toggle('hide');
        $('#forone_corner_post').toggle('show');
        $('#forone_corner_post2').toggle('show');

    }

}