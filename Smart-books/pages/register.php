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
            <script defr type="text/javascript" defer>
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
                        <h1>Create Account</h1>
                        <form method="post" action="../Workshop.php" id="create_customer" enctype="multipart/form-data">
                            <input type="hidden" name="form_type" value="create_customer">
                            <input type="hidden" name="utf8" value="✓">
                            <div id="create-account-form ">
                                <fieldset id="account" class="form-horizontal">
                                    <legend>Your Personal Details</legend>




                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="first_name">First Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="" name="customer[first_name]" id="first_name"
                                                placeholder="First Name" class="form-control" autofocus=""
                                                data-last-active-input="">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="last_name">Last Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="" name="customer[last_name]" id="last_name"
                                                placeholder="Last Name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="email">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="" name="customer[email]" id="email"
                                                placeholder="Email" class="form-control" autocorrect="off"
                                                autocapitalize="off">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="role">Role</label>
                                        <div class="col-sm-10">
                                            <select name="customer[role]" id="role" class="form-control">
                                                <option value="User">User</option>
                                                <option value="Author">Author</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group required" id="bioField" style="display: none;">
                                        <label class="col-sm-2 control-label" for="bio">Bio</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="" name="customer[bio]" id="bio" placeholder="bio"
                                                class="form-control" autocorrect="off" autocapitalize="off">
                                        </div>
                                    </div>

                                    <div class="form-group required" id="imageField" style="display: none;">
                                        <label class="col-sm-2 control-label" for="image">Image</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="customer[image]" id="image" accept="image/*">
                                        </div>
                                    </div>




                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="password">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" value="" name="customer[password]"
                                                id="create_password" placeholder="Password" class="form-control">
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="submit">
                                    <button name="submitcreate" id="button-account" type="submit"
                                        class="btn btn-primary">
                                        <span>
                                            <i class="fa fa-user left"></i>
                                            Create
                                        </span>
                                    </button>
                                    &nbsp;
                                    or <a class="btn-acct" href="../index.php">Return to Store</a>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--End of Contact Us Area-->
            <?php
            if (isset($_GET['success']) && isset($_GET["reason"])) {
                $rsn=$_GET["reason"];
                echo ($_GET['success'] == "true") ? "
                <script defr>alert('You are registered ');window.location.href='login.php'</script>" : "<script defr>alert('not registered bcz $rsn')</script>";

            }else if (isset($_GET['success'])) {
                echo ($_GET['success'] == "true") ? "
                <script defr>alert('You are registered ');window.location.href='login.php'</script>" : "<script defr>alert('you are already registered')</script>";
            }
            ?>

            <script defr>
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
        <script defr>
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