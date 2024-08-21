@extends('layouts.master')
@section('content')
<div id="content">
    <div class="blog-list style-detail mt-100">
      <div class="container"> 
        <div class="row flex-center">
          <div class="col-12 col-lg-8">
            <div class="blog-paragraph"> 
              <div class="paragraph-heading"><a class="caption2 pt-8 pb-8 pl-16 pr-16 bg-surface bora-20 hover-button-black" href="#!">Business</a>
                <div class="heading4 mt-16">{{$blog->title}}</div>
                <div class="date flex-item-center gap-16 mt-16">
                  <div class="author caption2 text-secondary">by <span class="text-on-surface">Avitex </span></div>
                  <div class="item-date flex-item-center"><i class="ph-bold ph-calendar-blank"></i><span class="ml-4 caption2">2 days ago</span></div>
                </div>
                <div class="bg-img mt-32"><img class="w-100 bora-16" src="{{asset($blog->file)}}" alt="file"/></div>
              </div>
             {!!$blog->description!!}
            </div>
          </div>
        </div>
      </div>
    </div><a class="scroll-to-top-btn" href="#header"><i class="ph-bold ph-caret-up"></i></a>
    <div class="pb-100">    </div>
  </div>
@endsection