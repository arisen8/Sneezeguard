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
            $("input#glass-face").val(4);
            zero = false;
            getPriceOfProduct(document.forms['cart_quantity']);
        }
    });
    getPriceOfProduct(document.forms['cart_quantity']);

    var type = this.forms.cart_quantity.type.value;
    if (type == "1BAY") {

    } else if (type == "2BAY" || type == "2BAYEXT") {
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

$(document).ready(function() {
    show_panel_type(this.form);
});
  function myFunction2(form){
        if(myFunction(document.forms['cart_quantity'])){
            var bay=form.type.value;
            var var1=var2=var3=var4=var5=var6=var7=var8=flange="";
		
		flange=form.flang_cover.options[form.flang_cover.selectedIndex].text;
            if(bay=="1BAY"){
                if(form.face_length!==undefined){
                    var1=form.face_length.options[form.face_length.selectedIndex].text;
                }else{
                    var1=form.face_length_a.options[form.face_length_a.selectedIndex].text;
                }
            }else if(bay=="2BAY" || bay=='2BAYEXT'){
                var1=form.face_length_a.options[form.face_length_a.selectedIndex].text;
                var2=form.face_length_b.options[form.face_length_b.selectedIndex].text;
            }else if(bay=="3BAY"){
                var1=form.face_length_a.options[form.face_length_a.selectedIndex].text;
                var2=form.face_length_b.options[form.face_length_b.selectedIndex].text;
                var3=form.face_length_c.options[form.face_length_c.selectedIndex].text;
            }else if(bay=="4BAY"){
                var1=form.face_length_a.options[form.face_length_a.selectedIndex].text;
                var2=form.face_length_b.options[form.face_length_b.selectedIndex].text;
                var3=form.face_length_c.options[form.face_length_c.selectedIndex].text;
                var4=form.face_length_d.options[form.face_length_d.selectedIndex].text;
            }
    
     
            end=$("input#glass-face").val();
            $.ajax({
                type: "POST",
                url: "includes/script1.php",
                data: { 
                    mod:category_name, bay:bay, face1:var1, face2:var2,face3:var3,face4:var4,end:end,tot:tot1,osc:osc,im_id:im_id,sv:"save",img:img_ajx
                },
				//alert(data);
                cache: false,
                contentType: "application/x-www-form-urlencoded",
                success: function(data, textStatus, request){
                    //tb_show("","pop1.php?KeepThis=true&TB_iframe=true&height=500&width=600","");
                  //  $("form[name='cart_quantity']").submit();
				
					
				$("form[name='cart_quantity']").submit();		
				
				//}
				
				
				
					
					
					
                },
                error: function (request, textStatus, errorThrown) {
                    alert("some error");
                }
            });
            return false;
        }else{
            return false;
        }
            

    };
function myFunction(form) {
    var check = ck = true;
    var x = '<center><img src="img/addToCartWindow.jpg" width="100%"></center>';
    x += '<ul style="margin-left:30px;">';
    //if(form.right_length.value=="select"){
    //    x+='<li>Countertop Width <span style="color:red">?</span></li>';
    //   check=false;
    // }
    if (form.type.value == "1BAY") {
        if (form.face_length.value == "No Glass") {
            ck = false;
        }
        if (form.face_length.value == "select") {
            x += '<li>Face Length A <span style="color:red">?</span></li>';
            check = false;
        }
    } else if (form.type.value == "2BAY" || form.type.value == '2BAYEXT') {
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
    if (form.flang_cover.value == "select") {
        x += '<li>Flange Covers <span style="color:red">?</span></li>';
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
    //if(form.supportpost.value=="select"){
    //  x+='<li>Support Post <span style="color:red">?</span></li>';
    // check=false;
    //}
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
        if (bay_value == '2BAY' || bay_value == '2BAYEXT') {
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

function makeAdjustable(form) {

    if (form.adjustable.value == "yes") {
        form.rounded_corners.value = "round";
        form.rounded_corners.selcted = "Rounded";
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
                                form.rounded_corners.selected = "Squared";
                                form.rounded_corners.disabled = false;
                                getPriceOfProduct(document.forms['cart_quantity']);
                            } // Nothing to do in this case. You can as well omit the action property.

                    }
                }
            });



        });
    } else {
        form.rounded_corners.value = "squared";
        form.rounded_corners.selcted = "Squared";
        form.rounded_corners.disabled = false;
    }

}

function finishImage(form, image) {
    category_name = "ES90";
    foldername = getProductFolderName("ES90");
    if (image != "") {
        imageName = image;
    }
    cross = '<input type="button" onclick="getPriceOfProduct(this.form);" style="margin: 0 4px;position: absolute;right: -640px;top: -220px;width: 20px;z-index: 1000000;" value="X" class="rounded-corner-image">'
    image_string = '<img src="images/' + imageName + '" style="width:568px;height:453px">';

    document.getElementById('additional_image').innerHTML = image_string;
    document.getElementById('ro').innerHTML = cross;
}

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

            $("tr#right_length").html(leftstr);

        } else if ($(this).text() == "Right Closed End Panel" || rght) {

            $("input#glass-face").val(2);

            $("tr#left_lenght").html("<td></td>");

            $("tr#right_lenght").html(rightstr);



        } else if ($(this).text() == "Left Closed End Panel" || lft) {

            $("tr#right_lenght").html("<td></td>");

            $("tr#right_lenght").html(rightstr);

            $("input#glass-face").val(3);

        } else if ($(this).text() == "No Closed End Panels" || noe) {

            $("tr#right_lenght").html("<td></td>");

            $("tr#left_lenght").html("<td></td>");

            $("tr#right_lenght").html(rightstr);

            $("input#glass-face").val(4);

        }

        $("select").removeAttr("disabled");

        $("input").removeAttr("disabled");
        if ($(".makeadjustablecheck31").val() == 1) {
            $("#round_check").attr("disabled", true); //making disable the checkbox.. .. ..
        }

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

function show_panel_type(form) {
    $("input#glass-face").val(4);
    getPriceOfProduct(document.forms['cart_quantity']);
    var endpanel_val = $("#end_options option:selected").text();
    //alert(endpanel_type);

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


    //$("tr#left_lenght").css('display','none');
    // $("tr#right_lenght").css('display','none');	

    getPriceOfProduct(document.forms['cart_quantity']);



}

$(document).ready(function() {
    var custom;
    var my_facelengt_select = "";
    $msg = 'Glass for the selected unit currently has a production time of<font color="red"> 5-8 working days.</font>  Posts can be shipped within 24 hours.';
    $('[name="face_length"]').change(function() {
        if ($(this).val() == 'custom') {
            custom = $(this);
            $('.delete').click();
        }
    });

    $('[name="face_length_a"]').change(function() {
        if ($(this).val() == 'custom') {
            custom = $(this);
            $('.delete').click();
        }
    });

    $('[name="face_length_b"]').change(function() {
        if ($(this).val() == 'custom') {
            custom = $(this);
            $('.delete').click();
        }
    });

    $('[name="face_length_c"]').change(function() {
        if ($(this).val() == 'custom') {
            custom = $(this);
            $('.delete').click();
        }
    });

    $('[name="face_length_d"]').change(function() {
        if ($(this).val() == 'custom') {
            custom = $(this);
            $('.delete').click();
        }
    });

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
                            my_facelengt_select += '<option value="' + myArray[1] + '">"' + i + '"</option>';
                            my_facelengt_select += '<option value="' + myArray[1] + '">"' + i + '-1/4' + '"</option>';
                            my_facelengt_select += '<option value="' + myArray[1] + '">"' + i + '-1/2' + '"</option>';
                            my_facelengt_select += '<option value="' + myArray[1] + '">"' + i + '-3/4' + '"</option>';
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
    });
});

