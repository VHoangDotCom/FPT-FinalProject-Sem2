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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/css/productpage.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.0/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/css/blog.css')}}">
    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Thank you for choosing our Products</span>
                        <h1  class="text-capitalize mb-4 text-lg"> Motorcycle Accessories</h1>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="{{route('/')}}" class="text-white">Home</a></li>
                            <li class="list-inline-item"><span class="text-white">/List Products</span></li>
                            <li class="list-inline-item"><span class="text-white">/Detail</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="product-details-main">
        <div class="container">
            <div class="product-details-box">
                <div class="product-details-img">
                    <img id="product_img" src="/image/{{$product->image}}" alt="helmet" width="80%">

                </div>
                <div class="product-details-in4">

                    <h1>{{$product->productName}}</h1>
                    <div class="price_detail">
                        <h4>{{$product->pro_new_price}}$</h4>
                    </div>
                    <div class="price_detail">
                        <h4>Kho còn: {{$product->quantity}} Sản Phẩm</h4>
                    </div>
                    <h3 class="product-details-title">Product Details</h3>
                    <p>{{$product->title}}
                    </p>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="size">Size</label>
                            <select id="size" name="size" class="form-control">
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>
                                <option>XL</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="color">Color</label>
                            <select id="color" name="color" class="form-control">
                                <option>Blue</option>
                                <option>Green</option>
                                <option>Red</option>
                            </select>
                        </div>
                        <div class="product-count">
                            <label for="size">Quantity</label>
                            <form action="#" class="display-flex">
                                <div class="qtyminus">-</div>
                                <input oninput="this.value = !!this.value && Math.abs(this.value) > 0 ? Math.abs(this.value) : null" type="text"  name="quantity" min="1" value="1" class="qty">
                                <div class="qtyplus">+</div>
                            </form>

                            <a href="#" class="round-black-btn add-to-cart-button" data-name="{{$product->productName}}" data-url="{{route('add.to.cart',$product->pro_id)}}">Add Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-info-tabs">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item active">
                        <a id="description-tab" data-toggle="tab" href="#description" role="tab">Description</a>
                    </li>
                    <li class="nav-item">
                        <a id="review-tab" data-toggle="tab" href="#review" role="tab">Reviews (0)</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="description">
                        {{$product->description}}
                    </div>
                    <div class="tab-pane show fade " id="review">
                        <div class="review-heading">REVIEWS</div>
                        <p class="mb-20">There are no reviews yet.</p>
                        <form class="review-form">
                            <div class="form-group">
                                <label>Your rating</label>
                                <div class="reviews-counter">
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Your message</label>
                                <textarea class="form-control" rows="10"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="" class="form-control" placeholder="Name*">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="" class="form-control" placeholder="Email Id*">
                                    </div>
                                </div>
                            </div>
                            <button class="round-black-btn">Submit Review</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <! ---- Js for product img ----!>
    <script>
        let ProductImg = document.getElementById("product_img");
        let SmallImg = document.getElementsByClassName("small_img");
        SmallImg[0].onclick = function () {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function () {
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function () {
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function () {
            ProductImg.src = SmallImg[3].src;
        }
    </script>
    <script>
        $("document").ready(function () {
            $(".qtyminus").on("click",function(){
                console.log();
                var now = $(".qty").val();
                if ($.isNumeric(now)){
                    if (parseInt(now) -1> 0)
                    { now--;}
                    $(".qty").val(now);
                }
            })
            $(".qtyplus").on("click",function(){
                var now = $(".qty").val();
                if ($.isNumeric(now)){
                    $(".qty").val(parseInt(now)+1);
                }
            });
        })
    </script>
@endsection
