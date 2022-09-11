@extends('layouts.admin')

@section('contents')
<!-- Page-header start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">Dashboard</h5>
                    <p class="m-b-0">Welcome to Mega Able</p>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="index.html"> <i class="fa fa-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Dashboard</a>
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
              <!-- Page-body start -->
              <div class="page-body ">
                  <div class="row">
                     

                      <!--  project and team member start -->
                      <div class="col-xl-12 col-md-12">
                          <div class="card table-card">
                            
                              <div class="card-block">
                                  <div class="table-responsive">
                                      <table class="table table-hover">
                                          <thead>
                                          <tr>
                                              <th>
                                                  <div class="chk-option">
                                                      <div class="checkbox-fade fade-in-primary">
                                                          <label class="check-task">
                                                              <input type="checkbox" value="">
                                                              <span class="cr">
                                                                      <i class="cr-icon fa fa-check txt-default"></i>
                                                                  </span>
                                                          </label>
                                                      </div>
                                                  </div>
                                                  All Categories</th>
                                              <th>Name</th>
                                              <th>Date</th>
                                              <th>Status</th>
                                              <th class="text-right">Action</th>
                                          </tr>
                                          </thead>
                                          <tbody>
                                            @foreach ($categories as $category)
                                                <tr>
                                                    <td>
                                                        <div class="chk-option">
                                                            <div class="checkbox-fade fade-in-primary">
                                                                <label class="check-task">
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr">
                                                                        <i class="cr-icon fa fa-check txt-default"></i>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="d-inline-block align-middle">
                                                            <img src="{{asset('uploads/category/'.$category->image)}}" alt="{{$category->name}}" class="img-radius img-40 align-top m-r-15">
                                                            <div class="d-inline-block">
                                                                <h6>{{$category->name}}</h6>
                                                                <p class="text-muted m-b-0">{{$category->description}}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{$category->name}}</td>
                                                    <td>{{$category->created_at->format('Y-m-d')}}</td>
                                                    <td>
                                                        {{$category->status == '1' ? 'Active':'Disabled'}}
                                                    </td>
                                                    <td class="text-right"><label class="label label-warning">Edit</label></td>
                                                    <td><label class="label label-danger">Delete</label></td>
                                                </tr>
                                            @endforeach                                               
                                        
                                          </tbody>
                                      </table>
                                      <div class="text-right m-r-20">
                                          <a href="#!" class=" b-b-primary text-primary">View all Projects</a>
                                      </div>
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