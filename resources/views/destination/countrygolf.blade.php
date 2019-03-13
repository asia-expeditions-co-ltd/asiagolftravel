@extends('include.header')

@section('title', 'Destinations')
@section('keywords', 'Asia Golf Travel, Golf in {{$country->country_name}}')
@section('description', 'destinations to visit and have lot of golf courses')

<?php use App\component\Content;?>
@section('content')
   <script src="{{asset('js/jquery.min.js')}}"></script>




  <!--==========================
    Header
  ============================-->
 @include('include.menu')

 <!--==========================
      About Us Section
    ============================-->

<div class="mycontainer">
  <img src="/photos/share/images.jpg" alt="Nature" style="width:100%;">
  <div class="text-block">
    <h2 style="color: white;font-weight: 700;">Destinations</h2>
   <!--  <p style="color: white;">What a beautiful sunrise</p> -->
 </div>

</div>
 



    <!-- /// -->


    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>{{ isset($country->country_name) ? $country->country_name : '' }}</h3>
       
        </header>

        <div class="row about-cols">

          <div class="col-md-12 wow fadeInUp">
            <div class="about-col">
              <div class="img" style="text-align: center;">

                <img src="/photos/share/{{ isset($country->country_photo) ? $country->country_photo: ''}}" alt="" id="img-item" class="img-relative">
             
              </div>
              <h2 class="title"><a href="#">Information</a></h2>
              <p>
              {!! isset($country->country_intro) ? $country->country_intro: '' !!}
              </p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- #about -->

        <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>All Golf Clubs and hotels | Play Golf in {{ isset($country->country_name) ? $country->country_name : '' }}</h3>
        </header>

        <div class="owl-carousel clients-carousel">
           @foreach($des_sup as $data)         
            <div class="item wow bounceInUp " style="padding: 5px;" data-wow-duration="1.4s" style="">
              <div class="card">
 <a href="{{route('supDetails')}}?id={{$data->id}}">
                 <img src="/photos/share/thumbs/{{ isset($data->supplier_photo) ? $data->supplier_photo: ''}}" alt="img" class="img-fluid">
                  <div class="card-body" style="padding: 0.15rem; margin-left: 10px;">
</a>
            
                  <p style="color: blue;">{{$data->province->province_name}}</p>
                  <p>{{$data->supplier_name}}</p>
                  <div style="height: 72px; overflow: hidden;">                
                    {!! isset($data->description) ? $data->description : '' !!}    
                  </div >              
                    <a href="{{route('supDetails')}}?id={{$data->id}}">
                    <center>
                  <button class="btn btn-primary" style="height: 30px; font-size: 12px;" >View Details</button></center> </a>
                  
                  </div>              
                </div>
            </div>  
                @endforeach   
        </div>

      </div>
    </section><!-- #clients -->



      <!--  Demos -->

    <section id="" class="conme" style="margin-top:0px;">
      <div class="container">
          <header class="section-header">
          <h3>Top Golf Tours & Packages In {{$country->country_name}}</h3>
        </header>
      <div class="row">

      @foreach(\App\Tour::where(['country_id'=>$country->id,'status'=>1])->inRandomOrder()->limit(4)->orderBy('province_id', 'DESC')->get() as $tour)

                 
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

        
      </div>
    </div>
    </section>


    

<div style="margin-top: 50px;"></div>
   <script type="text/javascript">
 $(document).ready(function(){
     $(".menu-has-children").addClass('menu-active');
  });
  </script>


     @include('include.footer')
     

@endsection
   