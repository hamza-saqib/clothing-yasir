@extends('layouts.master')

@section('title-meta')
    <title>{{ $industry->meta_tag_title }}</title>
    <meta name="description" content="{{ $industry->meta_tag_description }}">
    <meta name="keywords" content="{{ $industry->meta_tag_keywords }}">
    <link rel="canonical" href="{{route('industry.show', $industry)}}" />

@endsection

@section('custom-css')
@endsection

@section('content')
    <div class="text-center bg-img"
        style="height:270px; width:100%; background-image:url('{{ asset('assets/website') }}/images/industry/{{ $industry->image }}');">
        <h1 class="pt-100">{{ $industry->name }}</h1>
    </div>
    <br>

    <div class="container home-content home-content-psize pt-15" style="text-align: center;">
        {!! $industry->summary2 !!}
    </div>
    <div class="shop-area pt-40 pb-40">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-4">
                    {{-- <div style="background-color: rgb(175, 174, 174)" class="pl-10 pt-2 pb-1 mb-3"> --}}
                    <h2 style="color: rgb(236, 27, 27)"> <strong> Get Custom Quote Now</strong></h2>
                    {{-- </div> --}}
                    <div class="col-lg-12">
                        @if ($errors->any())
                            <div class="alert " style="background-color: #db1515;">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li style="color: white">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (\Session::has('success'))
                            <div class="alert " style="background-color: #0c691c;">
                                <ul>
                                    <li style="color: white; font-size: 18px">{!! \Session::get('success') !!}</li>
                                </ul>
                            </div>
                        @elseif(\Session::has('error'))
                            <div class="alert " style="background-color: #db1515;">
                                <ul>
                                    <li style="color: white">{!! \Session::get('error') !!}</li>
                                </ul>
                            </div>
                        @endif
                        <div class="billing-info-wrap ">
                            <form id="orderForm" action="{{ route('order.store') }}" method="POST"
                                enctype="multipart/form-data">
                                {{-- <h3>Qoute Area</h3> --}}
                                @csrf

                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-20">
                                            <div class="billing-select mb-20">
                                                <select name="product_id" required>
                                                    <option selected disabled value="">Products</option>
                                                    @foreach ($products as $product)
                                                        @if (old('product_id') == $product->id)
                                                            <option selected value="{{ $product->id }}">
                                                                {{ $product->name }}</option>
                                                        @else
                                                            <option value="{{ $product->id }}">{{ $product->name }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                        <div class="billing-info mb-20">
                                            <input type="number" value="{{ old('height') }}" required name="height"
                                                placeholder="Height">
                                            <input type="hidden" name="qoute_form" value="Industry Form">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                        <div class="billing-info mb-20">
                                            <input type="number" value="{{ old('width') }}" required name="width"
                                                placeholder="Width">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                        <div class="billing-info mb-20">
                                            <input type="number" value="{{ old('depth') }}" required name="depth"
                                                placeholder="Depth">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                        <div class="billing-info mb-20">
                                            <div class="billing-select mb-20">
                                                <select name="unit" required>
                                                    <option selected disabled value="">Unit</option>
                                                    <option {{ old('unit') == 'Inches' ? 'selected' : '' }}
                                                        value="Inches">Inches</option>
                                                    <option {{ old('unit') == 'MM' ? 'selected' : '' }} value="MM">MM
                                                    </option>
                                                    <option {{ old('unit') == 'CM' ? 'selected' : '' }} value="CM">CM
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20">
                                            <div class="billing-select mb-20">
                                                <select name="material" required>
                                                    <option selected disabled value="">Material</option>
                                                    <option {{ old('material') == '14pt. Cardstock' ? 'selected' : '' }}
                                                        value="14pt. Cardstock">14pt. Cardstock</option>
                                                    <option {{ old('material') == '16pt. Cardstock' ? 'selected' : '' }}
                                                        value="16pt. Cardstock">16pt. Cardstock</option>
                                                    <option {{ old('material') == '18pt. Cardstock' ? 'selected' : '' }}
                                                        value="18pt. Cardstock">18pt. Cardstock</option>
                                                    <option {{ old('material') == '20pt. Cardstock' ? 'selected' : '' }}
                                                        value="20pt. Cardstock">20pt. Cardstock</option>
                                                    <option {{ old('material') == '22pt. Cardstock' ? 'selected' : '' }}
                                                        value="22pt. Cardstock">22pt. Cardstock</option>
                                                    <option {{ old('material') == '24pt. Cardstock' ? 'selected' : '' }}
                                                        value="24pt. Cardstock">24pt. Cardstock</option>
                                                    <option
                                                        {{ old('material') == 'Corrugated Cardboard' ? 'selected' : '' }}
                                                        value="Corrugated Cardboard">Corrugated Cardboard</option>
                                                    <option
                                                        {{ old('material') == '"Brown Kraft CardStock' ? 'selected' : '' }}
                                                        value="Brown Kraft CardStock">Brown Kraft CardStock</option>
                                                    <option
                                                        {{ old('material') == 'Recycled Bux Board' ? 'selected' : '' }}
                                                        value="Recycled Bux Board">Recycled Bux Board</option>
                                                    <option {{ old('material') == 'Rigid Material' ? 'selected' : '' }}
                                                        value="Rigid Material">Rigid Material</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20">
                                            <div class="billing-select mb-20">
                                                <select name="color" required>
                                                    <option selected disabled value="">Color</option>
                                                    <option {{ old('color') == '1 Color' ? 'selected' : '' }}
                                                        value="1 Color">1 Color</option>
                                                    <option {{ old('color') == '2 Color' ? 'selected' : '' }}
                                                        value="2 Color">2 Color</option>
                                                    <option {{ old('color') == '3 Color' ? 'selected' : '' }}
                                                        value="3 Color">3 Color</option>
                                                    <option {{ old('color') == '4 Color' ? 'selected' : '' }}
                                                        value="4 Color">4 Color</option>
                                                    <option {{ old('color') == '4/1 Color' ? 'selected' : '' }}
                                                        value="4/1 Color">4/1 Color</option>
                                                    <option {{ old('color') == '4/2 Color' ? 'selected' : '' }}
                                                        value="4/2 Color">4/2 Color</option>
                                                    <option {{ old('color') == '4/3 Color' ? 'selected' : '' }}
                                                        value="4/3 Color">4/3 Color</option>
                                                    <option {{ old('color') == '4/4 Color' ? 'selected' : '' }}
                                                        value="4/4 Color">4/4 Color</option>
                                                    <option {{ old('color') == 'Pantone (PMS)' ? 'selected' : '' }}
                                                        value="Pantone (PMS)">Pantone (PMS)</option>
                                                    <option {{ old('color') == 'Full Color Printing' ? 'selected' : '' }}
                                                        value="Full Color Printing">Full Color Printing</option>
                                                    <option {{ old('color') == 'Both Side Printing' ? 'selected' : '' }}
                                                        value="Both Side Printing">Both Side Printing</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20">
                                            <input type="number" value="{{ old('qty_1') }}" name="qty_1" required
                                                placeholder="1st Qty">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20">
                                            <input type="number" value="{{ old('qty_2') }}" name="qty_2"
                                                placeholder="2nd Qty">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="billing-info mb-20">
                                            <label>Addons </label>
                                            <div class="checkout-account ">
                                                <input class="checkout-toggle2" id="Gloss Lamination"
                                                    value="Gloss Lamination" name="addons[]" type="checkbox">
                                                <span>Gloss Lamination</span>
                                            </div>
                                            <div class="checkout-account ">
                                                <input class="checkout-toggle2" id="Matte Lamination"
                                                    value="Matte Lamination" name="addons[]" type="checkbox">
                                                <span>Matte Lamination</span>
                                            </div>
                                            <div class="checkout-account ">
                                                <input class="checkout-toggle2" id="Window Patching" value="Window Patching"
                                                    name="addons[]" type="checkbox">
                                                <span>Window Patching</span>
                                            </div>
                                            <div class="checkout-account ">
                                                <input class="checkout-toggle2" id="Embossing" value="Embossing"
                                                    name="addons[]" type="checkbox">
                                                <span>Embossing</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="billing-info mb-20 mt-25">
                                            {{-- <label> Addons </label> --}}
                                            <div class="checkout-account ">
                                                <input class="checkout-toggle2" id="Spot UV Coating" value="Spot UV Coating"
                                                    name="addons[]" type="checkbox">
                                                <span>Spot UV Coating</span>
                                            </div>
                                            <div class="checkout-account ">
                                                <input class="checkout-toggle2" id="Full UV Coating" value="Full UV Coating"
                                                    name="addons[]" type="checkbox">
                                                <span>Full UV Coating</span>
                                            </div>
                                            <div class="checkout-account ">
                                                <input class="checkout-toggle2" id="Silver Foiling" value="Silver Foiling"
                                                    name="addons[]" type="checkbox">
                                                <span>Silver Foiling</span>
                                            </div>
                                            <div class="checkout-account ">
                                                <input class="checkout-toggle2" id="Gold Foiling" value="Gold Foiling"
                                                    name="addons[]" type="checkbox">
                                                <span>Gold Foiling</span>
                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        var selectedAddons = @json(old('addons'));
                                        if (selectedAddons) {
                                            for (let index = 0; index < selectedAddons.length; index++) {
                                                document.getElementById(selectedAddons[index]).setAttribute("checked", "true");
                                            }
                                        }
                                    </script>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-20">
                                            <input value="{{ old('box_design_file') }}" type="file"
                                                name="box_design_file">
                                            <label for="box_design_file">File Formats (.docs, .pdf, .jpg, .png,
                                                jpeg)</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-20">
                                            <input value="{{ old('customer_name') }}" type="text" name="customer_name"
                                                required placeholder="Your Name">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20">
                                            <input value="{{ old('customer_email') }}" type="text" name="customer_email"
                                                required placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20">
                                            <input value="{{ old('customer_phone') }}" type="text" name="customer_phone"
                                                placeholder="Phone">
                                        </div>
                                    </div>


                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="billing-info mb-20">
                                        <textarea name="customer_note" placeholder="Notes about your order, e.g. special notes for delivery. " name="message"
                                            rows="4">{{ old('customer_note') }}</textarea>

                                    </div>
                                </div>

                                <div class="pro-details-action-wrap">
                                    <div class="pro-details-add-to-cart">
                                        <button style="background-color: #db1515" type="submit" class="btn">Get
                                            Qoute</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">

                    <div class="shop-bottom-area">
                        <div class="tab-content jump">
                            <div id="shop-1" class="tab-pane active">
                                <div class="row">
                                    @foreach ($products as $product)
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="{{ route('product.show', [$industry, $product]) }}">
                                                        <img src="{{ asset('storage') }}/images/products/{{ $product->image1 }}"
                                                            alt="{{ $product->image_alt_1 }}">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">

                                                    <h3>{{ $product->name }}</h3>

                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">

                                                    <div class="pro-add-to-cart">
                                                        <a href="{{ route('product.show', [$industry, $product]) }}">
                                                            <button title="Get Qoute">Get Qoute</button>
                                                        </a>
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
    <div class=" home-content home-content-psize container pt-15">
        {!! $industry->description !!}
    </div>
@endsection

@section('custom-script')
@endsection
