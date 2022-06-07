@extends('trang-chu.layout.index')
@section('cart')

    <li><a href="{{route('Cart')}}"><i class="icon ion-bag"></i></a>

        <span class=""> {!!$dem!!}</span>
        @foreach($carts as $id=>$cart)

            <div class="mini-cart-sub">
                <div class="cart-product">
                    <div class="single-cart">
                        <div class="cart-img">
                            <a href="#"><img src="/image/{{$cart['image']}}"/></a>
                        </div>
                        <div class="cart-info">
                            <h5><a href="#">{{$cart['name']}}</a></h5>
                            <p>{{$cart['quantity']}} x {{$cart['price']}}</p>
                        </div>
                    </div>
                </div>
                <div class="cart-totals">
                    <h5>Tổng <span></span></h5>
                </div>
                <div class="cart-bottom">
                    <a href="{{route('checkout')}}">Check out</a>
                </div>
            </div>
        @endforeach
    </li>

@endsection
@section('content')

    <div id="page-wrapper">
        <!-- header-area start -->

        <!-- breadcrumbs-area start -->
        <div class="breadcrumbs-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content text-center">
                            <h2>About Us</h2>
                            <ul>
                                <li><a href="{{route('/')}}">Home /</a></li>
                                <li class="active"><a href="#">About Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumbs-area end -->
        <div class="shop-main-area">
            <div class="shop-main-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- blog-details-area start -->
                            <div class="blog-details-area">
                                <div class="blog-details-img">
                                    <a href="#"><img src="{{URL::asset('niceadmin/trang-chu/images/blog/rider-and-his.jpg')}}" alt="banner"></a>
                                </div>
                                <div class="blog-info">
                                    <h3>What makes Tony Chopper Brand 6 years ago was just a shop in a small alley!</h3>
                                    <p>The first internal combustion, petroleum fueled motorcycle was the Daimler Reitwagen.
                                        It was designed and built by the German inventors Gottlieb Daimler and Wilhelm Maybach
                                        in Bad Cannstatt, Germany, in 1885.[8] This vehicle was unlike either the safety bicycles
                                        or the boneshaker bicycles of the era in that it had zero degrees of steering axis angle and
                                        no fork offset, and thus did not use the principles of bicycle and motorcycle dynamics developed
                                        nearly 70 years earlier. Instead, it relied on two outrigger wheels to remain upright while turning.</p>
                                    <p>The Butler Petrol Cycle was a three-wheeled vehicle, with the rear wheel directly driven by a
                                        hp (0.47 kW), 40 cc (2.4 cu in) displacement, 2+1⁄4 in × 5 in (57 mm × 127 mm) bore × stroke,
                                        flat twin four-stroke engine (with magneto ignition replaced by coil and battery) equipped with rotary
                                        valves and a float-fed carburettor (five years before Maybach) and Ackermann steering, all of which were
                                        state of the art at the time. Starting was by compressed air. The engine was liquid-cooled, with a radiator
                                        over the rear driving wheel. Speed was controlled by means of a throttle valve lever. No braking system was
                                        fitted; the vehicle was stopped by raising and lowering the rear driving wheel using a foot-operated lever;
                                        the weight of the machine was then borne by two small castor wheels. The driver was seated between the front
                                        wheels. It wasn't, however, a success, as Butler failed to find sufficient financial backing</p>
                                    <br />
                                    <blockquote>Many authorities have excluded steam powered, electric motorcycles or diesel-powered two-wheelers
                                        from the definition of a 'motorcycle', and credit the Daimler Reitwagen as the world's first motorcycle.[15][16][17]
                                        Given the rapid rise in use of electric motorcycles worldwide</blockquote>
                                    <br />
                                    <p>
                                        defining only internal-combustion powered two-wheelers as 'motorcycles' is increasingly problematic. The first (
                                        petroleum fueled) internal-combustion motorcycles, like the German Reitwagen, were, however, also the first practical motorcycles
                                    </p>
                                    <div class="row">
                                        <div class="cool-12 col-md-6">
                                            <div class="blog-details-img mt-20">
                                                <a href="#"><img src="{{URL::asset('niceadmin/trang-chu/images/blog/custom-motorcycle-overlook-800x500.jpg')}}" alt="banner" /></a>
                                            </div>
                                        </div>
                                        <div class="cool-12 col-md-6">
                                            <div class="blog-details-img mt-20">
                                                <a href="#"><img src="{{URL::asset('niceadmin/trang-chu/images/blog/dan-burton-800x533.jpg')}}" alt="banner" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <p>If a two-wheeled vehicle with steam propulsion is considered a motorcycle, then the first motorcycles built seem
                                        to be the French Michaux-Perreaux steam velocipede which patent application was filled in December 1868,[10][11] constructed
                                        around the same time as the American Roper steam velocipede, built by Sylvester H. Roper Roxbury, Massachusetts.[10][11] who
                                        demonstrated his machine at fairs and circuses in the eastern U.S. in 1867,[8] Roper built about 10 steam cars and cycles from
                                        the 1860s until his death in 1896.</p>
                                    <div class="user-info">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="cats-tags-wrap mb-rsp-3">
                                                    <i class="fa fa-list-alt"></i>Categories: <a href="#">Brands</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="user-share">
                                                    <span>Share :</span>
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-reddit"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- blog-details-area end -->
                    </div>
                    <div class="col-12 col-lg-4">

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
