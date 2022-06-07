@extends('layout.index')
@section('content')

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Blogs</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item">Blogs</li>
                    <li class="breadcrumb-item active">List Blogs</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li style="font-size: 20px;" class="breadcrumb-item"><a href="{{route('blogs.create')}}"><i class="bi bi-file-earmark-plus"></i> Add Blogs</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <!-- Show Blogs here -->
        @if($message = Session::get('success'))
            <div class="alert alert-success">
                {{$message}}
            </div>
        @endif

        @if(sizeof($blogs)>0)

            <section class="section">
                <div class="row align-items-top">
                    <div class="col-lg-6">

                    @foreach($blogs as $blog)
                        <!-- Default Card -->
                            <div class="card" >
                                <div class="card-header">Blog {{++$i}} - Author : {{$blog->createdBy}}</div>
                                <div class="card-body">

                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <a href="/image/{{$blog->image}}" download>
                                            <img src="/image/{{$blog->image}}" title="Click image to download"  class="img-fluid rounded-start" alt="..." >
                                            </a>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title"><a href="{{route('blogs.show',$blog->id)}}">{{$blog->title}}</a></h5>
                                                <p class="card-text">{{$blog->description}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer" >
                                    <form action="{{route('blogs.destroy',$blog->id)}}" method="post">

                                        <p style="float: right; margin-left: 40px;" class="card-text" ><a href="{{route('blogs.show',$blog->id)}}"  class="btn btn-primary" ><i class="bi bi-eye"></i>  Review</a></p>
                                        <p style="float: right;margin-left: 40px;" class="card-text"><a href="{{route('blogs.edit',$blog->id)}}" class="btn btn-primary"><i class="bi bi-file-earmark-font"></i>  Edit </a></p>
                                        @csrf
                                        @method('DELETE')
                                        <button style="float: right; margin-left: 40px;" type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</button>

                                    </form>
                                </div>
                            </div><!-- End Card with header and footer -->
                        @endforeach

                        @else
                            <div style="color: #3e4f6f" class="alert alert-alert">Start Adding to the Database.</div>
                        @endif

                        {!! $blogs->links() !!}

                    </div>
                </div>
            </section>
    </main><!-- End #main -->

@endsection

