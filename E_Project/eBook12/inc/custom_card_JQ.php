<script defr>
    $(document).ready(() => {

        $("._addView").on("click", function () {
            let bookId = $(this).attr("data-Bookid"); // $(this) refers to the clicked element
            $.ajax({
                url: '<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>Workshop.php',
                method: 'POST', // 'Post' corrected to 'POST'
                data: {
                    BookId: bookId // Corrected variable name from BookId to bookId
                },
                success: function (res) {
                    console.log("Success: View added", res);
                },
                error: function () {
                    console.log("Error: Failed to add view");
                }
            });
        });




        $('[data-original-title="Quick View"]').on("click", function () {
            var clickedElement = $(this); // Store the reference to the clicked element

            let bookid = clickedElement.attr("data-book_id");
            $.ajax({
                url: '<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>Workshop.php',
                method: 'POST',
                data: {
                    Bookid_FOR_QUICKVIEW: bookid,
                    filename: "<?php echo basename($_SERVER["SCRIPT_FILENAME"]) ?>"
                },
                success: function (res) {
                    $("#Mod_Clz").html(res);
                },
                error: function (e) {
                    console.log(e);
                }
            });
        });
        let btn = $("#btn-search-category");

        btn.on("click", (e) => {
            e.preventDefault();
            let searchtxt = ("#text-search").value;
            console.log(searchtxt);
            // window.location.href = `pages/search.php?${searchtxt}`
        })

        let addWishlistbtn = $("._addWishlist");
        addWishlistbtn.on("click", (e) => {
            let bookid = $(e.target).attr("data-original-title");
            console.log(e.target);
            $.ajax({
                url: '<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>Workshop.php',
                method: 'POST',
                data: {
                    Add_Wishlist_Of_BookId: bookid,
                },
                success: (e) => {
                    console.log(e);
                    alert(e)
                },
                error: () => {
                    console.log("wishlist Notdone");
                }
            })
        })
        let addtocartlistbtn = document.getElementsByClassName("_addtocart");
        for (let index = 0; index < addtocartlistbtn.length; index++) {
            const element = addtocartlistbtn[index];

        
        element.addEventListener("click", (e) => {
            let bookid = $(e.target).attr("data-original-title");
            console.log(bookid);
            $.ajax({
                url: '<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "index.php") ? "" : "../"; ?>Workshop.php',
                method: 'POST',
                data: {
                    Add_To_cart_Of_BookId: bookid,
                },
                success: (e) => {
                    console.log(e);
                    alert(e)
                },
                error: () => {
                    console.log("add to cart Notdone");
                }
            })
        })
    }

    });
</script>