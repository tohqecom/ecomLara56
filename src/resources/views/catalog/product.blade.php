@extends('layouts.app')
@section('content')
    <!-- breadcrumb Start
    ================================================== -->

    <section id="topic-header">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Products Details</h2>
                    <p></p>
                </div>	<!-- /.col-md-4 -->
                <div class="col-md-8 hidden-xs">
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Products</a></li>
                        <li class="active">Single Products</li>
                    </ol>
                </div> <!-- /.col-md-8 -->
            </div>	<!-- /.row -->
        </div>	<!-- /.container-->
    </section><!-- /Section -->




    <section id="single-product">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="single-product-img">
                        <img src="{{ asset('images/' . $product->p_thumb) }}" alt="" style="max-width: 400px;">
                    </div>

                </div> <!-- End of /.col-md-5 -->
                <div class="col-md-4">
                    <div class="block">
                        <div class="product-des">
                            <h4>{{$product->p_name}}</h4>
                            <p class="price">${{$product->price}}</p>
                            <p>{{$product->p_descr}}</p>
                            <a class="view-link" href="#"><i class="fa fa-plus-circle"></i>Add To Cart</a>
                        </div>	<!-- End of /.product-des -->
                    </div> <!-- End of /.block -->
                </div>	<!-- End of /.col-md-4 -->
                <div class="col-md-3">
                    @include('components.product-right-side')
                </div>	<!-- End of /.col-md-3 -->
            </div>	<!-- End of /.row -->
            <div class="row">
                <div class="col-md-9">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#home" data-toggle="tab">More Info</a></li>
                        <li><a href="#profile" data-toggle="tab">Comments</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home">
                            <p>{{$product->p_content}}</p>
                        </div>
                        <div class="tab-pane" id="profile">
                            <p>No customer comments for the moment.</p>
                        </div>
                    </div>
                </div>	<!-- End of /.col-md-9 -->
                <div class="col-md-3">
                    <div class="blog-sidebar">
                        <div class="block">
                            <img src="images/food-ad.png" alt="">
                        </div> <!-- End of /.block -->
                    </div>	<!-- End of /.blog-sidebar -->
                </div>	<!-- End of /.col-md-3 -->
            </div>	<!-- End of /.row -->
        </div>	<!-- End of /.Container -->
    </section> <!-- End of /.Single-product -->

@endsection