function getPriceOfProductES90(form, osc, im_id) {
    t1 = 0;
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
    topGlass_a = "";
    topGlass_b = "";
    topGlass_c = "";
    topGlass_d = "";
    leftEndPost = "";
    rightEndPost = "";
    centerPost = "";
    leftEndPanel = "";
    rightEndPanel = "";
    flangeCovers = ""; //Use For Light
    flangCovers = "";
    supportPost = "";
    flageCovers2 = ""; //Use For Light Bracket
    rounded_corners = ""; //USE FOR roundes
    light_a = "";
    light_b = "";
    light_c = "";
    light_d = "";
    tube_a = "";
    tube_b = "";
    tube_c = "";
    tube_d = "";
    adjustable_name = "ES90 Adjustable Brackets (Pairs)";
    make_adjustable = form.adjustable.value;
    adjust_price = 0;
    facePrice = 0;
    facePrice_a = 0;
    facePrice_b = 0;
    facePrice_c = 0;
    facePrice_d = 0;
    topGlassPrice_a = 0;
    topGlassPrice_b = 0;
    topGlassPrice_c = 0;
    topGlassPrice_d = 0;
    topGlassPrice = 0;
    facePrice_l = 0;
    facePrice_r = 0;
    leftPostPrice = 0;
    rightPostPrice = 0;
    leftEndPanelPrice = 0;
    rightEndPanelPrice = 0;
    centerPostPrice = 0;
    anglePostPrice = 0;
    flangeCoversPrice = 0; //Use for Light
    flangeCoversPrice3 = 0; //Use for Light tube
    flangCoversPrice = 0;
    supportPostPrice = 0;
    flangeCoversPrice2 = 0; //Use for Light Bracket
    str = "";
    category_name = "ES90";
    right_lenght_obj = form.right_length;
    left_lenght_obj = form.right_length;
    post_height_obj = form.post_height;
    face_lenght_obj = form.face_length;
    face_lenght_a_obj = form.face_length_a;
    face_lenght_b_obj = form.face_length_b;
    face_lenght_c_obj = form.face_length_c;
    face_lenght_d_obj = form.face_length_d;
    type_obj = form.type;
    glass_face_obj = form.glass_face;
    top_glass_obj = form.top_glass;
    flange_covers_obj = form.flange_covers;
    flangeUnderCounter = "";
    flangeUnderCounterPrice = 0;
    flange_under_counter_obj = form.flange_under_counter;
    flang_covers_obj = form.flang_cover;
    supportpost_obj = form.supportpost;
    flange_covers_obj2 = form.flange_covers_2; //use Form Light Bracket
    rounded_corners_obj = form.rounded_corners; //use for roundedcorner
    choose_finish_obj = form.choose_finish;
    foldername = getProductFolderName(category_name) + type_obj.value;
    c_name = "ES90";
    if (type_obj.value == '2BAYEXT') {
        leftEndPost = 'ES90EXTLP' + choose_finish_obj.value;
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[leftEndPost][0] + '" />';
        leftPostPrice = parseFloat(product_name_price[leftEndPost][1]);
        rightEndPost = 'ES90EXTRP' + choose_finish_obj.value;
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[rightEndPost][0] + '" />';
        rightPostPrice = parseFloat(product_name_price[rightEndPost][1]);
        if (type_obj.value != "1BAY") {
            centerPost = 'ES90EXTCP' + choose_finish_obj.value;
        }

    } else {
        leftEndPost = 'ES90LP' + choose_finish_obj.value;
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[leftEndPost][0] + '" />';
        leftPostPrice = parseFloat(product_name_price[leftEndPost][1]);
        rightEndPost = 'ES90RP' + choose_finish_obj.value;
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[rightEndPost][0] + '" />';
        rightPostPrice = parseFloat(product_name_price[rightEndPost][1]);
        if (type_obj.value != "1BAY") {
            centerPost = 'ES90CP' + choose_finish_obj.value;
        }

    }
    if (make_adjustable == "yes") {
        if (type_obj.value == "1BAY") {
            adjust_price = 0;
        } else if (type_obj.value == "2BAY" || type_obj.value == '2BAYEXT') {
            adjust_price = 0;
        } else if (type_obj.value == "3BAY") {
            adjust_price = 0;
        } else {
            adjust_price = 0;
        }
    }
    if (glass_face_obj.value == 1) {
        leftEndPanel = "ES90-g" + "LEP";
        rightEndPanel = "ES90-g" + "REP";
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[leftEndPanel][0] + '" />';
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[rightEndPanel][0] + '" />';
        leftEndPanelPrice = parseFloat(product_name_price[leftEndPanel][1]);
        rightEndPanelPrice = parseFloat(product_name_price[rightEndPanel][1]);
        imageName = "BOTHENDS";
    } else if (glass_face_obj.value == 2) {
        leftEndPanel = "";
        rightEndPanel = "ES90-g" + "REP";
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[rightEndPanel][0] + '" />';
        leftEndPanelPrice = 0;
        rightEndPanelPrice = parseFloat(product_name_price[rightEndPanel][1]);
        imageName = "RIGHTEND";
    } else if (glass_face_obj.value == 3) {
        leftEndPanel = "ES90-g" + "LEP";
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
    if (type_obj.value == "4BAY") {
        if (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass' || face_lenght_d_obj.value == 'No Glass') {
            form.flange_covers.value = "no";
            form.flange_covers.selected = "No";
            form.flange_covers.disabled = true;
            flag = 0;
        } else {
            form.flange_covers.disabled = false;
            if (face_lenght_a_obj.value != "select") {
                glassName_a = "ES90-" + face_lenght_a_obj.value + "GL-RND";
                if (rounded_corners_obj.value == "round") {
                    glassName_a = "ES90-" + face_lenght_a_obj.value + "GL-RND";
                }
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_a][0] + '" />';
                facePrice_a = parseFloat(product_name_price[glassName_a][1]);
                topGlass_a = "ES90-" + face_lenght_a_obj.value + "TG-RND";
                if (rounded_corners_obj.value == "round") {
                    topGlass_a = "ES90-" + face_lenght_a_obj.value + "TG-RND";
                }
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[topGlass_a][0] + '" />';
                topGlassPrice_a = parseFloat(product_name_price[topGlass_a][1]);
            }
            if (face_lenght_b_obj.value != "select") {
                glassName_b = "ES90-" + face_lenght_b_obj.value + "GL-RND";
                form.flange_covers.disabled = false;
                if (rounded_corners_obj.value == "round") {
                    glassName_b = "ES90-" + face_lenght_b_obj.value + "GL-RND";
                }
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_b][0] + '" />';
                facePrice_b = parseFloat(product_name_price[glassName_b][1]);
                topGlass_b = "ES90-" + face_lenght_b_obj.value + "TG-RND";
                if (rounded_corners_obj.value == "round") {
                    topGlass_b = "ES90-" + face_lenght_b_obj.value + "TG-RND";
                }
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[topGlass_b][0] + '" />';
                topGlassPrice_b = parseFloat(product_name_price[topGlass_b][1]);
            }
            if (face_lenght_c_obj.value != "select") {
                glassName_c = "ES90-" + face_lenght_c_obj.value + "GL-RND";
                form.flange_covers.disabled = false;
                if (rounded_corners_obj.value == "round") {
                    glassName_c = "ES90-" + face_lenght_c_obj.value + "GL-RND";
                }
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_c][0] + '" />';
                facePrice_c = parseFloat(product_name_price[glassName_c][1]);
                topGlass_c = "ES90-" + face_lenght_c_obj.value + "TG-RND";
                if (rounded_corners_obj.value == "round") {
                    topGlass_c = "ES90-" + face_lenght_c_obj.value + "TG-RND";
                }
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[topGlass_c][0] + '" />';
                topGlassPrice_c = parseFloat(product_name_price[topGlass_c][1]);
            }
            if (face_lenght_d_obj.value != "select") {
                glassName_d = "ES90-" + face_lenght_d_obj.value + "GL-RND";
                form.flange_covers.disabled = false;
                if (rounded_corners_obj.value == "round") {
                    glassName_d = "ES90-" + face_lenght_d_obj.value + "GL-RND";
                }
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_d][0] + '" />';

                facePrice_d = parseFloat(product_name_price[glassName_d][1]);

                topGlass_d = "ES90-" + face_lenght_d_obj.value + "TG-RND";
                if (rounded_corners_obj.value == "round") {
                    topGlass_d = "ES90-" + face_lenght_d_obj.value + "TG-RND";
                }
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[topGlass_d][0] + '" />';
                topGlassPrice_d = parseFloat(product_name_price[topGlass_d][1]);

            }
        }
        if (centerPost != "") {
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[centerPost][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[centerPost][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[centerPost][0] + '" />';
            centerPostPrice = parseFloat(product_name_price[centerPost][1]) + parseFloat(product_name_price[centerPost][1]) + parseFloat(product_name_price[centerPost][1]);
        }

    } else if (type_obj.value == "3BAY") {

        if (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass') {
            flag = 0;
            form.flange_covers.value = "no";
            form.flange_covers.selected = "No";
            form.flange_covers.disabled = true;
        } else {
            form.flange_covers.disabled = false;
            if (face_lenght_a_obj.value != "select") {
                glassName_a = "ES90-" + face_lenght_a_obj.value + "GL-RND";
                if (rounded_corners_obj.value == "round") {
                    glassName_a = "ES90-" + face_lenght_a_obj.value + "GL-RND";
                }
                //alert(face_lenght_a_obj);
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_a][0] + '" />';
                //str+='<input type="hidden" name="products_id[]" value="'+product_name_price[glassName_a][0]+'" />';
                facePrice_a = parseFloat(product_name_price[glassName_a][1]);
                ///if(left_lenght_obj.value!="select"){
                topGlass_a = "ES90-" + face_lenght_a_obj.value + "TG-RND";
                if (rounded_corners_obj.value == "round") {
                    topGlass_a = "ES90-" + face_lenght_a_obj.value + "TG-RND";
                }
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[topGlass_a][0] + '" />';
                topGlassPrice_a = parseFloat(product_name_price[topGlass_a][1]);
                //}
            }
            if (face_lenght_b_obj.value != "select") {
                glassName_b = "ES90-" + face_lenght_b_obj.value + "GL-RND";
                form.flange_covers.disabled = false;
                if (rounded_corners_obj.value == "round") {
                    glassName_b = "ES90-" + face_lenght_b_obj.value + "GL-RND";
                }
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_b][0] + '" />';
                //str+='<input type="hidden" name="products_id[]" value="'+product_name_price[glassName_b][0]+'" />';
                facePrice_b = parseFloat(product_name_price[glassName_b][1]);
                //if(left_lenght_obj.value!="select"){
                topGlass_b = "ES90-" + face_lenght_b_obj.value + "TG-RND";
                if (rounded_corners_obj.value == "round") {
                    topGlass_b = "ES90-" + face_lenght_b_obj.value + "TG-RND";
                }
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[topGlass_b][0] + '" />';
                topGlassPrice_b = parseFloat(product_name_price[topGlass_b][1]);
                //}

            }
            if (face_lenght_c_obj.value != "select") {
                glassName_c = "ES90-" + face_lenght_c_obj.value + "GL-RND";
                form.flange_covers.disabled = false;
                if (rounded_corners_obj.value == "round") {
                    glassName_c = "ES90-" + face_lenght_c_obj.value + "GL-RND";
                }
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_c][0] + '" />';
                //str+='<input type="hidden" name="products_id[]" value="'+product_name_price[glassName_c][0]+'" />';
                facePrice_c = parseFloat(product_name_price[glassName_c][1]);
                //if(left_lenght_obj.value!="select"){
                topGlass_c = "ES90-" + face_lenght_c_obj.value + "TG-RND";
                if (rounded_corners_obj.value == "round") {
                    topGlass_c = "ES90-" + face_lenght_c_obj.value + "TG-RND";
                }
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[topGlass_c][0] + '" />';
                topGlassPrice_c = parseFloat(product_name_price[topGlass_c][1]);
                //}
            }
        }
        glassName_d = "";
        topGlass_d = "";
        if (centerPost != "") {
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[centerPost][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[centerPost][0] + '" />';
            centerPostPrice = parseFloat(product_name_price[centerPost][1]) + parseFloat(product_name_price[centerPost][1]);
        }
    } else if (type_obj.value == "2BAY" || type_obj.value == '2BAYEXT') {
        if (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass') {
            flag = 0;
            form.flange_covers.value = "no";
            form.flange_covers.selected = "No";
            form.flange_covers.disabled = true;
        } else {

            //alert(face_lenght_a_obj.value);
            form.flange_covers.disabled = false;
            if (face_lenght_a_obj.value != "select") {
                glassName_a = "ES90-" + face_lenght_a_obj.value + "GL-RND";
                if (rounded_corners_obj.value == "round") {
                    glassName_a = "ES90-" + face_lenght_a_obj.value + "GL-RND";
                }
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_a][0] + '" />';
                //str+='<input type="hidden" name="products_id[]" value="'+product_name_price[glassName_a][0]+'" />';
                facePrice_a = parseFloat(product_name_price[glassName_a][1]);
                //if(left_lenght_obj.value!="select"){
                topGlass_a = "ES90-" + face_lenght_a_obj.value + "TG-RND";
                if (rounded_corners_obj.value == "round") {
                    topGlass_a = "ES90-" + face_lenght_a_obj.value + "TG-RND";
                }
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[topGlass_a][0] + '" />';
                topGlassPrice_a = parseFloat(product_name_price[topGlass_a][1]);
                //}
            }
            if (face_lenght_b_obj.value != "select") {
                glassName_b = "ES90-" + face_lenght_b_obj.value + "GL-RND";
                if (rounded_corners_obj.value == "round") {
                    glassName_b = "ES90-" + face_lenght_b_obj.value + "GL-RND";
                }
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_b][0] + '" />';
                //str+='<input type="hidden" name="products_id[]" value="'+product_name_price[glassName_b][0]+'" />';
                facePrice_b = parseFloat(product_name_price[glassName_b][1]);
                //if(left_lenght_obj.value!="select"){
                topGlass_b = "ES90-" + face_lenght_b_obj.value + "TG-RND";
                if (rounded_corners_obj.value == "round") {
                    topGlass_b = "ES90-" + face_lenght_b_obj.value + "TG-RND";
                }
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[topGlass_b][0] + '" />';
                topGlassPrice_b = parseFloat(product_name_price[topGlass_b][1]);
                //}
            }
        }


        glassName_c = "";
        glassName_d = "";
        topGlass_c = "";
        topGlass_d = "";
        facePrice_c = 0;
        facePrice_d = 0;
        topGlassPrice_c = 0;
        topGlassPrice_d = 0;
        if (centerPost != "") {
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[centerPost][0] + '" />';
            centerPostPrice = parseFloat(product_name_price[centerPost][1]);
        }
    } else if (type_obj.value == "1BAY") {

        glassName_b = "";
        glassName_c = "";
        glassName_d = "";

        topGlass_b = "";
        topGlass_c = "";
        topGlass_d = "";
        if (face_lenght_obj.value != "select") {
            glassName_a = "ES90-" + face_lenght_obj.value + "GL";
            //if(rounded_corners_obj.value=="round"){
            glassName_a = glassName_a + "-RND";
            //}
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[glassName_a][0] + '" />';
            //str+='<input type="hidden" name="products_id[]" value="'+product_name_price[glassName_a][0]+'" />';
            facePrice_a = parseFloat(product_name_price[glassName_a][1]);
            //if(left_lenght_obj.value!="select"){
            topGlass_a = "ES90-" + face_lenght_obj.value + "TG";
            //if(rounded_corners_obj.value=="round"){
            topGlass_a = topGlass_a + "-RND";
            //}
            topGlassPrice_a = parseFloat(product_name_price[topGlass_a][1]);
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[topGlass_a][0] + '" />';
            //}
        }
        facePrice_b = 0;
        facePrice_c = 0;
        facePrice_d = 0;
        topGlassPrice_b = 0;
        topGlassPrice_c = 0;
        topGlassPrice_d = 0;
    }
    if (flange_covers_obj.value == "yes") {
        if (type_obj.value == "4BAY") {
            if (face_lenght_a_obj.value != "select") {
                light_a = "ES90-" + face_lenght_a_obj.value + "LYT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_a][0] + '" />';
                flangeCoversPrice += parseFloat(product_name_price[light_a][1]);
            }
            if (face_lenght_b_obj.value != "select") {
                light_b = "ES90-" + face_lenght_b_obj.value + "LYT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_b][0] + '" />';
                flangeCoversPrice += parseFloat(product_name_price[light_b][1]);
            }
            if (face_lenght_c_obj.value != "select") {
                light_c = "ES90-" + face_lenght_c_obj.value + "LYT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_c][0] + '" />';
                flangeCoversPrice += parseFloat(product_name_price[light_c][1]);
            }
            if (face_lenght_d_obj.value != "select") {
                light_d = "ES90-" + face_lenght_d_obj.value + "LYT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_d][0] + '" />';
                flangeCoversPrice += parseFloat(product_name_price[light_d][1]);
            }
            //alert(light_d);
        } else if (type_obj.value == "3BAY") {
            if (face_lenght_a_obj.value != "select") {
                light_a = "ES90-" + face_lenght_a_obj.value + "LYT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_a][0] + '" />';
                flangeCoversPrice += parseFloat(product_name_price[light_a][1]);
            }
            if (face_lenght_b_obj.value != "select") {
                light_b = "ES90-" + face_lenght_b_obj.value + "LYT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_b][0] + '" />';
                flangeCoversPrice += parseFloat(product_name_price[light_b][1]);
            }
            if (face_lenght_c_obj.value != "select") {
                light_c = "ES90-" + face_lenght_c_obj.value + "LYT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_c][0] + '" />';
                flangeCoversPrice += parseFloat(product_name_price[light_c][1]);
            }
        } else if (type_obj.value == "2BAY") {

            if (face_lenght_a_obj.value != "select") {
                light_a = "ES90-" + face_lenght_a_obj.value + "LYT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_a][0] + '" />';
                flangeCoversPrice += parseFloat(product_name_price[light_a][1]);
            }
            if (face_lenght_b_obj.value != "select") {
                light_b = "ES90-" + face_lenght_b_obj.value + "LYT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_b][0] + '" />';
                flangeCoversPrice += parseFloat(product_name_price[light_b][1]);
            }
        } else if (type_obj.value == '2BAYEXT') {

            if (face_lenght_a_obj.value != "select") {
                light_a = "ES90-" + face_lenght_a_obj.value + "LYTEXT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_a][0] + '" />';
                flangeCoversPrice += parseFloat(product_name_price[light_a][1]);
            }
            if (face_lenght_b_obj.value != "select") {
                light_b = "ES90-" + face_lenght_b_obj.value + "LYTEXT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_b][0] + '" />';
                flangeCoversPrice += parseFloat(product_name_price[light_b][1]);
            }
        } else {
            if (face_lenght_obj.value != "select") {
                light_a = "ES90-" + face_lenght_obj.value + "LYT";
                str += '<input type="hidden" name="products_id[]" value="' + product_name_price[light_a][0] + '" />';
                flangeCoversPrice += parseFloat(product_name_price[light_a][1]);
            }
            light_b = "";
            light_c = "";
            light_d = "";

        }


    }
    //else{
    if (type_obj.value == "4BAY") {
        if (face_lenght_a_obj.value != "select") {
            tube_a = "ES90-" + face_lenght_a_obj.value + "BACK HORIZONTAL TUBE";
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[tube_a][0] + '" />';
            flangeCoversPrice3 += parseFloat(product_name_price[tube_a][1]);
        }
        if (face_lenght_b_obj.value != "select") {
            tube_b = "ES90-" + face_lenght_b_obj.value + "BACK HORIZONTAL TUBE";
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[tube_b][0] + '" />';
            flangeCoversPrice3 += parseFloat(product_name_price[tube_b][1]);
        }
        if (face_lenght_c_obj.value != "select") {
            tube_c = "ES90-" + face_lenght_c_obj.value + "BACK HORIZONTAL TUBE";
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[tube_c][0] + '" />';
            flangeCoversPrice3 += parseFloat(product_name_price[tube_c][1]);
        }
        if (face_lenght_d_obj.value != "select") {
            tube_d = "ES90-" + face_lenght_d_obj.value + "BACK HORIZONTAL TUBE";
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[tube_d][0] + '" />';
            flangeCoversPrice3 += parseFloat(product_name_price[tube_d][1]);
        }
        //alert(tube_d);
    } else if (type_obj.value == "3BAY") {
        if (face_lenght_a_obj.value != "select") {
            tube_a = "ES90-" + face_lenght_a_obj.value + "BACK HORIZONTAL TUBE";
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[tube_a][0] + '" />';
            flangeCoversPrice3 += parseFloat(product_name_price[tube_a][1]);
        }
        if (face_lenght_b_obj.value != "select") {
            tube_b = "ES90-" + face_lenght_b_obj.value + "BACK HORIZONTAL TUBE";
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[tube_b][0] + '" />';
            flangeCoversPrice3 += parseFloat(product_name_price[tube_b][1]);
        }
        if (face_lenght_c_obj.value != "select") {
            tube_c = "ES90-" + face_lenght_c_obj.value + "BACK HORIZONTAL TUBE";
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[tube_c][0] + '" />';
            flangeCoversPrice3 += parseFloat(product_name_price[tube_c][1]);
        }
    } else if (type_obj.value == "2BAY" || type_obj.value == '2BAYEXT') {
        if (face_lenght_a_obj.value != "select") {
            tube_a = "ES90-" + face_lenght_a_obj.value + "BACK HORIZONTAL TUBE";
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[tube_a][0] + '" />';
            flangeCoversPrice3 += parseFloat(product_name_price[tube_a][1]);
        }
        if (face_lenght_b_obj.value != "select") {
            tube_b = "ES90-" + face_lenght_b_obj.value + "BACK HORIZONTAL TUBE";
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[tube_b][0] + '" />';
            flangeCoversPrice3 += parseFloat(product_name_price[tube_b][1]);
        }
    } else {
        if (face_lenght_obj.value != "select") {
            tube_a = "ES90-" + face_lenght_obj.value + "BACK HORIZONTAL TUBE";
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[tube_a][0] + '" />';
            flangeCoversPrice3 += parseFloat(product_name_price[tube_a][1]);
        }
        tube_b = "";
        tube_c = "";
        tube_d = "";

    }
    if (flange_covers_obj2.value == "yes") {
        flageCovers2 = "Light Bracket";
        for (i = 1; i <= flange_covers_obj2.value; i++) {
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flageCovers2][0] + '" />';
        }
        flangeCoversPrice2 = parseFloat(product_name_price[flageCovers2][1]) * flange_covers_obj2.value;
    }
    if (flang_covers_obj.value == "yes") {
        flangCovers = "ES90-FLANGE COVER 1 PIECE";
        if (type_obj.value == "4BAY") {
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangCovers][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangCovers][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangCovers][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangCovers][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangCovers][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangCovers][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangCovers][0] + '" />';

            flangCoversPrice = parseFloat(product_name_price[flangCovers][1]) * 7;
        } else if (type_obj.value == "3BAY") {
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangCovers][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangCovers][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangCovers][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangCovers][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangCovers][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangCovers][0] + '" />';

            flangCoversPrice = parseFloat(product_name_price[flangCovers][1]) * 6;
        } else if (type_obj.value == "2BAY" || type_obj.value == '2BAYEXT') {
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangCovers][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangCovers][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangCovers][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangCovers][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangCovers][0] + '" />';

            flangCoversPrice = parseFloat(product_name_price[flangCovers][1]) * 5;
        } else {
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangCovers][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangCovers][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangCovers][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangCovers][0] + '" />';
            flangCoversPrice = parseFloat(product_name_price[flangCovers][1]) * 4;
        }
    }
    if (flange_under_counter_obj.value == "yes") {
        flangeUnderCounter = "ES90-UNDER COUNTER FLANGE 1 PIECE";
        if (type_obj.value == "4BAY") {
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';

            flangeUnderCounterPrice = parseFloat(product_name_price[flangeUnderCounter][1]) * 7;
        } else if (type_obj.value == "3BAY") {
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';

            flangeUnderCounterPrice = parseFloat(product_name_price[flangeUnderCounter][1]) * 6;
        } else if (type_obj.value == "2BAY" || type_obj.value == '2BAYEXT') {
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';

            flangeUnderCounterPrice = parseFloat(product_name_price[flangeUnderCounter][1]) * 5;
        } else {
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
            str += '<input type="hidden" name="products_id[]" value="' + product_name_price[flangeUnderCounter][0] + '" />';
            flangeUnderCounterPrice = parseFloat(product_name_price[flangeUnderCounter][1]) * 4;
        }
    }
    supportPost = 'ES90 SUPPORT POST ' + choose_finish_obj.value;
    if (supportpost_obj.value == "1") {
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[supportPost][0] + '" />';
        supportPostPrice = parseFloat(product_name_price[supportPost][1]) * 1;
    } else if (supportpost_obj.value == "2") {
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[supportPost][0] + '" />';
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[supportPost][0] + '" />';
        supportPostPrice = parseFloat(product_name_price[supportPost][1]) * 2;
    } else if (supportpost_obj.value == "3") {
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[supportPost][0] + '" />';
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[supportPost][0] + '" />';
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[supportPost][0] + '" />';
        supportPostPrice = parseFloat(product_name_price[supportPost][1]) * 3;
    } else if (supportpost_obj.value == "4") {
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[supportPost][0] + '" />';
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[supportPost][0] + '" />';
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[supportPost][0] + '" />';
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[supportPost][0] + '" />';
        supportPostPrice = parseFloat(product_name_price[supportPost][1]) * 4;
    } else if (supportpost_obj.value == "5") {
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[supportPost][0] + '" />';
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[supportPost][0] + '" />';
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[supportPost][0] + '" />';
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[supportPost][0] + '" />';
        str += '<input type="hidden" name="products_id[]" value="' + product_name_price[supportPost][0] + '" />';
        supportPostPrice = parseFloat(product_name_price[supportPost][1]) * 5;
    }
    if (make_adjustable == "yes") {
        if (type_obj.value == "1BAY") {

        } else if (type_obj.value == "2BAY" || type_obj.value == '2BAYEXT') {

        } else if (type_obj.value == "3BAY") {

        } else {

        }
    }

    if (flag) {
        if (choose_finish_obj.value == "SS") {
            if (rounded_corners_obj.value == "round") {
                imageName = "ROUND" + imageName;
            } else {
                imageName = "ROUND" + imageName;
            }
        } else if (choose_finish_obj.value == "PC") {
            if (rounded_corners_obj.value == "round") {
                imageName = "BLACKROUND" + imageName;
            } else {
                imageName = "BLACKROUND" + imageName;
            }
        } else if (choose_finish_obj.value == "AL") {
            if (rounded_corners_obj.value == "round") {
                imageName = "ALMNROUND" + imageName;
            } else {
                imageName = "ALMNROUND" + imageName;
            }
        }
    } else {
        if (choose_finish_obj.value == "SS") {
            imageName = "NOGLNORAD" + imageName;
        } else if (choose_finish_obj.value == "PC") {
            imageName = "NOGLBLACKNORAD" + imageName;
        } else if (choose_finish_obj.value == "AL") {
            imageName = "NOGLALMNNORAD" + imageName;
        }

    }

    if (form.flange_covers.value == "yes") {
        imageName = "LYT" + imageName;
    }
    topGlassPrice = topGlassPrice_a + topGlassPrice_b + topGlassPrice_c + topGlassPrice_d;
    glassPrice = facePrice_a + facePrice_b + facePrice_c + facePrice_d;
    t_post_price = centerPostPrice + anglePostPrice;
    totalPrice = glassPrice + leftPostPrice + rightPostPrice + leftEndPanelPrice + rightEndPanelPrice + t_post_price + flangCoversPrice + supportPostPrice + flangeCoversPrice + flangeUnderCounterPrice + flangeCoversPrice2 + topGlassPrice + adjust_price;
    if (form.adjustable.value == "yes") { //adding image of adjustable breckets!!
        //              alert(imageName);
        imageName = "ADJUST" + imageName;

    }
    img_ajx = imageName;


    image_string = '<img src="images/' + foldername + '/' + imageName + '.jpg" style="width:640px;height:480px;">';

    image_string += '<div class="left">12"</div><div class="right">12"</div>';
    image_string += '<div class="msgtishu"></div>';
    image_string += '<div class="msgtishu1"></div>';
    image_string += '<div class="msgtishu2"><hr color="red" size="6px"   width="' + width_three + '"> </div>';
    image_string += '<div class="glass">A</div><div class="glass_a">A</div><div class="glass_b">B</div><div class="glass_c">C</div><div class="glass_d">D</div><div class="total">Total</div>';
    document.getElementById('additional_image').innerHTML = image_string;
    if (glass_face_obj.value == 1) {
        //$("div.left").text(left_lenght_obj.value+'"');
        if (right_lenght_obj.value != "select") {
            $("div.right").text('');
            $("div.left").text('');
        } else {
            $("div.right").text("");
            $("div.left").text("");
        }

    } else if (glass_face_obj.value == 2) {
        //$("div.left").css("display","none");
        if (right_lenght_obj.value != "select") {
            $("div.right").text('');
            $("div.left").text('');
        } else {
            $("div.right").text("");
            $("div.left").text("");
        }
    } else if (glass_face_obj.value == 3) {
        //$("div.right").css("display","none");
        if (right_lenght_obj.value != "select") {
            $("div.right").text('');
            $("div.left").text('');
        } else {
            $("div.right").text("");
            $("div.left").text("");
        }
    } else if (glass_face_obj.value == 4) {
        //$("div.left").css("display","none");
        //$("div.right").css("display","none");
        if (right_lenght_obj.value != "select") {
            $("div.right").text('');
            $("div.left").text('');
        } else {
            $("div.right").text("");
            $("div.left").text("");
        }
    }
    if (type_obj.value == "1BAY") {

        if (face_lenght_obj.value != "select") {

            if (flange_covers_obj.value == "yes") {
                $('#c_glass_a_light').val(product_name_price[light_a][0]);
                $('#c_glass_a_val_light').val(face_lenght_obj.options[face_lenght_obj.selectedIndex].text);
            }

            $('#c_glass_a').val(product_name_price[glassName_a][0]);
            $('#c_glass_a_val').val(face_lenght_obj.options[face_lenght_obj.selectedIndex].text);

            $('#c_glass_a_tube').val(product_name_price[tube_a][0]);
            $('#c_glass_a_val_tube').val(face_lenght_obj.options[face_lenght_obj.selectedIndex].text);

            if (face_lenght_obj.value != 'No Glass') {
                //if(left_lenght_obj.value!="select"){
                $('#c_glass_a_top').val(product_name_price[topGlass_a][0]);
                //}
                $('#c_glass_a_top_val').val(face_lenght_obj.options[face_lenght_obj.selectedIndex].text);
            }
            $("div.glass").text(face_lenght_obj.options[face_lenght_obj.selectedIndex].text);
        } else {
            $("div.glass").text("A");
        }

        var n1 = getBeforeChar($('[name="face_length"]').find('option:selected').text()) - 0;
        if (getAfterChar($('[name="face_length"]').find('option:selected').text()) != "") {
            n1 = (n1 + 2) + '-' + getAfterChar($('[name="face_length"]').find('option:selected').text()) + '"';
        } else {
            n1 = (n1 + 2) + '"';
        }
        if (flag == 1) {
            if (n1 == '2"') {
                $("div.total").text("Total");
            } else {
                $("div.total").text(n1);
                tot1 = n1;
            }
        }

    }
    if (type_obj.value == "2BAY" || type_obj.value == '2BAYEXT') {
        if (face_lenght_a_obj.value != 'No Glass' && face_lenght_b_obj.value != 'No Glass') {
            if (face_lenght_a_obj.value != "select") {
                $("div.glass_a").text(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                if (flange_covers_obj.value == "yes") {
                    $('#c_glass_a_light').val(product_name_price[light_a][0]);
                    $('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                }
                $('#c_glass_a').val(product_name_price[glassName_a][0]);
                $('#c_glass_a_val').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                $('#c_glass_a_tube').val(product_name_price[tube_a][0]);
                $('#c_glass_a_val_tube').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);

                //if(left_lenght_obj.value!="select"){
                $('#c_glass_a_top').val(product_name_price[topGlass_a][0]);
                //}
                $('#c_glass_a_top_val').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);

                if (type_obj.value == '2BAYEXT') {
                    $('#glass_a_top_ext').val('EXT');
                } else {
                    $('#glass_a_top_ext').val('');
                }
            } else {
                $("div.glass_a").text("A");
            }
            if (face_lenght_b_obj.value != "select") {
                $("div.glass_b").text(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                if (flange_covers_obj.value == "yes") {
                    $('#c_glass_b_light').val(product_name_price[light_b][0]);
                    $('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                }
                $('#c_glass_b').val(product_name_price[glassName_b][0]);
                $('#c_glass_b_val').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);

                $('#c_glass_b_tube').val(product_name_price[tube_b][0]);
                $('#c_glass_b_val_tube').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);

                $('#c_glass_b_top').val(product_name_price[topGlass_b][0]);

                $('#c_glass_b_top_val').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                if (type_obj.value == '2BAYEXT') {
                    $('#glass_b_top_ext').val('EXT');
                } else {
                    $('#glass_b_top_ext').val('');
                }

            } else {
                $("div.glass_b").text("B");
            }
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
        if (face_lenght_a_obj.value != 'No Glass' && face_lenght_b_obj.value != 'No Glass' && face_lenght_c_obj.value != 'No Glass') {
            if (face_lenght_a_obj.value != "select") {
                $("div.glass_a").text(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                if (flange_covers_obj.value == "yes") {
                    $('#c_glass_a_light').val(product_name_price[light_a][0]);
                    $('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                }
                $('#c_glass_a').val(product_name_price[glassName_a][0]);
                $('#c_glass_a_val').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);

                $('#c_glass_a_tube').val(product_name_price[tube_a][0]);
                $('#c_glass_a_val_tube').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);

                $('#c_glass_a_top').val(product_name_price[topGlass_a][0]);

                $('#c_glass_a_top_val').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
            } else {
                $("div.glass_a").text("A");
            }
            if (face_lenght_b_obj.value != "select") {
                $("div.glass_b").text(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                if (flange_covers_obj.value == "yes") {
                    $('#c_glass_b_light').val(product_name_price[light_b][0]);
                    $('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                }
                $('#c_glass_b').val(product_name_price[glassName_b][0]);
                $('#c_glass_b_val').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                $('#c_glass_b_tube').val(product_name_price[tube_b][0]);
                $('#c_glass_b_val_tube').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                $('#c_glass_b_top').val(product_name_price[topGlass_b][0]);
                $('#c_glass_b_top_val').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
            } else {
                $("div.glass_b").text("B");
            }
            if (face_lenght_c_obj.value != "select") {
                $("div.glass_c").text(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                if (flange_covers_obj.value == "yes") {
                    $('#c_glass_c_light').val(product_name_price[light_c][0]);
                    $('#c_glass_c_val_light').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                }
                $('#c_glass_c').val(product_name_price[glassName_c][0]);
                $('#c_glass_c_val').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                $('#c_glass_c_tube').val(product_name_price[tube_c][0]);
                $('#c_glass_c_val_tube').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                $('#c_glass_c_top').val(product_name_price[topGlass_c][0]);

                $('#c_glass_c_top_val').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
            } else {
                $("div.glass_c").text("C");
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
        if (face_lenght_a_obj.value != 'No Glass' && face_lenght_b_obj.value != 'No Glass' && face_lenght_c_obj.value != 'No Glass' && face_lenght_d_obj.value != 'No Glass') {
            if (face_lenght_a_obj.value != "select") {
                $("div.glass_a").text(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                if (flange_covers_obj.value == "yes") {
                    $('#c_glass_a_light').val(product_name_price[light_a][0]);
                    $('#c_glass_a_val_light').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                }
                $('#c_glass_a').val(product_name_price[glassName_a][0]);
                $('#c_glass_a_val').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                $('#c_glass_a_tube').val(product_name_price[tube_a][0]);
                $('#c_glass_a_val_tube').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
                //if(left_lenght_obj.value!="select"){
                $('#c_glass_a_top').val(product_name_price[topGlass_a][0]);
                // }
                $('#c_glass_a_top_val').val(face_lenght_a_obj.options[face_lenght_a_obj.selectedIndex].text);
            } else {
                $("div.glass_a").text("A");
            }
            if (face_lenght_b_obj.value != "select") {
                $("div.glass_b").text(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                if (flange_covers_obj.value == "yes") {
                    $('#c_glass_b_light').val(product_name_price[light_b][0]);
                    $('#c_glass_b_val_light').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                }
                $('#c_glass_b').val(product_name_price[glassName_b][0]);
                $('#c_glass_b_val').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);

                $('#c_glass_b_tube').val(product_name_price[tube_b][0]);
                $('#c_glass_b_val_tube').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
                // if(left_lenght_obj.value!="select"){
                $('#c_glass_b_top').val(product_name_price[topGlass_b][0]);
                // }
                $('#c_glass_b_top_val').val(face_lenght_b_obj.options[face_lenght_b_obj.selectedIndex].text);
            } else {
                $("div.glass_b").text("B");
            }
            if (face_lenght_c_obj.value != "select") {
                $("div.glass_c").text(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                if (flange_covers_obj.value == "yes") {
                    $('#c_glass_c_light').val(product_name_price[light_c][0]);
                    $('#c_glass_c_val_light').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                }
                $('#c_glass_c').val(product_name_price[glassName_c][0]);
                $('#c_glass_c_val').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);

                $('#c_glass_c_tube').val(product_name_price[tube_c][0]);
                $('#c_glass_c_val_tube').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
                //if(left_lenght_obj.value!="select"){
                $('#c_glass_c_top').val(product_name_price[topGlass_c][0]);
                // }
                $('#c_glass_c_top_val').val(face_lenght_c_obj.options[face_lenght_c_obj.selectedIndex].text);
            } else {
                $("div.glass_c").text("C");
            }
            if (face_lenght_d_obj.value != "select") {
                $("div.glass_d").text(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
                if (flange_covers_obj.value == "yes") {
                    $('#c_glass_d_light').val(product_name_price[light_d][0]);
                    $('#c_glass_d_val_light').val(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
                }
                $('#c_glass_d').val(product_name_price[glassName_d][0]);
                $('#c_glass_d_val').val(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
                $('#c_glass_d_tube').val(product_name_price[tube_d][0]);
                $('#c_glass_d_val_tube').val(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);

                // if(left_lenght_obj.value!="select"){
                $('#c_glass_d_top').val(product_name_price[topGlass_d][0]);
                // }
                $('#c_glass_d_top_val').val(face_lenght_d_obj.options[face_lenght_d_obj.selectedIndex].text);
            } else {
                $("div.glass_d").text("D");
            }
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

        if (face_lenght_a_obj.value == 'No Glass' || face_lenght_b_obj.value == 'No Glass' || face_lenght_c_obj.value == 'No Glass' || face_lenght_d_obj.value == 'No Glass') {
            noGlass()
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
        redlineheight = 97 + 3;
        redlineheight1 = 160 + 3;
        redlineheight2 = 223 + 3;
        redlineheight3 = 251 + 3;
        redlineheight4 = 485;
        redlineheight5 = 190 + 3;
        redlineverticle = 391;
    } else if (type_obj.value == "2BAY" || type_obj.value == '2BAYEXT') {
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
        redlineheight1 = 180 + 8;
        redlineheight2 = 246 + 8;
        redlineheight3 = 276 + 8;
        redlineheight4 = 509;
        redlineheight5 = 215 + 8;
        redlineverticle = 415;
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
        right_next = -40;
        t4 = 291;
        redlineheight = 97;
        redlineheight1 = 207 + 13;
        redlineheight2 = 270 + 13;
        redlineheight3 = 300 + 13;
        redlineheight4 = 532 + 5;
        redlineheight5 = 240 + 13;
        redlineverticle = 438 + 5;
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
        redlineheight1 = 230 + 13;
        redlineheight2 = 295 + 13;
        redlineheight3 = 323 + 13;
        redlineheight4 = 557 + 5;
        redlineheight5 = 262 + 13;
        redlineverticle = 463 + 5;
    }
    document.getElementById("products_ids").innerHTML = str;
    document.getElementById("left-post").innerHTML = leftPostPrice + ".00";
    document.getElementById("right-post").innerHTML = rightPostPrice + ".00";
    document.getElementById("trasition-post").innerHTML = t_post_price + ".00";
    document.getElementById("face-glass").innerHTML = glassPrice + ".00";
    document.getElementById("top-glass").innerHTML = topGlassPrice + ".00";
    document.getElementById("total").innerHTML = "$&nbsp;" + totalPrice + ".00";
    document.getElementById("flang-cover").innerHTML = flangCoversPrice + ".00";
    document.getElementById("support-post").innerHTML = supportPostPrice + ".00";
    document.getElementById("make-adjustable").innerHTML = adjust_price + ".00";
    document.getElementById("flange-cover").innerHTML = flangeCoversPrice + ".00";
    document.getElementById("flange-cover2").innerHTML = flangeCoversPrice2 + ".00";
    document.getElementById("left-Panel").innerHTML = leftEndPanelPrice + ".00";
    document.getElementById("right-panel").innerHTML = rightEndPanelPrice + ".00";
    if (left_lenght_obj.value == "select") {
        two = false;
        $("#count_err").attr("src", "img/iconCheckOff.gif");
    } else {
        $("#count_err").attr("src", "img/iconCheckOn.gif");
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
    } else if (type_obj.value == "2BAY" || type_obj.value == '2BAYEXT') {
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
        } else {}
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
        } else {}
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
        } else {}

    }
    if (flang_covers_obj.value == "select") {
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
    if (flange_covers_obj.value == "select") {
        $("#light_err").attr("src", "img/iconCheckOff.gif");
        six = false;
    } else {
        $("#light_err").attr("src", "img/iconCheckOn.gif");
        six = true;
    }
    if (rounded_corners_obj.value == "select") {
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
    if (type_obj.value == "1BAY") {
        if (face_lenght_obj.value == "No Glass") {
            four = true;
            six = true;
            $("#light_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            $("#round_err").attr("src", "img/iconCheckOn.gif");
            seven = true;
            if (form.adjustable.value == "no") {
                rounded_corners_obj.value = "select";
            } else {
                rounded_corners_obj.value = "round";
            }

            rounded_corners_obj.disabled = true;
        } else {
            if (form.adjustable.value == "no") {
                rounded_corners_obj.disabled = false;
            }

            if (rounded_corners_obj.value == "select") {
                $("#round_err").attr("src", "img/iconCheckOff.gif");
                seven = false;
            } else {
                $("#round_err").attr("src", "img/iconCheckOn.gif");
                seven = true;
            }
        }
    }
    if (type_obj.value == "2BAY" || type_obj.value == '2BAYEXT') {
        if (face_lenght_a_obj.value == "No Glass" || face_lenght_b_obj.value == "No Glass") {
            four = true;
            six = true;
            $("#light_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_b_err").attr("src", "img/iconCheckOn.gif");
            if (form.adjustable.value == "no") {
                rounded_corners_obj.value = "select";
            } else {
                rounded_corners_obj.value = "round";
            }
            rounded_corners_obj.disabled = true;
            $("#round_err").attr("src", "img/iconCheckOn.gif");
            seven = true;
        } else {
            if (form.adjustable.value == "no") {
                rounded_corners_obj.disabled = false;
            }
            if (rounded_corners_obj.value == "select") {
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
            six = true;
            $("#light_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_b_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_c_err").attr("src", "img/iconCheckOn.gif");
            if (form.adjustable.value == "no") {
                rounded_corners_obj.value = "select";
            } else {
                rounded_corners_obj.value = "round";
            }
            rounded_corners_obj.disabled = true;
            $("#round_err").attr("src", "img/iconCheckOn.gif");
            seven = true;
        } else {
            if (form.adjustable.value == "no") {
                rounded_corners_obj.disabled = false;
            }
            if (rounded_corners_obj.value == "select") {
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
            six = true;
            $("#light_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_a_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_b_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_c_err").attr("src", "img/iconCheckOn.gif");
            $("#glass_d_err").attr("src", "img/iconCheckOn.gif");
            if (form.adjustable.value == "no") {
                rounded_corners_obj.value = "select";
            } else {
                rounded_corners_obj.value = "round";
            }
            rounded_corners_obj.disabled = true;
            $("#round_err").attr("src", "img/iconCheckOn.gif");
            seven = true;
        } else {
            if (form.adjustable.value == "no") {
                rounded_corners_obj.disabled = false;
            }
            if (rounded_corners_obj.value == "select") {
                $("#round_err").attr("src", "img/iconCheckOff.gif");
                seven = false;
            } else {
                $("#round_err").attr("src", "img/iconCheckOn.gif");
                seven = true;
            }
        }
    }
    if (zero && two && four && five && six && seven && eight) {} else {}

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

function getProductFolderName(productname) {
    foldername = "";
    switch (productname) {
        case 'ES90':
            {
                foldername = "ES90";
                break;
            }
    }
    return foldername;
}

function noGlass() {
    $("div.glass").text("");
    $("div.glass_a").text("");
    $("div.glass_b").text("");
    $("div.glass_c").text("");
    $("div.glass_d").text("");
    $("div.total").text("");
    $('#c_glass_a_val').val('');
    $('#c_glass_a').val('');
    $('#c_glass_b_val').val('');
    $('#c_glass_b').val('');
    $('#c_glass_c_val').val('');
    $('#c_glass_c').val('');
    $('#c_glass_d_val').val('');
    $('#c_glass_d').val('');
    $('#c_glass_a_top_val').val('');
    $('#c_glass_a_top').val('');
    $('#c_glass_b_top_val').val('');
    $('#c_glass_b_top').val('');
    $('#c_glass_c_top_val').val('');
    $('#c_glass_c_top').val('');
    $('#c_glass_d_top_val').val('');
    $('#c_glass_d_top').val('');
}

function changeGlassImage(form, image) {
    category_name = "ES90";
    foldername = getProductFolderName("ES90") + form.type.value;
    imageName = '';
    if (form.rounded_corners.value == 0) {
        imageName = 'GLASSROUND.jpg';
    } else {
        imageName = 'GLASS.jpg'
    }
    if (image != "") {
        imageName = image;
    }
    if (type_obj.value == "1BAY") {
        cross = '<input type="button" onclick="getPriceOfProduct(this.form);" style="margin: 0 4px;position: absolute;right: -650px;top: -144px;width: 20px;z-index: 1000000;" value="X" class="rounded-corner-image">'
    }
    if (type_obj.value == "2BAY" || type_obj.value == '2BAYEXT') {
        cross = '<input type="button" onclick="getPriceOfProduct(this.form);" style="margin: 0 4px;position: absolute;right: -650px;top: -194px;width: 20px;z-index: 1000000;" value="X" class="rounded-corner-image">'
    }
    if (type_obj.value == "3BAY") {
        cross = '<input type="button" onclick="getPriceOfProduct(this.form);" style="margin: 0 4px;position: absolute;right: -650px;top: -244px;width: 20px;z-index: 1000000;" value="X" class="rounded-corner-image">'
    }
    if (type_obj.value == "4BAY") {
        cross = '<input type="button" onclick="getPriceOfProduct(this.form);" style="margin: 0 4px;position: absolute;right: -650px;top: -294px;width: 20px;z-index: 1000000;" value="X" class="rounded-corner-image">'
    }



    image_string = '<img src="images/' + foldername + '/' + imageName + '.jpg" style="width:640px;height:480px;">';
    document.getElementById('additional_image').innerHTML = image_string;
    document.getElementById('ro').innerHTML = cross;

}

function getBeforeChar(str) {
    var f_str = str.substr(0, str.indexOf('-'));
    if (f_str == "") {
        return str.substr(0, str.indexOf('"'));;
    } else {
        return f_str;
    }
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
    } else {
        var t = n1 + n2 + 2;
    }
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
        t += '-5/4"';
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
    if (f_n1 == '3/2' && f_n2 == '1/4') {
        t += 1;
        t += '-3/4"';
    }
    if (f_n1 == '3/2' && f_n2 == '3/4') {
        t += 2;
        t += '-1/4"';
    }
    if (f_n1 == '3/2' && f_n2 == '1/2') {
        t += 2;
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

function getVedio() {
    str = '<video id="example_video_1" class="video-js" width="600" height="480" controls="controls" preload="auto" poster="pic.jpg" autoplay ><source src="images/flang.mp4"' + " type='video/mp4; codecs=" + '"avc1.42E01E, mp4a.40.2"' + ' /><source src="images/flang.webm"' + " type='video/webm; codecs=" + '"vp8, vorbis"' + ' /><source src="images/flang.ogv"' + " type='video/ogg; codecs=" + '"theora, vorbis"' + ' /><object id="flash_fallback_1" class="vjs-flash-fallback" width="640" height="264" type="application/x-shockwave-flash" data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf"><param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" /><param name="allowfullscreen" value="true" /><param name="flashvars" value=' + "config={" + '"playlist":["pic.jpg", {"url": "images/flang.mp4","autoPlay":false,"autoBuffering":true}]}' + ' /><img src="pic.jpg" width="640" height="480" alt="Poster Image" title="No video playback capabilities." /></object></video>';
    document.getElementById('additional_image').innerHTML = str;
}

function setShowEventmsg(selector, msg) {
    //$("#additional_image").css("opacity","0.5");
    //$(".test-hide").css("opacity","0.5");
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