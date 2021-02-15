<?php

/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  require('includes/application_top.php');

  require(DIR_WS_INCLUDES . 'template_top.php');


		$servername = DB_SERVER;
		$username = DB_SERVER_USERNAME;
		$password = DB_SERVER_PASSWORD;
		$dbname = DB_DATABASE;
		$connt = mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());


//delete code
if(isset($_GET['delid']))
{
    $proid = $_GET['delid'];
    if(mysqli_query($connt,"delete from homepage_blog where id='$proid'"))
    {
        // header("location:http://localhost/deepak1/indexadd.php");
		echo "Product delete successfully";
    }
}
//add code

if(isset($_POST['sub']))
{
    $proname = $_POST['model_name'];
    $heading = $_POST['heading'];
    $desc = $_POST['content'];
    $url = $_POST['url'];
    $fn = $_FILES['att']['name'];
    $file = $_FILES['att']['tmp_name'];
    $ext = $_FILES['att']['type'];
    $size = $_FILES['att']['size'];
    $imageinfo = getimagesize($file);
    $imagewidth = $imageinfo[0];
    $imageheight = $imageinfo[1];
    //for get extension
    $ext = strtolower(basename($ext));

    if($ext == "jpg" || $ext == "jpeg" || $ext == "gif" || $ext == "png")
    {
        if($size < 5242880)
        {
            if($imagewidth%640 == 0 && $imageheight%480 == 0)
            {
                if(move_uploaded_file($file,'upload/'.$fn))
                {
                    if(mysqli_query($connt,"insert into homepage_blog (model_name,subheading,content,image,url) values('$proname','$heading','$desc','$fn','$url')"))
                    {
                        echo "data upload successfully";
                    }
                }
            }
            else
            {
                echo  "This image height and width is not sutable";
                
            }
        }
        else
        {
            echo "this file is more than 5mb";
        }
    }
    else
    {
        echo"this is not right";
    }
}
//edit code
if(isset($_GET['eid']))
{
    $eid = $_GET['eid'];
    $sel = mysqli_query($connt,"select * from homepage_blog where id='$eid'");
    $result = mysqli_fetch_array($sel);
}

