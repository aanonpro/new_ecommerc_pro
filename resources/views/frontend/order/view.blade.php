@extends('frontend.master')

@section('content')


<div class="hero-wrap hero-bread" >
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home</a></span> <span>Shipping</span></p>
          <h1 class="mb-0 bread">Shipping Details</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section">
    <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 d-flex">
                    <div class="cart-detail cart-total bg-light p-3 p-md-4">
                        <h3 class="billing-heading mb-4">Shipping Details</h3>
                        <p class="d-flex">
                            <span>Username :</span>
                            <span>{{ $orders->fname .' '. $orders->lname }}</span>
                        </p>
                        <p class="d-flex">
                            <span>Email :</span>
                            <span>{{$orders->email}}</span>
                        </p>
                        <p class="d-flex">
                            <span>Phone :</span>
                            <span>{{$orders->phone}}</span>
                        </p>
                        <p class="d-flex">
                            <span>Shipping Address :</span>
                            <span>{{$orders->address1}} </span>                            
                        </p>
                        <p class="d-flex">
                            <span></span>
                            <span>{{$orders->address2}} ,</span>
                        </p>
                        <p class="d-flex">
                            <span></span>
                            <span>{{$orders->city}} ,</span>
                        </p>
                        <p class="d-flex">
                            <span></span>
                            <span>{{$orders->state}} ,</span>
                        </p>
                        <p class="d-flex">
                            <span></span>
                            <span>{{$orders->country}}</span>
                        </p>
                        <p class="d-flex">
                            <span>Post Code * :</span>
                            <span>{{$orders->pincode}}</span>
                        </p>

                        <hr>
                        {{-- <p class="d-flex total-price">
                            <span>Total</span>
                            <span>${{$orders->total_price}}</span>
                        </p> --}}
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="cart-detail cart-total bg-light p-3 p-md-4">
                        <h3 class="billing-heading mb-4">Order Details</h3>
                        <p class="d-flex " style="font-weight: bold;">
                            <span>Name </span>
                            <span>Qty</span>
                            <span>Price</span>
                            <span>Image</span>
                        </p>
                        @foreach ($orders->orderitems as $item)
                            <p class="d-flex">
                            
                                    <span>{{$item->products->name}}</span>
                                    <span>{{$item->qty}}</span>
                                    <span>{{$item->price}}</span>
                                    <span>
                                        <img src="{{asset('product/'.$item->products->image)}}" width="30px;" alt="">    
                                    </span>
                            
                            </p>
                        @endforeach
                                                  
                        <hr>
                        <p class="d-flex total-price">
                            <span>Grand Total</span>
                            <span>${{$orders->total_price}}</span>
                        </p>
                    </div>
                </div>
                {{-- <div class="col-md-6">
                    <div class="cart-detail bg-light p-3 p-md-4">
                        <h3 class="billing-heading mb-4 align-items-center justify-content-center">Payment Method</h3>
                    
                            <table class="table" >
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th class="px-5">Qty</th>
                                        <th class="px-5">Price</th>
                                        <th>Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders->orderitems as $item)
                                        <tr>
                                            <td>{{$item->products->name}}</td>
                                        </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                      
                    </div>
                </div> --}}
            </div>
      
    </div>
  </section> <!-- .section -->
      
@endsection