@extends('admin.master')
@section('title')
    Add Category
@endsection
@section('content')
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Category</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                    <a class="breadcrumb-item" href="#">Category</a>
                    <span class="breadcrumb-item active">New Category</span>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="text-right">
                    <a href="{{route('manage.category')}}">
                        <button class="btn btn-primary">
                            <i class="anticon anticon-arrow-left m-r-5"></i>
                            <span>Manage Category</span>
                        </button>
                    </a>
                </div>
                <div class="row">
                    <div class="col-md-8 offset-2">
                        <h4>Create New Category</h4>
                        <div class="m-t-25">
                            <form action="{{route('save.category')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('image') }}" placeholder="Please Insert Category Name">
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
