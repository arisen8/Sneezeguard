<?php
  require('includes/application_top.php');
      if ( $HTTP_GET_VARS['cPath'] == "84_80" &&  $HTTP_GET_VARS['pe'] != "as215")
	  {	 
	   header( 'Location: info.php?Model=B-950&mid=80&osCsid='.$_REQUEST['osCsid']) ;
	  }      
      if ( $HTTP_GET_VARS['cPath'] == "84_81" &&  $HTTP_GET_VARS['pe'] != "as215")
    	  {    	 
    	   header( 'Location: info.php?Model=B-950-SWIVEL&mid=81&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
    	  
           if ( $HTTP_GET_VARS['cPath'] == "88_89" )
    	  {    	  
    	   header( 'Location: info.php?Model=Adjustable-Shelving&mid=89&osCsid='.$_REQUEST['osCsid'] ) ;
    	  } 
		 if ( $HTTP_GET_VARS['cPath'] == "112_113" )
    	  {    	  
    	   header( 'Location: info.php?Model=ED20&mid=113&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
    	    if ( $HTTP_GET_VARS['cPath'] == "85_70" &&  $HTTP_GET_VARS['pe'] != "as215")
    	  {    	  
    	   header( 'Location: info.php?Model=EP-950-ACRYLIC&pid=70&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
      
      if ( $HTTP_GET_VARS['cPath'] == "85_79" &&  $HTTP_GET_VARS['pe'] != "as215")
    	  {
    	 
    	   header( 'Location: info.php?Model=B-950P-GLASS&pid=79&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
    $category_name="";
    $category_image='';
    if(!isset($_REQUEST['type'])){
       if(isset($_REQUEST['cPath'])){
    		$cpath_list=explode("_", $_REQUEST['cPath']);
    		$sql="select count(*) as total from ".TABLE_CATEGORIES." where parent_id=".$cpath_list[0];
    		$count=mysql_query($sql) or die("".mysql_error());
    		$count=mysql_fetch_array($count);
    		$count=$count['total'];
    	} 	   
    $sql="select c.categories_image, cd.categories_name from ".TABLE_CATEGORIES." as c, ".TABLE_CATEGORIES_DESCRIPTION." as cd where c.categories_id=".$cpath_list[1]." and c.categories_id=cd.categories_id";
    $sql_result=tep_db_query($sql);
    $sql_result=tep_db_fetch_array($sql_result);
    $category_name=$sql_result['categories_name'];
    $category_image=$sql_result['categories_image'];
       
    }
    else{
        $sql="select c.categories_image, cd.categories_name from ".TABLE_CATEGORIES." as c, ".TABLE_CATEGORIES_DESCRIPTION." as cd where c.categories_id=".$_REQUEST['id']." and c.categories_id=cd.categories_id";
        $sql_result=tep_db_query($sql);
        $sql_result=tep_db_fetch_array($sql_result);
        $category_name=$sql_result['categories_name'];
        $category_image=$sql_result['categories_image'];
    }
  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_DEFAULT);
  require(DIR_WS_INCLUDES . 'template_top.php');
?>
<style type="text/css">
    .message_w {
    border: 2px solid #ff0000;
}
</style>
<?php if(!isset($_REQUEST['type'])) { ?>
    <script type="text/javascript">
         $(function(){
               // $("#product_image").css("opacity","0.5");
               // $(".test-hide").css("opacity","0.5");
                 var cssObj={
                    "background-color":"#111",
                    "border-style":"solid",
                    "border-width":"2px",
                    "border-color":"#ff0000"};                
                $(".select-option").css(cssObj);
                $("#horizontal_line").css({"display":"block", "left" : "239px", "height":"375px"});
                $("#message_line").css({"display":"block", "left":"239px", "width":"94px", "bottom":"-242px"});
                $("#message_w").html("Choose the length that fits your needs");
                //$(".smallText").mouseover(action_event);
                //setInterval(action_event, 3000);
            });
            action_event = function(){
                    $("#product_image").css("opacity","1.0");
                     var cssObj={
                        "background":"none",
                        "border-style":"solid",
                        "border-width":"1px",
                        "border-color":"#999"};                    
                    $(".select-option").css(cssObj);
                    $(".test-hide").css("opacity","1.0");
                    $(".message_p").remove();
                    $("#message_wp").html("Choose the length that fits your needs");
                };
   </script>
   <style type="text/css">
        .message_p{
            position:relative;
            z-index: 1000000;
        }
        .message_pw{
            position:relative;
            z-index: 1000000;
        }
        .message_w{
            position:absolute;
            color:#C7F900;
            text-shadow:2px 2px 3px #111;
            font-size: 25px;
            left:333px;
            top:408px;
             background: url('images/login-bg.png');
            padding:5px;
            border-radius:10px;
            font-weight: bold;
            text-align: center;
        }
        #message_wp{
            position:absolute;
            color:#ffffff;
            text-shadow:2px 2px 3px #444;
            font-size: 52px;
            left:250px;
            top:150px;
            font-weight: bold;
            text-align: center;
        }
   </style>
<div class="select-option" style="position: relative;">
    <table class="category-List" cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="2"><h1 style="padding-left:0px; font-size:12px;">Options(Click for Pricing)</h1></td>
        </tr>
        <tr>
            <td align="right" width="29"><img width="12" height="12" src="images/linkbullet.gif"></td>
            <td align="left" class="smallText" width="175" valign="top"><a href="product_info.php?id=<?=$cpath_list[1]?>&type=1BAY&osCsid=<?=$_REQUEST['osCsid']?>" onmouseover="changeImage('1BAY');" onmouseout="showSame();">12" Thru 42"</a></td>
        </tr>
        <tr>
            <td align="right" width="29"><img width="12" height="12" src="images/linkbullet.gif"></td>
            <td align="left" class="smallText" width="175" valign="top"><a href="product_info.php?id=<?=$cpath_list[1]?>&type=2BAY&osCsid=<?=$_REQUEST['osCsid']?>" onmouseover="changeImage('2BAY');" onmouseout="showSame();">42" Thru 84"</a></td>
        </tr>
        <tr>
            <td align="right" width="29"><img width="12" height="12" src="images/linkbullet.gif"></td>
            <td align="left" class="smallText" width="175" valign="top"><a href="product_info.php?id=<?=$cpath_list[1]?>&type=3BAY&osCsid=<?=$_REQUEST['osCsid']?>" onmouseover="changeImage('3BAY');" onmouseout="showSame();">84" Thru 126"</a></td>
        </tr>
        <tr>
            <td align="right" width="29"><img width="12" height="12" src="images/linkbullet.gif"></td>
            <td align="left" class="smallText" width="175" valign="top"><a href="product_info.php?id=<?=$cpath_list[1]?>&type=4BAY&osCsid=<?=$_REQUEST['osCsid']?>" style="color: #f4f4f4;cursor: pointer;" onmouseover="changeImage('4BAY');" onmouseout="showSame();">126" and beyond</a></td>
        </tr>
         <tr>
            <td align="right" width="29"><img width="12" height="12" src="images/linkbullet.gif"></td>
            <td align="left" class="smallText" width="175" valign="top"><a href="advanced_search_result.php?categories_id=<?=$cpath_list[1]?>&keywords=<?=$category_name?>&sort=5a&osCsid=<?=$_REQUEST['osCsid']?>" onmouseover="changeImage('PARTS');" onmouseout="showSame();">Posts and Parts</a></td>
        </tr>
    </table>
    <div id="line" style="width:42px;border: 1px solid #FF0000; background-color: green !important; top: 0px; left: -55px; padding: 5px; position: absolute;"><strong>Step-1</strong></div>
    <!--div style="position: relative;"><div id="horizontal_line" style="width: 4px; height:387px;display:none;left: 236px;top: -131px;z-index: 102; background:#ff0000;position: absolute;"></div></div-->
     <!--div style="position: relative;"><div id="horizontal_line" style="width: 4px; height:387px;display:none;left: 236px;top: -131px;z-index: 102; background:#ff0000;position: absolute;"></div></div-->
    <!--div id="line" style="background: none repeat scroll 0% 0% rgb(255, 0, 0); height: 4px; position: absolute; right: -37px; top: 45px; width: 37px; z-index: 102; display: block;"></div-->
    <!--div id="message_line" style="background:#ff0000;display:none;bottom: -223px;height: 4px;left: 239px;position: absolute;width: 174px;z-index: 102;"></div-->
    
    </div>
<div id="product-image" style="border: none;width: 180;">
    <center><img src="images/<?=$category_name?>/SIDEELEV.jpg" width="150"/></center>
</div>
<div id="product-image">
    <h1 style="padding-left: 8px;">Example Image</h1>
    <?php
        $image_list=scandir('images/'.$category_name);
        $image_list_length=count($image_list);
        $i=0;
        echo '<ul class="head-table" style="border:none;background:none;">';
		$z=1;
        while($image_list_length>$i){
            if(preg_match('/^ex/', $image_list[$i])){
                $adition_image="'images/".$category_name."/".$image_list[$i]."'";
                echo '<li style="width:50px;margin:4px;height:55px;overflow:hidden;"><a onclick="changeAdditionalImage('.$adition_image.');"><img src="images/'.$category_name.'/'.$image_list[$i+1].'" style="width:50px">'.($z).'</a></li>';
                $i++;
				$z++;
            }
            $i++;    
        }
        echo '<br style="clear:both;"></ul>';        
        //print_r($image_list);
    ?>
</div>
<div id="product-image" style="margin-top: 5px;">
   <table class="category-List">
        <tr>
            <td align="right" width="29"><img width="12" height="12" src="images/linkbullet.gif"></td>
            <td align="left" class="smallText" width="175" valign="top"><a onclick="changeImage('POSTDIM');" onmouseout="showSame();">Post Dimensions</a></td>
        </tr>
    </table>
</div>
<?php }
else{   
    $sql="select * from ";
?>
    
    
<?php } 
?>
<?php
  require(DIR_WS_INCLUDES . 'template_bottom.php');
  require(DIR_WS_INCLUDES . 'application_bottom.php');
?>

