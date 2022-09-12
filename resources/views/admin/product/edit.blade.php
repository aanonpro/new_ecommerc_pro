@extends('layouts.admin')

@section('title', 'Edit-Product')
 
@section('contents')

   <!-- Page-header start -->
   <div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">Edit Product Form</h5>
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
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Add Prouucts</h5>
                            </div>
                            <div class="card-block">
                                <form class="form-material" action="{{ route('products.update',$product->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                    <div class="row">
                                    
                                        <div class="col-sm-6">
                                            <h4 class="sub-title">Fields Inputs</h4>
                                            <div class="form-group form-info ">
                                                <select name="category_id" class="form-control"  required="">
                                                    <option value="0">--- Category ---</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{$category->id}}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                                            {{$category->name}}
                                                        </option>
                                                    @endforeach   
                                                </select>
                                            </div>     
                                            <div class="form-group form-info">
                                                <input type="text" name="name" class="form-control" value="{{$product->name}}" required="">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Name <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="form-group form-info">
                                                <input type="text" name="slug" class="form-control" value="{{$product->slug}}" required="">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Slug <span class="text-danger">*</span></label>
                                            </div>
                                            
                                            
                                            <div class="row ">
                                                <div class="col-sm-6">
                                                    <div class="form-group form-info">
                                                        <input type="number" name="original_price" value="{{$product->original_price}}" class="form-control" required="">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Original Price <span class="text-danger">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mobile-inputs">
                                                    <div class="form-group form-info">
                                                        <input type="number" name="selling_price" class="form-control" value="{{$product->selling_price}}" required="">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Selling Price <span class="text-danger">*</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-sm-6">
                                                    <div class="form-group form-info">
                                                        <input type="number" name="quantity" class="form-control" value="{{$product->quantity}}" required="">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Quantity <span class="text-danger">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mobile-inputs">
                                                    <div class="form-group form-info">
                                                        <input type="number" name="tax" class="form-control" value="{{$product->tax}}" required="">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Tax <span class="text-danger">*</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-sm-6">
                                                    <div class="form-group form-info sub-title mt-1">
                                                        <div class="checkbox-fade fade-in-primary ">
                                                            <label class="check-task ">
                                                                <input type="checkbox" name="trending" {{ $product->trending == '1' ? 'checked': '' }} >
                                                                <span class="cr">
                                                                        <i class="cr-icon fa fa-check txt-default"></i>
                                                                    </span>
                                                                    Trending
                                                            </label>                                                    
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group form-info sub-title mt-1">
                                                        <div class="checkbox-fade fade-in-primary ">
                                                            <label class="check-task ">
                                                                <input type="checkbox" name="status" {{ $product->status == '1' ? 'checked': '' }}>
                                                                <span class="cr">
                                                                        <i class="cr-icon fa fa-check txt-default"></i>
                                                                    </span>
                                                                    Status
                                                            </label>                                                    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-info">
                                                <textarea class="form-control" name="description" required="">{{$product->description}}</textarea>
                                                <span class="form-bar"></span>
                                                <label class="float-label">Description <span class="text-danger">*</span></label>
                                            </div>                                   
                                        </div>
                                        <div class="col-sm-6 mobile-inputs">
                                            <h4 class="sub-title">SEO Tag</h4>
                                           
                                            <div class="form-group form-info">
                                                <input type="text" name="meta_title" class="form-control" value="{{$product->meta_title}}" required="">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Meta Title</label>
                                            </div>
                                            <div class="form-group form-info">
                                                <textarea class="form-control" name="meta_description" required="">{{$product->meta_description}}</textarea>
                                                <span class="form-bar"></span>
                                                <label class="float-label">Meta Description</label>
                                            </div>
                                            <div class="form-group form-info">
                                                <textarea class="form-control" name="meta_keywords" required="" >{{$product->meta_keywords}}</textarea>
                                                <span class="form-bar"></span>
                                                <label class="float-label">Meta Keywords</label>
                                            </div>   
                                            <div class="form-group form-info">
                                                <input type="file" name="image" class="form-control" >
                                                <span class="form-bar"></span>
                                                <img src="/product/{{ $product->image }}" width="100px">
                                            </div>   
                                            <button type="submit" class="btn btn-mat waves-effect waves-light btn-info mt-3">Update</button>                                                               
                                        </div>
                                    
                                    </div>
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
