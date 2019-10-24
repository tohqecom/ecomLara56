@extends('admin::layouts.master')
@section('content')
    <div class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Category</li>
                </ol>
            </nav>
            <div class="col-sm-12">
                <h2>Category list <a class="btn btn-primary" href="{{route('admin.get.create.category')}}">Add New Category</a> </h2>
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Title seo</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if (isset($categories))
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->c_name}}</td>
                                    <td>{{$category->c_title_seo}}</td>
                                    <td>{{$category->c_active}}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="#">Edit</a>
                                        <a class="btn btn-danger btn-sm" href="#">Delete</a>
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