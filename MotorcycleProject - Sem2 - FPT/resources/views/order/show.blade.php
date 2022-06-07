@extends('layout.index')
@section('content')

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Order Details </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item">Order Details</li>
                    <li class="breadcrumb-item active">Review</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


        <div class="row">



            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> Tên Khách Hàng : </strong>
                    {{$checkout->name}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Địa CHỉ : </strong>
                    {{$checkout->address}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Xã/phường : </strong>
                    {{$checkout->district}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> Quận/huyện :</strong>
                    {{$checkout->ward}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tỉnh/thành phố:</strong>
                    {{$checkout->city}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Hình thức giao hàng :Giao hàng tiêu chuẩn </strong>

                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Hình thức thanh toán :</strong>

                </div>
            </div>


           <div>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">SubTotal</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->pro_name}}</td>
                        <td>{{number_format($order->total_price)}}$</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{number_format(($order->quantity) * ($order->total_price))}}$</td>
                    </tr>
                @endforeach


                </tbody>
            </table>
           </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Phí Ship:30$</strong>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tổng giá:{{$checkout->total}}</strong>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Trạng thái đơn hàng:
                        <form action="{{route('orders.update',$checkout->id)}}" method="post">
                            @csrf
                            @method('PUT')

                                <select name="status" onchange='this.form.submit()' id="">
                                    <option value="0" {{ $checkout->status == '0' ? 'selected' : '' }} disabled>Chờ xác nhận </option>
                                    <option value="1" {{ $checkout->status == '1' ? 'selected' : '' }}>Đang giao hàng</option>
                                    <option value="2" {{ $checkout->status == '2' ? 'selected' : '' }}>Hoàn thành</option>
                                    <option value="3" {{ $checkout->status == '3' ? 'selected' : '' }}>Đã Hủy</option>
                                 </select>

                        </form>


                    </strong>

                </div>
            </div>









        </div>


    </main>


@endsection
