<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu  " >
        <div class="">
            <div class="main-menu-header">
                <img class="img-80 img-radius" src="{{ asset('admin/assets/images/avatar-4.jpg')}}" alt="User-Profile-Image">
                <div class="user-details">
                    <span id="more-details"> {{ Auth::user()->name }}<i class="fa fa-caret-down"></i></span>
                </div>
            </div>

            <div class="main-menu-content">
                <ul>
                    <li class="more-details">
                        <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                        <a href="#!"><i class="ti-settings"></i>Settings</a>
                        <a  href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="ti-layout-sidebar-left"></i>
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <div class="p-15 p-b-0">
            
        </div>
        <ul class="pcoded-item pcoded-left-item ">
            <li class="{{ (request()->is('dashboard')) ? 'active' : '' }}">
                <a href="{{url('dashboard')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>

        <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Categories</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ (request()->is('categories')) ? 'active' : '' }}">
                <a href="{{route('categories.index')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Categories List</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ (request()->is('categories/create')) ? 'active' : '' }}">
                <a href="{{route('categories.create')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Categories Add</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>    
        <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Products</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ (request()->is('products')) ? 'active' : '' }}">
                <a href="{{route('products.index')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Products List</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ (request()->is('products/create')) ? 'active' : '' }}">
                <a href="{{route('products.create')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Product Add</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>     
        <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Table Lists</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ (request()->is('orders')) ? 'active' : '' }}">
                <a href="{{url('orders')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Orders</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ (request()->is('users')) ? 'active' : '' }}">
                <a href="{{url('users')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Users</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>     
    </div>
</nav>
