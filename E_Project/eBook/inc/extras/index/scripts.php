
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" type="text/javascript"></script>  
      

      <script>
        var moneyFormat = '<span class=money>${{amount}}</span>';
      </script>

      
      
      <script src="cdn/shop/t/12/assets/fastclick.min.js@v=29723458539410922371562327408" type="text/javascript">
      </script>
      
      
      <script src="cdn/shop/t/12/assets/Wishlist.js@v=26158059899868642851562327427" type="text/javascript">
      </script>
      <script>
        (function() {
          Wishlist.init();
        }());
      </script>
      
      








      <script>
  $(function() {
    var currentAjaxRequest = null;

    $('#search-by-category .search-container').css('position', 'relative').each(function() {
      var input = $(this).find('input[name="q"]');
      var offSet = input.position().top + input.innerHeight();
      var resultsList = $('<ul class="search-results"></ul>').css({
        'position': 'absolute',
        'left': '0px',
        'top': offSet
      }).appendTo($(this)).hide();

      input.attr('autocomplete', 'off').on('keyup change', function() {
        var term = $(this).val();
        var searchURL = '/search?type=product&q=' + term;

        if (term.length > 3 && term !== $(this).attr('data-old-term')) {
          $(this).attr('data-old-term', term);

          if (currentAjaxRequest !== null) {
            currentAjaxRequest.abort();
          }

          currentAjaxRequest = $.getJSON(searchURL + '&view=json', function(data) {
            resultsList.empty();

            if (data.results_count === 0) {
              resultsList.html('<li><span class="title">No results found.</span></li>');
              resultsList.fadeIn(200);
            } else {
              $.each(data.results, function(index, item) {
                var link = $('<a></a>').attr('href', item.url);
                link.append('<span class="thumbnail"><img src="https://smartbook-theme.myshopify.com/' + item.thumbnail + '" /></span>');
                link.append('<span class="title">' + item.title + '</span>');
                link.append('<span class="price title">' + Shopify.formatMoney(item.price) + '</span>');
                link.wrap('<li></li>');
                resultsList.append(link.parent());
              });

              if (data.results_count > 5) {
                resultsList.append('<li><span class="title"><a href="https://smartbook-theme.myshopify.com/' + searchURL + '">See all results (' + data.results_count + ')</a></span></li>');
              }

              resultsList.fadeIn(200);
            }
          });
        }
      });
    });

    $('body').on('click', function() {
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
    -webkit-box-shadow: 0px 4px 7px 0px rgba(0,0,0,0.1);
    box-shadow: 0px 4px 7px 0px rgba(0,0,0,0.1);
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js" type="text/javascript"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" rel="stylesheet" type="text/css" media="all" />

<script>
  window.addEventListener("load", function(){
    window.cookieconsent.initialise({
      "palette": {
        "popup": {
          "background": "#62ab00",
          "text": "#fff"
        },
        "button": {
          "background": "",
          "text": "",
          "border": "#ffffff"
        }
      },
      "content": {
        "href": ""
      }
    })});
</script> 
      

<script src="cdn/s/javascripts/currencies.js" type="text/javascript"></script>
<script src="cdn/shop/t/12/assets/jquery.currencies.min.js@v=175057760772006623221562327411" type="text/javascript"></script>

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
    jQuery(this).attr('data-currency-USD', jQuery(this).html());
                      });
    // If there's no cookie.
    if (cookieCurrency == null) {
      if (shopCurrency !== defaultCurrency) {
        Currency.convertAll(shopCurrency, defaultCurrency);
      }
      else {
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
    }
    else {
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

