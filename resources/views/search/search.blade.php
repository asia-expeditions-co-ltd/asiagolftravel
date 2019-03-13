@extends('include.header')

@section('title', 'AsiaGolfTravel')

@section('keywords', 'Asia Golf Travel, Golf Destinations')

@section('description', 'Asia Golf Travel destinations to visit and have lot of golf courses')

  <!--==========================
    Header
  ============================-->

  <?php use App\component\Content;?>
  @section('content')

 @include('include.menu')

    <!--  Demos -->

    <!--  Demos -->
      @if($getdata->first())
    
    <section class="conme" style="margin-top:100px;">
      <div class="container">
          <header class="section-header">
          <h3>All Results</h3>
        </header>
        <p></p>
      <div class="row">
                    
           
                 @foreach($getdata as $tour)
                 
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
          <?php  $geta[] = (isset($tour->country_id)?  $tour->country_id: '');
                 $gett[] = (isset($tour->title)? $tour->title:'');  ?>

                @endforeach     
      </div>
             <div style="margin-left: 40%;">
             <!-- for paginate    -->
    </div>

    </section>



   

    <section class="conme" style="margin-top:0px; background-color: #9e9e9e0f;">
      <div class="container">
            <header class="section-header">
            <h3>recommendations</h3>
            </header>
          <p></p>
      <div class="row">
                 @foreach(\App\Tour::where(['status'=>1])->whereIn('country_id',$geta)->whereNotIn('title',$gett)->inRandomOrder()->limit(8)->get() as $tour)
                 
                <div class="col-lg-3 col-md-4 col-sm-6" style="margin-top: 10px; margin-bottom: 10px;">
                 
            <div class="item wow bounceInUp" data-wow-duration="1.4s" style="">
              <div class="card">
              <a target="_blank" href="{{route('tourDetails', ['url'=> $tour->slug])}}">
                <img src="{{Content::urlImage($tour->photo)}}" alt="img" class="img-fluid">
              </a>
                  <div class="card-body" style="padding: 0.15rem; margin-left: 10px;">

                    <a href=""><span class="">{{$tour->province->province_name  }}</span></a>

                  <p><span class="text-center">{{isset($tour->tour_price)? '$'.$tour->tour_price: ''}}</span></p>
                  <p style="overflow: hidden;height: 71px;font-size: 14px;margin: 0px;">{{$tour->title}}</p>
                  <a target="_blank" href="{{route('tourDetails', ['url'=> $tour->slug])}}">
                    <center>
                  <button class="btn btn-primary" style="height: 30px; font-size: 12px;" >View Details</button></center> </a>
                  
                  </div>
              </div>
            </div>
          </div>
         
                @endforeach         
      </div>
             <div style="margin-left: 40%;">
   
    </div>

    </section>
    @else
      <header class="section-header" style="margin-top: 200px;">
          <h3>The result has no tour!</h3>
        </header>
    @endif
 

@include('include.footer')

@endsection
