@extends('layouts.admin')
@section('title', 'View Products')
@section('contents')
<!-- Page-header start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">Users View Lists</h5>
                    <p class="m-b-0">users has been login</p>
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
                                      <table class="table table-hover ">
                                          <thead style="background: #4A5F68">
                                            <tr class="text-white">
                                               
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Action</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @forelse ($users as $user)
                                                <tr>
                                                   
                                                    <td>{{$user->id}}</td>
                                                    <td>{{$user->name . ' ' . $user->lname}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->phone}} </td>
                                                    
                                                    <td>
                                                        <a class="btn btn-mat btn-sm waves-effect waves-light btn-info" href="{{ url('view-users/'.$user->id) }}">View</a>
                                                        {{-- <button type="submit" class="btn btn-mat btn-sm waves-effect waves-light btn-danger">Delete</button> --}}

                                                    </td>
                                                </tr>
                                            @empty
                                            <tr>
                                                <td colspan="5" class="text-center text-danger">

                                                    <div class="d-inline-block align-middle">
                                                        <h4>No Products added</h4>
                                                    </div>
                                                </td>

                                            </tr>
                                            @endforelse

                                          </tbody>
                                      </table>

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
