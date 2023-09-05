<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="en">
  <head>
  <?php include "inc/config.php" ?>
  <?php include "inc/heads/collectionsHead.php" ?>
</head>

<body class="
                home1">
    <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
    <div class="wrapper">
        <div id="shopify-section-header" class="shopify-section">
            <!--Start of Header Area-->
            <?php include "inc/nav.php"; ?>
            <?php include "inc/header.php"; ?>

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

        <div id="shopify-section-list-collection-page" class="shopify-section">
            <div class="container">





                <!-- Breadcumb area start -->
                <ul class="breadcrumb">
                    <li><a href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php"||basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>index.php" title="Back to the frontpage">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="collections.php"><span>Collections</span></a>
                    </li>

                </ul>
                <!--End Breadcumb area -->


                <div class="row">
                    <div id="content" class="col-sm-12 product-tabs-container-slider">
                        <h1>Collections </h1>



                        <div class="col-md-4 col-sm-6 col-xs-12">

                            <div class="text-center ">

                                <a href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php"||basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>products.php?type=Featured Products&quantity=all">

                                    <img src="images/products/<?php echo DatabaseManager::select("books","image_name","category_id=1 order by views limit 1")[0]["image_name"] ?>"
                                        alt="Featured Products" />

                                    <p class="text-center">
                                        <h2 class="text-center">Featured Products<small>
                                                (<?php echo DatabaseManager::select("books","count(id) as cfp","category_id=1")[0]["cfp"] ?>
                                                items)</small>
                                        </h2>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class="col-md-4 col-sm-6 col-xs-12">

                            <div class="text-center ">

                                <a href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php"||basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>products.php?type=Most Viewed&quantity=all" title="Browse our Most Viewed collection">

                                    <img src="images/products/<?php echo DatabaseManager::select("books order by views limit 1","image_name")[0]["image_name"] ?>"
                                        alt="Most Viewed" />

                                    <p class="text-center">
                                        <h2 class="text-center">Most Viewed<small>
                                                (<?php echo DatabaseManager::select("books","count(views) as cfp","views>100")[0]["cfp"] ?>
                                                items)</small>
                                        </h2>
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">

                            <div class="text-center ">

                                <a href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php"||basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>products.php?type=New Arrivals&quantity=all" title="Browse our New Arrivals collection">

                                    <img src="images/products/<?php echo DatabaseManager::select("categories RIGHT JOIN books ON categories.id = books.category_id limit 1","image_name","")[0]["image_name"] ?>"
                                        alt="New Arrivals" />

                                    <p class="text-center">
                                        <h2 class="text-center">New Arrivals<small>
                                                (<?php echo DatabaseManager::select("categories RIGHT JOIN books ON categories.id = books.category_id","count(books.id) as cfp","date_added >= DATE_SUB(NOW(), INTERVAL 30 DAY)")[0]["cfp"] ?>
                                                items)</small>
                                        </h2>
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">

                            <div class="text-center ">

                                <a href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php"||basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>products.php?type=Special offer&quantity=all" title="Browse our Special offer collection">

                                    <img src="images/products/<?php echo DatabaseManager::select("book_details right join books on books.id=book_details.book_id","image_name"," sale_price>(0.5*price) order by (0.5*price) desc limit 1")[0]["image_name"] ?>"
                                        alt="Special offer" />

                                    <p class="text-center">
                                        <h2 class="text-center">Special offer<small>
                                                (<?php echo DatabaseManager::select("book_details","count(id) as cfp","sale_price>(0.5*price)")[0]["cfp"] ?>
                                                items)</small>
                                        </h2>
                                    </p>
                                </a>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

        </div>

        <!-- End Content -->

        <!-- Quickview Product-->
        
        <!-- End Quickview Product -->

        <!--Footer Start-->
        <?php include "inc/footer.php"; ?>
        <!--End of Footer-->



        <script>
        var moneyFormat = '<span class=money>${{amount}}</span>';
        </script>



        <script src="cdn/shop/t/16/assets/fastclick.min.js@v=29723458539410922371562343323" type="text/javascript">
        </script>


        <script src="cdn/shop/t/16/assets/Wishlist.js@v=26158059899868642851562343343" type="text/javascript"></script>
        <script>
        (function() {
            Wishlist.init();
        }());
        </script>










        <script>
        //place script you don't want to run on mobile here
        $(function() {
            var currentAjaxRequest = null;

            $('#search-by-category .search-container').css('position', 'relative').each(function() {
                var input = $(this).find('input[name="q"]');
                var offSet = input.position().top + input.innerHeight();
                $('ul.search-results').css({
                    'position': 'absolute',
                    'left': '0px',
                    'top': offSet
                }).appendTo($(this)).hide();

                input.attr('autocomplete', 'off').bind('keyup change', function() {
                    var term = $(this).val();
                    var form = $(this).closest('form');
                    var searchURL = '/search?type=product&q=' + term;
                    var resultsList = $('ul.search-results');

                    if (term.length > 3 && term != $(this).attr('data-old-term')) {
                        $(this).attr('data-old-term', term);

                        if (currentAjaxRequest != null) currentAjaxRequest.abort();

                        currentAjaxRequest = $.getJSON(searchURL + '&view=json', function(
                            data) {
                            resultsList.empty();

                            if (data.results_count == 0) {
                                resultsList.php(
                                    '<li><span class="title">No results found.</span></li>'
                                );
                                resultsList.fadeIn(200);
                            } else {
                                $.each(data.results, function(index, item) {
                                    var link = $('<a></a>').attr('href', item
                                        .url);
                                    link.append(
                                        '<span class="thumbnail"><img src="https://smartbook-theme.myshopify.com/' +
                                        item.thumbnail + '" /></span>');
                                    link.append('<span class="title">' + item
                                        .title + '</span>');
                                    link.append('<span class="price title">' +
                                        Shopify.formatMoney(item.price) +
                                        '</span>');
                                    link.wrap('<li></li>');
                                    resultsList.append(link.parent());
                                });

                                if (data.results_count > 5) {
                                    resultsList.append(
                                        '<li><span class="title"><a href="https://smartbook-theme.myshopify.com/' +
                                        searchURL + '">See all results (' + data
                                        .results_count + ')</a></span></li>');
                                }

                                resultsList.fadeIn(200);
                            }
                        });
                    }
                });
            });

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


        <script src="cdn/s/javascripts/currencies.js" type="text/javascript"></script>
        <script src="cdn/shop/t/16/assets/jquery.currencies.min.js@v=175057760772006623221562343326"
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
            jQuery(this).attr('data-currency-USD', jQuery(this).php());
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