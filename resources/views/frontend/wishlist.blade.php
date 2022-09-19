@extends('frontend.master')

@section('content')


<div class="hero-wrap hero-bread">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home</a></span> <span>Wishlist</span></p>
          <h1 class="mb-0 bread">My Wishlist</h1>
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
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse ($wishlist as $item)

                            <tr class="text-center product_data">
                                <td class="product-remove remove-wishlist-item"><a href="#"><span class="ion-ios-close"></span></a></td>
                                <td class="image-prod"><div class="img" style="background-image:url({{asset('product/'.$item->products->image)}});"></div></td>
                                <td class="product-name">
                                    <h3>{{$item->products->name}}</h3>
                                    <p>{{$item->products->description}}</p>
                                </td>
                                <td class="price">$ {{$item->products->selling_price}}</td>
                                <td class="quantity">
                                    <div class="input-group">
                                        <input type="hidden" value="{{$item->prod_id}}" class="prod_id">
                                        @if ($item->products->quantity >= $item->prod_qty)
                                            <h6 class="text-center ml-5 pl-4">In Stock</h6>
                                            @else
                                            <h6>Out Of Stock</h6>
                                        @endif
                                    </div>
                                </td>
                                </tr><!-- END TR-->
                                @empty
                                <tr class="text-center">

                                <td class="product-name" colspan="4">
                                    <h3>Wishlist is empty</h3>
                                </td>
                                </tr><!-- END TR-->
                                @endforelse
                            </tbody>
                        </table>
                        <p class="text-center float-right"><a href="{{url('shop')}}" class="btn btn-outline-info py-3 px-4">Continue Shopping</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

      @section('script')

      <script>
          $(document).ready(function(){

              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
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


          });
      </script>

      @endsection
