<!DOCTYPE html> 
<html dir="ltr" lang="en">
  <!--<![endif]-->
  <head>
  <?php

  include "../inc/config.php"; ?>
    <?php include "../inc/heads/wishlistHead.php" ?>
</head>

  <body class="
                home1" >
    <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
    <div class="wrapper">
      <div id="shopify-section-header" class="shopify-section"><!--Start of Header Area-->
      <!--Start of Header Area-->
      <?php include "../inc/nav.php"; ?>
                <?php include "../inc/header.php"; ?>

                <!--End of Header Area-->
                <script type="text/javascript" defer>
                    $(document).ready(function () {
                        // top message bar
                        if ($.cookie('alertbtn_cookie') != 'closed') {
                            $('#shopify-section-header').parent().before(
                                '<div class="topbar alert alert-success" style="position:relative;margin: 0px;border: 0;"> MID-SEASON SALE UP TO 70% OFF. USE CODE: “SALE70”. SHOP NOW <button type="button" class="close" data-dismiss="alert" id="alertbtn">x</button></div>'
                            );
                        }

                        $('#alertbtn').on("click", function () {
                            $.cookie('alertbtn_cookie', 'closed', {
                                expires: 1,
                                path: '/'
                            });
                        });

                        /*--------------------------
                        Newsletter Popup Js 
                        ---------------------------- */
                        $("#newsletter-popup-conatiner").mouseup(function (e) {
                            var popContainer = $("#newsletter-popup-conatiner");
                            var newsLatterPop = $("#newsletter-pop-up");
                            if (e.target.id != newsLatterPop.attr('id') && !newsLatterPop.has(e.target)
                                .length) {
                                popContainer.fadeOut();
                            }
                        });

                        $('.hide-popup').on("click", function () {
                            var popContainer = $("#newsletter-popup-conatiner");
                            popContainer.fadeOut();
                        });

                        $('#dont_show').on("click", function () {
                            $.cookie('popup_cookie', 'pclosed', {
                                expires: 3,
                                path: '/'
                            });
                            $('.hide-popup').trigger('click');
                        });

                        if ($.cookie('popup_cookie') != 'pclosed') {
                            $('#newsletter-popup-conatiner').show();
                        }
                    });
                </script>
</div>
      
        <div id="shopify-section-contact-page" class="shopify-section"><!--Contact Us Area Start-->
<div class="container">
  


 

<!-- Breadcumb area start -->
<ul class="breadcrumb">
  <li><a href="../index.php" title="Back to the frontpage">
    Home
    </a>
  </li>
  
  <li>
    <a href="contact-us.html"><span>Contact US</span></a>
  </li>
  
</ul>
<!--End Breadcumb area -->

 
  <div class="row">
    <div id="content" class="col-sm-12">
      <h1>Contact info</h1>
      <h3>Our Location</h3>
      <!--Map area start -->
      <div >
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2950.6822073234102!2d-83.71685604946924!3d42.30664594636449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x883cac2c20114b69%3A0x96fe590afa21efb6!2s2300+Traverwood+Dr%2C+Ann+Arbor%2C+MI+48105!5e0!3m2!1sen!2s!4v1461260551915" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        
      </div>
      
      <!--Map area end -->
      <div class="form-horizontal">
        <form method="post" action="../Workshop.php" id="contact_form" accept-charset="UTF-8" class="contact-form">
          <input type="hidden" name="form_type" value="contact" />
          <input type="hidden" name="utf8" value="✓" />
        

        


        <fieldset>
          <legend>Leave a Message</legend>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-name">Name</label>
            <div class="col-sm-10">
              <input type="text" id="contactFormName" name="contact[name]" class="form-control" placeholder="Name" value="" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-name">Email</label>
            <div class="col-sm-10">
              <input type="text" id="contactFormEmail" name="contact[email]" class="form-control" placeholder="Email" autocorrect="off" autocapitalize="off" value="" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-name">Phone</label>
            <div class="col-sm-10">
              <input type="text" id="contactFormPhone" name="contact[phone]" class="form-control" placeholder="Phone" value="" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-name">Message</label>
            <div class="col-sm-10">
              <textarea class="form-control" rows="10" id="contactFormMessage" name="contact[body]" placeholder="Message"></textarea>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-name">&nbsp;</label>
            <div class="col-sm-10">
              <p style="float: none; text-align: right; clear: both; margin: 10px 0;">
                <input style="float:none; vertical-align: middle;margin:0px;" type="checkbox" id="contact_accept_agree" />
                <label style="display:inline; float:none" for="agree">
                  I agree with the terms and conditions.
                </label>
              </p>
            </div>
          </div>
          
        </fieldset>
        <div class="buttons submit">
          <div class="pull-right">
            <input class="btn btn-primary" id="submitMessage" name="submitMessage" type="submit" value="Send" />
          </div>
        </div>

        </form>
      </div>    
    </div>
  </div>
</div>
<!--End of Contact Us Area-->
<?php  
if(isset($_GET['success'])){
  echo ($_GET['success']=="true") ? "<script>alert('Your request is submitted and you will be responded soon');window.location.href='../index.php'</script>" : "<script>alert('An error occur while submitting your request .plz try again later')</script>" ;
}
?>

<script>
  $(document).ready(function() {
    $('body').on('click', '[name="submitMessage"]', function() {
      if ($('#contact_accept_agree').is(':checked')) {
        $(this).submit();
      }
      else {
        alert("You must agree with the terms and conditions of sales to check out.");
              return false;
              }
              });
      });
</script>
</div>
        
      <!-- End Content -->  
 <!-- End Content -->

 <?php include "../inc/QuickviewProduct.php" ?>
            <?php include "../inc/footer.php" ?>
            <?php include "../inc/newsletterpopup.php"; ?>
            <?php include "../inc/scripts.php" ?>
            <?php include "../inc/custom_card_JQ.php" ?>
            <script>
                $(document).ready(() => {
                    $("#_disappear").fadeOut(1)
                    $("#_appear").fadeIn(1)
                })
            </script>


        </div>
    </body>

</html>