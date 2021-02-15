function getPriceOfProduct(form) {
    var type = form.type;
    if ($('#customheight').is(':checked')) {
        $('.option-panel').css('visibility', 'hidden');
        //getPriceOfProduct(document.forms['cart_quantity']);
    } else {
        $('.option-panel').css('visibility', 'visible');
    }
    //$('#product_type').val($('.product-title').text());
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
    $("#c_glass_mult").val(1);
    $("#c_glass_a_mult").val(1);
    $("#c_glass_b_mult").val(1);
    $("#c_glass_c_mult").val(1);
    $("#c_glass_d_mult").val(1);
    $("#c_glass_right_mult").val(1);
    $("#c_glass_left_mult").val(1);
    if (checkall) {
        $('#ckall').val(true);
    }

    //checkformorethan42

    //checkformorethan42
    //FOR MORE THAN 42 GLASS
    var checkmoretha42selected = $('#one').is(':checked');

    if (checkmoretha42selected) {
        $("#checkformorethan42").attr("checked", true);
    }
    var checkmoretha42selectedall = $('#checkformorethan42').is(':checked');
    if (type.value == "4BAY") {
        var customefaceA = $('#customefaceA').is(':checked');

        if (customefaceA) {
            var faceA_get = $('[name="face_length_a"]').find('option:selected').text();
            var faceA_get_val = $('[name="face_length_a"]').find('option:selected').val();
            var faceB_get = $('[name="face_length_b"]').find('option:selected').text();
            var faceB_get_val = $('[name="face_length_b"]').find('option:selected').val();
            var faceC_get = $('[name="face_length_c"]').find('option:selected').text();
            var faceC_get_val = $('[name="face_length_c"]').find('option:selected').val();
            var faceD_get = $('[name="face_length_d"]').find('option:selected').text();
            var faceD_get_val = $('[name="face_length_d"]').find('option:selected').val();

            //alert(faceB_get);
            if (faceB_get != 'Custom') {
                //alert(faceB_get);
                if (faceB_get == 'Select') {
                    form.face_length_b.value = faceA_get_val;
                    form.face_length_b.selected = faceA_get;
                    //$('#face_length_b option[value="'+faceA_get_val+'"]').text(faceA_get);
                } else {
                    form.face_length_b.value = faceB_get_val;
                    $('#face_length_b option[value="' + faceB_get_val + '"]').text(faceB_get);
                }
            }
            if (faceC_get != 'Custom') {
                //alert(faceC_get);
                if (faceC_get == 'Select') {
                    form.face_length_c.value = faceA_get_val;
                    form.face_length_c.selected = faceA_get;
                    //$('#face_length_c option[value="'+faceA_get_val+'"]').text(faceA_get);
                } else {
                    form.face_length_c.value = faceC_get_val;
                    $('#face_length_c option[value="' + faceC_get_val + '"]').text(faceC_get);
                }
            }
            if (faceD_get != 'Custom') {
                if (faceD_get == 'Select') {
                    form.face_length_d.value = faceA_get_val;
                    form.face_length_d.selected = faceA_get;
                    //$('#face_length_d option[value="'+faceA_get_val+'"]').text(faceA_get);
                } else {
                    form.face_length_d.value = faceD_get_val;
                    $('#face_length_d option[value="' + faceD_get_val + '"]').text(faceD_get);
                }
            } else {
                form.face_length_b.value = faceA_get_val;
                $('#face_length_b option[value="' + faceA_get_val + '"]').text(faceA_get);
                //form.face_length_b.disabled=true;	

                form.face_length_c.value = faceA_get_val;
                $('#face_length_c option[value="' + faceA_get_val + '"]').text(faceA_get);
                //form.face_length_c.disabled=true;

                form.face_length_d.value = faceA_get_val;
                $('#face_length_d option[value="' + faceA_get_val + '"]').text(faceA_get);
                //form.face_length_d.disabled=true;
            }
            $("#checkboxbfor4bayA").attr("checked", true);
            //var option_cust='<option value="48">48"</option><option value="54">54"</option>';

            $('#optio_48_b').css("display", "block");
            $('#optio_54_b').css("display", "block");
            $('#optio_48_c').css("display", "block");
            $('#optio_54_c').css("display", "block");
            $('#optio_48_d').css("display", "block");
            $('#optio_54_d').css("display", "block");

            //$('#show_select_faceb_fora').css("display","block");
            //$('#face_length_b').css("display","none;");
            //$('#undefined').css("display","none;");

            //$('#show_select_faceb_fora').attr('name', 'other_amount');

        } else {

        }

        var checkcheckedb = $('#checkboxbfor4bayA').is(':checked');
        //alert(checkcheckedb);

        if (checkcheckedb) {
            var faceA_get = $('[name="face_length_a"]').find('option:selected').text();
            var faceA_get_val = $('[name="face_length_a"]').find('option:selected').val();
            var faceB_get = $('[name="face_length_b"]').find('option:selected').text();
            var faceB_get_val = $('[name="face_length_b"]').find('option:selected').val();
            var faceC_get = $('[name="face_length_c"]').find('option:selected').text();
            var faceC_get_val = $('[name="face_length_c"]').find('option:selected').val();
            var faceD_get = $('[name="face_length_d"]').find('option:selected').text();
            var faceD_get_val = $('[name="face_length_d"]').find('option:selected').val();

            //if FacelengthB not same
            if (faceB_get != 'Custom') {
                //$("#checkbfor4bayBnonsame").attr("checked",true);	

                if (faceB_get == '8"') {

                    $("#face_length_b option").filter(function() {
                        return this.text == faceA_get;
                    }).attr('selected', true);

                } else {
                    $("#face_length_b option").filter(function() {
                        return this.text == faceB_get;
                    }).attr('selected', true);

                }

            } else {
                $("#face_length_b option").filter(function() {
                    return this.text == faceA_get;
                }).attr('selected', true);
            }

            //alert(faceC_get);
            //if FacelengthC not same

            if (faceC_get != 'Custom') {
                //$("#checkbfor4bayBnonsame").attr("checked",true);	

                if (faceC_get == '8"') {

                    $("#face_length_c option").filter(function() {
                        return this.text == faceA_get;
                    }).attr('selected', true);

                } else {
                    $("#face_length_c option").filter(function() {
                        return this.text == faceC_get;
                    }).attr('selected', true);

                }

            } else {
                $("#face_length_c option").filter(function() {
                    return this.text == faceA_get;
                }).attr('selected', true);
            }

            //if FacelengthD not same

            if (faceD_get != 'Custom') {
                //$("#checkbfor4bayBnonsame").attr("checked",true);	

                if (faceD_get == '8"') {

                    $("#face_length_d option").filter(function() {
                        return this.text == faceA_get;
                    }).attr('selected', true);

                } else {
                    $("#face_length_d option").filter(function() {
                        return this.text == faceD_get;
                    }).attr('selected', true);

                }

            } else {
                $("#face_length_d option").filter(function() {
                    return this.text == faceA_get;
                }).attr('selected', true);
            }

            $('#optio_48_b').css("display", "block");
            $('#optio_54_b').css("display", "block");
            $('#optio_48_c').css("display", "block");
            $('#optio_54_c').css("display", "block");
            $('#optio_48_d').css("display", "block");
            $('#optio_54_d').css("display", "block");

            $('.customsame').css("display", "block");
            $('.instock').css("display", "none");

        }

        var customefaceB = $('#customefaceB').is(':checked');
        if (customefaceB) {
            var faceB_get = $('[name="face_length_b"]').find('option:selected').text();
            var faceB_get_val = $('[name="face_length_b"]').find('option:selected').val();
            var faceC_get = $('[name="face_length_c"]').find('option:selected').text();
            var faceC_get_val = $('[name="face_length_c"]').find('option:selected').val();
            var faceD_get = $('[name="face_length_d"]').find('option:selected').text();
            var faceD_get_val = $('[name="face_length_d"]').find('option:selected').val();

            if (faceC_get != 'Custom') {
                //alert(faceC_get);
                if (faceC_get == 'Select') {
                    form.face_length_c.value = faceB_get_val;
                    form.face_length_c.selected = faceB_get;
                    //$('#face_length_c option[value="'+faceB_get_val+'"]').text(faceB_get);
                } else {
                    form.face_length_c.value = faceC_get_val;
                    $('#face_length_c option[value="' + faceC_get_val + '"]').text(faceC_get);
                }
            }
            if (faceD_get != 'Custom') {
                if (faceD_get == 'Select') {
                    form.face_length_d.value = faceB_get_val;
                    form.face_length_d.selected = faceB_get;
                    //$('#face_length_d option[value="'+faceB_get_val+'"]').text(faceB_get);
                } else {
                    form.face_length_d.value = faceD_get_val;
                    $('#face_length_d option[value="' + faceD_get_val + '"]').text(faceD_get);
                }
            } else {

                form.face_length_c.value = faceB_get_val;
                $('#face_length_c option[value="' + faceB_get_val + '"]').text(faceB_get);
                //form.face_length_c.disabled=true;

                form.face_length_d.value = faceB_get_val;
                $('#face_length_d option[value="' + faceB_get_val + '"]').text(faceB_get);
                //form.face_length_d.disabled=true;
            }
            $("#checkboxbfor4bayB").attr("checked", true);
            //var option_cust='<option value="48">48"</option><option value="54">54"</option>';
            $('#optio_48_b').css("display", "none");
            $('#optio_54_b').css("display", "none");
            $('#optio_48_c').css("display", "block");
            $('#optio_54_c').css("display", "block");
            $('#optio_48_d').css("display", "block");
            $('#optio_54_d').css("display", "block");

        } else {

        }

        var checkcheckedb1 = $('#checkboxbfor4bayB').is(':checked');
        if (checkcheckedb1) {
            var faceB_get = $('[name="face_length_b"]').find('option:selected').text();
            var faceB_get_val = $('[name="face_length_b"]').find('option:selected').val();
            var faceC_get = $('[name="face_length_c"]').find('option:selected').text();
            var faceC_get_val = $('[name="face_length_c"]').find('option:selected').val();
            var faceD_get = $('[name="face_length_d"]').find('option:selected').text();
            var faceD_get_val = $('[name="face_length_d"]').find('option:selected').val();

            //alert(faceB_get);
            //alert(faceC_get);
            //alert(faceD_get);
            //if FacelengthC not same
            //alert(faceC_get);
            //if FacelengthC not same

            if (faceC_get != 'Custom') {
                //$("#checkbfor4bayBnonsame").attr("checked",true);	

                if (faceC_get == '8"') {

                    $("#face_length_c option").filter(function() {
                        return this.text == faceB_get;
                    }).attr('selected', true);

                } else {
                    $("#face_length_c option").filter(function() {
                        return this.text == faceC_get;
                    }).attr('selected', true);

                }

            } else {
                $("#face_length_c option").filter(function() {
                    return this.text == faceB_get;
                }).attr('selected', true);
            }

            //if FacelengthD not same

            if (faceD_get != 'Custom') {
                //$("#checkbfor4bayBnonsame").attr("checked",true);	

                if (faceD_get == '8"') {

                    $("#face_length_d option").filter(function() {
                        return this.text == faceB_get;
                    }).attr('selected', true);

                } else {
                    $("#face_length_d option").filter(function() {
                        return this.text == faceD_get;
                    }).attr('selected', true);

                }

            } else {
                $("#face_length_d option").filter(function() {
                    return this.text == faceB_get;
                }).attr('selected', true);
            }

            //form.face_length_d.disabled=true;
            //var option_cust='<option value="48">48"</option><option value="54">54"</option>';
            $('#optio_48_b').css("display", "none");
            $('#optio_54_b').css("display", "none");
            $('#optio_48_c').css("display", "block");
            $('#optio_54_c').css("display", "block");
            $('#optio_48_d').css("display", "block");
            $('#optio_54_d').css("display", "block");

            $('.customsame').css("display", "block");
            $('.instock').css("display", "none");
        }

        var customefaceC = $('#customefaceC').is(':checked');
        if (customefaceC) {
            var faceC_get = $('[name="face_length_c"]').find('option:selected').text();
            var faceC_get_val = $('[name="face_length_c"]').find('option:selected').val();
            var faceD_get = $('[name="face_length_d"]').find('option:selected').text();
            var faceD_get_val = $('[name="face_length_d"]').find('option:selected').val();

            if (faceD_get != 'Custom') {
                if (faceD_get == 'Select') {
                    form.face_length_d.value = faceC_get_val;
                    form.face_length_d.selected = faceC_get;
                    //$('#face_length_d option[value="'+faceC_get_val+'"]').text(faceC_get);
                } else {
                    form.face_length_d.value = faceD_get_val;
                    $('#face_length_d option[value="' + faceD_get_val + '"]').text(faceD_get);
                }
            } else {

                form.face_length_c.value = faceC_get_val;
                $('#face_length_c option[value="' + faceC_get_val + '"]').text(faceC_get);
                //form.face_length_c.disabled=true;

                form.face_length_d.value = faceC_get_val;
                $('#face_length_d option[value="' + faceC_get_val + '"]').text(faceC_get);
                //form.face_length_d.disabled=true;
            }
            $("#checkboxbfor4bayC").attr("checked", true);
            //var option_cust='<option value="48">48"</option><option value="54">54"</option>';
            $('#optio_48_b').css("display", "none");
            $('#optio_54_b').css("display", "none");
            $('#optio_48_c').css("display", "none");
            $('#optio_54_c').css("display", "none");
            $('#optio_48_d').css("display", "block");
            $('#optio_54_d').css("display", "block");

        } else {

        }

        var checkcheckedb2 = $('#checkboxbfor4bayC').is(':checked');
        if (checkcheckedb2) {
            var faceC_get = $('[name="face_length_c"]').find('option:selected').text();
            var faceC_get_val = $('[name="face_length_c"]').find('option:selected').val();
            var faceD_get = $('[name="face_length_d"]').find('option:selected').text();
            var faceD_get_val = $('[name="face_length_d"]').find('option:selected').val();

            //if FacelengthD not same
            if (faceC_get != 'Custom') {
                //form.face_length_c.value=faceC_get_val;
                //$('#face_length_c option[value="'+faceC_get_val+'"').text(faceC_get);
                form.face_length_c.selected = faceC_get_val;
            } else {
                form.face_length_c.value = faceC_get_val;
                $('#face_length_c option[value="' + faceC_get_val + '"]').text(faceB_get);
                //form.face_length_c.disabled=true;	
            }
            //if FacelengthD not same

            if (faceD_get != 'Custom') {
                //$("#checkbfor4bayBnonsame").attr("checked",true);	

                if (faceD_get == '8"') {

                    $("#face_length_d option").filter(function() {
                        return this.text == faceC_get;
                    }).attr('selected', true);

                } else {
                    $("#face_length_d option").filter(function() {
                        return this.text == faceD_get;
                    }).attr('selected', true);

                }

            } else {
                $("#face_length_d option").filter(function() {
                    return this.text == faceC_get;
                }).attr('selected', true);
            }

            //var option_cust='<option value="48">48"</option><option value="54">54"</option>';
            $('#optio_48_b').css("display", "none");
            $('#optio_54_b').css("display", "none");
            $('#optio_48_c').css("display", "none");
            $('#optio_54_c').css("display", "none");
            $('#optio_48_d').css("display", "block");
            $('#optio_54_d').css("display", "block");

            $('.customsame').css("display", "block");
            $('.instock').css("display", "none");
        }
    }
    if (type.value == "3BAY") {
        var customefaceA = $('#customefaceA').is(':checked');

        if (customefaceA) {
            var faceA_get = $('[name="face_length_a"]').find('option:selected').text();
            var faceA_get_val = $('[name="face_length_a"]').find('option:selected').val();
            var faceB_get = $('[name="face_length_b"]').find('option:selected').text();
            var faceB_get_val = $('[name="face_length_b"]').find('option:selected').val();
            var faceC_get = $('[name="face_length_c"]').find('option:selected').text();
            var faceC_get_val = $('[name="face_length_c"]').find('option:selected').val();

            //alert(faceB_get);
            if (faceB_get != 'Custom') {
                //alert(faceB_get);
                if (faceB_get == 'Select') {
                    form.face_length_b.value = faceA_get_val;
                    form.face_length_b.selected = faceA_get;
                    //$('#face_length_b option[value="'+faceA_get_val+'"]').text(faceA_get);
                } else {
                    form.face_length_b.value = faceB_get_val;
                    $('#face_length_b option[value="' + faceB_get_val + '"]').text(faceB_get);
                }
            }
            if (faceC_get != 'Custom') {
                //alert(faceC_get);
                if (faceC_get == 'Select') {
                    form.face_length_c.value = faceA_get_val;
                    form.face_length_c.selected = faceA_get;
                    //$('#face_length_c option[value="'+faceA_get_val+'"]').text(faceA_get);
                } else {
                    form.face_length_c.value = faceC_get_val;
                    $('#face_length_c option[value="' + faceC_get_val + '"]').text(faceC_get);
                }
            } else {
                form.face_length_b.value = faceA_get_val;
                $('#face_length_b option[value="' + faceA_get_val + '"]').text(faceA_get);
                //form.face_length_b.disabled=true;	

                form.face_length_c.value = faceA_get_val;
                $('#face_length_c option[value="' + faceA_get_val + '"]').text(faceA_get);
                //form.face_length_c.disabled=true;

            }
            $("#checkboxbfor4bayA").attr("checked", true);
            //var option_cust='<option value="48">48"</option><option value="54">54"</option>';

            $('#optio_48_b').css("display", "block");
            $('#optio_54_b').css("display", "block");
            $('#optio_48_c').css("display", "block");
            $('#optio_54_c').css("display", "block");

            //$('#show_select_faceb_fora').css("display","block");
            //$('#face_length_b').css("display","none;");
            //$('#undefined').css("display","none;");

            //$('#show_select_faceb_fora').attr('name', 'other_amount');

        } else {

        }

        var checkcheckedb = $('#checkboxbfor4bayA').is(':checked');
        //alert(checkcheckedb);

        if (checkcheckedb) {
            var faceA_get = $('[name="face_length_a"]').find('option:selected').text();
            var faceA_get_val = $('[name="face_length_a"]').find('option:selected').val();
            var faceB_get = $('[name="face_length_b"]').find('option:selected').text();
            var faceB_get_val = $('[name="face_length_b"]').find('option:selected').val();
            var faceC_get = $('[name="face_length_c"]').find('option:selected').text();
            var faceC_get_val = $('[name="face_length_c"]').find('option:selected').val();

            //if FacelengthB not same
            if (faceB_get != 'Custom') {
                //$("#checkbfor4bayBnonsame").attr("checked",true);	

                if (faceB_get == '8"') {

                    $("#face_length_b option").filter(function() {
                        return this.text == faceA_get;
                    }).attr('selected', true);

                } else {
                    $("#face_length_b option").filter(function() {
                        return this.text == faceB_get;
                    }).attr('selected', true);

                }

            } else {
                $("#face_length_b option").filter(function() {
                    return this.text == faceA_get;
                }).attr('selected', true);
            }

            //alert(faceC_get);
            //if FacelengthC not same

            if (faceC_get != 'Custom') {
                //$("#checkbfor4bayBnonsame").attr("checked",true);	

                if (faceC_get == '8"') {

                    $("#face_length_c option").filter(function() {
                        return this.text == faceA_get;
                    }).attr('selected', true);

                } else {
                    $("#face_length_c option").filter(function() {
                        return this.text == faceC_get;
                    }).attr('selected', true);

                }

            } else {
                $("#face_length_c option").filter(function() {
                    return this.text == faceA_get;
                }).attr('selected', true);
            }

            //if FacelengthD not same

            $('#optio_48_b').css("display", "block");
            $('#optio_54_b').css("display", "block");
            $('#optio_48_c').css("display", "block");
            $('#optio_54_c').css("display", "block");

            $('.customsame').css("display", "block");
            $('.instock').css("display", "none");

        }

        var customefaceB = $('#customefaceB').is(':checked');
        if (customefaceB) {
            var faceB_get = $('[name="face_length_b"]').find('option:selected').text();
            var faceB_get_val = $('[name="face_length_b"]').find('option:selected').val();
            var faceC_get = $('[name="face_length_c"]').find('option:selected').text();
            var faceC_get_val = $('[name="face_length_c"]').find('option:selected').val();

            if (faceC_get != 'Custom') {
                //alert(faceC_get);
                if (faceC_get == 'Select') {
                    form.face_length_c.value = faceB_get_val;
                    form.face_length_c.selected = faceB_get;
                    //$('#face_length_c option[value="'+faceB_get_val+'"]').text(faceB_get);
                } else {
                    form.face_length_c.value = faceC_get_val;
                    $('#face_length_c option[value="' + faceC_get_val + '"]').text(faceC_get);
                }
            } else {

                form.face_length_c.value = faceB_get_val;
                $('#face_length_c option[value="' + faceB_get_val + '"]').text(faceB_get);
                //form.face_length_c.disabled=true;

            }
            $("#checkboxbfor4bayB").attr("checked", true);
            //var option_cust='<option value="48">48"</option><option value="54">54"</option>';
            $('#optio_48_b').css("display", "none");
            $('#optio_54_b').css("display", "none");
            $('#optio_48_c').css("display", "block");
            $('#optio_54_c').css("display", "block");
            $('#optio_48_d').css("display", "block");
            $('#optio_54_d').css("display", "block");

        } else {

        }

        var checkcheckedb1 = $('#checkboxbfor4bayB').is(':checked');
        if (checkcheckedb1) {
            var faceB_get = $('[name="face_length_b"]').find('option:selected').text();
            var faceB_get_val = $('[name="face_length_b"]').find('option:selected').val();
            var faceC_get = $('[name="face_length_c"]').find('option:selected').text();
            var faceC_get_val = $('[name="face_length_c"]').find('option:selected').val();
            var faceD_get = $('[name="face_length_d"]').find('option:selected').text();
            var faceD_get_val = $('[name="face_length_d"]').find('option:selected').val();

            //alert(faceB_get);
            //alert(faceC_get);
            //alert(faceD_get);
            //if FacelengthC not same
            //alert(faceC_get);
            //if FacelengthC not same

            if (faceC_get != 'Custom') {
                //$("#checkbfor4bayBnonsame").attr("checked",true);	

                if (faceC_get == '8"') {

                    $("#face_length_c option").filter(function() {
                        return this.text == faceB_get;
                    }).attr('selected', true);

                } else {
                    $("#face_length_c option").filter(function() {
                        return this.text == faceC_get;
                    }).attr('selected', true);

                }

            } else {
                $("#face_length_c option").filter(function() {
                    return this.text == faceB_get;
                }).attr('selected', true);
            }

            //if FacelengthD not same

            //form.face_length_d.disabled=true;
            //var option_cust='<option value="48">48"</option><option value="54">54"</option>';
            $('#optio_48_b').css("display", "none");
            $('#optio_54_b').css("display", "none");
            $('#optio_48_c').css("display", "block");
            $('#optio_54_c').css("display", "block");

            $('.customsame').css("display", "block");
            $('.instock').css("display", "none");
        }
    }
    if (type.value == "2BAY") {
        var customefaceA = $('#customefaceA').is(':checked');

        if (customefaceA) {
            var faceA_get = $('[name="face_length_a"]').find('option:selected').text();
            var faceA_get_val = $('[name="face_length_a"]').find('option:selected').val();
            var faceB_get = $('[name="face_length_b"]').find('option:selected').text();
            var faceB_get_val = $('[name="face_length_b"]').find('option:selected').val();

            //alert(faceB_get);
            if (faceB_get != 'Custom') {
                //alert(faceB_get);
                if (faceB_get == 'Select') {
                    form.face_length_b.value = faceA_get_val;
                    form.face_length_b.selected = faceA_get;
                    //$('#face_length_b option[value="'+faceA_get_val+'"]').text(faceA_get);
                } else {
                    form.face_length_b.value = faceB_get_val;
                    $('#face_length_b option[value="' + faceB_get_val + '"]').text(faceB_get);
                }
            } else {
                form.face_length_b.value = faceA_get_val;
                $('#face_length_b option[value="' + faceA_get_val + '"]').text(faceA_get);
                //form.face_length_b.disabled=true;	

            }
            $("#checkboxbfor4bayA").attr("checked", true);
            //var option_cust='<option value="48">48"</option><option value="54">54"</option>';

            $('#optio_48_b').css("display", "block");
            $('#optio_54_b').css("display", "block");

            //$('#show_select_faceb_fora').css("display","block");
            //$('#face_length_b').css("display","none;");
            //$('#undefined').css("display","none;");

            //$('#show_select_faceb_fora').attr('name', 'other_amount');

        } else {

        }

        var checkcheckedb = $('#checkboxbfor4bayA').is(':checked');
        //alert(checkcheckedb);

        if (checkcheckedb) {
            var faceA_get = $('[name="face_length_a"]').find('option:selected').text();
            var faceA_get_val = $('[name="face_length_a"]').find('option:selected').val();
            var faceB_get = $('[name="face_length_b"]').find('option:selected').text();
            var faceB_get_val = $('[name="face_length_b"]').find('option:selected').val();

            //if FacelengthB not same
            if (faceB_get != 'Custom') {
                //$("#checkbfor4bayBnonsame").attr("checked",true);	

                if (faceB_get == '8"') {

                    $("#face_length_b option").filter(function() {
                        return this.text == faceA_get;
                    }).attr('selected', true);

                } else {
                    $("#face_length_b option").filter(function() {
                        return this.text == faceB_get;
                    }).attr('selected', true);

                }

            } else {
                $("#face_length_b option").filter(function() {
                    return this.text == faceA_get;
                }).attr('selected', true);
            }

            //if FacelengthD not same

            $('#optio_48_b').css("display", "block");
            $('#optio_54_b').css("display", "block");

            $('.customsame').css("display", "block");
            $('.instock').css("display", "none");

        }

    }
    //document.getElementById('ro').innerHTML='';//DECLARING THE all price variables
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
    roastedglass = ""; /*for roasted glass */
    adjustable_name = "EP15 Adjustable Brackets (Pairs)";
    make_adjustable = form.adjustable.value;
    adjust_price = 0;
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
    //corner post
    centerPostPrice1 = 0;
    centerPostPrice2 = 0;
    centerPostPrice3 = 0;

    anglePostPrice = 0;
    flangeCoversPrice = 0;
    flangeCoversPrice2 = 0
    roastedglassprice = 0;
    var iscustomimg = 0
    category_name = "EP36";
    right_lenght_obj = form.right_length;
    left_lenght_obj = form.left_length;
    post_height_obj = form.post_height;
    //alert(post_height_obj);
    face_lenght_obj = form.face_length;
    face_lenght_a_obj = form.face_length_a;
    face_lenght_b_obj = form.face_length_b;
    face_lenght_c_obj = form.face_length_c;
    face_lenght_d_obj = form.face_length_d;
    type_obj = form.type;
    //alert(form.glass_face.name);
    glass_face_obj = form.glass_face;
    corner_obj = form.rounded_corners;
    flange_covers_obj = form.flange_covers;

    flangeUnderCounter = "";
    flangeUnderCounterPrice = 0;
    flange_under_counter_obj = form.flange_under_counter;

    flange_covers2_obj = form.light_bar;
    roasted_glass_obj = form.roasted_glass;
    choose_finish_obj = form.choose_finish;

    degree_obj = form.degree;
    posttype_obj = form.posttype;

    noofcornerpost_obj = form.noofcornerpost;

    //Changes by Luv
    end_options_type_obj = form.end_options_type;
    //Changes by Luv

    var gotocornerpostss = $("input[name='gotocornerpostcheck']:checked").val();

    var noofcornerpostval = $('#noofcornerpost :selected').text();

    foldername = getProductFolderName('EP36') + type_obj.value;
    if (flange_covers_obj.value == "yes") { //for post height
        flangeCovers = "test";
    }

    if (flange_under_counter_obj.value == "yes") {
        flangeUnderCounter = "test";
    }

    /*this is used for check post height*/
    //if(post_height_obj==null||post_height_obj=='undefine'){
    //it will take  glass_face_obj value from input that is set on the ul>li click on top both/something see line no 352
    height = glass_face_obj.value;
    //}
    //else{
    //height=post_height_obj.value;
    //}
    //alert(height);
    if (make_adjustable == "yes") {
        // alert(product_name_price[adjustable_name][1]);
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
    /*this is used for check post height*/
    /*if category EP36 and custom post height choosen*/
    if (category_name == 'EP36') {
        if ($('#customheight').is(':checked')) {

            height = post_height_obj.value;
        }

    }

    //leftEndPost=category_name+" Left Post "+choose_finish_obj.value;
    //rightEndPost=category_name+" Right Post "+choose_finish_obj.value;
    //if(category_name=="EP36"){
    var add_more_bay = add_more_bay;
    if (add_more_bay == 1) {
        leftEndPost = category_name + " Left Post " + choose_finish_obj.value;
        rightEndPost = category_name + " Center " + (choose_finish_obj.value == "Brushed Aluminum" ? "Brushed Aluminum" : "Post " + choose_finish_obj.value);
    } else {
        leftEndPost = category_name + " Left Post " + choose_finish_obj.value;
        rightEndPost = category_name + " Right Post " + choose_finish_obj.value
    }

    if (glass_face_obj.value == 1) { //I have to change here!
        //if(height!="select"){
        // anglePost=category_name+'-'+height+" 90 Degree "+(choose_finish_obj.value=="Brushed Aluminum"?"Brushed Aluminum":"Post "+choose_finish_obj.value);
        //  }
        //if(left_lenght_obj.value!="select"){
        //if(left_lenght_obj.value!="No Glass"){
        //if(height!="select"){
        if (end_options_type_obj.value == "extended") {

            if (left_lenght_obj.value != 'select') {
                leftEndPanel = 'EP36 ' + left_lenght_obj.value + '" EXT Left End';
            }
            if (right_lenght_obj.value != 'select') {
                rightEndPanel = 'EP36 ' + right_lenght_obj.value + '" EXT Right End';
            }

        } else {
            leftEndPanel = category_name + " Left End" + (category_name == "EP11" ? " Panel" : "");
            rightEndPanel = category_name + " Right End" + (category_name == "EP11" ? " Panel" : "");
        }

        /* if(corner_obj.value=="round"){
             glassName_r+="(Radiused Corners)";
         }else{
             glassName_r+="(Squared Corners)";
         }*/
        //}

        // if(end_options_type_obj.value=='extended'){
        // glassName_r=category_name+' var  EXT Right End';
        // }
        // else
        // {
        // glassName_r=category_name+' Right End';
        // }

        //}else{
        //   noGlass();
        //	flag=0;
        //}
        //}
        // alert(roasted_glass_obj.value);
        if (roasted_glass_obj.value == "yes") {
            roastedglass = "EP36-ROSTEDGL";
            //alert(roastedglass)
        }
        if (flange_covers_obj.value == "yes") {
            flangeCovers = category_name + "-FLANGE COVER " + type_obj.value.slice(0, 1) + " BAY BOTH ENDS";
        }
        imageName = "BOTHENDS";
    } //right closed end
    else if (glass_face_obj.value == 2) {

        if (end_options_type_obj.value == "extended") {

            if (right_lenght_obj.value != 'select') {
                rightEndPanel = 'EP22 ' + right_lenght_obj.value + '" EXT Right End';
            }

        } else {
            rightEndPanel = category_name + " Right End" + (category_name == "EP11" ? " Panel" : "");
        }



        if (glassName_r != "") {
            facePrice_r = parseFloat(product_name_price[glassName_r][1]);
        }

        if (roasted_glass_obj.value == "yes") {

            roastedglass = "EP36-ROSTEDGL";

        }
        if (flange_covers_obj.value == "yes")
            flangeCovers = category_name + "-FLANGE COVER " + type_obj.value.slice(0, 1) + " BAY RIGHT END";

        //}
        imageName = "RIGHTEND";

    } else if (glass_face_obj.value == 3) {


        if (end_options_type_obj.value == "extended") {

            if (left_lenght_obj.value != 'select') {
                leftEndPanel = 'EP22 ' + left_lenght_obj.value + '" EXT Left End';
            }

        } else {
            leftEndPanel = category_name + " Left End" + (category_name == "EP11" ? " Panel" : "");
        }


        if (glassName_l != "") {
            facePrice_l = parseFloat(product_name_price[glassName_l][1]);
        }

        if (roasted_glass_obj.value == "yes") {
            roastedglass = "EP36-ROSTEDGL";
            //alert(roastedglass)
        }
        if (flange_covers_obj.value == "yes") {
            flangeCovers = category_name + "-FLANGE COVER " + type_obj.value.slice(0, 1) + " BAY LEFT END";
        }


        imageName = "LEFTEND";
    } else if (glass_face_obj.value == 4) {

        if (flange_covers_obj.value == "yes") {
            flangeCovers = category_name + "-FLANGE COVER " + type_obj.value.slice(0, 1) + " BAY NO END";
        }

        if (flange_under_counter_obj != null && flange_under_counter_obj != 'undefine') {
            if (flange_under_counter_obj.value == "yes") {
                flangeUnderCounter = category_name + "-FLANGE COVER " + type_obj.value.slice(0, 1) + " BAY NO END";
            }
        }

        if (roasted_glass_obj.value == "yes") {

            roastedglass = "EP36-ROSTEDGL";
            //alert(roastedglass)
        }
        //}
        glassName_l = "";
        glassName_r = "";
        anglePost = "";
        leftEndPanel = "";
        rightEndPanel = "";
        imageName = "NOENDS";
    }

    if (type_obj.value == "4BAY") {
        if (face_lenght_a_obj.value == 'select' || face_lenght_b_obj.value == 'select' || face_lenght_c_obj.value == 'select' || face_lenght_d_obj.value == 'select') {
            // form.light_bar.value="select";
            // form.light_bar.selected="Select";
        }
        var chk_gl = false;
        if (glass_face_obj.value == 4) {
            if (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass' || face_lenght_d_obj.value == 'No Glass') {
                chk_gl = true;
            } else {
                chk_gl = false;
                if (face_lenght_a_obj.value > 42 || face_lenght_b_obj.value > 42 || face_lenght_c_obj.value > 42 || face_lenght_d_obj.value > 42) {
                    wt = val;
                } else {
                    wt = 1;
                }
            }
        } else if (glass_face_obj.value == 3) {
            if (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass' || face_lenght_d_obj.value == 'No Glass' || left_lenght_obj.value == 'No Glass') {
                chk_gl = true;
            } else {
                chk_gl = false;
                if (face_lenght_a_obj.value > 42 || face_lenght_b_obj.value > 42 || face_lenght_c_obj.value > 42 || face_lenght_d_obj.value > 42 || left_lenght_obj.value > 42) {
                    wt = val;
                } else {
                    wt = 1;
                }
            }
        } else if (glass_face_obj.value == 2) {
            if (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass' || face_lenght_d_obj.value == 'No Glass' || right_lenght_obj.value == 'No Glass') {
                chk_gl = true;
            } else {
                chk_gl = false;
                if (face_lenght_a_obj.value > 42 || face_lenght_b_obj.value > 42 || face_lenght_c_obj.value > 42 || face_lenght_d_obj.value > 42 || right_lenght_obj.value > 42) {
                    wt = val;
                } else {
                    wt = 1;
                }
            }
        } else if (glass_face_obj.value == 1) {
            if (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass' || face_lenght_d_obj.value == 'No Glass' || left_lenght_obj.value == 'No Glass' || right_lenght_obj.value == 'No Glass') {
                chk_gl = true;
            } else {
                chk_gl = false;
                if (face_lenght_a_obj.value > 42 || face_lenght_b_obj.value > 42 || face_lenght_c_obj.value > 42 || face_lenght_d_obj.value > 42 || left_lenght_obj.value > 42 || right_lenght_obj.value > 42) {
                    wt = val;
                } else {
                    wt = 1;
                }
            }
        }
        if (chk_gl) {
            form.light_bar.value = "no";
            form.light_bar.selected = "No";
            form.light_bar.disabled = true;
            roasted_glass_obj.value = "no";
            roasted_glass_obj.selected = "No";
            roasted_glass_obj.disabled = true;
        } else {
            form.light_bar.disabled = false;
            roasted_glass_obj.disabled = false;
        }
    }
    if (type_obj.value == "3BAY") {
        if (face_lenght_a_obj.value == 'select' || face_lenght_b_obj.value == 'select' || face_lenght_c_obj.value == 'select') {
            // form.light_bar.value="select";
            // form.light_bar.selected="Select";
        }
        var chk_gl = false;
        if (glass_face_obj.value == 4) {
            if (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass') {
                chk_gl = true;
            } else {
                chk_gl = false;
                if (face_lenght_a_obj.value > 42 || face_lenght_b_obj.value > 42 || face_lenght_c_obj.value > 42) {
                    wt = val;
                } else {
                    wt = 1;
                }
            }
        } else if (glass_face_obj.value == 3) {
            if (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass' || left_lenght_obj.value == 'No Glass') {
                chk_gl = true;
            } else {
                chk_gl = false;
                if (face_lenght_a_obj.value > 42 || face_lenght_b_obj.value > 42 || face_lenght_c_obj.value > 42 || left_lenght_obj.value > 42) {
                    wt = val;
                } else {
                    wt = 1;
                }
            }
        } else if (glass_face_obj.value == 2) {
            if (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass' || right_lenght_obj.value == 'No Glass') {
                chk_gl = true;
            } else {
                chk_gl = false;
                if (face_lenght_a_obj.value > 42 || face_lenght_b_obj.value > 42 || face_lenght_c_obj.value > 42 || right_lenght_obj.value > 42) {
                    wt = val;
                } else {
                    wt = 1;
                }
            }
        } else if (glass_face_obj.value == 1) {
            if (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass' || left_lenght_obj.value == 'No Glass' || right_lenght_obj.value == 'No Glass') {
                chk_gl = true;
            } else {
                chk_gl = false;
                if (face_lenght_a_obj.value > 42 || face_lenght_b_obj.value > 42 || face_lenght_c_obj.value > 42 || left_lenght_obj.value > 42 || right_lenght_obj.value > 42) {
                    wt = val;
                } else {
                    wt = 1;
                }
            }
        }
        if (chk_gl) {
            form.light_bar.value = "no";
            form.light_bar.selected = "No";
            form.light_bar.disabled = true;
            roasted_glass_obj.value = "no";
            roasted_glass_obj.selected = "No";
            roasted_glass_obj.disabled = true;
        } else {
            form.light_bar.disabled = false;
            roasted_glass_obj.disabled = false;
        }
    }
    if (type_obj.value == "2BAY") {
        if (face_lenght_a_obj.value == 'select' || face_lenght_b_obj.value == 'select') {
            // form.light_bar.value="select";
            // form.light_bar.selected="Select";
        }
        var chk_gl = false;
        if (glass_face_obj.value == 4) {
            if (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass') {
                chk_gl = true;
            } else {
                chk_gl = false;
                if (face_lenght_a_obj.value > 42 || face_lenght_b_obj.value > 42) {
                    wt = val;
                } else {
                    wt = 1;
                }
            }
        } else if (glass_face_obj.value == 3) {
            if (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || left_lenght_obj.value == 'No Glass') {
                chk_gl = true;
            } else {
                chk_gl = false;
                if (face_lenght_a_obj.value > 42 || face_lenght_b_obj.value > 42 || left_lenght_obj.value > 42) {
                    wt = val;
                } else {
                    wt = 1;
                }
            }
        } else if (glass_face_obj.value == 2) {
            if (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || right_lenght_obj.value == 'No Glass') {
                chk_gl = true;
            } else {
                chk_gl = false;
                if (face_lenght_a_obj.value > 42 || face_lenght_b_obj.value > 42 || right_lenght_obj.value > 42) {
                    wt = val;
                } else {
                    wt = 1;
                }
            }
        } else if (glass_face_obj.value == 1) {
            if (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || left_lenght_obj.value == 'No Glass' || right_lenght_obj.value == 'No Glass') {
                chk_gl = true;
            } else {
                chk_gl = false;
                if (face_lenght_a_obj.value > 42 || face_lenght_b_obj.value > 42 || left_lenght_obj.value > 42 || right_lenght_obj.value > 42) {
                    wt = val;
                } else {
                    wt = 1;
                }
            }
        }
        if (chk_gl) {
            form.light_bar.value = "no";
            form.light_bar.selected = "No";
            form.light_bar.disabled = true;
            roasted_glass_obj.value = "no";
            roasted_glass_obj.selected = "No";
            roasted_glass_obj.disabled = true;
        } else {
            form.light_bar.disabled = false;
            roasted_glass_obj.disabled = false;
        }
    }
    if (type_obj.value == "1BAY") {
        if (face_lenght_obj.value == 'select') {
            // form.light_bar.value="select";
            // form.light_bar.selected="Select";
        }
        var chk_gl = false;
        if (glass_face_obj.value == 4) {
            if (face_lenght_obj.value == 'No Glass') {
                chk_gl = true;
            } else {
                chk_gl = false;
                if (face_lenght_obj.value > 42) {
                    wt = val;
                } else {
                    wt = 1;
                }
            }
        } else if (glass_face_obj.value == 3) {
            if (face_lenght_obj.value == 'No Glass' || left_lenght_obj.value == 'No Glass') {
                chk_gl = true;
            } else {
                chk_gl = false;
                if (face_lenght_obj.value > 42 || left_lenght_obj.value > 42) {
                    wt = val;
                } else {
                    wt = 1;
                }
            }
        } else if (glass_face_obj.value == 2) {
            if (face_lenght_obj.value == 'No Glass' || right_lenght_obj.value == 'No Glass') {
                chk_gl = true;
            } else {
                chk_gl = false;
                if (face_lenght_obj.value > 42 || right_lenght_obj.value > 42) {
                    wt = val;
                } else {
                    wt = 1;
                }
            }
        } else if (glass_face_obj.value == 1) {
            if (face_lenght_obj.value == 'No Glass' || left_lenght_obj.value == 'No Glass' || right_lenght_obj.value == 'No Glass') {
                chk_gl = true;
            } else {
                chk_gl = false;
                if (face_lenght_obj.value > 42 || left_lenght_obj.value > 42 || right_lenght_obj.value > 42) {
                    wt = val;
                } else {
                    wt = 1;
                }
            }
        }
        if (chk_gl) {
            form.light_bar.value = "no";
            form.light_bar.selected = "No";
            form.light_bar.disabled = true;
            roasted_glass_obj.value = "no";
            roasted_glass_obj.selected = "No";
            roasted_glass_obj.disabled = true;
        } else {
            form.light_bar.disabled = false;
            roasted_glass_obj.disabled = false;
        }
    }

    if (type_obj.value == "2BAY" || type_obj.value == "3BAY" || type_obj.value == "4BAY") {
        if (form.posttype.value == 'outer') {
            var posttypegl = 'Outer';
        } else if (form.posttype.value == 'inner') {
            var posttypegl = 'Inner';
        }

        if (form.degree.value == '90degre') {
            var postdegreegl = "90 Degree";
        } else if (form.degree.value == '135degre') {
            var postdegreegl = "135 Degree";
        }

        if (type_obj.value == "3BAY" || type_obj.value == "4BAY") {
            if (form.noofcornerpost.value == '2') {
                var noofcornerpostgl = "Two";
            } else {
                var noofcornerpostgl = "";
            }
        }

    }

    var cornerPosition = $("input[name='corner_post']:checked").val();
    //alert(cornerPosition);

    if (face_lenght_obj != null && face_lenght_obj.value != "select") {
        if (face_lenght_obj.value != "No Glass") {
            if (category_name == "EP5" || category_name == "EP36") {
                //if(height!="select"){
                if (gotocornerpostss == "1") {
                    if ((form.posttype.value != "select") && (cornerPosition == "1st Center Post from Left")) {
                        glassName = category_name + ' ' + face_lenght_obj.value + '" Glass ' + posttypegl + ' Corner ' + postdegreegl + ' Post ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                    } else {
                        glassName = category_name + ' ' + face_lenght_obj.value + '" Glass ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                    }
                } else {
                    glassName = category_name + ' ' + face_lenght_obj.value + '" Glass ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                }

                //}
                if (flange_covers2_obj.value == "yes") {
                    light_a = category_name + "-" + face_lenght_obj.value + "LYT";
                }
            } else {
                if (gotocornerpostss == "1") {
                    if ((form.posttype.value != "select") && (cornerPosition == "1st Center Post from Left")) {
                        glassName = category_name + ' ' + face_lenght_obj.value + '" Glass ' + posttypegl + ' Corner ' + postdegreegl + ' Post ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                    } else {
                        glassName = category_name + ' ' + face_lenght_obj.value + '" Glass ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                    }
                } else {
                    glassName = category_name + ' ' + face_lenght_obj.value + '" Glass ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                }

                if (flange_covers2_obj.value == "yes") {
                    light_a = category_name + "-" + face_lenght_obj.value + "LYT";
                }
            }
        } else {
            //for seting if no glass selected
            flag = 0;
        }
        // alert(glassName);
    }
    // alert(glassName);
    if (face_lenght_a_obj != null && face_lenght_a_obj.value != "select") {
        if (face_lenght_a_obj.value != "No Glass") {
            if (category_name == "EP5" || category_name == "EP36") {
                //if(height!="select"){
                if (gotocornerpostss == "1") {

                    // if(noofcornerpostval==2)
                    // {
                    // if((form.posttype.value!="select")&&(cornerPosition=="1st Center Post from Left")){

                    // }
                    // else{

                    // }	

                    // }
                    // else{

                    // }

                    if ((form.posttype.value != "select") && (cornerPosition == "1st Center Post from Left")) {
                        glassName_a = category_name + ' ' + face_lenght_a_obj.value + '" Glass ' + posttypegl + ' Corner ' + postdegreegl + ' Post ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                    } else {
                        glassName_a = category_name + ' ' + face_lenght_a_obj.value + '" Glass ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                    }

                } else {
                    glassName_a = category_name + ' ' + face_lenght_a_obj.value + '" Glass ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                }

                //}
                if (flange_covers2_obj.value == "yes") {
                    light_a = category_name + "-" + face_lenght_a_obj.value + "LYT";
                }
            } else {
                if (gotocornerpostss == "1") {

                    if ((form.posttype.value != "select") && (cornerPosition == "1st Center Post from Left")) {
                        glassName_a = category_name + ' ' + face_lenght_a_obj.value + '" Glass ' + posttypegl + ' Corner ' + postdegreegl + ' Post ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                    } else {
                        glassName_a = category_name + ' ' + face_lenght_a_obj.value + '" Glass ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                    }
                } else {
                    glassName_a = category_name + ' ' + face_lenght_a_obj.value + '" Glass ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                }

                if (flange_covers2_obj.value == "yes") {
                    light_a = category_name + "-" + face_lenght_a_obj.value + "LYT";
                }
            }
        } else {
            flag = 0;
        }
    }
    if (face_lenght_b_obj != null && face_lenght_b_obj.value != "select") {
        if (face_lenght_b_obj.value != "No Glass") {
            if (category_name == "EP5" || category_name == "EP36") {
                //if(height!="select"){
                if (gotocornerpostss == "1") {
                    if (noofcornerpostval == 2) {
                        if ((form.posttype.value != "select") && (cornerPosition == "1st Center Post from Left")) {
                            glassName_b = category_name + ' ' + face_lenght_b_obj.value + '" Glass ' + posttypegl + ' Two Corner ' + postdegreegl + ' Post ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                        } else if (((form.posttype.value != "select") && (cornerPosition == "2nd Center Post from Left"))) {
                            glassName_b = category_name + ' ' + face_lenght_b_obj.value + '" Glass ' + posttypegl + ' Corner ' + postdegreegl + ' Post ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                        } else {

                            glassName_b = category_name + ' ' + face_lenght_b_obj.value + '" Glass ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                        }

                    } else {

                        if (((form.posttype.value != "select") && (cornerPosition == "1st Center Post from Left") || (cornerPosition == "2nd Center Post from Left"))) {
                            glassName_b = category_name + ' ' + face_lenght_b_obj.value + '" Glass ' + posttypegl + ' Corner ' + postdegreegl + ' Post ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                        } else {
                            glassName_b = category_name + ' ' + face_lenght_b_obj.value + '" Glass ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                        }
                    }

                } else {
                    glassName_b = category_name + ' ' + face_lenght_b_obj.value + '" Glass ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                }

                // }
                if (flange_covers2_obj.value == "yes") {
                    light_b = category_name + "-" + face_lenght_b_obj.value + "LYT";
                }
            } else {
                if (gotocornerpostss == "1") {

                    if (noofcornerpostval == 2) {
                        if ((form.posttype.value != "select") && (cornerPosition == "1st Center Post from Left")) {
                            glassName_b = category_name + ' ' + face_lenght_b_obj.value + '" Glass ' + posttypegl + ' Two Corner ' + postdegreegl + ' Post ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                        } else if (((form.posttype.value != "select") && (cornerPosition == "2nd Center Post from Left"))) {
                            glassName_b = category_name + ' ' + face_lenght_b_obj.value + '" Glass ' + posttypegl + ' Corner ' + postdegreegl + ' Post ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                        } else {
                            glassName_b = category_name + ' ' + face_lenght_b_obj.value + '" Glass ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");

                        }

                    } else {
                        if (((form.posttype.value != "select") && (cornerPosition == "1st Center Post from Left") || (cornerPosition == "2nd Center Post from Left"))) {
                            glassName_b = category_name + ' ' + face_lenght_b_obj.value + '" Glass ' + posttypegl + ' Corner ' + postdegreegl + ' Post ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                        } else {
                            glassName_b = category_name + ' ' + face_lenght_b_obj.value + '" Glass ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                        }

                    }

                } else {
                    glassName_b = category_name + ' ' + face_lenght_b_obj.value + '" Glass ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                }

                if (flange_covers2_obj.value == "yes") {
                    light_b = category_name + "-" + face_lenght_b_obj.value + "LYT";
                }
            }

        } else {
            flag = 0;
        }
    }
    if (face_lenght_c_obj != null && face_lenght_c_obj.value != "select") {
        if (face_lenght_c_obj.value != "No Glass") {
            if (category_name == "EP5" || category_name == "EP36") {
                //if(height!="select"){
                if (gotocornerpostss == "1") {

                    if (noofcornerpostval == 2) {
                        if ((form.posttype.value != "select") && (cornerPosition == "1st Center Post from Left")) {
                            glassName_c = category_name + ' ' + face_lenght_c_obj.value + '" Glass ' + posttypegl + ' Corner ' + postdegreegl + ' Post ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                        } else if (((form.posttype.value != "select") && (cornerPosition == "2nd Center Post from Left"))) {
                            glassName_c = category_name + ' ' + face_lenght_c_obj.value + '" Glass ' + posttypegl + ' Two Corner ' + postdegreegl + ' Post ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                        } else {
                            glassName_c = category_name + ' ' + face_lenght_c_obj.value + '" Glass ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");

                        }

                    } else {
                        if (((form.posttype.value != "select") && (cornerPosition == "2nd Center Post from Left") || (cornerPosition == "3rd Center Post from Left"))) {
                            glassName_c = category_name + ' ' + face_lenght_c_obj.value + '" Glass ' + posttypegl + ' Corner ' + postdegreegl + ' Post ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                        } else {
                            glassName_c = category_name + ' ' + face_lenght_c_obj.value + '" Glass ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                        }

                    }

                } else {
                    glassName_c = category_name + ' ' + face_lenght_c_obj.value + '" Glass ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                }

                //}
                if (flange_covers2_obj.value == "yes") {
                    light_c = category_name + "-" + face_lenght_c_obj.value + "LYT";
                }
            } else {
                if (gotocornerpostss == "1") {
                    if (noofcornerpostval == 2) {
                        if ((form.posttype.value != "select") && (cornerPosition == "1st Center Post from Left")) {
                            glassName_c = category_name + ' ' + face_lenght_c_obj.value + '" Glass ' + posttypegl + ' Corner ' + postdegreegl + ' Post ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                        } else if (((form.posttype.value != "select") && (cornerPosition == "2nd Center Post from Left"))) {
                            glassName_c = category_name + ' ' + face_lenght_c_obj.value + '" Glass ' + posttypegl + ' Two Corner ' + postdegreegl + ' Post ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                        } else {
                            glassName_c = category_name + ' ' + face_lenght_c_obj.value + '" Glass ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");

                        }

                    } else {
                        if (((form.posttype.value != "select") && (cornerPosition == "2nd Center Post from Left") || (cornerPosition == "3rd Center Post from Left"))) {
                            glassName_c = category_name + ' ' + face_lenght_c_obj.value + '" Glass ' + posttypegl + ' Corner ' + postdegreegl + ' Post ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                        } else {
                            glassName_c = category_name + ' ' + face_lenght_c_obj.value + '" Glass ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                        }

                    }

                } else {
                    glassName_c = category_name + ' ' + face_lenght_c_obj.value + '" Glass ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                }

                if (flange_covers2_obj.value == "yes") {
                    light_c = category_name + "-" + face_lenght_c_obj.value + "LYT";
                }
            }
            /*ani code */

        } else {
            flag = 0;
        }

    }
    if (face_lenght_d_obj != null && face_lenght_d_obj.value != "select") {
        if (face_lenght_d_obj.value != "No Glass") {
            if (category_name == "EP5" || category_name == "EP36") {
                //if(height!="select"){
                if (gotocornerpostss == "1") {
                    if (noofcornerpostval == 2) {
                        if (((form.posttype.value != "select") && (cornerPosition == "2nd Center Post from Left"))) {
                            glassName_d = category_name + ' ' + face_lenght_d_obj.value + '" Glass ' + posttypegl + ' Corner ' + postdegreegl + ' Post ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                        } else {
                            glassName_d = category_name + ' ' + face_lenght_d_obj.value + '" Glass ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");

                        }

                    } else {
                        if ((form.posttype.value != "select") && (cornerPosition == "3rd Center Post from Left")) {
                            glassName_d = category_name + ' ' + face_lenght_d_obj.value + '" Glass ' + posttypegl + ' Corner ' + postdegreegl + ' Post ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                        } else {
                            glassName_d = category_name + ' ' + face_lenght_d_obj.value + '" Glass ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                        }

                    }

                } else {
                    glassName_d = category_name + ' ' + face_lenght_d_obj.value + '" Glass ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                }

                //}
                if (flange_covers2_obj.value == "yes") {
                    light_d = category_name + "-" + face_lenght_d_obj.value + "LYT";
                }
            } else {
                if (gotocornerpostss == "1") {

                    if (noofcornerpostval == 2) {
                        if (((form.posttype.value != "select") && (cornerPosition == "2nd Center Post from Left"))) {
                            glassName_d = category_name + ' ' + face_lenght_d_obj.value + '" Glass ' + posttypegl + ' Corner ' + postdegreegl + ' Post ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                        } else {

                            glassName_d = category_name + ' ' + face_lenght_d_obj.value + '" Glass ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");

                        }

                    } else {
                        if ((form.posttype.value != "select") && (cornerPosition == "3rd Center Post from Left")) {
                            glassName_d = category_name + ' ' + face_lenght_d_obj.value + '" Glass ' + posttypegl + ' Corner ' + postdegreegl + ' Post ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                        } else {
                            glassName_d = category_name + ' ' + face_lenght_d_obj.value + '" Glass ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                        }
                    }

                } else {
                    glassName_d = category_name + ' ' + face_lenght_d_obj.value + '" Glass ' + (corner_obj.value == "round" ? "(Radiused Corners)" : "(Squared Corners)");
                }

                if (flange_covers2_obj.value == "yes") {
                    light_d = category_name + "-" + face_lenght_d_obj.value + "LYT";
                }
            }

        } else {
            flag = 0;
        }
    }
    //alert(category_name);
    //if(post_height_obj!=null){
    if (category_name == "EP36") {

        var add_more_bay = add_more_bay;
        if (add_more_bay == 1) {
            leftEndPost = category_name + " Left Post " + choose_finish_obj.value;
            rightEndPost = category_name + " Center " + (choose_finish_obj.value == "Brushed Aluminum" ? "Brushed Aluminum" : "Post " + choose_finish_obj.value);

            $('#c_right_post').val(product_name_price[rightEndPost][0]);
            $('#c_right_post_val').val(rightEndPost);

            $('#c_left_post').val('0');
            $('#c_left_post_val').val('0');
        } else {

            //if(height!="select"){
            leftEndPost = category_name + " Left Post " + choose_finish_obj.value;
            rightEndPost = category_name + " Right Post " + choose_finish_obj.value;
            //alert(rightEndPost+leftEndPost);

            //lllll	
            $('#c_right_post').val(product_name_price[rightEndPost][0]);
            $('#c_right_post_val').val(rightEndPost);

            $('#c_left_post').val(product_name_price[leftEndPost][0]);
            $('#c_left_post_val').val(leftEndPost);

        }

        /*	

        <input type="hidden" id="c_right_post" name="c_right_post" value=""  />
            <input type="hidden" id="c_right_post_val" name="c_right_post_val" value=""  />
            <input type="hidden" id="c_right_post_mult" name="c_right_post_mult" value="1"  />

            <input type="hidden" id="c_left_post" name="c_left_post" value=""  />
            <input type="hidden" id="c_left_post_val" name="c_left_post_val" value=""  />
            <input type="hidden" id="c_left_post_mult" name="c_left_post_mult" value="1"  />

        <input type="hidden" id="c_right_post" name="c_right_post" value=""  />
            <input type="hidden" id="c_right_post_val" name="c_right_post_val" value=""  />
            <input type="hidden" id="c_left_post" name="c_left_post" value=""  />
            <input type="hidden" id="c_left_post_val" name="c_left_post_val" value=""  />
            */
        // }
    }
    //}
    if (type_obj != null) {
        if (type_obj.value == "3BAY" || type_obj.value == "4BAY") {

            if (category_name == "EP5" || category_name == "EP15") {

                centerPost = category_name + "-" + height + " Center " + (choose_finish_obj.value == "Brushed Aluminum" ? "Brushed Aluminum" : "Post " + choose_finish_obj.value);

            } else {

                new_name = category_name

                if (category_name == 'EP22') {

                    new_name = 'EP21'

                }

                //"+posttypegl+" Corner "+postdegreegl+"
                if (gotocornerpostss == "1") {

                    //two corner post	
                    if (noofcornerpostval == 2) {

                        if (cornerPosition == "1st Center Post from Left") {
                            centerPost1 = new_name + " " + posttypegl + " Corner " + postdegreegl + " Post " + choose_finish_obj.value;
                            centerPost2 = new_name + " " + posttypegl + " Corner " + postdegreegl + " Post " + choose_finish_obj.value;
                            centerPost3 = new_name + " Center Post " + choose_finish_obj.value;
                        }
                        if (cornerPosition == "2nd Center Post from Left") {

                            centerPost2 = new_name + " " + posttypegl + " Corner " + postdegreegl + " Post " + choose_finish_obj.value;
                            centerPost1 = new_name + " Center Post " + choose_finish_obj.value;
                            centerPost3 = new_name + " " + posttypegl + " Corner " + postdegreegl + " Post " + choose_finish_obj.value;
                        } else {
                            centerPost = new_name + " Center Post " + choose_finish_obj.value;
                        }

                    }
                    //one corner post
                    else {

                        if (cornerPosition == "1st Center Post from Left") {
                            centerPost1 = new_name + " " + posttypegl + " Corner " + postdegreegl + " Post " + choose_finish_obj.value;
                            centerPost2 = new_name + " Center Post " + choose_finish_obj.value;
                            centerPost3 = new_name + " Center Post " + choose_finish_obj.value;
                        }
                        if (cornerPosition == "2nd Center Post from Left") {

                            centerPost2 = new_name + " " + posttypegl + " Corner " + postdegreegl + " Post " + choose_finish_obj.value;
                            centerPost1 = new_name + " Center Post " + choose_finish_obj.value;
                            centerPost3 = new_name + " Center Post " + choose_finish_obj.value;
                        }
                        if (cornerPosition == "3rd Center Post from Left") {
                            centerPost3 = new_name + " " + posttypegl + " Corner " + postdegreegl + " Post " + choose_finish_obj.value;
                            centerPost1 = new_name + " Center Post " + choose_finish_obj.value;
                            centerPost2 = new_name + " Center Post " + choose_finish_obj.value;
                        } else {
                            centerPost = new_name + " Center Post " + choose_finish_obj.value;
                        }

                    }

                } else {
                    centerPost = new_name + " Center Post " + choose_finish_obj.value;
                }

                //centerPost=new_name+" Center Post "+choose_finish_obj.value;

                // alert(centerPost);

            }
        }
        if (type_obj.value == "2BAY") {
            if (category_name == "EP5" || category_name == "EP15") {
                centerPost = category_name + "-" + height + " Center " + (choose_finish_obj.value == "Brushed Aluminum" ? "Brushed Aluminum" : "Post " + choose_finish_obj.value);
            } else {
                new_name = category_name
                if (category_name == 'EP22') {
                    new_name = 'EP21'
                }

                if (gotocornerpostss == "1") {
                    if (cornerPosition == "1st Center Post from Left") {
                        centerPost1 = new_name + " " + posttypegl + " Corner " + postdegreegl + " Post " + choose_finish_obj.value;
                        centerPost2 = new_name + " Center Post " + choose_finish_obj.value;
                        centerPost3 = new_name + " Center Post " + choose_finish_obj.value;
                    }
                    if (cornerPosition == "2nd Center Post from Left") {

                        centerPost2 = new_name + " " + posttypegl + " Corner " + postdegreegl + " Post " + choose_finish_obj.value;
                        centerPost1 = new_name + " Center Post " + choose_finish_obj.value;
                        centerPost3 = new_name + " Center Post " + choose_finish_obj.value;
                    }
                    if (cornerPosition == "3rd Center Post from Left") {
                        centerPost3 = new_name + " " + posttypegl + " Corner " + postdegreegl + " Post " + choose_finish_obj.value;
                        centerPost1 = new_name + " Center Post " + choose_finish_obj.value;
                        centerPost2 = new_name + " Center Post " + choose_finish_obj.value;
                    } else {
                        centerPost = new_name + " Center Post " + choose_finish_obj.value;
                    }
                } else {
                    centerPost = new_name + " Center Post " + choose_finish_obj.value;
                }
                //centerPost=new_name+" Center Post "+choose_finish_obj.value;

            }

        }
    }

    // Luv changes Start..

    //change image name here
    if (end_options_type_obj.value == "standard") {
        // imageName=""+imageName;
        //alert('standard');
    } else if (end_options_type_obj.value == "extended") {
        imageName = "EXT" + imageName;
        //alert('extended');
    }

    // Luv changes End..

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
        imageName = imageName.substr(0, 5) == "NORAD" ? imageName.substr(5, imageName.lenght) : imageName;

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
        imageName = imageName.substr(0, 20)
    }

    /*	  $('select[name="face_length"]').change(function() {
    if('No Glass' == $(this).val() ) {
        $('#checkboxA').hide(); // make sure all divs are hidden
         // show the right one
    } else{
    $('#checkboxA').show();
    } 
    });
    $('select[name="face_length_a"]').change(function() {
    if('No Glass' == $(this).val() ) {
        $('#checkboxA').hide(); // make sure all divs are hidden
        //$('#checkboxA').show(); // show the right one
    } else{
    $('#checkboxA').show();
    } 
    }); 
    $('select[name="face_length_b"]').change(function() {
    if('No Glass' == $(this).val() ) {
        $('#checkboxA').hide(); // make sure all divs are hidden
        //$('#checkboxA').show(); // show the right one
    } else{
    $('#checkboxA').show();
    } 
    });
    $('select[name="face_length_c"]').change(function() {
    if('No Glass' == $(this).val() ) {
        $('#checkboxA').hide(); // make sure all divs are hidden
        //$('#checkboxA').show(); // show the right one
    }else{
    $('#checkboxA').show();
    }  
    });
    $('select[name="face_length_d"]').change(function() {
    if('No Glass' == $(this).val() ) {
        $('#checkboxA').hide(); // make sure all divs are hidden
        //$('#checkboxA').show(); // show the right one
    } else{
    $('#checkboxA').show();
    } 
    });*/

    $('select[name="face_length"]').change(function() {
        if ('No Glass' == $(this).val()) {
            $('#checkbox2').attr("disabled", true); // make sure all divs are hidden
            $("#checkbox2").attr("checked", false);
        } else {
            $('#checkbox2').attr("disabled", false);
        }
    });
    $('select[name="face_length_a"]').change(function() {
        if ('No Glass' == $(this).val()) {
            $('#checkbox2').attr("disabled", true); // make sure all divs are hidden
            $("#checkbox2").attr("checked", false);
        } else {
            $('#checkbox2').attr("disabled", false);
        }
    });
    $('select[name="face_length_b"]').change(function() {
        if ('No Glass' == $(this).val()) {
            $('#checkbox2').attr("disabled", true); // make sure all divs are hidden
            $("#checkbox2").attr("checked", false);
            //$('#checkboxA').hide(); // make sure all divs are hidden
            //$('#checkboxA').show(); // show the right one
        } else {
            $('#checkbox2').attr("disabled", false);
        }
    });
    $('select[name="face_length_c"]').change(function() {
        if ('No Glass' == $(this).val()) {
            $('#checkbox2').attr("disabled", true); // make sure all divs are hidden
            $("#checkbox2").attr("checked", false);
        } else {
            $('#checkbox2').attr("disabled", false);
        }
    });
    $('select[name="face_length_d"]').change(function() {
        if ('No Glass' == $(this).val()) {
            $('#checkbox2').attr("disabled", true); // make sure all divs are hidden
            $("#checkbox2").attr("checked", false);
        } else {
            $('#checkbox2').attr("disabled", false);
        }
    });

    //if(iscustomimg==1){
    //			if(category_name=='EP11'){
    //				imageName='V'+imageName;
    //			}
    //			if(category_name=='EP12'){
    //				imageName='VERT'+imageName;
    //			}
    //			
    //	   }
    if (category_name == 'EP11') {
        imageName = 'V' + imageName;

    }
    if (category_name == 'EP12') {
        imageName = 'VERT' + imageName;
    }
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
    //if(height!="select"){
    if (!glassName.indexOf("select")) {
        if (glassName != "") {
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName][0] + '" />';
            facePrice = parseFloat(product_name_price[glassName][1]);
        }
    } else {

    }

    if (glassName_l != "") {
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_l][0] + '" />';
        facePrice_l = parseFloat(product_name_price[glassName_l][1]);
        //if(left_lenght_obj.value<=42 && wt!=1){
        //  facePrice_l=Math.round(facePrice_l*wt);
        //$("#c_glass_left_mult").val(wt);
        // }
    }
    if (glassName_r != "") {
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_r][0] + '" />';
        facePrice_r = parseFloat(product_name_price[glassName_r][1]);
        //if(right_lenght_obj.value<=42 && wt!=1){
        //facePrice_r=Math.round(facePrice_r*wt);
        //$("#c_glass_right_mult").val(wt);
        // }
    }
    if (glassName != "") {
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName][0] + '" />';
        facePrice_a = parseFloat(product_name_price[glassName][1]);
        if (face_lenght_obj.value <= 42 && wt != 1) {
            facePrice_a = Math.round(facePrice_a * wt);
            $("#c_glass_mult").val(wt);
        }
    }
    if (glassName_a != "") {
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_a][0] + '" />';
        facePrice_a = parseFloat(product_name_price[glassName_a][1]);
        if (face_lenght_a_obj.value <= 42 && wt != 1) {
            facePrice_a = Math.round(facePrice_a * wt);
            $("#c_glass_a_mult").val(wt);
        }
    }

    if (glassName_b != "") {
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_b][0] + '" />';
        facePrice_b = parseFloat(product_name_price[glassName_b][1]);
        if (face_lenght_b_obj.value <= 42 && wt != 1) {
            facePrice_b = Math.round(facePrice_b * wt);
            $("#c_glass_b_mult").val(wt);
        }
    }
    if (glassName_c != "") {
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_c][0] + '" />';
        facePrice_c = parseFloat(product_name_price[glassName_c][1]);
        if (face_lenght_c_obj.value <= 42 && wt != 1) {
            facePrice_c = Math.round(facePrice_c * wt);
            $("#c_glass_c_mult").val(wt);
        }
    }
    if (glassName_d != "") {
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_d][0] + '" />';
        facePrice_d = parseFloat(product_name_price[glassName_d][1]);
        if (face_lenght_d_obj.value <= 42 && wt != 1) {
            facePrice_d = Math.round(facePrice_d * wt);
            $("#c_glass_d_mult").val(wt);
        }
    }
    if (light_a != "") {
        //str+='<input type="hidden" name="products_id[]" value="'+product_name_price[light_d][0]+'" />';
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_a][0] + '" />';

        lightPrice_a = parseFloat(product_name_price[light_a][1]);
        //alert(lightPrice_a)
    }
    if (light_b != "") {
        //str+='<input type="hidden" name="products_id[]" value="'+product_name_price[light_d][0]+'" />';
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_b][0] + '" />';

        lightPrice_b = parseFloat(product_name_price[light_b][1]);
    }
    if (light_c != "") {
        //str+='<input type="hidden" name="products_id[]" value="'+product_name_price[light_d][0]+'" />';
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_c][0] + '" />';

        lightPrice_c = parseFloat(product_name_price[light_c][1]);
    }
    if (light_d != "") {
        //str+='<input type="hidden" name="products_id[]" value="'+product_name_price[light_d][0]+'" />';
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_d][0] + '" />';

        lightPrice_d = parseFloat(product_name_price[light_d][1]);
    }
    var add_more_bay = add_more_bay;
    if (add_more_bay == 1) {
        if (leftEndPost != "") {
            str += '<input type="hidden" name="products_id[]" value="0" />';
            leftPostPrice = parseFloat(0);
        }
    } else {
        if (leftEndPost != "") {
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[leftEndPost][0] + '" />';
            leftPostPrice = parseFloat(product_name_price[leftEndPost][1]);
        }

    }
    if (rightEndPost != "") {
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[rightEndPost][0] + '" />';
        rightPostPrice = parseFloat(product_name_price[rightEndPost][1]);
    }

    if ((centerPost != "") || (centerPost1 != "") || (centerPost2 != "") || (centerPost3 != "")) {

        if (gotocornerpostss == "1") {
            //if(cornerPosition=="1st Center Post from Left"){

            if (type_obj.value == "2BAY") {

                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[centerPost1][0] + '" />';
                centerPostPrice1 = parseFloat(product_name_price[centerPost1][1]);
                centerPostPrice = centerPostPrice1;
            }
            if (type_obj.value == "3BAY") {

                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[centerPost1][0] + '" />';
                centerPostPrice1 = parseFloat(product_name_price[centerPost1][1]);

                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[centerPost2][0] + '" />';
                centerPostPrice2 = parseFloat(product_name_price[centerPost2][1]);
                centerPostPrice = centerPostPrice1 + centerPostPrice2;
            }
            if (type_obj.value == "4BAY") {

                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[centerPost1][0] + '" />';
                centerPostPrice1 = parseFloat(product_name_price[centerPost1][1]);

                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[centerPost2][0] + '" />';
                centerPostPrice2 = parseFloat(product_name_price[centerPost2][1]);

                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[centerPost3][0] + '" />';
                centerPostPrice3 = parseFloat(product_name_price[centerPost3][1]);
                centerPostPrice = centerPostPrice1 + centerPostPrice2 + centerPostPrice3;
            }
            /*}
            else if(cornerPosition=="2nd Center Post from Left"){
                str+='<input type="hidden" name="products_id[]" value="'+product_name_price[centerPost1][0]+'" />';
             centerPostPrice1=parseFloat(product_name_price[centerPost1][1]);
             
             str+='<input type="hidden" name="products_id[]" value="'+product_name_price[centerPost2][0]+'" />';
             centerPostPrice2=parseFloat(product_name_price[centerPost2][1]);
                  
            str+='<input type="hidden" name="products_id[]" value="'+product_name_price[centerPost3][0]+'" />';
             centerPostPrice3=parseFloat(product_name_price[centerPost3][1]);
             
             if(type_obj.value=="2BAY"){
             centerPostPrice=centerPostPrice1;
             }
             if(type_obj.value=="3BAY"){
             centerPostPrice=centerPostPrice1+centerPostPrice2;
             }
             if(type_obj.value=="4BAY"){
             centerPostPrice=centerPostPrice1+centerPostPrice2+centerPostPrice3;
             }
            
            }
             else if(cornerPosition=="3rd Center Post from Left"){
            str+='<input type="hidden" name="products_id[]" value="'+product_name_price[centerPost1][0]+'" />';
             centerPostPrice1=parseFloat(product_name_price[centerPost1][1]);
             
             str+='<input type="hidden" name="products_id[]" value="'+product_name_price[centerPost2][0]+'" />';
             centerPostPrice2=parseFloat(product_name_price[centerPost2][1]);
                  
            str+='<input type="hidden" name="products_id[]" value="'+product_name_price[centerPost3][0]+'" />';
             centerPostPrice3=parseFloat(product_name_price[centerPost3][1]);
             
             if(type_obj.value=="2BAY"){
             centerPostPrice=centerPostPrice1;
             }
             if(type_obj.value=="3BAY"){
             centerPostPrice=centerPostPrice1+centerPostPrice2;
             }
             if(type_obj.value=="4BAY"){
             centerPostPrice=centerPostPrice1+centerPostPrice2+centerPostPrice3;
             }
             
            }*/
            //alert(centerPostPrice3);

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
                    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[centerPost][0] + '" />';
                    centerPostPrice = centerPostPrice + parseFloat(product_name_price[centerPost][1]);
                }
                i++;
            }

        }
    }

    if (anglePost != "" && category_name == "EP36") {
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
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[anglePost][0] + '" />';
            anglePostPrice = anglePostPrice + parseFloat(product_name_price[anglePost][1]);
            i++;
        }
    }
    // }
    if (make_adjustable == "yes") {
        if (type_obj.value == "1BAY") {
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[adjustable_name][0] + '" />';
        } else if (type_obj.value == "2BAY") {
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[adjustable_name][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[adjustable_name][0] + '" />';
        } else if (type_obj.value == "3BAY") {
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[adjustable_name][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[adjustable_name][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[adjustable_name][0] + '" />';
        } else {
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[adjustable_name][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[adjustable_name][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[adjustable_name][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[adjustable_name][0] + '" />';
        }
    }
	//alert(leftEndPanel);
    if (leftEndPanel != "") {
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[leftEndPanel][0] + '" />';
        leftEndPanelPrice = parseFloat(product_name_price[leftEndPanel][1]);
    }
    if (rightEndPanel != "") {
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[rightEndPanel][0] + '" />';
        rightEndPanelPrice = parseFloat(product_name_price[rightEndPanel][1]);
    }
    /*frosteg glass by yogesh*/
    if (roastedglass != "") {
        if (category_name == "EP36") {
            var right_length_val = '8-1/2"';
            var left_length_val = '8-1/2"';
            var postheight_val = '11-1/2"';

            if (type_obj.value == "1BAY") {
                if (glass_face_obj.value == 1) {
                    if (roasted_glass_obj.value == "yes") {
                        //flangeCovers="EP5-FLANGE COVER 1 PIECE";
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[roastedglass][0] + '" />';
                        /* for left lenth and postb height*/

                        var leftlenght = getBeforeChar(left_length_val);
                        var leftlenghtcustom = getAfterChar(left_length_val);
                        if (leftlenghtcustom != '') {
                            var customlenth = customcal(leftlenghtcustom);
                        } else {
                            var customlenth = ' ';
                        }
                        totle_for_leftlenght = yoge(leftlenght, customlenth);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_left = roastedglasscal(totle_for_leftlenght, totle_for_postlenght)
                            //alert(finalprice_for_post_and_left)
                            /* for left lenth and postb height*/
                            /* for right lenth and postb height*/
                        var rightlenght = getBeforeChar(right_length_val);
                        var rightlenghtcustom = getAfterChar(right_length_val);
                        if (rightlenghtcustom != '') {
                            var customlenthright = customcal(rightlenghtcustom);
                        } else {
                            var customlenthright = ' ';
                        }
                        totle_for_rightlenght = yoge(rightlenght, customlenthright);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_right = roastedglasscal(totle_for_rightlenght, totle_for_postlenght)
                            //alert(finalprice_for_post_and_right)
                            /* for right lenth and postb height*/
                            /* for face lenth and postb height*/
                        var facelenght = getBeforeChar(face_lenght_obj.options[face_lenght_obj.selectedIndex].text);
                        var facelenghtcustom = getAfterChar(face_lenght_obj.options[face_lenght_obj.selectedIndex].text);
                        if (facelenghtcustom != '') {
                            var customlenthface = customcal(facelenghtcustom);
                        } else {
                            var customlenthface = ' ';
                        }
                        totle_for_facelenght = yoge(facelenght, customlenthface);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_face = roastedglasscal(totle_for_facelenght, totle_for_postlenght)
                            //alert(finalprice_for_post_and_face)
                            /* for face lenth and postb height*/
                        roastedglassprice1 = finalprice_for_post_and_face + finalprice_for_post_and_right + finalprice_for_post_and_left;
                        roastedglassprice = roastedglassprice1.toFixed(2)
                            //alert(finalprice_for_post_and_face)
                    }
                    //var teeshu=getBeforeChar(left_length_val);
                    //alert(teeshu)
                } else if (glass_face_obj.value == 2) {
                    //flangeCovers="EP5-FLANGE COVER 3 PIECES";
                    if (roasted_glass_obj.value == "yes") {
                        //flangeCovers="EP5-FLANGE COVER 1 PIECE";
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[roastedglass][0] + '" />';
                        /* for left lenth and postb height*/
                        /* var leftlenght=getBeforeChar(left_length_val);
                        var leftlenghtcustom=getAfterChar(left_length_val);
                        if(leftlenghtcustom!=''){
                            var customlenth=customcal(leftlenghtcustom);
                        }else{
                            var customlenth=' ';
                        }
                        totle_for_leftlenght=yoge(leftlenght,customlenth);
                        var postlenght=getBeforeChar(postheight_val);
                        var postlenghtcustom=getAfterChar(postheight_val);
                        if(postlenghtcustom!=''){
                            var customlenth_post=customcal(postlenghtcustom);
                        }else{
                            var customlenth_post=' ';
                        }
                        totle_for_postlenght=yoge(postlenght,customlenth_post);
                        */
                        var finalprice_for_post_and_left = 0;
                        //alert(finalprice_for_post_and_left)
                        /* for left lenth and postb height*/
                        /* for right lenth and postb height*/
                        var rightlenght = getBeforeChar(right_length_val);
                        var rightlenghtcustom = getAfterChar(right_length_val);
                        if (rightlenghtcustom != '') {
                            var customlenthright = customcal(rightlenghtcustom);
                        } else {
                            var customlenthright = ' ';
                        }
                        totle_for_rightlenght = yoge(rightlenght, customlenthright);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_right = roastedglasscal(totle_for_rightlenght, totle_for_postlenght)
                            //alert(finalprice_for_post_and_right)
                            /* for right lenth and postb height*/
                            /* for face lenth and postb height*/
                        var facelenght = getBeforeChar(face_lenght_obj.options[face_lenght_obj.selectedIndex].text);
                        var facelenghtcustom = getAfterChar(face_lenght_obj.options[face_lenght_obj.selectedIndex].text);
                        if (facelenghtcustom != '') {
                            var customlenthface = customcal(facelenghtcustom);
                        } else {
                            var customlenthface = ' ';
                        }
                        totle_for_facelenght = yoge(facelenght, customlenthface);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_face = roastedglasscal(totle_for_facelenght, totle_for_postlenght)
                            //alert(finalprice_for_post_and_face)
                            /* for face lenth and postb height*/
                        roastedglassprice1 = finalprice_for_post_and_face + finalprice_for_post_and_right + finalprice_for_post_and_left;
                        roastedglassprice = roastedglassprice1.toFixed(2)
                            //alert(finalprice_for_post_and_face)
                    }
                } else if (glass_face_obj.value == 3) {
                    if (roasted_glass_obj.value == "yes") {
                        //flangeCovers="EP5-FLANGE COVER 1 PIECE";
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[roastedglass][0] + '" />';
                        /* for left lenth and postb height*/
                        var leftlenght = getBeforeChar(left_length_val);
                        var leftlenghtcustom = getAfterChar(left_length_val);
                        if (leftlenghtcustom != '') {
                            var customlenth = customcal(leftlenghtcustom);
                        } else {
                            var customlenth = ' ';
                        }
                        totle_for_leftlenght = yoge(leftlenght, customlenth);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_left = roastedglasscal(totle_for_leftlenght, totle_for_postlenght)
                            //alert(finalprice_for_post_and_left)
                            /* for left lenth and postb height*/
                            /* for right lenth and postb height*/
                            /*  var rightlenght=getBeforeChar(right_length_val);
                            var rightlenghtcustom=getAfterChar(right_length_val);
                            if(rightlenghtcustom!=''){
                                var customlenthright=customcal(rightlenghtcustom);
                            } else{
                                var customlenthright=' ';
                            }
                            totle_for_rightlenght=yoge(rightlenght,customlenthright);
                            var postlenght=getBeforeChar(postheight_val);
                            var postlenghtcustom=getAfterChar(postheight_val);
                            if(postlenghtcustom!=''){
                                var customlenth_post=customcal(postlenghtcustom);
                            }else{
                                var customlenth_post=' ';
                            }
                            totle_for_postlenght=yoge(postlenght,customlenth_post);
                            */
                        var finalprice_for_post_and_right = 0;
                        //alert(finalprice_for_post_and_right)
                        /* for right lenth and postb height*/
                        /* for face lenth and postb height*/
                        var facelenght = getBeforeChar(face_lenght_obj.options[face_lenght_obj.selectedIndex].text);
                        var facelenghtcustom = getAfterChar(face_lenght_obj.options[face_lenght_obj.selectedIndex].text);
                        if (facelenghtcustom != '') {
                            var customlenthface = customcal(facelenghtcustom);
                        } else {
                            var customlenthface = ' ';
                        }
                        totle_for_facelenght = yoge(facelenght, customlenthface);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_face = roastedglasscal(totle_for_facelenght, totle_for_postlenght)
                            //alert(finalprice_for_post_and_face)
                            /* for face lenth and postb height*/
                        roastedglassprice1 = finalprice_for_post_and_face + finalprice_for_post_and_right + finalprice_for_post_and_left;
                        roastedglassprice = roastedglassprice1.toFixed(2)
                            //alert(finalprice_for_post_and_face)
                    }
                } else if (glass_face_obj.value == 4) {
                    //flangeCovers="EP5-FLANGE COVER 2 PIECES";
                    if (roasted_glass_obj.value == "yes") {
                        //flangeCovers="EP5-FLANGE COVER 1 PIECE";
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[roastedglass][0] + '" />';
                        /* for left lenth and postb height*/
                        /*   var leftlenght=getBeforeChar(left_length_val);
                        var leftlenghtcustom=getAfterChar(left_length_val);
                        if(leftlenghtcustom!=''){
                            var customlenth=customcal(leftlenghtcustom);
                        } else{
                            var customlenth=' ';
                        }
                        totle_for_leftlenght=yoge(leftlenght,customlenth);
                        var postlenght=getBeforeChar(postheight_val);
                        var postlenghtcustom=getAfterChar(postheight_val);
                        if(postlenghtcustom!=''){
                            var customlenth_post=customcal(postlenghtcustom);
                        } else{
                            var customlenth_post=' ';
                        }
                        totle_for_postlenght=yoge(postlenght,customlenth_post);
                        */
                        var finalprice_for_post_and_left = 0;
                        //alert(finalprice_for_post_and_left)
                        /* for left lenth and postb height*/
                        /* for right lenth and postb height*/
                        /*   var rightlenght=getBeforeChar(right_length_val);
                            var rightlenghtcustom=getAfterChar(right_length_val);
                            if(rightlenghtcustom!=''){
                            var customlenthright=customcal(rightlenghtcustom);
                        } else{
                            var customlenthright=' ';
                        }
                        totle_for_rightlenght=yoge(rightlenght,customlenthright);
                        var postlenght=getBeforeChar(postheight_val);
                        var postlenghtcustom=getAfterChar(postheight_val);
                        if(postlenghtcustom!=''){
                            var customlenth_post=customcal(postlenghtcustom);
                        } else{
                            var customlenth_post=' ';
                        }
                        totle_for_postlenght=yoge(postlenght,customlenth_post);
                        */
                        var finalprice_for_post_and_right = 0;
                        //alert(finalprice_for_post_and_right)
                        /* for right lenth and postb height*/
                        /* for face lenth and postb height*/
                        var facelenght = getBeforeChar(face_lenght_obj.options[face_lenght_obj.selectedIndex].text);
                        var facelenghtcustom = getAfterChar(face_lenght_obj.options[face_lenght_obj.selectedIndex].text);
                        if (facelenghtcustom != '') {
                            var customlenthface = customcal(facelenghtcustom);
                        } else {
                            var customlenthface = ' ';
                        }
                        totle_for_facelenght = yoge(facelenght, customlenthface);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_face = roastedglasscal(totle_for_facelenght, totle_for_postlenght)
                            //alert(finalprice_for_post_and_face)
                            /* for face lenth and postb height*/
                        roastedglassprice1 = finalprice_for_post_and_face + finalprice_for_post_and_right + finalprice_for_post_and_left;
                        roastedglassprice = roastedglassprice1.toFixed(2)
                            //alert(finalprice_for_post_and_face)
                    }
                }
            } else if (type_obj.value == "2BAY") {
                if (glass_face_obj.value == 1) {
                    if (roasted_glass_obj.value == "yes") {
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[roastedglass][0] + '" />';
                        /* for left lenth and postb height*/
                        var leftlenght = getBeforeChar(left_length_val);
                        var leftlenghtcustom = getAfterChar(left_length_val);
                        if (leftlenghtcustom != '') {
                            var customlenth = customcal(leftlenghtcustom);
                        } else {
                            var customlenth = ' ';
                        }
                        totle_for_leftlenght = yoge(leftlenght, customlenth);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_left = roastedglasscal(totle_for_leftlenght, totle_for_postlenght)
                            //alert(finalprice_for_post_and_left)
                            /* for left lenth and postb height*/
                            /* for right lenth and postb height*/
                        var rightlenght = getBeforeChar(right_length_val);
                        var rightlenghtcustom = getAfterChar(right_length_val);
                        if (rightlenghtcustom != '') {
                            var customlenthright = customcal(rightlenghtcustom);
                        } else {
                            var customlenthright = ' ';
                        }
                        totle_for_rightlenght = yoge(rightlenght, customlenthright);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_right = roastedglasscal(totle_for_rightlenght, totle_for_postlenght)
                            //alert(finalprice_for_post_and_right)
                            /* for right lenth and postb height*/
                            /* for face lenth and postb height*/
                        var facelenght_a = getBeforeChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        var facelenght_a_custom = getAfterChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        if (facelenght_a_custom != '') {
                            var customlenthface_a = customcal(facelenght_a_custom);
                        } else {
                            var customlenthface_a = ' ';
                        }
                        totle_for_facelenght_a = yoge(facelenght_a, customlenthface_a);
                        var facelenght_b = getBeforeChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        var facelenght_b_custom = getAfterChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        if (facelenght_b_custom != '') {
                            var customlenthface_b = customcal(facelenght_b_custom);
                        } else {
                            var customlenthface_b = ' ';
                        }
                        totle_for_facelenght_b = yoge(facelenght_b, customlenthface_b);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_facelenght_a = roastedglasscal(totle_for_facelenght_a, totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_b = roastedglasscal(totle_for_facelenght_b, totle_for_postlenght)
                            //alert(finalprice_for_post_and_face)
                            /* for face lenth and postb height*/
                        roastedglassprice1 = finalprice_for_post_and_facelenght_a + finalprice_for_post_and_facelenght_b + finalprice_for_post_and_right + finalprice_for_post_and_left;
                        roastedglassprice = roastedglassprice1.toFixed(2)
                            //alert(finalprice_for_post_and_face)
                    }
                    //var teeshu=getBeforeChar(left_length_val);
                    //alert(teeshu)
                } else if (glass_face_obj.value == 2) {
                    if (roasted_glass_obj.value == "yes") {
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[roastedglass][0] + '" />';
                        /* for left lenth and postb height*/
                        /* var leftlenght=getBeforeChar(left_length_val);
                        var leftlenghtcustom=getAfterChar(left_length_val);
                        if(leftlenghtcustom!=''){
                            var customlenth=customcal(leftlenghtcustom);
                        } else{
                            var customlenth=' ';
                        }
                        totle_for_leftlenght=yoge(leftlenght,customlenth);
                        var postlenght=getBeforeChar(postheight_val);
                          var postlenghtcustom=getAfterChar(postheight_val);
                        if(postlenghtcustom!=''){
                            var customlenth_post=customcal(postlenghtcustom);
                        } else{
                            var customlenth_post=' ';
                        }
                        totle_for_postlenght=yoge(postlenght,customlenth_post);
                        */
                        var finalprice_for_post_and_left = 0;
                        //alert(finalprice_for_post_and_left)
                        /* for left lenth and postb height*/
                        /* for right lenth and postb height*/
                        var rightlenght = getBeforeChar(right_length_val);
                        var rightlenghtcustom = getAfterChar(right_length_val);
                        if (rightlenghtcustom != '') {
                            var customlenthright = customcal(rightlenghtcustom);
                        } else {
                            var customlenthright = ' ';
                        }
                        totle_for_rightlenght = yoge(rightlenght, customlenthright);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_right = roastedglasscal(totle_for_rightlenght, totle_for_postlenght)
                            //alert(finalprice_for_post_and_right)
                            /* for right lenth and postb height*/
                            /* for face lenth and postb height*/
                        var facelenght_a = getBeforeChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        var facelenght_a_custom = getAfterChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        if (facelenght_a_custom != '') {
                            var customlenthface_a = customcal(facelenght_a_custom);
                        } else {
                            var customlenthface_a = ' ';
                        }
                        totle_for_facelenght_a = yoge(facelenght_a, customlenthface_a);
                        var facelenght_b = getBeforeChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        var facelenght_b_custom = getAfterChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        if (facelenght_b_custom != '') {
                            var customlenthface_b = customcal(facelenght_b_custom);
                        } else {
                            var customlenthface_b = ' ';
                        }
                        totle_for_facelenght_b = yoge(facelenght_b, customlenthface_b);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_facelenght_a = roastedglasscal(totle_for_facelenght_a, totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_b = roastedglasscal(totle_for_facelenght_b, totle_for_postlenght)
                            //alert(finalprice_for_post_and_face)
                            /* for face lenth and postb height*/
                        roastedglassprice1 = finalprice_for_post_and_facelenght_a + finalprice_for_post_and_facelenght_b + finalprice_for_post_and_right + finalprice_for_post_and_left;
                        roastedglassprice = roastedglassprice1.toFixed(2)
                            //alert(finalprice_for_post_and_face)
                    }
                } else if (glass_face_obj.value == 3) {
                    if (roasted_glass_obj.value == "yes") {
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[roastedglass][0] + '" />';
                        /* for left lenth and postb height*/
                        var leftlenght = getBeforeChar(left_length_val);
                        var leftlenghtcustom = getAfterChar(left_length_val);
                        if (leftlenghtcustom != '') {
                            var customlenth = customcal(leftlenghtcustom);
                        } else {
                            var customlenth = ' ';
                        }
                        totle_for_leftlenght = yoge(leftlenght, customlenth);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_left = roastedglasscal(totle_for_leftlenght, totle_for_postlenght)
                            //alert(finalprice_for_post_and_left)
                            /* for left lenth and postb height*/
                            /* for right lenth and postb height*/
                            /* var rightlenght=getBeforeChar(right_length_val);
                            var rightlenghtcustom=getAfterChar(right_length_val);
                            if(rightlenghtcustom!=''){
                                var customlenthright=customcal(rightlenghtcustom);
                            } else{
                                var customlenthright=' ';
                            }
                            totle_for_rightlenght=yoge(rightlenght,customlenthright);
                            var postlenght=getBeforeChar(postheight_val);
                            var postlenghtcustom=getAfterChar(postheight_val);
                            if(postlenghtcustom!=''){
                                var customlenth_post=customcal(postlenghtcustom);
                            } else{
                                var customlenth_post=' ';
                            }
                            totle_for_postlenght=yoge(postlenght,customlenth_post);
                            */
                        var finalprice_for_post_and_right = 0;
                        //alert(finalprice_for_post_and_right)
                        /* for right lenth and postb height*/
                        /* for face lenth and postb height*/
                        var facelenght_a = getBeforeChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        var facelenght_a_custom = getAfterChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        if (facelenght_a_custom != '') {
                            var customlenthface_a = customcal(facelenght_a_custom);
                        } else {
                            var customlenthface_a = ' ';
                        }
                        totle_for_facelenght_a = yoge(facelenght_a, customlenthface_a);
                        var facelenght_b = getBeforeChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        var facelenght_b_custom = getAfterChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        if (facelenght_b_custom != '') {
                            var customlenthface_b = customcal(facelenght_b_custom);
                        } else {
                            var customlenthface_b = ' ';
                        }
                        totle_for_facelenght_b = yoge(facelenght_b, customlenthface_b);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_facelenght_a = roastedglasscal(totle_for_facelenght_a, totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_b = roastedglasscal(totle_for_facelenght_b, totle_for_postlenght)
                            //alert(finalprice_for_post_and_face)
                            /* for face lenth and postb height*/
                        roastedglassprice1 = finalprice_for_post_and_facelenght_a + finalprice_for_post_and_facelenght_b + finalprice_for_post_and_right + finalprice_for_post_and_left;
                        roastedglassprice = roastedglassprice1.toFixed(2)
                            //alert(finalprice_for_post_and_face)
                    }
                } else if (glass_face_obj.value == 4) {
                    //flangeCovers="EP5-FLANGE COVER 2 PIECES";
                    if (roasted_glass_obj.value == "yes") {
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[roastedglass][0] + '" />';
                        /* for left lenth and postb height*/
                        /*  var leftlenght=getBeforeChar(left_length_val);
                           var leftlenghtcustom=getAfterChar(left_length_val);
                           if(leftlenghtcustom!=''){
                               var customlenth=customcal(leftlenghtcustom);
                           } else{
                               var customlenth=' ';
                           }
                           totle_for_leftlenght=yoge(leftlenght,customlenth);
                           var postlenght=getBeforeChar(postheight_val);
                           var postlenghtcustom=getAfterChar(postheight_val);
                           if(postlenghtcustom!=''){
                               var customlenth_post=customcal(postlenghtcustom);
                           } else{
                               var customlenth_post=' ';
                           }
                           totle_for_postlenght=yoge(postlenght,customlenth_post);
                           */
                        var finalprice_for_post_and_left = 0;
                        //alert(finalprice_for_post_and_left)
                        /* for left lenth and postb height*/
                        /* for right lenth and postb height*/
                        /* var rightlenght=getBeforeChar(right_length_val);
                         var rightlenghtcustom=getAfterChar(right_length_val);
                         if(rightlenghtcustom!=''){
                             var customlenthright=customcal(rightlenghtcustom);
                         } else{
                             var customlenthright=' ';
                         }
                         totle_for_rightlenght=yoge(rightlenght,customlenthright);
                         var postlenght=getBeforeChar(postheight_val);
                         var postlenghtcustom=getAfterChar(postheight_val);
                         if(postlenghtcustom!=''){
                             var customlenth_post=customcal(postlenghtcustom);
                         } else{
                             var customlenth_post=' ';
                         }
                         totle_for_postlenght=yoge(postlenght,customlenth_post);
                         */
                        var finalprice_for_post_and_right = 0;
                        //alert(finalprice_for_post_and_right)
                        /* for right lenth and postb height*/
                        /* for face lenth and postb height*/
                        var facelenght_a = getBeforeChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        var facelenght_a_custom = getAfterChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        if (facelenght_a_custom != '') {
                            var customlenthface_a = customcal(facelenght_a_custom);
                        } else {
                            var customlenthface_a = ' ';
                        }
                        totle_for_facelenght_a = yoge(facelenght_a, customlenthface_a);
                        var facelenght_b = getBeforeChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        var facelenght_b_custom = getAfterChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        if (facelenght_b_custom != '') {
                            var customlenthface_b = customcal(facelenght_b_custom);
                        } else {
                            var customlenthface_b = ' ';
                        }
                        totle_for_facelenght_b = yoge(facelenght_b, customlenthface_b);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_facelenght_a = roastedglasscal(totle_for_facelenght_a, totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_b = roastedglasscal(totle_for_facelenght_b, totle_for_postlenght)
                            //alert(finalprice_for_post_and_face)
                            /* for face lenth and postb height*/
                        roastedglassprice1 = finalprice_for_post_and_facelenght_a + finalprice_for_post_and_facelenght_b + finalprice_for_post_and_right + finalprice_for_post_and_left;
                        roastedglassprice = roastedglassprice1.toFixed(2)
                            //alert(finalprice_for_post_and_face)
                    }
                }
            } else if (type_obj.value == "3BAY") {
                if (glass_face_obj.value == 1) {
                    if (roasted_glass_obj.value == "yes") {
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[roastedglass][0] + '" />';
                        /* for left lenth and postb height*/
                        var leftlenght = getBeforeChar(left_length_val);
                        var leftlenghtcustom = getAfterChar(left_length_val);
                        if (leftlenghtcustom != '') {
                            var customlenth = customcal(leftlenghtcustom);
                        } else {
                            var customlenth = ' ';
                        }
                        totle_for_leftlenght = yoge(leftlenght, customlenth);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_left = roastedglasscal(totle_for_leftlenght, totle_for_postlenght)
                            //alert(finalprice_for_post_and_left)
                            /* for left lenth and postb height*/
                            /* for right lenth and postb height*/
                        var rightlenght = getBeforeChar(right_length_val);
                        var rightlenghtcustom = getAfterChar(right_length_val);
                        if (rightlenghtcustom != '') {
                            var customlenthright = customcal(rightlenghtcustom);
                        } else {
                            var customlenthright = ' ';
                        }
                        totle_for_rightlenght = yoge(rightlenght, customlenthright);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_right = roastedglasscal(totle_for_rightlenght, totle_for_postlenght)
                            //alert(finalprice_for_post_and_right)
                            /* for right lenth and postb height*/
                            /* for face lenth and postb height*/
                        var facelenght_a = getBeforeChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        var facelenght_a_custom = getAfterChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        if (facelenght_a_custom != '') {
                            var customlenthface_a = customcal(facelenght_a_custom);
                        } else {
                            var customlenthface_a = ' ';
                        }
                        totle_for_facelenght_a = yoge(facelenght_a, customlenthface_a);
                        var facelenght_b = getBeforeChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        var facelenght_b_custom = getAfterChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        if (facelenght_b_custom != '') {
                            var customlenthface_b = customcal(facelenght_b_custom);
                        } else {
                            var customlenthface_b = ' ';
                        }
                        totle_for_facelenght_b = yoge(facelenght_b, customlenthface_b);
                        var facelenght_c = getBeforeChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                        var facelenght_c_custom = getAfterChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                        if (facelenght_c_custom != '') {
                            var customlenthface_c = customcal(facelenght_c_custom);
                        } else {
                            var customlenthface_c = ' ';
                        }
                        totle_for_facelenght_c = yoge(facelenght_c, customlenthface_c);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_facelenght_a = roastedglasscal(totle_for_facelenght_a, totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_b = roastedglasscal(totle_for_facelenght_b, totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_c = roastedglasscal(totle_for_facelenght_c, totle_for_postlenght)
                            //alert(finalprice_for_post_and_face)
                            /* for face lenth and postb height*/
                        roastedglassprice1 = finalprice_for_post_and_facelenght_a + finalprice_for_post_and_facelenght_b + finalprice_for_post_and_right + finalprice_for_post_and_facelenght_c + finalprice_for_post_and_left;
                        roastedglassprice = roastedglassprice1.toFixed(2)
                    }
                } else if (glass_face_obj.value == 2) {
                    if (roasted_glass_obj.value == "yes") {
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[roastedglass][0] + '" />';
                        /* for left lenth and postb height*/
                        var finalprice_for_post_and_left = 0;
                        //alert(finalprice_for_post_and_left)
                        /* for left lenth and postb height*/
                        /* for right lenth and postb height*/
                        var rightlenght = getBeforeChar(right_length_val);
                        var rightlenghtcustom = getAfterChar(right_length_val);
                        if (rightlenghtcustom != '') {
                            var customlenthright = customcal(rightlenghtcustom);
                        } else {
                            var customlenthright = ' ';
                        }
                        totle_for_rightlenght = yoge(rightlenght, customlenthright);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_right = roastedglasscal(totle_for_rightlenght, totle_for_postlenght)
                            /* for right lenth and postb height*/
                            /* for face lenth and postb height*/
                        var facelenght_a = getBeforeChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        var facelenght_a_custom = getAfterChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        if (facelenght_a_custom != '') {
                            var customlenthface_a = customcal(facelenght_a_custom);
                        } else {
                            var customlenthface_a = ' ';
                        }
                        totle_for_facelenght_a = yoge(facelenght_a, customlenthface_a);
                        var facelenght_b = getBeforeChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        var facelenght_b_custom = getAfterChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        if (facelenght_b_custom != '') {
                            var customlenthface_b = customcal(facelenght_b_custom);
                        } else {
                            var customlenthface_b = ' ';
                        }
                        totle_for_facelenght_b = yoge(facelenght_b, customlenthface_b);
                        var facelenght_c = getBeforeChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                        var facelenght_c_custom = getAfterChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                        if (facelenght_c_custom != '') {
                            var customlenthface_c = customcal(facelenght_c_custom);
                        } else {
                            var customlenthface_c = ' ';
                        }
                        totle_for_facelenght_c = yoge(facelenght_c, customlenthface_c);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_facelenght_a = roastedglasscal(totle_for_facelenght_a, totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_b = roastedglasscal(totle_for_facelenght_b, totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_c = roastedglasscal(totle_for_facelenght_c, totle_for_postlenght)
                            //alert(finalprice_for_post_and_face)
                            /* for face lenth and postb height*/
                        roastedglassprice1 = finalprice_for_post_and_facelenght_a + finalprice_for_post_and_facelenght_b + finalprice_for_post_and_right + finalprice_for_post_and_facelenght_c + finalprice_for_post_and_left;
                        roastedglassprice = roastedglassprice1.toFixed(2)
                    }
                } else if (glass_face_obj.value == 3) {
                    if (roasted_glass_obj.value == "yes") {
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[roastedglass][0] + '" />';
                        /* for left lenth and postb height*/
                        var leftlenght = getBeforeChar(left_length_val);
                        var leftlenghtcustom = getAfterChar(left_length_val);
                        if (leftlenghtcustom != '') {
                            var customlenth = customcal(leftlenghtcustom);
                        } else {
                            var customlenth = ' ';
                        }
                        totle_for_leftlenght = yoge(leftlenght, customlenth);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_left = roastedglasscal(totle_for_leftlenght, totle_for_postlenght)
                            /* for left lenth and postb height*/
                            /* for right lenth and postb height*/
                        var finalprice_for_post_and_right = 0;
                        //alert(finalprice_for_post_and_right)
                        /* for right lenth and postb height*/
                        /* for face lenth and postb height*/
                        var facelenght_a = getBeforeChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        var facelenght_a_custom = getAfterChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        if (facelenght_a_custom != '') {
                            var customlenthface_a = customcal(facelenght_a_custom);
                        } else {
                            var customlenthface_a = ' ';
                        }
                        totle_for_facelenght_a = yoge(facelenght_a, customlenthface_a);
                        var facelenght_b = getBeforeChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        var facelenght_b_custom = getAfterChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        if (facelenght_b_custom != '') {
                            var customlenthface_b = customcal(facelenght_b_custom);
                        } else {
                            var customlenthface_b = ' ';
                        }
                        totle_for_facelenght_b = yoge(facelenght_b, customlenthface_b);
                        var facelenght_c = getBeforeChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                        var facelenght_c_custom = getAfterChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                        if (facelenght_c_custom != '') {
                            var customlenthface_c = customcal(facelenght_c_custom);
                        } else {
                            var customlenthface_c = ' ';
                        }
                        totle_for_facelenght_c = yoge(facelenght_c, customlenthface_c);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_facelenght_a = roastedglasscal(totle_for_facelenght_a, totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_b = roastedglasscal(totle_for_facelenght_b, totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_c = roastedglasscal(totle_for_facelenght_c, totle_for_postlenght)
                            //alert(finalprice_for_post_and_face)
                            /* for face lenth and postb height*/
                        roastedglassprice1 = finalprice_for_post_and_facelenght_a + finalprice_for_post_and_facelenght_b + finalprice_for_post_and_right + finalprice_for_post_and_facelenght_c + finalprice_for_post_and_left;
                        roastedglassprice = roastedglassprice1.toFixed(2)
                    }
                } else if (glass_face_obj.value == 4) {
                    if (roasted_glass_obj.value == "yes") {
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[roastedglass][0] + '" />';
                        /* for left lenth and postb height*/
                        var finalprice_for_post_and_left = 0;
                        /* for left lenth and postb height*/
                        /* for right lenth and postb height*/
                        var finalprice_for_post_and_right = 0;
                        /* for right lenth and postb height*/
                        /* for face lenth and postb height*/
                        var facelenght_a = getBeforeChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        var facelenght_a_custom = getAfterChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        if (facelenght_a_custom != '') {
                            var customlenthface_a = customcal(facelenght_a_custom);
                        } else {
                            var customlenthface_a = ' ';
                        }
                        totle_for_facelenght_a = yoge(facelenght_a, customlenthface_a);
                        var facelenght_b = getBeforeChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        var facelenght_b_custom = getAfterChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        if (facelenght_b_custom != '') {
                            var customlenthface_b = customcal(facelenght_b_custom);
                        } else {
                            var customlenthface_b = ' ';
                        }
                        totle_for_facelenght_b = yoge(facelenght_b, customlenthface_b);
                        var facelenght_c = getBeforeChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                        var facelenght_c_custom = getAfterChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                        if (facelenght_c_custom != '') {
                            var customlenthface_c = customcal(facelenght_c_custom);
                        } else {
                            var customlenthface_c = ' ';
                        }
                        totle_for_facelenght_c = yoge(facelenght_c, customlenthface_c);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_facelenght_a = roastedglasscal(totle_for_facelenght_a, totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_b = roastedglasscal(totle_for_facelenght_b, totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_c = roastedglasscal(totle_for_facelenght_c, totle_for_postlenght)
                            //alert(finalprice_for_post_and_face)
                            /* for face lenth and postb height*/
                        roastedglassprice1 = finalprice_for_post_and_facelenght_a + finalprice_for_post_and_facelenght_b + finalprice_for_post_and_right + finalprice_for_post_and_facelenght_c + finalprice_for_post_and_left;
                        roastedglassprice = roastedglassprice1.toFixed(2)
                    }
                }
            } else if (type_obj.value == "4BAY") {
                if (glass_face_obj.value == 1) {
                    if (roasted_glass_obj.value == "yes") {
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[roastedglass][0] + '" />';
                        /* for left lenth and postb height*/
                        var leftlenght = getBeforeChar(left_length_val);
                        var leftlenghtcustom = getAfterChar(left_length_val);
                        if (leftlenghtcustom != '') {
                            var customlenth = customcal(leftlenghtcustom);
                        } else {
                            var customlenth = ' ';
                        }
                        totle_for_leftlenght = yoge(leftlenght, customlenth);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_left = roastedglasscal(totle_for_leftlenght, totle_for_postlenght)
                            //alert(finalprice_for_post_and_left)
                            /* for left lenth and postb height*/
                            /* for right lenth and postb height*/
                        var rightlenght = getBeforeChar(right_length_val);
                        var rightlenghtcustom = getAfterChar(right_length_val);
                        if (rightlenghtcustom != '') {
                            var customlenthright = customcal(rightlenghtcustom);
                        } else {
                            var customlenthright = ' ';
                        }
                        totle_for_rightlenght = yoge(rightlenght, customlenthright);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_right = roastedglasscal(totle_for_rightlenght, totle_for_postlenght)
                            //alert(finalprice_for_post_and_right)
                            /* for right lenth and postb height*/
                            /* for face lenth and postb height*/
                        var facelenght_a = getBeforeChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        var facelenght_a_custom = getAfterChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        if (facelenght_a_custom != '') {
                            var customlenthface_a = customcal(facelenght_a_custom);
                        } else {
                            var customlenthface_a = ' ';
                        }
                        totle_for_facelenght_a = yoge(facelenght_a, customlenthface_a);
                        var facelenght_b = getBeforeChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        var facelenght_b_custom = getAfterChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        if (facelenght_b_custom != '') {
                            var customlenthface_b = customcal(facelenght_b_custom);
                        } else {
                            var customlenthface_b = ' ';
                        }
                        totle_for_facelenght_b = yoge(facelenght_b, customlenthface_b);
                        var facelenght_c = getBeforeChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                        var facelenght_c_custom = getAfterChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                        if (facelenght_c_custom != '') {
                            var customlenthface_c = customcal(facelenght_c_custom);
                        } else {
                            var customlenthface_c = ' ';
                        }
                        totle_for_facelenght_c = yoge(facelenght_c, customlenthface_c);
                        var facelenght_d = getBeforeChar(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
                        var facelenght_d_custom = getAfterChar(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
                        if (facelenght_d_custom != '') {
                            var customlenthface_d = customcal(facelenght_d_custom);
                        } else {
                            var customlenthface_d = ' ';
                        }
                        totle_for_facelenght_d = yoge(facelenght_d, customlenthface_d);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_facelenght_a = roastedglasscal(totle_for_facelenght_a, totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_b = roastedglasscal(totle_for_facelenght_b, totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_c = roastedglasscal(totle_for_facelenght_c, totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_d = roastedglasscal(totle_for_facelenght_d, totle_for_postlenght)
                            //alert(finalprice_for_post_and_face)
                            /* for face lenth and postb height*/
                        roastedglassprice1 = finalprice_for_post_and_facelenght_a + finalprice_for_post_and_facelenght_b + finalprice_for_post_and_right + finalprice_for_post_and_facelenght_c + finalprice_for_post_and_facelenght_d + finalprice_for_post_and_left;
                        roastedglassprice = roastedglassprice1.toFixed(2)
                    }
                } else if (glass_face_obj.value == 2) {
                    if (roasted_glass_obj.value == "yes") {
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[roastedglass][0] + '" />';
                        /* for left lenth and postb height*/
                        var finalprice_for_post_and_left = 0;
                        //alert(finalprice_for_post_and_left)
                        /* for left lenth and postb height*/
                        /* for right lenth and postb height*/
                        var rightlenght = getBeforeChar(right_length_val);
                        var rightlenghtcustom = getAfterChar(right_length_val);
                        if (rightlenghtcustom != '') {
                            var customlenthright = customcal(rightlenghtcustom);
                        } else {
                            var customlenthright = ' ';
                        }
                        totle_for_rightlenght = yoge(rightlenght, customlenthright);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_right = roastedglasscal(totle_for_rightlenght, totle_for_postlenght)
                            /* for right lenth and postb height*/
                            /* for face lenth and postb height*/
                        var facelenght_a = getBeforeChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        var facelenght_a_custom = getAfterChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        if (facelenght_a_custom != '') {
                            var customlenthface_a = customcal(facelenght_a_custom);
                        } else {
                            var customlenthface_a = ' ';
                        }
                        totle_for_facelenght_a = yoge(facelenght_a, customlenthface_a);
                        var facelenght_b = getBeforeChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        var facelenght_b_custom = getAfterChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        if (facelenght_b_custom != '') {
                            var customlenthface_b = customcal(facelenght_b_custom);
                        } else {
                            var customlenthface_b = ' ';
                        }
                        totle_for_facelenght_b = yoge(facelenght_b, customlenthface_b);
                        var facelenght_c = getBeforeChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                        var facelenght_c_custom = getAfterChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                        if (facelenght_c_custom != '') {
                            var customlenthface_c = customcal(facelenght_c_custom);
                        } else {
                            var customlenthface_c = ' ';
                        }
                        totle_for_facelenght_c = yoge(facelenght_c, customlenthface_c);
                        var facelenght_d = getBeforeChar(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
                        var facelenght_d_custom = getAfterChar(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
                        if (facelenght_d_custom != '') {
                            var customlenthface_d = customcal(facelenght_d_custom);
                        } else {
                            var customlenthface_d = ' ';
                        }
                        totle_for_facelenght_d = yoge(facelenght_d, customlenthface_d);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_facelenght_a = roastedglasscal(totle_for_facelenght_a, totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_b = roastedglasscal(totle_for_facelenght_b, totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_c = roastedglasscal(totle_for_facelenght_c, totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_d = roastedglasscal(totle_for_facelenght_d, totle_for_postlenght)
                            //alert(finalprice_for_post_and_face)
                            /* for face lenth and postb height*/
                        roastedglassprice1 = finalprice_for_post_and_facelenght_a + finalprice_for_post_and_facelenght_b + finalprice_for_post_and_right + finalprice_for_post_and_facelenght_c + finalprice_for_post_and_facelenght_d + finalprice_for_post_and_left;
                        roastedglassprice = roastedglassprice1.toFixed(2)
                    }
                } else if (glass_face_obj.value == 3) {
                    if (roasted_glass_obj.value == "yes") {
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[roastedglass][0] + '" />';
                        /* for left lenth and postb height*/
                        var leftlenght = getBeforeChar(left_length_val);
                        var leftlenghtcustom = getAfterChar(left_length_val);
                        if (leftlenghtcustom != '') {
                            var customlenth = customcal(leftlenghtcustom);
                        } else {
                            var customlenth = ' ';
                        }
                        totle_for_leftlenght = yoge(leftlenght, customlenth);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_left = roastedglasscal(totle_for_leftlenght, totle_for_postlenght)
                            /* for left lenth and postb height*/
                            /* for right lenth and postb height*/
                        var finalprice_for_post_and_right = 0;
                        //alert(finalprice_for_post_and_right)
                        /* for right lenth and postb height*/
                        /* for face lenth and postb height*/
                        var facelenght_a = getBeforeChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        var facelenght_a_custom = getAfterChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        if (facelenght_a_custom != '') {
                            var customlenthface_a = customcal(facelenght_a_custom);
                        } else {
                            var customlenthface_a = ' ';
                        }
                        totle_for_facelenght_a = yoge(facelenght_a, customlenthface_a);
                        var facelenght_b = getBeforeChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        var facelenght_b_custom = getAfterChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        if (facelenght_b_custom != '') {
                            var customlenthface_b = customcal(facelenght_b_custom);
                        } else {
                            var customlenthface_b = ' ';
                        }
                        totle_for_facelenght_b = yoge(facelenght_b, customlenthface_b);
                        var facelenght_c = getBeforeChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                        var facelenght_c_custom = getAfterChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                        if (facelenght_c_custom != '') {
                            var customlenthface_c = customcal(facelenght_c_custom);
                        } else {
                            var customlenthface_c = ' ';
                        }
                        totle_for_facelenght_c = yoge(facelenght_c, customlenthface_c);
                        var facelenght_d = getBeforeChar(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
                        var facelenght_d_custom = getAfterChar(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
                        if (facelenght_d_custom != '') {
                            var customlenthface_d = customcal(facelenght_d_custom);
                        } else {
                            var customlenthface_d = ' ';
                        }
                        totle_for_facelenght_d = yoge(facelenght_d, customlenthface_d);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_facelenght_a = roastedglasscal(totle_for_facelenght_a, totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_b = roastedglasscal(totle_for_facelenght_b, totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_c = roastedglasscal(totle_for_facelenght_c, totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_d = roastedglasscal(totle_for_facelenght_d, totle_for_postlenght)
                            //alert(finalprice_for_post_and_face)
                            /* for face lenth and postb height*/
                        roastedglassprice1 = finalprice_for_post_and_facelenght_a + finalprice_for_post_and_facelenght_b + finalprice_for_post_and_right + finalprice_for_post_and_facelenght_c + finalprice_for_post_and_facelenght_d + finalprice_for_post_and_left;
                        roastedglassprice = roastedglassprice1.toFixed(2)
                    }
                } else if (glass_face_obj.value == 4) {
                    if (roasted_glass_obj.value == "yes") {
                        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[roastedglass][0] + '" />';
                        /* for left lenth and postb height*/
                        var finalprice_for_post_and_left = 0;
                        /* for left lenth and postb height*/
                        /* for right lenth and postb height*/
                        var finalprice_for_post_and_right = 0;
                        /* for right lenth and postb height*/
                        /* for face lenth and postb height*/
                        var facelenght_a = getBeforeChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        var facelenght_a_custom = getAfterChar(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                        if (facelenght_a_custom != '') {
                            var customlenthface_a = customcal(facelenght_a_custom);
                        } else {
                            var customlenthface_a = ' ';
                        }
                        totle_for_facelenght_a = yoge(facelenght_a, customlenthface_a);
                        var facelenght_b = getBeforeChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        var facelenght_b_custom = getAfterChar(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                        if (facelenght_b_custom != '') {
                            var customlenthface_b = customcal(facelenght_b_custom);
                        } else {
                            var customlenthface_b = ' ';
                        }
                        totle_for_facelenght_b = yoge(facelenght_b, customlenthface_b);
                        var facelenght_c = getBeforeChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                        var facelenght_c_custom = getAfterChar(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                        if (facelenght_c_custom != '') {
                            var customlenthface_c = customcal(facelenght_c_custom);
                        } else {
                            var customlenthface_c = ' ';
                        }
                        totle_for_facelenght_c = yoge(facelenght_c, customlenthface_c);
                        var facelenght_d = getBeforeChar(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
                        var facelenght_d_custom = getAfterChar(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
                        if (facelenght_d_custom != '') {
                            var customlenthface_d = customcal(facelenght_d_custom);
                        } else {
                            var customlenthface_d = ' ';
                        }
                        totle_for_facelenght_d = yoge(facelenght_d, customlenthface_d);
                        var postlenght = getBeforeChar(postheight_val);
                        var postlenghtcustom = getAfterChar(postheight_val);
                        if (postlenghtcustom != '') {
                            var customlenth_post = customcal(postlenghtcustom);
                        } else {
                            var customlenth_post = ' ';
                        }
                        totle_for_postlenght = yoge(postlenght, customlenth_post);
                        var finalprice_for_post_and_facelenght_a = roastedglasscal(totle_for_facelenght_a, totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_b = roastedglasscal(totle_for_facelenght_b, totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_c = roastedglasscal(totle_for_facelenght_c, totle_for_postlenght)
                        var finalprice_for_post_and_facelenght_d = roastedglasscal(totle_for_facelenght_d, totle_for_postlenght)
                            //alert(finalprice_for_post_and_face)
                            /* for face lenth and postb height*/
                        roastedglassprice1 = finalprice_for_post_and_facelenght_a + finalprice_for_post_and_facelenght_b + finalprice_for_post_and_right + finalprice_for_post_and_facelenght_c + finalprice_for_post_and_facelenght_d + finalprice_for_post_and_left;
                        roastedglassprice = roastedglassprice1.toFixed(2)
                    }
                }
            }
        }
    }
    /* end frosteg glass by yogesh*/
    //Addition of Flange Covers!!

    if (flangeCovers != "") {
        if (category_name == "EP36") {
            if (type_obj.value == "1BAY") {
                // flangeCovers="EP5-FLANGE COVER 2 PIECES";
                flangeCovers = "EP36-FLANGE COVER 1 PIECE";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeCovers][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeCovers][0] + '" />';
                flangeCoversPrice = 2 * parseFloat(product_name_price[flangeCovers][1]);
            } else if (type_obj.value == "2BAY") {
                //flangeCovers="EP5-FLANGE COVER 3 PIECES"; 
                flangeCovers = "EP36-FLANGE COVER 1 PIECE";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeCovers][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeCovers][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeCovers][0] + '" />';
                flangeCoversPrice = 3 * parseFloat(product_name_price[flangeCovers][1]);
            } else if (type_obj.value == "3BAY") {
                //flangeCovers="EP5-FLANGE COVER 4 PIECES"; 
                flangeCovers = "EP36-FLANGE COVER 1 PIECE";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeCovers][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeCovers][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeCovers][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeCovers][0] + '" />';
                flangeCoversPrice = 4 * parseFloat(product_name_price[flangeCovers][1]);
            } else if (type_obj.value == "4BAY") {
                //flangeCovers="EP5-FLANGE COVER 4 PIECES"; 
                flangeCovers = "EP36-FLANGE COVER 1 PIECE";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeCovers][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeCovers][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeCovers][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeCovers][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeCovers][0] + '" />';
                flangeCoversPrice = 5 * parseFloat(product_name_price[flangeCovers][1]);
            }
        }

        if (product_name_price[flangeCovers] != "undifine") {
            //str+='<input type="hidden" name="products_id[]" value="'+product_name_price[flangeCovers][0]+'" />';

            //flangeCoversPrice=parseFloat(product_name_price[flangeCovers][1]);
        }
    }

    //flangeUnderCounter
    //	flange_under_counter

    if (flangeUnderCounter != "") {

        if (category_name == "EP36") {

            if (type_obj.value == "1BAY") {
                flangeUnderCounter = "EP36-UNDER COUNTER FLANGE 1 PIECE";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
                flangeUnderCounterPrice = 2 * parseFloat(product_name_price[flangeUnderCounter][1]);

            } else if (type_obj.value == "2BAY") {
                flangeUnderCounter = "EP36-UNDER COUNTER FLANGE 1 PIECE";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
                flangeUnderCounterPrice = 3 * parseFloat(product_name_price[flangeUnderCounter][1]);

            } else if (type_obj.value == "3BAY") {
                flangeUnderCounter = "EP36-UNDER COUNTER FLANGE 1 PIECE";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
                flangeUnderCounterPrice = 4 * parseFloat(product_name_price[flangeUnderCounter][1]);
            } else if (type_obj.value == "4BAY") {
                flangeUnderCounter = "EP36-UNDER COUNTER FLANGE 1 PIECE";
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

            //flangeCoversPrice=parseFloat(product_name_price[flangeUnderCounter][1]);
        }
    }

    //alert(type_obj.value+" "+glass_face_obj.value+" "+flangeCovers);
    flangeCoversPrice2 = lightPrice_a + lightPrice_b + lightPrice_c + lightPrice_d;
    glassPrice = facePrice + facePrice_a + facePrice_b + facePrice_c + facePrice_d;
    //adjustablePrice=0;
    var roastedglassprice55 = roastedglassprice * 2;
    t_post_price = centerPostPrice + anglePostPrice;
    totalPrice1 = glassPrice + leftPostPrice + rightPostPrice + leftEndPanelPrice + rightEndPanelPrice + t_post_price + flangeCoversPrice + flangeUnderCounterPrice + flangeCoversPrice2 + parseFloat(roastedglassprice55) + adjust_price + facePrice_l + facePrice_r;
    totalPrice = totalPrice1.toFixed(2)

    if (form.roasted_glass.value == "yes") { //adding image of adjustable breckets!!
        //              alert(imageName);
        imageName = "FROSTED" + imageName;

    }

    var rad1 = $("input[name='corner_post']:checked").val();
    //alert(rad1);

    //gotocornerpostcheck	 backtostraightpostcheck
    var gotocornerpost = $("input[name='gotocornerpostcheck']:checked").val();

    var noofcornerpostval = $('#noofcornerpost :selected').text();

    //alert(gotocornerpost);
    if (gotocornerpost == "1") {
        form.adjustable.value = "no";
        form.adjustable.selected = "No";
        form.light_bar.value = "no";
        form.light_bar.selected = "No";

    }

    if (form.adjustable.value == "yes") { //adding image of adjustable breckets!!
        //               alert(imageName);
        imageName = "ADJUST" + imageName;

    }

    if (type_obj.value == "2BAY" || type_obj.value == "3BAY" || type_obj.value == "4BAY") {

        if (rad1 == "1st Center Post from Left") { //adding image of Post place!!
            //              alert(imageName);
            if (gotocornerpost == "1") {

                if (noofcornerpostval == 2) {
                    //two corner post	
                    //imageName="1ST"+imageName;
                    imageName = "1STAND2ND" + imageName;
                } else {
                    //one corner post	
                    imageName = "1ST" + imageName;
                }

            } else {
                imageName = "" + imageName;

            }

        }

        if (rad1 == "2nd Center Post from Left") { //adding image of Post place!!
            //              alert(imageName);

            if (gotocornerpost == "1") {
                if (noofcornerpostval == 2) {
                    //two corner post	
                    //imageName="2ND"+imageName;
                    imageName = "2NDAND3RD" + imageName;
                } else {
                    //one corner post	
                    imageName = "2ND" + imageName;
                }

            } else {
                imageName = "" + imageName;

            }

        }

        if (rad1 == "3rd Center Post from Left") { //adding image of Post place!!
            //              alert(imageName);

            if (gotocornerpost == "1") {
                imageName = "3RD" + imageName;
            } else {
                imageName = "" + imageName;

            }

        }

        if (form.degree.value == "90degre") { //adding image of Post degree!!
            //              alert(imageName);

            if (gotocornerpost == "1") {
                imageName = "90D" + imageName;
            } else {
                imageName = "" + imageName;

            }

        }

        if (form.degree.value == "135degre") { //adding image of Post degree!!
            //              alert(imageName);

            if (gotocornerpost == "1") {
                imageName = "135D" + imageName;
            } else {
                imageName = "" + imageName;

            }

        }

        if (form.posttype.value == "inner") { //adding image of Post Inside!!
            //              alert(imageName);

            if (gotocornerpost == "1") {
                imageName = "INNER" + imageName;
            } else {
                imageName = "" + imageName;

            }

        }

        if (form.posttype.value == "outer") { //adding image of Post Outside!!
            //              alert(imageName);

            if (gotocornerpost == "1") {
                imageName = "OUTER" + imageName;
            } else {
                imageName = "" + imageName;

            }

        }

    }

    image_string = '<img src="images/' + foldername + '/' + imageName + '.jpg" style="width:568px;height:453px">';

    if (category_name == "EP36") {
        image_string += '<div class="left">Left</div><div class="right">Right</div>';
    }
    if (category_name == "EP5" || category_name == "EP36" || (category_name == "EP12") || (category_name == "EP11")) {
        image_string += '<div class="post">Height</div>';
        image_string += '<div class="msgtishu"></div>';
        image_string += '<div class="msgtishu1"></div>';
        image_string += '<div class="msgtishu2"><hr color="red" size="6px"   width="' + width_three + '"> </div>';

    }
    img_ajx = imageName;
    image_string += '<div class="glass">A</div><div class="glass_a">A</div><div class="glass_b">B</div><div class="glass_c">C</div><div class="glass_d">D</div><div class="total">Total"</div>';

    document.getElementById('additional_image').innerHTML = image_string;

    //for shopping cart degree
    if (gotocornerpost == "1") {

        $('#post_type_val').val($('[name="posttype"]').find('option:selected').text());
        $('#post_degree_val').val($('[name="degree"]').find('option:selected').text());

        //$('#quotetext span').text('goes inside the span');
        //$('#quotetext span').html('&nbsp;&nbsp;4)');

    }
    var noofcornerpostval = $('#noofcornerpost :selected').text();
    if (type_obj.value == "2BAY" || type_obj.value == "3BAY" || type_obj.value == "4BAY") {

        if (noofcornerpostval == 2) {
            //two corner post
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
            //one corner post
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

        //alert(imgpsorname1);
        //alert(imgpsorname2);
        if (noofcornerpostval == 2) {
            if (type_obj.value == "4BAY") {
                document.getElementById("postimg12").src = "images/EP36/4BAY/" + imgpsorname1 + "";
                document.getElementById("postimg23").src = "images/EP36/4BAY/" + imgpsorname2 + "";
            }
            if (type_obj.value == "3BAY") {
                document.getElementById("postimg12").src = "images/EP36/3BAY/" + imgpsorname1 + "";
            }
        } else {
            if (type_obj.value == "4BAY") {
                document.getElementById("postimg1").src = "images/EP36/4BAY/" + imgpsorname1 + "";
                document.getElementById("postimg2").src = "images/EP36/4BAY/" + imgpsorname2 + "";
                document.getElementById("postimg3").src = "images/EP36/4BAY/" + imgpsorname3 + "";
            }
            if (type_obj.value == "3BAY") {
                document.getElementById("postimg1").src = "images/EP36/3BAY/" + imgpsorname1 + "";
                document.getElementById("postimg2").src = "images/EP36/3BAY/" + imgpsorname2 + "";
            }
        }

        if (type_obj.value == "2BAY") {
            document.getElementById("postimg1").src = "images/EP36/2BAY/" + imgpsorname1 + "";
        }

    }

    //setting position of post div
 var endpanel_type = $("#end_options_type option:selected").text();
    //alert(endpanel_type);
    if (endpanel_type == "Extended") {
    if (category_name == "EP36") {

        if (glass_face_obj.value == 1) {
            if (left_lenght_obj.value == "select") {
                $("div.left").text("Left");
            } else {
                $("div.left").text(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
                $('#c_glass_left_val').val(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
                if (glassName_l != '') {
                    $('#c_glass_left').val(product_name_price[glassName_l][0]);
                }
            }
            if (right_lenght_obj.value == "select") {
                $("div.right").text("Right");
            } else {
                $("div.right").text(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);

                $('#c_glass_right_val').val(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);

                // if(arc_glass_yn=='yes')
                // {
                // $('#c_glass_right_arc_val').val($('[name="arc_glass_type_value"]').find('option:selected').text());
                // }
                // else{
                // $('#c_glass_right_arc_val').val('');
                // }

                if (glassName_r != '') {
                    $('#c_glass_right').val(product_name_price[glassName_r][0]);
                }
            }

        } else if (glass_face_obj.value == 2) {
            if (right_lenght_obj.value == "select") {
                $("div.left").css("display", "none");
                $("div.right").text("Right");
            } else {
                $("div.left").css("display", "none");
                $("div.right").text(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);

                if (glassName_r != '') {
                    $('#c_glass_right').val(product_name_price[glassName_r][0]);
                }
                $('#c_glass_right_val').val(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);

            }

        } else if (glass_face_obj.value == 3) {
            if (left_lenght_obj.value == "select") {
                $("div.right").css("display", "none");
                $("div.left").text("Left");
            } else {
                $("div.right").css("display", "none");
                $("div.left").text(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);

                if (glassName_l != '') {
                    $('#c_glass_left').val(product_name_price[glassName_l][0]);
                }
                $('#c_glass_left_val').val(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);

            }

        } else if (glass_face_obj.value == 4) {
            $("div.left").css("display", "none");
            $("div.right").css("display", "none");
        }

    }
}
    if (category_name == "EP36") {
        // setting if custom height is choosen for  EP36

        //if(height!="select"){
        if ($('#customheight').is(':checked')) {
            $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
            $("div.post").text(post_height.options[post_height.selectedIndex].text);
        } else {
            $("div.post").text($('[name="post_height"]').find('option:selected').text());
            $('#c_glass_post_val').val($('[name="post_height"]').find('option:selected').text());
            //$('#is_custom').val('');
        }
        //}else{
        // $("div.post").text("Height");
        //}
    }

    if (type_obj.value == "1BAY") {

        //for custom face set value to hidden fileds
        $('#c_glass_face_val').val($('[name="face_length"]').find('option:selected').text());
        if (glassName != '') {
            $('#c_glass_face').val(product_name_price[glassName][0]);
        }

        if (flange_covers2_obj.value == "yes" && face_lenght_obj.value != "select") {

            $('#c_glass_a_light').val(product_name_price[light_a][0]);
            $('#c_glass_a_val_light').val(face_lenght_obj.options[face_lenght_obj.selectedIndex].text);

        }
        if (roasted_glass_obj.value == "yes") {
            if (roastedglass != "") {
                $('#rostedglass_id').val(product_name_price[roastedglass][0]);
                var roastedglassprice22 = roastedglassprice * 2;
                $('#rostedglass_val').val(roastedglassprice22);
            }
        }

        if ($('[name="face_length"]').find('option:selected').text() == "Select") {
            $("div.glass").text("A");
        } else {
            $("div.glass").text($('[name="face_length"]').find('option:selected').text());
        }
        var n1 = getBeforeChar($('[name="face_length"]').find('option:selected').text()) - 0;
        //alert(n1)
        if (getAfterChar($('[name="face_length"]').find('option:selected').text()) != "") {
            n1 = (n1 + 2) + '-' + getAfterChar($('[name="face_length"]').find('option:selected').text()) + '"';
        } else { n1 = (n1 + 2) + '"'; }
        if (n1 == '2"') {
            $("div.total").text("Total");
        } else {
            $("div.total").text(n1);
            tot1 = n1;
        }
        // $("div.total").text(n1);
        if (face_lenght_obj.value == 'No Glass' || left_lenght_obj.value == "No Glass" || right_lenght_obj.value == "No Glass") {

            noGlass()
        }

    }
    if (type_obj.value == "2BAY") {

        $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
        $('#c_glass_b_val').val($('[name="face_length_b"]').find('option:selected').text());
        if (glassName_a != '' && glassName_b != '') {
            $('#c_glass_a').val(product_name_price[glassName_a][0]);
            $('#c_glass_b').val(product_name_price[glassName_b][0]);
        }

        if (face_lenght_a_obj.value != 'No Glass' && face_lenght_b_obj.value != 'No Glass') {
            if (flange_covers2_obj.value == "yes") {
                if (face_lenght_a_obj.value != "select") {
                    $('#c_glass_a_light').val(product_name_price[light_a][0]);
                    $('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                }
                if (face_lenght_b_obj.value != "select") {
                    $('#c_glass_b_light').val(product_name_price[light_b][0]);
                    $('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                }
            }
            if (roasted_glass_obj.value == "yes") {
                if (roastedglass != "") {
                    $('#rostedglass_id').val(product_name_price[roastedglass][0]);
                    var roastedglassprice22 = roastedglassprice * 2;
                    $('#rostedglass_val').val(roastedglassprice22);
                }
            }
        }

        if ($('[name="face_length_a"]').find('option:selected').text() == "Select") {
            $("div.glass_a").text("A");
        } else {
            $("div.glass_a").text($('[name="face_length_a"]').find('option:selected').text());
        }
        if ($('[name="face_length_b"]').find('option:selected').text() == "Select") {
            $("div.glass_b").text("B");
        } else {
            $("div.glass_b").text($('[name="face_length_b"]').find('option:selected').text());
        }

        var n1 = getBeforeChar($('[name="face_length_a"]').find('option:selected').text()) - 0;
        var n2 = getBeforeChar($('[name="face_length_b"]').find('option:selected').text()) - 0;
        var f_n1 = getAfterChar($('[name="face_length_a"]').find('option:selected').text());
        //alert(f_n1)
        var f_n2 = getAfterChar($('[name="face_length_b"]').find('option:selected').text());
        var total = getTotal(n1, n2, f_n1, f_n2);
        if (total == '2"') {
            $("div.total").text("Total");
        } else {
            $("div.total").text(total);
            tot1 = total;
        }

        if (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || left_lenght_obj.value == "No Glass" || right_lenght_obj.value == "No Glass") {
            noGlass()
        }
    }

    if (type_obj.value == "3BAY") {

        $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
        $('#c_glass_b_val').val($('[name="face_length_b"]').find('option:selected').text());
        $('#c_glass_c_val').val($('[name="face_length_c"]').find('option:selected').text());
        if (glassName_a != '' && glassName_b != '' && glassName_c != '') {
            $('#c_glass_a').val(product_name_price[glassName_a][0]);
            $('#c_glass_b').val(product_name_price[glassName_b][0]);
            $('#c_glass_c').val(product_name_price[glassName_c][0]);
        }
        if (face_lenght_a_obj.value != 'No Glass' && face_lenght_b_obj.value != 'No Glass' && face_lenght_c_obj.value != 'No Glass') {

            if (flange_covers2_obj.value == "yes") {
                if (face_lenght_a_obj.value != "select") {
                    $('#c_glass_a_light').val(product_name_price[light_a][0]);
                    $('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                }
                if (face_lenght_b_obj.value != "select") {
                    $('#c_glass_b_light').val(product_name_price[light_b][0]);
                    $('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                }
                if (face_lenght_c_obj.value != "select") {
                    $('#c_glass_c_light').val(product_name_price[light_c][0]);
                    $('#c_glass_c_val_light').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                }

            }
            if (roasted_glass_obj.value == "yes") {
                if (roastedglass != "") {
                    $('#rostedglass_id').val(product_name_price[roastedglass][0]);
                    var roastedglassprice22 = roastedglassprice * 2;
                    $('#rostedglass_val').val(roastedglassprice22);
                }
            }

        }
        if ($('[name="face_length_a"]').find('option:selected').text() == "Select") {
            $("div.glass_a").text("A");
        } else {
            $("div.glass_a").text($('[name="face_length_a"]').find('option:selected').text());
        }
        if ($('[name="face_length_b"]').find('option:selected').text() == "Select") {
            $("div.glass_b").text("B");
        } else {
            $("div.glass_b").text($('[name="face_length_b"]').find('option:selected').text());
        }
        if ($('[name="face_length_c"]').find('option:selected').text() == "Select") {
            $("div.glass_c").text("C");
        } else {
            $("div.glass_c").text($('[name="face_length_c"]').find('option:selected').text());
        }
        // $("div.glass_a").text($('[name="face_length_a"]').find('option:selected').text());
        // $("div.glass_b").text($('[name="face_length_b"]').find('option:selected').text());
        // $("div.glass_c").text($('[name="face_length_c"]').find('option:selected').text());
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

        if (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass' || left_lenght_obj.value == "No Glass" || right_lenght_obj.value == "No Glass") {
            noGlass()
        }
    }
    if (type_obj.value == "4BAY") {

        $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());

        $('#c_glass_b_val').val($('[name="face_length_b"]').find('option:selected').text());

        $('#c_glass_c_val').val($('[name="face_length_c"]').find('option:selected').text());
        $('#c_glass_d_val').val($('[name="face_length_d"]').find('option:selected').text());

        if (glassName_a != '' && glassName_b != '' && glassName_c != '' && glassName_d != '') {

            $('#c_glass_a').val(product_name_price[glassName_a][0]);

            $('#c_glass_b').val(product_name_price[glassName_b][0]);

            $('#c_glass_c').val(product_name_price[glassName_c][0]);
            $('#c_glass_d').val(product_name_price[glassName_d][0]);

        }
        if (face_lenght_a_obj.value != 'No Glass' && face_lenght_b_obj.value != 'No Glass' && face_lenght_c_obj.value != 'No Glass' && face_lenght_d_obj.value != 'No Glass') {
            if (flange_covers2_obj.value == "yes") {
                if (face_lenght_a_obj.value != "select") {
                    $('#c_glass_a_light').val(product_name_price[light_a][0]);
                    $('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                }
                if (face_lenght_b_obj.value != "select") {
                    $('#c_glass_b_light').val(product_name_price[light_b][0]);
                    $('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                }
                if (face_lenght_c_obj.value != "select") {
                    $('#c_glass_c_light').val(product_name_price[light_c][0]);
                    $('#c_glass_c_val_light').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                }
                if (face_lenght_d_obj.value != "select") {
                    $('#c_glass_d_light').val(product_name_price[light_d][0]);
                    $('#c_glass_d_val_light').val(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
                }
            }
            if (roasted_glass_obj.value == "yes") {
                if (roastedglass != "") {
                    $('#rostedglass_id').val(product_name_price[roastedglass][0]);
                    var roastedglassprice22 = roastedglassprice * 2;
                    $('#rostedglass_val').val(roastedglassprice22);
                }
            }
        }

        if ($('[name="face_length_a"]').find('option:selected').text() == "Select") {
            $("div.glass_a").text("A");
        } else {
            $("div.glass_a").text($('[name="face_length_a"]').find('option:selected').text());
        }
        if ($('[name="face_length_b"]').find('option:selected').text() == "Select") {
            $("div.glass_b").text("B");
        } else {
            $("div.glass_b").text($('[name="face_length_b"]').find('option:selected').text());
        }
        if ($('[name="face_length_c"]').find('option:selected').text() == "Select") {
            $("div.glass_c").text("C");
        } else {
            $("div.glass_c").text($('[name="face_length_c"]').find('option:selected').text());
        }
        if ($('[name="face_length_d"]').find('option:selected').text() == "Select") {
            $("div.glass_d").text("D");
        } else {
            $("div.glass_d").text($('[name="face_length_d"]').find('option:selected').text());
        }
        //          $("div.glass_a").text($('[name="face_length_a"]').find('option:selected').text());

        //          $("div.glass_b").text($('[name="face_length_b"]').find('option:selected').text());

        //          $("div.glass_c").text($('[name="face_length_c"]').find('option:selected').text());

        // $("div.glass_d").text($('[name="face_length_d"]').find('option:selected').text());

        var n1 = getBeforeChar($('[name="face_length_a"]').find('option:selected').text()) - 0;

        var n2 = getBeforeChar($('[name="face_length_b"]').find('option:selected').text()) - 0;

        var n3 = getBeforeChar($('[name="face_length_c"]').find('option:selected').text()) - 0;
        var n4 = getBeforeChar($('[name="face_length_d"]').find('option:selected').text()) - 0;

        var f_n1 = getAfterChar($('[name="face_length_a"]').find('option:selected').text());

        var f_n2 = getAfterChar($('[name="face_length_b"]').find('option:selected').text());

        var f_n3 = getAfterChar($('[name="face_length_c"]').find('option:selected').text());
        var f_n4 = getAfterChar($('[name="face_length_d"]').find('option:selected').text());

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

        if (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass' || face_lenght_d_obj.value == 'No Glass' || left_lenght_obj.value == "No Glass" || right_lenght_obj.value == "No Glass") {

            noGlass()

        }

    }

    if (category_name == "EP36" && type_obj.value == "1BAY") {

        $('.post').css("top", "103px");
        $(".msgtishu2").css("display", "none");

        $('.post').css("left", "447px");

        if (post_height_obj.value != "select") {
            $('.post').text(post_height_obj.options[post_height_obj.selectedIndex].text);
            if (post_height_obj.value != "Instock") {
                $('#c_glass_post_val').val(post_height_obj.options[post_height_obj.selectedIndex].text);
            }
        } else {
            $('.post').text(post_height_obj.options[post_height_obj.selectedIndex].text);
        }
        if (post_height_obj.value != "select") {

            if (post_height_obj.value != 'custom' && face_lenght_obj.value != 'No Glass') {
                $('.post').text(post_height_obj.options[post_height_obj.selectedIndex].text);
            } else {
                $('.post').text(post_height_obj.options[post_height_obj.selectedIndex].text);
            }
        } else {
            $('.post').css("top", "103px");
            $('.post').css("left", "447px");
            $('.post').text('Height');
        }
    }
    if (category_name == "EP36" && type_obj.value == "2BAY") {
        if (post_height_obj.value != "select") {
            $(".msgtishu2").css("display", "none");

            $('.post').css("top", "74px");
            $('.post').css("left", "484px");
            $('.post').text(post_height_obj.options[post_height_obj.selectedIndex].text);
            if (post_height_obj.value != "Instock") {
                $('#c_glass_post_val').val(post_height_obj.options[post_height_obj.selectedIndex].text);
            }
            if (post_height_obj.value != 'custom' && face_lenght_a_obj.value != 'No Glass') {
                $('.post').text(post_height_obj.options[post_height_obj.selectedIndex].text);
            }
        } else {
            $('.post').css("top", "74px");
            $('.post').css("left", "484px");
            $('.post').text('Height"');
        }
    }

    if (category_name == "EP36" && type_obj.value == "3BAY") {
        if (post_height_obj.value != "select") {
            $(".msgtishu2").css("display", "none");

            $('.post').css("top", "57px");
            $('.post').css("left", "520px");
            $('.post').text(post_height_obj.options[post_height_obj.selectedIndex].text);
            if (post_height_obj.value != "Instock") {
                $('#c_glass_post_val').val(post_height_obj.options[post_height_obj.selectedIndex].text);
            }
            if (post_height_obj.value != 'custom' && face_lenght_c_obj.value != 'No Glass') {
                $('.post').text(post_height_obj.options[post_height_obj.selectedIndex].text);
            }
        } else {
            $('.post').css("top", "57px");
            $('.post').css("left", "520px");
            $('.post').text('Height');
        }

    }
    if (category_name == "EP36" && type_obj.value == "4BAY") {
        if (post_height_obj.value != "select") {
            $(".msgtishu2").css("display", "none");

            $('.post').css("top", "66px");
            $('.post').css("left", "524px");
            $('.post').text(post_height_obj.options[post_height_obj.selectedIndex].text);
            if (post_height_obj.value != "Instock") {
                $('#c_glass_post_val').val(post_height_obj.options[post_height_obj.selectedIndex].text);
            }
            if (post_height_obj.value != 'custom' && face_lenght_d_obj.value != 'No Glass') {
                $('.post').text(post_height_obj.options[post_height_obj.selectedIndex].text);
            }
        } else {
            $('.post').css("top", "66px");
            $('.post').css("left", "524px");
            $('.post').text('Height');
        }

    }
    if (category_name == "EP36" && iscustomimg == 1 && type_obj.value == "1BAY") {
        if (post_height_obj.value != "select") {
            $('.post').css("top", "101px");
            $('.post').css("left", "459px");
            $('.post').text(post_height_obj.options[post_height_obj.selectedIndex].text);
            $('#c_glass_post_val').val(post_height_obj.options[post_height_obj.selectedIndex].text);
        } else {
            $('.post').css("top", "101px");
            $('.post').css("left", "459px");
            $('.post').text("Height");
        }

    }
    if (category_name == "EP36" && iscustomimg == 1 && type_obj.value == "2BAY") {
        if (post_height_obj.value != "select") {
            $('.post').css("top", "74px");
            $('.post').css("left", "494px");
            $('.post').text(post_height_obj.options[post_height_obj.selectedIndex].text);
            $('#c_glass_post_val').val(post_height_obj.options[post_height_obj.selectedIndex].text);
        } else {
            $('.post').css("top", "74px");
            $('.post').css("left", "494px");
            $('.post').text("Height");
        }

    }
    if (category_name == "EP36" && iscustomimg == 1 && type_obj.value == "3BAY") {
        if (post_height_obj.value != "select") {
            $('.post').css("top", "57px");
            $('.post').css("left", "520px");
            $('.post').text(post_height_obj.options[post_height_obj.selectedIndex].text);
            $('#c_glass_post_val').val(post_height_obj.options[post_height_obj.selectedIndex].text);
        } else {
            $('.post').css("top", "57px");
            $('.post').css("left", "520px");
            $('.post').text("Height");
        }

    }
    if (category_name == "EP36" && iscustomimg == 1 && type_obj.value == "4BAY") {
        if (post_height_obj.value != "select") {
            $('.post').css("top", "66px");
            $('.post').css("left", "524px");
            $('.post').text(post_height_obj.options[post_height_obj.selectedIndex].text);
            $('#c_glass_post_val').val(post_height_obj.options[post_height_obj.selectedIndex].text);
        } else {
            $('.post').css("top", "66px");
            $('.post').css("left", "524px");
            $('.post').text("Height");
        }

    }

    //form.posttype.value
    //form.degree.value
    var cornerPosition = $("input[name='corner_post']:checked").val();
    //alert(cornerPosition);

    var gotocornerpostss = $("input[name='gotocornerpostcheck']:checked").val();

    var noofcornerpostval = $('#noofcornerpost :selected').text();


    //Changes by Luv
    var endpanel_type = $('#end_options_type :selected').text();

    if (type_obj.value == "1BAY") {
        if (endpanel_type == "Extended") {

            $('.left').css("top", "6%");
            $('.left').css("left", "22%");

            $('.right').css("top", "0%");
            $('.right').css("left", "63%");

            $('.post').css("display", "none");

            $('.glass').css("top", "78%");
            $('.glass').css("left", "62%");

            $('.total').css("top", "82%");
            $('.total').css("left", "64%");



        } else {
            $('.left').css("display", "none");

            $('.right').css("display", "none");
        }
    }

    if (type_obj.value == "2BAY") {
        if (endpanel_type == "Extended") {

            $('.left').css("top", "12%");
            $('.left').css("left", "10%");

            $('.right').css("top", "1%");
            $('.right').css("left", "78%");

            $('.post').css("display", "none");

            $('.glass_a').css("top", "76%");
            $('.glass_a').css("left", "47%");

            $('.glass_b').css("top", "60%");
            $('.glass_b').css("left", "77%");

            $('.total').css("top", "71%");
            $('.total').css("left", "67%");


        } else {
            $('.left').css("display", "none");

            $('.right').css("display", "none");
        }
    }

    if (type_obj.value == "3BAY") {
        if (endpanel_type == "Extended") {

            $('.left').css("top", "28%");
            $('.left').css("left", "9%");

            $('.right').css("top", "2%");
            $('.right').css("left", "83%");

            $('.post').css("display", "none");

            $('.glass_a').css("top", "77%");
            $('.glass_a').css("left", "41%");

            $('.glass_b').css("top", "60%");
            $('.glass_b').css("left", "64%");

            $('.glass_c').css("top", "47%");
            $('.glass_c').css("left", "83%");

            $('.total').css("top", "66%");
            $('.total').css("left", "65%");


        } else {
            $('.left').css("display", "none");

            $('.right').css("display", "none");
        }
    }

    if (type_obj.value == "4BAY") {
        if (endpanel_type == "Extended") {

            $('.left').css("top", "30%");
            $('.left').css("left", "8%");

            $('.right').css("top", "2%");
            $('.right').css("left", "85%");

            $('.post').css("display", "none");

            $('.glass_a').css("top", "70%");
            $('.glass_a').css("left", "36%");

            $('.glass_b').css("top", "57%");
            $('.glass_b').css("left", "56%");

            $('.glass_c').css("top", "46%");
            $('.glass_c').css("left", "73%");

            $('.glass_d').css("top", "37%");
            $('.glass_d').css("left", "86%");

            $('.total').css("top", "56%");
            $('.total').css("left", "65%");


        } else {
            $('.left').css("display", "none");

            $('.right').css("display", "none");
        }
    }

    //Changes by Luv

    if (type_obj.value == "2BAY") {

        //for Extended Endpanel

        if (endpanel_type == "Extended") {

            if (gotocornerpostss == '1') {
                if (form.posttype.value == "inner") {
                    if (form.degree.value == "90degre") {
                        if (cornerPosition == "1st Center Post from Left") {

                            $('.left').css("top", "67%");
                            $('.left').css("left", "9%");

                            $('.right').css("top", "62%");
                            $('.right').css("left", "89%");

                            $('.post').css("top", "217px");
                            $('.post').css("left", "516px");

                            $('.glass_a').css("top", "63%");
                            $('.glass_a').css("left", "41%");

                            $('.glass_b').css("top", "62%");
                            $('.glass_b').css("left", "57%");

                            $('.total').css("display", "none");
                        }

                    } else if (form.degree.value == "135degre") {
                        if (cornerPosition == "1st Center Post from Left") {

                            $('.left').css("top", "69%");
                            $('.left').css("left", "10%");

                            $('.right').css("top", "50%");
                            $('.right').css("left", "90%");

                            $('.post').css("top", "186px");
                            $('.post').css("left", "501px");

                            $('.glass_a').css("top", "70%");
                            $('.glass_a').css("left", "47%");

                            $('.glass_b').css("top", "65%");
                            $('.glass_b').css("left", "69%");

                            $('.total').css("display", "none");
                        }

                    }

                } else if (form.posttype.value == "outer") {
                    if (form.degree.value == "90degre") {
                        if (cornerPosition == "1st Center Post from Left") {

                            $('.left').css("top", "2%");
                            $('.left').css("left", "25%");

                            $('.right').css("top", "4%");
                            $('.right').css("left", "74%");

                            $('.post').css("top", "215px");
                            $('.post').css("left", "15px");

                            $('.glass_a').css("top", "70%");
                            $('.glass_a').css("left", "20%");

                            $('.glass_b').css("top", "75%");
                            $('.glass_b').css("left", "73%");

                            $('.total').css("display", "none");
                        }

                    } else if (form.degree.value == "135degre") {
                        if (cornerPosition == "1st Center Post from Left") {

                            $('.left').css("top", "12%");
                            $('.left').css("left", "16%");

                            $('.right').css("top", "15%");
                            $('.right').css("left", "78%");

                            $('.post').css("top", "201px");
                            $('.post').css("left", "10px");

                            $('.glass_a').css("top", "76%");
                            $('.glass_a').css("left", "23%");

                            $('.glass_b').css("top", "80%");
                            $('.glass_b').css("left", "70%");

                            $('.total').css("display", "none");
                        }

                    }

                }
            }

        } else {
            //for Normal End Panel

            if (gotocornerpostss == '1') {
                if (form.posttype.value == "inner") {
                    if (form.degree.value == "90degre") {
                        if (cornerPosition == "1st Center Post from Left") {

                            $('.glass_a').css("top", "72%");
                            $('.glass_a').css("left", "38%");

                            $('.glass_b').css("top", "73%");
                            $('.glass_b').css("left", "58%");

                            $('.total').css("display", "none");
                        }

                    } else if (form.degree.value == "135degre") {
                        if (cornerPosition == "1st Center Post from Left") {

                            $('.glass_a').css("top", "75%");
                            $('.glass_a').css("left", "49%");

                            $('.glass_b').css("top", "60%");
                            $('.glass_b').css("left", "75%");

                            $('.total').css("display", "none");
                        }

                    }

                } else if (form.posttype.value == "outer") {
                    if (form.degree.value == "90degre") {
                        if (cornerPosition == "1st Center Post from Left") {

                            $('.glass_a').css("top", "68%");
                            $('.glass_a').css("left", "21%");

                            $('.glass_b').css("top", "64%");
                            $('.glass_b').css("left", "81%");

                            $('.total').css("display", "none");
                        }

                    } else if (form.degree.value == "135degre") {
                        if (cornerPosition == "1st Center Post from Left") {

                            $('.glass_a').css("top", "72%");
                            $('.glass_a').css("left", "25%");

                            $('.glass_b').css("top", "65%");
                            $('.glass_b').css("left", "78%");

                            $('.total').css("display", "none");
                        }

                    }

                }
            }

        }

    }
    if (type_obj.value == "3BAY") {

        //For Extended End Panel    
        if (endpanel_type == "Extended") {
            if (gotocornerpostss == '1') {

                if (noofcornerpostval == 2) {
                    //two corner post

                    if (form.posttype.value == "inner") {
                        if (form.degree.value == "90degre") {
                            if (cornerPosition == "1st Center Post from Left") {

                                $('.left').css("top", "79%");
                                $('.left').css("left", "17%");

                                $('.right').css("top", "78%");
                                $('.right').css("left", "80%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "58%");
                                $('.glass_a').css("left", "42%");

                                $('.glass_b').css("top", "50%");
                                $('.glass_b').css("left", "49%");

                                $('.glass_c').css("top", "58%");
                                $('.glass_c').css("left", "56%");

                                $('.total').css("display", "none");
                            }

                        } else if (form.degree.value == "135degre") {
                            if (cornerPosition == "1st Center Post from Left") {

                                $('.left').css("top", "64%");
                                $('.left').css("left", "6%");

                                $('.right').css("top", "62%");
                                $('.right').css("left", "91%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "62%");
                                $('.glass_a').css("left", "35%");

                                $('.glass_b').css("top", "58%");
                                $('.glass_b').css("left", "49%");

                                $('.glass_c').css("top", "62%");
                                $('.glass_c').css("left", "65%");

                                $('.total').css("display", "none");
                            }

                        }

                    } else if (form.posttype.value == "outer") {
                        if (form.degree.value == "90degre") {
                            if (cornerPosition == "1st Center Post from Left") {

                                $('.left').css("top", "0%");
                                $('.left').css("left", "37%");

                                $('.right').css("top", "0%");
                                $('.right').css("left", "60%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "61%");
                                $('.glass_a').css("left", "13%");

                                $('.glass_b').css("top", "93%");
                                $('.glass_b').css("left", "47%");

                                $('.glass_c').css("top", "61%");
                                $('.glass_c').css("left", "84%");

                                $('.total').css("display", "none");
                            }

                        } else if (form.degree.value == "135degre") {
                            if (cornerPosition == "1st Center Post from Left") {

                                $('.left').css("top", "14%");
                                $('.left').css("left", "13%");

                                $('.right').css("top", "12%");
                                $('.right').css("left", "80%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "68%");
                                $('.glass_a').css("left", "14%");

                                $('.glass_b').css("top", "75%");
                                $('.glass_b').css("left", "55%");

                                $('.glass_c').css("top", "61%");
                                $('.glass_c').css("left", "87%");

                                $('.total').css("display", "none");
                            }

                        }

                    }
                } else {

                    //one corner post
                    if (form.posttype.value == "inner") {
                        if (form.degree.value == "90degre") {
                            if (cornerPosition == "1st Center Post from Left") {

                                $('.left').css("top", "49%");
                                $('.left').css("left", "5%");

                                $('.right').css("top", "75%");
                                $('.right').css("left", "88%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "50%");
                                $('.glass_a').css("left", "28%");

                                $('.glass_b').css("top", "52%");
                                $('.glass_b').css("left", "40%");

                                $('.glass_c').css("top", "68%");
                                $('.glass_c').css("left", "56%");

                                $('.total').css("display", "none");
                            } else if (cornerPosition == "2nd Center Post from Left") {

                                $('.left').css("top", "69%");
                                $('.left').css("left", "8%");

                                $('.right').css("top", "46%");
                                $('.right').css("left", "91%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "62%");
                                $('.glass_a').css("left", "41%");

                                $('.glass_b').css("top", "49%");
                                $('.glass_b').css("left", "56%");

                                $('.glass_c').css("top", "47%");
                                $('.glass_c').css("left", "67%");

                                $('.total').css("display", "none");
                            }

                        } else if (form.degree.value == "135degre") {
                            if (cornerPosition == "1st Center Post from Left") {

                                $('.left').css("top", "62%");
                                $('.left').css("left", "7%");

                                $('.right').css("top", "45%");
                                $('.right').css("left", "91%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "61%");
                                $('.glass_a').css("left", "36%");

                                $('.glass_b').css("top", "56%");
                                $('.glass_b').css("left", "51%");

                                $('.glass_c').css("top", "56%");
                                $('.glass_c').css("left", "76%");

                                $('.total').css("display", "none");
                            } else if (cornerPosition == "2nd Center Post from Left") {

                                $('.left').css("top", "79%");
                                $('.left').css("left", "8%");

                                $('.right').css("top", "39%");
                                $('.right').css("left", "92%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "75%");
                                $('.glass_a').css("left", "42%");

                                $('.glass_b').css("top", "57%");
                                $('.glass_b').css("left", "62%");

                                $('.glass_c').css("top", "51%");
                                $('.glass_c').css("left", "79%");

                                $('.total').css("display", "none");
                            }

                        }

                    } else if (form.posttype.value == "outer") {
                        if (form.degree.value == "90degre") {
                            if (cornerPosition == "1st Center Post from Left") {

                                $('.left').css("top", "18%");
                                $('.left').css("left", "18%");

                                $('.right').css("top", "3%");
                                $('.right').css("left", "77%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "81%");
                                $('.glass_a').css("left", "22%");

                                $('.glass_b').css("top", "74%");
                                $('.glass_b').css("left", "68%");

                                $('.glass_c').css("top", "50%");
                                $('.glass_c').css("left", "83%");

                                $('.total').css("display", "none");
                            } else if (cornerPosition == "2nd Center Post from Left") {

                                $('.left').css("top", "8%");
                                $('.left').css("left", "14%");

                                $('.right').css("top", "15%");
                                $('.right').css("left", "79%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "59%");
                                $('.glass_a').css("left", "16%");

                                $('.glass_b').css("top", "75%");
                                $('.glass_b').css("left", "45%");

                                $('.glass_c').css("top", "69%");
                                $('.glass_c').css("left", "88%");

                                $('.total').css("display", "none");

                            }

                        } else if (form.degree.value == "135degre") {
                            if (cornerPosition == "1st Center Post from Left") {

                                $('.left').css("top", "22%");
                                $('.left').css("left", "9%");

                                $('.right').css("top", "10%");
                                $('.right').css("left", "84%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "75%");
                                $('.glass_a').css("left", "20%");

                                $('.glass_b').css("top", "71%");
                                $('.glass_b').css("left", "59%");

                                $('.glass_c').css("top", "60%");
                                $('.glass_c').css("left", "83%");

                                $('.total').css("display", "none");
                            } else if (cornerPosition == "2nd Center Post from Left") {

                                $('.left').css("top", "18%");
                                $('.left').css("left", "8%");

                                $('.right').css("top", "18%");
                                $('.right').css("left", "84%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "66%");
                                $('.glass_a').css("left", "17%");

                                $('.glass_b').css("top", "71%");
                                $('.glass_b').css("left", "46%");

                                $('.glass_c').css("top", "67%");
                                $('.glass_c').css("left", "83%");

                                $('.total').css("display", "none");
                            }

                        }

                    }
                }

            }

        } else {
            //for Normal End Panel        	
            if (gotocornerpostss == '1') {

                if (noofcornerpostval == 2) {
                    //two corner post

                    if (form.posttype.value == "inner") {
                        if (form.degree.value == "90degre") {
                            if (cornerPosition == "1st Center Post from Left") {

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "67%");
                                $('.glass_a').css("left", "40%");

                                $('.glass_b').css("top", "55%");
                                $('.glass_b').css("left", "49%");

                                $('.glass_c').css("top", "67%");
                                $('.glass_c').css("left", "58%");

                                $('.total').css("display", "none");
                            }

                        } else if (form.degree.value == "135degre") {
                            if (cornerPosition == "1st Center Post from Left") {
                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "63%");
                                $('.glass_a').css("left", "32%");

                                $('.glass_b').css("top", "58%");
                                $('.glass_b').css("left", "49%");

                                $('.glass_c').css("top", "62%");
                                $('.glass_c').css("left", "69%");

                                $('.total').css("display", "none");
                            }

                        }

                    } else if (form.posttype.value == "outer") {
                        if (form.degree.value == "90degre") {
                            if (cornerPosition == "1st Center Post from Left") {
                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "60%");
                                $('.glass_a').css("left", "13%");

                                $('.glass_b').css("top", "93%");
                                $('.glass_b').css("left", "48%");

                                $('.glass_c').css("top", "60%");
                                $('.glass_c').css("left", "83%");

                                $('.total').css("display", "none");
                            }

                        } else if (form.degree.value == "135degre") {
                            if (cornerPosition == "1st Center Post from Left") {
                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "68%");
                                $('.glass_a').css("left", "13%");

                                $('.glass_b').css("top", "74%");
                                $('.glass_b').css("left", "54%");

                                $('.glass_c').css("top", "61%");
                                $('.glass_c').css("left", "88%");

                                $('.total').css("display", "none");
                            }

                        }

                    }
                } else {

                    //one corner post

                    if (form.posttype.value == "inner") {
                        if (form.degree.value == "90degre") {
                            if (cornerPosition == "1st Center Post from Left") {

                                $('.glass_a').css("top", "57%");
                                $('.glass_a').css("left", "26%");

                                $('.glass_b').css("top", "57%");
                                $('.glass_b').css("left", "41%");

                                $('.glass_c').css("top", "70%");
                                $('.glass_c').css("left", "63%");

                                $('.total').css("display", "none");
                            } else if (cornerPosition == "2nd Center Post from Left") {

                                $('.glass_a').css("top", "66%");
                                $('.glass_a').css("left", "35%");

                                $('.glass_b').css("top", "52%");
                                $('.glass_b').css("left", "56%");

                                $('.glass_c').css("top", "51%");
                                $('.glass_c').css("left", "71%");

                                $('.total').css("display", "none");
                            }

                        } else if (form.degree.value == "135degre") {
                            if (cornerPosition == "1st Center Post from Left") {

                                $('.glass_a').css("top", "67%");
                                $('.glass_a').css("left", "37%");

                                $('.glass_b').css("top", "55%");
                                $('.glass_b').css("left", "54%");

                                $('.glass_c').css("top", "47%");
                                $('.glass_c').css("left", "81%");

                                $('.total').css("display", "none");
                            } else if (cornerPosition == "2nd Center Post from Left") {

                                $('.glass_a').css("top", "53%");
                                $('.glass_a').css("left", "17%");

                                $('.glass_b').css("top", "61%");
                                $('.glass_b').css("left", "44%");

                                $('.glass_c').css("top", "72%");
                                $('.glass_c').css("left", "63%");

                                $('.total').css("display", "none");
                            }

                        }

                    } else if (form.posttype.value == "outer") {
                        if (form.degree.value == "90degre") {
                            if (cornerPosition == "1st Center Post from Left") {

                                $('.glass_a').css("top", "71%");
                                $('.glass_a').css("left", "19%");

                                $('.glass_b').css("top", "65%");
                                $('.glass_b').css("left", "71%");

                                $('.glass_c').css("top", "44%");
                                $('.glass_c').css("left", "88%");

                                $('.total').css("display", "none");
                            } else if (cornerPosition == "2nd Center Post from Left") {

                                $('.glass_a').css("top", "46%");
                                $('.glass_a').css("left", "13%");

                                $('.glass_b').css("top", "66%");
                                $('.glass_b').css("left", "37%");

                                $('.glass_c').css("top", "65%");
                                $('.glass_c').css("left", "85%");

                                $('.total').css("display", "none");

                            }

                        } else if (form.degree.value == "135degre") {
                            if (cornerPosition == "1st Center Post from Left") {

                                $('.glass_a').css("top", "72%");
                                $('.glass_a').css("left", "18%");

                                $('.glass_b').css("top", "70%");
                                $('.glass_b').css("left", "58%");

                                $('.glass_c').css("top", "61%");
                                $('.glass_c').css("left", "84%");

                                $('.total').css("display", "none");
                            } else if (cornerPosition == "2nd Center Post from Left") {

                                $('.glass_a').css("top", "60%");
                                $('.glass_a').css("left", "16%");

                                $('.glass_b').css("top", "64%");
                                $('.glass_b').css("left", "47%");

                                $('.glass_c').css("top", "59%");
                                $('.glass_c').css("left", "83%");

                                $('.total').css("display", "none");
                            }

                        }

                    }

                }

            }

        }

    }
    if (type_obj.value == "4BAY") {

        //For Extended End Panel    
        if (endpanel_type == "Extended") {

            if (gotocornerpostss == '1') {

                if (noofcornerpostval == 2) {
                    //two corner post
                    if (form.posttype.value == "inner") {
                        if (form.degree.value == "90degre") {
                            if (cornerPosition == "1st Center Post from Left") {

                                $('.left').css("top", "61%");
                                $('.left').css("left", "15%");

                                $('.right').css("top", "94%");
                                $('.right').css("left", "76%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "46%");
                                $('.glass_a').css("left", "38%");

                                $('.glass_b').css("top", "40%");
                                $('.glass_b').css("left", "44%");

                                $('.glass_c').css("top", "46%");
                                $('.glass_c').css("left", "50%");

                                $('.glass_d').css("top", "66%");
                                $('.glass_d').css("left", "49%");

                                $('.total').css("display", "none");
                            } else if (cornerPosition == "2nd Center Post from Left") {

                                $('.left').css("top", "91%");
                                $('.left').css("left", "18%");

                                $('.right').css("top", "57%");
                                $('.right').css("left", "80%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "63%");
                                $('.glass_a').css("left", "46%");

                                $('.glass_b').css("top", "44%");
                                $('.glass_b').css("left", "46%");

                                $('.glass_c').css("top", "38%");
                                $('.glass_c').css("left", "51%");

                                $('.glass_d').css("top", "44%");
                                $('.glass_d').css("left", "58%");

                                $('.total').css("display", "none");
                            }

                        } else if (form.degree.value == "135degre") {
                            if (cornerPosition == "1st Center Post from Left") {

                                $('.left').css("top", "56%");
                                $('.left').css("left", "5%");

                                $('.right').css("top", "66%");
                                $('.right').css("left", "91%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "56%");
                                $('.glass_a').css("left", "27%");

                                $('.glass_b').css("top", "53%");
                                $('.glass_b').css("left", "39%");

                                $('.glass_c').css("top", "56%");
                                $('.glass_c').css("left", "50%");

                                $('.glass_d').css("top", "66%");
                                $('.glass_d').css("left", "67%");

                                $('.total').css("display", "none");
                            } else if (cornerPosition == "2nd Center Post from Left") {

                                $('.left').css("top", "62%");
                                $('.left').css("left", "5%");

                                $('.right').css("top", "57%");
                                $('.right').css("left", "91%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "62%");
                                $('.glass_a').css("left", "29%");

                                $('.glass_b').css("top", "55%");
                                $('.glass_b').css("left", "46%");

                                $('.glass_c').css("top", "52%");
                                $('.glass_c').css("left", "57%");

                                $('.glass_d').css("top", "56%");
                                $('.glass_d').css("left", "70%");

                                $('.total').css("display", "none");
                            }

                        }

                    } else if (form.posttype.value == "outer") {
                        if (form.degree.value == "90degre") {
                            if (cornerPosition == "1st Center Post from Left") {

                                $('.left').css("top", "7%");
                                $('.left').css("left", "37%");

                                $('.right').css("top", "0%");
                                $('.right').css("left", "58%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "65%");
                                $('.glass_a').css("left", "13%");

                                $('.glass_b').css("top", "95%");
                                $('.glass_b').css("left", "48%");

                                $('.glass_c').css("top", "65%");
                                $('.glass_c').css("left", "85%");

                                $('.glass_d').css("top", "44%");
                                $('.glass_d').css("left", "76%");

                                $('.total').css("display", "none");
                            } else if (cornerPosition == "2nd Center Post from Left") {

                                $('.left').css("top", "1%");
                                $('.left').css("left", "39%");

                                $('.right').css("top", "7%");
                                $('.right').css("left", "60%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "44%");
                                $('.glass_a').css("left", "21%");

                                $('.glass_b').css("top", "66%");
                                $('.glass_b').css("left", "13%");

                                $('.glass_c').css("top", "95%");
                                $('.glass_c').css("left", "48%");

                                $('.glass_d').css("top", "66%");
                                $('.glass_d').css("left", "85%");

                                $('.total').css("display", "none");

                            }

                        } else if (form.degree.value == "135degre") {
                            if (cornerPosition == "1st Center Post from Left") {

                                $('.left').css("top", "20%");
                                $('.left').css("left", "11%");

                                $('.right').css("top", "12%");
                                $('.right').css("left", "86%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "68%");
                                $('.glass_a').css("left", "11%");

                                $('.glass_b').css("top", "77%");
                                $('.glass_b').css("left", "43%");

                                $('.glass_c').css("top", "65%");
                                $('.glass_c').css("left", "77%");

                                $('.glass_d').css("top", "53%");
                                $('.glass_d').css("left", "89%");

                                $('.total').css("display", "none");
                            } else if (cornerPosition == "2nd Center Post from Left") {

                                $('.left').css("top", "19%");
                                $('.left').css("left", "11%");

                                $('.right').css("top", "20%");
                                $('.right').css("left", "83%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "59%");
                                $('.glass_a').css("left", "11%");

                                $('.glass_b').css("top", "69%");
                                $('.glass_b').css("left", "29%");

                                $('.glass_c').css("top", "75%");
                                $('.glass_c').css("left", "65%");

                                $('.glass_d').css("top", "63%");
                                $('.glass_d').css("left", "90%");

                                $('.total').css("display", "none");
                            }

                        }

                    }

                } else {
                    //one corner post

                    if (form.posttype.value == "inner") {
                        if (form.degree.value == "90degre") {
                            if (cornerPosition == "1st Center Post from Left") {

                                $('.left').css("top", "49%");
                                $('.left').css("left", "6%");

                                $('.right').css("top", "75%");
                                $('.right').css("left", "87%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "48%");
                                $('.glass_a').css("left", "24%");

                                $('.glass_b').css("top", "48%");
                                $('.glass_b').css("left", "33%");

                                $('.glass_c').css("top", "58%");
                                $('.glass_c').css("left", "45%");

                                $('.glass_d').css("top", "71%");
                                $('.glass_d').css("left", "61%");

                                $('.total').css("display", "none");
                            } else if (cornerPosition == "2nd Center Post from Left") {

                                $('.left').css("top", "61%");
                                $('.left').css("left", "6%");

                                $('.right').css("top", "62%");
                                $('.right').css("left", "88%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "59%");
                                $('.glass_a').css("left", "29%");

                                $('.glass_b').css("top", "50%");
                                $('.glass_b').css("left", "43%");

                                $('.glass_c').css("top", "51%");
                                $('.glass_c').css("left", "52%");

                                $('.glass_d').css("top", "59%");
                                $('.glass_d').css("left", "65%");

                                $('.total').css("display", "none");
                            } else if (cornerPosition == "3rd Center Post from Left") {

                                $('.left').css("top", "76%");
                                $('.left').css("left", "7%");

                                $('.right').css("top", "41%");
                                $('.right').css("left", "93%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "69%");
                                $('.glass_a').css("left", "38%");

                                $('.glass_b').css("top", "53%");
                                $('.glass_b').css("left", "55%");

                                $('.glass_c').css("top", "42%");
                                $('.glass_c').css("left", "66%");

                                $('.glass_d').css("top", "42%");
                                $('.glass_d').css("left", "75%");

                                $('.total').css("display", "none");
                            }
                        } else if (form.degree.value == "135degre") {
                            if (cornerPosition == "1st Center Post from Left") {

                                $('.left').css("top", "65%");
                                $('.left').css("left", "6%");

                                $('.right').css("top", "46%");
                                $('.right').css("left", "92%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "62%");
                                $('.glass_a').css("left", "28%");

                                $('.glass_b').css("top", "59%");
                                $('.glass_b').css("left", "41%");

                                $('.glass_c').css("top", "58%");
                                $('.glass_c').css("left", "60%");

                                $('.glass_d').css("top", "57%");
                                $('.glass_d').css("left", "81%");

                                $('.total').css("display", "none");
                            } else if (cornerPosition == "2nd Center Post from Left") {

                                $('.left').css("top", "65%");
                                $('.left').css("left", "6%");

                                $('.right').css("top", "33%");
                                $('.right').css("left", "92%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "61%");
                                $('.glass_a').css("left", "33%");

                                $('.glass_b').css("top", "49%");
                                $('.glass_b').css("left", "48%");

                                $('.glass_c').css("top", "45%");
                                $('.glass_c').css("left", "62%");

                                $('.glass_d').css("top", "44%");
                                $('.glass_d').css("left", "81%");

                                $('.total').css("display", "none");
                            } else if (cornerPosition == "3rd Center Post from Left") {

                                $('.left').css("top", "76%");
                                $('.left').css("left", "9%");

                                $('.right').css("top", "28%");
                                $('.right').css("left", "92%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "70%");
                                $('.glass_a').css("left", "39%");

                                $('.glass_b').css("top", "54%");
                                $('.glass_b').css("left", "57%");

                                $('.glass_c').css("top", "42%");
                                $('.glass_c').css("left", "71%");

                                $('.glass_d').css("top", "38%");
                                $('.glass_d').css("left", "83%");

                                $('.total').css("display", "none");
                            }
                        }

                    } else if (form.posttype.value == "outer") {
                        if (form.degree.value == "90degre") {
                            if (cornerPosition == "1st Center Post from Left") {

                                $('.left').css("top", "26%");
                                $('.left').css("left", "15%");

                                $('.right').css("top", "0%");
                                $('.right').css("left", "81%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "83%");
                                $('.glass_a').css("left", "19%");

                                $('.glass_b').css("top", "75%");
                                $('.glass_b').css("left", "61%");

                                $('.glass_c').css("top", "53%");
                                $('.glass_c').css("left", "75%");

                                $('.glass_d').css("top", "37%");
                                $('.glass_d').css("left", "86%");

                                $('.total').css("display", "none");
                            } else if (cornerPosition == "2nd Center Post from Left") {

                                $('.left').css("top", "13%");
                                $('.left').css("left", "13%");

                                $('.right').css("top", "17%");
                                $('.right').css("left", "84%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "54%");
                                $('.glass_a').css("left", "9%");

                                $('.glass_b').css("top", "72%");
                                $('.glass_b').css("left", "24%");

                                $('.glass_c').css("top", "74%");
                                $('.glass_c').css("left", "62%");

                                $('.glass_d').css("top", "59%");
                                $('.glass_d').css("left", "84%");

                                $('.total').css("display", "none");

                            } else if (cornerPosition == "3rd Center Post from Left") {

                                $('.left').css("top", "6%");
                                $('.left').css("left", "16%");

                                $('.right').css("top", "25%");
                                $('.right').css("left", "79%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "40%");
                                $('.glass_a').css("left", "11%");

                                $('.glass_b').css("top", "54%");
                                $('.glass_b').css("left", "23%");

                                $('.glass_c').css("top", "72%");
                                $('.glass_c').css("left", "39%");

                                $('.glass_d').css("top", "76%");
                                $('.glass_d').css("left", "77%");

                                $('.total').css("display", "none");
                            }
                        } else if (form.degree.value == "135degre") {
                            if (cornerPosition == "1st Center Post from Left") {

                                $('.left').css("top", "23%");
                                $('.left').css("left", "7%");

                                $('.right').css("top", "14%");
                                $('.right').css("left", "89%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "66%");
                                $('.glass_a').css("left", "14%");

                                $('.glass_b').css("top", "65%");
                                $('.glass_b').css("left", "45%");

                                $('.glass_c').css("top", "59%");
                                $('.glass_c').css("left", "66%");

                                $('.glass_d').css("top", "52%");
                                $('.glass_d').css("left", "86%");

                                $('.total').css("display", "none");
                            } else if (cornerPosition == "2nd Center Post from Left") {

                                $('.left').css("top", "22%");
                                $('.left').css("left", "7%");

                                $('.right').css("top", "18%");
                                $('.right').css("left", "86%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "62%");
                                $('.glass_a').css("left", "14%");

                                $('.glass_b').css("top", "64%");
                                $('.glass_b').css("left", "39%");

                                $('.glass_c').css("top", "61%");
                                $('.glass_c').css("left", "69%");

                                $('.glass_d').css("top", "54%");
                                $('.glass_d').css("left", "86%");

                                $('.total').css("display", "none");
                            } else if (cornerPosition == "3rd Center Post from Left") {

                                $('.left').css("top", "26%");
                                $('.left').css("left", "5%");

                                $('.right').css("top", "23%");
                                $('.right').css("left", "86%");

                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "64%");
                                $('.glass_a').css("left", "14%");

                                $('.glass_b').css("top", "65%");
                                $('.glass_b').css("left", "36%");

                                $('.glass_c').css("top", "67%");
                                $('.glass_c').css("left", "61%");

                                $('.glass_d').css("top", "62%");
                                $('.glass_d').css("left", "87%");

                                $('.total').css("display", "none");
                            }
                        }

                    }
                }

            }

        } else {
            //for Normal End Panel        	
            if (gotocornerpostss == '1') {

                if (noofcornerpostval == 2) {
                    //two corner post
                    if (form.posttype.value == "inner") {
                        if (form.degree.value == "90degre") {
                            if (cornerPosition == "1st Center Post from Left") {
                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "47%");
                                $('.glass_a').css("left", "37%");

                                $('.glass_b').css("top", "41%");
                                $('.glass_b').css("left", "44%");

                                $('.glass_c').css("top", "47%");
                                $('.glass_c').css("left", "50%");

                                $('.glass_d').css("top", "72%");
                                $('.glass_d').css("left", "50%");

                                $('.total').css("display", "none");
                            } else if (cornerPosition == "2nd Center Post from Left") {
                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "69%");
                                $('.glass_a').css("left", "46%");

                                $('.glass_b').css("top", "46%");
                                $('.glass_b').css("left", "46%");

                                $('.glass_c').css("top", "39%");
                                $('.glass_c').css("left", "52%");

                                $('.glass_d').css("top", "46%");
                                $('.glass_d').css("left", "59%");

                                $('.total').css("display", "none");
                            }

                        } else if (form.degree.value == "135degre") {
                            if (cornerPosition == "1st Center Post from Left") {
                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "57%");
                                $('.glass_a').css("left", "22%");

                                $('.glass_b').css("top", "54%");
                                $('.glass_b').css("left", "36%");

                                $('.glass_c').css("top", "57%");
                                $('.glass_c').css("left", "50%");

                                $('.glass_d').css("top", "66%");
                                $('.glass_d').css("left", "69%");

                                $('.total').css("display", "none");
                            } else if (cornerPosition == "2nd Center Post from Left") {
                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "66%");
                                $('.glass_a').css("left", "24%");

                                $('.glass_b').css("top", "57%");
                                $('.glass_b').css("left", "45%");

                                $('.glass_c').css("top", "53%");
                                $('.glass_c').css("left", "59%");

                                $('.glass_d').css("top", "58%");
                                $('.glass_d').css("left", "75%");

                                $('.total').css("display", "none");
                            }

                        }

                    } else if (form.posttype.value == "outer") {
                        if (form.degree.value == "90degre") {
                            if (cornerPosition == "1st Center Post from Left") {
                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "64%");
                                $('.glass_a').css("left", "15%");

                                $('.glass_b').css("top", "95%");
                                $('.glass_b').css("left", "48%");

                                $('.glass_c').css("top", "66%");
                                $('.glass_c').css("left", "85%");

                                $('.glass_d').css("top", "44%");
                                $('.glass_d').css("left", "76%");

                                $('.total').css("display", "none");
                            } else if (cornerPosition == "2nd Center Post from Left") {
                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "44%");
                                $('.glass_a').css("left", "21%");

                                $('.glass_b').css("top", "65%");
                                $('.glass_b').css("left", "13%");

                                $('.glass_c').css("top", "95%");
                                $('.glass_c').css("left", "48%");

                                $('.glass_d').css("top", "65%");
                                $('.glass_d').css("left", "85%");

                                $('.total').css("display", "none");

                            }

                        } else if (form.degree.value == "135degre") {
                            if (cornerPosition == "1st Center Post from Left") {
                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "67%");
                                $('.glass_a').css("left", "10%");

                                $('.glass_b').css("top", "77%");
                                $('.glass_b').css("left", "43%");

                                $('.glass_c').css("top", "65%");
                                $('.glass_c').css("left", "77%");

                                $('.glass_d').css("top", "53%");
                                $('.glass_d').css("left", "89%");

                                $('.total').css("display", "none");
                            } else if (cornerPosition == "2nd Center Post from Left") {
                                $('.post').css("display", "none");

                                $('.glass_a').css("top", "59%");
                                $('.glass_a').css("left", "11%");

                                $('.glass_b').css("top", "69%");
                                $('.glass_b').css("left", "28%");

                                $('.glass_c').css("top", "75%");
                                $('.glass_c').css("left", "64%");

                                $('.glass_d').css("top", "63%");
                                $('.glass_d').css("left", "89%");

                                $('.total').css("display", "none");
                            }

                        }

                    }

                } else {
                    //one corner post

                    if (form.posttype.value == "inner") {
                        if (form.degree.value == "90degre") {
                            if (cornerPosition == "1st Center Post from Left") {

                                $('.glass_a').css("top", "45%");
                                $('.glass_a').css("left", "22%");

                                $('.glass_b').css("top", "45%");
                                $('.glass_b').css("left", "32%");

                                $('.glass_c').css("top", "54%");
                                $('.glass_c').css("left", "48%");

                                $('.glass_d').css("top", "67%");
                                $('.glass_d').css("left", "71%");

                                $('.total').css("display", "none");
                            } else if (cornerPosition == "2nd Center Post from Left") {

                                $('.glass_a').css("top", "60%");
                                $('.glass_a').css("left", "28%");

                                $('.glass_b').css("top", "50%");
                                $('.glass_b').css("left", "44%");

                                $('.glass_c').css("top", "50%");
                                $('.glass_c').css("left", "55%");

                                $('.glass_d').css("top", "60%");
                                $('.glass_d').css("left", "73%");

                                $('.total').css("display", "none");
                            } else if (cornerPosition == "3rd Center Post from Left") {

                                $('.glass_a').css("top", "68%");
                                $('.glass_a').css("left", "28%");

                                $('.glass_b').css("top", "55%");
                                $('.glass_b').css("left", "52%");

                                $('.glass_c').css("top", "46%");
                                $('.glass_c').css("left", "67%");

                                $('.glass_d').css("top", "47%");
                                $('.glass_d').css("left", "78%");

                                $('.total').css("display", "none");
                            }
                        } else if (form.degree.value == "135degre") {
                            if (cornerPosition == "1st Center Post from Left") {

                                $('.glass_a').css("top", "62%");
                                $('.glass_a').css("left", "28%");

                                $('.glass_b').css("top", "56%");
                                $('.glass_b').css("left", "42%");

                                $('.glass_c').css("top", "51%");
                                $('.glass_c').css("left", "64%");

                                $('.glass_d').css("top", "46%");
                                $('.glass_d').css("left", "85%");

                                $('.total').css("display", "none");
                            } else if (cornerPosition == "2nd Center Post from Left") {

                                $('.glass_a').css("top", "66%");
                                $('.glass_a').css("left", "33%");

                                $('.glass_b').css("top", "50%");
                                $('.glass_b').css("left", "50%");

                                $('.glass_c').css("top", "43%");
                                $('.glass_c').css("left", "63%");

                                $('.glass_d').css("top", "40%");
                                $('.glass_d').css("left", "85%");

                                $('.total').css("display", "none");
                            } else if (cornerPosition == "3rd Center Post from Left") {

                                $('.glass_a').css("top", "70%");
                                $('.glass_a').css("left", "36%");

                                $('.glass_b').css("top", "53%");
                                $('.glass_b').css("left", "58%");

                                $('.glass_c').css("top", "43%");
                                $('.glass_c').css("left", "73%");

                                $('.glass_d').css("top", "40%");
                                $('.glass_d').css("left", "86%");

                                $('.total').css("display", "none");
                            }
                        }

                    } else if (form.posttype.value == "outer") {
                        if (form.degree.value == "90degre") {
                            if (cornerPosition == "1st Center Post from Left") {

                                $('.glass_a').css("top", "80%");
                                $('.glass_a').css("left", "18%");

                                $('.glass_b').css("top", "73%");
                                $('.glass_b').css("left", "63%");

                                $('.glass_c').css("top", "50%");
                                $('.glass_c').css("left", "79%");

                                $('.glass_d').css("top", "32%");
                                $('.glass_d').css("left", "90%");

                                $('.total').css("display", "none");
                            } else if (cornerPosition == "2nd Center Post from Left") {

                                $('.glass_a').css("top", "54%");
                                $('.glass_a').css("left", "10%");

                                $('.glass_b').css("top", "72%");
                                $('.glass_b').css("left", "25%");

                                $('.glass_c').css("top", "75%");
                                $('.glass_c').css("left", "63%");

                                $('.glass_d').css("top", "60%");
                                $('.glass_d').css("left", "86%");

                                $('.total').css("display", "none");

                            } else if (cornerPosition == "3rd Center Post from Left") {

                                $('.glass_a').css("top", "39%");
                                $('.glass_a').css("left", "9%");

                                $('.glass_b').css("top", "54%");
                                $('.glass_b').css("left", "20%");

                                $('.glass_c').css("top", "75%");
                                $('.glass_c').css("left", "38%");

                                $('.glass_d').css("top", "80%");
                                $('.glass_d').css("left", "82%");

                                $('.total').css("display", "none");
                            }
                        } else if (form.degree.value == "135degre") {
                            if (cornerPosition == "1st Center Post from Left") {

                                $('.glass_a').css("top", "66%");
                                $('.glass_a').css("left", "15%");

                                $('.glass_b').css("top", "65%");
                                $('.glass_b').css("left", "46%");

                                $('.glass_c').css("top", "58%");
                                $('.glass_c').css("left", "67%");

                                $('.glass_d').css("top", "52%");
                                $('.glass_d').css("left", "86%");

                                $('.total').css("display", "none");
                            } else if (cornerPosition == "2nd Center Post from Left") {

                                $('.glass_a').css("top", "62%");
                                $('.glass_a').css("left", "15%");

                                $('.glass_b').css("top", "64%");
                                $('.glass_b').css("left", "41%");

                                $('.glass_c').css("top", "61%");
                                $('.glass_c').css("left", "70%");

                                $('.glass_d').css("top", "54%");
                                $('.glass_d').css("left", "88%");

                                $('.total').css("display", "none");
                            } else if (cornerPosition == "3rd Center Post from Left") {

                                $('.glass_a').css("top", "64%");
                                $('.glass_a').css("left", "15%");

                                $('.glass_b').css("top", "65%");
                                $('.glass_b').css("left", "38%");

                                $('.glass_c').css("top", "67%");
                                $('.glass_c').css("left", "62%");

                                $('.glass_d').css("top", "61%");
                                $('.glass_d').css("left", "88%");

                                $('.total').css("display", "none");
                            }
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
    document.getElementById("total").innerHTML = "$&nbsp;" + totalPrice;
    document.getElementById("make-adjustable").innerHTML = adjust_price + ".00";

    // if(category_name=="EP5"){
    document.getElementById("flange-cover").innerHTML = flangeCoversPrice + ".00";
    //document.getElementById("flange-under-counter").innerHTML=flangeUnderCounterPrice+".00"; 

    if (roasted_glass_obj.value == "yes") {
        document.getElementById("roasted-glass").innerHTML = roastedglassprice * 2;
    } else {
        document.getElementById("roasted-glass").innerHTML = roastedglassprice + ".00";
    }
    document.getElementById("lightbar").innerHTML = flangeCoversPrice2 + ".00";
    // }
    // if(category_name!="EP36"){
    if (glass_face_obj.value == 1) {
        document.getElementById("left-Panel").innerHTML = (leftEndPanelPrice) + ".00";
        document.getElementById("right-panel").innerHTML = (rightEndPanelPrice) + ".00";
    }
    if (glass_face_obj.value == 2) {
        document.getElementById("left-Panel").innerHTML = "0.00";
        document.getElementById("right-panel").innerHTML = rightEndPanelPrice + ".00";
    }
    if (glass_face_obj.value == 3) {
        document.getElementById("left-Panel").innerHTML = leftEndPanelPrice + ".00";
        document.getElementById("right-panel").innerHTML = "0.00";
    }
    if (glass_face_obj.value == 4) {
        document.getElementById("left-Panel").innerHTML = "0.00";
        document.getElementById("right-panel").innerHTML = "0.00";
    }

    //  }
    // right_lenght_obj=form.right_length;
    // left_lenght_obj=form.left_length;
    // post_height_obj=form.post_height;
    // face_lenght_obj=form.face_length;
    // face_lenght_a_obj=form.face_length_a;
    // face_lenght_b_obj=form.face_length_b;
    // face_lenght_c_obj=form.face_length_c;
    //         face_lenght_d_obj=form.face_length_d;       
    // type_obj=form.type;

    // //alert(form.glass_face.name);
    // glass_face_obj=form.glass_face;
    // corner_obj=form.rounded_corners;
    // flange_covers_obj=form.flange_covers;
    // flange_covers2_obj=form.light_bar;
    // roasted_glass_obj=form.roasted_glass;
    // choose_finish_obj=form.choose_finish;

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
    /* if(post_height_obj.value=="select"){
         $("#post_err").attr("src","img/iconCheckOff.gif");
         three=false;
     }
     else{
         $("#post_err").attr("src","img/iconCheckOn.gif");
         three=true;
     }*/
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
        if (face_lenght_a_obj != null && face_lenght_a_obj.value == "select") {
            $("#glass_a_err").attr("src", "img/iconCheckOff.gif");
            four = false;
        } else {
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            four = true;
        }
        if (face_lenght_b_obj != null && face_lenght_b_obj.value == "select") {
            $("#glass_b_err").attr("src", "img/iconCheckOff.gif");
            four = false;
        } else {
            $("#glass_b_err").attr("src", "img/iconCheckOn.gif");
            four = true;
        }
        if (one && two && three && four) {
            //$("#froast").css("display","");
        } else {
            //$("#froast").css("display","none");
        }
    } else if (type_obj.value == "3BAY") {
        if (face_lenght_a_obj != null && face_lenght_a_obj.value == "select") {
            $("#glass_a_err").attr("src", "img/iconCheckOff.gif");
            four = false;
        } else {
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            four = true;
        }
        if (face_lenght_b_obj != null && face_lenght_b_obj.value == "select") {
            $("#glass_b_err").attr("src", "img/iconCheckOff.gif");
            four = false;
        } else {
            $("#glass_b_err").attr("src", "img/iconCheckOn.gif");
            four = true;
        }
        if (face_lenght_c_obj != null && face_lenght_c_obj.value == "select") {
            $("#glass_c_err").attr("src", "img/iconCheckOff.gif");
            four = false;
        } else {
            $("#glass_c_err").attr("src", "img/iconCheckOn.gif");
            four = true;
        }
        if (one && two && three && four) {
            //$("#froast").css("display","");
        } else {
            //$("#froast").css("display","none");
        }
    } else if (type_obj.value == "4BAY") {
        if (face_lenght_a_obj != null && face_lenght_a_obj.value == "select") {
            $("#glass_a_err").attr("src", "img/iconCheckOff.gif");
            four = false;
        } else {
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            four = true;
        }
        if (face_lenght_b_obj != null && face_lenght_b_obj.value == "select") {
            $("#glass_b_err").attr("src", "img/iconCheckOff.gif");
            four = false;
        } else {
            $("#glass_b_err").attr("src", "img/iconCheckOn.gif");
            four = true;
        }
        if (face_lenght_c_obj != null && face_lenght_c_obj.value == "select") {
            $("#glass_c_err").attr("src", "img/iconCheckOff.gif");
            four = false;
        } else {
            $("#glass_c_err").attr("src", "img/iconCheckOn.gif");
            four = true;
        }
        if (face_lenght_d_obj != null && face_lenght_d_obj.value == "select") {
            $("#glass_d_err").attr("src", "img/iconCheckOff.gif");
            four = false;
        } else {
            $("#glass_d_err").attr("src", "img/iconCheckOn.gif");
            four = true;
        }
        if (one && two && three && four) {
            //$("#froast").css("display","");
        } else {
            //$("#froast").css("display","none");
        }
    }

    if (type_obj.value == "2BAY" || type_obj.value == "3BAY" || type_obj.value == "4BAY") {
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
    if (corner_obj.value == "select") {
        $("#round_err").attr("src", "img/iconCheckOff.gif");
        seven = false;
    } else {
        $("#round_err").attr("src", "img/iconCheckOn.gif");
        seven = true;
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
    if (type_obj.value == "1BAY") {
        if (glass_face_obj.value == 1) {
            if (face_lenght_obj.value == "No Glass" || left_lenght_obj.value == "No Glass" || right_lenght_obj.value == "No Glass") {
                $("#light_err").attr("src", "img/iconCheckOn.gif");
                $("#round_err").attr("src", "img/iconCheckOn.gif");
                if (form.adjustable.value == "no") {
                    corner_obj.value = "select";
                } else {
                    corner_obj.value = "round";
                }
                corner_obj.disabled = true;
            } else {
                if (form.adjustable.value == "no") {
                    corner_obj.disabled = false;
                }
                if (corner_obj.value == "select") {
                    $("#round_err").attr("src", "img/iconCheckOff.gif");
                } else {
                    $("#round_err").attr("src", "img/iconCheckOn.gif");
                }
            }
        } else if (glass_face_obj.value == 2) {
            if (face_lenght_obj.value == "No Glass" || right_lenght_obj.value == "No Glass") {
                $("#light_err").attr("src", "img/iconCheckOn.gif");
                $("#round_err").attr("src", "img/iconCheckOn.gif");
                if (form.adjustable.value == "no") {
                    corner_obj.value = "select";
                } else {
                    corner_obj.value = "round";
                }
                corner_obj.disabled = true;
            } else {
                if (form.adjustable.value == "no") {
                    corner_obj.disabled = false;
                }
                if (corner_obj.value == "select") {
                    $("#round_err").attr("src", "img/iconCheckOff.gif");
                } else {
                    $("#round_err").attr("src", "img/iconCheckOn.gif");
                }
            }
        } else if (glass_face_obj.value == 3) {
            if (face_lenght_obj.value == "No Glass" || left_lenght_obj.value == "No Glass") {
                $("#light_err").attr("src", "img/iconCheckOn.gif");
                $("#round_err").attr("src", "img/iconCheckOn.gif");
                if (form.adjustable.value == "no") {
                    corner_obj.value = "select";
                } else {
                    corner_obj.value = "round";
                }
                corner_obj.disabled = true;
            } else {
                if (form.adjustable.value == "no") {
                    corner_obj.disabled = false;
                }
                if (corner_obj.value == "select") {
                    $("#round_err").attr("src", "img/iconCheckOff.gif");
                } else {
                    $("#round_err").attr("src", "img/iconCheckOn.gif");
                }
            }
        } else if (glass_face_obj.value == 4) {
            if (face_lenght_obj.value == "No Glass") {
                $("#light_err").attr("src", "img/iconCheckOn.gif");
                $("#round_err").attr("src", "img/iconCheckOn.gif");
                if (form.adjustable.value == "no") {
                    corner_obj.value = "select";
                } else {
                    corner_obj.value = "round";
                }
                corner_obj.disabled = true;
            } else {
                if (form.adjustable.value == "no") {
                    corner_obj.disabled = false;
                }
                if (corner_obj.value == "select") {
                    $("#round_err").attr("src", "img/iconCheckOff.gif");
                } else {
                    $("#round_err").attr("src", "img/iconCheckOn.gif");
                }
            }
        }

    }
    if (type_obj.value == "2BAY") {
        if (glass_face_obj.value == 1) {
            if (face_lenght_a_obj.value == "No Glass" || face_lenght_b_obj.value == "No Glass" || left_lenght_obj.value == "No Glass" || right_lenght_obj.value == "No Glass") {
                $("#light_err").attr("src", "img/iconCheckOn.gif");
                if (form.adjustable.value == "no") {
                    corner_obj.value = "select";
                } else {
                    corner_obj.value = "round";
                }
                corner_obj.disabled = true;
                $("#round_err").attr("src", "img/iconCheckOn.gif");
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
        } else if (glass_face_obj.value == 2) {
            if (face_lenght_a_obj.value == "No Glass" || face_lenght_b_obj.value == "No Glass" || right_lenght_obj.value == "No Glass") {
                $("#light_err").attr("src", "img/iconCheckOn.gif");
                if (form.adjustable.value == "no") {
                    corner_obj.value = "select";
                } else {
                    corner_obj.value = "round";
                }
                corner_obj.disabled = true;
                $("#round_err").attr("src", "img/iconCheckOn.gif");
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
        } else if (glass_face_obj.value == 3) {
            if (face_lenght_a_obj.value == "No Glass" || face_lenght_b_obj.value == "No Glass" || left_lenght_obj.value == "No Glass") {
                $("#light_err").attr("src", "img/iconCheckOn.gif");
                if (form.adjustable.value == "no") {
                    corner_obj.value = "select";
                } else {
                    corner_obj.value = "round";
                }
                corner_obj.disabled = true;
                $("#round_err").attr("src", "img/iconCheckOn.gif");
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
        } else if (glass_face_obj.value == 4) {
            if (face_lenght_a_obj.value == "No Glass" || face_lenght_b_obj.value == "No Glass") {
                $("#light_err").attr("src", "img/iconCheckOn.gif");
                if (form.adjustable.value == "no") {
                    corner_obj.value = "select";
                } else {
                    corner_obj.value = "round";
                }
                corner_obj.disabled = true;
                $("#round_err").attr("src", "img/iconCheckOn.gif");
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

    }
    if (type_obj.value == "3BAY") {
        if (glass_face_obj.value == 1) {
            if (face_lenght_a_obj.value == "No Glass" || face_lenght_b_obj.value == "No Glass" || face_lenght_c_obj.value == "No Glass" || left_lenght_obj.value == "No Glass" || right_lenght_obj.value == "No Glass") {
                four = true;
                six = true;
                $("#light_err").attr("src", "img/iconCheckOn.gif");
                if (form.adjustable.value == "no") {
                    corner_obj.value = "select";
                } else {
                    corner_obj.value = "round";
                }
                corner_obj.disabled = true;
                $("#round_err").attr("src", "img/iconCheckOn.gif");
                seven = true;
                two = true;
                one = true;
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
        } else if (glass_face_obj.value == 2) {
            if (face_lenght_a_obj.value == "No Glass" || face_lenght_b_obj.value == "No Glass" || face_lenght_c_obj.value == "No Glass" || right_lenght_obj.value == "No Glass") {
                four = true;
                six = true;
                $("#light_err").attr("src", "img/iconCheckOn.gif");
                if (form.adjustable.value == "no") {
                    corner_obj.value = "select";
                } else {
                    corner_obj.value = "round";
                }
                corner_obj.disabled = true;
                $("#round_err").attr("src", "img/iconCheckOn.gif");
                seven = true;
                two = true;
                one = true;
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
        } else if (glass_face_obj.value == 3) {
            if (face_lenght_a_obj.value == "No Glass" || face_lenght_b_obj.value == "No Glass" || face_lenght_c_obj.value == "No Glass" || left_lenght_obj.value == "No Glass") {
                four = true;
                six = true;
                $("#light_err").attr("src", "img/iconCheckOn.gif");
                if (form.adjustable.value == "no") {
                    corner_obj.value = "select";
                } else {
                    corner_obj.value = "round";
                }
                corner_obj.disabled = true;
                $("#round_err").attr("src", "img/iconCheckOn.gif");
                seven = true;
                two = true;
                one = true;
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
        } else if (glass_face_obj.value == 4) {
            if (face_lenght_a_obj.value == "No Glass" || face_lenght_b_obj.value == "No Glass" || face_lenght_c_obj.value == "No Glass") {
                four = true;
                six = true;
                $("#light_err").attr("src", "img/iconCheckOn.gif");
                if (form.adjustable.value == "no") {
                    corner_obj.value = "select";
                } else {
                    corner_obj.value = "round";
                }
                corner_obj.disabled = true;
                $("#round_err").attr("src", "img/iconCheckOn.gif");
                seven = true;
                two = true;
                one = true;
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

    }
    if (type_obj.value == "4BAY") {
        if (glass_face_obj.value == 1) {
            if (face_lenght_a_obj.value == "No Glass" || face_lenght_b_obj.value == "No Glass" || face_lenght_c_obj.value == "No Glass" || face_lenght_d_obj.value == "No Glass" || left_lenght_obj.value == "No Glass" || right_lenght_obj.value == "No Glass") {
                four = true;
                six = true;
                $("#light_err").attr("src", "img/iconCheckOn.gif");
                if (form.adjustable.value == "no") {
                    corner_obj.value = "select";
                } else {
                    corner_obj.value = "round";
                }
                corner_obj.disabled = true;
                $("#round_err").attr("src", "img/iconCheckOn.gif");
                seven = true;
                two = true;
                one = true;
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
        } else if (glass_face_obj.value == 2) {
            if (face_lenght_a_obj.value == "No Glass" || face_lenght_b_obj.value == "No Glass" || face_lenght_c_obj.value == "No Glass" || face_lenght_d_obj.value == "No Glass" || right_lenght_obj.value == "No Glass") {
                four = true;
                six = true;
                $("#light_err").attr("src", "img/iconCheckOn.gif");
                if (form.adjustable.value == "no") {
                    corner_obj.value = "select";
                } else {
                    corner_obj.value = "round";
                }
                corner_obj.disabled = true;
                $("#round_err").attr("src", "img/iconCheckOn.gif");
                seven = true;
                two = true;
                one = true;
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
        } else if (glass_face_obj.value == 3) {
            if (face_lenght_a_obj.value == "No Glass" || face_lenght_b_obj.value == "No Glass" || face_lenght_c_obj.value == "No Glass" || face_lenght_d_obj.value == "No Glass" || left_lenght_obj.value == "No Glass") {
                four = true;
                six = true;
                $("#light_err").attr("src", "img/iconCheckOn.gif");
                if (form.adjustable.value == "no") {
                    corner_obj.value = "select";
                } else {
                    corner_obj.value = "round";
                }
                corner_obj.disabled = true;
                $("#round_err").attr("src", "img/iconCheckOn.gif");
                seven = true;
                two = true;
                one = true;
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
        } else if (glass_face_obj.value == 4) {
            if (face_lenght_a_obj.value == "No Glass" || face_lenght_b_obj.value == "No Glass" || face_lenght_c_obj.value == "No Glass" || face_lenght_d_obj.value == "No Glass") {
                four = true;
                six = true;
                $("#light_err").attr("src", "img/iconCheckOn.gif");
                if (form.adjustable.value == "no") {
                    corner_obj.value = "select";
                } else {
                    corner_obj.value = "round";
                }
                corner_obj.disabled = true;
                $("#round_err").attr("src", "img/iconCheckOn.gif");
                seven = true;
                two = true;
                one = true;
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

    }
    if (zero && one && two && three && four && five && six && seven && eight) {
        //$("#add").removeAttr("disabled");
        //$("#add").css("opacity","1");
    } else {
        //$("#add").css("opacity","0.3");
    }

}

function getProductFolderName(productname) {
    foldername = "";
    switch (productname) {
        case 'EP36':
            {
                foldername = "EP-36"; //getting the resource images from the perticular folder
                break;
            }

    }
    return foldername;
}

function nogl(form, el, val) {
    var valcheck = document.getElementById('checkformorethan42').checked
        //var valcheck=$('#checkformorethan42').val();
        //alert(valcheck);

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
                            } // Making the first option selected!!
                    }
                }
            });
        }
    }

    if (form.type.value == "1BAY") {
        if (val == "No Glass" || val == 'No Glass"') {
            form.face_length.value = "No Glass";
            //form.right_length.value = "No Glass";
            //form.left_length.value = "No Glass";
            getPriceOfProduct(document.forms['cart_quantity']);
        } else {
            if ($("input#glass-face").val() == 1) {

            } else if ($("input#glass-face").val() == 2) {
                //form.right_length.value="select";
                form.left_length.value = "select";
            } else if ($("input#glass-face").val() == 3) {
                form.right_length.value = "select";
                //form.left_length.value="select";    
            } else if ($("input#glass-face").val() == 4) {
                form.right_length.value = "select";
                form.left_length.value = "select";
            }

            getPriceOfProduct(document.forms['cart_quantity']);

        }
    }
    if (form.type.value == "2BAY") {
        if (val == "No Glass" || val == 'No Glass"') {
            form.face_length_a.value = "No Glass";
            form.face_length_b.value = "No Glass";
            //form.right_length.value = "No Glass";
            //form.left_length.value = "No Glass";
            getPriceOfProduct(document.forms['cart_quantity']);
        } else {
            if (form.face_length_a.value != "No Glass" && form.face_length_b.value != "No Glass") {
                if ($("input#glass-face").val() == 1) {

                } else if ($("input#glass-face").val() == 2) {
                    //form.right_length.value="select";
                    form.left_length.value = "select";
                } else if ($("input#glass-face").val() == 3) {
                    form.right_length.value = "select";
                    //form.left_length.value="select";    
                } else if ($("input#glass-face").val() == 4) {
                    form.right_length.value = "select";
                    form.left_length.value = "select";
                }
                getPriceOfProduct(document.forms['cart_quantity']);
            }
        }
    }
    if (form.type.value == "3BAY") {
        if (val == "No Glass" || val == 'No Glass"') {
            form.face_length_a.value = "No Glass";
            form.face_length_b.value = "No Glass";
            form.face_length_c.value = "No Glass";
            //form.right_length.value = "No Glass";
            //form.left_length.value = "No Glass";
            getPriceOfProduct(document.forms['cart_quantity']);
        } else {
            if (form.face_length_a.value != "No Glass" && form.face_length_b.value != "No Glass" && form.face_length_c.value != "No Glass") {
                if ($("input#glass-face").val() == 1) {

                } else if ($("input#glass-face").val() == 2) {
                    //form.right_length.value="select";
                    form.left_length.value = "select";
                } else if ($("input#glass-face").val() == 3) {
                    form.right_length.value = "select";
                    //form.left_length.value="select";    
                } else if ($("input#glass-face").val() == 4) {
                    form.right_length.value = "select";
                    form.left_length.value = "select";
                }
                getPriceOfProduct(document.forms['cart_quantity']);
            }
        }
    }
    if (form.type.value == "4BAY") {
        if (val == "No Glass" || val == 'No Glass"') {
            form.face_length_a.value = "No Glass";
            form.face_length_b.value = "No Glass";
            form.face_length_c.value = "No Glass";
            form.face_length_d.value = "No Glass";
            //form.right_length.value = "No Glass";
            //form.left_length.value = "No Glass";
            getPriceOfProduct(document.forms['cart_quantity']);
        } else {
            if (form.face_length_a.value != "No Glass" && form.face_length_b.value != "No Glass" && form.face_length_c.value != "No Glass" && form.face_length_d.value != "No Glass") {
                if ($("input#glass-face").val() == 1) {

                } else if ($("input#glass-face").val() == 2) {
                    //form.right_length.value="select";
                    form.left_length.value = "select";
                } else if ($("input#glass-face").val() == 3) {
                    form.right_length.value = "select";
                    //form.left_length.value="select";    
                } else if ($("input#glass-face").val() == 4) {
                    form.right_length.value = "select";
                    form.left_length.value = "select";
                }
                getPriceOfProduct(document.forms['cart_quantity']);
            }
        }
    }
}

function changeGlassImage(form, image) {

    category_name = "EP36";
    foldername = getProductFolderName("EP36") + form.type.value;
    imageName = '';
    if (form.rounded_corners.value == 0) {
        imageName = 'GLASSNORAD.jpg';
    } else {
        imageName = 'GLASS.jpg'
    }
    if (image != "") {
        imageName = image;
    }
    if (type_obj.value == "1BAY") {
        cross = '<input type="button" onclick="getPriceOfProduct(this.form);" style="margin: 0 4px;position: absolute;right: -650px;top: -180px;width: 20px;z-index: 1000000;" value="X" class="rounded-corner-image">'
    }
    if (type_obj.value == "2BAY") {
        cross = '<input type="button" onclick="getPriceOfProduct(this.form);" style="margin: 0 4px;position: absolute;right: -650px;top: -230px;width: 20px;z-index: 1000000;" value="X" class="rounded-corner-image">'
    }
    if (type_obj.value == "3BAY") {
        cross = '<input type="button" onclick="getPriceOfProduct(this.form);" style="margin: 0 4px;position: absolute;right: -650px;top: -280px;width: 20px;z-index: 1000000;" value="X" class="rounded-corner-image">'
    }
    if (type_obj.value == "4BAY") {
        cross = '<input type="button" onclick="getPriceOfProduct(this.form);" style="margin: 0 4px;position: absolute;right: -650px;top: -330px;width: 20px;z-index: 1000000;" value="X" class="rounded-corner-image">'
    }
    image_string = '<img src="images/' + foldername + '/' + imageName + '" style="width:568px;height:453px">';
    document.getElementById('additional_image').innerHTML = image_string;
    document.getElementById('ro').innerHTML = cross;
}

function finishImage(form, image) {
    category_name = "EP36";
    foldername = getProductFolderName("EP36");
    if (image != "") {
        imageName = image;
    }

    cross = '<input type="button" onclick="getPriceOfProduct(this.form);" style="margin: 0 4px;position: absolute;right: -615px;top: -160px;width: 20px;z-index: 1000000;" value="X" class="rounded-corner-image">'
    image_string = '<img src="images/' + imageName + '" style="width:568px;height:453px">';
    alert(image_string);

    document.getElementById('additional_image').innerHTML = image_string;
    document.getElementById('ro').innerHTML = cross;
}

function changeGlassImage1(form, type) {

    foldername = getProductFolderName("EP36") + form.type.value;
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
        //if(category_name=="EP36"){
        //   document.getElementById('left1').innerHTML=(parseInt(form.glass_face.value)-2)+' 1/2"';
        // }
        if (category_name == "EP36") {
            document.getElementById('left1').innerHTML = (parseInt(form.post_height.value) - 2) + ' 1/2"';
        }
    } else if (type == "B") {
        document.getElementById('top').innerHTML = (parseInt(form.face_length_b.value) - 2) + ' 1/8"';
        document.getElementById('bottom').innerHTML = (parseInt(form.face_length_b.value) - 2) + ' 1/8"';
        //if(category_name=="EP36"){
        //    document.getElementById('left1').innerHTML=(parseInt(form.glass_face.value)-2)+' 1/2"';
        // }
        if (category_name == "EP36") {
            document.getElementById('left1').innerHTML = (parseInt(form.post_height.value) - 2) + ' 1/2"';
        }
    } else if (type == "C") {
        document.getElementById('top').innerHTML = (parseInt(form.face_length_c.value) - 2) + ' 1/8"';
        document.getElementById('bottom').innerHTML = (parseInt(form.face_length_c.value) - 2) + ' 1/8"';
        //if(category_name=="EP36"){
        //    document.getElementById('left1').innerHTML=(parseInt(form.glass_face.value)-2)+' 1/2"';
        //}
        if (category_name == "EP36") {
            document.getElementById('left1').innerHTML = (parseInt(form.post_height.value) - 2) + ' 1/2"';
        }
    } else if (type == "D") {

        document.getElementById('top').innerHTML = (parseInt(form.face_length_d.value) - 2) + ' 1/8"';

        document.getElementById('bottom').innerHTML = (parseInt(form.face_length_d.value) - 2) + ' 1/8"';

        //if(category_name=="EP36"){

        //   document.getElementById('left1').innerHTML=(parseInt(form.glass_face.value)-2)+' 1/2"';

        // }

        if (category_name == "EP36") {

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

/*lightbar popup start */

function show_lightbar_pupup(form) {

    var lightbarss = form.light_bar.value;

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

/*make adjustable popup */
function show_pop(form) {
    if (form.roasted_glass.value == "yes") {
        $(document).ready(function() {
            var elem = $(this).closest('.item');
            $.confirm({
                'title': 'Confirmation',
                'message': ms_option,
                'buttons': {
                    'Proceed': {
                        'class': 'blue',
                        'action': function() {
                            getPriceOfProduct(document.forms['cart_quantity']);
                            $('#is_frosted').val('Yes');
                        }

                    },
                    'Cancel': {
                        'class': 'gray',
                        'action': function() {
                                form.roasted_glass.value = "no";
                                form.roasted_glass.selected = "No";
                                getPriceOfProduct(document.forms['cart_quantity']);
                            } // Nothing to do in this case. You can as well omit the action property.

                    }
                }
            });

        });
    } else {}
}

function makeAdjustable(form) //first make adjustable option
{
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
                                form.rounded_corners.value = "squared";
                                //form.rounded_corners.selected="Select";
                                form.rounded_corners.disabled = false;
                                getPriceOfProduct(document.forms['cart_quantity']);
                            } // Nothing to do in this case. You can as well omit the action property.

                    }
                }
            });

        });
    } else {
        form.rounded_corners.value = "squared";
        //form.rounded_corners.selected="Select";
        form.rounded_corners.disabled = false;
    }
}

leftstr = '<td><h1>Left Length</h1><td></td><span id="left_length_span"><select name="left_length" onchange="getPriceOfProduct(this.form)" id="left_length"  disabled="disabled" class="usecustom"> <option value="12">12"</option><option value="18">18"</option><option value="24">24"</option><option value="30">30"</option><option value="36">36"</option><option value="42">42"</option><option value="custom">Custom</option></span></select></td><td></td>'

rightstr = '<td><h1 style="letter-spacing:-0.5px;">Right Length</h1><td></td><span id="right_length_span"><select name="right_length" onchange="getPriceOfProduct(this.form)" id="right_length" disabled="disabled" class="usecustom"> <option value="12">12"</option><option value="18">18"</option><option value="24">24"</option><option value="30">30"</option><option value="36">36"</option><option value="42">42"</option><option value="custom">Custom</option></span></select></td><td></td>'
$(document).ready(function() { //custom option's coding does here!!
    /*ani code for custom checkbox check*/

    $("ul.option1 li").toggle(
        function() {
            $("ul.option li").eq(2).click();
            $('#customheight').attr('Checked', 'Checked');
            //doPostChange();//already comment
            $('.delete1').click();

        },
        function() {
            $('#customheight').removeAttr('Checked');
            doPostChange();
        }

    );

    $('.item .delete1').click(function() { //calling for the confirm box!!

        var elem = $(this).closest('.item');

        $.confirm({

            'title': 'Confirmation',
            'message': '<span align="right" ><img src="jquery.confirm/' + category_name + '.jpg" style="float:right;"><span style="width:250px;display:block;text-align:justify;">' + ms_post + '</span></span>',
            'buttons': {
                'Proceed': {
                    'class': 'blue',
                    'action': function() {

                        doPostChange();

                    }
                },
                'Cancel': {
                    'class': 'gray',
                    'action': function() {} // Nothing to do in this case. You can as well omit the action property.

                }
            }
        });

    });

    $("ul.option li").click(function() { //click funtion for options!!

        action_event(".test-warsi"); //removing the activated format means red lines and changing messages!
        i = $("ul.option").children().length;
        j = 0;
        while (j < i) {
            $("ul.option li").removeClass('selected'); //leave selected after clicked
            j++;
        }
        $(this).addClass('selected');

        /*for ep 15 if custom button is clicked ani code */
        if ($('#customheight').is(':checked')) { //this is for EP36
            $('ul.option1 li').css('visibility', 'visible');
            $('ul.option1 li').addClass('selected');
        } else {
            $('ul.option1 li').removeClass('selected');
        }
        /*end ani code*/

        if ($(this).text() == "Both Closed End Panels" || bth) { //next step functions
            $("input#glass-face").val(1); //calling the image of both closed end panels
            $("tr#right_lenght").html(rightstr); //providing the values to the right length option
            $("tr#left_lenght").html(leftstr); //providing the values to the left length option
        } else if ($(this).text() == "Right Closed End Panel" || rght) {
            $("input#glass-face").val(2); //calling the image according to the above click
            $("tr#left_lenght").html("<td height='20'></td>"); //hiding left length option
            $("tr#right_lenght").html(rightstr); //providing the right length options to the select
        } else if ($(this).text() == "Left Closed End Panel" || lft) {
            $("tr#right_lenght").html("<td height='20'></td>"); //hiding the right length 
            $("tr#left_lenght").html(leftstr); //Showing the left length
            $("input#glass-face").val(3); //showing the image of left closed panel
        } else if ($(this).text() == "No Closed End Panels" || noe) {
            $("tr#right_lenght").html("<td height='20'></td>"); //hiding the right length 
            $("tr#left_lenght").html("<td height='20'></td>"); //hidhing the left length
            $("input#glass-face").val(4); //showing the image
        } else if ($(this).text() == '18" Tall') {
            $("input#glass-face").val(18); //this for the EP36 which have two different funtion
        } else if ($(this).text() == '22" Tall') {
            $("input#glass-face").val(22); //this is also for the EP36 
        } else if ($(this).text() == '26" Tall') {
            $("input#glass-face").val(26);
        }

        $("select").removeAttr("disabled"); //activating all selects for editing the product description
        $("input").removeAttr("disabled"); //activating all the input box for selection
        if ($(".makeadjustablecheck31").val() == 1) {
            $("#round_check").attr("disabled", true); //making disable the checkbox.. .. ..
        }
        getPriceOfProduct(document.forms['cart_quantity']);
        // action_event(".test-warsi")

    });

    function doPostChange() { //this is in case of EP36

        if ($('#customheight').is(':checked')) {

            var my_facelengt_select = "";
            $('.usecustom').each(function() {
                checkfopost = 0;
                my_facelengt_select = "";
                my_facelengt_select += '<select name="' + $(this).attr("name") + '" onchange="getPriceOfProduct(this.form)" >';
                $('[name="' + $(this).attr("name") + '"] > option').each(function() {

                    if ($(this).val() != 'custom') {

                        my_facelengt_select += '<option value="' + $(this).val() + '" style="display:none;">' + $(this).val() + '"</option>';
                    } else {
                        my_facelengt_select += '<option value="select" selected="selected" >Select</option>';
                        my_facelengt_select += '<option value="custom">Custom</option>';
                        my_facelengt_select += '<option value="No Glass">No Glass</option>';
                        //my_facelengt_select+='<option value="" style="display:none;">Custom</option>';
                        return false;
                    }

                });

                $('#' + $(this).attr("name") + '_span').html(my_facelengt_select);
            })
            var my_facelengt_select = "";

            my_facelengt_select = '<select name="post_height" id="post_height" onchange="getPriceOfProduct(this.form)" >';
            var myArray = new Array("", "18", "22", "26", "")
            var i = 1;

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
                    } else {
                        my_facelengt_select += '<option value="' + myArray[i] + '">' + j + '"</option>';
                    }
                    my_facelengt_select += '<option value="' + myArray[i + 1] + '">' + j + '-1/4' + '"</option>';
                    my_facelengt_select += '<option value="' + myArray[i + 1] + '">' + j + '-1/2' + '"</option>';
                    my_facelengt_select += '<option value="' + myArray[i + 1] + '">' + j + '-3/4' + '"</option>';
                }
            }
            for (i = 26; i < 30; i++) {

                my_facelengt_select += '<option value="' + 26 + '">' + i + '"</option>';
                my_facelengt_select += '<option value="' + 26 + '">' + i + '-1/4' + '"</option>';
                my_facelengt_select += '<option value="' + 26 + '">' + i + '-1/2' + '"</option>';
                my_facelengt_select += '<option value="' + 26 + '">' + i + '-3/4' + '"</option>';
                j = i;
            }
            my_facelengt_select += '<option value="' + 26 + '">' + 30 + '"</option>';
            //my_facelengt_select+='<option value="'+myArray[i]+'">'+myArray[i]+'"</option>';

            $('#postcustom').html(my_facelengt_select);

            $('#is_custom').val('Yes');

            $('ul.option-panel').css('visibility', 'hidden');
            $('h1.option-panel2').css('visibility', 'visible');

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
                $('.total').text('Select');
            }

            //						alert('hi');

        } else {
            $('#postcustom').html("");
            $("ul.option li").eq(0).click();
            $('ul.option').css('visibility', 'visible');
            $('ul.option1 li').removeClass('selected');
        }
    }

    //if($('#customheight').is(':checked')){
    //			 $("ul.option li").eq(0).click();
    //		  $('.option-panel').css('visibility','hidden');
    //		  
    //		 
    //		  //getPriceOfProduct(document.forms['cart_quantity']);
    //		  
    //		}else{
    //			$('.option-panel').css('visibility','visible');
    //		}
    //		

    $('input[type="checkbox"]').click(function() { //getting and adding the price of other accessories which are like flange cover light bar and frosted glass!!
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
    zero = true;
    $("tr#right_lenght").css('display', 'none');
    $("tr#left_lenght").css('display', 'none');
    $("input#glass-face").val(4);
    getPriceOfProduct(document.forms['cart_quantity']);
    $("#end_options").change(function() {
        if ($("#end_options").val() != "select") {
            //$("select").removeAttr("disabled");
            if ($(this).val() == "Both Closed End Panels") {
                $("input#glass-face").val(1); //calling the image of both closed end panels
                $("#left_length").removeAttr("disabled");
                $("tr#right_lenght").css('display', 'none');
                $("tr#left_lenght").css('display', 'none');
                $("#right_length").removeAttr("disabled");
            } else if ($(this).val() == "Right Closed End Panel") {
                $("input#glass-face").val(2); //calling the image according to the above click
                $("#left_length").attr("disabled", "disabled");
                $("#right_length").removeAttr("disabled");
                $("tr#right_lenght").css('display', 'none');
                $("tr#left_lenght").css('display', 'none');
            } else if ($(this).val() == "Left Closed End Panel") {
                $("#left_length").removeAttr("disabled");
                $("#right_length").attr("disabled", "disabled");
                $("tr#right_lenght").css('display', 'none');
                $("tr#left_lenght").css('display', 'none');
                $("input#glass-face").val(3); //showing the image of left closed panel
            } else if ($(this).val() == "No Closed End Panels") {
                $("#left_length").attr('disabled', 'disabled');
                $("#right_length").attr('disabled', 'disabled');
                $("tr#right_lenght").css('display', 'none');
                $("tr#left_lenght").css('display', 'none');
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
            $("tr#left_lenght").css('display', 'none');
            $("tr#right_lenght").css('display', 'none');
            $("#left_length").removeAttr("disabled");
            $("#right_length").removeAttr("disabled");
            zero = false;
            $("input#glass-face").val(4);
            getPriceOfProduct(document.forms['cart_quantity']);
        }
    });

});

$(document).ready(function() {
    show_panel_type(this.form);
});

function show_panel_type(form) {
    $("input#glass-face").val(4);
    getPriceOfProduct(document.forms['cart_quantity']);
    var endpanel_val = $("#end_options option:selected").text();
    var endpanel_type = $("#end_options_type option:selected").text();
    //alert(endpanel_type);
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
    //$("div.left").text("");
    //$("div.right").text("");
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

function setHideShow(selector, msg) { //function definitions of above things!!
    setShowEvent(selector, msg)
        //setHideEvent(selector);
}

function setHideShow1(selector, msg) { //function definition to hide the show!!
    setShowEventmsg(selector, msg)
        //$(".msgtishu1").remove();

    //setHideEvent(selector);
}

function setHideShow2(selector, msg) {
    setShowEventmsg2(selector, msg)
        //setHideEvent(selector);
}

function setShowEvent(selector, msg) { //function defines the background border and message of the selected element!!
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

function setShowEventverticle(selector, msg) { //this function showing the option elements border!!
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

function setShowEventhori(selector, msg) { //this funtion defines all below verticle line in div(#message_wp1) division
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
    //            alert(msg);
}

function setShowEventhori1(selector, msg) { //this funtion used for the horizontal line of above
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

function setShowEventmsg(selector, msg) { //I believe it is having no use!!
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

function setShowEventmsg2(selector, msg) { //it too not having any use!!
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
var action_event = function(selector) { //this event is used to rub all the formatting!!
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
    //if(form.post_height.value=="select"){
    //   x+='<li>Post Height <span style="color:red">?</span></li>';
    // check=false;
    //}
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
    /*if(form.glass_face.value==1){
        if(form.right_length.value=="select"){
            x+='<li>Right Length <span style="color:red">?</span></li>';
            check=false;
        }
        if(form.left_length.value=="select"){
            x+='<li>Left Length <span style="color:red">?</span></li>';
            check=false;
        }
    }else if(form.glass_face.value==2){
        if(form.right_length.value=="select"){
            x+='<li>Right Length <span style="color:red">?</span></li>';
            check=false;
        }
    }else if(form.glass_face.value==3){
        if(form.left_length.value=="select"){
            x+='<li>Left Length <span style="color:red">?</span></li>';
            check=false;
        }
    }else if(form.glass_face.value==4){

    }*/
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
    //var form=document.forms['cart_quantity'];
    if (myFunction(document.forms['cart_quantity'])) {
        var bay = form.type.value;
        var var1 = var2 = var3 = var4 = var5 = var6 = var7 = var8 = var9 = var10 = var11 = var12= endpaneltype = flange = "";

        flange = form.flange_covers.options[form.flange_covers.selectedIndex].text;

        var gotocornerpostss = $("input[name='gotocornerpostcheck']:checked").val();
        //alert(gotocornerpostss);
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
            //alert(var12);
            //$('#noofcornerpost :selected').text();	
            //alert(var9);alert(var10);alert(var11);
        }
		 endpaneltype = form.end_options_type.options[form.end_options_type.selectedIndex].text;
        // var var1=var2=var3=var4=var5=var6=var7=var8="";
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
                //tb_show("","pop1.php?KeepThis=true&TB_iframe=true&height=500&width=600","");
                // $("form[name='cart_quantity']").submit();

                $("form[name='cart_quantity']").submit();
                //}

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
                        } // Nothing to do in this case. You can as well omit the action property.

                }
            }
        });
        $('.gray').css('display', 'none');
    });

})

function yoge(a, b) {
    var tees = (a + b);
    return tees;
}

function customcal(v) {
    if (v == '1/4') {
        v1 = '.25';
    }
    if (v == '1/2') {
        v1 = '.50';
    }
    if (v == '3/4') {
        v1 = '.75';
    }
    return v1;
    //alert(v)
}

function roastedglasscal(l, p) {
    var left = (l * p) / 144;
    //var right=(r*p)/144;
    var cal = (left) * 25;
    return cal;
}

function roastedglasscalface(f, p) {
    var face = (f * p) / 144;

    var cal = (face) * 25 * 2;
    return cal;
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
$(document).ready(function() {

    $("[data-labelfor]").click(function() {
        $('#' + $(this).attr("data-labelfor")).prop('checked',
            function(i, oldVal) { return !oldVal; });
    });

    $('.showtable11').css('display', 'none');
    $('.showtable21').css("display", "none");

});

$(document).ready(function() {
    $('#gotocornerpost').click(function() {
        if (screen.width >= 992 && screen.width <= 1024) {
            if ($(this).data('bay') == '2BAY') {
                $('.icons-quotes2').css('margin-top', '-10rem');
            } else if ($(this).data('bay') == '3BAY') {
                $('.icons-quotes2').css('margin-top', '-11rem');
            } else if ($(this).data('bay') == '4BAY') {
                $('.icons-quotes2').css('margin-top', '-18rem');
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
        $('#extratext span').html('&nbsp; 1)');
        $('#quotetext span').html('&nbsp;&nbsp;5)');
        $('#addcartandfavorite span').html('&nbsp;&nbsp;6)');
        $('.showtable11').css('display', '');
        $('.showtable21').css('display', '');
    });
})

$(document).ready(function() {
    $('#backtostraightpost').click(function() {
        if (screen.width >= 992 && screen.width <= 1024) {
            if ($(this).data('bay') == '2BAY') {
                $('.icons-quotes2').css('margin-top', '-9.5rem');
            } else if ($(this).data('bay') == '3BAY') {
                $('.icons-quotes2').css('margin-top', '-10.50rem');
            } else if ($(this).data('bay') == '4BAY') {
                $('.icons-quotes2').css('margin-top', '-11.50rem');
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
        $('#extratext span').html('&nbsp; 3)');
        $('#quotetext span').html('&nbsp;&nbsp;5)');
        $('#addcartandfavorite span').html('&nbsp;&nbsp;6)');
    });
})

function change_corner_post_no() {

    var noofcornerpost = $('#noofcornerpost :selected').text();
    //alert(noofcornerpost);

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
                    /*if(post=='yes'){
                    $('.usecustom').each(function(){
                        checkfopost=0;
                        my_facelengt_select="";
                        my_facelengt_select+='<select name="'+$(this).attr("name")+'" id="'+$(this).attr("name")+'" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);" >';
                         $('[name="'+$(this).attr("name")+'"] > option') .each(function() {
                            
                            if($(this).val()!='custom'){
                                
                                my_facelengt_select+='<option value="'+$(this).val()+'" style="display:none;">'+$(this).val()+'"</option>';
                            }else{
                                //my_facelengt_select+='<option value="select" selected="selected" >Select</option>';
                                //my_facelengt_select+='<option value="custom">Custom</option>';
                                //my_facelengt_select+='<option value="No Glass">No Glass</option>';
                                
                                //my_facelengt_select+='<option value="" style="display:none;">Custom</option>';
                              return false;
                            }
                                                
                        });
                        
                        $('#'+$(this).attr("name")+'_span').html(my_facelengt_select);
                    })
                        ispost=true;
                        c=1;
                    }*/
                    if ((ispost) && (c == 0)) {
                        lastmin = 4;
                    } else { lastmin = 2; }

                    my_facelengt_select = "";
                    my_facelengt_select += '<select name="' + custom.attr("name") + '" id="' + custom.attr("name") + '" onchange="nogl(this.form,this.name,this.value);getPriceOfProduct(this.form);show_lightbar_pupup(this.form);" >';
                    //	my_facelengt_simple_select+='<select name="face_length" onchange="getPriceOfProduct(this.form)" >';
                    var myArray = new Array();
                    var i = 1;
                    $('[name="' + custom.attr("name") + '"] > option').each(function() {
                        //alert($(this).val());

                        if ($(this).val() == 48 || $(this).val() == 54) {

                        } else {
                            //alert($(this).val());
                            if ($(this).val() != 'custom') {
                                myArray[i] = $(this).val();
                                i++;
                            }
                        }

                    });
                    /*for ep 11 category post height*/
                    if (post == 'yes') {
                        if ((category_name == 'EP11') || (category_name == 'EP12')) {
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
                        //for (i=8;i<myArray[1];i++){

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

                        //}
                    }

                    if (endcheckk == 'yes') {

                    } else {

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

                    }

                    if ((post == 'yes') && (category_name == 'EP5')) {

                        var j = 0;
                        for (i = 22; i < 30; i++) {

                            my_facelengt_select += '<option value="' + 26 + '">' + i + '"</option>';
                            my_facelengt_select += '<option value="' + 26 + '">' + i + '-1/4' + '"</option>';
                            my_facelengt_select += '<option value="' + 26 + '">' + i + '-1/2' + '"</option>';
                            my_facelengt_select += '<option value="' + 26 + '">' + i + '-3/4' + '"</option>';
                            j = i;
                        }
                        my_facelengt_select += '<option value="' + 26 + '">' + 30 + '"</option>';
                    } else if ((post == 'yes') && (category_name == 'EP11' || category_name == 'EP12')) {

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
                        my_facelengt_select += '<option value="22">18-1/4"</option>';
                        my_facelengt_select += '<option value="22">18-1/2"</option>';
                        my_facelengt_select += '<option value="22">18-3/4"</option>';
                        my_facelengt_select += '<option value="22">19"</option>';
                        my_facelengt_select += '<option value="22">19-1/4"</option>';
                        my_facelengt_select += '<option value="22">19-1/2"</option>';
                        my_facelengt_select += '<option value="22">19-3/4"</option>';
                        my_facelengt_select += '<option value="22">20"</option>';
                        my_facelengt_select += '<option value="22">20-1/4"</option>';
                        my_facelengt_select += '<option value="22">20-1/2"</option>';
                        my_facelengt_select += '<option value="22">20-3/4"</option>';
                        my_facelengt_select += '<option value="22">21"</option>';
                        my_facelengt_select += '<option value="22">21-1/4"</option>';
                        my_facelengt_select += '<option value="22">21-1/2"</option>';
                        my_facelengt_select += '<option value="22">21-3/4"</option>';

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
                        if (myArray[i] == "No Glass") {
                            for (j = 42; j < 48; j++) {
                                if (j != 42) {
                                    my_facelengt_select += '<option value="48" style="color:red">' + j + '"</option>';
                                }
                                my_facelengt_select += '<option value="48" style="color:red">' + j + '-1/4' + '"</option>';
                                my_facelengt_select += '<option value="48" style="color:red">' + j + '-1/2' + '"</option>';
                                my_facelengt_select += '<option value="48" style="color:red">' + j + '-3/4' + '"</option>';

                            }
                            for (j = 48; j <= 54; j++) {

                                if (i == 48) {
                                    my_facelengt_select += '<option value="48" style="color:red">' + j + '"</option>';
                                } else {
                                    my_facelengt_select += '<option value="54" style="color:red">' + j + '"</option>';
                                }

                                if (j != 54) {
                                    my_facelengt_select += '<option value="54" style="color:red">' + j + '-1/4' + '"</option>';
                                    my_facelengt_select += '<option value="54" style="color:red">' + j + '-1/2' + '"</option>';
                                    my_facelengt_select += '<option value="54" style="color:red">' + j + '-3/4' + '"</option>';
                                }
                            }
                            my_facelengt_select += '<option value="' + myArray[i] + '">' + myArray[i] + '</option>';
                        } else {

                            if (endcheckk == 'yes') {

                            } else {
                                my_facelengt_select += '<option value="' + myArray[i] + '">' + myArray[i] + '"</option>';
                            }

                        }

                        if (myArray[i] == 42) {
                            for (i = 42; i < 48; i++) {
                                if (i != 42) {
                                    my_facelengt_select += '<option value="48" style="color:red">' + i + '"</option>';
                                }
                                my_facelengt_select += '<option value="48" style="color:red">' + i + '-1/4' + '"</option>';
                                my_facelengt_select += '<option value="48" style="color:red">' + i + '-1/2' + '"</option>';
                                my_facelengt_select += '<option value="48" style="color:red">' + i + '-3/4' + '"</option>';

                            }
                            for (i = 48; i <= 54; i++) {
                                if (i == 48) {
                                    my_facelengt_select += '<option value="48" style="color:red">' + i + '"</option>';
                                } else {
                                    my_facelengt_select += '<option value="54" style="color:red">' + i + '"</option>';
                                }

                                if (i != 54) {
                                    my_facelengt_select += '<option value="54" style="color:red">' + i + '-1/4' + '"</option>';
                                    my_facelengt_select += '<option value="54" style="color:red">' + i + '-1/2' + '"</option>';
                                    my_facelengt_select += '<option value="54" style="color:red">' + i + '-3/4' + '"</option>';
                                }
                            }
                            my_facelengt_select += '<option value="No Glass">No Glass</option>';
                        }
                    }

                    $('#' + custom.attr("name") + '_span').html(my_facelengt_select);
                    /* for ep11 post height */
                    //getPriceOfProduct(document.forms['cart_quantity']);
                    if (!ispost) {
                        //getPriceOfProduct(document.forms['cart_quantity']);
                    }
                    if ((category_name == 'EP11' || category_name == 'EP12')) {
                        getPriceOfProduct(document.forms['cart_quantity']);
                    }
                    getPriceOfProduct(document.forms['cart_quantity']);
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
                        //$('.total').text('Select');
                    }
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
}