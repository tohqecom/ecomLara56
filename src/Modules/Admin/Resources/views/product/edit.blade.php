@extends('admin::layouts.master')
@section('content')
    <div class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.get.list.product') }}">Product</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update Product</li>
                </ol>
            </nav>
            <div class="col-sm-12">
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter product name" name="name" value="{{old('name')?old('name'):$product->c_name}}">
                        <small class="form-text text-muted">
                            @if($errors->has('name'))
                            <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <input type="text" class="form-control" id="icon" placeholder="Enter icon" name="icon" value="{{old('icon')?old('icon'):$product->c_icon}}">
                        <small class="form-text text-muted">
                            @if($errors->has('icon'))
                                <div class="alert alert-danger">{{ $errors->first('icon') }}</div>
                            @endif
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="meta_title">Meta Title</label>
                        <input type="text" class="form-control" id="meta_title" placeholder="Enter Meta Title" name="meta_title" value="{{old('meta_title')?old('meta_title'):$product->c_title_seo}}">
                        <small class="form-text text-muted">
                            @if($errors->has('meta_title'))
                                <div class="alert alert-danger">{{ $errors->first('meta_title') }}</div>
                            @endif
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="meta_descr">Meta Description</label>
                        <input type="text" class="form-control" id="meta_descr" placeholder="Enter Meta Description" name="meta_descr" value="{{old('meta_descr')?old('meta_descr'):$product->c_description_seo}}">
                        <small class="form-text text-muted">
                            @if($errors->has('meta_descr'))
                                <div class="alert alert-danger">{{ $errors->first('meta_descr') }}</div>
                            @endif
                        </small>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@stop
