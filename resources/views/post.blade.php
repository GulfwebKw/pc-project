@extends('layouts.base')

@section('title')
    {{ $post->title }}
@endsection

@section('breadcrumb')
    <span><i class="fa-solid fa-angle-right"></i></span> {{ $post->title }}
@endsection

@section('footerConcat' , true)


@section('body')


    <!--===== BLOG STARTS=======-->
    <div class="blogleft-section-area section-padding5">
        <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="blogleftinner3-area p-0">
                        @if($post->image)
                        <img src="{{ $post->image ? asset('storage/'.$post->image) : null }}" alt="{{ $post->title }}" class="w-100 innerimg">
                        @endif
                        <div class="afteralex-area">
                            <div class="alex">
                                <img src="{{ filament()->getUserAvatarUrl( $post->author ) }}" alt="" style="border-radius: 50%">
                                <p class="font-ks font-16 lineh-24 weight-600 color-29">{{ $post->author->name }}</p>
                            </div>
                            <div class="alex">
                                <img src="{{ asset('assets/images/icons/daterane.png') }}" alt="">
                                <a href="#" class="font-16 lineh-16 font-ks weight-600 color-29">{{ $post->created_at->diffForHumans() }}</a>
                            </div>
                            <div class="alex alex1">
                                <img src="{{ asset('assets/images/icons/cmnt1.svg') }}" alt="">
                                <a href="#" class="color-29"><p class="font-ks font-16 lineh-24 weight-600 color-29">{{ $post->comments()->count() }} Comments</p></a>
                            </div>

                        </div>
                        <h1 class="font-lora font-40 lineh-50 weight-600 color-29 margin-b20">{{ $post->title }}</h1>
                        <div class="font-ks fotn-16 weight-500 lineh-26 color-30  margin-b20">
                            {!! nl2br(($post->content)) !!}
                        </div>

                        <div class="border30 borderpadding"></div>
                        <div class="postsocial-area">
                            <div class="posttags">
                                <h1 class="font-24 weight-600 color-29 font-lora ">Blog Comments (2)</h1>
                            </div>
                            <div class="share-area">
                                <ul>
                                    <li><p class="font-ks fon-16 lineh-16 weight-600 color-29">Social Share:</p></li>
                                    <li><a href="http://www.twitter.com/share?url={{ urlencode( route('post' , ['Post' => $post->slug]) ) }}" class="color-29"><i class="fa-brands fa-x-twitter"></i>
                                        </a></li>
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode( route('post' , ['Post' => $post->slug]) ) }}" class="color-29"><i class="fa-brands fa-facebook-f"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        @include('layouts.comment' , ['comments' => $post->comments ])

                        <div class="blogontact-section-area" id="makeComment">
                            <h1 class="font-24 weight-600 color-29 font-lora margin-b">Leave a Reply</h1>
                            <p class="font-ks font-16 lineh-26 weight-500 color-30">Provide clear contact information, including phone number, email, and address.</p>
                            <form action="{{ route('sendComment' , ['Post' => $post->slug]) }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="bloginput">
                                            <input type="text" required name="first_name" value="{{ old('first_name') }}" placeholder="First Name">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="bloginput">
                                            <input type="text" required name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" class="font-ks">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="bloginput">
                                            <input type="email" required name="email" value="{{ old('email') }}" placeholder="Email" class="font-ks">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="bloginput">
                                            <input type="number" required name="phone" value="{{ old('phone') }}" placeholder="Phone" class="font-ks">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="bloginput">
                                            <textarea cols="30" required name="message" rows="10" placeholder="Message" class="font-ks">{{ old('message') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-right">
                                        <div class="textbtn">
                                            <button type="submit" class="quitobtn font-ks font-16 lineh-16 weight-700 color text-right">Submit Now <span><i class="fa-solid fa-arrow-right"></i></span></button>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== BLOG END =======-->
@endsection

