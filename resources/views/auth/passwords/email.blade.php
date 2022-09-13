@extends('frontend.master')

@section('content')

   
<div class="hero-wrap hero-bread " >
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="#!">Email</a></span> <span>Check</span></p>
          <h1 class="mb-0 bread">Email</h1>
        </div>
      </div>
      <section class="ftco-section ">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-md-8">
                    {{-- <div class="card">
                        <div class="card-header">{{ __('Reset Password') }}</div> --}}
    
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
    
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
    
                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
    
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Send Password Reset Link') }}
                                        </button>
                                    </div>
                                </div>
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
