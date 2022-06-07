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
    <div class="wapper">
        <section class="page-title bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">Your Profile</span>
                            <h1  class="text-capitalize mb-4 text-lg"> Profile Detail</h1>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="{{route('/')}}" class="text-white">Home</a></li>
                                <li class="list-inline-item"><a href="{{route('profile')}}" class="text-white">/Profile</a><span class="text-white"></span></li>
                                <li class="list-inline-item"><a href="#" class="text-white-50">/Update</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="pagetitle" style="margin-left: 150px">
            <h1>Tài Khoản Của Tôi</h1>
        </div><!-- End Page Title -->
        <div style="margin-left:500px;margin-top: 50px ">
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
            <h3>Thay đổi thông tin tài khoản</h3>
            <form action="{{route('profile.update',$user->id)}}" method="post">
                @csrf
                <div class="row mb-3">
                    <label for="name" style="font-size: 20px">Email: </label>
                    <input type="email" name="email" style="margin-left: 48px" value="{{$user->email}}" placeholder="Mời Nhập Email">
                </div>

                <div class="row mb-3">
                    <label for="name" style="font-size: 20px">Điện Thoại: </label>
                    <input type="number" name="phone" value="{{$user->phone}}" placeholder="Mời Nhập Số Điện Thoại">
                </div>

                <div class="row mb-3">
                    <label for="name" style="font-size: 20px">Tên: </label>
                    <input type="text" name="name" style="margin-left: 63px" value="{{$user->name}}" placeholder="Mời Nhập Tên">
                </div>

                <div class="row mb-3">
                    <label for="name" style="font-size: 20px">Địa Chỉ: </label>
                    <input type="text" name="address" style="margin-left: 30px" value="{{$user->address}}" placeholder="Mời Nhập Địa Chỉ">
                </div>

                <div class="col-sm-10" style="margin-left: 58px">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                </div>

            </form>


        </div>



    </div>



@endsection
