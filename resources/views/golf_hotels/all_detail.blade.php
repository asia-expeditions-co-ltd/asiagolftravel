@extends('include.header')
@section('title', 'All Detail')
@section('keywords', 'Asia Golf Travel, Golf Asia')
@section('description', 'destinations to visit and have lot of golf courses')

<?php use App\component\Content;?>
@section('content')

 @include('include.menu')
  
    <!--  Demos -->
<main id="main">
    <div class="mycontainer">
        <img src="/photos/share/amata.jpg" alt="Nature" style="width:100%;">
          <div class="text-block">
            <h4 style="color: white; font-weight: 700;"> All @if($get_c->type==1)Tours & Golf Packages @elseif($get_c->type==2) Golf Courses @else Hotels & Resort  @endif  {{isset($get_c->country->country_name)? 'In '.$get_c->country->country_name: ''}} </h4>
           <!--  <p style="color: white;">What a beautiful sunrise</p> -->
         </div>
    </div>

    <section id="portfolio" style="">
      <div class="container">
            <header class="section-header">
            <h3>All @if($get_c->type==1)TOURS AND GOLF PACKAGES @elseif($get_c->type==2) GOLF COURSES @else HOTELS AND RESORTS  @endif {{isset($get_c->country->country_name)? 'In '.$get_c->country->country_name: ''}}  </h3>
            </header>


<div class="row" id="addgolf"></div>

      <div class="row" id="regolf">
  
     @foreach($data_all as $tour) 
  
    <div class="col-lg-4 col-md-6 col-sm-6 portfolio-item filter-kh wow fadeInUp" data-wow-delay="0.2s" style="margin-top: 10px; margin-bottom: 10px; overflow: inherit;">
             <div  class="item wow bounceInUp" data-wow-duration="1.5s">
              <div  class="card" >
                 <div class="portfolio-wrap">
<a href="{{route('golfDetails', ['url'=> $tour->slug])}}">
       <img src="{{Content::urlImage($tour->photo)}}" alt="img" class="img-fluid">
</a>
           
                  <div  class="card-body" style="padding: 0.15rem; margin-left: 10px;">

                    <a href=""><span class="">{{ isset($tour->province->province_name)? $tour->province->province_name: ''}}</span></a>

                  <p style="height: 30px; font-size: 16px">{{$tour->title}}</p>
                  <p></p>
                  <a href="{{route('golfDetails', ['url'=> $tour->slug])}}">
                  <center>
                     <button class="btn btn-primary" style="height: 30px; font-size: 12px;" >View Details</button>
                  </center>
                </a>
                  </div>
                  </div>
              </div>
            </div>
          </div>
    @endforeach 
        </div>  
        <div style="margin-left: 40%;">
        {{ $data_all->links() }}</div>
    </div>
    </section>
  
</main>
<div style="margin-top: 50px;"></div>

@include('include.footer')

@endsection