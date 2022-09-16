@extends('frontend.master')

@section('content')


<div class="hero-wrap hero-bread">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home</a></span> <span>Cart</span></p>
          <h1 class="mb-0 bread">My cart</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section ftco-cart">
          <div class="container ">
              <div class="row">
              <div class="col-md-12 ftco-animate">
                  <div class="cart-list">
                      <table class="table">
                          <thead class="thead-primary">
                            <tr class="text-center">
                              <th>&nbsp;</th>
                              <th>&nbsp;</th>
                              <th>Product</th>
                              <th>Price</th>
                              <th>Quantity</th>
                              <th>Total</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php $total = 0; @endphp
                           
                            @forelse ($cartitems as $item)
                                                         
                            <tr class="text-center product_data">
                                <td class="product-remove delete-cart-item"><a href="#"><span class="ion-ios-close"></span></a></td>
                                
                                <td class="image-prod"><div class="img" style="background-image:url({{asset('product/'.$item->products->image)}});"></div></td>
                                
                                <td class="product-name">
                                    <h3>{{$item->products->name}}</h3>
                                    <p>{{$item->products->description}}</p>
                                </td>
                                
                                <td class="price">$ {{$item->products->selling_price}}</td>
                              
                                <td class="quantity">
                                    <div class="input-group mb-3">
                                      <input type="hidden" value="{{$item->prod_id}}" class="prod_id">
                                      <span class="input-group-btn mr-2">
                                          <button type="button" class="quantity-left-minus btn changeQauntity"  data-type="minus" data-field="">
                                          <i class="ion-ios-remove"></i>
                                          </button>
                                      </span>
                                      <input type="text" id="quantity" name="quantity" class="quantity form-control input-number" value="{{ $item->prod_qty }}"  max="100">
                                     <span class="input-group-btn ml-2">
                                          <button type="button" class="quantity-right-plus btn changeQauntity" data-type="plus" data-field="">
                                          <i class="ion-ios-add"></i>
                                          </button>
                                      </span>
                                  </div>
                              </td>
                              @php $total += $item->products->selling_price * $item->prod_qty; @endphp

                                <td class="total">${{$item->products->selling_price * $item->prod_qty}}</td>
                              </tr><!-- END TR-->
                              @empty
                              <tr class="text-center">
                              
                                <td class="product-name" colspan="4">
                                    <h3>No Product add your cart</h3>                                    
                                </td>                              
                              </tr><!-- END TR-->
                            
                           
                             
                              @endforelse 
                                                     
                          </tbody>
                        </table>
                    </div>
              </div>
          </div>
          <div class="row justify-content-start">
              <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
                  <div class="cart-total mb-3">
                      <h3>Cart Totals</h3>
                      <p class="d-flex">
                          <span>Subtotal</span>
                          <span>${{$total}}</span>
                      </p>
                      <p class="d-flex">
                          <span>Delivery</span>
                          <span>$0.00</span>
                      </p>
                      <p class="d-flex">
                          <span>Discount</span>
                          <span>$3.00</span>
                      </p>
                      <hr>
                      <p class="d-flex total-price">
                          <span>Total</span>
                         
                          <span>${{ $total }}</span>
                      </p>
                  </div>
                  <p class="text-center"><a href="checkout.html" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
              </div>
          </div>
          </div>
      </section>


      @endsection

      @section('script')

      <script>
          $(document).ready(function(){
      
            $('.addToCart').click(function (e){
              e.preventDefault();
              var product_id = $(this).closest('.product_data').find('.prod_id').val();
              var product_qty = $(this).closest('.product_data').find('#quantity').val();
              // var product_price = $(this).closest('.product_data').find('.price_id').val();
              // var product_des = $(this).closest('.product_data').find('.des').val();
              
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

              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
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
      </script>
      
      @endsection