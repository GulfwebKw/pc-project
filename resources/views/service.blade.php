@extends('layouts.base')

@section('title')
    {{ $service->title }}
@endsection

@section('breadcrumb')
    <span><i class="fa-solid fa-angle-right"></i></span>
    <a href="{{ route('services') }}" class="color">Service</a>
    <span><i class="fa-solid fa-angle-right"></i></span>{{ $service->title }}
@endsection

@section('footerConcat' , true)


@section('body')
    <!--===== SERVICES SINGLE STARTS=======-->
    <div class="serviceleft-section-area section-padding5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="serviceauthior-area p-0">
                        @if($service->image)
                        <img src="{{ asset('storage/'.$service->image) }}" alt="{{ $service->title }}">
                        @endif
                        <div>
                            {!! nl2br($service->content) !!}
                        </div>
                        <div class="row margin-t32">
                            @foreach(collect($navbar_services)->random()->take(2) as $navbar_service)
                            <div class="col-lg-6 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                                <a href="{{ route('service' , ['Service' => $navbar_service->slug]) }}">
                                    <div class="service4-boxarea5 text-center margin-b24">
                                        <div class="service5-boxarea5">
                                            <div class="service5-icons margin-b20">
                                                <img src="{{ asset('storage/'.$navbar_service->icon) }}" height="38" alt="{{ $navbar_service->title }}">
                                            </div>
                                            <p class="font-lora font-20 lineh-26 weight-600 color-31">{{ $navbar_service->title }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="serviceour-area">
                        <h1 class="font-lora font-24 lineh-24 weight-600 color-29 margin-b24">Our Services</h1>
                        @foreach(collect($navbar_services)->random()->take(5) as $navbar_service)
                        <div class="singlepalnning-area margin-b20">
                            <a href="{{ route('service' , ['Service' => $navbar_service->slug]) }}" class="font-18 font-ks lineh-18 weight-600 color-29 ts">{{ $navbar_service->title }}</a>
                            <span><i class="fa-solid fa-angle-right ts"></i></span>
                        </div>
                        @endforeach
                    </div>


                    <form method="POST" action="{{ route('sendContactUs') }}">
                        @csrf
                        <input type="hidden" value="Contact US In Service" name="subject">
                        <div class="quito-contact">
                            <h1 class="font-24 lineh-24 weight-600 color-29  font-lora margin-b20">{{ $setting->sendMessageTitleInPages  }}</h1>
                            <div class="row">
                                <div class="col-lg-12">
                                    @if(session()->has('success'))
                                        <div class="alert alert-success mt-3">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                    <div class="quitoinput">
                                        <input type="text" required name="first_name" value="{{ old('first_name') }}" placeholder="First Name">
                                    </div>
                                    <div class="quitoinput">
                                        <input type="text" required name="last_name" value="{{ old('last_name') }}" placeholder="Last Name">
                                    </div>

                                    <div class="quitoinput">
                                        <input type="email" required name="email" value="{{ old('email') }}" placeholder="Email">
                                    </div>

                                    <div class="quitoinput">
                                        <input type="number" required name="phone" value="{{ old('phone') }}" placeholder="Phone">
                                    </div>

                                    <div class="quitoinput">
                                        <textarea cols="30" required name="message" rows="15" placeholder="Message">{{ old('message') }}</textarea>
                                    </div>
                                    <button type="submit" class="quitobtn font-ks font-16 lineh-16 weight-700 color ">Submit Now <span><i class="fa-solid fa-arrow-right"></i></span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--===== SERVICES SINGLE END =======-->
@endsection

