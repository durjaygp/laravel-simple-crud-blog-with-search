@extends('admin.master')
@section('title')
    Manage Category
@endsection
@section('content')
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Category</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                    <a class="breadcrumb-item" href="#">Category</a>
                    <span class="breadcrumb-item active">Manage Category</span>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="text-right">
                    <a href="{{route('add.category')}}">
                        <button class="btn btn-primary">
                            <i class="anticon anticon-plus-circle m-r-5"></i>
                            <span>Add Category</span>
                        </button>
                    </a>
                </div>
                <h2>Manage Category</h2>
                <div class="table-responsive">
                    <table class="table table-hover e-commerce-table">
                        <thead>
                        <tr class="text-center">
                            <th>SL.</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $n=1 @endphp
                        @foreach($categories as $cat)
                        <tr class="text-center">
                            <td>{{$n++}}</td>
                            <td>{{$cat->name}}</td>
                            <td class="text-center">
                                <a href="{{route('edit.category',['id'=>$cat->id])}}">
                                <button class="btn btn-sm btn-primary btn-rounded">
                                    <i class="anticon anticon-edit"></i> Edit
                                </button>
                                </a>
                                <a href="{{route('delete.category',['id'=>$cat->id])}}">
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
