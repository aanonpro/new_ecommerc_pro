<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes" />

    {{-- link templates  --}}
    <link rel="icon" href="{{ asset('admin/assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/bootstrap/css/bootstrap.min.css')}}">
    <!-- waves.css -->
    {{-- <link rel="stylesheet" href="{{ asset('admin/assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all"> --}}
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/icon/themify-icons/themify-icons.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/icon/font-awesome/css/font-awesome.min.css')}}">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/jquery.mCustomScrollbar.css')}}">
    <!-- am chart export.css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/style.css')}}">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>
<body>

     <!-- Pre-loader start -->
<div class="theme-loader">
    <div class="loader-track">
        <div class="preloader-wrapper">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
          
            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
          
            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        @include('layouts.inc.adminsidebar')

        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">

                @include('layouts.inc.adminnavbar')

                <div class="pcoded-content">
                  
                    @yield('contents')

                </div>

            </div>
        </div>

    </div>
</div>
   

     <!-- Required Jquery -->
     <script type="text/javascript" src="{{ asset('admin/assets/js/jquery/jquery.min.js')}}"></script>
     <script type="text/javascript" src="{{ asset('admin/assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
     <script type="text/javascript" src="{{ asset('admin/assets/js/popper.js/popper.min.js')}}"></script>
     <script type="text/javascript" src="{{ asset('admin/assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
     <script type="text/javascript" src="{{ asset('admin/assets/pages/widget/excanvas.js')}}"></script>
     <!-- waves js -->
     <script src="{{ asset('admin/assets/pages/waves/js/waves.min.js')}}"></script>
     <!-- jquery slimscroll js -->
     <script type="text/javascript" src="{{ asset('admin/assets/js/jquery-slimscroll/jquery.slimscroll.js')}} "></script>
     <!-- modernizr js -->
     <script type="text/javascript" src="{{ asset('admin/assets/js/modernizr/modernizr.js')}} "></script>
     <!-- slimscroll js -->
     <script type="text/javascript" src="{{ asset('admin/assets/js/SmoothScroll.js')}}"></script>
     <script src="{{ asset('admin/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
     <!-- Chart js -->
     {{-- <script type="text/javascript" src="{{ asset('admin/assets/js/chart.js/Chart.js')}}"></script> --}}
     <!-- amchart js -->
     <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
     <script src="{{ asset('admin/assets/pages/widget/amchart/gauge.js')}}"></script>
     <script src="{{ asset('admin/assets/pages/widget/amchart/serial.js')}}"></script>
     <script src="{{ asset('admin/assets/pages/widget/amchart/light.js')}}"></script>
     <script src="{{ asset('admin/assets/pages/widget/amchart/pie.min.js')}}"></script>
     <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
     <!-- menu js -->
     <script src="{{ asset('admin/assets/js/pcoded.min.js')}}"></script>
     <script src="{{ asset('admin/assets/js/vertical-layout.min.js')}}"></script>
     <!-- custom js -->
     <script type="text/javascript" src="{{ asset('admin/assets/pages/dashboard/custom-dashboard.js')}}"></script>
     <script type="text/javascript" src="{{ asset('admin/assets/js/script.js')}}"></script>

     <script>
        $(document).ready(function(){
    
        var quantitiy=0;
           $('.quantity-right-plus').click(function(e){
                
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());
                
                // If is not undefined
                    
                    $('#quantity').val(quantity + 1);
    
                  
                    // Increment
                
            });
    
             $('.quantity-left-minus').click(function(e){
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());
                
                // If is not undefined
              
                    // Increment
                    if(quantity>0){
                    $('#quantity').val(quantity - 1);
                    }
            });
            
        });
    </script>
    
      {{-- sweetalert --}}
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

     @if(session('message'))
        <script>
            swal("Successfully!", "{{session('message')}}", "success");
        </script>
     @endif

</body>
</html>
