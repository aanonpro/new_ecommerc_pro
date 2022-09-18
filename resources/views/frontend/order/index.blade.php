@extends('frontend.master')

@section('content')


<div class="hero-wrap hero-bread">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home</a></span> <span>Order</span></p>
          <h1 class="mb-0 bread">My Orders</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section ftco-cart">
          <div class="container">
              <div class="row">
              <div class="col-md-12 ftco-animate">
                  <div class="cart-list">
                      <table class="table">
                          <thead class="thead-primary">
                            <tr class="text-center">
                             
                              <th>Tracking Number</th>
                              <th>Totol Price </th>
                              <th>Status </th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($orders as $order)
                                
                           
                            <tr class="text-center">
                             
                              <td class="product-name">
                                  <h3>{{ $order->tracking_no }}</h3>                                 
                              </td>
                              
                              <td class="price">${{$order->total_price}}</td>

                              <td class="price">{{$order->status == '1' ? 'pending' : 'completed' }}</td>                            
                              
                              <td class="total">
                                <p class="text-center"><a href="{{url('view-order/'.$order->id)}}" class="btn btn-primary py-3 px-4">View</a></p>
                              </td>
                            </tr><!-- END TR-->


                            @endforeach
                          </tbody>
                        </table>
                    </div>
              </div>
          </div>
          {{-- <div class="row justify-content-start">
              <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
                  <div class="cart-total mb-3">
                      <h3>Cart Totals</h3>
                      <p class="d-flex">
                          <span>Subtotal</span>
                          <span>$20.60</span>
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
                          <span>$17.60</span>
                      </p>
                  </div>
                  <p class="text-center"><a href="checkout.html" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
              </div>
          </div> --}}
          </div>
      </section>
      

@endsection