if(isset($_POST['update']))
{
    $eid = $_POST['hid'];
    $proname = $_POST['model_name'];
    $heading = $_POST['heading'];
    $desc = $_POST['content'];
    $url = $_POST['url'];
    $fn = $_FILES['att']['name'];
    if(empty($fn))
    {
        if(mysqli_query($connt,"update homepage_blog set model_name='$proname',subheading='$heading',content='$desc',url='$url' where id='$eid'"))
        {
            echo "update sucessfully";
        }
    }
    else
    {
        $eid = $_POST['hid'];
        $eimg = $_POST['himg'];
        $proname = $_POST['model_name'];
        $heading = $_POST['heading'];
        $desc = $_POST['content'];
        $url = $_POST['url'];
        $fn = $_FILES['att']['name'];
        $file = $_FILES['att']['tmp_name'];
        $ext = $_FILES['att']['type'];
        $size = $_FILES['att']['size'];
        $imageinfo = getimagesize($file);
        $imagewidth = $imageinfo[0];
        $imageheight = $imageinfo[1];
        $ext = strtolower(basename($ext));

        if($ext == "jpg" || $ext == "jpeg" || $ext == "gif" || $ext == "png")
        {
            if($size < 5242880)
            {
                if($imagewidth%640 ==0 && $imageheight%480 == 0)
                {
                    if(move_uploaded_file($file,'upload/'.$fn))
                    {
                        if(mysqli_query($connt,"update homepage_blog set model_name='$proname',subheading='$heading',content='$desc',image='$fn',url='$url' where id='$eid'"))
                        {
                            echo "data upload successfully";
                        }
                    }
                }
                else
                {
                    echo  "This image height and width is not sutable";
                    
                }
            }
            else
            {
                echo "This file is more than 5mb";
            }
        }
        else
        {
            echo"Image extenstion is not match";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply backend on third slider</title>
</head>

<body>



<?php

if(!empty($eid))
{
	?>
	<h1 class="pageHeading">Edit home page blog</h1>
	<?php
}
else
{
	?>
	<h1 class="pageHeading">Add home page blog</h1>
	<?php
}

?>
    <form action="" method="post" enctype="multipart/form-data">
	<?php
	
	if(!empty($eid))
	{
		?>
		<input type="hidden" name="hid" value="<?php echo $result['id'] ?>">
		<?php
	}
	
	?>
	<table>
		<tr>
			<td><label for="model_name" class="main"><strong>Model name</strong></label></td>
			<td><input type="text" name="model_name" id="model_name" value="<?php 
			if(!empty($eid))
			{
				echo $result['model_name'];
			}
			?>"></td>
		</tr>
        <tr>
			<td><label for="heading" class="main"><strong>Heading</strong></label></td>
			<td><input type="text" name="heading" id="heading" value="<?php 
			if(!empty($eid))
			{
				echo $result['subheading'];
			}
			?>"></td>
		</tr>
		<tr>
			<td><label for="content" class="main"><strong>content</strong></label></td>
			<td><textarea type="text" name="content" id="content" cols="150" rows="10"><?php
				if(!empty($eid))
				{
					echo $result['content'];
				}
			?></textarea></td>
			
		</tr>
		<tr>
			<td><label for="Image" class="main"><strong>Image</strong></label></td>
			<td><input type="file" name="att" id="image">Image size 640X480</td>
		</tr>
		<tr>
			<td><label for="url" class="main"><strong>Url</strong></label></td>
			<td><input type="text" name="url" id="url" value="<?php 
				if(!empty($eid))
				{
					echo $result['url'];
				}
			?>"></td>
		</tr>
		<tr>
			<?php 
			if(!empty($eid))
			{
				?>
					<td colspan="2"><input type="submit" value="Update" name="update"></td>
				<?php
			}
			else
			{
				?>
					<td colspan="2"><input type="submit" name="sub"></td>
				<?php
			}
			?>
		</tr>
	</table>
        
       
        
        
    </form> 

    
    <table border="1" width="100%" cellpadding="6" cellspacing="8" style="border-collapse:collapse;margin-top:30px;">
        <tr style="background:#706B5A;">
			<td><strong>S.no</strong></td>
            <td><strong>Id</strong></td>
            <td><strong>Name</strong></td>
            <td><strong>Heading</strong></td>
            <td><strong>Description</strong></td>
            <td><strong>Image</strong></td>
            <td><strong>Url</strong></td>
            <td><strong>Action</strong></td>
        </tr>
        <?php 
        
        $sel = mysqli_query($connt,"select * from homepage_blog");
        $sn=1;
        while($arr = mysqli_fetch_assoc($sel))
        {
            $idss=$arr['id'];
			
            $edit=   'eid='.$idss.'';
            $delete=   'delid='.$idss.'';
            ?>
        <tr>
			<td><?php echo $sn ?></td>
            <td><?php echo $arr['id'] ?></td>
            <td><?php echo $arr['model_name'] ?></td>
            <td><?php echo $arr['subheading'] ?></td>
            <td><?php echo $arr['content'] ?></td>
            <td><img src="upload2/<?php echo $arr['image'] ?>" alt="<?php echo $arr['name'] ?>" width="100px"></td>
            <td><a href="<?php echo $arr['url'] ?>"><?php echo $arr['url'] ?></a></td>
            <td><a
                    href="<?php echo tep_href_link('homepage_blog.php', $edit);?>">Edit</a>&nbsp;&nbsp;&nbsp;<a
                    href="<?php echo tep_href_link('homepage_blog.php', $delete);?>">Delete</a></td>
        </tr>
        <?php
		$sn++;
        }
        ?>
	
    </table>
</body>

</html>