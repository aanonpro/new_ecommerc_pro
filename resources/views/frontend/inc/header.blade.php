<div class="py-1 bg-black">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                        <span class="text">+ 855 92 414 786</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                        <span class="text">anonphin.pro@gmail.com</span>
                    </div>
                    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                        <span class="text">welcome to our ecommerce online</span>
                    </div>
                </div>
            </div>
        </div>
      </div>
</div>
@php
    $wishlists = App\Models\Wishlist::count();
    $carts = App\Models\Cart::count();
@endphp

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}">Minishop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item  {{ Request::is('/') ? 'cta cta-colored  active':'' }}"><a href="{{url('/')}}" class="nav-link cta">Home</a></li>
          <li class="nav-item {{ Request::is('all-categories') ? 'cta cta-colored  active':'' }}"><a href="{{url('/all-categories')}}" class="nav-link">Categories</a></li>
          <li class="nav-item {{ Request::is('shop') ? 'cta cta-colored  active':'' }}"><a href="{{url('shop')}}" class="nav-link">Shop</a></li>
          <li class="nav-item  {{ Request::is('contacts') ? 'cta cta-colored  active':'' }}"><a href="{{url('contacts')}}" class="nav-link">Contact</a></li>

          @guest
            @if (Route::has('login'))
                <li class="nav-item {{ Request::is('login') ? 'cta cta-colored  active':'' }}">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item {{ Request::is('register') ? 'cta cta-colored  active':'' }}">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
          @else
          <li class="nav-item  {{ Request::is('cart') ? 'cta cta-colored  active':'' }}"><a href="{{url('cart')}}" class="nav-link"><span class="icon-shopping_cart"></span>[{{$carts}}]</a></li>
          <li class="nav-item  {{ Request::is('wishlist') ? 'cta cta-colored  active':'' }}"><a href="{{url('wishlist')}}" class="nav-link"><span class="icon-heart"></span>[{{ $wishlists }}]</a></li>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{url('my-orders')}}">My Orders</a>
                  <hr style="border-bottom: 1px solid rgb(107, 101, 101);">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>


                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
          @endguest

          {{-- <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li> --}}

        </ul>
      </div>
    </div>
  </nav>
<!-- END nav -->
