@extends('admin.master')
@section('title')
    Edit Blog
@endsection
@section('content')
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Blog</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                    <a class="breadcrumb-item" href="#">Blog</a>
                    <span class="breadcrumb-item active">Edit Blog</span>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="text-right">
                    <a href="{{route('manage.category')}}">
                        <button class="btn btn-primary">
                            <i class="anticon anticon-arrow-left m-r-5"></i>
                            <span>Manage Blog</span>
                        </button>
                    </a>
                </div>
                <div class="row">
                    <div class="col-md-10 offset-1">
                        <h4>Create New Blog</h4>
                        <div class="m-t-25">
                            <form action="{{route('update.blog')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Blog Title</label>
                                    <input type="hidden" name="id" value="{{$blog->id}}">
                                    <input type="text" class="form-control" name="title" value="{{$blog->title}}" placeholder="Please Insert Blog Title">
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category_id" id="" class="form-control">
                                        @foreach($categories as $cat)
                                            <option value="{{$cat->id}}" class="form-control" @if ($blog->category_id == $cat->id) selected @endif>{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image" class="form-control dropify">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Previous Image</label>
                                            <img src="{{asset($blog->image)}}" alt="" class="img-fluid">
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label>Blog Description</label>
                                    <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$blog->description}}</textarea>
                                </div>
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
