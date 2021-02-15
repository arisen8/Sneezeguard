<?php 
ini_set('session.cookie_httponly',1);
ini_set('session.cookie_secure',1);
  
require('includes/application_top.php');
require(DIR_WS_INCLUDES . 'header_new_design.php'); 
require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_CREATE_ACCOUNT_SUCCESS);
$breadcrumb->add(NAVBAR_TITLE_1);
$breadcrumb->add(NAVBAR_TITLE_2);
if (sizeof($navigation->snapshot) > 0) {
  $origin_href = tep_href_link($navigation->snapshot['page'], tep_array_to_string($navigation->snapshot['get'], array(tep_session_name())), $navigation->snapshot['mode']);
  $navigation->clear_snapshot();
} else {
  $origin_href = tep_href_link(FILENAME_DEFAULT);
}
if($_GET['message']=='success')
{
$oscsID=$_GET['osCsid'];
?>
<script>
window.parent.location='create_account_success.php?osCsid=<?php echo $oscsID;?>';
</script>
<?php
}
?>
 
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<body>
<section>
    <div class="mt-5">
        <h1>&nbsp;</h1>
    </div>
    <h4 class="text-center p-2 font-weight-bold">Your Account Has Been Created!</h4>
    <hr>
    <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-3 text-center">
          <img src="images/table_background_man_on_board.gif" border="0" alt="Your Account Has Been Created!" title=" Your Account Has Been Created! " width="100%">
        </div>
        <div class="col-md-9 col-sm-9 mt-5">
            <p class="text-left">Congratulations! Your new account has been successfully created! You can now take advantage of member priviledges to enhance your online shopping experience with us. If you have ANY questions about the operation of this online shop, please email the store owner.</p>
            <p class="text-left">A confirmation has been sent to the provided email address. If you have not received it within the hour, please contact us.</p>
            <div class="text-right mt-5 mr-5">
            <a href="<?=tep_href_link(FILENAME_ACCOUNT) ?>" class="btn btn-sm btn-outline-dark text-uppercase">Continue <span class="fa fa-arrow-circle-right"></span></a>
        </div>
        </div>
        </div>
    </div>
</section>
</body>
</html>
<?php require(DIR_WS_INCLUDES . 'footer_new_design.php');?>
