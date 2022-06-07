@extends('trang-chu.layout.index')
@section('content')

    <div id="page-wrapper">
        <!-- header-area start -->

        <!-- breadcrumbs-area start -->
        <div class="breadcrumbs-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content text-center">
                            <h2>Giỏ Hàng</h2>
                            <ul>
                                <li><a href="{{route('/')}}">Trang chủ /</a></li>
                                <li class="active"><a href="#">Giỏ hàng</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumbs-area end -->
        <!-- shop-main-area start -->
        <div class="shop-main-area">
            <!-- cart-main-area start -->
            <div class="cart-main-area">
                <div class="container">

                    @if ($carts > 0)
                        <div>
                        <div class="row delete_cart" data-url="{{ route('deleteCart') }}">
                            <div class="col-12 quyet">

                                <form action="#">
                                    <div class="table-content table-responsive">
                                        <table class="table  update_cart_url" data-url="{{route('updateCart')}}">
                                            <thead>
                                            <tr>
                                                <th class="product-thumbnail">#</th>
                                                <th class="product-thumbnail">Ảnh</th>
                                                <th class="product-name">Sản phẩm</th>
                                                <th class="product-price">Giá</th>
                                                <th class="product-quantity">số lượng</th>
                                                <th class="product-subtotal">tổng</th>
                                                <th class="product-remove">Cập Nhật </th>
                                                <th class="product-remove">xóa</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                @php
                                                    $total=0;
                                                @endphp
                                                @foreach($carts as $pro_id=>$cart)
                                                    @php

                                                       $total += $cart['price'] * $cart['quantity'];

                                                    @endphp
                                                    <td class="product-thumbnail">{{$pro_id}}</td>
                                                    <td class="product-thumbnail"><a href="#"><img src="/image/{{$cart['image']}}"  alt="{{$cart['name']}}" /></a></td>
                                                    <td class="product-name"><a href="#">{{$cart['name']}}</a></td>
                                                    <td class="product-price"><span class="amount">{{ number_format($cart['price'])}}$</span></td>
                                                    <td class="product-quantity"><input type="number" value="{{$cart['quantity']}}" min="1" id="quantity" name="quantity"></td>
                                                    <td class="product-subtotal"> {{number_format($cart['price'] * $cart['quantity']) }}$</td>
                                                    <td class="product-remove"><a href="" data-id="{{$pro_id}}" class="cart update_cart"><i class="fa fa-pencil"></i></a>
                                                    <td class="product-remove"><a href="" data-id="{{$pro_id}}" class="cart delete_cart"><i class="fa fa-times"></i></a>
                                                    </td>
                                            </tr>


                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-7">
                                <div class="buttons-cart mb-30 mt-3">
                                    <ul>

                                        <li><a href="{{route('/')}}">tiếp tục mua sắm</a></li>
                                    </ul>
                                </div>
                                <div class="coupon">
                                    <h3>phiếu giảm giá</h3>
                                    <p>Điền mã giảm giá của bạn.</p>
                                    <form action="#">
                                        <input type="text" placeholder="Mã giảm giá">
                                        <a href="#">Áp dụng</a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-5">
                                <div class="cart_totals">
                                    <h2>Tổng giỏ hàng</h2>
                                    <table>
                                        <tbody>
                                        <tr class="cart-subtotal">
                                            <th>tiền hàng</th>
                                            <td>
                                                <span class="amount">{{number_format($total)}}</span>
                                            </td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>vận chuyển</th>
                                            <td>
                                                <ul id="shipping_method">
                                                    <li>

                                                        <label>
                                                            Phí Giao Hàng:
                                                            <span class="amount">30$</span>
                                                        </label>
                                                    </li>

                                                </ul>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>tổng</th>
                                            <td>
                                                <strong>
                                                    <span class="amount">{{number_format($total +30)}}$</span>
                                                </strong>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="wc-proceed-to-checkout">
                                        <a href="{{route('checkout')}}">Tiến Hành Thanh Toán</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    @else
                       <div class="col-12">
                        Chưa có sản phẩm nào trong giỏ hàng.

                        </div>
                        <div class="buttons-cart mb-30 mt-3">
                            <ul>

                                <li><a href="{{route('/')}}">Mua sắm ngay</a></li>
                            </ul>
                        </div>
                    @endif

                </div>
            </div>
            <!-- cart-main-area end -->
        </div>

@endsection
