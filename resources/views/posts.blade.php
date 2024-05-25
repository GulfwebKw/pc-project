@extends('layouts.base')

@section('title' , 'Services')

@section('breadcrumb')
    <span><i class="fa-solid fa-angle-right"></i></span> News
@endsection

@section('footerConcat' , true)


@section('body')

    <!--===== BLOG STARTS=======-->
    <div class="cloginner-3-sevtion-area section-padding5">
        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                <div class="col-lg-4 col-md-6">
                    <div class="blog1-boxarea">
                        <div class="blog1-img">
                            <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}">
                        </div>
                        <div class="blog1-padding">
                            <div class="blog1-text">
                                <img src="{{ asset('assets/images/icons/vector1.png') }}" alt="">

                                <a href="{{ route('post' , ['Post' => $post->slug]) }}" class="color-29"><p class="font-ks font-16 weight-600 color-29 lineh-26">{{ $post->created_at->format('d F Y') }}</p></a>
                            </div>
                            <a href="{{ route('post' , ['Post' => $post->slug]) }}" class="font-lora font-20 lineh-30 weight-600 color-29 margin-b d-inline-block link-hover">{{ $post->title }}</a>
                            <p class="font-16 font-ks lineh-26 weight-500 color-26 margin-b">{!! nl2br($post->short_content) !!}</p>
                            <a href="{{ route('post' , ['Post' => $post->slug]) }}" class="font-ks font-16 lineh-16 color-29 weight-700  d-inline-block laearnmore2 bloginnerhover">Learn More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

           {{ $posts->links('layouts.paginator') }}
        </div>
    </div>
    <!--===== BLOG END =======-->

@endsection

