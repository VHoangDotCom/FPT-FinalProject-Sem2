@extends('layout.index')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Category Management</h1>
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

                            <h5 class="card-title"> Categories List</h5>
                            @if($message = Session::get('success'))
                                <div class="alert alert-success">
                                    {{$message}}
                                </div>
                            @endif
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <div class="dataTable-top" style="float: right" >
                                    <a href="{{route('categories.create')}}" class="btn btn-success">Add</a>
                                </div>

                                <!-- Table with stripped rows -->
                                <div>


                                    @if(sizeof($categories) > 0)
                                        <table class="table datatable">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Category Name</th>
                                                <th scope="col">Description</th>


                                                <th scope="col">More</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                            @foreach($categories as $category)
                                                <tr>
                                                    <th  scope="row">{{++$i}}</th>
                                                    <td >{{$category->categoryName}}</td>
                                                    <td>{{$category->description}}</td>


                                                    <td>
                                                        <form action="{{route('categories.destroy',$category->cate_id)}}" method="post">

                                                            <a href="{{route('categories.edit',$category->cate_id)}}" class="btn btn-primary">Edit</a>
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-danger">Delete </button>
                                                        </form>


                                                    </td>
                                                </tr>
                                                @endforeach
                                                </tr>

                                                </tr>
                                            </tbody>
                                        </table>
                                @endif
                                {!! $categories->links() !!}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
