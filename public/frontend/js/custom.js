$(document).ready(function(){
      
    loadcart();
    loadwhishlist();

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function loadcart(){
        $.ajax({
            method: 'GET',
            url: '/load-cart-data',
            success: function(response){
                $('.cart-count').html('');
                $('.cart-count').html(response.count);
            }
        });
    }

    function loadwhishlist(){
        $.ajax({
            method: 'GET',
            url: '/load-wishlist-count',
            success: function(response){
                $('.wish-count').html('');
                $('.wish-count').html(response.count);
            }
        });
    }


    $('.addToCart').click(function (e){
        e.preventDefault();
        var product_id = $(this).closest('.product_data').find('.prod_id').val();
        var product_qty = $(this).closest('.product_data').find('#quantity').val();
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: "POST",
            url: "/add-to-cart",
            data: {
                'product_id' : product_id,
            //   'product_price' : product_price,
                'product_qty' : product_qty,              
            //   'product_des' : product_des,
            },
            success: function (response){
                swal(response.message);
                loadcart();
            }
        });

    });

    $('.addToWishlist').click(function (e){
        e.preventDefault();
        var product_id = $(this).closest('.product_data').find('.prod_id').val();

        $.ajax({
            method: "POST",
            url: "/add-to-wishlist",
            data: {
                'product_id' : product_id,
            },
            success: function (response){
                swal(response.message)
                loadwhishlist();
            }
        });

    });
        

    var quantitiy=0;
     $('.quantity-right-plus').click(function(e){
          
        // Stop acting like a button
        e.preventDefault();

        var inc_value = $(this).closest('.product_data').find('#quantity').val();
        // Get the field name
        var quantity = parseInt(inc_value,10);
        quantity = isNaN(quantity) ? 0 : quantity;
        if(quantity < 10){
          quantity++;
          $(this).closest('.product_data').find('#quantity').val(quantity);
        }         
    });

    $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name

        var des_value = $(this).closest('.product_data').find('#quantity').val();
        // Get the field name
        var quantity = parseInt(des_value,10);
        quantity = isNaN(quantity) ? 0 : quantity;
        if(quantity > 1){
            quantity--;
            $(this).closest('.product_data').find('#quantity').val(quantity);
        }       
    });

    $('.delete-cart-item').click(function (e){
        e.preventDefault();              

        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
        $.ajax({
            method: "POST",
            url: "delete-cart-item",
            data: {
                'prod_id' : prod_id,
            },
            success: function(response) {
                window.location.reload();
               
                // swal("",response.message, "success");
            }
        });

    });

    $('.remove-wishlist-item').click(function (e){
    e.preventDefault();

        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
        $.ajax({
            method: "POST",
            url: "delete-wishlist-item",
            data: {
            'prod_id' : prod_id,
            },
            success: function(response) {
                window.location.reload();
               
            // swal("",response.message, "success");
            }
        });

    });

    $('.changeQauntity').click(function (e) {
        e.preventDefault();

        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
        var qty = $(this).closest('.product_data').find('#quantity').val();
        
        $.ajax({
            method: "POST",
            url: "update-cart",
            data: {
                'prod_id' : prod_id,
                'prod_qty' : qty,
            },
            success: function(response) {
                
                // swal("",response.message,"success");
                window.location.reload();
            }
        });
    });



});