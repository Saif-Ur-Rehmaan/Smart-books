<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php include "inc/config.php"; ?>
    <?php include "inc/heads/indexHead.php" ?>
</head>







<body class="common-home home1">


    <div class="wrapper">
        <!-- header area -->
        <div id="shopify-section-header" class="shopify-section">
            <?php include "inc/nav.php"; ?>
            <?php include "inc/header.php"; ?>
            <script type="text/javascript" defer>
            $(document).ready(function() {
                // top message bar
                if ($.cookie('alertbtn_cookie') != 'closed') {
                    $('#shopify-section-header').parent().before(
                        '<div class="topbar alert alert-success" style="position:relative;margin: 0px;border: 0;"> MID-SEASON SALE UP TO 70% OFF. USE CODE: “SALE70”. SHOP NOW <button type="button" class="close" data-dismiss="alert" id="alertbtn">x</button></div>'
                    );
                }

                $('#alertbtn').on("click", function() {
                    $.cookie('alertbtn_cookie', 'closed', {
                        expires: 1,
                        path: '/'
                    });
                });

                /*--------------------------
                Newsletter Popup Js 
                ---------------------------- */
                $("#newsletter-popup-conatiner").mouseup(function(e) {
                    var popContainer = $("#newsletter-popup-conatiner");
                    var newsLatterPop = $("#newsletter-pop-up");
                    if (e.target.id != newsLatterPop.attr('id') && !newsLatterPop.has(e.target)
                        .length) {
                        popContainer.fadeOut();
                    }
                });

                $('.hide-popup').on("click", function() {
                    var popContainer = $("#newsletter-popup-conatiner");
                    popContainer.fadeOut();
                });

                $('#dont_show').on("click", function() {
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
        <!-- header area -->


        <div id="content">

            <!-- BEGIN content_for_index -->




            <div id="shopify-section-1480267833382" class="shopify-section index-section index-section--flush">
                <div class="row-1480267833382 main-row full-width">
                    <div class="container">
                        <div class="row">
                            <div class="main-col col-sm-12 col-md-12">
                                <div class="row sub-row">
                                    <div class="sub-col col-sm-12 col-md-12">
                                        <!--Slider Area Start-->
                                        <div class="banner7">

                                            <div class="oc-banner7-container" id="Slideshow-1480267833382">
                                                <div class="flexslider oc-nivoslider our_story">
                                                    <div class="oc-loading"></div>
                                                    <div id="oc-inivoslider1" class="nivoSlider slides static_video">




                                                        <img style="display: none;"
                                                            src="cdn/shop/files/slider2-smartbooks1-1920x566_1920x669.jpg@v=1613707404"
                                                            alt="" title="#banner7-caption1" />







                                                        <img style="display: none;"
                                                            src="cdn/shop/files/slider1-smartbooks1-1920x566_1920x669.jpg@v=1613707404"
                                                            alt="" title="#banner7-caption2" />




                                                    </div>


                                                    <div id="banner7-caption1"
                                                        class="banner7-caption nivo-html-caption nivo-caption move-slides-effect"
                                                        data-class="slide-movetype">
                                                        <div class="timeloading"></div>
                                                        <div class="banner7-content slider-2">
                                                            <div class="container">
                                                                <div class="container-inner">
                                                                    <div class="text-content"
                                                                        style="top:50%;right:0%;left:0%;width:60%;text-align:left;">

                                                                        <div>
                                                                            <p class="title1"
                                                                                style="font-size:4vw; color:#333333;">
                                                                                H.G.Wells</p>
                                                                        </div>


                                                                        <div>
                                                                            <p class="sub-title"
                                                                                style="font-size:4vw;color:#333333;">
                                                                                Empire of the Ants</p>
                                                                        </div>


                                                                        <div class="banner7-des">
                                                                            <p style="font-size:2vw;color:#777777; ">
                                                                                Cover up front of book and leave summary
                                                                            </p>
                                                                        </div>


                                                                        <div class="banner7-readmore">


                                                                            <a class="link-more" href="collections.php"
                                                                                style="background-color:rgba(0,0,0,0) !important;border-color: #62ab00 !important;color:#62ab00 !important;"
                                                                                onmouseover="this.style='background-color:#62ab00 !important;color:#fff !important;';"
                                                                                onmouseout="this.style='color:#62ab00 !important;border-color: #62ab00 !important;background-color:rgba(0,0,0,0) !important';">
                                                                                Shopping Now</a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>




                                                    <div id="banner7-caption2"
                                                        class="banner7-caption nivo-html-caption nivo-caption move-slides-effect"
                                                        data-class="slide-movetype">
                                                        <div class="timeloading"></div>
                                                        <div class="banner7-content slider-1">
                                                            <div class="container">
                                                                <div class="container-inner">
                                                                    <div class="text-content"
                                                                        style="top:50%;right:0%;left:50%;width:50%;text-align:left;">

                                                                        <div>
                                                                            <p class="title1"
                                                                                style="font-size:4vw; color:#333333;">
                                                                                J.D. Kurtness</p>
                                                                        </div>


                                                                        <div>
                                                                            <p class="sub-title"
                                                                                style="font-size:4vw;color:#333333;">De
                                                                                Vengeance</p>
                                                                        </div>


                                                                        <div class="banner7-des">
                                                                            <p style="font-size:2vw;color:#777777; ">
                                                                                Cover up front of book and leave summary
                                                                            </p>
                                                                        </div>


                                                                        <div class="banner7-readmore">


                                                                            <a class="link-more" href="collections.php"
                                                                                style="background-color:rgba(0,0,0,0) !important;border-color: #62ab00 !important;color:#62ab00 !important;"
                                                                                onmouseover="this.style='background-color:#62ab00 !important;color:#fff !important;';"
                                                                                onmouseout="this.style='color:#62ab00 !important;border-color: #62ab00 !important;background-color:rgba(0,0,0,0) !important';">
                                                                                Shopping Now</a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <script>
                                                    $(document).ready(function() {
                                                        $('#oc-inivoslider1').nivoSlider({
                                                            effect: "random",
                                                            slices: 15,
                                                            boxCols: 8,
                                                            boxRows: 4,
                                                            manualAdvance: false,
                                                            animSpeed: 500,
                                                            pauseTime: 5000,
                                                            startSlide: 0,
                                                            controlNav: true,
                                                            directionNav: true,
                                                            controlNavThumbs: false,
                                                            pauseOnHover: true,
                                                            prevText: '<i class="fas fa-angle-left"></i>',
                                                            nextText: '<i class="fas fa-angle-right"></i>',
                                                            afterLoad: function() {
                                                                $('.oc-loading').css("display",
                                                                    "none");
                                                                $('.timeloading').css(
                                                                    'animation-duration',
                                                                    " 5000ms ");
                                                            },
                                                        });
                                                    });
                                                    </script>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!--End of Slider Area-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="shopify-section-1504781997946" class="shopify-section service-box">
                <div class="main-row " data-section-id="1504781997946">
                    <div class="container">
                        <div class="row">
                            <div class="main-col col-sm-12 col-md-12">
                                <div class="row sub-row">
                                    <div class="sub-col col-sm-12 col-md-12">
                                        <!--Service Area Start-->
                                        <div class="policy-block">
                                            <div class="inner">


                                                <div class="col">
                                                    <div class="box">
                                                        <i class="fa fa-shipping-fast"></i>
                                                        <div class="text">
                                                            <h4>Free Shipping Item</h4>
                                                            <p>Orders over $500</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="box">
                                                        <i class="fa fa-redo"></i>
                                                        <div class="text">
                                                            <h4>Money Back Guarantee</h4>
                                                            <p>100% money back</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="box">
                                                        <i class="fa fa-money-bill-wave"></i>
                                                        <div class="text">
                                                            <h4>Cash on Delivery</h4>
                                                            <p>Lorem ipsum dolor amet</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="box">
                                                        <i class="fa fa-support"></i>
                                                        <div class="text">
                                                            <h4>Help &amp; Support</h4>
                                                            <p>Call us : + 0123.4567.89</p>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <!--End of Service Area-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div id="shopify-section-1537796717812" class="shopify-section index-section index-section--flush">

                <div class="main-row " data-section-id="1537796717812">
                    <div class="container">
                        <div class="row">
                            <div class="main-col col-sm-12 col-md-12">
                                <div class="row sub-row">
                                    <div class="sub-col col-sm-12 col-md-12">
                                        <div class="banner-static static-top-smartbooks1">


                                            <div class="col col1">
                                                <div class="image">

                                                    <a href="pages/products.php">


                                                        <img src="images/banenrs/img1-top-smartbooks1.jpg@v=1613707456"
                                                            class="" alt="" />


                                                    </a>

                                                    <div class="text text-left" style="text-align:left">


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col col2">
                                                <div class="image">

                                                    <a href="pages/products.php?sale=40%">


                                                        <img src="images/banenrs/img2-top-smartbooks1.jpg@v=1613707456"
                                                            class="" alt="" />


                                                    </a>

                                                    <div class="text text-left" style="text-align:left">


                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>












            <div id="shopify-section-1543060429425" class="shopify-section index-section">
                <div class="main-row products-tab1  " data-section-id="1543060429425">
                    <div class="container">
                        <div class="row">
                            <div class="main-col col-sm-12 col-md-12">
                                <div class="row sub-row">
                                    <div class="sub-col col-sm-12 col-md-12">
                                        <div class="tt_tabsproduct_module product-tabs-container-slider multi-rows "
                                            id="product_module1543060429425">
                                            <div class="module-title">

                                                <h2>Featured collection</h2>

                                                <div class="box-tab">
                                                    <ul class="tab-heading tabs-categorys">




                                                        <li class="active">
                                                            <a data-toggle="pill"
                                                                href="index.php@preview_theme_id=.php#tab-15430604294250"><span>Featured
                                                                    Products</span></a>
                                                        </li>


                                                        <li>
                                                            <a data-toggle="pill"
                                                                href="index.php@preview_theme_id=.php#tab-15430604294251"><span>New
                                                                    Arrivals</span></a>
                                                        </li>


                                                        <li>
                                                            <a data-toggle="pill"
                                                                href="index.php@preview_theme_id=.php#tab-15430604294252"><span>Most
                                                                    Viewed</span></a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>

                                            <div class="box-style">
                                                <div class="owl-container">
                                                    <div class="tt-product">
                                                        <div class="tab-content">

                                                            <!-- feature product -->
                                                            <div class="tab-container-1543060429425 owl-carousel owl-theme tab-pane fade active in"
                                                                id="tab-15430604294250">



                                                                <?php

                                                                $sql = "SELECT DISTINCT categories.name, categories.id
        FROM categories
        RIGHT JOIN books ON categories.id = books.category_id
        WHERE books.is_Featured = 1";

                                                                $categories = DatabaseManager::query($sql);

                                                                $arru = []; // Initialize the main array
                                                                
                                                                while ($category = mysqli_fetch_assoc($categories)) {
                                                                    $catId = $category["id"];
                                                                    $catName = $category["name"];
                                                                    $books = DatabaseManager::select("books", "id, title, image_name", "category_id=$catId AND is_Featured=1");

                                                                    foreach ($books as $book) {
                                                                        $productArray = array(
                                                                            "Title" => $book["title"],
                                                                            "Image" => $book["image_name"],
                                                                            "ID" => $book["id"],
                                                                            "catId" => $catId,
                                                                            "catName" => $catName
                                                                        );

                                                                        array_push($arru, $productArray); // Push the product array into $arru
                                                                    }
                                                                }


                                                                for ($i = 0; $i < count($arru); $i += 2) {
                                                                    echo "<div class=\"row_items\">";

                                                                    $BookTitle = $arru[$i]["Title"];
                                                                    $imagename = $arru[$i]["Image"];
                                                                    $Bookid = $arru[$i]["ID"];
                                                                    $catId = $arru[$i]["catId"];
                                                                    $catName = $arru[$i]["catName"];
                                                                    $htmlprodSec = '';
                                                                    // ob_start();
                                                                    ?>

                                                                    <div class="product-layout grid-style  ">
                                                                        <div class="product-thumb transition">
                                                                            <div class="item">
                                                                                <div class="item-inner">
                                                                                    <div class="caption-top">

                                                                                        <p class="manufacture-product">
                                                                                            <a href="collections/vendors@q=Amazona.php"
                                                                                                title="<?php echo $catName ?>"><?php echo $catName ?></a>
                                                                                        </p>

                                                                                        <h4 class="product-name">
                                                                                            <a
                                                                                                href="pages/singleProductPage.php?productdetails=<?php echo urlencode(json_encode(["imagename" => $imagename, "BookTitle" => $BookTitle, "Bookid" => $Bookid, "catId" => $catId, "catName" => $catName])); //to decode this json use $productdetails = $_GET['productdetails'];then $productData = json_decode(urldecode($productdetails), true); ?>">
                                                                                                <?php echo $BookTitle ?>
                                                                                            </a>
                                                                                        </h4>
                                                                                    </div>
                                                                                    <div class=" box-border">
                                                                                        <div class="image images-container">

                                                                                            <a href="pages/singleProductPage.php?productdetails=<?php echo urlencode(json_encode(["imagename" => $imagename, "BookTitle" => $BookTitle, "Bookid" => $Bookid, "catId" => $catId, "catName" => $catName])); //to decode this json use $productdetails = $_GET['productdetails'];then $productData = json_decode(urldecode($productdetails), true); ?>"
                                                                                                class="product-image">
                                                                                                <img class="img-responsive has-rotator img-default-image img-cate-1613107134516-1543060429425"
                                                                                                    src="images/products/<?php echo ($imagename != null || $imagename != "") ? $imagename : "9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg@v=1552407244"; ?>"
                                                                                                    alt="<?php echo $BookTitle ?>">




                                                                                                <input type="hidden"
                                                                                                    value="//smartbook-theme.myshopify.com/images/products/9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg?v=1552407244"
                                                                                                    class="img-default-1613107134516-1543060429425" />













                                                                                            </a>
















                                                                                            <div class="box-label"></div>
                                                                                            <div class="action-links">
                                                                                                <button
                                                                                                    class="button btn-cart "
                                                                                                    type="button"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-loading-text="Loading..."
                                                                                                    title="Add to Cart"
                                                                                                    onclick="cart.add('14458191544372');">
                                                                                                    <span>Add to Cart</span>
                                                                                                </button>


                                                                                                <button
                                                                                                    class="btn-wishlist button btn-default wishlist-btn"
                                                                                                    data-product-handle="copy-of-when-the-doves-disappeared"
                                                                                                    type="button"
                                                                                                    data-toggle="tooltip"
                                                                                                    title="Add to Wish List"
                                                                                                    data-original-title="Add to Wish List">
                                                                                                    <span>Add to Wish
                                                                                                        List</span>
                                                                                                </button>


                                                                                                <button
                                                                                                    class="button btn-compare"
                                                                                                    type="button"
                                                                                                    data-toggle="tooltip"
                                                                                                    title="View Details"
                                                                                                    onclick="location.href='pages/osingleProductPage.php?bookid=<?php echo $Bookid?>;">
                                                                                                    <span>View
                                                                                                        Details</span>
                                                                                                </button>

                                                                                                <button
                                                                                                    class="button btn-quickview quickview"
                                                                                                    type="button"
                                                                                                    title="Quick View"
                                                                                                    data-toggle="modal"
                                                                                                    data-target="#productModal"
                                                                                                    data-book_id='<?php echo $Bookid ?>'
                                                                                                    data-original-title="Quick View">
                                                                                                    <span>Quick View</span>
                                                                                                </button>

                                                                                            </div>
                                                                                        </div>
                                                                                        <!-- image -->
                                                                                        <div class="caption">
                                                                                            <div class="inner  swtch">

                                                                                                <div class="ratings">
                                                                                                    <div class="rating-box">

                                                                                                        <span
                                                                                                            class="spr-badge"
                                                                                                            id="spr_badge_1613107134516"
                                                                                                            data-rating="5.0">
                                                                                                            <span
                                                                                                                class="spr-starrating spr-badge-starrating">
                                                                                                                <i class="spr-icon spr-icon-star"
                                                                                                                    aria-hidden="true"></i>
                                                                                                                <i class="spr-icon spr-icon-star"
                                                                                                                    aria-hidden="true"></i>
                                                                                                                <i class="spr-icon spr-icon-star"
                                                                                                                    aria-hidden="true"></i>
                                                                                                                <i class="spr-icon spr-icon-star"
                                                                                                                    aria-hidden="true"></i>
                                                                                                                <i class="spr-icon spr-icon-star"
                                                                                                                    aria-hidden="true"></i>
                                                                                                            </span><span
                                                                                                                class="spr-badge-caption">1
                                                                                                                review</span>
                                                                                                        </span>


                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="price-box">

                                                                                                    <?php $price_saleprice = DatabaseManager::select("book_details", "price , sale_price", "Book_id=$Bookid");
                                                                                                    foreach ($price_saleprice as $key => $value) {
                                                                                                        $price = $value["price"];
                                                                                                        $saleprice = $value["sale_price"]; ?>


                                                                                                        <?php if ($saleprice !== "0.00" && (int) $price > (int) $saleprice) { ?>
                                                                                                            <p
                                                                                                                class="special-price">
                                                                                                                <span class="price">
                                                                                                                    <span
                                                                                                                        class="money"
                                                                                                                        data-currency-usd="$<?php echo $saleprice ?>">
                                                                                                                        $<?php echo $saleprice ?>
                                                                                                                    </span>
                                                                                                                </span>
                                                                                                            </p>
                                                                                                        <?php } ?>
                                                                                                        <p class="old-price">
                                                                                                            <span class="price">
                                                                                                                <span
                                                                                                                    class="money"
                                                                                                                    data-currency-usd="$<?php echo $price; ?>">
                                                                                                                    $<?php echo $price; ?>
                                                                                                                </span>
                                                                                                            </span>
                                                                                                        </p>

                                                                                                    <?php } ?>

                                                                                                </div>
                                                                                                <!-- price-container -->



                                                                                                <?php foreach ($price_saleprice as $key => $value) {
                                                                                                    $price = $value["price"];
                                                                                                    $saleprice = $value["sale_price"]; ?>
                                                                                                    <?php if ($saleprice !== "0.00" && (int) $price > (int) $saleprice) { ?>
                                                                                                        <div
                                                                                                            class="label-product label_sale">
                                                                                                            <span>-<?php echo floor(((((int) $price) - ((int) $saleprice)) / ((int) $price)) * 100) ?>%</span>
                                                                                                        </div>
                                                                                                    <?php }
                                                                                                } ?>




                                                                                            </div>

                                                                                        </div>
                                                                                        <!-- caption -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- product-thumb -->
                                                                    </div>

                                                                    <?php

                                                                    if ($i + 1 < count($arru)) {
                                                                        $BookTitle = $arru[$i + 1]["Title"];
                                                                        $imagename = $arru[$i + 1]["Image"];
                                                                        $Bookid = $arru[$i + 1]["ID"];
                                                                        $catId = $arru[$i + 1]["catId"];
                                                                        $catName = $arru[$i + 1]["catName"];
                                                                        $htmlprodSec = '';
                                                                        // ob_start();
                                                                        ?>

                                                                        <div class="product-layout grid-style  ">
                                                                            <div class="product-thumb transition">
                                                                                <div class="item">
                                                                                    <div class="item-inner">
                                                                                        <div class="caption-top">

                                                                                            <p class="manufacture-product">
                                                                                                <a href="collections/vendors@q=Amazona.php"
                                                                                                    title="<?php echo $catName ?>"><?php echo $catName ?></a>
                                                                                            </p>

                                                                                            <h4 class="product-name">
                                                                                                <a
                                                                                                    href="pages/singleProductPage.php?productdetails=<?php echo urlencode(json_encode(["imagename" => $imagename, "BookTitle" => $BookTitle, "Bookid" => $Bookid, "catId" => $catId, "catName" => $catName])); //to decode this json use $productdetails = $_GET['productdetails'];then $productData = json_decode(urldecode($productdetails), true); ?>">
                                                                                                    <?php echo $BookTitle ?>
                                                                                                </a>
                                                                                            </h4>
                                                                                        </div>
                                                                                        <div class=" box-border">
                                                                                            <div class="image images-container">

                                                                                                <a href="pages/singleProductPage.php?productdetails=<?php echo urlencode(json_encode(["imagename" => $imagename, "BookTitle" => $BookTitle, "Bookid" => $Bookid, "catId" => $catId, "catName" => $catName])); //to decode this json use $productdetails = $_GET['productdetails'];then $productData = json_decode(urldecode($productdetails), true); ?>"
                                                                                                    class="product-image">
                                                                                                    <img class="img-responsive has-rotator img-default-image img-cate-1613107134516-1543060429425"
                                                                                                        src="images/products/<?php echo ($imagename != null || $imagename != "") ? $imagename : "9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg@v=1552407244"; ?>"
                                                                                                        alt="<?php echo $BookTitle ?>">




                                                                                                    <input type="hidden"
                                                                                                        value="//smartbook-theme.myshopify.com/images/products/9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg?v=1552407244"
                                                                                                        class="img-default-1613107134516-1543060429425" />













                                                                                                </a>
















                                                                                                <div class="box-label"></div>
                                                                                                <div class="action-links">
                                                                                                    <button
                                                                                                        class="button btn-cart "
                                                                                                        type="button"
                                                                                                        data-toggle="tooltip"
                                                                                                        data-loading-text="Loading..."
                                                                                                        title="Add to Cart"
                                                                                                        onclick="cart.add('14458191544372');">
                                                                                                        <span>Add to Cart</span>
                                                                                                    </button>


                                                                                                    <button
                                                                                                        class="btn-wishlist button btn-default wishlist-btn"
                                                                                                        data-product-handle="copy-of-when-the-doves-disappeared"
                                                                                                        type="button"
                                                                                                        data-toggle="tooltip"
                                                                                                        title="Add to Wish List"
                                                                                                        data-original-title="Add to Wish List">
                                                                                                        <span>Add to Wish
                                                                                                            List</span>
                                                                                                    </button>


                                                                                                    <button
                                                                                                        class="button btn-compare"
                                                                                                        type="button"
                                                                                                        data-toggle="tooltip"
                                                                                                        title="View Details"
                                                                                                        onclick="location.href='pages/osingleProductPage.php?bookid=<?php echo $Bookid?>;">
                                                                                                        <span>View
                                                                                                            Details</span>
                                                                                                    </button>

                                                                                                    <button
                                                                                                        class="button btn-quickview quickview"
                                                                                                        type="button"
                                                                                                        title="Quick View"
                                                                                                        data-toggle="modal"
                                                                                                        data-target="#productModal"
                                                                                                        data-book_id='<?php echo $Bookid ?>'
                                                                                                        data-original-title="Quick View">
                                                                                                        <span>Quick View</span>
                                                                                                    </button>

                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- image -->
                                                                                            <div class="caption">
                                                                                                <div class="inner  swtch">

                                                                                                    <div class="ratings">
                                                                                                        <div class="rating-box">

                                                                                                            <span
                                                                                                                class="spr-badge"
                                                                                                                id="spr_badge_1613107134516"
                                                                                                                data-rating="5.0">
                                                                                                                <span
                                                                                                                    class="spr-starrating spr-badge-starrating">
                                                                                                                    <i class="spr-icon spr-icon-star"
                                                                                                                        aria-hidden="true"></i>
                                                                                                                    <i class="spr-icon spr-icon-star"
                                                                                                                        aria-hidden="true"></i>
                                                                                                                    <i class="spr-icon spr-icon-star"
                                                                                                                        aria-hidden="true"></i>
                                                                                                                    <i class="spr-icon spr-icon-star"
                                                                                                                        aria-hidden="true"></i>
                                                                                                                    <i class="spr-icon spr-icon-star"
                                                                                                                        aria-hidden="true"></i>
                                                                                                                </span><span
                                                                                                                    class="spr-badge-caption">1
                                                                                                                    review</span>
                                                                                                            </span>


                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="price-box">

                                                                                                        <?php $price_saleprice = DatabaseManager::select("book_details", "price , sale_price", "Book_id=$Bookid");
                                                                                                        foreach ($price_saleprice as $key => $value) {
                                                                                                            $price = $value["price"];
                                                                                                            $saleprice = $value["sale_price"]; ?>


                                                                                                            <?php if ($saleprice !== "0.00" && (int) $price > (int) $saleprice) { ?>
                                                                                                                <p
                                                                                                                    class="special-price">
                                                                                                                    <span class="price">
                                                                                                                        <span
                                                                                                                            class="money"
                                                                                                                            data-currency-usd="$<?php echo $saleprice ?>">
                                                                                                                            $<?php echo $saleprice ?>
                                                                                                                        </span>
                                                                                                                    </span>
                                                                                                                </p>
                                                                                                            <?php } ?>
                                                                                                            <p class="old-price">
                                                                                                                <span class="price">
                                                                                                                    <span
                                                                                                                        class="money"
                                                                                                                        data-currency-usd="$<?php echo $price; ?>">
                                                                                                                        $<?php echo $price; ?>
                                                                                                                    </span>
                                                                                                                </span>
                                                                                                            </p>

                                                                                                        <?php } ?>

                                                                                                    </div>
                                                                                                    <!-- price-container -->



                                                                                                    <?php foreach ($price_saleprice as $key => $value) {
                                                                                                        $price = $value["price"];
                                                                                                        $saleprice = $value["sale_price"]; ?>
                                                                                                        <?php if ($saleprice !== "0.00" && (int) $price > (int) $saleprice) { ?>
                                                                                                            <div
                                                                                                                class="label-product label_sale">
                                                                                                                <span>-<?php echo floor(((((int) $price) - ((int) $saleprice)) / ((int) $price)) * 100) ?>%</span>
                                                                                                            </div>
                                                                                                        <?php }
                                                                                                    } ?>




                                                                                                </div>

                                                                                            </div>
                                                                                            <!-- caption -->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- product-thumb -->
                                                                        </div>

                                                                        <?php

                                                                    }
                                                                    echo "</div>";
                                                                }
                                                                ?>


                                                            </div>
                                                            <!-- feature product end -->

                                                            <!-- new arrivals -->

                                                            <div class="tab-container-1543060429425 owl-carousel owl-theme tab-pane fade"
                                                                id="tab-15430604294251">



                                                                <?php

                                                                $sql = "SELECT DISTINCT categories.name, categories.id
FROM categories
RIGHT JOIN books ON categories.id = books.category_id
WHERE date_added >= DATE_SUB(NOW(), INTERVAL 30 DAY)";

                                                                $categories = DatabaseManager::query($sql);

                                                                $arru = []; // Initialize the main array
                                                                
                                                                while ($category = mysqli_fetch_assoc($categories)) {
                                                                    $catId = $category["id"];
                                                                    $catName = $category["name"];
                                                                    $books = DatabaseManager::select("books", "id, title, image_name", "category_id=$catId AND date_added >= DATE_SUB(NOW(), INTERVAL 30 DAY)");

                                                                    foreach ($books as $book) {
                                                                        $productArray = array(
                                                                            "Title" => $book["title"],
                                                                            "Image" => $book["image_name"],
                                                                            "ID" => $book["id"],
                                                                            "catId" => $catId,
                                                                            "catName" => $catName
                                                                        );

                                                                        array_push($arru, $productArray); // Push the product array into $arru
                                                                    }
                                                                }


                                                                for ($i = 0; $i < count($arru); $i += 2) {
                                                                    echo "<div class=\"row_items\">";

                                                                    $BookTitle = $arru[$i]["Title"];
                                                                    $imagename = $arru[$i]["Image"];
                                                                    $Bookid = $arru[$i]["ID"];
                                                                    $catId = $arru[$i]["catId"];
                                                                    $catName = $arru[$i]["catName"];
                                                                    $htmlprodSec = '';
                                                                    // ob_start();
                                                                    ?>

                                                                    <div class="product-layout grid-style  ">
                                                                        <div class="product-thumb transition">
                                                                            <div class="item">
                                                                                <div class="item-inner">
                                                                                    <div class="caption-top">

                                                                                        <p class="manufacture-product">
                                                                                            <a href="collections/vendors@q=Amazona.php"
                                                                                                title="<?php echo $catName ?>"><?php echo $catName ?></a>
                                                                                        </p>

                                                                                        <h4 class="product-name">
                                                                                            <a
                                                                                                href="pages/singleProductPage.php?productdetails=<?php echo urlencode(json_encode(["imagename" => $imagename, "BookTitle" => $BookTitle, "Bookid" => $Bookid, "catId" => $catId, "catName" => $catName])); //to decode this json use $productdetails = $_GET['productdetails'];then $productData = json_decode(urldecode($productdetails), true); ?>">
                                                                                                <?php echo $BookTitle ?>
                                                                                            </a>
                                                                                        </h4>
                                                                                    </div>
                                                                                    <div class=" box-border">
                                                                                        <div class="image images-container">

                                                                                            <a href="pages/singleProductPage.php?productdetails=<?php echo urlencode(json_encode(["imagename" => $imagename, "BookTitle" => $BookTitle, "Bookid" => $Bookid, "catId" => $catId, "catName" => $catName])); //to decode this json use $productdetails = $_GET['productdetails'];then $productData = json_decode(urldecode($productdetails), true); ?>"
                                                                                                class="product-image">
                                                                                                <img class="img-responsive has-rotator img-default-image img-cate-1613107134516-1543060429425"
                                                                                                    src="images/products/<?php echo ($imagename != null || $imagename != "") ? $imagename : "9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg@v=1552407244"; ?>"
                                                                                                    alt="<?php echo $BookTitle ?>">




                                                                                                <input type="hidden"
                                                                                                    value="//smartbook-theme.myshopify.com/images/products/9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg?v=1552407244"
                                                                                                    class="img-default-1613107134516-1543060429425" />













                                                                                            </a>
















                                                                                            <div class="box-label"></div>
                                                                                            <div class="action-links">
                                                                                                <button
                                                                                                    class="button btn-cart "
                                                                                                    type="button"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-loading-text="Loading..."
                                                                                                    title="Add to Cart"
                                                                                                    onclick="cart.add('14458191544372');">
                                                                                                    <span>Add to Cart</span>
                                                                                                </button>


                                                                                                <button
                                                                                                    class="btn-wishlist button btn-default wishlist-btn"
                                                                                                    data-product-handle="copy-of-when-the-doves-disappeared"
                                                                                                    type="button"
                                                                                                    data-toggle="tooltip"
                                                                                                    title="Add to Wish List"
                                                                                                    data-original-title="Add to Wish List">
                                                                                                    <span>Add to Wish
                                                                                                        List</span>
                                                                                                </button>


                                                                                                <button
                                                                                                    class="button btn-compare"
                                                                                                    type="button"
                                                                                                    data-toggle="tooltip"
                                                                                                    title="View Details"
                                                                                                    onclick="location.href='pages/osingleProductPage.php?bookid=<?php echo $Bookid?>;">
                                                                                                    <span>View
                                                                                                        Details</span>
                                                                                                </button>

                                                                                                <button
                                                                                                    class="button btn-quickview quickview"
                                                                                                    type="button"
                                                                                                    title="Quick View"
                                                                                                    data-toggle="modal"
                                                                                                    data-target="#productModal"
                                                                                                    data-book_id='<?php echo $Bookid ?>'
                                                                                                    data-original-title="Quick View">
                                                                                                    <span>Quick View</span>
                                                                                                </button>

                                                                                            </div>
                                                                                        </div>
                                                                                        <!-- image -->
                                                                                        <div class="caption">
                                                                                            <div class="inner  swtch">

                                                                                                <div class="ratings">
                                                                                                    <div class="rating-box">

                                                                                                        <span
                                                                                                            class="spr-badge"
                                                                                                            id="spr_badge_1613107134516"
                                                                                                            data-rating="5.0">
                                                                                                            <span
                                                                                                                class="spr-starrating spr-badge-starrating">
                                                                                                                <i class="spr-icon spr-icon-star"
                                                                                                                    aria-hidden="true"></i>
                                                                                                                <i class="spr-icon spr-icon-star"
                                                                                                                    aria-hidden="true"></i>
                                                                                                                <i class="spr-icon spr-icon-star"
                                                                                                                    aria-hidden="true"></i>
                                                                                                                <i class="spr-icon spr-icon-star"
                                                                                                                    aria-hidden="true"></i>
                                                                                                                <i class="spr-icon spr-icon-star"
                                                                                                                    aria-hidden="true"></i>
                                                                                                            </span><span
                                                                                                                class="spr-badge-caption">1
                                                                                                                review</span>
                                                                                                        </span>


                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="price-box">

                                                                                                    <?php $price_saleprice = DatabaseManager::select("book_details", "price , sale_price", "Book_id=$Bookid");
                                                                                                    foreach ($price_saleprice as $key => $value) {
                                                                                                        $price = $value["price"];
                                                                                                        $saleprice = $value["sale_price"]; ?>


                                                                                                        <?php if ($saleprice !== "0.00" && (int) $price > (int) $saleprice) { ?>
                                                                                                            <p
                                                                                                                class="special-price">
                                                                                                                <span class="price">
                                                                                                                    <span
                                                                                                                        class="money"
                                                                                                                        data-currency-usd="$<?php echo $saleprice ?>">
                                                                                                                        $<?php echo $saleprice ?>
                                                                                                                    </span>
                                                                                                                </span>
                                                                                                            </p>
                                                                                                        <?php } ?>
                                                                                                        <p class="old-price">
                                                                                                            <span class="price">
                                                                                                                <span
                                                                                                                    class="money"
                                                                                                                    data-currency-usd="$<?php echo $price; ?>">
                                                                                                                    $<?php echo $price; ?>
                                                                                                                </span>
                                                                                                            </span>
                                                                                                        </p>

                                                                                                    <?php } ?>

                                                                                                </div>
                                                                                                <!-- price-container -->



                                                                                                <?php foreach ($price_saleprice as $key => $value) {
                                                                                                    $price = $value["price"];
                                                                                                    $saleprice = $value["sale_price"]; ?>
                                                                                                    <?php if ($saleprice !== "0.00" && (int) $price > (int) $saleprice) { ?>
                                                                                                        <div
                                                                                                            class="label-product label_sale">
                                                                                                            <span>-<?php echo floor(((((int) $price) - ((int) $saleprice)) / ((int) $price)) * 100) ?>%</span>
                                                                                                        </div>
                                                                                                    <?php }
                                                                                                } ?>




                                                                                            </div>

                                                                                        </div>
                                                                                        <!-- caption -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- product-thumb -->
                                                                    </div>

                                                                    <?php

                                                                    if ($i + 1 < count($arru)) {
                                                                        $BookTitle = $arru[$i + 1]["Title"];
                                                                        $imagename = $arru[$i + 1]["Image"];
                                                                        $Bookid = $arru[$i + 1]["ID"];
                                                                        $catId = $arru[$i + 1]["catId"];
                                                                        $catName = $arru[$i + 1]["catName"];
                                                                        $htmlprodSec = '';
                                                                        // ob_start();
                                                                        ?>

                                                                        <div class="product-layout grid-style  ">
                                                                            <div class="product-thumb transition">
                                                                                <div class="item">
                                                                                    <div class="item-inner">
                                                                                        <div class="caption-top">

                                                                                            <p class="manufacture-product">
                                                                                                <a href="collections/vendors@q=Amazona.php"
                                                                                                    title="<?php echo $catName ?>"><?php echo $catName ?></a>
                                                                                            </p>

                                                                                            <h4 class="product-name">
                                                                                                <a
                                                                                                    href="pages/singleProductPage.php?productdetails=<?php echo urlencode(json_encode(["imagename" => $imagename, "BookTitle" => $BookTitle, "Bookid" => $Bookid, "catId" => $catId, "catName" => $catName])); //to decode this json use $productdetails = $_GET['productdetails'];then $productData = json_decode(urldecode($productdetails), true); ?>">
                                                                                                    <?php echo $BookTitle ?>
                                                                                                </a>
                                                                                            </h4>
                                                                                        </div>
                                                                                        <div class=" box-border">
                                                                                            <div class="image images-container">

                                                                                                <a href="pages/singleProductPage.php?productdetails=<?php echo urlencode(json_encode(["imagename" => $imagename, "BookTitle" => $BookTitle, "Bookid" => $Bookid, "catId" => $catId, "catName" => $catName])); //to decode this json use $productdetails = $_GET['productdetails'];then $productData = json_decode(urldecode($productdetails), true); ?>"
                                                                                                    class="product-image">
                                                                                                    <img class="img-responsive has-rotator img-default-image img-cate-1613107134516-1543060429425"
                                                                                                        src="images/products/<?php echo ($imagename != null || $imagename != "") ? $imagename : "9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg@v=1552407244"; ?>"
                                                                                                        alt="<?php echo $BookTitle ?>">




                                                                                                    <input type="hidden"
                                                                                                        value="//smartbook-theme.myshopify.com/images/products/9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg?v=1552407244"
                                                                                                        class="img-default-1613107134516-1543060429425" />













                                                                                                </a>
















                                                                                                <div class="box-label"></div>
                                                                                                <div class="action-links">
                                                                                                    <button
                                                                                                        class="button btn-cart "
                                                                                                        type="button"
                                                                                                        data-toggle="tooltip"
                                                                                                        data-loading-text="Loading..."
                                                                                                        title="Add to Cart"
                                                                                                        onclick="cart.add('14458191544372');">
                                                                                                        <span>Add to Cart</span>
                                                                                                    </button>


                                                                                                    <button
                                                                                                        class="btn-wishlist button btn-default wishlist-btn"
                                                                                                        data-product-handle="copy-of-when-the-doves-disappeared"
                                                                                                        type="button"
                                                                                                        data-toggle="tooltip"
                                                                                                        title="Add to Wish List"
                                                                                                        data-original-title="Add to Wish List">
                                                                                                        <span>Add to Wish
                                                                                                            List</span>
                                                                                                    </button>


                                                                                                    <button
                                                                                                        class="button btn-compare"
                                                                                                        type="button"
                                                                                                        data-toggle="tooltip"
                                                                                                        title="View Details"
                                                                                                        onclick="location.href='pages/osingleProductPage.php?bookid=<?php echo $Bookid?>;">
                                                                                                        <span>View
                                                                                                            Details</span>
                                                                                                    </button>

                                                                                                    <button
                                                                                                        class="button btn-quickview quickview"
                                                                                                        type="button"
                                                                                                        title="Quick View"
                                                                                                        data-toggle="modal"
                                                                                                        data-target="#productModal"
                                                                                                        data-book_id='<?php echo $Bookid ?>'
                                                                                                        data-original-title="Quick View">
                                                                                                        <span>Quick View</span>
                                                                                                    </button>

                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- image -->
                                                                                            <div class="caption">
                                                                                                <div class="inner  swtch">

                                                                                                    <div class="ratings">
                                                                                                        <div class="rating-box">

                                                                                                            <span
                                                                                                                class="spr-badge"
                                                                                                                id="spr_badge_1613107134516"
                                                                                                                data-rating="5.0">
                                                                                                                <span
                                                                                                                    class="spr-starrating spr-badge-starrating">
                                                                                                                    <i class="spr-icon spr-icon-star"
                                                                                                                        aria-hidden="true"></i>
                                                                                                                    <i class="spr-icon spr-icon-star"
                                                                                                                        aria-hidden="true"></i>
                                                                                                                    <i class="spr-icon spr-icon-star"
                                                                                                                        aria-hidden="true"></i>
                                                                                                                    <i class="spr-icon spr-icon-star"
                                                                                                                        aria-hidden="true"></i>
                                                                                                                    <i class="spr-icon spr-icon-star"
                                                                                                                        aria-hidden="true"></i>
                                                                                                                </span><span
                                                                                                                    class="spr-badge-caption">1
                                                                                                                    review</span>
                                                                                                            </span>


                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="price-box">

                                                                                                        <?php $price_saleprice = DatabaseManager::select("book_details", "price , sale_price", "Book_id=$Bookid");
                                                                                                        foreach ($price_saleprice as $key => $value) {
                                                                                                            $price = $value["price"];
                                                                                                            $saleprice = $value["sale_price"]; ?>


                                                                                                            <?php if ($saleprice !== "0.00" && (int) $price > (int) $saleprice) { ?>
                                                                                                                <p
                                                                                                                    class="special-price">
                                                                                                                    <span class="price">
                                                                                                                        <span
                                                                                                                            class="money"
                                                                                                                            data-currency-usd="$<?php echo $saleprice ?>">
                                                                                                                            $<?php echo $saleprice ?>
                                                                                                                        </span>
                                                                                                                    </span>
                                                                                                                </p>
                                                                                                            <?php } ?>
                                                                                                            <p class="old-price">
                                                                                                                <span class="price">
                                                                                                                    <span
                                                                                                                        class="money"
                                                                                                                        data-currency-usd="$<?php echo $price; ?>">
                                                                                                                        $<?php echo $price; ?>
                                                                                                                    </span>
                                                                                                                </span>
                                                                                                            </p>

                                                                                                        <?php } ?>

                                                                                                    </div>
                                                                                                    <!-- price-container -->



                                                                                                    <?php foreach ($price_saleprice as $key => $value) {
                                                                                                        $price = $value["price"];
                                                                                                        $saleprice = $value["sale_price"]; ?>
                                                                                                        <?php if ($saleprice !== "0.00" && (int) $price > (int) $saleprice) { ?>
                                                                                                            <div
                                                                                                                class="label-product label_sale">
                                                                                                                <span>-<?php echo floor(((((int) $price) - ((int) $saleprice)) / ((int) $price)) * 100) ?>%</span>
                                                                                                            </div>
                                                                                                        <?php }
                                                                                                    } ?>




                                                                                                </div>

                                                                                            </div>
                                                                                            <!-- caption -->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- product-thumb -->
                                                                        </div>

                                                                        <?php

                                                                    }
                                                                    echo "</div>";
                                                                }
                                                                ?>


                                                            </div>

                                                            <!-- new arrivals end -->

                                                            <!-- most viewed  -->
                                                            <div class="tab-container-1543060429425 owl-carousel owl-theme tab-pane fade"
                                                                id="tab-15430604294252">


                                                                <?php

                                                                $sql = "SELECT DISTINCT categories.name, categories.id
FROM categories
RIGHT JOIN books ON categories.id = books.category_id order by views desc ";

                                                                $categories = DatabaseManager::query($sql);

                                                                $arru = []; // Initialize the main array
                                                                
                                                                while ($category = mysqli_fetch_assoc($categories)) {
                                                                    $catId = $category["id"];
                                                                    $catName = $category["name"];
                                                                    $books = DatabaseManager::select("books", "id, title, image_name", "category_id=$catId  order by views desc ");

                                                                    foreach ($books as $book) {
                                                                        $productArray = array(
                                                                            "Title" => $book["title"],
                                                                            "Image" => $book["image_name"],
                                                                            "ID" => $book["id"],
                                                                            "catId" => $catId,
                                                                            "catName" => $catName
                                                                        );

                                                                        array_push($arru, $productArray); // Push the product array into $arru
                                                                    }
                                                                }


                                                                for ($i = 0; $i < count($arru); $i += 2) {
                                                                    echo "<div class=\"row_items\">";

                                                                    $BookTitle = $arru[$i]["Title"];
                                                                    $imagename = $arru[$i]["Image"];
                                                                    $Bookid = $arru[$i]["ID"];
                                                                    $catId = $arru[$i]["catId"];
                                                                    $catName = $arru[$i]["catName"];
                                                                    $htmlprodSec = '';
                                                                    // ob_start();
                                                                    ?>

                                                                    <div class="product-layout grid-style  ">
                                                                        <div class="product-thumb transition">
                                                                            <div class="item">
                                                                                <div class="item-inner">
                                                                                    <div class="caption-top">

                                                                                        <p class="manufacture-product">
                                                                                            <a href="collections/vendors@q=Amazona.php"
                                                                                                title="<?php echo $catName ?>"><?php echo $catName ?></a>
                                                                                        </p>

                                                                                        <h4 class="product-name">
                                                                                            <a
                                                                                                href="pages/singleProductPage.php?productdetails=<?php echo urlencode(json_encode(["imagename" => $imagename, "BookTitle" => $BookTitle, "Bookid" => $Bookid, "catId" => $catId, "catName" => $catName])); //to decode this json use $productdetails = $_GET['productdetails'];then $productData = json_decode(urldecode($productdetails), true); ?>">
                                                                                                <?php echo $BookTitle ?>
                                                                                            </a>
                                                                                        </h4>
                                                                                    </div>
                                                                                    <div class=" box-border">
                                                                                        <div class="image images-container">

                                                                                            <a href="pages/singleProductPage.php?productdetails=<?php echo urlencode(json_encode(["imagename" => $imagename, "BookTitle" => $BookTitle, "Bookid" => $Bookid, "catId" => $catId, "catName" => $catName])); //to decode this json use $productdetails = $_GET['productdetails'];then $productData = json_decode(urldecode($productdetails), true); ?>"
                                                                                                class="product-image">
                                                                                                <img class="img-responsive has-rotator img-default-image img-cate-1613107134516-1543060429425"
                                                                                                    src="images/products/<?php echo ($imagename != null || $imagename != "") ? $imagename : "9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg@v=1552407244"; ?>"
                                                                                                    alt="<?php echo $BookTitle ?>">




                                                                                                <input type="hidden"
                                                                                                    value="//smartbook-theme.myshopify.com/images/products/9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg?v=1552407244"
                                                                                                    class="img-default-1613107134516-1543060429425" />













                                                                                            </a>
















                                                                                            <div class="box-label"></div>
                                                                                            <div class="action-links">
                                                                                                <button
                                                                                                    class="button btn-cart "
                                                                                                    type="button"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-loading-text="Loading..."
                                                                                                    title="Add to Cart"
                                                                                                    onclick="cart.add('14458191544372');">
                                                                                                    <span>Add to Cart</span>
                                                                                                </button>


                                                                                                <button
                                                                                                    class="btn-wishlist button btn-default wishlist-btn"
                                                                                                    data-product-handle="copy-of-when-the-doves-disappeared"
                                                                                                    type="button"
                                                                                                    data-toggle="tooltip"
                                                                                                    title="Add to Wish List"
                                                                                                    data-original-title="Add to Wish List">
                                                                                                    <span>Add to Wish
                                                                                                        List</span>
                                                                                                </button>


                                                                                                <button
                                                                                                    class="button btn-compare"
                                                                                                    type="button"
                                                                                                    data-toggle="tooltip"
                                                                                                    title="View Details"
                                                                                                    onclick="location.href='pages/osingleProductPage.php?bookid=<?php echo $Bookid?>;">
                                                                                                    <span>View
                                                                                                        Details</span>
                                                                                                </button>

                                                                                                <button
                                                                                                    class="button btn-quickview quickview"
                                                                                                    type="button"
                                                                                                    title="Quick View"
                                                                                                    data-toggle="modal"
                                                                                                    data-target="#productModal"
                                                                                                    data-book_id='<?php echo $Bookid ?>'
                                                                                                    data-original-title="Quick View">
                                                                                                    <span>Quick View</span>
                                                                                                </button>

                                                                                            </div>
                                                                                        </div>
                                                                                        <!-- image -->
                                                                                        <div class="caption">
                                                                                            <div class="inner  swtch">

                                                                                                <div class="ratings">
                                                                                                    <div class="rating-box">

                                                                                                        <span
                                                                                                            class="spr-badge"
                                                                                                            id="spr_badge_1613107134516"
                                                                                                            data-rating="5.0">
                                                                                                            <span
                                                                                                                class="spr-starrating spr-badge-starrating">
                                                                                                                <i class="spr-icon spr-icon-star"
                                                                                                                    aria-hidden="true"></i>
                                                                                                                <i class="spr-icon spr-icon-star"
                                                                                                                    aria-hidden="true"></i>
                                                                                                                <i class="spr-icon spr-icon-star"
                                                                                                                    aria-hidden="true"></i>
                                                                                                                <i class="spr-icon spr-icon-star"
                                                                                                                    aria-hidden="true"></i>
                                                                                                                <i class="spr-icon spr-icon-star"
                                                                                                                    aria-hidden="true"></i>
                                                                                                            </span><span
                                                                                                                class="spr-badge-caption">1
                                                                                                                review</span>
                                                                                                        </span>


                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="price-box">

                                                                                                    <?php $price_saleprice = DatabaseManager::select("book_details", "price , sale_price", "Book_id=$Bookid");
                                                                                                    foreach ($price_saleprice as $key => $value) {
                                                                                                        $price = $value["price"];
                                                                                                        $saleprice = $value["sale_price"]; ?>


                                                                                                        <?php if ($saleprice !== "0.00" && (int) $price > (int) $saleprice) { ?>
                                                                                                            <p
                                                                                                                class="special-price">
                                                                                                                <span class="price">
                                                                                                                    <span
                                                                                                                        class="money"
                                                                                                                        data-currency-usd="$<?php echo $saleprice ?>">
                                                                                                                        $<?php echo $saleprice ?>
                                                                                                                    </span>
                                                                                                                </span>
                                                                                                            </p>
                                                                                                        <?php } ?>
                                                                                                        <p class="old-price">
                                                                                                            <span class="price">
                                                                                                                <span
                                                                                                                    class="money"
                                                                                                                    data-currency-usd="$<?php echo $price; ?>">
                                                                                                                    $<?php echo $price; ?>
                                                                                                                </span>
                                                                                                            </span>
                                                                                                        </p>

                                                                                                    <?php } ?>

                                                                                                </div>
                                                                                                <!-- price-container -->



                                                                                                <?php foreach ($price_saleprice as $key => $value) {
                                                                                                    $price = $value["price"];
                                                                                                    $saleprice = $value["sale_price"]; ?>
                                                                                                    <?php if ($saleprice !== "0.00" && (int) $price > (int) $saleprice) { ?>
                                                                                                        <div
                                                                                                            class="label-product label_sale">
                                                                                                            <span>-<?php echo floor(((((int) $price) - ((int) $saleprice)) / ((int) $price)) * 100) ?>%</span>
                                                                                                        </div>
                                                                                                    <?php }
                                                                                                } ?>




                                                                                            </div>

                                                                                        </div>
                                                                                        <!-- caption -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- product-thumb -->
                                                                    </div>

                                                                    <?php

                                                                    if ($i + 1 < count($arru)) {
                                                                        $BookTitle = $arru[$i + 1]["Title"];
                                                                        $imagename = $arru[$i + 1]["Image"];
                                                                        $Bookid = $arru[$i + 1]["ID"];
                                                                        $catId = $arru[$i + 1]["catId"];
                                                                        $catName = $arru[$i + 1]["catName"];
                                                                        $htmlprodSec = '';
                                                                        // ob_start();
                                                                        ?>

                                                                        <div class="product-layout grid-style  ">
                                                                            <div class="product-thumb transition">
                                                                                <div class="item">
                                                                                    <div class="item-inner">
                                                                                        <div class="caption-top">

                                                                                            <p class="manufacture-product">
                                                                                                <a href="collections/vendors@q=Amazona.php"
                                                                                                    title="<?php echo $catName ?>"><?php echo $catName ?></a>
                                                                                            </p>

                                                                                            <h4 class="product-name">
                                                                                                <a
                                                                                                    href="pages/singleProductPage.php?productdetails=<?php echo urlencode(json_encode(["imagename" => $imagename, "BookTitle" => $BookTitle, "Bookid" => $Bookid, "catId" => $catId, "catName" => $catName])); //to decode this json use $productdetails = $_GET['productdetails'];then $productData = json_decode(urldecode($productdetails), true); ?>">
                                                                                                    <?php echo $BookTitle ?>
                                                                                                </a>
                                                                                            </h4>
                                                                                        </div>
                                                                                        <div class=" box-border">
                                                                                            <div class="image images-container">

                                                                                                <a href="pages/singleProductPage.php?productdetails=<?php echo urlencode(json_encode(["imagename" => $imagename, "BookTitle" => $BookTitle, "Bookid" => $Bookid, "catId" => $catId, "catName" => $catName])); //to decode this json use $productdetails = $_GET['productdetails'];then $productData = json_decode(urldecode($productdetails), true); ?>"
                                                                                                    class="product-image">
                                                                                                    <img class="img-responsive has-rotator img-default-image img-cate-1613107134516-1543060429425"
                                                                                                        src="images/products/<?php echo ($imagename != null || $imagename != "") ? $imagename : "9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg@v=1552407244"; ?>"
                                                                                                        alt="<?php echo $BookTitle ?>">




                                                                                                    <input type="hidden"
                                                                                                        value="//smartbook-theme.myshopify.com/images/products/9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg?v=1552407244"
                                                                                                        class="img-default-1613107134516-1543060429425" />













                                                                                                </a>
















                                                                                                <div class="box-label"></div>
                                                                                                <div class="action-links">
                                                                                                    <button
                                                                                                        class="button btn-cart "
                                                                                                        type="button"
                                                                                                        data-toggle="tooltip"
                                                                                                        data-loading-text="Loading..."
                                                                                                        title="Add to Cart"
                                                                                                        onclick="cart.add('14458191544372');">
                                                                                                        <span>Add to Cart</span>
                                                                                                    </button>


                                                                                                    <button
                                                                                                        class="btn-wishlist button btn-default wishlist-btn"
                                                                                                        data-product-handle="copy-of-when-the-doves-disappeared"
                                                                                                        type="button"
                                                                                                        data-toggle="tooltip"
                                                                                                        title="Add to Wish List"
                                                                                                        data-original-title="Add to Wish List">
                                                                                                        <span>Add to Wish
                                                                                                            List</span>
                                                                                                    </button>


                                                                                                    <button
                                                                                                        class="button btn-compare"
                                                                                                        type="button"
                                                                                                        data-toggle="tooltip"
                                                                                                        title="View Details"
                                                                                                        onclick="location.href='pages/osingleProductPage.php?bookid=<?php echo $Bookid?>;">
                                                                                                        <span>View
                                                                                                            Details</span>
                                                                                                    </button>

                                                                                                    <button
                                                                                                        class="button btn-quickview quickview"
                                                                                                        type="button"
                                                                                                        title="Quick View"
                                                                                                        data-toggle="modal"
                                                                                                        data-target="#productModal"
                                                                                                        data-book_id='<?php echo $Bookid ?>'
                                                                                                        data-original-title="Quick View">
                                                                                                        <span>Quick View</span>
                                                                                                    </button>

                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- image -->
                                                                                            <div class="caption">
                                                                                                <div class="inner  swtch">

                                                                                                    <div class="ratings">
                                                                                                        <div class="rating-box">

                                                                                                            <span
                                                                                                                class="spr-badge"
                                                                                                                id="spr_badge_1613107134516"
                                                                                                                data-rating="5.0">
                                                                                                                <span
                                                                                                                    class="spr-starrating spr-badge-starrating">
                                                                                                                    <i class="spr-icon spr-icon-star"
                                                                                                                        aria-hidden="true"></i>
                                                                                                                    <i class="spr-icon spr-icon-star"
                                                                                                                        aria-hidden="true"></i>
                                                                                                                    <i class="spr-icon spr-icon-star"
                                                                                                                        aria-hidden="true"></i>
                                                                                                                    <i class="spr-icon spr-icon-star"
                                                                                                                        aria-hidden="true"></i>
                                                                                                                    <i class="spr-icon spr-icon-star"
                                                                                                                        aria-hidden="true"></i>
                                                                                                                </span><span
                                                                                                                    class="spr-badge-caption">1
                                                                                                                    review</span>
                                                                                                            </span>


                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="price-box">

                                                                                                        <?php $price_saleprice = DatabaseManager::select("book_details", "price , sale_price", "Book_id=$Bookid");
                                                                                                        foreach ($price_saleprice as $key => $value) {
                                                                                                            $price = $value["price"];
                                                                                                            $saleprice = $value["sale_price"]; ?>


                                                                                                            <?php if ($saleprice !== "0.00" && (int) $price > (int) $saleprice) { ?>
                                                                                                                <p
                                                                                                                    class="special-price">
                                                                                                                    <span class="price">
                                                                                                                        <span
                                                                                                                            class="money"
                                                                                                                            data-currency-usd="$<?php echo $saleprice ?>">
                                                                                                                            $<?php echo $saleprice ?>
                                                                                                                        </span>
                                                                                                                    </span>
                                                                                                                </p>
                                                                                                            <?php } ?>
                                                                                                            <p class="old-price">
                                                                                                                <span class="price">
                                                                                                                    <span
                                                                                                                        class="money"
                                                                                                                        data-currency-usd="$<?php echo $price; ?>">
                                                                                                                        $<?php echo $price; ?>
                                                                                                                    </span>
                                                                                                                </span>
                                                                                                            </p>

                                                                                                        <?php } ?>

                                                                                                    </div>
                                                                                                    <!-- price-container -->



                                                                                                    <?php foreach ($price_saleprice as $key => $value) {
                                                                                                        $price = $value["price"];
                                                                                                        $saleprice = $value["sale_price"]; ?>
                                                                                                        <?php if ($saleprice !== "0.00" && (int) $price > (int) $saleprice) { ?>
                                                                                                            <div
                                                                                                                class="label-product label_sale">
                                                                                                                <span>-<?php echo floor(((((int) $price) - ((int) $saleprice)) / ((int) $price)) * 100) ?>%</span>
                                                                                                            </div>
                                                                                                        <?php }
                                                                                                    } ?>




                                                                                                </div>

                                                                                            </div>
                                                                                            <!-- caption -->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- product-thumb -->
                                                                        </div>

                                                                        <?php

                                                                    }
                                                                    echo "</div>";
                                                                }
                                                                ?>


                                                            </div>
                                                            <!-- most viewed -->


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <script>
                                        $(document).ready(function() {
                                            $('a[href="#tab-15430604294250"]').trigger("click");
                                            $(".tab-container-1543060429425").owlCarousel({
                                                items: 5,
                                                loop: false,
                                                margin: 0,
                                                nav: false,
                                                dots: true,
                                                autoplay: false,
                                                autoplayTimeout: 1000,
                                                autoplayHoverPause: true,
                                                autoplaySpeed: 1000,
                                                navSpeed: 1000,
                                                dotsSpeed: 1000,
                                                lazyLoad: true,
                                                responsive: {
                                                    0: {
                                                        items: 1,
                                                        nav: true
                                                    },
                                                    480: {
                                                        items: 2,
                                                        nav: true
                                                    },
                                                    768: {
                                                        items: 3
                                                    },
                                                    992: {
                                                        items: 4
                                                    },
                                                    1200: {
                                                        items: 5
                                                    },
                                                    1600: {
                                                        items: 5
                                                    }
                                                },
                                                onInitialized: function() {
                                                    var count = $(
                                                        ".tab-container-1543060429425 .owl-item.active"
                                                    ).length;
                                                    if (count == 1) {
                                                        $(".tab-container-1543060429425 .owl-item")
                                                            .removeClass('first');
                                                        $(".tab-container-1543060429425 .owl-item.active")
                                                            .addClass('first');
                                                    } else {
                                                        $(".tab-container-1543060429425 .owl-item")
                                                            .removeClass('first');
                                                        $(".tab-container-1543060429425 .owl-item.active:first")
                                                            .addClass('first');
                                                    }
                                                },
                                                onTranslated: function() {
                                                    var count = $(
                                                        ".tab-container-1543060429425 .owl-item.active"
                                                    ).length;
                                                    if (count == 1) {
                                                        $(".tab-container-1543060429425 .owl-item")
                                                            .removeClass('first');
                                                        $(".tab-container-1543060429425 .owl-item.active")
                                                            .addClass('first');
                                                    } else {
                                                        $(".tab-container-1543060429425 .owl-item")
                                                            .removeClass('first');
                                                        $(".tab-container-1543060429425 .owl-item.active:first")
                                                            .addClass('first');
                                                    }
                                                }
                                            });
                                        });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div id="shopify-section-1552563746975" class="shopify-section">
                <div class="main-row fluid-width  " data-section-id="1552563746975">
                    <div class="container">
                        <div class="row">
                            <div class="main-col col-sm-12 col-md-12">
                                <div class="row sub-row">
                                    <div class="sub-col col-sm-12 col-md-12">
                                        <div class="tt_product_module occountdown_module"
                                            id="product_module1552563746975">
                                            <div class="module-title">

                                                <h2>Deal of the day up to 20% off Special offer</h2>

                                            </div>
                                            <div class="box-style">
                                                <div class="col-product">
                                                    <div class="owl-container">
                                                        <div class="tt-product owl-carousel owl-theme">



                                                            <div class="row_items odd">










                                                                <div class="product-layout grid-style  ">
                                                                    <div class="product-thumb transition">
                                                                        <div class="item">
                                                                            <div class="item-inner">
                                                                                <div class="caption-top">

                                                                                    <p class="manufacture-product">
                                                                                        <a href="collections/vendors@q=Little&#32;Green&#32;Works.php"
                                                                                            title="Little Green Works">Little
                                                                                            Green Works</a>
                                                                                    </p>

                                                                                    <h4 class="product-name">
                                                                                        <a
                                                                                            href="collections/vendors/products/a-wing-and-a-prayer.php">
                                                                                            A WING and a PRAYER - Morano
                                                                                        </a>
                                                                                    </h4>
                                                                                </div>
                                                                                <div class="box-border">
                                                                                    <div class="image images-container">

                                                                                        <a href="collections/vendors/products/a-wing-and-a-prayer.php"
                                                                                            class="product-image">
                                                                                            <img class="img-responsive has-rotator img-default-image img-cate-1613076168756-1552563746975"
                                                                                                src="images/products/2-700x700_600x600.jpg@v=1552406461"
                                                                                                alt="A WING and a PRAYER - Morano">




                                                                                            <input type="hidden"
                                                                                                value="//smartbook-theme.myshopify.com/images/products/2-700x700_600x600.jpg?v=1552406461"
                                                                                                class="img-default-1613076168756-1552563746975" />













                                                                                        </a>
















                                                                                        <div class="box-label"></div>
                                                                                        <div class="action-links">
                                                                                            <button
                                                                                                class="button btn-cart "
                                                                                                type="button"
                                                                                                data-toggle="tooltip"
                                                                                                data-loading-text="Loading..."
                                                                                                title="Add to Cart"
                                                                                                onclick="cart.add('14458009550900');">
                                                                                                <span>Add to Cart</span>
                                                                                            </button>


                                                                                            <button
                                                                                                class="btn-wishlist button btn-default wishlist-btn"
                                                                                                data-product-handle="a-wing-and-a-prayer"
                                                                                                type="button"
                                                                                                data-toggle="tooltip"
                                                                                                title="Add to Wish List"
                                                                                                data-original-title="Add to Wish List">
                                                                                                <span>Add to Wish
                                                                                                    List</span>
                                                                                            </button>


                                                                                            <button
                                                                                                class="button btn-compare"
                                                                                                type="button"
                                                                                                data-toggle="tooltip"
                                                                                                title="View Details"
                                                                                                onclick="location.href='pages/singleProductPage.php/a-wing-and-a-prayer';">
                                                                                                <span>View
                                                                                                    Details</span>
                                                                                            </button>

                                                                                            <button
                                                                                                class="button btn-quickview quickview"
                                                                                                type="button"
                                                                                                title="Quick View"
                                                                                                data-toggle="modal"
                                                                                                data-target="#productModal"
                                                                                                data-productinfo='{&quot;id&quot;:1613076168756,&quot;title&quot;:&quot;A WING and a PRAYER - Morano&quot;,&quot;handle&quot;:&quot;a-wing-and-a-prayer&quot;,&quot;description&quot;:&quot;\u003cp\u003eLanded gentry cesar romero by jingo. Nostrilis tickler albert einstein, super mario id educated cesar romero tip top old bean landed gentry don’t panic by jingo. Nostrilis tickler albert einstein dali, albert einstein tip top old bean tom selleck Nostrilis tickler id by jingo. don’t panic prostate cancer Sergeant major dali landed gentry hair trimmer cesar romero super mario educated?\u003c\/p\u003e\n\u003cp\u003eSuper mario top gun freestyle, freestyle che guevara jolly good show bogie basket super mario top gun face mop, Droopy top gun che guevara Fallen eyebrow jolly good show freestyle testosterone trophy Sergeant major face mop bogie basket dickie davies elit super mario.\u003c\/p\u003e\n\u003cp\u003eMovember Nostrilis tickler magnum pi louis xiii professor plum graeme souness sweat irrigator,, ding-dong louis xiii socially mobile louis xiii movember graeme souness magnum pi sweat irrigator, Nostrilis tickler professor plum theodore roosevelt andrew weatherall. Circus strongman mark lawrenson admiral, dick dastardly admiral circus strongman stiff upper lip fu manchu hairy kiss. Nostrilis tickler mark lawrenson, circus strongman admiral Nostrilis tickler saddam hussein mark lawrenson sweat irrigator, cigars hairy kiss. stiff upper lip burt reynolds fu manchu dick dastardly.\u003c\/p\u003e\n[deal] 2020-10-11[\/deal]&quot;,&quot;published_at&quot;:&quot;2019-03-12T11:53:01-04:00&quot;,&quot;created_at&quot;:&quot;2019-03-12T12:00:57-04:00&quot;,&quot;vendor&quot;:&quot;Little Green Works&quot;,&quot;type&quot;:&quot;book&quot;,&quot;tags&quot;:[&quot;book&quot;,&quot;copy_audio&quot;,&quot;copy_hard&quot;,&quot;copy_soft&quot;,&quot;type_new&quot;,&quot;type_used&quot;],&quot;price&quot;:999,&quot;price_min&quot;:999,&quot;price_max&quot;:1499,&quot;available&quot;:true,&quot;price_varies&quot;:true,&quot;compare_at_price&quot;:1999,&quot;compare_at_price_min&quot;:1999,&quot;compare_at_price_max&quot;:1999,&quot;compare_at_price_varies&quot;:false,&quot;variants&quot;:[{&quot;id&quot;:14458009550900,&quot;title&quot;:&quot;Hard&quot;,&quot;option1&quot;:&quot;Hard&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;123&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;A WING and a PRAYER - Morano - Hard&quot;,&quot;public_title&quot;:&quot;Hard&quot;,&quot;options&quot;:[&quot;Hard&quot;],&quot;price&quot;:1499,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:14458071351348,&quot;title&quot;:&quot;Soft&quot;,&quot;option1&quot;:&quot;Soft&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;456&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;A WING and a PRAYER - Morano - Soft&quot;,&quot;public_title&quot;:&quot;Soft&quot;,&quot;options&quot;:[&quot;Soft&quot;],&quot;price&quot;:1099,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:14458071384116,&quot;title&quot;:&quot;Audio&quot;,&quot;option1&quot;:&quot;Audio&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;789&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;A WING and a PRAYER - Morano - Audio&quot;,&quot;public_title&quot;:&quot;Audio&quot;,&quot;options&quot;:[&quot;Audio&quot;],&quot;price&quot;:999,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}}],&quot;images&quot;:[&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/2-700x700.jpg?v=1552406461&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/1-700x700.jpg?v=1552406462&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/5-700x700.jpg?v=1552406463&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/6-700x700.jpg?v=1552406464&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/9-700x700.jpg?v=1552406466&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/11-700x700.jpg?v=1552406467&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/14-700x700.jpg?v=1552406468&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/15-700x700.jpg?v=1552406469&quot;],&quot;featured_image&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/2-700x700.jpg?v=1552406461&quot;,&quot;options&quot;:[&quot;Copy&quot;],&quot;media&quot;:[{&quot;alt&quot;:null,&quot;id&quot;:1547358830644,&quot;position&quot;:1,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/2-700x700.jpg?v=1552406461&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/2-700x700.jpg?v=1552406461&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547358863412,&quot;position&quot;:2,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/1-700x700.jpg?v=1552406462&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/1-700x700.jpg?v=1552406462&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547358896180,&quot;position&quot;:3,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/5-700x700.jpg?v=1552406463&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/5-700x700.jpg?v=1552406463&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547358928948,&quot;position&quot;:4,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/6-700x700.jpg?v=1552406464&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/6-700x700.jpg?v=1552406464&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547358961716,&quot;position&quot;:5,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/9-700x700.jpg?v=1552406466&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/9-700x700.jpg?v=1552406466&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547358994484,&quot;position&quot;:6,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/11-700x700.jpg?v=1552406467&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/11-700x700.jpg?v=1552406467&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547359060020,&quot;position&quot;:7,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/14-700x700.jpg?v=1552406468&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/14-700x700.jpg?v=1552406468&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547359158324,&quot;position&quot;:8,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/15-700x700.jpg?v=1552406469&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/15-700x700.jpg?v=1552406469&quot;,&quot;width&quot;:700}],&quot;content&quot;:&quot;\u003cp\u003eLanded gentry cesar romero by jingo. Nostrilis tickler albert einstein, super mario id educated cesar romero tip top old bean landed gentry don’t panic by jingo. Nostrilis tickler albert einstein dali, albert einstein tip top old bean tom selleck Nostrilis tickler id by jingo. don’t panic prostate cancer Sergeant major dali landed gentry hair trimmer cesar romero super mario educated?\u003c\/p\u003e\n\u003cp\u003eSuper mario top gun freestyle, freestyle che guevara jolly good show bogie basket super mario top gun face mop, Droopy top gun che guevara Fallen eyebrow jolly good show freestyle testosterone trophy Sergeant major face mop bogie basket dickie davies elit super mario.\u003c\/p\u003e\n\u003cp\u003eMovember Nostrilis tickler magnum pi louis xiii professor plum graeme souness sweat irrigator,, ding-dong louis xiii socially mobile louis xiii movember graeme souness magnum pi sweat irrigator, Nostrilis tickler professor plum theodore roosevelt andrew weatherall. Circus strongman mark lawrenson admiral, dick dastardly admiral circus strongman stiff upper lip fu manchu hairy kiss. Nostrilis tickler mark lawrenson, circus strongman admiral Nostrilis tickler saddam hussein mark lawrenson sweat irrigator, cigars hairy kiss. stiff upper lip burt reynolds fu manchu dick dastardly.\u003c\/p\u003e\n[deal] 2020-10-11[\/deal]&quot;}'
                                                                                                data-original-title="Quick View">
                                                                                                <span>Quick View</span>
                                                                                            </button>

                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- image -->
                                                                                    <div class="caption">
                                                                                        <div class="inner  swtch">

                                                                                            <div class="ratings">
                                                                                                <div class="rating-box">

                                                                                                    <span
                                                                                                        class="shopify-product-reviews-badge"
                                                                                                        data-id="1613076168756"></span>

                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="price-box">

                                                                                                <?php $price_saleprice = DatabaseManager::select("book_details", "price , sale_price", "Book_id=$Bookid");
                                                                                                foreach ($price_saleprice as $key => $value) {
                                                                                                    $price = $value["price"];
                                                                                                    $saleprice = $value["sale_price"]; ?>


                                                                                                    <?php if ($saleprice !== "0.00" && (int) $price > (int) $saleprice) { ?>
                                                                                                        <p
                                                                                                            class="special-price">
                                                                                                            <span class="price">
                                                                                                                <span
                                                                                                                    class="money"
                                                                                                                    data-currency-usd="$<?php echo $saleprice ?>">
                                                                                                                    $<?php echo $saleprice ?>
                                                                                                                </span>
                                                                                                            </span>
                                                                                                        </p>
                                                                                                    <?php } ?>
                                                                                                    <p class="old-price">
                                                                                                        <span class="price">
                                                                                                            <span
                                                                                                                class="money"
                                                                                                                data-currency-usd="$<?php echo $price; ?>">
                                                                                                                $<?php echo $price; ?>
                                                                                                            </span>
                                                                                                        </span>
                                                                                                    </p>

                                                                                                <?php } ?>

                                                                                            </div>
                                                                                            <!-- price-container -->






                                                                                            <div
                                                                                                class="label-product label_sale">
                                                                                                <span>-50%</span>
                                                                                            </div>





                                                                                            <div class="box-countdown">
                                                                                                <div class="inner">
                                                                                                    <p
                                                                                                        class="text-hurryup">
                                                                                                        Ends in:</p>
                                                                                                    <div id="Countdown1613076168756-1552563746975"
                                                                                                        class="box-timer cc ">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <script
                                                                                                type="text/javascript">
                                                                                            $(function() {
                                                                                                $('#Countdown1613076168756-1552563746975')
                                                                                                    .countdown({
                                                                                                        until: new Date(
                                                                                                            ' 2020-10-11'
                                                                                                        ),
                                                                                                        labels: [
                                                                                                            'years',
                                                                                                            'months ',
                                                                                                            'weeks',
                                                                                                            'days',
                                                                                                            'hours',
                                                                                                            'mins',
                                                                                                            'secs'
                                                                                                        ],
                                                                                                        labels1: [
                                                                                                            'years',
                                                                                                            'months ',
                                                                                                            'weeks',
                                                                                                            'days',
                                                                                                            'hours',
                                                                                                            'mins',
                                                                                                            'secs'
                                                                                                        ],
                                                                                                    });
                                                                                            });
                                                                                            </script>


                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- caption -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- product-thumb -->
                                                                </div>
                                                                <!-- product-layout -->
                                                            </div>


                                                            <div class="row_items even">










                                                                <div class="product-layout grid-style  ">
                                                                    <div class="product-thumb transition">
                                                                        <div class="item">
                                                                            <div class="item-inner">
                                                                                <div class="caption-top">

                                                                                    <p class="manufacture-product">
                                                                                        <a href="collections/vendors@q=Amazona.php"
                                                                                            title="Amazona">Amazona</a>
                                                                                    </p>

                                                                                    <h4 class="product-name">
                                                                                        <a
                                                                                            href="collections/vendors/products/copy-of-brothers-beasts-bernheimer.php">
                                                                                            Fred the lonely monster -
                                                                                            Anne
                                                                                        </a>
                                                                                    </h4>
                                                                                </div>
                                                                                <div class="box-border">
                                                                                    <div class="image images-container">

                                                                                        <a href="collections/vendors/products/copy-of-brothers-beasts-bernheimer.php"
                                                                                            class="product-image">
                                                                                            <img class="img-responsive has-rotator img-default-image img-cate-1613143277620-1552563746975"
                                                                                                src="images/products/16-700x700_579706ac-e6c6-4b2f-8510-f56d5f5410ba_600x600.jpg@v=1552408223"
                                                                                                alt="Fred the lonely monster - Anne">




                                                                                            <input type="hidden"
                                                                                                value="//smartbook-theme.myshopify.com/images/products/16-700x700_579706ac-e6c6-4b2f-8510-f56d5f5410ba_600x600.jpg?v=1552408223"
                                                                                                class="img-default-1613143277620-1552563746975" />













                                                                                        </a>
















                                                                                        <div class="box-label"></div>
                                                                                        <div class="action-links">
                                                                                            <button
                                                                                                class="button btn-cart "
                                                                                                type="button"
                                                                                                data-toggle="tooltip"
                                                                                                data-loading-text="Loading..."
                                                                                                title="Add to Cart"
                                                                                                onclick="cart.add('14458420559924');">
                                                                                                <span>Add to Cart</span>
                                                                                            </button>


                                                                                            <button
                                                                                                class="btn-wishlist button btn-default wishlist-btn"
                                                                                                data-product-handle="copy-of-brothers-beasts-bernheimer"
                                                                                                type="button"
                                                                                                data-toggle="tooltip"
                                                                                                title="Add to Wish List"
                                                                                                data-original-title="Add to Wish List">
                                                                                                <span>Add to Wish
                                                                                                    List</span>
                                                                                            </button>


                                                                                            <button
                                                                                                class="button btn-compare"
                                                                                                type="button"
                                                                                                data-toggle="tooltip"
                                                                                                title="View Details"
                                                                                                onclick="location.href='pages/singleProductPage.php/copy-of-brothers-beasts-bernheimer';">
                                                                                                <span>View
                                                                                                    Details</span>
                                                                                            </button>

                                                                                            <button
                                                                                                class="button btn-quickview quickview"
                                                                                                type="button"
                                                                                                title="Quick View"
                                                                                                data-toggle="modal"
                                                                                                data-target="#productModal"
                                                                                                data-productinfo='{&quot;id&quot;:1613143277620,&quot;title&quot;:&quot;Fred the lonely monster - Anne&quot;,&quot;handle&quot;:&quot;copy-of-brothers-beasts-bernheimer&quot;,&quot;description&quot;:&quot;\u003cp\u003eMovember Nostrilis tickler magnum pi louis xiii professor plum graeme souness sweat irrigator,, ding-dong louis xiii socially mobile louis xiii movember graeme souness magnum pi sweat irrigator, Nostrilis tickler professor plum theodore roosevelt andrew weatherall. Circus strongman mark lawrenson admiral, dick dastardly admiral circus strongman stiff upper lip fu manchu hairy kiss. Nostrilis tickler mark lawrenson, circus strongman admiral Nostrilis tickler saddam hussein mark lawrenson sweat irrigator, cigars hairy kiss. stiff upper lip burt reynolds fu manchu dick dastardly.\u003c\/p\u003e\n\u003cp\u003eSuper mario top gun freestyle, freestyle che guevara jolly good show bogie basket super mario top gun face mop, Droopy top gun che guevara Fallen eyebrow jolly good show freestyle testosterone trophy Sergeant major face mop bogie basket dickie davies elit super mario.\u003c\/p\u003e\n\u003cp\u003eLanded gentry cesar romero by jingo. Nostrilis tickler albert einstein, super mario id educated cesar romero tip top old bean landed gentry don’t panic by jingo. Nostrilis tickler albert einstein dali, albert einstein tip top old bean tom selleck Nostrilis tickler id by jingo. don’t panic prostate cancer Sergeant major dali landed gentry hair trimmer cesar romero super mario educated?\u003c\/p\u003e\n\u003cp\u003e[deal]2019-12-01[\/deal]\u003c\/p\u003e&quot;,&quot;published_at&quot;:&quot;2019-03-12T11:53:01-04:00&quot;,&quot;created_at&quot;:&quot;2019-03-12T12:29:52-04:00&quot;,&quot;vendor&quot;:&quot;Amazona&quot;,&quot;type&quot;:&quot;book&quot;,&quot;tags&quot;:[&quot;book&quot;,&quot;copy_hard&quot;,&quot;copy_soft&quot;,&quot;type_new&quot;],&quot;price&quot;:999,&quot;price_min&quot;:999,&quot;price_max&quot;:1599,&quot;available&quot;:true,&quot;price_varies&quot;:true,&quot;compare_at_price&quot;:1999,&quot;compare_at_price_min&quot;:1999,&quot;compare_at_price_max&quot;:1999,&quot;compare_at_price_varies&quot;:false,&quot;variants&quot;:[{&quot;id&quot;:14458420559924,&quot;title&quot;:&quot;Hard&quot;,&quot;option1&quot;:&quot;Hard&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;123&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;Fred the lonely monster - Anne - Hard&quot;,&quot;public_title&quot;:&quot;Hard&quot;,&quot;options&quot;:[&quot;Hard&quot;],&quot;price&quot;:1599,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:14458420592692,&quot;title&quot;:&quot;Soft&quot;,&quot;option1&quot;:&quot;Soft&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;456&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;Fred the lonely monster - Anne - Soft&quot;,&quot;public_title&quot;:&quot;Soft&quot;,&quot;options&quot;:[&quot;Soft&quot;],&quot;price&quot;:1099,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:14458420625460,&quot;title&quot;:&quot;Audio&quot;,&quot;option1&quot;:&quot;Audio&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;789&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;Fred the lonely monster - Anne - Audio&quot;,&quot;public_title&quot;:&quot;Audio&quot;,&quot;options&quot;:[&quot;Audio&quot;],&quot;price&quot;:999,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}}],&quot;images&quot;:[&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/16-700x700_579706ac-e6c6-4b2f-8510-f56d5f5410ba.jpg?v=1552408223&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/13-700x700_5c127055-3e44-47e3-8e48-48d828d2c7e3.jpg?v=1552408223&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/3-700x700_ad951374-e0a2-474b-ab0e-f76d5aec4940.jpg?v=1552408223&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/4-700x700_1790f2d5-b6c8-4426-9127-8a413bac3981.jpg?v=1552408223&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/7-700x700_55c581af-573c-45e3-8a7a-78e009eccc11.jpg?v=1552408223&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/8-700x700_a8a24bbe-a0c3-43ae-a6e3-d2a2d5a8a3d3.jpg?v=1552408223&quot;],&quot;featured_image&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/16-700x700_579706ac-e6c6-4b2f-8510-f56d5f5410ba.jpg?v=1552408223&quot;,&quot;options&quot;:[&quot;Copy&quot;],&quot;media&quot;:[{&quot;alt&quot;:null,&quot;id&quot;:1547384324148,&quot;position&quot;:1,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/16-700x700_579706ac-e6c6-4b2f-8510-f56d5f5410ba.jpg?v=1552408223&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/16-700x700_579706ac-e6c6-4b2f-8510-f56d5f5410ba.jpg?v=1552408223&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547384127540,&quot;position&quot;:2,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/13-700x700_5c127055-3e44-47e3-8e48-48d828d2c7e3.jpg?v=1552408223&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/13-700x700_5c127055-3e44-47e3-8e48-48d828d2c7e3.jpg?v=1552408223&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547384193076,&quot;position&quot;:3,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/3-700x700_ad951374-e0a2-474b-ab0e-f76d5aec4940.jpg?v=1552408223&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/3-700x700_ad951374-e0a2-474b-ab0e-f76d5aec4940.jpg?v=1552408223&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547384225844,&quot;position&quot;:4,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/4-700x700_1790f2d5-b6c8-4426-9127-8a413bac3981.jpg?v=1552408223&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/4-700x700_1790f2d5-b6c8-4426-9127-8a413bac3981.jpg?v=1552408223&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547384258612,&quot;position&quot;:5,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/7-700x700_55c581af-573c-45e3-8a7a-78e009eccc11.jpg?v=1552408223&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/7-700x700_55c581af-573c-45e3-8a7a-78e009eccc11.jpg?v=1552408223&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547384291380,&quot;position&quot;:6,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/8-700x700_a8a24bbe-a0c3-43ae-a6e3-d2a2d5a8a3d3.jpg?v=1552408223&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/8-700x700_a8a24bbe-a0c3-43ae-a6e3-d2a2d5a8a3d3.jpg?v=1552408223&quot;,&quot;width&quot;:700}],&quot;content&quot;:&quot;\u003cp\u003eMovember Nostrilis tickler magnum pi louis xiii professor plum graeme souness sweat irrigator,, ding-dong louis xiii socially mobile louis xiii movember graeme souness magnum pi sweat irrigator, Nostrilis tickler professor plum theodore roosevelt andrew weatherall. Circus strongman mark lawrenson admiral, dick dastardly admiral circus strongman stiff upper lip fu manchu hairy kiss. Nostrilis tickler mark lawrenson, circus strongman admiral Nostrilis tickler saddam hussein mark lawrenson sweat irrigator, cigars hairy kiss. stiff upper lip burt reynolds fu manchu dick dastardly.\u003c\/p\u003e\n\u003cp\u003eSuper mario top gun freestyle, freestyle che guevara jolly good show bogie basket super mario top gun face mop, Droopy top gun che guevara Fallen eyebrow jolly good show freestyle testosterone trophy Sergeant major face mop bogie basket dickie davies elit super mario.\u003c\/p\u003e\n\u003cp\u003eLanded gentry cesar romero by jingo. Nostrilis tickler albert einstein, super mario id educated cesar romero tip top old bean landed gentry don’t panic by jingo. Nostrilis tickler albert einstein dali, albert einstein tip top old bean tom selleck Nostrilis tickler id by jingo. don’t panic prostate cancer Sergeant major dali landed gentry hair trimmer cesar romero super mario educated?\u003c\/p\u003e\n\u003cp\u003e[deal]2019-12-01[\/deal]\u003c\/p\u003e&quot;}'
                                                                                                data-original-title="Quick View">
                                                                                                <span>Quick View</span>
                                                                                            </button>

                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- image -->
                                                                                    <div class="caption">
                                                                                        <div class="inner  swtch">

                                                                                            <div class="ratings">
                                                                                                <div class="rating-box">

                                                                                                    <span
                                                                                                        class="shopify-product-reviews-badge"
                                                                                                        data-id="1613143277620"></span>

                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="price-box">

                                                                                                <p
                                                                                                    class="special-price">
                                                                                                    <span
                                                                                                        class="price"><span
                                                                                                            class=money>$15.99</span></span>
                                                                                                </p>
                                                                                                <p class="old-price">
                                                                                                    <span
                                                                                                        class="price"><span
                                                                                                            class=money>$19.99</span></span>
                                                                                                </p>

                                                                                            </div>
                                                                                            <!-- price-container -->






                                                                                            <div
                                                                                                class="label-product label_sale">
                                                                                                <span>-50%</span>
                                                                                            </div>





                                                                                            <div class="box-countdown">
                                                                                                <div class="inner">
                                                                                                    <p
                                                                                                        class="text-hurryup">
                                                                                                        Ends in:</p>
                                                                                                    <div id="Countdown1613143277620-1552563746975"
                                                                                                        class="box-timer cc ">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <script
                                                                                                type="text/javascript">
                                                                                            $(function() {
                                                                                                $('#Countdown1613143277620-1552563746975')
                                                                                                    .countdown({
                                                                                                        until: new Date(
                                                                                                            '2019-12-01'
                                                                                                        ),
                                                                                                        labels: [
                                                                                                            'years',
                                                                                                            'months ',
                                                                                                            'weeks',
                                                                                                            'days',
                                                                                                            'hours',
                                                                                                            'mins',
                                                                                                            'secs'
                                                                                                        ],
                                                                                                        labels1: [
                                                                                                            'years',
                                                                                                            'months ',
                                                                                                            'weeks',
                                                                                                            'days',
                                                                                                            'hours',
                                                                                                            'mins',
                                                                                                            'secs'
                                                                                                        ],
                                                                                                    });
                                                                                            });
                                                                                            </script>


                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- caption -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- product-thumb -->
                                                                </div>
                                                                <!-- product-layout -->
                                                            </div>


                                                            <div class="row_items odd">










                                                                <div class="product-layout grid-style  ">
                                                                    <div class="product-thumb transition">
                                                                        <div class="item">
                                                                            <div class="item-inner">
                                                                                <div class="caption-top">

                                                                                    <p class="manufacture-product">
                                                                                        <a href="collections/vendors@q=Amazona.php"
                                                                                            title="Amazona">Amazona</a>
                                                                                    </p>

                                                                                    <h4 class="product-name">
                                                                                        <a
                                                                                            href="collections/vendors/products/copy-of-anthropologie-amerindienne-franz-boas.php">
                                                                                            The Dance of the business
                                                                                            mind
                                                                                        </a>
                                                                                    </h4>
                                                                                </div>
                                                                                <div class="box-border">
                                                                                    <div class="image images-container">

                                                                                        <a href="collections/vendors/products/copy-of-anthropologie-amerindienne-franz-boas.php"
                                                                                            class="product-image">
                                                                                            <img class="img-responsive has-rotator img-default-image img-cate-1613110149172-1552563746975"
                                                                                                src="images/products/14-700x700_daed651a-c2eb-460b-8fed-262253a5e927_600x600.jpg@v=1552407352"
                                                                                                alt="The Dance of the business mind">




                                                                                            <input type="hidden"
                                                                                                value="//smartbook-theme.myshopify.com/images/products/14-700x700_daed651a-c2eb-460b-8fed-262253a5e927_600x600.jpg?v=1552407352"
                                                                                                class="img-default-1613110149172-1552563746975" />













                                                                                        </a>
















                                                                                        <div class="box-label"></div>
                                                                                        <div class="action-links">
                                                                                            <button
                                                                                                class="button btn-cart "
                                                                                                type="button"
                                                                                                data-toggle="tooltip"
                                                                                                data-loading-text="Loading..."
                                                                                                title="Add to Cart"
                                                                                                onclick="cart.add('14458216316980');">
                                                                                                <span>Add to Cart</span>
                                                                                            </button>


                                                                                            <button
                                                                                                class="btn-wishlist button btn-default wishlist-btn"
                                                                                                data-product-handle="copy-of-anthropologie-amerindienne-franz-boas"
                                                                                                type="button"
                                                                                                data-toggle="tooltip"
                                                                                                title="Add to Wish List"
                                                                                                data-original-title="Add to Wish List">
                                                                                                <span>Add to Wish
                                                                                                    List</span>
                                                                                            </button>


                                                                                            <button
                                                                                                class="button btn-compare"
                                                                                                type="button"
                                                                                                data-toggle="tooltip"
                                                                                                title="View Details"
                                                                                                onclick="location.href='pages/singleProductPage.php/copy-of-anthropologie-amerindienne-franz-boas';">
                                                                                                <span>View
                                                                                                    Details</span>
                                                                                            </button>

                                                                                            <button
                                                                                                class="button btn-quickview quickview"
                                                                                                type="button"
                                                                                                title="Quick View"
                                                                                                data-toggle="modal"
                                                                                                data-target="#productModal"
                                                                                                data-productinfo='{&quot;id&quot;:1613110149172,&quot;title&quot;:&quot;The Dance of the business mind&quot;,&quot;handle&quot;:&quot;copy-of-anthropologie-amerindienne-franz-boas&quot;,&quot;description&quot;:&quot;\u003cp\u003eLanded gentry cesar romero by jingo. Nostrilis tickler albert einstein, super mario id educated cesar romero tip top old bean landed gentry don’t panic by jingo. Nostrilis tickler albert einstein dali, albert einstein tip top old bean tom selleck Nostrilis tickler id by jingo. don’t panic prostate cancer Sergeant major dali landed gentry hair trimmer cesar romero super mario educated?\u003c\/p\u003e\n\u003cp\u003eSuper mario top gun freestyle, freestyle che guevara jolly good show bogie basket super mario top gun face mop, Droopy top gun che guevara Fallen eyebrow jolly good show freestyle testosterone trophy Sergeant major face mop bogie basket dickie davies elit super mario.\u003c\/p\u003e\n\u003cp\u003eMovember Nostrilis tickler magnum pi louis xiii professor plum graeme souness sweat irrigator,, ding-dong louis xiii socially mobile louis xiii movember graeme souness magnum pi sweat irrigator, Nostrilis tickler professor plum theodore roosevelt andrew weatherall. Circus strongman mark lawrenson admiral, dick dastardly admiral circus strongman stiff upper lip fu manchu hairy kiss. Nostrilis tickler mark lawrenson, circus strongman admiral Nostrilis tickler saddam hussein mark lawrenson sweat irrigator, cigars hairy kiss. stiff upper lip burt reynolds fu manchu dick dastardly.\u003c\/p\u003e\n\u003cp\u003e[deal]2019-12-12[\/deal]\u003c\/p\u003e&quot;,&quot;published_at&quot;:&quot;2019-03-12T11:53:01-04:00&quot;,&quot;created_at&quot;:&quot;2019-03-12T12:15:33-04:00&quot;,&quot;vendor&quot;:&quot;Amazona&quot;,&quot;type&quot;:&quot;book&quot;,&quot;tags&quot;:[&quot;book&quot;,&quot;copy_audio&quot;,&quot;copy_hard&quot;,&quot;copy_soft&quot;,&quot;type_new&quot;],&quot;price&quot;:999,&quot;price_min&quot;:999,&quot;price_max&quot;:1899,&quot;available&quot;:true,&quot;price_varies&quot;:true,&quot;compare_at_price&quot;:1999,&quot;compare_at_price_min&quot;:1999,&quot;compare_at_price_max&quot;:1999,&quot;compare_at_price_varies&quot;:false,&quot;variants&quot;:[{&quot;id&quot;:14458216316980,&quot;title&quot;:&quot;Hard&quot;,&quot;option1&quot;:&quot;Hard&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;123&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;The Dance of the business mind - Hard&quot;,&quot;public_title&quot;:&quot;Hard&quot;,&quot;options&quot;:[&quot;Hard&quot;],&quot;price&quot;:1899,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:14458216349748,&quot;title&quot;:&quot;Soft&quot;,&quot;option1&quot;:&quot;Soft&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;456&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;The Dance of the business mind - Soft&quot;,&quot;public_title&quot;:&quot;Soft&quot;,&quot;options&quot;:[&quot;Soft&quot;],&quot;price&quot;:1099,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:14458216382516,&quot;title&quot;:&quot;Audio&quot;,&quot;option1&quot;:&quot;Audio&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;789&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;The Dance of the business mind - Audio&quot;,&quot;public_title&quot;:&quot;Audio&quot;,&quot;options&quot;:[&quot;Audio&quot;],&quot;price&quot;:999,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}}],&quot;images&quot;:[&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/14-700x700_daed651a-c2eb-460b-8fed-262253a5e927.jpg?v=1552407352&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/9-700x700_bc9a4ec0-098e-4b2a-989d-4d83d1fdd93e.jpg?v=1552407352&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/5-700x700_916e4243-96a7-40e1-9b86-e8c3abb5022b.jpg?v=1552407352&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/6-700x700_cc3862c2-2522-4ec2-b73f-b8b090b2a0fe.jpg?v=1552407352&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/15-700x700_8a49a3d8-d1cf-4e72-900a-c6902d7c2aa4.jpg?v=1552407352&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/11-700x700_1b0245bc-3e3a-4c17-8602-88a381cb3cc4.jpg?v=1552407352&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/2-700x700_72d78126-1ead-4e12-ad82-95419b5d12d9.jpg?v=1552407352&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/1-700x700_8e1783ab-0f33-460b-9eb1-e42a2a3c9d41.jpg?v=1552407352&quot;],&quot;featured_image&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/14-700x700_daed651a-c2eb-460b-8fed-262253a5e927.jpg?v=1552407352&quot;,&quot;options&quot;:[&quot;Copy&quot;],&quot;media&quot;:[{&quot;alt&quot;:null,&quot;id&quot;:1547370889268,&quot;position&quot;:1,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/14-700x700_daed651a-c2eb-460b-8fed-262253a5e927.jpg?v=1552407352&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/14-700x700_daed651a-c2eb-460b-8fed-262253a5e927.jpg?v=1552407352&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547370659892,&quot;position&quot;:2,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/9-700x700_bc9a4ec0-098e-4b2a-989d-4d83d1fdd93e.jpg?v=1552407352&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/9-700x700_bc9a4ec0-098e-4b2a-989d-4d83d1fdd93e.jpg?v=1552407352&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547370692660,&quot;position&quot;:3,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/5-700x700_916e4243-96a7-40e1-9b86-e8c3abb5022b.jpg?v=1552407352&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/5-700x700_916e4243-96a7-40e1-9b86-e8c3abb5022b.jpg?v=1552407352&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547370725428,&quot;position&quot;:4,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/6-700x700_cc3862c2-2522-4ec2-b73f-b8b090b2a0fe.jpg?v=1552407352&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/6-700x700_cc3862c2-2522-4ec2-b73f-b8b090b2a0fe.jpg?v=1552407352&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547370758196,&quot;position&quot;:5,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/15-700x700_8a49a3d8-d1cf-4e72-900a-c6902d7c2aa4.jpg?v=1552407352&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/15-700x700_8a49a3d8-d1cf-4e72-900a-c6902d7c2aa4.jpg?v=1552407352&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547370790964,&quot;position&quot;:6,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/11-700x700_1b0245bc-3e3a-4c17-8602-88a381cb3cc4.jpg?v=1552407352&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/11-700x700_1b0245bc-3e3a-4c17-8602-88a381cb3cc4.jpg?v=1552407352&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547370823732,&quot;position&quot;:7,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/2-700x700_72d78126-1ead-4e12-ad82-95419b5d12d9.jpg?v=1552407352&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/2-700x700_72d78126-1ead-4e12-ad82-95419b5d12d9.jpg?v=1552407352&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547370856500,&quot;position&quot;:8,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/1-700x700_8e1783ab-0f33-460b-9eb1-e42a2a3c9d41.jpg?v=1552407352&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/1-700x700_8e1783ab-0f33-460b-9eb1-e42a2a3c9d41.jpg?v=1552407352&quot;,&quot;width&quot;:700}],&quot;content&quot;:&quot;\u003cp\u003eLanded gentry cesar romero by jingo. Nostrilis tickler albert einstein, super mario id educated cesar romero tip top old bean landed gentry don’t panic by jingo. Nostrilis tickler albert einstein dali, albert einstein tip top old bean tom selleck Nostrilis tickler id by jingo. don’t panic prostate cancer Sergeant major dali landed gentry hair trimmer cesar romero super mario educated?\u003c\/p\u003e\n\u003cp\u003eSuper mario top gun freestyle, freestyle che guevara jolly good show bogie basket super mario top gun face mop, Droopy top gun che guevara Fallen eyebrow jolly good show freestyle testosterone trophy Sergeant major face mop bogie basket dickie davies elit super mario.\u003c\/p\u003e\n\u003cp\u003eMovember Nostrilis tickler magnum pi louis xiii professor plum graeme souness sweat irrigator,, ding-dong louis xiii socially mobile louis xiii movember graeme souness magnum pi sweat irrigator, Nostrilis tickler professor plum theodore roosevelt andrew weatherall. Circus strongman mark lawrenson admiral, dick dastardly admiral circus strongman stiff upper lip fu manchu hairy kiss. Nostrilis tickler mark lawrenson, circus strongman admiral Nostrilis tickler saddam hussein mark lawrenson sweat irrigator, cigars hairy kiss. stiff upper lip burt reynolds fu manchu dick dastardly.\u003c\/p\u003e\n\u003cp\u003e[deal]2019-12-12[\/deal]\u003c\/p\u003e&quot;}'
                                                                                                data-original-title="Quick View">
                                                                                                <span>Quick View</span>
                                                                                            </button>

                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- image -->
                                                                                    <div class="caption">
                                                                                        <div class="inner  swtch">

                                                                                            <div class="ratings">
                                                                                                <div class="rating-box">

                                                                                                    <span
                                                                                                        class="shopify-product-reviews-badge"
                                                                                                        data-id="1613110149172"></span>

                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="price-box">

                                                                                                <p
                                                                                                    class="special-price">
                                                                                                    <span
                                                                                                        class="price"><span
                                                                                                            class=money>$18.99</span></span>
                                                                                                </p>
                                                                                                <p class="old-price">
                                                                                                    <span
                                                                                                        class="price"><span
                                                                                                            class=money>$19.99</span></span>
                                                                                                </p>

                                                                                            </div>
                                                                                            <!-- price-container -->






                                                                                            <div
                                                                                                class="label-product label_sale">
                                                                                                <span>-50%</span>
                                                                                            </div>





                                                                                            <div class="box-countdown">
                                                                                                <div class="inner">
                                                                                                    <p
                                                                                                        class="text-hurryup">
                                                                                                        Ends in:</p>
                                                                                                    <div id="Countdown1613110149172-1552563746975"
                                                                                                        class="box-timer cc ">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <script
                                                                                                type="text/javascript">
                                                                                            $(function() {
                                                                                                $('#Countdown1613110149172-1552563746975')
                                                                                                    .countdown({
                                                                                                        until: new Date(
                                                                                                            '2019-12-12'
                                                                                                        ),
                                                                                                        labels: [
                                                                                                            'years',
                                                                                                            'months ',
                                                                                                            'weeks',
                                                                                                            'days',
                                                                                                            'hours',
                                                                                                            'mins',
                                                                                                            'secs'
                                                                                                        ],
                                                                                                        labels1: [
                                                                                                            'years',
                                                                                                            'months ',
                                                                                                            'weeks',
                                                                                                            'days',
                                                                                                            'hours',
                                                                                                            'mins',
                                                                                                            'secs'
                                                                                                        ],
                                                                                                    });
                                                                                            });
                                                                                            </script>


                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- caption -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- product-thumb -->
                                                                </div>
                                                                <!-- product-layout -->
                                                            </div>


                                                            <div class="row_items even">










                                                                <div class="product-layout grid-style  ">
                                                                    <div class="product-thumb transition">
                                                                        <div class="item">
                                                                            <div class="item-inner">
                                                                                <div class="caption-top">

                                                                                    <p class="manufacture-product">
                                                                                        <a href="collections/vendors@q=Amazona.php"
                                                                                            title="Amazona">Amazona</a>
                                                                                    </p>

                                                                                    <h4 class="product-name">
                                                                                        <a
                                                                                            href="collections/vendors/products/copy-of-rising-crow-by-k-l-byles.php">
                                                                                            When the Doves Disappeared
                                                                                        </a>
                                                                                    </h4>
                                                                                </div>
                                                                                <div class="box-border">
                                                                                    <div class="image images-container">

                                                                                        <a href="collections/vendors/products/copy-of-rising-crow-by-k-l-byles.php"
                                                                                            class="product-image">
                                                                                            <img class="img-responsive has-rotator img-default-image img-cate-1613101662260-1552563746975"
                                                                                                src="images/products/5-700x700_ae8ec292-730f-4ff8-8ce5-62500d4bac56_600x600.jpg@v=1552407177"
                                                                                                alt="When the Doves Disappeared">




                                                                                            <input type="hidden"
                                                                                                value="//smartbook-theme.myshopify.com/images/products/5-700x700_ae8ec292-730f-4ff8-8ce5-62500d4bac56_600x600.jpg?v=1552407177"
                                                                                                class="img-default-1613101662260-1552563746975" />













                                                                                        </a>
















                                                                                        <div class="box-label"></div>
                                                                                        <div class="action-links">
                                                                                            <button
                                                                                                class="button btn-cart "
                                                                                                type="button"
                                                                                                data-toggle="tooltip"
                                                                                                data-loading-text="Loading..."
                                                                                                title="Add to Cart"
                                                                                                onclick="cart.add('14458162577460');">
                                                                                                <span>Add to Cart</span>
                                                                                            </button>


                                                                                            <button
                                                                                                class="btn-wishlist button btn-default wishlist-btn"
                                                                                                data-product-handle="copy-of-rising-crow-by-k-l-byles"
                                                                                                type="button"
                                                                                                data-toggle="tooltip"
                                                                                                title="Add to Wish List"
                                                                                                data-original-title="Add to Wish List">
                                                                                                <span>Add to Wish
                                                                                                    List</span>
                                                                                            </button>


                                                                                            <button
                                                                                                class="button btn-compare"
                                                                                                type="button"
                                                                                                data-toggle="tooltip"
                                                                                                title="View Details"
                                                                                                onclick="location.href='pages/singleProductPage.php/copy-of-rising-crow-by-k-l-byles';">
                                                                                                <span>View
                                                                                                    Details</span>
                                                                                            </button>

                                                                                            <button
                                                                                                class="button btn-quickview quickview"
                                                                                                type="button"
                                                                                                title="Quick View"
                                                                                                data-toggle="modal"
                                                                                                data-target="#productModal"
                                                                                                data-productinfo='{&quot;id&quot;:1613101662260,&quot;title&quot;:&quot;When the Doves Disappeared&quot;,&quot;handle&quot;:&quot;copy-of-rising-crow-by-k-l-byles&quot;,&quot;description&quot;:&quot;\u003cp\u003eLanded gentry cesar romero by jingo. Nostrilis tickler albert einstein, super mario id educated cesar romero tip top old bean landed gentry don’t panic by jingo. Nostrilis tickler albert einstein dali, albert einstein tip top old bean tom selleck Nostrilis tickler id by jingo. don’t panic prostate cancer Sergeant major dali landed gentry hair trimmer cesar romero super mario educated?\u003c\/p\u003e\n\u003cp\u003eSuper mario top gun freestyle, freestyle che guevara jolly good show bogie basket super mario top gun face mop, Droopy top gun che guevara Fallen eyebrow jolly good show freestyle testosterone trophy Sergeant major face mop bogie basket dickie davies elit super mario.\u003c\/p\u003e\n\u003cp\u003eMovember Nostrilis tickler magnum pi louis xiii professor plum graeme souness sweat irrigator,, ding-dong louis xiii socially mobile louis xiii movember graeme souness magnum pi sweat irrigator, Nostrilis tickler professor plum theodore roosevelt andrew weatherall. Circus strongman mark lawrenson admiral, dick dastardly admiral circus strongman stiff upper lip fu manchu hairy kiss. Nostrilis tickler mark lawrenson, circus strongman admiral Nostrilis tickler saddam hussein mark lawrenson sweat irrigator, cigars hairy kiss. stiff upper lip burt reynolds fu manchu dick dastardly.\u003c\/p\u003e\n\u003cp\u003e[deal]2020-01-01[\/deal]\u003c\/p\u003e&quot;,&quot;published_at&quot;:&quot;2019-03-12T11:53:01-04:00&quot;,&quot;created_at&quot;:&quot;2019-03-12T12:11:37-04:00&quot;,&quot;vendor&quot;:&quot;Amazona&quot;,&quot;type&quot;:&quot;book&quot;,&quot;tags&quot;:[&quot;book&quot;,&quot;copy_audio&quot;,&quot;copy_hard&quot;,&quot;copy_soft&quot;,&quot;type_new&quot;,&quot;type_used&quot;],&quot;price&quot;:999,&quot;price_min&quot;:999,&quot;price_max&quot;:1599,&quot;available&quot;:true,&quot;price_varies&quot;:true,&quot;compare_at_price&quot;:1999,&quot;compare_at_price_min&quot;:1999,&quot;compare_at_price_max&quot;:1999,&quot;compare_at_price_varies&quot;:false,&quot;variants&quot;:[{&quot;id&quot;:14458162577460,&quot;title&quot;:&quot;Hard&quot;,&quot;option1&quot;:&quot;Hard&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;123&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;When the Doves Disappeared - Hard&quot;,&quot;public_title&quot;:&quot;Hard&quot;,&quot;options&quot;:[&quot;Hard&quot;],&quot;price&quot;:1599,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:14458162610228,&quot;title&quot;:&quot;Soft&quot;,&quot;option1&quot;:&quot;Soft&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;456&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;When the Doves Disappeared - Soft&quot;,&quot;public_title&quot;:&quot;Soft&quot;,&quot;options&quot;:[&quot;Soft&quot;],&quot;price&quot;:1099,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:14458162642996,&quot;title&quot;:&quot;Audio&quot;,&quot;option1&quot;:&quot;Audio&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;789&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;When the Doves Disappeared - Audio&quot;,&quot;public_title&quot;:&quot;Audio&quot;,&quot;options&quot;:[&quot;Audio&quot;],&quot;price&quot;:999,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}}],&quot;images&quot;:[&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/5-700x700_ae8ec292-730f-4ff8-8ce5-62500d4bac56.jpg?v=1552407177&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/6-700x700_756f493d-b85a-4de5-b8e7-d9fe15af9ea7.jpg?v=1552407177&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/15-700x700_6c52bb64-52c7-4410-95a6-e78f5ee77dfa.jpg?v=1552407177&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/11-700x700_54d7ada3-af38-4fa1-a036-326fbe8b2ef1.jpg?v=1552407177&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/2-700x700_7abf57b8-4896-4428-8962-9a2216017ee9.jpg?v=1552407177&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/1-700x700_11c280c6-2785-4668-a272-7cbe4db43578.jpg?v=1552407177&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/9-700x700_b6d00d7e-3a8f-412e-bcea-2dc50e0ebca7.jpg?v=1552407177&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/14-700x700_26c1ddc4-9600-4597-8c63-b46984d055f4.jpg?v=1552407177&quot;],&quot;featured_image&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/5-700x700_ae8ec292-730f-4ff8-8ce5-62500d4bac56.jpg?v=1552407177&quot;,&quot;options&quot;:[&quot;Copy&quot;],&quot;media&quot;:[{&quot;alt&quot;:null,&quot;id&quot;:1547368300596,&quot;position&quot;:1,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/5-700x700_ae8ec292-730f-4ff8-8ce5-62500d4bac56.jpg?v=1552407177&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/5-700x700_ae8ec292-730f-4ff8-8ce5-62500d4bac56.jpg?v=1552407177&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547368333364,&quot;position&quot;:2,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/6-700x700_756f493d-b85a-4de5-b8e7-d9fe15af9ea7.jpg?v=1552407177&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/6-700x700_756f493d-b85a-4de5-b8e7-d9fe15af9ea7.jpg?v=1552407177&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547368169524,&quot;position&quot;:3,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/15-700x700_6c52bb64-52c7-4410-95a6-e78f5ee77dfa.jpg?v=1552407177&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/15-700x700_6c52bb64-52c7-4410-95a6-e78f5ee77dfa.jpg?v=1552407177&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547368202292,&quot;position&quot;:4,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/11-700x700_54d7ada3-af38-4fa1-a036-326fbe8b2ef1.jpg?v=1552407177&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/11-700x700_54d7ada3-af38-4fa1-a036-326fbe8b2ef1.jpg?v=1552407177&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547368235060,&quot;position&quot;:5,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/2-700x700_7abf57b8-4896-4428-8962-9a2216017ee9.jpg?v=1552407177&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/2-700x700_7abf57b8-4896-4428-8962-9a2216017ee9.jpg?v=1552407177&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547368267828,&quot;position&quot;:6,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/1-700x700_11c280c6-2785-4668-a272-7cbe4db43578.jpg?v=1552407177&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/1-700x700_11c280c6-2785-4668-a272-7cbe4db43578.jpg?v=1552407177&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547368366132,&quot;position&quot;:7,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/9-700x700_b6d00d7e-3a8f-412e-bcea-2dc50e0ebca7.jpg?v=1552407177&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/9-700x700_b6d00d7e-3a8f-412e-bcea-2dc50e0ebca7.jpg?v=1552407177&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547368398900,&quot;position&quot;:8,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/14-700x700_26c1ddc4-9600-4597-8c63-b46984d055f4.jpg?v=1552407177&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/14-700x700_26c1ddc4-9600-4597-8c63-b46984d055f4.jpg?v=1552407177&quot;,&quot;width&quot;:700}],&quot;content&quot;:&quot;\u003cp\u003eLanded gentry cesar romero by jingo. Nostrilis tickler albert einstein, super mario id educated cesar romero tip top old bean landed gentry don’t panic by jingo. Nostrilis tickler albert einstein dali, albert einstein tip top old bean tom selleck Nostrilis tickler id by jingo. don’t panic prostate cancer Sergeant major dali landed gentry hair trimmer cesar romero super mario educated?\u003c\/p\u003e\n\u003cp\u003eSuper mario top gun freestyle, freestyle che guevara jolly good show bogie basket super mario top gun face mop, Droopy top gun che guevara Fallen eyebrow jolly good show freestyle testosterone trophy Sergeant major face mop bogie basket dickie davies elit super mario.\u003c\/p\u003e\n\u003cp\u003eMovember Nostrilis tickler magnum pi louis xiii professor plum graeme souness sweat irrigator,, ding-dong louis xiii socially mobile louis xiii movember graeme souness magnum pi sweat irrigator, Nostrilis tickler professor plum theodore roosevelt andrew weatherall. Circus strongman mark lawrenson admiral, dick dastardly admiral circus strongman stiff upper lip fu manchu hairy kiss. Nostrilis tickler mark lawrenson, circus strongman admiral Nostrilis tickler saddam hussein mark lawrenson sweat irrigator, cigars hairy kiss. stiff upper lip burt reynolds fu manchu dick dastardly.\u003c\/p\u003e\n\u003cp\u003e[deal]2020-01-01[\/deal]\u003c\/p\u003e&quot;}'
                                                                                                data-original-title="Quick View">
                                                                                                <span>Quick View</span>
                                                                                            </button>

                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- image -->
                                                                                    <div class="caption">
                                                                                        <div class="inner  swtch">

                                                                                            <div class="ratings">
                                                                                                <div class="rating-box">

                                                                                                    <span
                                                                                                        class="shopify-product-reviews-badge"
                                                                                                        data-id="1613101662260"></span>

                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="price-box">

                                                                                                <p
                                                                                                    class="special-price">
                                                                                                    <span
                                                                                                        class="price"><span
                                                                                                            class=money>$15.99</span></span>
                                                                                                </p>
                                                                                                <p class="old-price">
                                                                                                    <span
                                                                                                        class="price"><span
                                                                                                            class=money>$19.99</span></span>
                                                                                                </p>

                                                                                            </div>
                                                                                            <!-- price-container -->






                                                                                            <div
                                                                                                class="label-product label_sale">
                                                                                                <span>-50%</span>
                                                                                            </div>





                                                                                            <div class="box-countdown">
                                                                                                <div class="inner">
                                                                                                    <p
                                                                                                        class="text-hurryup">
                                                                                                        Ends in:</p>
                                                                                                    <div id="Countdown1613101662260-1552563746975"
                                                                                                        class="box-timer cc ">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <script
                                                                                                type="text/javascript">
                                                                                            $(function() {
                                                                                                $('#Countdown1613101662260-1552563746975')
                                                                                                    .countdown({
                                                                                                        until: new Date(
                                                                                                            '2020-01-01'
                                                                                                        ),
                                                                                                        labels: [
                                                                                                            'years',
                                                                                                            'months ',
                                                                                                            'weeks',
                                                                                                            'days',
                                                                                                            'hours',
                                                                                                            'mins',
                                                                                                            'secs'
                                                                                                        ],
                                                                                                        labels1: [
                                                                                                            'years',
                                                                                                            'months ',
                                                                                                            'weeks',
                                                                                                            'days',
                                                                                                            'hours',
                                                                                                            'mins',
                                                                                                            'secs'
                                                                                                        ],
                                                                                                    });
                                                                                            });
                                                                                            </script>


                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- caption -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- product-thumb -->
                                                                </div>
                                                                <!-- product-layout -->
                                                            </div>


                                                            <div class="row_items odd">










                                                                <div class="product-layout grid-style  ">
                                                                    <div class="product-thumb transition">
                                                                        <div class="item">
                                                                            <div class="item-inner">
                                                                                <div class="caption-top">

                                                                                    <p class="manufacture-product">
                                                                                        <a href="collections/vendors@q=Amazona.php"
                                                                                            title="Amazona">Amazona</a>
                                                                                    </p>

                                                                                    <h4 class="product-name">
                                                                                        <a
                                                                                            href="collections/vendors/products/copy-of-a-million-little-pieces.php">
                                                                                            Pieces of Light by
                                                                                            Fernyhough
                                                                                        </a>
                                                                                    </h4>
                                                                                </div>
                                                                                <div class="box-border">
                                                                                    <div class="image images-container">

                                                                                        <a href="collections/vendors/products/copy-of-a-million-little-pieces.php"
                                                                                            class="product-image">
                                                                                            <img class="img-responsive has-rotator img-default-image img-cate-1613135773748-1552563746975"
                                                                                                src="images/products/3-700x700_cf5377d4-6cac-4e0e-9eb4-3a70409fb473_600x600.jpg@v=1552408053"
                                                                                                alt="Pieces of Light by Fernyhough">




                                                                                            <input type="hidden"
                                                                                                value="//smartbook-theme.myshopify.com/images/products/3-700x700_cf5377d4-6cac-4e0e-9eb4-3a70409fb473_600x600.jpg?v=1552408053"
                                                                                                class="img-default-1613135773748-1552563746975" />













                                                                                        </a>
















                                                                                        <div class="box-label"></div>
                                                                                        <div class="action-links">
                                                                                            <button
                                                                                                class="button btn-cart "
                                                                                                type="button"
                                                                                                data-toggle="tooltip"
                                                                                                data-loading-text="Loading..."
                                                                                                title="Add to Cart"
                                                                                                onclick="cart.add('14458380582964');">
                                                                                                <span>Add to Cart</span>
                                                                                            </button>


                                                                                            <button
                                                                                                class="btn-wishlist button btn-default wishlist-btn"
                                                                                                data-product-handle="copy-of-a-million-little-pieces"
                                                                                                type="button"
                                                                                                data-toggle="tooltip"
                                                                                                title="Add to Wish List"
                                                                                                data-original-title="Add to Wish List">
                                                                                                <span>Add to Wish
                                                                                                    List</span>
                                                                                            </button>


                                                                                            <button
                                                                                                class="button btn-compare"
                                                                                                type="button"
                                                                                                data-toggle="tooltip"
                                                                                                title="View Details"
                                                                                                onclick="location.href='pages/singleProductPage.php/copy-of-a-million-little-pieces';">
                                                                                                <span>View
                                                                                                    Details</span>
                                                                                            </button>

                                                                                            <button
                                                                                                class="button btn-quickview quickview"
                                                                                                type="button"
                                                                                                title="Quick View"
                                                                                                data-toggle="modal"
                                                                                                data-target="#productModal"
                                                                                                data-productinfo='{&quot;id&quot;:1613135773748,&quot;title&quot;:&quot;Pieces of Light by Fernyhough&quot;,&quot;handle&quot;:&quot;copy-of-a-million-little-pieces&quot;,&quot;description&quot;:&quot;\u003cp\u003eSuper mario top gun freestyle, freestyle che guevara jolly good show bogie basket super mario top gun face mop, Droopy top gun che guevara Fallen eyebrow jolly good show freestyle testosterone trophy Sergeant major face mop bogie basket dickie davies elit super mario.\u003c\/p\u003e\n\u003cp\u003eLanded gentry cesar romero by jingo. Nostrilis tickler albert einstein, super mario id educated cesar romero tip top old bean landed gentry don’t panic by jingo. Nostrilis tickler albert einstein dali, albert einstein tip top old bean tom selleck Nostrilis tickler id by jingo. don’t panic prostate cancer Sergeant major dali landed gentry hair trimmer cesar romero super mario educated?\u003c\/p\u003e\n\u003cp\u003eMovember Nostrilis tickler magnum pi louis xiii professor plum graeme souness sweat irrigator,, ding-dong louis xiii socially mobile louis xiii movember graeme souness magnum pi sweat irrigator, Nostrilis tickler professor plum theodore roosevelt andrew weatherall. Circus strongman mark lawrenson admiral, dick dastardly admiral circus strongman stiff upper lip fu manchu hairy kiss. Nostrilis tickler mark lawrenson, circus strongman admiral Nostrilis tickler saddam hussein mark lawrenson sweat irrigator, cigars hairy kiss. stiff upper lip burt reynolds fu manchu dick dastardly.\u003c\/p\u003e\n\u003cp\u003e[deal]2019-10-10[\/deal]\u003c\/p\u003e\n\u003cp\u003e[video]https:\/\/www.youtube.com\/watch?v=SKVcQnyEIT8[\/video]\u003c\/p\u003e&quot;,&quot;published_at&quot;:&quot;2019-03-12T11:53:01-04:00&quot;,&quot;created_at&quot;:&quot;2019-03-12T12:27:02-04:00&quot;,&quot;vendor&quot;:&quot;Amazona&quot;,&quot;type&quot;:&quot;book&quot;,&quot;tags&quot;:[&quot;book&quot;,&quot;copy_audio&quot;,&quot;copy_hard&quot;,&quot;copy_soft&quot;,&quot;type_new&quot;,&quot;type_used&quot;],&quot;price&quot;:999,&quot;price_min&quot;:999,&quot;price_max&quot;:1799,&quot;available&quot;:true,&quot;price_varies&quot;:true,&quot;compare_at_price&quot;:1999,&quot;compare_at_price_min&quot;:1999,&quot;compare_at_price_max&quot;:1999,&quot;compare_at_price_varies&quot;:false,&quot;variants&quot;:[{&quot;id&quot;:14458380582964,&quot;title&quot;:&quot;Hard&quot;,&quot;option1&quot;:&quot;Hard&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;123&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;Pieces of Light by Fernyhough - Hard&quot;,&quot;public_title&quot;:&quot;Hard&quot;,&quot;options&quot;:[&quot;Hard&quot;],&quot;price&quot;:1799,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:14458380615732,&quot;title&quot;:&quot;Soft&quot;,&quot;option1&quot;:&quot;Soft&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;456&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;Pieces of Light by Fernyhough - Soft&quot;,&quot;public_title&quot;:&quot;Soft&quot;,&quot;options&quot;:[&quot;Soft&quot;],&quot;price&quot;:1099,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:14458380648500,&quot;title&quot;:&quot;Audio&quot;,&quot;option1&quot;:&quot;Audio&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;789&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;Pieces of Light by Fernyhough - Audio&quot;,&quot;public_title&quot;:&quot;Audio&quot;,&quot;options&quot;:[&quot;Audio&quot;],&quot;price&quot;:999,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}}],&quot;images&quot;:[&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/3-700x700_cf5377d4-6cac-4e0e-9eb4-3a70409fb473.jpg?v=1552408053&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/4-700x700_9323d067-d151-4234-9fa6-378abe40d8fc.jpg?v=1552408053&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/7-700x700_b3bf4550-494a-40b9-9999-4780d9e73d4b.jpg?v=1552408053&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/8-700x700_b78aeeff-3cc6-43b5-a26c-0fb1992f140c.jpg?v=1552408053&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/13-700x700_70263c82-b552-4ab9-a5e1-99478831418e.jpg?v=1552408053&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/16-700x700_fb9877d0-7335-4c1f-9e74-ae327271a09c.jpg?v=1552408053&quot;],&quot;featured_image&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/3-700x700_cf5377d4-6cac-4e0e-9eb4-3a70409fb473.jpg?v=1552408053&quot;,&quot;options&quot;:[&quot;Copy&quot;],&quot;media&quot;:[{&quot;alt&quot;:null,&quot;id&quot;:1547382259764,&quot;position&quot;:1,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/3-700x700_cf5377d4-6cac-4e0e-9eb4-3a70409fb473.jpg?v=1552408053&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/3-700x700_cf5377d4-6cac-4e0e-9eb4-3a70409fb473.jpg?v=1552408053&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547382226996,&quot;position&quot;:2,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/4-700x700_9323d067-d151-4234-9fa6-378abe40d8fc.jpg?v=1552408053&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/4-700x700_9323d067-d151-4234-9fa6-378abe40d8fc.jpg?v=1552408053&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547382292532,&quot;position&quot;:3,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/7-700x700_b3bf4550-494a-40b9-9999-4780d9e73d4b.jpg?v=1552408053&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/7-700x700_b3bf4550-494a-40b9-9999-4780d9e73d4b.jpg?v=1552408053&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547382456372,&quot;position&quot;:4,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/8-700x700_b78aeeff-3cc6-43b5-a26c-0fb1992f140c.jpg?v=1552408053&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/8-700x700_b78aeeff-3cc6-43b5-a26c-0fb1992f140c.jpg?v=1552408053&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547382489140,&quot;position&quot;:5,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/13-700x700_70263c82-b552-4ab9-a5e1-99478831418e.jpg?v=1552408053&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/13-700x700_70263c82-b552-4ab9-a5e1-99478831418e.jpg?v=1552408053&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547382521908,&quot;position&quot;:6,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/16-700x700_fb9877d0-7335-4c1f-9e74-ae327271a09c.jpg?v=1552408053&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/16-700x700_fb9877d0-7335-4c1f-9e74-ae327271a09c.jpg?v=1552408053&quot;,&quot;width&quot;:700}],&quot;content&quot;:&quot;\u003cp\u003eSuper mario top gun freestyle, freestyle che guevara jolly good show bogie basket super mario top gun face mop, Droopy top gun che guevara Fallen eyebrow jolly good show freestyle testosterone trophy Sergeant major face mop bogie basket dickie davies elit super mario.\u003c\/p\u003e\n\u003cp\u003eLanded gentry cesar romero by jingo. Nostrilis tickler albert einstein, super mario id educated cesar romero tip top old bean landed gentry don’t panic by jingo. Nostrilis tickler albert einstein dali, albert einstein tip top old bean tom selleck Nostrilis tickler id by jingo. don’t panic prostate cancer Sergeant major dali landed gentry hair trimmer cesar romero super mario educated?\u003c\/p\u003e\n\u003cp\u003eMovember Nostrilis tickler magnum pi louis xiii professor plum graeme souness sweat irrigator,, ding-dong louis xiii socially mobile louis xiii movember graeme souness magnum pi sweat irrigator, Nostrilis tickler professor plum theodore roosevelt andrew weatherall. Circus strongman mark lawrenson admiral, dick dastardly admiral circus strongman stiff upper lip fu manchu hairy kiss. Nostrilis tickler mark lawrenson, circus strongman admiral Nostrilis tickler saddam hussein mark lawrenson sweat irrigator, cigars hairy kiss. stiff upper lip burt reynolds fu manchu dick dastardly.\u003c\/p\u003e\n\u003cp\u003e[deal]2019-10-10[\/deal]\u003c\/p\u003e\n\u003cp\u003e[video]https:\/\/www.youtube.com\/watch?v=SKVcQnyEIT8[\/video]\u003c\/p\u003e&quot;}'
                                                                                                data-original-title="Quick View">
                                                                                                <span>Quick View</span>
                                                                                            </button>

                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- image -->
                                                                                    <div class="caption">
                                                                                        <div class="inner  swtch">

                                                                                            <div class="ratings">
                                                                                                <div class="rating-box">

                                                                                                    <span
                                                                                                        class="shopify-product-reviews-badge"
                                                                                                        data-id="1613135773748"></span>

                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="price-box">

                                                                                                <p
                                                                                                    class="special-price">
                                                                                                    <span
                                                                                                        class="price"><span
                                                                                                            class=money>$17.99</span></span>
                                                                                                </p>
                                                                                                <p class="old-price">
                                                                                                    <span
                                                                                                        class="price"><span
                                                                                                            class=money>$19.99</span></span>
                                                                                                </p>

                                                                                            </div>
                                                                                            <!-- price-container -->






                                                                                            <div
                                                                                                class="label-product label_sale">
                                                                                                <span>-50%</span>
                                                                                            </div>





                                                                                            <div class="box-countdown">
                                                                                                <div class="inner">
                                                                                                    <p
                                                                                                        class="text-hurryup">
                                                                                                        Ends in:</p>
                                                                                                    <div id="Countdown1613135773748-1552563746975"
                                                                                                        class="box-timer cc ">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <script
                                                                                                type="text/javascript">
                                                                                            $(function() {
                                                                                                $('#Countdown1613135773748-1552563746975')
                                                                                                    .countdown({
                                                                                                        until: new Date(
                                                                                                            '2019-10-10'
                                                                                                        ),
                                                                                                        labels: [
                                                                                                            'years',
                                                                                                            'months ',
                                                                                                            'weeks',
                                                                                                            'days',
                                                                                                            'hours',
                                                                                                            'mins',
                                                                                                            'secs'
                                                                                                        ],
                                                                                                        labels1: [
                                                                                                            'years',
                                                                                                            'months ',
                                                                                                            'weeks',
                                                                                                            'days',
                                                                                                            'hours',
                                                                                                            'mins',
                                                                                                            'secs'
                                                                                                        ],
                                                                                                    });
                                                                                            });
                                                                                            </script>


                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- caption -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- product-thumb -->
                                                                </div>
                                                                <!-- product-layout -->
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <script>
                                        var product_owlCarousel = $("#product_module1552563746975 .tt-product");
                                        product_owlCarousel.owlCarousel({
                                            loop: false,
                                            margin: 0,
                                            nav: false,
                                            dots: true,
                                            autoplay: false,
                                            autoplayTimeout: 1000,
                                            autoplayHoverPause: true,
                                            autoplaySpeed: 1000,
                                            navSpeed: 1000,
                                            dotsSpeed: 1000,
                                            lazyLoad: true,
                                            responsive: {
                                                0: {
                                                    items: 1,
                                                    nav: false
                                                },
                                                480: {
                                                    items: 2,
                                                    nav: false
                                                },
                                                768: {
                                                    items: 3
                                                },
                                                992: {
                                                    items: 4
                                                },
                                                1200: {
                                                    items: 5
                                                },
                                                1600: {
                                                    items: 5
                                                }
                                            },
                                            onInitialized: function() {

                                                var i = 0;
                                                $('.owl-dots > .owl-dot').each(function() {
                                                    $(this).addClass('clk-' + i);
                                                    i++;
                                                });
                                                var count = $(
                                                        "#product_module1552563746975 .owl-item.active")
                                                    .length;
                                                if (count == 1) {
                                                    $("#product_module1552563746975 .owl-item").removeClass(
                                                        'first');
                                                    $("#product_module1552563746975 .owl-item.active")
                                                        .addClass('first');
                                                } else {
                                                    $("#product_module1552563746975 .owl-item").removeClass(
                                                        'first');
                                                    $("#product_module1552563746975 .owl-item.active:first")
                                                        .addClass('first');
                                                }
                                            },
                                            onTranslated: function() {
                                                var count = $(
                                                        "#product_module1552563746975 .owl-item.active")
                                                    .length;
                                                if (count == 1) {
                                                    $("#product_module1552563746975 .owl-item").removeClass(
                                                        'first');
                                                    $("#product_module1552563746975 .owl-item.active")
                                                        .addClass('first');
                                                } else {
                                                    $("#product_module1552563746975 .owl-item").removeClass(
                                                        'first');
                                                    $("#product_module1552563746975 .owl-item.active:first")
                                                        .addClass('first');
                                                }

                                            }
                                        });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div id="shopify-section-1552581993254" class="shopify-section index-section">
                <div class="main-row  bestseller-full  "
                    style="background-image: url('cdn/shop/files/bkg_module.jpg@v=1613707747');"
                    data-section-id="1552581993254">
                    <div class="container">
                        <div class="row">
                            <div class="main-col col-sm-12 col-md-12">
                                <div class="row sub-row">
                                    <div class="sub-col col-sm-12 col-md-12">

                                        <div class="tt_product_module module-image list-module  multi-rows "
                                            id="product_module1552581993254">
                                            <div class="module-title">

                                                <h2>BEST SELLER BOOKS</h2>

                                            </div>
                                            <div class="box-style">

                                                <div class="col-image">
                                                    <div class="banner-static">
                                                        <div class="image">

                                                            <a>

                                                                <img src="images/authors/<?php echo DatabaseManager::select("authors", "image_name", "sales_count=(select max(sales_count) from authors) and total_sales=(select max(total_sales) from authors) and registration_date=(SELECT min(registration_date) from authors)")[0]["image_name"]; ?>"
                                                                    alt="" class="" />
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-product">
                                                    <div class="owl-container">
                                                        <div class="tt-product owl-carousel owl-theme ">
                                                            <!-- wking -->
                                                            <?php //echo DatabaseManager::select("authors","image_name","sales_count=(select max(sales_count) from authors) and total_sales=(select max(total_sales) from authors) and registration_date=(SELECT min(registration_date) from authors)")[0]["image_name"]; ?>

                                                            <?php

                                                            $sql = "SELECT categories.name,authors.id as authid, categories.id as cid, books.id as Bid, books.title, books.image_name
                                    FROM authors
                                    INNER JOIN book_details ON authors.id = book_details.author_id
                                    INNER JOIN books ON books.id = book_details.book_id
                                    INNER JOIN categories ON categories.id = books.category_id
                                    WHERE sales_count = (SELECT MAX(sales_count) FROM authors)
                                    AND total_sales = (SELECT MAX(total_sales) FROM authors)
                                    AND registration_date = (SELECT MIN(registration_date) FROM authors)
                                    LIMIT 1";

                                                            $q_ry = DatabaseManager::query($sql);
                                                            $res = mysqli_fetch_assoc($q_ry);
                                                            // print_r($res);
                                                            
                                                            $arru = []; // Initialize the main array
                                                            
                                                            $authid = $res["authid"];
                                                            $catId = $res["cid"];
                                                            $catName = $res["name"];

                                                            $responce = DatabaseManager::query("SELECT books.id as Bid ,books.title,books.image_name,authors.id from books 
                                                                  INNER join book_details on book_details.book_id=books.id 
                                                                  inner join authors on authors.id=book_details.author_id WHERE authors.id=11");

                                                            while ($books = mysqli_fetch_assoc($responce)) {

                                                                $productArray = array(
                                                                    "Title" => $books["title"],
                                                                    "Image" => $books["image_name"],
                                                                    "ID" => $books["Bid"],
                                                                    "catId" => $catId,
                                                                    "catName" => $catName
                                                                );
                                                                array_push($arru, $productArray); // Push the product array into $arru
                                                            

                                                            }



                                                            for ($i = 0; $i < count($arru); $i += (count($arru) < 1) ? 1 : 2) {
                                                                echo "<div class=\"row_items\">";

                                                                $BookTitle = $arru[$i]["Title"];
                                                                $imagename = $arru[$i]["Image"];
                                                                $Bookid = $arru[$i]["ID"];
                                                                $catId = $arru[$i]["catId"];
                                                                $catName = $arru[$i]["catName"];
                                                                $htmlprodSec = '';
                                                                // ob_start();
                                                                ?>
                                                                <div class="product-layout list-style  ">
                                                                    <div class="product-thumb transition">
                                                                        <div class="item">
                                                                            <div class="item-inner">
                                                                                <div class="image images-container">

                                                                                    <a href="pages/products.php?catid=<?php echo $catId ?>"
                                                                                        class="product-image">
                                                                                        <img class="img-responsive has-rotator img-default-image img-cate-1613143277620-1552581993254"
                                                                                            src="images/products/<?php echo $imagename ?>"
                                                                                            alt="<?php echo $BookTitle ?>">




                                                                                        <input type="hidden"
                                                                                            value="//smartbook-theme.myshopify.com/images/products/16-700x700_579706ac-e6c6-4b2f-8510-f56d5f5410ba_600x600.jpg?v=1552408223"
                                                                                            class="img-default-1613143277620-1552581993254" />













                                                                                    </a>
















                                                                                    <div class="box-label"></div>
                                                                                </div>
                                                                                <!-- image -->
                                                                                <div class="caption">
                                                                                    <div class="inner  swtch">

                                                                                        <p class="manufacture-product">
                                                                                            <a href="pages/products.php?catid=<?php echo $catId ?>"
                                                                                                title="Amazona"><?php echo $catName ?></a>
                                                                                        </p>

                                                                                        <h4 class="product-name">
                                                                                            <a
                                                                                                href="pages/singleProductPage.php?productdetails=<?php echo urlencode(json_encode(["imagename" => $imagename, "BookTitle" => $BookTitle, "Bookid" => $Bookid, "catId" => $catId, "catName" => $catName])); //to decode this json use $productdetails = $_GET['productdetails'];then $productData = json_decode(urldecode($productdetails), true); ?>">
                                                                                                <?php echo $BookTitle ?>
                                                                                            </a>
                                                                                        </h4>

                                                                                        <div class="ratings">
                                                                                            <div class="rating-box">

                                                                                                <span
                                                                                                    class="shopify-product-reviews-badge"
                                                                                                    data-id="1613143277620"></span>

                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="price-box">

                                                                                            <?php $price_saleprice = DatabaseManager::select("book_details", "price , sale_price", "Book_id=$Bookid");
                                                                                            foreach ($price_saleprice as $key => $value) {
                                                                                                $price = $value["price"];
                                                                                                $saleprice = $value["sale_price"]; ?>


                                                                                                <?php if ($saleprice !== "0.00" && (int) $price > (int) $saleprice) { ?>
                                                                                                    <p class="special-price">
                                                                                                        <span class="price">
                                                                                                            <span class="money"
                                                                                                                data-currency-usd="$<?php echo $saleprice ?>">
                                                                                                                $<?php echo $saleprice ?>
                                                                                                            </span>
                                                                                                        </span>
                                                                                                    </p>
                                                                                                <?php } ?>
                                                                                                <p class="old-price">
                                                                                                    <span class="price">
                                                                                                        <span class="money"
                                                                                                            data-currency-usd="$<?php echo $price; ?>">
                                                                                                            $<?php echo $price; ?>
                                                                                                        </span>
                                                                                                    </span>
                                                                                                </p>

                                                                                            <?php } ?>

                                                                                        </div>
                                                                                        <!-- price-container -->






                                                                                        <?php foreach ($price_saleprice as $key => $value) {
                                                                                            $price = $value["price"];
                                                                                            $saleprice = $value["sale_price"]; ?>
                                                                                            <?php if ($saleprice !== "0.00" && (int) $price > (int) $saleprice) { ?>
                                                                                                <div
                                                                                                    class="label-product label_sale">
                                                                                                    <span>-<?php echo floor(((((int) $price) - ((int) $saleprice)) / ((int) $price)) * 100) ?>%</span>
                                                                                                </div>
                                                                                            <?php }
                                                                                        } ?>





                                                                                    </div>
                                                                                </div>
                                                                                <!-- caption -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- product-thumb -->
                                                                </div>
                                                                <!-- product-layout -->


                                                                <?php
                                                                if (count($arru) < 1) {
                                                                    break;
                                                                }
                                                                ;

                                                                if ($i + 1 < count($arru)) {
                                                                    $BookTitle = $arru[$i + 1]["Title"];
                                                                    $imagename = $arru[$i + 1]["Image"];
                                                                    $Bookid = $arru[$i + 1]["ID"];
                                                                    $catId = $arru[$i + 1]["catId"];
                                                                    $catName = $arru[$i + 1]["catName"];
                                                                    $htmlprodSec = '';
                                                                    // ob_start();
                                                                    ?>
                                                                    <div class="product-layout list-style  ">
                                                                        <div class="product-thumb transition">
                                                                            <div class="item">
                                                                                <div class="item-inner">
                                                                                    <div class="image images-container">

                                                                                        <a href="collections/vendors/products/copy-of-brothers-beasts-bernheimer.php"
                                                                                            class="product-image">
                                                                                            <img class="img-responsive has-rotator img-default-image img-cate-1613143277620-1552581993254"
                                                                                                src="images/products/<?php echo $imagename ?>"
                                                                                                alt="<?php echo $BookTitle ?>">




                                                                                            <input type="hidden"
                                                                                                value="//smartbook-theme.myshopify.com/images/products/16-700x700_579706ac-e6c6-4b2f-8510-f56d5f5410ba_600x600.jpg?v=1552408223"
                                                                                                class="img-default-1613143277620-1552581993254" />













                                                                                        </a>
















                                                                                        <div class="box-label"></div>
                                                                                    </div>
                                                                                    <!-- image -->
                                                                                    <div class="caption">
                                                                                        <div class="inner  swtch">

                                                                                            <p class="manufacture-product">
                                                                                                <a href="pages/products.php?catid=<?php echo $catId ?>"
                                                                                                    title="Amazona"><?php echo $catName ?></a>
                                                                                            </p>

                                                                                            <h4 class="product-name">
                                                                                                <a
                                                                                                    href="pages/singleProductPage.php?productdetails=<?php echo urlencode(json_encode(["imagename" => $imagename, "BookTitle" => $BookTitle, "Bookid" => $Bookid, "catId" => $catId, "catName" => $catName])); //to decode this json use $productdetails = $_GET['productdetails'];then $productData = json_decode(urldecode($productdetails), true); ?>">
                                                                                                    <?php echo $BookTitle ?>
                                                                                                </a>
                                                                                            </h4>

                                                                                            <div class="ratings">
                                                                                                <div class="rating-box">

                                                                                                    <span
                                                                                                        class="shopify-product-reviews-badge"
                                                                                                        data-id="1613143277620"></span>

                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="price-box">

                                                                                                <?php $price_saleprice = DatabaseManager::select("book_details", "price , sale_price", "Book_id=$Bookid");
                                                                                                foreach ($price_saleprice as $key => $value) {
                                                                                                    $price = $value["price"];
                                                                                                    $saleprice = $value["sale_price"]; ?>


                                                                                                    <?php if ($saleprice !== "0.00" && (int) $price > (int) $saleprice) { ?>
                                                                                                        <p class="special-price">
                                                                                                            <span class="price">
                                                                                                                <span class="money"
                                                                                                                    data-currency-usd="$<?php echo $saleprice ?>">
                                                                                                                    $<?php echo $saleprice ?>
                                                                                                                </span>
                                                                                                            </span>
                                                                                                        </p>
                                                                                                    <?php } ?>
                                                                                                    <p class="old-price">
                                                                                                        <span class="price">
                                                                                                            <span class="money"
                                                                                                                data-currency-usd="$<?php echo $price; ?>">
                                                                                                                $<?php echo $price; ?>
                                                                                                            </span>
                                                                                                        </span>
                                                                                                    </p>

                                                                                                <?php } ?>

                                                                                            </div>
                                                                                            <!-- price-container -->






                                                                                            <?php foreach ($price_saleprice as $key => $value) {
                                                                                                $price = $value["price"];
                                                                                                $saleprice = $value["sale_price"]; ?>
                                                                                                <?php if ($saleprice !== "0.00" && (int) $price > (int) $saleprice) { ?>
                                                                                                    <div
                                                                                                        class="label-product label_sale">
                                                                                                        <span>-<?php echo floor(((((int) $price) - ((int) $saleprice)) / ((int) $price)) * 100) ?>%</span>
                                                                                                    </div>
                                                                                                <?php }
                                                                                            } ?>





                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- caption -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- product-thumb -->
                                                                    </div>


                                                                    <?php

                                                                }
                                                                echo "</div>";
                                                            }
                                                            ?>




                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <script>
                                        var product_owlCarousel = $("#product_module1552581993254 .tt-product");
                                        product_owlCarousel.owlCarousel({
                                            loop: false,
                                            margin: 0,
                                            nav: false,
                                            dots: true,
                                            autoplay: false,
                                            autoplayTimeout: 1000,
                                            autoplayHoverPause: true,
                                            autoplaySpeed: 1000,
                                            navSpeed: 1000,
                                            dotsSpeed: 1000,
                                            lazyLoad: true,
                                            responsive: {
                                                0: {
                                                    items: 1,
                                                    nav: true
                                                },
                                                480: {
                                                    items: 2,
                                                    nav: true
                                                },
                                                768: {
                                                    items: 2
                                                },
                                                992: {
                                                    items: 1
                                                },
                                                1200: {
                                                    items: 2
                                                },
                                                1600: {
                                                    items: 2
                                                }
                                            },
                                            onInitialized: function() {
                                                var i = 0;
                                                $('.owl-dots > .owl-dot').each(function() {
                                                    $(this).addClass('clk-' + i);
                                                    i++;
                                                });
                                                var count = $(
                                                        "#product_module1552581993254 .owl-item.active")
                                                    .length;
                                                if (count == 1) {
                                                    $("#product_module1552581993254 .owl-item").removeClass(
                                                        'first');
                                                    $("#product_module1552581993254 .owl-item.active")
                                                        .addClass('first');
                                                } else {
                                                    $("#product_module1552581993254 .owl-item").removeClass(
                                                        'first');
                                                    $("#product_module1552581993254 .owl-item.active:first")
                                                        .addClass('first');
                                                }
                                            },
                                            onTranslated: function() {
                                                var count = $(
                                                        "#product_module1552581993254 .owl-item.active")
                                                    .length;
                                                if (count == 1) {
                                                    $("#product_module1552581993254 .owl-item").removeClass(
                                                        'first');
                                                    $("#product_module1552581993254 .owl-item.active")
                                                        .addClass('first');
                                                } else {
                                                    $("#product_module1552581993254 .owl-item").removeClass(
                                                        'first');
                                                    $("#product_module1552581993254469 .owl-item.active:first")
                                                        .addClass('first');
                                                }
                                            }
                                        });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>






            <?php include "inc/extras/index/content.php"; ?>








            <!-- END content_for_index -->

        </div>





        <?php include "inc/QuickviewProduct.php"; ?>
        <?php include "inc/footer.php"; ?>
        <?php include "inc/extras/index/newsletterpopup.php"; ?>
        <?php //include "inc/extras/index/scripts.php"; ?>
        <?php include "inc/custom_card_JQ.php" ?>

    </div>
</body>

</html>