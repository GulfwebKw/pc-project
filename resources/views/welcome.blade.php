@extends('layouts.base')


@section('body')



    <!--===== WElCOME STARTS=======-->
    <div class="welcome4-section-area">
        <img src="{{ asset('assets/images/background/welcome4-background.png') }}" alt="" class="img-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="welcome4-textarea">
                        <span class="trust font-ks font-16 lineh-16 weight-600 color margin-b24 ">Trusted Law Consulting Services</span>
                        <div class="warp">
                            <h1 class="font-lora font-60 lineh-64 weight-500 color quote text-capitalize">Elevate your legal strategy partner to consalt</h1>
                        </div>
                        <p class="font-ks font-16 lineh-26 weight-500 color margin-t">We have a deep understanding of various industries, allowing <br> us to provide specialized legal guidance tailored to your sector.</p>
                        <div class="shecdule-btn1" data-aos="fade-right" data-aos-duration="1200">
                            <a href="contact.html" class="font-ks font-16 lineh-16 color weight-700 shedule-btn2 d-inline-block margin-t28">Start Legal Consulation <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="welcome4-positionalarea">
                        <div class="imag4">
                            <div class="position-bg ">
                                <img src="{{ asset('assets/images/background/position-bg.png') }}" alt="" class="keyframe3" >
                                <img src="{{ asset('assets/images/elementor/elementor73.png') }}" alt="" class="elementors82 keyframe4">
                            </div>
                            <div class="ima1-4">
                                <img src="{{ asset('assets/images/sectionimg/welcome4img.png') }}" alt="" data-aos="zoom-out-up" data-aos-duration="1200">
                            </div>
                            <div class="special-1">
                                <img src="{{ asset('assets/images/icons/special1.png') }}" alt="" class="aniamtion-key-1">
                            </div>
                            <div class="special-2">
                                <img src="{{ asset('assets/images/icons/special2.png') }}" alt="" class="aniamtion-key-2">
                            </div>
                            <div class="special-3">
                                <img src="{{ asset('assets/images/icons/special3.png') }}" alt="" class="aniamtion-key-1">
                            </div>
                        </div>
                        <div class="elementor-21">
                            <img src="{{ asset('assets/images/elementor/elementor21.png') }}" alt="" class="aniamtion-key-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/images/elementor/elementor22.png') }}" alt="" class="elementor-22">
    </div>
    <!--===== WElCOME END=======-->

    <!--===== ABOUT STARTS=======-->
    <div class="about3-section-area section-padding5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="about3-images1">
                        @if($home->aboutUsImage)
                            <img src="{{ asset('storage/'.$home->aboutUsImage) }}" alt="{{ $home->aboutUsTitle }}" data-aos="zoom-out" data-aos-duration="1200">
                        @endif
                        <img src="{{ asset('assets/images/elementor/elementor17.png') }}" alt="" class="elementor-9 keyframe3">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
                    <div class="about3-textarea1">
                        @if($home->aboutUsSubTitle)
                            <span class="about3span font-ks lineh-16 font-16 weight-600 color-29 d-inline-block margin-b24">{{ $home->aboutUsSubTitle }}</span>
                        @endif
                        @if($home->aboutUsTitle)
                            <h1 class="font-lora font-48 lineh-56 weight-600 color-29 margin-b20">{{ $home->aboutUsTitle }}</h1>
                        @endif
                        <p class="font-ks font-16 lineh-26 weight-500 color-30 ">
                            {!! nl2br(($home->aboutUsContent)) !!}
                        </p>
                        @if($home->aboutUsButtonLink)
                            <a href="{{ $home->aboutUsButtonLink }}"
                               class="theme6-btn6 font-ks lineh-16 weight-700 color font-16 margin-t32">
                                {{ $home->aboutUsButtonLabel }} <span><i class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== ABOUT END=======-->

    <!--===== SERVICE STARTS=======-->
    <div class="service-3-section-area section-padding5">
        <img src="{{ asset('assets/images/elementor/elementor23.png') }}" alt="" class="elementor24">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-aos="fade-up" data-aos-duration="800">
                    <div class="service-4-textarea4 text-center margin-b60">
                        <span class="about3span font-ks lineh-16 font-16 weight-600 color-29 d-inline-block margin-b24">What we offer</span>
                        <h1 class="font-lora font-48 lineh-56 weight-600 color-29">Our Best Services</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="800">
                    <a href="#">
                        <div class="service4-boxarea5 text-center margin-b24">
                            <div class="service5-boxarea5">
                                <div class="service5-icons margin-b20">
                                    <img src="{{ asset('assets/images/icons/forensic-accounting-line-icon-vector.png') }}" height="38" alt="">
                                </div>
                                <p class="font-lora font-20 lineh-26 weight-600 color-31">Forensic Accounting & Investigations Expert Services</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                    <a href="#">
                        <div class="service4-boxarea5 text-center margin-b24">
                            <div class="service5-boxarea5">
                                <div class="service5-icons margin-b20">
                                    <img src="{{ asset('assets/images/icons/disruption.png') }}" height="38" alt="">
                                </div>

                                <p class="font-lora font-20 lineh-26 weight-600 color-31">Delay & Disruption Expert Services</p>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1200">
                    <a href="#">
                        <div class="service4-boxarea5 text-center margin-b24">
                            <div class="service5-boxarea5">
                                <div class="service5-icons margin-b20">
                                    <img src="{{ asset('assets/images/icons/governance.png') }}" height="38" alt="">
                                </div>
                                <p class="font-lora font-20 lineh-26 weight-600 color-31">Claims Governance Services</p>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1400">
                    <a href="#">
                        <div class="service4-boxarea5 text-center margin-b24">
                            <div class="service5-boxarea5">
                                <div class="service5-icons margin-b20">
                                    <img src="{{ asset('assets/images/icons/construction.png') }}" height="38" alt="">
                                </div>
                                <p class="font-lora font-20 lineh-26 weight-600 color-31">Construction Claims Consultants</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                    <a href="#">
                        <div class="service4-boxarea5 text-center">
                            <div class="service5-boxarea5">
                                <div class="service5-icons margin-b20">
                                    <img src="{{ asset('assets/images/icons/infrastructure.png') }}" height="38" alt="">
                                </div>
                                <p class="font-lora font-20 lineh-26 weight-600 color-31">Infrastructure & Capital Projects Advisory</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1200">
                    <a href="#">
                        <div class="service4-boxarea5 text-center">
                            <div class="service5-boxarea5">
                                <div class="service5-icons margin-b20">
                                    <img src="{{ asset('assets/images/icons/law3.png') }}" alt="">
                                </div>
                                <p class="font-lora font-20 lineh-26 weight-600 color-31">Corporate Finance Services Advisory</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1400">
                    <a href="#">
                        <div class="service4-boxarea5 text-center">
                            <div class="service5-boxarea5">
                                <div class="service5-icons margin-b20">
                                    <img src="{{ asset('assets/images/icons/personal1.png') }}" alt="">
                                </div>
                                <p class="font-lora font-20 lineh-26 weight-600 color-31">Claim Management Studio</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-12" data-aos="fade-up" data-aos-duration="1200">
                    <div class="theme6-btn6 text-center margin-t60 resposinespace">
                        <a href="service.html" class="theme6-btn6 font-ks lineh-16 weight-700 color font-16">See More Services <span><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/images/elementor/elementor23.png') }}" alt="" class="elementor25">
    </div>
    <!--===== SERVICE END=======-->

    <!--===== INDUSTRIES STARTS=======-->
    <div class="industries-section-area section-padding5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
                    <div class="client3-section-textarea">
                        <span class="about3span font-ks lineh-16 font-16 weight-600 color-29 d-inline-block margin-b24">How it works</span>
                        <h1 class="font-lora font-48 lineh-56 weight-600 color-29 margin-b20 clienth2">Our Industries</h1>
                        <p class="font-ks font-16 lineh-26 weight-500 color-30  margin-b30">We are a team of highly experienced project management professionals with a powerful reputation for delivering successfulprojects in the construction, Oil &Gas industries. With over 25 years of collective experience in international project management consulting,Oil & Gas, Energy, PPP Projects, and government and private projects, our team possesses the expertise and knowledge requiredto ensure the smooth execution of your project.</p>

                        <ul>
                            <li class="font-ks font-16 lineh-16 weight-600 color-17 margin-b20"><span><img src="{{ asset('assets/images/icons/check1.png') }}" alt=""></span>Project &Claim Management </li>
                            <li class="font-ks font-16 lineh-16 weight-600 color-17 margin-b20"><span><img src="{{ asset('assets/images/icons/check1.png') }}" alt=""></span>Information Technology</li>
                            <li class="font-ks font-16 lineh-16 weight-600 color-17 margin-b20"><span><img src="{{ asset('assets/images/icons/check1.png') }}" alt=""></span>Medical System management</li>
                            <li class="font-ks font-16 lineh-16 weight-600 color-17"><span><img src="{{ asset('assets/images/icons/check1.png') }}" alt=""></span>Corporate Services</li>
                        </ul>
                        <a href="industries.html" class="theme6-btn6 font-ks lineh-16 weight-700 color font-16 margin-t32">Learn More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="client4-img1">
                        <img src="{{ asset('assets/images/sectionimg1/industries.png') }}" class="industriesImage" alt="" data-aos="zoom-in" data-aos-duration="1200">
                        <img src="{{ asset('assets/images/elementor/elementor17.png') }}" alt="" class="elementor-23 keyframe3">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== INDUSTRIES END=======-->

    <!--===== VISION STARTS=======-->
    <div class="vission-section-area section-padding5">
        <img src="{{ asset('assets/images/elementor/elementor23.png') }}" alt="" class="elementor24">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="vissionimages">
                        <img src="{{ asset('assets/images/sectionimg1/image-2.jpg') }}" class="visionImage" alt="">
                        <img src="{{ asset('assets/images/elementor/elementor17.png') }}" alt="" class="elementor-23 keyframe3">

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="vission-textarea">
                        <span class="about3span font-ks lineh-16 font-16 weight-600 color-29 d-inline-block margin-b24">Vision</span>
                        <p class="font-16 lineh-26 weight-500 color-30 margin-b24"><span class="weight-700 color-29">Our Approach:</span> What sets us apart is our holistic approach to consultancy. We understand that true transformation requires more than just surface-level fixes. That's why we take the time to delve deep into the heart of each challenge, exploring every angle and uncovering hidden opportunities for growth. By combining analytical rigor with creative thinking, we develop innovative strategies that drive tangible results and deliver lasting impact.</p>
                        <p class="font-16 lineh-26 weight-500 color-30 margin-b24"><span class="weight-700 color-29">Our Values:</span> What sets us apart is our holistic approach to consultancy. We understand that true transformation requires more than just surface-level fixes. That's why we take the time to delve deep into the heart of each challenge, exploring every angle and uncovering hidden opportunities for growth. By combining analytical rigor with creative thinking, we develop innovative strategies that drive tangible results and deliver lasting impact.</p>
                        <!-- <div class="border7 margin-b20"></div> -->


                        <a href="vision.html" class="theme6-btn6 font-ks lineh-16 weight-700 color font-16 ">Learn More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>

            </div>
        </div>
        <img src="{{ asset('assets/images/elementor/elementor23.png') }}" alt="" class="elementor25">
    </div>
    <!--===== VISION END =======-->


    <!--===== CTA STARST=======-->
    <div class="cta4-section-area section-padding7">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta4-carousel owl-carousel">
                        <div class="cta4-textarea4 ">
                            <p class="font-ks font-24 lineh-34 weight-500 color text-center">“Our law consulting team comprises seasoned legal professionals with a track record of success across various industries and legal domains. You can trust in our expertise and dedication to achieving the best possible outcomes for you.”</p>
                            <div class="cta4-manarea margin-t40">
                                <img src="{{ asset('assets/images/sectionimg/ctaman.png') }}" alt="">
                                <div class="cta4-mantext">
                                    <h1 class="font-24 font-lora weight-600 lineh-24 color margin-b">Alex-David Luis</h1>
                                    <p class="font-ks font-16 lineh-16 weight-500 color">Our Attorneys</p>
                                </div>
                            </div>
                        </div>

                        <div class="cta4-textarea4 ">
                            <p class="font-ks font-24 lineh-34 weight-500 color text-center">“Our law consulting team comprises seasoned legal professionals with a track record of success across various industries and legal domains. You can trust in our expertise and dedication to achieving the best possible outcomes for you.”</p>
                            <div class="cta4-manarea margin-t40">
                                <img src="{{ asset('assets/images/sectionimg/ctaman.png') }}" alt="">
                                <div class="cta4-mantext">
                                    <h1 class="font-24 font-lora weight-600 lineh-24 color margin-b">Alex-David Luis</h1>
                                    <p class="font-ks font-16 lineh-16 weight-500 color">Our Attorneys</p>
                                </div>
                            </div>
                        </div>


                        <div class="cta4-textarea4 ">
                            <p class="font-ks font-24 lineh-34 weight-500 color text-center">“Our law consulting team comprises seasoned legal professionals with a track record of success across various industries and legal domains. You can trust in our expertise and dedication to achieving the best possible outcomes for you.”</p>
                            <div class="cta4-manarea margin-t40">
                                <img src="{{ asset('assets/images/sectionimg/ctaman.png') }}" alt="">
                                <div class="cta4-mantext">
                                    <h1 class="font-24 font-lora weight-600 lineh-24 color margin-b">Alex-David Luis</h1>
                                    <p class="font-ks font-16 lineh-16 weight-500 color">Our Attorneys</p>
                                </div>
                            </div>
                        </div>


                        <div class="cta4-textarea4 ">
                            <p class="font-ks font-24 lineh-34 weight-500 color text-center">“Our law consulting team comprises seasoned legal professionals with a track record of success across various industries and legal domains. You can trust in our expertise and dedication to achieving the best possible outcomes for you.”</p>
                            <div class="cta4-manarea margin-t40">
                                <img src="{{ asset('assets/images/sectionimg/ctaman.png') }}" alt="">
                                <div class="cta4-mantext">
                                    <h1 class="font-24 font-lora weight-600 lineh-24 color margin-b">Alex-David Luis</h1>
                                    <p class="font-ks font-16 lineh-16 weight-500 color">Our Attorneys</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== CTA END=======-->


    @if($posts->count() > 0 )
    <!--===== BLIOG STARTS=======-->
    <div class="blog-5-section-area section-padding7">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog5-header5 margin-b60 text-center">
                        <span class="about3span font-ks lineh-16 font-16 weight-600 color-29 d-inline-block margin-b24">Our Blog</span>
                        <h1 class="font-lora font-48 lineh-56 weight-600 color-29 margin-b20 clienth2">Our Latest News & Blog</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($posts as $post)
                <div class="col-lg-6" data-aos="fade-up" data-aos-duration="{{ $loop->index * 200 + 1000 }}">
                    <div class="blog5-author5">
                        <div class="blog5-imag5">
                            <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}">
                        </div>
                        <div class="blog-auhtor-text">
                            <div class="blog-author-flex">
                                <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}">
                                <a href="{{ route('post' , ['Post' => $post->slug]) }}"><p class="font-outfit font-16 lineh-26 weight-500 color-17">{{ $post->created_at->format('d F Y') }}</p></a>
                            </div>
                            <h1 class="font-lora font-20 lineh-20 weight-600 color-29 margin-t margin-b">
                                <a href="{{ route('post' , ['Post' => $post->slug]) }}" class="color-29">
                                    {{ $post->title }}
                                </a>
                            </h1>
                            <p class="font-16 font-ks lineh-26 weight-500 color-30 margin-b30">
                                {{ $post->subTitle }}
                            </p>
                            <a href="{{ route('post' , ['Post' => $post->slug]) }}" class="font-ks font-16 lineh-16 weight-700 color-29 learnmore3">
                                Learn More <span><i class="fa-solid fa-arrow-right"></i></span>
                            </a>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--===== BLIOG END=======-->
    @endif

    <!--===== CONTACT STARTS=======-->
    <div class="contcat5-section-area section-padding5">
        <img src="{{ asset('assets/images/elementor/elementor23.png') }}" alt="" class="elementor24">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
                    <div class="contcat5-textarea5">
                        <span class="about3span font-ks lineh-16 font-16 weight-600 color-29 d-inline-block margin-b24">Contact Us</span>
                        <h1 class="font-lora font-48 lineh-56 weight-600 color-29 margin-b20 clienth2">Contact Us for Expert Legal Guidance</h1>
                        <p class="font-ks font-16 weight-500 lineh-26 color-30">Provide professional advice and guidance on legal matters, helping clients understand their rights, obligations, and potential courses.</p>
                        <div class="phone7-textarea margin-t32" data-aos="fade-right" data-aos-duration="1000">
                            <div class="phone7-icon">
                                <img src="{{ asset('assets/images/icons/phone8.png') }}" alt="">
                            </div>
                            <div class="phone7-text">
                                <p class="font-16 lineh-16 weight-500 font-ks color-30 margin-b">Gives us a Call</p>
                                <a href="tel:123-456-7890" class="font-lora font-24 weight-700 lineh-24 color-29">+965 2227 2212</a>
                            </div>
                        </div>

                        <div class="phone7-textarea margin-t" data-aos="fade-right" data-aos-duration="1200">
                            <div class="phone7-icon">
                                <img src="{{ asset('assets/images/icons/email7.png') }}" alt="">
                            </div>
                            <div class="phone7-text">
                                <p class="font-16 lineh-16 weight-500 font-ks color-30 margin-b">Send me Mail</p>
                                <a href="mailto:Consult@hotmail.com" class="font-lora font-24 weight-700 lineh-24 color-29">info@whitewolfkw.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="contact5-main-section">
                        <div class="contact-main-text">
                            <h1 class="font-lora font-24 lineh-24 weight-600 color">Send us a Message</h1>
                            <!-- <p class="font-ks font-16 lineh-26 weight-500 color margin-t">As a fellow small business owner, we know the fulfillment that an a comes from running your own business contact to Financy.</p> -->
                        </div>
                        <div class="contac5-input5area">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-5area margin-t32">
                                        <input type="text" placeholder="First Name">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="input-5area margin-t32">
                                        <input type="text" placeholder="Last Name">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="input-5area margin-t">
                                        <input type="email" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="input-5area margin-t">
                                        <input type="number" placeholder="Phone">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="input-5area margin-t">
                                        <input type="text" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-5area margin-t">
                                        <textarea cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                    <div class="contact5-btn5" data-aos="fade-right" data-aos-duration="1200">
                                        <button class="font-ks font-16 lineh-16 weight-700 color margin-t32 contcat5" type="submit">Submit Now <span><i class="fa-solid fa-arrow-right"></i></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/images/elementor/elementor23.png') }}" alt="" class="elementor25">
    </div>
    <!--===== CONTACT END=======-->


@endsection

