@extends('layout.index')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Create Product Moto</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item">Product Management</li>
                    <li class="breadcrumb-item active">Create Items</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Product Moto </h5>

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

                        <!-- Multi Columns Form -->
                            <form class="row g-3" action="{{route('productMoto.store')}}"  enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="col-md-12">
                                    <label for="inputState" class="form-label " >Category Name:</label>
                                    <select id="inputState" class="form-select" name="cate_id">
                                        <option value="0">Choose category from the list</option>
                                        {!!$htmlOption !!} }
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Product Name:</label>
                                    <input type="text" class="form-control" id="inputName5"  name="productName" placeholder="Enter the Product name">
                                </div>

                                <div class="col-md-12">
                                    <label for="inputEmail5" class="form-label">Title:</label>
                                    <input type="text" class="form-control" id="inputEmail5"  name="title" placeholder="Enter the title">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Description:</label>
                                    <div class="col-sm-10">
                                        <textarea name="description" placeholder="Enter description" class="form-control" id="inputEmail5" style="width: 950px"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress5" class="form-label">Price($) :</label>
                                    <input type="number" class="form-control" id="inputAddres5s" placeholder="Enter the Price" name="pro_new_price">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress5" class="form-label">Discount(%) :</label>
                                    <input type="number" class="form-control" id="inputAddres5s"  placeholder="Enter the Discount" name="pro_sale">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress5" class="form-label">Quantity</label>
                                    <input type="number" class="form-control" id="inputAddres5s"  placeholder="Enter the Quantity" name="quantity">
                                </div>


                                <div class="col-6 " style="float: left">
                                    <label for="inputNumber" class="form-label">Product Image</label>
                                    <input name="image"  class="form-control" type="file" id="formFile" >
                                </div>
                                <div class="col-6 " style="float: right">
                                    <label for="inputState" class="form-label " >Product Type:</label>
                                    <select id="inputState" class="form-select" name="productType">
                                        <option value="">Choose category from the list</option>
                                        <option value="1">Product Of People</option>
                                        <option value="2">Product Of Motor</option>

                                    </select>
                                </div>




                                <div class="col-6">
                                    <label for="inputState" class="form-label " >Status:</label>
                                    <select id="inputState" class="form-select" name="status">
                                        <option value="0">Choose the Product Status:</option>
                                        <option value="In Stock">In Stock</option>
                                        <option value="Out of Stock">Out of Stock</option>
                                    </select>
                                </div>
                                <div class="text-center" style="margin-top: 10px">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                    <a href="{{route('productMoto.index')}}" class="btn btn-primary">Back</a>
                                </div>
                            </form><!-- End Multi Columns Form -->

                        </div>
                    </div>

                </div>


            </div>
        </section>

    </main><!-- End #main -->
@endsection
