<?php
include "inc/config.php";
if (isset($_POST["dataFNM"])) {
  $value = $_POST["dataFNM"];
  $htmlResponce = '';
  if ($value == "Featured Products") {
    ob_start();
    ?>
    <style>
      ._border_animation {
        /* box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;  */
        transition-duration: .5s;
      }

      ._border_animation:hover {

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
                  <a href<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>products?catName=<?php echo $catName; ?>&catid=<?php echo $catId; ?>" title="<?php echo $catName; ?>"><?php echo $catName; ?></a>
                </p>

                <h4 class="product-name">
                  <a href="collections/special-offer/products/copy-of-coyoto-tales-thomas-king.php">
                    <?php echo $BookTitle; ?>
                  </a>
                </h4>
              </div>
              <div class="box-border">
                <div class="image images-container">

                  <!-- <a href="collections/special-offer/products/copy-of-coyoto-tales-thomas-king.php"
                                                                                            class="product-image"> -->
                  <a href<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>products?bookId=<?php echo $Bookid ?>&catid=<?php echo $catId ?>" class="product-image">
                    <img class="img-responsive has-rotator img-default-image img-cate-1613151338548-1543060429425"
                      src="images/products/<?php echo $imagename; ?>" alt="<?php echo $BookTitle; ?>">




                    <input type="hidden"
                      value="//smartbook-theme.myshopify.com/images/products/8-700x700_63654d3a-5549-4e8d-b9c5-234e2e45d2a8_600x600.jpg?v=1552408391"
                      class="img-default-1613151338548-1543060429425" />













                  </a>















                  <div class="box-label"></div>
                  <div class="action-links">
                    <button class="button btn-cart _Click">
                      <a href<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>cart.php?AddBookToCartOfBookId=<?php echo $Bookid ?>">


                <span>Add to Cart</span>
              </a>
            </button>


            <button class=" _Click btn-wishlist button btn-default wishlist-btn">
                      <a href<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>cart.php?AddBookToWishListOfBookId=<?php echo $Bookid ?>">

                <span>Add to Wish List</span>
              </a>
            </button>


            <button class=" _Click button btn-compare" type="button">
                      <a href<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>single_Product_Page.php?ViewDetailOfBookId=<?php echo $Bookid ?>">

                <span>View Details</span>
              </a>
            </button>

            <button class=" _Click button btn-quickview quickview">
                      <a href<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>cart.php?ViewDetailsModal=<?php echo $Bookid ?>">

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

                        <span class="shopify-product-reviews-badge" data-id="1613151338548"></span>

                      </div>
                    </div>

                    <div class="price-box">
                      <?php $price_saleprice = DatabaseManager::select("book_details", "price , sale_price", "Book_id=$Bookid");
               
              
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
                          <span>-
                            <?php echo number_format(((((int) $price) - ((int) $saleprice)) / ((int) $price)) * 100, 2); ?>%
                          </span>
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
    $htmlResponce = ob_get_clean();
    echo $htmlResponce;
  } else if ($value == "Most Viewed") {
    ob_start(); ?>
      <!--  -->


      <?php
      $htmlResponce = ob_get_clean();
      echo $htmlResponce;
  } else {
    ob_start(); ?>



      <?php
      $htmlResponce = ob_get_clean();
      echo $htmlResponce;

  }



}

?>


<?php
if (isset($_POST["BookId"])) {
  // add view if user check the details of book
  $bookID = $_POST["BookId"];
  DatabaseManager::query("UPDATE `books` SET `views` = `views` + 1 WHERE `id` = $bookID");
  echo "view added";
}
?>

<?php
if (isset($_POST["Bookid_FOR_QUICKVIEW"])) {
  $bookid = $_POST["Bookid_FOR_QUICKVIEW"];
  ob_start();
  ?>

  <div class="modal-body" id="Mod_Clz">
    <div class="modal-product">
      <!-- Start product images -->
      <div class="product-images">
        <div class="main-image images">
          <img alt=""
            src="<?php echo ($_POST["filename"] == "index.php" || $_POST["filename"] == "collections.php") ? "" : "../"; ?>images/products/<?php echo DatabaseManager::select("books", "image_name", "id=$bookid")[0]["image_name"] ?>"
            class="img-responsive">
        </div>
      </div>
      <!-- end product images -->
      <div class="product-info">
        <h2>
          <?php echo DatabaseManager::select("books", "title", "id=$bookid")[0]["title"] ?>
        </h2>
        <div class="price-box">
          <p class="price"><span class="special-price"><span class="amount">$
                <?php echo DatabaseManager::select("book_details", "sale_price", "book_id=$bookid")[0]["sale_price"] ?>
              </span></span></p>
        </div>
        <a href<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>singleProductPage.php?<?php echo $bookid ?>" class="see-all">See all features</a>
        <div class="quick-add-to-cart">
          <form class="cart" action="https://smartbook-theme.myshopify.com/cart/add" method="post"
            enctype="multipart/form-data" id="addToCartForm">
            <div class="numbers-row">
              <input type="hidden" id="id" name="id" value="" />
              <input type="number" name="quantity" id="quantity" value="1">
            </div>
            <button class="single_add_to_cart_button" type="submit">Add to Cart</button>
          </form>
        </div>
        <div class="quick-desc">
          <?php echo DatabaseManager::select("book_details", "description", "book_id=$bookid")[0]["description"] ?>
        </div>
      </div>
      <!-- .product-info -->
    </div>
    <!-- .modal-product -->
  </div>

  <?php
  $html = '';
  $html = ob_get_clean();
  echo $html;
}
?>
<?php


if (isset($_POST["Add_Wishlist_Of_BookId"])) {
  $bookid = $_POST["Add_Wishlist_Of_BookId"];

  if (!isset($_SESSION["Wishlist"])) {
    $_SESSION["Wishlist"] = [];
  }

  $key = array_search($bookid, $_SESSION["Wishlist"]);

  if ($key !== false) {

    unset($_SESSION["Wishlist"][$key]);
    echo "product removed wishlist";
  } else {
    array_push($_SESSION["Wishlist"], $bookid);
    echo "product added wishlist";
  }
} else if (isset($_POST["Add_To_cart_Of_BookId"])) {
  $bookid = $_POST["Add_To_cart_Of_BookId"];

  if (!isset($_SESSION["AddToCart"])) {
    $_SESSION["AddToCart"] = [];
  }

  $key = array_search($bookid, $_SESSION["AddToCart"]);

  if ($key !== false) {

    unset($_SESSION["AddToCart"][$key]);
    echo "product removed AddToCart";
  } else {
    $_SESSION["AddToCart"][] = $bookid;
    echo "product added AddToCart";
  }
}
?>



<?php
if (isset($_POST["submitMessage"])) {

  $messege = $_POST; 
  $name = $_POST["contact"]["name"];
  $email = $_POST["contact"]["email"];
  $phone = $_POST["contact"]["phone"];
  $messege = $_POST["contact"]["body"];
  $data = [
    "name" => $name,
    "email" => $email,
    "phone_Number" => $phone,
    "Messege" => $messege,
  ];
  $res = DatabaseManager::insert("contactUs", $data);
  // echo $res;
  if ($res) {
    echo true;
    header("location: pages/contact-us.php?success=true");
    die();
  } else {
    echo false;
    header("location: pages/contact-us.php?success=false");
    die();
  }
  ;

}
if (isset($_POST["submitcreate"])) {
  $message = $_POST;
  $username = $_POST["customer"]["first_name"] . " " . $_POST["customer"]["last_name"];
  $password = $_POST["customer"]["password"];
  $email = $_POST["customer"]["email"];
  $role = $_POST["customer"]["role"];

  if ($role == "User") {
    // Code for user registration (no image upload)
    $data = [
      'username' => $username,
      'email' => $email,
      'password' => $password,
    ];
    $result = DatabaseManager::query("SELECT * FROM users WHERE email='$email' AND password='$password' AND username='$username'");
    if ($result->num_rows == 0) {
      echo true;
      DatabaseManager::insert("users", $data);
      header("location: pages/register.php?success=true");
      die();
    } else {
      echo false;
      header("location: pages/register.php?success=false");
      die();
    }
  } elseif ($role == "Author") {
    // Code for author registration with image upload
    $bio = $_POST["customer"]["bio"];
    $imageFileName = $_FILES["customer"]["name"]["image"];
    $uploadDir = "images/authors/";
    $from = $_FILES["customer"]['tmp_name']["image"];
    $to = $uploadDir . basename($imageFileName) . time();

    $data = [
      'name' => $username,
      'email' => $email,
      'password' => $password,
      'bio' => $bio,
      'image_name' => $imageFileName,
    ];

    $result = DatabaseManager::query("SELECT * FROM authors WHERE email='$email' AND password='$password' AND name='$username'");

    if ($result->num_rows == 0) {
      if (move_uploaded_file($from, $to)) {
        echo true;
        DatabaseManager::insert("authors", $data);
        header("location: pages/register.php?success=true");
        die();
      } else {
        echo false;
        header("location: pages/register.php?success=false&reason=imageNotUploaded");
        die();
      }
    } else {
      echo false;
      header("location: pages/register.php?success=false");
      die();
    }
  }

}

if (isset($_GET["logout"])) {
  unset($_SESSION["logged_in"]);
  header("location: pages/login.php?loggedout");
  die();
}

 

if (isset($_POST["form_type"])) {
  if ($_POST['form_type'] == "recover_customer_password") {
    $email = $_POST["customer"]['email'];
    $res = DatabaseManager::query("SELECT * from users where email='$email'");
    if ($res->num_rows==0) {
      header("location: pages/login.php?emailnotfound");
      die();
    }else{
      header("location: pages/login.php?checkMail");
      die();

    }

  } else if ($_POST['form_type'] == "customer_login"){
    $email = $_POST["customer"]['email'];
  $password = $_POST["customer"]['password'];
  if ($email != "" && $password != "") {
    $res = DatabaseManager::query("SELECT * from users where email='$email' and password='$password'");
    if ($res->num_rows == 0) {

      $res = DatabaseManager::query("SELECT * from authors where email='$email' and password='$password'");
      if ($res->num_rows == 0) {
        header("location: pages/login.php?success=false&reason=usernotfound");
        die();
      }
      $_SESSION["logged_in"] = ["authorid" => DatabaseManager::select("authors", "id", "email='$email' and password='$password' limit 1")[0]["id"]];
      header("location: pages/login.php?success=true");
      die();
    } else {
      $_SESSION["logged_in"] = ["userid" => DatabaseManager::select("users", "id", "email='$email' and password='$password' limit 1")[0]["id"]];
      header("location: pages/login.php?success=true");
      die();
    }
  }
  // header("location: pages/login.php?emptyfield");
  // die();

  }
}
?>