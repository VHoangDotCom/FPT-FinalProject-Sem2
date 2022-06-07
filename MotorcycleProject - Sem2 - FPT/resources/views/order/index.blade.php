@extends('layout.index')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Order Management</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item">Category</li>
                    <li class="breadcrumb-item active">List categories</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">

                            <h5 class="card-title"> Order</h5>
                            @if($message = Session::get('success'))
                                <div class="alert alert-success">
                                    {{$message}}
                                </div>
                            @endif
                            <div class="card-body">
                                <h5 class="card-title"></h5>


                                <!-- Table with stripped rows -->
                                <div>


                                    @if(sizeof($checkouts) > 0)
                                        <table class="table datatable">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">ToTal</th>


                                                <th scope="col">Action</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                            @foreach($checkouts as $checkout)
                                                <tr>
                                                    <th  scope="row">{{++$i}}</th>
                                                    <td >{{$checkout->name}}</td>
                                                    <td>
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
                                                    </td>
                                                    <td>{{$checkout->phone}}</td>
                                                    <td>{{$checkout->quantity}}</td>
                                                    <td>{{number_format($checkout->total)}}$</td>


                                                    <td>

                                                            <a href="{{route('orders.show',$checkout->id)}}" class="btn btn-"><i class="bi bi-eye-fill"></i></a></form>


                                                    </td>
                                                </tr>
                                                @endforeach
                                                </tr>

                                                </tr>
                                            </tbody>
                                        </table>
                                    @endif
                                    {!! $checkouts->links() !!}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
