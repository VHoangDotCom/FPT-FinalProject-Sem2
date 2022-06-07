@extends('trang-chu.layout.index')
@section('content')
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/css/checkout.css')}}">
    <div id="page-wrapper">
        <!-- header-area start -->

        <!-- breadcrumbs-area start -->
        <div class="breadcrumbs-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content text-center">
                            <h2>Thanh Toán</h2>
                            <ul>
                                <li><a href="index.html">Trang Chủ /</a></li>
                                <li><a href="cart.html">Giỏ Hàng /</a></li>
                                <li class="active"><a href="#">Thanh Toán</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumbs-area end -->
        <!-- shop-main-area start -->
        <div class="shop-main-area">
            <!-- coupon-area start -->
            <div class="coupon-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">

                        </div>
                    </div>
                </div>
            </div>
            <!-- coupon-area end -->
            <!-- checkout-area start -->
            @if($errors->any())
                <div class="alert alert-danger">
                    <strong>Oops!</strong>There were some problems with your input. <br><br>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="check-out-area">
                <div class="container">
                    <form action="{{route('order',Auth::user()->id)}}" method="post">
                        @csrf

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="checkbox-form">
                                    <h3>Thông Tin nhận hàng</h3>
                                    <div class="row">

                                        <div class="col-12 ">
                                            <div class="checkout-form-list">
                                                <label>Tên <span class="required">*</span></label>
                                                <input type="text" name="name" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="checkout-form-list">
                                                <label>Địa Chỉ <span class="required">*</span></label>
                                                <input type="text" name="address" placeholder="Số nhà - Phố">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Xã/ Phường <span class="required">*</span></label>
                                                <input type="text" name="district">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Quận/ Huyện <span class="required">*</span></label>
                                                <input type="text" name="ward" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="checkout-form-list">
                                                <label>Tỉnh / Thành Phố <span class="required">*</span></label>
                                                <input type="text" name="city">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Điện Thoại <span class="required">*</span></label>
                                                <input type="number" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Địa Chỉ Email <span class="required">*</span></label>
                                                <input type="email" placeholder="" name="email">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="order-notes">
                                        <div class="checkout-form-list">
                                            <label>Ghi chú </label>
                                            <textarea
                                                placeholder="Ghi chú về đơn hàng của bạn, Ví dụ ghi chú đặc biệt để nhận hàng."
                                                rows="10" cols="30" id="checkout-mess" name="description"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="your-order">
                                    <h3>Đơn hàng của bạn</h3>
                                    <div class="your-order-table table-responsive">
                                        <table>
                                            <thead>
                                            <tr>
                                                <th class="product-name"><strong>Ảnh</strong></th>
                                                <th class="product-name"><strong>Sản phẩm</strong></th>
                                                <th class="product-total"><strong>Tổng tiền</strong></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php
                                                $total=0;
                                            @endphp
                                            @foreach($carts as $pro_id=>$cart)
                                                @php

                                                    $total += $cart['price'] * $cart['quantity'];

                                                @endphp
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    <img width="50px" src="/image/{{$cart['image']}}"  alt="{{$cart['name']}}" />
                                                </td>
                                                <td class="product-name">
                                                    {{$cart['name']}}<strong class="product-quantity"> ×
                                                        {{$cart['quantity']}}</strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="amount">{{number_format($cart['price'] * $cart['quantity'])}}$</span>
                                                </td>
                                            </tr>


                                            </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Tổng tiền hàng</th>
                                                <th><strong></strong></th>
                                                <td><span class="amount">{{number_format($total)}}$</span></td>
                                            </tr>
                                            <tr class="shipping">
                                                <th>Phí Vận Chuyển</th>
                                                <th><strong></strong></th>
                                                <td>
                                                    <ul>
                                                        <li></li>
                                                        <label>30$</label>
                                                        </li>
                                                        <li></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Tổng đơn hàng</th>
                                                <th><strong></strong></th>
                                                <td><strong><span  class="amount">{{$total +30}}$</span></strong>
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="payment-method">
                                        <div class="payment-accordion">
                                            <div class="collapses-group">
                                                <div class="panel-group" id="accordion" role="tablist"
                                                     aria-multiselectable="true">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingOne">
                                                            <h4 class="panel-title">
                                                               Hình Thức Thanh Toán: Trả bằng thẻ
                                                            </h4>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="your-order">
                                    <h3>Checkout Method</h3>

                                    <div class="payment-method">
                                        <div class="payment-accordion">
                                            <div class="collapses-group">
                                                <div class="panel-group" id="accordion" role="tablist"
                                                     aria-multiselectable="true">


                                                    <div class="card-check preload">
                                                        <div class="creditcard">
                                                            <div class="front">
                                                                <div id="ccsingle"></div>
                                                                <svg version="1.1" id="cardfront" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                     x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                    <g id="Front">
                        <g id="CardBackground">
                            <g id="Page-1_1_">
                                <g id="amex_1_">
                                    <path id="Rectangle-1_1_" class="lightcolor grey" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                            C0,17.9,17.9,0,40,0z" />
                                </g>
                            </g>
                            <path class="darkcolor greydark" d="M750,431V193.2c-217.6-57.5-556.4-13.5-750,24.9V431c0,22.1,17.9,40,40,40h670C732.1,471,750,453.1,750,431z" />
                        </g>
                        <text transform="matrix(1 0 0 1 60.106 295.0121)" id="svgnumber" class="st2 st3 st4">0123 4567 8910 1112</text>
                        <text transform="matrix(1 0 0 1 54.1064 428.1723)" id="svgname" class="st2 st5 st6">YASUO</text>
                        <text transform="matrix(1 0 0 1 54.1074 389.8793)" class="st7 st5 st8">cardholder name</text>
                        <text transform="matrix(1 0 0 1 479.7754 388.8793)" class="st7 st5 st8">expiration</text>
                        <text transform="matrix(1 0 0 1 65.1054 241.5)" class="st7 st5 st8">card number</text>
                        <g>
                            <text transform="matrix(1 0 0 1 574.4219 433.8095)" id="svgexpire" class="st2 st5 st9">01/23</text>
                            <text transform="matrix(1 0 0 1 479.3848 417.0097)" class="st2 st10 st11">VALID</text>
                            <text transform="matrix(1 0 0 1 479.3848 435.6762)" class="st2 st10 st11">THRU</text>
                            <polygon class="st2" points="554.5,421 540.4,414.2 540.4,427.9 		" />
                        </g>
                        <g id="cchip">
                            <g>
                                <path class="st2" d="M168.1,143.6H82.9c-10.2,0-18.5-8.3-18.5-18.5V74.9c0-10.2,8.3-18.5,18.5-18.5h85.3
                        c10.2,0,18.5,8.3,18.5,18.5v50.2C186.6,135.3,178.3,143.6,168.1,143.6z" />
                            </g>
                            <g>
                                <g>
                                    <rect x="82" y="70" class="st12" width="1.5" height="60" />
                                </g>
                                <g>
                                    <rect x="167.4" y="70" class="st12" width="1.5" height="60" />
                                </g>
                                <g>
                                    <path class="st12" d="M125.5,130.8c-10.2,0-18.5-8.3-18.5-18.5c0-4.6,1.7-8.9,4.7-12.3c-3-3.4-4.7-7.7-4.7-12.3
                            c0-10.2,8.3-18.5,18.5-18.5s18.5,8.3,18.5,18.5c0,4.6-1.7,8.9-4.7,12.3c3,3.4,4.7,7.7,4.7,12.3
                            C143.9,122.5,135.7,130.8,125.5,130.8z M125.5,70.8c-9.3,0-16.9,7.6-16.9,16.9c0,4.4,1.7,8.6,4.8,11.8l0.5,0.5l-0.5,0.5
                            c-3.1,3.2-4.8,7.4-4.8,11.8c0,9.3,7.6,16.9,16.9,16.9s16.9-7.6,16.9-16.9c0-4.4-1.7-8.6-4.8-11.8l-0.5-0.5l0.5-0.5
                            c3.1-3.2,4.8-7.4,4.8-11.8C142.4,78.4,134.8,70.8,125.5,70.8z" />
                                </g>
                                <g>
                                    <rect x="82.8" y="82.1" class="st12" width="25.8" height="1.5" />
                                </g>
                                <g>
                                    <rect x="82.8" y="117.9" class="st12" width="26.1" height="1.5" />
                                </g>
                                <g>
                                    <rect x="142.4" y="82.1" class="st12" width="25.8" height="1.5" />
                                </g>
                                <g>
                                    <rect x="142" y="117.9" class="st12" width="26.2" height="1.5" />
                                </g>
                            </g>
                        </g>
                    </g>
                                                                    <g id="Back">
                                                                    </g>
                </svg>
                                                            </div>
                                                            <div class="back">
                                                                <svg version="1.1" id="cardback" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                     x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                    <g id="Front">
                        <line class="st0" x1="35.3" y1="10.4" x2="36.7" y2="11" />
                    </g>
                                                                    <g id="Back">
                                                                        <g id="Page-1_2_">
                                                                            <g id="amex_2_">
                                                                                <path id="Rectangle-1_2_" class="darkcolor greydark" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                        C0,17.9,17.9,0,40,0z" />
                                                                            </g>
                                                                        </g>
                                                                        <rect y="61.6" class="st2" width="750" height="78" />
                                                                        <g>
                                                                            <path class="st3" d="M701.1,249.1H48.9c-3.3,0-6-2.7-6-6v-52.5c0-3.3,2.7-6,6-6h652.1c3.3,0,6,2.7,6,6v52.5
                    C707.1,246.4,704.4,249.1,701.1,249.1z" />
                                                                            <rect x="42.9" y="198.6" class="st4" width="664.1" height="10.5" />
                                                                            <rect x="42.9" y="224.5" class="st4" width="664.1" height="10.5" />
                                                                            <path class="st5" d="M701.1,184.6H618h-8h-10v64.5h10h8h83.1c3.3,0,6-2.7,6-6v-52.5C707.1,187.3,704.4,184.6,701.1,184.6z" />
                                                                        </g>
                                                                        <text transform="matrix(1 0 0 1 621.999 227.2734)" id="svgsecurity" class="st6 st7">985</text>
                                                                        <g class="st8">
                                                                            <text transform="matrix(1 0 0 1 518.083 280.0879)" class="st9 st6 st10">security code</text>
                                                                        </g>
                                                                        <rect x="58.1" y="378.6" class="st11" width="375.5" height="13.5" />
                                                                        <rect x="58.1" y="405.6" class="st11" width="421.7" height="13.5" />
                                                                        <text transform="matrix(1 0 0 1 59.5073 228.6099)" id="svgnameback" class="st12 st13">Yasuo</text>
                                                                    </g>
                </svg>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <form action="{{route('order',Auth::user()->id)}}" method="post">
                                                        @csrf

                                                        <div class="form-container">
                                                            <div class="field-container">
                                                                <label for="name">Name</label>
                                                                <input id="name" maxlength="20"  name="card_name" type="text">
                                                            </div>
                                                            <div class="field-container">
                                                                <label for="cardnumber">Card Number</label><span id="generatecard">generate random</span>
                                                                <input id="cardnumber" type="text" name="card_number"  inputmode="numeric">
                                                                <svg id="ccicon" class="ccicon" width="750" height="471" viewBox="0 0 750 471" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink">

                                                                </svg>
                                                            </div>
                                                            <div class="field-container">
                                                                <label for="expirationdate">Expiration (mm/yy)</label>
                                                                <input id="expirationdate" name="expiration" type="text"  inputmode="numeric">
                                                            </div>
                                                            <div class="field-container">
                                                                <label for="securitycode">Security Code</label>
                                                                <input id="securitycode" name="secure_code" type="text"  inputmode="numeric">
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="order-button-payment">
                                            <input type="submit" value="Confirm payment" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- checkout-area end -->
        </div>
        <!-- shop-main-area end -->
    </div>
    <script src="{{asset('niceadmin/trang-chu/js/checkout.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>
    @endsection
