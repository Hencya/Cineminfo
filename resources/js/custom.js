const { Alert } = require("bootstrap");

$(document).ready(function() {
    $(".add-to-wishlist-btn").click(function(e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token').attr("content")
            }
        });

        var product_id = $(this)
            .closest(".product_data")
            .find(".product_id")
            .val();

        Alert(product_id);

        // $.ajax({
        //     method: "POST",
        //     url: "/add-wishlist",
        //     data: {
        //         product_id: product_id
        //     },
        //     success: function(response) {
        //         Alert.success;
        //     }
        // });
    });
});
