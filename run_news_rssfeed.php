<?php
header("Access-Control-Allow-Origin: https://feedburner.google.com/fb/a/resetFeed?id=5kdrcsvgeghfbv2l2hasret7d0");
header("Access-Control-Allow-Methods: GET, POST, PUT");
header("Access-Control-Allow-Headers: Content-Type");
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    console.log('run...');
    news_feed_call();

  function news_feed_call(){
  $.ajax({
    type:'POST',
    url:'https://www.sneezeguard.com/news_rss.php',
    async: false,
  success: function(){
    	console.log('success');
    setTimeout(function(){
          $.ajax({
    			type:'GET',
    			url:'https://feedburner.google.com/fb/a/resetFeed?id=5kdrcsvgeghfbv2l2hasret7d0&callback=?',
  				success: function(){
    				console.log('resync rss feed success...');    
 				}			
    		});
    }, 10000);



  }
    });
}
});
</script>