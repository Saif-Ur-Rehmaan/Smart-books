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
        <div class="modal-body" id="Mod_Clz">
          <div class="modal-product">
            <!-- Start product images -->
            <div class="product-images">
              <div class="main-image images">
                <img alt="" src="<?php echo (basename($_SERVER["SCRIPT_FILENAME"])=="index.php") ? "" : "../" ; ?>index.php" class="img-responsive">
              </div>
            </div>
            <!-- end product images -->
            <div class="product-info">
              <h2>Sleeve High Neck Bodycon Dress </h2>
              <div class="price-box">
                <p class="price"><span class="special-price"><span class="amount">$132.00</span></span></p>
              </div>
              <a href="shop.php" class="see-all">See all features</a>
              <div class="quick-add-to-cart">
                <form class="cart" action="https://smartbook-theme.myshopify.com/cart/add" method="post" enctype="multipart/form-data" id="addToCartForm">
                  <div class="numbers-row">
                    <input type="hidden" id="id" name="id" value="" />
                    <input type="number" name="quantity" id="quantity" value="1">
                  </div>
                  <button class="single_add_to_cart_button" type="submit">Add to Cart</button>
                </form>
              </div>
              <div class="quick-desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.
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
<script defr>
  
</script>