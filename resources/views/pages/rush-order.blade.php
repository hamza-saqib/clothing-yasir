@extends('layouts.master')

@section('title-meta')
    <title>Rush Order | {{ config('app.name') }} </title>
    <meta name="description" content="Are you looking for a customer service team that is committed to customer satisfaction? Please reach out to us via our rush order form.">
    <link rel="canonical" href="{{route('product.rush-order')}}" />

@endsection

@section('custom-css')
@endsection

@section('content')
    {{-- <div class="breadcrumb-area bg-gray"
        style="height:200px; background-image:url('{{ asset('assets/website') }}/images/industry/Capture.PNG');">

    </div> <br>

    <div class="container pt-15" style="text-align: center;">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus voluptatibus qui saepe quo, consequatur pariatur
            iure sit officia delectus dolore, iste magni quod hic distinctio voluptas deleniti odit culpa corrupti.</p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae rerum non officiis quo, maiores quod molestias
        architecto nisi optio eaque eligendi explicabo modi tempora consequatur in, animi debitis ad culpa!

    </div> --}}
    <div class="shop-area pt-40 pb-40">
        <div class="container">
            <div class="row ">
                <div class="mb-30" style="text-align: center;">
                    <h2 class="mb-10"><strong> Rush orders </strong> Possible Now with</h2>
                    <h3 style="color: rgb(25, 25, 233)"><strong>Custom BOXES US</strong></h3>
                    <p>We truly understand that everything is not standard so our expedite plan of <strong>4</strong> to
                        <strong>6</strong> business days is the solution to your expedite requirements.
                    </p>
                    <p><strong>Fill below form and get instant response from one of our packaging expert.</strong>
                    </p>
                </div>
                <div class="col-lg-1">
                </div>
                <div class="col-lg-10">
                    {{-- <div style="background-color: rgb(175, 174, 174)" class="pl-10 pt-2 pb-1 mb-3"> --}}
                    <h2 style="color: rgb(236, 27, 27)"> <strong> Get Custom Quote Now !</strong></h2>
                    {{-- </div> --}}
                    <div class="col-lg-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
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
                                                    <option selected disabled value="">Products *</option>
                                                    @foreach ($products as $product)
                                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                        <div class="billing-info mb-20">
                                            <input value="{{ old('height') }}" type="number" required name="height"
                                                placeholder="Height *">
                                            <input type="hidden" name="qoute_form" value="Rush Order Form">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                        <div class="billing-info mb-20">
                                            <input value="{{ old('width') }}" type="number" required name="width"
                                                placeholder="Width *">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                        <div class="billing-info mb-20">
                                            <input value="{{ old('depth') }}" type="number" required name="depth"
                                                placeholder="Depth *">
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
                                            <input value="{{ old('qty_1') }}" type="number" name="qty_1" required
                                                placeholder="1st Qty *">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20">
                                            <input value="{{ old('qty_2') }}" type="number" name="qty_2"
                                                placeholder="2nd Qty (Optional)">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <label for=""> <strong> Aditional Addons</strong></label>

                                    </div>

                                    <div class="col-lg-3">
                                        <div class="billing-info mb-20">
                                            <div class="checkout-account ">
                                                <input class="checkout-toggle2" id="Gloss Lamination"
                                                    value="Gloss Lamination" name="addons[]" type="checkbox">
                                                <span>Gloss Lamination</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="checkout-account ">
                                            <input class="checkout-toggle2" id="Matte Lamination" value="Matte Lamination"
                                                name="addons[]" type="checkbox">
                                            <span>Matte Lamination</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="checkout-account ">
                                            <input class="checkout-toggle2" id="Window Patching" value="Window Patching"
                                                name="addons[]" type="checkbox">
                                            <span>Window Patching</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="checkout-account ">
                                            <input class="checkout-toggle2" id="Embossing" value="Embossing" name="addons[]"
                                                type="checkbox">
                                            <span>Embossing</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="billing-info mb-20">
                                            <div class="checkout-account ">
                                                <input class="checkout-toggle2" id="Spot UV Coating" value="Spot UV Coating"
                                                    name="addons[]" type="checkbox">
                                                <span>Spot UV Coating</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="checkout-account ">
                                            <input class="checkout-toggle2" id="Full UV Coating" value="Full UV Coating"
                                                name="addons[]" type="checkbox">
                                            <span>Full UV Coating</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="checkout-account  mb-20">
                                            <input class="checkout-toggle2" id="Silver Foiling" value="Silver Foiling"
                                                name="addons[]" type="checkbox">
                                            <span>Silver Foiling</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="checkout-account  mb-20">
                                            <input class="checkout-toggle2" id="Gold Foiling" value="Gold Foiling"
                                                name="addons[]" type="checkbox">
                                            <span>Gold Foiling</span>
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
                                    <br>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20 ">
                                            <input value="{{ old('customer_name') }}" type="text" name="customer_name"
                                                required placeholder="Your Name *">
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3">
                                        <div class="billing-info mb-20 mt-22">
                                            <input value="{{ old('customer_email') }}" type="text" name="customer_email"
                                                required placeholder="Email *">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                        <div class="billing-info mb-20 mt-22">
                                            <input value="{{ old('customer_phone') }}" type="text" name="customer_phone"
                                                placeholder="Phone (Optional)">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20">
                                            <input value="{{ old('company_name') }}" type="text" name="company_name"
                                                placeholder="Company Name (Optional)">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20">
                                            <input value="{{ old('company_web_link') }}" type="text"
                                                name="company_web_link" placeholder="Company Website (Optional)">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20">
                                            <input value="{{ old('customer_name') }}" type="file" name="box_design_file">
                                            <label for="customer_name">File Formats (.docs, .pdf, .jpg, .png, jpeg)</label>

                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                    </div>

                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="billing-info mb-20">
                                        <textarea name="customer_note" placeholder="Notes about your order, e.g. special notes for delivery. " name="message"
                                            rows="4">{{ old('customer_name') }}</textarea>

                                    </div>
                                </div>

                                <div class="pro-details-action-wrap">
                                    <div class="pro-details-add-to-cart">
                                        <button class="btn" type="submit" style="background-color: #db1515">Get
                                            Qoute</button>
                                    </div>
                                </div>
                            </form>
                        </div>
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
