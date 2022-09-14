@extends('frontend.master')

@section('content')


<div class="hero-wrap hero-bread"  style="background-image: url('images/bg_6.jpg'); height: 20% !important;">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home</a></span> <span>Shop</span></p>
          <h1 class="mb-0 bread">all Categories</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section bg-light">

    <div class="container">
        <div class="row">
          @foreach ($categories as $cate_item)
              <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                  <div class="product d-flex flex-column">
                      <a href="" class="img-prod"><img class="img-fluid" src="{{asset('image/'.$cate_item->image)}}" alt="Colorlib Template">
                          {{-- <span class="status">50% Off</span> --}}
                          <div class="overlay"></div>
                      </a>
                      <div class="text  px-3">

                          <p class="bottom-area d-flex px-3">
                              <a href="#" class="add-to-cart text-center py-2 mr-1"><span>{{$cate_item->name}} </span></a>
                          </p>
                      </div>
                  </div>
              </div>
          @endforeach

        </div>
    </div>
  </section>

  @endsection
