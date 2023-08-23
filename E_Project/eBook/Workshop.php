<?php
include "inc/config.php";
if (isset($_POST["dataFNM"])) {
    $value = $_POST["dataFNM"];
    $htmlResponce='';
    if ($value == "Featured Products") {
        ob_start();
        ?>
       <style>
                                          ._border_animation{
                                            /* box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;  */
                                            transition-duration: .5s;
                                          }
                                          ._border_animation:hover{
                                            
                                            box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;                                            
                                          }

                                        </style>
                                        
                                          <div class="row flex-row">
                                              <?php
                                              $sql = "SELECT DISTINCT categories.name, categories.id
                                                      FROM categories
                                                      RIGHT JOIN books ON categories.id = books.category_id
                                                      WHERE books.is_Featured = 1";

                                              $categories = DatabaseManager::query($sql);

                                              while ($category = mysqli_fetch_assoc($categories)) {
                                                $catId = $category["id"];
                                                $catName = $category["name"];
                                                $books = DatabaseManager::select("books", "id, title, image_name", "category_id=$catId AND is_Featured=1");
                                                // print_r($books);
                                                $booksToShow = (count($books) > 3) ? 2 : count($books); // Limit to 8 books or the total number of books, whichever is smaller
                                              
                                                for ($i = 0; $i < $booksToShow; $i++) {
                                                  $book = $books[$i];
                                                  $imagename = $book["image_name"];
                                                  $BookTitle = $book["title"];
                                                  $Bookid = $book["id"];
                                                  ?>
                                                                              <div class="col-lg-3 col-md-4 col-sm-12 " style="flex-wrap: wrap;">
                                                                                  <div class="item-inner _border_animation py-3 my-4">
                                                                                            <div class="caption-top">

                                                                                              <p class="manufacture-product">
                                                                                                <a href="pages/products?catName=<?php echo $catName; ?>&catid=<?php echo $catId; ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
                                                                                              </p>

                                                                                              <h4 class="product-name">
                                                                                                <a
                                                                                                  href="collections/special-offer/products/copy-of-coyoto-tales-thomas-king.html">
                                                                                                  <?php echo $BookTitle; ?>
                                                                                                </a>
                                                                                              </h4>
                                                                                            </div>
                                                                                            <div class="box-border">
                                                                                              <div class="image images-container">

                                                                                                <!-- <a href="collections/special-offer/products/copy-of-coyoto-tales-thomas-king.html"
                                                                                      class="product-image"> -->
                                                                                                <a href="pages/products?bookId=<?php echo $Bookid ?>&catid=<?php echo $catId ?>"
                                                                                                  class="product-image">
                                                                                                  <img
                                                                                                    class="img-responsive has-rotator img-default-image img-cate-1613151338548-1543060429425"
                                                                                                    src="cdn/shop/products/<?php echo $imagename; ?>"
                                                                                                    alt="<?php echo $BookTitle; ?>" >




                                                                                                  <input type="hidden"
                                                                                                    value="//smartbook-theme.myshopify.com/cdn/shop/products/8-700x700_63654d3a-5549-4e8d-b9c5-234e2e45d2a8_600x600.jpg?v=1552408391"
                                                                                                    class="img-default-1613151338548-1543060429425" />













                                                                                                </a>















                                                                                                <div class="box-label"></div>
                                                                                                <div class="action-links">
                                                                                                  <button class="button btn-cart _Click">
                                                                                                      <a href="pages/cart.php?AddBookToCartOfBookId=<?php echo $Bookid ?>">
                                                                            
  
                                                                                                      <span>Add to Cart</span>
                                                                                                    </a>
                                                                                                    </button>


                                                                                                  <button  class=" _Click btn-wishlist button btn-default wishlist-btn">
                                                                                                    <a href="pages/cart.php?AddBookToWishListOfBookId=<?php echo $Bookid ?>">
                                                                          
                                                                                                    <span>Add to Wish List</span>
                                                                                                  </a>
                                                                                                  </button>


                                                                                                  <button class=" _Click button btn-compare" type="button">
                                                                                                    <a href="pages/single_Product_Page.php?ViewDetailOfBookId=<?php echo $Bookid ?>">
                                                                          
                                                                                                    <span>View Details</span>
                                                                                                  </a>
                                                                                                  </button>

                                                                                                  <button class=" _Click button btn-quickview quickview">
                                                                                                    <a href="pages/cart.php?ViewDetailsModal=<?php echo $Bookid ?>">
                                                                          
                                                                                                    <span>Quick View</span>
                                                                                                  </a>
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
                                                                  <?php $price_saleprice = DatabaseManager::select("book_details", "price , sale_price", "Book_id=$Bookid");
                                                                  // print_r($Bookid);
                                                                  // echo "<br>";
                                                                  // print_r($price_saleprice);
                                                              
                                                                  foreach ($price_saleprice as $key => $value) {
                                                                    $price = $value["price"];
                                                                    $saleprice = $value["sale_price"]; ?>
                                                                                            <p class="special-price"><span class="price"><span class=money>$<?php echo $price ?></span></span>
                                                                                          </p>
                                                                                          <?php if ($saleprice !== "0.00" && (int) $price > (int) $saleprice) { ?>
                                                              
                                                                                                      <p class="old-price"><span class="price"><span class=money>$<?php echo $saleprice; ?></span></span></p>

                                                                                          <?php } ?>

                                                                  <?php } ?>
                                                                     </div><br>
                                                                                                  <!-- price-container -->


                                                  <?php foreach ($price_saleprice as $key => $value) {
                                                    $price = $value["price"];
                                                    $saleprice = $value["sale_price"]; ?>
                                                                                <?php if ($saleprice !== "0.00" && (int) $price > (int) $saleprice) { ?>
                                                                                            <div class="label-product label_sale">
                                                                                                        <span>-<?php echo number_format(((((int) $price) - ((int) $saleprice)) / ((int) $price)) * 100, 2); ?>%</span>
                                                                                                      </div>

                                                                                          <?php } ?>

                                                                  <?php } ?>








                                                                                                </div>
                                                                                              </div>
                                                                                              <!-- caption -->
                                                                                            </div>
                                                                                  </div>
                                                                              </div>  
                                                            <?php }
                                              } ?>
                                          </div>  
    <?php
    $htmlResponce=ob_get_clean();
    echo $htmlResponce;    
    }else if ($value=="Most Viewed") {
    ob_start();?>
<!--  -->


    <?php
    $htmlResponce=ob_get_clean();
    echo $htmlResponce;
    }else{
        ob_start();?>



    <?php
    $htmlResponce=ob_get_clean();
    echo $htmlResponce;

    }



}

?>


<?php  
if (isset($_POST["BookId"])) {
    // add view if user check the details of book
    $bookID=$_POST["BookId"];
    DatabaseManager::query("UPDATE `books` SET `views` = `views` + 1 WHERE `id` = $bookID");
}
?>

<?php 
        if (isset($_GET["BookID_Get_Modal_Details"])) {
            $bookid=$_GET["BookID_Get_Modal_Details"];
            $sql=DatabaseManager::query("SELECT
            b.image_name,
            b.title,
            b.QuantityInStock,
            bd.price,
            bd.sale_price,
            bd.description
            FROM
            books AS b
            JOIN
            book_details AS bd ON b.id = bd.book_id
            WHERE bd.Book_id=12
            ;");
            $res=DatabaseManager::fetch_Assoc_All($sql);
            return 5;
        }   
?>