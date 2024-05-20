@extends('layouts.base')

@section('title')
    Contact us
@endsection


@section('breadcrumb')
    <span><i class="fa-solid fa-angle-right"></i></span> Contact
@endsection

@section('body')


    <!--===== CONTACT STARTS=======-->
    <div class="contcatinner2-scetio-area section-padding5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 margin-t40">
                    <div class="map-section-area">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <div id="map" class="gmap_iframe" ></div>
                                <script src="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.js"></script>
                                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.css" />
                                <script>
                                    var map = L.map('map').setView([{{ $setting->location['lat'] }}, {{ $setting->location['lng'] }}], 13);
                                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                        maxZoom: 19,
                                    }).addTo(map);
                                    L.marker([{{ $setting->location['lat'] }}, {{ $setting->location['lng'] }}]).addTo(map)
                                        .bindPopup('{{ $setting->title }}')
                                        .openPopup();
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 margin-t40">
                    <div class="contact2-all-contact contact2inner">
                        <div class="row align-items-center">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="font-24 font-lora lineh-24 color-29 weight-600 margin-b">Send Us A Message</h1>
                                    <p class="font-16 font-ks lineh-26 weight-500 color-30 margin-b24">Ready to take your business to the next level? Get in touch with us today to learn more about our services and how we can help you succeed. Together, let's transform challenges into opportunities and turn your vision into reality.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact2-maincontact">
                                    <form method="POST" action="{{ route('sendContactUs') }}">
                                        @csrf
                                        <div class="contact-from-area">
                                            @if(session()->has('success'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('success') }}
                                                </div>
                                            @endif
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="first-input">
                                                        <input type="text" required name="first_name" value="{{ old('first_name') }}" placeholder="First Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="first-input">
                                                        <input type="text" required name="last_name" value="{{ old('last_name') }}" placeholder="Last Name">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="first-input">
                                                        <input type="number" required name="phone" value="{{ old('phone') }}" placeholder=" Phone Number">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="first-input">
                                                        <input type="email" required name="email" value="{{ old('email') }}" placeholder="Email Address">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="textarea">
                                                        <textarea cols="30" required name="message" id="message" rows="10" placeholder="Message">{{ old('message') }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="contact5-btn5 text-left">
                                                        <button class="font-ks font-16 lineh-16 weight-700 color margin-t32 contcat5" type="submit">Submit <span><i class="fa-solid fa-arrow-right-long"></i></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-padding">
                                    <div class="contact2-auhtor-section contacrtblogbg">
                                        <div class="clock-area">
                                            <img src="assets/images/icons/clock1.svg" alt="">
                                        </div>
                                        <div class="contact-location">
                                            <h1 class="font-20 font-lora lineh-24 color-29 weight-600 margin-b">Contact us</h1>
                                            <p class="font-ks font-16 lineh-26 color-30 weight-500 ">{{ $setting->officeAddress }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="contact-padding margin-t">
                                    <div class="contact2-auhtor-section contacblogbg contacrtblogbg">
                                        <div class="clock-area">
                                            <img src="assets/images/icons/phone4.svg" alt="">
                                        </div>
                                        <div class="contact-location">
                                            <h1 class="font-20 font-lora lineh-24 color weight-600 margin-b">Call or text</h1>
                                            <p class="font-ks font-16 lineh-26 color weight-400 "><a href="tel:{{ str_replace(' ', '' , $setting->phone) }}" class="color">{{ $setting->phone }}</a></p>
                                        </div>
                                    </div>
                                </div>


                                <div class="contact-padding margin-t ">
                                    <div class="contact2-auhtor-section contacrtblogbg">
                                        <div class="clock-area">
                                            <img src="assets/images/icons/email3.svg" alt="">
                                        </div>
                                        <div class="contact-location">
                                            <h1 class="font-20 font-lora lineh-24 color-29 weight-600 margin-b">Email us today</h1>
                                            <p class="font-ks font-16 lineh-26 color-30 weight-400 "><a href="mailto:{{ $setting->email }}" class="color-17">{{ $setting->email }}</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--===== CONTACT  END=======-->
@endsection

