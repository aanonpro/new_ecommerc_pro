@extends('frontend.master')

{{-- @section('title',"$categories->name") --}}

@section('content')


<div class="hero-wrap hero-bread"  style="background-image: url('images/bg_6.jpg'); height: 20% !important;">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home</a></span> <span>Shop</span></p>
           
                <h1 class="mb-0 bread">All Products</h1>
          
          
        </div>
      </div>
    </div>
  </div>


  <section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 order-md-last">
                         
                    <div class="row">
                        @forelse ($products as $product)     
                            <div class="col-sm-12 col-md-12 col-lg-3 ftco-animate d-flex">
                                <div class="product d-flex flex-column">
                                    <a href="{{url('category/'.$product->category->slug.'/product/'.$product->slug)}}" class="img-prod"><img class="img-fluid" src="{{asset('product/'.$product->image)}}" alt="Colorlib Template">
                                        @php
                                            $results = ($product->original_price - $product->selling_price) * 100  / $product->original_price ;
                                        @endphp
                                        <span class="status">{{ number_format($results)}}% Off</span>                                           
                                                                         
                                        <div class="overlay"></div>
                                    </a>
                                    <div class="text py-3 pb-4 px-3">
                                        <div class="d-flex">
                                            <div class="cat">
                                                <span>{{$product->category->name}}</span>
                                            </div>
                                            <div class="rating">
                                                <p class="text-right mb-0">
                                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                </p>
                                            </div>
                                        </div>
                                        <h3><a href="#">{{$product->name}}</a></h3>
                                        <div class="pricing">
                                            <p class="price">
                                                <span>${{$product->selling_price}}</span>
                                                <span class="float-right"> <s>${{$product->original_price}}</s></span>
                                            </p>

                                        </div>
                                        <p class="bottom-area d-flex px-3">
                                            <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
                                            <a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                         @empty
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <h4>No Products show</h4>
                                </div>
                            </div>
                        @endforelse 
                    </div>
                    
                    <div class="row mt-5">
                        <div class="col text-center">
                            <div class="block-27">
                            <ul>
                                <li><a href="#">&lt;</a></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                              
                                <li><a href="#">&gt;</a></li>
                            </ul>
                            </div>
                        </div>
                    </div>
                   
                    
             
            </div>

      
            </div>
{{-- 
            </div>
            </div> --}}
        </div>
    </div>
</section>

@endsection
