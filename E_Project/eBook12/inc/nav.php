<nav id="top">
  <div class="container">
    <div class="container-inner">
      <div class="box box-left">



        <div class="currency">
          <div class="btn-group" id="form-currency">
            <span class="pull-left hidden-xs hidden-sm hidden-md text-ex">Currency:</span>
            <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
              <span class="selected-currency">USD</span>
              <i class="icons-right fas fa-chevron-down"></i>
            </button>
            <ul name="currencies" class="dropdown-menu">

              <li>
                <button class="currency-select btn btn-link btn-block item-selected" type="button"
                  name="USD">USD</button>
              </li>

              <li>
                <button class="currency-select btn btn-link btn-block " type="button" name="EUR">EUR</button>
              </li>

              <li>
                <button class="currency-select btn btn-link btn-block " type="button" name="GBP">GBP</button>
              </li>

              <li>
                <button class="currency-select btn btn-link btn-block " type="button" name="PKR">PKR</button>
              </li>

              <li>
                <button class="currency-select btn btn-link btn-block " type="button" name="CAD">CAD</button>
              </li>

              <li>
                <button class="currency-select btn btn-link btn-block " type="button" name="JPY">JPY</button>
              </li>

            </ul>
          </div>
        </div>

      </div>
      <div class="box box-right">

        <div><a
            href="<?php ((basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : "") ?>wishlist.php"
            id="wishlist-total"><i class="icons-left fas fa-heart"></i><span class="hidden-xs">Wish List</span></a>
        </div>

        <div class="setting">
          <div class="btn-group">
            <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
              <i class="icons-left fas fa-user"></i><span class="hidden-xs">My Account</span><i
                class="icons-right fas fa-chevron-down"></i></button>
            <div class="dropdown-menu">
              <ul class="list-unstyled">


                <li>
                  <?php if (isset($_SESSION["logged_in"])) { ?>
                    <a href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "" : "../"; ?>Workshop.php?logout=true"
                      id="customer_login_link">
                      <span>Sign out</span>
                    </a>

                  <?php } else { ?>
                    <a href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>login.php"
                      id="customer_login_link">
                      <span>Sign in</span>
                    </a>
                  <?php } ?>
                </li>

                <li><a
                    href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>register.php"
                    id="customer_register_link"><span>Register</span></a></li>



                <li><a
                    href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>cart.php"><span>Cart</span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div><a
            href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>contact-us.php"
            title="Contact"><i class="icons-left fas fa-phone"></i><span class="hidden-xs">Contact</span></a></div>
        <div><a
            href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "collections.php") ? "pages/" : ""; ?>checkout.php"
            title="Checkout"><i class="icons-left fas fa-share"></i><span class="hidden-xs">Checkout</span></a></div>
      </div>
    </div>
  </div>
</nav>