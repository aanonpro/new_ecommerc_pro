@extends('layouts.admin')
@section('title', 'view orders')
@section('contents')

   <!-- Page-header start -->
   <div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">Users Details</h5>
                    <p class="m-b-0">View details user</p>
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
                    <div class="col-md-12">
                        <a class="btn btn-mat btn-sm waves-effect waves-light btn-danger mb-4" href="{{url('users')}}">Back to users</a>
                        <div class="card">
                            <div class="card-header">
                                <h5>Users Details</h5>
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
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card-block" style="margin-left: 200px;">
                                        <div class="form-group row">
                                            <label class="col-sm-5 ">Role : </label>
                                            <div class="col-sm-7">
                                                {{ $users->role_as == '0' ? 'User':'Admin'}}                                      
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 ">First Name : </label>
                                            <div class="col-sm-7">
                                                {{ $users->name}}                                      
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 ">Last Name : </label>
                                            <div class="col-sm-7">
                                                {{$users->lname}}                                   
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 ">Email : </label>
                                            <div class="col-sm-7">
                                                {{$users->email}}                                
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 ">Phone : </label>
                                            <div class="col-sm-7">
                                                {{$users->phone}}                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-block" >
                                        <div class="form-group row">
                                            <label class="col-sm-4 ">Address1 : </label>
                                            <div class="col-sm-8">
                                                {{ $users->address1}}                                      
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 ">Address2 : </label>
                                            <div class="col-sm-8">
                                                {{ $users->address2}}                                      
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 ">City : </label>
                                            <div class="col-sm-8">
                                                {{$users->city}}                                   
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 ">State : </label>
                                            <div class="col-sm-8">
                                                {{$users->state}}                                
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 ">Country : </label>
                                            <div class="col-sm-8">
                                                {{$users->country}}                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 ">Post Code* : </label>
                                            <div class="col-sm-8">
                                                {{$users->pincode}}                               
                                            </div>
                                        </div>                                                  
                                    </div>   
                                    <hr>                                
                                </div>                                                             
                            </div>                                                
                        </div>                    
                    </div>                  
                </div>
            </div>
        </div>
    </div>
</div>

      

@endsection