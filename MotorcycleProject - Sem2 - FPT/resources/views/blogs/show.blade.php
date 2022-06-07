@extends('layout.index')
@section('content')

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Blogs</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item">Blogs</li>
                    <li class="breadcrumb-item active">Blog detail</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title : </strong>
                    {{$blog->title}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description : </strong>
                    {{$blog->description}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Author : </strong>
                    {{$blog->createdBy}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image : </strong>
                    {{$blog->image}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date : </strong>
                    {{$blog->created_at}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Last update : </strong>
                    {{$blog->updated_at}}
                </div>
            </div>

            <br><br>


            <div class="card" >
                <div class="card-body"  >
                    <input type="text" name="heading" style="border: none;" class="card-title" value="{{$blog->title}}">
                    <!-- TinyMCE Editor -->
                    <textarea name="blog_content"   class="tinymce-editor">{{$blog->content}}</textarea><!-- End TinyMCE Editor -->

                </div>
            </div>

<!-- End Show Blogs -->

            <div class="row " style="float:left;">
                <div class="col-lg-12 text-center" style="margin-bottom: 10px;margin-top: 10px;float: right">
                    <a style="height: 40px;"  href="{{ url('blogs/word-export/' . $blog->id) }}" class="btn btn-primary"><i class="bi bi-file-earmark-word"></i>  Export </a>
                    <a href="{{route('blogs.index')}}" class="btn btn-primary"><i class="bi bi-chevron-double-left"></i> Back</a>
                </div>
            </div>
        </div>
    </main>


@endsection
