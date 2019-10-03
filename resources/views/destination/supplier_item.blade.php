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
@foreach($suppitetm as $data)
  <div class="mycontainer">
    <img src="/photos/share/{{$data->country->country_picture}}" alt="Nature" style="width:100%;">
    <div class="text-block">
      <h4 style="color: white; font-size: 30px;font-weight: 700;padding-top: 15px;">Destinations</h4>
   </div>
  </div>
    <section id="about">
      <div class="container">
        <header class="section-header">
          <h3>{{ isset($data->supplier_name) ? $data->supplier_name : '' }}</h3>       
        </header>
        <div class="row about-cols">

          <div class="col-md-12 wow fadeInUp">
            <div class="about-col">          

              <center>            
                <div class="col-md-8 col-sm-12"> 
                  <div class="member">
                    <img src="/photos/share/thumbs/{{ $data->supplier_photo}}" class="img-fluid" alt="">      
                  </div> 
                </div>
              </center>

              <h2 class="title"><a href="#">Information</a></h2>
              <p>{!! isset($data->description) ? $data->description: '' !!}</p>
            </div>
          </div>
        </div>
  @endforeach 
    </div>
    </section><!-- #about -->

   
    
<div style="margin-top: 50px;"></div>

     @include('include.footer')


@endsection
     

   