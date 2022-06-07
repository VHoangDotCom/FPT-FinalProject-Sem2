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
        <ol class="breadcrumb"></ol>
    </nav>
    <div class="pagetitle" style="margin-left: 150px">
        <h1>Tài Khoản Của Tôi</h1>
    </div><!-- End Page Title -->
    <div class="row" style="margin-left:150px ">

        <div style="float: left; margin-right:50px ">
            @if($message = Session::get('success'))
                <div class="alert alert-success">
                    {{$message}}
                </div>
            @endif
            <div class="pagetitle">
                <h2>Thông Tin Tài Khoản</h2>
            </div><!-- End Page Title -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="user-thumbnail">
                    <img src="/image/default-thumbnail.jpg" style="width: 150px;height: 150px;margin-left: 50px" alt="">

                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email :
                    @switch($user->email )
                        @case(null)
                        Chưa Cập Nhật
                        @break
                      @default
                            {!! $user->email  !!}
                        @break
                        @endswitch
                    </strong>

                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Điện Thoại:
                        @switch($user->phone)
                            @case(null)
                            Chưa Cập Nhật
                            @break
                            @default
                            {!! $user->phone  !!}
                            @break
                        @endswitch</strong>

                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> Tên:
                        @switch($user->name)
                            @case(null)
                            Chưa Cập Nhật
                            @break
                            @default
                            {!! $user->name !!}
                            @break
                        @endswitch</strong>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Địa Chỉ :@switch($user->address)
                            @case(null)
                            Chưa Cập Nhật
                            @break
                            @default
                            {!!$user->address!!}
                            @break
                        @endswitch</strong>

                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <a href="{{route('profile.edit',$user->id)}}">
                        <button style="padding: 7px ;color: red"><h5>Thay Đổi Thông Tin</h5></button></a>

                </div>
                <div class="buttons">
                    <div class="pull-right">
                        <a href="/" class="btn btn-primary btn-continue">Tiếp Tục Mua Sắm</a>
                    </div>
                </div>
            </div>




        </div>

        <div style="float: right; margin-left:50px ">
            <nav>
                <ol class="breadcrumb"></ol>
            </nav>
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

                                            <th scope="col">Mã Đơn Hàng</th>
                                            <th scope="col">Ngày Tạo Đơn Hàng</th>
                                            <th scope="col">Tổng Tiền</th>
                                            <th scope="col">Trạng Thái</th>
                                            <th scope="col">Chi Tiết</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                        @foreach($checkouts as $id=> $checkout)
                                            <tr>

                                                <td>{{$checkout->id}}</td>
                                                <td>{{$checkout->created_at}}</td>
                                                <td>{{number_format($checkout->total)}}$</td>
                                                <td>@switch($checkout->status)
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

                                                    @endswitch
                                                </td>
                                                <td>
                                                    <a href="{{route('showOrder',$checkout->id)}}"><i
                                                            class="fa fa-info-circle fa-2x"></i></a>
                                                </td>



                                            </tr>
                                            @endforeach
                                            </tr>

                                            </tr>
                                        </tbody>
                                    </table>



                                </div>


                    </div>
                </div>
            </div>
            <nav>
                <ol class="breadcrumb"></ol>
            </nav>
        </div>


    </div>




@endsection
