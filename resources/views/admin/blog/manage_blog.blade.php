@extends('admin.master')
@section('title')
    Manage Blog
@endsection
@section('content')
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Blog</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                    <a class="breadcrumb-item" href="#">Blog</a>
                    <span class="breadcrumb-item active">Manage Blog</span>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="text-right">
                    <a href="{{route('add.blog')}}">
                        <button class="btn btn-primary">
                            <i class="anticon anticon-plus-circle m-r-5"></i>
                            <span>Add Blog</span>
                        </button>
                    </a>
                </div>
                <h2>Manage Blog</h2>
                <div class="table-responsive">
                    <table class="table table-hover e-commerce-table">
                        <thead>
                        <tr class="text-center">
                            <th>SL.</th>
                            <th>Image</th>
                            <th>Blog Title</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $n=1 @endphp
                        @foreach($blogs as $blog)
                            <tr class="text-center">
                                <td>{{$n++}}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid rounded" src="{{asset($blog->image)}}" style="max-width: 200px" alt="">
                                    </div>
                                </td>
                                <td>{{$blog->title}}</td>
                                <td>{{$blog->name}}</td>
                                <td><p>{!! Str::limit($blog->description, 20) !!}</p></td>
                                <td class="text-center">
                                    <a href="{{route('edit.blog',['id'=>$blog->id])}}">
                                        <button class="btn btn-sm btn-primary btn-rounded">
                                            <i class="anticon anticon-edit"></i> Edit
                                        </button>
                                    </a>
                                    <a href="{{route('delete.blog',['id'=>$blog->id])}}">
                                        <button class="btn btn-sm btn-danger btn-rounded">
                                            <i class="anticon anticon-edit"></i> Delete
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
