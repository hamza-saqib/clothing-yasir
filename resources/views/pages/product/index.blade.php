@extends('layouts.master')

@section('title-meta')
    <title>Custom Printed Packaging Boxes With Logo | {{ config('app.name') }} </title>
    <meta name="description" content="Get your custom Printed Packaging boxes with logo from us and attract as many customers you want by having cardboard boxes wholesale for your business!">
    <link rel="canonical" href="{{ config('app.url')}}" />
@endsection

@section('custom-css')
@endsection

@section('content')
<!-- Body main wrapper start -->

    <!-- Body main wrapper start -->
    <div class="wrapper shop">

        <!-- Start of header area -->
        @include('partials.header')
        <!-- End of header area -->

        <!--breadcumb area start -->
        <div class="breadcumb-area breadcumb-2 overlay pos-rltv">
            <div class="bread-main">
                <div class="bred-hading text-center">
                    <h5>Product Grid View</h5> </div>
                <ol class="breadcrumb">
                    <li class="home"><a title="Go to Home Page" href="index.html">Home</a></li>
                    <li class="active">Shop</li>
                </ol>
            </div>
        </div>
        <!--breadcumb area end -->

        <!--shop main area are start-->
        <div class="shop-main-area grid-view_area ptb-70">
            <div class="container">
                <div class="row">
                    <!--main-shop-product start-->
                    <div class="col-lg-9 col-md-8 order-lg-2 order-md-2 order-1">
                        <div class="shop-wraper">
                            <div class="col-lg-12">
                                <div class="shop-area-top">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-9 col-md-9">
                                            <div class="sort product-show">
                                                <label>View</label>
                                                <select id="input-amount">
                                                    <option value="volvo">10</option>
                                                    <option value="saab">15</option>
                                                    <option value="vw">20</option>
                                                    <option value="audi" selected>25</option>
                                                </select>
                                            </div>
                                            <div class="sort product-type">
                                                <label>Sort By</label>
                                                <select id="input-sort">
                                                    <option value="#" selected>Default</option>
                                                    <option value="#">Name (A - Z)</option>
                                                    <option value="#">Name (Z - A)</option>
                                                    <option value="#">Price (Low &gt; High)</option>
                                                    <option value="#">Price (High &gt; Low)</option>
                                                    <option value="#">Rating (Highest)</option>
                                                    <option value="#">Rating (Lowest)</option>
                                                    <option value="#">Model (A - Z)</option>
                                                    <option value="#">Model (Z - A)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3">
                                            <div class="list-grid-view text-center">
                                                <ul class="nav" role="tablist">
                                                    <li role="presentation"><a class="active" href="#grid" aria-controls="grid"
                                                            role="tab" data-bs-toggle="tab"><i class="zmdi zmdi-widgets"></i></a>
                                                    </li>
                                                    <li role="presentation"><a href="#list" aria-controls="list" role="tab"
                                                            data-bs-toggle="tab"><i class="zmdi zmdi-view-list-alt"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 d-lg-none d-xl-block d-none">
                                            <div class="total-showing text-right">
                                                Showing - <span>10</span> to <span>18</span> Of Total <span>36</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12">
                                <div class="shop-total-product-area clearfix mt-35">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <!--tab grid are start-->
                                        <div role="tabpanel" class="tab-pane fade show active" id="grid">
                                            <div class="total-shop-product-grid row">
                                                <div class="col-lg-4 col-md-6 item">
                                                    <!-- single product start-->
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <div class="product-label red">
                                                                <div class="new">New</div>
                                                            </div>
                                                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                                                <a href="single-product.html"> <img alt=""
                                                                        src="{{ asset('assets/website') }}/images/product/01.jpg" class="primary-image"> <img
                                                                        alt="" src="{{ asset('assets/website') }}/images/product/02.jpg"
                                                                        class="secondary-image">
                                                                </a>
                                                            </div>
                                                            <div class="product-icon socile-icon-tooltip text-center">
                                                                <ul>
                                                                    <li><a href="#" data-tooltip="Add To Cart" class="add-cart"
                                                                            data-placement="left"><i
                                                                                class="fa fa-cart-plus"></i></a>
                                                                    </li>
                                                                    <li><a href="#" data-tooltip="Wishlist" class="w-list"><i
                                                                                class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#" data-tooltip="Compare" class="cpare"><i
                                                                                class="fa fa-refresh"></i></a></li>
                                                                    <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                            data-bs-toggle="modal" data-bs-target=".modal"><i
                                                                                class="fa fa-eye"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-text">
                                                            <div class="prodcut-name"> <a href="single-product.html">Quisque
                                                                    fringilla</a> </div>
                                                            <div class="prodcut-ratting-price">
                                                                <div class="prodcut-price">
                                                                    <div class="new-price"> $220 </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single product end-->
                                                </div>
                                                <div class="col-lg-4 col-md-6 item">
                                                    <!-- single product start-->
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                                                <a href="single-product.html"> <img alt=""
                                                                        src="{{ asset('assets/website') }}/images/product/03.jpg" class="primary-image"> <img
                                                                        alt="" src="{{ asset('assets/website') }}/images/product/04.jpg"
                                                                        class="secondary-image">
                                                                </a>
                                                            </div>
                                                            <div class="product-icon socile-icon-tooltip text-center">
                                                                <ul>
                                                                    <li><a href="#" data-tooltip="Add To Cart" class="add-cart"
                                                                            data-placement="left"><i
                                                                                class="fa fa-cart-plus"></i></a>
                                                                    </li>
                                                                    <li><a href="#" data-tooltip="Wishlist" class="w-list"><i
                                                                                class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#" data-tooltip="Compare" class="cpare"><i
                                                                                class="fa fa-refresh"></i></a></li>
                                                                    <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                            data-bs-toggle="modal" data-bs-target=".modal"><i
                                                                                class="fa fa-eye"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-text">
                                                            <div class="prodcut-name"> <a href="single-product.html">Quisque
                                                                    fringilla</a> </div>
                                                            <div class="prodcut-ratting-price">
                                                                <div class="prodcut-price">
                                                                    <div class="new-price"> $220 </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single product end-->
                                                </div>
                                                <div class="col-lg-4 col-md-6 item">
                                                    <!-- single product start-->
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <div class="product-label red">
                                                                <div class="new">Sale</div>
                                                            </div>
                                                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                                                <a href="single-product.html"> <img alt=""
                                                                        src="{{ asset('assets/website') }}/images/product/02.jpg" class="primary-image"> <img
                                                                        alt="" src="{{ asset('assets/website') }}/images/product/03.jpg"
                                                                        class="secondary-image">
                                                                </a>
                                                            </div>
                                                            <div class="product-icon socile-icon-tooltip text-center">
                                                                <ul>
                                                                    <li><a href="#" data-tooltip="Add To Cart" class="add-cart"
                                                                            data-placement="left"><i
                                                                                class="fa fa-cart-plus"></i></a>
                                                                    </li>
                                                                    <li><a href="#" data-tooltip="Wishlist" class="w-list"><i
                                                                                class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#" data-tooltip="Compare" class="cpare"><i
                                                                                class="fa fa-refresh"></i></a></li>
                                                                    <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                            data-bs-toggle="modal" data-bs-target=".modal"><i
                                                                                class="fa fa-eye"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-text">
                                                            <div class="prodcut-name"> <a href="single-product.html">Quisque
                                                                    fringilla</a> </div>
                                                            <div class="prodcut-ratting-price">
                                                                <div class="prodcut-ratting">
                                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                </div>
                                                                <div class="prodcut-price">
                                                                    <div class="new-price"> $220 </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single product end-->
                                                </div>
                                                <div class="col-lg-4 col-md-6 item">
                                                    <!-- single product start-->
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                                                <a href="single-product.html"> <img alt=""
                                                                        src="{{ asset('assets/website') }}/images/product/04.jpg" class="primary-image"> <img
                                                                        alt="" src="{{ asset('assets/website') }}/images/product/03.jpg"
                                                                        class="secondary-image">
                                                                </a>
                                                            </div>
                                                            <div class="product-icon socile-icon-tooltip text-center">
                                                                <ul>
                                                                    <li><a href="#" data-tooltip="Add To Cart" class="add-cart"
                                                                            data-placement="left"><i
                                                                                class="fa fa-cart-plus"></i></a>
                                                                    </li>
                                                                    <li><a href="#" data-tooltip="Wishlist" class="w-list"><i
                                                                                class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#" data-tooltip="Compare" class="cpare"><i
                                                                                class="fa fa-refresh"></i></a></li>
                                                                    <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                            data-bs-toggle="modal" data-bs-target=".modal"><i
                                                                                class="fa fa-eye"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-text">
                                                            <div class="prodcut-name"> <a href="single-product.html">Quisque
                                                                    fringilla</a> </div>
                                                            <div class="prodcut-ratting-price">
                                                                <div class="prodcut-price">
                                                                    <div class="new-price"> $220 </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single product end-->
                                                </div>
                                                <div class="col-lg-4 col-md-6 item">
                                                    <!-- single product start-->
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                                                <a href="single-product.html"> <img alt=""
                                                                        src="{{ asset('assets/website') }}/images/product/03.jpg" class="primary-image"> <img
                                                                        alt="" src="{{ asset('assets/website') }}/images/product/04.jpg"
                                                                        class="secondary-image">
                                                                </a>
                                                            </div>
                                                            <div class="product-icon socile-icon-tooltip text-center">
                                                                <ul>
                                                                    <li><a href="#" data-tooltip="Add To Cart" class="add-cart"
                                                                            data-placement="left"><i
                                                                                class="fa fa-cart-plus"></i></a>
                                                                    </li>
                                                                    <li><a href="#" data-tooltip="Wishlist" class="w-list"><i
                                                                                class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#" data-tooltip="Compare" class="cpare"><i
                                                                                class="fa fa-refresh"></i></a></li>
                                                                    <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                            data-bs-toggle="modal" data-bs-target=".modal"><i
                                                                                class="fa fa-eye"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-text">
                                                            <div class="prodcut-name"> <a href="single-product.html">Quisque
                                                                    fringilla</a> </div>
                                                            <div class="prodcut-ratting-price">
                                                                <div class="prodcut-price">
                                                                    <div class="new-price"> $220 </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single product end-->
                                                </div>
                                                <div class="col-lg-4 col-md-6 item">
                                                    <!-- single product start-->
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <div class="product-label red">
                                                                <div class="new">Sale</div>
                                                            </div>
                                                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                                                <a href="single-product.html"> <img alt=""
                                                                        src="{{ asset('assets/website') }}/images/product/02.jpg" class="primary-image"> <img
                                                                        alt="" src="{{ asset('assets/website') }}/images/product/03.jpg"
                                                                        class="secondary-image">
                                                                </a>
                                                            </div>
                                                            <div class="product-icon socile-icon-tooltip text-center">
                                                                <ul>
                                                                    <li><a href="#" data-tooltip="Add To Cart" class="add-cart"
                                                                            data-placement="left"><i
                                                                                class="fa fa-cart-plus"></i></a>
                                                                    </li>
                                                                    <li><a href="#" data-tooltip="Wishlist" class="w-list"><i
                                                                                class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#" data-tooltip="Compare" class="cpare"><i
                                                                                class="fa fa-refresh"></i></a></li>
                                                                    <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                            data-bs-toggle="modal" data-bs-target=".modal"><i
                                                                                class="fa fa-eye"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-text">
                                                            <div class="prodcut-name"> <a href="single-product.html">Quisque
                                                                    fringilla</a> </div>
                                                            <div class="prodcut-ratting-price">
                                                                <div class="prodcut-ratting">
                                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                </div>
                                                                <div class="prodcut-price">
                                                                    <div class="new-price"> $220 </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single product end-->
                                                </div>
                                                <div class="col-lg-4 col-md-6 item">
                                                    <!-- single product start-->
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                                                <a href="single-product.html"> <img alt=""
                                                                        src="{{ asset('assets/website') }}/images/product/04.jpg" class="primary-image"> <img
                                                                        alt="" src="{{ asset('assets/website') }}/images/product/03.jpg"
                                                                        class="secondary-image">
                                                                </a>
                                                            </div>
                                                            <div class="product-icon socile-icon-tooltip text-center">
                                                                <ul>
                                                                    <li><a href="#" data-tooltip="Add To Cart" class="add-cart"
                                                                            data-placement="left"><i
                                                                                class="fa fa-cart-plus"></i></a>
                                                                    </li>
                                                                    <li><a href="#" data-tooltip="Wishlist" class="w-list"><i
                                                                                class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#" data-tooltip="Compare" class="cpare"><i
                                                                                class="fa fa-refresh"></i></a></li>
                                                                    <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                            data-bs-toggle="modal" data-bs-target=".modal"><i
                                                                                class="fa fa-eye"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-text">
                                                            <div class="prodcut-name"> <a href="single-product.html">Quisque
                                                                    fringilla</a> </div>
                                                            <div class="prodcut-ratting-price">
                                                                <div class="prodcut-price">
                                                                    <div class="new-price"> $220 </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single product end-->
                                                </div>
                                                <div class="col-lg-4 col-md-6 item">
                                                    <!-- single product start-->
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <div class="product-label red">
                                                                <div class="new">New</div>
                                                            </div>
                                                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                                                <a href="single-product.html"> <img alt=""
                                                                        src="{{ asset('assets/website') }}/images/product/01.jpg" class="primary-image"> <img
                                                                        alt="" src="{{ asset('assets/website') }}/images/product/02.jpg"
                                                                        class="secondary-image">
                                                                </a>
                                                            </div>
                                                            <div class="product-icon socile-icon-tooltip text-center">
                                                                <ul>
                                                                    <li><a href="#" data-tooltip="Add To Cart" class="add-cart"
                                                                            data-placement="left"><i
                                                                                class="fa fa-cart-plus"></i></a>
                                                                    </li>
                                                                    <li><a href="#" data-tooltip="Wishlist" class="w-list"><i
                                                                                class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#" data-tooltip="Compare" class="cpare"><i
                                                                                class="fa fa-refresh"></i></a></li>
                                                                    <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                            data-bs-toggle="modal" data-bs-target=".modal"><i
                                                                                class="fa fa-eye"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-text">
                                                            <div class="prodcut-name"> <a href="single-product.html">Quisque
                                                                    fringilla</a> </div>
                                                            <div class="prodcut-ratting-price">
                                                                <div class="prodcut-price">
                                                                    <div class="new-price"> $220 </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single product end-->
                                                </div>
                                                <div class="col-lg-4 col-md-6 item">
                                                    <!-- single product start-->
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                                                <a href="single-product.html"> <img alt=""
                                                                        src="{{ asset('assets/website') }}/images/product/03.jpg" class="primary-image"> <img
                                                                        alt="" src="{{ asset('assets/website') }}/images/product/04.jpg"
                                                                        class="secondary-image">
                                                                </a>
                                                            </div>
                                                            <div class="product-icon socile-icon-tooltip text-center">
                                                                <ul>
                                                                    <li><a href="#" data-tooltip="Add To Cart" class="add-cart"
                                                                            data-placement="left"><i
                                                                                class="fa fa-cart-plus"></i></a>
                                                                    </li>
                                                                    <li><a href="#" data-tooltip="Wishlist" class="w-list"><i
                                                                                class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#" data-tooltip="Compare" class="cpare"><i
                                                                                class="fa fa-refresh"></i></a></li>
                                                                    <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                            data-bs-toggle="modal" data-bs-target=".modal"><i
                                                                                class="fa fa-eye"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-text">
                                                            <div class="prodcut-name"> <a href="single-product.html">Quisque
                                                                    fringilla</a> </div>
                                                            <div class="prodcut-ratting-price">
                                                                <div class="prodcut-price">
                                                                    <div class="new-price"> $220 </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single product end-->
                                                </div>
                                                <div class="col-lg-4 col-md-6 item">
                                                    <!-- single product start-->
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                                                <a href="single-product.html"> <img alt=""
                                                                        src="{{ asset('assets/website') }}/images/product/04.jpg" class="primary-image"> <img
                                                                        alt="" src="{{ asset('assets/website') }}/images/product/03.jpg"
                                                                        class="secondary-image">
                                                                </a>
                                                            </div>
                                                            <div class="product-icon socile-icon-tooltip text-center">
                                                                <ul>
                                                                    <li><a href="#" data-tooltip="Add To Cart" class="add-cart"
                                                                            data-placement="left"><i
                                                                                class="fa fa-cart-plus"></i></a>
                                                                    </li>
                                                                    <li><a href="#" data-tooltip="Wishlist" class="w-list"><i
                                                                                class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#" data-tooltip="Compare" class="cpare"><i
                                                                                class="fa fa-refresh"></i></a></li>
                                                                    <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                            data-bs-toggle="modal" data-bs-target=".modal"><i
                                                                                class="fa fa-eye"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-text">
                                                            <div class="prodcut-name"> <a href="single-product.html">Quisque
                                                                    fringilla</a> </div>
                                                            <div class="prodcut-ratting-price">
                                                                <div class="prodcut-price">
                                                                    <div class="new-price"> $220 </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single product end-->
                                                </div>
                                                <div class="col-lg-4 col-md-6 item">
                                                    <!-- single product start-->
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                                                <a href="single-product.html"> <img alt=""
                                                                        src="{{ asset('assets/website') }}/images/product/03.jpg" class="primary-image"> <img
                                                                        alt="" src="{{ asset('assets/website') }}/images/product/04.jpg"
                                                                        class="secondary-image">
                                                                </a>
                                                            </div>
                                                            <div class="product-icon socile-icon-tooltip text-center">
                                                                <ul>
                                                                    <li><a href="#" data-tooltip="Add To Cart" class="add-cart"
                                                                            data-placement="left"><i
                                                                                class="fa fa-cart-plus"></i></a>
                                                                    </li>
                                                                    <li><a href="#" data-tooltip="Wishlist" class="w-list"><i
                                                                                class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#" data-tooltip="Compare" class="cpare"><i
                                                                                class="fa fa-refresh"></i></a></li>
                                                                    <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                            data-bs-toggle="modal" data-bs-target=".modal"><i
                                                                                class="fa fa-eye"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-text">
                                                            <div class="prodcut-name"> <a href="single-product.html">Quisque
                                                                    fringilla</a> </div>
                                                            <div class="prodcut-ratting-price">
                                                                <div class="prodcut-price">
                                                                    <div class="new-price"> $220 </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single product end-->
                                                </div>
                                                <div class="col-lg-4 col-md-6 item">
                                                    <!-- single product start-->
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <div class="product-label red">
                                                                <div class="new">Sale</div>
                                                            </div>
                                                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                                                <a href="single-product.html"> <img alt=""
                                                                        src="{{ asset('assets/website') }}/images/product/02.jpg" class="primary-image"> <img
                                                                        alt="" src="{{ asset('assets/website') }}/images/product/03.jpg"
                                                                        class="secondary-image">
                                                                </a>
                                                            </div>
                                                            <div class="product-icon socile-icon-tooltip text-center">
                                                                <ul>
                                                                    <li><a href="#" data-tooltip="Add To Cart" class="add-cart"
                                                                            data-placement="left"><i
                                                                                class="fa fa-cart-plus"></i></a>
                                                                    </li>
                                                                    <li><a href="#" data-tooltip="Wishlist" class="w-list"><i
                                                                                class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#" data-tooltip="Compare" class="cpare"><i
                                                                                class="fa fa-refresh"></i></a></li>
                                                                    <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                            data-bs-toggle="modal" data-bs-target=".modal"><i
                                                                                class="fa fa-eye"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-text">
                                                            <div class="prodcut-name"> <a href="single-product.html">Quisque
                                                                    fringilla</a> </div>
                                                            <div class="prodcut-ratting-price">
                                                                <div class="prodcut-ratting">
                                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                </div>
                                                                <div class="prodcut-price">
                                                                    <div class="new-price"> $220 </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single product end-->
                                                </div>
                                                <div class="col-lg-4 col-md-6 item">
                                                    <!-- single product start-->
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                                                <a href="single-product.html"> <img alt=""
                                                                        src="{{ asset('assets/website') }}/images/product/04.jpg" class="primary-image"> <img
                                                                        alt="" src="{{ asset('assets/website') }}/images/product/03.jpg"
                                                                        class="secondary-image">
                                                                </a>
                                                            </div>
                                                            <div class="product-icon socile-icon-tooltip text-center">
                                                                <ul>
                                                                    <li><a href="#" data-tooltip="Add To Cart" class="add-cart"
                                                                            data-placement="left"><i
                                                                                class="fa fa-cart-plus"></i></a>
                                                                    </li>
                                                                    <li><a href="#" data-tooltip="Wishlist" class="w-list"><i
                                                                                class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#" data-tooltip="Compare" class="cpare"><i
                                                                                class="fa fa-refresh"></i></a></li>
                                                                    <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                            data-bs-toggle="modal" data-bs-target=".modal"><i
                                                                                class="fa fa-eye"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-text">
                                                            <div class="prodcut-name"> <a href="single-product.html">Quisque
                                                                    fringilla</a> </div>
                                                            <div class="prodcut-ratting-price">
                                                                <div class="prodcut-price">
                                                                    <div class="new-price"> $220 </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single product end-->
                                                </div>
                                                <div class="col-lg-4 col-md-6 item">
                                                    <!-- single product start-->
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <div class="product-label red">
                                                                <div class="new">New</div>
                                                            </div>
                                                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                                                <a href="single-product.html"> <img alt=""
                                                                        src="{{ asset('assets/website') }}/images/product/01.jpg" class="primary-image"> <img
                                                                        alt="" src="{{ asset('assets/website') }}/images/product/02.jpg"
                                                                        class="secondary-image">
                                                                </a>
                                                            </div>
                                                            <div class="product-icon socile-icon-tooltip text-center">
                                                                <ul>
                                                                    <li><a href="#" data-tooltip="Add To Cart" class="add-cart"
                                                                            data-placement="left"><i
                                                                                class="fa fa-cart-plus"></i></a>
                                                                    </li>
                                                                    <li><a href="#" data-tooltip="Wishlist" class="w-list"><i
                                                                                class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#" data-tooltip="Compare" class="cpare"><i
                                                                                class="fa fa-refresh"></i></a></li>
                                                                    <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                            data-bs-toggle="modal" data-bs-target=".modal"><i
                                                                                class="fa fa-eye"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-text">
                                                            <div class="prodcut-name"> <a href="single-product.html">Quisque
                                                                    fringilla</a> </div>
                                                            <div class="prodcut-ratting-price">
                                                                <div class="prodcut-price">
                                                                    <div class="new-price"> $220 </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single product end-->
                                                </div>
                                                <div class="col-lg-4 col-md-6 item">
                                                    <!-- single product start-->
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                                                <a href="single-product.html"> <img alt=""
                                                                        src="{{ asset('assets/website') }}/images/product/03.jpg" class="primary-image"> <img
                                                                        alt="" src="{{ asset('assets/website') }}/images/product/04.jpg"
                                                                        class="secondary-image">
                                                                </a>
                                                            </div>
                                                            <div class="product-icon socile-icon-tooltip text-center">
                                                                <ul>
                                                                    <li><a href="#" data-tooltip="Add To Cart" class="add-cart"
                                                                            data-placement="left"><i
                                                                                class="fa fa-cart-plus"></i></a>
                                                                    </li>
                                                                    <li><a href="#" data-tooltip="Wishlist" class="w-list"><i
                                                                                class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#" data-tooltip="Compare" class="cpare"><i
                                                                                class="fa fa-refresh"></i></a></li>
                                                                    <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                            data-bs-toggle="modal" data-bs-target=".modal"><i
                                                                                class="fa fa-eye"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-text">
                                                            <div class="prodcut-name"> <a href="single-product.html">Quisque
                                                                    fringilla</a> </div>
                                                            <div class="prodcut-ratting-price">
                                                                <div class="prodcut-price">
                                                                    <div class="new-price"> $220 </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single product end-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--shop grid are end-->

                                        <!--shop product list start-->
                                        <div role="tabpanel" class="tab-pane fade" id="list">
                                            <div class="total-shop-product-list row">
                                                <div class="col-lg-12 item">
                                                    <!-- single product start-->
                                                    <div class="single-product single-product-list">
                                                        <div class="product-img">
                                                            <div class="product-label red">
                                                                <div class="new">Sale</div>
                                                            </div>
                                                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                                                <a href="single-product.html"> <img alt=""
                                                                        src="{{ asset('assets/website') }}/images/product/02.jpg" class="primary-image"> <img
                                                                        alt="" src="{{ asset('assets/website') }}/images/product/03.jpg"
                                                                        class="secondary-image">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-text prodcut-text-list fix">
                                                            <div class="prodcut-name list-name montserrat"> <a
                                                                    href="single-product.html">Magnetic
                                                                    Force Bralette</a>
                                                            </div>
                                                            <div class="prodcut-ratting-price">
                                                                <div class="prodcut-ratting list-ratting">
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                </div>
                                                                <div class="prodcut-price list-price">
                                                                    <div class="new-price"> $220 </div>
                                                                    <div class="old-price"> <del>$250</del> </div>
                                                                </div>
                                                            </div>
                                                            <div class="list-product-content">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit.
                                                                    Fusce
                                                                    dolor tellus, bibendum eu lacus ids suscipit
                                                                    blandit tortor. Aenean eget posuere augue, vel
                                                                    molestie
                                                                    turpis.
                                                                    Ut tempor mauris ut justo luctus aliquam. Nullam
                                                                    id quam vitae odio scelerisque ultrices.</p>
                                                            </div>
                                                            <div class="social-icon-wraper mt-25">
                                                                <div class="social-icon socile-icon-style-1">
                                                                    <ul>
                                                                        <li><a href="#"><i
                                                                                    class="zmdi zmdi-shopping-cart"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i
                                                                                    class="zmdi zmdi-favorite-outline"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                                data-bs-toggle="modal" data-bs-target=".modal"
                                                                                tabindex="0"><i class="zmdi zmdi-eye"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i class="zmdi zmdi-repeat"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single product end-->
                                                </div>
                                                <div class="col-lg-12 item">
                                                    <!-- single product start-->
                                                    <div class="single-product single-product-list">
                                                        <div class="product-img">
                                                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                                                <a href="single-product.html"> <img alt=""
                                                                        src="{{ asset('assets/website') }}/images/product/03.jpg" class="primary-image"> <img
                                                                        alt="" src="{{ asset('assets/website') }}/images/product/04.jpg"
                                                                        class="secondary-image">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-text prodcut-text-list fix">
                                                            <div class="prodcut-name list-name montserrat"> <a
                                                                    href="single-product.html">Magnetic
                                                                    Force Bralette</a>
                                                            </div>
                                                            <div class="prodcut-ratting-price">
                                                                <div class="prodcut-ratting list-ratting">
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                </div>
                                                                <div class="prodcut-price list-price">
                                                                    <div class="new-price"> $220 </div>
                                                                </div>
                                                            </div>
                                                            <div class="list-product-content">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit.
                                                                    Fusce
                                                                    dolor tellus, bibendum eu lacus ids suscipit
                                                                    blandit tortor. Aenean eget posuere augue, vel
                                                                    molestie
                                                                    turpis.
                                                                    Ut tempor mauris ut justo luctus aliquam. Nullam
                                                                    id quam vitae odio scelerisque ultrices.</p>
                                                            </div>
                                                            <div class="social-icon-wraper mt-25">
                                                                <div class="social-icon socile-icon-style-1">
                                                                    <ul>
                                                                        <li><a href="#"><i
                                                                                    class="zmdi zmdi-shopping-cart"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i
                                                                                    class="zmdi zmdi-favorite-outline"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                                data-bs-toggle="modal" data-bs-target=".modal"
                                                                                tabindex="0"><i class="zmdi zmdi-eye"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i class="zmdi zmdi-repeat"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single product end-->
                                                </div>
                                                <div class="col-lg-12 item">
                                                    <!-- single product start-->
                                                    <div class="single-product single-product-list">
                                                        <div class="product-img">
                                                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                                                <a href="single-product.html"> <img alt=""
                                                                        src="{{ asset('assets/website') }}/images/product/05.jpg" class="primary-image"> <img
                                                                        alt="" src="{{ asset('assets/website') }}/images/product/06.jpg"
                                                                        class="secondary-image">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-text prodcut-text-list fix">
                                                            <div class="prodcut-name list-name montserrat"> <a
                                                                    href="single-product.html">Magnetic
                                                                    Force Bralette</a>
                                                            </div>
                                                            <div class="prodcut-ratting-price">
                                                                <div class="prodcut-ratting list-ratting">
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                </div>
                                                                <div class="prodcut-price list-price">
                                                                    <div class="new-price"> $200 </div>
                                                                    <div class="old-price"> <del>$300</del> </div>
                                                                </div>
                                                            </div>
                                                            <div class="list-product-content">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit.
                                                                    Fusce
                                                                    dolor tellus, bibendum eu lacus ids suscipit
                                                                    blandit tortor. Aenean eget posuere augue, vel
                                                                    molestie
                                                                    turpis.
                                                                    Ut tempor mauris ut justo luctus aliquam. Nullam
                                                                    id quam vitae odio scelerisque ultrices.</p>
                                                            </div>
                                                            <div class="social-icon-wraper mt-25">
                                                                <div class="social-icon socile-icon-style-1">
                                                                    <ul>
                                                                        <li><a href="#"><i
                                                                                    class="zmdi zmdi-shopping-cart"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i
                                                                                    class="zmdi zmdi-favorite-outline"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                                data-bs-toggle="modal" data-bs-target=".modal"
                                                                                tabindex="0"><i class="zmdi zmdi-eye"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i class="zmdi zmdi-repeat"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single product end-->
                                                </div>
                                                <div class="col-lg-12 item">
                                                    <!-- single product start-->
                                                    <div class="single-product single-product-list">
                                                        <div class="product-img">
                                                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                                                <a href="single-product.html"> <img alt=""
                                                                        src="{{ asset('assets/website') }}/images/product/04.jpg" class="primary-image"> <img
                                                                        alt="" src="{{ asset('assets/website') }}/images/product/05.jpg"
                                                                        class="secondary-image">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-text prodcut-text-list fix">
                                                            <div class="prodcut-name list-name montserrat"> <a
                                                                    href="single-product.html">Magnetic
                                                                    Force Bralette</a>
                                                            </div>
                                                            <div class="prodcut-ratting-price">
                                                                <div class="prodcut-ratting list-ratting">
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                </div>
                                                                <div class="prodcut-price list-price">
                                                                    <div class="new-price"> $220 </div>
                                                                </div>
                                                            </div>
                                                            <div class="list-product-content">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit.
                                                                    Fusce
                                                                    dolor tellus, bibendum eu lacus ids suscipit
                                                                    blandit tortor. Aenean eget posuere augue, vel
                                                                    molestie
                                                                    turpis.
                                                                    Ut tempor mauris ut justo luctus aliquam. Nullam
                                                                    id quam vitae odio scelerisque ultrices.</p>
                                                            </div>
                                                            <div class="social-icon-wraper mt-25">
                                                                <div class="social-icon socile-icon-style-1">
                                                                    <ul>
                                                                        <li><a href="#"><i
                                                                                    class="zmdi zmdi-shopping-cart"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i
                                                                                    class="zmdi zmdi-favorite-outline"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                                data-bs-toggle="modal" data-bs-target=".modal"
                                                                                tabindex="0"><i class="zmdi zmdi-eye"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i class="zmdi zmdi-repeat"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single product end-->
                                                </div>
                                                <div class="col-lg-12 item">
                                                    <!-- single product start-->
                                                    <div class="single-product single-product-list">
                                                        <div class="product-img">
                                                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                                                <a href="single-product.html"> <img alt=""
                                                                        src="{{ asset('assets/website') }}/images/product/06.jpg" class="primary-image"> <img
                                                                        alt="" src="{{ asset('assets/website') }}/images/product/07.jpg"
                                                                        class="secondary-image">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-text prodcut-text-list fix">
                                                            <div class="prodcut-name list-name montserrat"> <a
                                                                    href="single-product.html">Magnetic
                                                                    Force Bralette</a>
                                                            </div>
                                                            <div class="prodcut-ratting-price">
                                                                <div class="prodcut-ratting list-ratting">
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                </div>
                                                                <div class="prodcut-price list-price">
                                                                    <div class="new-price"> $200 </div>
                                                                    <div class="old-price"> <del>$300</del> </div>
                                                                </div>
                                                            </div>
                                                            <div class="list-product-content">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit.
                                                                    Fusce
                                                                    dolor tellus, bibendum eu lacus ids suscipit
                                                                    blandit tortor. Aenean eget posuere augue, vel
                                                                    molestie
                                                                    turpis.
                                                                    Ut tempor mauris ut justo luctus aliquam. Nullam
                                                                    id quam vitae odio scelerisque ultrices.</p>
                                                            </div>
                                                            <div class="social-icon-wraper mt-25">
                                                                <div class="social-icon socile-icon-style-1">
                                                                    <ul>
                                                                        <li><a href="#"><i
                                                                                    class="zmdi zmdi-shopping-cart"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i
                                                                                    class="zmdi zmdi-favorite-outline"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                                data-bs-toggle="modal" data-bs-target=".modal"
                                                                                tabindex="0"><i class="zmdi zmdi-eye"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i class="zmdi zmdi-repeat"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single product end-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--shop product list end-->

                                        <!--pagination start-->
                                        <div class="col-lg-12">
                                            <div class="pagination-btn text-center">
                                                <ul class="page-numbers">
                                                    <li><a href="#" class="next page-numbers"><i
                                                                class="zmdi zmdi-long-arrow-left"></i></a></li>
                                                    <li><span class="page-numbers current">1</span></li>
                                                    <li><a href="#" class="page-numbers">2</a></li>
                                                    <li><a href="#" class="page-numbers">3</a></li>
                                                    <li><a href="#" class="next page-numbers"><i
                                                                class="zmdi zmdi-long-arrow-right"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--pagination end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--main-shop-product start-->

                    <!--shop sidebar start-->
                    <div class="col-lg-3 col-md-4 order-lg-1 order-md-1 order-2">
                        <div class="shop-sidebar">
                            <!--single aside start-->
                            <aside class="single-aside search-aside search-box">
                                <form action="#">
                                    <div class="input-box">
                                        <input class="single-input" placeholder="Search...." type="text">
                                        <button class="src-btn sb-2"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </aside>
                            <!--single aside end-->

                            <!--single aside start-->
                            <aside class="single-aside catagories-aside">
                                <div class="heading-title aside-title pos-rltv">
                                    <h5 class="uppercase">categories</h5>
                                </div>
                                <div id="cat-treeview" class="product-cat">
                                    <ul>
                                        <li class="closed"><a href="#">Men (05)</a>
                                            <ul>
                                                <li><a href="#">T-Shirt</a></li>
                                                <li><a href="#">Shirt</a></li>
                                                <li><a href="#">Pant</a></li>
                                                <li><a href="#">Shoe</a></li>
                                                <li><a href="#">Gifts</a></li>
                                            </ul>
                                        </li>
                                        <li class="closed"><a href="#">Women (10)</a>
                                            <ul>
                                                <li><a href="#">T-Shirt</a>
                                                    <ul>
                                                        <li><a href="#">T-Shirt 01</a></li>
                                                        <li><a href="#">T-Shirt 02</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Shirt</a>
                                                    <ul>
                                                        <li><a href="#">Shirt 01</a></li>
                                                        <li><a href="#">Shirt 02</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Pant</a>
                                                    <ul>
                                                        <li><a href="#">Pant 01</a></li>
                                                        <li><a href="#">Pant 02</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Shoe</a>
                                                    <ul>
                                                        <li><a href="#">Shoe 01</a></li>
                                                        <li><a href="#">Shoe 02</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Gifts</a>
                                                    <ul>
                                                        <li><a href="#">Gift 01</a></li>
                                                        <li><a href="#">Gift 02</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="closed"><a href="#">Accessories (07)</a>
                                            <ul>
                                                <li><a href="#">Accessories 01</a></li>
                                                <li><a href="#">Accessories 02</a></li>
                                                <li><a href="#">Accessories 03</a></li>
                                            </ul>
                                        </li>
                                        <li class="closed"><a href="#">Beauty (06)</a>
                                            <ul>
                                                <li><a href="#">Beauty 01</a></li>
                                                <li><a href="#">Beauty 02</a></li>
                                                <li><a href="#">Beauty 03</a></li>
                                            </ul>
                                        </li>
                                        <li class="closed"><a href="#">Watch (09)</a>
                                            <ul>
                                                <li><a href="#">Watch 01</a></li>
                                                <li><a href="#">Watch 02</a></li>
                                                <li><a href="#">Watch 03</a></li>
                                            </ul>
                                        </li>
                                        <li class="closed"><a href="#">Sports</a></li>
                                        <li class="closed"><a href="#">Others</a></li>
                                    </ul>
                                </div>
                            </aside>
                            <!--single aside end-->

                            <!--single aside start-->
                            <aside class="single-aside price-aside fix">
                                <div class="heading-title aside-title pos-rltv">
                                    <h5 class="uppercase">price</h5>
                                </div>
                                <div class="price_filter">
                                    <div id="slider-range"></div>
                                    <div class="price_slider_amount">
                                        <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                        <input type="submit" value="Filter" />
                                    </div>
                                </div>
                            </aside>
                            <!--single aside end-->

                            <!--single aside start-->
                            <aside class="single-aside color-aside">
                                <div class="heading-title aside-title pos-rltv">
                                    <h5 class="uppercase">Color</h5>
                                </div>
                                <ul class="color-filter mt-30">
                                    <li><a href="#" class="color-1"></a></li>
                                    <li><a href="#" class="color-2 active"></a></li>
                                    <li><a href="#" class="color-3"></a></li>
                                    <li><a href="#" class="color-4"></a></li>
                                    <li><a href="#" class="color-5"></a></li>
                                    <li><a href="#" class="color-6"></a></li>
                                    <li><a href="#" class="color-7"></a></li>
                                    <li><a href="#" class="color-8"></a></li>
                                    <li><a href="#" class="color-9"></a></li>
                                </ul>
                            </aside>
                            <!--single aside end-->

                            <!--single aside start-->
                            <aside class="single-aside size-aside">
                                <div class="heading-title aside-title pos-rltv">
                                    <h5 class="uppercase">Size Option</h5>
                                </div>
                                <ul class="size-filter mt-30">
                                    <li><a href="#" class="size-s">S</a></li>
                                    <li><a href="#" class="size-m">M</a></li>
                                    <li><a href="#" class="size-l">L</a></li>
                                    <li><a href="#" class="size-xl">XL</a></li>
                                    <li><a href="#" class="size-xxl">XXL</a></li>
                                </ul>
                            </aside>

                            <!--single aside start-->
                            <aside class="single-aside tag-aside">
                                <div class="heading-title aside-title pos-rltv">
                                    <h5 class="uppercase">Product Tags</h5>
                                </div>
                                <ul class="tag-filter mt-30">
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Women</a></li>
                                    <li><a href="#">Winter</a></li>
                                    <li><a href="#">Street Style</a></li>
                                    <li><a href="#">Style</a></li>
                                    <li><a href="#">Shop</a></li>
                                    <li><a href="#">Collection</a></li>
                                    <li><a href="#">Spring 2019</a></li>
                                </ul>
                            </aside>
                            <!--single aside end-->

                            <!--single aside start-->
                            <aside class="single-aside product-aside">
                                <div class="heading-title aside-title pos-rltv">
                                    <h5 class="uppercase">Recent Product</h5>
                                </div>
                                <div class="recent-prodcut-wraper total-rectnt-slider">
                                    <div class="single-rectnt-slider">
                                        <!-- single product start-->
                                        <div class="single-product recent-single-product">
                                            <div class="product-img">
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href="single-product.html"> <img alt="" src="{{ asset('assets/website') }}/images/product/rp01.jpg"
                                                            class="primary-image">
                                                        <img alt="" src="{{ asset('assets/website') }}/images/product/rp02.jpg" class="secondary-image"> </a>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <div class="prodcut-name"> <a href="single-product.html">Copenhagen
                                                        Spitfire Chair</a> </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a
                                                            href="#"><i class="fa fa-star"></i></a> <a href="#"><i
                                                                class="fa fa-star"></i></a> <a href="#"><i
                                                                class="fa fa-star"></i></a> <a href="#"><i
                                                                class="fa fa-star-o"></i></a> </div>
                                                    <div class="prodcut-price">
                                                        <div class="new-price"> $220 </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->

                                        <!-- single product start-->
                                        <div class="single-product recent-single-product">
                                            <div class="product-img">
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href="single-product.html"> <img alt="" src="{{ asset('assets/website') }}/images/product/rp03.jpg"
                                                            class="primary-image">
                                                        <img alt="" src="{{ asset('assets/website') }}/images/product/rp04.jpg" class="secondary-image"> </a>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <div class="prodcut-name"> <a href="single-product.html">Copenhagen
                                                        Spitfire Chair</a> </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a
                                                            href="#"><i class="fa fa-star"></i></a> <a href="#"><i
                                                                class="fa fa-star"></i></a> <a href="#"><i
                                                                class="fa fa-star"></i></a> <a href="#"><i
                                                                class="fa fa-star-o"></i></a> </div>
                                                    <div class="prodcut-price">
                                                        <div class="new-price"> $220 </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->

                                        <!-- single product start-->
                                        <div class="single-product recent-single-product">
                                            <div class="product-img">
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href="single-product.html"> <img alt="" src="{{ asset('assets/website') }}/images/product/rp02.jpg"
                                                            class="primary-image">
                                                        <img alt="" src="{{ asset('assets/website') }}/images/product/rp03.jpg" class="secondary-image"> </a>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <div class="prodcut-name"> <a href="single-product.html">Copenhagen
                                                        Spitfire Chair</a> </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a
                                                            href="#"><i class="fa fa-star"></i></a> <a href="#"><i
                                                                class="fa fa-star"></i></a> <a href="#"><i
                                                                class="fa fa-star"></i></a> <a href="#"><i
                                                                class="fa fa-star-o"></i></a> </div>
                                                    <div class="prodcut-price">
                                                        <div class="new-price"> $220 </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->

                                        <!-- single product start-->
                                        <div class="single-product recent-single-product">
                                            <div class="product-img">
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href="single-product.html"> <img alt="" src="{{ asset('assets/website') }}/images/product/rp04.jpg"
                                                            class="primary-image">
                                                        <img alt="" src="{{ asset('assets/website') }}/images/product/rp01.jpg" class="secondary-image"> </a>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <div class="prodcut-name"> <a href="single-product.html">Copenhagen
                                                        Spitfire Chair</a> </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a
                                                            href="#"><i class="fa fa-star"></i></a> <a href="#"><i
                                                                class="fa fa-star"></i></a> <a href="#"><i
                                                                class="fa fa-star"></i></a> <a href="#"><i
                                                                class="fa fa-star-o"></i></a> </div>
                                                    <div class="prodcut-price">
                                                        <div class="new-price"> $220 </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->
                                    </div>
                                    <div class="single-rectnt-slider">
                                        <!-- single product start-->
                                        <div class="single-product recent-single-product">
                                            <div class="product-img">
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href="single-product.html"> <img alt="" src="{{ asset('assets/website') }}/images/product/rp01.jpg"
                                                            class="primary-image">
                                                        <img alt="" src="{{ asset('assets/website') }}/images/product/rp02.jpg" class="secondary-image"> </a>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <div class="prodcut-name"> <a href="single-product.html">Copenhagen
                                                        Spitfire Chair</a> </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a
                                                            href="#"><i class="fa fa-star"></i></a> <a href="#"><i
                                                                class="fa fa-star"></i></a> <a href="#"><i
                                                                class="fa fa-star"></i></a> <a href="#"><i
                                                                class="fa fa-star-o"></i></a> </div>
                                                    <div class="prodcut-price">
                                                        <div class="new-price"> $220 </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->

                                        <!-- single product start-->
                                        <div class="single-product recent-single-product">
                                            <div class="product-img">
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href="single-product.html"> <img alt="" src="{{ asset('assets/website') }}/images/product/rp03.jpg"
                                                            class="primary-image">
                                                        <img alt="" src="{{ asset('assets/website') }}/images/product/rp04.jpg" class="secondary-image"> </a>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <div class="prodcut-name"> <a href="single-product.html">Copenhagen
                                                        Spitfire Chair</a> </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a
                                                            href="#"><i class="fa fa-star"></i></a> <a href="#"><i
                                                                class="fa fa-star"></i></a> <a href="#"><i
                                                                class="fa fa-star"></i></a> <a href="#"><i
                                                                class="fa fa-star-o"></i></a> </div>
                                                    <div class="prodcut-price">
                                                        <div class="new-price"> $220 </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->

                                        <!-- single product start-->
                                        <div class="single-product recent-single-product">
                                            <div class="product-img">
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href="single-product.html"> <img alt="" src="{{ asset('assets/website') }}/images/product/rp02.jpg"
                                                            class="primary-image">
                                                        <img alt="" src="{{ asset('assets/website') }}/images/product/rp03.jpg" class="secondary-image"> </a>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <div class="prodcut-name"> <a href="single-product.html">Copenhagen
                                                        Spitfire Chair</a> </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a
                                                            href="#"><i class="fa fa-star"></i></a> <a href="#"><i
                                                                class="fa fa-star"></i></a> <a href="#"><i
                                                                class="fa fa-star"></i></a> <a href="#"><i
                                                                class="fa fa-star-o"></i></a> </div>
                                                    <div class="prodcut-price">
                                                        <div class="new-price"> $220 </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->

                                        <!-- single product start-->
                                        <div class="single-product recent-single-product">
                                            <div class="product-img">
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href="single-product.html"> <img alt="" src="{{ asset('assets/website') }}/images/product/rp04.jpg"
                                                            class="primary-image">
                                                        <img alt="" src="{{ asset('assets/website') }}/images/product/rp01.jpg" class="secondary-image"> </a>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <div class="prodcut-name"> <a href="single-product.html">Copenhagen
                                                        Spitfire Chair</a> </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a
                                                            href="#"><i class="fa fa-star"></i></a> <a href="#"><i
                                                                class="fa fa-star"></i></a> <a href="#"><i
                                                                class="fa fa-star"></i></a> <a href="#"><i
                                                                class="fa fa-star-o"></i></a> </div>
                                                    <div class="prodcut-price">
                                                        <div class="new-price"> $220 </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->
                                    </div>
                                </div>

                            </aside>
                            <!--single aside end-->

                            <!--single aside start-->
                            <aside class="single-aside add-aside">
                                <a href="single-product.html"><img src="{{ asset('assets/website') }}/images/banner/add.jpg" alt=""></a>
                            </aside>
                            <!--single aside end-->
                        </div>
                    </div>
                    <!--shop sidebar end-->
                </div>
            </div>
        </div>
        <!--shop main area are end-->

        <!-- footer area start-->
        @include('partials.footer')
        <!--footer area start-->


        <!-- QUICKVIEW PRODUCT -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                              <div class="product-images">
                                   <!--modal tab start-->
                                    <div class="portfolio-thumbnil-area-2">
                                        <div class="tab-content active-portfolio-area-2">
                                            <div role="tabpanel" class="tab-pane active" id="view1">
                                                <div class="product-img">
                                                    <a href="#"><img src="{{ asset('assets/website') }}/images/product/01.jpg" alt="Single portfolio" /></a>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="view2">
                                                <div class="product-img">
                                                    <a href="#"><img src="{{ asset('assets/website') }}/images/product/02.jpg" alt="Single portfolio" /></a>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="view3">
                                                <div class="product-img">
                                                    <a href="#"><img src="{{ asset('assets/website') }}/images/product/03.jpg" alt="Single portfolio" /></a>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="view4">
                                                <div class="product-img">
                                                    <a href="#"><img src="{{ asset('assets/website') }}/images/product/04.jpg" alt="Single portfolio" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-more-views-2">
                                            <div class="thumbnail-carousel-modal-2 nav" data-tabs="tabs">
                                                <a href="#view1" aria-controls="view1" data-bs-toggle="tab"><img src="{{ asset('assets/website') }}/images/product/01.jpg" alt="" /></a>
                                                <a href="#view2" aria-controls="view2" data-bs-toggle="tab"><img src="{{ asset('assets/website') }}/images/product/02.jpg" alt="" /></a>
                                                <a href="#view3" aria-controls="view3" data-bs-toggle="tab"><img src="{{ asset('assets/website') }}/images/product/03.jpg" alt="" /></a>
                                                <a href="#view4" aria-controls="view4" data-bs-toggle="tab"><img src="{{ asset('assets/website') }}/images/product/04.jpg" alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!--modal tab end-->
                                    <!-- .product-images -->
                                    <div class="product-info">
                                        <h1>Aenean eu tristique</h1>
                                        <div class="price-box-3">
                                            <div class="s-price-box"> <span class="new-price">$160.00</span> <span class="old-price">$190.00</span> </div>
                                        </div> <a href="shop.html" class="see-all">See all features</a>
                                        <div class="quick-add-to-cart">
                                            <form method="post" class="cart">
                                                <div class="numbers-row">
                                                    <input type="number" id="french-hens" value="3" min="1"> </div>
                                                <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                            </form>
                                        </div>
                                        <div class="quick-desc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.Nam fringilla tristique auctor. </div>
                                        <div class="social-sharing-modal">
                                            <div class="widget widget_socialsharing_widget">
                                                <h3 class="widget-title-modal">Share this product</h3>
                                                <ul class="social-icons-modal">
                                                    <li><a  title="Facebook" href="#" class="facebook m-single-icon"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a  title="Twitter" href="#" class="twitter m-single-icon"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a  title="Pinterest" href="#" class="pinterest m-single-icon"><i class="fa fa-pinterest"></i></a></li>
                                                    <li><a  title="Google +" href="#" class="gplus m-single-icon"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a  title="LinkedIn" href="#" class="linkedin m-single-icon"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .product-info -->
                                </div>
                                <!-- .modal-product -->
                            </div>
                            <!-- .modal-body -->
                        </div>
                        <!-- .modal-content -->
                    </div>
                    <!-- .modal-dialog -->
                </div>
                <!-- END Modal -->
            </div>
        <!-- END QUICKVIEW PRODUCT -->

    </div>
    <!-- Body main wrapper end -->

@endsection

@section('custom-script')
@endsection
