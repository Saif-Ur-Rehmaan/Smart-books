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

<body class="
               product-product product-details
                home1">
    <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
    <div class="wrapper">
        <div id="shopify-section-header" class="shopify-section">
            <!--Start of Header Area-->
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

        <div id="shopify-section-product-page" class="shopify-section">
            <!--Product Details Area Start-->





            <div class="container" id="product-product" itemscope itemtype="http://schema.org/Product">





                <!-- Breadcumb area start -->
                <ul class="breadcrumb">
                    <li><a href="../index.php" title="Back to the frontpage">
                            Home
                        </a>
                    </li>



                    <li><a href="../collections/vendors/products/a-wing-and-a-prayer.html"><span><?php $bookid=$_GET["bookid"]; echo DatabaseManager::select("books","title","id=$bookid")?></span></a></li>


                </ul>
                <!--End Breadcumb area -->


                <meta itemprop="mpn" content="1613076168756" />
                <meta itemprop="url" content="https://smartbook-theme.myshopify.com/products/a-wing-and-a-prayer">
                <meta itemprop="image"
                    content="//smartbook-theme.myshopify.com/images/products/2-700x700_grande.jpg?v=1552406461">
                <meta itemprop="description" content="<p>Landed gentry cesar romero by jingo. Nostrilis tickler albert einstein, super mario id educated cesar romero tip top old bean landed gentry don’t panic by jingo. Nostrilis tickler albert einstein dali, albert einstein tip top old bean tom selleck Nostrilis tickler id by jingo. don’t panic prostate cancer Sergeant major dali landed gentry hair trimmer cesar romero super mario educated?</p>
            <p>Super mario top gun freestyle, freestyle che guevara jolly good show bogie basket super mario top gun face mop, Droopy top gun che guevara Fallen eyebrow jolly good show freestyle testosterone trophy Sergeant major face mop bogie basket dickie davies elit super mario.</p>
            <p>Movember Nostrilis tickler magnum pi louis xiii professor plum graeme souness sweat irrigator,, ding-dong louis xiii socially mobile louis xiii movember graeme souness magnum pi sweat irrigator, Nostrilis tickler professor plum theodore roosevelt andrew weatherall. Circus strongman mark lawrenson admiral, dick dastardly admiral circus strongman stiff upper lip fu manchu hairy kiss. Nostrilis tickler mark lawrenson, circus strongman admiral Nostrilis tickler saddam hussein mark lawrenson sweat irrigator, cigars hairy kiss. stiff upper lip burt reynolds fu manchu dick dastardly.</p>
            [deal] 2020-10-11[/deal]">
                <meta itemprop="sku" content="123">
                <div itemprop="brand" itemtype="http://schema.org/Thing" itemscope>
                    <meta itemprop="name" content="Little Green Works" />
                </div>
                <div itemprop="offers" itemtype="http://schema.org/Offer" itemscope>
                    <link itemprop="url" href="../collections/vendors/products/a-wing-and-a-prayer.html" />
                    <meta itemprop="availability" content="https://schema.org/InStock" />
                    <meta itemprop="priceCurrency" content="USD" />
                    <meta itemprop="price" content="14.99" />
                </div>
                <div class="row">
                    <div id="content" class="col-sm-12">
                        <div class="row">

                            <div class="product-image-main col-sm-6">
                                <input type="hidden" id="check-use-zoom" value="1" />
                                <input type="hidden" id="light-box-position" value="1" />
                                <input type="hidden" id="product-identify" value="1613076168756" />
                                <div class="lightbox-container"></div>


                                <div class="product-zoom-image">
                                    <a href="../images/products/2-700x700.jpg@v=1552406461"
                                        class="cloud-zoom main-image" id="product-cloud-zoom"
                                        style="width: 700px; height: 700px;"
                                        rel="showTitle: false ,zoomWidth:700,zoomHeight:700,adjustX: 0,position:'inside' ">
                                        <img src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/2-700x700_700x700_crop_center.jpg@v=1552406461"
                                            title="A WING and a PRAYER - Morano" alt="A WING and a PRAYER - Morano" />
                                    </a>
                                </div>
                                <div class="additional-images owl-carousel owl-theme">


                                    <div class="item">
                                        <a class="cloud-zoom-gallery sub-image" id="product-image-default"
                                            href="../images/products/2-700x700.jpg@v=1552406461"
                                            title="A WING and a PRAYER - Morano"
                                            rel="useZoom: 'product-cloud-zoom', smallImage: '//smartbook-theme.myshopify.com/images/products/2-700x700_700x700.jpg?v=1552406461'"
                                            data-pos="1">
                                            <img src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/2-700x700_700x700.jpg@v=1552406461"
                                                title="A WING and a PRAYER - Morano"
                                                alt="A WING and a PRAYER - Morano" />
                                        </a>
                                    </div>

                                    <div class="item">
                                        <a class="cloud-zoom-gallery sub-image" id="product-image-options-"
                                            href="../images/products/1-700x700.jpg@v=1552406462"
                                            title="A WING and a PRAYER - Morano"
                                            rel="useZoom: 'product-cloud-zoom', smallImage: '//smartbook-theme.myshopify.com/images/products/1-700x700_700x700.jpg?v=1552406462'"
                                            data-pos="2">
                                            <img src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/1-700x700_700x700.jpg@v=1552406462"
                                                title="A WING and a PRAYER - Morano"
                                                alt="A WING and a PRAYER - Morano" />
                                        </a>
                                    </div>

                                    <div class="item">
                                        <a class="cloud-zoom-gallery sub-image" id="product-image-options-"
                                            href="../images/products/5-700x700.jpg@v=1552406463"
                                            title="A WING and a PRAYER - Morano"
                                            rel="useZoom: 'product-cloud-zoom', smallImage: '//smartbook-theme.myshopify.com/images/products/5-700x700_700x700.jpg?v=1552406463'"
                                            data-pos="3">
                                            <img src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/5-700x700_700x700.jpg@v=1552406463"
                                                title="A WING and a PRAYER - Morano"
                                                alt="A WING and a PRAYER - Morano" />
                                        </a>
                                    </div>

                                    <div class="item">
                                        <a class="cloud-zoom-gallery sub-image" id="product-image-options-"
                                            href="../images/products/6-700x700.jpg@v=1552406464"
                                            title="A WING and a PRAYER - Morano"
                                            rel="useZoom: 'product-cloud-zoom', smallImage: '//smartbook-theme.myshopify.com/images/products/6-700x700_700x700.jpg?v=1552406464'"
                                            data-pos="4">
                                            <img src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/6-700x700_700x700.jpg@v=1552406464"
                                                title="A WING and a PRAYER - Morano"
                                                alt="A WING and a PRAYER - Morano" />
                                        </a>
                                    </div>

                                    <div class="item">
                                        <a class="cloud-zoom-gallery sub-image" id="product-image-options-"
                                            href="../images/products/9-700x700.jpg@v=1552406466"
                                            title="A WING and a PRAYER - Morano"
                                            rel="useZoom: 'product-cloud-zoom', smallImage: '//smartbook-theme.myshopify.com/images/products/9-700x700_700x700.jpg?v=1552406466'"
                                            data-pos="5">
                                            <img src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/9-700x700_700x700.jpg@v=1552406466"
                                                title="A WING and a PRAYER - Morano"
                                                alt="A WING and a PRAYER - Morano" />
                                        </a>
                                    </div>

                                    <div class="item">
                                        <a class="cloud-zoom-gallery sub-image" id="product-image-options-"
                                            href="../images/products/11-700x700.jpg@v=1552406467"
                                            title="A WING and a PRAYER - Morano"
                                            rel="useZoom: 'product-cloud-zoom', smallImage: '//smartbook-theme.myshopify.com/images/products/11-700x700_700x700.jpg?v=1552406467'"
                                            data-pos="6">
                                            <img src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/11-700x700_700x700.jpg@v=1552406467"
                                                title="A WING and a PRAYER - Morano"
                                                alt="A WING and a PRAYER - Morano" />
                                        </a>
                                    </div>

                                    <div class="item">
                                        <a class="cloud-zoom-gallery sub-image" id="product-image-options-"
                                            href="../images/products/14-700x700.jpg@v=1552406468"
                                            title="A WING and a PRAYER - Morano"
                                            rel="useZoom: 'product-cloud-zoom', smallImage: '//smartbook-theme.myshopify.com/images/products/14-700x700_700x700.jpg?v=1552406468'"
                                            data-pos="7">
                                            <img src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/14-700x700_700x700.jpg@v=1552406468"
                                                title="A WING and a PRAYER - Morano"
                                                alt="A WING and a PRAYER - Morano" />
                                        </a>
                                    </div>

                                    <div class="item">
                                        <a class="cloud-zoom-gallery sub-image" id="product-image-options-"
                                            href="../images/products/15-700x700.jpg@v=1552406469"
                                            title="A WING and a PRAYER - Morano"
                                            rel="useZoom: 'product-cloud-zoom', smallImage: '//smartbook-theme.myshopify.com/images/products/15-700x700_700x700.jpg?v=1552406469'"
                                            data-pos="8">
                                            <img src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/15-700x700_700x700.jpg@v=1552406469"
                                                title="A WING and a PRAYER - Morano"
                                                alt="A WING and a PRAYER - Morano" />
                                        </a>
                                    </div>

                                </div>
                                <!-- end wrapper-img-additional -->
                            </div>
                            <!-- <div class="col-sm-6 product-info-main"> -->
                            <div class="col-sm-6 product-info-main">
                                <div class="inner">

                                    <p class="product-tag">Tags:



                                        <a href="../collections/all/book.html">book</a>












                                    </p>

                                    <h1 class="product-name" itemprop="name">A WING and a PRAYER - Morano</h1>
                                    <ul class="list-unstyled">

                                        <li>Brand: <a href="../collections/vendors@q=Little&#32;Green&#32;Works.html"
                                                title="Little Green Works">Little Green Works</a></li>

                                        <link itemprop="availability" href="http://schema.org/InStock">
                                        <li>Availability:
                                            <script>
                                            var inv_qty = {};

                                            inv_qty[14458009550900] = 10;

                                            inv_qty[14458071351348] = 10;

                                            inv_qty[14458071384116] = 10;
                                            </script>


                                            <span class="ex-text">In Stock</span>


                                        </li>


                                        <li class="skuvariant">SKU:
                                            <span class="variant-sku">123</span>
                                        </li>

                                    </ul>
                                    <div class="price-box">

                                        <p class="special-price"><span class="price" id="productPrice"><span
                                                    class=money>$14.99</span></span></p>
                                        <p class="old-price"><span class="price" id="comparePrice"><span
                                                    class=money>$19.99</span></span></p>

                                    </div>
                                    <div class="ratings">
                                        <div class="rating-box">

                                            <span class="shopify-product-reviews-badge" data-id="1613076168756"></span>

                                        </div>
                                    </div>
                                    <!-- end-rating -->

                                    <p class="short-des">


                                        Landed gentry cesar romero by jingo. Nostrilis tickler albert einstein, super
                                        mario id educated cesar romero tip top old bean landed gentry don’t panic by
                                        jingo. Nostrilis tickler albert einstein dali, albert einstein tip top old bean
                                        tom selleck Nostrilis tickler id by jingo. don’t panic prostate cancer Sergeant
                                        major...

                                    </p>


                                    <div class="item-inner">
                                        <div class="caption">
                                            <div id="Countdown1613076168756" class="box-timer cc pp"></div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                    $(function() {
                                        $('#Countdown1613076168756').countdown({
                                            until: new Date(' 2020-10-11'),
                                            labels: ['Years', 'Months ', 'Weeks', 'Days', 'Hrs', 'Mins',
                                                'Secs'
                                            ],
                                            labels1: ['Year', 'Month ', 'Week', 'Day', 'Hr', 'Min',
                                                'Sec'
                                            ],
                                        });
                                    });
                                    </script>

                                    <div id="product">
                                        <form action="https://smartbook-theme.myshopify.com/cart/add" method="post"
                                            enctype="multipart/form-data" id="form_buy" name="form_buy">
                                            <div class="form-group">
                                                <select name="id" id="productSelect" class="form-control">


                                                    <option selected="selected" data-sku="123" value="14458009550900">
                                                        Hard - <span class=money>$14.99 USD</span></option>



                                                    <option data-sku="456" value="14458071351348">Soft - <span
                                                            class=money>$10.99 USD</span></option>



                                                    <option data-sku="789" value="14458071384116">Audio - <span
                                                            class=money>$9.99 USD</span></option>


                                                </select>

















                                                <style>
                                                label[for="product-select-option-0"] {
                                                    display: none;
                                                }

                                                #product-select-option-0 {
                                                    display: none;
                                                }

                                                #product-select-option-0+.custom-style-select-box {
                                                    display: none !important;
                                                }
                                                </style>
                                                <script>
                                                $(window).load(function() {
                                                    $('.selector-wrapper:eq(0)').hide();
                                                });
                                                </script>






                                                <div class="swatch clearfix" data-option-index="0">
                                                    <div class="header">Copy</div>







                                                    <div data-value="Hard" class="swatch-element hard available">

                                                        <input id="swatch-0-hard" type="radio" name="option-0"
                                                            value="Hard" checked />

                                                        <label for="swatch-0-hard">
                                                            Hard
                                                            <img class="crossed-out"
                                                                src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>cdn/shop/t/16/assets/soldout.png@v=169392025580765019841562343333" />
                                                        </label>

                                                    </div>


                                                    <script>
                                                    jQuery('.swatch[data-option-index="0"] .hard').removeClass(
                                                        'soldout').addClass('available').find(':radio').removeAttr(
                                                        'disabled');
                                                    </script>







                                                    <div data-value="Soft" class="swatch-element soft available">

                                                        <input id="swatch-0-soft" type="radio" name="option-0"
                                                            value="Soft" />

                                                        <label for="swatch-0-soft">
                                                            Soft
                                                            <img class="crossed-out"
                                                                src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>cdn/shop/t/16/assets/soldout.png@v=169392025580765019841562343333" />
                                                        </label>

                                                    </div>


                                                    <script>
                                                    jQuery('.swatch[data-option-index="0"] .soft').removeClass(
                                                        'soldout').addClass('available').find(':radio').removeAttr(
                                                        'disabled');
                                                    </script>







                                                    <div data-value="Audio" class="swatch-element audio available">

                                                        <input id="swatch-0-audio" type="radio" name="option-0"
                                                            value="Audio" />

                                                        <label for="swatch-0-audio">
                                                            Audio
                                                            <img class="crossed-out"
                                                                src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>cdn/shop/t/16/assets/soldout.png@v=169392025580765019841562343333" />
                                                        </label>

                                                    </div>


                                                    <script>
                                                    jQuery('.swatch[data-option-index="0"] .audio').removeClass(
                                                        'soldout').addClass('available').find(':radio').removeAttr(
                                                        'disabled');
                                                    </script>


                                                </div>






                                            </div>
                                            <div class="form-group">

                                                <label class="control-label" for="Quantity">Qty:</label>
                                                <input type="text" name="quantity" value="1" size="2" id="Quantity"
                                                    onkeyup="updatecartsticky(1)" class="form-control" />


                                                <span id="variantQuantity" class="variant-quantity hidden"></span>


                                                <button class="btn button button-cart" type="button" id="button-cart"
                                                    data-loading-text="Loading...">
                                                    Add to Cart
                                                </button>


                                                <button class="btn button button-cart"
                                                    style="clear:none;margin-left:15px;padding:0 55px;" type="button"
                                                    id="button-cart-buy" data-loading-text="Loading...">
                                                    Buy Now
                                                </button>



                                                <button
                                                    class="btn-wishlist _addWishlist button btn-default wishlist-btn"
                                                    data-product-handle="a-wing-and-a-prayer" type="button"
                                                    data-toggle="tooltip" title="Add to Wish List"
                                                    data-original-title="<?php echo $Bookid ?>">
                                                    <span>Add to Wish List</span>
                                                </button>


                                            </div>
                                        </form>
                                        <!-- end-button -->
                                    </div>



                                    <!-- AddThis Button BEGIN -->
                                    <div class="addthis_toolbox addthis_default_style"
                                        data-url="/products/a-wing-and-a-prayer"><a class="addthis_button_facebook_like"
                                            fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a
                                            class="addthis_button_pinterest_pinit"></a> <a
                                            class="addthis_counter addthis_pill_style"></a></div>
                                    <script type="text/javascript"
                                        src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e">
                                    </script>
                                    <!-- AddThis Button END -->

                                </div>
                            </div>

                        </div>
                        <div class="product-info-detailed">
                            <ul class="nav nav-tabs">
                                <li role="presentation" class="active">
                                    <a href="../collections/vendors/products/a-wing-and-a-prayer.html#description"
                                        aria-controls="description" role="tab" data-toggle="tab">Description</a>
                                </li>

                                <li role="presentation"><a
                                        href="../collections/vendors/products/a-wing-and-a-prayer.html#reviews"
                                        aria-controls="reviews" role="tab" data-toggle="tab">Reviews</a></li>


                                <li role="presentation"><a
                                        href="../collections/vendors/products/a-wing-and-a-prayer.html#data"
                                        aria-controls="data" role="tab" data-toggle="tab">Custom Tab</a></li>


                            </ul>
                            <div class="tab-content">
                                <div class="mobtab" role="presentation" class="active"><a
                                        href="../collections/vendors/products/a-wing-and-a-prayer.html#description"
                                        aria-controls="description" role="tab" data-toggle="tab">Description</a></div>
                                <div role="tabpanel" class="tab-pane active" id="description">
                                    <p>

                                    <p>Landed gentry cesar romero by jingo. Nostrilis tickler albert einstein, super
                                        mario id educated cesar romero tip top old bean landed gentry don’t panic by
                                        jingo. Nostrilis tickler albert einstein dali, albert einstein tip top old bean
                                        tom selleck Nostrilis tickler id by jingo. don’t panic prostate cancer Sergeant
                                        major dali landed gentry hair trimmer cesar romero super mario educated?</p>
                                    <p>Super mario top gun freestyle, freestyle che guevara jolly good show bogie basket
                                        super mario top gun face mop, Droopy top gun che guevara Fallen eyebrow jolly
                                        good show freestyle testosterone trophy Sergeant major face mop bogie basket
                                        dickie davies elit super mario.</p>
                                    <p>Movember Nostrilis tickler magnum pi louis xiii professor plum graeme souness
                                        sweat irrigator,, ding-dong louis xiii socially mobile louis xiii movember
                                        graeme souness magnum pi sweat irrigator, Nostrilis tickler professor plum
                                        theodore roosevelt andrew weatherall. Circus strongman mark lawrenson admiral,
                                        dick dastardly admiral circus strongman stiff upper lip fu manchu hairy kiss.
                                        Nostrilis tickler mark lawrenson, circus strongman admiral Nostrilis tickler
                                        saddam hussein mark lawrenson sweat irrigator, cigars hairy kiss. stiff upper
                                        lip burt reynolds fu manchu dick dastardly.</p>

                                    </p>
                                </div>

                                <div class="mobtab" role="presentation"><a
                                        href="../collections/vendors/products/a-wing-and-a-prayer.html#reviews"
                                        aria-controls="reviews" role="tab" data-toggle="tab">Reviews</a></div>
                                <div role="tabpanel" class="tab-pane" id="reviews">
                                    <p>
                                    <div id="shopify-product-reviews" data-id="1613076168756"></div>

                                    </p>
                                </div>


                                <div class="mobtab" role="presentation"><a
                                        href="../collections/vendors/products/a-wing-and-a-prayer.html#data"
                                        aria-controls="data" role="tab" data-toggle="tab">Custom Tab</a></div>
                                <div role="tabpanel" class="tab-pane" id="data">
                                    You can add, text, html, images and videos as well to the tab from product settings
                                    area
                                </div>


                            </div>
                        </div>





                        <div class="related-products module-grid module-nav2">

                            <!--Featured Product Area Start-->
                            <div class="module-title">
                                <h2>Related Products</h2>
                            </div>
                            <div class="owl-container">
                                <div class="related-container tt-product owl-carousel owl-theme">





                                    <div class="row_items">










                                        <div class="product-layout grid-style  ">
                                            <div class="product-thumb transition">
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="caption-top">

                                                            <p class="manufacture-product">
                                                                <a href="../collections/vendors@q=Amazona.html"
                                                                    title="Amazona">Amazona</a>
                                                            </p>

                                                            <h4 class="product-name">
                                                                <a
                                                                    href="../collections/featured-products/products/copy-of-when-the-doves-disappeared.html">
                                                                    anthrplogie amérndene - franz
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div class="box-border">
                                                            <div class="image images-container">

                                                                <a href="../collections/special-offer/products/copy-of-when-the-doves-disappeared.html"
                                                                    class="product-image">
                                                                    <img class="img-responsive has-rotator img-default-image img-cate-1613107134516-product-page"
                                                                        src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg@v=1552407244"
                                                                        alt="anthrplogie amérndene - franz">




                                                                    <input type="hidden"
                                                                        value="//smartbook-theme.myshopify.com/images/products/9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg?v=1552407244"
                                                                        class="img-default-1613107134516-product-page" />













                                                                </a>















                                                                <div class="box-label"></div>
                                                                <div class="action-links">
                                                                    <button class="button btn-cart 
 _addtocart" type="button" data-toggle="tooltip" data-loading-text="Loading..." title="Add to Cart"
                                                                        data-original-title="<?php echo $Bookid ?>"
                                                                        data-useless-attr="cart.add('14458191544372');">
                                                                        <span>Add to Cart</span>
                                                                    </button>


                                                                    <button
                                                                        class="btn-wishlist _addWishlist button btn-default wishlist-btn"
                                                                        data-product-handle="copy-of-when-the-doves-disappeared"
                                                                        type="button" data-toggle="tooltip"
                                                                        title="Add to Wish List"
                                                                        data-original-title="<?php echo $Bookid ?>">
                                                                        <span>Add to Wish List</span>
                                                                    </button>


                                                                    <button class="button btn-compare" type="button"
                                                                        data-toggle="tooltip" title="View Details"
                                                                        onclick="location.href='/products/copy-of-when-the-doves-disappeared';">
                                                                        <span>View Details</span>
                                                                    </button>

                                                                    <button class="button btn-quickview quickview"
                                                                        type="button" title="Quick View"
                                                                        data-toggle="modal" data-target="#productModal"
                                                                        data-productinfo='{&quot;id&quot;:1613107134516,&quot;title&quot;:&quot;anthrplogie amérndene - franz&quot;,&quot;handle&quot;:&quot;copy-of-when-the-doves-disappeared&quot;,&quot;description&quot;:&quot;\u003cp\u003eLanded gentry cesar romero by jingo. Nostrilis tickler albert einstein, super mario id educated cesar romero tip top old bean landed gentry don’t panic by jingo. Nostrilis tickler albert einstein dali, albert einstein tip top old bean tom selleck Nostrilis tickler id by jingo. don’t panic prostate cancer Sergeant major dali landed gentry hair trimmer cesar romero super mario educated?\u003c\/p\u003e\n\u003cp\u003eSuper mario top gun freestyle, freestyle che guevara jolly good show bogie basket super mario top gun face mop, Droopy top gun che guevara Fallen eyebrow jolly good show freestyle testosterone trophy Sergeant major face mop bogie basket dickie davies elit super mario.\u003c\/p\u003e\n\u003cp\u003eMovember Nostrilis tickler magnum pi louis xiii professor plum graeme souness sweat irrigator,, ding-dong louis xiii socially mobile louis xiii movember graeme souness magnum pi sweat irrigator, Nostrilis tickler professor plum theodore roosevelt andrew weatherall. Circus strongman mark lawrenson admiral, dick dastardly admiral circus strongman stiff upper lip fu manchu hairy kiss. Nostrilis tickler mark lawrenson, circus strongman admiral Nostrilis tickler saddam hussein mark lawrenson sweat irrigator, cigars hairy kiss. stiff upper lip burt reynolds fu manchu dick dastardly.\u003c\/p\u003e\n[summary]This product has custom summary. You can add custom summaries to any product by adding text to product description enclosed in summary tag [\/summary]&quot;,&quot;published_at&quot;:&quot;2019-03-12T11:53:01-04:00&quot;,&quot;created_at&quot;:&quot;2019-03-12T12:13:49-04:00&quot;,&quot;vendor&quot;:&quot;Amazona&quot;,&quot;type&quot;:&quot;book&quot;,&quot;tags&quot;:[&quot;book&quot;,&quot;copy_audio&quot;,&quot;copy_hard&quot;,&quot;copy_soft&quot;,&quot;type_new&quot;,&quot;type_used&quot;],&quot;price&quot;:999,&quot;price_min&quot;:999,&quot;price_max&quot;:1199,&quot;available&quot;:true,&quot;price_varies&quot;:true,&quot;compare_at_price&quot;:1999,&quot;compare_at_price_min&quot;:1999,&quot;compare_at_price_max&quot;:1999,&quot;compare_at_price_varies&quot;:false,&quot;variants&quot;:[{&quot;id&quot;:14458191544372,&quot;title&quot;:&quot;Hard&quot;,&quot;option1&quot;:&quot;Hard&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;123&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;anthrplogie amérndene - franz - Hard&quot;,&quot;public_title&quot;:&quot;Hard&quot;,&quot;options&quot;:[&quot;Hard&quot;],&quot;price&quot;:1199,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:14458191577140,&quot;title&quot;:&quot;Soft&quot;,&quot;option1&quot;:&quot;Soft&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;456&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;anthrplogie amérndene - franz - Soft&quot;,&quot;public_title&quot;:&quot;Soft&quot;,&quot;options&quot;:[&quot;Soft&quot;],&quot;price&quot;:1099,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:14458191609908,&quot;title&quot;:&quot;Audio&quot;,&quot;option1&quot;:&quot;Audio&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;789&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;anthrplogie amérndene - franz - Audio&quot;,&quot;public_title&quot;:&quot;Audio&quot;,&quot;options&quot;:[&quot;Audio&quot;],&quot;price&quot;:999,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}}],&quot;images&quot;:[&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9.jpg?v=1552407244&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/5-700x700_f85ce5f1-4ed4-4a1a-914c-6625047a3018.jpg?v=1552407244&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/6-700x700_737d48b8-d768-462f-9c3f-f173e3eb9faf.jpg?v=1552407244&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/15-700x700_abe9069a-5367-44c8-ad55-f43c26ca9ae8.jpg?v=1552407244&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/11-700x700_de6832c9-9fbe-436e-b774-bdf420bd192f.jpg?v=1552407244&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/2-700x700_43fa57cb-71d2-4cee-90b0-e1bf9cf7810d.jpg?v=1552407244&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/1-700x700_08972f8b-04af-483d-ad2d-8bdc22fe9d47.jpg?v=1552407244&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/14-700x700_47a3fcc1-fa65-4b8c-9c2a-6075ffc93a7f.jpg?v=1552407244&quot;],&quot;featured_image&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9.jpg?v=1552407244&quot;,&quot;options&quot;:[&quot;Copy&quot;],&quot;media&quot;:[{&quot;alt&quot;:null,&quot;id&quot;:1547370070068,&quot;position&quot;:1,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9.jpg?v=1552407244&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9.jpg?v=1552407244&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547369873460,&quot;position&quot;:2,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/5-700x700_f85ce5f1-4ed4-4a1a-914c-6625047a3018.jpg?v=1552407244&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/5-700x700_f85ce5f1-4ed4-4a1a-914c-6625047a3018.jpg?v=1552407244&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547369906228,&quot;position&quot;:3,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/6-700x700_737d48b8-d768-462f-9c3f-f173e3eb9faf.jpg?v=1552407244&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/6-700x700_737d48b8-d768-462f-9c3f-f173e3eb9faf.jpg?v=1552407244&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547369938996,&quot;position&quot;:4,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/15-700x700_abe9069a-5367-44c8-ad55-f43c26ca9ae8.jpg?v=1552407244&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/15-700x700_abe9069a-5367-44c8-ad55-f43c26ca9ae8.jpg?v=1552407244&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547369971764,&quot;position&quot;:5,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/11-700x700_de6832c9-9fbe-436e-b774-bdf420bd192f.jpg?v=1552407244&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/11-700x700_de6832c9-9fbe-436e-b774-bdf420bd192f.jpg?v=1552407244&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547370004532,&quot;position&quot;:6,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/2-700x700_43fa57cb-71d2-4cee-90b0-e1bf9cf7810d.jpg?v=1552407244&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/2-700x700_43fa57cb-71d2-4cee-90b0-e1bf9cf7810d.jpg?v=1552407244&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547370037300,&quot;position&quot;:7,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/1-700x700_08972f8b-04af-483d-ad2d-8bdc22fe9d47.jpg?v=1552407244&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/1-700x700_08972f8b-04af-483d-ad2d-8bdc22fe9d47.jpg?v=1552407244&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547370102836,&quot;position&quot;:8,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/14-700x700_47a3fcc1-fa65-4b8c-9c2a-6075ffc93a7f.jpg?v=1552407244&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/14-700x700_47a3fcc1-fa65-4b8c-9c2a-6075ffc93a7f.jpg?v=1552407244&quot;,&quot;width&quot;:700}],&quot;content&quot;:&quot;\u003cp\u003eLanded gentry cesar romero by jingo. Nostrilis tickler albert einstein, super mario id educated cesar romero tip top old bean landed gentry don’t panic by jingo. Nostrilis tickler albert einstein dali, albert einstein tip top old bean tom selleck Nostrilis tickler id by jingo. don’t panic prostate cancer Sergeant major dali landed gentry hair trimmer cesar romero super mario educated?\u003c\/p\u003e\n\u003cp\u003eSuper mario top gun freestyle, freestyle che guevara jolly good show bogie basket super mario top gun face mop, Droopy top gun che guevara Fallen eyebrow jolly good show freestyle testosterone trophy Sergeant major face mop bogie basket dickie davies elit super mario.\u003c\/p\u003e\n\u003cp\u003eMovember Nostrilis tickler magnum pi louis xiii professor plum graeme souness sweat irrigator,, ding-dong louis xiii socially mobile louis xiii movember graeme souness magnum pi sweat irrigator, Nostrilis tickler professor plum theodore roosevelt andrew weatherall. Circus strongman mark lawrenson admiral, dick dastardly admiral circus strongman stiff upper lip fu manchu hairy kiss. Nostrilis tickler mark lawrenson, circus strongman admiral Nostrilis tickler saddam hussein mark lawrenson sweat irrigator, cigars hairy kiss. stiff upper lip burt reynolds fu manchu dick dastardly.\u003c\/p\u003e\n[summary]This product has custom summary. You can add custom summaries to any product by adding text to product description enclosed in summary tag [\/summary]&quot;}'
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

                                                                            <span class="shopify-product-reviews-badge"
                                                                                data-id="1613107134516"></span>

                                                                        </div>
                                                                    </div>

                                                                    <div class="price-box">

                                                                        <p class="special-price"><span
                                                                                class="price"><span
                                                                                    class=money>$11.99</span></span></p>
                                                                        <p class="old-price"><span class="price"><span
                                                                                    class=money>$19.99</span></span></p>

                                                                    </div>
                                                                    <!-- price-container -->






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
                                        <!-- product-layout -->
                                    </div>





                                    <div class="row_items">










                                        <div class="product-layout grid-style  ">
                                            <div class="product-thumb transition">
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="caption-top">

                                                            <p class="manufacture-product">
                                                                <a href="../collections/vendors@q=Amazona.html"
                                                                    title="Amazona">Amazona</a>
                                                            </p>

                                                            <h4 class="product-name">
                                                                <a
                                                                    href="../collections/featured-products/products/copy-of-the-dress-and-the-girl.html">
                                                                    A million little pieces - James Frey
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div class="box-border">
                                                            <div class="image images-container">

                                                                <a href="../collections/special-offer/products/copy-of-the-dress-and-the-girl.html"
                                                                    class="product-image">
                                                                    <img class="img-responsive has-rotator img-default-image img-cate-1613133152308-product-page"
                                                                        src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg@v=1552407966"
                                                                        alt="A million little pieces - James Frey">




                                                                    <input type="hidden"
                                                                        value="//smartbook-theme.myshopify.com/images/products/12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed_600x600.jpg?v=1552407966"
                                                                        class="img-default-1613133152308-product-page" />













                                                                </a>
















                                                                <div class="box-label"></div>
                                                                <div class="action-links">
                                                                    <button class="button btn-cart 
 _addtocart" type="button" data-toggle="tooltip" data-loading-text="Loading..." title="Add to Cart"
                                                                        data-original-title="<?php echo $Bookid ?>"
                                                                        data-useless-attr="cart.add('14458364690484');">
                                                                        <span>Add to Cart</span>
                                                                    </button>


                                                                    <button
                                                                        class="btn-wishlist _addWishlist button btn-default wishlist-btn"
                                                                        data-product-handle="copy-of-the-dress-and-the-girl"
                                                                        type="button" data-toggle="tooltip"
                                                                        title="Add to Wish List"
                                                                        data-original-title="<?php echo $Bookid ?>">
                                                                        <span>Add to Wish List</span>
                                                                    </button>


                                                                    <button class="button btn-compare" type="button"
                                                                        data-toggle="tooltip" title="View Details"
                                                                        onclick="location.href='/products/copy-of-the-dress-and-the-girl';">
                                                                        <span>View Details</span>
                                                                    </button>

                                                                    <button class="button btn-quickview quickview"
                                                                        type="button" title="Quick View"
                                                                        data-toggle="modal" data-target="#productModal"
                                                                        data-productinfo='{&quot;id&quot;:1613133152308,&quot;title&quot;:&quot;A million little pieces - James Frey&quot;,&quot;handle&quot;:&quot;copy-of-the-dress-and-the-girl&quot;,&quot;description&quot;:&quot;\u003cdiv\u003eSuper mario top gun freestyle, freestyle che guevara jolly good show bogie basket super mario top gun face mop, Droopy top gun che guevara Fallen eyebrow jolly good show freestyle testosterone trophy Sergeant major face mop bogie basket dickie davies elit super mario.\u003c\/div\u003e\n\u003cp\u003eLanded gentry cesar romero by jingo. Nostrilis tickler albert einstein, super mario id educated cesar romero tip top old bean landed gentry don’t panic by jingo. Nostrilis tickler albert einstein dali, albert einstein tip top old bean tom selleck Nostrilis tickler id by jingo. don’t panic prostate cancer Sergeant major dali landed gentry hair trimmer cesar romero super mario educated?\u003c\/p\u003e\n\u003cp\u003eMovember Nostrilis tickler magnum pi louis xiii professor plum graeme souness sweat irrigator,, ding-dong louis xiii socially mobile louis xiii movember graeme souness magnum pi sweat irrigator, Nostrilis tickler professor plum theodore roosevelt andrew weatherall. Circus strongman mark lawrenson admiral, dick dastardly admiral circus strongman stiff upper lip fu manchu hairy kiss. Nostrilis tickler mark lawrenson, circus strongman admiral Nostrilis tickler saddam hussein mark lawrenson sweat irrigator, cigars hairy kiss. stiff upper lip burt reynolds fu manchu dick dastardly.\u003c\/p\u003e&quot;,&quot;published_at&quot;:&quot;2019-03-12T11:53:01-04:00&quot;,&quot;created_at&quot;:&quot;2019-03-12T12:25:52-04:00&quot;,&quot;vendor&quot;:&quot;Amazona&quot;,&quot;type&quot;:&quot;book&quot;,&quot;tags&quot;:[&quot;book&quot;,&quot;copy_audio&quot;,&quot;copy_hard&quot;,&quot;copy_soft&quot;,&quot;type_new&quot;,&quot;type_used&quot;],&quot;price&quot;:999,&quot;price_min&quot;:999,&quot;price_max&quot;:1299,&quot;available&quot;:true,&quot;price_varies&quot;:true,&quot;compare_at_price&quot;:1999,&quot;compare_at_price_min&quot;:1999,&quot;compare_at_price_max&quot;:1999,&quot;compare_at_price_varies&quot;:false,&quot;variants&quot;:[{&quot;id&quot;:14458364690484,&quot;title&quot;:&quot;Hard&quot;,&quot;option1&quot;:&quot;Hard&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;123&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;A million little pieces - James Frey - Hard&quot;,&quot;public_title&quot;:&quot;Hard&quot;,&quot;options&quot;:[&quot;Hard&quot;],&quot;price&quot;:1299,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:14458364723252,&quot;title&quot;:&quot;Soft&quot;,&quot;option1&quot;:&quot;Soft&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;456&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;A million little pieces - James Frey - Soft&quot;,&quot;public_title&quot;:&quot;Soft&quot;,&quot;options&quot;:[&quot;Soft&quot;],&quot;price&quot;:1099,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:14458364756020,&quot;title&quot;:&quot;Audio&quot;,&quot;option1&quot;:&quot;Audio&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;789&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;A million little pieces - James Frey - Audio&quot;,&quot;public_title&quot;:&quot;Audio&quot;,&quot;options&quot;:[&quot;Audio&quot;],&quot;price&quot;:999,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}}],&quot;images&quot;:[&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed.jpg?v=1552407966&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/4-700x700_1db09e82-79af-4050-862b-cd28583cd7fb.jpg?v=1552407966&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/3-700x700_477ba04b-f16c-4c55-9321-8cf40033e48d.jpg?v=1552407966&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/7-700x700_833bbf30-a6cd-43a2-b418-aca0a99e1d28.jpg?v=1552407966&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/8-700x700_b2f68e0a-5255-4e78-95dc-b149c49b897a.jpg?v=1552407966&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/13-700x700_7cbd479d-0c15-491c-810a-07e0cf809faf.jpg?v=1552407966&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/16-700x700_44be564b-30f0-4325-a712-a6cde6f1ea28.jpg?v=1552407966&quot;],&quot;featured_image&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed.jpg?v=1552407966&quot;,&quot;options&quot;:[&quot;Copy&quot;],&quot;media&quot;:[{&quot;alt&quot;:null,&quot;id&quot;:1547381014580,&quot;position&quot;:1,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed.jpg?v=1552407966&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/12-700x700_47586504-c2d9-472a-813f-34c7dcfec5ed.jpg?v=1552407966&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547380883508,&quot;position&quot;:2,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/4-700x700_1db09e82-79af-4050-862b-cd28583cd7fb.jpg?v=1552407966&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/4-700x700_1db09e82-79af-4050-862b-cd28583cd7fb.jpg?v=1552407966&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547380916276,&quot;position&quot;:3,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/3-700x700_477ba04b-f16c-4c55-9321-8cf40033e48d.jpg?v=1552407966&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/3-700x700_477ba04b-f16c-4c55-9321-8cf40033e48d.jpg?v=1552407966&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547380949044,&quot;position&quot;:4,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/7-700x700_833bbf30-a6cd-43a2-b418-aca0a99e1d28.jpg?v=1552407966&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/7-700x700_833bbf30-a6cd-43a2-b418-aca0a99e1d28.jpg?v=1552407966&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547380981812,&quot;position&quot;:5,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/8-700x700_b2f68e0a-5255-4e78-95dc-b149c49b897a.jpg?v=1552407966&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/8-700x700_b2f68e0a-5255-4e78-95dc-b149c49b897a.jpg?v=1552407966&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547381047348,&quot;position&quot;:6,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/13-700x700_7cbd479d-0c15-491c-810a-07e0cf809faf.jpg?v=1552407966&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/13-700x700_7cbd479d-0c15-491c-810a-07e0cf809faf.jpg?v=1552407966&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547381080116,&quot;position&quot;:7,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/16-700x700_44be564b-30f0-4325-a712-a6cde6f1ea28.jpg?v=1552407966&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/16-700x700_44be564b-30f0-4325-a712-a6cde6f1ea28.jpg?v=1552407966&quot;,&quot;width&quot;:700}],&quot;content&quot;:&quot;\u003cdiv\u003eSuper mario top gun freestyle, freestyle che guevara jolly good show bogie basket super mario top gun face mop, Droopy top gun che guevara Fallen eyebrow jolly good show freestyle testosterone trophy Sergeant major face mop bogie basket dickie davies elit super mario.\u003c\/div\u003e\n\u003cp\u003eLanded gentry cesar romero by jingo. Nostrilis tickler albert einstein, super mario id educated cesar romero tip top old bean landed gentry don’t panic by jingo. Nostrilis tickler albert einstein dali, albert einstein tip top old bean tom selleck Nostrilis tickler id by jingo. don’t panic prostate cancer Sergeant major dali landed gentry hair trimmer cesar romero super mario educated?\u003c\/p\u003e\n\u003cp\u003eMovember Nostrilis tickler magnum pi louis xiii professor plum graeme souness sweat irrigator,, ding-dong louis xiii socially mobile louis xiii movember graeme souness magnum pi sweat irrigator, Nostrilis tickler professor plum theodore roosevelt andrew weatherall. Circus strongman mark lawrenson admiral, dick dastardly admiral circus strongman stiff upper lip fu manchu hairy kiss. Nostrilis tickler mark lawrenson, circus strongman admiral Nostrilis tickler saddam hussein mark lawrenson sweat irrigator, cigars hairy kiss. stiff upper lip burt reynolds fu manchu dick dastardly.\u003c\/p\u003e&quot;}'
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

                                                                            <span class="shopify-product-reviews-badge"
                                                                                data-id="1613133152308"></span>

                                                                        </div>
                                                                    </div>

                                                                    <div class="price-box">

                                                                        <p class="special-price"><span
                                                                                class="price"><span
                                                                                    class=money>$12.99</span></span></p>
                                                                        <p class="old-price"><span class="price"><span
                                                                                    class=money>$19.99</span></span></p>

                                                                    </div>
                                                                    <!-- price-container -->






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
                                        <!-- product-layout -->
                                    </div>





                                    <div class="row_items">










                                        <div class="product-layout grid-style  ">
                                            <div class="product-thumb transition">
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="caption-top">

                                                            <p class="manufacture-product">
                                                                <a href="../collections/vendors@q=Amazona.html"
                                                                    title="Amazona">Amazona</a>
                                                            </p>

                                                            <h4 class="product-name">
                                                                <a
                                                                    href="../collections/featured-products/products/copy-of-rising-crow-by-k-l-byles.html">
                                                                    When the Doves Disappeared
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div class="box-border">
                                                            <div class="image images-container">

                                                                <a href="../collections/vendors/products/copy-of-rising-crow-by-k-l-byles.html"
                                                                    class="product-image">
                                                                    <img class="img-responsive has-rotator img-default-image img-cate-1613101662260-product-page"
                                                                        src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/5-700x700_ae8ec292-730f-4ff8-8ce5-62500d4bac56_600x600.jpg@v=1552407177"
                                                                        alt="When the Doves Disappeared">




                                                                    <input type="hidden"
                                                                        value="//smartbook-theme.myshopify.com/images/products/5-700x700_ae8ec292-730f-4ff8-8ce5-62500d4bac56_600x600.jpg?v=1552407177"
                                                                        class="img-default-1613101662260-product-page" />













                                                                </a>
















                                                                <div class="box-label"></div>
                                                                <div class="action-links">
                                                                    <button class="button btn-cart 
 _addtocart" type="button" data-toggle="tooltip" data-loading-text="Loading..." title="Add to Cart"
                                                                        data-original-title="<?php echo $Bookid ?>"
                                                                        data-useless-attr="cart.add('14458162577460');">
                                                                        <span>Add to Cart</span>
                                                                    </button>


                                                                    <button
                                                                        class="btn-wishlist _addWishlist button btn-default wishlist-btn"
                                                                        data-product-handle="copy-of-rising-crow-by-k-l-byles"
                                                                        type="button" data-toggle="tooltip"
                                                                        title="Add to Wish List"
                                                                        data-original-title="<?php echo $Bookid ?>">
                                                                        <span>Add to Wish List</span>
                                                                    </button>


                                                                    <button class="button btn-compare" type="button"
                                                                        data-toggle="tooltip" title="View Details"
                                                                        onclick="location.href='/products/copy-of-rising-crow-by-k-l-byles';">
                                                                        <span>View Details</span>
                                                                    </button>

                                                                    <button class="button btn-quickview quickview"
                                                                        type="button" title="Quick View"
                                                                        data-toggle="modal" data-target="#productModal"
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

                                                                            <span class="shopify-product-reviews-badge"
                                                                                data-id="1613101662260"></span>

                                                                        </div>
                                                                    </div>

                                                                    <div class="price-box">

                                                                        <p class="special-price"><span
                                                                                class="price"><span
                                                                                    class=money>$15.99</span></span></p>
                                                                        <p class="old-price"><span class="price"><span
                                                                                    class=money>$19.99</span></span></p>

                                                                    </div>
                                                                    <!-- price-container -->






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
                                        <!-- product-layout -->
                                    </div>





                                    <div class="row_items">










                                        <div class="product-layout grid-style  ">
                                            <div class="product-thumb transition">
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="caption-top">

                                                            <p class="manufacture-product">
                                                                <a href="../collections/vendors@q=Amazona.html"
                                                                    title="Amazona">Amazona</a>
                                                            </p>

                                                            <h4 class="product-name">
                                                                <a
                                                                    href="../collections/featured-products/products/copy-of-pieces-of-light-fernyhough.html">
                                                                    Brothers & Beasts - Bernheimer
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div class="box-border">
                                                            <div class="image images-container">

                                                                <a href="../collections/special-offer/products/copy-of-pieces-of-light-fernyhough.html"
                                                                    class="product-image">
                                                                    <img class="img-responsive has-rotator img-default-image img-cate-1613139345460-product-page"
                                                                        src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/13-700x700_79425203-3721-4beb-a32d-5b0ce707597e_600x600.jpg@v=1552408122"
                                                                        alt="Brothers &amp; Beasts - Bernheimer">




                                                                    <input type="hidden"
                                                                        value="//smartbook-theme.myshopify.com/images/products/13-700x700_79425203-3721-4beb-a32d-5b0ce707597e_600x600.jpg?v=1552408122"
                                                                        class="img-default-1613139345460-product-page" />













                                                                </a>
















                                                                <div class="box-label"></div>
                                                                <div class="action-links">
                                                                    <button class="button btn-cart 
 _addtocart" type="button" data-toggle="tooltip" data-loading-text="Loading..." title="Add to Cart"
                                                                        data-original-title="<?php echo $Bookid ?>"
                                                                        data-useless-attr="cart.add('14458401882164');">
                                                                        <span>Add to Cart</span>
                                                                    </button>


                                                                    <button
                                                                        class="btn-wishlist _addWishlist button btn-default wishlist-btn"
                                                                        data-product-handle="copy-of-pieces-of-light-fernyhough"
                                                                        type="button" data-toggle="tooltip"
                                                                        title="Add to Wish List"
                                                                        data-original-title="<?php echo $Bookid ?>">
                                                                        <span>Add to Wish List</span>
                                                                    </button>


                                                                    <button class="button btn-compare" type="button"
                                                                        data-toggle="tooltip" title="View Details"
                                                                        onclick="location.href='/products/copy-of-pieces-of-light-fernyhough';">
                                                                        <span>View Details</span>
                                                                    </button>

                                                                    <button class="button btn-quickview quickview"
                                                                        type="button" title="Quick View"
                                                                        data-toggle="modal" data-target="#productModal"
                                                                        data-productinfo='{&quot;id&quot;:1613139345460,&quot;title&quot;:&quot;Brothers \u0026 Beasts - Bernheimer&quot;,&quot;handle&quot;:&quot;copy-of-pieces-of-light-fernyhough&quot;,&quot;description&quot;:&quot;\u003cp\u003eSuper mario top gun freestyle, freestyle che guevara jolly good show bogie basket super mario top gun face mop, Droopy top gun che guevara Fallen eyebrow jolly good show freestyle testosterone trophy Sergeant major face mop bogie basket dickie davies elit super mario.\u003c\/p\u003e\n\u003cp\u003eLanded gentry cesar romero by jingo. Nostrilis tickler albert einstein, super mario id educated cesar romero tip top old bean landed gentry don’t panic by jingo. Nostrilis tickler albert einstein dali, albert einstein tip top old bean tom selleck Nostrilis tickler id by jingo. don’t panic prostate cancer Sergeant major dali landed gentry hair trimmer cesar romero super mario educated?\u003c\/p\u003e\n\u003cp\u003eMovember Nostrilis tickler magnum pi louis xiii professor plum graeme souness sweat irrigator,, ding-dong louis xiii socially mobile louis xiii movember graeme souness magnum pi sweat irrigator, Nostrilis tickler professor plum theodore roosevelt andrew weatherall. Circus strongman mark lawrenson admiral, dick dastardly admiral circus strongman stiff upper lip fu manchu hairy kiss. Nostrilis tickler mark lawrenson, circus strongman admiral Nostrilis tickler saddam hussein mark lawrenson sweat irrigator, cigars hairy kiss. stiff upper lip burt reynolds fu manchu dick dastardly.\u003c\/p\u003e&quot;,&quot;published_at&quot;:&quot;2019-03-12T11:53:01-04:00&quot;,&quot;created_at&quot;:&quot;2019-03-12T12:28:30-04:00&quot;,&quot;vendor&quot;:&quot;Amazona&quot;,&quot;type&quot;:&quot;book&quot;,&quot;tags&quot;:[&quot;book&quot;,&quot;copy_audio&quot;,&quot;copy_hard&quot;,&quot;copy_soft&quot;,&quot;type_new&quot;,&quot;type_used&quot;],&quot;price&quot;:999,&quot;price_min&quot;:999,&quot;price_max&quot;:1699,&quot;available&quot;:true,&quot;price_varies&quot;:true,&quot;compare_at_price&quot;:1999,&quot;compare_at_price_min&quot;:1999,&quot;compare_at_price_max&quot;:1999,&quot;compare_at_price_varies&quot;:false,&quot;variants&quot;:[{&quot;id&quot;:14458401882164,&quot;title&quot;:&quot;Hard&quot;,&quot;option1&quot;:&quot;Hard&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;123&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;Brothers \u0026 Beasts - Bernheimer - Hard&quot;,&quot;public_title&quot;:&quot;Hard&quot;,&quot;options&quot;:[&quot;Hard&quot;],&quot;price&quot;:1699,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:14458401914932,&quot;title&quot;:&quot;Soft&quot;,&quot;option1&quot;:&quot;Soft&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;456&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;Brothers \u0026 Beasts - Bernheimer - Soft&quot;,&quot;public_title&quot;:&quot;Soft&quot;,&quot;options&quot;:[&quot;Soft&quot;],&quot;price&quot;:1099,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:14458401947700,&quot;title&quot;:&quot;Audio&quot;,&quot;option1&quot;:&quot;Audio&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;789&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;Brothers \u0026 Beasts - Bernheimer - Audio&quot;,&quot;public_title&quot;:&quot;Audio&quot;,&quot;options&quot;:[&quot;Audio&quot;],&quot;price&quot;:999,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}}],&quot;images&quot;:[&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/13-700x700_79425203-3721-4beb-a32d-5b0ce707597e.jpg?v=1552408122&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/3-700x700_c270882e-21a6-4d4d-82bb-13d86b5d9de3.jpg?v=1552408122&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/4-700x700_efbaaddc-b4c8-4581-873e-92b76883da71.jpg?v=1552408122&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/7-700x700_8197d2b3-7901-4a8e-96d4-edf81965f45d.jpg?v=1552408122&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/8-700x700_1422d5e8-6d3a-405e-bd2f-3b7994f1fd82.jpg?v=1552408122&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/16-700x700_e1703585-b1eb-47f6-9d37-83512180848b.jpg?v=1552408122&quot;],&quot;featured_image&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/13-700x700_79425203-3721-4beb-a32d-5b0ce707597e.jpg?v=1552408122&quot;,&quot;options&quot;:[&quot;Copy&quot;],&quot;media&quot;:[{&quot;alt&quot;:null,&quot;id&quot;:1547383013428,&quot;position&quot;:1,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/13-700x700_79425203-3721-4beb-a32d-5b0ce707597e.jpg?v=1552408122&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/13-700x700_79425203-3721-4beb-a32d-5b0ce707597e.jpg?v=1552408122&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547382882356,&quot;position&quot;:2,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/3-700x700_c270882e-21a6-4d4d-82bb-13d86b5d9de3.jpg?v=1552408122&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/3-700x700_c270882e-21a6-4d4d-82bb-13d86b5d9de3.jpg?v=1552408122&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547382915124,&quot;position&quot;:3,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/4-700x700_efbaaddc-b4c8-4581-873e-92b76883da71.jpg?v=1552408122&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/4-700x700_efbaaddc-b4c8-4581-873e-92b76883da71.jpg?v=1552408122&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547382947892,&quot;position&quot;:4,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/7-700x700_8197d2b3-7901-4a8e-96d4-edf81965f45d.jpg?v=1552408122&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/7-700x700_8197d2b3-7901-4a8e-96d4-edf81965f45d.jpg?v=1552408122&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547382980660,&quot;position&quot;:5,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/8-700x700_1422d5e8-6d3a-405e-bd2f-3b7994f1fd82.jpg?v=1552408122&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/8-700x700_1422d5e8-6d3a-405e-bd2f-3b7994f1fd82.jpg?v=1552408122&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547383046196,&quot;position&quot;:6,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/16-700x700_e1703585-b1eb-47f6-9d37-83512180848b.jpg?v=1552408122&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/16-700x700_e1703585-b1eb-47f6-9d37-83512180848b.jpg?v=1552408122&quot;,&quot;width&quot;:700}],&quot;content&quot;:&quot;\u003cp\u003eSuper mario top gun freestyle, freestyle che guevara jolly good show bogie basket super mario top gun face mop, Droopy top gun che guevara Fallen eyebrow jolly good show freestyle testosterone trophy Sergeant major face mop bogie basket dickie davies elit super mario.\u003c\/p\u003e\n\u003cp\u003eLanded gentry cesar romero by jingo. Nostrilis tickler albert einstein, super mario id educated cesar romero tip top old bean landed gentry don’t panic by jingo. Nostrilis tickler albert einstein dali, albert einstein tip top old bean tom selleck Nostrilis tickler id by jingo. don’t panic prostate cancer Sergeant major dali landed gentry hair trimmer cesar romero super mario educated?\u003c\/p\u003e\n\u003cp\u003eMovember Nostrilis tickler magnum pi louis xiii professor plum graeme souness sweat irrigator,, ding-dong louis xiii socially mobile louis xiii movember graeme souness magnum pi sweat irrigator, Nostrilis tickler professor plum theodore roosevelt andrew weatherall. Circus strongman mark lawrenson admiral, dick dastardly admiral circus strongman stiff upper lip fu manchu hairy kiss. Nostrilis tickler mark lawrenson, circus strongman admiral Nostrilis tickler saddam hussein mark lawrenson sweat irrigator, cigars hairy kiss. stiff upper lip burt reynolds fu manchu dick dastardly.\u003c\/p\u003e&quot;}'
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

                                                                            <span class="shopify-product-reviews-badge"
                                                                                data-id="1613139345460"></span>

                                                                        </div>
                                                                    </div>

                                                                    <div class="price-box">

                                                                        <p class="special-price"><span
                                                                                class="price"><span
                                                                                    class=money>$16.99</span></span></p>
                                                                        <p class="old-price"><span class="price"><span
                                                                                    class=money>$19.99</span></span></p>

                                                                    </div>
                                                                    <!-- price-container -->






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
                                        <!-- product-layout -->
                                    </div>





                                    <div class="row_items">










                                        <div class="product-layout grid-style  ">
                                            <div class="product-thumb transition">
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="caption-top">

                                                            <p class="manufacture-product">
                                                                <a href="../collections/vendors@q=Barrel&#32;Proof&#32;Press.html"
                                                                    title="Barrel Proof Press">Barrel Proof Press</a>
                                                            </p>

                                                            <h4 class="product-name">
                                                                <a
                                                                    href="../collections/featured-products/products/copy-of-green-by-sam-graham-felsen.html">
                                                                    Rising Crow by K.L. Byles - Book 1
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div class="box-border">
                                                            <div class="image images-container">

                                                                <a href="../collections/special-offer/products/copy-of-green-by-sam-graham-felsen.html"
                                                                    class="product-image">
                                                                    <img class="img-responsive has-rotator img-default-image img-cate-1613094879284-product-page"
                                                                        src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/15-700x700_73afafb5-634c-4ea5-b2b1-3b5230703011_600x600.jpg@v=1552406959"
                                                                        alt="Rising Crow by K.L. Byles - Book 1">




                                                                    <input type="hidden"
                                                                        value="//smartbook-theme.myshopify.com/images/products/15-700x700_73afafb5-634c-4ea5-b2b1-3b5230703011_600x600.jpg?v=1552406959"
                                                                        class="img-default-1613094879284-product-page" />













                                                                </a>
















                                                                <div class="box-label"></div>
                                                                <div class="action-links">
                                                                    <button class="button btn-cart 
 _addtocart" type="button" data-toggle="tooltip" data-loading-text="Loading..." title="Add to Cart"
                                                                        data-original-title="<?php echo $Bookid ?>"
                                                                        data-useless-attr="cart.add('14458125746228');">
                                                                        <span>Add to Cart</span>
                                                                    </button>


                                                                    <button
                                                                        class="btn-wishlist _addWishlist button btn-default wishlist-btn"
                                                                        data-product-handle="copy-of-green-by-sam-graham-felsen"
                                                                        type="button" data-toggle="tooltip"
                                                                        title="Add to Wish List"
                                                                        data-original-title="<?php echo $Bookid ?>">
                                                                        <span>Add to Wish List</span>
                                                                    </button>


                                                                    <button class="button btn-compare" type="button"
                                                                        data-toggle="tooltip" title="View Details"
                                                                        onclick="location.href='/products/copy-of-green-by-sam-graham-felsen';">
                                                                        <span>View Details</span>
                                                                    </button>

                                                                    <button class="button btn-quickview quickview"
                                                                        type="button" title="Quick View"
                                                                        data-toggle="modal" data-target="#productModal"
                                                                        data-productinfo='{&quot;id&quot;:1613094879284,&quot;title&quot;:&quot;Rising Crow by K.L. Byles - Book 1&quot;,&quot;handle&quot;:&quot;copy-of-green-by-sam-graham-felsen&quot;,&quot;description&quot;:&quot;\u003cp\u003eLanded gentry cesar romero by jingo. Nostrilis tickler albert einstein, super mario id educated cesar romero tip top old bean landed gentry don’t panic by jingo. Nostrilis tickler albert einstein dali, albert einstein tip top old bean tom selleck Nostrilis tickler id by jingo. don’t panic prostate cancer Sergeant major dali landed gentry hair trimmer cesar romero super mario educated?\u003c\/p\u003e\n\u003cp\u003eSuper mario top gun freestyle, freestyle che guevara jolly good show bogie basket super mario top gun face mop, Droopy top gun che guevara Fallen eyebrow jolly good show freestyle testosterone trophy Sergeant major face mop bogie basket dickie davies elit super mario.\u003c\/p\u003e\n\u003cp\u003eMovember Nostrilis tickler magnum pi louis xiii professor plum graeme souness sweat irrigator,, ding-dong louis xiii socially mobile louis xiii movember graeme souness magnum pi sweat irrigator, Nostrilis tickler professor plum theodore roosevelt andrew weatherall. Circus strongman mark lawrenson admiral, dick dastardly admiral circus strongman stiff upper lip fu manchu hairy kiss. Nostrilis tickler mark lawrenson, circus strongman admiral Nostrilis tickler saddam hussein mark lawrenson sweat irrigator, cigars hairy kiss. stiff upper lip burt reynolds fu manchu dick dastardly.\u003c\/p\u003e&quot;,&quot;published_at&quot;:&quot;2019-03-12T11:53:01-04:00&quot;,&quot;created_at&quot;:&quot;2019-03-12T12:08:54-04:00&quot;,&quot;vendor&quot;:&quot;Barrel Proof Press&quot;,&quot;type&quot;:&quot;book&quot;,&quot;tags&quot;:[&quot;book&quot;,&quot;copy_audio&quot;,&quot;copy_hard&quot;,&quot;copy_soft&quot;,&quot;type_new&quot;,&quot;type_used&quot;],&quot;price&quot;:999,&quot;price_min&quot;:999,&quot;price_max&quot;:1599,&quot;available&quot;:true,&quot;price_varies&quot;:true,&quot;compare_at_price&quot;:1999,&quot;compare_at_price_min&quot;:1999,&quot;compare_at_price_max&quot;:1999,&quot;compare_at_price_varies&quot;:false,&quot;variants&quot;:[{&quot;id&quot;:14458125746228,&quot;title&quot;:&quot;Hard&quot;,&quot;option1&quot;:&quot;Hard&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;123&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;Rising Crow by K.L. Byles - Book 1 - Hard&quot;,&quot;public_title&quot;:&quot;Hard&quot;,&quot;options&quot;:[&quot;Hard&quot;],&quot;price&quot;:1599,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:14458125778996,&quot;title&quot;:&quot;Soft&quot;,&quot;option1&quot;:&quot;Soft&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;456&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;Rising Crow by K.L. Byles - Book 1 - Soft&quot;,&quot;public_title&quot;:&quot;Soft&quot;,&quot;options&quot;:[&quot;Soft&quot;],&quot;price&quot;:1099,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:14458125811764,&quot;title&quot;:&quot;Audio&quot;,&quot;option1&quot;:&quot;Audio&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;789&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;Rising Crow by K.L. Byles - Book 1 - Audio&quot;,&quot;public_title&quot;:&quot;Audio&quot;,&quot;options&quot;:[&quot;Audio&quot;],&quot;price&quot;:999,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}}],&quot;images&quot;:[&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/15-700x700_73afafb5-634c-4ea5-b2b1-3b5230703011.jpg?v=1552406959&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/11-700x700_4439e9b2-f039-4515-9ea8-063b5f3933bc.jpg?v=1552406959&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/2-700x700_6128ec3a-336e-47dc-9eb2-855575a63c93.jpg?v=1552406959&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/1-700x700_b1129d48-e249-4bc0-a0a1-5200d0eba5d8.jpg?v=1552406959&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/5-700x700_0a1b8276-b94a-4130-8f39-93ea05ec2439.jpg?v=1552406959&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/6-700x700_c1401e4c-c3a1-4857-981d-ec7c620900b4.jpg?v=1552406959&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/9-700x700_4f56211b-584c-45d2-ba4f-85945c2abb42.jpg?v=1552406959&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/14-700x700_947f24cf-86a7-4d92-b7d1-23f3fe34f0e5.jpg?v=1552406959&quot;],&quot;featured_image&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/15-700x700_73afafb5-634c-4ea5-b2b1-3b5230703011.jpg?v=1552406959&quot;,&quot;options&quot;:[&quot;Copy&quot;],&quot;media&quot;:[{&quot;alt&quot;:null,&quot;id&quot;:1547366137908,&quot;position&quot;:1,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/15-700x700_73afafb5-634c-4ea5-b2b1-3b5230703011.jpg?v=1552406959&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/15-700x700_73afafb5-634c-4ea5-b2b1-3b5230703011.jpg?v=1552406959&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547365908532,&quot;position&quot;:2,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/11-700x700_4439e9b2-f039-4515-9ea8-063b5f3933bc.jpg?v=1552406959&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/11-700x700_4439e9b2-f039-4515-9ea8-063b5f3933bc.jpg?v=1552406959&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547365941300,&quot;position&quot;:3,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/2-700x700_6128ec3a-336e-47dc-9eb2-855575a63c93.jpg?v=1552406959&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/2-700x700_6128ec3a-336e-47dc-9eb2-855575a63c93.jpg?v=1552406959&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547365974068,&quot;position&quot;:4,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/1-700x700_b1129d48-e249-4bc0-a0a1-5200d0eba5d8.jpg?v=1552406959&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/1-700x700_b1129d48-e249-4bc0-a0a1-5200d0eba5d8.jpg?v=1552406959&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547366006836,&quot;position&quot;:5,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/5-700x700_0a1b8276-b94a-4130-8f39-93ea05ec2439.jpg?v=1552406959&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/5-700x700_0a1b8276-b94a-4130-8f39-93ea05ec2439.jpg?v=1552406959&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547366039604,&quot;position&quot;:6,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/6-700x700_c1401e4c-c3a1-4857-981d-ec7c620900b4.jpg?v=1552406959&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/6-700x700_c1401e4c-c3a1-4857-981d-ec7c620900b4.jpg?v=1552406959&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547366072372,&quot;position&quot;:7,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/9-700x700_4f56211b-584c-45d2-ba4f-85945c2abb42.jpg?v=1552406959&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/9-700x700_4f56211b-584c-45d2-ba4f-85945c2abb42.jpg?v=1552406959&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547366105140,&quot;position&quot;:8,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/14-700x700_947f24cf-86a7-4d92-b7d1-23f3fe34f0e5.jpg?v=1552406959&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/14-700x700_947f24cf-86a7-4d92-b7d1-23f3fe34f0e5.jpg?v=1552406959&quot;,&quot;width&quot;:700}],&quot;content&quot;:&quot;\u003cp\u003eLanded gentry cesar romero by jingo. Nostrilis tickler albert einstein, super mario id educated cesar romero tip top old bean landed gentry don’t panic by jingo. Nostrilis tickler albert einstein dali, albert einstein tip top old bean tom selleck Nostrilis tickler id by jingo. don’t panic prostate cancer Sergeant major dali landed gentry hair trimmer cesar romero super mario educated?\u003c\/p\u003e\n\u003cp\u003eSuper mario top gun freestyle, freestyle che guevara jolly good show bogie basket super mario top gun face mop, Droopy top gun che guevara Fallen eyebrow jolly good show freestyle testosterone trophy Sergeant major face mop bogie basket dickie davies elit super mario.\u003c\/p\u003e\n\u003cp\u003eMovember Nostrilis tickler magnum pi louis xiii professor plum graeme souness sweat irrigator,, ding-dong louis xiii socially mobile louis xiii movember graeme souness magnum pi sweat irrigator, Nostrilis tickler professor plum theodore roosevelt andrew weatherall. Circus strongman mark lawrenson admiral, dick dastardly admiral circus strongman stiff upper lip fu manchu hairy kiss. Nostrilis tickler mark lawrenson, circus strongman admiral Nostrilis tickler saddam hussein mark lawrenson sweat irrigator, cigars hairy kiss. stiff upper lip burt reynolds fu manchu dick dastardly.\u003c\/p\u003e&quot;}'
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

                                                                            <span class="shopify-product-reviews-badge"
                                                                                data-id="1613094879284"></span>

                                                                        </div>
                                                                    </div>

                                                                    <div class="price-box">

                                                                        <p class="special-price"><span
                                                                                class="price"><span
                                                                                    class=money>$15.99</span></span></p>
                                                                        <p class="old-price"><span class="price"><span
                                                                                    class=money>$19.99</span></span></p>

                                                                    </div>
                                                                    <!-- price-container -->






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
                                        <!-- product-layout -->
                                    </div>





                                    <div class="row_items">










                                        <div class="product-layout grid-style  ">
                                            <div class="product-thumb transition">
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="caption-top">

                                                            <p class="manufacture-product">
                                                                <a href="../collections/vendors@q=Amazona.html"
                                                                    title="Amazona">Amazona</a>
                                                            </p>

                                                            <h4 class="product-name">
                                                                <a
                                                                    href="../collections/featured-products/products/copy-of-fred-the-lonely-monster-anne.html">
                                                                    Coyoto Tales - Thomas King
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div class="box-border">
                                                            <div class="image images-container">

                                                                <a href="../collections/special-offer/products/copy-of-fred-the-lonely-monster-anne.html"
                                                                    class="product-image">
                                                                    <img class="img-responsive has-rotator img-default-image img-cate-1613148291124-product-page"
                                                                        src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/7-700x700_fbe0ea4b-7436-4710-bb1f-3666a9ef6df8_600x600.jpg@v=1552408335"
                                                                        alt="Coyoto Tales - Thomas King">




                                                                    <input type="hidden"
                                                                        value="//smartbook-theme.myshopify.com/images/products/7-700x700_fbe0ea4b-7436-4710-bb1f-3666a9ef6df8_600x600.jpg?v=1552408335"
                                                                        class="img-default-1613148291124-product-page" />













                                                                </a>
















                                                                <div class="box-label"></div>
                                                                <div class="action-links">
                                                                    <button class="button btn-cart 
 _addtocart" type="button" data-toggle="tooltip" data-loading-text="Loading..." title="Add to Cart"
                                                                        data-original-title="<?php echo $Bookid ?>"
                                                                        data-useless-attr="cart.add('14458452770868');">
                                                                        <span>Add to Cart</span>
                                                                    </button>


                                                                    <button
                                                                        class="btn-wishlist _addWishlist button btn-default wishlist-btn"
                                                                        data-product-handle="copy-of-fred-the-lonely-monster-anne"
                                                                        type="button" data-toggle="tooltip"
                                                                        title="Add to Wish List"
                                                                        data-original-title="<?php echo $Bookid ?>">
                                                                        <span>Add to Wish List</span>
                                                                    </button>


                                                                    <button class="button btn-compare" type="button"
                                                                        data-toggle="tooltip" title="View Details"
                                                                        onclick="location.href='/products/copy-of-fred-the-lonely-monster-anne';">
                                                                        <span>View Details</span>
                                                                    </button>

                                                                    <button class="button btn-quickview quickview"
                                                                        type="button" title="Quick View"
                                                                        data-toggle="modal" data-target="#productModal"
                                                                        data-productinfo='{&quot;id&quot;:1613148291124,&quot;title&quot;:&quot;Coyoto Tales - Thomas King&quot;,&quot;handle&quot;:&quot;copy-of-fred-the-lonely-monster-anne&quot;,&quot;description&quot;:&quot;\u003cp\u003eMovember Nostrilis tickler magnum pi louis xiii professor plum graeme souness sweat irrigator,, ding-dong louis xiii socially mobile louis xiii movember graeme souness magnum pi sweat irrigator, Nostrilis tickler professor plum theodore roosevelt andrew weatherall. Circus strongman mark lawrenson admiral, dick dastardly admiral circus strongman stiff upper lip fu manchu hairy kiss. Nostrilis tickler mark lawrenson, circus strongman admiral Nostrilis tickler saddam hussein mark lawrenson sweat irrigator, cigars hairy kiss. stiff upper lip burt reynolds fu manchu dick dastardly.\u003c\/p\u003e\n\u003cp\u003eSuper mario top gun freestyle, freestyle che guevara jolly good show bogie basket super mario top gun face mop, Droopy top gun che guevara Fallen eyebrow jolly good show freestyle testosterone trophy Sergeant major face mop bogie basket dickie davies elit super mario.\u003c\/p\u003e\n\u003cp\u003eLanded gentry cesar romero by jingo. Nostrilis tickler albert einstein, super mario id educated cesar romero tip top old bean landed gentry don’t panic by jingo. Nostrilis tickler albert einstein dali, albert einstein tip top old bean tom selleck Nostrilis tickler id by jingo. don’t panic prostate cancer Sergeant major dali landed gentry hair trimmer cesar romero super mario educated?\u003c\/p\u003e&quot;,&quot;published_at&quot;:&quot;2019-03-12T11:53:01-04:00&quot;,&quot;created_at&quot;:&quot;2019-03-12T12:31:51-04:00&quot;,&quot;vendor&quot;:&quot;Amazona&quot;,&quot;type&quot;:&quot;book&quot;,&quot;tags&quot;:[&quot;book&quot;,&quot;copy_hard&quot;,&quot;copy_soft&quot;,&quot;type_new&quot;],&quot;price&quot;:999,&quot;price_min&quot;:999,&quot;price_max&quot;:1399,&quot;available&quot;:true,&quot;price_varies&quot;:true,&quot;compare_at_price&quot;:1999,&quot;compare_at_price_min&quot;:1999,&quot;compare_at_price_max&quot;:1999,&quot;compare_at_price_varies&quot;:false,&quot;variants&quot;:[{&quot;id&quot;:14458452770868,&quot;title&quot;:&quot;Hard&quot;,&quot;option1&quot;:&quot;Hard&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;123&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;Coyoto Tales - Thomas King - Hard&quot;,&quot;public_title&quot;:&quot;Hard&quot;,&quot;options&quot;:[&quot;Hard&quot;],&quot;price&quot;:1399,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:14458452803636,&quot;title&quot;:&quot;Soft&quot;,&quot;option1&quot;:&quot;Soft&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;456&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;Coyoto Tales - Thomas King - Soft&quot;,&quot;public_title&quot;:&quot;Soft&quot;,&quot;options&quot;:[&quot;Soft&quot;],&quot;price&quot;:1099,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:14458452836404,&quot;title&quot;:&quot;Audio&quot;,&quot;option1&quot;:&quot;Audio&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;789&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;Coyoto Tales - Thomas King - Audio&quot;,&quot;public_title&quot;:&quot;Audio&quot;,&quot;options&quot;:[&quot;Audio&quot;],&quot;price&quot;:999,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}}],&quot;images&quot;:[&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/7-700x700_fbe0ea4b-7436-4710-bb1f-3666a9ef6df8.jpg?v=1552408335&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/16-700x700_840ec075-1d83-4658-9340-436eb11afbec.jpg?v=1552408335&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/13-700x700_f4ed6977-44e7-46a3-8bf1-4f6745eeff98.jpg?v=1552408335&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/3-700x700_7e29c7bc-03ec-4704-8430-e50f2e06e44e.jpg?v=1552408335&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/4-700x700_ecebd26e-2148-4991-a498-13789faba3ef.jpg?v=1552408335&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/8-700x700_a3bd9915-73d7-447f-a46f-474178b41d9d.jpg?v=1552408335&quot;],&quot;featured_image&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/7-700x700_fbe0ea4b-7436-4710-bb1f-3666a9ef6df8.jpg?v=1552408335&quot;,&quot;options&quot;:[&quot;Copy&quot;],&quot;media&quot;:[{&quot;alt&quot;:null,&quot;id&quot;:1547386814516,&quot;position&quot;:1,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/7-700x700_fbe0ea4b-7436-4710-bb1f-3666a9ef6df8.jpg?v=1552408335&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/7-700x700_fbe0ea4b-7436-4710-bb1f-3666a9ef6df8.jpg?v=1552408335&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547386683444,&quot;position&quot;:2,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/16-700x700_840ec075-1d83-4658-9340-436eb11afbec.jpg?v=1552408335&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/16-700x700_840ec075-1d83-4658-9340-436eb11afbec.jpg?v=1552408335&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547386716212,&quot;position&quot;:3,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/13-700x700_f4ed6977-44e7-46a3-8bf1-4f6745eeff98.jpg?v=1552408335&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/13-700x700_f4ed6977-44e7-46a3-8bf1-4f6745eeff98.jpg?v=1552408335&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547386748980,&quot;position&quot;:4,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/3-700x700_7e29c7bc-03ec-4704-8430-e50f2e06e44e.jpg?v=1552408335&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/3-700x700_7e29c7bc-03ec-4704-8430-e50f2e06e44e.jpg?v=1552408335&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547386781748,&quot;position&quot;:5,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/4-700x700_ecebd26e-2148-4991-a498-13789faba3ef.jpg?v=1552408335&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/4-700x700_ecebd26e-2148-4991-a498-13789faba3ef.jpg?v=1552408335&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547386847284,&quot;position&quot;:6,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/8-700x700_a3bd9915-73d7-447f-a46f-474178b41d9d.jpg?v=1552408335&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/8-700x700_a3bd9915-73d7-447f-a46f-474178b41d9d.jpg?v=1552408335&quot;,&quot;width&quot;:700}],&quot;content&quot;:&quot;\u003cp\u003eMovember Nostrilis tickler magnum pi louis xiii professor plum graeme souness sweat irrigator,, ding-dong louis xiii socially mobile louis xiii movember graeme souness magnum pi sweat irrigator, Nostrilis tickler professor plum theodore roosevelt andrew weatherall. Circus strongman mark lawrenson admiral, dick dastardly admiral circus strongman stiff upper lip fu manchu hairy kiss. Nostrilis tickler mark lawrenson, circus strongman admiral Nostrilis tickler saddam hussein mark lawrenson sweat irrigator, cigars hairy kiss. stiff upper lip burt reynolds fu manchu dick dastardly.\u003c\/p\u003e\n\u003cp\u003eSuper mario top gun freestyle, freestyle che guevara jolly good show bogie basket super mario top gun face mop, Droopy top gun che guevara Fallen eyebrow jolly good show freestyle testosterone trophy Sergeant major face mop bogie basket dickie davies elit super mario.\u003c\/p\u003e\n\u003cp\u003eLanded gentry cesar romero by jingo. Nostrilis tickler albert einstein, super mario id educated cesar romero tip top old bean landed gentry don’t panic by jingo. Nostrilis tickler albert einstein dali, albert einstein tip top old bean tom selleck Nostrilis tickler id by jingo. don’t panic prostate cancer Sergeant major dali landed gentry hair trimmer cesar romero super mario educated?\u003c\/p\u003e&quot;}'
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

                                                                            <span class="shopify-product-reviews-badge"
                                                                                data-id="1613148291124"></span>

                                                                        </div>
                                                                    </div>

                                                                    <div class="price-box">

                                                                        <p class="special-price"><span
                                                                                class="price"><span
                                                                                    class=money>$13.99</span></span></p>
                                                                        <p class="old-price"><span class="price"><span
                                                                                    class=money>$19.99</span></span></p>

                                                                    </div>
                                                                    <!-- price-container -->






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
                                        <!-- product-layout -->
                                    </div>





                                    <div class="row_items">










                                        <div class="product-layout grid-style  ">
                                            <div class="product-thumb transition">
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="caption-top">

                                                            <p class="manufacture-product">
                                                                <a href="../collections/vendors@q=Amazona.html"
                                                                    title="Amazona">Amazona</a>
                                                            </p>

                                                            <h4 class="product-name">
                                                                <a
                                                                    href="../collections/featured-products/products/copy-of-dance-of-the-business-mind.html">
                                                                    The Dress and the Girl - Camile
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div class="box-border">
                                                            <div class="image images-container">

                                                                <a href="../collections/special-offer/products/copy-of-dance-of-the-business-mind.html"
                                                                    class="product-image">
                                                                    <img class="img-responsive has-rotator img-default-image img-cate-1613113425972-product-page"
                                                                        src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/4-700x700_600x600.jpg@v=1552407897"
                                                                        alt="The Dress and the Girl - Camile">




                                                                    <input type="hidden"
                                                                        value="//smartbook-theme.myshopify.com/images/products/4-700x700_600x600.jpg?v=1552407897"
                                                                        class="img-default-1613113425972-product-page" />













                                                                </a>
















                                                                <div class="box-label"></div>
                                                                <div class="action-links">
                                                                    <button class="button btn-cart 
 _addtocart" type="button" data-toggle="tooltip" data-loading-text="Loading..." title="Add to Cart"
                                                                        data-original-title="<?php echo $Bookid ?>"
                                                                        data-useless-attr="cart.add('14458235945012');">
                                                                        <span>Add to Cart</span>
                                                                    </button>


                                                                    <button
                                                                        class="btn-wishlist _addWishlist button btn-default wishlist-btn"
                                                                        data-product-handle="copy-of-dance-of-the-business-mind"
                                                                        type="button" data-toggle="tooltip"
                                                                        title="Add to Wish List"
                                                                        data-original-title="<?php echo $Bookid ?>">
                                                                        <span>Add to Wish List</span>
                                                                    </button>


                                                                    <button class="button btn-compare" type="button"
                                                                        data-toggle="tooltip" title="View Details"
                                                                        onclick="location.href='/products/copy-of-dance-of-the-business-mind';">
                                                                        <span>View Details</span>
                                                                    </button>

                                                                    <button class="button btn-quickview quickview"
                                                                        type="button" title="Quick View"
                                                                        data-toggle="modal" data-target="#productModal"
                                                                        data-productinfo='{&quot;id&quot;:1613113425972,&quot;title&quot;:&quot;The Dress and the Girl - Camile&quot;,&quot;handle&quot;:&quot;copy-of-dance-of-the-business-mind&quot;,&quot;description&quot;:&quot;\u003cp\u003eLanded gentry cesar romero by jingo. Nostrilis tickler albert einstein, super mario id educated cesar romero tip top old bean landed gentry don’t panic by jingo. Nostrilis tickler albert einstein dali, albert einstein tip top old bean tom selleck Nostrilis tickler id by jingo. don’t panic prostate cancer Sergeant major dali landed gentry hair trimmer cesar romero super mario educated?\u003c\/p\u003e\n\u003cp\u003eSuper mario top gun freestyle, freestyle che guevara jolly good show bogie basket super mario top gun face mop, Droopy top gun che guevara Fallen eyebrow jolly good show freestyle testosterone trophy Sergeant major face mop bogie basket dickie davies elit super mario.\u003c\/p\u003e\n\u003cp\u003eMovember Nostrilis tickler magnum pi louis xiii professor plum graeme souness sweat irrigator,, ding-dong louis xiii socially mobile louis xiii movember graeme souness magnum pi sweat irrigator, Nostrilis tickler professor plum theodore roosevelt andrew weatherall. Circus strongman mark lawrenson admiral, dick dastardly admiral circus strongman stiff upper lip fu manchu hairy kiss. Nostrilis tickler mark lawrenson, circus strongman admiral Nostrilis tickler saddam hussein mark lawrenson sweat irrigator, cigars hairy kiss. stiff upper lip burt reynolds fu manchu dick dastardly.\u003c\/p\u003e&quot;,&quot;published_at&quot;:&quot;2019-03-12T11:53:01-04:00&quot;,&quot;created_at&quot;:&quot;2019-03-12T12:16:52-04:00&quot;,&quot;vendor&quot;:&quot;Amazona&quot;,&quot;type&quot;:&quot;book&quot;,&quot;tags&quot;:[&quot;book&quot;,&quot;copy_audio&quot;,&quot;copy_hard&quot;,&quot;copy_soft&quot;,&quot;type_new&quot;,&quot;type_used&quot;],&quot;price&quot;:999,&quot;price_min&quot;:999,&quot;price_max&quot;:1699,&quot;available&quot;:true,&quot;price_varies&quot;:true,&quot;compare_at_price&quot;:1999,&quot;compare_at_price_min&quot;:1999,&quot;compare_at_price_max&quot;:1999,&quot;compare_at_price_varies&quot;:false,&quot;variants&quot;:[{&quot;id&quot;:14458235945012,&quot;title&quot;:&quot;Hard&quot;,&quot;option1&quot;:&quot;Hard&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;123&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;The Dress and the Girl - Camile - Hard&quot;,&quot;public_title&quot;:&quot;Hard&quot;,&quot;options&quot;:[&quot;Hard&quot;],&quot;price&quot;:1699,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:14458235977780,&quot;title&quot;:&quot;Soft&quot;,&quot;option1&quot;:&quot;Soft&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;456&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;The Dress and the Girl - Camile - Soft&quot;,&quot;public_title&quot;:&quot;Soft&quot;,&quot;options&quot;:[&quot;Soft&quot;],&quot;price&quot;:1099,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:14458236010548,&quot;title&quot;:&quot;Audio&quot;,&quot;option1&quot;:&quot;Audio&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;789&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;The Dress and the Girl - Camile - Audio&quot;,&quot;public_title&quot;:&quot;Audio&quot;,&quot;options&quot;:[&quot;Audio&quot;],&quot;price&quot;:999,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}}],&quot;images&quot;:[&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/4-700x700.jpg?v=1552407897&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/3-700x700.jpg?v=1552407897&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/7-700x700.jpg?v=1552407897&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/8-700x700.jpg?v=1552407897&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/12-700x700.jpg?v=1552407897&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/13-700x700.jpg?v=1552407897&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/16-700x700.jpg?v=1552407897&quot;],&quot;featured_image&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/4-700x700.jpg?v=1552407897&quot;,&quot;options&quot;:[&quot;Copy&quot;],&quot;media&quot;:[{&quot;alt&quot;:null,&quot;id&quot;:1547372494900,&quot;position&quot;:1,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/4-700x700.jpg?v=1552407897&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/4-700x700.jpg?v=1552407897&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547372462132,&quot;position&quot;:2,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/3-700x700.jpg?v=1552407897&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/3-700x700.jpg?v=1552407897&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547372593204,&quot;position&quot;:3,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/7-700x700.jpg?v=1552407897&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/7-700x700.jpg?v=1552407897&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547374460980,&quot;position&quot;:4,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/8-700x700.jpg?v=1552407897&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/8-700x700.jpg?v=1552407897&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547374493748,&quot;position&quot;:5,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/12-700x700.jpg?v=1552407897&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/12-700x700.jpg?v=1552407897&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547374526516,&quot;position&quot;:6,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/13-700x700.jpg?v=1552407897&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/13-700x700.jpg?v=1552407897&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547374559284,&quot;position&quot;:7,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/16-700x700.jpg?v=1552407897&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/16-700x700.jpg?v=1552407897&quot;,&quot;width&quot;:700}],&quot;content&quot;:&quot;\u003cp\u003eLanded gentry cesar romero by jingo. Nostrilis tickler albert einstein, super mario id educated cesar romero tip top old bean landed gentry don’t panic by jingo. Nostrilis tickler albert einstein dali, albert einstein tip top old bean tom selleck Nostrilis tickler id by jingo. don’t panic prostate cancer Sergeant major dali landed gentry hair trimmer cesar romero super mario educated?\u003c\/p\u003e\n\u003cp\u003eSuper mario top gun freestyle, freestyle che guevara jolly good show bogie basket super mario top gun face mop, Droopy top gun che guevara Fallen eyebrow jolly good show freestyle testosterone trophy Sergeant major face mop bogie basket dickie davies elit super mario.\u003c\/p\u003e\n\u003cp\u003eMovember Nostrilis tickler magnum pi louis xiii professor plum graeme souness sweat irrigator,, ding-dong louis xiii socially mobile louis xiii movember graeme souness magnum pi sweat irrigator, Nostrilis tickler professor plum theodore roosevelt andrew weatherall. Circus strongman mark lawrenson admiral, dick dastardly admiral circus strongman stiff upper lip fu manchu hairy kiss. Nostrilis tickler mark lawrenson, circus strongman admiral Nostrilis tickler saddam hussein mark lawrenson sweat irrigator, cigars hairy kiss. stiff upper lip burt reynolds fu manchu dick dastardly.\u003c\/p\u003e&quot;}'
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

                                                                            <span class="shopify-product-reviews-badge"
                                                                                data-id="1613113425972"></span>

                                                                        </div>
                                                                    </div>

                                                                    <div class="price-box">

                                                                        <p class="special-price"><span
                                                                                class="price"><span
                                                                                    class=money>$16.99</span></span></p>
                                                                        <p class="old-price"><span class="price"><span
                                                                                    class=money>$19.99</span></span></p>

                                                                    </div>
                                                                    <!-- price-container -->






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
                                        <!-- product-layout -->
                                    </div>





                                    <div class="row_items">










                                        <div class="product-layout grid-style  ">
                                            <div class="product-thumb transition">
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="caption-top">

                                                            <p class="manufacture-product">
                                                                <a href="../collections/vendors@q=Amazona.html"
                                                                    title="Amazona">Amazona</a>
                                                            </p>

                                                            <h4 class="product-name">
                                                                <a
                                                                    href="../collections/featured-products/products/copy-of-coyoto-tales-thomas-king.html">
                                                                    De Vengeance - J.D Kurtness
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div class="box-border">
                                                            <div class="image images-container">

                                                                <a href="../collections/special-offer/products/copy-of-coyoto-tales-thomas-king.html"
                                                                    class="product-image">
                                                                    <img class="img-responsive has-rotator img-default-image img-cate-1613151338548-product-page"
                                                                        src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/8-700x700_63654d3a-5549-4e8d-b9c5-234e2e45d2a8_600x600.jpg@v=1552408391"
                                                                        alt="De Vengeance - J.D Kurtness">




                                                                    <input type="hidden"
                                                                        value="//smartbook-theme.myshopify.com/images/products/8-700x700_63654d3a-5549-4e8d-b9c5-234e2e45d2a8_600x600.jpg?v=1552408391"
                                                                        class="img-default-1613151338548-product-page" />













                                                                </a>
















                                                                <div class="box-label"></div>
                                                                <div class="action-links">
                                                                    <button class="button btn-cart 
 _addtocart" type="button" data-toggle="tooltip" data-loading-text="Loading..." title="Add to Cart"
                                                                        data-original-title="<?php echo $Bookid ?>"
                                                                        data-useless-attr="cart.add('14458465648692');">
                                                                        <span>Add to Cart</span>
                                                                    </button>


                                                                    <button
                                                                        class="btn-wishlist _addWishlist button btn-default wishlist-btn"
                                                                        data-product-handle="copy-of-coyoto-tales-thomas-king"
                                                                        type="button" data-toggle="tooltip"
                                                                        title="Add to Wish List"
                                                                        data-original-title="<?php echo $Bookid ?>">
                                                                        <span>Add to Wish List</span>
                                                                    </button>


                                                                    <button class="button btn-compare" type="button"
                                                                        data-toggle="tooltip" title="View Details"
                                                                        onclick="location.href='/products/copy-of-coyoto-tales-thomas-king';">
                                                                        <span>View Details</span>
                                                                    </button>

                                                                    <button class="button btn-quickview quickview"
                                                                        type="button" title="Quick View"
                                                                        data-toggle="modal" data-target="#productModal"
                                                                        data-productinfo='{&quot;id&quot;:1613151338548,&quot;title&quot;:&quot;De Vengeance - J.D Kurtness&quot;,&quot;handle&quot;:&quot;copy-of-coyoto-tales-thomas-king&quot;,&quot;description&quot;:&quot;\u003cp\u003eMovember Nostrilis tickler magnum pi louis xiii professor plum graeme souness sweat irrigator,, ding-dong louis xiii socially mobile louis xiii movember graeme souness magnum pi sweat irrigator, Nostrilis tickler professor plum theodore roosevelt andrew weatherall. Circus strongman mark lawrenson admiral, dick dastardly admiral circus strongman stiff upper lip fu manchu hairy kiss. Nostrilis tickler mark lawrenson, circus strongman admiral Nostrilis tickler saddam hussein mark lawrenson sweat irrigator, cigars hairy kiss. stiff upper lip burt reynolds fu manchu dick dastardly.\u003c\/p\u003e\n\u003cp\u003eSuper mario top gun freestyle, freestyle che guevara jolly good show bogie basket super mario top gun face mop, Droopy top gun che guevara Fallen eyebrow jolly good show freestyle testosterone trophy Sergeant major face mop bogie basket dickie davies elit super mario.\u003c\/p\u003e\n\u003cp\u003eLanded gentry cesar romero by jingo. Nostrilis tickler albert einstein, super mario id educated cesar romero tip top old bean landed gentry don’t panic by jingo. Nostrilis tickler albert einstein dali, albert einstein tip top old bean tom selleck Nostrilis tickler id by jingo. don’t panic prostate cancer Sergeant major dali landed gentry hair trimmer cesar romero super mario educated?\u003c\/p\u003e&quot;,&quot;published_at&quot;:&quot;2019-03-12T11:53:01-04:00&quot;,&quot;created_at&quot;:&quot;2019-03-12T12:32:55-04:00&quot;,&quot;vendor&quot;:&quot;Amazona&quot;,&quot;type&quot;:&quot;book&quot;,&quot;tags&quot;:[&quot;book&quot;,&quot;copy_hard&quot;,&quot;copy_soft&quot;,&quot;type_new&quot;],&quot;price&quot;:999,&quot;price_min&quot;:999,&quot;price_max&quot;:1899,&quot;available&quot;:true,&quot;price_varies&quot;:true,&quot;compare_at_price&quot;:1999,&quot;compare_at_price_min&quot;:1999,&quot;compare_at_price_max&quot;:1999,&quot;compare_at_price_varies&quot;:false,&quot;variants&quot;:[{&quot;id&quot;:14458465648692,&quot;title&quot;:&quot;Hard&quot;,&quot;option1&quot;:&quot;Hard&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;123&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;De Vengeance - J.D Kurtness - Hard&quot;,&quot;public_title&quot;:&quot;Hard&quot;,&quot;options&quot;:[&quot;Hard&quot;],&quot;price&quot;:1899,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:14458465681460,&quot;title&quot;:&quot;Soft&quot;,&quot;option1&quot;:&quot;Soft&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;456&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;De Vengeance - J.D Kurtness - Soft&quot;,&quot;public_title&quot;:&quot;Soft&quot;,&quot;options&quot;:[&quot;Soft&quot;],&quot;price&quot;:1099,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}},{&quot;id&quot;:14458465714228,&quot;title&quot;:&quot;Audio&quot;,&quot;option1&quot;:&quot;Audio&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;789&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;De Vengeance - J.D Kurtness - Audio&quot;,&quot;public_title&quot;:&quot;Audio&quot;,&quot;options&quot;:[&quot;Audio&quot;],&quot;price&quot;:999,&quot;weight&quot;:0,&quot;compare_at_price&quot;:1999,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;quantity_rule&quot;:{&quot;min&quot;:1,&quot;max&quot;:null,&quot;increment&quot;:1}}],&quot;images&quot;:[&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/8-700x700_63654d3a-5549-4e8d-b9c5-234e2e45d2a8.jpg?v=1552408391&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/7-700x700_1ae4b16b-ee2d-4e79-9d20-d794e9a09f26.jpg?v=1552408391&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/16-700x700_a44a3072-1aa1-4867-9210-9b6af51ad46c.jpg?v=1552408391&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/13-700x700_2ddc69c5-5d3a-44f9-be4a-d4b2a4acd021.jpg?v=1552408391&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/3-700x700_8c905178-66a2-4459-ae02-ed4a6436b71e.jpg?v=1552408391&quot;,&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/4-700x700_4b54a7ab-f13c-47ec-bd18-cd5cd1eb32a7.jpg?v=1552408391&quot;],&quot;featured_image&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/8-700x700_63654d3a-5549-4e8d-b9c5-234e2e45d2a8.jpg?v=1552408391&quot;,&quot;options&quot;:[&quot;Copy&quot;],&quot;media&quot;:[{&quot;alt&quot;:null,&quot;id&quot;:1547387895860,&quot;position&quot;:1,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/8-700x700_63654d3a-5549-4e8d-b9c5-234e2e45d2a8.jpg?v=1552408391&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/8-700x700_63654d3a-5549-4e8d-b9c5-234e2e45d2a8.jpg?v=1552408391&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547387732020,&quot;position&quot;:2,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/7-700x700_1ae4b16b-ee2d-4e79-9d20-d794e9a09f26.jpg?v=1552408391&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/7-700x700_1ae4b16b-ee2d-4e79-9d20-d794e9a09f26.jpg?v=1552408391&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547387764788,&quot;position&quot;:3,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/16-700x700_a44a3072-1aa1-4867-9210-9b6af51ad46c.jpg?v=1552408391&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/16-700x700_a44a3072-1aa1-4867-9210-9b6af51ad46c.jpg?v=1552408391&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547387797556,&quot;position&quot;:4,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/13-700x700_2ddc69c5-5d3a-44f9-be4a-d4b2a4acd021.jpg?v=1552408391&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/13-700x700_2ddc69c5-5d3a-44f9-be4a-d4b2a4acd021.jpg?v=1552408391&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547387830324,&quot;position&quot;:5,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/3-700x700_8c905178-66a2-4459-ae02-ed4a6436b71e.jpg?v=1552408391&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/3-700x700_8c905178-66a2-4459-ae02-ed4a6436b71e.jpg?v=1552408391&quot;,&quot;width&quot;:700},{&quot;alt&quot;:null,&quot;id&quot;:1547387863092,&quot;position&quot;:6,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;width&quot;:700,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/4-700x700_4b54a7ab-f13c-47ec-bd18-cd5cd1eb32a7.jpg?v=1552408391&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:700,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/4-700x700_4b54a7ab-f13c-47ec-bd18-cd5cd1eb32a7.jpg?v=1552408391&quot;,&quot;width&quot;:700}],&quot;content&quot;:&quot;\u003cp\u003eMovember Nostrilis tickler magnum pi louis xiii professor plum graeme souness sweat irrigator,, ding-dong louis xiii socially mobile louis xiii movember graeme souness magnum pi sweat irrigator, Nostrilis tickler professor plum theodore roosevelt andrew weatherall. Circus strongman mark lawrenson admiral, dick dastardly admiral circus strongman stiff upper lip fu manchu hairy kiss. Nostrilis tickler mark lawrenson, circus strongman admiral Nostrilis tickler saddam hussein mark lawrenson sweat irrigator, cigars hairy kiss. stiff upper lip burt reynolds fu manchu dick dastardly.\u003c\/p\u003e\n\u003cp\u003eSuper mario top gun freestyle, freestyle che guevara jolly good show bogie basket super mario top gun face mop, Droopy top gun che guevara Fallen eyebrow jolly good show freestyle testosterone trophy Sergeant major face mop bogie basket dickie davies elit super mario.\u003c\/p\u003e\n\u003cp\u003eLanded gentry cesar romero by jingo. Nostrilis tickler albert einstein, super mario id educated cesar romero tip top old bean landed gentry don’t panic by jingo. Nostrilis tickler albert einstein dali, albert einstein tip top old bean tom selleck Nostrilis tickler id by jingo. don’t panic prostate cancer Sergeant major dali landed gentry hair trimmer cesar romero super mario educated?\u003c\/p\u003e&quot;}'
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

                                                                            <span class="shopify-product-reviews-badge"
                                                                                data-id="1613151338548"></span>

                                                                        </div>
                                                                    </div>

                                                                    <div class="price-box">

                                                                        <p class="special-price"><span
                                                                                class="price"><span
                                                                                    class=money>$18.99</span></span></p>
                                                                        <p class="old-price"><span class="price"><span
                                                                                    class=money>$19.99</span></span></p>

                                                                    </div>
                                                                    <!-- price-container -->






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
                                        <!-- product-layout -->
                                    </div>







                                </div>
                            </div>
                            <!--End of Featured Product Area-->

                        </div>




                        <div class="container custom-category">
                            <!-- Begin Recently Viewed Products -->
                            <script src="https://ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.min.js"
                                type="text/javascript"></script>
                            <script
                                src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>cdn/shop/t/16/assets/jquery.products.min.js@v=45356954439364673951562343327"
                                type="text/javascript"></script>


                            <script>
                            Shopify.Products.recordRecentlyViewed();
                            </script>

                            <!-- End Recently Viewed Products -->
                            <div class="module-title">
                                <h2>Recently Viewed Products</h2>
                            </div>
                            <div id="recently-viewed-products" class="row" style="display:none">
                            </div>

                            <script id="recently-viewed-product-template" type="text/x-jquery-tmpl">
                                <div class="product-layout product-grid grid-style col-lg-3 col-md-3 col-sm-3 col-xs-6 product-item" id="product-${handle}">
  <div class="product-thumb transition">
    <div class="item">
      <div class="item-inner">
        <div class="caption-top">
          <p class="manufacture-product">
            <a href="https://smartbook-theme.myshopify.com/collections/vendors?q=${vendor}">${vendor}</a>                
          </p>
          <h4 class="product-name">
            <a href="https://smartbook-theme.myshopify.com/products/${url}">
        ${title}
        </a>
          </h4>
        </div>
        <div class="box-border">
          <div class="image images-container">
            <a href="https://smartbook-theme.myshopify.com/products/${url}" class="product-image">
              <img class="img-responsive has-rotator img-default-image" src="https://smartbook-theme.myshopify.com/products/${Shopify.Products.resizeImage(featured_image,"medium")}" alt="${title}">
            </a>
            <div class="box-label"></div>
            <div class="action-links">
              <button class="button btn-cart {{if !available}} btn disabled{{/if}}" type="button" data-toggle="tooltip" data-loading-text="" title="" {{if available}}onclick="cart.add('${variants[0].id}');"{{/if}}>
                  <span>{{if available}}{{/if}}{{if !available}}'Sold Out'{{/if}}</span>
                </button>
            </div>
          </div>
          <!-- image -->
          <div class="caption">
            <div class="inner">
              <div class="ratings">
                <div class="rating-box">
                  <span class="shopify-product-reviews-badge" data-id="${id}"></span>
                </div>
              </div>
              <div class="price-box">
                <p class="special-price"><span class="price">{{html Shopify.formatMoney(price_min)}}</span></p>
                {{if compare_at_price_min > price_min}} 
                <p class="old-price"><span class="price">{{html Shopify.formatMoney(compare_at_price_min)}}</span></p>
                {{/if}}
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
</script>


                            <script>
                            Shopify.Products.showRecentlyViewed({
                                howManyToShow: 4
                            });
                            </script>
                        </div>


                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row">
                    <form action="https://smartbook-theme.myshopify.com/cart/add" method="post"
                        enctype="multipart/form-data" id="form_buy_sticky" name="form_buy_sticky" class="form-inline">
                        <div class="form_buy_sticky">
                            <div class="form-group hidden-xs">
                                <a class="product-image" title="A WING and a PRAYER - Morano"
                                    href="../collections/featured-products/products/a-wing-and-a-prayer.html">
                                    <img class="img-thumbnail"
                                        src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>images/products/2-700x700_32x32.jpg@v=1552406461"
                                        alt="">
                                </a>
                            </div>
                            <div class="form-group hidden-sm hidden-xs">
                                <h5>A WING and a PRAYER - Morano</h5>
                            </div>
                            <div class="form-group col-7">
                                <select name="id" id="productSelect" class="form-control">


                                    <option selected="selected" data-sku="123" value="14458009550900">Hard - <span
                                            class=money>$14.99 USD</span></option>



                                    <option data-sku="456" value="14458071351348">Soft - <span class=money>$10.99
                                            USD</span></option>



                                    <option data-sku="789" value="14458071384116">Audio - <span class=money>$9.99
                                            USD</span></option>


                                </select>
                            </div>
                            <div class="form-group col-2">

                                <input type="text" name="stickyquantity" value="1" size="2" id="Quantity"
                                    onkeyup="updatecartsticky(2)" class="form-control" />

                            </div>
                            <div class="form-group col-3">

                                <button class="btn button button-cart" type="button" id="button-cart-sticky"
                                    data-loading-text="Loading...">
                                    Add to Cart
                                </button>

                            </div>
                        </div>
                    </form>
                    <!-- end-form -->
                </div>
            </div>
            <script type="text/javascript">
            function updatecartsticky(input1) {
                if (input1 == 1) {
                    $('#form_buy_sticky').find('input[name="stickyquantity"]').val($('#form_buy').find(
                        'input[name="quantity"]').val());
                    //document.forms['form_buy_sticky']['stickyquantity'].value = document.forms['form_buy']['quantity'].value;
                } else {
                    $('#form_buy').find('input[name="quantity"]').val($('#form_buy_sticky').find(
                        'input[name="stickyquantity"]').val());
                    //document.forms['form_buy']['quantity'].value = document.forms['form_buy_sticky']['stickyquantity'].value;
                }
            }
            </script>




            <script type="text/javascript">
            <!--
            // related products	 
            $(document).ready(function() {

                $('.related-container').owlCarousel({
                    nav: false,
                    dots: true,
                    navSpeed: 1000,
                    margin: 0,
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
                            items: 3
                        },
                        1200: {
                            items: 4
                        }

                    },
                    onInitialized: function() {
                        owlAction();
                    },
                    onTranslated: function() {
                        owlAction();
                    }
                });

                function owlAction() {
                    $(".related-container .owl-item").removeClass('first');
                    $(".related-container .owl-item").removeClass('last');
                    $(".related-container .owl-item").removeClass('before-active');
                    $(".related-container .owl-item.active:first").addClass('first');
                    $(".related-container .owl-item.active:last").addClass('last');
                    $('.related-container .owl-item.active:first').prev().addClass('before-active');
                }

            });
            //
            -->
            </script>
            <script>
            $(document).ready(function() {
                // vertical thumbs on product page



            });

            // Pre-loading product images, to avoid a lag when a thumbnail is clicked, or
            // when a variant is selected that has a variant image.
            Shopify.Image.preload(["\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/2-700x700.jpg?v=1552406461",
                "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/1-700x700.jpg?v=1552406462",
                "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/5-700x700.jpg?v=1552406463",
                "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/6-700x700.jpg?v=1552406464",
                "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/9-700x700.jpg?v=1552406466",
                "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/11-700x700.jpg?v=1552406467",
                "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/14-700x700.jpg?v=1552406468",
                "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/15-700x700.jpg?v=1552406469"
            ], '700x700');

            var selectCallback = function(variant, selector) {

                var $addToCart = $('#button-cart'),
                    $addToCartBuy = $('#button-cart-buy'),
                    $productPrice = $('#productPrice'),
                    $comparePrice = $('#comparePrice'),
                    $variantQuantity = $('#variantQuantity'),
                    $quantityElements = $('.quantity-selector, label + .js-qty'),
                    $addToCartText = $('#button-cart'),
                    $featuredImage = $('#productPhotoImg');
                if (variant) {
                    // Update variant image, if one is set
                    // Call timber.switchImage function in shop.js
                    if (variant.featured_image) {
                        var newImg = variant.featured_image,
                            el = $featuredImage[0];
                        $(function() {
                            Shopify.Image.switchImage(newImg, el, timber.switchImage);

                        });
                    }

                    // Select a valid variant if available
                    if (variant.available) {
                        // We have a valid product variant, so enable the submit button
                        $addToCart.removeClass('disabled').prop('disabled', false);
                        $addToCartBuy.removeClass('disabled').prop('disabled', false);

                        $addToCartText.html("Add to Cart");

                        $quantityElements.show();
                        var inventory_level = (inv_qty[variant.id]);
                        // Show how many items are left, if below 10

                        if (variant.inventory_management) {
                            if (inventory_level < 10 && inventory_level > 0) {
                                $variantQuantity.html("Only 1 left!".replace('1', inventory_level)).addClass(
                                    'is-visible');
                            } else if (inventory_level <= 0 && variant.incoming) {
                                $variantQuantity.html("Will not ship until [date]".replace('[date]', variant
                                    .next_incoming_date)).addClass('is-visible');
                            } else {
                                $variantQuantity.removeClass('is-visible');
                            }
                        } else {
                            $variantQuantity.removeClass('is-visible');
                        }

                        if (variant.inventory_management) {
                            if (inventory_level >= 10) {
                                $('.ex-text').html('In Stock').css("color", "");
                            } else if (inventory_level < 10 && inventory_level > 0) {
                                $('.ex-text').html(inventory_level + ' In Stock').css("color", "orange");
                            } else {
                                $('.ex-text').html('Out Of Stock').css("color", "red");
                            }
                        }
                    } else {
                        // Variant is sold out, disable the submit button
                        $addToCart.addClass('disabled').prop('disabled', true);
                        $addToCartBuy.addClass('disabled').prop('disabled', true);
                        $addToCartText.html("Sold Out");
                        $variantQuantity.removeClass('is-visible');
                        if (variant.incoming) {
                            $variantQuantity.html("Will be in stock after [date]".replace('[date]', variant
                                .next_incoming_date)).addClass('is-visible');
                        } else {
                            $variantQuantity.addClass('hide');
                        }
                        $quantityElements.hide();
                    }

                    // Regardless of stock, update the product price
                    Shopify.money_format = '<span class=money>${{amount}}</span>';

                    //var customPrice = timber.formatMoney( Shopify.formatMoney(variant.price,Shopify.money_format) );
                    var a11yPrice = Shopify.formatMoney(variant.price, Shopify.money_format);
                    // var customPriceFormat = ' <span aria-hidden="true">' + customPrice + '</span>';
                    var customPriceFormat = ' <span class="visually-hidden">' + a11yPrice + '</span>';
                    $productPrice.html(customPriceFormat);

                    // Also update and show the product's compare price if necessary

                    if (variant.compare_at_price > variant.price) {
                        var a11yComparePrice = Shopify.formatMoney(variant.compare_at_price, Shopify.money_format);
                        comparePriceFormat = ' <span class="visually-hidden">' + a11yComparePrice + '</span>';
                        $comparePrice.html(comparePriceFormat);
                    } else {
                        $comparePrice.hide();
                    }


                    var defaultCurrency = 'USD';
                    var shopCurrency = 'USD';
                    var cookieCurrency = Currency.cookie.read();
                    if (cookieCurrency == null) {
                        Currency.convertAll(shopCurrency, defaultCurrency);
                    } else {
                        Currency.convertAll(shopCurrency, cookieCurrency);
                    }


                } else {
                    // The variant doesn't exist, disable submit button.
                    // This may be an error or notice that a specific variant is not available.
                    $addToCart.addClass('disabled').prop('disabled', true);
                    $addToCartBuy.addClass('disabled').prop('disabled', true);
                    $addToCartText.html("Unavailable");
                    $variantQuantity.removeClass('is-visible');
                    $quantityElements.hide();
                }
                if (variant && variant.featured_image) {
                    var originalImage = $(".cloud-zoom.main-image img");
                    var newImage = variant.featured_image;
                    var element = originalImage[0];
                    Shopify.Image.switchImage(newImage, element, function(newImageSizedSrc, newImage, element) {
                        $(element).parents('a').attr('href', newImageSizedSrc);
                        $(element).attr('src', newImageSizedSrc);
                        $('#light-box-position').val(newImage.position);
                        $('.cloud-zoom, .cloud-zoom-gallery').CloudZoom();

                    });
                }
                // BEGIN SWATCHES
                if (variant) {
                    var form = $('#' + selector.domIdPrefix).closest('form');
                    for (var i = 0, length = variant.options.length; i < length; i++) {
                        var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' +
                            variant.options[i] + '"]');
                        if (radioButton.size()) {
                            radioButton.get(0).checked = true;
                        }
                    }
                }
                // END SWATCHES

                // SHOW/HIDE SKU
                if (variant) {
                    $('.variant-sku').text(variant.sku);
                    if (variant.sku != '')
                        $('.skuvariant').show();
                    else
                        $('.skuvariant').hide();
                } else {
                    $('.variant-sku').empty();
                }

                // Sticky Add to cart
                if (variant) {
                    var select1 = $('#form_buy').find('select[name="productSelect"]').val();
                    $('#form_buy_sticky').find('select[name="id"]').val($('#form_buy').find('select[name="id"]')
                        .val());

                    if (variant.featured_image) {
                        var originalImageSticky = $("#form_buy_sticky img");
                        var newImage = variant.featured_image;
                        var element = originalImageSticky[0];
                        Shopify.Image.switchImage(newImage, element, function(newImageSizedSrc, newImage, element) {
                            $(element).parents('a').attr('href', newImageSizedSrc);
                            $(element).attr('src', newImageSizedSrc);

                        });
                    }
                }
            };

            jQuery(function($) {
                var product = {
                    "id": 1613076168756,
                    "title": "A WING and a PRAYER - Morano",
                    "handle": "a-wing-and-a-prayer",
                    "description": "\u003cp\u003eLanded gentry cesar romero by jingo. Nostrilis tickler albert einstein, super mario id educated cesar romero tip top old bean landed gentry don’t panic by jingo. Nostrilis tickler albert einstein dali, albert einstein tip top old bean tom selleck Nostrilis tickler id by jingo. don’t panic prostate cancer Sergeant major dali landed gentry hair trimmer cesar romero super mario educated?\u003c\/p\u003e\n\u003cp\u003eSuper mario top gun freestyle, freestyle che guevara jolly good show bogie basket super mario top gun face mop, Droopy top gun che guevara Fallen eyebrow jolly good show freestyle testosterone trophy Sergeant major face mop bogie basket dickie davies elit super mario.\u003c\/p\u003e\n\u003cp\u003eMovember Nostrilis tickler magnum pi louis xiii professor plum graeme souness sweat irrigator,, ding-dong louis xiii socially mobile louis xiii movember graeme souness magnum pi sweat irrigator, Nostrilis tickler professor plum theodore roosevelt andrew weatherall. Circus strongman mark lawrenson admiral, dick dastardly admiral circus strongman stiff upper lip fu manchu hairy kiss. Nostrilis tickler mark lawrenson, circus strongman admiral Nostrilis tickler saddam hussein mark lawrenson sweat irrigator, cigars hairy kiss. stiff upper lip burt reynolds fu manchu dick dastardly.\u003c\/p\u003e\n[deal] 2020-10-11[\/deal]",
                    "published_at": "2019-03-12T11:53:01-04:00",
                    "created_at": "2019-03-12T12:00:57-04:00",
                    "vendor": "Little Green Works",
                    "type": "book",
                    "tags": ["book", "copy_audio", "copy_hard", "copy_soft", "type_new", "type_used"],
                    "price": 999,
                    "price_min": 999,
                    "price_max": 1499,
                    "available": true,
                    "price_varies": true,
                    "compare_at_price": 1999,
                    "compare_at_price_min": 1999,
                    "compare_at_price_max": 1999,
                    "compare_at_price_varies": false,
                    "variants": [{
                        "id": 14458009550900,
                        "title": "Hard",
                        "option1": "Hard",
                        "option2": null,
                        "option3": null,
                        "sku": "123",
                        "requires_shipping": true,
                        "taxable": true,
                        "featured_image": null,
                        "available": true,
                        "name": "A WING and a PRAYER - Morano - Hard",
                        "public_title": "Hard",
                        "options": ["Hard"],
                        "price": 1499,
                        "weight": 0,
                        "compare_at_price": 1999,
                        "inventory_management": "shopify",
                        "barcode": "",
                        "quantity_rule": {
                            "min": 1,
                            "max": null,
                            "increment": 1
                        }
                    }, {
                        "id": 14458071351348,
                        "title": "Soft",
                        "option1": "Soft",
                        "option2": null,
                        "option3": null,
                        "sku": "456",
                        "requires_shipping": true,
                        "taxable": true,
                        "featured_image": null,
                        "available": true,
                        "name": "A WING and a PRAYER - Morano - Soft",
                        "public_title": "Soft",
                        "options": ["Soft"],
                        "price": 1099,
                        "weight": 0,
                        "compare_at_price": 1999,
                        "inventory_management": "shopify",
                        "barcode": "",
                        "quantity_rule": {
                            "min": 1,
                            "max": null,
                            "increment": 1
                        }
                    }, {
                        "id": 14458071384116,
                        "title": "Audio",
                        "option1": "Audio",
                        "option2": null,
                        "option3": null,
                        "sku": "789",
                        "requires_shipping": true,
                        "taxable": true,
                        "featured_image": null,
                        "available": true,
                        "name": "A WING and a PRAYER - Morano - Audio",
                        "public_title": "Audio",
                        "options": ["Audio"],
                        "price": 999,
                        "weight": 0,
                        "compare_at_price": 1999,
                        "inventory_management": "shopify",
                        "barcode": "",
                        "quantity_rule": {
                            "min": 1,
                            "max": null,
                            "increment": 1
                        }
                    }],
                    "images": [
                        "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/2-700x700.jpg?v=1552406461",
                        "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/1-700x700.jpg?v=1552406462",
                        "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/5-700x700.jpg?v=1552406463",
                        "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/6-700x700.jpg?v=1552406464",
                        "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/9-700x700.jpg?v=1552406466",
                        "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/11-700x700.jpg?v=1552406467",
                        "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/14-700x700.jpg?v=1552406468",
                        "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/15-700x700.jpg?v=1552406469"
                    ],
                    "featured_image": "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/2-700x700.jpg?v=1552406461",
                    "options": ["Copy"],
                    "media": [{
                        "alt": null,
                        "id": 1547358830644,
                        "position": 1,
                        "preview_image": {
                            "aspect_ratio": 1.0,
                            "height": 700,
                            "width": 700,
                            "src": "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/2-700x700.jpg?v=1552406461"
                        },
                        "aspect_ratio": 1.0,
                        "height": 700,
                        "media_type": "image",
                        "src": "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/2-700x700.jpg?v=1552406461",
                        "width": 700
                    }, {
                        "alt": null,
                        "id": 1547358863412,
                        "position": 2,
                        "preview_image": {
                            "aspect_ratio": 1.0,
                            "height": 700,
                            "width": 700,
                            "src": "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/1-700x700.jpg?v=1552406462"
                        },
                        "aspect_ratio": 1.0,
                        "height": 700,
                        "media_type": "image",
                        "src": "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/1-700x700.jpg?v=1552406462",
                        "width": 700
                    }, {
                        "alt": null,
                        "id": 1547358896180,
                        "position": 3,
                        "preview_image": {
                            "aspect_ratio": 1.0,
                            "height": 700,
                            "width": 700,
                            "src": "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/5-700x700.jpg?v=1552406463"
                        },
                        "aspect_ratio": 1.0,
                        "height": 700,
                        "media_type": "image",
                        "src": "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/5-700x700.jpg?v=1552406463",
                        "width": 700
                    }, {
                        "alt": null,
                        "id": 1547358928948,
                        "position": 4,
                        "preview_image": {
                            "aspect_ratio": 1.0,
                            "height": 700,
                            "width": 700,
                            "src": "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/6-700x700.jpg?v=1552406464"
                        },
                        "aspect_ratio": 1.0,
                        "height": 700,
                        "media_type": "image",
                        "src": "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/6-700x700.jpg?v=1552406464",
                        "width": 700
                    }, {
                        "alt": null,
                        "id": 1547358961716,
                        "position": 5,
                        "preview_image": {
                            "aspect_ratio": 1.0,
                            "height": 700,
                            "width": 700,
                            "src": "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/9-700x700.jpg?v=1552406466"
                        },
                        "aspect_ratio": 1.0,
                        "height": 700,
                        "media_type": "image",
                        "src": "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/9-700x700.jpg?v=1552406466",
                        "width": 700
                    }, {
                        "alt": null,
                        "id": 1547358994484,
                        "position": 6,
                        "preview_image": {
                            "aspect_ratio": 1.0,
                            "height": 700,
                            "width": 700,
                            "src": "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/11-700x700.jpg?v=1552406467"
                        },
                        "aspect_ratio": 1.0,
                        "height": 700,
                        "media_type": "image",
                        "src": "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/11-700x700.jpg?v=1552406467",
                        "width": 700
                    }, {
                        "alt": null,
                        "id": 1547359060020,
                        "position": 7,
                        "preview_image": {
                            "aspect_ratio": 1.0,
                            "height": 700,
                            "width": 700,
                            "src": "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/14-700x700.jpg?v=1552406468"
                        },
                        "aspect_ratio": 1.0,
                        "height": 700,
                        "media_type": "image",
                        "src": "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/14-700x700.jpg?v=1552406468",
                        "width": 700
                    }, {
                        "alt": null,
                        "id": 1547359158324,
                        "position": 8,
                        "preview_image": {
                            "aspect_ratio": 1.0,
                            "height": 700,
                            "width": 700,
                            "src": "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/15-700x700.jpg?v=1552406469"
                        },
                        "aspect_ratio": 1.0,
                        "height": 700,
                        "media_type": "image",
                        "src": "\/\/smartbook-theme.myshopify.com\/cdn\/shop\/products\/15-700x700.jpg?v=1552406469",
                        "width": 700
                    }],
                    "content": "\u003cp\u003eLanded gentry cesar romero by jingo. Nostrilis tickler albert einstein, super mario id educated cesar romero tip top old bean landed gentry don’t panic by jingo. Nostrilis tickler albert einstein dali, albert einstein tip top old bean tom selleck Nostrilis tickler id by jingo. don’t panic prostate cancer Sergeant major dali landed gentry hair trimmer cesar romero super mario educated?\u003c\/p\u003e\n\u003cp\u003eSuper mario top gun freestyle, freestyle che guevara jolly good show bogie basket super mario top gun face mop, Droopy top gun che guevara Fallen eyebrow jolly good show freestyle testosterone trophy Sergeant major face mop bogie basket dickie davies elit super mario.\u003c\/p\u003e\n\u003cp\u003eMovember Nostrilis tickler magnum pi louis xiii professor plum graeme souness sweat irrigator,, ding-dong louis xiii socially mobile louis xiii movember graeme souness magnum pi sweat irrigator, Nostrilis tickler professor plum theodore roosevelt andrew weatherall. Circus strongman mark lawrenson admiral, dick dastardly admiral circus strongman stiff upper lip fu manchu hairy kiss. Nostrilis tickler mark lawrenson, circus strongman admiral Nostrilis tickler saddam hussein mark lawrenson sweat irrigator, cigars hairy kiss. stiff upper lip burt reynolds fu manchu dick dastardly.\u003c\/p\u003e\n[deal] 2020-10-11[\/deal]"
                };


                product.variants[0].incoming = false;
                product.variants[0].next_incoming_date = null;

                product.variants[1].incoming = false;
                product.variants[1].next_incoming_date = null;

                product.variants[2].incoming = false;
                product.variants[2].next_incoming_date = null;



                new Shopify.OptionSelectors('productSelect', {
                    product: product,
                    onVariantSelected: selectCallback,
                    enableHistoryState: true
                });

                // Add label if only one product option and it isn't 'Title'. Could be 'Size'.

                $('.selector-wrapper:eq(0)').prepend('<label>Copy</label>');

                /* Hide selectors if we only have 1 variant and its title contains 'Default'. */

                $('#variantBreak').removeClass('hr--clear');

                //$('.selector-wrapper').hide();
            });
            </script>
        </div>

        <!-- End Content -->

        <!-- Quickview Product-->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <!-- Start product images -->
                                <div class="product-images">
                                    <div class="main-image images">
                                        <img alt=""
                                            src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>collections/vendors/products/a-wing-and-a-prayer.html"
                                            class="img-responsive">
                                    </div>
                                </div>
                                <!-- end product images -->
                                <div class="product-info">
                                    <h2>Sleeve High Neck Bodycon Dress </h2>
                                    <div class="price-box">
                                        <p class="price"><span class="special-price"><span
                                                    class="amount">$132.00</span></span></p>
                                    </div>
                                    <a href="https://smartbook-theme.myshopify.com/products/shop.html"
                                        class="see-all">See all features</a>
                                    <div class="quick-add-to-cart">
                                        <form class="cart" action="https://smartbook-theme.myshopify.com/cart/add"
                                            method="post" enctype="multipart/form-data" id="addToCartForm">
                                            <div class="numbers-row">
                                                <input type="hidden" id="id" name="id" value="" />
                                                <input type="number" name="quantity" id="quantity" value="1">
                                            </div>
                                            <button class="single_add_to_cart_button" type="submit">Add to Cart</button>
                                        </form>
                                    </div>
                                    <div class="quick-desc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec
                                        est tristique auctor. Donec non est at libero.
                                    </div>
                                </div>
                                <!-- .product-info -->
                            </div>
                            <!-- .modal-product -->
                        </div>
                        <!-- .modal-body -->
                    </div>
                    <!-- .modal-content -->
                </div>
                <!-- .modal-dialog -->
            </div>
            <!-- END Modal -->
        </div>
        <!-- End Quickview Product -->

        <div id="shopify-section-footer" class="shopify-section section-footer">
            <!--Footer Start-->
            <footer>
                <div class="footer-top ">
                    <div class="container">
                        <div class="container-inner">
                            <div class="row">
                                <div class="col col1  col-md-3 col-sm-6 col-xs-12 col-footer">
                                    <div class="footer-title">
                                        <h5>About Us</h5>
                                    </div>
                                    <div class="footer-contact footer-content">
                                        <div class="">

                                            <a href="../index.php" itemprop="url" class="logo-footer">
                                                <img src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>cdn/shop/files/logo_ca90e1e9-33da-4ed1-bcb0-19c471d50256.png@v=1613707406"
                                                    alt="SmartBook - eBooks , Bookstore Shopify Theme" itemprop="logo">
                                            </a>


                                            <p>We are a team of designers and developers who creates high quality
                                                premium Shopify themes.</p>

                                            <ul class="list-unstyled text-content">

                                                <li class="address">
                                                    <p>Address:</p>
                                                    <p>169-C, Technohub, Dubai</p>
                                                </li>


                                                <li class="phone">
                                                    <p>Call Us:</p>
                                                    <p>(012) 800 456 789</p>
                                                </li>


                                                <li class="email">
                                                    <p>Mail us:</p>
                                                    <p>support@masstechnologist.com</p>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col2 col-md-3 col-sm-6 col-xs-12 col-footer">
                                    <div class="footer-title">
                                        <h5>Main menu</h5>
                                    </div>
                                    <div class="footer-content">
                                        <ul class="list-unstyled text-content">

                                            <li><a href="../index.php">Home</a></li>

                                            <li><a
                                                    href="../collections/all/index.html@preview_theme_id=74460266548.html">Catalog</a>
                                            </li>

                                            <li><a href="https://smartbook-theme.myshopify.com/search">Specials</a></li>

                                            <li><a href="https://smartbook-theme.myshopify.com/search">Pages</a></li>

                                            <li><a
                                                    href="../collections/vendors/products/copy-of-rising-crow-by-k-l-byles.html">Product
                                                    Pages </a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col col3 col-md-3 col-sm-6 col-xs-12 col-footer">
                                    <div class="footer-title">
                                        <h5>Main menu</h5>
                                    </div>
                                    <div class="footer-content">
                                        <ul class="list-unstyled text-content">

                                            <li><a href="../index.php">Home</a></li>

                                            <li><a
                                                    href="../collections/all/index.html@preview_theme_id=74460266548.html">Catalog</a>
                                            </li>

                                            <li><a href="https://smartbook-theme.myshopify.com/search">Specials</a></li>

                                            <li><a href="https://smartbook-theme.myshopify.com/search">Pages</a></li>

                                            <li><a
                                                    href="../collections/vendors/products/copy-of-rising-crow-by-k-l-byles.html">Product
                                                    Pages </a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col4  col-md-3 col-sm-6 col-xs-12 col-footer">
                                    <!--Newsletter Area Start-->
                                    <div class="newletter-subscribe-container">
                                        <div class="container-inner">
                                            <div class="newletter-subscribe">
                                                <div id="boxes-normal" class="newletter-container">
                                                    <div id="dialog-normal" class="window">
                                                        <div class="box">
                                                            <div class="newletter-title">
                                                                <h5>Join Our Newsletter Now</h5>
                                                                <p class="des">
                                                                    We’ll never share your email address with a
                                                                    third-party.
                                                                </p>
                                                            </div>
                                                            <div class="box-content newleter-content">
                                                                <div id="frm_subscribe-normal">


                                                                    <div id="subscribe-normal">
                                                                        <form method="post"
                                                                            action="https://smartbook-theme.myshopify.com/contact#contact_form"
                                                                            id="contact_form" accept-charset="UTF-8"
                                                                            class="contact-form"><input type="hidden"
                                                                                name="form_type"
                                                                                value="customer" /><input type="hidden"
                                                                                name="utf8" value="✓" />


                                                                            <input type="hidden" name="contact[tags]"
                                                                                value="newsletter">
                                                                            <input type="text" value=""
                                                                                placeholder="Enter you email address here..."
                                                                                name="contact[email]"
                                                                                id="subscribe_email-normal" required
                                                                                aria-label="Enter you email address here..."
                                                                                autocorrect="off" autocapitalize="off">
                                                                            <a name="submitNewsletter" class="btn"
                                                                                type="submit"
                                                                                onclick="this.parentNode.submit(); return false;">
                                                                                <span>Subscribe</span>
                                                                            </a>

                                                                        </form>
                                                                    </div>

                                                                </div>
                                                                <!-- /#frm_subscribe -->
                                                            </div>
                                                            <!-- /.box-content -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.box -->

                                    <div class="follow">
                                        <label>Stay Connected</label>
                                        <ul class="link-follow">

                                            <li class="first">
                                                <a class="fa fa-facebook facebook" data-toggle="tooltip"
                                                    data-placement="bottom" href="https://facebook.com/shopify"
                                                    title="SmartBook - eBooks , Bookstore Shopify Theme on Facebook">
                                                </a>
                                            </li>


                                            <li>
                                                <a class="fa fa-twitter twitter" data-toggle="tooltip"
                                                    data-placement="bottom" href="https://twitter.com/shopify"
                                                    title="SmartBook - eBooks , Bookstore Shopify Theme on Twitter">
                                                </a>
                                            </li>


                                            <li>
                                                <a class="fa fa-pinterest-square pinterest" data-toggle="tooltip"
                                                    data-placement="bottom" href="https://pinterest.com/shopify"
                                                    title="SmartBook - eBooks , Bookstore Shopify Theme on Pinterest">
                                                </a>
                                            </li>


                                            <li>
                                                <a class="fa fa-google-plus google" data-toggle="tooltip"
                                                    data-placement="bottom" href="https://plus.google.com/+shopify"
                                                    title="SmartBook - eBooks , Bookstore Shopify Theme on Google"
                                                    rel="publisher">
                                                </a>
                                            </li>


                                            <li>
                                                <a class="fa fa-instagram instagram" data-toggle="tooltip"
                                                    data-placement="bottom" href="https://instagram.com/shopify"
                                                    title="SmartBook - eBooks , Bookstore Shopify Theme on Instagram">
                                                </a>
                                            </li>





                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom ">
                    <div class="container">
                        <div class="container-inner">

                            <div class="payment">

                                <p>Suspendisse in auctor augue. Cras fermentum est ac fermentum tempor. Etiam vel magna
                                    volutpat, posuere eros</p>

                                <a href="../collections/vendors/products/a-wing-and-a-prayer.html#">
                                    <img src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>cdn/shop/files/payment.png@v=1613707537"
                                        alt="payment">
                                </a>
                            </div>

                            <div class="footer-copyright">
                                <p>Copyright © 2019 <a href="http://masstechnologist.com/">MassTechnologist.com.</a> All
                                    rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="back-top"><i class="ion-ios-arrow-up"></i></div>
            </footer>
            <script>
            $(document).ready(function() {
                // hide #back-top first
                $("#back-top").hide();
                // fade in #back-top
                $(function() {
                    $(window).scroll(function() {
                        if ($(this).scrollTop() > $('body').height() / 3) {
                            $('#back-top').fadeIn();
                        } else {
                            $('#back-top').fadeOut();
                        }
                    });
                    // scroll body to 0px on click
                    $('#back-top').click(function() {
                        $('body,html').animate({
                            scrollTop: 0
                        }, 800);
                        return false;
                    });
                });
                if (jQuery(window).width() < 768) {
                    jQuery('.footer-top .footer-title').click(function() {
                        jQuery(this).parent('.col').toggleClass('active').siblings().removeClass(
                            'active');
                        jQuery(this).next('.col .footer-content').toggle(300);
                        jQuery(this).parent('.col.active').siblings().children('.col .footer-content')
                            .slideUp(300);
                    });

                }
            });
            </script>
            <!--End of Footer-->


        </div>



        <script>
        var moneyFormat = '<span class=money>${{amount}}</span>';
        </script>


        <script
            src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>cdn/shop/t/16/assets/handlebars.min.js@v=79044469952368397291562343324"
            type="text/javascript"></script>


        <script
            src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>cdn/shop/t/16/assets/fastclick.min.js@v=29723458539410922371562343323"
            type="text/javascript"></script>

        <script
            src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>cdn/shop/t/16/assets/shop.js@v=20787976093020922481562343343"
            type="text/javascript"></script>


        <script
            src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>cdn/shop/t/16/assets/Wishlist.js@v=26158059899868642851562343343"
            type="text/javascript"></script>
        <script>
        (function() {
            Wishlist.init();
        }());
        </script>










        <script>
        //place script you don't want to run on mobile here
        $(function() {
            // Current Ajax request.
            var currentAjaxRequest = null;
            // Grabbing all search forms on the page, and adding a .search-results list to each.
            var searchForms = $('#search-by-category .search-container').css('position', 'relative').each(
                function() {
                    // Grabbing text input.
                    var input = $(this).find('input[name="q"]');
                    // Adding a list for showing search results.
                    var offSet = input.position().top + input.innerHeight();
                    $('ul.search-results').css({
                        'position': 'absolute',
                        'left': '0px',
                        'top': offSet
                    }).appendTo($(this)).hide();
                    // Listening to keyup and change on the text field within these search forms.
                    input.attr('autocomplete', 'off').bind('keyup change', function() {
                        // What's the search term?
                        var term = $(this).val();
                        // What's the search form?
                        var form = $(this).closest('form');
                        // What's the search URL?
                        var searchURL = '/search?type=product&q=' + term;
                        // What's the search results list?
                        var resultsList = $('ul.search-results');
                        // If that's a new term and it contains at least 3 characters.
                        if (term.length > 3 && term != $(this).attr('data-old-term')) {
                            // Saving old query.
                            $(this).attr('data-old-term', term);
                            // Killing any Ajax request that's currently being processed.
                            if (currentAjaxRequest != null) currentAjaxRequest.abort();
                            // Pulling results.
                            currentAjaxRequest = $.getJSON(searchURL + '&view=json', function(
                            data) {
                                // Reset results.
                                resultsList.empty();
                                // If we have no results.
                                if (data.results_count == 0) {
                                    resultsList.html(
                                        '<li><span class="title">No results found.</span></li>'
                                        );
                                    resultsList.fadeIn(200);
                                    //resultsList.hide();
                                } else {
                                    // If we have results.
                                    $.each(data.results, function(index, item) {
                                        var link = $('<a></a>').attr('href', item
                                            .url);
                                        link.append(
                                            '<span class="thumbnail"><img src="https://smartbook-theme.myshopify.com/products/' &
                                            #32;+&# 32; item.thumbnail &
                                            #32;+&# 32;
                                            '" /></span>');
                                        link.append('<span class="title">' + item
                                            .title + '</span>');
                                        link.append('<span class="price title">' +
                                            Shopify.formatMoney(item.price) +
                                            '</span>');
                                        link.wrap('<li></li>');
                                        resultsList.append(link.parent());
                                    });
                                    // The Ajax request will return at the most 10 results.
                                    // If there are more than 10, let's link to the search results page.
                                    if (data.results_count > 5) {
                                        resultsList.append(
                                            '<li><span class="title"><a href="https://smartbook-theme.myshopify.com/products/' &
                                            #32;+&# 32; searchURL & #32;+&# 32;
                                            '">See all results (' + data.results_count +
                                            ')</a></span></li>');
                                    }
                                    resultsList.fadeIn(200);
                                }
                            });
                        }
                    });
                });
            // Clicking outside makes the results disappear.
            $('body').bind('click', function() {
                $('.search-results').hide();
            });

        });
        </script>

        <!-- Some styles to get you started. -->
        <style>
        .search-results {
            z-index: 8889;
            list-style-type: none;
            width: 100%;
            margin: 0;
            padding: 0;
            background: #ffffff;
            border: 1px solid #d4d4d4;
            border-radius: 3px;
            -webkit-box-shadow: 0px 4px 7px 0px rgba(0, 0, 0, 0.1);
            box-shadow: 0px 4px 7px 0px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .search-results li {
            display: block;
            width: 100%;
            height: auto;
            margin: 0;
            padding: 0;
            border-top: 1px solid #d4d4d4;
            /*line-height: 38px;*/
            overflow: hidden;
        }

        .search-results li:first-child {
            border-top: none;
        }

        .search-results .title {
            display: block;
            max-width: 85%;
            padding: 8px 8px 4px 8px;
            white-space: nowrap;
            overflow: hidden;
            /* The text-overflow property is supported in all major browsers. */
            text-overflow: ellipsis;
            -o-text-overflow: ellipsis;
            text-align: left;
        }

        .search-results .thumbnail {
            float: left;
            display: block;
            width: inherit;
            height: inherit;
            margin: 3px 0 3px 3px;
            padding: 0;
            text-align: center;
            overflow: hidden;
        }
        </style>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"
            type="text/javascript"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" rel="stylesheet"
            type="text/css" media="all" />

        <script>
        window.addEventListener("load", function() {
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "#000",
                        "text": "#fff"
                    },
                    "button": {
                        "background": "",
                        "text": "",
                        "border": ""
                    }
                },
                "content": {
                    "href": ""
                }
            })
        });
        </script>


        <script
            src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>cdn/s/javascripts/currencies.js"
            type="text/javascript"></script>
        <script
            src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>cdn/shop/t/16/assets/jquery.currencies.min.js@v=175057760772006623221562343326"
            type="text/javascript"></script>

        <script>
        Currency.format = 'money_format';
        var shopCurrency = 'USD';
        /* Sometimes merchants change their shop currency, let's tell our JavaScript file */
        Currency.moneyFormats[shopCurrency].money_with_currency_format = "${{amount}} USD";
        Currency.moneyFormats[shopCurrency].money_format = "${{amount}}";

        /* Default currency */
        var defaultCurrency = 'USD';

        /* Cookie currency */
        var cookieCurrency = Currency.cookie.read();
        /* Fix for customer account pages */
        jQuery('span.money span.money').each(function() {
            jQuery(this).parents('span.money').removeClass('money');
        });
        /* Saving the current price */
        jQuery('span.money').each(function() {
            jQuery(this).attr('data-currency-USD', jQuery(this).html());
        });
        // If there's no cookie.
        if (cookieCurrency == null) {
            if (shopCurrency !== defaultCurrency) {
                Currency.convertAll(shopCurrency, defaultCurrency);
            } else {
                Currency.currentCurrency = defaultCurrency;
            }
        }
        // If the cookie value does not correspond to any value in the currency dropdown.
        /*else if (jQuery('[name=currencies]').size() && jQuery('[name=currencies] option[value=' + cookieCurrency + ']').size() === 0) {
  Currency.currentCurrency = shopCurrency;
  Currency.cookie.write(shopCurrency);
}*/
        else if (cookieCurrency === shopCurrency) {
            Currency.currentCurrency = shopCurrency;
        } else {
            Currency.convertAll(shopCurrency, cookieCurrency);
        }
        jQuery('[name=currencies] li button').val(Currency.currentCurrency).click(function() {
            var newCurrency = jQuery(this).text();
            Currency.convertAll(Currency.currentCurrency, newCurrency);
            jQuery('.selected-currency').text(Currency.currentCurrency);
            jQuery("li button.selected").removeClass("selected");
            jQuery(this).addClass('selected');
            $('nav#top .box-content').hide();
            // $('#myModal').modal('hide');
        });
        var original_selectCallback = window.selectCallback;
        var selectCallback = function(variant, selector) {
            original_selectCallback(variant, selector);
            //Currency.convertAll(shopCurrency, jQuery('[[name=currencies] li button]').val());
            jQuery('.selected-currency').text(Currency.currentCurrency);
        };
        $('body').on('ajaxCart.afterCartLoad', function(cart) {
            //Currency.convertAll(shopCurrency, jQuery('[[name=currencies] li button]').val());
            jQuery('.selected-currency').text(Currency.currentCurrency);
        });
        jQuery('.selected-currency').text(Currency.currentCurrency);
        </script>


    </div>
</body>

</html>