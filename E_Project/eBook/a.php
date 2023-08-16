<li class="li-top-item left has-child" style="float: left;">
    <a class="a-top-link" href="collections/all/index.html@fts=0&preview_theme_id=.html">
        <span>Catalog</span>
        <i class="fas fa-chevron-down" aria-hidden="true"></i>
    </a>
    <!-- Mega Menu -->

    <div class="mega-menu-container sub-menu-container left">
        <div class="row">

            <?php
            $a = file_get_contents("nav.json");
            if (!$a) {
                echo "error : $a";
            }
            $res = json_decode($a, true)["catalog"];
            // print_r($res);
            
            ?>


            <?php
            foreach ($res as $key => $value) {
                foreach ($value as $key => $value) {
                    if ($key == "name") {
                        echo " <div class=\"col-md-3 sub-item2-content sub-item2-category-content\" data-cols=\"3\">
                                              <a class=\"a-mega-second-link\" href=\"catagories.php?$value\" >
                                            <h4>$value </h4>
                                          </a>";
                    } else {
                        ?>
                        <div class="sub_item3-content">
                            <?php
                            // print_r($value);
                            foreach ($value as $key => $value) {
                                echo "<h5><a class=\"a-mega-third-link\" href=\"category.php?searchProductOfCatagori=$value\">$value</a></h5>";

                            }
                            ?>
                        </div>
                    </div>

                    <?php
                    }

                }
            }
            ?>
















        <div class="col-md-3 sub-item2-content" data-cols="3">
            <p class="widget-html-title"></p>
            <div>
                <div class="banner-static static-menu-right">
                    <div class="image">
                        <a href="collections/all/index.html@preview_theme_id=74460266548.html">
                            <img src="cdn/shop/files/img-right-menu.jpg@v=1613707825" alt="image">
                        </a>
                    </div>
                </div>
            </div>
        </div>



    </div>
    </div>
</li>