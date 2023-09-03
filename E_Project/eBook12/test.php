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
      <script type="text/javascript">
        $(document).ready(function () {
          // top message bar

          if ($.cookie('alertbtn_cookie') != 'closed') {
            $('#shopify-section-header').parent().before('<div class="topbar alert alert-success" style="position:relative;margin: 0px;border: 0;"> MID-SEASON SALE UP TO 70% OFF. USE CODE: “SALE70”. SHOP NOW <button type="button" class="close" data-dismiss="alert" id="alertbtn">x</button></div>');
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
            if (e.target.id != newsLatterPop.attr('id') && !newsLatterPop.has(e.target).length) {
              popContainer.fadeOut();
            }
          });
          $('.hide-popup').on("click", function () {
            var popContainer = $("#newsletter-popup-conatiner");
            $('#newsletter-popup-conatiner')
            {
              popContainer.fadeOut();
            }
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
                              src="cdn/shop/files/slider2-smartbooks1-1920x566_1920x669.jpg@v=1613707404" alt=""
                              title="#banner7-caption1" />







                            <img style="display: none;"
                              src="cdn/shop/files/slider1-smartbooks1-1920x566_1920x669.jpg@v=1613707404" alt=""
                              title="#banner7-caption2" />




                          </div>


                          <div id="banner7-caption1"
                            class="banner7-caption nivo-html-caption nivo-caption move-slides-effect"
                            data-class="slide-movetype">
                            <div class="timeloading"></div>
                            <div class="banner7-content slider-2">
                              <div class="container">
                                <div class="container-inner">
                                  <div class="text-content" style="top:50%;right:0%;left:0%;width:60%;text-align:left;">

                                    <div>
                                      <p class="title1" style="font-size:4vw; color:#333333;">H.G.Wells</p>
                                    </div>


                                    <div>
                                      <p class="sub-title" style="font-size:4vw;color:#333333;">Empire of the Ants</p>
                                    </div>


                                    <div class="banner7-des">
                                      <p style="font-size:2vw;color:#777777; "> Cover up front of book and leave summary
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
                                      <p class="title1" style="font-size:4vw; color:#333333;">J.D. Kurtness</p>
                                    </div>


                                    <div>
                                      <p class="sub-title" style="font-size:4vw;color:#333333;">De Vengeance</p>
                                    </div>


                                    <div class="banner7-des">
                                      <p style="font-size:2vw;color:#777777; "> Cover up front of book and leave summary
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
                            $(document).ready(function () {
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
                                afterLoad: function () {
                                  $('.oc-loading').css("display", "none");
                                  $('.timeloading').css('animation-duration', " 5000ms ");
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

                          <a href="collections/all/index.html@preview_theme_id=74460266548.html">


                            <img src="cdn/shop/files/img1-top-smartbooks1.jpg@v=1613707456" class="" alt="" />


                          </a>

                          <div class="text text-left" style="text-align:left">


                          </div>
                        </div>
                      </div>

                      <div class="col col2">
                        <div class="image">

                          <a href="collections/all/index.html@preview_theme_id=74460266548.html">


                            <img src="cdn/shop/files/img2-top-smartbooks1.jpg@v=1613707456" class="" alt="" />


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
                                href="index.html@preview_theme_id=.html#tab-15430604294250"><span>Featured
                                  Products</span></a>
                            </li>


                            <li>
                              <a data-toggle="pill"
                                href="index.html@preview_theme_id=.html#tab-15430604294251"><span>New
                                  Arrivals</span></a>
                            </li>


                            <li>
                              <a data-toggle="pill"
                                href="index.html@preview_theme_id=.html#tab-15430604294252"><span>Most Viewed</span></a>
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
                                                                <a href="collections/vendors@q=Amazona.html"
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
                                                                  <img
                                                                    class="img-responsive has-rotator img-default-image img-cate-1613107134516-1543060429425"
                                                                    src="images/products/<?php echo ($imagename != null || $imagename != "") ? $imagename : "9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg@v=1552407244"; ?>"
                                                                    alt="<?php echo $BookTitle ?>">




                                                                  <input type="hidden"
                                                                    value="//smartbook-theme.myshopify.com/images/products/9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg?v=1552407244"
                                                                    class="img-default-1613107134516-1543060429425" />













                                                                </a>
















                                                                <div class="box-label"></div>
                                                                <div class="action-links">
                                                                  <button class="button btn-cart " type="button" data-toggle="tooltip"
                                                                    data-loading-text="Loading..." title="Add to Cart"
                                                                    onclick="cart.add('14458191544372');">
                                                                    <span>Add to Cart</span>
                                                                  </button>


                                                                  <button class="btn-wishlist button btn-default wishlist-btn"
                                                                    data-product-handle="copy-of-when-the-doves-disappeared" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List"
                                                                    data-original-title="Add to Wish List">
                                                                    <span>Add to Wish List</span>
                                                                  </button>


                                                                  <button class="button btn-compare" type="button" data-toggle="tooltip"
                                                                    title="View Details"
                                                                    onclick="location.href='/products/copy-of-when-the-doves-disappeared';">
                                                                    <span>View Details</span>
                                                                  </button>

                                                                  <button class="button btn-quickview quickview" type="button"
                                                                    title="Quick View" data-toggle="modal" data-target="#productModal"
                                                                    data-book_id='<?php echo $Bookid ?>' data-original-title="Quick View">
                                                                    <span>Quick View</span>
                                                                  </button>

                                                                </div>
                                                              </div>
                                                              <!-- image -->
                                                              <div class="caption">
                                                                <div class="inner  swtch">
                                                  
                                                                    <div class="ratings">
                                                                      <div class="rating-box">
                                                        
                                                                <span class="spr-badge" id="spr_badge_1613107134516" data-rating="5.0">
                                                                  <span class="spr-starrating spr-badge-starrating">
                                                                    <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                                                    <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                                                    <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                                                    <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                                                    <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                                                  </span><span class="spr-badge-caption">1 review</span>
                                                                </span>


                                                                      </div>
                                                                    </div>
                                                    
                                                                    <div class="price-box">

                                                                    <?php $price_saleprice = DatabaseManager::select("book_details", "price , sale_price", "Book_id=$Bookid");
                                                                    foreach ($price_saleprice as $key => $value) {
                                                                        $price = $value["price"];
                                                                        $saleprice = $value["sale_price"]; ?>


                                                                                            <p class="special-price">
                                                                                              <span class="price">
                                                                                                <span class="money" data-currency-usd="$<?php echo $saleprice ?>">
                                                                                                $<?php echo $price ?>
                                                                                                </span>
                                                                                              </span>
                                                                                            </p>
                                                                                            <?php if ($saleprice !== "0.00" && (int) $price > (int) $saleprice) { ?>
                                                                                                          <p class="old-price">
                                                                                                            <span class="price">
                                                                                                              <span class="money" data-currency-usd="$<?php echo $saleprice; ?>">
                                                                                                              $<?php echo $saleprice; ?>
                                                                                                              </span>
                                                                                                            </span>
                                                                                                          </p>
                                                                                            <?php } ?>

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
                                                                                    <a href="collections/vendors@q=Amazona.html"
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
                                                                                      <img
                                                                                        class="img-responsive has-rotator img-default-image img-cate-1613107134516-1543060429425"
                                                                                        src="images/products/<?php echo ($imagename != null || $imagename != "") ? $imagename : "9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg@v=1552407244"; ?>"
                                                                                        alt="<?php echo $BookTitle ?>">
  
  
  
  
                                                                                      <input type="hidden"
                                                                                        value="//smartbook-theme.myshopify.com/images/products/9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg?v=1552407244"
                                                                                        class="img-default-1613107134516-1543060429425" />
  
  
  
  
  
  
  
  
  
  
  
  
  
                                                                                    </a>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
                                                                                    <div class="box-label"></div>
                                                                                    <div class="action-links">
                                                                                      <button class="button btn-cart " type="button" data-toggle="tooltip"
                                                                                        data-loading-text="Loading..." title="Add to Cart"
                                                                                        onclick="cart.add('14458191544372');">
                                                                                        <span>Add to Cart</span>
                                                                                      </button>
  
  
                                                                                      <button class="btn-wishlist button btn-default wishlist-btn"
                                                                                        data-product-handle="copy-of-when-the-doves-disappeared" type="button"
                                                                                        data-toggle="tooltip" title="Add to Wish List"
                                                                                        data-original-title="Add to Wish List">
                                                                                        <span>Add to Wish List</span>
                                                                                      </button>
  
  
                                                                                      <button class="button btn-compare" type="button" data-toggle="tooltip"
                                                                                        title="View Details"
                                                                                        onclick="location.href='/products/copy-of-when-the-doves-disappeared';">
                                                                                        <span>View Details</span>
                                                                                      </button>
  
                                                                                      <button class="button btn-quickview quickview" type="button"
                                                                                        title="Quick View" data-toggle="modal" data-target="#productModal"
                                                                                        data-book_id='<?php echo $Bookid ?>' data-original-title="Quick View">
                                                                                        <span>Quick View</span>
                                                                                      </button>
  
                                                                                    </div>
                                                                                  </div>
                                                                                  <!-- image -->
                                                                                <div class="caption">
                                                                              <div class="inner  swtch">
                                                  
                                                                                  <div class="ratings">
                                                                                    <div class="rating-box">
                                                        
                                                                              <span class="spr-badge" id="spr_badge_1613107134516" data-rating="5.0">
                                                                                <span class="spr-starrating spr-badge-starrating">
                                                                                  <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                                                                  <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                                                                  <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                                                                  <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                                                                  <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                                                                </span><span class="spr-badge-caption">1 review</span>
                                                                              </span>


                                                                                    </div>
                                                                                  </div>
                                                    
                                                                                  <div class="price-box">

                                                                                  <?php $price_saleprice = DatabaseManager::select("book_details", "price , sale_price", "Book_id=$Bookid");
                                                                                  foreach ($price_saleprice as $key => $value) {
                                                                                      $price = $value["price"];
                                                                                      $saleprice = $value["sale_price"]; ?>


                                                                                                          <p class="special-price">
                                                                                                            <span class="price">
                                                                                                              <span class="money" data-currency-usd="$<?php echo $saleprice ?>">
                                                                                                              $<?php echo $price ?>
                                                                                                              </span>
                                                                                                            </span>
                                                                                                          </p>
                                                                                                          <?php if ($saleprice !== "0.00" && (int) $price > (int) $saleprice) { ?>
                                                                                                                        <p class="old-price">
                                                                                                                          <span class="price">
                                                                                                                            <span class="money" data-currency-usd="$<?php echo $saleprice; ?>">
                                                                                                                            $<?php echo $saleprice; ?>
                                                                                                                            </span>
                                                                                                                          </span>
                                                                                                                        </p>
                                                                                                          <?php } ?>

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
                              
                              <div class="tab-container-1543060429425 owl-carousel owl-theme tab-pane fade" id="tab-15430604294251" >
                       


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
                                <a href="collections/vendors@q=Amazona.html"
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
                                  <img
                                    class="img-responsive has-rotator img-default-image img-cate-1613107134516-1543060429425"
                                    src="images/products/<?php echo ($imagename != null || $imagename != "") ? $imagename : "9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg@v=1552407244"; ?>"
                                    alt="<?php echo $BookTitle ?>">




                                  <input type="hidden"
                                    value="//smartbook-theme.myshopify.com/images/products/9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg?v=1552407244"
                                    class="img-default-1613107134516-1543060429425" />













                                </a>
















                                <div class="box-label"></div>
                                <div class="action-links">
                                  <button class="button btn-cart " type="button" data-toggle="tooltip"
                                    data-loading-text="Loading..." title="Add to Cart"
                                    onclick="cart.add('14458191544372');">
                                    <span>Add to Cart</span>
                                  </button>


                                  <button class="btn-wishlist button btn-default wishlist-btn"
                                    data-product-handle="copy-of-when-the-doves-disappeared" type="button"
                                    data-toggle="tooltip" title="Add to Wish List"
                                    data-original-title="Add to Wish List">
                                    <span>Add to Wish List</span>
                                  </button>


                                  <button class="button btn-compare" type="button" data-toggle="tooltip"
                                    title="View Details"
                                    onclick="location.href='/products/copy-of-when-the-doves-disappeared';">
                                    <span>View Details</span>
                                  </button>

                                  <button class="button btn-quickview quickview" type="button"
                                    title="Quick View" data-toggle="modal" data-target="#productModal"
                                    data-book_id='<?php echo $Bookid ?>' data-original-title="Quick View">
                                    <span>Quick View</span>
                                  </button>

                                </div>
                              </div>
                              <!-- image -->
                              <div class="caption">
                                                                <div class="inner  swtch">
                                                  
                                                                    <div class="ratings">
                                                                      <div class="rating-box">
                                                        
                                                                <span class="spr-badge" id="spr_badge_1613107134516" data-rating="5.0">
                                                                  <span class="spr-starrating spr-badge-starrating">
                                                                    <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                                                    <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                                                    <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                                                    <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                                                    <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                                                  </span><span class="spr-badge-caption">1 review</span>
                                                                </span>


                                                                      </div>
                                                                    </div>
                                                    
                                                                    <div class="price-box">

                                                                    <?php $price_saleprice = DatabaseManager::select("book_details", "price , sale_price", "Book_id=$Bookid");
                                                                    foreach ($price_saleprice as $key => $value) {
                                                                        $price = $value["price"];
                                                                        $saleprice = $value["sale_price"]; ?>


                                                                                            <p class="special-price">
                                                                                              <span class="price">
                                                                                                <span class="money" data-currency-usd="$<?php echo $saleprice ?>">
                                                                                                $<?php echo $price ?>
                                                                                                </span>
                                                                                              </span>
                                                                                            </p>
                                                                                            <?php if ($saleprice !== "0.00" && (int) $price > (int) $saleprice) { ?>
                                                                                                          <p class="old-price">
                                                                                                            <span class="price">
                                                                                                              <span class="money" data-currency-usd="$<?php echo $saleprice; ?>">
                                                                                                              $<?php echo $saleprice; ?>
                                                                                                              </span>
                                                                                                            </span>
                                                                                                          </p>
                                                                                            <?php } ?>

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
                                                    <a href="collections/vendors@q=Amazona.html"
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
                                                      <img
                                                        class="img-responsive has-rotator img-default-image img-cate-1613107134516-1543060429425"
                                                        src="images/products/<?php echo ($imagename != null || $imagename != "") ? $imagename : "9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg@v=1552407244"; ?>"
                                                        alt="<?php echo $BookTitle ?>">




                                                      <input type="hidden"
                                                        value="//smartbook-theme.myshopify.com/images/products/9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg?v=1552407244"
                                                        class="img-default-1613107134516-1543060429425" />













                                                    </a>
















                                                    <div class="box-label"></div>
                                                    <div class="action-links">
                                                      <button class="button btn-cart " type="button" data-toggle="tooltip"
                                                        data-loading-text="Loading..." title="Add to Cart"
                                                        onclick="cart.add('14458191544372');">
                                                        <span>Add to Cart</span>
                                                      </button>


                                                      <button class="btn-wishlist button btn-default wishlist-btn"
                                                        data-product-handle="copy-of-when-the-doves-disappeared" type="button"
                                                        data-toggle="tooltip" title="Add to Wish List"
                                                        data-original-title="Add to Wish List">
                                                        <span>Add to Wish List</span>
                                                      </button>


                                                      <button class="button btn-compare" type="button" data-toggle="tooltip"
                                                        title="View Details"
                                                        onclick="location.href='/products/copy-of-when-the-doves-disappeared';">
                                                        <span>View Details</span>
                                                      </button>

                                                      <button class="button btn-quickview quickview" type="button"
                                                        title="Quick View" data-toggle="modal" data-target="#productModal"
                                                        data-book_id='<?php echo $Bookid ?>' data-original-title="Quick View">
                                                        <span>Quick View</span>
                                                      </button>

                                                    </div>
                                                  </div>
                                                  <!-- image -->
                                                  <div class="caption">
                                                                              <div class="inner  swtch">
                                                  
                                                                                  <div class="ratings">
                                                                                    <div class="rating-box">
                                                        
                                                                              <span class="spr-badge" id="spr_badge_1613107134516" data-rating="5.0">
                                                                                <span class="spr-starrating spr-badge-starrating">
                                                                                  <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                                                                  <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                                                                  <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                                                                  <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                                                                  <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                                                                </span><span class="spr-badge-caption">1 review</span>
                                                                              </span>


                                                                                    </div>
                                                                                  </div>
                                                    
                                                                                  <div class="price-box">

                                                                                  <?php $price_saleprice = DatabaseManager::select("book_details", "price , sale_price", "Book_id=$Bookid");
                                                                                  foreach ($price_saleprice as $key => $value) {
                                                                                      $price = $value["price"];
                                                                                      $saleprice = $value["sale_price"]; ?>


                                                                                                          <p class="special-price">
                                                                                                            <span class="price">
                                                                                                              <span class="money" data-currency-usd="$<?php echo $saleprice ?>">
                                                                                                              $<?php echo $price ?>
                                                                                                              </span>
                                                                                                            </span>
                                                                                                          </p>
                                                                                                          <?php if ($saleprice !== "0.00" && (int) $price > (int) $saleprice) { ?>
                                                                                                                        <p class="old-price">
                                                                                                                          <span class="price">
                                                                                                                            <span class="money" data-currency-usd="$<?php echo $saleprice; ?>">
                                                                                                                            $<?php echo $saleprice; ?>
                                                                                                                            </span>
                                                                                                                          </span>
                                                                                                                        </p>
                                                                                                          <?php } ?>

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
                              <div class="tab-container-1543060429425 owl-carousel owl-theme tab-pane fade" id="tab-15430604294252" >


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
                                <a href="collections/vendors@q=Amazona.html"
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
                                  <img
                                    class="img-responsive has-rotator img-default-image img-cate-1613107134516-1543060429425"
                                    src="images/products/<?php echo ($imagename != null || $imagename != "") ? $imagename : "9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg@v=1552407244"; ?>"
                                    alt="<?php echo $BookTitle ?>">




                                  <input type="hidden"
                                    value="//smartbook-theme.myshopify.com/images/products/9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg?v=1552407244"
                                    class="img-default-1613107134516-1543060429425" />













                                </a>
















                                <div class="box-label"></div>
                                <div class="action-links">
                                  <button class="button btn-cart " type="button" data-toggle="tooltip"
                                    data-loading-text="Loading..." title="Add to Cart"
                                    onclick="cart.add('14458191544372');">
                                    <span>Add to Cart</span>
                                  </button>


                                  <button class="btn-wishlist button btn-default wishlist-btn"
                                    data-product-handle="copy-of-when-the-doves-disappeared" type="button"
                                    data-toggle="tooltip" title="Add to Wish List"
                                    data-original-title="Add to Wish List">
                                    <span>Add to Wish List</span>
                                  </button>


                                  <button class="button btn-compare" type="button" data-toggle="tooltip"
                                    title="View Details"
                                    onclick="location.href='/products/copy-of-when-the-doves-disappeared';">
                                    <span>View Details</span>
                                  </button>

                                  <button class="button btn-quickview quickview" type="button"
                                    title="Quick View" data-toggle="modal" data-target="#productModal"
                                    data-book_id='<?php echo $Bookid ?>' data-original-title="Quick View">
                                    <span>Quick View</span>
                                  </button>

                                </div>
                              </div>
                              <!-- image -->
                              <div class="caption">
                                                                <div class="inner  swtch">
                                                  
                                                                    <div class="ratings">
                                                                      <div class="rating-box">
                                                        
                                                                <span class="spr-badge" id="spr_badge_1613107134516" data-rating="5.0">
                                                                  <span class="spr-starrating spr-badge-starrating">
                                                                    <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                                                    <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                                                    <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                                                    <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                                                    <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                                                  </span><span class="spr-badge-caption">1 review</span>
                                                                </span>


                                                                      </div>
                                                                    </div>
                                                    
                                                                    <div class="price-box">

                                                                    <?php $price_saleprice = DatabaseManager::select("book_details", "price , sale_price", "Book_id=$Bookid");
                                                                    foreach ($price_saleprice as $key => $value) {
                                                                        $price = $value["price"];
                                                                        $saleprice = $value["sale_price"]; ?>


                                                                                            <p class="special-price">
                                                                                              <span class="price">
                                                                                                <span class="money" data-currency-usd="$<?php echo $saleprice ?>">
                                                                                                $<?php echo $price ?>
                                                                                                </span>
                                                                                              </span>
                                                                                            </p>
                                                                                            <?php if ($saleprice !== "0.00" && (int) $price > (int) $saleprice) { ?>
                                                                                                          <p class="old-price">
                                                                                                            <span class="price">
                                                                                                              <span class="money" data-currency-usd="$<?php echo $saleprice; ?>">
                                                                                                              $<?php echo $saleprice; ?>
                                                                                                              </span>
                                                                                                            </span>
                                                                                                          </p>
                                                                                            <?php } ?>

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
                                                    <a href="collections/vendors@q=Amazona.html"
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
                                                      <img
                                                        class="img-responsive has-rotator img-default-image img-cate-1613107134516-1543060429425"
                                                        src="images/products/<?php echo ($imagename != null || $imagename != "") ? $imagename : "9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg@v=1552407244"; ?>"
                                                        alt="<?php echo $BookTitle ?>">




                                                      <input type="hidden"
                                                        value="//smartbook-theme.myshopify.com/images/products/9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg?v=1552407244"
                                                        class="img-default-1613107134516-1543060429425" />













                                                    </a>
















                                                    <div class="box-label"></div>
                                                    <div class="action-links">
                                                      <button class="button btn-cart " type="button" data-toggle="tooltip"
                                                        data-loading-text="Loading..." title="Add to Cart"
                                                        onclick="cart.add('14458191544372');">
                                                        <span>Add to Cart</span>
                                                      </button>


                                                      <button class="btn-wishlist button btn-default wishlist-btn"
                                                        data-product-handle="copy-of-when-the-doves-disappeared" type="button"
                                                        data-toggle="tooltip" title="Add to Wish List"
                                                        data-original-title="Add to Wish List">
                                                        <span>Add to Wish List</span>
                                                      </button>


                                                      <button class="button btn-compare" type="button" data-toggle="tooltip"
                                                        title="View Details"
                                                        onclick="location.href='/products/copy-of-when-the-doves-disappeared';">
                                                        <span>View Details</span>
                                                      </button>

                                                      <button class="button btn-quickview quickview" type="button"
                                                        title="Quick View" data-toggle="modal" data-target="#productModal"
                                                        data-book_id='<?php echo $Bookid ?>' data-original-title="Quick View">
                                                        <span>Quick View</span>
                                                      </button>

                                                    </div>
                                                  </div>
                                                  <!-- image -->
                                                  <div class="caption">
                                                                              <div class="inner  swtch">
                                                  
                                                                                  <div class="ratings">
                                                                                    <div class="rating-box">
                                                        
                                                                              <span class="spr-badge" id="spr_badge_1613107134516" data-rating="5.0">
                                                                                <span class="spr-starrating spr-badge-starrating">
                                                                                  <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                                                                  <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                                                                  <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                                                                  <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                                                                  <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                                                                </span><span class="spr-badge-caption">1 review</span>
                                                                              </span>


                                                                                    </div>
                                                                                  </div>
                                                    
                                                                                  <div class="price-box">

                                                                                  <?php $price_saleprice = DatabaseManager::select("book_details", "price , sale_price", "Book_id=$Bookid");
                                                                                  foreach ($price_saleprice as $key => $value) {
                                                                                      $price = $value["price"];
                                                                                      $saleprice = $value["sale_price"]; ?>


                                                                                                          <p class="special-price">
                                                                                                            <span class="price">
                                                                                                              <span class="money" data-currency-usd="$<?php echo $saleprice ?>">
                                                                                                              $<?php echo $price ?>
                                                                                                              </span>
                                                                                                            </span>
                                                                                                          </p>
                                                                                                          <?php if ($saleprice !== "0.00" && (int) $price > (int) $saleprice) { ?>
                                                                                                                        <p class="old-price">
                                                                                                                          <span class="price">
                                                                                                                            <span class="money" data-currency-usd="$<?php echo $saleprice; ?>">
                                                                                                                            $<?php echo $saleprice; ?>
                                                                                                                            </span>
                                                                                                                          </span>
                                                                                                                        </p>
                                                                                                          <?php } ?>

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
                      $(document).ready(function () {
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
                          onInitialized: function () {
                            var count = $(".tab-container-1543060429425 .owl-item.active").length;
                            if (count == 1) {
                              $(".tab-container-1543060429425 .owl-item").removeClass('first');
                              $(".tab-container-1543060429425 .owl-item.active").addClass('first');
                            } else {
                              $(".tab-container-1543060429425 .owl-item").removeClass('first');
                              $(".tab-container-1543060429425 .owl-item.active:first").addClass('first');
                            }
                          },
                          onTranslated: function () {
                            var count = $(".tab-container-1543060429425 .owl-item.active").length;
                            if (count == 1) {
                              $(".tab-container-1543060429425 .owl-item").removeClass('first');
                              $(".tab-container-1543060429425 .owl-item.active").addClass('first');
                            } else {
                              $(".tab-container-1543060429425 .owl-item").removeClass('first');
                              $(".tab-container-1543060429425 .owl-item.active:first").addClass('first');
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


       



      <div id="shopify-section-1552581993254" class="shopify-section index-section">
        <div class="main-row  bestseller-full  "
          style="background-image: url('cdn/shop/files/bkg_module.jpg@v=1613707747');" data-section-id="1552581993254">
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

                              <a >
                                
                                <img src="images/authors/<?php echo DatabaseManager::select("authors", "image_name", "sales_count=(select max(sales_count) from authors) and total_sales=(select max(total_sales) from authors) and registration_date=(SELECT min(registration_date) from authors)")[0]["image_name"]; ?>" alt=""
                                  class="" />
                              </a>

                            </div>
                          </div>
                        </div>

                        <div class="col-product"> 
<!-- wking -->
<div class="owl-container">
                            <div class="tt-product owl-carousel owl-theme ">
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
  
                  <h1>hiii</h1>
  
  
                                                                        <?php

                                                  }
                                                  echo "</div>";
                            }
                            ?>
                            </div>
                            </div>
                            </div>

