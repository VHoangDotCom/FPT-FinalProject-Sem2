@extends('layout.index')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Category Management</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item">Category Management</li>
                    <li class="breadcrumb-item active">Create category</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Product Category</h5>

                            @if($errors->any())
                                <div class="alert aler-danger">
                                    <strong>Oops!</strong>There were some problems with your input. <br><br>
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>

                                </div>
                        @endif

                        <!-- Multi Columns Form -->
                            <form class="row g-3" action="{{route('categories.store')}}" method="post">
                                @csrf
                                <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Category Name:</label>
                                    <input type="text" class="form-control" id="inputName5" name="categoryName" placeholder="Enter the category name">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputEmail5" class="form-label">Description:</label>
                                    <input type="text" class="form-control" id="inputEmail5" name="description" placeholder="Enter the title">
                                </div>
                                <div class="text-center" style="margin-top: 10px">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                    <a href="{{route('categories.index')}}" class="btn btn-primary">Back</a>
                                </div>
                            </form><!-- End Multi Columns Form -->

                        </div>
                    </div>

                </div>


            </div>
        </section>

    </main><!-- End #main -->
@endsection
