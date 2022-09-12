@extends('layouts.admin')
@section('title','Add Category')
@section('contents')

   <!-- Page-header start -->
   <div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">Add Category Form</h5>
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
                                <h5>Add Category</h5>
                            </div>
                            <div class="card-block">
                                <form class="form-material" action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                    <div class="row">
                                    
                                        <div class="col-sm-6">
                                            <h4 class="sub-title">Fields Inputs</h4>
                                            
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
                                            <div class="form-group form-info">
                                                <textarea class="form-control" name="description" required=""></textarea>
                                                <span class="form-bar"></span>
                                                <label class="float-label">Description <span class="text-danger">*</span></label>
                                            </div>
                                            {{-- <div class="row ">
                                                <div class="col-sm-6"> --}}
                                          
                                            <div class="form-group form-info ">
                                                <select name="status" class="form-control"  required="">
                                                    <option value="0">--- Select Status ---</option>
                                                    <option value="1">Active</option>
                                                    <option value="0">Disabled</option>
                                                </select>
                                            </div>        
                                            <div class="form-group form-info">
                                                <input type="file" name="image" class="form-control" required="">
                                                <span class="form-bar"></span>
                                            </div>                                    
                                                    {{-- </div> --}}
                                                    {{-- <div class="col-sm-6 mobile-inputs"> --}}
                                                        {{-- <div class="form-group form-info ">
                                                            <select name="popular" class="form-control"  required="">
                                                                <option value="0">--- Select Type ---</option>
                                                                <option value="1">Popular</option>
                                                                <option value="0">General</option>
                                                            </select>
                                                        </div> --}}
                                                    {{-- </div> --}}
                                                {{-- </div> --}}                                       
                                        </div>
                                        <div class="col-sm-6 mobile-inputs">
                                            <h4 class="sub-title">SEO Tag</h4>
                                            <div class="chk-option mb-4 sub-title">
                                                <div class="checkbox-fade fade-in-primary">
                                                    <label class="check-task ">
                                                        <input type="checkbox" name="popular" >
                                                        <span class="cr">
                                                                <i class="cr-icon fa fa-check txt-default"></i>
                                                            </span>
                                                            Popular
                                                    </label>
                                                    
                                                </div>
                                            </div> 
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
                                            <button type="submit" class="btn btn-mat waves-effect waves-light btn-info mt-3">Save</button>                                                               
                                        </div>
                                    
                                    </div>
                                </form>
                                {{-- <form class="form-material" action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group form-info">
                                        <input type="text" name="name" class="form-control" autofocus required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Name</label>
                                    </div>
                                    <div class="form-group form-info">
                                        <input type="text" name="slug" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Slug</label>
                                    </div>
                                    <div class="form-group form-info">
                                        <textarea class="form-control" name="description" required=""></textarea>
                                        <span class="form-bar"></span>
                                        <label class="float-label">Description</label>
                                    </div>

                                    <div class="row ">
                                        <div class="col-sm-6">
                                            <div class="form-group form-info ">
                                                <select name="status" class="form-control"  required="">
                                                    <option value="0">--- Select Status ---</option>
                                                    <option value="1">Active</option>
                                                    <option value="0">Disabled</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mobile-inputs">
                                            <div class="form-group form-info ">
                                                <select name="popular" class="form-control"  required="">
                                                    <option value="0">--- Select Type ---</option>
                                                    <option value="1">Popular</option>
                                                    <option value="0">General</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

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
                                        <textarea class="form-control" name="meta_keywords" required=""></textarea>
                                        <span class="form-bar"></span>
                                        <label class="float-label">Meta Keywords</label>
                                    </div>
                                    <div class="form-group form-info">
                                        <input type="file" name="image" class="form-control" required="">
                                        <span class="form-bar"></span>
                                    </div>

                                    <button type="submit" class="btn btn-mat waves-effect waves-light btn-info mt-3">Save</button>
                                </form> --}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
