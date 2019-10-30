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
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="form-group">
                                <label for="name">Product Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter product name" name="name" value="{{old('name')?old('name'):$product->p_name}}">
                                <small class="form-text text-muted">
                                    @if($errors->has('name'))
                                        <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                                    @endif
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="descr">Description</label>
                                <textarea rows="3" type="text" class="form-control" id="descr" placeholder="Enter Description" name="description">{{old('description')?old('description'):$product->p_descr}}</textarea>
                                <small class="form-text text-muted">
                                    @if($errors->has('description'))
                                        <div class="alert alert-danger">{{ $errors->first('description') }}</div>
                                    @endif
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea rows="5" type="text" class="form-control" id="content" placeholder="Enter Content" name="content">{{old('content')?old('content'):$product->p_content}}</textarea>
                                <small class="form-text text-muted">
                                    @if($errors->has('content'))
                                        <div class="alert alert-danger">{{ $errors->first('content') }}</div>
                                    @endif
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="meta_title">Meta Title</label>
                                <input type="text" class="form-control" id="meta_title" placeholder="Enter Meta Title" name="meta_title" value="{{old('meta_title')?old('meta_title'):$product->p_title_seo}}">
                                <small class="form-text text-muted">
                                    @if($errors->has('meta_title'))
                                        <div class="alert alert-danger">{{ $errors->first('meta_title') }}</div>
                                    @endif
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="meta_descr">Meta Description</label>
                                <input type="text" class="form-control" id="meta_descr" placeholder="Enter Meta Description" name="meta_descr" value="{{old('meta_descr')?old('meta_descr'):$product->p_descr_seo}}">
                                <small class="form-text text-muted">
                                    @if($errors->has('meta_descr'))
                                        <div class="alert alert-danger">{{ $errors->first('meta_descr') }}</div>
                                    @endif
                                </small>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-control" name="category_id" id="category">
                                    <option value="">--Please choose category--</option>
                                    @if (isset($categories))
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" {{ $category->id == $product->p_category_id ? 'selected' : '' }}>{{$category->c_name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                <small class="form-text text-muted">
                                    @if($errors->has('category_id'))
                                        <div class="alert alert-danger">{{ $errors->first('category_id') }}</div>
                                    @endif
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" id="price" placeholder="Enter Price" name="price" value="{{old('price')}}">
                                <small class="form-text text-muted">
                                    @if($errors->has('price'))
                                        <div class="alert alert-danger">{{ $errors->first('price') }}</div>
                                    @endif
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="discount">Discount</label>
                                <input type="text" class="form-control" id="discount" placeholder="Enter % Discount" name="discount" value="{{old('discount')}}">
                                <small class="form-text text-muted">
                                    @if($errors->has('price'))
                                        <div class="alert alert-danger">{{ $errors->first('price') }}</div>
                                    @endif
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="price">Thumb</label>
                                <input type="file" class="form-control" id="thumb" placeholder="Enter Thumb" name="thumb" value="{{old('thumb')}}">
                                <small class="form-text text-muted">
                                    @if($errors->has('thumb'))
                                        <div class="alert alert-danger">{{ $errors->first('thumb') }}</div>
                                    @endif
                                </small>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" name="hot" id="hot" value="1">
                                <label class="form-check-label" for="hot">Hot</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
