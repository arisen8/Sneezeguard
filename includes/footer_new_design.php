  <!-- SOCIAL MEDIA SHARE LINKS START -->
  <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

      <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

  <!-- SOCIAL MEDIA SHARE LINKS END -->

<div class="main"  onmouseover="openCity(event, 'Hide');hide_cart_data()">
<footer class="ct-footer">
	<!-- Button trigger modal -->
<button type="button" id="newsalert" class="btn btn-primary btn-dark"  data-toggle="modal" data-target="#exampleModal">
  
</button>

<!-- Modal -->
<div class="modal fade show" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div id="modal-dialog-change" class="modal-dialog mt-5" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <button type="button" class="close close-button model-close p-1" data-dismiss="modal" aria-label="Close">
		<img src="img/close.png" width="70%" alt="sneeze guard close" title="glass guards close">
        </button>
      </div>
      <div class="modal-body newsalert-body pt-1">
	  </div>
    </div>
  </div>
</div>
<!-- model -->
  <div class="container-fluid" >
    <ul class="ct-footer-list text-center-sm">
	<li class="footer-main-list1">
       <div class="footer-logo-img"  >
		  <img src="img/logo-new.png" alt="custom sneeze guards" title="SNEEZE GUARD MANUFACTURERS"></div>
	</li>
	<li class="footer-main-list1">
        <h2 class="ct-footer-list-header" >SUPPORT <i class="fa fa-caret-down" id="down-button" onclick="show_list_footer1(this)"></i></h2>
			<ul class="footerlist1">
			<?php $sel = mysqli_query($connt,"select * from footer_links where menu='1'");
				while($result = mysqli_fetch_assoc($sel))
				{

					$urlsss=$result['url'];
					
					
					if($urlsss=='')
					{
						$urlsss="index.php";	
					}
					?>
					
					
					<li >
						<a href="<?php echo tep_href_link($urlsss, '', 'SSL') ?>" ><?php echo $result['sub_menu'] ?></a>
					  </li>
					<?php
				}
			?>
		  </ul>
	</li>
	<li class="footer-main-list2">
        <h2 class="ct-footer-list-header" >RESOURCES <i class="fa fa-caret-down" id="down-button" onclick="show_list_footer2(this)"></i></h2>
			<ul class="footerlist2">
			<?php
				$sel = mysqli_query($connt,"select * from footer_links where menu='2'");
				while($result = mysqli_fetch_assoc($sel))
				{
					$urlsss=$result['url'];
					if($urlsss=='')
					{
						$urlsss="index.php";	
					}
					?>
					
					
						<li >
							<a href="<?php echo tep_href_link($urlsss, '', 'SSL') ?>" ><?php echo $result['sub_menu'] ?></a>
						</li>
					<?php
				}
			?>
		  </ul>
	</li>
	<li class="footer-main-list3">
        <h2 class="ct-footer-list-header" >ABOUT <i class="fa fa-caret-down" id="down-button" onclick="show_list_footer3(this)"></i></h2>
		
		
			<ul  class="footerlist3">
			<?php 
				$sel = mysqli_query($connt,"select * from footer_links where menu='3'");
				while($result = mysqli_fetch_assoc($sel))
				{
					$url_about=explode("?",$result['url']);
					$urlsss=$url_about[0];

					if($urlsss=='')
					{
						$urlsss="index.php";	
					}
					?>
					
					
						<li>
							<a href="<?php echo tep_href_link($urlsss, $url_about[1], 'SSL') ?>" ><?php echo $result['sub_menu'] ?></a>
						</li>
					<?php
				}
			?>
		  </ul>
	</li>
	<li class="footer-main-list4">
        <ul>
	<li>&nbsp;</li>	
			<li>&nbsp;</li>
			<li>
			<div width="100%" align="left" class="footer-social-icon " >
			<a href="https://www.facebook.com/admsneezeguards"  target="_blank" class="fa fa-facebook font-awesom-social"></a>
			<a href="https://www.instagram.com/admsneezeguard"  target="_blank" class="fa fa-instagram font-awesom-social"></a>
			<a href="https://twitter.com/ASneezeguards"  target="_blank" class="fa fa-twitter font-awesom-social"></a>
			<a href="https://www.linkedin.com/company/adm-sneezeguards"  target="_blank" class="fa fa-linkedin font-awesom-social"></a>
			<a href="https://www.youtube.com/channel/UCXn-Tc-uqqY8blZZapPDNXg"  target="_blank" class="fa fa-youtube font-awesom-social"></a>
			<a href="https://www.pinterest.com/admsneezeguards1"  target="_blank" class="fa fa-pinterest font-awesom-social"></a>
			</div>
			</li>	
        </ul>
      </li>
      <li class="footer-main-list5">
        <h2 class="ct-footer-list-header">NEWSLETTER</h2>
        <ul>
       	<li>
		<div align="left" class="newsletter">
			<form id="newsletter" action="" type="POST">
			<input type="email" placeholder="Email Address" name="email" required>
			<input type="hidden" name="urlnews" id="urlnews" value="<?=tep_href_link('includes/newsletter.php')?>">
			<input type="hidden" name="islogin"  value="<?=$_SESSION['customer_id']?>">
			<button type="submit">JOIN</button>
			<br /><br />
			<span class="newsletter-terms">* By submitting your email address you agree to the <strong class="term-condition"><a href="<?php echo tep_href_link('conditions.php', '', 'SSL') ?>">Terms & Conditions</a></strong></span>
			</form>
			</div>
		</li>
		<li>&nbsp;</li>
			<li>
			<div class="dealer-button"><a href="<?php echo tep_href_link('contact-us-dealer.php', '', 'SSL')?>"><button >Dealer Inquiries</button> </a></div>
			
		</li>
		
        </ul>
      </li>
    </ul>
  </div>
  <div class="ct-footer-post">
    <div class="container">
	
	<div class="ct-footer-left">
	<img src="img/nsf-logo.png" alt="nsf sneeze guard" title="adm sneezeguards">
	</div>
	<div class="ct-footer-right">
	<img src="images/SSL.gif" alt="SSL sneeze guard" title="food guards">
	</div>
	
      <div class="inner-left">
        <ul>
          <li>
            <a href="<?php echo tep_href_link('common.php', '', 'SSL')?>">FAQ</a>
          </li>
          <li>
            <a href="<?php echo tep_href_link('about.php', 'class=about', 'SSL')?>">Blog</a>
          </li> 
          <li>
            <a href="<?php echo tep_href_link('term.php', '', 'SSL')?>"> Helpful Terminology</a>
          </li>
          <li>
            <a href="<?php echo tep_href_link('issue-report.php', '', 'SSL');?>">Report an Issue</a>
          </li>
           
		  <li>
            <a href="<?php echo tep_href_link(FILENAME_PRIVACY, '', 'SSL');?>">Privacy Policy</a>
          </li>
           
        </ul>
      </div>
	  
      <div class="inner-right">
        <p>
Copyright©2020 ADM Sneezeguards A division of Advanced Design Manufacturing L.L.C. </p>
        
      </div>
	  


    </div>
  </div>
</footer>
</div>
</body>
</html> 
