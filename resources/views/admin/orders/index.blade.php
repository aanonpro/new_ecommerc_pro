@extends('layouts.admin')
@section('title', 'Orders')
@section('contents')
<!-- Page-header start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">New Order Lists</h5>
                    <p class="m-b-0">Orders View Lists</p>
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
                        <a class="btn btn-mat btn-sm waves-effect waves-light btn-success mb-4" href="{{url('order-history')}}">Order Histroy</a>
                          <div class="card table-card">
                      

                              <div class="card-block">
                                  <div class="table-responsive">
                                  
                                      <table class="table table-hover ">
                                        
                                          <thead style="background: #4A5F68">
                                            <tr class="text-white">
                                                <th>Order Date</th>
                                                <th>Tracking Number</th>
                                                <th>Total Price</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @forelse ($orders as $order)
                                                <tr>
                                                    <td>{{ date('d-m-y', strtotime($order->created_at)) }}</td>
                                                    <td>{{$order->tracking_no}}</td>
                                                    <td>{{$order->total_price}}</td>
                                                    <td>{{$order->status=='1' ? 'pending' : 'completed'}}</td>
                                                   
                                                    <td>                                                      

                                                        <a class="btn btn-mat btn-sm waves-effect waves-light btn-info" href="{{ url('admin/view-order/'.$order->id) }}">View</a>
              
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
