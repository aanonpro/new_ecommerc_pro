@extends('layouts.admin')

@section('title', 'Add-Product')
 
@section('contents')

   <!-- Page-header start -->
   <div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">Add Product Form</h5>
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Add Prouucts</h5>
                            </div>
                            <div class="card-block">
                                <form class="form-material" action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                    <div class="row">
                                    
                                        <div class="col-sm-6">
                                            <h4 class="sub-title">Fields Inputs</h4>
                                            <div class="form-group form-info ">
                                                <select name="category_id" class="form-control"  required="">
                                                    <option value="0">--- Category ---</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach   
                                                </select>
                                            </div>     
                                            <div class="form-group form-info">
                                                <input type="text" name="name" class="form-control"  autofocus required="">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Name <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="form-group form-info">
                                                <input type="text" name="slug" class="form-control" required="">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Slug <span class="text-danger">*</span></label>
                                            </div>
                                            
                                            
                                            <div class="row ">
                                                <div class="col-sm-6">
                                                    <div class="form-group form-info">
                                                        <input type="number" name="original_price" class="form-control" required="">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Original Price <span class="text-danger">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mobile-inputs">
                                                    <div class="form-group form-info">
                                                        <input type="number" name="selling_price" class="form-control" required="">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Selling Price <span class="text-danger">*</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-sm-6">
                                                    <div class="form-group form-info">
                                                        <input type="number" name="quantity" class="form-control" required="">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Quantity <span class="text-danger">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mobile-inputs">
                                                    <div class="form-group form-info">
                                                        <input type="number" name="tax" class="form-control" required="">
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
                                                                <input type="checkbox" name="trending" >
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
                                                                <input type="checkbox" name="status" >
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
                                                <textarea class="form-control" name="description" required=""></textarea>
                                                <span class="form-bar"></span>
                                                <label class="float-label">Description <span class="text-danger">*</span></label>
                                            </div>                                   
                                        </div>
                                        <div class="col-sm-6 mobile-inputs">
                                            <h4 class="sub-title">SEO Tag</h4>
                                           
                                            <div class="form-group form-info">
                                                <input type="text" name="meta_title" class="form-control" required="">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Meta Title</label>
                                            </div>
                                            <div class="form-group form-info">
                                                <textarea class="form-control" name="meta_description" required=""></textarea>
                                                <span class="form-bar"></span>
                                                <label class="float-label">Meta Description</label>
                                            </div>
                                            <div class="form-group form-info">
                                                <textarea class="form-control" name="meta_keywords" required="" ></textarea>
                                                <span class="form-bar"></span>
                                                <label class="float-label">Meta Keywords</label>
                                            </div>   
                                            <div class="form-group form-info">
                                                <input type="file" name="image" class="form-control" required="">
                                                <span class="form-bar"></span>
                                            </div>   
                                            <button type="submit" class="btn btn-mat waves-effect waves-light btn-info mt-3">Save</button>                                                               
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
