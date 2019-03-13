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
  <div class="mycontainer">
    <img src="/photos/share/images.jpg" alt="Nature" style="width:100%;">
    <div class="text-block">
      <h4 style="color: white; font-size: 30px;font-weight: 700;">Destinations</h4>
   </div>
  </div>


    <section id="about">
      <div class="container">
@foreach($suppitetm as $data)
        <header class="section-header">
          <h3>{{ isset($data->supplier_name) ? $data->supplier_name : '' }}</h3>
       
        </header>

        <div class="row about-cols">

          <div class="col-md-12 wow fadeInUp">
            <div class="about-col">
              <div class="img" style="text-align: center;">

                <img src="/photos/share/thumbs/{{ $data->supplier_photo}}" alt="" class="img-relative">
             
              </div>
              <h2 class="title"><a href="#">Information</a></h2>
              <p>
              {!! isset($data->description) ? $data->description: '' !!}
              </p>
            </div>
          </div>
 
  

        </div>

            @endforeach 
    </div>
    </section><!-- #about -->

   
    
<div style="margin-top: 50px;"></div>

     @include('include.footer')


@endsection
     

   