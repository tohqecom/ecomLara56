@extends('layouts.app')
@section('content')
<section id="topic-header">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>Shop</h1>
                <p>A Bunch Of Products</p>
            </div>	<!-- End of /.col-md-4 -->
            <div class="col-md-8 hidden-xs">
                <ol class="breadcrumb pull-right">
                    <li><a href="#">Home</a></li>
                    <li class="active">Shop</li>
                </ol>
            </div>	<!-- End of /.col-md-8 -->
        </div>	<!-- End of /.row -->
    </div>	<!-- End of /.container -->
</section>	<!-- End of /#Topic-header -->



<!-- PRODUCTS Start
================================================== -->

<section id="shop">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="products-heading">
                    <h2>NEW PRODUCTS</h2>
                </div>	<!-- End of /.Products-heading -->
                <div class="product-grid">
                    <ul>
                        @if($products)
                            @foreach($products as $product)
                                <li>
                                    <div class="products">
                                        <a href="{{ route('get.detail.product', [$product->p_slug, $product->id]) }}">
                                            <img style="height: 210px;" src="{{ (strpos($product->p_thumb, 'https:') !== false) ? $product->p_thumb : asset('images/' . $product->p_thumb) }}" alt="{{$product->p_name}}"/>
                                        </a>
                                        <a href="{{ route('get.detail.product', [$product->p_slug, $product->id]) }}">
                                            <h5>{{$product->p_name}}</h5>
                                        </a>
                                        <p class="price">From: £{{$product->price}}</p>
                                        <div >
                                            <form method="POST" action="{{route('cart.add')}}" class="form-inline my-2 my-lg-0" >
                                                @csrf
                                                <input name="id" type="hidden" value="{{$product->id}}">
                                                <button class="btn btn-success btn-block" type="submit">Add to cart</button>
                                            </form>
{{--                                            <a class="view-link shutter" href="#">--}}
{{--                                                <i class="fa fa-plus-circle"></i>Add To Cart</a>--}}
                                        </div>
                                    </div>	<!-- End of /.products -->
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>	<!-- End of /.products-grid -->

                <!-- Pagination -->

                <div class="pagination-bottom">
                    <ul class="pagination">
                        <li class="disabled"><a href="#">&laquo;</a></li>
                        <li class="active"><a href="#">1 <span class="sr-only"></span></a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">»</a></li>
                    </ul>	<!-- End of /.pagination -->
                </div>
            </div>	<!-- End of /.col-md-9 -->
{{--            <div class="col-md-3">--}}
{{--                <div class="blog-sidebar">--}}
{{--                    @include('components.product-latest')--}}
{{--                    @include('components.product-tag')--}}
{{--                </div>	<!-- End of /.col-md-3 -->--}}

{{--            </div>	<!-- End of /.row -->--}}
        </div>	<!-- End of /.container -->
    </div>
</section>	<!-- End of Section -->

@endsection
