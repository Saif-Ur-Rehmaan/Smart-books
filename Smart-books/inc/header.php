<header>
    <div class="header-inner ">
        <div class="container">
            <div class="container-inner">
                <div class="inner">
                    <div class="inner-inner">
                        <div class="col-menu-mobile">


                            <style>
                                #oc-menu-mheader .oc-menu-bar {
                                    background: #FFFFFF;
                                    color: #333333;
                                    padding: 14px 15px 14px 15px;
                                    position: relative;
                                }

                                #oc-menu-mheader.oc-menu-bar {
                                    background: #FFFFFF;
                                    color: #333333;
                                }

                                #oc-menu-mheader .ul-top-items .li-top-item {
                                    background: #FFFFFF;
                                    color: #282828;
                                }

                                #oc-menu-mheader .ul-top-items .li-top-item .a-top-link {
                                    padding: 5px 20px 5px 20px;
                                    color: #282828;
                                    font-size: 14px;
                                    line-height: 25px;
                                    text-transform: uppercase;
                                    font-weight: 700;
                                }

                                #oc-menu-mheader .ul-top-items .li-top-item:hover,
                                #oc-menu-mheader .ul-top-items .li-top-item.active {
                                    background: #FFFFFF;
                                    color: #62ab00;
                                }

                                #oc-menu-mheader .ul-top-items .li-top-item:hover .a-top-link,
                                #oc-menu-mheader .ul-top-items .li-top-item.active .a-top-link {
                                    color: #62ab00;
                                    font-weight: 700;
                                }

                                #oc-menu-mheader .mega-menu-container {
                                    width: 100%;
                                    background: #FFFFFF;
                                    padding: 30px 30px 30px 30px;
                                }

                                #oc-menu-mheader .mega-menu-container .a-mega-second-link,
                                #oc-menu-mheader .mega-menu-container .widget-html-title {
                                    color: #FFFFFF;
                                }

                                #oc-menu-mheader .mega-menu-container .a-mega-third-link {
                                    color: #FFFFFF;
                                }

                                #oc-menu-mheader .ul-second-items .li-second-items {
                                    background: #FFFFFF;
                                    color: #282828;
                                }

                                #oc-menu-mheader .ul-second-items .li-second-items:hover,
                                #oc-menu-mheader .ul-second-items .li-second-items.active {
                                    background: #FFFFFF;
                                    color: #62ab00;
                                }

                                #oc-menu-mheader .ul-second-items .li-second-items .a-second-link {
                                    color: #282828;
                                    font-size: 14px;
                                    text-transform: capitalize;
                                    font-weight: 600;
                                }

                                #oc-menu-mheader .ul-second-items .li-second-items:hover .a-second-link,
                                #oc-menu-mheader .ul-second-items .li-second-items.active .a-second-link {
                                    color: #62ab00;
                                    font-weight: 600;
                                }

                                #oc-menu-mheader .ul-third-items .li-third-items {
                                    background: #FFFFFF;
                                }

                                #oc-menu-mheader .ul-third-items .li-third-items:hover,
                                #oc-menu-mheader .ul-third-items .li-third-items.active {
                                    background: #FFFFFF;
                                }

                                #oc-menu-mheader .ul-third-items .li-third-items .a-third-link {
                                    color: #757575;
                                    font-size: 14px;
                                    text-transform: capitalize;
                                    font-weight: 400;
                                }

                                #oc-menu-mheader .ul-third-items .li-third-items:hover .a-third-link,
                                #oc-menu-mheader .ul-third-items .li-third-items.active .a-third-link {
                                    color: #62ab00;
                                    font-weight: 400;
                                }
                            </style>

                            <div class="oc-menu mobile-menu hidden-lg" id="oc-menu-mheader">
                                <input type="hidden" id="menu-effect-header" class="menu-effect" value="none" />
                                <div class="oc-menu-bar">
                                    <div class="left"><i class="fas fa-bars"></i> <span>MENU</span></div>
                                    <div class="right"><i class="fas fa-chevron-down" aria-hidden="true"></i></div>
                                </div>
                                <ul class="ul-top-items">




                                    <li class="li-top-item">
                                        <a class="a-top-link a-item"
                                            href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "" : "../"; ?>index.php">
                                            <span>Home</span>
                                        </a>
                                    </li>









                                    <li class="li-top-item">
                                        <a class="a-top-link a-item"
                                            href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "" : "../"; ?>collections.php">
                                            <span>Catalog</span>
                                            <!--working-->
                                        </a>
                                        <span class="top-click-show a-click-show">
                                            <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                            <i class="fas fa-chevron-up" aria-hidden="true"></i>
                                        </span>
                                        <!-- Mega Menu -->
                                        <div class="sub-menu-container">
                                            <ul class="ul-second-items">






                                                <?php
                                                // database manager present in config.php
                                                

                                                $Categories = DatabaseManager::select("categories", "id , name ");
                                                for ($i = 0; $i < 3; $i++) {
                                                    $value = $Categories[$i];

                                                    $catid = $value["id"];
                                                    $catname = $value["name"]; ?>
                                                    <li class="li-second-items">
                                                        <a href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>products.php?type=category%catid=<?php echo $catid ?>"
                                                            class="a-second-link a-item">
                                                            <span class="a-second-title">
                                                                <!--cat name-->
                                                                <?php echo $catname ?>
                                                            </span>
                                                        </a>
                                                        <span class="second-click-show a-click-show">
                                                            <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                                            <i class="fas fa-chevron-up" aria-hidden="true"></i>
                                                        </span>
                                                        <div class="flyout-third-items">
                                                            <ul class="ul-third-items">
                                                                <?php
                                                                $titles = DatabaseManager::select("books", "title,id", "category_id=$catid");
                                                                foreach ($titles as $value) {
                                                                    $id = $value["id"];
                                                                    $title = $value["title"];
                                                                    echo "<li class=\"li-third-items\">
                                    <a href=\"pages/singleProductPage.php?bookid=$id\" class=\"a-third-link\">
                                    <span class=\"a-third-title\">$title</span>
                                    </a></li>";
                                                                }
                                                                // print_r($titles[0]["title"]);
                                                                // print_r($titles);
                                                                // foreach ($titles as $key => $c) {
                                                                ?>
                                                                <!-- <li class="li-third-items">
                                      <a href="index.php" class="a-third-link"><span
                                          class="a-third-title"><?php //  $value["title"] ?></span></a>
                                    </li> -->

                                                            </ul>
                                                        </div>
                                                    </li>


                                                <?php } //} ?>




                                                <li class="li-second-items" style="padding-left:0px;">
                                                    <p class="widget-html-title"></p>
                                                    <div>
                                                        <div class="banner-static">
                                                            <div class="image">
                                                                <a
                                                                    href="collections/all/index.php@preview_theme_id=74460266548.php">
                                                                    <img src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "" : "../"; ?>cdn/shop/files/img-right-menu.jpg@v=1613707825"
                                                                        alt="image" class="img-responsive">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>


                                                <div class="clearBoth"></div>
                                            </ul>
                                        </div>
                                    </li>





















                                    <li class="li-top-item">
                                        <a class="a-top-link a-item"
                                            href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>products.php?type=Special offer">
                                            <span>Specials</span>

                                        </a>
                                        <span class="top-click-show a-click-show">
                                            <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                            <i class="fas fa-chevron-up" aria-hidden="true"></i>
                                        </span>
                                        <!-- Mega Menu -->
                                        <div class="sub-menu-container">
                                            <ul class="ul-second-items">

                                                <?php
                                                $title_imageName_id = DatabaseManager::select("books", "title , image_name , id", "special=1");

                                                for ($i = 0; $i < 4; $i++) {
                                                    $value = $title_imageName_id[$i];
                                                    $bookid = $value['id'];
                                                    $title = $value["title"];
                                                    $imagename = $value["image_name"]; ?>


                                                    <li
                                                        class="li-second-items product-img col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                        <a
                                                            href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>singleProductPage.php?bookid=<?php echo $bookid; ?>">
                                                            <img class="mega-second-image img-responsive"
                                                                src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "" : "../"; ?>images/products/<?php echo $imagename; ?>"
                                                                alt="<?php echo $title; ?>">
                                                        </a>
                                                        <h4>
                                                            <a class="a-mega-second-link"
                                                                href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>singleProductPage.php?bookid=<?php echo $bookid; ?>">
                                                                <?php echo $title; ?></a>
                                                        </h4>
                                                        <div class="price-box">
                                                            <?php $price_saleprice = DatabaseManager::select("book_details", "price , sale_price", "id=$bookid");
                                                            foreach ($price_saleprice as $key => $value) {
                                                                $price = $value["price"];
                                                                $saleprice = $value["sale_price"]; ?>
                                                                <p class="special-price"><span class="price"><span
                                                                            class=money>$<?php echo $saleprice ?></span></span>
                                                                </p>
                                                                <?php if ($saleprice !== "0.00") { ?>

                                                                    <p class="old-price"><span class="price"><span
                                                                                class=money>$<?php echo $price; ?></span></span></p>

                                                                <?php } ?>

                                                            <?php } ?>
                                                        </div>
                                                    </li>

                                                <?php } ?>






                                                <div class="clearBoth"></div>
                                            </ul>
                                        </div>
                                    </li>






















                                    <li class="li-top-item">
                                        <a class="a-top-link a-item"
                                            href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>search.php">
                                            <span>Search</span>
                                        </a>
                                    </li>


















                                    <li class="li-top-item">
                                        <a class="a-top-link a-item"
                                            href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>products.php">
                                            <span>Products</span>
                                        </a>


                                    </li>



                                </ul>
                            </div>
                            <!-- end menu area -->

                        </div>
                        <div class="logo-container">
                            <div id="logo">

                                <a href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "" : "../"; ?>index.php"
                                    itemprop="url">
                                    <img src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "" : "../"; ?>cdn/shop/files/logo_ca90e1e9-33da-4ed1-bcb0-19c471d50256.png@v=1613707406"
                                        alt="SmartBook - eBooks , Bookstore Shopify Theme" itemprop="logo"
                                        class="img-responsive logo" />
                                </a>

                            </div>
                        </div>

                        <div class="header-phone">
                            <p>Free Support 24/7</p>
                            <p>+01-202-555-0181</p>
                        </div>

                        <div class="col-hoz fix">
                            <style>
                                #oc-menu-header .oc-menu-bar {
                                    background: #FFFFFF;
                                    color: #FFFFFF;
                                    padding: 15px 15px 15px 15px;
                                    position: relative;
                                }

                                #oc-menu-header.oc-menu-bar {
                                    background: #FFFFFF;
                                    color: #FFFFFF;
                                }

                                #oc-menu-header .ul-top-items .li-top-item {
                                    background: #FFFFFF;
                                    color: #282828;
                                }

                                #oc-menu-header .ul-top-items .li-top-item .a-top-link {
                                    padding: 15px 15px 15px 15px;
                                    color: #282828;
                                    font-size: 16px;
                                    line-height: 24px;
                                    text-transform: uppercase;
                                    font-weight: 400;
                                }

                                #oc-menu-header .ul-top-items .li-top-item:hover,
                                #oc-menu-header .ul-top-items .li-top-item.active {
                                    background: #FFFFFF;
                                    color: #62ab00;
                                }

                                #oc-menu-header .ul-top-items .li-top-item:hover .a-top-link,
                                #oc-menu-header .ul-top-items .li-top-item.active .a-top-link {
                                    color: #62ab00;
                                    font-weight: 400;
                                }

                                #oc-menu-header .mega-menu-container {
                                    width: 768px;
                                    background: #FFFFFF;
                                    padding: 35px 35px 32px 35px;
                                }

                                #oc-menu-header .mega-menu-container .a-mega-second-link,
                                #oc-menu-header .mega-menu-container .widget-html-title {
                                    color: #282828;
                                }

                                #oc-menu-header .mega-menu-container .a-mega-third-link {
                                    color: #666666;
                                }

                                #oc-menu-header .ul-second-items .li-second-items {
                                    background: #FFFFFF;
                                    color: #282828;
                                }

                                #oc-menu-header .ul-second-items .li-second-items:hover,
                                #oc-menu-header .ul-second-items .li-second-items.active {
                                    background: #FFFFFF;
                                    color: #62ab00;
                                }

                                #oc-menu-header .ul-second-items .li-second-items .a-second-link {
                                    color: #282828;
                                    font-size: 14px;
                                    text-transform: uppercase;
                                    font-weight: 600;
                                }

                                #oc-menu-header .ul-second-items .li-second-items:hover .a-second-link,
                                #oc-menu-header .ul-second-items .li-second-items.active .a-second-link {
                                    color: #62ab00;
                                    font-weight: 600;
                                }

                                #oc-menu-header .ul-third-items .li-third-items {
                                    background: #FFFFFF;
                                }

                                #oc-menu-header .ul-third-items .li-third-items:hover,
                                #oc-menu-header .ul-third-items .li-third-items.active {
                                    background: #FFFFFF;
                                }

                                #oc-menu-header .ul-third-items .li-third-items .a-third-link {
                                    color: #666666;
                                    font-size: 14px;
                                    text-transform: capitalize;
                                    font-weight: 400;
                                }

                                #oc-menu-header .ul-third-items .li-third-items:hover .a-third-link,
                                #oc-menu-header .ul-third-items .li-third-items.active .a-third-link {
                                    color: #62ab00;
                                    font-weight: 400;
                                }
                            </style>
                            <div role="menu" id="oc-menu-header" class="oc-menu horizontal-menu oc-menu-bar visible-lg">

                                <input type="hidden" id="menu-effect-header" class="menu-effect" value="none" />
                                <ul class="ul-top-items">















                                    <li class="li-top-item left has-child active" style="float: left;">
                                        <a class="a-top-link"
                                            href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "" : "../"; ?>index.php">
                                            <span>Home</span>
                                        </a>

                                    </li>

                                    <li class="li-top-item left has-child" style="float: left;">

                                        <a class="a-top-link" href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "" : "../"; ?>collections.php">
                                            <span>Catalog</span>
                                            <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                        </a>
                                        <!-- Mega Menu -->
                                        <div class="mega-menu-container sub-menu-container left">
                                            <div class="row">
                                                <?php
                                                // database manager present in config.php
                                                

                                                $Categories = DatabaseManager::select("categories", "id , name ");
                                                for ($i = 0; $i < 3; $i++) {
                                                    $value = $Categories[$i];

                                                    $catid = $value["id"];
                                                    $catname = $value["name"];
                                                    $titles = DatabaseManager::select("books", "title,id as bid", "category_id=$catid");
                                                    ?>

                                                    <div class="col-md-3 sub-item2-content sub-item2-category-content mt-5"
                                                        data-cols="3">
                                                        <a class="a-mega-second-link"
                                                            href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>products.php?type=category&catid=<?php echo $catid ?>">
                                                            <h4>
                                                                <?php echo $catname; ?>
                                                            </h4>
                                                        </a>
                                                        <div class="sub_item3-content">
                                                            <?php foreach ($titles as $key => $value) { ?>

                                                                <h5>
                                                                    <a class="a-mega-third-link"
                                                                        href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>singleProductPage.php?bookid=<?php echo $value["bid"] ?>"><?php echo $value["title"] ?></a>
                                                                </h5>

                                                            <?php } ?>
                                                        </div>
                                                    </div>

                                                <?php } ?>






                                                <div class="col-md-3 sub-item2-content" data-cols="3">
                                                    <p class="widget-html-title"></p>
                                                    <div>
                                                        <div class="banner-static static-menu-right">
                                                            <div class="image">
                                                                <a href="">
                                                                    <img src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "" : "../"; ?>cdn/shop/files/img-right-menu.jpg@v=1613707825"
                                                                        alt="image">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                    </li>






















                                    <li class="li-top-item left has-child" style="float: left;">
                                        <a class="a-top-link" href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>products.php?type=Special offer">
                                            <span>Specials</span>
                                            <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                        </a>
                                        <!-- Mega Menu -->
                                        <div class="mega-menu-container sub-menu-container left ">
                                            <div class="row">

                                                <?php
                                                // DatabaseManager present in config.php
                                                $title_imageName_id = DatabaseManager::select("books", "title , image_name , id", "special=1");

                                                for ($i = 0; $i < 4; $i++) {
                                                    $value = $title_imageName_id[$i];
                                                    $bookid = $value['id'];
                                                    $title = $value["title"];
                                                    $imagename = $value["image_name"]; ?>

                                                    <div class="col-md-3 sub-widget-cate sub-item2-content sub-product sub-item2-category-content"
                                                        data-cols="3">
                                                        <a
                                                            href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>singleProductPage.php?bookid=<?php echo $bookid; ?>">
                                                            <img class="mega-second-image"
                                                                src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "" : "../"; ?>images/products/<?php echo $imagename; ?>"
                                                                alt="<?php echo $title ?>">
                                                        </a>
                                                        <a class="a-mega-second-link"
                                                            href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>singleProductPage.php?bookid=<?php echo $bookid; ?>">
                                                            <h4>
                                                                <?php echo $title ?>
                                                            </h4>
                                                        </a>
                                                        <div class="price-box">
                                                            <?php $price_saleprice = DatabaseManager::select("book_details", "price , sale_price", "id=$bookid");
                                                            foreach ($price_saleprice as $key => $value) {
                                                                $price = $value["price"];
                                                                $saleprice = $value["sale_price"]; ?>
                                                                <p class="special-price"><span class="price"><span
                                                                            class=money>$<?php echo $saleprice ?></span></span>
                                                                </p>
                                                                <p class="old-price"><span class="price"><span
                                                                            class=money>$<?php echo $price; ?></span></span></p>


                                                            <?php } ?>
                                                        </div>
                                                    </div>

                                                <?php }

                                                ?>















                                            </div>
                                        </div>
                                    </li>




















                                    <li class="li-top-item left has-child" style="float: left;">
                                        <a class="a-top-link"
                                            href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>competetion.php">
                                            <span>Competetion</span>
                                        </a>
                                        <!-- Flyout Menu -->
                                    </li>

















                                    <li class="li-top-item left has-child" style="float: left;">
                                        <a class="a-top-link"
                                            href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>products.php">
                                            <span>Products</span>
                                        </a>

                                    </li>



                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="top-menu ">
        <div class="container">
            <div class="container-inner">
                <div class="col-ver">
                    <style>
                        #oc-menu-vheader .oc-menu-bar {
                            background: #FFFFFF;
                            color: #282828;
                            padding: 12px 20px 12px 20px;
                            position: relative;
                        }

                        #oc-menu-vheader.oc-menu-bar {
                            background: #FFFFFF;
                            color: #282828;
                        }

                        #oc-menu-vheader .ul-top-items .li-top-item {
                            background: #FFFFFF;
                            color: #555555;
                        }

                        #oc-menu-vheader .ul-top-items .li-top-item .a-top-link {
                            padding: 10px 25px 10px 28px;
                            color: #555555;
                            font-size: 14px;
                            line-height: 26px;
                            text-transform: capitalize;
                            font-weight: 400;
                        }

                        #oc-menu-vheader .ul-top-items .li-top-item:hover,
                        #oc-menu-vheader .ul-top-items .li-top-item.active {
                            background: #FFFFFF;
                            color: #62ab00;
                        }

                        #oc-menu-vheader .ul-top-items .li-top-item:hover .a-top-link,
                        #oc-menu-vheader .ul-top-items .li-top-item.active .a-top-link {
                            color: #62ab00;
                            font-weight: 400;
                        }

                        #oc-menu-vheader .mega-menu-container {
                            width: 600px;
                            background: #FFFFFF;
                            padding: 30px 30px 8px 30px;
                        }

                        #oc-menu-vheader .mega-menu-container .a-mega-second-link,
                        #oc-menu-vheader .mega-menu-container .widget-html-title {
                            color: #282828;
                        }

                        #oc-menu-vheader .mega-menu-container .a-mega-third-link {
                            color: #666666;
                        }

                        #oc-menu-vheader .ul-second-items .li-second-items {
                            background: #FFFFFF;
                            color: #282828;
                        }

                        #oc-menu-vheader .ul-second-items .li-second-items:hover,
                        #oc-menu-vheader .ul-second-items .li-second-items.active {
                            background: #FFFFFF;
                            color: #62ab00;
                        }

                        #oc-menu-vheader .ul-second-items .li-second-items .a-second-link {
                            color: #282828;
                            font-size: 14px;
                            text-transform: capitalize;
                            font-weight: 600;
                        }

                        #oc-menu-vheader .ul-second-items .li-second-items:hover .a-second-link,
                        #oc-menu-vheader .ul-second-items .li-second-items.active .a-second-link {
                            color: #62ab00;
                            font-weight: 600;
                        }

                        #oc-menu-vheader .ul-third-items .li-third-items {
                            background: #FFFFFF;
                        }

                        #oc-menu-vheader .ul-third-items .li-third-items:hover,
                        #oc-menu-vheader .ul-third-items .li-third-items.active {
                            background: #FFFFFF;
                        }

                        #oc-menu-vheader .ul-third-items .li-third-items .a-third-link {
                            color: #666666;
                            font-size: 14px;
                            text-transform: capitalize;
                            font-weight: 400;
                        }

                        #oc-menu-vheader .ul-third-items .li-third-items:hover .a-third-link,
                        #oc-menu-vheader .ul-third-items .li-third-items.active .a-third-link {
                            color: #62ab00;
                            font-weight: 400;
                        }
                    </style>
                    <div role="menu" id="oc-menu-vheader" class="oc-menu vertical-menu visible-lg">

                        <input type="hidden" id="menu-effect-header" class="menu-effect" value="none" />
                        <div class="oc-menu-bar">
                            <div class="left"><i class="fas fa-bars"></i> <span>Browse categories</span></div>
                            <div class="right"><i class="fas fa-chevron-down" aria-hidden="true"></i></div>
                        </div>
                        <ul class="ul-top-items">


                            <?php
                            // database manager present in config.php
                            

                            $Categories = DatabaseManager::select("categories", "id , name ");
                            foreach ($Categories as $key => $value) {
                                $catid = $value["id"];
                                $catname = $value["name"];
                                $titles = DatabaseManager::select("books", "title,id", "category_id=$catid");
                                
                                ?>

                                <li class="li-top-item left <?php echo (count($titles) > 1) ? "has-child" : " "; ?> ">
                                    <a class="a-top-link a-item"
                                        href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>products.php?type=category&catid=<?php echo $catid ?>">
                                        <span>
                                            <?php echo $catname; ?>
                                        </span>
                                        <?php echo (count($titles) > 1) ? "<i class=\"fas fa-chevron-right\" aria-hidden=\"true\"></i>" : " "; ?>

                                    </a>
                                    <?php if (count($titles) > 1) { ?>
                                        <!-- Flyout Menu -->
                                        <div class="flyout-menu-container sub-menu-container  sub-category left">
                                            <ul class="ul-second-items">

                                                <!-- Nested Level Third -->
                                                <?php foreach ($titles as $key => $value) {
                                                    $title = $value["title"];
                                                    $bookid = $value["id"];
                                                    echo "<li class=\"li-second-items\">
                              <a href=\"" . ((basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : "") . "singleProductPage.php?bookid=" . $bookid . "\" class=\"a-second-link a-item\">
                                <span class=\"a-second-title\">$title</span>
                              </a>
                            </li>";

                                                } ?>

                                                <!-- Nested Level Third -->



                                            </ul>
                                        </div>
                                    <?php } ?>
                                </li>

                            <?php } ?>







                            <li class="li-top-item li-over">
                                <a href<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php"||basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>products.php?all=true" class="a-top-link a-plus a-over"><span>More
                                        Categories</span></a>
                            </li>










                        </ul>

                    </div>
                </div>

                <div class="col-search">
                    <div id="search-by-category">
                        <div class="search-container">
                            <input type="text" name="q" id="text-search" value="" placeholder="Search here..." class=""
                                aria-label="Search here..." />
                            <ul class="search-results" style="display:none" ;></ul>
                        </div>
                        <div id="sp-btn-search" class="">
                            <button type="button" id="btn-search-category"
                                onclick="window.location.href='<?php echo (basename($_SERVER['SCRIPT_FILENAME']) == 'index.php') ? 'pages/' : ''; ?>search.php?q='+document.getElementById('text-search').value"
                                class="btn btn-default btn-lg">
                                <span>Search</span>
                            </button>

                        </div>
                    </div>
                </div>

                <div class="box-cart">
                    <div id="top-links">
                        <ul class="user ul-account list-unstyled">


                            <li><a href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php" ) ? "pages/" : ""; ?>login.php" id="a-login-link">log in
                                    </a></li>

                            <li>or <a href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php" ) ? "pages/" : ""; ?>register.php"
                                    id="a-register-link">Register</a></li>



                        </ul>
                    </div>
                    <div id="cart" class="btn-group btn-block">
                        <button type="button" data-toggle="dropdown" data-loading-text="Loading..."
                            class="btn dropdown-toggle">
                            <span id="cart-total">

                                <?php
                                if (isset($_SESSION["AddToCart"])) {
                                    $ids = "";?>
                                    <span class="txt_number">
                                        <?php echo count($_SESSION["AddToCart"]) ?>
                                    </span>
                                    <a href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php"||basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>cart.php">
                                    <span class="txt_items">Shopping Cart </span></a>
                                    <?php if (count($_SESSION["AddToCart"]) > 0) {
                                        $firstKey = key($_SESSION["AddToCart"]); // Get the first key
                                
                                        foreach ($_SESSION["AddToCart"] as $key => $value) {
                                            if ($key === $firstKey) {
                                                $ids .= "$value";
                                            } else {
                                                $ids .= ",$value";
                                            }
                                        }

                                        $totalSalePrice = DatabaseManager::select(
                                            "books left join book_details on books.id=book_details.book_id",
                                            "SUM(sale_price)",
                                            "book_id in ($ids) AND sale_price != 0"
                                        )[0]["SUM(sale_price)"];

                                        $totalPrice = DatabaseManager::select(
                                            "books left join book_details on books.id=book_details.book_id",
                                            "SUM(price)",
                                            "book_id in ($ids) AND sale_price = 0"
                                        )[0]["SUM(price)"];

                                        $totalAmount = $totalSalePrice + $totalPrice;

                                        echo "$" . number_format($totalAmount, 2);
                                    } else { 
                                        echo "$" . number_format(0, 2);
                                    }
                                } else {
                                    ?>
                                    <span class="txt_number">0</span>
                                    <span class="txt_items">Shopping Cart</span>
                                    <span class="total-price"><span class="money">$0.00</span></span>
                                    <?php
                                }
                                ?>
                            </span>
                        </button>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>