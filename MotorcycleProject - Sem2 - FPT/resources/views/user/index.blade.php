@extends('layout.index')
@section('content')


    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Product</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item">Product for People</li>
                    <li class="breadcrumb-item active">List Products</li>
                </ol>
            </nav>

        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        @if($message = Session::get('success'))
                            <div class="alert alert-success">
                                {{$message}}
                            </div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">Product for People</h5>
                            <div class="dataTable-top" style="float: right" >
                                <a href="{{route('users.create')}}"  class="btn btn-success"><i class="bi bi-plus">  Add</i></a>

                            </div>

                            <div>

                                @if(sizeof($users) > 0)
                                    <table class="table datatable">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Permission</th>
                                            <th scope="col" >Grant Permission</th>
                                            <th scope="col" >Delete</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                        @foreach($users as $user)

                                            <tr>
                                                <td>{{++$i}}</td>

                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->role}}</td>


                                                <td>
                                                    <form action="{{route('users.destroy',$user->id)}}" method="post">
                                                        <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary"><i class="bi bi-file-earmark-font"> Grant Admin</i> </a>
                                                    </form>
                                                </td>


                                                <td>
                                                    <form action="{{route('users.destroy',$user->id)}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"> Delete</i>  </button>
                                                    </form>
                                                </td>

                                            </tr>

                                            @endforeach
                                            </tr>
                                        </tbody>
                                    </table>
                                @endif
                                {!! $users->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
