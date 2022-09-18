@extends('frontend.master')

@section('content')

<div class="hero-wrap hero-bread">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home</a></span> <span>Checkout</span></p>
          <h1 class="mb-0 bread">Checkout</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-10 ftco-animate">
            <form action="{{ url('place-order') }}" method="POST" class="billing-form">
              @csrf
                <h3 class="mb-4 billing-heading">Billing Details</h3>
                <div class="row align-items-end">
                    <div class="col-md-6">
                  <div class="form-group">
                      <label for="firstname">Firt Name</label>
                    <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="fname" placeholder="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" value="{{ Auth::user()->lname }}" name="lname" placeholder="">
                  </div>
              </div>
              <div class="w-100"></div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="country">State </label>
                          <input type="text" class="form-control" value="{{ Auth::user()->state }}" name="state" placeholder="">
                      </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" value="{{ Auth::user()->country }}" name="country" placeholder="">
                    </div>
                </div>
                  <div class="w-100"></div>
                  <div class="col-md-6">
                      <div class="form-group">
                      <label for="streetaddress">Street Address</label>
                    <input type="text" class="form-control" name="address1" value="{{ Auth::user()->address1 }}" placeholder="House number and street name">
                  </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                    <input type="text" class="form-control" name="address2" value="{{ Auth::user()->address2 }}" placeholder="Appartment, suite, unit etc: (optional)">
                  </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="col-md-6">
                      <div class="form-group">
                      <label for="towncity">Town / City</label>
                    <input type="text" class="form-control" name="city" value="{{ Auth::user()->city }}" placeholder="">
                  </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="postcodezip">Postcode / ZIP *</label>
                    <input type="text" class="form-control" name="pincode" value="{{ Auth::user()->pincode }}" placeholder="">
                  </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="col-md-6">
                  <div class="form-group">
                      <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" value="{{ Auth::user()->phone }}" placeholder="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="emailaddress">Email Address</label>
                    <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}" placeholder="">
                  </div>
              </div>
              <div class="w-100"></div>
              <div class="col-md-12 mt-5">
                <h3 class="billing-heading mb-4">Order Details</h3>
                <div class="cart-list">
                   
                    <table class="table">
                        <thead class="thead-primary">
                          <tr class="text-center">
                           
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                           
                            
                          </tr>
                        </thead>
                        <tbody>

                            @foreach ($cartitems as $cart_item)
                            <tr class="text-center">
                                <td class="product-name">{{ $cart_item->products->name }} </td>         
                                <td class="qty">{{ $cart_item->prod_qty }}  </td>                                                          
                                
                                <td class="total">${{ $cart_item->products->selling_price *  $cart_item->prod_qty }} </td>
                            </tr><!-- END TR-->                         
                                                  
                            @endforeach                                                        
                                                          
                        </tbody>
                      </table>
                  </div>


              </div>
              </div>

                <div class="row mt-5 pt-3 d-flex">
                    <div class="col-md-6 d-flex">
                        <div class="cart-detail cart-total bg-light p-3 p-md-4">
                            <h3 class="billing-heading mb-4">Cart Total</h3>
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
                    </div>
                    <div class="col-md-6">
                        <div class="cart-detail bg-light p-3 p-md-4">
                            <h3 class="billing-heading mb-4">Payment Method</h3>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" class="mr-2"> Direct Bank Tranfer</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" class="mr-2"> Check Payment</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
                                    </div>
                                </div>
                            </div>
                            <p><button type="submit" class="btn btn-primary py-3 px-4">Place an order</button></p>
                        </div>
                    </div>
                </div>
            </form><!-- END -->
        </div> <!-- .col-md-8 -->
      </div>
    </div>
  </section> <!-- .section -->
      

@endsection