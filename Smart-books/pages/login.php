<!DOCTYPE html>
<html dir="ltr" lang="en">
<!--<![endif]-->

<head>
    <?php

    include "../inc/config.php"; ?>
    <?php include "../inc/heads/wishlistHead.php" ?>
</head>

<body class="
                home1">
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
                        <div class="row">
                            <h1 class="page-heading">Account</h1>
                           
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="well">
                                    <h2>New Customer</h2>
                                    <p><strong>Register Account</strong></p>
                                    <p>By creating an account you will be able to shop faster, be up to date on an
                                        order's status, and keep track of the orders you have previously made.</p>
                                    <br>
                                    <a href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>register.php"
                                        id="button-account" class="btn btn-primary">Continue</a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="well">
                                    <h2>Returning Customer</h2>
                                    <p><strong>I am a returning customer</strong></p>
                                    <form method="post" action="../Workshop.php" id="customer_login"
                                        accept-charset="UTF-8" data-login-with-shop-sign-in="true">

                                        <input type="hidden" name="form_type" value="customer_login">
                                        <input type="hidden" name="utf8" value="✓">
                                        <input type="hidden" name="checkout_url" value="/account">




                                        <div class="note form-success" id="resetSuccess" style="display:none;">
                                            We've sent you an email with a link to update your password.
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="customer_email">Email</label>
                                            <input type="text" value="" name="customer[email]" id="customer_email"
                                                placeholder="Email" class="form-control" autocorrect="off"
                                                autocapitalize="off" autofocus="" data-last-active-input="">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="customer_password">Password</label>
                                            <input class="form-control" type="password" value=""
                                                name="customer[password]" id="customer_password" placeholder="Password">
                                            <a rel="nofollow" href="#"
                                                onclick="showRecoverPasswordForm();return false;">Forgot your
                                                password?</a>
                                        </div>

                                        <p class="submit">
                                            <input type="submit" value="Sign In" class="btn btn-primary">
                                            or <a class="btn-acct" href="../index.php">Return to Store</a>
                                        </p>
                                    </form>

                                    <div id="recover_password" style="display: none;">

                                        <h3>Reset your password</h3>
                                        <p>We will send you an email to reset your password.</p>

                                        <form method="post" action="../Workshop.php" accept-charset="UTF-8">
                                            <input type="hidden" name="form_type"
                                                value="recover_customer_password"><input type="hidden" name="utf8"
                                                value="✓">






                                            <div class="form-group">
                                                <label for="recover-email">Email</label>
                                                <input type="text" value="" name="email" class="form-control"
                                                    id="recover-email" placeholder="Email" autocorrect="off"
                                                    autocapitalize="off">

                                                <p class="submit lost-password form-group">
                                                    <button class="btn btn-primary" name="SubmitLogin"
                                                        id="button-account" type="submit">
                                                        <span>Submit</span>
                                                    </button>
                                                    or <a class="btn-acct" href="#"
                                                        onclick="hideRecoverPasswordForm();return false;">Cancel</a>
                                                </p>
                                            </div>
                                        </form>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                /*
                  Show/hide the recover password form when requested.
                */
                function showRecoverPasswordForm() {
                    document.getElementById('recover_password').style.display = 'block';
                    document.getElementById('customer_login').style.display = 'none';
                }

                function hideRecoverPasswordForm() {
                    document.getElementById('recover_password').style.display = 'none';
                    document.getElementById('customer_login').style.display = 'block';
                }

                // Allow deep linking to the recover password form
                if (window.location.hash == '#recover') { showRecoverPasswordForm() }

  // reset_success is only true when the reset form is

            </script>
            <!--End of Contact Us Area-->
            <?php
            if (isset($_GET['success']) && isset($_GET["reason"])) {
                echo "<script>alert('Register yourself first! then login');</script>";
            } else if (isset($_GET['success'])) {
                echo ($_GET['success'] == "true") ?
                    "<script>alert('Logged in');window.location.href='login.php';</script>" :
                    "<script>alert('Error occurred');</script>";
            }else if (isset($_GET['emptyfield'])) {
                echo "<script>alert('Error occurred: input fields cant be empty');</script>";
            }else if (isset($_GET['logout'])) {
                echo "<script>alert('loggedout');</script>";
            }else if (isset($_GET['emailnotfound'])) {
                echo "<script>alert('email not found as registered one');</script>";
            }else if (isset($_GET['checkMail'])) {
                echo "<script>alert('check your mail and reset password');</script>";
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
                $('#role').on('change', function () {
                    // Get the selected value
                    var selectedRole = $(this).val();

                    // Check if the selected role is "Author"
                    if (selectedRole === 'Author') {
                        // Show the Bio and Image input fields
                        $('#bioField').show();
                        $('#imageField').show();
                    } else {
                        // Hide the Bio and Image input fields
                        $('#bioField').hide();
                        $('#imageField').hide();
                    }
                });
            })
        </script>




    </div>
</body>

</html>