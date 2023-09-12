<!DOCTYPE html>
<html dir="ltr" lang="en">
<!--<![endif]-->

<head>
    <?php

    include "../inc/config.php"; ?>
    <?php include "../inc/heads/wishlistHead.php" ?>
</head>

<body class="home1">

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
                        <a href="contact-us.php"><span>404 Error</span></a>
                    </li>

                </ul>
                <!--End Breadcumb area -->


                <div class="row">
                    <div id="content" class="col-sm-12">
                        <h1 style="text-align: center;">404 Error</h1>
                        
                    </div>
                </div>
            </div>
            <!--End of Contact Us Area-->
            <?php
            if (isset($_GET['success'])) {
                echo ($_GET['success'] == "true") ? "<script>alert('Your request is submitted and you will be responded soon');window.location.href='../index.php'</script>" : "<script>alert('An error occur while submitting your request .plz try again later')</script>";
            }
            ?>

            <script>
                $(document).ready(function () {
                    $('body').on('click', '[name="submitMessage"]', function () {
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