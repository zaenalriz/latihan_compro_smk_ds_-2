@extends('layouts.master')
@section('content')
    <div id="content">
        <div class="slider-block style-one">
            <div class="prev-arrow flex-center">
                <i class="ph-bold ph-caret-left text-white"></i>
            </div>
            <div class="slider-main">
                @foreach ($sliders as $item)
                    <div class="slider-item slider-first">
                        <div class="bg-img">
                            <img class="w-100 h-100 animate__animated animate__fadeIn animate__delay-0-2s"
                                src="{{ $item->file }}" alt="" />
                        </div>
                        <div class="container">
                            <div class="text-content flex-columns-between">
                                <div class="heading2 text-white animate__animated animate__fadeInUp animate__delay-0-2s">
                                    {{ $item->title }}
                                </div>
                                <div
                                    class="body2 text-white mt-12 text-secondary animate__animated animate__fadeInUp animate__delay-0-5s">
                                    {{ $item->description }}
                                </div>
                                <div class="button-block mt-40 animate__animated animate__fadeInUp animate__delay-0-8s">
                                    <a class="button-share display-inline-block hover-button-black border-none bg-blue text-white text-button pl-28 pr-28 pt-12 pb-12 bora-8"
                                        href="service-one.html">Discovery now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="next-arrow flex-center">
                <i class="ph-bold ph-caret-right text-white"></i>
            </div>
        </div>
        <div class="service-block mt-100">
            <div class="container">
                <div class="heading3 text-center">Layanan Kami</div>
                <div class="list-service row mt-40 row-gap-32">
                    @foreach ($services as $item)
                        <div class="col-12 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="service-item hover-box-shadow bora-8 p-32 bg-white border-line-1px">
                                <a class="service-item-main flex-column gap-16" href="service-cryptocurrency-trading.html">
                                    <div class="heading flex-between">
                                        <div class="number heading3 text-placehover"></div>
                                    </div>
                                    <div class="desc">
                                        <div class="heading7 hover-text-blue">
                                            {{ $item->title }}
                                        </div>
                                        <div class="body3 text-secondary mt-4">
                                            {{ $item->description }}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="payment-gateway-one mt-100 bg-surface">
            <div class="bg-img">
                <img class="w-100 h-100" src="assets/images/component/960x680.png" alt="" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-6">
                        <div class="payment-infor flex-columns-between">
                            <div class="heading flex-item-center gap-16">
                                <div class="bg-img">
                                    <img class="w-100" src="assets/images/component/avatar-gateway1.png" alt="" />
                                </div>
                                <div class="text-button text-secondary">
                                    Trusted by 50M+ People <br />around the globe
                                </div>
                            </div>
                            <div class="text">
                                <div class="heading3">Payment Gateway Services</div>
                                <div class="body3 text-secondary mt-24">
                                    We provide reliable and secure payment gateway services for
                                    businesses of all sizes. With our cutting-edge technology
                                    and 24/7 customer support, you can easily accept payments
                                    from customers all over the world.
                                </div>
                            </div>
                            <div class="button-block flex-item-center gap-24">
                                <a class="button-share box-shadow hover-button-black text-white bg-blue text-button pt-12 pb-12 pl-36 pr-36 bora-48"
                                    href="contact-two.html">Get started</a><a
                                    class="button-share box-shadow hover-button-black text-on-surface bg-white text-button pt-12 pb-12 pl-36 pr-36 bora-48 flex-item-center gap-8"
                                    href="contact-two.html"><i class="ph ph-phone fs-20"></i><span>(00) 123 456
                                        789</span></a><img src="assets/images/component/gateway1-dot.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-list style-one mt-100 mb-5">
            <div class="container">
                <div class="heading3 text-center">Latest News</div>
                <div class="row row-gap-32 mt-40">
                    @foreach ($blogs as $item)
                        <div class="blog-item col-12 col-xl-4 col-sm-6" data-name="">
                            <a class="blog-item-main" href="blog-detail-two.html">
                                <div class="bg-img w-100 overflow-hidden mb-minus-1">
                                    <img class="w-100 h-100 display-block" src="{{ $item->file }}"
                                        alt="CI Financial sells RIA stake in new expansion strategy" />
                                </div>
                                <div class="infor bg-white p-24">
                                    <div class="caption2 pt-4 pb-4 pl-12 pr-12 bg-surface bora-40 display-inline-block">
                                        Makerting
                                    </div>
                                    <div class="heading6 mt-8">
                                        {{ $item->title }}
                                    </div>
                                    <div class="date flex-item-center gap-16 mt-8">
                                        <div class="author caption2 text-secondary">
                                            by <span class="text-on-surface">Avitex</span>
                                        </div>
                                        <div class="item-date flex-item-center">
                                            <i class="ph-bold ph-calendar-blank"></i><span class="ml-4 caption2">1 days
                                                ago</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <a class="scroll-to-top-btn" href="#header"><i class="ph-bold ph-caret-up"></i></a>
    </div>
@endsection
