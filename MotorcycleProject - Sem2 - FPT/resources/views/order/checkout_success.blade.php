@extends('trang-chu.layout.index')
@section('cart')

    <li><a href="{{route('Cart')}}"><i class="icon ion-bag"></i></a>

        <span class=""> 0</span>
            <div class="mini-cart-sub">
                <div class="cart-product">
                    <div class="single-cart">
                       <p> Your cart is empty</p>
                    </div>
                </div>
                <div class="cart-bottom">
                    <a href="{{route('checkout')}}">Check out</a>
                </div>
            </div>
    </li>

@endsection
@section('content')
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/css/blog.css')}}">
    <div class="main-wrapper ">

        <section class="page-title bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">Thank you for choosing our Products</span>
                            <h1  class="text-capitalize mb-4 text-lg"> Motorcycle Checkout</h1>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="{{route('/')}}" class="text-white">Home</a></li>
                                <li class="list-inline-item"><span class="text-white">/</span></li>
                                <li class="list-inline-item"><a href="#" class="text-white-50">Order Success</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="shop-main-area mt-1 mb-5">
        <div class="container mb-5">
            <div class="row">
                <div class="col-12">
                    <h1>BẠN ĐÃ ĐẶT HÀNG THÀNH CÔNG!</h1>
                    <p>Đơn hàng của bạn đã được xử lý thành công!</p>
                    <p>Cám ơn bạn đã mua sắm tại cửa hàng chúng tôi!</p>
                    <div class="buttons">
                        <div class="pull-right">
                            <a href="/" class="btn btn-primary btn-continue">Tiếp Tục Mua Sắm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

