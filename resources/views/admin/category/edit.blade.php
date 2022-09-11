@extends('layouts.admin')

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
                                    <div class="form-group form-info">
                                        <input type="text" name="name" class="form-control" value="{{ $category->name }}"  required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Name</label>
                                    </div>
                                    <div class="form-group form-info">
                                        <input type="text" name="slug" class="form-control" value="{{ $category->slug }}" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Slug</label>
                                    </div>
                                    <div class="form-group form-info">
                                        <textarea class="form-control" name="description" required="">{{ $category->description }}</textarea>
                                        <span class="form-bar"></span>
                                        <label class="float-label">Description</label>
                                    </div>

                                    <div class="row ">
                                        <div class="col-sm-6">
                                            <div class="form-group form-info ">
                                                <select name="status" class="form-control"  required="">
                                                    <option value="0">--- Select Status ---</option>
                                                    <option value="1" {{$category->status =='1' ? 'selected':''}}>Active</option>
                                                    <option value="0" {{$category->status =='0' ? 'selected':''}}>Disabled</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mobile-inputs">
                                            <div class="form-group form-info ">
                                                <select name="popular" class="form-control"  required="">
                                                    <option value="0">--- Select Type ---</option>
                                                    <option value="1" {{$category->popular =='1' ? 'selected':''}}>Popular</option>
                                                    <option value="0" {{$category->popular =='0' ? 'selected':''}}>General</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-info">
                                        <input type="text" name="meta_title" class="form-control" value="{{$category->meta_title}}" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Meta Title</label>
                                    </div>
                                    <div class="form-group form-info">
                                        <textarea class="form-control" name="meta_description" required="">{{ $category->meta_description }}</textarea>
                                        <span class="form-bar"></span>
                                        <label class="float-label">Meta Description</label>
                                    </div>
                                    <div class="form-group form-info">
                                        <textarea class="form-control" name="meta_keywords" required="">{{ $category->meta_keywords }}</textarea>
                                        <span class="form-bar"></span>
                                        <label class="float-label">Meta Keywords</label>
                                    </div>
                                    <div class="form-group form-info">
                                        <input type="file" name="image" class="form-control" >
                                        <span class="form-bar"></span>
                                        <img src="/image/{{ $category->image }}" width="300px">
                                    </div>

                                    <button type="submit" class="btn btn-mat waves-effect waves-light btn-info mt-3">Update</button>
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
