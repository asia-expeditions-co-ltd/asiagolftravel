

@extends('include.header')

<?php use App\component\Content;?>

@section('content')







  <!--==========================

    Header

  ============================-->

 @include('include.menu')



 <!--==========================

      About Us Section

    ============================-->
     @if($data->country_id==30)
    <?php $dataimg='angkor.jpg'; ?>
    @elseif($data->country_id==122)
    <?php $dataimg='myanmar.jpg'; ?>
    @elseif($data->country_id==30)
    <?php $dataimg='angkor.jpg'; ?>
    @elseif($data->country_id==206)
    <?php $dataimg='vietnam.jpg'; ?>
    @elseif($data->country_id==207)
    <?php $dataimg='thailand.jpg'; ?>
    @elseif($data->country_id==175)
    <?php $dataimg='laos.jpg'; ?>
    @endif

    <div class="mycontainer">

  <img src="/photos/share/{{$dataimg}}" alt="Nature" style="width:100%;">

  <div class="text-block">

    <h4 style="color: white; font-size: 30px;font-weight: 700; padding-top: 15px;">Destinations</h4>

   <!--  <p style="color: white;">What a beautiful sunrise</p> -->

 </div>



</div>

    <section id="about">

      <div class="container">



        <header class="section-header">

          <h3>{{ $data->province_name }}</h3>

       

        </header>



        <div class="row about-cols">

          <div class="col-md-12 wow fadeInUp">
            <div class="about-col">
             <div class="img" style="text-align: center;">

                <img src="/photos/share/{{ isset($data->province_photo) ? $data->province_photo: ''}}" alt="" id="img-item" class="img-relative">
             
              </div>
              <h2 class="title"><a href="#">Information</a></h2>
              <p>
              {!! isset($data->province_intro) ? $data->province_intro: '' !!}
              </p>
            </div>
          </div>
 
  

        </div>


      </div>

    </section><!-- #about -->



<!-- selection of packages -->

    <section class="conme" >

    <div class="container">

          <header class="section-header">

          <h3>Golf Holiday Packages & Tours | Play Golf in {{ isset($data->province_name) ? $data->province_name : '' }}</h3>

        </header>

      <div class="row">

                    

          @foreach($mytour as $mydata)

                <div class="col-lg-3 col-md-4 col-sm-6" style="margin-top: 10px; margin-bottom: 10px;">

                 

            <div class="item wow bounceInUp" data-wow-duration="1.4s" style="">

              <div class="card">


<a href="{{route('Details')}}?id={{$mydata->id}}">
                <img src="/photos/share/thumbs/{{ isset($mydata->photo) ? $mydata->photo: ''}}" alt="img" class="img-fluid">
</a>
                  <div class="card-body" style="padding: 0.15rem; margin-left: 10px;">



                    <a href=""><span class="">{{$mydata->province->province_name  }}</span></a>



                      <p> <span class="text-center">{{isset($mydata->tour_price)? '$'.$mydata->tour_price: ''}}</span></p>

                      <p style="overflow: hidden;height: 71px;font-size: 14px;margin: 0px;">{{$mydata->title}}</p>

                   <a href="{{route('Details')}}?id={{$mydata->id}}">

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

    <!-- end selecion package -->



    <div style="margin-top: 50px;"></div>

     @include('include.footer')



@endsection

     



   