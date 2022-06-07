@extends('layout.index')
@section('content')

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Product Management</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item">Items for Motor</li>
                    <li class="breadcrumb-item active">Review</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Name : </strong>
                    {{$product->productName}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title : </strong>
                    {{$product->title}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description : </strong>
                    {{$product->description}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> Old Price(VND) :</strong>
                    {{$product->pro_old_price}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>New Price(VND) :</strong>
                    {{$product->pro_new_price}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Discount : </strong>
                    {{$product->pro_sale}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quantity : </strong>
                    {{$product->quantity}}
                </div>
            </div>




            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Type : </strong>
                    {{'Product for People'}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status : </strong>
                    {{$product->status}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Last updated : </strong>
                    {{$product->updated_at}}
                </div>
            </div>

            <div class="row " style="float:left;">
                <div class="col-lg-12 text-center" style="margin-bottom: 10px;margin-top: 10px;float: right">
                    <a href="{{route('productMoto.index')}}" class="btn btn-primary"><i class="bi bi-chevron-double-left"></i> Back</a>
                </div>
            </div>

        </div>

    </main>


@endsection
