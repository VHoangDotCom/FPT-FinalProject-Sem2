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
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/css/blog.css')}}">
    <main id="main" class="main">
        <section class="page-title bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">Your order detail</span>
                            <h1  class="text-capitalize mb-4 text-lg"> Order Detail</h1>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="{{route('/')}}" class="text-white">Home</a></li>
                                <li class="list-inline-item"><a href="{{route('profile')}}" class="text-white">/Order Details</a><span class="text-white"></span></li>
                                <li class="list-inline-item"><a href="#" class="text-white-50">/Review</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <nav>
            <ol class="breadcrumb">



            </ol>
        </nav>
        <div class="pagetitle" style="margin-left: 100px">
            <h1>Tài Khoản Của Tôi</h1>
        </div><!-- End Page Title -->
        <div class="row" style="margin-left:100px ">

            <div style="float: left;">

                <div class="pagetitle">
                    <h2>Thông Tin Đơn Hàng</h2>
                </div><!-- End Page Title -->


                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Ngày tạo đơn hàng :{{$checkout->created_at}}</strong>

                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Người nhận:
                           {{$checkout->name}}</strong>

                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong> Địa chỉ:
                           {{$checkout->address}}-{{$checkout->district}}-{{$checkout->ward}}-{{$checkout->city}}</strong>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Số điện thoại :{{$checkout->phone}}</strong>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Trạng Thái:@switch($checkout->status)
                                @case(0)
                                Chờ Xác Nhận
                                @break
                                @case(1)
                                Đang Giao Hàng
                                @break

                                @case(2)
                                Đã Thanh Toán
                                @break

                                @case(3)
                                Đã Hủy Đơn
                                @break

                            @endswitch</strong>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Hình Thức Thanh toán: Giao dịch bằng thẻ</strong>

                    </div>
                </div>






            </div>

            <div style="float: right; ">

                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">

                            <h5 class="card-title" style="text-align: center">Lịch Sử Đặt Hàng</h5>
                            @if($message = Session::get('success'))
                                <div class="alert alert-success">
                                    {{$message}}
                                </div>
                            @endif

                            <h5 class="card-title"></h5>

                            <!-- Table with stripped rows -->
                            <div>


                                <table class="table datatable">
                                    <thead>
                                    <tr>


                                        <th scope="col">Sản Phẩm</th>
                                        <th scope="col">Số Lượng</th>
                                        <th scope="col">Đơn Giá</th>



                                    </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($orders as $order)

                                        <tr>


                                            <td>{{$order->pro_name}}</td>

                                            <td>{{$order->quantity}}</td>
                                            <td>{{number_format($order->total_price)}}$</td>





                                        </tr>

                                        </tr>
                                      @endforeach



                                    </tbody>
                                </table>



                            </div>


                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group" style="margin-left: 500px">
                        <strong>Tổng Tiền + Tiền Ship:{{number_format($checkout->total)}}$</strong>

                    </div>
                </div>

                <div class="buttons">
                    <div class="pull-right">
                        <a href="/" class="btn btn-primary btn-continue">Tiếp Tục Mua Sắm</a>
                    </div>
                </div>

            </div>

        </div>
        <nav>
            <ol class="breadcrumb"></ol>
        </nav>

    </main>



@endsection
