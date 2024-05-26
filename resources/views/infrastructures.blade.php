@extends('layouts.base')

@section('title' , 'Our Infrastructure')

@section('breadcrumb')
    <span><i class="fa-solid fa-angle-right"></i></span> Infrastructure
@endsection

@section('footerConcat' , true)


@section('body')

    <div class="about3-section-area section-padding5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 aos-init" data-aos="fade-left" data-aos-duration="800">
                    <div class="about3-textarea1">
                        @if(app(\App\Settings\HomepageSettings::class)->industriesSubTitle)
                            <span class="about3span font-ks lineh-16 font-16 weight-600 color-29 d-inline-block margin-b24">{{ app(\App\Settings\HomepageSettings::class)->industriesSubTitle }}</span>
                        @endif
                        @if(app(\App\Settings\HomepageSettings::class)->industriesTitle)
                            <h1 class="font-lora font-48 lineh-56 weight-600 color-29 margin-b20">{{ app(\App\Settings\HomepageSettings::class)->industriesTitle }}</h1>
                        @endif
                        <p class="font-ks font-16 lineh-26 weight-500 color-30 ">
                            {!! nl2br((app(\App\Settings\HomepageSettings::class)->industriesContent)) !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
                    <div class="about3-images1">
                        @if(app(\App\Settings\HomepageSettings::class)->industriesImage)
                            <img src="{{ asset('storage/'.app(\App\Settings\HomepageSettings::class)->industriesImage) }}" alt="" data-aos="zoom-out" data-aos-duration="1200" class="aos-init aos-animate">
                        @endif
                        <img src="{{ asset('assets/images/elementor/elementor17.png') }}" alt="" class="elementor-9 keyframe3">
                    </div>
                </div>
            </div>
            <div class="row margin-t40">
                @foreach($navbar_infrastructures as $navbar_infrastructure)
                    <div class="col-lg-3 col-md-6 aos-init" data-aos="fade-up" data-aos-duration="800">
                        <a href="{{ route('infrastructure' , ['Infrastructure' => $navbar_infrastructure->slug]) }}">
                            <div class="service4-boxarea5 text-center margin-b24">
                                <div class="service5-boxarea5">
                                    <div class="service5-icons margin-b20">
                                        @if($navbar_infrastructure->icon)
                                            <img src="{{ asset('storage/'.$navbar_infrastructure->icon) }}" height="38" alt="">
                                        @endif
                                    </div>
                                    <p class="font-lora font-20 lineh-26 weight-600 color-31">{{ $navbar_infrastructure->title }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

