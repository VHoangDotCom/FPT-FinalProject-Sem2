@extends('layout.index')
@section('content')

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Blogs</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item">Blogs</li>
                    <li class="breadcrumb-item active">Update Blogs</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        @if($errors->any())
            <div class="alert alert-danger">
                <strong>Error!</strong> Check your input data.<br><br>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
    @endif

    <!-- Create Blog -->
        <section class="section">

            <form action="{{route('blogs.update', $blog->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Blog Information</h5>

                            <!-- General Form Elements -->

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Blog Code</label>
                                <div class="col-sm-10">
                                    <input type="text" name="blogCode" value="{{$blog->blogCode}}" class="form-control" placeholder="Enter blog code here">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input name="title" type="text" value="{{$blog->title}}" placeholder="Enter blog title" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Author</label>
                                <div class="col-sm-10">
                                    <input name="createdBy" type="text" value="{{$blog->createdBy}}" placeholder="Author name" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Image Upload</label>
                                <div class="col-sm-10">
                                    <input name="image" placeholder="Upload image here" value="{{$blog->image}}" class="form-control" type="file" id="formImage">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
                                <div class="col-sm-10">
                                    <input name="created_at" value="{{$blog->created_at}}" type="time" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea name="description" placeholder="Blog description" class="form-control" style="height: 100px">{{$blog->description}}</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"> Blog Topic </label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Choose your topic</option>
                                        <option value="1">Motorcycle Lives</option>
                                        <option value="2">Our Products</option>
                                        <option value="3">Our Services</option>
                                        <option value="4">Other</option>
                                    </select>
                                </div>
                            </div>
                            <!-- End General Form Elements -->
                        </div>
                    </div>



                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">TinyMCE Editor</h5>

                            <!-- TinyMCE Editor -->
                            <textarea name="content" placeholder="Write Blog here..." class="tinymce-editor">{{$blog->content}}</textarea><!-- End TinyMCE Editor -->

                        </div>
                    </div>


                    <div class="row mb-3" >
                        <div class="col-sm-10">
                            <button  type="submit" class="btn btn-primary">Submit your blog</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>

@endsection
