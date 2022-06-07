@include('trang-chu.layout.pre_loader')
@extends('trang-chu.layout.index')
@section('cart')


    <li><a href="{{route('Cart')}}"><i class="icon ion-bag"></i></a>

        <span class="lblCartCount" id="lblCartCount"> {!! $dem !!}</span>
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

            <div class="cart-bottom">
                <a href="{{route('checkout')}}">Check out</a>
            </div>
        </div>
        @endforeach
    </li>

@endsection
@section('content')

<div id="page-wrapper">

    <div class="slider-area">
        <div id="slider">
            <img src="{{URL::asset('niceadmin/trang-chu/images/slider/slider1.jpg')}}" alt="slider-img" title="#caption1" />
        </div>
        <div class="nivo-html-caption" id="caption1">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slider-text">
                            <h5 class="wow fadeInLeft" data-wow-delay=".3s">áo da</h5>
                            <h5 class="wow fadeInLeft" data-wow-delay=".5s">bộ sưu tập mới</h5>
                            <h2 class="wow fadeInRight" data-wow-delay=".7s">sản phẩm độc đáo! </h2>
                            <h1 class="wow fadeInRight" data-wow-delay=".9s">backpack</h1>
                            <p class="wow fadeInLeft" data-wow-delay="1.3s">Thiết kế theo xu hướng xe cộ <br /> phong cách của bạn. </p>
                            <a href="/" class=" wow bounceInRight show-more" data-wow-delay="1.5s">xem thêm</a>
                        </div>
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
        </div>
    </div>

    <!-- founder-area start -->
    <div class="founder-area ptb-40">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="founder-description text-center">
                        <h3>chùng tôi là ai</h3>
                        <h1>chào mừng bạn đến với Chopper</h1>
                        <img src="{{URL::asset('niceadmin/trang-chu/images/banner/1.png')}}" alt="banner" />
                        <p>Chopper theo đuổi triết lí kinh doanh nhân văn: Được <em><strong>là người tử tế, lương
                                    thiện</strong></em> và được
                            phục vụ <em><strong>những vị khách hàng tử tế, lương thiện</strong></em>.</p>
                        <h4>Miss Tùng - <span>CEO Chopper</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- founder-area end -->
    <!-- feature-product-area start -->
    <div class="arrivals-area ptb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title mb-30 text-center">
                        <h2>Phụ Kiện mới nhất </h2>
                    </div>
                </div>
            </div>

            <!-- tab-area start -->
            <div class="tab-content">
                <div class="row">
                    <div class="product-active">


                        @foreach($accessories as $accessory)
                            <div class="col-12">

                                <!-- product-wrapper start -->
                                <div class="product-wrapper">

                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="/image/{{$accessory->image}}" alt="product" class="primary" />
                                            <img src="/image/{{$accessory->image}}" alt="product" class="secondary" />
                                        </a>

                                        <div class="product-icon">

                                            <a href="#" class="add-to-cart-button" data-name="{{$accessory->productName}}" data-url="{{route('add.to.cart',$accessory->pro_id)}}" title="Thêm vào Giỏ Hàng"><i
                                                    class="icon ion-bag " ></i></a>
                                            <input type="hidden" name="quantity" value="1">


                                            <a href="#" data-toggle="tooltip" title="So Sánh Sản Phẩm"><i
                                                    class="icon ion-android-options"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#mymodal" title="Xem Nhanh"><i
                                                    class="icon ion-android-open"></i></a>
                                        </div>
                                    </div>

                                    <div class="product-content pt-20">
                                        <div class="manufacture-product">

                                            <div class="rating">
                                                <div class="rating-box">
                                                    <div class="rating2">rating</div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2><a href="product-details.html">{{$accessory->productName}}</a>
                                        </h2>
                                        <div class="price">
                                            <ul>
                                                <li class="new-price">{{number_format($accessory->pro_new_price)}}$</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-wrapper end -->
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- tab-area end -->
        </div>
    </div>

    <!-- arrivals-area start -->
    <div class="arrivals-area ptb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title mb-30 text-center">
                        <h2>Sản phẩm mới nhất </h2>
                    </div>
                </div>
            </div>

            <!-- tab-area start -->
            <div class="tab-content">
                <div class="row">
                    <div class="product-active">


                       @foreach($products as $product)
                          <div class="col-12">

                            <!-- product-wrapper start -->
                            <div class="product-wrapper">

                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="/image/{{$product->image}}" alt="product" class="primary" />
                                        <img src="/image/{{$product->image}}" alt="product" class="secondary" />
                                    </a>

                                    <div class="product-icon">

                                        <a href="#" class="add-to-cart-button" data-name="{{$product->productName}}" data-url="{{route('add.to.cart',$product->pro_id)}}" title="Thêm vào Giỏ Hàng"><i
                                                class="icon ion-bag " ></i></a>
                                        <input type="hidden" name="quantity" value="1">


                                        <a href="#" data-toggle="tooltip" title="So Sánh Sản Phẩm"><i
                                                class="icon ion-android-options"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#mymodal" title="Xem Nhanh"><i
                                                class="icon ion-android-open"></i></a>
                                    </div>
                                </div>

                                <div class="product-content pt-20">
                                    <div class="manufacture-product">

                                        <div class="rating">
                                            <div class="rating-box">
                                                <div class="rating2">rating</div>
                                            </div>
                                        </div>
                                    </div>
                                    <h2><a href="product-details.html">{{$product->productName}}</a>
                                    </h2>
                                    <div class="price">
                                        <ul>
                                            <li class="new-price">{{number_format($product->pro_new_price)}}$</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- product-wrapper end -->
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- tab-area end -->
        </div>
    </div>
    <!-- arrivals-area end -->
    <!-- blog-area start -->
    <div class="blog-aea ptb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title mb-30 text-center">
                        <h2>Bài Viết Mới Nhất</h2>
                    </div>
                </div>
                <div class="blog-active">

                    @if($message = Session::get('success'))
                        <div class="alert alert-success">
                            {{$message}}
                        </div>
                    @endif
                    @foreach($blogs as $blog)
                        <div class="col-12">
                            <!-- single-blog start -->
                            <div class="single-blog">
                                <div class="blog-img">
                                    <a href="#"><img src="/image/{{$blog->image}}" alt="blog"></a>
                                    <div class="date">
                                        {{$blog->updated_at->format('M')}}-{{$blog->updated_at->format('Y')}} <span>{{$blog->updated_at->format('d')}}</span>
                                    </div>
                                </div>
                                <div class="blog-content pt-20">
                                    <h3><a href="{{$blog->content}}">{{$blog->title}}</a>
                                    </h3>
                                    <span>By {{$blog->createdBy}}</span>

                                    <a href="blog-details.html">Xem thêm...</a>
                               </div>
                            </div>
                            <!-- single-blog end -->
                        </div>
                   @endforeach

                </div>

            </div>
        </div>
    </div>

    <!-- blog-area end -->

</div>

@endsection



