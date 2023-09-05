<!DOCTYPE html>
<html dir="ltr" lang="en">

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
                    <li><a href="../index.php" title="Back to the frontpage">
                            Home
                        </a>
                    </li>

                    <li>


                        <a href="index.php@preview_theme_id=74460266548.php"><span>
                                search

                            </span></a>

                    </li>

                </ul>
                <!--End Breadcumb area -->
                <div class="row">
                    <div id="content" class="col-sm-12">
                        <div class="row">
                            <h1 class="page-heading"> <?php $q=@$_GET["q"]; echo (isset($_GET["q"]))?"Showing Reasults for : $q":"Search..."; ?></h1>

                        </div>
                        <div class="row">
                            <div id="shopify-section-1543060429425" class="shopify-section index-section">
                                <div class="main-row products-tab1  " data-section-id="1543060429425">
                                    <div class="container">
                                        <div class="row">
                                            <div class="main-col col-sm-12 col-md-12">
                                                <div class="row sub-row">
                                                    <div class="sub-col col-sm-12 col-md-12">
                                                        <div class="tt_tabsproduct_module product-tabs-container-slider multi-rows "
                                                            id="product_module1543060429425">


                                                            <?php if (isset($_GET["q"])) {
                                                                
                                                            ?>
                                                            <div class="box-style">
                                                                <div class="owl-container">
                                                                    <div class="tt-product">
                                                                        <div class="tab-content">
                                                                            
                                                                            <!-- feature product -->
                                                                            <div class="tab-container-1543060429425 owl-carousel owl-theme tab-pane fade active in"
                                                                                id="tab-15430604294250">



                                                                                <?php

                                                                                $sql = "SELECT categories.name, categories.id as cid ,books.id, books.title, books.image_name
                                                                                        FROM categories
                                                                                        RIGHT JOIN 
                                                                                        books ON categories.id = books.category_id 
                                                                                        where
                                                                                        categories.name like '%$q%' OR books.title like '%$q%'   ";

                                                                                $categories = DatabaseManager::query($sql);

                                                                                $arru = []; // Initialize the main array

                                                                                
                                                                                while ($category = mysqli_fetch_assoc($categories)) {
                                                                                    $catId = $category["id"];
                                                                                    $catName = $category["name"];  
                                                                                        $productArray = array(
                                                                                            "Title" => $category["title"],
                                                                                            "Image" => $category["image_name"],
                                                                                            "ID" => $category["id"],
                                                                                            "catId" => $catId,
                                                                                            "catName" => $catName
                                                                                        );

                                                                                        array_push($arru, $productArray); // Push the product array into $arru
                                                                                    
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

                                                                                    <div
                                                                                        class="product-layout grid-style  ">
                                                                                        <div
                                                                                            class="product-thumb transition">
                                                                                            <div class="item">
                                                                                                <div class="item-inner">
                                                                                                    <div
                                                                                                        class="caption-top">

                                                                                                        <p
                                                                                                            class="manufacture-product">
                                                                                                            <a href="collections/vendors@q=Amazona.php"
                                                                                                                title="<?php echo $catName ?>"><?php echo $catName ?></a>
                                                                                                        </p>

                                                                                                        <h4
                                                                                                            class="product-name">
                                                                                                            <a
                                                                                                                href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>singleProductPage.php?bookid=<?php echo $Bookid; ?>">
                                                                                                                <?php echo $BookTitle ?>
                                                                                                            </a>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class=" box-border">
                                                                                                        <div
                                                                                                            class="image images-container">

                                                                                                            <a href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>singleProductPage.php?bookid=<?php echo $Bookid; ?>"
                                                                                                                class="product-image">
                                                                                                                <img class="img-responsive has-rotator img-default-image img-cate-1613107134516-1543060429425"
                                                                                                                    src="../images/products/<?php echo ($imagename != null || $imagename != "") ? $imagename : "9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg@v=1552407244"; ?>"
                                                                                                                    alt="<?php echo $BookTitle ?>">




                                                                                                                <input
                                                                                                                    type="hidden"
                                                                                                                    value="//smartbook-theme.myshopify.com/images/products/9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg?v=1552407244"
                                                                                                                    class="img-default-1613107134516-1543060429425" />













                                                                                                            </a>
















                                                                                                            <div
                                                                                                                class="box-label">
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="action-links">
                                                                                                                <button
                                                                                                                    class="button btn-cart _addtocart"
                                                                                                                    type="button"
                                                                                                                    data-toggle="tooltip"
                                                                                                                    data-loading-text="Loading..."
                                                                                                                    title="Add to Cart"
                                                                                                                    data-original-title="<?php echo $Bookid ?>">
                                                                                                                    <span>Add
                                                                                                                        to
                                                                                                                        Cart</span>
                                                                                                                </button>


                                                                                                                <button
                                                                                                                    class="btn-wishlist _addWishlist button btn-default wishlist-btn"
                                                                                                                    data-product-handle="copy-of-when-the-doves-disappeared"
                                                                                                                    type="button"
                                                                                                                    data-toggle="tooltip"
                                                                                                                    title="Add to Wish List"
                                                                                                                    data-original-title="<?php echo $Bookid ?>">
                                                                                                                    <span>Add
                                                                                                                        to
                                                                                                                        Wish
                                                                                                                        List</span>
                                                                                                                </button>


                                                                                                                <button
                                                                                                                    class="button btn-compare"
                                                                                                                    type="button"
                                                                                                                    data-toggle="tooltip"
                                                                                                                    title="View Details"
                                                                                                                    onclick="location.href='/products/copy-of-when-the-doves-disappeared';">
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
                                                                                                                    <span>Quick
                                                                                                                        View</span>
                                                                                                                </button>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <!-- image -->
                                                                                                        <div
                                                                                                            class="caption">
                                                                                                            <div
                                                                                                                class="inner  swtch">

                                                                                                                <div
                                                                                                                    class="ratings">
                                                                                                                    <div
                                                                                                                        class="rating-box">

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

                                                                                                                <div
                                                                                                                    class="price-box">

                                                                                                                    <?php $price_saleprice = DatabaseManager::select("book_details", "price , sale_price", "Book_id=$Bookid");
                                                                                                                    foreach ($price_saleprice as $key => $value) {
                                                                                                                        $price = $value["price"];
                                                                                                                        $saleprice = $value["sale_price"]; ?>


                                                                                                                        <?php if ($saleprice !== "0.00" && (int) $price > (int) $saleprice) { ?>
                                                                                                                            <p
                                                                                                                                class="special-price">
                                                                                                                                <span
                                                                                                                                    class="price">
                                                                                                                                    <span
                                                                                                                                        class="money"
                                                                                                                                        data-currency-usd="$<?php echo $saleprice ?>">
                                                                                                                                        $<?php echo $saleprice ?>
                                                                                                                                    </span>
                                                                                                                                </span>
                                                                                                                            </p>
                                                                                                                        <?php } ?>
                                                                                                                        <p
                                                                                                                            class="old-price">
                                                                                                                            <span
                                                                                                                                class="price">
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
                                                                                                                            <span>-
                                                                                                                                <?php echo floor(((((int) $price) - ((int) $saleprice)) / ((int) $price)) * 100) ?>%
                                                                                                                            </span>
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

                                                                                        <div
                                                                                            class="product-layout grid-style  ">
                                                                                            <div
                                                                                                class="product-thumb transition">
                                                                                                <div class="item">
                                                                                                    <div class="item-inner">
                                                                                                        <div
                                                                                                            class="caption-top">

                                                                                                            <p
                                                                                                                class="manufacture-product">
                                                                                                                <a href="collections/vendors@q=Amazona.php"
                                                                                                                    title="<?php echo $catName ?>"><?php echo $catName ?></a>
                                                                                                            </p>

                                                                                                            <h4
                                                                                                                class="product-name">
                                                                                                                <a
                                                                                                                    href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>singleProductPage.php?bookid=<?php echo $Bookid; ?>">
                                                                                                                    <?php echo $BookTitle ?>
                                                                                                                </a>
                                                                                                            </h4>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class=" box-border">
                                                                                                            <div
                                                                                                                class="image images-container">

                                                                                                                <a href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>singleProductPage.php?bookid=<?php echo $Bookid; ?>"
                                                                                                                    class="product-image">
                                                                                                                    <img class="img-responsive has-rotator img-default-image img-cate-1613107134516-1543060429425"
                                                                                                                        src="../images/products/<?php echo ($imagename != null || $imagename != "") ? $imagename : "9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg@v=1552407244"; ?>"
                                                                                                                        alt="<?php echo $BookTitle ?>">




                                                                                                                    <input
                                                                                                                        type="hidden"
                                                                                                                        value="//smartbook-theme.myshopify.com/images/products/9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg?v=1552407244"
                                                                                                                        class="img-default-1613107134516-1543060429425" />













                                                                                                                </a>
















                                                                                                                <div
                                                                                                                    class="box-label">
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="action-links">
                                                                                                                    <button
                                                                                                                        class="button btn-cart 
            _addtocart" type="button" data-toggle="tooltip" data-loading-text="Loading..." title="Add to Cart" data-original-title="<?php echo $Bookid ?>"
                                                                                                                        data-useless-attr="cart.add('14458191544372');">
                                                                                                                        <span>Add
                                                                                                                            to
                                                                                                                            Cart</span>
                                                                                                                    </button>


                                                                                                                    <button
                                                                                                                        class="btn-wishlist _addWishlist button btn-default wishlist-btn"
                                                                                                                        data-product-handle="copy-of-when-the-doves-disappeared"
                                                                                                                        type="button"
                                                                                                                        data-toggle="tooltip"
                                                                                                                        title="Add to Wish List"
                                                                                                                        data-original-title="<?php echo $Bookid ?>">
                                                                                                                        <span>Add
                                                                                                                            to
                                                                                                                            Wish
                                                                                                                            List</span>
                                                                                                                    </button>


                                                                                                                    <button
                                                                                                                        class="button btn-compare"
                                                                                                                        type="button"
                                                                                                                        data-toggle="tooltip"
                                                                                                                        title="View Details"
                                                                                                                        onclick="location.href='/products/copy-of-when-the-doves-disappeared';">
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
                                                                                                                        <span>Quick
                                                                                                                            View</span>
                                                                                                                    </button>

                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <!-- image -->
                                                                                                            <div
                                                                                                                class="caption">
                                                                                                                <div
                                                                                                                    class="inner  swtch">

                                                                                                                    <div
                                                                                                                        class="ratings">
                                                                                                                        <div
                                                                                                                            class="rating-box">

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

                                                                                                                    <div
                                                                                                                        class="price-box">

                                                                                                                        <?php $price_saleprice = DatabaseManager::select("book_details", "price , sale_price", "Book_id=$Bookid");
                                                                                                                        foreach ($price_saleprice as $key => $value) {
                                                                                                                            $price = $value["price"];
                                                                                                                            $saleprice = $value["sale_price"]; ?>


                                                                                                                            <?php if ($saleprice !== "0.00" && (int) $price > (int) $saleprice) { ?>
                                                                                                                                <p
                                                                                                                                    class="special-price">
                                                                                                                                    <span
                                                                                                                                        class="price">
                                                                                                                                        <span
                                                                                                                                            class="money"
                                                                                                                                            data-currency-usd="$<?php echo $saleprice ?>">
                                                                                                                                            $<?php echo $saleprice ?>
                                                                                                                                        </span>
                                                                                                                                    </span>
                                                                                                                                </p>
                                                                                                                            <?php } ?>
                                                                                                                            <p
                                                                                                                                class="old-price">
                                                                                                                                <span
                                                                                                                                    class="price">
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
                                                                                                                                <span>-
                                                                                                                                    <?php echo floor(((((int) $price) - ((int) $saleprice)) / ((int) $price)) * 100) ?>%
                                                                                                                                </span>
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


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <?php }else{
                                                                echo "search something by categiry or book title";
                                                            }?>
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
                        </div>

                    </div>

                </div>


            </div>

        </div>


        <!-- End Content -->







        <?php include "../inc/QuickviewProduct.php" ?>
        <?php include "../inc/footer.php" ?>
        <?php include "../inc/custom_card_JQ.php" ?>

    </div>
</body>

</html>