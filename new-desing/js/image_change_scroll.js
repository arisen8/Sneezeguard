
$(window).on("scroll touchmove", function() 
{
	
	
	
	
	<?php
	
	for($i=1; $i<=906; $i++)
	{
	$next=$i+1;	
	
	echo'
	if ($(document).scrollTop() >= $("#one'.$i.'").position().top && $(document).scrollTop() < $("#one'.$next.'").position().top  ) 
	{
		$("#scrollediv").css("background-image", "url(img/image'.$i.'.jpg)")
    };
	
	';
	
	}
	
	?>
	
	/*
	if ($(document).scrollTop() >= $("#one").position().top && $(document).scrollTop() < $("#two").position().top  ) 
	{
		$('body').css('background-image', 'url(images/image1.jpg)')
    };
	if ($(document).scrollTop() >= $("#two").position().top && $(document).scrollTop() < $("#three").position().top)
	{
		$('body').css('background-image', 'url(images/image2.jpg)')
    };
   if ($(document).scrollTop() >= $("#three").position().top && $(document).scrollTop() < $("#four").position().top ) 
   {
		$('body').css('background-image', 'url(images/image3.jpg)')
   };
   if ($(document).scrollTop() >= $("#four").position().top) 
   {
		$('body').css('background-image', 'url(images/image4.jpg)')
   };
   
   */
   
  
});
