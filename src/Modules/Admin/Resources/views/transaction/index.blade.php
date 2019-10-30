@extends('admin::layouts.master')
@section('content')
    <div class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product</li>
                </ol>
            </nav>
            <div class="col-sm-12">
                <h2>Product list <a class="float-right " href="{{route('admin.get.create.product')}}"><i class="fa fa-plus-circle"></i></a> </h2>
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Category Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if (isset($products))
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->p_name}}</td>
                                    <td>{{$product->category->c_name}}</td>
                                    <td><i class="{{$product->getStatus()['class']}}">{{$product->getStatus()['name']}}</i></td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{ route('admin.post.edit.product', $product->id) }}">Edit</a>
                                        <a class="btn btn-danger btn-sm" href="{{ route('admin.post.action.product', ['delete', $product->id]) }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @stop
