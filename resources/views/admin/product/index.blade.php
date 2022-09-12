@extends('layouts.admin')
@section('title', 'View Products')
@section('contents')
<!-- Page-header start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">Products View Lists</h5>
                    <p class="m-b-0">Welcome to Categories page</p>
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
                                                    All Products</th>
                                                <th>Name</th>
                                                <th>category</th>
                                                <th>Qty</th>
                                                <th>Original Price</th>
                                                <th>Selling Price</th>
                                                <th>Tax</th>
                                                <th>Trending</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @forelse ($products as $product)
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
                                                            <img src="{{asset('product/'.$product->image)}}" alt="{{$product->name}}" class="img-radius img-40 align-top m-r-15">
                                                            <div class="d-inline-block">
                                                                <h6>{{$product->name}}</h6>
                                                                <p class="text-muted m-b-0">{{$product->description}}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{$product->name}}</td>
                                                    <td>{{$product->category->name}}</td>
                                                    <td>{{$product->quantity}}</td>
                                                    <td>{{$product->original_price}} $</td>
                                                    <td>{{$product->selling_price}} $</td>
                                                    <td>{{$product->tax}} $</td>
                                                    <td>{{$product->trending=='1' ? 'Enabled' : 'Disabled'}}</td>
                                                    <td>
                                                        {{$product->status == '1' ? 'Active':'Disabled'}}
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                                                            <a class="btn btn-mat btn-sm waves-effect waves-light btn-info" href="{{ route('products.edit',$product->id) }}">Edit</a>

                                                            @csrf
                                                            @method('DELETE')

                                                            <button type="submit" class="btn btn-mat btn-sm waves-effect waves-light btn-danger">Delete</button>

                                                        </form>
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
