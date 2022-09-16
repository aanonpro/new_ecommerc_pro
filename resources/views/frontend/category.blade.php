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

  <section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row no-gutters ftco-services">
          @foreach ($categories as  $cate_item)
            <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services p-4 py-md-5 ">
                <img src="{{asset('image/'. $cate_item->image)}}" style="width: 50px;" alt="">
                  {{-- <div class="icon d-flex justify-content-center align-items-center mb-4">
                      <span class="flaticon-bag"></span>
                  </div> --}}
                  <div class="media-body">
                    <a href="{{'category/'.$cate_item->slug}}">
                      <h3 class="heading">{{$cate_item->name}}</h3>
                    </a>
                  <p>{{$cate_item->description}}</p>
                  </div>
              </div>
            </div>
          @endforeach          
        </div>
    </div>
</section>


  {{-- <section class="ftco-section bg-light">

    <div class="container">
        <div class="row">
          @foreach ($categories as $cate_item)
              <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                  <div class="product d-flex flex-column">
                      <a href="" class="img-prod"><img class="img-fluid" src="{{asset('image/'.$cate_item->image)}}" alt="Colorlib Template">
                        
                          <div class="overlay"></div>
                      </a>
                      <div class="text  px-3">

                          <p class="bottom-area d-flex px-3">
                              <a href="#" class="add-to-cart text-center py-2 "><span>{{$cate_item->name}} </span></a>
                          </p>
                      </div>
                  </div>
              </div>
          @endforeach

        </div>
    </div>
  </section> --}}

  @endsection
