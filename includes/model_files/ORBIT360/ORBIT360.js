$(document).ready(function() {
    zero = true;
    $("tr#right_lenght").css('display', 'none');
    $("tr#left_lenght").css('display', 'none');
    $("input#glass-face").val(4);
    getPriceOfProduct(document.forms['cart_quantity']);
    $("#end_options").change(function() {
        if ($("#end_options").val() != "select") {
            $("select").removeAttr("disabled");
            if ($(this).val() == "Both Closed End Panels") {
                $("input#glass-face").val(1); //calling the image of both closed end panels
                $("#left_length").removeAttr("disabled");
                $("tr#right_lenght").css('display', '');
                $("tr#left_lenght").css('display', '');
                $("#right_length").removeAttr("disabled");
            } else if ($(this).val() == "Right Closed End Panel") {
                $("input#glass-face").val(2); //calling the image according to the above click
                $("#left_length").attr("disabled", "disabled");
                $("#right_length").removeAttr("disabled");
                $("tr#right_lenght").css('display', '');
                $("tr#left_lenght").css('display', 'none');
            } else if ($(this).val() == "Left Closed End Panel") {
                $("#left_length").removeAttr("disabled");
                $("#right_length").attr("disabled", "disabled");
                $("tr#right_lenght").css('display', 'none');
                $("tr#left_lenght").css('display', '');
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
            $("tr#right_lenght").css('display', 'none');
            $("tr#left_lenght").css('display', 'none');
            $("input#glass-face").val(4);
            $("#left_length").removeAttr("disabled");
            $("#right_length").removeAttr("disabled");
            zero = false;
            getPriceOfProduct(document.forms['cart_quantity']);
        }
    });
});

$(document).ready(function() {
    var rght = lft = bth = noe = false;
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
    $("ul.option li").click(function() {
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
            $("tr#left_lenght").html("<td height='22'></td>");
            $("tr#right_lenght").html(rightstr);
        } else if ($(this).text() == "Left Closed End Panel" || lft) {
            $("tr#right_lenght").html("<td height='22'></td>");
            $("tr#left_lenght").html(leftstr);
            $("input#glass-face").val(3);
        } else if ($(this).text() == "No Closed End Panels" || noe) {
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
});

function getPriceOfProduct(form) {
    type_obj = form.type;
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

    if (type_obj.value == '4BAY') {
        var customefaceA = $('#customefaceA').is(':checked');
        //alert(customefaceA);
        if (customefaceA) {
            var faceA_get = $('[name="face_length_a"]').find('option:selected').text();
            var faceA_get_val = $('[name="face_length_a"]').find('option:selected').val();
            var faceB_get = $('[name="face_length_b"]').find('option:selected').text();
            var faceB_get_val = $('[name="face_length_b"]').find('option:selected').val();
            var faceC_get = $('[name="face_length_c"]').find('option:selected').text();
            var faceC_get_val = $('[name="face_length_c"]').find('option:selected').val();
            var faceD_get = $('[name="face_length_d"]').find('option:selected').text();
            var faceD_get_val = $('[name="face_length_d"]').find('option:selected').val();


            //alert(faceA_get_val);
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
        // alert(checkcheckedb);

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



                if (faceB_get == '24"') {

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



                if (faceC_get == '24"') {

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



                if (faceD_get == '24"') {

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



                if (faceC_get == '24"') {

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



                if (faceD_get == '24"') {

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



                if (faceD_get == '24"') {

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
    if (type_obj.value == '3BAY') {
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



                if (faceB_get == '24"') {

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



                if (faceC_get == '24"') {

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



                if (faceC_get == '24"') {

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
	//alert(type_obj.value);
    if (type_obj.value == '2BAY') {
		
        var customefaceA = $('#customefaceA').is(':checked');
//alert(customefaceA);
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



                if (faceB_get == '24"') {

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
    flangeCoverss = ""; //Use For Light
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
    flangeCoversPrice = 0;
    flangeCoverssPrice = 0;
    str = "";
    category_name = "ORBIT360";
    right_lenght_obj = "12";
    left_lenght_obj = "12";
    post_height_obj = "12";
    face_lenght_obj = form.face_length;
    face_lenght_a_obj = form.face_length_a;
    face_lenght_b_obj = form.face_length_b;
    face_lenght_c_obj = form.face_length_c;
    face_lenght_d_obj = form.face_length_d;
    glass_face_obj = form.glass_face;
    //alert(form.glass_face);
    corner_obj = "Rounded Corners";
    //flange_covers_obj="no";//use Form Light
    flange_covers_obj2 = "no"; //use Form Light Bracket

    flange_covers_obj = form.flange_covers; //use Form Light
    flange_coverss_obj = form.flange_coverss; //
    choose_finish_obj = 'Brushed Aluminium';
    foldername = getProductFolderName(category_name) + type_obj.value;
    // alert(foldername);
    ///alert(type_obj.value);


    //Code Start Here
    //posts
    if (category_name == "ORBIT360") {
        leftEndPost = "ORBIT360LPSS";
    } else {
        leftEndPost = "B950SLPSS";
    }



    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[leftEndPost][0] + '" />';
    leftPostPrice = parseFloat(product_name_price[leftEndPost][1]);

    if (category_name == "ORBIT360") {
        rightEndPost = "ORBIT360RPSS";
    } else {
        rightEndPost = "B950SRPSS";
    }

    str += '<input type="hidden" name="products_id[]" value="' + product_name_price[rightEndPost][0] + '" />';
    rightPostPrice = parseFloat(product_name_price[rightEndPost][1]);



    if (type_obj.value != "1BAY") {
        if (category_name == "ORBIT360") {
            centerPost = "ORBIT360CPSS";
        } else {
            centerPost = "ORBIT360CP" + choose_finish_obj.value;
        }
    }














    //endpanels
    if (glass_face_obj.value == 1) {

        leftEndPanel = "ORBIT360-gLEP";
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[leftEndPanel][0] + '" />';
        leftEndPanelPrice = parseFloat(product_name_price[leftEndPanel][1]);


        rightEndPanel = "ORBIT360-gREP";
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[rightEndPanel][0] + '" />';
        rightEndPanelPrice = parseFloat(product_name_price[rightEndPanel][1]);

        imageName = "BOTHENDS";

    } else if (glass_face_obj.value == 2) {


        rightEndPanel = "ORBIT360-gREP";
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[rightEndPanel][0] + '" />';
        rightEndPanelPrice = parseFloat(product_name_price[rightEndPanel][1]);

        leftEndPanel = "";
        //alert("warsi");
        leftEndPanelPrice = 0;
        imageName = "RIGHTEND";
    } else if (glass_face_obj.value == 3) {

        leftEndPanel = "ORBIT360-gLEP";
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[leftEndPanel][0] + '" />';
        leftEndPanelPrice = parseFloat(product_name_price[leftEndPanel][1]);

        rightEndPanel = "";
        imageName = "LEFTEND";
        rightEndPanelPrice = 0;
    } else {
        leftEndPanel = "";
        rightEndPanel = "";
        imageName = "NOENDS";
        leftEndPanelPrice = 0;
        rightEndPanelPrice = 0;
    }
    // alert(leftEndPanelPrice);
    // alert(rightEndPanelPrice);
    //glasses
    if (type_obj.value == "4BAY") {
        if (face_lenght_a_obj.value != "select") {
            glassName_a = "ORBIT360-" + face_lenght_a_obj.value + "GL";
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_a][0] + '" />';
            facePrice_a = parseFloat(product_name_price[glassName_a][1]);
        }
        if (face_lenght_b_obj.value != "select") {
            glassName_b = "ORBIT360-" + face_lenght_b_obj.value + "GL";
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_b][0] + '" />';
            facePrice_b = parseFloat(product_name_price[glassName_b][1]);
        }
        if (face_lenght_c_obj.value != "select") {
            glassName_c = "ORBIT360-" + face_lenght_c_obj.value + "GL";
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_c][0] + '" />';
            facePrice_c = parseFloat(product_name_price[glassName_c][1]);
        }
        if (face_lenght_d_obj.value != "select") {
            glassName_d = "ORBIT360-" + face_lenght_d_obj.value + "GL";
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_d][0] + '" />';
            facePrice_d = parseFloat(product_name_price[glassName_d][1]);
        }
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[centerPost][0] + '" />';
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[centerPost][0] + '" />';
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[centerPost][0] + '" />';
        centerPostPrice = parseFloat(product_name_price[centerPost][1]) + parseFloat(product_name_price[centerPost][1]) + parseFloat(product_name_price[centerPost][1]);
        //alert(facePrice_d);
    } else if (type_obj.value == "3BAY") {
        if (face_lenght_a_obj.value != "select") {
            glassName_a = "ORBIT360-" + face_lenght_a_obj.value + "GL";
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_a][0] + '" />';
            facePrice_a = parseFloat(product_name_price[glassName_a][1]);
        }
        if (face_lenght_b_obj.value != "select") {
            glassName_b = "ORBIT360-" + face_lenght_b_obj.value + "GL";
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_b][0] + '" />';
            facePrice_b = parseFloat(product_name_price[glassName_b][1]);
        }
        if (face_lenght_c_obj.value != "select") {
            glassName_c = "ORBIT360-" + face_lenght_c_obj.value + "GL";
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_c][0] + '" />';
            facePrice_c = parseFloat(product_name_price[glassName_c][1]);
        }
        glassName_d = "";
        facePrice_d = 0;
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[centerPost][0] + '" />';
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[centerPost][0] + '" />';
        centerPostPrice = parseFloat(product_name_price[centerPost][1]) + parseFloat(product_name_price[centerPost][1]);
    } else if (type_obj.value == "2BAY") {
        if (face_lenght_a_obj.value != "select") {
            glassName_a = "ORBIT360-" + face_lenght_a_obj.value + "GL";
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_a][0] + '" />';
            facePrice_a = parseFloat(product_name_price[glassName_a][1]);
        }
        if (face_lenght_b_obj.value != "select") {
            glassName_b = "ORBIT360-" + face_lenght_b_obj.value + "GL";
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_b][0] + '" />';
            facePrice_b = parseFloat(product_name_price[glassName_b][1]);
        }
        glassName_c = "";
        glassName_d = "";
        facePrice_c = 0;
        facePrice_d = 0;
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[centerPost][0] + '" />';
        centerPostPrice = parseFloat(product_name_price[centerPost][1]);
    } else if (type_obj.value == "1BAY") {
        if (face_lenght_obj.value != "select") {
            glassName_a = "ORBIT360-" + face_lenght_obj.value + "GL";
            glassName_b = "";
            glassName_c = "";
            glassName_d = "";
            facePrice_a = parseFloat(product_name_price[glassName_a][1]);
            facePrice_b = 0;
            facePrice_c = 0;
            facePrice_d = 0;


            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_a][0] + '" />';
        }
    }

    if (flange_coverss_obj.value != "no" || flange_coverss_obj.value != "select") {
        flangeCoverss = "test";
    }

    //alert(flange_coverss_obj);
    if (flange_coverss_obj.value != "select") {


        if (flange_coverss_obj.value == "above_counter") {
            flangeCoverss = "ORBIT360-FLANGE COVER Above Counter";
        } else if (flange_coverss_obj.value == "below_counter") {
            flangeCoverss = "ORBIT360-FLANGE COVER Below Counter";
        } else if (flange_coverss_obj.value == "normal_cover") {
            flangeCoverss = "ORBIT360-FLANGE WITH COVER";
        } else {
            flangeCoverss = "ORBIT360-FLANGE COVER 1 PIECE";
        }


        if (flange_coverss_obj.value == "no") {
            flangeCoverssPrice = 0;
        } else {
            //alert(flangeCoverss);

            if (type_obj.value == "1BAY") {
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeCoverss][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeCoverss][0] + '" />';
                flangeCoverssPrice = 2 * parseFloat(product_name_price[flangeCoverss][1]);
            } else if (type_obj.value == "2BAY") {
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeCoverss][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeCoverss][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeCoverss][0] + '" />';
                flangeCoverssPrice = 3 * parseFloat(product_name_price[flangeCoverss][1]);
            } else if (type_obj.value == "3BAY") {
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeCoverss][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeCoverss][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeCoverss][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeCoverss][0] + '" />';
                flangeCoverssPrice = 4 * parseFloat(product_name_price[flangeCoverss][1]);
            } else if (type_obj.value == "4BAY") {
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeCoverss][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeCoverss][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeCoverss][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeCoverss][0] + '" />';
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeCoverss][0] + '" />';
                flangeCoverssPrice = 5 * parseFloat(product_name_price[flangeCoverss][1]);
            }

        }

    }

    //alert(flange_covers_obj.value);
    //lights
    if (flange_covers_obj.value == "yes") {
        if (type_obj.value == "4BAY") {
            if (face_lenght_a_obj.value != "select") {
                light_a = "ORBIT360-" + face_lenght_a_obj.value + "LYT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_a][0] + '" />';
                flangeCoversPrice += parseFloat(product_name_price[light_a][1])
            }
            if (face_lenght_b_obj.value != "select") {
                light_b = "ORBIT360-" + face_lenght_b_obj.value + "LYT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_b][0] + '" />';
                flangeCoversPrice += parseFloat(product_name_price[light_b][1])
            }
            if (face_lenght_c_obj.value != "select") {
                light_c = "ORBIT360-" + face_lenght_c_obj.value + "LYT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_c][0] + '" />';
                flangeCoversPrice += parseFloat(product_name_price[light_c][1])
            }
            if (face_lenght_d_obj.value != "select") {
                light_d = "ORBIT360-" + face_lenght_d_obj.value + "LYT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_d][0] + '" />';
                flangeCoversPrice += parseFloat(product_name_price[light_d][1]);
            }
            // flangeCoversPrice=parseFloat(product_name_price[light_a][1])+parseFloat(product_name_price[light_b][1])+parseFloat(product_name_price[light_c][1])+parseFloat(product_name_price[light_d][1]);
        } else if (type_obj.value == "3BAY") {
            if (face_lenght_a_obj.value != "select") {
                light_a = "ORBIT360-" + face_lenght_a_obj.value + "LYT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_a][0] + '" />';
                flangeCoversPrice += parseFloat(product_name_price[light_a][1])
            }
            if (face_lenght_b_obj.value != "select") {
                light_b = "ORBIT360-" + face_lenght_b_obj.value + "LYT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_b][0] + '" />';
                flangeCoversPrice += parseFloat(product_name_price[light_b][1])
            }
            if (face_lenght_c_obj.value != "select") {
                light_c = "ORBIT360-" + face_lenght_c_obj.value + "LYT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_c][0] + '" />';
                flangeCoversPrice += parseFloat(product_name_price[light_c][1]);
            }
        } else if (type_obj.value == "2BAY") {
            if (face_lenght_a_obj.value != "select") {
                light_a = "ORBIT360-" + face_lenght_a_obj.value + "LYT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_a][0] + '" />';
                flangeCoversPrice += parseFloat(product_name_price[light_a][1])
            }
            if (face_lenght_b_obj.value != "select") {
                light_b = "ORBIT360-" + face_lenght_b_obj.value + "LYT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_b][0] + '" />';
                flangeCoversPrice += parseFloat(product_name_price[light_b][1]) + 0;
            }


            light_c = "";



        } else {
            if (face_lenght_obj.value != "select") {
                light_a = "ORBIT360-" + face_lenght_obj.value + "LYT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_a][0] + '" />';
                flangeCoversPrice = parseFloat(product_name_price[light_a][1]);
            }

            light_b = "";
            light_c = "";

        }
    }
    if (flange_covers_obj2.value != 0 && flange_covers_obj2.value != "select") {
        flageCovers2 = "Light Bracket";
        for (i = 1; i <= flange_covers_obj2.value; i++) {
            str += '<input type="hidden" name="products_id[]" value="0" />';
        }
        if (flange_covers_obj2.value != "select") {
            flangeCoversPrice2 = parseFloat(0) * flange_covers_obj2.value;
        }
    }
    //images
    if (choose_finish_obj.value == "SS") {
        if (flange_covers_obj.value == "yes") {
            imageName = imageName;
        } else {
            imageName = "NORAD" + imageName;
        }
    } else {
        if (flange_covers_obj.value == "yes") {
            //imageName="BLACK"+imageName;
            imageName = "LYT" + imageName;
        } else {
            imageName = "" + imageName;
        }
    }
    ///rightEndPanelPrice;
    ///leftEndPanelPrice;
    // Code End Here

    glassPrice = facePrice_a + facePrice_b + facePrice_c + facePrice_d;

    t_post_price = centerPostPrice + anglePostPrice;
    totalPrice = glassPrice + flangeCoverssPrice + flangeCoversPrice + leftEndPanelPrice + rightEndPanelPrice + centerPostPrice + leftPostPrice + rightPostPrice;

    //alert(imageName);



    var flange_val = flange_coverss_obj.value;
    //alert(flange_val);

    //normal_cover
    //above_counter
    //below_counter

    if (flange_val == "normal_cover") {

        imageName = "FLWTC" + imageName;
    } else if (flange_val == "above_counter") {

        imageName = "FLAC" + imageName;
    } else if (flange_val == "below_counter") {

        imageName = "FLBC" + imageName;
    } else {
        imageName = "" + imageName;
    }
    //alert(imageName);




    img_ajx = imageName;



    image_string = '<img src="images/' + foldername + '/' + imageName + '.jpg" style="width:640px;height:480px;">';

    // image_string='<img src="images/'+foldername+'/'+imageName+'.jpg" style="width:828px;height:583px;">'; 


    image_string += '<div class="left">12"</div><div class="right">12"</div>';
    image_string += '<div class="msgtishu"></div>';
    image_string += '<div class="msgtishu1"></div>';
    image_string += '<div class="msgtishu2"><hr color="red" size="6px"   width="' + width_three + '"> </div>';


    image_string += '<div class="glass">12"</div><div class="glass_a">12"</div><div class="glass_b">12"</div><div class="glass_c">12"</div><div class="glass_d">12"</div><div class="total">38"</div>';

    document.getElementById('additional_image').innerHTML = image_string;
    /*
    if(glass_face_obj.value==1){
        if(left_lenght_obj.value!="select"){
            $("div.left").text(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
            $('#c_glass_left_val').val(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
            if(leftEndPanel!=''){
                // $('#c_glass_right').val(product_name_price[rightEndPanel][0]);
                $('#c_glass_left').val(product_name_price[leftEndPanel][0]);		
            }
        }else{
            $("div.left").text("Left");
        }
        if(right_lenght_obj.value!="select"){
            $("div.right").text(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
            $('#c_glass_right_val').val(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
            if(rightEndPanel!=''){
                $('#c_glass_right').val(product_name_price[rightEndPanel][0]);
                // $('#c_glass_left').val(product_name_price[leftEndPanel][0]);		
            }
        }else{
            $("div.right").text("Right");
        }
             
            
            <!-- ani code-->
            
            
            
            
            
    }
    else if(glass_face_obj.value==2){
        if(left_lenght_obj.value!="select"){

        }
        if(right_lenght_obj.value!="select"){
            $("div.right").text(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
            if(rightEndPanel!=''){
                $('#c_glass_right').val(product_name_price[rightEndPanel][0]);
            }
            $('#c_glass_right_val').val(right_lenght_obj.options[right_lenght_obj.selectedIndex].text);
        }else{
            $("div.right").text("Right");
        }
                $("div.left").css("display","none");
             
              
             
             
    }
    else if(glass_face_obj.value==3){
        if(left_lenght_obj.value!="select"){
            $("div.left").text(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
            if(leftEndPanel!=''){
                $('#c_glass_left').val(product_name_price[leftEndPanel][0]);
            }
            $('#c_glass_left_val').val(left_lenght_obj.options[left_lenght_obj.selectedIndex].text);
        }else{
            $("div.left").text("Left");
        }
        if(right_lenght_obj.value!="select"){
            $("div.right").css("display","none");
        }
         $("div.right").css("display","none");
            
              
                     
            
              
    }
    else if(glass_face_obj.value==4){
        if(left_lenght_obj.value!="select"){

        }
        if(right_lenght_obj.value!="select"){
            
        }
        $("div.left").css("display","none");
        $("div.right").css("display","none");
    }
   */
    if (type_obj.value == "1BAY") {

        //for custom face set value to hidden fileds
        if (face_lenght_obj.value != "select") {
            if (flange_covers_obj.value == "yes") {
                $('#c_glass_a_light').val(product_name_price[light_a][0]);
                $('#c_glass_a_val_light').val(face_lenght_obj.options[face_lenght_obj.selectedIndex].text);
            }
            $('#c_glass_a_val').val($('[name="face_length"]').find('option:selected').text());
            if (glassName_a != '') {
                $('#c_glass_a').val(product_name_price[glassName_a][0]);
            }
            $("div.glass").text($('[name="face_length"]').find('option:selected').text());
        } else {
            $("div.glass").text("A");
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

        if (face_lenght_obj.value == 'No Glass') {
            noGlass()
        }
    }
    if (type_obj.value == "2BAY") {

        if (face_lenght_a_obj.value != "select") {
            $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
            if (flange_covers_obj.value == "yes") {
                $('#c_glass_a_light').val(product_name_price[light_a][0]);
                $('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                // $('#c_glass_b_light').val(product_name_price[light_b][0]);
                // $('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
            }
            if (glassName_a != '') {
                $('#c_glass_a').val(product_name_price[glassName_a][0]);
                // $('#c_glass_b').val(product_name_price[glassName_b][0]);
            }
            $("div.glass_a").text($('[name="face_length_a"]').find('option:selected').text());
        } else {
            $("div.glass_a").text("A");
        }
        if (face_lenght_b_obj.value != "select") {
            $('#c_glass_b_val').val($('[name="face_length_b"]').find('option:selected').text());
            if (flange_covers_obj.value == "yes") {
                // $('#c_glass_a_light').val(product_name_price[light_a][0]);
                //        $('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                $('#c_glass_b_light').val(product_name_price[light_b][0]);
                $('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
            }
            if (glassName_b != '') {
                // $('#c_glass_a').val(product_name_price[glassName_a][0]);
                $('#c_glass_b').val(product_name_price[glassName_b][0]);
            }

            $("div.glass_b").text($('[name="face_length_b"]').find('option:selected').text());
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

        if (face_lenght_a_obj.value != "select") {
            $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
            if (flange_covers_obj.value == "yes") {
                $('#c_glass_a_light').val(product_name_price[light_a][0]);
                $('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                //    			$('#c_glass_b_light').val(product_name_price[light_b][0]);
                //    			$('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                // $('#c_glass_c_light').val(product_name_price[light_c][0]);
                //    			$('#c_glass_c_val_light').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
            }
            if (glassName_a != '') {
                $('#c_glass_a').val(product_name_price[glassName_a][0]);
                // $('#c_glass_b').val(product_name_price[glassName_b][0]);
                // $('#c_glass_c').val(product_name_price[glassName_c][0]);	
            }
            $("div.glass_a").text($('[name="face_length_a"]').find('option:selected').text());
        } else {
            $("div.glass_a").text("A");
        }
        if (face_lenght_b_obj.value != "select") {
            $('#c_glass_b_val').val($('[name="face_length_b"]').find('option:selected').text());
            if (flange_covers_obj.value == "yes") {
                // $('#c_glass_a_light').val(product_name_price[light_a][0]);
                //       			$('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                $('#c_glass_b_light').val(product_name_price[light_b][0]);
                $('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                // $('#c_glass_c_light').val(product_name_price[light_c][0]);
                //    			$('#c_glass_c_val_light').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
            }
            if (glassName_b != '') {
                // $('#c_glass_a').val(product_name_price[glassName_a][0]);
                $('#c_glass_b').val(product_name_price[glassName_b][0]);
                // $('#c_glass_c').val(product_name_price[glassName_c][0]);	
            }
            $("div.glass_b").text($('[name="face_length_b"]').find('option:selected').text());
        } else {
            $("div.glass_b").text("B");
        }
        if (face_lenght_c_obj.value != "select") {
            $('#c_glass_c_val').val($('[name="face_length_c"]').find('option:selected').text());
            if (flange_covers_obj.value == "yes") {
                // $('#c_glass_a_light').val(product_name_price[light_a][0]);
                //       			$('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                //       			$('#c_glass_b_light').val(product_name_price[light_b][0]);
                //       			$('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                $('#c_glass_c_light').val(product_name_price[light_c][0]);
                $('#c_glass_c_val_light').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
            }
            if (glassName_c != '') {
                // $('#c_glass_a').val(product_name_price[glassName_a][0]);
                // $('#c_glass_b').val(product_name_price[glassName_b][0]);
                $('#c_glass_c').val(product_name_price[glassName_c][0]);
            }
            $("div.glass_c").text($('[name="face_length_c"]').find('option:selected').text());
        } else {
            $("div.glass_c").text("C");
        }










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

    }
    if (type_obj.value == "4BAY") {


        if (face_lenght_a_obj.value != "select") {
            $('#c_glass_a_val').val($('[name="face_length_a"]').find('option:selected').text());
            if (flange_covers_obj.value == "yes") {
                $('#c_glass_a_light').val(product_name_price[light_a][0]);
                $('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                //      	$('#c_glass_b_light').val(product_name_price[light_b][0]);
                //      	$('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                // $('#c_glass_c_light').val(product_name_price[light_c][0]);
                //      	$('#c_glass_c_val_light').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                // $('#c_glass_d_light').val(product_name_price[light_d][0]);
                //      	$('#c_glass_d_val_light').val(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
            }
            if (glassName_a != '') {
                $('#c_glass_a').val(product_name_price[glassName_a][0]);
                // $('#c_glass_b').val(product_name_price[glassName_b][0]);
                // $('#c_glass_c').val(product_name_price[glassName_c][0]);
                //          $('#c_glass_d').val(product_name_price[glassName_d][0]);			
            }
            $("div.glass_a").text($('[name="face_length_a"]').find('option:selected').text());
        } else {
            $("div.glass_a").text("A");
        }
        if (face_lenght_b_obj.value != "select") {
            $('#c_glass_b_val').val($('[name="face_length_b"]').find('option:selected').text());
            if (flange_covers_obj.value == "yes") {
                // $('#c_glass_a_light').val(product_name_price[light_a][0]);
                //       			$('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                $('#c_glass_b_light').val(product_name_price[light_b][0]);
                $('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                // $('#c_glass_c_light').val(product_name_price[light_c][0]);
                //    			$('#c_glass_c_val_light').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                // $('#c_glass_d_light').val(product_name_price[light_d][0]);
                //    			$('#c_glass_d_val_light').val(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
            }
            if (glassName_b != '') {
                // $('#c_glass_a').val(product_name_price[glassName_a][0]);
                $('#c_glass_b').val(product_name_price[glassName_b][0]);
                // $('#c_glass_c').val(product_name_price[glassName_c][0]);
                //          $('#c_glass_d').val(product_name_price[glassName_d][0]);			
            }
            $("div.glass_b").text($('[name="face_length_b"]').find('option:selected').text());
        } else {
            $("div.glass_b").text("B");
        }
        if (face_lenght_c_obj.value != "select") {
            $('#c_glass_c_val').val($('[name="face_length_c"]').find('option:selected').text());
            if (flange_covers_obj.value == "yes") {
                // $('#c_glass_a_light').val(product_name_price[light_a][0]);
                //       			$('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                //       			$('#c_glass_b_light').val(product_name_price[light_b][0]);
                //       			$('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                $('#c_glass_c_light').val(product_name_price[light_c][0]);
                $('#c_glass_c_val_light').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                // $('#c_glass_d_light').val(product_name_price[light_d][0]);
                //    			$('#c_glass_d_val_light').val(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
            }
            if (glassName_c != '') {
                // $('#c_glass_a').val(product_name_price[glassName_a][0]);
                // $('#c_glass_b').val(product_name_price[glassName_b][0]);
                $('#c_glass_c').val(product_name_price[glassName_c][0]);
                // $('#c_glass_d').val(product_name_price[glassName_d][0]);			
            }
            $("div.glass_c").text($('[name="face_length_c"]').find('option:selected').text());
        } else {
            $("div.glass_c").text("C");
        }
        if (face_lenght_d_obj.value != "select") {
            $('#c_glass_d_val').val($('[name="face_length_d"]').find('option:selected').text());
            if (flange_covers_obj.value == "yes") {
                // $('#c_glass_a_light').val(product_name_price[light_a][0]);
                //       			$('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                //       			$('#c_glass_b_light').val(product_name_price[light_b][0]);
                //       			$('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                // 			$('#c_glass_c_light').val(product_name_price[light_c][0]);
                //       			$('#c_glass_c_val_light').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                $('#c_glass_d_light').val(product_name_price[light_d][0]);
                $('#c_glass_d_val_light').val(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
            }
            if (glassName_d != '') {
                // $('#c_glass_a').val(product_name_price[glassName_a][0]);
                // $('#c_glass_b').val(product_name_price[glassName_b][0]);
                // $('#c_glass_c').val(product_name_price[glassName_c][0]);
                $('#c_glass_d').val(product_name_price[glassName_d][0]);
            }
            $("div.glass_d").text($('[name="face_length_d"]').find('option:selected').text());
        } else {
            $("div.glass_d").text("D");
        }
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
        redlineheight1 = 180;
        redlineheight2 = 177;
        redlineheight3 = 206;
        redlineheight4 = 402;
        redlineverticle = 308;
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
        redlineheight1 = 204;
        redlineheight2 = 205;
        redlineheight3 = 230;
        redlineheight4 = 427;
        redlineverticle = 333;
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
        redlineheight1 = 228;
        redlineheight2 = 225;
        redlineheight3 = 255;
        redlineheight4 = 450;
        redlineverticle = 356;
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
        redlineheight1 = 252;
        redlineheight2 = 255;
        redlineheight3 = 280;
        redlineheight4 = 475;
        redlineverticle = 381;
    }
    t3 = t3 - 31;
    h2 = h2 + 30
    document.getElementById("products_ids").innerHTML = str;
    document.getElementById("left-post").innerHTML = leftPostPrice + ".00";
    document.getElementById("right-post").innerHTML = rightPostPrice + ".00";
    document.getElementById("trasition-post").innerHTML = t_post_price + ".00";
    document.getElementById("face-glass").innerHTML = glassPrice + ".00";
    document.getElementById("total").innerHTML = "$&nbsp;" + totalPrice + ".00";
    document.getElementById("flange-covers").innerHTML = flangeCoverssPrice + ".00";
    document.getElementById("flange-cover").innerHTML = flangeCoversPrice + ".00";
    // document.getElementById("flange-cover2").innerHTML=flangeCoversPrice2+".00"; 
    document.getElementById("left-Panel").innerHTML = leftEndPanelPrice + ".00";
    document.getElementById("right-panel").innerHTML = rightEndPanelPrice + ".00";

    if ($("#end_options").val() != "select") {
        $("#endpan_err").attr("src", "img/iconCheckOn.gif");
    } else {
        $("#endpan_err").attr("src", "img/iconCheckOff.gif");
    }
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
        var foura = fourb = fourc = fourd = false;
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
        if (foura && fourb) {
            four = true;
            //$("#froast").css("display","");
        } else {
            //$("#froast").css("display","none");
        }
    } else if (type_obj.value == "3BAY") {
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
        if (foura && fourb && fourc) {
            four = true;
            //$("#froast").css("display","");
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
            //$("#froast").css("display","");
            four = true;
        } else {
            //$("#froast").css("display","none");
        }
    }
    if (flange_covers_obj.value == "select") {
        $("#light_err").attr("src", "img/iconCheckOff.gif");
        five = false;
    } else {
        $("#light_err").attr("src", "img/iconCheckOn.gif");
        five = true;
    }
    if (flange_covers_obj2.value == "select") {
        $("#light_br_err").attr("src", "img/iconCheckOff.gif");
        six = false;
    } else {
        $("#light_br_err").attr("src", "img/iconCheckOn.gif");
        six = true;
    }


    if (flange_coverss_obj.value == "select") {
        $("#flange_err").attr("src", "img/iconCheckOff.gif");
        five = false;
    } else {
        $("#flange_err").attr("src", "img/iconCheckOn.gif");
        five = true;
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
    if (category_name == "ORBIT360") {
        six = true;
    }
    if (zero && one && two && four && five && six) {
        // $("#add").removeAttr("disabled");
        // $("#add").css("opacity","1");
    } else {
        // $("#add").css("opacity","0.3");
        // $("#add").attr("disabled","disabled");
    }
}

function show_lightbar_pupup(form) {

    var lightbarss = form.flange_covers.value;

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

function finishImage(form, image) {
    foldername = getProductFolderName("ORBIT360");
    if (image != "") {
        imageName = image;
    }

    cross = '<input type="button" onclick="getPriceOfProduct(this.form);" style="margin: 0 4px;position: absolute;right: -615px;top: -160px;width: 20px;z-index: 1000000;" value="X" class="rounded-corner-image">'

    image_string = '<img src="images/' + imageName + '" style="width:640px;height:480px;">';

    document.getElementById('additional_image').innerHTML = image_string;
    document.getElementById('rott').innerHTML = cross;
}

function getProductFolderName(productname) {
    foldername = "";
    switch (productname) {
        case 'ORBIT360':
            {
                foldername = "ORBIT360";
                break;
            }
        case 'ORBIT360':
            {
                foldername = "ORBIT360";
                break;
            }
    }
    return foldername;
}

function getVedio() {
    str = '<video id="example_video_1" class="video-js" width="600" height="480" controls="controls" preload="auto" poster="pic.jpg" autoplay ><source src="images/flang.mp4"' + " type='video/mp4; codecs=" + '"avc1.42E01E, mp4a.40.2"' + ' /><source src="images/flang.webm"' + " type='video/webm; codecs=" + '"vp8, vorbis"' + ' /><source src="images/flang.ogv"' + " type='video/ogg; codecs=" + '"theora, vorbis"' + ' /><object id="flash_fallback_1" class="vjs-flash-fallback" width="640" height="264" type="application/x-shockwave-flash" data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf"><param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" /><param name="allowfullscreen" value="true" /><param name="flashvars" value=' + "config={" + '"playlist":["pic.jpg", {"url": "images/flang.mp4","autoPlay":false,"autoBuffering":true}]}' + ' /><img src="pic.jpg" width="640" height="480" alt="Poster Image" title="No video playback capabilities." /></object></video>';
    document.getElementById('additional_image').innerHTML = str;
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

$('.item .delete').click(function() {

    var elem = $(this).closest('.item');

    $.confirm({


        'title': 'Confirmation',
        'message': $msg,
        'buttons': {
            'Proceed': {
                'class': 'blue',
                'action': function() {
                    my_facelengt_select = "";
                    my_facelengt_select += '<select name="' + custom.attr("name") + '" id="' + custom.attr("name") + '" onchange="getPriceOfProduct(this.form);" >';
                    //	my_facelengt_simple_select+='<select name="face_length" onchange="getPriceOfProduct(this.form);" >';
                    var myArray = new Array();
                    var i = 1;
                    $('[name="' + custom.attr("name") + '"] > option').each(function() {

                        if ($(this).val() != 'custom') {
                            myArray[i] = $(this).val();
                            i++;
                        }
                    });

                    var j = 0;
                    for (i = 8; i < myArray[2]; i++) {

                        //my_facelengt_select+='<option value="'+myArray[2]+'">'+i+'"</option>';
                        //my_facelengt_select+='<option value="'+myArray[2]+'">'+i+'-1/4'+'"</option>';
                        //my_facelengt_select+='<option value="'+myArray[2]+'">'+i+'-1/2'+'"</option>';
                        //my_facelengt_select+='<option value="'+myArray[2]+'">'+i+'-3/4'+'"</option>';
                        j = i;
                    }



                    for (i = 1; i < myArray.length - 1; i++) {
                        for (j = myArray[i]; j < myArray[i + 1]; j++) {
                            if (j > myArray[i]) {
                                //	my_facelengt_select+='<option value="'+myArray[i+1]+'">'+j+'"</option>';
                            } else {
                                //	my_facelengt_select+='<option value="'+myArray[i]+'">'+j+'"</option>';	
                            }
                            //my_facelengt_select+='<option value="'+myArray[i+1]+'">'+j+'-1/4'+'"</option>';
                            //my_facelengt_select+='<option value="'+myArray[i+1]+'">'+j+'-1/2'+'"</option>';
                            //my_facelengt_select+='<option value="'+myArray[i+1]+'">'+j+'-3/4'+'"</option>';
                        }
                    }


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
                    my_facelengt_select += '<option value="48">42-1/4"</option>';
                    my_facelengt_select += '<option value="48">42-1/2"</option>';
                    my_facelengt_select += '<option value="48">42-3/4"</option>';
                    my_facelengt_select += '<option value="48">43"</option>';
                    my_facelengt_select += '<option value="48">43-1/4"</option>';
                    my_facelengt_select += '<option value="48">43-1/2"</option>';
                    my_facelengt_select += '<option value="48">43-3/4"</option>';
                    my_facelengt_select += '<option value="48">44"</option>';
                    my_facelengt_select += '<option value="48">44-1/4"</option>';
                    my_facelengt_select += '<option value="48">44-1/2"</option>';
                    my_facelengt_select += '<option value="48">44-3/4"</option>';
                    my_facelengt_select += '<option value="48">45"</option>';
                    my_facelengt_select += '<option value="48">45-1/4"</option>';
                    my_facelengt_select += '<option value="48">45-1/2"</option>';
                    my_facelengt_select += '<option value="48">45-3/4"</option>';
                    my_facelengt_select += '<option value="48">46"</option>';
                    my_facelengt_select += '<option value="48">46-1/4"</option>';
                    my_facelengt_select += '<option value="48">46-1/2"</option>';
                    my_facelengt_select += '<option value="48">46-3/4"</option>';
                    my_facelengt_select += '<option value="48">47"</option>';
                    my_facelengt_select += '<option value="48">47-1/4"</option>';
                    my_facelengt_select += '<option value="48">47-1/2"</option>';
                    my_facelengt_select += '<option value="48">47-3/4"</option>';
                    my_facelengt_select += '<option value="54">48"</option>';
                    my_facelengt_select += '<option value="54">48-1/4"</option>';
                    my_facelengt_select += '<option value="54">48-1/2"</option>';
                    my_facelengt_select += '<option value="54">48-3/4"</option>';
                    my_facelengt_select += '<option value="54">49"</option>';
                    my_facelengt_select += '<option value="54">49-1/4"</option>';
                    my_facelengt_select += '<option value="54">49-1/2"</option>';
                    my_facelengt_select += '<option value="54">49-3/4"</option>';
                    my_facelengt_select += '<option value="54">50"</option>';
                    my_facelengt_select += '<option value="54">50-1/4"</option>';
                    my_facelengt_select += '<option value="54">50-1/2"</option>';
                    my_facelengt_select += '<option value="54">50-3/4"</option>';
                    my_facelengt_select += '<option value="54">51"</option>';
                    my_facelengt_select += '<option value="54">51-1/4"</option>';
                    my_facelengt_select += '<option value="54">51-1/2"</option>';
                    my_facelengt_select += '<option value="54">51-3/4"</option>';
                    my_facelengt_select += '<option value="54">52"</option>';
                    my_facelengt_select += '<option value="54">52-1/4"</option>';
                    my_facelengt_select += '<option value="54">52-1/2"</option>';
                    my_facelengt_select += '<option value="54">52-3/4"</option>';
                    my_facelengt_select += '<option value="54">53"</option>';
                    my_facelengt_select += '<option value="54">53-1/4"</option>';
                    my_facelengt_select += '<option value="54">53-1/2"</option>';
                    my_facelengt_select += '<option value="54">53-3/4"</option>';
                    my_facelengt_select += '<option value="54">54"</option>';
                    my_facelengt_select += '<option value="60">54-1/4"</option>';
                    my_facelengt_select += '<option value="60">54-1/2"</option>';
                    my_facelengt_select += '<option value="60">54-3/4"</option>';
                    my_facelengt_select += '<option value="60">55"</option>';
                    my_facelengt_select += '<option value="60">55-1/4"</option>';
                    my_facelengt_select += '<option value="60">55-1/2"</option>';
                    my_facelengt_select += '<option value="60">55-3/4"</option>';
                    my_facelengt_select += '<option value="60">56"</option>';
                    my_facelengt_select += '<option value="60">56-1/4"</option>';
                    my_facelengt_select += '<option value="60">56-1/2"</option>';
                    my_facelengt_select += '<option value="60">56-3/4"</option>';
                    my_facelengt_select += '<option value="60">57"</option>';
                    my_facelengt_select += '<option value="60">57-1/4"</option>';
                    my_facelengt_select += '<option value="60">57-1/2"</option>';
                    my_facelengt_select += '<option value="60">57-3/4"</option>';
                    my_facelengt_select += '<option value="60">58"</option>';
                    my_facelengt_select += '<option value="60">58-1/4"</option>';
                    my_facelengt_select += '<option value="60">58-1/2"</option>';
                    my_facelengt_select += '<option value="60">58-3/4"</option>';
                    my_facelengt_select += '<option value="60">59"</option>';
                    my_facelengt_select += '<option value="60">59-1/4"</option>';
                    my_facelengt_select += '<option value="60">59-1/2"</option>';
                    my_facelengt_select += '<option value="60">59-3/4"</option>';
                    my_facelengt_select += '<option value="66">60"</option>';
                    my_facelengt_select += '<option value="66">60-1/4"</option>';
                    my_facelengt_select += '<option value="66">60-1/2"</option>';
                    my_facelengt_select += '<option value="66">60-3/4"</option>';
                    my_facelengt_select += '<option value="66">61"</option>';
                    my_facelengt_select += '<option value="66">61-1/4"</option>';
                    my_facelengt_select += '<option value="66">61-1/2"</option>';
                    my_facelengt_select += '<option value="66">61-3/4"</option>';
                    my_facelengt_select += '<option value="66">62"</option>';
                    my_facelengt_select += '<option value="66">62-1/4"</option>';
                    my_facelengt_select += '<option value="66">62-1/2"</option>';
                    my_facelengt_select += '<option value="66">62-3/4"</option>';
                    my_facelengt_select += '<option value="66">63"</option>';
                    my_facelengt_select += '<option value="66">63-1/4"</option>';
                    my_facelengt_select += '<option value="66">63-1/2"</option>';
                    my_facelengt_select += '<option value="66">63-3/4"</option>';
                    my_facelengt_select += '<option value="66">64"</option>';
                    my_facelengt_select += '<option value="66">64-1/4"</option>';
                    my_facelengt_select += '<option value="66">64-1/2"</option>';
                    my_facelengt_select += '<option value="66">64-3/4"</option>';
                    my_facelengt_select += '<option value="66">65"</option>';
                    my_facelengt_select += '<option value="66">65-1/4"</option>';
                    my_facelengt_select += '<option value="66">65-1/2"</option>';
                    my_facelengt_select += '<option value="66">65-3/4"</option>';
                    my_facelengt_select += '<option value="' + myArray[i] + '">' + myArray[i] + '"</option>';



                    $('#' + custom.attr("name") + '_span').html(my_facelengt_select);

                    $('#is_custom').val('Yes');
                    getPriceOfProduct(document.forms['cart_quantity']);

                }
            },
            'Cancel': {
                'class': 'gray',
                'action': function() {
                        var str = custom.attr("name");
                        $('select[name=' + str + ']').val("select");
                        getPriceOfProduct(document.forms['cart_quantity']);
                        return false;

                    } // Nothing to do in this case. You can as well omit the action property.

            }
        }
    });

});

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
    ur = window.location.href;
    ur = ur.split("?");
    tp = ur[1].split("&")
    var check = true;
    var x = '<center><img src="img/addToCartWindow.jpg" width="100%"></center>';
    x += '<ul style="margin-left:30px;">';




    if (form.type.value == "1BAY") {
        if (form.face_length.value == "select") {
            x += '<li>Face Length A <span style="color:red">?</span></li>';
            check = false;
        }
    } else if (form.type.value == "2BAY") {
        if (form.face_length_a.value == "select") {
            x += '<li>Face Length A <span style="color:red">?</span></li>';
            check = false;
        }
        if (form.face_length_b.value == "select") {
            x += '<li>Face Length B <span style="color:red">?</span></li>';
            check = false;
        }

    } else if (form.type.value == "3BAY") {
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

    if (form.end_options.value == "select") {
        x += '<li>End Panel <span style="color:red">?</span></li>';
        check = false;
    }

    if (form.flange_coverss.value == "select") {
        x += '<li>Flange <span style="color:red">?</span></li>';
        check = false;
    }

    if (form.flange_covers.value == "select") {
        x += '<li>Light Bar <span style="color:red">?</span></li>';
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
        //javascript:document.forms['cart_quantity'].submit();
        return true;
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