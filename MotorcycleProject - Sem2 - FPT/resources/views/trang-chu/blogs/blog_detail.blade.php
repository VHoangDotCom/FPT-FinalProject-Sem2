@extends('trang-chu.layout.index')
@section('cart')


    <li><a href="{{route('Cart')}}"><i class="icon ion-bag"></i></a>

        <span class="lblCartCount" id="lblCartCount"> {!! $dem !!}</span>
        @foreach($carts as $id=>$cart)
            <div class="mini-cart-sub">
                <div class="cart-product">
                    <div class="single-cart">
                        <div class="cart-img">
                            <a href="#"><img src="/image/{{$cart['image']}}"/></a>
                        </div>
                        <div class="cart-info">
                            <h5><a href="#">{{$cart['name']}}</a></h5>
                            <p>{{$cart['quantity']}} x {{$cart['price']}}</p>
                        </div>
                    </div>
                </div>
                <div class="cart-totals">
                    <h5>Tổng <span></span></h5>
                </div>
                <div class="cart-bottom">
                    <a href="{{route('checkout')}}">Check out</a>
                </div>
            </div>
        @endforeach
    </li>

@endsection
@section('content')
    <!-- Blog CSS -->
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/css/blog.css')}}">

    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/plugins/bootstrap/plugins/themify/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/plugins/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/plugins/magnific-popup/dist/magnific-popup.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/plugins/slick-carousel/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/plugins/slick-carousel/slick/slick-theme.css')}}">
    <div class="main-wrapper ">
        <section class="page-title bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">Blogs in motorcycle field</span>
                            <h1  class="text-capitalize mb-4 text-lg"> Motorcycle Blogs</h1>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="{{route('/')}}" class="text-white">Home</a></li>
                                <li class="list-inline-item"><span class="text-white">/</span></li>
                                <li class="list-inline-item"><a href="#" class="text-white-50">Blogs details</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="section blog-wrap bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-12 mb-5">
                                <div class="single-blog-item">
                                    <img src="{{$blog->image}}" alt="" class="img-fluid rounded">

                                    <div class="blog-item-content bg-white p-5">
                                        <div class="blog-item-meta bg-gray py-1 px-2">
                                            <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i> {{$blog->createdBy}}</span>
                                            <span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>2 Comments</span>
                                            <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i>  {{$blog->updated_at->format('D')}} {{$blog->updated_at->format('M')}}</span>
                                        </div>

                                        <h2 class="mt-3 mb-4"><a href="#">{{$blog->title}}</a></h2>
                                        <p class="lead mb-4">{{$blog->description}}</p>

                                      <p>{{$blog->content}}</p>

                                        <h3 class="quote">A brand for a company is like a reputation for a person. You earn reputation by trying to do hard things well.</h3>

                                        <p class="lead mb-4 font-weight-normal text-black">The same is true as we experience the emotional sensation of stress from our first instances of social rejection ridicule. We quickly learn to fear and thus automatically.</p>

                                        <div class="tag-option mt-5 clearfix">
                                            <ul class="float-left list-inline">
                                                <li>Tags: </li>
                                                <li class="list-inline-item"><a href="#" rel="tag">Motorcycle</a></li>
                                                <li class="list-inline-item"><a href="#" rel="tag">Quote </a></li>
                                                <li class="list-inline-item"><a href="#" rel="tag">Travel</a></li>
                                            </ul>

                                            <ul class="float-right list-inline">
                                                <li class="list-inline-item"> Share: </li>
                                                <li class="list-inline-item"><a href="https://www.facebook.com/tung09733" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                                <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                                <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                                <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12 mb-5">
                                <div class="posts-nav bg-white p-5 d-lg-flex d-md-flex justify-content-between ">
                                    <a class="post-prev align-items-center" href="#">
                                        <div class="posts-prev-item mb-4 mb-lg-0">
                                            <span class="nav-posts-desc text-color">- Previous Post</span>
                                            <h6 class="nav-posts-title mt-1">
                                                ' How to crack Police '
                                            </h6>
                                        </div>
                                    </a>
                                    <div class="border"></div>
                                    <a class="posts-next" href="#">
                                        <div class="posts-next-item pt-4 pt-lg-0">
                                            <span class="nav-posts-desc text-lg-right text-md-right text-color d-block">- Next Post</span>
                                            <h6 class="nav-posts-title mt-1">
                                                ' We bare bear '
                                            </h6>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-12 mb-5">
                                <div class="comment-area card border-0 p-5">
                                    <h4 class="mb-4">2 Comments</h4>
                                    <ul class="comment-tree list-unstyled">
                                        <li class="mb-5">
                                            <div class="comment-area-box">
                                                <img alt="" src="{{URL::asset('niceadmin/trang-chu/images/blog/bt-3.jpg')}}" class="img-fluid float-left mr-3 mt-2">

                                                <h5 class="mb-1">Thanh Tung</h5>
                                                <span>United Kingdom</span>

                                                <div class="comment-meta mt-4 mt-lg-0 mt-md-0 float-lg-right float-md-right">
                                                    <a href="#"><i class="icofont-reply mr-2 text-muted"></i>Reply |</a>
                                                    <span class="date-comm">Posted October 7, 2018 </span>
                                                </div>

                                                <div class="comment-content mt-3">
                                                    <p>Chan qua !! </p>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="comment-area-box">
                                                <img alt="" src="{{URL::asset('niceadmin/trang-chu/images/blog/bt-3.jpg')}}" class="mt-2 img-fluid float-left mr-3">

                                                <h5 class="mb-1">Quyet</h5>
                                                <span>Viet Nam</span>

                                                <div class="comment-meta mt-4 mt-lg-0 mt-md-0 float-lg-right float-md-right">
                                                    <a href="#"><i class="icofont-reply mr-2 text-muted"></i>Reply |</a>
                                                    <span class="date-comm">Posted October 7, 2018</span>
                                                </div>

                                                <div class="comment-content mt-3">
                                                    <p>My eyes !!! </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <form class="contact-form bg-white rounded p-5" id="comment-form">
                                    <h4 class="mb-4">Write a comment</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="name" id="name" placeholder="Name:">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="mail" id="mail" placeholder="Email:">
                                            </div>
                                        </div>
                                    </div>


                                    <textarea class="form-control mb-3" name="comment" id="comment" cols="30" rows="5" placeholder="Comment"></textarea>

                                    <input class="btn btn-main btn-round-full" type="submit" name="submit-contact" id="submit_contact" value="Submit Message">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar-wrap">
                            <div class="sidebar-widget search card p-4 mb-3 border-0">
                                <input type="text" class="form-control" placeholder="search">
                                <a href="#" class="btn btn-mian btn-small d-block mt-2">search</a>
                            </div>

                            <div class="sidebar-widget card border-0 mb-3">
                                <img src="https://scontent.fhan14-2.fna.fbcdn.net/v/t31.18172-8/12310083_544680302363202_3052199910046784527_o.jpg?_nc_cat=109&ccb=1-5&_nc_sid=f9d7a1&_nc_ohc=1brh5hEflSoAX8iyw5F&_nc_ht=scontent.fhan14-2.fna&oh=00_AT_MRxpx9u_uVRuxz00qZiCmoDoLj8kSCgv46WUB_SVVmw&oe=61F0A965" alt="" class="img-fluid">
                                <div class="card-body p-4 text-center">
                                    <h5 class="mb-0 mt-4">Anh Duc</h5>
                                    <p> Bootstrap God</p>
                                    <p>Best Vaper in the world .</p>

                                    <ul class="list-inline author-socials">
                                        <li class="list-inline-item mr-3">
                                            <a href="#"><i class="fab fa-facebook-f text-muted"></i></a>
                                        </li>
                                        <li class="list-inline-item mr-3">
                                            <a href="#"><i class="fab fa-twitter text-muted"></i></a>
                                        </li>
                                        <li class="list-inline-item mr-3">
                                            <a href="#"><i class="fab fa-linkedin-in text-muted"></i></a>
                                        </li>
                                        <li class="list-inline-item mr-3">
                                            <a href="#"><i class="fab fa-pinterest text-muted"></i></a>
                                        </li>
                                        <li class="list-inline-item mr-3">
                                            <a href="#"><i class="fab fa-behance text-muted"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar-widget latest-post card border-0 p-4 mb-3">
                                <h5>Latest Posts</h5>




                                @foreach($blogs as $blog)
                                    <div class="media border-bottom py-3">
                                        <a href="{{route('blog_detail',$blog->id)}}"><img class="mr-4" src="{{URL::asset('niceadmin/trang-chu/images/blog/bt-3.jpg')}}" width="100px" height="100px" alt="blog"></a>
                                        <div class="media-body">
                                            <h6 class="my-2"><a href="{{route('blog_detail',$blog->id)}}">{{$blog->title}}</a></h6>
                                            <span class="text-sm text-muted">{{$blog->updated_at->format('D')}} {{$blog->updated_at->format('M')}} {{$blog->updated_at->format('Y')}}</span>
                                        </div>
                                    </div>

                                @endforeach


                            </div>

                            <div class="sidebar-widget bg-white rounded tags p-4 mb-3">
                                <h5 class="mb-4">Tags</h5>

                                <a href="#">Web</a>
                                <a href="#">MotorCycle</a>
                                <a href="#">Accessory</a>
                                <a href="#">Gloves</a>
                                <a href="#">Blogs</a>
                                <a href="#">Safe</a>
                                <a href="#">Social Media</a>
                                <a href="#">Branding</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- footer Start -->
    </div>

@endsection
