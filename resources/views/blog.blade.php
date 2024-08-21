@extends('layouts.master')
@section('content')
    <div id="content">

        <div class="blog-list mt-100">
            <div class="container">
                <div class="row row-gap-40">
                    <div class="col-12 col-lg-8 flex-column row-gap-40">
                        @foreach ($blogs as $item)
                            <a class="row blog-item row-gap-20 item-filter" href="{{route('blog_detail',$item->slug)}}" data-name="tab-one">
                                <div class="col-12 col-md-6">
                                    <div class="bg-img w-100 overflow-hidden bora-16"><img class="w-100 h-100 display-block"
                                            src="{{ asset($item->file) }}" alt="" /></div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="caption2 pt-4 pb-4 pl-12 pr-12 bg-surface bora-40 display-inline-block">
                                        Development</div>
                                    <div class="heading6 mt-8">{{ $item->title }}</div>
                                    <div class="date flex-item-center gap-16 mt-8">
                                        <div class="author caption2 text-secondary">by <span class="text-on-surface">Avitex
                                            </span></div>
                                        <div class="item-date flex-item-center"><i
                                                class="ph-bold ph-calendar-blank"></i><span class="ml-4 caption2">2 days
                                                ago</span></div>
                                    </div>

                                    <div class="read fw-700 text-underline">Read More</div>
                                </div>
                            </a>
                        @endforeach

                    </div>
                    <div class="col-12 col-lg-4 pl-55">

                        <div class="recent-post-block mt-40">
                            <div class="recent-post-heading heading7">Blog terbaru</div>
                            @foreach ($blog_terbaru as $item)
                                <div class="list-recent-post mt-16">
                                    <div class="recent-post-item d-flex item-start gap-16"><a class="item-img"
                                            href="{{route('blog_detail',$item->slug)}}"><img src="{{asset( $item->file) }}" alt="" /></a>
                                        <div class="item-infor"><a href="{{route('blog_detail',$item->slug)}}">
                                                <div class="item-date flex-item-center"><i
                                                        class="ph-bold ph-calendar-blank"></i><span class="ml-4 caption2">2
                                                        days ago</span></div>
                                                <div class="item-title mt-4">{{ $item->title }}
                                                </div>
                                            </a>
                                          </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </div><a class="scroll-to-top-btn" href="#header"><i class="ph-bold ph-caret-up"></i></a>
        <div class="pb-100"> </div>
    </div>
@endsection
