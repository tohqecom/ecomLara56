@extends('admin::layouts.master')
@section('content')
    <div class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.get.list.category') }}">Category</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add New Category</li>
                </ol>
            </nav>
            <div class="col-sm-12">
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter category name" name="name" value="{{old('name')}}">
                        <small class="form-text text-muted">
                            @if($errors->has('name'))
                            <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <input type="text" class="form-control" id="icon" placeholder="Enter icon" name="icon" value="{{old('icon')}}">
                        <small class="form-text text-muted">
                            @if($errors->has('icon'))
                                <div class="alert alert-danger">{{ $errors->first('icon') }}</div>
                            @endif
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="meta_title">Meta Title</label>
                        <input type="text" class="form-control" id="meta_title" placeholder="Enter Meta Title" name="meta_title" value="{{old('meta_title')}}">
                        <small class="form-text text-muted">
                            @if($errors->has('meta_title'))
                                <div class="alert alert-danger">{{ $errors->first('meta_title') }}</div>
                            @endif
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="meta_descr">Meta Description</label>
                        <input type="text" class="form-control" id="meta_descr" placeholder="Enter Meta Description" name="meta_descr" value="{{old('meta_descr')}}">
                        <small class="form-text text-muted">
                            @if($errors->has('meta_descr'))
                                <div class="alert alert-danger">{{ $errors->first('meta_descr') }}</div>
                            @endif
                        </small>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" name="hot" id="hot">
                        <label class="form-check-label" for="hot">Hot</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@stop