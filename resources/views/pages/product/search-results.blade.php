@extends('layouts.master')

@section('title-meta')
    <title>Boxes List | {{ config('app.name') }} </title>
    <meta name="description" content="this is description">
    <link rel="canonical" href="{{route('product.search')}}" />

@endsection

@section('custom-css')
@endsection

@section('content')


    <div class="container pt-15" style="text-align: center;">

    </div>
    <div class="shop-area pt-40 pb-40">
        <div class="container">
            <div class="row flex-row-reverse">

                <div class="col-lg-12">

                    <div class="shop-bottom-area">
                        <div class="tab-content jump">
                            <div id="shop-1" class="tab-pane active">
                                <div class="row">
                                    @foreach ($products as $product)
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="{{ route('product.show', [$product->industry, $product]) }}">
                                                        <img src="{{ asset('storage') }}/images/products/{{ $product->image1 }}"
                                                            alt="{{$product->image_alt_1}}">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">

                                                    <h3>{{ $product->name }}</h3>

                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">


                                                    <div class="pro-add-to-cart">
                                                        <button title="Get Qoute">Get Qoute</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>

                        </div>
                        {{-- <div class="pro-pagination-style text-center mt-10">
                            <ul>
                                <li><a class="prev" href="#"><i class="icon-arrow-left"></i></a></li>
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a class="next" href="#"><i class="icon-arrow-right"></i></a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- <div class="container pt-15" style="text-align: center;">
        <h3>Detail Description</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus voluptatibus qui saepe quo, consequatur pariatur
            iure sit officia delectus dolore, iste magni quod hic distinctio voluptas deleniti odit culpa corrupti.</p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae rerum non officiis quo, maiores quod molestias
        architecto nisi optio eaque eligendi explicabo modi tempora consequatur in, animi debitis ad culpa!

    </div> --}}
@endsection

@section('custom-script')
@endsection
