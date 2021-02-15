<?php
ob_start();
require('includes/application_top.php');
require(DIR_WS_FUNCTIONS . 'url_validation.php');
$obj=new Urlvalidation();
if(isset($_GET['Model'])){
	$category_id=$_GET['Model'];
	if($obj->tep_check_model_name($category_id))
	{

	}
	else{
		tep_redirect(tep_href_link('validation_faild', '', 'SSL'));
		exit;
	}
}
if(isset($_GET['cPath'])){
	$category_id=explode('_',$_GET['cPath']);
	if($obj->tep_check_mid($category_id[0]) && $obj->tep_check_mid($category_id[1]))
	{

	}
	else{
		tep_redirect(tep_href_link('validation_faild', '', 'SSL'));
		exit;
	}
}

  
  
  
  
  
  if(isset($_GET['add_more_bay']))
  {
	  $add_more_bay=1;
  }
  else{
	  $add_more_bay=0;
  }
 ///echo $HTTP_POST_VARS['add_more_bay'];
 //echo'<b style="color:red;">add_more_bay== '.$_GET['add_more_bay'].'</b>';
      if ( $HTTP_GET_VARS['cPath'] == "87_80" &&  $HTTP_GET_VARS['pe'] != "as215")
	  {	 
	   header( 'Location: info.php?Model=B-950&mid=80&osCsid='.$_REQUEST['osCsid']) ;
	  }      
      if ( $HTTP_GET_VARS['cPath'] == "87_81" &&  $HTTP_GET_VARS['pe'] != "as215")
    	  {    	 
    	   header( 'Location: info.php?Model=B-950-SWIVEL&mid=81&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
          if ( $HTTP_GET_VARS['cPath'] == "88_118" )
    	  {    	  
    	   header( 'Location: info.php?Model=Mid-Shelves&mid=118&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
    	   if ( $HTTP_GET_VARS['cPath'] == "88_120" )
    	  {    	  
    	   header( 'Location: info.php?Model=Heat-Lamp&mid=120&osCsid='.$_REQUEST['osCsid'] ) ;
    	  } if ( $HTTP_GET_VARS['cPath'] == "88_121" )
    	  {    	  
    	   header( 'Location: info.php?Model=Light-Bar&mid=121&osCsid='.$_REQUEST['osCsid'] ) ;
    	  } 
           if ( $HTTP_GET_VARS['cPath'] == "112_89" )
    	  {    	  
    	   header( 'Location: info.php?Model=Adjustable-Shelving&mid=89&osCsid='.$_REQUEST['osCsid'] ) ;
    	  } 
		  if ( $HTTP_GET_VARS['cPath'] == "86_72" )
    	  {    	  
    	   header( 'Location: info.php?Model=EP5&mid=72&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
		   if ( $HTTP_GET_VARS['cPath'] == "86_122" )
    	  {    	  
    	   header( 'Location: info.php?Model=Ring-EP5&mid=122&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
		  if ( $HTTP_GET_VARS['cPath'] == "86_71" )
    	  {    	  
    	   header( 'Location: info.php?Model=EP15&mid=71&osCsid='.$_REQUEST['osCsid'] ) ;
    	  } 
		  if ( $HTTP_GET_VARS['cPath'] == "86_55" )
    	  {    	  
    	   header( 'Location: info.php?Model=EP11&mid=55&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }if ( $HTTP_GET_VARS['cPath'] == "86_56" )
    	  {    	  
    	   header( 'Location: info.php?Model=EP12&mid=56&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
		  if ( $HTTP_GET_VARS['cPath'] == "86_57" )
    	  {    	  
    	   header( 'Location: info.php?Model=EP21&mid=57&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
		  if ( $HTTP_GET_VARS['cPath'] == "86_58" )
    	  {    	  
    	   header( 'Location: info.php?Model=EP22&mid=58&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
		  if ( $HTTP_GET_VARS['cPath'] == "86_59" )
    	  {    	  
    	   header( 'Location: info.php?Model=EP36&mid=59&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
		  if ( $HTTP_GET_VARS['cPath'] == "87_114" )
    	  {    	  
    	   header( 'Location: info.php?Model=ES29&mid=114&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
		  if ( $HTTP_GET_VARS['cPath'] == "87_61" )
    	  {    	  
    	   header( 'Location: info.php?Model=ES31&mid=61&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
		  if ( $HTTP_GET_VARS['cPath'] == "87_62" )
    	  {    	  
    	   header( 'Location: info.php?Model=ES40&mid=62&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
		  if ( $HTTP_GET_VARS['cPath'] == "87_110" )
    	  {    	  
    	   header( 'Location: info.php?Model=ES53&mid=110&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
		  if ( $HTTP_GET_VARS['cPath'] == "87_63" )
    	  {    	  
    	   header( 'Location: info.php?Model=ES67&mid=63&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
		  if ( $HTTP_GET_VARS['cPath'] == "87_64" )
    	  {    	  
    	   header( 'Location: info.php?Model=ES73&mid=64&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
		  if ( $HTTP_GET_VARS['cPath'] == "87_111" )
    	  {    	  
    	   header( 'Location: info.php?Model=ES82&mid=111&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
		  if ( $HTTP_GET_VARS['cPath'] == "87_123" )
    	  {    	  
    	   header( 'Location: info.php?Model=ES90&mid=123&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
		  if ( $HTTP_GET_VARS['cPath'] == "126_124" )
    	  {    	  
    	   header( 'Location: info.php?Model=ES47&mid=124&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
		  if ( $HTTP_GET_VARS['cPath'] == "87_125" )
    	  {    	  
    	   header( 'Location: info.php?Model=ES92&mid=125&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
		  if ( $HTTP_GET_VARS['cPath'] == "87_128" )
    	  {    	  
    	   header( 'Location: info.php?Model=ORBIT360&mid=128&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
		 if ( $HTTP_GET_VARS['cPath'] == "86_113" )
    	  {    	  
    	   header( 'Location: info.php?Model=ED20&mid=113&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
		  if ( $HTTP_GET_VARS['cPath'] == "84_117" &&  $HTTP_GET_VARS['pe'] != "as215")
    	  {    	  
    	   header( 'Location: info.php?Model=A-PUSH&mid=117&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
    	    if ( $HTTP_GET_VARS['cPath'] == "85_70" &&  $HTTP_GET_VARS['pe'] != "as215")
    	  {    	  
    	   header( 'Location: info.php?Model=EP-950-ACRYLIC&pid=70&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
		   if ( $HTTP_GET_VARS['cPath'] == "85_117")
    	  {    	  
    	   header( 'Location: info.php?Model=ALLIN1&pid=117&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
		  /*
		   if ( $HTTP_GET_VARS['cPath'] == "86_129")
    	  {    	  
    	   header( 'Location: info.php?Model=EP6&pid=129&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
		  */
		  
		  
		   if ( $HTTP_GET_VARS['cPath'] == "86_129")
    	  {    	  
    	   header( 'Location: info.php?Model=EP6&mid=129&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
		  
		   if ( $HTTP_GET_VARS['cPath'] == "86_132")
    	  {    	  
    	   header( 'Location: info.php?Model=Ring-EP6&mid=132&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
		  
		  
		    if ( $HTTP_GET_VARS['cPath'] == "86_130")
    	  {    	  
    	   header( 'Location: info.php?Model=EP7&pid=130&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
		  
		  
		    if ( $HTTP_GET_VARS['cPath'] == "86_133")
    	  {    	  
    	   header( 'Location: info.php?Model=EP8&pid=133&osCsid='.$_REQUEST['osCsid'] ) ;
    	  }
		  
		  if ( $HTTP_GET_VARS['cPath'] == "85_131")
    	  {    	  
    	   header( 'Location: info.php?Model=ORBIT720&pid=131&osCsid='.$_REQUEST['osCsid'] ) ;
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
    		   
    $sql="select c.categories_image, cd.categories_name from ".TABLE_CATEGORIES." as c, ".TABLE_CATEGORIES_DESCRIPTION." as cd where c.categories_id=".$cpath_list[1]." and c.categories_id=cd.categories_id";
    $sql_result=tep_db_query($sql);
    $sql_result=tep_db_fetch_array($sql_result);
    $category_name=$sql_result['categories_name'];
    $category_image=$sql_result['categories_image'];
    }
    
    }
    else{
		if(isset($_REQUEST['cPath']))
		{
        $sql="select c.categories_image, cd.categories_name from ".TABLE_CATEGORIES." as c, ".TABLE_CATEGORIES_DESCRIPTION." as cd where c.categories_id=".$_REQUEST['id']." and c.categories_id=cd.categories_id";
        $sql_result=tep_db_query($sql);
        $sql_result=tep_db_fetch_array($sql_result);
        $category_name=$sql_result['categories_name'];
        $category_image=$sql_result['categories_image'];
		}
    }
	mysql_connect(DB_SERVER,DB_SERVER_USERNAME,DB_SERVER_PASSWORD);
	 mysql_select_db(DB_DATABASE); 
	 
require(DIR_WS_INCLUDES . 'config_pdo.php');	 
$results = $dbConn->query("SELECT * FROM  text WHERE publish='1'");

while($Data = $results->fetch(PDO::FETCH_ASSOC)) 
{
	 //$ImageData=mysql_query("SELECT * FROM  text WHERE publish='1'") or die(mysql_error());
	 //$Data=mysql_fetch_array($ImageData);
	 //while($Data=mysql_fetch_array($ImageData))
	 // {
	  $mod=$Data['modalname'];
	   if($mod==$_REQUEST['Model']){ ?>



	  <?php }} 
	  
	  ?>
  
  <?php
  
  
  $page_title='Sneeze Guard Portable Model in-stock - ADM Sneezeguards'; 
  $page_description='Shop sneeze guard at ADM Sneezeguards California. Choose from our wide collection of food service Glass Models design for your buffet, salad bar or pizza restaurant.';
  $page_keyword='sneeze guard choose custom, Sneeze Guard Models design, custom Glass Barrier for office, Choose custom line sneeze guard';



require(DIR_WS_INCLUDES . 'header_new_design.php');


// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);
		$servername = DB_SERVER;
		$username = DB_SERVER_USERNAME;
		$password = DB_SERVER_PASSWORD;
		$dbname = DB_DATABASE;
		$connt = mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());



?>



       <script>
	    var modal='<?echo $Data['modalname'];?>'
var modal2='<? echo $_REQUEST['Model'];?>'
var firsttext='';
var secondtext='';
var thirdtext='';
var fourthtext='';
var fifthtext='';
//alert(modal);

if(modal==modal2){

var firsttext='<?echo $Data['text']; ?>'
var secondtext='<?echo $Data['text1']; ?>'
var thirdtext='<?echo $Data['text2']; ?>'
var fourthtext='<?echo $Data['text3']; ?>'
var fifthtext='<?echo $Data['part']; ?>'


}
	   </script>
	   
<script type="text/javascript" src="jquery-latest.js"></script>
<script type="text/javascript" src="thickbox.js"></script>
	   
<link rel="stylesheet" type="text/css" href="ext/jquery/ui/redmond/jquery-ui-1.8.6.css" />
<script type="text/javascript" src="ext/jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="ext/jquery/ui/jquery-ui-1.8.6.min.js"></script>



<script src="jquery.confirm/jquery.confirm.js"></script>
   
	   
	   
<script type="text/javascript">

//var firsttext='<?echo $Data['text']; ?>'


//alert(firsttext);
function writetext(what){
document.getElementById('textarea56').innerHTML=''+what+'';
}
function notext(){
document.getElementById('textarea56').innerHTML='';
}

</script>
<style type="text/css">

</style>
<?php if(!isset($_REQUEST['type'])) { ?>
    <script type="text/javascript">
	var queryS="";
	function showPop(n)
	{
		 queryS=$(n).find('#url').text();
		querySA=queryS.split('&');
		
		var n=querySA[0].split('=');
		var l=n[1];
			
		if(l=='114'){
			$('.delete').click();
		}else if(l=='110'){
			$('.delete').click();
		}else if(l=='111'){
			$('.delete').click();
		}
		else if(l=='111'){
			$('.delete').click();
		}
		else{
			document.location.href="product_info.php?"+queryS+"&osCsid=<?=$_REQUEST['osCsid']?>";
		}
	}
	function myFunction()
{
alert("some of the items you have chosen will take and additional 4-5 days to produce are you ok to proceed with that");
}
//for comment

/*function myFunction2()
{
var x;
var r=confirm("Press a button!");
if (r==true)
  {
  x="You pressed OK!";
  }
else
  {
  x="You pressed Cancel!";
  }
document.getElementById("demo").innerHTML=x;
}*/
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
                //$("#message_line").css({"display":"block", "left":"239px", "width":"94px", "bottom":"-242px"});
               // $("#message_w").html("Choose the length that fits your needs");
               // $(".smallText").mouseover(action_event);
               // setInterval(action_event, 3000);
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
   <html>


</head>


	<?php
if($category_name=="ES90" || $category_name=="ES92" || $category_name=="ES47")
{
?>
   <style>
   .select-bay-main-list li img{width:15%;}
   </style>
<?php
}
else{
?>
<style>
.select-bay-main-list li img{width:20%;}
   </style>	
	
<?php
}
?>
	
   <style type="text/css">
   .container {
    width: 100% !important;
    max-width: 100% !important;
}  
		.main-container-select-bay{    
		width: 100%;
		height:550px;
    background-color: #fff;
    margin-top: 95px;
   /* border: 5px solid #cccccc;*/
}

.select-bay-main-list{list-style-type: none;
  margin: 0;
  padding: 0;
}
.select-bay-main-list li{
display:inline;
width:20%;
padding:2%;
}
.select-bay-heading{width:99%;text-align:center;margin-top:20px;height:40px;background-color:#969696;padding-top: 9px;border-radius: 9px;}
.select-bay-heading h2{font-size:20px;color:#fff;}

@media screen and (max-width: 992px) {
	   .container {
    width: 90% !important;
	
	   }
	.main-container-select-bay{    
		width: 100%;
		height:auto;
		
	}
	.select-bay-main-list li{
		display:block;
		width:100%;
	}
	.select-bay-main-list li img{width:85%;}



}

@media screen and (max-width: 480px) {
	#confirmBox {
    width: 90%;
    left: 60%;
}
.select-bay-heading h2{font-size:16px;}
.select-bay-heading{padding-top: 12px;}
}


@media screen and (max-width: 360px) {
	#confirmBox {
    width: 90%;
    left: 70%;
}
.select-bay-heading h2{font-size:14px;}
.select-bay-heading{padding-top: 15px;}

}

   </style>








<div class="main-container-select-bay" align="center"  onmouseover="openCity(event, 'Hide');hide_cart_data()">

 
 
<?php
if($category_name=='')
{
echo'<div class="select-bay-heading" align="center"><h2>You have not selected any model.</h2></div>';	
}
else{
?>


<div class="select-bay-heading" align="center"><h2><?php echo$category_name ?>( Choose the width of your countertop )</h2></div>


	<ul class="select-bay-main-list">	
 
            <?if($category_name=="ES29" || $category_name=="ES82" || $category_name=="ES90" || $category_name=="ES47" || $category_name=="ES92" || $category_name=="ES53"|| $category_name=="ORBIT360"|| $category_name=="B950 SWIVEL"|| $category_name=="B950"){?>
                <li>
              
                        <a id="1bay" href="javascript:void(0);"><img src="images/bays/<?php echo $category_name?>_1baySelect.png" alt="1BAY <?php echo $category_name ?>" title="<?php echo $category_name ?> 1BAY"></a>
                 
                </li>
                <li>
                   
                        <a id="2bay" href="javascript:void(0);"><img src="images/bays/<?php echo $category_name?>_2baySelect.png" alt="2BAY <?php echo $category_name ?>" title="<?php echo $category_name ?> 2BAY"></a>
                   
                </li>
                <li>
                   
                        <a id="3bay" href="javascript:void(0);"><img src="images/bays/<?php echo $category_name?>_3baySelect.png" alt="3BAY <?php echo $category_name ?>" title="<?php echo $category_name ?> 3BAY"></a>
                   
                </li>
                <li>
                   
                        <a id="4bay" href="javascript:void(0);"><img src="images/bays/<?php echo $category_name?>_4baySelect.png" alt="4BAY <?php echo $category_name ?>" title="<?php echo $category_name ?> 4BAY"></a>
                   
                </li>
				<?php
				if($category_name=="ES90" || $category_name=="ES92" || $category_name=="ES47")
				{
				?>
				   <li>
                   
                        <a id="2bay_ext" href="javascript:void(0);"><img src="images/bays/<?php echo $category_name?>_2bayextSelect.png" alt="2BAY_EXT <?php echo $category_name ?>" title="<?php echo $category_name ?> 2BAY_EXT"></a>
                   
                </li>
				
				<?php
				}
				?>
				
				
            <?} else {?>
			
			
			
				<?php
				if($category_name=="EP5" || $category_name=="EP6" || $category_name=="Ring-EP5" || $category_name=="EP15"  || $category_name=="EP11" || $category_name=="EP12" || $category_name=="EP21" || $category_name=="EP22" || $category_name=="EP36" || $category_name=="ES31" || $category_name=="ES40" || $category_name=="ES67" || $category_name=="ES73")
				{
				?>
				
				
			
                <li>
                   
						
                        <a href="product_info.php?id=<?=$cpath_list[1]?>&type=1BAY&osCsid=<?=$_REQUEST['osCsid']?>"><img src="images/bays/<?php echo $category_name?>_1baySelect.png" alt="1BAY <?php echo $category_name ?>" title="<?php echo $category_name ?> 1BAY"></a>
                   
                </li>
                <li>
                   
                        <a href="product_info.php?id=<?=$cpath_list[1]?>&type=2BAY&osCsid=<?=$_REQUEST['osCsid']?>"><img src="images/bays/<?php echo $category_name?>_2baySelect.png" alt="2BAY <?php echo $category_name ?>" title="<?php echo $category_name ?> 2BAY"></a>
                   
                </li>
                <li>
                   
                        <a href="product_info.php?id=<?=$cpath_list[1]?>&type=3BAY&osCsid=<?=$_REQUEST['osCsid']?>"><img src="images/bays/<?php echo $category_name?>_3baySelect.png" alt="3BAY <?php echo $category_name ?>" title="<?php echo $category_name ?> 3BAY"></a>
                   
                </li>
                <li>
                   
                        <a href="product_info.php?id=<?=$cpath_list[1]?>&type=4BAY&osCsid=<?=$_REQUEST['osCsid']?>"><img src="images/bays/<?php echo $category_name?>_4baySelect.png" alt="4BAY <?php echo $category_name ?>" title="<?php echo $category_name ?> 4BAY"></a>
                   
                </li>
				
			  <?php
			  } 
			  else{
			  ?>	
				
				
			
                <li>
                   
						
                        <a href="product_info.php?id=<?=$cpath_list[1]?>&type=1BAY&osCsid=<?=$_REQUEST['osCsid']?>"><img src="images/bays/<?php echo $category_name?>_1baySelect.png" alt="1BAY <?php echo $category_name ?>" title="<?php echo $category_name ?> 1BAY"></a>
                   
                </li>
                <li>
                   
                        <a href="product_info.php?id=<?=$cpath_list[1]?>&type=2BAY&osCsid=<?=$_REQUEST['osCsid']?>"><img src="images/bays/<?php echo $category_name?>_2baySelect.png" alt="2BAY <?php echo $category_name ?>" title="<?php echo $category_name ?> 2BAY"></a>
                   
                </li>
                <li>
                   
                        <a href="product_info.php?id=<?=$cpath_list[1]?>&type=3BAY&osCsid=<?=$_REQUEST['osCsid']?>"><img src="images/bays/<?php echo $category_name?>_3baySelect.png" alt="3BAY <?php echo $category_name ?>" title="<?php echo $category_name ?> 3BAY"></a>
                   
                </li>
                <li>
                   
                        <a href="product_info.php?id=<?=$cpath_list[1]?>&type=4BAY&osCsid=<?=$_REQUEST['osCsid']?>"><img src="images/bays/<?php echo $category_name?>_4baySelect.png" alt="4BAY <?php echo $category_name ?>" title="<?php echo $category_name ?> 4BAy"></a>
                   
                </li>
				
			  <?php
			  } 
			  ?>	
				
				
				
            <?php } ?>
        </ul>

	<?php
}
	
	?>


<?php   
// $var1= $_GET['cPath'];
        // $var2=  explode("_",$var1);
        // $var4=array();
        // $i=0;
        // $rs=tep_db_query("select * from custom_popup where id='".$var2[1]."'and model_id='112'");




$var1= $_GET['cPath'];
		
        $var2=  explode("_",$var1);
		
		
        $var4=array();
        $i=0;
		if($var2[1]=="123"|| $var2[1]=="124"|| $var2[1]=="125")
		{
        $rs=tep_db_query("select * from custom_popup where id='111'and model_id='87'");
		}
		else if($var2[1]=="128" || $var2[1]=="80" || $var2[1]=="81"){
		$rs=tep_db_query("select * from custom_popup where id='113'and model_id='112'");	
		}
		else{
        $rs=tep_db_query("select * from custom_popup where id='".$var2[1]."'and model_id='87'");
		}
        while($rw=tep_db_fetch_array($rs)){
            $var4[$i]=$rw['option_popup'];
            $i++;
        }
       // echo'<pre>';print_r($var4);
?>
<script>
    $(document).ready(function(){
		
       $("#1bay").click(function(){
		   
		   ur=window.location.href;
		   ur1=ur.split("&");
		   id=ur1[1].split("_");
           var elem = $(this).closest('.item');
		
		$.confirm({
		
	
			'title'		: 'Confirmation',
			'message'	: '<?php echo $var4[0];?>',
			'buttons'	: {
				'Proceed'	: {
					'class'	: 'blue',
					'action': function(){
						
						//alert(id[1]);
						if(id[1]=='123' || id[1]=='125' || id[1]=='124' || id[1]=='114' || id[1]=='111' || id[1]=='110')
						{
						document.location.href="product_info.php?id="+id[1]+"&type=1BAY&osCsid=<?=$_REQUEST['osCsid']?>";	
						}
						else{
						document.location.href="product_info.php?id="+id[1]+"&type=1BAY&osCsid=<?=$_REQUEST['osCsid']?>";	
						}
						
						
						
					}
				},
				'Cancel'	: {
					'class'	: 'gray',
					'action': function(){}	// Nothing to do in this case. You can as well omit the action property.
					
				}
			}
		});
       }) ;
       $("#2bay").click(function(){
		   ur=window.location.href;
		   ur1=ur.split("&");
		   id=ur1[1].split("_");
           var elem = $(this).closest('.item');
		
		$.confirm({
		
	
			'title'		: 'Confirmation',
			'message'	: '<?php echo $var4[1];?>',
			'buttons'	: {
				'Proceed'	: {
					'class'	: 'blue',
					'action': function(){
						if(id[1]=='123' || id[1]=='125' || id[1]=='124' || id[1]=='114' || id[1]=='111' || id[1]=='110')
						{
						document.location.href="product_info.php?id="+id[1]+"&type=2BAY&osCsid=<?=$_REQUEST['osCsid']?>";	
						}
						else{
						document.location.href="product_info.php?id="+id[1]+"&type=2BAY&osCsid=<?=$_REQUEST['osCsid']?>";	
						}
						
					}
				},
				'Cancel'	: {
					'class'	: 'gray',
					'action': function(){}	// Nothing to do in this case. You can as well omit the action property.
					
				}
			}
		});
       }) ;
       $("#3bay").click(function(){
		   ur=window.location.href;
		   ur1=ur.split("&");
		   id=ur1[1].split("_");
           var elem = $(this).closest('.item');
		
		$.confirm({
		
	
			'title'		: 'Confirmation',
			'message'	: '<?php echo $var4[2];?>',
			'buttons'	: {
				'Proceed'	: {
					'class'	: 'blue',
					'action': function(){
						
						if(id[1]=='123' || id[1]=='125' || id[1]=='124' || id[1]=='114' || id[1]=='111' || id[1]=='110')
						{
						document.location.href="product_info.php?id="+id[1]+"&type=3BAY&osCsid=<?=$_REQUEST['osCsid']?>";	
						}
						else{
						document.location.href="product_info.php?id="+id[1]+"&type=3BAY&osCsid=<?=$_REQUEST['osCsid']?>";	
						}
						
					}
				},
				'Cancel'	: {
					'class'	: 'gray',
					'action': function(){}	// Nothing to do in this case. You can as well omit the action property.
					
				}
			}
		});
       }) ;
	   
	   
       $("#4bay").click(function(){
		   ur=window.location.href;
		   ur1=ur.split("&");
		   id=ur1[1].split("_");
           var elem = $(this).closest('.item');
		
		$.confirm({
		
	
			'title'		: 'Confirmation',
			'message'	: '<?php echo $var4[3];?>',
			'buttons'	: {
				'Proceed'	: {
					'class'	: 'blue',
					'action': function(){
						
						if(id[1]=='123' || id[1]=='125' || id[1]=='124' || id[1]=='114' || id[1]=='111' || id[1]=='110')
						{
						document.location.href="product_info.php?id="+id[1]+"&type=4BAY&osCsid=<?=$_REQUEST['osCsid']?>";	
						}
						else{
						document.location.href="product_info.php?id="+id[1]+"&type=4BAY&osCsid=<?=$_REQUEST['osCsid']?>";	
						}
						
					}
				},
				'Cancel'	: {
					'class'	: 'gray',
					'action': function(){}	// Nothing to do in this case. You can as well omit the action property.
					
				}
			}
		});
       }) ;
	   
	   
	   
       $("#2bay_ext").click(function(){
		   ur=window.location.href;
		   ur1=ur.split("&");
		   id=ur1[1].split("_");
           var elem = $(this).closest('.item');
		
		$.confirm({
		
	
			'title'		: 'Confirmation',
			'message'	: '<?php echo $var4[3];?>',
			'buttons'	: {
				'Proceed'	: {
					'class'	: 'blue',
					'action': function(){
						if(id[1]=='123' || id[1]=='125' || id[1]=='124' || id[1]=='114' || id[1]=='111')
						{
						document.location.href="product_info.php?id="+id[1]+"&type=2BAYEXT&osCsid=<?=$_REQUEST['osCsid']?>";	
						}
						else{
						document.location.href="product_info.php?id="+id[1]+"&type=2BAYEXT&osCsid=<?=$_REQUEST['osCsid']?>";	
						}
						
						
					}
				},
				'Cancel'	: {
					'class'	: 'gray',
					'action': function(){}	// Nothing to do in this case. You can as well omit the action property.
					
				}
			}
		});
       }) ;
	   
	   
        
    });
    
        
    
</script>

<?php }

?>

</div>




<?php

require(DIR_WS_INCLUDES . 'footer_new_design.php');
?>


	 