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
                    <li><a href="../index.php" title="Back to the frontpage">
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


                                                            <a class="a-filter add-filter _product_cat_Select "
                                                                data-original-id-for-products="All" style="color:#62ab00">All (
                                                                <?php echo DatabaseManager::select("books", "count(id) as cfp")[0]["cfp"] ?>
                                                                items)</a>
                                                            <a class="a-filter add-filter _product_cat_Select "
                                                                data-original-id-for-products="Featured Products">Featured
                                                                Products (
                                                                <?php echo DatabaseManager::select("books", "count(id) as cfp", "category_id=1")[0]["cfp"] ?>
                                                                items)</a>





                                                            <a class="a-filter add-filter _product_cat_Select "
                                                                data-original-id-for-products="Most Viewed">Most Viewed
                                                                (<?php echo DatabaseManager::select("books", "count(views) as cfp", "views>100")[0]["cfp"] ?>
                                                                items)</a>



                                                            <a class="a-filter add-filter _product_cat_Select "
                                                                data-original-id-for-products="New Arrivals">New
                                                                Arrivals
                                                                (<?php echo DatabaseManager::select("categories RIGHT JOIN books ON categories.id = books.category_id", "count(books.id) as cfp", "date_added >= DATE_SUB(NOW(), INTERVAL 30 DAY)")[0]["cfp"] ?>
                                                                items)</a>



                                                            <a class="a-filter add-filter _product_cat_Select "
                                                                data-original-id-for-products="Special offer">
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

                                                                echo "<a  data-original-id-for-products=\"category\"
                                                                data-original-Catid-for-products=\"$catid\"
                                                                data-original-Catname-for-products=\"$catname\"
                                                                          class=\" _product_cat_Select\"
                                                                          title=\"$catname\">
                                                                          
                                                                          $catname ( " .
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
                                    <a>
                                        <img src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "" : "../"; ?>cdn/shop/files/img-sidebar.jpg@v=1613707786"
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
                                    <img src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "" : "../"; ?>cdn/shop/files/category-image-870x371_870x371.jpg@v=1613707787"
                                        alt="Products" title="Products" class="img-thumbnail" />
                                </div>

                                <h1 class="category-name" id="_category-name">
                                   Products
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
                                            data-toggle="tooltip" id="_a" title="3">3</button>
                                        <button type="button"
                                            onclick="category_view.changeView('grid', 4, 'btn-grid-4')"
                                            class="btn btn-default btn-custom-view btn-grid btn-grid-4"
                                            data-toggle="tooltip" title="4">4</button>
                                        <button type="button"
                                            onclick="category_view.changeView('grid', 5, 'btn-grid-5')"
                                            class="btn btn-default btn-custom-view btn-grid btn-grid-5"
                                            data-toggle="tooltip" title="5">5</button>

                                        <input type="hidden" id="category-view-type" value="grid" />
                                        <input type="hidden" id="category-grid-cols" value="3" />
                                    </div>
                                    <div class="toolbar-amount">


                                    </div>
                                </div>
                                <div id="_productsHtmlDiv">
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
                                                                    href<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>singleProductPage.php?bookid=<?php echo $Bookid ?>">
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

                                                                        <a href="../pages/singleProductPage.php?bookid=<?php echo $Bookid ?>"
                                                                            class="">
                                                                            <img class="img-responsive has-rotator img-default-image img-cate-1613090193460-collection-page"
                                                                                src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "" : "../"; ?>images/products/<?php echo $imagename ?>"
                                                                                alt="<?php echo $Bookid ?>">




                                                                            <input type="hidden"
                                                                                value="//smartbook-theme.myshopify.com/images/products/11-700x700_458ce7bf-cb27-49db-88eb-882e4693f2b4_600x600.jpg?v=1552406840"
                                                                                class="img-default-1613090193460-collection-page" />













                                                                        </a>


                                                                    </div>
                                                                    <div class="action-links">
                                                                        <button class="button btn-cart 
    _addtocart" type="button" data-toggle="tooltip" data-loading-text="Loading..." title="Add to Cart"
                                                                            data-original-title="<?php echo $Bookid ?>"
                                                                            data-useless-attr="cart.add('14458099466292');">
                                                                            <span>Add to Cart</span>
                                                                        </button>


                                                                        <button
                                                                            class="btn-wishlist _addWishlist button btn-default "
                                                                            data-product-handle="copy-of-a-wing-and-a-prayer"
                                                                            type="button" data-toggle="tooltip"
                                                                            title="Add to Wish List"
                                                                            data-original-title="<?php echo $Bookid ?>">
                                                                            <span>Add to Wish List</span>
                                                                        </button>


                                                                        <button class="button btn-compare" type="button"
                                                                            data-toggle="tooltip" title="View Details"
                                                                            onclick="location.href='singleProductPage.php?bookid=<?php echo $Bookid ?>';">
                                                                            <span>View Details</span>
                                                                        </button>

                                                                        <button class="button btn-quickview quickview"
                                                                            type="button" title="Quick View"
                                                                            data-toggle="modal"
                                                                            data-target="#productModal"
                                                                            data-book_id='<?php echo $Bookid ?>'
                                                                            data-original-title="Quick View">
                                                                            <span>Quick View</span>
                                                                        </button>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- image -->
                                                            <div class="caption">


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
                                                                <div class="label-product label_sale">
                                                                    <span>-<?php echo floor(((((int) $price) - ((int) $saleprice)) / ((int) $price)) * 100) ?>%</span>
                                                                </div>
                                                                <?php }
                                                                                                } ?>






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
                                        ?>
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
                                                                echo '<li><a href="products.php?page=' . $i . '">' . $i . '</a></li>';
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
                                                                echo '<li><a href="products.php?page=' . $i . '">' . $i . '</a></li>';
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
    <?php include "../inc/newsletterpopup.php"; ?>
    <?php include "../inc/scripts.php" ?>
    <?php include "../inc/custom_card_JQ.php" ?>
    <script>
    $(document).ready(() => {
        $("._product_cat_Select").on("click", (e) => {
            let clickedbtn = e.target;
            let attr = clickedbtn.getAttribute("data-original-id-for-products");

            console.log(clickedbtn);
            
            $("._product_cat_Select").removeAttr("style")
            
            clickedbtn.setAttribute("style", "color:#62ab00")
            if(clickedbtn.hasAttribute("data-original-Catid-for-products")){
                let catId=clickedbtn.getAttribute("data-original-Catid-for-products");
                let catname=clickedbtn.getAttribute("data-original-Catname-for-products");
                $.ajax({
                    url: '../Workshop.php',
                    method: 'GET',
                    data: {
                        type: attr,
                        catid:catId
                 
                    },
                    success: (e) => {
                        console.log(e);
                        $("#_productsHtmlDiv").html(e)
                        $("#_a").click(); 
                        $("#_category-name").html(attr+" :"+catname);
           
                    },error:(e)=>{
                        console.log("error: "+e);
                    }
                })
            }else{
                $.ajax({
                    url: '../Workshop.php',
                    method: 'GET',
                    data: {
                        type: attr
                    },
                    success: (e) => {
                        console.log(e);
                        $("#_productsHtmlDiv").html(e)
                        $("#_a").click();
                        if (attr!="All") {
                            $("#_category-name").html(attr);
                        }else{
                            $("#_category-name").html("Products");
    
                        }
                    },error:(e)=>{
                        console.log("error: "+e);
                    }
                })

            };
            
        })
    })
    </script>
    <?php if(isset($_GET["type"])){
        ?>
        <script>
            $(document).ready(()=>{
                let getval="<?php echo $_GET["type"]?>";
                console.log("hiiiiii");
                if (getval=="category") {
                    let getid="<?php echo $_GET["catid"]?>";
                    $('[data-original-Catid-for-products="<?php echo $_GET["catid"] ?>"]').click();
                    
                }else{
                    $('[data-original-id-for-products="<?php echo $_GET["type"] ?>"]').click();

                }
            })
        </script>
        <?php
        } ?>

    </div>
</body>

</html>