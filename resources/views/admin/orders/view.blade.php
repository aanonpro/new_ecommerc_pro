@extends('layouts.admin')
@section('title', 'view orders')
@section('contents')

   <!-- Page-header start -->
   <div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">Shipping Details</h5>
                    <p class="m-b-0">Please fill out all this form</p>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="index.html"> <i class="fa fa-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Form Components</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Basic Form Inputs</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page-header end -->
<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">

            <!-- Page body start -->
            <div class="page-body">
                                
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Shipping Details</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                        <li><i class="fa fa-refresh reload-card"></i></li>
                                        <li><i class="fa fa-trash close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-block" style="margin-left: 30px;">
                                <div class="form-group row">
                                    <label class="col-sm-3 ">Username : </label>
                                    <div class="col-sm-9">
                                        {{ $orders->fname .' '. $orders->lname }}                                      
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 ">Email : </label>
                                    <div class="col-sm-9">
                                        {{$orders->email}}                                   
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 ">Phone Numbers : </label>
                                    <div class="col-sm-9">
                                        {{$orders->phone}}                                
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 ">Shipping Address : </label>
                                    <div class="col-sm-9">
                                        {{$orders->address1}} , {{$orders->address2}}                                
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 "> </label>
                                    <div class="col-sm-9">
                                        {{$orders->city}}, {{$orders->state}}                               
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 "> </label>
                                    <div class="col-sm-9">
                                        {{$orders->country}}                               
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 ">Post Code : </label>
                                    <div class="col-sm-9">
                                        {{$orders->pincode}}                               
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-3 ">Tracking Number * : </label>
                                    <div class="col-sm-9">
                                        {{$orders->tracking_no}}                               
                                    </div>
                                </div>
                                
                                <hr>
                                <div class="form-group row">
                                    <label class="col-sm-3 "> Totals</label>
                                    <div class="col-sm-9">
                                        ${{$orders->total_price}}                      
                                    </div>
                                </div>                          
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Order Details</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                        <li><i class="fa fa-refresh reload-card"></i></li>
                                        <li><i class="fa fa-trash close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-block table-border-style">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Quantity </th>
                                                <th>Price</th>
                                                <th>Image</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders->orderitems as $item)
                                            <tr>
                                                <th scope="row">{{ $item->products->name }}</th>
                                                <td>{{ $item->qty }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td>
                                                    <img src="{{asset('product/'.$item->products->image)}}" width="50px;" alt="">    
                                                </td>
                                               
                                            </tr>
                                            
                                            @endforeach
                                           
                                        </tbody>
                                    </table>
                                    <hr>
                                    <h5>  Grand Totals: ${{ $orders->total_price }}</h5>
                                </div>                              
                            </div>

                            <div class="form-group px-4 col-md-6 form-info mt-4">
                               <h6>Order Status</h6>
                               <form action="{{url('update-order/'.$orders->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <select name="order_status" class="form-control"  required="">
                                        <option {{ $orders->status == '1' ? 'selected' : '' }} value="1">Pending</option>
                                        <option {{ $orders->status == '0' ? 'selected' : '' }} value="0">Completed</option>
                                    </select>                               
                                    <button type="submit" class="btn btn-mat btn-sm waves-effect waves-light btn-info mt-4 float-right">Update</button>
                                </form>
                            </div> 

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

      

@endsection