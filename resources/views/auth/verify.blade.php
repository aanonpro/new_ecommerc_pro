@extends('frontend.master')

@section('content')

   
<div class="hero-wrap hero-bread ">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="#!">Email</a></span> <span>Address</span></p>
          <h1 class="mb-0 bread">Verify</h1>
        </div>
      </div>
      <section class="ftco-section ">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-md-8">
                    {{-- <div class="card">
                        <div class="card-header">{{ __('Verify Your Email Address') }}</div> --}}
    
                        <div class="card-body">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                            @endif
    
                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            {{ __('If you did not receive the email') }},
                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                            </form>
                        {{-- </div>
                    </div> --}}
                </div>
            </div>
        </div>
      </section>
    </div>
  </div>


@endsection
