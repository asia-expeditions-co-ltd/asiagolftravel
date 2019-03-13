@extends('include.header')

@section('title', 'Hotels & Resort')
@section('keywords', 'Asia Golf Travel, Hotels Resort ')
@section('description', 'destinations to visit and have lot of golf courses')

<?php use App\component\Content;?>
@section('content')

  <!--==========================
    Header
  ============================-->
 @include('include.menu')
  
<div class="mycontainer">
  <img src="/photos/share/Thiripyitsaya Sanctuary Resort.jpg" alt="Nature" style="width:100%;">
  <div class="text-block">
    <h4 style="color: white; font-weight: 700;">Hotels and Resorts</h4>
   <!--  <p style="color: white;">What a beautiful sunrise</p> -->
 </div>

</div>

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container" id="myDIV" >

        <header class="section-header">
          <h3 class="section-title">Hotels and Resorts</h3>
        </header>

    <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters" class="country">
               @foreach($data_cunt as $dataitem)
               <li class="" data-filter=".filter-kh" data-id="{{$dataitem->id}}" id="{{$dataitem->id}}">{{$dataitem->country_name}}</li>
               @endforeach 
            </ul>
          </div>
    </div>
      
          <div class="row" id="addnew"></div>

<div id="more"></div>
      </div>
 </section>



     <!-- #portfolio -->
    <script type="text/javascript">
       $(document).ready(function(){
 $("#{{$dataitem->id}}").trigger('click'); 

 $(".hotel").addClass('menu-active');
});

     </script>

@include('include.footer')

@endsection