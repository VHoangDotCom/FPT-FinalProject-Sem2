@extends('layout.index')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Create Users</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item">Product Management</li>
                    <li class="breadcrumb-item active">Create product for people</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Create Users</h5>

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
                            <form class="row g-3" action="{{route('users.store')}}"  enctype="multipart/form-data" method="post">
                                @csrf


                                <div class="col-md-12">
                                    <label for="inputName5" class="form-label"> Name:</label>
                                    <input type="text" class="form-control" id="inputName5"  name="name" placeholder="Enter the  name">
                                </div>

                                <div class="col-md-12">
                                    <label for="inputEmail5" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="inputEmail5"  name="email" placeholder="Enter the email">
                                </div>

                                <div class="col-12">
                                    <label for="inputAddress5" class="form-label">Password:</label>
                                    <input type="password" class="form-control" id="inputAddres5s" placeholder="Enter the password" name="password">
                                </div>


                                <div class="text-center" style="margin-top: 10px">
                                    <button type="submit" class="btn btn-primary">Submit</button>

                                    <a href="{{route('users.index')}}" class="btn btn-primary">Back</a>
                                </div>
                            </form><!-- End Multi Columns Form -->

                        </div>
                    </div>

                </div>


            </div>
        </section>

    </main><!-- End #main -->
@endsection
