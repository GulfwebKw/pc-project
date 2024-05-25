@extends('layouts.base')

@section('title')
    {{ $page->title }}
@endsection

@section('breadcrumb')
    <span><i class="fa-solid fa-angle-right"></i></span> {{ $page->title }}
@endsection

@section('footerConcat' , true)


@section('body')

    <!--===== ABOUT STARTS=======-->
    <div class="about3-section-area section-padding5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 aos-init" data-aos="fade-right" data-aos-duration="1000">
                    <div class="about3-images1">
                        @if( $page->image )
                        <img src="{{ asset('storage/'.$page->image) }}" alt="" data-aos="zoom-out" data-aos-duration="1200" class="aos-init">
                        @endif
                        <img src="{{ asset('assets/images/elementor/elementor17.png') }}" alt="" class="elementor-9 keyframe3">
                    </div>
                </div>
                <div class="col-lg-6 aos-init" data-aos="fade-left" data-aos-duration="800">
                    <div class="about3-textarea1">
                        @if( $page->subTitle )
                        <span class="about3span font-ks lineh-16 font-16 weight-600 color-29 d-inline-block margin-b24">{{ $page->subTitle }}</span>
                        @endif
                        <h1 class="font-lora font-48 lineh-56 weight-600 color-29 margin-b20">{{ $page->title }}</h1>
                        <div class="font-ks font-16 lineh-26 weight-500 color-30 ">
                            {!!  nl2br( $page->content) !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== ABOUT END=======-->
@endsection

