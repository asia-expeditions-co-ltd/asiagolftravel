@extends('include.header')
@section('title', 'Golf Courses')
@section('keywords', 'Asia Golf Travel, Golf Asia')
@section('description', 'destinations to visit and have lot of golf courses')

<?php use App\component\Content;?>
@section('content')
  <!--==========================
    Header
  ============================-->
 @include('include.menu')
  
    <!--  Demos -->
<main id="main">
    <div class="mycontainer">
        <img src="/photos/share/golf_course.jpg" alt="Nature" style="width:100%;">
          <div class="text-block">
            <h4 style="color: white; font-weight: 700;  padding-top: 15px;">Golf Courses</h4>
           <!--  <p style="color: white;">What a beautiful sunrise</p> -->
         </div>
    </div>

    <section id="portfolio" style="">
      <div class="container">
            <header class="section-header">
            <h3>Golf Courses</h3>
            </header>

     <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters" class="country_golf">
               @foreach($data_cunt as $dataitem)
               <li class="datacun" data-filter=".filter-kh" data-id="{{$dataitem->id}}" id="{{$dataitem->id}}">{{$dataitem->country_name}}</li>
               @endforeach 
            </ul>
          </div>
    </div>


<div class="row" id="addgolf"></div>

      <div class="row" id="regolf">
     
        </div>
      
<div id="more"></div>
    </div>
    </section>
  
</main>
<div style="margin-top: 50px;"></div>
  <script type="text/javascript">
       $(document).ready(function(){
 $("#{{$dataitem->id}}").trigger('click'); 
 $(".Courses").addClass('menu-active');
});
     </script>
@include('include.footer')

@endsection