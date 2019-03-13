@extends('include.header')

@section('title', '')

@section('keywords', 'Asia Golf Travel, Golf Destinations')

@section('description', 'Asia Golf Travel destinations to visit and have lot of golf courses')

 <?php use App\component\Content;?>

@section('content')
  <!--==========================
    Header
  ============================-->
 @include('include.menu')


  <!--==========================
    Intro Section
  ============================-->
  @include('include.slidetop')
 <!-- #intro -->

     
  @include('include.fsearch')



  <main id="main">
    <!--==========================
    Slide Packag
  ============================-->
     
    @include('include.slidegolf')


<!-- Pop Place -->
    @include('include.popplace')

   

    <!--==========================
      Services Section
    ============================-->
  

   


    <!--==========================
      Portfolio Section
    ============================-->
    
  
@if($webs)
    <!--  Demos -->

    <section class="conme" style="margin-top:0px;">
      <div class="container">
          <header class="section-header">
          <h3>Tours & Golf Package</h3>
        </header>
        <p></p>
      <div class="row">
                    
             @foreach($webs->chunk(4) as $key => $chunkTour)
                 @foreach($chunkTour as $tour)
                 
                <div class="col-lg-3 col-md-4 col-sm-6" style="margin-top: 10px; margin-bottom: 10px;">
                 
            <div class="item wow bounceInUp" data-wow-duration="1.4s" style="">
              <div class="card">
<a href="{{route('tourDetails', ['url'=> $tour->slug])}}">
                <img src="{{Content::urlImage($tour->photo)}}" alt="img" class="img-fluid">
              </a>
                  <div class="card-body" style="padding: 0.15rem; margin-left: 10px;">

                    <a href=""><span class="">{{$tour->province->province_name  }}</span></a>

                  <p><span class="text-center">{{isset($tour->tour_price)? '$'.$tour->tour_price: ''}}</span></p>
                  <p style="overflow: hidden;height: 71px;font-size: 14px;margin: 0px;">{{$tour->title}}</p>
                  <a href="{{route('tourDetails', ['url'=> $tour->slug])}}">
                    <center>
                  <button class="btn btn-primary" style="height: 30px; font-size: 12px;" >View Details</button></center> </a>
                  
                  </div>
              </div>
            </div>
          </div>
         
                @endforeach 
            @endforeach 

        
      </div>
    </div>
    </section>
    @endif
    <!-- <a href="all-detail/0/1" id="more1"  class="btnmore"><span>View More</span></a> -->
  <div style="margin-top: 25px;"></div>
  </main>
    <script type="text/javascript">
        $(document).ready(function(){
        $(".home").addClass('menu-active');
  });
  </script>

@include('include.footer')
@endsection