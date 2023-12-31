<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="en">
<!--<![endif]-->

<head>
    <?php 
    include "../inc/config.php"; ?>
    <?php include "../inc/heads/wishlistHead.php" ?>
</head>

<body class="home1">

    <div class="wrapper">
        <div id="shopify-section-header" class="shopify-section">
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

        <!-- wishlist-area start -->
        <div class="container">





            <!-- Breadcumb area start -->
            <ul class="breadcrumb">
                <li><a href="../index.php" title="Back to the frontpage">
                        Home
                    </a>
                </li>

                <li>
                    <a href="wishlist.html"><span>wishlist</span></a>
                </li>

            </ul>
            <!--End Breadcumb area -->


            <div class="row">
                <div id="content" class="col-sm-12">
                    <h1>wishlist</h1>

                    <?php
                                if (isset($_SESSION["Wishlist"]) && count($_SESSION["Wishlist"]) > 0) {
                                 ?>
                    <div class="table-responsive">
                        <table class="table table-bordered wishlist-product" id="_appear" style="display: none;">
                           
                                <?php
                                if (isset($_SESSION["Wishlist"]) && count($_SESSION["Wishlist"]) > 0) {
                                    echo' <thead class="wishlist-head">
                                    <tr>
                                        <td class="text-center">Remove</td>
                                        <td class="text-center">Image</td>
                                        <td class="text-center">Product Name</td>
                                        <td class="text-center">Unit Price</td>
                                        <td class="text-center">Add To Cart</td>
                                    </tr>
                                </thead>
    
    
    
    
                                <tbody class="wishlist-container" data-line="1" data-product-id="1613133152308"
                                    data-product-handle="copy-of-the-dress-and-the-girl">';
                                    foreach ($_SESSION["Wishlist"] as $key => $value) {
                                        print_r($value);

                                        $bookid = $value;
                                        $data = DatabaseManager::select("books left join book_details on books.id=book_details.book_id", "books.image_name,books.id,books.title,price,sale_price", "books.id=$bookid");
                                        foreach ($data as $key => $value) {
                                              $imagename=$value["image_name"];  
                                              $id=$value["id"];  
                                              $title=$value["title"];  
                                              $price=$value["price"];  
                                              $sale_price=$value["sale_price"];  
                                        
                                        ?>
                                        <tr>
                                            <td class="text-center btn-remove-product">
                                                <a type="button" data-toggle="tooltip" title="Remove"
                                                style="background: transparent;"
                                                data-original-title="<?php echo $bookid?>"
                                                    class="btn btn-danger wishlist-btn _addWishlist"
                                                    onmouseup="setTimeout(()=>{location.reload()})" data-line="1">
                                                    <i class="fa fa-times-circle" style="position:relative;z-index: -1;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <a
                                                    href="<?php ((basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : "") ?>singleProductPage.php?bookid=<?php echo $bookid ?>">
                                                    <img src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_small.jpg@v=1552407966"
                                                        alt="A million little pieces - James Frey" class="img-thumbnail" />
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <h5><a
                                                        href='<?php ((basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : "") ?>singleProductPage.php?bookid=<?php echo $bookid ?>'><?php echo $title?></a></h5>
                                            </td>
                                            <td class="text-center price-box box-special">
                                                <div class="price-box">

                                                    <p class="special-price"><span class="price" id="productPrice"><span
                                                                class=money>$<?php echo $sale_price?></span></span></p>
                                                    <p class="old-price"><span class="price" id="comparePrice"><span
                                                                class=money>$<?php echo $price ?></span></span></p>

                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <a href="javascript: void(0)" class="is-add-cart btn btn-primary "
                                                    data-product-id="14458364690484"
                                                    data-product-handle="copy-of-the-dress-and-the-girl">Add To Cart</a>
                                            </td>
                                        </tr>
                                    <?php } 
                                    };
                                    echo '  </tbody>';
                                }?>
                          



                            

                        </table>
                    </div>
                        <?php } else{
                                    echo '<div class="wishlist-loader" id="">
                                    <p class="wishlist-loader--text text-center"> Your wishlist Is Empty...</p>
                                </div>'; 
                                } ?>

                    <!-- Loader -->
                    
                </div>
            </div>
        </div>

        <!-- End Content -->

        <?php include "../inc/QuickviewProduct.php" ?>
        <?php include "../inc/footer.php" ?>
        <?php include "../inc/newsletterpopup.php"; ?>
        <?php include "../inc/scripts.php" ?>
        <?php include "../inc/custom_card_JQ.php" ?>
        <script defr>
            $(document).ready(() => {
                $("#_disappear").fadeOut(1)
                $("#_appear").fadeIn(1)
            })
        </script>


    </div>
</body>

</html>