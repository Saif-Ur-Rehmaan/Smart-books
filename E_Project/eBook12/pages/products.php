<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="en">
<!--<![endif]-->

<head>

    <?php include "../inc/config.php"; ?>
    <?php include "../inc/heads/productHead.php" ?>
</head>

<body class="
               product-category
                home1">
    <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
    <div class="wrapper">
        <div id="shopify-section-header" class="shopify-section">
            <!--Start of Header Area-->
            <?php include "../inc/nav.php"; ?>
            <?php include "../inc/header.php"; ?>

            <!--End of Header Area-->
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

        <div id="shopify-section-collection-page" class="shopify-section">
            <div id="product-category" class="container layer-category">
                <div class="layered-navigation-block"></div>





                <!-- Breadcumb area start -->
                <ul class="breadcrumb">
                    <li><a href="../index.php@preview_theme_id=.php" title="Back to the frontpage">
                            Home
                        </a>
                    </li>

                    <li>


                        <a href="index.php@preview_theme_id=74460266548.php"><span>
                                Products

                            </span></a>

                    </li>

                </ul>
                <!--End Breadcumb area -->


                <div class="row">
                    <div class="col-order">

                        <div class="sidebar-overlay"></div>
                        <div class="oc-menu" id="sidebar-toggle">
                            <input type="hidden" id="menu-effect-collection-page" class="menu-effect" value="none" />
                            <div class="oc-menu-bar visible-sm visible-xs">
                                <div class="left"><i class="lnr lnr-text-align-left"></i> <span>View Sidebar
                                        Filters</span></div>
                            </div>
                        </div>
                        <aside id="column-left" class="col-md-3">
                            <div class="col-order-inner">
                                <div class="layernavigation-module">
                                    <div class="panel panel-default">
                                        <div class="panel-heading layered-heading">
                                            Shop By
                                        </div>

                                        <div class="layered">
                                            <div class="list-group">
                                                <div
                                                    class="filter-attribute-container filter-attribute-remove-container">
                                                </div>

                                                <div class="filter-attribute-container">
                                                    <label>Filters</label>
                                                    <div class="list-group-item">
                                                        <div id="filter-group0">


                                                            <a class="a-filter add-filter "
                                                                style="color: <?php echo (!isset($_GET["type"])) ? "#62ab00" : ""; ?>;"
                                                                href="products.php">All (
                                                                <?php echo DatabaseManager::select("books", "count(id) as cfp")[0]["cfp"] ?>
                                                                items)</a>
                                                            <a class="a-filter add-filter "
                                                                style="color: <?php echo (isset($_GET["type"])) ? (($_GET['type'] == "Featured Products") ? "#62ab00" : "") : ""; ?>;"
                                                                href="products.php?type=Featured Products">Featured
                                                                Products (
                                                                <?php echo DatabaseManager::select("books", "count(id) as cfp", "category_id=1")[0]["cfp"] ?>
                                                                items)</a>





                                                            <a class="a-filter add-filter "
                                                                style="color: <?php echo (isset($_GET["type"])) ? (($_GET['type'] == "Most Viewed") ? "#62ab00" : "") : ""; ?>;"
                                                                href="products.php?type=Most Viewed">Most Viewed
                                                                (<?php echo DatabaseManager::select("books", "count(views) as cfp", "views>100")[0]["cfp"] ?>
                                                                items)</a>



                                                            <a class="a-filter add-filter "
                                                                href="products.php?type=New Arrivals"
                                                                style="color: <?php echo (isset($_GET["type"])) ? (($_GET['type'] == "New Arrivals") ? "#62ab00" : "") : ""; ?>;">New
                                                                Arrivals
                                                                (<?php echo DatabaseManager::select("categories RIGHT JOIN books ON categories.id = books.category_id", "count(books.id) as cfp", "date_added >= DATE_SUB(NOW(), INTERVAL 30 DAY)")[0]["cfp"] ?>
                                                                items)</a>



                                                            <a class="a-filter add-filter "
                                                                href="products.php?type=Special offer"
                                                                style="color: <?php echo (isset($_GET["type"])) ? (($_GET['type'] == "Special offer") ? "#62ab00" : "") : ""; ?>;">
                                                                Special offer
                                                                (<?php echo DatabaseManager::select("book_details", "count(id) as cfp", "sale_price>(0.5*price)")[0]["cfp"] ?>
                                                                items)</a>


                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- add the vendor as product tag to product then use this code in collection.liquid -->
                                                <!-- if we are on a collection page that is either custom or smart -->


                                                <div class="filter-attribute-container">
                                                    <label>Categories</label>
                                                    <div class="list-group-item">
                                                        <div id="filter-group0">

                                                            <?php

                                                                foreach (DatabaseManager::select("categories", "id , name") as $key => $value) {
                                                                    $catid = $value["id"];
                                                                    $catname = $value["name"];

                                                                    echo "<a style=\"color:" .
                                                                        (@($_GET['catid'] == "$catid") ? "#62ab00" : "")
                                                                        . "\" href=\"products.php?type=category&catid=$catid\" 
                                                                    title=\"$catname\">$catname ( " .
                                                                        DatabaseManager::select("books", "count(id) as cfp", "category_id=$catid")[0]["cfp"]

                                                                        . " items )</a>";
                                                                }
                                                                ?>


                                                        </div>
                                                    </div>
                                                </div>












                                                



                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                $(".filter-attribute-container").find("a").addClass(
                                    "advanced-filter a-filter add-filter");
                                $("#adil").find("a").addClass("active-filter a-filter add-filter");
                                </script>

                                <div class="tt_product_module multi-rows list-module3"
                                    id="product_modulecollection-page">
                                    <div class="module-title">
                                        <h2>New Products</h2>
                                    </div>
                                    <div class="owl-container">
                                        <div class="tt-product  owl-carousel owl-theme ">
                                            <div class="row_items odd">












                                                <div class="product-layout list-style">
                                                    <div class="product-thumb transition">
                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="image images-container">
                                                                    <a href="../special-offer/products/copy-of-coyoto-tales-thomas-king.php"
                                                                        class="product-image">
                                                                        <img class="img-responsive img-default-image img-cate-1613151338548-collection-page"
                                                                            src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/8-700x700_63654d3a-5549-4e8d-b9c5-234e2e45d2a8_600x600.jpg@v=1552408391"
                                                                            alt="De Vengeance - J.D Kurtness">
                                                                    </a>
                                                                    <div class="box-label"></div>
                                                                </div>
                                                                <!-- image -->
                                                                <div class="caption">

                                                                    <p class="manufacture-product">
                                                                        <a href="../vendors@q=Amazona.php"
                                                                            title="Amazona">Amazona</a>
                                                                    </p>


                                                                    <div class="ratings">
                                                                        <div class="rating-box">

                                                                            <span class="shopify-product-reviews-badge"
                                                                                data-id="1613151338548"></span>

                                                                        </div>
                                                                    </div>

                                                                    <h4 class="product-name">
                                                                        <a
                                                                            href="products/copy-of-coyoto-tales-thomas-king.php">
                                                                            De Vengeance - J.D Kurtness
                                                                        </a>
                                                                    </h4>
                                                                    <div class="price-box">

                                                                        <p class="special-price"><span
                                                                                class="price"><span
                                                                                    class=money>$9.99</span></span></p>
                                                                        <p class="old-price"><span class="price"><span
                                                                                    class=money>$19.99</span></span></p>

                                                                    </div>
                                                                    <!-- price-container -->
                                                                </div>
                                                            </div>
                                                            <!-- caption -->
                                                        </div>
                                                    </div>
                                                    <!-- product-thumb -->
                                                </div>
                                                <!-- product-layout -->














                                                <div class="product-layout list-style">
                                                    <div class="product-thumb transition">
                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="image images-container">
                                                                    <a href="../special-offer/products/copy-of-fred-the-lonely-monster-anne.php"
                                                                        class="product-image">
                                                                        <img class="img-responsive img-default-image img-cate-1613148291124-collection-page"
                                                                            src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/7-700x700_fbe0ea4b-7436-4710-bb1f-3666a9ef6df8_600x600.jpg@v=1552408335"
                                                                            alt="Coyoto Tales - Thomas King">
                                                                    </a>
                                                                    <div class="box-label"></div>
                                                                </div>
                                                                <!-- image -->
                                                                <div class="caption">

                                                                    <p class="manufacture-product">
                                                                        <a href="../vendors@q=Amazona.php"
                                                                            title="Amazona">Amazona</a>
                                                                    </p>


                                                                    <div class="ratings">
                                                                        <div class="rating-box">

                                                                            <span class="shopify-product-reviews-badge"
                                                                                data-id="1613148291124"></span>

                                                                        </div>
                                                                    </div>

                                                                    <h4 class="product-name">
                                                                        <a
                                                                            href="products/copy-of-fred-the-lonely-monster-anne.php">
                                                                            Coyoto Tales - Thomas King
                                                                        </a>
                                                                    </h4>
                                                                    <div class="price-box">

                                                                        <p class="special-price"><span
                                                                                class="price"><span
                                                                                    class=money>$9.99</span></span></p>
                                                                        <p class="old-price"><span class="price"><span
                                                                                    class=money>$19.99</span></span></p>

                                                                    </div>
                                                                    <!-- price-container -->
                                                                </div>
                                                            </div>
                                                            <!-- caption -->
                                                        </div>
                                                    </div>
                                                    <!-- product-thumb -->
                                                </div>
                                                <!-- product-layout -->














                                                <div class="product-layout list-style">
                                                    <div class="product-thumb transition">
                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="image images-container">
                                                                    <a href="../vendors/products/copy-of-brothers-beasts-bernheimer.php"
                                                                        class="product-image">
                                                                        <img class="img-responsive img-default-image img-cate-1613143277620-collection-page"
                                                                            src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/16-700x700_579706ac-e6c6-4b2f-8510-f56d5f5410ba_600x600.jpg@v=1552408223"
                                                                            alt="Fred the lonely monster - Anne">
                                                                    </a>
                                                                    <div class="box-label"></div>
                                                                </div>
                                                                <!-- image -->
                                                                <div class="caption">

                                                                    <p class="manufacture-product">
                                                                        <a href="../vendors@q=Amazona.php"
                                                                            title="Amazona">Amazona</a>
                                                                    </p>


                                                                    <div class="ratings">
                                                                        <div class="rating-box">

                                                                            <span class="shopify-product-reviews-badge"
                                                                                data-id="1613143277620"></span>

                                                                        </div>
                                                                    </div>

                                                                    <h4 class="product-name">
                                                                        <a
                                                                            href="products/copy-of-brothers-beasts-bernheimer.php">
                                                                            Fred the lonely monster - Anne
                                                                        </a>
                                                                    </h4>
                                                                    <div class="price-box">

                                                                        <p class="special-price"><span
                                                                                class="price"><span
                                                                                    class=money>$9.99</span></span></p>
                                                                        <p class="old-price"><span class="price"><span
                                                                                    class=money>$19.99</span></span></p>

                                                                    </div>
                                                                    <!-- price-container -->
                                                                </div>
                                                            </div>
                                                            <!-- caption -->
                                                        </div>
                                                    </div>
                                                    <!-- product-thumb -->
                                                </div>
                                                <!-- product-layout -->

                                            </div>
                                            <div class="row_items">












                                                <div class="product-layout list-style">
                                                    <div class="product-thumb transition">
                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="image images-container">
                                                                    <a href="../special-offer/products/copy-of-pieces-of-light-fernyhough.php"
                                                                        class="product-image">
                                                                        <img class="img-responsive img-default-image img-cate-1613139345460-collection-page"
                                                                            src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/13-700x700_79425203-3721-4beb-a32d-5b0ce707597e_600x600.jpg@v=1552408122"
                                                                            alt="Brothers &amp; Beasts - Bernheimer">
                                                                    </a>
                                                                    <div class="box-label"></div>
                                                                </div>
                                                                <!-- image -->
                                                                <div class="caption">

                                                                    <p class="manufacture-product">
                                                                        <a href="../vendors@q=Amazona.php"
                                                                            title="Amazona">Amazona</a>
                                                                    </p>


                                                                    <div class="ratings">
                                                                        <div class="rating-box">

                                                                            <span class="shopify-product-reviews-badge"
                                                                                data-id="1613139345460"></span>

                                                                        </div>
                                                                    </div>

                                                                    <h4 class="product-name">
                                                                        <a
                                                                            href="products/copy-of-pieces-of-light-fernyhough.php">
                                                                            Brothers & Beasts - Bernheimer
                                                                        </a>
                                                                    </h4>
                                                                    <div class="price-box">

                                                                        <p class="special-price"><span
                                                                                class="price"><span
                                                                                    class=money>$9.99</span></span></p>
                                                                        <p class="old-price"><span class="price"><span
                                                                                    class=money>$19.99</span></span></p>

                                                                    </div>
                                                                    <!-- price-container -->
                                                                </div>
                                                            </div>
                                                            <!-- caption -->
                                                        </div>
                                                    </div>
                                                    <!-- product-thumb -->
                                                </div>
                                                <!-- product-layout -->














                                                <div class="product-layout list-style">
                                                    <div class="product-thumb transition">
                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="image images-container">
                                                                    <a href="../vendors/products/copy-of-a-million-little-pieces.php"
                                                                        class="product-image">
                                                                        <img class="img-responsive img-default-image img-cate-1613135773748-collection-page"
                                                                            src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/3-700x700_cf5377d4-6cac-4e0e-9eb4-3a70409fb473_600x600.jpg@v=1552408053"
                                                                            alt="Pieces of Light by Fernyhough">
                                                                    </a>
                                                                    <div class="box-label"></div>
                                                                </div>
                                                                <!-- image -->
                                                                <div class="caption">

                                                                    <p class="manufacture-product">
                                                                        <a href="../vendors@q=Amazona.php"
                                                                            title="Amazona">Amazona</a>
                                                                    </p>


                                                                    <div class="ratings">
                                                                        <div class="rating-box">

                                                                            <span class="shopify-product-reviews-badge"
                                                                                data-id="1613135773748"></span>

                                                                        </div>
                                                                    </div>

                                                                    <h4 class="product-name">
                                                                        <a
                                                                            href="products/copy-of-a-million-little-pieces.php">
                                                                            Pieces of Light by Fernyhough
                                                                        </a>
                                                                    </h4>
                                                                    <div class="price-box">

                                                                        <p class="special-price"><span
                                                                                class="price"><span
                                                                                    class=money>$9.99</span></span></p>
                                                                        <p class="old-price"><span class="price"><span
                                                                                    class=money>$19.99</span></span></p>

                                                                    </div>
                                                                    <!-- price-container -->
                                                                </div>
                                                            </div>
                                                            <!-- caption -->
                                                        </div>
                                                    </div>
                                                    <!-- product-thumb -->
                                                </div>
                                                <!-- product-layout -->














                                                <div class="product-layout list-style">
                                                    <div class="product-thumb transition">
                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="image images-container">
                                                                    <a href="../special-offer/products/copy-of-the-dress-and-the-girl.php"
                                                                        class="product-image">
                                                                        <img class="img-responsive img-default-image img-cate-1613133152308-collection-page"
                                                                            src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg@v=1552407966"
                                                                            alt="A million little pieces - James Frey">
                                                                    </a>
                                                                    <div class="box-label"></div>
                                                                </div>
                                                                <!-- image -->
                                                                <div class="caption">

                                                                    <p class="manufacture-product">
                                                                        <a href="../vendors@q=Amazona.php"
                                                                            title="Amazona">Amazona</a>
                                                                    </p>


                                                                    <div class="ratings">
                                                                        <div class="rating-box">

                                                                            <span class="shopify-product-reviews-badge"
                                                                                data-id="1613133152308"></span>

                                                                        </div>
                                                                    </div>

                                                                    <h4 class="product-name">
                                                                        <a
                                                                            href="products/copy-of-the-dress-and-the-girl.php">
                                                                            A million little pieces - James Frey
                                                                        </a>
                                                                    </h4>
                                                                    <div class="price-box">

                                                                        <p class="special-price"><span
                                                                                class="price"><span
                                                                                    class=money>$9.99</span></span></p>
                                                                        <p class="old-price"><span class="price"><span
                                                                                    class=money>$19.99</span></span></p>

                                                                    </div>
                                                                    <!-- price-container -->
                                                                </div>
                                                            </div>
                                                            <!-- caption -->
                                                        </div>
                                                    </div>
                                                    <!-- product-thumb -->
                                                </div>
                                                <!-- product-layout -->

                                            </div>
                                            <div class="row_items">












                                                <div class="product-layout list-style">
                                                    <div class="product-thumb transition">
                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="image images-container">
                                                                    <a href="../special-offer/products/copy-of-dance-of-the-business-mind.php"
                                                                        class="product-image">
                                                                        <img class="img-responsive img-default-image img-cate-1613113425972-collection-page"
                                                                            src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/4-700x700_600x600.jpg@v=1552407897"
                                                                            alt="The Dress and the Girl - Camile">
                                                                    </a>
                                                                    <div class="box-label"></div>
                                                                </div>
                                                                <!-- image -->
                                                                <div class="caption">

                                                                    <p class="manufacture-product">
                                                                        <a href="../vendors@q=Amazona.php"
                                                                            title="Amazona">Amazona</a>
                                                                    </p>


                                                                    <div class="ratings">
                                                                        <div class="rating-box">

                                                                            <span class="shopify-product-reviews-badge"
                                                                                data-id="1613113425972"></span>

                                                                        </div>
                                                                    </div>

                                                                    <h4 class="product-name">
                                                                        <a
                                                                            href="products/copy-of-dance-of-the-business-mind.php">
                                                                            The Dress and the Girl - Camile
                                                                        </a>
                                                                    </h4>
                                                                    <div class="price-box">

                                                                        <p class="special-price"><span
                                                                                class="price"><span
                                                                                    class=money>$9.99</span></span></p>
                                                                        <p class="old-price"><span class="price"><span
                                                                                    class=money>$19.99</span></span></p>

                                                                    </div>
                                                                    <!-- price-container -->
                                                                </div>
                                                            </div>
                                                            <!-- caption -->
                                                        </div>
                                                    </div>
                                                    <!-- product-thumb -->
                                                </div>
                                                <!-- product-layout -->














                                                <div class="product-layout list-style">
                                                    <div class="product-thumb transition">
                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="image images-container">
                                                                    <a href="../vendors/products/copy-of-anthropologie-amerindienne-franz-boas.php"
                                                                        class="product-image">
                                                                        <img class="img-responsive img-default-image img-cate-1613110149172-collection-page"
                                                                            src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/14-700x700_daed651a-c2eb-460b-8fed-262253a5e927_600x600.jpg@v=1552407352"
                                                                            alt="The Dance of the business mind">
                                                                    </a>
                                                                    <div class="box-label"></div>
                                                                </div>
                                                                <!-- image -->
                                                                <div class="caption">

                                                                    <p class="manufacture-product">
                                                                        <a href="../vendors@q=Amazona.php"
                                                                            title="Amazona">Amazona</a>
                                                                    </p>


                                                                    <div class="ratings">
                                                                        <div class="rating-box">

                                                                            <span class="shopify-product-reviews-badge"
                                                                                data-id="1613110149172"></span>

                                                                        </div>
                                                                    </div>

                                                                    <h4 class="product-name">
                                                                        <a
                                                                            href="products/copy-of-anthropologie-amerindienne-franz-boas.php">
                                                                            The Dance of the business mind
                                                                        </a>
                                                                    </h4>
                                                                    <div class="price-box">

                                                                        <p class="special-price"><span
                                                                                class="price"><span
                                                                                    class=money>$9.99</span></span></p>
                                                                        <p class="old-price"><span class="price"><span
                                                                                    class=money>$19.99</span></span></p>

                                                                    </div>
                                                                    <!-- price-container -->
                                                                </div>
                                                            </div>
                                                            <!-- caption -->
                                                        </div>
                                                    </div>
                                                    <!-- product-thumb -->
                                                </div>
                                                <!-- product-layout -->














                                                <div class="product-layout list-style">
                                                    <div class="product-thumb transition">
                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="image images-container">
                                                                    <a href="../special-offer/products/copy-of-when-the-doves-disappeared.php"
                                                                        class="product-image">
                                                                        <img class="img-responsive img-default-image img-cate-1613107134516-collection-page"
                                                                            src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg@v=1552407244"
                                                                            alt="anthrplogie amérndene - franz">
                                                                    </a>
                                                                    <div class="box-label"></div>
                                                                </div>
                                                                <!-- image -->
                                                                <div class="caption">

                                                                    <p class="manufacture-product">
                                                                        <a href="../vendors@q=Amazona.php"
                                                                            title="Amazona">Amazona</a>
                                                                    </p>


                                                                    <div class="ratings">
                                                                        <div class="rating-box">

                                                                            <span class="shopify-product-reviews-badge"
                                                                                data-id="1613107134516"></span>

                                                                        </div>
                                                                    </div>

                                                                    <h4 class="product-name">
                                                                        <a
                                                                            href="products/copy-of-when-the-doves-disappeared.php">
                                                                            anthrplogie amérndene - franz
                                                                        </a>
                                                                    </h4>
                                                                    <div class="price-box">

                                                                        <p class="special-price"><span
                                                                                class="price"><span
                                                                                    class=money>$9.99</span></span></p>
                                                                        <p class="old-price"><span class="price"><span
                                                                                    class=money>$19.99</span></span></p>

                                                                    </div>
                                                                    <!-- price-container -->
                                                                </div>
                                                            </div>
                                                            <!-- caption -->
                                                        </div>
                                                    </div>
                                                    <!-- product-thumb -->
                                                </div>
                                                <!-- product-layout -->

                                            </div>
                                            <div class="row_items">












                                                <div class="product-layout list-style">
                                                    <div class="product-thumb transition">
                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="image images-container">
                                                                    <a href="../vendors/products/copy-of-rising-crow-by-k-l-byles.php"
                                                                        class="product-image">
                                                                        <img class="img-responsive img-default-image img-cate-1613101662260-collection-page"
                                                                            src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/5-700x700_ae8ec292-730f-4ff8-8ce5-62500d4bac56_600x600.jpg@v=1552407177"
                                                                            alt="When the Doves Disappeared">
                                                                    </a>
                                                                    <div class="box-label"></div>
                                                                </div>
                                                                <!-- image -->
                                                                <div class="caption">

                                                                    <p class="manufacture-product">
                                                                        <a href="../vendors@q=Amazona.php"
                                                                            title="Amazona">Amazona</a>
                                                                    </p>


                                                                    <div class="ratings">
                                                                        <div class="rating-box">

                                                                            <span class="shopify-product-reviews-badge"
                                                                                data-id="1613101662260"></span>

                                                                        </div>
                                                                    </div>

                                                                    <h4 class="product-name">
                                                                        <a
                                                                            href="products/copy-of-rising-crow-by-k-l-byles.php">
                                                                            When the Doves Disappeared
                                                                        </a>
                                                                    </h4>
                                                                    <div class="price-box">

                                                                        <p class="special-price"><span
                                                                                class="price"><span
                                                                                    class=money>$9.99</span></span></p>
                                                                        <p class="old-price"><span class="price"><span
                                                                                    class=money>$19.99</span></span></p>

                                                                    </div>
                                                                    <!-- price-container -->
                                                                </div>
                                                            </div>
                                                            <!-- caption -->
                                                        </div>
                                                    </div>
                                                    <!-- product-thumb -->
                                                </div>
                                                <!-- product-layout -->














                                                <div class="product-layout list-style">
                                                    <div class="product-thumb transition">
                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="image images-container">
                                                                    <a href="../special-offer/products/copy-of-green-by-sam-graham-felsen.php"
                                                                        class="product-image">
                                                                        <img class="img-responsive img-default-image img-cate-1613094879284-collection-page"
                                                                            src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/15-700x700_73afafb5-634c-4ea5-b2b1-3b5230703011_600x600.jpg@v=1552406959"
                                                                            alt="Rising Crow by K.L. Byles - Book 1">
                                                                    </a>
                                                                    <div class="box-label"></div>
                                                                </div>
                                                                <!-- image -->
                                                                <div class="caption">

                                                                    <p class="manufacture-product">
                                                                        <a href="../vendors@q=Barrel&#32;Proof&#32;Press.php"
                                                                            title="Barrel Proof Press">Barrel Proof
                                                                            Press</a>
                                                                    </p>


                                                                    <div class="ratings">
                                                                        <div class="rating-box">

                                                                            <span class="shopify-product-reviews-badge"
                                                                                data-id="1613094879284"></span>

                                                                        </div>
                                                                    </div>

                                                                    <h4 class="product-name">
                                                                        <a
                                                                            href="products/copy-of-green-by-sam-graham-felsen.php">
                                                                            Rising Crow by K.L. Byles - Book 1
                                                                        </a>
                                                                    </h4>
                                                                    <div class="price-box">

                                                                        <p class="special-price"><span
                                                                                class="price"><span
                                                                                    class=money>$9.99</span></span></p>
                                                                        <p class="old-price"><span class="price"><span
                                                                                    class=money>$19.99</span></span></p>

                                                                    </div>
                                                                    <!-- price-container -->
                                                                </div>
                                                            </div>
                                                            <!-- caption -->
                                                        </div>
                                                    </div>
                                                    <!-- product-thumb -->
                                                </div>
                                                <!-- product-layout -->














                                                <div class="product-layout list-style">
                                                    <div class="product-thumb transition">
                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="image images-container">
                                                                    <a href="../special-offer/products/copy-of-a-wing-and-a-prayer.php"
                                                                        class="product-image">
                                                                        <img class="img-responsive img-default-image img-cate-1613090193460-collection-page"
                                                                            src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/11-700x700_458ce7bf-cb27-49db-88eb-882e4693f2b4_600x600.jpg@v=1552406840"
                                                                            alt="GREEN by Sam Graham-Felsen">
                                                                    </a>
                                                                    <div class="box-label"></div>
                                                                </div>
                                                                <!-- image -->
                                                                <div class="caption">

                                                                    <p class="manufacture-product">
                                                                        <a href="../vendors@q=Little&#32;Green&#32;Works.php"
                                                                            title="Little Green Works">Little Green
                                                                            Works</a>
                                                                    </p>


                                                                    <div class="ratings">
                                                                        <div class="rating-box">

                                                                            <span class="shopify-product-reviews-badge"
                                                                                data-id="1613090193460"></span>

                                                                        </div>
                                                                    </div>

                                                                    <h4 class="product-name">
                                                                        <a
                                                                            href="products/copy-of-a-wing-and-a-prayer.php">
                                                                            GREEN by Sam Graham-Felsen
                                                                        </a>
                                                                    </h4>
                                                                    <div class="price-box">

                                                                        <p class="special-price"><span
                                                                                class="price"><span
                                                                                    class=money>$9.99</span></span></p>
                                                                        <p class="old-price"><span class="price"><span
                                                                                    class=money>$19.99</span></span></p>

                                                                    </div>
                                                                    <!-- price-container -->
                                                                </div>
                                                            </div>
                                                            <!-- caption -->
                                                        </div>
                                                    </div>
                                                    <!-- product-thumb -->
                                                </div>
                                                <!-- product-layout -->

                                            </div>
                                            <div class="row_items">












                                                <div class="product-layout list-style">
                                                    <div class="product-thumb transition">
                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="image images-container">
                                                                    <a href="../vendors/products/a-wing-and-a-prayer.php"
                                                                        class="product-image">
                                                                        <img class="img-responsive img-default-image img-cate-1613076168756-collection-page"
                                                                            src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/2-700x700_600x600.jpg@v=1552406461"
                                                                            alt="A WING and a PRAYER - Morano">
                                                                    </a>
                                                                    <div class="box-label"></div>
                                                                </div>
                                                                <!-- image -->
                                                                <div class="caption">

                                                                    <p class="manufacture-product">
                                                                        <a href="../vendors@q=Little&#32;Green&#32;Works.php"
                                                                            title="Little Green Works">Little Green
                                                                            Works</a>
                                                                    </p>


                                                                    <div class="ratings">
                                                                        <div class="rating-box">

                                                                            <span class="shopify-product-reviews-badge"
                                                                                data-id="1613076168756"></span>

                                                                        </div>
                                                                    </div>

                                                                    <h4 class="product-name">
                                                                        <a href="products/a-wing-and-a-prayer.php">
                                                                            A WING and a PRAYER - Morano
                                                                        </a>
                                                                    </h4>
                                                                    <div class="price-box">

                                                                        <p class="special-price"><span
                                                                                class="price"><span
                                                                                    class=money>$9.99</span></span></p>
                                                                        <p class="old-price"><span class="price"><span
                                                                                    class=money>$19.99</span></span></p>

                                                                    </div>
                                                                    <!-- price-container -->
                                                                </div>
                                                            </div>
                                                            <!-- caption -->
                                                        </div>
                                                    </div>
                                                    <!-- product-thumb -->
                                                </div>
                                                <!-- product-layout -->


                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <script>
                                var product_owlCarousel = $("#product_modulecollection-page .tt-product");
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
                                            items: 2
                                        },
                                        992: {
                                            items: 1
                                        },
                                        1200: {
                                            items: 1
                                        },
                                        1600: {
                                            items: 1
                                        }
                                    },
                                    onInitialized: function() {
                                        owlAction();
                                        var i = 0;
                                        $('.owl-dots > .owl-dot').each(function() {
                                            $(this).addClass('clk-' + i);
                                            i++;
                                        });
                                    },
                                    onTranslated: function() {
                                        owlAction();
                                    }
                                });

                                function owlAction() {
                                    $("#product_modulecollection-page .tt-product .owl-item").removeClass('first');
                                    $("#product_modulecollection-page .tt-product .owl-item").removeClass('last');
                                    $("#product_modulecollection-page .tt-product .owl-item").removeClass(
                                        'before-active');
                                    $("#product_modulecollection-page .tt-product .owl-item.active:first").addClass(
                                        'first');
                                    $("#product_modulecollection-page .tt-product .owl-item.active:last").addClass(
                                        'last');
                                    $('#product_modulecollection-page .tt-product .owl-item.active:first').prev()
                                        .addClass('before-active');
                                }

                                function timerslider(x) {
                                    $(".list-thumb .thumb .row_thumb div").removeClass('active');
                                    $('.thumbinner' + x).addClass('active');
                                    $('.clk-' + x).trigger('click');
                                }
                                </script>


                                <div class="banner-static static-sidebar">
                                    <a href="https://smartbook-theme.myshopify.com/collections/cheapest">
                                        <img src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>cdn/shop/files/img-sidebar.jpg@v=1613707786"
                                            alt="#">
                                    </a>
                                </div>

                                <div></div>
                            </div>
                        </aside>
                        <script>
                        $(function() {
                            // collection sidebar 
                            $("#column-left").on("click", ".advanced-filters a", function(event) {
                                event.preventDefault();
                                var url = $(this).attr('href');
                                $.ajax({
                                    type: 'GET',
                                    url: url,
                                    data: {},
                                    beforeSend: function(xhr) {
                                        $("#wraper_ajax").show();
                                    },
                                    complete: function(data) {
                                        $('#custom-products').php($("#custom-products",
                                            data.responseText).php());
                                        $('#column-left').php($("#column-left", data
                                            .responseText).php());
                                        $('#collection-amount').php($("#collection-amount",
                                            data.responseText).php());
                                        if (localStorage.getItem('type') == null) {
                                            var type = $('#category-view-type').val();
                                            var cols = $('#category-grid-cols').val();

                                            if (type == "list") {
                                                category_view.initView(type, cols,
                                                    'btn-list');
                                                category_view.customPriceBoxList();
                                            }

                                            if (type == 'grid') {
                                                category_view.initView(type, cols,
                                                    'btn-grid-' + cols);
                                                category_view.customPriceBoxGrid();
                                            }
                                        } else {
                                            var type = localStorage.getItem('type');
                                            var cols = localStorage.getItem('cols');
                                            var element = localStorage.getItem('element');

                                            category_view.initView(type, cols, element);
                                        }
                                        $('#pagination').php($("#pagination", data
                                            .responseText).php());
                                        history.pushState({
                                            page: url
                                        }, url, url);
                                        $("#wraper_ajax").hide();
                                        SPR.registerCallbacks(), SPR.initRatingHandler(),
                                            SPR.initDomEls(), SPR.loadProducts(), SPR
                                            .loadBadges();
                                    }
                                });
                            });
                        });
                        </script>

                        <div id="content" class="col-md-9 col-sm-12 col-xs-12">
                            <div class="has-thumb">

                                <div class="thumb category-image">
                                    <img src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>cdn/shop/files/category-image-870x371_870x371.jpg@v=1613707787"
                                        alt="Products" title="Products" class="img-thumbnail" />
                                </div>

                                <h1 class="category-name">
                                    <?php

                                    if (isset($_GET["type"])) {

                                        if ($_GET["type"] == "category") {
                                            $cid = $_GET["catid"];
                                            echo $_GET["type"] . " : " . DatabaseManager::select("categories", "name", "id=$cid")[0]["name"];
                                        } else {
                                            echo $_GET["type"];
                                        }

                                    } else {
                                        echo "Products";
                                    }
                                    ?>
                                </h1>
                            </div>

                            <div class="category-des">
                                <p></p>
                            </div>

                            <div class="custom-category">
                                <div id="wraper_ajax" class="loadding_ajaxcart"><i class="fa fa-spinner fa-spin"></i>
                                </div>


                                <div class="toolbar toolbar-products">
                                    <div class="modes"><button type="button"
                                            onclick="category_view.changeView('grid', 2, 'btn-grid-2')"
                                            class="btn btn-default btn-custom-view btn-grid btn-grid-2"
                                            data-toggle="tooltip" title="2">2</button>
                                        <button type="button"
                                            onclick="category_view.changeView('grid', 3, 'btn-grid-3')"
                                            class="btn btn-default btn-custom-view btn-grid btn-grid-3"
                                            data-toggle="tooltip" title="3">3</button>
                                        <button type="button"
                                            onclick="category_view.changeView('grid', 4, 'btn-grid-4')"
                                            class="btn btn-default btn-custom-view btn-grid btn-grid-4"
                                            data-toggle="tooltip" title="4">4</button>
                                        <button type="button"
                                            onclick="category_view.changeView('grid', 5, 'btn-grid-5')"
                                            class="btn btn-default btn-custom-view btn-grid btn-grid-5"
                                            data-toggle="tooltip" title="5">5</button>
                                        <button type="button" onclick="category_view.changeView('list', 0, 'btn-list')"
                                            class="btn btn-default btn-custom-view btn-list" data-toggle="tooltip"
                                            title="List">List</button>
                                        <input type="hidden" id="category-view-type" value="grid" />
                                        <input type="hidden" id="category-grid-cols" value="3" />
                                    </div>
                                    <div class="toolbar-amount">

                                        <span id="collection-amount">Showing 1 to 9 of 13 items
                                        </span>
                                    </div>
                                    <div class="sorter"><label class="" for="input-sort">Sort by:</label>
                                        <select class="form-control" name="input-sort" id="input-sort">
                                            <option value="manual">Featured</option>
                                            <option value="best-selling">Best Selling</option>
                                            <option value="title-ascending">Alphabetically, A-Z</option>
                                            <option value="title-descending">Alphabetically, Z-A</option>
                                            <option value="price-ascending">Price, low to high</option>
                                            <option value="price-descending">Price, high to low</option>
                                            <option value="created-descending">Date, new to old</option>
                                            <option value="created-ascending">Date, old to new</option>
                                        </select>
                                        <script>
                                        function replaceUrlParam(url, paramName, paramValue) {
                                            var pattern = new RegExp('(' + paramName + '=).*?(&|$)'),
                                                newUrl = url.replace(pattern, '$1' + paramValue + '$2');
                                            if (newUrl == url) {
                                                newUrl = newUrl + (newUrl.indexOf('?') > 0 ? '&' : '?') + paramName +
                                                    '=' + paramValue;
                                            }
                                            return newUrl;
                                        }

                                        $(function() {
                                            $('#input-sort').val('title-ascending').on('change', function(e) {
                                                e.preventDefault();
                                                var view = $(this).val(),
                                                    url = document.URL,
                                                    hasParams = url.indexOf('?') > -1;
                                                // window.location
                                                if (hasParams) {
                                                    url = replaceUrlParam(url, 'sort_by', view);
                                                } else {
                                                    url = url + '?sort_by=' + view;
                                                }
                                                $.ajax({
                                                    type: 'GET',
                                                    url: url,
                                                    data: {},
                                                    beforeSend: function(xhr) {
                                                        $("#wraper_ajax").show();
                                                    },
                                                    complete: function(data) {
                                                        $('#custom-products').php($(
                                                            "#custom-products", data
                                                            .responseText).php());
                                                        $('#column-left').php($(
                                                            "#column-left", data
                                                            .responseText).php());
                                                        $('#collection-amount').php($(
                                                                "#collection-amount",
                                                                data.responseText)
                                                            .php());
                                                        if (localStorage.getItem('type') ==
                                                            null) {
                                                            var type = $(
                                                                    '#category-view-type')
                                                                .val();
                                                            var cols = $(
                                                                    '#category-grid-cols')
                                                                .val();

                                                            if (type == "list") {
                                                                category_view.initView(type,
                                                                    cols, 'btn-list');
                                                                category_view
                                                                    .customPriceBoxList();
                                                            }

                                                            if (type == 'grid') {
                                                                category_view.initView(type,
                                                                    cols, 'btn-grid-' +
                                                                    cols);
                                                                category_view
                                                                    .customPriceBoxGrid();
                                                            }
                                                        } else {
                                                            var type = localStorage.getItem(
                                                                'type');
                                                            var cols = localStorage.getItem(
                                                                'cols');
                                                            var element = localStorage
                                                                .getItem('element');

                                                            category_view.initView(type,
                                                                cols, element);
                                                        }
                                                        /*if (localStorage.getItem('display') == 'list') {
                                                          $('#list-view').trigger('click');
                                                        } else {
                                                          $('#grid-view').trigger('click');
                                                        }*/
                                                        $('#pagination').php($(
                                                            "#pagination", data
                                                            .responseText).php());
                                                        history.pushState({
                                                            page: url
                                                        }, url, url);
                                                        $("#wraper_ajax").hide();
                                                        SPR.registerCallbacks(), SPR
                                                            .initRatingHandler(), SPR
                                                            .initDomEls(), SPR
                                                            .loadProducts(), SPR
                                                            .loadBadges();
                                                    }
                                                });

                                            });

                                        });
                                        </script>
                                    </div>
                                    <div class="limiter"><label class="" for="input-limit">Show:</label>
                                        <select name="" id="input-limit" class="form-control">
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="all">All</option>
                                        </select>
                                        <script>
                                        function replaceUrlParam(url, paramName, paramValue) {
                                            var pattern = new RegExp('(' + paramName + '=).*?(&|$)'),
                                                newUrl = url.replace(pattern, '$1' + paramValue + '$2');
                                            if (newUrl == url) {
                                                newUrl = newUrl + (newUrl.indexOf('?') > 0 ? '&' : '?') + paramName +
                                                    '=' + paramValue;
                                            }
                                            return newUrl;
                                        }

                                        $(function() {
                                            $('#input-limit').on('change', function(e) {
                                                e.preventDefault();
                                                var view = $(this).val(),
                                                    url = document.URL,
                                                    hasParams = url.indexOf('?') > -1;
                                                // window.location
                                                if (hasParams) {
                                                    url = replaceUrlParam(url, 'view', view);
                                                } else {
                                                    url = url + '?view=' + view;
                                                }
                                                $.ajax({
                                                    type: 'GET',
                                                    url: url,
                                                    data: {},
                                                    beforeSend: function(xhr) {
                                                        $("#wraper_ajax").show();
                                                    },
                                                    complete: function(data) {
                                                        $('#custom-products').php($(
                                                            "#custom-products", data
                                                            .responseText).php());
                                                        $('#column-left').php($(
                                                            "#column-left", data
                                                            .responseText).php());
                                                        $('#collection-amount').php($(
                                                                "#collection-amount",
                                                                data.responseText)
                                                            .php());
                                                        if (localStorage.getItem('type') ==
                                                            null) {
                                                            var type = $(
                                                                    '#category-view-type')
                                                                .val();
                                                            var cols = $(
                                                                    '#category-grid-cols')
                                                                .val();

                                                            if (type == "list") {
                                                                category_view.initView(type,
                                                                    cols, 'btn-list');
                                                                category_view
                                                                    .customPriceBoxList();
                                                            }

                                                            if (type == 'grid') {
                                                                category_view.initView(type,
                                                                    cols, 'btn-grid-' +
                                                                    cols);
                                                                category_view
                                                                    .customPriceBoxGrid();
                                                            }
                                                        } else {
                                                            var type = localStorage.getItem(
                                                                'type');
                                                            var cols = localStorage.getItem(
                                                                'cols');
                                                            var element = localStorage
                                                                .getItem('element');

                                                            category_view.initView(type,
                                                                cols, element);
                                                        }
                                                        /*if (localStorage.getItem('display') == 'list') {
                                                          $('#list-view').trigger('click');
                                                        } else {
                                                          $('#grid-view').trigger('click');
                                                        }*/
                                                        $('#pagination').php($(
                                                            "#pagination", data
                                                            .responseText).php());
                                                        history.pushState({
                                                            page: url
                                                        }, url, url);
                                                        $("#wraper_ajax").hide();
                                                        SPR.registerCallbacks(), SPR
                                                            .initRatingHandler(), SPR
                                                            .initDomEls(), SPR
                                                            .loadProducts(), SPR
                                                            .loadBadges();
                                                    }
                                                });
                                            });
                                        });
                                        </script>
                                    </div>
                                </div>

                             
                                <?php
                                if (isset($_GET["type"])) {





                                    if ($_GET["type"] == "Featured Products") { ?>



                                <div class="row" id="custom-products">


                                    <?php

                                                                    $cardsPerPage = 10;
                                                                    $totalRecords = DatabaseManager::select("books", "count(id) as cid", "is_Featured=1")[0]["cid"];
                                                                    $totalPages = ceil($totalRecords / $cardsPerPage); //paginaion loop limit &Workin
                                                                    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
                                                                    $offset = ($currentPage - 1) * $cardsPerPage;



                                                                    $arru = DatabaseManager::select("books left join categories on categories.id=books.category_id ", "books.id as ID, title as Title, image_name as Image ,category_id as catId,categories.name as catName", "is_Featured=1 LIMIT $offset, $cardsPerPage");




                                                                    for ($i = 0; $i < ((count($arru) > 10) ? 10 : count($arru)); $i++) {

                                                                        $BookTitle = $arru[$i]["Title"];
                                                                        $imagename = $arru[$i]["Image"];
                                                                        $Bookid = $arru[$i]["ID"];
                                                                        $catId = $arru[$i]["catId"];
                                                                        $catName = $arru[$i]["catName"];
                                                                        $htmlprodSec = '';
                                                                        // ob_start();
                                                                        ?>
                                    <!-- div -->

                                    <div class="product-layout product-list col-xs-12 product-item">
                                        <div class="product-thumb">
                                            <div class="item item1">
                                                <div class="item-inner">
                                                    <div class="caption-top">

                                                        <p class="manufacture-product">
                                                            <a href="../vendors@q=Little&#32;Green&#32;Works.php"
                                                                title="Little Green Works"><?php echo $catName ?></a>
                                                        </p>

                                                        <h4 class="product-name">
                                                            <a
                                                                href="pages/singleProductPage.php?productdetails=<?php echo urlencode(json_encode(["imagename" => $imagename, "BookTitle" => $BookTitle, "Bookid" => $Bookid, "catId" => $catId, "catName" => $catName])); //to decode this json use $productdetails = $_GET['productdetails'];then $productData = json_decode(urldecode($productdetails), true); ?>">
                                                                <?php echo $BookTitle ?>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div class="box-border">
                                                        <div class="image images-container">
                                                            <div class="inner">
                                                                <div class="box-label">
                                                                </div>
                                                                <div class="image rotate-image-container">

                                                                    <a href="../pages/singleProductPage.php?productdetails=<?php echo urlencode(json_encode(["imagename" => $imagename, "BookTitle" => $BookTitle, "Bookid" => $Bookid, "catId" => $catId, "catName" => $catName])); //to decode this json use $productdetails = $_GET['productdetails'];then $productData = json_decode(urldecode($productdetails), true); ?>"
                                                                        class="">
                                                                        <img class="img-responsive has-rotator img-default-image img-cate-1613090193460-collection-page"
                                                                            src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/<?php echo $imagename ?>"
                                                                            alt="<?php echo $Bookid ?>">




                                                                        <input type="hidden"
                                                                            value="//smartbook-theme.myshopify.com/images/products/11-700x700_458ce7bf-cb27-49db-88eb-882e4693f2b4_600x600.jpg?v=1552406840"
                                                                            class="img-default-1613090193460-collection-page" />













                                                                    </a>


                                                                </div>
                                                                <div class="action-links">
                                                                    <button class="button btn-cart " type="button"
                                                                        data-toggle="tooltip"
                                                                        data-loading-text="Loading..."
                                                                        title="Add to Cart"
                                                                        onclick="cart.add('14458099466292');">
                                                                        <span>Add to Cart</span>
                                                                    </button>


                                                                    <button
                                                                        class="btn-wishlist button btn-default wishlist-btn"
                                                                        data-product-handle="copy-of-a-wing-and-a-prayer"
                                                                        type="button" data-toggle="tooltip"
                                                                        title="Add to Wish List"
                                                                        data-original-title="Add to Wish List">
                                                                        <span>Add to Wish List</span>
                                                                    </button>


                                                                    <button class="button btn-compare" type="button"
                                                                        data-toggle="tooltip" title="View Details"
                                                                        onclick="location.href='/products/copy-of-a-wing-and-a-prayer';">
                                                                        <span>View Details</span>
                                                                    </button>

                                                                    <button class="button btn-quickview quickview"
                                                                        type="button" title="Quick View"
                                                                        data-toggle="modal" data-target="#productModal"
                                                                        data-book_id='<?php echo $Bookid ?>'
                                                                        data-original-title="Quick View">
                                                                        <span>Quick View</span>
                                                                    </button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- image -->
                                                        <div class="caption">
                                                            <div class="inner  swtch">


                                                                <p class="product-des">



                                                                </p>

                                                                <div class="price-box">

                                                                    <p class="special-price"><span class="price"><span
                                                                                class=money>$13.99</span></span></p>
                                                                    <p class="old-price"><span class="price"><span
                                                                                class=money>$19.99</span></span></p>

                                                                </div>
                                                                <!-- price-container -->

                                                                <div class="ratings">
                                                                    <div class="rating-box">

                                                                        <span class="shopify-product-reviews-badge"
                                                                            data-id="1613090193460"></span>

                                                                    </div>
                                                                </div>







                                                                <div class="label-product label_sale">
                                                                    <span>-50%</span>
                                                                </div>






                                                            </div>
                                                        </div>
                                                        <!-- caption -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-thumb -->
                                    </div>





                                    <!-- div -->







                                    <!-- product-layout -->


                                    <?php } ?>


                                </div>




                                <?php if ($totalRecords > 10) {
                                                                    $type = $_GET["type"] ?>
                                <div class="toolbar toolbar-products toolbar-bottom" id="pagination">
                                    <div class="pages ajax_pagination">

                                        <ul class="pagination">
                                            <?php



                                                                                            if ($currentPage > 1) {
                                                                                                echo '<li class="pagination-next"><a href="?page=' . ($currentPage - 1) . '"> &lt;</a></li>';
                                                                                            }

                                                                                            if ($totalPages <= 5) {
                                                                                                // Display all available pages if there are 5 or fewer
                                                                                                for ($i = 1; $i <= $totalPages; $i++) {
                                                                                                    if ($i == $currentPage) {
                                                                                                        echo '<li class="active"><span>' . $i . '</span></li>';
                                                                                                    } else {
                                                                                                        echo '<li><a href="products.php?type=' . $type . '&page=' . $i . '">' . $i . '</a></li>';
                                                                                                    }
                                                                                                }
                                                                                            } else {
                                                                                                // Display the current page and two pages before and after it
                                                                                                $startPage = max(1, $currentPage - 2);
                                                                                                $endPage = min($totalPages, $currentPage + 2);

                                                                                                for ($i = $startPage; $i <= $endPage; $i++) {
                                                                                                    if ($i == $currentPage) {
                                                                                                        echo '<li class="active"><span>' . $i . '</span></li>';
                                                                                                    } else {
                                                                                                        echo '<li><a href="products.php?type=' . $type . '&page=' . $i . '">' . $i . '</a></li>';
                                                                                                    }
                                                                                                }
                                                                                            }

                                                                                            if ($currentPage < $totalPages) {
                                                                                                echo '<li class="pagination-next"><a href="?page=' . ($currentPage + 1) . '"> &gt;</a></li>';
                                                                                            }

                                                                                            ?>
















                                        </ul>

                                    </div>
                                    <div class="toolbar-amount">


                                        <span>Showing 1 to 9 of 13 items
                                        </span>
                                    </div>
                                </div>
                                <?php } ?>





                                <?php } else if ($_GET["type"] == "Most Viewed") { ?>

                                <div class="row" id="custom-products">


                                    <?php

                                                                                    $cardsPerPage = 10;
                                                                                    $totalRecords = DatabaseManager::select("books", "count(id) as cid", "views>100")[0]["cid"];
                                                                                    $totalPages = ceil($totalRecords / $cardsPerPage); //paginaion loop limit &Workin
                                                                                    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
                                                                                    $offset = ($currentPage - 1) * $cardsPerPage;



                                                                                    $arru = DatabaseManager::select("books left join categories on categories.id=books.category_id ", "books.id as ID, title as Title, image_name as Image ,category_id as catId,categories.name as catName", "views>100 order by views desc LIMIT $offset, $cardsPerPage");




                                                                                    for ($i = 0; $i < ((count($arru) > 10) ? 10 : count($arru)); $i++) {

                                                                                        $BookTitle = $arru[$i]["Title"];
                                                                                        $imagename = $arru[$i]["Image"];
                                                                                        $Bookid = $arru[$i]["ID"];
                                                                                        $catId = $arru[$i]["catId"];
                                                                                        $catName = $arru[$i]["catName"];
                                                                                        $htmlprodSec = '';
                                                                                        // ob_start();
                                                                                        ?>
                                    <!-- div -->

                                    <div class="product-layout product-list col-xs-12 product-item">
                                        <div class="product-thumb">
                                            <div class="item item1">
                                                <div class="item-inner">
                                                    <div class="caption-top">

                                                        <p class="manufacture-product">
                                                            <a href="../vendors@q=Little&#32;Green&#32;Works.php"
                                                                title="Little Green Works"><?php echo $catName ?></a>
                                                        </p>

                                                        <h4 class="product-name">
                                                            <a
                                                                href="pages/singleProductPage.php?productdetails=<?php echo urlencode(json_encode(["imagename" => $imagename, "BookTitle" => $BookTitle, "Bookid" => $Bookid, "catId" => $catId, "catName" => $catName])); //to decode this json use $productdetails = $_GET['productdetails'];then $productData = json_decode(urldecode($productdetails), true); ?>">
                                                                <?php echo $BookTitle ?>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div class="box-border">
                                                        <div class="image images-container">
                                                            <div class="inner">
                                                                <div class="box-label">
                                                                </div>
                                                                <div class="image rotate-image-container">

                                                                    <a href="../pages/singleProductPage.php?productdetails=<?php echo urlencode(json_encode(["imagename" => $imagename, "BookTitle" => $BookTitle, "Bookid" => $Bookid, "catId" => $catId, "catName" => $catName])); //to decode this json use $productdetails = $_GET['productdetails'];then $productData = json_decode(urldecode($productdetails), true); ?>"
                                                                        class="">
                                                                        <img class="img-responsive has-rotator img-default-image img-cate-1613090193460-collection-page"
                                                                            src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/<?php echo $imagename ?>"
                                                                            alt="<?php echo $Bookid ?>">




                                                                        <input type="hidden"
                                                                            value="//smartbook-theme.myshopify.com/images/products/11-700x700_458ce7bf-cb27-49db-88eb-882e4693f2b4_600x600.jpg?v=1552406840"
                                                                            class="img-default-1613090193460-collection-page" />













                                                                    </a>


                                                                </div>
                                                                <div class="action-links">
                                                                    <button class="button btn-cart " type="button"
                                                                        data-toggle="tooltip"
                                                                        data-loading-text="Loading..."
                                                                        title="Add to Cart"
                                                                        onclick="cart.add('14458099466292');">
                                                                        <span>Add to Cart</span>
                                                                    </button>


                                                                    <button
                                                                        class="btn-wishlist button btn-default wishlist-btn"
                                                                        data-product-handle="copy-of-a-wing-and-a-prayer"
                                                                        type="button" data-toggle="tooltip"
                                                                        title="Add to Wish List"
                                                                        data-original-title="Add to Wish List">
                                                                        <span>Add to Wish List</span>
                                                                    </button>


                                                                    <button class="button btn-compare" type="button"
                                                                        data-toggle="tooltip" title="View Details"
                                                                        onclick="location.href='/products/copy-of-a-wing-and-a-prayer';">
                                                                        <span>View Details</span>
                                                                    </button>

                                                                    <button class="button btn-quickview quickview"
                                                                        type="button" title="Quick View"
                                                                        data-toggle="modal" data-target="#productModal"
                                                                        data-book_id='<?php echo $Bookid ?>'
                                                                        data-original-title="Quick View">
                                                                        <span>Quick View</span>
                                                                    </button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- image -->
                                                        <div class="caption">
                                                            <div class="inner  swtch">


                                                                <p class="product-des">



                                                                </p>

                                                                <div class="price-box">

                                                                    <p class="special-price"><span class="price"><span
                                                                                class=money>$13.99</span></span></p>
                                                                    <p class="old-price"><span class="price"><span
                                                                                class=money>$19.99</span></span></p>

                                                                </div>
                                                                <!-- price-container -->

                                                                <div class="ratings">
                                                                    <div class="rating-box">

                                                                        <span class="shopify-product-reviews-badge"
                                                                            data-id="1613090193460"></span>

                                                                    </div>
                                                                </div>







                                                                <div class="label-product label_sale">
                                                                    <span>-50%</span>
                                                                </div>






                                                            </div>
                                                        </div>
                                                        <!-- caption -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-thumb -->
                                    </div>





                                    <!-- div -->







                                    <!-- product-layout -->


                                    <?php } ?>


                                </div>




                                <?php if ($totalRecords > 10) {
                                                                    $type = $_GET["type"] ?>
                                <div class="toolbar toolbar-products toolbar-bottom" id="pagination">
                                    <div class="pages ajax_pagination">

                                        <ul class="pagination">
                                            <?php



                                                                                                            if ($currentPage > 1) {
                                                                                                                echo '<li class="pagination-next"><a href="?type=' . $type . '&page=' . ($currentPage - 1) . '"> &lt;</a></li>';
                                                                                                            }

                                                                                                            if ($totalPages <= 5) {
                                                                                                                // Display all available pages if there are 5 or fewer
                                                                                                                for ($i = 1; $i <= $totalPages; $i++) {
                                                                                                                    if ($i == $currentPage) {
                                                                                                                        echo '<li class="active"><span>' . $i . '</span></li>';
                                                                                                                    } else {
                                                                                                                        echo '<li><a href="products.php?type=' . $type . '&page=' . $i . '">' . $i . '</a></li>';
                                                                                                                    }
                                                                                                                }
                                                                                                            } else {
                                                                                                                // Display the current page and two pages before and after it
                                                                                                                $startPage = max(1, $currentPage - 2);
                                                                                                                $endPage = min($totalPages, $currentPage + 2);

                                                                                                                for ($i = $startPage; $i <= $endPage; $i++) {
                                                                                                                    if ($i == $currentPage) {
                                                                                                                        echo '<li class="active"><span>' . $i . '</span></li>';
                                                                                                                    } else {
                                                                                                                        echo '<li><a href="products.php?type=' . $type . '&page=' . $i . '">' . $i . '</a></li>';
                                                                                                                    }
                                                                                                                }
                                                                                                            }

                                                                                                            if ($currentPage < $totalPages) {
                                                                                                                echo '<li class="pagination-next"><a href="?page=' . ($currentPage + 1) . '"> &gt;</a></li>';
                                                                                                            }

                                                                                                            ?>
















                                        </ul>

                                    </div>
                                    <div class="toolbar-amount">


                                        <span>Showing 1 to 9 of 13 items
                                        </span>
                                    </div>
                                </div>
                                <?php } ?>


                                <?php } else if ($_GET["type"] == "New Arrivals") { ?>

                                <div class="row" id="custom-products">


                                    <?php

                                                                                    $cardsPerPage = 10;
                                                                                    $totalRecords = DatabaseManager::select("books", "count(id) as cid", "views>100")[0]["cid"];
                                                                                    $totalPages = ceil($totalRecords / $cardsPerPage); //paginaion loop limit &Workin
                                                                                    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
                                                                                    $offset = ($currentPage - 1) * $cardsPerPage;



                                                                                    $arru = DatabaseManager::select("books left join categories on categories.id=books.category_id ", "books.id as ID, title as Title, image_name as Image ,category_id as catId,categories.name as catName", "date_added >= DATE_SUB(NOW(), INTERVAL 30 DAY) LIMIT $offset, $cardsPerPage");




                                                                                    for ($i = 0; $i < ((count($arru) > 10) ? 10 : count($arru)); $i++) {

                                                                                        $BookTitle = $arru[$i]["Title"];
                                                                                        $imagename = $arru[$i]["Image"];
                                                                                        $Bookid = $arru[$i]["ID"];
                                                                                        $catId = $arru[$i]["catId"];
                                                                                        $catName = $arru[$i]["catName"];
                                                                                        $htmlprodSec = '';
                                                                                        // ob_start();
                                                                                        ?>
                                    <!-- div -->

                                    <div class="product-layout product-list col-xs-12 product-item">
                                        <div class="product-thumb">
                                            <div class="item item1">
                                                <div class="item-inner">
                                                    <div class="caption-top">

                                                        <p class="manufacture-product">
                                                            <a href="../vendors@q=Little&#32;Green&#32;Works.php"
                                                                title="Little Green Works"><?php echo $catName ?></a>
                                                        </p>

                                                        <h4 class="product-name">
                                                            <a
                                                                href="pages/singleProductPage.php?productdetails=<?php echo urlencode(json_encode(["imagename" => $imagename, "BookTitle" => $BookTitle, "Bookid" => $Bookid, "catId" => $catId, "catName" => $catName])); //to decode this json use $productdetails = $_GET['productdetails'];then $productData = json_decode(urldecode($productdetails), true); ?>">
                                                                <?php echo $BookTitle ?>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div class="box-border">
                                                        <div class="image images-container">
                                                            <div class="inner">
                                                                <div class="box-label">
                                                                </div>
                                                                <div class="image rotate-image-container">

                                                                    <a href="../pages/singleProductPage.php?productdetails=<?php echo urlencode(json_encode(["imagename" => $imagename, "BookTitle" => $BookTitle, "Bookid" => $Bookid, "catId" => $catId, "catName" => $catName])); //to decode this json use $productdetails = $_GET['productdetails'];then $productData = json_decode(urldecode($productdetails), true); ?>"
                                                                        class="">
                                                                        <img class="img-responsive has-rotator img-default-image img-cate-1613090193460-collection-page"
                                                                            src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/<?php echo $imagename ?>"
                                                                            alt="<?php echo $Bookid ?>">




                                                                        <input type="hidden"
                                                                            value="//smartbook-theme.myshopify.com/images/products/11-700x700_458ce7bf-cb27-49db-88eb-882e4693f2b4_600x600.jpg?v=1552406840"
                                                                            class="img-default-1613090193460-collection-page" />













                                                                    </a>


                                                                </div>
                                                                <div class="action-links">
                                                                    <button class="button btn-cart " type="button"
                                                                        data-toggle="tooltip"
                                                                        data-loading-text="Loading..."
                                                                        title="Add to Cart"
                                                                        onclick="cart.add('14458099466292');">
                                                                        <span>Add to Cart</span>
                                                                    </button>


                                                                    <button
                                                                        class="btn-wishlist button btn-default wishlist-btn"
                                                                        data-product-handle="copy-of-a-wing-and-a-prayer"
                                                                        type="button" data-toggle="tooltip"
                                                                        title="Add to Wish List"
                                                                        data-original-title="Add to Wish List">
                                                                        <span>Add to Wish List</span>
                                                                    </button>


                                                                    <button class="button btn-compare" type="button"
                                                                        data-toggle="tooltip" title="View Details"
                                                                        onclick="location.href='/products/copy-of-a-wing-and-a-prayer';">
                                                                        <span>View Details</span>
                                                                    </button>

                                                                    <button class="button btn-quickview quickview"
                                                                        type="button" title="Quick View"
                                                                        data-toggle="modal" data-target="#productModal"
                                                                        data-book_id='<?php echo $Bookid ?>'
                                                                        data-original-title="Quick View">
                                                                        <span>Quick View</span>
                                                                    </button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- image -->
                                                        <div class="caption">
                                                            <div class="inner  swtch">


                                                                <p class="product-des">



                                                                </p>

                                                                <div class="price-box">

                                                                    <p class="special-price"><span class="price"><span
                                                                                class=money>$13.99</span></span></p>
                                                                    <p class="old-price"><span class="price"><span
                                                                                class=money>$19.99</span></span></p>

                                                                </div>
                                                                <!-- price-container -->

                                                                <div class="ratings">
                                                                    <div class="rating-box">

                                                                        <span class="shopify-product-reviews-badge"
                                                                            data-id="1613090193460"></span>

                                                                    </div>
                                                                </div>







                                                                <div class="label-product label_sale">
                                                                    <span>-50%</span>
                                                                </div>






                                                            </div>
                                                        </div>
                                                        <!-- caption -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-thumb -->
                                    </div>





                                    <!-- div -->







                                    <!-- product-layout -->


                                    <?php } ?>


                                </div>




                                <?php if ($totalRecords > 10) {
                                                                    $type = $_GET["type"] ?>
                                <div class="toolbar toolbar-products toolbar-bottom" id="pagination">
                                    <div class="pages ajax_pagination">

                                        <ul class="pagination">
                                            <?php



                                                                                                            if ($currentPage > 1) {
                                                                                                                echo '<li class="pagination-next"><a href="?type=' . $type . '&page=' . ($currentPage - 1) . '"> &lt;</a></li>';
                                                                                                            }

                                                                                                            if ($totalPages <= 5) {
                                                                                                                // Display all available pages if there are 5 or fewer
                                                                                                                for ($i = 1; $i <= $totalPages; $i++) {
                                                                                                                    if ($i == $currentPage) {
                                                                                                                        echo '<li class="active"><span>' . $i . '</span></li>';
                                                                                                                    } else {
                                                                                                                        echo '<li><a href="products.php?type=' . $type . '&page=' . $i . '">' . $i . '</a></li>';
                                                                                                                    }
                                                                                                                }
                                                                                                            } else {
                                                                                                                // Display the current page and two pages before and after it
                                                                                                                $startPage = max(1, $currentPage - 2);
                                                                                                                $endPage = min($totalPages, $currentPage + 2);

                                                                                                                for ($i = $startPage; $i <= $endPage; $i++) {
                                                                                                                    if ($i == $currentPage) {
                                                                                                                        echo '<li class="active"><span>' . $i . '</span></li>';
                                                                                                                    } else {
                                                                                                                        echo '<li><a href="products.php?type=' . $type . '&page=' . $i . '">' . $i . '</a></li>';
                                                                                                                    }
                                                                                                                }
                                                                                                            }

                                                                                                            if ($currentPage < $totalPages) {
                                                                                                                echo '<li class="pagination-next"><a href="?page=' . ($currentPage + 1) . '"> &gt;</a></li>';
                                                                                                            }

                                                                                                            ?>
















                                        </ul>

                                    </div>
                                    <div class="toolbar-amount">


                                        <span>Showing 1 to 9 of 13 items
                                        </span>
                                    </div>
                                </div>
                                <?php } ?>

                                <?php } else if ($_GET["type"] == "Special offer") { ?>

                                <div class="row" id="custom-products">


                                    <?php

                                                                                    $cardsPerPage = 10;
                                                                                    $totalRecords = DatabaseManager::select("books", "count(id) as cid", "views>100")[0]["cid"];
                                                                                    $totalPages = ceil($totalRecords / $cardsPerPage); //paginaion loop limit &Workin
                                                                                    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
                                                                                    $offset = ($currentPage - 1) * $cardsPerPage;



                                                                                    $arru = DatabaseManager::select("books left join categories on categories.id=books.category_id inner join book_details on books.id=book_details.book_id", "books.id as ID, title as Title, image_name as Image ,category_id as catId,categories.name as catName", "sale_price>(0.5*price) LIMIT $offset, $cardsPerPage");




                                                                                    for ($i = 0; $i < ((count($arru) > 10) ? 10 : count($arru)); $i++) {

                                                                                        $BookTitle = $arru[$i]["Title"];
                                                                                        $imagename = $arru[$i]["Image"];
                                                                                        $Bookid = $arru[$i]["ID"];
                                                                                        $catId = $arru[$i]["catId"];
                                                                                        $catName = $arru[$i]["catName"];
                                                                                        $htmlprodSec = '';
                                                                                        // ob_start();
                                                                                        ?>
                                    <!-- div -->

                                    <div class="product-layout product-list col-xs-12 product-item">
                                        <div class="product-thumb">
                                            <div class="item item1">
                                                <div class="item-inner">
                                                    <div class="caption-top">

                                                        <p class="manufacture-product">
                                                            <a href="../vendors@q=Little&#32;Green&#32;Works.php"
                                                                title="Little Green Works"><?php echo $catName ?></a>
                                                        </p>

                                                        <h4 class="product-name">
                                                            <a
                                                                href="pages/singleProductPage.php?productdetails=<?php echo urlencode(json_encode(["imagename" => $imagename, "BookTitle" => $BookTitle, "Bookid" => $Bookid, "catId" => $catId, "catName" => $catName])); //to decode this json use $productdetails = $_GET['productdetails'];then $productData = json_decode(urldecode($productdetails), true); ?>">
                                                                <?php echo $BookTitle ?>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div class="box-border">
                                                        <div class="image images-container">
                                                            <div class="inner">
                                                                <div class="box-label">
                                                                </div>
                                                                <div class="image rotate-image-container">

                                                                    <a href="../pages/singleProductPage.php?productdetails=<?php echo urlencode(json_encode(["imagename" => $imagename, "BookTitle" => $BookTitle, "Bookid" => $Bookid, "catId" => $catId, "catName" => $catName])); //to decode this json use $productdetails = $_GET['productdetails'];then $productData = json_decode(urldecode($productdetails), true); ?>"
                                                                        class="">
                                                                        <img class="img-responsive has-rotator img-default-image img-cate-1613090193460-collection-page"
                                                                            src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/<?php echo $imagename ?>"
                                                                            alt="<?php echo $Bookid ?>">




                                                                        <input type="hidden"
                                                                            value="//smartbook-theme.myshopify.com/images/products/11-700x700_458ce7bf-cb27-49db-88eb-882e4693f2b4_600x600.jpg?v=1552406840"
                                                                            class="img-default-1613090193460-collection-page" />













                                                                    </a>


                                                                </div>
                                                                <div class="action-links">
                                                                    <button class="button btn-cart " type="button"
                                                                        data-toggle="tooltip"
                                                                        data-loading-text="Loading..."
                                                                        title="Add to Cart"
                                                                        onclick="cart.add('14458099466292');">
                                                                        <span>Add to Cart</span>
                                                                    </button>


                                                                    <button
                                                                        class="btn-wishlist button btn-default wishlist-btn"
                                                                        data-product-handle="copy-of-a-wing-and-a-prayer"
                                                                        type="button" data-toggle="tooltip"
                                                                        title="Add to Wish List"
                                                                        data-original-title="Add to Wish List">
                                                                        <span>Add to Wish List</span>
                                                                    </button>


                                                                    <button class="button btn-compare" type="button"
                                                                        data-toggle="tooltip" title="View Details"
                                                                        onclick="location.href='/products/copy-of-a-wing-and-a-prayer';">
                                                                        <span>View Details</span>
                                                                    </button>

                                                                    <button class="button btn-quickview quickview"
                                                                        type="button" title="Quick View"
                                                                        data-toggle="modal" data-target="#productModal"
                                                                        data-book_id='<?php echo $Bookid ?>'
                                                                        data-original-title="Quick View">
                                                                        <span>Quick View</span>
                                                                    </button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- image -->
                                                        <div class="caption">
                                                            <div class="inner  swtch">


                                                                <p class="product-des">



                                                                </p>

                                                                <div class="price-box">

                                                                    <p class="special-price"><span class="price"><span
                                                                                class=money>$13.99</span></span></p>
                                                                    <p class="old-price"><span class="price"><span
                                                                                class=money>$19.99</span></span></p>

                                                                </div>
                                                                <!-- price-container -->

                                                                <div class="ratings">
                                                                    <div class="rating-box">

                                                                        <span class="shopify-product-reviews-badge"
                                                                            data-id="1613090193460"></span>

                                                                    </div>
                                                                </div>







                                                                <div class="label-product label_sale">
                                                                    <span>-50%</span>
                                                                </div>






                                                            </div>
                                                        </div>
                                                        <!-- caption -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-thumb -->
                                    </div>





                                    <!-- div -->







                                    <!-- product-layout -->


                                    <?php } ?>


                                </div>




                                <?php if ($totalRecords > 10) {
                                                                    $type = $_GET["type"] ?>
                                <div class="toolbar toolbar-products toolbar-bottom" id="pagination">
                                    <div class="pages ajax_pagination">

                                        <ul class="pagination">
                                            <?php



                                                                                                            if ($currentPage > 1) {
                                                                                                                echo '<li class="pagination-next"><a href="?type=' . $type . '&page=' . ($currentPage - 1) . '"> &lt;</a></li>';
                                                                                                            }

                                                                                                            if ($totalPages <= 5) {
                                                                                                                // Display all available pages if there are 5 or fewer
                                                                                                                for ($i = 1; $i <= $totalPages; $i++) {
                                                                                                                    if ($i == $currentPage) {
                                                                                                                        echo '<li class="active"><span>' . $i . '</span></li>';
                                                                                                                    } else {
                                                                                                                        echo '<li><a href="products.php?type=' . $type . '&page=' . $i . '">' . $i . '</a></li>';
                                                                                                                    }
                                                                                                                }
                                                                                                            } else {
                                                                                                                // Display the current page and two pages before and after it
                                                                                                                $startPage = max(1, $currentPage - 2);
                                                                                                                $endPage = min($totalPages, $currentPage + 2);

                                                                                                                for ($i = $startPage; $i <= $endPage; $i++) {
                                                                                                                    if ($i == $currentPage) {
                                                                                                                        echo '<li class="active"><span>' . $i . '</span></li>';
                                                                                                                    } else {
                                                                                                                        echo '<li><a href="products.php?type=' . $type . '&page=' . $i . '">' . $i . '</a></li>';
                                                                                                                    }
                                                                                                                }
                                                                                                            }

                                                                                                            if ($currentPage < $totalPages) {
                                                                                                                echo '<li class="pagination-next"><a href="?page=' . ($currentPage + 1) . '"> &gt;</a></li>';
                                                                                                            }

                                                                                                            ?>
















                                        </ul>

                                    </div>
                                    <div class="toolbar-amount">


                                        <span>Showing 1 to 9 of 13 items
                                        </span>
                                    </div>
                                </div>
                                <?php } ?>

                                <?php } else if ($_GET["type"] == "category") { ?>

                                <div class="row" id="custom-products">


                                    <?php
                                                                                    $catid = $_GET["catid"];
                                                                                    $cardsPerPage = 10;
                                                                                    $totalRecords = DatabaseManager::select("books", "count(id) as cid", "category_id=$catid")[0]["cid"];
                                                                                    $totalPages = ceil($totalRecords / $cardsPerPage); //paginaion loop limit &Workin
                                                                                    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
                                                                                    $offset = ($currentPage - 1) * $cardsPerPage;



                                                                                    $arru = DatabaseManager::select("books left join categories on categories.id=books.category_id", "books.id as ID, title as Title, image_name as Image ,category_id as catId,categories.name as catName", "category_id=$catid LIMIT $offset, $cardsPerPage");




                                                                                    for ($i = 0; $i < ((count($arru) > 10) ? 10 : count($arru)); $i++) {

                                                                                        $BookTitle = $arru[$i]["Title"];
                                                                                        $imagename = $arru[$i]["Image"];
                                                                                        $Bookid = $arru[$i]["ID"];
                                                                                        $catId = $arru[$i]["catId"];
                                                                                        $catName = $arru[$i]["catName"];
                                                                                        $htmlprodSec = '';
                                                                                        // ob_start();
                                                                                        ?>
                                    <!-- div -->

                                    <div class="product-layout product-list col-xs-12 product-item">
                                        <div class="product-thumb">
                                            <div class="item item1">
                                                <div class="item-inner">
                                                    <div class="caption-top">

                                                        <p class="manufacture-product">
                                                            <a href="../vendors@q=Little&#32;Green&#32;Works.php"
                                                                title="Little Green Works"><?php echo $catName ?></a>
                                                        </p>

                                                        <h4 class="product-name">
                                                            <a
                                                                href="pages/singleProductPage.php?productdetails=<?php echo urlencode(json_encode(["imagename" => $imagename, "BookTitle" => $BookTitle, "Bookid" => $Bookid, "catId" => $catId, "catName" => $catName])); //to decode this json use $productdetails = $_GET['productdetails'];then $productData = json_decode(urldecode($productdetails), true); ?>">
                                                                <?php echo $BookTitle ?>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div class="box-border">
                                                        <div class="image images-container">
                                                            <div class="inner">
                                                                <div class="box-label">
                                                                </div>
                                                                <div class="image rotate-image-container">

                                                                    <a href="../pages/singleProductPage.php?productdetails=<?php echo urlencode(json_encode(["imagename" => $imagename, "BookTitle" => $BookTitle, "Bookid" => $Bookid, "catId" => $catId, "catName" => $catName])); //to decode this json use $productdetails = $_GET['productdetails'];then $productData = json_decode(urldecode($productdetails), true); ?>"
                                                                        class="">
                                                                        <img class="img-responsive has-rotator img-default-image img-cate-1613090193460-collection-page"
                                                                            src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/<?php echo $imagename ?>"
                                                                            alt="<?php echo $Bookid ?>">




                                                                        <input type="hidden"
                                                                            value="//smartbook-theme.myshopify.com/images/products/11-700x700_458ce7bf-cb27-49db-88eb-882e4693f2b4_600x600.jpg?v=1552406840"
                                                                            class="img-default-1613090193460-collection-page" />













                                                                    </a>


                                                                </div>
                                                                <div class="action-links">
                                                                    <button class="button btn-cart " type="button"
                                                                        data-toggle="tooltip"
                                                                        data-loading-text="Loading..."
                                                                        title="Add to Cart"
                                                                        onclick="cart.add('14458099466292');">
                                                                        <span>Add to Cart</span>
                                                                    </button>


                                                                    <button
                                                                        class="btn-wishlist button btn-default wishlist-btn"
                                                                        data-product-handle="copy-of-a-wing-and-a-prayer"
                                                                        type="button" data-toggle="tooltip"
                                                                        title="Add to Wish List"
                                                                        data-original-title="Add to Wish List">
                                                                        <span>Add to Wish List</span>
                                                                    </button>


                                                                    <button class="button btn-compare" type="button"
                                                                        data-toggle="tooltip" title="View Details"
                                                                        onclick="location.href='/products/copy-of-a-wing-and-a-prayer';">
                                                                        <span>View Details</span>
                                                                    </button>

                                                                    <button class="button btn-quickview quickview"
                                                                        type="button" title="Quick View"
                                                                        data-toggle="modal" data-target="#productModal"
                                                                        data-book_id='<?php echo $Bookid ?>'
                                                                        data-original-title="Quick View">
                                                                        <span>Quick View</span>
                                                                    </button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- image -->
                                                        <div class="caption">
                                                            <div class="inner  swtch">


                                                                <p class="product-des">



                                                                </p>

                                                                <div class="price-box">

                                                                    <p class="special-price"><span class="price"><span
                                                                                class=money>$13.99</span></span></p>
                                                                    <p class="old-price"><span class="price"><span
                                                                                class=money>$19.99</span></span></p>

                                                                </div>
                                                                <!-- price-container -->

                                                                <div class="ratings">
                                                                    <div class="rating-box">

                                                                        <span class="shopify-product-reviews-badge"
                                                                            data-id="1613090193460"></span>

                                                                    </div>
                                                                </div>







                                                                <div class="label-product label_sale">
                                                                    <span>-50%</span>
                                                                </div>






                                                            </div>
                                                        </div>
                                                        <!-- caption -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-thumb -->
                                    </div>





                                    <!-- div -->







                                    <!-- product-layout -->


                                    <?php } ?>


                                </div>




                                <?php if ($totalRecords > 10) {
                                                                    $type = $_GET["type"] ?>
                                <div class="toolbar toolbar-products toolbar-bottom" id="pagination">
                                    <div class="pages ajax_pagination">

                                        <ul class="pagination">
                                            <?php



                                                                                                            if ($currentPage > 1) {
                                                                                                                echo '<li class="pagination-next"><a href="?type=' . $type . '&page=' . ($currentPage - 1) . '"> &lt;</a></li>';
                                                                                                            }

                                                                                                            if ($totalPages <= 5) {
                                                                                                                // Display all available pages if there are 5 or fewer
                                                                                                                for ($i = 1; $i <= $totalPages; $i++) {
                                                                                                                    if ($i == $currentPage) {
                                                                                                                        echo '<li class="active"><span>' . $i . '</span></li>';
                                                                                                                    } else {
                                                                                                                        echo '<li><a href="products.php?type=' . $type . '&page=' . $i . '">' . $i . '</a></li>';
                                                                                                                    }
                                                                                                                }
                                                                                                            } else {
                                                                                                                // Display the current page and two pages before and after it
                                                                                                                $startPage = max(1, $currentPage - 2);
                                                                                                                $endPage = min($totalPages, $currentPage + 2);

                                                                                                                for ($i = $startPage; $i <= $endPage; $i++) {
                                                                                                                    if ($i == $currentPage) {
                                                                                                                        echo '<li class="active"><span>' . $i . '</span></li>';
                                                                                                                    } else {
                                                                                                                        echo '<li><a href="products.php?type=' . $type . '&page=' . $i . '">' . $i . '</a></li>';
                                                                                                                    }
                                                                                                                }
                                                                                                            }

                                                                                                            if ($currentPage < $totalPages) {
                                                                                                                echo '<li class="pagination-next"><a href="?page=' . ($currentPage + 1) . '"> &gt;</a></li>';
                                                                                                            }

                                                                                                            ?>
















                                        </ul>

                                    </div>
                                    <div class="toolbar-amount">


                                        <span>Showing 1 to 9 of 13 items
                                        </span>
                                    </div>
                                </div>
                                <?php } ?>

                                <?php }?>

















                                <?php
                                } else { ?>
                                <div class="row" id="custom-products">
                                    <?php

                                                    $cardsPerPage = 10;
                                                    $totalRecords = DatabaseManager::select("books", "count(id) as cid")[0]["cid"];
                                                    $totalPages = ceil($totalRecords / $cardsPerPage); //paginaion loop limit &Workin
                                                    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
                                                    $offset = ($currentPage - 1) * $cardsPerPage;
                                                    $query = "SELECT * FROM your_table ";


                                                    $arru = DatabaseManager::select("books left join categories on categories.id=books.category_id LIMIT $offset, $cardsPerPage", "books.id as ID, title as Title, image_name as Image ,category_id as catId,categories.name as catName");




                                                    for ($i = 0; $i < ((count($arru) > 10) ? 10 : count($arru)); $i++) {

                                                        $BookTitle = $arru[$i]["Title"];
                                                        $imagename = $arru[$i]["Image"];
                                                        $Bookid = $arru[$i]["ID"];
                                                        $catId = $arru[$i]["catId"];
                                                        $catName = $arru[$i]["catName"];
                                                        $htmlprodSec = '';
                                                        // ob_start();
                                                        ?>
                                    <!-- div -->

                                    <div class="product-layout product-list col-xs-12 product-item">
                                        <div class="product-thumb">
                                            <div class="item item1">
                                                <div class="item-inner">
                                                    <div class="caption-top">

                                                        <p class="manufacture-product">
                                                            <a href="../vendors@q=Little&#32;Green&#32;Works.php"
                                                                title="Little Green Works"><?php echo $catName ?></a>
                                                        </p>

                                                        <h4 class="product-name">
                                                            <a
                                                                href="pages/singleProductPage.php?productdetails=<?php echo urlencode(json_encode(["imagename" => $imagename, "BookTitle" => $BookTitle, "Bookid" => $Bookid, "catId" => $catId, "catName" => $catName])); //to decode this json use $productdetails = $_GET['productdetails'];then $productData = json_decode(urldecode($productdetails), true); ?>">
                                                                <?php echo $BookTitle ?>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div class="box-border">
                                                        <div class="image images-container">
                                                            <div class="inner">
                                                                <div class="box-label">
                                                                </div>
                                                                <div class="image rotate-image-container">

                                                                    <a href="../pages/singleProductPage.php?productdetails=<?php echo urlencode(json_encode(["imagename" => $imagename, "BookTitle" => $BookTitle, "Bookid" => $Bookid, "catId" => $catId, "catName" => $catName])); //to decode this json use $productdetails = $_GET['productdetails'];then $productData = json_decode(urldecode($productdetails), true); ?>"
                                                                        class="">
                                                                        <img class="img-responsive has-rotator img-default-image img-cate-1613090193460-collection-page"
                                                                            src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/<?php echo $imagename ?>"
                                                                            alt="<?php echo $Bookid ?>">




                                                                        <input type="hidden"
                                                                            value="//smartbook-theme.myshopify.com/images/products/11-700x700_458ce7bf-cb27-49db-88eb-882e4693f2b4_600x600.jpg?v=1552406840"
                                                                            class="img-default-1613090193460-collection-page" />













                                                                    </a>


                                                                </div>
                                                                <div class="action-links">
                                                                    <button class="button btn-cart " type="button"
                                                                        data-toggle="tooltip"
                                                                        data-loading-text="Loading..."
                                                                        title="Add to Cart"
                                                                        onclick="cart.add('14458099466292');">
                                                                        <span>Add to Cart</span>
                                                                    </button>


                                                                    <button
                                                                        class="btn-wishlist button btn-default wishlist-btn"
                                                                        data-product-handle="copy-of-a-wing-and-a-prayer"
                                                                        type="button" data-toggle="tooltip"
                                                                        title="Add to Wish List"
                                                                        data-original-title="Add to Wish List">
                                                                        <span>Add to Wish List</span>
                                                                    </button>


                                                                    <button class="button btn-compare" type="button"
                                                                        data-toggle="tooltip" title="View Details"
                                                                        onclick="location.href='/products/copy-of-a-wing-and-a-prayer';">
                                                                        <span>View Details</span>
                                                                    </button>

                                                                    <button class="button btn-quickview quickview"
                                                                        type="button" title="Quick View"
                                                                        data-toggle="modal" data-target="#productModal"
                                                                        data-book_id='<?php echo $Bookid ?>'
                                                                        data-original-title="Quick View">
                                                                        <span>Quick View</span>
                                                                    </button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- image -->
                                                        <div class="caption">
                                                            <div class="inner  swtch">


                                                                <p class="product-des">



                                                                </p>

                                                                <div class="price-box">

                                                                    <p class="special-price"><span class="price"><span
                                                                                class=money>$13.99</span></span></p>
                                                                    <p class="old-price"><span class="price"><span
                                                                                class=money>$19.99</span></span></p>

                                                                </div>
                                                                <!-- price-container -->

                                                                <div class="ratings">
                                                                    <div class="rating-box">

                                                                        <span class="shopify-product-reviews-badge"
                                                                            data-id="1613090193460"></span>

                                                                    </div>
                                                                </div>







                                                                <div class="label-product label_sale">
                                                                    <span>-50%</span>
                                                                </div>






                                                            </div>
                                                        </div>
                                                        <!-- caption -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-thumb -->
                                    </div>





                                    <!-- div -->







                                    <!-- product-layout -->


                                    <?php } ?>
                                </div>

                                <?php if ($totalRecords > 10) {
                                                    $type = @$_GET["type"] ?>
                                <div class="toolbar toolbar-products toolbar-bottom" id="pagination">
                                    <div class="pages ajax_pagination">

                                        <ul class="pagination">
                                            <?php



                                                                            if ($currentPage > 1) {
                                                                                echo '<li class="pagination-next"><a href="?page=' . ($currentPage - 1) . '"> &lt;</a></li>';
                                                                            }

                                                                            if ($totalPages <= 5) {
                                                                                // Display all available pages if there are 5 or fewer
                                                                                for ($i = 1; $i <= $totalPages; $i++) {
                                                                                    if ($i == $currentPage) {
                                                                                        echo '<li class="active"><span>' . $i . '</span></li>';
                                                                                    } else {
                                                                                        echo '<li><a href="products.php?type=' . $type . '&page=' . $i . '">' . $i . '</a></li>';
                                                                                    }
                                                                                }
                                                                            } else {
                                                                                // Display the current page and two pages before and after it
                                                                                $startPage = max(1, $currentPage - 2);
                                                                                $endPage = min($totalPages, $currentPage + 2);

                                                                                for ($i = $startPage; $i <= $endPage; $i++) {
                                                                                    if ($i == $currentPage) {
                                                                                        echo '<li class="active"><span>' . $i . '</span></li>';
                                                                                    } else {
                                                                                        echo '<li><a href="products.php?type=' . $type . '&page=' . $i . '">' . $i . '</a></li>';
                                                                                    }
                                                                                }
                                                                            }

                                                                            if ($currentPage < $totalPages) {
                                                                                echo '<li class="pagination-next"><a href="?page=' . ($currentPage + 1) . '"> &gt;</a></li>';
                                                                            }

                                                                            ?>
















                                        </ul>

                                    </div>
                                    <div class="toolbar-amount">


                                        <span>Showing 1 to 9 of 13 items
                                        </span>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php } ?>


                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>


        <!-- End Content -->







        <?php include "../inc/QuickviewProduct.php" ?>
        <?php include "../inc/footer.php" ?>
        <?php //include "../inc/extras/products/scripts.php" ?>
        <?php include "../inc/custom_card_JQ.php" ?>

    </div>
</body>

</html>