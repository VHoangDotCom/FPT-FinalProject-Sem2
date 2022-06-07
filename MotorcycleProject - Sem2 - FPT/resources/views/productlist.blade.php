@extends('trang-chu.layout.index')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/css/productlist.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.0/css/boxicons.min.css' rel='stylesheet'>


    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="" class="" alt="...">
                <div class="carousel-caption ">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                    <a href="#" class="btn btn-lg btn-primary">Get A Quote</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="" class="" alt="...">
                <div class="carousel-caption ">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="" class="" alt="...">
                <div class="carousel-caption">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
    </div>
    <div class="founder-area ptb-40">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="founder-description text-center">
                        <h1>chào mừng bạn đến với Chopper</h1>
                        <img src="{{URL::asset('niceadmin/trang-chu/images/banner/1.png')}}" alt="banner" />
                        <p>Chopper theo đuổi triết lí kinh doanh nhân văn: Được <em><strong>là người tử tế, lương
                                    thiện</strong></em> và được
                            phục vụ <em><strong>những vị khách hàng tử tế, lương thiện</strong></em>.</p>
                        <h4>Miss Hoang - <span>Fouder Chopper</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <! ---Product List---!>
<div class="product_list">
    <div class="container">
        <div class="row">
            <div class="side_tung">
{{--                <div class="category_tung">--}}
{{--                    <h3 class="side_tung_title">Category</h3>--}}
{{--                    <ul class="product_brand_list">--}}
{{--                        <li><a href="#" class="product_brand_detail">Men</a></li>--}}
{{--                        <li><a href="#" class="product_brand_detail">Women</a></li>--}}
{{--                        <li><a href="#" class="product_brand_detail">Accesorry</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
                <div class="products_brand">
                    <h3 class="side_tung_title">Sort By Brand</h3>
                    <div class="product_brand_list">
                        <div class="product_brand_detail">
                            <a href="#" >6D Helmet</a>
                        </div>
                        <div class="product_brand_detail">
                            <a href="#">AGV Helmet</a>
                        </div><div class="product_brand_detail">
                            <a href="#">Arai Helmet</a>
                        </div><div class="product_brand_detail">
                            <a href="#">Bell Helmet</a>
                        </div>
                    </div>
                </div>
                <div class="products_style">
                    <h3 class="side_tung_title">Sort By Style</h3>
                    <div class="product_brand_list">
                        <div class="product_brand_detail">
                            <a href="#" >6D Helmet</a>
                        </div>
                        <div class="product_brand_detail">
                            <a href="#">AGV Helmet</a>
                        </div><div class="product_brand_detail">
                            <a href="#">Arai Helmet</a>
                        </div><div class="product_brand_detail">
                            <a href="#">Bell Helmet</a>
                        </div>
                    </div>
                </div>
                <div class="product_price">
                    <h3 class="side_tung_title">Sort By Price</h3>
                    <div class="form-group row">
                        <div class="form-check col-md-12">
                            <input type="checkbox" class="form-check-input rangeCheck" id="range1" data-range="4999" checked readonly="true">
                            <label class="form-check-label" for="range1">Up $49,999 </label>
                        </div>
                        <div class="form-check col-md-12">
                            <input type="checkbox" class="form-check-input rangeCheck" id="range2" data-range="9999" checked>
                            <label class="form-check-label" for="range2">$50,000 - $99,999 </label>
                        </div>
                        <div class="form-check col-md-12">
                            <input type="checkbox" class="form-check-input rangeCheck" id="range3" data-range="14999">
                            <label class="form-check-label" for="range3">$100,000 - $149,999</label>
                        </div>
                        <div class="form-check col-md-12">
                            <input type="checkbox" class="form-check-input rangeCheck" id="range4" data-range="19999">
                            <label class="form-check-label" for="range4">$150,000 - $199,999 </label>
                        </div>
                        <div class="form-check col-md-12">
                            <input type="checkbox" class="form-check-input rangeCheck" id="range5" data-range="20000">
                            <label class="form-check-label" for="range5">Up $20,000 </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product_list_main">
                <div class="browse-navigation--desktop">
                    <div class="browse-navigation__sort">
                        <select aria-label="Sort by" class="browse-navigation__sort-select" data-field-name="Sort by"  name="[]">
                            <option value="featured" selected="">Sort by Featured</option>
                            <option value="rating">Sort by Rating</option>
                            <option value="brand">Sort by Brand</option>
                            <option value="best_seller">Sort by Best Sellers</option>
                            <option value="newest">Sort by Newest Arrivals</option>
                            <option value="price_asc">Sort by Price: Low to High</option>
                            <option value="price_desc">Sort by Price: High to Low</option>
                        </select>
                    </div>
                    <div class="pagination">
                        <a href="#">&laquo;</a>
                        <a href="#">1</a>
                        <a class="active" href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">6</a>
                        <a href="#">&raquo;</a>
                    </div>
                </div>

                <div class="product_list_grid">
                    <div class="card_tung">
                        <div class="card_heart">
                            <i class='bx bx-heart' ></i>
                        </div>
                        <div class="card_cart">
                            <i class='bx bx-cart-alt' ></i>
                        </div>
                        <div class="card_img">
                            <img src="{{URL::asset('/niceadmin/trang-chu/images/product/pubg-helmet-high-quality-image-pubg-helmet-level-clothing-apparel-crash-helmet-transparent-png-861763.png')}}" alt="Motor" />
                        </div>
                        <div class="card_title">
                            Helmet Motor
                        </div>
                        <div class="card_price">
                            100$
                        </div>
                        <div class="card_size">
                            <h5 class="size">Size</h5>
                            <span>XS</span>
                            <span>SM</span>
                            <span>LG</span>
                            <span>XL</span>
                        </div>
                        <div class="card_color">
                            <h5 class="size">Color</h5>
                            <span class="card_color_1"></span>
                            <span class="card_color_2"></span>
                            <span class="card_color_3"></span>
                        </div>
                        <div class="card_action">
                            <button>Buy Now</button>
                            <button>Add Cart</button>
                            <button>Detail</button>
                        </div>
                    </div>
                    <div class="card_tung">
                        <div class="card_heart">
                            <i class='bx bx-heart' ></i>
                        </div>
                        <div class="card_cart">
                            <i class='bx bx-cart-alt' ></i>
                        </div>
                        <div class="card_img">
                            <img src="{{URL::asset('niceadmin/trang-chu/images/tung_img/toppng.com-motorcycle-helmet-500x600.png')}}" alt="Motor" />
                        </div>
                        <div class="card_title">
                            Helmet Motor
                        </div>
                        <div class="card_price">
                            100$
                        </div>
                        <div class="card_size">
                            <h5 class="size">Size</h5>
                            <span>XS</span>
                            <span>SM</span>
                            <span>LG</span>
                            <span>XL</span>
                        </div>
                        <div class="card_color">
                            <h5 class="size">Color</h5>
                            <span class="card_color_1"></span>
                            <span class="card_color_2"></span>
                            <span class="card_color_3"></span>
                        </div>
                        <div class="card_action">
                            <button>Buy Now</button>
                            <button>Add Cart</button>
                            <button>Detail</button>
                        </div>
                    </div>
                    <div class="card_tung">
                        <div class="card_heart">
                            <i class='bx bx-heart' ></i>
                        </div>
                        <div class="card_cart">
                            <i class='bx bx-cart-alt' ></i>
                        </div>
                        <div class="card_img">
                            <img src="{{URL::asset('niceadmin/trang-chu/images/tung_img/toppng.com-motorcycle-helmet-500x600.png')}}" alt="Motor" />
                        </div>
                        <div class="card_title">
                            Helmet Motor
                        </div>
                        <div class="card_price">
                            100$
                        </div>
                        <div class="card_size">
                            <h5 class="size">Size</h5>
                            <span>XS</span>
                            <span>SM</span>
                            <span>LG</span>
                            <span>XL</span>
                        </div>
                        <div class="card_color">
                            <h5 class="size">Color</h5>
                            <span class="card_color_1"></span>
                            <span class="card_color_2"></span>
                            <span class="card_color_3"></span>
                        </div>
                        <div class="card_action">
                            <button>Buy Now</button>
                            <button>Add Cart</button>
                            <button>Detail</button>
                        </div>
                    </div>
                    <div class="card_tung">
                        <div class="card_heart">
                            <i class='bx bx-heart' ></i>
                        </div>
                        <div class="card_cart">
                            <i class='bx bx-cart-alt' ></i>
                        </div>
                        <div class="card_img">
                            <img src="{{URL::asset('niceadmin/trang-chu/images/tung_img/toppng.com-motorcycle-helmet-500x600.png')}}" alt="Motor" />
                        </div>
                        <div class="card_title">
                            Helmet Motor
                        </div>
                        <div class="card_price">
                            100$
                        </div>
                        <div class="card_size">
                            <h5 class="size">Size</h5>
                            <span>XS</span>
                            <span>SM</span>
                            <span>LG</span>
                            <span>XL</span>
                        </div>
                        <div class="card_color">
                            <h5 class="size">Color</h5>
                            <span class="card_color_1"></span>
                            <span class="card_color_2"></span>
                            <span class="card_color_3"></span>
                        </div>
                        <div class="card_action">
                            <button>Buy Now</button>
                            <button>Add Cart</button>
                            <button>Detail</button>
                        </div>
                    </div>
                    <div class="card_tung">
                        <div class="card_heart">
                            <i class='bx bx-heart' ></i>
                        </div>
                        <div class="card_cart">
                            <i class='bx bx-cart-alt' ></i>
                        </div>
                        <div class="card_img">
                            <img src="{{URL::asset('niceadmin/trang-chu/images/tung_img/toppng.com-motorcycle-helmet-500x600.png')}}" alt="Motor" />
                        </div>
                        <div class="card_title">
                            Helmet Motor
                        </div>
                        <div class="card_price">
                            100$
                        </div>
                        <div class="card_size">
                            <h5 class="size">Size</h5>
                            <span>XS</span>
                            <span>SM</span>
                            <span>LG</span>
                            <span>XL</span>
                        </div>
                        <div class="card_color">
                            <h5 class="size">Color</h5>
                            <span class="card_color_1"></span>
                            <span class="card_color_2"></span>
                            <span class="card_color_3"></span>
                        </div>
                        <div class="card_action">
                            <button>Buy Now</button>
                            <button>Add Cart</button>
                            <button>Detail</button>
                        </div>
                    </div>
                    <div class="card_tung">
                        <div class="card_heart">
                            <i class='bx bx-heart' ></i>
                        </div>
                        <div class="card_cart">
                            <i class='bx bx-cart-alt' ></i>
                        </div>
                        <div class="card_img">
                            <img src="{{URL::asset('niceadmin/trang-chu/images/tung_img/toppng.com-motorcycle-helmet-500x600.png')}}" alt="Motor" />
                        </div>
                        <div class="card_title">
                            Helmet Motor
                        </div>
                        <div class="card_price">
                            100$
                        </div>
                        <div class="card_size">
                            <h5 class="size">Size</h5>
                            <span>XS</span>
                            <span>SM</span>
                            <span>LG</span>
                            <span>XL</span>
                        </div>
                        <div class="card_color">
                            <h5 class="size">Color</h5>
                            <span class="card_color_1"></span>
                            <span class="card_color_2"></span>
                            <span class="card_color_3"></span>
                        </div>
                        <div class="card_action">
                            <button>Buy Now</button>
                            <button>Add Cart</button>
                            <button>Detail</button>
                        </div>
                    </div>
                    <div class="card_tung">
                        <div class="card_heart">
                            <i class='bx bx-heart' ></i>
                        </div>
                        <div class="card_cart">
                            <i class='bx bx-cart-alt' ></i>
                        </div>
                        <div class="card_img">
                            <img src="{{URL::asset('niceadmin/trang-chu/images/tung_img/toppng.com-motorcycle-helmet-500x600.png')}}" alt="Motor" />
                        </div>
                        <div class="card_title">
                            Helmet Motor
                        </div>
                        <div class="card_price">
                            100$
                        </div>
                        <div class="card_size">
                            <h5 class="size">Size</h5>
                            <span>XS</span>
                            <span>SM</span>
                            <span>LG</span>
                            <span>XL</span>
                        </div>
                        <div class="card_color">
                            <h5 class="size">Color</h5>
                            <span class="card_color_1"></span>
                            <span class="card_color_2"></span>
                            <span class="card_color_3"></span>
                        </div>
                        <div class="card_action">
                            <button>Buy Now</button>
                            <button>Add Cart</button>
                            <button>Detail</button>
                        </div>
                    </div>
                    <div class="card_tung">
                        <div class="card_heart">
                            <i class='bx bx-heart' ></i>
                        </div>
                        <div class="card_cart">
                            <i class='bx bx-cart-alt' ></i>
                        </div>
                        <div class="card_img">
                            <img src="{{URL::asset('niceadmin/trang-chu/images/tung_img/toppng.com-motorcycle-helmet-500x600.png')}}" alt="Motor" />
                        </div>
                        <div class="card_title">
                            Helmet Motor
                        </div>
                        <div class="card_price">
                            100$
                        </div>
                        <div class="card_size">
                            <h5 class="size">Size</h5>
                            <span>XS</span>
                            <span>SM</span>
                            <span>LG</span>
                            <span>XL</span>
                        </div>
                        <div class="card_color">
                            <h5 class="size">Color</h5>
                            <span class="card_color_1"></span>
                            <span class="card_color_2"></span>
                            <span class="card_color_3"></span>
                        </div>
                        <div class="card_action">
                            <button>Buy Now</button>
                            <button>Add Cart</button>
                            <button>Detail</button>
                        </div>
                    </div>
                    <div class="card_tung">
                        <div class="card_heart">
                            <i class='bx bx-heart' ></i>
                        </div>
                        <div class="card_cart">
                            <i class='bx bx-cart-alt' ></i>
                        </div>
                        <div class="card_img">
                            <img src="{{URL::asset('niceadmin/trang-chu/images/tung_img/toppng.com-motorcycle-helmet-500x600.png')}}" alt="Motor" />
                        </div>
                        <div class="card_title">
                            Helmet Motor
                        </div>
                        <div class="card_price">
                            100$
                        </div>
                        <div class="card_size">
                            <h5 class="size">Size</h5>
                            <span>XS</span>
                            <span>SM</span>
                            <span>LG</span>
                            <span>XL</span>
                        </div>
                        <div class="card_color">
                            <h5 class="size">Color</h5>
                            <span class="card_color_1"></span>
                            <span class="card_color_2"></span>
                            <span class="card_color_3"></span>
                        </div>
                        <div class="card_action">
                            <button>Buy Now</button>
                            <button>Add Cart</button>
                            <button>Detail</button>
                        </div>
                    </div>
                </div>
                <div class="pagination_end">
                    <div class="pagination">
                        <a href="#">&laquo;</a>
                        <a href="#">1</a>
                        <a class="active" href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">6</a>
                        <a href="#">&raquo;</a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection
