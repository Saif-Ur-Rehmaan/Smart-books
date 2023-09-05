<!DOCTYPE html>
<html dir="ltr" lang="en">


<head>
    <?php

    include "../inc/config.php"; ?>
    <?php include "../inc/heads/singleProductPageHead.php" ?>
</head>

<body class="
               product-product product-details
                home1">

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



                    <li><a
                            href="../collections/vendors/products/a-wing-and-a-prayer.html"><span><?php $bookid = $_GET["bookid"];
                            echo DatabaseManager::select("books", "title", "id=$bookid")[0]["title"] ?></span></a>
                    </li>


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
                                    <a href="../images/products/<?php echo DatabaseManager::select("books", "image_name", "id=$bookid")[0]["image_name"] ?>"
                                        class="cloud-zoom main-image" id="product-cloud-zoom"
                                        style="width: 700px; height: 700px;"
                                        rel="showTitle: false ,zoomWidth:700,zoomHeight:700,adjustX: 0,position:'inside' ">
                                        <img src="../images/products/<?php echo DatabaseManager::select("books", "image_name", "id=$bookid")[0]["image_name"] ?>"
                                            title="<?php echo DatabaseManager::select("books", "title", "id=$bookid")[0]["title"] ?>" alt="<?php echo DatabaseManager::select("books", "title", "id=$bookid")[0]["title"] ?>" />
                                    </a>
                                </div>
                                <div class="additional-images owl-carousel owl-theme">

                                <?php
                                $books = DatabaseManager::select("books");
                                foreach ($books as $key => $value) {


                                  ?>
                                      <div class="item">
                                          <a class="cloud-zoom-gallery sub-image" id="product-image-default"
                                              href="singleProductPage.php?bookid=<?php echo $value["id"] ?>"
                                              title="<?php echo $value["title"] ?>"
                                            
                                              data-pos="1">
                                              <img src="../images/products/<?php echo $value["image_name"] ?>"
                                                  title="<?php echo $value["title"] ?>"
                                                  alt="<?php echo $value["title"] ?>" />
                                          </a>
                                      </div>
<?php } ?>
                                    

                                </div>
                                <!-- end wrapper-img-additional -->
                            </div>
                            <!-- <div class="col-sm-6 product-info-main"> -->
                            <div class="col-sm-6 product-info-main">
                                <div class="inner">

                                    <p class="product-tag">Tags:



                                        <a href="../collections/all/book.html">book</a>












                                    </p>

                                    <h1 class="product-name" itemprop="name"><?php echo DatabaseManager::select("books","title","id=$bookid")[0]["title"]?></h1>
                                    <ul class="list-unstyled">

                                        <li>Author: <a title="<?php echo DatabaseManager::select("books inner join book_details on books.id=book_details.book_id inner join authors on authors.id =book_details.author_id","authors.name as an","books.id=$bookid")[0]["an"]?>"><?php echo DatabaseManager::select("books inner join book_details on books.id=book_details.book_id inner join authors on authors.id =book_details.author_id","authors.name as an","books.id=$bookid")[0]["an"]?></a></li>

                                        <link itemprop="availability" href="http://schema.org/InStock">
                                        <li>Availability:
                                          <?php
                                             
                                          if (DatabaseManager::select("books","QuantityInStock as q","id=$bookid")[0]["q"]>0){
                                            echo '<span class="ex-text">In Stock</span>';
                                          }else{
                                            echo '<span style="color:red;" class="ex-text">Out of Stock</span>';

                                          }
                                          ?>
                                            


                                        </li>


                                        <li class="skuvariant">Category:
                                            <span class="variant-sku"><?php echo DatabaseManager::select("books inner join categories on categories.id=books.category_id","categories.name as q","books.id=$bookid")[0]["q"]?></span>
                                        </li>

                                    </ul>
                                    <div class="price-box">
                                          <?php 
                                          if(DatabaseManager::select("books inner join book_details on books.id=book_details.book_id","sale_price as q","books.id=$bookid")[0]["q"]!="0.00"){?>
                                      <p class="special-price"><span class="price" id="productPrice"><span
                                                  class=money><?php echo DatabaseManager::select("books inner join book_details on books.id=book_details.book_id","sale_price as q","books.id=$bookid")[0]["q"] ?></span></span></p>

                                          <?php   } ?>
                                        <p class="old-price"><span class="price" id="comparePrice"><span
                                                    class=money>$<?php echo DatabaseManager::select("books inner join book_details on books.id=book_details.book_id","price as q","books.id=$bookid")[0]["q"]?></span></span></p>

                                    </div> 
                                    <!-- end-rating -->

                                    <p class="short-des">


                                        <?php echo DatabaseManager::select("books inner join book_details on books.id=book_details.book_id","description as q","books.id=$bookid")[0]["q"] ?>

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
                                                                src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "" : "../"; ?>cdn/shop/t/16/assets/soldout.png@v=169392025580765019841562343333" />
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
                                                                src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "" : "../"; ?>cdn/shop/t/16/assets/soldout.png@v=169392025580765019841562343333" />
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
                                                                src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "" : "../"; ?>cdn/shop/t/16/assets/soldout.png@v=169392025580765019841562343333" />
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


                                                <button 
                                                class="btn button button-cart _addtocart"
                                                type="button" id="button-cart"
                                                data-original-title="<?php echo $bookid?>"
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



 



 


                    </div>
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

       
        <?php include "../inc/QuickviewProduct.php" ?>
        <?php include "../inc/footer.php" ?>
        <?php include "../inc/newsletterpopup.php"; ?>
        <?php include "../inc/scripts.php" ?>
        <?php include "../inc/custom_card_JQ.php" ?>

    </div>
</body>

</html>