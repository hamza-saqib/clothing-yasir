@extends('layouts.master')

@section('title-meta')
    <title>Contact Us | {{ config('app.name') }} </title>
    <meta name="description" content="Need assistance with your custom packaging boxes? Custom Boxes US is here to help. Contact us via Call at (925) 695 9888 or email us at info@customboxesus.com">
    <link rel="canonical" href="{{route('contact-us')}}" />

@endsection

@section('custom-css')
@endsection

@section('content')
<div class="breadcrumb-area bg-gray">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h1 style="color: red">Contact Us</h1>
        </div>
    </div>
</div>
<div class="contact-area pt-30 pb-30">
    <div class="container">

        <div class="get-in-touch-wrap">
            <h2 class="text-center" style="color: rgb(26, 76, 226)">Get In Touch</h2>
            <p class="form-messege">
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
                    <div class="alert alert-success">
                        <ul>
                            <li>{!! \Session::get('success') !!}</li>
                        </ul>
                    </div>
                @elseif(\Session::has('error'))
                    <div class="alert alert-danger">
                        <ul>
                            <li>{!! \Session::get('error') !!}</li>
                        </ul>
                    </div>
                @endif
            </p>
            <div class="contact-from contact-shadow">
                <form id="contact-form2" action="{{route('contact-us.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <input name="name" required type="text" value="{{old('name')}}" placeholder="Name">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <input name="email" required type="email" value="{{old('email')}}" placeholder="Email">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <input name="phone"  type="text" value="{{old('phone')}}" placeholder="Phone">
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <input name="company" required value="{{old('company')}}" type="text" placeholder="Company">
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <input name="subject" required value="{{old('subject')}}" type="text" placeholder="Subject">
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <textarea name="message" required placeholder="Your Message">{{old('message')}}</textarea>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <button class="submit" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <br>
        <br>
        <div class="contact-info-wrap-3 pb-85">
            <h2 class="text-center" style="color: rgb(26, 76, 226)">Contact Info</h2>
            <p class="text-center">Make your dream packaging come true with! Contact us and Get your desired packaging today from us!</p>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="single-contact-info-3 text-center mb-30">
                        <i class="icon-location-pin "></i>
                        <h4>our address</h4>
                        <p>Willow Pass Rd, Concord, CA 94520, United States. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single-contact-info-3 extra-contact-info text-center mb-30">
                        <ul>
                            <li><i class="icon-screen-smartphone"></i> <a href="tel:9256959888"> (925) 695 9888 </a></li>
                            <li><i class="icon-envelope "></i> <a href="mailto:info@customboxesus.com"> info@customboxesus.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single-contact-info-3 text-center mb-30">
                        <i class="icon-clock "></i>
                        <h4>openning hour</h4>
                        <p>24 Hours</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="contact-map pt-120">
            <div id="map"></div>
        </div> --}}
    </div>
</div>
@endsection

@section('custom-script')
@endsection
