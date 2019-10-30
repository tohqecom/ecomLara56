<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div> <!-- End of /.navbar-header -->

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav nav-main">
                <li class="active"><a href="#">Home</a></li>
                @if(isset($categories))
                    @foreach($categories as $category)
                        <li><a href="{{ route('get.list.product', [$category->c_slug, $category->id]) }}"><i class="{{$category->icon}}">{{$category->c_name}}</i></a></li>
                    @endforeach
                @endif

{{--                <li><a href="products.html">SHOP</a></li>--}}
{{--                <li><a href="blog.html">BLOG</a></li>--}}
{{--                <li><a href="blog-single.html">ARTICLE</a></li>--}}
                <li><a href="blog.html">Services</a></li>
                <li><a href="blog.html">Contact</a></li>
{{--                <li class="dropdown">--}}
{{--                    <a href="#">--}}
{{--                        PAGES--}}
{{--                        <span class="caret"></span>--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu">--}}
{{--                        <li><a  href="#">Action</a></li>--}}
{{--                        <li><a  href="#">Another action</a></li>--}}
{{--                        <li><a  href="#">Something else here</a></li>--}}
{{--                        <li><a  href="#">Separated link</a></li>--}}
{{--                    </ul>--}}
{{--                </li> <!-- End of /.dropdown -->--}}


            </ul> <!-- End of /.nav-main -->
        </div>	<!-- /.navbar-collapse -->
    </div>	<!-- /.container-fluid -->
</nav>	<!-- End of /.nav -->
