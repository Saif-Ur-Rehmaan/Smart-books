<?php
include "inc/config.php";

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
    echo "<div class=\"row_items\"> open<br>";

    $imagename = $arru[$i]["Title"];
    $BookTitle = $arru[$i]["Image"];
    $Bookid = $arru[$i]["ID"];
    $catId = $arru[$i]["catId"];
    $catName = $arru[$i]["catName"]; ?>

    <div class="product-layout grid-style  ">
        <div class="product-thumb transition">
            <div class="item">
                <div class="item-inner">
                    <div class="caption-top">

                        <p class="manufacture-product">
                            <a href="collections/vendors@q=Amazona.html" title="Amazona">Amazona</a>
                        </p>

                        <h4 class="product-name">
                            <a href="collections/special-offer/products/copy-of-when-the-doves-disappeared.html">
                                anthrplogie amérndene - franz
                            </a>
                        </h4>
                    </div>
                    <div class="box-border">
                        <div class="image images-container">

                            <a href="collections/special-offer/products/copy-of-when-the-doves-disappeared.html"
                                class="product-image">
                                <img class="img-responsive has-rotator img-default-image img-cate-1613107134516-1543060429425"
                                    src="cdn/shop/products/9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg@v=1552407244"
                                    alt="anthrplogie amérndene - franz">




                                <input type="hidden"
                                    value="//smartbook-theme.myshopify.com/cdn/shop/products/9-700x700_a7714b9b-0e08-4790-a02b-9ad0d34526e9_600x600.jpg?v=1552407244"
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
                                    data-toggle="tooltip" title="Add to Wish List" data-original-title="Add to Wish List">
                                    <span>Add to Wish List</span>
                                </button>


                                <button class="button btn-compare" type="button" data-toggle="tooltip" title="View Details"
                                    onclick="location.href='/products/copy-of-when-the-doves-disappeared';">
                                    <span>View Details</span>
                                </button>

                                <button class="button btn-quickview quickview" type="button" title="Quick View"
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

                                        <span class="shopify-product-reviews-badge" data-id="1613107134516"></span>

                                    </div>
                                </div>

                                <div class="price-box">

                                    <p class="special-price"><span class="price"><span class=money>$11.99</span></span></p>
                                    <p class="old-price"><span class="price"><span class=money>$19.99</span></span></p>

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
    <?php
    echo "Title: " . $arru[$i]["Title"] . "<br>";
    echo "Image: " . $arru[$i]["Image"] . "<br>";
    echo "ID: " . $arru[$i]["ID"] . "<br>";
    echo "Category ID: " . $arru[$i]["catId"] . "<br>";
    echo "Category Name: " . $arru[$i]["catName"] . "<br>";

    if ($i + 1 < count($arru)) {
        echo "<br>";
        echo "Title: " . $arru[$i + 1]["Title"] . "<br>";
        echo "Image: " . $arru[$i + 1]["Image"] . "<br>";
        echo "ID: " . $arru[$i + 1]["ID"] . "<br>";
        echo "Category ID: " . $arru[$i + 1]["catId"] . "<br>";
        echo "Category Name: " . $arru[$i + 1]["catName"] . "<br>";
    }
    echo "</div>div closed<br><br><br><br>";
}
?>