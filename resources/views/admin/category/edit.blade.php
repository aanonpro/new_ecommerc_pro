@extends('layouts.admin')
@section('title','Edit Category')
@section('contents')

   <!-- Page-header start -->
   <div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">Edit Category Form</h5>
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
                                <h5>Edit Category</h5>
                            </div>
                            <div class="card-block">
                                <form class="form-material" action="{{ route('categories.update',$category->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                        <div class="row">                                        
                                            <div class="col-sm-6">
                                                <h4 class="sub-title">Fields Inputs</h4>                                                
                                                <div class="form-group form-info">
                                                    <input type="text" name="name" class="form-control" value="{{ $category->name }}"  required="">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Name <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="form-group form-info">
                                                    <input type="text" name="slug" class="form-control" value="{{ $category->slug }}" required="">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Slug <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="form-group form-info">
                                                    <textarea class="form-control" name="description" required="">{{ $category->description }}</textarea>
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Description <span class="text-danger">*</span></label>
                                                </div>
                                                
                                                <div class="form-group form-info ">
                                                    <select name="status" class="form-control"  required="">
                                                        <option value="1" {{$category->status =='1' ? 'selected':''}}>Active</option>
                                                        <option value="0" {{$category->status =='0' ? 'selected':''}}>Disabled</option>
                                                    </select>
                                                </div>    
                                                <div class="form-group form-info">
                                                    <input type="file" name="image" class="form-control" >
                                                    <span class="form-bar"></span>
                                                    <img src="/image/{{ $category->image }}" width="100px">
                                                </div>                                     
                                            </div>
                                            <div class="col-sm-6 mobile-inputs">
                                                <h4 class="sub-title">SEO Tag</h4>
                                                <div class="chk-option mb-4 sub-title">
                                                    <div class="checkbox-fade fade-in-primary">
                                                        <label class="check-task ">
                                                            <input type="checkbox" name="popular" {{ $category->popular == '1' ? 'checked': '' }}>
                                                            <span class="cr">
                                                                    <i class="cr-icon fa fa-check txt-default"></i>
                                                                </span>
                                                                Popular
                                                        </label>                                                        
                                                    </div>
                                                </div>                                                
                                                <div class="form-group form-info">
                                                    <input type="text" name="meta_title" class="form-control" value="{{$category->meta_title}}"  required="">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Meta Title</label>
                                                </div>
                                                <div class="form-group form-info">
                                                    <textarea class="form-control" name="meta_description" required="">{{ $category->meta_description }}</textarea>
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Meta Description</label>
                                                </div>
                                                <div class="form-group form-info">
                                                    <textarea class="form-control" name="meta_keywords" required="" >{{ $category->meta_keywords }}</textarea>
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Meta Keywords</label>
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
